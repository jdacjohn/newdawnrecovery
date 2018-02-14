<?php
// Version: 1.1.2; Login

$txt[37] = 'Du m&aring;ste fylla i ett anv&auml;ndarnamn.';
$txt[38] = 'Du har inte angett ditt l&ouml;senord';
$txt[39] = 'Felaktigt l&ouml;senord';
$txt[98] = 'V&auml;lj anv&auml;ndarnamn';
$txt[155] = 'Underh&aring;llsl&auml;ge';
$txt[245] = 'Registreringen lyckades';
$txt[431] = 'Registrerad utan problem! Du &auml;r nu medlem p&aring; forumet.';
// Use numeric entities in the below string.
$txt[492] = 'och ditt lösenord är';
$txt[500] = 'V&auml;nligen ange en giltig e-postadress, %s.';
$txt[517] = 'Obligatorisk information';
$txt[520] = 'Anv&auml;nds endast f&ouml;r intern identifikation av forumprogramvaran SMF.';
$txt[585] = 'Jag samtycker';
$txt[586] = 'Jag samtycker inte';
$txt[633] = 'Varning!';
$txt[634] = 'Enbart registrerade medlemmar har r&auml;tt att komma &aring;t denna avdelning.';
$txt[635] = 'V&auml;nligen logga in nedan eller';
$txt[636] = 'registrera ett nytt konto';
$txt[637] = 'hos ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Du kan ändra det efter att du loggat in genom att gå till din profil, eller genom att besöka denna sida efter inloggning:';
$txt[719] = 'Ditt användarnamn är: ';
$txt[730] = 'E-postadressen %s &auml;r redan upptagen av en annan medlem. Om du tror att det &auml;r ett misstag, och att denna anv&auml;ndare egentligen &auml;r du sj&auml;lv, g&aring; d&aring; till inloggningssidan och anv&auml;nd l&ouml;senordsp&aring;minnelse med den adressen.';

$txt['login_hash_error'] = 'L&ouml;senordss&auml;kerheten p&aring; forumet har nyligen uppgraderats. V&auml;nligen ange ditt l&ouml;senord igen.';

$txt['register_age_confirmation'] = 'Jag &auml;r minst %d &aring;r gammal';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Välkommen till ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Du har nu registrerat ett användarkonto vid ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Ditt användarnamn är %2$s och ditt lösenord är %3$s.' . "\n\n" . 'Du kan byta lösenord efter att du loggat in, genom att gå till din profil, alternativt besöka denna sida efter att du loggat in:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Du har nu registrerat ett användarkonto vid ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Ditt användarnamn är %2$s och ditt lösenord är %3$s (vilket kan ändras senare).' . "\n\n" . 'Innan du loggar in måste du först aktivera ditt konto. Det gör du genom att följa denna länk:' . "\n\n" . '%5$s' . "\n\n" . 'Om du får problem med aktiveringen, använd denna kod: "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Din ansökan om kontoregistrering på ' . $context['forum_name'] . ' har skickats utan problem, %1$s.' . "\n\n" . 'Användarnamnet du registrerade med var %2$s och lösenordet var %3$s.' . "\n\n" . 'Innan du kan logga in och börja använda forumet, måste din ansökan granskas och godkännas av administratören. När så sker kommer du att få ytterligare ett e-post-meddelande från denna adress.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Du har nu registrerat ett användarkonto vid ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Ditt användarnamn är "%2$s".' . "\n\n" . 'Innan du loggar in måste du först aktivera ditt konto. Det gör du genom att följa denna länk:' . "\n\n" . '%4$s' . "\n\n" . 'Om du får problem med aktiveringen, använd koden "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Din ansökan om kontoregistrering på ' . $context['forum_name'] . ' har skickats utan problem, %1$s.' . "\n\n" . 'Användarnamnet du registrerade med var %2$s.' . "\n\n" . 'Innan du kan logga in och börja använda forumet, måste din ansökan granskas och godkännas av administratören. När så sker kommer du att få ytterligare ett e-post-meddelande från denna adress.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Beklagar, du f&aring;r inte registrera dig p&aring; detta forum';
$txt['under_age_registration_prohibited'] = 'Beklagar, men användare under %d års ålder får inte registrera sig på detta forum.';

