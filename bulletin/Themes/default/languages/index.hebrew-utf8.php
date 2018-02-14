<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'he_IL.utf8';
$txt['lang_dictionary'] = 'he';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = true;

$txt['days'] = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$txt['days_short'] = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$txt['months_titles'] = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

$txt['newmessages0'] = 'חדש';
$txt['newmessages1'] = 'חדשות';
$txt['newmessages3'] = 'חדשות';
$txt['newmessages4'] = ',';

$txt[2] = 'ניהול';

$txt[10] = 'שמירה';

$txt[17] = 'עריכה';
$txt[18] = $context['forum_name'] . ' - עמוד ראשי';
$txt[19] = 'משתמשים';
$txt[20] = 'שם הפורום';
$txt[21] = 'הודעות';
$txt[22] = 'הודעה אחרונה';

$txt[24] = '(ללא נושא)';
$txt[26] = 'הודעות';
$txt[27] = 'ראה פרופיל';
$txt[28] = 'אורח';
$txt[29] = 'כתב';
$txt[30] = 'ב- ';
$txt[31] = 'הסרה';
$txt[33] = 'נושא חדש';

$txt[34] = 'התחברות';
// Use numeric entities in the below string.
$txt[35] = 'שם משתמש';
$txt[36] = 'סיסמא';

$txt[40] = 'המשתמש הזה אינו קיים.';

$txt[62] = 'אחראי פורום';
$txt[63] = 'הסרת נושא';
$txt[64] = 'נושאים';
$txt[66] = 'עריכת הודעה';
$txt[68] = 'שם';
$txt[69] = 'דוא"ל';
$txt[70] = 'נושא';
$txt[72] = 'הודעה';

$txt[79] = 'עריכת פרופיל';

$txt[81] = 'בחירת סיסמא';
$txt[82] = 'אימות סיסמא';
$txt[87] = 'קבוצה';

$txt[92] = 'ראיית פרופיל של';
$txt[94] = 'סך הכל';
$txt[95] = 'הודעות';
$txt[96] = 'אתר';
$txt[97] = 'הרשמה';

$txt[101] = 'הודעה';
$txt[102] = 'חדשות';
$txt[103] = 'בית';

$txt[104] = 'נעילת/פתיחת נושא';
$txt[105] = 'שליחה';
$txt[106] = 'שגיאה התרחשה!';
$txt[107] = 'ב- ';
$txt[108] = 'התנתקות';
$txt[109] = ' נשלח על ידי: ';
$txt[110] = 'תגובות';
$txt[111] = 'תגובה אחרונה';
$txt[114] = 'התחברות לניהול';
// Use numeric entities in the below string.
$txt[118] = 'נושא';
$txt[119] = 'עזרה';
$txt[121] = 'הסר הודעה';
$txt[125] = 'להודיע';
$txt[126] = 'האם ברצונך הודעה על תגובה בדואר אלקטרוני שלך?';
// Use numeric entities in the below string.
$txt[130] = "בברכה,\n " . $context['forum_name'] . ' .';
$txt[131] = 'להודיע על תגובות';
$txt[132] = 'העבר הודעה';
$txt[133] = 'העבר ל';
$txt[139] = 'עמודים';
$txt[140] = 'משתמשים פעילים ב- ' . $modSettings['lastActive'] . ' דקות האחרונות';
$txt[144] = 'הודעה פרטית';
$txt[145] = 'ציטוט';
$txt[146] = 'הגיב';

$txt[151] = 'אין הודעות...';
$txt[152] = 'יש לך';
$txt[153] = 'הודעות';
$txt[154] = 'הסר הודעה זו';

$txt[158] = 'משתמשים מחוברים';
$txt[159] = 'הודעה פרטית';
$txt[160] = 'קפוץ ל';
$txt[161] = 'סע';
$txt[162] = 'אתה בטוח שבירצונך להסיר הודעה זו?';
$txt[163] = 'כן';
$txt[164] = 'לא';

$txt[166] = 'תוצאות חיפוש';
$txt[167] = 'תוצאות';
$txt[170] = 'לא נמצאו תוצאות';
$txt[176] = 'על';

