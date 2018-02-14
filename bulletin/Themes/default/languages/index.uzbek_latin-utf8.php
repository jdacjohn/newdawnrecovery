<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'uz_UZ.utf8';
$txt['lang_dictionary'] = '';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Yakshanba', 'Dushanba', 'Seshanba', 'Chorshanba', 'Payshanba', 'Juma', 'Shanba');
$txt['days_short'] = array('Ya', 'Du', 'Se', 'Cho', 'Pa', 'Ju', 'Sha');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'Iyun', 'Iyul', 'Avgust', 'Sentabr', 'Oktabr', 'Noyabr', 'Dekabr');
$txt['months_titles'] = array(1 => 'Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'Iyun', 'Iyul', 'Avgust', 'Sentabr', 'Oktabr', 'Noyabr', 'Dekabr');
$txt['months_short'] = array(1 => 'Yan', 'Fev', 'Mar', 'Apr', 'May', 'Iyun', 'Iyul', 'Avg', 'Sen', 'Okt', 'Noy', 'Dek');

$txt['newmessages0'] = 'yangi';
$txt['newmessages1'] = 'yangi';
$txt['newmessages3'] = 'Yangi';
$txt['newmessages4'] = ',';

$txt[2] = 'Admin';

$txt[10] = 'Xotiraga olish';

$txt[17] = 'O`zgartirish';
$txt[18] = $context['forum_name'] . ' - Indeksi';
$txt[19] = 'A`zolar';
$txt[20] = 'Bo`lim nomi';
$txt[21] = 'Postlar';
$txt[22] = 'So`ngi post';

$txt[24] = '(Sarlavhasiz)';
$txt[26] = 'Postlar';
$txt[27] = 'Profilni ko`rish';
$txt[28] = 'Mehmon';
$txt[29] = 'Muallif';
$txt[30] = 'on';
$txt[31] = 'O`chirish';
$txt[33] = 'Yangi mavzu ochish';

$txt[34] = 'Kirish';
// Use numeric entities in the below string.
$txt[35] = 'A`zo';
$txt[36] = 'Parol';

$txt[40] = 'Bunday a`zo mavjud emas.';

$txt[62] = 'Bo`lim nazoratchisi';
$txt[63] = 'Mavzuni o`chirish';
$txt[64] = 'Mavzular';
$txt[66] = 'Xabarni o`zgartirish';
$txt[68] = 'Ismi';
$txt[69] = 'Email';
$txt[70] = 'Sarlavha';
$txt[72] = 'Xabar';

$txt[79] = 'Profil';

$txt[81] = 'Parolni kiriting';
$txt[82] = 'Parolni takror kiriting';
$txt[87] = 'Maqomi';

$txt[92] = 'Profilni ko`rish - ';
$txt[94] = 'Jami';
$txt[95] = 'Postlar';
$txt[96] = 'Sayt';
$txt[97] = 'Ro`yxatdan o`tish';

$txt[101] = 'Xabar Indeksi';
$txt[102] = 'Yangiliklar';
$txt[103] = 'Bosh sahifa';

$txt[104] = 'Yopish/Ochish - Mavzuni';
$txt[105] = 'Chop qilish';
$txt[106] = 'Xatolik sodir bo`ldi!';
$txt[107] = 'at';
$txt[108] = 'Chiqish';
$txt[109] = 'Muallif';
$txt[110] = 'Javoblar';
$txt[111] = 'So`ngi post';
$txt[114] = 'Administratsiyaga kirish';
// Use numeric entities in the below string.
$txt[118] = 'Mavzu';
$txt[119] = 'Yordam';
$txt[121] = 'Xabarni ochirish';
$txt[125] = 'Obuna';
$txt[126] = 'Ushbu mavzuga berilgan javob haqida e-mail xabar olishni istaysizmi?';
// Use numeric entities in the below string.
$txt[130] = "Xush kelibsiz,\n " . $context['forum_name'] . 'ga.';
$txt[131] = 'Javoblar haqida xabarlar olish';
$txt[132] = 'Mavzuni ko`chirish';
$txt[133] = 'Ko`chiriladigan bo`lim';
$txt[139] = 'Sahifalar';
$txt[140] = 'So`ngi ' . $modSettings['lastActive'] . ' daqiqada faol foydalanuvchilar';
$txt[144] = 'Shaxsiy maktub';
$txt[145] = 'Iqtibos olish';
$txt[146] = 'Javob berish';

$txt[151] = 'Yangilari yo`q...';
$txt[152] = 'Sizda';
$txt[153] = 'maktublar';
$txt[154] = 'Ushbu maktubni o`chirish';

$txt[158] = 'Forumdagi a`zolar va mehmonlar';
$txt[159] = 'Shaxsiy maktub';
$txt[160] = 'Saytlar va linklar';
$txt[161] = 'O`tish';
$txt[162] = 'Ushbu mavzuni o`chirmoqchiligingizga ishonchingiz komilmi?';
$txt[163] = 'Ha';
$txt[164] = 'Yo`q';

$txt[166] = 'Qidiruv natijalari';
$txt[167] = 'Natijalar oxiri';
$txt[170] = 'Kechirasiz, hech nima topilmadi';
$txt[176] = 'on';

$txt[182] = 'Izlash';
$txt[190] = 'Barchasi';

$txt[193] = 'Orqaga';
$txt[194] = 'Parol eslatuvchi';
$txt[195] = 'Muallif';
$txt[196] = 'Sarlavha';
$txt[197] = 'Post muallifi';
$txt[200] = 'Searchable list of all registered members.';
$txt[201] = 'Xush kelibsiz';
$txt[208] = 'Administratsiya markazi';
$txt[211] = 'So`ngi o`zgartirish';
$txt[212] = 'Ushbu mavzudagi obunani o`chirishni xohlaysizmi?';

$txt[214] = 'Yangi javoblar';

$txt[227] = 'Turar joyi';
$txt[231] = 'Jinsi';
$txt[233] = 'Ro`yxatdan o`tgan sanasi';

$txt[234] = 'Yangi postlar.';
$txt[235] = 'yangi javob yozilgan mavzu';

$txt[238] = 'Erkak';
$txt[239] = 'Ayol';

$txt[240] = 'A`zo ismi sifatida ruxsat berilmagan belgilar kiritildi.';

$txt['welcome_guest'] = 'Xush kelibsiz, <b>' . $txt[28] . '</b>. Iltimos, <a href="' . $scripturl . '?action=login">kiring</a> yoki <a href="' . $scripturl . '?action=register">ro`yxatdan o`ting</a>.';
$txt['welcome_guest_activate'] = '<br />E-mailingizga ishga tushirish <a href="' . $scripturl . '?action=activate">linki bormadimi?</a>';
$txt['hello_member'] = 'Assalomu alaykum,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Xush kelibsiz,';
$txt[247] = 'Assalomu alaykum,';
$txt[248] = 'Xush kelibsiz,';
$txt[249] = 'Marhamat';
$txt[250] = 'Orqaga';
$txt[251] = 'Yo`nalishni tanlang';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Post muallifi';

$txt[287] = 'Smaylik';
$txt[288] = 'Ga`zab';
$txt[289] = 'Jimlmayish';
$txt[290] = 'Kulgi';
$txt[291] = 'Ma`yus';
$txt[292] = 'Wink';
$txt[293] = 'Qah-qah';
$txt[294] = 'Shok';
$txt[295] = 'Ajoyib';
$txt[296] = 'Hah';
$txt[450] = 'Ko`zi o`ynab';
$txt[451] = 'Tilni chiqarib';
$txt[526] = 'Embarrassed';
$txt[527] = 'Lips sealed';
$txt[528] = 'Ikklangan';
$txt[529] = 'O`pib';
$txt[530] = 'Yig`lab';

$txt[298] = 'Nazoratchi';
$txt[299] = 'Nazoratchilar';

$txt[300] = 'Ushbu bo`limdagi mavzularni o`qilgan deb berlgilash';
$txt[301] = 'Ko`rildi';
$txt[302] = 'Yangi';

$txt[303] = 'Barcha a`zolarni ko`rish';
$txt[305] = 'Ko`rish';
$txt[307] = 'Email';

$txt[308] = 'Ushbu bo`limda';
$txt[309] = 'ning';
$txt[310] = 'Jami foydalanivchilar';
$txt[311] = 'ga';
$txt[315] = 'Parolni unutdingizmi?';

$txt[317] = 'Sana';
// Use numeric entities in the below string.
$txt[318] = 'Yuboruvchi';
$txt[319] = 'Sarlavha';
$txt[322] = 'Yangi xabarlarni tekshirish';
$txt[324] = 'Qabul qiluvchi';

$txt[330] = 'Mavzular';
$txt[331] = 'A`zolar';
$txt[332] = 'A`zolar ro`yxati';
$txt[333] = 'Yangi postlar';
$txt[334] = 'Yangi postlar yo`q';

$txt['sendtopic_send'] = 'Yuborish';

$txt[371] = 'Vaqt chizig`i';
$txt[377] = 'yoki';

$txt[398] = 'Kechirasiz, hech nima topilmadi';

$txt[418] = 'Obuna';

$txt[430] = 'Kechirasiz %s, sizga ushbu forumdan foydalanish ta`qiqlangan!';

$txt[452] = 'Barcha xabarlarni o`qilgan deb belgilash';

$txt[454] = 'Mahshur mavzu (' . $modSettings['hotTopicPosts'] . ' tadan ko`p javoblar berilgan)';
$txt[455] = 'Juda mashhur mavzu (' . $modSettings['hotTopicVeryPosts'] . ' tadan ko`p javoblar berilgan)';
$txt[456] = 'Yopiq mavzu';
$txt[457] = 'Oddiy mavzu';
$txt['participation_caption'] = 'Siz javob bergan mavzu';

$txt[462] = 'BAJAR!';

$txt[465] = 'Chop qilish';
$txt[467] = 'Profil';
$txt[468] = 'Mavzu ma`lumoti';
$txt[470] = 'N/A';
$txt[471] = 'message';
$txt[473] = 'Ushbu ism allaqachon boshqa a`zo tomnidan foydalanilmoqda.';

$txt[488] = 'Jami a`zolar';
$txt[489] = 'Jami postlar';
$txt[490] = 'Jami mavzular';

$txt[497] = 'Forumda bo`lish vaqti (daqiqalarda)';

$txt[507] = 'Oldindan ko`rish';
$txt[508] = 'Har doim';

$txt[511] = 'Forumda';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'muallifi';

$txt[578] = 'soat';
$txt[579] = 'kun';

$txt[581] = ', so`ngi a`zo.';

$txt[582] = 'Izlash';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Assalomu alaykum.+Siz+shu+yerdamisiz?';
$txt[604] = 'YIM';

$txt[616] = 'Remember, this forum is in \'Maintenance Mode\'.';

$txt[641] = 'Read';
$txt[642] = 'marta o`qildi';

$txt[645] = 'Forum Statistikasi';
$txt[656] = 'So`ngi a`zo';
$txt[658] = 'Jami bo`limlar';
$txt[659] = 'So`ngi post';

$txt[660] = 'Sizda';
$txt[661] = 'Ko`rish uchun';
$txt[662] = 'bu yerga';
$txt[663] = 'bosing.';

$txt[665] = 'Jami bo`limlar';

$txt[668] = 'Chop qilish';

$txt[679] = 'E-mail ayni paytda faoliyatda bo`lishi kerak.';

$txt[683] = 'I am a geek!!';
$txt[685] = $context['forum_name'] . ' - Ma`lumot markazi';

$txt[707] = 'Mavzu linkini yuborish';

$txt['sendtopic_title'] = '&quot;%s&quot; mavzusi linkini yaqiningizga yuboring.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Hurmatli %s,';
$txt['sendtopic_this_topic'] = '' . $context['forum_name'] . '.  forumidagi "%s" mavzusini ko`rishingizni xohlardim. Ko`rish uchun quyidagi linkga bosing:';
$txt['sendtopic_thanks'] = 'Tashakkur';
$txt['sendtopic_sender_name'] = 'Ismingiz';
$txt['sendtopic_sender_email'] = 'E-mail manzilingiz';
$txt['sendtopic_receiver_name'] = 'Qabul qiluvchi ismi';
$txt['sendtopic_receiver_email'] = 'Qabul qiluvchi e-mail manzili';
$txt['sendtopic_comment'] = 'Mavzu';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Qo`shimcha sifatida xabar';

$txt[721] = 'E-mail manzilingizni forumdagilar ko`ra olmasinmi?';

$txt[737] = 'Barchasini belgilash';

// Use numeric entities in the below string.
$txt[1001] = 'Ma`lumotlar bazasida xatolik sodir bo`ldi.';
$txt[1002] = 'Iltimos yana urinib ko`ring.  Agar ushbu xatolik birinchi marta bo`lmayotgan bo`lsa, iltimos bu haqda forum boshqaruvchisiga xabar qiling.';
$txt[1003] = 'Fayl';
$txt[1004] = 'Qator';
// Use numeric entities in the below string.
$txt[1005] = 'SMF has detected and automatically tried to repair an error in your database.  If you continue to have problems, or continue to receive these emails, please contact your host.';
$txt['database_error_versions'] = '<b>Note:</b> It appears that your database <em>may</em> require an upgrade. Your forum\'s files are currently at version ' . $forum_version . ', while your database is at version ' . $modSettings['smfVersion'] . '. The above error might possibly go away if you execute the latest version of upgrade.php.';
$txt['template_parse_error'] = 'Template Parse Error!';
$txt['template_parse_error_message'] = 'It seems something has gone sour on the forum with the template system.  This problem should only be temporary, so please come back later and try again.  If you continue to see this message, please contact the administrator.<br /><br />You can also try <a href="javascript:location.reload();">refreshing this page</a>.';
$txt['template_parse_error_details'] = 'There was a problem loading the <tt><b>%1$s</b></tt> template or language file.  Please check the syntax and try again - remember, single quotes (<tt>\'</tt>) often have to be escaped with a slash (<tt>\\</tt>).  To see more specific error information from PHP, try <a href="' . $boardurl . '%1$s">accessing the file directly</a>.<br /><br />You may want to try to <a href="javascript:location.reload();">refresh this page</a> or <a href="' . $scripturl . '?theme=1">use the default theme</a>.';

$txt['smf10'] = '<b>Bugun</b> ';
$txt['smf10b'] = '<b>Kecha</b> ';
$txt['smf20'] = 'Yangi so`rovnoma ochish';
$txt['smf21'] = 'Savol';
$txt['smf23'] = 'Ovoz berish';
$txt['smf24'] = 'Jami ovozlar';
$txt['smf25'] = 'Ma`lumot: Ovoz berish/chop qilish uchun <b>alt+s</b>ni bosing, oldindan ko`rish uchun <b>alt+p</b>ni bosing';
$txt['smf29'] = 'Natijalarni ko`rish';
$txt['smf30'] = 'Ovoz berishni to`xtatish';
$txt['smf30b'] = 'Ovoz berishni ishga tushirish';
$txt['smf39'] = 'So`rovnomani o`zgartirish';
$txt['smf43'] = 'So`rovnoma';
$txt['smf47'] = '1 kun';
$txt['smf48'] = '1 hafta';
$txt['smf49'] = '1 oy';
$txt['smf50'] = 'har doim';
$txt['smf52'] = 'Forumga a`zo sifatida kiring';
$txt['smf53'] = '1 soat';
$txt['smf56'] = 'KO`CHIRILDI';
$txt['smf57'] = 'Iltimos, <br />ushbu mavzuning ko`chirilayotgani sabaini bildiring.';
$txt['smf60'] = 'Kechirasiz, karmani o`zgartirish uchun sizda yetarlicha postlar yo`q. Ushbu amaliyot uchun kamida talab etilgan postlar soni ';
$txt['smf62'] = 'Kechirasiz, siz kutmasdan karma amaliyotini takrorlay olmaysiz ';
$txt['smf82'] = 'Bo`lim';
$txt['smf88'] = 'in';
$txt['smf96'] = 'Qistirilgan mavzu';

$txt['smf138'] = 'O`chirish';

$txt['smf199'] = 'Shaxsiy maktubingiz';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Batafsil statistika]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kod';
$txt['smf239'] = 'Iqtibos';
$txt['smf240'] = 'Iqtibos';

