<?php

class TeacherControl extends Control{

    //获取教师信息
    public function teacher(){
        //获取ID
        $id = $_GET['id']; 
        
        //通过id查询教师信息
        $teacher = new TeacherModel();
        $mess = new MessageModel();
        $row = $teacher->getTeacherInfoById($id);
        $data = $teacher->selectAllTeacherInfo();
        //print_r($row);exit();
       
        //显示留言信息
        $result = $mess->getMessageById($id);
        //print_r($result);exit();
        //分配数据
        $this->view->assign('row',$row);
        $this->view->assign('data',$data);
        $this->view->assign('result',$result);
        //调用模板
        $this->view->display('teacher.html');
    }
    
    //获取师资结构数据
    public function structure(){
        $this->view->display('structure.html');
    }
    
    //验证登录信息
    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //验证用户信息（操作数据库：模型）
        $teacher = new TeacherModel();
        
        if($user = $teacher->checkByTeachernameAndPassword($username,$password)){
            //成功
            $_SESSION['user'] = $user;
            echo 1;
        }else{
            echo 0;
        }
    }
    
}