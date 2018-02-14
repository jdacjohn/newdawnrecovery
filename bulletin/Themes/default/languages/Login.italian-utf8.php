<?php
// Version: 1.1.2; Login

$txt[37] = 'Si dovrebbe inserire un nome utente.';
$txt[38] = 'Non è stata inserita la password.';
$txt[39] = 'Password non corretta';
$txt[98] = 'Scegliere un nome utente';
$txt[155] = 'Manutenzione in corso';
$txt[245] = 'Registrazione completata';
$txt[431] = 'Complimenti! Sei un nuovo utente del forum.';
// Use numeric entities in the below string.
$txt[492] = 'e la password &#232;';
$txt[500] = 'Inserire un indirizzo e-mail valido, %s.';
$txt[517] = 'Informazioni obbligatorie';
$txt[520] = 'Viene utilizzato solo per l\'identificazione in SMF.';
$txt[585] = 'Accetto';
$txt[586] = 'Non accetto';
$txt[633] = 'Attenzione!';
$txt[634] = 'Solo gli utenti registrati possono accedere a questa sezione.';
$txt[635] = 'Effettua l\'accesso in basso o';
$txt[636] = 'crea un nuovo account';
$txt[637] = 'su ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = '&#200; possibile modificarli da questa stessa pagina o dalla pagina del profilo dopo aver effettuato l\'accesso:';
$txt[719] = 'Il tuo nome utente &#232;: ';
$txt[730] = 'Questo indirizzo e-mail (%s) è già usato da un altro utente. Se si è certi che si tratti di un errore utilizzare la funzione ricorda password con questo indirizzo nella pagina di accesso.';

$txt['login_hash_error'] = 'La sicurezza della password è stata recentemente potenziata.';

$txt['register_age_confirmation'] = 'Ho almeno %d anni';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Benvenuto su ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Adesso sei registrato con un account su ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Il nome utente del tuo account &#232; %2$s e la relativa password &#232; %3$s.' . "\n\n" . '&#200; possibile cambiare la password dopo aver effettuato l\'accesso andando nel profilo, oppure visitando questa pagina dopo l\'accesso:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Adesso sei registrato con un account su ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Il nome utente del tuo account &#232; %2$s e la relativa password &#232; %3$s (possono essere cambiati in seguito).' . "\n\n" . 'Per effettuare l\'accesso, &#232; necessario prima attivare l\'account. Per farlo, segui questo link:' . "\n\n" . '%5$s' . "\n\n" . 'In caso di problemi con l\'attivazione, si prega di utilizzare il codice "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'La tua richiesta di registrazione su ' . $context['forum_name'] . ' &#232; stata ricevuta, %1$s.' . "\n\n" . 'Il nome utente del tuo account &#232; %2$s e la password &#232; %3$s.' . "\n\n" . 'Prima di poter effettuare l\'accesso e iniziare a usare il forum, la tua richiesta sar&#224; verificata e approvata. Quando ci&#242; avverr&#224;, riceverai un\'altra e-mail da questo indirizzo.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Adesso sei registrato con un account su ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Il tuo nome utente &#232; "%2$s".' . "\n\n" . 'Per effettuare l\'accesso, &#232; necessario prima attivare l\'account. Per farlo segui questo link:' . "\n\n" . '%4$s' . "\n\n" . 'In caso di problemi con l\'attivazione utilizza il codice "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'La tua richiesta di registrazione su ' . $context['forum_name'] . ' &#232; stata ricevuta, %1$s.' . "\n\n" . 'Il nome utente con cui ti sei registrato &#232; %2$s.' . "\n\n" . 'Prima di poter effettuare l\'accesso e iniziare a usare il forum, la tua richiesta sar&#224; verificata e approvata. Quando ci&#242; avverr&#224;, riceverai un\'altra e-mail da questo indirizzo.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Spiacente, non è permesso registrarsi su questo forum.';
$txt['under_age_registration_prohibited'] = 'Spiacente, ma gli utenti minori di %d anni non possono registrarsi su questo forum.';

$txt['activate_account'] = 'Attivazione account';
$txt['activate_success'] = 'L\'account è stato attivato correttamente. Ora è possibile effettuare l\'accesso.';
$txt['activate_not_completed1'] = 'È necessario che il proprio indirizzo e-mail sia verificato prima di effettuare l\'accesso.';
$txt['activate_not_completed2'] = 'Inviare nuovamente l\'e-mail di attivazione?';
$txt['activate_after_registration'] = 'Grazie per la registrazione. Verrà presto inviata una e-mail con un link per attivare il proprio account. Se non si riceve una e-mail entro poco tempo, controllare la cartella dello spam.';
$txt['invalid_userid'] = 'L\'utente non esiste';
$txt['invalid_activation_code'] = 'Codice di attivazione non valido';
$txt['invalid_activation_username'] = 'Nome utente o e-mail';
$txt['invalid_activation_new'] = 'Se ci si è registrati con un indirizzo e-mail sbagliato, inserirne uno nuovo, insieme alla propria password, qui.';
$txt['invalid_activation_new_email'] = 'Nuovo indirizzo e-mail';
$txt['invalid_activation_password'] = 'Vecchia password';
$txt['invalid_activation_resend'] = 'Rispedisci codice di attivazione';
$txt['invalid_activation_known'] = 'Se si conosce già il proprio codice di attivazione, inserirlo qui.';
$txt['invalid_activation_retry'] = 'Codice di attivazione';
$txt['invalid_activation_submit'] = 'Attiva';

