<?php

	//初始化配置文件
	$config = array(
		'mysql' => array(
			'host' => 'localhost',       // 数据库主机
			'port' => '3306',            // 端口号
			'user' => 'root',            // 数据库用户
			'pass' => '123456',            // 密码
			'dbname' => 'dzxxgc',        // 数据库名称
			'prefix' => 'dx_',           // 表前缀
			'charset' => 'utf8'          // 数据库编码

		),
	    'DEFAULT_GROUP' => 'Home',       // 默认的分组
	    'DEFAULT_MODULE' => 'Index',     // 默认的模块
	    'DEFAULT_ACTION' => 'index',     // 默认的动作

	    'URL_MODEL' => '2'
	    
	);