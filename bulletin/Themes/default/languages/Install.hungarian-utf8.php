<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'SMF Telepítő';
$txt['installer_language'] = 'Nyelv';
$txt['installer_language_set'] = 'Mehet';
$txt['congratulations'] = 'Gratulálunk, a telepítési folyamat véget ért!';
$txt['congratulations_help'] = 'Ha támogatásra van szükséged, vagy az SMF nem működik megfelelően, kérlek emlékezz hogy <a href="http://www.simplemachines.hu/kozosseg/index.php" target="_blank">a segítség mindig adott</a>, ha szükséged van rá.';
$txt['still_writable'] = 'A telepítési könyvtárad még mindig írható. Biztonsági okokból célszerű a chmod értékét megváltoztatni, hogy ne legyen írható.';
$txt['delete_installer'] = 'Kattints ide az install.php fájl törléséhez.';
$txt['delete_installer_maybe'] = '<i>(nem működik minden szerveren.)</i>';
$txt['go_to_your_forum'] = 'Mostmár megtekintheted <a href="%s">újonnan telepített fórumodat</a> és megkezdheted használatát. Először bizonyosodj meg róla, hogy be vagy jelentkezve, utána lesz hozzáférésed az adminisztrációs központhoz.';
$txt['good_luck'] = 'Sok szerencsét!<br />Simple Machines Magyarország';

$txt['user_refresh_install'] = 'Fórum frissítve';
$txt['user_refresh_install_desc'] = 'Telepítés közben a telepítő (a megadott adatokkal) talált egy vagy több táblát, melyet ez a telepítő már létrehozott.<br />A telepítésből hiányzó táblák újra létre lesznek hozva az alapértelmezett adatokkal, de a már létező táblákból nem lesz törölve adat.';

$txt['default_topic_subject'] = 'Üdvözöl az SMF!';
$txt['default_topic_message'] = 'Üdvözöl a Simple Machines Forum!<br /><br />Reméljük élvezni fogod a fórum használatát.&nbsp; Ha bármilyen problémád van, nyugodtan [url=http://www.simplemachines.hu/kozosseg/index.php]kérj tőlünk segítséget[/url].<br /><br />Köszönjük!<br />Simple Machines Magyarország';
$txt['default_board_name'] = 'Általános társalgó';
$txt['default_board_description'] = 'Nyugodtan társaloghatsz bármiről ebben a fórumban.';
$txt['default_category_name'] = 'Általános kategória';
$txt['default_time_format'] = '%Y. %B %d. - %H:%M:%S';
$txt['default_news'] = 'SMF - Frissen telepítve!';
$txt['default_karmaLabel'] = 'Karma:';
$txt['default_karmaSmiteLabel'] = '[lehurrog]';
$txt['default_karmaApplaudLabel'] = '[megtapsol]';
$txt['default_reserved_names'] = 'Admin\\nWebmester\\nVendég\\nroot';
$txt['default_smileyset_name'] = 'Alapértelmezett';
$txt['default_classic_smileyset_name'] = 'Klasszikus';
$txt['default_theme_name'] = 'SMF alapértelmezett sablon - Fő';
$txt['default_classic_theme_name'] = 'Klasszikus YaBB SE sablon';
$txt['default_babylon_theme_name'] = 'Babylon sablon';

$txt['default_administrator_group'] = 'Adminisztrátor';
$txt['default_global_moderator_group'] = 'Globális moderátor';
$txt['default_moderator_group'] = 'Moderátor';
$txt['default_newbie_group'] = 'Újonc';
$txt['default_junior_group'] = 'Kölyök tag';
$txt['default_full_group'] = 'Teljes tag';
$txt['default_senior_group'] = 'Törzstag';
$txt['default_hero_group'] = 'Hős tag';

$txt['default_smiley_smiley'] = 'Mosolyog';
$txt['default_wink_smiley'] = 'Kacsint';
$txt['default_cheesy_smiley'] = 'Nevet';
$txt['default_grin_smiley'] = 'Vigyorog';
$txt['default_angry_smiley'] = 'Dühös';
$txt['default_sad_smiley'] = 'Szomorú';
$txt['default_shocked_smiley'] = 'Meglepődött';
$txt['default_cool_smiley'] = 'Menő';
$txt['default_huh_smiley'] = 'He?';
$txt['default_roll_eyes_smiley'] = 'Hááát';
$txt['default_tongue_smiley'] = 'Bibíí';
$txt['default_embarrassed_smiley'] = 'Zavarodott';
$txt['default_lips_sealed_smiley'] = 'Nem szól szám';
$txt['default_undecided_smiley'] = 'Határozatlan';
$txt['default_kiss_smiley'] = 'Puszi';
$txt['default_cry_smiley'] = 'Sír';
$txt['default_evil_smiley'] = 'Ördögi';
$txt['default_azn_smiley'] = 'Szemöldök felhúzós';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'Kattints ide,';
$txt['error_message_try_again'] = 'hogy újból megpróbáld ezt a lépést.';
$txt['error_message_bad_try_again'] = 'ha mindenképp telepíteni akarod, de ez <i>erősen</i> ellenjavalt.';

