<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>
			Insert title here
		</title>
	</head>
	<body>
		<center>
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<label>电话本名</label>
				<input type="text" name="bookName" id="longnum" value=""  required="required"/>
				<br />
				<label style="    float: left;
				margin-left: 305px;
				margin-right: 0px;">简介</label>					<textarea name="intr" style="height: 5em;border-radius: 3px;width: 50%;max-width: 100%;
    				padding: 0.5em;
  				margin-bottom: 16px;
				font-weight: normal;
				color: #555;
				font-size: 1em;
				border: 2px solid #ddd;
 				-webkit-font-smoothing: antialiased;
				-webkit-appearance: none;
				-webkit-transition: border-color 0.25s, color 0.25s;
				transition: border-color 0.25s, color 0.25s;"></textarea>
<br />
				请选择你要上传的logo：
				<input type="file" name="myLogo" accept="image/jpeg,image/gif,image/png"/>
				<br />
				请选择你要上传的excel文件：
				<input type="file" name="myExcel" accept="application/msexcel"/>
				<input type="submit" value="上传信息" />
				<br />
			</form>
		</center>
	</body>
</html>
<?php
header('content-type:text/html;charset=utf-8');
require_once '../libs/upload.class.php';
require_once '../libs/upload_img.class.php';
require_once '../include.php';
if (!empty($_POST["bookName"])) {
	//上传logo
	$uploadimg = new upload_img("myLogo", "../logo");
	$destexcel_img = $uploadimg -> uploadFile();
	//	echo $destexcel_img;
	//录入电话簿数据库
	$phonebook = array("name" => $_POST["bookName"], "intr" => $_POST["intr"], 'logo' => $destexcel_img);
	insert('phonebook', $phonebook);
	//	$sql = "INSERT INTO phonebook (name,intr,logo) VALUES('".$_POST["bookName"]."','".$_POST["intr"]."','".$destexcel_img."')";
	//	  echo $sql.'<br />';
	//     $res = mysql_query($sql);
	//上传excel表并解析
	$uploadexcel = new upload('myExcel', '../excels', '5242880', array('xlsx', 'xls'));
	$destexcel = $uploadexcel -> uploadFile(mysql_insert_id());
	//	echo $destexcel;
}
?>