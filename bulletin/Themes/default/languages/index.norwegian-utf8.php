<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'no_NO.utf8';
$txt['lang_dictionary'] = 'no';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('s&oslash;ndag', 'mandag', 'tirsdag', 'onsdag', 'torsdag', 'fredag', 'l&oslash;rdag');
$txt['days_short'] = array('s&oslash;n', 'man', 'tir', 'ons', 'tor', 'fre', 'l&oslash;r');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'januar', 'februar', 'mars', 'april', 'mai', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'desember');
$txt['months_titles'] = array(1 => 'januar', 'februar', 'mars', 'april', 'mai', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'Desember');
$txt['months_short'] = array(1 => 'jan', 'feb', 'mar', 'apr', 'mai', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'des');

$txt['newmessages0'] = 'er ny';
$txt['newmessages1'] = 'er nye';
$txt['newmessages3'] = 'Ny';
$txt['newmessages4'] = ',';

$txt[2] = 'Administrator';

$txt[10] = 'Lagre';

$txt[17] = 'Rediger';
$txt[18] = $context['forum_name'] . ' - Hovedside';
$txt[19] = 'medlemmer';
$txt[20] = 'Navn p&aring; forum';
$txt[21] = 'Innlegg';
$txt[22] = 'Nyeste innlegg';

$txt[24] = '(Uten tittel)';
$txt[26] = 'Innlegg';
$txt[27] = 'Vis profil';
$txt[28] = 'Gjest';
$txt[29] = 'Skrevet av';
$txt[30] = 'p&aring;';
$txt[31] = 'Slett';
$txt[33] = 'Start nytt emne';

$txt[34] = 'Logg inn';
// Use numeric entities in the below string.
$txt[35] = 'Brukernavn';
$txt[36] = 'Passord';

$txt[40] = 'Brukernavnet eksisterer ikke.';

$txt[62] = 'Moderatorer av forum';
$txt[63] = 'Slett emnet';
$txt[64] = 'emner';
$txt[66] = 'Rediger innlegg';
$txt[68] = 'Navn';
$txt[69] = 'E-post';
$txt[70] = 'Tittel';
$txt[72] = 'Melding';

$txt[79] = 'Rediger profil';

$txt[81] = 'Velg passord';
$txt[82] = 'Bekreft passord';
$txt[87] = 'Posisjon';

$txt[92] = 'Viser profilen til';
$txt[94] = 'Totalt';
$txt[95] = 'innlegg';
$txt[96] = 'Hjemmeside';
$txt[97] = 'Registrer';

$txt[101] = 'Oversikt';
$txt[102] = 'Nyheter';
$txt[103] = 'Hovedside';

$txt[104] = 'Steng/&aring;pne emne';
$txt[105] = 'Legg til innlegg';
$txt[106] = 'En feil har inntruffet!';
$txt[107] = 'ved';
$txt[108] = 'Logg ut';
$txt[109] = 'Startet av';
$txt[110] = 'Svar';
$txt[111] = 'Nyeste innlegg';
$txt[114] = 'Logg inn som administrator';
// Use numeric entities in the below string.
$txt[118] = 'Emne';
$txt[119] = 'Hjelp';
$txt[121] = 'Slett melding';
$txt[125] = 'Varsling';
$txt[126] = '&Oslash;nsker du &aring; f&aring; en varsling p&aring; e-post om noen svarer p&aring; dette emnet?';
// Use numeric entities in the below string.
$txt[130] = "Med vennlig hilsen,\nadministratorene på " . $context['forum_name'] . '.';
$txt[131] = 'Varsling ved svar';
$txt[132] = 'Flytt emne';
$txt[133] = 'Flytt til';
$txt[139] = 'Sider';
$txt[140] = 'Brukere aktive siste ' . $modSettings['lastActive'] . ' minutter';
$txt[144] = 'Personlige meldinger';
$txt[145] = 'Svar med sitat';
$txt[146] = 'Svar';

