<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'hr_HR.utf8';
$txt['lang_dictionary'] = 'hr';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Nedjelja', 'Ponedjeljak', 'Utorak', 'Srijeda', '&#268;etvrtak', 'Petak', 'Subota');
$txt['days_short'] = array('Ned', 'Pon', 'Uto', 'Sri', '&#268;et', 'Pet', 'Sub');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Sije&#269;anj', 'Velja&#269;a', 'O&#382;ujak', 'Travanj', 'Svibanj', 'Lipanj', 'Srpanj', 'Kolovoz', 'Rujan', 'Listopad', 'Studeni', 'Prosinac');
$txt['months_titles'] = array(1 => 'Sije&#269;anj', 'Velja&#269;a', 'O&#382;ujak', 'Travanj', 'Svibanj', 'Lipanj', 'Srpanj', 'Kolovoz', 'Rujan', 'Listopad', 'Studeni', 'Prosinac');
$txt['months_short'] = array(1 => 'Sij', 'Vel', 'O&#382;u', 'Tra', 'Svi', 'Lip', 'Srp', 'Kol', 'Ruj', 'Lis', 'Stu', 'Pro');

$txt['newmessages0'] = 'je novo';
$txt['newmessages1'] = 'su nova';
$txt['newmessages3'] = 'Nove';
$txt['newmessages4'] = ',';

$txt[2] = 'Admin';

$txt[10] = 'Po&#353;alji';

$txt[17] = 'Uredi';
$txt[18] = ' Naslovnica';
$txt[19] = '&#268;lanova';
$txt[20] = 'Forum';
$txt[21] = 'Odgovora';
$txt[22] = 'Zadnji post';

$txt[24] = '(Nema naslova)';
$txt[26] = 'Postova';
$txt[27] = 'Profil';
$txt[28] = 'Gost';
$txt[29] = 'Autor';
$txt[30] = ' na';
$txt[31] = 'Izbri&#353;i';
$txt[33] = 'Nova Tema';

$txt[34] = 'Prijava';
// Use numeric entities in the below string.
$txt[35] = 'Korisni&#269;ko Ime';
$txt[36] = 'Lozinka';

$txt[40] = 'Korisni&#269;ko Ime ne postoji.';

$txt[62] = 'Moderator';
$txt[63] = 'Brisanje Teme';
$txt[64] = 'Tema';
$txt[66] = 'Ure&#273;ivanje poruke';
$txt[68] = 'Ime';
$txt[69] = 'Email';
$txt[70] = 'Naslov';
$txt[72] = 'Poruka';

$txt[79] = 'Profil';

$txt[81] = 'Unesite lozinku';
$txt[82] = 'Potvrdite lozinku';
$txt[87] = 'Status';

$txt[92] = 'Pregled profila korisnika:';
$txt[94] = 'Ukupno';
$txt[95] = 'Postova';
$txt[96] = 'Web stranica';
$txt[97] = 'Registracija';

$txt[101] = 'Referentni Forum';
$txt[102] = 'Novosti';
$txt[103] = 'Forum';

$txt[104] = 'Zaklju&#269;aj/Otklju&#269;aj Temu';
$txt[105] = 'Po&#353;alji';
$txt[106] = 'Do&#353;lo je do Gre&#353;ke!';
$txt[107] = 'na';
$txt[108] = 'Odjava';
$txt[109] = 'Autor';
$txt[110] = 'Odgovora';
$txt[111] = 'Zadnji post';
$txt[114] = 'Administracija';
// Use numeric entities in the below string.
$txt[118] = 'Tema';
$txt[119] = 'Pomo&#263;';
$txt[121] = 'Brisanje poruke';
$txt[125] = 'Obavijest';
$txt[126] = '&#381;elite li primati email obavijesti o novim postovima u ovoj temi?';
// Use numeric entities in the below string.
$txt[130] = "Po&#353;tovanje,\n" . $context['forum_name'] . ' Tim.';
$txt[131] = 'Pretplata na ovaj Forum';
$txt[132] = 'Premje&#353;tanje Teme';
$txt[133] = 'Premjestiti u';
$txt[139] = '&nbsp;Str';
$txt[140] = 'Aktivnih korisnika u zadnjih ' . $modSettings['lastActive'] . ' minuta';
$txt[144] = 'Privatne Poruke';
$txt[145] = 'Citirati ovo u Odgovoru';
$txt[146] = 'Odgovor';

