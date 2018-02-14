<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'fi_FI.utf8';
$txt['lang_dictionary'] = 'fi';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('sunnuntai', 'maanantai', 'tiistai', 'keskiviikko', 'torstai', 'perjantai', 'lauantai');
$txt['days_short'] = array('su', 'ma', 'ti', 'ke', 'to', 'pe', 'la');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kes&#228;kuu', 'Hein&#228;kuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu');
$txt['months_titles'] = array(1 => 'Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kes&#228;kuu', 'Hein&#228;kuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu');
$txt['months_short'] = array(1 =>  'Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kes&#228;kuu', 'Hein&#228;kuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu');

$txt['newmessages0'] = 'on uusi';
$txt['newmessages1'] = 'on uusia';
$txt['newmessages3'] = 'Uusia';
$txt['newmessages4'] = ', joista';

$txt[2] = 'Yll&#228;pito';

$txt[10] = 'Tallenna';

$txt[17] = 'Muokkaa';
$txt[18] = $context['forum_name'] . ' - Etusivu';
$txt[19] = 'j&#228;sent&#228;';
$txt[20] = 'Keskustelualueen nimi';
$txt[21] = 'viesti&#228;';
$txt[22] = 'Uusin viesti';

$txt[24] = '(Ei otsikkoa)';
$txt[26] = 'Viestej&#228;';
$txt[27] = 'Profiili';
$txt[28] = 'Vieras';
$txt[29] = 'Kirjoittaja';
$txt[30] = '';
$txt[31] = 'Poista';
$txt[33] = 'Aloita uusi aihe';

$txt[34] = 'Kirjaudu';
// Use numeric entities in the below string.
$txt[35] = 'Tunnus';
$txt[36] = 'Salasana';

$txt[40] = 'Tunnusta ei ole olemassa';

$txt[62] = 'Valvoja';
$txt[63] = 'Poista aihe';
$txt[64] = 'aihetta';
$txt[66] = 'Muokkaa viesti&#228;';
$txt[68] = 'Nimi';
$txt[69] = 'S&#228;hk&#246;posti';
$txt[70] = 'Aihe';
$txt[72] = 'Viesti';

$txt[79] = 'Profiili';

$txt[81] = 'Valitse salasana';
$txt[82] = 'Vahvista salasana';
$txt[87] = 'Asema';

$txt[92] = 'Tarkastele profiilia k&#228;ytt&#228;j&#228;lt&#228;';
$txt[94] = 'Yhteens&#228;';
$txt[95] = 'viesti&#228;';
$txt[96] = 'Kotisivu';
$txt[97] = 'Rekister&#246;idy';

$txt[101] = 'Hakemisto';
$txt[102] = 'Uutiset';
$txt[103] = 'Etusivu';

$txt[104] = 'Avaa/Lukitse aihe';
$txt[105] = 'L&#228;het&#228;';
$txt[106] = 'Virhe!';
$txt[107] = 'at';
$txt[108] = 'Kirjaudu ulos';
$txt[109] = 'Aloittaja';
$txt[110] = 'Vastauksia';
$txt[111] = 'Uusin viesti';
$txt[114] = 'Yll&#228;pidon kirjautuminen';
// Use numeric entities in the below string.
$txt[118] = 'Aihe';
$txt[119] = 'Ohjeet';
$txt[121] = 'Poista viesti';
$txt[125] = 'Muistuta';
$txt[126] = 'Haluatko ilmoitukseen s&#228;hk&#246;postiin jos joku vastaa t&#228;h&#228;n aiheeseen?';
// Use numeric entities in the below string.
$txt[130] = "Yst&#228;v&#228;llisin terveisin, " . $context['forum_name'] . ' yll&#228;pito.';
$txt[131] = 'Muistuta';
$txt[132] = 'Siirr&#228; aihe';
$txt[133] = 'Siirr&#228;';
$txt[139] = 'Sivuja';
$txt[140] = 'Sis&#228;&#228;nkirjautuneet j&#228;senet';
$txt[144] = 'Yksityisviesti';
$txt[145] = 'Vastaa lainaten';
$txt[146] = 'Vastaus';

$txt[151] = 'Ei viestej&#228;...';
$txt[152] = 'Sinulla on';
$txt[153] = 'viesti&#228;';
$txt[154] = 'Poista t&#228;m&#228; viesti';

$txt[158] = 'Paikalla olevat k&#228;ytt&#228;j&#228;t';
$txt[159] = 'Yksityisviestit';
$txt[160] = 'Siirry';
$txt[161] = 'siirry';
$txt[162] = 'Oletko varma ett&#228; haluat poistaa t&#228;m&#228;n aiheen?';
$txt[163] = 'Kyll&#228;';
$txt[164] = 'Ei';

