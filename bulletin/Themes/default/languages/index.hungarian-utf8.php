<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'hu_HU.utf8';
$txt['lang_dictionary'] = 'hu';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('vasárnap', 'hétfő', 'kedd', 'szerda', 'csütörtök', 'péntek', 'szombat');
$txt['days_short'] = array('vas', 'hét', 'kedd', 'sze', 'csüt', 'pén', 'szo');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'január', 'február', 'március', 'április', 'május', 'június', 'július', 'augusztus', 'szeptember', 'október', 'november', 'december');
$txt['months_titles'] = array(1 => 'január', 'február', 'március', 'április', 'május', 'június', 'július', 'augusztus', 'szeptember', 'október', 'november', 'december');
$txt['months_short'] = array(1 => 'jan', 'feb', 'márc', 'ápr', 'máj', 'jún', 'júl', 'aug', 'szep', 'okt', 'nov', 'dec');

$txt['newmessages0'] = 'új';
$txt['newmessages1'] = 'új';
$txt['newmessages3'] = 'Új';
$txt['newmessages4'] = ',';

$txt[2] = 'Admin';

$txt[10] = 'Mentés';

$txt[17] = 'Módosítás';
$txt[18] = $context['forum_name'] . ' - Főoldal';
$txt[19] = 'Felhasználó';
$txt[20] = 'Fórum neve';
$txt[21] = 'üzenet';
$txt[22] = 'Utolsó üzenet:';

$txt[24] = '(Nincs tárgy)';
$txt[26] = 'Hozzászólások';
$txt[27] = 'Profil megtekintése';
$txt[28] = 'Vendég';
$txt[29] = 'Szerző';
$txt[30] = 'Dátum';
$txt[31] = 'Törlés';
$txt[33] = 'Új téma indítása';

$txt[34] = 'Bejelentkezés';
// Use numeric entities in the below string.
$txt[35] = 'Felhaszn&#225;l&#243;n&#233;v';
$txt[36] = 'Jelszó';

$txt[40] = 'A felhasználónév nem létezik.';

$txt[62] = 'Fórum moderátor';
$txt[63] = 'Téma törlése';
$txt[64] = 'Témában';
$txt[66] = 'Üzenet módosítása';
$txt[68] = 'Név';
$txt[69] = 'E-mail';
$txt[70] = 'Téma';
$txt[72] = 'Üzenet';

$txt[79] = 'Profil';

$txt[81] = 'Válassz jelszót';
$txt[82] = 'Erősítsd meg a jelszót';
$txt[87] = 'Pozíció';

$txt[92] = 'Profil megtekintése:';
$txt[94] = 'Összes';
$txt[95] = 'Hozzászólás';
$txt[96] = 'Weboldal';
$txt[97] = 'Regisztráció';

$txt[101] = 'Üzenet főoldal';
$txt[102] = 'Hírek';
$txt[103] = 'Főoldal';

$txt[104] = 'Téma lezárása/megnyitása';
$txt[105] = 'Hozzászólás';
$txt[106] = 'Egy hiba történt!';
$txt[107] = '-';
$txt[108] = 'Kijelentkezés';
$txt[109] = 'Indította';
$txt[110] = 'Válaszok';
$txt[111] = 'Utolsó hozzászólás';
$txt[114] = 'Adminisztrátori bejelentkezés';
// Use numeric entities in the below string.
$txt[118] = 'T&#233;ma';
$txt[119] = 'Súgó';
$txt[121] = 'Üzenet eltávolítása';
$txt[125] = 'Értesítés';
$txt[126] = 'Kérsz e-mail értesítést, ha valaki válaszol erre a témára?';
// Use numeric entities in the below string.
$txt[130] = "&#220;dv&#246;zlettel,\n" . $context['forum_name'] . ' csapata.';
$txt[131] = 'Értesítés a válaszokról';
$txt[132] = 'Téma áthelyezése';
$txt[133] = 'Áthelyezés ide';
$txt[139] = 'Oldalak';
$txt[140] = 'Aktív felhasználók az elmúlt ' . $modSettings['lastActive'] . ' percben';
$txt[144] = 'Privát üzenetek';
$txt[145] = 'Válasz idézettel';
$txt[146] = 'Válasz';

