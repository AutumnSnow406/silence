<?php
/* Smarty version 3.1.29, created on 2017-12-28 11:06:01
  from "D:\WWW\dzxxgc\View\Admin\Show\show_alter.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a445f990c2ec6_47473517',
  'file_dependency' => 
  array (
    '589a60714ae00cfa8e392cc96b7248fb3c0503dd' => 
    array (
      0 => 'D:\\WWW\\dzxxgc\\View\\Admin\\Show\\show_alter.html',
      1 => 1463043151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a445f990c2ec6_47473517 ($_smarty_tpl) {
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
 type="text/javascript" src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="ckeditor/adapters/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="Public/Admin/js/ajaxfileupload.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		//取消操作
		$("#btn1").click(function(){
			show_msg('取消成功咯！','index.php?Admin/Show/showList');
		})
		
		$('#pic').click(function(){
			$.ajaxFileUpload({
				 url:'index.php?Admin/Show/showPic', //你处理上传文件的服务端
				 secureuri:false,
				 fileElementId:'photo',
				 dataType: 'json',
				 success: function (data){
					 //alert(data);
					 if(data == 3){
						 alert('请先选择照片！');
					 }else if(data == 1){
						alert('非法文件类型！');
					 }else if(data == 2){
						alert('文件超过2M！');
					 }else{
						//alert(data);
						$("#s_img").val(data);
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
						<td height="31"><div class="title">修改展示</div></td>
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
									<td valign="bottom"><h3 style="letter-spacing: 1px;">温馨提示：请修改新闻信息哦！</h3></td>
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
										<form action="index.php?Admin/Show/showUpdate" method="post">
											<table width="100%" class="cont">
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="8%">展示标题：</td>
													<td width="30%"><input tabindex="1" type="text" name="title"
														id="s_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['s_title'];?>
" style="width: 400px;height:20px;"/>
														<input type='hidden' id='s_id' name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['s_id'];?>
"/></td>
													<td style="color: #FF0000;">*&nbsp;标题不能为空哦！</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>内容：</td>
													<td colspan="2"><textarea tabindex="2" id="s_content"
															name="content"><?php echo $_smarty_tpl->tpl_vars['data']->value['s_content'];?>
</textarea> 
															<?php echo '<script'; ?>
>
																//使用在线编辑器CKEDITOR类的replace方法替换textarea
																//replace方法有第二个参数，用来进行客户化配置，第二个参数是使用{}来控制
																CKEDITOR.replace('content');
															<?php echo '</script'; ?>
></td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td>照片上传：</td>
													<td><input tabindex="9" type="file" id="photo" name= "photo" /><input type="hidden" id="s_img" name="img"/></td>
													<td style="color: #FF0000;">*&nbsp;请选择一张照片（像素为500x300），必须先上传照片再添加信息！</td>
													<td width="2%">&nbsp;</td>
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td colspan="3">
															<button tabindex="10" id="pic" type="button">&nbsp;上 &nbsp;传&nbsp;</button>
															<input tabindex="3" id="btn" type="submit" value="&nbsp;修&nbsp;改&nbsp;" />
															<button tabindex="4" id="btn1" type="button" >取 &nbsp;消</button></td>
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