$txt[182] = 'חיפוש';
$txt[190] = 'הכל';

$txt[193] = 'אחורה';
$txt[194] = 'תזכורת';
$txt[195] = 'נושא נשלח על ידי';
$txt[196] = 'כותרת';
$txt[197] = 'תגובה על ידי';
$txt[200] = '';
$txt[201] = 'ברוך הבא';
$txt[208] = 'מרכז ניהול';
$txt[211] = 'עריכה אחרונה';
$txt[212] = 'האם אתה רוצה לבטל את המעקב אחרי דיון זה?';

$txt[214] = 'הודעות חדשות';

$txt[227] = 'מיקום';
$txt[231] = 'מין';
$txt[233] = 'תאריך הרשמה';

$txt[234] = 'ראיית ה- 10 ההודעות האחרונות בפורום.';
$txt[235] = 'הוא הדיון הכי אחרון';

$txt[238] = 'בן';
$txt[239] = 'בת';

$txt[240] = 'תווים לא חוקיים לשימוש בשם משתמש.';

$txt['welcome_guest'] = 'ברוך הבא, <b>' . $txt[28] . '</b>. בבקשה <a href="' . $scripturl . '?action=login">התחבר</a> או <a href="' . $scripturl . '?action=register">הירשם</a>.';
$txt['welcome_guest_activate'] = '<br />האם פיספסת את <a href="' . $scripturl . '?action=activate">הודעת ההפעלה</a> שלך?';
$txt['hello_member'] = 'שלום,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'ברוך הבא,';
$txt[247] = 'שלום,';
$txt[248] = 'ברוך הבא,';
$txt[249] = 'בבקשה';
$txt[250] = 'חזרה';
$txt[251] = 'בבקשה בחר יעד';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'פורסם על ידי';

$txt[287] = 'סמיילי';
$txt[288] = 'כועס';
$txt[289] = 'מזופט';
$txt[290] = 'חיוך';
$txt[291] = 'עצוב';
$txt[292] = 'קריצה';
$txt[293] = 'גיחוך';
$txt[294] = 'מזועזע';
$txt[295] = 'מגניב';
$txt[296] = 'מה?!';
$txt[450] = 'גילגול עיניים';
$txt[451] = 'מוציא לשון';
$txt[526] = 'נבוך';
$txt[527] = 'חוצפן';
$txt[528] = 'מהסס';
$txt[529] = 'נשיקה';
$txt[530] = 'בוכה';

$txt[298] = 'אחראי';
$txt[299] = 'אחראים';

$txt[300] = 'סמן נושאים כנושאים שנקראו בפורום';
$txt[301] = 'צפיות';
$txt[302] = 'חדש';

$txt[303] = 'ראיית כל המשתמשים';
$txt[305] = 'ראייה';
$txt[307] = 'דוא"ל';

$txt[308] = 'צופה משתמשים';
$txt[309] = 'מאת';
$txt[310] = 'סך הכל משתמשים';
$txt[311] = 'אל';
$txt[315] = 'איבדת את הסיסמא שלך?';

$txt[317] = 'תאריך';
// Use numeric entities in the below string.
$txt[318] = 'מאת';
$txt[319] = 'נושא';
$txt[322] = 'בדוק אם יש הודעות חדשות';
$txt[324] = 'ל';

$txt[330] = 'דיונים';
$txt[331] = 'משתמשים';
$txt[332] = 'רשימת משתמשים';
$txt[333] = 'קיימות הודעות חדשות';
$txt[334] = 'לא קיימות הודעות חדשות';

$txt['sendtopic_send'] = 'שליחה';

$txt[371] = 'אזור זמן';
$txt[377] = 'או';

$txt[398] = 'מצטערים, לא נמצאו תוצאות חיפוש';

$txt[418] = 'מעקב';

$txt[430] = 'מצטערים %s, הושעת משימוש בפורום הזה!';

$txt[452] = 'סימון כל ההודעות כנקראו';

$txt[454] = 'דיון חם (יותר מ- ' . $modSettings['hotTopicPosts'] . ' הודעות)';
$txt[455] = 'דיון מאוד חם (יותר מ- ' . $modSettings['hotTopicVeryPosts'] . ' הודעות)';
$txt[456] = 'דיון נעול';
$txt[457] = 'דיון רגיל';
$txt['participation_caption'] = 'דיון שהגבת בו ב- ';

