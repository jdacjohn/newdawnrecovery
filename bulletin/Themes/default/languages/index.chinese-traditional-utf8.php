<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'zh_TW.utf8';
$txt['lang_dictionary'] = 'en';
$txt['lang_spelling'] = 'american';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$txt['days_short'] = array('週日', '週一', '週二', '週三', '週四', '週五', '週六');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
$txt['months_titles'] = array(1 => '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
$txt['months_short'] = array(1 => '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

$txt['newmessages0'] = '封新訊息';
$txt['newmessages1'] = '封新訊息';
$txt['newmessages3'] = '新訊息';
$txt['newmessages4'] = ',';

$txt[2] = '管理';

$txt[10] = '儲存';

$txt[17] = '編輯';
$txt[18] = $context['forum_name'] . ' - 論壇首頁';
$txt[19] = '會員';
$txt[20] = '板面名稱';
$txt[21] = '文章';
$txt[22] = '最新文章';

$txt[24] = '(無主題)';
$txt[26] = '文章';
$txt[27] = '檢視個人資料';
$txt[28] = '訪客';
$txt[29] = '作者';
$txt[30] = '於';
$txt[31] = '刪除';
$txt[33] = '發表新主題';

$txt[34] = '登入';
// Use numeric entities in the below string.
$txt[35] = '帳號';
$txt[36] = '密碼';

$txt[40] = '沒有這個帳號.';

$txt[62] = '板主';
$txt[63] = '刪除主題';
$txt[64] = '主題';
$txt[66] = '修改訊息';
$txt[68] = '會員名稱';
$txt[69] = '電子郵件';
$txt[70] = '主題';
$txt[72] = '訊息';

$txt[79] = '個人資料';

$txt[81] = '輸入密碼';
$txt[82] = '確認密碼';
$txt[87] = '會員群組';

$txt[92] = '觀看會員資料 會員:';
$txt[94] = '總';
$txt[95] = '文章';
$txt[96] = '個人網站';
$txt[97] = '註冊';

$txt[101] = '版面首頁';
$txt[102] = '新聞';
$txt[103] = '首頁';

$txt[104] = '封鎖/解鎖主題';
$txt[105] = '發表文章';
$txt[106] = '發生錯誤!';
$txt[107] = '在';
$txt[108] = '登出';
$txt[109] = '發表者';
$txt[110] = '回覆';
$txt[111] = '最後一篇文章';
$txt[114] = '管理員登入';
// Use numeric entities in the below string.
$txt[118] = '主題';
$txt[119] = '說明';
$txt[121] = '刪除文章';
$txt[125] = '回覆通知';
$txt[126] = '追蹤本文章：當有人回覆這篇文章時，您想要收到電子郵件提醒您嗎？';
// Use numeric entities in the below string.
$txt[130] = "謝謝您,\n" . $context['forum_name'] . ' 論壇管理小組。';
$txt[131] = '加入追蹤清單';
$txt[132] = '移動文章';
$txt[133] = '移動到';
$txt[139] = '頁';
$txt[140] = '過去 ' . $modSettings['lastActive'] . ' 分鐘內出現的會員';
$txt[144] = '私人訊息';
$txt[145] = '引用回覆';
$txt[146] = '回覆文章';

$txt[151] = '沒有任何訊息....';
$txt[152] = '您有';
$txt[153] = '封訊息';
$txt[154] = '刪除文章';

$txt[158] = '線上會員';
$txt[159] = '私人訊息';
$txt[160] = '前往';
$txt[161] = '繼續';
$txt[162] = '您確定要刪除這篇主題嗎？';
$txt[163] = '確認';
$txt[164] = '取消';

$txt[166] = '搜尋結果';
$txt[167] = '搜尋結果最末端';
$txt[170] = '很抱歉, 沒有找到任何相符的資料';
$txt[176] = '於';

$txt[182] = '搜尋';
$txt[190] = '顯示全部';

$txt[193] = '回上一頁';
$txt[194] = '忘記密碼';
$txt[195] = '主題作者是';
$txt[196] = '主題';
$txt[197] = '作者';
$txt[200] = '在此可以瀏覽所有已註冊的會員..';
$txt[201] = '歡迎光臨';
$txt[208] = '管理中心';
$txt[211] = '最後編輯時間';
$txt[212] = '您想要關閉對於這篇主題的追蹤嗎?';

$txt[214] = '最新文章';

$txt[227] = '居住地區';
$txt[231] = '會員性別';
$txt[233] = '註冊日期';

$txt[234] = '瀏覽最近發佈的文章。';
$txt[235] = '是最近更新的主題';

$txt[238] = '男';
$txt[239] = '女';

$txt[240] = '帳號名稱內含不可使用的字元.';

$txt['welcome_guest'] = '歡迎光臨, <b>' . $txt[28] . '</b>. 請先 <a href="' . $scripturl . '?action=login">登入</a> 或 <a href="' . $scripturl . '?action=register">註冊一個帳號</a>.';
$txt['welcome_guest_activate'] = '<br />您忘了 <a href="' . $scripturl . '?action=activate">啟用您的帳號嗎?</a>';
$txt['hello_member'] = '歡迎光臨,';
// Use numeric entities in the below string.
$txt['hello_guest'] = '歡迎光臨,';
$txt[247] = '哈囉,';
$txt[248] = '歡迎光臨,,';
$txt[249] = '請';
$txt[250] = '返回';
$txt[251] = '請選擇目的地';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = '作者';

$txt[287] = '微笑';
$txt[288] = '生氣';
$txt[289] = 'ㄏㄏㄏ';
$txt[290] = '哈哈哈';
$txt[291] = '難過';
$txt[292] = '眨眼';
$txt[293] = '奸笑';
$txt[294] = '驚訝';
$txt[295] = '酷';
$txt[296] = '啥';
$txt[450] = '轉眼';
$txt[451] = '伸舌頭';
$txt[526] = '害羞';
$txt[527] = '無話可說';
$txt[528] = '不知道不清楚不要問我';
$txt[529] = '飛吻';
$txt[530] = '哭泣';

$txt[298] = '版主';
$txt[299] = '版主';

$txt[300] = '顯示所有主題為已閱讀';
$txt[301] = '瀏覽';
$txt[302] = '新';

$txt[303] = '會員名單';
$txt[305] = '瀏覽';
$txt[307] = '電子郵件';

$txt[308] = '瀏覽會員';
$txt[309] = '共';
$txt[310] = '名會員';
$txt[311] = '到';
$txt[315] = '忘了您的密碼嗎?';

$txt[317] = '日期';
// Use numeric entities in the below string.
$txt[318] = '寄件者';
$txt[319] = '主題';
$txt[322] = '檢查新訊息';
$txt[324] = '收件者';

$txt[330] = '主題';
$txt[331] = '會員';
$txt[332] = '會員名單';
$txt[333] = '新文章';
$txt[334] = '沒有新文章';

$txt['sendtopic_send'] = '送出';

$txt[371] = '時區差值';
$txt[377] = '或';

$txt[398] = '很抱歉，沒有找到任何符合的資料';

$txt[418] = '追蹤';

$txt[430] = '很抱歉 %s，本論壇禁止您進入！';

$txt[452] = '標示所有文章為已讀';

$txt[454] = '熱門主題 (超過 ' . $modSettings['hotTopicPosts'] . ' 篇回覆)';
$txt[455] = '超熱門主題 (超過 ' . $modSettings['hotTopicVeryPosts'] . '篇回覆)';
$txt[456] = '封鎖的主題';
$txt[457] = '一般的主題';
$txt['participation_caption'] = '您曾經參與過的主題';

$txt[462] = '繼續';

$txt[465] = '列印';
$txt[467] = '個人資料';
$txt[468] = '文章總覽';
$txt[470] = 'N/A';
$txt[471] = '封私人訊息';
$txt[473] = '這個會員名稱已經有人使用了。';

$txt[488] = '總會員人數';
$txt[489] = '總文章數';
$txt[490] = '總主題數';

$txt[497] = '登入時間 (分鐘)';

$txt[507] = '預覽';
$txt[508] = '永遠自動登入';

$txt[511] = '已記錄';
// Use numeric entities in the below string.
$txt[512] = 'IP 位址';

$txt[513] = 'ICQ 號碼';
$txt[515] = '個人網站';

$txt[525] = '由';

$txt[578] = '小時';
$txt[579] = '天';

$txt[581] = ', 最新加入的會員.';

$txt[582] = '搜尋';

$txt[603] = 'AIM 帳號';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hi.+Are+you+there?';
$txt[604] = '奇摩即時通';

$txt[616] = '請記得，目前論壇是處於維護狀態。';

$txt[641] = '閱讀';
$txt[642] = '次';

$txt[645] = '論壇統計資料';
$txt[656] = '最新註冊會員';
$txt[658] = '總類別數量';
$txt[659] = '最新發表文章';

$txt[660] = '您有';
$txt[661] = '按';
$txt[662] = '此';
$txt[663] = '進入.';

$txt[665] = '板面總計';

$txt[668] = '列印本頁';

$txt[679] = '必須是有效的電子郵件信箱.';

$txt[683] = '我是天才！！';
$txt[685] = $context['forum_name'] . ' - 資訊中心';

$txt[707] = '寄送主題';

$txt['sendtopic_title'] = '將這篇文章 &quot;%s&quot; 寄給朋友.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = '親愛的 %s，';
$txt['sendtopic_this_topic'] = '這篇文章 "%s" 可能對您有用，這是來自 ' . $context['forum_name'] . ' 論壇的文章。您可以按下這個連結瀏覽';
$txt['sendtopic_thanks'] = '謝謝了';
$txt['sendtopic_sender_name'] = '您的名字';
$txt['sendtopic_sender_email'] = '您的電子郵件';
$txt['sendtopic_receiver_name'] = '收件者名字';
$txt['sendtopic_receiver_email'] = '收件者電子郵件';
$txt['sendtopic_comment'] = '輸入說明';
// Use numeric entities in the below string.
$txt['sendtopic2'] = '同時，也增加了關於這篇文章的附註事項';

$txt[721] = '不公開電子郵件？';

$txt[737] = '選取全部';

// Use numeric entities in the below string.
$txt[1001] = '資料庫錯誤';
$txt[1002] = '請重新操作一次. 如果這個問題持續發生, 請聯絡系統管理員.';
$txt[1003] = '檔案';
$txt[1004] = '行';
// Use numeric entities in the below string.
$txt[1005] = 'SMF論壇系統已在資料庫中發現錯誤，並且修正完畢。如果這個問題持續發生，請聯絡您的主機系統管理員。';
$txt['database_error_versions'] = '<b>注意：</b> 您的資料庫 <em>可能</em> 需要更新。您的論壇檔案版本是 ' . $forum_version . '，而資料庫裡的檔案版本是 ' . $modSettings['smfVersion'] . '。重新執行最新的 upgrade.php 可能會解決這裡的錯誤。';
$txt['template_parse_error'] = '佈景模板執行錯誤！';
$txt['template_parse_error_message'] = '論壇的佈景模板出現錯誤，這可能是暫時性的，請稍後再進入論壇。如果錯誤持續發生，請通知管理員。<br /><br />您也可以 <a href="javascript:location.reload();">刷新此頁</a>。';
$txt['template_parse_error_details'] = '無法安裝 <tt><b>%1$s</b></tt> 佈景或語系檔案。請注意 (<tt>\'</tt>) 通常需要使用 (<tt>\\</tt>) 才能。請按 <a href="' . $boardurl . '%1$s">這裡看全部的錯誤訊息</a>。<br /><br />您也可以 <a href="javascript:location.reload();">刷新此頁</a> 或 <a href="' . $scripturl . '?theme=1">使用預設的佈景</a>。';

$txt['smf10'] = '<b>今天</b>  ';
$txt['smf10b'] = '<b>昨天</b>  ';
$txt['smf20'] = '發佈投票';
$txt['smf21'] = '問題';
$txt['smf23'] = '投票';
$txt['smf24'] = '總投票會員';
$txt['smf25'] = '快捷鍵: 按下 ALT+S 可以發表文章/按下 ALT+P 可以預覽文章';
$txt['smf29'] = '瀏覽結果';
$txt['smf30'] = '封鎖投票';
$txt['smf30b'] = '解鎖投票';
$txt['smf39'] = '更改投票';
$txt['smf43'] = '投票';
$txt['smf47'] = '一天';
$txt['smf48'] = '一週';
$txt['smf49'] = '一個月';
$txt['smf50'] = '永遠';
$txt['smf52'] = '請輸入帳號, 密碼以及預計登入時間';
$txt['smf53'] = '一小時';
$txt['smf56'] = '移動';
$txt['smf57'] = '請輸入為何您移動這篇主題的原因.';
$txt['smf60'] = '很抱歉, 您沒有修改評價的權限, 您需要 ';
$txt['smf62'] = '很抱歉, 您目前無法執行這個動作, 請再等待 ';
$txt['smf82'] = '版面';
$txt['smf88'] = '在';
$txt['smf96'] = '頂置的主題';

$txt['smf138'] = '刪除';

$txt['smf199'] = '您的私人訊息';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[詳細統計資料]';

// Use numeric entities in the below three strings.
$txt['smf238'] = '程式碼';
$txt['smf239'] = '引用自';
$txt['smf240'] = '引用';

$txt['smf251'] = '分拆';
$txt['smf252'] = '合併';
$txt['smf254'] = '新主題的標題';
$txt['smf255'] = '只分拆此篇文章.';
$txt['smf256'] = '分拆的主題包括回覆的文章.';
$txt['smf257'] = '選擇要分拆的文章.';
$txt['smf258'] = '發佈主題';
$txt['smf259'] = '主題已經分拆成功為兩篇主題.';
$txt['smf260'] = '原始主題';
$txt['smf261'] = '選擇要分拆的文章.';
$txt['smf264'] = '主題已經合併成功。';
$txt['smf265'] = '新合併的主題';
$txt['smf266'] = '您要合併的主題';
$txt['smf267'] = '目標版面';
$txt['smf269'] = '目標主題';
$txt['smf274'] = '確定要合併';
$txt['smf275'] = '和';
$txt['smf276'] = '這個功能會將兩篇文章合併為一篇文章. 所有的回覆文章都會依照回覆時間重新排列順序, 因此最早發表的文章會成為這個主題的第一篇內容.';

$txt['smf277'] = '頂置主題';
$txt['smf278'] = '取消頂置主題';
$txt['smf279'] = '封鎖主題';
$txt['smf280'] = '解鎖主題';

$txt['smf298'] = '進階搜尋';

$txt['smf299'] = '重大安全警告:';
$txt['smf300'] = '您並沒有移除 ';

$txt['smf301'] = '本頁花了 ';
$txt['smf302'] = ' 秒，以及 ';
$txt['smf302b'] = ' 次的資料庫查詢。';

$txt['smf315'] = '使用這個功能通知板主以及管理員有問題的文章.<br /><i>請注意: 使用這個功能會將您的電子郵件信箱地址告訴板主以及管理員.</i>';

$txt['online2'] = '在線';
$txt['online3'] = '離線';
$txt['online4'] = '私人訊息 (在線)';
$txt['online5'] = '私人訊息 (離線)';
$txt['online8'] = '狀態';

$txt['topbottom4'] = '向上';
$txt['topbottom5'] = '向下';

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


$txt['calendar3'] = '壽星:';
$txt['calendar4'] = '事件:';
$txt['calendar3b'] = '近日壽星:';
$txt['calendar4b'] = '近日事件:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = '月:';
$txt['calendar10'] = '年:';
$txt['calendar11'] = '日:';
$txt['calendar12'] = '事件名稱:';
$txt['calendar13'] = '相關文章:';
$txt['calendar20'] = '修改事件內容';
$txt['calendar21'] = '刪除這個事件?';
$txt['calendar22'] = '刪除事件';
$txt['calendar23'] = '發表事件';
$txt['calendar24'] = '日曆';
$txt['calendar37'] = '連結到日曆';
$txt['calendar43'] = '連結事件';
$txt['calendar47'] = '近日事件';
$txt['calendar47b'] = '今日事件';
$txt['calendar51'] = '週';
$txt['calendar54'] = '維持的天數:';
$txt['calendar_how_edit'] = '如何修改事件內容?';
$txt['calendar_link_event'] = '連結事件到文章：';
$txt['calendar_confirm_delete'] = '確定要刪除這個事件嗎？';
$txt['calendar_linked_events'] = '連結的事件';

$txt['moveTopic1'] = '發表一篇自動轉址主題';
$txt['moveTopic2'] = '修改這篇主題的標題';
$txt['moveTopic3'] = '新的標題';
$txt['moveTopic4'] = '修改每篇文章的標題';

$txt['theme_template_error'] = '無法載入佈景模板: \'%s\'.';
$txt['theme_language_error'] = '無法載入語系檔案: \'%s\'.';

$txt['parent_boards'] = '子板面';

$txt['smtp_no_connect'] = '無法連結到郵件外寄伺服器 (SMTP)';
$txt['smtp_port_ssl'] = 'SMTP 連接埠的設定錯誤；給 SSL 的主機它必須是 465。';
$txt['smtp_bad_response'] = '郵件伺服器沒有回覆';
$txt['smtp_error'] = '寄送郵件時發生錯誤: ';
$txt['mail_send_unable'] = '無法傳送郵件到 \'%s\'';

$txt['mlist_search'] = '搜尋會員';
$txt['mlist_search2'] = '重新搜尋';
$txt['mlist_search_email'] = '依照電子郵件搜尋';
$txt['mlist_search_messenger'] = '依照傳訊軟體暱稱搜尋';
$txt['mlist_search_group'] = '依照群組或階級搜尋';
$txt['mlist_search_name'] = '依照暱稱搜尋';
$txt['mlist_search_website'] = '依照個人網站搜尋';
$txt['mlist_search_results'] = '搜尋結果';

$txt['attach_downloaded'] = '已被下載';
$txt['attach_viewed'] = '已被閱讀';
$txt['attach_times'] = '次';

$txt['MSN'] = 'MSN 帳號';

$txt['settings'] = '設定';
$txt['never'] = '永不！';
$txt['more'] = '更多';

$txt['hostname'] = '主機位址';
$txt['you_are_post_banned'] = '對不起 %s, 您被禁止傳送私人訊息.';
$txt['ban_reason'] = '原因';

$txt['tables_optimized'] = '資料庫已最佳化';

$txt['add_poll'] = '投票';
$txt['poll_options6'] = '您只能選擇%s個選項.';
$txt['poll_remove'] = '移除投票';
$txt['poll_remove_warn'] = '您確定要移除這個投票嗎?';
$txt['poll_results_expire'] = '開票結果將會在投票截止後公告';
$txt['poll_expires_on'] = '投票截止日期';
$txt['poll_expired_on'] = '投票已截止';
$txt['poll_change_vote'] = '移除投票';
$txt['poll_return_vote'] = '投票選項';

$txt['quick_mod_remove'] = '刪除選項';
$txt['quick_mod_lock'] = '封鎖選項';
$txt['quick_mod_sticky'] = '頂置選項';
$txt['quick_mod_move'] = '移動選項到';
$txt['quick_mod_merge'] = '合併選項';
$txt['quick_mod_markread'] = '標示選項已讀';
$txt['quick_mod_go'] = '繼續！';
$txt['quickmod_confirm'] = '您是否確定要繼續?';

$txt['spell_check'] = '拼字檢查';

$txt['quick_reply_1'] = '快速回覆';
$txt['quick_reply_2'] = '透過 <i>快速回覆</i> 功能，您可以快速的回覆文章，您也可以使用BBCODE或是HTML (如果這個板面允許的話)。';
$txt['quick_reply_warning'] = '注意：此篇主題已經被封鎖了！<br />只有版主可以回覆。';

$txt['notification_enable_board'] = '您確定要追蹤這個板面的新主題嗎?';
$txt['notification_disable_board'] = '您確定不再追蹤這個板面的新主題嗎?';
$txt['notification_enable_topic'] = '您確定要追蹤這個主題的新文章嗎?';
$txt['notification_disable_topic'] = '您確定不再追蹤這個主題的新文章嗎?';

$txt['rtm1'] = '向版主檢舉';

$txt['unread_topics_visit'] = '未閱讀的主題';
$txt['unread_topics_visit_none'] = '您上次光臨之後未有新的主題. <a href="' . $scripturl . '?action=unread;all">所有未閱讀的主題</a>.';
$txt['unread_topics_all'] = '所有未閱讀的主題';
$txt['unread_replies'] = '更新的主題';

$txt['who_title'] = '線上會員';
$txt['who_and'] = ' 以及 ';
$txt['who_viewing_topic'] = ' 正在閱讀本篇主題.';
$txt['who_viewing_board'] = ' 正在瀏覽本板面.';
$txt['who_member'] = '會員';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'Valid CSS!';

$txt['guest'] = '訪客';
$txt['guests'] = '訪客';
$txt['user'] = '會員';
$txt['users'] = '會員';
$txt['hidden'] = '隱身';
$txt['buddy'] = '好友';
$txt['buddies'] = '好友';
$txt['most_online_ever'] = '歷史最多上線會員';
$txt['most_online_today'] = '今天最多上線會員';

$txt['merge_select_target_board'] = '選擇合併主題要放置的目標板面';
$txt['merge_select_poll'] = '選擇在合併後要保存的投票';
$txt['merge_topic_list'] = '選擇要合併的主題';
$txt['merge_select_subject'] = '選擇合併後主題的標題';
$txt['merge_custom_subject'] = '自訂標題';
$txt['merge_enforce_subject'] = '修改所有回覆文章的標題';
$txt['merge_include_notifications'] = '包含追蹤清單?';
$txt['merge_check'] = '合併?';
$txt['merge_no_poll'] = '沒有投票';

$txt['response_prefix'] = '回覆： ';
$txt['current_icon'] = '目前圖示';

$txt['smileys_current'] = '目前的表情圖案集';
$txt['smileys_none'] = '不使用表情圖案';
$txt['smileys_forum_board_default'] = '論壇/版面預設';

$txt['search_results'] = '搜尋結果';
$txt['search_no_results'] = '沒有找到相符合的結果';

$txt['totalTimeLogged1'] = '總登入時間: ';
$txt['totalTimeLogged2'] = ' 天, ';
$txt['totalTimeLogged3'] = ' 小時和 ';
$txt['totalTimeLogged4'] = ' 分鐘';
$txt['totalTimeLogged5'] = '天 ';
$txt['totalTimeLogged6'] = '時 ';
$txt['totalTimeLogged7'] = '分';

$txt['approve_thereis'] = '共有';
$txt['approve_thereare'] = '共有';
$txt['approve_member'] = '一位會員';
$txt['approve_members'] = '位會員';
$txt['approve_members_waiting'] = '等待審核.';

$txt['notifyboard_turnon'] = '當有會員在這個板面內發表新主題時, 是否要透過電子郵件通知您?';
$txt['notifyboard_turnoff'] = '您確定您不想收到來自這個板面的新主題通知嗎?';

$txt['activate_code'] = '您的啟用碼是';

$txt['find_members'] = '尋找會員';
$txt['find_username'] = '帳號, 暱稱或電子郵件';
$txt['find_buddies'] = '只顯示好友？';
$txt['find_wildcards'] = '您可以使用的萬用字元: *, ?';
$txt['find_no_results'] = '沒有找到任何結果';
$txt['find_results'] = '搜尋結果';
$txt['find_close'] = '關閉';

$txt['unread_since_visit'] = '顯示上次光臨之後的新主題';
$txt['show_unread_replies'] = '顯示您有參與討論的所有新回覆';

$txt['change_color'] = '更改顏色';

$txt['quickmod_delete_selected'] = '刪除選取的項目';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = '您收到了新的私人訊息.\\n要開啟新視窗閱讀嗎?';

$txt['previous_next_back'] = '&laquo; 上篇主題';
$txt['previous_next_forward'] = '下篇主題 &raquo;';

$txt['movetopic_auto_board'] = '[版面]';
$txt['movetopic_auto_topic'] = '[主題連結]';
$txt['movetopic_default'] = '此篇主題已經被移動到 ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = '收合或展開.';

$txt['mark_unread'] = '標示未讀';

$txt['ssi_not_direct'] = '請不要直接存取 SSI.php; 您可以用路徑 (%s) 或加入 ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php 無法載入工作階段！這可能會對登出或其他功能造成問題 - 請確定在其它的資料之前已經包括了 SSI.php！';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = '預覽文章';
$txt['preview_fetch'] = '讀取預覽...';
$txt['preview_new'] = '新訊息';
$txt['error_while_submitting'] = '在發佈這篇訊息時發生了下面的錯誤：';

$txt['split_selected_posts'] = '選擇的文章';
$txt['split_selected_posts_desc'] = '分拆後下面的文章會變成新主題。';
$txt['split_reset_selection'] = '重設選項';

$txt['modify_cancel'] = '取消';
$txt['mark_read_short'] = '標示已讀';

$txt['pm_short'] = '我的訊息';
$txt['hello_member_ndt'] = '您好';

$txt['ajax_in_progress'] = '載入...';

?>