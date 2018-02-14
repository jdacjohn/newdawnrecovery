<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'إدارة التصاريح';
$txt['permissions_modify'] = 'تعديل';
$txt['permissions_access'] = 'له حق الوصول';
$txt['permissions_allowed'] = 'مسموح';
$txt['permissions_denied'] = 'مرفوض';

$txt['permissions_switch'] = 'تحويل إلى';
$txt['permissions_global'] = 'عام';
$txt['permissions_local'] = 'محلي';

$txt['permissions_groups'] = 'التصاريح بواسطة مجموعة الأعضاء';
$txt['permissions_all'] = 'كل';
$txt['permissions_none'] = 'بلا';
$txt['permissions_set_permissions'] = 'ضبط التصاريح';

$txt['permissions_with_selection'] = 'مع المعلم عليه';
$txt['permissions_apply_pre_defined'] = 'تطبيق التشكيل الجانبي للتصاريح المعرفة مسبقا';
$txt['permissions_select_pre_defined'] = 'تحديد تشكيل جانبي للتصاريح المعرفة مسبقا';
$txt['permissions_copy_from_board'] = 'نسخ التصاريح من هذا المنتدى';
$txt['permissions_select_board'] = 'اختر منتدى';
$txt['permissions_like_group'] = 'ضبط التصاريح مثل هذه المجموعة';
$txt['permissions_select_membergroup'] = 'حدد مجموعة أعضاء';
$txt['permissions_add'] = 'إضافة تصريح';
$txt['permissions_remove'] = 'مسح تصريح';
$txt['permissions_deny'] = 'رفض تصريح';
$txt['permissions_select_permission'] = 'حدد تصريح';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'يمكنك اختيار حدث واحد فقط لتعديل التصاريح';
$txt['permissions_no_action'] = 'لم يتم تحديد حدث';
$txt['permissions_deny_dangerous'] = 'ستقوم برفض تصريح أو أكثر.\\nسيكون هذا خطر و يسبب نتائج غير متوقعة إذا لم تكن م متأكد بوجود  \\"عضو \\" في المجموعة أو المجموعات التي تحاول أن تحظر عليها التصريح.\\n\\nهل ترغب حقا بالمواصلة؟';

$txt['permissions_boards'] = 'التصاريح بواسطة المنتديات';

$txt['permissions_modify_group'] = 'تعديل مجموعة';
$txt['permissions_general'] = 'التصاريح العامة';
$txt['permissions_board'] = 'تصاريح المنتدى العامة';
$txt['permissions_commit'] = 'حفظ التغيرات';
$txt['permissions_modify_local'] = 'تعديل التصاريح المحلية';
$txt['permissions_on'] = 'في المنتدى';
$txt['permissions_local_for'] = 'التصاريح المحلية للمجموعة';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = 'لكل تصريح يمكنك اختيار \'سماح\' (A), \'عدم سماح\' (X), أو <span style="color: red;">\'رفض\' (D)</span>.<br /><br />تذكر انك في حالة رفض التصريح, فأي عضو - سواء مراقب أو خلافه - في تلك المجموعة سيتم حظر التصريح عنه.<br />لهذا السبب يجب أن تتعامل مع الرفض بشكل حذر, و فقط في الحالات <b>الضرورية</b>. عدم السماح, ستقوم بالرفض ما لم يكن تم التصريح له.';

$txt['permissiongroup_general'] = 'عام';
$txt['permissionname_view_stats'] = 'مشاهدة إحصاءات المنتدى';
$txt['permissionhelp_view_stats'] = 'إحصاءات المنتدى هي صفحة تعرض ملخص لجميع إحصاءات المنتدى ، مثل عدد الأعضاء ، عدد الرسائل ...الخ. تمكين هذا التصريح سوف يضيف وصلة في نهاية فهرس المنتدى (\'[إحصاءات أخرى]\').';
$txt['permissionname_view_mlist'] = 'مشاهدة قائمة الأعضاء';
$txt['permissionhelp_view_mlist'] = 'قائمة الأعضاء تعرض كل الأعضاء المسجلين في المنتدى. يمكن فرز تلك القائمة و كذلك البحث فيها. يتم عرض وصلة للقائمة في فهرس المنتدى و صفحة الأعضاء بالنقر على عدد الأعضاء.';
$txt['permissionname_who_view'] = 'مشاهدة من المتصل الآن';
$txt['permissionhelp_who_view'] = 'من المتصل الآن تعرض من هو متصل الآن و ما هي الأحداث التي يقومون بها. هذا التصريح يعمل في حال تمكينه في المزايا و الخيارات. يمكنك الوصول إلى صفحة من المتصل الآن بالنقر على وصلة المتصلين الآن في فهرس المنتدى.';
$txt['permissionname_search_posts'] = 'البحث عن الرسائل و المواضيع';
$txt['permissionhelp_search_posts'] = 'تصريح البحث يخوّل المستخدم للبحث في كافة المنتديات المصرح له بالوصول إليهم. عند تمكين هذا التصريح سيظهر زر بحث في شريط الأزرار للمنتدى.';
$txt['permissionname_karma_edit'] = 'تغير الكارما لمستخدمين آخرين';
$txt['permissionhelp_karma_edit'] = 'الكارما هي ميزة لعرض مدى شعبية العضو. لكي تستخدم هذه الميزة يجب تفعيلها في المزايا و الخيارات. سيسمح هذا التصريح لمجموعة الأعضاء بالتصويت على الكارما. هذا التصريح ليس له تأثير على الضيوف.';

