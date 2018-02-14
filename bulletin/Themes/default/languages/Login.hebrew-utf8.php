<?php
// Version: 1.1.2; Login

$txt[37] = 'אתה צריך להכניס את שם המשתמש שלך.';
$txt[38] = 'אתה לא הכנסת את הסיסמא שלך.';
$txt[39] = 'סיסמא לא נכונה';
$txt[98] = 'בחירת שם משתמש';
$txt[155] = 'מצב תחזוקה';
$txt[245] = 'ההרשמה הסתיימה בהצלחה';
$txt[431] = 'מזל טוב! אתה משתמש בקהילות האלה.';
// Use numeric entities in the below string.
$txt[492] = 'והסיסמא שלך היא';
$txt[500] = '%s, אנא רשום כתובת דואר אלקטרונית תקינה..';
$txt[517] = 'מידע דרוש';
$txt[520] = 'לשימוש בלבד ע"י המערכת. אתה יכול להשתמש בסימנים מיוחדים אחרי שאתה נכנס למערכת ע"י שינוי שם התצוגה בפרופיל שלך שלך.';
$txt[585] = 'אני מסכים';
$txt[586] = 'אני לא מסכים';
$txt[633] = 'אזהרה!';
$txt[634] = 'רק למשתמשים רשומים יש הרשאה לצפות בחלק זה.';
$txt[635] = 'בבקשה התחבר כאן או';
$txt[636] = 'הירשם למערכת';
$txt[637] = 'עם ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'אתה יכול לשנות לאחר ההרשמה את שם המשתמש שלך דרך עמוד פרופיל:';
$txt[719] = 'שם משתמש: ';
$txt[730] = 'כתובת הדוא"ל הזאת (%s) כבר בשימוש ע"י משתמש אחר. אם אתה מרגיש שזאת טעות, אנא השתמש במזכיר הסיסמאות בהנמצא בעמוד הכניסה.';

$txt['login_hash_error'] = 'Password security has recently been upgraded.  Please enter your password again.';

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

$txt['ban_register_prohibited'] = 'מצטערים, אתה לא מורשה להירשם בפורום הזה';
$txt['under_age_registration_prohibited'] = 'Sorry, but users under the age of %d are not allowed to register on this forum.';

$txt['activate_account'] = 'הפעלת חשבון';
$txt['activate_success'] = 'החשבון שלך הופעל בהצלחה. ניתן עכשיו להמשיך לבצע כניסה';
$txt['activate_not_completed1'] = 'כתובת האימייל שלך צריכה להיות מאושרת לפני שאתה מנסה להתחבר.';
$txt['activate_not_completed2'] = 'שליחת הודעת הפעלה פעם נוספת?';
$txt['activate_after_registration'] = 'תודה על ההרשמה אתה תקבל בקרוב דואר אלקטרוני עם קישור להפעלת החשבון.';
$txt['invalid_userid'] = 'משתמש אינו קיים';
$txt['invalid_activation_code'] = 'קוד הפעלה שגוי';
$txt['invalid_activation_username'] = 'שם משתמש או דואר אלקטרוני';
$txt['invalid_activation_new'] = 'אם ביצעת הרשמה עם כתובת דוא"ל שגויה, כתוב כתובת חדשה ואת הסיסמא שלך כאן.';
$txt['invalid_activation_new_email'] = 'כתובת אימייל חדשה';
$txt['invalid_activation_password'] = 'סיסמא ישנה';
$txt['invalid_activation_resend'] = 'שליחה נוספת של קוד הפעלה';
$txt['invalid_activation_known'] = 'אם אתה כבר יודע את קוד ההפעלה שלך, אנא כתוב אותו כאן.';
$txt['invalid_activation_retry'] = 'קוד הפעלה';
$txt['invalid_activation_submit'] = 'הפעלה';

$txt['coppa_not_completed1'] = 'The administrator has still not received parent/guardian consent for your account.';
$txt['coppa_not_completed2'] = 'Need more details?';

$txt['awaiting_delete_account'] = 'Your account has been marked for deletion!<br />If you wish to restore your account, please check the &quot;Reactivate my account&quot; box, and login again.';
$txt['undelete_account'] = 'Reactivate my account';

$txt['change_email_success'] = 'כתובת הדאואר האלקטרוני שלך השתנתה, והודעת הפעלה חדשה נשלחה אליה.';
$txt['resend_email_success'] = 'הודעת הפעלה חדשה נשלחה בהצלחה.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'פרטי הסיסמא החדשה';
$txt['change_password_1'] = 'פרטי התחברות שלך ב- ';
$txt['change_password_2'] = 'שונה והסיסמא אופסה. להלן פרטי החשבון החדשים.';

