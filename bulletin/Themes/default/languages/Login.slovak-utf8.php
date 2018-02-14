<?php
// Version: 1.1.2; Login

$txt[37] = 'Mali by ste vyplniť užívateľské meno.';
$txt[38] = 'Nezadali ste heslo';
$txt[39] = 'Nesprávné heslo';
$txt[98] = 'Užívateľské meno';
$txt[155] = 'Mód údržby';
$txt[245] = 'Registrácia prebehla úspešne';
$txt[431] = 'Úspech! Teraz už ste členom tohto fóra.';
// Use numeric entities in the below string.
$txt[492] = 'Vaše heslo je';
$txt[500] = 'Prosím, zadajte platnú emailovú adresu, %s.';
$txt[517] = 'Požadovaná informácia';
$txt[520] = 'Toto je iba identifikátor pre SMF. Plné meno s háčikmi a čiarkami si môžete potom zmeniť v nastavení vášho profilu.';
$txt[585] = 'Súhlasím';
$txt[586] = 'Nesúhlasím';
$txt[633] = 'Varovanie!';
$txt[634] = 'Iba registrovaní užívatelia majú prístup do tejto sekcie.';
$txt[635] = 'Prosím, prihláste sa nižšie alebo';
$txt[636] = 'sa zaregistrujte';
$txt[637] = 'na ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Môžete ho zmeniť po prihlásení na vašej stránke s profilom, alebo na tomto odkaze:';
$txt[719] = 'Vaše užívateľské meno je: ';
$txt[730] = 'Emailová adresa (%s) je už použitá registrovaným užívateľom. Ak si myslíte, že ide o chybu, nechajte si z prihlasovacej stránky poslať obnovenie hesla.';

$txt['login_hash_error'] = 'Bola zvýšena bezpečnosť hesiel. Prosím, zadajte opäť vaše heslo.';

$txt['register_age_confirmation'] = 'Mám najmenej %d rokov';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Vitajte vo fóre ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Teraz ste zaregistrovaný vo fóre ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Vaše užívateľské meno je %2$s a heslo je %3$s.' . "\n\n" . 'Heslo môžete zmeniť po prihlásení v profile alebo na tomto odkaze:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Teraz ste zaregistrovaný vo fóre ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Vaše užívateľské meno je %2$s a heslo je %3$s (môžete si ho neskôr zmeniť)' . "\n\n" . 'Skôr ako sa prihlásite, musíte si aktivovať účet, preto kliknite na tento odkaz:' . "\n\n" . '%5$s' . "\n\n" . 'Ak by ste mali s aktiváciou nejaké problémy, použite kód "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Vaša žiadosť o registráciu vo fóre ' . $context['forum_name'] . ' bola prijatá, %1$s.' . "\n\n" . 'Užívateľské meno: %2$s a heslo: %3$s.' . "\n\n" . 'Skôr ako sa budete môcť prihlásiť a začaťt používať toto fórum, vaša žiadosť bude posúdená a schválená. Akonáhle sa tak stane, obdržíte ďalší mail z tejto adresy.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Teraz ste zaregistrovaný vo fóre ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Vaše užívateľské meno je "%2$s".' . "\n\n" . 'Skôr ako sa prihlásite, musíte si aktivovať účet, preto kliknite na tento odkaz:' . "\n\n" . '%4$s' . "\n\n" . 'Ak by ste mali s aktiváciou nejaké problémy, použite kód "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Vaša žiadosť o registráciu vo fóre ' . $context['forum_name'] . ' bola prijatá, %1$s.' . "\n\n" . 'Užívateľské meno: %2$s.' . "\n\n" . 'Skôr ako sa prihlásite, vaša žiadosť bude posúdená a schválená. Akonáhle sa tak stane, obdržíte ďalší mail z tejto adresy.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Ľutujeme, ale na tomto fóre sa nesmiete registrovať';
$txt['under_age_registration_prohibited'] = 'Ľutujeme, ale užívatelia, ktorí majú menej sko %d let, sa nemôžu registrovať na tomto fóre.';

$txt['activate_account'] = 'Aktivácia účtu';
$txt['activate_success'] = 'Účet bol úspešne aktivovaný. Teraz sa môžete prihlásiť.';
$txt['activate_not_completed1'] = 'Vaša adresa musí byť overená skôr ako sa prihlásite.';
$txt['activate_not_completed2'] = 'Potrebujete ďalší aktivačný email?';
$txt['activate_after_registration'] = 'Vďaka za registráciu. Čoskoro dostanete email s odkazom pre aktiváciu vášho účtu.';
$txt['invalid_userid'] = 'Užívateľ neexistuje';
$txt['invalid_activation_code'] = 'Chybný aktivačný kód';
$txt['invalid_activation_username'] = 'Užívateľské meno alebo email';
$txt['invalid_activation_new'] = 'Ak ste sa zaregistrovali s neplatnou emailovou adresou, napíšte sem novú a svoje heslo.';
$txt['invalid_activation_new_email'] = 'Nová emailová adresa';
$txt['invalid_activation_password'] = 'Staré heslo';
$txt['invalid_activation_resend'] = 'Poslať znova aktivačný kód';
$txt['invalid_activation_known'] = 'Ak už poznáte váš aktivačný kód, napíšte ho prosím sem.';
$txt['invalid_activation_retry'] = 'Aktivačný kód';
$txt['invalid_activation_submit'] = 'Aktivovať';

