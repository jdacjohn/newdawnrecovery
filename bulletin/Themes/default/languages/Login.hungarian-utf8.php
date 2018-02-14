<?php
// Version: 1.1.2; Login

$txt[37] = 'Ki kell töltened a felhasználónév mezőt.';
$txt[38] = 'Nem írtad be a jelszavad.';
$txt[39] = 'Hibás jelszó';
$txt[98] = 'Válassz felhasználónevet';
$txt[155] = 'Karbantartás mód';
$txt[245] = 'Sikeres regisztráció';
$txt[431] = 'Siker! Mostmár tagja vagy a fórumnak.';
// Use numeric entities in the below string.
$txt[492] = '&#233;s a jelszavad';
$txt[500] = 'Kérlek valós e-mail címet írj be, %s.';
$txt[517] = 'Kötelező információ';
$txt[520] = 'Csak az SMF által való azonosításra.';
$txt[585] = 'Elfogadom';
$txt[586] = 'Nem fogadom el';
$txt[633] = 'Figyelmeztetés!';
$txt[634] = 'A szekciót csak regisztrált tagok érhetik el.';
$txt[635] = 'Kérlek jelentkezz be alább vagy';
$txt[636] = 'regisztrálj egy azonosítót';
$txt[637] = 'a következőn: ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Megv&#225;ltoztathatod bejelentkez&#233;s ut&#225;n a profil oldaladon, vagy ezt a lapot megtekintve:';
$txt[719] = 'A felhaszn&#225;l&#243;neved: ';
$txt[730] = 'Az e-mail címet (%s) már egy másik regisztrált tag használja. Ha úgy érzed hogy ez egy hiba, menj a bejelentkező oldalra és kérj jelszó emlékeztetőt az e-mail címmel.';

$txt['login_hash_error'] = 'A jelszó biztonság nemrégiben frissült. Kérlek írd be ismét a jelszavad.';

$txt['register_age_confirmation'] = 'Legalább %d éves vagyok';

// Use numeric entities in the below six strings.
$txt['register_subject'] = '&#220;dv&#246;zl&#252;nk a f&#243;rumon - ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Mostant&#243;l regisztr&#225;lva vagy egy azonos&#237;t&#243;val a k&#246;vetkez&#245;n: ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Az azonos&#237;t&#243;d felhaszn&#225;l&#243;neve %2$s &#233;s jelszavad %3$s.' . "\n\n" . 'Bejelentkez&#233;s ut&#225;n megv&#225;ltoztathatod a jelszavad a profilodban, vagy ezt a lapot megtekintve:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Mostant&#243;l regisztr&#225;lva vagy egy azonos&#237;t&#243;val a k&#246;vetkez&#245;n: ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Az azonos&#237;t&#243;d felhaszn&#225;l&#243;neve %2$s &#233;s a jelszavad %3$s (ami k&#233;s&#245;bb megv&#225;ltoztathat&#243;.)' . "\n\n" . 'Miel&#245;tt bejelentkezhetn&#233;l, el&#245;bb aktiv&#225;lnod kell az azonos&#237;t&#243;d. Ehhez k&#233;rlek k&#246;vesd ezt a linket:' . "\n\n" . '%5$s' . "\n\n" . 'Ha probl&#233;m&#225;id ad&#243;dnak az aktiv&#225;l&#225;ssal, k&#233;rlek haszn&#225;ld a k&#246;vetkez&#245; k&#243;dot: "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'A regisztr&#225;ci&#243;s k&#233;relmed megkapt&#225;k a k&#246;vetkez&#245;n: ' . $context['forum_name'] . ', %1$s.' . "\n\n" . 'A felhaszn&#225;l&#243;neved, amivel regisztr&#225;lt&#225;l %2$s és a jelsz&#243; %3$s.' . "\n\n" . 'Miel&#245;tt bejelentkezhetn&#233;l és megkezdhetn&#233;d a f&#243;rum haszn&#225;lat&#225;t, a k&#233;relmed &#225;t lesz tekintve &#233;s meg lesz er&#245;s&#237;tve. Mikor ez megt&#246;rténik, akkor egy &#250;jabb e-mailt fogsz kapni err&#245;l a c&#237;mr&#245;l.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Mostant&#243;l regisztr&#225;lva vagy egy azonos&#237;t&#243;val a k&#246;vetkez&#245;n: ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'A felhaszn&#225;l&#243;neved "%2$s".' . "\n\n" . 'Miel&#245;tt bejelentkezhetn&#233;l, előbb aktiv&#225;lnod kell az azonos&#237;t&#243;d. Ehhez k&#233;rlek k&#246;vesd ezt a linket:' . "\n\n" . '%4$s' . "\n\n" . 'Ha probl&#233;m&#225;id ad&#243;dnak az aktiv&#225;l&#225;ssal, k&#233;rlek haszn&#225;ld a k&#246;vetkez&#245; k&#243;dot: "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'A regisztr&#225;ci&#243;s k&#233;relmed megkapt&#225;k a k&#246;vetkez&#245;n: ' . $context['forum_name'] . ', %1$s.' . "\n\n" . 'A felhaszn&#225;l&#243;neved, amivel regisztr&#225;lt&#225;l %2$s.' . "\n\n" . 'Miel&#245;tt bejelentkezhetn&#233;l &#233;s megkezdhetn&#233;d a f&#243;rum haszn&#225;lat&#225;t, a k&#233;relmed &#225;t lesz tekintve &#233;s meg lesz er&#245;s&#237;tve. Mikor ez megt&#246;rténik, akkor egy &#250;jabb e-mailt fogsz kapni err&#245;l a címr&#245;l.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Sajnáljuk, de te nem regisztrálhatsz ezen a fórumon.';
$txt['under_age_registration_prohibited'] = 'Sajnáljuk, de %d évnél fiatalabb felhasználók nem regisztrálhatnak a fórumon.';