$txt[166] = 'Haun tulokset';
$txt[167] = 'Tulokset p&#228;&#228;ttyv&#228;t';
$txt[170] = 'Pahoittelemme, hakuehtoja vastaavia tuloksia ei l&#246;ytynyt';
$txt[176] = '-';

$txt[182] = 'Haku';
$txt[190] = 'Kaikki';

$txt[193] = 'Takaisin';
$txt[194] = 'Salasanan palautus';
$txt[195] = 'Aiheen aloitti';
$txt[196] = 'Otsikko';
$txt[197] = 'Kirjoitti';
$txt[200] = 'Lista rekister&#246;ityneist&#228; j&#228;senist&#228;.';
$txt[201] = 'Toivottakaa tervetulleeksi';
$txt[208] = 'Yll&#228;pitokeskus';
$txt[211] = 'Viimeksi muokattu';
$txt[212] = 'Haluatko perua muistutukset t&#228;st&#228; aiheesta?';

$txt[214] = 'Tuoreimmat viestit';

$txt[227] = 'Asuinpaikka';
$txt[231] = 'Sukupuoli';
$txt[233] = 'Rekister&#246;itynyt';

$txt[234] = 'N&#228;yt&#228; keskustelualueen viimeisimm&#228;t viestit.';
$txt[235] = 'on viimeksi p&#228;ivitetty aihe';

$txt[238] = 'mies';
$txt[239] = 'nainen';

$txt[240] = 'Ep&#228;kelpoa merkki&#228; k&#228;ytetty K&#228;ytt&#228;j&#228;tunnuksessa.';

$txt['welcome_guest'] = 'Tervetuloa, <b>' . $txt[28] . '</b>. Ole hyv&#228; ja <a href="' . $scripturl . '?action=login">kirjaudu</a> tai <a href="' . $scripturl . '?action=register">rekister&#246;idy</a>.';
$txt['welcome_guest_activate'] = '<br />J&#228;ik&#246; <a href="' . $scripturl . '?action=activate">aktivointi s&#228;hk&#246;posti</a> saamatta?';
$txt['hello_member'] = 'Hei';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Tervetuloa';
$txt[247] = 'Hei,';
$txt[248] = 'Tervetuloa,';
$txt[249] = 'Ole hyv&#228;';
$txt[250] = 'Takaisin';
$txt[251] = 'Ole hyv&#228; ja valitse kohde';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Kirjoittanut';

$txt[287] = 'Hymyilee';
$txt[288] = 'Vihainen';
$txt[289] = 'Hymyilee leve&#228;sti';
$txt[290] = 'Nauraa';
$txt[291] = 'Surullinen';
$txt[292] = 'Iskee silm&#228;&#228;';
$txt[293] = 'Virnist&#228;&#228;';
$txt[294] = 'J&#228;rkyttynyt';
$txt[295] = 'Cool';
$txt[296] = 'Huh';
$txt[450] = 'Py&#246;ritt&#228;&#228; silmi&#228;&#228;n';
$txt[451] = 'N&#228;ytt&#228;&#228; kielt&#228;';
$txt[526] = 'Nolostunut';
$txt[527] = 'Vaikenee';
$txt[528] = 'Ep&#228;varma';
$txt[529] = 'Pusu';
$txt[530] = 'Itkee';

$txt[298] = 'Valvoja';
$txt[299] = 'Valvojat';

$txt[300] = 'Merkitse luetuiksi';
$txt[301] = 'Lukukerrat';
$txt[302] = 'uusi';

$txt[303] = 'Tarkastele kaikkia k&#228;ytt&#228;ji&#228;';
$txt[305] = 'Tarkastele';
$txt[307] = 'S&#228;hk&#246;posti';

$txt[308] = 'Tarkastellaan j&#228;seni&#228;';
$txt[309] = '';
$txt[310] = ':st&#228; j&#228;senest&#228;';
$txt[311] = '-';
$txt[315] = 'Unohtuiko salasana?';

$txt[317] = 'P&#228;iv&#228;ys';
// Use numeric entities in the below string.
$txt[318] = 'L&#228;hett&#228;j&#228;';
$txt[319] = 'Aihe';
$txt[322] = 'Tarkasta onko uusia viestej&#228;';
$txt[324] = 'Vastaanottaja';

$txt[330] = 'aihetta';
$txt[331] = 'J&#228;senet';
$txt[332] = 'J&#228;senlista';
$txt[333] = 'Uusia viestej&#228;';
$txt[334] = 'Ei uusia viestej&#228;';

