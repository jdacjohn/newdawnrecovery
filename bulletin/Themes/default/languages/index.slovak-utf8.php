<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'sk_SK.utf8';
$txt['lang_dictionary'] = 'sk';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Nedeľa', 'Pondelok', 'Útorok', 'Streda', 'Štvrtok', 'Piatok', 'Sobota');
$txt['days_short'] = array('Ne', 'Po', 'Út', 'St', 'Št', 'Pi', 'So');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Január', 'Február', 'Marec', 'Apríl', 'Máj', 'Jún', 'Júl', 'August', 'September', 'Október', 'November', 'December');
$txt['months_titles'] = array(1 => 'Január', 'Február', 'Marec', 'Apríl', 'Máj', 'Jún', 'Júl', 'August', 'September', 'Október', 'November', 'December');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'Máj', 'Jún', 'Júl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

$txt['newmessages0'] = 'je nová';
$txt['newmessages1'] = 'nových';
$txt['newmessages3'] = 'Nové';
$txt['newmessages4'] = ',';

$txt[2] = 'Administrácia';

$txt[10] = 'Uložiť';

$txt[17] = 'Zmeniť';
$txt[18] = $context['forum_name'] . ' - Index';
$txt[19] = 'užívateľov';
$txt[20] = 'Meno diskusie';
$txt[21] = 'Príspevkov';
$txt[22] = 'Posledný príspevok';

$txt[24] = '(Bez predmetu)';
$txt[26] = 'Príspevkov';
$txt[27] = 'Zobraziť profil';
$txt[28] = 'Hosť';
$txt[29] = 'Autor';
$txt[30] = 'kedy';
$txt[31] = 'Odstrániť';
$txt[33] = 'Založiť novú tému';

$txt[34] = 'Prihlásiť';
// Use numeric entities in the below string.
$txt[35] = 'Užívateľ';
$txt[36] = 'Heslo';

$txt[40] = 'Užívatelské meno neexistuje.';

$txt[62] = 'Moderátor diskusie';
$txt[63] = 'Zmazať tému';
$txt[64] = 'tém';
$txt[66] = 'Zmeniť správu';
$txt[68] = 'Meno';
$txt[69] = 'Email';
$txt[70] = 'Predmet';
$txt[72] = 'Správa';

$txt[79] = 'Editácia profilu';

$txt[81] = 'Zvolte heslo';
$txt[82] = 'Overte heslo';
$txt[87] = 'Pozícia';

$txt[92] = 'Zobraziť profil užívatela';
$txt[94] = 'Počet';
$txt[95] = 'príspevkov';
$txt[96] = 'Web';
$txt[97] = 'Registrovať';

$txt[101] = 'Index správ';
$txt[102] = 'Novinky';
$txt[103] = 'Domov';

$txt[104] = 'Zamknúť/odomknúť tému';
$txt[105] = 'Poslať';
$txt[106] = 'Nastala chyba!';
$txt[107] = 'v';
$txt[108] = 'Odhlásiť';
$txt[109] = 'Založil';
$txt[110] = 'Odpovedí';
$txt[111] = 'Posledný príspevok';
$txt[114] = 'Prihlásenie administrátora';
// Use numeric entities in the below string.
$txt[118] = 'Téma';
$txt[119] = 'Nápoveda';
$txt[121] = 'Zmazať správu';
$txt[125] = 'Upozorniť';
$txt[126] = 'Chcete dostať upozornenie, keď niekto odpovie na túto tému?';
// Use numeric entities in the below string.
$txt[130] = "S pozdravom,\ntým " . $context['forum_name'];
$txt[131] = 'Upozornenie na odpovede';
$txt[132] = 'Premiestniť tému';
$txt[133] = 'Premiestniť kam';
$txt[139] = 'Strán';
$txt[140] = 'Aktívni užívatelia v posledných ' . $modSettings['lastActive'] . ' minutách';
$txt[144] = 'Súkromné správy';
$txt[145] = 'Odpoveď s citáciou';
$txt[146] = 'Odpoveď';

$txt[151] = 'Žiadne správy...';
$txt[152] = 'máte';
$txt[153] = 'správ';
$txt[154] = 'Zmazať túto správu';

