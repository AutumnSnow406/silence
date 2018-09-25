<?php

	//权限模块
	class PrivilegeControl extends Control{
		
		//方法：名字与action的值一致
		public function login(){
			//加载模板应该交由视图类的对象来处理
			$this->view->display('login.html');
		}

		//登录验证
		public function signin(){
			//假设经过验证
			//接收数据
			$username = isset($_POST['username']) ? $_POST['username'] : '';
			$password = isset($_POST['password']) ? $_POST['password'] : '';
			//$captcha  = isset($_POST['captcha'])  ? $_POST['captcha']  : '';
            //echo '我在这！！';exit();
			/* //合法性验证
			if(empty($captcha)){
				$this->failure('index.php','验证码不能为空！');
			}
			if(empty($username) || empty($password)){
				$this->failure('index.php','用户名或者密码都不能为空！');
			} */

			//有效性验证
			/* if(!Captcha::checkCaptcha($captcha)){
				$this->failure('index.php?Admin/Privilege/login','验证码错误！');
			}
		 */
			//验证用户信息（操作数据库：模型）
			$admin = new AdminModel();
	
			if($user = $admin->checkByUsernameAndPassword($username,$password))
			{		
			
				//成功
				$_SESSION['user'] = $user;
				
				//判断用户是否记住用户信息
				if(isset($_POST['remember'])){
				    //用户选择了保存用户信息
				    //设置cookie，记住用户的信息，把用户信息存放到浏览器(保存用户的ID即可),有限期为3天
				    setcookie('user_id',$user['a_id'],time() + 3 * 3600 * 24);
				}
				
				//更新用户信息
				$admin->updateLoginInfo($user['a_id']);

				/* //跳转到首页
				$this->success('index.php/Admin/Index/index','登录成功，正在跳转！');
			}else{
				//失败
				$this->failure('index.php/Admin/Privilege/login','用户名或者密码不正确！');
			}
 */
				echo 1;
		    }else{
		        echo 0;
		    }

		/* //获取验证码方法
		public function captcha(){echo 'here!';
			//获取验证码
			$captcha = new Captcha();
			//修改响应头
			header('Content-type:image/png');
			$captcha->generate();
			
		} */
		    
		}
		
		//退出登录
		public function loginOut(){
		    //用户退出登录
		    //可以通过清空session和销毁session文件两种方式实现
		    
		    //销毁session
		    session_destroy();
		    
		    //清除cookie
		    if (isset($_COOKIE['user_id'])){
		        //删除cookie
		        setcookie('user_id','',1);
		    }
		    //跳转到登录页面
		    header('Location:index.php?Admin/Privilege/login');
		}
	}