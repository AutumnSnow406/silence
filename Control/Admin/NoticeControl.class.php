<?php

    class NoticeControl extends Control{
        //响应公告添加请求，调用模板文件
        public function notice_add(){
            $this->view->display('notice_add.html');
        }
        
        //添加公告
        public function noticeAdd(){
            //接收数据
            $title   = $_POST['title'];
            $content = $_POST['content'];
            $time    = time();
            
            $notice = new NoticeModel();
            
            //插入公告信息
            if($notice->insertNotice($title,$time,$content)){
                echo 1;
            }else {
                echo 0;
            }
        }
        
        //公告列表
        public function noticeList(){
            ///实例化分页类           
            $page = new Page ( 'notice','n_time','desc');
            // 获取分页数据
            $data = $page->init (); 
            // 获取分页信息
            $pager = $page->getPager (); 
            //分配数据
            $this->view->assign ( 'data', $data );
            $this->view->assign ( 'pager', $pager );
            
            //调用模板
            $this->view->display('notice_list.html');
        }
        
        //删除公告
        public function noticeDel() {
                //获取传递过来的id
                $id = $_POST['id'];
                
                //通过id删除用户信息
                $notice = new NoticeModel();
                $data = $notice->deleteNotice($id);
            
                if($data){
                    echo 1;
                }else {
                    echo 0;
                }
        }
        
        //修改公告信息
        public function noticeAlter(){
            //接收数据
            $id = $_GET['id'];
            
            //通过id查询公告信息
            $notice = new NoticeModel();
            $data = $notice->getNoticeById($id);

            //分配数据
            $this->view->assign('data',$data);
            //调用修改模板
            $this->view->display('notice_alter.html');
        }
        
        //更新公告信息
        public function noticeUpdate(){
            //接收数据
            $id      = $_POST['id'];
            $title   = $_POST['title'];
            $content = $_POST['content'];
            $time    = time();

            //插入用户信息
            $notice = new NoticeModel();
            if($notice->updateNotice($id,$title,$time,$content)){
                echo 1;
            }else {
                echo 0;
            }
        }
    }