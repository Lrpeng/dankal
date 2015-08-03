<?php
 	require_once '../include.php';
	$array = array("username" => $_POST['username'],"password"=>$_POST['password'],"head" => "default.png","longnum" => $_POST['longnum'],"shortnum"=>$_POST['shortnum'] );
	$table = "account";
	if(insert($table, $array)){
		$mes = "注册成功！<br/>";
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
 	}else{
		$mes = "注册失败! <br/>";
	}
	echo $mes;
	
	
?>