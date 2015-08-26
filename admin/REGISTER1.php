<?php
/*
 * post数据：长号="longnum"
 * 数据返回：
 * 长号传输失败：Could not fetch long number
 * 输入的不是数字：Please input a numberic string
 * 电话号码已被注册：The phone number has already exist
 */
include_once "../include.php";

//删除session
session_destroy();

//获取长号
if (isset($_POST['longnum'])) {

	//判断是否为数字
	if (is_numeric($_POST['longnum'])) {
		$longnum = $_POST['longnum'];
		setcookie('longnum', $longnum, time() + 180);
		//判断长号是否被注册过
		$sql = "select * from account where longnum = {$longnum}";
		if (fetchOne($sql)) {
			echo "The phone number has already exist";
			//该电话号码已被注册
		} else {
			$api = new api();
			$api -> message($longnum);
			echo "Send success";
			//				header("refresh:2;url=testRegister2.php");

		}

	} else {

		echo "Please input a numberic string";

	}
} else {

	$longnum = null;
	echo "Could not fetch long number";
	//获取不到长号

}

// 发送验证码  123
?>