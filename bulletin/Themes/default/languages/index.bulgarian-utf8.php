<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'bg_BG.utf8';
$txt['lang_dictionary'] = 'bg';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Неделя', 'Понеделник', 'Вторник', 'Сряда', 'Четвъртък', 'Петък', 'Събота');
$txt['days_short'] = array('Нед.', 'Пон.', 'Вт.', 'Ср.', 'Четв.', 'Пет.', 'Съб.');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Януари', 'Февруари', 'Март', 'Април', 'Май', 'Юни', 'Юли', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември');
$txt['months_titles'] = array(1 => 'Януари', 'Февруари', 'Март', 'Април', 'Май', 'Юни', 'Юли', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември');
$txt['months_short'] = array(1 => 'Ян.', 'Февр.', 'Март', 'Апр.', 'Май', 'Юни', 'Юли', 'Авг.', 'Септ.', 'Окт.', 'Ноем.', 'Дек.');

$txt['newmessages0'] = 'е ново';
$txt['newmessages1'] = 'са нови';
$txt['newmessages3'] = 'Нови';
$txt['newmessages4'] = ',';

$txt[2] = 'Администрация';

$txt[10] = 'Запази';

$txt[17] = 'Промени';
$txt[18] = $context['forum_name'] . ' ';
$txt[19] = 'Членове';
$txt[20] = 'Име на форум';
$txt[21] = 'Публикации';
$txt[22] = 'Последна публикация';

$txt[24] = '(Без заглавие)';
$txt[26] = 'Публикации';
$txt[27] = 'Профил';
$txt[28] = 'Гост';
$txt[29] = 'Автор';
$txt[30] = '-';
$txt[31] = 'Премахни';
$txt[33] = 'Започни нова тема';

$txt[34] = 'Вход';
// Use numeric entities in the below string.
$txt[35] = 'Потребителско име';
$txt[36] = 'Парола';

$txt[40] = 'Потребителското име не съществува.';

$txt[62] = 'Модератор на форума';
$txt[63] = 'Премахни темата';
$txt[64] = 'Теми';
$txt[66] = 'Редактирай съобщението';
$txt[68] = 'Име';
$txt[69] = 'Ел. поща';
$txt[70] = 'Заглавие';
$txt[72] = 'Съобщение';

$txt[79] = 'Редактирай профила';

$txt[81] = 'Избери парола';
$txt[82] = 'Повтори паролата';
$txt[87] = 'Позиция';

$txt[92] = 'Виж профила на';
$txt[94] = 'Общ брой';
$txt[95] = 'Публикации';
$txt[96] = 'Уеб страница';
$txt[97] = 'Регистрация';

$txt[101] = 'Индекс на съобщенията';
$txt[102] = 'Новини';
$txt[103] = 'Начало';

$txt[104] = 'Заключи/Отключи темата';
$txt[105] = 'Публикувай';
$txt[106] = 'Грешка!';
$txt[107] = 'в';
$txt[108] = 'Изход';
$txt[109] = 'Започната от';
$txt[110] = 'Отговори';
$txt[111] = 'Последна<br />публикация';
$txt[114] = 'Административен вход';
// Use numeric entities in the below string.
$txt[118] = 'Тема';
$txt[119] = 'Помощ';
$txt[121] = 'Изтрий съобщението';
$txt[125] = 'Извести';
$txt[126] = 'Желаеш ли известителен е-мейл при нови отговори към тази тема?';
// Use numeric entities in the below string.
$txt[130] = "Поздрави,\nЕкипът на " . $context['forum_name'] . '.';
$txt[131] = 'Извести ме при нови отговори';
$txt[132] = 'Премести тема';
$txt[133] = 'Премести в';
$txt[139] = 'Страници';
$txt[140] = 'Активни потребители през последните ' . $modSettings['lastActive'] . ' минути';
$txt[144] = 'Лични съобщения';
$txt[145] = 'Отговори с цитат';
$txt[146] = 'Отговор';

$txt[151] = 'Няма съобщения...';
$txt[152] = 'имаш';
$txt[153] = 'съобщения';
$txt[154] = 'Изтрий това съобщение';

$txt[158] = 'Потребители online';
$txt[159] = 'Лично съобщение';
$txt[160] = 'Отиди на';
$txt[161] = 'Отиди';
$txt[162] = 'Сигурен ли си, че искаш да изтриеш тази тема?';
$txt[163] = 'Да';
$txt[164] = 'Не';

$txt[166] = 'Резултати от търсенето';
$txt[167] = 'Край на резултатите';
$txt[170] = 'Съжалявам, няма намерени резултати';
$txt[176] = 'в';

$txt[182] = 'Търси';
$txt[190] = 'Всички';

$txt[193] = 'Обратно';
$txt[194] = 'напомняне';
$txt[195] = 'Темата е започната от';
$txt[196] = 'Титла';
$txt[197] = 'Публикувано от';
$txt[200] = 'Списък (с опции за търсене) на всички регистрирани членове на форума.';
$txt[201] = 'Моля, приветствайте';
$txt[208] = 'Административен център';
$txt[211] = 'Последна редакция';
$txt[212] = 'Желаеш ли да деактивираш известяването чрез е-мейл при нови отговори към тази тема?';

$txt[214] = 'Последни публикации';

$txt[227] = 'Местонахождение';
$txt[231] = 'Пол';
$txt[233] = 'Дата на регистрация';

$txt[234] = 'Прегледай последните 10 публикации в този форум.';
$txt[235] = 'е последната актуализирана тема';

$txt[238] = 'Мъж';
$txt[239] = 'Жена';

$txt[240] = 'Невалиден знак използван в потребителското име.';

$txt['welcome_guest'] = 'Добре дошъл/дошла, <b>' . $txt[28] . '</b>. Моля, <a href="' . $scripturl . '?action=login">въведи своето потребителско име</a> или <a href="' . $scripturl . '?action=register">се регистрирай</a>.';
$txt['welcome_guest_activate'] = '<br />Изгуби ли <a href="' . $scripturl . '?action=activate">регистрационния е-мейл?</a>';
$txt['hello_member'] = 'Здрасти,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Добре дошъл/дошла,';
$txt[247] = 'Здрасти,';
$txt[248] = 'Добре дошъл/дошла,';
$txt[249] = 'Моля,';
$txt[250] = 'Обратно';
$txt[251] = 'Моля, избери';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Публикувана от';

$txt[287] = 'Усмивчица';
$txt[288] = 'Ядосан';
$txt[289] = 'Смотан';
$txt[290] = 'Смях';
$txt[291] = 'Тъжен';
$txt[292] = 'Намигване';
$txt[293] = 'Ухилен';
$txt[294] = 'Шокиран';
$txt[295] = 'Готин';
$txt[296] = 'Ъ?';
$txt[450] = 'Завърти очи';
$txt[451] = 'Плезещ се';
$txt[526] = 'Засрамен';
$txt[527] = 'Млъкнал';
$txt[528] = 'Нерешителен';
$txt[529] = 'Целувчица';
$txt[530] = 'Плачещ';

$txt[298] = 'Модератор';
$txt[299] = 'Модератори';

$txt[300] = 'Маркирай всички теми на този форум като прочетени';
$txt[301] = 'Прегледи';
$txt[302] = 'Нови';

$txt[303] = 'Виж всички потребители';
$txt[305] = 'Виж';
$txt[307] = 'Е-мейл';

$txt[308] = 'Преглед на потребители';
$txt[309] = 'от';
$txt[310] = 'общ брой членове';
$txt[311] = 'до';
$txt[315] = 'Забравил си паролата?';

$txt[317] = 'Дата';
// Use numeric entities in the below string.
$txt[318] = 'От';
$txt[319] = 'Заглавие';
$txt[322] = 'Провери за нови съобщения';
$txt[324] = 'До';

$txt[330] = 'Теми';
$txt[331] = 'Членове';
$txt[332] = 'Списък на членовете';
$txt[333] = 'Нови публикации';
$txt[334] = 'Няма нови публикации';

$txt['sendtopic_send'] = 'Изпрати';

$txt[371] = 'Времева разлика';
$txt[377] = 'или';

$txt[398] = 'Съжалявам, не бяха открити съвпадения';

$txt[418] = 'Известие';

$txt[430] = 'Съжалявам, %s, достъпът до този форум ти е забранен!';

$txt[452] = 'Маркирай ВСИЧКИ публикации като прочетени';

$txt[454] = 'Гореща тема (Повече от ' . $modSettings['hotTopicPosts'] . ' Отговора)';
$txt[455] = 'Много гореща Тема (Повече от ' . $modSettings['hotTopicVeryPosts'] . ' Отговора)';
$txt[456] = 'Заключена тема';
$txt[457] = 'Обикновена тема';
$txt['participation_caption'] = 'Тема, в която си публикувал отговор';

$txt[462] = 'Отиди';

$txt[465] = 'Изпечатай';
$txt[467] = 'Профил';
$txt[468] = 'Обобщение на темите';
$txt[470] = 'N/A';
$txt[471] = 'съобщение';
$txt[473] = 'Потребителското име е заето от друг член на форума.';

$txt[488] = 'Общ брой потребители';
$txt[489] = 'Общ брой публикации';
$txt[490] = 'Общ брой теми';

$txt[497] = 'Продължителност на сесията в минути';

$txt[507] = 'Предварителен преглед';
$txt[508] = 'Запомни потребителското име и парола';

$txt[511] = 'Активен';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'от';

$txt[578] = 'часа';
$txt[579] = 'дни';

$txt[581] = ', най-новия член на форума.';

$txt[582] = 'Търси';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hi.+Are+you+there?';
$txt[604] = 'YIM';

$txt[616] = 'Внимание! Форумът е в \'Режим на Профилактика\'.';

$txt[641] = 'Прочетена';
$txt[642] = 'пъти';

$txt[645] = 'Статистика на форума';
$txt[656] = 'Последен член';
$txt[658] = 'Общ брой категории';
$txt[659] = 'Последна публикация';

$txt[660] = 'Имаш';
$txt[661] = 'Кликни';
$txt[662] = 'тук';
$txt[663] = 'за да ги видиш.';

$txt[665] = 'Общ брой раздели';

$txt[668] = 'Отпечатване';

$txt[679] = 'Адресът на електронната поща трябва да бъде валиден.';

$txt[683] = 'Май се объркахте малко!!!';
$txt[685] = $context['forum_name'] . ' - Информационен център';

$txt[707] = 'Изпрати темата';

$txt['sendtopic_title'] = 'Изпрати темата &quot;%s&quot; на приятел.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Скъпи(а) %s,';
$txt['sendtopic_this_topic'] = 'Бих искал да прегледап темата "%s" в ' . $context['forum_name'] . '.  Моля, последвай този линк';
$txt['sendtopic_thanks'] = 'Благодаря';
$txt['sendtopic_sender_name'] = 'Твоето име';
$txt['sendtopic_sender_email'] = 'Твоята ел. поша';
$txt['sendtopic_receiver_name'] = 'Името на получателя';
$txt['sendtopic_receiver_email'] = 'Ел. поща на получателя';
$txt['sendtopic_comment'] = 'Добави коментар';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Добавен е коментар към тази тема';

$txt[721] = 'Скрий ел. поща?';

$txt[737] = 'Маркирай всички';

// Use numeric entities in the below string.
$txt[1001] = 'Грешка с базата данни';
$txt[1002] = 'Моля, опитайте отново.  Ако тази грешка възникне отново, уведомете администраторите.';
$txt[1003] = 'Файл';
$txt[1004] = 'Линия';
// Use numeric entities in the below string.
$txt[1005] = 'SMF откри и се опита да поправи автоматично грешка в базата данни.  Ако проблемът продължи, или продължиш да получаваш тези е-мейли, моля свържи се с твоя хост доставчик.';
$txt['database_error_versions'] = '<b>Забележка:</b> It appears that your database may require an upgrade. Your forum files are currently at version ' . $forum_version . ', whereas your database is at version SMF ' . $modSettings['smfVersion'] . '. It is recommended that you execute the latest version of upgrade.php.';
$txt['template_parse_error'] = 'Грешка в синтаксиса! Template Parse Error! ';
$txt['template_parse_error_message'] = 'Изглежда има временен проблем със зареждането на структурата на форума. Този проблем би трябвало да е временен, така че опитайте по-късно. Ако все още виждате този текст, обърнете се към администратора.<br /><br />Може да пробвате <a href="javascript:location.reload();">да обновите тази сраница</a>.   ';
$txt['template_parse_error_details'] = 'Проблем при зареждането на <tt><b>%1$s</b></tt> шаблона или езиков файл. Моля проверете синтаксиса и опитайте отново - внимание, single quotes (<tt>\'</tt>) често трябва да бъдат затворени със slash (<tt>\\</tt>). За да видите повече информация за грешката на PHP, опитайте да <a href="' . $boardurl . '%1$s">отворите файла директно</a>.

Опитайте да <a href="javascript:location.reload();">тази страница</a> или <a href="' . $scripturl . '?theme=1">превключете към основния дизайн на форума</a>.';

$txt['smf10'] = '<b>Днес</b> в ';
$txt['smf10b'] = '<b>Вчера</b> в ';
$txt['smf20'] = 'Публикувай нова анкета';
$txt['smf21'] = 'Въпрос';
$txt['smf23'] = 'Въведи твоя глас';
$txt['smf24'] = 'Общ брой гласове';
$txt['smf25'] = 'натисни alt+s за да въведеш/публикуваш или alt+p за да направиш предварителен преглед';
$txt['smf29'] = 'Виж резултатите.';
$txt['smf30'] = 'Прекрати гласуване';
$txt['smf30b'] = 'Поднови гласуване';
$txt['smf39'] = 'Редактирай анкетата';
$txt['smf43'] = 'Анкета';
$txt['smf47'] = '1 Ден';
$txt['smf48'] = '1 Седмица';
$txt['smf49'] = '1 Месец';
$txt['smf50'] = 'Завинаги';
$txt['smf52'] = 'Влез с потребителско име, парола и продължителност на сесията';
$txt['smf53'] = '1 Час';
$txt['smf56'] = 'ПРЕМЕСТЕНО';
$txt['smf57'] = 'Моля, въведи кратко описание на причината<br />, поради която тази тема се мести.';
$txt['smf60'] = 'Съжалявам, нямаш достатъчно публикации за да променяш рейтинг - нуждаеш се от минимум ';
$txt['smf62'] = 'Съжалявам, не можеш да промениш рейтинга преди да изчакаш ';
$txt['smf82'] = 'Форум';
$txt['smf88'] = 'в';
$txt['smf96'] = 'Важна тема';

$txt['smf138'] = 'Изтрий';

$txt['smf199'] = 'Твоите лични съобщения';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Още статистики]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Код';
$txt['smf239'] = 'Цитат на';
$txt['smf240'] = 'Цитат';

