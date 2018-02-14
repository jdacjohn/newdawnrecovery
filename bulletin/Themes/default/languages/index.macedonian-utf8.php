<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'mk_MK.utf8';
$txt['lang_dictionary'] = 'mk';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Недела', 'Понеделник', 'Вторник', 'Среда', 'Четврток', 'Петок', 'Сабота');
$txt['days_short'] = array('Нед', 'Пон', 'Вто', 'Сре', 'Чет', 'Пет', 'Саб');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Јануари', 'Февруари', 'Март', 'Април', 'Мај', 'Јуни', 'Јули', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември');
$txt['months_titles'] = array(1 => 'Јануари', 'Февруари', 'Март', 'Април', 'Мај', 'Јуни', 'Јули', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември');
$txt['months_short'] = array(1 => 'Јан', 'Фев', 'Мар', 'Апр', 'Мај', 'Јун', 'Јул', 'Авг', 'Сеп', 'Окт', 'Ное', 'Дек');

$txt['newmessages0'] = 'се нови';
$txt['newmessages1'] = 'се нови';
$txt['newmessages3'] = 'нови';
$txt['newmessages4'] = ',';

$txt[2] = 'Администратор';

$txt[10] = 'Сочувај';

$txt[17] = 'Измени';
$txt[18] = $context['forum_name'] . ' - На почеток';
$txt[19] = 'Члена';
$txt[20] = 'Планинарски спортови';
$txt[21] = 'Пораки';
$txt[22] = 'Последна порака';

$txt[24] = '(Нема тема)';
$txt[26] = 'Порака';
$txt[27] = 'Погледај го профилот на - ';
$txt[28] = 'Гостин';
$txt[29] = 'Автор';
$txt[30] = 'пратена ';
$txt[31] = 'Отстрани';
$txt[33] = 'Почни нова тема';

$txt[34] = 'Пријавување';
// Use numeric entities in the below string.
$txt[35] = 'Корисничко име';
$txt[36] = 'Лозинка';

$txt[40] = 'Тоа корисничко име не постои.';

$txt[62] = 'Модератор на форумот';
$txt[63] = 'Отстрани тема';
$txt[64] = 'Теми';
$txt[66] = 'Измени ја пораката';
$txt[68] = 'Име';
$txt[69] = 'Email';
$txt[70] = 'Наслов';
$txt[72] = 'Порака';

$txt[79] = 'Профил';

$txt[81] = 'Избери лозинка';
$txt[82] = 'Потврди лозинка';
$txt[87] = 'Позиција';

$txt[92] = 'Погледај го профилот на - ';
$txt[94] = 'Вкупно';
$txt[95] = 'Пораки';
$txt[96] = 'Вебсајт';
$txt[97] = 'Зачленување';

$txt[101] = 'Индекс на пораката';
$txt[102] = 'Новости';
$txt[103] = 'Почетна';

$txt[104] = 'Заклучи/отклучи тема';
$txt[105] = 'Испрати';
$txt[106] = 'Се случи грешка!';
$txt[107] = 'на';
$txt[108] = 'Одјави се';
$txt[109] = 'Автор';
$txt[110] = 'Одговори';
$txt[111] = 'Последна порака';
$txt[114] = 'Пријавување на Администраторот';
// Use numeric entities in the below string.
$txt[118] = 'Тема';
$txt[119] = 'Помош';
$txt[121] = 'Отстрани ја пораката';
$txt[125] = 'Извести';
$txt[126] = 'Дали сакате да добиете email со известување ако некој одговори на оваа тема?';
// Use numeric entities in the below string.
$txt[130] = "Ви благодарам, \n" . $context['forum_name'] . ' - тим.';
$txt[131] = 'Извести ме за одговор';
$txt[132] = 'Премести ја темата';
$txt[133] = 'Премести во';
$txt[139] = 'Страници';
$txt[140] = 'Членови активни во изминатите ' . $modSettings['lastActive'] . ' минути';
$txt[144] = 'Приватни пораки';
$txt[145] = 'Одговори со цитирање';
$txt[146] = 'Одговор';

$txt[151] = 'Нема пораки ...';
$txt[152] = 'имате';
$txt[153] = 'пораки';
$txt[154] = 'Отстрани ја оваа порака';

$txt[158] = 'Присутни корисници';
$txt[159] = 'Приватна порака';
$txt[160] = 'Префрли се на';
$txt[161] = 'Оди';
$txt[162] = 'Дали сте сигурни дека сакате да ја отстраните оваа тема?';
$txt[163] = 'Да';
$txt[164] = 'Не';

$txt[166] = 'Резултати на пребарувањето';
$txt[167] = 'Краен резултат';
$txt[170] = 'Извинете, нема резултат';
$txt[176] = 'на';

$txt[182] = 'Пребарај';
$txt[190] = 'Сите';

$txt[193] = 'Назад';
$txt[194] = 'Потсетување за лозинка';
$txt[195] = 'Темата ја започнал';
$txt[196] = 'Наслов';
$txt[197] = 'Порака од';
$txt[200] = 'Листа на регистрирани членови што може да се пребарува.';
$txt[201] = 'Поздравете';
$txt[208] = 'Административен центар';
$txt[211] = 'Последна промена';
$txt[212] = 'Дали сакате да оневозможите известување за оваа тема?';

$txt[214] = 'Последни пораки';

$txt[227] = 'Локација';
$txt[231] = 'Пол';
$txt[233] = 'Датум на зачленување';

$txt[234] = 'Погледајте ги 10-те најнови пораки на форумот.';
$txt[235] = 'е најнова ажурирана тема';

$txt[238] = 'Маж';
$txt[239] = 'Жена';

$txt[240] = 'Недозволен карактер во корисничкото име.';

$txt['welcome_guest'] = 'Добредојдовте  <b>' . $txt[28] . '</b>. Ве молам <a href="' . $scripturl . '?action=login">пријавете се</a> или <a href="' . $scripturl . '?action=register">зачленете се</a>.';
$txt['welcome_guest_activate'] = '<br />Дали сте го изгубиле Вашиот <a href="' . $scripturl . '?action=activate">активационен email?</a>';
$txt['hello_member'] = 'Здраво,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Добредојдовте,';
$txt[247] = 'Здраво,';
$txt[248] = 'Добредојдовте,';
$txt[249] = 'Ве молам';
$txt[250] = 'Назад';
$txt[251] = 'Ве молиме изберете дестинација';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Испратил';

$txt[287] = 'Смешко';
$txt[288] = 'Љутко';
$txt[289] = 'Cheesy';
$txt[290] = 'Насмевко';
$txt[291] = 'Таженко';
$txt[292] = 'Шмекерко';
$txt[293] = 'Зеленко';
$txt[294] = 'Шокиран';
$txt[295] = 'Ладен';
$txt[296] = 'Молам?';
$txt[450] = 'Превртување со очи';
$txt[451] = 'Јазик';
$txt[526] = 'Посрамен';
$txt[527] = 'Усните ми се запечатени';
$txt[528] = 'Неодлченко';
$txt[529] = 'Бакнеж';
$txt[530] = 'Плачко';

$txt[298] = 'Модератор';
$txt[299] = 'Модератори';

$txt[300] = 'Означи ги темите во овој форум како прочитани';
$txt[301] = 'Прегледи';
$txt[302] = 'Нови';

$txt[303] = 'Прикажи ги сите членови';
$txt[305] = 'Прикажи';
$txt[307] = 'Email';

$txt[308] = 'Ги прикажувам членовите';
$txt[309] = 'од';
$txt[310] = 'вкупно членови';
$txt[311] = 'до';
$txt[315] = 'Дали сте ја заборавиле лозинката?';

$txt[317] = 'Датум';
// Use numeric entities in the below string.
$txt[318] = 'Од';
$txt[319] = 'Наслов';
$txt[322] = 'Проверка за нови пораки';
$txt[324] = 'На';

$txt[330] = 'Теми';
$txt[331] = 'Членови';
$txt[332] = 'Список на членовите';
$txt[333] = 'Нови пораки';
$txt[334] = 'Нема нови пораки';

$txt['sendtopic_send'] = 'Испрати';

$txt[371] = 'Отстапување на времето';
$txt[377] = 'или';

$txt[398] = 'Извинете но нема резултат од пребарувањето';

$txt[418] = 'Известувања';

$txt[430] = 'Се извинуваме %s, забрането Ви е да го користите овој форум!';

$txt[452] = 'Означи ги СИТЕ пораки како прочитани';

$txt[454] = 'Популарна тема (Повеќе од ' . $modSettings['hotTopicPosts'] . ' пораки)';
$txt[455] = 'Многу популарна тема (Повеќе од ' . $modSettings['hotTopicVeryPosts'] . ' пораки)';
$txt[456] = 'Заклучена тема';
$txt[457] = 'Нормална тема';
$txt['participation_caption'] = 'Тема во која сте одговарале';

$txt[462] = 'Оди';

$txt[465] = 'Отштампај';
$txt[467] = 'Профил';
$txt[468] = 'Преглед на темата';
$txt[470] = 'Не е достапно';
$txt[471] = 'порака';
$txt[473] = 'Ова име е веќе зафатено од друг член.';

$txt[488] = 'Вкупно членови';
$txt[489] = 'Вкупно пораки';
$txt[490] = 'Вкупно теми';

$txt[497] = 'Пријави ме за следните<br/>минути';

$txt[507] = 'Прегледај';
$txt[508] = 'Пријави ме за постојано';

$txt[511] = 'Сочувана';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'од';

$txt[578] = 'часови';
$txt[579] = 'денови';

$txt[581] = ', нашиот најнов член.';

$txt[582] = 'Пребарувај за';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Здраво!+Дали+сте+тука?';
$txt[604] = 'YIM';

$txt[616] = 'Запаметете, овој форум е во мод на одржување.';

$txt[641] = 'Прочитана';
$txt[642] = 'пати';

$txt[645] = 'Статистики на форумот';
$txt[656] = 'Последен член';
$txt[658] = 'Вкупно категории';
$txt[659] = 'Последна порака';

$txt[660] = 'Добивте';
$txt[661] = 'Кликнете';
$txt[662] = 'овде';
$txt[663] = 'за да ги прегледате.';

$txt[665] = 'Вкупно форуми';

$txt[668] = 'Отштампај страница';

$txt[679] = 'Email адресата мора да биде исправна.';

$txt[683] = 'Јас сум батка!!';
$txt[685] = $context['forum_name'] . ' - Инфо центар';

$txt[707] = 'Испрати ја темата';

$txt['sendtopic_title'] = 'Испратете ја темата &quot;%s&quot; на пријател.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Драги %s,';
$txt['sendtopic_this_topic'] = 'Сакам да погледам "%s" на ' . $context['forum_name'] . '.  За да погледаш кликни на следниот линк';
$txt['sendtopic_thanks'] = 'Благодарам';
$txt['sendtopic_sender_name'] = 'Вашето име';
$txt['sendtopic_sender_email'] = 'Вашата email адреса';
$txt['sendtopic_receiver_name'] = 'Име на примателот';
$txt['sendtopic_receiver_email'] = 'Email адреса на примателот';
$txt['sendtopic_comment'] = 'Додади коментар';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Коментар е исто така додаден на оваа тема';

$txt[721] = 'Сокриј ја email адресата од јавноста?';

$txt[737] = 'Означи се';

// Use numeric entities in the below string.
$txt[1001] = 'Грешка во базата на податоци';
$txt[1002] = 'Ве молам обидете се повторно. Ако повторно ја видите истата грешка, пријавете ја на Администраторот.';
$txt[1003] = 'Датотека';
$txt[1004] = 'Линија';
// Use numeric entities in the below string.
$txt[1005] = 'SMF пронајде и автоматски се обиде да поправи грешка во вашата база на податоци. Ако и понатаму имате проблеми и ги примате овие email пораки, контактирајте го вашиот веб-хостинг провајдер.';
$txt['database_error_versions'] = '<b>Напомена:</b> Изгледа дека на вашата база на податоци и е потребна надградба. Фајловите на вашиот форум се моментало со верзија ' . $forum_version . ' а вашата база на податоци верзија СМФ ' . $modSettings['smfVersion'] . '. Препорачуваме да извршите надградба со последната верзија на датотеката upgrade.php.';
$txt['template_parse_error'] = 'Грешка во парсирањето на темплејтот!';
$txt['template_parse_error_message'] = 'Изгледа дека нешто не е во ред со системот на темплејти на форумот. Овој проблем би требало да е привремен и ве молиме да се обидете пак нешто подоцна. Ако повторно ја примите оваа порака контактирајте го администраторот.<br /><br />Можете да пробате и да <a href="javascript:location.reload();"> ја освежите оваа страница</a>.';
$txt['template_parse_error_details'] = 'Има проблем при вчитувањето <tt><b>%1$s</b></tt> на темплејтот или јазичната датотека. Проверете ја синтаксата и обидете се повторно - запаметете, наводниците (<tt>\'</tt>) често мораат да бидат избегнати користејќи обратна коса црта (<tt>\\</tt>). За да ги видите подетално пораките за грешки од страна на PHP, обидете се со <a href="' . $boardurl . '%1$s">директно пристапување на датотеката</a>.<br /><br />Можеби ќе посакате да <a href="javascript:location.reload();">ја освежите оваа страница</a> или <a href="' . $scripturl . '?theme=1">користете ја стандардната тема./a>.';

$txt['smf10'] = '<b>Денес</b> во ';
$txt['smf10b'] = '<b>Вчера</b> во ';
$txt['smf20'] = 'Постави ново гласање';
$txt['smf21'] = 'Прашање';
$txt['smf23'] = 'Гласај';
$txt['smf24'] = 'Вкупно гласови';
$txt['smf25'] = 'Кратенка: притиснете alt+s за да испратите или alt+p за преглед';
$txt['smf29'] = 'Погледајте ги резултатите.';
$txt['smf30'] = 'Затвори го гласањето';
$txt['smf30b'] = 'Отвори го гласањето';
$txt['smf39'] = 'Промени го гласањето';
$txt['smf43'] = 'Гласање';
$txt['smf47'] = '1 ден';
$txt['smf48'] = '1 недела';
$txt['smf49'] = '1 месец';
$txt['smf50'] = 'Засекогаш';
$txt['smf52'] = 'Пријавете се со корисничко име, лозинка и должина на сесија.';
$txt['smf53'] = '1 час';
$txt['smf56'] = 'ПРЕМЕСТЕНА';
$txt['smf57'] = 'Бнесете краток опис како причина<br />зошто темата е преместена.';
$txt['smf60'] = 'Немате доволно пораки за да можете да ја смените кармата. Потребни ви се најмалку ';
$txt['smf62'] = 'Не можете да ја смените кармата во следните ';
$txt['smf82'] = 'Форум';
$txt['smf88'] = 'во';
$txt['smf96'] = 'Леплива тема';

$txt['smf138'] = 'Избриши';

$txt['smf199'] = 'Ваши приватни пораки';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Повеќе Статистики]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Код';
$txt['smf239'] = 'Цитирано од';
$txt['smf240'] = 'Цитирано';

