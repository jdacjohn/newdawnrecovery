<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Postkontor for PMer';
$txt[148] = 'Send melding';
$txt[150] = 'Til';
$txt[1502] = 'Blindkopi';
$txt[316] = 'Innboks';
$txt[320] = 'Utboks';
$txt[321] = 'Ny melding';
$txt[411] = 'Slett meldinger';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Slette alle personlige meldinger i din PMBOX';
$txt[413] = 'Er du sikker p&aring; at du vil slette alle meldinger?';
$txt[535] = 'Mottaker';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Ny personlig melding: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Du har nettopp mottatt en personlig melding fra SENDER p&aring; ' . $context['forum_name'] . '.' . "\n\n" . 'VIKTIG: Husk at dette kun er en varsling. Ikke svar p&aring; denne mailen.' . "\n\n" . 'Meldingen som er sendt til deg er:' . "\n\n" . 'MESSAGE';
$txt[748] = '(flere mottakere: \'name1, name2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Svar på denne personlige meldingen her:';

$txt['smf249'] = 'Er du sikker på at du vil slette de valgte personlige meldingene?';

$txt['sent_to'] = 'Sendt til';
$txt['reply_to_all'] = 'Svar til alle';

$txt['pm_capacity'] = 'Kapasitet';
$txt['pm_currently_using'] = '%s meldinger, %s%% full.';

$txt['pm_error_user_not_found'] = 'Kunne ikke finne medlemmet \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Medlemmet \'%s\' har blokkert din personlige melding.';
$txt['pm_error_data_limit_reached'] = 'Meldingen kunne ikke sendes til \'%s\' fordi medlemmet ikke har plass til flere meldinger';
$txt['pm_successfully_sent'] = 'Meldingen er sendt til \'%s\'.';
$txt['pm_too_many_recipients'] = 'Du kan ikke sende PM til flere enn %d mottaker(e) p&aring; én gang.';
$txt['pm_too_many_per_hour'] = 'Du har overskredet grensen på %d personlige meldinger i løpet av en time. ';
$txt['pm_send_report'] = 'Send rapport';
$txt['pm_save_outbox'] = 'Lagre en kopi i min utboks';
$txt['pm_undisclosed_recipients'] = 'Ubeskyttede mottakere';

$txt['pm_read'] = 'Lest';
$txt['pm_replied'] = 'Besvart';

// Message Pruning.
$txt['pm_prune'] = 'Autosletting av meldinger';
$txt['pm_prune_desc1'] = 'Slett personlige meldinger eldre enn';
$txt['pm_prune_desc2'] = 'dager.';
$txt['pm_prune_warning'] = 'Er du sikker p&aring; at du vil autoslette personlige meldinger?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Flere handlinger';
$txt['pm_actions_delete_selected'] = 'Slett valgte';
$txt['pm_actions_filter_by_label'] = 'Filtrer p&aring; merkelapp';
$txt['pm_actions_go'] = 'Ok';

// Manage Labels Screen.
$txt['pm_apply'] = 'Bruk';
$txt['pm_manage_labels'] = 'Behandle merkelapper';
$txt['pm_labels_delete'] = 'Er du sikker p&aring; at du vil slette de valgte merkelappene?';
$txt['pm_labels_desc'] = 'Her kan du legge til, endre og slette merkelapper som brukes for dine personlige meldinger.';
$txt['pm_label_add_new'] = 'Lag ny merkelapp';
$txt['pm_label_name'] = 'Navn p&aring; merkelapp';
$txt['pm_labels_no_exist'] = 'Du har ikke laget noen merkelapper enn&aring;!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Merkelapp';
$txt['pm_msg_label_title'] = 'Melding p&aring; merkelapp';
$txt['pm_msg_label_apply'] = 'Legg til merkelapp';
$txt['pm_msg_label_remove'] = 'Fjern merkelapp';
$txt['pm_msg_label_inbox'] = 'Innboks';
$txt['pm_sel_label_title'] = 'Valgt merkelapp';
$txt['labels_too_many'] = 'Beklager, %s meldingene har allerede maksimalt antall tillatte merkelapper!';