$txt[151] = 'Nema poruka...';
$txt[152] = 'Privatne Poruke: ';
$txt[153] = 'poruka';
$txt[154] = 'Brisanje poruke';

$txt[158] = 'Korisnika online';
$txt[159] = 'Privatne Poruke';
$txt[160] = 'Sko&#269;i na';
$txt[161] = 'kreni';
$txt[162] = 'Jeste li sigurni da &#382;elite ukloniti ovu temu?';
$txt[163] = 'Da';
$txt[164] = 'Ne';

$txt[166] = 'Rezultati Pretra&#382;ivanja';
$txt[167] = 'Kraj rezultata';
$txt[170] = 'Na&#382;alost, pretra&#382;ivanje nije dalo rezultate';
$txt[176] = 'na';

$txt[182] = 'Tra&#382;i';
$txt[190] = 'Sve';

$txt[193] = 'Natrag';
$txt[194] = 'Podsjetnik';
$txt[195] = 'Autor teme';
$txt[196] = 'Naslov';
$txt[197] = 'Autor';
$txt[200] = 'Lista svih registriranih &#269;lanova.';
$txt[201] = 'Dobrodo&#353;li';
$txt[208] = 'Administracija';
$txt[211] = 'Zadnja izmjena';
$txt[212] = '&#381;elite li otkazati Pretplatu na ovu temu?';

$txt[214] = 'Novi Postovi';

$txt[227] = 'Lokacija';
$txt[231] = 'Spol';
$txt[233] = 'Datum registracije';

$txt[234] = 'Najnoviji Postovi';
$txt[235] = 'je najnovija tema';

$txt[238] = 'Mu&#353;ki';
$txt[239] = '&#381;enski';

$txt[240] = 'Kori&#353;teni su neispravni znakovi u Korisni&#269;kom Imenu.';

$txt['welcome_guest'] = 'Dobrodo&#353;li, <b>' . $txt[28] . '</b>. Molimo, <a href="' . $scripturl . '?action=login">prijavite se</a> ili <a href="' . $scripturl . '?action=register">se registrirajte</a>.';
$txt['welcome_guest_activate'] = '<br />Jeste li propustili <a href="' . $scripturl . '?action=activate">aktivacijsku email poruku?</a>';
$txt['hello_member'] = 'Hej,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Dobrodo&#353;li,';
$txt[247] = 'Hej,';
$txt[248] = 'Dobrodo&#353;li,';
$txt[249] = 'Molim';
$txt[250] = 'Natrag';
$txt[251] = 'Odaberite odredi&#353;te';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Autor';

$txt[287] = 'Smje&#353;ko';
$txt[288] = 'Ljut';
$txt[289] = 'Sirast';
$txt[290] = 'Smijeh';
$txt[291] = 'Tu&#382;an';
$txt[292] = 'Namigujem';
$txt[293] = 'Cerim se';
$txt[294] = '&#352;okiran';
$txt[295] = 'Cool';
$txt[296] = '&#352;?';
$txt[450] = 'Vrtim o&#269;ima';
$txt[451] = 'Jezik';
$txt[526] = 'Osramo&#263;en';
$txt[527] = 'Vezanih usana';
$txt[528] = 'Neodlu&#269;an';
$txt[529] = 'Poljubac';
$txt[530] = 'Pla&#269;';

$txt[298] = 'Moderator';
$txt[299] = 'Moderatori';

$txt[300] = 'Ozna&#269;i ovaj Forum kao Pro&#269;itan';
$txt[301] = 'Hitova';
$txt[302] = 'Novo';

$txt[303] = 'Svi korisnici';
$txt[305] = 'Prika&#382;i';
$txt[307] = 'Email';