$txt['smf251'] = 'Подели ја темата';
$txt['smf252'] = 'Спој ја темата';
$txt['smf254'] = 'Наслов за нова тема';
$txt['smf255'] = 'Подели ја само оваа порака.';
$txt['smf256'] = 'Подели ја темата после и вклучи ја оваа порака.';
$txt['smf257'] = 'Изберете порака која сакате да ја видите.';
$txt['smf258'] = 'Нова тема';
$txt['smf259'] = 'Темата е успешно поделена на две теми.';
$txt['smf260'] = 'Почетна тема';
$txt['smf261'] = 'Ве молам изберете ја пораката која сакате да ја поделите.';
$txt['smf264'] = 'Темите се успешно споени.';
$txt['smf265'] = 'Новоспоена тема';
$txt['smf266'] = 'Тема што треба да биде споена';
$txt['smf267'] = 'Целен форум';
$txt['smf269'] = 'Целна тема';
$txt['smf274'] = 'Дали сте сигурни дека сакате да ги споите';
$txt['smf275'] = 'со';
$txt['smf276'] = 'Оваа функција ќе спои две пораки во една. Пораките ќе бидат подредени по време на испраќање. Согласно со тоа, најрано испратената порака ќе биде прикажана како прва во споената тема.';

$txt['smf277'] = 'Постави је темата како леплива';
$txt['smf278'] = 'Одлепи ја темата';
$txt['smf279'] = 'Затвори ја темата';
$txt['smf280'] = 'Отвори ја темата';

