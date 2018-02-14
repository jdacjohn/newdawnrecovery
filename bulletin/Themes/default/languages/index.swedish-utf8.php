<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'sv_SE.utf8';
$txt['lang_dictionary'] = 'sv';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('söndag', 'måndag', 'tisdag', 'onsdag', 'torsdag', 'fredag', 'lördag');
$txt['days_short'] = array('sön', 'mån', 'tis', 'ons', 'tor', 'fre', 'lör');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'januari', 'februari', 'mars', 'april', 'maj', 'juni', 'juli', 'augusti', 'september', 'oktober', 'november', 'december');
$txt['months_titles'] = array(1 => 'Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December');
$txt['months_short'] = array(1 => 'jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');

$txt['newmessages0'] = '&auml;r nytt';
$txt['newmessages1'] = '&auml;r nya';
$txt['newmessages3'] = 'Nya';
$txt['newmessages4'] = ', varav';

$txt[2] = 'Administrationscenter';

$txt[10] = 'Spara';

$txt[17] = '&Auml;ndra';
$txt[18] = $context['forum_name'] . ' - Index';
$txt[19] = 'Medlemmar';
$txt[20] = 'Namn p&aring; tavla';
$txt[21] = 'inl&auml;gg';
$txt[22] = 'Senaste inl&auml;gg';

$txt[24] = '(&Auml;mne saknas)';
$txt[26] = 'Antal inl&auml;gg';
$txt[27] = 'Visa profil';
$txt[28] = 'G&auml;st';
$txt[29] = 'F&ouml;rfattare';
$txt[30] = 'skrivet';
$txt[31] = 'Radera';
$txt[33] = 'Starta nytt &auml;mne';

$txt[34] = 'Logga in';
// Use numeric entities in the below string.
$txt[35] = 'Användarnamn';
$txt[36] = 'L&ouml;senord';

$txt[40] = 'Anv&auml;ndarnamnet finns inte.';

$txt[62] = 'Moderator';
$txt[63] = 'Radera &auml;mne';
$txt[64] = '&auml;mnen';
$txt[66] = 'Redigera inl&auml;gg';
$txt[68] = 'Namn';
$txt[69] = 'E-post';
$txt[70] = '&Auml;mne';
$txt[72] = 'Meddelande';

$txt[79] = 'Profil';

$txt[81] = 'V&auml;lj l&ouml;senord';
$txt[82] = 'Skriv l&ouml;senordet igen';
$txt[87] = 'Position';

$txt[92] = 'Visa profil f&ouml;r';
$txt[94] = 'Totalt antal';
$txt[95] = 'inl&auml;gg';
$txt[96] = 'Hemsida';
$txt[97] = 'Registrera';

$txt[101] = 'Meddelandeindex';
$txt[102] = 'Nyheter';
$txt[103] = 'Startsida';

$txt[104] = 'L&aring;s/l&aring;s upp &auml;mne';
$txt[105] = 'Posta';
$txt[106] = 'Ett fel har uppst&aring;tt!';
$txt[107] = 'klockan';
$txt[108] = 'Logga ut';
$txt[109] = 'Startat av';
$txt[110] = 'Svar';
$txt[111] = 'Senaste inl&auml;gg';
$txt[114] = 'Administrat&ouml;rsinloggning';
// Use numeric entities in the below string.
$txt[118] = 'Ämne';
$txt[119] = 'Hj&auml;lp';
$txt[121] = 'Radera inl&auml;gg';
$txt[125] = 'Underr&auml;tta';
$txt[126] = 'Vill du f&aring; e-post n&auml;r n&aring;gon svarar p&aring; detta &auml;mne?';
// Use numeric entities in the below string.
$txt[130] = "Hälsningar,\nteamet bakom " . $context['forum_name'];
$txt[131] = 'Underr&auml;tta via e-post';
$txt[132] = 'Flytta &auml;mne';
$txt[133] = 'Flytta till';
$txt[139] = 'Sidor';
$txt[140] = 'Aktiva anv&auml;ndare under de senaste ' . $modSettings['lastActive'] . ' minuterna';
$txt[144] = 'Privata meddelanden';
$txt[145] = 'Svara med citat';
$txt[146] = 'Svara';

$txt[151] = 'Inga inl&auml;gg...';
$txt[152] = 'du har';
$txt[153] = 'meddelanden';
$txt[154] = 'Radera meddelandet';

