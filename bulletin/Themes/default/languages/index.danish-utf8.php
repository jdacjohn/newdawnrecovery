<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'da_DK.utf8';
$txt['lang_dictionary'] = 'da';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('søndag', 'mandag', 'tirsdag', 'onsdag', 'torsdag', 'fredag', 'lørdag');
$txt['days_short'] = array('søn', 'man', 'tir', 'ons', 'tors', 'fre', 'lør');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Januar', 'Februar', 'Marts', 'April', 'Maj', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'December');
$txt['months_titles'] = array(1 => 'Januar', 'Februar', 'Marts', 'April', 'Maj', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'December');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

$txt['newmessages0'] = 'er ny';
$txt['newmessages1'] = 'er ny';
$txt['newmessages3'] = 'Ny';
$txt['newmessages4'] = ',';

$txt[2] = 'Admin';

$txt[10] = 'Gem';

$txt[17] = 'Redigér';
$txt[18] = $context['forum_name'] . ' - Oversigt';
$txt[19] = 'Medlemmer';
$txt[20] = 'Board navn';
$txt[21] = 'Beskeder';
$txt[22] = 'Nyeste beskeder';

$txt[24] = '(Ingen overskrift)';
$txt[26] = 'Beskeder';
$txt[27] = 'Vis profil';
$txt[28] = 'Gæst';
$txt[29] = 'Forfatter';
$txt[30] = 'Dato';
$txt[31] = 'Slet';
$txt[33] = 'Start nyt emne';

$txt[34] = 'Log på';
// Use numeric entities in the below string.
$txt[35] = 'Brugernavn';
$txt[36] = 'Kodeord';

$txt[40] = 'Brugernavnet eksisterer ikke.';

$txt[62] = 'Board Moderator';
$txt[63] = 'Fjern emne';
$txt[64] = 'Emner';
$txt[66] = 'Redigér besked';
$txt[68] = 'Navn';
$txt[69] = 'E-mail';
$txt[70] = 'Overskrift';
$txt[72] = 'Tilføj';

$txt[79] = 'Profil';

$txt[81] = 'Vælg kodeord';
$txt[82] = 'Gentag kodeord';
$txt[87] = 'Position';

$txt[92] = 'Se profilen af';
$txt[94] = 'I alt';
$txt[95] = 'Beskeder';
$txt[96] = 'Webside';
$txt[97] = 'Registrér';

$txt[101] = 'Besked oversigt';
$txt[102] = 'Nyheder';
$txt[103] = 'Hjem';

$txt[104] = 'Lås/oplås emne';
$txt[105] = 'Gem';
$txt[106] = 'En fejl er opstået!';
$txt[107] = 'den';
$txt[108] = 'Log af';
$txt[109] = 'Startet af';
$txt[110] = 'Svar';
$txt[111] = 'Nyeste beskeder';
$txt[114] = 'Administrator login';
// Use numeric entities in the below string.
$txt[118] = 'Emne';
$txt[119] = 'Hjælp';
$txt[121] = 'Fjern besked';
$txt[125] = 'Abonnér';
$txt[126] = 'Vil du have en e-mail hvis nogen svarer på dette emne?';
// Use numeric entities in the below string.
$txt[130] = "Med hilsener fra\n " . $context['forum_name'] . ' holdet.';
$txt[131] = 'Abonnér på svar';
$txt[132] = 'Flyt emne';
$txt[133] = 'Flyt til';
$txt[139] = 'Sider';
$txt[140] = 'Brugere aktive i de seneste ' . $modSettings['lastActive'] . ' minutter';
$txt[144] = 'Personlige beskeder';
$txt[145] = 'Svar med citat';
$txt[146] = 'Svar';

$txt[151] = 'Ingen beskeder...';
$txt[152] = 'du har';
$txt[153] = 'beskeder';
$txt[154] = 'Slet denne besked';

$txt[158] = 'Brugere Online';
$txt[159] = 'Personlig besked';
$txt[160] = 'Gå til';
$txt[161] = 'gå';
$txt[162] = 'Er du sikker på at du vil fjerne dette emne?';
$txt[163] = 'Ja';
$txt[164] = 'Nej';

