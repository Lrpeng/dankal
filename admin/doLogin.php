<?php
	require_once '../include.php';
	$longnum = $_POST['longnum'];
	//addslashes() 函数返回在预定义字符之前添加反斜杠的字符串。
	$longnum	 = addslashes($longnum);
	$password = $_POST['password'];
	$verify = $_POST['verify'];
	$verify1 = $_SESSION['verify'];
	if(isset($_POST['autoFlag'])){
		$autoFlag = $_POST['autoFlag'];
	}
	if($verify == $verify1){
		$sql = "select * from account where longnum ='{$longnum}' and password ='{$password}'";
		$row = checkUser($sql);
		if($row){
			//如果选了一周内自动登录
			if(isset($_POST['autoFlag'])){
				setcookie("username",$row['username'],time()+7*24*3600);
				setcookie("account_id",$row['account_id'],time()+7*24*3600);
			}
			$_SESSION['username'] = $row['username'];
			$_SESSION['account_id'] = $row['account_id'];
			alertMes("登录成功","../login_success.php");
		}else{
			alertMes("登录失败，重新登录","login.php");
		}
	}else{
		alertMes("验证码错误","login.php");
	}
	
?>