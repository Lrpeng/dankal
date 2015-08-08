<?php
 	require_once '../include.php';
	$longnum = $_POST['longnum']; 
	$array = array("username" => $_POST['username'],"password"=>md5($_POST['password']),"head" => "default.png","longnum" => $_POST['longnum'],"shortnum"=>$_POST['shortnum'] );
	$table = "account";
	$code1 = $_SESSION['code'];
	$sql = "select * from account where longnum = {$longnum}";
	if(fetchOne($sql)){
		alertMes("该手机号已被注册", "register.php");
	}
	//判断短信验证码
	if($code1 == $_POST['code']){ 
		if(insert($table, $array)){
			$mes = "注册成功！ <a href = 'login.php'>去登录</a><br/>";
			$sql = "select * from account where longnum ='{$longnum}'";
			$row = checkUser($sql);
			$_SESSION['account_id'] = $row['account_id'];
			$_SESSION['username'] = $_POST['username'];
	 	}else{
			alertMes("注册失败","register.php");
		}
	}
	echo $mes;
	
	
?>