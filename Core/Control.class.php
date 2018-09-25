<?php
class Control {
	protected $view;
	
	/**
	 * 构造方法，将view属性实例化为View类的实例，并设置模块路径
	 */
	public function __construct() {
		$this->view = new View ();
		$this->view->setTemplateDir(VIEW_DIR . '/' . GROUP . '/' . MODULE);
	}
	
	/**
	 * 操作后跳转的函数
	 * @param string $url  	跳转的url
	 * @param string $msg   输出的信息
	 * @param int $waitSeconds 停留秒数
	 */
	public function jump($url, $msg, $waitSeconds = 0) {
		header ( 'Refresh:' . $waitSeconds . ';url=' . $url );
		echo "<script language= javascript >alert('$msg');</script> ";
	}
}