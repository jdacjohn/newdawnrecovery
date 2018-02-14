<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'معالجة مجموعة الأعضاء';
$txt['membergroups_description'] = 'مجموعة الأعضاء هي عبارة عن مجموعة للأعضاء الذين يملكون نفس الصلاحيات ، المظهر و حقوق الدخول. بعض المجموعات تعتمد على عدد الرسائل للعضو. يمكنك إضافة عضو إلى مجموعة الأعضاء بتحرير الهوية الخاصة به و تغير إعدادات حسابه.';
$txt['membergroups_modify'] = 'تعديل';

$txt['membergroups_add_group'] = 'إضافة مجموعة';
$txt['membergroups_regular'] = 'المجموعات العادية';
$txt['membergroups_post'] = 'المجموعات الخاصة بعدد الرسائل';

$txt['membergroups_new_group'] = 'إضافة مجموعة';
$txt['membergroups_group_name'] = 'اسم المجموعة';
$txt['membergroups_new_board'] = 'المنتديات المرئية';
$txt['membergroups_new_board_desc'] = 'المنتديات التي يمكن لمجموعة الأعضاء مشاهدتها.';
$txt['membergroups_new_board_post_groups'] = '<em>ملاحظة: عادة, مجموعات عدد المشاركات لا تحتاج نقطة وصول بسبب أن العضو ضمن المجموعة الذي هو فيها سوف تعطيه صلاحية الوصول.</em>';
$txt['membergroups_new_as_type'] = 'بواسطة النوع';
$txt['membergroups_new_as_copy'] = 'أو معتمدة على';
$txt['membergroups_new_copy_none'] = '(بدون)';
$txt['membergroups_can_edit_later'] = '(يمكنك تحريرهم لاحقا.)';

$txt['membergroups_edit_group'] = 'تحرير مجموعة';
$txt['membergroups_edit_name'] = 'اسم المجموعة';
$txt['membergroups_edit_post_group'] = 'هذه المجموعة تعتمد على عدد الرسائل.';
$txt['membergroups_min_posts'] = 'الرسائل المطلوبة';
$txt['membergroups_online_color'] = 'اللون في قائمة المتصلين الآن';
$txt['membergroups_star_count'] = 'عدد صور النجمات';
$txt['membergroups_star_image'] = 'اسم ملف صورة النجمة';
$txt['membergroups_star_image_note'] = '(بداية من URL/images للقالب, يمكنك استخدام $language للغة المستخدم.)';
$txt['membergroups_max_messages'] = 'الحد الأقصى للرسائل الشخصية';
$txt['membergroups_max_messages_note'] = '(0 = غير محدد)';
$txt['membergroups_edit_save'] = 'حفظ';
$txt['membergroups_delete'] = 'حذف';
$txt['membergroups_confirm_delete'] = 'هل ترغب حقا في حذف هذه المجموعة؟!';

$txt['membergroups_members_title'] = 'عرض كافة الأعضاء من المجموعة';
$txt['membergroups_members_no_members'] = 'هذه المجموعة خالية حاليا';
$txt['membergroups_members_add_title'] = 'أضف عضو لهذه المجموعة';
$txt['membergroups_members_add_desc'] = 'قائمة الأعضاء للإضافة';
$txt['membergroups_members_add'] = 'أضف أعضاء';
$txt['membergroups_members_remove'] = 'حذف من المجموعة';

$txt['membergroups_postgroups'] = 'مجموعات الكتابة';

$txt['membergroups_edit_groups'] = 'تعديل مجموعة الاعضاء';
$txt['membergroups_settings'] = 'اعدادات مجموعة الاعضاء';
$txt['groups_manage_membergroups'] = 'المجموعات مسموح لها بتغير مجموعة الاعضاء';
$txt['membergroups_settings_submit'] = 'حفظ';
$txt['membergroups_select_permission_type'] = 'اختيار الملف الشخصي';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'اظهار الاقسام';

