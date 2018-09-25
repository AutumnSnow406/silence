<?php
/* Smarty version 3.1.29, created on 2016-06-08 15:09:17
  from "D:\wamp\www\dzxxgc\View\Admin\Index\left.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5757c49d084630_19611982',
  'file_dependency' => 
  array (
    '510327dccce8f329d254b2eb2553a95394b4a01c' => 
    array (
      0 => 'D:\\wamp\\www\\dzxxgc\\View\\Admin\\Index\\left.html',
      1 => 1463040814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757c49d084630_19611982 ($_smarty_tpl) {
?>
<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo '<script'; ?>
 src="Public/Admin/js/prototype.lite.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/Admin/js/moo.fx.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/Admin/js/moo.fx.pack.js" type="text/javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="Public/Admin/css/skin.css" />

<?php echo '<script'; ?>
 type="text/javascript">
	window.onload = function() {
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');

		var myAccordion = new fx.Accordion(toggles, contents, {
			opacity : true,
			duration : 400
		});
		myAccordion.showThisHideOpen(contents[0]);
		for (var i = 0; i < document.getElementsByTagName("a").length; i++) {
			var dl_a = document.getElementsByTagName("a")[i];
			dl_a.onfocus = function() {
				this.blur();
			}
		}
	}
<?php echo '</script'; ?>
>
</head>

<body>
	<table width="100%" height="280" border="0" cellpadding="0"
		cellspacing="0" bgcolor="#EEF2FB">
		<tr>
			<td width="182" valign="top">
				<div id="container">
					<h1 class="type">
						<a href="javascript:void(0)">账号管理</a>
					</h1>
					<div class="content">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="Public/Admin/images/menu_top_line.gif"
									width="182" height="5" /></td>
							</tr>
						</table>
						<ul class="RM">
							<li><a href="index.php?Admin/Admin/admin_add" target="main">添加管理员</a></li>
							<li><a href="index.php?Admin/Admin/adminList" target="main">管理员列表</a></li>
						</ul>
					</div>
					<h1 class="type">
						<a href="javascript:void(0)">教师管理</a>
					</h1>
					<div class="content">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="Public/Admin/images/menu_top_line.gif"
									width="182" height="5" /></td>
							</tr>
						</table>
						<ul class="RM">
							<li><a href="index.php?Admin/Teacher/teacher_add" target="main">添加教师</a></li>
							<li><a href="index.php?Admin/Teacher/teacherList" target="main">教师列表</a></li>
						</ul>
					</div>
					<h1 class="type">
						<a href="javascript:void(0)">课程管理</a>
					</h1>
					<div class="content">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="Public/Admin/images/menu_top_line.gif"
									width="182" height="5" /></td>
							</tr>
						</table>
						<ul class="RM">
							<li><a href="index.php?Admin/Course/course_add" target="main">添加课程</a></li>
							<li><a href="index.php?Admin/Course/courseList" target="main">课程列表</a></li>
						</ul>
					</div>
					<h1 class="type">
						<a href="javascript:void(0)">留言管理</a>
					</h1>
					<div class="content">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="Public/Admin/images/menu_top_line.gif"
									width="182" height="5" /></td>
							</tr>
						</table>
						<ul class="RM">
							<li><a href="index.php?Admin/Message/messageList" target="main">留言列表</a></li>
						</ul>
					</div>
					<h1 class="type">
						<a href="javascript:void(0)">新闻管理</a>
					</h1>
					<div class="content">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="Public/Admin/images/menu_top_line.gif"
									width="182" height="5" /></td>
							</tr>
						</table>
						<ul class="RM">
							<li><a href="index.php?Admin/News/news_add" target="main">添加新闻</a></li>
							<li><a href="index.php?Admin/News/newsList" target="main">新闻列表</a></li>
						</ul>
					</div>
					<h1 class="type">
						<a href="javascript:void(0)">展示管理</a>
					</h1>
					<div class="content">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="Public/Admin/images/menu_top_line.gif"
									width="182" height="5" /></td>
							</tr>
						</table>
						<ul class="RM">
							<li><a href="index.php?Admin/Show/show_add" target="main">添加展示</a></li>
							<li><a href="index.php?Admin/Show/showList" target="main">展示列表</a></li>
						</ul>
					</div>
					<h1 class="type">
						<a href="javascript:void(0)">公告管理</a>
					</h1>
					<div class="content">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="Public/Admin/images/menu_top_line.gif"
									width="182" height="5" /></td>
							</tr>
						</table>
						<ul class="RM">
							<li><a href="index.php?Admin/Notice/notice_add" target="main">添加公告</a></li>
							<li><a href="index.php?Admin/Notice/noticeList" target="main">公告列表</a></li>
						</ul>
					</div>
					<h1 class="type">
						<a href="javascript:void(0)">意见建议管理</a>
					</h1>
					<div class="content">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="Public/Admin/images/menu_top_line.gif"
									width="182" height="5" /></td>
							</tr>
						</table>
						<ul class="RM">
							<li><a href="index.php?Admin/Suggest/suggestList" target="main">内容列表</a></li>
						</ul>
					</div>
					
				</div>
			</td>
		</tr>
	</table>
</body>
</html>
<?php }
}
