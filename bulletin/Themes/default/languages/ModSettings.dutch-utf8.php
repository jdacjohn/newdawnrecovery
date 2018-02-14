<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Op deze pagina kun je alle features, mods, en basisopties van het forum aanpassen. Bekijk de <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">themainstellingen</a> voor meer opties. Klik op de helpicoontjes voor meer informatie over een instelling.';

$txt['mods_cat_features'] = 'Basisinstellingen';
$txt['pollMode'] = 'Pollmodus';
$txt['smf34'] = 'Polls deactiveren';
$txt['smf32'] = 'Polls activeren';
$txt['smf33'] = 'Toon polls als topics';
$txt['allow_guestAccess'] = 'Sta gasten toe het forum te bekijken';
$txt['userLanguage'] = 'Activeer voorkeur taalpakket';
$txt['allow_editDisplayName'] = 'Sta gebruikers toe om hun getoonde naam te wijzigen';
$txt['allow_hideOnline'] = 'Sta leden toe hun online status te verbergen voor niet-beheerders';
$txt['allow_hideEmail'] = 'Gebruikers mogen e-mailadres verbergen voor iedereen (behalve voor de admin)';
$txt['guest_hideContacts'] = 'Verberg contactgegevens van de leden voor gasten';
$txt['titlesEnable'] = 'Extra titels activeren';
$txt['enable_buddylist'] = 'Vriendenlijsten activeren';
$txt['default_personalText'] = 'Standaard persoonlijke tekst';
$txt['max_signatureLength'] = 'Maximum aantal karakters per handtekening<div class="smalltext">(0 voor geen maximum)</div>';
$txt['number_format'] = 'Standaard nummerformaat';
$txt['time_format'] = 'Standaard tijdsinstelling';
$txt['time_offset'] = 'Algemene tijdsafwijking <div class="smalltext">(toegevoegd aan lidspecifieke tijdsafwijking)</div>';
$txt['failed_login_threshold'] = 'Mislukte inlogdrempel';
$txt['lastActive'] = 'Gebruikers online-tijdsdrempel';
$txt['trackStats'] = 'Statistieken activeren';
$txt['hitStats'] = 'Houdt het aantal pageviews bij (statistieken moet actief staan)';
$txt['enableCompressedOutput'] = 'Gecomprimeerde output activeren';
$txt['databaseSession_enable'] = 'Gebruik database-gebaseerde sessies';
$txt['databaseSession_loose'] = 'Browsers mogen terug naar pagina\'s uit de cache';
$txt['databaseSession_lifetime'] = 'Seconden voordat een ongebruikte sessie ongeldig wordt';
$txt['enableErrorLogging'] = 'Activeer het loggen van fouten';
$txt['cookieTime'] = 'Standaardduur van het logincookie (in minuten)';
$txt['localCookies'] = 'Sla cookies lokaal op<div class="smalltext">(SSI zal niet werken met deze optie aan)</div>';
$txt['globalCookies'] = 'Cookies onafhankelijk van het subdomein gebruiken<div class="smalltext">Let op: lokaal opslaan van cookies uitschakelen!</div>';
$txt['securityDisable'] = 'Administratiebeveiliging uitschakelen';
$txt['send_validation_onChange'] = 'E-mail een nieuw wachtwoord als een lid zijn / haar e-mailadres wijzigt';
$txt['approveAccountDeletion'] = 'Vereis goedkeuring van een forumbeheerder wanneer een lid zijn account verwijdert';
$txt['autoOptDatabase'] = 'Om de hoeveel dagen tabellen optimaliseren?<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['autoOptMaxOnline'] = 'Maximaal aantal gebruikers online tijdens optimalisatie<div class="smalltext">(0 voor geen limiet)</div>';
$txt['autoFixDatabase'] = 'Automatisch defecte tabellen repareren';
$txt['allow_disableAnnounce'] = 'Gebruikers toestaan om notificatie van aankondigingen uit te schakelen';
$txt['disallow_sendBody'] = 'Sta geen berichttekst in notificaties toe';
$txt['modlog_enabled'] = 'Log moderatieacties';
$txt['queryless_urls'] = 'Zoekmachine-vriendelijke URLs<div class="smalltext"><b>Alleen Apache!</b></div>';
$txt['max_image_width'] = 'Maximumbreedte van afbeeldingen (0 voor geen limiet)';
$txt['max_image_height'] = 'Maximumhoogte van afbeeldingen (0 voor geen limiet)';
$txt['mail_type'] = 'Mailtype';
$txt['mail_type_default'] = '(PHP-standaard)';
$txt['smtp_host'] = 'SMTP-server';
$txt['smtp_port'] = 'SMTP-poort';
$txt['smtp_username'] = 'SMTP-gebruikersnaam';
$txt['smtp_password'] = 'SMTP-wachtwoord';
$txt['enableReportPM'] = 'Melden van persoonlijke berichten inschakelen';
$txt['max_pm_recipients'] = 'Maximum aantal ontvangers per persoonlijk bericht toegestaan:<div class="smalltext">(0 voor geen limiet, beheerders uitgezonderd)</div>';
$txt['pm_posts_verification'] = 'Aantal berichten-grens waaronder gebruikers een code in moeten voeren bij het versturen van persoonlijke berichten<div class="smalltext">(0 voor geen limiet, beheerders uitgezonderd)</div>';
$txt['pm_posts_per_hour'] = 'Aantal persoonlijke berichten dat een gebruiker binnen een uur mag verzenden<div class="smalltext">(0 voor geen limiet, beheerders uitgezonderd)</div>';