$txt[462] = 'סע';

$txt[465] = 'הדפסה';
$txt[467] = 'פרופיל';
$txt[468] = 'תקציר דיון';
$txt[470] = 'לא זמין';
$txt[471] = 'הודעה';
$txt[473] = 'שם משתמש זה כבר בשימוש ע"י משתמש אחר.';

$txt[488] = 'סך הכל משתמשים';
$txt[489] = 'סך הכל הודעות';
$txt[490] = 'סך הכל דיונים';

$txt[497] = 'זמן חיבור';

$txt[507] = 'תצוגה מקדימה';
$txt[508] = 'תמיד הישאר מחובר';

$txt[511] = 'מחובר';
// Use numeric entities in the below string.
$txt[512] = 'כתובת IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'על ידי';

$txt[578] = 'שעות';
$txt[579] = 'ימים';

$txt[581] = ', המשתמש החדש שלנו.';

$txt[582] = 'חיפוש';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'הי.+אתה+שם?';
$txt[604] = 'YIM';

$txt[616] = 'זכור, פורום זה \'במצב תחזוקה\'.';

$txt[641] = 'נקרא';
$txt[642] = 'פעמים';

$txt[645] = 'סטטיסטיקות פורום';
$txt[656] = 'המשתמש הכי חדש בקהילה';
$txt[658] = 'סך הכל קטגוריות';
$txt[659] = 'הודעה אחרונה';

$txt[660] = 'קבלת';
$txt[661] = 'לחץ';
$txt[662] = 'כאן';
$txt[663] = 'לראות אותה.';

$txt[665] = 'סך הכל פורמים';

$txt[668] = 'הדפסת עמוד';

$txt[679] = 'חייבת להיות כתובת דוא"ל תקינה';

$txt[683] = 'אני חנון!!';
$txt[685] = $context['forum_name'] . ' - מרכז סטטיסטיקות';

$txt[707] = 'שלח נושא זה';

$txt['sendtopic_title'] = 'שלח את הנושא &quot;%s&quot; לחבר.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'היקר %s,';
$txt['sendtopic_this_topic'] = 'אני רוצה שתבדוק "%s" on ' . $context['forum_name'] . '. לצפיה, תלחץ פה';
$txt['sendtopic_thanks'] = 'תודה';
$txt['sendtopic_sender_name'] = 'שמך';
$txt['sendtopic_sender_email'] = 'דואר אלקטרוני';
$txt['sendtopic_receiver_name'] = 'שם הנמען';
$txt['sendtopic_receiver_email'] = 'דואר אלקטרוני של הנמען';
$txt['sendtopic_comment'] = 'הוסף הערה';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'הערה חייבת להיות גם בדיברי נושא זה';

$txt[721] = 'הסתרת כתובת הדוא"ל מהציבור?';

$txt[737] = 'סימון הכל';

// Use numeric entities in the below string.
$txt[1001] = 'שגיאת מאגר נתונים';
$txt[1002] = 'בבקשה נסה שוב,דווח למנהל על הבעיה אם היא נימשכת.';
$txt[1003] = 'קבצים';
$txt[1004] = 'שורה';
// Use numeric entities in the below string.
$txt[1005] = 'SMF has detected and automatically tried to repair an error in your database.  If you continue to have problems, or continue to receive these emails, please contact your host.';
$txt['database_error_versions'] = '<b>Note:</b> It appears that your database may require an upgrade. Your forum files are currently at version ' . $forum_version . ', whereas your database is at version SMF ' . $modSettings['smfVersion'] . '. It is recommended that you execute the latest version of upgrade.php.';
$txt['template_parse_error'] = 'Template Parse Error!';
$txt['template_parse_error_message'] = 'It seems something has gone sour on the forum with the template system.  This problem should only be temporary, so please come back later and try again.  If you continue to see this message, please contact the administrator.<br /><br />You can also try <a href="javascript:location.reload();">refreshing this page</a>.';
$txt['template_parse_error_details'] = 'There was a problem loading the <tt><b>%1$s</b></tt> template or language file.  Please check the syntax and try again - remember, single quotes (<tt>\'</tt>) often have to be escaped with a slash (<tt>\\</tt>).  To see more specific error information from PHP, try <a href="' . $boardurl . '%1$s">accessing the file directly</a>.<br /><br />You may want to try to <a href="javascript:location.reload();">refresh this page</a> or <a href="' . $scripturl . '?theme=1">use the default theme</a>.';