$txt['smf251'] = 'Раздели тема';
$txt['smf252'] = 'Слей Теми';
$txt['smf254'] = 'Заглавие за нова тема';
$txt['smf255'] = 'Раздели само тази публикация.';
$txt['smf256'] = 'Раздели темата след тази публикация (включително и нея).';
$txt['smf257'] = 'Избери публикациите за разделяне.';
$txt['smf258'] = 'Нова тема';
$txt['smf259'] = 'Темата е успешно разделена на две теми.';
$txt['smf260'] = 'Оригинална тема';
$txt['smf261'] = 'Моля, избери кои публикации искаш да разделиш.';
$txt['smf264'] = 'Темите бяха успешно слети.';
$txt['smf265'] = 'Нови слети теми';
$txt['smf266'] = 'Тема, която ще бъде слята';
$txt['smf267'] = 'Избери раздел за сливането';
$txt['smf269'] = 'Избери тема за сливането';
$txt['smf274'] = 'Сигурен ли си, че искаш да извършиш сливането?';
$txt['smf275'] = 'с';
$txt['smf276'] = 'Тази функция ще слее публикациите на две теми в една тема. Съобщенията ще бъдат запазени според реда на публикуването си. Следователно, най-рано публикуваното съобщение ще бъде първата публикация на новата слята тема.';

