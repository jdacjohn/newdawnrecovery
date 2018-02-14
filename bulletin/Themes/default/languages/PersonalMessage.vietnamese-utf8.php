<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Tin nhắn cá nhân';
$txt[148] = 'Gửi tin nhắn';
$txt[150] = 'Gửi tới';
$txt[1502] = 'Bcc';
$txt[316] = 'Hộp thư đến';
$txt[320] = 'Hộp thư đi';
$txt[321] = 'Gửi tin nhắn';
$txt[411] = 'Xóa tin nhắn';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Xóa tất cả tin nhắn';
$txt[413] = 'Xác nhận xóa?';
$txt[535] = 'Người nhận';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Tiêu đề';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Bạn có tin nhắn được gửi bởi SENDER trên ' . $context['forum_name'] . '.' . "\n\n" . 'Đây chỉ là email thông báo. Vui lòng không trả lời email này.' . "\n\n" . 'Tin nhắn bạn nhận là:' . "\n\n" . 'MESSAGE';
$txt[748] = '(gửi nhiều người: \'tên1, tên2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Trả lời tin nhắn:';

$txt['smf249'] = 'Xác nhận xóa?';

$txt['sent_to'] = 'Gửi tới';
$txt['reply_to_all'] = 'Trả lời tất cả';

$txt['pm_capacity'] = 'Dung lượng';
$txt['pm_currently_using'] = '%s tin nhẵn, %s%% đầy.';

$txt['pm_error_user_not_found'] = 'Không tìm thấy thành viên \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Thành viên \'%s\' khóa không nhận tin nhắn từ bạn.';
$txt['pm_error_data_limit_reached'] = 'Tin nhắn không gửi được cho \'%s\' vì hộp thư đến của họ đã đầy!';
$txt['pm_successfully_sent'] = 'Đã gửi tin nhắn tới \'%s\'.';
$txt['pm_too_many_recipients'] = 'Không gửi tin nhắn cho %d người nhận cùng lúc.';
$txt['pm_too_many_per_hour'] = 'You have exceeded the limit of %d personal messages per hour.';
$txt['pm_send_report'] = 'Gửi báo cáo';
$txt['pm_save_outbox'] = 'Lưu 1 bản trong hộp thư đi';
$txt['pm_undisclosed_recipients'] = 'Thành viên ẩn';

$txt['pm_read'] = 'Đọc';
$txt['pm_replied'] = 'Trả lời';

// Message Pruning.
$txt['pm_prune'] = 'Dọn dẹp';
$txt['pm_prune_desc1'] = 'Xóa các tin nhắn cũ hơn';
$txt['pm_prune_desc2'] = 'ngày.';
$txt['pm_prune_warning'] = 'Bạn có muốn dọn dẹp hộp thư?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Các thao tác khác';
$txt['pm_actions_delete_selected'] = 'Xóa các tin nhắn đã chọn';
$txt['pm_actions_filter_by_label'] = 'Lọc theo nhãn';
$txt['pm_actions_go'] = 'Go';

// Manage Labels Screen.
$txt['pm_apply'] = 'Áp dụng';
$txt['pm_manage_labels'] = 'Quản lý nhãn';
$txt['pm_labels_delete'] = 'Xác nhận xóa nhãn?';
$txt['pm_labels_desc'] = 'Mục này bạn có thể thêm, xóa, sửa các nhãn cho tin nhắn.';
$txt['pm_label_add_new'] = 'Thêm nhãn';
$txt['pm_label_name'] = 'Tên';
$txt['pm_labels_no_exist'] = 'Không có nhãn nào!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Nhãn';
$txt['pm_msg_label_title'] = 'Gắn nhãn';
$txt['pm_msg_label_apply'] = 'Thêm nhãn';
$txt['pm_msg_label_remove'] = 'Xóa nhãn';
$txt['pm_msg_label_inbox'] = 'Hộp thư đến';
$txt['pm_sel_label_title'] = 'Gắn nhãn cho tin nhắn đã chọn';
$txt['labels_too_many'] = '%s tin nhắn đã sử dụng tối đa nhãn!';

// Sidebar Headings.
$txt['pm_labels'] = 'Nhãn';
$txt['pm_messages'] = 'Tin nhắn';
$txt['pm_preferences'] = 'Tùy chọn';

$txt['pm_is_replied_to'] = 'Bạn đã trả lời hoặc chuyển tiếp tin nhắn này.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Báo cáo với ban quản trị';
$txt['pm_report_title'] = 'Than phiền về tin nhắn';
$txt['pm_report_desc'] = 'Mục này bạn có thể than phiền với ban quản trị về tin nhắn của bạn';
$txt['pm_report_admins'] = 'Gửi tới quản trị viên';
$txt['pm_report_all_admins'] = 'Gửi tới tất cả quản trị viên';
$txt['pm_report_reason'] = 'Lý do';
$txt['pm_report_message'] = 'Báo cáo tin nhắn';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} has reported the below personal message, sent by {SENDER}, for the following reason:';
$txt['pm_report_pm_other_recipients'] = 'Other recipients of the message include:';
$txt['pm_report_pm_hidden'] = '%d hidden recipient(s)';
$txt['pm_report_pm_unedited_below'] = 'Below are the original contents of the personal message which was reported:';
$txt['pm_report_pm_sent'] = 'Sent:';

$txt['pm_report_done'] = 'Thank you for submitting this report. You should hear back from the admin team shortly';
$txt['pm_report_return'] = 'Trở về hộp thư đến';

$txt['pm_search_title'] = 'Tìm tin nhắn';
$txt['pm_search_bar_title'] = 'Tìm tin nhắn';
$txt['pm_search_text'] = 'Tìm kiếm';
$txt['pm_search_go'] = 'Tìm kiếm';
$txt['pm_search_advanced'] = 'Tìm kiếm chi tiết';
$txt['pm_search_user'] = 'tìm theo thành viên';
$txt['pm_search_match_all'] = 'Có tất cả các từ';
$txt['pm_search_match_any'] = 'Có bất kì từ nào';
$txt['pm_search_options'] = 'Tùy chọn';
$txt['pm_search_post_age'] = 'Thời gian';
$txt['pm_search_show_complete'] = 'Hiện nội dung trong kết quả tìm kiếm.';
$txt['pm_search_subject_only'] = 'Tìm theo tiêu đề và tác giả.';
$txt['pm_search_between'] = 'khoảng';
$txt['pm_search_between_and'] = 'và';
$txt['pm_search_between_days'] = 'ngày';
$txt['pm_search_order'] = 'Sắp xếp kết quả theo';
$txt['pm_search_choose_label'] = 'Chọn nhãn để tìm, hay tìm tất cả';

$txt['pm_search_results'] = 'Kết quả tìm kiếm';
$txt['pm_search_none_found'] = 'Không tìm thấy';

$txt['pm_search_orderby_relevant_first'] = 'Có nhiều từ liên quan trước';
$txt['pm_search_orderby_recent_first'] = 'Mới nhất trước';
$txt['pm_search_orderby_old_first'] = 'Cũ nhất trước';

$txt['pm_visual_verification_label'] = 'Verification';
$txt['pm_visual_verification_desc'] = 'Please enter the code in the image above to send this pm.';
$txt['pm_visual_verification_listen'] = 'Listen to the Letters';

?>