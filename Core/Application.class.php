<?php

// 判断常量是否定义，如果没有定义，意味着不是请求的index.php
/* if (! defined('ACCESS'))
    exit(); */

    // 初始化类
class Application
{
    // 1. 初始化字符集
    private static function setHeader()
    {
        header('Content-type:text/html;charset=utf-8');
    }

    // 2. 初始化系统常量
    private static function setConst()
    {
        // 设置根目录常量
        define('ROOT_DIR', str_replace('/Core', '', str_replace('\\', '/', __DIR__)));
        // 定义其他目录
        define('CORE_DIR', ROOT_DIR . '/Core'); // 核心路径
        define('CONTROL_DIR', ROOT_DIR . '/Control'); // 控制器路径
        define('CONF_DIR', ROOT_DIR . '/Conf'); // 配置文件路径
        define('MODEL_DIR', ROOT_DIR . '/Model'); // 模型路径
        define('VIEW_DIR', ROOT_DIR . '/View'); // 视图（模板）路径
        define('PUB_DIR', ROOT_DIR . '/Public'); // 资源路径
        define('TOOLS_DIR', CORE_DIR . '/Tools'); // 工具类所在路径
    }

    // 3. 错误信息
    private static function setErrors()
    {
        // 开发环境下，显示错误，显示所有级别的错误
        // 生产环境下，不显示错误，隐藏所有的级别的错误（系统要做好容错处理）
        @ini_set('error_reporting', 1);
        @ini_set('display_errors', 1);
    }

    // 4. 文件包含
    private static function setInclude()
    {
        include (CONF_DIR . '/Config.php'); // 加载配置文件
        include (CORE_DIR . '/DB.class.php'); // 加载数据库类
        include (CORE_DIR . '/Model.class.php'); // 加载模板类
        include (TOOLS_DIR . '/Upload.class.php'); // 加载文件上传类
        include (TOOLS_DIR . '/smarty/Smarty.class.php'); // 加载模板引擎
        include (CORE_DIR . '/View.class.php'); // 加载视图类
        include (CORE_DIR . '/Control.class.php'); // 加载控制器类
        include (TOOLS_DIR . '/Mail.class.php');//加载发送邮件类
        $GLOBALS['config'] = $config;
    }

    //5.自动加载
    private static function setAutoload()
    {
        // 系统会判断当前提供的参数是一个函数（字符串）还是一个数组
        // 如果是一个数组：1.找到数组的第一个参数，判断该参数，如果参数不是一个对象，
        // 系统会认为该字符串是一个类名，所以在拼凑访问的时候，会用范围解析操作符(::)去访问第二个参数
        spl_autoload_register(array(
            __class__,
            'autoload'
        ));
    }

    private static function autoload($classname)
    {
        if (strpos($classname, 'Model') > 0) {
            include (MODEL_DIR . '/' . $classname . '.class.php');
        } else {
            include (TOOLS_DIR . '/' . $classname . '.class.php');
        }
    }

    // 6. 开启session机制
    private static function setSession()
    {
        // 开启session
        @session_start();
    }

    // 7. 加载配置文件
    private static function setConfig()
    {
        
    }

    // 8. URL初始化
    private static function setUrl()
    {
        // 获取用户的url信息（GET方式提交的数据）
        if ($GLOBALS['config']['URL_MODEL'] == 1) {
            $group = isset($_GET['group']) ? $_GET['group'] : $GLOBALS['config']['DEFAULT_GROUP'];
            $module = isset($_GET['module']) ? $_GET['module'] : $GLOBALS['config']['DEFAULT_MODULE'];
            $action = isset($_GET['action']) ? $_GET['action'] : $GLOBALS['config']['DEFAULT_ACTION'];
        } else {
            $str = $_SERVER['QUERY_STRING'];    //query string（查询字符串），如果有的话，通过它进行页面访问
            if (! $str) {
                $group = $GLOBALS['config']['DEFAULT_GROUP'];
                $module = $GLOBALS['config']['DEFAULT_MODULE'];
                $action = $GLOBALS['config']['DEFAULT_ACTION'];
            } else {
                $url = explode('/', $str);
                $count = count($url);
                $group = ucfirst(strtolower($url[0]));
                $module = ucfirst(strtolower($url[1]));
                $action = $url[2];
                for ($i = 3; $i < $count; $i += 2) {
                    $_GET[$url[$i]] = $url[$i + 1];
                }
            }
        }
        $group = ucfirst(strtolower($group));
        $module = ucfirst(strtolower($module));
        $action = strtolower($action);
        define('GROUP', $group);
        define('MODULE', $module);
        define('ACTION', $action);
    }

    // 9. 权限验证
    private static function setPrivilege(){
        if (GROUP == 'Admin'){
            // 放行一些不需要验证的控制器的方法
            if (! (MODULE == 'Privilege' && (ACTION == 'login' || ACTION == 'signin' || ACTION == 'captcha'))) {
                // 都是需要验证
                if (! isset($_SESSION['user'])) {
                    //判断浏览器是否携带了cookie
                    if(isset($_COOKIE['user_id'])){
                        //如果有cookie则帮助用户行进登录
                        $admin = new AdminModel();
                        
                        //调用AdminModel类的方法：通过ID获取用户信息
                        if ($user = $admin->getUserInfoById($_COOKIE['user_id'])){
                            //得到用户信息
                            //将用户信息写入到session中
                            $_SESSION['user'] = $user;
                            
                            //更新用户信息
                            $admin->updateLoginInfo($user['a_id']);
                        }else{
                            //没有用户信息
                            header('Location:index.php?Admin/Privilege/login');
                        }
                    }
                    // 用户没有登录
                    header('Location:index.php?Admin/Privilege/login');
                }
            }
        }
    }

    // 10. 分发
    private static function setDispatch()
    {
        // 找到对应的控制器类，实例化，再调用对应的方法即可
        $module = MODULE . 'Control';   // 得到控制器名字
        $action = ACTION;
        include (CONTROL_DIR . '/' . GROUP . '/' . $module . '.class.php');
        $obj = new $module();        // 创建控制器对象
        $obj->$action();             // 调用控制器中的方法
    }

    // 初始化方法
    public static function run()
    {
        // 初始化项目
        // 1.初始化字符集
        self::setHeader();
        // 2.初始化系统常量
        self::setConst();
        // 3.错误信息
        self::setErrors();
        // 4.文件包含
        self::setInclude();
        // 5.自动加载
        self::setAutoload();
        // 6.session开启
        self::setSession();
        // 7.配置文件
        self::setConfig();
        // 8.URL初始化
        self::setUrl();
        // 9.权限验证
        self::setPrivilege();
        // 10.分发
        self::setDispatch();
    }
}