$txt[166] = 'Søgeresultater';
$txt[167] = 'Slut på resultater';
$txt[170] = 'Desværre, ingen matches fundet';
$txt[176] = 'på';

$txt[182] = 'Søg';
$txt[190] = 'Vis alle beskeder';

$txt[193] = 'Tilbage';
$txt[194] = 'Glemt kodeord';
$txt[195] = 'Emne startet af';
$txt[196] = 'Titel';
$txt[197] = 'Besked af';
$txt[200] = 'Søgbar liste over alle registrerede medlemmer.';
$txt[201] = 'Ønsk velkommen til';
$txt[208] = 'Administrationscenter';
$txt[211] = 'Sidste ændring';
$txt[212] = 'Vil du deaktivere abonnering på dette emne?';

$txt[214] = 'Nylige beskeder';

$txt[227] = 'Lokation';
$txt[231] = 'Køn';
$txt[233] = 'Registereringsdato';

$txt[234] = 'Se de 10 seneste beskeder i dette forum.';
$txt[235] = 'er de mest nylige opdaterede emner';

$txt[238] = 'Han';
$txt[239] = 'Hun';

$txt[240] = 'Forkert karakter brugt i brugernavn.';

$txt['welcome_guest'] = 'Velkommen, <b>' . $txt[28] . '</b>. Venligst <a href="' . $scripturl . '?action=login">log på</a> eller <a href="' . $scripturl . '?action=register">registrer</a>.';
$txt['welcome_guest_activate'] = '<br />Modtog du ikke en <a href="' . $scripturl . '?action=activate">aktiveringsmail?</a>';
$txt['hello_member'] = 'Hej,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Velkommen,';
$txt[247] = 'Hej,';
$txt[248] = 'Velkommen,';
$txt[249] = 'Venligst';
$txt[250] = 'Tilbage';
$txt[251] = 'Vælg venligst en destination';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Postet af';

$txt[287] = 'Smiley';
$txt[288] = 'Vred';
$txt[289] = 'Humørgrin';
$txt[290] = 'Stort grin';
$txt[291] = 'Sørgelig';
$txt[292] = 'Blink';
$txt[293] = 'Grin';
$txt[294] = 'Chokeret';
$txt[295] = 'Cool';
$txt[296] = 'Spørgsmålstegn';
$txt[450] = 'Rullende øjne';
$txt[451] = 'Tunge';
$txt[526] = 'støt';
$txt[527] = 'Forseglede læber';
$txt[528] = 'Tvær';
$txt[529] = 'Kys';
$txt[530] = 'Græder';

$txt[298] = 'Moderator';
$txt[299] = 'Moderatorer';

$txt[300] = 'Markér emner som læst for dette board';
$txt[301] = 'Visninger';
$txt[302] = 'Vis';

$txt[303] = 'Vis alle brugere';
$txt[305] = 'Vis';
$txt[307] = 'E-mail';

$txt[308] = 'Viser alle medlemmer';
$txt[309] = 'af';
$txt[310] = 'antal medlemmer i alt';
$txt[311] = 'til';
$txt[315] = 'Glemt dit kodeord?';

$txt[317] = 'Dato';
// Use numeric entities in the below string.
$txt[318] = 'Fra';
$txt[319] = 'Overskrift';
$txt[322] = 'Check ny beskeder';
$txt[324] = 'Til';

$txt[330] = 'Emner';
$txt[331] = 'Medlemmer';
$txt[332] = 'Medlemsliste';
$txt[333] = 'Nye beskeder';
$txt[334] = 'Ingen nye beskeder';

$txt['sendtopic_send'] = 'Send';

$txt[371] = 'Tidsformat';
$txt[377] = 'eller';

$txt[398] = 'Desværre, ingen matches fundet';

$txt[418] = 'Abonnéring';

$txt[430] = 'Desværre %s, du er forbudt at bruge dette forum!';

$txt[452] = 'Markér ALLE beskeder som læst';

