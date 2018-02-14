<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'cs_CZ.utf8';
$txt['lang_dictionary'] = 'cs';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Neděle', 'Pondělí', 'Úterý', 'Středa', 'Čtvrtek', 'Pátek', 'Sobota');
$txt['days_short'] = array('Ne', 'Po', 'Út', 'St', 'Čt', 'Pá', 'So');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec');
$txt['months_titles'] = array(1 => 'Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec');
$txt['months_short'] = array(1 => 'Led', 'Úno', 'Bře', 'Dub', 'Kvě', 'Črn', 'Črv', 'Srp', 'Zář', 'Říj', 'Lis', 'Pro');

$txt['newmessages0'] = 'je nová';
$txt['newmessages1'] = 'nových';
$txt['newmessages3'] = 'Nové';
$txt['newmessages4'] = ',';

$txt[2] = 'Administrace';

$txt[10] = 'Uložit';

$txt[17] = 'Změnit';
$txt[18] = $context['forum_name'] . ' - Index';
$txt[19] = 'uživatelů';
$txt[20] = 'Jméno diskuse';
$txt[21] = 'Příspěvků';
$txt[22] = 'Poslední příspěvek';

$txt[24] = '(Bez předmětu)';
$txt[26] = 'Příspěvků';
$txt[27] = 'Zobrazit profil';
$txt[28] = 'Host';
$txt[29] = 'Autor';
$txt[30] = 'kdy';
$txt[31] = 'Odstranit';
$txt[33] = 'Založit nové téma';

$txt[34] = 'Přihlásit';
// Use numeric entities in the below string.
$txt[35] = 'Uživatel';
$txt[36] = 'Heslo';

$txt[40] = 'Uživatelské jméno neexistuje.';

$txt[62] = 'Moderátor diskuse';
$txt[63] = 'Smazat téma';
$txt[64] = 'témat';
$txt[66] = 'Změnit zprávu';
$txt[68] = 'Jméno';
$txt[69] = 'Email';
$txt[70] = 'Předmět';
$txt[72] = 'Zpráva';

$txt[79] = 'Editace profilu';

$txt[81] = 'Zvol heslo';
$txt[82] = 'Ověř heslo';
$txt[87] = 'Pozice';

$txt[92] = 'Zobraz profil uživatele';
$txt[94] = 'Počet';
$txt[95] = 'příspěvků';
$txt[96] = 'Web';
$txt[97] = 'Registrovat';

$txt[101] = 'Index zpráv';
$txt[102] = 'Novinky';
$txt[103] = 'Domů';

$txt[104] = 'Zamknout/odemknout téma';
$txt[105] = 'Poslat';
$txt[106] = 'Nastala chyba!';
$txt[107] = 'v';
$txt[108] = 'Odhlásit';
$txt[109] = 'Založil';
$txt[110] = 'Odpovědí';
$txt[111] = 'Poslední příspěvek';
$txt[114] = 'Přihlášení administrátora';
// Use numeric entities in the below string.
$txt[118] = 'Téma';
$txt[119] = 'Nápověda';
$txt[121] = 'Smazat zprávu';
$txt[125] = 'Upozornit';
$txt[126] = 'Chceš dostat upozornění, když někdo odpoví na toto téma?';
// Use numeric entities in the below string.
$txt[130] = "S pozdravem,\ntým " . $context['forum_name'];
$txt[131] = 'Upozornění na odpovědi';
$txt[132] = 'Přemístit téma';
$txt[133] = 'Přemístit kam';
$txt[139] = 'Stran';
$txt[140] = 'Aktivní uživatelé v posledních ' . $modSettings['lastActive'] . ' minutách';
$txt[144] = 'Soukromé zprávy';
$txt[145] = 'Odpověď s citací';
$txt[146] = 'Odpověď';

$txt[151] = 'Žádné zprávy...';
$txt[152] = 'máš';
$txt[153] = 'zpráv';
$txt[154] = 'Smazat tuto zprávu';

$txt[158] = 'Uživatelů online';
$txt[159] = 'Soukromá zpráva';
$txt[160] = 'Skočit na';
$txt[161] = 'Hop!';
$txt[162] = 'Jsi si jistý, že chceš smazat toto téma?';
$txt[163] = 'Ano';
$txt[164] = 'Ne';