$txt[308] = 'Prikazano';
$txt[309] = 'od';
$txt[310] = 'ukupno &#269;lanova';
$txt[311] = 'do';
$txt[315] = 'Zaboravili ste lozinku?';

$txt[317] = 'Datum';
// Use numeric entities in the below string.
$txt[318] = 'Od';
$txt[319] = 'Naslov';
$txt[322] = 'Osvje&#382;i';
$txt[324] = 'Za';

$txt[330] = 'Tema';
$txt[331] = '&#268;lanovi';
$txt[332] = 'Lista &#268;lanova';
$txt[333] = 'Novi Postovi';
$txt[334] = 'Nema Novih Postova';

$txt['sendtopic_send'] = 'Po&#353;alji';

$txt[371] = 'Vremenski Pomak';
$txt[377] = 'ili';

$txt[398] = 'Na&#382;alost, ni&#353;ta nije prona&#273;eno';

$txt[418] = 'Obavijesti';

$txt[430] = 'Na&#382;alost %s, vi ste isklju&#269;eni sa ovog foruma!';

$txt[452] = 'Ozna&#269;i kao Pro&#269;itano';

$txt[454] = 'Popularna Tema (Vi&#353;e od ' . $modSettings['hotTopicPosts'] . ' odgovora)';
$txt[455] = 'Vrlo Popularna Tema (Vi&#353;e od ' . $modSettings['hotTopicVeryPosts'] . ' odgovora)';
$txt[456] = 'Zaklju&#269;ana Tema';
$txt[457] = 'Normalna Tema';
$txt['participation_caption'] = 'Teme u kojima ste vi sudjelovali';

$txt[462] = 'Kreni';

$txt[465] = 'Ispis';
$txt[467] = 'Profil';
$txt[468] = 'Pregled Teme';
$txt[470] = 'n/a';
$txt[471] = 'poruka';
$txt[473] = 'Ovo ime ve&#263; postoji.';

$txt[488] = 'Ukupno &#268;lanova';
$txt[489] = 'Ukupno Postova';
$txt[490] = 'Ukupno Tema';

$txt[497] = 'Zapamti me ovoliko minuta';

$txt[507] = 'Pregled';
$txt[508] = 'Zapamti me Zauvijek';

$txt[511] = 'Evidentirano';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'od';

$txt[578] = 'sati';
$txt[579] = 'dana';

$txt[581] = ', na&#353; najnoviji &#269;lan.';

$txt[582] = 'Klju&#269;ne rije&#269;i';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hej.+Ima+li+koga?';
$txt[604] = 'YIM';

$txt[616] = 'Ne zaboravite, ovaj forum je u \'Maintenance Modu\'.';

$txt[641] = 'Posjeta:';
$txt[642] = 'puta';

$txt[645] = 'Statistika Foruma';
$txt[656] = 'Najnoviji &#268;lan';
$txt[658] = 'Ukupno Kategorija';
$txt[659] = 'Najnoviji Post';

$txt[660] = 'Imate';
$txt[661] = 'Kliknite';
$txt[662] = 'ovdje';
$txt[663] = 'da biste ih vidjeli.';

$txt[665] = 'Ukupno Foruma';

$txt[668] = 'Ispis Stranice';

$txt[679] = 'Ovo mora biti valjana email adresa.';

$txt[683] = 'Ja sam štreber!!';
$txt[685] = $context['forum_name'] . ' - Info Centar';

$txt[707] = 'Preporuka';

$txt['sendtopic_title'] = 'Preporu&#269;ite nekome temu: &quot;%s&quot;';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Po&#353;tovanje %s,';
$txt['sendtopic_this_topic'] = 'Mo&#382;da bi ti ovo moglo biti interesantno "%s" na ' . $context['forum_name'] . '.  Link';
$txt['sendtopic_thanks'] = 'Hvala';
$txt['sendtopic_sender_name'] = 'Va&#353;e ime';
$txt['sendtopic_sender_email'] = 'Va&#353;a email adresa';
$txt['sendtopic_receiver_name'] = 'Ime primatelja';
$txt['sendtopic_receiver_email'] = 'Email adresa primatelja';
$txt['sendtopic_comment'] = 'Komentar';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Dodan je i komentar vezan uz ovu temu';

