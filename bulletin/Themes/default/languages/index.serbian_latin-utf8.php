<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'sr_YU.utf8';
$txt['lang_dictionary'] = 'sr';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Nedelja', 'Ponedeljak', 'Utorak', 'Sreda', 'Četvrtak', 'Petak', 'Subota');
$txt['days_short'] = array('Ned', 'Pon', 'Uto', 'Sre', 'Čet', 'Pet', 'Sub');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Januar', 'Februar', 'Mart', 'April', 'Maj', 'Jun', 'Jul', 'Avgust', 'Septembar', 'Oktobar', 'Novembar', 'Decembar');
$txt['months_titles'] = array(1 => 'Januar', 'Februar', 'Mart', 'April', 'Maj', 'Jun', 'Jul', 'Avgust', 'Septembar', 'Oktobar', 'Novembar', 'Decembar');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');

$txt['newmessages0'] = 'su nove';
$txt['newmessages1'] = 'je novih';
$txt['newmessages3'] = 'Novih';
$txt['newmessages4'] = ',';

$txt[2] = 'Administrator';

$txt[10] = 'Sačuvaj';

$txt[17] = 'Izmeni';
$txt[18] = $context['forum_name'] . ' - početna';
$txt[19] = 'članova';
$txt[20] = 'Ime foruma';
$txt[21] = 'poruka';
$txt[22] = 'Poslednja poruka';

$txt[24] = '(Nema teme)';
$txt[26] = 'Poruke';
$txt[27] = 'Pogledaj profil';
$txt[28] = 'Gost';
$txt[29] = 'Autor';
$txt[30] = 'poslato';
$txt[31] = 'Ukloni';
$txt[33] = 'Počni novu temu';

$txt[34] = 'Prijavljivanje';
// Use numeric entities in the below string.
$txt[35] = 'Korisničko ime';
$txt[36] = 'Lozinka';

$txt[40] = 'To korisničko ime ne postoji.';

$txt[62] = 'Urednik foruma';
$txt[63] = 'Ukloni temu';
$txt[64] = 'tema';
$txt[66] = 'Izmeni poruku';
$txt[68] = 'Ime';
$txt[69] = 'E-mail';
$txt[70] = 'Naslov';
$txt[72] = 'Poruka';

$txt[79] = 'Profil';

$txt[81] = 'Izaberite lozinku';
$txt[82] = 'Potvrdite lozinku';
$txt[87] = 'Pozicija';

$txt[92] = 'Pogledaj profil';
$txt[94] = 'Ukupno';
$txt[95] = 'poruka';
$txt[96] = 'Vebsajt';
$txt[97] = 'Registracija';

$txt[101] = 'Indeks poruka';
$txt[102] = 'Vesti';
$txt[103] = 'Početna';

$txt[104] = 'Zaključaj/Odključaj temu';
$txt[105] = 'Pošalji';
$txt[106] = 'Došlo je do greške!';
$txt[107] = 'kod';
$txt[108] = 'Odjavi se';
$txt[109] = 'Započeo';
$txt[110] = 'Odgovora';
$txt[111] = 'Poslednja poruka';
$txt[114] = 'Prijavljivanje administratora';
// Use numeric entities in the below string.
$txt[118] = 'Tema';
$txt[119] = 'Pomoć';
$txt[121] = 'Ukloni poruku';
$txt[125] = 'Obavesti';
$txt[126] = 'Da li želite da primate e-mail sa obaveštenjem ako neko odgovori na ovu temu?';
// Use numeric entities in the below string.
$txt[130] = "Hvala vam, \n" . $context['forum_name'] . ' tim.';
$txt[131] = 'Obavesti me pri odgovoru';
$txt[132] = 'Premesti temu';
$txt[133] = 'Premesti u';
$txt[139] = 'Stranice';
$txt[140] = 'Korisnici aktivni u proteklih ' . $modSettings['lastActive'] . ' minuta';
$txt[144] = 'Privatne poruke';
$txt[145] = 'Odgovori sa citatom';
$txt[146] = 'Odgovor';

$txt[151] = 'Nema poruka...';
$txt[152] = 'imate';
$txt[153] = 'poruka';
$txt[154] = 'Ukloni ovu poruku';

$txt[158] = 'Prisutni korisnici';
$txt[159] = 'Privatna poruka';
$txt[160] = 'Prebaci se na';
$txt[161] = 'Idi';
$txt[162] = 'Da li ste sigurni da želite da uklonite ovu temu?';
$txt[163] = 'Da';
$txt[164] = 'Ne';

