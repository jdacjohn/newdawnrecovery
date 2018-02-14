<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'هذه الصفحة تسمح لك بتغير إعدادات المزايا و المعدلات والخيارات الأساسية لمنتداك.  الرجاء مشاهدة <a href="' . $scripturl . '?action=theme;sa=settings;id=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">إعدادات القالب</a> لخيارات أكثر.  انقر على صورة علامة الاستفهام لعرض معلومات حول تلك الميزة.';

$txt['mods_cat_features'] = 'ميزات المنتدى الأساسية';
$txt['pollMode'] = 'نمط الإستفتاء';
$txt['smf34'] = 'تعطيل الإستفتاء';
$txt['smf32'] = 'تمكين الإستفتاء';
$txt['smf33'] = 'عرض الإستفتاءات الموجودة كمواضيع';
$txt['allow_guestAccess'] = 'السماح للضيوف بتصفح المنتدى';
$txt['userLanguage'] = 'تمكين المستخدمون من اختيار لغة الدعم';
$txt['allow_editDisplayName'] = 'السماح للأعضاء بتحرير أسماء العرض؟';
$txt['allow_hideOnline'] = 'السماح لغير المشرفين بخاصية التخفي؟';
$txt['allow_hideEmail'] = 'السماح للأعضاء بإخفاء بريدهم عن الكل ما عدا المراقبين؟';
$txt['guest_hideContacts'] = 'لا تعرض معلومات الاتصال للعضو على الضيوف';
$txt['titlesEnable'] = 'تمكين العناوين المخصصة';
$txt['enable_buddylist'] = 'تفعيل قائمة الاصدقاء';
$txt['default_personalText'] = 'النص الشخصي الافتراضي';
$txt['max_signatureLength'] = 'الحد الأقصى المسموح به لعدد الأحرف في التوقيع<div class="smalltext">(0 لعدم التحديد.)</div>';
$txt['number_format'] = 'شكل الرقم الافتراضي';
$txt['time_format'] = 'شكل الوقت الافتراضي';
$txt['time_offset'] = 'فارق التوقيت العام<div class="smalltext">(هذا التعديل سيبطل توقيت الجميع.)</div>';
$txt['failed_login_threshold'] = 'عدد محاولات الدخول الخاطئة';
$txt['lastActive'] = 'وقت التحديث للمتصلين الآن';
$txt['trackStats'] = 'تعقب الإحصاءات اليومية';
$txt['hitStats'] = 'تعقب النقرات اليومية (يجب تمكين الاحصاءات)';
$txt['enableCompressedOutput'] = 'تمكين المخرجات المضغوطة';
$txt['databaseSession_enable'] = 'استعمل الجلسات في قاعدة البيانات';
$txt['databaseSession_loose'] = 'اسمح للمتصفّحات بالعودة إلى الصفحات المخبّئة';
$txt['databaseSession_lifetime'] = 'ثواني قبل أن تنتهي الجلسة الغير مستخدمة';
$txt['enableErrorLogging'] = 'تمكين تسجيل الأخطاء';
$txt['cookieTime'] = 'طول وقت سكاكر الدخول الافتراضي (بالدقائق)';
$txt['localCookies'] = 'تمكين تخزين السكاكر محليا<div class="smalltext">(SSI لن يعمل بشكل جيد إذا تم تمكين هذا الخيار.)</div>';
$txt['globalCookies'] = 'استخدم سكاكر النطاق الفرعي المستقل<br />تحذير: عطل خيار السكاكر المحلية أولا!';
$txt['securityDisable'] = 'تعطيل آمان المشرف';
$txt['send_validation_onChange'] = 'بعث كلمة المرور في حال تغير البريد';
$txt['approveAccountDeletion'] = 'يجب ان يوافق المشرف على الغاء اي عضو';
$txt['autoOptDatabase'] = 'بعد كم يوما سيتم تحسين فاعلية الجداول؟<br /><i>(0 للتعطيل)</i>';
$txt['autoOptMaxOnline'] = 'العدد الأقصى للمستخدمين المتصلين لتتم عملية تحسين الفاعلية<br /><i>(0 بدون حد أقصى)</i>';
$txt['autoFixDatabase'] = 'إصلاح الجداول المكسورة تلقائيا';
$txt['allow_disableAnnounce'] = 'السماح للاعضاء الغاء الاعلانات';
$txt['disallow_sendBody'] = 'عدم السماح باضافة ردود في الاعلانات';
$txt['modlog_enabled'] = 'تسجيل إجراءات المراقبين';
$txt['queryless_urls'] = 'عرض الـ URLs المحسنة لمحركات البحث<br /><b>ملقم Apache فقط!</b>';
$txt['max_image_width'] = 'الحجم الأقصى لعرض الصور في الرسائل (0 = معطل)';
$txt['max_image_height'] = 'الحجم الأقصى لطول الصور في الرسائل (0 = معطل)';
$txt['mail_type'] = 'نوع Mail ';
$txt['mail_type_default'] = '(PHP الافتراضي)';
$txt['smtp_host'] = 'ملقم SMTP';
$txt['smtp_port'] = 'منفذ SMTP';
$txt['smtp_username'] = 'اسم مستخدم SMTP';
$txt['smtp_password'] = 'كلمة مرور SMTP';
$txt['enableReportPM'] = 'تفعيل الاعلام عن الرسائل الشخصية';
$txt['max_pm_recipients'] = 'العدد الأكبر لمستلمي الرسائل الشخصية في آن واحد<div class="smalltext">(0 من أجل عدم التحديد, المشرف الرئيس مستثنى)</div>';
$txt['pm_posts_verification'] = 'الحد الأدنى للمشاركات التى يجب أن تكون لدى الأعضاء لكى لا تظهر لهم صورة التحقق البصرى أثناء إرسال رسائل شخصيه .<div class="smalltext">(ضع صفر (0) لجعلها غير محدودة, المديرين لا يتم حسابهم فى هذه العمليه)</div>';
$txt['pm_posts_per_hour'] = 'عدد الرسائل الشخصيه التى يمكن للعضو إرسالها فى الساعه.<div class="smalltext">(أكتب صفر (0) لتجعلها غير محدوده, المشرفين لا يتم حسابهم فى هذه العمليه)</div>';

