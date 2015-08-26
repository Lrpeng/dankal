<?php
/*
 * 验证码提交：http://192.168.199.118/dankal/admin/REGISTER2.php
 * post数据：验证码："code"
 *  数据返回：
 *  验证码传输失败：Could not fetch verification code
 *  验证码错误：Verification codes don't match
 *  验证码正确：Verification codes match
 */

require_once "../include.php";
if (isset($_POST['code'])) {
	$code = $_POST['code'];

	if (isset($_COOKIE['longnum'])) {
		$longnum = $_COOKIE['longnum'];
		if (isset($_COOKIE[$longnum])) {
			$code1 = $_COOKIE[$longnum];
			//判断验证码是否正确
			if ($code == $code1) {
				echo "Verification codes match";
				//				header("refresh:2;url=testRegister3.php");
			} else {
				echo "Verification codes don't match";
			}
		}
	}
} else {
	echo "Could not fetch verification code";
}
?>