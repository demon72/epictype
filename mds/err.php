<?php
if($nm == 'townypl'){
	$s->assign('nmm','townypl');
}
if($nm == 'donatserv'){
	$s->assign('nmm','donatserv');
}
	if($content=$db->query('select * from contents where url=\''.$nm.'\'')){

		$content=$content[0];
		/*$seo['title']=$content['title'];
		$seo['h1']=$content['title'];
		$s->assign('seo',$seo);*/
		$s->assign('content',$content);
	}else{
		/*$error='404 Не найдено';
		$s->assign('error',$error);*/
		header('HTTP/1.0 404 Not Found');
		readfile('404.html');
		exit();
	}
?>