$txt[166] = 'Výsledky vyhledávání';
$txt[167] = 'Konec výsledků';
$txt[170] = 'Lituji, nic nebylo nalezeno';
$txt[176] = '';

$txt[182] = 'Vyhledávání';
$txt[190] = 'Vše';

$txt[193] = 'Zpět';
$txt[194] = ' - připomenutí';
$txt[195] = 'Téma založeno';
$txt[196] = 'Název';
$txt[197] = 'Přispěvatel';
$txt[200] = 'Seznam registrovaných uživatelů.';
$txt[201] = 'Vítej';
$txt[208] = 'Administrační centrum';
$txt[211] = 'Poslední změna';
$txt[212] = 'Chtěl bys zrušit upozornění pro toto téma?';

$txt[214] = 'Poslední příspěvky';

$txt[227] = 'Místo';
$txt[231] = 'Pohlaví';
$txt[233] = 'Datum registrace';

$txt[234] = 'Zobrazit 10 nejnovějších příspěvků na tomto fóru.';
$txt[235] = 'je naposledy změněné téma';

$txt[238] = 'Mužské';
$txt[239] = 'Ženské';

$txt[240] = 'V uživatelském jménu byl použit nesprávný znak.';

$txt['welcome_guest'] = 'Vítej, <b>' . $txt[28] . '</b>. Prosím <a href="' . $scripturl . '?action=login">přihlaš se</a> nebo <a href="' . $scripturl . '?action=register">se zaregistruj</a>.';
$txt['welcome_guest_activate'] = '<br />Nedostal jsi svůj <a href="' . $scripturl . '?action=activate">aktivační email?</a>';
$txt['hello_member'] = 'Čau';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Vítej,';
$txt[247] = 'Čau';
$txt[248] = 'Vítej,';
$txt[249] = 'Prosím';
$txt[250] = 'Zpět';
$txt[251] = 'Prosím vyber cíl';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Poslal';

$txt[287] = 'Úsměv';
$txt[288] = 'Hněv';
$txt[289] = 'Smích';
$txt[290] = 'Řehot';
$txt[291] = 'Smutek';
$txt[292] = 'Mrknutí';
$txt[293] = 'Škleb';
$txt[294] = 'Šok';
$txt[295] = 'Valím oči! Super!';
$txt[296] = 'Co???';
$txt[450] = 'Kroutím očima';
$txt[451] = 'Vyplazuji jazyk';
$txt[526] = 'Jsem v rozpacích';
$txt[527] = 'Neřeknu nic';
$txt[528] = 'Nevím co si myslet/Nerozhodný';
$txt[529] = 'Polibek';
$txt[530] = 'Pláč';

$txt[298] = 'Moderátor';
$txt[299] = 'Moderátoři';

$txt[300] = 'Označit v této diskusi všechna témata jako přečtená';
$txt[301] = 'Shlédnutí';
$txt[302] = 'Nové';

$txt[303] = 'Zobrazit všechny uživatele';
$txt[305] = 'Zobrazit';
$txt[307] = 'Email';

$txt[308] = 'Zobrazení členů';
$txt[309] = 'z';
$txt[310] = 'celkem';
$txt[311] = '-';
$txt[315] = 'Zapomněl jsi heslo?';

$txt[317] = 'Datum';
// Use numeric entities in the below string.
$txt[318] = 'Od';
$txt[319] = 'Předmět';
$txt[322] = 'Zkontrolovat nové zprávy';
$txt[324] = 'Komu';

$txt[330] = 'Témat';
$txt[331] = 'Uživatelé';
$txt[332] = 'Seznam uživatelů';
$txt[333] = 'Nové příspěvky';
$txt[334] = 'Žádné nové příspěvky';

$txt['sendtopic_send'] = 'Poslat';

$txt[371] = 'Časový posun';
$txt[377] = 'nebo';

$txt[398] = 'Je mi líto, ale nic nebylo nalezeno';

$txt[418] = 'Upozornění';

$txt[430] = 'Lituji, %s, ale na tomto fóru máš zákaz!';

$txt[452] = 'Označit všechny zprávy jako přečtené';