$txt[151] = 'Nincsenek üzenetek...';
$txt[152] = 'jelenleg';
$txt[153] = 'üzeneted van';
$txt[154] = 'Üzenet törlése';

$txt[158] = 'Online felhasználók';
$txt[159] = 'Privát üzenet';
$txt[160] = 'Ugrás';
$txt[161] = 'ok';
$txt[162] = 'Biztos vagy benne, hogy törölni szeretnéd a témát?';
$txt[163] = 'Igen';
$txt[164] = 'Nem';

$txt[166] = 'Keresési eredmények';
$txt[167] = 'Végeredmény';
$txt[170] = 'Sajnálom, nincs találat';
$txt[176] = '-';

$txt[182] = 'Keresés';
$txt[190] = 'Összes';

$txt[193] = 'Vissza';
$txt[194] = 'Jelszó emlékeztető';
$txt[195] = 'A témát indította';
$txt[196] = 'Cím';
$txt[197] = 'Írta';
$txt[200] = 'Az összes regisztrált felhasználó kereshető listája.';
$txt[201] = 'Kérlek üdvözöljétek';
$txt[208] = 'Adminisztrációs központ';
$txt[211] = 'Utoljára szerkesztve';
$txt[212] = 'Ki szeretnéd kapcsolni az értesítést ebben a témában?';

$txt[214] = 'Legutóbbi hozzászólások';

$txt[227] = 'Lakóhely';
$txt[231] = 'Nem';
$txt[233] = 'Regisztrált';

$txt[234] = 'A fórum legutóbbi hozzászólásainak megtekintése.';
$txt[235] = 'a legutóbb frissített téma';

$txt[238] = 'Férfi';
$txt[239] = 'Nő';

$txt[240] = 'Érvénytelen karakter a felhasználónévben.';

$txt['welcome_guest'] = 'Üdvözlünk, <b>' . $txt[28] . '</b>. Kérlek <a href="' . $scripturl . '?action=login">jelentkezz be</a> vagy <a href="' . $scripturl . '?action=register">regisztrálj</a>.';
$txt['welcome_guest_activate'] = '<br />Nem érkezett meg az <a href="' . $scripturl . '?action=activate">aktivációs e-mail?</a>';
$txt['hello_member'] = 'Hello,';
// Use numeric entities in the below string.
$txt['hello_guest'] = '&#220;dv&#246;zl&#252;nk,';
$txt[247] = 'Hello,';
$txt[248] = 'Üdvözlünk,';
$txt[249] = 'Kérlek';
$txt[250] = 'Vissza';
$txt[251] = 'Kérlek válassz egy célt';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Írta';

$txt[287] = 'Mosolyog';
$txt[288] = 'Dühös';
$txt[289] = 'Vigyorog';
$txt[290] = 'Röhög';
$txt[291] = 'Szomorú';
$txt[292] = 'Kacsint';
$txt[293] = 'Vigyorog';
$txt[294] = 'Meglepődött';
$txt[295] = 'Menő';
$txt[296] = 'He';
$txt[450] = 'Hááát';
$txt[451] = 'Bibííí';
$txt[526] = 'Zavart';
$txt[527] = 'Nem szól szám';
$txt[528] = 'Határozatlan';
$txt[529] = 'Puszi';
$txt[530] = 'Sír';

$txt[298] = 'Moderátor';
$txt[299] = 'Moderátorok';

$txt[300] = 'Témák megjelölése olvasottként a fórumban';
$txt[301] = 'Megtekintések';
$txt[302] = 'Új';

$txt[303] = 'Összes tag megtekintése';
$txt[305] = 'Megtekint';
$txt[307] = 'E-mail';

$txt[308] = 'Tagok megtekintése';
$txt[309] = '/';
$txt[310] = 'tag';
$txt[311] = '-';
$txt[315] = 'Elfelejtetted a jelszavad?';

