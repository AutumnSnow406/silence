 function createXhr(){
		try {
			return new XMLHttpRequest();		//适用于W3C浏览器，同时也适应用于IE的高版本浏览器（8.0）
		} catch (e) {
		}
		try {
			return new ActiveXObject('Microsoft.XMLHTTP');		//适用于IE浏览器
		} catch (e) {
		}
		alert('请更换一个浏览器！');
	}