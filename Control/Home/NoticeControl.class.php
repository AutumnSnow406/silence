<?php

    class NoticeControl extends Control{
        
        //公告列表
        public function noticeList(){
            //实例化分页类           
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
        
        //单一公告内容显示
        public function notice(){
            //获取ID
            $id = $_GET['id']; 
            
            //通过id查询
            $ntc = new NoticeModel();
            $data = $ntc->getNoticeById($id);
            
            //分配数据
            $this->view->assign('data',$data);
            //调用模板
            $this->view->display('notice.html');
        }
    }