<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Ova stranica vam dozvoljava da promenite podešavanja mogućnosti, modifikacija i osnovnih opcija vašeg foruma.  Pogledajte <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">podešavanja tema</a> za više opcija.  Kliknite na ikone pomoći za više informacija o podešavanju.';

$txt['mods_cat_features'] = 'Osnovne mogućnosti foruma';
$txt['pollMode'] = 'Mod glasanja';
$txt['smf34'] = 'Onemogući glasanja';
$txt['smf32'] = 'Omogući glasanja';
$txt['smf33'] = 'Prikaži postojeća glasanja kao teme';
$txt['allow_guestAccess'] = 'Dozvoli gostima da pregledaju forum';
$txt['userLanguage'] = 'Omogući korisnicima odabir jezika';
$txt['allow_editDisplayName'] = 'Dozvoliti korisnicima izmenu prikazanog imena?';
$txt['allow_hideOnline'] = 'Dozvoliti ne-administratorima da sakriju svoj status prisutnosti?';
$txt['allow_hideEmail'] = 'Dozvoliti korisnicima da sakriju svoj e-mail od svih sem administratora?';
$txt['guest_hideContacts'] = 'Ne otkrivaj gostima detalje kontaktiranja članova';
$txt['titlesEnable'] = 'Omogući prilagođene nazive';
$txt['enable_buddylist'] = 'Omogući spisak prijatelja';
$txt['default_personalText'] = 'Podrazumevani lični tekst';
$txt['max_signatureLength'] = 'Najviše dozvoljenih karaktera u potpisima<div class="smalltext">(0 za neograničeno)</div>';
$txt['number_format'] = 'Podrazumevani format brojeva';
$txt['time_format'] = 'Podrazumevani format vremena';
$txt['time_offset'] = 'Opšti vremenski pomak<div class="smalltext">(dodaje se onom koji postavi član.)</div>';
$txt['failed_login_threshold'] = 'Prag neuspelih prijava';
$txt['lastActive'] = 'Prag vremena za utvrđivanje prisutnosti';
$txt['trackStats'] = 'Prati dnevnu statistiku';
$txt['hitStats'] = 'Prati dnevne posete (zahteva omogućenu statistiku)';
$txt['enableCompressedOutput'] = 'Omogući kompresovani izlaz';
$txt['databaseSession_enable'] = 'Koristi sesije upravljane bazom';
$txt['databaseSession_loose'] = 'Dozvoli pregledačima da se vraćaju unazad na keširane strane';
$txt['databaseSession_lifetime'] = 'Sekundi pre isteka nekorišćene sesije';
$txt['enableErrorLogging'] = 'Omogući zapisivanje grešaka';
$txt['cookieTime'] = 'Podrazumevana dužina kolačića za prijavljivanje (u minutima)';
$txt['localCookies'] = 'Omogući lokalno čuvanje kolačića<div class="smalltext">(SSI ne radi dobro sa ovom opcijom uključenom.)</div>';
$txt['globalCookies'] = 'Koristi kolačiće nezavisne od poddomena<div class="smalltext">(prvo isključite lokalne kolačiće!)</div>';
$txt['securityDisable'] = 'Onemogući bezbednost administracionog dela';
$txt['send_validation_onChange'] = 'Zahtevaj ponovnu aktivaciju nakon promene e-mail adrese';
$txt['approveAccountDeletion'] = 'Zahtevaj odobrenje administratora kada član obriše nalog';
$txt['autoOptDatabase'] = 'Na koliko dana da optimizujem tabele?<div class="smalltext">(0 za onemogućeno.)</div>';
$txt['autoOptMaxOnline'] = 'Najveći broj prisutnih korisnika prilikom optimizacije<div class="smalltext">(0 za neograničeno.)</div>';
$txt['autoFixDatabase'] = 'Automatski popravi pokvarene tabele';
$txt['allow_disableAnnounce'] = 'Dozvoli korisnicima da onemoguće obaveštenja';
$txt['disallow_sendBody'] = 'Onemogućiti tekst poruke u obaveštenjima?';
$txt['modlog_enabled'] = 'Zapisuj akcije uređivanja';
$txt['queryless_urls'] = 'URL-ovi prilagođeni pretraživačima<div class="smalltext"><b>samo Apache!</b></div>';
$txt['max_image_width'] = 'Najveća širina poslatih slika (0 = onemogućeno)';
$txt['max_image_height'] = 'Najveća visina poslatih slika (0 = onemogućeno)';
$txt['mail_type'] = 'Tip pošte';
$txt['mail_type_default'] = '(PHP podrazumevano)';
$txt['smtp_host'] = 'SMTP server ';
$txt['smtp_port'] = 'SMTP port';
$txt['smtp_username'] = 'SMTP korisničko ime';
$txt['smtp_password'] = 'SMTP lozinka';
$txt['enableReportPM'] = 'Omogući prijavljivanje privatnih poruka';
$txt['max_pm_recipients'] = 'Najveći dozvoljeni broj primalaca u privatnim porukama. <div class="smalltext">(0 za onemogućeno, administratori su izuzetak)</div>';
$txt['pm_posts_verification'] = 'Broj poruka ispod kojih korisnici moraju da unesu kod sa slike da bi poslali privatnu poruku.<div class="smalltext">(0 za neograničeno, administratori su izuzetak)</div>';
$txt['pm_posts_per_hour'] = 'Broj privatnih poruka koje krosnik može da pošalje za jedan sat.<div class="smalltext">(0 za neograničeno, urednici su izuzetak)</div>';