$txt['activate_account'] = 'Azonosító aktiválása';
$txt['activate_success'] = 'Az azonosítód sikeresen aktiválva. Mostmár bejelentkezhetsz.';
$txt['activate_not_completed1'] = 'Az e-mail címed meg kell erősítened, mielőtt bejelentkezhetnél.';
$txt['activate_not_completed2'] = 'Egy másik aktivációs e-mailre van szükséged?';
$txt['activate_after_registration'] = 'Köszönjük, hogy regisztráltál. Hamarosan kapni fogsz egy e-mailt egy linkkel az azonosítód aktiválására. Ha nem kapsz levelet rövid időn belül, ellenőrizd a spam mappád.';
$txt['invalid_userid'] = 'A felhasználó nem létezik';
$txt['invalid_activation_code'] = 'Érvénytelen aktivációs kód';
$txt['invalid_activation_username'] = 'Felhasználónév vagy e-mail cím';
$txt['invalid_activation_new'] = 'Ha rossz e-mail címmel regisztráltál, írd be az újat és a jelszavad ide.';
$txt['invalid_activation_new_email'] = 'Új e-mail cím';
$txt['invalid_activation_password'] = 'Régi jelszó';
$txt['invalid_activation_resend'] = 'Aktivációs kód újraküldése';
$txt['invalid_activation_known'] = 'Ha már tudod az aktiváló kódod, kérlek írd be ide.';
$txt['invalid_activation_retry'] = 'Aktiváló kód';
$txt['invalid_activation_submit'] = 'Aktiválás';

$txt['coppa_not_completed1'] = 'Az adminisztrátor még mindig nem kapott szülői/gondozói beleegyezést az azonosítódhoz.';
$txt['coppa_not_completed2'] = 'További adatokra van szükséged?';

$txt['awaiting_delete_account'] = 'Az azonosítód törlése jelölték!<br />Ha vissza kívánod állítani az azonosítód, kérlek pipáld be a z&quot;Azonosítóm újbóli aktiválása&quot; dobozt, és jelentkezz be újra.';
$txt['undelete_account'] = 'Azonosítóm újbóli aktiválása';

$txt['change_email_success'] = 'Az e-mail címed megváltozott, és egy új aktivációs e-mailt küldtünk.';
$txt['resend_email_success'] = 'Az új aktivációs e-mail sikeresen elküldve.';
// Use numeric entities in the below three strings.
$txt['change_password'] = '&#218;j jelsz&#243; adatai';
$txt['change_password_1'] = 'Bejelentkez&#233;si adataid a k&#246;vetkez&#245;n:';
$txt['change_password_2'] = 'megv&#225;ltoztak &#233;s új jelsz&#243;t kapt&#225;l. Al&#225;bb tal&#225;lod az &#250;j bejelentkez&#233;si adatokat.';

