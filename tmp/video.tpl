<div class="left">
	{if $pg eq 'main'}
		<div class="mv r">
			{if $me.text ne ''}
				<div style="height:400px">
					{$me.text}<div class="text"><h3>{$me.title}</div> 
				</div>
			{else}
				<iframe width="100%" height="350" src="//www.youtube.com/embed/{$main.url}" frameborder="0" allowfullscreen></iframe>
				{*{include file="./blocks/time.tpl" type=$nm}*}
				<div class="text">
				<a href="/video/watch?v={$main.url}"><h3>{$main.title}</h3></a>
			</div>
		{/if}
		</div>
		<div class="other fs20"><h4>Последние добавленные видео</h4></div>
		<div class="vs">
			{for $i=0 to 6}	
				<div class="video" onclick="history.pushState({ldelim}{rdelim}, '{$seo.title}', '/{$nm}/{$pg}'); document.location.href='/video/watch?v={$row.$i.url}';">
					<div class="w40"> <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject" > 
						<img itemprop="contentUrl" src="http://i1.ytimg.com/vi/{$row.$i.url}/mqdefault.jpg" style="width:100%" alt="{$row.$i.title}" title="{$row.$i.title}">	
						</span></div>
					<div class="w60"><div class="vc">
							<a itemprop="url" href="/video/watch?v={$row.$i.url}">
								<h3 itemprop="name">Обзор игры {$row.$i.title}</h3>
							</a>
							<span itemprop="description" style="line-height:1.3em;overflow:hidden;">{$row.$i.content|replace:'"':'&quot;'|truncate:200:"...":true}</span>
						</div>
					</div>
					<br clear="left"/>
				</div>
				<br clear="left"/>
			{/for}
			
			{literal}
			
			<!-- et content -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:657px;height:150px"
			     data-ad-client="ca-pub-6835904328811404"
			     data-ad-slot="5199646373"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			{/literal}
			<br clear="left">
			<br clear="left">
			  
			{for $i=7 to 13}
				<div class="video" onclick="history.pushState({ldelim}{rdelim}, '{$seo.title|replace:'"':'&quot;'}', '/{$nm}/{$pg}'); document.location.href='/video/watch?v={$row.$i.url}';">
					<div class="w40">
						<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject" > 
							<img itemprop="contentUrl" src="http://i1.ytimg.com/vi/{$row.$i.url}/mqdefault.jpg" style="width:100%" alt="{$row.$i.title}" title="{$row.$i.title}">	
						</span>
					</div>		
					<div class="w60">
						<div class="vc">
							<a itemprop="url" href="/video/watch?v={$row.$i.url}">
								<h3 itemprop="name">Обзор игры {$row.$i.title}</h3>
							</a>
							<span itemprop="description" style="line-height:1.3em;overflow:hidden;">{$row.$i.content|replace:'"':'&quot;'|truncate:200:"...":true}</span>
						</div>
					</div>
					<br clear="left"/>
				</div>
				<br clear="left"/>
			{/for}
			
			{literal}
			
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
	{/if}
	{if $pg eq 'watch'}
		<div class="vv">
			<div itemscope itemtype="http://schema.org/VideoObject" >  
				<iframe width="100%" height="420px" src="//www.youtube.com/embed/{$smarty.get.v}" frameborder="0" allowfullscreen></iframe>
					<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
					<div class="yashare-auto-init" data-yashareL10n="ru"
					data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"></div>
 


				{*<h1 class="fs22">{$v.title}</h1>*}
				<div class="text">{$v.content}</div>
			</div>
		</div>

		<div class="">
			<span class="fs22">Похожие видео:</span>
			<div class="carousel shadow"> 
				<div class="carousel-button-left"><a href="#"></a></div> 
				<div class="carousel-button-right"><a href="#"></a></div> 
					
				<div class="carousel-wrapper"> 
					
					<div class="carousel-items"> 
						{foreach item=p from=$ov}
							<div class="carousel-block" onclick="history.pushState({ldelim}{rdelim}, '{$seo.title|replace:'"':'&quot;'}', '/{$nm}/{$pg}'); document.location.href='/video/watch?v={$p.url}{if $smarty.get.p}&p={$smarty.get.p}{/if}">
								<img src="http://i1.ytimg.com/vi/{$p.url}/mqdefault.jpg" style="width:200px" alt="{$p.title}" title="{$p.title}"><br>
								<a href="/video/watch?v={$p.url}{if $smarty.get.p}&p={$smarty.get.p}{/if}"><h3 style="padding:0px; margin:0px">{$p.title}</h3></a>	
							</div>
						{/foreach}
					</div>
				</div>
			</div> 
		</div>
		{include file="./blocks/comment.tpl" type=$nm}
	{/if}
	{if !$pg}
		{if $row|is_array}
			<div itemscope itemtype="http://schema.org/VideoObject" >
				{foreach $row as $r}
					<div style="width:33%; height:200px; float:left;" class="pp">
						<a itemprop="url" href="/video/watch?v={$r.url}" class="fs14 lh12">
							<meta itemprop="isFamilyFriendly" content="True">
							<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject" >
							<img itemprop="contentUrl" src="http://i1.ytimg.com/vi/{$r.url}/mqdefault.jpg" style="width:97%" alt="{$r.title}" title="{$r.title}"><br/>
							<center><h3 itemprop="name">Обзор игры {$r.title}</h3></center>
						</a>
					</div>
				{/foreach}
				<br clear="left">
				{$page}
			</div>
		{else}
			{$row}
		{/if}
	{/if}
	{if $pg eq 'playlist' && !$smarty.get.p}
		{if $row|is_array}
			{foreach $row as $r}
				<div style="width:33%; height:175px; float:left;" class="pp">
					<a href="/video/playlist?p={$r.url}" class="fs14 lh12">
						<img src="http://i1.ytimg.com/vi/{$r.logo}/mqdefault.jpg" style="width:95%" alt="{$r.title}" title="{$r.title}"><br/>
						<center><b>{$r.title}</b></center>
					</a>
				</div>
				{/foreach}
				<br clear="left">
				{$page}
			{else}
				{$row}
		{/if}
	{/if}
	{if $pg eq 'playlist' && $smarty.get.p}
		<div class="chc">{$v.text}</div>
		<div class="chc"><br/><b><span style="font-size:20px">Видео</span></b></div><br/>
		<div itemscope itemtype="http://schema.org/VideoObject" >
		{foreach $row as $r}
			<div style="width:33%; height:200px; float:left;" class="pp">
				<a itemprop="url" href="/video/watch?v={$r.url}&p={$smarty.get.p}" class="fs14 lh12">
					<meta itemprop="isFamilyFriendly" content="True">
					<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject" >
					<img itemprop="contentUrl" src="http://i1.ytimg.com/vi/{$r.url}/mqdefault.jpg" style="width:95%" alt="{$r.title}" title="{$r.title}"><br/>
					<center><h3 itemprop="name">{$r.title}</h3></center>
				</a>
			</div>
		{/foreach}
		{$page}
	</div>
	{/if}
</div>
<div class="right">
{include file="./blocks/right.tpl" type=$nm}
</div>