$txt[166] = 'Rezultati pretrage';
$txt[167] = 'Kraj rezultata';
$txt[170] = 'Izvinite ali nema rezultata';
$txt[176] = '';

$txt[182] = 'Pretraga';
$txt[190] = 'Sve';

$txt[193] = 'Nazad';
$txt[194] = 'podsećanje';
$txt[195] = 'Temu započeo';
$txt[196] = 'Naslov';
$txt[197] = 'Poruka od';
$txt[200] = 'Pretraživa lista registrovanih članova.';
$txt[201] = 'Pozdravite';
$txt[208] = 'Administracioni centar';
$txt[211] = 'Poslednja izmena';
$txt[212] = 'Da li želite da onemogućite obaveštavanje o ovoj temi?';

$txt[214] = 'Skorašnje poruke';

$txt[227] = 'Lokacija';
$txt[231] = 'Pol';
$txt[233] = 'Datum registracije';

$txt[234] = 'Pogledajte najsvežije poruke na forumu.';
$txt[235] = 'je najsvežije ažurirana tema';

$txt[238] = 'Muškarac';
$txt[239] = 'Žena';

$txt[240] = 'Nedozvoljen karakter u korisničkom imenu.';

$txt['welcome_guest'] = 'Dobrodošli, <b>' . $txt[28] . '</b>. Molim vas <a href="' . $scripturl . '?action=login">prijavite se</a> ili se <a href="' . $scripturl . '?action=register">registrujte</a>.';
$txt['welcome_guest_activate'] = '<br />Da niste izgubili svoj <a href="' . $scripturl . '?action=activate">aktivacioni e-mail?</a>';
$txt['hello_member'] = 'Ćao,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Dobrodošli,';
$txt[247] = 'Ćao,';
$txt[248] = 'Dobrodošli,';
$txt[249] = 'Molim vas';
$txt[250] = 'Nazad';
$txt[251] = 'Izaberite destinaciju';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Poslao';

$txt[287] = 'Smeško';
$txt[288] = 'Ljutko';
$txt[289] = 'Kiseo';
$txt[290] = 'Smejavko';
$txt[291] = 'Tužan';
$txt[292] = 'Namigivanje';
$txt[293] = 'Zelenko';
$txt[294] = 'Šokiran';
$txt[295] = 'Opušten';
$txt[296] = 'Molim?';
$txt[450] = 'Prevrtanje očima';
$txt[451] = 'Jezik';
$txt[526] = 'Zaprepašćen';
$txt[527] = 'Usne su mi zapečaćene';
$txt[528] = 'Neodlučan';
$txt[529] = 'Poljubac';
$txt[530] = 'Plačko';

$txt[298] = 'Urednik';
$txt[299] = 'Urednici';

$txt[300] = 'Označi teme u ovom forumu kao pročitane';
$txt[301] = 'Pregleda';
$txt[302] = 'Nove';

$txt[303] = 'Prikaži sve korisnike';
$txt[305] = 'Prikaži';
$txt[307] = 'E-mail';

$txt[308] = 'Prikazano';
$txt[309] = 'ukupno članova:';
$txt[310] = ' ';
$txt[311] = 'do';
$txt[315] = 'Zaboravili ste lozinku?';

$txt[317] = 'Datum';
// Use numeric entities in the below string.
$txt[318] = 'Od';
$txt[319] = 'Naslov';
$txt[322] = 'Proveri za nove poruke';
$txt[324] = 'Za';

$txt[330] = 'tema';
$txt[331] = 'Članovi';
$txt[332] = 'Spisak članova';
$txt[333] = 'Nove poruke';
$txt[334] = 'Nema novih poruka';

$txt['sendtopic_send'] = 'Pošalji';

$txt[371] = 'Odstupanje vremena';
$txt[377] = 'ili';

$txt[398] = 'Izvinite ali nema traženih rezultata';

$txt[418] = 'Obaveštenja';

$txt[430] = 'Izvinjavamo se %s, zabranjeno vam je da koristite ovaj forum!';

$txt[452] = 'Označi SVE poruke kao pročitane';

