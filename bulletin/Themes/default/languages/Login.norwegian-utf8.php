<?php
// Version: 1.1.2; Login

$txt[37] = 'Du må skrive inn et brukernavn.';
$txt[38] = 'Du må skrive inn et passord.';
$txt[39] = 'Feil passord';
$txt[98] = 'Velg et brukernavn';
$txt[155] = 'Vedlikeholdsmodus';
$txt[245] = 'Registreringen var vellykket';
$txt[431] = 'Gratulerer! Du er nå medlem av forumet.';
// Use numeric entities in the below string.
$txt[492] = 'og passordet ditt er';
$txt[500] = 'Skriv inn en gyldig e-postadresse, %s.';
$txt[517] = 'Påkrevd informasjon';
$txt[520] = 'Benyttes kun for identifisering internt i forumsystemet.';
$txt[585] = 'Jeg aksepterer';
$txt[586] = 'Jeg aksepterer ikke';
$txt[633] = 'Advarsel!';
$txt[634] = 'Bare registrerte medlemmer har tilgang til denne seksjonen.';
$txt[635] = 'Vennligst logg inn nedenfor eller';
$txt[636] = 'registrer deg som medlem';
$txt[637] = 'på ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Du må gjerne endre passordet etter at du er logget inn ved å gå til profilen din, eller ved å gå til denne siden etter du er innlogget:';
$txt[719] = 'Brukernavnet ditt er: ';
$txt[730] = 'E-postadressen du skrev inn (%s) er allerede i bruk av et registrert medlem. Hvis du mener dette er feil, gå til innloggingssiden og trykk på Glemt passord for å få en påminnelse til e-postadressen.';

$txt['login_hash_error'] = 'Passord-sikkerheten har nylig blitt oppgradert. Vennligst skriv inn ditt passord på nytt.';

$txt['register_age_confirmation'] = 'Jeg er over %d år gammel';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Velkommen til ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Du er nå registrert som medlem på ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Brukernavnet ditt er %2$s og passordet ditt er %3$s.' . "\n\n" . 'Du kan endre passordet ditt etter at du har logget inn, ved å gå til din profil - eller ved å klikke på denne lenken etter at du har logget inn:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Du er nå registrert som medlem på ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Brukernavnet ditt er %2$s og passordet ditt er %3$s (dette kan endres senere.)' . "\n\n" . 'Før du kan logge inn må du aktivere medlemskapet. For å gjøre dette, vennligst følg denne lenken:' . "\n\n" . '%5$s' . "\n\n" . 'Hvis du får problem med aktiveringen, vennligst benytt aktiveringskode "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Din forespørsel om å bli medlem på ' . $context['forum_name'] . ' er mottatt, %1$s.' . "\n\n" . 'Brukernavnet du registrerte deg med var %2$s og passordet var %3$s.' . "\n\n" . 'Før du kan logge inn og begynne å bruke forumet, vil din forespørsel sjekkes og godkjennes manuelt. Når dette skjer vil du motta en ny e-post fra denne adressen.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Du er nå registrert som medlem på ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Brukernavnet ditt er "%2$s".' . "\n\n" . 'Før du kan logge inn må du aktivere ditt medlemskap. For å gjøre dette, vennligst følg denne lenken:' . "\n\n" . '%4$s' . "\n\n" . 'Hvis du får problem med aktivering, vennligst benytt aktiveringskode "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Din forespørsel om medlemskap på ' . $context['forum_name'] . ' er mottatt, %1$s.' . "\n\n" . 'Brukernavnet du registrerte deg med var %2$s.' . "\n\n" . 'Før du kan logge inn og begynne å bruke forumet, vil din forespørsel sjekkes og godkjennes manuelt. Når dette skjer vil du motta en ny e-post fra denne adressen.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Beklager, men du har ikke tillatelse å registrere deg på forumet.';
$txt['under_age_registration_prohibited'] = 'Beklager, men brukere med alder under %d år får ikke lov å regisrere seg på dette forumet.';

$txt['activate_account'] = 'Aktivering av medlemskap';
$txt['activate_success'] = 'Din konto har blitt aktivert. Du kan nå logge inn.';
$txt['activate_not_completed1'] = 'Din e-postadresse må godkjennes før du kan logge inn.';
$txt['activate_not_completed2'] = 'Trenger du en ny aktiveringsmail?';
$txt['activate_after_registration'] = 'Takk for at du registrerte deg. Du vil nå motta en e-post med en link til å aktivere kontoen din.';
$txt['invalid_userid'] = 'Brukeren eksisterer ikke';
$txt['invalid_activation_code'] = 'Ugyldig aktiveringskode';
$txt['invalid_activation_username'] = 'Brukernavn eller e-post';
$txt['invalid_activation_new'] = 'Dersom du registrerte deg med feil e-postadresse, skriv inn en ny adresse og ditt passord her.';
$txt['invalid_activation_new_email'] = 'Ny e-postadresse';
$txt['invalid_activation_password'] = 'Gammelt passord';
$txt['invalid_activation_resend'] = 'Send aktiveringskode på nytt';
$txt['invalid_activation_known'] = 'Dersom du allerede har en aktiveringskode, skriv den inn her.';
$txt['invalid_activation_retry'] = 'Aktiveringskode';
$txt['invalid_activation_submit'] = 'Aktiver';

