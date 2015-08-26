<?php
/*@api 创蓝php对接短信接口
*
*/
 require_once "../include.php";
class api {
  function message($longnum)
  {
  		setcookie($longnum,"123", time()+180);

//     //1.设置短信验证码
//        $code=rand(100000,999999);
//		  $_SESSION['code'] = $code;
//        $data ="亲，欢迎使用Dankal ，您的注册验证码是: " . $code . " 打死也不要告诉别人哟(⊙v⊙)b";
//     //2.发送短信
//        $post_data = array();
//        $post_data['account'] = 'jiekou-clcs-06';//测试账号，联系业务员获取
//        $post_data['pswd'] = 'Tch147369';//测试账号密码
//        $post_data['mobile'] ="$longnum";//测试使用手机号码
//        $post_data['needstatus']="true";
//  
//
//        $post_data['msg']=mb_convert_encoding($data,'UTF-8', 'UTF-8');
//        $url='http://222.73.117.158/msg/HttpBatchSendSM?'; 
//        $o="";
//        foreach ($post_data as $k=>$v)
//        {
//        $o.= "$k=".urlencode($v)."&";
//        }
//       $post_data=substr($o,0,-1);
// 
//       $ch = curl_init();
//
//       curl_setopt($ch, CURLOPT_POST, 1);
//       curl_setopt($ch, CURLOPT_HEADER, 0);
//       curl_setopt($ch, CURLOPT_URL,$url);
//       curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//屏蔽界面输出
//       $result = curl_exec($ch);
//       echo $result;
  }

}

?>