<?php
	header("Content-type:text/html;charset=utf-8");
	class dankalModel{
		function conn(){
				$dbname = "dankal";
				if($connID  = mysql_connect('localhost','root','')){
					echo "连接成功";
				}	else{
					echo "连接失败";
				}
				mysql_select_db($dbname,$connID);
		}
		function insert(){
			conn();
			mysql_query($query);
		}
	
	}
?>