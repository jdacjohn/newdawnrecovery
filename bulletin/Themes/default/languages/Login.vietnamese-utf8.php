<?php
// Version: 1.1.2; Login

$txt[37] = 'Bạn phải điền tên truy nhập.';
$txt[38] = 'Bạn chưa nhập mật khẩu.';
$txt[39] = 'Mật khẩu không đúng rùi';
$txt[98] = 'Chọn tên truy nhập';
$txt[155] = 'Chế độ bảo trì';
$txt[245] = 'Đăng ký thành công';
$txt[431] = 'Giờ bạn đã là thành viên của diễn đàn.';
// Use numeric entities in the below string.
$txt[492] = 'và mật khẩu là';
$txt[500] = 'Vui lòng nhập email hợp lệ, %s.';
$txt[517] = 'Thông tin cần thiết';
$txt[520] = 'Được sử dụng để SMF nhận diện.';
$txt[585] = 'Đồng ý';
$txt[586] = 'Không chơi';
$txt[633] = 'Cảnh báo!';
$txt[634] = 'Chỉ thành viên đăng ký mới được truy cập khu vực này.';
$txt[635] = 'Vui lòng đăng nhập hoặc';
$txt[636] = 'đăng ký thành viên';
$txt[637] = 'với ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Bạn có thể thay đổi sau khi đăng nhập và vào hồ sơ cá nhân:';
$txt[719] = 'Tên truy nhập: ';
$txt[730] = 'Địa chỉ email (%s) đã được sử dụng. Nếu bạn đã đăng ký và quên bạn có thể vào trang đăng nhập và sử dụng chức năng quên mật khẩu.';

$txt['login_hash_error'] = 'Hệ thống bảo vệ mật khẩu mới nâng cấp. Vui lòng nhập lại mật khẩu.';

$txt['register_age_confirmation'] = 'Tôi đã trên %d tuổi';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Chào mừng bạn tham gia ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Bạn đã đăng ký thành viên tại' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Tên truy nhập là %2$s và mật khẩu là %3$s.' . "\n\n" . 'Bạn có thể thay đổi sau khi đăng nhập và vào hồ sơ cá nhân tại:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Bạn đã đăng ký thành viên tại ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Tên truy nhập là %2$s và mật khẩu là %3$s (Bạn có thể thay đổi sau.)' . "\n\n" . 'Trước khi đăng nhập bạn phải kích hoạt tài khỏan. Để kích hoạt xin click vào:' . "\n\n" . '%5$s' . "\n\n" . 'Nếu bạn gặp vấn đề khi kích hoạt sử dụng mã sau "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Yêu cầu đăng ký tại ' . $context['forum_name'] . ' đã được nhận, %1$s.' . "\n\n" . 'Tên truy nhập là %2$s và mật khẩu là %3$s.' . "\n\n" . 'Trước khi tham gia diễn đàn, Yêu cầu của bạn sẽ được duyệt.  KHi duyệt xong bạn sẽ nhận được email.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Bạn đã đăng ký thành viên tại ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Tên truy nhập là "%2$s".' . "\n\n" . 'Trước khi đăng nhập bạn phải kích hoạt tài khỏan. Để kích hoạt xin click vào:' . "\n\n" . '%4$s' . "\n\n" . 'Nếu bạn gặp vấn đề khi kích hoạt sử dụng mã sau "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Yêu cầu đăng ký tại ' . $context['forum_name'] . ' đã được nhận, %1$s.' . "\n\n" . 'Tên truy nhập là  %2$s.' . "\n\n" . 'Trước khi tham gia diễn đàn, Yêu cầu của bạn sẽ được duyệt.  KHi duyệt xong bạn sẽ nhận được email.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Bạn không được đăng ký tại diễn đàn này.';
$txt['under_age_registration_prohibited'] = 'Bạn chưa đủ %d tuổi để đăng ký.';

