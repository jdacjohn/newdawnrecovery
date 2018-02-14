<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'fa_IR.utf8';
$txt['lang_dictionary'] = 'fa';
$txt['lang_spelling'] = 'persian';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = true;

$txt['days'] = array('يکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه', 'شنبه');
$txt['days_short'] = array('ي', 'د', 'س', 'چ', 'پ', 'ج', 'ش');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'ژانویه', 'فبریه', 'مارس', 'آپریل', 'می', 'جون', 'جولای', 'آگوست', 'سپتامبر', 'اکتبر', 'نوامبر', 'دسامبر');
$txt['months_titles'] = array(1 => 'ژانویه', 'فبریه', 'مارس', 'آپریل', 'می', 'جون', 'جولای', 'آگوست', 'سپتامبر', 'اکتبر', 'نوامبر', 'دسامبر');
$txt['months_short'] = array(1 => 'ژانویه', 'فبریه', 'مارس', 'آپریل', 'می', 'جون', 'جولای', 'آگوست', 'سپتامبر', 'اکتبر', 'نوامبر', 'دسامبر');

$txt['newmessages0'] = 'پیغام جدید است';
$txt['newmessages1'] = 'پیغام جدید است';
$txt['newmessages3'] = 'جدید';
$txt['newmessages4'] = '،';

$txt[2] = 'مديريت';

$txt[10] = 'ذخیره تغییرات';

$txt[17] = 'ویرایش';
$txt[18] = $context['forum_name'] . ' - فهرست';
$txt[19] = 'کاربر';
$txt[20] = 'نام انجمن';
$txt[21] = 'ارسال';
$txt[22] = 'آخرين ارسال:';

$txt[24] = '(بدون موضوع)';
$txt[26] = 'تعداد ارسال';
$txt[27] = 'ديدن مشخصات';
$txt[28] = 'مهمان';
$txt[29] = 'نويسنده';
$txt[30] = '';
$txt[31] = 'حذف';
$txt[33] = 'ارسال موضوع جديد';

$txt[34] = 'ورود';
// Use numeric entities in the below string.
$txt[35] = 'نام کاربري';
$txt[36] = 'رمز عبور';

$txt[40] = 'نام کاربري يا رمز عبور وارد شده اشتباه مي باشد. لطفا مجددا تلاش نماييد';

$txt[62] = 'مدير انجمن';
$txt[63] = 'حذف موضوع';
$txt[64] = 'موضوع';
$txt[66] = 'ويرايش';
$txt[68] = 'نام اصلی';
$txt[69] = 'آدرس ايميل';
$txt[70] = 'عنوان ';
$txt[72] = 'متن پيغام';

$txt[79] = 'مشخصات';

$txt[81] = 'انتخاب رمز عبور';
$txt[82] = 'تایید رمز عبور';
$txt[87] = 'درجه کاربری ';

$txt[92] = 'ديدن مشخصات';
$txt[94] = 'مجموع';
$txt[95] = 'ارسال در';
$txt[96] = 'وب سايت کاربر';
$txt[97] = 'عضويت';

$txt[101] = 'پیغام خصوصی';
$txt[102] = 'اخبار';
$txt[103] = 'فهرست';

$txt[104] = 'قفل/ باز کردن موضوع';
$txt[105] = 'ارسال';
$txt[106] = 'خطا!';
$txt[107] = 'در';
$txt[108] = 'خروج';
$txt[109] = 'نويسنده';
$txt[110] = 'پاسخ ها';
$txt[111] = 'آخرين ارسال';
$txt[114] = 'ورود به بخش مديريت';
// Use numeric entities in the below string.
$txt[118] = 'موضوع';
$txt[119] = 'راهنمايي';
$txt[121] = 'حذف';
$txt[125] = 'با خبر سازي';
$txt[126] = 'آيا شما ميخواهيد هنگام ارسال پاسخ به اين موضوع توسط ايميل باخبر شويد؟';
// Use numeric entities in the below string.
$txt[130] = "با تشکر\n" . $context['forum_name'] . '';
$txt[131] = 'با خبر سازی';
$txt[132] = 'انتقال موضوع';
$txt[133] = 'انتقال به';
$txt[139] = 'صفحه';
$txt[140] = 'کاربرانی که در ' . $modSettings['lastActive'] . ' دقیقه اخیر فعال بودند';
$txt[144] = 'پيغام خصوصي';
$txt[145] = 'نقل قول';
$txt[146] = 'پاسخ';

