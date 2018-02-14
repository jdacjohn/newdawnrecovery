<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'SMF instaler';
$txt['installer_language'] = 'Jezik';
$txt['installer_language_set'] = 'Set';
$txt['congratulations'] = 'Čestitamo, instalacioni proces je završen!';
$txt['congratulations_help'] = 'Ako vam bilo kada zatreba podrška, ili SMF ne radi kako treba, zapamtite da je <a href="http://www.simplemachines.org/community/index.php">pomoć uvek dostupna</a> ako vam zatreba.';
$txt['still_writable'] = 'Vaš instalacioni direktorijum je i dalje otvoren za upisivanje. Bilo bi dobro da mu promenite dozvole tako da ne bude otvoren za upisivanje iz bezbednosnih razloga.';
$txt['delete_installer'] = 'Kliknite ovde da biste odmah izbrisali install.php.';
$txt['delete_installer_maybe'] = '<i>(ne radi na svim serverima.)</i>';
$txt['go_to_your_forum'] = 'Sada možete da pogledate <a href="%s">vaš novoinstalirani forum</a> i početi sa njegovim korišćenjem.  Prvo bi trebalo da proverite da li ste prijavljeni nakon čega bi trebalo da možete da pristupite administracionom centru.';
$txt['good_luck'] = 'Neka vam je sa srećom!<br />Simple Machines';

$txt['user_refresh_install'] = 'Forum je osvežen';
$txt['user_refresh_install_desc'] = 'Prilikom instaliranja, instaler je pronašao da (koristeći detalje koje ste pružili) jedna ili više tabela koju je instaler mogao da napravi već postoji.<br />Sve nedostajuće tabele u instalaciji su ponovo napravljene koristeći podrazumevane podatke a nikakvi podaci nisu obrisani iz već postojećih tabela.';

$txt['default_topic_subject'] = 'Dobrodošli u SMF!';
$txt['default_topic_message'] = 'Dobrodošli u Simple Machines forum!<br /><br />Nadamo se da uživate koristeći ovaj forum.&nbsp; Ako imate bilo kakvih problema, ne ustručavajte se da [url=http://www.simplemachines.org/community/index.php]zatražite pomoć od nas[/url].<br /><br />Hvala!<br />Simple Machines';
$txt['default_board_name'] = 'Opšta diskusija';
$txt['default_board_description'] = 'Slobodno pričajte o svemu i svačemu u ovom forumu.';
$txt['default_category_name'] = 'Opšta kategorija';
$txt['default_time_format'] = '%d.%m.%Y. %H:%M';
$txt['default_news'] = 'SMF - Upravo instaliran!';
$txt['default_karmaLabel'] = 'Ugled:';
$txt['default_karmaSmiteLabel'] = '[smanji]';
$txt['default_karmaApplaudLabel'] = '[povećaj]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGost\\nroot ';
$txt['default_smileyset_name'] = 'Podrazumevani';
$txt['default_classic_smileyset_name'] = 'Klasični';
$txt['default_theme_name'] = 'Podrazumevana tema SMFa - Jezgro';
$txt['default_classic_theme_name'] = 'Klasična YaBB SE tema';
$txt['default_babylon_theme_name'] = 'Babylon tema';

$txt['default_administrator_group'] = 'Administrator';
$txt['default_global_moderator_group'] = 'Opšti urednik';
$txt['default_moderator_group'] = 'Urednik';
$txt['default_newbie_group'] = 'Novajlija';
$txt['default_junior_group'] = 'Mlađi član';
$txt['default_full_group'] = 'Punopravni član';
$txt['default_senior_group'] = 'Stariji član';
$txt['default_hero_group'] = 'Heroj';

$txt['default_smiley_smiley'] = 'Smeško';
$txt['default_wink_smiley'] = 'Namigivanje';
$txt['default_cheesy_smiley'] = 'Cheezy';
$txt['default_grin_smiley'] = 'Zelenko';
$txt['default_angry_smiley'] = 'Ljutko';
$txt['default_sad_smiley'] = 'Tužan';
$txt['default_shocked_smiley'] = 'Šokiran';
$txt['default_cool_smiley'] = 'Opušten';
$txt['default_huh_smiley'] = 'Molim?';
$txt['default_roll_eyes_smiley'] = 'Prevrtanje očima';
$txt['default_tongue_smiley'] = 'Jezik';
$txt['default_embarrassed_smiley'] = 'Zaprepašćen';
$txt['default_lips_sealed_smiley'] = 'Usne su mi zapečaćene';
$txt['default_undecided_smiley'] = 'Neodlučan';
$txt['default_kiss_smiley'] = 'Poljubac';
$txt['default_cry_smiley'] = 'Plačko';
$txt['default_evil_smiley'] = 'Zloća';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'Kliknite ovde';
$txt['error_message_try_again'] = 'da biste ponovili ovaj korak.';
$txt['error_message_bad_try_again'] = 'da biste probali da instalirate, ali ovu ideju uopšte <i>ne odobravamo</i>.';

