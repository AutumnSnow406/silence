$(function () {
    t_login = {};
    t_login.openLogin = function(){
        $('.login-header a').click(function(){
            $('.login').show();
            $('.login-bg').show();
        });
    };
    t_login.closeLogin = function(){
        $('.close-login').click(function(){
            $('.login').hide();
            $('.login-bg').hide();
        });
    };
    t_login.loginForm = function () {
        $("#login-button-submit").on('click',function(){
              var username = $("#username").val();
              var password = $("#password").val();
            if(username == ""){
                alert("用户名不能为空");
                $("#username").focus();
                return false;
            }else if(password == ""){
                alert("密码不能为空");
                $("#password").focus();
                return false;
            }else{
                $.post("index.php?Home/Teacher/login", {
        			username: username,
        			password: password
    			}, function(data) {
    				//alert(data);
        			if (data == 1) {
            			alert('登录成功！');
	        			setTimeout(function(){
	                    	$('.login').hide();
	                    	$('.login-bg').hide();
	                    	$('.list-input').val('');
	               	 	},500);
        			}else{
        				alert('登录失败！');
        			}
        		})
            }
        });
    };
    t_login.run = function () {
        this.closeLogin();
        this.openLogin();
        this.loginForm();
    };
    t_login.run();
});