$txt['maintenance3'] = 'A fórum karbantartás módban van.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Kérlek olvasd és fogadd el feltételeket, mielőtt regisztrálnál.';
$txt['register_passwords_differ_js'] = 'A beírt jelszavak nem egyeznek!';

$txt['approval_after_registration'] = 'Köszönjük, hogy regisztráltál. Az adminnak meg kell erősítenie a regisztrációd mielőtt megkezdhetnéd azonosítód használatát, rövidesen kapni fogsz egy e-mailt az admin döntéséről.';

$txt['admin_settings_desc'] = 'Itt változtathatod meg az új felhasználók regisztrációjával kapcsolatos beállításokat.';

$txt['admin_setting_registration_method'] = 'Új tagok regisztrációjának módja';
$txt['admin_setting_registration_disabled'] = 'Regisztráció kikapcsolva';
$txt['admin_setting_registration_standard'] = 'Azonnali regisztráció';
$txt['admin_setting_registration_activate'] = 'Felhasználói aktiválás';
$txt['admin_setting_registration_approval'] = 'Felhasználó megerősítése';
$txt['admin_setting_notify_new_registration'] = 'Adminisztrátorok értesítése, ha új tag csatlakozik';
$txt['admin_setting_send_welcomeEmail'] = 'Üdvözlő e-mail küldése a tagoknak';

$txt['admin_setting_password_strength'] = 'Jelszavak kötelező erőssége';
$txt['admin_setting_password_strength_low'] = 'Alacsony - minimum 4 karakter';
$txt['admin_setting_password_strength_medium'] = 'Közepes - nem tartalmazhatja a felhasználónevet';
$txt['admin_setting_password_strength_high'] = 'Magas - különböző karakterek keveréke';

$txt['admin_setting_image_verification_type'] = 'A vizuális megerősítő kép bonyolultsága';
$txt['admin_setting_image_verification_type_desc'] = 'Minél bonyolultabb a kép, annál nehezebben kerülik meg a kémrobotok';
$txt['admin_setting_image_verification_off'] = 'Kikapcsolva';
$txt['admin_setting_image_verification_vsimple'] = 'Nagyon egyszerű - Sima szöveg képen';
$txt['admin_setting_image_verification_simple'] = 'Egyszerű - Egybevágó színes betűk, zaj nélkül';
$txt['admin_setting_image_verification_medium'] = 'Közepes - Egybevágó színes betűk, zajjal';
$txt['admin_setting_image_verification_high'] = 'Nehéz - Dőlt betűk, nagymértékű zaj';
$txt['admin_setting_image_verification_sample'] = 'Példa';
$txt['admin_setting_image_verification_nogd'] = '<b>Megjegyzés:</b> mivel a szerveren nincs telepítve a GD könyvtár, ezért a különböző típusoknak nem lesz semmi hatása.';

$txt['admin_setting_coppaAge'] = 'Kor, mely alatt alkalmazódnak a regisztrációs megkötések';
$txt['admin_setting_coppaAge_desc'] = '(Állítsd nullára a kikapcsoláshoz)';
$txt['admin_setting_coppaType'] = 'Művelet, ha a felhasználó a minimum kor alatt regisztrál';
$txt['admin_setting_coppaType_reject'] = 'Regisztráció visszautasítása';
$txt['admin_setting_coppaType_approval'] = 'Szülői/gondozói beleegyezés szükségeltetése';
$txt['admin_setting_coppaPost'] = 'Postai cím, ahove a megerősítő űrlapokat kell küldeni';
$txt['admin_setting_coppaPost_desc'] = 'Csak akkor alkalmazódik, ha a kor megkötés be van kapcsolva';
$txt['admin_setting_coppaFax'] = 'Fax szám, ahova az űrlapokat küldhetik';
$txt['admin_setting_coppaPhone'] = 'Telefonszám, amin keresztül a szülők elérhetnek';
$txt['admin_setting_coppa_require_contact'] = 'Be kell írnod egy postai címet vagy fax számot, ha szülői/gondozói megerősítés szükséges.';