$txt['install_settings'] = 'Alapvető beállítások';
$txt['install_settings_info'] = 'Csak egy pár dolog a telepítéshez ;).';
$txt['install_settings_name'] = 'Fórum neve';
$txt['install_settings_name_info'] = 'Ez a fórumod neve, pl. &quot;A teszt fórum&quot;.';
$txt['install_settings_name_default'] = 'Én közösségem';
$txt['install_settings_url'] = 'Fórum URL';
$txt['install_settings_url_info'] = 'Ez az URL a fórumodhoz, a <b>záró \'/\' jel nélkül!</b>.<br />A legtöbb esetben meghagyhatod az alapértelmezett értéket ebben a mezőben - általában helyes.';
$txt['install_settings_compress'] = 'Gzip kimenet';
$txt['install_settings_compress_title'] = 'Kimenet tömörítése a sávszélesség mentése érdekében.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Ez a funkció nem működik tökéletesen minden szerveren, de sok sávszélességet menthetsz meg vele.<br />Kattints <a href="install.php?obgz=1&amp;pass_string=TESZT" onclick="return reqWin(this.href, 200, 60);" target="_blank">ide</a> a teszteléshez. (annyit kell mondjon "TESZT".)';
$txt['install_settings_dbsession'] = 'Adatbázis munkamenetek';
$txt['install_settings_dbsession_title'] = 'Adatbázisban tárolja a munkameneteket fájlok használata helyett.';
$txt['install_settings_dbsession_info1'] = 'Ez az opció majdnem mindig a legjobb, mivel a munkameneteket sokkal megbízhatóbbá teszi.';
$txt['install_settings_dbsession_info2'] = 'Ez az opció egy alapvetően jó ötlet, de lehet, hogy nem fog tökéletesen működni ezen a szerveren.';
$txt['install_settings_utf8'] = 'UTF-8 karakterkódolás';
$txt['install_settings_utf8_title'] = 'UTF-8 használata alapértelmezett karakterkódolásként';
$txt['install_settings_utf8_info'] = 'Az opció bekapcsolásával mind az adatbázis, mind a fórum a nemzetközi UTF-8 karakterkódolást fogja használni. Hasznos lehet, ha több nyelvvel dolgozol, melyeknek más a karakterkódolása.';
$txt['install_settings_stats'] = 'Statisztika gyűjtésének engedélyezése';
$txt['install_settings_stats_title'] = 'A Simple Machines gyűjthet általános havi statisztikákat';
$txt['install_settings_stats_info'] = 'Bekapcsolt állapotban a Simple Machines meg fogja látogatni havonta egyszer az oldalad, hogy általános statisztikákat gyűjtsön. Ez segíteni fog nekünk annak eldöntésében, hogy milyen konfigurációkra kell optimalizálnunk a szoftvert. További információkért kérlek látogasd meg <a href="http://www.simplemachines.org/about/stats.php" target="_blank">információs oldalunkat</a>.';
$txt['install_settings_proceed'] = 'Mehet';

$txt['mysql_settings'] = 'MySQL szerver beállítások';
$txt['mysql_settings_info'] = 'Ezek a MySQL szerver beállításai. Ha nem tudod az értékeket, kérdezd meg a szolgáltatód.';
$txt['mysql_settings_server'] = 'MySQL szerver neve';
$txt['mysql_settings_server_info'] = 'Ez majdnem mindig localhost - tehát ha nem tudod, próbáld meg.';
$txt['mysql_settings_username'] = 'MySQL felhasználónév';
$txt['mysql_settings_username_info'] = 'Írd be a felhasználónevet, mellyel a MySQL adatbázishoz csatlakozol.<br />Ha nem tudod, próbáld meg az FTP azonosítód felhasználónevét, a legtöbb esetben ezek megegyeznek.';
$txt['mysql_settings_password'] = 'MySQL jelszó';
$txt['mysql_settings_password_info'] = 'A jelszó, mellyel kapcsolódni fogsz a MySQL adatbázishoz.<br />Ha nem tudod, próbáld meg az FTP azonosítód jelszavát.';
$txt['mysql_settings_database'] = 'MySQL adatbázis neve';
$txt['mysql_settings_database_info'] = 'Írd be az adatbázis nevét, melybe szeretnéd, hogy az SMF tárolja az adatokat.<br />Ha az adatbázis nem létezik, a telepítő meg fogja próbálni létrehozni.';
$txt['mysql_settings_prefix'] = 'MySQL tábla előtag';
$txt['mysql_settings_prefix_info'] = 'Az adatbázisban szereplő táblák előtagja. <b>Ne telepíts két fórumot ugyanazzal az előtaggal!</b><br />Ez az érték lehetővé teszi, hogy egy adatbázisban több fórumot telepíts.';

