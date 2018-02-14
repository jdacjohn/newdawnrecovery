<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Denne siden lar deg redigere innstillingene for installerte modifikasjoner og standardfunksjoner p&aring; forumet.  Se p&aring; <a href="' . $scripturl . '?action=theme;sa=admin;id=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">designinnstillinger</a> for flere innstillinger. Klikk p&aring; hjelp-ikonene for mer informasjon om en innstilling.';

$txt['mods_cat_features'] = 'Grunnleggende forumfunksjoner';
$txt['pollMode'] = 'Avstemninger';
$txt['smf34'] = 'Deaktivert';
$txt['smf32'] = 'Aktivert';
$txt['smf33'] = 'Vis avstemninger som emner';
$txt['allow_guestAccess'] = 'Tillat at gjester &aring; bla gjennom forumene';
$txt['userLanguage'] = 'La medlemmene f&aring; velge spr&aring;k';
$txt['allow_editDisplayName'] = 'La medlemmene f&aring; redigere visningsnavn?';
$txt['allow_hideOnline'] = 'La ikke-administratorer f&aring; skjule sin online-status?';
$txt['allow_hideEmail'] = 'La medlemmene f&aring; skjule sin e-postadresse (unntatt admin)?';
$txt['guest_hideContacts'] = 'Ikke vis medlemmers kontakt-informasjon til gjester';
$txt['titlesEnable'] = 'Aktivere egendefinerte titler';
$txt['enable_buddylist'] = 'Aktivere venneliste';
$txt['default_personalText'] = 'Forvalg for personlig tekst';
$txt['max_signatureLength'] = 'Maksimalt antall tegn tillatt i signaturer <div class="smalltext">(0 for ubegrenset)</div>';
$txt['number_format'] = 'Standard tallformat';
$txt['time_format'] = 'Standard tidsformat';
$txt['time_offset'] = 'Generelt tidsavvik i forhold til serverens klokke <div class="smalltext">(legges til hvert medlems egne tidsavvik-innstilling.)</div>';
$txt['failed_login_threshold'] = 'Terskel for mislykkede innlogginger';
$txt['lastActive'] = 'Terskel for p&aring;logget tid';
$txt['trackStats'] = 'Loggf&oslash;r daglig statistikk';
$txt['hitStats'] = 'Loggf&oslash;r daglige sidetreff (statistikk m&aring; v&aelig;re aktivert)';
$txt['enableCompressedOutput'] = 'Aktiver kompriming av utdata';
$txt['databaseSession_enable'] = 'Bruk databasen for &aring; lagre sesjoner';
$txt['databaseSession_loose'] = 'La nettlesere g&aring; tilbake til sider i sitt lokale mellomlager';
$txt['databaseSession_lifetime'] = 'Sekunder f&oslash;r en ubrukt sesjon avsluttes';
$txt['enableErrorLogging'] = 'Aktiver loggf&oslash;ring av feil';
$txt['cookieTime'] = 'Standard varighet p&aring; innloggingscookie (informasjonskapsel) i minutter';
$txt['localCookies'] = 'Aktiver lokal lagring av informasjonskapsler <div class="smalltext">(SSI vil ikke fungere skikkelig med dette aktivert.)</div>';
$txt['globalCookies'] = 'Benytt informasjonskapsler som er uavhengige av subdomener <div class="smalltext">(deaktiver lokal lagring av informasjonskapsler f&oslash;rst!)</div>';
$txt['securityDisable'] = 'Deaktiver ekstra sikkerhet for administrasjon';
$txt['send_validation_onChange'] = 'Krev reaktivering etter endring av e-postadresse';
$txt['approveAccountDeletion'] = 'Krev godkjenning fra administrator n&aring;r et medlem sletter sin konto';
$txt['autoOptDatabase'] = 'Antall dager mellom hver gang tabellene blir optimalisert<div class="smalltext">(0 for deaktivert.)</div>';
$txt['autoOptMaxOnline'] = 'Maks antall brukere p&aring;logget ved optimalisering<div class="smalltext">(0 for ubegrenset.)</div>';
$txt['autoFixDatabase'] = 'Reparer automatisk &oslash;delagte tabeller';
$txt['allow_disableAnnounce'] = 'La brukere reservere seg mot kunngj&oslash;ringer';
$txt['disallow_sendBody'] = 'Ikke tillat innleggstekst i varslinger?';
$txt['modlog_enabled'] = 'Loggf&oslash;r moderatorhandlinger';
$txt['queryless_urls'] = 'Bruk s&oslash;kemotor-vennlige URLer <div class="smalltext"><b>Fungerer kun p&aring; Apache-servere!</b></div>';
$txt['max_image_width'] = 'Maks bredde p&aring; opplastede bilder (0 = ubegrenset)';
$txt['max_image_height'] = 'Maks h&oslash;yde p&aring; opplastede bilder (0 = ubegrenset)';
$txt['mail_type'] = 'Type e-post';
$txt['mail_type_default'] = '(standard for PHP)';
$txt['smtp_host'] = 'SMTP-server';
$txt['smtp_port'] = 'SMTP-port';
$txt['smtp_username'] = 'Brukernavn for SMTP';
$txt['smtp_password'] = 'Passord for SMTP';
$txt['enableReportPM'] = 'Tillat rapportering av personlige meldinger';
$txt['max_pm_recipients'] = 'Maksimalt antall mottakere tillatt til en personlig melding.<div class="smalltext">(0 for ingen grense, administrator er fritatt fra regel)</div>';
$txt['pm_posts_verification'] = 'Grense på innlegg som brukere må ha for å sende personlige meldinger.<div class="smalltext">(0 for ingen grense, administratorer er unntatt)</div>';
$txt['pm_posts_per_hour'] = 'Antall personlige meldinger som en bruker kan sende i løpet av 1 time.<div class="smalltext">(0 for ingen grense, moderatorer er unntatt)</div>';

