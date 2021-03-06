<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'nl_NL.utf8';
$txt['lang_dictionary'] = 'nl';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag');
$txt['days_short'] = array('zo', 'ma', 'di', 'wo', 'do', 'vr', 'za');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december');
$txt['months_titles'] = array(1 => 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december');
$txt['months_short'] = array(1 => 'jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');

$txt['newmessages0'] = 'is nieuw';
$txt['newmessages1'] = 'zijn nieuw';
$txt['newmessages3'] = 'Nieuw';
$txt['newmessages4'] = ',';

$txt[2] = 'Beheer';

$txt[10] = 'Opslaan';

$txt[17] = 'Verander';
$txt[18] = $context['forum_name'] . ' - Forumindex';
$txt[19] = 'geregistreerde leden';
$txt[20] = 'Forumnaam';
$txt[21] = 'Berichten';
$txt[22] = 'Laatste bericht';

$txt[24] = '(Geen onderwerp)';
$txt[26] = 'Berichten';
$txt[27] = 'Bekijk profiel';
$txt[28] = 'Gast';
$txt[29] = 'Auteur';
$txt[30] = 'Gepost op';
$txt[31] = 'Verwijder';
$txt[33] = 'Begin een nieuw topic';

$txt[34] = 'Inloggen';
// Use numeric entities in the below string.
$txt[35] = 'Gebruikersnaam';
$txt[36] = 'Wachtwoord';

$txt[40] = 'Gebruikersnaam bestaat niet.';

$txt[62] = 'Board-moderator';
$txt[63] = 'Verwijder topic';
$txt[64] = 'topics';
$txt[66] = 'Bewerk bericht';
$txt[68] = 'Naam';
$txt[69] = 'E-mail';
$txt[70] = 'Onderwerp';
$txt[72] = 'Bericht';

$txt[79] = 'Profiel';

$txt[81] = 'Kies wachtwoord';
$txt[82] = 'Wachtwoord nog een keer';
$txt[87] = 'Positie';

$txt[92] = 'Bekijk profiel van';
$txt[94] = 'Totaal';
$txt[95] = 'aantal berichten';
$txt[96] = 'Website';
$txt[97] = 'Registreren';

$txt[101] = 'Berichtenindex';
$txt[102] = 'Nieuws';
$txt[103] = 'Startpagina';

$txt[104] = 'Sluiten/Openen topic';
$txt[105] = 'Verzenden';
$txt[106] = 'Er is een fout opgetreden !';
$txt[107] = 'om';
$txt[108] = 'Uitloggen';
$txt[109] = 'Gestart door';
$txt[110] = 'Reacties';
$txt[111] = 'Laatste bericht';
$txt[114] = 'Administratie Login';
// Use numeric entities in the below string.
$txt[118] = 'Topic';
$txt[119] = 'Help';
$txt[121] = 'Verwijder berichten';
$txt[125] = 'Notificatie';
$txt[126] = 'Wil je een e-mail ontvangen als iemand antwoord geeft op dit topic?';
// Use numeric entities in the below string.
$txt[130] = "Met vriendelijke groet,\n\nHet " . $context['forum_name'] . 'team.';
$txt[131] = 'Notificatie bij reacties';
$txt[132] = 'Verplaats topic';
$txt[133] = 'Verplaats naar';
$txt[139] = 'Pagina\'s';
$txt[140] = 'Gebruikers actief in de laatste ' . $modSettings['lastActive'] . ' minuten';
$txt[144] = 'Persoonlijke berichten';
$txt[145] = 'Antwoord met citaat';
$txt[146] = 'Antwoord';

$txt[151] = 'Geen berichten...';
$txt[152] = 'je hebt';
$txt[153] = 'persoonlijke berichten';
$txt[154] = 'Verwijder dit bericht';

$txt[158] = 'Gebruikers Online';
$txt[159] = 'Priv&eacute; berichten';
$txt[160] = 'Ga naar';
$txt[161] = 'ga';
$txt[162] = 'Weet je zeker dat je dit topic wilt verwijderen?';
$txt[163] = 'Ja';
$txt[164] = 'Nee';

$txt[166] = 'Zoek resultaten';
$txt[167] = 'Einde van de resultaten';
$txt[170] = 'Sorry, geen resultaten gevonden';
$txt[176] = 'op';

$txt[182] = 'Zoek';
$txt[190] = 'Allemaal';

$txt[193] = 'Terug';
$txt[194] = 'Wachtwoord vergeten?';
$txt[195] = 'Topic gestart door';
$txt[196] = 'Titel';
$txt[197] = 'Bericht door';
$txt[200] = 'Doorzoekbare lijst van alle geregistreerde leden.';
$txt[201] = 'Een warm welkom voor';
$txt[208] = 'Beheerscherm';
$txt[211] = 'Laatste verandering';
$txt[212] = 'Wil je de mogelijkheid van antwoord uit zetten in deze topic ?';

$txt[214] = 'Recente berichten';

$txt[227] = 'Locatie';
$txt[231] = 'Geslacht';
$txt[233] = 'Datum van registratie';

$txt[234] = 'Bekijk de meest recente berichten op het forum.';
$txt[235] = 'is een van de meest recente topics';

$txt[238] = 'Man';
$txt[239] = 'Vrouw';

$txt[240] = 'Onjuiste letters/cijfers gebruikt in je gebruikersnaam.';

$txt['welcome_guest'] = 'Welkom, <b>' . $txt[28] . '</b>. Alsjeblieft <a href="' . $scripturl . '?action=login">inloggen</a> of <a href="' . $scripturl . '?action=register">registreren</a>.';
$txt['welcome_guest_activate'] = '<br />De <a href="' . $scripturl . '?action=activate">activerings e-mail</a> gemist?';
$txt['hello_member'] = 'Hoi,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Welkom,';
$txt[247] = 'Hoi,';
$txt[248] = 'Welkom,';
$txt[249] = 'Alsjeblieft';
$txt[250] = 'Terug';
$txt[251] = 'Selecteer een bestemming';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Geplaatst door';

$txt[287] = 'Lachebek';
$txt[288] = 'Boos';
$txt[289] = 'Lachen';
$txt[290] = 'Lach';
$txt[291] = 'Droevig';
$txt[292] = 'Knipoog';
$txt[293] = 'Grijns';
$txt[294] = 'Geschrokken';
$txt[295] = 'Cool';
$txt[296] = 'Verbaasd';
$txt[450] = 'Rollende ogen';
$txt[451] = 'Tong';
$txt[526] = 'Beschaamd';
$txt[527] = 'Lippen verzegeld';
$txt[528] = 'Ik weet het niet';
$txt[529] = 'Kus';
$txt[530] = 'Huilen';

$txt[298] = 'Moderator';
$txt[299] = 'Moderators';

$txt[300] = 'Markeer alle berichten als gelezen';
$txt[301] = 'Gelezen';
$txt[302] = 'Nieuw';

$txt[303] = 'Bekijk alle leden';
$txt[305] = 'Bekijk';
$txt[307] = 'E-mail';

$txt[308] = 'Bekijk de leden';
$txt[309] = 'van de';
$txt[310] = 'totaal aantal leden';
$txt[311] = 'tot';
$txt[315] = 'Wachtwoord vergeten?';

$txt[317] = 'Datum';
// Use numeric entities in the below string.
$txt[318] = 'Van';
$txt[319] = 'Onderwerp';
$txt[322] = 'Controleer op nieuwe berichten';
$txt[324] = 'Naar';

$txt[330] = 'Topics';
$txt[331] = 'Leden';
$txt[332] = 'Ledenlijst';
$txt[333] = 'Nieuw bericht';
$txt[334] = 'Geen nieuw bericht';

$txt['sendtopic_send'] = 'Zenden';

$txt[371] = 'Tijdafwijking';
$txt[377] = 'of';

$txt[398] = 'Sorry, niets relevants is gevonden';

$txt[418] = 'Bericht';

$txt[430] = 'Sorry %s, je bent gebanned voor het gebruik van dit forum!';

$txt[452] = 'Markeer alle berichten als gelezen';

$txt[454] = 'Populair topic (meer dan 15 reacties)';
$txt[455] = 'Zeer populair topic (meer dan 25 reacties)';
$txt[456] = 'Gesloten topic';
$txt[457] = 'Normaal topic';
$txt['participation_caption'] = 'Topic waaraan je hebt deelgenomen';

$txt[462] = 'GA!';

$txt[465] = 'Print';
$txt[467] = 'Profiel';
$txt[468] = 'Samenvatting van topic';
$txt[470] = 'Niet aanwezig';
$txt[471] = 'persoonlijk bericht';
$txt[473] = 'Deze naam is al in gebruik bij een ander lid.';

$txt[488] = 'Totaal aantal leden';
$txt[489] = 'Totaal aantal berichten';
$txt[490] = 'Totaal aantal topics';

$txt[497] = 'Aantal minuten dat je blijft<br />ingelogd';

$txt[507] = 'Bekijken';
$txt[508] = 'Blijf ingelogd';

$txt[511] = 'Gelogd';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'door';

$txt[578] = 'uren';
$txt[579] = 'dagen';

$txt[581] = ', ons nieuwste lid.';

$txt[582] = 'Zoek naar';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hoi.+Ben+je+daar?';
$txt[604] = 'YIM';

$txt[616] = 'Onthoud dat dit forum in de onderhoudsmodus staat!';

$txt[641] = 'gelezen';
$txt[642] = 'keer';

$txt[645] = 'Statistieken';
$txt[656] = 'Nieuwste lid';
$txt[658] = 'Totaal categorie&euml;n';
$txt[659] = 'Laatste bericht';

$txt[660] = 'Je hebt';
$txt[661] = 'klik';
$txt[662] = 'hier';
$txt[663] = 'om ze te bekijken.';

$txt[665] = 'Totaal aantal boards';

$txt[668] = 'Print pagina';

$txt[679] = 'Dit moet een geldig e-mailadres zijn.';

$txt[683] = 'een heleboel';
$txt[685] = $context['forum_name'] . ' - Infocentrum';

$txt[707] = 'E-mail dit topic';

$txt['sendtopic_title'] = 'E-mail dit onderwerp &#171; %s &#187; naar een vriend!';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Beste %s,';
$txt['sendtopic_this_topic'] = 'Dit topic moet je eens lezen: %s, op ' . $context['forum_name'] . '.  Om het te bekijken kun je op de volgende link klikken';
$txt['sendtopic_thanks'] = 'Bedankt';
$txt['sendtopic_sender_name'] = 'Je naam';
$txt['sendtopic_sender_email'] = 'Je e-mailadres';
$txt['sendtopic_receiver_name'] = 'Naam van je vriend';
$txt['sendtopic_receiver_email'] = 'E-mailadres van je vriend';
$txt['sendtopic_comment'] = 'Voeg een opmerking toe';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Er is een opmerking over dit topic toegevoegd';

$txt[721] = 'E-mail verbergen voor anderen?';

$txt[737] = 'Vink alles aan';

// Use numeric entities in the below string.
$txt[1001] = 'Databasefout';
$txt[1002] = 'Probeer het opnieuw, gaat het weer fout, meld het dan aan de admin.';
$txt[1003] = 'Bestand';
$txt[1004] = 'Regel';
// Use numeric entities in the below string.
$txt[1005] = 'SMF heeft een fout in je database gedetecteerd en automatisch geprobeerd deze te repareren. Als de problemen blijven bestaan of als je voortdurend deze e-mails krijgt, neem contact op met je provider.';
$txt['database_error_versions'] = '<b>Let op:</b> Het ziet er naar uit dat je database geupgrade zou moeten worden. De versie van je forumbestanden is momenteel ' . $forum_version . ', terwijl je database op dit moment nog staat op versie SMF ' . $modSettings['smfVersion'] . '. Het is aan te bevelen om de laatste versie van upgrade.php uit te voeren.';
$txt['template_parse_error'] = 'Template-verwerkingsfout!';
$txt['template_parse_error_message'] = 'Het lijkt erop dat er iets verkeerd gegaan is op het forum met het template systeem. Dit probleeem zou alleen tijdelijk moeten zijn, kom later terug en probeer het opnieuw. Als je dit probleem blijft krijgen, neem dan contact op met de administrator.<br /><br />Je kunt ook proberen om <a href="javascript:location.reload();">deze pagina te verversen</a>.';
$txt['template_parse_error_details'] = 'Er is een probleem ontstaan bij het laden van het template- of taalbestand <tt><b>%1$s</b></tt>. Controleer de syntaxis hiervan en probeer het opnieuw. Vergeet niet dat apostrofs (<tt>\'</tt>) vaak nog eens afgebroken moeten worden (<tt>\\\'</tt>). Om meer specifieke foutinformatie van PHP te verkrijgen, kun je <a href="' . $boardurl . '%1$s">het bestand direct benaderen</a>.<br /><br />Je wilt wellicht <a href="javascript:location.reload();">deze pagina vernieuwen</a> of <a href="' . $scripturl . '?theme=1">het standaardthema gebruiken</a>.';

$txt['smf10'] = '<b>Vandaag</b> om ';
$txt['smf10b'] = '<b>Gisteren</b> om ';
$txt['smf20'] = 'Nieuwe poll';
$txt['smf21'] = 'Vraag';
$txt['smf23'] = 'Stem';
$txt['smf24'] = 'Totaal aantal stemmen';
$txt['smf25'] = 'sneltoetsen: gebruik alt+s om te verzenden/posten, of alt+p om te bekijken';
$txt['smf29'] = 'Bekijk de resultaten';
$txt['smf30'] = 'Vergrendel de poll';
$txt['smf30b'] = 'Ontgrendel de poll';
$txt['smf39'] = 'Bewerk de poll';
$txt['smf43'] = 'Poll';
$txt['smf47'] = '1 dag';
$txt['smf48'] = '1 week';
$txt['smf49'] = '1 maand';
$txt['smf50'] = 'blijvend';
$txt['smf52'] = 'Login met gebruikersnaam, wachtwoord en sessielengte';
$txt['smf53'] = '1 uur';
$txt['smf56'] = 'VERPLAATST';
$txt['smf57'] = 'Geef even een korte beschrijving waarom<br />dit topic wordt verplaatst.';
$txt['smf60'] = 'Sorry, je hebt nog niet voldoende berichten gepost om Karma te kunnen bewerken - je hebt tenminste ';
$txt['smf62'] = 'Sorry, je kunt deze actie niet zo snel achter elkaar uitvoeren.  Je zult even moeten wachten ';
$txt['smf82'] = 'Board';
$txt['smf88'] = 'in';
$txt['smf96'] = 'Sticky Topic';

$txt['smf138'] = 'Verwijder';

$txt['smf199'] = 'Je persoonlijke berichten';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Meer statistieken]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Code';
$txt['smf239'] = 'Citaat van';
$txt['smf240'] = 'Citaat';