$txt['smf298'] = 'Напредно пребарување';

$txt['smf299'] = 'ГОЛЕМ БЕЗБЕДНОСЕН РИЗИК:';
$txt['smf300'] = 'Не сте го отстраниле ';

$txt['smf301'] = 'Страницата е направена за ';
$txt['smf302'] = ' секунди со ';
$txt['smf302b'] = ' кверија.';

$txt['smf315'] = 'Користете ја оваа функција за да ги известите модераторите и администраторите за навредлива или погрешно испратена порака.<br /><i>Вашата email адреса ќе биде откриена на уредниците ако ја употребите оваа функција.</i>';

$txt['online2'] = 'На мрежа';
$txt['online3'] = 'Надвор од мрежа';
$txt['online4'] = 'Приватна порака (на мрежа)';
$txt['online5'] = 'Приватна порака (Надвор од мрежа)';
$txt['online8'] = 'Статус';

$txt['topbottom4'] = 'Оди горе';
$txt['topbottom5'] = 'Оди долу';

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


$txt['calendar3'] = 'Родендени:';
$txt['calendar4'] = 'Настани:';
$txt['calendar3b'] = 'Идни родендени:';
$txt['calendar4b'] = 'Идни настани:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Месец:';
$txt['calendar10'] = 'Година:';
$txt['calendar11'] = 'Ден:';
$txt['calendar12'] = 'Наслов на настанот:';
$txt['calendar13'] = 'Остави порака во:';
$txt['calendar20'] = 'Измени го настанот';
$txt['calendar21'] = 'Да го избришам овој настан?';
$txt['calendar22'] = 'Избриши настан';
$txt['calendar23'] = 'Додади настан';
$txt['calendar24'] = 'Календар';
$txt['calendar37'] = 'Додај линк со Календарот';
$txt['calendar43'] = 'Поврзан Настан';
$txt['calendar47'] = 'Календар';
$txt['calendar47b'] = 'Денешен календар';
$txt['calendar51'] = 'Недела';
$txt['calendar54'] = 'Број на денови:';
$txt['calendar_how_edit'] = 'како ги менуваш овие настани?';
$txt['calendar_link_event'] = 'Поврзи го Настанот со пораката:';
$txt['calendar_confirm_delete'] = 'Дали си сигурен дека сакаш да го избришеш овој настан?';
$txt['calendar_linked_events'] = 'Поврзани Настани';

