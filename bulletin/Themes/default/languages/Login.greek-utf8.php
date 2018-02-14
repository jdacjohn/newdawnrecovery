<?php
// Version: 1.1.2; Login

$txt[37] = 'Το όνομα χρήστη είναι απαραίτητο.';
$txt[38] = 'Ο κωδικός είναι απαραίτητος';
$txt[39] = 'Λάθος κωδικός';
$txt[98] = 'Επιλογή ονόματος';
$txt[155] = 'Κατάσταση συντήρησης';
$txt[245] = 'Η εγγραφή ολοκληρώθηκε επιτυχώς';
$txt[431] = 'Συγχαρητήρια! Είστε τώρα μέλος της δημόσιας συζήτησης.';
// Use numeric entities in the below string.
$txt[492] = 'και ο κωδικός σας είναι';
$txt[500] = 'Δώστε μία έγκυρη διεύθυνση e-mail, %s.';
$txt[517] = 'Απαιτούμενα στοιχεία';
$txt[520] = 'Χρησιμοποιείται μόνο για την αναγνώριση από το πρόγραμμα της δημόσιας συζήτησης.';
$txt[585] = 'Συμφωνώ';
$txt[586] = 'Δεν συμφωνώ';
$txt[633] = 'Προσοχή!';
$txt[634] = 'Μόνο εγγεγραμμένα μέλη μπορούν να προσπελάσουν αυτήν την περιοχή.';
$txt[635] = 'Παρακαλούμε συνδεθείτε παρακάτω ή';
$txt[636] = 'εγγραφείτε';
$txt[637] = 'στο ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Μπορείτε να το αλλάξετε αφού συνδεθείτε, πηγαίνοντας στο προφίλ σας, ή ανοίγοντας αυτή τη σελίδα μετά τη σύνδεση:';
$txt[719] = 'Το όνομα χρήστη σας είναι: ';
$txt[730] = 'Η διεύθυνση e-mail (%s) χρησιμοποιείται ήδη από ένα άλλο μέλος! Αν νομίζετε ότι έγινε κάποιο λάθος, πηγαίνετε στη σελίδα σύνδεσης και χρησιμοποιήστε την υπενθύμιση κωδικού.';

$txt['login_hash_error'] = 'Η ασφάλεια των κωδικών αναβαθμίστηκε πρόσφατα. Γράψτε ξανά τον κωδικό σας.';