$txt[454] = 'Varmt emne (Flere end ' . $modSettings['hotTopicPosts'] . ' svar)';
$txt[455] = 'Meget varmt emne (Flere end ' . $modSettings['hotTopicVeryPosts'] . ' svar)';
$txt[456] = 'Låst emne';
$txt[457] = 'Normalt emne';
$txt['participation_caption'] = 'Emne du har postet i';

$txt[462] = 'GÅ';

$txt[465] = 'Udskriv';
$txt[467] = 'Profil';
$txt[468] = 'Emner total';
$txt[470] = 'N/A';
$txt[471] = 'besked';
$txt[473] = 'Dette brugernavn er allerede i brug af et andet medlem. Klik &quot;Tilbage&quot; og prøv igen.';

$txt[488] = 'Totale antal medlemmer';
$txt[489] = 'Beskeder total';
$txt[490] = 'Emner total';

$txt[497] = 'Minutter at være logget på';

$txt[507] = 'Forhåndsvisning';
$txt[508] = 'Vær altid logget på';

$txt[511] = 'Logget';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'af';

$txt[578] = 'timer';
$txt[579] = 'dage';

$txt[581] = ', vores nyeste medlem.';

$txt[582] = 'Søg efter';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hej.+er+du+der?';
$txt[604] = 'YIM';

$txt[616] = 'Husk, dette forum er i \'Vedligeholdelsestilstand\'.';

$txt[641] = 'Læst';
$txt[642] = 'gange';

$txt[645] = 'Forumstatistik';
$txt[656] = 'Seneste medlem';
$txt[658] = 'Kategorier i alt';
$txt[659] = 'Nyeste besked';

$txt[660] = 'Du har';
$txt[661] = 'Klik';
$txt[662] = 'her';
$txt[663] = 'for at læse dem.';

$txt[665] = 'Boards i alt';

$txt[668] = 'Udskriv siden';

$txt[679] = 'Dette skal være en gyldig mailadresse.';

$txt[683] = 'Jeg er nørd!!';
$txt[685] = $context['forum_name'] . ' - Info Center';

$txt[707] = 'Send dette emne';

$txt['sendtopic_title'] = 'Send emnet &quot;%s&quot; til en ven.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Hej %s,';
$txt['sendtopic_this_topic'] = 'Jeg vil gerne at du læser emnet "%s" på siden ' . $context['forum_name'] . '.  For at læse det, skal du klikke på dette link';
$txt['sendtopic_thanks'] = 'Med venlig hilsen';
$txt['sendtopic_sender_name'] = 'Dit navn';
$txt['sendtopic_sender_email'] = 'Din mail adresse';
$txt['sendtopic_receiver_name'] = 'Modtagers navn';
$txt['sendtopic_receiver_email'] = 'Modtagers mailadresse';
$txt['sendtopic_comment'] = 'Tilføj en kommentar';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Kommentar angående dette emne';

$txt[721] = 'Skjul mailadressen for offentligheden?';

$txt[737] = 'Markér alle';

// Use numeric entities in the below string.
$txt[1001] = 'Database Fejl';
$txt[1002] = 'Prøv venligst igen. Hvis du får samme fejl igen, bedes du rapportere denne til en administrator.';
$txt[1003] = 'Fil';
$txt[1004] = 'Linie';
// Use numeric entities in the below string.
$txt[1005] = 'SMF har fundet og prøvet at reparere en fejl i din database.  Hvis du fortsætter med at have problemer, eller fortsat modtager disse e-mails, skal du venligst kontakte din udbyder.';
$txt['database_error_versions'] = '<b>Bemærk:</b> Det ser ud til din database behøver en opgradering. Dine forumfiler er i øjeblikket i version ' . $forum_version . ', og din database er i version ' . $modSettings['smfVersion'] . '. Det anbefales at du afvikler seneste version af upgrade.php.';
$txt['template_parse_error'] = 'Skabelon afviklingsfejl!';
$txt['template_parse_error_message'] = 'Det ser ud til at noget er gået galt med skabelonen i forummet.  Dette problem vil kun være midlertidigt, så kom venligst tilbage senere og prøv igen. Hvis du fortsat ser denne fejlbesked, bedes du kontakteadministratoren.<br /><br />Du kan også prøve at <a href="javascript:location.reload();">opdatere denne side</a>.';
$txt['template_parse_error_details'] = 'Der var et problem med at hente  <tt><b>%1$s</b></tt> skabelonen eller sprogfilen. Check venligst syntaxen og prøv igen - husk enkelte anførselstegn (<tt>\'</tt>) ofte skal være udført med en skråstreg  (<tt>\\</tt>).  For at se en mere specifik fejl-information fra PHP, skal du prøve direkte adgang til filen <a href="' . $boardurl . '%1$s"></a>.<br /><br />Du kan prøve at <a href="javascript:location.reload();">opdatere denne side</a> eller i stedet for <a href="' . $scripturl . '?theme=1">bruge standard temaet</a>.';