$txt[151] = 'Ingen meldinger...';
$txt[152] = 'du har';
$txt[153] = 'meldinger';
$txt[154] = 'Slett denne meldingen';

$txt[158] = 'Brukere p&aring;logget';
$txt[159] = 'Personlig melding';
$txt[160] = 'G&aring; til';
$txt[161] = 'OK';
$txt[162] = 'Er du sikker p&aring; at du vil slette dette emnet?';
$txt[163] = 'Ja';
$txt[164] = 'Nei';

$txt[166] = 'S&oslash;keresultater';
$txt[167] = 'Ingen flere treff';
$txt[170] = 'Beklager, ingen treff ble funnet';
$txt[176] = 'p&aring;';

$txt[182] = 'S&oslash;k';
$txt[190] = 'Alle';

$txt[193] = 'Tilbake';
$txt[194] = 'passord-p&aring;minnelse';
$txt[195] = 'Emne startet av';
$txt[196] = 'Tittel';
$txt[197] = 'Skrevet av';
$txt[200] = 'S&oslash;kbar liste over alle registrerte medlemmer.';
$txt[201] = 'Velkommen, ';
$txt[208] = 'Administratorpanel';
$txt[211] = 'Siste redigering';
$txt[212] = '&Oslash;nsker du &aring; deaktivere varsling for dette emnet?';

$txt[214] = 'Nyeste innlegg';

$txt[227] = 'Bosted';
$txt[231] = 'Kj&oslash;nn';
$txt[233] = 'Registreringsdato';

$txt[234] = 'Vis nyeste innleggene fra forumet.';
$txt[235] = 'er det sist oppdaterte emnet';

$txt[238] = 'Mann';
$txt[239] = 'Kvinne';

$txt[240] = 'Ugyldig tegn benyttet i brukernavn.';

$txt['welcome_guest'] = 'Velkommen, <b>' . $txt[28] . '</b>. Vennligst <a href="' . $scripturl . '?action=login">logg inn</a> eller <a href="' . $scripturl . '?action=register">registrer deg</a>.';
$txt['welcome_guest_activate'] = '<br />Har du ikke mottatt <a href="' . $scripturl . '?action=activate">e-post for aktivering</a> ?';
$txt['hello_member'] = 'Hei,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Velkommen,';
$txt[247] = 'Hei,';
$txt[248] = 'Velkommen,';
$txt[249] = 'Vennligst';
$txt[250] = 'Tilbake';
$txt[251] = 'Vennligst velg en destinasjon';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Skrevet av';

$txt[287] = 'Glad';
$txt[288] = 'Sint';
$txt[289] = 'Osteaktig';
$txt[290] = 'Ler';
$txt[291] = 'Trist';
$txt[292] = 'Blunker';
$txt[293] = 'Gliser';
$txt[294] = 'Sjokkert';
$txt[295] = 'Kult';
$txt[296] = 'H&aelig;';
$txt[450] = '&Oslash;yerulling';
$txt[451] = 'Rekker tunge';
$txt[526] = 'Flau';
$txt[527] = 'Hemmelig';
$txt[528] = 'Tvilende';
$txt[529] = 'Kysser';
$txt[530] = 'Gr&aring;ter';

$txt[298] = 'Moderator';
$txt[299] = 'Moderatorer';

$txt[300] = 'Merk alle emner i dette forumet som lest';
$txt[301] = 'Visninger';
$txt[302] = 'Ny(e)';

$txt[303] = 'Vis alle medlemmer';
$txt[305] = 'Vis';
$txt[307] = 'E-post';

$txt[308] = 'Viser medlemmer';
$txt[309] = 'av';
$txt[310] = 'totalt medlemmer';
$txt[311] = 'til';
$txt[315] = 'Glemt passordet?';