$txt[454] = 'Žhavé téma (Více než ' . $modSettings['hotTopicPosts'] . ' odpovědí)';
$txt[455] = 'Velmi žhavé téma (Více než ' . $modSettings['hotTopicVeryPosts'] . ' odpovědí)';
$txt[456] = 'Zamčené téma';
$txt[457] = 'Normální téma';
$txt['participation_caption'] = 'Téma s tvým příspěvkem';

$txt[462] = 'Do toho!';

$txt[465] = 'Tisk';
$txt[467] = 'Profil';
$txt[468] = 'Shrnutí tématu';
$txt[470] = 'N/A';
$txt[471] = 'zpráv';
$txt[473] = 'Toto jméno již používá jiný uživatel.';

$txt[488] = 'Celkem uživatelů';
$txt[489] = 'Celkem příspěvků';
$txt[490] = 'Celkem témat';

$txt[497] = 'Doba přihlášení';

$txt[507] = 'Prohlédnout';
$txt[508] = 'Zůstat stále přihlášen';

$txt[511] = 'Zaznamenáno';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'od';

$txt[578] = 'hodin';
$txt[579] = 'dnů';

$txt[581] = ', náš nejnovější uživatel.';

$txt[582] = 'Hledat';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Haló.+Je+tu+někdo?';
$txt[604] = 'YIM';

$txt[616] = 'Toto fórum je v \'Módu údržby\'.';

$txt[641] = 'Přečteno';
$txt[642] = 'krát';

$txt[645] = 'Statistiky fóra';
$txt[656] = 'Nejnovější uživatel';
$txt[658] = 'Celkem kategorií';
$txt[659] = 'Poslední příspěvek';

$txt[660] = 'Máš';
$txt[661] = 'Klikni';
$txt[662] = 'sem';
$txt[663] = 'abys je viděl.';

$txt[665] = 'Celkem diskusí';

$txt[668] = 'Tisknout stránku';

$txt[679] = 'Musí obsahovat platnou emailovou adresu.';

$txt[683] = 'Jsem geek!!';
$txt[685] = $context['forum_name'] . ' - Informační centrum';

$txt[707] = 'Poslat téma';

$txt['sendtopic_title'] = 'Poslat téma &quot;%s&quot; příteli.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Ahoj %s,';
$txt['sendtopic_this_topic'] = 'Rád bych, aby sis přečetl téma "%s" na ' . $context['forum_name'] . '.  Prosím, klikni na tento odkaz';
$txt['sendtopic_thanks'] = 'S pozdravem';
$txt['sendtopic_sender_name'] = 'Tvé jméno';
$txt['sendtopic_sender_email'] = 'Tvá adresa';
$txt['sendtopic_receiver_name'] = 'Jméno příjemce';
$txt['sendtopic_receiver_email'] = 'Adresa příjemce';
$txt['sendtopic_comment'] = 'Přidej komentář';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Komentář k tomuto tématu';

$txt[721] = 'Skrýt email?';

$txt[737] = 'Vybrat vše';

// Use numeric entities in the below string.
$txt[1001] = 'Chyba databáze';
$txt[1002] = 'Prosím, zkus to znovu. Pokud opět uvidíš tuto chybu, nahlas ji moderátorovi.';
$txt[1003] = 'Soubor';
$txt[1004] = 'Řádek';
// Use numeric entities in the below string.
$txt[1005] = 'SMF odhalilo a automaticky se pokusilo opravit chybu v databázi. Pokud budou problémy pokračovat, nebo budeš dostávat tyto emaily, kontaktuj svého provozovatele.';
$txt['database_error_versions'] = '<b>Upozornění:</b> Vypadá to, že by tvoje databáze potřebovala upgrade. Soubory fóra mají verzi ' . $forum_version . ', kdežto databáze je pro verzi ' . $modSettings['smfVersion'] . '. Doporučujeme ti spustit poslední verzi upgrade.php.';
$txt['template_parse_error'] = 'Chyba procházení šablony!';
$txt['template_parse_error_message'] = 'Vypadá to, že se něco pokazilo v systému šablon. Tento problém by měl být pouze dočasný, takže se zkus vrátit později a zkus to znovu. Pokud nadále uvidíš toto hlášení, kontaktuj prosím administrátora.<br /><br />Můžeš taky zkusit <a href="javascript:location.reload();">obnovit tuto stránku</a>.';
$txt['template_parse_error_details'] = 'Je problém s přečtením souboru <tt><b>%1$s</b></tt>. Prosím, zkontroluj jeho syntaxi a zkus to znovu - pamatuj na to, že jednoduché uvozovky (<tt>\'</tt>) musí být často se zpětným lomítkem (<tt>\\</tt>). Abys viděl přesnější chybové hlášení PHP, pokus se <a href="' . $boardurl . '%1$s">přistoupit na soubor přímo</a>.<br /><br />Můžeš taky zkusit <a href="javascript:location.reload();">obnovit tuto stránku</a> nebo <a href="' . $scripturl . '?theme=1">použít výchozí téma</a>.';

