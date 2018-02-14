<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Med denne side kan du ændre funktioner, mods, og standardindstillinger i dit forum.  Se venligst <a href="' . $scripturl . '?action=theme;sa=settings;id=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">Aktuel Tema</a> for flere funktioner.  Klik på hjælpeikonet ud for hver indstilling for mere information.';

$txt['mods_cat_features'] = 'standard forum muligheder';
$txt['pollMode'] = 'Afstemingsmode';
$txt['smf34'] = 'Deaktiver afsteminger';
$txt['smf32'] = 'Aktiver afsteminger';
$txt['smf33'] = 'Vis i stedet eksisterende afstemninger som emner';
$txt['allow_guestAccess'] = 'Tillad gæster at browse forumet';
$txt['userLanguage'] = 'Aktiver bruger-valgbar sprogsupport';
$txt['allow_editDisplayName'] = 'Tillad brugere at redigere deres viste navn?';
$txt['allow_hideOnline'] = 'Tillad brugere der ikke er administratorer at skjule deres online status?';
$txt['allow_hideEmail'] = 'Tillad brugere at skjule deres e-mail for enhver bortset fra admins?';
$txt['guest_hideContacts'] = 'Vis ikke kontaktinformatinsdetaljer af medlemmer overfor gæster';
$txt['titlesEnable'] = 'Aktiver valgbare titler';
$txt['enable_buddylist'] = 'Aktivér vennelister';
$txt['default_personalText'] = 'Personlig standardtekst';
$txt['max_signatureLength'] = 'Det maksimale antal karakterer i signaturer<div class="smalltext">(0 for ubegrænset)</div>';
$txt['number_format'] = 'Standard talformat';
$txt['time_format'] = 'Standard tidsformat';
$txt['time_offset'] = 'Tidsforskydning<div class="smalltext">(tilføjet til medlemsspecifikke funktioner.)</div>';
$txt['failed_login_threshold'] = 'Maksimalt antal login forsøg';
$txt['lastActive'] = 'Brugere online de seneste xx minutter';
$txt['trackStats'] = 'Spor daglig statistik';
$txt['hitStats'] = 'Spor daglige hits (statistik skal være aktiveret)';
$txt['enableCompressedOutput'] = 'Aktiver komprimeret output';
$txt['databaseSession_enable'] = 'Brug databasedrevne sessioner';
$txt['databaseSession_loose'] = 'Tillad caching af besøgte sider';
$txt['databaseSession_lifetime'] = 'Sekunder før en ubrugt session udløber';
$txt['enableErrorLogging'] = 'Aktiver fejllog';
$txt['cookieTime'] = 'Standard login cookietid (i minutter)';
$txt['localCookies'] = 'Aktiver lokal lagring af cookies<div class="smalltext">(SSI virker ikke med dette aktiveret.)</div>';
$txt['globalCookies'] = 'Brug subdomain-uafhængige cookies<div class="smalltext">(afbryd lokale cookies først!)</div>';
$txt['securityDisable'] = 'Deaktiver administrationssikkerhed';
$txt['send_validation_onChange'] = 'Kræv genaktivering hvis brugere skifter e-mail';
$txt['approveAccountDeletion'] = 'Forlang godkendelse fra administrator, hvis brugere sletter deres konto';
$txt['autoOptDatabase'] = 'Optimer tabeller for hver antal dage?<div class="smalltext">(0 for at deaktivere.)</div>';
$txt['autoOptMaxOnline'] = 'Maksimum antal brugere online ved optimering<div class="smalltext">(0 for ingen max.)</div>';
$txt['autoFixDatabase'] = 'Fix automatisk ødelagte tabeller';
$txt['allow_disableAnnounce'] = 'Tillad brugere at deaktivere beskeder fra nyhedscenteret';
$txt['disallow_sendBody'] = 'Tillad ikke tekstindhold i mails sendt fra &quot;abonnementbeskeder&quot;?';
$txt['modlog_enabled'] = 'Log moderatorændringer';
$txt['queryless_urls'] = 'Søgemaskine-venlige URLs<div class="smalltext"><b>Kun på Apacheservere!</b></div>';
$txt['max_image_width'] = 'Max bredde på postede billeder (0 = ubegrænset)';
$txt['max_image_height'] = 'Max højde på postede billeder (0 = ubegrænset)';
$txt['mail_type'] = 'Afsendelsesmetode for mails';
$txt['mail_type_default'] = '(PHP standard)';
$txt['smtp_host'] = 'SMTP server';
$txt['smtp_port'] = 'SMTP port';
$txt['smtp_username'] = 'SMTP brugernavn';
$txt['smtp_password'] = 'SMTP kodeord';
$txt['enableReportPM'] = 'Aktivér anmeldelse af personlige beskeder';
$txt['max_pm_recipients'] = 'Det maksimale antal modtagere tilladt i personlige beskeder.<div class="smalltext">(0 for ubegrænset, administratorer er undtaget)</div>';
$txt['pm_posts_verification'] = 'Det maksimale antal beskeder brugere må sende, før de skal kvittere med godkendelseskode.<div class="smalltext">(0 for ubegrænset, administratorer er undtaget)</div>';
$txt['pm_posts_per_hour'] = 'Det maksimale antal beskeder en bruger kan sende i timen.<div class="smalltext">(0 for ubegrænset, moderatorer er undtaget)</div>';