$txt[317] = 'Dato';
// Use numeric entities in the below string.
$txt[318] = 'Fra';
$txt[319] = 'Tittel';
$txt[322] = 'Se etter nye meldinger';
$txt[324] = 'Til';

$txt[330] = 'Emner';
$txt[331] = 'Medlemmer';
$txt[332] = 'Medlemsliste';
$txt[333] = 'Nye innlegg';
$txt[334] = 'Ingen nye innlegg';

$txt['sendtopic_send'] = 'Send';

$txt[371] = 'Tidsavvik';
$txt[377] = 'eller';

$txt[398] = 'Beklager, ingen treff ble funnet';

$txt[418] = 'Varsling';

$txt[430] = 'Beklager %s, du er utestengt fra dette forumet!';

$txt[452] = 'Marker alle innlegg som lest';

$txt[454] = 'Aktivt emne (minst ' . $modSettings['hotTopicPosts'] . ' svar)';
$txt[455] = 'Veldig aktivt emne (minst ' . $modSettings['hotTopicVeryPosts'] . ' svar)';
$txt[456] = 'Steng emne';
$txt[457] = 'Vanlig emne';
$txt['participation_caption'] = 'Emne du har postet til';

$txt[462] = 'OK';

$txt[465] = 'Skriv ut';
$txt[467] = 'Profil';
$txt[468] = 'Emneoversikt';
$txt[470] = '--';
$txt[471] = 'melding';
$txt[473] = 'Dette navnet er allerede tatt i bruk av et annet medlem.';

$txt[488] = 'Medlemmer totalt';
$txt[489] = 'Innlegg totalt';
$txt[490] = 'Emner totalt';

$txt[497] = 'Innloggingstid i minutter';

$txt[507] = 'Forh&aring;ndsvisning';
$txt[508] = 'Forbli alltid innlogget';

$txt[511] = 'Loggf&oslash;rt';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'av';

$txt[578] = 'timer';
$txt[579] = 'dager';

$txt[581] = ', v&aring;rt nyeste medlem.';

$txt[582] = 'S&oslash;k etter';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hei.+Er+du+der?';
$txt[604] = 'YIM';

$txt[616] = 'Husk at forumet er under vedlikehold.';

$txt[641] = 'Lest';
$txt[642] = 'ganger';

$txt[645] = 'Forum-statistikk';
$txt[656] = 'Nyeste medlem';
$txt[658] = 'Kategorier totalt';
$txt[659] = 'Nyeste innlegg';

$txt[660] = 'Du har';
$txt[661] = 'Klikk';
$txt[662] = 'her';
$txt[663] = 'for &aring; vise dem.';

$txt[665] = 'Forum totalt';

$txt[668] = 'Skriv ut side';

$txt[679] = 'Dette m&aring; v&aelig;re en gyldig e-postadresse.';

$txt[683] = 'Jeg er en nerd!!';
$txt[685] = $context['forum_name'] . ' - Informasjon';

$txt[707] = 'Tips en venn';

$txt['sendtopic_title'] = 'Tips en venn om emnet &quot;%s&quot;.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Hei %s,';
$txt['sendtopic_this_topic'] = 'Jeg synes du bør ta en titt på "%s" på ' . $context['forum_name'] . '.  For å lese det, klikk på denne lenken';
$txt['sendtopic_thanks'] = 'Takk';
$txt['sendtopic_sender_name'] = 'Ditt navn';
$txt['sendtopic_sender_email'] = 'Din e-postadresse';
$txt['sendtopic_receiver_name'] = 'Mottakers navn';
$txt['sendtopic_receiver_email'] = 'Mottakers e-postadresse';
$txt['sendtopic_comment'] = 'Legg til kommentar';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'En kommentar har også blitt lagt til om dette emnet';

$txt[721] = 'Skjule e-postadressen din for andre?';

$txt[737] = 'Marker alle';