$txt['smf277'] = 'Залепи темата';
$txt['smf278'] = 'Отлепи темата';
$txt['smf279'] = 'Заключи темата';
$txt['smf280'] = 'Отключи темата';

$txt['smf298'] = 'Експертно търсене';

$txt['smf299'] = 'ЗНАЧИТЕЛЕН РИСК ПО СИГУРНОСТТА:';
$txt['smf300'] = 'Не си изтрил ';

$txt['smf301'] = 'Страницата е създадена за ';
$txt['smf302'] = ' секунди с ';
$txt['smf302b'] = ' запитвания.';

$txt['smf315'] = 'Използвай тази функция за да информираш модераторите и администираторите на този форум за обидно или погрешно публикувано съобщение.<br /><i>Моля, имай в предвид, че твоя е-мейл ще бъде достъпен до модераторите ако използваш тази функция.</i>';

$txt['online2'] = 'Активен';
$txt['online3'] = 'Неактивен';
$txt['online4'] = 'Лично съобщение (Активен)';
$txt['online5'] = 'Лично съобщение (Неактивен)';
$txt['online8'] = 'Статут';

$txt['topbottom4'] = 'Нагоре';
$txt['topbottom5'] = 'Надолу';

if ($_SERVER['QUERY_STRING']=='')
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> :: <a href="http://www.siteground.com">Hosting Services for SMF by SiteGround</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}
else
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}


