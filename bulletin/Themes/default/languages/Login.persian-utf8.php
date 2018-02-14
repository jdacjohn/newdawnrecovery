<?php
// Version: 1.1.2; Login

$txt[37] = 'شما باید یک نام کاربری وارد کنید.';
$txt[38] = 'شما رمزعبور را وارد نکرده اید!';
$txt[39] = 'رمز عبور اشتباه است!';
$txt[98] = 'انتخاب نام کاربری';
$txt[155] = 'انجمن غیرفعال است';
$txt[245] = 'عضویت با موفقیت انجام شد';
$txt[431] = 'عضویتتان را تبریک می گوییم حالا شما عضو انجمن ما هستید.';
// Use numeric entities in the below string.
$txt[492] = 'و رمز عبور شما';
$txt[500] = 'لطفا یک آدرس ایمیل معتبر وارد کنید، %s.';
$txt[517] = 'مشخصات ضروری';
$txt[520] = 'فقط قابل استفاده برای شناسایی توسط SMF';
$txt[585] = 'من قبول می کنم';
$txt[586] = 'قبول نمی کنم!';
$txt[633] = 'اخطار!';
$txt[634] = 'تنها کاربران عضو شده اجازه استفاده از این بخش را دارند';
$txt[635] = ' لطفا وارد شوید و یا';
$txt[636] = 'برای داشتن دسترسی ثبت نام کنید';
$txt[637] = 'با انجمن ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'شما می توانید آن را بعد از ورود به انجمن از طریق صفحه ویرایش مشخصات مربوط به حساب کاربری خودتان ویرایش نمایید. برای مراجعه به صفحه ورود اینجا را کلیک کنید:';
$txt[719] = 'نام کاربری شما: ';
$txt[730] = 'آدرس ایمیل (%s) توسط کاربر دیگری انتخاب شده است. در صورتی که فکر می کنید اشتباه است، به صفحه ورود مراجعه کرده و رمز عبورتان را بازیابی کنید.';

$txt['login_hash_error'] = 'برای امنیت بیشتر لطفا رمز عبورتان را مجددا وارد کنید.';

$txt['register_age_confirmation'] = 'من دست کم %d سال سن دارم.';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'به انجمن های ' . $context['forum_name'] .'خوش آمدید';

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'شما در انجمن ' . $context['forum_name'] . ', %1$s!' . "عضو شده اید \n\n" . 'نام کاربری شما %2$s و رمزعبور آن %3$s می باشد.' . "\n\n" . 'شما می توانید رمزعبور را بعد از وارد شدن تغییر دهید:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'You are now registered with an account at ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Your account\'s username is %2$s and its password is %3$s (which can be changed later.)' . "\n\n" . 'Before you can login, you first need to activate your account. To do so, please follow this link:' . "\n\n" . '%5$s' . "\n\n" . 'Should you have any problems with activation, please use the code "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Your registration request at ' . $context['forum_name'] . ' has been received, %1$s.' . "\n\n" . 'The username you registered with was %2$s and the password was %3$s.' . "\n\n" . 'Before you can login and start using the forum, your request will be reviewed and approved.  When this happens, you will receive another email from this address.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'You are now registered with an account at ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Your username is "%2$s".' . "\n\n" . 'Before you can login, you first need to activate your account. To do so, please follow this link:' . "\n\n" . '%4$s' . "\n\n" . 'Should you have any problems with activation, please use the code "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Your registration request at ' . $context['forum_name'] . ' has been received, %1$s.' . "\n\n" . 'The username you registered with was %2$s.' . "\n\n" . 'Before you can login and start using the forum, your request will be reviewed and approved.  When this happens, you will receive another email from this address.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'متاسفانه شما اجازه ثبت نام در انجمن را ندارید';
$txt['under_age_registration_prohibited'] = 'متاسفیم، اما کاربران زیر %d سال مجاز به عضویت در انجمن های ما نیستند.';