$txt[454] = 'Popularna tema (Više od ' . $modSettings['hotTopicPosts'] . ' poruka)';
$txt[455] = 'Veoma popularna tema (Više od ' . $modSettings['hotTopicVeryPosts'] . ' poruka)';
$txt[456] = 'Zaključana tema';
$txt[457] = 'Normalna tema';
$txt['participation_caption'] = 'Tema u kojoj ste odgovarali';

$txt[462] = 'Idi';

$txt[465] = 'Štampaj';
$txt[467] = 'Profil';
$txt[468] = 'Pregled teme';
$txt[470] = 'Nije dostupno';
$txt[471] = 'poruka';
$txt[473] = 'Ovo ime je već zauzeto od strane drugog člana.';

$txt[488] = 'Ukupno članova';
$txt[489] = 'Ukupno poruka';
$txt[490] = 'Ukupno tema';

$txt[497] = 'Prijavi me za sledećih<br/>minuta';

$txt[507] = 'Pregledaj';
$txt[508] = 'Prijavi me za stalno';

$txt[511] = 'Sačuvana';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = '';

$txt[578] = 'sati';
$txt[579] = 'dana';

$txt[581] = ', našeg najnovijeg člana.';

$txt[582] = 'Traži';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Ćao!+Da+li+si+tu?';
$txt[604] = 'YIM';

$txt[616] = 'Zapamtite, ovaj forum je u modu održavanja.';

$txt[641] = 'Pročitano';
$txt[642] = 'puta';

$txt[645] = 'Statistike foruma';
$txt[656] = 'Poslednji član';
$txt[658] = 'Ukupno kategorija';
$txt[659] = 'Poslednja poruka';

$txt[660] = 'Dobili ste';
$txt[661] = 'Kliknite';
$txt[662] = 'ovde';
$txt[663] = 'da biste ih pregledali.';

$txt[665] = 'Ukupno foruma';

$txt[668] = 'Odštampaj stranicu';

$txt[679] = 'Morate da unesete ispravnu e-mail adresu.';

$txt[683] = 'Ja sam geek!!';
$txt[685] = $context['forum_name'] . ' - info centar';

$txt[707] = 'Pošalji ovu temu';

$txt['sendtopic_title'] = 'Pošaljite temu &quot;%s&quot; prijatelju.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Dragi %s,';
$txt['sendtopic_this_topic'] = 'Želim da pogledaš "%s" na ' . $context['forum_name'] . '.  Da bi ga pogledao, klikni na ovaj link';
$txt['sendtopic_thanks'] = 'Hvala';
$txt['sendtopic_sender_name'] = 'Vaše ime';
$txt['sendtopic_sender_email'] = 'Vaša e-mail adresa';
$txt['sendtopic_receiver_name'] = 'Primaočevo ime';
$txt['sendtopic_receiver_email'] = 'Primaočeva e-mail adresa';
$txt['sendtopic_comment'] = 'Dodaj komentar';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Komentar je takođe dodat ovoj temi';

$txt[721] = 'Sakrij e-mail adresu od javnosti?';

$txt[737] = 'Označi sve';

// Use numeric entities in the below string.
$txt[1001] = 'Greška u bazi podataka';
$txt[1002] = 'Molim vas pokušajte ponovo. Ako ponovo vidite ovu grešku, prijavite grešku administatoru.';
$txt[1003] = 'Datoteka';
$txt[1004] = 'Linija';
// Use numeric entities in the below string.
$txt[1005] = 'SMF je pronašao i automatski pokušao da popravi grešku u vašoj bazi podataka. Ako nastavite da imate probleme i primate ove email-ove, kontaktirajte vaš hosting.';
$txt['database_error_versions'] = '<b>Napomena:</b> Izgleda da vaša baza podataka zahteva ažuriranje. Datoteke vašeg foruma su trenutno na verziji ' . $forum_version . ' dok je vaša baza podataka verzije SMF ' . $modSettings['smfVersion'] . '. Preporučujemo da izvršite poslednju verziju datoteke upgrade.php.';
$txt['template_parse_error'] = 'Greška u parsiranju predloška!';
$txt['template_parse_error_message'] = 'Izgleda da je nešto pošlo naopako sa sistemom predložaka na forumu. Ovaj problem bi trebao da bude privremen tako da vas molimo da dođete malo kasnije i pokušate ponovo. Ako nastavite da primate ovu poruku, kontaktirajte administratora.<br /><br />Možete da probate i da <a href="javascript:location.reload();">osvežite ovu stranicu</a>.';
$txt['template_parse_error_details'] = 'Došlo je do problema pri učitavanju <tt><b>%1$s</b></tt> predloška ili jezičke datoteke.  Proverite sintaksu i pokušajte ponovo - zapamtite, znaci navoda (<tt>\'</tt>) često moraju da budu izbegnuti koristeći obrnutu kosu crtu (<tt>\\</tt>).  Da biste videli detaljnije poruke o grešci od strane PHP-a, pokušajte sa <a href="' . $boardurl . '%1$s">direktnim pristupanjem datoteci</a>.<br /><br />Možda ćete želeti da <a href="javascript:location.reload();">osvežite ovu stranicu</a> ili <a href="' . $scripturl . '?theme=1">koristite podrazumevanu temu</a>.';

