<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Na této stránce můžeš měnit nastavení vlastností, modifikací a základních voleb svého fóra. Další nastavení jsou v <a href="' . $scripturl . '?action=theme;sa=settings;id=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">nastavení vzhledu</a>.  Klikni na ikonu s otazníkem pro další informace o nastavení.';

$txt['mods_cat_features'] = 'Základní vlastnosti fóra';
$txt['pollMode'] = 'Nastavení anket';
$txt['smf34'] = 'Zakázat ankety';
$txt['smf32'] = 'Povolit ankety';
$txt['smf33'] = 'Zobrazit existující ankety jako témata';
$txt['allow_guestAccess'] = 'Umožnit hostům procházet fórum';
$txt['userLanguage'] = 'Umožnit uživatelům výběr jazyka';
$txt['allow_editDisplayName'] = 'Umožnit uživatelům editaci zobrazovaného jména?';
$txt['allow_hideOnline'] = 'Umožnit uživatelům skrýt svůj online stav?';
$txt['allow_hideEmail'] = 'Umožnit uživatelům skrýt svůj email před všemi (kromě administrátorů)?';
$txt['guest_hideContacts'] = 'Nezobrazovat hostům kontaktní detaily uživatelů';
$txt['titlesEnable'] = 'Povolit vlastní titulky';
$txt['enable_buddylist'] = 'Povolit seznam kámošů';
$txt['default_personalText'] = 'Výchozí osobní text';
$txt['max_signatureLength'] = 'Maximum povolených znaků v podpisu <div class="smalltext">(0 = bez maxima)</div>';
$txt['number_format'] = 'Výchozí číselný formát';
$txt['time_format'] = 'Výchozí časový formát';
$txt['time_offset'] = 'Celkový časový posun <div class="smalltext">(připočítává se k uživatelskému nastavení.)</div>';
$txt['failed_login_threshold'] = 'Limit špatných přihlášení';
$txt['lastActive'] = 'Doba pro výpočet času online';
$txt['trackStats'] = 'Zaznamenávat denní statistiky';
$txt['hitStats'] = 'Zaznamenávat počet přístupů (statistiky musí být zapnuty)';
$txt['enableCompressedOutput'] = 'Povolit komprimovaný výstup';
$txt['databaseSession_enable'] = 'Používat databázi pro správu sezení';
$txt['databaseSession_loose'] = 'Povolit prohlížečům skočit zpět na stránky v cache';
$txt['databaseSession_lifetime'] = 'Sekundy před uplynutím nepoužívaného sezení';
$txt['enableErrorLogging'] = 'Zaznamenávat chyby';
$txt['cookieTime'] = 'Výchozí doba přihlašovacích cookie (v minutách)';
$txt['localCookies'] = 'Umožnit lokální ukládání cookies<div class="smalltext">(SSI nebude fungovat.)</div>';
$txt['globalCookies'] = 'Používat cookies nezávislé na subdoménách<div class="smalltext">(nejdříve vypni lokální cookies!)</div>';
$txt['securityDisable'] = 'Zakázat administrační zabezpečení';
$txt['send_validation_onChange'] = 'Poslat nové heslo při změně emailu';
$txt['approveAccountDeletion'] = 'Vyžadovat schválení administrátorem při smazání účtu';
$txt['autoOptDatabase'] = 'Jak často optimalizovat tabulky?<div class="smalltext">(0 = zakázat)</div>';
$txt['autoOptMaxOnline'] = 'Maximální počet uživatelů online během optimalizace<div class="smalltext">(0 = bez maxima)</div>';
$txt['autoFixDatabase'] = 'Automaticky opravovat poškozené tabulky';
$txt['allow_disableAnnounce'] = 'Povolit uživatelům zakázat oznámení';
$txt['disallow_sendBody'] = 'Nepovolit posílání příspěvku v oznámení?';
$txt['modlog_enabled'] = 'Zaznamenávat akce moderátorů';
$txt['queryless_urls'] = 'Zobrazovat URL přátelské k vyhledávačům<div class="smalltext"><b>Pouze Apache!</b></div>';
$txt['max_image_width'] = 'Maximální šířka posílaných obrázků (0 = bez limitu)';
$txt['max_image_height'] = 'Maximální výška posílaných obrázků (0 = bez limitu)';
$txt['mail_type'] = 'Způsob odesílání';
$txt['mail_type_default'] = '(Výchozí nastavení PHP)';
$txt['smtp_host'] = 'SMTP server';
$txt['smtp_port'] = 'SMTP port';
$txt['smtp_username'] = 'SMTP jméno';
$txt['smtp_password'] = 'SMTP heslo';
$txt['enableReportPM'] = 'Povolit oznámení soukromých zpráv';
$txt['max_pm_recipients'] = 'Maximální počet adresátů soukromé zprávy.<div class="smalltext">(0 = bez limitu, administrátoři mají výjimku)</div>';
$txt['pm_posts_verification'] = 'Minimální počet příspěvků, který musí mít uživatel, aby nemusel zadávat kód, když posílá soukromé zprávy.<div class="smalltext">(0 - bez omezení, admini mají výjimku)</div>';
$txt['pm_posts_per_hour'] = 'Počet soukromých zpráv, které může uživatel poslat za hodinu.<div class="smalltext">(0 - bez omezení,  moderátoři mají výjimku)</div>';

