<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'SMF Installer';
$txt['installer_language'] = 'Jazyk';
$txt['installer_language_set'] = 'Nastaviť';
$txt['congratulations'] = 'Blahoželáme, inštalačný proces je dokončený!';
$txt['congratulations_help'] = 'Kedykoľvek budete potrebovať pomoc, alebo SMF prestane pracovať správne, spomeňte si, že je k dispozícii <a href="http://www.simplemachines.org/community/index.php">pomoc</a>.';
$txt['still_writable'] = 'Váš instalačný adresár je stále otvorený pre zápis. Bolo by dobré použiť chmod a z bezpečnostných dôvodov v ňom zakázať zápis.';
$txt['delete_installer'] = 'Kliknite pre zmazanie tohto inštalačného súboru (install.php). <i>(nefunguje na všetkých serveroch)</i>';
$txt['delete_installer_maybe'] = '<i>(nefunguje na všetkých serveroch)</i>';
$txt['go_to_your_forum'] = 'Teraz môžete vidieť <a href="%s">nové nainštalované fórum</a> a začať ho používať. Najskôr by ste sa mali prihlásiť, potom budete schopný pracovať v administrátorskom rozhraní.';
$txt['good_luck'] = 'Veľa šťastia!<br />Simple Machines';

$txt['user_refresh_install'] = 'Fórum obnovené';
$txt['user_refresh_install_desc'] = 'Pri inštalovaní inštalátor zistil, že (podľa údajov ktoré ste poskytli) jedna alebo viac tabuliek vytváraných inštalátorom už existovali.<br />Všetky chýbajúce tabuľky boli opäť vytvorené s použitím východzích údajov, žiadne dáta z existujúcích tabuliek neboli zmazané.';

$txt['default_topic_subject'] = 'Vitajte v SMF!';
$txt['default_topic_message'] = 'Vitajte v Simple Machines Forum!<br /><br />Doufáme že se ti práce s fórem bude líbit.&nbsp; Budeš-li mít jakékoliv potíže, neboj se požádat nás o [url=http://www.simplemachines.org/community/index.php]technickou podporu[/url].<br /><br />Díky!<br />Simple Machines';
$txt['default_board_name'] = 'Všeobecná diskuse';
$txt['default_board_description'] = 'Tu sa dá diskutovať o čomkoľvek.';
$txt['default_category_name'] = 'Všeobecná kategória';
$txt['default_time_format'] = '%d %B, %Y, %I:%M:%S %p';
$txt['default_news'] = 'SMF - Práve nainštalované!';
$txt['default_karmaLabel'] = 'Karma:';
$txt['default_karmaSmiteLabel'] = '[pískot]';
$txt['default_karmaApplaudLabel'] = '[potlesk]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nhost\\nroot';
$txt['default_smileyset_name'] = 'Východzí';
$txt['default_classic_smileyset_name'] = 'Klasické';
$txt['default_theme_name'] = 'SMF Východzí vzhľad - Core';
$txt['default_classic_theme_name'] = 'Klasický YaBB SE vzhľad';
$txt['default_babylon_theme_name'] = 'Vzhľad Babylon';

$txt['default_administrator_group'] = 'Administrátor';
$txt['default_global_moderator_group'] = 'Globálny Moderátor';
$txt['default_moderator_group'] = 'Moderátor';
$txt['default_newbie_group'] = 'Nováčík';
$txt['default_junior_group'] = 'Mladší člen';
$txt['default_full_group'] = 'Plný člen';
$txt['default_senior_group'] = 'Starší člen';
$txt['default_hero_group'] = 'Superčlen';

$txt['default_smiley_smiley'] = 'Úsmev';
$txt['default_wink_smiley'] = 'Mrknutie';
$txt['default_cheesy_smiley'] = 'Smiech';
$txt['default_grin_smiley'] = 'Úšklabok';
$txt['default_angry_smiley'] = 'Hnev';
$txt['default_sad_smiley'] = 'Smútok';
$txt['default_shocked_smiley'] = 'Šok';
$txt['default_cool_smiley'] = 'Super!';
$txt['default_huh_smiley'] = 'Čo???';
$txt['default_roll_eyes_smiley'] = 'Gúľam očami';
$txt['default_tongue_smiley'] = 'Vyplazujem jazyk';
$txt['default_embarrassed_smiley'] = 'Som v rozpakoch';
$txt['default_lips_sealed_smiley'] = 'Nepoviem';
$txt['default_undecided_smiley'] = 'Nerozhodný';
$txt['default_kiss_smiley'] = 'Pusinka';
$txt['default_cry_smiley'] = 'Plač';
$txt['default_evil_smiley'] = 'Zlý';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'Kliknite sem';
$txt['error_message_try_again'] = 'pre zopakovanie tohto kroku.';
$txt['error_message_bad_try_again'] = 'pre pokračovanie v inštalácii, ale majte na pamäti, že sa to <i>nedoporučuje</i>.';