$txt['smf10'] = '<b>danas</b> u ';
$txt['smf10b'] = '<b>juče</b> u ';
$txt['smf20'] = 'Novo glasanje';
$txt['smf21'] = 'Pitanje';
$txt['smf23'] = 'Glasaj';
$txt['smf24'] = 'Ukupno glasova';
$txt['smf25'] = 'prečice: pritisnite alt+s da biste poslali ili alt+p za pregled';
$txt['smf29'] = 'Pogledajte rezultate';
$txt['smf30'] = 'Zaključaj glasanje';
$txt['smf30b'] = 'Otključaj glasanje';
$txt['smf39'] = 'Izmeni glasanje';
$txt['smf43'] = 'Glasanje';
$txt['smf47'] = '1 dan';
$txt['smf48'] = '1 nedelja';
$txt['smf49'] = '1 mesec';
$txt['smf50'] = 'Zauvek';
$txt['smf52'] = 'Prijavite se korisničkim imenom, lozinkom i dužinom sesije';
$txt['smf53'] = '1 čas';
$txt['smf56'] = 'PREMEŠTENA';
$txt['smf57'] = 'Unesite kratak opis kao razlog<br />zbog čega je tema premeštena.';
$txt['smf60'] = 'Nemate dovoljno poruka da biste mogli da menjate ugled. Potrebno vam je najmanje ';
$txt['smf62'] = 'Ne možete da ponovo promenite ugled u sledećih ';
$txt['smf82'] = 'Forum';
$txt['smf88'] = 'u';
$txt['smf96'] = 'Lepljiva tema';

$txt['smf138'] = 'Obriši';

$txt['smf199'] = 'Vaše privatne poruke';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[više statistike]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kod';
$txt['smf239'] = 'Citat';
$txt['smf240'] = 'Citat';

$txt['smf251'] = 'Podeli temu';
$txt['smf252'] = 'Spoji temu';
$txt['smf254'] = 'Naslov za novu temu';
$txt['smf255'] = 'Podeli samo ovu poruku.';
$txt['smf256'] = 'Podeli temu posle i uključujući ovu poruku.';
$txt['smf257'] = 'Izaberite poruke koje želite da podelite.';
$txt['smf258'] = 'Nova tema';
$txt['smf259'] = 'Tema je uspešno podeljena na dve teme.';
$txt['smf260'] = 'Početna tema';
$txt['smf261'] = 'Molim vas izaberite koje poruke želite da podelite.';
$txt['smf264'] = 'Teme su uspešno spojene.';
$txt['smf265'] = 'Novospojena tema';
$txt['smf266'] = 'Tema za spajanje';
$txt['smf267'] = 'Ciljni forum';
$txt['smf269'] = 'Ciljna tema';
$txt['smf274'] = 'Da li ste sigurni da želite da spojite';
$txt['smf275'] = 'sa';
$txt['smf276'] = 'Ova funkcija će spojiti poruke iz dve teme u jednu. Poruke će biti poređane po vremenu slanja. Stoga, najranije poslata poruka biće prikazana kao prva u spojenoj temi.';

$txt['smf277'] = 'Postavi temu kao lepljivu';
$txt['smf278'] = 'Odlepi temu';
$txt['smf279'] = 'Zaključaj temu';
$txt['smf280'] = 'Odključaj temu';

$txt['smf298'] = 'Napredna pretraga';

$txt['smf299'] = 'VELIKI BEZBEDNOSNI RIZIK:';
$txt['smf300'] = 'Niste uklonili ';

$txt['smf301'] = 'Stranica je napravljena za ';
$txt['smf302'] = ' sekundi sa ';
$txt['smf302b'] = ' upita.';