$txt['install_settings'] = 'Osnovna podešavanja';
$txt['install_settings_info'] = 'Samo par stvari za podešavanje ;).';
$txt['install_settings_name'] = 'Ime foruma';
$txt['install_settings_name_info'] = 'Ovo je ime vašeg foruma, na pr.: &quot;Žikin Forum&quot;.';
$txt['install_settings_name_default'] = 'Moja zajednica';
$txt['install_settings_url'] = 'URL foruma';
$txt['install_settings_url_info'] = 'Ovo je URL do vašeg foruma <b>bez poslednje \'/\'!</b>.<br />U najvećem broju slučajeva, možete da ostavite podrazumevanu vrednost u polju - ona je uglavnom tačna.';
$txt['install_settings_compress'] = 'Gzip izlaz';
$txt['install_settings_compress_title'] = 'Kompresuj izlaz da bi sačuvao bandwidth.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Ova funkcija ne radi pravilno na svim serverima ali vam može sačuvati dosta bandwidth-a.<br />Kliknite <a href="install.php?obgz=1&amp;pass_string=RADI" onclick="return reqWin(this.href, 200, 60);">ovde</a> da biste je testirali. (trebalo bi da ispiše "RADI".)';
$txt['install_settings_dbsession'] = 'Sesije koriste bazu podataka';
$txt['install_settings_dbsession_title'] = 'Koristi bazu podataka za sesije umesto datoteka.';
$txt['install_settings_dbsession_info1'] = 'Ova mogućnost je uglavnom najbolja jer čini sesije nezavisnijim.';
$txt['install_settings_dbsession_info2'] = 'Izgleda da ova mogućnost ne radi na vašem serveru ali je možete isprobati.';
$txt['install_settings_utf8'] = 'UTF-8 set znakova';
$txt['install_settings_utf8_title'] = 'Koristi UTF-8 kao podrazumevani set znakova';
$txt['install_settings_utf8_info'] = 'Ova opcija omogućava bazi i forumu da koriste internacionalni set podataka, UTF-8. Ovo može da bude korisno prilikom rada sa više jezika koji koriste različite setove podataka.';
$txt['install_settings_stats'] = 'Dozvoli prikupljanje statistike';
$txt['install_settings_stats_title'] = 'Dozvoli Simple Machines mesečno prikupljanje osnovnih statistika';
$txt['install_settings_stats_info'] = 'Ako je omogućena, ova opcija će dopustiti Simple Machines-u da posećuje vaš sajt jednom mesečno radi prikupljanja osnovnih statistika. Ovo će nam pomoći da donesemo odluke za koje konfiguracije da optimizujemo softver. Za više informacija, posetite naš <a href="http://www.simplemachines.org/about/stats.php" target="_blank">sajt</a>.';
$txt['install_settings_proceed'] = 'Nastavi';

$txt['mysql_settings'] = 'Podešavanja MySQL servera';
$txt['mysql_settings_info'] = 'Ovo su podešavanja koja će se koristiti za pristupanje vašem MySQL serveru.  Ako ih ne znate, pitajte vaš hosting.';
$txt['mysql_settings_server'] = 'Ime MySQL servera';
$txt['mysql_settings_server_info'] = 'Ovo je skoro uvek localhost - pa, ako ne znate, pokušajte localhost.';
$txt['mysql_settings_username'] = 'MySQL korisničko ime';
$txt['mysql_settings_username_info'] = 'Unesite korisničko ime koje će se koristiti za povezivanje na vašu MySQL bazu podataka.<br />Ako ne znate, probajte da upišete korisničko ime vašeg ftp naloga - u najvećem broju slučajeva, podaci su isti.';
$txt['mysql_settings_password'] = 'MySQL lozinka';
$txt['mysql_settings_password_info'] = 'Unesite lozinku koje će se koristiti za povezivanje na vašu MySQL bazu podataka.<br />Ako je ne znate, probajte da upišete lozinku vašeg ftp naloga.';
$txt['mysql_settings_database'] = 'MySQL ime baze';
$txt['mysql_settings_database_info'] = 'Unesite ime baze podataka u koju želite da SMF smešta svoje podatke.<br />Ako ova baza podataka ne postoji, instaler će pokušati da je napravi.';
$txt['mysql_settings_prefix'] = 'Prefiks MySQL tabela';
$txt['mysql_settings_prefix_info'] = 'Prefiks za svaku tabelu u bazi. <b>Ne instalirajte dva foruma sa istim prefiksom!</b><br />Ova vrednost vam dozvoljava da imate višestruke instalacije u jednoj bazi podataka.';