$txt['coppa_not_completed1'] = 'Administrátor stále neobdržal súhlas rodičov/zákonných zástupcov so zriadením vášho účtu.';
$txt['coppa_not_completed2'] = 'Potrebujete viac detailov?';

$txt['awaiting_delete_account'] = 'Tento účet je označený ako zmazaný!<br />Ak chcete obnoviť váš účet, zaškrtnite &quot;Reaktivujte účet&quot; a opäť sa prihláste.';
$txt['undelete_account'] = 'Reaktivujte účet';

$txt['change_email_success'] = 'Vaša emailová adresa bola zmenená a bol na ňu zaslaný nový aktivačný email.';
$txt['resend_email_success'] = 'Nový aktivačný email bol úspešne odoslaný.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detaily o novom hesle';
$txt['change_password_1'] = 'Vaše prihlasovacie údaje na';
$txt['change_password_2'] = 'boli zmenené a heslo pregenerované. Nižšie sú vaše nové prihlasovacie údaje.';

$txt['maintenance3'] = 'Toto fórum je v móde údržby.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Prosím, prečítajte si a súhlaste s pravidlami skôr ako odsúhlasíte formulár.';
$txt['register_passwords_differ_js'] = 'Heslá, ktoré ste zadali, nie sú zhodné!';

$txt['approval_after_registration'] = 'Vďaka za registráciu. Administrátor musí schváliť vašu registráciu skôr, ako budete môcť použiť váš účet; zachvíľu dostanete email, ktorý vás bude informovať o rozhodnutí administrátora.';

$txt['admin_settings_desc'] = 'Tu môžete meniť množstvo nastavení, týkajúcich sa registrácie nových členov.';

$txt['admin_setting_registration_method'] = 'Metóda registrácie nových členov';
$txt['admin_setting_registration_disabled'] = 'Registrácia zakázaná';
$txt['admin_setting_registration_standard'] = 'Okamžitá registrácia';
$txt['admin_setting_registration_activate'] = 'Potrebná aktivácia';
$txt['admin_setting_registration_approval'] = 'Potrebné schválenie';
$txt['admin_setting_notify_new_registration'] = 'Upozorniť administrátorov, keď sa prihlásí nový užívateľ';
$txt['admin_setting_send_welcomeEmail'] = 'Poslať novým členom uvítací email';

$txt['admin_setting_password_strength'] = 'Vyžadovaná sila hesla';
$txt['admin_setting_password_strength_low'] = 'Nízka - minimálne 4 znaky';
$txt['admin_setting_password_strength_medium'] = 'Stredná - nemôže obsahovať užívateľské meno';
$txt['admin_setting_password_strength_high'] = 'Vysoká - mix rôznych znakov';

$txt['admin_setting_image_verification_type'] = 'Složitost vizuálního ověření';
$txt['admin_setting_image_verification_type_desc'] = 'Čím složitější obrázek, tím hůře může být roboty proražen';
$txt['admin_setting_image_verification_off'] = 'Vypnuto';
$txt['admin_setting_image_verification_vsimple'] = 'Velmi jednoduchá - pouze text';
$txt['admin_setting_image_verification_simple'] = 'Jednoduchá - překrývající se barevná písmena bez šumu';
$txt['admin_setting_image_verification_medium'] = 'Střední - překrývající se barevná písmena se šumem';
$txt['admin_setting_image_verification_high'] = 'Vysoká - nahnutá písmena, výrazný šum';
$txt['admin_setting_image_verification_sample'] = 'Vzorek';
$txt['admin_setting_image_verification_nogd'] = '<b>Poznámka:</b> protože tento server nemá nainstalovanou knihovnu GD, různé nastavení složitosti nebude mít žádný účinek.';

$txt['admin_setting_coppaAge'] = 'Vek, pod ktorým sa budú uplatňovať obmedzenia veku';
$txt['admin_setting_coppaAge_desc'] = '(0 - bez obmedzení)';
$txt['admin_setting_coppaType'] = 'Akcia, keď sa pokúsi prihlásiť mladší užívateľ';
$txt['admin_setting_coppaType_reject'] = 'Nepovoliť registráciu';
$txt['admin_setting_coppaType_approval'] = 'Vyžadovať súhlas rodičov/zákonných zástupcov';
$txt['admin_setting_coppaPost'] = 'Poštová adresa, kam majú byť poslané formuláre so súhlasom';
$txt['admin_setting_coppaPost_desc'] = 'Berie sa do úvahy iba v prípade, že je zavedené vekové obmedzenie';
$txt['admin_setting_coppaFax'] = 'Faxové číslo, kam majú byť faxované formuláre so súhlasom';
$txt['admin_setting_coppaPhone'] = 'Kontaktné číslo pre rodičov, kvôli dotazom o obmedzení veku';
$txt['admin_setting_coppa_require_contact'] = 'Musíte zadať poštovný alebo faxový kontakt, keď je vyžadovaný súhlas rodičov/zákonných zástupcov.';

