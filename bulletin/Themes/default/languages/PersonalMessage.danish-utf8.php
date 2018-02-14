<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Personligt besked oversigt';
$txt[148] = 'Send besked';
$txt[150] = 'Til';
$txt[1502] = 'Bcc';
$txt[316] = 'Indbakke';
$txt[320] = 'Udbakke';
$txt[321] = 'Opret ny besked';
$txt[411] = 'Slet beskeder';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Slet alle beskeder i din PMBOX';
$txt[413] = 'Er du sikker på at du vil slette alle beskeder?';
$txt[535] = 'Modtager';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Ny personlig besked: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Du er blevet sendt en personlig besked af SENDER på ' . $context['forum_name'] . '.' . "\n\n" . 'VIGTIGT: Husk, at dette er kun en påmindelse. Svar venligst ikke på denne email.' . "\n\n" . 'Beskeden sendt til dig er:' . "\n\n" . 'MESSAGE';
$txt[748] = '(Flere modtagere: \'navn1, navn2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Svar på denne personlige besked her:';

$txt['smf249'] = 'Er du sikker at du vil slette alle valgte personlige beskeder?';

$txt['sent_to'] = 'Sendt til';
$txt['reply_to_all'] = 'Svar til alle';

$txt['pm_capacity'] = 'Kapacitet';
$txt['pm_currently_using'] = '%s beskeder, %s%% fuld.';

$txt['pm_error_user_not_found'] = 'Kan ikke finde medlem \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Brugeren \'%s\' har blokkeret dine personlige beskeder.';
$txt['pm_error_data_limit_reached'] = 'PM kunne ikke sendes til \'%s\' pga. max. PM begrænsing.';
$txt['pm_successfully_sent'] = 'PM successfuldt sendt til \'%s\'.';
$txt['pm_too_many_recipients'] = 'Du kan ikke sende personlige beskeder til mere end %d modtagere på en gang.';
$txt['pm_too_many_per_hour'] = 'Du har overskredet grænsen på %d personlige beskeder per time.';
$txt['pm_send_report'] = 'Send rapport';
$txt['pm_save_outbox'] = 'Gem en kopi i min udbakke';
$txt['pm_undisclosed_recipients'] = 'Tilbageværende modtagere';

$txt['pm_read'] = 'Læs';
$txt['pm_replied'] = 'Besvaret til';

// Message Pruning.
$txt['pm_prune'] = 'Ryd op i beskeder';
$txt['pm_prune_desc1'] = 'Slet alle personlige beskeder ældre end';
$txt['pm_prune_desc2'] = 'dage.';
$txt['pm_prune_warning'] = 'Er du sikker på du vil rydde op i personlige beskeder?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Andre handlinger';
$txt['pm_actions_delete_selected'] = 'Slet markérede';
$txt['pm_actions_filter_by_label'] = 'Sortér efter overskrift';
$txt['pm_actions_go'] = 'Gå';

// Manage Labels Screen.
$txt['pm_apply'] = 'Udfør';
$txt['pm_manage_labels'] = 'Styr labels';
$txt['pm_labels_delete'] = 'Er du sikker på du vil slette de valgte labels?';
$txt['pm_labels_desc'] = 'Her kan du tilføje, redigere og slette de labels du bruger i dit personlige beskedcenter.';
$txt['pm_label_add_new'] = 'Tilføj ny label';
$txt['pm_label_name'] = 'Label navn';
$txt['pm_labels_no_exist'] = 'Du har i øjeblikket ikke opsat nogen labels!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Mærkat';
$txt['pm_msg_label_title'] = 'Label besked';
$txt['pm_msg_label_apply'] = 'Tilføj label';
$txt['pm_msg_label_remove'] = 'Fjern Label';
$txt['pm_msg_label_inbox'] = 'Indbakke';
$txt['pm_sel_label_title'] = 'Label valgt';
$txt['labels_too_many'] = 'Desværre, %s beskeder har allerede det maksimale antal labels tilladt!';

// Sidebar Headings.
$txt['pm_labels'] = 'Mærkater';
$txt['pm_messages'] = 'Beskeder';
$txt['pm_preferences'] = 'Indstillinger';

$txt['pm_is_replied_to'] = 'Du har videresendt eller svaret på denne besked.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Anmeld til administrator';
$txt['pm_report_title'] = 'Anmeld personlig besked';
$txt['pm_report_desc'] = 'Her kan du anmelde de personlige beskeder du modtager til en administrator i forummet. Du skal skrive en beskrivelse på hvorfor du anmelder beskeden, da dette vil blive sendt sammen med indholdet af den originale besked.';
$txt['pm_report_admins'] = 'Administrator anmeldelsen sendes til';
$txt['pm_report_all_admins'] = 'Send til alle forum administratorer';
$txt['pm_report_reason'] = 'Grunden til du anmelder denne besked';
$txt['pm_report_message'] = 'Anmeld beskeden';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} har anmeldt den personlige besked herunder, sent af {SENDER}, af følgende grund:';
$txt['pm_report_pm_other_recipients'] = 'Andre modtagere af beskeden inkluderer:';
$txt['pm_report_pm_hidden'] = '%d skjulte modtagere';
$txt['pm_report_pm_unedited_below'] = 'Herunder er det originale indhold af beskeden der blev anmeldt:';
$txt['pm_report_pm_sent'] = 'Sendt:';

$txt['pm_report_done'] = 'Tak fordi du du sendte denne anmeldelse. Du vil snarest høre fra teamet af administratorer';
$txt['pm_report_return'] = 'Tilbage til Indbakke';

$txt['pm_search_title'] = 'Søg i personlige beskeder';
$txt['pm_search_bar_title'] = 'Søg i personlige beskeder';
$txt['pm_search_text'] = 'Søg efter';
$txt['pm_search_go'] = 'Søg';
$txt['pm_search_advanced'] = 'Avanceret søgning';
$txt['pm_search_user'] = 'efter bruger';
$txt['pm_search_match_all'] = 'Match alle ord';
$txt['pm_search_match_any'] = 'Match enkelte ord';
$txt['pm_search_options'] = 'Indstillinger';
$txt['pm_search_post_age'] = 'Alder';
$txt['pm_search_show_complete'] = 'Vis fulde beskeder i søgeresultatet.';
$txt['pm_search_subject_only'] = 'Søg kun efter emne og afsender.';
$txt['pm_search_between'] = 'Mellem';
$txt['pm_search_between_and'] = 'og';
$txt['pm_search_between_days'] = 'dage';
$txt['pm_search_order'] = 'Sortér resultater efter';
$txt['pm_search_choose_label'] = 'Vælg hvilke labels der skal søges efter, eller søg alle';

$txt['pm_search_results'] = 'Søgeresultat';
$txt['pm_search_none_found'] = 'Ingen beskeder blev fundet';

$txt['pm_search_orderby_relevant_first'] = 'Mest relevante først';
$txt['pm_search_orderby_recent_first'] = 'Nyeste først';
$txt['pm_search_orderby_old_first'] = 'Ældste først';

$txt['pm_visual_verification_label'] = 'Verifikation';
$txt['pm_visual_verification_desc'] = 'Skriv venligst teksten i billedet herover, for at sende denne personlige besked.';
$txt['pm_visual_verification_listen'] = 'Få oplæst bogstaverne';

?>