$txt['sendtopic_send'] = 'L&#228;het&#228;';

$txt[371] = 'Aikaeron asetus';
$txt[377] = 'tai';

$txt[398] = 'Valitettavasti hakuehdoilla ei l&#246;ytynyt mit&#228;&#228;n';

$txt[418] = 'Ilmoitus';

$txt[430] = '%s, sinulta on estetty keskustelualueen k&#228;ytt&#246;.';

$txt[452] = 'Merkitse KAIKKI viestit luetuiksi';

$txt[454] = 'Suosittu aihe  (enemm&#228;n kuin ' . $modSettings['hotTopicPosts'] . ' vastausta)';
$txt[455] = 'Eritt&#228;in suosittu aihe (enemm&#228;n kuin ' . $modSettings['hotTopicVeryPosts'] . ' vastausta)';
$txt[456] = 'Lukittu aihe';
$txt[457] = 'Tavallinen aihe';
$txt['participation_caption'] = 'Aihe, johon olet osallistunut';

$txt[462] = 'SIIRRY';

$txt[465] = 'Tulostusversio';
$txt[467] = 'Profiili';
$txt[468] = 'Yhteenveto';
$txt[470] = '-';
$txt[471] = 'viesti';
$txt[473] = 'T&#228;m&#228; tunnus on jo k&#228;yt&#246;ss&#228; jollain j&#228;senell&#228;.';

$txt[488] = 'J&#228;seni&#228; yhteens&#228;';
$txt[489] = 'Viestej&#228; yhteens&#228;';
$txt[490] = 'Aiheita yhteens&#228;';

$txt[497] = 'Istunnon pituus minuutteina';

$txt[507] = 'Esikatselu';
$txt[508] = 'Pysy aina kirjautuneena sis&#228;lle';

$txt[511] = 'tallennettu';
// Use numeric entities in the below string.
$txt[512] = 'IP-osoite';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'kirjoittanut';

$txt[578] = 'tuntia';
$txt[579] = 'p&#228;iv&#228;&#228;';

$txt[581] = ', uusin j&#228;senemme.';

$txt[582] = 'Haettava asia';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Moi.+Oletko+siell&#228;?';
$txt[604] = 'YIM';

$txt[616] = 'Muista, keskustelualue on \'huoltotilassa\'.';

$txt[641] = 'Luettu';
$txt[642] = 'kertaa';

$txt[645] = 'Keskustelualueen tilastoja';
$txt[656] = 'Uusin j&#228;sen';
$txt[658] = 'Kategoriota yhteens&#228;';
$txt[659] = 'Uusin viesti';

$txt[660] = 'Sinulle on';
$txt[661] = 'Klikkaa';
$txt[662] = 't&#228;st&#228;';
$txt[663] = 'katsellaksesi niit&#228;.';

$txt[665] = 'Alueita yhteens&#228;';

$txt[668] = 'Tulosta sivu';

$txt[679] = 'T&#228;m&#228;n on oltava toimiva osoite.';

$txt[683] = 'Olen n&#246;rtti!!';
$txt[685] = $context['forum_name'] . ' - Informaatiokeskus';

$txt[707] = 'L&#228;het&#228; aihe';

$txt['sendtopic_title'] = 'L&#228;het&#228; aihe &quot;%s&quot; yst&#228;v&#228;lle.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Hei %s,';
$txt['sendtopic_this_topic'] = 'Haluaisin sinun lukevan seuraavan kirjoituksen "%s" keskustelualueella ' . $context['forum_name'] . '. Lukeaksesi sen, klikkaa t&#228;t&#228; linkki&#228;';
$txt['sendtopic_thanks'] = 'Terveisin';
$txt['sendtopic_sender_name'] = 'Sinun nimesi';
$txt['sendtopic_sender_email'] = 'S&#228;hk&#246;postiosoitteesi';
$txt['sendtopic_receiver_name'] = 'Vastaanottajan nimi';
$txt['sendtopic_receiver_email'] = 'Vastaanottajan s&#228;hk&#246;postiosoite';
$txt['sendtopic_comment'] = 'Lis&#228;&#228; kommentti';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'L&#228;hett&#228;j&#228;n lis&#228;kommentti';

$txt[721] = 'Piilota s&#228;hk&#246;postiosoite muilta.';

$txt[737] = 'Valitse kaikki';