$txt['activate_account'] = 'Kích hoạt tài khoản';
$txt['activate_success'] = 'Kích hoạt tài khoản. Bạn có thể đăng nhập';
$txt['activate_not_completed1'] = 'Email của bạn phải được xác nhận.';
$txt['activate_not_completed2'] = 'Gửi mail kích hoạt khác?';
$txt['activate_after_registration'] = 'Cảm ơn bạn đã đăng ký. Bạn sẽ nhận được email kích hoạt tài khoản.  Nếu không thấy hãy thử check thư rác .';
$txt['invalid_userid'] = 'Tên truy nhập không tồn tại';
$txt['invalid_activation_code'] = 'Không đúng mã kích hoạt';
$txt['invalid_activation_username'] = 'Tên truy nhập hoặc email';
$txt['invalid_activation_new'] = 'Nếu bạn đăng ký nhầm địa chỉ mail. Nhập địa chỉ mới và mật khẩu tại đây.';
$txt['invalid_activation_new_email'] = 'Email mới';
$txt['invalid_activation_password'] = 'Mật khẩu cũ';
$txt['invalid_activation_resend'] = 'Gửi mã kích hoạt';
$txt['invalid_activation_known'] = 'Nếu bạn có mã kích hoạt. Nhập vào đây.';
$txt['invalid_activation_retry'] = 'Mã kích hoạt';
$txt['invalid_activation_submit'] = 'Kích hoạt';

$txt['coppa_not_completed1'] = 'The administrator has still not received parent/guardian consent for your account.';
$txt['coppa_not_completed2'] = 'Need more details?';

$txt['awaiting_delete_account'] = 'Tài khỏan của bạn đã đánh dấu xóa!<br />Nếu bạn muốn lấy lại, chọn &quot;Kích hoạt lại tài khoản&quot; , và đăng nhập lại.';
$txt['undelete_account'] = 'Kích hoạt lại tài khoản';

$txt['change_email_success'] = 'Bạn đã đổi email. Bạn kiểm tra email mới và kích hoạt.';
$txt['resend_email_success'] = 'Email kích hoạt đã được gửi.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Mật khẩu mới:';
$txt['change_password_1'] = 'Thông tin đăng nhập của bạn tại';
$txt['change_password_2'] = 'Đã thay đổi và đây là thông tin mới.';

$txt['maintenance3'] = 'Diễn đàn đang được bảo trì.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Vui lòng đọc và đồng ý các điều khoản trước khi đăng ký.';
$txt['register_passwords_differ_js'] = 'Hai mật khẩu không giống nhau!';

$txt['approval_after_registration'] = 'Cảm ơn bạn đã đăng ký. Ban quản trị sẽ duyệt thông tin của bạn, và bạn sẽ nhận được email khi duyệt xong.';

$txt['admin_settings_desc'] = 'Cấu hình về đăng ký thành viên ở đây.';

$txt['admin_setting_registration_method'] = 'Cấu hình đăng ký thành viên';
$txt['admin_setting_registration_disabled'] = 'Không cho đăng ký';
$txt['admin_setting_registration_standard'] = 'Đăng ký nhanh';
$txt['admin_setting_registration_activate'] = 'Thành viên phải kích hoạt tài khoản';
$txt['admin_setting_registration_approval'] = 'Phải được duyệt';
$txt['admin_setting_notify_new_registration'] = 'Thông báo quản trị khi có thành viên đăng ký';
$txt['admin_setting_send_welcomeEmail'] = 'Gửi mail chúc mừng tham gia tới thành viên mới';

$txt['admin_setting_password_strength'] = 'Yêu cầu độ dài mật khẩu';
$txt['admin_setting_password_strength_low'] = 'Ít nhất 4 kí tự';
$txt['admin_setting_password_strength_medium'] = 'Không được chứa tên truy nhập';
$txt['admin_setting_password_strength_high'] = 'Tổ hợp các kí tự';

$txt['admin_setting_image_verification_type'] = 'Complexity of visual verification image';
$txt['admin_setting_image_verification_type_desc'] = 'The more complex the image the harder it is for bots to bypass';
$txt['admin_setting_image_verification_off'] = 'Disabled';
$txt['admin_setting_image_verification_vsimple'] = 'Very Simple - Plain text on image';
$txt['admin_setting_image_verification_simple'] = 'Simple - Overlapping coloured letters, no noise';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlapping coloured letters, with noise';
$txt['admin_setting_image_verification_high'] = 'High - Angled letters, considerable noise';
$txt['admin_setting_image_verification_sample'] = 'Sample';
$txt['admin_setting_image_verification_nogd'] = '<b>Note:</b> as this server does not have the GD library installed the different complexity settings will have no effect.';

