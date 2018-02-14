<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'ur_PK.utf8';
$txt['lang_dictionary'] = 'ur';
$txt['lang_spelling'] = 'pakistani';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = true;

$txt['days'] = array('اتوار', 'سوموار', 'منگل', 'بدھ', 'جمعرات', 'جمعۃالمبارک', 'ہفتہ');
$txt['days_short'] = array('اتوار', 'سوموار', 'منگل', 'بدھ', 'جمعرات', 'جمعۃالمبارک', 'ہفتہ');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'جنوری', 'فروری', 'مارچ', 'اپریل', 'مئی', 'جون', 'جولائی', 'اگست', 'ستمبر', 'اکتوبر', 'نومبر', 'دسمبر');
$txt['months_titles'] = array(1 => 'جنوری', 'فروری', 'مارچ', 'اپریل', 'مئی', 'جون', 'جولائی', 'اگست', 'ستمبر', 'اکتوبر', 'نومبر', 'دسمبر');
$txt['months_short'] = array(1 => 'جنوری', 'فروری', 'مارچ', 'اپریل', 'مئی', 'جون', 'جولائی', 'اگست', 'ستمبر', 'اکتوبر', 'نومبر', 'دسمبر');

$txt['newmessages0'] = 'نیا ہے';
$txt['newmessages1'] = 'نئے ہیں';
$txt['newmessages3'] = 'نیا';
$txt['newmessages4'] = '،';

$txt[2] = 'منتظم';

$txt[10] = 'محفوظ کیجیے';

$txt[17] = 'ترمیم کیجیے';
$txt[18] = $context['forum_name'] . ' - سرِورق';
$txt[19] = 'اراکین';
$txt[20] = 'بورڈ کا نام';
$txt[21] = 'تحریر';
$txt[22] = 'آخری تحریر';

$txt[24] = '(بِلاعنوان)';
$txt[26] = 'تحریریں';
$txt[27] = 'خاکہ دیکھیے';
$txt[28] = 'مہمان';
$txt[29] = 'مصنف';
$txt[30] = 'بروز';
$txt[31] = 'ختم کیجیے';
$txt[33] = 'نیا موضوع شروع کیجیے';

$txt[34] = 'داخلہ';
// Use numeric entities in the below string.
$txt[35] = 'اسمِ رکن';
$txt[36] = 'کلمہِ شناخت';

$txt[40] = 'مطلوبہ اسمِ صارف موجود نہیں ہے';

$txt[62] = 'بورڈ کے ناظم';
$txt[63] = 'موضوع ختم کیجیے';
$txt[64] = 'موضوعات';
$txt[66] = 'پیغام میں ترمیم کیجیے';
$txt[68] = 'نام';
$txt[69] = 'ای میل';
$txt[70] = 'عنوان';
$txt[72] = 'پیغام';

$txt[79] = 'خاکہ';

$txt[81] = 'کلمہِ شناخت درج کیجیے';
$txt[82] = 'کلمہِ شناخت کی توثیق کیجیے';
$txt[87] = 'مقام';

$txt[92] = 'خاکہ دیکھیے';
$txt[94] = 'کُل';
$txt[95] = 'تحریریں';
$txt[96] = 'ویب سائیٹ';
$txt[97] = 'اندراج';

$txt[101] = 'فہرستِ پیغام';
$txt[102] = 'خبریں';
$txt[103] = 'سرِورق';

$txt[104] = 'موضوع کو مقفل یا غیر مقفل کیجیے';
$txt[105] = 'تحریر';
$txt[106] = 'کوئی گڑبڑ ہو گئی ہے';
$txt[107] = 'بوقت';
$txt[108] = 'خروج';
$txt[109] = 'ابتداء از';
$txt[110] = 'جوابات';
$txt[111] = 'آخری تحریر';
$txt[114] = 'منتظم داخل ہوں';
// Use numeric entities in the below string.
$txt[118] = 'موضوع';
$txt[119] = 'مدد';
$txt[121] = 'پیغام ختم کیجیے';
$txt[125] = 'مطلع کیجیے';
$txt[126] = 'اگر کوئی شخص اس موضوع کا جواب دے تو کیا آپ کو مطلع کیا جائے؟';
// Use numeric entities in the below string.
$txt[130] = "فی امان اللہ ، \nمنجانب " . $context['forum_name'] . ' ٹیم';
$txt[131] = 'جوابات آنے پر مطلع کیجیے';
$txt[132] = 'موضوع منتقل کیجیے';
$txt[133] = 'وہاں منتقل کیجیے';
$txt[139] = 'صفحات';
$txt[140] = 'گزشتہ' . $modSettings['lastActive'] . ' دقیقوں میں حاضر صارفین';
$txt[144] = 'ذاتی پیغامات';
$txt[145] = 'اقتباس کے ساتھ جواب دیجیے';
$txt[146] = 'جواب دیجیے';