// Use numeric entities in the below string.
$txt[1001] = 'Tietokantavirhe';
$txt[1002] = 'Ole hyv&#228; ja yrit&#228; uudelleen.  Jos t&#228;m&#228; virheilmoitus n&#228;kyy viel&#228; uudestaan, ilmoita siit&#228; yll&#228;pidolle.';
$txt[1003] = 'Tiedosto';
$txt[1004] = 'Rivi';
// Use numeric entities in the below string.
$txt[1005] = 'SMF on havainnut ja automaattisesti yritt&#228;nyt korjata virhett&#228; tietokannassasi. Jos ongelmat jatkuvat ja saat n&#228;it&#228; virheilmoituksia, ota yhteytt&#228; palveluntarjoajaasi.';
$txt['database_error_versions'] = '<b>Huomio:</b> N&#228;ytt&#228;&#228; silt&#228; ett&#228; tietokantasi <em>saattaa</em> tarvita p&#228;ivityst&#228;. keskustelualueesi tiedostot ovat nyt versiota ' . $forum_version . ', kun taas tietokantasi n&#228;ytt&#228;&#228; versiota ' . $modSettings['smfVersion'] . '. On suositeltavaa ett&#228; ajat viimeisimm&#228;n version upgrade.php:sta.';
$txt['template_parse_error'] = 'Template Parse Error!';
$txt['template_parse_error_message'] = 'N&#228;ytt&#228;&#228; ett&#228; jokin on pieless&#228; keskustelualueen teematiedostoissa. T&#228;m&#228;n pit&#228;isi olla v&#228;liaikaista, yrit&#228; hetken kuluttua uudelleen. Jos ongelma jatkuu, ota yhteytt&#228; keskustelualueen yll&#228;pitoon.<br /><br />Voit my&#246;s yrtt&#228;&#228; <a href="javascript:location.reload();">p&#228;ivitt&#228;&#228; t&#228;m&#228;n sivun</a>.';
$txt['template_parse_error_details'] = 'Ongelma ladatessa <tt><b>%1$s</b></tt> teema- tai kielitiedostoa.  Tarkista koodi ja yrit&#228; uudelleen - muista, yksitt&#228;iset lainausmerkit (<tt>\'</tt>) on usein suojattava heittomerkill&#228; (<tt>\\</tt>).  N&#228;hd&#228;ksesi tarkemmat virheeseen johtaneet tiedot PHPsta, yrit&#228; <a href="' . $boardurl . '%1$s">suoraan tiedostosta</a>.<br /><br />Haluat varmaan yritt&#228;&#228; <a href="javascript:location.reload();">p&#228;ivitt&#228;&#228; sivun</a> tai <a href="' . $scripturl . '?theme=1">k&#228;ytt&#228;&#228; oletusteemaa</a>.';

$txt['smf10'] = '<b>t&#228;n&#228;&#228;n</b> kello ';
$txt['smf10b'] = '<b>eilen</b> kello ';
$txt['smf20'] = 'Aloita uusi &#228;&#228;nestys';
$txt['smf21'] = 'Kysymys';
$txt['smf23'] = '&#196;&#228;nest&#228;';
$txt['smf24'] = '&#196;&#228;nest&#228;ji&#228; yhteens&#228;';
$txt['smf25'] = 'Oikotiet: paina alt+s l&#228;hett&#228;&#228;ksesi viestin, tai alt+p esikatsellaksesi';
$txt['smf29'] = 'Katsele tuloksia.';
$txt['smf30'] = 'Lukitse &#228;&#228;nestys';
$txt['smf30b'] = 'Avaa &#228;&#228;nestys';
$txt['smf39'] = 'Muokkaa &#228;&#228;nestyst&#228;';
$txt['smf43'] = '&#196;&#228;nestys';
$txt['smf47'] = '1 p&#228;iv&#228;';
$txt['smf48'] = '1 viikko';
$txt['smf49'] = '1 kuukausi';
$txt['smf50'] = 'Ikuisesti';
$txt['smf52'] = 'Kirjaudu k&#228;ytt&#228;j&#228;tunnuksen, salasanan ja istunnonpituuden mukaan';
$txt['smf53'] = '1 tunti';
$txt['smf56'] = 'SIIRRETTY';
$txt['smf57'] = 'Kommenttisi siit&#228;,<br />miksi t&#228;m&#228; aihe on siirretty.';
$txt['smf60'] = 'Pahoittelumme, sinulla ei ole tarpeeksi viestej&#228; muokataksesi karmaa - tarvitset v&#228;hint&#228;&#228;n ';
$txt['smf62'] = 'Pahoittelumme, et voi toistaa toimintoa t&#228;ss&#228; ajassa. Sinun t&#228;ytyy odottaa';
$txt['smf82'] = 'Keskustelualue';
$txt['smf88'] = '';
$txt['smf96'] = 'Pysyv&#228; aihe';

$txt['smf138'] = 'Poista';

