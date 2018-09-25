<?php

    class SuggestControl extends Control{
        
        public function suggest(){
            $this->view->display('suggest.html');
        }
        
        public function suggestAdd(){
            //获取数据
            $name    = $_POST['s_name'];
            $email   = $_POST['s_email'];
            $content = $_POST['s_content'];
            $time    = time();
            
            //对姓名进行判断
            if($name == ''){
                $name = '学生'.time();
            }
            //对邮箱进行判断
            if($email != ''){
                $pattern = '/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/';
                //匹配邮箱正则
                $preg = preg_match($pattern, $email);
                if($preg == FALSE){
                    $this->jump('index.php?Home/Suggest/suggest', '邮箱格式不正确！');exit();
                }
            }
            //对内容进行判断
            if($content == ''){
                $this->jump('index.php?Home/Suggest/suggest', '内容不能为空哦！');exit();
            }
            
            $sugg = new SuggestModel();
            $data = $sugg->insertSuggest($name, $email, $time, $content);
            if($data){
                $this->jump('index.php?Home/Suggest/suggest', '提交成功！感谢您的意见与建议，祝您生活愉快！');
            }else{
                $this->jump('index.php?Home/Suggest/suggest', '提交失败！请重新提交！');
            }
        }
    }