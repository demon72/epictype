<?php /* Smarty version Smarty-3.1.14, created on 2015-02-18 06:36:05
         compiled from "/var/www/epictype.ru/tmp/blocks/comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43640412154e4a3552a7e07-46240026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44413c8fb706b356facaebf1ed560007c9328692' => 
    array (
      0 => '/var/www/epictype.ru/tmp/blocks/comment.tpl',
      1 => 1419589086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43640412154e4a3552a7e07-46240026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment' => 0,
    'com' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54e4a3553f7831_25170554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e4a3553f7831_25170554')) {function content_54e4a3553f7831_25170554($_smarty_tpl) {?><b class="fs20 w100">Комментарии</b><br/><br/>
	
<div>
	
	<!-- Put this script tag to the <head> of your page -->
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>

	<script type="text/javascript">
	  VK.init({apiId: 4436858, onlyWidgets: true});
	</script>

	<!-- Put this div tag to the place, where the Comments block will be -->
	<div id="vk_comments"></div>
	<script type="text/javascript">
	VK.Widgets.Comments("vk_comments", {limit: 10, width: "657", attach: "*"});
	</script>
	
	<br clear="left"/>
</div>
<?php if ($_smarty_tpl->tpl_vars['comment']->value){?>
<style>
	
		.comments{border:1px solid #eee;width:100%;background:#eee;margin:10px 0px;}
		.com_user{color:#000;font-weight:bold;text-decoration:none}
		.com_user:hover{color:#000;font-weight:bold;text-decoration:underline}
		.com_content{padding:10px;}
		.com_footer{font-size:11px; color:#999;}
		.com_footer a{text-decoration:none}
		.com_footer a:hover{text-decoration:underline}
	
</style>
<?php  $_smarty_tpl->tpl_vars['com'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['com']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['com']->key => $_smarty_tpl->tpl_vars['com']->value){
$_smarty_tpl->tpl_vars['com']->_loop = true;
?>
<div class="comments">
<div class="com_content">
	<div><a href="/forum/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['com']->value['poster_id'];?>
" class="com_user" style="color:#000;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['com']->value['poster'];?>
</a><?php if ($_smarty_tpl->tpl_vars['com']->value['type']=='vk'){?><i title="комментарий добавлен в группе вк канала" class="com_vk"></i><?php }?></div>
	<div style="margin:10px 0px"><?php echo $_smarty_tpl->tpl_vars['com']->value['message'];?>
</div>
	<div class="com_footer"><?php echo $_smarty_tpl->tpl_vars['com']->value['posted'];?>
 <span style="margin-left:5px;"><a href="#" class="com_footer">Ответить</a></span></div>
</div>
</div>
<?php } ?>
<?php }?>

<?php }} ?>