$txt['calendar3'] = 'Рождени дни:';
$txt['calendar4'] = 'Събития:';
$txt['calendar3b'] = 'Бъдещи рождени дни:';
$txt['calendar4b'] = 'Бъдещи събития:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Месец:';
$txt['calendar10'] = 'Година:';
$txt['calendar11'] = 'Ден:';
$txt['calendar12'] = 'Заглавие на събитието:';
$txt['calendar13'] = 'Публикация в:';
$txt['calendar20'] = 'Редактирай събитието';
$txt['calendar21'] = 'Изтрий събитието?';
$txt['calendar22'] = 'Изтрий събитието';
$txt['calendar23'] = 'Добави събитие';
$txt['calendar24'] = 'Календар';
$txt['calendar37'] = 'Връзка към календара';
$txt['calendar43'] = 'Свържи събитието';
$txt['calendar47'] = 'Календар на форума';
$txt['calendar47b'] = 'Днешният календар';
$txt['calendar51'] = 'Седмица';
$txt['calendar54'] = 'Брой дни:';
$txt['calendar_how_edit'] = 'как мога да редактирам тези събития?';
$txt['calendar_link_event'] = 'Прикачване на събитие към публикация:';
$txt['calendar_confirm_delete'] = 'Сигурен ли си че желаеш да изтриеш събитието?';
$txt['calendar_linked_events'] = 'Добавени събития';

