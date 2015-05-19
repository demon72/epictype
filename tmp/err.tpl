{if !$error}
<div class="left">
	{$content.text}
	{if $seo.footer}<br clear="left">
	<div class="cp">{$seo.footer}</div>{/if}
</div>

<div class="right">
  {include file="./blocks/right.tpl" type=$nm}
  </div>

<br clear="left"/>
{else}{if $error}<div><img src="/img/404_1.png" style="width:99%;"></div>{/if}{/if}