$txt['activate_account'] = 'فعال کردن حساب کاربری';
$txt['activate_success'] = 'نام کاربری شما با موفقیت فعال شد. حالا می توانید وارد شوید';
$txt['activate_not_completed1'] = 'نام کاربری شما غیر فعال است.<br>';
$txt['activate_not_completed2'] = 'برای دریافت کد فعال سازی اینجا را کلیک کنید.';
$txt['activate_after_registration'] = 'از اینکه عضو انجمن شدید متشکریم. لینک فعال سازی حساب کاربری شما، برای آدرس ایمیلتان ارسال شد.';
$txt['invalid_userid'] = 'کاربری با چنین مشخصات وجود ندارد';
$txt['invalid_activation_code'] = 'کد فعال سازی معتبر نمی باشد .';
$txt['invalid_activation_username'] = 'نام کاربری یا آدرس ایمیل';
$txt['invalid_activation_new'] = 'اگر شما با آدرس ایمیل اشتباهی وارد کرده اید، یک ایمیل جدید همراه با رمز عبورتان وارد نمایید.';
$txt['invalid_activation_new_email'] = 'آدرس ایمیل جدید';
$txt['invalid_activation_password'] = 'رمز عبور قبلی';
$txt['invalid_activation_resend'] = 'ارسال دوباره کد فعال سازی حساب کاربری';
$txt['invalid_activation_known'] = 'اگر  شما کد کاربری خود را می دانید، لطفاً در اینجا تایپ نمایید.';
$txt['invalid_activation_retry'] = 'کد فعال سازی';
$txt['invalid_activation_submit'] = 'فعال سازی';

$txt['coppa_not_completed1'] = 'مدیر سایت درخواست عضویت شما را رد کرده است';
$txt['coppa_not_completed2'] = 'آیا اطلاعات بیشتری میخواهید؟';

$txt['awaiting_delete_account'] = 'حساب کاربری شما برای حذف شدن علامت گذاری شده است.<br />اگر می خواهید حساب کاربریتان را برگردانید، لطفا قسمت &quot;فعال سازی حساب کاربری&quot; را درخواست کنید و سپس مجددا وارد شوید.';
$txt['undelete_account'] = 'فعال شدن مجددا حساب کاربری من';

$txt['change_email_success'] = 'آدرس ایمیل شما تغییر یافته است، و همچنین یک ایمیل فعال سازی به آن ارسال شد.';
$txt['resend_email_success'] = 'ایمیل فعال سازی با موفقیت ارسال شد.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'رمز عبور جدید';
$txt['change_password_1'] = 'مشخصات ورود شما :';
$txt['change_password_2'] = 'تغییر داده شده و رمز عبور شما عوض شده است. حالا با مشخصات جدید می توانید وارد شوید.';

$txt['maintenance3'] = 'انجمن غیرفعال است.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'لطفا قوانین را خوانده و تایید نمایید.';
$txt['register_passwords_differ_js'] = 'رمزهای عبور یکسان نیست';

$txt['approval_after_registration'] = 'از عضویت شما متشکریم. برای شروع فعالیت، نام کاربریتان باید توسط مدیر انجمن فعال شود. به محض فعال سازی نام کاربری، توسط ایمیل به شما خبر داده خواهد شد.';

$txt['admin_settings_desc'] = 'از اینجا می توانید تنظیمات کاربران به هنگام ثبت نام را تغییر دهید';

$txt['admin_setting_registration_method'] = 'نحوه ثبت نام کاربران جدید';
$txt['admin_setting_registration_disabled'] = 'غیر فعال کردن ثبت نام کاربر جدید';
$txt['admin_setting_registration_standard'] = 'عضویت فوری بدون نیاز به فعال سازی';
$txt['admin_setting_registration_activate'] = 'عضویت و نیاز به فعال سازی حساب کاربری توسط کاربر';
$txt['admin_setting_registration_approval'] = 'تایید توسط مدیر سایت';
$txt['admin_setting_notify_new_registration'] = 'مدیرهای انجمن موقع عضویت کاربر جدید با خبر شوند؟';
$txt['admin_setting_send_welcomeEmail'] = 'ارسال ایمیل خوش آمد گویی برای کاربران جدید';

