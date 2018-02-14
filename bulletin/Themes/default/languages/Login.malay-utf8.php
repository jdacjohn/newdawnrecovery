<?php
// Version: 1.1.2; Login

$txt[37] = 'You should fill in a username.';
$txt[38] = 'You didn\'t enter your password.';
$txt[39] = 'Password incorrect';
$txt[98] = 'Choose username';
$txt[155] = 'Maintenance Mode';
$txt[245] = 'Registration successful';
$txt[431] = 'Success! You are now a member of the Forum.';
// Use numeric entities in the below string.
$txt[492] = 'and your password is';
$txt[500] = 'Please enter a valid email address, %s.';
$txt[517] = 'Required Information';
$txt[520] = 'Used only for identification by SMF.';
$txt[585] = 'I Agree';
$txt[586] = 'I Do Not Agree';
$txt[633] = 'Warning!';
$txt[634] = 'Only registered members are allowed to access this section.';
$txt[635] = 'Please login below or';
$txt[636] = 'register an account';
$txt[637] = 'with ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'You may change it after you login by going to the profile page, or by visiting this page after you login:';
$txt[719] = 'Your username is: ';
$txt[730] = 'That email address (%s) is being used by a registered member already. If you feel this is a mistake, go to the login page and use the password reminder with that address.';

$txt['login_hash_error'] = 'Sekuriti kata kunci saat ini sudah dikemaskinikan.  Sila masukkan kata kunci sekali lagi.';

$txt['register_age_confirmation'] = 'I am at least %d years old';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Welcome to ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'You are now registered with an account at ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Your account\'s username is %2$s and its password is %3$s.' . "\n\n" . 'You may change your password after you login by going to your profile, or by visiting this page after you login:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'You are now registered with an account at ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Your account\'s username is %2$s and its password is %3$s (which can be changed later.)' . "\n\n" . 'Before you can login, you first need to activate your account. To do so, please follow this link:' . "\n\n" . '%5$s' . "\n\n" . 'Should you have any problems with activation, please use the code "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Your registration request at ' . $context['forum_name'] . ' has been received, %1$s.' . "\n\n" . 'The username you registered with was %2$s and the password was %3$s.' . "\n\n" . 'Before you can login and start using the forum, your request will be reviewed and approved.  When this happens, you will receive another email from this address.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'You are now registered with an account at ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Your username is "%2$s".' . "\n\n" . 'Before you can login, you first need to activate your account. To do so, please follow this link:' . "\n\n" . '%4$s' . "\n\n" . 'Should you have any problems with activation, please use the code "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Your registration request at ' . $context['forum_name'] . ' has been received, %1$s.' . "\n\n" . 'The username you registered with was %2$s.' . "\n\n" . 'Before you can login and start using the forum, your request will be reviewed and approved.  When this happens, you will receive another email from this address.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Maaf, anda tidak dibenarkan untuk mendaftar pada forum ini.';
$txt['under_age_registration_prohibited'] = 'Maaf, pengguna di bawah usia %1$d tidak dibolehkan untuk mendaftar pada forum ini.';

$txt['activate_account'] = 'Pengaktifan Akaun';
$txt['activate_success'] = 'Akaun anda sudah diaktifkan dengan jaya. Sekarang anda boleh meneruskan untuk masuk.';
$txt['activate_not_completed1'] = 'Alamat email anda perlu divalidasi sebelum anda boleh masuk.';
$txt['activate_not_completed2'] = 'Perlu email pengaktifan lain?';
$txt['activate_after_registration'] = 'Terima kasih atas pendaftarannya. Anda akan segera menerima sebuah email dengan sebuah link untuk mengaktifkan akaun anda.  Jika anda tidak menerima email setelah beberapa waktu, periksa folder spam anda.';
$txt['invalid_userid'] = 'Pengguna tidak ada';
$txt['invalid_activation_code'] = 'Kod pengaktifan tidak benar';
$txt['invalid_activation_username'] = 'Nama pengguna atau email';
$txt['invalid_activation_new'] = 'Jika anda mendaftar dengan alamat email yang salah, masukkan yang baru dan kata kunci anda di sini.';
$txt['invalid_activation_new_email'] = 'Alamat email baru';
$txt['invalid_activation_password'] = 'Kata kunci lama';
$txt['invalid_activation_resend'] = 'Kirim semula kod pengaktifan';
$txt['invalid_activation_known'] = 'Jika anda sudah mengetahui kod pengaktifan anda, sila masukkan di sini.';
$txt['invalid_activation_retry'] = 'Kod pengaktifan';
$txt['invalid_activation_submit'] = 'Aktifkan';

