<?php

if (!defined('FORUM')) exit;
define('FORUM_QJ_LOADED', 1);
$forum_id = isset($forum_id) ? $forum_id : 0;

?><form id="qjump" method="get" accept-charset="utf-8" action="http://epictype.ru/forum/viewforum.php">
	<div class="frm-fld frm-select">
		<label for="qjump-select"><span><?php echo $lang_common['Jump to'] ?></span></label><br />
		<span class="frm-input"><select id="qjump-select" name="id">
			<optgroup label="Наши проекты">
				<option value="32"<?php echo ($forum_id == 32) ? ' selected="selected"' : '' ?>>Вопросы для подкаста</option>
				<option value="21"<?php echo ($forum_id == 21) ? ' selected="selected"' : '' ?>>Бан-лист</option>
				<option value="25"<?php echo ($forum_id == 25) ? ' selected="selected"' : '' ?>>Административный</option>
				<option value="13"<?php echo ($forum_id == 13) ? ' selected="selected"' : '' ?>>Игровой канал</option>
				<option value="14"<?php echo ($forum_id == 14) ? ' selected="selected"' : '' ?>>Официальный фан-сайт</option>
				<option value="15"<?php echo ($forum_id == 15) ? ' selected="selected"' : '' ?>>Форум</option>
			</optgroup>
			<optgroup label="Сервер Minecraft">
				<option value="28"<?php echo ($forum_id == 28) ? ' selected="selected"' : '' ?>>Обновления сервера</option>
				<option value="11"<?php echo ($forum_id == 11) ? ' selected="selected"' : '' ?>>Разработка сервера</option>
				<option value="12"<?php echo ($forum_id == 12) ? ' selected="selected"' : '' ?>>Важная информация и новости сервера</option>
				<option value="18"<?php echo ($forum_id == 18) ? ' selected="selected"' : '' ?>>Игровой раздел</option>
				<option value="23"<?php echo ($forum_id == 23) ? ' selected="selected"' : '' ?>>Вопросы связанные с работой сервера</option>
				<option value="24"<?php echo ($forum_id == 24) ? ' selected="selected"' : '' ?>>Вопросы связанные с работой клиента</option>
			</optgroup>
			<optgroup label="Игры">
				<option value="16"<?php echo ($forum_id == 16) ? ' selected="selected"' : '' ?>>Секреты и пасхалки игр</option>
				<option value="26"<?php echo ($forum_id == 26) ? ' selected="selected"' : '' ?>>Прохождения игр</option>
				<option value="27"<?php echo ($forum_id == 27) ? ' selected="selected"' : '' ?>>Об играх</option>
				<option value="29"<?php echo ($forum_id == 29) ? ' selected="selected"' : '' ?>>Watch Dogs</option>
				<option value="30"<?php echo ($forum_id == 30) ? ' selected="selected"' : '' ?>>Minecraft</option>
				<option value="31"<?php echo ($forum_id == 31) ? ' selected="selected"' : '' ?>>Dayz</option>
			</optgroup>
			<optgroup label="Офтопик">
				<option value="19"<?php echo ($forum_id == 19) ? ' selected="selected"' : '' ?>>Творчество</option>
				<option value="17"<?php echo ($forum_id == 17) ? ' selected="selected"' : '' ?>>Общение на разные темы</option>
			</optgroup>
		</select>
		<input type="submit" id="qjump-submit" value="<?php echo $lang_common['Go'] ?>" /></span>
	</div>
</form>
<?php

$forum_javascript_quickjump_code = <<<EOL
(function () {
	var forum_quickjump_url = "http://epictype.ru/forum/viewforum.php?id=$1";
	var sef_friendly_url_array = new Array(20);
	sef_friendly_url_array[32] = "voprosy-dlya-podkasta";
	sef_friendly_url_array[21] = "banlist";
	sef_friendly_url_array[25] = "administrativnyi";
	sef_friendly_url_array[13] = "igrovoi-kanal";
	sef_friendly_url_array[14] = "ofitsialnyi-fansait";
	sef_friendly_url_array[15] = "forum";
	sef_friendly_url_array[28] = "obnovleniya-servera";
	sef_friendly_url_array[11] = "razrabotka-servera";
	sef_friendly_url_array[12] = "vazhnaya-informatsiya-i-novosti-servera";
	sef_friendly_url_array[18] = "igrovoi-razdel";
	sef_friendly_url_array[23] = "voprosy-svyazannye-s-rabotoi-servera";
	sef_friendly_url_array[24] = "voprosy-svyazannye-s-rabotoi-klienta";
	sef_friendly_url_array[16] = "sekrety-i-paskhalki-igr";
	sef_friendly_url_array[26] = "prokhozhdeniya-igr";
	sef_friendly_url_array[27] = "ob-igrakh";
	sef_friendly_url_array[29] = "watch-dogs";
	sef_friendly_url_array[30] = "minecraft";
	sef_friendly_url_array[31] = "dayz";
	sef_friendly_url_array[19] = "tvorchestvo";
	sef_friendly_url_array[17] = "obshchenie-na-raznye-temy";

	PUNBB.common.addDOMReadyEvent(function () { PUNBB.common.attachQuickjumpRedirect(forum_quickjump_url, sef_friendly_url_array); });
}());
EOL;

$forum_loader->add_js($forum_javascript_quickjump_code, array('type' => 'inline', 'weight' => 60, 'group' => FORUM_JS_GROUP_SYSTEM));
?>
