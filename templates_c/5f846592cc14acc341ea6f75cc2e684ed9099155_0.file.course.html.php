<?php
/* Smarty version 3.1.29, created on 2016-09-07 18:08:43
  from "D:\WWW\dzxxgc\View\Home\Course\course.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57cfe72b574db9_10101385',
  'file_dependency' => 
  array (
    '5f846592cc14acc341ea6f75cc2e684ed9099155' => 
    array (
      0 => 'D:\\WWW\\dzxxgc\\View\\Home\\Course\\course.html',
      1 => 1463581897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57cfe72b574db9_10101385 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>电子信息工程专业改革试点</title>
<link rel="stylesheet" type="text/css" href="Public/Home/css/header.css">
<link rel="stylesheet" type="text/css" href="Public/Home/css/common.css">
<link rel="stylesheet" type="text/css" href="Public/Home/css/footer.css">
<?php echo '<script'; ?>
 type="text/javascript" src="Public/Home/js/jquery.js"><?php echo '</script'; ?>
>


<style type="text/css">
select{font-size:18px;margin-left:132px;border:1px solid #0088ff;border-radius:5px;width:150px;text-align:center;}
.table{border-collapse:collapse;font-size:16px;text-align:center;margin-top:10px;margin-left:130px;}
.table tr th{font-size:18px;border:2px solid #0088ff;font-weight:bold;background-color:#0088ff;color:#fff;}
.table tr td{border:1px solid #0088ff;}
</style>

<?php echo '<script'; ?>
>
$(function(){
	$(".semes").change(function(){
		var semes = $(".semes").val();//获取select标签中被选中的值
		//alert(semes);
		$(".table tr:gt(0)").remove();//移除第一个tr之后的内容
		$.post("index.php?Home/Course/course1",{
			semes:semes
		},function(data){
			for(var i in data){
				var item = "<tr><td>" + data[i].c_semes + "</td><td>" + data[i].c_name + "</td><td>" + data[i].c_hours + "</td><td>" + data[i].c_credit + "</td><td>" + data[i].c_teacher + "</td></tr>";
				$(".table").append(item);
			}
			
		},"json");
		
	});
});
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
			<span>&nbsp;&nbsp;当前位置：<a href="index.php">首页</a>>>课程设置
		</div>
		<div class="con">
			<div class="con2" style="height:500px;width:982px;">
				<p style="text-align: center;color: blue;">
					<span style="font-size: 30px;">课程设置</span>
				</p>
				<br>
				<select class="semes">
				<option value="1">大一第一学期</option>
				<option value="2">大一第二学期</option>
				<option value="3">大二第一学期</option>
				<option value="4">大二第二学期</option>
				<option value="5">大三第一学期</option>
				<option value="6">大三第二学期</option>
				<option value="7">大四第一学期</option>
				</select>
				<br>
				<table width="100%">
					<tr>
						<td colspan="2">
							<table class="table">
								<tr class="tr1">
									<th width="70">学期</th>
									<th width="320">课程名称</th>
									<th width="90">学时</th>
									<th width="90">学分</th>
									<th width="120">任课老师</th>
								</tr>
								<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_c_list_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_c_list_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
								<tr align="center">
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_semes'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_hours'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_credit'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_teacher'];?>
</td>
								</tr>
								<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_c_list_0_saved_local_item;
}
if ($__foreach_c_list_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_c_list_0_saved_item;
}
?>
							</table>
						</td>
					</tr>
				</table>
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