$txt['activate_account'] = 'Kontoaktivering';
$txt['activate_success'] = 'Ditt konto har aktiverats utan problem. Du kan nu forts&auml;tta med att logga in.';
$txt['activate_not_completed1'] = 'Din e-postadress m&aring;ste valideras innan du kan logga in.';
$txt['activate_not_completed2'] = 'Vill du ha ett till aktiveringsmeddelande via e-post?';
$txt['activate_after_registration'] = 'Tack f&ouml;r att du registrerat dig. Du kommer att f&aring; ett e-post-meddelande snart, med en l&auml;nk d&auml;r du kan aktivera ditt konto. Om du inte fått något e-post-meddelande inom en rimlig tid, kolla då om den råkat hamna i din skräppostmapp.';
$txt['invalid_userid'] = 'Anv&auml;ndaren finns inte';
$txt['invalid_activation_code'] = 'Ogiltig aktiveringskod';
$txt['invalid_activation_username'] = 'Anv&auml;ndarnamn eller e-postadress';
$txt['invalid_activation_new'] = 'Om du registrerade dig med fel e-postadress, skriv en ny adress och ditt l&ouml;senord h&auml;r.';
$txt['invalid_activation_new_email'] = 'Ny e-postadress';
$txt['invalid_activation_password'] = 'Gammalt l&ouml;senord';
$txt['invalid_activation_resend'] = 'Skicka aktiveringskod igen';
$txt['invalid_activation_known'] = 'Om du redan vet din aktiveringskod, skriv in den h&auml;r.';
$txt['invalid_activation_retry'] = 'Aktiveringskod';
$txt['invalid_activation_submit'] = 'Aktivera';

$txt['coppa_not_completed1'] = 'Administrat&ouml;ren har fortfarande inte f&aring;tt samtycke fr&aring;n f&ouml;r&auml;lder eller m&aring;lsman f&ouml;r ditt anv&auml;ndarkonto.';
$txt['coppa_not_completed2'] = 'Beh&ouml;ver du mer information?';

$txt['awaiting_delete_account'] = 'Ditt konto har markerats att tas bort!<br />Om du vill &aring;terskapa ditt konto, klicka d&aring; p&aring; &quot;&Aring;teraktivera mitt konto&quot;, och logga in igen.';
$txt['undelete_account'] = '&Aring;teraktivera mitt konto';

$txt['change_email_success'] = 'Din e-postadress har &auml;ndrats, och ett nytt aktiveringsbrev har skickats till den nya adressen.';
$txt['resend_email_success'] = 'Ett nytt aktiveringsbrev har skickats.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Nytt lösenord';
$txt['change_password_1'] = 'Dina inloggningsuppgifter på ';
$txt['change_password_2'] = 'har ändrats, och ditt lösenord har nollställts. Nedan återfinns dina nya inloggningsuppgifter.';

$txt['maintenance3'] = 'Detta forum &auml;r i underh&aring;llsl&auml;ge.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Vänligen läs och acceptera villkoren innan du fortsätter.';
$txt['register_passwords_differ_js'] = 'De två lösenord du skrev in var inte samma!';

$txt['approval_after_registration'] = 'Tack f&ouml;r att du registrerat dig. Administrat&ouml;ren m&aring;ste godk&auml;nna dig innan du kan b&ouml;rja anv&auml;nda kontot. Du kommer inom kort att f&aring; ett e-post-meddelande, med information om vad administrat&ouml;ren beslutat.';

$txt['admin_settings_desc'] = 'H&auml;r kan du &auml;ndra ett antal inst&auml;llningar som ber&ouml;r registrering av nya medlemmar.';

$txt['admin_setting_registration_method'] = 'Typ av registrering f&ouml;r nya medlemmar';
$txt['admin_setting_registration_disabled'] = 'Registrering avst&auml;ngd';
$txt['admin_setting_registration_standard'] = 'Omedelbar registrering';
$txt['admin_setting_registration_activate'] = 'Kontot m&aring;ste aktiveras';
$txt['admin_setting_registration_approval'] = 'Kontot m&aring;ste godk&auml;nnas';
$txt['admin_setting_notify_new_registration'] = 'Underr&auml;tta administrat&ouml;rerna n&auml;r en ny medlem registrerar sig';
$txt['admin_setting_send_welcomeEmail'] = 'Skicka v&auml;lkomstmeddelande via e-post till nya medlemmar';

