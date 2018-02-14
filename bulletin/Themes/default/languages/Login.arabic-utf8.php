<?php
// Version: 1.1.2; Login

$txt[37] = 'يجب كتابة اسم المستخدم.';
$txt[38] = 'خانة كلمة المرور خالية';
$txt[39] = 'كلمة المرور خاطئة';
$txt[98] = 'اختر اسم المستخدم';
$txt[155] = 'نمط الصيانة';
$txt[245] = 'تم التسجيل بنجاح';
$txt[431] = 'نجح التسجيل! أنت الآن عضو في هذا المنتدى.';
// Use numeric entities in the below string.
$txt[492] = 'و كلمة المرور هي';
$txt[500] = 'الرجاء إدخال بريد صحيح, %s.';
$txt[517] = 'معلومات مطلوبة';
$txt[520] = 'مستعمل فقط للتعريف من قبل إس إم إف. يمكنك لاحقا استخدام أحرف خاصة بعد تسجيل الدخول، من خلال تغير اسم العرض في هويتك.';
$txt[585] = 'موافق';
$txt[586] = 'غير موافق';
$txt[633] = 'تحذير!';
$txt[634] = 'فقط الأعضاء المسجلين مخول لهم الدخول لإلى هذا القسم.';
$txt[635] = 'الرجاء تسجيل الدخول في الأسفل أو';
$txt[636] = 'تسجيل حساب جديد';
$txt[637] = 'في ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'يمكنك تغيّره بعد تسجيل الدخول بالذهاب إلى صفحة الهوية، أو زيارة الصفحة التالية بعد تسجيل الدخول:';
$txt[719] = 'اسم المستخدم هو: ';
$txt[730] = 'العنوان البريدي (%s) قيد الاستخدام من قبل عضو مسبق. إذا اعتقدت أن هذا خطأ، فأذهب إلى صفحة تسجيل الدخول واستعمل تذكير كلمة السر بذلك العنوان.';

$txt['login_hash_error'] = 'تم تحديث نظام كلمة السر. يرجى ادخال كلمة السر مرة اخرى.';

$txt['register_age_confirmation'] = 'عمري على الأقل %d عاما';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'اهلا و سهلا ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'انت عضو مسجل في  ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'اسم المستخدم هو:  %2$s و كلمة السر هي:  %3$s.' . "\n\n" . 'بامكانك تغيير كلمة السر بعد الدخول الى المنتدى في الملف الشخصي، او عن طريق زيارة هذه الصفحة بعد دخولك الى المنتدى:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'انت عضو مسجل في ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'اسم المستخدم هو: %2$s و كلمة السر هي: %3$s (بامكانك تغييرها فيما بعد.)' . "\n\n" . 'للدخول الى المنتدى يجب عليك تفعيل حسابك. لتفعيل حسابك اضغط على الرابط التالي:' . "\n\n" . '%5$s' . "\n\n" . 'في حال عدم عمل الرابط استخدم الكود الاتي: "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'طلب التسجيل في ' . $context['forum_name'] . ' تم قبوله, %1$s.' . "\n\n" . 'اسم المستخدم هو: %2$s و كلمة السر هي: %3$s.' . "\n\n" . 'قبل الدخول الى المنتدى يجب الموافقة على طلب الالتحاق. سيصلك بريد عند تفعيل اشتراكك.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'انت عضو مسجل في   ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'اسم المستخدم هو : "%2$s".' . "\n\n" . 'للدخول الى المنتدى يجب عليك تفعيل حسابك. لتفعيل حسابك اضغط على الرابط التالي:' . "\n\n" . '%4$s' . "\n\n" . 'في حال عدم عمل الرابط استخدم الكود الاتي"%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'طلب التسجيل في ' . $context['forum_name'] . ' تم قبوله, %1$s.' . "\n\n" . 'اسم المستخدم هو: %2$s و كلمة السر هي: %3$s.' . "\n\n" . 'قبل الدخول الى المنتدى يجب الموافقة على طلب الالتحاق. سيصلك بريد عند تفعيل اشتراكك.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'عذرا، ليس من الممكن التسجيل في  هذا المنتدى. في حال اذا كان البان المطبق غير عادل يرجى مراسلة مشرف الموقع. و شكرا.';
$txt['under_age_registration_prohibited'] = 'عذرا، الاعضاء تحت سن %d غير مسموح لهم بالتسجيل في هذا المنتدى.';