$txt['user_settings'] = 'Napravite svoj nalog';
$txt['user_settings_info'] = 'Instaler će sada napraviti novi admnistaratorski nalog za vas.';
$txt['user_settings_username'] = 'Vaše korisničko ime';
$txt['user_settings_username_info'] = 'Izaberite ime kojim želite da se prijavljujete.<br />Ovo kasnije ne može da bude promenjeno ali možete da promenite vaše prikazano ime.';
$txt['user_settings_password'] = 'Lozinka';
$txt['user_settings_password_info'] = 'Unesite svoju lozinku i zapamtite je dobro!';
$txt['user_settings_again'] = 'Lozinka';
$txt['user_settings_again_info'] = '(samo zbog potvrde.)';
$txt['user_settings_email'] = 'Email adresa';
$txt['user_settings_email_info'] = 'Upišite i svoju e-mail adresu.  <b>Adresa mora da bude ispravna e-mail adresa.</b>';
$txt['user_settings_database'] = 'Lozinka MySQL baze';
$txt['user_settings_database_info'] = 'Instaler iz bezbednosnih razloga zahteva da dostavite i lozinku baze podataka pri pravljenju administratorskog naloga.';
$txt['user_settings_proceed'] = 'Završi';

$txt['ftp_setup'] = 'Informacije o FTP vezi';
$txt['ftp_setup_info'] = 'Instaler može da se poveže preko FTP-a i popravi datoteke koje moraju da budu otvorene za upisivanje a trenutno nisu.  Ako vam ovo ne odgovara, moraćete ručno da promenite privilegije nad datotekama i učinite ih otvorenim za pisanje.<br />Napomena: Ova mogućnost trenutno ne podržava SSL.';
$txt['ftp_server'] = 'Server';
$txt['ftp_server_info'] = 'Ovo bi trebalo da bude server i port vašeg FTP servera.';
$txt['ftp_port'] = 'Port';
$txt['ftp_username'] = 'Korisničko ime';
$txt['ftp_username_info'] = 'Korisničko ime za prijavljivanje. <i>Neće biti sačuvano.</i>';
$txt['ftp_password'] = 'Šifra';
$txt['ftp_password_info'] = 'Lozinka za prijavljivanje. <i>Neće biti sačuvana.</i>';
$txt['ftp_path'] = 'Instalaciona putanja';
$txt['ftp_path_info'] = 'Ovo je <i>relativna</i> putanja koju koristite na svom FTP serveru.';
$txt['ftp_path_found_info'] = 'Putanja u polju iznad je automatski određena.';
$txt['ftp_connect'] = 'Poveži se';
$txt['ftp_setup_why'] = 'Čemu služi ovaj korak?';
$txt['ftp_setup_why_info'] = 'Neke datoteke moraju da budu otvorene za pisanje da bi SMF radio kako treba.  Ovaj korak vam omogućava da dopustite instaleru da ih učini otvorenim za pisanje umesto vas.  U nekim slučajevima, ova opcija neće raditi - tada ćete sledećim datotekama morati da dodelite privilegiju 777 (otvoreno za pisanje, 755 na nekim serverima):';
$txt['ftp_setup_again'] = 'da biste proverili da li su ove datoteke otvorene za pisanje.';

