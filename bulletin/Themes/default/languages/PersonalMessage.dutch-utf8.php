<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Persoonlijke berichten index';
$txt[148] = 'Verzend bericht';
$txt[150] = 'Aan';
$txt[1502] = 'Bcc';
$txt[316] = 'Postvak in';
$txt[320] = 'Postvak uit';
$txt[321] = 'Nieuw bericht';
$txt[411] = 'Verwijder berichten';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Verwijder alle berichten in je inbox of uitbox';
$txt[413] = 'Weet je zeker dat je alle berichten wil verwijderen?';
$txt[535] = 'Ontvanger';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Nieuw persoonlijk bericht: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Je hebt zojuist een persoonlijk bericht ontvangen van SENDER op ' . $context['forum_name'] . '.' . "\n\n" . 'BELANGRIJK: Onthoud dat dit alleen maar een notificatie is. Reageer niet op deze e-mail.' . "\n\n" . 'Het bericht wat je werd gestuurd was:' . "\n\n" . 'MESSAGE';
$txt[748] = '(meerdere geadresseerden als \'naam1, naam2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Beantwoord dit persoonlijk bericht hier:';

$txt['smf249'] = 'Weet je zeker dat je alle geselecteerde berichten wilt verwijderen?';

$txt['sent_to'] = 'Verzonden aan';
$txt['reply_to_all'] = 'Reageer op allen';

$txt['pm_capacity'] = 'Capaciteit';
$txt['pm_currently_using'] = '%s berichten, %s%% vol.';

$txt['pm_error_user_not_found'] = 'Kan gebruiker \'%s\' niet vinden.';
$txt['pm_error_ignored_by_user'] = 'Gebruiker \'%s\' heeft je PM geblokkeerd.';
$txt['pm_error_data_limit_reached'] = 'PM kon niet verstuurd worden aan \'%s\' vanwege het overschrijden van de PM limiet.';
$txt['pm_successfully_sent'] = 'PM succesvol verstuurd aan \'%s\'.';
$txt['pm_too_many_recipients'] = 'Het is niet toegestaan persoonlijke berichten te versturen naar %d ontvangers tegelijk.';
$txt['pm_too_many_per_hour'] = 'Je hebt dit uur reeds het maximaal aantal berichten verstuurd.';
$txt['pm_send_report'] = 'Verzendrapport';
$txt['pm_save_outbox'] = 'Bewaar een kopie in mijn postvak uit';
$txt['pm_undisclosed_recipients'] = 'Niet-getoonde ontvangers';

$txt['pm_read'] = 'Gelezen';
$txt['pm_replied'] = 'Geantwoord aan';

// Message Pruning.
$txt['pm_prune'] = 'Opschonen berichten';
$txt['pm_prune_desc1'] = 'Verwijder alle persoonlijke berichten ouder dan';
$txt['pm_prune_desc2'] = 'dagen.';
$txt['pm_prune_warning'] = 'Weet je zeker dat je je persoonlijke berichten wilt opschonen?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Extra acties';
$txt['pm_actions_delete_selected'] = 'Verwijder selectie';
$txt['pm_actions_filter_by_label'] = 'Filter op basis van labels';
$txt['pm_actions_go'] = 'Voer uit';

// Manage Labels Screen.
$txt['pm_apply'] = 'Pas toe';
$txt['pm_manage_labels'] = 'Beheer labels';
$txt['pm_labels_delete'] = 'Weet je zeker dat je de geselecteerde labels wilt verwijderen?';
$txt['pm_labels_desc'] = 'Hier kun je labels toevoegen, bewerken of verwijderen die gebruikt worden in je persoonlijke berichten centrum.';
$txt['pm_label_add_new'] = 'Voeg nieuw label toe';
$txt['pm_label_name'] = 'Labelnaam';
$txt['pm_labels_no_exist'] = 'Je hebt op dit moment geen labels ingesteld!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Label';
$txt['pm_msg_label_title'] = 'Labels';
$txt['pm_msg_label_apply'] = 'Voeg label toe';
$txt['pm_msg_label_remove'] = 'Verwijder label';
$txt['pm_msg_label_inbox'] = 'Inbox';
$txt['pm_sel_label_title'] = 'Geselecteerde label';
$txt['labels_too_many'] = 'Sorry, %s berichten hadden reeds het maximaal aantal toegestane labels!';