$txt['smf10'] = '<b>I dag</b> ved ';
$txt['smf10b'] = '<b>I går</b> ved ';
$txt['smf20'] = 'Post ny afstemning';
$txt['smf21'] = 'Spørgsmål';
$txt['smf23'] = 'Afgiv stemme';
$txt['smf24'] = 'Total stemmer';
$txt['smf25'] = 'genveje: tryk alt+s for at afgive/poste eller alt+p for førvisning';
$txt['smf29'] = 'Se resultater.';
$txt['smf30'] = 'Aflås afstemning';
$txt['smf30b'] = 'oplås afstemning';
$txt['smf39'] = 'Ændre afstemning';
$txt['smf43'] = 'Afsteming';
$txt['smf47'] = '1 Dag';
$txt['smf48'] = '1 uge';
$txt['smf49'] = '1 måned';
$txt['smf50'] = 'Altid';
$txt['smf52'] = 'Log på med brugernavn, kodeord og sessionslængde';
$txt['smf53'] = '1 time';
$txt['smf56'] = 'Flyttet';
$txt['smf57'] = 'Anfør venligst en kort beskrivelse af, <br />hvorfor dette emne er blevet flyttet.';
$txt['smf60'] = 'Ked af det, du har ikke postet nok i forum til at ændre karma - du skal bruge mindst ';
$txt['smf62'] = 'Ked af det, du kan ikke gentage karma afgivelse uden ventetid ';
$txt['smf82'] = 'Board';
$txt['smf88'] = 'i';
$txt['smf96'] = 'Fremhæv emne';

$txt['smf138'] = 'Slet';

$txt['smf199'] = 'Dine personlige beskeder';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Flere Stats]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kode';
$txt['smf239'] = 'Citat fra';
$txt['smf240'] = 'Citat';

$txt['smf251'] = 'Del emnet';
$txt['smf252'] = 'Flet emne';
$txt['smf254'] = 'Overskrift for nyt emne';
$txt['smf255'] = 'Split kun denne besked.';
$txt['smf256'] = 'Split emnet efter og inklusive denne post.';
$txt['smf257'] = 'Vælg hvilke beskeder der skal deles.';
$txt['smf258'] = 'Nyt emne';
$txt['smf259'] = 'Emne successfuldt splittet over i to emners.';
$txt['smf260'] = 'Originalt emne';
$txt['smf261'] = 'Vælg venligst de beskeder du vil have splittet.';
$txt['smf264'] = 'Emner successfuldt splittet.';
$txt['smf265'] = 'Nyligt sammenflettet emne';
$txt['smf266'] = 'Emne at flette';
$txt['smf267'] = 'Modtagerboard';
$txt['smf269'] = 'Modtageremne';
$txt['smf274'] = 'Er du sikker på at du vil flette';
$txt['smf275'] = 'med';
$txt['smf276'] = 'Denne funktion vil flette beskeder af to emner sammen til et emne. Beskederne vil blive sorteret efter tidspunktet de er blevet postet på. Derfor vil den tidligst postede besked være den første i et sammenflettet emne.';