$txt[317] = 'Dátum';
// Use numeric entities in the below string.
$txt[318] = 'Felad&#243;';
$txt[319] = 'Tárgy';
$txt[322] = 'Új üzenetek keresése';
$txt[324] = 'Címzett';

$txt[330] = 'téma';
$txt[331] = 'Felhasználók';
$txt[332] = 'Felhasználók listája';
$txt[333] = 'Új hozzászólások';
$txt[334] = 'Nincsenek új hozzászólások';

$txt['sendtopic_send'] = 'Elküld';

$txt[371] = 'Időeltolódás';
$txt[377] = 'vagy';

$txt[398] = 'Sajnálom, nincs találat';

$txt[418] = 'Értesítés';

$txt[430] = 'Sajnálom %s, te ki lettél tiltva a fórumról!';

$txt[452] = 'ÖSSZES üzenet megjelölése olvasottként';

$txt[454] = 'Aktív téma (Több, mint ' . $modSettings['hotTopicPosts'] . ' válasz)';
$txt[455] = 'Nagyon aktív téma (Több, mint ' . $modSettings['hotTopicVeryPosts'] . ' válasz)';
$txt[456] = 'Lezárt téma';
$txt[457] = 'Normál téma';
$txt['participation_caption'] = 'Téma, amihez hozzászóltál';

$txt[462] = 'OK';

$txt[465] = 'Nyomtatás';
$txt[467] = 'Profil';
$txt[468] = 'Téma összegzés';
$txt[470] = 'N/A';
$txt[471] = 'üzenet';
$txt[473] = 'Ezt a nevet már egy másik tag használja.';

$txt[488] = 'Összes tag';
$txt[489] = 'Összes hozzászólás';
$txt[490] = 'Összes téma';

$txt[497] = 'Bejelentkezve marad';

$txt[507] = 'Előnézet';
$txt[508] = 'Jegyezzen meg';

$txt[511] = 'Naplózva';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'írta';

$txt[578] = 'óra';
$txt[579] = 'nap';

$txt[581] = ', a legújabb tagunk.';

$txt[582] = 'Keresés a következőre';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Üdv.+Ott+vagy?';
$txt[604] = 'YIM';

$txt[616] = 'Ne feledd, a fórum \'Karbantartás módban\' van.';

$txt[641] = 'Megtekintve';
$txt[642] = 'alkalommal';

$txt[645] = 'Fórum statisztikák';
$txt[656] = 'Legújabb tag';
$txt[658] = 'Összes kategória';
$txt[659] = 'Legutóbbi hozzászólás';

$txt[660] = 'Kaptál';
$txt[661] = 'Kattints';
$txt[662] = 'ide';
$txt[663] = 'a megtekintéshez.';

$txt[665] = 'Összes fórum';

$txt[668] = 'Oldal nyomtatása';

$txt[679] = 'Valós e-mail cím kell hogy legyen.';

$txt[683] = 'Kocka vagyok!!';
$txt[685] = $context['forum_name'] . ' - Információs központ';

$txt[707] = 'Téma elküldése';

$txt['sendtopic_title'] = '&quot;%s&quot; téma elküldése egy barátnak.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Kedves %s,';
$txt['sendtopic_this_topic'] = 'Szeretn&#233;m ha megn&#233;zn&#233;d a k&#246;vetkezőt: "%s" itt: ' . $context['forum_name'] . '.  A megtekint&#233;shez, k&#233;rlek kattints a linkre';
$txt['sendtopic_thanks'] = 'K&#246;sz&#246;n&#246;m';
$txt['sendtopic_sender_name'] = 'Neved';
$txt['sendtopic_sender_email'] = 'E-mail címed';
$txt['sendtopic_receiver_name'] = 'Címzett neve';
$txt['sendtopic_receiver_email'] = 'Címzett e-mail címe';
$txt['sendtopic_comment'] = 'Megjegyzés';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Egy megjegyz&#233;st is mell&#233;kelt a t&#233;m&#225;hoz kapcsol&#243;dva';

