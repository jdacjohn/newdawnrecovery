<?php
// Version: 1.1.2; Login

$txt[37] = 'Du skal skrive et brugernavn.';
$txt[38] = 'Du udfyldte ikke dit kodeord.';
$txt[39] = 'Kodeord ukorrekt';
$txt[98] = 'Vælg brugernavn';
$txt[155] = 'Vedligeholdelsesmode';
$txt[245] = 'Registrationen blev gennemført';
$txt[431] = 'Tillykke! Du er nu medlem af forumet.';
// Use numeric entities in the below string.
$txt[492] = 'og dit kodeord er';
$txt[500] = 'Angiv venligst en gyldig e-mail adresse, %s. Klik på &quot;Tilbage&quot; og prøv igen.';
$txt[517] = 'krævet information';
$txt[520] = 'Bruges kun til identifikation af SMF.';
$txt[585] = 'Jeg accepterer';
$txt[586] = 'Jeg accepterer IKKE';
$txt[633] = 'Advarsel!';
$txt[634] = 'Kun registrerede medlemmer har adgangtilladelse til denne sektion.';
$txt[635] = 'Venligst log på herunder eller';
$txt[636] = 'registrer en konto';
$txt[637] = 'hos ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Du kan ændre dette efter du er logget på ved at gå til din profilside, eller ved at besøge denne side efter du er logget på:';
$txt[719] = 'Dit brugernavn er: ';
$txt[730] = 'E-mail adressen (%s) bliver allerede brugt af et registreret medlem. Hvis du mener dette er en fejl, bedes du gå til login siden og klikke på "Glemt dit kodeord?".';

$txt['login_hash_error'] = 'Sikkerheden for kodeord er blevet opgraderet for nylig. Skriv venligst dit kodeord igen.';

$txt['register_age_confirmation'] = 'Jeg er mindst %d år';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Velkommen til &quot;' . $context['forum_name'] . '&quot;';

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Du er nu registreret med en konto ved ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Din kontos brugernavn er %2$s og dit password er %3$s.' . "\n\n" . 'Du kan skifte dit password når du har logget ind, ved at gå til din profil, eller ved at besøge denne side når du har logget ind:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Du er nu registreret med en konto ved ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Din kontos brugernavn er %2$s og din kode er %3$s (Kan ændres senere.)' . "\n\n" . 'Før du kan bruge logge ind, skal du først registrere din konto. For at gøre dette, skal du følge dette link:' . "\n\n" . '%5$s' . "\n\n" . 'Stødeer du på problemer med at logge ind, skal du angive koden "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'DIn anmodning om registrering ved ' . $context['forum_name'] . ' er blevet modtaget, %1$s.' . "\n\n" . 'Brugernavnet du registrerede med var %2$s og dit brugernavn er %3$s.' . "\n\n" . 'Før du kan logge ind og bruge forummet, skal din anmodning først gennemses og derefter godkendes. Når dette sker, vil du modtage en mail herom fra denne adresse.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Du er nu registreret med en konto hos ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Dit brugernavn er "%2$s".' . "\n\n" . 'Før du kan logge ind, skal du først aktivere din konto. For at gøre dette, skal du følge dette link:' . "\n\n" . '%4$s' . "\n\n" . 'Skulle der opstå problemer med aktivering, skal du angive koden "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Din forespørgsel om registrering hos ' . $context['forum_name'] . ' er blevet modtaget, %1$s.' . "\n\n" . 'Brugernavnet du registrerede med var %2$s.' . "\n\n" . 'Før du kan logge ind og bruge forummet, skal din anmodning checkes og godtages. Når dette sker, vil du modtage en ny mail fra denne adresse.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Det er desværre ikke tilladt for dig at registrere på dette forum';
$txt['under_age_registration_prohibited'] = 'Beklager, men brugere der er under %d år, er ikke tilladt at registrere i dette forum.';

$txt['activate_account'] = 'Konto aktivering';
$txt['activate_success'] = 'Din konto er successfuldt aktiveret. Du kan nu fortsætte til [log på].';
$txt['activate_not_completed1'] = 'Din mail adresse skal valideres før du kan logge på.';
$txt['activate_not_completed2'] = 'Brug for en ny aktiveringsmail?';
$txt['activate_after_registration'] = 'Tak for din registrering. Du vil modtage en e-mail snarest, med et link til at aktivere din konto.';
$txt['invalid_userid'] = 'Brugernavnet eksisterer ikke';
$txt['invalid_activation_code'] = 'Forkert aktiveringskode';
$txt['invalid_activation_username'] = 'Brugernavn eller e-mail';
$txt['invalid_activation_new'] = 'Hvis du registrerede med den forkerte e-mail adresse, skal du angive en ny, samt dit kodeord her.';
$txt['invalid_activation_new_email'] = 'Ny e-mail adresse';
$txt['invalid_activation_password'] = 'Gammelt kodeord';
$txt['invalid_activation_resend'] = 'Gensend aktiveringskode';
$txt['invalid_activation_known'] = 'Hvis du allerede kender din aktiveringskode, skal du venligst skrive den her.';
$txt['invalid_activation_retry'] = 'Aktiveringskode';
$txt['invalid_activation_submit'] = 'Aktiver';

