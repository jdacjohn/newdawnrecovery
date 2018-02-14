<?php
// Version: 1.1; PersonalMessage

$txt[143] = '站内短信首页';
$txt[148] = '发送短信';
$txt[150] = '收件者';
$txt[1502] = '副本';
$txt[316] = '收件箱';
$txt[320] = '发件箱';
$txt[321] = '新短信';
$txt[411] = '删除短信';
// Don't translate "PMBOX" in this string.
$txt[412] = '删除站内短信信箱里的全部短信';
$txt[413] = '确定要删除全部的短信吗？';
$txt[535] = '收件者';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = '新站内短信：SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = '您收到 SENDER 发给您的站内短信，在 ' . $context['forum_name'] . ' 论坛。' . "\n\n" . '注意：这只是通知信件，请不要回复到这个邮件信箱。' . "\n\n" . '您收到的短信是：' . "\n\n" . 'MESSAGE';
$txt[748] = '(多位收件者：\'帐号1, 帐号2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = '在这里回复站内短信：';

$txt['smf249'] = '确定要删除全部选择的站内短信吗？';

$txt['sent_to'] = '发给';
$txt['reply_to_all'] = '回复所有人';

$txt['pm_capacity'] = '容量';
$txt['pm_currently_using'] = '%s 篇短信，最多可容纳%s%% 篇。';

$txt['pm_error_user_not_found'] = '找不到会员 \'%s\'。';
$txt['pm_error_ignored_by_user'] = '会员 \'%s\' 禁止您发的站内短信。';
$txt['pm_error_data_limit_reached'] = '短信无法发给 \'%s\' 因为对方的短信信箱容量已满！';
$txt['pm_successfully_sent'] = '短信成功发给 \'%s\'.';
$txt['pm_too_many_recipients'] = '你不能一次发送给超过 %d 个收件人。';
$txt['pm_too_many_per_hour'] = '你超过了每小时 %d 条短信的限制';
$txt['pm_send_report'] = '发传检举信件';
$txt['pm_save_outbox'] = '保存草稿到发件箱';
$txt['pm_undisclosed_recipients'] = '秘密收件人';

$txt['pm_read'] = '阅读';
$txt['pm_replied'] = '回复给';

// Message Pruning.
$txt['pm_prune'] = '删除短信';
$txt['pm_prune_desc1'] = '删除超过日期的短信';
$txt['pm_prune_desc2'] = '天。';
$txt['pm_prune_warning'] = '确定要删除您的站内短信吗？';

// Actions Drop Down.
$txt['pm_actions_title'] = '额外动作';
$txt['pm_actions_delete_selected'] = '删除选项';
$txt['pm_actions_filter_by_label'] = '过滤标签';
$txt['pm_actions_go'] = '继续';

// Manage Labels Screen.
$txt['pm_apply'] = '套用';
$txt['pm_manage_labels'] = '管理标签';
$txt['pm_labels_delete'] = '确定要删除选择的标签吗？';
$txt['pm_labels_desc'] = '这里可以让您新增，编辑和删除站内短信的标签。';
$txt['pm_label_add_new'] = '新增标签';
$txt['pm_label_name'] = '标签名称';
$txt['pm_labels_no_exist'] = '您目前没有任何标签！';

// Labeling Drop Down.
$txt['pm_current_label'] = '标签';
$txt['pm_msg_label_title'] = '标签名称';
$txt['pm_msg_label_apply'] = '新增标签';
$txt['pm_msg_label_remove'] = '移除标签';
$txt['pm_msg_label_inbox'] = '收件箱';
$txt['pm_sel_label_title'] = '选择的标签';
$txt['labels_too_many'] = '抱歉，%s条短信已达到可有标签数量的极限！';

// Sidebar Headings.
$txt['pm_labels'] = '标签';
$txt['pm_messages'] = '短信';
$txt['pm_preferences'] = '偏好设定';

$txt['pm_is_replied_to'] = '您已经回复或转发了这篇短信。';

// Reporting messages.
$txt['pm_report_to_admin'] = '向管理员检举';
$txt['pm_report_title'] = '检举短信';
$txt['pm_report_desc'] = '这里可以让您向管理员检举不当的站内短信。请提供检举的理由，它会连带短信一起发给管理员。';
$txt['pm_report_admins'] = '接收检举信件的管理员';
$txt['pm_report_all_admins'] = '发给全部的管理员';
$txt['pm_report_reason'] = '检举的理由';
$txt['pm_report_message'] = '检举短信';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[检举] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} 检举了下面的站内短信，发件人是 {SENDER}，理由是：';
$txt['pm_report_pm_other_recipients'] = '其它收件人包括：';
$txt['pm_report_pm_hidden'] = '%d 秘密收件人';
$txt['pm_report_pm_unedited_below'] = '下面是被检举的原来短信：';
$txt['pm_report_pm_sent'] = '发给：';

$txt['pm_report_done'] = '谢谢您检举这封短信。管理员也许会就此事与您联络';
$txt['pm_report_return'] = '回到收件箱';

$txt['pm_search_title'] = '搜索站内短信';
$txt['pm_search_bar_title'] = '搜寻短信';
$txt['pm_search_text'] = '搜索';
$txt['pm_search_go'] = '搜索';
$txt['pm_search_advanced'] = '高级搜索';
$txt['pm_search_user'] = '按会员';
$txt['pm_search_match_all'] = '包含完整字词';
$txt['pm_search_match_any'] = '包含任何字词';
$txt['pm_search_options'] = '选项';
$txt['pm_search_post_age'] = '年龄';
$txt['pm_search_show_complete'] = '显示完整短信。';
$txt['pm_search_subject_only'] = '搜索标题和作者。';
$txt['pm_search_between'] = '这段时间之内';
$txt['pm_search_between_and'] = '和';
$txt['pm_search_between_days'] = '天';
$txt['pm_search_order'] = '搜索顺序';
$txt['pm_search_choose_label'] = '选择要搜寻的标签，或搜寻全部';

$txt['pm_search_results'] = '搜寻结果';
$txt['pm_search_none_found'] = '没有结果';

$txt['pm_search_orderby_relevant_first'] = '最相关的结果最先';
$txt['pm_search_orderby_recent_first'] = '最新的结果最先';
$txt['pm_search_orderby_old_first'] = '最旧的结果最先';

$txt['pm_visual_verification_label'] = '验证码';
$txt['pm_visual_verification_desc'] = '请输入上面的验证码来确认发送';
$txt['pm_visual_verification_listen'] = '收听图片上的字母';

?>