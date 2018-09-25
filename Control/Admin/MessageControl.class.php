<?php
    
    class MessageControl extends Control{
        
        //留言列表函数
        public function messageList(){
            //实例化分页类           
            $page = new Page ( 'message','m_id','desc');
            // 获取分页数据
            $data = $page->init (); 
            // 获取分页信息
            $pager = $page->getPager (); 
            //分配数据
            $this->view->assign ( 'data', $data );
            $this->view->assign ( 'pager', $pager );
            
            //调用模板
            $this->view->display('message_list.html');
        }
        
        //删除留言
        public function messageDel() {
            //获取传递过来的id
            $id = $_POST['id'];
            
            //通过id删除留言数据
            $mess = new messageModel();
            $data = $mess->deleteMessage($id);

            if($data){
                //$this->jump('index.php?Admin/Message/messageList', '删除成功！');
                echo 1;
            }else {
               // $this->jump('index.php?Admin/Message/messageList', '删除失败，请重新删除！');
               echo 0;
            }
        }
    }
    