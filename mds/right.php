<?php 
if($pg!='main'){
	$playlist=$db->query('select id,url,title,logo,text from playlist where act=1 ORDER BY RAND() limit 1');
	$s->assign('playlist',$playlist[0]);
	$video=$db->query('select id,url,title from video where act=1 ORDER BY RAND() limit 1');
	$s->assign('vv',$video[0]);
	$news=$db->query('select id,preview,title from news where act=1 ORDER BY RAND() limit 1');
	$s->assign('news',$news[0]);
}
?>