$txt[151] = 'کوئی پیغام نہیں ۔۔۔';
$txt[152] = 'آپ کے پاس ہیں';
$txt[153] = 'پیغامات';
$txt[154] = 'اس پیغام کو ختم کیجیے';

$txt[158] = 'حاضر صارفین';
$txt[159] = 'ذاتی پیغام';
$txt[160] = 'دیکھیے';
$txt[161] = 'جائیے';
$txt[162] = 'کیا آپ واقعی یہ موضوع ختم کرنا چاہتے ہیں؟';
$txt[163] = 'جی ہاں';
$txt[164] = 'جی نہیں';

$txt[166] = 'تلاش کے نتائج';
$txt[167] = 'نتائج کا اختتام';
$txt[170] = 'معذرت ، اس قسم کی کوئی تحریر نہیں ملی';
$txt[176] = 'بروز';

$txt[182] = 'تلاش';
$txt[190] = 'تمام';

$txt[193] = 'واپس';
$txt[194] = 'کلمہِ شناخت کی یاد دہانی';
$txt[195] = 'موضوع کی ابتدا کرنے والے';
$txt[196] = 'عنوان';
$txt[197] = 'مرسلہ';
$txt[200] = 'تمام اراکین کی قابلِ تلاش فہرست';
$txt[201] = 'برائے مہربانی خوش آمدید کہیے';
$txt[208] = 'مرکزِ انتظام';
$txt[211] = 'آخری ترمیم';
$txt[212] = 'کیا آپ اس موضوع کی اطلاعات غیرفعال کرنا چاہتے ہیں؟';

$txt[214] = 'تازہ تحریریں';

$txt[227] = 'مقام';
$txt[231] = 'جنس';
$txt[233] = 'تاریخِ اندراج';

$txt[234] = 'فورم کی تازہ ترین تحریریں دیکھیے';
$txt[235] = 'تازہ ترین موضوع ہے';

$txt[238] = 'مرد';
$txt[239] = 'عورت';

$txt[240] = 'اسمِ صارف میں غلط حرف استعمال کیا گیا';

$txt['welcome_guest'] = 'خوش آمدید ، <b>' . $txt[28] . '</b>. برائے مہربانی <a href="' . $scripturl . '?action=login">داخل</a> یا <a href="' . $scripturl . '?action=register">رجسٹر ہو جائیے</a>';
$txt['welcome_guest_activate'] = '<br />کیا آپ کو <a href="' . $scripturl . '?action=activate">فعالیت کی ای میل</a> نہیں ملی؟';
$txt['hello_member'] = 'السلام علیکم ،';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'خوش آمدید ،';
$txt[247] = 'السلام علیکم ،';
$txt[248] = 'خوش آمدید ،';
$txt[249] = 'برائے مہربانی';
$txt[250] = 'واپسی';
$txt[251] = 'کوئی منزل منتخب کیجیے';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'مرسلہ';

$txt[287] = 'سمائلی';
$txt[288] = 'ناراض';
$txt[289] = 'مسکراہٹ';
$txt[290] = 'قہقہہ';
$txt[291] = 'غمگین';
$txt[292] = 'آنکھ مارنا';
$txt[293] = 'جھرجھری';
$txt[294] = 'دھچکہ';
$txt[295] = 'خوش مزاج';
$txt[296] = 'ہونہہ';
$txt[450] = 'گھومتی آنکھیں';
$txt[451] = 'چڑانا';
$txt[526] = 'گھبرایا ہوا';
$txt[527] = 'لب خاموش';
$txt[528] = 'غیر متعین';
$txt[529] = 'بوسہ';
$txt[530] = 'رونا';

$txt[298] = 'ناظم';
$txt[299] = 'ناظمین';

$txt[300] = 'اس بورڈ کے موضوعات کو پڑھے ہوئے کا نشان لگائیے';
$txt[301] = 'مناظر';
$txt[302] = 'نیا';

$txt[303] = 'تمام ارکان دیکھیے';
$txt[305] = 'دیکھیے';
$txt[307] = 'ای میل';

$txt[308] = 'اراکین  کی فہرست';
$txt[309] = 'کے';
$txt[310] = 'کُل اراکین';
$txt[311] = 'میں  سے';
$txt[315] = 'کلمہِ شناخت بھول گئے؟';

$txt[317] = 'تاریخ';
// Use numeric entities in the below string.
$txt[318] = 'منجانب';
$txt[319] = 'عنوان';
$txt[322] = 'نئے پیغامات دیکھیے';
$txt[324] = 'برائے';

