<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'ar_SA.utf8';
$txt['lang_dictionary'] = 'ar';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = true;

$txt['days'] = array('الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت');
$txt['days_short'] = array('احد', 'اثن', 'ثلا', 'ارب', 'خمس', 'جمع', 'سبت');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر');
$txt['months_titles'] = array(1 => 'يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر');
$txt['months_short'] = array(1 => 'ينا', 'فبر', 'مار', 'أبر', 'ماي', 'يون', 'يول', 'اغس', 'سبت', 'اكت', 'نوف', 'ديس');

$txt['newmessages0'] = 'جديد';
$txt['newmessages1'] = 'جديد';
$txt['newmessages3'] = 'جديد';
$txt['newmessages4'] = ',';

$txt[2] = 'مشرف';

$txt[10] = 'حفظ';

$txt[17] = 'تعديل';
$txt[18] = $context['forum_name'] . ' - فهرس';
$txt[19] = 'أعضاء';
$txt[20] = 'اسم المنتدى';
$txt[21] = 'رسائل';
$txt[22] = 'آخر رسالة';

$txt[24] = '(بدون موضوع)';
$txt[26] = 'رسائل';
$txt[27] = 'مشاهدة الملف الشخصى';
$txt[28] = 'زائر';
$txt[29] = 'الكاتب';
$txt[30] = 'في';
$txt[31] = 'حذف';
$txt[33] = 'بداية موضوع جديد';

$txt[34] = 'دخول';
// Use numeric entities in the below string.
$txt[35] = 'اسم المستخدم';
$txt[36] = 'كلمة المرور';

$txt[40] = 'اسم المستخدم غير موجود.';

$txt[62] = 'مراقب المنتدى';
$txt[63] = 'حذف الموضوع';
$txt[64] = 'مواضيع';
$txt[66] = 'تعديل الرسالة';
$txt[68] = 'الاسم';
$txt[69] = 'البريد';
$txt[70] = 'الموضوع';
$txt[72] = 'الرسالة';

$txt[79] = 'حسابى';

$txt[81] = 'اختيار كلمة المرور';
$txt[82] = 'تأكيد كلمة المرور';
$txt[87] = 'الموقع';

$txt[92] = 'مشاهدة الملف الشخصى';
$txt[94] = 'إجمالي';
$txt[95] = 'رسائل';
$txt[96] = 'موقع';
$txt[97] = 'تسجيل';

$txt[101] = 'فهرس الرسائل';
$txt[102] = 'أخبار';
$txt[103] = 'بداية';

$txt[104] = 'قفل/فتح الموضوع';
$txt[105] = 'إرسال';
$txt[106] = 'حدث خطأ!';
$txt[107] = 'في';
$txt[108] = 'خروج';
$txt[109] = 'بدء بواسطة';
$txt[110] = 'ردود';
$txt[111] = 'آخر رسالة';
$txt[114] = 'دخول المشرف';
// Use numeric entities in the below string.
$txt[118] = 'موضوع';
$txt[119] = 'تعليمات';
$txt[121] = 'حذف رسالة';
$txt[125] = 'تنبيه';
$txt[126] = 'هل ترغب في بريد تنبيهي في حالة الرد على هذا الموضوع؟';
// Use numeric entities in the below string.
$txt[130] = "تحياتنا,\nفريق " . $context['forum_name'] . '.';
$txt[131] = 'تنبيه على الردود';
$txt[132] = 'نقل موضوع';
$txt[133] = 'نقل إلى';
$txt[139] = 'صفحات';
$txt[140] = 'المستخدمين النشطين في الدقائق ' . $modSettings['lastActive'] . ' الأخيرة';
$txt[144] = 'رسائل شخصية';
$txt[145] = 'رد مع الاقتباس';
$txt[146] = 'رد';

$txt[151] = 'لا رسائل...';
$txt[152] = 'لديك';
$txt[153] = 'رسائل';
$txt[154] = 'حذف هذه الرسالة';