$txt['permissiongroup_pm'] = 'الرسائل الشخصية';
$txt['permissionname_pm_read'] = 'قراءة الرسائل الشخصية';
$txt['permissionhelp_pm_read'] = 'هذا التصريح يسمح للمستخدمين بالوصول إلى قسم الرسائل الشخصية الخص بهم و قراءتها. من دون هذا التصريح فلن يتمكن المستخدم من بعث رسائل شخصية.';
$txt['permissionname_pm_send'] = 'بعث رسائل شخصية';
$txt['permissionhelp_pm_send'] = 'بعث رسائل شخصية للأعضاء الآخرون. يتطلب تمكين تصريح قراءة الرسائل الشخصية.';

$txt['permissiongroup_calendar'] = 'التقويم';
$txt['permissionname_calendar_view'] = 'مشاهدة التقويم';
$txt['permissionhelp_calendar_view'] = 'يعرض التقويم أعياد الميلاد، الأحداث و الإجازات لكل شهر. عند تمكين هذا التصريح سيتم عرض زر التقويم في شريط الأزرار للمنتدى و سيتم عرض قائمة في أسفل فهرس المنتدى ، يحتوي على الأحداث القادمة. يجب تمكين التقويم في المزايا و الخيارات.';
$txt['permissionname_calendar_post'] = 'إنشاء أحداث في التقويم';
$txt['permissionhelp_calendar_post'] = 'الحدث هو عبارة عن موضوع متصل بتاريخ معين. إنشاء الأحداث يتم من خلال التقويم. يتم إنشاء الحدث في حالة كون ذلك المستخدم يملك تصريح إنشاء مواضيع جديدة.';
$txt['permissionname_calendar_edit'] = 'تحرير الأحداث في التقويم';
$txt['permissionhelp_calendar_edit'] = 'الحدث هو عبارة عن موضوع متصل بتاريخ معين. تحرير الأحداث يتم من خلال النقر على العلامة * ذات اللون الأحمر الموجودة بجانب الحدث في صفحة مشاهدة التقويم.يتم تحرير الحدث في حالة كون ذلك المستخدم يملك التصاريح الكافية لتحرير أول رسالة في ذلك الموضوع المتصل إلى الحدث.';
$txt['permissionname_calendar_edit_own'] = 'أحداث لك';
$txt['permissionname_calendar_edit_any'] = 'أية أحدث';

$txt['permissiongroup_maintenance'] = 'إشراف المنتدى';
$txt['permissionname_admin_forum'] = 'إشراف على المنتدى و قاعدة البيانات';
$txt['permissionhelp_admin_forum'] = 'هذا التصريح يسمح للمستخدم بتغير إعدادات المنتدى و القالب، إدارة الحزم و استخدام أدوات قاعدة بيانات المنتدى و الصيانة. استخدم هذا التصريح بحذر حيث أنه يعطي مزايا متفوقة.';
$txt['permissionname_manage_boards'] = 'معالجة التصنيفات و المنتديات';
$txt['permissionhelp_manage_boards'] = 'هذا التصريح يسمح بإنشاء ، تحرير و حذف المنتديات و التصنيفات.';
$txt['permissionname_manage_attachments'] = 'معالجة الملحقات و صور الشخصية';
$txt['permissionhelp_manage_attachments'] = 'هذا التصريح يسمح بالدخول إلى قسم الملحقات ، حيث يتم عرض قائمة بكافة ملحقات و صور الشخصية للمنتدى مع إمكانية الحذف.';
$txt['permissionname_manage_smileys'] = 'معالجة الابتسامات';
$txt['permissionhelp_manage_smileys'] = 'هذا التصريح يسمح بالدخول إلى قسم الابتسامات ، حيث يمكن إضافة أو حذف أو تحرير الابتسامات و مجموعاتها.';
$txt['permissionname_edit_news'] = 'تحرير الأخبار';
$txt['permissionhelp_edit_news'] = 'وظيفة الأخبار تسمح بعرض سطر أخبار عشوائي في كل صفحة. لكي تستخدم الأخبار يجب تمكينها في إعدادات المنتدى.';