$txt[721] = 'E-mail cím elrejtése a többiek elől?';

$txt[737] = 'Összes kijelölése';

// Use numeric entities in the below string.
$txt[1001] = 'Adatb&#225;zis hiba';
$txt[1002] = 'Kérlek próbáld újra. Ha ismét ez a hibaképernyő jelenik meg, jelentsd a hibát egy adminisztrátornak.';
$txt[1003] = 'Fájl';
$txt[1004] = 'Sor';
// Use numeric entities in the below string.
$txt[1005] = 'Az SMF egy hib&#225;t tal&#225;lt az adatb&#225;zisban &#233;s automatikusan megpr&#243;b&#225;lta kijavítani. Ha tov&#225;bbra is probl&#233;m&#225;id vannak, vagy ilyen e-maileket kapsz, k&#233;rlek vedd fel a kapcsolatot a szolg&#225;ltat&#243;ddal.';
$txt['database_error_versions'] = '<b>Megjegyzés:</b> Úgy tűnik az adatbázisodnak szüksége <em>lehet</em> frissítésre. A fórumod fájljainak jelenlegi verziója ' . $forum_version . ', míg az adatbázis verziója ' . $modSettings['smfVersion'] . '. A fenti hiba talán eltűnik, ha lefuttatod a legutóbbi verzió upgrade.php fájlját.';
$txt['template_parse_error'] = 'Sablon elemzési hiba!';
$txt['template_parse_error_message'] = 'Úgy tűnik valami elromlott a fórum sablon rendszerében. Ez a hiba valószínűleg ideiglenes, kérlek látogass vissza később és próbáld újra. Ha továbbra is ezt az üzenetet látod, kérlek vedd fel a kapcsolatot az adminisztátorral.<br /><br />Megpróbálhatod <a href="javascript:location.reload();">frissíteni is az oldalt</a>.';
$txt['template_parse_error_details'] = 'Hiba történt a következő sablon vagy nyelvi fájl betöltésekor: <tt><b>%1$s</b></tt>. Kérlek ellenőrizd a szintaxist és próbáld újra - ne feledd, az egyszeri idézőjeleket (<tt>\'</tt>) gyakran egy per jellel (<tt>\\</tt>) kell írni. Még specifikusabb hiba információkért, próbáld meg <a href="' . $boardurl . '%1$s">a fájlt közvetlenül elérni</a>.<br /><br />Megpróbálhatod <a href="javascript:location.reload();">frissíteni ezt az oldalt</a> vagy <a href="' . $scripturl . '?theme=1">használd az alapértelmezett sablont</a>.';

$txt['smf10'] = '<b>Ma</b> - ';
$txt['smf10b'] = '<b>Tegnap</b> - ';
$txt['smf20'] = 'Új szavazás';
$txt['smf21'] = 'Kérdés';
$txt['smf23'] = 'Szavazat elküldése';
$txt['smf24'] = 'Összes szavazó';
$txt['smf25'] = 'gyorsbillenytűk: alt+s: elküldés/hozzászólás vagy alt+p: előnézet';
$txt['smf29'] = 'Eredmények megtekintése';
$txt['smf30'] = 'Szavazás lezárása';
$txt['smf30b'] = 'Szavazás megnyitása';
$txt['smf39'] = 'Szavazás szerkesztése';
$txt['smf43'] = 'Szavazás';
$txt['smf47'] = '1 nap';
$txt['smf48'] = '1 hét';
$txt['smf49'] = '1 hónap';
$txt['smf50'] = 'Mindig';
$txt['smf52'] = 'Jelentkezz be a felhasználóneveddel, jelszavaddal és add meg a munkamenet hosszát';
$txt['smf53'] = '1 óra';
$txt['smf56'] = 'ÁTHELYEZVE';
$txt['smf57'] = 'Kérlek írj be egy rövid tájékoztatást,<br />hogy miért lett áthelyezve a téma.';
$txt['smf60'] = 'Sajnálom, de nincs elég hozzászólásod a karma módosításához - minimum kell ';
$txt['smf62'] = 'Sajnálom, nem ismételhetsz karma műveletet anélkül hogy várakoznál ';
$txt['smf82'] = 'Fórum';
$txt['smf88'] = '';
$txt['smf96'] = 'Kiemelt téma';

