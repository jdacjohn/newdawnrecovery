<?php
// Version: 1.1.2; Login

$txt[37] = 'Bitte einen Benutzernamen eingeben.';
$txt[38] = 'Das Passwortfeld ist leer.';
$txt[39] = 'Das Passwort ist falsch.';
$txt[98] = 'W&#228;hlen Sie einen Benutzernamen';
$txt[155] = 'Wartungsmodus';
$txt[245] = 'Die Registrierung war erfolgreich!';
$txt[431] = 'Erfolgreich! Sie sind nun ein Mitglied des Forums';
// Use numeric entities in the below string.
$txt[492] = 'und Ihr Passwort ist';
$txt[500] = 'Bitte geben Sie eine g&#252;ltige E-Mail Adresse ein, (%s)';
$txt[517] = 'Notwendige Angaben';
$txt[520] = 'Wird nur zur Identifizierung von SMF verwendet. Spezialzeichen k&#246;nnen Sie nach dem Einloggen verwenden, indem Sie den Anzeigenamen im Profil &#228;ndern.';
$txt[585] = 'Ich bin einverstanden';
$txt[586] = 'Ich bin nicht einverstanden';
$txt[633] = 'Warnung!';
$txt[634] = 'Nur registrierte Mitglieder haben Zugriff auf diesen Bereich.';
$txt[635] = 'Bitte einloggen oder';
$txt[636] = 'ein neues Benutzerkonto';
$txt[637] = 'im ' . $context['forum_name'] . ' registrieren.';
// Use numeric entities in the below two strings.
$txt[701] = 'Nach dem Einloggen k&#246;nnen Sie es in Ihrem Profil &#228;ndern oder folgende Seite benutzen:';
$txt[719] = 'Ihr Benutzername ist: ';
$txt[730] = 'Diese E-Mail Adresse (%s) wird bereits von einem anderen Mitglied verwendet! Wenn Sie Ihr Passwort vergessen haben, k&#246;nnen Sie es sich &#252;ber die Passwort-Erinnerung auf der Login-Seite zusenden lassen.';

$txt['login_hash_error'] = 'Die Passwortsicherheit wurde aktualisiert. Bitte geben Sie Ihr Passwort erneut ein.';

$txt['register_age_confirmation'] = 'Ich bin mindestens %d Jahre alt';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Willkommen im ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Sie sind jetzt mit einem Benutzerkonto im ' . $context['forum_name'] . ' registriert, %1$s!' . "\n\n" . 'Ihr Benutzername ist %2$s und das Passwort lautet %3$s.' . "\n\n" . 'Sie k&#246;nnen Ihr Passwort nach dem Einloggen &#228;ndern, indem Sie in Ihr Profil gehen oder folgende Seite besuchen:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Sie sind jetzt mit einem Benutzerkonto im ' . $context['forum_name'] . ' registriert, %1$s!' . "\n\n" . 'Ihr Benutzername ist %2$s und das Passwort lautet %3$s (es kann sp&#228;ter ge&#228;ndert werden).' . "\n\n" . 'Bevor Sie sich einloggen k&#246;nnen, m&#252;ssen Sie auf folgender Seite Ihr Benutzerkonto aktivieren:' . "\n\n" . '%5$s' . "\n\n" . 'Sollten Sie Probleme mit der Aktivierung haben, benutzen Sie bitte diesen Code "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Ihre Registrierung im ' . $context['forum_name'] . ' haben wir erhalten, %1$s.' . "\n\n" . 'Ihr gew&#228;hlter Benutzername ist %2$s und das Passwort lautet %3$s.' . "\n\n" . 'Bevor Sie sich einloggen und das Forum benutzen k&#246;nnen, muss Ihr Benutzerkonto zuerst vom Administrator genehmigt werden. Wenn das erfolgt ist, erhalten Sie eine weitere E-Mail.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Sie sind jetzt mit einem Benutzerkonto im ' . $context['forum_name'] . ' registriert, %1$s!' . "\n\n" . 'Ihr Benutzername ist "%2$s".' . "\n\n" . 'Bevor Sie sich einloggen k&#246;nnen, m&#252;ssen Sie auf folgender Seite Ihr Benutzerkonto aktivieren:' . "\n\n" . '%4$s' . "\n\n" . 'Sollten Sie Probleme mit der Aktivierung haben, benutzen Sie bitte diesen Code "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Ihre Registrierung im ' . $context['forum_name'] . ' haben wir erhalten, %1$s.' . "\n\n" . 'Ihr gew&#228;hlter Benutzername ist %2$s.' . "\n\n" . 'Bevor Sie sich einloggen und das Forum benutzen k&#246;nnen, muss Ihr Benutzerkonto zuerst genehmigt werden. Wenn dies erfolgt ist, erhalten Sie eine weitere E-Mail.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Sie haben nicht die Erlaubnis, sich in diesem Forum zu registrieren';
$txt['under_age_registration_prohibited'] = 'Benutzer, die j&#252;nger als %d Jahre sind, d&#252;rfen sich in diesem Forum nicht registrieren';