$txt[151] = 'هیچ پیغامی وجود ندارد';
$txt[152] = 'شما';
$txt[153] = 'پیغام خصوصی دارید';
$txt[154] = 'حذف اين پيغام';

$txt[158] = 'کاربران آنلاين';
$txt[159] = 'پيغام خصوصي';
$txt[160] = 'پرش به ';
$txt[161] = 'برو';
$txt[162] = 'آيا از حذف نمودن اين موضوع اطمينان داريد؟';
$txt[163] = 'بله';
$txt[164] = 'خير';

$txt[166] = 'نتايج جستجو';
$txt[167] = 'پايان نتايج';
$txt[170] = 'متاسفانه موردي مطابق با خواسته شما پيدا نشد.';
$txt[176] = 'در';

$txt[182] = 'جستجو';
$txt[190] = 'همه';

$txt[193] = 'بازگشت';
$txt[194] = 'یادآوری';
$txt[195] = 'نويسنده';
$txt[196] = 'عنوان';
$txt[197] = 'ارسال شده توسط';
$txt[200] = 'فهرست قابل جستجو از کاربران';
$txt[201] = 'خوش آمديد';
$txt[208] = 'مرکز مديريت';
$txt[211] = 'آخرين ويرايش';
$txt[212] = 'آیا از غیر فعال کردن خبرسازی اطمینان دارید؟';

$txt[214] = 'آخرین ارسالها';

$txt[227] = 'محل سکونت ';
$txt[231] = 'جنسيت ';
$txt[233] = 'تاريخ عضويت ';

$txt[234] = 'دیدن آخرین 10 ارسال جدید به انجمن';
$txt[235] = 'تعداد زیادی ارسال جدید وجود دارد';

$txt[238] = 'پسر';
$txt[239] = 'دختر';

$txt[240] = 'شما از عبارات غير مجاز در نام کاربريتان استفاده نموده ايد';

$txt['welcome_guest'] = 'خوش آمدید، <b>' . $txt[28] . '</b> - لطفا برای ثبت نام <a href="' . $scripturl . '?action=register" style="text-decoration: none">اینجا </a>و یا برای ورود <a href="' . $scripturl . '?action=login" style="text-decoration: none">اینجا </a>را کلیک کنید.';
$txt['welcome_guest_activate'] = '<br />آیا هنوز <a href="' . $scripturl . '?action=activate">ایمیل فعال سازی حساب کاربری</a> برای شما ارسال نشده است؟';
$txt['hello_member'] = 'سلام ';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'خوش آمديد';
$txt[247] = 'سلام';
$txt[248] = 'خوش آمديد';
$txt[249] = 'لطفا';
$txt[250] = 'بازگشت';
$txt[251] = 'لطفا یک قسمت را انتخاب کنید';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'ارسال شده توسط';

$txt[287] = 'لبخند';
$txt[288] = 'عصبانی';
$txt[289] = 'خنده';
$txt[290] = 'خندان';
$txt[291] = 'ناراحت';
$txt[292] = 'چشمک';
$txt[293] = 'پوزخند';
$txt[294] = 'شوکه';
$txt[295] = 'خونسرد';
$txt[296] = 'متعجب';
$txt[450] = 'Roll Eyes';
$txt[451] = 'Tongue';
$txt[526] = 'شرمنده';
$txt[527] = 'سکوت';
$txt[528] = 'بی تفاوت';
$txt[529] = 'بوسه';
$txt[530] = 'گریه';

$txt[298] = 'مدير';
$txt[299] = 'مديران';

$txt[300] = 'نشانه گذاري تمام موضوع های اين انجمن بعنوان موضوعات خوانده شده';
$txt[301] = 'مشاهده';
$txt[302] = 'جديد';

$txt[303] = 'ديدن تمام کاربران';
$txt[305] = 'دیدن';
$txt[307] = 'آدرس ايميل';

$txt[308] = 'دیدن کاربران';
$txt[309] = 'از';
$txt[310] = 'مجموع کاربران';
$txt[311] = 'به';
$txt[315] = 'رمز عبورتان را فراموش کرده ايد؟';

$txt[317] = 'تاريخ';
// Use numeric entities in the below string.
$txt[318] = 'از طرف';
$txt[319] = 'عنوان';
$txt[322] = 'کنترل ارسال جدید';
$txt[324] = 'به';