$txt['mods_cat_layout'] = 'Izgled i opcije';
$txt['compactTopicPagesEnable'] = 'Ograniči broj prikazanih linkova ka stranicama';
$txt['smf235'] = 'Uzastopne stranice za prikaz:';
$txt['smf236'] = 'da bi se prikazalo';
$txt['todayMod'] = 'Omogući opciju &quot;Danas&quot;';
$txt['smf290'] = 'Onemogućeno';
$txt['smf291'] = 'Samo &quot;Danas&quot;';
$txt['smf292'] = 'Danas i Juče';
$txt['topbottomEnable'] = 'Omogući dugmad Idi gore/Idi dole';
$txt['onlineEnable'] = 'Prikaži prisutnost u temama i privatnim porukama';
$txt['enableVBStyleLogin'] = 'Prikaži polje za brzo prijavljivanje na svakoj stranici';
$txt['defaultMaxMembers'] = 'Članova po stranici u spisku članova';
$txt['timeLoadPageEnable'] = 'Prikaži vreme potrebno za kreiranje svake stranice';
$txt['disableHostnameLookup'] = 'Onemogućiti pretraživanje imena domaćina?';
$txt['who_enabled'] = 'Omogući spisak &quot;Ko je prisutan&quot;';

$txt['smf293'] = 'Ugled';
$txt['karmaMode'] = 'Mod ugleda';
$txt['smf64'] = 'Onemogući ugled|Omogući ukupan ugled|Omogući pozitivan/negativan ugled';
$txt['karmaMinPosts'] = 'Najmanji broj poruka potreban za izmenu ugleda';
$txt['karmaWaitTime'] = 'Vreme čekanja u satima (između dva menjanja ugleda)';
$txt['karmaTimeRestrictAdmins'] = 'Da li vreme čekanja važi i za administratore?';
$txt['karmaLabel'] = 'Naslov ugleda';
$txt['karmaApplaudLabel'] = 'Naslov povećavanja ugleda';
$txt['karmaSmiteLabel'] = 'Naslov smanjivanja ugleda';

$txt['caching_information'] = '<div align="center"><b><u>Važno! Pročitajte ovo pre nego što omogućite ove mogućnosti.</b></u></div><br />
	SMF podržava keširanje kroz upotrebu akceleratora. Trenutno podržani akceleratori su:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (ne Zend Optimizer)</li>
	</ul>
	Keširanje će raditi samo ako je PHP na vašem serveru kompajliran sa podrškom za neki od gore navedenih akceleratora ili imate dostupan memcache. <br /><br />
	SMF izvodi keširanje na raznim nivoima. Veći nivoi keširanja trošiće više procesorskog vremena na dobijanje keširanih informacija. Ako je keširanje omogućeno na vašoj mašini, preporučujemo da prvo probate keširanje na prvom nivou.
	<br /><br />
	Ako koristite memcache, moraćate da precizirate detalje servera u podešavanjima. Trebalo bi da ih unesete kao zarezom odvojeni spisak kao što je prikazano u primeru ispod:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Ako port nije preciziran SMF će koristiti port 11211. SMF će pokušati da proizvede grub/nasumičan load balancing servera.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF nije mogao da pronađe kompatibilan akcelerator na vašem serveru.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF je pronašao da vaš server ima instaliran APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF je pronašao da vaš server ima instaliran eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">SMF je pronašao da vaš server ima instaliran MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF je pronašao da vaš server ima instaliran Zend.';
$txt['detected_Memcached'] = '<b style="color: green">SMF je otkrio da vaš server ima Memcached instaliran. ';

$txt['cache_enable'] = 'Nivo keširanja';
$txt['cache_off'] = 'Bez keširanja';
$txt['cache_level1'] = 'Nivo 1 keširanja';
$txt['cache_level2'] = 'Nivo 2 keširanja (nije preporučeno)';
$txt['cache_level3'] = 'Nivo 3 keširanja (nije preporučeno)';
$txt['cache_memcached'] = 'Memcache podešavanja';

?>