$txt[158] = 'المستخدمين المتصلين الآن';
$txt[159] = 'رسالة شخصية';
$txt[160] = 'انتقل إلى';
$txt[161] = 'اذهب';
$txt[162] = 'هل ترغب في حذف هذا الموضوع؟';
$txt[163] = 'نعم';
$txt[164] = 'كلا';

$txt[166] = 'نتائج البحث';
$txt[167] = 'نهاية النتائج';
$txt[170] = 'نأسف، لم يتم العثور على نتائج';
$txt[176] = 'في';

$txt[182] = 'بحث';
$txt[190] = 'الكل';

$txt[193] = 'للوراء';
$txt[194] = 'تذكير';
$txt[195] = 'الموضوع المبدوء بواسطة';
$txt[196] = 'العنوان';
$txt[197] = 'إرسال بواسطة';
$txt[200] = 'قائمة لكافة الأعضاء يمكن البحث فيها';
$txt[201] = 'الرجاء الترحيب بـ';
$txt[208] = 'مركز الإشراف';
$txt[211] = 'آخر تحرير';
$txt[212] = 'هل ترغب في إبطال التنبيه عن هذا الموضوع؟';

$txt[214] = 'الرسائل الحديثة';

$txt[227] = 'الدولة';
$txt[231] = 'الجنس';
$txt[233] = 'تاريخ التسجيل';

$txt[234] = 'مشاهدة آخر 10 رسائل في المنتدى.';
$txt[235] = 'هو آخر موضع تم تحديثه';

$txt[238] = 'ذكر';
$txt[239] = 'أنثى';

$txt[240] = 'حرف غير مقبول في اسم المستخدم.';

$txt['welcome_guest'] = 'أهلا, <b>' . $txt[28] . '</b>. الرجاء <a href="' . $scripturl . '?action=login">الدخول</a> أو <a href="' . $scripturl . '?action=register">التسجيل</a>';
$txt['welcome_guest_activate'] = '<br />هل فقدت <a href="' . $scripturl . '?action=activate">بريد التنشيط؟</a>';
$txt['hello_member'] = 'مرحبا,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'أهلا,';
$txt[247] = 'أهلا،';
$txt[248] = 'مرحبا،';
$txt[249] = 'الرجاء';
$txt[250] = 'للوراء';
$txt[251] = 'الرجاء تحديد الوجهة';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'أرسلت بواسطة';

$txt[287] = 'مبتسم';
$txt[288] = 'غضبان';
$txt[289] = 'فرح';
$txt[290] = 'ضحك';
$txt[291] = 'حزين';
$txt[292] = 'يغمز';
$txt[293] = 'ممتعض';
$txt[294] = 'مذهول';
$txt[295] = 'جيد';
$txt[296] = 'استفهام';
$txt[450] = 'أعين متقلبة';
$txt[451] = 'لسان';
$txt[526] = 'خجل';
$txt[527] = 'مقفل الشفتين';
$txt[528] = 'متردد';
$txt[529] = 'قبلة';
$txt[530] = 'بكاء';

$txt[298] = 'مشرف';
$txt[299] = 'مشرفين';

$txt[300] = 'تعليم المواضيع كمقروءة لهذا المنتدى';
$txt[301] = 'مشاهدة';
$txt[302] = 'جديد';

$txt[303] = 'مشاهدة كافة المستخدمين';
$txt[305] = 'مشاهدة';
$txt[307] = 'بريد';

$txt[308] = 'مشاهدة الأعضاء';
$txt[309] = 'من';
$txt[310] = 'إجمالي الأعضاء';
$txt[311] = 'إلى';
$txt[315] = 'هل نسيت كلمة المرور؟';

$txt[317] = 'تاريخ';
// Use numeric entities in the below string.
$txt[318] = 'من';
$txt[319] = 'الموضوع';
$txt[322] = 'التحقق من الرسائل الجديدة';
$txt[324] = 'إلى';