$txt['smf138'] = 'Törlés';

$txt['smf199'] = 'Privát üzeneteid';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[További adatok]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'K&#243;d';
$txt['smf239'] = 'Id&#233;zetet &#237;rta';
$txt['smf240'] = 'Id&#233;zet';

$txt['smf251'] = 'Téma szétválasztása';
$txt['smf252'] = 'Témák összevonása';
$txt['smf254'] = 'Az új téma tárgya';
$txt['smf255'] = 'Csak ezt a hozzászólást válassza szét.';
$txt['smf256'] = 'Válassza szét a témát és mellékelje ezt a hozzászólást.';
$txt['smf257'] = 'Válaszd ki a szétválasztandó hozzászólásokat.';
$txt['smf258'] = 'Új téma';
$txt['smf259'] = 'A téma sikeresen szétválasztva két témára.';
$txt['smf260'] = 'Eredeti téma';
$txt['smf261'] = 'Kérlek válaszd ki mely hozzászólásokat kívánod szétválasztani.';
$txt['smf264'] = 'Témák sikeresen összevonva.';
$txt['smf265'] = 'Újonnan összevont téma';
$txt['smf266'] = 'Összevonandó téma';
$txt['smf267'] = 'Cél fórum';
$txt['smf269'] = 'Cél téma';
$txt['smf274'] = 'Biztos össze kívánod vonni';
$txt['smf275'] = 'a következővel';
$txt['smf276'] = 'Ez a funkció összevonja két téma üzeneteit egy témába. Az üzenetek az elküldés idejének megfelelően lesznek rendezve. Ennek következtében a legkorábban írt hozzászólás lesz az összevont téma első hozzászólása.';

$txt['smf277'] = 'Téma kiemelése';
$txt['smf278'] = 'Téma kiemelésének megszüntetése';
$txt['smf279'] = 'Téma lezárása';
$txt['smf280'] = 'Téma megnyitása';

$txt['smf298'] = 'Összetett kereső';

$txt['smf299'] = 'BIZTONSÁGI RÉS:';
$txt['smf300'] = 'Nem távolítottad el a fájlt: ';

$txt['smf301'] = 'Az oldal ';
$txt['smf302'] = ' másodperc alatt készült el ';
$txt['smf302b'] = ' lekéréssel.';

$txt['smf315'] = 'Használd ezt a funkciót, hogy értesítsd a moderátorokat és adminisztrátorokat egy sértegető vagy rossz helyen elküldött hozzászólásról.<br /><i>Kérlek vedd figyelembe, hogy az e-mail címed megjelenik ezáltal a moderátorok számára.</i>';

$txt['online2'] = 'Elérhető';
$txt['online3'] = 'Nem elérhető';
$txt['online4'] = 'Privát üzenet (Elérhető)';
$txt['online5'] = 'Privát üzenet (Nem elérhető)';
$txt['online8'] = 'Állapot';

$txt['topbottom4'] = 'Fel';
$txt['topbottom5'] = 'Le';

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