$txt['mods_cat_layout'] = 'Nastavení vzhledu';
$txt['compactTopicPagesEnable'] = 'Omezit počet zobrazených odkazů na stránky';
$txt['smf235'] = 'Počet sousedících stránek k zobrazení:';
$txt['smf236'] = 'k zobrazení';
$txt['todayMod'] = 'Povolit zobrazení &quot;Dnes&quot;';
$txt['smf290'] = 'Vypnout';
$txt['smf291'] = 'Pouze Dnes';
$txt['smf292'] = 'Dnes a včera';
$txt['topbottomEnable'] = 'Zobrazovat tlačítka Nahoru a Dolů';
$txt['onlineEnable'] = 'Zobrazovat online/offline v příspěvcích a soukromých zprávách';
$txt['enableVBStyleLogin'] = 'Zobrazovat rychlé přihlášení na každé stránce';
$txt['defaultMaxMembers'] = 'Uživatelů na stránku v seznamu uživatelů';
$txt['timeLoadPageEnable'] = 'Zobrazit čas potřebný k vytvoření stránky';
$txt['disableHostnameLookup'] = 'Zakázat vyhledání hostname?';
$txt['who_enabled'] = 'Povolit seznam uživatelů online';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Mód karmy';
$txt['smf64'] = 'Zakázat karmu|Povolit součty karmy|Povolit kladnou/zápornou karmu';
$txt['karmaMinPosts'] = 'Minimální počet příspěvků nutný ke změně karmy';
$txt['karmaWaitTime'] = 'Nastavit čekací dobu v hodinách';
$txt['karmaTimeRestrictAdmins'] = 'I administrátoři musí respektovat čekací dobu';
$txt['karmaLabel'] = 'Titulek karmy';
$txt['karmaApplaudLabel'] = 'Titulek potlesku';
$txt['karmaSmiteLabel'] = 'Titulek pískotu';

$txt['caching_information'] = '<div align="center"><b><u>Důležité! Čti před zapnutím této funkce.</b></u></div><br />
	SMF podporuje caching pomocí použití akcelerátorů. Podporované jsou:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Ne Zend Optimizer)</li>
	</ul>
	Caching bude fungovat jen tehdy, když je na tvém serveru PHP zkompilováno s jedním z vyjmenovaných akcelerátorů nebo je k dispozici memcache. <br /><br />
	SMF provádí caching na různých úrovních. Vyšší úroveň cachingu znamená více času procesoru stráveného vyhledáváním cachované informace. Pokud máš k dispozici stroj s cachingem, doporučujeme, abys nejdřív využil caching na úrovni 1.
	<br /><br />
	Pokud používáš memcached, musíš mu nastavit detaily serverů v políčku níže. Měl bys je zadat jako seznam oddělený čárkami:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Pokud nezadáš žádný port, SMF bude používat port 11211. SMF se pokusí provádět hrubé/náhodné rozložení zátěže mezi servery.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF nebylo schopno detekovat žádný akcelerátor.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF detekovalo APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF detekovalo instalaci eAcceleratoru.';
$txt['detected_MMCache'] = '<b style="color: green">SMF detekovalo instalaci MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF detekovalo instalaci Zendu.';
$txt['detected_Memcached'] = '<b style="color: green">SMF has detected that your server has Memcached installed.';

$txt['cache_enable'] = 'Úroveň cachingu';
$txt['cache_off'] = 'Bez cachingu';
$txt['cache_level1'] = 'Úroveň 1 cachingu';
$txt['cache_level2'] = 'Úroveň 2 cachingu (Nedoporučeno)';
$txt['cache_level3'] = 'Úroveň 3 cachingu (Nedoporučeno)';
$txt['cache_memcached'] = 'Nastavení Memcache';

?>