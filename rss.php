<?php
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="utf-8"?>';
require_once('./cfg/cfg.php');
require_once('./cfg/function/function.php');
require_once('./cfg/class/db.php');
error_reporting(0);
$db=new db;
if ($_GET['table']=='news'){
	$row=$db->query('select * from news where 1=1 order by t_add desc limit 10');	
	//$row=$db->query('select * from news where 1=1 order by t_add desc limit 10');	
	//print_r($row);
	$rss='<rss version="2.0">';
	$rss.='<channel>';
	$rss.='<title>Новости — Игровой канал Epic Type</title>';
	$rss.='<description>Игровые новости.</description>';
	$rss.='<link>http://epictype.ru/news/</link>';
	$rss.='<image>';
	$rss.='<url>http://epictype.ru/img/et.png</url>';
	$rss.='<title>Игровой канал Epic Type</title>';
	$rss.='<link>http://epictype.ru/</link>';
	$rss.='</image>';
	foreach($row as $r){
		$description=$r['preview'].strip_tags($r['text']);
		$rss.='<item>';
		$rss.='<title>'.$r['title'].'</title>';
		$rss.='<description><![CDATA['.strip_tags(str_replace(array('&nbsp;','&laquo;','&raquo;','&mdash;','&rsquo;','&ndash;','<p>',"\n"),array(' ','«','»','-','»','–','',''),$description)).']]></description>';
		$rss.='<link>http://epictype.ru/news/'.$r['id'].'</link>';
		$rss.='<pubDate>'.date('r',strtotime($r['t_add'])).'</pubDate>';
		$rss.='<category>Игровые новости</category>';
		$rss.='</item>';
		unset($description);
	}
	$rss.='</channel>';
	$rss.='</rss>';
	echo $rss;
}
?>
