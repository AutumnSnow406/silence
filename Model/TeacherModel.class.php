<?php

    //Teacher对应的类
    class TeacherModel extends DB{
        //属性
        protected $table = 'teachers';
        
        /**
         * @param int $id
         * @return mixed 成功返回相应的教师信息，失败返回FALSE
         */
        public function getTeacherInfoById($id){
            //组织SQL
            $sql = "select * from {$this->getTableName()} where t_id='{$id}' limit 1 ";
            
            //调用父类的方法进行查询
            return $this->db_getRow($sql);
        }
        
         /**
		 * 通过教师名获取教师信息
		 * @param varchar  $name，教师名
		 * @return mixed，成功返回教师信息（数组），失败返回FALSE
		 */
		public function getTeacherInfoByName($name){
			//对教师名进行过滤
			$name = addslashes($name);

			//组织SQL
			$sql = "select * from {$this->getTableName()} where t_name='{$name}' limit 1 ";

			//调用父类方法
			return $this->db_getRow($sql);
		}
		
		
		/**
		 * @param varchar $name
		 * @param varchar $age
		 * @param varchar $birth
		 * @param varchar $email
		 * @param varchar $edu
		 * @param varchar $staff
		 * @param longtext $intro
		 * @param varchar $user
		 * @param varchar $pass
		 * @param varchar $img
		 * @return int ，成功返回自增长id，失败返回FALSE
		 */
		public function insertTeacherUser($name,$gender,$birth,$email,$edu,$staff,$user,$pass,$intro,$img){
		    //对教师名进行过滤
		    $name = addslashes($name);
		    
		    //组织SQL语句
		    $sql = "insert into {$this->getTableName()} values (null,'{$name}','{$gender}','{$birth}','{$email}','{$edu}','{$staff}','{$intro}','{$user}','{$pass}','{$img}')";
		    
		    //调用父类方法，执行插入操作
		    return $this->db_insert($sql);
		}
		
		/**
		 * @return mixed,成功返回所有教师信息数据，失败返回FALSE 
		 */
		public function selectAllTeacherInfo(){
		    //组织SQL语句
		    $sql = "select * from {$this->getTableName()}";
		    
		    //调用父类方法，执行查询操作
		    return $this->db_getAll($sql);
		}
		
		/**
		 * @param int $id
		 * @return mixed 成功返回受影响的行数，失败返回FALSE
		 */
		public function deleteTeacher($id){
		    //组织SQL语句
		    $sql = "delete from {$this->getTableName()} where t_id={$id} limit 1";
		    
		    //调用父类方法，执行删除操作
		    return $this->db_delete($sql);
		}
		
		/**
		 * @param int $id
		 * @param varchar $name
		 * @param varchar $gender
		 * @param varchar $birth
		 * @param varchar $email
		 * @param varchar $edu
		 * @param varchar $staff
		 * @param varchar $user
		 * @param varchar $pass
		 * @param longtext $intro
		 * @param varchar $img
		 * @return Boolean，成功返回受影响的行数，失败返回FALSE
		 */
		public function updateTeacher($id,$name,$gender,$birth,$email,$edu,$staff,$user,$pass,$intro,$img){
		    //对教师名进行过滤
		    $name = addslashes($name);
		    
		    //组织SQL语句
		    $sql = "update {$this->getTableName()} set t_name='{$name}',t_gender='{$gender}',t_birth='{$birth}',t_email='{$email}',t_edu='{$edu}',t_staff='{$staff}',t_intro='{$intro}',t_user='{$user}',t_pass='{$pass}',t_img='{$img}' where t_id={$id}";
		    
		    //调用父类方法，执行更新操作
		    return $this->db_update($sql);
		}
		
		/**
		 * 通过用户名和密码验证用户信息
		 * @param1 string $username，用户名
		 * @param2 string $password，用户密码
		 * @return mixed，成功返回用户信息，失败返回FALSE
		 */
		public function checkByTeachernameAndPassword($username,$password){
		    //加密密码
		    //$password = md5($password);
		
		    //转义
		    $username = addslashes($username);
		
		    //组织SQL语句
		    $sql = "select * from {$this->getTableName()} where t_user='{$username}' and t_pass='{$password}'";
		    //echo $sql;exit;
		
		    //调用DB类的getRow方法
		    return $this->db_getRow($sql);
		}
    }