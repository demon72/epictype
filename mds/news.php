<?php
/*error_reporting(7);
ini_set('display_errors', 1);*/
if(empty($pg)){
$ov=$db->query('select url,title from video where act=1 order by rand() desc limit 5');
	$pv=$db->query('select * from playlist where act=1 order by rand() limit 5');
	$on=$db->query('select id,preview,title,t_add from news where act=1 and id!='.$pg.' and t_add <= NOW()+INTERVAL 1 DAY order by rand() limit 5');
}else{
	$ov=$db->query('select url,title from video where act=1 order by rand() desc limit 3');
	$pv=$db->query('select * from playlist where act=1 order by rand() limit 3');
	$on=$db->query('select id,preview,title,t_add from news where act=1 and id!='.$pg.' and t_add <= NOW()+INTERVAL 1 DAY order by rand() limit 3');
}
$s->assign('ov',$ov);
$s->assign('pv',$pv);
$s->assign('on',$on);
if(empty($pg)){
	$ss=$get['search'];
	if(!empty($ss)){
		$search=' and lower(title) like \'%'.strtolower($ss).'%\' or lower(preview) like \'%'.strtolower($ss).'%\'';
	}
	$limit=15;
	$perpage=$limit; // Количество отображаемых данных из БД
	if (empty($_GET['pages']) || ($_GET['pages'] <= 0)) {
		$page = 1;
	}else{
		$page = (int) $_GET['pages']; // Считывание текущей страницы
	}
	$right=$page+1;
	$count=$db->query('select count(*) as count from news where act=1 '.$search);
	$pages_count = trim(ceil($count[0]['count'] / $perpage));
	if ($page > $pages_count){
		$page = trim($pages_count);
	}
	$start_pos = trim(($page - 1) * $perpage);
	if($page>1){$left=trim($page-1);}
	if($right>$pages_count){$right=null;}
	$offset=trim(($limit*$page)-$limit);
	$pager=pager($page, $count, $pages_count, 8);
	$s->assign('page',$pager);		
	if($row=$db->query('select * from news where t_add<now() and act=1 '.$search.' order by t_add desc limit '.trim($limit).' offset '.trim($offset))){
	}else{
		$search='/search?searchid=2179486&text='.$_GET['search'];
		header('Location: '.$search);
	}
	$s->assign('row',$row);
}
if(preg_match('/([0-9]+)/',$pg,$o)){
	$db->update('news','view=view+1','id='.ceil($pg));
	$row=$db->query('select * from news where id='.ceil($pg));
	$row=$row[0];
	if(!empty($row)){
	$v['title']=$row['title'];
	$v['h1']=$row['title'];
	$s->assign('v',$v);
	$seo['description']=strip_tags(str_replace('&nbsp;',' ',$row['preview']));
	$seo['title']=strip_tags(str_replace('&nbsp;',' ',$row['title']));
	$s->assign('row',$row);
	}else{
		header('HTTP/1.0 404 Not Found');
		readfile('404.html');
		exit();
	}
}
if(!empty($pg) && !preg_match('/([0-9]+)/',$pg,$o)){
	header('HTTP/1.0 404 Not Found');
	readfile('404.html');
	exit();
}
?>