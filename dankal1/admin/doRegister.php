<?php
 	require_once '../include.php';
	$array = array("username" => $_POST['username'],"password"=>$_POST['password'],"head" => "default.png","longnum" => $_POST['longnum'],"shortnum"=>$_POST['shortnum'] );
	$table = "account";
	$code1 = $_SESSION['code'];
	//判断短信验证码
	if($code1 == $_POST['code']){ 
		if(insert($table, $array)){
			$mes = "注册成功！<br/>";
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
	 	}else{
			alertMes("注册失败","register.php");
		}
	}
	echo $mes;
	
	
?>