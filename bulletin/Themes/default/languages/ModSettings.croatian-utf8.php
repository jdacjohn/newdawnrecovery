<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'This page allows you to change the settings of features, mods, and basic options in your forum.  Pogledajte <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">Izgled Foruma</a> za vi&#353;e opcija.  Click the help icons for more information about a setting.';

$txt['mods_cat_features'] = 'Osnovne Opcije';
$txt['pollMode'] = 'Ankete';
$txt['smf34'] = 'Isklju&#269;i ankete';
$txt['smf32'] = 'Uklju&#269;i ankete';
$txt['smf33'] = 'Prika&#382;i postoje&#263;e ankete kao teme';
$txt['allow_guestAccess'] = 'Gosti mogu pregledavati forum';
$txt['userLanguage'] = 'Korisnici mogu birati jezik foruma';
$txt['allow_editDisplayName'] = 'Korisnici mogu mijenjati svoje vidljivo ime?';
$txt['allow_hideOnline'] = 'Ne-administratori mogu sakriti svoj online status?';
$txt['allow_hideEmail'] = 'Korisnici mogu sakriti svoj email od svih osim admina?';
$txt['guest_hideContacts'] = 'Onemogu&#263;iti gostima uvid u kontakt detalje &#269;lanova';
$txt['titlesEnable'] = 'Uklju&#269;i osobne titule';
$txt['enable_buddylist'] = 'Uklju&#269;i liste Prijatelja';
$txt['default_personalText'] = 'Predefinirani osobni tekst';
$txt['max_signatureLength'] = 'Maksimalni broj znakova u potpisima<div class="smalltext">(0 za neograni&#269;eno)</div>';
$txt['number_format'] = 'Primarni format brojeva';
$txt['time_format'] = 'Primarni format datuma';
$txt['time_offset'] = 'Ukupna vremenska razlika<div class="smalltext">(added to the member specific option.)</div>';
$txt['failed_login_threshold'] = 'Prag neuspje&#353;nih prijava';
$txt['lastActive'] = 'Vremenski okvir za prikazivanje aktivnih korisnika (u minutama)';
$txt['trackStats'] = 'Dnevna statistika';
$txt['hitStats'] = 'Dnevni broj posjeta (mora biti uklju&#269;ena dnevna statistika)';
$txt['enableCompressedOutput'] = 'Omogu&#263;i gzip kompresiju';
$txt['databaseSession_enable'] = 'Spremanje session informacija u bazu';
$txt['databaseSession_loose'] = 'Dozvoli vra&#263;anje na ke&#353;irane stranice';
$txt['databaseSession_lifetime'] = 'Sekundi prije zatvaranja neaktivne prijave';
$txt['enableErrorLogging'] = 'Omogu&#263;i evidenciju gre&#353;aka';
$txt['cookieTime'] = 'Trajanje login kola&#269;i&#263;a (u minutama)';
$txt['localCookies'] = 'Omogu&#263;i lokalno spremanje kola&#269;i&#263;a<div class="smalltext">(SSI ne&#263;e dobro raditi s ovim)</div>';
$txt['globalCookies'] = 'Kola&#269;i&#263;i neovisni o pod-domenama<div class="smalltext">(prvo isklju&#269;ite lokalne kola&#269;i&#263;e!)</div>';
$txt['securityDisable'] = 'Isklju&#269;i dodatno osiguranje administracije';
$txt['send_validation_onChange'] = 'Obavezna reaktivacija nakon promjene email adrese';
$txt['approveAccountDeletion'] = 'Admin mora odobriti korisni&#269;ke zahtjeve za zatvaranje svojih ra&#269;una';
$txt['autoOptDatabase'] = 'Optimizirati tablice svakih koliko dana?<div class="smalltext">(0 za deaktivaciju)</div>';
$txt['autoOptMaxOnline'] = 'Maksimum korisnika online za vrijeme optimizacije<div class="smalltext">(0 za neograni&#269;eno)</div>';
$txt['autoFixDatabase'] = 'Automatski popraviti gre&#353;ke u tablicama';
$txt['allow_disableAnnounce'] = 'Dozvoliti korisnicima isklju&#269;ivanje obavjesti';
$txt['disallow_sendBody'] = 'Ne dozvoliti tekst posta u obavjestima?';
$txt['modlog_enabled'] = 'Evidencija moderatorskih akcija';
$txt['queryless_urls'] = 'URL transformacija za tra&#382;ilice<div class="smalltext"><b>Samo za Apache!</b></div>';
$txt['max_image_width'] = 'Max &#353;irina postanih slika (0 = isklju&#269;i)';
$txt['max_image_height'] = 'Max visina postanih slika (0 = isklju&#269;i)';
$txt['mail_type'] = 'Vrsta eMaila';
$txt['mail_type_default'] = '(standardno za PHP)';
$txt['smtp_host'] = 'SMTP poslu&#382;itelj';
$txt['smtp_port'] = 'SMTP port';
$txt['smtp_username'] = 'SMTP korisni&#269;ko ime';
$txt['smtp_password'] = 'SMTP lozinka';
$txt['enableReportPM'] = 'Omogu&#263;i prijavljivanje privatnih poruka';
$txt['max_pm_recipients'] = 'Maksimum primatelja dopu&#353;teno u privatnoj poruci.<div class="smalltext">(administratori izuzeti, 0 za isklju&#269;ivanje)</div>';
$txt['pm_posts_verification'] = 'Broj postova ispod kojeg korisnici moraju unijeti kod kod slanja privatne poruke.<div class="smalltext">(0 zna&#269;i da nema ograni&#269;enja, admini su iznimka)</div>';
$txt['pm_posts_per_hour'] = 'Broj privatnih poruka koje se smije poslati u roku od jednog sata.<div class="smalltext">(0 zna&#269;i da nema ograni&#269;enja, moderatori su iznimka)</div>';