$txt[330] = 'موضوعات';
$txt[331] = 'اراکین';
$txt[332] = 'فہرستِ اراکین';
$txt[333] = 'نئی تحریریں';
$txt[334] = 'کوئی نئی تحریریں نہیں';

$txt['sendtopic_send'] = 'بھیجیے';

$txt[371] = 'وقت کا ردّ و بدل';
$txt[377] = 'یا';

$txt[398] = 'معذرت ، مطلوبہ شے دریافت نہیں ہو سکی';

$txt[418] = 'اطلاع';

$txt[430] = 'معذرت %s، آپ اس فورم کو نہیں دیکھ سکتے';

$txt[452] = 'تمام پیغامات پر پڑھے ہوئے کا نشان لگائیے';

$txt[454] = 'گرما گرم موضوع (' . $modSettings['hotTopicPosts'] . ' سے زیادہ جوابات)';
$txt[455] = 'فعال ترین موضوع (' . $modSettings['hotTopicVeryPosts'] . ' سے زیادہ جوابات)';
$txt[456] = 'مقفل موضوع';
$txt[457] = 'عام موضوع';
$txt['participation_caption'] = 'موضوع جس میں آپ نے تحریر کیا ہے';

$txt[462] = 'جائیے';

$txt[465] = 'پرِنٹ';
$txt[467] = 'خاکہ';
$txt[468] = 'خلاصہِ موضوع';
$txt[470] = 'رہنے دیجیے';
$txt[471] = 'پیغام';
$txt[473] = 'یہ نام پہلے منتخب ہو چکا ہے';

$txt[488] = 'کُل اراکین';
$txt[489] = 'کُل تحریریں';
$txt[490] = 'کُل موضوعات';

$txt[497] = 'دقیقوں پر محیط حاضری';

$txt[507] = 'پیش منظر';
$txt[508] = 'ہمیشہ داخل رہیے';

$txt[511] = 'درج کیا جا چکا ہے';
// Use numeric entities in the below string.
$txt[512] = 'آئی پی';

$txt[513] = 'آئی سی کیو';
$txt[515] = 'ویب سائیٹ';

$txt[525] = 'منجانب';

$txt[578] = 'گھنٹے';
$txt[579] = 'دِن';

$txt[581] = ', ہمارے نئے رُکن';

$txt[582] = 'تلاش برائے';

$txt[603] = 'AIM-ائے ای ایم';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'السلام+علیکم!+کیا+آپ+موجود+ہیں؟';
$txt[604] = 'یاہو';

$txt[616] = 'یاد رکھیے یہ فورم \'زیرِمرمت\' ہے';

$txt[641] = 'پڑھا گیا';
$txt[642] = 'بار';

$txt[645] = 'شماریاتِ فورم';
$txt[656] = 'تازہ ترین رُکن';
$txt[658] = 'کُل زمرہ جات';
$txt[659] = 'تازہ ترین تحریر';

$txt[660] = 'آپ کے پاس ہیں';
$txt[661] = 'کلِک';
$txt[662] = 'یہاں';
$txt[663] = 'ان کو دیکھنے کے لیے';

$txt[665] = 'کُل بورڈز';

$txt[668] = 'صفحہ پرنٹ کیجیے';

$txt[679] = 'یہ ای میل ایڈریس فعال ہونا چاہیے';

$txt[683] = 'میں ایک geek ہوں !!';
$txt[685] = $context['forum_name'] . ' - مرکزِ معلومات';

$txt[707] = 'یہ موضوع بھیجیے';

$txt['sendtopic_title'] = 'یہ موضوع &quot;%s&quot; دوست کو بھیجیے';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'محترمی %s,';
$txt['sendtopic_this_topic'] = 'میری خواہش ہے کہ آپ "%s" ' . $context['forum_name'] . ' کو دیکھیں ۔ اسے دیکھنے کے لیے اس ربط پر کلِک کیجیے';
$txt['sendtopic_thanks'] = 'بہت شکریہ';
$txt['sendtopic_sender_name'] = 'آپ کا اسمِ گرامی';
$txt['sendtopic_sender_email'] = 'آپ کا ای میل ایڈریس';
$txt['sendtopic_receiver_name'] = 'وصول کنندہ کا نام';
$txt['sendtopic_receiver_email'] = 'وصول کنندہ کا ای میل ایڈریس';
$txt['sendtopic_comment'] = 'تبصرہ کیجیے';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'اس موضوع پر ایک تبصرہ بھی کیا گیا ہے';

$txt[721] = 'ای میل ایڈریس کو لوگوں سے چھپایا جائے؟';

$txt[737] = 'تمام پر نشان';