$txt[330] = 'موضوع';
$txt[331] = 'کاربران';
$txt[332] = ' لیست کاربران';
$txt[333] = 'ارسال جدیدی وجود دارد';
$txt[334] = 'ارسال جديدي وجود ندارد';

$txt['sendtopic_send'] = 'ارسال';

$txt[371] = 'اختلاف زمانی با سرور ';
$txt[377] = 'يا';

$txt[398] = 'متاسفانه هيچ قسمت از عناوين موضوع ها و متون موضوع ها ها با خواسته شما مطابقت ندارد.';

$txt[418] = 'با خبرسازی';

$txt[430] = 'متاسفانه نام کاربري %s غیرفعال شده است. لطفا با مديران انجمن تماس بگيريد';

$txt[452] = 'نشانه گذاري تمام انجمن ها بعنوان خوانده شده';

$txt[454] = 'موضوع پرطرفدار ( با بیش از ' . $modSettings['hotTopicPosts'] . ' پاسخ )';
$txt[455] = 'موضوع پرطرفدار ( با بیش از ' . $modSettings['hotTopicVeryPosts'] . ' پاسخ )';
$txt[456] = 'موضوع قفل شده';
$txt[457] = 'موضوع عادی ( ارسال جدید نشده است )';
$txt['participation_caption'] = 'موضوع ارسال شده یا پاسخ داده شده توسط شما';

$txt[462] = '  برو  ';

$txt[465] = 'چاپ صفحه';
$txt[467] = 'مشخصات';
$txt[468] = 'خلاصه موضوع';
$txt[470] = 'نامشخص';
$txt[471] = 'پیغام';
$txt[473] = 'نام کاربری مورد نظر قبلا توسط شخص دیگری ثبت شده است.';

$txt[488] = 'مجموع کاربران';
$txt[489] = 'مجموع ارسال های کاربران';
$txt[490] = 'مجموع موضوعات';

$txt[497] = 'مدت زمان حضور در انجمن';

$txt[507] = 'پیش نمایش';
$txt[508] = 'ورود برای همیشه';

$txt[511] = 'خارج شده است';
// Use numeric entities in the below string.
$txt[512] = 'آدرس IP ';

$txt[513] = 'ICQ ';
$txt[515] = 'WWW';

$txt[525] = 'توسط';

$txt[578] = 'ساعت';
$txt[579] = 'روز';

$txt[581] = 'جدید ترین کاربر عضو شده';

$txt[582] = 'جستجو برای';

$txt[603] = 'AIM ';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Salam.';
$txt[604] = 'YIM ';

$txt[616] = 'توجه انجمن در حال حاضر بصورت غیر فعال است.';

$txt[641] = 'دفعات بازدید: ';
$txt[642] = 'بار';

$txt[645] = 'آمار انجمن';
$txt[656] = 'جدیدترین کاربر عضو شده';
$txt[658] = 'مجموع گروه ها';
$txt[659] = 'آخرین ارسال انجمن';

$txt[660] = 'شما دریافت کرده اید';
$txt[661] = 'کلیک';
$txt[662] = 'اینجا';
$txt[663] = 'جهت دیدن گروه';

$txt[665] = 'مجموع انجمن ها';

$txt[668] = 'چاپ صفحه';

$txt[679] = 'آدرس ایمیل باید معتبر باشد';

$txt[683] = 'من صاحب اینجا هستم!!';
$txt[685] = ' چه کسی در سایت است';

$txt[707] = 'ارسال به دوستان';

$txt['sendtopic_title'] = 'ارسال موضوع &quot;%s&quot; برای دوستان';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'سلام %s,';
$txt['sendtopic_this_topic'] = 'از شما دعوات میکنم موضوع "%s" در انجمنهای ' . $context['forum_name'] . ' را ببینید.  برای دیدن آن لطفا روی این لینک کلیک کنید';
$txt['sendtopic_thanks'] = 'با تشکر';
$txt['sendtopic_sender_name'] = 'نام شما';
$txt['sendtopic_sender_email'] = 'آدرس ایمیل شما';
$txt['sendtopic_receiver_name'] = 'نام دریافت کننده';
$txt['sendtopic_receiver_email'] = 'آدرس ایمیل دریافت کننده';
$txt['sendtopic_comment'] = 'توضیحات';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'یک توضیح نیز در خصوص این موضوع به موضوع اضافه شد';