$txt[721] = 'Sakriti email adresu?';

$txt[737] = 'Ozna&#269;i sve';

// Use numeric entities in the below string.
$txt[1001] = 'Gre&#353;ka u bazi podataka';
$txt[1002] = 'Poku&#353;ajte ponovno.  Ako ponovno do&#273;e do ove gre&#353;ke, obavijestite administratora.';
$txt[1003] = 'Datoteka';
$txt[1004] = 'Linija';
// Use numeric entities in the below string.
$txt[1005] = 'SMF je otkrio i poku&#353;ao automatski popraviti gre&#353;ku u va&#353;oj bazi podataka.  Ako i dalje budete imali problema ili ako i dalje budete primali ovakav email, kontaktirajte svog hosta.';
$txt['database_error_versions'] = '<b>Napomena:</b> Izgleda da va&#353;a baza podataka <em>mo&#382;da</em> treba noviju verziju. Datoteke va&#353;eg foruma trenutno su verzija  ' . $forum_version . ', a verzija va&#353;e baze podataka je ' . $modSettings['smfVersion'] . '. Gre&#353;ka koja se javlja iznad, mo&#382;da &#263;e biti ispravljena ako instalirate najnoviju verziju upgrade.php.';
$txt['template_parse_error'] = 'Parse Error predlo&#353;ka!';
$txt['template_parse_error_message'] = 'Izgleda da je do&#353;lo do problema sa predlo&#353;kom foruma.  Ovaj problem trebao bi biti samo privremen pa vas molimo da se vratite kasnije i poku&#353;ate ponovno.   Ako se ova poruka bude i dalje pojavljivala, molimo vas da kontaktirate administratora.<br /><br />You can also try <a href="javascript:location.reload();">refreshing this page</a>.';
$txt['template_parse_error_details'] = 'Problem u u&#269;itavanju <tt><b>%1$s</b></tt> predlo&#353;ka ili jezi&#269;ne datoteke.  Provjerite sintaksu i poku&#353;ajte ponovno - zapamtite, jednostavni navodnici (<tt>\'</tt>) &#269;esto moraju biti odvojeni sa kosom crtom (<tt>\\</tt>).  Da bi ste pogledali informacije o odre&#273;enoj PHP pogre&#353;ki, poku&#353;ajte <a href="' . $boardurl . '%1$s">pristupiti datoteci direktno</a>.<br /><br />Mo&#382;ete i probati <a href="javascript:location.reload();">osvije&#382;iti / refresh ovu stranicu</a> ili <a href="' . $scripturl . '?theme=1">koristite standardni predlo&#382;ak</a>.';

$txt['smf10'] = '<b>Danas</b> u ';
$txt['smf10b'] = '<b>Ju&#269;er</b> u ';
$txt['smf20'] = 'Nova tema s Anketom';
$txt['smf21'] = 'Pitanje';
$txt['smf23'] = 'Glasaj';
$txt['smf24'] = 'Ukupno glasača';
$txt['smf25'] = 'kratice: alt+s za slanje ili alt+p za pregled poruke';
$txt['smf29'] = 'Rezultati';
$txt['smf30'] = 'Zaklju&#269;aj Glasanje';
$txt['smf30b'] = 'Otklju&#269;aj Glasanje';
$txt['smf39'] = 'Ure&#273;ivanje Ankete';
$txt['smf43'] = 'Anketa';
$txt['smf47'] = '1 Dan';
$txt['smf48'] = '1 Tjedan';
$txt['smf49'] = '1 Mjesec';
$txt['smf50'] = 'Beskona&#269;no';
$txt['smf52'] = 'Prijavite se korisni&#269;kim imenom, lozinkom i duljinom prijave';
$txt['smf53'] = '1 Sat';
$txt['smf56'] = 'Premje&#353;teno';
$txt['smf57'] = 'Kratki opis o razlogu premje&#353;tanja.';
$txt['smf60'] = '&#381;ao nam je, nemate dovoljno postova da promjenite karmu - trebate najmanje ';
$txt['smf62'] = '&#381;ao nam je, ne mo&#382;ete ponoviti karmu bez &#269;ekanja ';
$txt['smf82'] = 'Forum';
$txt['smf88'] = 'u';
$txt['smf96'] = 'Zalijepljena Tema';

