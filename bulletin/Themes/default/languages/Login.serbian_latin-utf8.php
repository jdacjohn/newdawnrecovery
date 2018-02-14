<?php
// Version: 1.1.2; Login

$txt[37] = 'Morate da unesete korisničko ime.';
$txt[38] = 'Niste uneli svoju lozinku.';
$txt[39] = 'Pogrešna lozinka';
$txt[98] = 'Izaberite korisničko ime';
$txt[155] = 'Mod održavanja';
$txt[245] = 'Registracija je uspešna';
$txt[431] = 'Uspeh! Sada ste član ovog foruma.';
// Use numeric entities in the below string.
$txt[492] = 'a vaša lozinka je';
$txt[500] = 'Molim vas unesite ispravnu e-mail adresu, %s.';
$txt[517] = 'Zahtevane informacije';
$txt[520] = 'Koristi se samo za identifikaciju SMF-u. Možete da koristite specijalne karaktere nakon što se prijavite, menjanjem vašeg prikazanog imena u profilu.';
$txt[585] = 'Slažem se';
$txt[586] = 'Ne slažem se';
$txt[633] = 'Upozorenje!';
$txt[634] = 'Samo registrovani članovi mogu da pristupe ovom delu.';
$txt[635] = 'Prijavite se ispod ili';
$txt[636] = 'se registrujte';
$txt[637] = 'na ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Možete da je promenite odlaskom u profil nakon prijavljivanja, ili prilikom posete ove stranice nakon prijavljivanja:';
$txt[719] = 'Vaše korisničko ime je: ';
$txt[730] = 'Ta e-mail adresa (%s) se već koristi od strane jednog registrovanog člana. Ako mislite da je ovo greška, posetite stranicu za prijavljivanje i upotrebite podsetnik za lozinku sa tom adresom.';

$txt['login_hash_error'] = 'Bezbednost lozinke je skoro ažurirana. Unesite ponovo svoju lozinku.';

$txt['register_age_confirmation'] = 'Imam najmanje %d godina';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Dobrodošli na ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = '%1$s, registrovali ste nalog na ' . $context['forum_name'] . '!' . "\n\n" . 'Korisničko ime vašeg naloga je %2$s a lozinka %3$s.' . "\n\n" . 'Nakon što se prijavite, moći ćete da promenite lozinku u svom profilu:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = '%1$s, registrovali ste nalog na ' . $context['forum_name'] . '!' . "\n\n" . 'Korisničko ime vašeg naloga je %2$s a lozinka je %3$s (možete da je promenite kasnije.)' . "\n\n" . 'Pre nego što se prijavite, potrebno je da aktivirate svoj nalog. Da biste to uradili, kliknite na sledeći link:' . "\n\n" . '%5$s' . "\n\n" . 'Ako budete imali bilo kakvih problema sa aktivacijom, upotrebite sledeći kod "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = '%1$s, vaš zahtev za registracijom naloga na ' . $context['forum_name'] . ' je primljen.' . "\n\n" . 'Korisničko ime koje ste izabrali je %2$s a lozinka %3$s.' . "\n\n" . 'Pre nego što možete da se prijavite i počnete sa korišćenjem foruma, vaš zahtev biće razmotren i odobren. Kada se ovo dogodi, primićete još jedan e-mail sa ove adrese.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = '%1$s, sada ste registrovali nalog na ' . $context['forum_name'] . '!' . "\n\n" . 'Vaše korisničko ime je "%2$s".' . "\n\n" . 'Pre nego što se prijavite, moraćete da aktivirate svoj nalog. Da biste to uradili, kliknite na sledeći link:' . "\n\n" . '%4$s' . "\n\n" . 'Ako budete imali bilo kakvih problema sa aktivacijom, upotrebite sledeći kod "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = '%1$s, vaš zahtev za registracijom naloga na ' . $context['forum_name'] . ' je primljen.' . "\n\n" . 'Korisničko ime koje ste izabrali je %2$s a lozinka %3$s.' . "\n\n" . 'Pre nego što možete da se prijavite i počnete sa korišćenjem foruma, vaš zahtev biće razmotren i odobren. Kada se ovo dogodi, primićete još jedan e-mail sa ove adrese.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Izvinite ali vam nije dozvoljeno da se registrujete na ovaj forum.';
$txt['under_age_registration_prohibited'] = 'Izvinite ali korisnicima mlađim od %d godina nije dozvoljeno da se registruju na ovaj forum.';

