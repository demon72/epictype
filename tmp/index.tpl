<!DOCTYPE html>
<html>
	<head>
	<title>{if $v.title}{$v.title|replace:'"':'&quot;'}{else}{$seo.h1|replace:'"':'&quot;'}{/if} / EpicType</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta property="image" content="{$seo.img}">
	<META name="keywords" CONTENT="{$seo.keyword}">
	<META name="description" CONTENT="{$seo.description|truncate:500}">
	<meta name="wot-verification" content="5c237ff34324c194df35"/>
	<meta http-equiv="Content-Language" content="ru_RU" />
	<meta name="google-translate-customization" content="6b5835febec0ac9d-a93c5978c9ae8b3e-g78ab1711296680ad-b"></meta>
	<link href="favicon.ico" type="image/x-icon" />
	{if !empty($canon)}<link rel="canonical" href="http://epictype.ru/{$canon.url}"/>{/if}
	{if !empty($canon.prev)}<link rel="prev" href="http://epictype.ru/{$canon.prev}"/>{/if}
	{if !empty($canon.next)}<link rel="next" href="http://epictype.ru/{$canon.next}"/>{/if}
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />	
  	<link rel="stylesheet" type="text/css" href="http://jquerytools.org/media/css/standalone.css"/>
  	<link rel="stylesheet" type="text/css" href="http://jquerytools.org/media/css/tabs.css"/>
	<link rel="stylesheet" href="http://flipclockjs.com/_themes/flipclockjs/css/flipclock.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	{if $metrika eq 'false'}
	<script>
		window.location.href = 'http://epictype.ru/nometrik.html';
	</script>
	{/if}
	{literal}
		<style>
			html,body{margin:0px;padding:0px;min-height:1100px;}
			html{height:105%;background-color:#000;}
			.rub{display:inline-block;font-size:99%;line-height:35%;border-bottom:1px solid #000;width:0.5em;}
			.rubs{display:inline-block;font-size:99%;line-height:35%;border-bottom:1px solid #fff;width:0.5em;}
			@media(max-width: 1000px) {
				body{font-size:16px !important;}
				.top{height:0px !important;display:none !important;}
				.left{width:97% !important;
					-webkit-box-shadow: 0px 0px 0px 0px rgba(0,0,0,0) !important;
					-moz-box-shadow: 0px 0px 0px 0px rgba(0,0,0,0) !important;
					box-shadow: 0px 0px 0px 0px rgba(0,0,0,0) !important;
					z-index: 999;}
				.v,.news{width:97% !important;}
				#move_up,.ct .w30,.mv, .right{display:none !important;}
				html,body, .cb, .ct,.tcm,.content{width:100% !important;}
				.ct{width:95% !important;}
			}
			.lh12{line-height: 1.2em;}
			.content,.body{height:100%;}
			.fs10{font-size:10px;}
			.fs11{font-size:11px;}
			.fs12{font-size:12px;}
			.fs14{font-size:14px;}
			.fs16{font-size:16px;}
			.fs18{font-size:18px;}
			.fs20{font-size:20px;}
			.fs22{font-size:22px;}
			.fs24{font-size:24px;}
			.fs30{font-size:30px;}
			.info,.right,.center,.bread,.ct,.left,.friend{background-color: #ddd;}
			.va{padding:5px 0px;}
			.ftr,.friend,.ct,.footer{width:944px;}
			.ftr,.news,.other,.text,.ct,.footer,.left,.right{padding:10px;}
			.menu,.bmenu{width:100%;}
			.tcm,.content{width:964px;}
			.ttc,.tttl{width:100%}
			.bmt a,.bmb a,.menu,.bmenu,.footer{color:#fff;}
			.menu{padding:5px;position:fixed;}
			.tttl{height:110px;}
			.ttc{height:65px;}
			.tc{width:230px;height:100%;}
			.tl{width:321px;height:100%;}
			.tr{width:410px;height:100%;}
			.tl{color:#ddd; font-size:10px; overflow:hidden;}
			.tra{width:51px !important;height:100%;}
			{width:320px;}
			.ct h1{margin:0px;padding:0px;}
			.left{width:655px;
				-webkit-box-shadow: 24px 4px 12px -13px rgba(0,0,0,0.08);
				-moz-box-shadow: 24px 4px 12px -13px rgba(0,0,0,0.08);
				box-shadow: 24px 4px 12px -13px rgba(0,0,0,0.08);
				z-index: 999;}
			.right{width:254px;margin-left:15px;}
			.ftr,.tcm,.content{margin:0px auto;}		
			.tops{height:154px;}
			
			.tcm ul{margin:0px; padding:0px; width:964px;margin:0px auto;}
			.tcm ul li{list-style-type: none;}
			.bmt,.bmb{padding:0px}
			.bmt a,.bmb a{text-decoration:none;line-height:25px;}
			.bmb{border-top:2px solid #fff;background:#4682b4;height:30px;}
			.rl{border-right:1px solid #fff;}
			.bmt,.bmb,.tcm ul li{text-align:center;}
			.center{min-height:875px;height:auto;}
			.info,.friend{border-top:1px solid #ccc;padding:10px;z-index:999;}
			.ct{border-bottom:1px solid #ccc;}
			.h30{height:29px;}
			.w5{width:5%;}
			.w10{width:10%;}
			.w9{width:9%;}
			.w15{width:15%;}
			.w20{width:20%;}
			.w19{width:19%;}
			.w25{width:25%;}
			.wp30{width:28%;}
			.w30{width:30%;}
			.w33{width:33%;}
			.w34{width:34%;}
			.w39{width:39%;}
			.w40{width:40%;}
			.w49{width:49%;}
			.w50{width:50%;}
			.w59{width:59%;}
			.w60{width:60%;}
			.wp70{width:68%;}
			.w70{width:70%;}
			.w79{width:79%;}
			.w75{width:75%;}
			.w77{width:77%;}
			.w80{width:80%;}
			.w89{width:89%;}
			.w85{width:85%;}
			.w90{width:90%;}
			.w99{width:99%;}
			.w95{width:95%;}
			.w100{width:100%;}
			.tra,.tl,.tc,.tr,.w5,.w9,.w10,.w15,.w19,.w20,.w25,.wp30,.w30,.w33,.w34,.w40,.w49,.w50,.w59,.w69,.w60,.w70,.w79,.w75,.w77,.w80,.w89,.w85,.w90,.w99,.w95,.w100,.left,.right{float:left;}
			.news p{margin:0px}
			.adsbygoogle{z-index:111;}
			.adsbygoogle,.nt iframe{width:657px;}
			.nt img{width:657px; height:auto;}
			.ni,.news h2,.pp h3,.carousel-block h3,.vv h1,.right h2,.va h3,.vc h3,.other h4,.mv h3{margin:0px; padding:0px;}
			.nr p{margin-bottom:0px;}
			.nr,.pp a,.carousel-block a,.va a,.va h3,.vc a,.vc h3,.mv a{color:#000;text-decoration:none;}
			.video,.mv{background:#eee;}
			.r{border:2px solid #ccc;}
			.other{border-bottom:3px solid #ccc;}
			.video{width:100%;border:1px solid #ddd;line-height:1em;height:150px;overflow:hidden;margin-top:3px}
			.game{width:100%;border:1px solid #ddd;height:160px;line-height:1em;padding:3px 0px;}
			.video img{margin-top: 1px;}
			.video h3{line-height:1.2em}
			.vs{padding:10px 0px;}
			.vc{padding:0px 10px;}
			.gc{padding-left:10px;}
			.news:first-child{padding-top:0px;}
			.vc,.news{float:left;cursor:pointer;}
			.video:hover{border:1px solid #ccc;}
			.bbt{border-bottom:1px solid #bbb;}
			.carousel{max-width: 1080px;width:100%;}
			.carousel-wrapper{margin: 10px 30px;overflow: hidden;position:relative;}
			.carousel-items{width: 10000px;position: relative;}
			.carousel-block{float: left;width: 250px;padding: 10px 10px 10px 0px;cursor:pointer;}
			.carousel-block img{display:block;}
			.carousel-button-left a,.carousel-button-right a{width: 25px;height: 36px;position: relative;top: 85px;cursor: pointer;text-decoration:none;}
			.panes div{display:none;border-top:0;font-size:14px;background-color:#ddd;}
			.cb{display:table;padding:0px;margin:0px;width:965px;}
			.cb>div{display:table-cell;}
			@media(max-width:2000px) and (min-width:1288px){
				#lpan{position:fixed;top:0px;}
				#move_up {
				position: fixed;
				top: 0px;
				width: 144px;
				height: 100%;
				text-align: center;
				font: bold 12px Verdana, sans-serif;
				text-decoration: none;
				color: #fff;
				padding-top: 10px;
				opacity: 0.7;
				filter: alpha(opacity=70);
				left: 0;
				} 
				#move_up:hover {
					color: #000;
					background: #bdbcb8;
					opacity: 0.8; 
					filter: alpha(opacity=80);
					z-index:999;
				}
				.elka{right:0px;z-index:999;background-image: url(http://s3.hostingkartinok.com/uploads/images/2014/01/6ebf4b874d641ab51509c2938bc1963b.png);width:317px;height:500px;position:fixed;bottom:-15px;right:-20px;}
			}
			@media(max-width:1287px){
				.tops,#google_translate_element,#lpan,#move_up{display:none;}
			}
			body{font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",sans-serif,verdana;}
			a:active{outline:none;}:focus{-moz-outline-style:none;}
			.btm{width:944px;background:#325269;line-height:1.4em;border-top:5px dashed #ddd;padding:10px;}
			.btm a{text-decoration:none;}
			.gl{width:30%;float:left;}
			.gr{width:68%;float:left;}
			.gr p{height:75px;}
			.buy{padding:3px 10px;background:#006666;color:#fff;text-decoration:none;border-radius: 3px;}
			.game{border-bottom: 1px dashed rgb(204, 204, 204);}
			.pd10{padding:10px;}
			.bin{padding:10px;background:#5182a7;color:#fff;border-radius: 5px;text-align:center;width:75%;}
			.tcm{background:#fff}
			.tsm_sub{display:none;line-height:1.6em}
			.tsm:hover .tsm_sub{display:block;font-size:16px;background-color:#000;padding:3px;padding-top:5px;width:145px;float:left}
			.tcm a{color:#fff;text-decoration:none;}
			.tcm{width: 100%;background: #000 !important;height: 30px;margin-top: -5px;padding-top:5px}
			.com_vk{background: url('/img/vk-16.png') no-repeat 0 0;width:16px;height:16px;padding:0px 8px;margin-left:5px;}
		</style> 
	{/literal}
	</head>
	<script src="//vk.com/js/api/openapi.js" type="text/javascript" charset="windows-1251"></script>
	<body>
		{capture name="adsense"}
			{literal}
				<!-- EpicType right -->
				<ins class="adsbygoogle"
					style="display:inline-block;width:254px;height:400px"
			 		data-ad-client="ca-pub-6835904328811404"
			 		data-ad-slot="9736080779">
			 	</ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			{/literal}
		{/capture}
		<div class="menu">
			<div class="tcm">
				<ul>
					<li class="w15 fs20 tsm"><a href="/">Видео</a>
						<ul class="tsm_sub">
							<a href="/"><li>Видео обзоры</li></a>
							<a href="/video"><li>Все обзоры игр</li></a>
							<a href="/video/playlist"><li>Прохождения игр</li></a>
						</ul>
					</li>
					<li class="w15 fs20"><a href="/news" style="color:#fff">Новости</a></li>
					<li class="w15 fs20  tsm"><a href="/server" style="color:#fff">Сервер</a>
						<ul class="tsm_sub">
							<a href="/donatserv"><li>Платные услуги</li></a> 
							<a href="/townypl"><li>Гайд по Towny</li></a>
						</ul></li>
					<a href="/shop" style="color:#fff"><li class="w15 fs20">Игры</li></a>
					<a href="/faq" style="color:#fff"><li class="w15 fs20">Faq</li></a>
					<a href="/forum" style="color:#fff"><li class="w15 fs20">Форум</li></a>
				</ul>
			</div>
		</div>
		<br clear="left"/>
		<div id="lpan">
{*<div id="google_translate_element"></div><script type="text/javascript">{literal}
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ru', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-49805518-1'}, 'google_translate_element');
}{/literal}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <br/>*}<a id="move_up" href="#">&#9650; Вверх</a>
			</div>
		<div class="body">
	<div class="content">
				<div class="tops">
					<div class="tttl">&nbsp;</div>
					<div class="ttc">
						<div class="tl">{$seo.seo}</div>
						<div class="tc">&nbsp;</div>	
						<div class="tr">
							<a href="/sitemap" title="Карта сайта"><div class="tra">&nbsp;</div></a>
							<a href="/feedback" title="Обратная связь"><div class="tra">&nbsp;</div></a>
							<a href="http://vk.com/epictype" rel="nofollow" target="_blank" title="Группа вконтакте"><div class="tra">&nbsp;</div></a>
							<a href="https://twitter.com/EpicTypeChannel" rel="nofollow" target="_blank" title="Страница в твиттере"><div class="tra">&nbsp;</div></a>
							<a href="https://plus.google.com/+EpicType?rel=author" rel="nofollow" target="_blank" title="Страница Google+"><div class="tra">&nbsp;</div></a>\
							<a href="http://steambuy.com/EpicType" rel="nofollow" target="_blank" title="Я покупаю игры тут"><div class="tra">&nbsp;</div></a>
							<a href="http://instagram.com/epictype_channel?ref=badge" rel="nofollow" target="_blank" title="Instagram"><div class="tra">&nbsp;</div></a>
							<a href="http://www.youtube.com/user/EpicType" rel="nofollow" target="_blank" title="Канал на youtube"><div class="tra">&nbsp;</div></a>
						</div>	
					</div>
					<br clear="left">
				</div>
				<div class="bmenu">
					<div class="bmt">
						<a href="/" class="w20 rl h30">Видео обзоры игр</a>
						<a href="/server" class="w20 rl h30">Сервер minecraft</a>
						<a href="/news" class="w20 rl h30">Новости игр</a>
						{*<a href="/faq" class="w20 rl h30">FAQ</a>*}
<a href="/shop" class="w20 rl h30">Магазин игр</a>
						<a href="/forum" class="w19 h30">Форум</a>
					</div>
					<br clear="left"/>
					{if $nm eq 'server' || $nmm eq 'townypl' || $nmm eq 'donatserv' || $nm eq 'video'} 
					<div class="bmb">
						{if $nm eq 'video'}
							<a href="/" class="w33 rl h30">Видео обзоры игр</a>
    						<a href="/video/" class="w33 rl h30">Все обзоры игр</a>
   						 	<a href="/video/playlist" class="w33 h30">Прохождения игр</a>
						{/if}
						{if $nm eq 'server' || $nmm eq 'townypl' || $nmm eq 'donatserv'} 	
							<a href="/server" class="w33 rl h30">О сервере</a> 
							<a href="/donatserv" class="w33 rl h30">Донат</a>
							<a href="/townypl" class="w33 h30">Гайд по Towny</a> 
						{/if}	
					</div>
					{/if}
				</div>
				<div class="center">
					<div class="ct">
						<div class="w70"><h1 class="fs22">{if $v.h1}{$v.h1|replace:'"':'&quot;'}{else}{$seo.h1}{/if}&nbsp;</h1></div>
						<div class="w30">
							<center>
								{if ($nm eq 'video' && ($pg ne 'main' && $pg ne 'watch')) || $nm eq 'news' || $nm eq 'shop'}<form method="get">
									<input type="text" style="width:200px;" name="search" value="{$smarty.get.search}"> <input type="submit" value="Найти">
								</form>
								{else}
								{literal}
									<div class="ya-site-form ya-site-form_inited_no" onclick="return {'action':'http://epictype.ru/search','arrow':false,'bg':'transparent','fontsize':16,'fg':'#000000','language':'ru','logo':'rb','publicname':'игровой канал EpicType','suggest':true,'target':'_blank','tld':'ru','type':2,'usebigdictionary':true,'searchid':2168875,'webopt':false,'websearch':false,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'','input_placeholderColor':'#000000','input_borderColor':'#7f9db9'}"><form action="http://yandex.ru/sitesearch" method="get" target="_blank"><input type="hidden" name="searchid" value="2168875"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="text" width="200px" name="text" value=""/><input type="submit" value="Поиск"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
								{/literal}{/if}
							</center>
						</div>
						<br clear="left"/>
						<div class="bread">
							<a href="/">Главная</a>
							{foreach name=i item=b from=$bread}
								{if !$smarty.foreach.i.last}/ <a href="{$b.url}">{$b.title}</a>{else} / {$b.title}{/if}
							{/foreach}
						</div>
					</div>
					<div class="cb">
						<div>{if $seo.header}{$seo.header}{/if}</div>
						{include file="$nm.tpl"}
						{if $seo.footer}{$seo.footer}{/if}
					</div>					
				</div>
				<div class="bottom">
					{if $info ne ''}<div class="info">{$info}</div>{/if}
				<div class="friend">
					<a href="http://vk.com/igorellichannel">Каналы Igorelli</a>
				</div>
				</div>
				<div class="btm">
					{if $metrika ne 'false'}
							{include file="./blocks/bottom.tpl" type=$nm}
						{/if}
						{*{$mem}*}		
				</div>
				
			</div>		
			
			
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		{literal}
			<script>
				$(function(){$("ul.tabs").tabs("div.panes > div");});
				$(document).on('click',".carousel-button-right",function(){var carusel=$(this).parents('.carousel');right_carusel(carusel);return false});$(document).on('click',".carousel-button-left",function(){var carusel=$(this).parents('.carousel');left_carusel(carusel);return false});function left_carusel(carusel){var block_width=$(carusel).find('.carousel-block').outerWidth();$(carusel).find(".carousel-items .carousel-block").eq(-1).clone().prependTo($(carusel).find(".carousel-items"));$(carusel).find(".carousel-items").css({"left":"-"+block_width+"px"});$(carusel).find(".carousel-items").animate({left:"0px"},200);$(carusel).find(".carousel-items .caro�el-block").eq(-1).remove()}function right_carusel(carusel){var block_width=$(carusel).find('.carousel-block').outerWidth();$(carusel).find(".carousel-items").animate({left:"-"+block_width+"px"},200);setTimeout(function(){$(carusel).find(".carousel-items .carousel-block").eq(0).clone().appendTo($(carusel).find(".carousel-items"));$(carusel).find(".carousel-items .carousel-block").eq(0).remove();$(carusel).find(".carousel-items").css({"left":"0px"})},300)}function auto_right(carusel){setTimeout(function(){right_carusel(carusel);auto_right(carusel)},3000)}
				$(document).ready(function(){$("ul#topnav li").hover(function(){$(this).css({'background':'#1376c9 url(topnav_active.gif) repeat-x'});$(this).find("span").show()},function(){$(this).css({'background':'none'});$(this).find("span").hide()})});</script><script>jQuery(function(){jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>150)jQuery('a#move_up').fadeIn(600);else jQuery('a#move_up').fadeOut(600)});jQuery('a#move_up').click(function(){jQuery('body,html').animate({scrollTop:0},1000);return false})});</script>
			</script>
			<style>
			{*.body{background: url(/img/fon.png) no-repeat;  background-position:center 0px;background-color:#000;margin-top:13px;}*}			
			@media(min-width: 1024px) {
				.body{background: url(/img/fon.png) no-repeat;  background-position:center 0px;background-color:#000;margin-top:15px;}
			}
			.carousel-button-left a{float:left;background:url(/img/carousel-left.png);}
			.carousel-button-right a{float:right;background:url(/img/carousel-right.png);}	
		</style>
		{/literal}
	</body>
</html>