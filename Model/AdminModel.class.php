<?php

	//Admin表对应的类
	class AdminModel extends DB{
		//属性
		protected $table = 'admin';

		/**
		 * 通过用户名和密码验证用户信息
		 * @param1 string $username，用户名
		 * @param2 string $password，用户密码
		 * @return mixed，成功返回用户信息，失败返回FALSE
		*/
		public function checkByUsernameAndPassword($username,$password){
			//加密密码
			$password = md5($password);

			//转义
			$username = addslashes($username);

			//组织SQL语句
			$sql = "select * from {$this->getTableName()} where a_username = '{$username}' and a_password = '{$password}'";
			//echo $sql;exit;

			//调用DB类的getRow方法
			return $this->db_getRow($sql);
		}

		/**
		 * 更新用户登录信息
		 * @param1 int $id，当前要更新用户的id
		 * @return Boolean，成功返回true，失败返回FALSE
		 */
		public function updateLoginInfo($id){
			//获取要更新信息
			$ip = $_SERVER['REMOTE_ADDR'];
			$time = time();

			//组织SQL语句
			$sql = "update {$this->getTableName()} set a_last_log_ip = '{$ip}',a_last_log_time = '{$time}' where a_id = '{$id}'";

			//调用父类更新
			return $this->db_update($sql);
		}
		
		/**
		 * 通过用户ID获取用户信息
		 * @param1 int $id，用户的ID信息
		 * @return mixed，成功返回用户信息（数组），失败返回FALSE
		 */
		public function getUserInfoById($id){
		    //对id进行过滤
		    $id = addslashes($id);
		
		    //组织SQL
		    $sql = "select * from {$this->getTableName()} where a_id='{$id}' limit 1";
		
		    //调用父类方法
		    return $this->db_getRow($sql);
		}

		/**
		 * 通过用户名获取用户信息
		 * @param1 varchar  $username，用户名
		 * @return mixed，成功返回用户信息（数组），失败返回FALSE
		*/
		public function getUserInfoByUsername($username){
			//对用户名进行过滤
			$username = addslashes($username);

			//组织SQL
			$sql = "select * from {$this->getTableName()} where a_username='{$username}' limit 1";

			//调用父类方法
			return $this->db_getRow($sql);
		}
		
		/**
		 * @param varchar $username   用户名
		 * @param varchar $password   用户密码
		 * @return int ，成功返回自增长id，失败返回FALSE
		 */
		public function insertAdminUser($username,$password){
		    //对用户名进行过滤
		    $username = addslashes($username);
		    
		    //组织SQL语句
		    $sql = "insert into {$this->getTableName()} values (null,'{$username}',md5('{$password}'),'',1)";
		    
		    //调用父类方法，执行插入操作
		    return $this->db_insert($sql);
		}
		
		/**
		 * @return mixed,成功返回所有用户信息数据，失败返回FALSE 
		 */
		public function selectAllAdminInfo(){
		    //组织SQL语句
		    $sql = "select * from {$this->getTableName()}";
		    
		    //调用父类方法，执行查询操作
		    return $this->db_getAll($sql);
		}
		
		/**
		 * @param int $id
		 * @return mixed 成功返回受影响的行数，失败返回FALSE
		 */
		public function deleteAdmin($id){
		    //对id进行过滤
		    $id = addslashes($id);
		    
		    //组织SQL语句
		    $sql = "delete from {$this->getTableName()} where a_id={$id} limit 1";
		    
		    //调用父类方法，执行删除操作
		    return $this->db_delete($sql);
		}
	}