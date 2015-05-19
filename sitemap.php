<?php 
header('Content-type: text/xml');
$sitemap='<?xml version="1.0" encoding="UTF-8"?>';
$sitemap.='<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
/*$cfgpath='/var/www/config';
require_once($cfgpath.'/cfg.php');
require_once($cfgpath.'/function/function.php');
require_once($cfgpath.'/class/db.php');*/
require_once('./cfg/cfg.php');
require_once('./cfg/function/function.php');
require_once('./cfg/class/db.php');
error_reporting(0);
ini_set('display_errors',0);
$db=new db;
$hosts='http://epictype.ru/';
$row['video']=$db->query('select url from video where act=1');
$row['playlist']=$db->query('select url from playlist where act=1');
$row['news']=$db->query('select id from news where act=1');
$row['game']=$db->query('select id from games');
$sitemap.='<url><loc>'.$hosts.'</loc></url>';
$sitemap.='<url><loc>'.$hosts.'video</loc><changefreq>daily</changefreq><priority>1</priority></url>';
$sitemap.='<url><loc>'.$hosts.'video/playlist</loc><changefreq>monthly</changefreq><priority>1</priority></url>';
$sitemap.='<url><loc>'.$hosts.'news</loc><changefreq>daily</changefreq><priority>1</priority></url>';
$sitemap.='<url><loc>'.$hosts.'shop</loc><changefreq>weekly</changefreq><priority>1</priority></url>';
$sitemap.='<url><loc>'.$hosts.'server</loc><changefreq>monthly</changefreq><priority>1</priority></url>';
$sitemap.='<url><loc>'.$hosts.'donatserv</loc><changefreq>monthly</changefreq><priority>1</priority></url>';
$sitemap.='<url><loc>'.$hosts.'townypl</loc><changefreq>monthly</changefreq><priority>1</priority></url>';
$sitemap.='<url><loc>'.$hosts.'sitemap</loc><changefreq>monthly</changefreq><priority>1</priority></url>';
$sitemap.='<url><loc>'.$hosts.'video/main</loc><changefreq>daily</changefreq><priority>1</priority></url>';
$sitemap.='<url><loc>'.$hosts.'feedback</loc><changefreq>monthly</changefreq><priority>1</priority></url>';
foreach($row['video'] as $v){
	$sitemap.='<url><loc>'.$hosts.'video/watch?v='.$v['url'].'</loc><changefreq>daily</changefreq><priority>0.3</priority></url>';
}
foreach($row['playlist'] as $p){
	$sitemap.='<url><loc>'.$hosts.'video/playlist?p='.$p['url'].'</loc><changefreq>daily</changefreq><priority>0.3</priority></url>';
}
foreach($row['news'] as $n){
	$sitemap.='<url><loc>'.$hosts.'news/'.$n['id'].'</loc><changefreq>daily</changefreq><priority>0.3</priority></url>';
}
foreach($row['game'] as $g){
	$sitemap.='<url><loc>'.$hosts.'shop/i'.$g['id'].'</loc><changefreq>daily</changefreq><priority>0.3</priority></url>';
}
$sitemap.='</urlset>';
echo $sitemap;
?>