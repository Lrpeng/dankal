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