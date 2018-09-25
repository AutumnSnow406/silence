<?php
class Page extends DB{
	public $pageNo = 1; // 页码
	public $pageSize = 10; // 页尺寸
	public $count = 0; // 数据总数
	public $pageCount = 0; // 总页数
	public $pageNext = 0; // 下一页
	public $pagePrev = 0; // 上一页
	public $orderField; // 要排序的字段
	public $orderType; // 排序方式 默认：降序
	protected  $table; // 表名
	public function __construct($tname,$orderField,$orderType = 'desc') {
		$this->table = $tname;
		$this->orderField = $orderField;
		$this->orderType = $orderType;
		parent::__construct();    //初始化父类构造方法
	}
	public function init() {
		$sql = "select * from {$this->getTableName()}";
		$this->count = $this->db_getAllRows($sql);
		$this->pageCount = ceil ( $this->count / $this->pageSize ); // 总页数
		$this->pageNo = isset ( $_GET ['pageNo'] ) ? $_GET ['pageNo'] : 1; // 页码
		$this->pageNext = $this->pageNo + 1; // 下一页
		$this->pagePrev = $this->pageNo - 1; // 上一页
		                                     // 判断页码越界
		if ($this->pageNext > $this->pageCount)
			$this->pageNext = $this->pageCount;
		if ($this->pagePrev < 1)
			$this->pagePrev = 1;
		if ($this->pageNo > $this->pageCount)
			$this->pageNo = $this->pageCount;
		if ($this->pageNo < 1)
			$this->pageNo = 1;
		
		$offset = ($this->pageNo - 1) * $this->pageSize; // 偏移量
		$sql = "select * from {$this->getTableName()} order by $this->orderField $this->orderType limit $offset,$this->pageSize";
		$num = $this->db_getAllRows($sql); // 本页查询到的数据总数
		for($i = 0; $i < $num; $i ++) { // 循环num次
			$data = $this->db_getAll($sql); // 创建二维数组
		}
		return $data;
	}
	
	// 获取分页信息
	public function getPager() {
		$str = '共' . $this->pageCount . '页 '.'&nbsp;';
		$str .= '共' . $this->count . '条数据 '.'&nbsp;';
		$str .= '当前第' . $this->pageNo . '页 '.'&nbsp;';
		$str .= '每页' . $this->pageSize . '条 '.'&nbsp;';
		$url = GROUP . '/' . MODULE . '/' . ACTION;
		$str .= "<a href={$_SERVER['PHP_SELF']}?" . $url . "/pageNo/1>首页</a>";
		$str .= '&nbsp;&nbsp;';
		$str .= "<a href={$_SERVER['PHP_SELF']}?" . $url . "/pageNo/{$this->pagePrev}>上一页</a>";
		$str .= '&nbsp;&nbsp;';
		$str .= "<a href={$_SERVER['PHP_SELF']}?" . $url . "/pageNo/{$this->pageNext}>下一页</a>";
		$str .= '&nbsp;&nbsp;';
		$str .= "<a href={$_SERVER['PHP_SELF']}?" . $url . "/pageNo/{$this->pageCount}>尾页</a>";
		return $str;
	}
}