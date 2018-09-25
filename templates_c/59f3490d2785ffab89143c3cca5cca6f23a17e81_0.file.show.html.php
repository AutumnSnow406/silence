<?php
/* Smarty version 3.1.29, created on 2016-06-08 15:11:21
  from "D:\wamp\www\dzxxgc\View\Home\Show\show.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5757c5190abd00_16845245',
  'file_dependency' => 
  array (
    '59f3490d2785ffab89143c3cca5cca6f23a17e81' => 
    array (
      0 => 'D:\\wamp\\www\\dzxxgc\\View\\Home\\Show\\show.html',
      1 => 1463038845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757c5190abd00_16845245 ($_smarty_tpl) {
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
			<span>&nbsp;&nbsp;当前位置：<a href="index.php">首页</a>>><a href="index.php?Home/Notice/noticeList" target="blank">通知公告</a>
			</span>
		</div>
		<div class="con">
			<div class="con2" style="width: 982px;">
				<p style="text-align: center; color: blue;">
					<span style="font-size: 26px;"><?php echo $_smarty_tpl->tpl_vars['data']->value['s_title'];?>
</span>
				</p>
				<p style="font-size:20px;color:#808080;text-align: center;">
					<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['s_time'],'%Y-%m-%d %H:%M:%S');?>
</span>
				</p>
				<div style="margin:0 50px;">
					<pre><?php echo $_smarty_tpl->tpl_vars['data']->value['s_content'];?>
</pre>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<p id="msg1">
			<span>版权所有&nbsp;&nbsp;@&nbsp;&nbsp;计算机与电子信息学院&nbsp;&nbsp;|&nbsp;&nbsp;电子信息工程专业</span>
		</p>
		<p id="friend">
			<span>友情链接：</span> <a target="_blank" href="#">电子科学与技术</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a target="_blank" href="#">计算机科学与技术</a>&nbsp;&nbsp;&nbsp;&nbsp; <a
				target="_blank" href="#">测控技术与仪器</a>&nbsp;&nbsp;&nbsp;&nbsp; <a
				target="_blank" href="#">电气工程及其自动化</a>&nbsp;&nbsp;&nbsp;&nbsp;<br>
			<a target="_blank" href="#">电气工程及其自动化（卓越班）</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a target="_blank" href="#">自动化</a>&nbsp;&nbsp;&nbsp;&nbsp; <a
				target="_blank" href="#">网络工程</a>&nbsp;&nbsp;&nbsp;&nbsp; <a
				target="_blank" href="index.php?Admin/Index/index"
				style="color: #ff0000;">后台入口</a>
		</p>
		<p id="msg2">
			<span>技术支持：严浚海&nbsp;&nbsp;&nbsp;&nbsp;指导老师：左敬龙</span>
		</p>
	</div>
</body>
</html><?php }
}