// Use numeric entities in the below string.
$txt[1001] = 'ڈیٹابیس میں خرابی';
$txt[1002] = 'برائے مہربانی دوبارہ کوشش کیجیے ۔ اگر آپ کو دوبارہ یہ گڑبڑ نظر آئے تو منتظم کو مطلع کیجیے';
$txt[1003] = 'فائل';
$txt[1004] = 'قطار';
// Use numeric entities in the below string.
$txt[1005] = 'SMF نے آپ کے ڈیٹابیس کی ایک خرابی کا پتہ لگا کر اسے درست کرنے کی خودکار کوشش کی ہے ۔ اگر آپ کو دوبارہ یہ گڑبڑ نظر آئے تو اپنے ہوسٹ سے رابطہ کیجیے';
$txt['database_error_versions'] = '<b>توجہ فرمائیے:</b> ہم نے محسوس کیا ہے کہ آپ کے ڈیٹابیس کو اَپ گریڈ کرنے کی ضرورت ہے ۔ آپ کے فورم کی فائلوں کا موجود ورژن ' . $forum_version . ' ہے جبکہ آپ کے ڈیٹابیس کا ورژن ' . $modSettings['smfVersion'] . ' ہے ۔ عین ممکن ہے کہ upgrade.php فائل کا تازہ ورژن استعمال کرنے سے یہ مسئلہ دور ہو جائے ۔';
$txt['template_parse_error'] = 'سانچے کے استعمال میں مسئلہ';
$txt['template_parse_error_message'] = 'ایسا لگتا ہے کہ سانچے میں موجود کوئی شے فورم میں مسائل پیدا کر رہی ہے ۔ یہ مسئلہ عارضی ہے اس لیے تھوڑی دیر بعد پھر کوشش کیجیے ۔ اگر یہ خرابی مستقل نظر آتی رہے تو منتظم سے رابطہ کیجیے ۔<br /><br />آپ اس صفحے کو <a href="javascript:location.reload();">تازہ</a> کر کے بھی دیکھ لیجیے ، ہو سکتا ہے مسئلہ دور ہو جائے ۔';
$txt['template_parse_error_details'] = '<tt><b>%1$s</b></tt> جو کہ سانچے یا زبان کی فائل ہے ، اسے استعمال کرتے ہوئے کوئی گڑبڑ ہو گئی ہے ۔ برائے مہربانی syntax کو دوبارہ دیکھیے ۔ یاد رکھیے کہ single quotes (<tt>\'</tt>) کو (<tt>\\</tt>) کے ساتھ استعمال کرنا چاہیے ۔ PHP کی جانب سے اس مسئلہ کے بارے میں علم حاصل کرنے کے لیے,<a href="' . $boardurl . '%1$s">فائل کو براہِ راست دیکھیے</a>.<br /><br />آپ اس صفحے کو <a href="javascript:location.reload();">تازہ</a> کر کے یا <a href="' . $scripturl . '?theme=1">ڈیفالٹ تھیم</a> استعمال کر کے بھی دیکھ لیجیے ، ہو سکتا ہے مسئلہ دور ہو جائے ۔';

$txt['smf10'] = '<b>آج</b> at ';
$txt['smf10b'] = '<b>گزشتہ کل</b> بوقت ';
$txt['smf20'] = 'نیا پول';
$txt['smf21'] = 'سوال';
$txt['smf23'] = 'ووٹ ڈالیے';
$txt['smf24'] = 'کُل ووٹرز';
$txt['smf25'] = 'شارٹ کٹ: روانگی کے لیے alt+s اور پیش منظر کے لیے alt+p دبائیے';
$txt['smf29'] = 'نتائج دیکھیے';
$txt['smf30'] = 'ووٹنگ مقفل کیجیے';
$txt['smf30b'] = 'ووٹنگ غیر مقفل کیجیے';
$txt['smf39'] = 'پول میں ترمیم کیجیے';
$txt['smf43'] = 'پول';
$txt['smf47'] = 'ایک دِن';
$txt['smf48'] = 'ایک ہفتہ';
$txt['smf49'] = 'ایک ماہ';
$txt['smf50'] = 'ہمیشہ کے لیے';
$txt['smf52'] = 'اسمِ صارف ، کلمہِ شناخت اور session length کے ساتھ داخل ہوئیے';
$txt['smf53'] = 'ایک گھنٹہ';
$txt['smf56'] = 'منتقل کر دیا گیا';
$txt['smf57'] = 'برائے مہربانی مختصراً لکھ دیجیے کہ<br />یہ موضوع کیوں منتقل کیا جا رہا ہے؟';
$txt['smf60'] = 'معذرت ، کرما میں ترمیم کے لیے آپ کے پاس کوئی تحریر نہیں ہے ۔ کم از کم درکار تحریریں ہیں ';
$txt['smf62'] = 'معذرت ، مگر آپ انتظار کیے بناء دوبارہ کرما نہیں کر سکتے ';
$txt['smf82'] = 'بورڈ';
$txt['smf88'] = 'میں';
$txt['smf96'] = 'چسپاں موضوع';

