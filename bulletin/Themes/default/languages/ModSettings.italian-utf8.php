<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Questa pagina permette di cambiare le impostazioni delle funzionalità, dei pacchetti di modifiche e delle opzioni di base del forum. Consultare le <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">impostazioni del tema</a> per altre opzioni. Fare clic sull\'icona di aiuto per ulteriori informazioni su di una opzione.';

$txt['mods_cat_features'] = 'Funzionalità di base';
$txt['pollMode'] = 'Modalità sondaggio';
$txt['smf34'] = 'Disabilita i sondaggi';
$txt['smf32'] = 'Abilita i sondaggi';
$txt['smf33'] = 'Visualizza i sondaggi esistenti come discussioni';
$txt['allow_guestAccess'] = 'Permetti agli utenti non registrati di navigare nel forum';
$txt['userLanguage'] = 'Abilita la scelta della lingua da parte dell\'utente';
$txt['allow_editDisplayName'] = 'Permetti agli utenti di modificare il proprio nome visualizzato';
$txt['allow_hideOnline'] = 'Permetti ai non amministratori di nascondere il proprio stato online';
$txt['allow_hideEmail'] = 'Permetti agli utenti di nascondere il proprio indirizzo e-mail agli altri utenti tranne che agli amministratori';
$txt['guest_hideContacts'] = 'Non mostrare i dettagli dei contatti degli utenti agli utenti non registrati';
$txt['titlesEnable'] = 'Abilita i titoli personalizzati';
$txt['enable_buddylist'] = 'Abilita le liste di amici';
$txt['default_personalText'] = 'Testo personale predefinito';
$txt['max_signatureLength'] = 'Numero massimo di caratteri ammessi nella firma <div class="smalltext">(0 per non impostarlo)</div>';
$txt['number_format'] = 'Formato predefinito dei numeri';
$txt['time_format'] = 'Formato predefinito della data';
$txt['time_offset'] = 'Ore di differenza rispetto all\'orologio del server <div class="smalltext">(si sommerà al valore specifico dell\'utente)</div>';
$txt['failed_login_threshold'] = 'Numero massimo di accessi falliti';
$txt['lastActive'] = 'Numero massimo di minuti per cui un utente viene mostrato online';
$txt['trackStats'] = 'Traccia le statistiche giornaliere';
$txt['hitStats'] = 'Conta le pagine visitate ogni giorno (le statistiche devono essere abilitate)';
$txt['enableCompressedOutput'] = 'Attiva la compressione gzip';
$txt['databaseSession_enable'] = 'Usa il database per le sessioni';
$txt['databaseSession_loose'] = 'Permetti ai browser di tornare indietro nelle pagine in cache';
$txt['databaseSession_lifetime'] = 'Secondi prima della scadenza di una sessione non usata';
$txt['enableErrorLogging'] = 'Attiva registro degli errori';
$txt['cookieTime'] = 'Durata predefinita del cookie di accesso (in minuti)';
$txt['localCookies'] = 'Attiva il salvataggio locale dei cookie <div class="smalltext">(le SSI non funzioneranno correttamente con questa opzione attiva)</div>';
$txt['globalCookies'] = 'Usa cookie indipendenti dal sottodominio <div class="smalltext">(disattivare prima i cookie locali!)</div>';
$txt['securityDisable'] = 'Disattiva la sicurezza per l\'amministrazione';
$txt['send_validation_onChange'] = 'Richiedi una nuova attivazione dopo il cambio di e-mail';
$txt['approveAccountDeletion'] = 'Richiedi approvazione dell\'amministratore quando un utente elimina il proprio account';
$txt['autoOptDatabase'] = 'Numero di giorni dopo cui ottimizzare le tabelle <div class="smalltext">(0 per disattivare)</div>';
$txt['autoOptMaxOnline'] = 'Numero massimo di utenti connessi durante l\'ottimizzazione <div class="smalltext">(0 per non impostarlo)</div>';
$txt['autoFixDatabase'] = 'Ripara automaticamente le tabelle corrotte';
$txt['allow_disableAnnounce'] = 'Permetti agli utenti di disabilitare gli annunci';
$txt['disallow_sendBody'] = 'Non permettere di inviare il testo dei messaggi nelle notifiche';
$txt['modlog_enabled'] = 'Registro delle azioni di moderazione';
$txt['queryless_urls'] = 'URL ottimizzati per i motori di ricerca <div class="smalltext"><b>Solo con Apache!</b></div>';
$txt['max_image_width'] = 'Larghezza massima delle immagini nei messaggi (0 = disattivato)';
$txt['max_image_height'] = 'Altezza massima delle immagini nei messaggi (0 = disattivato)';
$txt['mail_type'] = 'Sistema di invio e-mail';
$txt['mail_type_default'] = '(valore predefinito PHP)';
$txt['smtp_host'] = 'Server SMTP';
$txt['smtp_port'] = 'Porta SMTP';
$txt['smtp_username'] = 'Nome utente SMTP';
$txt['smtp_password'] = 'Password SMTP';
$txt['enableReportPM'] = 'Abilita rapporto messaggi privati';
$txt['max_pm_recipients'] = 'Numero massimo di destinatari permessi per un messaggio privato. <div class="smalltext">(0 per nessun limite, gli admin sono esclusi)</div>';
$txt['pm_posts_verification'] = 'Numero di messaggi sotto al quale gli utenti devono inserire il codice per inviare messaggi privati. <div class="smalltext">(0 per nessun limite, gli admin sono esclusi)</div>';
$txt['pm_posts_per_hour'] = 'Numero di messaggi privati che un utente può inviare in un\'ora. <div class="smalltext">(0 per nessun limite, gli amministratori sono esclusi)</div>';