$txt[721] = 'آدرس ايميل شما بصورت مخفی باشد';

$txt[737] = 'انتخاب همه';

// Use numeric entities in the below string.
$txt[1001] = 'خطا در بانک اطلاعاتی';
$txt[1002] = 'دوباره تلاش کنید . اگر مجدد به این خطا بخوردید ، به مدیریت تالارگفتمان اطلاع بدهید .';
$txt[1003] = 'فایل';
$txt[1004] = 'سطر';
// Use numeric entities in the below string.
$txt[1005] = 'برنامه بصورت خودکار خطاهای بوجود آمده در بانک اطلاعاتی را جستجو و برطرف نمود.';
$txt['database_error_versions'] = '<b>نکته:</b> بانک اطلاعاتی شما باید آپگرید شود. نسخه انجمن شما ' . $forum_version .  '، و نسخه بانک اطلاعاتی برای نسخه ' . $modSettings['smfVersion'] . 'SMF است. برای شما پیشنهاد میکنیم که با استفاده از فایل upgrade.php بانک اطلاعاتی را بروز رسانی کنید.';
$txt['template_parse_error'] = '<div dir="rtl">خطا در ساختار قالب</div>';
$txt['template_parse_error_message'] = 'چندین مشکل در ساختار قالب انجمن بوجود آمده است. این مشکل موقتی است و بزودی شما می توانید مجددا تلاش کنید. اگر شما بطور مداوم این پیغام را مشاهده نمودید، لطفا به مدیر سایت اطلاع دهید.<br /><br />همچنین شما میتوانید <a href="javascript:location.reload();">این صفحه را مجددا بارگذاری کنید</a>.';
$txt['template_parse_error_details'] = '<div dir="rtl">یک مشکل در بارگزاری فایل <tt><b>%1$s</b></tt> بوجود آمده است.  لطفا قسمت های مختلف را کنترل نموده و مجددا سعی نمایید. - توجه، عبارتهای مربوط به فایل های زبان باید داخل  (<tt>\'</tt>) قرار بگیرند و درصورتی که میخواهید در میان این عبارات از تابع های دیگری استفاده نمایید قبل از این کاراکتر دو بار علامت اسلش (<tt>\\</tt>) را قرار دهید.  برای دیدن سایر خطاهای بوجود آمده در PHP برای این فایل، <a href="' . $boardurl . '%1$s">اینجا را کلیک کنید</a>.<br /><br />شما همچنین می توانید <a href="javascript:location.reload();">این صفحه را مجددا بارگذاری کنید</a> و یا <a href="' . $scripturl . '?theme=1">از قالب پیشفرض استفاده کنید</a>.</div>';

$txt['smf10'] = 'امروز، ساعت ';
$txt['smf10b'] = 'دیروز - ';
$txt['smf20'] = 'ایجاد نظرسنجی جدید';
$txt['smf21'] = 'سوال';
$txt['smf23'] = 'ارسال نظر';
$txt['smf24'] = 'مجموع آراء';
$txt['smf25'] = 'کلیدهای میانبر: از کلیدهای Alt+S برای ارسال و از کلیدهای Alt+P برای پیش نمایش ارسال استفاده نمایید.';
$txt['smf29'] = 'دیدن نتایج';
$txt['smf30'] = 'قفل کردن نظرسنجی';
$txt['smf30b'] = 'باز کردن قفل نظرسنجی';
$txt['smf39'] = 'ویرایش نظرسنجی';
$txt['smf43'] = 'نظرسنجی';
$txt['smf47'] = 'یک روز';
$txt['smf48'] = 'یک هفته';
$txt['smf49'] = 'یک ماه';
$txt['smf50'] = 'برای همیشه';
$txt['smf52'] = 'لطفا برای ورود نام کاربری و رمز عبورتان را وارد نمایید';
$txt['smf53'] = 'یک ساعت';
$txt['smf56'] = 'منتقل شده';
$txt['smf57'] = 'در کادر زیر توضیحی را که میخواهید در انجمن فعلی بعنوان علت انتقال موضوع نمایش داده شود را وارد نمایید<br>.';
$txt['smf60'] = 'متاسفانه شما اجازه ویرایش این ارسال را ندارید.';
$txt['smf62'] = 'شما اجازه امتیاز مجدد به کاربران را ندارید. لطفا';
$txt['smf82'] = 'انجمن';
$txt['smf88'] = '';
$txt['smf96'] = 'موضوع مهم';

