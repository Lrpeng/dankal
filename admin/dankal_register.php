<?php
/*
 * http://localhost/dankal/dankal.php?option = xxx;
 * 1: 发送验证码
 * 2: 检测验证码
 * 3: 提交表单信息 
 * 
 * longnum： 前台输入的电话号码
 * code: 前台输入的验证码
 * username：前台输入的用户名
 * password：前台输入的密码
 * confirm：前台输入的确认密码
 */
 	require_once '../include.php';
	
	$option = $_GET['option'];
	$longnum	 = $_POST['longnum'];
	
	if($longnum != null){
		$sql = "select * from account where longnum = {$longnum}";
		if (fetchOne($sql)) {
			echo "exist"; //该电话号码已被注册
		}
		if($option  == '1'){
			$api = new api();
			$api -> message($longnum);	
			echo "success";		
		}else if($option == '2'){
			$code = $_POST['code']；
			$code1 = $_SESSION['code'];
			if($code == $code1){
				echo "true";
			}else{
				echo "false";
			}
		}else if($option == '3'){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$confirm =	$_POST['confirm'];
			if($password == $confirm){
				$array = array("username" => $_POST['username'],"password"=>md5($_POST['password']),"head" => "default.png","longnum" => $longnum );
				$table = "account";
				if(insert($table, $array)){
					echo "success";
				}
			}else{
				echo "false";
			}
			
		}
	}
?>