<?php
// Version: 1.1.2; Login

$txt[37] = 'Nije uneseno Korisni&#269;ko Ime.';
$txt[38] = 'Nije unesena Lozinka.';
$txt[39] = 'Lozinka je neispravna';
$txt[98] = 'Unesite Korisni&#269;ko Ime';
$txt[155] = 'Odr&#382;avanje';
$txt[245] = 'Registracija uspje&#353;na';
$txt[431] = 'Uspjeh! Sada ste &#269;lan ovog foruma.';
// Use numeric entities in the below string.
$txt[492] = 'a va&#353;a lozinka je';
$txt[500] = 'Molimo, unesite valjanu email adresu, %s.';
$txt[517] = 'Obavezne informacije';
$txt[520] = 'Samo za internu identifikaciju. (bez kva&#269;ica)';
$txt[585] = 'Dogovoreno';
$txt[586] = 'Ne Sla&#382;em se';
$txt[633] = 'Upozorenje!';
$txt[634] = 'Samo registrirani korisnici mogu pristupiti ovoj sekciji.';
$txt[635] = 'Molimo prijavite se ispod ili';
$txt[636] = 'registrirajte korisni&#269;ki ra&#269;un';
$txt[637] = 'sa ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Navedenu mo&#382;ete promijeniti prijavom na forum i odlaskom na stranicu profila ili posjetom ove stranice nakon prijave:';
$txt[719] = 'Va&#353;e korisni&#269;ko ime je: ';
$txt[730] = 'Ovu email adresu (%s) ve&#263; koristi registrirani &#269;lan foruma. Ukoliko smatrate da je rije&#269; o gre&#353;ci, na stranici za prijavu mo&#382;ete se poslu&#382;iti podsjetnikom lozinke koji &#263;e lozinku poslati na tu email adresu.';

$txt['login_hash_error'] = 'Nedavno smo nadogradili sigurnost lozinki. Molimo vas da ponovno upi&#353;ete va&#353;u lozinku.';

$txt['register_age_confirmation'] = 'Imam najmanje %d godina';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Dobrodo&#353;li u ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Registrirali ste korisni&#269;ki ra&#269;un na ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Va&#353;e korisni&#269;ko ime je %2$s a va&#353;a lozinka je %3$s.' . "\n\n" . 'Va&#353;u lozinku mo&#382;ete promijeniti nakon &#353;to se prijavite na forum, tako &#353;to &#263;e te urediti svoj profil, ili tako &#353;to &#263;e te posjetiti ovu stranicu nakon &#353;to se prijavite:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Registrirali ste korisni&#269;ki ra&#269;un na ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Va&#353;e korisni&#269;ko ime je %2$s a va&#353;a lozinka je %3$s (kasnije ju mo&#382;ete promijeniti.)' . "\n\n" . 'Prije prijave na forum trebate aktivirati va&#353; korisni&#269;ki ra&#269;un. Za aktivaciju kliknite na ovaj link:' . "\n\n" . '%5$s' . "\n\n" . 'Ako imate problema s aktivacijom, koristite kod "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Va&#353; zahtijev za registraciju na ' . $context['forum_name'] . ' je zaprimljen, %1$s.' . "\n\n" . 'Korisni&#269;ko ime s kojim ste se registrirali je %2$s a lozinka je %3$s.' . "\n\n" . 'Prije prijave i sudjelovanja na forumu, va&#353; zahtijev treba biti pregledan i odobren.  Nakon odobravanja primiti &#263;e te drugi email s ove adrese.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Registrirali ste korisni&#269;ki ra&#269;un na ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Va&#353;e korisni&#269;ko ime je "%2$s".' . "\n\n" . 'Prije prijave na forum trebate aktivirati va&#353; korisni&#269;ki ra&#269;un. Za aktivaciju kliknite na ovaj link:' . "\n\n" . '%4$s' . "\n\n" . 'Ako imate problema s aktivacijom, koristite kod "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Va&#353; zahtijev za registraciju na ' . $context['forum_name'] . ' je zaprimljen, %1$s.' . "\n\n" . 'Korisni&#269;ko ime s kojim ste se registrirali je %2$s.' . "\n\n" . 'Prije prijave i sudjelovanja na forumu, va&#353; zahtijev treba biti pregledan i odobren.  Nakon odobravanja primiti &#263;e te drugi email s ove adrese.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Na&#382;alost, nije vam dopu&#353;teno registrirati se na forum';
$txt['under_age_registration_prohibited'] = 'Na&#382;alost, korisnici mla&#273;i od %d ne mogu se registrirati na ovom forumu.';

