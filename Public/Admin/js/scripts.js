jQuery(document).ready(
		function() {
			$('.page-container form').submit(function() {
				var username = $(this).find('.username').val();
				var password = $(this).find('.password').val();
				/*var captcha = $(this).find('.captcha').val();
				if (captcha == '') {
					$(this).find('.error').fadeOut('fast', function() {
						$(this).css('top', '27px');
					});
					$(this).find('.error').fadeIn('fast', function() {
						$(this).parent().find('.captcha').focus();
					});
					return false;
				}*/
				if (username == '') {
					$(this).find('.error').fadeOut('fast', function() { // fadeOut()
																		// 方法使用淡出效果来隐藏被选元素，假如该元素是隐藏的
						$(this).css('top', '96px');
					});
					$(this).find('.error').fadeIn('fast', function() { // fadeIn()
																		// 方法使用淡入效果来显示被选元素，假如该元素是隐藏的
						$(this).parent().find('.username').focus(); // parent()
																	// 获得当前匹配元素集合中每个元素的父元素
					});
					return false;
				}
				if (password == '') {
					$(this).find('.error').fadeOut('fast', function() {
						$(this).css('top', '165px');
					});
					$(this).find('.error').fadeIn('fast', function() {
						$(this).parent().find('.password').focus();
					});
					return false;
				}
			});

			$('.page-container form .username, .page-container form .password')
					.keyup(function() { // 当按钮被松开时，发生 keyup 事件
						$(this).parent().find('.error').fadeOut('fast');
					});
		});
