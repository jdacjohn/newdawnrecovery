<?php
// Version: 1.1.2; Login

$txt[37] = 'Měl bys vyplnit uživatelské jméno.';
$txt[38] = 'Nezadal jsi heslo';
$txt[39] = 'Nesprávné heslo';
$txt[98] = 'Uživatelské jméno';
$txt[155] = 'Mód údržby';
$txt[245] = 'Registrace proběhla úspěšně';
$txt[431] = 'Úspěch! Teď už jsi uživatelem tohoto fóra.';
// Use numeric entities in the below string.
$txt[492] = 'Tvé heslo je';
$txt[500] = 'Prosím, zadej platnou emailovou adresu, %s.';
$txt[517] = 'Požadovaná informace';
$txt[520] = 'Toto je pouze identifikátor pro SMF. Plné jméno s háčky a čárkami si můžeš posléze změnit v nastavení svého profilu.';
$txt[585] = 'Souhlasím';
$txt[586] = 'Nesouhlasím';
$txt[633] = 'Varování!';
$txt[634] = 'Pouze registrovaní uživatelé mají přístup do této sekce.';
$txt[635] = 'Prosím, přihlaš se níže nebo';
$txt[636] = 'se zaregistruj';
$txt[637] = 'na ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Můžeš jej změnit po přihlášení na své stránce s profilem, nebo na tomto odkazu:';
$txt[719] = 'Tvoje uživatelské jméno je: ';
$txt[730] = 'Emailová adresa (%s) je již použita registrovaným uživatelem. Pokud si myslíte, že se jedná o chybu, nechte si z přihlašovací stránky poslat obnovení hesla.';

$txt['login_hash_error'] = 'Byla zvýšena bezpečnost hesel. Prosím, zadej znovu své heslo.';

$txt['register_age_confirmation'] = 'Je mi nejméně %d let';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Vítej na fóru ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Jsi nyní zaregistrován na fóru ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Tvé uživatelské jméno je %2$s a heslo je %3$s.' . "\n\n" . 'Heslo můžeš změnit po přihlášení v profilu nebo na tomto odkazu:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Jsi nyní zaregistrován na fóru ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Tvé uživatelské jméno je %2$s a heslo je %3$s (můžeš si ho později změnit)' . "\n\n" . 'Než se přihlásíš, musíš si aktivovat účet, proto klikni na tento odkaz:' . "\n\n" . '%5$s' . "\n\n" . 'Pokud bys měl s aktivací nějaké potíže, použij kód "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Tvá žádost o registraci na fóru ' . $context['forum_name'] . ' byla přijata, %1$s.' . "\n\n" . 'Uživatelské jméno: %2$s a heslo: %3$s.' . "\n\n" . 'Než se budeš moci přihlásit a začít používat toto fórum, tvá žádost bude prohlédnuta a schválena. Jakmile se tak stane, obdržíš další mail z této adresy.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Jsi nyní zaregistrován na fóru ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Tvé uživatelské jméno je "%2$s".' . "\n\n" . 'Než se přihlásíš, musíš si aktivovat účet, proto klikni na tento odkaz:' . "\n\n" . '%4$s' . "\n\n" . 'Pokud bys měl s aktivací nějaké potíže, použij kód "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Tvá žádost o registraci na fóru ' . $context['forum_name'] . ' byla přijata, %1$s.' . "\n\n" . 'Uživatelské jméno: %2$s.' . "\n\n" . 'Než se přihlásíš, tvá žádost bude prohlédnuta a schválena. Jakmile se tak stane, obdržíš další mail z této adresy.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Lituji, ale na tomto fóru se nesmíš registrovat';
$txt['under_age_registration_prohibited'] = 'Lituji, ale uživatelé, kteří mají méně než %d let, se nesmí registrovat na tomto fóru.';

$txt['activate_account'] = 'Aktivace účtu';
$txt['activate_success'] = 'Účet byl úspěšně aktivován. Teď se můžeš přihlásit.';
$txt['activate_not_completed1'] = 'Tvoje adresa musí být ověřena než se přihlásíš.';
$txt['activate_not_completed2'] = 'Potřebuješ další aktivační email?';
$txt['activate_after_registration'] = 'Díky za registraci. Brzy dostaneš email s odkazem pro aktivaci tvého účtu.';
$txt['invalid_userid'] = 'Uživatel neexistuje';
$txt['invalid_activation_code'] = 'Chybný aktivační kód';
$txt['invalid_activation_username'] = 'Uživatelské jméno nebo email';
$txt['invalid_activation_new'] = 'Pokud ses zaregistroval s neplatnou emailovou adresou, napiš sem novou a své heslo.';
$txt['invalid_activation_new_email'] = 'Nová emailová adresa';
$txt['invalid_activation_password'] = 'Staré heslo';
$txt['invalid_activation_resend'] = 'Poslat znovu aktivační kód';
$txt['invalid_activation_known'] = 'Pokud již znáš svůj aktivační kód, napiš ho prosím sem.';
$txt['invalid_activation_retry'] = 'Aktivační kód';
$txt['invalid_activation_submit'] = 'Aktivovat';

