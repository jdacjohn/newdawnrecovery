<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'الرسائل الشخصية';
$txt[148] = 'ارسال رسالة';
$txt[150] = 'الى';
$txt[1502] = 'Bcc ';
$txt[316] = 'الوارد';
$txt[320] = 'الصادر';
$txt[321] = 'رسالة جديدة';
$txt[411] = 'حذف راسلة';
// Don't translate "PMBOX" in this string.
$txt[412] = 'جذف جميع الرسائل في PMBOX';
$txt[413] = 'هل انت متاكد من جذف جميع الرسائل؟';
$txt[535] = 'المستقبلين';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'رسالة شخصية جديدة: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'لقد إستلمت لتوك رساله شخصيه من SENDER فى ' . $context['forum_name'] . '.' . "\n\n" . 'ملحوظه: تذكر, هذه الرساله هى مجرد تنبيه بإستلام رساله شخصيه. رجاء عدم الرد على  رسالة التنبيه هذه.' . "\n\n" . 'الرسالة الشخصيه التى إستلمتها هى:' . "\n\n" . 'MESSAGE';
$txt[748] = '(\'أكثر من عضو : \'الاسم الاول, الاسم الثانى)';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'الرد على هذه الرسالة الشخصية هنا:';

$txt['smf249'] = 'هل انت متاكد من حذف جميع الرسائل الشخصية المختارة؟';

$txt['sent_to'] = 'ارسال الى';
$txt['reply_to_all'] = 'الرد على الكل';

$txt['pm_capacity'] = 'السعة';
$txt['pm_currently_using'] = '%s رسائل, %s%% كاملة.';

$txt['pm_error_user_not_found'] = 'لم نتمكن من ايجاد العضو \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'العضو \'%s\' جب رسائلك الخاصة.';
$txt['pm_error_data_limit_reached'] = 'من غير الممكن ارسال الرسالة الشخصية لان \'%s\' صندوقه الوارد ممتلء!';
$txt['pm_successfully_sent'] = 'تم ارسال الرسالة الى \'%s\' بنجاح.';
$txt['pm_too_many_recipients'] = 'أرسلت الرسالة لأكثر من %d مستلم في آن واحد';
$txt['pm_too_many_per_hour'] = 'لقد تجاوزت الحد المسموح به من %d الرسائل الشخصيه فى الساعة.';
$txt['pm_send_report'] = 'ارسال تقرير';
$txt['pm_save_outbox'] = 'حفظ نسخة في صندوق الصادر';
$txt['pm_undisclosed_recipients'] = 'مستلمين مخفيين';

$txt['pm_read'] = 'قراءة';
$txt['pm_replied'] = 'الرد على';

// Message Pruning.
$txt['pm_prune'] = 'تقليل مساحة الرسائل الشخصية';
$txt['pm_prune_desc1'] = 'مسح جميع الرسائل الاقدم من';
$txt['pm_prune_desc2'] = 'ايام.';
$txt['pm_prune_warning'] = 'هل انت متاكد من تقليل مساحة الرسائل الشخصية؟';

// Actions Drop Down.
$txt['pm_actions_title'] = 'الخطوات القادمة';
$txt['pm_actions_delete_selected'] = 'حذف المختار';
$txt['pm_actions_filter_by_label'] = 'تصنيف بالعلامات';
$txt['pm_actions_go'] = 'ارسال';

// Manage Labels Screen.
$txt['pm_apply'] = 'تفعيل';
$txt['pm_manage_labels'] = 'تعديل العلامات';
$txt['pm_labels_delete'] = 'هل تريد حذف العلامة الختارة؟';
$txt['pm_labels_desc'] = 'هنا يمكنك اضافة و تعديل و حذف العلامات المستخدمة في الرسائل الشخصية.';
$txt['pm_label_add_new'] = 'اضافة علامة جديدة';
$txt['pm_label_name'] = 'اسم العلامة';
$txt['pm_labels_no_exist'] = 'لا يوجد اي علامات محددة!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'علامة';
$txt['pm_msg_label_title'] = 'تعليم رسالة';
$txt['pm_msg_label_apply'] = 'اضافة علامة';
$txt['pm_msg_label_remove'] = 'حذف علامة';
$txt['pm_msg_label_inbox'] = 'الوارد';
$txt['pm_sel_label_title'] = 'علامة مختارة';
$txt['labels_too_many'] = 'عذرا, %s عندك العدد الاكبر من العلامات المستخدمة!';