$txt['user_settings'] = 'Azonosítód létrehozása';
$txt['user_settings_info'] = 'A telepítő most egy új adminisztrátori azonosítót hoz létre neked.';
$txt['user_settings_username'] = 'Felhasználónév';
$txt['user_settings_username_info'] = 'Válaszd ki a nevet, amellyel be szeretnél lépni.<br />Ez később nem változtatható meg, de a megjelenítendő neved igen.';
$txt['user_settings_password'] = 'Jelszó';
$txt['user_settings_password_info'] = 'Írd be a kívánt jelszót és jegyezd meg jól!';
$txt['user_settings_again'] = 'Jelszó';
$txt['user_settings_again_info'] = '(csak megerősítésképp.)';
$txt['user_settings_email'] = 'E-mail cím';
$txt['user_settings_email_info'] = 'Add meg az e-mail címed. <b>Ennek valós e-mail címnek kell lennie.</b>';
$txt['user_settings_database'] = 'MySQL adatbázis jelszó';
$txt['user_settings_database_info'] = 'Biztonsági okokból a telepítő szükségelteti, hogy megadd az adatbázis jelszavát az adminisztrátori azonosító létrehozásához.';
$txt['user_settings_proceed'] = 'Befejezés';

$txt['ftp_setup'] = 'FTP csatlakozási információ';
$txt['ftp_setup_info'] = 'A telepítő képes az FTP szerverre kapcsolódni és kijavítani azokat a fájlokat, amelyeknek írhatónak kell lenniük, de nem azok. Ha ez nem működik, akkor neked kézzel kell a fájlokat írhatóvá tenned. Kérlek vedd figyelembe, hogy még nincs SSL támogatás.';
$txt['ftp_server'] = 'Szerver';
$txt['ftp_server_info'] = 'Az FTP szervered címe és portja.';
$txt['ftp_port'] = 'Port';
$txt['ftp_username'] = 'Felhasználónév';
$txt['ftp_username_info'] = 'A felhasználónév, amivel bejelentkezel. <i>Nem lesz elmentve sehova.</i>';
$txt['ftp_password'] = 'Jelszó';
$txt['ftp_password_info'] = 'A jelszó, amivel bejelentkezel. <i>Nem lesz elmentve sehova.</i>';
$txt['ftp_path'] = 'Telepítési útvonal';
$txt['ftp_path_info'] = 'Ez a <i>relatív</i> útvonal, amit az FTP szerveren használsz.';
$txt['ftp_path_found_info'] = 'A fenti mezőbe az útvonal automatikusan megállapításra került.';
$txt['ftp_connect'] = 'Csatlakozás';
$txt['ftp_setup_why'] = 'Mire van ez a lépés?';
$txt['ftp_setup_why_info'] = 'Az SMF megfelelő működéséhez néhány fájlnak írhatónak kell lennie. Ez a lépés lehetővé teszi számodra, hogy a telepítő írhatóvá tegye a fájlokat. Azonban ez néhány esetben nem működik - ebben az esetben kérlek adj 777 jogot (írható, néhány szolgáltatónál 755) a következő fájloknak:';
$txt['ftp_setup_again'] = 'hogy ellenőrizd, hogy ezek a fájlok írhatóak-e.';

