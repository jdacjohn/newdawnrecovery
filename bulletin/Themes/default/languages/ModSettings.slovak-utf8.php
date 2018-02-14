<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Na tejto stránke môžete meniť nastavenia vlastností, modifikácií a základných volieb vášho fóra. Ďalšie nastavenia sú v <a href="' . $scripturl . '?action=theme;sa=settings;id=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">nastavenie vzhľadu</a>.  Kliknite na ikonu s otazníkom pre ďalšie informácie o nastavení.';

$txt['mods_cat_features'] = 'Základné vlastnosti fóra';
$txt['pollMode'] = 'Nastavenie ankiet';
$txt['smf34'] = 'Zakázať ankety';
$txt['smf32'] = 'Povoliť ankety';
$txt['smf33'] = 'Zobraziť existujúce ankety ako témy';
$txt['allow_guestAccess'] = 'Umožniť hosťom prechádzať fórum';
$txt['userLanguage'] = 'Umožniť užívateľom výber jazyka';
$txt['allow_editDisplayName'] = 'Umožniť užívateľom editáciu zobrazovaného mena?';
$txt['allow_hideOnline'] = 'Umožniť užívateľom skryť svoj online stav?';
$txt['allow_hideEmail'] = 'Umožniť užívateľom skryť svoj email pred každým (okrem administrátorov)?';
$txt['guest_hideContacts'] = 'Nezobrazovať hosťom kontaktné detaily užívateľov';
$txt['titlesEnable'] = 'Povoliť vlastné titulky';
$txt['enable_buddylist'] = 'Povoliť zoznam kámošov';
$txt['default_personalText'] = 'Východzí osobný text';
$txt['max_signatureLength'] = 'Maximum povolených znakov v podpise <div class="smalltext">(0 = bez maxima)</div>';
$txt['number_format'] = 'Východzí číselný formát';
$txt['time_format'] = 'Výchozí časový formát';
$txt['time_offset'] = 'Celkový časový posun <div class="smalltext">(pripočítava sa k užívateľskému nastaveniu.)</div>';
$txt['failed_login_threshold'] = 'Limit neúspešných prihlásení';
$txt['lastActive'] = 'Čas pre výpočet času online';
$txt['trackStats'] = 'Zaznamenávať denné štatistiky';
$txt['hitStats'] = 'Zaznamenávať počet prístupov (štatistiky musia byť zapnuté)';
$txt['enableCompressedOutput'] = 'Povoliť komprimovaný výstup';
$txt['databaseSession_enable'] = 'Používať databázu pre správu sedení';
$txt['databaseSession_loose'] = 'Povoliť prehliadačom skočiť späť na stránky v cache';
$txt['databaseSession_lifetime'] = 'Sekundy pred uplynutím nepoužívaného sedenia';
$txt['enableErrorLogging'] = 'Zaznamenávať chyby';
$txt['cookieTime'] = 'Východzia doba prihlasovacích cookie (v minútách)';
$txt['localCookies'] = 'Umožniť lokálne ukladanie cookies<div class="smalltext">(SSI nebude fungovať.)</div>';
$txt['globalCookies'] = 'Používať cookies nezávisle na subdoménach<div class="smalltext">(najskôr vypnite lokálne cookies!)</div>';
$txt['securityDisable'] = 'Zakázať administračné zabezpečenie';
$txt['send_validation_onChange'] = 'Poslať nové heslo pri zmene emailu';
$txt['approveAccountDeletion'] = 'Vyžadovať schválenie administrátorom pri vymazaní účtu';
$txt['autoOptDatabase'] = 'Ako často optimalizovať tabuľky?<div class="smalltext">(0 = zakázať)</div>';
$txt['autoOptMaxOnline'] = 'Maximálny počet užívateľov online počas optimalizácie<div class="smalltext">(0 = bez maxima)</div>';
$txt['autoFixDatabase'] = 'Automaticky opravovať poškodené tabuľky';
$txt['allow_disableAnnounce'] = 'Povoliť užívateľom zakázať oznámenie';
$txt['disallow_sendBody'] = 'Nepovoliť posielanie príspevku v oznámení?';
$txt['modlog_enabled'] = 'Zaznamenávať akcie moderátorov';
$txt['queryless_urls'] = 'Zobrazovať URL priateľské k vyhľadávačom<div class="smalltext"><b>Iba Apache!</b></div>';
$txt['max_image_width'] = 'Maximálna šírka posielaných obrázkov (0 = bez limitu)';
$txt['max_image_height'] = 'Maximálna výška posielaných obrázkov (0 = bez limitu)';
$txt['mail_type'] = 'Spôsob odosielania';
$txt['mail_type_default'] = '(Východzie nastavenia PHP)';
$txt['smtp_host'] = 'SMTP server';
$txt['smtp_port'] = 'SMTP port';
$txt['smtp_username'] = 'SMTP meno';
$txt['smtp_password'] = 'SMTP heslo';
$txt['enableReportPM'] = 'Povoliť oznámenie súkromných správ';
$txt['max_pm_recipients'] = 'Maximálny počet adresátov súkromnej správy.<div class="smalltext">(0 = bez limitu, administrátori majú výnimku)</div>';
$txt['pm_posts_verification'] = 'Minimální počet příspěvků, který musí mít uživatel, aby nemusel zadávat kód, když posílá soukromé zprávy.<div class="smalltext">(0 - bez omezení, admini mají výjimku)</div>';
$txt['pm_posts_per_hour'] = 'Počet soukromých zpráv, které může uživatel poslat za hodinu.<div class="smalltext">(0 - bez omezení,  moderátoři mají výjimku)</div>';

