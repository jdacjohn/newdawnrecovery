<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'SMF Installering';
$txt['installer_language'] = 'Sprog';
$txt['installer_language_set'] = 'Indstil';
$txt['congratulations'] = 'Tillykke, installationen er fuldført!';
$txt['congratulations_help'] = 'Hvis du får brug for support, eller SMF ikke virker ordentligt, er der <a href="http://www.simplemachines.org/community/index.php">hjælp tilgængelig</a> hvis du har brug for det.';
$txt['still_writable'] = 'Din installationsfolder er stadig skrivbar. Det er af sikkerhedshensyn en god ide at chmod\'e den, så den ikke er skrivbar.';
$txt['delete_installer'] = 'Klik her for at slette install.php filen nu.';
$txt['delete_installer_maybe'] = '<i>(virker ikke på alle servere.)</i>';
$txt['go_to_your_forum'] = 'Nu kan du se <a href="%s">dit nyinstallerede forum</a> og begynde at bruge det. Du bør først sikre dig at du er logget på, hvorefter du vil være i stand til at bruge administrationscenteret.';
$txt['good_luck'] = 'Held og lykke!<br />Simple Machines';

$txt['user_refresh_install'] = 'Forum opfrisket';
$txt['user_refresh_install_desc'] = 'Under installationen, blev det opdaget (med de detaljer du angav) at en eller flere tabeller allerede eksisterede.<br />Alle manglende tabeller er blevet genetableret med standardindstillingerne, men der blev ikke slettet data i eksisterende tabeller.';

$txt['default_topic_subject'] = 'Velkommen til SMF!';
$txt['default_topic_message'] = 'Velkommen til Simple Machines Forum!<br /><br />Vi håber du nyder dit forum.&nbsp; Hvis du har nogle problemer, venligst [url=http://www.simplemachines.org/community/index.php]kontakt os for assistance[/url].<br /><br />Tak!<br />Simple Machines';
$txt['default_board_name'] = 'Generel diskussion';
$txt['default_board_description'] = 'Føl dig fri til at snakke om hvadsomhelst på dette board.';
$txt['default_category_name'] = 'Generel kategori';
$txt['default_time_format'] = '%B %d, %Y, %I:%M:%S %p';
$txt['default_news'] = 'SMF - Lige installeret!';
$txt['default_karmaLabel'] = 'Karma:';
$txt['default_karmaSmiteLabel'] = '[dårlig]';
$txt['default_karmaApplaudLabel'] = '[god]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGæst\\nroot';
$txt['default_smileyset_name'] = 'Standard';
$txt['default_classic_smileyset_name'] = 'Classic';
$txt['default_theme_name'] = 'SMF Default Theme - Core';
$txt['default_classic_theme_name'] = 'Classic YaBB SE Theme';
$txt['default_babylon_theme_name'] = 'Babylon Theme';

$txt['default_administrator_group'] = 'Administrator';
$txt['default_global_moderator_group'] = 'Global Moderator';
$txt['default_moderator_group'] = 'Moderator';
$txt['default_newbie_group'] = 'Nyt medlem';
$txt['default_junior_group'] = 'Jr. Medlem';
$txt['default_full_group'] = 'Fuld medlem';
$txt['default_senior_group'] = 'Senior medlem';
$txt['default_hero_group'] = 'Hyper medlem';

$txt['default_smiley_smiley'] = 'Smiley';
$txt['default_wink_smiley'] = 'Blink';
$txt['default_cheesy_smiley'] = 'Humørgrin';
$txt['default_grin_smiley'] = 'Grin';
$txt['default_angry_smiley'] = 'Vred';
$txt['default_sad_smiley'] = 'Ked af det';
$txt['default_shocked_smiley'] = 'Chokeret';
$txt['default_cool_smiley'] = 'Cool';
$txt['default_huh_smiley'] = 'Spørgsmålstegn';
$txt['default_roll_eyes_smiley'] = 'Rullende øjne';
$txt['default_tongue_smiley'] = 'Tunge';
$txt['default_embarrassed_smiley'] = 'Forlegen';
$txt['default_lips_sealed_smiley'] = 'Forseglede læber';
$txt['default_undecided_smiley'] = 'Tvær';
$txt['default_kiss_smiley'] = 'Kys';
$txt['default_cry_smiley'] = 'Græder';
$txt['default_evil_smiley'] = 'Ond';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'Klik her';
$txt['error_message_try_again'] = 'for at prøve dette trin igen.';
$txt['error_message_bad_try_again'] = 'for at forsøge at installere, men bemærk at dette <i>ikke</i> er anbefalelsesværdigt.';

