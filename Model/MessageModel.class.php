<?php

    class MessageModel extends DB{
        //属性
        protected $table = 'message';
        
        /**
         * @param varchar $pid
         * @param varchar $time
         * @param varchar $name
         * @param longtext $content
         * @return int ，成功返回自增长id，失败返回FALSE
         */
        public function insertMessage($name,$time,$tid,$pid,$content,$img){
            
            //组织SQL语句
            $sql = "insert into {$this->getTableName()} values (null,'{$name}',{$time},{$tid},{$pid},'{$content}','{$img}')";
        
            //调用父类方法，执行插入操作
            return $this->db_insert($sql);
        }
        /* 
        /**
         * @return mixed,成功返回所有留言信息数据，失败返回FALSE
         */
        public function selectAllMessage(){
            //组织SQL语句
            $sql = "select * from {$this->getTableName()}";
        
            //调用父类方法，执行查询操作
            return $this->db_getAllMess($sql);
        }

        /**
         * @param int $id
         * @return mixed 成功返回相应教师的留言信息，失败返回FALSE
         */
        public function getMessageById($id){
            //组织SQL
            $sql = "select * from {$this->getTableName()} where m_tid='{$id}' order by m_id desc";
        
            //调用父类的方法进行查询
            return $this->db_getAllMess($sql);
        }
        
        /**
         * @param int $pid
         * @return mixed 成功返回相应教师回复信息，失败返回FALSE
         */
        public function getMessageByPid($pid){
            //组织SQL
            $sql = "select * from {$this->getTableName()} where m_pid='{$pid}'";
        
            //调用父类的方法进行查询
            return $this->db_getAll($sql);
        }
        
        /**
         * @param int $pid
         * @param varchar $name
         * @return number ，成功返回记录条数，失败返回FALSE
         */
        public function checkInfo($content){
            //组织SQL
            $sql = "select * from {$this->getTableName()} where m_content='{$content}'";
            
            //调用父类方法进行查询
            return $this->db_getAllRows($sql);
        }
        
        /**
         * @param int $id
         * @return mixed 成功返回受影响的行数，失败返回FALSE
         */
        public function deleteMessage($id){
            //对id进行过滤
            $id = addslashes($id);
        
            //组织SQL语句
            $sql = "delete from {$this->getTableName()} where m_id={$id} limit 1";
        
            //调用父类方法，执行删除操作
            return $this->db_delete($sql);
        }
        
    }