$txt['smf277'] = 'Sæt emne stik';
$txt['smf278'] = 'Sæt emne ikke-stik';
$txt['smf279'] = 'Lås emne';
$txt['smf280'] = 'Oplås emne';

$txt['smf298'] = 'Advanceret søgning';

$txt['smf299'] = 'STOR SIKKERHEDS-RISIKO:';
$txt['smf300'] = 'Du har ikke flyttet ';

$txt['smf301'] = 'Siden oprettett på ';
$txt['smf302'] = ' sekunder med ';
$txt['smf302b'] = ' forespørgelser.';

$txt['smf315'] = 'Brug denne funktion til at informere moderatorer og administratorer om en stødelig eller forkert postet besked.<br /><i>Bemærk venligst, at din mailadresse vil blive oplyst til moderatorerne hvis du bruger dette.</i>';

$txt['online2'] = 'Online';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Personlig besked (Online)';
$txt['online5'] = 'Personlig besked (Offline)';
$txt['online8'] = 'Status';

$txt['topbottom4'] = 'Gå op';
$txt['topbottom5'] = 'Gå ned';

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


$txt['calendar3'] = 'Fødselsdage:';
$txt['calendar4'] = 'Begivenheder:';
$txt['calendar3b'] = 'Kommende fødselsdage:';
$txt['calendar4b'] = 'Kommende begivenheder:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Måned:';
$txt['calendar10'] = 'År:';
$txt['calendar11'] = 'Dag:';
$txt['calendar12'] = 'Titel på begivenhed:';
$txt['calendar13'] = 'Post I:';
$txt['calendar20'] = 'Rediger begivenhed';
$txt['calendar21'] = 'Slet denne begivenhed?';
$txt['calendar22'] = 'Slet begivenhed';
$txt['calendar23'] = 'Indsæt begivenhed';
$txt['calendar24'] = 'Kalender';
$txt['calendar37'] = 'Link til kalender';
$txt['calendar43'] = 'Link begivenhed';
$txt['calendar47'] = 'Kommende kalender';
$txt['calendar47b'] = 'Dagens kalender';
$txt['calendar51'] = 'Uge';
$txt['calendar54'] = 'Antal dage:';
$txt['calendar_how_edit'] = 'hvordan ændrer du disse begivenheder?';
$txt['calendar_link_event'] = 'Link begivenhed til Post:';
$txt['calendar_confirm_delete'] = 'Er du sikker på du vil slette denne begivenhed?';
$txt['calendar_linked_events'] = 'Linkede begivenheder';

$txt['moveTopic1'] = 'Post et redirektions emne';
$txt['moveTopic2'] = 'Ændre emnets overskrift';
$txt['moveTopic3'] = 'Ny overskrift';
$txt['moveTopic4'] = 'Ændre alle beskeders overskrift';

$txt['theme_template_error'] = 'Kan ikke loade \'%s\' skabelonen.';
$txt['theme_language_error'] = 'Kan ikke loade \'%s\' sprogfilen.';

$txt['parent_boards'] = 'Boards';

$txt['smtp_no_connect'] = 'Kunne ikke forbinde til SMTP host';
$txt['smtp_port_ssl'] = 'SMTP portindstillingerne er ukorrekte; Det skal være port 465 til SSL servere.';
$txt['smtp_bad_response'] = 'Kunne ikke få svar fra mailserveren';
$txt['smtp_error'] = 'Problemer med at sende mail. Fejl: ';
$txt['mail_send_unable'] = 'Kan ikke sende mail til e-mailadressen \'%s\'';

$txt['mlist_search'] = 'Søg efter brugere';
$txt['mlist_search2'] = 'Søg igen';
$txt['mlist_search_email'] = 'Søg efter e-mail adresse';
$txt['mlist_search_messenger'] = 'Søg efter Messenger kaldenavn';
$txt['mlist_search_group'] = 'Søg efter position';
$txt['mlist_search_name'] = 'Søg efter navn';
$txt['mlist_search_website'] = 'Søg efter webside';
$txt['mlist_search_results'] = 'Søg resultater efter';

