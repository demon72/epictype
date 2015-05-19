{literal}
<style>
.center{height:100%;}
.page{height:100%;}
.content{height:100%;}
</style>
{/literal}
<div class="left">
{if !$pg}
<p style="margin-top:0px; padding-top:0px;">В интернет-магазине «EpicType» вы можете купить последние новинки игрового мира для Playstation 3, Playstation 2, Xbox 360, PSP, PS Vita, Nintendo Wii U, Wii, 3DS, DS, PC. Игры, приставки, аксессуары для всех консолей по самым низким ценам! В нашем магазине вы сможете найти игры для приставок компании Sony: PS3, PSP, PS2, Microsoft: Xbox 360, а также Nintendo Wii и Wii U, NDS и многие другие. Открыт предзаказ на приставки нового поколения - Microsoft Xbox One, Sony PlayStation 4.
</p>
<br/>
{*
<script type="text/javascript" src="http://www.digiseller.ru/shop/digiseller-api.js.asp?seller_id=427969" charset="utf-8"></script>
<div id="digiseller-search" class="digiseller-search"></div>
<div id="digiseller-main" class="digiseller-main"><div style="text-align:center;"><img src="http://www.digiseller.ru/shop/img/preloader.gif" alt="Загрузка..." /></div><noscript>Ваш браузер не поддерживает JavaScript.</noscript></div>
*}
{foreach item=r from=$row}
<div class="game">
	<div class="gl"><img src="{$r.img}" width="100%" height="auto"></div>
	<div class="gr gc"><div class="w75 fs20">{$r.title}</div><div class="w25 fs20"><center>{$r.price} <span class="rub">P</span><center></div><br clear="left"><p>{$r.description|truncate:200:"...":true}</p>
		<div class="w75"><a href="/shop/i{$r.id}">Подробнее</a></div>
		<div class="w25"><a href="http://www.oplata.info/asp/pay_wm.asp?id_d={$r.sbid}&ai=427969" class="buy">Купить</a></div>
	</div>
</div><br/>
{/foreach}
{$page}
{/if}
{if $pg ne ''}
<div class="w50">
	{if $row.video}
<iframe id="ytplayer" type="text/html" width="328" height="155" src="https://www.youtube.com/embed/{$row.video}?showinfo=0&autohide=1" 
frameborder="0" allowfullscreen></iframe>
{else}<img src="{$row.img}" width="100%" height="auto">{/if}
</div>
<div class="w50">
	<div class="pd10">
		Жанр: {$row.genre}<br/>
		Язык: {$row.language}<br/>
		Платформа: {$row.platform}<br/>
		Активация: {$row.activation}<br/>
		Издатель: {$row.editor}<br/>
		Дата выхода: {$row.reliz|date_format:"%d.%m.%Y"}<br/>
		
	</div>
	{*<center><a href="http://www.oplata.info/asp/pay_wm.asp?id_d={$r.sbid}&ai=427969" class="buy">Купить за {$row.price} <span class="rubs">P</span></a></center>*}
	</div>
	<br clear="left"/>
	<div class="w50">{literal}<script type="text/javascript" src="//yandex.st/share/share.js"
charset="utf-8"></script>
<div style="margin-top:10px" class="yashare-auto-init" data-yashareL10n="ru"
 data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"

></div> 

{/literal}</div>
	<div class="w50"><center><div class="bin"><a href="http://www.oplata.info/asp/pay_wm.asp?id_d={$row.sbid}&ai=427969" style="color:#fff;text-decoration:none;">Купить {$row.title} за {$row.price} <span class="rubs">P</span></a></div></center>
</div>

<br clear="left"/><br/>
<div>
{$row.description}
</div>

<br/>
{include file="./blocks/comment.tpl" type=$nm}
{/if}
</div>
<div class="right">
{include file="./blocks/right.tpl" type=$nm}
</div>