$txt['admin_setting_password_strength'] = 'امنیت لازم برای رمز عبور شما';
$txt['admin_setting_password_strength_low'] = 'حداقل - 4 کاراکتر';
$txt['admin_setting_password_strength_medium'] = 'متوسط - عدم استفاده از عبارات نام کاربری';
$txt['admin_setting_password_strength_high'] = 'حداکثر - استفاده از کاراکترهای مخلوط';

$txt['admin_setting_image_verification_type'] = 'پیچیدگی تصویر کد امنیتی';
$txt['admin_setting_image_verification_type_desc'] = 'هرچه تصویر پیچیده تر باشد امکان نفوذ روبات ها کمتر است';
$txt['admin_setting_image_verification_off'] = 'غیرفعال';
$txt['admin_setting_image_verification_vsimple'] = 'خیلی ساده - یک متن ساده در تصویر';
$txt['admin_setting_image_verification_simple'] = 'ساده - حروف رنگی روی هم, بدون نویز';
$txt['admin_setting_image_verification_medium'] = 'متوسط - حروف رنگی روی هم, با نویز';
$txt['admin_setting_image_verification_high'] = 'قوی - حروف شکسته, نویز شدید';
$txt['admin_setting_image_verification_sample'] = 'مثال';
$txt['admin_setting_image_verification_nogd'] = '<b>توجه:</b> در سرورهایی که کتابخانه GD نصب نماشد. پیچیدگی های تصویر بی تاثیر می باشد.';

$txt['admin_setting_coppaAge'] = 'حداقل سن کاربر جدید';
$txt['admin_setting_coppaAge_desc'] = '(برای غیرفعال کردن صفر انتخاب کنید)';
$txt['admin_setting_coppaType'] = 'اگر کاربر سن مجار را نداشت ...';
$txt['admin_setting_coppaType_reject'] = 'عضویت وی بی نتیجه رد شود';
$txt['admin_setting_coppaType_approval'] = 'والدین ایشان باید تایید کنند';
$txt['admin_setting_coppaPost'] = 'آدرس پستی باید ارسال شود';
$txt['admin_setting_coppaPost_desc'] = 'این گزینه فقط برای افراد کمتر از سن انتخاب شده می باشد';
$txt['admin_setting_coppaFax'] = 'شماره فکس باید وارد شود و معتبر باشد';
$txt['admin_setting_coppaPhone'] = 'شماره تلفن مجاز وارد شده باشد';
$txt['admin_setting_coppa_require_contact'] = 'برای تایید حساب کاربری شما باید شماره تلفن با فکس برای تماس را وارد کنید.';

$txt['admin_register'] = 'ثبت نام کاربر جدید';
$txt['admin_register_desc'] = 'در این قسمت می توانید کاربر جدیدی را عضو انجمن نموده و مشخصات و رمزعبورش را به آدرس ایمیلش ارسال کنید.';
$txt['admin_register_username'] = 'نام کاربری ';
$txt['admin_register_email'] = 'آدرس ایمیل ';
$txt['admin_register_password'] = 'رمز عبور ';
$txt['admin_register_username_desc'] = 'نام کاربری شما برای ورود';
$txt['admin_register_email_desc'] = 'آدرس ایمیل شما';
$txt['admin_register_password_desc'] = 'رمز عبور شما برای ورود';
$txt['admin_register_email_detail'] = 'ارسال مشخصات به ایمیل کاربر';
$txt['admin_register_email_detail_desc'] = 'حتی درصورت اتخاب نشدن این گزینه، مشخصات به ایمیل کاربر فرستاده خواهد شد.';
$txt['admin_register_email_activate'] = 'عضو ملزم به فعال سازی حساب کاربری خود می باشد';
$txt['admin_register_group'] = 'عضو گروه کاربری ';
$txt['admin_register_group_desc'] = 'گروه کاربری اولیه که کاربر باید در آن فعالیت کند';
$txt['admin_register_group_none'] = '(عضو هیچ گروهی نباشد)';
$txt['admin_register_done'] = 'کاربر %s با موفقیت عضو شد!';