$txt[158] = 'Anv&auml;ndare online';
$txt[159] = 'Privata meddelanden';
$txt[160] = 'G&aring; till';
$txt[161] = 'OK';
$txt[162] = '&Auml;r du s&auml;ker p&aring; att du vill radera det h&auml;r &auml;mnet?';
$txt[163] = 'Ja';
$txt[164] = 'Nej';

$txt[166] = 'S&ouml;kresultat';
$txt[167] = 'Slut p&aring; resultat';
$txt[170] = 'Beklagar, s&ouml;kningen gav inga tr&auml;ffar.';
$txt[176] = 'skrivet';

$txt[182] = 'S&ouml;k';
$txt[190] = 'Alla';

$txt[193] = 'Tillbaka';
$txt[194] = 'Lösenordsp&aring;minnelse';
$txt[195] = '&Auml;mnet startat av';
$txt[196] = 'Titel';
$txt[197] = 'Skrivet av';
$txt[200] = 'S&ouml;kbar lista &ouml;ver samtliga registrerade medlemmar.';
$txt[201] = 'Vi v&auml;lkomnar';
$txt[208] = 'Administrationscenter';
$txt[211] = 'Senast &auml;ndrad';
$txt[212] = 'Vill du st&auml;nga av underr&auml;ttelse vid svar f&ouml;r det h&auml;r &auml;mnet?';

$txt[214] = 'Nyliga inl&auml;gg';

$txt[227] = 'Stad/land';
$txt[231] = 'K&ouml;n';
$txt[233] = 'Registreringsdatum';

$txt[234] = 'Visa de senaste inl&auml;ggen p&aring; forumet.';
$txt[235] = '&auml;r det senast uppdaterade &auml;mnet';

$txt[238] = 'Man';
$txt[239] = 'Kvinna';

$txt[240] = 'Felaktiga tecken i anv&auml;ndarnamnet.';

$txt['welcome_guest'] = 'V&auml;lkommen <b>' . $txt[28] . '</b>. Var sn&auml;ll och <a href="' . $scripturl . '?action=login">logga in</a> eller <a href="' . $scripturl . '?action=register">registrera dig som ny medlem</a>.';
$txt['welcome_guest_activate'] = '<br />Har du inte f&aring;tt ditt <a href="' . $scripturl . '?action=activate">aktiveringsbrev?</a>';
$txt['hello_member'] = 'Hej';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Välkommen,';
$txt[247] = 'Hej';
$txt[248] = 'V&auml;lkommen';
$txt[249] = 'V&auml;nligen';
$txt[250] = 'Tillbaka';
$txt[251] = 'V&auml;lj destination';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Skrivet av';

$txt[287] = 'Leende (smiley)';
$txt[288] = 'Arg';
$txt[289] = 'Cheesy';
$txt[290] = 'Skrattande';
$txt[291] = 'Ledsen';
$txt[292] = 'Med glimten i ögat (blinkande)';
$txt[293] = 'Glad';
$txt[294] = 'Chockad';
$txt[295] = 'Cool';
$txt[296] = 'Va?';
$txt[450] = 'Rullande ögon (ironi)';
$txt[451] = 'Tunga';
$txt[526] = 'Generad';
$txt[527] = 'Läpparna förseglade';
$txt[528] = 'Obeslutsam';
$txt[529] = 'Kyss';
$txt[530] = 'Gråtande';

$txt[298] = 'Moderator';
$txt[299] = 'Moderatorer';

$txt[300] = 'Markera alla &auml;mnen p&aring; den h&auml;r tavlan som l&auml;sta';
$txt[301] = 'Visningar';
$txt[302] = 'Nya';

$txt[303] = 'Visa alla medlemmar';
$txt[305] = 'Visa';
$txt[307] = 'E-postadress';

$txt[308] = 'Visar medlemmar';
$txt[309] = 'av totalt';
$txt[310] = 'medlemmar';
$txt[311] = 'till';
$txt[315] = 'Gl&ouml;mt bort ditt l&ouml;senord?';

$txt[317] = 'Datum';
// Use numeric entities in the below string.
$txt[318] = 'Från';
$txt[319] = '&Auml;mne';
$txt[322] = 'Kolla om du f&aring;tt nya meddelanden';
$txt[324] = 'Till';

$txt[330] = '&auml;mnen';
$txt[331] = 'Medlemmar';
$txt[332] = 'Medlemslista';
$txt[333] = 'Nya inl&auml;gg';
$txt[334] = 'Inga nya inl&auml;gg';

$txt['sendtopic_send'] = 'Skicka';