$txt['calendar3'] = 'Születésnapok:';
$txt['calendar4'] = 'Események:';
$txt['calendar3b'] = 'Elkövetkezendő születésnapok:';
$txt['calendar4b'] = 'Elkövetkezendő események:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Hónap:';
$txt['calendar10'] = 'Év:';
$txt['calendar11'] = 'Nap:';
$txt['calendar12'] = 'Esemény neve:';
$txt['calendar13'] = 'Helye:';
$txt['calendar20'] = 'Esemény szerkesztése';
$txt['calendar21'] = 'Törlöd ezt az eseményt?';
$txt['calendar22'] = 'Esemény törlése';
$txt['calendar23'] = 'Esemény létrehozása';
$txt['calendar24'] = 'Naptár';
$txt['calendar37'] = 'Link a naptárba';
$txt['calendar43'] = 'Esemény linkelése';
$txt['calendar47'] = 'Elkövetkezendő naptár';
$txt['calendar47b'] = 'Mai naptár';
$txt['calendar51'] = 'Hét';
$txt['calendar54'] = 'Napok száma:';
$txt['calendar_how_edit'] = 'hogyan szerkeszted ezeket az eseményeket?';
$txt['calendar_link_event'] = 'Esemény linkelése egy hozzászóláshoz:';
$txt['calendar_confirm_delete'] = 'Biztos vagy benne, hogy törölni akarod az eseményt?';
$txt['calendar_linked_events'] = 'Linkelt események';

$txt['moveTopic1'] = 'Átirányításos téma létrehozása';
$txt['moveTopic2'] = 'A téma tárgyának megváltoztatása';
$txt['moveTopic3'] = 'Új tárgy';
$txt['moveTopic4'] = 'Összes üzenet tárgyának megváltoztatása';

$txt['theme_template_error'] = 'Nem sikerült betölteni a sablont: \'%s\'.';
$txt['theme_language_error'] = 'Nem sikerült betölteni a nyelvi fájlt: \'%s\'.';

$txt['parent_boards'] = 'Alfórumok';

$txt['smtp_no_connect'] = 'Nem sikerült kapcsolódni az SMTP kiszolgálóhoz';
$txt['smtp_port_ssl'] = 'Az SMTP port beállítás hibás; SSL szerver esetén 465.';
$txt['smtp_bad_response'] = 'Nem sikerült lekérdezni a levelező szerver reagáló kódjait';
$txt['smtp_error'] = 'Hiba a levél küldésekor. Hiba: ';
$txt['mail_send_unable'] = 'A levél elküldése sikertelen a következő címre: \'%s\'';

$txt['mlist_search'] = 'Tagok keresése';
$txt['mlist_search2'] = 'Újbóli keresés';
$txt['mlist_search_email'] = 'Keresés e-mail cím szerint';
$txt['mlist_search_messenger'] = 'Keresés messenger név szerint';
$txt['mlist_search_group'] = 'Keresés pozíció szerint';
$txt['mlist_search_name'] = 'Keresés név szerint';
$txt['mlist_search_website'] = 'Keresés weboldal szerint';
$txt['mlist_search_results'] = 'Keresési eredmények a következőre:';

$txt['attach_downloaded'] = 'letöltve';
$txt['attach_viewed'] = 'megtekintve';
$txt['attach_times'] = 'alkalommal';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Beállítások';
$txt['never'] = 'Soha';
$txt['more'] = 'további';

$txt['hostname'] = 'Kiszolgálónév';
$txt['you_are_post_banned'] = 'Sajnálom %s, nem küldhetsz üzeneteket és privát üzeneteket ezen a fórumon.';
$txt['ban_reason'] = 'Indok';

$txt['tables_optimized'] = 'Adatbázis táblák optimalizálva';

$txt['add_poll'] = 'Szavazás hozzáadása';
$txt['poll_options6'] = 'Összesen %s opciót állíthatsz be.';
$txt['poll_remove'] = 'Szavazás eltávolítása';
$txt['poll_remove_warn'] = 'Biztos el akarod távolítani a szavazást ebből a témából?';
$txt['poll_results_expire'] = 'Az eredmények a szavazás lezárásakor jelennek meg';
$txt['poll_expires_on'] = 'Szavazás lezárul';
$txt['poll_expired_on'] = 'Szavazás lezárva';
$txt['poll_change_vote'] = 'Szavazás eltávolítása';
$txt['poll_return_vote'] = 'Szavazási opciók';