$txt['smf138'] = 'حذف';

$txt['smf199'] = 'مجموع پیغامهای خصوصی شما';

$txt['smf211'] = 'کیلوبایت';

$txt['smf223'] = '[ سایر آمار و اطلاعات ]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'کد';
$txt['smf239'] = 'نوشته';
$txt['smf240'] = 'نقل قول';

$txt['smf251'] = 'تقسیم موضوع';
$txt['smf252'] = 'ترکیب موضوعات';
$txt['smf254'] = 'عنوان';
$txt['smf255'] = 'شما فقط این موضوع را می توانید تقسیم کنید';
$txt['smf256'] = 'تقسیم موضوع بعد از انتخاب صورت می پذیرد';
$txt['smf257'] = 'انتخاب موضوع برای تقسیم کردن';
$txt['smf258'] = 'ایجاد موضوع جدید';
$txt['smf259'] = 'موضوع با موفقیت تقسیم شد.';
$txt['smf260'] = 'برای دیدن موضوع قبلی اینجا را کلیک کنید<br>';
$txt['smf261'] = 'لطفا موضوع هایی که می خواهید تقسیم کنید را انتخاب کنید';
$txt['smf264'] = 'موضوعات با موفقیت ترکیب شدند';
$txt['smf265'] = 'برای بازگشت به موضوع ترکیب شده اینجا را کلیک کنید';
$txt['smf266'] = 'موضوع ترکیب شده است';
$txt['smf267'] = 'مقصد انجمن';
$txt['smf269'] = 'مقصد موضوع';
$txt['smf274'] = 'آیا شما مطمئن هستید موضوعات را می خواهید ترکیب کنید';
$txt['smf275'] = 'با';
$txt['smf276'] = 'شما می توانید دو موضوع را به یک موضوع ترکیب کنید . مطالب به ترتیب تاریخ ارسال آنها ترکیب خواهد شد . بنابراین مطالبی که تاریخ ارسالش قدیمی تر باشد ، اول نمایش داده می شود .';

$txt['smf277'] = ' نشانه گذاری این موضوع بعنوان موضوع مهم';
$txt['smf278'] = 'تبدیل موضوع مهم به موضوع عادی';
$txt['smf279'] = 'قفل کردن موضوع';
$txt['smf280'] = 'باز کردن موضوع';

$txt['smf298'] = 'جستجوی پیشرفته';

$txt['smf299'] = 'ریسک امنیتی بزرگ و خطرناک';
$txt['smf300'] = '.حذف نشده است ';

$txt['smf301'] = 'این صفحه در ';
$txt['smf302'] = '  ثانیه ';
$txt['smf302b'] = ' نمایش داده شد.';

$txt['smf315'] = 'در این قسمت می توانید اعتراض، توضیح و یا نکته جا مانده ای را در مورد این ارسال به مدیر انجمن ارسال کنید.<br /><i>همچنین آدرس ایمیلتان را نیز در کادر پایین برای ارتباط مدیر با شما وارد کنید.</i>';

$txt['online2'] = 'آنلاین';
$txt['online3'] = 'آفلاین';
$txt['online4'] = '[ارسال پیغام خصوصی - [کاربر آنلاین';
$txt['online5'] = '[ارسال پیغام خصوصی [کاربر آفلاین';
$txt['online8'] = 'وضعیت';

$txt['topbottom4'] = 'بالا';
$txt['topbottom5'] = 'پایین';

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