$txt['smf138'] = 'ختم کیجیے';

$txt['smf199'] = 'آپ کے ذاتی پیغامات';

$txt['smf211'] = 'کے بی';

$txt['smf223'] = '[مزید شماریات]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'کوڈ';
$txt['smf239'] = 'اقتباس اَز';
$txt['smf240'] = 'اقتباس';

$txt['smf251'] = 'موضوع علیحدہ کیجیے';
$txt['smf252'] = 'موضوعات ملائیے';
$txt['smf254'] = 'نئے موضوع کا عنوان';
$txt['smf255'] = 'صرف یہ موضوع علیحدہ کیجیے';
$txt['smf256'] = 'اس موضوع کو سپلٹ  کریں اس عنوان کے بعد';
$txt['smf257'] = 'علیحدگی کے لیے تحریریں منتخب کیجیے';
$txt['smf258'] = 'نیا موضوع';
$txt['smf259'] = 'موضوع کو دو موضوعات میں تقسیم کر دیا گیا';
$txt['smf260'] = 'اصلی موضوع';
$txt['smf261'] = 'برائے مہربانی وہ تحریریں منتخب کیجیے جنہیں علیحدہ کرنا ہے';
$txt['smf264'] = 'موضوعات کامیابی سے ملا دیے گئے';
$txt['smf265'] = 'حال ہی میں ملایا گیا موضوع';
$txt['smf266'] = 'ملانے کے لیے موضوع';
$txt['smf267'] = 'مطلوبہ بورڈ';
$txt['smf269'] = 'مطلوبہ موضوع';
$txt['smf274'] = 'کیا آپ واقعی ملانا چاہتے ہیں';
$txt['smf275'] = 'ہمراہ';
$txt['smf276'] = 'یہ فنکشن دو موضوعات کو ملا کر ایک موضوع بنا دے گا ۔ تحریروں کو وقت کے حساب سے ترتیب دیا جائے گا ۔ اس لیے سب سے پرانی تحریر بنائے گئے موضوع کی پہلی تحریر ہوگی ۔';

$txt['smf277'] = 'موضوع کو چسپاں کیجیے';
$txt['smf278'] = 'موضوع کو غیر چسپاں بنائیے';
$txt['smf279'] = 'موضوع مقفل کیجیے';
$txt['smf280'] = 'موضوع غیر مقفل کیجیے';

$txt['smf298'] = 'مزید گہری تلاش';

$txt['smf299'] = 'بڑا سیکیورٹی خطرہ:';
$txt['smf300'] = 'آپ نے ختم نہیں کیا ';

$txt['smf301'] = 'صفحہ کی تخلیق کا دورانیہ ';
$txt['smf302'] = ' ثانیے ہمراہ ';
$txt['smf302b'] = ' کوئیریز';

$txt['smf315'] = 'منتظمین اور ناظمین کو غیر اخلاقی تحریر کی اشاعت کے بارے میں مطلع کیجیے ۔ <br /><i>یاد رکھیے کہ ایسا کرنے سے ناظم آپ کا ای میل ایڈریس دیکھ سکیں گے ۔</i>';

$txt['online2'] = 'حاضر';
$txt['online3'] = 'غیرحاضر';
$txt['online4'] = 'ذاتی پیغام (حاضر)';
$txt['online5'] = 'ذاتی پیغام (غیر حاضر)';
$txt['online8'] = 'حالت';

$txt['topbottom4'] = 'اوپر جائیے';
$txt['topbottom5'] = 'نیچے جائیے';

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
;

$txt['calendar3'] = 'سالگرہیں:';
$txt['calendar4'] = 'واقعات:';
$txt['calendar3b'] = 'آنے والی سالگرہیں:';
$txt['calendar4b'] = 'آنے والے واقعات:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'مہینہ:';
$txt['calendar10'] = 'سال:';
$txt['calendar11'] = 'دِن:';
$txt['calendar12'] = 'واقعہ کا عنوان:';
$txt['calendar13'] = 'تحریر برائے:';
$txt['calendar20'] = 'واقعہ میں ترمیم';
$txt['calendar21'] = 'اس واقعہ کو ختم کریں؟';
$txt['calendar22'] = 'واقعہ ختم کیجیے';
$txt['calendar23'] = 'واقعہ لکھیے';
$txt['calendar24'] = 'تقویم';
$txt['calendar37'] = 'تقویم سے مربوط کیجیے';
$txt['calendar43'] = 'واقعہ سے مربوط کیجیے';
$txt['calendar47'] = 'آنے والی تقویم';
$txt['calendar47b'] = 'آج کی تقویم';
$txt['calendar51'] = 'ہفتہ';
$txt['calendar54'] = 'دِنوں کے نام:';
$txt['calendar_how_edit'] = 'ان واقعات کی ترمیم کیسے کرتے ہیں؟';
$txt['calendar_link_event'] = 'واقعہ کو تحریر سے مربوط کیجیے:';
$txt['calendar_confirm_delete'] = 'کیا آپ واقعی اس واقعہ کو ختم کرنا چاہتے ہیں؟';
$txt['calendar_linked_events'] = 'مربوط واقعات';