$txt[330] = 'مواضيع';
$txt[331] = 'أعضاء';
$txt[332] = 'قائمة الأعضاء';
$txt[333] = 'رسائل جديدة';
$txt[334] = 'لا رسائل جديدة';

$txt['sendtopic_send'] = 'إرسال';

$txt[371] = 'فارق التوقيت';
$txt[377] = 'أو';

$txt[398] = 'نأسف، لم يتم العثور على نتائج';

$txt[418] = 'تنبيه';

$txt[430] = 'نأسف %s, تم حضرك من استخدام هذا المنتدى!';

$txt[452] = 'تعليم كافة الرسائل كمقروءة';

$txt[454] = 'موضوع ساخن (أكثر من ' . $modSettings['hotTopicPosts'] . ' رد)';
$txt[455] = 'موضوع شعبي (أكثر من ' . $modSettings['hotTopicVeryPosts'] . ' رد)';
$txt[456] = 'موضوع مقفل';
$txt[457] = 'موضوع عادي';
$txt['participation_caption'] = 'موضوع شاركت فيه';

$txt[462] = 'اذهب';

$txt[465] = 'طباعة';
$txt[467] = 'هوية';
$txt[468] = 'مختصر الموضوع';
$txt[470] = 'غ/م';
$txt[471] = 'رسالة';
$txt[473] = 'هذا الاسم مستخدم مسبقا من قبل عضو موجود.';

$txt[488] = 'إجمالي الأعضاء';
$txt[489] = 'إجمالي الرسائل';
$txt[490] = 'إجمالي المواضيع';

$txt[497] = 'دقائق للبقاء متصلا';

$txt[507] = 'معاينة';
$txt[508] = 'البقاء متصل دوما';

$txt[511] = 'سجل';
// Use numeric entities in the below string.
$txt[512] = 'IP ';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'بواسطة';

$txt[578] = 'ساعات';
$txt[579] = 'أيام';

$txt[581] = ', العضو الجديد.';

$txt[582] = 'بحث عن';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'هلا.+هل+انت+موجود؟';
$txt[604] = 'YIM';

$txt[616] = 'تذكر ، هذا المنتدى في حالة \'نمط الصيانة\'.';

$txt[641] = 'شوهد';
$txt[642] = 'مرات';

$txt[645] = 'حالة المنتدى';
$txt[656] = 'آخر عضو';
$txt[658] = 'إجمالي التصنيفات';
$txt[659] = 'آخر رسالة';

$txt[660] = 'لديك';
$txt[661] = 'انقر';
$txt[662] = 'هنا';
$txt[663] = 'لمشاهدتهم.';

$txt[665] = 'إجمالي المنتديات';

$txt[668] = 'طباعة الصفحة';

$txt[679] = 'يجب أن يكون بريد صحيحا.';

$txt[683] = 'أنا مهووس بالحاسب!';
$txt[685] = $context['forum_name'] . ' - مركز المعلومات';

$txt[707] = 'بعث هذا الموضوع';

$txt['sendtopic_title'] = 'بعث الموضوع &quot;%s&quot; إلى صديق.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'عزيزي %s,';
$txt['sendtopic_this_topic'] = 'أتمنى منك مشاهدة "%s" في ' . $context['forum_name'] . '.  الرجاء النقر على الوصلة التالية';
$txt['sendtopic_thanks'] = 'شكرا';
$txt['sendtopic_sender_name'] = 'اسمك';
$txt['sendtopic_sender_email'] = 'عنوان بريدك';
$txt['sendtopic_receiver_name'] = 'اسم المبعوث إليه';
$txt['sendtopic_receiver_email'] = 'بريد المبعوث إليه';
$txt['sendtopic_comment'] = 'إضافة تعليق';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'تم إضافة تعليق خاص بهذه الموضوع';

$txt[721] = 'إخفاء البريد من مشاهدة الجميع؟';

$txt[737] = 'تعليم الكل';