$txt['admin_register'] = 'Registrácia nového užívateľa';
$txt['admin_register_desc'] = 'Tu môžete registrovať nových užívateľov; prípadne im poslať detaily emailom.';
$txt['admin_register_username'] = 'Nové meno';
$txt['admin_register_email'] = 'Emailová adresa';
$txt['admin_register_password'] = 'Heslo';
$txt['admin_register_username_desc'] = 'Meno nového užívateľa';
$txt['admin_register_email_desc'] = 'Emailová adresa užívateľa';
$txt['admin_register_password_desc'] = 'Heslo pre nového užívateľa';
$txt['admin_register_email_detail'] = 'Pošli užívateľovi nové heslo';
$txt['admin_register_email_detail_desc'] = 'Emailová adresa je vyžadovaná, aj keď to nie je zaškrtnuté';
$txt['admin_register_email_activate'] = 'Užívateľ musí svoj účet aktivovať';
$txt['admin_register_group'] = 'Primárna skupina';
$txt['admin_register_group_desc'] = 'Primárna skupina, kam bude užívateľ patriť';
$txt['admin_register_group_none'] = '(žiadna primárna skupina)';
$txt['admin_register_done'] = 'Užívateľ %s bol úspešne zaregistrovaný!';

$txt['admin_browse_register_new'] = 'Registruj nového užívateľa';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Zaregistroval sa nový užívateľ';
$txt['admin_notify_profile'] = '%s sa práve zaregistroval ako nový užívateľ vo vašom fóre. Kliknite na odkaz nižšie, aby ste si mohli pozrieť jeho profil.';
$txt['admin_notify_approval'] = 'Skôr ako tento užívateľ môže začať prispievať, musí mu byť registrácia najskôr schválena. Kliknite na odkaz nižšie, aby ste sa dostali na zoznam užívateľov k schváleniu.';

$txt['coppa_title'] = 'Fórum s obmedzením pre mladistvých';
$txt['coppa_after_registration'] = 'Vďaka za registráciu vo fóre ' . $context['forum_name'] . '.<br /><br />Pretože máš menej ako {MINIMUM_AGE} rokov, vyžaduje sa, aby ti tvoji rodičia alebo zákonní zástupcovia dali súhlas, skôr ako budeš môcť používať svoj účet. Aby ti účet mohol byť schválený, vytlač prosím formulár:';
$txt['coppa_form_link_popup'] = 'Zobraz formulár v novom okne';
$txt['coppa_form_link_download'] = 'Stiahni formulár ako textový súbor';
$txt['coppa_send_to_one_option'] = 'Potom zariaď, aby tvoji rodičia/zákonní zástupcovia poslali formulár takto:';
$txt['coppa_send_to_two_options'] = 'Potom zariaď, aby tvoji rodičia/zákonní zástupcovia poslali formulár jednym z týchto spôsobov:';
$txt['coppa_send_by_post'] = 'Poštou, na túto adresu:';
$txt['coppa_send_by_fax'] = 'Faxom, na toto číslo:';
$txt['coppa_send_by_phone'] = 'Poprípade ich nechaj zavolať na administrátorové telefonne číslo {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Schvalovací formulár pre registráciu vo fóre ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Adresa';
$txt['coppa_form_date'] = 'Dátum';
$txt['coppa_form_body'] = 'Ja, {PARENT_NAME},<br /><br />dávam zvolenie svojmu dieťati{CHILD_NAME} (meno), aby sa stalo registrovaným členom fóra: ' . $context['forum_name'] . ', pod užívateľským menom: {USER_NAME}.<br /><br />Súhlasím s tým, že isté osobné údaje zadané {USER_NAME} môžu byť viditelné pre ostatných užívateľov fóra.<br /><br />Podpis:<br />{PARENT_NAME} (Rodič/Zákonný zástupca).';

$txt['visual_verification_label'] = 'Obrazove overeni registrace';
$txt['visual_verification_description'] = 'Napis pismenka ktere vidis na obrazku';
$txt['visual_verification_sound'] = 'Poslechni si pismenka';
$txt['visual_verification_sound_again'] = 'Prehraj znovu';
$txt['visual_verification_sound_close'] = 'Zavri okno';
$txt['visual_verification_request_new'] = 'Jiny obrazek';
$txt['visual_verification_sound_direct'] = 'Problem s polechnutim?  Zkus primy link.';

?>