$txt['smf138'] = 'Izbri&#353;i';

$txt['smf199'] = 'Va&#353;e Privatne Poruke';

$txt['smf211'] = 'kB';

$txt['smf223'] = '[Ostale Statistike]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kod';
$txt['smf239'] = 'Citat';
$txt['smf240'] = 'Citat:';

$txt['smf251'] = 'Razdvajanje Teme';
$txt['smf252'] = 'Spajanje Tema';
$txt['smf254'] = 'Naslov Nove Teme';
$txt['smf255'] = 'Odvojiti samo ovaj post.';
$txt['smf256'] = 'Odvojiti ovaj post i postove ispod.';
$txt['smf257'] = 'Odabir postova za odvajanje.';
$txt['smf258'] = 'Nova Tema';
$txt['smf259'] = 'Tema je uspje&#353;no razdvojena na dvije teme.';
$txt['smf260'] = 'Izvorna Tema';
$txt['smf261'] = 'Odaberite postove koje &#382;elite odvojiti.';
$txt['smf264'] = 'Teme su uspje&#353;no spojene.';
$txt['smf265'] = 'NovoStvorena Tema';
$txt['smf266'] = 'Teme za spojiti';
$txt['smf267'] = 'Ciljni forum';
$txt['smf269'] = 'Tema';
$txt['smf274'] = 'Jeste li sigurni da &#382;elite spojiti';
$txt['smf275'] = 'sa';
$txt['smf276'] = 'Ova funkcija &#263;e spojiti poruke iz dvije temu u jednu novu temu. Poruke &#263;e biti sortirane po datumu. Najstarija poruka iz obje teme &#263;e postati prva poruka nove teme.';

$txt['smf277'] = 'Zalijepiti ovu temu';
$txt['smf278'] = 'Odlijepiti ovu temu';
$txt['smf279'] = 'Zaklju&#269;ati ovu temu';
$txt['smf280'] = 'Otklju&#269;ati ovu temu';

$txt['smf298'] = 'Napredno pretra&#382;ivanje';

$txt['smf299'] = 'VELIKI SIGURNOSNI RIZIK:';
$txt['smf300'] = 'Niste uklonili ';

$txt['smf301'] = 'Stranica je generirana za ';
$txt['smf302'] = ' sekundi uz ';
$txt['smf302b'] = ' upita.';

$txt['smf315'] = 'Kroz ovaj obrazac mo&#382;ete skrenuti pa&#382;nju moderatora na poruke koje, po va&#353;em mi&#353;ljenju, nisu u skladu s pravilima foruma.<br /><i>Napomena: Moderatori &#263;e vidjeti i va&#353;u email adresu.</i>';

$txt['online2'] = 'Online';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Privatna Poruka (Online)';
$txt['online5'] = 'Privatna Poruka (Offline)';
$txt['online8'] = 'Status';

$txt['topbottom4'] = 'Gore';
$txt['topbottom5'] = 'Dolje';

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


$txt['calendar3'] = 'Ro&#273;endani:';
$txt['calendar4'] = 'Doga&#273;aji:';
$txt['calendar3b'] = 'Nadolaze&#263;i Ro&#273;endani:';
$txt['calendar4b'] = 'Nadolaze&#263;i Doga&#273;aji:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Mjesec:';
$txt['calendar10'] = 'Godina:';
$txt['calendar11'] = 'Dan:';
$txt['calendar12'] = 'Naslov Doga&#273;aja:';
$txt['calendar13'] = 'Poslati u:';
$txt['calendar20'] = 'Ure&#273;ivanje Doga&#273;aja';
$txt['calendar21'] = 'Izbrisati ovaj doga&#273;aj?';
$txt['calendar22'] = 'Brisanje Doga&#273;aja';
$txt['calendar23'] = 'Dodavanje Doga&#273;aja';
$txt['calendar24'] = 'Kalendar';
$txt['calendar37'] = 'Link na Kalendar';
$txt['calendar43'] = 'Link na Doga&#273;aj';
$txt['calendar47'] = 'Nadolaze&#263;i kalendar';
$txt['calendar47b'] = 'Dana&#353;nji kalendar';
$txt['calendar51'] = 'Tjedan';
$txt['calendar54'] = 'Broj dana:';
$txt['calendar_how_edit'] = 'kako se ure&#273;uju ovi doga&#273;aji?';
$txt['calendar_link_event'] = 'Pove&#382;i Doga&#273;aj s Postom:';
$txt['calendar_confirm_delete'] = 'Jeste li sigurni da &#382;elite izbrisati ovaj doga&#273;aj?';
$txt['calendar_linked_events'] = 'Povezani Doga&#273;aji';