$txt['install_settings'] = 'Základné nastavenia';
$txt['install_settings_info'] = 'Uba pár vecí, ktoré je potrebé nastaviť ;).';
$txt['install_settings_name'] = 'Názov fóra';
$txt['install_settings_name_info'] = 'To je meno fóra, napr. &quot;Testovacie fórum&quot;.';
$txt['install_settings_name_default'] = 'Moja komunita';
$txt['install_settings_url'] = 'URL fóra';
$txt['install_settings_url_info'] = 'Toto je URL vášho fóra <b>bez ukončovacieho lomítka \'/\'!</b>.<br />Vo väčšine prípadov môžete ponechat východziu hodnotu - obyčajne býva v poriadku.';
$txt['install_settings_compress'] = 'Gzip výstup';
$txt['install_settings_compress_title'] = 'Komprimuje výstup pre ušetrenie šírky pásma.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Táto funkcia nefunguje na všetkých serveroch správne, ale môže vám usporiť veľkú šírku pásma.<br />Kliknite na <a href="install.php?obgz=1&amp;pass_string=PASS" onclick="return reqWin(this.href, 200, 60);">TEST</a> pre jej otestovanie. (Malo by sa zobraziť "PASS".)';
$txt['install_settings_dbsession'] = 'Databáza sedení';
$txt['install_settings_dbsession_title'] = 'použije pre sedenia (sessions) databázu, namiesto súborov.';
$txt['install_settings_dbsession_info1'] = 'Táto vlasnosť je takmer vždy to najlepšie, pretože robí sedenia viac závislé.';
$txt['install_settings_dbsession_info2'] = 'Nevyzerá to, že to bude na vašom servery fungovať, ale môžete to skúsiť.';
$txt['install_settings_utf8'] = 'Znaková sada UTF-8';
$txt['install_settings_utf8_title'] = 'Používat UTF-8 jako výchozí znakovou sadu';
$txt['install_settings_utf8_info'] = 'Tato vlastnost umožňuje, aby jak data, tak databáze, používaly mezinárodní znakovou sadu UTF-8. To může být užitečné, když fórum používá více jazyků s rozličnými znakovými sadami.';
$txt['install_settings_stats'] = 'Povolit sběr statistik';
$txt['install_settings_stats_title'] = 'Povolit Simple Machines sbírat měsíčně statistiky';
$txt['install_settings_stats_info'] = 'Když je volba povolena, umožňuje Simple Machines navštívit tvoje fórum jednou měsíčně a vyzvednout si základní statistiky. To usnadní volbu vývojářům, především ve vztahu k optimalizaci některých vlastností. Pro více informaci navštiv <a href="http://www.simplemachines.org/about/stats.php" target="_blank">informační stránku</a>.';
$txt['install_settings_proceed'] = 'Pokračovat';

$txt['mysql_settings'] = 'Nastavenia MySQL servera';
$txt['mysql_settings_info'] = 'Toto sú nastavenia ktoré potrebujete pre použitie vášho MySQL servera. Ak neznáša potrebné hodnoty, spýtajte sa na ne vášho poskytovateľa.';
$txt['mysql_settings_server'] = 'Meno MySQL servera';
$txt['mysql_settings_server_info'] = 'Takmer vždy je to localhost, takže ak neviete, skúste \'localhost\'.';
$txt['mysql_settings_username'] = 'Užívateľské meno pre prístup k MySQL';
$txt['mysql_settings_username_info'] = 'Tu zadajte užívateľské meno, pod ktorým sa pripojujete k MySQL databázy.<br />Ak neviete aké je, skúste užívateľské meno vášho ftp účtu, väčšinou sú rovnaké.';
$txt['mysql_settings_password'] = 'MySQL heslo';
$txt['mysql_settings_password_info'] = 'Tu zadajte heslo pre prístup k MySQL databázy.<br />Ak neviete aké je, vyskúšajte heslo k vášmu ftp účtu.';
$txt['mysql_settings_database'] = 'Meno MySQL databázy';
$txt['mysql_settings_database_info'] = 'Zadajte meno databázy, ktorú chcete použiť pre ukladanie dát SMF.<br />Ak neexistuje táto databáza, inštalátor sa ju pokúsi vytvoriť.';
$txt['mysql_settings_prefix'] = 'Predpona MySQL tabuliek';
$txt['mysql_settings_prefix_info'] = 'Predpona všetkých tabuliek v databázy. <b>Neinštalujte dve fóra s rovnakou predponou!</b><br />Táto hodnota vám dovolí viac inštalácií do jednej databázy.';

