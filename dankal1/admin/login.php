<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dankal_login</title>
	</head>
	<link rel="stylesheet" type="text/css" href="../styles/style.css"/>
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript">
		function reloadCode () {
			var time = new Date().getTime();
		 	$(".verify").attr("src","getVerify.php?d="+time);	
		}
	</script>
	<body>
		<center>
				<form action="doLogin.php" method="post">
					<label>手机号码</label><input type="text" name="longnum" id="longnum" value=""  required="required"/><br />
					<label>密码</label><input type="password" name="password" id="password" value="" required="required"/><br />
					<label>验证码</label><input type="text" name="verify" id="verify" value="" required="required"/><br />
					<img src="getVerify.php" alt="verify" class="verify" onclick="reloadCode()"/><br />
					<input type="checkbox" name="autoFlag" id="autoFlag"/><label>记住我</label>
					<input type="submit" value="登录"/>
				</form>
		</center>
	</body>
</html>