$txt['moveTopic1'] = 'Испрати пренасочувачка тема';
$txt['moveTopic2'] = 'Промени го насловот на темата';
$txt['moveTopic3'] = 'Нов наслов на темата';
$txt['moveTopic4'] = 'Промени го насловот на секоја тема';

$txt['theme_template_error'] = 'Не можам да го вчитам \'%s\' темплејтот.';
$txt['theme_language_error'] = 'Не можам да ја вчитам \'%s\' јазичната датотека.';

$txt['parent_boards'] = 'Подфоруми';

$txt['smtp_no_connect'] = 'Не можам да се поврзам со SMTP серверот';
$txt['smtp_port_ssl'] = 'Подесувањето на SMTP портот е неточо; треба да биде 465 за SSL сервери.';
$txt['smtp_bad_response'] = 'Не можам да го добијам кодот како одговор од mail серверот';
$txt['smtp_error'] = 'Имам проблеми при испраќањето на пораките. Грешка: ';
$txt['mail_send_unable'] = 'Не можам да испратам порака на email адресата \'%s\'';

$txt['mlist_search'] = 'Пребарај ги корисниците';
$txt['mlist_search2'] = 'Пребарај повторно';
$txt['mlist_search_email'] = 'Пребарај по email адреси';
$txt['mlist_search_messenger'] = 'Пребарај по messenger надимак';
$txt['mlist_search_group'] = 'Пребарај по позиција';
$txt['mlist_search_name'] = 'Пребарај по име';
$txt['mlist_search_website'] = 'Пребарај го форумот';
$txt['mlist_search_results'] = 'Резултати на пребарувањето за';

