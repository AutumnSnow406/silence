// JavaScript Document
		//支持Enter键登录
		document.onkeydown = function(e){
			if($(".bac").length==0)
			{
				if(!e) e = window.event;
				if((e.keyCode || e.which) == 13){
					var obtnLogin=document.getElementById("submit_btn")
					obtnLogin.focus();
				}
			}
		}

    	$(function(){
			//提交表单
			$('#submit_btn').click(function(){
				if($('#username').val() == ''){
					show_err_msg('管理员账号不能为空哦！');	
					$('#username').focus();
				}else if($('#password').val() == ''){
					show_err_msg('密码不能为空哦！');
					$('#password').focus();
				}else{
					//ajax提交表单，#login_form为表单的ID
					var username = $('#username').val();
					var password = $('#password').val();
					var remember = $('#j_remember').val();
					var data = 'username=' + username + '&password=' + password + '&remember=' + remember;
					var xhr = createXhr();
					xhr.open('post','index.php?Admin/Privilege/signin');
					xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					xhr.onreadystatechange = function(){
						if (xhr.readyState == 4 && xhr.status == 200){
							//alert(xhr.responseText);
							if(xhr.responseText == 1){
								show_msg('登录成功咯！  正在为您跳转...','index.php?Admin/Index/index');	
							} else {
								show_err_msg('用户名或者密码错误，请重新登录！');
							}
						}
					};
					xhr.send(data);
				}
			});
		});