$txt[158] = 'Užívateľov online';
$txt[159] = 'Súkromá správa';
$txt[160] = 'Skočiť na';
$txt[161] = 'Hop!';
$txt[162] = 'Ste si istý, že chcete zmazať túto tému?';
$txt[163] = 'Áno';
$txt[164] = 'Nie';

$txt[166] = 'Výsledky vyhľadávania';
$txt[167] = 'Koniec výsledkov';
$txt[170] = 'Ľutujeme, nič nebolo nájdené';
$txt[176] = '';

$txt[182] = 'Vyhľadávanie';
$txt[190] = 'Všetko';

$txt[193] = 'Späť';
$txt[194] = ' - pripomienka';
$txt[195] = 'Téma založená';
$txt[196] = 'Názov';
$txt[197] = 'Prispievateľ';
$txt[200] = 'Zoznam registrovaných užívateľov.';
$txt[201] = 'Vitajte';
$txt[208] = 'Administračné centrum';
$txt[211] = 'Posledná zmena';
$txt[212] = 'Chceli by ste zrušiť upozornenie pre túto tému?';

$txt[214] = 'Posledné príspevky';

$txt[227] = 'Miesto';
$txt[231] = 'Pohlavie';
$txt[233] = 'Dátum registrácie';

$txt[234] = 'Zobraziť 10 najnovších príspevkov v tomto fóre.';
$txt[235] = 'je naposledy zmenená téma';

$txt[238] = 'Mužské';
$txt[239] = 'Ženské';

$txt[240] = 'V užívateľskom mene bol použitý nesprávný znak.';

$txt['welcome_guest'] = 'Vitajte, <b>' . $txt[28] . '</b>. Prosím <a href="' . $scripturl . '?action=login">prihláste sa</a> alebo <a href="' . $scripturl . '?action=register">sa zaregistrujte</a>.';
$txt['welcome_guest_activate'] = '<br />Nedostali ste váš <a href="' . $scripturl . '?action=activate">aktivačný email?</a>';
$txt['hello_member'] = 'Čau';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Vitajte,';
$txt[247] = 'Čau';
$txt[248] = 'Vitaj,';
$txt[249] = 'Prosím';
$txt[250] = 'Späť';
$txt[251] = 'Prosím vyberte cieľ';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Poslal';

$txt[287] = 'Úsmev';
$txt[288] = 'Hnev';
$txt[289] = 'Smiech';
$txt[290] = 'Rehot';
$txt[291] = 'Smútok';
$txt[292] = 'Mrknutie';
$txt[293] = 'Úšklabok';
$txt[294] = 'Šok';
$txt[295] = 'Vyvalujem oči! Super!';
$txt[296] = 'Čo???';
$txt[450] = 'Gúľam očami';
$txt[451] = 'Vyplazujem jazyk';
$txt[526] = 'Som v rozpakoch';
$txt[527] = 'Nepoviem nič';
$txt[528] = 'Neviem čo si myslieť/Nerozhodný';
$txt[529] = 'Pusinka';
$txt[530] = 'Plač';

$txt[298] = 'Moderátor';
$txt[299] = 'Moderátori';

$txt[300] = 'Označiť v tejto diskusii všetky témy ako prečítané';
$txt[301] = 'Videné';
$txt[302] = 'Nové';

$txt[303] = 'Zobraziť všetkých užívateľov';
$txt[305] = 'Zobraziť';
$txt[307] = 'Email';

$txt[308] = 'Zobrazenie členov';
$txt[309] = 'z';
$txt[310] = 'celkovo';
$txt[311] = '-';
$txt[315] = 'Zabudli ste heslo?';

$txt[317] = 'Dátum';
// Use numeric entities in the below string.
$txt[318] = 'Od';
$txt[319] = 'Predmet';
$txt[322] = 'Skontrolovať nové správy';
$txt[324] = 'Komu';

$txt[330] = 'Tém';
$txt[331] = 'Užívatelia';
$txt[332] = 'Zoznam užívateľov';
$txt[333] = 'Nové príspevky';
$txt[334] = 'Žiadne nové príspevky';

$txt['sendtopic_send'] = 'Poslať';

$txt[371] = 'Časový posun';
$txt[377] = 'alebo';

$txt[398] = 'Je nám ľúto, ale nič nebolo nájdené';

$txt[418] = 'Upozornenie';

$txt[430] = 'Ľutujeme, %s, ale v tomto fóre máš zákaz!';

