<?php
	header("content-type:text/html;charset=utf-8");
	date_default_timezone_set("PRC");
	session_start();
	define("ROOT",dirname(__FILE__));
	set_include_path(".".PATH_SEPARATOR.ROOT."/libs".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/configs".PATH_SEPARATOR.get_include_path());
	require_once 'mysql.func.php';
	require_once 'image.func.php';
	require_once 'string.func.php';
	require_once 'configs.php';
	require_once 'admin.inc.php';
	require_once 'common.func.php';
	connect();
?>