$txt['smf251'] = 'Mavzuni bo`lish';
$txt['smf252'] = 'Mavzularni biriktirish';
$txt['smf254'] = 'Yangi mavzu sarlavhasi';
$txt['smf255'] = 'Faqatgina ushbu postni bo`lish.';
$txt['smf256'] = 'Mavzuni ushbu postdan va keyingizlaridan bo`lish.';
$txt['smf257'] = 'Bo`lish uchun postni tanlang.';
$txt['smf258'] = 'Yangi mavzu';
$txt['smf259'] = 'Mavzu ikkiga bo`lindi.';
$txt['smf260'] = 'Asl mavzu';
$txt['smf261'] = 'Iltimos, bo`linishi kerak bo`lgan postni tanlng.';
$txt['smf264'] = 'Mavzular biriktirildi.';
$txt['smf265'] = 'Yangi biriktirilgan mavzu';
$txt['smf266'] = 'Biriktirilishi kerak bo`lgan mavzu';
$txt['smf267'] = 'Bo`lim';
$txt['smf269'] = 'Mavzu';
$txt['smf274'] = 'Biriktirmoqchiligingizga ishonchingiz komilmi';
$txt['smf275'] = 'bilan';
$txt['smf276'] = 'Ushbu amaliyot mavzulardagi postlarni bitta mavzuga biriktiradi. Postlar chop qilingan sanasiga ko`ra tartiblanadi. Eng eski post eng avvalida bo`ladi.';