// Sidebar Headings.
$txt['pm_labels'] = 'Labels';
$txt['pm_messages'] = 'Berichten';
$txt['pm_preferences'] = 'Voorkeuren';

$txt['pm_is_replied_to'] = 'Je hebt dit bericht doorgestuurd of beantwoord.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Rapporteer aan de beheerder';
$txt['pm_report_title'] = 'Rapporteer dit bericht';
$txt['pm_report_desc'] = 'Vanuit deze pagina kun je het persoonlijke bericht dat je hebt gekregen rapporteren aan het beheerteam. Ben er zeker van een beschrijving bij te voegen waarin je uitlegt waarom je het bericht rapporteerd, omdat dit meeverzonden wordt bij het originele bericht.';
$txt['pm_report_admins'] = 'Verstuur naar de beheerder';
$txt['pm_report_all_admins'] = 'Verstuur naar alle beheerders';
$txt['pm_report_reason'] = 'Reden waarom je dit bericht rapporteert';
$txt['pm_report_message'] = 'Rapporteer bericht';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[MELDING]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} heeft onderstaand bericht, verzonden door {SENDER} gerapporteerd, met de volgende reden:';
$txt['pm_report_pm_other_recipients'] = 'Andere ontvangers van dit bericht waren:';
$txt['pm_report_pm_hidden'] = '%d verborgen ontvanger(s)';
$txt['pm_report_pm_unedited_below'] = 'Hieronder staat de originele inhoud van het bericht dat gerapporteerd werd:';
$txt['pm_report_pm_sent'] = 'Verzonden op:';

$txt['pm_report_done'] = 'Bedankt voor het rapporteren van dit bericht. Je zult spoedig een reactie van het beheerteam krijgen.';
$txt['pm_report_return'] = 'Terug naar je postvak in';

$txt['pm_search_title'] = 'Zoeken naar Persoonlijke Berichten';
$txt['pm_search_bar_title'] = 'Zoek berichten';
$txt['pm_search_text'] = 'Zoek naar';
$txt['pm_search_go'] = 'Zoeken';
$txt['pm_search_advanced'] = 'Geavanceerd zoeken';
$txt['pm_search_user'] = 'per gebruiker';
$txt['pm_search_match_all'] = 'Zoek naar alle woorden';
$txt['pm_search_match_any'] = 'Zoek naar enkele woorden';
$txt['pm_search_options'] = 'Opties';
$txt['pm_search_post_age'] = 'Leeftijd';
$txt['pm_search_show_complete'] = 'Toon het volledige bericht in de resultaten.';
$txt['pm_search_subject_only'] = 'Zoek alleen naar onderwerp en auteur.';
$txt['pm_search_between'] = 'Tussen';
$txt['pm_search_between_and'] = 'en';
$txt['pm_search_between_days'] = 'dagen';
$txt['pm_search_order'] = 'Resultaten ordenen op';
$txt['pm_search_choose_label'] = 'Kies de labels waarbinnen gezocht moet worden, of selecteer alles';

$txt['pm_search_results'] = 'Zoekresultaten';
$txt['pm_search_none_found'] = 'Geen berichten gevonden';

$txt['pm_search_orderby_relevant_first'] = 'Meest relevante eerst';
$txt['pm_search_orderby_recent_first'] = 'Meest recente eerst';
$txt['pm_search_orderby_old_first'] = 'Oudste eerst';

$txt['pm_visual_verification_label'] = 'Verificatie';
$txt['pm_visual_verification_desc'] = 'Voer de code uit de bovenstaande afbeelding in om deze PM te versturen.';
$txt['pm_visual_verification_listen'] = 'Luister naar de letters';

?>