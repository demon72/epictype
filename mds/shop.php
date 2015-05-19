<?php
if(empty($pg)){
	$ss=$get['search'];
	if(!empty($ss)){
		$search=' and lower(title) like \'%'.strtolower($ss).'%\' or lower(description) like \'%'.strtolower($ss).'%\'';
	}
	$v['title']='Магазин игр';
	$v['р1']='Магазин игр';
	$s->assign('v',$v);
	$limit=15;
	$perpage=$limit; // Количество отображаемых данных из БД
	if (empty($_GET['pages']) || ($_GET['pages'] <= 0)) {
		$page = 1;
	}else{
		$page = (int) $_GET['pages']; // Считывание текущей страницы
	}

	$right=$page+1;

	$count=$db->query('select count(*) as count from games where act=0 and description != \'\' '.$search);
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
	$title='Магазин';
	if($row=$db->query('select * from games where act=0 and description != \'\' '.$search.' limit '.$limit.' offset '.$offset)){
	}else{
		$search='/search?searchid=2179486&text='.$_GET['search'];
		header('Location: '.$search);
	}
	$s->assign('row',$row);
}
if(preg_match('/i([0-9]*)/',$pg,$o)){
	$row=$db->query('select * from games where id='.$o[1]);
	$row=$row[0];
	if(!empty($row)){
	$v['title']='Купить '.$row['title'];
	$v['h1']=$row['title'];
	$s->assign('v',$v);
	$row['description']=str_replace(array('&lt;','&gt;'),array('<','>'),$row['description']);
	$seo['description']=strip_tags(str_replace('&nbsp;',' ',$row['description']));
	$seo['title']=strip_tags(str_replace('&nbsp;',' ',$row['title']));
	$s->assign('row',$row);
	//print_r($row);
	}else{
		header('HTTP/1.0 404 Not Found');
		readfile('404.html');
		exit();
	}
}
if(!empty($pg) && !preg_match('/i([0-9]*)/',$pg,$o)){
	header('HTTP/1.0 404 Not Found');
	readfile('404.html');
	exit();
}
$s->assign('info','Обращаем ваше внимание, что данный интернет-сайт носит информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 (2) Гражданского кодекса Российской Федерации.');
?>