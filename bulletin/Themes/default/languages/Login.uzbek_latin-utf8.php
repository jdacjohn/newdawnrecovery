<?php
// Version: 1.1.2; Login

$txt[37] = 'Foydalanuvchi ismini kiriting.';
$txt[38] = 'Parolni kiriting.';
$txt[39] = 'Parol xato kiritildi';
$txt[98] = 'Foydalanuvchi ismini tanlang';
$txt[155] = 'Maintenance Mode';
$txt[245] = 'Ro`yxatdan o`tish amalga oshirildi';
$txt[431] = 'Ro`yxatdan o`tganingiz uchun tashakkur, endi siz forumimiz a`zosiz.';
// Use numeric entities in the below string.
$txt[492] = 'parolingiz';
$txt[500] = 'Iltimos ayni paytda faoliyatda bo`lgan e-mail manzil kiriting, %s.';
$txt[517] = 'Talab qilinadigan ma`limotlar';
$txt[520] = 'Ushbu forumda ID ism sifatida ishlatiladi.';
$txt[585] = 'Roziman';
$txt[586] = 'Rozi emasman';
$txt[633] = 'Ogoh bo`ling!';
$txt[634] = 'Ushbu bo`limga faqat ro`yxatdan o`tgan foydalanuvchilargina kira oladilar.';
$txt[635] = 'Marhamat kiring yoki ro`yxatdan o`ting';
$txt[636] = 'ro`yxatdan o`ting';
$txt[637] = 'with ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Siz ushbuni forumga foydalanuvchi sifatida kirib, profil aynasida yoki ushbu sahifaga foydalanuvchi sifatida kirib o`zgartirishingiz mumkin:';
$txt[719] = 'Foydalanuvchi: ';
$txt[730] = 'Ushbu (%s) e-mail manzil boshqa foydalanuvchi tomonidan foydalanilmoqda. Agar xatolik bo`lgan bo`lsa, kirish formasidagi "Parolni unutdingizmi?"ga bosing va parolni eslatuvchi oynasida ushbu e-mailni kiriting.';

$txt['login_hash_error'] = 'Parol himoyasi yaqinda yangilandi. Iltimos parolingizni yana bir marta kiriting.';