$txt['activate_account'] = 'Kontoaktivierung';
$txt['activate_success'] = 'Ihr Benutzerkonto wurde erfolgreich aktiviert. Sie k&#246;nnen sich jetzt einloggen.';
$txt['activate_not_completed1'] = 'Ihre E-Mail Adresse muss vor dem Einloggen &#252;berpr&#252;ft werden.';
$txt['activate_not_completed2'] = 'Brauchen Sie eine erneute Aktivierungs E-Mail?';
$txt['activate_after_registration'] = 'Danke f&#252;r die Registrierung. Sie werden in K&#252;rze eine E-Mail erhalten, mit der Sie Ihr Benutzerkonto aktivieren k&#246;nnen. Sollten Sie nach einiger Zeit keine E-Mail erhalten haben, pr&#252;fen Sie bitte Ihren Spam-Ordner.';
$txt['invalid_userid'] = 'Der Benutzer existiert nicht';
$txt['invalid_activation_code'] = 'Ung&#252;ltiger Aktivierungscode';
$txt['invalid_activation_username'] = 'Benutzername oder E-Mail';
$txt['invalid_activation_new'] = 'Wenn Sie sich mit einer falschen E-Mail Adresse registriert haben, geben Sie hier eine neue Adresse und Ihr Passwort ein.';
$txt['invalid_activation_new_email'] = 'Neue E-Mail Adresse';
$txt['invalid_activation_password'] = 'Altes Passwort';
$txt['invalid_activation_resend'] = 'Aktivierungscode erneut senden';
$txt['invalid_activation_known'] = 'Wenn Sie Ihren Aktivierungscode wissen, tragen Sie ihn hier ein.';
$txt['invalid_activation_retry'] = 'Aktivierungscode';
$txt['invalid_activation_submit'] = 'Aktivieren';

$txt['coppa_not_completed1'] = 'Der Administrator hat noch keine Einwilligung der Eltern/Erziehungsberechtigten f&#252;r Dein Benutzerkonto erhalten.';
$txt['coppa_not_completed2'] = 'Weitere Details?';

$txt['awaiting_delete_account'] = 'Sie haben Ihr Benutzerkonto gel&#246;scht! M&#246;chten Sie es wiederherstellen, aktivieren Sie die &quot;Wiederherstellen meines Benutzerkontos&quot; Option und versuchen Sie es erneut.';
$txt['undelete_account'] = 'Wiederherstellen meines Benutzerkontos';

$txt['change_email_success'] = 'Ihre E-Mail Adresse wurde ge&#228;ndert. Eine neue Aktivierungs E-Mail wurde gesendet.';
$txt['resend_email_success'] = 'Eine neue Aktivierungs E-Mail wurde erfolgreich gesendet';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Neue Login-Daten';
$txt['change_password_1'] = 'Ihre Login-Daten von';
$txt['change_password_2'] = 'haben sich ge&#228;ndert und Ihr Passwort wurde annulliert. Es folgen Ihre neuen Daten.';

$txt['maintenance3'] = 'Das Forum ist im Wartungsmodus.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Bitte lesen und akzeptieren Sie die Regeln.';
$txt['register_passwords_differ_js'] = 'Passwörter stimmen nicht überein.';

$txt['approval_after_registration'] = 'Danke f&#252;r die Registrierung. Der Administrator muss Ihre Registrierung genehmigen, bevor Sie Ihr Benutzerkonto benutzen k&#246;nnen. Sie werden in K&#252;rze eine E-Mail mit der Entscheidung erhalten.';

