<?php
/* Smarty version 3.1.29, created on 2016-10-10 19:44:24
  from "D:\WWW\dzxxgc\View\Admin\Privilege\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fb7f182bdb08_67681108',
  'file_dependency' => 
  array (
    'be885ea56fe5ac29e0fe8b4c7b74de9fe80f8425' => 
    array (
      0 => 'D:\\WWW\\dzxxgc\\View\\Admin\\Privilege\\login.html',
      1 => 1461938627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fb7f182bdb08_67681108 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>后台登录系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="Public/Admin/css/login.css">
<link rel="stylesheet" href="Public/Admin/css/bootstrap.min.css">
<?php echo '<script'; ?>
 type="text/javascript" src="Public/Admin/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="Public/Admin/js/tooltips.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="Public/Admin/js/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='Public/Admin/js/public.js'><?php echo '</script'; ?>
>
</head>

<body>
	<div class="page-container">
		<div class="main_box">
			<div class="login_box">
				<div class="login_logo">
					<span>管理员登录</span>
				</div>

				<div class="login_form">
					<form action="index.html" id="login_form"
						method="post">
						<div class="form-group">
							<label for="j_username" class="t">管理员：</label> <input
								id="username" value="" name="username" type="text"
								class=" username form-control x319 in" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="j_password" class="t">密 码：</label> <input
								id="password" value="" name="password" type="password"
								class="password form-control x319 in">
						</div>
						<!-- <div class="form-group">
							<label for="j_captcha" class="t">验证码：</label> <input
								id="j_captcha" name="j_captcha" type="text"
								class="captcha form-control x164 in"> <img
								id="captcha_img" alt="" title="点击更换"
								src="index.php?Admin/Privilege/captcha"
								onclick="this.src='index.php?Admin/Privilege/captcha&' + Math.random()"
								class="m">
						</div> -->
						<div class="form-group">
							<label class="t"></label> <label for="j_remember" class="m">
								<input id="j_remember" type="checkbox" value="true">&nbsp;记住登陆账号!
							</label>
						</div>
						<div class="form-group space">
							<label class="t"></label>
							<button type="button" id="submit_btn"
								class="btn btn-primary btn-lg">&nbsp;登&nbsp;录&nbsp;</button>
							<input type="reset" value="&nbsp;重&nbsp;置&nbsp;"
								class="btn btn-default btn-lg">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="Public/Admin/js/scripts.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
