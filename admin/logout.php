<?php
	require_once '../include.php';
	session_destroy();
	setcookie("username","",time()-1);
	setcookie("account_id","",time()-1);	
	echo "<script>window.location.href='login.php';</script>";
?>