// Use numeric entities in the below string.
$txt[1001] = 'Feil i databasen';
$txt[1002] = 'Pr&oslash;v p&aring; nytt. Om du kommer tilbake til denne feilmeldingen, rapporter feilen til en administrator.';
$txt[1003] = 'Fil';
$txt[1004] = 'Linje';
// Use numeric entities in the below string.
$txt[1005] = 'SMF har oppdaget og automatisk rettet en feil i din database. Om problemene fortsetter, eller du fremdeles får disse e-postmeldingene, ta kontakt med din webhotelleverandør.';
$txt['database_error_versions'] = '<b>Merk:</b> Det ser ut som din database trenger en oppgradering. Dine forumfiler er av versjon ' . $forum_version . ', mens databasen din inneholder versjon ' . $modSettings['smfVersion'] . '. For &aring; fors&oslash;ke &aring; korrigere feilen nevnt ovenfor er det anbefalt at du kj&oslash;rer nyeste utgave av upgrade.php.';
$txt['template_parse_error'] = 'PHP-feil i designfilene!';
$txt['template_parse_error_message'] = 'Det kan se ut som noe har g&aring;tt virkelig galt med designet du vil vise p&aring; forumet. Problemet er gjerne bare midlertidig, s&aring; du m&aring; gjerne komme tilbake og pr&oslash;ve p&aring; nytt. Dersom problemet fortsetter, ta kontakt med administrator.<br /><br />Du kan ogs&aring; pr&oslash;ve &aring; <a href="javascript:location.reload();">oppdatere denne siden</a>.';
$txt['template_parse_error_details'] = 'Det var et problem under lasting av <tt><b>%1$s</b></tt> design- eller spr&aring;kfil.  Kontrollér syntaksen og pr&oslash;v p&aring; nytt - husk at enslige anf&oslash;rselstegn, (<tt>\'</tt>), m&aring; ofte ha en ekstra skr&aring;strek foran: (<tt>\\</tt>).  For &aring; se mer detaljert informasjon fra PHP, pr&oslash;v &aring; <a href="' . $boardurl . '%1$s">&aring;pne fila direkte</a>.<br /><br />Du m&aring; gjerne pr&oslash;ve &aring; <a href="javascript:location.reload();">oppdatere denne sida</a> eller <a href="' . $scripturl . '?theme=1">bruke det vanlige designet</a>.';

$txt['smf10'] = '<b>I dag</b> kl. ';
$txt['smf10b'] = '<b>I g&aring;r</b> kl. ';
$txt['smf20'] = 'Lag ny avstemning';
$txt['smf21'] = 'Sp&oslash;rsm&aring;l';
$txt['smf23'] = 'Lagre avstemning';
$txt['smf24'] = 'Stemmer totalt';
$txt['smf25'] = 'snarveier: trykk alt+s for &aring; lagre eller alt+p for &aring; forh&aring;ndsvise';
$txt['smf29'] = 'Vis resultater';
$txt['smf30'] = 'Steng avstemning';
$txt['smf30b'] = '&Aring;pne avstemning';
$txt['smf39'] = 'Rediger avstemning';
$txt['smf43'] = 'avstemning';
$txt['smf47'] = '1 dag';
$txt['smf48'] = '1 uke';
$txt['smf49'] = '1 m&aring;ned';
$txt['smf50'] = 'Alltid';
$txt['smf52'] = 'Logg inn med brukernavn, passord og innloggingstid';
$txt['smf53'] = '1 time';
$txt['smf56'] = 'FLYTTET';
$txt['smf57'] = 'Skriv inn en kort beskrivelse for<br />hvorfor emnet flyttes.';
$txt['smf60'] = 'Beklager, du har ikke nok innlegg til &aring; redigere karma - du trenger minst ';
$txt['smf62'] = 'Beklager, men du kan ikke gj&oslash;re det samme innen ventetiden. Du m&aring; vente ';
$txt['smf82'] = 'Seksjon';
$txt['smf88'] = 'i';
$txt['smf96'] = 'Prioritert emne';

