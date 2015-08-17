<?php
/*
 * 登录用接口
 */
 	require_once '../include.php';
	
	$longnum	 = $_POST['longnum'];
	$password = md5($_POST['password']);
	
	$sql = "select * from account where longnum ='{$longnum}' and password ='{$password}'";
	$row = checkUser($sql);
	if($row){
		$_SESSION['username'] = $row['username'];
		$_SESSION['account_id'] = $row['account_id'];
		echo "success";
	}else{
		echo "false";
	}
	
?>