$txt['permissiongroup_member_admin'] = 'الاشراف على الاعضاء';
$txt['permissionname_moderate_forum'] = 'مراقبة أعضاء المنتدى';
$txt['permissionhelp_moderate_forum'] = 'هذا التصريح يحتوي على كافة الوظائف المهمة لمراقبة العضو، مثل الحظر ، معالجة التسجيل و تعقب المستخدم.';
$txt['permissionname_manage_membergroups'] = 'معالجة و ضبط مجموعات الأعضاء';
$txt['permissionhelp_manage_membergroups'] = 'هذا التصريح يسمح للمستخدم بتحرير مجموعات الأعضاء و تعيين مجموعة أعضاء لعضو آخر.';
$txt['permissionname_manage_permissions'] = 'معالجة التصريحات';
$txt['permissionhelp_manage_permissions'] = 'هذا التصريح يسمح للمستخدم بتحرير كافة التصريحات لمجموعة أعضاء بشكل عام أو لمنتدى واحد.';
$txt['permissionname_manage_bans'] = 'معالجة قائمة الحظر';
$txt['permissionhelp_manage_bans'] = 'هذا التصريح يسمح للمستخدم بإضافة أو حذف اسم مستخدم، عنوان IP ، اسم hostname و عنوان البريد إلى قائمة الاعضاء المحظورين. كما يسمح أيضا بمشاهدة و حذف سجل المدخلات للأعضاء المحظورين الذين حاولو تسجيل الدخول.';
$txt['permissionname_send_mail'] = 'بعث بريد إلى الأعضاء';
$txt['permissionhelp_send_mail'] = 'بعث رسائل إلى الأعضاء أو بعض منهم بواسطة البريد أو الرسائل الشخصية. تحتاج الرسائل الشخصية إلى تمكين تصريح بعث رسالة شخصية.';

$txt['permissiongroup_profile'] = 'هوية العضو';
$txt['permissionname_profile_view'] = 'مشاهدة ملخص الهوية و إحصاءاتها';
$txt['permissionhelp_profile_view'] = 'هذا التصريح يسمح للمستخدمين الذين ينقرون على أي اسم مستخدم أن يشاهدوا ملخص للهوية و بعض الاحصاءات و رسائل المستخدم.';
$txt['permissionname_profile_view_own'] = 'هويتك';
$txt['permissionname_profile_view_any'] = 'أي هوية';
$txt['permissionname_profile_identity'] = 'تحرير إعدادات الحساب';
$txt['permissionhelp_profile_identity'] = 'إعدادات الحساب هي تلك الإعدادات الأساسية للهوية. مثل كلمة المرور ، عنوان البريد ، مجموعة الأعضاء و اللغة المفضلة.';
$txt['permissionname_profile_identity_own'] = 'هويتك';
$txt['permissionname_profile_identity_any'] = 'أي هوية';
$txt['permissionname_profile_extra'] = 'تحرير إعدادات الحساب الإضافية';
$txt['permissionhelp_profile_extra'] = 'إعدادات الحساب الإضافية تحتوي على إعدادات الصور الشخصية ، تفضيلات القالب ، التنبيهات و الرسائل الشخصية.';
$txt['permissionname_profile_extra_own'] = 'هويتك';
$txt['permissionname_profile_extra_any'] = 'أي هوية';
$txt['permissionname_profile_title'] = 'تحرير العناوين المخصصة';
$txt['permissionhelp_profile_title'] = 'العنوان المخصص يتم عرضه في صفحة مشاهدة الموضوع و تحت هوية كل مستخدم يملك عنوان مخصص.';
$txt['permissionname_profile_title_own'] = 'هويتك';
$txt['permissionname_profile_title_any'] = 'أي هوية';
$txt['permissionname_profile_remove'] = 'حذف حساب';
$txt['permissionhelp_profile_remove'] = 'هذا التصريح يسمح للمستخدم من حذف حسابه عند تحديد خيار هويتك.';
$txt['permissionname_profile_remove_own'] = 'هويتك';
$txt['permissionname_profile_remove_any'] = 'أي هوية';
$txt['permissionname_profile_server_avatar'] = 'اختيار صورة من السيرفر';
$txt['permissionhelp_profile_server_avatar'] = 'في حال التفعيل سيسمح ذلك للعضو لاختيار صورة من مجموعة الصور الرمزية المتوفرة ضمن السيرفر المحلي.';
$txt['permissionname_profile_upload_avatar'] = 'تحميل صورة على السيرفر';
$txt['permissionhelp_profile_upload_avatar'] = 'هذا الخيار يسمح للعضو بتحميل صورة رمزية على السيرفر.';
$txt['permissionname_profile_remote_avatar'] = 'اختيار صورة شخصية خارجية';
$txt['permissionhelp_profile_remote_avatar'] = 'بسبب كون الصور الشخصية قد تؤثر على زمن إنشاء الصفحة بصورة سلبية، فمن الممكن عدم التصريح لبعض مجموعات الأعضاء من استخدام الصور الشخصية المخزنة في ملقمات خارجية. ';