$txt['moveTopic1'] = 'ریڈائریکشن موضوع دیجیے';
$txt['moveTopic2'] = 'موضوع کا عنوان بدلیے';
$txt['moveTopic3'] = 'نیا عنوان';
$txt['moveTopic4'] = 'ہر پیغام کا عنوان بدلیے';

$txt['theme_template_error'] = '\'%s\' سانچے کو لوڈ کرنے میں ناکامی';
$txt['theme_language_error'] = '\'%s\' زبان کی فائل کو لوڈ کرنے میں ناکامی';

$txt['parent_boards'] = 'ذیلی بورڈ';

$txt['smtp_no_connect'] = 'SMTP ہوسٹ سے رابطہ ممکن نہیں';
$txt['smtp_port_ssl'] = 'SMTP پورٹ کی ترتیب درست نہیں۔یہ ایس ایس ایل  (SSL) سرور کیلئے 465 ہونی چاہیے۔';
$txt['smtp_bad_response'] = 'میل سرور سے کوڈز جواب موصول نہیں ہو رہا';
$txt['smtp_error'] = 'میل ارسال کرتے وقت دشواری کا سامنا ہے۔یہ مشکل؛';
$txt['mail_send_unable'] = 'اس \'%s\' پر میل نہیں بھیجی جا سکی';

$txt['mlist_search'] = 'اراکین کی تلاش';
$txt['mlist_search2'] = 'دوبارہ تلاش کیجیے';
$txt['mlist_search_email'] = 'ای میل کے ذریعے تلاش';
$txt['mlist_search_messenger'] = 'پیغام بَر کے مختصر نام کے ذریعے تلاش';
$txt['mlist_search_group'] = 'مقام کے ذریعے تلاش';
$txt['mlist_search_name'] = 'نام کے ذریعے تلاش';
$txt['mlist_search_website'] = 'ویب سائیٹ کے ذریعے تلاش';
$txt['mlist_search_results'] = 'تلاش کے نتائج برائے';

$txt['attach_downloaded'] = 'ڈاؤن لوڈ کیا گیا';
$txt['attach_viewed'] = 'دیکھا گیا';
$txt['attach_times'] = 'بار';

$txt['MSN'] = 'ایم ایس این';

$txt['settings'] = 'ترتیبات';
$txt['never'] = 'کبھی نہیں';
$txt['more'] = 'مزید';

$txt['hostname'] = 'ہوسٹ کا نام';
$txt['you_are_post_banned'] = 'معذرت %s، آپ پر اس فورم میں تحریر یا ذاتی پیغام بھیجنے پر پابندی ہے';
$txt['ban_reason'] = 'وجہ';

$txt['tables_optimized'] = 'ڈیٹابیس ٹیبلز آپٹیمائز کر دیے گئے';

$txt['add_poll'] = 'پول ڈالیے';
$txt['poll_options6'] = 'آپ %s آپشن منتخب نہیں کر سکتے';
$txt['poll_remove'] = 'پول ختم کیجیے';
$txt['poll_remove_warn'] = 'کیا آپ واقعی اس موضوع سے یہ پول ختم کرنا چاہتے ہیں؟';
$txt['poll_results_expire'] = 'ووٹنگ ختم ہونے کے بعد نتائج دکھائے جائیں گے';
$txt['poll_expires_on'] = 'ووٹنگ بند ہو گئی ہے';
$txt['poll_expired_on'] = 'ووٹنگ بند ہو گئی';
$txt['poll_change_vote'] = 'ووٹ ختم کیجیے';
$txt['poll_return_vote'] = 'ووٹنگ آپشن';