$txt['quick_mod_remove'] = 'Kiválasztott törlése';
$txt['quick_mod_lock'] = 'Kiválasztott lezárása';
$txt['quick_mod_sticky'] = 'Kiválasztott kiemelése';
$txt['quick_mod_move'] = 'Kiválasztott áthelyezése ide';
$txt['quick_mod_merge'] = 'Kiválasztott összevonása';
$txt['quick_mod_markread'] = 'Kiválasztott megjelölése olvasottként';
$txt['quick_mod_go'] = 'Ok!';
$txt['quickmod_confirm'] = 'Biztos ezt akarod tenni?';

$txt['spell_check'] = 'Helyesírás ellenőrzése';

$txt['quick_reply_1'] = 'Gyors válasz';
$txt['quick_reply_2'] = 'A <i>gyors válaszban</i> használhatsz formázó kódokat és grimaszokat mint egy normális hozzászólásban, csak sokkal kényelmetlenebbül.';
$txt['quick_reply_warning'] = 'Figyelmeztetés: ez a téma jelenleg le van zárva!<br />Csak adminok és moderátorok válaszolhatnak.';

$txt['notification_enable_board'] = 'Biztos vagy benne, hogy be kívánod kapcsolni az új témákról való értesítést ebben a fórumban?';
$txt['notification_disable_board'] = 'Biztos vagy benne, hogy ki kívánod kapcsolni az új témákról való értesítést ebben a fórumban?';
$txt['notification_enable_topic'] = 'Biztos vagy benne, hogy be kívánod kapcsolni az új válaszokról való értesítést ebben a témában?';
$txt['notification_disable_topic'] = 'Biztos vagy benne, hogy ki kívánod kapcsolni az új válaszokról való értesítést ebben a témában?';

$txt['rtm1'] = 'Jelentés egy moderátornak';

$txt['unread_topics_visit'] = 'Legutóbbi olvasatlan témák';
$txt['unread_topics_visit_none'] = 'Nincs olvasatlan téma a legutóbbi látogatásod óta. <a href="' . $scripturl . '?action=unread;all">Kattints ide, hogy megtekintsd az összes nem olvasott témát</a>.';
$txt['unread_topics_all'] = 'Összes olvasatlan téma';
$txt['unread_replies'] = 'Frissített témák';

$txt['who_title'] = 'Ki online';
$txt['who_and'] = ' és ';
$txt['who_viewing_topic'] = ' van a témában';
$txt['who_viewing_board'] = ' van a fórumban.';
$txt['who_member'] = 'tag';

$txt['powered_by_php'] = 'A PHP programnyelven íródott';
$txt['powered_by_mysql'] = 'A MySQL adatbázis használatával';
$txt['valid_html'] = 'Szabványos HTML 4.01!';
$txt['valid_xhtml'] = 'Szabványos XHTML 1.0!';
$txt['valid_css'] = 'Szabványos CSS!';

$txt['guest'] = 'vendég';
$txt['guests'] = 'vendég';
$txt['user'] = 'tag';
$txt['users'] = 'tag';
$txt['hidden'] = 'rejtett';
$txt['buddy'] = 'Barát';
$txt['buddies'] = 'Barátok';
$txt['most_online_ever'] = 'Összesített legaktívabb';
$txt['most_online_today'] = 'Mai legaktívabb';

$txt['merge_select_target_board'] = 'Válaszd ki az összevont téma cél fórumát';
$txt['merge_select_poll'] = 'Válaszd ki melyik szavazás szerepeljen az összevont témában';
$txt['merge_topic_list'] = 'Válaszd ki az összevonandó témákat';
$txt['merge_select_subject'] = 'Válaszd ki az összevont téma tárgyát';
$txt['merge_custom_subject'] = 'Egyedi tárgy';
$txt['merge_enforce_subject'] = 'A tárgy megváltoztatása az összes üzenetben';
$txt['merge_include_notifications'] = 'Értesítések mellékelése?';
$txt['merge_check'] = 'Összevonás?';
$txt['merge_no_poll'] = 'Nincs szavazás';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Jelenlegi ikon';

$txt['smileys_current'] = 'Jelenlegi grimasz csomag';
$txt['smileys_none'] = 'Nincsenek grimaszok';
$txt['smileys_forum_board_default'] = 'Fórum alapértelmezett';