$txt['admin_settings_desc'] = 'Hier k&#246;nnen Sie verschiedene Einstellungen bez&#252;glich der Registrierung neuer Mitglieder machen.';

$txt['admin_setting_registration_method'] = 'Registrierungsmethode bei neuen Mitgliedern';
$txt['admin_setting_registration_disabled'] = 'Registrierung deaktivieren';
$txt['admin_setting_registration_standard'] = 'Sofortige Registrierung';
$txt['admin_setting_registration_activate'] = 'Neue Mitglieder aktivieren';
$txt['admin_setting_registration_approval'] = 'Neue Mitglieder genehmigen';
$txt['admin_setting_notify_new_registration'] = 'Administrator bei neuen Registrierungen benachrichtigen?';
$txt['admin_setting_send_welcomeEmail'] = 'Willkommens E-Mail auch senden, wenn \'Neues Passwort zusenden\' nicht aktiviert ist?';

$txt['admin_setting_password_strength'] = 'Ben&#246;tigtes Level des Passwortes';
$txt['admin_setting_password_strength_low'] = 'Niedrig - mind. 4 Zeichen';
$txt['admin_setting_password_strength_medium'] = 'Mittel - kann Benutzernamen nicht enthalten';
$txt['admin_setting_password_strength_high'] = 'Hoch - ein Mix aus Buchstaben und Zahlen';

$txt['admin_setting_image_verification_type'] = 'Komplexit&#228;t der Visuellen Verifizierung';
$txt['admin_setting_image_verification_type_desc'] = 'Je komplexer das Bild ist, desto schwieriger ist es f&#252;r Bots, die Verifizierung zu umgehen';
$txt['admin_setting_image_verification_off'] = 'Deaktiviert';
$txt['admin_setting_image_verification_vsimple'] = 'Sehr einfach - Nur Text auf dem Bild';
$txt['admin_setting_image_verification_simple'] = 'Einfach - &#220;berlappende bunte Buchstaben, ohne Rauschen';
$txt['admin_setting_image_verification_medium'] = 'Mittel - &#220;berlappende bunte Buchstaben, mit Rauschen';
$txt['admin_setting_image_verification_high'] = 'Hoch - Verdrehte Buchstaben, starkes Rauschen';
$txt['admin_setting_image_verification_sample'] = 'Beispiel';
$txt['admin_setting_image_verification_nogd'] = '<b>Achtung:</b> Da der Server die GD Bibliothek nicht installiert hat, haben die verschiedenen Komplexit&#228;ts-Einstellungen keine Auswirkung!';

$txt['admin_setting_coppaAge'] = 'Altersgrenze f&#252;r Registrierungsbeschr&#228;nkung';
$txt['admin_setting_coppaAge_desc'] = '(0 zum deaktivieren)';
$txt['admin_setting_coppaType'] = 'Aktion nach Registrierung unterhalb der Altersgrenze';
$txt['admin_setting_coppaType_reject'] = 'Registrierung ablehnen';
$txt['admin_setting_coppaType_approval'] = 'Erfordert die Genehmigung von Eltern/Erziehungsberechtigten';
$txt['admin_setting_coppaPost'] = 'Postadresse, an welche die Genehmigung gesendet werden soll';
$txt['admin_setting_coppaPost_desc'] = 'Nur ben&#246;tigt, wenn Altersbeschr&#228;nkung aktiviert';
$txt['admin_setting_coppaFax'] = 'Faxnummer, an welche die Genehmigung gefaxt werden soll';
$txt['admin_setting_coppaPhone'] = 'Kontaktnummer f&#252;r Eltern/Erziehungsberechtigte mit Fragen zur Altersbegrenzung';
$txt['admin_setting_coppa_require_contact'] = 'Sie m&#252;ssen entweder eine Postadresse oder eine Faxnummer eingeben, wenn die Genehmigung durch Eltern/Erziehungsberechtigte erfordert wird.';

