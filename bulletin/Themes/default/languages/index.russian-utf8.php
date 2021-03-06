<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'ru_RU.utf8';
$txt['lang_dictionary'] = 'ru';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота');
$txt['days_short'] = array('Вс.', 'Пн.', 'Вт.', 'Ср.', 'Чт.', 'Пт.', 'Сб.');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря');
$txt['months_titles'] = array(1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
$txt['months_short'] = array(1 => 'Янв.', 'Фев.', 'Март', 'Апр.', 'Май', 'Июнь', 'Июль', 'Авг.', 'Сен.', 'Окт.', 'Нояб.', 'Дек.');

$txt['newmessages0'] = 'новое';
$txt['newmessages1'] = 'новых';
$txt['newmessages3'] = 'Новых';
$txt['newmessages4'] = ',';

$txt[2] = 'Администрирование';

$txt[10] = 'Сохранить';

$txt[17] = 'Изменить';
$txt[18] = $context['forum_name'] . ' - Главная страница';
$txt[19] = 'Пользователей';
$txt[20] = 'Название раздела';
$txt[21] = 'Сообщений';
$txt[22] = 'Последний ответ';

$txt[24] = '(Нет темы)';
$txt[26] = 'Сообщений';
$txt[27] = 'Просмотр профиля';
$txt[28] = 'Гость';
$txt[29] = 'Автор';
$txt[30] = '';
$txt[31] = 'Удалить';
$txt[33] = 'Новая тема';

$txt[34] = 'Войти';
// Use numeric entities in the below string.
$txt[35] = 'Имя пользователя';
$txt[36] = 'Пароль';

$txt[40] = 'Такого пользователя не существует.';

$txt[62] = 'Модератор';
$txt[63] = 'Удалить тему';
$txt[64] = 'Тем';
$txt[66] = 'Редактировать сообщение';
$txt[68] = 'Имя';
$txt[69] = 'E-mail';
$txt[70] = 'Тема';
$txt[72] = 'Сообщение';

$txt[79] = 'Профиль';

$txt[81] = 'Пароль';
$txt[82] = 'Подтвердите пароль';
$txt[87] = 'Статус';

$txt[92] = 'Просмотр профиля';
$txt[94] = 'Всего';
$txt[95] = 'Сообщений';
$txt[96] = 'Сайт';
$txt[97] = 'Регистрация';

$txt[101] = 'Сообщения';
$txt[102] = 'Новости';
$txt[103] = 'Начало';

$txt[104] = 'Заблокировать/Разблокировать тему';
$txt[105] = 'Отправить';
$txt[106] = 'Ошибка!';
$txt[107] = '';
$txt[108] = 'Выйти';
$txt[109] = 'Автор';
$txt[110] = 'Ответов';
$txt[111] = 'Последнее сообщение';
$txt[114] = 'Вход для Администратора';
// Use numeric entities in the below string.
$txt[118] = 'Тема';
$txt[119] = 'Помощь';
$txt[121] = 'Удалить сообщение';
$txt[125] = 'Уведомлять';
$txt[126] = 'Вы хотите получить уведомление по email, когда кто-либо ответит в этой теме?';
// Use numeric entities in the below string.
$txt[130] = "С Уважением,\nАдминистрация форума " . $context['forum_name'] . '';
$txt[131] = 'Уведомить о новых ответах';
$txt[132] = 'Переместить тему';
$txt[133] = 'Переместить в';
$txt[139] = 'Страниц';
$txt[140] = 'Пользователи за последние ' . $modSettings['lastActive'] . ' минут';
$txt[144] = 'Личные сообщения';
$txt[145] = 'Процитировать';
$txt[146] = 'Ответ';

$txt[151] = 'Нет сообщений...';
$txt[152] = 'у Вас';
$txt[153] = 'сообщений';
$txt[154] = 'Удалить это сообщение';

$txt[158] = 'Пользователи Online';
$txt[159] = 'Личное сообщение';
$txt[160] = 'Перейти в';
$txt[161] = 'да';
$txt[162] = 'Вы уверены, что хотите удалить эту тему?';
$txt[163] = 'Да';
$txt[164] = 'Нет';

$txt[166] = 'Результаты поиска';
$txt[167] = 'Конец результатов';
$txt[170] = 'Извините, ничего не найдено';
$txt[176] = 'от';

$txt[182] = 'Поиск';
$txt[190] = 'Все';

$txt[193] = 'Назад';
$txt[194] = 'Напомнить пароль';
$txt[195] = 'Тема начата';
$txt[196] = 'Название';
$txt[197] = 'Отправлено';
$txt[200] = 'Поиск пользователей.';
$txt[201] = 'Добро пожаловать';
$txt[208] = 'Центр администрирования';
$txt[211] = 'Последнее редактирование';
$txt[212] = 'Вы хотите отключить уведомление из этой темы?';

$txt[214] = 'Последние сообщения';

$txt[227] = 'Расположение';
$txt[231] = 'Пол';
$txt[233] = 'Дата регистрации';

$txt[234] = 'Последние сообщения на форуме.';
$txt[235] = 'Самое последнее сообщение';

$txt[238] = 'Мужской';
$txt[239] = 'Женский';

$txt[240] = 'Недопустимый символ в имени пользователя.';

$txt['welcome_guest'] = 'Добро пожаловать, <b>' . $txt[28] . '</b>. Пожалуйста, <a href="' . $scripturl . '?action=login">войдите</a> или <a href="' . $scripturl . '?action=register">зарегистрируйтесь</a>.';
$txt['welcome_guest_activate'] = '<br />Вам не пришло <a href="' . $scripturl . '?action=activate">письмо с кодом активации?</a>';
$txt['hello_member'] = 'Здравствуйте,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Добро пожаловать,';
$txt[247] = 'Здравствуйте,';
$txt[248] = 'Добро пожаловать,';
$txt[249] = 'Пожалуйста,';
$txt[250] = 'Назад';
$txt[251] = 'Пожалуйста, выберите назначение';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Автор';

$txt[287] = 'Улыбающийся';
$txt[288] = 'Злой';
$txt[289] = 'Веселый';
$txt[290] = 'Смеющийся';
$txt[291] = 'Грустный';
$txt[292] = 'Подмигивающий';
$txt[293] = 'Смеющийся';
$txt[294] = 'Шокированный';
$txt[295] = 'Крутой';
$txt[296] = 'Непонимающий';
$txt[450] = 'Строит глазки';
$txt[451] = 'Показывает язык';
$txt[526] = 'Обеспокоенный';
$txt[527] = 'Рот на замке';
$txt[528] = 'В замешательстве';
$txt[529] = 'Целующий';
$txt[530] = 'Плачущий';

$txt[298] = 'Модератор';
$txt[299] = 'Модераторы';

$txt[300] = 'Отметить весь раздел прочитанным';
$txt[301] = 'Просмотров';
$txt[302] = 'Новый';

$txt[303] = 'Все пользователи';
$txt[305] = 'Смотреть';
$txt[307] = 'E-mail';

$txt[308] = 'Список пользователей';
$txt[309] = '';
$txt[310] = 'пользователей';
$txt[311] = 'из';
$txt[315] = 'Забыли пароль?';

$txt[317] = 'Дата';
// Use numeric entities in the below string.
$txt[318] = 'От';
$txt[319] = 'Тема';
$txt[322] = 'Проверить новые сообщения';
$txt[324] = 'Кому';

$txt[330] = 'Тем';
$txt[331] = 'Пользователи';
$txt[332] = 'Список пользователей';
$txt[333] = 'Новые сообщения';
$txt[334] = 'Нет новых сообщений';

$txt['sendtopic_send'] = 'Отправить';

$txt[371] = 'Часовой пояс';
$txt[377] = 'или';

$txt[398] = 'Извините, ничего не найдено';

$txt[418] = 'Уведомление';

$txt[430] = 'Извините %s, Вы забанены и не можете оставлять сообщения на форуме!';

$txt[452] = 'Отметить все сообщения прочитанными';

$txt[454] = 'Популярная тема (более ' . $modSettings['hotTopicPosts'] . ' ответов)';
$txt[455] = 'Очень популярная тема (более ' . $modSettings['hotTopicVeryPosts'] . ' ответов)';
$txt[456] = 'Заблокированная тема';
$txt[457] = 'Обычная тема';
$txt['participation_caption'] = 'Тема с Вашими ответами';

$txt[462] = 'Перейти';

$txt[465] = 'Печать';
$txt[467] = 'Профиль';
$txt[468] = 'Сообщения в этой теме';
$txt[470] = 'не указан';
$txt[471] = 'сообщение';
$txt[473] = 'Это имя уже используется другим пользователем.';

$txt[488] = 'Всего пользователей';
$txt[489] = 'Всего сообщений';
$txt[490] = 'Всего тем';

$txt[497] = 'Продолжительность сессии (в минутах)';

$txt[507] = 'Предварительный просмотр';
$txt[508] = 'Запомнить';

$txt[511] = 'Записан';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'от';

$txt[578] = 'часов';
$txt[579] = 'дней';

$txt[581] = ', наш новый пользователь.';

$txt[582] = 'Искать';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Привет. Вы здесь?';
$txt[604] = 'YIM';

$txt[616] = 'Форум находится на \'Техническом обслуживании\'.';

$txt[641] = 'Прочитано';
$txt[642] = 'раз';

$txt[645] = 'Статистика форума';
$txt[656] = 'Последний пользователь';
$txt[658] = 'Всего категорий';
$txt[659] = 'Последнее сообщение';

$txt[660] = 'У Вас';
$txt[661] = 'Нажать';
$txt[662] = 'здесь';
$txt[663] = 'для просмотра.';

$txt[665] = 'Всего разделов';

$txt[668] = 'Печать страницы';

$txt[679] = 'Email должен быть существующим.';

$txt[683] = 'Зануда!!';
$txt[685] = $context['forum_name'] . ' - Информационный центр';

$txt[707] = 'Отправить эту тему';

$txt['sendtopic_title'] = 'Отправить ссылку на эту тему &quot;%s&quot; другу.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Уважаемый %s,';
$txt['sendtopic_this_topic'] = 'Предлагаю взглянуть Вам  "%s" на ' . $context['forum_name'] . '. Для просмотра нажмите, пожалуйста, на ссылку';
$txt['sendtopic_thanks'] = 'Спасибо';
$txt['sendtopic_sender_name'] = 'Ваше имя';
$txt['sendtopic_sender_email'] = 'Ваш email';
$txt['sendtopic_receiver_name'] = 'Имя получателя';
$txt['sendtopic_receiver_email'] = 'Email получателя';
$txt['sendtopic_comment'] = 'Добавить комментарий';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Комментарий был успешно добавлен';

$txt[721] = 'Скрыть Ваш email?';

$txt[737] = 'Выделить Все';

// Use numeric entities in the below string.
$txt[1001] = 'Ошибка базы данных';
$txt[1002] = 'Пожалуйста, повторите еще раз. Если ошибка продолжает повторятся, обратитесь к Администратору.';
$txt[1003] = 'Файл';
$txt[1004] = 'Строка';
// Use numeric entities in the below string.
$txt[1005] = 'SMF обнаружил и пытается автоматически исправить ошибку в Вашей базе данных. Если проблема осталась или Вы продолжаете получать письма, пожалуйста, обратитесь к Вашему хостеру.';
$txt['database_error_versions'] = '<b>Примечание:</b> Возможно Вашей базе данных <em>требуется </em>обновление.  Версия файлов Вашего форума ' . $forum_version . ', тогда как версия Вашей базы данных ' . $modSettings['smfVersion'] . '. Для устранения ошибки обновите, пожалуйста, форум.';
$txt['template_parse_error'] = 'Ошибка шаблона!';
$txt['template_parse_error_message'] = 'Возможно что-то случилось на форуме с системой шаблонов. Это временная проблема, пожалуйста, возвращайтесь чуть позже и попробуйте снова. Если Вы увидите это сообщение снова, пожалуйста, обратитесь к Администратору форума.<br /><br />Вы также можете попробовать <a href="javascript:location.reload();">обновить страницу</a>.';
$txt['template_parse_error_details'] = 'Проблема с загрузкой <tt><b>%1$s</b></tt> шаблона или языкового файла.  Пожалуйста, проверьте синтаксис и попробуйте снова - запомните, одинарные кавычки (<tt>\'</tt>) нельзя ставить после слэша (<tt>\\</tt>). Чтобы увидеть более подробную информацию об ошибке PHP, попытайтесь <a href="' . $boardurl . '%1$s">запустить непосредственно сам файл</a>.<br /><br />Также Вы можете <a href="javascript:location.reload();">обновить страницу</a> или <a href="' . $scripturl . '?theme=1">использовать тему по умолчанию</a>.';

$txt['smf10'] = '<b>Сегодня</b> в ';
$txt['smf10b'] = '<b>Вчера</b> в ';
$txt['smf20'] = 'Новое голосование';
$txt['smf21'] = 'Вопрос';
$txt['smf23'] = 'Голосовать';
$txt['smf24'] = 'Проголосовало пользователей';
$txt['smf25'] = 'подсказка: нажмите alt+s чтобы подтвердить/отправить или alt+p чтобы предварительно просмотреть сообщение';
$txt['smf29'] = 'Посмотреть результаты';
$txt['smf30'] = 'Заблокировать голосование';
$txt['smf30b'] = 'Разблокировать голосование';
$txt['smf39'] = 'Редактировать голосование';
$txt['smf43'] = 'Голосование';
$txt['smf47'] = '1 день';
$txt['smf48'] = '1 неделя';
$txt['smf49'] = '1 месяц';
$txt['smf50'] = 'Навсегда';
$txt['smf52'] = 'Войти';
$txt['smf53'] = '1 час';
$txt['smf56'] = 'Перенесено';
$txt['smf57'] = 'Пожалуйста, укажите причину перемещения данной темы.';
$txt['smf60'] = 'Извините, Вы не можете изменять карму пользователям, Вам необходимо иметь минимум ';
$txt['smf62'] = 'Извините, Вы не можете повторно изменить карму этому пользователю. Необходимо подождать ';
$txt['smf82'] = 'Раздел';
$txt['smf88'] = 'в';
$txt['smf96'] = 'Прикрепленная тема';

$txt['smf138'] = 'Удалить';

$txt['smf199'] = 'Ваши личные сообщения';

$txt['smf211'] = 'Кб';

$txt['smf223'] = '[Подробная статистика]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Код';
$txt['smf239'] = 'Цитата';
$txt['smf240'] = 'Цитировать';

$txt['smf251'] = 'Разделить тему';
$txt['smf252'] = 'Объединить тему';
$txt['smf254'] = 'Название для новой темы';
$txt['smf255'] = 'Отделить только это сообщение.';
$txt['smf256'] = 'Отделить это и последующие сообщения.';
$txt['smf257'] = 'Отделить выделенные сообщения.';
$txt['smf258'] = 'Новая тема';
$txt['smf259'] = 'Тема успешно разделена на две.';
$txt['smf260'] = 'Исходная тема';
$txt['smf261'] = 'Пожалуйста, выберите сообщения, которые необходимо отделить.';
$txt['smf264'] = 'Тема успешно объединена.';
$txt['smf265'] = 'Новая объединенная тема';
$txt['smf266'] = 'Тема для объединения';
$txt['smf267'] = 'Раздел для новой темы';
$txt['smf269'] = 'Объединить с темой';
$txt['smf274'] = 'Вы уверены, что хотите объединить тему?';
$txt['smf275'] = 'с';
$txt['smf276'] = 'Эта функция объединяет две темы в одну. Сообщения будут упорядочены по дате. Самое раннее сообщение будет первым в объединённой теме.';

$txt['smf277'] = 'Прикрепить тему';
$txt['smf278'] = 'Открепить тему';
$txt['smf279'] = 'Заблокировать тему';
$txt['smf280'] = 'Разблокировать тему';

$txt['smf298'] = 'Расширенный поиск';

$txt['smf299'] = 'РИСК БЕЗОПАСНОСТИ:';
$txt['smf300'] = 'ВЫ НЕ УДАЛИЛИ ';

$txt['smf301'] = 'Страница сгенерирована за ';
$txt['smf302'] = ' секунд. Запросов: ';
$txt['smf302b'] = '.';

$txt['smf315'] = 'Используйте эту функцию для информирования Модераторов и Администраторов об оскорбительных сообщениях.<br /><i>Пожалуйста, обратите внимание на то, что Ваш email адрес будет показан Модераторам, если Вы используете эту функцию.</i>';

$txt['online2'] = 'Онлайн';
$txt['online3'] = 'Офлайн';
$txt['online4'] = 'Личное сообщение (Online)';
$txt['online5'] = 'Личное сообщение (Offline)';
$txt['online8'] = 'Статус';

$txt['topbottom4'] = 'Вверх';
$txt['topbottom5'] = 'Вниз';

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


$txt['calendar3'] = 'Дни рождения:';
$txt['calendar4'] = 'События:';
$txt['calendar3b'] = 'Ближайшие дни рождения:';
$txt['calendar4b'] = 'Ближайшие события:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Месяц:';
$txt['calendar10'] = 'Год:';
$txt['calendar11'] = 'День:';
$txt['calendar12'] = 'Название события:';
$txt['calendar13'] = 'Отправить в:';
$txt['calendar20'] = 'Редактировать событие';
$txt['calendar21'] = 'Удалить это событие?';
$txt['calendar22'] = 'Удалить событие';
$txt['calendar23'] = 'Отправить событие';
$txt['calendar24'] = 'Календарь';
$txt['calendar37'] = 'Ссылка на календарь';
$txt['calendar43'] = 'Ссылка на событие';
$txt['calendar47'] = 'Календарь предстоящих событий';
$txt['calendar47b'] = 'Календарь на Сегодня';
$txt['calendar51'] = 'Неделя';
$txt['calendar54'] = 'Количество дней:';
$txt['calendar_how_edit'] = 'как отредактировать это событие?';
$txt['calendar_link_event'] = 'Ссылка для редактирования события:';
$txt['calendar_confirm_delete'] = 'Вы уверены, что хотите удалить это событие?';
$txt['calendar_linked_events'] = 'Ссылки на события';

$txt['moveTopic1'] = 'Выберите Тему для перенаправления';
$txt['moveTopic2'] = 'Изменить название темы';
$txt['moveTopic3'] = 'Новая тема';
$txt['moveTopic4'] = 'Изменить название темы в каждом сообщении';

$txt['theme_template_error'] = 'Невозможно загрузить \'%s\' шаблон.';
$txt['theme_language_error'] = 'Невозможно загрузить \'%s\' языковой файл.';

$txt['parent_boards'] = 'Подразделы';

$txt['smtp_no_connect'] = 'Ошибка подключения к SMTP серверу';
$txt['smtp_port_ssl'] = 'Неверно указан SMTP порт; Для SSL серверов он должен быть 465.';
$txt['smtp_bad_response'] = 'Не могу получить ответ с почтового сервера';
$txt['smtp_error'] = 'Проблема с отправкой почты. Ошибка: ';
$txt['mail_send_unable'] = 'Невозможно отправить почту по указанному адресу \'%s\'';

$txt['mlist_search'] = 'Поиск пользователей';
$txt['mlist_search2'] = 'Искать еще раз';
$txt['mlist_search_email'] = 'Поиск по email';
$txt['mlist_search_messenger'] = 'Искать по имени ICQ, AIM, MSN, YIM';
$txt['mlist_search_group'] = 'Искать по статусу';
$txt['mlist_search_name'] = 'Искать по имени';
$txt['mlist_search_website'] = 'Искать по названию сайта';
$txt['mlist_search_results'] = 'Искать';

$txt['attach_downloaded'] = 'загружено';
$txt['attach_viewed'] = 'просмотрено';
$txt['attach_times'] = 'раз';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Настройки';
$txt['never'] = 'Никогда';
$txt['more'] = 'еще';

$txt['hostname'] = 'Хост';
$txt['you_are_post_banned'] = 'Извините %s, но Вы забанены и не можете принимать и отсылать личные сообщения на этом форуме.';
$txt['ban_reason'] = 'Причина';

$txt['tables_optimized'] = 'Таблицы базы данных оптимизированы';

$txt['add_poll'] = 'Добавить голосование';
$txt['poll_options6'] = 'Вы можете выбрать %s вариантов ответа.';
$txt['poll_remove'] = 'Удалить голосование';
$txt['poll_remove_warn'] = 'Вы уверены, что хотите удалить голосование??';
$txt['poll_results_expire'] = 'Результаты будут показаны, после того как голосование будет окончено';
$txt['poll_expires_on'] = 'Голосование заканчивается';
$txt['poll_expired_on'] = 'Голосование закончилось';
$txt['poll_change_vote'] = 'Удалить Голос';
$txt['poll_return_vote'] = 'Настройка Голосования';

$txt['quick_mod_remove'] = 'Удалить выделенные';
$txt['quick_mod_lock'] = 'Заблокировать выделенные';
$txt['quick_mod_sticky'] = 'Прикрепить выделенные';
$txt['quick_mod_move'] = 'Переместить выделенные в';
$txt['quick_mod_merge'] = 'Соединить выделенные';
$txt['quick_mod_markread'] = 'Пометить выделенные как прочитанные';
$txt['quick_mod_go'] = 'Вперед!';
$txt['quickmod_confirm'] = 'Вы уверены?';

$txt['spell_check'] = 'Проверка орфографии';

$txt['quick_reply_1'] = 'Быстрый ответ';
$txt['quick_reply_2'] = 'С <i>быстрым ответом</i> Вы также можете использовать BB код и смайлы.';
$txt['quick_reply_warning'] = 'Внимание: эта тема заблокирована!<br />Ответить в ней может только модератор или администратор форума.';

$txt['notification_enable_board'] = 'Вы уверены, что хотите получать уведомления при создании новых тем в данном разделе форума?';
$txt['notification_disable_board'] = 'Отключить уведомление?';
$txt['notification_enable_topic'] = 'Вы уверены, что хотите получать уведомления при новых ответах в этой теме?';
$txt['notification_disable_topic'] = 'Отключить уведомление?';

$txt['rtm1'] = 'Сообщить модератору';

$txt['unread_topics_visit'] = 'Непрочитанные темы';
$txt['unread_topics_visit_none'] = 'Нет непрочитанных тем с момента Вашего последнего посещения.  <a href="' . $scripturl . '?action=unread;all">Просмотреть все непрочитанные темы</a>.';
$txt['unread_topics_all'] = 'Все непрочитанные темы';
$txt['unread_replies'] = 'Непрочитанные темы';

$txt['who_title'] = 'Кто Online';
$txt['who_and'] = ' и ';
$txt['who_viewing_topic'] = ' смотрят эту тему.';
$txt['who_viewing_board'] = ' смотрят этот раздел.';
$txt['who_member'] = 'Пользователь';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'Valid CSS!';

$txt['guest'] = 'Гость';
$txt['guests'] = 'Гостей';
$txt['user'] = 'Пользователь';
$txt['users'] = 'Пользователей';
$txt['hidden'] = 'Скрытых';
$txt['buddy'] = 'Друг';
$txt['buddies'] = 'Друзья';
$txt['most_online_ever'] = 'Максимум Online';
$txt['most_online_today'] = 'Максимум Online сегодня';

$txt['merge_select_target_board'] = 'Выбрать раздел для объединённой темы';
$txt['merge_select_poll'] = 'Выбрать голосование, для объединённой темы';
$txt['merge_topic_list'] = 'Выбрать темы для объединения';
$txt['merge_select_subject'] = 'Название объединённой темы';
$txt['merge_custom_subject'] = 'Выбрать Название';
$txt['merge_enforce_subject'] = 'Изменить тему у всех сообщений';
$txt['merge_include_notifications'] = 'Включить Уведомления?';
$txt['merge_check'] = 'Объединить?';
$txt['merge_no_poll'] = 'Нет голосования';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Иконка';

$txt['smileys_current'] = 'Текущий набор смайлов';
$txt['smileys_none'] = 'Нет смайлов';
$txt['smileys_forum_board_default'] = 'Форум/Раздел по умолчанию';

$txt['search_results'] = 'Результаты поиска';
$txt['search_no_results'] = 'Ничего не найдено';

$txt['totalTimeLogged1'] = 'Общее время, проведенное на форуме: ';
$txt['totalTimeLogged2'] = ' дней, ';
$txt['totalTimeLogged3'] = ' часов и ';
$txt['totalTimeLogged4'] = ' минут.';
$txt['totalTimeLogged5'] = 'д ';
$txt['totalTimeLogged6'] = 'ч ';
$txt['totalTimeLogged7'] = 'м';

$txt['approve_thereis'] = '<b>Внимание!</b>';
$txt['approve_thereare'] = '<b>Внимание!</b>';
$txt['approve_member'] = 'Один пользователь';
$txt['approve_members'] = 'пользователи';
$txt['approve_members_waiting'] = 'ожидают одобрения.';

$txt['notifyboard_turnon'] = 'Вы хотите получать уведомления о новых темах в этом разделе?';
$txt['notifyboard_turnoff'] = 'Вы не хотите получать уведомления о новых темах в этом разделе?';

$txt['activate_code'] = 'Ваш код активации';

$txt['find_members'] = 'Поиск пользователей';
$txt['find_username'] = 'Отображаемое имя, имя пользователя или email адрес';
$txt['find_buddies'] = 'Отображать только друзей?';
$txt['find_wildcards'] = 'Доступные символы для поиска по маске: *, ?';
$txt['find_no_results'] = 'Ничего не найдено';
$txt['find_results'] = 'Результаты';
$txt['find_close'] = 'Закрыть';

$txt['unread_since_visit'] = 'Показать новые сообщения с Вашего последнего визита.';
$txt['show_unread_replies'] = 'Показать новые ответы на Ваши сообщения.';

$txt['change_color'] = 'Изменить цвет';

$txt['quickmod_delete_selected'] = 'Удалить выбранные';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Вы получили одно или несколько личных сообщений.\\nПросмотреть их (в новом окне)?';

$txt['previous_next_back'] = '&laquo; предыдущая тема';
$txt['previous_next_forward'] = 'следующая тема &raquo;';

$txt['movetopic_auto_board'] = '[РАЗДЕЛ ФОРУМА]';
$txt['movetopic_auto_topic'] = '[ССЫЛКА НА ТЕМУ]';
$txt['movetopic_default'] = 'Тема перенесена в ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Свернуть/Развернуть.';

$txt['mark_unread'] = 'Отметить непрочитанной';

$txt['ssi_not_direct'] = 'Пожалуйста, не обращайтесь напрямую к файлу SSI.php через адрес(URL), возможно, Вы захотите использовать путь (%s) или добавить ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php не может загрузить сессию! Возможно это проблема связана с выходом или другими функциями - пожалуйста убедитесь что SSI.php вставлен в самом начале перед всеми другими скриптами!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Предварительный просмотр';
$txt['preview_fetch'] = 'Ожидание предварительного просмотра...';
$txt['preview_new'] = 'Новое сообщение';
$txt['error_while_submitting'] = 'Следующие ошибки возникли при попытке отправки сообщения:';

$txt['split_selected_posts'] = 'Выбранные сообщения';
$txt['split_selected_posts_desc'] = 'Ниже находятся сообщения, формирующие тему после разделения.';
$txt['split_reset_selection'] = 'снять выделение';

$txt['modify_cancel'] = 'Отменить';
$txt['mark_read_short'] = 'Пометить прочитанными';

$txt['pm_short'] = 'Личные сообщения';
$txt['hello_member_ndt'] = 'Здравствуйте,';

$txt['ajax_in_progress'] = 'Загружается...';

?>