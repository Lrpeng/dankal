<?php	
		header("Content-type:text/html;charset=utf-8");
		require_once('../Model/dankalModel.php');
		
		mysql_connect('localhost','root','');
		mysql_select_db('dankal');
		mysql_query("set names 'utf8'");
		
 		if(!(isset($_POST['username'])&&(!empty($_POST['username'])))){
 			echo "<script>alert('什么都没获取到');window.location.href='../index.php';</script>";
 		}	
 		
 		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$longnum = trim($_POST['longnum']);
		$shortnum = trim($_POST['shortnum']);
		
		echo $username; 
		
		$sql = "insert into account( username , password , head , longnum , shortnum) values('$username','$password','none','$longnum','$shortnum')";
 
   		mysql_query( $sql );
		
		$uid = mysql_insert_id();
		echo $uid;
		
		/*mysql_connect('localhost', 'root', '');
		mysql_select_db('dankal');
		mysql_query("set names 'utf8'");
		//已知的数据变量有
		$name = '李sssss四';
		$age = 'sd';
		//在这里进行数据查询
		$sql = "insert into test(a, b) values('$name', '$age')";
		mysql_query($sql); //执行插入语句
		$uid = mysql_insert_id();
		echo $uid;*/
		
		
?>