$txt['register_age_confirmation'] = 'Είμαι τουλάχιστον %d ετών';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Καλώς ήρθατε στο ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Είστε τώρα εγγεγραμμένος/η στο ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'με όνομα χρήστη %2$s και κωδικό %3$s.' . "\n\n" . 'Μπορείτε να αλλάξετε τον κωδικό σας μετά την σύνδεση, από το προφίλ σας,'. "\n\n" .' ή επισκεπτόμενος αυτή τη σελίδα μετά την σύνδεση σας:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Είστε τώρα εγγεγραμμένος/η στο ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'με όνομα χρήστη %2$s και κωδικό κωδικό %3$s (ο οποίος μπορεί να αλλαχτεί αργότερα.)' . "\n\n" . 'Πριν μπορέσετε να συνδεθείτε, πρέπει πρώτα να ενεργοποιήσετε τον λογαριασμό σας. '. "\n\n" . 'Για να γίνει αυτό, ακολουθήστε τον παρακάτω σύνδεσμο:' . "\n\n" . '%5$s' . "\n\n" . 'Σε περίπτωση προβλήματος με την ενεργοποίηση, παρακαλώ χρησιμοποιήστε τον κωδικό ενεργοποίησης "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Η αίτηση εγγραφής σας στο ' . $context['forum_name'] . ' έχει ληφθεί, %1$s.' . "\n\n" . 'Το όνομα χρήστη που δώσατε ήταν %2$s και ο κωδικός ήταν %3$s.' . "\n\n" . 'Πριν μπορέσετε να συνδεθείτε και να χρησιμοποιήσετε τη δημόσια συζήτηση, η αίτηση σας θα εξεταστεί και θα εγκριθεί. Όταν γίνει αυτό, θα λάβετε άλλο ένα email από αυτή την διεύθυνση.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Είστε τώρα εγγεγραμμένος/η στο ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Το όνομα χρήστη είναι "%2$s".' . "\n\n" . 'Πριν μπορέσετε να συνδεθείτε, πρέπει πρώτα να ενεργοποιήσετε τον λογαριασμό σας.'. "\n\n" .' Για να γίνει αυτό, παρακαλώ ακολουθήστε τον παρακάτω σύνδεσμο:' . "\n\n" . '%4$s' . "\n\n" . 'Σε περίπτωση προβλήματος με την ενεργοποίηση, παρακαλώ χρησιμοποιήστε τον κωδικό ενεργοποίησης "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Η αίτηση εγγραφής σας στο ' . $context['forum_name'] . ' έχει ληφθεί, %1$s.' . "\n\n" . 'Το όνομα χρήστη που δώσατε ήταν %2$s.' . "\n\n" . 'Πριν μπορέσετε να συνδεθείτε και να χρησιμοποιήσετε τη δημόσια συζήτηση, η αίτηση σας θα εξεταστεί και θα εγκριθεί. Όταν γίνει αυτό, θα λάβετε άλλο ένα email από αυτή την διεύθυνση.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Συγγνώμη, δεν σας επιτρέπεται να εγγραφείτε σε αυτή τη δημόσια συζήτηση';
$txt['under_age_registration_prohibited'] = 'Συγγνώμη, αλλά χρήστες κάτω από την ηλικία των %d δεν επιτρέπεται να εγγραφούν σε αυτή τη δημόσια συζήτηση.';

$txt['activate_account'] = 'Ενεργοποίηση λογαριασμού';
$txt['activate_success'] = 'Ο λογαριασμός σας ενεργοποιήθηκε. Μπορείτε να προχωρήσετε σε σύνδεση.';
$txt['activate_not_completed1'] = 'Η διεύθυνση e-mail σας χρειάζεται να πιστοποιηθεί πριν να μπορέσετε να συνδεθείτε.';
$txt['activate_not_completed2'] = 'Χρειάζεστε κι άλλο e-mail ενεργοποίησης;';
$txt['activate_after_registration'] = 'Ευχαριστούμε για την εγγραφή. Θα λάβετε σύντομα ένα email με έναν σύνδεσμο για να ενεργοποιήσετε τον λογαριασμό σας. Αν δεν λάβετε email μετά από κάποιο καιρό, ελέγξτε τον φάκελο ανεπιθύμητης αλληλογραφίας (spam folder)';
$txt['invalid_userid'] = 'Ο χρήστης δεν υπάρχει';
$txt['invalid_activation_code'] = 'Λάθος κωδικός ενεργοποίησης';
$txt['invalid_activation_username'] = 'Όνομα χρήστη ή e-mail';
$txt['invalid_activation_new'] = 'Αν εγγραφήκατε με εσφαλμένη διεύθυνση e-mail, γράψτε μια νέα καθώς και τον κωδικό σας, εδώ.';
$txt['invalid_activation_new_email'] = 'Νέα διεύθυνση e-mail';
$txt['invalid_activation_password'] = 'Παλιός κωδικός';
$txt['invalid_activation_resend'] = 'Αποστολή ξανά του κωδικού ενεργοποίησης';
$txt['invalid_activation_known'] = 'Αν ήδη γνωρίζετε τον κωδικό ενεργοποίησης, γράψτε τον εδώ.';
$txt['invalid_activation_retry'] = 'Κωδικός ενεργοποίησης';
$txt['invalid_activation_submit'] = 'Ενεργοποίηση';

$txt['coppa_not_completed1'] = 'Ο διαχειριστής δεν έχει ακόμη λάβει την έγκριση του γονέα/κηδεμόνα για τον λογαριασμό σας.';
$txt['coppa_not_completed2'] = 'Χρειάζεστε περισσότερες λεπτομέρειες;';

