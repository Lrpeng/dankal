<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>
			Insert title here
		</title>
	</head>
	<body>
		<center>
			<form action="../admin/REGISTER3.php" method="post" enctype="multipart/form-data">
				<label>用户名</label><input type="text" name="username" id="username" value="" onchange="checklength()" required="required"/><br />
					<label>密码</label><input type="password" name="password" id="password" value="" onchange="checkPasswords()" required="required"/><br />
					<label>确认密码</label><input type="password" name="confirm" id="confirm" value="" onchange="checkPasswords()" required="required"/><br />
					<label>短号</label><input type="text" name="shortnum" id="shortnum" value="" maxlength="6" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br />
				<input type="submit" value="提交" />
				<br />
			</form>
		</center>
	</body>
</html>