$txt['install_settings'] = 'Grundindstillinger';
$txt['install_settings_info'] = 'Bare nogle få ting der skal opsættes ;).';
$txt['install_settings_name'] = 'Forum navn';
$txt['install_settings_name_info'] = 'Dette er dit forums navn, ie. &quot;Test Forum&quot;.';
$txt['install_settings_name_default'] = 'Mit Community';
$txt['install_settings_url'] = 'Forum Webadresse';
$txt['install_settings_url_info'] = 'Dette er stien til dit forum <b>uden skråstreg \'/\'!</b>.<br />I de fleste tilfælde, kan du efterlade standardværdierne i disse bokse - de er som regel allerede korrekte.';
$txt['install_settings_compress'] = 'Gzip udkast';
$txt['install_settings_compress_title'] = 'Komprimer udkast for at spare båndbredde.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Denne funktion virker ikke korrekt på alle servere, men kan spare dig en masse båndbredde.<br />Klik <a href="install.php?obgz=1&amp;pass_string=PASS" onclick="return reqWin(this.href, 200, 60);" target="_blank">her</a> for at teste det. (det skulle kun sige "PASS".)';
$txt['install_settings_dbsession'] = 'Database Sessioner';
$txt['install_settings_dbsession_title'] = 'Brug databasen til sessioner i stedet for at bruge filer.';
$txt['install_settings_dbsession_info1'] = 'Denne funktion er næsten altid for det bedste, eftersom det gør sessioner mere afhængige.';
$txt['install_settings_dbsession_info2'] = 'Det er ikke ud til at denne funktion virker på din server, men du kan prøve det.';
$txt['install_settings_utf8'] = 'UTF-8 karakter valgt';
$txt['install_settings_utf8_title'] = 'Vil du bruge UTF-8 som standard karaktersæt?';
$txt['install_settings_utf8_info'] = 'Denne funktion lader både databasen og forummet bruge det internationale karaktersæt, UTF-8. Dette er meget brugbart, hvis der anvendes forskellige sprog med forskellige karaktersæt.';
$txt['install_settings_stats'] = 'Tillad statistik Opsamling';
$txt['install_settings_stats_title'] = 'Giv Simple Machines lov til at modtage månedlig statistik fra forummet';
$txt['install_settings_stats_info'] = 'Hvis dette er aktivt, tillader du Simple Machines at besøge din side en gang om måneden for at samle grundlæggende statistik. Dette vil hjælpe os til i fremtiden at beslutte hvilke konfigurationer vi skal optimere softwaren til. For mere information kan du besøge vores <a href="http://www.simplemachines.org/about/stats.php" target="_blank">info side</a>.';
$txt['install_settings_proceed'] = 'Fortsæt';

$txt['mysql_settings'] = 'MySQL Server Indstillinger';
$txt['mysql_settings_info'] = 'Dette er indstilingerne til din MySQL server.  Hvis du ikke kender værdierne, skal du spørge din udbyder om hvad de er.';
$txt['mysql_settings_server'] = 'MySQL server navn';
$txt['mysql_settings_server_info'] = 'Dette er næsten altid localhost - så hvis du ikke ved det, prøv localhost.';
$txt['mysql_settings_username'] = 'MySQL brugernavn';
$txt['mysql_settings_username_info'] = 'Udfyld med brugernavn som du bruger til at forbinde til din MySQL database her.<br />Hvis du ikke ved hvad det er, prøv med brugernavnet til din ftp konto, for det meste er det de samme.';
$txt['mysql_settings_password'] = 'MySQL kodeord';
$txt['mysql_settings_password_info'] = 'Her skal du angive kodeordet der skal brugesfor at forbinde til din MySQL database.<br />Hvis du ikke kender dette, kan du prøve med kodeordet til din ftp konto.';
$txt['mysql_settings_database'] = 'MySQL database navn';
$txt['mysql_settings_database_info'] = 'Angiv navnet på databasen du ønsker at få SMF til at lagre sine data i.<br />Hvis denne database ikke eksiterer, vil installeren prøve at oprette den.';
$txt['mysql_settings_prefix'] = 'MySQL tabel prefix';
$txt['mysql_settings_prefix_info'] = 'Prefix for enhver tabel i databasen.  <b>Installer ikke to forummer med samme prefix!</b><br />Denne feature tillader flere forskellige SMF installationer i samme database.';