$txt['register_age_confirmation'] = '%d yoshdan oshganman';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Assalomu alaykum';

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Assalomu alaykum, %1$s! Siz ' . $context['forum_name'] . 'da ro`yxatdan o`tdingiz.' . "\n\n" . 'Foydalanuvchi sifatidagi ismingiz  %2$s va parolingiz %3$s.' . "\n\n" . 'Siz parolingizni forumga foydalanuvchi sifatida kirib prolifilni o`zgartirish oynasida yoki ushbu oynada o`zgartirishingiz mumkin:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Assalomu alaykum, %1$s! Siz ' . $context['forum_name'] . 'da ro`yxatdan o`tdingiz.' . "\n\n" . 'Foydalanuvchi sifatidagi ismingiz %2$s va parolingiz %3$s (keyin o`zgartirishingiz mumkin).' . "\n\n" . 'Forumga foydalanuvchi sifatida kirishingiz uchun siz ushbu foydlanavchi ismini ishga tushirishingiz kerak bo`ladi Ishga tushirish uchun quyidagi linkga bosing:' . "\n\n" . '%5$s' . "\n\n" . 'Agar ishga tushirish bilan bog`liq muammolarga uchrasangiz quyidagi koddan foydalanishingiz mumkin  "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Ro`yxatdan o`tish haqida so`rovingiz ' . $context['forum_name'] . 'da qabul qilindi, %1$s.' . "\n\n" . 'Foydalanuvhi ismingiz %2$s parolingiz %3$s.' . "\n\n" . 'Forumga kirishga ruxsat berilishidan oldin sorovingiz ko`rilib chiqiladi  Ruxsat berilganligi haqida e-mail manzilingizga xat yuboriladi.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Assalomu alaykum, %1$s! Siz' . $context['forum_name'] . 'da ro`yxatdan o`tdingiz' . "\n\n" . 'Foydalanuvchi "%2$s".' . "\n\n" . 'Forumga foydalanuvchi sifatida kirishingiz uchun siz ushbu foydlanavchi ismini ishga tushirishingiz kerak bo`ladi. Ishga tushirish uchun quyidagi linkga bosing:' . "\n\n" . '%4$s' . "\n\n" . 'Agar ishga tushirish bilan bog`liq muammolarga uchrasangiz quyidagi koddan foydalanishingiz mumkin "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = '%1$s, ro`yxatdan o`tish haqida so`rovingiz ' . $context['forum_name'] . 'da qabul qilindi.' . "\n\n" . 'Foydalanuvhi ismingiz %2$s.' . "\n\n" . 'Forumga kirishga ruxsat berilishidan oldin sorovingiz ko`rilib chiqiladi.  Ruxsat berilganligi haqida e-mail manzilingizga xat yuboriladi.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Kechirasiz, sizga ushbu forumda ro`yxatdan o`tishga ruxsat berilmagan';
$txt['under_age_registration_prohibited'] = 'Kechirasiz ushbu forumda %d yoshdan oshmaganlarga ro`yxatdan o`tishga ruxsat berilmagan.';

$txt['activate_account'] = 'Foydalanuvchi ismi ishga tushirsh';
$txt['activate_success'] = 'Sizning foydalanuvchi ismingiz ishga tushirildi, endi siz forumga foydalanuvchi sifatida kirishingiz mumkin.';
$txt['activate_not_completed1'] = 'Kirishingiz uchun e-mail manzilinigiz tasdiqlanishi kerak.';
$txt['activate_not_completed2'] = 'Ishga tushirish linkini qayta yuboraylikmi?';
$txt['activate_after_registration'] = 'Ro`yxatdan o`tganingiz uchun tashakkur, tez orada bergan e-mail manzilingizga ushbu foydalanuvchi ismini ishga tushirish linki yuboriladi. Agar link yuborilgan xatni topolmasangiz, spam papkangizni tekshirib ko`ring.';
$txt['invalid_userid'] = 'Bunday foydalanuchi mavjud emas';
$txt['invalid_activation_code'] = 'Ishga tushirish linki yaroqsiz';
$txt['invalid_activation_username'] = 'Foydalanuvchi ismi yoki e-mial manzilinigiz';
$txt['invalid_activation_new'] = 'Agar siz xato e-mail manzil bilan ro`yxatdan o`tib qo`ygan bo`lsangiz yangi e-mail manzil va parolingizni kiriting.';
$txt['invalid_activation_new_email'] = 'Yangi e-mail manzil';
$txt['invalid_activation_password'] = 'Eski parol';
$txt['invalid_activation_resend'] = 'Ishga tushirsh kodini qayta yuborish';
$txt['invalid_activation_known'] = 'Agar siz ishga tushirish kodini yoddan bilsangiz, iltimos bu yerga yozing';
$txt['invalid_activation_retry'] = 'Ishga tushirish kodi';
$txt['invalid_activation_submit'] = 'Ishga tushirish';

$txt['coppa_not_completed1'] = 'The administrator has still not received parent/guardian consent for your account.';
$txt['coppa_not_completed2'] = 'Batafsil bilmoqchimisiz?';

$txt['awaiting_delete_account'] = 'Sizning foydalanuchi ismingiz o`chiriladigan foydalanuvchi ismlari qatoriga kiritildi!<br />Agar siz foydalanuchi ismingizni tiklashni istasangiz iltimos, &quot;Foydalanuvchi ismini tiklash&quot; oynasini tekshiring, va foydalanuvchi sifatida kiring.';
$txt['undelete_account'] = 'Foydalanuvchi ismini tiklash';

$txt['change_email_success'] = 'Sizning e-mail manzilingiz o`zgartirilda va yangi e-mailingizga tastiq linki yuboriladi.';
$txt['resend_email_success'] = 'Yangi e-mailingizga tasdiq linki yuborildi.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Yangi parol haqida ma`limot';
$txt['change_password_1'] = 'Foydalanuchi ismingiz haqida ma`lumot';
$txt['change_password_2'] = 'o`zgartirildi va parolingiz tiklandi. Quyida foydalanuvchi ma`lumotlarini ko`rishingiz mumkin.';

$txt['maintenance3'] = 'Ushbu amaliyot tuzatish uchun bajariladi.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Iltmos, ro`yxatdan o`tishdan avval qonun-qoidalarimiz bilan tanishib chiqing.';
$txt['register_passwords_differ_js'] = 'Ikki xil parol kiritdingiz!';

$txt['approval_after_registration'] = 'Ro`yxatdan o`tganingiz uchun tashakkur. Administrator ruxsatidan so`ng forumga kirishingiz mumkin. Bu haqda e-mailingizga xat yuboriladi.';

$txt['admin_settings_desc'] = 'Here you can change a variety of settings related to registration of new members.';

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

$txt['admin_register'] = 'Registration of new member';
$txt['admin_register_desc'] = 'From here you can register new members into the forum, and if desired, email them their details.';
$txt['admin_register_username'] = 'New Username';
$txt['admin_register_email'] = 'Email Address';
$txt['admin_register_password'] = 'Password';
$txt['admin_register_username_desc'] = 'Username for the new member';
$txt['admin_register_email_desc'] = 'Email address of the member';
$txt['admin_register_password_desc'] = 'Password for new member';
$txt['admin_register_email_detail'] = 'Email new password to user';
$txt['admin_register_email_detail_desc'] = 'Email address required even if unchecked';
$txt['admin_register_email_activate'] = 'Require user to activate the account';
$txt['admin_register_group'] = 'Primary Membergroup';
$txt['admin_register_group_desc'] = 'Primary membergroup new member will belong to';
$txt['admin_register_group_none'] = '(no primary membergroup)';
$txt['admin_register_done'] = 'Member %s has been registered successfully!';

$txt['admin_browse_register_new'] = 'Register new member';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'A new member has joined';
$txt['admin_notify_profile'] = '%s has just signed up as a new member of your forum. Click the link below to view their profile.';
$txt['admin_notify_approval'] = 'Before this member can begin posting they must first have their account approved. Click the link below to go to the approval screen.';

$txt['coppa_title'] = 'Yoshlar uchun cheklangan forum';
$txt['coppa_after_registration'] = 'Ro`yxatdan o`tganingiz uchun tashakkur ' . $context['forum_name'] . '.<br /><br />Sizning yoshingiz {MINIMUM_AGE}dan kichik, kirish uchun ota-onangizning yoki siz uchun mas`ul shaxsning ruxsati kerak Iltimos quydadilarni saqlab oling:';
$txt['coppa_form_link_popup'] = 'Oynani yangi oynada ochish';
$txt['coppa_form_link_download'] = 'Oynani matn ko`rinishida yuklab olish';
$txt['coppa_send_to_one_option'] = 'Ushbularni ota-onangizga yoki siz uchun mas`ul shaxsga yuborishga moslab oling, ';
$txt['coppa_send_to_two_options'] = 'Ushbularni ota-onangizga yoki siz uchun mas`ul shaxsga yuborishga moslab oling,';
$txt['coppa_send_by_post'] = 'Quyidagi manzilga yuborish:';
$txt['coppa_send_by_fax'] = 'Quyidagi raqamga fax ko`rinishadi yuborush:';
$txt['coppa_send_by_phone'] = 'Ruxsat berivchi shaxslar quyidagi raqamga qo`ng`iroq qilishlari mumkin {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Ro`yxatdan o`tishga ruxsat berilganligi haqida. ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Manzil';
$txt['coppa_form_date'] = 'Sana';
$txt['coppa_form_body'] = 'Men - {PARENT_NAME},<br /><br />{CHILD_NAME}ga ushbu' . $context['forum_name'] . 'forumida ishtirok etishga ruxsat beraman. Foydalanuvchi ismi: {USER_NAME}.<br /><br />Men ushbu shaxsiy ma`limt {USER_NAME} tomonidan kiritilganligiga va forumning boshqa a`zolariga ham ko`rsatilishiga tushundim.<br /><br />Mas`ul shaxs:<br />{PARENT_NAME} (Boquvchi/mas`ul shaxs).';

$txt['visual_verification_label'] = 'Vizual tekshirish';
$txt['visual_verification_description'] = 'Rasmdagi belgilarni kiriting';
$txt['visual_verification_sound'] = 'Rasmdagi belgilarni eshitib ko`rish';
$txt['visual_verification_sound_again'] = 'Yana bir marta';
$txt['visual_verification_sound_close'] = 'Oynani yopish';
$txt['visual_verification_request_new'] = 'Boshqasni ko`rish';
$txt['visual_verification_sound_direct'] = 'Eshitishda muammolar bormi?  Ovozli faylni ochib ko`rishingiz mumkin.';

?>