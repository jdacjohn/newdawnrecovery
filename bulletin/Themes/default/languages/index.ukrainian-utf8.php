<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'uk_UA.utf8';
$txt['lang_dictionary'] = 'uk';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Неділя', 'Понеділок', 'Вівторок', 'Середf', 'Четвер', 'П\'ятниця', 'Субота');
$txt['days_short'] = array('НД', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Січня', 'Лютого', 'Березня', 'Квітня', 'Травня', 'Червня', 'Липня', 'Серпня', 'Вересня', 'Жовтня', 'Листопада', 'Грудня');
$txt['months_titles'] = array(1 => 'Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень');
$txt['months_short'] = array(1 => 'Січ.', 'Лют.', 'Бер.', 'Квт.', 'Трв.', 'Черв.', 'Лип.', 'Серп.', 'Вер.', 'Жовт.', 'Лист.', 'Груд.');

$txt['newmessages0'] = 'нове';
$txt['newmessages1'] = 'нових';
$txt['newmessages3'] = 'Нових';
$txt['newmessages4'] = ',';

$txt[2] = 'Адміністрування';

$txt[10] = 'Зберегти';

$txt[17] = 'Редагувати';
$txt[18] = $context['forum_name'] . ' - Головна форума';
$txt[19] = 'Користувачів';
$txt[20] = 'Назва розділів';
$txt[21] = 'Повідомлень';
$txt[22] = 'Остання відповідь';

$txt[24] = '(Немає теми)';
$txt[26] = 'Повідомлень';
$txt[27] = 'Перегляд профілю';
$txt[28] = 'Гість';
$txt[29] = 'Автор';
$txt[30] = '';
$txt[31] = 'Видалити';
$txt[33] = 'Нова тема';

$txt[34] = 'Увійти';
// Use numeric entities in the below string.
$txt[35] = 'Ім\'я користувача';
$txt[36] = 'Пароль';

$txt[40] = 'Такого користувача не існує.';

$txt[62] = 'Модератор';
$txt[63] = 'Видалити тему';
$txt[64] = 'Тем';
$txt[66] = 'Редагувати повідомлення';
$txt[68] = 'Ім\'я';
$txt[69] = 'Email';
$txt[70] = 'Тема';
$txt[72] = 'Повідомлення';

$txt[79] = 'Профіль';

$txt[81] = 'Пароль';
$txt[82] = 'Підтвердити пароль';
$txt[87] = 'Статус';

$txt[92] = 'Перегляд профілю';
$txt[94] = 'Всього';
$txt[95] = 'Повідомлень';
$txt[96] = 'Сайт';
$txt[97] = 'Реєстрація';

$txt[101] = 'Повідомлення';
$txt[102] = 'Новини';
$txt[103] = 'Початок';

$txt[104] = 'Заблокувати/Розблокувати тему';
$txt[105] = 'Відправити';
$txt[106] = 'Помилка!';
$txt[107] = '';
$txt[108] = 'Вийти';
$txt[109] = 'Автор';
$txt[110] = 'Відповідей';
$txt[111] = 'Останнє повідомлення';
$txt[114] = 'Вхід для Адміністратора';
// Use numeric entities in the below string.
$txt[118] = 'Тема';
$txt[119] = 'Допомога';
$txt[121] = 'Видалити повідомлення';
$txt[125] = 'Повідомляти';
$txt[126] = 'Ви хочете одержати повідомлення на email, коли хто-небудь відповість у цій темі?';
// Use numeric entities in the below string.
$txt[130] = "З Повагою,\nАдміністрація форуму " . $context['forum_name'] . '';
$txt[131] = 'Повідомити про нові відповіді';
$txt[132] = 'Перемістити тему';
$txt[133] = 'Перемістити в';
$txt[139] = 'Сторінок';
$txt[140] = 'Користувачі за останні ' . $modSettings['lastActive'] . ' хвилин';
$txt[144] = 'Особисті повідомлення';
$txt[145] = 'Процитувати';
$txt[146] = 'Відповідь';

$txt[151] = 'Немає повідомлень...';
$txt[152] = 'у Вас';
$txt[153] = 'повідомлень';
$txt[154] = 'Видалити це повідомлення';

$txt[158] = 'Користувачі Online';
$txt[159] = 'Особисте повідомлення';
$txt[160] = 'Перейти в';
$txt[161] = 'так';
$txt[162] = 'Ви впевнені, що хочете видалити цю тему?';
$txt[163] = 'Так';
$txt[164] = 'Ні';

$txt[166] = 'Результати пошуку';
$txt[167] = 'Кінець результатів';
$txt[170] = 'Вибачите, нічого не знайдено';
$txt[176] = 'від';

$txt[182] = 'Пошук';
$txt[190] = 'Всі';

$txt[193] = 'Назад';
$txt[194] = 'Нагадати пароль';
$txt[195] = 'Тема розпочата';
$txt[196] = 'Назва';
$txt[197] = 'Відправлено';
$txt[200] = 'Пошук користувачів.';
$txt[201] = 'Ласкаво Просимо';
$txt[208] = 'Центр Адміністрування';
$txt[211] = 'Останнє редагування';
$txt[212] = 'Ви хочете відключити повідомлення в цій темі?';

$txt[214] = 'Останні повідомлення';

$txt[227] = 'Розташування';
$txt[231] = 'Стать';
$txt[233] = 'Дата реєстрації';

$txt[234] = 'Останні повідомлення на форумі.';
$txt[235] = 'Саме останнє повідомлення';

$txt[238] = 'Чоловіча';
$txt[239] = 'Жіноча';

$txt[240] = 'Неприпустимий символ в імені користувача.';

$txt['welcome_guest'] = 'Ласкаво просимо, <b>' . $txt[28] . '</b>. Будь ласка, <a href="' . $scripturl . '?action=login">увійдіть</a> або <a href="' . $scripturl . '?action=register">зареєструйтеся</a>.';
$txt['welcome_guest_activate'] = '<br />Вам не прийшов <a href="' . $scripturl . '?action=activate">лист із кодом активації?</a>';
$txt['hello_member'] = 'Привіт,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Ласкаво Просимо,';
$txt[247] = 'Привіт,';
$txt[248] = 'Ласкаво Просимо,';
$txt[249] = 'Будь ласка,';
$txt[250] = 'Назад';
$txt[251] = 'Будь ласка, виберіть призначення';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Автор';

$txt[287] = 'Усміхнений';
$txt[288] = 'Злий';
$txt[289] = 'Веселий';
$txt[290] = 'Сміх';
$txt[291] = 'Засмучений';
$txt[292] = 'Підморгую';
$txt[293] = 'Сміюся';
$txt[294] = 'Шокований';
$txt[295] = 'Крутий';
$txt[296] = 'Не зрозуміло';
$txt[450] = 'Залицяюся';
$txt[451] = 'Показую язика';
$txt[526] = 'Стурбований';
$txt[527] = 'Рот на замку';
$txt[528] = 'У замішанні';
$txt[529] = 'Цілую';
$txt[530] = 'Плачу';

$txt[298] = 'Модератор';
$txt[299] = 'Модератори';

$txt[300] = 'Відзначити весь розділ прочитаним';
$txt[301] = 'Переглядів';
$txt[302] = 'Новий';

$txt[303] = 'Всі користувачі';
$txt[305] = 'Переглянути';
$txt[307] = 'Email';

$txt[308] = 'Список користувачів';
$txt[309] = '';
$txt[310] = 'користувачів';
$txt[311] = 'з';
$txt[315] = 'Забули пароль?';

$txt[317] = 'Дата';
// Use numeric entities in the below string.
$txt[318] = 'Від';
$txt[319] = 'Тема';
$txt[322] = 'Перевірити нові повідомлення';
$txt[324] = 'Кому';

$txt[330] = 'Тем';
$txt[331] = 'Користувачі';
$txt[332] = 'Список користувачів';
$txt[333] = 'Нові повідомлення';
$txt[334] = 'Немає нових повідомлень';

$txt['sendtopic_send'] = 'Відправити';

$txt[371] = 'Часовий пояс';
$txt[377] = 'або';

$txt[398] = 'Вибачте, нічого не знайдено';

$txt[418] = 'Повідомлення';

$txt[430] = 'Вибачте %s, Ви забанені і не можете залишати повідомлення на форумі!';

$txt[452] = 'Відзначити всі повідомлення прочитаними';

$txt[454] = 'Популярна тема (Більше ' . $modSettings['hotTopicPosts'] . ' відповідей)';
$txt[455] = 'Дуже популярна тема (Більше ' . $modSettings['hotTopicVeryPosts'] . ' відповідей)';
$txt[456] = 'Заблокована тема';
$txt[457] = 'Звичайна тема';
$txt['participation_caption'] = 'Тема з Вашими відповідями';

$txt[462] = 'Перейти';

$txt[465] = 'Друк';
$txt[467] = 'Профіль';
$txt[468] = 'Повідомлення в цій темі';
$txt[470] = 'не зазначений';
$txt[471] = 'повідомлення';
$txt[473] = 'Це ім\'я вже використовується іншим користувачем.';

$txt[488] = 'Всього користувачів';
$txt[489] = 'Всього повідомлень';
$txt[490] = 'Всього тем';

$txt[497] = 'Тривалість сесії (у хвилинах)';

$txt[507] = 'Попередній перегляд';
$txt[508] = 'Запам\'ятати';

$txt[511] = 'Записаний';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'від';

$txt[578] = 'годин';
$txt[579] = 'днів';

$txt[581] = ', наш новий користувач.';

$txt[582] = 'Шукати';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Привіт. Ви тут?';
$txt[604] = 'YIM';

$txt[616] = 'Форум перебуває на \'Технічному обслуговуванні\'.';

$txt[641] = 'Прочитано';
$txt[642] = 'раз';

$txt[645] = 'Статистика форуму';
$txt[656] = 'Останній користувач';
$txt[658] = 'Усього категорій';
$txt[659] = 'Останнє повідомлення';

$txt[660] = 'У Вас';
$txt[661] = 'Натиснути';
$txt[662] = 'тут';
$txt[663] = 'для перегляду.';

$txt[665] = 'Всього розділів';

$txt[668] = 'Друкувати сторінку';

$txt[679] = 'Email повинен бути існуючой.';

$txt[683] = 'Зануда!!';
$txt[685] = $context['forum_name'] . ' - Інформаційний центр';

$txt[707] = 'Надіслати цю тему';

$txt['sendtopic_title'] = 'Надіслати посилання на цю тему &quot;%s&quot; другові.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Шановний %s,';
$txt['sendtopic_this_topic'] = 'Пропоную переглянути тобі  "%s" на ' . $context['forum_name'] . '. Для перегляду натисни, будь ласка, на посилання';
$txt['sendtopic_thanks'] = 'Спасибі';
$txt['sendtopic_sender_name'] = 'Ваше ім\'я';
$txt['sendtopic_sender_email'] = 'Ваш email';
$txt['sendtopic_receiver_name'] = 'Ім\'я одержувача';
$txt['sendtopic_receiver_email'] = 'Email одержувача';
$txt['sendtopic_comment'] = 'Додати коментар';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Коментар був успішно доданий';

$txt[721] = 'Сховати Ваш email?';

$txt[737] = 'Виділити Всі';

// Use numeric entities in the below string.
$txt[1001] = 'Помилка бази даних';
$txt[1002] = 'Будь ласка, повторите ще раз. Якщо помилка продовжує повторяться, звернетеся до Адміністратора.';
$txt[1003] = 'Файл';
$txt[1004] = 'Рядок';
// Use numeric entities in the below string.
$txt[1005] = 'SMF виявив і намагається автоматично виправити помилку у Вашій базі даних. Якщо проблема залишилася або Ви продовжуєте одержувати листи, будь ласка, звернетеся до Вашому хостера.';
$txt['database_error_versions'] = '<b>Примітка:</b> Можливо Вашій базі даних <em>потрібно </em>оновлення.  Версія файлів Вашого форуму ' . $forum_version . ', тоді як версія Вашої бази даних ' . $modSettings['smfVersion'] . '. Для усунення помилки оновите, будь ласка, форум.';
$txt['template_parse_error'] = 'Помилка оформлення форуму!';
$txt['template_parse_error_message'] = 'Можливо щось трапилося на форумі із системою шаблонів. Це тимчасова проблема, будь ласка, поверніться трохи пізніше і спробуйте знову. Якщо Ви побачите це повідомлення знову, будь ласка, звернетеся до Адміністратора форуму.<br /><br />Ви також можете спробувати <a href="javascript:location.reload();">оновити сторінку</a>.';
$txt['template_parse_error_details'] = 'Проблема із завантаженням <tt><b>%1$s</b></tt> шаблона або мовного файлу.  Будь ласка, перевірте синтаксис і спробуйте знову - запам\'ятаєте, одинарні лапки (<tt>\'</tt>) не можна ставити після слеша (<tt>\\</tt>). Щоб побачити більш докладну інформацію про помилку PHP, спробуйте <a href="' . $boardurl . '%1$s">запустити безпосередньо сам файл</a>.<br /><br />Також Ви можете <a href="javascript:location.reload();">оновити сторінку</a> або <a href="' . $scripturl . '?theme=1">використати тему за замовчуванням</a>.';

$txt['smf10'] = '<b>Сьогодні</b> в ';
$txt['smf10b'] = '<b>Вчора</b> в ';
$txt['smf20'] = 'Нове голосування';
$txt['smf21'] = 'Питання';
$txt['smf23'] = 'Голосувати';
$txt['smf24'] = 'Всього голосів';
$txt['smf25'] = 'підказка: натисніть alt+s, щоб підтвердити/відправити або alt+p, щоб попередньо переглянути повідомлення';
$txt['smf29'] = 'Переглянути результати';
$txt['smf30'] = 'Заблокувати голосування';
$txt['smf30b'] = 'Розблокувати голосування';
$txt['smf39'] = 'Редагувати голосування';
$txt['smf43'] = 'Голосування';
$txt['smf47'] = '1 день';
$txt['smf48'] = '1 тиждень';
$txt['smf49'] = '1 місяць';
$txt['smf50'] = 'Назавжди';
$txt['smf52'] = 'Увійти';
$txt['smf53'] = '1 година';
$txt['smf56'] = 'Перенесено';
$txt['smf57'] = 'Будь ласка, вкажіть причину переміщення даної теми.';
$txt['smf60'] = 'Вибачите, Ви не можете змінювати карму користувачам, Вам необхідно мати мінімум ';
$txt['smf62'] = 'Вибачите, Ви не можете повторно змінити карму цьому користувачеві. Необхідно почекати ';
$txt['smf82'] = 'Розділ';
$txt['smf88'] = 'в';
$txt['smf96'] = 'Прикріплена тема';

$txt['smf138'] = 'Видалити';

$txt['smf199'] = 'Ваші особисті повідомлення';

$txt['smf211'] = 'Кб';

$txt['smf223'] = '[Докладна статистика]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Код';
$txt['smf239'] = 'Цитата';
$txt['smf240'] = 'Цитувати';

$txt['smf251'] = 'Розділити тему';
$txt['smf252'] = 'Об\'єднати тему';
$txt['smf254'] = 'Назва для нової теми';
$txt['smf255'] = 'Відокремити тільки це повідомлення.';
$txt['smf256'] = 'Відокремити це й наступні повідомлення.';
$txt['smf257'] = 'Відокремити виділені повідомлення.';
$txt['smf258'] = 'Нова тема';
$txt['smf259'] = 'Тема успішно розділена на дві.';
$txt['smf260'] = 'Вихідна тема';
$txt['smf261'] = 'Будь ласка, виберіть повідомлення, які необхідно відокремити.';
$txt['smf264'] = 'Тема успішно об\'єднана.';
$txt['smf265'] = 'Нова об\'єднана тема';
$txt['smf266'] = 'Тема для об\'єднання';
$txt['smf267'] = 'Розділ для нової теми';
$txt['smf269'] = 'Об\'єднати з темою';
$txt['smf274'] = 'Ви впевнені, що хочете об\'єднати тему?';
$txt['smf275'] = 'з';
$txt['smf276'] = 'Ця функція поєднує дві теми в одну. Повідомлення будуть впорядковані по даті. Саме раннє повідомлення буде першим в об\'єднаній темі.';

$txt['smf277'] = 'Прикріпити тему';
$txt['smf278'] = 'Відкріпити тему';
$txt['smf279'] = 'Заблокувати тему';
$txt['smf280'] = 'Розблокувати тему';

$txt['smf298'] = 'Розширений пошук';

$txt['smf299'] = 'РИЗИК БЕЗПЕКИ:';
$txt['smf300'] = 'ВИ НЕ ВИДАЛИЛИ ';

$txt['smf301'] = 'Сторінка згенерирована за ';
$txt['smf302'] = ' секунд. Запитів: ';
$txt['smf302b'] = '.';

$txt['smf315'] = 'Використайте цю функцію для інформування Модераторів і Адміністраторів про образливі повідомлення.<br /><i>Будь ласка, зверніть увагу на те, що Ваша email адреса буде показана Модераторам, якщо Ви використаєте цю функцію</i>.';

$txt['online2'] = 'Online';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Особисте повідомлення (Online)';
$txt['online5'] = 'Особисте повідомлення (Offline)';
$txt['online8'] = 'Статус';

$txt['topbottom4'] = 'Нагору';
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


$txt['calendar3'] = 'Дні народження:';
$txt['calendar4'] = 'Події:';
$txt['calendar3b'] = 'Найближчі дні народження:';
$txt['calendar4b'] = 'Найближчі події:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Місяць:';
$txt['calendar10'] = 'Рік:';
$txt['calendar11'] = 'День:';
$txt['calendar12'] = 'Назва події:';
$txt['calendar13'] = 'Відправити до:';
$txt['calendar20'] = 'Редагувати подію';
$txt['calendar21'] = 'Видалити цю подію?';
$txt['calendar22'] = 'Видалити подію';
$txt['calendar23'] = 'Відправити подію';
$txt['calendar24'] = 'Календар';
$txt['calendar37'] = 'Посилання на календар';
$txt['calendar43'] = 'Посилання на подію';
$txt['calendar47'] = 'Календар майбутніх подій';
$txt['calendar47b'] = 'Календар на Сьогодні';
$txt['calendar51'] = 'Тиждень';
$txt['calendar54'] = 'Кількість днів:';
$txt['calendar_how_edit'] = 'як відредагувати цю подію?';
$txt['calendar_link_event'] = 'Посилання для редагування події:';
$txt['calendar_confirm_delete'] = 'Ви впевнені, що хочете видалити цю подію?';
$txt['calendar_linked_events'] = 'Посилання на події';

$txt['moveTopic1'] = 'Виберіть Тему для перенапрямку';
$txt['moveTopic2'] = 'Змінити назву теми';
$txt['moveTopic3'] = 'Нова тема';
$txt['moveTopic4'] = 'Змінити назву теми в кожнім повідомленні';

$txt['theme_template_error'] = 'Неможливо завантажити \'%s\' шаблон.';
$txt['theme_language_error'] = 'Неможливо завантажити \'%s\' мовний файл.';

$txt['parent_boards'] = 'Підрозділи';

$txt['smtp_no_connect'] = 'Помилка підключення до SMTP сервера';
$txt['smtp_port_ssl'] = 'Невірно зазначений SMTP порт; Для SSL серверів він повинен бути 465.';
$txt['smtp_bad_response'] = 'Не можу одержати відповідь із поштового сервера';
$txt['smtp_error'] = 'Проблема з відправленням пошти. Помилка: ';
$txt['mail_send_unable'] = 'Неможливо відправити пошту на зазначену адресу \'%s\'';

$txt['mlist_search'] = 'Пошук користувачів';
$txt['mlist_search2'] = 'Шукати ще раз';
$txt['mlist_search_email'] = 'Пошук по email';
$txt['mlist_search_messenger'] = 'Шукати по імені ICQ, AIM, MSN, YIM';
$txt['mlist_search_group'] = 'Шукати по статусі';
$txt['mlist_search_name'] = 'Шукати по імені';
$txt['mlist_search_website'] = 'Шукати за назвою сайту';
$txt['mlist_search_results'] = 'Шукати';

$txt['attach_downloaded'] = 'завантажено';
$txt['attach_viewed'] = 'переглянуто';
$txt['attach_times'] = 'раз';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Настроювання';
$txt['never'] = 'Ніколи';
$txt['more'] = 'ще';

$txt['hostname'] = 'Хост';
$txt['you_are_post_banned'] = 'Вибачите %s, але Ви забанені і не можете приймати і відсилати особисті повідомлення на цьому форумі.';
$txt['ban_reason'] = 'Причина';

$txt['tables_optimized'] = 'Таблиці Бази Даних оптимізовані';

$txt['add_poll'] = 'Додати голосування';
$txt['poll_options6'] = 'Ви можете вибрати %s варіантів відповіді.';
$txt['poll_remove'] = 'Видалити голосування';
$txt['poll_remove_warn'] = 'Ви впевнені, що хочете видалити голосування??';
$txt['poll_results_expire'] = 'Результати будуть показані, після того як голосування буде закінчене';
$txt['poll_expires_on'] = 'Голосування закінчується';
$txt['poll_expired_on'] = 'Голосування закінчилося';
$txt['poll_change_vote'] = 'Видалити Голос';
$txt['poll_return_vote'] = 'Настроювання Голосування';

$txt['quick_mod_remove'] = 'Видалити виділені';
$txt['quick_mod_lock'] = 'Заблокувати виділені';
$txt['quick_mod_sticky'] = 'Прикріпити виділені';
$txt['quick_mod_move'] = 'Перемістити виділені до';
$txt['quick_mod_merge'] = 'З\'єднати виділені';
$txt['quick_mod_markread'] = 'Позначити виділені як прочитані';
$txt['quick_mod_go'] = 'Вперед!';
$txt['quickmod_confirm'] = 'Ви впевнені?';

$txt['spell_check'] = 'Перевірка орфографії';

$txt['quick_reply_1'] = 'Швидка відповідь';
$txt['quick_reply_2'] = 'Із <i>швидкою відповіддю</i> Ви також можете використати BBС код і смайли.';
$txt['quick_reply_warning'] = 'Увага: ця тема заблокована!<br />Відповісти в ній може тільки модератор або адміністратор форуму.';

$txt['notification_enable_board'] = 'Ви впевнені, що хочете одержувати повідомлення при створенні нових тем у даному розділі форуму?';
$txt['notification_disable_board'] = 'Відключити повідомлення?';
$txt['notification_enable_topic'] = 'Ви впевнені, що хочете одержувати повідомлення при нових відповідях у цій темі?';
$txt['notification_disable_topic'] = 'Відключити повідомлення?';

$txt['rtm1'] = 'Повідомити модератору';

$txt['unread_topics_visit'] = 'Непрочитані теми';
$txt['unread_topics_visit_none'] = 'Немає непрочитаних тем з моменту Вашого останнього відвідування.  <a href="' . $scripturl . '?action=unread;all">Переглянути всі непрочитані теми</a>.';
$txt['unread_topics_all'] = 'Всі непрочитані теми';
$txt['unread_replies'] = 'Непрочитані теми';

$txt['who_title'] = 'Хто Online';
$txt['who_and'] = ' і ';
$txt['who_viewing_topic'] = ' дивляться цю тему.';
$txt['who_viewing_board'] = ' дивляться цей розділ.';
$txt['who_member'] = 'Користувач';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'Valid CSS!';

$txt['guest'] = 'Гість';
$txt['guests'] = 'Гостей';
$txt['user'] = 'Користувач';
$txt['users'] = 'Користувачів';
$txt['hidden'] = 'Схованих';
$txt['buddy'] = 'Друг';
$txt['buddies'] = 'Друзі';
$txt['most_online_ever'] = 'Максимум Online';
$txt['most_online_today'] = 'Максимум Online сьогодні';

$txt['merge_select_target_board'] = 'Вибрати розділ для об\'єднаної теми';
$txt['merge_select_poll'] = 'Вибрати голосування, для об\'єднаної теми';
$txt['merge_topic_list'] = 'Вибрати теми для об\'єднання';
$txt['merge_select_subject'] = 'Назва об\'єднаної теми';
$txt['merge_custom_subject'] = 'Вибрати Назву';
$txt['merge_enforce_subject'] = 'Змінити тему у всіх повідомлень';
$txt['merge_include_notifications'] = 'Включити Повідомлення?';
$txt['merge_check'] = 'Об\'єднати?';
$txt['merge_no_poll'] = 'Немає голосування';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Іконка';

$txt['smileys_current'] = 'Поточний набір смайлів';
$txt['smileys_none'] = 'Немає смайлів';
$txt['smileys_forum_board_default'] = 'Форум/Розділ за замовчуванням';

$txt['search_results'] = 'Результати пошуку';
$txt['search_no_results'] = 'Нічого не знайдено';

$txt['totalTimeLogged1'] = 'Загальний час, проведений на форумі: ';
$txt['totalTimeLogged2'] = ' днів, ';
$txt['totalTimeLogged3'] = ' годин і ';
$txt['totalTimeLogged4'] = ' хвилин.';
$txt['totalTimeLogged5'] = 'д ';
$txt['totalTimeLogged6'] = 'г ';
$txt['totalTimeLogged7'] = 'х';

$txt['approve_thereis'] = '<b>Увага!</b>';
$txt['approve_thereare'] = '<b>Увага!</b>';
$txt['approve_member'] = 'Один користувач';
$txt['approve_members'] = 'користувачі';
$txt['approve_members_waiting'] = 'очікують схвалення.';

$txt['notifyboard_turnon'] = 'Ви хочете одержувати повідомлення про нові теми в цьому розділі?';
$txt['notifyboard_turnoff'] = 'Ви не хочете одержувати повідомлення про нові теми в цьому розділі?';

$txt['activate_code'] = 'Ваш код активації';

$txt['find_members'] = 'Пошук користувачів';
$txt['find_username'] = 'Введіть ім\'я користувача або email адресу';
$txt['find_buddies'] = 'Відображати тільки друзів?';
$txt['find_wildcards'] = 'Доступні символи для пошуку по масці: *, ?';
$txt['find_no_results'] = 'Нічого не знайдено';
$txt['find_results'] = 'Результати';
$txt['find_close'] = 'Закрити';

$txt['unread_since_visit'] = 'Показати нові повідомлення з Вашого останнього візиту.';
$txt['show_unread_replies'] = 'Показати нові відповіді на Ваші повідомлення.';

$txt['change_color'] = 'Змінити кольори';

$txt['quickmod_delete_selected'] = 'Видалити обрані';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Ви одержали одне або кілька особистих повідомлень.\\nПереглянути їх (у новому вікні)?';

$txt['previous_next_back'] = '&laquo; попередня тема';
$txt['previous_next_forward'] = 'наступна тема &raquo;';

$txt['movetopic_auto_board'] = '[РОЗДІЛ ФОРУМУ]';
$txt['movetopic_auto_topic'] = '[ПОСИЛАННЯ НА ТЕМУ]';
$txt['movetopic_default'] = 'Тема перенесена до ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Згорнути/Розгорнути.';

$txt['mark_unread'] = 'Відзначити непрочитаними';

$txt['ssi_not_direct'] = 'Будь ласка, не звертайтеся прямо до файлу SSI.php через адресу(URL), можливо, Ви захочете використати шлях (%s) або додати ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php не може завантажити сесію! Можливо це проблема пов\'язана з виходом або іншими функціями - будь ласка переконаєтеся, що SSI.php вставлений на самому початку перед всіма іншими скриптами!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Попередній перегляд';
$txt['preview_fetch'] = 'Очікування попереднього перегляду...';
$txt['preview_new'] = 'Нове повідомлення';
$txt['error_while_submitting'] = 'Наступні помилки виникли при спробі відправити повідомлення:';

$txt['split_selected_posts'] = 'Обрані повідомлення';
$txt['split_selected_posts_desc'] = 'Нижче перебувають повідомлення, які формують тему після поділу.';
$txt['split_reset_selection'] = 'зняти виділення';

$txt['modify_cancel'] = 'Скасувати';
$txt['mark_read_short'] = 'Позначити прочитаними';

$txt['pm_short'] = 'Особисті повідомлення';
$txt['hello_member_ndt'] = 'Привіт,';

$txt['ajax_in_progress'] = 'Завантажується...';

?>