$txt['awaiting_delete_account'] = 'Ο λογαριασμός σας έχει σημανθεί για διαγραφή!<br />Αν θέλετε να επαναφέρετε τον λογαριασμό σας, επιλέξτε το &quot;Επαναενεργοποίηση του λογαριασμού μου&quot;, και συνδεθείτε ξανά.';
$txt['undelete_account'] = 'Επαναενεργοποίηση του λογαριασμού μου';

$txt['change_email_success'] = 'Η διεύθυνση e-mail σας, έχει αλλάξει, και ένα νέο email ενεργοποίησης έχει σταλθεί.';
$txt['resend_email_success'] = 'Ένα νέο e-mail ενεργοποίησης έχει σταλεί.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Στοιχεία νέου κωδικού';
$txt['change_password_1'] = 'Έχει γίνει αλλαγή των στοιχείων εγγραφής σας στο';
$txt['change_password_2'] = 'και εχει γίνει επαναφορά του κωδικού σας. Ακολουθούν τα στοιχεία της εγγραφής σας.';

$txt['maintenance3'] = 'Αυτός ο πίνακας είναι σε κατάσταση συντήρησης.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Παρακαλούμε διαβάστε/αποδεχτείτε τους όρους για να αποσταλεί η φόρμα.';
$txt['register_passwords_differ_js'] = 'Οι δύο κωδικοί που εισαγάγατε δεν είναι οι ίδιοι!';

$txt['approval_after_registration'] = 'Ευχαριστούμε για την εγγραφή. Ο διαχειριστής πρέπει να εγκρίνει την εγγραφή σας πριν να μπορέσετε να χρησιμοποιήσετε τον λογαριασμό σας. Θα λάβετε σύντομα ένα email που θα σας ενημερώνει για την απόφαση του διαχειριστή.';

$txt['admin_settings_desc'] = 'Εδώ μπορείτε να αλλάξετε μια πληθώρα ρυθμίσεων σχετικά με την εγγραφή νέων μελών.';

$txt['admin_setting_registration_method'] = 'Μέθοδος εγγραφής για τα νέα μέλη';
$txt['admin_setting_registration_disabled'] = 'Εγγραφή απενεργοποιημένη';
$txt['admin_setting_registration_standard'] = 'Άμεση εγγραφή';
$txt['admin_setting_registration_activate'] = 'Ενεργοποίηση μέλους';
$txt['admin_setting_registration_approval'] = 'Έγκριση μέλους';
$txt['admin_setting_notify_new_registration'] = 'Ενημέρωση διαχειριστών κατά την εγγραφή νέου μέλους';
$txt['admin_setting_send_welcomeEmail'] = 'Αποστολή email καλωσορίσματος στα νέα μέλη';

$txt['admin_setting_password_strength'] = 'Απαιτούμενο μήκος για τους κωδικούς των χρηστών';
$txt['admin_setting_password_strength_low'] = 'Χαμηλό - τουλάχιστον 4 χαρακτήρες';
$txt['admin_setting_password_strength_medium'] = 'Μεσαίο - δεν πρέπει να περιέχει το όνομα χρήστη';
$txt['admin_setting_password_strength_high'] = 'Υψηλό - χρήση διαφορετικών χαρακτήρων';

$txt['admin_setting_image_verification_type'] = 'Δυσκολία οπτικής επαλήθευσης εικόνας';
$txt['admin_setting_image_verification_type_desc'] = 'Όσο πιο περίπλοκη είναι η εικόνα, τόσο πιο δύσκολο είναι για τα bots να έχουν πρόσβαση';
$txt['admin_setting_image_verification_off'] = 'Απενεργοποιημένη';
$txt['admin_setting_image_verification_vsimple'] = 'Πολύ απλή - Κανονικό κείμενο στην εικόνα';
$txt['admin_setting_image_verification_simple'] = 'Απλή - Έγχρωμα γράμματα, χωρίς "θόρυβο"';
$txt['admin_setting_image_verification_medium'] = 'Μεσαία - Έγχρωμα γράμματα με "θόρυβο"';
$txt['admin_setting_image_verification_high'] = 'Υψηλή - "Παραμορφωμένα" γράμματα με "θόρυβο"';
$txt['admin_setting_image_verification_sample'] = 'Δείγμα';
$txt['admin_setting_image_verification_nogd'] = '<b>Σημείωση:</b> Αν αυτός ο διακομιστής δεν έχει εγκατεστημένη τη βιβλιοθήκη GD, οι διάφορες επιλογές δυσκολίας δεν θα ισχύσουν.';

