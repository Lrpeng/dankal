<?php
/*
 * 生成验证码
 */
function buildRandomString( $type = 1 , $length = 4){
 	if($type == 1){
 		$chars = join("", range(0,9));
 	}elseif($type == 2){
 		$chars = join("",array_merge( range("a","z"),range("A","Z") ) );
 	}elseif($type == 3){
 		$chars = join("", array_merge( range("a", "z") , range("A", "Z") , range(0, 9)));
 	}
	if ( $length > strlen($chars)){
		exit ("字符串长度不够");
	}
	//打乱字符串
	$chars = str_shuffle( $chars ); 
	return substr($chars, 0 , $length);
 }

/*
 * 生成唯一字符串
 */
 function getUniName(){
 	return md5(uniqid(microtime(true),true));
 }
 
 /*
  * 得到文件的拓展名
  */
 function getExt($filename){
 	return strtolower(end(explode(".", $filename)));
 }
?>