$txt['admin_register'] = 'Új felhasználó regisztrálása';
$txt['admin_register_desc'] = 'Innen regisztrálhatsz új tagokat a fórumodra, és ha kell, el is küldheted az adataikat.';
$txt['admin_register_username'] = 'Új felhasználónév';
$txt['admin_register_email'] = 'E-mail cím';
$txt['admin_register_password'] = 'Jelszó';
$txt['admin_register_username_desc'] = 'Az új tag felhasználóneve';
$txt['admin_register_email_desc'] = 'A tag e-mail címe';
$txt['admin_register_password_desc'] = 'Az új tag jelszava';
$txt['admin_register_email_detail'] = 'Új jelszó elküldése a felhasználónak';
$txt['admin_register_email_detail_desc'] = 'Az e-mail cím kötelező, még ha nincs is bepipálva';
$txt['admin_register_email_activate'] = 'A tag meg kell erősítse az azonosítóját';
$txt['admin_register_group'] = 'Elsődleges felhasználói csoport';
$txt['admin_register_group_desc'] = 'Elsődleges felhasználói csoport, ahova a tag tartozni fog';
$txt['admin_register_group_none'] = '(nincs elsődleges csoport)';
$txt['admin_register_done'] = '%s sikeresen regisztrált!';

$txt['admin_browse_register_new'] = 'Új felhasználó regisztrálása';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Egy &#250;j felhaszn&#225;l&#243; csatlakozott';
$txt['admin_notify_profile'] = '%s &#233;ppencsak feliratkozott a f&#243;rumra &#250;j tagk&#233;nt. Kattints a linkre profilj&#225;nak megtekint&#233;s&#233;hez.';
$txt['admin_notify_approval'] = 'Miel&#245;tt ez a felhaszn&#225;l&#243; elkezdhetni üzenni, előbb meg kell er&#245;s&#237;tse azonos&#237;t&#243;j&#225;t. Kattints az al&#225;bbi linkre, hogy eljuss a meger&#245;s&#237;t&#233;si k&#233;perny&#245;re.';

$txt['coppa_title'] = 'Korhatáros fórum';
$txt['coppa_after_registration'] = 'Köszönjük, hogy regisztráltál a következőn: ' . $context['forum_name'] . '.<br /><br />Mivel {MINIMUM_AGE} évnél fiatalabb vagy, ez egy törvényes követelmény,
	hogy a szüleid vagy gondozód engedélyét kérjük, mielőtt megkezdhetnéd azonosítód használatát. Az azonosítód aktiválásához kérlek nyomtasd ki az alábbi űrlapot:';
$txt['coppa_form_link_popup'] = 'Űrlap megnyitása új ablakban';
$txt['coppa_form_link_download'] = 'Űrlap letöltése szöveges fájlként';
$txt['coppa_send_to_one_option'] = 'Majd kérd meg a szüleid/gondozód, hogy küldje el a kitöltött űrlapot ide:';
$txt['coppa_send_to_two_options'] = 'Majd kérd meg a szüleid/gondozód, hogy küldje el a kitöltött űrlapot az alábbiak valamelyikére:';
$txt['coppa_send_by_post'] = 'Küldje el a következő címre:';
$txt['coppa_send_by_fax'] = 'Faxolja el a következő számra:';
$txt['coppa_send_by_phone'] = 'Alternatív megoldásként, megkérheted a szüleid, hogy hívják az adminisztrátort a következő telefonszámon: {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Engedélyezési űrlap a következőn való regisztrációhoz: ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Cím';
$txt['coppa_form_date'] = 'Dátum';
$txt['coppa_form_body'] = 'Én {PARENT_NAME},<br /><br />Engedélyt adok {CHILD_NAME} (a gyerek neve) gyermekemnek, hogy a fórum teljesjogú tagja legyen: ' . $context['forum_name'] . ', a következő felhasználónévvel: {USER_NAME}.<br /><br />Megértem, hogy bizonyos, {USER_NAME} által beírt információk megjelenhetnek a fórum más felhasználói számára.<br /><br />Aláírás:<br />{PARENT_NAME} (Szülő/gondozó).';

$txt['visual_verification_label'] = 'Vizuális megerősítés';
$txt['visual_verification_description'] = 'Írd be a képen látható betűket';
$txt['visual_verification_sound'] = 'Meghallgatás';
$txt['visual_verification_sound_again'] = 'Újrajátszás';
$txt['visual_verification_sound_close'] = 'Ablak bezárása';
$txt['visual_verification_request_new'] = 'Másik kép kérése';
$txt['visual_verification_sound_direct'] = 'Problémáid akadnak a meghallgatásával? Próbáld meg a közvetlen linket.';

?>