$txt['activate_account'] = 'Aktivacija naloga';
$txt['activate_success'] = 'Vaš nalog je uspešno aktiviran. Sada možete da se prijavite.';
$txt['activate_not_completed1'] = 'Vaša e-mail adresa mora da bude potvrđena pre nego što se prijavite.';
$txt['activate_not_completed2'] = 'Potreban vam je još jedan aktivacioni e-mail?';
$txt['activate_after_registration'] = 'Zahvaljujemo se na registraciji. Uskoro ćete primiti e-mail sa linkom za aktivaciju vašeg naloga. Ukoliko ne budete primili e-mail nakon izvesnog vremena, proverite vaš folder sa neželjenom poštom (spam).';
$txt['invalid_userid'] = 'Korisnik ne postoji';
$txt['invalid_activation_code'] = 'Pogrešan aktivacioni kod';
$txt['invalid_activation_username'] = 'Korisničko ime ili e-mail';
$txt['invalid_activation_new'] = 'Ako ste pri registraciji upotrebili pogrešnu e-mail adresu, unesite novu zajedno sa vašom lozinkom.';
$txt['invalid_activation_new_email'] = 'Nova e-mail adresa';
$txt['invalid_activation_password'] = 'Stara lozinka';
$txt['invalid_activation_resend'] = 'Ponovo pošalji aktivacioni kod';
$txt['invalid_activation_known'] = 'Ako već znate svoj aktivacioni kod, unesite ga ovde.';
$txt['invalid_activation_retry'] = 'Aktivacioni kod';
$txt['invalid_activation_submit'] = 'Aktiviraj';

$txt['coppa_not_completed1'] = 'Administrator još nije primio saglasnost roditelja/staratelja za vaš nalog.';
$txt['coppa_not_completed2'] = 'Potrebno vam je još detalja?';

$txt['awaiting_delete_account'] = 'Vaš nalog je označen za brisanje!<br />Ako želite da povratite svoj nalog, označite polje &quot;Ponovo aktivaraj moj nalog&quot; i prijavite se ponovo.';
$txt['undelete_account'] = 'Ponovo aktivaraj moj nalog';

$txt['change_email_success'] = 'Vaša e-mail adresa je promenjena a novi aktivacioni e-mail je poslat na nju.';
$txt['resend_email_success'] = 'Novi aktivacioni e-mail je uspešno poslat.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalji o novoj lozinki';
$txt['change_password_1'] = 'Vaši detalji o prijavljivanju na';
$txt['change_password_2'] = 'su promenjeni a vaša lozinka je resetovana. Ispod su novi detalji o prijavljivanju.';

$txt['maintenance3'] = 'Ovaj forum je u modu održavanja.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Molim vas pročitajte i prihvatite saglasnost pre registracije.';
$txt['register_passwords_differ_js'] = 'Lozinke koje ste uneli nisu iste!';

$txt['approval_after_registration'] = 'Zahvaljujemo se na registraciji. Administrator mora da odobri vašu registraciji pre nego što počnete da koristite svoj nalog. Ubrzo ćete primiti e-mail sa obaveštenjem o administratorovoj odluci.';

$txt['admin_settings_desc'] = 'Ovde možete da promenite razna podešavanja vezana za registraciju novih članova.';

$txt['admin_setting_registration_method'] = 'Način registracije novih članova';
$txt['admin_setting_registration_disabled'] = 'Registracija onemogućena';
$txt['admin_setting_registration_standard'] = 'Neposredna registracija';
$txt['admin_setting_registration_activate'] = 'Aktiviranje člana';
$txt['admin_setting_registration_approval'] = 'Odobravanje člana';
$txt['admin_setting_notify_new_registration'] = 'Obavesti administratore kada se nov član pridruži';
$txt['admin_setting_send_welcomeEmail'] = 'Pošalji pozdravni e-mail svim novim članovima';

$txt['admin_setting_password_strength'] = 'Zahtevana jačina korisničkih lozinka';
$txt['admin_setting_password_strength_low'] = 'Niska - najmanje 4 karaktera';
$txt['admin_setting_password_strength_medium'] = 'Srednja - ne može da sadrži korisničko ime';
$txt['admin_setting_password_strength_high'] = 'Visoka - skup različitih znakova';

$txt['admin_setting_image_verification_type'] = 'Kompleksnost vizualne potvrde';
$txt['admin_setting_image_verification_type_desc'] = 'Što je slika kompleksnija, botovima će biti teže da je zaobiđu';
$txt['admin_setting_image_verification_off'] = 'Onemogućeno';
$txt['admin_setting_image_verification_vsimple'] = 'Veoma prosta - Običan tekst na slici';
$txt['admin_setting_image_verification_simple'] = 'Prosta - Preklapajuća obojena slova, bez šuma';
$txt['admin_setting_image_verification_medium'] = 'Srednja - Preklapajuća obojena slova, sa šumom';
$txt['admin_setting_image_verification_high'] = 'Visoka - Nakrivljena slova, visok nivo šuma';
$txt['admin_setting_image_verification_sample'] = 'Primer';
$txt['admin_setting_image_verification_nogd'] = '<b>Napomena:</b> pošto ovaj server nema instaliranu GD biblioteku, različiti nivoi kompleksnosti neće imati efekta.';