$txt['mods_cat_layout'] = 'Layout og alternativer';
$txt['compactTopicPagesEnable'] = 'Begrens antall lenker for sidetall';
$txt['smf235'] = 'Antall tilgrensende sider &aring; vise:';
$txt['smf236'] = 'til &aring; vises';
$txt['todayMod'] = 'Aktiver &quot;I dag&quot;-funksjonen';
$txt['smf290'] = 'Deaktivert';
$txt['smf291'] = 'Bare i dag';
$txt['smf292'] = 'I dag og i g&aring;r';
$txt['topbottomEnable'] = 'Vis knapper for Til toppen/Til bunnen';
$txt['onlineEnable'] = 'Vise innlogget/ikke innlogget i innlegg og PMer';
$txt['enableVBStyleLogin'] = 'Vis hurtiginnlogging p&aring; alle sider';
$txt['defaultMaxMembers'] = 'Medlemmer per side i medlemslista';
$txt['timeLoadPageEnable'] = 'Vise tiden det tok &aring; generere hver side';
$txt['disableHostnameLookup'] = 'Deaktiver s&oslash;k etter vertsnavn?';
$txt['who_enabled'] = 'Aktiver liste over Hvem er p&aring;logget';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Karma-modus';
$txt['smf64'] = 'Deaktiver karma|Aktiver total karma|Aktiver positiv/negativ karma';
$txt['karmaMinPosts'] = 'Antall innlegg som trengs for &aring; endre karma';
$txt['karmaWaitTime'] = 'Ventetid i timer';
$txt['karmaTimeRestrictAdmins'] = 'Bruk ventetid ogs&aring; for administratorer';
$txt['karmaLabel'] = 'Merkelapp for karma';
$txt['karmaApplaudLabel'] = 'Merkelapp for karma-applaus';
$txt['karmaSmiteLabel'] = 'Merkelapp for karma-lusing';

$txt['caching_information'] = '<div align="center"><b><u>Viktig! Les dette f&oslash;r du aktiverer disse funksjonene.</b></u></div><br />
	SMF st&oslash;tter minnelagring via ulike aksleratorer. De som st&oslash;ttes forel&oslash;pig er:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	</ul>
	Minnelagring vil kun fungere om du har PHP kompilert sammen med de nevnte ovenfor eller har aktivert memcache. <br /><br />
	SMF utf&oslash;rer minnelagring p&aring; ymse niv&aring;er. Desto h&oslash;yere niv&aring;et er, desto mer maskinkraft vil bli brukt
	for &aring; hente lagret informasjon. Dersom minnelagring er tilgjengelig p&aring; datamaskinen din, b&oslash;r du sette niv&aring;et til 1.
	<br /><br />
	Merk at dersom du bruker memcatche m&aring; du fylle inn serverdetaljene i innstillingene under. Dette skal skrives inn med komma som skilletegn p&aring; denne m&aring;ten:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Merk at dersom ingen port er spesifisert, vil SMF bruke port 11211. SMF vil pr&oslash;ve &aring; bruke balansert maskinkraft fordelt over serverne.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF kunne ikke finne noen av de kompatible aksleratorene p&aring; serveren.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF har oppdaget at du har APC installert.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF har oppdaget at du har eAccelerator installert.';
$txt['detected_MMCache'] = '<b style="color: green">SMF har oppdaget at du har MMCache installert.';
$txt['detected_Zend'] = '<b style="color: green">SMF har oppdaget at du har Zend installert.';
$txt['detected_Memcached'] = '<b style="color: green">SMF har oppdaget at din server har Memcached installert. </b>';

$txt['cache_enable'] = 'Minnelagringsniv&aring;';
$txt['cache_off'] = 'Deaktivert';
$txt['cache_level1'] = 'Niv&aring; 1';
$txt['cache_level2'] = 'Niv&aring; 2 (Ikke anbefalt)';
$txt['cache_level3'] = 'Niv&aring; 3 (Ikke anbefalt)';
$txt['cache_memcached'] = 'Innstillinger for Memcache';

?>