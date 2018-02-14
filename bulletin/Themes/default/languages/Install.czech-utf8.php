<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'SMF Installer';
$txt['installer_language'] = 'Jazyk';
$txt['installer_language_set'] = 'Nastavit';
$txt['congratulations'] = 'Blahopřeji, instalační proces je dokončen!';
$txt['congratulations_help'] = 'Kdykoliv budeš potřebovat pomoc, nebo SMF přestane pracovat správně, vzpomeň si že je k dispozici <a href="http://www.simplemachines.org/community/index.php">pomoc</a>.';
$txt['still_writable'] = 'Tvůj instalační adresář je stále otevřen pro zápis. Bylo by dobré použít chmod a z bezpečnostních důvodů v něm zakázat zápis.';
$txt['delete_installer'] = 'Klikni pro smazání tohoto instalačního souboru (install.php). <i>(nefunguje na všech serverech)</i>';
$txt['delete_installer_maybe'] = '<i>(nefunguje na všech serverech)</i>';
$txt['go_to_your_forum'] = 'Nyní můžeš vidět <a href="%s">nově nainstalované fórum</a> a začít ho používat. Nejdřív by ses měl přihlásit, pak budeš schopen pracovat v administrátorském rozhraní.';
$txt['good_luck'] = 'Mnoho zdaru!<br />Simple Machines';

$txt['user_refresh_install'] = 'Fórum obnoveno';
$txt['user_refresh_install_desc'] = 'Při instalování instalátor zjistil, že (podle údajů které jsi poskytl) jedna nebo více tabulek vytvářených instalátorem již existovaly.<br />Všechny chybějící tabulky byly znovu vytvořeny s použitím výchozích údajů, žádná data z existujících tabulek nebyla smazána.';

$txt['default_topic_subject'] = 'Vítej v SMF!';
$txt['default_topic_message'] = 'Vítej v Simple Machines Forum!<br /><br />Doufáme že se ti práce s fórem bude líbit.&nbsp; Budeš-li mít jakékoliv potíže, neboj se požádat nás o [url=http://www.simplemachines.org/community/index.php]technickou podporu[/url].<br /><br />Díky!<br />Simple Machines';
$txt['default_board_name'] = 'Všeobecná diskuse';
$txt['default_board_description'] = 'Zde se dá mluvit o čemkoliv.';
$txt['default_category_name'] = 'Všeobecná kategorie';
$txt['default_time_format'] = '%B %d, %Y, %I:%M:%S %p';
$txt['default_news'] = 'SMF - Právě nainstalováno!';
$txt['default_karmaLabel'] = 'Karma:';
$txt['default_karmaSmiteLabel'] = '[pískot]';
$txt['default_karmaApplaudLabel'] = '[potlesk]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nhost\\nroot';
$txt['default_smileyset_name'] = 'Výchozí';
$txt['default_classic_smileyset_name'] = 'Klasické';
$txt['default_theme_name'] = 'SMF Výchozí vzhled - Core';
$txt['default_classic_theme_name'] = 'Klasický YaBB SE vzhled';
$txt['default_babylon_theme_name'] = 'Vzhled Babylon';

$txt['default_administrator_group'] = 'Administrátor';
$txt['default_global_moderator_group'] = 'Globální Moderátor';
$txt['default_moderator_group'] = 'Moderátor';
$txt['default_newbie_group'] = 'Nováček';
$txt['default_junior_group'] = 'Mladší člen';
$txt['default_full_group'] = 'Plný člen';
$txt['default_senior_group'] = 'Starší člen';
$txt['default_hero_group'] = 'Superčlen';

$txt['default_smiley_smiley'] = 'Úsměv';
$txt['default_wink_smiley'] = 'Mrknutí';
$txt['default_cheesy_smiley'] = 'Smích';
$txt['default_grin_smiley'] = 'Škleb';
$txt['default_angry_smiley'] = 'Hněv';
$txt['default_sad_smiley'] = 'Smutek';
$txt['default_shocked_smiley'] = 'Šok';
$txt['default_cool_smiley'] = 'Super!';
$txt['default_huh_smiley'] = 'Co???';
$txt['default_roll_eyes_smiley'] = 'Kroutím očima';
$txt['default_tongue_smiley'] = 'Vyplazuji jazyk';
$txt['default_embarrassed_smiley'] = 'Jsem v rozpacích';
$txt['default_lips_sealed_smiley'] = 'Neřeknu';
$txt['default_undecided_smiley'] = 'Nerozhodný';
$txt['default_kiss_smiley'] = 'Polibek';
$txt['default_cry_smiley'] = 'Pláč';
$txt['default_evil_smiley'] = 'Zlej';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'Klikni zde';
$txt['error_message_try_again'] = 'pro zopakování tohoto kroku.';
$txt['error_message_bad_try_again'] = 'pro pokračování v instalaci, ale měj na paměti že se to <i>nedoporučuje</i>.';