$txt['smf199'] = 'Yksityisviestej&#228;';

$txt['smf211'] = 'kilotavua';

$txt['smf223'] = '[Lis&#228;&#228; tilastoja]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Koodia';
$txt['smf239'] = 'Lainaus k&#228;ytt&#228;j&#228;lt&#228;';
$txt['smf240'] = 'Lainaus';

$txt['smf251'] = 'Jaa aihe';
$txt['smf252'] = 'Yhdist&#228; aiheet';
$txt['smf254'] = 'Otsikko uudelle aiheelle';
$txt['smf255'] = 'Jaa vain t&#228;m&#228; viesti.';
$txt['smf256'] = 'Jaa t&#228;m&#228;n j&#228;lkeiset viestit, mukaan lukien t&#228;m&#228; viesti.';
$txt['smf257'] = 'Valitse jaettavat viestit.';
$txt['smf258'] = 'Uusi aihe';
$txt['smf259'] = 'Aiheiden jakaminen onnistui.';
$txt['smf260'] = 'Alkuper&#228;inen aihe';
$txt['smf261'] = 'Valitse mitk&#228; viestit haluat jakaa.';
$txt['smf264'] = 'Aiheiden yhdist&#228;minen onnistui.';
$txt['smf265'] = 'Vasta yhdistetty aihe';
$txt['smf266'] = 'Yhdistett&#228;v&#228; aihe';
$txt['smf267'] = 'Kohdealue';
$txt['smf269'] = 'Kohdeaihe';
$txt['smf274'] = 'Oletko varma ett&#228; haluat yhdist&#228;&#228;';
$txt['smf275'] = 'kanssa';
$txt['smf276'] = 'T&#228;m&#228; toiminto yhdist&#228;&#228; kahden aiheen viestit yhdeksi aiheeksi. Viestit j&#228;rjestet&#228;&#228;n niiden l&#228;hetysaikojen mukaan. T&#228;ten ensimm&#228;isen&#228; l&#228;hetetty viesti tulee olemaan aiheen ensimm&#228;inen viesti.';

$txt['smf277'] = 'Aseta aihe pysyv&#228;ksi';
$txt['smf278'] = 'Poista aiheen pysyvyys';
$txt['smf279'] = 'Lukitse aihe';
$txt['smf280'] = 'Avaa aihe';

$txt['smf298'] = 'Tarkempi haku';

$txt['smf299'] = 'TIETOTURVARISKI!:';
$txt['smf300'] = 'Hakemistostasi l&#246;ytyy tiedosto ';

$txt['smf301'] = 'Sivu luotiin ';
$txt['smf302'] = ' sekunnissa. ';
$txt['smf302b'] = ' kysely&#228; tietokannasta.';

$txt['smf315'] = 'K&#228;yt&#228; t&#228;t&#228; toimintoa raportoidaksesi valvojille ja yll&#228;pit&#228;jille herjaavista, s&#228;&#228;nt&#246;jen vastaisista tai muuten v&#228;&#228;rille raiteille joutuneista viesteist&#228;.<br /><i>Huomioi my&#246;s ett&#228; valvojat n&#228;kev&#228;t s&#228;hk&#246;postiosoitteesi jos k&#228;yt&#228;t t&#228;t&#228; toimintoa.</i>';

$txt['online2'] = 'Paikalla';
$txt['online3'] = 'Poissa';
$txt['online4'] = 'Yksityisviesti (paikalla)';
$txt['online5'] = 'Yksityisviesti (poissa)';
$txt['online8'] = 'Tila';

$txt['topbottom4'] = 'Siirry yl&#246;s';
$txt['topbottom5'] = 'Siirry alas';

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


$txt['calendar3'] = 'Syntym&#228;p&#228;iv&#228;t:';
$txt['calendar4'] = 'Tapahtumat:';
$txt['calendar3b'] = 'Tulevia syntym&#228;p&#228;ivi&#228;:';
$txt['calendar4b'] = 'Tulevia tapahtumia:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Kuukausi:';
$txt['calendar10'] = 'Vuosi:';
$txt['calendar11'] = 'P&#228;iv&#228;:';
$txt['calendar12'] = 'Tapahtuman otsikko:';
$txt['calendar13'] = 'L&#228;het&#228; alueelle:';
$txt['calendar20'] = 'Muokkaa tapahtumaa';
$txt['calendar21'] = 'Poista t&#228;m&#228; tapahtuma?';
$txt['calendar22'] = 'Poista tapahtuma';
$txt['calendar23'] = 'L&#228;het&#228; tapahtuma';
$txt['calendar24'] = 'Kalenteri';
$txt['calendar37'] = 'Linkit&#228; kalenteriin';
$txt['calendar43'] = 'Linkit&#228; tapahtumaan';
$txt['calendar47'] = 'Kalenterissa tulossa';
$txt['calendar47b'] = 'Kalenterissa t&#228;n&#228;&#228;n';
$txt['calendar51'] = 'Viikko';
$txt['calendar54'] = 'P&#228;ivien lukum&#228;&#228;r&#228;:';
$txt['calendar_how_edit'] = 'Kuinka muokkaat n&#228;it&#228; tapahtumia?';
$txt['calendar_link_event'] = 'Linkit&#228; tapahtuma viestiin:';
$txt['calendar_confirm_delete'] = 'Oletko varma ett&#228; haluat poistaa tapahtuman?';
$txt['calendar_linked_events'] = 'Kalenteriin linkitetyt tapahtumat';

