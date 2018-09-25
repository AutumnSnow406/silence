<?php

    class ShowControl extends Control{
        
        //单一新闻内容显示
        public function show(){
            //获取ID
            $id = $_GET['id']; 
            
            //通过id查询
            $show = new ShowModel();
            $data = $show->getshowById($id);
            
            //分配数据
            $this->view->assign('data',$data);
            //调用模板
            $this->view->display('show.html');
        }
    }