$txt['coppa_not_completed1'] = 'The administrator has still not received parent/guardian consent for your account.';
$txt['coppa_not_completed2'] = 'Need more details?';

$txt['awaiting_delete_account'] = 'Akaun anda sudah ditanda untuk penghapusan!<br />Jika anda ingin mengembalikan akaun anda, sila tanda kotak &quot;Pengaktifan semula akaun saya&quot;, dan masuk lagi.';
$txt['undelete_account'] = 'Pengaktifan semula akaun saya';

$txt['change_email_success'] = 'Your email address has been changed, and a new activation email has been sent to it.';
$txt['resend_email_success'] = 'A new activation email has successfully been sent.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Butiran Kata kunci Baru';
$txt['change_password_1'] = 'Your login details at';
$txt['change_password_2'] = 'have been changed and your password reset. Below are your new login details.';

$txt['maintenance3'] = 'This board is in Maintenance Mode.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Sila baca dan terima perjanjian sebelum mendaftar.';
$txt['register_passwords_differ_js'] = 'Dua kata kunci yang anda masukkan tidak padan!';

$txt['approval_after_registration'] = 'Terima kasih atas pendaftarannya. Pengurus mesti meluluskan pendaftaran anda sebelum anda mula menggunakan akaun, anda akan segera menerima email mengenai keputusan Pengurus.';

$txt['admin_settings_desc'] = 'Di sini anda dapat mengubah berbagai tetapan berkaitan dengan pendaftaran ahli baru.';

$txt['admin_setting_registration_method'] = 'Method of registration employed for new members';
$txt['admin_setting_registration_disabled'] = 'Registration Disabled';
$txt['admin_setting_registration_standard'] = 'Immediate Registration';
$txt['admin_setting_registration_activate'] = 'Member Activation';
$txt['admin_setting_registration_approval'] = 'Member Approval';
$txt['admin_setting_notify_new_registration'] = 'Notify administrators when a new member joins';
$txt['admin_setting_send_welcomeEmail'] = 'Send welcome email to new members';

$txt['admin_setting_password_strength'] = 'Required strength for user passwords';
$txt['admin_setting_password_strength_low'] = 'Low - 4 character minimum';
$txt['admin_setting_password_strength_medium'] = 'Medium - cannot contain username';
$txt['admin_setting_password_strength_high'] = 'High - mixture of different characters';

$txt['admin_setting_image_verification_type'] = 'Complexity of visual verification image';
$txt['admin_setting_image_verification_type_desc'] = 'The more complex the image the harder it is for bots to bypass';
$txt['admin_setting_image_verification_off'] = 'Disabled';
$txt['admin_setting_image_verification_vsimple'] = 'Very Simple - Plain text on image';
$txt['admin_setting_image_verification_simple'] = 'Simple - Overlapping colored letters, no noise';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlapping colored letters, with noise';
$txt['admin_setting_image_verification_high'] = 'High - Angled letters, considerable noise';
$txt['admin_setting_image_verification_sample'] = 'Sample';
$txt['admin_setting_image_verification_nogd'] = '<b>Note:</b> as this server does not have the GD library installed the different complexity settings will have no effect.';

$txt['admin_setting_coppaAge'] = 'Age below which to apply registration restrictions';
$txt['admin_setting_coppaAge_desc'] = '(Set to 0 to disable)';
$txt['admin_setting_coppaType'] = 'Action to take when a user below minimum age registers';
$txt['admin_setting_coppaType_reject'] = 'Reject their registration';
$txt['admin_setting_coppaType_approval'] = 'Require parent/guardian approval';
$txt['admin_setting_coppaPost'] = 'Postal address to which approval forms should be sent';
$txt['admin_setting_coppaPost_desc'] = 'Only applies if age restriction is in place';
$txt['admin_setting_coppaFax'] = 'Fax number to which approval forms should be faxed';
$txt['admin_setting_coppaPhone'] = 'Contact number for parents to contact with age restriction queries';
$txt['admin_setting_coppa_require_contact'] = 'You must enter either a postal or fax contact if parent/guardian approval is required.';

