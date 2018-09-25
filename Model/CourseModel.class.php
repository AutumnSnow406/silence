<?php

    //Course对应的类
    class CourseModel extends DB{
        //属性
        protected $table = 'course';
        
        /**
         * @param int $id
         * @return mixed 成功返回相应的课程信息，失败返回FALSE
         */
        public function getCourseById($id){
            //组织SQL
            $sql = "select * from {$this->getTableName()} where c_id={$id} limit 1 ";
            
            //调用父类的方法进行查询
            return $this->db_getRow($sql);
        }
        
         /**
		 * 通过课程名获取课程信息
		 * @param varchar  $name，课程名
		 * @return mixed，成功返回课程信息（数组），失败返回FALSE
		 */
		public function getCourseByName($name){
			//对课程名进行过滤
			$name = addslashes($name);

			//组织SQL
			$sql = "select * from {$this->getTableName()} where c_name='{$name}' limit 1 ";

			//调用父类方法
			return $this->db_getRow($sql);
		}
		
		/**
		 * @param int $semes
		 * @return mixed 成功返回相应的课程信息，失败返回FALSE
		 */
		public function getCourseBySemes($semes){
		    //组织SQL
		    $sql = "select * from {$this->getTableName()} where c_semes='{$semes}'";
		
		    //调用父类的方法进行查询
		    return $this->db_getAll($sql);
		}
		/**
		 * @param varchar $name
		 * @param varchar $semes
		 * @param varchar $hours
		 * @param varchar $credit
		 * @param varchar $teacher
		 * @return int ，成功返回自增长id，失败返回FALSE
		 */
		public function insertCourse($name,$semes,$hours,$credit,$teacher){
		    //对课程名进行过滤
		    $name = addslashes($name);
		    
		    //组织SQL语句
		    $sql = "insert into {$this->getTableName()} values (null,'{$name}','{$semes}','{$hours}','{$credit}','{$teacher}')";
		    
		    //调用父类方法，执行插入操作
		    return $this->db_insert($sql);
		}
		
		/**
		 * @param int $id
		 * @return mixed 成功返回受影响的行数，失败返回FALSE
		 */
		public function deleteCourse($id){
		    //组织SQL语句
		    $sql = "delete from {$this->getTableName()} where c_id={$id} limit 1";
		    
		    //调用父类方法，执行删除操作
		    return $this->db_delete($sql);
		}
		
		/**
		 * @param int $id
		 * @param vachar $name
		 * @param vachar $semes
		 * @param vachar $hours
		 * @param vachar $credit
		 * @param vachar $teacher
		 * @return Boolean，成功返回受影响的行数，失败返回FALSE
		 */
		public function updateCourse($id,$name,$semes,$hours,$credit,$teacher){
		    
		    //组织SQL语句
		    $sql = "update {$this->getTableName()} set c_name='{$name}',c_semes='{$semes}',c_hours='{$hours}',c_credit='{$credit}',c_teacher='{$teacher}' where c_id='{$id}'";
		    
		    //调用父类方法，执行更新操作
		    return $this->db_update($sql);
		}
		
		/**
		 * @return mixed,成功返回所有课程数据，失败返回FALSE
		 */
		public function selectAllCourse(){
		    //组织SQL语句
		    $sql = "select * from {$this->getTableName()} order by c_semes asc";
		
		    //调用父类方法，执行查询操作
		    return $this->db_getAll($sql);
		}
    }