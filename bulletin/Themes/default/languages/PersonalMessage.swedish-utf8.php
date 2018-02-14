<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Index f&ouml;r privata meddelanden';
$txt[148] = 'Skicka meddelande';
$txt[150] = 'Till';
$txt[1502] = 'Blindkopia';
$txt[316] = 'Inkorg';
$txt[320] = 'Utkorg';
$txt[321] = 'Nytt meddelande';
$txt[411] = 'Radera meddelanden';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Radera alla meddelanden i din PMBOX';
$txt[413] = '&Auml;r du s&auml;ker p&aring; att du vill radera samtliga meddelanden?';
$txt[535] = 'Mottagare';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Nytt privat meddelande: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Du har just fått ett privat meddelande från SENDER på ' . $context['forum_name'] . '.' . "\n\n" . 'OBS! Kom ihåg att detta bara är en underrättelse - svara inte på detta e-post-meddelande.' . "\n\n" . 'Meddelandet han/hon skickade var:' . "\n\n" . 'MESSAGE';
$txt[748] = '(flera mottagare i formen: \'namn1, namn2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Svara på detta privata meddelande här:';

$txt['smf249'] = '&Auml;r du s&auml;ker p&aring; att du vill radera alla markerade meddelanden?';

$txt['sent_to'] = 'Skickat till';
$txt['reply_to_all'] = 'Svara till alla';

$txt['pm_capacity'] = 'Lagringsgr&auml;ns';
$txt['pm_currently_using'] = '%s meddelanden, %s%% full.';

$txt['pm_error_user_not_found'] = 'Kunde inte hitta anv&auml;ndaren \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Anv&auml;ndaren \'%s\' har blockerat ditt meddelande.';
$txt['pm_error_data_limit_reached'] = 'Det privata meddelandet kunde inte skickas till \'%s\', d&aring; dennes inkorg &auml;r full.';
$txt['pm_successfully_sent'] = 'Meddelandet har skickats till \'%s\' utan problem.';
$txt['pm_too_many_recipients'] = 'Du kan inte skicka privata meddelanden till fler &auml;n %d personer per tillf&auml;lle.';
$txt['pm_too_many_per_hour'] = 'Du har överskridit gränsen på  %d personliga meddelanden per timme.';
$txt['pm_send_report'] = 'Skicka anm&auml;lan';
$txt['pm_save_outbox'] = 'Spara en kopia i min utkorg';
$txt['pm_undisclosed_recipients'] = 'Anonyma mottagare';

$txt['pm_read'] = 'L&auml;s';
$txt['pm_replied'] = 'Svarade till';

// Message Pruning.
$txt['pm_prune'] = 'Radera meddelanden';
$txt['pm_prune_desc1'] = 'Radera alla privata meddelanden &auml;ldre &auml;n';
$txt['pm_prune_desc2'] = 'dagar.';
$txt['pm_prune_warning'] = 'Är du s&auml;ker p&aring; att du vill ta bort dina privata meddelanden?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Ytterligare &aring;tg&auml;rder';
$txt['pm_actions_delete_selected'] = 'Radera markerade';
$txt['pm_actions_filter_by_label'] = 'Filtrera genom etiketter';
$txt['pm_actions_go'] = 'OK';

// Manage Labels Screen.
$txt['pm_apply'] = 'Verkst&auml;ll';
$txt['pm_manage_labels'] = 'Hantera etiketter';
$txt['pm_labels_delete'] = 'Är du s&auml;ker p&aring; att du vill radera markerade etiketter?';
$txt['pm_labels_desc'] = 'H&auml;rifr&aring;n kan du l&auml;gga till, redigera och ta bort etiketter som anv&auml;nds i centret f&ouml;r privata meddelanden.';
$txt['pm_label_add_new'] = 'L&auml;gg till ny etikett';
$txt['pm_label_name'] = 'Namn p&aring; etikett';
$txt['pm_labels_no_exist'] = 'F&ouml;r n&auml;rvarande har du inga etiketter lagrade!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etikett';
$txt['pm_msg_label_title'] = 'Etikettera meddelande';
$txt['pm_msg_label_apply'] = 'L&auml;gg till etikett';
$txt['pm_msg_label_remove'] = 'Ta bort etikett';
$txt['pm_msg_label_inbox'] = 'Inkorg';
$txt['pm_sel_label_title'] = 'Etikett markerad';
$txt['labels_too_many'] = 'Beklagar, %s meddelanden hade redan max antal till&aring;tna etiketter!';

