<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'Installazione SMF';
$txt['installer_language'] = 'Lingua';
$txt['installer_language_set'] = 'Impostata';
$txt['congratulations'] = 'Complimenti, il processo di installazione è concluso!';
$txt['congratulations_help'] = 'Se in un qualsiasi momento aveste bisogno di aiuto, o se SMF smettesse di funzionare correttamente, ricordate che <a href="http://www.simplemachines.org/community/index.php" target="_blank">sono disponibili degli aiuti</a>.';
$txt['still_writable'] = 'La cartella di installazione ha i permessi di scrittura. Si raccomanda per ragioni di sicurezza di modificarne i permessi in modo da renderla protetta in scrittura.';
$txt['delete_installer'] = 'Fare clic qui per eliminare il file install.php ora.';
$txt['delete_installer_maybe'] = '<i>(non funziona su tutti i server).</i>';
$txt['go_to_your_forum'] = 'Ora è possibile visitare <a href="%s">il forum appena installato</a> e iniziare a utilizzarlo. Assicurarsi di aver effettuato l\'accesso per accedere al pannello di amministrazione.';
$txt['good_luck'] = 'Buona fortuna!<br />Simple Machines';

$txt['user_refresh_install'] = 'Forum ripristinato';
$txt['user_refresh_install_desc'] = 'Durante l\'installazione con i dati forniti si è rilevato che una o più tabelle sono già presenti.<br />Tutte le tabelle mancanti sono state create con i dati predefiniti e nessun dato è stato eliminato dalle tabelle esistenti.';

$txt['default_topic_subject'] = 'Benvenuti in SMF!';
$txt['default_topic_message'] = 'Benvenuti in Simple Machines Forum!<br /><br />&nbsp; Per qualunque problema non si esiti a [url=http://www.simplemachines.org/community/index.php]chiedere assistenza[/url].<br /><br />Grazie!<br />Simple Machines';
$txt['default_board_name'] = 'Discussioni generiche';
$txt['default_board_description'] = 'Discutete di tutto e di tutti in questa sezione.';
$txt['default_category_name'] = 'Categoria generica';
$txt['default_time_format'] = '%d %B %Y, %H:%M:%S';
$txt['default_news'] = 'SMF - Appena installato!';
$txt['default_karmaLabel'] = 'Karma:';
$txt['default_karmaSmiteLabel'] = '[fischio]';
$txt['default_karmaApplaudLabel'] = '[applauso]';
$txt['default_reserved_names'] = 'Amministratore\\nWebmaster\\nOspite\\nroot';
$txt['default_smileyset_name'] = 'Predefinito';
$txt['default_classic_smileyset_name'] = 'Classico';
$txt['default_theme_name'] = 'Tema predefinito SMF - Base';
$txt['default_classic_theme_name'] = 'Tema YaBB SE classico';
$txt['default_babylon_theme_name'] = 'Tema Babylon';

$txt['default_administrator_group'] = 'Amministratore';
$txt['default_global_moderator_group'] = 'Moderatore globale';
$txt['default_moderator_group'] = 'Moderatore';
$txt['default_newbie_group'] = 'Nuovo arrivato';
$txt['default_junior_group'] = 'Utente junior';
$txt['default_full_group'] = 'Utente normale';
$txt['default_senior_group'] = 'Utente senior';
$txt['default_hero_group'] = 'Utente storico';

$txt['default_smiley_smiley'] = 'Sorriso';
$txt['default_wink_smiley'] = 'Occhiolino';
$txt['default_cheesy_smiley'] = 'Felice';
$txt['default_grin_smiley'] = 'Ghigno';
$txt['default_angry_smiley'] = 'Adirato';
$txt['default_sad_smiley'] = 'Triste';
$txt['default_shocked_smiley'] = 'Scioccato';
$txt['default_cool_smiley'] = 'Fico';
$txt['default_huh_smiley'] = 'Che?!?';
$txt['default_roll_eyes_smiley'] = 'Occhi al cielo';
$txt['default_tongue_smiley'] = 'Linguaccia';
$txt['default_embarrassed_smiley'] = 'Imbarazzato';
$txt['default_lips_sealed_smiley'] = 'Bocca cucita';
$txt['default_undecided_smiley'] = 'Indeciso';
$txt['default_kiss_smiley'] = 'Bacio';
$txt['default_cry_smiley'] = 'Pianto';
$txt['default_evil_smiley'] = 'Diabolico';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'Fare clic qui';
$txt['error_message_try_again'] = 'per ritentare questo passaggio.';
$txt['error_message_bad_try_again'] = 'per installare comunque - questa opzione è <i>fortemente</i> sconsigliata.';

