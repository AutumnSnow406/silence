<?php

    class TeacherControl extends Control{
        //响应教师添加请求，调用模板文件
        public function teacher_add(){
            $this->view->display('teacher_add.html');
        }
        
        //添加教师
        public function teacherAdd(){
            //接收数据
            $name   = $_POST['name'];
            $gender = $_POST['gender'];
            $birth  = $_POST['birth'];
            $email  = $_POST['email'];
            $edu    = $_POST['edu'];
            $staff  = $_POST['staff'];
            $user   = $_POST['user'];
            $pass   = $_POST['pass'];
            $intro  = $_POST['intro'];
            $img    = $_POST['img'];
            
            //对教师姓名进行验证，如果教师存在了就不允许再添加
            $teacher = new TeacherModel();
            if($teacher->getTeacherInfoByName($name)){
                echo 2;exit();
            }

            //插入用户信息
            if($teacher->insertTeacherUser($name,$gender,$birth,$email,$edu,$staff,$user,$pass,$intro,$img)){
                echo 1;
            }else {
                echo 0;
            }
        }
        //教师列表
        public function teacherList(){
            //实例化分页类           
            $page = new Page ( 'teachers','t_id');
            // 获取分页数据
            $data = $page->init (); 
            // 获取分页信息
            $pager = $page->getPager (); 
            //分配数据
            $this->view->assign ( 'data', $data );
            $this->view->assign ( 'pager', $pager );
            $this->view->display ( 'teacher_list.html' );
        }
        
        //删除教师
        public function teacherDel() {
                //获取传递过来的id
                $id = $_POST['id'];
                
                //通过id删除用户信息
                $teacher = new TeacherModel();
                $data = $teacher->deleteTeacher($id);
            
                if($data){
                    echo 1;
                }else {
                    echo 0;
                }
        }
        
        //修改教师信息
        public function teacherAlter(){
            //接收数据
            $id = $_GET['id'];
            
            //通过id查询教师信息
            $teacher = new TeacherModel();
            $data = $teacher->getTeacherInfoById($id);

            //分配数据
            $this->view->assign('data',$data);
            //调用修改模板
            $this->view->display('teacher_alter.html');
        }
        
        //更新教师信息
        public function teacherUpdate(){
            //接收数据
            $id     = $_POST['id'];
            $name   = $_POST['name'];
            $gender = $_POST['gender'];
            $birth  = $_POST['birth'];
            $email  = $_POST['email'];
            $edu    = $_POST['edu'];
            $staff  = $_POST['staff'];
            $user   = $_POST['user'];
            $pass   = $_POST['pass'];
            $intro  = $_POST['intro'];
            $img    = $_POST['img'];

            //插入用户信息
            $teacher = new TeacherModel();
            if($teacher->updateTeacher($id,$name,$gender,$birth,$email,$edu,$staff,$user,$pass,$intro,$img)){
                echo 1;
            }else {
                echo 0;
            }
        }
        
        //上传教师照片
        public function teacherPic(){
            if(!empty($_FILES['photo']['name'])){
                //print_r($_FILES['photo']['name']);exit();
                $up = new Upload ( 'photo' );
                $photo = $up->fileUpload ( 'Public/Home/images/teachers' );
                if($photo == 1){
                    $res[] = 1;
                }else if($photo == 2){
                    $res[] = 2;
                }else{
                    $res[]= $photo;
                };
            }else{
                $res[] = 3;
            };
            echo json_encode($res);
        }
    }