$txt['coppa_not_completed1'] = 'Administrátor stále neobdžel souhlas rodičů/zákonných zástupců se zřízením tvého účtu.';
$txt['coppa_not_completed2'] = 'Potřebuješ více detailů?';

$txt['awaiting_delete_account'] = 'Tento účet je označen jako smazaný!<br />Pokud chceš obnovit svůj účet, zaškrtni &quot;Reaktivuj účet&quot; a znovu se přihlaš.';
$txt['undelete_account'] = 'Reaktivuj účet';

$txt['change_email_success'] = 'Tvá emailová adresa byla změněna a byl na ní poslán nový aktivační email.';
$txt['resend_email_success'] = 'Nový aktivační mail byl úspěšně odeslán.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detaily o novém heslu';
$txt['change_password_1'] = 'Tvé přihlašovací údaje na';
$txt['change_password_2'] = 'byly změněny a heslo přegenerováno. Níže jsou tvé nové přihlašovací údaje.';

$txt['maintenance3'] = 'Toto fórum je v módu údržby.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Prosím, přečti si a souhlas s pravidly než odsouhlasíš formulář.';
$txt['register_passwords_differ_js'] = 'Hesla, která jsi zadal, nejsou stejná!';

$txt['approval_after_registration'] = 'Díky za registraci. Administrátor musí schválit tvou registraci dříve, než budeš moci použít svůj účet; zanedlouho obdržíš email, který tě bude informovat o rozhodnutí administrátora.';

$txt['admin_settings_desc'] = 'Zde můžeš měnit řadu nastavení, týkajících se ně registrace nových členů.';

$txt['admin_setting_registration_method'] = 'Metoda registrace nových členů';
$txt['admin_setting_registration_disabled'] = 'Registrace zakázána';
$txt['admin_setting_registration_standard'] = 'Okamžitá registrace';
$txt['admin_setting_registration_activate'] = 'Nutná aktivace';
$txt['admin_setting_registration_approval'] = 'Nutné schválení';
$txt['admin_setting_notify_new_registration'] = 'Upozornit administrátory, když se přihlásí nový uživatel';
$txt['admin_setting_send_welcomeEmail'] = 'Poslat novým členům uvítací email';

$txt['admin_setting_password_strength'] = 'Vyžadovaná síla hesla';
$txt['admin_setting_password_strength_low'] = 'Nízká - minimálně 4 znaky';
$txt['admin_setting_password_strength_medium'] = 'Střední - nesmí obsahovat uživatelské jméno';
$txt['admin_setting_password_strength_high'] = 'Vysoká - mix různých znaků';

$txt['admin_setting_image_verification_type'] = 'Složitost vizuálního ověření';
$txt['admin_setting_image_verification_type_desc'] = 'Čím složitější obrázek, tím hůře může být roboty proražen';
$txt['admin_setting_image_verification_off'] = 'Vypnuto';
$txt['admin_setting_image_verification_vsimple'] = 'Velmi jednoduchá - pouze text';
$txt['admin_setting_image_verification_simple'] = 'Jednoduchá - překrývající se barevná písmena bez šumu';
$txt['admin_setting_image_verification_medium'] = 'Střední - překrývající se barevná písmena se šumem';
$txt['admin_setting_image_verification_high'] = 'Vysoká - nahnutá písmena, výrazný šum';
$txt['admin_setting_image_verification_sample'] = 'Vzorek';
$txt['admin_setting_image_verification_nogd'] = '<b>Poznámka:</b> protože tento server nemá nainstalovanou knihovnu GD, různé nastavení složitosti nebude mít žádný účinek.';

$txt['admin_setting_coppaAge'] = 'Věk, pod kterým se budou uplatňovat omezení věku';
$txt['admin_setting_coppaAge_desc'] = '(0 - bez omezení)';
$txt['admin_setting_coppaType'] = 'Akce, když se zkusí přihlásit mladší uživatel';
$txt['admin_setting_coppaType_reject'] = 'Nepovolit registraci';
$txt['admin_setting_coppaType_approval'] = 'Vyžadovat souhlas rodičů/zákonných zástupců';
$txt['admin_setting_coppaPost'] = 'Poštovní adresa, kam mají být zasílány formuláře se souhlasem';
$txt['admin_setting_coppaPost_desc'] = 'Bere se v potaz pouze v případě, že je zavedeno věkové omezení';
$txt['admin_setting_coppaFax'] = 'Faxové číslo, kam mají být faxovány formuláře se souhlasem';
$txt['admin_setting_coppaPhone'] = 'Kontaktní číslo pro rodiče, kvůli dotazům o omezení věku';
$txt['admin_setting_coppa_require_contact'] = 'Musíš zadat poštovní nebo faxový kontakt, když je vyžadován souhlas rodičů/zákonných zástupců.';

