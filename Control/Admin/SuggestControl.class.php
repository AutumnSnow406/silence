<?php
    
    class SuggestControl extends Control{
        
        //管理员列表函数
        public function suggestList(){
            //实例化分页类           
            $page = new Page ( 'suggest','s_id','desc');
            // 获取分页数据
            $data = $page->init (); 
            // 获取分页信息
            $pager = $page->getPager (); 
            //分配数据
            $this->view->assign ( 'data', $data );
            $this->view->assign ( 'pager', $pager );
            
            //调用模板
            $this->view->display('suggest_list.html');
        }
        
        //删除管理员
        public function suggestDel() {
            //获取传递过来的id
            $id = $_POST['id'];
            
            //通过id删除用户信息
            $sugg = new SuggestModel();
            $data = $sugg->deleteSuggest($id);

            if($data){
                echo 1;
            }else {
                echo 0;
            }
        }
    }
    