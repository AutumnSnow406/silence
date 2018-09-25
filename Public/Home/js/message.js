/**
 * 留言功能部分的js
 */
$(function(){
	mess={};
	mess.sub = function(){
		messsub(tid) = function(){
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
	        content: content
	    }, function(data) {
	        if (data == 1) {
	            alert('留言成功!感谢您的留言！');
	            window.location.reload();
	        }
	        })
	    };
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
		var username = "<?php echo isset($_SESSION['t_user']) ? $_SESSION['t_user'] : ""; ?>";
		if(username == ''){
			alert('登录后才能进行回复！');
		}else{
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
		    $.post("index.php?Home/Teacher/reply", {
		        pid: pid,
		        content: content
		    }, function(data) {
		        if (data == -1) {
		            checkUserLogin();
		            return false;
		        }
		        var dl = "<dl><dd><div class='userPic30'>\n\
		   <img src='Public/Home/images/教师.png'>
		   </div><div class='usermsgFont2'><p><span class='blue'>" + data.m_name + "</span><br> " + content + "</p><h4>"+data.m_time+"</div></dd></dl>";
		        $('#reply_' + pid).after(dl);
		        $('.reply').empty();
		    })
		}
	}
	
	function reply(id) {
	    var box = "<textarea id='messbox_" + id + "'class='textarea_mess' onkeyup=checknum(this.value," + id + ")></textarea>\n\
	   
	   <a id='comment' class='btn68 fl' onclick='replysub(" + id + ")'>回复</a>\n\
	   <span class='wordnum'>还可以输入<span id='messword_" + id + "'>200</span>字</span>\n\
	   </div><div class='cl'></div></div>";
	    $('.reply').empty();
	    $('#reply_' + id).html(box);
	    $('#reply_' + id).children('textarea').focus();
	}
	mess.sub();
});