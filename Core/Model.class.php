<?php
class Model {
	protected $_db; // DB类对象
	protected $_fields = array (); // 数据表结构
	protected $_pk; // 表中的主键

	/*
	 * 构造函数,将db实例化DB类的实例，并解析表结构
	 */
	public function __construct() {
		$this->_db = DB::getInstance ();
		$this->_getFields ();
	}

	/*
	 * 解析表结构
	 */
	private function _getFields() {
		$sql = "desc {$this->tableName}";
		$this->_db->query ( $sql );
		$fieldCount = $this->_db->num_rows (); // 字段总数
		for($i = 0; $i < $fieldCount; $i ++) {
			$row = $this->_db->fetch_assoc (); // 获取一行数据
			$this->_fields [] = $row ['Field']; // 将字段名放到fields属性数组中
			if ($row ['Key'] == 'PRI') // 如果是主键
				$this->_pk = $row ['Field']; // 将主键字段名放在pk属性中
		}
	}

	/*
	 * 数据过滤功能
	 *
	 * @param array $data 所有要过滤的数据
	 * @return array
	 */
	private function _dataFilter($data) {
		$keys = array_keys ( $data );
		$row = array (); // 空数组
		foreach ( $keys as $value ) {
			if (in_array ( $value, $this->_fields )) {
				$row [$value] = $data [$value];
			}
		}
		return $row;
	}

	/*
	 * 自动数据录入功能
	 *
	 * @param array $data  要录入的数据的数组 '字段名'=>值,'字段名'=>值
	 * @return             受影响行数
	 */
	public function insert($data = array()) {
		if (! $data) {
			$data = $_POST;
		}
		$data = $this->_dataFilter ( $data );
		$keys = array_keys ( $data );
		$values = array_values ( $data );
		$sql = "insert into $this->tableName (" . implode ( ',', $keys ) . ") ";
		$sql .= "values ('";
		$sql .= implode ( "','", $values );
		$sql .= "')";
		$this->_db->query ( $sql );
		return $this->_db->affected_rows ();
	}

	/*
	 * 自动数据删除功能
	 *
	 * @param int $id  要被删除的数据ID
	 * @return int     受影响行数
	 */
	public function delete($id) {
		$sql = "delete from $this->tableName where $this->_pk='$id'";
		$this->_db->query ( $sql );
		return $this->_db->affected_rows ();
	}

	/*
	 * 自动数据修改功能
	 *
	 * @param array $data  要修改的数据的数组 '字段名'=>值,'字段名'=>值
	 * @return int         受影响行数
	 */
	public function update($data = array()) {
		if (! $data) {
			$data = $_POST;
		}
		$data = $this->_dataFilter ( $data );
		$sql = "update $this->tableName set ";
		// 循环遍历参数数组
		foreach ( $data as $key => $value ) {
			// 如果当前元素的名和主键名相同，则不连接字符串
			if ($key == $this->_pk) {
				continue;
			}

			$sql = $sql . $key . "='" . $value . "',";
		}
		$sql = rtrim ( $sql, ',' ); // 去掉最后一个逗号
		                            // 连接修改条件
		$sql = $sql .= ' where ' . $this->_pk . "='" . $data [$this->_pk] . "'";
		$this->_db->query ( $sql );
		return $this->_db->affected_rows ();
	}

	/*
	 * 查询所有数据
	 *
	 * @return array
	 */
	public function fetchAll() {
		$query = "select * from $this->tableName order by $this->_pk desc";   //以降序的方式排序
		$data = array ();
		$this->_db->query ( $query );
		$num = $this->_db->num_rows ();
		for($i = 0; $i < $num; $i ++) {
			$data [] = $this->_db->fetch_assoc ();
		}
		return $data;
	}

	/*
	 * 查询一条数据
	 *
	 * @param int $id      数据的唯一标识
	 * @return array
	 */
	public function fetchRow($id) {
		$query = "select * from $this->tableName where $this->_pk='$id'";
		$this->_db->query ( $query );
		$row = $this->_db->fetch_assoc ();
		return $row;
	}

	/*
	 * 批量删除功能
	 *
	 * @param array $data  要被删除的数据的id数组
	 * @return int         受影响行数
	 */
	public function deleteAll($data) {
		$where = implode ( ',', $data );
		$sql = "delete from $this->tableName where $this->_pk in (" . $where . ")";
		$this->_db->query ( $sql );
		return $this->_db->affected_rows ();
	}
}