$txt['install_settings'] = 'Základní nastavení';
$txt['install_settings_info'] = 'Pouze pár věcí, které je nutno nastavit ;).';
$txt['install_settings_name'] = 'Název fóra';
$txt['install_settings_name_info'] = 'To je jméno fóra, např. &quot;Testovací fórum&quot;.';
$txt['install_settings_name_default'] = 'Moje komunita';
$txt['install_settings_url'] = 'URL fóra';
$txt['install_settings_url_info'] = 'Toto je URL tvého fóra <b>bez ukončovacího lomítka \'/\'!</b>.<br />Ve většině případů můžeš ponechat výchozí hodnotu - obvykle bývá v pořádku.';
$txt['install_settings_compress'] = 'Gzip výstup';
$txt['install_settings_compress_title'] = 'Komprimuje výstup k ušetření šířky pásma.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Tato funkce nefunguje na všech serverech správně, ale může ti uspořit značnou šířku pásma.<br />Klikni na <a href="install.php?obgz=1&amp;pass_string=PASS" onclick="return reqWin(this.href, 200, 60);">TEST</a> pro její otestování. (Mělo by se zobrazit "PASS".)';
$txt['install_settings_dbsession'] = 'Databáze sezení';
$txt['install_settings_dbsession_title'] = 'použije pro sezení (sessions) databázi, namísto souborů.';
$txt['install_settings_dbsession_info1'] = 'Tato vlastnost je téměř vždy to nejlepší, jelikož dělá sezení více závislá.';
$txt['install_settings_dbsession_info2'] = 'Nevypadá to, že to bude na tvém serveru fungovat, ale můžeš to zkusit.';
$txt['install_settings_utf8'] = 'Znaková sada UTF-8';
$txt['install_settings_utf8_title'] = 'Používat UTF-8 jako výchozí znakovou sadu';
$txt['install_settings_utf8_info'] = 'Tato vlastnost umožňuje, aby jak data, tak databáze, používaly mezinárodní znakovou sadu UTF-8. To může být užitečné, když fórum používá více jazyků s rozličnými znakovými sadami.';
$txt['install_settings_stats'] = 'Povolit sběr statistik';
$txt['install_settings_stats_title'] = 'Povolit Simple Machines sbírat měsíčně statistiky';
$txt['install_settings_stats_info'] = 'Když je volba povolena, umožňuje Simple Machines navštívit tvoje fórum jednou měsíčně a vyzvednout si základní statistiky. To usnadní volbu vývojářům, především ve vztahu k optimalizaci některých vlastností. Pro více informaci navštiv <a href="http://www.simplemachines.org/about/stats.php" target="_blank">informační stránku</a>.';
$txt['install_settings_proceed'] = 'Pokračovat';

$txt['mysql_settings'] = 'Nastavení MySQL serveru';
$txt['mysql_settings_info'] = 'Toto jsou nastavení která potřebuješ pro použití svého MySQL serveru. Neznáš-li potřebné hodnoty, zeptej se na ně svého poskytovatele.';
$txt['mysql_settings_server'] = 'Jméno MySQL serveru';
$txt['mysql_settings_server_info'] = 'Téměř vždy je to localhost, takže pokud nevíš, zkus \'localhost\'.';
$txt['mysql_settings_username'] = 'Uživatelské jméno pro přístup k MySQL';
$txt['mysql_settings_username_info'] = 'Zde zadej uživatelské jméno, pod kterým se připojuješ k MySQL databázi.<br />Nevíš-li, jaké je, zkus uživatelské jméno svého ftp účtu, většinou jsou stejná.';
$txt['mysql_settings_password'] = 'MySQL heslo';
$txt['mysql_settings_password_info'] = 'Zde zadej heslo pro přístup k MySQL databázi.<br />Neznáš-li jej, vyzkoušej heslo ke svému ftp účtu.';
$txt['mysql_settings_database'] = 'Jméno MySQL databáze';
$txt['mysql_settings_database_info'] = 'Zadej jméno databáze, kterou chceš použít pro ukládání dat SMF.<br />Neexistuje-li tato databáze, instalátor se pokusí ji vytvořit.';
$txt['mysql_settings_prefix'] = 'Předpona MySQL tabulek';
$txt['mysql_settings_prefix_info'] = 'Předpona všech tabulek v databázi. <b>Neinstaluj dvě fóra se stejnou předponou!</b><br />Tato hodnota to dovolí více instalací do jedné databáze.';

