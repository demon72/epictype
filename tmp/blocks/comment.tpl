<b class="fs20 w100">Комментарии</b><br/><br/>
{*<ul class="tabs">
	<li><a href="#">VK</a></li>
	<li><a href="#">Google</a></li>
	{*<li><a href="#">Tab 3</a></li>
</ul>
<div class="panes">
	
	<div>
		<script src="https://apis.google.com/js/plusone.js"></script>
		<div id="comments">&nbsp;</div>
		{literal}
			<script>
				gapi.comments.render('comments', {
				    href: window.location,
				    width: '657',
				    first_party_property: 'BLOGGER',
				    view_type: 'FILTERED_POSTMOD'
				});
			</script>
		{/literal}
	</div>
	
	<div>Third tab content</div>
</div>*}	
<div>
	{literal}
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
	{/literal}
	<br clear="left"/>
</div>
{if $comment}
<style>
	{literal}
		.comments{border:1px solid #eee;width:100%;background:#eee;margin:10px 0px;}
		.com_user{color:#000;font-weight:bold;text-decoration:none}
		.com_user:hover{color:#000;font-weight:bold;text-decoration:underline}
		.com_content{padding:10px;}
		.com_footer{font-size:11px; color:#999;}
		.com_footer a{text-decoration:none}
		.com_footer a:hover{text-decoration:underline}
	{/literal}
</style>
{foreach item=com from=$comment}
<div class="comments">
<div class="com_content">
	<div><a href="/forum/profile.php?id={$com.poster_id}" class="com_user" style="color:#000;font-weight:bold">{$com.poster}</a>{if $com.type eq 'vk'}<i title="комментарий добавлен в группе вк канала" class="com_vk"></i>{/if}</div>
	<div style="margin:10px 0px">{$com.message}</div>
	<div class="com_footer">{$com.posted} <span style="margin-left:5px;"><a href="#" class="com_footer">Ответить</a></span></div>
</div>
</div>
{/foreach}
{/if}