$txt['moveTopic1'] = 'Obavijest o premje&#353;tanju na izvornom mjestu teme';
$txt['moveTopic2'] = 'Promijeni naslov teme';
$txt['moveTopic3'] = 'Novi naslov';
$txt['moveTopic4'] = 'Promijeni naslove svih postova u temi';

$txt['theme_template_error'] = 'Nije uspjelo u&#269;itavanje \'%s\' predlo&#353;ka.';
$txt['theme_language_error'] = 'Nije uspjelo u&#269;itavanje jezi&#269;ne datoteke \'%s\' .';

$txt['parent_boards'] = 'Podrubrike';

$txt['smtp_no_connect'] = 'Ne mogu se spojiti na SMTP poslu&#382;itelj';
$txt['smtp_port_ssl'] = 'SMTP port postavke su neispravne; treba biti 465 za SSL servere.';
$txt['smtp_bad_response'] = 'Ne mogu dobiti odgovor email poslu&#382;itelja';
$txt['smtp_error'] = 'Problemi prilikom slanja emaila. Gre&#353;ka: ';
$txt['mail_send_unable'] = 'Neuspje&#353;no slanje emaila na adresu \'%s\'';

$txt['mlist_search'] = 'Tra&#382;enje korisnika';
$txt['mlist_search2'] = 'Tra&#382;i ponovo';
$txt['mlist_search_email'] = 'Po email adresi';
$txt['mlist_search_messenger'] = 'Po nadimku';
$txt['mlist_search_group'] = 'Po poziciji';
$txt['mlist_search_name'] = 'Po imenu';
$txt['mlist_search_website'] = 'Po websajtu';
$txt['mlist_search_results'] = 'Rezultati za';

$txt['attach_downloaded'] = '<span class="verysmall">(downloada:';
$txt['attach_viewed'] = '(hitova:';
$txt['attach_times'] = ')</span>';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Postavke';
$txt['never'] = 'Nikada';
$txt['more'] = 'vi&#353;e';

$txt['hostname'] = 'Host';
$txt['you_are_post_banned'] = 'Na&#382;alost %s, zabranjeno vam je pisanje postova i slanje privatnoh poruka na ovoj rubrici.';
$txt['ban_reason'] = 'Razlog';

$txt['tables_optimized'] = 'Baza je optimizirana';

$txt['add_poll'] = 'Dodaj anketu';
$txt['poll_options6'] = 'Mo&#382;ete imati maksimalno %s odgovora.';
$txt['poll_remove'] = 'Brisanje Ankete';
$txt['poll_remove_warn'] = 'Jeste li sigurni da &#382;elite ukloniti ovu Anketu?';
$txt['poll_results_expire'] = 'Rezultati &#263;e biti prikazani kada glasanje zavr&#353;i.';
$txt['poll_expires_on'] = 'Glasanje zavr&#353;ava';
$txt['poll_expired_on'] = 'Glasanje zavr&#353;eno';
$txt['poll_change_vote'] = 'Ukloni moj glas';
$txt['poll_return_vote'] = 'Glasa&#269;ke Opcije';