$txt['user_settings'] = 'Vytvoř svůj účet';
$txt['user_settings_info'] = 'Instalátor pro tebe vytvoří nový administrátorský účet.';
$txt['user_settings_username'] = 'Tvé uživatelské jméno';
$txt['user_settings_username_info'] = 'Zadej jméno, pod kterým se chceš přihlašovat.<br />Toto jméno nejde změnit, jde však změnit jméno zobrazované ostatním uživatelům.';
$txt['user_settings_password'] = 'Heslo';
$txt['user_settings_password_info'] = 'Zadej sem své oblíbené heslo, a pokud možno si jej i zapamatuj :) !';
$txt['user_settings_again'] = 'Heslo';
$txt['user_settings_again_info'] = '(pro ověření.)';
$txt['user_settings_email'] = 'E-mailová adresa';
$txt['user_settings_email_info'] = 'Zadej také svou e-mailovou adresu.  <b>Musí se jednat o platnou a funkční e-mailovou adresu.</b>';
$txt['user_settings_database'] = 'Heslo MySQL databáze';
$txt['user_settings_database_info'] = 'Instalátor požaduje heslo k databázi pro vytvoření administrátorského účtu z bezpečnostních důvodů.';
$txt['user_settings_proceed'] = 'Dokončit';

$txt['ftp_setup'] = 'Informace o FTP připojení';
$txt['ftp_setup_info'] = 'tento instalátor se dokáže připojit přes FTP, aby mohl opravit soubory které potřebují být otevřeny pro zápis a nejsou. Pokud ti to nebude fungovat, budeš se muset přihlásit ručně a ručně soubory otevřít pro zápis. Měj na paměti že tato funkce nepodporuje SSL.';
$txt['ftp_server'] = 'Server';
$txt['ftp_server_info'] = 'To by měl být server a port tvého FTP připojení.';
$txt['ftp_port'] = 'Port';
$txt['ftp_username'] = 'Uživatelské jméno';
$txt['ftp_username_info'] = 'Uživatelské jméno pro přihlášení. <i>Nebude nikde ukládáno.</i>';
$txt['ftp_password'] = 'Heslo';
$txt['ftp_password_info'] = 'Heslo pro přihlášení. <i>Nebude nikde ukládáno.</i>';
$txt['ftp_path'] = 'Instalační cesta';
$txt['ftp_path_info'] = 'Toto je <i>relativní</i> cesta kterou použiješ na svém FTP serveru.';
$txt['ftp_path_found_info'] = 'Cesta v políčku výše byla detekována automaticky.';
$txt['ftp_connect'] = 'Připojit';
$txt['ftp_setup_why'] = 'K čemu je tento krok?';
$txt['ftp_setup_why_info'] = 'Pro správnou funkci SMF je potřeba, aby některé soubory zůstaly otevřeny pro zápis. Tento krok dovolí instalátoru, aby je za tebe otevřel pro zápis. Přesto to někdy nemusí fungovat. V takovém případě nastav následující soubory na 777 (zapisovatelné):';
$txt['ftp_setup_again'] = 'pro otestování zda jsou soubory otevřeny pro zápis.';

