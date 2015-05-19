<?php
header('Content-Type: text/html; charset=utf-8');
//error_reporting(7);
//ini_set("display_errors", 1);
function getmicrotime(){ 
	list($usec, $sec) = explode(" ",microtime()); 
	return ((float)$usec + (float)$sec); 
}
preg_match('#https:(.*)#',$_GET['v'],$o);
if(isset($o[1])){
	header("Location: ".$o[0]);
}preg_match('#http:(.*)#',$_GET['v'],$o);
if(isset($o[1])){
	header("Location: ".$o[0]);
}
preg_match('#https:(.*)#',$_GET['p'],$o);
if(isset($o[1])){
	header("Location: ".$o[0]);
}preg_match('#http:(.*)#',$_GET['p'],$o);
if(isset($o[1])){
	header("Location: ".$o[0]);
}


$memory = array();
$memory['time_start'] = getmicrotime();
$memory['start'] = memory_get_usage();
$nm=$_GET['module'];
require_once('./cfg/cfg.php');
//if($nm=='feedback' || $nm=='video'){
require_once('./cfg/function/function.php');
require_once('./cfg/class/db.php');

$db=new db;
$getArr=array('search'=>'search','p'=>'p','v'=>'v','pages'=>'pages','rand'=>'rand','key'=>'key','searchid'=>'searchid','text'=>'text','web'=>'web','status'=>'status');
$get=get();
foreach($get as $k=>$val){
	if(!$getArr[$k]){
		header('HTTP/1.0 404 Not Found');
		readfile('404.html');
		exit();
	}
}
$ads=rand(1,2);
$s->assign('ads',$ads);

if(isset($_COOKIE['ssn']) && !empty($_COOKIE['ssn'])){
$auth=$db->query('select a.user_id, u.login from et_auth as a, et_user as u where a.hash=\''.$_COOKIE['ssn'].'\' and a.act=1');
$ssn['uid']=$auth[0]['user_id'];
$ssn['login']=$auth[0]['login'];
$s->assign('ssn',$ssn);	
$u='epictype.ru';
}
$pages=$_GET['pages'];
if(empty($nm) && !$pg){
	$nm='video';
	$pg='main';	
}
$arr=buffer();
/*$bread=array(
	'news'=>array(
		'title'=>'Новости',
		'url'=>'/news',
	),
	'video'=>array(
		'title'=>'Видео',
		'url'=>'/video',	
	),
);*/
//$breadcrumbs = array();
//echo date("Y-m-d H:i");
$s->assign('time',date("Y-m-d H:i"));
$seo=$db->query('select keyword,description,seo,h1,title,header,footer from seo where nm=\''.$nm.'\''.(!empty($pg)?' and pg=\''.$pg.'\'':''));
$seo=$seo[0];
//print_r($seo);
//if(empty($seo)){
	//тут выведны тестовые тексты. когда будешь править - закоментируй данную конструкцию.
	//$seo=array('description'=>'description','keywords'=>'keyword','seo'=>'какой-то сео текст. для веса страниц. думаю лишним не будет. макс длина 170 символов.');
	//$seo=array('description'=>'description','keywords'=>'keyword','seo'=>'');
//}
preg_match('#^http://(.*)/.*$#Uis',$_SERVER['HTTP_REFERER'],$o);
if($o[1]=='serfavto.ru' || $o[1]=='sh.dev'){
	$s->assign('metrika','false');
}
//print_r($o);
	
require_once('./mds/right.php');
if (file_exists('./mds/'.strtolower(basename($nm)).'.php'))
{	
	include './mds/'.strtolower(basename($nm)).'.php';
	$s->assign('pg',$pg);
	$s->assign('nm', $nm);
}else{
	include './mds/err.php';
	if (file_exists('/tmp'.$nm.'.tpl'))
		$s->assign('nm', $nm);
	else
		$s->assign('nm', 'err');
}
global $max;
if($pages>0 && (!empty($nm) || $nm!='main')){
	$p=($pg?'/'.$pg:'');
	$canon['url']=$nm.$p;
	if($pages>1){
		$prev=$pages-1;
		$canon['prev']=$canon['url'].'?pages='.$prev;
	}
	if($pages<$max){ 
		$next=$pages+1;
		$canon['next']=$canon['url'].'?pages='.$next;
	}
	$s->assign('canon',$canon);
}
$bread=bread($nm,$pg,$sp,$v['title']);
//print_r($seo);
$s->assign('seo',$seo);
$s->assign('bread',$bread);
//print_r($bread);
$about="Добро пожаловать на игровой канал EpicType. Только самые лучшие игры и интересные видео. Обзоры новинок, прохождения с упором на сюжет и атмосферу игры, консольные эксклюзивы на ps3 и ps4, а также различные кооперативные летсплеи. Свыше 1000 эпичных видеороликов на любой вкус. Здесь вам точно не будет скучно.
<br/><br/>Каждый день выходят по 2 новых видео.<br/><br/>Интернет кошельки канала:<br>
Яндекс Деньги: 410011529991006<br>
WebMoney (рубли): R784813277951<br>
WebMoney (гривны): U392107460042<br>
WebMoney (доллары): Z101098540601";	
$s->assign('about',$about);
//$s->display('index.tpl');
unset($nm);
	$unit=array('b','kb','mb','gb','tb','pb');
	$memory['stop'] = memory_get_usage();
	$memory['time_stop'] = getmicrotime();
	$memory['time'] = $memory['time_stop']-$memory['time_start'];
	$memory['memory_module'] = @round(($memory['stop_modules']-$memory['start_modules'])/pow(1024,($i=floor(log(($memory['stop_modules']-$memory['start_modules']),1024)))),2).' '.$unit[$i];
	$memory['memory_all'] = @round(($memory['stop']-$memory['start'])/pow(1024,($i=floor(log(($memory['stop']-$memory['start']),1024)))),2).' '.$unit[$i];
	$mem='<center>&nbsp;<span style="color:#000"> SQL: ' . $db->CountSQL .' Memory: '.$memory['memory_all'].' Time: '.$memory['time'].'</span></center>';
	//echo $mem;
	$s->assign('mem',$mem);
	echo stripslashes(str_replace(array("\t","\r","\n","  "),'', $s->fetch('index.tpl')));
	//echo stripslashes(str_replace(array(''),'', $s->fetch('index.tpl')));
?>