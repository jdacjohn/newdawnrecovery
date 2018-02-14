<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'אינדקס הודעות אישיות';
$txt[148] = 'שליחת הודעה';
$txt[150] = 'אל';
$txt[1502] = 'נוספים';
$txt[316] = 'דואר נכנס';
$txt[320] = 'דואר יוצא';
$txt[321] = 'הודעה חדשה';
$txt[411] = 'מחיקת הודעות';
// Don't translate "PMBOX" in this string.
$txt[412] = 'מחיקת כל ההודעות ב- PMBOX שלך';
$txt[413] = 'האם אתה בטוח למחוק את כל ההודעות?';
$txt[535] = 'נמען';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'הודעה אישית חדשה: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'כרגע נשלחה אליך הודעה פרטית ע"י SENDER ב- ' . $context['forum_name'] . '.' . "\n\n" . 'חשוב: זאת רק הודעה אוטומטית. אנא אל תגיב להודעה זאת' . "\n\n" . 'הודעה ששלחו לך היא:' . "\n\n" . 'MESSAGE';
$txt[748] = '(נמענים מרובים: \'name1, name2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'הגב להודעה אישית זאת כאן:';

$txt['smf249'] = 'האם אתה בטוח שאתה רוצה למחוק את כל ההודעות אשר נבחרו?';

$txt['sent_to'] = 'נשלח אל';
$txt['reply_to_all'] = 'Reply to All';

$txt['pm_capacity'] = 'Capacity';
$txt['pm_currently_using'] = '%s messages, %s%% full.';

$txt['pm_error_user_not_found'] = 'לא היה ניתן למצוא את \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'משתמש \'%s\' חסם את ההודעה האישית שלך.';
$txt['pm_error_data_limit_reached'] = 'הודעה לא נשלחה אל \'%s\' עקב להגבלת גודל מירבי של הודעה.';
$txt['pm_successfully_sent'] = 'הודעה אישית נשלחה בהצלחה אל \'%s\'.';
$txt['pm_too_many_recipients'] = 'You may not send personal messages to more than %d recipient(s) at once.';
$txt['pm_too_many_per_hour'] = 'You have exceeded the limit of %d personal messages per hour.';
$txt['pm_send_report'] = 'שליחת דיווח';
$txt['pm_save_outbox'] = 'שמירת עותק בתיקיית הנשלחים';
$txt['pm_undisclosed_recipients'] = 'נמענים חסויים';

$txt['pm_read'] = 'Read';
$txt['pm_replied'] = 'Replied To';

// Message Pruning.
$txt['pm_prune'] = 'Prune Messages';
$txt['pm_prune_desc1'] = 'מחיקה של כל ההודעות אשר ישנות יותר מ-';
$txt['pm_prune_desc2'] = 'ימים.';
$txt['pm_prune_warning'] = 'Are you sure you wish to prune your personal messages?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Further Actions';
$txt['pm_actions_delete_selected'] = 'Delete Selected';
$txt['pm_actions_filter_by_label'] = 'Filter By Label';
$txt['pm_actions_go'] = 'Go';

// Manage Labels Screen.
$txt['pm_apply'] = 'Apply';
$txt['pm_manage_labels'] = 'Manage Labels';
$txt['pm_labels_delete'] = 'Are you sure you wish to delete the selected labels?';
$txt['pm_labels_desc'] = 'From here you can add, edit and delete the labels used in your personal message center.';
$txt['pm_label_add_new'] = 'Add New Label';
$txt['pm_label_name'] = 'Label Name';
$txt['pm_labels_no_exist'] = 'You currently have no labels setup!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Label';
$txt['pm_msg_label_title'] = 'Label Message';
$txt['pm_msg_label_apply'] = 'Add Label';
$txt['pm_msg_label_remove'] = 'Remove Label';
$txt['pm_msg_label_inbox'] = 'Inbox';
$txt['pm_sel_label_title'] = 'Label Selected';
$txt['labels_too_many'] = 'Sorry, %s messages already had the maximum amount of labels allowed!';

// Sidebar Headings.
$txt['pm_labels'] = 'Labels';
$txt['pm_messages'] = 'Messages';
$txt['pm_preferences'] = 'Preferences';

$txt['pm_is_replied_to'] = 'You have forwarded or responded to this message.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Report To Admin';
$txt['pm_report_title'] = 'Report Personal Message';
$txt['pm_report_desc'] = 'From this page you can report the personal message you received to the admin team of the forum. Please be sure to include a description of why you are reporting the message, as this will be sent along with the contents of the original message.';
$txt['pm_report_admins'] = 'Administrator to send report to';
$txt['pm_report_all_admins'] = 'Send to all forum administrators';
$txt['pm_report_reason'] = 'Reason why you are reporting this message';
$txt['pm_report_message'] = 'Report Message';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} has reported the below personal message, sent by {SENDER}, for the following reason:';
$txt['pm_report_pm_other_recipients'] = 'Other recipients of the message include:';
$txt['pm_report_pm_hidden'] = '%d hidden recipient(s)';
$txt['pm_report_pm_unedited_below'] = 'Below are the original contents of the personal message which was reported:';
$txt['pm_report_pm_sent'] = 'Sent:';

$txt['pm_report_done'] = 'Thank you for submitting this report. You should hear back from the admin team shortly';
$txt['pm_report_return'] = 'Return to the inbox';

$txt['pm_search_title'] = 'Search Personal Messages';
$txt['pm_search_bar_title'] = 'Search Messages';
$txt['pm_search_text'] = 'Search for';
$txt['pm_search_go'] = 'Search';
$txt['pm_search_advanced'] = 'Advanced search';
$txt['pm_search_user'] = 'by user';
$txt['pm_search_match_all'] = 'Match all words';
$txt['pm_search_match_any'] = 'Match any words';
$txt['pm_search_options'] = 'Options';
$txt['pm_search_post_age'] = 'Age';
$txt['pm_search_show_complete'] = 'Show full message in results.';
$txt['pm_search_subject_only'] = 'Search by subject and author only.';
$txt['pm_search_between'] = 'Between';
$txt['pm_search_between_and'] = 'and';
$txt['pm_search_between_days'] = 'days';
$txt['pm_search_order'] = 'Order results by';
$txt['pm_search_choose_label'] = 'Choose labels to search by, or search all';

$txt['pm_search_results'] = 'Search Results';
$txt['pm_search_none_found'] = 'No Messages Found';

$txt['pm_search_orderby_relevant_first'] = 'Most relevant first';
$txt['pm_search_orderby_recent_first'] = 'Most recent first';
$txt['pm_search_orderby_old_first'] = 'Oldest first';

$txt['pm_visual_verification_label'] = 'Verification';
$txt['pm_visual_verification_desc'] = 'Please enter the code in the image above to send this pm.';
$txt['pm_visual_verification_listen'] = 'Listen to the Letters';

?>