$txt['search_results'] = 'Keresési eredmények';
$txt['search_no_results'] = 'Nincs találat';

$txt['totalTimeLogged1'] = 'Fórumon eltöltött összes idő: ';
$txt['totalTimeLogged2'] = ' nap, ';
$txt['totalTimeLogged3'] = ' óra és ';
$txt['totalTimeLogged4'] = ' perc.';
$txt['totalTimeLogged5'] = 'n ';
$txt['totalTimeLogged6'] = 'ó ';
$txt['totalTimeLogged7'] = 'p';

$txt['approve_thereis'] = 'Összesen';
$txt['approve_thereare'] = 'Összesen';
$txt['approve_member'] = 'egy tag';
$txt['approve_members'] = 'tag';
$txt['approve_members_waiting'] = 'vár megerősítésre.';

$txt['notifyboard_turnon'] = 'Akarsz értesítő e-mailt kapni, ha valaki új témát nyit ebben a fórumban?';
$txt['notifyboard_turnoff'] = 'Biztos vagy benne, hogy nem akarsz további értesítést kapni az új témákról ebből a fórumból?';

$txt['activate_code'] = 'Az aktivációs kódod a következő';

$txt['find_members'] = 'Tagok keresése';
$txt['find_username'] = 'Név, felhasználónév vagy e-mail cím';
$txt['find_buddies'] = 'Csak a barátokat mutassa?';
$txt['find_wildcards'] = 'Engedélyezett helyettesítőkarakterek: *, ?';
$txt['find_no_results'] = 'Nincs találat';
$txt['find_results'] = 'Eredmények';
$txt['find_close'] = 'Bezárás';

$txt['unread_since_visit'] = 'Olvasatlan hozzászólások megtekintése a legutóbbi látogatásom óta.';
$txt['show_unread_replies'] = 'Hozzászólásaimra érkezett új válaszok megtekintése.';

$txt['change_color'] = 'Szín megváltoztatása';

$txt['quickmod_delete_selected'] = 'Kijelölt törlése';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Egy vagy több új privát üzenetet kaptál.\\nMegtekinted őket most (új ablakban)?';

$txt['previous_next_back'] = '&laquo; előző';
$txt['previous_next_forward'] = 'következő &raquo;';

$txt['movetopic_auto_board'] = '[FÓRUM]';
$txt['movetopic_auto_topic'] = '[TÉMA LINK]';
$txt['movetopic_default'] = 'A téma át lett helyezve a következőbe: ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Fejléc összezárása vagy kibontása.';

$txt['mark_unread'] = 'Megjelölés olvasatlanként';

$txt['ssi_not_direct'] = 'Kérlek ne nyisd meg az SSI.php fájlt közvetlenül; használhatod az útvonalat (%s) vagy az ?ssi_function=valami módot.';
$txt['ssi_session_broken'] = 'Az SSI.php nem tudta betölteni a munkamenetet! Ez hibákat okozhat a kijelentkezésnél és más funkcióknál - kérlek bizonyosodj meg róla, hogy az SSI.php a scriptjeidben *legelől* szerepel!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Hozzászólás előnézete';
$txt['preview_fetch'] = 'Előnézet betöltése...';
$txt['preview_new'] = 'Új üzenet';
$txt['error_while_submitting'] = 'A következő hiba vagy hibák történt(ek) az üzenet elküldésekor:';

$txt['split_selected_posts'] = 'Kiválasztott hozzászólások';
$txt['split_selected_posts_desc'] = 'Az alábbi hozzászólások szétválasztás után egy új témát fognak alkotni.';
$txt['split_reset_selection'] = 'kiválasztás visszavonása';

$txt['modify_cancel'] = 'Mégse';
$txt['mark_read_short'] = 'Megjelölés olvasottként';

$txt['pm_short'] = 'Privát üzenetek';
$txt['hello_member_ndt'] = 'Üdvözlünk';

$txt['ajax_in_progress'] = 'Töltés...';

?>