$txt['admin_setting_coppaAge'] = 'Tuổi đăng ký';
$txt['admin_setting_coppaAge_desc'] = '(Để 0 thì không xét)';
$txt['admin_setting_coppaType'] = 'Khi người chưa đủ tuổi đăng ký';
$txt['admin_setting_coppaType_reject'] = 'Từ chối';
$txt['admin_setting_coppaType_approval'] = 'Cần người lớn bảo lãnh';
$txt['admin_setting_coppaPost'] = 'Địa chỉ gửi thư bảo lãnh';
$txt['admin_setting_coppaPost_desc'] = 'Chỉ áp dụng cho trường hợp dưới tuổi cùng khu vực';
$txt['admin_setting_coppaFax'] = 'Số fax để gửi fax bảo lãnh';
$txt['admin_setting_coppaPhone'] = 'Số ĐT liên hệ';
$txt['admin_setting_coppa_require_contact'] = 'Bạn phải nhập địa chỉ hoặc số fax.';

$txt['admin_register'] = 'Đăng ký thành viên mới';
$txt['admin_register_desc'] = 'Bạn có thể đăng ký thành viên tại đây. Sau đó có thể gửi mail chi tiết cho họ.';
$txt['admin_register_username'] = 'Tên truy nhập';
$txt['admin_register_email'] = 'Email';
$txt['admin_register_password'] = 'Mật khẩu';
$txt['admin_register_username_desc'] = 'Tên truy nhập';
$txt['admin_register_email_desc'] = 'Email';
$txt['admin_register_password_desc'] = 'Mật khẩu';
$txt['admin_register_email_detail'] = 'Gửi mật khẩu cho thành viên qua mail';
$txt['admin_register_email_detail_desc'] = 'Phải có Email';
$txt['admin_register_email_activate'] = 'Thành viên phải kích hoạt tài khỏan';
$txt['admin_register_group'] = 'Nhóm thành viên';
$txt['admin_register_group_desc'] = 'Nhóm thành viên của thành viên mới';
$txt['admin_register_group_none'] = '(không thuộc nhóm nào)';
$txt['admin_register_done'] = 'Thành viên %s đã được đăng ký!';

$txt['admin_browse_register_new'] = 'Đăng ký thành viên mới';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Một thành viên mới tham gia';
$txt['admin_notify_profile'] = '%s mới tham gia. Click vào liên kết dưới đây để xem hồ sơ.';
$txt['admin_notify_approval'] = 'Trước khi gửi bài, thành viên này phải được duyệt. Click vào liên kết dưới đây để duyệt.';

$txt['coppa_title'] = 'Giới hạn tuổi';
$txt['coppa_after_registration'] = 'Cảm ơn bạn đã đăng ký ' . $context['forum_name'] . '.<br /><br />Vì bạn chưa đủ {MINIMUM_AGE} tuổi, Nên phải có người bảo lãnh. Vui lòng In văn bản dưới đây:';
$txt['coppa_form_link_popup'] = 'Văn bản bảo lãnh';
$txt['coppa_form_link_download'] = 'Download văn bản';
$txt['coppa_send_to_one_option'] = 'Nhờ người bảo lãnh điền vào văn bản và gửi:';
$txt['coppa_send_to_two_options'] = 'Nhờ người bảo lãnh điền vào văn bản và gửi:';
$txt['coppa_send_by_post'] = 'Bằng thư tới địa chủ:';
$txt['coppa_send_by_fax'] = 'Fax tới số sau:';
$txt['coppa_send_by_phone'] = 'Hoặc gọi cho ban quản trị số {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Văn bản cho phép đăng ký tại ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Địa chỉ';
$txt['coppa_form_date'] = 'Ngày';
$txt['coppa_form_body'] = 'Tôi {PARENT_NAME},<br /><br />Cho phép {CHILD_NAME} đăng ký thành viên tại: ' . $context['forum_name'] . ', với tên tru nhập: {USER_NAME}.<br /><br /><br /><br />Ký tên:<br />{PARENT_NAME} .';

$txt['visual_verification_label'] = 'Xác nhận hình ảnh';
$txt['visual_verification_description'] = 'Nhập ký tự bạn thấy';
$txt['visual_verification_sound'] = 'Nghe';
$txt['visual_verification_sound_again'] = 'Nghe lại';
$txt['visual_verification_sound_close'] = 'Đóng cửa sổ';
$txt['visual_verification_request_new'] = 'Gửi hình khác';
$txt['visual_verification_sound_direct'] = 'Không nghe được?  Thử download về.';

?>