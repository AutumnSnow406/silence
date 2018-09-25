<?php

    class AdminControl extends Control{
        public function admin_add(){
            //加载模板应该交由视图类的对象来处理
            $this->view->display('admin_add.html');
        }
        
        /* public function admin_list(){
            //加载模板应该交由视图类的对象来处理
            $this->view->display('admin_list.html');
        } */
        
        //添加管理员函数
        public function adminAdd(){
            //接收数据
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            //对用户名进行验证，如果用户名存在了就不允许再添加
            $admin = new AdminModel();
            if($user = $admin->getUserInfoByUsername($username)){
                echo 2;exit();
            }
            
            //插入用户信息
           if($admin->insertAdminUser($username, $password)){
               echo 1;
           }else {
               echo 0;
           }
            
        }
        
        //管理员列表函数
        public function adminList(){
            //实例化分页类           
            $page = new Page ( 'admin','a_id','asc');
            // 获取分页数据
            $data = $page->init (); 
            // 获取分页信息
            $pager = $page->getPager (); 
            //分配数据
            $this->view->assign ( 'data', $data );
            $this->view->assign ( 'pager', $pager );
            //调用模板
            $this->view->display('admin_list.html');
        }
        
        //删除管理员
        public function adminDel() {
            //获取传递过来的id
            $id = $_POST['id'];
            
            //通过id删除用户信息
            $admin = new AdminModel();
            $data = $admin->deleteAdmin($id);
            
            if($data){
                echo 1;
            }else {
                echo 0;
            }
        }
    }