$txt['smf251'] = 'Splits topic';
$txt['smf252'] = 'Voeg topic samen';
$txt['smf254'] = 'Titel van het nieuwe topic';
$txt['smf255'] = 'Splits alleen dit bericht';
$txt['smf256'] = 'Splits topic vanaf dit bericht.';
$txt['smf257'] = 'Selecteer berichten om te splitsen.';
$txt['smf258'] = 'Nieuw topic';
$txt['smf259'] = 'Onderwerp succesvol gesplitst in twee topics.';
$txt['smf260'] = 'Oorspronkelijke topic';
$txt['smf261'] = 'Selecteer welke berichten je wilt afsplitsen.';
$txt['smf264'] = 'Topics succesvol samengevoegd.';
$txt['smf265'] = 'Nieuw samengevoegd topic';
$txt['smf266'] = 'Topic dat moet worden samengevoegd';
$txt['smf267'] = 'Doelboard';
$txt['smf269'] = 'Doeltopic ';
$txt['smf274'] = 'Weet je zeker dat je de twee topics wilt samenvoegen?';
$txt['smf275'] = 'met';
$txt['smf276'] = 'Deze optie zal de twee topics samenvoegen. De berichten zullen worden gesorteerd op datum, dus het eerst geplaatste bericht zal bovenaan komen te staan.';