$txt['smf138'] = 'Slett';

$txt['smf199'] = 'Dine personlige meldinger';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Mer statisikk]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kode';
$txt['smf239'] = 'Sitat fra';
$txt['smf240'] = 'Sitat';

$txt['smf251'] = 'Splitt emne';
$txt['smf252'] = 'Sl&aring; sammen emner';
$txt['smf254'] = 'Tittel p&aring; nytt emne';
$txt['smf255'] = 'Splitt kun dette innlegget.';
$txt['smf256'] = 'Splitt emne fra og med dette innlegget.';
$txt['smf257'] = 'Velg innlegg som skal splittes.';
$txt['smf258'] = 'Nytt emne';
$txt['smf259'] = 'Emnet ble splittet i to emner.';
$txt['smf260'] = 'Opprinnelig emne';
$txt['smf261'] = 'Velg hvilke innlegg du vil splitte.';
$txt['smf264'] = 'Emnene ble sl&aring;tt sammen.';
$txt['smf265'] = 'Nytt sammensl&aring;tt emne';
$txt['smf266'] = 'Emnet som skal sammensl&aring;s';
$txt['smf267'] = 'Plasseres i forum';
$txt['smf269'] = 'Plasseres i emne';
$txt['smf274'] = 'Er du sikker p&aring; at du vil sl&aring; sammen';
$txt['smf275'] = 'med';
$txt['smf276'] = 'Denne funksjonen vil sl&aring; sammen innleggene i to emner til ett emne. Innleggene vil da bli sortert etter dato og derfor kan rekkef&oslash;lgen p&aring; innleggene v&aelig;re forandret, slik at det eldste innlegget vil komme f&oslash;rst i det nye emnet.';

$txt['smf277'] = 'Prioritér emnet';
$txt['smf278'] = 'Ikke prioritér emnet';
$txt['smf279'] = 'Steng emnet';
$txt['smf280'] = '&Aring;pne emnet';

$txt['smf298'] = 'Avansert s&oslash;k';

$txt['smf299'] = 'ALVORLIG SIKKERHETSRISIKO:';
$txt['smf300'] = 'Du har ikke slettet ';

$txt['smf301'] = 'Siden ble generert p&aring; ';
$txt['smf302'] = ' sekunder med ';
$txt['smf302b'] = ' sp&oslash;rringer.';

$txt['smf315'] = 'Bruk denne funksjonen til &aring; informere moderatorene og administratorene om et st&oslash;tende eller feilplassert innlegg.&nbsp;<i>V&aelig;r oppmersom p&aring; at din e-postadresse blir synlig for moderatorene ved bruk av denne funksjonen.</i>';

$txt['online2'] = 'Innlogget';
$txt['online3'] = 'Utlogget';
$txt['online4'] = 'Personlig melding (innlogget)';
$txt['online5'] = 'Personlig melding (utlogget)';
$txt['online8'] = 'Status';

$txt['topbottom4'] = 'Til toppen';
$txt['topbottom5'] = 'Til bunnen';

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


$txt['calendar3'] = 'F&oslash;dselsdager:';
$txt['calendar4'] = 'Hendelser:';
$txt['calendar3b'] = 'Kommende f&oslash;dselsdager:';
$txt['calendar4b'] = 'Kommende hendelser:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'M&aring;ned:';
$txt['calendar10'] = '&Aring;r:';
$txt['calendar11'] = 'Dag:';
$txt['calendar12'] = 'Tittel p&aring; hendelsen:';
$txt['calendar13'] = 'Lag emne i:';
$txt['calendar20'] = 'Rediger hendelse';
$txt['calendar21'] = 'Slett denne hendelsen?';
$txt['calendar22'] = 'Slett hendelse';
$txt['calendar23'] = 'Legg til hendelse';
$txt['calendar24'] = 'Kalender';
$txt['calendar37'] = 'Tilknytt kalender';
$txt['calendar43'] = 'Tilknytt hendelse';
$txt['calendar47'] = 'Kommende hendelser';
$txt['calendar47b'] = 'Dagens kalender';
$txt['calendar51'] = 'Uke';
$txt['calendar54'] = 'Antall dager:';
$txt['calendar_how_edit'] = 'hvordan redigerer du disse hendelsene?';
$txt['calendar_link_event'] = 'Tilknytt hendelsen til innlegg:';
$txt['calendar_confirm_delete'] = 'Er du sikker p&aring; at du vil slette denne hendelsen?';
$txt['calendar_linked_events'] = 'Tilknyttede hendelser';

