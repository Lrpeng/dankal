<?php
	require_once '../include.php';
	if(!empty($_GET['logo'])){
	$logo = '../logo/'.$_GET['logo'];
	echo '<img src="'.$logo.'">';	
	}else{
		echo "not name";
	}
	
	
	?>