$txt['smf277'] = 'Mavzuni qistirish';
$txt['smf278'] = 'Mavzuni qistirishni bekor qilish';
$txt['smf279'] = 'Mavzuni yopish';
$txt['smf280'] = 'Mavzuni ochish';

$txt['smf298'] = 'Mukammal qidiruv';

$txt['smf299'] = 'UMUMIY HIMOYA XAVF OSTIDA:';
$txt['smf300'] = 'Siz o`chirmagansiz: ';

$txt['smf301'] = 'Page created in ';
$txt['smf302'] = ' seconds with ';
$txt['smf302b'] = ' queries.';

$txt['smf315'] = 'Taqiqlangan yoki xato postlar haqida nazoratchilar va boshqaruvchilarga xabar qilish amaliyoti.<br /><i>Iltimos, shuni yodda tutingki, ushbu amaliyotdan foydalansangiz e-mail manzilingiz ma`lum bo`ladi.</i>';

$txt['online2'] = 'Onlayn';
$txt['online3'] = 'Oflayn';
$txt['online4'] = 'Shaxsiy maktub (Ayni paytda forumda)';
$txt['online5'] = 'Shaxsiy maktub (Ayni paytda forumda emas)';
$txt['online8'] = 'Ayni paytdagi holati';

$txt['topbottom4'] = 'Yuqoriga';
$txt['topbottom5'] = 'Pastga';

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