$txt['admin_browse_register_new'] = 'عضویت کاربر جدید';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'یک کاربر جدید عضو شده است';
$txt['admin_notify_profile'] = 'کاربری با نام %s در انجمن های سایت شما ثبت  نام نموده است. برای دیدن مشخصات این کاربر بر روی لینک زیر کلیک کنید. ';
$txt['admin_notify_approval'] = 'قبل از اینکه این کاربر بتواند در انجمن ها فعالیت کند، شما باید دسترسی او را فعال نمایید. برای این کار بر روی لینک زیر کلیک نمایید.';

$txt['coppa_title'] = 'سن مجاز انجمن';
$txt['coppa_after_registration'] = 'از عضویت شما در ' . $context['forum_name'] . ' متشکریم.<br /><br />برای اینکه سن شما کمتر از  {MINIMUM_AGE} سال است، شما اجازه مستقیم استفاده از انجمن ها را ندارید. بنابراین برای فعال شدن دسترسیتان باید توسط والدینتان فرم زیر را تکمیل کنید تا والدین شما از عضویت شما مطلع باشند:';
$txt['coppa_form_link_popup'] = 'بارگزاری فرم در پنجره جدید';
$txt['coppa_form_link_download'] = 'دریافت فرم بصورت فایل متنی';
$txt['coppa_send_to_one_option'] = 'سپس توسط والدینتان آن را تکمیل و از طریق زیر برای ما ارسال کنید:';
$txt['coppa_send_to_two_options'] = 'سپس توسط والدینتان آن را تکمیل و از طرق زیر برای ما ارسال کنید:';
$txt['coppa_send_by_post'] = 'به آدرس زیر ارسال کنید:';
$txt['coppa_send_by_fax'] = 'به شماره زیر آن را فکس کنید:';
$txt['coppa_send_by_phone'] = 'متناوبا می توانید با مدیریت ازطریق شماره تکفن {PHONE_NUMBER} نیز در تماس باشید.';

$txt['coppa_form_title'] = 'رضایت نامه برای عضویت در ' . $context['forum_name'];
$txt['coppa_form_address'] = 'آدرس';
$txt['coppa_form_date'] = 'تاریخ';
$txt['coppa_form_body'] = 'من {PARENT_NAME},<br /><br />درخواست ثبت نام فرزندم {CHILD_NAME} (نام فرزندم) برای عضویت کامل در ' . $context['forum_name'] . ' را با نام کاربری {USER_NAME} خواستارم.<br /><br />همچنین کاملا متوجه هستم که مشخصات کاربری فرزندم با نام کاربری {USER_NAME} برای همه کاربران سایت شما نشان داده خواهد شد .<br /><br />امضا<br />{PARENT_NAME} (پدر و مادر/والدین).';

$txt['visual_verification_label'] = 'کد امنیتی';
$txt['visual_verification_description'] = 'متن نمایش داده شده در تصویر را وارد نمایید ';
$txt['visual_verification_sound'] = 'خواندن متن';
$txt['visual_verification_sound_again'] = 'تلاش مجدد';
$txt['visual_verification_sound_close'] = 'بستن پنجره';
$txt['visual_verification_request_new'] = 'درخواست عکس دیگر';
$txt['visual_verification_sound_direct'] = 'مشکل دارید ؟ از طریق لینک مستقیم تلاش کنید ';

?>