$txt['activate_account'] = 'تنشيط الحساب';
$txt['activate_success'] = 'تم تنشيط حسابك بنجاح. يمكنك الآن مواصلة تسجيل الدخول.';
$txt['activate_not_completed1'] = 'يجب أن تفعل عنوان بريدك قبل تسجيل الدخول.';
$txt['activate_not_completed2'] = 'هل تحتاج إلى بريد التفعيل مرة أخرى؟';
$txt['activate_after_registration'] = 'شكرا على التسجيل. سيصلك بريد لتنشيط حسابك قريبا.';
$txt['invalid_userid'] = 'المستخدم غير موجود';
$txt['invalid_activation_code'] = 'كود التنشيط غير صحيح';
$txt['invalid_activation_username'] = 'اسم المستخدم أو البريد';
$txt['invalid_activation_new'] = 'إذا قمت بالتسجيل مستخدما بريد غير صحيح ، فاكتب البريد الصحيح و كلمة المرور هنا.';
$txt['invalid_activation_new_email'] = 'عنوان بريد جديد';
$txt['invalid_activation_password'] = 'كلمة المرور القديمة';
$txt['invalid_activation_resend'] = 'اعد إرسال كود التنشيط';
$txt['invalid_activation_known'] = 'إذا كنت تعرف كود التنشيط ، فالرجاء كتابته هنا.';
$txt['invalid_activation_retry'] = 'كود التنشيط';
$txt['invalid_activation_submit'] = 'تنشيط';

$txt['coppa_not_completed1'] = 'إن المدير لم يستلم بعد رسالت تأكيد تسجيلك من والديك/او الموصى عليك .';
$txt['coppa_not_completed2'] = 'تحتاج المزيد من المعلومات؟';

$txt['awaiting_delete_account'] = 'تم تحديد حسابك من اجل الحذف!<br />اذا اردت اعادة حسابك، يرجى مراجعة صندوق &quot;اعادة تفعيل حسابي&quot; و اعادة الدخول ثانية.';
$txt['undelete_account'] = 'اعادة تنشيط حسابي';

$txt['change_email_success'] = 'تم تغير عنوان بريدك, و تم إرسال رسالة تنشيط جديدة إليك.';
$txt['resend_email_success'] = 'تم إرسال بريد تنشيط جديد بنجاح.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'بيانات كلمة المرور الجديدة';
$txt['change_password_1'] = 'بيانات تسجيل الدخول في';
$txt['change_password_2'] = 'تم تغيره و إعادة ضبط كلمة المرور. في الأسفل بيانات تسجيل الدخول الجديدة.';

$txt['maintenance3'] = 'المنتدى في حالة صيانة.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'الرجاء قراءة/موافقة  بنود التسجيل.';
$txt['register_passwords_differ_js'] = 'عدم تطابق كلمتي السر. يرجى اعادة الادخال مرة اخرى!';

$txt['approval_after_registration'] = 'شكرا على التسجيل. يجب أن يقوم المشرف بقبول التسجيل قبل أن تستطيع استخدام حسابك, ستتلقى بريد من المشرف يبين فيه قراره.';

$txt['admin_settings_desc'] = 'بامكانك تغيير العديد من اعدادات الاعضاء الجدد في هذا المكان.';