$txt['calendar3'] = 'Tavallud sanalari:';
$txt['calendar4'] = 'Voqea-hodisalar:';
$txt['calendar3b'] = 'Kelayotgan tavallud sanali:';
$txt['calendar4b'] = 'Kelayotdan voqea-hodisalar:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Oy:';
$txt['calendar10'] = 'Yil:';
$txt['calendar11'] = 'Kun:';
$txt['calendar12'] = 'Yangilik:';
$txt['calendar13'] = 'Post:';
$txt['calendar20'] = 'Yangilikni o`zgartirish';
$txt['calendar21'] = 'Ushbu yangilik o`chirilsinmi?';
$txt['calendar22'] = 'Yangilikni o`chirish';
$txt['calendar23'] = 'Yangilikni chop qilish';
$txt['calendar24'] = 'Taqvim';
$txt['calendar37'] = 'Taqvimga link';
$txt['calendar43'] = 'Yangilikka link';
$txt['calendar47'] = 'Kelayotgan taqvim';
$txt['calendar47b'] = 'Bugunning taqvimi';
$txt['calendar51'] = 'Hafta';
$txt['calendar54'] = 'Kunlar:';
$txt['calendar_how_edit'] = 'ushbu yangilikni qanday o`zgartirasiz?';
$txt['calendar_link_event'] = 'Yangilikni postga ulash:';
$txt['calendar_confirm_delete'] = 'Ushbu yangilikni o`chimoqchiligingizga ishonchingiz komilmi?';
$txt['calendar_linked_events'] = 'Linkli yangiliklar';