$txt['admin_register'] = 'Pendaftaran ahli baru';
$txt['admin_register_desc'] = 'Dari sini anda dapat melihat pendaftaran ahli baru ke dalam forum, dan jika diperlukan, email mereka sebagai butirannya.';
$txt['admin_register_username'] = 'Nama Pengguna Baru';
$txt['admin_register_email'] = 'Alamat Email';
$txt['admin_register_password'] = 'Kata kunci';
$txt['admin_register_username_desc'] = 'Nama pengguna untuk ahli baru';
$txt['admin_register_email_desc'] = 'Alamat email ahli';
$txt['admin_register_password_desc'] = 'Kata kunci untuk ahli baru';
$txt['admin_register_email_detail'] = 'Email kata kunci baru ke pengguna';
$txt['admin_register_email_detail_desc'] = 'Alamat email diperlukan meskipun tidak ditanda';
$txt['admin_register_email_activate'] = 'Pengguna mesti mengaktifkan akaun';
$txt['admin_register_group'] = 'Grup Ahli Utama';
$txt['admin_register_group_desc'] = 'Grup ahli utama di mana ahli baru akan dimasukkan';
$txt['admin_register_group_none'] = '(tidak ada grup ahli utama)';
$txt['admin_register_done'] = 'Ahli %1$s sudah mendaftar dengan jaya!';

$txt['admin_browse_register_new'] = 'Register new member';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'A new member has joined';
$txt['admin_notify_profile'] = '%s has just signed up as a new member of your forum. Click the link below to view their profile.';
$txt['admin_notify_approval'] = 'Before this member can begin posting they must first have their account approved. Click the link below to go to the approval screen.';

$txt['coppa_title'] = 'Forum Usia Terbatas';
$txt['coppa_after_registration'] = 'Terima kasih atas pendaftarannya di ' . $context['forum_name'] . '.<br /><br />Disebabkan anda di bawah usia {MINIMUM_AGE}, perlu mematuhi undang-undang
	untuk mendapatkan kebenaran ibubapa/penjaga anda sebelum anda boleh mula menggunakan akaun anda.  Untuk mengatur pengaktifan akaun sila cetak borang berikut:';
$txt['coppa_form_link_popup'] = 'Ambil Borang Dalam Jendela Baru';
$txt['coppa_form_link_download'] = 'Download Borang sebagai Fail Teks';
$txt['coppa_send_to_one_option'] = 'Kemudian atur untuk ibubapa/penjaga anda agar mengirimkan borang lengkap dengan:';
$txt['coppa_send_to_two_options'] = 'Kemudian atur untuk ibubapa/penjaga anda agar mengirimkan borang lengkap dengan:';
$txt['coppa_send_by_post'] = 'Kirimkan, ke alamat berikut:';
$txt['coppa_send_by_fax'] = 'Fax, ke nombor berikut:';
$txt['coppa_send_by_phone'] = 'Alternatifnya, atur agar mereka menelefon Pengurus di {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Borang kebenaran untuk pendaftaran di ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Alamat';
$txt['coppa_form_date'] = 'Tarikh';
$txt['coppa_form_body'] = 'Saya {PARENT_NAME},<br /><br />memberi kebenaran kepada {CHILD_NAME} (child name) untuk menjadi ahli mendaftar penuh pada forum: ' . $context['forum_name']. ', dengan nama pengguna: {USER_NAME}.<br /><br />Saya faham bahwa maklumat peribadi tertentu yang dimasukan oleh {USER_NAME} boleh dipaparkan kepada pengguna lain dalam forum.<br /><br />Tertanda:<br />{PARENT_NAME} (Ibubapa/Penjaga).';

$txt['visual_verification_label'] = 'Visual verification';
$txt['visual_verification_description'] = 'Type the letters shown in the picture';
$txt['visual_verification_sound'] = 'Listen to the letters';
$txt['visual_verification_sound_again'] = 'Mainkan lagi';
$txt['visual_verification_sound_close'] = 'Tutup jendela';
$txt['visual_verification_request_new'] = 'Request another image';
$txt['visual_verification_sound_direct'] = 'Kesulitan mendengarkannya?  Cuba link terus.';

?>