// Use numeric entities in the below string.
$txt[1001] = 'خطأ في قاعدة البيانات';
$txt[1002] = 'الرجاء المحاولة مرة أخرى. إذا عدت مرة أخرى إلى صفحة الخطأ هذه فالرجاء إعلام المشرف.';
$txt[1003] = 'الملف';
$txt[1004] = 'السطر';
// Use numeric entities in the below string.
$txt[1005] = 'اس ام اف، قام بمحاولة إصلاح الخطأ في قاعدة البيانات تلقائيا. إذا عاودتك تلك الأخطاء أو تكررت رسائل بريدية بتلك الأخطاء، فالرجاء مراجعة مستضيفك.';
$txt['database_error_versions'] = '<b>ملاحظة:</b> يبدو أن قاعدة البيانات تحتاج إلى ترقية. ملفات المنتدى حاليا تحمل الاصدارة ' . $forum_version . ', بينما قاعدة بياناتك هي الإصدارة SMF ' . $modSettings['smfVersion'] . '. من المستحسن أن تقوم بتنفيذ آخر إصدارة من upgrade.php.';
$txt['template_parse_error'] = 'خطأ في معالجة القالب!';
$txt['template_parse_error_message'] = 'يبدو أن هنالك مشكلة في نظام القوالب.  هذه المشكلة مؤقتة فالرجاء العودة لاحقا و المحاولة مرة أخرى.  إذا عاودتك هذه الرسالة مرة أخرى الرجاء الاتصال بالمشرف.<br /><br />يمكنك أن تقوم <a href="javascript:location.reload();">بإعادة تحديث الصفحة</a>.';
$txt['template_parse_error_details'] = 'حدثت مشكلة بتحميل القالب <tt><b>%1$s</b></tt> أو ملف اللغة.  الرجاء التحقق من السياق و المحاولة مرة أخرى - تذكر, الفواصل المفردة (<tt>\'</tt>) يجب أن يتم حصرها بشرطة مائلة (<tt>\\</tt>).  لعرض معلومات أوفى عن الخطأ في PHP, حاول <a href="' . $boardurl . '%1$s">الى الملف مباشرة</a>.<br /><br />يمكنك محاولة <a href="javascript:location.reload();">إعادة تحديث الصفحة</a> أو <a href="' . $scripturl . '?theme=1">استخدام القالب الافتراضي</a>.';

$txt['smf10'] = '<b>اليوم</b> في ';
$txt['smf10b'] = '<b>الأمس</b> في ';
$txt['smf20'] = 'كتابة إستفتاء جديد';
$txt['smf21'] = 'سؤال';
$txt['smf23'] = 'إضافة تصويت';
$txt['smf24'] = 'إجمالي التصويت';
$txt['smf25'] = 'اختصارات: اضغط alt+s للإضافة أو alt+p للمعاينة';
$txt['smf29'] = 'مشاهدة النتائج.';
$txt['smf30'] = 'قفل الإستفتاء';
$txt['smf30b'] = 'فتح الإستفتاء';
$txt['smf39'] = 'تحرير الإستفتاء';
$txt['smf43'] = 'إستفتاء';
$txt['smf47'] = '1 يوم';
$txt['smf48'] = '1 أسبوع';
$txt['smf49'] = '1 شهر';
$txt['smf50'] = 'للأبد';
$txt['smf52'] = 'تسجيل الدخول باسم المستخدم، كلمة المرور و مدة الجلسة';
$txt['smf53'] = '1 ساعة';
$txt['smf56'] = 'نقل';
$txt['smf57'] = 'الرجاء كتابة تعليق مختصر لسبب<br />نقل هذا الموضوع.';
$txt['smf60'] = 'نأسف، فعدد رسائلك لا تخولك لتحرير الكارما- تحتاج إلى العدد التالي ';
$txt['smf62'] = 'نأسف، لا يمكن تكرار الحدث نفسه في مدة التوقف. تحتاج إلى الانتظار مدة ';
$txt['smf82'] = 'منتدى';
$txt['smf88'] = 'في';
$txt['smf96'] = 'موضوع ثابت';

