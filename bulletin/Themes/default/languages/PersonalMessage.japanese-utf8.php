<?php
// Version: 1.1; PersonalMessage

$txt[143] = '個人メッセージ一覧';
$txt[148] = 'メッセージ送信';
$txt[150] = '宛先';
$txt[1502] = 'BCC';
$txt[316] = '受信箱';
$txt[320] = '送信箱';
$txt[321] = 'メッセージを送る';
$txt[411] = 'メッセージを削除する';
// Don't translate "PMBOX" in this string.
$txt[412] = 'PMBOX のすべてのメッセージを削除';
$txt[413] = 'すべてのメッセージを削除してもよろしいですか？';
$txt[535] = '送信先';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = $context['forum_name'] . 'からのメッセージが届いています： SUBJECT ';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = '"(DATE) SENDER さんは、次のメッセージをあなた宛てに送ってきました：\\n\\nMESSAGE"';
$txt[748] = '（\'name1, name2\'というように送信先を増やせます）';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'この個人メッセージへの返信先：';

$txt['smf249'] = '選択されたメッセージを削除してもいいですか？';

$txt['sent_to'] = '送信先';
$txt['reply_to_all'] = 'すべてに返信';

$txt['pm_capacity'] = '容量';
$txt['pm_currently_using'] = '%sのメッセージがあります。%s%% full.';

$txt['pm_error_user_not_found'] = '「%s」というメンバーは見つかりませんでした。';
$txt['pm_error_ignored_by_user'] = '%sさんは、あなたからのメッセージを拒否しています。';
$txt['pm_error_data_limit_reached'] = '%sさんに、個人メッセージは送られませんでした。受信箱がいっぱいになっています。';
$txt['pm_successfully_sent'] = 'あなたからの個人メッセージは%sさんへ無事送られました。';
$txt['pm_too_many_recipients'] = 'You may not send personal messages to more than %d recipient(s) at once.';
$txt['pm_too_many_per_hour'] = 'You have exceeded the limit of %d personal messages per hour.';
$txt['pm_send_report'] = '送信レポート';
$txt['pm_save_outbox'] = '送信箱に保存する';
$txt['pm_undisclosed_recipients'] = '明かされていない受取人';

$txt['pm_read'] = '読む';
$txt['pm_replied'] = '返信先';

// Message Pruning.
$txt['pm_prune'] = '古いメッセージ';
$txt['pm_prune_desc1'] = '';
$txt['pm_prune_desc2'] = '日以上経過したメッセージを削除する。';
$txt['pm_prune_warning'] = '古いメッセージを削除してもいいですか？';

// Actions Drop Down.
$txt['pm_actions_title'] = '他のアクション';
$txt['pm_actions_delete_selected'] = '選択を削除';
$txt['pm_actions_filter_by_label'] = 'ラベルをフィルタに';
$txt['pm_actions_go'] = '実行';

// Manage Labels Screen.
$txt['pm_apply'] = '実行';
$txt['pm_manage_labels'] = 'ラベル管理';
$txt['pm_labels_delete'] = '選択されたラベルを削除してもいいですか？';
$txt['pm_labels_desc'] = 'ここから、あなたの個人のメッセージ画面で使用するラベルを追加したり編集したり削除することができます。';
$txt['pm_label_add_new'] = '新規ラベル作成';
$txt['pm_label_name'] = 'ラベル名';
$txt['pm_labels_no_exist'] = '現在ラベル設定はありません！';

// Labeling Drop Down.
$txt['pm_current_label'] = 'ラベル';
$txt['pm_msg_label_title'] = 'ラベルメッセージ';
$txt['pm_msg_label_apply'] = 'ラベル追加';
$txt['pm_msg_label_remove'] = 'ラベル削除';
$txt['pm_msg_label_inbox'] = '受信箱';
$txt['pm_sel_label_title'] = 'ラベルを選択';
$txt['labels_too_many'] = 'Sorry, %s messages already had the maximum amount of labels allowed!';

// Sidebar Headings.
$txt['pm_labels'] = 'ラベル';
$txt['pm_messages'] = 'メッセージ';
$txt['pm_preferences'] = '初期設定';

$txt['pm_is_replied_to'] = 'You have forwarded or responded to this message.';

// Reporting messages.
$txt['pm_report_to_admin'] = '管理人に報告';
$txt['pm_report_title'] = '個人メッセージの報告';
$txt['pm_report_desc'] = 'From this page you can report the personal message you received to the admin team of the forum. Please be sure to include a description of why you are reporting the message, as this will be sent along with the contents of the original message.';
$txt['pm_report_admins'] = 'Administrator to send report to';
$txt['pm_report_all_admins'] = 'すべてのフォーラム管理人に送信する';
$txt['pm_report_reason'] = 'メッセージ報告の理由';
$txt['pm_report_message'] = 'メッセージ報告';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} has reported the below personal message, sent by {SENDER}, for the following reason:';
$txt['pm_report_pm_other_recipients'] = 'Other recipients of the message include:';
$txt['pm_report_pm_hidden'] = '%d hidden recipient(s)';
$txt['pm_report_pm_unedited_below'] = 'Below is the original contents of the personal message being reported:';
$txt['pm_report_pm_sent'] = 'Sent:';

$txt['pm_report_done'] = 'Thank you for submitting this report. You should hear back from the admin team shortly';
$txt['pm_report_return'] = '受信箱に戻る';

$txt['pm_search_title'] = '個人メッセージを検索';
$txt['pm_search_bar_title'] = 'メッセージの検索';
$txt['pm_search_text'] = '以下を検索';
$txt['pm_search_go'] = '検索';
$txt['pm_search_advanced'] = '詳細検索';
$txt['pm_search_user'] = 'ユーザーで';
$txt['pm_search_match_all'] = 'どの語にも一致（AND）';
$txt['pm_search_match_any'] = 'いずれかの語に一致（OR）';
$txt['pm_search_options'] = 'オプション';
$txt['pm_search_post_age'] = '年齢';
$txt['pm_search_show_complete'] = '検索結果にメッセージの内容をすべて表示する';
$txt['pm_search_subject_only'] = 'メンバー名と題名のみを検索する';
$txt['pm_search_between'] = '';
$txt['pm_search_between_and'] = '～';
$txt['pm_search_between_days'] = '日間';
$txt['pm_search_order'] = '表示順';
$txt['pm_search_choose_label'] = '検索するラベルを指定してください。未指定の場合すべての掲示板から検索します。';

$txt['pm_search_results'] = '検索結果';
$txt['pm_search_none_found'] = 'メッセージは見つかりませんでした。';

$txt['pm_search_orderby_relevant_first'] = 'Most revelant first';
$txt['pm_search_orderby_recent_first'] = '新しい順';
$txt['pm_search_orderby_old_first'] = '古い順';

$txt['pm_visual_verification_label'] = 'Verification';
$txt['pm_visual_verification_desc'] = 'Please enter the code in the image above to send this pm.';
$txt['pm_visual_verification_listen'] = 'Listen to the Letters';

?>