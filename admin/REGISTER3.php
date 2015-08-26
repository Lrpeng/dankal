<?php
/*
 * post数据：用户名="username"，密码="password" ， 确认密码="confirm" ， 短号="shortnum"
 * 数据返回：
 * 长号传输失败：Could not fetch long number
 * 用户名传输失败：Could not fetch long username
 * 密码传输失败：Could not fetch confirm password
 * 确认密码传输失败：Could not fetch password
 * 密码与确认密码不对应：Password and confirm password is not match
 * 未知错误：Unknow error
 *
 */
include_once "../include.php";
$flag = 0;
if (isset($_COOKIE['longnum'])) {
	$longnum = $_COOKIE['longnum'];
} else {
	$flag = 1;
}
if (isset($_POST['username'])) {
	$username = $_POST['username'];
} else {
	$flag = 2;
}

if (isset($_POST['password'])) {

	$password = $_POST['password'];
	if (isset($_POST['confirm'])) {

		$confirm = $_POST['confirm'];

		if ($password != $confirm) {
			$flag = 3;
		}
	} else {
		$flag = 4;
	}
} else {
	$flag = 5;
}

if (isset($_POST['shortnum'])) {
	$shortnum = $_POST['shortnum'];
}

if ($flag == 0) {

	if (isset($shortnum)) {
		$array = array("username" => $username, "password" => md5($password), "head" => "default.png", "longnum" => $longnum, "shortnum" => $shortnum);
	} else {
		$array = array("username" => $username, "password" => md5($password), "head" => "default.png", "longnum" => $longnum);
	}
	$table = "account";
	if (insert($table, $array)) {
		echo "Register Success";
	} else {
		echo "Register Fault";
	}

} else {
	switch ($flag) {
		case 1 :
			echo "Could not fetch longnum";
			break;
		case 2 :
			echo "Could not fetch username";
			break;
		case 3 :
			echo "Password and confirm password is not match";
			break;
		case 4 :
			echo "Could not fetch confirm password";
			break;
		case 5 :
			echo "Could not fetch password";
			break;
		default :
			echo "Unknow error";
			break;
	}
}
?>