$txt[371] = 'Tidsskillnad';
$txt[377] = 'eller';

$txt[398] = 'Beklagar, hittade inga tr&auml;ffar.';

$txt[418] = 'Underr&auml;ttelse';

$txt[430] = 'Ledsen %s, du har blivit &auml;r bannlyst fr&aring;n det h&auml;r forumet!';

$txt[452] = 'Markera alla &auml;mnen p&aring; samtliga tavlor som l&auml;sta';

$txt[454] = 'Hett &auml;mne (fler &auml;n ' . $modSettings['hotTopicPosts'] . ' svar)';
$txt[455] = 'Mycket hett &auml;mne (fler &auml;n ' . $modSettings['hotTopicVeryPosts'] . ' svar)';
$txt[456] = 'L&aring;st &auml;mne';
$txt[457] = 'Normalt &auml;mne';
$txt['participation_caption'] = '&Auml;mne du har skrivit i';

$txt[462] = 'OK';

$txt[465] = 'Skriv ut';
$txt[467] = 'Profil';
$txt[468] = '&Auml;mnessammanfattning';
$txt[470] = 'saknas';
$txt[471] = 'meddelande';
$txt[473] = 'Det h&auml;r anv&auml;ndarnamnet &auml;r redan upptaget av en annan medlem.';

$txt[488] = 'Totalt antal medlemmar';
$txt[489] = 'Totalt antal inl&auml;gg';
$txt[490] = 'Totalt antal &auml;mnen';

$txt[497] = 'Antal minuter att f&ouml;rbli inloggad';

$txt[507] = 'F&ouml;rhandsgranska';
$txt[508] = 'F&ouml;rbli inloggad f&ouml;r alltid';

$txt[511] = 'Loggat';
// Use numeric entities in the below string.
$txt[512] = 'IP-adress';

$txt[513] = 'ICQ';
$txt[515] = 'Hemsida';

$txt[525] = 'av';

$txt[578] = 'timmar';
$txt[579] = 'dagar';

$txt[581] = ', v&aring;r nyaste medlem.';

$txt[582] = 'S&ouml;k efter';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hej.+Finns+du+d&auml;r?';
$txt[604] = 'YIM';

$txt[616] = 'Kom ih&aring;g att detta forum &auml;r i underh&aring;llsl&auml;ge.';

$txt[641] = 'l&auml;st';
$txt[642] = 'g&aring;nger';

$txt[645] = 'Forumstatistik';
$txt[656] = 'Nyaste medlemmen';
$txt[658] = 'Totalt antal kategorier';
$txt[659] = 'Senaste inl&auml;gg';

$txt[660] = 'Du har';
$txt[661] = 'Klicka';
$txt[662] = 'h&auml;r';
$txt[663] = 'f&ouml;r att se dem.';

$txt[665] = 'Totalt antal tavlor';

$txt[668] = 'Skriv ut sidan';

$txt[679] = 'Detta m&aring;ste vara en giltig e-postadress.';

$txt[683] = 'Jag är en tönt!!';
$txt[685] = $context['forum_name'] . ' - Informationscenter';

$txt[707] = 'Skicka &auml;mnet';

$txt['sendtopic_title'] = 'Skicka &auml;mnet &quot;%s&quot; till en v&auml;n.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Hej %s,';
$txt['sendtopic_this_topic'] = 'Jag vill föreslå att du kollar in ämnet "%s" på ' . $context['forum_name'] . '.  För att läsa inläggen, vänligen följ den här länken';
$txt['sendtopic_thanks'] = 'Tack';
$txt['sendtopic_sender_name'] = 'Ditt namn';
$txt['sendtopic_sender_email'] = 'Din e-postadress';
$txt['sendtopic_receiver_name'] = 'Mottagarens namn';
$txt['sendtopic_receiver_email'] = 'Mottagarens e-postadress';
$txt['sendtopic_comment'] = 'L&auml;gg till kommantar';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Det har också skrivits en kommentar angående ämnet';

$txt[721] = 'D&ouml;lj e-postadressen fr&aring;n allm&auml;nheten?';

$txt[737] = 'Markera alla';