$txt['smf277'] = 'Maak topic sticky';
$txt['smf278'] = 'Maak topic niet-sticky';
$txt['smf279'] = 'Sluit topic';
$txt['smf280'] = 'Slot verwijderen';

$txt['smf298'] = 'Geavanceerd zoeken';

$txt['smf299'] = 'GROOT BEVEILIGINGSRISICO:';
$txt['smf300'] = 'Je hebt het volgende bestand niet verwijderd: ';

$txt['smf301'] = 'Pagina opgebouwd in ';
$txt['smf302'] = ' seconden met ';
$txt['smf302b'] = ' queries.';

$txt['smf315'] = 'Gebruik deze functie om de moderators en administrators op de hoogte te stellen van berichten die verkeerd geplaatst zijn of in overtreding zijn met de regels van het forum.<br /><i>Houd er rekening mee dat je e-mailadres zal worden getoond aan de moderators bij het gebruik van deze functie.</i>';

$txt['online2'] = 'Online';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Persoonlijk bericht (Online)';
$txt['online5'] = 'Persoonlijk bericht (Offline)';
$txt['online8'] = 'Status';

$txt['topbottom4'] = 'Omhoog';
$txt['topbottom5'] = 'Omlaag';

$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> | <a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';

$txt['calendar3'] = 'Verjaardagen:';
$txt['calendar4'] = 'Gebeurtenissen:';
$txt['calendar3b'] = 'Aankomende verjaardagen:';
$txt['calendar4b'] = 'Aankomende evenementen:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Maand:';
$txt['calendar10'] = 'Jaar:';
$txt['calendar11'] = 'Dag:';
$txt['calendar12'] = 'Titel:';
$txt['calendar13'] = 'Post in:';
$txt['calendar20'] = 'Bewerk deze gebeurtenis';
$txt['calendar21'] = 'Deze gebeurtenis verwijderen?';
$txt['calendar22'] = 'Verwijder deze gebeurtenis';
$txt['calendar23'] = 'Post gebeurtenis';
$txt['calendar24'] = 'Kalender';
$txt['calendar37'] = 'Link aan de kalender';
$txt['calendar43'] = 'Link gebeurtenis';
$txt['calendar47'] = 'Aankomende kalender';
$txt['calendar47b'] = 'Kalender van vandaag';
$txt['calendar51'] = 'Week';
$txt['calendar54'] = 'Aantal dagen:';
$txt['calendar_how_edit'] = 'Hoe bewerk je deze gebeurtenissen?';
$txt['calendar_link_event'] = 'Koppel gebeurtenis aan bericht:';
$txt['calendar_confirm_delete'] = 'Weet je zeker dat je deze gebeurtenis wilt verwijderen?';
$txt['calendar_linked_events'] = 'Gekoppelde gebeurtenissen';