$txt['moveTopic1'] = 'Post a redirection topic';
$txt['moveTopic2'] = 'Mavzu sarlavhasini o`zgaritirish';
$txt['moveTopic3'] = 'Yangi sarlavha';
$txt['moveTopic4'] = 'Har bir post sarlavhasini o`zgaritish';

$txt['theme_template_error'] = '\'%s\' templeytini yuklashning imkoni bo`lmadi.';
$txt['theme_language_error'] = '\'%s\' tilini yuklashni imkoni bo`lmadi.';

$txt['parent_boards'] = 'Ichki bo`limlar';

$txt['smtp_no_connect'] = 'SMTP hostga ulanishning imkoni bo`lmadi';
$txt['smtp_port_ssl'] = 'SMTP port xato sozlangan; u SSL server 465 bo`lishi kerak.';
$txt['smtp_bad_response'] = 'Pochta serveri bilan bog`liq xatolik yuz berdi.';
$txt['smtp_error'] = 'Pochta yuborishda xatolik yuz berdi. Xatolik: ';
$txt['mail_send_unable'] = 'E-mail maktubni yuborishning imkoni bo`lmadi \'%s\'';

$txt['mlist_search'] = 'A`zolarni izlash';
$txt['mlist_search2'] = 'Yana izlash';
$txt['mlist_search_email'] = 'E-mail manzil bo`yicha izlash';
$txt['mlist_search_messenger'] = 'Chat agenti taxallusi bo`yicha izlash';
$txt['mlist_search_group'] = 'Maqomi bo`yicha izlash';
$txt['mlist_search_name'] = 'Ismi bo`yicha izlash';
$txt['mlist_search_website'] = 'Sayti bo`yicha izlash';
$txt['mlist_search_results'] = 'Qidiruv natijalari';

