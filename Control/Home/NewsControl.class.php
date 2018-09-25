<?php

    class NewsControl extends Control{
        
        //新闻列表
        public function newsList(){
            //实例化分页类           
            $page = new Page ( 'news','n_time','desc');
            // 获取分页数据
            $data = $page->init (); 
            // 获取分页信息
            $pager = $page->getPager (); 
            //分配数据
            $this->view->assign ( 'data', $data );
            $this->view->assign ( 'pager', $pager );
            
            //调用模板
            $this->view->display('news_list.html');
        }
        
        //单一新闻内容显示
        public function news(){
            //获取ID
            $id = $_GET['id']; 
            
            //通过id查询
            $ntc = new NewsModel();
            $data = $ntc->getNewsById($id);
            
            //分配数据
            $this->view->assign('data',$data);
            //调用模板
            $this->view->display('news.html');
        }
    }