$txt['smf138'] = 'حذف';

$txt['smf199'] = 'رسائلك الشخصية';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[إحصاءات أخرى]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'شفرة';
$txt['smf239'] = 'مقتبس من';
$txt['smf240'] = 'اقتباس';

$txt['smf251'] = 'فصل الموضوع';
$txt['smf252'] = 'دمج الموضوع';
$txt['smf254'] = 'عنوان الموضوع الجديد';
$txt['smf255'] = 'فقط فصل هذه الرسالة.';
$txt['smf256'] = 'فصل الموضوع بداية من هذه الرسالة و ما بعدها.';
$txt['smf257'] = 'اختر الرسائل التي ستفصل.';
$txt['smf258'] = 'موضوع جديد';
$txt['smf259'] = 'تم فصل الموضوع إلى اثنين بنجاح.';
$txt['smf260'] = 'أصل الموضوع';
$txt['smf261'] = 'الرجاء تحديد الرسائل التي ستفصل.';
$txt['smf264'] = 'تم دمج المواضيع بنجاح.';
$txt['smf265'] = 'الموضوع المدمج الجديد';
$txt['smf266'] = 'الموضوع الذي سيدمج';
$txt['smf267'] = 'المنتدى الهدف';
$txt['smf269'] = 'الموضوع الهدف';
$txt['smf274'] = 'هل ترغب حقا في دمج';
$txt['smf275'] = 'مع';
$txt['smf276'] = 'هذه الخاصية ستقوم بدمج الرسائل لموضوعين مختلفين في موضوع واحد. سيتم فرز الرسائل بحسب تاريخ الرسالة. لذا ستكون أقدم رسالة هي في الترتيب الأول في الموضوع المدمج.';

$txt['smf277'] = 'ضبط الموضوع كثابت';
$txt['smf278'] = 'ضبط الموضوع كغير ثابت';
$txt['smf279'] = 'قفل الموضوع';
$txt['smf280'] = 'فتح الموضوع';

$txt['smf298'] = 'بحث مفصل';

$txt['smf299'] = 'خطر أمني:';
$txt['smf300'] = 'لم تقم بحذف ';

$txt['smf301'] = 'تم إنشاء الصفحة في ';
$txt['smf302'] = ' ثانية مستخدما ';
$txt['smf302b'] = ' استفسار.';

$txt['smf315'] = 'استخدم هذه الميزة لتنبيه المراقب و المشرف عن الرسائل الغير مناسبة.';

$txt['online2'] = 'متصل';
$txt['online3'] = 'غير متصل';
$txt['online4'] = 'رسالة شخصية (متصل)';
$txt['online5'] = 'رسالة شخصية (غير متصل)';
$txt['online8'] = 'الحالة';

$txt['topbottom4'] = 'للأعلى';
$txt['topbottom5'] = 'للأسفل';

if ($_SERVER['QUERY_STRING']=='')
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> :: <a href="http://www.siteground.com">Hosting Services for SMF by SiteGround</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}
else
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}


$txt['calendar3'] = 'أعياد الميلاد:';
$txt['calendar4'] = 'أحداث:';
$txt['calendar3b'] = 'أعياد الميلاد القادمة:';
$txt['calendar4b'] = 'الأحداث القادمة:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'شهر:';
$txt['calendar10'] = 'سنة:';
$txt['calendar11'] = 'يوم:';
$txt['calendar12'] = 'عنوان الحدث:';
$txt['calendar13'] = 'كتابة في:';
$txt['calendar20'] = 'تحرير الحدث';
$txt['calendar21'] = 'حذف هذا الحدث؟';
$txt['calendar22'] = 'حذف الحدث';
$txt['calendar23'] = 'كتابة الحدث';
$txt['calendar24'] = 'التقويم';
$txt['calendar37'] = 'وصلة للتقويم';
$txt['calendar43'] = 'وصلة للحدث';
$txt['calendar47'] = 'التقويم القادم';
$txt['calendar47b'] = 'تقويم اليوم';
$txt['calendar51'] = 'أسبوع';
$txt['calendar54'] = 'عدد الأيام:';
$txt['calendar_how_edit'] = 'كيف تحرر هذه الأحداث؟';
$txt['calendar_link_event'] = 'ربط المناسبة بالموضوع:';
$txt['calendar_confirm_delete'] = 'هل انت متاكد انك تريك حذف هذه المناسبة؟';
$txt['calendar_linked_events'] = 'مناسبات مترابطة';