$txt['user_settings'] = 'Vytvorte váš účet';
$txt['user_settings_info'] = 'Inštalátor pre vás vytvorí nový administrátorský účet.';
$txt['user_settings_username'] = 'Vaše užívateľské meno';
$txt['user_settings_username_info'] = 'Zadajte meno, pod ktorým sa chcete prihlasovať.<br />Toto meno nejde zmeniť, dá sa však zmeniť meno zobrazované ostatným užívateľom.';
$txt['user_settings_password'] = 'Heslo';
$txt['user_settings_password_info'] = 'Zadajte sem vaše obľúbené heslo, a ak je to možné, tak si ho aj zapamätajte :) !';
$txt['user_settings_again'] = 'Heslo';
$txt['user_settings_again_info'] = '(pre overenie.)';
$txt['user_settings_email'] = 'E-mailová adresa';
$txt['user_settings_email_info'] = 'Zadajte tiež vašu e-mailovú adresu.  <b>Musí ísť o platnú a funkčnú e-mailovú adresu.</b>';
$txt['user_settings_database'] = 'Heslo MySQL databázy';
$txt['user_settings_database_info'] = 'Inštalátor požaduje heslo k databáze pre vytvorenie administrátorského účtu z bezpečnostnych dôvodov.';
$txt['user_settings_proceed'] = 'Dokončiť';

$txt['ftp_setup'] = 'Informácie o FTP pripojení';
$txt['ftp_setup_info'] = 'tento inštalátor sa dokáže pripojiť cez FTP, aby mohol opraviť súbory ktoré potrebujú byť otvorené pre zápis a nie su. Ak vám to nebude fungovať, budete sa musieť prihlásiť ručne a ručne súbory otvoriť pre zápis. Majte na pamäti, že táto funkcia nepodporuje SSL.';
$txt['ftp_server'] = 'Server';
$txt['ftp_server_info'] = 'To by mal byť server a port vášho FTP pripojenia.';
$txt['ftp_port'] = 'Port';
$txt['ftp_username'] = 'Užívateľské meno';
$txt['ftp_username_info'] = 'Užívateľské meno pre prihlásenie. <i>Nebude nikde ukladané.</i>';
$txt['ftp_password'] = 'Heslo';
$txt['ftp_password_info'] = 'Heslo pre prihlásenie. <i>Nebude nikde ukladané.</i>';
$txt['ftp_path'] = 'Inštalačná cesta';
$txt['ftp_path_info'] = 'Toto je <i>relatívna</i> cesta, ktorú použijete na vašom FTP servery.';
$txt['ftp_path_found_info'] = 'Cesta v políčku výššie bola detekovaná automaticky.';
$txt['ftp_connect'] = 'Pripojiť';
$txt['ftp_setup_why'] = 'Na čo je tento krok?';
$txt['ftp_setup_why_info'] = 'Pre správnu funkciu SMF je potrebné, aby niektoré súbory zostali otvorené pre zápis. Tento krok dovolí inštalátoru, aby ich za vás otvoril pre zápis. Napriek tomu to niekedy nemusí fungovať. V tom prípade nastavte nasledujúce súbory na 777 (zapisovatelné):';
$txt['ftp_setup_again'] = 'pre otestovanie či sú súbory otvorené pre zápis.';