$txt['admin_setting_coppaAge'] = 'Ηλικία κάτω από την οποία ισχύουν οι περιορισμοί εγγραφής';
$txt['admin_setting_coppaAge_desc'] = '(0 για απενεργοποίηση)';
$txt['admin_setting_coppaType'] = 'Ενέργεια που θα ληφθεί όταν εγγράφεται χρήστης με κάτω από την ελάχιστη ηλικία';
$txt['admin_setting_coppaType_reject'] = 'Απόρριψη της εγγραφής';
$txt['admin_setting_coppaType_approval'] = 'Απαίτηση έγκρισης γονέα/κηδεμόνα';
$txt['admin_setting_coppaPost'] = 'Ταχυδρομική διεύθυνση στην οποία θα αποστέλλονται φόρμες έγκρισης';
$txt['admin_setting_coppaPost_desc'] = 'Ισχύει μόνο αν έχει επιλεγεί ο περιορισμός ηλικίας';
$txt['admin_setting_coppaFax'] = 'Αριθμός τηλεμοιότυπου στον οποίο θα αποστέλλονται φόρμες έγκρισης';
$txt['admin_setting_coppaPhone'] = 'Αριθμός επικοινωνίας για γονείς για να επικοινωνήσουν για ερωτήσεις σχετικά με τον περιορισμό ηλικίας';
$txt['admin_setting_coppa_require_contact'] = 'Πρέπει να εισάγετε είτε την ταχυδρομική διεύθυνση είτε τον αριθμό fax, εφόσον απαιτείται η έγκριση γονέα/κηδεμόνα.';

$txt['admin_register'] = 'Εγγραφή νέου μέλους';
$txt['admin_register_desc'] = 'Εδώ μπορείτε να εγγράψετε νέα μέλη στο φόρουμ και, αν θέλετε, να στείλετε τα στοιχεία τους με email.';
$txt['admin_register_username'] = 'Νέο όνομα χρήστη';
$txt['admin_register_email'] = 'Διεύθυνση e-mail';
$txt['admin_register_password'] = 'Κωδικός';
$txt['admin_register_username_desc'] = 'Όνομα χρήστη νέου μέλους';
$txt['admin_register_email_desc'] = 'Διεύθυνση e-mail του μέλους<br />(απαραίτητη αν επιλέξετε να στείλετε τα στοιχεία με email)';
$txt['admin_register_password_desc'] = 'Νέος κωδικός για τον χρήστη';
$txt['admin_register_email_detail'] = 'Αποστολή με e-mail του νέου κωδικού στον χρήστη';
$txt['admin_register_email_detail_desc'] = 'Η διεύθυνση του email απαιτείται, ακόμη κι άν δεν έχει επιλεχθεί';
$txt['admin_register_email_activate'] = 'Απαιτείται ο χρήστης να ενεργοποιήσει τον λογαριασμό;';
$txt['admin_register_group'] = 'Κύρια ομάδα μελών';
$txt['admin_register_group_desc'] = 'Κύρια ομάδα μελών όπου θα ανήκει το νέο μέλος';
$txt['admin_register_group_none'] = '(χωρίς κύρια ομάδα μελών)';
$txt['admin_register_done'] = 'Το μέλος %s έχει εγγραφεί επιτυχώς!';

