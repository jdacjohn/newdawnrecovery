<?php
// Version: 1.1; PersonalMessage

$txt[143] = '私人訊息首頁';
$txt[148] = '傳送訊息';
$txt[150] = '收件者';
$txt[1502] = '副本';
$txt[316] = '收件匣';
$txt[320] = '寄件匣';
$txt[321] = '新訊息';
$txt[411] = '刪除訊息';
// Don't translate "PMBOX" in this string.
$txt[412] = '刪除 PMBOX 裡的全部訊息';
$txt[413] = '確定要刪除全部的訊息嗎？';
$txt[535] = '收件者';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = '新私人訊息：SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = '您收到 SENDER 寄給您的私人訊息，在 ' . $context['forum_name'] . ' 論壇。' . "\n\n" . '注意：這只是通知信件，請不要回覆到這個郵件信箱。' . "\n\n" . '您收到的訊息是：' . "\n\n" . 'MESSAGE';
$txt[748] = '(多位收件者：\'帳號1, 帳號2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = '在這裡回覆私人訊息：';

$txt['smf249'] = '確定要刪除全部選擇的私人訊息嗎？';

$txt['sent_to'] = '寄給';
$txt['reply_to_all'] = '回覆全部';

$txt['pm_capacity'] = '容量';
$txt['pm_currently_using'] = '%s 篇訊息，%s%% 篇量滿。';

$txt['pm_error_user_not_found'] = '找不到會員 \'%s\'。';
$txt['pm_error_ignored_by_user'] = '會員 \'%s\' 禁止您寄的私人訊息。';
$txt['pm_error_data_limit_reached'] = '訊息無法寄給 \'%s\' 因為容量已滿！';
$txt['pm_successfully_sent'] = '訊息成功寄給 \'%s\'。';
$txt['pm_too_many_recipients'] = '您不能一次寄件超過 %d 名會員。';
$txt['pm_too_many_per_hour'] = '您超過一個小時內允許的 %d 封私人訊息。';
$txt['pm_send_report'] = '傳送檢舉信件';
$txt['pm_save_outbox'] = '儲存草稿到寄件匣';
$txt['pm_undisclosed_recipients'] = '秘密收件人';

$txt['pm_read'] = '閱讀';
$txt['pm_replied'] = '回覆給';

// Message Pruning.
$txt['pm_prune'] = '刪除訊息';
$txt['pm_prune_desc1'] = '刪除超過日期的訊息';
$txt['pm_prune_desc2'] = '天。';
$txt['pm_prune_warning'] = '確定要刪除您的私人訊息嗎？';

// Actions Drop Down.
$txt['pm_actions_title'] = '額外動作';
$txt['pm_actions_delete_selected'] = '刪除選項';
$txt['pm_actions_filter_by_label'] = '過濾標籤';
$txt['pm_actions_go'] = '繼續';

// Manage Labels Screen.
$txt['pm_apply'] = '套用';
$txt['pm_manage_labels'] = '管理標籤';
$txt['pm_labels_delete'] = '確定要刪除選擇的標籤嗎？';
$txt['pm_labels_desc'] = '這裡可以讓您新增，編輯和刪除私人訊息的標籤。';
$txt['pm_label_add_new'] = '新增標籤';
$txt['pm_label_name'] = '標籤名稱';
$txt['pm_labels_no_exist'] = '您目前沒有任何標籤！';

// Labeling Drop Down.
$txt['pm_current_label'] = '標籤';
$txt['pm_msg_label_title'] = '標籤名稱';
$txt['pm_msg_label_apply'] = '新增標籤';
$txt['pm_msg_label_remove'] = '移除標籤';
$txt['pm_msg_label_inbox'] = '收件匣';
$txt['pm_sel_label_title'] = '選擇的標籤';
$txt['labels_too_many'] = '抱歉，%s 訊息已超過了可有的標籤數量！';

// Sidebar Headings.
$txt['pm_labels'] = '標籤';
$txt['pm_messages'] = '訊息';
$txt['pm_preferences'] = '偏好設定';

$txt['pm_is_replied_to'] = '您已經回覆或轉寄了這篇訊息。';

// Reporting messages.
$txt['pm_report_to_admin'] = '向管理員檢舉';
$txt['pm_report_title'] = '檢舉訊息';
$txt['pm_report_desc'] = '這裡可以讓您向管理員檢舉不當的私人訊息。請提供檢舉的理由，它會連帶訊息一起寄給管理員。';
$txt['pm_report_admins'] = '接收檢舉信件的管理員';
$txt['pm_report_all_admins'] = '寄給全部的管理員';
$txt['pm_report_reason'] = '檢舉的理由';
$txt['pm_report_message'] = '檢舉訊息';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[檢舉] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} 檢舉了下面的私人訊息，寄件人是 {SENDER}，理由是：';
$txt['pm_report_pm_other_recipients'] = '其它收件人包括：';
$txt['pm_report_pm_hidden'] = '%d 秘密收件人';
$txt['pm_report_pm_unedited_below'] = '下面是被檢舉的原來訊息：';
$txt['pm_report_pm_sent'] = '寄給：';

$txt['pm_report_done'] = '謝謝您檢舉這封訊息。管理員會在跟您聯絡';
$txt['pm_report_return'] = '回到收件匣';

$txt['pm_search_title'] = '搜尋私人訊息';
$txt['pm_search_bar_title'] = '搜尋文章';
$txt['pm_search_text'] = '搜尋';
$txt['pm_search_go'] = '搜尋';
$txt['pm_search_advanced'] = '進階搜尋';
$txt['pm_search_user'] = '依照會員';
$txt['pm_search_match_all'] = '包含完整字詞';
$txt['pm_search_match_any'] = '包含任何字詞';
$txt['pm_search_options'] = '選項';
$txt['pm_search_post_age'] = '年齡';
$txt['pm_search_show_complete'] = '顯示完整訊息。';
$txt['pm_search_subject_only'] = '搜尋標題和作者。';
$txt['pm_search_between'] = '這段時間之內';
$txt['pm_search_between_and'] = '天和到';
$txt['pm_search_between_days'] = '天';
$txt['pm_search_order'] = '搜尋順序';
$txt['pm_search_choose_label'] = '選擇要搜尋的標籤，或搜尋全部';

$txt['pm_search_results'] = '搜尋結果';
$txt['pm_search_none_found'] = '沒有結果';

$txt['pm_search_orderby_relevant_first'] = '最相關的結果最先';
$txt['pm_search_orderby_recent_first'] = '最新的結果最先';
$txt['pm_search_orderby_old_first'] = '最舊的結果最先';

$txt['pm_visual_verification_label'] = '驗證';
$txt['pm_visual_verification_desc'] = '請輸入圖片內顯示的驗證碼。';
$txt['pm_visual_verification_listen'] = '聽取驗證碼';

?>