$txt['activate_account'] = 'Aktiviranje ra&#269;una';
$txt['activate_success'] = 'Va&#353; ra&#269;un je uspje&#353;no aktiviran. Mo&#382;ete nastaviti s prijavom.';
$txt['activate_not_completed1'] = 'Va&#353;a email adresa mora biti provjerena prije tvoje prijave na forum.';
$txt['activate_not_completed2'] = 'Trebate ponovno aktivacijski email?';
$txt['activate_after_registration'] = 'Hvala vam na registriranju. Uskoro &#263;e te emailom primiti link za aktivaciju svog ra&#269;una.';
$txt['invalid_userid'] = 'Korisnik ne postoji';
$txt['invalid_activation_code'] = 'Neispravan aktivacijski kod';
$txt['invalid_activation_username'] = 'Korisni&#269;ko ime ili email';
$txt['invalid_activation_new'] = 'Ako ste se registrirali sa pogre&#353;nom email adresom, upi&#353;ite novu adresu i lozinku.';
$txt['invalid_activation_new_email'] = 'Nova email adresa';
$txt['invalid_activation_password'] = 'Stara lozinka';
$txt['invalid_activation_resend'] = 'Ponovite slanje aktivacijskg koda';
$txt['invalid_activation_known'] = 'Ako znate svoj aktivacijski kod, upi&#353;ite ga ovdje.';
$txt['invalid_activation_retry'] = 'Aktivacijski kod';
$txt['invalid_activation_submit'] = 'Aktiviraj';

$txt['coppa_not_completed1'] = 'Administrator jo&#353; uvijek nije primio odobrenje roditelja/staratelja za va&#353; korisni&#269;ki ra&#269;un.';
$txt['coppa_not_completed2'] = 'Treba vi&#353;e detalja?';

$txt['awaiting_delete_account'] = 'Va&#353; korisni&#269;ki ra&#269;un odre&#273;en je za brisanje!<br />Ako &#382;elite ponovno uspostaviti va&#353; korisni&#269;ki ra&#269;un, ozna&#269;ite &quot;Reaktiviraj moj ra&#269;un&quot; kvadrat, pa se ponovno prijavite.';
$txt['undelete_account'] = 'Reaktiviraj moj ra&#269;un';

$txt['change_email_success'] = 'Va&#353;a email adresa je promijenjena te je nova aktivacijska email poruka poslana na nju.';
$txt['resend_email_success'] = 'Nova aktivacijska email poruka je poslana.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalji nove lozinke';
$txt['change_password_1'] = 'Va&#353;i detalji prijave u';
$txt['change_password_2'] = 'su promijenjeni, a lozinka resetirana. Ispod se nalaze novi detalji prijave.';

$txt['maintenance3'] = 'Ovaj forum je u stanju odr&#382;avanja.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Molim pro&#269;itati/prihvatiti uvjete Registracijskog ugovora.';
$txt['register_passwords_differ_js'] = '&#352;ifre koje ste upisali se ne podudaraju!';

$txt['approval_after_registration'] = 'Hvala vam na registriranju. Administrator mora najprije odobriti registraciju prije po&#269;etka va&#353;eg kori&#353;tenja foruma i primiti &#263;e te email poruku odmah nakon odluke administratora.';

$txt['admin_settings_desc'] = 'Ovdje mo&#382;ete urediti razne postavke koje se odnose na registraciju novih &#269;lanova.';