$txt['smf315'] = 'Koristite ovu funkciju da biste obavestili moderatore i administratore o uvredljivoj ili pogrešno poslatoj poruci.<br /><i>Vaša e-mail adresa biće otkrivena urednicima ako upotrebite ovu funkciju.</i>';

$txt['online2'] = 'Na mreži';
$txt['online3'] = 'Van mreže';
$txt['online4'] = 'Privatna poruka (Na mreži)';
$txt['online5'] = 'Privatna poruka (Van mreže)';
$txt['online8'] = 'Status';

$txt['topbottom4'] = 'Idi gore';
$txt['topbottom5'] = 'Idi dole';

if ($_SERVER['QUERY_STRING']=='')
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> :: <a href="http://www.siteground.com">Hosting Services for SMF by SiteGround</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}
else
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}


$txt['calendar3'] = 'Rođendani:';
$txt['calendar4'] = 'Događaji:';
$txt['calendar3b'] = 'Predstojeći rođendani:';
$txt['calendar4b'] = 'Predstojeći događaji:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Mesec:';
$txt['calendar10'] = 'Godina:';
$txt['calendar11'] = 'Dan:';
$txt['calendar12'] = 'Naslov događaja:';
$txt['calendar13'] = 'Pošalji u:';
$txt['calendar20'] = 'Izmeni događaje';
$txt['calendar21'] = 'Da obrišem ovaj događaj?';
$txt['calendar22'] = 'Obriši događaj';
$txt['calendar23'] = 'Dodaj događaj';
$txt['calendar24'] = 'Kalendar';
$txt['calendar37'] = 'Dodaj vezu ka kalendaru';
$txt['calendar43'] = 'Dodaj vezu ka dešavanju';
$txt['calendar47'] = 'Predstojeći kalendar';
$txt['calendar47b'] = 'Današnji kalendar';
$txt['calendar51'] = 'Nedelja';
$txt['calendar54'] = 'Broj dana:';
$txt['calendar_how_edit'] = 'kako da izmenim ove događaje?';
$txt['calendar_link_event'] = 'Poveži događaj sa porukom:';
$txt['calendar_confirm_delete'] = 'Da li ste sigurni da želite da obrišete ovaj događaj?';
$txt['calendar_linked_events'] = 'Povezani događaji';

$txt['moveTopic1'] = 'Pošalji preusmeravajuću temu';
$txt['moveTopic2'] = 'Promeni naslov teme';
$txt['moveTopic3'] = 'Nov naslov teme';
$txt['moveTopic4'] = 'Promeni naslov svake poruke';

$txt['theme_template_error'] = 'Ne mogu da učitam predložak \'%s\'.';
$txt['theme_language_error'] = 'Ne mogu da učitam jezičku datoteku \'%s\'.';

$txt['parent_boards'] = 'Potforumi';

$txt['smtp_no_connect'] = 'Ne mogu da se povežem sa SMTP serverom';
$txt['smtp_port_ssl'] = 'Podešavanja SMTP porta su pogrešna; port za SSL servere bi trebalo da bude 465.';
$txt['smtp_bad_response'] = 'Ne možemo pribaviti odgovor servera';
$txt['smtp_error'] = 'Zapao sam u probleme prilikom slanja pošte. Greška: ';
$txt['mail_send_unable'] = 'Ne mogu da pošaljem poštu na e-mail adresu \'%s\'';

$txt['mlist_search'] = 'Traži korisnike';
$txt['mlist_search2'] = 'Traži ponovo';
$txt['mlist_search_email'] = 'Pretražuj po e-mail adresi';
$txt['mlist_search_messenger'] = 'Pretražuj po messenger nadimku';
$txt['mlist_search_group'] = 'Pretražuj po poziciji';
$txt['mlist_search_name'] = 'Pretražuj po imenu';
$txt['mlist_search_website'] = 'Pretražuj po vebsajtu';
$txt['mlist_search_results'] = 'Rezultati pretrage za';

$txt['attach_downloaded'] = 'preuzeto';
$txt['attach_viewed'] = 'pregledano';
$txt['attach_times'] = 'puta';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Podešavanja';
$txt['never'] = 'Nikad';
$txt['more'] = 'još';

$txt['hostname'] = 'Ime domaćina';
$txt['you_are_post_banned'] = '%s, zabranjeno vam je da šaljete poruke ili privatne poruke na ovom forumu.';
$txt['ban_reason'] = 'Razlog';

