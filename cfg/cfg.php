<?php
	require_once('Smarty.class.php');
	
	$s = new Smarty;
	//$s->compile_check = false; //!!!! - после запуска поставить false
	$s->compile_check = true; //!!!! - после запуска поставить false
	$s->template_dir = '././tmp/';
	$s->compile_dir = '././tmp_c/';
	$s->cache_dir = '././cch/';
	/*way*/

	/*if(isset($_GET['module']) && !empty($_GET['module'])) {$nm=$_GET['module']; $s->assign('nm',$nm);}*/
	if(isset($_GET['page']) && !empty($_GET['page'])) {$pg=str_replace(array('.php','.tpl'),'',$_GET['page']); $s->assign('pg',$pg);}
	if(isset($_GET['subpage']) && !empty($_GET['subpage'])) {$sp=str_replace(array('.php','.tpl'),'',$_GET['subpage']); $s->assign('sp',$sp);}
	if(isset($_GET['subpage1']) && !empty($_GET['subpage1'])) {$sp1=str_replace(array('.php','.tpl'),'',$_GET['subpage1']); $s->assign('sp1',$sp1);}
	if(isset($_GET['subpage2']) && !empty($_GET['subpage2'])) {$sp2=str_replace(array('.php','.tpl'),'',$_GET['subpage2']);	$s->assign('sp2',$sp2);}
	if(isset($_GET['subpage3']) && !empty($_GET['subpage3'])) {$sp3=str_replace(array('.php','.tpl'),'',$_GET['subpage3']);	$s->assign('sp3',$sp3);}
?>