$txt['moveTopic1'] = 'كتابة موضوع إعادة توجيه';
$txt['moveTopic2'] = 'تغير عنوان الموضوع';
$txt['moveTopic3'] = 'العنوان الجديد';
$txt['moveTopic4'] = 'تغير عناوين كافة الرسائل';

$txt['theme_template_error'] = 'لا يمكن تحميل القالب \'%s\' .';
$txt['theme_language_error'] = 'لا يمكن تحميل ملف اللغة \'%s\' .';

$txt['parent_boards'] = 'منتديات فرعية';

$txt['smtp_no_connect'] = 'لا يمكن الاتصال بمستضيف SMTP ';
$txt['smtp_port_ssl'] = 'خاطئة SMTP اعدادات المنفذ لل; 465 يجب ان تكون لل SSL servers.';
$txt['smtp_bad_response'] = 'لا يمكن الحصول على كود الرد لملقم البريد';
$txt['smtp_error'] = 'حصل خطا عند إرسال البريد. الخطأ: ';
$txt['mail_send_unable'] = 'لا يمكن إرسال البريد إلى العنوان البريدي \'%s\'';

$txt['mlist_search'] = 'البحث عن مستخدمين';
$txt['mlist_search2'] = 'البحث ثانية';
$txt['mlist_search_email'] = 'البحث بواسطة عنوان البريد';
$txt['mlist_search_messenger'] = 'البحث بواسطة لقب المرسال';
$txt['mlist_search_group'] = 'البحث بواسطة الموقع';
$txt['mlist_search_name'] = 'البحث بواسطة الاسم';
$txt['mlist_search_website'] = 'البحث بواسطة موقع الويب';
$txt['mlist_search_results'] = 'نتائج البحث لـ';

$txt['attach_downloaded'] = 'حمل';
$txt['attach_viewed'] = 'شوهد';
$txt['attach_times'] = 'مرات';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'اعدادات';
$txt['never'] = 'ابدأ';
$txt['more'] = 'المزيد';

$txt['hostname'] = 'اسم المضيف (Hostname)';
$txt['you_are_post_banned'] = 'نأسف %s, لقد تم حظرك من الكتابة و إرسال الرسائل الشخصية في هذا المنتدى.';
$txt['ban_reason'] = 'السبب';

$txt['tables_optimized'] = 'تم تحسين جداول قاعدة البيانات';

$txt['add_poll'] = 'إضافة إستفتاء';
$txt['poll_options6'] = 'يمكنك أن تختار ما عدده %s خيار.';
$txt['poll_remove'] = 'حذف إستفتاء';
$txt['poll_remove_warn'] = 'هل ترغب في حذف هذا الإستفتاء من الموضوع؟';
$txt['poll_results_expire'] = 'النتائج ستعرض بعد إقفال الإستفتاء';
$txt['poll_expires_on'] = 'يقفل الإستفتاء';
$txt['poll_expired_on'] = 'اقفل الإستفتاء';
$txt['poll_change_vote'] = 'حذف التصويت';
$txt['poll_return_vote'] = 'خصائص التصويت';

$txt['quick_mod_remove'] = 'حذف المختار';
$txt['quick_mod_lock'] = 'قفل المختار';
$txt['quick_mod_sticky'] = 'تثبيت المختار';
$txt['quick_mod_move'] = 'نقل المختار إلى';
$txt['quick_mod_merge'] = 'دمج المختار';
$txt['quick_mod_markread'] = 'تعليم مقروء';
$txt['quick_mod_go'] = 'اذهب!';
$txt['quickmod_confirm'] = 'هل ترغب في فعل هذا؟';