$txt['tables_optimized'] = 'Tabele baze podataka su optimizovane';

$txt['add_poll'] = 'Dodaj glasanje';
$txt['poll_options6'] = 'Možete da izaberete najviše %s opcija.';
$txt['poll_remove'] = 'Ukloni glasanje';
$txt['poll_remove_warn'] = 'Da li ste sigurni da želite da uklonite glasanje iz ove teme?';
$txt['poll_results_expire'] = 'Rezultati će biti prikazani kada se glanje završi';
$txt['poll_expires_on'] = 'Glasanje se završava';
$txt['poll_expired_on'] = 'Glasanje završeno';
$txt['poll_change_vote'] = 'Ukloni glas';
$txt['poll_return_vote'] = 'Opcije glasanja';

$txt['quick_mod_remove'] = 'Ukloni izabrano';
$txt['quick_mod_lock'] = 'Zaključaj izabrano';
$txt['quick_mod_sticky'] = 'Izabrano učini lepljivin';
$txt['quick_mod_move'] = 'Premesti izabrano u';
$txt['quick_mod_merge'] = 'Spoji izabrano';
$txt['quick_mod_markread'] = 'Označi izabrano kao pročitano';
$txt['quick_mod_go'] = 'Idi!';
$txt['quickmod_confirm'] = 'Da li ste sigurni da želite da uradite ovo?';

$txt['spell_check'] = 'Provera pravopisa';

$txt['quick_reply_1'] = 'Brz odgovor';
$txt['quick_reply_2'] = 'Sa <i>Brzim odgovorom</i> možete da koristite BBkod i smajlije kao što biste to činili i u normalnoj poruci ali mnogo udobnije.';
$txt['quick_reply_warning'] = 'Upozorenje: ova tema je trenutno zaključana!<br />Samo administratori i urednici mogu da odgovaraju.';

$txt['notification_enable_board'] = 'Da li ste sigurni da želite da omogućite obaveštavanje o novim temama u ovom forumu?';
$txt['notification_disable_board'] = 'Da li ste sigurni da želite da onemogućite obaveštavanje o novim temama u ovom forumu?';
$txt['notification_enable_topic'] = 'Da li ste sigurni da želite da omogućite obaveštavanje o novim odgovorima u ovom forumu?';
$txt['notification_disable_topic'] = 'Da li ste sigurni da želite da onemogućite obaveštavanje o novim odgovorima u ovom forumu?';

$txt['rtm1'] = 'Prijavi uredniku';

$txt['unread_topics_visit'] = 'Skorašnje nepročitane teme';
$txt['unread_topics_visit_none'] = 'Nema nepročitanih tema od vaše poslednje posete.  <a href="' . $scripturl . '?action=unread;all">Kliknite ovde da probate sve nepročitane teme</a>.';
$txt['unread_topics_all'] = 'Sve nepročitane teme';
$txt['unread_replies'] = 'Ažurirane teme';

$txt['who_title'] = 'Ko je prisutan';
$txt['who_and'] = ' i ';
$txt['who_viewing_topic'] = ' pregledaju ovu temu.';
$txt['who_viewing_board'] = ' pregledaju ovaj forum.';
$txt['who_member'] = 'Član';

$txt['powered_by_php'] = 'Pokreće PHP';
$txt['powered_by_mysql'] = 'Pokreće MySQL';
$txt['valid_html'] = 'Ispravan HTML 4.01!';
$txt['valid_xhtml'] = 'Ispravan XHTML 1.0!';
$txt['valid_css'] = 'Ispravan CSS!';

$txt['guest'] = 'gost';
$txt['guests'] = 'gostiju';
$txt['user'] = 'korisnik';
$txt['users'] = 'korisnika';
$txt['hidden'] = 'sakrivenih';
$txt['buddy'] = 'Prijatelj';
$txt['buddies'] = 'Prijatelji';
$txt['most_online_ever'] = 'Najviše prisutnih korisnika';
$txt['most_online_today'] = 'Najviše prisutnih korisnika danas';