$txt['attach_downloaded'] = 'marta yuklandi';
$txt['attach_viewed'] = 'marta ko`rildi';
$txt['attach_times'] = 'times';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Sozlash';
$txt['never'] = 'Hech qachon';
$txt['more'] = 'yana';

$txt['hostname'] = 'Host';
$txt['you_are_post_banned'] = 'Kechirasiz %s, sizga ushbu forumda post chop qilish va shaxsiy maktub yo`llash ta`qiqlangan.';
$txt['ban_reason'] = 'Sababi';

$txt['tables_optimized'] = 'Database tables optimized';

$txt['add_poll'] = 'So`rovnoma ochish';
$txt['poll_options6'] = 'Siz faqatgina %s ta javob tanlashingiz mumkin.';
$txt['poll_remove'] = 'So`rovnomani o`chirish';
$txt['poll_remove_warn'] = 'Ushbu so`rovnomani mavzudan olib tashlamoqchiligingizga ishonchingiz komilmi?';
$txt['poll_results_expire'] = 'Natijalar ovoz berish to`xtatilgach ko`rinadi';
$txt['poll_expires_on'] = 'Ovoz berish yopiladi';
$txt['poll_expired_on'] = 'Ovoz berish yopilgan';
$txt['poll_change_vote'] = 'Ovozni o`chirish';
$txt['poll_return_vote'] = 'Variantlar';

