<?php /* Smarty version Smarty-3.1.14, created on 2015-03-07 08:26:53
         compiled from "./tmp/err.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81857183654fa6ffd4e5b60-54527935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c6c83324ffd8ee9194cc4824ae03853d4a7967c' => 
    array (
      0 => './tmp/err.tpl',
      1 => 1419589082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81857183654fa6ffd4e5b60-54527935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'content' => 0,
    'seo' => 0,
    'nm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54fa6ffd647b94_27681457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fa6ffd647b94_27681457')) {function content_54fa6ffd647b94_27681457($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['error']->value){?>
<div class="left">
	<?php echo $_smarty_tpl->tpl_vars['content']->value['text'];?>

	<?php if ($_smarty_tpl->tpl_vars['seo']->value['footer']){?><br clear="left">
	<div class="cp"><?php echo $_smarty_tpl->tpl_vars['seo']->value['footer'];?>
</div><?php }?>
</div>

<div class="right">
  <?php echo $_smarty_tpl->getSubTemplate ("./blocks/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['nm']->value), 0);?>

  </div>

<br clear="left"/>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['error']->value){?><div><img src="/img/404_1.png" style="width:99%;"></div><?php }?><?php }?><?php }} ?>