$txt['smf10'] = '<b>Dnes</b> v ';
$txt['smf10b'] = '<b>Včera</b> v ';
$txt['smf20'] = 'Založit anketu';
$txt['smf21'] = 'Otázka';
$txt['smf23'] = 'Hlasuj';
$txt['smf24'] = 'Celkem hlasů';
$txt['smf25'] = 'zkratky: stiskni alt+s k odeslání nebo alt+p k prohlížení';
$txt['smf29'] = 'Zobrazit výsledky.';
$txt['smf30'] = 'Pozastavit hlasování';
$txt['smf30b'] = 'Obnovit hlasování';
$txt['smf39'] = 'Změnit anketu';
$txt['smf43'] = 'Anketa';
$txt['smf47'] = '1 den';
$txt['smf48'] = '1 týden';
$txt['smf49'] = '1 měsíc';
$txt['smf50'] = 'napořád';
$txt['smf52'] = 'Přihlaš se uživatelským jménem, heslem a délkou sezení';
$txt['smf53'] = '1 hodina';
$txt['smf56'] = 'PŘESUNUTO';
$txt['smf57'] = 'Prosím, zadej krátký popis,<br />proč bylo téma přemístěno.';
$txt['smf60'] = 'Lituji, ale nemáš dost příspěvků. Abys mohl upravovat karmu, potřebuješ nejméně ';
$txt['smf62'] = 'Lituji, ale nemůžeš opakovat změnu karmy bez čekání ';
$txt['smf82'] = 'Diskuse';
$txt['smf88'] = 'v';
$txt['smf96'] = 'Připíchnuté téma';

$txt['smf138'] = 'Smazat';

$txt['smf199'] = 'Tvé soukromé zprávy';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Více statistik]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kód';
$txt['smf239'] = 'Citace';
$txt['smf240'] = 'Citace';

$txt['smf251'] = 'Rozdělit téma';
$txt['smf252'] = 'Sloučit témata';
$txt['smf254'] = 'Předmět pro nové téma';
$txt['smf255'] = 'Oddělit pouze tento příspěvek.';
$txt['smf256'] = 'Oddělit tento příspěvek a všechny za ním.';
$txt['smf257'] = 'Vyber příspěvky k rozdělení.';
$txt['smf258'] = 'Nové téma';
$txt['smf259'] = 'Téma bylo úspěšně rozděleno.';
$txt['smf260'] = 'Původní téma';
$txt['smf261'] = 'Prosím, vyber příspěvky k rozdělení.';
$txt['smf264'] = 'Témata úspěšně sloučena.';
$txt['smf265'] = 'Nové sloučené téma';
$txt['smf266'] = 'Témata k sloučení';
$txt['smf267'] = 'Cílová diskuse';
$txt['smf269'] = 'Cílové téma';
$txt['smf274'] = 'Jsi si jistý, že chceš sloučit';
$txt['smf275'] = 's';
$txt['smf276'] = 'Tato funkce sloučí příspěvky dvou témat do jednoho. Příspěvky budou setříděny podle data poslání.';

$txt['smf277'] = 'Připíchnout téma';
$txt['smf278'] = 'Odpíchnout téma';
$txt['smf279'] = 'Zamknout téma';
$txt['smf280'] = 'Odemknout téma';

$txt['smf298'] = 'Pokročilé vyhledávání';

