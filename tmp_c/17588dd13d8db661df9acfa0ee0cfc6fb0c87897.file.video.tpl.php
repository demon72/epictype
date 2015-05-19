<?php /* Smarty version Smarty-3.1.14, created on 2015-05-18 19:07:08
         compiled from "./tmp/video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259606965549d3624908db6-06662716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17588dd13d8db661df9acfa0ee0cfc6fb0c87897' => 
    array (
      0 => './tmp/video.tpl',
      1 => 1431537217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259606965549d3624908db6-06662716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_549d36249ded50_68807542',
  'variables' => 
  array (
    'pg' => 0,
    'me' => 0,
    'main' => 0,
    'seo' => 0,
    'nm' => 0,
    'i' => 0,
    'row' => 0,
    'v' => 0,
    'ov' => 0,
    'p' => 0,
    'r' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549d36249ded50_68807542')) {function content_549d36249ded50_68807542($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/epictype.ru/cfg/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/epictype.ru/cfg/plugins/modifier.truncate.php';
?><div class="left">
	<?php if ($_smarty_tpl->tpl_vars['pg']->value=='main'){?>
		<div class="mv r">
			<?php if ($_smarty_tpl->tpl_vars['me']->value['text']!=''){?>
				<div style="height:400px">
					<?php echo $_smarty_tpl->tpl_vars['me']->value['text'];?>
<div class="text"><h3><?php echo $_smarty_tpl->tpl_vars['me']->value['title'];?>
</div> 
				</div>
			<?php }else{ ?>
				<iframe width="100%" height="350" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['main']->value['url'];?>
" frameborder="0" allowfullscreen></iframe>
				
				<div class="text">
				<a href="/video/watch?v=<?php echo $_smarty_tpl->tpl_vars['main']->value['url'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['main']->value['title'];?>
</h3></a>
			</div>
		<?php }?>
		</div>
		<div class="other fs20"><h4>Последние добавленные видео</h4></div>
		<div class="vs">
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 6+1 - (0) : 0-(6)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>	
				<div class="video" onclick="history.pushState({}, '<?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
', '/<?php echo $_smarty_tpl->tpl_vars['nm']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
'); document.location.href='/video/watch?v=<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
';">
					<div class="w40"> <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject" > 
						<img itemprop="contentUrl" src="http://i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
/mqdefault.jpg" style="width:100%" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
">	
						</span></div>
					<div class="w60"><div class="vc">
							<a itemprop="url" href="/video/watch?v=<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
">
								<h3 itemprop="name">Обзор игры <?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
</h3>
							</a>
							<span itemprop="description" style="line-height:1.3em;overflow:hidden;"><?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['content'],'"','&quot;'),200,"...",true);?>
</span>
						</div>
					</div>
					<br clear="left"/>
				</div>
				<br clear="left"/>
			<?php }} ?>
			
			
			
			<!-- et content -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:657px;height:150px"
			     data-ad-client="ca-pub-6835904328811404"
			     data-ad-slot="5199646373"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			
			<br clear="left">
			<br clear="left">
			  
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 13+1 - (7) : 7-(13)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 7, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<div class="video" onclick="history.pushState({}, '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['seo']->value['title'],'"','&quot;');?>
', '/<?php echo $_smarty_tpl->tpl_vars['nm']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
'); document.location.href='/video/watch?v=<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
';">
					<div class="w40">
						<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject" > 
							<img itemprop="contentUrl" src="http://i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
/mqdefault.jpg" style="width:100%" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
">	
						</span>
					</div>		
					<div class="w60">
						<div class="vc">
							<a itemprop="url" href="/video/watch?v=<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
">
								<h3 itemprop="name">Обзор игры <?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
</h3>
							</a>
							<span itemprop="description" style="line-height:1.3em;overflow:hidden;"><?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['content'],'"','&quot;'),200,"...",true);?>
</span>
						</div>
					</div>
					<br clear="left"/>
				</div>
				<br clear="left"/>
			<?php }} ?>
			
			
			
			<!-- et content -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:657px;height:150px"
			     data-ad-client="ca-pub-6835904328811404"
			     data-ad-slot="5199646373"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			
			
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pg']->value=='watch'){?>
		<div class="vv">
			<div itemscope itemtype="http://schema.org/VideoObject" >  
				<iframe width="100%" height="420px" src="//www.youtube.com/embed/<?php echo $_GET['v'];?>
" frameborder="0" allowfullscreen></iframe>
					<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
					<div class="yashare-auto-init" data-yashareL10n="ru"
					data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"></div>
 


				
				<div class="text"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</div>
			</div>
		</div>

		<div class="">
			<span class="fs22">Похожие видео:</span>
			<div class="carousel shadow"> 
				<div class="carousel-button-left"><a href="#"></a></div> 
				<div class="carousel-button-right"><a href="#"></a></div> 
					
				<div class="carousel-wrapper"> 
					
					<div class="carousel-items"> 
						<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ov']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
							<div class="carousel-block" onclick="history.pushState({}, '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['seo']->value['title'],'"','&quot;');?>
', '/<?php echo $_smarty_tpl->tpl_vars['nm']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
'); document.location.href='/video/watch?v=<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
<?php if ($_GET['p']){?>&p=<?php echo $_GET['p'];?>
<?php }?>">
								<img src="http://i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
/mqdefault.jpg" style="width:200px" alt="<?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
"><br>
								<a href="/video/watch?v=<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
<?php if ($_GET['p']){?>&p=<?php echo $_GET['p'];?>
<?php }?>"><h3 style="padding:0px; margin:0px"><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</h3></a>	
							</div>
						<?php } ?>
					</div>
				</div>
			</div> 
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("./blocks/comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['nm']->value), 0);?>

	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['pg']->value){?>
		<?php if (is_array($_smarty_tpl->tpl_vars['row']->value)){?>
			<div itemscope itemtype="http://schema.org/VideoObject" >
				<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
					<div style="width:33%; height:200px; float:left;" class="pp">
						<a itemprop="url" href="/video/watch?v=<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>
" class="fs14 lh12">
							<meta itemprop="isFamilyFriendly" content="True">
							<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject" >
							<img itemprop="contentUrl" src="http://i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>
/mqdefault.jpg" style="width:97%" alt="<?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
"><br/>
							<center><h3 itemprop="name">Обзор игры <?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</h3></center>
						</a>
					</div>
				<?php } ?>
				<br clear="left">
				<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

			</div>
		<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['row']->value;?>

		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pg']->value=='playlist'&&!$_GET['p']){?>
		<?php if (is_array($_smarty_tpl->tpl_vars['row']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
				<div style="width:33%; height:175px; float:left;" class="pp">
					<a href="/video/playlist?p=<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>
" class="fs14 lh12">
						<img src="http://i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['r']->value['logo'];?>
/mqdefault.jpg" style="width:95%" alt="<?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
"><br/>
						<center><b><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</b></center>
					</a>
				</div>
				<?php } ?>
				<br clear="left">
				<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['row']->value;?>

		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pg']->value=='playlist'&&$_GET['p']){?>
		<div class="chc"><?php echo $_smarty_tpl->tpl_vars['v']->value['text'];?>
</div>
		<div class="chc"><br/><b><span style="font-size:20px">Видео</span></b></div><br/>
		<div itemscope itemtype="http://schema.org/VideoObject" >
		<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
			<div style="width:33%; height:200px; float:left;" class="pp">
				<a itemprop="url" href="/video/watch?v=<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>
&p=<?php echo $_GET['p'];?>
" class="fs14 lh12">
					<meta itemprop="isFamilyFriendly" content="True">
					<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject" >
					<img itemprop="contentUrl" src="http://i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>
/mqdefault.jpg" style="width:95%" alt="<?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
"><br/>
					<center><h3 itemprop="name"><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</h3></center>
				</a>
			</div>
		<?php } ?>
		<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

	</div>
	<?php }?>
</div>
<div class="right">
<?php echo $_smarty_tpl->getSubTemplate ("./blocks/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['nm']->value), 0);?>

</div>


<?php }} ?>