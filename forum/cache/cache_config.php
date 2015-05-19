<?php

define('FORUM_CONFIG_LOADED', 1);

$forum_config = array (
  'o_cur_version' => '1.4.18',
  'o_database_revision' => '5',
  'o_board_title' => 'Epic Type форум',
  'o_board_desc' => 'Официальный форум проекта Epic Type',
  'o_default_timezone' => '4',
  'o_time_format' => 'H:i:s',
  'o_date_format' => 'Y-m-d',
  'o_check_for_updates' => '1',
  'o_check_for_versions' => '1',
  'o_timeout_visit' => '5400',
  'o_timeout_online' => '300',
  'o_redirect_delay' => '0',
  'o_show_version' => '0',
  'o_show_user_info' => '1',
  'o_show_post_count' => '1',
  'o_signatures' => '1',
  'o_smilies' => '1',
  'o_smilies_sig' => '1',
  'o_make_links' => '0',
  'o_default_lang' => 'English',
  'o_default_style' => 'Oxygen',
  'o_default_user_group' => '3',
  'o_topic_review' => '15',
  'o_disp_topics_default' => '30',
  'o_disp_posts_default' => '25',
  'o_indent_num_spaces' => '4',
  'o_quote_depth' => '3',
  'o_quickpost' => '1',
  'o_users_online' => '1',
  'o_censoring' => '1',
  'o_ranks' => '1',
  'o_show_dot' => '1',
  'o_topic_views' => '1',
  'o_quickjump' => '1',
  'o_gzip' => '1',
  'o_additional_navlinks' => '0 = <a href="http://epictype.ru">Наш сайт</a>',
  'o_report_method' => '0',
  'o_regs_report' => '0',
  'o_default_email_setting' => '1',
  'o_mailing_list' => 'support@epictype.ru',
  'o_avatars' => '1',
  'o_avatars_dir' => 'img/avatars',
  'o_avatars_width' => '200',
  'o_avatars_height' => '200',
  'o_avatars_size' => '100000',
  'o_search_all_forums' => '1',
  'o_sef' => 'Default',
  'o_admin_email' => 'support@epictype.ru',
  'o_webmaster_email' => 'support@epictype.ru',
  'o_subscriptions' => '1',
  'o_smtp_host' => NULL,
  'o_smtp_user' => NULL,
  'o_smtp_pass' => NULL,
  'o_smtp_ssl' => '0',
  'o_regs_allow' => '1',
  'o_regs_verify' => '1',
  'o_announcement' => '0',
  'o_announcement_heading' => 'Приветствие',
  'o_announcement_message' => '<p>Добро пожаловать на наш форум! Также  вы можете посетить  <a href="http://epictype.ru">наш сайт</a></p>',
  'o_rules' => '1',
  'o_rules_message' => '<div class="ipsBox rules">
	<strong class="bbc">Общие положения</strong><br><br>1.Незнание правил данного форума не освобождает от ответственности.<br>2.Регистрация на форуме означает, что Вы согласны с данными правилами и обязуетесь их выполнять.<br>3.За несоблюдение правил администрация имеет право применять разного рода наказуемые санкции.<br>4.Все сообщения отражают мнения их авторов, и администрация никакой ответственности за них не несёт.<br>5.Соблюдайте нормы приличия. Старайтесь уважительно относиться ко всем участникам форума.<br><br><strong class="bbc">Права и обязанности пользователей </strong><br><br>Права пользователя:<br><br>1.1. Пользователь имеет право располагать любую информацию на форуме, которая не нарушает законы Российской Федерации и той страны, в которой он проживает.<br>1.2. Пользователь имеет право на свое мнение.<br>1.3. Пользователь имеет право создать новую тему в любом форуме в соответствии с данными правилами (после определенного количества сообщений на форуме, которое определяется администрацией форума).<br>1.4. Пользователь имеет право требовать от других участников форума соблюдения данных правил.<br>1.5. Пользователь имеет право оспорить действия администрации, с которыми он не согласен, посредством личных сообщений представителям администрации и/или в отведенному для этого разделе на форуме.<br><br><strong class="bbc">Пользователь <span class="bbc_underline">обязан</span>:</strong><br><br>2.1. При регистрации указать существующий адрес электронной почты. Именно на него придет активация Вашего аккаунта.<br>Если Вы желаете сохранить приватность, то можете запретить публикацию вашего адреса электронной почты.<br>Администрация оставляет за собой право использовать адреса электронной почты участников для рассылки объявлений общего характера, для рассылки спама Ваш адрес электронной почты использован не будет. От рассылок администрации Вы можете отказаться в своём профиле.<br>2.2. Перед тем, как оставлять свои первые сообщения на форуме, ознакомиться с правилами форума, в который собирается писать своё сообщение и убедиться, что тема создаётся в форуме соответствующей тематики.<br>2.3. Перед созданием новой темы убедиться, что подобная тема ещё не обсуждалась. Для этого использовать фильтр по названию и описанию темы, а также поиск.<br>Создание одинаковых тем в разных разделах расценивается как флуд.<br>2.4. При цитировании чужой статьи указывать источник, откуда она была взята.<br>2.5. При создании новой темы давать ей осмысленное название. Оно должно отражать суть вопроса или сообщения. За названия, подобные "Помогите пожалуйста", "У меня проблема" и т.п., Ваша тема будет удалена. При повторных нарушениях Вам будет запрещена возможность создания тем.<br>2.6. Не оставлять "мусорных" сообщений. Они должны нести какой-то смысл, понятный всем, а не только Вам.<br>2.7. Избегать излишнего цитирования. За бессмысленное цитирование (в особенности больших сообщений) администрация или модератор в праве применить административные санкции.<br>2.8. Формулировать вопросы так, что бы человек, читающий его, понимал проблему и не уточнял ее.<br>2.9 Быть корректными в своих высказываниях.  <br>2.10 Прятать большие изображения под спойлер.<br><br><strong class="bbc">Запрещается: </strong><br><br>3.1. Регистрировать бессмысленные никнеймы (например HnkIu578 или Aaa, 1234 и т.п.), выбирать никнеймы, звучащие вызывающе или оскорбительно, использовать в никнейме нецензурные слова, адреса веб-сайтов, адреса электронной почты и т.п. Данные аккаунты будут удаляться без предупреждения.<br>3.2. Регистрировать несколько аккаунтов, а также регистрировать двойника уже существующего никнейма (или визуально похожего). Также запрещен захват ников (регистрация никнеймов с целью препятствования использования их другими).<br>3.3. Создавать сообщения, которые содержат заведомо ложнyю информацию, гpубые, нецензурные выражения, как в явном, так и завуалированном виде.<br>3.4. Создавать темы и сообщения, которые искажают внешний вид форума, а также злоупотреблять визуальным оформлением сообщений и подписи (крупные шрифты, бессмысленные картинки, большое количество смайликов). Сообщения, содержащие только смайлик/смайлики также запрещены.<br>3.5. Создавать темы, не соответствующие тематике форума. Администрация или модераторы оставляют за собой право переносить темы в соответствующие, по их мнению, форумы.<br>3.6. Использовать аватары, которые так или иначе оскорбляют участников форума, или нарушают действующее законодательство, а также использовать аватар, который уже используется или использовался долгое время другим участником форума.<br>3.7. Оскорблять и принижать других участников форума, их родных или близких, их мнения, взгляды на жизнь, вероисповедание и национальную принадлежность, а также провокация подобных высказываний и любой переход на личности.<br>3.8. Создавать тему или сообщение ЗАГЛАВНЫМИ БУКВАМИ (за исключением сокращений или наименования компаний, торговых марок, товаров, и прочего, т.е. всего того, что традиционно пишется в верхнем регистре).<br>Если вы хотите особо подчеркнуть какое-то слово, рекомендуется использовать выделение, курсив, подчеркивание или цвет.<br>3.9. Размещать на форуме рекламу (в любом виде, в том числе подписи)<br>3.10 Самовольное модерирование – указание другому участнику дискуссии на недопустимость или несоответствие правилам его высказываний. Также запрещено публичное обсуждение действий модератора.<br>3.11. Запрещается редактировать или удалять замечания модераторов и/или представителей администрации.<br>3.12 Запрещается прямое или косвенное разглашение любых сведений из личной жизни участников форума без их явно выраженного согласия.<br>3.13 Использовать текстовую или визуальную информацию порнографического характера.<br>3.14 Запрещено писать сообщения, не содержащие смысла и не прибавляющие ценности топику. Подобные публикации будут удалены без предупреждения.<br>- Категорически запрещается писать односложные сообщения, типа "нравится", "не нравится", "согласен", "поддерживаю", "и я такого мнения", "аналогично" и т. п.<br>- Категорически запрещается просто отвечать на поставленный вопрос без какой либо аргументации.<br>3.15 Запрещено создание сообщений типа "спасибо", "thanks", "молодец", "круто" и т.п. Для этого есть кнопка "Спасибо".<br>3.16 Запрещено общение на "падонковском" сленге или на так званом Олбанском языке. Как разовая стилизация это, может быть, еще и допустимо, но постоянно общаться в подобном стиле запрещено.<br>3.17 Запрещено вставлять в сообщения картинки больших расширений при помощи [img] тэгов. Для создания превью используйте любые обменники. При нарушении сообщения пользователя будут удалятся без предупреждений, а автора будут наказываться по всей строгости правил.<br>3.18 Запрещено обращаться к конкретному пользователю во всех темах, кроме тех, которые предусматривают это (именные форумы, разделы разработчиков и пр.)<br>3.20 Запрещено обращаться к конкретному пользователю во всех темах, кроме тех, которые предусматривают это (именные форумы, разделы разработчиков и пр.)<br>3.21 Запрещено раскрытие ключевых моментов сюжета, знание которых может испортить другим впечатление от просмотра/прочтения/прохождения/разгадки главной интриги фильма/книги/игры и т.п без использования тега "спойлер".<br>3.22 Запрещено публиковать в сообщениях изображения неэтического порнографического или иного негативного смыслового содержания, а также изображения, содержащие нецензурные выражения.<br>3.23 Запрещено публиковать ссылки на скачивание пиратских игр.<br>3.24 Сообщения рекламного характера, не согласованные с администрацией форума, будут удаляться, а аккуант будет заблокирован либо удален, если администрация форума посчитает это нужным.<br>3.25. Ссылки, размещенные без согласования с Разработчиком, будут удаляться.<br><br><strong class="bbc">Права и обязанности модератора: </strong><br><br>Модератор следит за порядком на форуме, а также развивает отданный ему раздел.<br><br>Модератор в праве:<br><br>4.1.1. Предупредить нарушителя о возможных последствиях его действий.4.1.2. Отредактировать сообщение нарушителя.<br>4.1.3. Удалить любое сообщение по своему усмотрению, делать предупреждения участникам форума, а также, за любое нарушение данных правил, ограничивать их доступ на форум ("банить") на строк, который считает нужным, но в разумных пределах.<br>4.1.4. Модератор имеет право перенести тему, не относящуюся к разделу, в другой, соответствующий теме раздел или в тему для флейма.<br><br><em class="bbc">Помните, в случае если вы считаете, что модератор или кто-то другой с числа Администрации не прав, вы можете обратиться за разъяснениями к администрации форума в ПМ или соответствующий раздел на форуме. </em><br><br>Обязанности модератора:<br><br>4.2.1. Соблюдать общие правила форума и не нарушать правил, за соблюдение которых они сами и отвечают.<br>2.2.2. Удалять нецензурные выражения и ругательства из всех сообщений. Сообщения, оскорбляющие кого-либо из посетителей форума, должны быть удалены в любом случае.<br>4.2.3. Следить за появлением флейма в темах: делать устные предупреждения пользователям и сигнализировать администраторам о грубых нарушениях.<br>4.2.4. За разрешениями сложных вопросов модераторы должны обращаться к администрации форума.<br><br>Модераторам <span class="bbc_underline">запрещается</span>:<br><br>4.3.1. Прилюдно высказывать недовольство действиями пользователей.<br>4.3.2. Использовать возможности модератора для личных целей.<br><br><strong class="bbc">Администрация имеет право:</strong><br><br>5.1. Удалять аккаунт участника, не имеющего ни одного сообщения. Удаление производится через месяц от времени последней активности, а никнейм освобождается для регистрации другим пользователем.<br>5.2. Удалять или изменять Ваши учетные данные в соответствии с данными Правилами.<br>5.3. Администрация имеет все права модераторов, т.е. может редактировать\\изменять\\удалять посты, выдавать предупреждения (в том числе средством редактирования постов), делать замечания, которые посчитала нужными и т.д.<br><br><em class="bbc"><strong class="bbc">Примечание.</strong> Администрация форума может изменять, дополнять и дорабатывать правила форума, если это необходимо, без предварительного уведомления пользователям.</em>
</div>',
  'o_maintenance' => '0',
  'o_maintenance_message' => 'The forums are temporarily down for maintenance. Please try again in a few minutes.<br /><br />Administrator',
  'o_default_dst' => '0',
  'p_message_bbcode' => '1',
  'p_message_img_tag' => '1',
  'p_message_all_caps' => '0',
  'p_subject_all_caps' => '0',
  'p_sig_all_caps' => '0',
  'p_sig_bbcode' => '1',
  'p_sig_img_tag' => '1',
  'p_sig_length' => '400',
  'p_sig_lines' => '4',
  'p_allow_banned_email' => '1',
  'p_allow_dupe_email' => '0',
  'p_force_guest_email' => '1',
  'o_show_moderators' => '0',
  'o_mask_passwords' => '1',
  'o_pun_jquery_include_method' => '3',
  'o_pun_pm_inbox_size' => '100',
  'o_pun_pm_outbox_size' => '100',
  'o_pun_pm_show_new_count' => '1',
  'o_pun_pm_show_global_link' => '1',
  'p_pun_poll_enable_read' => '1',
  'p_pun_poll_enable_revote' => '0',
  'p_pun_poll_max_answers' => '7',
  'o_nya_jquery_ui_include_method' => '0',
  'o_nya_jquery_ui_include_css' => '1',
  'o_reputation_enabled' => '1',
  'o_reputation_timeout' => '300',
  'o_reputation_maxmessage' => '400',
  'o_reputation_show_full' => '1',
  'o_fancy_addthis_button_gplus' => '1',
  'o_fancy_addthis_button_twitter' => '1',
  'o_fancy_addthis_button_facebook' => '1',
);

?>