$txt['attach_downloaded'] = 'downloadet';
$txt['attach_viewed'] = 'læst';
$txt['attach_times'] = 'gange';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Indstillinger';
$txt['never'] = 'Aldrig';
$txt['more'] = 'flere';

$txt['hostname'] = 'Hostnavn';
$txt['you_are_post_banned'] = 'Desværre %s, Du er forment adgang til at poste eller sende personlige beskeder på dette forum!';
$txt['ban_reason'] = 'Grund';

$txt['tables_optimized'] = 'Databasetabellerne er optimeret';

$txt['add_poll'] = 'Tilføj afstemning';
$txt['poll_options6'] = 'Du må kun vælge op til %s funktioner.';
$txt['poll_remove'] = 'Fjern afsteming';
$txt['poll_remove_warn'] = 'Er du sikker på at du vil fjerne denne afsteming fra dette emne?';
$txt['poll_results_expire'] = 'Resultater vil blive vist når afstemingen er afsluttet';
$txt['poll_expires_on'] = 'Afstemingen slutter';
$txt['poll_expired_on'] = 'Afstemingen er lukket';
$txt['poll_change_vote'] = 'Fjern stemme';
$txt['poll_return_vote'] = 'Indstillinger for afstemning';

$txt['quick_mod_remove'] = 'Fjern valgte';
$txt['quick_mod_lock'] = 'Lås valgte';
$txt['quick_mod_sticky'] = '\'Fremhæv emne\' valgt';
$txt['quick_mod_move'] = 'Flyt valgte til';
$txt['quick_mod_merge'] = 'Flet valgte';
$txt['quick_mod_markread'] = 'Markér valgte som læst';
$txt['quick_mod_go'] = 'Gå!';
$txt['quickmod_confirm'] = 'Er du sikker på at du vil dette?';

$txt['spell_check'] = 'Stavekontrol';

$txt['quick_reply_1'] = 'Hurtig svar';
$txt['quick_reply_2'] = 'Med et <i>Hurtig svar</i> kan du bruge bulletin board kode og smilefjæs som du ville i en normal post, men mere overbevisende.';
$txt['quick_reply_warning'] = 'Advarsel: Dette eme er i øjeblikket låst!<br />Kun admins og moderatorer kan svare.';

$txt['notification_enable_board'] = 'Er du sikker på at du vil abonnére på nye emner i dette board?';
$txt['notification_disable_board'] = 'Er du sikker på at du vil fjerne abonnement på nye emner i dette board?';
$txt['notification_enable_topic'] = 'Er du sikker på du vil abonnére på nye svar i dette emne?';
$txt['notification_disable_topic'] = 'Er du sikker på at du vil fjerne abonnement på nye svar i dette emne?';

$txt['rtm1'] = 'Anmeld til moderator';

$txt['unread_topics_visit'] = 'Nyligt ulæste emner';
$txt['unread_topics_visit_none'] = 'Ingen ulæste emner fundet siden dit sidste besøg.  <a href="' . $scripturl . '?action=unread;all">Klik her for at prøve alle ulæste emner</a>.';
$txt['unread_topics_all'] = 'Alle ulæste emner';
$txt['unread_replies'] = 'Opdaterede emner';

$txt['who_title'] = 'Hvem er Online';
$txt['who_and'] = ' og ';
$txt['who_viewing_topic'] = ' læser dette emne.';
$txt['who_viewing_board'] = ' læser dette board.';
$txt['who_member'] = 'Medlem';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'Valid CSS!';

$txt['guest'] = 'Gæst';
$txt['guests'] = 'Gæster';
$txt['user'] = 'Bruger';
$txt['users'] = 'Brugere';
$txt['hidden'] = 'Skjult';
$txt['buddy'] = 'Ven';
$txt['buddies'] = 'Venner';
$txt['most_online_ever'] = 'Flest online';
$txt['most_online_today'] = 'Online i dag';

