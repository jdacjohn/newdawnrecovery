<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'bn_BD.utf8';
$txt['lang_dictionary'] = 'bn';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার');
$txt['days_short'] = array('রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহস্পতি', 'শুক্র', 'শনি');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
$txt['months_titles'] = array(1 => 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
$txt['months_short'] = array(1 => 'জানু', 'ফেব্রু', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্ট', 'অক্টো', 'নভে', 'ডিসে');

$txt['newmessages0'] = 'হলো নতুন';
$txt['newmessages1'] = 'হলো নতুন';
$txt['newmessages3'] = 'নতুন';
$txt['newmessages4'] = ',';

$txt[2] = 'প্রশাসক';

$txt[10] = 'রক্ষা করুন';

$txt[17] = 'সম্পাদনা করুন';
$txt[18] = $context['forum_name'] . ' - প্রধান পাতা';
$txt[19] = 'সদস্যবৃন্দ';
$txt[20] = 'বোর্ডের নাম';
$txt[21] = 'পোস্ট';
$txt[22] = 'সর্বশেষ পোস্ট';

$txt[24] = '(শিরোনাম নেই)';
$txt[26] = 'পোস্ট';
$txt[27] = 'প্রোফাইল দেখান';
$txt[28] = 'অতিথি';
$txt[29] = 'লিখেছেন';
$txt[30] = 'এই সময়ে';
$txt[31] = 'বাদ দিন';
$txt[33] = 'নতুন টপিক শুরু করুন';

$txt[34] = 'প্রবেশ করুন';
// Use numeric entities in the below string.
$txt[35] = 'ব্যবহারকারীর নাম';
$txt[36] = 'পাসওয়ার্ড';

$txt[40] = 'এই নাম এই ফোরামে নেই।';

$txt[62] = 'বোর্ড সমন্বয়ক';
$txt[63] = 'টপিক বাদ দিন';
$txt[64] = 'টপিক';
$txt[66] = 'বার্তা সম্পাদনা করুন';
$txt[68] = 'নাম';
$txt[69] = 'ইমেইল';
$txt[70] = 'শিরোনাম';
$txt[72] = 'বার্তা';

$txt[79] = 'প্রোফাইল';

$txt[81] = 'পাসওয়ার্ড পছন্দ করুন';
$txt[82] = 'পাসওয়ার্ড যাচাই করুন';
$txt[87] = 'থেকে';

$txt[92] = 'প্রোফাইল - ';
$txt[94] = 'মোট';
$txt[95] = 'পোস্ট';
$txt[96] = 'ওয়েবসাইট';
$txt[97] = 'নিবন্ধন করুন';

$txt[101] = 'বার্তা প্রধান পাতা';
$txt[102] = 'খবর';
$txt[103] = 'হোম';

$txt[104] = 'বন্ধ/খুলুন টপিক';
$txt[105] = 'পোস্ট';
$txt[106] = 'একটি সমস্যা হয়েছে!';
$txt[107] = 'এখানে';
$txt[108] = 'প্রস্থান করুন';
$txt[109] = 'শুরু করেছেন';
$txt[110] = 'উত্তর';
$txt[111] = 'সর্বশেষ পোস্ট';
$txt[114] = 'প্রশাসকের কেন্দ্রে প্রবেশ করুন';
// Use numeric entities in the below string.
$txt[118] = 'টপিক';
$txt[119] = 'সাহায্য';
$txt[121] = 'বার্তা মুছুন';
$txt[125] = 'সাবস্ক্রাইব করুন';
$txt[126] = 'এই টপিকে কি আপনি সাবস্ক্রাইব করতে ইচ্ছুক?';
// Use numeric entities in the below string.
$txt[130] = "ধন্যবাদ,\n " . $context['forum_name'] . ' টিম।';
$txt[131] = 'উত্তর আসলে জানাবেন';
$txt[132] = 'টপিকের স্থান পরিবর্তন করুন';
$txt[133] = 'এখানে টপিকের স্থান বানান';
$txt[139] = 'পাতা';
$txt[140] = 'সদস্য যারা আগে অনলাইনে ছিলো ' . $modSettings['lastActive'] . ' মিনিটে';
$txt[144] = 'গোপন বার্তা';
$txt[145] = 'উক্তি দ্বারা উত্তর দিন';
$txt[146] = 'উত্তর';

$txt[151] = 'বার্তা নেই...';
$txt[152] = 'আপনার আছে';
$txt[153] = 'বার্তা';
$txt[154] = 'এই বার্তা বাদ দিন';

$txt[158] = 'সদস্য অনলাইনে';
$txt[159] = 'গোপন বার্তা';
$txt[160] = 'লাফ দিন';
$txt[161] = 'যাও';
$txt[162] = 'আপনি কি এই টপিক বাদ দিতে ইছুক?';
$txt[163] = 'হ্যাঁ';
$txt[164] = 'না';

$txt[166] = 'সার্চের ফলাফল';
$txt[167] = 'ফলাফল শেষ';
$txt[170] = 'কিছুই পাওয়া যায়নি';
$txt[176] = 'এই শব্দে';

$txt[182] = 'খুঁজুন';
$txt[190] = 'সব';

$txt[193] = 'পেছনে যান';
$txt[194] = 'পাসওয়ার্ড মনে করিয়ে দিবে';
$txt[195] = 'টপিক লিখেছেন';
$txt[196] = 'শিরোনাম';
$txt[197] = 'পোস্ট লিখেছেন';
$txt[200] = 'খোঁজ করার যগ্য সব সদস্য।';
$txt[201] = 'স্বাগতম জানান';
$txt[208] = 'প্রশাসকের কেন্দ্র';
$txt[211] = 'সর্বশেষ সম্পাদনা';
$txt[212] = 'আপনি কি এই টপিক থেকে আনসাবস্ক্রাইব করতে ইচ্ছুক?';

$txt[214] = 'সক্রিয় পোস্ট';

$txt[227] = 'থেকে';
$txt[231] = 'লিঙ্গ';
$txt[233] = 'তারিখ নিবন্ধন হয়েছে';

$txt[234] = 'এই ফোরামের শেষ পোস্টগুলো দেখান।';
$txt[235] = 'টপিক সর্বশেষ সম্পাদনা হয়েছে';

$txt[238] = 'পুরুষ';
$txt[239] = 'মহিলা';

$txt[240] = 'এই ব্যবহারকারীর নামে অসিদ্ধ অক্ষর ব্যবহার করা হয়েছে।';

$txt['welcome_guest'] = 'স্বাগতম, <b>' . $txt[28] . '</b>। অনুগ্রহপূর্বক <a href="' . $scripturl . '?action=login">প্রবেশ করুন</a> অথবা <a href="' . $scripturl . '?action=register">নিবন্ধন করুন</a>। ';
$txt['welcome_guest_activate'] = '<br />আপনি কি একাউন্ট সক্রিয় করার <a href="' . $scripturl . '?action=activate">ইমেইল আসেনি?</a>';
$txt['hello_member'] = 'স্বাগতম,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'স্বাগতম,';
$txt[247] = 'স্বাগতম,';
$txt[248] = 'স্বাগতম,';
$txt[249] = 'দয়া করে';
$txt[250] = 'পেছনে';
$txt[251] = 'একটি গন্তব্য পছন্দ করুন';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'পোস্ট করেছেন';

$txt[287] = 'হাসি';
$txt[288] = 'ক্রুদ্ধ';
$txt[289] = 'চিজি';
$txt[290] = 'হাসি';
$txt[291] = 'অসুখী';
$txt[292] = 'চোখ পিটপিট';
$txt[293] = 'দাঁত দেখানো হাসি';
$txt[294] = 'ধাক্কা';
$txt[295] = 'ঠান্ডা';
$txt[296] = 'হা';
$txt[450] = 'চোখ ঘুরানো';
$txt[451] = 'জিব্বা';
$txt[526] = 'লজ্জিত';
$txt[527] = 'মুখ বন্ধ';
$txt[528] = 'সতন্ত্র';
$txt[529] = 'চুমা';
$txt[530] = 'কাঁদা';

$txt[298] = 'সমন্বয়ক';
$txt[299] = 'সমন্বয়কবৃন্দ';

$txt[300] = 'এই বোর্ডের সব টপিক পড়েছি হিসেবে চিহ্নিত করুন';
$txt[301] = 'দেখা';
$txt[302] = 'নতুন';

$txt[303] = 'সব সদস্য দেখান';
$txt[305] = 'দেখা';
$txt[307] = 'ইমেইল';

$txt[308] = 'সদস্য দেখছে';
$txt[309] = 'থেকে';
$txt[310] = 'মোট সদস্য';
$txt[311] = 'থেকে';
$txt[315] = 'পাসওয়ার্ড ভুলে গিয়েছেন?';

$txt[317] = 'তারিখ';
// Use numeric entities in the below string.
$txt[318] = 'থেকে';
$txt[319] = 'শিরোনাম';
$txt[322] = 'নতুন বার্তা জন্য খুঁজুন';
$txt[324] = 'থেকে';

$txt[330] = 'টপিক';
$txt[331] = 'সদস্য';
$txt[332] = 'সদস্য তালিকা';
$txt[333] = 'নতুন পোস্ট';
$txt[334] = 'নতুন পোস্ট নেই';

$txt['sendtopic_send'] = 'পাঠান';

$txt[371] = 'সময় পুষান';
$txt[377] = 'অথবা';

$txt[398] = 'কিছুই পাওয়া যায়নি';

$txt[418] = 'সাবস্ক্রিপশন';

$txt[430] = 'দুঃখিত %s, আপনি এই ফোরাম থেকে নিষিদ্ধ!';

$txt[452] = 'সব বার্তাকে পড়েছি হিসেবে চিহ্নিত করুন';

$txt[454] = 'গরম টপিক (' . $modSettings['hotTopicPosts'] . ' চেয়ে বেশী উত্তর)';
$txt[455] = 'খুবই গরম টপিক (' . $modSettings['hotTopicVeryPosts'] . ' চেয়ে বেশী উত্তর)';
$txt[456] = 'টপিক বন্ধ';
$txt[457] = 'সাধারন টপিক';
$txt['participation_caption'] = 'যেই টপিকে আপনি লিখেছেন';

$txt[462] = 'যান';

$txt[465] = 'ছাপুন';
$txt[467] = 'প্রোফাইল';
$txt[468] = 'টপিক সংক্ষিপ্ত';
$txt[470] = 'নেই';
$txt[471] = 'বার্তা';
$txt[473] = 'এই নাম অন্য আরেক সদস্য ব্যবহার করছে।';

$txt[488] = 'মোট সদস্য';
$txt[489] = 'মোট পোস্ট';
$txt[490] = 'মোট টপিক';

$txt[497] = 'মিনিট অনলাইনে থাকবেন';

$txt[507] = 'প্রিভিউ';
$txt[508] = 'সব সময় প্রবেশ করে থাকবেন';

$txt[511] = 'প্রবেশ করেছে';
// Use numeric entities in the below string.
$txt[512] = 'আইপি';

$txt[513] = 'আইসিকিউ';
$txt[515] = 'ওয়েবসাইট';

$txt[525] = 'লিখেছেন';

$txt[578] = 'ঘন্টা';
$txt[579] = 'দিন';

$txt[581] = ', আমাদের সর্বশেষ নিবন্ধনকৃত সদস্য।';

$txt[582] = 'খুঁজুন';

$txt[603] = 'এইম';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'হাই.+আপনি+কি+আছেন?';
$txt[604] = 'ইয়াহু';

$txt[616] = 'মনে রাখবেন যে এই ফোরামে  \'রক্ষণাবেক্ষণ চলছে\'।';

$txt[641] = 'পড়া হয়েছে';
$txt[642] = 'বার';

$txt[645] = 'ফোরামের পরিসংখ্যান';
$txt[656] = 'সর্বশেষ সদস্য';
$txt[658] = 'মোট কেটাগরী';
$txt[659] = 'সর্বশেষ পোস্ট';

$txt[660] = 'আপনার আছে';
$txt[661] = 'ক্লিক করুন';
$txt[662] = 'এখানে';
$txt[663] = 'দেখতে চাইলে।';

$txt[665] = 'মোট বোর্ড';

$txt[668] = 'পাতা ছাপুন';

$txt[679] = 'এই ইমেইল সঠিক হতে হবে।';

$txt[683] = 'আমি একজন গিক!!';
$txt[685] = $context['forum_name'] . ' - তথ্য কেন্দ্র';

$txt[707] = 'এই টপিক পাঠান';

$txt['sendtopic_title'] = 'এই টপিক পাঠান  &quot;%s&quot; বন্ধুর কাছে।';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'প্রিয় %s,';
$txt['sendtopic_this_topic'] = 'আমি চাই তুমি এটা তোমাকে দেখাতে "%s" এখানে ' . $context['forum_name'].  '। দেখতে চাইলে এই লিঙ্কে ক্লিক করুন';
$txt['sendtopic_thanks'] = 'ধন্যবাদ';
$txt['sendtopic_sender_name'] = 'আপনার নাম';
$txt['sendtopic_sender_email'] = 'আপনার ইমেইল';
$txt['sendtopic_receiver_name'] = 'প্রাপকের নাম';
$txt['sendtopic_receiver_email'] = 'প্রাপকের ইমেইল';
$txt['sendtopic_comment'] = 'মন্তব্য করুন';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'একটি মন্তব্য যোগ করা হয়েছে এই টপিকে';

$txt[721] = 'ইমেইল লুকিয়ে রাখবে?';

$txt[737] = 'সব পছন্দ করুন';

// Use numeric entities in the below string.
$txt[1001] = 'ডাটাবেইসে সমস্যা';
$txt[1002] = 'আবার চেষ্টা করুন। আপনি যদি এখানে আবার ফিরে আসেন, তাহলে প্রশাসককে জানান। ';
$txt[1003] = 'ফাইল';
$txt[1004] = 'লাইন';
// Use numeric entities in the below string.
$txt[1005] = 'এসএমএফ সমস্যা পেয়েছে এবং সেটা ঠিক করছে। যদি আপনি এই সমস্যা আবার পেয়ে থাকেন, তাহলে হোস্টের সাথে যোগাযোগ করুন।';
$txt['database_error_versions'] = '<b>নোট:</b> মনে হচ্ছে আপনার ডাটাবেইসের <em>লাগতে পারে</em> আপগ্রেড। আপনার ফোরামের ফাইলগুলো এটার জন্য ' . $forum_version . ', এবং আপনার ডাটাবেইসের ভার্সন হচ্ছে ' . $modSettings['smfVersion'] . '। ওপরের সমস্যাটা চলে যেতে পারে যদি আপনি upgrade.php-কে ব্যবহার করেন।';
$txt['template_parse_error'] = 'টেম্পলেইটে সমস্যা!';
$txt['template_parse_error_message'] = 'কিছু সমস্যা হয়েছে থিমে। এটা কিছু সময়ের জন্য। তাই এটা ঠিক হয়ে যেতে পারে। যদি আপনি আবার এই সমস্যা দেখেন, তাহলে প্রশাসকের সাথে যোগাযোগ করুন। <br/><br />আপনি চেষ্টা করে দেখতে পারেন <a href="javascript:location.reload();">রিফ্রেস করে</a>।';
$txt['template_parse_error_details'] = 'সমস্যা হয়েছে <tt><b>%1$s</b></tt> টেম্পলেইট অথবা লেঙ্গুয়েজ ফাইল লোড করেতে। এই সিন্টেস আবার দেখুন এবং আবার চেষ্টা করুন - মনে রাখবেন, একটি কোট (<tt>\'</tt>) স্লেসের কারনে মুছে যায় (<tt>\\</tt>)। এই সমস্যা সমাধানের জন্য পিএইচপির সাহায্য দেখুন <a href="' . $boardurl . '%1$s">সরাসরি ফাইলটাতে</a>।<br /><br />আপনি চেষ্টা করে দেখুন <a href="javascript:location.reload();">পাতাটাকে রিফ্রেস করে</a> অথবা <a href="' . $scripturl . '?theme=1">প্রধান থিমটা ব্যবহার করে</a>।';

$txt['smf10'] = '<b>আজ</b> সময় ';
$txt['smf10b'] = '<b>গতকাল</b> সময় ';
$txt['smf20'] = 'নতুন ভোট যোগ করুন';
$txt['smf21'] = 'প্রশ্ন';
$txt['smf23'] = 'ভোট দিন';
$txt['smf24'] = 'মোট ভোট';
$txt['smf25'] = 'সর্টকাট: চাপুন alt+s পোস্ট করতে অথবা alt+p প্রিভিউর জন্য';
$txt['smf29'] = 'ফলাফল দেখান';
$txt['smf30'] = 'ভোট বন্ধ করুন';
$txt['smf30b'] = 'ভোট খুলুন';
$txt['smf39'] = 'ভোট সম্পদনা করুন';
$txt['smf43'] = 'ভোট';
$txt['smf47'] = '১ দিন';
$txt['smf48'] = '১ সপ্তাহ';
$txt['smf49'] = '১ মাস';
$txt['smf50'] = 'সব সময়';
$txt['smf52'] = 'প্রবেশ করুন আপনার ব্যবহাকারীর নাম, পাসওয়ার্ড এবং সময় দ্বারা';
$txt['smf53'] = '১ ঘন্টা';
$txt['smf56'] = 'স্থান পরিবর্তন';
$txt['smf57'] = 'একটি ছোট বর্ণনা লিখুন <br />কেন এই টপিকের স্থান পরিবর্তন করা হচ্ছে।';
$txt['smf60'] = 'আপনার সেই রকম পোস্ট নেই যে আপনি সম্মাননা পরিবর্তন করতে পারবেন। আপনার লাগবে ';
$txt['smf62'] = 'আপনার সম্মাননা পরিবর্তন করতে চাইলে এত সময় অপেক্ষা করতে হবে ';
$txt['smf82'] = 'বোর্ড';
$txt['smf88'] = 'এখানে';
$txt['smf96'] = 'স্টিকি';

$txt['smf138'] = 'বাদ';

$txt['smf199'] = 'আপনার গোপন বার্তা';

$txt['smf211'] = 'কিবা';

$txt['smf223'] = '[আরো তথ্য]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'কোড';
$txt['smf239'] = 'উক্তি করুন';
$txt['smf240'] = 'উক্তি';

$txt['smf251'] = 'টপিক ভাগ';
$txt['smf252'] = 'টপিক যোগ';
$txt['smf254'] = 'নতুন টপিকের শিরোনাম';
$txt['smf255'] = 'এই পোস্টকে ভাগ করুন।';
$txt['smf256'] = 'এই টপিক নিয়ে টপিক ভাগ করুন।';
$txt['smf257'] = 'পছন্দ করুন যেই পোস্ট আপনি ভাগ করবেন।';
$txt['smf258'] = 'নতুন টপিক';
$txt['smf259'] = 'টপিক ভাগ করা হয়েছে।';
$txt['smf260'] = 'প্রথম টপিক';
$txt['smf261'] = 'পছন্দ করুন যেই পোস্ট আপনি ভাগ করতে ইচ্ছুক।';
$txt['smf264'] = 'টপিক যোগ করা হয়েছে।';
$txt['smf265'] = 'নতুন যোগ করা টপিক';
$txt['smf266'] = 'টপিক যোগ করা হবে';
$txt['smf267'] = 'লক্ষ্য বোর্ড';
$txt['smf269'] = 'লক্ষ্য টপিক';
$txt['smf274'] = 'আপনি কি যোগ করতে ইচ্ছুক এটা';
$txt['smf275'] = 'সাথে';
$txt['smf276'] = 'এটা দ্বারা দুটি টপিক এক হয়ে যাবে। পোস্টগুলো সময় অনুযায়ী আসবে। এই জন্য প্রথম লেখা পোস্টগুলো প্রথমে আসবে নতুন টপিকের।';

$txt['smf277'] = 'টপিক স্টিকি বানাবো';
$txt['smf278'] = 'স্টিকি মুছুন';
$txt['smf279'] = 'টপিক বন্ধ';
$txt['smf280'] = 'টপিক খোলা';

$txt['smf298'] = 'খুঁজুন';

$txt['smf299'] = 'বড় সমস্যা:';
$txt['smf300'] = 'আপনার বাদ দিতে হবে ';

$txt['smf301'] = 'পাতা বানানো হয়েছে ';
$txt['smf302'] = ' সেকেন্ড সাথে ';
$txt['smf302b'] = ' কুয়ারিস।';

$txt['smf315'] = 'এটা দ্বারা আপনি অভিযোগ করতে পারবেন যে কোনো পোস্টকে।<br /><i>আপনার ইমেইল দেখতে পারবে সমন্বয়করা এটা করলে।</i>';

$txt['online2'] = 'অনলাইন';
$txt['online3'] = 'অফলাইন';
$txt['online4'] = 'গোপন বার্তা (অনলাইন)';
$txt['online5'] = 'গোপন বার্তা (অফলাইন)';
$txt['online8'] = 'পরিসংখ্যান';

$txt['topbottom4'] = 'উপরে উঠুন';
$txt['topbottom5'] = 'নিচে যান';

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


$txt['calendar3'] = 'জন্মদিন:';
$txt['calendar4'] = 'দিবস:';
$txt['calendar3b'] = 'সামনের জন্মদিন:';
$txt['calendar4b'] = 'সামনের দিবস:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'মাস:';
$txt['calendar10'] = 'বছর:';
$txt['calendar11'] = 'দিন:';
$txt['calendar12'] = 'দিবসের শিরোনাম:';
$txt['calendar13'] = 'পোস্ট করুন এখানে:';
$txt['calendar20'] = 'দিবস সম্পাদনা করুন';
$txt['calendar21'] = 'এই দিবস বাদ দিতে ইচ্ছুক?';
$txt['calendar22'] = 'দিবস বাদ দিন';
$txt['calendar23'] = 'দিবস যোগ করুন';
$txt['calendar24'] = 'দিনপঞ্জি';
$txt['calendar37'] = 'দিনপঞ্জির সাথে যোগাযোগ করুন';
$txt['calendar43'] = 'দিনপঞ্জির সাথে যোগাযোগ';
$txt['calendar47'] = 'সামনের দিবস';
$txt['calendar47b'] = 'আজকের দিবস';
$txt['calendar51'] = 'সপ্তাহ';
$txt['calendar54'] = 'মোট দিন:';
$txt['calendar_how_edit'] = 'এই দিবসগুলোকে কিভাবে সম্পাদনা করবো?';
$txt['calendar_link_event'] = 'দিবস পোস্টের সাথে যোগ করুন:';
$txt['calendar_confirm_delete'] = 'এই দিবস কি আপনি বাদ দিতে ইচ্ছুক?';
$txt['calendar_linked_events'] = 'যোগ করা দিবস';

$txt['moveTopic1'] = 'রিডাইরেকশন করা টপিক যোগ করুন';
$txt['moveTopic2'] = 'টপিকের শিরোনার পরিবর্তন করুন';
$txt['moveTopic3'] = 'নতুন শিরোনাম';
$txt['moveTopic4'] = 'প্রতি পোস্টের শিরোনাম পরিবর্তন করুন';

$txt['theme_template_error'] = 'থিম লোড করতে পারেনি।';
$txt['theme_language_error'] = 'ভাষা লোড করতে পারেনি।';

$txt['parent_boards'] = 'শিশু বোর্ড';

$txt['smtp_no_connect'] = 'SMTP-র সাথে যোগাযোগ করতে পারেনি';
$txt['smtp_port_ssl'] = 'SMTP পোর্ট সেটিংস ভুল; এটা হবে 465 SSL servers জন্য।';
$txt['smtp_bad_response'] = 'মেইল সার্ভার কোড পায়নি';
$txt['smtp_error'] = 'মেইল পাঠাতে গিয়ে সমস্যা হয়েছে। সমস্যা: ';
$txt['mail_send_unable'] = 'এই ইমেইলে মেইল পাঠাতে পারেনি';

$txt['mlist_search'] = 'সদস্য খুঁজুন';
$txt['mlist_search2'] = 'আবার খুঁজুন';
$txt['mlist_search_email'] = 'ইমেইল দ্বারা খুঁজুন';
$txt['mlist_search_messenger'] = 'মেসেঞ্জার দ্বারা খুঁজুন';
$txt['mlist_search_group'] = 'স্থান দ্বারা খুঁজুন';
$txt['mlist_search_name'] = 'নাম দ্বারা খুঁজুন';
$txt['mlist_search_website'] = 'ওয়েবসাইট দ্বারা খুঁজুন';
$txt['mlist_search_results'] = 'খোঁজের ফলাফল';

$txt['attach_downloaded'] = 'ডাউনলোড হয়েছে';
$txt['attach_viewed'] = 'দেখা';
$txt['attach_times'] = 'বার';

$txt['MSN'] = 'এমএসএন';

$txt['settings'] = 'সেটিংস্‌';
$txt['never'] = 'কখনো না';
$txt['more'] = 'আরো';

$txt['hostname'] = 'হোস্ট নাম';
$txt['you_are_post_banned'] = 'আপনি এই ফোরামে পোস্ট অথবা গোপন বার্তা পাঠানোর থেকে নিষিন্ধ।';
$txt['ban_reason'] = 'কারন';

$txt['tables_optimized'] = 'ডাটাবেইস টেবিল ঠিক করা হয়েছে';

$txt['add_poll'] = 'ভোট যোগ করুন';
$txt['poll_options6'] = 'আপনি সর্বচ্চ %s অপশন পছন্দ করতে পারবেন।';
$txt['poll_remove'] = 'ভোট বাদ দিন';
$txt['poll_remove_warn'] = 'আপনি কি এই ভোট বাদ দিতে ইচ্ছুক এই টপিক থেকে?';
$txt['poll_results_expire'] = 'ফলাফল দেখানো হবে যখন ভোট শেষ হবে';
$txt['poll_expires_on'] = 'ভোট বন্ধ হবে';
$txt['poll_expired_on'] = 'ভোট বন্ধ';
$txt['poll_change_vote'] = 'ভোট বাদ দিন';
$txt['poll_return_vote'] = 'ভোটের অপশন';

$txt['quick_mod_remove'] = 'পছন্দটাকে বাদ দিন';
$txt['quick_mod_lock'] = 'পছন্দটাকে বন্ধ করুন';
$txt['quick_mod_sticky'] = 'স্টিকি বানান পছন্দটাকে';
$txt['quick_mod_move'] = 'স্থান পরিবর্তন করুন পছন্দটার';
$txt['quick_mod_merge'] = 'যোগ করুন পছন্দ করাটাকে';
$txt['quick_mod_markread'] = 'পছন্দ করাটাকে পড়েছি হিসেবে চিহ্নিত করুন';
$txt['quick_mod_go'] = 'যাও!';
$txt['quickmod_confirm'] = 'আপনি কি এটা করতে ইচ্ছুক?';

$txt['spell_check'] = 'বানানের ভুল খুঁজুন';

$txt['quick_reply_1'] = 'দ্রুত উত্তর';
$txt['quick_reply_2'] = 'এটির সাথে <i>দ্রুত-উত্তর</i> থেকে আপনি বিবি কোড ও হাসি ব্যবহার করতে পারবেন এবং অনেক সহজে।';
$txt['quick_reply_warning'] = 'সব্ধান: এই টপিক এখন বন্ধ!<br />শুধু প্রশাসক এবং সমন্বয়ক উত্তর দিতে পারবে।';

$txt['notification_enable_board'] = 'আপনি কি এই বোর্ডের নতুন সাবস্ক্রাইব চালু করতে ইচ্ছুক নতুন টপিক থেকে?';
$txt['notification_disable_board'] = 'আপনি কি এই বোর্ডের সবস্ক্রিপশন বন্ধ করতে ইচ্ছুক?';
$txt['notification_enable_topic'] = 'আপনি এই টপিক থেকে ইমেইল পেতে ইচ্ছুক?';
$txt['notification_disable_topic'] = 'আপনি এই টপিক থেকে ইমেইল পেতে অনিচ্ছুক?';

$txt['rtm1'] = 'অভিযোগ করুন';

$txt['unread_topics_visit'] = 'নতুন পড়া হয়নি টপিক';
$txt['unread_topics_visit_none'] = 'নতুন টপিক পাওয়া যায়নি আগের প্রবেশ থেকে। <a href="' . $scripturl . '?action=unread;all">সব পড়া হয়নি টপিক দেখান</a>।';
$txt['unread_topics_all'] = 'পড়া হয়নি টপিক';
$txt['unread_replies'] = 'হালনাগাদ করা টপিক';

$txt['who_title'] = 'কে অনলাইনে';
$txt['who_and'] = ' এবং ';
$txt['who_viewing_topic'] = ' এই বোর্ড দেখছে।';
$txt['who_viewing_board'] = ' এই বোর্ড দেখছে।';
$txt['who_member'] = 'সদস্য';

$txt['powered_by_php'] = 'পিএইচপি দ্বারা তৈরী';
$txt['powered_by_mysql'] = 'মাইএসকিউএল দ্বারা তৈরী';
$txt['valid_html'] = 'এইচটিএমএল ৪.০১!';
$txt['valid_xhtml'] = 'এক্সএইচটিএমএল ১.০!';
$txt['valid_css'] = 'সিএসএস!';

$txt['guest'] = 'অতিথি';
$txt['guests'] = 'অতিথিবৃন্দ';
$txt['user'] = 'সদস্য';
$txt['users'] = 'সদস্যবৃন্দ';
$txt['hidden'] = 'লুকানো';
$txt['buddy'] = 'বন্ধু';
$txt['buddies'] = 'বন্ধুগন';
$txt['most_online_ever'] = 'সবচেয়ে বেশী অনলাইনে ছিলো';
$txt['most_online_today'] = 'সবচেয়ে বেশী সদস্য অনলাইনে';

$txt['merge_select_target_board'] = 'পছন্দ করুন সেই টপিক যেটাতে যোগ করা টপিক থাকবে';
$txt['merge_select_poll'] = 'পছন্দ করুন যেই ভোট এই টপিকের থাকবে';
$txt['merge_topic_list'] = 'পছন্দ করুন যেই টপিকগুলো যোগ করা হবে';
$txt['merge_select_subject'] = 'শিরোনাম পরিবর্তন করুন যোগ করা টপিকের';
$txt['merge_custom_subject'] = 'শিরোনাম পরিবর্তন করুন';
$txt['merge_enforce_subject'] = 'শিরোনাম পরিবর্তন করবে সব বার্তার';
$txt['merge_include_notifications'] = 'সাবস্ক্রাইব থাকবে?';
$txt['merge_check'] = 'যোগ করুন?';
$txt['merge_no_poll'] = 'ভোট নেই';

$txt['response_prefix'] = 'পুনঃ ';
$txt['current_icon'] = 'এখনের ছবি';

$txt['smileys_current'] = 'এখনের হাসি নেই';
$txt['smileys_none'] = 'হাসি নেই';
$txt['smileys_forum_board_default'] = 'ফোরাম/প্রধান বোর্ড';

$txt['search_results'] = 'খুঁজার ফলাফল';
$txt['search_no_results'] = 'ফলাফল নেই';

$txt['totalTimeLogged1'] = 'মোট সময় অনলাইনে: ';
$txt['totalTimeLogged2'] = ' দিন, ';
$txt['totalTimeLogged3'] = ' ঘন্টা এবং ';
$txt['totalTimeLogged4'] = ' মিনিট।';
$txt['totalTimeLogged5'] = 'দি ';
$txt['totalTimeLogged6'] = 'ঘ ';
$txt['totalTimeLogged7'] = 'মি';

$txt['approve_thereis'] = 'এখানে আছে';
$txt['approve_thereare'] = 'এখানে আছে';
$txt['approve_member'] = 'একজন সদস্য';
$txt['approve_members'] = 'সদস্য';
$txt['approve_members_waiting'] = 'সমর্থনের জন্য অপেক্ষা করছে।';

$txt['notifyboard_turnon'] = 'আপনি কি নতুন টপিক এই বোর্ডে আসলে ইমেইল পেতে ইচ্ছুক?';
$txt['notifyboard_turnoff'] = 'আপনি কি নতুন টপিক এই বোর্ডে আসলে ইমেইল পেতে ইচ্ছুক না?';

$txt['activate_code'] = 'আপনার সক্রিয় করার কোড হচ্ছে';

$txt['find_members'] = 'সদস্য খুঁজুন';
$txt['find_username'] = 'নাম, ব্যবহারকারীর নাম, অথবা ইমেইল';
$txt['find_buddies'] = 'শুধু বন্ধু দেখাবে?';
$txt['find_wildcards'] = 'ওয়াইল্ডকার্ড থাকবে: *, ?';
$txt['find_no_results'] = 'ফলাফল নেই';
$txt['find_results'] = 'ফলাফল';
$txt['find_close'] = 'বন্ধ করুন';

$txt['unread_since_visit'] = 'নতুন পোস্ট আগের প্রবেশ থেকে।';
$txt['show_unread_replies'] = 'আপনার পোস্টের নতুন উত্তর দেখান।';

$txt['change_color'] = 'রং পরিবর্তন করুন';

$txt['quickmod_delete_selected'] = 'পছন্দ করাটাকে বাদ দিন';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'আপনি নতুন গোপন বার্তা পেয়েছে।\\nএখন সেগুলোকে দেখুন (নতুন জানালায়)?';

$txt['previous_next_back'] = '&laquo; আগে';
$txt['previous_next_forward'] = 'পরে &raquo;';

$txt['movetopic_auto_board'] = '[বোর্ড]';
$txt['movetopic_auto_topic'] = '[টপিক যুক্ত]';
$txt['movetopic_default'] = 'এই টপিকের স্থান পরিবর্তন করা হয়েছে এখানে ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'বন্ধ অথবা খুলুন হেডার।';

$txt['mark_unread'] = 'পড়িনি হিসেবে চিহ্নিত করুন';

$txt['ssi_not_direct'] = 'সরাসরি SSI.php-কে দেখবেন; আপনি এটা ব্যবহার করে দেখতে পারেন অথবা যোগ করুন ?ssi_function=something।';
$txt['ssi_session_broken'] = 'SSI.php নতুন সেশন লোড করতে পারেনি। এটা সমস্যা করতে পারে প্রস্থান করতে - মনে রাখবেন SSI.php "সবকিছুর" আগে আছে!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'পোস্টের প্রিভিউ';
$txt['preview_fetch'] = 'প্রিভিউ আসছে...';
$txt['preview_new'] = 'নতুন বার্তা';
$txt['error_while_submitting'] = 'পোস্ট করার সময় এই সমস্যাগুলো হয়েছে:';

$txt['split_selected_posts'] = 'পছন্দ করা পোস্ট';
$txt['split_selected_posts_desc'] = 'নিচের পোস্টগুলো নতুন টপিক বানাবে ভাগ করার পরে।';
$txt['split_reset_selection'] = 'পছন্দ করাটা পুনরায় শান দিন';

$txt['modify_cancel'] = 'বাতিল করুন';
$txt['mark_read_short'] = 'পড়েছি হিসেবে চিহ্নিত করুন';

$txt['pm_short'] = 'আমার বার্তা';
$txt['hello_member_ndt'] = 'স্বাগতম';

$txt['ajax_in_progress'] = 'লোডিং...';

?>