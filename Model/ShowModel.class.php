<?php

    class ShowModel extends DB{
        //属性
        protected $table = 'show';
        
        /**
         * @return mixed,成功返回所有数据，失败返回FALSE
         */
        public function selectAllShow(){
            //组织SQL语句
            $sql = "select * from {$this->getTableName()} order by s_time desc";
        
            //调用父类方法，执行查询操作
            return $this->db_getAll($sql);
        }
        
        /**
         * @return mixed,成功返回所有4条数据，失败返回FALSE
         */
        public function selectShow(){
            //组织SQL语句
            $sql = "select * from {$this->getTableName()} order by s_time desc limit 4";
        
            //调用父类方法，执行查询操作
            return $this->db_getAll($sql);
        }
        
        /**
         * @param int $id
         * @return mixed 成功返回相应的信息，失败返回FALSE
         */
        public function getShowById($id){
            //组织SQL
            $sql = "select * from {$this->getTableName()} where s_id='{$id}' limit 1 ";
        
            //调用父类的方法进行查询
            return $this->db_getRow($sql);
        }
        
        /**
         * @param varchar $title
         * @param varchar $time
         * @param varchar $img
         * @param varchar $content
         * @return int ，成功返回自增长id，失败返回FALSE
         */
        public function insertShow($title,$time,$img,$content){
            
            //组织SQL语句
            $sql = "insert into {$this->getTableName()} values (null,'{$title}',{$time},'{$img}','{$content}')";
        
            //调用父类方法，执行插入操作
            return $this->db_insert($sql);
        }
        
        /**
         * @param int $id
         * @return mixed 成功返回受影响的行数，失败返回FALSE
         */
        public function deleteShow($id){
            //组织SQL语句
            $sql = "delete from {$this->getTableName()} where s_id={$id} limit 1";
        
            //调用父类方法，执行删除操作
            return $this->db_delete($sql);
        }
        
        /**
         * @param int $id
         * @param varchar $title
         * @param varchar $time
         * @param varchar $img
         * @param varchar $content
         * @return Boolean，成功返回受影响的行数，失败返回FALSE
         */
        public function updateShow($id,$title,$time,$img,$content){
            
            //组织SQL语句
            $sql = "update {$this->getTableName()} set s_title='{$title}',s_time='{$time}',s_img='{$img}',s_content='{$content}' where s_id={$id}";
        
            //调用父类方法，执行更新操作
            return $this->db_update($sql);
        }
    }