$txt['moveTopic1'] = 'Plaats een verwijstopic';
$txt['moveTopic2'] = 'Wijzig het onderwerp van dit bericht';
$txt['moveTopic3'] = 'Nieuwe onderwerp';
$txt['moveTopic4'] = 'Verander het onderwerp van elk bericht';

$txt['theme_template_error'] = 'Kan template \'%s\' niet laden.';
$txt['theme_language_error'] = 'Kan taalbestand \'%s\' niet laden.';

$txt['parent_boards'] = 'Sub-boards';

$txt['smtp_no_connect'] = 'Kan geen verbinding krijgen met de SMTP host';
$txt['smtp_port_ssl'] = 'SMTP-poortinstelling onjuist; het zou 465 moeten zijn voor SSL-servers.';
$txt['smtp_bad_response'] = 'Kan geen responsie codes van de mail server krijgen';
$txt['smtp_error'] = 'Problemen opgetreden gedurende het verzenden van mail. Foutmelding: ';
$txt['mail_send_unable'] = 'Kon mail niet verzenden naar e-mailadres \'%s\'';

$txt['mlist_search'] = 'Zoek naar leden';
$txt['mlist_search2'] = 'Herhaal zoekopdracht';
$txt['mlist_search_email'] = 'Zoek op e-mailadres';
$txt['mlist_search_messenger'] = 'Zoek op MSN Messengeradres';
$txt['mlist_search_group'] = 'Zoek op ledengroep';
$txt['mlist_search_name'] = 'Zoek op naam';
$txt['mlist_search_website'] = 'Zoek op website';
$txt['mlist_search_results'] = 'Zoekresultaten voor';

