<?php
/**
 * php ajax methods
 *
 * @copyright (C) 2008-2012 PunBB, partially based on code (C) 2008-2009 FluxBB.org
 * @license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 * @package PunBB
 */
 
define('FORUM_ROOT', './');
require_once '/home/users/d/demon72/domains/epictype.ru/forum/config.php';
require_once '/home/users/d/demon72/domains/epictype.ru/forum/include/common.php';
if($_POST['module']=='auth'){
	if($_POST['method']=='vk'){
		($hook = get_hook('li_login_form_submitted')) ? eval($hook) : null;

		$query= array(
			'SELECT' =>'u.id, u.group_id, u.password, u.salt',
			'FROM' => 'users as u'
		);
		if (in_array($db_type, array('mysql', 'mysqli', 'mysql_innodb', 'mysqli_innodb'))){
			$query['WHERE'] = 'vk_id='.$forum_db->escape($_POST['id']);
		}
		$result = $forum_db->query_build($query) or error(__FILE__, __LINE__);
		list($user_id, $group_id, $db_password_hash, $salt) = $forum_db->fetch_row($result);

		if (!empty($db_password_hash)){
			$form_password_hash = $db_password_hash;
			
			$query = array(
				'UPDATE'	=> 'users',
				'SET'		=> 'password=\''.$form_password_hash.'\', salt=\''.$forum_db->escape($salt).'\'',
				'WHERE'		=> 'id='.$user_id
			);
		}
		if ($group_id == FORUM_UNVERIFIED){
			$query = array(
					'UPDATE'	=> 'users',
					'SET'		=> 'group_id='.$forum_config['o_default_user_group'],
					'WHERE'		=> 'id='.$user_id
			);

			$forum_db->query_build($query) or error(__FILE__, __LINE__);
			// Remove cache file with forum stats
			if (!defined('FORUM_CACHE_FUNCTIONS_LOADED'))
			{
				require FORUM_ROOT.'include/cache.php';
			}
			clean_stats_cache();	
		}
		$query = array(
			'DELETE'	=> 'online',
			'WHERE'		=> 'ident=\''.$forum_db->escape(get_remote_address()).'\''
		);
		$forum_db->query_build($query) or error(__FILE__, __LINE__);
		$expire = ($save_pass) ? time() + 1209600 : time() + $forum_config['o_timeout_visit'];
		forum_setcookie($cookie_name, base64_encode($user_id.'|'.$form_password_hash.'|'.$expire.'|'.sha1($salt.$form_password_hash.forum_hash($expire, $salt))), $expire);
		return 1;
	}
}
if($_POST['module']=='add'){
	if($_POST['method']=='vk'){
		$query = array(
				'UPDATE'	=> 'users',
				'SET'		=> 'vk_id='.$_POST['vk_id'],
				'WHERE'		=> 'id='.$_POST['id'],
		);
		
		$forum_db->query_build($query) or error(__FILE__, __LINE__);
	}
}
if($_POST['module']=='del'){
	if($_POST['method']=='vk'){
		$query = array(
				'UPDATE'	=> 'users',
				'SET'		=> 'vk_id=0',
				'WHERE'		=> 'id='.$_POST['id'],
		);
		$forum_db->query_build($query) or error(__FILE__, __LINE__);
	}
}
?>