<?php

	//封装一个DB类，用来专门操作数据库，以后凡是对数据库的操作，都由DB类的对象来实现
	class DB{
		//属性
		private $host;
		private $port;
		private $user;
		private $pass;
		private $dbname;
		private $charset;
		private $prefix;			//表前缀
		private $link;				//连接资源

		//构造方法，初始化对象的属性
		/**
		 * @param1 array $arr，默认为空，里面是一个关联数组，里面有7个元素
		 * array('host' => 'localhost','port' => '3306');
		 */
		public function __construct($arr = array()){
			//初始化
			$this->host = isset($arr['host']) ? $arr['host'] : $GLOBALS['config']['mysql']['host'];
			$this->port = isset($arr['port']) ? $arr['port'] : $GLOBALS['config']['mysql']['port'];
			$this->user = isset($arr['user']) ? $arr['user'] : $GLOBALS['config']['mysql']['user'];
			$this->pass = isset($arr['pass']) ? $arr['pass'] : $GLOBALS['config']['mysql']['pass'];
			$this->dbname = isset($arr['dbname']) ? $arr['dbname'] : $GLOBALS['config']['mysql']['dbname'];
			$this->charset = isset($arr['charset']) ? $arr['charset'] : $GLOBALS['config']['mysql']['charset'];
			$this->prefix = isset($arr['prefix']) ? $arr['prefix'] : $GLOBALS['config']['mysql']['prefix'];

			//连接数据库
			$this->connect();

			//设置字符集
			$this->setCharset();

			//选择数据库
			$this->setDbname();

			//获取当前表的所有字段信息
			$this->getFields();
		}

		/**
		 * 连接数据库
		 */
		private function connect(){
			//mysql扩展连接
			$this->link = mysql_connect($this->host . ':' . $this->port,$this->user,$this->pass);

			//判断结果
			if(!$this->link){
				//结果出错了
				//暴力处理，如果是真实线上项目（生产环境）必须写入到日志文件
				echo '数据库连接错误：<br/>';
				echo '错误编号' . mysql_errno() . '<br/>';
				echo '错误内容' . mysql_error() . '<br/>';
				exit;
			}
		}

		/**
		 * 设置字符集
		 */
		private function setCharset(){
			//设置
			$this->db_query("set names {$this->charset}");
		}

		/**
		 * 选择数据库
		 */
		private function setDbname(){
			$this->db_query("use {$this->dbname}");
		}

		/**
		 * 增加数据
		 * @param1 string $sql，要执行的插入语句
		 * @return boolean，成功返回是自动增长的ID，失败返回FALSE
		 */
		public function db_insert($sql){
			//发送数据
			$this->db_query($sql);
			
			//成功返回自增ID
			return mysql_affected_rows() ? mysql_insert_id() : FALSE;
		}

		/**
		 * 删除数据
		 * @param1 string $sql，要执行的删除语句
		 * @return Boolean，成功返回受影响的行数，失败返回FALSE
		 */
		public function db_delete($sql){
			//发送SQL
			$this->db_query($sql);

			//判断结果
			return mysql_affected_rows() ? mysql_affected_rows() : FALSE;
		}

		/**
		 * 更新数据
		 * @param1 string $sql，要执行的更新语句
		 * @return Boolean，成功返回受影响的行数，失败返回FALSE
		 */
		public function db_update($sql){
			//发送SQL
			$this->db_query($sql);

			//判断结果
			return mysql_affected_rows() ? mysql_affected_rows() : FALSE;
		}

		/**
		 * 查询：查询一条记录
		 * @param1 string $sql，要查询的SQL语句
		 * @return mixed，成功返回一个数组，失败返回FALSE
		 */
		public function db_getRow($sql){
			//发送SQL
			$res = $this->db_query($sql);

			//判断返回
			return mysql_num_rows($res) ? mysql_fetch_assoc($res) : array();
		}

		/**
		 * 查询：查询多条记录
		 * @param1 string $sql，要查询的SQL语句
		 * @return mixed，成功返回一个二维数组，失败返回FALSE
		 */
		public function db_getAll($sql){
			//发送SQL
			$res = $this->db_query($sql);

			//判断返回
			$list = array();	
			if(mysql_num_rows($res)){
				//循环遍历
				//遍历
				while($row = mysql_fetch_assoc($res)){
					$list[] = $row;
				}
			}
			//返回
			return $list;
		}
		
		/**
		 * 查询：查询多条记录,三维数组
		 * @param1 string $sql，要查询的SQL语句
		 * @return mixed，成功返回一个二维数组，失败返回FALSE
		 */
		public function db_getAllMess($sql){
		    //发送SQL
		    $res = $this->db_query($sql);
		
		    //判断返回
		    $i = 0;
		    $list = array();
		    while ($row = mysql_fetch_array($res)) {
                $list[] = $row;
                $sqls = "select * from {$this->getTableName()} where m_pid=" . $row['m_id'] ;
                $res2 = $this->db_query($sqls);
                while ($row2 = mysql_fetch_array($res2)) {
                    $list[$i]['rep'][] = $row2;
                }
                $i++;
            }
		    //返回
		    return $list;
		}
		
		/***
		 * @param string $sql，要查询的SQL语句
		 * @return number 成功返回记录条数，失败返回FALSE
		 */
		public function db_getAllRows($sql){
		    //发送SQL
		    $res = $this->db_query($sql);
		    
		    //数据返回
		    return mysql_num_rows($res);
		}

		/**
		 * mysql_query错误处理
		 * @param1 string $sql，需要执行的SQL语句
		 * @return mixed，只要语句不出错，全部返回
		 */
		private function db_query($sql){
			//发送SQL
			$res = @mysql_query($sql);

			//判断结果
			if(!$res){
				//结果出错了
				//暴力处理，如果是真实线上项目（生产环境）必须写入到日志文件
				echo '语句出现错误：<br/>';
				echo '错误编号' . mysql_errno() . '<br/>';
				echo '错误内容' . mysql_error() . '<br/>';
				exit;
				//return false;
				//生产环境的处理方式
				//1.	将错误写入到日志文件
				//2.	return false;
			}
			//没有错误
			return $res;
		}

		//__sleep方法
		public function __sleep(){
			//返回需要保存的属性的数组
			return array('host','port','user','pass','dbname','charset','prefix');
		}

		//__wakeup方法
		public function __wakeup(){
			//连接资源
			$this->connect();
			//设置字符集和选中数据库
			$this->setCharset();
			$this->setDbname();
		}	

		/**
		 * 获取完整的表名
		 */
		protected function getTableName(){
			//完整表名：前缀+表名
			return $this->prefix . $this->table;
		}

		/**
		 * 获取字段信息
		 */
		private function getFields(){
			//组织SQL语句
			$sql = "desc {$this->getTableName()}";

			//执行
			$res = $this->db_getAll($sql);

			//遍历二维数组
			foreach($res as $field){
				$this->fields[] = $field['Field'];
				//判断当前字段是否是主键
				if($field['Key'] == 'PRI'){
					$this->fields['_PK'] = $field['Field'];
				}
			}
		}
		
		/**
		 * 关闭连接资源
		 */
		private function _close() {
			mysql_close ( $this->_link );
		}
	
		/**
		 * 析构函数
		 */
		public function __destruct() {
			$this->_close();
		}
	}
