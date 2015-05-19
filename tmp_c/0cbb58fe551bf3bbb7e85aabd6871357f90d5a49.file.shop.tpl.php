<?php /* Smarty version Smarty-3.1.14, created on 2015-01-20 02:21:02
         compiled from "./tmp/shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77243593754be2c0e9aaf48-11083182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cbb58fe551bf3bbb7e85aabd6871357f90d5a49' => 
    array (
      0 => './tmp/shop.tpl',
      1 => 1419589078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77243593754be2c0e9aaf48-11083182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pg' => 0,
    'row' => 0,
    'r' => 0,
    'page' => 0,
    'nm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54be2c0e9fe374_83613427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54be2c0e9fe374_83613427')) {function content_54be2c0e9fe374_83613427($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/epictype.ru/cfg/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/epictype.ru/cfg/plugins/modifier.date_format.php';
?>
<style>
.center{height:100%;}
.page{height:100%;}
.content{height:100%;}
</style>

<div class="left">
<?php if (!$_smarty_tpl->tpl_vars['pg']->value){?>
<p style="margin-top:0px; padding-top:0px;">В интернет-магазине «EpicType» вы можете купить последние новинки игрового мира для Playstation 3, Playstation 2, Xbox 360, PSP, PS Vita, Nintendo Wii U, Wii, 3DS, DS, PC. Игры, приставки, аксессуары для всех консолей по самым низким ценам! В нашем магазине вы сможете найти игры для приставок компании Sony: PS3, PSP, PS2, Microsoft: Xbox 360, а также Nintendo Wii и Wii U, NDS и многие другие. Открыт предзаказ на приставки нового поколения - Microsoft Xbox One, Sony PlayStation 4.
</p>
<br/>

<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
<div class="game">
	<div class="gl"><img src="<?php echo $_smarty_tpl->tpl_vars['r']->value['img'];?>
" width="100%" height="auto"></div>
	<div class="gr gc"><div class="w75 fs20"><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</div><div class="w25 fs20"><center><?php echo $_smarty_tpl->tpl_vars['r']->value['price'];?>
 <span class="rub">P</span><center></div><br clear="left"><p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['r']->value['description'],200,"...",true);?>
</p>
		<div class="w75"><a href="/shop/i<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">Подробнее</a></div>
		<div class="w25"><a href="http://www.oplata.info/asp/pay_wm.asp?id_d=<?php echo $_smarty_tpl->tpl_vars['r']->value['sbid'];?>
&ai=427969" class="buy">Купить</a></div>
	</div>
</div><br/>
<?php } ?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['pg']->value!=''){?>
<div class="w50">
	<?php if ($_smarty_tpl->tpl_vars['row']->value['video']){?>
<iframe id="ytplayer" type="text/html" width="328" height="155" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['row']->value['video'];?>
?showinfo=0&autohide=1" 
frameborder="0" allowfullscreen></iframe>
<?php }else{ ?><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
" width="100%" height="auto"><?php }?>
</div>
<div class="w50">
	<div class="pd10">
		Жанр: <?php echo $_smarty_tpl->tpl_vars['row']->value['genre'];?>
<br/>
		Язык: <?php echo $_smarty_tpl->tpl_vars['row']->value['language'];?>
<br/>
		Платформа: <?php echo $_smarty_tpl->tpl_vars['row']->value['platform'];?>
<br/>
		Активация: <?php echo $_smarty_tpl->tpl_vars['row']->value['activation'];?>
<br/>
		Издатель: <?php echo $_smarty_tpl->tpl_vars['row']->value['editor'];?>
<br/>
		Дата выхода: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['reliz'],"%d.%m.%Y");?>
<br/>
		
	</div>
	
	</div>
	<br clear="left"/>
	<div class="w50"><script type="text/javascript" src="//yandex.st/share/share.js"
charset="utf-8"></script>
<div style="margin-top:10px" class="yashare-auto-init" data-yashareL10n="ru"
 data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"

></div> 

</div>
	<div class="w50"><center><div class="bin"><a href="http://www.oplata.info/asp/pay_wm.asp?id_d=<?php echo $_smarty_tpl->tpl_vars['row']->value['sbid'];?>
&ai=427969" style="color:#fff;text-decoration:none;">Купить <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
 за <?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
 <span class="rubs">P</span></a></div></center>
</div>

<br clear="left"/><br/>
<div>
<?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>

</div>

<br/>
<?php echo $_smarty_tpl->getSubTemplate ("./blocks/comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['nm']->value), 0);?>

<?php }?>
</div>
<div class="right">
<?php echo $_smarty_tpl->getSubTemplate ("./blocks/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['nm']->value), 0);?>

</div>

<?php }} ?>