$txt['moveTopic1'] = 'Legg til videresendings-emne';
$txt['moveTopic2'] = 'Endre tittel p&aring; emnet';
$txt['moveTopic3'] = 'Ny tittel';
$txt['moveTopic4'] = 'Rediger tittel p&aring; alle innlegg';

$txt['theme_template_error'] = 'Kunne ikke laste utseende til \'%s\'.';
$txt['theme_language_error'] = 'Kunne ikke laste spr&aring;kfila til \'%s\'.';

$txt['parent_boards'] = 'Delforum';

$txt['smtp_no_connect'] = 'Kunne ikke koble til SMTP host';
$txt['smtp_port_ssl'] = 'SMTP-porten er stilt inn feil; den b&oslash;r v&aelig;re 465 for SSL-servere.';
$txt['smtp_bad_response'] = 'Kunne ikke motta respons fra mailserver';
$txt['smtp_error'] = 'Det oppsto et problem ved sending av e-post. Feilmelding: ';
$txt['mail_send_unable'] = 'Kunne ikke sende e-post til adressen \'%s\'';

$txt['mlist_search'] = 'S&oslash;k etter medlemmer';
$txt['mlist_search2'] = 'S&oslash;k p&aring; nytt';
$txt['mlist_search_email'] = 'S&oslash;k p&aring; e-postadresse';
$txt['mlist_search_messenger'] = 'S&oslash;k p&aring; messenger kallenavn';
$txt['mlist_search_group'] = 'S&oslash;k p&aring; posisjon';
$txt['mlist_search_name'] = 'S&oslash;k p&aring; navn';
$txt['mlist_search_website'] = 'S&oslash;k p&aring; hjemmeside';
$txt['mlist_search_results'] = 'S&oslash;keresultater';

$txt['attach_downloaded'] = 'lastet ned';
$txt['attach_viewed'] = 'vist';
$txt['attach_times'] = 'ganger';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Innstillinger';
$txt['never'] = 'Aldri';
$txt['more'] = 'flere';

$txt['hostname'] = 'Vertsnavn';
$txt['you_are_post_banned'] = 'Beklager %s, du er utestengt fra &aring; skrive innlegg og personlige meldinger p&aring; dette forumet.';
$txt['ban_reason'] = '&Aring;rsak';

$txt['tables_optimized'] = 'Tabellene i databasen ble optimalisert';

$txt['add_poll'] = 'Legg til avstemning';
$txt['poll_options6'] = 'Du kan bare velge opptil %s alternativer.';
$txt['poll_remove'] = 'Fjern avstemning';
$txt['poll_remove_warn'] = 'Er du sikker p&aring; at du vil fjerne avstemningen fra dette emnet?';
$txt['poll_results_expire'] = 'Resultatene vil vises n&aring;r avstemningen er avsluttet';
$txt['poll_expires_on'] = 'Avstemning avsluttes';
$txt['poll_expired_on'] = 'Avstemning er avsluttet';
$txt['poll_change_vote'] = 'Fjern stemme';
$txt['poll_return_vote'] = 'Innstillinger for stemmegivning';

