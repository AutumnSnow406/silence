<?php
/* Smarty version 3.1.29, created on 2017-12-28 10:29:05
  from "D:\WWW\dzxxgc\View\Admin\Course\course_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a4456f1d74ec2_49570271',
  'file_dependency' => 
  array (
    'e8a3e484793a9369574c27138778ffc7aa5ad982' => 
    array (
      0 => 'D:\\WWW\\dzxxgc\\View\\Admin\\Course\\course_list.html',
      1 => 1463378910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4456f1d74ec2_49570271 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Public/Admin/css/skin.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="Public/Home/js/jquery.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	function del(id){
		if(confirm('您确定要删除该课程吗？')){
			$.post("index.php?Admin/Course/courseDel", {
		    	id:id
		    }, function(data) {
		    	//alert(data);
		        if (data == 1) {
		            alert('删除成功!');
		            //$('#messbox_0').val('');
		            window.location.reload();
		        };
		    });
		};
	};
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
						<td height="31"><div class="title">课程列表</div></td>
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
									<td width="50" align="center"><img
										src="Public/Admin/images/warning.png" /></td>
									<td valign="bottom"><h3 style="letter-spacing: 1px;">温馨提示：请通过本页对课程进行修改等操作哦！</h3></td>
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
					<!-- 产品列表开始 -->
					<tr>
						<td width="2%">&nbsp;</td>
						<td width="96%">
							<table width="100%">
								<tr>
									<td colspan="2">
										<table
											style="overflow: hidden; table-layout: fixed; width: 100%;"
											class="cont tr_color">
											<tr>
												<th width="100">排序</th>
												<th width="370">课程名称</th>
												<th width="150">学期</th>
												<th width="120">学时</th>
												<th width="120">学分</th>
												<th width="120">任课老师</th>
												<th width="120">操作</th>
											</tr>
											<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_c_list_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_c_list']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_c_list'] : false;
$__foreach_c_list_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_c_list'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_c_list']->value['iteration']++;
$__foreach_c_list_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
											<tr align="center" class="d" height="50">
												<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_c_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_c_list']->value['iteration'] : null);?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_name'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_semes'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_hours'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_credit'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_teacher'];?>
</td>
												<td><a href="index.php?Admin/Course/courseAlter/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['c_id'];?>
" style="border:1px solid #DADADA;padding:3px;background-color:#ebeced;border-radius:5px;color:#0000ff;">&nbsp;修改&nbsp;</a>
												<a href="javascript:void(0);" onclick="del(<?php echo $_smarty_tpl->tpl_vars['row']->value['c_id'];?>
)" style="border:1px solid #DADADA;padding:3px;background-color:#ebeced;border-radius:5px;color:#0000ff;">&nbsp;删除&nbsp;</a>
											</td>
											</tr>
											<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_c_list_0_saved_local_item;
}
if ($__foreach_c_list_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_c_list'] = $__foreach_c_list_0_saved;
}
if ($__foreach_c_list_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_c_list_0_saved_item;
}
?>
											<tr><td colspan="9"></td></tr>
											<tr><td colspan="9" style="text-align:center;font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
</td></tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
						<td width="2%">&nbsp;</td>
					</tr>
					<!-- 产品列表结束 -->
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
</html><?php }
}