$txt['permissiongroup_general_board'] = 'عام';
$txt['permissionname_moderate_board'] = 'مراقبة منتدى';
$txt['permissionhelp_moderate_board'] = 'تصريح مراقبة المنتدى تمنح المراقب تصاريح إضافية لمراقبة. التصاريح الممنوحة تشتمل على الرد على موضوع مقفل، تغير مدة انتهاء صلاحية الإستفتاء و شاهدة نتائج الإستفتاء حتى و إن ';

$txt['permissiongroup_topic'] = 'مواضيع';
$txt['permissionname_post_new'] = 'كتابة مواضيع جديدة';
$txt['permissionhelp_post_new'] = 'هذا التصريح يسمح للمستخدم بكتابة مواضيع جديدة. و لا تمنح تصريح السماح بالرد على المواضيع.';
$txt['permissionname_merge_any'] = 'دمج أي موضوع';
$txt['permissionhelp_merge_any'] = 'دمج موضوعين أو أكثر في موضوع واحد. ترتيب الرسائل في الموضوع المدموج سوف تعتمد على وقت إنشاء الرسالة. يمكن للمستخدم دمج المواضيع في المنتديات المسموح له بالدمج فيها. لكي يتم دمج مواضيع عدة دفعة واحدة يجب تمكين ميزة المراقبة السريعة في الهوية.';
$txt['permissionname_split_any'] = 'فصل أي موضوع';
$txt['permissionhelp_split_any'] = 'فصل موضوع إلى موضوعين.';
$txt['permissionname_send_topic'] = 'بعث المواضيع إلى أصدقاء';
$txt['permissionhelp_send_topic'] = 'هذا التصريح يسمح للمستخدم ببعث موضوع إلى صديق، بواسطة إدخال عنوان بريد الصديق كما يمكن كتابة رسالة.';
$txt['permissionname_make_sticky'] = 'تثبيت المواضيع';
$txt['permissionhelp_make_sticky'] = 'المواضيع الثابتة هي تلك التي تظهر دوما في أعلى المنتدى. وتكون تلك المواضيع مقيده في حالة الإعلانات أو الرسائل المهمة.';
$txt['permissionname_move'] = 'نقل أي موضوع';
$txt['permissionhelp_move'] = 'نقل موضوع من منتدى إلى آخر. يسمح للمستخدمين من اختيار المنتدى الهدف الذي يملكون حق الوصول إليه فقط.';
$txt['permissionname_move_own'] = 'موضوعك';
$txt['permissionname_move_any'] = 'أي موضوع';
$txt['permissionname_lock'] = 'قفل المواضيع';
$txt['permissionhelp_lock'] = 'هذا التصريح يسمح للمستخدم من قفل أي موضوع. يستخدم هذا لكي يمنع حق الرد على الموضوع. فقط يمكن للمستخدمين ذوي صلاحية المراقبة من إضافة الردود للمواضيع المقفلة.';
$txt['permissionname_lock_own'] = 'موضوعك';
$txt['permissionname_lock_any'] = 'أي موضوع';
$txt['permissionname_remove'] = 'حذف الرسائل';
$txt['permissionhelp_remove'] = 'حذف الرسائل. هذا التصريح لا يسمح للمستخدم بحذف أول رسالة في الموضوع.';
$txt['permissionname_remove_own'] = 'رسالتك';
$txt['permissionname_remove_any'] = 'أي رسالة';
$txt['permissionname_post_reply'] = 'كتابة ردود على المواضيع';
$txt['permissionhelp_post_reply'] = 'هذا التصريح يسمح بالرد على المواضيع.';
$txt['permissionname_post_reply_own'] = 'موضوعك';
$txt['permissionname_post_reply_any'] = 'أي موضوع';
$txt['permissionname_modify_replies'] = 'تعديل الردود على مواضيعك';
$txt['permissionhelp_modify_replies'] = 'هذا التصريح يسمح للمستخدم الذي بدأ موضوع ما أحقية تعديل الردود على موضوعه.';
$txt['permissionname_delete_replies'] = 'حذف الردود على المواضيع الشخصية';
$txt['permissionhelp_delete_replies'] = 'هذا الخيار سيسمح للعضو الذي بدأ الموضوع بحذف جميع الردود على موضوعه.';
$txt['permissionname_announce_topic'] = 'موضوع الاعلان';
$txt['permissionhelp_announce_topic'] = 'للسماح بإرسال بريد إعلاني عن موضوع ما لكافة الأعضاء أو لبعض مجموعات الأعضاء.';