$txt['mods_cat_layout'] = 'Raspored i Opcije';
$txt['compactTopicPagesEnable'] = 'Ograni&#269;i broj prikazanih linkova stranica';
$txt['smf235'] = 'Broj stranica za prikazati u kontinuitetu:';
$txt['smf236'] = 'za prikazati';
$txt['todayMod'] = 'Omogu&#263;i &quot;Danas&quot; format datuma';
$txt['smf290'] = 'Isklju&#269;eno';
$txt['smf291'] = 'Samo Danas';
$txt['smf292'] = 'Danas &amp; Ju&#269;er';
$txt['topbottomEnable'] = 'Uklju&#269;i Gore/Dolje dugmad';
$txt['onlineEnable'] = 'Prika&#382;i ikonu online statusa';
$txt['enableVBStyleLogin'] = 'Prika&#382;i brzi login na svakoj stranici';
$txt['defaultMaxMembers'] = 'Korisnika po stranici liste korisnika';
$txt['timeLoadPageEnable'] = 'Prika&#382;i vrijeme utro&#353;eno na generiranje svake stranice';
$txt['disableHostnameLookup'] = 'Isklju&#269;i hostname tra&#382;enje?';
$txt['who_enabled'] = 'Prika&#382;i tko je online listu';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Karma';
$txt['smf64'] = 'Isklju&#269;i karmu|Uklju&#269;i karmu - total|Uklju&#269;i karmu - pozitivno/negativno';
$txt['karmaMinPosts'] = 'Minimum postova potreban za modificiranje karme';
$txt['karmaWaitTime'] = 'Minimum sati izme&#273;u dva modificiranja karme istog korisnika';
$txt['karmaTimeRestrictAdmins'] = 'I administratori moraju &#269;ekati';
$txt['karmaLabel'] = 'Etiketa Karme';
$txt['karmaApplaudLabel'] = 'Pozitivna oznaka karme';
$txt['karmaSmiteLabel'] = 'Negativna oznaka karme';

$txt['caching_information'] = '<div align="center"><b><u>Va&#382;no! Pro&#269;itajte ovo prije uklju&#269;ivanja ove opcije.</b></u></div><br />
	SMF podr&#382;ava ke&#353;iranje (caching) kroz upotrebu akceleratora. Trenutno su podr&#382;ani:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	</ul>
	Ke&#353;iranje (Caching) &#263;e raditi na va&#353;em serveru samo ako je PHP opremljen jednim od od gornjih optimizatora, ili je dostupan memcache. <br /><br />
	SMF izvodi ke&#353;iranje na nekoliko nivoa. &#352;to je nivo ke&#353;iranja vi&#353;i to se vi&#353;e CPU vremena tro&#353;i na u&#269;itavanje ke&#353;iranih informacija. Ako je ke&#353;iranje dostupno na va&#353;em stroju, preporu&#269;eno je prvo isprobati nivo 1.
	<br /><br />
	Ako koristite memcached, potrebno je unijeti serverske detalje u postavku na dnu stranice. Unosi se kao lista odvojena zarezima kao u primjeru ispod:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Napomena - ako se ne unese port SMF &#263;e koristiti port 11211. SMF &#263;e poku&#353;ati grubo/nasumi&#269;no rasporediti optere&#263;enje na sve servere.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF skripta nije detektirala kompatibilan akcelerator na va&#353;em serveru.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF skripta je detektirala instaliran APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF skripta je detektirala instaliran your server has eAccelerator installed.';
$txt['detected_MMCache'] = '<b style="color: green">SMF skripta je detektirala instaliran MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF skripta je detektirala instaliran Zend.';
$txt['detected_Memcached'] = '<b style="color: green">SMF je otkrio da vaš server ima instaliran Memcached.';

$txt['cache_enable'] = 'Nivo Ke&#353;iranja';
$txt['cache_off'] = 'Ne koristi ke&#353;';
$txt['cache_level1'] = 'Nivo 1';
$txt['cache_level2'] = 'Nivo 2 (Nije Preporu&#269;eno)';
$txt['cache_level3'] = 'Nivo 3 (Nije Preporu&#269;eno)';
$txt['cache_memcached'] = 'Memcache postavke';

?>