$txt['maintenance3'] = 'הפורום הזה נמצא במצב תחזוקה.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'אנא קרא/קבל את תנאי ההרשמה על מנת לשלוח את הטופס.';
$txt['register_passwords_differ_js'] = 'The two passwords you entered are not the same!';

$txt['approval_after_registration'] = 'תודה על ההרשמה המנהל צריך לאשר את הבקשה שלה חכה בסבלנות להודעה חדשה.';

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
$txt['admin_setting_image_verification_simple'] = 'Simple - Overlapping coloured letters, no noise';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlapping coloured letters, with noise';
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

$txt['admin_register'] = 'הרשמה של משתמש חדש';
$txt['admin_register_desc'] = 'מכאן אתה יכול לרשום משתמשים חדשים לפורום, ואם דרוש, לשלוח להם את פרטי החשבון.';
$txt['admin_register_username'] = 'שם משתמש';
$txt['admin_register_email'] = 'דוא"ל';
$txt['admin_register_password'] = 'סיסמא';
$txt['admin_register_username_desc'] = 'שם משתמש למשתמש החדש';
$txt['admin_register_email_desc'] = 'כתובת הדוא"ל של המשתמש';
$txt['admin_register_password_desc'] = 'סיסמתו של החבר';
$txt['admin_register_email_detail'] = 'שלח סיסמא חדשה למשתמש';
$txt['admin_register_email_detail_desc'] = 'כתובת דוא"ל דרושה אפילו אם לא נבחרה';
$txt['admin_register_email_activate'] = 'דרוש מהמשתמש להפעיל את החשבון';
$txt['admin_register_group'] = 'קבוצה עיקרית';
$txt['admin_register_group_desc'] = 'קבוצה עיקרית שהמשתמש יהיה שייך אליה';
$txt['admin_register_group_none'] = '(אין קבוצה עיקרית)';
$txt['admin_register_done'] = 'Member %s has been registered successfully!';

$txt['admin_browse_register_new'] = 'הרשמת משתמש חדש';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'משתמש חדש הצטרף';
$txt['admin_notify_profile'] = '%s הצטרפו כרגע כמשתמשים חדשים לקהילות שלך. לחץ על הקישור לצפייה בפרופיל שלו.';
$txt['admin_notify_approval'] = 'לפני שהמשתמש הזה יכול לשלוח הודעות הם קודם צריכים שהחשבון שלהם יהיה מאושר. לחץ על הקישור הבא להגיע למסך האישור';

$txt['coppa_title'] = 'Age Restricted Forum';
$txt['coppa_after_registration'] = 'Thank you for registering with ' . $context['forum_name'] . '.<br /><br />Because you fall under the age of {MINIMUM_AGE}, it is a legal requirement
	to obtain your parent or guardian\'s permission before you may begin to use your account.  To arrange for account activation please print off the form below:';
$txt['coppa_form_link_popup'] = 'Load Form In New Window';
$txt['coppa_form_link_download'] = 'Download Form as Text File';
$txt['coppa_send_to_one_option'] = 'Then arrange for your parent/guardian to send the completed form by:';
$txt['coppa_send_to_two_options'] = 'Then arrange for your parent/guardian to send the completed form by either:';
$txt['coppa_send_by_post'] = 'Post, to the following address:';
$txt['coppa_send_by_fax'] = 'Fax, to the following number:';
$txt['coppa_send_by_phone'] = 'Alternatively, arrange for them to phone the administrator at {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Permission form for registration at ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Address';
$txt['coppa_form_date'] = 'Date';
$txt['coppa_form_body'] = 'I {PARENT_NAME},<br /><br />Give permission for {CHILD_NAME} (child name) to become a fully registered member of the forum: ' . $context['forum_name'] . ', with the username: {USER_NAME}.<br /><br />I understand that certain personal information entered by {USER_NAME} may be shown to other users of the forum.<br /><br />Signed:<br />{PARENT_NAME} (Parent/Guardian).';

$txt['visual_verification_label'] = 'Visual verification';
$txt['visual_verification_description'] = 'Type the letters shown in the picture';
$txt['visual_verification_sound'] = 'Listen to the letters';
$txt['visual_verification_sound_again'] = 'Play again';
$txt['visual_verification_sound_close'] = 'Close window';
$txt['visual_verification_request_new'] = 'Request another image';
$txt['visual_verification_sound_direct'] = 'Having problems hearing this?  Try a direct link to it.';

?>