$txt['quick_mod_remove'] = 'Belgilanganini o`chirish';
$txt['quick_mod_lock'] = 'Belgilanganini yopish';
$txt['quick_mod_sticky'] = 'Belgilanganini qistirish';
$txt['quick_mod_move'] = 'Belgilanganini ko`chirish - ';
$txt['quick_mod_merge'] = 'Belgilanganlariini biriktirish';
$txt['quick_mod_markread'] = 'Belgilanganini o`qilgan deb belgilash';
$txt['quick_mod_go'] = 'Bajar!';
$txt['quickmod_confirm'] = 'Ushbu amaliyotni bajarmoqchiligingizga ishonchingiz komilmi?';

$txt['spell_check'] = 'Spell Check';

$txt['quick_reply_1'] = 'Tezkor javob';
$txt['quick_reply_2'] = 'With a <i>Quick-Reply</i> you can use bulletin board code and smileys as you would in a normal post, but much more conveniently.';
$txt['quick_reply_warning'] = 'Ogoh bo`ling: ushbu mavzu yopiq!<br />Faqatgina boshqaruvchi va nazoratchilargina javob yoza oladilar.';

$txt['notification_enable_board'] = 'Ushbu bo`limdagi yangi mavzularga obunani ishga tushirmoqchiligingizga ishonchingiz komilmi?';
$txt['notification_disable_board'] = 'Ushbu bo`limdagi yangi mavzularga obunani o`chirmoqchiligingizga ishonchingiz komilmi?';
$txt['notification_enable_topic'] = 'Ushbu mavzudagi yangi javoblarga obunani ishga tushirmoqchiligingizga ishonchingiz komilmi?';
$txt['notification_disable_topic'] = 'Ushbu mavzudagi yangi javoblarga obunani o`chirmoqchiligingizga ishonchingiz komilmi?';

$txt['rtm1'] = 'Nazoratchiga xabar qilish';

$txt['unread_topics_visit'] = 'Yangi mavzular';
$txt['unread_topics_visit_none'] = 'O`qilmagan mavzular yo`q.  <a href="' . $scripturl . '?action=unread;all">Barcha mavzularni ko`rish uchun bo yuerga bosing</a>.';
$txt['unread_topics_all'] = 'O`qilmagan mavzular';
$txt['unread_replies'] = 'Yangi javob berilgan mavzular';

$txt['who_title'] = 'Forumimizda onlayn';
$txt['who_and'] = ' va ';
$txt['who_viewing_topic'] = ' mavzuni ko`rmoqdalar.';
$txt['who_viewing_board'] = ' bo`limni ko`rmoqdalar.';
$txt['who_member'] = 'A`zo';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'Valid CSS!';

$txt['guest'] = 'ta mehmon';
$txt['guests'] = 'ta mehmonlar';
$txt['user'] = 'ta a`zo';
$txt['users'] = 'ta a`zolar';
$txt['hidden'] = 'yashirin';
$txt['buddy'] = 'ta do`st';
$txt['buddies'] = 'ta do`stlar';
$txt['most_online_ever'] = 'Umuman eng ko`p onlayn foydalanuvchilar soni';
$txt['most_online_today'] = 'Bugun eng ko`p onlayn foydalanuvchilar soni';

$txt['merge_select_target_board'] = 'Biriktirilgan mavzu uchun bo`lim tanlang';
$txt['merge_select_poll'] = 'Biriktirilgan mavzu uchun so`rovnoma tanlang';
$txt['merge_topic_list'] = 'Biriktiriladigan mavzularni tanlang';
$txt['merge_select_subject'] = 'Biriktirilgan mavzu uchun sarlavha tanlang';
$txt['merge_custom_subject'] = 'Tanlangan sarlavha';
$txt['merge_enforce_subject'] = 'Barcha postlardagi sarlavhalarni o`zgaritish';
$txt['merge_include_notifications'] = 'Obunalarni hammi?';
$txt['merge_check'] = 'Biriksinmi?';
$txt['merge_no_poll'] = 'So`rovnoma yo`q';

$txt['response_prefix'] = 'Javob: ';
$txt['current_icon'] = 'Joriy belgi';

$txt['smileys_current'] = 'Smayliklar haqidagi joriy buyruq';
$txt['smileys_none'] = 'Smayliklarsiz';
$txt['smileys_forum_board_default'] = 'Forum/Bo`lim uchun joriy';

