<div>
{if $ng eq 1}
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-c" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="270" height="375"><param name="movie" value="http://vmirepozitiva.ru/flash/christmass_clock270x375.swf"><param name="quality" value="high"><param name="wmode" value="transparent"><embed src="http://vmirepozitiva.ru/flash/christmass_clock270x375.swf" quality="high" wmode="transparent"  pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="270" height="375"></embed></object></div>
{/if}
{if $nm eq 'video' && $pg eq 'main'}
	{capture name="about"}
		{literal}
			
			<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,gplus" data-yashareTheme="counter"></div> 
		{/literal}
		<h2>О канале</h2>{$about}<br/><br/>
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
	{/capture}
	{if $pg eq 'main'}
		{$smarty.capture.about}
		<h2 class="fs20 bbt">Активные прохождения</h2>
		<br clear="left"/>
		{foreach item=p from=$playlist}
			<div class="va">
				<img src="http://i1.ytimg.com/vi/{$p.logo}/mqdefault.jpg" style="width:100%" alt="{$p.title}" title="{$p.title}">
				<a href="/video/playlist?p={$p.url}"><h3>{$p.title}</h3></a>
			</div>
			<br clear="left">
				{$page}
		{/foreach}
	{/if}
	

{/if}

{if $nm eq 'video' && (pg eq 'playlist' || $pg eq '')}
{*Активные прохождения<br>
Завершенные прохождения*}
<br clear="left">
{/if}

{if $pg ne 'main'}
<h2 class="fs20 bbt">Плейлист</h2> 
<br clear="left">
<a class="nr" href="/video/playlist?p={$playlist.url}">
<img src="http://i1.ytimg.com/vi/{$playlist.logo}/mqdefault.jpg" style="width:100%" alt="{$playlist.title}" title="{$playlist.title}">					
<br><h3 style="padding:0px; margin:0px">{$playlist.title}</h3></a>	
<a href="/video/playlist">Все плейлисты</a>
<br clear="left">
<br clear="left">
<h2 class="fs20 bbt">Прохождения</h2>
<br clear="left"> 
<a class="nr" href="/video/watch?v={$vv.url}">
<img src="http://i1.ytimg.com/vi/{$vv.url}/mqdefault.jpg" style="width:100%" alt="{$vv.title}" title="{$vv.title}">					
<br><h3 style="padding:0px; margin:0px">{$vv.title}</h3></a>	
<a href="/video">Все видео</a>
<br clear="left"><br clear="left">
<h2 class="fs20 bbt">Новости</h2> 
<br clear="left">
<a class="nr" href="/news/{$news.id}">		
<h3 style="padding:0px; margin:0px">{$news.title}</h3>{$news.preview}</a>	
<a href="/news">Все новости</a>
<br clear="left"><br clear="left">
{if $ads eq '1'}{$smarty.capture.adsense}{else}<a href="https://www.digitalocean.com/?refcode=5202d833b53e" style="text-decoration:none;"><img src="/img/do.jpg" title="digital ocean"></a>{/if}
<br clear="left"/><br clear="left"/>
{/if}

{if $nm eq 'server' || $nm eq 'townypl' || $nm eq 'donatserv'}
{literal}
<script type="text/javascript" src="//vk.com/js/api/openapi.js?113"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width:"254", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 41322703);
</script>
{/literal}
{/if}
{if $ng eq 1}
<div class="elka">&nbsp;</div>
{/if}