$txt['moveTopic1'] = 'J&#228;t&#228; kommentti siirrosta alkuper&#228;iselle alueelle';
$txt['moveTopic2'] = 'Muuta aiheen otsikkoa';
$txt['moveTopic3'] = 'Uusi otsikko';
$txt['moveTopic4'] = 'Muuta kaikkien viestien otsikoita';

$txt['theme_template_error'] = 'Teeman \'%s\' lataus ei onnistunut.';
$txt['theme_language_error'] = 'Kielitiedoston \'%s\' lataus ei onnistunut.';

$txt['parent_boards'] = 'Alakategoriat';

$txt['smtp_no_connect'] = 'Ei saatu yhteytt&#228; SMTP-palvelimeen';
$txt['smtp_port_ssl'] = 'SMTP portti on asetettu v&#228;&#228;rin; sen pit&#228;&#228; olla 465 SSL servereill&#228;.';
$txt['smtp_bad_response'] = 'Yhdist&#228;minen s&#228;hk&#246;postipalvelimeen ep&#228;onnistui.';
$txt['smtp_error'] = 'Ongelmia l&#228;hetett&#228;ess&#228; postia. Virhe: ';
$txt['mail_send_unable'] = 'Viesti&#228; ei voitu l&#228;hett&#228;&#228; osoitteeseen \'%s\'';

$txt['mlist_search'] = 'Etsi k&#228;ytt&#228;jist&#228;';
$txt['mlist_search2'] = 'Etsi uudestaan';
$txt['mlist_search_email'] = 'Etsi s&#228;hk&#246;postiosoitteista';
$txt['mlist_search_messenger'] = 'Etsi MSN Messenger -tunnuksen perusteella';
$txt['mlist_search_group'] = 'Etsi paikan perusteella';
$txt['mlist_search_name'] = 'Etsi nimen perusteella';
$txt['mlist_search_website'] = 'Etsi kotisivun perusteella';
$txt['mlist_search_results'] = 'Haun tulos hakusanalle';

$txt['attach_downloaded'] = 'ladattu';
$txt['attach_viewed'] = 'tarkasteltu';
$txt['attach_times'] = 'kertaa';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Asetukset';
$txt['never'] = 'Ei koskaan';
$txt['more'] = 'lis&#228;&#228;';

$txt['hostname'] = 'Host';
$txt['you_are_post_banned'] = '%s, olet kirjoituskiellossa t&#228;ll&#228; keskustelualueella.';
$txt['ban_reason'] = 'Syy';

$txt['tables_optimized'] = 'Tietokannan taulut optimoitu';

$txt['add_poll'] = 'Lis&#228;&#228; &#228;&#228;nestys';
$txt['poll_options6'] = 'Voit valita %s vaihtoehtoa.';
$txt['poll_remove'] = 'Poista &#228;&#228;nestys';
$txt['poll_remove_warn'] = 'Oletko varma ett&#228; haluat poistaa &#228;&#228;nestyksen aiheesta?';
$txt['poll_results_expire'] = 'Tulokset n&#228;kyv&#228;t kun &#228;&#228;nestys on p&#228;&#228;ttynyt';
$txt['poll_expires_on'] = '&#228;&#228;nestys p&#228;&#228;ttyy';
$txt['poll_expired_on'] = '&#196;&#228;nestys p&#228;&#228;ttynyt';
$txt['poll_change_vote'] = 'Poista oma &#228;&#228;ni';
$txt['poll_return_vote'] = '&#196;&#228;nestysvaihtoehdot';

