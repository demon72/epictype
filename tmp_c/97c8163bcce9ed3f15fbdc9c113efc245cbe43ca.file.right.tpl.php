<?php /* Smarty version Smarty-3.1.14, created on 2015-05-18 19:07:08
         compiled from "/var/www/epictype.ru/tmp/blocks/right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1310967222549d36249e4352-75018307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c8163bcce9ed3f15fbdc9c113efc245cbe43ca' => 
    array (
      0 => '/var/www/epictype.ru/tmp/blocks/right.tpl',
      1 => 1431586851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1310967222549d36249e4352-75018307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_549d3624a38c15_06539746',
  'variables' => 
  array (
    'ng' => 0,
    'nm' => 0,
    'pg' => 0,
    'about' => 0,
    'playlist' => 0,
    'p' => 0,
    'page' => 0,
    'vv' => 0,
    'news' => 0,
    'ads' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549d3624a38c15_06539746')) {function content_549d3624a38c15_06539746($_smarty_tpl) {?><div>
<?php if ($_smarty_tpl->tpl_vars['ng']->value==1){?>
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-c" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="270" height="375"><param name="movie" value="http://vmirepozitiva.ru/flash/christmass_clock270x375.swf"><param name="quality" value="high"><param name="wmode" value="transparent"><embed src="http://vmirepozitiva.ru/flash/christmass_clock270x375.swf" quality="high" wmode="transparent"  pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="270" height="375"></embed></object></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['nm']->value=='video'&&$_smarty_tpl->tpl_vars['pg']->value=='main'){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("about", null, null); ob_start(); ?>
		
			
			<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,gplus" data-yashareTheme="counter"></div> 
		
		<h2>О канале</h2><?php echo $_smarty_tpl->tpl_vars['about']->value;?>
<br/><br/>
		Автор канала: <a href="http://vk.com/va1dai" rel="nofollow" target="_blank">Valdai</a><br/>
		Разработчик сайта: <a href="http://vk.com/demon072" rel="nofollow" target="_blank" >Demon</a><br/><br/>
		<img src="/img/vk.png" valign="center" alt="Группа в ВК" title="Группа в ВК">&nbsp;<a href="http://vk.com/epictype" rel="nofollow" target="_blank">ВК</a><br/>
		<img src="/img/o.png" valign="center" alt="Группа в Одноклассники" title="Группа в Одноклассники">&nbsp;<a href="http://www.odnoklassniki.ru/group/52256308920405" rel="nofollow" target="_blank">Одноклассники</a><br/>
		<img src="/img/g.png" valign="center" alt="Google+" title="Google+">&nbsp;<a href="https://plus.google.com/+EpicType?rel=author" rel="nofollow" >Google</a><br/>
		<img src="/img/t.png" valign="center" alt="Twitter" title="Twitter">&nbsp;<a href="https://twitter.com/EpicTypeChannel" rel="nofollow" target="_blank">Twitter</a><br/>
		<img src="/img/y.png" valign="center" alt="Канал на youtube" title="Канал на youtube">&nbsp;<a href="http://www.youtube.com/user/EpicType" rel="nofollow" target="_blank">Youtube</a><br/>
		<img src="/img/s.png" valign="center" alt="SteamByu" title="SteamByu">&nbsp;<a href="http://steambuy.com/EpicType" rel="nofollow" target="_blank">Я покупаю игры тут</a><br/>
		<img src="//badges.instagram.com/static/images/ig-badge-16.png" valign="center" alt="Instagram" title="Instagram"/>&nbsp;<a href="http://instagram.com/epictype_channel?ref=badge" rel="nofollow" target="_blank">Instagram</a><br/><br/>		
		<iframe id="fr" style="overflow: hidden; height: 105px; width: 100%; border: 0pt none;" src="http://www.youtube.com/subscribe_widget?p=epictype" scrolling="no" frameborder="0"></iframe><br/>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['pg']->value=='main'){?>
		<?php echo Smarty::$_smarty_vars['capture']['about'];?>

		<h2 class="fs20 bbt">Активные прохождения</h2>
		<br clear="left"/>
		<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['playlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
			<div class="va">
				<img src="http://i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['p']->value['logo'];?>
/mqdefault.jpg" style="width:100%" alt="<?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
">
				<a href="/video/playlist?p=<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</h3></a>
			</div>
			<br clear="left">
				<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

		<?php } ?>
	<?php }?>
	

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['nm']->value=='video'&&('pg'=='playlist'||$_smarty_tpl->tpl_vars['pg']->value=='')){?>

<br clear="left">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['pg']->value!='main'){?>
<h2 class="fs20 bbt">Плейлист</h2> 
<br clear="left">
<a class="nr" href="/video/playlist?p=<?php echo $_smarty_tpl->tpl_vars['playlist']->value['url'];?>
">
<img src="http://i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['playlist']->value['logo'];?>
/mqdefault.jpg" style="width:100%" alt="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['title'];?>
">					
<br><h3 style="padding:0px; margin:0px"><?php echo $_smarty_tpl->tpl_vars['playlist']->value['title'];?>
</h3></a>	
<a href="/video/playlist">Все плейлисты</a>
<br clear="left">
<br clear="left">
<h2 class="fs20 bbt">Прохождения</h2>
<br clear="left"> 
<a class="nr" href="/video/watch?v=<?php echo $_smarty_tpl->tpl_vars['vv']->value['url'];?>
">
<img src="http://i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['vv']->value['url'];?>
/mqdefault.jpg" style="width:100%" alt="<?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
">					
<br><h3 style="padding:0px; margin:0px"><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</h3></a>	
<a href="/video">Все видео</a>
<br clear="left"><br clear="left">
<h2 class="fs20 bbt">Новости</h2> 
<br clear="left">
<a class="nr" href="/news/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">		
<h3 style="padding:0px; margin:0px"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h3><?php echo $_smarty_tpl->tpl_vars['news']->value['preview'];?>
</a>	
<a href="/news">Все новости</a>
<br clear="left"><br clear="left">
<?php if ($_smarty_tpl->tpl_vars['ads']->value=='1'){?><?php echo Smarty::$_smarty_vars['capture']['adsense'];?>
<?php }else{ ?><a href="https://www.digitalocean.com/?refcode=5202d833b53e" style="text-decoration:none;"><img src="/img/do.jpg" title="digital ocean"></a><?php }?>
<br clear="left"/><br clear="left"/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['nm']->value=='server'||$_smarty_tpl->tpl_vars['nm']->value=='townypl'||$_smarty_tpl->tpl_vars['nm']->value=='donatserv'){?>

<script type="text/javascript" src="//vk.com/js/api/openapi.js?113"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width:"254", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 41322703);
</script>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ng']->value==1){?>
<div class="elka">&nbsp;</div>
<?php }?>
<?php }} ?>