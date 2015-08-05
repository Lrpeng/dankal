<?php
	require_once 'include.php';
?>
<!DOCTYPE HTML>
<meta charset="UTF-8"/>
<html>
	<head>
		<title>登录成功</title>
	</head>
	<body>
		<p>欢迎您，<?php echo $_SESSION['username'];?></p>
	</body>
</html>