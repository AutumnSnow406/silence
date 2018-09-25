<?php

    class NewsControl extends Control{
        //响应新闻添加请求，调用模板文件
        public function news_add(){
            $this->view->display('news_add.html');
        }
        
        //添加新闻
        public function newsAdd(){
            //接收数据
            $title   = $_POST['title'];
            $content = addslashes($_POST['content']);
            $time    = time();
            
            $news = new NewsModel();
            
            //插入新闻信息
            if($news->insertNews($title,$time,$content)){
                $this->jump('index.php?Admin/News/news_add', '添加成功！');
            }else {
                $this->jump('index.php?Admin/News/news_add', '添加失败，请重新添加！');
            }
        }
        
        //新闻列表
        public function newsList(){
            ///实例化分页类           
            $page = new Page ( 'news','n_time','desc');
            // 获取分页数据
            $data = $page->init (); 
            //print_r($data);exit();
            // 获取分页信息
            $pager = $page->getPager (); 
            
            //分配数据
            $this->view->assign ( 'data', $data );
            $this->view->assign ( 'pager', $pager );
            
            //调用模板
            $this->view->display('news_list.html');
        }
        
        //删除新闻
        public function newsDel() {
                //获取传递过来的id
                $id = $_POST['id'];
                
                //通过id删除用户信息
                $news = new NewsModel();
                $data = $news->deletenews($id);
            
                if($data){
                    echo 1;
                }else {
                    echo 0;
                }
        }
        
        //修改新闻信息
        public function newsAlter(){
            //接收数据
            $id = $_GET['id'];
            
            //通过id查询新闻信息
            $news = new NewsModel();
            $data = $news->getnewsById($id);

            //分配数据
            $this->view->assign('data',$data);
            //调用修改模板
            $this->view->display('news_alter.html');
        }
        
        //更新新闻信息
        public function newsUpdate(){
            //接收数据
            $id      = $_POST['id'];
            $title   = $_POST['title'];
            $content = addslashes($_POST['content']);
            $time    = time();

            //插入用户信息
            $news = new NewsModel();
            if($news->updatenews($id,$title,$time,$content)){
                $this->jump('index.php?Admin/News/newsList', '修改成功！');
            }else {
                $this->jump('index.php?Admin/News/newsList', '修改失败，请重新修改！');
            }
        }
    }