$txt['quick_mod_remove'] = 'Poista valitut';
$txt['quick_mod_lock'] = 'Lukitse valitut';
$txt['quick_mod_sticky'] = 'Aseta valitut pysyv&#228;ksi ';
$txt['quick_mod_move'] = 'Siirr&#228; valitut';
$txt['quick_mod_merge'] = 'Yhdist&#228; valitut';
$txt['quick_mod_markread'] = 'Merkitse valitut luetuiksi';
$txt['quick_mod_go'] = 'Toteuta!';
$txt['quickmod_confirm'] = 'Oletko varma ett&#228; haluat tehd&#228; t&#228;m&#228;n?';

$txt['spell_check'] = 'Oikoluku';

$txt['quick_reply_1'] = 'Pikavastaus';
$txt['quick_reply_2'] = ' <i>Pikavastauksessa</i> voit k&#228;ytt&#228;&#228; bb-koodia sek&#228; hymi&#246;it&#228; kuten normaalistikin.';
$txt['quick_reply_warning'] = 'Varoitus: t&#228;m&#228; aihe on lukittu!<br />Vain yll&#228;pit&#228;j&#228;t ja valvojat voivat vastata.';

$txt['notification_enable_board'] = 'Oletko varma ett&#228; haluat muistutuksen uusista aiheista t&#228;ll&#228; keskustelualueella?';
$txt['notification_disable_board'] = 'Oletko varma ett&#228; haluat perua muistutuksen uusista aiheista t&#228;ll&#228; keskustelualueella?';
$txt['notification_enable_topic'] = 'Oletko varma ett&#228; haluat muistutuksen uusista vastauksista t&#228;h&#228;n aiheeseen?';
$txt['notification_disable_topic'] = 'Oletko varma ett&#228; haluat perua muistutuksen uusista vastauksista t&#228;h&#228;n aiheeseen?';

$txt['rtm1'] = 'Ilmoita valvojille';

$txt['unread_topics_visit'] = 'Viimeisimm&#228;t lukemattomat aiheet';
$txt['unread_topics_visit_none'] = 'Uusia viestej&#228; edellisen k&#228;yntisi j&#228;lkeen ei l&#246;ytynyt.  <a href="' . $scripturl . '?action=unread;all">Klikkaa t&#228;st&#228; kokeillaksesi kaikkia lukemattomia viestej&#228;</a>.';
$txt['unread_topics_all'] = 'Kaikki lukemattomat aiheet';
$txt['unread_replies'] = 'P&#228;ivittyneet aiheet';

$txt['who_title'] = 'Mit&#228; keskustelualueella tapahtuu?';
$txt['who_and'] = ' ja ';
$txt['who_viewing_topic'] = ' katselee t&#228;t&#228; aihetta.';
$txt['who_viewing_board'] = ' katselee t&#228;t&#228; aluetta.';
$txt['who_member'] = 'J&#228;sen';

$txt['powered_by_php'] = 'PHP pohjainen foorumi';
$txt['powered_by_mysql'] = 'MySQL pohjainen foorumi';
$txt['valid_html'] = 'Validi HTML 4.01!';
$txt['valid_xhtml'] = 'Validi XHTML 1.0!';
$txt['valid_css'] = 'Validi CSS!';

$txt['guest'] = 'vieras';
$txt['guests'] = 'vierasta';
$txt['user'] = 'j&#228;sen';
$txt['users'] = 'j&#228;sent&#228;';
$txt['hidden'] = 'piilossa';
$txt['buddy'] = 'kaveri';
$txt['buddies'] = 'kaveria';
$txt['most_online_ever'] = 'Eniten paikalla koskaan';
$txt['most_online_today'] = 'Eniten k&#228;ytt&#228;ji&#228; paikalla t&#228;n&#228;&#228;n';

$txt['merge_select_target_board'] = 'Valitse kohdealue yhdistetylle aiheelle';
$txt['merge_select_poll'] = 'Valitse kumpi &#228;&#228;nestys yhdistetyss&#228; aiheessa on';
$txt['merge_topic_list'] = 'Valitse yhdistett&#228;v&#228;t aiheet';
$txt['merge_select_subject'] = 'Valitse otsikko yhdistetylle aiheelle';
$txt['merge_custom_subject'] = 'Muokattu otsikko';
$txt['merge_enforce_subject'] = 'Muuta kaikkien viestien otsikoita';
$txt['merge_include_notifications'] = 'Sis&#228;llyt&#228; muistutukset?';
$txt['merge_check'] = 'Yhdist&#228;?';
$txt['merge_no_poll'] = 'Ei &#228;&#228;nestyst&#228;';

$txt['response_prefix'] = 'Vs: ';
$txt['current_icon'] = 'Nykyinen ikoni';

