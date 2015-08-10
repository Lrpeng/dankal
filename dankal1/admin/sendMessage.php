<?
	require_once "../include.php";
	
	if(isset($_GET['code']) == FALSE){
		$longnum=$_POST['longnum'];
//		$_SESSION['test'] = "ある";
		$api = new api();
		$api -> message($longnum);
		//测试
	    $info = array('code' => $_SESSION['code']);
	    $codeinfo = json_encode($info);
	    echo $codeinfo;
	}else{
		//判断是否存在session['code'],有则证明已经获取了验证码
		$code = isset($_SESSION['code']) ? $_SESSION['code'] : null;
		//如果有获取验证码
		if($code != null){
			//验证码转换为json字符串	
			$info = array('code' => $code);
			$codeinfo = json_encode($info);
			echo $codeinfo;
		//没有获取验证码，返回json字符串none
		}else{
			$info = array('code' => 'none');
			$codeinfo = json_encode($info);
			echo $codeinfo;
		}
	}
?>