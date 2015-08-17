<?php
require_once 'reader.php';
require_once '../include.php';
header('content-type:text/html;charset=utf-8');
class Entering {

	function reader_excel($destination, $phonebook_id) {
		// Set output Encoding.
		$data = new Spreadsheet_Excel_Reader();
		$data -> setOutputEncoding('utf-8');

		//”data.xls”是指要导入到mysql中的excel文件
		$data -> read($destination);
		echo $phonebook_id;
		echo '<br/>';
		echo "<table style='border-collapse:collapse;border-spacing:0;border:1px solid #000'>";
		for ($i = 2; $i <= $data -> sheets[0]['numRows']; $i++) {
			//以下注释的for循环打印excel表数据
			$array = array();
			$contacts_arr = array();
			echo "<tr  style='border:1px solid #000'>";
			for ($j = 1; $j <= 3; $j++) {
				if (empty($data -> sheets[0]['cells'][$i][$j])) {
					$array[$j - 1] = null;
					echo "<td style='border:1px solid #000'></td>";
				} else {
					$array[$j - 1] = $data -> sheets[0]['cells'][$i][$j];
					echo "<td style='border:1px solid #000'>" . $data -> sheets[0]['cells'][$i][$j] . "</td>";
				}	
			}
			echo '</tr>';
			var_dump($array);
			echo '<br/>';
			$sql_fetchlongnum = "SELECT * FROM contacts where longnum ='{$array[1]}'";
			$old_phonebook_id = fetchOne($sql_fetchlongnum)['phonebook_id'];
			if($old_phonebook_id){
				$new_phonebook_id = $old_phonebook_id.'|'.$phonebook_id;
				$contacts_arr = array('phonebook_id' => $new_phonebook_id);
				update('contacts', $contacts_arr,"longnum="."'$array[1]'");
			}else{
				$contacts_arr = array('phonebook_id' => $phonebook_id, 'name' => $array[0], 'longnum' => $array[1], 'shortnum' => $array[2]);
				echo insert('contacts', $contacts_arr);
			}
		}echo "</table>";
	}

}