$txt['error_php_too_low'] = 'Upozorenje!  Izgleda da nije instalirana odgovarajuća verzija PHP-a na serveru koja je u saglasnosti sa  SMF-ovim <b>minimalnim potrebama za instalaciju</b>.<br />Ako nemate sopstveni hosting, trebalo bi da zamolite vaš hosting da izvrši ažuriranje, ili pređete na drugi hosting - u suprotnom, ažurirajte PHP na najnoviju verziju.<br /><br />Ako ste sigurni da je vaša  PHP verzija dovoljna za pravilno funkcionisanje, možete da nastavite iako ovaj korak nimalo ne podržavamo.';
$txt['error_missing_files'] = 'Ne mogu da pronađem osnovne instalacione datoteke u direktorijumu ove skripte!<br /><br />Proverite da li ste dostavili celokupan instalacioni paket, uključujući i SQL datoteku, i pokušajte ponovo.';
$txt['error_session_save_path'] = 'Obavestite svoj hosting da je <b>session.save_path precizirana u datoteci php.ini</b> pogrešna!  Trebalo bi da se podesi na direktorijum koji <b>postoji</b>, i <b>otvoren je za upisivanje</b> od strane korisnika pod kojim se PHP pokreće.<br />';
$txt['error_windows_chmod'] = 'Koristite windows server i neke neophodne datoteke nisu otvorene za upisivanje.  Zamolite vašeh domaćina da da <b>dozvolu za upisivanje</b> korisniku pod kojim se PHP pokreće nad datotekama u direktorijumu vaše SMF instalacije.  Sledeće datoteke ili direktorijumi moraju da budu otvoreni za upisivanje:';
$txt['error_ftp_no_connect'] = 'Ne mogu da se povežem na FTP server koristeći ovu kombinaciju detalja.';
$txt['error_mysql_connect'] = 'Ne mogu da se povežem na MySQL server koristeći priložene podatke.<br /><br />Ako niste sigurni šta da ukucate, kontaktirajte svog domaćina.';
$txt['error_mysql_too_low'] = 'Verzija MySQL-a koju koristi vaš server baze podataka je veoma stara i nije u saglasnoti sa SMF-ovim <b>minimalnim potrebama za instalaciju</b>.<br /><br />Zamolite svoj hosting da ili izvrši ažuriranje ili vam omogući novi server. Ako to ne želi, probajte drugi hosting.';
$txt['error_mysql_database'] = 'Instaler nije mogao da pristupi &quot;<i>%s</i>&quot; bazi podataka.  Kod nekih hostinga, morate da napravite bazu podataka u administracionom panelu pre nego što SMF može da je koristi.  Neki takođe dodaju prefikse - kao što je vaše korisničko ime - imenima vaših baza podataka.';
$txt['error_mysql_queries'] = 'Neki od upita nisu izvršeni pravilno. Ovo može da bude uzrokovano nepodržanom (razvojnom ili starom) verzijom MySQL-a.<br /><br />Tehničke informacije o upitima:';
$txt['error_mysql_queries_line'] = 'Linija #';
$txt['error_mysql_missing'] = 'Instaler nije mogao da pronađe podršku za MySQL u PHP-u.  Zamolite svoj hosting da osigura da je PHP kompajliran sa MySQL-om, i da je odgovarajuća ekstenzija učitana.';
$txt['error_session_missing'] = 'Instaler nije mogao da pronađe podršku za sesije u instalaciji PHP-a na vašem serveru. Zamolite svoj hosting da osigura da je PHP kompajliran sa podrškom za sesije (u stvari, mora da bude eksplicitno kompajlirana bez nje.)';
$txt['error_user_settings_again_match'] = 'Ukucali ste dve potpuno različite lozinke!';
$txt['error_user_settings_taken'] = 'Korisnik je već registrovan sa tim korisničkim imenom i/ili lozinkom.<br /><br />Nov nalog nije napravljen.';
$txt['error_user_settings_query'] = 'Došlo je do greške u bazi podataka prilikom kreiranja administratora.  Greška je sledeća:';
$txt['error_subs_missing'] = 'Nisam mogao da pronađem datoteku Sources/Subs.php. Uverite se da je pravilno dostavljena i pokušajte ponovo.';
$txt['error_mysql_alter_priv'] = 'MySQL nalog koji ste precizirali nema dozvole da IZMENI (ALTER), NAPRAVI (CREATE), i/ili ODBACI (DROP) tabele u bazi podataka; ovo je potrebno da bi SMF funkcionisao kako treba.';
$txt['error_versions_do_not_match'] = 'Instaler je otkrio da je druga verzija SMF-a već instalirana koristeći precizirane informacije.  Ako pokušavate da ažurirate, trebalo bi da koristite upgrader, ne instaler.<br /><br />U suprotnom, možda biste želeli da koristite druge informacije, ili napravite rezervnu kopoju a zatim obrišete podatke koje se trenutno nalaze u bazi podataka.';
$txt['error_mod_security'] = 'Instaler je pronašao da je mod_security modul instaliran na vašem web serveru. Mod_security će blokirati podnešene forme čak pre nego što SMF pokuša da kaže bilo šta. SMF ima ugrađen bezbednosni skener koji će raditi efikasnije nego mod_security i neće blokirati podnošene forme.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">Više informacija o onemogućivanju modula mod_security</a>';
$txt['error_utf8_mysql_version'] = 'Trenutna verzija vaše baze podataka ne podržava korišćenje UTF-8 seta znakova. I dalje možete da instalirate SMF bez problema, ali samo ako onemogućite podršku za UTF-8. Ako kasnije budete želeli da pređete na UTF-8 (na pr. nakon što je MySQL server ažuriran na verziju >= 4.1), moći ćete da konvertujete svoj forum u UTF-8 preko administracionog panela.';

?>