$txt['smf10'] = '<b>היום</b> ב- ';
$txt['smf10b'] = '<b>אתמול</b> ב- ';
$txt['smf20'] = 'פירסום סקר חדש';
$txt['smf21'] = 'שאלה';
$txt['smf23'] = 'הצבעה';
$txt['smf24'] = 'סך הכל הצבעות';
$txt['smf25'] = 'קיצורי דרך: ALT+S לשליחה או ALT+P לתצוגה מקדימה';
$txt['smf29'] = 'ראיית תוצאות.';
$txt['smf30'] = 'נעילת סקר';
$txt['smf30b'] = 'פתיחת סקר';
$txt['smf39'] = 'עריכת סקר';
$txt['smf43'] = 'סקר';
$txt['smf47'] = 'יום אחד';
$txt['smf48'] = 'שבוע';
$txt['smf49'] = 'חודש';
$txt['smf50'] = 'לתמיד';
$txt['smf52'] = 'בצע כניסה עם שם משתמש, סיסמא ואורך חיבור';
$txt['smf53'] = 'שעה אחת';
$txt['smf56'] = 'הועבר';
$txt['smf57'] = 'בבקשה הכנס תיאור קצר ל-<br />.';
$txt['smf60'] = 'אין לך מספיק הודעות כדי לשנות קרמה אתה צריך לפחות ';
$txt['smf62'] = ' אין באפשותך לשנות קארמה אנא המתן';
$txt['smf82'] = 'פורום';
$txt['smf88'] = '';
$txt['smf96'] = 'נושא דביק';

$txt['smf138'] = 'מחיקה';

$txt['smf199'] = 'ההודעות הפרטיות שלך';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[עוד סטטיסטיקות]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'קוד';
$txt['smf239'] = 'ציטוט של';
$txt['smf240'] = 'ציטוט';

$txt['smf251'] = 'פיצול נושא';
$txt['smf252'] = 'מיזוג נושאים';
$txt['smf254'] = 'נושא עבור דיון חדש';
$txt['smf255'] = 'רק פצל את נושא זה.';
$txt['smf256'] = 'פצל נושא זה ואחר כך פרסם.';
$txt['smf257'] = 'בחר הודעות לפיצול.';
$txt['smf258'] = 'נושא חדש';
$txt['smf259'] = 'הנושא פוצל בהצלחה לשתי נושאים.';
$txt['smf260'] = 'מקור נושא';
$txt['smf261'] = 'בבקשה בחר את הנושאים שבירצונך לפצל.';
$txt['smf264'] = 'הנושא מוזג בהצלחה!.';
$txt['smf265'] = 'הנושא שמוזג לאחרונה:';
$txt['smf266'] = 'דיון שימוזג';
$txt['smf267'] = 'פורום מטרה';
$txt['smf269'] = 'דיון מטרה';
$txt['smf274'] = 'האם אתה בטוח שאתה רוצה לאחד?';
$txt['smf275'] = 'עם';
$txt['smf276'] = 'אפשרות זו מאפשרת לאחד נושאים.';

$txt['smf277'] = 'קביעת נושא כדביק';
$txt['smf278'] = 'קביעת נושא כלא דביק';
$txt['smf279'] = 'נעילת נושא';
$txt['smf280'] = 'פתיחת נושא';

$txt['smf298'] = 'חיפוש מתקדם';

$txt['smf299'] = 'סיכון אבטחה רציני:';
$txt['smf300'] = 'אתה לא הסרת';

$txt['smf301'] = 'עמוד נוצר ב- ';
$txt['smf302'] = ' שניות עם';
$txt['smf302b'] = ' שאילתות.';