$txt['mods_cat_layout'] = 'Layout og indstillinger';
$txt['compactTopicPagesEnable'] = 'Begræns antal af viste sidelinks';
$txt['smf235'] = 'Fortløbende antal sider at vise:';
$txt['smf236'] = 'viser';
$txt['todayMod'] = 'Aktiver &quot;I dag&quot; funktion';
$txt['smf290'] = 'Deaktiveret';
$txt['smf291'] = 'Kun i dag';
$txt['smf292'] = 'I dag &amp; i går';
$txt['topbottomEnable'] = 'Aktiver Gå op/Gå ned knapper';
$txt['onlineEnable'] = 'Vis online/offline i beskeder og PM\'s';
$txt['enableVBStyleLogin'] = 'Vis hurtig-login på alle sider';
$txt['defaultMaxMembers'] = 'Antal medlemmer per side i medlemslisten';
$txt['timeLoadPageEnable'] = 'Vist indlæsningstid for hver side';
$txt['disableHostnameLookup'] = 'Deaktiver indhenting af hostnavn?';
$txt['who_enabled'] = 'Aktiver &quot;brugere online&quot; listen';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Karma mode';
$txt['smf64'] = 'Deaktivér karma|Aktivér karma i alt|Aktiver karma positiv/negativ';
$txt['karmaMinPosts'] = 'Sæt minimum posteringer behøvet for at kunne give karma';
$txt['karmaWaitTime'] = 'Sæt ventetid i timer';
$txt['karmaTimeRestrictAdmins'] = 'Administratorer også begrænset af ventetid?';
$txt['karmaLabel'] = 'Karma mærkat';
$txt['karmaApplaudLabel'] = 'Karma: god gestus label';
$txt['karmaSmiteLabel'] = 'Karma: dårlig gestus label';

$txt['caching_information'] = '<div align="center"><b><u>Vigtigt! Læs dette før du aktiverer denne feature.</b></u></div><br />
	SMF understøtter caching gennem brug af acceleratorer. De aktuelt understøttede accelerators inkluderer:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Ikke Zend Optimizer)</li>
	</ul>
	Caching vil kun virke på din server, hvis den har PHP kompileret med en af de ovenstående optimeringer, eller hvis du har memcache tilgængeligt. <br /><br />
	SMF bruger caching i forskellige niveauer. Jo højere cacheniveau, jo mere CPU tid vil der blive brugt til at hente cached information. Hvis caching er tilgængeligt på din maskine, er det anbefalet at du først forsøger caching på niveau 1.
	<br /><br />
	Bemærk at hvis du bruger memcached, skal du angive serverdetaljerne i indstillingerne herunder. Disse skal skrives som en kommasepareret liste som vist i eksemplet herunder:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Bemærk at SMF vil bruge port 11211, hvis der ikke er angivet nogen port herunder. SMF vil forsøge at bruge rå/tilfældig load balancing på tværs af serverene.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF har ikke været i stand til at detekte en kompatibel accelerator på din server.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF detektet at din server har APC installeret.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF har detektet at din server har eAccelerator installeret.';
$txt['detected_MMCache'] = '<b style="color: green">SMF har detektet at din server har MMCache installeret.';
$txt['detected_Zend'] = '<b style="color: green">SMF har detektet at din server har Zend installeret.';
$txt['detected_Memcached'] = '<b style="color: green">SMF har detekteret at din server har Memcached installeret. ';

$txt['cache_enable'] = 'Caching niveau';
$txt['cache_off'] = 'Ingen caching';
$txt['cache_level1'] = 'Niveau 1 Caching';
$txt['cache_level2'] = 'Niveau 2 Caching (Ikke anbefalet)';
$txt['cache_level3'] = 'Niveau 3 Caching (Ikke anbefalet)';
$txt['cache_memcached'] = 'Memcache indstillinger';

?>