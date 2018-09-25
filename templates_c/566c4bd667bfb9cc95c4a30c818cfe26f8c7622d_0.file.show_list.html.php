<?php
/* Smarty version 3.1.29, created on 2016-06-08 15:09:48
  from "D:\wamp\www\dzxxgc\View\Admin\Show\show_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5757c4bc903682_75140297',
  'file_dependency' => 
  array (
    '566c4bd667bfb9cc95c4a30c818cfe26f8c7622d' => 
    array (
      0 => 'D:\\wamp\\www\\dzxxgc\\View\\Admin\\Show\\show_list.html',
      1 => 1465313159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757c4bc903682_75140297 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\dzxxgc\\Core\\Tools\\smarty\\plugins\\modifier.date_format.php';
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
	if(confirm('您确定要删除该展示吗？')){
		$.post("index.php?Admin/Show/showDel", {
	    	id:id
	    }, function(data) {
	    	//alert(data);
	        if (data == 1) {
	            alert('删除成功!');
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
						<td height="31"><div class="title">展示列表</div></td>
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
									<td valign="bottom"><h3 style="letter-spacing: 1px;">温馨提示：以下为前台首页展示板的列表，可进行修改和删除操作！</h3></td>
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
					<!-- 列表开始 -->
					<tr>
						<td width="2%">&nbsp;</td>
						<td width="96%">
							<table width="100%">
								<tr>
									<td colspan="2">
										<table style="overflow: hidden; table-layout: fixed; width: 100%;" class="cont tr_color">
											<tr>
												<th width="5%">排序</th>
												<th width="20%">标题</th>
												<th width="10%">发布时间</th>
												<th width="60%">内容</th>
												<th width="10%">操作</th>
											</tr>
											<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_show_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_show']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_show'] : false;
$__foreach_show_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_show'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_show']->value['iteration']++;
$__foreach_show_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
											<tr align="center" class="d" height="50">
												<!-- 实现序号的自增 -->
												<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_show']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_show']->value['iteration'] : null);?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['row']->value['s_title'];?>
</td>
												<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['s_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
												<td style="overflow: hidden; white-space:normal; text-overflow: ellipsis;"><?php echo $_smarty_tpl->tpl_vars['row']->value['s_content'];?>
</td>
												<td>
													<a href="index.php?Admin/Show/showAlter/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['s_id'];?>
" style="border:1px solid #DADADA;padding:3px;background-color:#ebeced;border-radius:5px;color:#0000ff;">&nbsp;修改&nbsp;</a>
													<a href="javascript:void(0);" onclick="del(<?php echo $_smarty_tpl->tpl_vars['row']->value['s_id'];?>
)" style="border:1px solid #DADADA;padding:3px;background-color:#ebeced;border-radius:5px;color:#0000ff;">&nbsp;删除&nbsp;</a>
												</td>
											</tr>
											<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_show_0_saved_local_item;
}
if ($__foreach_show_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_show'] = $__foreach_show_0_saved;
}
if ($__foreach_show_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_show_0_saved_item;
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