$txt['smf315'] = 'השתמש בפונקציה זאת על מנת להודיע למנהלים ולאחראים על הודעה לא מתאימה<br /><i>שים לב כי כתובת הדוא"ל שלך תחשף לאחראים אם אתה משתמש באפשרות זאת</i>';

$txt['online2'] = 'מחובר';
$txt['online3'] = 'מנותק';
$txt['online4'] = 'מסר אישי (מחובר)';
$txt['online5'] = 'מסר אישי (מנותק)';
$txt['online8'] = 'מצב ';

$txt['topbottom4'] = 'למעלה';
$txt['topbottom5'] = 'למטה';

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


$txt['calendar3'] = 'ימי הולדת:';
$txt['calendar4'] = 'אירועים:';
$txt['calendar3b'] = 'ימי הולדת קרובים';
$txt['calendar4b'] = 'האירועים קרובים:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'חודש:';
$txt['calendar10'] = 'שנה:';
$txt['calendar11'] = 'יום:';
$txt['calendar12'] = 'כותרת האירוע:';
$txt['calendar13'] = 'פרסם ב:';
$txt['calendar20'] = 'עריכת אירוע';
$txt['calendar21'] = 'מחיקת אירוע זה?';
$txt['calendar22'] = 'מחיקת אירוע';
$txt['calendar23'] = 'פירסום אירוע';
$txt['calendar24'] = 'לוח שנה';
$txt['calendar37'] = 'קישור ללוח שנה';
$txt['calendar43'] = 'קישור לאירועים';
$txt['calendar47'] = 'לוח שנה';
$txt['calendar47b'] = 'היום';
$txt['calendar51'] = 'שבוע';
$txt['calendar54'] = 'מספר ימים:';
$txt['calendar_how_edit'] = 'איך אתה רוצה לערוך את נושאים אלו?';
$txt['calendar_link_event'] = 'Link Event To Post:';
$txt['calendar_confirm_delete'] = 'Are you sure you want to delete this event?';
$txt['calendar_linked_events'] = 'Linked Events';

$txt['moveTopic1'] = 'פירסום הודעת העברה';
$txt['moveTopic2'] = 'שינוי נושא הדיון';
$txt['moveTopic3'] = 'נושא חדש';
$txt['moveTopic4'] = 'שינוי נושא כל ההודעות';

$txt['theme_template_error'] = 'נכשל בטעינת תבנית עיצוב \'%s\'.';
$txt['theme_language_error'] = 'נכשל בטעינת קובץ שפה \'%s\'.';

$txt['parent_boards'] = 'תת-פורום';

$txt['smtp_no_connect'] = 'לא הצליח להתחבר לשרת SMTP.';
$txt['smtp_port_ssl'] = 'SMTP port setting incorrect; it should be 465 for SSL servers.';
$txt['smtp_bad_response'] = 'נכשל בהשגת קודי תגובה של שרת דואר';
$txt['smtp_error'] = 'נכשל בשליחת דואר. שגיאה: ';
$txt['mail_send_unable'] = 'Unable to send mail to the email address \'%s\'';

$txt['mlist_search'] = 'חיפש משתמשים';
$txt['mlist_search2'] = 'חפש שוב';
$txt['mlist_search_email'] = 'חיפוש כתובת דואר אלקטורונית של משתמש';
$txt['mlist_search_messenger'] = 'חיפוש כינוי של משתמש';
$txt['mlist_search_group'] = 'חיפוש הודעות של משתמש';
$txt['mlist_search_name'] = 'חיפוש שם של משתמש';
$txt['mlist_search_website'] = 'חיפוש אתר אינטרנט של משתמש';
$txt['mlist_search_results'] = 'תוצאות חיפוש';

$txt['attach_downloaded'] = 'הורד';
$txt['attach_viewed'] = 'נראה';
$txt['attach_times'] = 'פעמים';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Settings';
$txt['never'] = 'לעולם לא';
$txt['more'] = 'more';

$txt['hostname'] = 'שם מחשב';
$txt['you_are_post_banned'] = 'מצטעערים %s, אתה הושעת משליחת הודעות בפורום זה.';
$txt['ban_reason'] = 'סיבה';