$txt['error_php_too_low'] = 'Pozor! Zdá se, že na tvém serveru není nainstalována PHP která vyhovuje <b>minimálním instalačním požadavkům</b> SMF.<br />Nejsi-li provozovatelem serveru, budeš muset svého poskytovatele požádat o upgrade, nebo najít jiného. V opačném případě prosím upgraduj PHP na poslední verzi.<br /><br />Jsi-li si jist, že máš dostatečně vysokou verzi PHP, můžeš pokračovat, ačkoliv se to silně nedoporučuje.';
$txt['error_missing_files'] = 'V adresáři s tímto skriptem nelze najít kritické instalační soubory!<br /><br />Ujisti se prosím, že jsi nahrál celý instalační balíček včetně sql souboru a zkus to znovu.';
$txt['error_session_save_path'] = 'Prosím informuj svého poskytovatele serveru že <b>session.save_path specifikovaná v php.ini</b> není platná! Musí být změněna na adresář, který <b>existuje</b>, a je <b>zapisovatelný</b> uživatelem, pod kterým běží PHP.<br />';
$txt['error_windows_chmod'] = 'Jsi na Windowsovském serveru a některé kritické soubory nejsou otevřeny pro zápis. Prosím požádej svého poskytovatele aby dal <b>oprávnění k zápisu</b> uživateli, pod kterým běží PHP, pro soubory v tvé instalaci SMF. Následující soubory a adresáře musí být zapisovatelné: ';
$txt['error_ftp_no_connect'] = 'Pomocí těchto údajů se nelze připojit k FTP serveru.';
$txt['error_mysql_connect'] = 'Pomocí zadaných údajů se nelze připojit k MySQL serveru.<br /><br />Nevíš-li jaké údaje zadat, kontaktuj svého poskytovatele serveru.';
$txt['error_mysql_too_low'] = 'Verze MySQL, kterou používá tvůj server, je velmi stará a neodpovídá minimálním požadavkům SMF.<br /><br />Prosím požádej svého hostitele o upgrade nebo poskytnutí nového, a pokud to neudělá, najdi si jiného.';
$txt['error_mysql_database'] = 'Instalátor nebyl schopen získat přístup k databázi &quot;<i>%s</i>&quot;. U některých poskytovatelů musíš vytvořit databázi ve svém administračním rozhraní předtím, než ji SMF může použít. Někteří také přidávají prefix - např. tvé uživ. jméno - k názvu tvé databáze.';
$txt['error_mysql_queries'] = 'Některé z dotazů nebyly provedeny korektně. To může být způsobeno nepodporovanou (vývojovou nebo starou) verzí MySQL.<br /><br />Technické informace o dotazech:';
$txt['error_mysql_queries_line'] = 'Řádek č. ';
$txt['error_mysql_missing'] = 'Instalátor nenašel podporu MySQL v PHP.  Prosím zeptej se svého poskytovatele, zda bylo PHP zkompilováno s MySQL nebo zda bylo načteno odpovídající rozšíření.';
$txt['error_session_missing'] = 'Instalátor nenašel podporu sezení (sessions) v instalaci PHP na tomto serveru. Zeptej se správce, zda má jeho PHP skutečně podporu sezení (ve skutečnosti musí být podpora sezení explicitně zakázána při kompilaci)';
$txt['error_user_settings_again_match'] = 'Zadal jsi dvě zcela odlišná hesla!';
$txt['error_user_settings_taken'] = 'Lituji, ale s tímto jménem a/nebo heslem již se někdo registroval.<br /><br />Nový účet nebyl vytvořen.';
$txt['error_user_settings_query'] = 'Při vyváření administrátora došlo k chybě v databázi. Tato chyba je:';
$txt['error_subs_missing'] = 'Nelze najít soubor Sources/Subs.php. Ujisti se že byl správně nahrán, a zkus to znovu.';
$txt['error_mysql_alter_priv'] = 'Účet MySQL, který jsi zadal, nemá oprávnění ALTER, CREATE, anebo DROP na tabulky v databázi; to je ale potřeba, aby mohlo SMF správně fungovat.';
$txt['error_versions_do_not_match'] = 'Instalátor našel jinou verzi SMF, která používá tato nastavení. Pokud se snažíš o aktualizaci, nepoužívej instalátor, ale aktualizátor (upgrader).<br /><br />Jinak použij jiná nastavení, nebo proveď zálohu a smaž data z databáze.';
$txt['error_mod_security'] = 'Instalátor zjistil, že na tvém serveru běží mod_security. Mod_security zablokuje formuláře ještě než stačí SMF zareagovat. SMF má zabudovaný bezpečnostní scanner, který pracuje efektivněji než mod_security a neblokuje odesílání formulářů.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">More information about disabling mod_security</a>';
$txt['error_utf8_mysql_version'] = 'Současná verze databáze nepodporuje znakovou sadu UTF-8. Můžeš nyní nainstalovat SMF, ale bez zaškrtlé volby UTF-8. Pokud budeš v budoucnu chtít přejít na UTF-8 (jakmile upgraduješ MySQL na verzi vyšší než 4.1), dá se to provést z administračního centra.';

?>