$txt['moveTopic1'] = 'Публикувай препращаща тема';
$txt['moveTopic2'] = 'Промени заглавието на темата';
$txt['moveTopic3'] = 'Ново заглавие';
$txt['moveTopic4'] = 'Промени заглавието на всички съобщения';

$txt['theme_template_error'] = 'Графичния шаблон \'%s\' не може да бъде зареден.';
$txt['theme_language_error'] = 'Езиковия файл \'%s\' не може да бъде зареден.';

$txt['parent_boards'] = 'Под-раздели';

$txt['smtp_no_connect'] = 'Неуспешна връзка с SMTP хоста';
$txt['smtp_port_ssl'] = 'Настройката SMTP портовете е грешна; ползвайте порт 465 за SSL сървъри.';
$txt['smtp_bad_response'] = 'Couldn\'t get mail server response codes.';
$txt['smtp_error'] = 'Проблем при изпращането на е-мейл. Грешка:';
$txt['mail_send_unable'] = 'Неуспешно изпращане на съобщение до \'%s\'';

$txt['mlist_search'] = 'Tърси потребители';
$txt['mlist_search2'] = 'Търси отново';
$txt['mlist_search_email'] = 'Търси по адрес на ел. поща';
$txt['mlist_search_messenger'] = 'Търси по прякор в чат програмите';
$txt['mlist_search_group'] = 'Търси по позиция';
$txt['mlist_search_name'] = 'Търси по име';
$txt['mlist_search_website'] = 'Търси по адрес на уеб страница';
$txt['mlist_search_results'] = 'Резултати от търсенето за';

