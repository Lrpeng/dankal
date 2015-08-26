<?php
/*
 * 登录用接口
 * post数据有两个：账号为"longnum" 密码为"password"
 * 登录成功;返回success
 * 账号不存在：the account not exist
 * 密码错误：the password is error
 * 提交失败：post is null
 */
require_once '../include.php';
if (!empty($_POST['longnum']) && !empty($_POST['password'])) {
	$longnum = $_POST['longnum'];
	$password = md5($_POST['password']);
	$sql_longnum = "select * from account where longnum ='{$longnum}'";
	$sql = "select * from account where longnum ='{$longnum}' and password ='{$password}'";
	if (checkUser($sql_longnum)) {
		$row = checkUser($sql);
		if ($row) {
			$_SESSION['username'] = $row['username'];
			$_SESSION['account_id'] = $row['account_id'];
			echo "success";
		} else {
			echo "the password is error";
		}
	} else {
		echo "the account not exist";
	}

} else {
	echo "post is null";
}
?>