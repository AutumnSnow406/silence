<?php
    class ShowControl extends Control{
        //响应展示添加请求，调用模板文件
        public function show_add(){
            $this->view->display('show_add.html');
        }
        
        //添加展示
        public function showAdd(){
            //接收数据
            $title   = $_POST['title'];
            $img     = $_POST['img'];
            $content = addslashes($_POST['content']);
            $time    = time();
            
            $show = new ShowModel();
            
            //插入展示信息
            if($show->insertShow($title,$time,$img,$content)){
                $this->jump('index.php?Admin/Show/show_add', '添加成功！');
            }else {
                $this->jump('index.php?Admin/Show/show_add', '添加失败，请重新添加！');
            }
        }
        
        //展示列表
        public function showList(){
            ///实例化分页类           
            $page = new Page ( 'show','s_time','desc');
            // 获取分页数据
            $data = $page->init (); 
            //print_r($data);exit();
            // 获取分页信息
            $pager = $page->getPager (); 
            
            //分配数据
            $this->view->assign ( 'data', $data );
            $this->view->assign ( 'pager', $pager );
            
            //调用模板
            $this->view->display('show_list.html');
        }
        
        //删除展示
        public function showDel() {
                //获取传递过来的id
                $id = $_POST['id'];
                
                //通过id删除用户信息
                $show = new ShowModel();
                $data = $show->deleteShow($id);
            
                if($data){
                    echo 1;
                }else {
                    echo 0;
                }
        }
        
        //修改展示信息
        public function showAlter(){
            //接收数据
            $id = $_GET['id'];
            
            //通过id查询展示信息
            $show = new ShowModel();
            $data = $show->getShowById($id);

            //分配数据
            $this->view->assign('data',$data);
            //调用修改模板
            $this->view->display('show_alter.html');
        }
        
        //更新展示信息
        public function showUpdate(){
            //接收数据
            $id      = $_POST['id'];
            $title   = $_POST['title'];
            $img     = $_POST['img'];
            $content = addslashes($_POST['content']);
            $time    = time();

            //插入用户信息
            $show = new ShowModel();
            if($show->updateShow($id,$title,$time,$img,$content)){
                $this->jump('index.php?Admin/Show/showList', '修改成功！');
            }else {
                $this->jump('index.php?Admin/Show/showList', '修改失败，请重新修改！');
            }
        }
        
        //上传照片
        public function showPic(){
            if(!empty($_FILES['photo']['name'])){
                //print_r($_FILES['photo']['name']);echo 1;exit();
                $up = new Upload ( 'photo' );
                $photo = $up->fileUpload ( 'Public/Home/images/show' );
                if($photo == 1){
                    $res[] = 1;
                }else if ($photo == 2){
                    $res[] = 2;
                }else{
                    $res[] = $photo;
                };
            }else{
                $res[] = 3;
            };
            echo json_encode($res);
        }
    }