$txt['coppa_not_completed1'] = 'Administrator har ennå ikke mottatt foreldres/foresattes samtykke for ditt medlemskap.';
$txt['coppa_not_completed2'] = 'Trenger du mer detaljer?';

$txt['awaiting_delete_account'] = 'Ditt medlemskap er markert for sletting!<br />Hvis du vil gjenopprette ditt medlemskap, vennligst kryss av for &quot;Gjenopprett mitt medlemskap&quot;, og logg inn på nytt.';
$txt['undelete_account'] = 'Gjenopprett mitt medlemskap';

$txt['change_email_success'] = 'Din e-postadresse er forandret, og en ny aktiveringsmail har blitt sendt til den.';
$txt['resend_email_success'] = 'En ny aktiveringsmail er blitt sendt.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Nytt passord';
$txt['change_password_1'] = 'Dine innloggingsdata på';
$txt['change_password_2'] = 'er forandret og ditt passord er blitt endret. Nedenfor er dine nye innloggingsdata.';

$txt['maintenance3'] = 'Dette forumet er under vedlikehold.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Du må lese og akseptere bekreftelsen for å fullføre registreringen.';
$txt['register_passwords_differ_js'] = 'De to passordene du skrev inn var ikke like!';

$txt['approval_after_registration'] = 'Takk for at du registrerte deg. Admin må nå godkjenne ditt medlemskap før du kan logge inn til kontoen din, du vil snart motta en mail som forteller hva admin har bestemt.';

$txt['admin_settings_desc'] = 'Her kan du endre diverse innstillinger vedrørende registrering av nye medlemmer.';

$txt['admin_setting_registration_method'] = 'Metode for registrering av nye medlemmer';
$txt['admin_setting_registration_disabled'] = 'Registrering deaktivert';
$txt['admin_setting_registration_standard'] = 'Umiddelbar registrering';
$txt['admin_setting_registration_activate'] = 'Medlem må aktivere seg';
$txt['admin_setting_registration_approval'] = 'Medlem må godkjennes';
$txt['admin_setting_notify_new_registration'] = 'Varsle administratorer når et nytt medlem registres';
$txt['admin_setting_send_welcomeEmail'] = 'Send velkomst-e-post til nye medlemmer';

$txt['admin_setting_password_strength'] = 'Påkrevd styrke for brukernes passord';
$txt['admin_setting_password_strength_low'] = 'Lav - 4 tegn minimum';
$txt['admin_setting_password_strength_medium'] = 'Medium - kan ikke inneholde brukernavn';
$txt['admin_setting_password_strength_high'] = 'Høy - må inneholde varierte tegn';

$txt['admin_setting_image_verification_type'] = 'Grad av kompleksitet på bilde til visuell bekreftelse ';
$txt['admin_setting_image_verification_type_desc'] = 'Jo mer kompleks bildet er, jo vanskeligere er det for en bot til å komme videre';
$txt['admin_setting_image_verification_off'] = 'Slått av';
$txt['admin_setting_image_verification_vsimple'] = 'Meget enkel - ren tekst på bilde';
$txt['admin_setting_image_verification_simple'] = 'Simple - Overlapping coloured letters, no noise';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlapping coloured letters, with noise';
$txt['admin_setting_image_verification_high'] = 'Høy - skjeve bokstaver, mye støy';
$txt['admin_setting_image_verification_sample'] = 'Eksempel';
$txt['admin_setting_image_verification_nogd'] = '<b>Merk:</b> at denne server ikke har GD funksjon innstallert, og dermed vil de forskjellige nivåer av kompleksitet ikke bety noe.';