$txt['smileys_current'] = 'K&#228;ytett&#228;v&#228;t hymi&#246;t';
$txt['smileys_none'] = 'Ei hymi&#246;it&#228;';
$txt['smileys_forum_board_default'] = 'keskustelualueen/alueen oletus';

$txt['search_results'] = 'Haun tulokset';
$txt['search_no_results'] = 'Tuloksia ei l&#246;ydetty';

$txt['totalTimeLogged1'] = 'Keskustelualueella viett&#228;m&#228;si kokonaisaika: ';
$txt['totalTimeLogged2'] = ' p&#228;iv&#228;&#228;, ';
$txt['totalTimeLogged3'] = ' tuntia ja ';
$txt['totalTimeLogged4'] = ' minuuttia.';
$txt['totalTimeLogged5'] = 'p ';
$txt['totalTimeLogged6'] = 't ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Yll&#228;pitoalueella on';
$txt['approve_thereare'] = 'Yll&#228;pitoalueella on';
$txt['approve_member'] = 'yksi k&#228;ytt&#228;j&#228;';
$txt['approve_members'] = 'k&#228;ytt&#228;j&#228;&#228;';
$txt['approve_members_waiting'] = 'odottamassa hyv&#228;ksynt&#228;&#228;.';

$txt['notifyboard_turnon'] = 'Haluatko ilmoituksen s&#228;hk&#246;postiisi kun joku aloittaa uuden aiheen t&#228;ll&#228; alueella?';
$txt['notifyboard_turnoff'] = 'Oletko varma ettet halua saada tiedotetta uusista aiheista t&#228;ll&#228; alueella?';

$txt['activate_code'] = 'Aktivointikoodisi on';

$txt['find_members'] = 'Etsi j&#228;seni&#228;';
$txt['find_username'] = 'Nimi, tunnus tai s&#228;hk&#246;postiosoite';
$txt['find_buddies'] = 'N&#228;yt&#228; vain kaverit?';
$txt['find_wildcards'] = 'Sallitut jokerimerkit: *, ?';
$txt['find_no_results'] = 'Hakuehtoja vastaavia tuloksia ei l&#246;ytynyt';
$txt['find_results'] = 'Tulokset';
$txt['find_close'] = 'Sulje';

$txt['unread_since_visit'] = 'N&#228;yt&#228; edellisen k&#228;ynnin j&#228;lkeen kirjoitetut viestit.';
$txt['show_unread_replies'] = 'N&#228;yt&#228; uudet vastaukset viesteihisi.';

$txt['change_color'] = 'Vaihda v&#228;ri';

$txt['quickmod_delete_selected'] = 'Poista valitut';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Olet saanut yhden tai useamman yksityisviestin.\\nLuetko ne nyt?';

$txt['previous_next_back'] = '&laquo; edellinen';
$txt['previous_next_forward'] = 'seuraava &raquo;';

$txt['movetopic_auto_board'] = '[ALUE]';
$txt['movetopic_auto_topic'] = '[LINKKI AIHEESEEN]';
$txt['movetopic_default'] = 'T&#228;m&#228; aihe on siirretty alueelle ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Kutista tai laajenna yl&#228;osa.';

$txt['mark_unread'] = 'Muuta lukemattomaksi';

$txt['ssi_not_direct'] = '&#228;l&#228; k&#228;yt&#228; SSI.php:ta suoraan; haluat ehk&#228; k&#228;ytt&#228;&#228; (%s) polkua tai lis&#228;t&#228; ?ssi_function=jotain.';
$txt['ssi_session_broken'] = 'SSI.php ei saanut ladattua sessiota!  T&#228;m&#228; voi aiheuttaa ongelmia uloskirjautumisessa ja muissa toiminnoissa - varmista ett&#228; SSI.php on sis&#228;llytetty/linkitetty tiedostosi *ensimm&#228;isell&#228;* rivill&#228;!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Esikatsele viesti';
$txt['preview_fetch'] = 'Ladataan esikatselua...';
$txt['preview_new'] = 'Uusi viesti';
$txt['error_while_submitting'] = 'Seuraavat virheet tapahtuivat l&#228;hetett&#228;ess&#228; viesti&#228;:';

$txt['split_selected_posts'] = 'Valitut viestit';
$txt['split_selected_posts_desc'] = 'Alla olevat viestit muodostavat uuden aiheen jakamisen lopuksi.';
$txt['split_reset_selection'] = 'tyhjenn&#228; valinnat';

$txt['modify_cancel'] = 'Peruuta';
$txt['mark_read_short'] = 'Merkitse luetuksi';

$txt['pm_short'] = 'Yksityisviestit';
$txt['hello_member_ndt'] = 'Hei';

$txt['ajax_in_progress'] = 'Ladataan...';

?>