$txt['attach_downloaded'] = 'gedownload';
$txt['attach_viewed'] = 'bekeken';
$txt['attach_times'] = 'keer';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Instellingen';
$txt['never'] = 'Nooit';
$txt['more'] = 'meer';

$txt['hostname'] = 'Hostnaam';
$txt['you_are_post_banned'] = 'Sorry %s, je bent geband van het plaatsen van berichten of het versturen van Persoonlijke Bericthen op dit forum.';
$txt['ban_reason'] = 'Reden';

$txt['tables_optimized'] = 'Databasetabellen geoptimaliseerd';

$txt['add_poll'] = 'Voeg poll toe';
$txt['poll_options6'] = 'Je kunt slechts %s opties selecteren.';
$txt['poll_remove'] = 'Verwijder poll';
$txt['poll_remove_warn'] = 'Weet je zeker dat je deze poll van dit topic wilt verwijderen?';
$txt['poll_results_expire'] = 'Resultaten zullen worden getoond als de poll is gesloten';
$txt['poll_expires_on'] = 'Poll sluit';
$txt['poll_expired_on'] = 'Poll gesloten';
$txt['poll_change_vote'] = 'Verwijder stem';
$txt['poll_return_vote'] = 'Stemopties';

$txt['quick_mod_remove'] = 'Verwijder selectie';
$txt['quick_mod_lock'] = 'Sluit selectie';
$txt['quick_mod_sticky'] = 'Maak selectie sticky';
$txt['quick_mod_move'] = 'Verplaats selectie naar';
$txt['quick_mod_merge'] = 'Voeg selectie samen';
$txt['quick_mod_markread'] = 'Markeer selectie als gelezen';
$txt['quick_mod_go'] = 'Voer uit!';
$txt['quickmod_confirm'] = 'Weet je zeker dat je dit wilt doen?';