$txt['admin_setting_coppaAge'] = 'Starost ispod koje počinje primenjivanje ograničenja registracije';
$txt['admin_setting_coppaAge_desc'] = '(Unesite 0 da biste onemogućili)';
$txt['admin_setting_coppaType'] = 'Akcija za preduzimanje kada se korisnik mlađi od minimuma registruje';
$txt['admin_setting_coppaType_reject'] = 'Odbaci registraciju';
$txt['admin_setting_coppaType_approval'] = 'Zahtevaj odobrenje roditelja/staratelja';
$txt['admin_setting_coppaPost'] = 'Poštanska adresa na koju bi odobrenje trebalo da bude poslato';
$txt['admin_setting_coppaPost_desc'] = 'Primenjuje se samo kada je postavljeno ograničenje starosti';
$txt['admin_setting_coppaFax'] = 'Broj faksa na koji bi odobrenje trebalo da bude poslato';
$txt['admin_setting_coppaPhone'] = 'Broj za stupanje u vezu sa roditeljima oko pitanja vezanih za ograničenje starosti';
$txt['admin_setting_coppa_require_contact'] = 'Morate da uneste ili poštanski broj ili broj faksa ako je odobravanje roditelja/staratelja zatraženo.';

$txt['admin_register'] = 'Registracija novog člana';
$txt['admin_register_desc'] = 'Odavde možete da registrujete nove članove na forum, i ako želite, pošaljete im detalje preko e-mail-a.';
$txt['admin_register_username'] = 'Novo korisničko ime';
$txt['admin_register_email'] = 'E-mail adresa';
$txt['admin_register_password'] = 'Lozinka';
$txt['admin_register_username_desc'] = 'Korisničko ime novog člana';
$txt['admin_register_email_desc'] = 'E-mail adresa novog člana';
$txt['admin_register_password_desc'] = 'Lozinka novog člana';
$txt['admin_register_email_detail'] = 'Pošalji korisniku e-mail-om novu lozinku';
$txt['admin_register_email_detail_desc'] = 'E-mail adresa je potrebna čak i ako opcija nije označena';
$txt['admin_register_email_activate'] = 'Zahtevajte da korisnik aktivira svoj nalog';
$txt['admin_register_group'] = 'Primarna korisnička grupa';
$txt['admin_register_group_desc'] = 'Primarna korisnička grupa kojoj će korisnik pripadati';
$txt['admin_register_group_none'] = '(bez primarne korisničke grupe)';
$txt['admin_register_done'] = 'Član %s je uspešno registrovan!';

$txt['admin_browse_register_new'] = 'Registruj novog člana';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Nov član se pridružio';
$txt['admin_notify_profile'] = '%s se upravo prijavio kao novi član vašeg foruma. Kliknite na link ispod da biste pogledali njegov profil.';
$txt['admin_notify_approval'] = 'Pre nego što ovaj član može da počne sa pisanjem, morate da mu odobrite nalog. Kliknite na link ispod da biste otišli na ekran za odobravanje.';

$txt['coppa_title'] = 'Forum sa ograničenjem starosti';
$txt['coppa_after_registration'] = 'Hvala vam što ste registrovali nalog na ' . $context['forum_name'] . '.<br /><br />Pošto ste mlađi od {MINIMUM_AGE}, moraćete da pribavite dozvolu svog roditelja/staratelja pre nego što možete da koristite svoj nalog. Da biste mogli da aktivirate svoj nalog, odštampajte ovaj zahtev:';
$txt['coppa_form_link_popup'] = 'Učitaj zahtev u novom prozoru';
$txt['coppa_form_link_download'] = 'Preuzmi zahtev kao tekstualnu datoteku';
$txt['coppa_send_to_one_option'] = 'Zatim neka vaš roditelj ili staratelj pošalje popunjen obrazac:';
$txt['coppa_send_to_two_options'] = 'Zatim neka vaš roditelj ili staratelj pošalje popunjen obrazac na jedan od ovih načina:';
$txt['coppa_send_by_post'] = 'poštom, na sledeću adresu:';
$txt['coppa_send_by_fax'] = 'faksom, na sledeći broj:';
$txt['coppa_send_by_phone'] = 'Umesto ovoga, roditelj ili staratelj može pozvati administratora na broj {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Obrazac za odobrenje registracije na ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Adresa';
$txt['coppa_form_date'] = 'Datum';
$txt['coppa_form_body'] = 'Ja {PARENT_NAME},<br /><br />dajem dozvolu {CHILD_NAME} (ime deteta) da postane punopravno registrovani član na forumu: ' . $context['forum_name'] . ', sa korisničkim imenom: {USER_NAME}.<br /><br />Razumem da neke lične informacije unete od {USER_NAME} mogu biti prikazane ostalim članovima foruma.<br /><br />Potpis:<br />{PARENT_NAME} (Roditelj/Staratelj).';

$txt['visual_verification_label'] = 'Vizualna potvrda';
$txt['visual_verification_description'] = 'Ukucajte slova prikazana na slici';
$txt['visual_verification_sound'] = 'Slušajte slova';
$txt['visual_verification_sound_again'] = 'Reprodukuj ponovo';
$txt['visual_verification_sound_close'] = 'Zatvori prozor';
$txt['visual_verification_request_new'] = 'Zatraži drugu sliku';
$txt['visual_verification_sound_direct'] = 'Imate problema sa slušanjem ovoga? Probajte direktan link.';

?>