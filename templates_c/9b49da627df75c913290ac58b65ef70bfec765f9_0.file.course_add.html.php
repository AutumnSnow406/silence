<?php
/* Smarty version 3.1.29, created on 2017-12-28 10:29:03
  from "D:\WWW\dzxxgc\View\Admin\Course\course_add.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a4456efeb9249_26667273',
  'file_dependency' => 
  array (
    '9b49da627df75c913290ac58b65ef70bfec765f9' => 
    array (
      0 => 'D:\\WWW\\dzxxgc\\View\\Admin\\Course\\course_add.html',
      1 => 1462594286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4456efeb9249_26667273 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Public/Admin/css/skin.css" />
<?php echo '<script'; ?>
 language='javascript' src='Public/Admin/js/public.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="Public/Admin/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="Public/Admin/js/tooltips.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
//提交表单
$('#btn').click(
		function() {
			var name    = $('#c_name').val();
			var semes 	= $('#c_semes').val();
			var hours   = $('#c_hours').val();
			var credit  = $('#c_credit').val();
			var teacher = $('#c_teacher').val();
			if(name == ''){
				show_err_msg('课程名称不能为空哦！');
				$('#c_name').focus();
			}else if(semes == ''){
				show_err_msg('学期不能为空哦！');
				$('#c_semes').focus();
			}else if(hours == ''){
				show_err_msg('学时不能为空哦！');
				$('#c_hours').focus();
			}else if(credit == ''){
				show_err_msg('学分不能为空哦！');
				$('#c_credit').focus();
			}else{
				var data = 'name=' + name + '&semes=' + semes + '&hours=' + hours + '&credit=' + credit + '&teacher=' + teacher;
				var xhr = createXhr();
				xhr.open('post', 'index.php?Admin/Course/courseAdd');
				xhr.setRequestHeader('Content-Type',
						'application/x-www-form-urlencoded');
				xhr.onreadystatechange = function() {
					if (xhr.readyState == 4 && xhr.status == 200) {
						//alert(xhr.responseText);
						if (xhr.responseText == 1) {
							if (confirm('添加课程成功咯！是否继续添加？')) {
								window.location.reload();
							}else{
								show_msg('','index.php?Admin/Course/courseList');
							}
						}else if(xhr.responseText == 2){
							show_err_msg('课程已存在，请不要重复添加！');
						}else{
							show_err_msg('添加课程失败，请重新添加！o(︶︿︶)o');
						}
					}
				};
				xhr.send(data);
			}
	});
});
<?php echo '</script'; ?>
>
</head>

<body>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<!-- 头部开始 -->
		<tr>
			<td width="17" valign="top"
				background="Public/Admin/images/mail_left_bg.gif"><img
				src="Public/Admin/images/left_top_right.gif" width="17" height="29" />
			</td>
			<td valign="top" background="Public/Admin/images/content_bg.gif">
				<table width="100%" height="31" border="0" cellpadding="0"
					cellspacing="0" background="./Public/Admin/images/content_bg.gif">
					<tr>
						<td height="31"><div class="title">添加课程</div></td>
					</tr>
				</table>
			</td>
			<td width="16" valign="top"
				background="Public/Admin/images/mail_right_bg.gif"><img
				src="Public/Admin/images/nav_right_bg.gif" width="16" height="29" /></td>
		</tr>
		<!-- 中间部分开始 -->
		<tr>
			<!--第一行左边框-->
			<td valign="middle" background="Public/Admin/images/mail_left_bg.gif">&nbsp;</td>
			<!--第一行中间内容-->
			<td valign="top" bgcolor="#F7F8F9">
				<table width="100%" border="0" align="center" cellpadding="0"
					cellspacing="0">
					<!-- 空白行-->
					<tr>
						<td colspan="2" valign="top">&nbsp;</td>
						<td>&nbsp;</td>
						<td valign="top">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="4">
							<table>
								<tr>
									<td width="60" align="center"><img
										src="Public/Admin/images/warning.png" /></td>
									<td valign="bottom"><h3 style="letter-spacing: 1px;">温馨提示：请尽量完善课程信息哦！</h3></td>
								</tr>
							</table>
						</td>
					</tr>
					<!-- 一条线 -->
					<tr>
						<td height="40" colspan="4">
							<table width="100%" height="1" border="0" cellpadding="0"
								cellspacing="0" bgcolor="#CCCCCC">
								<tr>
									<td></td>
								</tr>
							</table>
						</td>
					</tr>
					<!-- 添加栏目开始 -->
					<tr>
						<td width="2%">&nbsp;</td>
						<td width="96%">
							<table width="100%">
								<tr>
									<td colspan="2">
										<form action="" method="post">
											<table width="100%" class="cont">
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="8%">课程名称：</td>
													<td width="15%"><input tabindex="1" type="text"
														id="c_name" value="" /></td>
													<td style="color: #FF0000;">*&nbsp;必填</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>学期：</td>
													<td><input tabindex="2" type="text" id="c_semes"
														value="" /></td>
													<td style="color: #FF0000;">*&nbsp;必填，用数字代替，例如：大一第一学期填“1”，以此类推！</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>学时：</td>
													<td><input tabindex="3" type="text" id="c_hours"
														value="" /></td>
													<td style="color: #FF0000;">*&nbsp;必填</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>学分：</td>
													<td><input tabindex="4" type="text" id="c_credit"
														value="" /></td>
													<td style="color: #FF0000;">*&nbsp;必填</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>任课老师：</td>
													<td><input tabindex="5" type="text" id="c_teacher"
														value="" /></td>
													<td></td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td colspan="3"><button tabindex="6" id="btn" type="button"
														>&nbsp;添 &nbsp;加&nbsp;</button></td>
													<td>&nbsp;</td>
												</tr>
											</table>
										</form>
									</td>
								</tr>
							</table>
						</td>
						<td width="2%">&nbsp;</td>
					</tr>
					<!-- 添加栏目结束 -->
					<tr>
						<td height="40" colspan="4">
							<table width="100%" height="1" border="0" cellpadding="0"
								cellspacing="0" bgcolor="#CCCCCC">
								<tr>
									<td></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
			<td background="Public/Admin/images/mail_right_bg.gif">&nbsp;</td>
		</tr>
		<!-- 底部部分 -->
		<tr>
			<td valign="bottom" background="Public/Admin/images/mail_left_bg.gif">
				<img src="Public/Admin/images/buttom_left.gif" width="17"
				height="17" />
			</td>
			<td background="Public/Admin/images/buttom_bgs.gif"><img
				src="Public/Admin/images/buttom_bgs.gif" width="17" height="17" />
			</td>
			<td valign="bottom"
				background="Public/Admin/images/mail_right_bg.gif"><img
				src="Public/Admin/images/buttom_right.gif" width="16" height="17" />
			</td>
		</tr>
	</table>
</body>
</html>
<?php }
}