$txt['merge_select_target_board'] = 'Izaberite odredišni forum za spojene teme';
$txt['merge_select_poll'] = 'Izaberite koje glasanje bi spojene teme trebalo da imaju';
$txt['merge_topic_list'] = 'Izaberite teme za spajanje';
$txt['merge_select_subject'] = 'Izaberite naslov spojenih tema';
$txt['merge_custom_subject'] = 'Korisnički naslov';
$txt['merge_enforce_subject'] = 'Promeni naslov svih poruka';
$txt['merge_include_notifications'] = 'Da uključim obaveštenja?';
$txt['merge_check'] = 'Spojiti?';
$txt['merge_no_poll'] = 'Bez glasanja';

$txt['response_prefix'] = 'Odg: ';
$txt['current_icon'] = 'Trenutna ikona';

$txt['smileys_current'] = 'Trenutna postavka smajlija';
$txt['smileys_none'] = 'Bez smajlija';
$txt['smileys_forum_board_default'] = 'Podrazumevana na forumu';

$txt['search_results'] = 'Rezultati pretrage';
$txt['search_no_results'] = 'Nema nađenih rezultata';

$txt['totalTimeLogged1'] = 'Ukupno vreme na forumu: ';
$txt['totalTimeLogged2'] = ' dana, ';
$txt['totalTimeLogged3'] = ' sati i ';
$txt['totalTimeLogged4'] = ' minuta.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'č ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Ima';
$txt['approve_thereare'] = 'Ima';
$txt['approve_member'] = 'jedan član';
$txt['approve_members'] = 'člana';
$txt['approve_members_waiting'] = 'koji čekaju na odobrenje.';

$txt['notifyboard_turnon'] = 'Da li želite da primate e-mail sa obaveštenjem kada neko postavi novu temu u ovom forumu?';
$txt['notifyboard_turnoff'] = 'Da li ste sigurni da ne želite da primate obaveštenje o novim temama u ovom forumu?';

$txt['activate_code'] = 'Vaš aktivacioni kod je';

$txt['find_members'] = 'Pronađi članove';
$txt['find_username'] = 'Ime, korisničko ime ili e-mail adresa';
$txt['find_buddies'] = 'Prikazati samo prijatelje?';
$txt['find_wildcards'] = 'Dozvoljeni džokeri: *, ?';
$txt['find_no_results'] = 'Nema pronađenih rezultata';
$txt['find_results'] = 'Rezultati';
$txt['find_close'] = 'Zatvori';

$txt['unread_since_visit'] = 'Prikaži nepročitane poruke od moje poslednje posete';
$txt['show_unread_replies'] = 'Prikaži nove odgovore na moje poruke';

$txt['change_color'] = 'Promeni boju';

$txt['quickmod_delete_selected'] = 'Obriši izabrano';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Primili ste jednu ili više novih privatnih poruka.\\nŽelite li da ih odmah pogledate (u novom prozoru)?';

$txt['previous_next_back'] = '&laquo; prethodna tema';
$txt['previous_next_forward'] = 'sledeća tema &raquo;';

$txt['movetopic_auto_board'] = '[FORUM]';
$txt['movetopic_auto_topic'] = '[LINK TEME]';
$txt['movetopic_default'] = 'Tema je premeštena u ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Skupi ili raširi zaglavlje.';

$txt['mark_unread'] = 'Označi kao nepročitano';

$txt['ssi_not_direct'] = 'Molim vas ne pristupajte SSI.php direktno preko URL-a; verovatno želite da koristite putanju (%s) ili dodate ?ssi_function=nesto.';
$txt['ssi_session_broken'] = 'SSI.php nije mogao da učita sesiju! Ovo može prouzrokovati probleme prilikom odjavljivanja ili korišćenja drugih funkcija - osigurajte da SSI.php bude uvršćen pre *bilo čega* u vašoj skripti!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Pregledaj poruku';
$txt['preview_fetch'] = 'Dobavljam pregled...';
$txt['preview_new'] = 'Nova poruka';
$txt['error_while_submitting'] = 'Došlo je do sledećih grešaka prilikom slanja ove poruke:';

$txt['split_selected_posts'] = 'Izabrane poruke';
$txt['split_selected_posts_desc'] = 'Poruke naznačene ispod će obrazovati novu temu nakon deobe.';
$txt['split_reset_selection'] = 'resetuj odabir';

$txt['modify_cancel'] = 'Otkaži';
$txt['mark_read_short'] = 'Označi kao pročitano';

$txt['pm_short'] = 'Moje poruke';
$txt['hello_member_ndt'] = 'Zdravo';

$txt['ajax_in_progress'] = 'Učitavam...';

?>