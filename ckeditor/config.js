/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	//自定义配置
	//config.配置项 = 值
	config.width = 800;
	config.height = 500;
	config.uiColor = "#aabbcc";

	//文件的上传管理：加载CKfinder
	config.filebrowserBrowseUrl =	'./ckfinder/ckfinder.html';	
	config.filebrowserImageBrowseUrl = './ckfinder/ckfinder.html?Type=Images';	
	config.filebrowserFlashBrowseUrl = './ckfinder/ckfinder.html?Type=Flash';	
	config.filebrowserUploadUrl = './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';	
	config.filebrowserImageUploadUrl = './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';	
	config.filebrowserFlashUploadUrl = './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};