$txt[452] = 'Označiť všetky správy ako prečítané';

$txt[454] = 'Horúca téma (Viac ako ' . $modSettings['hotTopicPosts'] . ' odpovedí)';
$txt[455] = 'Veľmi horúca téma (Viac ako ' . $modSettings['hotTopicVeryPosts'] . ' odpovedí)';
$txt[456] = 'Zamknutá téma';
$txt[457] = 'Normálna téma';
$txt['participation_caption'] = 'Téma s vašim príspevkom';

$txt[462] = 'Do toho!';

$txt[465] = 'Tlačiť';
$txt[467] = 'Profil';
$txt[468] = 'Zhrnutie témy';
$txt[470] = 'N/A';
$txt[471] = 'správ';
$txt[473] = 'Toto meno už používa iný užívateľ.';

$txt[488] = 'Celkovo užívateľov';
$txt[489] = 'Celkovo príspevkov';
$txt[490] = 'Celkovo tém';

$txt[497] = 'Doba prihlásenia';

$txt[507] = 'Prehliadnuť';
$txt[508] = 'Zostať stále prihlásený';

$txt[511] = 'Zaznamenané';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'od';

$txt[578] = 'hodín';
$txt[579] = 'dní';

$txt[581] = ', náš najnovší užívateľ.';

$txt[582] = 'Hľadať';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Haló.+Je+tu+niekto?';
$txt[604] = 'YIM';

$txt[616] = 'Toto fórum je v \'Módu údržby\'.';

$txt[641] = 'Prečítané';
$txt[642] = 'krát';

$txt[645] = 'Štatistiky fóra';
$txt[656] = 'Najnovší užívateľ';
$txt[658] = 'Celkovo kategórií';
$txt[659] = 'Posledný príspevok';

$txt[660] = 'Máte';
$txt[661] = 'Kliknite';
$txt[662] = 'sem';
$txt[663] = 'aby ste ich videli.';

$txt[665] = 'Celkovo diskusií';

$txt[668] = 'Tlačiť stránku';

$txt[679] = 'Musí obsahovať platnú emailovú adresu.';

$txt[683] = 'Som geek!!';
$txt[685] = $context['forum_name'] . ' - Informačné centrum';

$txt[707] = 'Poslať tému';

$txt['sendtopic_title'] = 'Poslať tému &quot;%s&quot; priateľovi.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Ahoj %s,';
$txt['sendtopic_this_topic'] = 'Bol by som rád, keby si si prečítal tému "%s" v ' . $context['forum_name'] . '.  Prosím, klikni na tento odkaz';
$txt['sendtopic_thanks'] = 'S pozdravom';
$txt['sendtopic_sender_name'] = 'Vaše meno';
$txt['sendtopic_sender_email'] = 'Vaša adresa';
$txt['sendtopic_receiver_name'] = 'Meno príjemcu';
$txt['sendtopic_receiver_email'] = 'Adresa príjemcu';
$txt['sendtopic_comment'] = 'Pridajte komentár';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Komentár k tejto téme';

$txt[721] = 'Skryť email?';

$txt[737] = 'Vybrať všetko';

// Use numeric entities in the below string.
$txt[1001] = 'Chyba databázy';
$txt[1002] = 'Prosím, zkúste to opäť. Ak opäť uvidíte túto chybu, nahláste ju moderátorovi.';
$txt[1003] = 'Súbor';
$txt[1004] = 'Riadok';
// Use numeric entities in the below string.
$txt[1005] = 'SMF odhalilo a automaticky sa pokúsilo opraviť chybu v databázy. Ak budú problémy pokračovať, alebo budete dostávať tieto emaily, kontaktujte svojho prevádzkovateľa.';
$txt['database_error_versions'] = '<b>Upozornenie:</b> Vyzerá to, že by vaša databáza potrebovala upgrade. Súbory fóra sú vo verzii ' . $forum_version . ', ale databáza je pre verziu ' . $modSettings['smfVersion'] . '. Doporučujeme vám spustiť poslednú verziu upgrade.php.';
$txt['template_parse_error'] = 'Chyba prechádzania šablony!';
$txt['template_parse_error_message'] = 'Vyzerá to, že sa niečo pokazilo v systéme šablon. Tento problém by mal byť iba dočasný, takže sa skúste vrátiť neskôr a skúste to opäť. Ak naďalej uvidíte toto hlásenie, kontaktujte prosím administrátora.<br /><br />Môžete tiež skúsiť <a href="javascript:location.reload();">obnoviť túto stránku</a>.';
$txt['template_parse_error_details'] = 'Je problém s prečítaním súboru <tt><b>%1$s</b></tt>. Prosím, skontrolujte jeho syntax a skúste to opäť - pamätajte na to, že jednoduché úvodzovky (<tt>\'</tt>) musia byť často so spätným lomítkom (<tt>\\</tt>). Aby ste videli presnejšie chybové hlásenia PHP, pokuste sa <a href="' . $boardurl . '%1$s">pristúpiť k súboru priamo</a>.<br /><br />Môžete tiež skúsiť <a href="javascript:location.reload();">obnoviť túto stránku</a> alebo <a href="' . $scripturl . '?theme=1">použiť východziu tému</a>.';

