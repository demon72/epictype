<?php /* Smarty version Smarty-3.1.14, created on 2015-01-20 02:19:26
         compiled from "./tmp/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66154365254be2bae44ab44-94870257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4d406221f67cd1d81b4c65ad07d38d0e81c0ed' => 
    array (
      0 => './tmp/news.tpl',
      1 => 1419589078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66154365254be2bae44ab44-94870257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pg' => 0,
    'seo' => 0,
    'nm' => 0,
    'i' => 0,
    'row' => 0,
    'r' => 0,
    'comment' => 0,
    'left' => 0,
    'right' => 0,
    'page' => 0,
    'on' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54be2bae522744_16316962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54be2bae522744_16316962')) {function content_54be2bae522744_16316962($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/epictype.ru/cfg/plugins/modifier.date_format.php';
?>
<style type="text/css">
	
		h2{margin:0px;padding:0px;font-size:20px;}
		@media(max-width: 1024px) {
			h2{margin:0px;padding:0px;font-size:24px !important;}
		}
		.v{height:auto; width:650px}
		.n{color:#000; text-decoration: none}
		.vc{cursor:pointer}
		.left p:first-child{padding-top:0px; margin-top:0px}
	
</style>
<?php if (empty($_smarty_tpl->tpl_vars['pg']->value)){?>
<div class="left">

	<?php if (!$_GET['search']){?>	
	<div class="vcenter">
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (0) : 0-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<div class="v">
				
				<div class="news" onclick="history.pushState({}, '<?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
', '/<?php echo $_smarty_tpl->tpl_vars['nm']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
'); document.location.href='/news/<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
';">
					<h2 class="fs18"><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
</h2>
					<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['preview'];?>

					<a href="/news/<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
">Читать полностью...</a>
				</div>
			
			</div>
			<br clear="left"/>
			<br clear="left"/>
	<?php }} ?>
	<div class="v">
			
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- et content -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:657px;height:150px"
			     data-ad-client="ca-pub-6835904328811404"
			     data-ad-slot="5199646373"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			
			</div>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (6) : 6-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 6, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<div class="v">
				
				<div class="news" onclick="history.pushState({}, '<?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
', '/<?php echo $_smarty_tpl->tpl_vars['nm']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
'); document.location.href='/news/<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
';">
					<h2 class="fs18"><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
</h2></a>
					<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['preview'];?>

					<a href="/news/<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
">Читать полностью...</a>
				</div>
			
			</div>
			<br clear="left"/>
			<br clear="left"/>
	<?php }} ?>
	<?php }else{ ?>
		<div class="vcenter">
		<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
			<div class="v">
				
				<div class="news" onclick="history.pushState({}, '<?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
', '/<?php echo $_smarty_tpl->tpl_vars['nm']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
'); document.location.href='/news/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
';">
					<h2><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</h2>
					<?php echo $_smarty_tpl->tpl_vars['r']->value['preview'];?>

					<div class="w2"><img src="/img/view.png">&nbsp;<?php echo $_smarty_tpl->tpl_vars['r']->value['view'];?>
 &nbsp;&nbsp;&nbsp;<img src="/img/com.png">&nbsp;<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->tpl_vars['r']->value['id']];?>
</div><div class="w8" ><a href="/news/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" style="float:right">Читать далее</a></div>
				</div>
				
			</div>
			<br clear="left"/>
			
	<?php } ?>
	<?php }?>
	<div class="v">
			
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- et content -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:657px;height:150px"
			     data-ad-client="ca-pub-6835904328811404"
			     data-ad-slot="5199646373"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			
			</div><br clear="left">
	<?php if ($_smarty_tpl->tpl_vars['left']->value){?><a href="/news/?pages=<?php echo $_smarty_tpl->tpl_vars['left']->value;?>
" style="margin-right:5px;font-size: 19px;
	overflow: hidden;">&larr;&nbsp;Влево</a><?php }?><?php if ($_smarty_tpl->tpl_vars['right']->value){?><a href="/news/?pages=<?php echo $_smarty_tpl->tpl_vars['right']->value;?>
" style="margin-left:5px;font-size: 19px;
	overflow: hidden;">Вправо&nbsp;&rarr;</a><?php }?><br/>
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

	</div>
</div>
<?php }else{ ?>
<div class="left nt">

<?php echo $_smarty_tpl->tpl_vars['row']->value['preview'];?>

<?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>

<?php if ($_smarty_tpl->tpl_vars['row']->value['author']){?>Автор: <?php echo $_smarty_tpl->tpl_vars['row']->value['author'];?>
<br/><?php }?>
Опубликовано: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['t_add'],"%d.%m.%Y в %H:%M");?>
<br/>
Просмотров: <?php echo $_smarty_tpl->tpl_vars['row']->value['view'];?>
<br/>
Источник: <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['source'];?>
" target="_blank" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['row']->value['source'];?>
</a>
<br><br>

<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?112"></script>

<script type="text/javascript">
  VK.init({apiId: 4354193, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Like block will be -->
<div id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "mini"});
</script>
&nbsp;
<script type="text/javascript" src="//yandex.st/share/share.js"
charset="utf-8"></script>
<div class="yashare-auto-init" data-yashareL10n="ru"
 data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"

></div> 



<br clear="left">
<div class="vcenter">
<h2>Другие новости</h2>
		<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['on']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
			<a href="/news/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="on"><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</a>
			<br clear="left"/>
		<?php } ?>

	</div>
	<br clear="left"/>
<?php echo $_smarty_tpl->getSubTemplate ("./blocks/comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['nm']->value), 0);?>

</div>

<?php }?>
<div class="right">

<?php echo $_smarty_tpl->getSubTemplate ("./blocks/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['nm']->value), 0);?>

</div>
<?php }} ?>