$txt['admin_register'] = 'Registrace nového uživatele';
$txt['admin_register_desc'] = 'Zde můžeš registrovat nové uživatele; případně jim poslat detaily emailem.';
$txt['admin_register_username'] = 'Nové jméno';
$txt['admin_register_email'] = 'Emailová adresa';
$txt['admin_register_password'] = 'Heslo';
$txt['admin_register_username_desc'] = 'Jméno nového uživatele';
$txt['admin_register_email_desc'] = 'Emailová adresa uživatele';
$txt['admin_register_password_desc'] = 'Heslo pro nového uživatele';
$txt['admin_register_email_detail'] = 'Pošli uživateli nové heslo';
$txt['admin_register_email_detail_desc'] = 'Emailová adresa je vyžadována, i když toto není zaškrtnuto';
$txt['admin_register_email_activate'] = 'Uživatel musí svůj účet aktivovat';
$txt['admin_register_group'] = 'Primární skupina';
$txt['admin_register_group_desc'] = 'Primární skupina, kam bude uživatel patřit';
$txt['admin_register_group_none'] = '(žádná primární skupina)';
$txt['admin_register_done'] = 'Uživatel %s byl úspěšně zaregistrován!';

$txt['admin_browse_register_new'] = 'Registruj nového uživatele';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Zaregistroval se nový uživatel';
$txt['admin_notify_profile'] = '%s se právě zaregistroval jako nový uživatel na tvém fóru. Klikni na odkaz níže, aby sis mohl prohlédnout jeho profil.';
$txt['admin_notify_approval'] = 'Než tento uživatel může začít přispívat, musí jim registrace být nejdříve schválena. Klikni na odkaz níže, aby ses dostal na seznam uživatelů ke schválení.';

$txt['coppa_title'] = 'Fórum s omezením pro nezletilé';
$txt['coppa_after_registration'] = 'Díka za registraci na fóru ' . $context['forum_name'] . '.<br /><br />Protože máš méně než {MINIMUM_AGE} let, vyžaduje se, aby ti tvojí rodiče nebo zákonní zástupci dali svolení, než budeš moci používat svůj účet. Aby ti účet mohl být schválen, vytiskni prosím formulář:';
$txt['coppa_form_link_popup'] = 'Zobraz formulář v novém okně';
$txt['coppa_form_link_download'] = 'Stáhni formulář jako textový soubor';
$txt['coppa_send_to_one_option'] = 'Pak zařiď, aby tvoji rodiče/zákonní zástupci zaslali formulář takto:';
$txt['coppa_send_to_two_options'] = 'Pak zařiď, aby tvoji rodiče/zákonní zástupci zaslali formulář jedním z těchto způsobů:';
$txt['coppa_send_by_post'] = 'Poštou, na tuto adresu:';
$txt['coppa_send_by_fax'] = 'Faxem, na toto číslo:';
$txt['coppa_send_by_phone'] = 'Popřípadě je nech zavolat na administrátorovo telefonní číslo {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Schvalovací formulář pro registraci na fóru ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Adresa';
$txt['coppa_form_date'] = 'Datum';
$txt['coppa_form_body'] = 'Já, {PARENT_NAME},<br /><br />dávám svolení svému dítěti{CHILD_NAME} (jméno dítěte), aby se stalo plně registrovaným členem fóra: ' . $context['forum_name'] . ', pod uživatelským jménem: {USER_NAME}.<br /><br />Souhlasím s tím, že jisté osobní údaje information zadané {USER_NAME} mohou být viditelné pro ostatní uživatele fóra.<br /><br />Podpis:<br />{PARENT_NAME} (Rodič/Zákonný zástupce).';

$txt['visual_verification_label'] = 'Vizuální ověření';
$txt['visual_verification_description'] = 'Napiš písmena podle obrázku';
$txt['visual_verification_sound'] = 'Přehrát písmena';
$txt['visual_verification_sound_again'] = 'Přehrát znovu';
$txt['visual_verification_sound_close'] = 'Zavřít okno';
$txt['visual_verification_request_new'] = 'Vyžádat nový obrázek';
$txt['visual_verification_sound_direct'] = 'Máš problém s poslechem? Zkus přímý odkaz.';

?>