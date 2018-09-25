<?php
/* Smarty version 3.1.29, created on 2017-12-28 10:28:53
  from "D:\WWW\dzxxgc\View\Admin\Teacher\teacher_add.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a4456e55c42c9_92195264',
  'file_dependency' => 
  array (
    '6593df1f787408e6e54c39b67aec24eaaee9e176' => 
    array (
      0 => 'D:\\WWW\\dzxxgc\\View\\Admin\\Teacher\\teacher_add.html',
      1 => 1465312401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4456e55c42c9_92195264 ($_smarty_tpl) {
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
 type="text/javascript" src="Public/Admin/js/ajaxfileupload.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
//提交表单
$('#btn').click(
		function() {
			var name   = $('#t_name').val();
			var gender = $('#t_gender').val();
			var birth  = $('#t_birth').val();
			var email  = $('#t_email').val();
			var edu    = $('#t_edu').val();
			var staff  = $('#t_staff').val();
			var user   = $('#t_user').val();
			var pass   = $('#t_pass').val();
			var intro  = $('#t_intro').val();
			var img	   = $('#t_img').val();
			var myReg  = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/; //邮件正则，形如：(********@**.**)
			if(img == ''){
				show_err_msg('请先上传教师照片！');
				$('#t_img').focus();
			}else if(name == ''){
				show_err_msg('教师姓名不能为空哦！');
				$('#t_name').focus();
			}else if(user == ''){
				show_err_msg('用户名不能为空哦！');
				$('#t_user').focus();
			}else if(pass == ''){
				show_err_msg('登录密码不能为空哦！');
				$('#t_pass').focus();
			}else if(!myReg.test(email)){
				show_err_msg('您的邮箱格式错咯！');
				$('#email').focus();
			}else{
				var data = 'name=' + name + '&gender=' + gender + '&birth=' + birth + '&email=' + email + '&edu=' + edu + '&staff=' + staff + '&user=' + user + '&pass=' + pass + '&intro=' + intro + '&img=' + img;
				var xhr = createXhr();
				xhr.open('post', 'index.php?Admin/Teacher/teacherAdd');
				xhr.setRequestHeader('Content-Type',
						'application/x-www-form-urlencoded');
				xhr.onreadystatechange = function() {
					if (xhr.readyState == 4 && xhr.status == 200) {
						//alert(xhr.responseText);
						if (xhr.responseText == 1) {
							if (confirm('添加教师成功咯！是否继续添加？')) {
								window.location.reload();
							}else{
								show_msg('','index.php?Admin/Teacher/teacherList');
							}
						}else if(xhr.responseText == 2){
							show_err_msg('教师已存在，请不要重复添加！');
						}else{
							show_err_msg('添加教师失败，请重新添加！o(︶︿︶)o');
						}
					}
				};
				xhr.send(data);
			}
	});
	
	$('#pic').click(function(){
		$.ajaxFileUpload ({
			 url:'index.php?Admin/Teacher/teacherPic',
			 secureuri:false,
			 fileElementId:'photo',
			 dataType: 'json',
			 success: function (data){
			 	//alert(data);
			 	if(data == 3){
					 show_err_msg('请先选择教师照片！');
				 }else if(data == 1){
					 show_err_msg('非法文件类型！');
				 }else if(data == 2){
					 show_err_msg('文件超过2M！');
				 }else{
					//alert(data);
					$("#t_img").val(data);
					$("#photo").after($("#photo").clone().val(""));
					$("#photo").remove();
					var item = "<p style='color:red;'>上传成功！</p>";
					$("#photo").after(item);
				}
			 }
		});
		  return false;
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
						<td height="31"><div class="title">添加教师</div></td>
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
									<td valign="bottom"><h3 style="letter-spacing: 1px;">温馨提示：请尽量完善教师的基本信息哦！</h3></td>
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
										<form action="" method="post" enctype="multipart/form-data">
											<table width="100%" class="cont">
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="8%">教师姓名：</td>
													<td width="15%"><input tabindex="1" type="text"
														id="t_name" value="" /></td>
													<td style="color: #FF0000;">*&nbsp;真实姓名</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>性别：</td>
													<td><input tabindex="2" type="text" id="t_gender"
														value="" /></td>
													<td style="color: #FF0000;">*&nbsp;教师性别</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>出生年月：</td>
													<td><input tabindex="3" type="text" id="t_birth"
														value="" /></td>
													<td style="color: #FF0000;">*&nbsp;格式：（例如）2016年04月</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>电子邮箱：</td>
													<td><input tabindex="4" type="text" id="t_email"
														value="" /></td>
													<td style="color: #FF0000;">*&nbsp;请输入一个合法且正确的邮箱地址</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>学历：</td>
													<td><input tabindex="5" type="text" id="t_edu"
														value="" /></td>
													<td></td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>职位：</td>
													<td><input tabindex="6" type="text" id="t_staff"
														value="" /></td>
													<td></td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>用户名：</td>
													<td><input tabindex="6" type="text" id="t_user"
														value="" /></td>
													<td style="color: #FF0000;">*&nbsp;必填，教师登录用户名</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>密码：</td>
													<td><input tabindex="6" type="text" id="t_pass"
														value="" /></td>
													<td style="color: #FF0000;">*&nbsp;必填，教师登录密码</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>简介：</td>
													<td colspan="2"><textarea tabindex="8" id="t_intro"
															style="width: 500px; height: 150px;"></textarea></td>
													<td></td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>照片上传：</td>
													<td><input tabindex="9" type="file" id="photo" name= "photo" /><input type="hidden" id="t_img" /></td>
													<td style="color: #FF0000;">*&nbsp;请选择一张教师照片，必须先上传照片再添加信息！</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td colspan="3"><button tabindex="10" id="pic" type="button">&nbsp;上 &nbsp;传&nbsp;</button>&nbsp;&nbsp;<button tabindex="11" id="btn" type="button">&nbsp;添 &nbsp;加&nbsp;</button></td>
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