$txt['error_php_too_low'] = 'Pozor! Zdá sa, že na vašom servery nie je nainštalovaná PHP ktorá vyhovuje <b>minimálnym inštalačným požadavkám</b> SMF.<br />Ak nie ste prevádzkovateľmi servera, budete musiet vášho poskytovateľa požiadať o upgrade, alebo najsť iného. V opačnom prípade prosím upgradujte PHP na poslednú verziu.<br /><br />Ak ste si istý, že máte dostatočne vysokú verziu PHP, môžete pokračovať, aj keď sa to nedoporučuje.';
$txt['error_missing_files'] = 'V adresáry s týmto skriptom nejde nájsť kritické inštalačné súbory!<br /><br />Uistite sa prosím, že ste nahrali celý inštalačný balíček vrátane sql súboru a skúste to opäť.';
$txt['error_session_save_path'] = 'Prosím informujte vášho poskytovateľa servera že <b>session.save_path špecifikovaná v php.ini</b> nie je platná! Musí byť zmenená na adresár, ktorý <b>existuje</b>, a je <b>zapisovateľný</b> užívateľom, pod ktorým beží PHP.<br />';
$txt['error_windows_chmod'] = 'Ste na Windowsovskom servery a niektoré kritické súbory nie sú otvorené pre zápis. Prosím požiadajte vášho poskytovateľa aby dal <b>oprávnenie k zápisu</b> užívateľovi, pod ktorým beží PHP, pre súbory vo vašej inštalácii SMF. Nasledujúce súbory a adresáre musia byť zapisovateľné: ';
$txt['error_ftp_no_connect'] = 'Pomocou týchto údajov sa nedá pripojiť k FTP serveru.';
$txt['error_mysql_connect'] = 'Pomocou zadaných údajov sa nedá pripojiť k MySQL serveru.<br /><br />Ak neviete aké údaje zadať, kontaktujte vášho poskytovateľa serveru.';
$txt['error_mysql_too_low'] = 'Verzia MySQL, ktorú používa váš server, je veľmi stará a nezodpovedá minimálnym požiadavkám SMF.<br /><br />Prosím požiadajte vášho hostiteľa o upgrade alebo poskytnutí nového, a ak to neurobí, nájdite si iného.';
$txt['error_mysql_database'] = 'Inštalátor nebol schopný získať prístup k databáze &quot;<i>%s</i>&quot;. U niektorých poskytovateľov musíte vytvoriť databázu vo vašom administračnom rozhraní predtým, ako ju SMF môže použiť. Niektorí tiež pridávajú prefix - napr. vaše užív. meno - k názvu vašej databázy.';
$txt['error_mysql_queries'] = 'Niektoré z dotazov neboli vykonané korektne. To môže byť spôsobené nepodporovanou (vývojovou alebo starou) verziou MySQL.<br /><br />Technické informácie o dotazoch:';
$txt['error_mysql_queries_line'] = 'Riadok č. ';
$txt['error_mysql_missing'] = 'Inštalátor nenašiel podporu MySQL v PHP.  Prosím spýtajte sa vášho poskytovateľa, či bolo PHP skompilované s MySQL alebo či bolo načítané odpovedajúce rozšírenie.';
$txt['error_session_missing'] = 'Inštalátor nenašiel podporu sedení (sessions) v inštalácii PHP na tomto servery. Spýtajte sa vášho správcu, či má jeho PHP skutočne podporu sedení (v skutočnosti musí byť podpora sedení explicitne zakázaná pri kompilácii)';
$txt['error_user_settings_again_match'] = 'Zadali ste dve úplne odlišné hesla!';
$txt['error_user_settings_taken'] = 'Ľutujeme, ale s týmto menom a/alebo heslom už sa niekto registroval.<br /><br />Nový účet nebol vytvorený.';
$txt['error_user_settings_query'] = 'Pri vyváraní administrátora došlo k chybe v databázy. Táto chyba je:';
$txt['error_subs_missing'] = 'Nedá sa nájsť súbor Sources/Subs.php. Uistite sa, že bol správne nahraný, a skúste to opäť.';
$txt['error_mysql_alter_priv'] = 'Účet MySQL, ktorý ste zadali, nemá oprávnenie ALTER, CREATE, alebo DROP na tabuľky v databázy; je to ale potrebné, aby mohlo SMF správne fungovať.';
$txt['error_versions_do_not_match'] = 'Inštalátor našiel inú verziu SMF, ktorá používa tieto nastavenia. Ak sa snažíte o aktualizáciu, nepoužívajte inštalátor, ale aktualizátor (upgrader).<br /><br />Inak použite iné nastavenia, alebo vykonajte zálohu a vymažte dáta z databázy.';
$txt['error_mod_security'] = 'Inštalátor zistil, že na vašom servery beží mod_security. Mod_security zablokuje formuláre skôr ako stačí SMF zareagovať. SMF má zabudovaný bezpečnostný scanner, ktorý pracuje efektívnejšie ako mod_security a neblokuje odosielanie formulárov.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">Viac info o neumožnení mod_security</a>';
$txt['error_utf8_mysql_version'] = 'Současná verzia databáze nepodporuje znakovou sadu UTF-8. Můžeš nyní nainstalovat SMF, ale bez zaškrtlé volby UTF-8. Pokud budeš v budoucnu chtít přejít na UTF-8 (jakmile upgraduješ MySQL na verzi vyšší než 4.1), dá se to provést z administračního centra.';

?>