<?php
	function ids($row, $key, $id = 'id', $type = 'string')
	{
		if (is_array($row))
		{
			$arr = array();
			foreach($row as $r)
			{
				if ($key == 'array')
					$a = $r;
				else
					$a = $r[$key];

				if ($type == 'array[]')
				{
					if ($id==''){
						$arr[][] = $a;
					}elseif (is_array($id))
					{
						$keys='';
						foreach($id as $k){$keys.=$r[$k];}
						if($keys)
							$arr[$keys][] = $a;
					}else{
						if ($id == 'parent_id'){$keys = (int)$r[$id];}else{$keys = $r[$id];}
						$arr[$keys][] = $a;
					}
					//$arr[$r[$id]][] = $a;
				}
				else
				{
					if ($id==''){
						$arr[] = $a;
					}elseif (is_array($id))
					{
						$keys='';
						foreach($id as $k){$keys.=$r[$k];}
						if($keys)
							$arr[$keys] = $a;
					}else{
						$arr[$r[$id]] = $a;
					}
				}
			}
			if ($type == 'string')
				return implode(',', $arr);

			if ($type == 'array' || $type == 'array[]')
				return $arr;
			
		}

		return  '-1';
	}
	function pager($page, $count, $pages_count, $show_link){
		global $max;
		$i=0;
		if(is_array($_GET)){
			unset($_GET['page']);
			unset($_GET['pages']);
			unset($_GET['module']);
			foreach($_GET as $k=>$v){				
				$get.='&'.$k.'='.$v;
				$i++;	
			}
		}
		$show_link=$show_link;
		// $show_link - это количество отображаемых ссылок;
		// нагляднее будет, когда это число будет парное
		// Если страница всего одна, то вообще ничего не выводим
		if ($pages_count == 1) return false;
		$max=$pages_count;
		$sperator = ' '; // Разделитель ссылок; например, вставить "|" между ссылками
		// Для придания ссылкам стиля
		//$style = 'style="color: #808000; text-decoration: none;"';
		$style='style="color:#00E"';
		$stylen='style="color:#000"';
		$begin = $page - intval($show_link / 2);
		$p='<nav><ul class="pagination">';
		unset($show_dots); // На всякий случай :)
		// Сам постраничный вывод
		// Если количество отображ. ссылок больше кол. страниц
		if ($pages_count <= $show_link + 1) $show_dots = 'no';
		// Вывод ссылки на первую страницу
		if (($begin > 2) && ($pages_count - $show_link > 2)) {
		$p.='<li><a '.$style.' title="Первая страница"  href="'.$_SERVER['php_self'].'?pages=1'.$get.'"> Первая</a></li>';
		}
		for ($j = 0; $j <= $show_link; $j++) // Основный цикл вывода ссылок
		{
		$i = $begin + $j; // Номер ссылки
		// Если страница рядом с началом, то увеличить цикл для того,
		// чтобы количество ссылок было постоянным
		if ($i < 1) continue;
		// Подобное находится в верхнем цикле
		if (!isset($show_dots) && $begin > 1) {
		$p.='<li><a '.$style.' href="'.$_SERVER['php_self'].'?pages='.($i-1).$get.'"><b><span aria-hidden="true">«</span></b></a></li>';
		$show_dots = "no";
		}
		// Номер ссылки перевалил за возможное количество страниц
		if ($i > $pages_count) break;
		if ($i == $page) {
		$p.='<li><a '.$stylen.' ><b>'.$i.'</b></a></li>';
		} else {
		$p.='<li><a '.$style.' href="'.$_SERVER['php_self'].'?pages='.$i.$get.'">'.$i.'</a></li>';
		}
		// Если номер ссылки не равен кол. страниц и это не последняя ссылка
		//if (($i != $pages_count) && ($j != $show_link)) echo $sperator;
		// Вывод "..." в конце
		if (($j == $show_link) && ($i < $pages_count)) {
		$p.='<li><a '.$style.' href="'.$_SERVER['php_self'].'?pages='.($i+1).$get.'"><b><span aria-hidden="true">»</span><span class="sr-only">Next</span></b></a</li>';
		}
		}
		// Вывод ссылки на последнюю страницу
		if ($begin + $show_link + 1 < $pages_count) {
		$p.='<li><a '.$style.' title="Последняя страница" href="'.$_SERVER['php_self'].'?pages='.$pages_count.$get.'"> Последняя</a></li>';
		}
		$p.='</ul></nav>';
		return $p;
		unset($p,$sperator,$style,$stylen,$begin,$show_dots,$pages_count,$page,$get,$i,$fv);
		exit;
	}
	
function authOpenAPIMember($app_id, $app_secret)
{
	$session = array();
	$member = FALSE;
	$valid_keys = array('expire', 'mid', 'secret', 'sid', 'sig');
	$app_cookie = $_COOKIE['vk_app_'.$app_id];
	if ($app_cookie)
	{
		$session_data = explode ('&', $app_cookie, 10);

		foreach ($session_data as $pair)
		{
			list($key, $value) = explode('=', $pair, 2);
			if (empty($key) || empty($value) || !in_array($key, $valid_keys))
			{
				continue;
			}

			$session[$key] = $value;
		}

		foreach ($valid_keys as $key)
		{
			if (!isset($session[$key])) return $member;
		}
		ksort($session);

		$sign = '';
		foreach ($session as $key => $value)
		{
			if ($key != 'sig')
			{
				$sign .= ($key.'='.$value);
			}
		}

		$sign .= $app_secret;
		$sign = md5($sign);
		if ($session['sig'] == $sign && $session['expire'] > time())
		{

			$member = array(
			'id' => intval($session['mid']),
			'secret' => $session['secret'],
			'sid' => $session['sid']
			);
		}
	}

	return $member;
}

function objectToArray($d){
	if (is_object($d))
		$d = get_object_vars($d);
	return is_array($d) ? array_map(__METHOD__, $d) : $d;
	}
function bread($nm,$pg,$sp,$title){
	$nmb=array('video'=>'Видео','news'=>'Новости','faq'=>'FAQ','server'=>'Сервер','townypl'=>'Гайд по Towny Advanced','donatserv'=>'Платные услуги',''=>'Видео','shop'=>'Магазин игр','search'=>'Поиск по сайту');
	$pgb=array('playlist'=>'Плейлисты');
	
	if($nm=='video' && $pg==''){
		$bread[]=array(
			'title'=>'Все видео',
			'url'=>'/video',
		);
		//echo 'Все видео';
	}else{		
		if($nmb[$nm]){
			if($nmb[$nm]){
				$bread[]=array(
					'title'=>$nmb[$nm],
					'url'=>'/'.$nm,
				);
			}
		}
		if($pgb[$pg]){
			//echo $pg;
			if(!empty($pgb[$pg])){
				if($nm=='video'){
					$bread[]=array(
						'title'=>$pgb[$pg],
						'url'=>'/'.$_SERVER['REQUEST_URI'],
					);
				}else{
					$bread[]=array(
						'title'=>$pgb[$pg],
						'url'=>'/'.$pg,
					);
				}
			}
		}
	}	
	if($pg!='' && !$pgb[$pg]){
		if($pg!='main'){
			$bread[]=array(
				'title'=>$title,
				'url'=>'/'.$_SERVER['REQUEST_URI'],
			);
		}
	}
	return $bread;
}			
?>