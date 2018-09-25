<?php
class Upload {
	private $file; // 文件框名称
	private $extArr = array (
			'image/jpg',
			'image/jpeg',
			'image/gif',
			'image/png'
	);
	public function __construct($file) {
		$this->file = $file; // 为文件框名称赋值
	}
	public function fileUpload($path) {
		if (!in_array ($_FILES[$this->file]['type'], $this->extArr )) {
			return 1;
		}
		$size = $_FILES [$this->file] ['size'];
		if ($size > 2000000) {    //文件不超过2M
			return 2;
		}
		// 生成文件名
		$filename = basename($_FILES[$this->file]['name']);
		
		//连接路径，使用当前年月
		$dir = $path;
		if (! is_dir ( $dir )) {	//判断这个目录是否存在，如果不存在
			mkdir ( $dir );			//就去创建
		}
		
		//拼凑路径和文件名
		$file = $dir . '/'  . $filename;
		
		// 复制文件
		move_uploaded_file($_FILES[$this->file]['tmp_name'], $file);
		return $file;
	}
}