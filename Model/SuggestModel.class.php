<?php

    class SuggestModel extends DB{
        //设置属性
        protected $table = 'suggest';
        
        /**
         * @param varchar $name   姓名
         * @param varchar $email  邮箱
         * @return int ，成功返回自增长id，失败返回FALSE
         */
        public function insertSuggest($name,$email,$time,$content){
            //对用户名进行过滤
            $username = addslashes($username);
        
            //组织SQL语句
            $sql = "insert into {$this->getTableName()} values (null,'{$name}','{$email}','{$time}','{$content}')";
        
            //调用父类方法，执行插入操作
            return $this->db_insert($sql);
        }
        
        /**
         * @return mixed,成功返回所有数据，失败返回FALSE
         */
        public function selectAllSuggest(){
            //组织SQL语句
            $sql = "select * from {$this->getTableName()} order by s_id desc";
        
            //调用父类方法，执行查询操作
            return $this->db_getAll($sql);
        }
        
        /**
         * @param int $id
         * @return mixed 成功返回受影响的行数，失败返回FALSE
         */
        public function deleteSuggest($id){
            //对id进行过滤
            $id = addslashes($id);
        
            //组织SQL语句
            $sql = "delete from {$this->getTableName()} where s_id={$id} limit 1";
        
            //调用父类方法，执行删除操作
            return $this->db_delete($sql);
        }
    }