$txt['search_results'] = 'Qidiruv natijalari';
$txt['search_no_results'] = 'Hech nima topilmadi';

$txt['totalTimeLogged1'] = 'Forumda o`tkazgan jami vaqti: ';
$txt['totalTimeLogged2'] = ' kun, ';
$txt['totalTimeLogged3'] = ' soat va ';
$txt['totalTimeLogged4'] = ' daqiqa.';
$txt['totalTimeLogged5'] = 'k ';
$txt['totalTimeLogged6'] = 's ';
$txt['totalTimeLogged7'] = 'o';

$txt['approve_thereis'] = 'Bu yerda';
$txt['approve_thereare'] = 'Bu yerda';
$txt['approve_member'] = 'bitta a`zo';
$txt['approve_members'] = 'a`zolar';
$txt['approve_members_waiting'] = 'tasdiq kutayotgan.';

$txt['notifyboard_turnon'] = 'Ushbu bo`limdagi yangi mavzular haqida e-mail xabarlar olishni istaysizmi?';
$txt['notifyboard_turnoff'] = 'Ushbu bo`limdagi yangi mavzular haqida e-mail xabarlar olishni xohlamasligingizga ishonchingiz komilmi?';

$txt['activate_code'] = 'Sizning ishga tushirish kodingiz';

$txt['find_members'] = 'A`zolarni topish';
$txt['find_username'] = 'Ismi, a`zolik ismi, yoki email manzili';
$txt['find_buddies'] = 'Faqat do`stlar ko`rinsinmi?';
$txt['find_wildcards'] = 'Allowed Wildcards: *, ?';
$txt['find_no_results'] = 'Hech nima topilmadi';
$txt['find_results'] = 'Natijalar';
$txt['find_close'] = 'Yopish';

$txt['unread_since_visit'] = 'Yangi postlar.';
$txt['show_unread_replies'] = 'Yangi javoblar.';

$txt['change_color'] = 'Rang tanlash';

$txt['quickmod_delete_selected'] = 'Belgilanganlarini o`chirish';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Sizga yangi maktub yuborildi.\\nUlarni yangi oynada ko`rishni istaysizmi?';

$txt['previous_next_back'] = '&laquo; oldingi';
$txt['previous_next_forward'] = 'keyingi &raquo;';

$txt['movetopic_auto_board'] = '[BO`LIM]';
$txt['movetopic_auto_topic'] = '[MAVZUGA LINK]';
$txt['movetopic_default'] = 'Ushbu mavzu' . $txt['movetopic_auto_board'] . ".\n\n bo`limiga ko`chirildi" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Sarlavhani uzaytirish yoki qisqartirish.';

$txt['mark_unread'] = 'O`qilmagan deb belgilash';

$txt['ssi_not_direct'] = 'Iltimos, SSI.php faylini URLda to`g`ridan to`g`ri ochmang; sahifalarning yo`lini ko`rish: (%s) yoki ?ssi_function=biror narsa kiritish.';
$txt['ssi_session_broken'] = 'SSI.php sessiyani yuklay olmadi!  Bu chiqish va boshqa amaliyotlarda muammolarni yuzaga keltirishi mumkin.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Oldindan ko`rish';
$txt['preview_fetch'] = 'Fetching preview...';
$txt['preview_new'] = 'Yangi maktub';
$txt['error_while_submitting'] = 'Postni chop qilish jarayonida quyidagi xatolik(lar) sodir bo`ldi:';

$txt['split_selected_posts'] = 'Belgilgilangan postlar';
$txt['split_selected_posts_desc'] = 'Quyidagi postlar bo`lingandan keyin yangi mavzu hosil qiladi.';
$txt['split_reset_selection'] = 'tanlashni asl holiga qaytarish';

$txt['modify_cancel'] = 'Bekor qilish';
$txt['mark_read_short'] = 'O`qilgan deb belgilash';

$txt['pm_short'] = 'Maktublar';
$txt['hello_member_ndt'] = 'Assalomu alaykum, ';

$txt['ajax_in_progress'] = 'Yuklanmoqda...';

?>