// Sidebar Headings.
$txt['pm_labels'] = 'العلامات';
$txt['pm_messages'] = 'الرسائل';
$txt['pm_preferences'] = 'المفضل';

$txt['pm_is_replied_to'] = 'لقد قمت بالرد على هذه الرسالة.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'التقرير للمشرف';
$txt['pm_report_title'] = 'تقرير رسالة شخصية';
$txt['pm_report_desc'] = 'من هذه الصفحة يمكنك تقرير للمشرف عن رسالة شخصية غير مرغوبة، و يجب اضافة سبب للتقرير و سترفق نسخة من الرسالة الى المشرف.';
$txt['pm_report_admins'] = 'الاداري المرسل اليه:';
$txt['pm_report_all_admins'] = 'الارسال الى جميع الاداريين';
$txt['pm_report_reason'] = 'سبب ارسال هذا التقرير';
$txt['pm_report_message'] = 'تقرير الرسالة';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[تقرير]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} قام بتقرير هذه الرسالة الشخصية من المرسل {SENDER}, لهذا السبب:';
$txt['pm_report_pm_other_recipients'] = 'المستقبلين الاخرين للرسالة:';
$txt['pm_report_pm_hidden'] = '%d المستقبلين المخفيين';
$txt['pm_report_pm_unedited_below'] = 'في الاسفل الرسالة الشخصية المقررة:';
$txt['pm_report_pm_sent'] = 'تم الارسال:';

$txt['pm_report_done'] = 'شكرا للتقرير عن الرسالة، و سيتم الرد من قبل الاداري في اسرع وقت';
$txt['pm_report_return'] = 'العودة الى صندوق الوارد';

$txt['pm_search_title'] = 'البحث في الرسائل الخاصة';
$txt['pm_search_bar_title'] = 'البحث في الرسال';
$txt['pm_search_text'] = 'البحث عن';
$txt['pm_search_go'] = 'بحث';
$txt['pm_search_advanced'] = 'بحث متقدم';
$txt['pm_search_user'] = 'البحث بالاعضاء';
$txt['pm_search_match_all'] = 'مطابقة جميع الكلمات';
$txt['pm_search_match_any'] = 'مطابقة اي كلمة';
$txt['pm_search_options'] = 'الاعدادات';
$txt['pm_search_post_age'] = 'العمر';
$txt['pm_search_show_complete'] = 'اظهار الرسائل كاملة في النتائج.';
$txt['pm_search_subject_only'] = 'البحث في العنواين و المرسلين فقط.';
$txt['pm_search_between'] = 'بين';
$txt['pm_search_between_and'] = 'و';
$txt['pm_search_between_days'] = 'ايام';
$txt['pm_search_order'] = 'ترتيب النتائج بـ';
$txt['pm_search_choose_label'] = 'اخترعلامة للبحث فيها او البحث في الكل';

$txt['pm_search_results'] = 'نتائج البحث';
$txt['pm_search_none_found'] = 'لم يتم ايجاد رسائل';

$txt['pm_search_orderby_relevant_first'] = 'الاقرب الى الموضوع اولا';
$txt['pm_search_orderby_recent_first'] = 'الاحدث اولا';
$txt['pm_search_orderby_old_first'] = 'الاقدم اولا';

$txt['pm_visual_verification_label'] = 'التحقق ';
$txt['pm_visual_verification_desc'] = 'الرجاء كتابة الكود الموجود بالصورة فى الأعلى ليتم إرسال الرساله';
$txt['pm_visual_verification_listen'] = 'الإستماع الى الأحرف';

?>