$txt['attach_downloaded'] = 'свалено';
$txt['attach_viewed'] = 'видяно';
$txt['attach_times'] = 'пъти';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Настройки';
$txt['never'] = 'Никога';
$txt['more'] = 'повече';

$txt['hostname'] = 'Хост';
$txt['you_are_post_banned'] = 'Съжалявам, %s, съществува забрана, която не ти позволява да публикуваш или изпращаш лични съобщения в този форум.';
$txt['ban_reason'] = 'Причина';

$txt['tables_optimized'] = 'Таблиците на базата данни са оптимизирани';

$txt['add_poll'] = 'Добави анкета';
$txt['poll_options6'] = 'Може да избереш максимум %s опции.';
$txt['poll_remove'] = 'Премахни анкетата';
$txt['poll_remove_warn'] = 'Сигурен ли си, че искаш да премахнеп анкетата от тази тема?';
$txt['poll_results_expire'] = 'Резултатите ще бъдат показани, когато анкетата приключи.';
$txt['poll_expires_on'] = 'Гласуването приключва';
$txt['poll_expired_on'] = 'Гласуването приключено';
$txt['poll_change_vote'] = 'Изтрий глас';
$txt['poll_return_vote'] = 'Опции за гласуване';

$txt['quick_mod_remove'] = 'Изтрий избраните';
$txt['quick_mod_lock'] = 'Заключи избраните';
$txt['quick_mod_sticky'] = 'Залепи/Отлепи избраните';
$txt['quick_mod_move'] = 'Премести избраните в';
$txt['quick_mod_merge'] = 'Слей избраните';
$txt['quick_mod_markread'] = 'Маркираните да станат като прочетени';
$txt['quick_mod_go'] = 'Давай!';
$txt['quickmod_confirm'] = 'Сигурен ли си?';

$txt['spell_check'] = 'Проверка правопис';

$txt['quick_reply_1'] = 'Бърз отговор';
$txt['quick_reply_2'] = 'Чрез <i>Бърз отговор</i>, можеш да използваш bulletin board код и усмивчици, както и при обикновен отговор.';
$txt['quick_reply_warning'] = 'Внимание: тази тема е заключена!<br />Само администратори и модератори могат да публикуват отговори.';

$txt['notification_enable_board'] = 'Сигурен ли си, че искаш да включиш известяването за нови теми в този форум?';
$txt['notification_disable_board'] = 'Сигурен ли си, че искаш да изключиш известяването за нови теми в този форум?';
$txt['notification_enable_topic'] = 'Сигурен ли си, че искаш да включиш известяването за нови отговори към тази тема?';
$txt['notification_disable_topic'] = 'Сигурен ли си, че искаш да изключиш известяването за нови отговори към тази тема?';

$txt['rtm1'] = 'Информирай модератор';

$txt['unread_topics_visit'] = 'Последни непрочетени теми';
$txt['unread_topics_visit_none'] = 'Няма непрочетени теми от последното ти посещение.  <a href="' . $scripturl . '?action=unread;all">Опитай всички непрочетени теми</a>.';
$txt['unread_topics_all'] = 'Всички непрочетени теми';
$txt['unread_replies'] = 'Обновени теми';

$txt['who_title'] = 'Кой е активен';
$txt['who_and'] = ' и ';
$txt['who_viewing_topic'] = ' преглежда(т) тази тема.';
$txt['who_viewing_board'] = ' преглежда(т) този форум.';
$txt['who_member'] = 'Член';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by PHP';
$txt['valid_html'] = 'Валиден HTML 4.01! ';
$txt['valid_xhtml'] = 'Валиден XHTML 1.0! ';
$txt['valid_css'] = 'Валиден CSS! ';

$txt['guest'] = 'Гост';
$txt['guests'] = 'Гости';
$txt['user'] = 'Потребител';
$txt['users'] = 'Потребители';
$txt['hidden'] = 'Скрит(и)';
$txt['buddy'] = 'Приятел';
$txt['buddies'] = 'Приятели';
$txt['most_online_ever'] = 'Най-много онлайн';
$txt['most_online_today'] = 'Най-много за днес';