$txt['permissiongroup_post'] = 'الرسائل';
$txt['permissionname_delete'] = 'حذف المواضيع';
$txt['permissionhelp_delete'] = 'حذف الموضوع كاملا. لاحظ أن هذا التصريح لا يخوّل حذف رسالة معينة في الموضوع.';
$txt['permissionname_delete_own'] = 'موضوعك';
$txt['permissionname_delete_any'] = 'أي موضوع';
$txt['permissionname_modify'] = 'تعديل الرسائل';
$txt['permissionhelp_modify'] = 'تحرير الرسائل';
$txt['permissionname_modify_own'] = 'رسالتك';
$txt['permissionname_modify_any'] = 'أي رسالة';
$txt['permissionname_report_any'] = 'تنبيه المراقب على الرسائل';
$txt['permissionhelp_report_any'] = 'هذا التصريح يضيف وصلة في كل رسالة ، تمكن المستخدم من تنبيه المراقب عن الرسالة. في حالة التنبيه سيتم إخطار كافة المراقبين على ذلك المنتدى بواسطة البريد مع وصلة للرسالة المنبه عنها و ووصف إذا تم كتباته من قبل المنبه.';

$txt['permissiongroup_poll'] = 'إستفتاءات';
$txt['permissionname_poll_view'] = 'مشاهدة الإستفتاءات';
$txt['permissionhelp_poll_view'] = 'هذا التصريح يسمح للمستخدم من مشاهدة الإستفتاءات. من دون هذا التصريح فلن يشاهد المستخدم إلا الموضوع من دون الإستفتاء.';
$txt['permissionname_poll_vote'] = 'تصويت على الإستفتاءات';
$txt['permissionhelp_poll_vote'] = 'هذا التصريح يسمح للعضو المسجل من الإدلاء بصوته في الإستفتاء. و لا ينطبق ذلك على الضيوف.';
$txt['permissionname_poll_post'] = 'كتابة إستفتاءات';
$txt['permissionhelp_poll_post'] = 'هذا التصريح يسمح للمستخدم بكتابة إستفتاء جديد. لكون الإستفتاءات حالة خاصة من المواضيع ، فلا يمكنك استخدام هذا التصريح من دون تصريح إضافة موضوع جديد.';
$txt['permissionname_poll_add'] = 'إضافة إستفتاء إلى المواضيع';
$txt['permissionhelp_poll_add'] = 'إضافة إستفتاء إلى مواضيع تسمح للمستخدم  بإضافة إستفتاء بعد أن يكون قد تم إنشاء الموضوع. يحتاج هذا التصريح إلى أحقية تحرير أو رسالة في الموضوع.';
$txt['permissionname_poll_add_own'] = 'مواضيعك';
$txt['permissionname_poll_add_any'] = 'أي موضوع';
$txt['permissionname_poll_edit'] = 'تحرير الإستفتاءات';
$txt['permissionhelp_poll_edit'] = 'هذا التصريح يسمح بتحرير خيارات الإستفتاء و إعادة تصفير الإستفتاء. من اجل تحرير أقصى عدد لخيارات الإستفتاء و مدة انتهاء صلاحية الإستفتاء ، فيجب أن يكون لدى المستخدم تصريح مراقبة المنتدى.';
$txt['permissionname_poll_edit_own'] = 'إستفتاءك';
$txt['permissionname_poll_edit_any'] = 'أي إستفتاء';
$txt['permissionname_poll_lock'] = 'قفل الإستفتاءات';
$txt['permissionhelp_poll_lock'] = 'قفل الإستفتاءات يمنع من استقبال أي تصويت جديد.';
$txt['permissionname_poll_lock_own'] = 'لإستفتاءك';
$txt['permissionname_poll_lock_any'] = 'أي إستفتاء';
$txt['permissionname_poll_remove'] = 'حذف الإستفتاءات';
$txt['permissionhelp_poll_remove'] = 'هذا التصريح يسمح بحذف كافة الإستفتاءات.';
$txt['permissionname_poll_remove_own'] = 'إستفتاءك';
$txt['permissionname_poll_remove_any'] = 'أي إستفتاء';