$txt['smf10'] = '<b>Dnes</b> v ';
$txt['smf10b'] = '<b>Včera</b> v ';
$txt['smf20'] = 'Založiť anketu';
$txt['smf21'] = 'Otázka';
$txt['smf23'] = 'Hlasujte';
$txt['smf24'] = 'Celkovo hlasov';
$txt['smf25'] = 'skratky: stlačte alt+s k odoslaniu alebo alt+p k prehliadaniu';
$txt['smf29'] = 'Zobraziť výsledky.';
$txt['smf30'] = 'Pozastaviť hlasovanie';
$txt['smf30b'] = 'Obnoviť hlasovanie';
$txt['smf39'] = 'Zmeniť anketu';
$txt['smf43'] = 'Anketa';
$txt['smf47'] = '1 deň';
$txt['smf48'] = '1 týždeň';
$txt['smf49'] = '1 mesiac';
$txt['smf50'] = 'navždy';
$txt['smf52'] = 'Prihláste sa užívateľským menom, heslom a dĺžkou sedenia';
$txt['smf53'] = '1 hodina';
$txt['smf56'] = 'PRESUNUTÉ';
$txt['smf57'] = 'Prosím, zadajte krátky popis,<br />prečo bola téma premiestnená.';
$txt['smf60'] = 'Ľutujeme, ale nemáte dosť príspevkov. Aby ste mohli upravovať karmu, potrebujete nejmenej ';
$txt['smf62'] = 'Ľutujeme, ale nemôžete opakovať zmenu karmy bez čakania ';
$txt['smf82'] = 'Diskusia';
$txt['smf88'] = 'v';
$txt['smf96'] = 'Prišpendlená téma';

$txt['smf138'] = 'Zmazať';

$txt['smf199'] = 'Vaše súkromné správy';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Viac štatistík]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kód';
$txt['smf239'] = 'Citácia';
$txt['smf240'] = 'Citácia';

$txt['smf251'] = 'Rozdeliť tému';
$txt['smf252'] = 'Spojiť témy';
$txt['smf254'] = 'Predmet pre novú tému';
$txt['smf255'] = 'Oddeliť iba tento príspevok.';
$txt['smf256'] = 'Oddeliť tento príspevok a všetky za ním.';
$txt['smf257'] = 'Vyberte príspevky k rozdeleniu.';
$txt['smf258'] = 'Nová téma';
$txt['smf259'] = 'Téma bola úspešne rozdelená.';
$txt['smf260'] = 'Pôvodná téma';
$txt['smf261'] = 'Prosím, vyberte príspevky k rozdeleniu.';
$txt['smf264'] = 'Témyta úspešne spojené.';
$txt['smf265'] = 'Nová spojená téma';
$txt['smf266'] = 'Témy k spojeniu';
$txt['smf267'] = 'Cieľová diskusia';
$txt['smf269'] = 'Cieľová téma';
$txt['smf274'] = 'Ste si istý, že chcete spojiť';
$txt['smf275'] = 's';
$txt['smf276'] = 'Táto funkcia spojí príspevky dvoch tém do jedného. Príspevky budú usporiadané podľa dátumu poslania.';

$txt['smf277'] = 'Prišpendliť tému';
$txt['smf278'] = 'Odšpendliť tému';
$txt['smf279'] = 'Zamknúť tému';
$txt['smf280'] = 'Odomknúť tému';