$txt['mods_cat_layout'] = 'Visualizzazione e opzioni';
$txt['compactTopicPagesEnable'] = 'Numero massimo di link di pagine visualizzati';
$txt['smf235'] = 'Pagine contigue da visualizzare:';
$txt['smf236'] = 'da visualizzare';
$txt['todayMod'] = 'Attiva la funzionalità &quot;Oggi&quot;';
$txt['smf290'] = 'Disattivata';
$txt['smf291'] = 'Solo oggi';
$txt['smf292'] = 'Ieri e oggi';
$txt['topbottomEnable'] = 'Attiva i pulsanti Su/Giù';
$txt['onlineEnable'] = 'Visualizza stato online/offline nei messaggi e nei MP';
$txt['enableVBStyleLogin'] = 'Visualizza l\'accesso rapido in ogni pagina';
$txt['defaultMaxMembers'] = 'Utenti per pagina nell\'elenco degli utenti';
$txt['timeLoadPageEnable'] = 'Visualizza il tempo impiegato per generare la pagina';
$txt['disableHostnameLookup'] = 'Disattiva la ricerca dei nomi degli host';
$txt['who_enabled'] = 'Attiva la lista &quot;chi è online&quot;';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Modalità karma';
$txt['smf64'] = 'Disattiva karma|Attiva karma totale|Attiva karma positivi/negativi';
$txt['karmaMinPosts'] = 'Imposta il numero minimo di messaggi necessario per modificare i karma';
$txt['karmaWaitTime'] = 'Imposta l\'attesa in ore';
$txt['karmaTimeRestrictAdmins'] = 'Imponi agli amministratori di rispettare il tempo di attesa';
$txt['karmaLabel'] = 'Etichetta per il karma';
$txt['karmaApplaudLabel'] = 'Etichetta per il karma &quot;elogia&quot;';
$txt['karmaSmiteLabel'] = 'Etichetta per il karma &quot;bastona&quot;';

$txt['caching_information'] = '<div align="center"><b><u>Importante! Leggere attentamente prima di attivare queste funzioni.</b></u></div><br />
	SMF gestisce il caching attraverso l\'utilizzo di acceleratori. GLi acceleratori gestiti al momento sono:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Non Zend Optimizer)</li>
	</ul>
	Il caching funzionerà sul vostro server solo se si ha PHP compilato con uno degli ottimizzatori elencati, o se si ha a disposizione memcache.
	<br /><br />
	SMF utilizza il caching a vari livelli. Più alto è il livello di caching attivato e maggiore sarà il tempo di CPU consumato
	nel recuperare le informazioni in cache. Se il caching è disponibile sulla propria macchina, si suggerisce di provare inizialmente il caching a livello 1.
	<br /><br />
	Si noti che se si utilizza memcached, è necessario fornire i dettagli del server nelle impostazioni che seguono. Vanno inserite come una lista separata da virgole
	come mostrato nell\'esempio seguente:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Si noti che se non viene specificata alcuna porta, SMF utilizzerà la porta 11211. SMF tenterà di realizzare un bilanciamento rozzo/casuale del carico tra i server.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF non ha trovato alcun acceleratore compatibile sul server.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF ha trovato APC installato sul server.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF ha trovato eAccelerator installato sul server.';
$txt['detected_MMCache'] = '<b style="color: green">SMF ha trovato MMCache installato sul server.';
$txt['detected_Zend'] = '<b style="color: green">SMF ha trovato Zend installato sul server.';
$txt['detected_Memcached'] = '<b style="color: green">SMF ha trovato Memcached installato sul server.';

$txt['cache_enable'] = 'Livello caching';
$txt['cache_off'] = 'Nessuno';
$txt['cache_level1'] = 'Livello caching 1';
$txt['cache_level2'] = 'Livello caching 2 (sconsigliato)';
$txt['cache_level3'] = 'Livello caching 3 (sconsigliato)';
$txt['cache_memcached'] = 'Impostazioni memcache';

?>