$txt['coppa_not_completed1'] = 'L\'amministratore non ha ancora ricevuto il consenso dai genitori/tutori per questo account.';
$txt['coppa_not_completed2'] = 'Sono necessari ulteriori dettagli?';

$txt['awaiting_delete_account'] = 'L\'account è stato marcato per l\'eliminazione!<br />Se si vuole ripristinare il proprio account, spuntare la casella &quot;Riattiva il mio account&quot; e accedere di nuovo.';
$txt['undelete_account'] = 'Riattiva il mio account';

$txt['change_email_success'] = 'L\'indirizzo e-mail è stato cambiato e un nuovo codice di attivazione è stato spedito al nuovo indirizzo.';
$txt['resend_email_success'] = 'Il nuovo codice di attivazione è stato inviato correttamente.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Dettagli nuova password';
$txt['change_password_1'] = 'I propri dati di accesso su';
$txt['change_password_2'] = 'sono stati cambiati e la password azzerata. Di seguito sono elencati i nuovi dati di accesso.';

$txt['maintenance3'] = 'Questo forum è chiuso per manutenzione.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Per favore leggere e accettare i termini di registrazione.';
$txt['register_passwords_differ_js'] = 'Le due password inserite non sono uguali!';

$txt['approval_after_registration'] = 'Grazie per aver effettuato la registrazione. L\'amministratore deve approvare la registrazione prima di poter iniziare a utilizzare l\'account; una e-mail contenente le decisioni degli amministratori arriverà a breve.';

$txt['admin_settings_desc'] = 'Da qui è possibile cambiare una serie di impostazioni legate alla registrazione dei nuovi utenti.';

$txt['admin_setting_registration_method'] = 'Metodo di registrazione usato per i nuovi utenti';
$txt['admin_setting_registration_disabled'] = 'Registrazione disabilitata';
$txt['admin_setting_registration_standard'] = 'Registrazione immediata';
$txt['admin_setting_registration_activate'] = 'Attivazione utente';
$txt['admin_setting_registration_approval'] = 'Approvazione utente';
$txt['admin_setting_notify_new_registration'] = 'Notifica agli amministratori quando si registra un nuovo utente';
$txt['admin_setting_send_welcomeEmail'] = 'Invia e-mail di benvenuto ai nuovi utenti';

$txt['admin_setting_password_strength'] = 'Sicurezza richiesta per le password utente';
$txt['admin_setting_password_strength_low'] = 'Bassa - 4 caratteri minimo';
$txt['admin_setting_password_strength_medium'] = 'Media - non può contenere il nome utente';
$txt['admin_setting_password_strength_high'] = 'Alta - miscuglio di caratteri diversi';

$txt['admin_setting_image_verification_type'] = 'Complessità dell\'immagine di verifica visuale';
$txt['admin_setting_image_verification_type_desc'] = 'Più è complessa l\'immagine, più è difficile per i bot da superare';
$txt['admin_setting_image_verification_off'] = 'Disattivata';
$txt['admin_setting_image_verification_vsimple'] = 'Molto semplice - Testo semplice sull\'immagine';
$txt['admin_setting_image_verification_simple'] = 'Semplice - Lettere colorate sovrapposte, senza interferenze';
$txt['admin_setting_image_verification_medium'] = 'Media - Lettere colorate sovrapposte, con interferenze';
$txt['admin_setting_image_verification_high'] = 'Alta - Lettere angolate, parecchie interferenze';
$txt['admin_setting_image_verification_sample'] = 'Esempio';
$txt['admin_setting_image_verification_nogd'] = '<b>Nota:</b> poiché questo server non ha installata la libreria GD, le differenti impostazioni di complessità non avranno effetto.';