$txt['admin_browse_register_new'] = 'Εγγραφή νέου μέλους';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Ένα νέο μέλος εγγράφηκε';
$txt['admin_notify_profile'] = 'Ο/Η %s μόλις εγγράφηκε ως νέο μέλος στη δημόσια συζήτηση. Ακολουθήστε τον παρακάτω σύνδεσμο για να δείτε το προφίλ του.';
$txt['admin_notify_approval'] = 'Πριν μπορέσει αυτό το μέλος να στείλει μηνύματα, πρέπει να εγκριθεί ο λογαριασμός τους. Ακολουθήστε τον παρακάτω σύνδεσμο για να πάτε στην σελίδα έγκρισης.';

$txt['coppa_title'] = 'Δημόσια συζήτηση με περιορισμό ηλικίας';
$txt['coppa_after_registration'] = 'Ευχαριστούμε για την εγγραφή σας στο ' . $context['forum_name'] . '.<br /><br />Επειδή η ηλικία σας είναι κάτω απο {MINIMUM_AGE}, είναι νόμιμη απαίτηση
	να λάβεις την έγκριση του γονέα ή κηδεμόνα σας πρίν να μπορέσετε να χρησιμοποιήσετε τον λογαριασμό σας. Για να κανονίσετε την ενεργοποίηση του λογαριασμού σας, παρακαλώ τυπώστε την παρακάτω φόρμα:';
$txt['coppa_form_link_popup'] = 'Ανοιγμα φόρμας σε νέο παράθυρο';
$txt['coppa_form_link_download'] = 'Κατέβασμα φόρμας ως αρχείο κειμένου';
$txt['coppa_send_to_one_option'] = 'Μετά, ζητήστε από τον γονέα/κηδεμόνα σας να στείλει την συμπληρωμένη φόρμα με:';
$txt['coppa_send_to_two_options'] = 'Μετά, ζητήστε από τον γονέα/κηδεμόνα σας να στείλει την συμπληρωμένη φόρμα με είτε:';
$txt['coppa_send_by_post'] = 'Ταχυδρομικώς, στην ακόλουθη διεύθυνση:';
$txt['coppa_send_by_fax'] = 'Fax, στον ακόλουθο αριθμό:';
$txt['coppa_send_by_phone'] = 'Εναλλακτικά, ζητήστε να τηλεφωνήσει στον διαχειριστή στον αριθμό {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Φόρμα συναίνεσης για εγγραφή στο ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Διεύθυνση';
$txt['coppa_form_date'] = 'Ημερομηνία';
$txt['coppa_form_body'] = 'Εγώ ο/η {PARENT_NAME},<br /><br />Δίνω την άδεια για να γίνει ο/η {CHILD_NAME} (όνομα παιδιού) πλήρες εγγεγραμμένο μέλος στη δημόσια συζήτηση: ' . $context['forum_name'] . ', με όνομα χρήστη: {USER_NAME}.<br /><br />Κατανοώ ότι συγκεκριμένες προσωπικές πληροφορίες που έχουν δοθεί από τον χρήστη {USER_NAME} μπορεί να είναι εμφανίσιμες σε άλλους χρήστες της δημόσιας συζήτησης.<br /><br />Υπογραφή:<br />{PARENT_NAME} (Γονέας/Κηδεμόνας).';

$txt['visual_verification_label'] = 'Οπτική επαλήθευση';
$txt['visual_verification_description'] = 'Εισαγάγετε τα γράμματα που βλέπετε στην εικόνα (αγγλικά γράμματα)';
$txt['visual_verification_sound'] = 'Εκφώνηση γραμμάτων';
$txt['visual_verification_sound_again'] = 'Επανάληψη αναπαραγωγής';
$txt['visual_verification_sound_close'] = 'Κλείσιμο παραθύρου';
$txt['visual_verification_request_new'] = 'Ζητήστε μία άλλη εικόνα';
$txt['visual_verification_sound_direct'] = 'Έχετε δυσκολία να το ακούσετε; Δοκιμάστε έναν απευθείας σύνδεσμο.';

?>