$txt['merge_select_target_board'] = 'Избери предназначения форум за слятата тема';
$txt['merge_select_poll'] = 'Избери анкетата, която да има слятата тема';
$txt['merge_topic_list'] = 'Избери теми за сливане';
$txt['merge_select_subject'] = 'Избери заглавие на слятата тема';
$txt['merge_custom_subject'] = 'Заглавие';
$txt['merge_enforce_subject'] = 'Промени заглавието на всички съобщения';
$txt['merge_include_notifications'] = 'Включи известията?';
$txt['merge_check'] = 'Сливане?';
$txt['merge_no_poll'] = 'Няма анкета';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Текуща икона';

$txt['smileys_current'] = 'Текущ комплект усмивчици';
$txt['smileys_none'] = 'Няма усмивчици';
$txt['smileys_forum_board_default'] = 'Основни за форума';

$txt['search_results'] = 'Резултати от търсене';
$txt['search_no_results'] = 'Не бяха открити резултати';

$txt['totalTimeLogged1'] = 'Време на активност: ';
$txt['totalTimeLogged2'] = ' дни, ';
$txt['totalTimeLogged3'] = ' часа и ';
$txt['totalTimeLogged4'] = ' минути.';
$txt['totalTimeLogged5'] = 'д ';
$txt['totalTimeLogged6'] = 'ч ';
$txt['totalTimeLogged7'] = 'м';

$txt['approve_thereis'] = 'Има';
$txt['approve_thereare'] = 'Има';
$txt['approve_member'] = 'един член';
$txt['approve_members'] = 'членове';
$txt['approve_members_waiting'] = 'очакващ(и) одобрение.';

$txt['notifyboard_turnon'] = 'Желаеш ли известителен е-мейл за нови теми в този форум?';
$txt['notifyboard_turnoff'] = 'Сигурен ли си, че не желаеш известителен е-мейл за нови теми в този форум?';

$txt['activate_code'] = 'Твоят код на активация е';

$txt['find_members'] = 'Търси членове';
$txt['find_username'] = 'Име, потребителско име, или е-мейл адрес';
$txt['find_buddies'] = 'Покажи приятелите само?';
$txt['find_wildcards'] = 'Позволени wildcards: *, ?';
$txt['find_no_results'] = 'Няма намерени резултати';
$txt['find_results'] = 'Резултати';
$txt['find_close'] = 'Затвори';

$txt['unread_since_visit'] = 'Непрочетени публикации.';
$txt['show_unread_replies'] = 'Нови отговори на моите публикации.';

$txt['change_color'] = 'Смени цвят';

$txt['quickmod_delete_selected'] = 'Изтрий избраните';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Получил си ново лично съобщение.\\nПрегледай го сега (в нов прозорец)?';

$txt['previous_next_back'] = '&laquo; назад';
$txt['previous_next_forward'] = 'напред &raquo;';

$txt['movetopic_auto_board'] = '[Раздел]';
$txt['movetopic_auto_topic'] = '[ЛИНК КЪМ ТЕМА]';
$txt['movetopic_default'] = 'Тази тема е преместена в ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Сгъсти или разшири описанието.';

$txt['mark_unread'] = 'Маркирай непрочетените';

$txt['ssi_not_direct'] = 'Моля, не изплзвай SSI.php директно от URL; използвай пътя (%s) или добави ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php не можа да състави сесия! Уверете се че SSI.php съществува! SSI.php was unable to load a session! This may cause problems with logout and other functions - please make sure SSI.php is included before *anything* else in all your scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Предварителен преглед';
$txt['preview_fetch'] = 'Зареждане на преглед...';
$txt['preview_new'] = 'Ново съобщение';
$txt['error_while_submitting'] = 'Следната грешка се появи при опит за публикуване:';

$txt['split_selected_posts'] = 'Избрани публикации';
$txt['split_selected_posts_desc'] = 'Следните публикации ще създадат нова тема след разделянето.';
$txt['split_reset_selection'] = 'ново маркиране';

$txt['modify_cancel'] = 'Отказ';
$txt['mark_read_short'] = 'Маркирай като прочетени';

$txt['pm_short'] = 'Моите съобщения';
$txt['hello_member_ndt'] = 'Здравей';

$txt['ajax_in_progress'] = 'Зареждане...';

?>