$txt['admin_setting_password_strength'] = 'V&auml;lj n&ouml;dv&auml;ndig s&auml;kerhetsniv&aring; f&ouml;r anv&auml;ndarnas l&ouml;senord';
$txt['admin_setting_password_strength_low'] = 'L&aring;g - minst 4 tecken';
$txt['admin_setting_password_strength_medium'] = 'Mellan - kan inte inneh&aring;lla anv&auml;ndarnamnet';
$txt['admin_setting_password_strength_high'] = 'H&ouml;g - blanda bokst&auml;ver och siffror';

$txt['admin_setting_image_verification_type'] = 'Sv&aring;righetsgrad p&aring; visuella bokstavsverifieringens bilder';
$txt['admin_setting_image_verification_type_desc'] = 'Ju mer avancerad bilden &auml;r, desto sv&aring;rare &auml;r det f&ouml;r robotar att kunna identifiera vad som st&aring;r.';
$txt['admin_setting_image_verification_off'] = 'Avst&auml;ngd';
$txt['admin_setting_image_verification_vsimple'] = 'V&auml;ldigt enkel - ren text p&aring; bild';
$txt['admin_setting_image_verification_simple'] = 'Enkel - &ouml;verlappande f&auml;rgade bokst&auml;ver, inga st&ouml;rningar';
$txt['admin_setting_image_verification_medium'] = 'Mellan - &ouml;verlappande f&auml;rgade bokst&auml;ver, med st&ouml;rningar';
$txt['admin_setting_image_verification_high'] = 'H&ouml;g - vinklade bokst&auml;ver, en hel del st&ouml;rningar';
$txt['admin_setting_image_verification_sample'] = 'F&ouml;rhandsgranskning';
$txt['admin_setting_image_verification_nogd'] = '<b>Obs:</b> D&aring; denna server inte har biblioteket GD installerat, kommer de olika sv&aring;righetsinst&auml;llningarna inte att ha n&aring;gon funktion.';

$txt['admin_setting_coppaAge'] = '&Aring;ldersgr&auml;ns f&ouml;r registrering utan restriktioner';
$txt['admin_setting_coppaAge_desc'] = '(S&auml;tt till 0 f&ouml;r att inaktivera)';
$txt['admin_setting_coppaType'] = 'Åtg&auml;rd n&auml;r personer under minimi&aring;ldern registrerar sig';
$txt['admin_setting_coppaType_reject'] = 'Neka deras registrering';
$txt['admin_setting_coppaType_approval'] = 'Kr&auml;v samtycke fr&aring;n f&ouml;r&auml;lder/m&aring;lsman';
$txt['admin_setting_coppaPost'] = 'Postadress som samtyckeformul&auml;r ska skickas till';
$txt['admin_setting_coppaPost_desc'] = 'G&auml;ller enbart om &aring;ldersbegr&auml;nsningar &auml;r i bruk';
$txt['admin_setting_coppaFax'] = 'Faxnummer som samtyckeformul&auml;r kan faxas till';
$txt['admin_setting_coppaPhone'] = 'Telefonnummer d&auml;r f&ouml;r&auml;ldrar kan n&aring; dig vid f&ouml;rfr&aring;gningar om &aring;ldersbegr&auml;nsning';
$txt['admin_setting_coppa_require_contact'] = 'Du m&aring;ste ange antingen en postadress eller faxnummer om du valt samtycke fr&aring;n f&ouml;r&auml;ldrar/m&aring;lsm&auml;n.';

$txt['admin_register'] = 'Registrering av ny medlem';
$txt['admin_register_desc'] = 'H&auml;r kan du registrera nya medlemmar p&aring; forumet och, om n&ouml;dv&auml;ndigt, skicka e-post till dem med deras kontouppgifter.';
$txt['admin_register_username'] = 'Nytt anv&auml;ndarnamn';
$txt['admin_register_email'] = 'E-postadress';
$txt['admin_register_password'] = 'L&ouml;senord';
$txt['admin_register_username_desc'] = 'Anv&auml;ndarnamn f&ouml;r den nya medlemmen';
$txt['admin_register_email_desc'] = 'E-postadress f&ouml;r medlemmen<br />(n&ouml;dv&auml;ndigt om du v&auml;ljer att skicka kontouppgifter)';
$txt['admin_register_password_desc'] = 'Den nya medlemmens l&ouml;senord';
$txt['admin_register_email_detail'] = 'E-posta l&ouml;senordet till medlemmen';
$txt['admin_register_email_detail_desc'] = 'E-postadress måste anges även om denna kryssruta avmarkerats';
$txt['admin_register_email_activate'] = 'Kr&auml;v att anv&auml;ndaren m&aring;ste aktivera kontot';
$txt['admin_register_group'] = 'Huvudsaklig medlemsgrupp';
$txt['admin_register_group_desc'] = 'Den huvudsakliga (prim&auml;ra) medlemsgruppen som den nya medlemmen kommer att tillh&ouml;ra';
$txt['admin_register_group_none'] = '(ingen huvudsaklig medlemsgrupp)';
$txt['admin_register_done'] = 'Medlemskontot %s har registrerats utan problem!';