$txt['install_settings'] = 'Impostazioni di base';
$txt['install_settings_info'] = 'Solo pochi dati da configurare ;).';
$txt['install_settings_name'] = 'Nome forum';
$txt['install_settings_name_info'] = 'Questo è il nome del forum, es. &quot;Il forum di test&quot;.';
$txt['install_settings_name_default'] = 'La mia comunità';
$txt['install_settings_url'] = 'Indirizzo del forum';
$txt['install_settings_url_info'] = 'Questo è l\'indirizzo del forum <b>senza il carattere \'/\' finale!</b>.<br />Nella maggior parte dei casi, è possibile lasciare il valore predefinito, solitamente corretto.';
$txt['install_settings_compress'] = 'Compressione gzip';
$txt['install_settings_compress_title'] = 'Comprimi l\'output per risparmiare banda.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Questa funzionalità non è disponibile su tutti i server e permette di risparmiare molta banda.<br /><a href="install.php?obgz=1&amp;pass_string=PASSATO" onclick="return reqWin(this.href, 200, 60);" target="_blank">Esegui il test di compatibilità</a> (dovrebbe visualizzare &quot;PASSATO&quot;).';
$txt['install_settings_dbsession'] = 'Sessioni nel database';
$txt['install_settings_dbsession_title'] = 'Usa il database per la memorizzazione delle sessioni al posto dei file.';
$txt['install_settings_dbsession_info1'] = 'Questa funzionalità è solitamente ritenuta migliore, dato che rende le sessioni più gestibili.';
$txt['install_settings_dbsession_info2'] = 'Questa funzionalità di solito è molto utile, ma potrebbe non funzionare correttamente su questo server.';
$txt['install_settings_utf8'] = 'Codifica caratteri UTF-8';
$txt['install_settings_utf8_title'] = 'Utilizza UTF-8 come codifica caratteri predefinita';
$txt['install_settings_utf8_info'] = 'Questa funzionalità permette sia al database sia al forum di utilizzare una codifica caratteri internazionale, UTF-8. Può risultare utile se si lavora con più lingue che utilizzano diversi tipi di caratteri.';
$txt['install_settings_stats'] = 'Permetti raccolta statistiche';
$txt['install_settings_stats_title'] = 'Permetti a Simple Machines di raccogliere mensilmente dati statistici minimi';
$txt['install_settings_stats_info'] = 'Se attivata, questa funzionalità permetterà a Simple Machines di visitare una volta al mese il sito per raccogliere dati statistici di base. Ciò permetterà di decidere per quali configurazioni ottimizzare il software. Per ulteriori informazioni, visitare la nostra <a href="http://www.simplemachines.org/about/stats.php" target="_blank">pagina informativa</a>.';
$txt['install_settings_proceed'] = 'Procedi';

$txt['mysql_settings'] = 'Impostazioni server MySQL';
$txt['mysql_settings_info'] = 'Queste sono le impostazioni per il server MySQL. Se non si conoscono i valori, richiederli al proprio fornitore di hosting.';
$txt['mysql_settings_server'] = 'Nome server MySQL';
$txt['mysql_settings_server_info'] = 'È quasi sempre localhost, perciò se non si conosce questo dato provare con localhost.';
$txt['mysql_settings_username'] = 'Nome utente MySQL';
$txt['mysql_settings_username_info'] = 'Digitare il nome utente che serve per accedere al database MySQL.<br />Se non è noto provare con quello del proprio account FTP: in molti casi coincidono.';
$txt['mysql_settings_password'] = 'Password MySQL';
$txt['mysql_settings_password_info'] = 'Digitare la password necessaria per connettersi al database MySQL.<br />Se non è nota provare con quella dell\'account FTP.';
$txt['mysql_settings_database'] = 'Nome database MySQL';
$txt['mysql_settings_database_info'] = 'Inserire il nome del database in cui si vuole che SMF salvi i dati.<br />Se il database non esiste, lo script di installazione proverà a crearlo.';
$txt['mysql_settings_prefix'] = 'Prefisso tabelle MySQL';
$txt['mysql_settings_prefix_info'] = 'Il prefisso per tutte le tabelle del database serve per installare più forum nello stesso database. <b>Non installare più forum con lo stesso prefisso!</b>.';