$txt['quick_mod_remove'] = 'Slett valgt(e)';
$txt['quick_mod_lock'] = 'Steng valgt(e)';
$txt['quick_mod_sticky'] = 'Prioritér valgt(e)';
$txt['quick_mod_move'] = 'Flytt valgt(e) til';
$txt['quick_mod_merge'] = 'Sl&aring; sammen valgt(e)';
$txt['quick_mod_markread'] = 'Marker valgt(e) som lest';
$txt['quick_mod_go'] = 'Ok!';
$txt['quickmod_confirm'] = 'Er du sikker p&aring; at du vil gj&oslash;re dette?';

$txt['spell_check'] = 'Stavekontroll';

$txt['quick_reply_1'] = 'Hurtigsvar';
$txt['quick_reply_2'] = 'Med et <em>hurtigsvar</em> kan du bruke BBC og smilefjes som du ville om du trykket Svar, men dette er mye raskere.';
$txt['quick_reply_warning'] = 'Advarsel: Dette emnet er stengt!<br />Kun administratorer og moderatorer kan legge inn svar.';

$txt['notification_enable_board'] = 'Er du sikker p&aring; at du vil aktivere varsling om nye emner i dette forumet?';
$txt['notification_disable_board'] = 'Er du sikker p&aring; at du vil deaktivere varsling om nye emner i dette forumet?';
$txt['notification_enable_topic'] = 'Er du sikker p&aring; at du vil aktivere varsling om nye svar i dette emnet?';
$txt['notification_disable_topic'] = 'Er du sikker p&aring; at du vil deaktivere varsling om nye svar i dette emnet?';

$txt['rtm1'] = 'Rapporter til moderator';

$txt['unread_topics_visit'] = 'Nye uleste emner';
$txt['unread_topics_visit_none'] = 'Ingen uleste emner siden ditt siste bes&oslash;k.  <a href="' . $scripturl . '?action=unread;all">Klikk her for &aring; s&oslash;ke etter alle uleste emner</a>.';
$txt['unread_topics_all'] = 'Alle uleste emner';
$txt['unread_replies'] = 'Oppdaterte emner';

$txt['who_title'] = 'Hvem er p&aring;logget';
$txt['who_and'] = ' og ';
$txt['who_viewing_topic'] = ' leser dette emnet.';
$txt['who_viewing_board'] = ' er inne p&aring; dette forumet.';
$txt['who_member'] = 'Medlem';

$txt['powered_by_php'] = 'Bygget p&aring; PHP';
$txt['powered_by_mysql'] = 'Bygget p&aring; MySQL';
$txt['valid_html'] = 'HTML 4.01 godkjent!';
$txt['valid_xhtml'] = 'XHTML 1.0 godkjent!';
$txt['valid_css'] = 'CSS godkjent!';

$txt['guest'] = 'gjest';
$txt['guests'] = 'gjester';
$txt['user'] = 'medlem';
$txt['users'] = 'medlemmer';
$txt['hidden'] = 'skjult(e)';
$txt['buddy'] = 'venn';
$txt['buddies'] = 'venner';
$txt['most_online_ever'] = 'Flest p&aring;logget noen sinne';
$txt['most_online_today'] = 'Flest p&aring;logget idag';

$txt['merge_select_target_board'] = 'Velg hvilket forum det sammensl&aring;tte emnet skal plasseres i';
$txt['merge_select_poll'] = 'Velg hvilken avstemning det sammensl&aring;tte emnet skal ha';
$txt['merge_topic_list'] = 'Velg emner som skal sl&aring;s sammen';
$txt['merge_select_subject'] = 'Velg tittel p&aring; sammensl&aring;tt emne';
$txt['merge_custom_subject'] = 'Annen tittel';
$txt['merge_enforce_subject'] = 'Endre tittel p&aring; alle innlegg';
$txt['merge_include_notifications'] = 'Inkluder varslinger?';
$txt['merge_check'] = 'Sl&aring; sammen?';
$txt['merge_no_poll'] = 'Ingen avstemning';

$txt['response_prefix'] = 'Sv: ';
$txt['current_icon'] = 'Gjeldende symbol';

