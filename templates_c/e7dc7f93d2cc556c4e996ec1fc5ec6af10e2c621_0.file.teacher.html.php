<?php
/* Smarty version 3.1.29, created on 2016-06-08 15:08:41
  from "D:\wamp\www\dzxxgc\View\Home\Teacher\teacher.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5757c479b51f10_68362745',
  'file_dependency' => 
  array (
    'e7dc7f93d2cc556c4e996ec1fc5ec6af10e2c621' => 
    array (
      0 => 'D:\\wamp\\www\\dzxxgc\\View\\Home\\Teacher\\teacher.html',
      1 => 1464943837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757c479b51f10_68362745 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\dzxxgc\\Core\\Tools\\smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>电子信息工程专业改革试点</title>
<link rel="stylesheet" type="text/css" href="Public/Home/css/header.css">
<link rel="stylesheet" type="text/css" href="Public/Home/css/common.css">
<link rel="stylesheet" type="text/css" href="Public/Home/css/footer.css">
<link rel="stylesheet" type="text/css" href="Public/Home/css/login.css">
<link rel="stylesheet" type="text/css" href="Public/Home/css/message.css">
<?php echo '<script'; ?>
 type="text/javascript" src="Public/Home/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="Public/Home/js/login.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
function messsub(tid) {
    var content = $('#messbox_0').val();
    var len = content.length;
    if (len == 0) {
        alert("留言内容不能为空！");
        return false;
    }
    if (len > 200) {
        alert("留言内容不能超过200字！");
        return false;
    }
    $.post("index.php?Home/Message/message", {
    	tid:tid,
        content: content
    }, function(data) {
    	//alert(data);
        if (data == 1) {
            alert('留言成功!感谢您的留言！');
            window.location.reload();
        }else if(data == 2){
        	alert('留言成功，但邮件发送失败，麻烦在意见与建议进行反馈，谢谢您！');
        	window.location.reload();
        }else{
        	alert('留言失败！请重新留言！');
        }
    })
}

function checknum(v, word) {
	var len = 200 - v.length;
	$('#messword_' + word).text(len);
	if (len < 0) {
	    $('#messword_' + word).css({
	        "color": "red"
	    });
	}
}
function replysub(pid) {
	    var content = $('#reply_' + pid).children('textarea').val();
	    var len = content.length;
	    if (len == 0) {
	        alert("回复内容不能为空！");
	        return false;
	    }
	    if (len > 200) {
	        alert("回复内容不能超过200字！");
	        return false;
	    }
	    $.post("index.php?Home/Message/reply", {
	        pid: pid,
	        content: content
	    }, function(data) {
	    	if(data == 0){
	    		alert('请先登录！');
	    	}else if(data == 1){
	    		alert('请不要重复提交相同内容！');
	    	}else if (data) {
	            alert('回复成功!感谢您的回复！');
	            window.location.reload();
	    	}else{
		        alert('回复失败！');
		        window.location.reload();
	    	};
	    });
};
function reply(id) {
 	//$('.reply').empty();
	$('#reply_' + id).show();
	$('#reply_' + id).children('textarea').focus();
}
<?php echo '</script'; ?>
>
</head>
<body>
	<div class="header">
		<!-- logo开始 -->
		<div class="logo">
			<img src="Public/Home/images/logo.png">
		</div>
		<!-- logo结束 -->

		<!-- 导航栏开始 -->
		<div class="nav">
			<div class="nav1">
				<ul>
					<li><a href="index.php">首页</a></li>
					<li><a href="index.php?Home/Taskbook/taskbook">任务书</a></li>
					<li><a href="#">专业概况</a>
						<ul>
							<li><a href="index.php?Home/Profess/condition">发展状况</a></li>
							<li><a href="index.php?Home/Profess/feature">专业特色</a></li>
							<li><a href="index.php?Home/Profess/planning">专业规划</a></li>
						</ul></li>
					<li><a href="#">人才培养</a>
						<ul>
							<li><a href="index.php?Home/Talent/introduction">招生简介</a></li>
							<li><a href="index.php?Home/Talent/program">培养方案</a></li>
							<li><a href="index.php?Home/Talent/lab">专业实验室</a></li>
						</ul></li>
					<li><a href="#">师资队伍</a>
						<ul>
							<li><a href="index.php?Home/Teacher/teacher/id/1">教学团队</a></li>
							<li><a href="index.php?Home/Teacher/structure">师资结构</a></li>
						</ul></li>
					<li><a href="#">教学科研</a>
						<ul>
							<li><a href="index.php?Home/Scientific/project">教研项目</a></li>
							<li><a href="index.php?Home/Scientific/achievement">教研成果</a></li>
							<li><a href="index.php?Home/Scientific/program">科研项目</a></li>
							<li><a href="index.php?Home/Scientific/result">科研成果</a></li>
						</ul></li>
					<li><a href="#">学子风采</a>
						<ul>
							<li><a href="index.php?Home/Student/style">学生园地</a></li>
							<li><a href="index.php?Home/Student/show">成果展示</a></li>
							<li><a href="index.php?Home/Student/employment">就业情况</a></li>
						</ul></li>
					<li><a href="#">校企合作</a>
						<ul>
							<li><a href="index.php?Home/Cooperation/base">实习基地</a></li>
							<li><a href="index.php?Home/Cooperation/agreement">合作协议</a></li>
						</ul></li>
					<li><a href="index.php?Home/Contact/contact">联系我们</a></li>
				</ul>
			</div>
		</div>
		<!-- 导航栏结束 -->
	</div>
	<div class="main">
		<div class="pos">
			<span>&nbsp;&nbsp;当前位置：<a href="index.php">首页</a>>>师资队伍>>教学团队
			</span>
		</div>
		<div class="con">
			<div class="con1">
				<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_teach_0_saved_item = isset($_smarty_tpl->tpl_vars['row1']) ? $_smarty_tpl->tpl_vars['row1'] : false;
$_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->value) {
$_smarty_tpl->tpl_vars['row1']->_loop = true;
$__foreach_teach_0_saved_local_item = $_smarty_tpl->tpl_vars['row1'];
?>
				<ul>
					<li><img src="Public/Home/images/箭头.png">&nbsp;<a
						href="index.php?Home/Teacher/teacher/id/<?php echo $_smarty_tpl->tpl_vars['row1']->value['t_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row1']->value['t_name'];?>
老师简介</a></li>
				</ul>
				<?php
$_smarty_tpl->tpl_vars['row1'] = $__foreach_teach_0_saved_local_item;
}
if ($__foreach_teach_0_saved_item) {
$_smarty_tpl->tpl_vars['row1'] = $__foreach_teach_0_saved_item;
}
?>
			</div>
			<div class="con2">
				<table class="tb">
					<tr class="tr1">
						<td colspan="2">
							<p><?php echo $_smarty_tpl->tpl_vars['row']->value['t_name'];?>
老师简介</p>
						</td>
					</tr>
					<tr class="tr2">
						<td>
							<ul>
								<li>性别：<?php echo $_smarty_tpl->tpl_vars['row']->value['t_gender'];?>
</li>
								<li>出生年月：<?php echo $_smarty_tpl->tpl_vars['row']->value['t_birth'];?>
</li>
								<li>学历：<?php echo $_smarty_tpl->tpl_vars['row']->value['t_edu'];?>
</li>
								<li>职位：<?php echo $_smarty_tpl->tpl_vars['row']->value['t_staff'];?>
</li>
								<li>简介：</li>
							</ul>
						</td>
						<td style="margin-left: -200px;"><img alt="教师照片"
							src="<?php echo $_smarty_tpl->tpl_vars['row']->value['t_img'];?>
" width="140"
							height="180" /></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr class="tr3">
						<td colspan="2">
							<!-- 获取相应教师的信息 --> <pre>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['row']->value['t_intro'];?>
</pre>
						</td>
					</tr>
				</table>
				<br>
				<hr>
				<hr>
				<br>
				<!-- 留言板部分 -->
				<div class="mess">
					<h2>留言板</h2>
				</div>
				<div class="mess1">
					<label style="vertical-align: 450%;" for="messbox_0">内容：</label>
					<textarea name="mess" placeholder="请给老师留言吧，有问必答哦！" id="messbox_0"
						class="tta" onkeyup="checknum(this.value, '0')"></textarea>
					<!-- resize:none 不允许调整窗口大小 -->
					<div>
						<!-- <span class="login-header"><a href="javascript:void(0);">登录</a>?(仅限老师登录！)</span> -->
						<input type="submit" onclick="messsub(<?php echo $_smarty_tpl->tpl_vars['row']->value['t_id'];?>
)" value="留 言" tabindex="3" class="msg">
						<span class="span">还可以输入<span id="messword_0">200</span>字</span>
					</div>
				</div>
				<br>
				<!-- 留言列表 -->
				<div class="mess">
				<h2>所有的留言</h2>
				</div>
				<div class="mess1">
					<ul class="mess-list">
					<?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
						<?php
$_from = $_smarty_tpl->tpl_vars['result']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_mess_1_saved_item = isset($_smarty_tpl->tpl_vars['list']) ? $_smarty_tpl->tpl_vars['list'] : false;
$_smarty_tpl->tpl_vars['list'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['list']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
$__foreach_mess_1_saved_local_item = $_smarty_tpl->tpl_vars['list'];
?>
						<li>
							<div class="mess-text">
								<div class="mess-pic">
									<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['list']->value['m_img'];?>
" />
								</div>
								<div class="mess-rep">
									<div>
										<span class="mess-name"><?php echo $_smarty_tpl->tpl_vars['list']->value['m_name'];?>
:</span>
										<span class="mess-time"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['m_time'],'%Y-%m-%d %H:%M:%S');?>
</span>
									</div>
									<div>
										<p><?php echo $_smarty_tpl->tpl_vars['list']->value['m_content'];?>
</p>
									</div>
									<div>
										<h4>
											<span><a onclick="reply(<?php echo $_smarty_tpl->tpl_vars['list']->value['m_id'];?>
)">回复</a></span>
										</h4>
										<div id="reply_<?php echo $_smarty_tpl->tpl_vars['list']->value['m_id'];?>
" class="reply" style="display:none;">
												<div><span class="login-header"><img src="Public/Home/images/warning.png">登录之后才能回复，<a href="javascript:void(0);">立即登录</a>？</span></div>
												<textarea class="rep" id="messbox_<?php echo $_smarty_tpl->tpl_vars['row']->value['t_id'];?>
" onkeyup="checknum(this.value,<?php echo $_smarty_tpl->tpl_vars['list']->value['m_id'];?>
)"></textarea>
												<div><input class='msg1' onclick="replysub(<?php echo $_smarty_tpl->tpl_vars['list']->value['m_id'];?>
,<?php echo $_smarty_tpl->tpl_vars['row']->value['t_id'];?>
)" value="回复" type="submit"/><span class="span">还可以输入<span id="messword_<?php echo $_smarty_tpl->tpl_vars['list']->value['m_id'];?>
">200</span>字</span></div>
										</div>
										<?php if ($_smarty_tpl->tpl_vars['list']->value['rep']) {?>
										<?php
$_from = $_smarty_tpl->tpl_vars['list']->value['rep'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_reply_2_saved_item = isset($_smarty_tpl->tpl_vars['rep']) ? $_smarty_tpl->tpl_vars['rep'] : false;
$_smarty_tpl->tpl_vars['rep'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rep']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rep']->value) {
$_smarty_tpl->tpl_vars['rep']->_loop = true;
$__foreach_reply_2_saved_local_item = $_smarty_tpl->tpl_vars['rep'];
?>
										<div class="mess-rep1">
											<div class="mess-pic">
												<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['rep']->value['m_img'];?>
" />
											</div>
											<div>
												<span  class="mess-name"><?php echo $_smarty_tpl->tpl_vars['rep']->value['m_name'];?>
老师:</span>
												<span  class="mess-time"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rep']->value['m_time'],'%Y-%m-%d %H:%M:%S');?>
</span>
											</div>
											<div>
												<p><?php echo $_smarty_tpl->tpl_vars['rep']->value['m_content'];?>
</p>
											</div>
										</div>
										<?php
$_smarty_tpl->tpl_vars['rep'] = $__foreach_reply_2_saved_local_item;
}
if ($__foreach_reply_2_saved_item) {
$_smarty_tpl->tpl_vars['rep'] = $__foreach_reply_2_saved_item;
}
?>
										<?php }?>
									</div>
								</div>
							</div>
						</li>
						<?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_mess_1_saved_local_item;
}
if ($__foreach_mess_1_saved_item) {
$_smarty_tpl->tpl_vars['list'] = $__foreach_mess_1_saved_item;
}
?>
					<?php } else { ?>
					<div class="no-mess"><span>暂无留言！</span></div>
					<?php }?>
					</ul>
				</div>
				<!-- 登录部分 -->
				<div class="login">
					<div class="login-title">
						教师登录<span><a href="javascript:void(0);" class="close-login">关闭</a></span>
					</div>
					<div class="login-input-content">
						<div class="login-input">
							<label>用&nbsp;户&nbsp;&nbsp;名：</label> <input type="text"
								placeholder="请输入用户名" name="info[username]" id="username"
								class="list-input" />
						</div>
						<div class="login-input">
							<label>登录密码：</label> <input type="password" placeholder="请输入登录密码"
								name="info[password]" id="password" class="list-input" />
						</div>
					</div>
					<div class="login-button">
						<a href="javascript:void(0);" id="login-button-submit">登录</a>
					</div>
				</div>
				<div class="login-bg"></div>
			</div>
		</div>
	</div>
	<div class="footer">
		<p id="msg1">
			<span>版权所有&nbsp;&nbsp;@&nbsp;&nbsp;计算机与电子信息学院&nbsp;&nbsp;|&nbsp;&nbsp;电子信息工程专业</span>
		</p>
		<p id="friend">
			<span>友情链接：</span> <a target="blank" href="#">电子科学与技术</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a target="blank" href="#">计算机科学与技术</a>&nbsp;&nbsp;&nbsp;&nbsp; <a
				target="blank" href="#">测控技术与仪器</a>&nbsp;&nbsp;&nbsp;&nbsp; <a
				target="blank" href="#">电气工程及其自动化</a>&nbsp;&nbsp;&nbsp;&nbsp;<br>
			<a target="blank" href="#">电气工程及其自动化（卓越班）</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a target="blank" href="#">自动化</a>&nbsp;&nbsp;&nbsp;&nbsp; <a
				target="blank" href="#">网络工程</a>&nbsp;&nbsp;&nbsp;&nbsp; <a
				target="blank" href="index.php?Admin/Index/index"
				style="color: #ff0000;">后台入口</a>
		</p>
		<p id="msg2">
			<span>技术支持：严浚海&nbsp;&nbsp;&nbsp;&nbsp;指导老师：左敬龙</span>
		</p>
	</div>
</body>
</html><?php }
}