// Sidebar Headings.
$txt['pm_labels'] = 'Merkelapper';
$txt['pm_messages'] = 'Meldinger';
$txt['pm_preferences'] = 'Innstillinger';

$txt['pm_is_replied_to'] = 'Du har videresendt eller besvart denne meldingen.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Rapporter til admin';
$txt['pm_report_title'] = 'Rapporter personlig melding';
$txt['pm_report_desc'] = 'Fra denne siden kan du rapportere den personlige meldingen du mottok til administrasjonen p&aring; forumet. Vennligst skriv en begrunnelse for hvorfor du rapporterer meldingen. Begrunnelsen vil bli sendt sammen med innholdet i selve meldingen.';
$txt['pm_report_admins'] = 'Administrator rapporten skal sendes til';
$txt['pm_report_all_admins'] = 'Send til alle administratorer p&aring; forumet';
$txt['pm_report_reason'] = 'Begrunnelse for hvorfor du rapporterer denne meldingen';
$txt['pm_report_message'] = 'Rapporter melding';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[RAPPORT] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} har rapportert en personlig melding, med begrunnelsen:';
$txt['pm_report_pm_other_recipients'] = 'Andre mottakere av meldingen er:';
$txt['pm_report_pm_hidden'] = '%d skjulte mottakere';
$txt['pm_report_pm_unedited_below'] = 'Nedenfor gjengis orginal-innholdet i den personlige meldingen som er blitt rapportert:';
$txt['pm_report_pm_sent'] = 'Sendt:';

$txt['pm_report_done'] = 'Takk for at du sendte inn denne rapporten. Du vil snart motta tilbakemelding fra administrasjonen.';
$txt['pm_report_return'] = 'Tilbake til innboksen';

$txt['pm_search_title'] = 'S&oslash;k i personlige meldinger';
$txt['pm_search_bar_title'] = 'S&oslash;k i PMer';
$txt['pm_search_text'] = 'S&oslash;k etter';
$txt['pm_search_go'] = 'S&oslash;k';
$txt['pm_search_advanced'] = 'Avansert s&oslash;k';
$txt['pm_search_user'] = 'etter medlem';
$txt['pm_search_match_all'] = 'Treff p&aring; alle ord';
$txt['pm_search_match_any'] = 'Treff p&aring; minst ett ord';
$txt['pm_search_options'] = 'Alternativer';
$txt['pm_search_post_age'] = 'Alder';
$txt['pm_search_show_complete'] = 'Vis hele meldingen i s&oslash;keresultatet.';
$txt['pm_search_subject_only'] = 'S&oslash;k kun i tittel og forfatter.';
$txt['pm_search_between'] = 'Mellom';
$txt['pm_search_between_and'] = 'og';
$txt['pm_search_between_days'] = 'dager';
$txt['pm_search_order'] = 'Sorter s&oslash;keresultat etter';
$txt['pm_search_choose_label'] = 'Velg merkelapper &aring; s&oslash;ke etter, eller s&oslash;k alle';

$txt['pm_search_results'] = 'S&oslash;keresulater';
$txt['pm_search_none_found'] = 'Ingen meldinger funnet';

$txt['pm_search_orderby_relevant_first'] = 'Mest relevante f&oslash;rst';
$txt['pm_search_orderby_recent_first'] = 'Nyeste f&oslash;rst';
$txt['pm_search_orderby_old_first'] = 'Eldste f&oslash;rst';

$txt['pm_visual_verification_label'] = 'Bekreftelse';
$txt['pm_visual_verification_desc'] = 'Vennligst skriv inn koden i bildet ovenfor, for å sende denne personlige meldingen.';
$txt['pm_visual_verification_listen'] = 'Lytt til koden';

?>