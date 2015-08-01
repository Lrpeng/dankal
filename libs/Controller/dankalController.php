<?php	
		header("Content-type:text/html;charset=utf-8");
		require_once('../Model/dankalModel.php');
		
		if(mysql_connect('localhost','root','')){
			echo "数据库连接成功";
		}else{
			echo "数据库连接失败";
		}
		mysql_select_db('dankal');
		mysql_query("set names 'utf8'");
		
 		if(!(isset($_POST['username'])&&(!empty($_POST['username'])))){
 			echo "<script>alert('什么都没获取到');window.location.href='../index.php';</script>";
 		}	
 		
 		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$longnum = trim($_POST['longnum']);
		$shortnum = trim($_POST['shortnum']);
		
		$sql = "insert into account( username , password , head , longnum , shortnum) values('$username','$password','none','$longnum','$shortnum')";
 
   		mysql_query( $sql );
		
		echo "注册成功";
		
		$uid = mysql_insert_id();
		echo $uid;
		
?>