$txt['admin_setting_registration_method'] = 'طريقة التسجيل للاعضاء الجدد';
$txt['admin_setting_registration_disabled'] = 'تعطيل التسجيل';
$txt['admin_setting_registration_standard'] = 'تسجيل فوري';
$txt['admin_setting_registration_activate'] = 'تفعيل التسجيل';
$txt['admin_setting_registration_approval'] = 'قبول العضو';
$txt['admin_setting_notify_new_registration'] = 'تنبيه المشرف عند تسجيل عضو جديد';
$txt['admin_setting_send_welcomeEmail'] = 'ارسال رسالة ترحيب للاعضاء الجدد';

$txt['admin_setting_password_strength'] = 'استخدام كلمة سر قوية';
$txt['admin_setting_password_strength_low'] = 'ضعيفة - 4 احرف على الاقل';
$txt['admin_setting_password_strength_medium'] = 'متوسطة - لايمكن ان تحتوي اسم المستخدم';
$txt['admin_setting_password_strength_high'] = 'قوية - تحتوي على مجموعة من الاحرف و الرموز';

$txt['admin_setting_image_verification_type'] = 'مدى صعوبة صورة التحقق البصرى';
$txt['admin_setting_image_verification_type_desc'] = 'كلما كانت الصورة أكثر صعوبة كلما منع هذا العناكب من التسجيل';
$txt['admin_setting_image_verification_off'] = 'إيقاف';
$txt['admin_setting_image_verification_vsimple'] = 'سهلة جدا - مجرد أحرف على خلفيه بيضاء';
$txt['admin_setting_image_verification_simple'] = 'سهل - أحرف ملونه و خلفيه بيضاء';
$txt['admin_setting_image_verification_medium'] = 'متوسط - أحرف ملونه و خلفيه بها القليل من الشوشره';
$txt['admin_setting_image_verification_high'] = 'صعبة - أحرف معقده , و خلفية بها شوشره';
$txt['admin_setting_image_verification_sample'] = 'عينة';
$txt['admin_setting_image_verification_nogd'] = '<b>ملاحظه :</b> إن ميزت الـ GD library غير مثبته على هذا السرفر لذلك فإن بعض الاعدادات لن تعمل.';

$txt['admin_setting_coppaAge'] = 'العمر الادنى للتسجيل';
$txt['admin_setting_coppaAge_desc'] = '(تعيين  0  للتعطيل)';
$txt['admin_setting_coppaType'] = 'الاجراء المتبع عند تسجيل عضو اصغر من العمر المسموح';
$txt['admin_setting_coppaType_reject'] = 'رفض تسجيلهم';
$txt['admin_setting_coppaType_approval'] = 'طلب موافقة الابوين';
$txt['admin_setting_coppaPost'] = 'عنوان بريدي حيث يجب ارسال الاستمارات للملء';
$txt['admin_setting_coppaPost_desc'] = 'تعمل فقط في حالة وجود مخالفة للعمر';
$txt['admin_setting_coppaFax'] = 'رقم الفاكس حيث يجب ارسال استمارات القبول اليه';
$txt['admin_setting_coppaPhone'] = 'رقم اتصال بالابوين للتاكيد على الموافيقة';
$txt['admin_setting_coppa_require_contact'] = 'يجب تسجيل رقم الابوين او رقم الفاكس او العنوان لارسال الاستمارات الى الابوين للموافقة.';

