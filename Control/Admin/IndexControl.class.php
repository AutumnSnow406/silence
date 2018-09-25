<?php
    
    class IndexControl extends Control{
        public function index(){
            $this->view->display('index.html');     //请求后台首页
        }
        
        public function top(){
            $this->view->assign('name',$_SESSION['user']['a_username']);
			$this->view->assign('time',date('Y-m-d l',time()));
            $this->view->display('top.html');       //请求后台主页顶部
        }
        
        public function left(){
            $this->view->display('left.html');      //请求后台主页菜单
        }
        
        public function main(){
            $this->view->display('main.html');      //请求后台主页内容
        }
    }