// Use numeric entities in the below string.
$txt[1001] = 'Databasfel';
$txt[1002] = 'F&ouml;rs&ouml;k igen. Om du f&aring;r detta felmeddelande upprepade g&aring;nger, var v&auml;nlig och meddela detta till n&aring;gon administrat&ouml;r.';
$txt[1003] = 'Fil';
$txt[1004] = 'Rad';
// Use numeric entities in the below string.
$txt[1005] = 'SMF har upptäckt och automatiskt försökt reparera ett fel i din databas. Om du fortsätter att ha problem, eller får dessa e-post-meddelanden vid upprepade tillfällen, vänligen ta kontakt med ditt webbhotell.';
$txt['database_error_versions'] = '<b>OBS:</b> Det ser ut som att din databas <em>kanske</em> beh&ouml;ver uppgraderas. Dina forumfiler tillh&ouml;r version ' . $forum_version . ', medan din databas tillh&ouml;r version ' . $modSettings['smfVersion'] . '. Det är mycket möjligt att detta fel kan lösas om du kör senaste versionen av Upgrade.php.';
$txt['template_parse_error'] = 'Malltolkningsfel!';
$txt['template_parse_error_message'] = 'Det ser ut som att n&aring;got g&aring;tt snett med mallsystemet p&aring; forumet. Mest troligt &auml;r problemet h&ouml;gst tillf&auml;lligt, s&aring; kom g&auml;rna tillbaka lite senare och f&ouml;rs&ouml;k igen. Om du forts&auml;tter att f&aring; detta meddelande, v&auml;nligen kontakta administrat&ouml;ren.<br /><br />Du kan ocks&aring; f&ouml;rs&ouml;ka att <a href="javascript:location.reload();">uppdatera den h&auml;r sidan</a>.';
$txt['template_parse_error_details'] = 'Ett problem uppstod vid laddning av en spr&aring;kfil eller en mall vid namn <tt><b>%1$s</b></tt>.  Kontrollera syntaxen i filen, och f&ouml;rs&ouml;k igen - kom ih&aring;g att enkla citattecken/apostrofer (<tt>\'</tt>) oftast m&aring;ste "f&aring;ngas" (escape:as) med omv&auml;nda snedstreck (<tt>\\</tt>). F&ouml;r att se mer detaljerade felmeddelanden fr&aring;n PHP, f&ouml;rs&ouml;k att <a href="' . $boardurl . '%1$s">ladda filen i webbl&auml;saren direkt</a>.<br /><br /
>Det kan vara en bra idé att <a href="javascript:location.reload();">uppdatera sidan</a> eller att <a href="' . $scripturl . '?theme=1">anv&auml;nda forumets standardtema</a>.';

$txt['smf10'] = '<b>idag</b> kl. ';
$txt['smf10b'] = '<b>ig&aring;r</b> kl. ';
$txt['smf20'] = 'Skapa ny omr&ouml;stning';
$txt['smf21'] = 'Fr&aring;ga';
$txt['smf23'] = 'Skicka r&ouml;st';
$txt['smf24'] = 'Antal personer som r&ouml;stat';
$txt['smf25'] = 'snabbkommandon: tryck alt+s f&ouml;r att skicka/posta, eller alt+p f&ouml;r att f&ouml;rhandsgranska';
$txt['smf29'] = 'Visa resultat.';
$txt['smf30'] = 'L&aring;s omr&ouml;stning';
$txt['smf30b'] = 'L&aring;s upp omr&ouml;stning';
$txt['smf39'] = 'Redigera omr&ouml;stning';
$txt['smf43'] = 'Omr&ouml;stning';
$txt['smf47'] = '1 dag';
$txt['smf48'] = '1 vecka';
$txt['smf49'] = '1 m&aring;nad';
$txt['smf50'] = 'F&ouml;r alltid';
$txt['smf52'] = 'Logga in med anv&auml;ndarnamn, l&ouml;senord och &ouml;nskad sessionsl&auml;ngd';
$txt['smf53'] = '1 timme';
$txt['smf56'] = 'FLYTTAD';
$txt['smf57'] = 'Skriv en kort f&ouml;rklaring om<br />varf&ouml;r &auml;mnet blivit flyttat.';
$txt['smf60'] = 'Beklagar, du har inte skrivit tillr&auml;ckligt m&aring;nga inl&auml;gg f&ouml;r att &auml;ndra karma - du beh&ouml;ver minst ';
$txt['smf62'] = 'Beklagar, du kan inte upprepa karmah&auml;ndelser utan att v&auml;nta minst ';
$txt['smf82'] = 'Tavla';
$txt['smf88'] = 'i';
$txt['smf96'] = 'Fastklistrat &auml;mne';

$txt['smf138'] = 'Radera';

