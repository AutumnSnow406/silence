<?php

    class MessageControl extends Control{
        //留言信息处理
        public function message(){
            $tid     = $_POST['tid'];   //表示访客对哪个老师留言的
            $content = $_POST['content'];
            $pid     = isset($_POST['pid'])? $_POST['pid'] : 0;
            $name    = '学生'.time();
            $time    = time();
            $img     = 'Public/Home/images/学生.png';
            $id      = $tid;
            
            //插入数据
            $mess = new MessageModel();
            $res = $mess->insertMessage($name,$time,$tid,$pid,$content,$img);
            
            //获取教师名字
            $teacher = new TeacherModel();
            $t_row = $teacher->getTeacherInfoById($id);
            $t_name = $t_row['t_name'];
            $t_email = $t_row['t_email'];
            
            
            //插入留言信息
            if($res){
                $smtp = new smtp("smtp.163.com", 25, true, "yjh1198422431@163.com", "yjh1198422431", "yjh1198422431@163.com"); // 发件人信箱信息
                $smtp->debug = false; // 是否显示发送的调试信息 FALSE or TRUE
                $mailto = $t_email; // 收件人信箱
                $mailsubject = "留言提醒~";
                $mailfrom = "电子信息工程专业改革试点网站";
                $url = "http://localhost/Aproject/index.php?Home/Teacher/teacher/id/{$id}";
                $urlencode=urlencode($url);
                $mailbody=<<<EOF
                                            亲爱的{$t_name}老师，您好!<br/>&nbsp;&nbsp;&nbsp;&nbsp;有同学在电子信息工程专业网站上面给您留言了，请您有空点击以下链接进行回复（回复之前需要登录）！祝您生活愉快，工作顺心！<br/>&nbsp;&nbsp;&nbsp;&nbsp;链接：<a href="{$url}">{$urlencode}</a>
EOF;
                $mailtype = "HTML"; // 邮件格式（HTML/TXT）,TXT为文本邮件
                $mailsubject = '=?UTF-8?B?' . base64_encode($mailsubject) . '?='; // 邮件主题
                $mailfrom = '=?UTF-8?B?' . base64_encode($mailfrom) . '?='; // 发件人
                $sent = $smtp->sendmail($mailto, $mailfrom, $mailsubject, $mailbody, $mailtype);
                //echo $sent;exit();
                if ($sent){
                    echo 1;
                }else{
                    echo 2;
                };
            }else {
                echo 0;
            }
        }
        
        //回复信息处理
        public function reply(){
            $tid     = 0;   
            $content = $_POST['content'];
            $pid     = isset($_POST['pid'])? $_POST['pid'] : 0;
            $name    = $_SESSION['user']['t_user'];
            $time    = time();
            $img     = 'Public/Home/images/教师.png';

            $mess = new MessageModel();
            if($name != ''){
                if($mess->checkInfo($content) == false){
                    //插入留言信息
                    if($mess->insertMessage($name,$time,$tid,$pid,$content,$img)){
                        $result = $mess->getMessageByPid($pid);
                        echo $result;
                    }else{
                        echo 2;
                    };
                }else{
                    echo 1;
                }
            }else{
                echo 0;
            };
               
        }
    }