$txt['tables_optimized'] = 'טבלאות מאגר נתונים שופרו';

$txt['add_poll'] = 'הוספת סקר';
$txt['poll_options6'] = 'אתה רק יכול לבחור %s בחירות.';
$txt['poll_remove'] = 'הסרת סקר';
$txt['poll_remove_warn'] = 'האם ברצונך להסיר סקר זה מהדיון?';
$txt['poll_results_expire'] = 'תוצאות ייראו לציבור רק כאשר הסקר ייסגר';
$txt['poll_expires_on'] = 'ההצבעה עומדת להיסגר';
$txt['poll_expired_on'] = 'ההצבעה נסגרה';
$txt['poll_change_vote'] = 'הסר הצבעה';
$txt['poll_return_vote'] = 'Voting options';

$txt['quick_mod_remove'] = 'הסרת נבחרים';
$txt['quick_mod_lock'] = 'נעילת הנבחרים';
$txt['quick_mod_sticky'] = 'מצב דביק';
$txt['quick_mod_move'] = 'העברת נבחרים אל';
$txt['quick_mod_merge'] = 'איחוד נבחרים';
$txt['quick_mod_markread'] = 'Mark selected read';
$txt['quick_mod_go'] = 'סע!';
$txt['quickmod_confirm'] = 'האם אתה בטוח שאתה רוצה לבצע זאת?';

$txt['spell_check'] = 'בדיקת איות';

$txt['quick_reply_1'] = 'תגובה מהירה';
$txt['quick_reply_2'] = 'בעזרת <i>Quick-Reply</i> אתה יכול להשתמש בקוד הקהילות ובסמיילים כפי שאתה כותב בהודעות רגילות, אבל עם יותר נוחות.';
$txt['quick_reply_warning'] = 'אזהרה: דיון זה כרגע נעול!<br />רק מנהלים או אחראים יכולים להגיב.';

$txt['notification_enable_board'] = 'Are you sure you wish to enable notification of new topics for this board?';
$txt['notification_disable_board'] = 'Are you sure you wish to disable notification of new topics for this board?';
$txt['notification_enable_topic'] = 'Are you sure you wish to enable notification of new replies for this topic?';
$txt['notification_disable_topic'] = 'Are you sure you wish to disable notification of new replies for this topic?';

$txt['rtm1'] = 'דיווח לאחראים';

$txt['unread_topics_visit'] = 'דיונים אחרונים שלא נקראו';
$txt['unread_topics_visit_none'] = 'אין דיונים שלא נקראו מאז הביקור האחרון שלך.  <a href="' . $scripturl . '?action=unread;all">לחץ כאן על מנת לראות את כל הדיונים שלא נקראוס</a>.';
$txt['unread_topics_all'] = 'כל הדיונים שלא נקראו';
$txt['unread_replies'] = 'דיונים מעודכנים';

$txt['who_title'] = 'מי מחובר';
$txt['who_and'] = ' ו- ';
$txt['who_viewing_topic'] = ' נמצאים בנושא זה.';
$txt['who_viewing_board'] = ' נמצאים בפורום זה.';
$txt['who_member'] = 'משתמש';

$txt['powered_by_php'] = 'מופעל ע"י PHP';
$txt['powered_by_mysql'] = 'מופעל ע"י MySQL';
$txt['valid_html'] = 'HTML 4.01 תקין!';
$txt['valid_xhtml'] = 'XHTML 1.0 תקין!';
$txt['valid_css'] = 'CSS תקין!';

$txt['guest'] = 'אורח';
$txt['guests'] = 'אורחים';
$txt['user'] = 'משתמש';
$txt['users'] = 'משתמשים';
$txt['hidden'] = 'מוסתר/ים';
$txt['buddy'] = 'Buddy';
$txt['buddies'] = 'Buddies';
$txt['most_online_ever'] = 'Most Online Ever';
$txt['most_online_today'] = 'Most Online Today';

