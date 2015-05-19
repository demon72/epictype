<?php

$today = strtotime(date("d.m.y"));
//$today=strtotime('18.09.2014');
if($today>=1411070401){
	$get=get();
	if(isset($_GET['rand'])){
		if(!empty($get['key'])){
			//$tid=$db->select('id','tokens','token=\''.$get['key'].'\' and act=1',3);
			$tid=$db->select('id','tokens','token=\''.$get['key'].'\' and act=1');
			$tid=$tid[0]['id'];	
			if($tid>0){
				$rw=file_get_contents('https://api.vk.com/method/likes.getList?type=post&owner_id=-41322703&item_id=35641&filter=copies&count=1000');
				$rw=json_decode($rw,true);
				$user=rand(0,count($rw['response']['users']));
				$us=file_get_contents('https://api.vk.com/method/groups.isMember?group_id=41322703&user_id='.$rw['response']['users'][$user].'&extended=1');
				$us=json_decode($us,true);
				$users['member']=$us['response']['member'];
				$ui=file_get_contents('https://api.vk.com/method/users.get?user_ids='.$rw['response']['users'][$user].'&fields=photo_100,domain');
				$ui=json_decode($ui,true);
				$users['info']=$ui['response'][0];
				$s->assign('save',true);
				if($_POST['go']){
					unset($_POST['go']);
					$arr=$_POST;
					$field='vk_id,first_name,last_name,domain,photo_100,member,event_id';
					$val=$arr['vk_id'].',\''.$arr['first_name'].'\',\''.$arr['last_name'].'\',\''.$arr['domain'].'\',\''.$arr['photo_100'].'\','.$arr['member'].',1';
					$db->insert('winner',$field,$val);
					$db->update('tokens','act=0','id='.$tid);
					header("Location: /".$nm);
				}
				$s->assign('load',true);	
			}else{
				$s->assign('error','incorrect token');
			}
		}else{
			$rw=file_get_contents('https://api.vk.com/method/likes.getList?type=post&owner_id=-41322703&item_id=35641&filter=copies&count=1000');
			$rw=json_decode($rw,true);
			$user=rand(0,count($rw['response']['users']));
			$us=file_get_contents('https://api.vk.com/method/groups.isMember?group_id=41322703&user_id='.$rw['response']['users'][$user].'&extended=1');
			$us=json_decode($us,true);
			$users['member']=$us['response']['member'];
			$ui=file_get_contents('https://api.vk.com/method/users.get?user_ids='.$rw['response']['users'][$user].'&fields=photo_100,domain');
			$ui=json_decode($ui,true);
			$users['info']=$ui['response'][0];
		}
	}else{
		//$win=$db->select('*','winner','event_id=1 order by time desc limit 1',0);
		$win=$db->select('*','winner','event_id=1 order by time desc limit 1');
		$win=$win[0];
		$users['member']=$win['member'];
		$users['info']=array(
			'uid'=>$win['vk_id'],
			'first_name'=>$win['first_name'],
			'last_name'=>$win['last_name'],
			'domain'=>$win['domain'],
			'photo_100'=>$win['photo_100'],		
		);
	}
	$s->assign('users',$users);
	$text='Сервис работает при помощи api vk. Используются <a href="https://vk.com/dev/likes.getList">likes.getList</a> (для получения репостов), <a href="https://vk.com/dev/groups.isMember">groups.isMember</a> (состоит ли пользователь в группе <a href="https://vk.com/epictype">Epic Type</a>), <a href="https://vk.com/dev/users.get">users.get</a> (получения данных о пользователе) методы. Для случайной выборки используется функция rand().';
	$s->assign('info',$text);
}else{
	$s->assign('no',true);
}
?>