$txt['smf298'] = 'Pokročilé vyhľadávanie';

$txt['smf299'] = 'ZÁVAŽNÁ BEZPEČNOSTNÁ CHYBA:';
$txt['smf300'] = 'Neodstranili ste ';

$txt['smf301'] = 'Stránka vytvorená za ';
$txt['smf302'] = ' sekund, ';
$txt['smf302b'] = ' otázok.';

$txt['smf315'] = 'Tato funkcia slúží k informovaniu moderátorov a administrátorov o nevhodných alebo nesprávne poslaných príspevkoch.<br /><i>Vaša emailová adresa bude zobrazená moderátorom (tj. nie je to anonymné).</i>';

$txt['online2'] = 'Online';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Súkromná správa (Online)';
$txt['online5'] = 'Súkromná správa (Offline)';
$txt['online8'] = 'Stav';

$txt['topbottom4'] = 'Hore';
$txt['topbottom5'] = 'Dole';

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


$txt['calendar3'] = 'Narodeniny:';
$txt['calendar4'] = 'Udalosti:';
$txt['calendar3b'] = 'Blížiace sa narodeniny:';
$txt['calendar4b'] = 'Blížiace sa udalosti:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Mesiac:';
$txt['calendar10'] = 'Rok:';
$txt['calendar11'] = 'Deň:';
$txt['calendar12'] = 'Titul udalosti:';
$txt['calendar13'] = 'Prispieť do:';
$txt['calendar20'] = 'Editovať udalosť';
$txt['calendar21'] = 'Zmazať túto udalosť?';
$txt['calendar22'] = 'Zmazať udalosť';
$txt['calendar23'] = 'Poslať udalosť';
$txt['calendar24'] = 'Kalendár';
$txt['calendar37'] = 'Spojiť s kalendárom';
$txt['calendar43'] = 'Pripojiť udalosť';
$txt['calendar47'] = 'Kalendár';
$txt['calendar47b'] = 'Kalendár pre dnešok';
$txt['calendar51'] = 'Týždeň';
$txt['calendar54'] = 'Počet dní:';
$txt['calendar_how_edit'] = 'ako upraviť tieto udalosti?';
$txt['calendar_link_event'] = 'Spojiť udalosť s príspevkom:';
$txt['calendar_confirm_delete'] = 'Ste si istý, že chcete zmazať túto udalosť?';
$txt['calendar_linked_events'] = 'Spojené udalosti';

$txt['moveTopic1'] = 'Poslať aj presmerovávací príspevok';
$txt['moveTopic2'] = 'Zmeniť predmet témy';
$txt['moveTopic3'] = 'Nový predmet';
$txt['moveTopic4'] = 'Zmeniť predmet všetkých príspevkov';

$txt['theme_template_error'] = 'Nemôžem načítať šablonu \'%s\'.';
$txt['theme_language_error'] = 'Nemôžem načítať jazykový súbor \'%s\'.';

$txt['parent_boards'] = 'Podriadená diskusia';

$txt['smtp_no_connect'] = 'Nemôžem sa spojiť so serverom SMTP';
$txt['smtp_port_ssl'] = 'Nastavenie SMTP portu je nesprávné, pre SSL servery by to malo byť 465.';
$txt['smtp_bad_response'] = 'Nemôžem zistiť kódy odpovedí mailového servera';
$txt['smtp_error'] = 'Pri posielaní mailu nastali problémy. Chyba: ';
$txt['mail_send_unable'] = 'Nebolo možné zaslať mail na adresu \'%s\'';

$txt['mlist_search'] = 'Hľadať užívateľa';
$txt['mlist_search2'] = 'Hľadať opäť';
$txt['mlist_search_email'] = 'Hľadať email';
$txt['mlist_search_messenger'] = 'Hľadať prezývku messengeru';
$txt['mlist_search_group'] = 'Hľadať podľa pozície';
$txt['mlist_search_name'] = 'Hľadať podľa mena';
$txt['mlist_search_website'] = 'Hľadať podľa webu';
$txt['mlist_search_results'] = 'Prehľadávať výsledky na';