$txt['admin_setting_registration_method'] = 'Metoda registracije za nove &#269;lanove';
$txt['admin_setting_registration_disabled'] = 'Registracija Onemogu&#263;ena';
$txt['admin_setting_registration_standard'] = 'Izravna Registracija';
$txt['admin_setting_registration_activate'] = 'Email Aktivacija';
$txt['admin_setting_registration_approval'] = 'Ru&#269;no Odobravanje';
$txt['admin_setting_notify_new_registration'] = 'Obavijesti administratora o novom &#269;lanu';
$txt['admin_setting_send_welcomeEmail'] = 'Poslati email dobrodo&#353;lice novim &#269;lanovima';

$txt['admin_setting_password_strength'] = 'Potrebna snaga korisni&#269;ke lozinke';
$txt['admin_setting_password_strength_low'] = 'Niska - najmanje 4 znaka';
$txt['admin_setting_password_strength_medium'] = 'Srednja - ne smije sadr&#382;avati korisni&#269;ko ime';
$txt['admin_setting_password_strength_high'] = 'Visoka - mje&#353;avina razli&#269;itih znakova';

$txt['admin_setting_image_verification_type'] = 'Kompleksnost slike vizualne provjere';
$txt['admin_setting_image_verification_type_desc'] = 'Što je slika kompliciranija to je spam botovima teže proći je';
$txt['admin_setting_image_verification_off'] = 'Onemogućeno';
$txt['admin_setting_image_verification_vsimple'] = 'Vrlo jednostavno - običan tekst na slici';
$txt['admin_setting_image_verification_simple'] = 'Simple - Overlapping coloured letters, no noise';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlapping coloured letters, with noise';
$txt['admin_setting_image_verification_high'] = 'Visoko - ukošena slova, dosta šuma';
$txt['admin_setting_image_verification_sample'] = 'Primjer';
$txt['admin_setting_image_verification_nogd'] = '<b>Napomena:</b> budući da ovaj server nema instaliran GD library različite postavke kompleksnosti neće imati učinka.';

$txt['admin_setting_coppaAge'] = 'Dob ispod koje se ograni&#269;ava registracija';
$txt['admin_setting_coppaAge_desc'] = '(Postaviti na 0 za deaktiviranje)';
$txt['admin_setting_coppaType'] = '&#352;to u&#269;initi s registracijom korisnika ispod dobne granice';
$txt['admin_setting_coppaType_reject'] = 'Odbiti registraciju';
$txt['admin_setting_coppaType_approval'] = 'Tra&#382;iti odobrenje roditelja ili staratelja';
$txt['admin_setting_coppaPost'] = 'Po&#353;tanska adresa na koju treba poslati odobrenje';
$txt['admin_setting_coppaPost_desc'] = 'Primjenjuje se samo ako je aktivirana dobna granica';
$txt['admin_setting_coppaFax'] = 'Fax broj na koji treba poslati odobrenje';
$txt['admin_setting_coppaPhone'] = 'Broj telefona za roditelje koji imaju pitanja o dobnoj granici';
$txt['admin_setting_coppa_require_contact'] = 'Ako je potrebno roditeljsko/starateljsko odobrenje, morate upisati po&#353;tanske ili fax informacije.';

$txt['admin_register'] = 'Registracija novog &#269;lana';
$txt['admin_register_desc'] = 'Odavde mo&#382;ete registrirati nove &#269;lanove na forum, i prema potrebi poslati njihove detalje emailom.';
$txt['admin_register_username'] = 'Korisni&#269;ko Ime';
$txt['admin_register_email'] = 'E-mail';
$txt['admin_register_password'] = 'Lozinka';
$txt['admin_register_username_desc'] = 'Korisni&#269;ko ime novog &#269;lana';
$txt['admin_register_email_desc'] = 'E-mail adresa &#269;lana';
$txt['admin_register_password_desc'] = 'Lozinka novog korisnika';
$txt['admin_register_email_detail'] = 'Po&#353;alji novu lozinku emailom';
$txt['admin_register_email_detail_desc'] = 'Email adresa je obvezna, &#269;ak i ako ovo nije ozna&#269;eno';
$txt['admin_register_email_activate'] = 'Tra&#382;i od korisnika da aktivira ra&#269;un';
$txt['admin_register_group'] = 'Primarna korisni&#269;ka grupa';
$txt['admin_register_group_desc'] = 'Primarna korisni&#269;ka grupa za novog korisnika';
$txt['admin_register_group_none'] = '(nema primarne korisni&#269;ke grupe)';
$txt['admin_register_done'] = '&#268;lan %s uspje&#353;no je registriran!';