$txt['smf199'] = 'Dina privata meddelanden';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Mer statistik]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kodstycke';
$txt['smf239'] = 'Citat fr&aring;n';
$txt['smf240'] = 'Citat';

$txt['smf251'] = 'Dela upp &auml;mne';
$txt['smf252'] = 'Sammanfoga &auml;mnen';
$txt['smf254'] = '&Auml;mnesrad f&ouml;r det nya &auml;mnet:';
$txt['smf255'] = 'Dela endast upp detta inl&auml;gg.';
$txt['smf256'] = 'Dela alla inl&auml;gg fr.o.m. detta.';
$txt['smf257'] = 'V&auml;lj exakt vilka inl&auml;gg du vill dela upp.';
$txt['smf258'] = 'Nytt &auml;mne';
$txt['smf259'] = '&Auml;mnet har delats upp i tv&aring; &auml;mnen utan problem.';
$txt['smf260'] = 'Ursprungligt &auml;mne';
$txt['smf261'] = 'V&auml;lj vilka inl&auml;gg du vill skapa ett nytt &auml;mne av.';
$txt['smf264'] = '&Auml;mnena har nu sammanfogats till ett enda.';
$txt['smf265'] = 'Nyligen sammanfogade &auml;mnen';
$txt['smf266'] = '&Auml;mne att sammanfoga med:';
$txt['smf267'] = 'V&auml;lj vilken tavla det ska hamna p&aring;:';
$txt['smf269'] = 'V&auml;lj vilket &auml;mne det ska hamna i:';
$txt['smf274'] = '&Auml;r du s&auml;ker p&aring; att du vill sammanfoga';
$txt['smf275'] = 'med';
$txt['smf276'] = 'Denna funktion kommer att sammanfoga inl&auml;ggen i tv&aring; olika &auml;mnen till ett enda &auml;mne. Inl&auml;ggen i det nya &auml;mnet kommer att sorteras i datumordning. Det f&ouml;rst skrivna inl&auml;gget kommer d&auml;rmed att bli det f&ouml;rsta inl&auml;gget i det nya sammanfogade &auml;mnet.';

$txt['smf277'] = 'Klistra fast &auml;mnet';
$txt['smf278'] = 'Ta bort klistret fr&aring;n detta &auml;mne';
$txt['smf279'] = 'L&aring;s &auml;mne';
$txt['smf280'] = 'L&aring;s upp &auml;mne';

$txt['smf298'] = 'Avancerad s&ouml;kning';

$txt['smf299'] = 'STOR S&Auml;KERHETSRISK:';
$txt['smf300'] = 'Du har inte tagit bort ';

$txt['smf301'] = 'Sidan skapades p&aring; ';
$txt['smf302'] = ' sekunder med ';
$txt['smf302b'] = ' databasfr&aring;gor.';

$txt['smf315'] = 'Anv&auml;nd denna funktion f&ouml;r att meddela moderatorer och administrat&ouml;rer om ett ol&auml;mpligt inl&auml;gg, eller ett inl&auml;gg som &auml;r postat i fel &auml;mne/tavla.<br /><i>Observera att din e-postadress kommer att avsl&ouml;jas f&ouml;r moderatorerna, om du anv&auml;nder denna funktion.</i>';

$txt['online2'] = 'Inloggad';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Privat meddelande (Online)';
$txt['online5'] = 'Privat meddelande (Offline)';
$txt['online8'] = 'Utloggad';

$txt['topbottom4'] = 'G&aring; upp';
$txt['topbottom5'] = 'G&aring; ned';

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


$txt['calendar3'] = 'F&ouml;delsedagar:';
$txt['calendar4'] = 'H&auml;ndelser:';
$txt['calendar3b'] = 'Kommande f&ouml;delsedagar:';
$txt['calendar4b'] = 'Kommande h&auml;ndelser:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'M&aring;nad:';
$txt['calendar10'] = '&Aring;r:';
$txt['calendar11'] = 'Dag:';
$txt['calendar12'] = 'Titel f&ouml;r h&auml;ndelsen:';
$txt['calendar13'] = 'Posta p&aring; tavla:';
$txt['calendar20'] = 'Redigera h&auml;ndelse';
$txt['calendar21'] = 'Radera den h&auml;r h&auml;ndelsen?';
$txt['calendar22'] = 'Radera h&auml;ndelse';
$txt['calendar23'] = 'Posta ny h&auml;ndelse';
$txt['calendar24'] = 'Kalender';
$txt['calendar37'] = 'L&auml;nka till kalender';
$txt['calendar43'] = 'L&auml;nka h&auml;ndelser';
$txt['calendar47'] = 'Kommande kalenderh&auml;ndelser';
$txt['calendar47b'] = 'Dagens kalenderh&auml;ndelser';
$txt['calendar51'] = 'Vecka';
$txt['calendar54'] = 'Antal dagar:';
$txt['calendar_how_edit'] = 'hur g&ouml;r man för att &auml;ndra h&auml;ndelserna?';
$txt['calendar_link_event'] = 'L&auml;nka h&auml;ndelse till inl&auml;gg:';
$txt['calendar_confirm_delete'] = '&Auml;r du s&auml;ker p&aring; att du vill radera denna h&auml;ndelse?';
$txt['calendar_linked_events'] = 'Ihopl&auml;nkade h&auml;ndelser';