$txt['mods_cat_layout'] = 'الشكل و الخيارات';
$txt['compactTopicPagesEnable'] = 'الحد من عدد وصلات الصفحات الذي سيعرض';
$txt['smf235'] = 'الصفحات المتواصلة التي ستعرض:';
$txt['smf236'] = 'ستعرض';
$txt['todayMod'] = 'تمكين ميزة &quot;اليوم&quot;';
$txt['smf290'] = 'معطل';
$txt['smf291'] = 'فقط اليوم';
$txt['smf292'] = 'اليوم و الأمس';
$txt['topbottomEnable'] = 'تمكين أزرار للأعلى/للأسفل';
$txt['onlineEnable'] = 'عرض متصل/غير متصل في الرسائل و الرسائل الشخصية';
$txt['enableVBStyleLogin'] = 'تمكين نمط دخول VB';
$txt['defaultMaxMembers'] = 'عدد الأعضاء في كل صفحة لقائمة الأعضاء';
$txt['timeLoadPageEnable'] = 'عرض الوقت المستغرق لإنشاء الصفحة';
$txt['disableHostnameLookup'] = 'تعطيل مشاهدة اسم المضيّف hostname ؟';
$txt['who_enabled'] = 'تمكين من المتصل الآن';

$txt['smf293'] = 'كارما';
$txt['karmaMode'] = 'نمط الكارما';
$txt['smf64'] = 'تعطيل الكارما|تمكين إجمالي الكارما|تمكين الكارما جيد/سيء';
$txt['karmaMinPosts'] = 'الحد الأدنى للرسائل لتعديل الكارما';
$txt['karmaWaitTime'] = 'حدد وقت الانتظار بالساعات';
$txt['karmaTimeRestrictAdmins'] = 'تقييد المشرفين بوقت الانتظار';
$txt['karmaLabel'] = 'عنوان الكارما';
$txt['karmaApplaudLabel'] = 'عنوان الكارما الجيد';
$txt['karmaSmiteLabel'] = 'عنوان الكارما السيئ';

$txt['caching_information'] = '<div align="center"><b><u>مهم! اقرأ هذا قبل تفعيل هذه الميزات.</b></u></div><br />
	SMF تدعم التخزين الكاشي بواسطة استخدام المسرعات (accelerators). المسرعات المدعومة حاليا تتضمن:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (ليس محسن Zend)</li>
	</ul>
	التخزين الكاشي سيعمل على سيرفك في حال كنت تملك PHP مربوط مع أحد المسرعات السابقة, أو لديك memcache
	متوفر. <br /><br />
	SMF تنجز التخزين الكاشي على عدة مستويات. كلما كان المستوى أعلى كلما تطلب مدة معالجة أكثر من أجل تخزين معلومات الكاش. في حال توفر التخزين الكاشي على جهازك(الهوست) فإنه ينصح أن تستخدم المستوى الأول كبداية.
	<br /><br />
	لاحظ أنه في حال اختيارك لاستخدام memcached يجب أن تقدم معلومات السيرفر في القسم المخصص لها في الأسفل. يحب إضافة هذه المعلومات كقائمة مفصولة عن بعضها بواسطة 		فاصلة كما هو مبين في المثال التالي:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	لاحظ في حال لم تحدد أي port من أجل استخدامه فإن SMF سوف تستخدم port 11211. إن SMF سوف تحاول أن تنجز تحميل صعب/عشوائي خلال السيرفر.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">لم تستطع SMF أن تجد مسرع متناسب على سيرفرك.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF إكتشفت أن الـ APC مثبت على السرفر الخاص بك. ';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF إكتشفت أن الـ eAccelerator مثبت على السرفر الخاص بك. ';
$txt['detected_MMCache'] = '<b style="color: green">SMF إكتشف أن الـ MMCache مثبت على السرفر الخاص بك. ';
$txt['detected_Zend'] = '<b style="color: green">SMF إكتشفت أن الـ Zend مثبت على السرفر الخاص بك. ';
$txt['detected_Memcached'] = '<b style="color: green">SMF إكتشفت أن الـ Memcached مثبت على السرفر الخاص بك. ';

$txt['cache_enable'] = 'مستوى تخزين الكاش';
$txt['cache_off'] = 'إلغاء استخدام تخزين الكاش';
$txt['cache_level1'] = 'المستوى الأول لتخزين الكاش';
$txt['cache_level2'] = 'المستوى الثاني لتخزين الكاش (لا ينصح به)';
$txt['cache_level3'] = 'المستوى الثالث لتخزين الكاش (لا ينصح به)';
$txt['cache_memcached'] = 'إعدادات memcache';

?>