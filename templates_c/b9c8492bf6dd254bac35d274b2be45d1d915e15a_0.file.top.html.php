<?php
/* Smarty version 3.1.29, created on 2016-10-10 19:44:35
  from "D:\WWW\dzxxgc\View\Admin\Index\top.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fb7f239bd4f3_78798762',
  'file_dependency' => 
  array (
    'b9c8492bf6dd254bac35d274b2be45d1d915e15a' => 
    array (
      0 => 'D:\\WWW\\dzxxgc\\View\\Admin\\Index\\top.html',
      1 => 1462526696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fb7f239bd4f3_78798762 ($_smarty_tpl) {
?>
<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Public/Admin/css/skin.css" />
<?php echo '<script'; ?>
 type="text/javascript">
	function logout() {
		if (confirm('您确定要退出吗？')) {
			top.location = 'index.php?Admin/Privilege/loginOut';
		}
	}
<?php echo '</script'; ?>
>
</head>

<body>
	<table cellpadding="0" width="100%" height="64"
		background="Public/Admin/images/top_top_bg.gif">
		<tr valign="top">
			<td width="62"><a href="javascript:void(0)">&nbsp;&nbsp;<img
					style="border: none" src="Public/Admin/images/logo1.png" /></a></td>
			<td width="30%"
				style="padding-top: 10px; font: 24px Arial, SimSun, sans-serif; color: #FFF">电信专业管理系统</td>
			<td width="25%"
				style="padding-top: 13px; font: 15px Arial, SimSun, sans-serif; color: #FFF">管理员：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 您好，感谢登陆使用！</td>
			<td width="30%"
				style="padding-top: 13px; font: 15px Arial, SimSun, sans-serif; color: #FFF">今天是：<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
 </td>
			<td style="padding-top: 10px;" align="center"><a
				href="index.php?Home/Index/index" target="blank"><img
					style="border: none" src="Public/Admin/images/index.gif" /></a></td>
			<td style="padding-top: 10px;" align="center"><a
				href="javascript:void(0)"><img style="border: none"
					src="Public/Admin/images/out.gif" onclick="logout();" /></a></td>
		</tr>
	</table>
</body>
</html><?php }
}