$txt['spell_check'] = 'Spellingscontrole';

$txt['quick_reply_1'] = 'Snel beantwoorden';
$txt['quick_reply_2'] = 'Met <i>Snel beantwoorden</i> kun je bulletin board code en smileys gebruiken zoals je dat zou doen in een normaal bericht, maar dan eenvoudiger.';
$txt['quick_reply_warning'] = '<b>Waarschuwing</b>: topic is op dit moment gesloten! Alleen moderators en administrators kunnen reageren.';

$txt['notification_enable_board'] = 'Weet je zeker dat je notificatie van nieuwe topics voor dit board wilt activeren?';
$txt['notification_disable_board'] = 'Weet je zeker dat je notificatie van nieuwe topics voor dit board wilt deactiveren?';
$txt['notification_enable_topic'] = 'Weet je zeker dat je notificatie van nieuwe berichten voor dit topic wilt activeren?';
$txt['notification_disable_topic'] = 'Weet je zeker dat je notificatie van nieuwe berichten voor dit topic wilt deactiveren?';

$txt['rtm1'] = 'Meld dit bericht aan de moderator';

$txt['unread_topics_visit'] = 'Recente ongelezen topics';
$txt['unread_topics_visit_none'] = 'Geen ongelezen topics gevonden sinds je laatste bezoek <a href="' . $scripturl . '?action=unread;all">Klik hier om alle ongelezen berichten te tonen</a>.';
$txt['unread_topics_all'] = 'Alle ongelezen berichten';
$txt['unread_replies'] = 'Ongelezen berichten';

$txt['who_title'] = 'Wie is online?';
$txt['who_and'] = ' en ';
$txt['who_viewing_topic'] = ' bekijken dit topic.';
$txt['who_viewing_board'] = ' bekijken dit board.';
$txt['who_member'] = 'Lid';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'Valid CSS!';

$txt['guest'] = 'gast';
$txt['guests'] = 'gasten';
$txt['user'] = 'lid';
$txt['users'] = 'leden';
$txt['hidden'] = 'verborgen';
$txt['buddy'] = 'vriend';
$txt['buddies'] = 'vrienden';
$txt['most_online_ever'] = 'Meeste online ooit';
$txt['most_online_today'] = 'Meeste online vandaag';

