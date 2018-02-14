<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Λίστα προσωπικών μηνυμάτων';
$txt[148] = 'Αποστολή μηνύματος';
$txt[150] = 'Προς';
$txt[1502] = 'Αντίγραφο';
$txt[316] = 'Εισερχόμενα';
$txt[320] = 'Απεσταλμένα';
$txt[321] = 'Νέο μήνυμα';
$txt[411] = 'Διαγραφή μηνυμάτων';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Διαγραφή όλων των μηνυμάτων στο PMBOX';
$txt[413] = 'Είστε βεβαιος ότι θέλετε να διαγράψετε όλα τα μηνύματα;';
$txt[535] = 'Παραλήπτης';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Νέο προσωπικό μήνυμα: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Έχετε ένα νέο προσωπικό μήνυμα από τον SENDER στο ' . $context['forum_name'] . '.' . "\n\n" . 'ΣΗΜΕΙΩΣΗ: Το παρόν είναι μόνο μια ειδοποίηση. Παρακαλούμε μην απαντάτε σε αυτό το e-mail.' . "\n\n" . 'Το μήνυμα που σας στάλθηκε είναι:' . "\n\n" . 'MESSAGE';
$txt[748] = '(πολλαπλοί παραλήπτες: \'όνομα1, όνομα2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Απαντήστε σε αυτό το προσωπικό μήνυμα εδώ:';

$txt['smf249'] = 'Είστε βέβαιος ότι θέλετε να διαγράψετε όλα τα επιλεγμένα προσωπικά μηνύματα;';

$txt['sent_to'] = 'Εστάλη στον/στην';
$txt['reply_to_all'] = 'Απάντηση σε όλους';

$txt['pm_capacity'] = 'Χωρητικότητα';
$txt['pm_currently_using'] = '%s μηνύματα, %s%% γεμάτο.';

$txt['pm_error_user_not_found'] = 'Το μέλος \'%s\' δεν βρέθηκε.';
$txt['pm_error_ignored_by_user'] = 'Το μέλος \'%s\' έχει απαγορεύσει τη λήψη προσωπικών μηνυμάτων από εσάς.';
$txt['pm_error_data_limit_reached'] = 'Δεν ήταν δυνατόν να σταλεί το προσωπικό μήνυμα στο μέλος \'%s\' γιατί η θυρίδα εισερχομένων του είναι γεμάτη!';
$txt['pm_successfully_sent'] = 'Το προσωπικό μήνυμα εστάλη επιτυχώς στο μέλος \'%s\'.';
$txt['pm_too_many_recipients'] = 'Δεν μπορείτε να στείλετε ένα προσωπικό μήνυμα σε παραπάνω από %d παραλήπτες ταυτόχρονα.';
$txt['pm_too_many_per_hour'] = 'Έχετε υπερβεί τον μέγιστο αριθμό %d προσωπικών μηνυμάτων ανά ώρα.';
$txt['pm_send_report'] = 'Αποστολή αναφοράς';
$txt['pm_save_outbox'] = 'Αποθήκευση αντιγράφου στα Απεσταλμένα';
$txt['pm_undisclosed_recipients'] = 'Μη ορατοί παραλήπτες';

$txt['pm_read'] = 'Διαβασμένο';
$txt['pm_replied'] = 'Έχει απαντηθεί';

// Message Pruning.
$txt['pm_prune'] = 'Διαγραφή μηνυμάτων';
$txt['pm_prune_desc1'] = 'Διαγραφή όλων των προσωπικών μηνυμάτων που είναι παλαιότερα από';
$txt['pm_prune_desc2'] = 'ημέρες.';
$txt['pm_prune_warning'] = 'Είστε βέβαιος ότι θέλετε να διαγράψετε τα προσωπικά σας μηνύματα;';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Επιπλέον ενέργειες';
$txt['pm_actions_delete_selected'] = 'Διαγραφή επιλεγμένων';
$txt['pm_actions_filter_by_label'] = 'Φίλτρο με βάση τις επικεφαλίδες';
$txt['pm_actions_go'] = 'Εντάξει';

// Manage Labels Screen.
$txt['pm_apply'] = 'Εφαρμογή';
$txt['pm_manage_labels'] = 'Διαχείριση επικεφαλίδων';
$txt['pm_labels_delete'] = 'Είστε βέβαιος ότι θέλετε να διαγράψετε τις επιλεγμένες επικεφαλίδες;';
$txt['pm_labels_desc'] = 'Εδώ μπορείτε να προσθέσετε, να τροποποιήσετε και να διαγράψετε επικεφαλίδες που χρησιμοποιούνται στο κέντρο προσωπικών μηνυμάτων σας.';
$txt['pm_label_add_new'] = 'Προσθήκη νέας επικεφαλίδας';
$txt['pm_label_name'] = 'Όνομα επικεφαλίδας';
$txt['pm_labels_no_exist'] = 'Προς το παρόν δεν έχετε καμμία επικεφαλίδα!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Επικεφαλίδα';
$txt['pm_msg_label_title'] = 'Επικεφαλίδα μηνύματος';
$txt['pm_msg_label_apply'] = 'Προσθήκη επικεφαλίδας';
$txt['pm_msg_label_remove'] = 'Διαγραφή επικεφαλίδας';
$txt['pm_msg_label_inbox'] = 'Εισερχόμενα';
$txt['pm_sel_label_title'] = 'Επικεφαλίδα στα επιλεγμένα';
$txt['labels_too_many'] = 'Συγγνώμη, %s μηνύματα ήδη είχαν το μέγιστο επιτρεπόμενο πλήθος επικεφαλίδων!';