$txt['admin_browse_approve'] = 'الاعضاء الذين يحتاجو الى تفعيل حسابهم';
$txt['admin_browse_approve_desc'] = 'من هنا يمكنك تعديل الاعادادات للاعضاء الذين يحتاجون الى تفعيل.';
$txt['admin_browse_activate'] = 'الاعضاء الذين يحتاجون تفعيل';
$txt['admin_browse_activate_desc'] = 'هذه القائمة بالاعضاء الذين لم يتم تفعيل اشتراكهم.';
$txt['admin_browse_awaiting_approval'] = 'تنتظر الموافق <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'تنتظر التفعيل <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'اسم المستخدم';
$txt['admin_browse_email'] = 'عنوان البريد';
$txt['admin_browse_ip'] = 'IP عنوان';
$txt['admin_browse_registered'] = 'مسجل';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'مختار';
$txt['admin_browse_no_members_approval'] = 'لا يوجد اعضاء ينتظرون التفعيل.';
$txt['admin_browse_no_members_activate'] = 'لا يوجد اعضاء لم يفعلوا اشتراكهم.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'كل الاعضاء المختارين؟';
$txt['admin_browse_outstanding_warn'] = 'كل الاعضاء المتاثرين؟';
$txt['admin_browse_w_approve'] = 'موافقة';
$txt['admin_browse_w_activate'] = 'تفعيل';
$txt['admin_browse_w_delete'] = 'حذف';
$txt['admin_browse_w_reject'] = 'رفض';
$txt['admin_browse_w_remind'] = 'تذكير';
$txt['admin_browse_w_approve_deletion'] = 'الموافقة على الاشتراكات الملغية';
$txt['admin_browse_w_email'] = 'ارسال ايميل';
$txt['admin_browse_w_approve_require_activate'] = 'موافق عليه و لاكن يحتاج تفعيل';

$txt['admin_browse_filter_by'] = 'مرشح بـ';
$txt['admin_browse_filter_show'] = 'اظهار';
$txt['admin_browse_filter_type_0'] = 'حساب جديد لم يفعل';
$txt['admin_browse_filter_type_2'] = 'بريد جديد لم يفعل';
$txt['admin_browse_filter_type_3'] = 'حساب جديد غير موافق عليه بعد';
$txt['admin_browse_filter_type_4'] = 'حذف حساب غير موافق عليه';
$txt['admin_browse_filter_type_5'] = 'حساب "تحت العمر المطلوب" غير موافق عليه';

$txt['admin_browse_outstanding'] = 'الأعضاء المعلقون';
$txt['admin_browse_outstanding_days_1'] = 'الأعضاء المسجلون منذ أكثر من';
$txt['admin_browse_outstanding_days_2'] = 'أيام مضت';
$txt['admin_browse_outstanding_perform'] = 'تأدية الأمر التالي';
$txt['admin_browse_outstanding_go'] = 'تأدية الأمر';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'تم رفض التسجيل';
$txt['admin_approve_reject_desc'] = 'للأسف إن طلبك للإنضمام الـ ' . $context['forum_name'] . ' تم رفضه.';
$txt['admin_approve_delete'] = 'تم مسح الحساب';
$txt['admin_approve_delete_desc'] = 'إن حسابك فى ' . $context['forum_name'] . 'تم مسحه. هذا قد يكون بسبب أنك لم تقم بتنشيطه, فى هذه الحالة يجب عليك إعداة التسجيل مرة أخرى .';
$txt['admin_approve_remind'] = 'التذكير بالتسجيلات';
$txt['admin_approve_remind_desc'] = 'أنت لم تقم بتفعل حسابك بعد فى ';
$txt['admin_approve_remind_desc2'] = 'الرجاء الضغط على الرابط الموجود بالأسفل لتفعيل حسابك :';
$txt['admin_approve_accept_desc'] = 'لقد تم تفعيل حسابك يدويا بواسطة المدير و يمكنك الأن تسجيل الدخول و المشاركة.';
$txt['admin_approve_require_activation'] = 'إن حسابك فى ' . $context['forum_name'] . ' تم الموافقه عليه بواسطة المدير, و يجب عليك الأن تفعيله كى تتمكن من المشاركه.';

?>