$txt['quick_mod_remove'] = 'Ukloni odabrano';
$txt['quick_mod_lock'] = 'Zaklju&#269;aj odabrano';
$txt['quick_mod_sticky'] = 'Zalijepi odabrano';
$txt['quick_mod_move'] = 'Premjesti odabrano na';
$txt['quick_mod_merge'] = 'Spoji odabrano';
$txt['quick_mod_markread'] = 'Ozna&#269;i pro&#269;itanim';
$txt['quick_mod_go'] = 'Kreni!';
$txt['quickmod_confirm'] = 'Jeste li sigurni da &#382;elite to u&#269;initi?';

$txt['spell_check'] = 'Provjera Pravopisa';

$txt['quick_reply_1'] = 'Brzi Odgovor';
$txt['quick_reply_2'] = '<i>Brzi Odgovor</i> slu&#382;i za brzo slanje kratkih, jednostavnih postova. Ako &#382;elite napisati kompleksno formatiranu poruku, kliknite dugme za normalni odgovor.';
$txt['quick_reply_warning'] = 'Upozorenje: ova tema je trenutno zaklju&#269;ana!<br />Samo administratori i moderatori mogu odgovarati.';

$txt['notification_enable_board'] = 'Jeste li sigurni da &#382;elite Uklju&#269;iti obavjesti o novim temama u ovoj rubrici?';
$txt['notification_disable_board'] = 'Jeste li sigurni da &#382;elite Isklju&#269;iti obavjesti o novim temama u ovoj rubrici?';
$txt['notification_enable_topic'] = 'Jeste li sigurni da &#382;elite Uklju&#269;iti obavjesti o novim odgovorima u ovoj temi?';
$txt['notification_disable_topic'] = 'Jeste li sigurni da &#382;elite Isklju&#269;iti obavjesti o novim odgovorima u ovoj temi?';

$txt['rtm1'] = 'Prijaviti moderatoru';

$txt['unread_topics_visit'] = 'Nove Nepro&#269;itane Teme';
$txt['unread_topics_visit_none'] = 'Nema nepro&#269;itanih tema od va&#353;e zadnje posjete.  <a href="' . $scripturl . '?action=unread;all">Kliknite ovdje za sve nepro&#269;itane teme</a>.';
$txt['unread_topics_all'] = 'Sve Nepro&#269;itane Teme';
$txt['unread_replies'] = 'Novi odgovori';

$txt['who_title'] = 'Tko je Online';
$txt['who_and'] = ' i ';
$txt['who_viewing_topic'] = ' pregledava ovu temu.';
$txt['who_viewing_board'] = ' pregledava ovaj forum.';
$txt['who_member'] = '&#268;lan';

$txt['powered_by_php'] = 'Pokre&#263;e PHP';
$txt['powered_by_mysql'] = 'Pokre&#263;e MySQL';
$txt['valid_html'] = 'Valjani HTML 4.01!';
$txt['valid_xhtml'] = 'Valjani XHTML 1.0!';
$txt['valid_css'] = 'Valjani CSS!';

$txt['guest'] = 'Gost';
$txt['guests'] = 'Gostiju';
$txt['user'] = 'Korisnik';
$txt['users'] = 'Korisnika';
$txt['hidden'] = 'Skriven';
$txt['buddy'] = 'Prijatelj';
$txt['buddies'] = 'Prijatelja';
$txt['most_online_ever'] = 'Najvi&#353;e Online Ikada';
$txt['most_online_today'] = 'Najvi&#353;e Online Danas';

$txt['merge_select_target_board'] = 'Odaberite ciljnu rubriku za spojenu temu';
$txt['merge_select_poll'] = 'Odaberi koja anketa će ostati na spojenoj temi';
$txt['merge_topic_list'] = 'Odabir tema za spajanje';
$txt['merge_select_subject'] = 'Odaberite naslov spojene teme';
$txt['merge_custom_subject'] = 'Novi naslov';
$txt['merge_enforce_subject'] = 'Promjeniti naslov svih poruka';
$txt['merge_include_notifications'] = 'Obavijesti?';
$txt['merge_check'] = 'Spojiti?';
$txt['merge_no_poll'] = 'Bez ankete';

$txt['response_prefix'] = 'Odg: ';
$txt['current_icon'] = 'Trenutna Ikona';

