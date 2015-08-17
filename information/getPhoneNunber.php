<?php
require_once '../include.php';

$response = array();
$jsonArray = array();
$sql = "SELECT * FROM contacts";
$row = fetchAll($sql);
	$numberArray = array();	
	
//	foreach ($row as $key => $value) {
//		$array = array();
//		foreach ($value as $key1 => $value) {
////			var_dump($value);
//		
//		$array[$key1] = $value;
//		}
//		$numberArray[] = $array;
//	}
//	var_dump($numberArray);
//	while (= fetchAll($sql)) {
//		$array = array();
//		$array['name'] = $row[3];
//		$array['phonenumber'] = $row[4];
//		$array['shortnumber'] = $row[5];
//		$numberArray[] = $array;
//	}
	$jsonArray['13移动互联3-2班'] = $row;

	//	foreach  ($jsonArray as $key1 => $value) {
	//		foreach ($value as $key2 => $value1) {
	//			foreach ($value1 as $key3 => $value2) {
	//
	//			}
	//		}
	//		}
//		echo urldecode(json_encode($jsonArray));	
	echo json_encode($jsonArray);
//}
?>