<?php

    class CourseControl extends Control{
        //响应课程添加请求，调用模板文件
        public function course_add(){
            $this->view->display('course_add.html');
        }
        
        //添加课程
        public function courseAdd(){
            //接收数据
            $name    = $_POST['name'];
            $semes   = $_POST['semes'];
            $hours   = $_POST['hours'];
            $credit  = $_POST['credit'];
            $teacher = $_POST['teacher'];
            
            //对课程姓名进行验证，如果课程存在了就不允许再添加
            $course = new CourseModel();
            if($course->getCourseByName($name)){
                echo 2;exit();
            }

            //插入课程信息
            if($course->insertCourse($name,$semes,$hours,$credit,$teacher)){
                echo 1;
            }else {
                echo 0;
            }
        }
        //课程列表
        public function courseList(){
            //实例化分页类           
            $page = new Page ( 'course','c_semes','asc');
            // 获取分页数据
            $data = $page->init (); 
            // 获取分页信息
            $pager = $page->getPager (); 
            //分配数据
            $this->view->assign ( 'data', $data );
            $this->view->assign ( 'pager', $pager );
            $this->view->display ( 'course_list.html' );
        }
        
        //删除课程
        public function courseDel() {
                //获取传递过来的id
                $id = $_POST['id'];
                
                //通过id删除用户信息
                $course = new CourseModel();
                $data = $course->deleteCourse($id);
            
                if($data){
                    echo 1;
                }else {
                    echo 0;
                }
        }
        
        //修改课程信息
        public function courseAlter(){
            //接收数据
            $id = $_GET['id'];
            
            //通过id查询课程信息
            $course = new CourseModel();
            $data = $course->getCourseById($id);

            //分配数据
            $this->view->assign('data',$data);
            //调用修改模板
            $this->view->display('course_alter.html');
        }
        
        //更新课程信息
        public function courseUpdate(){
            //接收数据
            $id      = $_POST['id'];
            $name    = $_POST['name'];
            $semes   = $_POST['semes'];
            $hours   = $_POST['hours'];
            $credit  = $_POST['credit'];
            $teacher = $_POST['teacher'];

            //插入用户信息
            $course = new CourseModel();
            if($course->updateCourse($id,$name,$semes,$hours,$credit,$teacher)){
                echo 1;
            }else {
                echo 0;
            }
        }
    }