$txt['smf299'] = 'ZÁVAŽNÁ BEZPEČNOSTNÍ CHYBA:';
$txt['smf300'] = 'Neodstranil jsi ';

$txt['smf301'] = 'Stránka vytvořena za ';
$txt['smf302'] = ' sekund, ';
$txt['smf302b'] = ' dotazů.';

$txt['smf315'] = 'Tato funkce slouží k informování moderátorů a administrátorů o nevhodných nebo nesprávně poslaných příspěvcích.<br /><i>Tvoje emailová adresa bude zobrazena moderátorům (tj. není to anonymní).</i>';

$txt['online2'] = 'Online';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Soukromá zpráva (Online)';
$txt['online5'] = 'Soukromá zpráva (Offline)';
$txt['online8'] = 'Stav';

$txt['topbottom4'] = 'Nahoru';
$txt['topbottom5'] = 'Dolů';

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


$txt['calendar3'] = 'Narozeniny:';
$txt['calendar4'] = 'Události:';
$txt['calendar3b'] = 'Blížící se narozeniny:';
$txt['calendar4b'] = 'Blížící se události:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Měsíc:';
$txt['calendar10'] = 'Rok:';
$txt['calendar11'] = 'Den:';
$txt['calendar12'] = 'Titul události:';
$txt['calendar13'] = 'Přispět do:';
$txt['calendar20'] = 'Editovat událost';
$txt['calendar21'] = 'Smazat tuto událost?';
$txt['calendar22'] = 'Smazat událost';
$txt['calendar23'] = 'Poslat událost';
$txt['calendar24'] = 'Kalendář';
$txt['calendar37'] = 'Spojit s kalendářem';
$txt['calendar43'] = 'Připojit událost';
$txt['calendar47'] = 'Kalendář';
$txt['calendar47b'] = 'Kalendář pro dnešek';
$txt['calendar51'] = 'Týden';
$txt['calendar54'] = 'Počet dní:';
$txt['calendar_how_edit'] = 'jak upravit tyto události?';
$txt['calendar_link_event'] = 'Spojit událost s příspěvkem:';
$txt['calendar_confirm_delete'] = 'Jsi si jistý, že chceš smazat tuto událost?';
$txt['calendar_linked_events'] = 'Spojené události';

$txt['moveTopic1'] = 'Poslat i přesměrovávací příspěvek';
$txt['moveTopic2'] = 'Změnit předmět tématu';
$txt['moveTopic3'] = 'Nový předmět';
$txt['moveTopic4'] = 'Změnit předmět všech příspěvků';

$txt['theme_template_error'] = 'Nemohu načíst šablonu \'%s\'.';
$txt['theme_language_error'] = 'Nemohu načíst jazykový soubor \'%s\'.';

$txt['parent_boards'] = 'Podřízené diskuse';

$txt['smtp_no_connect'] = 'Nemůžu se spojit se serverem SMTP';
$txt['smtp_port_ssl'] = 'Nastavení SMTP portu je nesprávné, pro SSL servery by to mělo být 465.';
$txt['smtp_bad_response'] = 'Nemohu zjistit kódy odpovědí mailového serveru';
$txt['smtp_error'] = 'Při posílání mailu nastaly problémy. Chyba: ';
$txt['mail_send_unable'] = 'Nebylo možno zaslat mail na adresu \'%s\'';

$txt['mlist_search'] = 'Hledat uživatele';
$txt['mlist_search2'] = 'Hledat znovu';
$txt['mlist_search_email'] = 'Hledat email';
$txt['mlist_search_messenger'] = 'Hledat přezdívku messengeru';
$txt['mlist_search_group'] = 'Hledat podle pozice';
$txt['mlist_search_name'] = 'Hledat podle jména';
$txt['mlist_search_website'] = 'Hledat podle webu';
$txt['mlist_search_results'] = 'Prohledávat výsledky na';

$txt['attach_downloaded'] = 'staženo';
$txt['attach_viewed'] = 'prohlédnuto';
$txt['attach_times'] = 'krát';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Nastavení';
$txt['never'] = 'Nikdy';
$txt['more'] = 'více';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Promiň, %s, ale máš zákaz přispívat nebo posílat soukromé zprávy na tomto fóru.';
$txt['ban_reason'] = 'Důvod';

