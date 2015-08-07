<!DOCTYPE html>
<?php
//进入页面删除session
	session_start();
	session_destroy();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dankal_register</title>
	</head>
	<link rel="stylesheet" type="text/css" href="../styles/style.css"/>
	<script src="../js/register.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/jquery-1.11.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
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
	</script>
	<body>
		<center>
				<form action="doRegister.php" method="post" id="regform">
					<label>用户名</label><input type="text" name="username" id="username" value="" onchange="checklength()" required="required"/><br />
					<label>密码</label><input type="password" name="password" id="password" value="" onchange="checkPasswords()" required="required"/><br />
					<label>确认密码</label><input type="password" name="confirm" id="confirm" value="" onchange="checkPasswords()" required="required"/><br />
					<label>长号</label><input type="tel" name="longnum" id="longnum" value="" required="required" onchange="checkLNum()" maxlength="11" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"/><br />
					<label>短号</label><input type="text" name="shortnum" id="shortnum" value="" maxlength="6" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br />
					<label>短信验证码</label><input type="text" name="code" id="code" value="" maxlength="6" required="required"/><button onclick="sendMessage()" type="button">发送验证码</button><br />
					<button onclick="checkCode()" type="button">注册</button>
				</form>
		</center>
	</body>
</html>