$txt['attach_downloaded'] = 'преземено';
$txt['attach_viewed'] = 'прикажано';
$txt['attach_times'] = 'пати';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Подесувања';
$txt['never'] = 'Никогаш';
$txt['more'] = 'повеќе';

$txt['hostname'] = 'Име на провајдерот';
$txt['you_are_post_banned'] = 'Извинете %s, забрането ви е да праќате пораки или приватни пораки на овој форум.';
$txt['ban_reason'] = 'Причина';

$txt['tables_optimized'] = 'Табелите на базите на податоци се оптимизирани';

$txt['add_poll'] = 'Додај гласање';
$txt['poll_options6'] = 'Можете да изберете најмногу %s опции.';
$txt['poll_remove'] = 'Отстрани го гласањето';
$txt['poll_remove_warn'] = 'Дали сте сигурни дека сакате да го отстраните гласањето од оваа тема?';
$txt['poll_results_expire'] = 'Резултатите ќе бидат прикажани кога ќе се заврши гласањето';
$txt['poll_expires_on'] = 'Гласањето завршува';
$txt['poll_expired_on'] = 'Гласањето е завршено';
$txt['poll_change_vote'] = 'Отстрани Глас';
$txt['poll_return_vote'] = 'Опции за гласањата';

$txt['quick_mod_remove'] = 'Отстрани го избраното';
$txt['quick_mod_lock'] = 'Заклучи го избраното';
$txt['quick_mod_sticky'] = 'Направи го лепливо избраното';
$txt['quick_mod_move'] = 'Премести го избраното во';
$txt['quick_mod_merge'] = 'Спој ги избраните';
$txt['quick_mod_markread'] = 'Означи го селектираното како прочитано';
$txt['quick_mod_go'] = 'Оди!';
$txt['quickmod_confirm'] = 'Дали сте сигурни дека сакате да го направите ова?';

