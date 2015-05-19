<?php

define('FORUM_HOOKS_LOADED', 1);

$forum_hooks = array (
  'ps_handle_img_tag_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_image\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_image\',
\'dependencies\'	=> array (
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$is_signature && $forum_user[\'show_img\'] == \'0\') {
				$img_tag = \'<a href="\'.$url.\'" class="fancy_zoom">&lt;\'.$lang_common[\'Image link\'].\'&gt;</a>\';
			}

			if (!$is_signature && $forum_user[\'show_img\'] != \'0\') {

				// PIC.LG.UA
				if (FALSE !== strpos($url, \'pic.lg.ua\')) {
					$preview_url = preg_replace(\'!^(http://pic.lg.ua/x)/(\\d+)/(.*)/(sm|md)(_.+)!is\', \'${1}/${2}/${3}/pv${5}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'imageshack.us\')) {
					// IMAGESHACK
					$preview_url = preg_replace(\'!^(http://img\\d+\\.imageshack\\.us)/(img\\d+)/(\\d+)/(.+)\\.th\\.(.+)!is\', \'${1}/${2}/${3}/${4}.${5}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'radikal.ru\')) {
					// RADIKAL
					$preview_url = preg_replace(\'!^(http://.+\\.radikal.ru)/(.*)/(.*)(t|x)\\.(jpg|jpeg|png|gif|bmp|tif|tiff)!is\', \'${1}/${2}/${3}.${5}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'photobucket.com\')) {
					// PHOTOBUCKET
					$preview_url = preg_replace(\'!^(http://i\\d+\\.photobucket\\.com/albums)/(x\\d+)/(.+)/th_(.+)!is\', \'${1}/${2}/${3}/${4}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'piccy.info\')) {
					// PICCY.INFO
					$preview_url = preg_replace(\'!^(http://.*piccy.info/.*/\\d+/\\d+/\\d+/)(.*)_(240|500|800)(\\..*)!is\', \'${1}${2}${4}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'imagepost.ru\')) {
					// IMAGEPOST.RU
					$preview_url = preg_replace(\'!^(http://)(imagepost\\.ru)/(thumbs)/(\\d+)/(.*)!is\', \'${1}${2}/images/${4}/${5}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'savepic.\')) {
					// SAVEPIC
					$preview_url = preg_replace(\'!^(http://savepic\\.)(org|net)/(\\d+)m(\\..+)!is\', \'${1}${2}/${3}${4}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'imageshost.ru\')) {
					// IMAGESHOST
					$preview_url = preg_replace(\'!^(http://img\\d+\\.imageshost\\.ru/img/\\d+/\\d+/\\d+/image_)(.*)_small\\.(jpg|jpeg|png|gif|bmp|tif|tiff)!is\', \'${1}${2}.${3}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'ipicture.ru\')) {
					// IPICTURE.RU
					$preview_url = preg_replace(\'!^(http://s\\d+\\.ipicture\\.ru/uploads/\\d+/)(thumbs)/(.*)\\.(jpg|jpeg|png|gif|bmp|tif|tiff)!is\', \'${1}${3}.${4}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ft_js_include' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

switch ($forum_config[\'o_pun_jquery_include_method\'])
			{
				case PUN_JQUERY_INCLUDE_METHOD_GOOGLE_CDN:
					$ext_pun_jquery_url = \'//ajax.googleapis.com/ajax/libs/jquery/\'.PUN_JQUERY_VERSION.\'/jquery.min.js\';
					break;

				case PUN_JQUERY_INCLUDE_METHOD_MICROSOFT_CDN:
					$ext_pun_jquery_url = \'//ajax.aspnetcdn.com/ajax/jQuery/jquery-\'.PUN_JQUERY_VERSION.\'.min.js\';
					break;

				case PUN_JQUERY_INCLUDE_METHOD_JQUERY_CDN:
					$ext_pun_jquery_url = \'//code.jquery.com/jquery-\'.PUN_JQUERY_VERSION.\'.min.js\';
					break;

				case PUN_JQUERY_INCLUDE_METHOD_LOCAL:
				default:
					$ext_pun_jquery_url = $ext_info[\'url\'].\'/js/jquery-\'.PUN_JQUERY_VERSION.\'.min.js\';
					break;
			}

			$forum_loader->add_js($ext_pun_jquery_url, array(\'type\' => \'url\', \'async\' => false, \'weight\' => 75));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_loader->add_js($ext_info[\'url\'].\'/js/fancy_jquery_addons.min.js\', array(\'type\' => \'url\', \'async\' => false, \'weight\' => 77));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

switch ($forum_config[\'o_nya_jquery_ui_include_method\'])
			{
				case JQUERY_UI_INCLUDE_METHOD_GOOGLE:
					$ext_nya_jquery_ui_url = \'//jquery-ui.googlecode.com/svn/tags/\'.JQUERY_UI_VERSION.\'/ui/minified/\';
					break;

				case JQUERY_UI_INCLUDE_METHOD_LOCAL:
				default:
					$ext_nya_jquery_ui_url = $ext_info[\'url\'].\'/js/\';
					break;
			}
			
			if (!empty($ext_jQuery_UI->UI_js))
			{
				foreach ($ext_jQuery_UI->UI_js as $name => $ui_url)
				{
					$forum_loader->add_js($ext_nya_jquery_ui_url.$ui_url.\'.js\', array(\'type\' => \'url\', \'async\' => false, \'weight\' => 77));
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_row_pre_display' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ((isset($vote_results) || isset($vote_form)) && ($cur_post[\'id\'] == $cur_topic[\'first_post_id\'])) {
				$pun_poll_block = \'\';
				if (!empty($vote_form)) {
					$pun_poll_block	.= $vote_form;
				}
				$pun_poll_block	.= $vote_results;

				if (isset($forum_page[\'message\'][\'edited\'])) {
					array_insert($forum_page[\'message\'], \'edited\', $pun_poll_block, \'pun_poll\');
				} else if (isset($forum_page[\'message\'][\'signature\'])) {
					array_insert($forum_page[\'message\'], \'signature\', $pun_poll_block, \'pun_poll\');
				} else {
					$forum_page[\'message\'][\'pun_poll\'] = $pun_poll_block;
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($cur_post[\'id\'] == $cur_topic[\'first_post_id\']) {
				if ($forum_config[\'o_fancy_addthis_button_gplus\'] == \'1\' ||
					$forum_config[\'o_fancy_addthis_button_twitter\'] == \'1\' ||
					$forum_config[\'o_fancy_addthis_button_facebook\'] == \'1\') {

					$forum_page[\'message\'][\'fancy_addthis_topic_block\'] = \'
						<div id="fancy_addthis_topic_toolbox">
							<table cellspacing="0" cellpadding="0" class="addthis_toolbox addthis_default_style" addthis:url="\'.forum_link($forum_url[\'topic\'], array($id, sef_friendly($cur_topic[\'subject\']))).\'" addthis:title="\'.forum_htmlencode($cur_topic[\'subject\']).\'">
							<tbody>
								<tr valign="bottom">\';

					if ($forum_config[\'o_fancy_addthis_button_facebook\'] == \'1\'):
						$forum_page[\'message\'][\'fancy_addthis_topic_block\'] .= \'<td><a class="addthis_button_facebook_like" fb:like:locale="en_US"></a></td>\';
					endif;

					if ($forum_config[\'o_fancy_addthis_button_twitter\'] == \'1\'):
						$forum_page[\'message\'][\'fancy_addthis_topic_block\'] .= \'<td><a class="addthis_button_tweet" tw:count="none"></a></td>\';
					endif;

					if ($forum_config[\'o_fancy_addthis_button_gplus\'] == \'1\'):
						$forum_page[\'message\'][\'fancy_addthis_topic_block\'] .= \'<td><a class="addthis_button_google_plusone" g:plusone:count="false" g:plusone:size="medium"></a></td>\';
					endif;

					$forum_page[\'message\'][\'fancy_addthis_topic_block\'] .= \'
								</tr>
							</tbody>
							</table>
						</div>\';
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'es_essentials' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

define(\'PUN_JQUERY_INCLUDE_METHOD_LOCAL\', 0);
			define(\'PUN_JQUERY_INCLUDE_METHOD_GOOGLE_CDN\', 1);
			define(\'PUN_JQUERY_INCLUDE_METHOD_MICROSOFT_CDN\', 2);
			define(\'PUN_JQUERY_INCLUDE_METHOD_JQUERY_CDN\', 3);

			define(\'PUN_JQUERY_VERSION\', \'1.7.1\');

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].DIRECTORY_SEPARATOR.\'helper.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

define(\'JQUERY_UI_INCLUDE_METHOD_LOCAL\', 0);
			define(\'JQUERY_UI_INCLUDE_METHOD_GOOGLE\', 1);

			define(\'JQUERY_UI_VERSION\', \'1.8.16\');
			require $ext_info[\'path\'].\'/ui.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aop_features_gzip_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_pun_jquery)) {
				if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/lang.php\';
				}
			}

			// Reset counter
			$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;
?>
			<div class="content-head">
				<h2 class="hn"><span><?php echo sprintf($lang_pun_jquery[\'Setup jquery\'], PUN_JQUERY_VERSION) ?></span></h2>
			</div>

			<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
				<legend class="group-legend"><strong><?php echo sprintf($lang_pun_jquery[\'Setup jquery legend\'], PUN_JQUERY_VERSION) ?></strong></legend>
				<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<legend><span><?php echo $lang_pun_jquery[\'Include method\'] ?></span></legend>
					<div class="mf-box">
						<div class="mf-item">
							<span class="fld-input"><input type="radio" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_jquery_include_method]" value="<?php echo PUN_JQUERY_INCLUDE_METHOD_LOCAL; ?>"<?php if ($forum_config[\'o_pun_jquery_include_method\'] == PUN_JQUERY_INCLUDE_METHOD_LOCAL) echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_jquery[\'Include method local label\'] ?></label>
						</div>
						<div class="mf-item">
							<span class="fld-input"><input type="radio" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_jquery_include_method]" value="<?php echo PUN_JQUERY_INCLUDE_METHOD_GOOGLE_CDN; ?>"<?php if ($forum_config[\'o_pun_jquery_include_method\'] == PUN_JQUERY_INCLUDE_METHOD_GOOGLE_CDN) echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_jquery[\'Include method google label\'] ?></label>
						</div>
						<div class="mf-item">
							<span class="fld-input"><input type="radio" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_jquery_include_method]" value="<?php echo PUN_JQUERY_INCLUDE_METHOD_MICROSOFT_CDN; ?>"<?php if ($forum_config[\'o_pun_jquery_include_method\'] == PUN_JQUERY_INCLUDE_METHOD_MICROSOFT_CDN) echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_jquery[\'Include method microsoft label\'] ?></label>
						</div>
						<div class="mf-item">
							<span class="fld-input"><input type="radio" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_jquery_include_method]" value="<?php echo PUN_JQUERY_INCLUDE_METHOD_JQUERY_CDN; ?>"<?php if ($forum_config[\'o_pun_jquery_include_method\'] == PUN_JQUERY_INCLUDE_METHOD_JQUERY_CDN) echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_jquery[\'Include method jquery label\'] ?></label>
						</div>
					</div>
				</fieldset>
			</fieldset>

<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_nya_jquery_ui)) {
				if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/lang.php\';
				}
			}

			// Reset counter
			$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;
?>
			<div class="content-head">
				<h2 class="hn"><span><?php echo sprintf($lang_nya_jquery_ui[\'Setup jquery\'], JQUERY_UI_VERSION) ?></span></h2>
			</div>

			<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
				<legend class="group-legend"><strong><?php echo sprintf($lang_nya_jquery_ui[\'Setup jquery legend\'], JQUERY_UI_VERSION) ?></strong></legend>
				<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<legend><span><?php echo $lang_nya_jquery_ui[\'Include method\'] ?></span></legend>
					<div class="mf-box">
						<div class="mf-item">
							<span class="fld-input"><input type="radio" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[nya_jquery_ui_include_method]" value="<?php echo JQUERY_UI_INCLUDE_METHOD_LOCAL; ?>"<?php if ($forum_config[\'o_nya_jquery_ui_include_method\'] == JQUERY_UI_INCLUDE_METHOD_LOCAL) echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_nya_jquery_ui[\'Include method local label\'] ?></label>
						</div>
						<div class="mf-item">
							<span class="fld-input"><input type="radio" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[nya_jquery_ui_include_method]" value="<?php echo JQUERY_UI_INCLUDE_METHOD_GOOGLE; ?>"<?php if ($forum_config[\'o_nya_jquery_ui_include_method\'] == JQUERY_UI_INCLUDE_METHOD_GOOGLE) echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_nya_jquery_ui[\'Include method google label\'] ?></label>
						</div>
					</div>
				</fieldset>
				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box checkbox">
						<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><span><?php echo $lang_nya_jquery_ui[\'Head CSS legend\'] ?></span> <?php echo $lang_nya_jquery_ui[\'Head CSS\'] ?></label>
						<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[nya_jquery_ui_include_css]" value="1"<?php if ($forum_config[\'o_nya_jquery_ui_include_css\'] == \'1\') echo \' checked="checked"\' ?> /></span>
					</div>
				</div>
			</fieldset>

<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_fancy_addthis)) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/lang.php\';
				}
			}

			$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;
?>
				<div class="content-head" id="<?php echo $ext_info[\'id\'].\'_settings\'; ?>">
					<h2 class="hn"><span><?php echo $lang_fancy_addthis[\'Name\'] ?></span></h2>
				</div>
				<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
					<legend class="group-legend"><span><?php echo $lang_fancy_addthis[\'Name\'] ?></span></legend>

					<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<legend><span><?php echo $lang_fancy_addthis[\'Enable buttons\'] ?></span></legend>
						<div class="mf-box">
							<div class="mf-item">
								<span class="fld-input">
									<input type="checkbox"
										id="fld<?php echo ++$forum_page[\'fld_count\'] ?>"
										name="form[fancy_addthis_button_gplus]" value="1"
										<?php if ($forum_config[\'o_fancy_addthis_button_gplus\'] == \'1\') echo \' checked="checked"\'; ?> />
								</span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>">
									<?php echo $lang_fancy_addthis[\'Enable G+ button label\'] ?>
								</label>
							</div>

							<div class="mf-item">
								<span class="fld-input">
									<input
										type="checkbox"
										id="fld<?php echo ++$forum_page[\'fld_count\'] ?>"
										name="form[fancy_addthis_button_twitter]" value="1"
										<?php if ($forum_config[\'o_fancy_addthis_button_twitter\'] == \'1\') echo \' checked="checked"\'; ?> />
								</span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>">
									<?php echo $lang_fancy_addthis[\'Enable Twitter button label\'] ?>
								</label>
							</div>

							<div class="mf-item">
								<span class="fld-input">
									<input
										type="checkbox"
										id="fld<?php echo ++$forum_page[\'fld_count\'] ?>"
										name="form[fancy_addthis_button_facebook]" value="1"
										<?php if ($forum_config[\'o_fancy_addthis_button_facebook\'] == \'1\') echo \' checked="checked"\'; ?> />
								</span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>">
									<?php echo $lang_fancy_addthis[\'Enable Facebook button label\'] ?>
								</label>
							</div>
						</div>
					</fieldset>

				</fieldset>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aop_features_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($form[\'pun_jquery_include_method\']))
			{
				$form[\'pun_jquery_include_method\'] = intval($form[\'pun_jquery_include_method\'], 10);
				if (($form[\'pun_jquery_include_method\'] < PUN_JQUERY_INCLUDE_METHOD_LOCAL) || ($form[\'pun_jquery_include_method\'] > PUN_JQUERY_INCLUDE_METHOD_JQUERY_CDN))
				{
					$form[\'pun_jquery_include_method\'] = PUN_JQUERY_INCLUDE_METHOD_LOCAL;
				}
			}
			else
			{
				$form[\'pun_jquery_include_method\'] = PUN_JQUERY_INCLUDE_METHOD_LOCAL;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form[\'pun_pm_inbox_size\'] = (!isset($form[\'pun_pm_inbox_size\']) || (int) $form[\'pun_pm_inbox_size\'] <= 0) ? \'0\' : (string)(int) $form[\'pun_pm_inbox_size\'];
			$form[\'pun_pm_outbox_size\'] = (!isset($form[\'pun_pm_outbox_size\']) || (int) $form[\'pun_pm_outbox_size\'] <= 0) ? \'0\' : (string)(int) $form[\'pun_pm_outbox_size\'];

			if (!isset($form[\'pun_pm_show_new_count\']) || $form[\'pun_pm_show_new_count\'] != \'1\')
				$form[\'pun_pm_show_new_count\'] = \'0\';

			if (!isset($form[\'pun_pm_show_global_link\']) || $form[\'pun_pm_show_global_link\'] != \'1\')
				$form[\'pun_pm_show_global_link\'] = \'0\';

			($hook = get_hook(\'pun_pm_aop_features_validation_end\')) ? eval($hook) : null;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
				include_once $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
			else
				include_once $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';


			if (!isset($form[\'pun_poll_enable_read\']) || $form[\'pun_poll_enable_read\'] != \'1\') $form[\'pun_poll_enable_read\'] = \'0\';
			if (!isset($form[\'pun_poll_enable_revote\']) || $form[\'pun_poll_enable_revote\'] != \'1\') $form[\'pun_poll_enable_revote\'] = \'0\';

			$form[\'pun_poll_max_answers\'] = intval($form[\'pun_poll_max_answers\']);

			if ($form[\'pun_poll_max_answers\'] > 100)
				$form[\'pun_poll_max_answers\'] = 100;

			if ($form[\'pun_poll_max_answers\'] < 2)
				$form[\'pun_poll_max_answers\'] = 2;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    3 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($form[\'nya_jquery_ui_include_method\']))
			{
				$form[\'nya_jquery_ui_include_method\'] = intval($form[\'nya_jquery_ui_include_method\'], 10);
				if (($form[\'nya_jquery_ui_include_method\'] < JQUERY_UI_INCLUDE_METHOD_LOCAL) || ($form[\'nya_jquery_ui_include_method\'] > JQUERY_UI_INCLUDE_METHOD_GOOGLE))
				{
					$form[\'nya_jquery_ui_include_method\'] = JQUERY_UI_INCLUDE_METHOD_LOCAL;
				}
			}
			else
			{
				$form[\'nya_jquery_ui_include_method\'] = JQUERY_UI_INCLUDE_METHOD_LOCAL;
			}
			if (!isset($form[\'nya_jquery_ui_include_css\']) || $form[\'nya_jquery_ui_include_css\'] != \'1\') $form[\'nya_jquery_ui_include_css\'] = \'0\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    4 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form[\'fancy_addthis_button_gplus\'] = (!isset($form[\'fancy_addthis_button_gplus\']) || (int) $form[\'fancy_addthis_button_gplus\'] <= 0) ? \'0\' : \'1\';
			$form[\'fancy_addthis_button_twitter\'] = (!isset($form[\'fancy_addthis_button_twitter\']) || (int) $form[\'fancy_addthis_button_twitter\'] <= 0) ? \'0\' : \'1\';
			$form[\'fancy_addthis_button_facebook\'] = (!isset($form[\'fancy_addthis_button_facebook\']) || (int) $form[\'fancy_addthis_button_facebook\'] <= 0) ? \'0\' : \'1\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'hd_head' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_jquery_addons.min.css\')) {
				$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_jquery_addons.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
			} else {
				$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/fancy_jquery_addons.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_image\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_image\',
\'dependencies\'	=> array (
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (defined(\'FORUM_PAGE\')) {
				if (in_array(FORUM_PAGE, array(\'news\', \'postdelete\', \'modtopic\', \'post\', \'viewtopic\', \'searchposts\', \'pun_pm-inbox\', \'pun_pm-outbox\'))) {
					// LOAD LANG
					if (!isset($lang_fancy_image)) {
						if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
							require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
						} else {
							require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
						}
					}

					$forum_loader->add_css(\'a.fancy_zoom:hover { text-decoration: none !important; }\', array(\'type\' => \'inline\'));

					$fancy_image_js_env = \'
						PUNBB.env.fancy_image = {
							lang_title: "\'.forum_htmlencode($lang_fancy_image[\'Original\']).\'",
						};\';


					$forum_loader->add_js($fancy_image_js_env, array(\'type\' => \'inline\'));

					//$forum_loader->add_js($ext_info[\'url\'].\'/js/fancy_image.min.js\', array(\'type\' => \'url\', \'async\' => true));

					// For speed use inline JS
					$forum_loader->add_js(\'PUNBB.fancy_image=(function(){function c(){$(".fancyimagethumbs > img").each(function(){if($(this).data("fancy")===true){return;}$(this).data("fancy",true);var f=$(this),d=f.attr("rel"),e=f.parents("a").eq(0),g=f.parents(".post").find("h4").attr("id");if(!e){return;}if(d){e.attr("href",d);if(g){e.attr("rel",g);}e.addClass("fancy_zoom");f.removeAttr("rel");}e.fancybox({"zoomSpeedIn":100,"zoomSpeedOut":100,"padding":0,"cyclic":true,"overlayShow":false,"showCloseButton":true,"changeSpeed":100,"changeFade":100,"hideOnContentClick":true,"transitionIn":"none","transitionOut":"none","centerOnScroll":false,"titleFormat":a,"showNavArrows":true,"titleShow":true,"enableEscapeButton":true,"titlePosition":"over","onStart":function(j,h,i){if(b(j[h].href)===null){i.titleShow=false;}},"onComplete":function(l,h,i){var k=b(l[h].href),j=0;if(k!==null){$("#fancy_title_link").attr("href",k);}if($("#fancybox-img").length>0){j=$("#fancybox-img").height()*$("#fancybox-img").width();if(j<300000){$("#fancybox-title").hide();}}}});});}function a(g,f,d,e){return"<div id=\\"fancybox-title-over\\"><a id=\\"fancy_title_link\\" href=\\"\\">"+PUNBB.env.fancy_image.lang_title+"</a></div>";}function b(d){var e=null;if(d.indexOf("pic.lg.ua")>0){e=d.replace("pv_","");}else{if(d.indexOf("iteam.net.ua/uploads/")>0){e=d.replace("N_","O_");}else{if(d.indexOf("imageshack.us")>0){e=d.replace(".th.",".");}else{if(d.indexOf("radikal.ru")>0){e=null;}else{if(d.indexOf("piccy.info")>0){e=null;}else{if(d.indexOf("imagepost.ru")>0){e=null;}else{if(d.indexOf("ipicture.ru")>0){e=null;}else{if(d.indexOf("imageshost.ru")>0){e=null;}}}}}}}}return e;}return{init:function(){$(document).bind("run.fancy_image",c).trigger("run.fancy_image");}};}());$(document).ready(PUNBB.fancy_image.init);\', array(\'type\' => \'inline\'));
				}
		    }

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_scroll_to_top\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_scroll_to_top\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_scroll_to_top\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_loader->add_js($ext_info[\'url\'].\'/js/fancy_scroll_to_top.min.js\',
				array(
					\'type\' 		=> \'url\',
					\'async\' 	=> TRUE,
					\'weight\' 	=> 140
				)
			);

			if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_scroll_to_top.min.css\')) {
				$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_scroll_to_top.min.css\',
					array(\'type\' => \'url\', \'media\' => \'screen\'))
				;
			} else {
				// Optimze: inline for Oxygen
				$forum_loader->add_css(\'#topcontrol{font-size:.8em;padding:.4em .5em .5em;border-radius:.3em;color:#cb4b16;font-weight:bold;cursor:pointer;z-index:10;background:#e6eaf6;background:-moz-linear-gradient(center top,#f5f7fd,#e6eaf6) repeat scroll 0 0 transparent;background:-o-linear-gradient(top,#f5f7fd,#e6eaf6);background:-webkit-gradient(linear,0 0,0 100%,from(#f5f7fd),to(#e6eaf6));background:-webkit-linear-gradient(top,#f5f7fd,#e6eaf6);background:-ms-linear-gradient(top,#f5f7fd,#e6eaf6);background:linear-gradient(top,#f5f7fd,#e6eaf6);text-shadow:0 1px 1px #bbb;-moz-box-shadow:0 1px 2px rgba(0,0,0,.2);-webkit-box-shadow:0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 2px rgba(0,0,0,.2)}#topcontrol:hover{color:#db4c18;-moz-transform:scaley(1.15);-webkit-transform:scaley(1.15)}\',
					array(\'type\' => \'inline\'))
				;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    3 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Incuding styles for pun_pm
			if (defined(\'FORUM_PAGE\') && \'pun_pm\' == substr(FORUM_PAGE, 0, 6))
			{
				if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/pun_pm.min.css\'))
					$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/pun_pm.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
				else
					$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/pun_pm.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    4 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'ajax_post_edit\',
\'path\'			=> FORUM_ROOT.\'extensions/ajax_post_edit\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/ajax_post_edit\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (FORUM_PAGE == \'viewtopic\')
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';

	$ape_js_env = \'
    	PUNBB.env.ape_vars = {
			"csrf_token" : "\'.generate_form_token($ext_info[\'url\'].\'/edit.php\').\'", 
			"Loading" : "\'.$lang_ape[\'Loading\'].\'",
			"Quick edit" : "\'.$lang_ape[\'Quick Edit\'].\'", 
			"Normal edit" : "\'.$lang_ape[\'Normal Edit\'].\'", 
			"url_edit" : "\'.$forum_url[\'edit\'].\'", 
    };\';


	$forum_loader->add_js($ape_js_env, array(\'type\' => \'inline\'));
	$forum_loader->add_js($ext_info[\'url\'].\'/ajax_post_edit.js\', array(\'type\' => \'url\', \'group\' => FORUM_JS_GROUP_COUNTER));

	$forum_loader->add_css($ext_info[\'url\'].\'/style.css\', array(\'type\' => \'url\'));
	
	if (file_exists($ext_info[\'path\'].\'/style/\'.$forum_user[\'style\'].\'/style.css\'))
		$forum_loader->add_css($ext_info[\'url\'].\'/style/\'.$forum_user[\'style\'].\'/style.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
	else
		$forum_loader->add_css($ext_info[\'url\'].\'/style/Oxygen/style.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    5 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_nya_jquery_ui_include_css\'] == \'1\')
			{
				// Load CSS
				if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/jquery-ui.css\'))
					$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/jquery-ui.css\', array(\'type\' => \'url\', \'weight\' => \'90\', \'media\' => \'screen\'));
				else
					$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/jquery-ui.css\', array(\'type\' => \'url\', \'weight\' => \'90\', \'media\' => \'screen\'));
				
				if (!empty($ext_jQuery_UI->UI_style_url))
				{
					foreach ($ext_jQuery_UI->UI_style_url as $name => $ui_style_url)
					{
						$forum_loader->add_css($ui_style_url, array(\'type\' => \'url\', \'weight\' => \'90\', \'media\' => \'screen\'));
					}
				}
				if (!empty($ext_jQuery_UI->UI_style))
				{
					foreach ($ext_jQuery_UI->UI_style as $name => $ui_style)
					{
						$forum_loader->add_css($ui_style, array(\'type\' => \'inline\', \'weight\' => \'91\', \'media\' => \'screen\'));
					}
				}

			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_settings_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Validate option \'quote beginning of message\'
			if (!isset($_POST[\'form\'][\'pun_pm_long_subject\']) || $_POST[\'form\'][\'pun_pm_long_subject\'] != \'1\')
				$form[\'pun_pm_long_subject\'] = \'0\';
			else
				$form[\'pun_pm_long_subject\'] = \'1\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_settings_email_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Per-user option \'quote beginning of message\'
if ($forum_config[\'p_message_bbcode\'] == \'1\')
{
	if (!isset($lang_pun_pm))
	{
		if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
			include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
		else
			include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
	}

	$forum_page[\'item_count\'] = 0;

?>
			<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
				<legend class="group-legend"><strong><?php echo $lang_pun_pm[\'PM settings\'] ?></strong></legend>
				<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<legend><span><?php echo $lang_pun_pm[\'Private messages\'] ?></span></legend>
					<div class="mf-box">
						<div class="mf-item">
							<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_pm_long_subject]" value="1"<?php if ($user[\'pun_pm_long_subject\'] == \'1\') echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_pm[\'Begin message quote\'] ?></label>
						</div>
					</div>
				</fieldset>
<?php ($hook = get_hook(\'pun_pm_pf_change_details_settings_pre_pm_settings_fieldset_end\')) ? eval($hook) : null; ?>
			</fieldset>
<?php
}
else
	echo "\\t\\t\\t".\'<input type="hidden" name="form[pun_pm_long_subject]" value="\'.$user[\'pun_pm_long_subject\'].\'" />\'."\\n";

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'mi_new_action' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($action == \'pun_pm_send\' && !$forum_user[\'is_guest\'])
{
	if(!defined(\'PUN_PM_FUNCTIONS_LOADED\'))
		require $ext_info[\'path\'].\'/functions.php\';

	if (!isset($lang_pun_pm))
	{
		if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
			include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
		else
			include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
	}

	$pun_pm_body = isset($_POST[\'req_message\']) ? $_POST[\'req_message\'] : \'\';
	$pun_pm_subject = isset($_POST[\'pm_subject\']) ? $_POST[\'pm_subject\'] : \'\';
	$pun_pm_receiver_username = isset($_POST[\'pm_receiver\']) ? $_POST[\'pm_receiver\'] : \'\';
	$pun_pm_message_id = isset($_POST[\'message_id\']) ? (int) $_POST[\'message_id\'] : false;

	if (isset($_POST[\'send_action\']) && in_array($_POST[\'send_action\'], array(\'send\', \'draft\', \'delete\', \'preview\')))
		$pun_pm_send_action = $_POST[\'send_action\'];
	elseif (isset($_POST[\'pm_draft\']))
		$pun_pm_send_action = \'draft\';
	elseif (isset($_POST[\'pm_send\']))
		$pun_pm_send_action = \'send\';
	elseif (isset($_POST[\'pm_delete\']))
		$pun_pm_send_action = \'delete\';
	else
		$pun_pm_send_action = \'preview\';

	($hook = get_hook(\'pun_pm_after_send_action_set\')) ? eval($hook) : null;

	if ($pun_pm_send_action == \'draft\')
	{
		// Try to save the message as draft
		// Inside this function will be a redirect, if everything is ok
		$pun_pm_errors = pun_pm_save_message($pun_pm_body, $pun_pm_subject, $pun_pm_receiver_username, $pun_pm_message_id);
		// Remember $pun_pm_message_id = false; inside this function if $pun_pm_message_id is incorrect

		// Well... Go processing errors

		// We need no preview
		$pun_pm_msg_preview = false;
	}
	elseif ($pun_pm_send_action == \'send\')
	{
		// Try to send the message
		// Inside this function will be a redirect, if everything is ok
		$pun_pm_errors = pun_pm_send_message($pun_pm_body, $pun_pm_subject, $pun_pm_receiver_username, $pun_pm_message_id);
		// Remember $pun_pm_message_id = false; inside this function if $pun_pm_message_id is incorrect

		// Well... Go processing errors

		// We need no preview
		$pun_pm_msg_preview = false;
	}
	elseif ($pun_pm_send_action == \'delete\' && $pun_pm_message_id !== false)
	{
		pun_pm_delete_from_outbox(array($pun_pm_message_id));
		redirect(forum_link($forum_url[\'pun_pm_outbox\']), $lang_pun_pm[\'Message deleted\']);
	}
	elseif ($pun_pm_send_action == \'preview\')
	{
		// Preview message
		$pun_pm_errors = array();
		$pun_pm_msg_preview = pun_pm_preview($pun_pm_receiver_username, $pun_pm_subject, $pun_pm_body, $pun_pm_errors);
	}

	($hook = get_hook(\'pun_pm_new_send_action\')) ? eval($hook) : null;

	$pun_pm_page_text = pun_pm_send_form($pun_pm_receiver_username, $pun_pm_subject, $pun_pm_body, $pun_pm_message_id, false, false, $pun_pm_msg_preview);

	// Setup navigation menu
	$forum_page[\'main_menu\'] = array(
		\'inbox\'		=> \'<li class="first-item"><a href="\'.forum_link($forum_url[\'pun_pm_inbox\']).\'"><span>\'.$lang_pun_pm[\'Inbox\'].\'</span></a></li>\',
		\'outbox\'	=> \'<li><a href="\'.forum_link($forum_url[\'pun_pm_outbox\']).\'"><span>\'.$lang_pun_pm[\'Outbox\'].\'</span></a></li>\',
		\'write\'		=> \'<li class="active"><a href="\'.forum_link($forum_url[\'pun_pm_write\']).\'"><span>\'.$lang_pun_pm[\'Compose message\'].\'</span></a></li>\',
	);

	// Setup breadcrumbs
	$forum_page[\'crumbs\'] = array(
		array($forum_config[\'o_board_title\'], forum_link($forum_url[\'index\'])),
		array($lang_pun_pm[\'Private messages\'], forum_link($forum_url[\'pun_pm\'])),
		array($lang_pun_pm[\'Compose message\'], forum_link($forum_url[\'pun_pm_write\']))
	);

	($hook = get_hook(\'pun_pm_pre_send_output\')) ? eval($hook) : null;

	define(\'FORUM_PAGE\', \'pun_pm-write\');
	require FORUM_ROOT.\'header.php\';

	// START SUBST - <!-- forum_main -->
	ob_start();

	echo $pun_pm_page_text;

	$tpl_temp = trim(ob_get_contents());
	$tpl_main = str_replace(\'<!-- forum_main -->\', $tpl_temp, $tpl_main);
	ob_end_clean();
	// END SUBST - <!-- forum_main -->

	require FORUM_ROOT.\'footer.php\';
}

$section = isset($_GET[\'section\']) ? $_GET[\'section\'] : null;

if ($section == \'pun_pm\' && !$forum_user[\'is_guest\'])
{
	if (!isset($lang_pun_pm))
	{
		if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
			include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
		else
			include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
	}

	if (!defined(\'PUN_PM_FUNCTIONS_LOADED\'))
		require $ext_info[\'path\'].\'/functions.php\';

	$pun_pm_page = isset($_GET[\'pmpage\']) ? $_GET[\'pmpage\'] : \'\';

	($hook = get_hook(\'pun_pm_pre_page_building\')) ? eval($hook) : null;

	// pun_pm_get_page() performs everything :)
	// Remember $pun_pm_page correction inside pun_pm_get_page() if this variable is incorrect
	$pun_pm_page_text = pun_pm_get_page($pun_pm_page);

	// Setup navigation menu
	$forum_page[\'main_menu\'] = array(
		\'inbox\'		=> \'<li class="first-item\'.($pun_pm_page == \'inbox\' ? \' active\' : \'\').\'"><a href="\'.forum_link($forum_url[\'pun_pm_inbox\']).\'"><span>\'.$lang_pun_pm[\'Inbox\'].\'</span></a></li>\',
		\'outbox\'	=> \'<li\'.(($pun_pm_page == \'outbox\') ? \' class="active"\' : \'\').\'><a href="\'.forum_link($forum_url[\'pun_pm_outbox\']).\'"><span>\'.$lang_pun_pm[\'Outbox\'].\'</span></a></li>\',
		\'write\'		=> \'<li\'.(($pun_pm_page == \'write\' || $pun_pm_page == \'compose\') ? \' class="active"\' : \'\').\'><a href="\'.forum_link($forum_url[\'pun_pm_write\']).\'"><span>\'.$lang_pun_pm[\'Compose message\'].\'</span></a></li>\',
	);

	// Setup breadcrumbs
	$forum_page[\'crumbs\'] = array(
		array($forum_config[\'o_board_title\'], forum_link($forum_url[\'index\'])),
		array($lang_pun_pm[\'Private messages\'], forum_link($forum_url[\'pun_pm\']))
	);

	if ($pun_pm_page == \'inbox\')
		$forum_page[\'crumbs\'][] = array($lang_pun_pm[\'Inbox\'], forum_link($forum_url[\'pun_pm_inbox\']));
	else if ($pun_pm_page == \'outbox\')
		$forum_page[\'crumbs\'][] = array($lang_pun_pm[\'Outbox\'], forum_link($forum_url[\'pun_pm_outbox\']));
	else if ($pun_pm_page == \'write\' || $pun_pm_page == \'compose\')
		$forum_page[\'crumbs\'][] = array($lang_pun_pm[\'Compose message\'], forum_link($forum_url[\'pun_pm_write\']));

	($hook = get_hook(\'pun_pm_pre_page_output\')) ? eval($hook) : null;

	define(\'FORUM_PAGE\', \'pun_pm-\'.$pun_pm_page);
	require FORUM_ROOT.\'header.php\';

	// START SUBST - <!-- forum_main -->
	ob_start();

	echo $pun_pm_page_text;

	$tpl_temp = trim(ob_get_contents());
	$tpl_main = str_replace(\'<!-- forum_main -->\', $tpl_temp, $tpl_main);
	ob_end_clean();
	// END SUBST - <!-- forum_main -->

	require FORUM_ROOT.\'footer.php\';
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_page[\'crumbs\'] = array(
	array($forum_config[\'o_board_title\'], forum_link($forum_url[\'index\'])),
);
App::route();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_admin_clear_cache\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_admin_clear_cache\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_admin_clear_cache\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($action == \'pun_admin_clear_cache\')
			{
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
				else
					require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';

				if ($forum_user[\'g_id\'] != FORUM_ADMIN)
					message($lang_common[\'No permission\']);

				require_once $ext_info[\'path\'].\'/functions.php\';

				pun_admin_clear_cache();

				$forum_flash->add_info($lang_pun_admin_clear_cache[\'Cleard\']);

				redirect(forum_htmlencode($_GET[\'prev_url\']), $lang_pun_admin_clear_cache[\'Cleard\']);
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aop_features_avatars_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Admin options
if (!isset($lang_pun_pm))
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
		include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
	else
		include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
}

$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;

?>
			<div class="content-head">
				<h2 class="hn"><span><?php echo $lang_pun_pm[\'Features title\'] ?></span></h2>
			</div>
			<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
				<legend class="group-legend"><span><?php echo $lang_pun_pm[\'PM settings\'] ?></span></legend>
				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box text">
						<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_pun_pm[\'Inbox limit\'] ?></span><small><?php echo $lang_pun_pm[\'Inbox limit info\'] ?></small></label><br />
						<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[pun_pm_inbox_size]" size="6" maxlength="6" value="<?php echo $forum_config[\'o_pun_pm_inbox_size\'] ?>" /></span>
					</div>
				</div>
				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box text">
						<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_pun_pm[\'Outbox limit\'] ?></span><small><?php echo $lang_pun_pm[\'Outbox limit info\'] ?></small></label><br />
						<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[pun_pm_outbox_size]" size="6" maxlength="6" value="<?php echo $forum_config[\'o_pun_pm_outbox_size\'] ?>" /></span>
					</div>
				</div>
				<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<legend><span><?php echo $lang_pun_pm[\'Navigation links\'] ?></span></legend>
					<div class="mf-box">
						<div class="mf-item">
							<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_pm_show_new_count]" value="1"<?php if ($forum_config[\'o_pun_pm_show_new_count\'] == \'1\') echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_pm[\'Snow new count\'] ?></label>
						</div>
						<div class="mf-item">
							<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_pm_show_global_link]" value="1"<?php if ($forum_config[\'o_pun_pm_show_global_link\'] == \'1\') echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_pm[\'Show global link\'] ?></label>
						</div>
					</div>
				</fieldset>
<?php ($hook = get_hook(\'pun_pm_aop_features_pre_pm_settings_fieldset_end\')) ? eval($hook) : null; ?>
			</fieldset>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

?>
				<div class="content-head">
					<h2 class="hn"><span><?php echo $lang_pun_poll[\'Name plugin\'] ?></span></h2>
				</div>
				<fieldset class="frm-group group1">
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box checkbox">
							<span class="fld-input">
								<input id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" type="checkbox" name="form[pun_poll_enable_revote]" value="1"<?php if ($forum_config[\'p_pun_poll_enable_revote\'] == \'1\') echo \' checked="checked"\' ?>/>
							</span>
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>">
								<span><?php echo $lang_pun_poll[\'Disable revoting info\'] ?></span>
								<?php echo $lang_pun_poll[\'Disable revoting\'] ?>
							</label>
						</div>
					</div>
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box checkbox">
							<span class="fld-input">
								<input id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" type="checkbox" name="form[pun_poll_enable_read]" value="1"<?php if ($forum_config[\'p_pun_poll_enable_read\'] == \'1\') echo \' checked="checked"\' ?>/>
							</span>
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>">
								<span><?php echo $lang_pun_poll[\'Disable see results\'] ?></span>
								<?php echo $lang_pun_poll[\'Disable see results info\'] ?>
							</label>
						</div>
					</div>
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box text">
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>">
								<span><?php echo $lang_pun_poll[\'Maximum answers info\'] ?></span>
								<small><?php echo $lang_pun_poll[\'Maximum answers\'] ?></small>
							</label>
							</br>
							<span class="fld-input">
								<input id="fld<?php echo $forum_page[\'fld_count\'] ?>" type="text" name="form[pun_poll_max_answers]" size="6" maxlength="6" value="<?php echo $forum_config[\'p_pun_poll_max_answers\'] ?>"/>
							</span>
						</div>
					</div>
				</fieldset>
			<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_delete_user_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query = array(
				\'DELETE\'	=> \'pun_pm_messages\',
				\'WHERE\'		=> \'receiver_id = \'.$user_id.\' AND deleted_by_sender = 1\'
			);
			$result = $forum_db->query_build($query) or error(__FILE__, __LINE__);

			$query = array(
				\'UPDATE\'	=> \'pun_pm_messages\',
				\'SET\'		=> \'deleted_by_receiver = 1\',
				\'WHERE\'		=> \'receiver_id = \'.$user_id
			);
			$result = $forum_db->query_build($query) or error(__FILE__, __LINE__);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'hd_visit_elements' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// \'New messages (N)\' link
			if (!$forum_user[\'is_guest\'] && $forum_config[\'o_pun_pm_show_new_count\'])
			{
				global $lang_pun_pm;

				if (!isset($lang_pun_pm))
				{
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
						include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					else
						include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}

				// TODO: Do not include all functions, divide them into 2 files
				if(!defined(\'PUN_PM_FUNCTIONS_LOADED\'))
					require $ext_info[\'path\'].\'/functions.php\';

				($hook = get_hook(\'pun_pm_hd_visit_elements_pre_change\')) ? eval($hook) : null;

				//$visit_elements[\'<!-- forum_visit -->\'] = preg_replace(\'#(<p id="visit-links" class="options">.*?)(</p>)#\', \'$1 <span><a href="\'.forum_link($forum_url[\'pun_pm_inbox\']).\'">\'.pun_pm_unread_messages().\'</a></span>$2\', $visit_elements[\'<!-- forum_visit -->\']);
				if ($forum_user[\'g_read_board\'] == \'1\' && $forum_user[\'g_search\'] == \'1\')
				{
					$visit_links[\'pun_pm\'] = \'<span id="visit-pun_pm"><a href="\'.forum_link($forum_url[\'pun_pm_inbox\']).\'">\'.pun_pm_unread_messages().\'</a></span>\';
				}

				($hook = get_hook(\'pun_pm_hd_visit_elements_after_change\')) ? eval($hook) : null;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_row_pre_post_contacts_merge' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

global $lang_pun_pm;

			if (!isset($lang_pun_pm))
			{
				if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
					include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
				else
					include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
			}

			($hook = get_hook(\'pun_pm_pre_post_contacts_add\')) ? eval($hook) : null;

			// Links \'Send PM\' near posts
			if (!$forum_user[\'is_guest\'] && $cur_post[\'poster_id\'] > 1 && $forum_user[\'id\'] != $cur_post[\'poster_id\'])
				$forum_page[\'post_contacts\'][\'PM\'] = \'<span class="contact"><a title="\'.$lang_pun_pm[\'Send PM\'].\'" href="\'.forum_link($forum_url[\'pun_pm_post_link\'], $cur_post[\'poster_id\']).\'">\'.$lang_pun_pm[\'PM\'].\'</a></span>\';

			($hook = get_hook(\'pun_pm_after_post_contacts_add\')) ? eval($hook) : null;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_generate_navlinks_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Link \'PM\' in the main nav menu
			if (isset($links[\'profile\']) && $forum_config[\'o_pun_pm_show_global_link\'])
			{
				global $lang_pun_pm;

				if (!isset($lang_pun_pm))
				{
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
						include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					else
						include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}

				if (\'pun_pm\' == substr(FORUM_PAGE, 0, 6))
					$links[\'profile\'] = str_replace(\' class="isactive"\', \'\', $links[\'profile\']);

				($hook = get_hook(\'pun_pm_pre_main_navlinks_add\')) ? eval($hook) : null;

				$links[\'profile\'] .= "\\n\\t\\t".\'<li id="nav_pun_pm"\'.(\'pun_pm\' == substr(FORUM_PAGE, 0, 6) ? \' class="isactive"\' : \'\').\'><a href="\'.forum_link($forum_url[\'pun_pm\']).\'"><span>\'.$lang_pun_pm[\'Private messages\'].\'</span></a></li>\';

				($hook = get_hook(\'pun_pm_after_main_navlinks_add\')) ? eval($hook) : null;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_view_details_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Link in the profile
			if (!$forum_user[\'is_guest\'] && $forum_user[\'id\'] != $user[\'id\'])
			{
				if (!isset($lang_pun_pm))
				{
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
						include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					else
						include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}

				($hook = get_hook(\'pun_pm_pre_profile_user_contact_add\')) ? eval($hook) : null;

				$forum_page[\'user_contact\'][\'PM\'] = \'<li><span>\'.$lang_pun_pm[\'PM\'].\': <a href="\'.forum_link($forum_url[\'pun_pm_post_link\'], $id).\'">\'.$lang_pun_pm[\'Send PM\'].\'</a></span></li>\';

				($hook = get_hook(\'pun_pm_after_profile_user_contact_add\')) ? eval($hook) : null;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_about_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Link in the profile
			if (!$forum_user[\'is_guest\'] && $forum_user[\'id\'] != $user[\'id\'])
			{
				if (!isset($lang_pun_pm))
				{
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
						include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					else
						include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}

				($hook = get_hook(\'pun_pm_pre_profile_user_contact_add\')) ? eval($hook) : null;

				$forum_page[\'user_contact\'][\'PM\'] = \'<li><span>\'.$lang_pun_pm[\'PM\'].\': <a href="\'.forum_link($forum_url[\'pun_pm_post_link\'], $id).\'">\'.$lang_pun_pm[\'Send PM\'].\'</a></span></li>\';

				($hook = get_hook(\'pun_pm_after_profile_user_contact_add\')) ? eval($hook) : null;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'co_modify_url_scheme' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_sef\'] != \'Default\' && file_exists($ext_info[\'path\'].\'/url/\'.$forum_config[\'o_sef\'].\'.php\'))
				require $ext_info[\'path\'].\'/url/\'.$forum_config[\'o_sef\'].\'.php\';
			else
				require $ext_info[\'path\'].\'/url/Default.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'reputation\',
\'path\'			=> FORUM_ROOT.\'extensions/reputation\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/reputation\',
\'dependencies\'	=> array (
\'developer_helper\'	=> array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\'),
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'nya_jquery_ui\'	=> array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/url/\'.$forum_config[\'o_sef\'].\'.php\'))
	require $ext_info[\'path\'].\'/url/\'.$forum_config[\'o_sef\'].\'.php\';
else
	require $ext_info[\'path\'].\'/url/Default.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  're_rewrite_rules' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_rewrite_rules[\'/^pun_pm[\\/_-]?send(\\.html?|\\/)?$/i\'] = \'misc.php?action=pun_pm_send\';
			$forum_rewrite_rules[\'/^pun_pm[\\/_-]?compose[\\/_-]?([0-9]+)(\\.html?|\\/)?$/i\'] = \'misc.php?section=pun_pm&pmpage=compose&receiver_id=$1\';
			$forum_rewrite_rules[\'/^pun_pm(\\.html?|\\/)?$/i\'] = \'misc.php?section=pun_pm\';
			$forum_rewrite_rules[\'/^pun_pm[\\/_-]?([0-9a-z]+)(\\.html?|\\/)?$/i\'] = \'misc.php?section=pun_pm&pmpage=$1\';
			$forum_rewrite_rules[\'/^pun_pm[\\/_-]?([0-9a-z]+)[\\/_-]?(p|page\\/)([0-9]+)(\\.html?|\\/)?$/i\'] = \'misc.php?section=pun_pm&pmpage=$1&p=$3\';
			$forum_rewrite_rules[\'/^pun_pm[\\/_-]?([0-9a-z]+)[\\/_-]?([0-9]+)(\\.html?|\\/)?$/i\'] = \'misc.php?section=pun_pm&pmpage=$1&message_id=$2\';

			($hook = get_hook(\'pun_pm_after_rewrite_rules_set\')) ? eval($hook) : null;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'reputation\',
\'path\'			=> FORUM_ROOT.\'extensions/reputation\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/reputation\',
\'dependencies\'	=> array (
\'developer_helper\'	=> array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\'),
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'nya_jquery_ui\'	=> array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/url/rewrite_rule.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aex_section_manage_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_repository\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_repository\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_repository\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/pun_repository.php\'))
	include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/pun_repository.php\';
else
	include $ext_info[\'path\'].\'/lang/English/pun_repository.php\';

require_once $ext_info[\'path\'].\'/pun_repository.php\';

($hook = get_hook(\'pun_repository_pre_display_ext_list\')) ? eval($hook) : null;

?>
	<div class="main-subhead">
		<h2 class="hn"><span><?php echo $lang_pun_repository[\'PunBB Repository\'] ?></span></h2>
	</div>
	<div class="main-content main-extensions">
		<p class="content-options options"><a href="<?php echo $base_url ?>/admin/extensions.php?pun_repository_update&amp;csrf_token=<?php echo generate_form_token(\'pun_repository_update\') ?>"><?php echo $lang_pun_repository[\'Clear cache\'] ?></a></p>
<?php

if (!defined(\'PUN_REPOSITORY_EXTENSIONS_LOADED\') && file_exists(FORUM_CACHE_DIR.\'cache_pun_repository.php\'))
	include FORUM_CACHE_DIR.\'cache_pun_repository.php\';

if (!defined(\'FORUM_EXT_VERSIONS_LOADED\') && file_exists(FORUM_CACHE_DIR.\'cache_ext_version_notifications.php\'))
	include FORUM_CACHE_DIR.\'cache_ext_version_notifications.php\';

// Regenerate cache only if automatic updates are enabled and if the cache is more than 12 hours old
if (!defined(\'PUN_REPOSITORY_EXTENSIONS_LOADED\') || !defined(\'FORUM_EXT_VERSIONS_LOADED\') || ($pun_repository_extensions_timestamp < $forum_ext_versions_update_cache))
{
	$pun_repository_error = \'\';

	if (pun_repository_generate_cache($pun_repository_error))
	{
		require FORUM_CACHE_DIR.\'cache_pun_repository.php\';
	}
	else
	{

		?>
		<div class="ct-box warn-box">
			<p class="warn"><?php echo $pun_repository_error ?></p>
		</div>
		<?php

		// Stop processing hook
		return;
	}
}

$pun_repository_parsed = array();
$pun_repository_skipped = array();

// Display information about extensions in repository
foreach ($pun_repository_extensions as $pun_repository_ext)
{
	// Skip installed extensions
	if (isset($inst_exts[$pun_repository_ext[\'id\']]))
	{
		$pun_repository_skipped[\'installed\'][] = $pun_repository_ext[\'id\'];
		continue;
	}

	// Skip uploaded extensions (including incorrect ones)
	if (is_dir(FORUM_ROOT.\'extensions/\'.$pun_repository_ext[\'id\']))
	{
		$pun_repository_skipped[\'has_dir\'][] = $pun_repository_ext[\'id\'];
		continue;
	}

	// Check for unresolved dependencies
	if (isset($pun_repository_ext[\'dependencies\']))
		$pun_repository_ext[\'dependencies\'] = pun_repository_check_dependencies($inst_exts, $pun_repository_ext[\'dependencies\']);

	if (empty($pun_repository_ext[\'dependencies\'][\'unresolved\']))
	{
		// \'Download and install\' link
		$pun_repository_ext[\'options\'] = array(\'<a href="\'.$base_url.\'/admin/extensions.php?pun_repository_download_and_install=\'.$pun_repository_ext[\'id\'].\'&amp;csrf_token=\'.generate_form_token(\'pun_repository_download_and_install_\'.$pun_repository_ext[\'id\']).\'">\'.$lang_pun_repository[\'Download and install\'].\'</a>\');
	}
	else
		$pun_repository_ext[\'options\'] = array();

	$pun_repository_parsed[] = $pun_repository_ext[\'id\'];

	// Direct links to archives
	$pun_repository_ext[\'download_links\'] = array();
	foreach (array(\'zip\', \'tgz\', \'7z\') as $pun_repository_archive_type)
		$pun_repository_ext[\'download_links\'][] = \'<a href="\'.PUN_REPOSITORY_URL.\'/\'.$pun_repository_ext[\'id\'].\'/\'.$pun_repository_ext[\'id\'].\'.\'.$pun_repository_archive_type.\'">\'.$pun_repository_archive_type.\'</a>\';

	($hook = get_hook(\'pun_repository_pre_display_ext_info\')) ? eval($hook) : null;

	// Let\'s ptint it all out
?>
		<div class="ct-box info-box extension available" id="<?php echo $pun_repository_ext[\'id\'] ?>">
			<h3 class="ct-legend hn"><span><?php echo forum_htmlencode($pun_repository_ext[\'title\']).\' \'.$pun_repository_ext[\'version\'] ?></span></h3>
			<p><?php echo forum_htmlencode($pun_repository_ext[\'description\']) ?></p>
<?php

	// List extension dependencies
	if (!empty($pun_repository_ext[\'dependencies\'][\'dependency\']))
		echo \'
			<p>\', $lang_pun_repository[\'Dependencies:\'], \' \', implode(\', \', $pun_repository_ext[\'dependencies\'][\'dependency\']), \'</p>\';

?>
			<p><?php echo $lang_pun_repository[\'Direct download links:\'], \' \', implode(\' \', $pun_repository_ext[\'download_links\']) ?></p>
<?php

	// List unresolved dependencies
	if (!empty($pun_repository_ext[\'dependencies\'][\'unresolved\']))
		echo \'
			<div class="ct-box warn-box">
				<p class="warn">\', $lang_pun_repository[\'Resolve dependencies:\'], \' \', implode(\', \', array_map(create_function(\'$dep\', \'return \\\'<a href="#\\\'.$dep.\\\'">\\\'.$dep.\\\'</a>\\\';\'), $pun_repository_ext[\'dependencies\'][\'unresolved\'])), \'</p>
			</div>\';

	// Actions
	if (!empty($pun_repository_ext[\'options\']))
		echo \'
			<p class="options">\', implode(\' \', $pun_repository_ext[\'options\']), \'</p>\';

?>
		</div>
<?php

}

?>
		<div class="ct-box warn-box">
			<p class="warn"><?php echo $lang_pun_repository[\'Files mode and owner\'] ?></p>
		</div>
<?php

if (empty($pun_repository_parsed) && (count($pun_repository_skipped[\'installed\']) > 0 || count($pun_repository_skipped[\'has_dir\']) > 0))
{
	($hook = get_hook(\'pun_repository_no_extensions\')) ? eval($hook) : null;

	?>
		<div class="ct-box info-box">
			<p class="warn"><?php echo $lang_pun_repository[\'All installed or downloaded\'] ?></p>
		</div>
	<?php

}

($hook = get_hook(\'pun_repository_after_ext_list\')) ? eval($hook) : null;

?>
	</div>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aex_new_action' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_repository\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_repository\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_repository\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Clear pun_repository cache
if (isset($_GET[\'pun_repository_update\']))
{
	// Validate CSRF token
	if (!isset($_POST[\'csrf_token\']) && (!isset($_GET[\'csrf_token\']) || $_GET[\'csrf_token\'] !== generate_form_token(\'pun_repository_update\')))
		csrf_confirm_form();

	if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/pun_repository.php\'))
		include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/pun_repository.php\';
	else
		include $ext_info[\'path\'].\'/lang/English/pun_repository.php\';

	@unlink(FORUM_CACHE_DIR.\'cache_pun_repository.php\');
	if (file_exists(FORUM_CACHE_DIR.\'cache_pun_repository.php\'))
		message($lang_pun_repository[\'Unable to remove cached file\'], \'\', $lang_pun_repository[\'PunBB Repository\']);

	redirect($base_url.\'/admin/extensions.php?section=manage\', $lang_pun_repository[\'Cache has been successfully cleared\']);
}

if (isset($_GET[\'pun_repository_download_and_install\']))
{
	$ext_id = preg_replace(\'/[^0-9a-z_]/\', \'\', $_GET[\'pun_repository_download_and_install\']);

	// Validate CSRF token
	if (!isset($_POST[\'csrf_token\']) && (!isset($_GET[\'csrf_token\']) || $_GET[\'csrf_token\'] !== generate_form_token(\'pun_repository_download_and_install_\'.$ext_id)))
		csrf_confirm_form();

	// TODO: Should we check again for unresolved dependencies here?

	if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/pun_repository.php\'))
		include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/pun_repository.php\';
	else
		include $ext_info[\'path\'].\'/lang/English/pun_repository.php\';

	require_once $ext_info[\'path\'].\'/pun_repository.php\';

	($hook = get_hook(\'pun_repository_download_and_install_start\')) ? eval($hook) : null;

	// Download extension
	$pun_repository_error = pun_repository_download_extension($ext_id, $ext_data);

	if ($pun_repository_error == \'\')
	{
		if (empty($ext_data))
			redirect($base_url.\'/admin/extensions.php?section=manage\', $lang_pun_repository[\'Incorrect manifest.xml\']);

		// Validate manifest
		$errors = validate_manifest($ext_data, $ext_id);
		if (!empty($errors))
			redirect($base_url.\'/admin/extensions.php?section=manage\', $lang_pun_repository[\'Incorrect manifest.xml\']);

		// Everything is OK. Start installation.
		redirect($base_url.\'/admin/extensions.php?install=\'.urlencode($ext_id), $lang_pun_repository[\'Download successful\']);
	}

	($hook = get_hook(\'pun_repository_download_and_install_end\')) ? eval($hook) : null;
}

// Handling the download and update extension action
if (isset($_GET[\'pun_repository_download_and_update\']))
{
	$ext_id = preg_replace(\'/[^0-9a-z_]/\', \'\', $_GET[\'pun_repository_download_and_update\']);

	// Validate CSRF token
	if (!isset($_POST[\'csrf_token\']) && (!isset($_GET[\'csrf_token\']) || $_GET[\'csrf_token\'] !== generate_form_token(\'pun_repository_download_and_update_\'.$ext_id)))
		csrf_confirm_form();

	if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/pun_repository.php\'))
		include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/pun_repository.php\';
	else
		include $ext_info[\'path\'].\'/lang/English/pun_repository.php\';

	require_once $ext_info[\'path\'].\'/pun_repository.php\';

	$pun_repository_error = \'\';

	($hook = get_hook(\'pun_repository_download_and_update_start\')) ? eval($hook) : null;

	pun_repository_rm_recursive(FORUM_ROOT.\'extensions/\'.$ext_id.\'.old\');

	// Check dependancies
	$query = array(
		\'SELECT\'	=> \'e.id\',
		\'FROM\'		=> \'extensions AS e\',
		\'WHERE\'		=> \'e.disabled=0 AND e.dependencies LIKE \\\'%|\'.$forum_db->escape($ext_id).\'|%\\\'\'
	);

	($hook = get_hook(\'aex_qr_get_disable_dependencies\')) ? eval($hook) : null;
	$result = $forum_db->query_build($query) or error(__FILE__, __LINE__);

	if ($forum_db->num_rows($result) != 0)
	{
		$dependency = $forum_db->fetch_assoc($result);
		$pun_repository_error = sprintf($lang_admin[\'Disable dependency\'], $dependency[\'id\']);
	}

	if ($pun_repository_error == \'\' && ($ext_id != $ext_info[\'id\']))
	{
		// Disable extension
		$query = array(
			\'UPDATE\'	=> \'extensions\',
			\'SET\'		=> \'disabled=1\',
			\'WHERE\'		=> \'id=\\\'\'.$forum_db->escape($ext_id).\'\\\'\'
		);

		($hook = get_hook(\'aex_qr_update_disabled_status\')) ? eval($hook) : null;
		$forum_db->query_build($query) or error(__FILE__, __LINE__);

		// Regenerate the hooks cache
		require_once FORUM_ROOT.\'include/cache.php\';
		generate_hooks_cache();
	}

	if ($pun_repository_error == \'\')
	{
		if ($ext_id == $ext_info[\'id\'])
		{
			// Hey! That\'s me!
			// All the necessary files should be included before renaming old directory
			// NOTE: Self-updating is to be tested more in real-life conditions
			if (!defined(\'PUN_REPOSITORY_TAR_EXTRACT_INCLUDED\'))
				require $ext_info[\'path\'].\'/pun_repository_tar_extract.php\';
		}

		$pun_repository_error = pun_repository_download_extension($ext_id, $ext_data, FORUM_ROOT.\'extensions/\'.$ext_id.\'.new\'); // Download the extension

		if ($pun_repository_error == \'\')
		{
			if (is_writable(FORUM_ROOT.\'extensions/\'.$ext_id))
				pun_repository_dir_copy(FORUM_ROOT.\'extensions/\'.$ext_id.\'.new/\'.$ext_id, FORUM_ROOT.\'extensions/\'.$ext_id);
			else
				$pun_repository_error = sprintf($lang_pun_repository[\'Copy fail\'], FORUM_ROOT.\'extensions/\'.$ext_id);
		}
	}

	if ($pun_repository_error == \'\')
	{
		// Do we have extension data at all? :-)
		if (empty($ext_data))
			$errors = array(true);

		// Validate manifest
		if (empty($errors))
			$errors = validate_manifest($ext_data, $ext_id);

		if (!empty($errors))
			$pun_repository_error = $lang_pun_repository[\'Incorrect manifest.xml\'];
	}

	if ($pun_repository_error == \'\')
	{
		($hook = get_hook(\'pun_repository_download_and_update_ok\')) ? eval($hook) : null;

		// Everything is OK. Start installation.
		pun_repository_rm_recursive(FORUM_ROOT.\'extensions/\'.$ext_id.\'.new\');
		redirect($base_url.\'/admin/extensions.php?install=\'.urlencode($ext_id), $lang_pun_repository[\'Download successful\']);
	}

	($hook = get_hook(\'pun_repository_download_and_update_error\')) ? eval($hook) : null;

	// Enable extension
	$query = array(
		\'UPDATE\'	=> \'extensions\',
		\'SET\'		=> \'disabled=0\',
		\'WHERE\'		=> \'id=\\\'\'.$forum_db->escape($ext_id).\'\\\'\'
	);

	($hook = get_hook(\'aex_qr_update_enabled_status\')) ? eval($hook) : null;
	$forum_db->query_build($query) or error(__FILE__, __LINE__);

	// Regenerate the hooks cache
	require_once FORUM_ROOT.\'include/cache.php\';
	generate_hooks_cache();

	($hook = get_hook(\'pun_repository_download_and_update_end\')) ? eval($hook) : null;
}

// Do we have some error?
if (!empty($pun_repository_error))
{
	// Setup breadcrumbs
	$forum_page[\'crumbs\'] = array(
		array($forum_config[\'o_board_title\'], forum_link($forum_url[\'index\'])),
		array($lang_admin_common[\'Forum administration\'], forum_link($forum_url[\'admin_index\'])),
		array($lang_admin_common[\'Extensions\'], forum_link($forum_url[\'admin_extensions_manage\'])),
		array($lang_admin_common[\'Manage extensions\'], forum_link($forum_url[\'admin_extensions_manage\'])),
		$lang_pun_repository[\'PunBB Repository\']
	);

	($hook = get_hook(\'pun_repository__pre_header_load\')) ? eval($hook) : null;

	define(\'FORUM_PAGE_SECTION\', \'extensions\');
	define(\'FORUM_PAGE\', \'admin-extensions-pun-repository\');
	require FORUM_ROOT.\'header.php\';

	// START SUBST - <!-- forum_main -->
	ob_start();

	($hook = get_hook(\'pun_repository_display_error_output_start\')) ? eval($hook) : null;

?>
	<div class="main-subhead">
		<h2 class="hn"><span><?php echo $lang_pun_repository[\'PunBB Repository\'] ?></span></h2>
	</div>
	<div class="main-content">
		<div class="ct-box warn-box">
			<p class="warn"><?php echo $pun_repository_error ?></p>
		</div>
	</div>
<?php

	($hook = get_hook(\'pun_repository_display_error_pre_ob_end\')) ? eval($hook) : null;

	$tpl_temp = trim(ob_get_contents());
	$tpl_main = str_replace(\'<!-- forum_main -->\', $tpl_temp, $tpl_main);
	ob_end_clean();
	// END SUBST - <!-- forum_main -->

	require FORUM_ROOT.\'footer.php\';
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aex_section_manage_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_repository\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_repository\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_repository\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/pun_repository.php\'))
	include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/pun_repository.php\';
else
	include $ext_info[\'path\'].\'/lang/English/pun_repository.php\';

require_once $ext_info[\'path\'].\'/pun_repository.php\';

if (!defined(\'PUN_REPOSITORY_EXTENSIONS_LOADED\') && file_exists(FORUM_CACHE_DIR.\'cache_pun_repository.php\'))
	include FORUM_CACHE_DIR.\'cache_pun_repository.php\';

if (!defined(\'FORUM_EXT_VERSIONS_LOADED\') && file_exists(FORUM_CACHE_DIR.\'cache_ext_version_notifications.php\'))
	include FORUM_CACHE_DIR.\'cache_ext_version_notifications.php\';

// Regenerate cache only if automatic updates are enabled and if the cache is more than 12 hours old
if (!defined(\'PUN_REPOSITORY_EXTENSIONS_LOADED\') || !defined(\'FORUM_EXT_VERSIONS_LOADED\') || ($pun_repository_extensions_timestamp < $forum_ext_versions_update_cache))
{
	if (pun_repository_generate_cache($pun_repository_error))
		require FORUM_CACHE_DIR.\'cache_pun_repository.php\';
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aex_section_manage_pre_ext_actions' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_repository\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_repository\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_repository\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (defined(\'PUN_REPOSITORY_EXTENSIONS_LOADED\') && isset($pun_repository_extensions[$id]) && version_compare($ext[\'version\'], $pun_repository_extensions[$id][\'version\'], \'<\') && is_writable(FORUM_ROOT.\'extensions/\'.$id))
{
	// Check for unresolved dependencies
	if (isset($pun_repository_extensions[$id][\'dependencies\']))
		$pun_repository_extensions[$id][\'dependencies\'] = pun_repository_check_dependencies($inst_exts, $pun_repository_extensions[$id][\'dependencies\']);

	if (empty($pun_repository_extensions[$id][\'dependencies\'][\'unresolved\']))
		$forum_page[\'ext_actions\'][] = \'<span><a href="\'.$base_url.\'/admin/extensions.php?pun_repository_download_and_update=\'.$id.\'&amp;csrf_token=\'.generate_form_token(\'pun_repository_download_and_update_\'.$id).\'">\'.$lang_pun_repository[\'Download and update\'].\'</a></span>\';
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_fancy_addthis)) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/lang.php\';
				}
			}

			if ($ext[\'id\'] == \'fancy_addthis\' && !isset($forum_page[\'ext_actions\'][\'fancy_addthis_settings\'])) {
				$forum_page[\'ext_actions\'][\'fancy_addthis_settings\'] = \'<span><a href="\'.forum_link($forum_url[\'admin_settings_features\']).\'#\'.$ext_info[\'id\'].\'_settings\'.\'">\'.$lang_fancy_addthis[\'Go to settings\'].\'</a></span>\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'co_common' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_repository\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_repository\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_repository\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$pun_extensions_used = array_merge(isset($pun_extensions_used) ? $pun_extensions_used : array(), array($ext_info[\'id\']));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'language\'] !== \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
				include_once $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
			else
				include_once $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';

			include $ext_info[\'path\'].\'/functions.php\';

			if ($forum_user[\'style\'] !== \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/pun_poll.min.css\'))
				$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/pun_poll.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
			else
				$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/pun_poll.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));

			// No script CSS
			$forum_loader->add_css(\'#pun_poll_switcher_block, #pun_poll_add_options_link { display: none; } #pun_poll_form_block, #pun_poll_update_block { display: block !important; }\', array(\'type\' => \'inline\', \'noscript\' => true));

			// JS
			$forum_loader->add_js($ext_info[\'url\'].\'/js/pun_poll.min.js\', array(\'type\' => \'url\', \'async\' => true));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'language\'] !== \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
				include_once $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
			else
				include_once $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';

			include $ext_info[\'path\'].\'/functions.php\';

			if ($forum_user[\'style\'] !== \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/pun_poll.min.css\'))
				$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/pun_poll.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
			else
				$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/pun_poll.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));

			// No script CSS
			$forum_loader->add_css(\'#pun_poll_switcher_block, #pun_poll_add_options_link { display: none; } #pun_poll_form_block, #pun_poll_update_block { display: block !important; }\', array(\'type\' => \'inline\', \'noscript\' => true));

			// JS
			$forum_loader->add_js($ext_info[\'url\'].\'/js/pun_poll.min.js\', array(\'type\' => \'url\', \'async\' => true));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_post_selected' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$topic_poll = FALSE;
			if ($can_edit_subject && ($forum_user[\'group_id\'] == FORUM_ADMIN || $forum_user[\'g_poll_add\'])) {
				$pun_poll_query = array(
					\'SELECT\'	=>	\'question, read_unvote_users, revote, created, days_count, votes_count\',
					\'FROM\'		=>	\'questions\',
					\'WHERE\'		=>	\'topic_id = \'.$cur_post[\'tid\']
				);
				$pun_poll_results = $forum_db->query_build($pun_poll_query) or error(__FILE__, __LINE__);

				if ($row = $forum_db->fetch_row($pun_poll_results)) {
					list($poll_question, $poll_read_unvote_users, $poll_revote, $poll_created, $poll_days_count, $poll_votes_count) = $row;
					$topic_poll = TRUE;
				}

				if ($topic_poll) {
					$pun_poll_query = array(
						\'SELECT\'	=>	\'answer\',
						\'FROM\'		=>	\'answers\',
						\'WHERE\'		=>	\'topic_id = \'.$cur_post[\'tid\'],
						\'ORDER BY\'	=>	\'id ASC\'
					);
					$pun_poll_results = $forum_db->query_build($pun_poll_query) or error(__FILE__, __LINE__);

					$poll_answers = array();
					while ($cur_answer = $forum_db->fetch_assoc($pun_poll_results)) {
						$poll_answers[] = $cur_answer[\'answer\'];
					}

					if (empty($poll_answers)) {
						message($lang_common[\'Bad request\']);
					}
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

//
			$forum_page[\'hidden_fields\'][\'pun_poll_block_status\'] = \'<input type="hidden" name="pun_poll_block_open" id="pun_poll_block_status" value="1" />\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_form_submitted' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($_POST[\'preview\']) && $can_edit_subject && ($forum_user[\'group_id\'] == FORUM_ADMIN || $forum_user[\'g_poll_add\'])) {
				$reset_poll = (isset($_POST[\'reset_poll\']) && $_POST[\'reset_poll\'] == \'1\') ? true : false;
				$remove_poll = (isset($_POST[\'remove_poll\']) && $_POST[\'remove_poll\'] == \'1\') ? true : false;

				// We need to reset poll
				if ($reset_poll) {
					Pun_poll::reset_poll($cur_post[\'tid\']);
				}

				if ($remove_poll) {
					Pun_poll::remove_poll($cur_post[\'tid\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_end_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($_POST[\'reset_poll\']) || $_POST[\'reset_poll\'] != \'1\') {

				if (($forum_user[\'group_id\'] == FORUM_ADMIN && $can_edit_subject) || ($can_edit_subject && !$topic_poll)) {
					// Get information about new poll.
					$new_poll_question = isset($_POST[\'question_of_poll\']) && !empty($_POST[\'question_of_poll\']) ? $_POST[\'question_of_poll\'] : FALSE;
					if (!empty($new_poll_question)) {
						$new_poll_answers = isset($_POST[\'poll_answer\']) && !empty($_POST[\'poll_answer\']) ? $_POST[\'poll_answer\'] : FALSE;
						$new_poll_days = isset($_POST[\'allow_poll_days\']) && !empty($_POST[\'allow_poll_days\']) ? $_POST[\'allow_poll_days\'] : FALSE;
						$new_poll_votes = isset($_POST[\'allow_poll_votes\']) && !empty($_POST[\'allow_poll_votes\']) ? $_POST[\'allow_poll_votes\'] : FALSE;
						$new_read_unvote_users = isset($_POST[\'read_unvote_users\']) && !empty($_POST[\'read_unvote_users\']) ? $_POST[\'read_unvote_users\'] : FALSE;
						$new_revote = isset($_POST[\'revouting\']) ? $_POST[\'revouting\'] : FALSE;

						Pun_poll::data_validation($new_poll_question, $new_poll_answers, $new_poll_days, $new_poll_votes, $new_read_unvote_users, $new_revote);
					}

					if (isset($_POST[\'update_poll\'])) {
						$new_poll_ans_count = isset($_POST[\'poll_ans_count\']) && intval($_POST[\'poll_ans_count\']) > 0 ? intval($_POST[\'poll_ans_count\']) : FALSE;

						if (!$new_poll_ans_count)
							$errors[] = $lang_pun_poll[\'Empty option count\'];
						if ($new_poll_ans_count < 2)
						{
							$errors[] = $lang_pun_poll[\'Min cnt options\'];
							$new_poll_ans_count = 2;
						}

						if ($new_poll_ans_count > $forum_config[\'p_pun_poll_max_answers\'])
						{
							$errors[] = sprintf($lang_pun_poll[\'Max cnt options\'], $forum_config[\'p_pun_poll_max_answers\']);
							$new_poll_ans_count = $forum_config[\'p_pun_poll_max_answers\'];
						}

						$_POST[\'preview\'] = 1;
					} else if ($new_poll_question !== FALSE && empty($errors) && !isset($_POST[\'preview\'])) {
						if (!$topic_poll) {
							Pun_poll::add_poll($cur_post[\'tid\'], $new_poll_question, $new_poll_answers, $new_poll_days !== FALSE ? $new_poll_days : \'NULL\', $new_poll_votes !== FALSE ? $new_poll_votes : \'NULL\', $new_read_unvote_users !== FALSE ? $new_read_unvote_users : \'0\', $new_revote !== FALSE ? $new_revote : \'0\');
						} else {
							Pun_poll::update_poll($cur_post[\'tid\'], $new_poll_question, $new_poll_answers, $new_poll_days !== FALSE ? $new_poll_days : null, $new_poll_votes !== FALSE ? $new_poll_votes : null, $new_read_unvote_users !== FALSE ? $new_read_unvote_users : \'0\', $new_revote !== FALSE ? $new_revote : \'0\', $poll_question, $poll_answers, $poll_days_count, $poll_votes_count, $poll_read_unvote_users, $poll_revote);
						}
					}

				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_preview_pre_display' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ((($forum_user[\'group_id\'] == FORUM_ADMIN && $can_edit_subject) || ($can_edit_subject && !$topic_poll)) && empty($errors)) {
				if (!empty($new_poll_question) && !empty($new_poll_answers)) {
					$forum_page[\'preview_message\'] .= Pun_poll::poll_preview($new_poll_question, $new_poll_answers);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_main_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($can_edit_subject && ($forum_user[\'group_id\'] == FORUM_ADMIN || $forum_user[\'g_poll_add\']))
			{
				//Is there something?
				if ($topic_poll) {
					if ($forum_user[\'group_id\'] == FORUM_ADMIN) {
						Pun_poll::show_form(isset($new_poll_question) ? $new_poll_question : $poll_question, isset($new_poll_answers) ? $new_poll_answers : $poll_answers, isset($new_poll_ans_count) ? $new_poll_ans_count : (isset($new_poll_answers) ? count($new_poll_answers) : count($poll_answers)), isset($new_poll_days) ? $new_poll_days : $poll_days_count, isset($new_poll_votes) ? $new_poll_votes : $poll_votes_count, isset($new_read_unvote_users) ? $new_read_unvote_users : $poll_read_unvote_users, isset($new_revote) ? $new_revote : $poll_revote, true);
					}
				} else {
					Pun_poll::show_form(isset($new_poll_question) ? $new_poll_question : \'\', isset($new_poll_answers) ? $new_poll_answers : \'\', isset($new_poll_ans_count) ? $new_poll_ans_count : (isset($new_poll_answers) ? (count($new_poll_answers) > 2 ? count($new_poll_answers) : 2) : 2), isset($new_poll_days) ? $new_poll_days : FALSE, isset($new_poll_votes) ? $new_poll_votes : FALSE, $forum_config[\'p_pun_poll_enable_read\'] ? (isset($new_read_unvote_users) ? $new_read_unvote_users : \'0\') : FALSE, $forum_config[\'p_pun_poll_enable_revote\'] ? (isset($new_revote) ? $new_revote : \'0\') : FALSE);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_form_submitted' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($fid && ($forum_user[\'group_id\'] == FORUM_ADMIN || $forum_user[\'g_poll_add\']))
			{
				$poll_question = isset($_POST[\'question_of_poll\']) && !empty($_POST[\'question_of_poll\']) ? $_POST[\'question_of_poll\'] : FALSE;
				if (!empty($poll_question))
				{
					$poll_answers = isset($_POST[\'poll_answer\']) && !empty($_POST[\'poll_answer\']) ? $_POST[\'poll_answer\'] : FALSE;
					$poll_days = isset($_POST[\'allow_poll_days\']) && !empty($_POST[\'allow_poll_days\']) ? $_POST[\'allow_poll_days\'] : FALSE;
					$poll_votes = isset($_POST[\'allow_poll_votes\']) && !empty($_POST[\'allow_poll_votes\']) ? $_POST[\'allow_poll_votes\'] : FALSE;
					$poll_read_unvote_users = isset($_POST[\'read_unvote_users\']) && !empty($_POST[\'read_unvote_users\']) ? $_POST[\'read_unvote_users\'] : FALSE;
					$poll_revote = isset($_POST[\'revouting\']) && !empty($_POST[\'revouting\']) ? $_POST[\'revouting\'] : FALSE;

					Pun_poll::data_validation($poll_question, $poll_answers, $poll_days, $poll_votes, $poll_read_unvote_users, $poll_revote);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_end_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($fid && isset($_POST[\'update_poll\']) && empty($errors))	{
				$new_poll_ans_count = isset($_POST[\'poll_ans_count\']) && intval($_POST[\'poll_ans_count\']) > 0 ? intval($_POST[\'poll_ans_count\']) : FALSE;

				if (!$new_poll_ans_count)
					$errors[] = $lang_pun_poll[\'Empty option count\'];

				if ($new_poll_ans_count < 2)
				{
					$errors[] = $lang_pun_poll[\'Min cnt options\'];
					$new_poll_ans_count = 2;
				}

				if ($new_poll_ans_count > $forum_config[\'p_pun_poll_max_answers\'])
				{
					$errors[] = sprintf($lang_pun_poll[\'Max cnt options\'], $forum_config[\'p_pun_poll_max_answers\']);
					$new_poll_ans_count = $forum_config[\'p_pun_poll_max_answers\'];
				}

				$_POST[\'preview\'] = \'pun_poll\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($fid && isset($_POST[\'update_poll\']) && isset($_POST[\'preview\']) && $_POST[\'preview\'] == \'pun_poll\') {
				unset($_POST[\'preview\']);
			}

			//
			$forum_page[\'hidden_fields\'][\'pun_poll_block_status\'] = \'<input type="hidden" name="pun_poll_block_open" id="pun_poll_block_status" value="0" />\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($fid && ($forum_user[\'group_id\'] == FORUM_ADMIN || $forum_user[\'g_poll_add\']) && $poll_question !== FALSE && empty($errors))
			{
				Pun_poll::add_poll($new_tid, $poll_question, $poll_answers, $poll_days !== FALSE ? $poll_days : \'NULL\', $poll_votes !== FALSE ? $poll_votes : \'NULL\', $poll_read_unvote_users === FALSE  ? \'0\' : $poll_read_unvote_users, $poll_revote === FALSE ? \'0\' : $poll_revote);
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'sitemap\',
\'path\'			=> FORUM_ROOT.\'extensions/sitemap\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/sitemap\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/functions.php\';

createSitemap();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_preview_pre_display' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($fid && ($forum_user[\'group_id\'] == FORUM_ADMIN || $forum_user[\'g_poll_add\']) && $poll_question !== FALSE && empty($errors)) {
				$forum_page[\'preview_message\'] .= Pun_poll::poll_preview($poll_question, $poll_answers);
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_req_info_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($fid && ($forum_user[\'group_id\'] == FORUM_ADMIN || $forum_user[\'g_poll_add\']))
			{
				$_poll_question = isset($poll_question) ? $poll_question : \'\';
				$_poll_answers = isset($poll_answers) ? $poll_answers : array();
				$_poll_answers_num = isset($new_poll_ans_count) ? $new_poll_ans_count : ((isset($poll_answers) && count($poll_answers) > 1) ? count($poll_answers) : 2);

				Pun_poll::show_form($_poll_question, $_poll_answers, $_poll_answers_num, !empty($poll_days) ? $poll_days : \'\', !empty($poll_votes) ? $poll_votes : \'\', isset($poll_read_unvote_users) ? $poll_read_unvote_users : \'0\', isset($poll_revote) ? $poll_revote : \'0\');
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ca_fn_prune_qr_prune_topics' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$pun_poll_topic_ids = isset($topic_ids) ? $topic_ids : implode(\',\', $topics);
			$query_poll = array(
				\'DELETE\'	=>	\'voting\',
				\'WHERE\'		=>	\'topic_id IN(\'.$pun_poll_topic_ids.\')\'
			);
			$forum_db->query_build($query_poll) or error(__FILE__, __LINE__);

			$query_poll = array(
				\'DELETE\'	=>	\'questions\',
				\'WHERE\'		=>	\'topic_id IN(\'.$pun_poll_topic_ids.\')\'
			);
			$forum_db->query_build($query_poll) or error(__FILE__, __LINE__);

			$query_poll = array(
				\'DELETE\'	=>	\'answers\',
				\'WHERE\'		=>	\'topic_id IN(\'.$pun_poll_topic_ids.\')\'
			);
			$forum_db->query_build($query_poll) or error(__FILE__, __LINE__);
			unset($pun_poll_topic_ids);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'mr_confirm_delete_topics_qr_delete_topics' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$pun_poll_topic_ids = isset($topic_ids) ? $topic_ids : implode(\',\', $topics);
			$query_poll = array(
				\'DELETE\'	=>	\'voting\',
				\'WHERE\'		=>	\'topic_id IN(\'.$pun_poll_topic_ids.\')\'
			);
			$forum_db->query_build($query_poll) or error(__FILE__, __LINE__);

			$query_poll = array(
				\'DELETE\'	=>	\'questions\',
				\'WHERE\'		=>	\'topic_id IN(\'.$pun_poll_topic_ids.\')\'
			);
			$forum_db->query_build($query_poll) or error(__FILE__, __LINE__);

			$query_poll = array(
				\'DELETE\'	=>	\'answers\',
				\'WHERE\'		=>	\'topic_id IN(\'.$pun_poll_topic_ids.\')\'
			);
			$forum_db->query_build($query_poll) or error(__FILE__, __LINE__);
			unset($pun_poll_topic_ids);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_delete_topic_qr_delete_topic' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include_once $ext_info[\'path\'].\'/functions.php\';

			Pun_poll::remove_poll($topic_id);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'mr_qr_get_forum_data' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_POST[\'merge_topics\']) || isset($_POST[\'merge_topics_comply\']))
			{
				$poll_topics = isset($_POST[\'topics\']) && !empty($_POST[\'topics\']) ? $_POST[\'topics\'] : array();
				$poll_topics = array_map(\'intval\', (is_array($poll_topics) ? $poll_topics : explode(\',\', $poll_topics)));

				if (empty($poll_topics))
					message($lang_misc[\'No topics selected\']);

				if (count($poll_topics) == 1)
					message($lang_misc[\'Merge error\']);

				$query_poll = array(
					\'SELECT\'	=>	\'topic_id\',
					\'FROM\'		=>	\'questions\',
					\'WHERE\'		=>	\'topic_id IN(\'.implode(\',\', $poll_topics).\')\'
				);
				$result_pun_poll = $forum_db->query_build($query_poll) or error(__FILE__, __LINE__);

				$polls = array();
				while ($row = $forum_db->fetch_assoc($result_pun_poll)) {
					$polls[] = $row[\'topic_id\'];
				}

				if (count($polls) > 1) {
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
						include_once $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					else
						include_once $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';

					message($lang_pun_poll[\'Merge error\']);
				} else if (count($polls) === 1) {
					$question_id = $polls[0];
				}

				unset($num_polls, $polls);
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'mr_confirm_merge_topics_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($question_id) && $question_id != $merge_to_tid)
			{
				$query_poll = array(
					\'UPDATE\'	=>	\'questions\',
					\'SET\'		=>	\'topic_id = \'.$merge_to_tid,
					\'WHERE\'		=>	\'topic_id = \'.$question_id
				);
				$forum_db->query_build($query) or error(__FILE__, __LINE__);
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_modify_topic_info' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$forum_user[\'is_guest\']) {
				//Get info about poll
				$query_pun_poll = array(
					\'SELECT\'	=>	\'question, read_unvote_users, revote, created, days_count, votes_count AS max_votes_count\',
					\'FROM\'		=>	\'questions\',
					\'WHERE\'		=>	\'topic_id = \'.$id
				);
				$result_pun_poll = $forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);
				$pun_poll = $forum_db->fetch_assoc($result_pun_poll);

				// Is there something?
				if (!is_null($pun_poll) && $pun_poll !== false) {
					if ($forum_user[\'style\'] !== \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/pun_poll.min.css\'))
						$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/pun_poll.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
					else
						$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/pun_poll.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));

					// JS
					$forum_loader->add_js($ext_info[\'url\'].\'/js/pun_poll.min.js\', array(\'type\' => \'url\', \'async\' => true));

					$end_voting = false;
					$pun_poll[\'revote\'] = ($forum_config[\'p_pun_poll_enable_revote\'] == \'1\') ? $pun_poll[\'revote\'] : 0;
					$pun_poll[\'read_unvote_users\'] = ($forum_config[\'p_pun_poll_enable_read\'] == \'1\') ? $pun_poll[\'read_unvote_users\'] : 0;

					// Check up for condition of end poll
					if ($pun_poll[\'days_count\'] != 0 && time() > $pun_poll[\'created\'] + $pun_poll[\'days_count\'] * 86400) {
						$end_voting = true;
					} else if ($pun_poll[\'max_votes_count\'] != 0) {
						// Get count of votes
						$query_pun_poll = array(
							\'SELECT\'	=>	\'COUNT(id) AS vote_count\',
							\'FROM\'		=>	\'voting\',
							\'WHERE\'		=>	\'topic_id=\'.$id
						);
						$result_pun_poll = $forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);
						$row = $forum_db->fetch_assoc($result_pun_poll);
						$vote_count = $row[\'vote_count\'];

						if ($vote_count >= $pun_poll[\'max_votes_count\']) {
							$end_voting = true;
						}
					}

					if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
						include_once $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					else
						include_once $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';

					// Does user want to vote?
					if (isset($_POST[\'vote\'])) {
						if ($end_voting) {
							message($lang_pun_poll[\'End of vote\']);
						}

						$answer_id = isset($_POST[\'answer\']) ? intval($_POST[\'answer\']) : 0;
						if ($answer_id < 1) {
							message($lang_common[\'Bad request\']);
						}

						// Is there answer with this id?
						$query_pun_poll = array(
							\'SELECT\'	=>	\'COUNT(*)\',
							\'FROM\'		=>	\'answers\',
							\'WHERE\'		=>	\'topic_id=\'.$id.\' AND id=\'.$answer_id
						);
						$result_pun_poll = $forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);
						if ($forum_db->result($result_pun_poll) < 1) {
							message($lang_common[\'Bad request\']);
						}

						// Have user voted?
						$query_pun_poll = array(
							\'SELECT\'	=>	\'answer_id\',
							\'FROM\'		=>	\'voting\',
							\'WHERE\'		=>	\'topic_id=\'.$id.\' AND user_id=\'.$forum_user[\'id\']
						);
						$result_pun_poll = $forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);
						$row = $forum_db->fetch_assoc($result_pun_poll);
						$old_answer_id = FALSE;
						if ($row) {
							$old_answer_id = $row[\'answer_id\'];
						}

						// CAN revote?
						if (!$pun_poll[\'revote\'] && $old_answer_id !== FALSE) {
							message($lang_pun_poll[\'User vote error\']);
						}

						// If user have voted we update table,
						// if not - insert new record
						if ($pun_poll[\'revote\'] && $old_answer_id !== FALSE) {
							// Do we needed to update DB?
							if ($old_answer_id != $answer_id) {
								$query_pun_poll = array(
									\'UPDATE\'	=>	\'voting\',
									\'SET\'		=>	\'answer_id=\'.$answer_id,
									\'WHERE\'		=>	\'topic_id=\'.$id.\' AND user_id=\'.$forum_user[\'id\']
								);
								$forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);

								// Replace old answer id with new for correct output
								$old_answer_id = $answer_id;
							}
						} else {
							// Add new record
							$query_pun_poll = array(
								\'INSERT\'	=>	\'topic_id, user_id, answer_id\',
								\'INTO\'		=>	\'voting\',
								\'VALUES\'	=>	$id.\', \'.$forum_user[\'id\'].\', \'.$answer_id
							);
							$forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);
						}

						redirect(forum_link($forum_url[\'topic\'], array($id, sef_friendly($cur_topic[\'subject\']))), $lang_pun_poll[\'Poll redirect\']);
					} else {
						// Determine user have voted or not
						$query_pun_poll = array(
							\'SELECT\'	=>	\'COUNT(*)\',
							\'FROM\'		=>	\'voting\',
							\'WHERE\'		=>	\'user_id=\'.$forum_user[\'id\'].\' AND topic_id=\'.$id
						);
						$result_pun_poll = $forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);
						$is_voted_user = ($forum_db->result($result_pun_poll) > 0) ? true : false;
					}
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Is there something to show?
			if (isset($pun_poll[\'read_unvote_users\']) && !$forum_user[\'is_guest\']) {
				// If we don\'t get count of votes
				if (!isset($vote_count)) {
					$query_pun_poll = array(
						\'SELECT\'	=>	\'COUNT(*) AS vote_count\',
						\'FROM\'		=>	\'voting\',
						\'WHERE\'		=>	\'topic_id=\'.$id
					);
					$result_pun_poll = $forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);
					$row = $forum_db->fetch_assoc($result_pun_poll);
					$vote_count = $row[\'vote_count\'];
				}

				// Showing of vote-form if users can revote or user don\'t vote
				if (!$end_voting && (($is_voted_user && $pun_poll[\'revote\']) || $is_voted_user === false)) {
					$query_pun_poll = array(
						\'SELECT\'	=>	\'id, answer\',
						\'FROM\'		=>	\'answers\',
						\'WHERE\'		=>	\'topic_id=\'.$id,
						\'ORDER BY\'	=>	\'id ASC\'
					);
					$result_pun_poll = $forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);

					$pun_poll_answers = array();
					while ($row = $forum_db->fetch_assoc($result_pun_poll)) {
						$pun_poll_answers[] = $row;
					}

					if (!empty($pun_poll_answers))
					{
						$vote_form = \'\';
						$link = forum_link($forum_url[\'topic\'], $id);

						$vote_form = \'
							<div class="pun_poll_item unvotted">
								<div class="pun_poll_header">\'.forum_htmlencode($pun_poll[\'question\']).\'</div>
								<div class="main-frm">
									<form class="frm-form" action="\'.$link.\'" accept-charset="utf-8" method="post">
										<fieldset class="frm-group group1">
											<div class="hidden">
												<input type="hidden" name="csrf_token" value="\'.generate_form_token($link).\'" />
											</div>
											<fieldset class="mf-set set1">
												<legend><span>\'.$lang_pun_poll[\'Options\'].\'</span></legend>
												<div class="mf-box">\';

						// Determine old answer of user
						if (!isset($old_answer_id)) {
							$query_pun_poll = array(
								\'SELECT\'	=>	\'answer_id\',
								\'FROM\'		=>	\'voting\',
								\'WHERE\'		=>	\'topic_id = \'.$id.\' AND user_id = \'.$forum_user[\'id\'],
								\'ORDER BY\'	=>	\'answer_id ASC\'
							);
							$result_poll = $forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);

							// If there is something?
							$row = $forum_db->fetch_assoc($result_poll);
							if ($row) {
								$old_answer_id = $row[\'answer_id\'];
							}
							unset($result_poll);
						}


						$num = 0;
						foreach ($pun_poll_answers as $answer) {
							$num++;
							$vote_form .= \'
								<div class="mf-item pun_poll_answer_block" data-num="\'.$num.\'">
									<span class="fld-input">
										<input id="fld\'.$num.\'" type="radio"\'.((isset($old_answer_id) && $old_answer_id == $answer[\'id\']) ? \' checked="checked"\' : \'\').\' value="\'.$answer[\'id\'].\'" name="answer" />
									</span>
									<label for="fld\'.$num.\'">\'.forum_htmlencode($answer[\'answer\']).\'</label>
								</div>\';
						}

						$vote_form .= \'
												</div>
											</fieldset>
										</fieldset>
										<div class="frm-buttons">
											<span class="submit">
												<input type="submit" value="\'.$lang_pun_poll[\'But note\'].\'" name="vote" />
											</span>
										</div>
									</form>
								</div>
							</div>\';
					}
				}

				// Showing voting results if user have voted or unread user can see voting results
				if ($end_voting || $is_voted_user || (!$is_voted_user && $pun_poll[\'read_unvote_users\'])) {
					if (isset($vote_count) && $vote_count > 0) {
						$query_pun_poll = array(
							\'SELECT\'	=>	\'answer, COUNT(v.id) as num_vote\',
							\'FROM\'		=>	\'answers as a\',
							\'JOINS\'		=>	array(
								array(
									\'LEFT JOIN\'	=>	\'voting AS v\',
									\'ON\'		=>	\'a.id=v.answer_id\'
								)
							),
							\'WHERE\'		=>	\'a.topic_id=\'.$id,
							\'GROUP BY\'	=>	\'a.id\',
							\'ORDER BY\'	=>	\'a.id\'
						);
						$result_pun_poll = $forum_db->query_build($query_pun_poll) or error(__FILE__, __LINE__);

						$vote_results = \'<div class="pun_poll_item votted"><div class="pun_poll_header">\'.forum_htmlencode($pun_poll[\'question\']).\'</div>\';
						$vote_results_raw = array();
						$num = $winner_index = $cur_vote_index = 0;
						$max_vote = $num_winner = 0;

						while ($row = $forum_db->fetch_assoc($result_pun_poll)) {
							$vote_results_raw[] = $row;
							if ($row[\'num_vote\'] > $max_vote) {
								$max_vote = $row[\'num_vote\'];
								$winner_index = $cur_vote_index;
							}

							$cur_vote_index++;
						}

						// Case when winner is not one
						foreach ($vote_results_raw as $vote) {
							if ($vote[\'num_vote\'] == $max_vote) {
								$num_winner++;
							}
						}

						if ($num_winner !== 1) {
							// No winner
							$winner_index = -1;
						}

						foreach ($vote_results_raw as $vote) {
							$pollResultWidth = ((float)/**/$vote[\'num_vote\'] / $vote_count * 100);
							$vote_results .= \'
								<dl>
									<dt><strong>\'.forum_number_format((float)/**/$vote[\'num_vote\'] / $vote_count * 100).\'%</strong><br/>(\'.$vote[\'num_vote\'].\')</dt>
									<dd>\'.forum_htmlencode($vote[\'answer\'])
										.\'<div class="\'.(($winner_index == $num) ? \'winner\' : \'\').(($pollResultWidth > 0) ? \'\' : \' poll-empty\').\'" style="width: \'.$pollResultWidth.\'%;"></div>
									</dd>
								</dl>\';
							$num++;
						}

						$num++;
						$vote_results .= \'<p class="pun_poll_total">\'.$lang_pun_poll[\'Users count\'].$vote_count.\'</p>\';
						$vote_results .= \'</div>\';
					} else {
						$vote_results = \'<div class="ct-box info-box"><p>\'.$lang_pun_poll[\'No votes\'].\'</p></div>\';
					}
				} else {
					$vote_results = \' \';
				}

				unset($tmp_pagepost, $vote_count, $num, $result_pun_poll, $query_pun_poll, $count_v, $answer, $is_voted_user, $end_voting, $pun_poll);
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_fancy_addthis)) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/lang.php\';
				}
			}

			// CSS for disabled JS hide bar
			$forum_loader->add_css(\'#fancy_addthis_topic_toolbox, .fancy-addthis-post { display: none; }\',
				array(\'type\' => \'inline\', \'noscript\' => true));

			$forum_loader->add_css(\'
				#fancy_addthis_topic_toolbox { min-height: 30px; margin: .75em 0 0; height: 30px; overflow: hidden; }
				#fancy_addthis_topic_toolbox table { float: right; width: auto; }
				#fancy_addthis_topic_toolbox td { border: none; padding: .2em; height: 30px; vertical-align: bottom; }
				#fancy_addthis_topic_toolbox .addthis_button_tweet { cursor:pointer; min-width:50px; display:inline-block; }
				#fancy_addthis_topic_toolbox .addthis_button_facebook_like { width:46px; overflow:hidden; display:inline-block; }
				#fancy_addthis_topic_toolbox .addthis_button_google_plusone { min-width:25px; position:relative; display:inline-block; }
				#fancy_addthis_topic_toolbox td > a { height: 28px; }\',
				array(\'type\' => \'inline\'));

			$forum_loader->add_js(\'//s7.addthis.com/js/250/addthis_widget.js#domready=1\', array(\'weight\' => 250));

			$fancy_addthis_js_env = \'
				PUNBB.env.fancy_addthis = {
					show_onclick: "",
					pubid: ""
				};\';


			$forum_loader->add_js($fancy_addthis_js_env, array(\'type\' => \'inline\', \'weight\' => 251));
			$forum_loader->add_js(\'PUNBB.fancy_addthis=(function(){var a={ui_click:true,ui_delay:75,ui_508_compliant:false};return{init:function(){var c,d,b,e,f;if(document.getElementsByClassName){f=document.getElementsByClassName("fancy-addthis-link");}else{f=PUNBB.common.arrayOfMatched(function(g){return PUNBB.common.hasClass(g,"fancy-addthis-link");},document.getElementsByTagName("span"));}for(c=0,b=f.length;c<b;c+=1){d=f[c];e={url:d.getAttribute("data-share-url")};addthis.button(d,a,e);PUNBB.common.addClass(d,"js_link");}}};}());PUNBB.common.addDOMReadyEvent(PUNBB.fancy_addthis.init);\', array(\'type\' => \'inline\', \'weight\' => 252));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aop_features_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
				include_once $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
			else
				include_once $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'agr_edit_end_qr_update_group' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SET\'] .= \', g_poll_add=\'.((isset($_POST[\'poll_add\']) && $_POST[\'poll_add\'] == \'1\') ? 1 : 0);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'agr_add_edit_group_user_permissions_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_poll\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_poll\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_poll\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
				include_once $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
			else
				include_once $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
			?>
				<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<legend>
						<span><?php echo $lang_pun_poll[\'Permission\'] ?></span>
					</legend>
					<div class="mf-box">
						<div class="mf-item">
							<span class="fld-input">
								<input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="poll_add" value="1"<?php if ($group[\'g_poll_add\'] == \'1\') echo \' checked="checked"\' ?>/>
							</span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_poll[\'Poll add\'] ?></label>
						</div>
					</div>
				</fieldset>
			<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aex_add_repository_for_developer_helper' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$inst_exts[\'developer_helper\'][\'repo_url\'] = $repository_url_by_extension[] = \'http://punbb.ru/repository\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aop_new_section' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

App::$admin_section = true;
$forum_page[\'crumbs\'] = array(
	array($forum_config[\'o_board_title\'], forum_link($forum_url[\'index\'])),
	array($lang_admin_common[\'Forum administration\'], forum_link($forum_url[\'admin_index\']))
);		

App::route();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_new_section' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

App::$profile_section = true;
$forum_page[\'crumbs\'] = array(
	array($forum_config[\'o_board_title\'], forum_link($forum_url[\'index\'])),
	array(sprintf($lang_profile[\'Users profile\'], $forum_user[\'username\']), forum_link($forum_url[\'user\'], $forum_user[\'id\']))
);
App::route();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_message_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (App::$is_ajax)
{
	App::send_json(array(\'code\' => -1, \'message\' => $message, \'sender\' => \'developer_helper\'));
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'ajax_post_edit\',
\'path\'			=> FORUM_ROOT.\'extensions/ajax_post_edit\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/ajax_post_edit\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (strpos($_SERVER[\'SCRIPT_FILENAME\'], \'extensions/ajax_post_edit/edit.php\') !== false)
	exit($message);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_redirect_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (App::$is_ajax)
{
	App::send_json(array(\'code\' => -2, \'redirect\' => $message, \'destination_url\' => $destination_url, \'sender\' => \'developer_helper\'));
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_get_current_url_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_SERVER[\'HTTP_X_REQUESTED_WITH\']) AND $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\' AND !isset($_POST[\'csrf_token\']))
{
	return $GLOBALS[\'forum_user\'][\'prev_url\'];
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_cookie_login_qr_update_online_user' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_SERVER[\'HTTP_X_REQUESTED_WITH\']) AND $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\')
{
	$query[\'SET\'] = str_replace(\', prev_url=\\\'\'.$forum_db->escape($current_url).\'\\\'\', \'\', $query[\'SET\']);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_csrf_confirm_form_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_SERVER[\'HTTP_X_REQUESTED_WITH\']) AND $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\' AND !defined(\'DEVELOPER_HELPER_CSRF_CONFIRM\'))
{		
	foreach ($_POST as $submitted_key => $submitted_val)
		if ($submitted_key != \'csrf_token\' && $submitted_key != \'prev_url\')
		{
			$hidden_fields = _csrf_confirm_form($submitted_key, $submitted_val);
			foreach ($hidden_fields as $field_key => $field_val)
				$forum_page[\'hidden_fields\'][$field_key] = forum_htmlencode($field_val);
		}

	$send_data = array(
		\'code\'		=>	-3, 
		\'message\'	=>	$lang_common[\'CSRF token mismatch\'],
		\'sender\'	=>	\'developer_helper\',
		\'csrf_token\'=>	generate_form_token(get_current_url()),	
		\'prev_url\'	=>	forum_htmlencode($forum_user[\'prev_url\']),
		
	);
	if (isset($forum_page[\'hidden_fields\']))
		$send_data[\'post_data\'] = $forum_page[\'hidden_fields\'];
	
	App::send_json($send_data);		
	return 1;
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'ajax_post_edit\',
\'path\'			=> FORUM_ROOT.\'extensions/ajax_post_edit\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/ajax_post_edit\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (strpos($_SERVER[\'SCRIPT_FILENAME\'], \'extensions/ajax_post_edit/edit.php\') !== false)
	exit(\'csrf_confirm:\'.$lang_common[\'CSRF token mismatch\'].\':\'.generate_form_token($ext_info[\'url\'].\'/edit.php\'));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ft_about_pre_copyright' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_nya_jquery_ui_include_css\'] == \'0\' &&  !empty($ext_jQuery_UI->UI_css))
			{
				echo \'<style>
				\';
				foreach ($ext_jQuery_UI->UI_css as $name => $ui_url)
				{
					if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/\'.$ui_url.\'.css\'))
						$ext_nya_jquery_ui_css = $ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/\'.$ui_url.\'.css\';
					else
						$ext_nya_jquery_ui_css = $ext_info[\'url\'].\'/css/Oxygen/\'.$ui_url.\'.css\';
							
					echo \'@import "\'.$ext_nya_jquery_ui_css.\'";
					\';
				}
				if (!empty($ext_jQuery_UI->UI_style_url))
				{
					foreach ($ext_jQuery_UI->UI_style_url as $name => $ui_style_url)
					{
						echo \'@import "\'.$ui_style_url.\'";
					\';
					}
				}
				if (!empty($ext_jQuery_UI->UI_style))
				{
					foreach ($ext_jQuery_UI->UI_style as $name => $ui_style)
					{				
						echo $ui_style;
					}
				}
				echo \'</style>
				\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'reputation\',
\'path\'			=> FORUM_ROOT.\'extensions/reputation\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/reputation\',
\'dependencies\'	=> array (
\'developer_helper\'	=> array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\'),
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'nya_jquery_ui\'	=> array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/hook_dispatcher.php\';
Reputation_Hook_Dispatcher::front_end_init();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'agr_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'reputation\',
\'path\'			=> FORUM_ROOT.\'extensions/reputation\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/reputation\',
\'dependencies\'	=> array (
\'developer_helper\'	=> array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\'),
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'nya_jquery_ui\'	=> array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/hook_dispatcher.php\';
Reputation_Hook_Dispatcher::back_end_init();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aop_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'reputation\',
\'path\'			=> FORUM_ROOT.\'extensions/reputation\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/reputation\',
\'dependencies\'	=> array (
\'developer_helper\'	=> array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\'),
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'nya_jquery_ui\'	=> array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/hook_dispatcher.php\';
Reputation_Hook_Dispatcher::back_end_init();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'reputation\',
\'path\'			=> FORUM_ROOT.\'extensions/reputation\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/reputation\',
\'dependencies\'	=> array (
\'developer_helper\'	=> array(
\'id\'				=> \'developer_helper\',
\'path\'			=> FORUM_ROOT.\'extensions/developer_helper\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/developer_helper\'),
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'nya_jquery_ui\'	=> array(
\'id\'				=> \'nya_jquery_ui\',
\'path\'			=> FORUM_ROOT.\'extensions/nya_jquery_ui\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/nya_jquery_ui\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/hook_dispatcher.php\';
Reputation_Hook_Dispatcher::profile_init();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ft_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'ajax_post_edit\',
\'path\'			=> FORUM_ROOT.\'extensions/ajax_post_edit\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/ajax_post_edit\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (FORUM_PAGE == \'viewtopic\') {
	preg_match_all("#\\<div\\sid\\=\\"p(\\d*)\\"#s", $tpl_main, $output);
	foreach($output[1] as $s) {
		$str = substr($tpl_main, strpos($tpl_main, \'<div id="p\'.$s.\'"\'));
		$str = substr($str, 0, strpos($str, \'</p>\'));
		$old = $str;
		$str = str_replace(\'<div class="entry-content">\', \'<div id="post\'.$s.\'" class="entry-content">\', $str);
		$tpl_main = str_replace($old, $str, $tpl_main);
	}
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_row_pre_post_actions_merge' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'ajax_post_edit\',
\'path\'			=> FORUM_ROOT.\'extensions/ajax_post_edit\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/ajax_post_edit\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$forum_user[\'is_guest\'] && ($forum_user[\'is_admmod\'] || ($cur_post[\'poster_id\'] == $forum_user[\'id\'] && $forum_user[\'g_edit_posts\'] == \'1\' && $cur_topic[\'closed\'] == \'0\')))
{
	$content = \'<span class="edit-post\'.(!empty($forum_page[\'post_actions\']) ? \' item1\' : \'\').\'" id="menu\'.$cur_post[\'id\'].\'"><a href="javascript:PUNBB.env.ape.show_menu(\'. $cur_post[\'id\'].\')">\'.$lang_topic[\'Edit\'].\'<span> \'.$lang_topic[\'Post\'].\' \'.forum_number_format($forum_page[\'start_from\'] + $forum_page[\'item_count\']).\'</span></a></span>\';

	if (!isset($forum_page[\'post_actions\'][\'edit\']))
		$forum_page[\'post_actions\'][\'edit\'] = \'<span class="edit-post\'.(empty($forum_page[\'post_actions\']) ? \' first-item\' : \'\').\'"><a href="\'.forum_link($forum_url[\'edit\'], $cur_post[\'id\']).\'">\'.$lang_topic[\'Edit\'].\'<span> \'.$lang_topic[\'Post\'].\' \'.forum_number_format($forum_page[\'start_from\'] + $forum_page[\'item_count\']).\'</span></a></span>\';

	$noscript = \'<noscript>\' . $forum_page[\'post_actions\'][\'edit\'] . \'</noscript>\';

	$forum_page[\'post_actions\'][\'edit\'] = \'<script type="text/javascript">document.write(\\\'\' . $content . \'\\\')</script>\'. $noscript;

}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_page[\'post_actions\'][\'fancy_addthis_code\'] = \'
				<span class="fancy-addthis-post\'.(empty($forum_page[\'post_actions\']) ? \' first-item\' : \'\').\'">
					<span class="fancy-addthis-link" data-share-url="\'.forum_link($forum_url[\'post\'], $cur_post[\'id\']).\'">\'.
						$lang_fancy_addthis[\'Share\'].\'
					</span>
				</span>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ft_debug_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_admin_clear_cache\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_admin_clear_cache\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_admin_clear_cache\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'g_id\'] == FORUM_ADMIN)
			{
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
				else
					require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';

				?>
				<p style="font-size: 0.917em; text-align: right;"><a href="<?php echo FORUM_ROOT; ?>misc.php?action=pun_admin_clear_cache&prev_url=<?php echo urlencode(get_current_url(255));  ?>"><?php echo $lang_pun_admin_clear_cache[\'Clear cache\']; ?></a></p>
				<?php
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'sitemap\',
\'path\'			=> FORUM_ROOT.\'extensions/sitemap\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/sitemap\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/functions.php\';

createSitemap();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'dl_topic_deleted_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'sitemap\',
\'path\'			=> FORUM_ROOT.\'extensions/sitemap\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/sitemap\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/functions.php\';

createSitemap();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'acg_del_cat_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'sitemap\',
\'path\'			=> FORUM_ROOT.\'extensions/sitemap\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/sitemap\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/functions.php\';

createSitemap();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'afo_add_forum_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'sitemap\',
\'path\'			=> FORUM_ROOT.\'extensions/sitemap\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/sitemap\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/functions.php\';

createSitemap();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'afo_del_forum_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'sitemap\',
\'path\'			=> FORUM_ROOT.\'extensions/sitemap\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/sitemap\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/functions.php\';

createSitemap();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'afo_update_positions_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'sitemap\',
\'path\'			=> FORUM_ROOT.\'extensions/sitemap\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/sitemap\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/functions.php\';

createSitemap();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'afo_save_forum_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'sitemap\',
\'path\'			=> FORUM_ROOT.\'extensions/sitemap\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/sitemap\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/functions.php\';

createSitemap();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'afo_revert_perms_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'sitemap\',
\'path\'			=> FORUM_ROOT.\'extensions/sitemap\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/sitemap\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/functions.php\';

createSitemap();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
);

?>