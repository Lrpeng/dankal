function checklength() {
	var username = document.getElementById("username").value.length;
	var un = document.getElementById("username");
	if (username > 11 || username < 6) {
		un.setCustomValidity("用户名需要在6到11个字符之间");
	} else {
		un.setCustomValidity("");
	}
}

function checkPasswords() {
	var pass1 = document.getElementById("password");
	var pass2 = document.getElementById("confirm");
	if (pass1.value != pass2.value) {
		pass1.setCustomValidity("两次输入的密码不匹配");
	} else if (pass1.value.length > 16 || pass1.value.length < 6) {
		pass1.setCustomValidity("密码需要在6到16个字符之间");
	} else {
		pass1.setCustomValidity("");
	}
}

function checkLNum(){
	var  longnum = document.getElementById("longnum");
	if(longnum.value.length<11){
		longnum.setCustomValidity("请输入11位手机号码");
	}else{
		longnum.setCustomValidity("");
	}
}

function checkSNum(){
	var  shortnum = document.getElementById("shortnum");
	if(shortnum.value.length<6){
		shortnum.setCustomValidity("请输入6位短号");
	}else{
		shortnum.setCustomValidity("");
	}
}

function sendMessage(){
	if($("#longnum").val().length == 11){
		$.ajax({
			type:'POST',
			url :'sendMessage.php',
			data:"longnum="+$('#longnum').val(),
			success:function(data){
				eval("data=" + data);
				alert(data.code);
			}
		});	
		alert("发送成功");
	}else if($("#longnum").val().length !=11 && $("#longnum").val().length != 0){
		alert("请填写正确的手机号码");
	}else{
		alert("您还未填写手机号码");
	}
}
function checkCode(){
	$.ajax({
		type: 'GET',
		url : 'sendMessage.php?code=1',
		success:function(data){
			eval("data="+data);
			//判断是否有获取验证码，如果无则 data.code = none
			if(data.code != "none"){
				if($("#code").val() != data.code){
					alert("短信验证码错误");
				}else{
					$("#regform").submit();
				}
			}
			if(data.code == "none"){
				alert("请获取短信验证码");
			}
		}
	});
}