$txt['spell_check'] = 'تدقيق إملائي';

$txt['quick_reply_1'] = 'الرد السريع';
$txt['quick_reply_2'] = 'باستخدام <i>الرد السريع</i> تستطيع استعمال رموز المنتدى و الابتسامات كما تفعل في الرد العادي، ولكن بشكل بسيط.';
$txt['quick_reply_warning'] = 'تحذير: هذا الموضوع مقفل حاليا!<br />المشرفين و المراقبين يمكنهم الرد فقط.';

$txt['notification_enable_board'] = 'هل ترغب في تمكين تنبيه المواضيع الجديدة لهذا المنتدى؟';
$txt['notification_disable_board'] = 'هل ترغب في إبطال تنبيه المواضيع الجديدة لهذا المنتدى؟';
$txt['notification_enable_topic'] = 'هل ترغب في تمكين تنبيه الرسائل الجديدة لهذا الموضوع؟';
$txt['notification_disable_topic'] = 'هل ترغب في إبطال تنبيه الرسائل الجديدة لهذا الموضوع؟';

$txt['rtm1'] = 'تنبيه للمراقب';

$txt['unread_topics_visit'] = 'آخر مواضيع غير مقروءة';
$txt['unread_topics_visit_none'] = 'لا يوجد مواضيع غير مقروءة منذ آخر زيارة.  <a href="' . $scripturl . '?action=unread;all">انقر هنا لمحاولة عرض كافة المواضيع غير المقروءة</a>.';
$txt['unread_topics_all'] = 'كافة المواضيع غير المقروءة';
$txt['unread_replies'] = 'مواضيع محدثة';

$txt['who_title'] = 'من المتصل';
$txt['who_and'] = ' و ';
$txt['who_viewing_topic'] = ' يشاهدون هذا الموضوع.';
$txt['who_viewing_board'] = ' يشاهدون هذا المنتدى.';
$txt['who_member'] = 'عضو';

$txt['powered_by_php'] = 'مدعوم بواسطة PHP';
$txt['powered_by_mysql'] = 'مدعوم بواسطة MySQL';
$txt['valid_html'] = 'HTML 4.01 صالح!';
$txt['valid_xhtml'] = 'XHTML 1.0 صالح!';
$txt['valid_css'] = 'CSS صالح!';

$txt['guest'] = 'ضيف';
$txt['guests'] = 'ضيوف';
$txt['user'] = 'مستخدم';
$txt['users'] = 'مستخدمين';
$txt['hidden'] = 'مخفي';
$txt['buddy'] = 'صديق';
$txt['buddies'] = 'اصدقاء';
$txt['most_online_ever'] = 'أعلى عدد متصلين في آن واحد';
$txt['most_online_today'] = 'أعلى عدد متصلين اليوم';

$txt['merge_select_target_board'] = 'اختر المنتدى الهدف للموضوع المدموج';
$txt['merge_select_poll'] = 'اختر أي إستفتاء للموضوع المدموج';
$txt['merge_topic_list'] = 'اختر المواضيع التي ستدمج';
$txt['merge_select_subject'] = 'اختر العنوان للموضوع المدموج';
$txt['merge_custom_subject'] = 'عنوان جديد';
$txt['merge_enforce_subject'] = 'تغير العنوان لكافة الرسائل';
$txt['merge_include_notifications'] = 'تضمين التنبيهات؟';
$txt['merge_check'] = 'دمج؟';
$txt['merge_no_poll'] = 'لا إستفتاء';

$txt['response_prefix'] = 'رد: ';
$txt['current_icon'] = 'الأيقونة الحالية';

$txt['smileys_current'] = 'مجموعة الابتسامات الحالية';
$txt['smileys_none'] = 'بدون ابتسامات';
$txt['smileys_forum_board_default'] = 'افتراضي المنتدى\\الاقسام';