$txt['user_settings'] = 'Crea l\'account di amministrazione';
$txt['user_settings_info'] = 'Lo script di installazione creerà ora un nuovo account di amministrazione.';
$txt['user_settings_username'] = 'Nome utente';
$txt['user_settings_username_info'] = 'Scegliere il nome con cui si vuole effettuare l\'accesso.<br />Questo non potrà essere cambiato in futuro, a differenza del nome visualizzato.';
$txt['user_settings_password'] = 'Password';
$txt['user_settings_password_info'] = 'Inserire la password desiderata e porre attenzione a ricordarsela!';
$txt['user_settings_again'] = 'Conferma password';
$txt['user_settings_again_info'] = '(solo per verifica)';
$txt['user_settings_email'] = 'Indirizzo e-mail';
$txt['user_settings_email_info'] = 'Fornire anche il proprio indirizzo e-mail. <b>Deve essere un indirizzo valido.</b>';
$txt['user_settings_database'] = 'Password database MySQL';
$txt['user_settings_database_info'] = 'Lo script di installazione necessita per ragioni di sicurezza della password del database per creare un account di amministrazione.';
$txt['user_settings_proceed'] = 'Concludi';

$txt['ftp_setup'] = 'Informazioni connessione FTP';
$txt['ftp_setup_info'] = 'Lo script di installazione può connettersi via FTP per impostare come scrivibili i file che ne hanno necessità. Se questo passo fallisce li si dovrà rendere scrivibili manualmente. Nota bene: la cifratura SSL non è ancora supportata.';
$txt['ftp_server'] = 'Server';
$txt['ftp_server_info'] = 'Inserire il nome e la porta del server FTP.';
$txt['ftp_port'] = 'Porta';
$txt['ftp_username'] = 'Nome utente';
$txt['ftp_username_info'] = 'Il nome utente con cui effettuare l\'accesso. <i>Non verrà salvato in alcun modo.</i>';
$txt['ftp_password'] = 'Password';
$txt['ftp_password_info'] = 'La password con cui effettuare l\'accesso. <i>Non verrà salvata in alcun modo.</i>';
$txt['ftp_path'] = 'Percorso di installazione';
$txt['ftp_path_info'] = 'È il percorso <i>relativo</i> usato nel server FTP.';
$txt['ftp_path_found_info'] = 'Il percorso nel riquadro superiore è stato rilevato automaticamente.';
$txt['ftp_connect'] = 'Connetti';
$txt['ftp_setup_why'] = 'A cosa serve questo passaggio?';
$txt['ftp_setup_why_info'] = 'Alcuni file devono essere scrivibili affinché SMF funzioni correttamente. Questo passaggio permette allo script di installazione di impostare tutto in automatico. Tuttavia, in alcuni casi, questo passaggio può fallire: impostare quindi manualmente i permessi a 777 (scrivibile, 755 su certi host) ai seguenti file:';
$txt['ftp_setup_again'] = 'per verificare se questi file sono scrivibili.';

