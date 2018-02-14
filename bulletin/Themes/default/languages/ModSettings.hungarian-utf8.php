<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Ezen az oldalon változtathatod meg a beállításokat, módosításokat, és alapvető opciókat a fórumodon. Kérlek tekintsd meg a <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">sablon beállításokat</a> további opciókért. Kattints a súgó ikonokra a beállításokról való további információért.';

$txt['mods_cat_features'] = 'Alapvető beállítások';
$txt['pollMode'] = 'Szavazás mód';
$txt['smf34'] = 'Szavazások kikapcsolása';
$txt['smf32'] = 'Szavazások bekapcsolása';
$txt['smf33'] = 'Létező szavazások megjelenítése témákként';
$txt['allow_guestAccess'] = 'A vendégek böngészhetik a fórumot';
$txt['userLanguage'] = 'A felhasználó választhat nyelvet';
$txt['allow_editDisplayName'] = 'A tagok módosíthatják a megjelenített nevüket?';
$txt['allow_hideOnline'] = 'Nem adminisztrátorok elrejthetik online állapotukat?';
$txt['allow_hideEmail'] = 'A tagok elrejthetik e-mail címüket mások elől, az adminokat kivéve?';
$txt['guest_hideContacts'] = 'Ne fedje fel a tagok kapcsolati adatait a vendégeknek';
$txt['titlesEnable'] = 'Titulusok engedélyezése';
$txt['enable_buddylist'] = 'Barátlista bekapcsolása';
$txt['default_personalText'] = 'Alapértelmezett titulus';
$txt['max_signatureLength'] = 'Maximálisan engedélyezett karakterek az aláírásban<div class="smalltext">(0 ha nincs max.)</div>';
$txt['number_format'] = 'Alapértelmezett számformátum';
$txt['time_format'] = 'Alapértelmezett időformátum';
$txt['time_offset'] = 'Időeltolódás<div class="smalltext">(hozzáadódik a tag által beállítotthoz.)</div>';
$txt['failed_login_threshold'] = 'Sikertelen bejelentkezések küszöbértéke';
$txt['lastActive'] = 'Felhasználó online idő küszöbértéke';
$txt['trackStats'] = 'Napi statisztikák követése';
$txt['hitStats'] = 'Napi oldalletöltések követése (a statisztikát be kell kapcsolni)';
$txt['enableCompressedOutput'] = 'Tömörített kimenet engedélyezése';
$txt['databaseSession_enable'] = 'Adatbázisban tárolt munkamenetek használata';
$txt['databaseSession_loose'] = 'A böngészők visszamehetnek a gyorsítótárazott oldalakra';
$txt['databaseSession_lifetime'] = 'Másodpercek mielőtt egy nem használt munkamenet lejár';
$txt['enableErrorLogging'] = 'Hibanaplózás bekapcsolása';
$txt['cookieTime'] = 'Alapértelmezett bejelentkezési süti hossz (percekben)';
$txt['localCookies'] = 'Sütik helyi tárolásának bekapcsolása<div class="smalltext">(az SSI nem fog vele megfelelően működni.)</div>';
$txt['globalCookies'] = 'Aldomain független sütik használata<div class="smalltext">(előbb kapcsold ki a helyi sütiket!)</div>';
$txt['securityDisable'] = 'Adminisztrátori biztonság kikapcsolása';
$txt['send_validation_onChange'] = 'Újbóli aktiválás szükséges e-mail változtatás után';
$txt['approveAccountDeletion'] = 'Adminisztrátori megerősítés szükséges azonosító törléséhez';
$txt['autoOptDatabase'] = 'Hány naponta optimalizálja a táblákat?<div class="smalltext">(0 a kikapcsoláshoz.)</div>';
$txt['autoOptMaxOnline'] = 'Maximum online tagok optimalizáláskor<div class="smalltext">(0 ha nincs max.)</div>';
$txt['autoFixDatabase'] = 'Törött táblák automatikus javítása';
$txt['allow_disableAnnounce'] = 'A felhasználók kikapcsolhatják a közleményeket';
$txt['disallow_sendBody'] = 'A szöveg nem küldhető el értesítésekben?';
$txt['modlog_enabled'] = 'Moderátori műveletek naplózása';
$txt['queryless_urls'] = 'Keresőbarát címek<div class="smalltext"><b>csak Apache!</b></div>';
$txt['max_image_width'] = 'Elküldött képek max szélessége (0 = kikapcsolás)';
$txt['max_image_height'] = 'Elküldött képek max magassága (0 = kikapcsolás)';
$txt['mail_type'] = 'Levélküldés módja';
$txt['mail_type_default'] = '(PHP alapértelmezett)';
$txt['smtp_host'] = 'SMTP szerver';
$txt['smtp_port'] = 'SMTP port';
$txt['smtp_username'] = 'SMTP felhasználónév';
$txt['smtp_password'] = 'SMTP jelszó';
$txt['enableReportPM'] = 'Privát üzenetek jelentésének engedélyezése';
$txt['max_pm_recipients'] = 'Címzettek maximális száma privát üzenetben.<div class="smalltext">(0 ha nincs korlátozás, az adminok kivételek)</div>';
$txt['pm_posts_verification'] = 'Hozzászólások száma, mely alatt a tagnak be kell írnia egy kódot privát üzenetek küldésekor.<div class="smalltext">(0 ha nincs korlátozás, az adminok kivételek)</div>';
$txt['pm_posts_per_hour'] = 'Óránként küldhető privát üzenetek száma.<div class="smalltext">(0 ha nincs korlátozás, a moderátorok kivételek)</div>';