$txt['permissiongroup_notification'] = 'تنبيهات';
$txt['permissionname_mark_any_notify'] = 'طلب التنبيه على الردود';
$txt['permissionhelp_mark_any_notify'] = 'هذه الميزة تسمح للمستخدمين من استقبال التنبيهات عندما يقوم أي شخص بالرد على موضوع تم المشاركة فيه.';
$txt['permissionname_mark_notify'] = 'طلب التنبيه على المواضيع الجديدة';
$txt['permissionhelp_mark_notify'] = 'التنبيه على المواضيع الجديدة هي ميزة تسمح للمستخدم من استقبال رسالة بريد في كل مرة يتم فيها إنشاء موضوع جديد في المنتدى المشارك فيه.';

$txt['permissiongroup_attachment'] = 'الملحقات';
$txt['permissionname_view_attachments'] = 'مشاهدة الملحقات';
$txt['permissionhelp_view_attachments'] = 'الملحقات هي عبارة عن ملفات يتم إلحاقها في الرسائل. يمكن تمكين و ضبط هذا الخيار في تحرير المزايا و الخيارات. بما أن الملحقات لا يتم الوصول إليها مباشرة ، فيمكنك حمايتهم من التنزيل بواسطة المستخدمين الذين لا يملكون هذا التصريح.';
$txt['permissionname_post_attachment'] = 'إضافة ملحقات';
$txt['permissionhelp_post_attachment'] = 'الملحقات هي عبارة عن ملفات يتم إلحاقها في الرسائل. يمكن تضمين أكثر من ملحق في رسالة واحدة.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'اعدادات التصاريح';
$txt['groups_manage_permissions'] = 'مجموعات الاعضاء المسموح لها بتعديل التصاريح';
$txt['permission_settings_submit'] = 'حفظ';
$txt['permission_settings_enable_deny'] = 'تفعيل الميزة لرفض التصاريح';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'الغاء هذه الميزة يسحول التصاريح من \\\'رفض\\\' الى \\\'عدم السماح\\\'.';
$txt['permission_by_membergroup_desc'] = 'هنا يمكنك تحرير التصاريح الخاصه بكل مجموعة أعضاء , هذه التصاريح تعمل على كافة أقسام المنتدى عدا الأقسام التى لها تصاريح (محليخ) خاصه بها';
$txt['permission_by_board_desc'] = 'هنا تستطيع تحديد فيما إذا المنتدى يستخدم صلاحيات عامة أم أنه يملك صلاحيات مخصصة. عند استخدام الصلاحيات المخصصة فهذا يعني أن في المنتدى, تستطيع أن تحدد صلاحيات مخصصة لكل مجموعة.';
$txt['permission_settings_desc'] = 'هنا تستطيع أن تحدد من له صلاحية تغير الصلاحيات, و يخضع ذلك لقوانين تعقيد نظام الصلاحيات كما ينبغي أن يكون.';
$txt['permission_settings_enable_postgroups'] = 'تفعيل صلاحيات المجموعات التي تعتمد على عدد المشاركات';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'عند تعطيل هذا الخيار فإنه سوف يزيل صلاحيات الحالية المسندة إلى المجموعات التي تعتمد على عدد المشاركات.';
$txt['permission_settings_enable_by_board'] = 'تفعيل ميزة التصاريح الخاصه بكل قسم';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'الغاء هذه الميزه سوف يقوم بمسح كل التصاريح (المحليه) الخاصة بالأقسام التى لها تصاريح  (محليه)خاصه بها.';

?>