$txt['tables_optimized'] = 'Tabulky databáze zoptimalizovány';

$txt['add_poll'] = 'Přidat anketu';
$txt['poll_options6'] = 'Můžeš vybrat pouze %s voleb.';
$txt['poll_remove'] = 'Smazat anketu';
$txt['poll_remove_warn'] = 'Jsi si jistý, že chceš odstranit tuto anketu z tématu?';
$txt['poll_results_expire'] = 'Výsledky budou zobrazeny, až hlasování skončí';
$txt['poll_expires_on'] = 'Hlasování skončí';
$txt['poll_expired_on'] = 'Hlasování ukončeno';
$txt['poll_change_vote'] = 'Odebrat hlas';
$txt['poll_return_vote'] = 'Nastavení hlasování';

$txt['quick_mod_remove'] = 'Smazat vybrané';
$txt['quick_mod_lock'] = 'Zamknout vybrané';
$txt['quick_mod_sticky'] = 'Připíchnout vybrané';
$txt['quick_mod_move'] = 'Přemístit vybrané do';
$txt['quick_mod_merge'] = 'Sloučit vybrané';
$txt['quick_mod_markread'] = 'Označit vybrané jako přečtené';
$txt['quick_mod_go'] = 'Do toho!';
$txt['quickmod_confirm'] = 'Jsi si jistý, že to chceš opravdu udělat?';

$txt['spell_check'] = 'Zkontrolovat pravopis';

$txt['quick_reply_1'] = 'Rychlá odpověď';
$txt['quick_reply_2'] = 'S <i>rychlou odpovědí</i> můžeš používat BB kódy a emotikony jako v běžném okně odpovědi, ale daleko rychleji.';
$txt['quick_reply_warning'] = 'Varování: toto téma je zamčené!<br />Pouze administrátoři a moderátoři můžou odpovídat.';

$txt['notification_enable_board'] = 'Jsi si jistý, že chceš zapnout upozornění na nová témata v této diskusi?';
$txt['notification_disable_board'] = 'Jsi si jistý, že chceš vypnout upozornění na nová témata v této diskusi?';
$txt['notification_enable_topic'] = 'Jsi si jistý, že chceš zapnout upozornění na nové příspěvky v tomto tématu?';
$txt['notification_disable_topic'] = 'Jsi si jistý, že chceš vypnout upozornění na nové příspěvky v tomto tématu?';

$txt['rtm1'] = 'Nahlásit moderátorovi';

$txt['unread_topics_visit'] = 'Nejnovější nepřečtená témata';
$txt['unread_topics_visit_none'] = 'Od tvé poslední návštěvy nejsou žádná nová nepřečtená témata.<br><a href="' . $scripturl . '?action=unread;all">Klikni sem, abys viděl všechna nepřečtená témata</a>.';
$txt['unread_topics_all'] = 'Všechna nepřečtená témata';
$txt['unread_replies'] = 'Aktualizovaná témata';

$txt['who_title'] = 'Kdo je online';
$txt['who_and'] = ' a ';
$txt['who_viewing_topic'] = ' prohlíží toto téma.';
$txt['who_viewing_board'] = ' prohlíží tuto diskusi.';
$txt['who_member'] = 'Uživatel';

$txt['powered_by_php'] = 'Poháněno PHP';
$txt['powered_by_mysql'] = 'Poháněno MySQL';
$txt['valid_html'] = 'Validní HTML 4.01!';
$txt['valid_xhtml'] = 'Validní XHTML 1.0!';
$txt['valid_css'] = 'Validní CSS!';

$txt['guest'] = 'Host';
$txt['guests'] = 'Hostů';
$txt['user'] = 'Uživatel';
$txt['users'] = 'Uživatelů';
$txt['hidden'] = 'Skrytých';
$txt['buddy'] = 'Kámoš';
$txt['buddies'] = 'Kámošů';
$txt['most_online_ever'] = 'Nejvíc online';
$txt['most_online_today'] = 'Nejvíc online (dnes)';