$txt['admin_setting_coppaAge'] = 'Aldersgrense for å tillate registrering uten restriksjoner';
$txt['admin_setting_coppaAge_desc'] = '(Sett denne til 0 for å deaktivere aldersgrense)';
$txt['admin_setting_coppaType'] = 'Handling som utføres hvis en bruker under aldersgrensen registrerer seg';
$txt['admin_setting_coppaType_reject'] = 'Avvis registreringen';
$txt['admin_setting_coppaType_approval'] = 'Krev samtykke fra foreldre/foresatte';
$txt['admin_setting_coppaPost'] = 'Postadresse samtykkeskjema skal sendes';
$txt['admin_setting_coppaPost_desc'] = 'Gjelder kun dersom aldersgrense er aktivert';
$txt['admin_setting_coppaFax'] = 'Faks-number samtykkeskjema skal sendes til';
$txt['admin_setting_coppaPhone'] = 'Kontakt-telefon foreldre/foresatte kan ringe for spørsmål angående aldersgrense';
$txt['admin_setting_coppa_require_contact'] = 'Du må oppgi enten postadresse eller faks-nummer dersom foreldre/foresattes samtykke er påkrevet.';

$txt['admin_register'] = 'Registrer nytt medlem';
$txt['admin_register_desc'] = 'Fra her kan du registrere nye medlemmer til forumet og hvis ønskelig sende dem en mail med opplysningene.';
$txt['admin_register_username'] = 'Nytt brukernavn';
$txt['admin_register_email'] = 'E-postadresse';
$txt['admin_register_password'] = 'Passord';
$txt['admin_register_username_desc'] = 'Brukernavn for det nye medlemmet';
$txt['admin_register_email_desc'] = 'E-postadresse til medlemmet';
$txt['admin_register_password_desc'] = 'Passord for nytt medlem';
$txt['admin_register_email_detail'] = 'Send e-post med nytt passord til medlemmet';
$txt['admin_register_email_detail_desc'] = 'E-postadresse er påkrevd uansett';
$txt['admin_register_email_activate'] = 'Krev aktivering av brukerkonto';
$txt['admin_register_group'] = 'Primær medlemsgruppe';
$txt['admin_register_group_desc'] = 'Medlemsgruppe medlemmet vil primært høre til';
$txt['admin_register_group_none'] = '(ingen primær medlemsgruppe)';
$txt['admin_register_done'] = 'Medlem %s ble vellykket registrert!';

$txt['admin_browse_register_new'] = 'Registrer nytt medlem';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Et nytt medlem har registrert seg';
$txt['admin_notify_profile'] = '%s har akkurat registrert seg som et nytt medlem på ditt forum. Klikk linken nedenunder for å se profilen til dette medlemmet.';
$txt['admin_notify_approval'] = 'Før dette medlemmet kan starte å skrive innlegg, må medlemmets konto være godkjent. Klikk linken nedenunder for å gå til godkjenning av medlemmer.';

$txt['coppa_title'] = 'Forum med aldersgrense';
$txt['coppa_after_registration'] = 'Takk for at du registrerte deg på ' . $context['forum_name'] . '.<br /><br />Fordi du er under {MINIMUM_AGE} år, er det lovpålagt 
å innhente dine foreldres eller foresattes samtykke før du kan begynne å bruke ditt medlemskap. For å tilrettelegge for aktivering av medlemskapet vennligst skriv ut skjemaet nedenfor:';
$txt['coppa_form_link_popup'] = 'Vis skjema i nytt vindu';
$txt['coppa_form_link_download'] = 'Last ned skjema som tekstfil';
$txt['coppa_send_to_one_option'] = 'Deretter må dine foreldre/foresatte fylle ut og sende inn skjemaet via:';
$txt['coppa_send_to_two_options'] = 'Deretter må dine foreldre/foresatte fylle ut og sende inn skjemaet via en av:';
$txt['coppa_send_by_post'] = 'Post, til følgende adresse:';
$txt['coppa_send_by_fax'] = 'Faks, til følgende nummer:';
$txt['coppa_send_by_phone'] = 'Alternativt, få dem til å kontakte administrator på telefon {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Samtykkeskjema for registrering på ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Adresse';
$txt['coppa_form_date'] = 'Dato';
$txt['coppa_form_body'] = 'Jeg {PARENT_NAME},<br /><br />gir {CHILD_NAME} (child name) tilatelse til å bli registrert som medlem av forumet: ' . $context['forum_name'] . ', med brukernavn: {USER_NAME}.<br /><br />Jeg er klar over at personlig informasjon skrevet inn av {USER_NAME} kan bli synlig for andre brukere av forumet.<br /><br />Signatur:<br />{PARENT_NAME} (foreldre/foresatte).';

$txt['visual_verification_label'] = 'Visuell bekreftelse';
$txt['visual_verification_description'] = 'Skriv tegn som vises i bildet';
$txt['visual_verification_sound'] = 'Lytt til tegn';
$txt['visual_verification_sound_again'] = 'Spill igjen';
$txt['visual_verification_sound_close'] = 'Steng vindu';
$txt['visual_verification_request_new'] = 'Be om et nytt bilde';
$txt['visual_verification_sound_direct'] = 'Problemer med å høre dette? Prøv en direkte link til det.';

?>