$txt['error_php_too_low'] = 'Figyelmeztetés! Úgy tűnik a webszerveren telepített PHP verziója nem felel meg az SMF <b>minimális telepítési követelményeinek.</b>.<br />Ha nem te vagy a szolgáltató, meg kell hogy kérd a szolgáltatód, hogy frissítse, vagy használj másik szolgáltatót - máskülönben, kérlek frissítsd a PHP verzióját.<br /><br />Ha meg vagy bizonyosodva róla, hogy a PHP verzió megfelelő, folytathatod a telepítést, de ez erősen ellenjavalt.';
$txt['error_missing_files'] = 'Nem találhatóak elengedhetetlen telepítő fájlok a script könyvtárában!<br /><br />Kérlek bizonyosodj meg róla, hogy a teljes csomagot feltöltötted, az SQL fájlt is beleértve, majd próbáld újra.';
$txt['error_session_save_path'] = 'Kérlek értesítsd a szolgáltatód, hogy a <b>php. ini fájlban meghatározott session.save_path</b> nem megfelelő! Olyan könyvtárnak kell lennie, ami <b>létezik</b> és <b>írható</b> a PHP által.<br />';
$txt['error_windows_chmod'] = 'Windows szerveren vagy és néhány elengedhetetlen fájl nem írható. Kérlek kérd meg a szolgáltatód, hogy adjon <b>írási jogosultságokat</b> az SMF telepítése alatt futó PHP fájloknak. A következő fájloknak vagy könyvtáraknak kell írhatónak lenniük:';
$txt['error_ftp_no_connect'] = 'A megadott adatokkal nem lehet kapcsolódni az FTP szerverre.';
$txt['error_mysql_connect'] = 'A megadott adatokkal nem sikerült kapcsolódni a MySQL adatbázishoz.<br /><br />Ha nem vagy biztos benne mit kell beírnod, kérdezd meg a szolgáltatód.';
$txt['error_mysql_too_low'] = 'Az adatbázis által használt MySQL verziója túl régi és nem felel meg az SMF minimális követelményeinek.<br /><br />Kérlek kérd meg a szolgáltatód, hogy frissítse, vagy szolgáltasson egy újat, és ha nem teszik meg, kérlek próbálkozz egy másik szolgáltatónál.';
$txt['error_mysql_database'] = 'A telepítő nem tudta elérni a következő adatbázist: &quot;<i>%s</i>&quot;. Néhány szolgáltató esetében létre kell hoznod egy adatbázist mielőtt az SMF használhatná azt. Néhány még előtagot is - mint például a felhasználóneved - hozzátesz az adatbázisaid nevéhez.';
$txt['error_mysql_queries'] = 'Néhány kérés nem futott le megfelelően. Ezt a MySQL egy nem támogatott (fejlesztői vagy túl régi) verziója okozhatja.<br /><br />Technikai információ a kérésekről:';
$txt['error_mysql_queries_line'] = 'Sor #';
$txt['error_mysql_missing'] = 'A telepítő nem talált MySQL támogatást a PHP-ben. Kérlek kérdezd meg a szolgáltatód, hogy megbizonyosodj róla, hogy a PHP MySQL-el lett beforgatva, vagy a megfelelő kiterjesztés betöltődik.';
$txt['error_session_missing'] = 'A telepítő nem talált munkamenet kezelést a szervereden. Kérlek kérdezd meg a szolgáltatód, hogy megbizonyosodj róla, hogy a PHP munkamenet kezeléssel lett beforgatva (határozottan nélküle van).';
$txt['error_user_settings_again_match'] = 'Két teljesen különböző jelszót adtál meg!';
$txt['error_user_settings_taken'] = 'Sajnálom, már létezik felhasználó ezzel a felhasználónévvel és/vagy jelszóval.<br /><br />Az új azonosító nem készült el.';
$txt['error_user_settings_query'] = 'Adatbázis hiba lépett fel az adminisztrátor létrehozásakor. A hiba:';
$txt['error_subs_missing'] = 'Nem található a Sources/Subs.php fájl. Kérlek bizonyosodj meg róla, hogy fel lett töltve, majd próbáld újra.';
$txt['error_mysql_alter_priv'] = 'A MySQL azonosítónak nincsenek ALTER, CREATE, és/vagy DROP jogosultságai az adatbázisban; ez szükséges az SMF tökéletes működéséhez.';
$txt['error_versions_do_not_match'] = 'A telepítő egy másik SMF verziót talált telepítve a megadott adatokkal. Ha frissíteni próbálsz, használd a frissítőt, ne a telepítőt.<br /><br />Ellenkező esetben, használhatsz eltérő információkat, vagy készíthetsz egy biztonsági másolatot a jelenlegi adatbázisról és utána törölheted.';
$txt['error_mod_security'] = 'A telepítő érzékelte a mod_security modult a szervereden. A mod_security blokkolja az elküldött űrlapokat, mielőtt az SMF megszólalhatna. Az SMF rendelkezik egy beépített biztonsági rendszerrel, mely sokkal hatékonyabban működik, mint a mod_security és nem blokolja az elküldött űrlapokat.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">További információ a mod_security kikapcsolásáról</a>.';
$txt['error_utf8_mysql_version'] = 'Az adatbázisod jelenlegi verziója nem támogatja az UTF-8 karakterkódolást. Az SMF telepíthető továbbra is, UTF-8 támogatás nélkül. Ha a jövőben UTF-8 kódolásra szeretnél váltani (pl. miután a fórumod MySQL szerverének verziója >= 4.1), átkonvertálhatod a fórumod az adminisztrációs panelen keresztül.';

?>