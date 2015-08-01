<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<style type="text/css">
		input{
			margin: 20px;
		}
	</style>
	<script type="text/javascript">
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
	</script>
	<body>
		<center>
				<form action="Controller/dankalController.php" method="post">
					<label>用户名</label><input type="text" name="username" id="username" value="" onchange="checklength()" required="required"/><br />
					<label>密码</label><input type="password" name="password" id="password" value="" onchange="checkPasswords()" required="required"/><br />
					<label>确认密码</label><input type="password" name="confirm" id="confirm" value="" onchange="checkPasswords()" required="required"/><br />
					<label>长号</label><input type="tel" name="longnum" id="longnum" value="" required="required" onchange="checkLNum()" maxlength="11"/><br />
					<label>短号</label><input type="text" name="shortnum" id="shortnum" value="" maxlength="6" onchange="checkSNum()"/><br />
					<input type="submit" value="注册"/>
				</form>
		</center>
	</body>
</html>