$txt['coppa_not_completed1'] = 'Administratoren har stadig ikke modtaget samtykke til din konto.';
$txt['coppa_not_completed2'] = 'Brug for flere detaljer?';

$txt['awaiting_delete_account'] = 'Din konto er sat til at blive slettet!<br />Hvis du ønsker at genetablere din konto, skal du markere &quot;Reaktiver min konto&quot; og logge ind igen.';
$txt['undelete_account'] = 'Reaktiver min konto';

$txt['change_email_success'] = 'Din e-mail adresse er blevet ændret, og en ny aktiveringsmail er blevet sendt til den.';
$txt['resend_email_success'] = 'En ny aktiveringsmail er blevet sendt med succes.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detaljer for nyt kodeord';
$txt['change_password_1'] = 'Dine login detaljer ved';
$txt['change_password_2'] = 'er blevet ændret og dit kodeord resat. Nedenfor er dine nye login detaljer.';

$txt['maintenance3'] = 'Dette board er i vedligeholdelsestilstand.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Venligst læs/accepter betinglserne før registrering.';
$txt['register_passwords_differ_js'] = 'De to kodeord er ikke ens!';

$txt['approval_after_registration'] = 'Tak for registreringen. Administratoren skal godkende din registrering før du må begynde at bruge din konto. Du vil modtage en e-mail der kort fortæller dig om admin\'s afgørelse.';

$txt['admin_settings_desc'] = 'Her kan du ændre forskellige indstillinger som relaterer til nye medlemmer.';

$txt['admin_setting_registration_method'] = 'Registreringsmetoden nye medlemmer skal bruge';
$txt['admin_setting_registration_disabled'] = 'Registrering er deaktiveret';
$txt['admin_setting_registration_standard'] = 'Øjeblikkelig registrering';
$txt['admin_setting_registration_activate'] = 'Medlemsaktivering';
$txt['admin_setting_registration_approval'] = 'Medlemsgodkendelse';
$txt['admin_setting_notify_new_registration'] = 'Giv besked til administratorer, når nye medlemmer kommer på';
$txt['admin_setting_send_welcomeEmail'] = 'Send velkomstmail til nye medlemmer';

$txt['admin_setting_password_strength'] = 'Krav til brugeres kodeord';
$txt['admin_setting_password_strength_low'] = 'Lav - minimum 4 karakterer';
$txt['admin_setting_password_strength_medium'] = 'Medium - kodeord kan ikke indeholde brugernavn';
$txt['admin_setting_password_strength_high'] = 'Høj - blanding af forskellige karakterer';

$txt['admin_setting_image_verification_type'] = 'Komplexitet af det visuelle verifikationsbillede';
$txt['admin_setting_image_verification_type_desc'] = 'Jo mere komplekst billedet er, jo sværere er det for bots at komme forbi';
$txt['admin_setting_image_verification_off'] = 'Deaktiveret';
$txt['admin_setting_image_verification_vsimple'] = 'Meget simpel - ren tekst på billedet';
$txt['admin_setting_image_verification_simple'] = 'Simpel - verlappende farvede bogstaver, ingen billedestøj';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlappende farvede bogstaver med billedestøj';
$txt['admin_setting_image_verification_high'] = 'Høj - vinklede bogstaver, en del billedestøj';
$txt['admin_setting_image_verification_sample'] = 'Eksempel';
$txt['admin_setting_image_verification_nogd'] = '<b>Bemærk:</b> da denne server ikke har GD library installeret, vil indstillingerne på kompleksiteten inge effekt have.';