$txt['attach_downloaded'] = 'stiahnuté';
$txt['attach_viewed'] = 'prehliadnuté';
$txt['attach_times'] = 'krát';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Nastavenie';
$txt['never'] = 'Nikdy';
$txt['more'] = 'viac';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Prepáčte, %s, ale máte zákaz prispievať alebo posielať súkromné správy na tomto fóre.';
$txt['ban_reason'] = 'Dôvod';

$txt['tables_optimized'] = 'Tabuľky databázy zoptimalizované';

$txt['add_poll'] = 'Pridaťt anketu';
$txt['poll_options6'] = 'Môžete vybrať iba %s volieb.';
$txt['poll_remove'] = 'Zmazať anketu';
$txt['poll_remove_warn'] = 'Ste si istý, že chcete odstrániť túto anketu z témy?';
$txt['poll_results_expire'] = 'Výsledky budú zobrazené, až hlasovanie skončí';
$txt['poll_expires_on'] = 'Hlasovanie skončí';
$txt['poll_expired_on'] = 'Hlasovanie ukončené';
$txt['poll_change_vote'] = 'Odobrať hlas';
$txt['poll_return_vote'] = 'Nastavenie hlasovania';

$txt['quick_mod_remove'] = 'Zmazať vybrané';
$txt['quick_mod_lock'] = 'Zamknúť vybrané';
$txt['quick_mod_sticky'] = 'Prišpendliť vybrané';
$txt['quick_mod_move'] = 'Premiestniť vybrané do';
$txt['quick_mod_merge'] = 'Spojiť vybrané';
$txt['quick_mod_markread'] = 'Označiť vybrané ako prečítané';
$txt['quick_mod_go'] = 'Do toho!';
$txt['quickmod_confirm'] = 'Ste si istý, že to chcete skutočne urobiť?';

$txt['spell_check'] = 'Skontrolovať pravopis';

$txt['quick_reply_1'] = 'Rýchla odpoveď';
$txt['quick_reply_2'] = 'S <i>rýchlou odpoveďou</i> môžete používať BB kódy a emotikony ako v bežnom okne odpovede, ale oveľa rýchlejšie.';
$txt['quick_reply_warning'] = 'Varovanie: táto téma je zamknutá!<br />Iba administrátori a moderátori môžu odpovedať.';

$txt['notification_enable_board'] = 'Ste si istý, že chcete zapnúť upozornenie na novú tému v tejto diskusii?';
$txt['notification_disable_board'] = 'Ste si istý, že chcete vypnúť upozornenie na novú tému v tejto diskusii?';
$txt['notification_enable_topic'] = 'Ste si istý, že chcete zapnúť upozornenie na nové príspevky v tejto téme?';
$txt['notification_disable_topic'] = 'Ste si istý, že chcete vypnúť upozornenie na nové príspevky v tejto téme?';

$txt['rtm1'] = 'Nahlásiť moderátorovi';

$txt['unread_topics_visit'] = 'Najnovšie neprečítané témy';
$txt['unread_topics_visit_none'] = 'Od vašej poslednej návštevy nie sú žiadne nové neprečítané témy.<br><a href="' . $scripturl . '?action=unread;all">Kliknite sem, abyste videli všetky neprečítané témy</a>.';
$txt['unread_topics_all'] = 'Všetky neprečítané témy';
$txt['unread_replies'] = 'Aktualizované témy';

$txt['who_title'] = 'Kto je online';
$txt['who_and'] = ' a ';
$txt['who_viewing_topic'] = ' prehliada túto tému.';
$txt['who_viewing_board'] = ' prehliada túto diskusiu.';
$txt['who_member'] = 'Užívateľ';

$txt['powered_by_php'] = 'Poháňané PHP';
$txt['powered_by_mysql'] = 'Poháňané MySQL';
$txt['valid_html'] = 'Validné HTML 4.01!';
$txt['valid_xhtml'] = 'Validné XHTML 1.0!';
$txt['valid_css'] = 'Validné CSS!';

$txt['guest'] = 'Hosť';
$txt['guests'] = 'Hostí';
$txt['user'] = 'Užívateľ';
$txt['users'] = 'Užívateľov';
$txt['hidden'] = 'Skrytých';
$txt['buddy'] = 'Kámoš';
$txt['buddies'] = 'Kámošov';
$txt['most_online_ever'] = 'Najviac online';
$txt['most_online_today'] = 'Najviac online (dnes)';