$txt['quick_mod_remove'] = 'منتخب کو ختم کیجیے';
$txt['quick_mod_lock'] = 'منتخب کو مقفل کیجیے';
$txt['quick_mod_sticky'] = 'منتخب کو چسپاں کیجیے';
$txt['quick_mod_move'] = 'منتخب کو منتقل کیجیے';
$txt['quick_mod_merge'] = 'منتخب کو ملائیے';
$txt['quick_mod_markread'] = 'منتخب کو پڑھے ہوئے کا نشان لگائیے';
$txt['quick_mod_go'] = 'جائیے';
$txt['quickmod_confirm'] = 'کیا آپ واقعی یہ کرنا چاہتے ہیں؟';

$txt['spell_check'] = 'املاء کی پڑتال';

$txt['quick_reply_1'] = 'فوری جواب';
$txt['quick_reply_2'] = '<i>فوری جواب</i> کے ذریعے آپ بلیٹن بورڈ کوڈ اور سمائلیز کو عام مگر بہتر انداز میں استعمال کر سکتے ہیں';
$txt['quick_reply_warning'] = 'تنبیہ: یہ موضوع مقفل ہے<br />صرف منتظمین اور ناظمین جواب دے سکتے ہیں';

$txt['notification_enable_board'] = 'کیا آپ واقعی اس بورڈ میں نئے موضوعات کی آمد کی اطلاع کو فعال کرنا چاہتے ہیں؟';
$txt['notification_disable_board'] = 'کیا آپ واقعی اس بورڈ میں نئے موضوعات کی آمد کی اطلاع کو غیرفعال کرنا چاہتے ہیں؟';
$txt['notification_enable_topic'] = 'کیا آپ واقعی اس بورڈ میں نئے جوابات کی آمد کی اطلاع کو فعال کرنا چاہتے ہیں؟';
$txt['notification_disable_topic'] = 'کیا آپ واقعی اس بورڈ میں نئے موضوعات کی آمد کی اطلاع کو غیرفعال کرنا چاہتے ہیں؟';

$txt['rtm1'] = 'ناظم کو اطلاع دیجیے';

$txt['unread_topics_visit'] = 'حالیہ اَن پڑھے موضوعات';
$txt['unread_topics_visit_none'] = 'آپ کی آخری آمد کے بعد سے کوئی اَن پڑھا موضوع موجود نہیں ہے ۔ تمام اَن پڑھے موضوعات کی تلاش کے لیے <a href="' . $scripturl . '?action=unread;all">یہاں کلک کیجیے</a>.';
$txt['unread_topics_all'] = 'تمام اَن پڑھے موضوعات';
$txt['unread_replies'] = 'اپ ڈیٹڈ موضوعات';

$txt['who_title'] = 'حاضر صارفین';
$txt['who_and'] = ' اور ';
$txt['who_viewing_topic'] = ' یہ موضوع دیکھ رہے ہیں';
$txt['who_viewing_board'] = ' یہ بورڈ دیکھ رہے ہیں';
$txt['who_member'] = 'رکن';

$txt['powered_by_php'] = 'پی ایچ پی';
$txt['powered_by_mysql'] = 'مائی ایس کیو ایل';
$txt['valid_html'] = 'درست ایچ ٹی ایم ایل 4.01';
$txt['valid_xhtml'] = 'درست ایکس ایچ ٹی ایم ایل 1.0';
$txt['valid_css'] = 'درست سی ایس ایس';

$txt['guest'] = 'مہمان';
$txt['guests'] = 'مہمان';
$txt['user'] = 'صارف';
$txt['users'] = 'صارفین';
$txt['hidden'] = 'خفیہ';
$txt['buddy'] = 'دوست';
$txt['buddies'] = 'دوست';
$txt['most_online_ever'] = 'سب سے زیادہ حاضری';
$txt['most_online_today'] = 'آج سب سے زیادہ حاضر';

$txt['merge_select_target_board'] = 'ملائے گئے موضوع کا مطلوبہ بورڈ منتخب کیجیے';
$txt['merge_select_poll'] = 'ملائے گئے موضوع کے لیے پول منتخب کیجیے';
$txt['merge_topic_list'] = 'ملانے کے لیے موضوعات منتخب کیجیے';
$txt['merge_select_subject'] = 'ملائے گئے موضوع کو عنوان دیجیے';
$txt['merge_custom_subject'] = 'عنوان دیجیے';
$txt['merge_enforce_subject'] = 'تمام پیغامات کا عنوان تبدیل کیجیے';
$txt['merge_include_notifications'] = 'اطلاعات بھی شامل کریں؟';
$txt['merge_check'] = 'ملا دیا جائے؟';
$txt['merge_no_poll'] = 'کوئی پول نہیں';

$txt['response_prefix'] = 'جواب: ';
$txt['current_icon'] = 'موجودہ آئیکون';

$txt['smileys_current'] = 'موجودہ سمائلی سیٹ';
$txt['smileys_none'] = 'کوئی سمائلی نہیں';
$txt['smileys_forum_board_default'] = 'فورم/بورڈ کا ڈیفالٹ';

