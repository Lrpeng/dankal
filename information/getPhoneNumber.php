<?php
require_once '../include.php';
if (!empty($_POST['longnum'])) {
	$usernum = $_POST['longnum'];
	$numberArray = array();
	$phonebook_one = array();
	$phonebook_all = array();
	$jsonArray = array();
	$sql_contacts = "SELECT * FROM contacts where longnum ='{$usernum}'";
	$user_arr = fetchOne($sql_contacts);
	if ($user_arr != null) {
		$user_pb = $user_arr['phonebook_id'];
		$sql_phonebook = "SELECT * FROM phonebook where phonebook_id REGEXP '{$user_pb}'";
		$phonebook_arr = fetchAll($sql_phonebook);
		foreach ($phonebook_arr as $key => $value) {
			$sql_contacts = "SELECT * FROM contacts where phonebook_id REGEXP '{$value['phonebook_id']}'";
			$contacts_arr = fetchAll($sql_contacts);
			$contacts_print = array();
			foreach ($contacts_arr as $key_contacts => $value_contacts) {
				$temp_arr = array();
				$temp_arr['name'] = $value_contacts['name'];
				$temp_arr['longnum'] = $value_contacts['longnum'];
				$temp_arr['shortnum'] = $value_contacts['shortnum'];
				array_push($contacts_print, $temp_arr);
			}


			$phonebook_one['book_id'] = $value['phonebook_id'];
			$phonebook_one['book_version'] = $value['phonebook_version'];
			$phonebook_one['book_name'] = $value['name'];
			$phonebook_one['book_intr'] = $value['intr'];
			$phonebook_one['book_logo'] = $value['logo'];
			$phonebook_one['content'] = $contacts_print;
			array_push($phonebook_all, $phonebook_one);
		}
		$jsonArray['book'] = $phonebook_all;
		echo json_encode($jsonArray);
	} else {
		echo "账号不存在";
	}

} else {
	echo "提交是失败";
}
?>