$txt['merge_select_target_board'] = 'Selecteer het doel-board waar het samen te voegen topic terecht komt';
$txt['merge_select_poll'] = 'Selecteer welke poll het samengevoegde topic moet krijgen';
$txt['merge_topic_list'] = 'Selecteer de samen te voegen topics';
$txt['merge_select_subject'] = 'Selecteer het onderwerp van het samengevoegde topic';
$txt['merge_custom_subject'] = 'Aangepast onderwerp';
$txt['merge_enforce_subject'] = 'Verander het onderwerp van alle berichten';
$txt['merge_include_notifications'] = 'neem notificatie mee?';
$txt['merge_check'] = 'Samenvoegen?';
$txt['merge_no_poll'] = 'Geen poll';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Huidige icoon';

$txt['smileys_current'] = 'Huidige smileyset';
$txt['smileys_none'] = 'Geen smileys';
$txt['smileys_forum_board_default'] = 'Forum- of boardstandaard';

$txt['search_results'] = 'Zoekresultaten';
$txt['search_no_results'] = 'Geen resultaten gevonden.';

$txt['totalTimeLogged1'] = 'Totale tijd ingelogd: ';
$txt['totalTimeLogged2'] = ' dagen, ';
$txt['totalTimeLogged3'] = ' uren en ';
$txt['totalTimeLogged4'] = ' minuten.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'u ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Er is';
$txt['approve_thereare'] = 'Er zijn';
$txt['approve_member'] = 'een lid';
$txt['approve_members'] = 'leden';
$txt['approve_members_waiting'] = 'in de wachtrij.';

$txt['notifyboard_turnon'] = 'Wil je een notificatie per e-mail ontvangen wanneer iemand een nieuw topic wordt gestart in dit board?';
$txt['notifyboard_turnoff'] = 'Weet je zeker dat je geen notificatie-e-mails meer wilt ontvangen bij het starten van nieuwe topics in dit board?';

$txt['activate_code'] = 'Je activeringscode is';

$txt['find_members'] = 'Zoek leden';
$txt['find_username'] = 'Naam, gebruikersnaam, of e-mailadres';
$txt['find_buddies'] = 'Toon alleen vrienden?';
$txt['find_wildcards'] = 'Toegestane jokertekens: *, ?';
$txt['find_no_results'] = 'Geen resultaten gevonden';
$txt['find_results'] = 'Resultaten';
$txt['find_close'] = 'Sluiten';

$txt['unread_since_visit'] = 'Toon ongelezen berichten sinds je laatste bezoek.';
$txt['show_unread_replies'] = 'Toon nieuwe reacties op jouw berichten.';

$txt['change_color'] = 'Pas de kleur aan';

$txt['quickmod_delete_selected'] = 'Verwijder selectie';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Je hebt één of meerdere nieuwe berichten.\\nWil je ze nu bekijken (in een nieuw venster)?';

$txt['previous_next_back'] = '&laquo; vorige';
$txt['previous_next_forward'] = 'volgende &raquo;';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'Dit topic is verplaatst naar ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Klap de kop in of uit.';

$txt['mark_unread'] = 'Markeer als ongelezen';

$txt['ssi_not_direct'] = 'Het is niet mogelijk om SSI.php direct per URL te benaderen; Gebruik het pad (%s) of voeg ?ssi_function=something toe.';
$txt['ssi_session_broken'] = 'SSI.php kon geen sessie laden! Dit zou tot problemen kunnen leiden bij het uitloggen en andere functies - zorg ervoor dat SSI.php ingevoegd staat voor ook maar *iets* anders in je scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Bekijk bericht';
$txt['preview_fetch'] = 'Haalt concept op...';
$txt['preview_new'] = 'Nieuw bericht';
$txt['error_while_submitting'] = 'Er is een fout opgetreden bij het versturen van dit bericht.';

$txt['split_selected_posts'] = 'Geselecteerde berichten';
$txt['split_selected_posts_desc'] = 'De berichten hieronder worden na het splitsen een nieuw topic.';
$txt['split_reset_selection'] = 'deselecteer alles';

$txt['modify_cancel'] = 'Annuleren';
$txt['mark_read_short'] = 'Markeer gelezen';

$txt['pm_short'] = 'Mijn berichten';
$txt['hello_member_ndt'] = 'Hallo';

$txt['ajax_in_progress'] = 'Laden...';

?>