$txt['admin_browse_register_new'] = 'Registracija novog &#269;lana';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Pridru&#382;io se novi &#269;lan';
$txt['admin_notify_profile'] = '%s se upravo registrirao/la kao novi &#269;lan ovog foruma. Kliknite na link ispod da vidite profil novog &#269;lana.';
$txt['admin_notify_approval'] = 'Prije nego &#353;to &#269;lan mo&#382;e po&#269;eti pisati na forumu njegov korisni&#269;ki ra&#269;un treba biti odobren. Kliknite na link ispod da sko&#269;ite na ekran za odobravanje.';

$txt['coppa_title'] = 'Dobno Ograni&#269;enje Foruma';
$txt['coppa_after_registration'] = 'Hvala vam &#353;to ste se registrirali za ' . $context['forum_name'] . '.<br /><br />S obzirom da ste mla&#273;i od dopu&#353;tene dobne granice od {MINIMUM_AGE}, pravno smo obvezni zatra&#382;iti roditeljsko/starateljsko odobrenje za kori&#353;tenje va&#353;eg korisni&#269;kog ra&#269;una. Da bi ste aktivirali korisni&#269;ki ra&#269;un, od&#353;tampajte obrazac ispod:';
$txt['coppa_form_link_popup'] = 'U&#269;itaj obrazac u novom prozoru';
$txt['coppa_form_link_download'] = 'Download Obrazac kao Tekst Datoteku';
$txt['coppa_send_to_one_option'] = 'Roditelji/staratelji trebaju poslati obrazac do:';
$txt['coppa_send_to_two_options'] = 'Obrazac treba poslati na jedan od ovih na&#269;ina:';
$txt['coppa_send_by_post'] = 'Po&#353;tom, na slijede&#263;u adresu:';
$txt['coppa_send_by_fax'] = 'Faxom, na slijede&#263;i broj:';
$txt['coppa_send_by_phone'] = 'Alternativno, mogu i nazvati administratora na {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Obrazac za odobrenje za registraciju na ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Adresa';
$txt['coppa_form_date'] = 'Datum';
$txt['coppa_form_body'] = 'Ja {PARENT_NAME},<br /><br />Dajem odobrenje da  {CHILD_NAME} (ime djeteta) postane registrirani &#269;lan foruma: ' . $context['forum_name'] . ', s korisni&#269;kim imenom: {USER_NAME}.<br /><br />Upoznat(a) sam s time da &#263;e odre&#273;ene osobne informacije koje upi&#353;e {USER_NAME} biti prikazane drugim korisnicima foruma.<br /><br />Potpis:<br />{PARENT_NAME} (Roditelj/Staratelj).';

$txt['visual_verification_label'] = 'Vizualna provjera';
$txt['visual_verification_description'] = 'Unesite znakove koji su prikazani na slici';
$txt['visual_verification_sound'] = 'Poslu&#353;ajte znakove';
$txt['visual_verification_sound_again'] = 'Emitiraj ponovo';
$txt['visual_verification_sound_close'] = 'Zatvoriti prozor';
$txt['visual_verification_request_new'] = 'Zatra&#382;ite novu sliku';
$txt['visual_verification_sound_direct'] = 'Ne &#269;ujete &#269;itane znakove?  Poku&#353;ajte direktan link.';

?>