$txt['admin_setting_coppaAge'] = 'Età sotto la quale si applicano le restrizioni di registrazione';
$txt['admin_setting_coppaAge_desc'] = '(impostare a 0 per disattivare)';
$txt['admin_setting_coppaType'] = 'Azione da intraprendere quando un utente al di sotto dell\'età minima si registra';
$txt['admin_setting_coppaType_reject'] = 'Rifiutare la registrazione';
$txt['admin_setting_coppaType_approval'] = 'Richiedere consenso dei genitori/tutori';
$txt['admin_setting_coppaPost'] = 'Indirizzo di posta a cui i moduli di consenso devono essere inviati';
$txt['admin_setting_coppaPost_desc'] = 'Si applica solo se le restrizioni sull\'età sono attive';
$txt['admin_setting_coppaFax'] = 'Numero di fax a cui i moduli di consenso devono essere inviati';
$txt['admin_setting_coppaPhone'] = 'Numero telefonico da contattare dai genitori/tutori per le domande sulle restrizioni sull\'età';
$txt['admin_setting_coppa_require_contact'] = 'È necessario inserire un contatto postale o fax se è richiesta l\'approvazione dei genitori/tutori.';

$txt['admin_register'] = 'Registrazione di un nuovo utente';
$txt['admin_register_desc'] = 'In questa sezione è possibile registrare un nuovo utente nel forum e se lo si desidera inviargli tramite e-mail i rispettivi dati.';
$txt['admin_register_username'] = 'Nuovo nome utente';
$txt['admin_register_email'] = 'Indirizzo e-mail';
$txt['admin_register_password'] = 'Password';
$txt['admin_register_username_desc'] = 'Nome utente per il nuovo membro';
$txt['admin_register_email_desc'] = 'Indirizzo e-mail dell\'utente';
$txt['admin_register_password_desc'] = 'Password dell\'utente';
$txt['admin_register_email_detail'] = 'Spedisci via e-mail la password all\'utente';
$txt['admin_register_email_detail_desc'] = 'Indirizzo e-mail richiesto anche se non spuntato';
$txt['admin_register_email_activate'] = 'Obbliga l\'utente ad attivare l\'account';
$txt['admin_register_group'] = 'Membro di gruppo primario';
$txt['admin_register_group_desc'] = 'Il nuovo utente apparterrà come gruppo primario a';
$txt['admin_register_group_none'] = '(nessun gruppo primario)';
$txt['admin_register_done'] = 'L\'utente %s è stato registrato correttamente!';

$txt['admin_browse_register_new'] = 'Registrazione nuovo utente';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Un nuovo utente si &#232; registrato';
$txt['admin_notify_profile'] = '%s si &#232; appena registrato al forum. Seguire il link sottostante per visualizzare il suo profilo.';
$txt['admin_notify_approval'] = 'Prima che questo utente possa iniziare a scrivere, il suo account deve essere approvato. Seguire il link sottostante per visualizzare la pagina di approvazione.';

$txt['coppa_title'] = 'Forum con restrizioni sull\'età';
$txt['coppa_after_registration'] = 'Grazie per la registrazione su ' . $context['forum_name'] . '.<br /><br />Poiché la tua età è inferiore a {MINIMUM_AGE} anni, vi è l\'obbligo legale di
	ottenere il permesso di utilizzare l\'account dai genitori o dai tutori. Per ottenere l\'attivazione dell\'account stampare il modulo sottostante:';
$txt['coppa_form_link_popup'] = 'Caricare il modulo in una nuova finestra';
$txt['coppa_form_link_download'] = 'Scaricare il modulo come un file di testo';
$txt['coppa_send_to_one_option'] = 'Poi avvisare i propri genitori/tutori di inviare il modulo compilato via:';
$txt['coppa_send_to_two_options'] = 'Poi avvisare i propri genitori/tutori di inviare il modulo compilato via:';
$txt['coppa_send_by_post'] = 'Posta, al seguente indirizzo:';
$txt['coppa_send_by_fax'] = 'Fax, al seguente numero:';
$txt['coppa_send_by_phone'] = 'In alternativa, avvisarli di telefonare all\'amministratore al numero {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Modulo di permesso per la registrazione su ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Indirizzo';
$txt['coppa_form_date'] = 'Data';
$txt['coppa_form_body'] = 'Il/La sottoscritto/a {PARENT_NAME},<br /><br />Acconsente che {CHILD_NAME} (nome del minore) diventi un utente pienamente registrato del forum: ' . $context['forum_name'] . ', con il nome utente: {USER_NAME}.<br /><br />Dichiara di comprendere che certe informazioni personali inserite da {USER_NAME} potrebbero essere mostrate ad altri utenti del forum.<br /><br />Firmato:<br />{PARENT_NAME} (Genitore/Tutore legale).';

$txt['visual_verification_label'] = 'Verifica visuale';
$txt['visual_verification_description'] = 'Inserire le lettere visualizzate nell\'immagine';
$txt['visual_verification_sound'] = 'Ascolta le lettere';
$txt['visual_verification_sound_again'] = 'Ascolta di nuovo';
$txt['visual_verification_sound_close'] = 'Chiudi finestra';
$txt['visual_verification_request_new'] = 'Richiedi altra immagine';
$txt['visual_verification_sound_direct'] = 'Ci sono problemi con l\'audio? Provare con un link diretto.';

?>