$txt['calendar3'] = 'تاریخ تولد : ';
$txt['calendar4'] = 'رویدادها';
$txt['calendar3b'] = 'روزهای تولد نزدیک';
$txt['calendar4b'] = 'رویداد های نزدیک به اتفاق';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'ماه:';
$txt['calendar10'] = 'سال:';
$txt['calendar11'] = 'روز:';
$txt['calendar12'] = 'عنوان رویداد';
$txt['calendar13'] = 'ارسال موضوع در';
$txt['calendar20'] = 'ویرایش رویداد';
$txt['calendar21'] = 'این رویداد حذف شود؟';
$txt['calendar22'] = 'حذف رویداد';
$txt['calendar23'] = 'ارسال رویداد';
$txt['calendar24'] = 'تقویم';
$txt['calendar37'] = 'لینک به تقویم';
$txt['calendar43'] = 'لینک رویداد';
$txt['calendar47'] = 'تقویم آینده';
$txt['calendar47b'] = 'امروز تقویم';
$txt['calendar51'] = 'هفته';
$txt['calendar54'] = 'تعداد روزها:';
$txt['calendar_how_edit'] = 'این رویداد را به چه دلیل ویرایش می کنید؟';
$txt['calendar_link_event'] = 'لینک واقعه برای ارسال:';
$txt['calendar_confirm_delete'] = 'آیا از حذف این واقعه اطمینان دارید؟';
$txt['calendar_linked_events'] = 'واقعه ی لینک شده';

$txt['moveTopic1'] = 'یک کپی از موضوع را در انجمن قبلی قرار بده';
$txt['moveTopic2'] = 'ویرایش عنوان موضوع';
$txt['moveTopic3'] = 'عنوان جدید';
$txt['moveTopic4'] = 'ویرایش عنوان همه ارسال های انجام شده به این موضوع';

$txt['theme_template_error'] = 'برنامه قادر به بارگذاری فایل های قالب \'%s\' نمی باشد.';
$txt['theme_language_error'] = 'برنامه قادر به بارگذاری فایل های زبان  \'%s\' نمی باشد.';

$txt['parent_boards'] = 'انجمن های زیر گروه';

$txt['smtp_no_connect'] = 'برنامه قادر به اتصال به میزبان SMTP نمی باشد';
$txt['smtp_port_ssl'] = 'پورت SMTP غلط وارد شده است . برای سرورهای SSL باید از پورت 465 استفاده شود .';
$txt['smtp_bad_response'] = 'برنامه قادر به اتصال به سرور ایمیل نمی باشد.';
$txt['smtp_error'] = 'خطاهای زیر به هنگام ارسال ایمیل بوجود آمد: ';
$txt['mail_send_unable'] = 'برنامه قادر به ارسال ایمیل به آدرس \'%s\' نمی باشد.';

$txt['mlist_search'] = 'جستجوی کاربران';
$txt['mlist_search2'] = 'جستجوی مجدد';
$txt['mlist_search_email'] = 'جستجو بر اساس آدرس ایمیل';
$txt['mlist_search_messenger'] = 'جستجو بر اساس نام مستعار مسنجر';
$txt['mlist_search_group'] = 'جستجو بر اساس رتبه';
$txt['mlist_search_name'] = 'جستجو بر اساس نام';
$txt['mlist_search_website'] = 'جستجو بر اساس وب سایت کاربر';
$txt['mlist_search_results'] = 'نتایج جستجو برای';

$txt['attach_downloaded'] = 'دفعات دانلود:';
$txt['attach_viewed'] = 'نمایش داده شده است';
$txt['attach_times'] = 'بار';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'تنظیمات';
$txt['never'] = 'هرگز';
$txt['more'] = 'بیشتر';

$txt['hostname'] = 'نام میزبان ';
$txt['you_are_post_banned'] = 'متاسفیم %s، شما توسط مدیران از ارسال موضوع جدید یا پیغام خصوصی به کاربران منع شده اید.';
$txt['ban_reason'] = 'دلیل منع';

$txt['tables_optimized'] = 'بانک اطلاعاتی به روز شد';

$txt['add_poll'] = 'ایجاد نظرسنجی جدید';
$txt['poll_options6'] = 'شما فقط اجازه انتخاب %s گزینه را دارید.';
$txt['poll_remove'] = 'حذف نظرسنجی';
$txt['poll_remove_warn'] = 'آیا از حذف نظرسنجی از موضوع اطمینان دارید؟';
$txt['poll_results_expire'] = 'نمایش نتایج بعد از اخذ رای';
$txt['poll_expires_on'] = 'بستن رای گیری';
$txt['poll_expired_on'] = 'بستن رای گیری';
$txt['poll_change_vote'] = 'حذف آراء';
$txt['poll_return_vote'] = 'اختیارات رای گیری';

