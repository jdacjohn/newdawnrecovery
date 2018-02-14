<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'vi_VN.utf8';
$txt['lang_dictionary'] = 'vi';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Chủ nhật', 'Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy');
$txt['days_short'] = array('Chủ nhật', 'Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Tháng Giêng', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu', 'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười Một', 'Tháng Mười Hai');
$txt['months_titles'] = array(1 => 'Tháng Giêng', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu', 'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười Một', 'Tháng Mười Hai');
$txt['months_short'] = array(1 => 'Tháng Giêng', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu', 'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười Một', 'Tháng Mười Hai');

$txt['newmessages0'] = 'mới';
$txt['newmessages1'] = 'mới';
$txt['newmessages3'] = 'Mới';
$txt['newmessages4'] = ',';

$txt[2] = 'Quản trị';

$txt[10] = 'Lưu';

$txt[17] = 'Sửa';
$txt[18] = $context['forum_name'] . ' - Danh mục';
$txt[19] = 'Thành viên';
$txt[20] = 'Tên diễn đàn';
$txt[21] = 'Bài viết';
$txt[22] = 'Bài mới nhất';

$txt[24] = '(Tiêu đề)';
$txt[26] = 'Bài viết';
$txt[27] = 'Xem hồ sơ cá nhân';
$txt[28] = 'Khách';
$txt[29] = 'Tác giả';
$txt[30] = 'vào lúc';
$txt[31] = 'Xóa';
$txt[33] = 'Chủ đề mới';

$txt[34] = 'Đăng nhập';
// Use numeric entities in the below string.
$txt[35] = 'Tên truy nhập';
$txt[36] = 'Mật khẩu';

$txt[40] = 'Tên truy nhập không tồn tại.';

$txt[62] = 'Quản trị diễn đàn';
$txt[63] = 'Gỡ bỏ chủ đề';
$txt[64] = 'Chủ đề';
$txt[66] = 'Sửa tin nhắn';
$txt[68] = 'Tên';
$txt[69] = 'Email';
$txt[70] = 'Tiêu đề';
$txt[72] = 'Tin nhắn';

$txt[79] = 'Hồ sơ';

$txt[81] = 'Mật khẩu';
$txt[82] = 'Xác nhận mật khẩu';
$txt[87] = 'Chức vụ';

$txt[92] = 'Xem hồ sơ cá nhân của';
$txt[94] = 'Tổng';
$txt[95] = 'Bài viết';
$txt[96] = 'Trang web';
$txt[97] = 'Đăng ký';

$txt[101] = 'Mục lục tin nhắn';
$txt[102] = 'Tin tức';
$txt[103] = 'Trang chủ diễn đàn';

$txt[104] = 'Khóa/ Mở khóa chủ đề';
$txt[105] = 'Gửi bài';
$txt[106] = 'Server tạm thời kô thực hiện đựoc yêu cầu của bạn. Xin vui lòng thử lại hoặc liên hệ ban quản trị để được giúp đỡ!';
$txt[107] = 'lúc';
$txt[108] = 'Thoát';
$txt[109] = 'Tác giả';
$txt[110] = 'Trả lời';
$txt[111] = 'Bài mới nhất';
$txt[114] = 'Đăng nhập quản trị';
// Use numeric entities in the below string.
$txt[118] = 'Chủ đề';
$txt[119] = 'Trợ giúp';
$txt[121] = 'Xóa tin nhắn';
$txt[125] = 'Nhận thông báo';
$txt[126] = 'Bạn có muốn nhận mail thông báo khi có người trả lời chủ đề này?';
// Use numeric entities in the below string.
$txt[130] = "Chào thân ái,\n Đội ngũ " . $context['forum_name'] . '';
$txt[131] = 'Thông báo khi có trả lời';
$txt[132] = 'Chuyển chủ đề';
$txt[133] = 'Chuyển tới';
$txt[139] = 'Trang';
$txt[140] = 'Thành viên duyệt site trong ' . $modSettings['lastActive'] . ' phút qua';
$txt[144] = 'Tin nhắn cá nhân';
$txt[145] = 'Trích dẫn và trả lời';
$txt[146] = 'Trả lời';

$txt[151] = 'Không có ...';
$txt[152] = 'bạn có';
$txt[153] = 'tin nhắn';
$txt[154] = 'Xóa';

$txt[158] = 'Thành viên';
$txt[159] = 'Tin nhắn cá nhân';
$txt[160] = 'Chuyển tới';
$txt[161] = 'go';
$txt[162] = 'Bạn muốn gỡ bỏ chủ đề này?';
$txt[163] = 'Đúng';
$txt[164] = 'Không';

$txt[166] = 'Kết quả tìm kiếm';
$txt[167] = 'Hết';
$txt[170] = 'Không tìm thấy gì';
$txt[176] = 'trong';

$txt[182] = 'Tìm kiếm';
$txt[190] = 'Tất cả';

$txt[193] = 'Quay lại';
$txt[194] = 'Nhắc mật khẩu';
$txt[195] = 'Tác giả chủ đề:';
$txt[196] = 'Tiêu đề';
$txt[197] = 'Gửi bởi';
$txt[200] = 'Danh sách các thành viên có thể tìm thấy.';
$txt[201] = 'Please welcome';
$txt[208] = 'Trung tâm quản trị';
$txt[211] = 'Sửa lần cuối';
$txt[212] = 'Bạn không muốn nhận thông tin từ chủ đề này nữa?';

$txt[214] = 'Các bài viết mới';

$txt[227] = 'Địa chỉ';
$txt[231] = 'Giới tính';
$txt[233] = 'Ngày đăng ký';

$txt[234] = 'Xem các bài viết gần đây của diễn đàn này.';
$txt[235] = 'là chủ đề mới được cập nhật';

$txt[238] = 'Nam';
$txt[239] = 'Nữ';

$txt[240] = 'Tên truy nhập không hợp lệ.';

$txt['welcome_guest'] = 'Chào <b>' . $txt[28] . '</b>. Bạn có thể <a href="' . $scripturl . '?action=login">đăng nhập</a> hoặc <a href="' . $scripturl . '?action=register">đăng ký</a>.';
$txt['welcome_guest_activate'] = '<br />Hay bạn đã đăng ký nhưng quên mất <a href="' . $scripturl . '?action=activate">email kích hoạt tài khoản?</a>';
$txt['hello_member'] = 'Chào,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Chào';
$txt[247] = 'Chào';
$txt[248] = 'Chào';
$txt[249] = 'Vui lòng';
$txt[250] = 'Trở lại';
$txt[251] = 'Chọn nơi chuyển đến';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Gửi bởi';

$txt[287] = 'Smiley';
$txt[288] = 'Angry';
$txt[289] = 'Cheesy';
$txt[290] = 'Laugh';
$txt[291] = 'Sad';
$txt[292] = 'Wink';
$txt[293] = 'Grin';
$txt[294] = 'Shocked';
$txt[295] = 'Cool';
$txt[296] = 'Huh';
$txt[450] = 'Roll Eyes';
$txt[451] = 'Tongue';
$txt[526] = 'Embarrassed';
$txt[527] = 'Lips sealed';
$txt[528] = 'Undecided';
$txt[529] = 'Kiss';
$txt[530] = 'Cry';

$txt[298] = 'Quản trị';
$txt[299] = 'Các quản trị';

$txt[300] = 'Đánh dấu các chủ đề là đã đọc';
$txt[301] = 'Xem';
$txt[302] = 'Mới';

$txt[303] = 'Các thành viên';
$txt[305] = 'Xem';
$txt[307] = 'Email';

$txt[308] = 'Thành viên đang tham gia là';
$txt[309] = 'Với';
$txt[310] = 'là tổng số thành viên';
$txt[311] = 'trong';
$txt[315] = 'Quên mật khẩu?';

$txt[317] = 'Ngày';
// Use numeric entities in the below string.
$txt[318] = 'Từ';
$txt[319] = 'Tiêu đề';
$txt[322] = 'Kiểm tra tin nhắn';
$txt[324] = 'Tới';

$txt[330] = 'Chủ đề';
$txt[331] = 'Thành viên';
$txt[332] = 'Danh sách thành viên';
$txt[333] = 'Có bài viết mới';
$txt[334] = 'Không có bài viết mới';

$txt['sendtopic_send'] = 'Gửi';

$txt[371] = 'Múi giờ';
$txt[377] = 'hoặc';

$txt[398] = 'Không tìm thấy';

$txt[418] = 'Thông báo';

$txt[430] = 'Oạch %s, bạn bị cấm vô diễn đàn này!';

$txt[452] = 'Đánh dấu là đã đọc';

$txt[454] = 'Chủ đề nóng (Có hơn ' . $modSettings['hotTopicPosts'] . ' trả lời)';
$txt[455] = 'Chủ đề rất nóng (Có hơn ' . $modSettings['hotTopicVeryPosts'] . ' trả lời)';
$txt[456] = 'Chủ đề bị khóa';
$txt[457] = 'Chủ đề bình thường';
$txt['participation_caption'] = 'Chủ đề bạn tham gia';

$txt[462] = 'GO';

$txt[465] = 'In';
$txt[467] = 'Hồ sơ';
$txt[468] = 'Tóm tắt';
$txt[470] = 'N/A';
$txt[471] = 'tin nhắn';
$txt[473] = 'Tên đã được sử dụng.';

$txt[488] = 'Tổng thành viên';
$txt[489] = 'Tổng số bài';
$txt[490] = 'Tổng số chủ đề';

$txt[497] = 'Thời gian tự động thoát (phút)';

$txt[507] = 'Xem trước';
$txt[508] = 'Luôn ở trạng thái đăng nhập';

$txt[511] = 'Logged';
// Use numeric entities in the below string.
$txt[512] = 'Địa chỉ IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'gửi bởi';

$txt[578] = 'giờ';
$txt[579] = 'ngày';

$txt[581] = ', thành viên mới nhất.';

$txt[582] = 'Tìm kiếm';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hi.+Are+you+there?';
$txt[604] = 'YIM';

$txt[616] = 'Diễn đàn đang bảo trì.';

$txt[641] = 'Đọc';
$txt[642] = 'lần';

$txt[645] = 'Thống kê';
$txt[656] = 'Thành viên mới nhất';
$txt[658] = 'Tổng các nhóm diễn đàn';
$txt[659] = 'Bài viết cuối';

$txt[660] = 'Bạn có';
$txt[661] = 'Click';
$txt[662] = 'vào đây';
$txt[663] = 'để xem.';

$txt[665] = 'Tổng các diễn đàn';

$txt[668] = 'Trang để in';

$txt[679] = 'Email phải hợp lệ.';

$txt[683] = 'I am a geek!!';
$txt[685] = $context['forum_name'] . ' - Các thông tin liên quan';

$txt[707] = 'Gửi cho bạn bè';

$txt['sendtopic_title'] = 'Gửi chủ đề &quot;%s&quot; tới bạn bè.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Này %s,';
$txt['sendtopic_this_topic'] = 'Đọc cái này "%s" trên ' . $context['forum_name'] . ' nhé.  Click vào liên kết để đọc';
$txt['sendtopic_thanks'] = 'Cảm ơn';
$txt['sendtopic_sender_name'] = 'Người gửi';
$txt['sendtopic_sender_email'] = 'Email người gửi';
$txt['sendtopic_receiver_name'] = 'Người nhận';
$txt['sendtopic_receiver_email'] = 'Email người nhận';
$txt['sendtopic_comment'] = 'Thêm lời nhắn';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Lời nhắn đã được thêm vào chủ đề';

$txt[721] = 'Ẩn địa chỉ email?';

$txt[737] = 'Chọn tất cả';

// Use numeric entities in the below string.
$txt[1001] = 'Cơ sở dữ liệu tạm thời không đáp ứng yêu cầu của bạn';
$txt[1002] = 'Vui lòng thử lại. Nếu vẫn thấy lỗi vui lòng báo ban quản trị.';
$txt[1003] = 'File';
$txt[1004] = 'Dòng';
// Use numeric entities in the below string.
$txt[1005] = 'SMF phát hiện tình trạng tự động sửa chữa cơ sở dữ liệu. Nêu tình trạng này tiếp tục vui lòng liên hệ quản lý server';
$txt['database_error_versions'] = '<b>Note:</b> <em>Có thể</em> cần nâng cấp cơ sở dữ liệu. Your forum\'s files are currently at version ' . $forum_version . ', while your database is at version ' . $modSettings['smfVersion'] . '. The above error might possibly go away if you execute the latest version of upgrade.php.';
$txt['template_parse_error'] = 'Đọc template lỗi!';
$txt['template_parse_error_message'] = 'Template tạm thời bị lỗi, vui lòng thử lại. Nếu tiếp tục bị vui lòng báo ban quản trị.<br /><br />Bạn có thể thử <a href="javascript:location.reload();">vô lại trang này</a>.';
$txt['template_parse_error_details'] = 'Lỗi đọc template hay file ngôn ngữ <tt><b>%1$s</b></tt> .  Vui lòng kiểm tra và thử lại - remember, single quotes (<tt>\'</tt>) often have to be escaped with a slash (<tt>\\</tt>).  To see more specific error information from PHP, try <a href="' . $boardurl . '%1$s">accessing the file directly</a>.<br /><br />You may want to try to <a href="javascript:location.reload();">refresh this page</a> or <a href="' . $scripturl . '?theme=1">use the default theme</a>.';

$txt['smf10'] = '<b>Hôm nay</b> lúc ';
$txt['smf10b'] = '<b>Hôm qua</b> lúc ';
$txt['smf20'] = 'Tạo thăm dò ý kiến';
$txt['smf21'] = 'Câu hỏi';
$txt['smf23'] = 'Bình chọn';
$txt['smf24'] = 'Tổng số phiếu';
$txt['smf25'] = 'phím tắt: nhấn alt+s để gửi hay alt+p để xem';
$txt['smf29'] = 'Xem kết quả';
$txt['smf30'] = 'Khóa bình chọn';
$txt['smf30b'] = 'Mở khóa';
$txt['smf39'] = 'Sửa';
$txt['smf43'] = 'Thăm dò';
$txt['smf47'] = '1 Ngày';
$txt['smf48'] = '1 Tuần';
$txt['smf49'] = '1 Tháng';
$txt['smf50'] = 'Vô hạn';
$txt['smf52'] = 'Đăng nhập với Tên truy nhập, Mật khẩu và thời gian tự động thoát';
$txt['smf53'] = '1 Giờ';
$txt['smf56'] = 'Chuyển';
$txt['smf57'] = 'Mô tả lý do chuyển chủ đề.';
$txt['smf60'] = 'Bạn không đủ bài viết để sửa karma - bạn cần ít nhất ';
$txt['smf62'] = 'Sorry, bạn phải đợi trước khi lặp lại thao tác trên karma ';
$txt['smf82'] = 'Diễn đàn';
$txt['smf88'] = 'trong';
$txt['smf96'] = 'Chủ đề cần chú ý';

$txt['smf138'] = 'Xóa';

$txt['smf199'] = 'Tin nhắn cá nhân';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Các thống kê khác]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Code';
$txt['smf239'] = 'Trích dẫn từ';
$txt['smf240'] = 'Trích dẫn';

$txt['smf251'] = 'Tách chủ đề';
$txt['smf252'] = 'Trộn chủ đề';
$txt['smf254'] = 'Tiêu đề cho chủ đề mới';
$txt['smf255'] = 'Chỉ tách bài viết này.';
$txt['smf256'] = 'Tách từ bài viết này.';
$txt['smf257'] = 'Chọn bài viết để tách.';
$txt['smf258'] = 'Chủ đề mới';
$txt['smf259'] = 'Chủ đề đã được tách làm 2.';
$txt['smf260'] = 'Chủ đề gốc';
$txt['smf261'] = 'Chọn bài viết bạn muốn tách.';
$txt['smf264'] = 'Đã trộn chủ đề.';
$txt['smf265'] = 'Chủ đề mới trộn';
$txt['smf266'] = 'Chủ đề sẽ trộn';
$txt['smf267'] = 'Diễn đàn đích';
$txt['smf269'] = 'Chủ đề đích';
$txt['smf274'] = 'Trộn chủ đề lại !?';
$txt['smf275'] = 'với';
$txt['smf276'] = 'Chức năng này sẽ trộn 2 chủ đề lại. Các bài viết sẽ sắp xếp lại theo thứ tự thời gian gửi.';

$txt['smf277'] = 'Đánh dấu chủ đề cần chú ý';
$txt['smf278'] = 'Bỏ đánh dấu chủ đề cần chú ý';
$txt['smf279'] = 'Khóa chủ đề';
$txt['smf280'] = 'Mở khỏa chủ đề';

$txt['smf298'] = 'Tìm kiếm chi tiết';

$txt['smf299'] = 'MAJOR SECURITY RISK:';
$txt['smf300'] = 'Bạn chưa gỡ bỏ ';

$txt['smf301'] = 'Trang được tạo trong ';
$txt['smf302'] = ' seconds với ';
$txt['smf302b'] = ' câu truy vấn.';

$txt['smf315'] = 'Chức năng này báo với quản trị các bài gửi có vấn đề.<br /><i>Lưu ý: Địa chỉ email của bạn sẽ không ẩn đối với ban quản trị.</i>';

$txt['online2'] = 'Online';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Tin nhắn cá nhân (Online)';
$txt['online5'] = 'Tin nhắn cá nhân (Offline)';
$txt['online8'] = 'Trạng thái';

$txt['topbottom4'] = 'Lên';
$txt['topbottom5'] = 'Xuống';

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


$txt['calendar3'] = 'Sinh nhật:';
$txt['calendar4'] = 'Sự kiện:';
$txt['calendar3b'] = 'Sinh nhật sắp tới:';
$txt['calendar4b'] = 'Sự kiện sắp tới:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Tháng:';
$txt['calendar10'] = 'Năm:';
$txt['calendar11'] = 'Ngày:';
$txt['calendar12'] = 'Sự kiện:';
$txt['calendar13'] = 'Gửi trong:';
$txt['calendar20'] = 'Sửa';
$txt['calendar21'] = 'Xác nhận xóa?';
$txt['calendar22'] = 'Xóa';
$txt['calendar23'] = 'Các sự kiện trước';
$txt['calendar24'] = 'Lịch';
$txt['calendar37'] = 'Liên kết tới lịch';
$txt['calendar43'] = 'Liên kết sự kiện';
$txt['calendar47'] = 'Lịch sắp tới';
$txt['calendar47b'] = 'Hôm nay';
$txt['calendar51'] = 'Tuần';
$txt['calendar54'] = 'Số ngày:';
$txt['calendar_how_edit'] = 'sửa các sự kiện đó thế nào?';
$txt['calendar_link_event'] = 'Liên kết tới bài viết:';
$txt['calendar_confirm_delete'] = 'Xác nhận xóa?';
$txt['calendar_linked_events'] = 'Các liên kết';

$txt['moveTopic1'] = 'Chủ đề chuyển hướng';
$txt['moveTopic2'] = 'Đổi tiêu đề';
$txt['moveTopic3'] = 'Tiêu đề mới';
$txt['moveTopic4'] = 'Đổi các tiêu đề';

$txt['theme_template_error'] = 'Không đọc được template \'%s\' .';
$txt['theme_language_error'] = 'Không đọc được file ngôn ngữ \'%s\'.';

$txt['parent_boards'] = 'Chuyên mục';

$txt['smtp_no_connect'] = 'Không kết nối được máy chủ SMTP';
$txt['smtp_port_ssl'] = 'SMTP port không đúng; phải là 465 cho SSL server.';
$txt['smtp_bad_response'] = 'Mail server không trả lời';
$txt['smtp_error'] = 'Lỗi gửi mail. Lỗi: ';
$txt['mail_send_unable'] = 'Không gửi tới được \'%s\'';

$txt['mlist_search'] = 'Tìm thành viên';
$txt['mlist_search2'] = 'Tìm lại';
$txt['mlist_search_email'] = 'Tìm theo email';
$txt['mlist_search_messenger'] = 'Tìm theo messenger nickname';
$txt['mlist_search_group'] = 'Tìm theo chức vụ';
$txt['mlist_search_name'] = 'Tìm theo tên';
$txt['mlist_search_website'] = 'Tìm theo website';
$txt['mlist_search_results'] = 'Kết quả tìm kiếm';

$txt['attach_downloaded'] = 'download';
$txt['attach_viewed'] = 'xem';
$txt['attach_times'] = 'lần';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Settings';
$txt['never'] = 'Chưa bao giờ';
$txt['more'] = 'thêm';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Sorry %s, bạn bị cấm gửi tin nhắn.';
$txt['ban_reason'] = 'Lý do';

$txt['tables_optimized'] = 'Tối ưu các bảng cơ sở dữ liệu';

$txt['add_poll'] = 'Tạo thăm dò ý kiến';
$txt['poll_options6'] = 'Bạn chỉ chọn %s lựa chọn.';
$txt['poll_remove'] = 'Xóa thăm dò ý kiến';
$txt['poll_remove_warn'] = 'Xác nhận xóa?';
$txt['poll_results_expire'] = 'Kết quả sẽ hiển thị khi kết thúc thăm dò';
$txt['poll_expires_on'] = 'Bình chọn khóa lại';
$txt['poll_expired_on'] = 'Bình chọn khóa lại';
$txt['poll_change_vote'] = 'Xóa phiếu bầu';
$txt['poll_return_vote'] = 'Tùy chọn';

$txt['quick_mod_remove'] = 'Gỡ bỏ';
$txt['quick_mod_lock'] = 'Khóa';
$txt['quick_mod_sticky'] = 'Đánh dấu chú ý';
$txt['quick_mod_move'] = 'Chuyển tới';
$txt['quick_mod_merge'] = 'Trộn';
$txt['quick_mod_markread'] = 'Đánh dấu đã đọc';
$txt['quick_mod_go'] = 'Go!';
$txt['quickmod_confirm'] = 'Xác nhận ?';

$txt['spell_check'] = 'Kiểm tra chính tả';

$txt['quick_reply_1'] = 'Trả lời nhanh';
$txt['quick_reply_2'] = 'Với chức năng <i>Trả lời nhanh</i> bạn có thể sử dụng bulletin board code và smileys.';
$txt['quick_reply_warning'] = 'Oạch: chủ đề đang bị khóa!<br />.';

$txt['notification_enable_board'] = 'Bạn có chắc chắn muốn nhận thông báo từ diễn đàn này?';
$txt['notification_disable_board'] = 'Bạn có chắc chắn không muốn nhận thông báo chủ đề mới từ diễn đàn này?';
$txt['notification_enable_topic'] = 'Bạn có chắc chắn muốn nhận thông báo trả lời từ chủ đề này?';
$txt['notification_disable_topic'] = 'Bạn có chắc chắn muốn nhận thông báo trả lời từ chủ đề này??';

$txt['rtm1'] = 'Than phiền';

$txt['unread_topics_visit'] = 'Chủ đề chưa đọc gần đây';
$txt['unread_topics_visit_none'] = 'Không có chủ đề mới từ lần bạn đăng nhập trước.  <a href="' . $scripturl . '?action=unread;all">Click vào đây để kiếm tất cả các chủ đề bạn chưa đọc</a>.';
$txt['unread_topics_all'] = 'Tất cả chủ đề chưa đọc';
$txt['unread_replies'] = 'Chủ đề mới cập nhật';

$txt['who_title'] = 'Online';
$txt['who_and'] = ' và ';
$txt['who_viewing_topic'] = ' đang xem chủ đề.';
$txt['who_viewing_board'] = ' đang tham gia diễn đàn này.';
$txt['who_member'] = 'Thành viên';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'Valid CSS!';

$txt['guest'] = 'Khách';
$txt['guests'] = 'Khách';
$txt['user'] = 'Thành viên';
$txt['users'] = 'Thành viên';
$txt['hidden'] = 'Ẩn';
$txt['buddy'] = 'Bạn';
$txt['buddies'] = 'Bạn';
$txt['most_online_ever'] = 'Truy cập nhiều nhất từ trước tới giờ';
$txt['most_online_today'] = 'Truy cập nhiều nhất hôm nay';

$txt['merge_select_target_board'] = 'Chọn diễn đàn đích để trộn chủ đề';
$txt['merge_select_poll'] = 'Chọn thăm dò ý kiến chủ đề trộn cần có';
$txt['merge_topic_list'] = 'Chọn chủ đề cần trộn';
$txt['merge_select_subject'] = 'Tiêu đề của chủ đề mới trộn';
$txt['merge_custom_subject'] = 'Nhập tiêu đề khác';
$txt['merge_enforce_subject'] = 'Đổi tiêu đề các bài viết';
$txt['merge_include_notifications'] = 'Trộn luôn các thông báo?';
$txt['merge_check'] = 'Trộn?';
$txt['merge_no_poll'] = 'Không có thăm dò nào';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Icon hiện tại';

$txt['smileys_current'] = 'Smiley Set hiện tại';
$txt['smileys_none'] = 'Không có Smileys';
$txt['smileys_forum_board_default'] = 'Mặc định';

$txt['search_results'] = 'Kết quả tìm kiếm';
$txt['search_no_results'] = 'Không tìm thấy';

$txt['totalTimeLogged1'] = 'Tổng thời gian đăng nhập: ';
$txt['totalTimeLogged2'] = ' ngày, ';
$txt['totalTimeLogged3'] = ' giờ và ';
$txt['totalTimeLogged4'] = ' phút.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Có';
$txt['approve_thereare'] = 'Có';
$txt['approve_member'] = '1 thành viên';
$txt['approve_members'] = 'thành viên';
$txt['approve_members_waiting'] = 'đợi duyệt.';

$txt['notifyboard_turnon'] = 'Bạn có muốn nhận mail thông báo khi có chủ đề mới?';
$txt['notifyboard_turnoff'] = 'Bạn không muốn nhận mail thông báo khi có chủ đề mới?';

$txt['activate_code'] = 'Mã kích hoạt';

$txt['find_members'] = 'Tìm thành viên';
$txt['find_username'] = 'Tên, Tên truy nhập, hay địa chỉ email';
$txt['find_buddies'] = 'Chỉ hiện bạn bè?';
$txt['find_wildcards'] = 'Cho phép xài ký tự đại diện: *, ?';
$txt['find_no_results'] = 'Không tìm thấy';
$txt['find_results'] = 'Kết quả';
$txt['find_close'] = 'Đóng';

$txt['unread_since_visit'] = 'Xem các bài mà bạn chưa xem kể từ lần truy cập gần đây nhất.';
$txt['show_unread_replies'] = 'Xem các bài trả lời mới nhất cho bài viết của bạn.';

$txt['change_color'] = 'Đổi màu';

$txt['quickmod_delete_selected'] = 'Xóa các mục đã chọn';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Bạn có một số tin nhắn mới.\\nXem các tin nhắn ngay ! (Mở một cửa sổ mới)?';

$txt['previous_next_back'] = '&laquo; Trước';
$txt['previous_next_forward'] = 'Tiếp &raquo;';

$txt['movetopic_auto_board'] = '[MỤC]';
$txt['movetopic_auto_topic'] = '[LIÊN KẾT CHỦ ĐỀ]';
$txt['movetopic_default'] = 'Chủ đề này đã chuyển tới ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Rút gọn hoặc mở rộng mục đề.';

$txt['mark_unread'] = 'Đánh dấu chưa đọc';

$txt['ssi_not_direct'] = 'Vui lòng đừng truy cập SSI.php bằng đường dẫn trực tiếp; có thể bạn muốn sử dụng (%s) hay thêm chức năng /ssi_function=something.';
$txt['ssi_session_broken'] = 'Không cho phép phiên truy xuất SSI.php !  Điều này có thể do lỗi truy cập hoặc lỗi trong các chức năng khác - Hãy chắc rằng SSI.php đã bao gồm *các thứ khác* trong tất cả các mã script của bạn !';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Xem trước bài viết';
$txt['preview_fetch'] = 'Nạp xem trước...';
$txt['preview_new'] = 'Bài viết mới';
$txt['error_while_submitting'] = 'Các lỗi khi gửi bài viết này:';

$txt['split_selected_posts'] = 'Chọn các bài viết';
$txt['split_selected_posts_desc'] = 'Các bài viết dưới đây sẽ được chia sang chủ đề mới.';
$txt['split_reset_selection'] = 'Chọn lại';

$txt['modify_cancel'] = 'Hủy';
$txt['mark_read_short'] = 'Đánh dấu đã đọc';

$txt['pm_short'] = 'Tin nhắn';
$txt['hello_member_ndt'] = 'Chào';

$txt['ajax_in_progress'] = 'Loading...';

?>