$txt['user_settings'] = 'Opret din konto';
$txt['user_settings_info'] = 'Installeren vil nu oprette en ny administratorkonto til dig.';
$txt['user_settings_username'] = 'Dit brugernavn';
$txt['user_settings_username_info'] = 'Vælg navnet du ønsker at logge på med.<br />Dette kan ikke ændres senere, men dit viste navn kan.';
$txt['user_settings_password'] = 'Kodeord';
$txt['user_settings_password_info'] = 'Angiv dit foretrukne kodeord her, og husk det!!';
$txt['user_settings_again'] = 'Kodeord';
$txt['user_settings_again_info'] = '(Kun for verifikation.)';
$txt['user_settings_email'] = 'E-mail Adresse';
$txt['user_settings_email_info'] = 'Angiv også din e-mail adresse. <b>Dette skal være en korrekt e-mail adresse.</b>';
$txt['user_settings_database'] = 'MySQL Database kodeord';
$txt['user_settings_database_info'] = 'Installeren kræver af sikkerhedshensyn at du angiver kodeordet til databasen for at oprette en administratorkonto.';
$txt['user_settings_proceed'] = 'Færdig';

$txt['ftp_setup'] = 'FTP forbindelsesinformation';
$txt['ftp_setup_info'] = 'Installeren kan forbinde via FTP for at fixe de filer der behøver at være skrivbare som i øjeblikket ikke er det. Hvis dette ikke virker for dig, er du nødt til at gå ind manuelt og lave de filer skrivbare. Venligst bemærk at dette i øjeblikket ikke understøtter SSL.';
$txt['ftp_server'] = 'Server';
$txt['ftp_server_info'] = 'Server og port til din FTP server.';
$txt['ftp_port'] = 'Port';
$txt['ftp_username'] = 'Brugernavn';
$txt['ftp_username_info'] = 'Brugernavn at logge på med. <i>Dette vil ikke blive gemt nogle steder.</i>';
$txt['ftp_password'] = 'Kodeord';
$txt['ftp_password_info'] = 'Kodeordet der skal logges på med. <i>Dette vil ikke blive gemt nogle steder.</i>';
$txt['ftp_path'] = 'Installationssti';
$txt['ftp_path_info'] = 'Dette er den <i>relative</i> sti du bruger på din FTP server.';
$txt['ftp_path_found_info'] = 'Stien i ovenstående boks blev automatisk fundet.';
$txt['ftp_connect'] = 'Forbind';
$txt['ftp_setup_why'] = 'Hvad er dette trin til?';
$txt['ftp_setup_why_info'] = 'Nogle filer behøver at være skrivbare for at SMF virker ordenligt. Dette trin tillader dig at lade installeren oprette dem som skrivbare for dig. I nogle tilfælde vil dette dog ikke virke. I så tilfælde skal du manuelt gøre følgende filer skrivebare (777):';
$txt['ftp_setup_again'] = 'for at teste om disse filer er skrivbare igen.';