$txt['merge_select_target_board'] = 'Vælg modtagerboardet til det flettede emne';
$txt['merge_select_poll'] = 'Vælg hvilken afsteming som det flettede emne skal have';
$txt['merge_topic_list'] = 'Vælg emner der skal flettes';
$txt['merge_select_subject'] = 'Vælg overskrift på det flettede emne';
$txt['merge_custom_subject'] = 'Egen overskrift';
$txt['merge_enforce_subject'] = 'Ændre overskrift på alle beskederne';
$txt['merge_include_notifications'] = 'Inkluder abonnementer?';
$txt['merge_check'] = 'Flet?';
$txt['merge_no_poll'] = 'Ingen afsteming';

$txt['response_prefix'] = 'Sv: ';
$txt['current_icon'] = 'Nuværende ikon';

$txt['smileys_current'] = 'Nuværende smileypakke';
$txt['smileys_none'] = 'Ingen smileys';
$txt['smileys_forum_board_default'] = 'Forum/Board Standard';

$txt['search_results'] = 'Søgeresultater';
$txt['search_no_results'] = 'Ingen resultater fundet';

$txt['totalTimeLogged1'] = 'Total tid logget på: ';
$txt['totalTimeLogged2'] = ' dage, ';
$txt['totalTimeLogged3'] = ' timer og ';
$txt['totalTimeLogged4'] = ' minuter.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 't ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Der er';
$txt['approve_thereare'] = 'Der er';
$txt['approve_member'] = 'et medlem';
$txt['approve_members'] = 'medlemmer';
$txt['approve_members_waiting'] = 'afventer godkendelse.';

$txt['notifyboard_turnon'] = 'Vil du have en e-mail når nogen poster et nyt emne i dette board?';
$txt['notifyboard_turnoff'] = 'Er du sikker på at du ikke ønsker at modtage besked om nye indlæg i dette board?';

$txt['activate_code'] = 'Din aktiveringskode er';

$txt['find_members'] = 'Find Medlemmer';
$txt['find_username'] = 'Navn, brugernavn, eller e-mail adresse';
$txt['find_buddies'] = 'Vis kun venner?';
$txt['find_wildcards'] = 'Tilladte jokertegn: *, ?';
$txt['find_no_results'] = 'Ingen resultater fundet';
$txt['find_results'] = 'Resultater';
$txt['find_close'] = 'Luk';

$txt['unread_since_visit'] = 'Vis ulæst post siden sidste besøg.';
$txt['show_unread_replies'] = 'Vis nye svar til dine beskeder.';

$txt['change_color'] = 'Ændrer farve';

$txt['quickmod_delete_selected'] = 'Slet markérede';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Du har modtaget en eller flere personlige beskeder. \\nVil du læse dem nu (i et nyt vindue)?';

$txt['previous_next_back'] = '&laquo; forrige';
$txt['previous_next_forward'] = 'næste &raquo;';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[EMNE LINK]';
$txt['movetopic_default'] = 'Dette emne er blevet flyttet til ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Formindsk eller forstør headeren.';

$txt['mark_unread'] = 'Markér ulæst';

$txt['ssi_not_direct'] = 'Tilgå venligst ikke SSI.php direkte; Brug i stedet stien (%s) eller tilføj ?ssi_function=etellerandet.';
$txt['ssi_session_broken'] = 'SSI.php var ikke i stand til at hente en session! Dette kan skabe problemer med at logge ud samt andre funktioner - Check venligst at SSI.php er inkluderet før noget som helst *andet* i alle dine scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Forhåndsvis post';
$txt['preview_fetch'] = 'Henter preview...';
$txt['preview_new'] = 'Ny besked';
$txt['error_while_submitting'] = 'De(n) følgende fejl opstod uder postning af beskeden:';

$txt['split_selected_posts'] = 'Valgte poster';
$txt['split_selected_posts_desc'] = 'Posterne herunder vil blive til et nyt emne, efter splittelse.';
$txt['split_reset_selection'] = 'Nulstil valgene';

$txt['modify_cancel'] = 'Anullér';
$txt['mark_read_short'] = 'Markér læst';

$txt['pm_short'] = 'Mine beskeder';
$txt['hello_member_ndt'] = 'Hej';

$txt['ajax_in_progress'] = 'Indlæser...';

?>