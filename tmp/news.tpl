{*{$row.title}<br/><br/>
	{$row.preview}
	{$row.text}
	{$row.source}<br/><br/>
	{$row.t_add}<br/><br/>*}
<style type="text/css">
	{literal}
		h2{margin:0px;padding:0px;font-size:20px;}
		@media(max-width: 1024px) {
			h2{margin:0px;padding:0px;font-size:24px !important;}
		}
		.v{height:auto; width:650px}
		.n{color:#000; text-decoration: none}
		.vc{cursor:pointer}
		.left p:first-child{padding-top:0px; margin-top:0px}
	{/literal}
</style>
{if empty($pg)}
<div class="left">

	{if !$smarty.get.search}	
	<div class="vcenter">
		{for $i=0 to 5}
			<div class="v">
				
				<div class="news" onclick="history.pushState({ldelim}{rdelim}, '{$seo.title}', '/{$nm}/{$pg}'); document.location.href='/news/{$row.$i.id}';">
					<h2 class="fs18">{$row.$i.title}</h2>
					{$row.$i.preview}
					<a href="/news/{$row.$i.id}">Читать полностью...</a>
				</div>
			
			</div>
			<br clear="left"/>
			<br clear="left"/>
	{/for}
	<div class="v">
			{literal}
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- et content -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:657px;height:150px"
			     data-ad-client="ca-pub-6835904328811404"
			     data-ad-slot="5199646373"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			{/literal}
			</div>
	{for $i=6 to 12}
			<div class="v">
				
				<div class="news" onclick="history.pushState({ldelim}{rdelim}, '{$seo.title}', '/{$nm}/{$pg}'); document.location.href='/news/{$row.$i.id}';">
					<h2 class="fs18">{$row.$i.title}</h2></a>
					{$row.$i.preview}
					<a href="/news/{$row.$i.id}">Читать полностью...</a>
				</div>
			
			</div>
			<br clear="left"/>
			<br clear="left"/>
	{/for}
	{else}
		<div class="vcenter">
		{foreach item=r from=$row}
			<div class="v">
				
				<div class="news" onclick="history.pushState({ldelim}{rdelim}, '{$seo.title}', '/{$nm}/{$pg}'); document.location.href='/news/{$r.id}';">
					<h2>{$r.title}</h2>
					{$r.preview}
					<div class="w2"><img src="/img/view.png">&nbsp;{$r.view} &nbsp;&nbsp;&nbsp;<img src="/img/com.png">&nbsp;{$comment[$r.id]}</div><div class="w8" ><a href="/news/{$r.id}" style="float:right">Читать далее</a></div>
				</div>
				
			</div>
			<br clear="left"/>
			
	{/foreach}
	{/if}
	<div class="v">
			{literal}
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- et content -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:657px;height:150px"
			     data-ad-client="ca-pub-6835904328811404"
			     data-ad-slot="5199646373"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			{/literal}
			</div><br clear="left">
	{if $left}<a href="/news/?pages={$left}" style="margin-right:5px;font-size: 19px;
	overflow: hidden;">&larr;&nbsp;Влево</a>{/if}{if $right}<a href="/news/?pages={$right}" style="margin-left:5px;font-size: 19px;
	overflow: hidden;">Вправо&nbsp;&rarr;</a>{/if}<br/>
	{$page}
	</div>
</div>
{else}
<div class="left nt">
{*<h1 class="ni fs24">{$row.title}</h1>*}
{$row.preview}
{$row.text}
{if $row.author}Автор: {$row.author}<br/>{/if}
Опубликовано: {$row.t_add|date_format:"%d.%m.%Y в %H:%M"}<br/>
Просмотров: {$row.view}<br/>
Источник: <a href="{$row.source}" target="_blank" rel="nofollow">{$row.source}</a>
<br><br>
{literal}
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
{/literal}


<br clear="left">
<div class="vcenter">
<h2>Другие новости</h2>
		{foreach item=r from=$on}
			<a href="/news/{$r.id}" class="on">{$r.title}</a>
			<br clear="left"/>
		{/foreach}

	</div>
	<br clear="left"/>
{include file="./blocks/comment.tpl" type=$nm}
</div>

{/if}
<div class="right">
{*<div style="width:213px; height:413px;">{$smarty.capture.adsense}</div>
  <div style="width:213px; height:413px;">{$smarty.capture.adsense}</div>

<h2>Видео</h2>
<br clear="left">
{foreach item=p from=$ov}
	<a style="color:#000; text-decoration:none" href="/video/watch?v={$p.url}">
	<img src="http://i1.ytimg.com/vi/{$p.url}/mqdefault.jpg" style="width:100%" >					
	<br><h3 style="padding:0px; margin:0px">{$p.title}</h3></a>	
	<br clear="left">
{/foreach}
{$smarty.capture.adsense}
<br clear="left">
<h2>Плейлисты</h2>
<br clear="left">
{foreach item=p from=$pv}
	<a style="color:#000; text-decoration:none;" class="p" href="/video/playlist?p={$p.url}">
	<img src="http://i1.ytimg.com/vi/{$p.logo}/mqdefault.jpg" style="width:100%" >					
	<br><h3 style="padding:0px; margin:0px">{$p.title}</h3></a>	
	<br clear="left">
{/foreach}*}
{include file="./blocks/right.tpl" type=$nm}
</div>
