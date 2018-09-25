<?php

    class CourseControl extends Control{
        
        public function course1(){
            //获取数据
            //$semes = $_POST['semes'];
            $semes = isset($_POST['semes'])? $_POST['semes'] : '1';
            //echo $semes;exit();
            //查询数据
            $course = new CourseModel();
            $data = $course->getCourseBySemes($semes);
            $list = json_encode($data);
            echo $list;
        }
        
        public function course(){
            $semes = '1';
            //查询数据
            $course = new CourseModel();
            $data = $course->getCourseBySemes($semes);
            $this->view->assign('data',$data);
            $this->view->display('course.html');
        }
    }