$txt['admin_setting_coppaAge'] = 'Aldersgrænse for nye medlemmer';
$txt['admin_setting_coppaAge_desc'] = '(For at deaktivere, sættes værdien til 0)';
$txt['admin_setting_coppaType'] = 'Handling hvis registranten er under minimumsalderen';
$txt['admin_setting_coppaType_reject'] = 'Afvis registreringen';
$txt['admin_setting_coppaType_approval'] = 'Forlang godkendelse fra forælder/værge';
$txt['admin_setting_coppaPost'] = 'Postadresse hvortil godkendelsen skal sendes';
$txt['admin_setting_coppaPost_desc'] = 'Er kun i funktion, hvis aldersregistrering er aktiveret';
$txt['admin_setting_coppaFax'] = 'Faxnummer hvortil godkendelse skal sendes';
$txt['admin_setting_coppaPhone'] = 'Kontaktnummer til forælder/værge';
$txt['admin_setting_coppa_require_contact'] = 'Du skal enten opgive en fax- eller postadresse, hvis forælder/værge godkendelse forlanges.';

$txt['admin_register'] = 'Registrering af nyt medlem';
$txt['admin_register_desc'] = 'Herfra kan du registrere ny medlemmer til forumet, og hvis ønsket, e-maile dem deres detaljer.';
$txt['admin_register_username'] = 'Nyt brugernavn';
$txt['admin_register_email'] = 'E-mail adresse';
$txt['admin_register_password'] = 'Kodeord';
$txt['admin_register_username_desc'] = 'Brugernavn for det ny medlem';
$txt['admin_register_email_desc'] = 'Medlemmets e-mail adresse';
$txt['admin_register_password_desc'] = 'Kodeord for nyt medlem';
$txt['admin_register_email_detail'] = 'E-mail nyt kodeord til bruger';
$txt['admin_register_email_detail_desc'] = 'E-mailadresse er krævet, selvom der ikke er sat markering';
$txt['admin_register_email_activate'] = 'Kræv at brugeren aktiverer konto';
$txt['admin_register_group'] = 'Primær medlemsgruppe';
$txt['admin_register_group_desc'] = 'Primær medlemsgruppe som nyt medlem vil tilhøre';
$txt['admin_register_group_none'] = '(ingen primær medlemsgruppe)';
$txt['admin_register_done'] = 'Medlemmet %s er blevet registreret!';

$txt['admin_browse_register_new'] = 'Registrer nyt medlem';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Et nyt medlem har meldt sig';
$txt['admin_notify_profile'] = '%s har tilmeldt sig som medlem af dit forum. Klik på linket herunder for at se detaljerne af dennes profil.';
$txt['admin_notify_approval'] = 'Før dette medlem kan begynde at poste, skal denne først have godkendt sin konto. Klik på linket herunder for at gå til oversigten over godkendelser.';

$txt['coppa_title'] = 'Aldersbegrænset forum';
$txt['coppa_after_registration'] = 'Tak fordi du registrerede dig hos ' . $context['forum_name'] . '.<br /><br />Fordi du er under aldersgrænsen på {MINIMUM_AGE}, skal du hente tilladelse hos en forælder/værge før du kan bruge din konto. For at gøre dette, skal du udskrive formularen herunder:';
$txt['coppa_form_link_popup'] = 'Åbn formularen i et nyt vindue';
$txt['coppa_form_link_download'] = 'Hent formularen som en tekstfil';
$txt['coppa_send_to_one_option'] = 'Derefter skal du have en forælder/værge til at sende denne i udfyldt tilstand med:';
$txt['coppa_send_to_two_options'] = 'Arranger derefter en forælder/værge til at sende den udfyldte formular med enten:';
$txt['coppa_send_by_post'] = 'Send til følgende adresse:';
$txt['coppa_send_by_fax'] = 'Fax til følgende adresse:';
$txt['coppa_send_by_phone'] = 'Alternativt kan de ringe til administratoren på nummeret {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Formular der tillader registrering hos ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Addresse';
$txt['coppa_form_date'] = 'Dato';
$txt['coppa_form_body'] = 'Jeg, {PARENT_NAME},<br /><br />giver {CHILD_NAME} (child name) tilladelse til at blive fuldt registreret medlem i forummet: ' . $context['forum_name'] . ', med brugernavnet: {USER_NAME}.<br /><br />Jeg accepterer og forstår at visse personlige informationer udfyldt af {USER_NAME} , bliver vist til andre brugere i forummet.<br /><br />Underskrevet:<br />{PARENT_NAME} (Parent/Guardian).';

$txt['visual_verification_label'] = 'Visuel verifikation';
$txt['visual_verification_description'] = 'Skriv de bogstaver der vises i billedet';
$txt['visual_verification_sound'] = 'Få oplæst bogstaverne (engelsk)';
$txt['visual_verification_sound_again'] = 'Afspil igen';
$txt['visual_verification_sound_close'] = 'Luk vinduet';
$txt['visual_verification_request_new'] = 'Forespørg et nyt billede';
$txt['visual_verification_sound_direct'] = 'Har du problemer med at høre dette?  Prøv et direkte link til lydfilen.';

?>