$txt['merge_select_target_board'] = 'Vybrať cieľovú diskusiu pre spojenú tému';
$txt['merge_select_poll'] = 'Vybrať, ktorú anketu bude mať spojenú tému';
$txt['merge_topic_list'] = 'Vybrať témy ku spojeniu';
$txt['merge_select_subject'] = 'Vybrať predmet spojenej témy';
$txt['merge_custom_subject'] = 'Iný predmet';
$txt['merge_enforce_subject'] = 'Zmeniť predmet všetkých správ';
$txt['merge_include_notifications'] = 'Vrátane upozornenia?';
$txt['merge_check'] = 'Spojiť?';
$txt['merge_no_poll'] = 'Žiadna anketa';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Aktuálna ikona';

$txt['smileys_current'] = 'Aktuálna sada emotikonov';
$txt['smileys_none'] = 'Žiadne emotikony';
$txt['smileys_forum_board_default'] = 'Východzie nastavenie fóra';

$txt['search_results'] = 'Výsledky vyhľadávania';
$txt['search_no_results'] = 'Žiadne výsledky nenájdené';

$txt['totalTimeLogged1'] = 'Celkový čas prihlásenia: ';
$txt['totalTimeLogged2'] = ' dní, ';
$txt['totalTimeLogged3'] = ' hodín a ';
$txt['totalTimeLogged4'] = ' minút.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Je';
$txt['approve_thereare'] = 'Sú';
$txt['approve_member'] = 'jeden užívateľ';
$txt['approve_members'] = 'užívatelia';
$txt['approve_members_waiting'] = 'očakávajúci schválenie.';

$txt['notifyboard_turnon'] = 'Chcete upozornenie, keď niekto pošle novú tému do tejto diskusie?';
$txt['notifyboard_turnoff'] = 'Ste si istý, že už nechcete dostávať upozornenie pre túto diskusiu?';

$txt['activate_code'] = 'Váš aktivačný kód je';

$txt['find_members'] = 'Hľadať užívateľa';
$txt['find_username'] = 'Meno, užívateľské meno alebo emailová adresa';
$txt['find_buddies'] = 'Ukázať iba kámošov?';
$txt['find_wildcards'] = 'Povolené žolíky: *, ?';
$txt['find_no_results'] = 'Žiadné výsledky';
$txt['find_results'] = 'Výsledky';
$txt['find_close'] = 'Zatvoriť';

$txt['unread_since_visit'] = 'Zobraziť neprečítané príspevky od poslednej návštevy.';
$txt['show_unread_replies'] = 'Zobraziť nové odpovede na vaše príspevky.';

$txt['change_color'] = 'Zmeniť farbu';

$txt['quickmod_delete_selected'] = 'Zmazať vybrané';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Dostali ste jednu alebo viac súkromých správ.\\nChcete si ich teraz pozrieť (v novom okne)?';

$txt['previous_next_back'] = '&laquo; predchádzajúce';
$txt['previous_next_forward'] = 'ďalšie &raquo;';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'Táto téma bola premiestnená do ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Zbalte alebo rozbalte hlavičku.';

$txt['mark_unread'] = 'Všetko neprečítané';

$txt['ssi_not_direct'] = 'Prosím nepristupujte k SSI.php priamo pomocou URL adresy; Môžete buď použiť cestu (%s) alebo pridať ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php nebolo schopné natiahnúť sedenie! To môže znamenať problém s odhlásením a ďalšími funkciami - uistite sa, že SSI.php je vložené pred čímkoľvek iným vo vaších skriptoch!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Pozrieť príspevok';
$txt['preview_fetch'] = 'Zobrazujem náhľad...';
$txt['preview_new'] = 'Nový príspevok';
$txt['error_while_submitting'] = 'Nasledujúca chyba nastala pri posielaní tejto správy:';

$txt['split_selected_posts'] = 'Vybrané príspevky';
$txt['split_selected_posts_desc'] = 'Príspevky nížšie utvoria novú tému po rozdelení.';
$txt['split_reset_selection'] = 'vymazať výber';

$txt['modify_cancel'] = 'Storno';
$txt['mark_read_short'] = 'Označiť ako prečítané';

$txt['pm_short'] = 'Moje správy';
$txt['hello_member_ndt'] = 'Nazdar';

$txt['ajax_in_progress'] = 'Nahrávam...';

?>