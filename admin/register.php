<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dankal_register</title>
	</head>
	<link rel="stylesheet" type="text/css" href="../styles/style.css"/>
	<script src="../js/register.js" type="text/javascript" charset="utf-8"></script>
	
	<body>
		<center>
				<form action="doRegister.php" method="post">
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