$txt['error_php_too_low'] = 'Attenzione! Sembra che la versione di PHP installata sul server sia incompatibile con i <b>requisiti minimi di installazione</b> di SMF.<br />Se il server non è di proprietà, sarà necessario contattare il fornitore di hosting per aggiornarlo, o utilizzare un server differente. Altrimenti aggiornare il PHP a una versione più recente.<br /><br />Se si è certi che la versione di PHP è adatta, è possibile proseguire, anche se fortemente sconsigliato.';
$txt['error_missing_files'] = 'Impossibile trovare alcuni file di installazione nella cartella di questo script!<br /><br />Assicurarsi di aver effettuato il caricamento di tutto il pacchetto di installazione incluso il file sql e riprovare.';
$txt['error_session_save_path'] = 'Si raccomanda di informare il proprio fornitore di hosting che il valore di <b>session.save_path specificato in php.ini</b> non è valido! Deve essere modificato in modo che punti a una cartella <b>esistente</b> e <b>con i permessi di scrittura</b> per l\'utente con cui viene avviato PHP.<br />';
$txt['error_windows_chmod'] = 'Si è su di un server Windows e alcuni file importanti non sono scrivibili. Per favore chiedere al fornitore di hosting di impostare i <b>permessi di scrittura</b> per l\'utente con cui viene avviato PHP per i file della propria installazione di SMF. I seguenti file o cartelle devono essere resi scrivibili:';
$txt['error_ftp_no_connect'] = 'Impossibile connettersi al server FTP con i dati forniti.';
$txt['error_mysql_connect'] = 'Impossibile connettersi al database MySQL con i dati forniti.<br /><br />Se non si è certi dei parametri da inserire contattare il proprio fornitore di hosting.';
$txt['error_mysql_too_low'] = 'La versione del database MySQL usata è molto vecchia e non soddisfa i requisiti minimi di SMF.<br /><br />Si raccomanda di richiedere al proprio fornitore di hosting di aggiornare il database o di fornirne uno alternativo più recente. Nel caso si rifiuti, rivolgersi a un altro fornitore di hosting.';
$txt['error_mysql_database'] = 'Lo script di installazione non è riuscito ad accedere al database &quot;<i>%s</i>&quot;. Con alcuni fornitori di hosting, è necessario creare il database dal pannello di amministrazione del servizio prima che SMF lo possa usare. Altri ancora aggiungono prefissi - come il proprio nome utente - al nome del database.';
$txt['error_mysql_queries'] = 'Alcune interrogazioni non sono state eseguite correttamente. Questo può essere causato da una versione non supportata (perché in sviluppo o vecchia) di MySQL.<br /><br />Informazioni tecniche sulle interrogazioni:';
$txt['error_mysql_queries_line'] = 'Linea #';
$txt['error_mysql_missing'] = 'Lo script di installazione non è riuscito a trovare il supporto a MySQL in PHP. Si raccomanda di richiedere al proprio fornitore di hosting di assicurarsi che PHP sia stato compilato con il supporto a MySQL, o che la libreria opportuna sia stata caricata.';
$txt['error_session_missing'] = 'Lo script di installazione non è riuscito a trovare il supporto alle sessioni per l\'installazione PHP sul server. Chiedere al proprio fornitore di hosting di assicurarsi che PHP sia stato compilato con il supporto alle sessioni (in effetti, è stato esplicitamente compilato senza).';
$txt['error_user_settings_again_match'] = 'Sono state inserite due password diverse!';
$txt['error_user_settings_taken'] = 'Spiacente, un altro utente si è già registrato con quel nome utente e/o password.<br /><br />Il nuovo account non è stato creato.';
$txt['error_user_settings_query'] = 'Si è verificato un errore nel database durante la creazione di un account di amministrazione. L\'errore è:';
$txt['error_subs_missing'] = 'Impossibile trovare il file Sources/Subs.php. Assicurarsi che il caricamento sia stato eseguito correttamente e ritentare.';
$txt['error_mysql_alter_priv'] = 'L\'account MySQL specificato non ha i permessi per fare ALTER, CREATE, e/o DROP di tabelle nel database; ciò invece è necessario per il corretto funzionamento di SMF.';
$txt['error_versions_do_not_match'] = 'Lo script di installazione ha rilevato un\'altra versione di SMF installata con le informazioni specificate. Se si sta cercando di effettuare un aggiornamento bisogna utilizzare lo script di upgrade, non quello di installazione.<br /><br />Altrimenti, si possono utilizzare informazioni diverse, o creare una copia di sicurezza e poi eliminare i dati attualmente nel database.';
$txt['error_mod_security'] = 'Lo script di installazione ha rilevato che il modulo mod_security è installato sul server web. Mod_security bloccherà i moduli inviati prima che SMF possa fare qualcosa. SMF ha uno scanner di sicurezza interno che funzionerà più efficacemente di mod_security e che non bloccherà i moduli inviati.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">Ulteriori informazioni su come disattivare mod_security</a>';
$txt['error_utf8_mysql_version'] = 'La versione corrente del database non gestisce l\'utilizzo della codifica caratteri UTF-8. È ancora possibile installare SMF senza problemi, ma solo senza attivare il supporto UTF-8. Se in futuro si volesse passare a UTF-8 (ad es. dopo che il server MySQL del forum è stato aggiornato a una versione >= 4.1), è possibile convertire il forum in UTF-8 tramite il pannello di amministrazione.';

?>