$txt['smileys_current'] = 'Gjeldende smilefjes-sett';
$txt['smileys_none'] = 'Ingen smilefjes';
$txt['smileys_forum_board_default'] = 'Forvalg for forum';

$txt['search_results'] = 'S&oslash;keresultat';
$txt['search_no_results'] = 'Ingen treff funnet';

$txt['totalTimeLogged1'] = 'Total tid innlogget: ';
$txt['totalTimeLogged2'] = ' dager, ';
$txt['totalTimeLogged3'] = ' timer og ';
$txt['totalTimeLogged4'] = ' minutter.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 't ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Det er';
$txt['approve_thereare'] = 'Det er';
$txt['approve_member'] = 'ett medlem';
$txt['approve_members'] = 'medlemmer';
$txt['approve_members_waiting'] = 'som venter p&aring; godkjenning.';

$txt['notifyboard_turnon'] = '&Oslash;nsker du &aring; f&aring; varsling p&aring; e-post n&aring;r noen lager et nytt emne i dette forumet?';
$txt['notifyboard_turnoff'] = 'Er du sikker p&aring; at du ikke vil motta varsling p&aring; e-post om nye emner i dette forumet?';

$txt['activate_code'] = 'Din aktiveringskode er';

$txt['find_members'] = 'S&oslash;k etter medlemmer';
$txt['find_username'] = 'Navn, brukernavn, eller e-postadresse';
$txt['find_buddies'] = 'Vis kun venner?';
$txt['find_wildcards'] = 'Tillatte jokertegn: *, ?';
$txt['find_no_results'] = 'Ingen treff funnet';
$txt['find_results'] = 'Resultater';
$txt['find_close'] = 'Lukk';

$txt['unread_since_visit'] = 'Vis uleste innlegg siden forrige bes&oslash;k.';
$txt['show_unread_replies'] = 'Vis nye svar p&aring; dine innlegg.';

$txt['change_color'] = 'Endre farge';

$txt['quickmod_delete_selected'] = 'Slett valgte';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Du har mottatt en eller flere nye personlige meldinger.\\nVil du vise dem n¨å (i nytt vindu)?';

$txt['previous_next_back'] = '&laquo; forrige';
$txt['previous_next_forward'] = 'neste &raquo;';

$txt['movetopic_auto_board'] = '[FORUM]';
$txt['movetopic_auto_topic'] = '[EMNE-LENKE]';
$txt['movetopic_default'] = 'Dette emnet har blitt flyttet til ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Krymp eller utvid topp-feltet.';

$txt['mark_unread'] = 'Marker som ulest';

$txt['ssi_not_direct'] = 'Vennligst ikke lag lenker direkte mot SSI.php; du kan istedet benytte stien (%s) eller legge til ?ssi_function=etellerannet.';
$txt['ssi_session_broken'] = 'SSI.php klarte ikke &aring; laste inn en sessjon! Dette kan skape problem med utlogging og andre funksjoner - vennligst forsikre deg om at SSI.php inkluderes f&oslash;r *alt* annet i dine scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Forh&aring;ndsvis innlegg';
$txt['preview_fetch'] = 'Henter forh&aring;ndsvisning...';
$txt['preview_new'] = 'Ny melding';
$txt['error_while_submitting'] = 'F&oslash;lgende feil oppsto ved posting av meldingen:';

$txt['split_selected_posts'] = 'Valgte innlegg';
$txt['split_selected_posts_desc'] = 'Innleggene nedenfor vil danne et nytt emne etter splitting.';
$txt['split_reset_selection'] = 'tilbakestill valg';

$txt['modify_cancel'] = 'Avbryt';
$txt['mark_read_short'] = 'Merk som lest';

$txt['pm_short'] = 'Mine meldinger';
$txt['hello_member_ndt'] = 'Hallo';

$txt['ajax_in_progress'] = 'Henter...';

?>