$txt['admin_register'] = 'تسجيل عضو جديد';
$txt['admin_register_desc'] = 'هنا يمكنك تسجيل اعضاء جدد في المنتدى و تستطيع ارسال رسالة الى ايميلاتهم';
$txt['admin_register_username'] = 'مستخدم جديد';
$txt['admin_register_email'] = 'عنوان الايميل';
$txt['admin_register_password'] = 'كلمة السر';
$txt['admin_register_username_desc'] = 'اسم المستخد للعضو الجديد';
$txt['admin_register_email_desc'] = 'عنوان ايميل للعضو الجديد';
$txt['admin_register_password_desc'] = 'كلمة سر العضو الجديد';
$txt['admin_register_email_detail'] = 'ارسال كلمة السر الجديدة للعضو';
$txt['admin_register_email_detail_desc'] = 'الايميل ضروري حتى لو تم طلب اخفائه';
$txt['admin_register_email_activate'] = 'طلب تفعيل الاشتراك من المستخدم';
$txt['admin_register_group'] = 'مجموعة اعضاء اولية';
$txt['admin_register_group_desc'] = 'مجموعة اعضاء اولية سينتمي العضو الجديد اليها';
$txt['admin_register_group_none'] = '(لا توجد مجموعة اعضاء اولية)';
$txt['admin_register_done'] = 'تم تسجيل العضو %s بنجاح!';

$txt['admin_browse_register_new'] = 'تسجيل عضو جديد';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'انظم عضو جديد';
$txt['admin_notify_profile'] = '%s تم تسجيله كعضو جديد في منتداك. انقر الرابط في الأسفل لمشاهدة هويته.';
$txt['admin_notify_approval'] = 'قبل أن يبدأ هذا العضو بالكتابة يجب أن يتم الموافقة على حساباتهم. انقر الرابط في الأسفل للذهاب إلى شاشة القبول.';

$txt['coppa_title'] = 'منتدى محدد بالعمر';
$txt['coppa_after_registration'] = 'شكرا لتسجيلك في ' . $context['forum_name'] . '.


نظرا لأن سنك أصغر من {MINIMUM_AGE},فإنه يجب أخذ موافقت والديك/الموصى عليك كي تتمكن من إستخدام حسابك فى هذا الموقع. لتنشيط حسابك يرجى طباعة النمذج التالى:';
$txt['coppa_form_link_popup'] = 'فتح الاستمارة في صفحة جديدة';
$txt['coppa_form_link_download'] = 'تحميل على شكلك ملف .txt';
$txt['coppa_send_to_one_option'] = 'بعدها قم بجعل والدك/الولي بأن يرسل الطلب بعد تعبئته من خلال:';
$txt['coppa_send_to_two_options'] = 'بعدها قم بجعل والدك/الولي بأن يرسل الطلب بعد تعبئته من خلال أية ممايلي:';
$txt['coppa_send_by_post'] = 'بريد, على العنوان التالي:';
$txt['coppa_send_by_fax'] = 'فاكس, على الرقم التالي:';
$txt['coppa_send_by_phone'] = 'بشكل بديل, الاتصال على الرقم التالي: {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'طلب سماح الانتساب للمنتدى ' . $context['forum_name'];
$txt['coppa_form_address'] = 'العنوان';
$txt['coppa_form_date'] = 'تاريخ';
$txt['coppa_form_body'] = 'أنا {PARENT_NAME},<br /><br />أعطي الصلاحية لـ{CHILD_NAME} (اسم الطفل) ليصبح عضو مسجل بشكل كامل في المنتدى : ' . $context['forum_name'] . ', باستخدام اسم المستخدم: {USER_NAME}.<br /><br />افهم أن بعض المعلومات الشخصية المدخلة من قبل {USER_NAME} قد يتم عرضها لباقي الأغضاء في المنتدى.<br /><br />التوقيع:<br />{PARENT_NAME} (الأب/الولي).';

$txt['visual_verification_label'] = 'التحقق البصرى';
$txt['visual_verification_description'] = 'أكتب الأحرف الموجوده بالصورة';
$txt['visual_verification_sound'] = 'إستمع للأحرف';
$txt['visual_verification_sound_again'] = 'أعد التشغيل مرة أخرى';
$txt['visual_verification_sound_close'] = 'أغلق النافذة';
$txt['visual_verification_request_new'] = 'طلب صورة اخرى';
$txt['visual_verification_sound_direct'] = 'هل تواجه بعض المشاكل في سماعها?  جرب رابط مباشر لها.';

?>