$txt['spell_check'] = 'Проверка на правописот';

$txt['quick_reply_1'] = 'Брз одговор';
$txt['quick_reply_2'] = 'Со <i>Брзиот одговор</i> можете да користите BBC код и Смешко како што тоа би го правеле во нормална порака но многу поудобно.';
$txt['quick_reply_warning'] = 'Внимание: оваа тема е моментално заклучена!<br />Само администраторите и модераторите можат да одговараат.';

$txt['notification_enable_board'] = 'Дали сте сигурни дека сакате да овозможите известување за нови теми во овој форум?';
$txt['notification_disable_board'] = 'Дали сте сигурни дека сакате да оневозможите известување за нови теми во овој форум?';
$txt['notification_enable_topic'] = 'Дали сте сигурни дека сакате да овозможите известување за нови одговори на оваа тема?';
$txt['notification_disable_topic'] = 'Дали сте сигурни дека сакате да оневозможите известување за нови одговори на оваа тема?';

$txt['rtm1'] = 'Пријави на модераторот';

$txt['unread_topics_visit'] = 'Понови непрочитани теми';
$txt['unread_topics_visit_none'] = 'Не се пронајдени непрочитани теми од вашата последна посета.  <a href="' . $scripturl . '?action=unread;all">Кликнете овде за да ги пробате сите непрочитани теми</a>.';
$txt['unread_topics_all'] = 'Сите непрочитани теми';
$txt['unread_replies'] = 'Ажурирани теми';

$txt['who_title'] = 'Кој е присутен';
$txt['who_and'] = ' и ';
$txt['who_viewing_topic'] = ' ја гледаат оваа тема.';
$txt['who_viewing_board'] = ' го гледаат овој форум.';
$txt['who_member'] = 'Член';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'Valid CSS!';

$txt['guest'] = 'Гостин';
$txt['guests'] = 'Гости';
$txt['user'] = 'Член';
$txt['users'] = 'Членови';
$txt['hidden'] = 'Сокриени';
$txt['buddy'] = 'Пријател';
$txt['buddies'] = 'Пријатели';
$txt['most_online_ever'] = 'Најмногу присутен било кога';
$txt['most_online_today'] = 'Најмногу присутен денес';

$txt['merge_select_target_board'] = 'Изберете го целниот форум за споените теми';
$txt['merge_select_poll'] = 'Изберете кое гласање споените теми би требало да го имаат';
$txt['merge_topic_list'] = 'Изберете теми за спојување';
$txt['merge_select_subject'] = 'Изберете наслов на споените теми';
$txt['merge_custom_subject'] = 'Кориснички наслов';
$txt['merge_enforce_subject'] = 'Промени го насловот на сите пораки';
$txt['merge_include_notifications'] = 'Да вклучам известување?';
$txt['merge_check'] = 'Спојување?';
$txt['merge_no_poll'] = 'Без гласање';