$txt['admin_browse_register_new'] = 'Registrera ny medlem';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'En ny medlem har registrerat sig';
$txt['admin_notify_profile'] = '%s har just registrerat sig som medlem på ditt forum. Klicka på länken nedan för att visa dennes profil.';
$txt['admin_notify_approval'] = 'Innan denna medlem kan börja posta, måste dennes konto godkännas. Klicka på länken nedan för att gå till godkännandeskärmen.';

$txt['coppa_title'] = '&Aring;ldersbegr&auml;nsat forum';
$txt['coppa_after_registration'] = 'Tack f&ouml;r att du registrerat dig p&aring; ' . $context['forum_name'] . '.<br /><br />D&aring; du &auml;r under {MINIMUM_AGE} &aring;r gammal, m&aring;ste du f&aring; tillst&aring;nd fr&aring;n dina f&ouml;r&auml;ldrar eller v&aring;rdnadshavare innan du kan b&ouml;rja anv&auml;nda kontot. F&ouml;r att ordna med aktivering av kontot, var v&auml;nlig skriv ut nedanst&aring;ende formul&auml;r:';
$txt['coppa_form_link_popup'] = 'Ladda formul&auml;r i nytt f&ouml;nster';
$txt['coppa_form_link_download'] = 'Ladda hem formul&auml;r som textfil';
$txt['coppa_send_to_one_option'] = 'Be sedan en f&ouml;r&auml;lder eller v&aring;rdnadshavare att fylla i formul&auml;ret, och skicka det via:';
$txt['coppa_send_to_two_options'] = 'Be sedan en f&ouml;r&auml;lder eller v&aring;rdnadshavare att fylla i formul&auml;ret, och skicka det via antingen:';
$txt['coppa_send_by_post'] = 'Brev (snigelpost), till f&ouml;ljande adress:';
$txt['coppa_send_by_fax'] = 'Fax, till f&ouml;ljande faxnummer:';
$txt['coppa_send_by_phone'] = 'Alternativt, be dem att kontakta forumets administrat&ouml;r p&aring; telefon {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Tillst&aring;ndsformul&auml;r f&ouml;r registrering p&aring; ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Adress';
$txt['coppa_form_date'] = 'Datum';
$txt['coppa_form_body'] = 'Jag {PARENT_NAME},<br /><br />ger tillst&aring;nd att {CHILD_NAME} (barnets namn) f&aring;r bli medlem p&aring; forumet: ' . $context['forum_name'] . ', med anv&auml;ndarnamnet: {USER_NAME}.<br /><br />Jag f&ouml;rst&aring;r att viss personlig information som {USER_NAME} sj&auml;lv bidrar med kan komma att visas f&ouml;r andra anv&auml;ndare p&aring; forumet.<br /><br />Undertecknat:<br />{PARENT_NAME} (F&ouml;r&auml;lder/v&aring;rdnadshavare).';

$txt['visual_verification_label'] = 'Visuell bokstavsverifiering';
$txt['visual_verification_description'] = 'Skriv in bokst&auml;verna som visas p&aring; bilden';
$txt['visual_verification_sound'] = 'Lyssna till bokst&auml;verna muntligt';
$txt['visual_verification_sound_again'] = 'Spela igen';
$txt['visual_verification_sound_close'] = 'St&auml;ng f&ouml;nstret';
$txt['visual_verification_request_new'] = 'Beg&auml;r ny bild';
$txt['visual_verification_sound_direct'] = 'Har du problem att h&ouml;ra ljudet? Prova d&aring; direktl&auml;nken till ljudfilen.';

?>