$txt['mods_cat_layout'] = 'Kialakítás és opciók';
$txt['compactTopicPagesEnable'] = 'Megjelenített oldal linkek számának korlátozása';
$txt['smf235'] = 'Megjelenítendő folyamatos oldalak';
$txt['smf236'] = 'a következőhöz';
$txt['todayMod'] = '&quot;Ma&quot; funkció bekapcsolása';
$txt['smf290'] = 'Kikapcsolva';
$txt['smf291'] = 'Csak ma';
$txt['smf292'] = 'Ma és tegnap';
$txt['topbottomEnable'] = 'Fel/Le gombok bekapcsolása';
$txt['onlineEnable'] = 'Elérhető/nem elérhető megjelenítése üzenetekben és PÜkben';
$txt['enableVBStyleLogin'] = 'Gyors bejelentkezés megjelenítése minden oldalon';
$txt['defaultMaxMembers'] = 'Tagok száma oldalanként a taglistában';
$txt['timeLoadPageEnable'] = 'Az oldal létrehozásához szükséges idő megjelenítése';
$txt['disableHostnameLookup'] = 'Kiszolgálónév keresés kikapcsolása?';
$txt['who_enabled'] = 'Ki online lista bekapcsolása';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Karma mód';
$txt['smf64'] = 'Karma kikapcsolása|Összesített karma bekapcsolása|Pozitív/negatív karma bekapcsolása';
$txt['karmaMinPosts'] = 'Minimális üzenetek száma a karma módosításához';
$txt['karmaWaitTime'] = 'Várakozási idő órában';
$txt['karmaTimeRestrictAdmins'] = 'Adminisztrátorok korlátozása a várakozási időhöz';
$txt['karmaLabel'] = 'Karma címke';
$txt['karmaApplaudLabel'] = 'Karma taps címke';
$txt['karmaSmiteLabel'] = 'Karma lehurrogás címke';

$txt['caching_information'] = '<div align="center"><b><u>Fontos! Olvasd el ezt először, mielőtt bekapcsolnád ezeket az opciókat.</b></u></div><br />
	Az SMF a gyorsítótárazást gyorsítókon keresztül végzi. A jelenleg támogatott gyorsítók:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (nem a Zend Optimizer)</li>
	</ul>
	A gyorsítótárazás csak akkor fog működni a szervereden, ha a PHP a fenti optimalizálók egyikével lett beforgatva, vagy a memcache elérhető.
	<br /><br />
	Az SMF a gyorsítótárazást több szinten végzi. Magasabb szinten több idő fog eltelni, hogy a CPU letöltse a 
	gyorsítótárazott információt. Ha a gyorsítótárazás elérhető a szervereden, javasolt, hogy először az 1. szintet próbáld.
	<br /><br />
	Vedd figyelembe, ha a memcached módot használod, alább meg kell határoznod a szerver adatait. Ezt egy vesszőkkel elválasztott listaként kell beírni,
	mint az alábbi példában:<br />
	&quot;szerver1,szerver2,szerver3:port,szerver4&quot;<br /><br />
	Vedd figyelembe, hogyha nincs meghatározva port, az SMF a 11211 portot fogja használni. Az SMF véletlenszerű terhelés elosztást próbál meg alkalmazni a szervereken keresztül.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">Az SMF nem érzékelt kompatibilis gyorsítót a szervereden.</b>';
$txt['detected_APC'] = '<b style="color: green">Az SMF érzékelte, hogy a szervereden telepítve van az APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">Az SMF érzékelte, hogy a szervereden telepítve van az eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">Az SMF érzékelte, hogy a szervereden telepítve van az MMCache.';
$txt['detected_Zend'] = '<b style="color: green">Az SMF érzékelte, hogy a szervereden telepítve van a Zend.';
$txt['detected_Memcached'] = '<b style="color: green">Az SMF érzékelte, hogy a szervereden telepítve van a Memcached.';

$txt['cache_enable'] = 'Gyorsítótárazási szint';
$txt['cache_off'] = 'Nincs gyorsítótárazás';
$txt['cache_level1'] = '1. szintű gyorsítótárazás';
$txt['cache_level2'] = '2. szintű gyorsítótárazás (nem ajánlott)';
$txt['cache_level3'] = '3. szintű gyorsítótárazás (nem ajánlott)';
$txt['cache_memcached'] = 'Memcache beállítások';

?>