$txt['moveTopic1'] = 'L&auml;mna kvar ett h&auml;nvisningsmeddelande p&aring; tavlan &auml;mnet flyttats fr&aring;n';
$txt['moveTopic2'] = '&Auml;ndra rubriken p&aring; &auml;mnet';
$txt['moveTopic3'] = 'Ny rubrik';
$txt['moveTopic4'] = '&Auml;ndra rubrik p&aring; samtliga meddelanden';

$txt['theme_template_error'] = 'Kunde inte ladda mallen \'%s\'.';
$txt['theme_language_error'] = 'Kunde inte ladda spr&aring;kfilen \'%s\'.';

$txt['parent_boards'] = 'Undertavlor';

$txt['smtp_no_connect'] = 'Lyckades inte att ansluta till SMTP-servern';
$txt['smtp_port_ssl'] = 'SMTP-porten &auml;r fel inställd, det b&ouml;r vara port 465 f&ouml;r SSL-servrar.';
$txt['smtp_bad_response'] = 'Kunde inte avl&auml;sa svarskoden fr&aring;n servern';
$txt['smtp_error'] = 'Ett fel uppstod vid utskick av e-post. Fel: ';
$txt['mail_send_unable'] = 'Lyckades inte att skicka e-post till adressen \'%s\'';

$txt['mlist_search'] = 'S&ouml;k efter medlemmar';
$txt['mlist_search2'] = 'S&ouml;k igen';
$txt['mlist_search_email'] = 'S&ouml;k efter e-postadress';
$txt['mlist_search_messenger'] = 'S&ouml;k efter messenger-smeknamn';
$txt['mlist_search_group'] = 'S&ouml;k efter st&auml;llning';
$txt['mlist_search_name'] = 'S&ouml;k efter namn';
$txt['mlist_search_website'] = 'S&ouml;k efter hemsida';
$txt['mlist_search_results'] = 'S&ouml;kresultat f&ouml;r';

$txt['attach_downloaded'] = 'nedladdat';
$txt['attach_viewed'] = 'visat';
$txt['attach_times'] = 'g&aring;nger';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Inst&auml;llningar';
$txt['never'] = 'Aldrig';
$txt['more'] = 'mer';

$txt['hostname'] = 'Servernamn';
$txt['you_are_post_banned'] = 'Beklagar %s, du &auml;r bannlyst och &auml;r f&ouml;rbjuden att skriva inl&auml;gg eller skicka privata meddelanden p&aring; detta forum.';
$txt['ban_reason'] = 'Anledning';

$txt['tables_optimized'] = 'Databastabeller optimerade';

$txt['add_poll'] = 'L&auml;gg till omr&ouml;stning';
$txt['poll_options6'] = 'Du kan bara v&auml;lja upp till %s alternativ.';
$txt['poll_remove'] = 'Ta bort omr&ouml;stning';
$txt['poll_remove_warn'] = '&Auml;r du s&auml;ker p&aring; att du vill ta bort omr&ouml;stningen fr&aring;n det h&auml;r &auml;mnet?';
$txt['poll_results_expire'] = 'Resultaten kommer att visas n&auml;r omr&ouml;stningen avslutats';
$txt['poll_expires_on'] = 'Omr&ouml;stningen avslutas';
$txt['poll_expired_on'] = 'Omr&ouml;stningen har avslutats';
$txt['poll_change_vote'] = 'Ta bort r&ouml;st';
$txt['poll_return_vote'] = 'Omr&ouml;stningstillval';

