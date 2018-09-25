<?php

    class NoticeModel extends DB{
        //属性
        protected $table = 'notice';
        
        /**
         * @return mixed,成功返回所有公告数据，失败返回FALSE
         */
        public function selectAllNotice(){
            //组织SQL语句
            $sql = "select * from {$this->getTableName()} order by n_time desc";
        
            //调用父类方法，执行查询操作
            return $this->db_getAll($sql);
        }
        
        /**
         * @param int $id
         * @return mixed 成功返回相应的公告信息，失败返回FALSE
         */
        public function getNoticeById($id){
            //组织SQL
            $sql = "select * from {$this->getTableName()} where n_id='{$id}' limit 1 ";
        
            //调用父类的方法进行查询
            return $this->db_getRow($sql);
        }
        
        /**
         * @param varchar $title
         * @param varchar $time
         * @param varchar $content
         * @return int ，成功返回自增长id，失败返回FALSE
         */
        public function insertNotice($title,$time,$content){
            
            //组织SQL语句
            $sql = "insert into {$this->getTableName()} values (null,'{$title}',{$time},'{$content}')";
        
            //调用父类方法，执行插入操作
            return $this->db_insert($sql);
        }
        
        /**
         * @param int $id
         * @return mixed 成功返回受影响的行数，失败返回FALSE
         */
        public function deleteNotice($id){
            //组织SQL语句
            $sql = "delete from {$this->getTableName()} where n_id={$id} limit 1";
        
            //调用父类方法，执行删除操作
            return $this->db_delete($sql);
        }
        
        /**
         * @param int $id
         * @param vachar $title
         * @param vachar $time
         * @param vachar $content
         * @return Boolean，成功返回受影响的行数，失败返回FALSE
         */
        public function updateNotice($id,$title,$time,$content){
            
            //组织SQL语句
            $sql = "update {$this->getTableName()} set n_title='{$title}',n_time='{$time}',n_content='{$content}' where n_id={$id}";
        
            //调用父类方法，执行更新操作
            return $this->db_update($sql);
        }
    }