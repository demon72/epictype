<?php
$ts=0;
if($pg=='main'){
	$ts=1;
	if(!empty($_GET['pages'])){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: http://".$_SERVER['SERVER_NAME']."/video?pages=".$_GET['pages']);
		exit;
	}
	/*$seo['title']='Видео недели';
	$seo['h1']='Видео недели';*/
	if(!empty($_GET['search'])){
		$search='/search?searchid=2179486&text='.$_GET['search'];
		header('Location: '.$search);
	}
	$status='';
	$search='';
	$limit=14;
	$offset=0;
	$main=$db->query('select v.title, v.url from video as v, playlist as p  where v.pid=p.id and p.act=1  order by v.published desc limit 1');
	$main=$main[0];
	$s->assign('main',$main);
	//$row=$db->query('select v.published,v.title, v.url, v.content from video as v, playlist as p  where v.pid=p.id and p.act=1 '.$status.$search.' order by v.published desc limit '.$limit.' offset '.$offset);
	$row=$db->query('select published, title,url,content from video where 1=1 order by published desc limit '.$limit.' offset '.$offset);
	foreach($row as $k=>$v){
		preg_match('#\[(.*)\] (.*)#',$v['title'],$o);
		//print_r($o);
		$row[$k]['title']=(!empty($o[2])?$o[2]:$v['title']);
		preg_match('#(.*)\[(.*)\]#',$row[$k]['title'],$oo);
		$row[$k]['title']=(!empty($oo[1])?$oo[1]:$row[$k]['title']);
	}
	$s->assign('row',$row);
	$playlist=$db->query('select id,url,title,logo,text from playlist where act=1 and status=1 order by published desc');
	$s->assign('playlist',$playlist);
	//$s->assign('seo',$seo);
	$me=$db->select('title,text','contents','type=2 and act=1 and end_d>='.date('z').' and start_d<='.date('z'));
	$me=$me[0];
	$s->assign('me',$me);
}
if($pg=='watch'){
	$ts=1;
	//$search=$get('search');
	if(!empty($_GET['p']) && empty($_GET['v'])){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: http://".$_SERVER['SERVER_NAME']."/video/playlist?p=".$_GET['p']);
		exit;
	}
	if(!empty($_GET['search'])){
		$search='/search?searchid=2179486&text='.$_GET['search'];
		header("HTTP/1.1 301 Moved Permanently");
		header('Location: '.$search);
		exit;
	}
	//$v=$db->query('select v.id,v.title,v.content,v.pid,v.url from video as v, playlist as p  where v.pid=p.id and p.act=1  and v.url=\''.$get['v'].'\'');
	$v=$db->query('select id,title,content,pid,url from video where 1=1 and url=\''.$get['v'].'\'');
	$v=$v[0];
	if($_GET['v']=='-UcaQ3aft2E'){
		$comment=$db->query("select id,type,poster,poster_id,reply_to_user,message,posted from punbb_posts where nm='video' and oid=".$v['id']." order by posted desc");
		$i=0;
		foreach($comment as $com){
			$comment[$i]['posted']=date("d.m.y в H:i", $com['posted']);
			preg_match('#\[(.*)]#',$com['message'],$o);
			$com_reply_to=explode('|',$o[1]);
			$comment[$i]['message']=str_replace($o[0],'<a href="/forum/profile.php?id='.$com['reply_to_user'].'" class="com_user">'.$com_reply_to[1].'</a>',$com['message']);
			$i++;
		}
		unset($i);
		$s->assign('comment',$comment);
	}
	if(!empty($v)){
		$seo['description']=strip_tags(str_replace('&nbsp;',' ',$v['content']));
		$v['title']=strip_tags(str_replace('&nbsp;',' ',$v['title']));
		preg_match('#\[(.*)\] (.*)#',$v['title'],$o);
		$v['title']=(!empty($o[2])?$o[2]:$v['title']);
		preg_match('#(.*)\[(.*)\]#',$v['title'],$oo);
		$v['title']=(!empty($oo[1])?$oo[1]:$v['title']);
		$v['h1']=strip_tags(str_replace('&nbsp;',' ',$v['title']));
		
		$seo['img']='http://i1.ytimg.com/vi/'.$_GET['v'].'/mqdefault.jpg';
		$s->assign('v',$v);
		//$ov=$db->query('select v.published,v.title, v.url, v.content from video as v, playlist as p  where v.pid=p.id and v.id!='.$v['id'].' and v.act=1 and v.pid='.$v['pid'].' order by v.published desc limit 8');
		$ov=$db->query('select published,title, url, content from video where 1=1 and id!='.$v['id'].' and act=1 and pid='.$v['pid'].' order by published desc limit 8');
		preg_match('#\[(.*)\] (.*)#',$ov['title'],$o);
		
		$ov['title']=(!empty($o[2])?$o[2]:$ov['title']);
		preg_match('#(.*)\[(.*)\]#',$ov['title'],$oo);
		$ov['title']=(!empty($oo[1])?$oo[1]:$ov['title']);
		$s->assign('ov',$ov);
	}else{
		header('HTTP/1.0 404 Not Found');
		readfile('404.html');
		exit();
	}
	/*$seo['title']=$v['title'];
	$seo['h1']=$v['title'];
	$s->assign('seo',$seo);*/
	/*
	/(.*?). #(.*?): (.*?)./U -> [PS4] Daylight. #3: Побег из тюрьмы.
	/(.*?). Серия(.*?) - (.*?)./U -> Fallout 2. Серия 12 - Дыра.
	/(.*?). Серия(.*?): (.*?)./U -> [Coop & Friends] Minecraft 1.3.1. Серия 6: "В поисках приключений :)".
	/(.*?). №(.*?) - (.*?)./U -> Подкаст № 21 - Новости, планы и ответы на вопросы.
	/(.*?). ЧАСТЬ (.*?). (.*?)/U -> Coop let&#180;s play minecraft. ЧАСТЬ 1. "Начало"
	*/
}	
if(empty($pg)){
	$ts=1;
	if(!empty($_GET['fb_locale'])){
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: http://".$_SERVER['SERVER_NAME']."/video?pages=".$_GET['pages']);
	exit;
	}
	$ss=$get['search'];
		//echo $ss;
		if(!empty($ss)){
			$search=' and lower(v.title) like \'%'.strtolower($ss).'%\'';
		}
		$s->assign('ss',$ss);
		if(!isset($_GET['unlim'])){
		$limit=36;
		$perpage=$limit; // Количество отображаемых данных из БД
		if (empty($_GET['pages']) || ($_GET['pages'] <= 0)) {
			$page = 1;
		}else{
			$page = (int) $_GET['pages']; // Считывание текущей страницы
		}
		$status='';
		if($_GET['status']=='on' || $_GET['status']=='off'){
			if($_GET['status']=='on'){$status='and p.status=1';}
			if($_GET['status']=='off'){$status='and p.status=0';}
		}	
		else{
			$status='';
		}
		$right=$page+1;
		$count=$db->query('select count(*) as count from video as v, playlist as p where  v.pid=p.id and p.act=1  '.$status.$search);
		//print_r($count);
		$pages_count = ceil($count[0]['count'] / $perpage); // Количество страниц
		// Если номер страницы оказался больше количества страниц
		if ($page > $pages_count){
			$page = $pages_count;
		}
		$start_pos = ($page - 1) * $perpage; // Начальная позиция, для запроса к БД
		// Вызов функции, для вывода ссылок на экран
		if($page>1){$left=$page-1;}
		//echo $right.'=>'.$pages_count.'<br/>';
		if($right>$pages_count){$right=null;}
		//echo $right.'=>'.$pages_count;
		//$pager=$pager[1];
		$offset=($limit*$page)-$limit;
		$pager=pager($page, $count, $pages_count, 8);
		$s->assign('page',$pager);
		}		
		if(isset($_GET['unlim'])){
			$lim='';
		}else{		
			$lim='limit '.$limit.' offset '.$offset;
		}
		//if($row=$db->query('select v.title, v.url from video as v, playlist as p  where v.pid=p.id and p.act=1 '.$status.$search.' order by v.published desc '.$lim)){
		if($row=$db->query('select title, url from video where 1=1 '.$status.$search.' order by published desc '.$lim)){
			foreach($row as $k=>$v){
				preg_match('#\[(.*)\] (.*)#',$v['title'],$o);
				//print_r($o);
				$row[$k]['title']=(!empty($o[2])?$o[2]:$v['title']);
				preg_match('#(.*)\[(.*)\]#',$row[$k]['title'],$oo);
				$row[$k]['title']=(!empty($oo[1])?$oo[1]:$row[$k]['title']);
			}
		}
		else{
			$search='/search?searchid=2179486&text='.$_GET['search'];
			header('Location: '.$search);
		}	
		$v['title']='Все видеоматериалы';
		$v['h1']='Все видеоматериалы';
		$s->assign('v',$v);
		$text=$db->query('select text from playlist where act=1');
		$text=$text[0]['text'];
		//echo $text;
		
		$s->assign('row',$row);
		$s->assign('text',$text);
		$s->assign('left',$left);
		$s->assign('right',$right);
	
		/*$seo['title']='Все видео';
		$seo['h1']='Все видео';
		$s->assign('seo',$seo);*/
}
if($pg=='playlist' && !isset($_GET['p'])){
	$ts=1;
	$ss=$get['search'];
		if(!empty($ss)){
			$search=' and lower(title) like \'%'.strtolower($ss).'%\'';
		}
		$s->assign('ss',$ss);
		$bread['pg']='Плейлисты';
		//echo $title;
		$limit=39;
		$perpage=$limit; // Количество отображаемых данных из БД
		if (empty($_GET['pages']) || ($_GET['pages'] <= 0)) {
			$page = 1;
		}else{
			$page = (int) $_GET['pages']; // Считывание текущей страницы
		}
		$status='';
		if($_GET['status']=='on' || $_GET['status']=='off'){
			if($_GET['status']=='on'){$status='and p.status=1';}
			if($_GET['status']=='off'){$status='and p.status=0';}
		}	
		else{
			$status='';
		}
		$right=$page+1;
		
		if($_GET['status']=='on' || $_GET['status']=='off'){
			if($_GET['status']=='on'){$status='and status=1';}
			if($_GET['status']=='off'){$status='and status=0';}
		}	
		else{
			$status='';
		}
		$count=$db->query('select count(*) as count from playlist where act=1 '.$status.$search);
		//print_r($count);
		$pages_count = ceil($count[0]['count'] / $perpage); // Количество страниц
		// Если номер страницы оказался больше количества страниц
		if ($page > $pages_count){
			$page = $pages_count;
		}
		$start_pos = ($page - 1) * $perpage; // Начальная позиция, для запроса к БД
		// Вызов функции, для вывода ссылок на экран
		if($page>1){$left=$page-1;}
		//echo $right.'=>'.$pages_count.'<br/>';
		if($right>$pages_count){$right=null;}
		//echo $right.'=>'.$pages_count;
		//$pager=$pager[1];
		$offset=($limit*$page)-$limit;
		$pager=pager($page, $count, $pages_count, 8);
		$s->assign('page',$pager);		
		
		if($row=$db->query('select * from playlist where act=1 '.$status.$search.' order by published desc limit '.$limit.' offset '.$offset)){
			foreach($row as $k=>$v){
				preg_match('#\[(.*)\] (.*)#',$v['title'],$o);
				//print_r($o);
				$row[$k]['title']=(!empty($o[2])?$o[2]:$v['title']);
				preg_match('#(.*)\[(.*)\]#',$row[$k]['title'],$oo);
				$title =($row[$k]['id']!=29 && $row[$k]['id']!=8 && $row[$k]['id']!=9  && $row[$k]['id']!=38 && $row[$k]['id']!=55 ?'Прохождение игры ':'');
				$row[$k]['title']=$title.(!empty($oo[1])?$oo[1]:$row[$k]['title']);
				
			}
		}else{
			$search='/search?searchid=2179486&text='.$_GET['search'];
			header('Location: '.$search);
		}		
	
		$text=$text[0]['text'];
		//echo $text;
		$s->assign('row',$row);
		$s->assign('text',$text);
		$s->assign('left',$left);
		$s->assign('right',$right);
		
		/*$seo['title']='Плейлисты';
		$seo['h1']='Плейлисты';
		$s->assign('seo',$seo);*/
}
if( $pg=='playlist' && $_GET['p']){
	$ts=1;
	if(!empty($_GET['search'])){
		$search='/search?searchid=2179486&text='.$_GET['search'];
		header('Location: '.$search);
	}
	$perpage=$limit; // Количество отображаемых данных из БД
	if (empty($_GET['pages']) || ($_GET['pages'] <= 0)) {
		$page = 1;
	}else{
		$page = (int) $_GET['pages']; // Считывание текущей страницы
	}
	$right=$page+1;
	$p=$db->query('select id,text,title,logo from playlist where  url=\''.$get['p'].'\'');		
	if(!empty($p)){
	//print_r($p);
	$seo['description']=strip_tags(str_replace('&nbsp;',' ',$p[0]['text']));
	$seo['title']=strip_tags(str_replace('&nbsp;',' ',$p[0]['title']));
	$seo['img']='http://i1.ytimg.com/vi/'.$p[0]['logo'].'/mqdefault.jpg';
	$v['text']=$p[0]['text'];
	
	//print_r($o);
	
	$v['title']='Прохождение игры ';
	$v['h1']='Прохождение игры ';
	if(preg_match('#\[(.*)\] (.*)#',$p[0]['title'],$o)){
		
		$v['title'].=(!empty($o[2])?$o[2]:$p[0]['title']);
		$v['h1'].=(!empty($o[2])?$o[2]:$p[0]['title']);
	}
	if(preg_match('#(.*)\[(.*)\]#',$p[0]['title'],$oo)){	
		
		$v['title'].=(!empty($oo[1])?$oo[1]:$p[0]['title']);
		$v['h1'].=(!empty($oo[1])?$oo[1]:$p[0]['title']);
	}else{
		
		$v['title']=$p[0]['title'];
		$v['h1']=$p[0]['title'];
	}
	$s->assign('v',$v);
	//$v['title']='Прохождение игры '.$p[0]['title'];
	//$seo=$p[0]['text'];
	$pp=$p[0]['title'];	
	$p=$p[0]['id'];
	
	$count=$db->query('select count(*) as count from video where pid='.$p);
	//print_r($count);
	$pages_count = ceil($count[0]['count'] / $perpage); // Количество страниц
	// Если номер страницы оказался больше количества страниц
	if ($page > $pages_count){
		$page = $pages_count;
	}
	$start_pos = ($page - 1) * $perpage; // Начальная позиция, для запроса к БД
	// Вызов функции, для вывода ссылок на экран
	if($page>1){$left=$page-1;}
	//echo $right.'=>'.$pages_count.'<br/>';
	if($right>$pages_count){$right=null;}
	//echo $right.'=>'.$pages_count;
	//$pager=$pager[1];
	$offset=($limit*$page)-$limit;
	$pager=pager($page, $count, $pages_count, 8);
	$s->assign('page',$pager);			
	//$seo=$row
	$row=$db->query('select * from video where pid='.$p.' order by published desc');		

	$text=$text[0]['text'];
	//echo $text;
	$s->assign('row',$row);
	$s->assign('text',$text);
	$s->assign('left',$left);
	$s->assign('right',$right);
	}else{
		header('HTTP/1.0 404 Not Found');
		readfile('404.html');
		exit();
	}
	
	/*$seo['title']=$pp;
	$seo['h1']=$pp;
	$s->assign('seo',$seo);*/
}
if($pg=='all'){
	$ts=1;
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: http://".$_SERVER['SERVER_NAME']."/video?pages=".$_GET['pages']);
	exit;
}
if($ts==0){
	header('HTTP/1.0 404 Not Found');
	readfile('404.html');
	exit();
}
	
?>