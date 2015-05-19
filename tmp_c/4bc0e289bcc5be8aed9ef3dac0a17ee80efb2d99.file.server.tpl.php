<?php /* Smarty version Smarty-3.1.14, created on 2014-12-26 06:35:44
         compiled from "./tmp/server.tpl" */ ?>
<?php /*%%SmartyHeaderCode:366744618549d7240055b07-10681426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc0e289bcc5be8aed9ef3dac0a17ee80efb2d99' => 
    array (
      0 => './tmp/server.tpl',
      1 => 1419589079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '366744618549d7240055b07-10681426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo' => 0,
    'nm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_549d724006da92_57607317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549d724006da92_57607317')) {function content_549d724006da92_57607317($_smarty_tpl) {?>

<style>
.center{height:100% !important;}
.page{height:100% !important;}
.content{height:100% !important;}
</style>

<div class="left">
Дорогие друзья! Настал этот день, которого мы так долго ждали!<br/> 
Наш сервер Minecraft 1.7.2 наконец то встал на хороший качественный хостинг. <br/>
Теперь он будет всегда онлайн 24/7 и без всяких лагов.
<br/><br/>  
<fieldset>
<legend><h2 style="margin:0px; padding:0px;color:#C00">Cервер временно заморожен</h2></legend>Приносим свои извинения за доставленные неудобства. Дополнительная информация будет размещена позже. Также вы можете отслеживать информацию о запуске сервера в <a href="https://vk.com/epictypeserver" target="_blank" rel="nofollow">официальной группе ВК</a>. 
<br/> </fieldset><br/><h5 style="margin:0px; padding:0px;"><del>IP: 217.106.106.24:25184</del></h5><br/><img src="img/serv.jpg" style="width:100%"><br/> 

<center><a href="http://gamingservers.ru/server/38144/" target="_blank" rel="nofollow"><img src="http://gamingservers.ru/userbars/38144/2/1/"></a></center>
<br/>
<a href="https://disk.yandex.ru/public/?hash=Eo%2BhKwEL8yC/0GB5vpIaHM7ApTHrObsSjRuGM6LsRXI%3D" target="_blank">Скачать клиент</a> 
<br/>


<?php if ($_smarty_tpl->tpl_vars['seo']->value['footer']){?><br clear="left">
	<div class="cp"><?php echo $_smarty_tpl->tpl_vars['seo']->value['footer'];?>
</div><?php }?>
</div> 
<div class="right">
  <?php echo $_smarty_tpl->getSubTemplate ("./blocks/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['nm']->value), 0);?>

</div>
<br clear="left"/>
<?php }} ?>