$txt['mods_cat_layout'] = 'Nastavenie vzhľadu';
$txt['compactTopicPagesEnable'] = 'Obmedziť počet zobrazených odkazov na stránky';
$txt['smf235'] = 'Počet susediacich stránok k zobrazeniu:';
$txt['smf236'] = 'k zobrazeniu';
$txt['todayMod'] = 'Povoliť zobrazenie &quot;Dnes&quot;';
$txt['smf290'] = 'Vypnuť';
$txt['smf291'] = 'Iba Dnes';
$txt['smf292'] = 'Dnes a včera';
$txt['topbottomEnable'] = 'Zobrazovať tlačítka Hore a Dole';
$txt['onlineEnable'] = 'Zobrazovať online/offline v príspevkoch a súkromných správach';
$txt['enableVBStyleLogin'] = 'Zobrazovať rýchle prihlásenie na každej stránke';
$txt['defaultMaxMembers'] = 'Užívateľov na stránku v zozname užívateľov';
$txt['timeLoadPageEnable'] = 'Zobraziť čas potrebný k vytvoreniu stránky';
$txt['disableHostnameLookup'] = 'Zakázať vyhľadanie hostname?';
$txt['who_enabled'] = 'Povoliť zoznam užívateľov online';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Mód karmy';
$txt['smf64'] = 'Zakázať karmu|Povoliť súčty karmy|Povoliť kladnú/zápornú karmu';
$txt['karmaMinPosts'] = 'Minimálny počet príspevkov potrebný k zmene karmy';
$txt['karmaWaitTime'] = 'Nastaviť čakaciu dobu v hodinách';
$txt['karmaTimeRestrictAdmins'] = 'Aj administrátori musia rešpektovať čakaciu dobu';
$txt['karmaLabel'] = 'Titulok karmy';
$txt['karmaApplaudLabel'] = 'Titulok potlesku';
$txt['karmaSmiteLabel'] = 'Titulok pískotu';

$txt['caching_information'] = '<div align="center"><b><u>Dôležité! Čítajte pred zapnutím tejto funkcie.</b></u></div><br />
	SMF podporuje caching pomocou použitia akcelerátorov. Podporované sú:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Nie Zend Optimizér)</li>
	</ul>
	Caching bude fungovať iba vtedy, keď je na vašom serveri PHP skompilované s jedným z vymenovaných akcelerátorov alebo je k dispozícii memcache. <br /><br />
	SMF vykonáva caching na rôznych úrovniach. Vyššia úroveň cachingu znamená viac času procesoru stráveného vyhľadávaním cachovanej informácie. Ak máte k dispozícii stroj s cachingem, doporučujeme, aby ste najskôr využili caching na úrovni 1.
	<br /><br />
	Ak používate memcached, musíte mu nastaviť detaily serverov v políčku nižšie. Mali by ste ich zadať ako zoznam oddelený čiarkami:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Ak nezadáte žiadny port, SMF bude používať port 11211. SMF sa pokúsi vykonávať hrubé/náhodné rozloženie záťaže medzi servre.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF nebolo schopné detekovať žiadny akcelerátor.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF detekovalo APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF detekovalo inštaláciu eAccelerátoru.';
$txt['detected_MMCache'] = '<b style="color: green">SMF detekovalo inštaláciu MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF detekovalo inštaláciu Zendu.';
$txt['detected_Memcached'] = '<b style="color: green">SMF has detected that your server has Memcached installed.';

$txt['cache_enable'] = 'Úroveň cachingu';
$txt['cache_off'] = 'Bez cachingu';
$txt['cache_level1'] = 'Úroveň 1 cachingu';
$txt['cache_level2'] = 'Úroveň 2 cachingu (Nedoporučené)';
$txt['cache_level3'] = 'Úroveň 3 cachingu (Nedoporučené)';
$txt['cache_memcached'] = 'Nastavenie Memcache';

?>