$txt['error_php_too_low'] = 'Advarsel!  Du ser ikke ud til at have PHP installeret på din webserver som imødegår  SMF\'s <b>minimum installationskrav</b>.<br />Hvis du ikke selv er host, er du nødt til at spørge din host om at opgradere, eller bruge en anden host, ellers opgrader venligst PHP til en nyere version.<br /><br />Hvis du med sikkerhed ved at din PHP version er høj nok, kan du forsøge at fortsætte selvom dette stærkt ikke anbefales.';
$txt['error_missing_files'] = 'Ikke i stand til at finde installationsfiler i dette skripts folder!<br /><br />Tjek venligst at du uploadede hele installationspakken, inklusiv SQL filen, og prøv igen.';
$txt['error_session_save_path'] = 'Informer venligst din host om at <b>session.save_path angivet i php.ini</b> ikke er korrekt! Den skal ændres til en folder som <b>findes</b>, og er <b>skrivbar</b> af den bruger PHP bliver brugt af.<br />';
$txt['error_windows_chmod'] = 'Du er på en windows server, og nogle filer er ikke skrivbare. Spørg venligst din host om at give  <b>skrivetilladelser</b> til brugeren af PHP for filerne i din SMF installation.  De følgende filer eller foldere behøver at være skrivbare:';
$txt['error_ftp_no_connect'] = 'Ikke i stand til at forbinde til FTP serveren med denne kombination af detaljer.';
$txt['error_mysql_connect'] = 'Kan ikke forbinde til MySQL databaseserveren med de oplyste data.<br /><br />Hvis du ikke er sikker på hvad du skal sætte ind, skal du kontakte din udbyder.';
$txt['error_mysql_too_low'] = 'Versionen af MySQL som din databaseserver bruger, er meget gammel, og opfylder ikke SMF\'s minimumkrav.<br /><br />Spørg venligst din udbyder om enten at opgradere den, eller installere en ny. Hvis de ikke vil, må du finde et andet webhotel.';
$txt['error_mysql_database'] = 'Iinstalleren kunne ikke få adgang til &quot;<i>%s</i>&quot; databasen. Ved nogle hosts, er du nødt til at oprette databasen via dit administrationspanel, før  SMF kan bruge den. Nogle hosts tilføjer også et prefix - som f.eks dit brugernavn - til dine(e) database(r)s navn(e).';
$txt['error_mysql_queries'] = 'Nogle forespørgelser blev ikke udført korrekt. Dette kan skyldes en ikke-understøttet version af en (udviklings- eller gammel) version af MySQL.<br /><br />Teknisk information om forespørgelserne:';
$txt['error_mysql_queries_line'] = 'Linie #';
$txt['error_mysql_missing'] = 'installeren kunne ikke finde MySQL understøttelse i PHP.  Spørg venligst din udbyder for at sikre dig at PHP er compilet med MySQL, eller at den rigtige udvidelse bliver loaded.';
$txt['error_session_missing'] = 'Installeren var ikke i stand til at detektere understøttelse af sessions i din PHP servers installation. Undersøg hos din host om PHP war compileret med understøttelse af sessions (faktisk skal det specifikt compileres uden!)';
$txt['error_user_settings_again_match'] = 'Du har indtastet to helt forskellige kodeord!';
$txt['error_user_settings_taken'] = 'Et medlem er allerede registreret med det brugernavn og/eller kodeord.<br /><br />En ny konto blev ikke oprettet.';
$txt['error_user_settings_query'] = 'En databasefejl opstod under forsøg på at oprette en administrator. Denne fejl var:';
$txt['error_subs_missing'] = 'Kan ikke finde Sources/Subs.php filen. Vær venligst sikker på at den er korrekt uploadet, og prøv igen.';
$txt['error_mysql_alter_priv'] = 'MySQL kontoen du specificerede, har ikke rettighederne ALTER, CREATE, og/eller DROP tables i databasen; Dette er nødvendigt for at SMF kan fungere korrekt.';
$txt['error_versions_do_not_match'] = 'Installeren har opdaget en anden version af SMF er installeret med samme informationer. Hvis du prøver på at opgradere, skal du bruge værktøjet dertil, ikke denne installer.<br /><br />I andre tilfælde er du nødt til at bruge andre informationer eller lave en backup for derefter at slette de nuværende informationer i databasen.';
$txt['error_mod_security'] = 'Installeren har opdaget at  mod_security modulet er installeret på din webserver. Mod_security vil blokere afsendte formularer, før SMF overhovedet når at reagere. SMF har en indbygget sikkerhedsscanner, der er mere effektiv end mod_security og som ikke blokerer for afsendte formularer.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">Mere information til hvordan man deaktiverer mod_security</a>';
$txt['error_utf8_mysql_version'] = 'Den aktuelle version af din database understøtter ikke UTF-8 karaktersættet. Du kan stadig installere SMF uden problemer, men uden UTF-8 support. Hvis du i fremtiden vil skifte til UTF-8 (eks. efter din MySQL server i forummet er blevet opgraderet til en version >= 4.1), kan du konvertere dit forum igennem administrationspanelet.';

?>