$txt['mods_cat_layout'] = 'Lay-out';
$txt['compactTopicPagesEnable'] = 'Activeer de compacte weergave';
$txt['smf235'] = 'Wijze van weergave bij meerdere pagina\'s:';
$txt['smf236'] = 'om weer te geven';
$txt['todayMod'] = 'Vandaag-mod activeren';
$txt['smf290'] = 'Uitgeschakeld';
$txt['smf291'] = 'Alleen \'Vandaag\'';
$txt['smf292'] = '\'Vandaag en \'Gisteren\'';
$txt['topbottomEnable'] = 'De omlaag/omhoog-knoppen activeren';
$txt['onlineEnable'] = 'Toon online/offline in berichten en PM';
$txt['enableVBStyleLogin'] = 'Toon snel-inloggen op elk venster';
$txt['defaultMaxMembers'] = 'Leden per pagina in de ledenlijst';
$txt['timeLoadPageEnable'] = 'Toon de tijd benodigd om de pagina op te bouwen';
$txt['disableHostnameLookup'] = 'Schakel het opzoeken van hostnamen uit';
$txt['who_enabled'] = 'Wie is online activeren';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Karmamodus';
$txt['smf64'] = 'Deactiveer Karma|Activeer Karma-totaal|Activeer Karma-positief/-negatief';
$txt['karmaMinPosts'] = 'Minimum aantal posts benodigd om Karma te kunnen bewerken';
$txt['karmaWaitTime'] = 'Wachttijd in uren';
$txt['karmaTimeRestrictAdmins'] = 'Beperk beheerders tot de wachttijd';
$txt['karmaLabel'] = 'Karmalabel';
$txt['karmaApplaudLabel'] = 'Positief karmalabel';
$txt['karmaSmiteLabel'] = 'Negatief karmalabel';

$txt['caching_information'] = '<div align="center"><b><u>Belangrijk! Lees dit eerst alvorens je de optie inschakeld.</b></u></div><br />
	SMF ondersteunt caching door middel van acceleratorsoftware. De accelerators die op dit moment ondersteund worden zijn:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (niet Zend Optimizer)</li>
	</ul>
	Caching zal alleen werken op je server als je PHP met &eacute;&eacute;n van bovenstaande optimalisatiesoftware hebt ge&iuml;nstalleerd, of memcache
	beschikbaar hebt. <br /><br />
	SMF werkt met caching op verschillende niveaus. Hoe hoger het niveau dat ingeschakeld is, hoe meer CPU-tijd gebruikt zal worden om
	gecachete informatie te verkrijgen. Als caching op jouw server beschikbaar is, wordt het aangeraden om niveau 1 eerst te proberen.
	<br /><br />
	Merk op dat als je memcache gebruikt, je serverdetails in dient te vullen in onderstaande veld. Dit dient als komma gescheiden lijst
	ingevuld te worden, zoals hieronder in het voorbeeld:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Merk op dat wanneer er geen poort gespecificeerd is, SMF poort 11211 zal gebruiken. SMF zal proberen de laadtijden over de servers te verdelen.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF heeft geen compatibele accelerator op jouw server kunnen vinden.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF heeft gedetecteerd dat APC op je server is ge&iuml;nstalleerd.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF heeft gedetecteerd dat eAccelerator op je server is ge&iuml;nstalleerd.';
$txt['detected_MMCache'] = '<b style="color: green">SMF heeft gedetecteerd dat MMCache op je server is ge&iuml;nstalleerd.';
$txt['detected_Zend'] = '<b style="color: green">SMF heeft gedetecteerd dat Zend op je server is ge&iuml;nstalleerd.';
$txt['detected_Memcached'] = '<b style="color: green">SMF heeft gedetecteerd dat Memcached op je server is geïnstalleerd.</b>';

$txt['cache_enable'] = 'Cachingniveau';
$txt['cache_off'] = 'Geen caching';
$txt['cache_level1'] = 'Niveau 1 caching';
$txt['cache_level2'] = 'Niveau 2 caching (niet aanbevolen)';
$txt['cache_level3'] = 'Niveau 2 caching (niet aanbevolen)';
$txt['cache_memcached'] = 'Memcache-instellingen';

?>