$txt['search_results'] = 'نتائج البحث';
$txt['search_no_results'] = 'لا يوجد نتائج للبحث';

$txt['totalTimeLogged1'] = 'إجمالي زمن الاتصال: ';
$txt['totalTimeLogged2'] = ' أيام, ';
$txt['totalTimeLogged3'] = ' ساعة و  ';
$txt['totalTimeLogged4'] = ' دقيقة.';
$txt['totalTimeLogged5'] = 'ي ';
$txt['totalTimeLogged6'] = 'س ';
$txt['totalTimeLogged7'] = 'د';

$txt['approve_thereis'] = 'يوجد';
$txt['approve_thereare'] = 'يوجد';
$txt['approve_member'] = 'عضو واحد';
$txt['approve_members'] = 'أعضاء';
$txt['approve_members_waiting'] = 'ينتظرون الموافقة.';

$txt['notifyboard_turnon'] = 'هل تريد بريد إخطار إلكتروني عندما يرسل شخص ما موضوعا جديدا في هذه المنتدى؟';
$txt['notifyboard_turnoff'] = 'هل أنت متأكّد أنك لا تريد استلام تبليغات الموضوع الجديدة لهذه المنتدى؟';

$txt['activate_code'] = 'كود التنشيط الخاص بك هو';

$txt['find_members'] = 'بحث الأعضاء';
$txt['find_username'] = 'الاسم، اسم المستخدم أو عنوان البريد';
$txt['find_buddies'] = 'أظهر الأصدقاء فقط ?';
$txt['find_wildcards'] = 'اللواحق المسموح بها: *, ?';
$txt['find_no_results'] = 'لم يتم العثور على نتائج';
$txt['find_results'] = 'نتائج';
$txt['find_close'] = 'إغلاق';

$txt['unread_since_visit'] = 'عرض الرسائل الجديدة منذ آخر زيارة.';
$txt['show_unread_replies'] = 'عرض الردود الجديدة لمواضيعك.';

$txt['change_color'] = 'تغير اللون';

$txt['quickmod_delete_selected'] = 'حذف المختار';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'لقد استلمت رسالة أو أكثر شخصية.\\nمشاهدتهم الآن (في نافذة جديدة)?';

$txt['previous_next_back'] = '&laquo; قبل';
$txt['previous_next_forward'] = 'بعد &raquo;';

$txt['movetopic_auto_board'] = '[منتدى]';
$txt['movetopic_auto_topic'] = '[رابط الموضوع]';
$txt['movetopic_default'] = 'هذا الموضوع تم نقله إلى ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'تقليص أو توسيع الترويسه.';

$txt['mark_unread'] = 'علم كغير مقروء';

$txt['ssi_not_direct'] = 'الرجاء عدم الدخول إلى SSI.php بواسطة URL مباشر; يمكنك أن تستخدم المسار (%s) أو تضيف ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php لم يستطع أن يحمل الجلسة! قد يسبب ذلك مشكلة في تسجيل الخروج و غيرها من التوابع - أرجو الانتباه إلى أن SSI.php مدخل من قبل *أي شيء* آخر من قبل أكوادك!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'عرض الموضوع';
$txt['preview_fetch'] = 'جلب العرض...';
$txt['preview_new'] = 'رسالة جديدة';
$txt['error_while_submitting'] = 'حدثت هذه المشكلة عند ارسالة هذه الرسالة:';

$txt['split_selected_posts'] = 'مواضيع مختارة';
$txt['split_selected_posts_desc'] = 'هذه المشاركات التي في الأسفل سوف تقوم بإنشاء موضوع جديد بعد الفصل.';
$txt['split_reset_selection'] = 'الغاء تعليم الكل';

$txt['modify_cancel'] = 'إلغاء';
$txt['mark_read_short'] = 'تعليم مقروء';

$txt['pm_short'] = 'الرسائل الشخصية';
$txt['hello_member_ndt'] = 'أهلا';

$txt['ajax_in_progress'] = 'تحميل...';

?>