$txt['search_results'] = 'تلاش کے نتائج';
$txt['search_no_results'] = 'کوئی نتائج نہیں ملے';

$txt['totalTimeLogged1'] = 'کُل داخلے: ';
$txt['totalTimeLogged2'] = ' دِن، ';
$txt['totalTimeLogged3'] = ' گھنٹے اور ';
$txt['totalTimeLogged4'] = ' دقیقے';
$txt['totalTimeLogged5'] = 'د ';
$txt['totalTimeLogged6'] = 'گ ';
$txt['totalTimeLogged7'] = 'م';

$txt['approve_thereis'] = 'موجود ہے';
$txt['approve_thereare'] = 'موجود ہیں';
$txt['approve_member'] = 'ایک رکن';
$txt['approve_members'] = 'اراکین';
$txt['approve_members_waiting'] = 'اجازت کا انتظار ہے';

$txt['notifyboard_turnon'] = 'جب اس بورڈ میں کوئی شخص نیا موضوع تحریر کرے تو کیا آپ کو ای میل کے ذریعے مطلع کیا جائے؟';
$txt['notifyboard_turnoff'] = 'جب اس بورڈ میں کوئی شخص نیا موضوع تحریر کرے تو کیا واقعی آپ کو ای میل کے ذریعے مطلع نہ کیا جائے؟';

$txt['activate_code'] = 'آپ کا فعالیت کوڈ ہے ';

$txt['find_members'] = 'اراکین تلاش کیجیے';
$txt['find_username'] = 'نام ، اسمِ صارف یا ای میل ایڈریس';
$txt['find_buddies'] = 'صرف دوست دکھائیں؟';
$txt['find_wildcards'] = 'مجاز وائلڈکارڈ: *, ?';
$txt['find_no_results'] = 'کوئی نتائج نہیں ملے';
$txt['find_results'] = 'نتائج';
$txt['find_close'] = 'بند کیجیے';

$txt['unread_since_visit'] = 'آخری آمد کے بعد کی اَن پڑھی تحریریں';
$txt['show_unread_replies'] = 'آپ کی تحریروں کے نئے جوابات دکھائیں';

$txt['change_color'] = 'رنگ تبدیل کیجیے';

$txt['quickmod_delete_selected'] = 'منتخب کو ختم کیجیے';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'آپ کے پاس ایک یا زائد ذاتی پیغامات آئے ہیں ۔ \\nانہیں ابھی دیکھنا ہے (نئے دریچے میں)؟';

$txt['previous_next_back'] = '&laquo; گزشتہ';
$txt['previous_next_forward'] = 'اگلا &raquo;';

$txt['movetopic_auto_board'] = '[بورڈ]';
$txt['movetopic_auto_topic'] = '[موضوع کا ربط]';
$txt['movetopic_default'] = 'یہ موضوع منتقل کیا گیا ہے ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'ہیڈر کو سکیڑیے یا پھیلائیے';

$txt['mark_unread'] = 'اَن پڑھے کا نشان لگائیے';

$txt['ssi_not_direct'] = 'آپ SSI.php تک سیدھی رسائی نہ کریں۔آپ یہ راستہ(%s) یا پھر یہ ?ssi_function=something استعمال کرنا چاہیں گئے۔';
$txt['ssi_session_broken'] = 'SSI.php سیشن لوڈ کرنے میں‌ناکام رہی ہے۔یہ خروج اور داخلے ( لاگ آئوت،لاگ آن) پر اثر انداز ہو سکتا ہے۔اس بات کی یقین دہانی کیجئے کہ تمام فائل میں SSI.php  ×ہر چیز× سے پہلے موجود ہے';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'تحریر کا پیش منظر';
$txt['preview_fetch'] = 'پیش منظر کی تیاری ۔۔۔';
$txt['preview_new'] = 'نیا پیغام';
$txt['error_while_submitting'] = 'اس پیغام کی روانگی میں درج ذیل مسائل پیش آئے ہیں:';

$txt['split_selected_posts'] = 'منتخب تحریریں';
$txt['split_selected_posts_desc'] = 'علیحدگی کے بعد درج ذیل تحریریں نیا موضوع بنائیں گی';
$txt['split_reset_selection'] = 'دوبارہ سے انتخاب کیجیے';

$txt['modify_cancel'] = 'منسوخ کیجیے';
$txt['mark_read_short'] = 'پڑھے ہوئے کا نشان لگائیے';

$txt['pm_short'] = 'میرے پیغامات';
$txt['hello_member_ndt'] = 'السلام علیکم';

$txt['ajax_in_progress'] = 'لوڈنگ ۔۔۔';

?>