<?php
require_once 'reader.php';
 
// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();
 
// Set output Encoding.
$data->setOutputEncoding('gbk');
 
//”data.xls”是指要导入到mysql中的excel文件
$data->read('jxlrwtest.xls');
 
@ $db = mysql_connect('localhost', 'root', '') or
       die("Could not connect to database.");//连接数据库
mysql_query("set names 'gbk'");//输出中文
mysql_select_db('luo');       //选择数据库
error_reporting(E_ALL ^ E_NOTICE);
 
for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
//以下注释的for循环打印excel表数据

 for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
            echo "	".$data->sheets[0]['cells'][$i][$j]."";
           }
           echo '<br/>';

//以下代码是将excel表数据【3个字段】插入到mysql中，根据你的excel表字段的多少，改写以下代码吧！
    $sql = "INSERT INTO hulian VALUES('".
               $data->sheets[0]['cells'][$i][1]."','".
                 $data->sheets[0]['cells'][$i][2]."','".
                 $data->sheets[0]['cells'][$i][3]."')";
    echo $sql.'<br />';
//     $res = mysql_query($sql);
}
 
?>