// Sidebar Headings.
$txt['pm_labels'] = 'Επικεφαλίδες';
$txt['pm_messages'] = 'Μηνύματα';
$txt['pm_preferences'] = 'Προτιμήσεις';

$txt['pm_is_replied_to'] = 'Έχετε προωθήσει ή απαντήσει σε αυτό το μήνυμα.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Αναφορά στον Διαχειριστή';
$txt['pm_report_title'] = 'Αναφορά προσωπικού μηνύματος';
$txt['pm_report_desc'] = 'Από αυτήν τη σελίδα μπορείτε να αναφέρετε το προσωπικό μήνυμα που λάβατε στην ομάδα Διαχειριστών. Παρακαλούμε, σιγουρευτείτε ότι περιλαμβάνει μια περιγραφή για το λόγο που θέλετε να αναφέρετε αυτό το μήνυμα, καθώς αυτή θα αποσταλεί μαζί με το περιεχόμενο του εν λόγω μηνύματος.';
$txt['pm_report_admins'] = 'Διαχειριστής στον οποίο θα σταλεί η αναφορά';
$txt['pm_report_all_admins'] = 'Αποστολή σε όλους τους Διαχειριστές';
$txt['pm_report_reason'] = 'Ο λόγος που αναφέρετε αυτό το μήνυμα';
$txt['pm_report_message'] = 'Αναφορά μηνύματος';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = 'Ο/η {REPORTER} έχει αναφέρει το παρακάτω προσωπικό μήνυμα, με αποστολέα τον/την {SENDER}, για τον ακόλουθο λόγο:';
$txt['pm_report_pm_other_recipients'] = 'Οι υπόλοιποι παραλήπτες του μηνύματος είναι:';
$txt['pm_report_pm_hidden'] = '%d μη ορατοί παραλήπτες';
$txt['pm_report_pm_unedited_below'] = 'Ακολουθεί το αρχικό περιεχόμενο του αναφερόμενου προσωπικού μηνύματος:';
$txt['pm_report_pm_sent'] = 'Εστάλη στις:';

$txt['pm_report_done'] = 'Ευχαριστούμε για την υποβολή αυτής της αναφοράς. Θα έχετε νέα από την ομάδα διαχειριστών σύντομα';
$txt['pm_report_return'] = 'Επιστροφή στα εισερχόμενα';

$txt['pm_search_title'] = 'Αναζήτηση προσωπικών μηνυμάτων';
$txt['pm_search_bar_title'] = 'Αναζήτηση μηνυμάτων';
$txt['pm_search_text'] = 'Αναζήτηση για';
$txt['pm_search_go'] = 'Αναζήτηση';
$txt['pm_search_advanced'] = 'Σύνθετη αναζήτηση';
$txt['pm_search_user'] = 'με χρήστη';
$txt['pm_search_match_all'] = 'Ταίριασμα όλων των λέξεων';
$txt['pm_search_match_any'] = 'Ταίριασμα οποιωνδήποτε λέξεων';
$txt['pm_search_options'] = 'Επιλογές';
$txt['pm_search_post_age'] = 'Παλαιότητα';
$txt['pm_search_show_complete'] = 'Εμφάνιση πλήρους μηνύματος στα αποτελέσματα.';
$txt['pm_search_subject_only'] = 'Αναζήτηση με βάση τον τίτλο και τον αποστολέα μόνο.';
$txt['pm_search_between'] = 'Μεταξύ';
$txt['pm_search_between_and'] = 'και';
$txt['pm_search_between_days'] = 'ημερών';
$txt['pm_search_order'] = 'Ταξινόμηση αποτελεσμάτων ανά';
$txt['pm_search_choose_label'] = 'Επιλέξτε ετικέτες για την αναζήτηση, ή αναζητήστε σε όλα';

$txt['pm_search_results'] = 'Αποτελέσματα αναζήτησης';
$txt['pm_search_none_found'] = 'Δεν βρέθηκαν μηνύματα';

$txt['pm_search_orderby_relevant_first'] = 'Πρώτα τα πιο σχετικά ';
$txt['pm_search_orderby_recent_first'] = 'Πρώτα τα πιο πρόσφατα';
$txt['pm_search_orderby_old_first'] = 'Πρώτα τα πιο παλιά';

$txt['pm_visual_verification_label'] = 'Επαλήθευση';
$txt['pm_visual_verification_desc'] = 'Εισαγάγετε τον κώδικα που υπάρχει στην παραπάνω εικόνα για να στείλετε αυτό το προσωπικό μήνυμα.';
$txt['pm_visual_verification_listen'] = 'Ακούστε τα γράμματα';

?>