$txt['merge_select_target_board'] = 'בחר את הפורום של הנושא המאוחד';
$txt['merge_select_poll'] = 'בחר איזה סקר הנושא המאוחד יכלול';
$txt['merge_topic_list'] = 'בחר נושאים להיות מאוחדים';
$txt['merge_select_subject'] = 'בחירת כותרת של הנושא המחובר';
$txt['merge_custom_subject'] = 'כותרת';
$txt['merge_enforce_subject'] = 'שינוי הכותרת של כל ההודעות';
$txt['merge_include_notifications'] = 'הכלל הודעות מעקב?';
$txt['merge_check'] = 'איחוד?';
$txt['merge_no_poll'] = 'ללא סקר';

$txt['response_prefix'] = 'בעניין: ';
$txt['current_icon'] = 'סמל נוכחי';

$txt['smileys_current'] = 'סמיילים נוכחים';
$txt['smileys_none'] = 'אין סמיילים';
$txt['smileys_forum_board_default'] = 'Forum/Board Default';

$txt['search_results'] = 'תוצאות חיפוש';
$txt['search_no_results'] = 'לא נמצאו תוצאות';

$txt['totalTimeLogged1'] = 'סה"כ זמן מחובר: ';
$txt['totalTimeLogged2'] = ' ימים, ';
$txt['totalTimeLogged3'] = ' שעות ו- ';
$txt['totalTimeLogged4'] = ' דקות.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'יש';
$txt['approve_thereare'] = 'ישנם';
$txt['approve_member'] = 'משתמש אחד';
$txt['approve_members'] = 'משתמשים';
$txt['approve_members_waiting'] = 'מחכה לאישור.';

$txt['notifyboard_turnon'] = 'האם אתה רוצה לקבל הודעת דוא"ל כאשר מישהו מפרסם דיון חדש בפורום זה?';
$txt['notifyboard_turnoff'] = 'האם אתה בטוח שאתה לא רוצה לקבל הודעות מעקב של פורום זה?';

$txt['activate_code'] = 'קוד האישור שלך הוא';

$txt['find_members'] = 'חיפוש משתמשים';
$txt['find_username'] = 'שם,שם משתמש או דואר אלקטרוני';
$txt['find_buddies'] = 'Show Buddies Only?';
$txt['find_wildcards'] = 'שימוש בעזרי חיפוש: *, ?';
$txt['find_no_results'] = 'אין תוצאות חיפוש';
$txt['find_results'] = 'תוצאות';
$txt['find_close'] = 'סגירה';

$txt['unread_since_visit'] = 'ראיית ההודעות שלא נקראו מאז הביקור האחרון שלך.';
$txt['show_unread_replies'] = 'ראיית תגובות חדשות להודעות שלך.';

$txt['change_color'] = 'שינוי צבע';

$txt['quickmod_delete_selected'] = 'מחיקת נבחרים';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'קיבלת הודעה אישית.\\nראה אותה עכשיו (בחלון חדש)?';

$txt['previous_next_back'] = '&laquo; הקודם';
$txt['previous_next_forward'] = 'הבא &raquo;';

$txt['movetopic_auto_board'] = '[פורום]';
$txt['movetopic_auto_topic'] = '[קישור נושא]';
$txt['movetopic_default'] = 'הנושא זה הועבר אל ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'כיווץ או הרחבה של הכותרת.';

$txt['mark_unread'] = 'סימון כלא נקרא';

$txt['ssi_not_direct'] = 'Please don\'t access SSI.php by URL directly; you may want to use the path (%s) or add ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php was unable to load a session!  This may cause problems with logout and other functions - please make sure SSI.php is included before *anything* else in all your scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Preview post';
$txt['preview_fetch'] = 'Fetching preview...';
$txt['preview_new'] = 'New message';
$txt['error_while_submitting'] = 'The following error or errors occurred while posting this message:';

$txt['split_selected_posts'] = 'Selected posts';
$txt['split_selected_posts_desc'] = 'The posts below will form a new topic after splitting.';
$txt['split_reset_selection'] = 'reset selection';

$txt['modify_cancel'] = 'Cancel';
$txt['mark_read_short'] = 'Mark Read';

$txt['pm_short'] = 'My Messages';
$txt['hello_member_ndt'] = 'Hello';

$txt['ajax_in_progress'] = 'Loading...';

?>