$txt['quick_mod_remove'] = 'حذف انتخاب شده ها';
$txt['quick_mod_lock'] = 'قفل کردن انتخاب شده ها ';
$txt['quick_mod_sticky'] = 'نشانه گذاری انتخاب شده ها بعنوان موضوع مهم';
$txt['quick_mod_move'] = 'انتقال موضوع انتخاب شده به';
$txt['quick_mod_merge'] = 'ترکیب انتخاب شده ها';
$txt['quick_mod_markread'] = 'نشانه گذاری انتخاب شده بعنوان خوانده شده';
$txt['quick_mod_go'] = 'برو';
$txt['quickmod_confirm'] = 'آیا شما از انجام این عمل مطمئن هستید؟';

$txt['spell_check'] = 'غلط گیری';

$txt['quick_reply_1'] = 'پاسخ سریع';
$txt['quick_reply_2'] = 'با <i>پاسخ سریع</i> شما می توانید پیغام خود را به صورت سریع ارسال کنید. ( تمامی کدهای انجمن و صورتکها فعال هستند )';
$txt['quick_reply_warning'] = 'این موضوع قفل شده است و فقط مدیران انجمن اجازه پاسخ به این موضوع را دارند';

$txt['notification_enable_board'] = 'آیا می خواهید در صورت ارسال موضوع جدید به این انجمن توسط ایمیل به شما خبر داده شود؟ ';
$txt['notification_disable_board'] = 'آیا از غیرفعال کردن باخبرسازی اطمینان دارید؟';
$txt['notification_enable_topic'] = 'آیا می خواهید در صورت پاسخ به این موضوع توسط ایمیل به شما خبر داده شود؟';
$txt['notification_disable_topic'] = 'آیا از غیرفعال کردن باخبرسازی اطمینان دارید؟';

$txt['rtm1'] = 'گزارش به مدیر انجمن';

$txt['unread_topics_visit'] = 'موضوعات جدید ارسال شده';
$txt['unread_topics_visit_none'] = 'هیچ موضوع جدید خوانده نشده ای از آخرین بازدید شما پیدا نشد.  <a href="' . $scripturl . '?action=unread;all">برای دیدن همه موضوعات خوانده نشده اینجا را کلیک کنید</a>.';
$txt['unread_topics_all'] = 'تمام موضوعات خوانده نشده';
$txt['unread_replies'] = 'موضوعات به روز شده';

$txt['who_title'] = 'چه کسی در سایت است؟';
$txt['who_and'] = ' و ';
$txt['who_viewing_topic'] = ' درحال دیدن موضوع.';
$txt['who_viewing_board'] = ' در حال دیدن انجمن';
$txt['who_member'] = 'کاربر';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'HTML 4.01 صحیح!';
$txt['valid_xhtml'] = 'XHTML 1.0 صحیح!';
$txt['valid_css'] = 'CSS صحیح!';

$txt['guest'] = 'مهمان';
$txt['guests'] = 'مهمان';
$txt['user'] = 'کاربر';
$txt['users'] = 'کاربر';
$txt['hidden'] = 'مخفی';
$txt['buddy'] = 'دوست';
$txt['buddies'] = 'دوست';
$txt['most_online_ever'] = 'بیشترین میزان آنلاین';
$txt['most_online_today'] = 'بیشترین میزان آنلاین در امروز';

$txt['merge_select_target_board'] = 'انجمنی را برای ترکیب موضوعات انتخاب کنید';
$txt['merge_select_poll'] = 'کدام یک از نظرسنجی ها برای این موضوع ایجاد شود؟';
$txt['merge_topic_list'] = 'موضوعاتی را برای ترکیب انتخاب کنید';
$txt['merge_select_subject'] = 'انتخاب عنوان برای موضوعات ترکیب شده';
$txt['merge_custom_subject'] = 'انتخاب عنوان جدید';
$txt['merge_enforce_subject'] = 'تغییر عنوان برای تمامی پیغامها';
$txt['merge_include_notifications'] = 'فعال بودن باخبر سازی';
$txt['merge_check'] = 'آیا از ترکیب موضوعات اطمینان دارید؟';
$txt['merge_no_poll'] = 'هیچ نظرسنجی انتخاب نشود';

$txt['response_prefix'] = 'پاسخ : ';
$txt['current_icon'] = 'آیکن فعلی';

$txt['smileys_current'] = 'صورتک هایی فعلی نصب شده';
$txt['smileys_none'] = 'هیچ صورتکی وجود ندارد';
$txt['smileys_forum_board_default'] = 'پیشفرض انجمن';

