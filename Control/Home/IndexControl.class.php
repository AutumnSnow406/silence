<?php
    //首页控制器
    class IndexControl extends Control{

        //不同请求动作所对应的方法
        public function index(){
            //获取所有公告数据
            $ntc = new NoticeModel();
            $data = $ntc->selectAllNotice();
             
            //获取所有教师信息
            $teach = new TeacherModel();
            $data1 = $teach->selectAllTeacherInfo();
            
            //获取所有新闻信息
            $news = new NewsModel();
            $data2 = $news->selectNews();
            
            //获取展示信息
            $show = new ShowModel();
            $data3 = $show->selectShow();
            //分配数据
            $this->view->assign('data',$data);
            $this->view->assign('data1',$data1);
            $this->view->assign('data2',$data2);
            $this->view->assign('data3',$data3);
            //调用模板
            $this->view->display('index.html');
        }
        /* public function header(){
            $this->view->display('header.html');
        }
        public function footer(){
            $this->view->display('footer.html');
        }
        public function main(){
            $this->view->display('main.html');
        } */
}