$txt['quick_mod_remove'] = 'Radera markerade';
$txt['quick_mod_lock'] = 'L&aring;s markerade';
$txt['quick_mod_sticky'] = 'Klistra fast markerade';
$txt['quick_mod_move'] = 'Flytta markerade till';
$txt['quick_mod_merge'] = 'Sammanfoga markerade';
$txt['quick_mod_markread'] = 'Markera f&ouml;rkryssade som l&auml;sta';
$txt['quick_mod_go'] = 'OK!';
$txt['quickmod_confirm'] = '&Auml;r du s&auml;ker p&aring; att du vill g&ouml;ra det h&auml;r?';

$txt['spell_check'] = 'Stavningskontroll';

$txt['quick_reply_1'] = 'Snabbsvar';
$txt['quick_reply_2'] = 'Med <i>snabbsvar</i> kan du anv&auml;nda forumkoder och smileys, precis som i vanliga inl&auml;gg, men mycket smidigare.';
$txt['quick_reply_warning'] = 'Varning: Detta &auml;mne &auml;r l&aring;st f&ouml;r n&auml;rvarande!<br />Endast administrat&ouml;rer och moderatorer kan svara.';

$txt['notification_enable_board'] = '&Auml;r du s&auml;ker p&aring; att du vill f&aring; e-post vid alla nya &auml;mnen p&aring; denna tavla?';
$txt['notification_disable_board'] = '&Auml;r du s&auml;ker p&aring; att du inte l&auml;ngre vill f&aring; e-post vid nya &auml;mnen p&aring; denna tavla?';
$txt['notification_enable_topic'] = '&Auml;r du s&auml;ker p&aring; att du vill f&aring; e-post vid svar till detta &auml;mne?';
$txt['notification_disable_topic'] = '&Auml;r du s&auml;ker p&aring; att du inte l&auml;ngre vill f&aring; e-post vid svar till detta &auml;mne?';

$txt['rtm1'] = 'Anm&auml;l till moderator';

$txt['unread_topics_visit'] = 'Nyliga ol&auml;sta &auml;mnen';
$txt['unread_topics_visit_none'] = 'Inga ol&auml;sta &auml;mnen har tillkommit sedan ditt senaste bes&ouml;k.  <a href="' . $scripturl . '?action=unread;all">Klicka h&auml;r f&ouml;r att visa samtliga ol&auml;sta &auml;mnen</a>.';
$txt['unread_topics_all'] = 'Alla ol&auml;sta &auml;mnen';
$txt['unread_replies'] = 'Uppdaterade &auml;mnen';

$txt['who_title'] = 'Vilka &auml;r online';
$txt['who_and'] = ' och ';
$txt['who_viewing_topic'] = ' tittar p&aring; detta &auml;mne.';
$txt['who_viewing_board'] = ' tittar p&aring; denna tavla.';
$txt['who_member'] = 'Medlem';

$txt['powered_by_php'] = 'Drivs med PHP';
$txt['powered_by_mysql'] = 'Drivs med MySQL';
$txt['valid_html'] = 'Giltig HTML 4.01!';
$txt['valid_xhtml'] = 'Giltig XHTML 1.0!';
$txt['valid_css'] = 'Giltig CSS!';

$txt['guest'] = 'g&auml;st';
$txt['guests'] = 'g&auml;ster';
$txt['user'] = 'anv&auml;ndare';
$txt['users'] = 'anv&auml;ndare';
$txt['hidden'] = 'dolda';
$txt['buddy'] = 'kompis';
$txt['buddies'] = 'kompisar';
$txt['most_online_ever'] = 'Flest online n&aring;gonsin';
$txt['most_online_today'] = 'Flest online idag';

$txt['merge_select_target_board'] = 'Ange vilken tavla det sammanfogade &auml;mnet ska hamna i';
$txt['merge_select_poll'] = 'Ange vilken omr&ouml;stning som det sammanfogade &auml;mnet ska ha';
$txt['merge_topic_list'] = 'Ange vilka &auml;mnen som ska sammanfogas';
$txt['merge_select_subject'] = 'Ange rubrik f&ouml;r det sammanfogade &auml;mnet';
$txt['merge_custom_subject'] = 'Ny rubrik';
$txt['merge_enforce_subject'] = '&Auml;ndra rubrik p&aring; alla meddelanden';
$txt['merge_include_notifications'] = 'Inkludera underr&auml;ttelser?';
$txt['merge_check'] = 'Sammanfoga?';
$txt['merge_no_poll'] = 'Ingen omr&ouml;stning';

$txt['response_prefix'] = 'SV: ';
$txt['current_icon'] = 'Nuvarande ikon';

