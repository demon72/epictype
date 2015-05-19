<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://flipclockjs.com/_themes/flipclockjs/js/flipclock/flipclock.js"></script>
<div class="left">
	<div class="clock" style="margin:2em;"></div>
	<div class="message"></div>
	<div id="vk_post_-41322703_35641"></div>
	{literal}
	<script type="text/javascript">  (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//vk.com/js/api/openapi.js?115"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'vk_openapi_js'));  (function() {    if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post("vk_post_-41322703_35641", -41322703, 35641, 'o3JUo7kr8ZlJJP6_v9VhiKKrJSXp', {width: 652})) setTimeout(arguments.callee, 50);  }());</script>
	{/literal}
	{if $no ne true}
		{if !$error}
			{if $load eq '1' || isset($smarty.get.rand)}
				
				<style>{literal}
				.win, .upd{display:none}
				.upd{border-radius:5px;border:1px solid #bbb;padding:10px 15px; width:69px;margin-left:45%;margin-top:10px;background:#eee;cursor:pointer}
				.upd:hover{border:1px solid #aaa;}
				{/literal}</style>
				<center><div class="load">Определяем победителя конкурса...<br/>
				<div id="loaderImage"></div></div></center>
				{literal}<script>function startAnimation(){document.getElementById("loaderImage").style.backgroundImage="url("+cImageSrc+")";document.getElementById("loaderImage").style.width=cWidth+"px";document.getElementById("loaderImage").style.height=cHeight+"px";FPS=Math.round(100/cSpeed);SECONDS_BETWEEN_FRAMES=1/FPS;cPreloaderTimeout=setTimeout("continueAnimation()",SECONDS_BETWEEN_FRAMES/1e3)}function continueAnimation(){cXpos+=cFrameWidth;cIndex+=1;if(cIndex>=cTotalFrames){cXpos=0;cIndex=0}if(document.getElementById("loaderImage"))document.getElementById("loaderImage").style.backgroundPosition=-cXpos+"px 0";cPreloaderTimeout=setTimeout("continueAnimation()",SECONDS_BETWEEN_FRAMES*1e3)}function stopAnimation(){clearTimeout(cPreloaderTimeout);cPreloaderTimeout=false}function imageLoader(e,t){clearTimeout(cImageTimeout);cImageTimeout=0;genImage=new Image;genImage.onload=function(){cImageTimeout=setTimeout(t,0)};genImage.onerror=new Function("alert('Could not load the image')");genImage.src=e}var cSpeed=9;var cWidth=64;var cHeight=68;var cTotalFrames=29;var cFrameWidth=64;var cImageSrc="http://epictype.ru/img/sprites.gif";var cImageTimeout=false;var cIndex=0;var cXpos=0;var cPreloaderTimeout=false;var SECONDS_BETWEEN_FRAMES=0;new imageLoader(cImageSrc,"startAnimation()")</script>{/literal}
			{/if}
			<div class="win">
			<fieldset><legend><h3>Победитель</h3></legend>
			<div class="w20">
				<img src="{$users.info.photo_100}">
				{if $save eq 'true'}
					<form method="POST">
						<input type="hidden" name="member" value="{$users.member}">
						<input type="hidden" name="vk_id" value="{$users.info.uid}">
						<input type="hidden" name="first_name" value="{$users.info.first_name}">
						<input type="hidden" name="last_name" value="{$users.info.last_name}">
						<input type="hidden" name="domain" value="{$users.info.domain}">
						<input type="hidden" name="photo_100" value="{$users.info.photo_100}">
						{if $load eq '1'}<input style="margin-left:9px" type="submit" name="go" value="Сохранить">{/if}
					</form>
				{/if}
			</div>
			
			<div class="w50">
				{$users.info.first_name}<br>
				{$users.info.last_name}<br/>
				<a href="http://vk.com/{$users.info.domain}" target="_blank">https://vk.com/{$users.info.domain}</a><br/>
				{if $users.member eq '1'}Подписчик группы Epic Type<br/>Cделал репост{else}Не подписан на группу Epic Type{/if}
			</div>
			</fieldset>	
			{if $load eq '1' || isset($smarty.get.rand)}
		<div class="upd" onclick="location.reload();">Обновить</div>
	{/if}
	</div>
	
{if $load eq '1' || isset($smarty.get.rand)}
{literal}<script>$(document).ready(function(){setTimeout(function () {$('.load').hide();$('.upd').show();$('.win').show();},12000);});</script>{/literal}		
{/if}
		{else}
			<fieldset><legend><h3 style="color:#CC3300">Error</h3></legend>{$error}</fieldset>
		{/if}
	{/if}
</div>
<div class="right">
{include file="./blocks/right.tpl" type=$nm}
</div>	