$txt['response_prefix'] = 'Одг: ';
$txt['current_icon'] = 'Моментална икона';

$txt['smileys_current'] = 'Моментална поставка на Смешковци';
$txt['smileys_none'] = 'Без Смешковци';
$txt['smileys_forum_board_default'] = 'Стандарден форум';

$txt['search_results'] = 'Резултат на пребарувањето';
$txt['search_no_results'] = 'Нема најдени резултати';

$txt['totalTimeLogged1'] = 'Вкупно време пријавен на форумот: ';
$txt['totalTimeLogged2'] = ' ден/ови, ';
$txt['totalTimeLogged3'] = ' часови и ';
$txt['totalTimeLogged4'] = ' минути.';
$txt['totalTimeLogged5'] = 'д ';
$txt['totalTimeLogged6'] = 'ч ';
$txt['totalTimeLogged7'] = 'м ';

$txt['approve_thereis'] = 'Има';
$txt['approve_thereare'] = 'Има';
$txt['approve_member'] = 'еден член';
$txt['approve_members'] = 'членови';
$txt['approve_members_waiting'] = 'кои чекаат на одобрување.';

$txt['notifyboard_turnon'] = 'Дали сакате да примате е-mail со известување кога некој ќе постави нова тема во овој форум?';
$txt['notifyboard_turnoff'] = 'Дали сте сигурни дека не сакате да примате известувања за нови теми на овој форум?';

$txt['activate_code'] = 'Вашиот активационен код е';

$txt['find_members'] = 'Пронајди ги членовите';
$txt['find_username'] = 'Име, корисничко име, или email адреса';
$txt['find_buddies'] = 'Покажи ги само Пријателите?';
$txt['find_wildcards'] = 'Дозволени џокери: *, ?';
$txt['find_no_results'] = 'Нема пронајдени резултати';
$txt['find_results'] = 'Резултати';
$txt['find_close'] = 'Затвори';

$txt['unread_since_visit'] = 'Прикажи ги непрочитаните пораки од мојата последна посета';
$txt['show_unread_replies'] = 'Прикажи ги новите одговори на моите пораки';

$txt['change_color'] = 'Промени ја бојата';

$txt['quickmod_delete_selected'] = 'Избриши го избраното';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Примивте една или повеќе приватни пораки.\\nДали сакате веднаш да ги погледате (во нов прозор)?';

$txt['previous_next_back'] = '&laquo; претходни';
$txt['previous_next_forward'] = 'следни &raquo;';

$txt['movetopic_auto_board'] = '[ФОРУМ]';
$txt['movetopic_auto_topic'] = '[ЛИНК ЗА ТЕМА]';
$txt['movetopic_default'] = 'Темата е преместена во ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Собери го или рашири го описот.';

$txt['mark_unread'] = 'Означи како непрочитани';

$txt['ssi_not_direct'] = 'Ве молам не пристапувајте на SSI.php директно преку URL; веројатно сакате да ја користите патеката (%s) или да додадете ?ssi_funkcija=nesto.';
$txt['ssi_session_broken'] = 'SSI.php не можеше да почне сесија!  Ова може да предизвика проблеми со одјавувањето и други функции - ве молиме дали SSI.php е вклучено пред било што друго *anything* во сите вашо скрипти!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Преглед на пораката';
$txt['preview_fetch'] = 'Прикажување на прегледот ...';
$txt['preview_new'] = 'Нова порака';
$txt['error_while_submitting'] = 'Следната/ите грешка/и се случија додека ја остававте оваа порака:';

$txt['split_selected_posts'] = 'Означени пораки';
$txt['split_selected_posts_desc'] = 'Пораките подолу ќе создадат нова тема после поделбата.';
$txt['split_reset_selection'] = 'избриши ги означувањата';

$txt['modify_cancel'] = 'Откажи';
$txt['mark_read_short'] = 'Означи Прочитано';

$txt['pm_short'] = 'Пораки';
$txt['hello_member_ndt'] = 'Здраво';

$txt['ajax_in_progress'] = 'Внесува ...';

?>