$txt['merge_select_target_board'] = 'Vybrat cílovou diskusi pro sloučené téma';
$txt['merge_select_poll'] = 'Vybrat, kterou anketu bude mít sloučené téma';
$txt['merge_topic_list'] = 'Vybrat témata k sloučení';
$txt['merge_select_subject'] = 'Vybrat předmět sloučeného tématu';
$txt['merge_custom_subject'] = 'Jiný předmět';
$txt['merge_enforce_subject'] = 'Změnit předmět všech zpráv';
$txt['merge_include_notifications'] = 'Včetně upozornění?';
$txt['merge_check'] = 'Sloučit?';
$txt['merge_no_poll'] = 'Žádná anketa';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Aktuální ikona';

$txt['smileys_current'] = 'Aktuální sada emotikonů';
$txt['smileys_none'] = 'Žádné emotikony';
$txt['smileys_forum_board_default'] = 'Výchozí nastavení fóra';

$txt['search_results'] = 'Výsledky vyhledávání';
$txt['search_no_results'] = 'Žádné výsledky nenalezeny';

$txt['totalTimeLogged1'] = 'Celková doba přihlášení: ';
$txt['totalTimeLogged2'] = ' dnů, ';
$txt['totalTimeLogged3'] = ' hodin a ';
$txt['totalTimeLogged4'] = ' minut.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Je';
$txt['approve_thereare'] = 'Jsou';
$txt['approve_member'] = 'jeden uživatel';
$txt['approve_members'] = 'uživatelé';
$txt['approve_members_waiting'] = 'očekávající schválení.';

$txt['notifyboard_turnon'] = 'Chceš upozornění, když někdo pošle nové téma do této diskuse?';
$txt['notifyboard_turnoff'] = 'Jsi si jistý, že již nechceš dostávat upozornění pro tuto diskusi?';

$txt['activate_code'] = 'Tvůj aktivační kód je';

$txt['find_members'] = 'Hledat uživatele';
$txt['find_username'] = 'Jméno, uživatelské jméno nebo emailová adresa';
$txt['find_buddies'] = 'Ukázat jen kámoše?';
$txt['find_wildcards'] = 'Povolené žolíky: *, ?';
$txt['find_no_results'] = 'Žádné výsledky';
$txt['find_results'] = 'Výsledky';
$txt['find_close'] = 'Zavři';

$txt['unread_since_visit'] = 'Zobrazit nepřečtené příspěvky od poslední návštěvy.';
$txt['show_unread_replies'] = 'Zobrazit nové odpovědi na tvé příspěvky.';

$txt['change_color'] = 'Změnit barvu';

$txt['quickmod_delete_selected'] = 'Smazat vybrané';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Dostal jsi jednu nebo více soukromých zpráv.\\nChceš si je nyní prohlédnout (v novém okně)?';

$txt['previous_next_back'] = '&laquo; předchozí';
$txt['previous_next_forward'] = 'další &raquo;';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'Toto téma bylo přemístěno do ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Sbal nebo rozbal hlavičku.';

$txt['mark_unread'] = 'Vše nepřečteno';

$txt['ssi_not_direct'] = 'Prosím nepřistupuj k SSI.php přímo pomocí URL adresy; Můžeš buď použít cestu (%s) nebo přidat ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php nebylo schopno natáhnout sezení! To může znamena problém s odhlášením a dalšími funkcemi - ujisti se, že SSI.php je vloženo před čímkoli jiným ve tvých skriptech!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Prohlédnout příspěvek';
$txt['preview_fetch'] = 'Zobrazuji náhlad...';
$txt['preview_new'] = 'Nový příspěvek';
$txt['error_while_submitting'] = 'Následující chyba nastala při posílání této zprávy:';

$txt['split_selected_posts'] = 'Vybrané příspěvky';
$txt['split_selected_posts_desc'] = 'Příspěvky níže utvoří nové téma po rozdělení.';
$txt['split_reset_selection'] = 'vymazat výběr';

$txt['modify_cancel'] = 'Storno';
$txt['mark_read_short'] = 'Označit jako přečtené';

$txt['pm_short'] = 'Moje zprávy';
$txt['hello_member_ndt'] = 'Nazdar';

$txt['ajax_in_progress'] = 'Nahrávám...';

?>