$txt['search_results'] = 'نتایج جستجو';
$txt['search_no_results'] = 'متاسفانه موردی مطابق با خواسته شما پیدا نشد';

$txt['totalTimeLogged1'] = 'مجموع مدت زمانی که شما در انجمن هستید:  ';
$txt['totalTimeLogged2'] = 'روز،  ';
$txt['totalTimeLogged3'] = ' ساعت و ';
$txt['totalTimeLogged4'] = ' دقیقه.';
$txt['totalTimeLogged5'] = 'روز ';
$txt['totalTimeLogged6'] = 'ساعت ';
$txt['totalTimeLogged7'] = 'دقیقه';

$txt['approve_thereis'] = 'است.';
$txt['approve_thereare'] = 'هستند.';
$txt['approve_member'] = 'یک کاربر';
$txt['approve_members'] = 'کاربر';
$txt['approve_members_waiting'] = 'منتظر فعال سازی نام کاربری خود';

$txt['notifyboard_turnon'] = 'آیا شما میخواهید در صورت ارسال موضوع جدید در این انجمن توسط ایمیل خبردار شوید؟';
$txt['notifyboard_turnoff'] = 'آیا شما اطمینان دارید که نمیخواهید در صورت ارسال موضوع جدید در این انجمن توسط ایمیل خبردار شوید؟';

$txt['activate_code'] = 'کد فعال سازی شما';

$txt['find_members'] = 'جستجو اعضا';
$txt['find_username'] = 'نام، نام کاربری و یا آدرس ایمیل';
$txt['find_buddies'] = 'فقط دوستانم را نشان بده (دوستانی که اضافه (ادد) کرده ام.)';
$txt['find_wildcards'] = 'استفاده از کاراکترهای * و ؟ فعال است.';
$txt['find_no_results'] = 'هیچ نتیجه ای پیدا نشد';
$txt['find_results'] = 'نتایج';
$txt['find_close'] = 'بستن';

$txt['unread_since_visit'] = 'دیدن موضوع های جدید ارسال شده از آخرین ورود شما';
$txt['show_unread_replies'] = 'دیدن پاسخ های جدید به ارسالهای شما';

$txt['change_color'] = 'انتخاب رنگ';

$txt['quickmod_delete_selected'] = 'حذف انتخاب شده ها';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'شما پیغام خصوصی جدیدی دریافت کرده اید. آیا مایل با باز شدن صندوق پستی خود توسط پنجره جدید هستید؟';

$txt['previous_next_back'] = '&laquo; قبلی';
$txt['previous_next_forward'] = 'بعدی  &raquo;';

$txt['movetopic_auto_board'] = '[انجمن]';
$txt['movetopic_auto_topic'] = '[لینک موضوعات]';
$txt['movetopic_default'] = ' این موضوع انتقال داده شد به ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'باز و یا مخفی شدن قسمت بالای انجمن';

$txt['mark_unread'] = 'نشانه گذاری';

$txt['ssi_not_direct'] = 'شما اجازه اجرای مستقیم فایل SSI.php را ندارید؛ برای اجرای این فایل از (%s) و یا فرمت ?ssi_function=something استفاده کنید.';
$txt['ssi_session_broken'] = 'SSI.php برای بارگزاری یک سشن ناتوان است!  علت این مشکل بروز خطا در کارکرد ورود و خروج است - لطفا اول مطمئن شوید که SSI.php اجازه بارگذاری *همه چیز* را دارد سپس مجددا تلاش کنید!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'پیش نمایش';
$txt['preview_fetch'] = 'ایجاد پیش نمایش ...';
$txt['preview_new'] = 'پیغام جدید';
$txt['error_while_submitting'] = 'خطا یا خطاهای زیر به هنگام ارسال شما بوجود آمد:';

$txt['split_selected_posts'] = 'ارسال های انتخاب شده';
$txt['split_selected_posts_desc'] = 'موضوع هایی که در زیر انتخاب شده اند بعد از جداسازی یک موضوع خواهند شد.';
$txt['split_reset_selection'] = 'بازنشاندن انتخاب';

$txt['modify_cancel'] = 'انصراف';
$txt['mark_read_short'] = 'نشانه گذاری بعنوان خوانده شده';

$txt['pm_short'] = 'پیغامهای خصوصی ';
$txt['hello_member_ndt'] = 'سلام';

$txt['ajax_in_progress'] = 'درحال بارگزاری ...';

?>