// Sidebar Headings.
$txt['pm_labels'] = 'Etiketter';
$txt['pm_messages'] = 'Meddelanden';
$txt['pm_preferences'] = 'Personliga inst&auml;llningar';

$txt['pm_is_replied_to'] = 'Du har vidarebefordrat eller svarat p&aring; detta meddelande.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Anm&auml;l till administrat&ouml;r';
$txt['pm_report_title'] = 'Anm&auml;l privat meddelande';
$txt['pm_report_desc'] = 'Fr&aring;n denna sida kan du anm&auml;la det privata meddelandet du fick till administrat&ouml;rerna p&aring; forumet. Var v&auml;nlig se till att bifoga en beskrivning om varf&ouml;r du anm&auml;lt meddelandet, d&aring; detta kommer att skickas med tillsammans med inneh&aring;llet i meddelandet.';
$txt['pm_report_admins'] = 'Administrat&ouml;r att skicka anm&auml;lan till';
$txt['pm_report_all_admins'] = 'Skicka till alla forumets administrat&ouml;rer';
$txt['pm_report_reason'] = 'Anledningen till att du anm&auml;ler detta meddelande';
$txt['pm_report_message'] = 'Anm&auml;l meddelande';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[ANMÄLAN] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} har anmält nedanstående privata meddelande, skickat av {SENDER}, av denna orsak:';
$txt['pm_report_pm_other_recipients'] = 'Andra mottagare av meddelandet innefattar:';
$txt['pm_report_pm_hidden'] = '%d dold(a) mottagare';
$txt['pm_report_pm_unedited_below'] = 'Nedan återfinns innehållet i det privata meddelande som anmälan gäller:';
$txt['pm_report_pm_sent'] = 'Skickat:';

$txt['pm_report_done'] = 'Tack f&ouml;r att du skickat anm&auml;lan. Du b&ouml;r h&ouml;ra av forumets administratörer inom kort';
$txt['pm_report_return'] = '&Aring;terv&auml;nd till inkorgen';

$txt['pm_search_title'] = 'S&ouml;k privata meddelanden';
$txt['pm_search_bar_title'] = 'S&ouml;k meddelanden';
$txt['pm_search_text'] = 'S&ouml;k efter';
$txt['pm_search_go'] = 'S&ouml;k';
$txt['pm_search_advanced'] = 'Avancerad s&ouml;kning';
$txt['pm_search_user'] = 'av anv&auml;ndare';
$txt['pm_search_match_all'] = 'Matcha alla ord';
$txt['pm_search_match_any'] = 'Matcha n&aring;got av orden';
$txt['pm_search_options'] = 'Alternativ';
$txt['pm_search_post_age'] = '&Aring;lder';
$txt['pm_search_show_complete'] = 'Visa hela meddelanden i s&ouml;kresultat.';
$txt['pm_search_subject_only'] = 'S&ouml;k endast rubriker och avs&auml;ndare.';
$txt['pm_search_between'] = 'Mellan';
$txt['pm_search_between_and'] = 'och';
$txt['pm_search_between_days'] = 'dagar';
$txt['pm_search_order'] = 'Sortera resultaten efter';
$txt['pm_search_choose_label'] = 'V&auml;lj etiketter att s&ouml;ka efter, eller samtliga';

$txt['pm_search_results'] = 'S&ouml;kresultat';
$txt['pm_search_none_found'] = 'Inga meddelanden hittades';

$txt['pm_search_orderby_relevant_first'] = 'Mest relevanta f&ouml;rst';
$txt['pm_search_orderby_recent_first'] = 'Nyast f&ouml;rst';
$txt['pm_search_orderby_old_first'] = '&Auml;ldst f&ouml;rst';

$txt['pm_visual_verification_label'] = 'Verifiering';
$txt['pm_visual_verification_desc'] = 'Var vänlig ange koden i bilden ovan för att skicka detta privata meddelande.';
$txt['pm_visual_verification_listen'] = 'Lyssna till bokstäverna muntligt';

?>