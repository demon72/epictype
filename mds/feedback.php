<?php
$title='Обратная связь';

if (isset ($_POST['text'])) {
  //$arr['ip']=$_SERVER['REMOTE_ADDR'];
  /*$db->insert('feedback','fio,email,text,ip','\''.strip_tags($_POST['fio']).'\',\''.strip_tags($_POST['email']).'\',\''.$_POST['text'].'\',\''.$arr['ip'].'\'');
   unset($arr);*/
   
   //echo $message;
	$to  = "support@epictype.ru,valdai@epictype.ru" ; 
	//$to .= "Kelly &lt;kelly@example.com>"; 
	$subject = "Обратная связь"; 
	$message=strip_tags($_POST['text'])."\r\n\r\n --\r\nС уважением, ".strip_tags($_POST['fio']);
	$headers  = "Content-type: text/plain; charset=utf-8 \r\n"; 
	$headers .= "From: ".iconv( "utf-8", "windows-1251",$_POST['fio'])."<".$_POST['email'].">\nReply-To:".$_POST['email'];
	
	//$headers .= "Bcc: ".$_POST['email']."\r\n"; 
	mail($to, $subject, $message, $headers); 
	$s->assign('done','Ваше обращение отправлено. Мы свяжемся с Вами в ближайшее время.');
}
?>