$txt['admin_register'] = 'Registrierung neuer Mitglieder';
$txt['admin_register_desc'] = 'Hier k&#246;nnen Sie neue Mitglieder im Forum registrieren und Ihnen bei Bedarf die Details per E-Mail schicken.';
$txt['admin_register_username'] = 'Benutzername';
$txt['admin_register_email'] = 'E-Mail Adresse';
$txt['admin_register_password'] = 'Passwort';
$txt['admin_register_username_desc'] = 'Benutzername f&#252;r neues Mitglied';
$txt['admin_register_email_desc'] = 'E-Mail Adresse des Benutzers';
$txt['admin_register_password_desc'] = 'Passwort f&#252;r den Benutzer';
$txt['admin_register_email_detail'] = 'Neues Passwort an den Benutzer schicken';
$txt['admin_register_email_detail_desc'] = 'E-Mail Adresse wird auch bei deaktivierter Option ben&#246;tigt!';
$txt['admin_register_email_activate'] = 'Benutzer zum Aktivieren des Kontos ben&#246;tigt';
$txt['admin_register_group'] = 'Prim&#228;re Mitgliedergruppe';
$txt['admin_register_group_desc'] = 'Prim&#228;re Mitgliedergruppe f&#252;r neue Benutzer';
$txt['admin_register_group_none'] = '(keine prim&#228;re Mitgliedergruppe)';
$txt['admin_register_done'] = 'Benutzer %s wurde erfolgreich registriert!';

$txt['admin_browse_register_new'] = 'Neues Mitglied registrieren';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Ein neuer Benutzer hat sich angemeldet';
$txt['admin_notify_profile'] = '%s hat sich als neues Mitglied in Ihrem Forum angemeldet. Klicken Sie den folgenden Link, um das Profil zu betrachten.';
$txt['admin_notify_approval'] = 'Bevor das Mitglied Beitr&#228;ge schreiben kann, muss das Benutzerkonto mit Hilfe des folgenden Links zuerst genehmigt werden.';

$txt['coppa_title'] = 'Altersbeschr&#228;nktes Forum';
$txt['coppa_after_registration'] = 'Du hast Dich im ' . $context['forum_name'] . ' registriert.<br /><br />Du f&#228;llst als Benutzer unter die Altergrenze von {MINIMUM_AGE}. Daher ist eine Genehmigung von Deinen Eltern/Erziehungsberechtigten erforderlich, welche Dir erlaubt das Benutzerkonto zu benutzen. Um das Benutzerkonto aktivieren zu lassen, drucke bitte folgendes Formular aus:';
$txt['coppa_form_link_popup'] = 'Lade das Formular in ein neues Fenster';
$txt['coppa_form_link_download'] = 'Lade das Formular herunter';
$txt['coppa_send_to_one_option'] = 'Danach m&#252;ssen Deine Eltern/Erziehungsberechtigte das Formular per:';
$txt['coppa_send_to_two_options'] = 'Danach m&#252;ssen Deine Eltern/Erziehungsberechtigte das Formular entweder per:';
$txt['coppa_send_by_post'] = 'Post an folgende Adresse senden:';
$txt['coppa_send_by_fax'] = 'Fax an folgende Nummer senden:';
$txt['coppa_send_by_phone'] = 'Alternativ k&#246;nnen Sie auch den Administrator unter folgender Nummer anrufen: {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Erlaubnis zum Registrieren im ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Adresse';
$txt['coppa_form_date'] = 'Datum';
$txt['coppa_form_body'] = 'Ich, {PARENT_NAME},<br /><br />erlaube {CHILD_NAME} (Name des Kindes) ein registrierter Benutzer des Forums ' . $context['forum_name'] . ' mit dem Benutzernamen {USER_NAME} zu werden.<br /><br />Ich bin damit einverstanden, dass bestimmte pers&#246;nliche Angaben von {USER_NAME} auch von anderen Benutzern im Forum einsehbar sind.<br /><br />Unterschrift:<br />{PARENT_NAME} (Eltern/Erziehungsberechtigte).';

$txt['visual_verification_label'] = 'Visuelle Verifizierung';
$txt['visual_verification_description'] = 'Geben Sie die angezeigten Buchstaben aus dem Bild ein';
$txt['visual_verification_sound'] = 'H&#246;ren Sie sich die Buchstaben an';
$txt['visual_verification_sound_again'] = 'Nochmal abspielen';
$txt['visual_verification_sound_close'] = 'Fenster schlie&#223;en';
$txt['visual_verification_request_new'] = 'Neues Bild anfordern';
$txt['visual_verification_sound_direct'] = 'H&#246;ren Sie den Ton nicht? Versuchen Sie den direkten Link dazu.';

?>