$txt['smileys_current'] = 'Nuvarande smiley-upps&auml;ttning';
$txt['smileys_none'] = 'Inga smileys';
$txt['smileys_forum_board_default'] = 'Standard för tavlan/forumet';

$txt['search_results'] = 'S&ouml;kresultat';
$txt['search_no_results'] = 'S&ouml;kningen gav inga resultat';

$txt['totalTimeLogged1'] = 'Inloggad totalt: ';
$txt['totalTimeLogged2'] = ' dagar, ';
$txt['totalTimeLogged3'] = ' timmar och ';
$txt['totalTimeLogged4'] = ' minuter.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'tim ';
$txt['totalTimeLogged7'] = 'min';

$txt['approve_thereis'] = 'Det finns';
$txt['approve_thereare'] = 'Det finns';
$txt['approve_member'] = 'en medlem';
$txt['approve_members'] = 'medlemmar';
$txt['approve_members_waiting'] = 'som v&auml;ntar p&aring; godk&auml;nnande.';

$txt['notifyboard_turnon'] = 'Vill du f&aring; e-post n&auml;r n&aring;gon startar ett nytt &auml;mne p&aring; den h&auml;r tavlan?';
$txt['notifyboard_turnoff'] = '&Auml;r du s&auml;ker p&aring; att du inte l&auml;ngre vill f&aring; underr&auml;ttelser f&ouml;r nya &auml;mnen p&aring; den h&auml;r tavlan?';

$txt['activate_code'] = 'Din aktiveringskod är';

$txt['find_members'] = 'Hitta medlemmar';
$txt['find_username'] = 'Namn, anv&auml;ndarnamn eller e-postadress';
$txt['find_buddies'] = 'Visa endast kompisar?';
$txt['find_wildcards'] = 'Till&aring;tna jokertecken: *, ?';
$txt['find_no_results'] = 'Inga resultat hittades';
$txt['find_results'] = 'Resultat';
$txt['find_close'] = 'St&auml;ng';

$txt['unread_since_visit'] = 'Visa ol&auml;sta inl&auml;gg sen ditt senaste bes&ouml;k.';
$txt['show_unread_replies'] = 'Visa nya svar på dina inl&auml;gg.';

$txt['change_color'] = 'Byt f&auml;rg';

$txt['quickmod_delete_selected'] = 'Radera markerade';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Du har fått ett eller flera nya privata meddelanden.\\nVill du visa dem nu (i ett nytt fönster)?';

$txt['previous_next_back'] = '&laquo; f&ouml;reg&aring;ende';
$txt['previous_next_forward'] = 'n&auml;sta &raquo;';

$txt['movetopic_auto_board'] = '[TAVLA]';
$txt['movetopic_auto_topic'] = '[ÄMNESLÄNK]';
$txt['movetopic_default'] = 'Det h&auml;r &auml;mnet har flyttats till ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Krymp eller ut&ouml;ka forumhuvudet l&auml;ngst upp.';

$txt['mark_unread'] = 'Markera som ol&auml;st';

$txt['ssi_not_direct'] = 'Anropa inte SSI.php direkt genom dess adress, du kan ist&auml;llet anv&auml;nda s&ouml;kv&auml;gen (%s) eller l&auml;gga till ?ssi_function=n&aring;gonting.';
$txt['ssi_session_broken'] = 'SSI.php lyckades inte att ladda sessionen!  Detta kan orsaka problem med utloggning och andra funktioner - se till att SSI.php verkligen l&auml;ggs till f&ouml;re *allting annat* i dina skript!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'F&ouml;rhandsgranska inl&auml;gg';
$txt['preview_fetch'] = 'H&auml;mtar f&ouml;rhandsgranskning...';
$txt['preview_new'] = 'Nytt inl&auml;gg';
$txt['error_while_submitting'] = 'F&ouml;ljande fel intr&auml;ffade under postandet av inl&auml;gget:';

$txt['split_selected_posts'] = 'Valda inl&auml;gg';
$txt['split_selected_posts_desc'] = 'Ovanst&aring;ende inl&auml;gg kommer att bilda ett nytt &auml;mne efter uppdelningen.';
$txt['split_reset_selection'] = 'Nollst&auml;ll val';

$txt['modify_cancel'] = 'Avbryt';
$txt['mark_read_short'] = 'Markera som l&auml;st';

$txt['pm_short'] = 'Mina meddelanden';
$txt['hello_member_ndt'] = 'Hej';

$txt['ajax_in_progress'] = 'Laddar...';

?>