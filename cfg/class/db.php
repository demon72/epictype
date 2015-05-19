<?php
$CountSQL = 0;
$CountCacheSQL = 0;
global $db;
	class db
	{
		public function connect() 
		{
			$link = mysql_connect('#you mysql server#', '#user#', '#password#');
			if (!$link) {
    			die('Ошибка соединения: ' . mysql_error());
    			mysqli_close($con);
			}	
			$db_selected = mysql_select_db('#database#', $link);
			if (!$db_selected) {
    			die ('Не удалось выбрать базу: ' . mysql_error());
			}	
			mysql_query('SET NAMES utf8');	
			return 'Успешно соединились';
			mysql_close($link);
		}
		
		public function query($sql,$view,$error)
		{		
			$this->CountSQL++;
			$this->connect();					
			if ($view==true||$view==1)
			{$this->sql($sql);}
			if ($error==true)
			{$this->error();}
			$result = mysql_query($sql);	
			//print_r($result);	
			while($row = mysql_fetch_assoc($result))
			{
				$r[]=$row;				
			}
			return $r;
			mysql_free_result(); 
		}

		function column($table){
			$this->connect();
			$row=$this->query('SHOW COLUMNS FROM '.$table);
		}
		function select($column,$table,$where) 
		{		
			$this->CountSQL++;
			$r=array();	
			if(!$where || $where=='') {
				$where='1=1';
			}		
			$this->connect();			
			if(!$column || $column=='')
			{
				$column='*';	
			}
			$sql='select '.$column.' from '.$table.' where '.$where.' ';			
			$result = mysql_query($sql);
			while($row = mysql_fetch_assoc($result))
			{
				$r[]=$row;				
			}
			return $r;
		}
		function insert($table,$column,$value,$view) 
		{
			$this->CountSQL++;
			$this->connect();
			$sql = addslashes('insert into '.$table.'('.$column.') values ('.$value.')');
			if ($view==true)
			{$this->sql($sql);}
			$result = mysql_query($sql);
		}
		function inserts($table,$arr,$view) 
		{
			$this->CountSQL++;
			$i=0;
			$column='';
			$c=$this->column($table);
			if(is_array($arr)){
				foreach($arr as $a){
					foreach($a as $k=>$v){
						if($i<count($a)){
							if(!empty($c[$i]['Field']) && !empty($c[$i]['Type'])){
							preg_match('#[A-Za-z]+#',$c[$i]['Type'],$t);
							$type=$t[0];
						}
							if(!empty($v)){
								//echo $k.'='.$v.',<br/>';
								$column.=$k.',';
								if($type=='varchar' || $type=='text')
								{
									$value.='\''.strip_tags($v).'\',';	
								}else{
									$value.=strip_tags($v).',';
								}
							}
						}else{
							//echo $k.'='.$v.'<br/>';
							$column.=$k;
							if($type=='varchar' || $type=='text')
							{
								$value.='\''.strip_tags($v).'\'';	
							}else{
								$value.=strip_tags($v);
							}
						}
						$i++;
					}
				}
			}
			//echo '<br/><br/>'.$table.' => '.$column.' == '.$value; 
			//exit;
			$this->connect();
			//$sql = 'insert into '.$table.'('.$column.') values ('.$value.')';
			if ($view==true)
			{$this->sql($sql);}
			/*if ($error==true)
			{$this->error();}*/
			$result = mysql_query($sql);
		}
		function update($table,$set,$where,$view)
		{
			$this->CountSQL++;
			$this->connect();
			$sql=addslashes('update '.$table.' set '.$set.' where '.$where);					
			if ($view==true)
			{$this->sql($sql);}
			if ($error==true)
			{$this->error();}
			$result = mysql_query($sql);
		
		}
		function updates($table,$set,$where,$view)
		{
			$this->CountSQL++;
			/*$i=0;
			$column='';
			$c=$this->column($table);
			if(is_array($arr)){
				///print_r($arr);
				foreach($arr as $a){
					foreach($a as $k=>$v){
						if($i<count($a)){
							if(!empty($c[$i]['Field']) && !empty($c[$i]['Type'])){
							preg_match('#[A-Za-z]+#',$c[$i]['Type'],$t);
							$type=$t[0];
							//echo $type.'=>'.$t[0].'<br/>';
							//print_r($t);
							//echo $c[$i]['Field'].'=>'.$c[$i]['Type'].'<br/>';
						}
							if(!empty($v)){
								//echo $k.'='.$v.',<br/>';
								$column.=$k.',';
								if($type=='varchar' || $type=='text')
								{
									$value.='\''.strip_tags($v).'\',';	
								}else{
									$value.=strip_tags($v).',';
								}
							}
						}else{
							//echo $k.'='.$v.'<br/>';
							$column.=$k;
							if($type=='varchar' || $type=='text')
							{
								$value.='\''.strip_tags($v).'\'';	
							}else{
								$value.=strip_tags($v);
							}
						}
						$i++;
					}
				}
			}*/
			$this->connect();
			//$sql='update '.$table.' set '.$set.' where '.$where;					
			if ($view==true)
			{$this->sql($sql);}
			if ($error==true)
			{$this->error();}
			$result = mysql_query($sql);
		
		}
		function delete($table,$where,$view,$error) {
			$this->CountSQL++;
			$this->connect();			
			$sql='delete from '.$table.' where '.$where.'';			
			if ($view==true)
			{$this->sql($sql);}
			if ($error==true)
			{$this->error();}
			$result = mysql_query($sql);
		}
		function sql($sql)
		{
			var_dump($sql);	
		}
		function error()
		{
    		die(' '.mysql_error());
		}
	}
?>