$txt['smileys_current'] = 'Trenutni Smajliji';
$txt['smileys_none'] = 'Bez Smajlija';
$txt['smileys_forum_board_default'] = 'Forum Default';

$txt['search_results'] = 'Rezultati Pretra&#382;ivanja';
$txt['search_no_results'] = 'Ni&#353;ta nije prona&#273;eno';

$txt['totalTimeLogged1'] = 'Ukupno vrijeme provedeno na forumu: ';
$txt['totalTimeLogged2'] = ' dan(a), ';
$txt['totalTimeLogged3'] = ' sat(i) i ';
$txt['totalTimeLogged4'] = ' min.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'h';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Trenutno';
$txt['approve_thereare'] = 'Trenutno';
$txt['approve_member'] = 'jedan &#269;lan';
$txt['approve_members'] = '&#269;lanova';
$txt['approve_members_waiting'] = '&#269;eka odobrenje.';

$txt['notifyboard_turnon'] = '&#381;elite li primati email obavijesti o novim temama u ovoj rubrici?';
$txt['notifyboard_turnoff'] = 'Jeste li sigurni da vi&#353;e ne &#382;elite primati email obavijesti o novim temama u ovoj rubrici?';

$txt['activate_code'] = 'Va&#353; aktivacijski kod je';

$txt['find_members'] = 'Prona&#273;i Korisnike';
$txt['find_username'] = 'Ime, korisni&#269;ko ime ili email adresa';
$txt['find_buddies'] = 'Prikazati samo prijatelje?';
$txt['find_wildcards'] = 'Dozvoljeni Jockeri: *, ?';
$txt['find_no_results'] = 'Ni&#353;ta nije prona&#273;eno';
$txt['find_results'] = 'Rezultati';
$txt['find_close'] = 'Zatvori';

$txt['unread_since_visit'] = 'Novi postovi od va&#353;e zadnje posjete';
$txt['show_unread_replies'] = 'Novi odgovori na va&#353;e postove';

$txt['change_color'] = 'Promjena Boje';

$txt['quickmod_delete_selected'] = 'Izbrisati Ozna&#269;eno';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Primili ste jednu ili vi&#353;e privatnih poruka.\\nOtvoriti u novom prozoru?';

$txt['previous_next_back'] = '&laquo; natrag';
$txt['previous_next_forward'] = 'naprijed &raquo;';

$txt['movetopic_auto_board'] = '[RUBRIKA] ';
$txt['movetopic_auto_topic'] = '[LINK TEME] ';
$txt['movetopic_default'] = 'Ova tema je premje&#353;tena u ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Smanjite ili pove&#263;ajte zaglavlje.';

$txt['mark_unread'] = 'Nepro&#269;itano';

$txt['ssi_not_direct'] = 'Molimo, nemojte pristupati SSI.php datoteci direktno putem URL-a; mo&#382;da &#263;ete htjeti koristiti (%s) ili dodati ?ssi_function=nesto.';
$txt['ssi_session_broken'] = 'SSI.php nije uspio učitati session! To bi moglo predstavljati probleme sa odjavom i ostalim funkcijama - molimo provjerite da li je SSI.php \'include-an\' prije  BILO ČEGA drugog u Vašoj skripti!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Pregled posta';
$txt['preview_fetch'] = 'Otvaranje pregleda...';
$txt['preview_new'] = 'Nova poruka';
$txt['error_while_submitting'] = 'Pri slanju ove poruke je do&#353;lo do slijede&#263;ih gre&#353;aka:';

$txt['split_selected_posts'] = 'Odabrani postovi';
$txt['split_selected_posts_desc'] = 'Postovi odabrani ispod &#263;e formirati novu temu nakon razdvajanja.';
$txt['split_reset_selection'] = 'poni&#353;ti odabir';

$txt['modify_cancel'] = 'Odustani';
$txt['mark_read_short'] = 'Pro&#269;itano';

$txt['pm_short'] = 'Moje Poruke';
$txt['hello_member_ndt'] = 'Pozdrav';

$txt['ajax_in_progress'] = 'Učitava se...';

?>