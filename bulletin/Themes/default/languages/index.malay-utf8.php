<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'ms_MY.utf8';
$txt['lang_dictionary'] = '';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Ahad', 'Isnin', 'Selasa', 'Rabu', 'Khamis', 'Jumaat', 'Sabtu');
$txt['days_short'] = array('Aha', 'Isn', 'Sel', 'Rab', 'Kha', 'Jum', 'Sab');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember');
$txt['months_titles'] = array(1 => 'Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogo', 'Sep', 'Okt', 'Nov', 'Dis');

$txt['newmessages0'] = 'baru';
$txt['newmessages1'] = 'baru';
$txt['newmessages3'] = 'Baru';
$txt['newmessages4'] = ',';

$txt[2] = 'Admin';

$txt[10] = 'Save';

$txt[17] = 'Modify';
$txt[18] = $context['forum_name'] . ' - Index';
$txt[19] = 'Members';
$txt[20] = 'Board name';
$txt[21] = 'Posts';
$txt[22] = 'Last post';

$txt[24] = '(No subject)';
$txt[26] = 'Posts';
$txt[27] = 'View Profile';
$txt[28] = 'Guest';
$txt[29] = 'Author';
$txt[30] = 'on';
$txt[31] = 'Remove';
$txt[33] = 'Start new topic';

$txt[34] = 'Login';
// Use numeric entities in the below string.
$txt[35] = 'Username';
$txt[36] = 'Password';

$txt[40] = 'That username does not exist.';

$txt[62] = 'Board Moderator';
$txt[63] = 'Remove Topic';
$txt[64] = 'Topics';
$txt[66] = 'Modify message';
$txt[68] = 'Name';
$txt[69] = 'Email';
$txt[70] = 'Subject';
$txt[72] = 'Message';

$txt[79] = 'Profile';

$txt[81] = 'Choose password';
$txt[82] = 'Verify password';
$txt[87] = 'Position';

$txt[92] = 'View the profile of';
$txt[94] = 'Total';
$txt[95] = 'Posts';
$txt[96] = 'Website';
$txt[97] = 'Register';

$txt[101] = 'Message Index';
$txt[102] = 'News';
$txt[103] = 'Home';

$txt[104] = 'Lock/Unlock Topic';
$txt[105] = 'Post';
$txt[106] = 'An Error Has Occurred!';
$txt[107] = 'at';
$txt[108] = 'Logout';
$txt[109] = 'Started by';
$txt[110] = 'Replies';
$txt[111] = 'Last post';
$txt[114] = 'Administration Login';
// Use numeric entities in the below string.
$txt[118] = 'Topic';
$txt[119] = 'Help';
$txt[121] = 'Remove message';
$txt[125] = 'Notify';
$txt[126] = 'Do you want a notification email if someone replies to this topic?';
// Use numeric entities in the below string.
$txt[130] = "Regards,\nThe " . $context['forum_name'] . ' Team.';
$txt[131] = 'Notify of replies';
$txt[132] = 'Move Topic';
$txt[133] = 'Move to';
$txt[139] = 'Pages';
$txt[140] = 'Users active in past ' . $modSettings['lastActive'] . ' minutes';
$txt[144] = 'Personal Messages';
$txt[145] = 'Reply with quote';
$txt[146] = 'Reply';

$txt[151] = 'No messages...';
$txt[152] = 'you have';
$txt[153] = 'messages';
$txt[154] = 'Remove this message';

$txt[158] = 'Users Online';
$txt[159] = 'Personal Message';
$txt[160] = 'Jump to';
$txt[161] = 'go';
$txt[162] = 'Are you sure you want to remove this topic?';
$txt[163] = 'Yes';
$txt[164] = 'No';

$txt[166] = 'Search Results';
$txt[167] = 'End of results';
$txt[170] = 'Sorry, no matches were found';
$txt[176] = 'on';

$txt[182] = 'Search';
$txt[190] = 'All';

$txt[193] = 'Back';
$txt[194] = 'Password reminder';
$txt[195] = 'Topic started by';
$txt[196] = 'Title';
$txt[197] = 'Post by';
$txt[200] = 'Searchable list of all registered members.';
$txt[201] = 'Please welcome';
$txt[208] = 'Administration Center';
$txt[211] = 'Last Edit';
$txt[212] = 'Would you like to deactivate notification on this topic?';

$txt[214] = 'Recent Posts';

$txt[227] = 'Location';
$txt[231] = 'Gender';
$txt[233] = 'Date Registered';

$txt[234] = 'View the most recent posts on the forum.';
$txt[235] = 'is the most recently updated topic';

$txt[238] = 'Male';
$txt[239] = 'Female';

$txt[240] = 'Invalid character used in Username.';

$txt['welcome_guest'] = 'Selamat datang, <strong>%1$s</strong>. Sila <a href="' . $scripturl . '?action=login">masuk</a> atau <a href="' . $scripturl . '?action=register">mendaftar</a>.';
$txt['welcome_guest_activate'] = '
Apakah anda terlepas <a href="' . $scripturl . '?action=activate">email pengaktifan</a> anda?';
$txt['hello_member'] = 'Salam,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Selamat datang,';
$txt[247] = 'Hey,';
$txt[248] = 'Welcome,';
$txt[249] = 'Please';
$txt[250] = 'Back';
$txt[251] = 'Please select a destination';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Posted by';

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

$txt[298] = 'Moderator';
$txt[299] = 'Moderators';

$txt[300] = 'Mark Topics as Read for this Board';
$txt[301] = 'Views';
$txt[302] = 'New';

$txt[303] = 'View all members';
$txt[305] = 'View';
$txt[307] = 'Email';

$txt[308] = 'Viewing Members';
$txt[309] = 'of';
$txt[310] = 'total members';
$txt[311] = 'to';
$txt[315] = 'Forgot your password?';

$txt[317] = 'Date';
// Use numeric entities in the below string.
$txt[318] = 'From';
$txt[319] = 'Subject';
$txt[322] = 'Check for new messages';
$txt[324] = 'To';

$txt[330] = 'Topics';
$txt[331] = 'Members';
$txt[332] = 'Members List';
$txt[333] = 'New Posts';
$txt[334] = 'No New Posts';

$txt['sendtopic_send'] = 'Kirim';

$txt[371] = 'Time Offset';
$txt[377] = 'or';

$txt[398] = 'Sorry, no matches were found';

$txt[418] = 'Notification';

$txt[430] = 'Sorry %s, you are banned from using this forum!';

$txt[452] = 'Mark ALL messages as read';

$txt[454] = 'Hot Topic (More than ' . $modSettings['hotTopicPosts'] . ' replies)';
$txt[455] = 'Very Hot Topic (More than ' . $modSettings['hotTopicVeryPosts'] . ' replies)';
$txt[456] = 'Locked Topic';
$txt[457] = 'Normal Topic';
$txt['participation_caption'] = 'Topik yang Anda pos';

$txt[462] = 'GO';

$txt[465] = 'Print';
$txt[467] = 'Profile';
$txt[468] = 'Topic Summary';
$txt[470] = 'N/A';
$txt[471] = 'message';
$txt[473] = 'This name is already in use by another member.';

$txt[488] = 'Total Members';
$txt[489] = 'Total Posts';
$txt[490] = 'Total Topics';

$txt[497] = 'Minutes to stay logged in';

$txt[507] = 'Preview';
$txt[508] = 'Always stay logged in';

$txt[511] = 'Logged';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'by';

$txt[578] = 'hours';
$txt[579] = 'days';

$txt[581] = ', our newest member.';

$txt[582] = 'Search for';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Salam.+Anda+di+sana?';
$txt[604] = 'YIM';

$txt[616] = 'Remember, this forum is in \'Maintenance Mode\'.';

$txt[641] = 'Read';
$txt[642] = 'times';

$txt[645] = 'Forum Stats';
$txt[656] = 'Latest Member';
$txt[658] = 'Total Categories';
$txt[659] = 'Latest Post';

$txt[660] = 'You\'ve got';
$txt[661] = 'Click';
$txt[662] = 'here';
$txt[663] = 'to view them.';

$txt[665] = 'Total Boards';

$txt[668] = 'Print Page';

$txt[679] = 'This must be a valid email address.';

$txt[683] = 'I am a geek!!';
$txt[685] = $context['forum_name'] . ' - Info Center';

$txt[707] = 'Send this topic';

$txt['sendtopic_title'] = 'Kirim topik &quot;%1$s&quot; ke teman.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Dear %s,';
$txt['sendtopic_this_topic'] = 'I want you to check out "%s" on ' . $context['forum_name'] . '.  To view it, please click this link';
$txt['sendtopic_thanks'] = 'Thanks';
$txt['sendtopic_sender_name'] = 'Nama Anda';
$txt['sendtopic_sender_email'] = 'Alamat email Anda';
$txt['sendtopic_receiver_name'] = 'Nama penerima';
$txt['sendtopic_receiver_email'] = 'Alamat email penerima';
$txt['sendtopic_comment'] = 'Tambah komen';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'A comment has also been added regarding this topic';

$txt[721] = 'Hide email address from public?';

$txt[737] = 'Check all';

// Use numeric entities in the below string.
$txt[1001] = 'Database Error';
$txt[1002] = 'Please try again.  If you come back to this error screen, report the error to an administrator.';
$txt[1003] = 'File';
$txt[1004] = 'Line';
// Use numeric entities in the below string.
$txt[1005] = 'SMF has detected and automatically tried to repair an error in your database.  If you continue to have problems, or continue to receive these emails, please contact your host.';
$txt['database_error_versions'] = '<strong>Catatan:</strong> Nampaknya bahwa database Anda <em>mungkin</em> memerlukan peningkatan. Fail forum Anda saat ini adalah versi %1$s, sementara database Anda versi %2$s. Kesalahan di atas mungkin akan hilang jika Anda menjalankan versi upgrade.php terbaru.';
$txt['template_parse_error'] = 'Kesalahan Penguraian Template!';
$txt['template_parse_error_message'] = 'Nampaknya sesuatu telah mengacaukan forum dengan sistem template.  Masalah ini hanya bersifat sementara, sila kembali lagi nanti dan mencuba lagi.  Jika Anda terus melihat mesej ini, sila hubungi administrator.<br /><br />Anda juga boleh mencuba <a href="javascript:location.reload();">menyegarkan laman ini</a>.';
$txt['template_parse_error_details'] = 'Ada masalah pengambilan template atau fail bahasa <tt><strong>%1$s</strong></tt>.  Sila periksa sintaks dan cuba lagi - ingat, tanda kuot tunggal (<tt>\'</tt>) sering harus diawali dengan garis miring terbalik (<tt>\\</tt>).  Untuk melihat informasi kesalahan lebih spesifik dari PHP, cuba <a href="' . $boardurl . '%1$s">mengakses fail secara langsung</a>.<br /><br />Anda mungkin ingin mencuba untuk <a href="javascript:location.reload();">menyegarkan laman ini</a> atau <a href="' . $scripturl . '?theme=1">menggunakan tema standard</a>.';

$txt['smf10'] = '<b>Today</b> at ';
$txt['smf10b'] = '<b>Yesterday</b> at ';
$txt['smf20'] = 'Post new poll';
$txt['smf21'] = 'Question';
$txt['smf23'] = 'Submit Vote';
$txt['smf24'] = 'Total Voters';
$txt['smf25'] = 'shortcuts: hit alt+s to submit/post or alt+p to preview';
$txt['smf29'] = 'View results';
$txt['smf30'] = 'Lock Voting';
$txt['smf30b'] = 'Unlock Voting';
$txt['smf39'] = 'Edit Poll';
$txt['smf43'] = 'Poll';
$txt['smf47'] = '1 Day';
$txt['smf48'] = '1 Week';
$txt['smf49'] = '1 Month';
$txt['smf50'] = 'Forever';
$txt['smf52'] = 'Login with username, password and session length';
$txt['smf53'] = '1 Hour';
$txt['smf56'] = 'MOVED';
$txt['smf57'] = 'Please enter a brief description as to<br />why this topic is being moved.';
$txt['smf60'] = 'Sorry, you don\'t have enough posts to modify karma - you need at least ';
$txt['smf62'] = 'Sorry, you can\'t repeat a karma action without waiting ';
$txt['smf82'] = 'Board';
$txt['smf88'] = 'in';
$txt['smf96'] = 'Sticky Topic';

$txt['smf138'] = 'Delete';

$txt['smf199'] = 'Your Personal Messages';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[More Stats]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Code';
$txt['smf239'] = 'Quote from';
$txt['smf240'] = 'Quote';

$txt['smf251'] = 'Split Topic';
$txt['smf252'] = 'Merge Topics';
$txt['smf254'] = 'Subject For New Topic';
$txt['smf255'] = 'Only split this post.';
$txt['smf256'] = 'Split topic after and including this post.';
$txt['smf257'] = 'Select posts to split.';
$txt['smf258'] = 'New Topic';
$txt['smf259'] = 'Topic successfully split into two topics.';
$txt['smf260'] = 'Origin Topic';
$txt['smf261'] = 'Please select which posts you wish to split.';
$txt['smf264'] = 'Topics successfully merged.';
$txt['smf265'] = 'Newly Merged Topic';
$txt['smf266'] = 'Topic to be merged';
$txt['smf267'] = 'Target board';
$txt['smf269'] = 'Target topic';
$txt['smf274'] = 'Are you sure you want to merge';
$txt['smf275'] = 'with';
$txt['smf276'] = 'This function will merge the messages of two topics into one topic. The messages will be sorted according to the time of posting. Therefore the earliest posted message will be the first message of the merged topic.';

$txt['smf277'] = 'Set topic sticky';
$txt['smf278'] = 'Set topic non-sticky';
$txt['smf279'] = 'Lock topic';
$txt['smf280'] = 'Unlock topic';

$txt['smf298'] = 'Advanced search';

$txt['smf299'] = 'MAJOR SECURITY RISK:';
$txt['smf300'] = 'You have not removed ';

$txt['smf301'] = 'Page created in ';
$txt['smf302'] = ' seconds with ';
$txt['smf302b'] = ' queries.';

$txt['smf315'] = 'Use this function to inform the moderators and administrators of an abusive or wrongly posted message.<br /><i>Please note that your email address will be revealed to the moderators if you use this.</i>';

$txt['online2'] = 'Online';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Personal Message (Online)';
$txt['online5'] = 'Personal Message (Offline)';
$txt['online8'] = 'Status';

$txt['topbottom4'] = 'Go Up';
$txt['topbottom5'] = 'Go Down';

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


$txt['calendar3'] = 'Birthdays:';
$txt['calendar4'] = 'Events:';
$txt['calendar3b'] = 'Upcoming Birthdays:';
$txt['calendar4b'] = 'Upcoming Events:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Month:';
$txt['calendar10'] = 'Year:';
$txt['calendar11'] = 'Day:';
$txt['calendar12'] = 'Event Title:';
$txt['calendar13'] = 'Post In:';
$txt['calendar20'] = 'Edit Event';
$txt['calendar21'] = 'Delete this event?';
$txt['calendar22'] = 'Delete Event';
$txt['calendar23'] = 'Post Event';
$txt['calendar24'] = 'Calendar';
$txt['calendar37'] = 'Link to Calendar';
$txt['calendar43'] = 'Link Event';
$txt['calendar47'] = 'Upcoming Calendar';
$txt['calendar47b'] = 'Today\'s Calendar';
$txt['calendar51'] = 'Week';
$txt['calendar54'] = 'Number of Days:';
$txt['calendar_how_edit'] = 'bagaimana Anda mengedit acara ini?';
$txt['calendar_link_event'] = 'Link Acara';
$txt['calendar_confirm_delete'] = 'Anda yakin ingin memadamkan acara ini?';
$txt['calendar_linked_events'] = 'Acara Dikaitkan';

$txt['moveTopic1'] = 'Pos topik pengalihan';
$txt['moveTopic2'] = 'Ubah subjek topik';
$txt['moveTopic3'] = 'Subjek baru';
$txt['moveTopic4'] = 'Ubah setiap subjek pesasn';

$txt['theme_template_error'] = 'Tidak boleh mengambil template \'%1$s\'.';
$txt['theme_language_error'] = 'Tidak boleh mengambil fail bahasa \'%1$s\'.';

$txt['parent_boards'] = 'Papan Anak';

$txt['smtp_no_connect'] = 'Tidak boleh menghubungi host SMTP';
$txt['smtp_port_ssl'] = 'Tetapan port SMTP tidak benar; biasanya 465 untuk server SSL.';
$txt['smtp_bad_response'] = 'Tidak boleh mendapatkan kod respon server mail';
$txt['smtp_error'] = 'Ada masalah dengan pengiriman Surat. Kesalahan: ';
$txt['mail_send_unable'] = 'Tidak boleh mengirimkan surat ke alamat email \'%1$s\'';

$txt['mlist_search'] = 'Mencari ahli';
$txt['mlist_search2'] = 'Search again';
$txt['mlist_search_email'] = 'Cari alamat email';
$txt['mlist_search_messenger'] = 'Cari nama samaran messenger';
$txt['mlist_search_group'] = 'Cari grup';
$txt['mlist_search_name'] = 'Cari nama';
$txt['mlist_search_website'] = 'Cari laman';
$txt['mlist_search_results'] = 'Hasil pencarian untuk';

$txt['attach_downloaded'] = 'dimuatturun';
$txt['attach_viewed'] = 'dilihat';
$txt['attach_times'] = 'kali';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Tetapan';
$txt['never'] = 'Tidak pernah';
$txt['more'] = 'selengkapnya';

$txt['hostname'] = 'Nama host';
$txt['you_are_post_banned'] = 'Maaf %1$s, Anda disekat dari penulisan atau pengiriman mesej peribadi pada forum ini.';
$txt['ban_reason'] = 'Alasan';

$txt['tables_optimized'] = 'Table database dioptimasi';

$txt['add_poll'] = 'Tambah undian';
$txt['poll_options6'] = 'Anda hanya boleh memilih sampai %1$s pilihan.';
$txt['poll_remove'] = 'Padam Undian';
$txt['poll_remove_warn'] = 'Anda yakin ingin memadamkan undian ini dari topik?';
$txt['poll_results_expire'] = 'Hasil akan dipaparkan saat pilihan sudah ditutup';
$txt['poll_expires_on'] = 'Penutupan pemilihan';
$txt['poll_expired_on'] = 'Pemilihan ditutup';
$txt['poll_change_vote'] = 'Padam pemilihan';
$txt['poll_return_vote'] = 'Pilihan pemilihan';

$txt['quick_mod_remove'] = 'Padam yang dipilih';
$txt['quick_mod_lock'] = 'Kunci/Buka pilihan';
$txt['quick_mod_sticky'] = 'Lekit/Nyah Lekit pilihan';
$txt['quick_mod_move'] = 'Pindahkan yang dipilih ke';
$txt['quick_mod_merge'] = 'Gabung yang dipilih';
$txt['quick_mod_markread'] = 'Tanda yang dipilih sebagai dibaca';
$txt['quick_mod_go'] = 'Pergi!';
$txt['quickmod_confirm'] = 'Anda yakin ingin melakukan ini?';

$txt['spell_check'] = 'Pemeriksaan Ejaan';

$txt['quick_reply_1'] = 'Quick Reply';
$txt['quick_reply_2'] = 'With a <i>Quick-Reply</i> you can use bulletin board code and smileys as you would in a normal post, but much more conveniently.';
$txt['quick_reply_warning'] = 'Peringatan: topik saat ini dikunci! Hanya admin dan moderator yang boleh menjawab.';

$txt['notification_enable_board'] = 'Anda yakin ingin menghidupkan makluman atas topik baru untuk papan ini?';
$txt['notification_disable_board'] = 'Anda yakin ingin mematikan makluman atas topik baru untuk papan ini?';
$txt['notification_enable_topic'] = 'Anda yakin ingin menghidupkan makluman atas jawapan pada topik ini?';
$txt['notification_disable_topic'] = 'Anda yakin ingin mematikan makluman atas jawapan pada topik ini?';

$txt['rtm1'] = 'Report to moderator';

$txt['unread_topics_visit'] = 'Topik Terbaru Belum Dibaca';
$txt['unread_topics_visit_none'] = 'Tidak ada topik belum dibaca sejak kunjungan terakhir Anda.  <a href="' . $scripturl . '?action=unread;all">Klik di sini untuk mencuba semua topik belum dibaca</a>.';
$txt['unread_topics_all'] = 'Semua Topik Belum Dibaca';
$txt['unread_replies'] = 'Semua Jawapan Belum Dibaca';

$txt['who_title'] = 'Siapa yang Online';
$txt['who_and'] = ' dan ';
$txt['who_viewing_topic'] = ' sedang melihat topik ini.';
$txt['who_viewing_board'] = ' sedang melihat papan ini.';
$txt['who_member'] = 'Ahli';

$txt['powered_by_php'] = 'Menggunakan PHP';
$txt['powered_by_mysql'] = 'Menggunakan MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'CSS Sah!';

$txt['guest'] = 'Tetamu';
$txt['guests'] = 'Tetamu';
$txt['user'] = 'Pengguna';
$txt['users'] = 'Pengguna';
$txt['hidden'] = 'Sembunyi';
$txt['buddy'] = 'Teman';
$txt['buddies'] = 'Teman';
$txt['most_online_ever'] = 'Terbanyak Pernah Online';
$txt['most_online_today'] = 'Terbanyak Online Hari Ini';

$txt['merge_select_target_board'] = 'Pilih papan target untuk topik gabungan';
$txt['merge_select_poll'] = 'Pilih topik mana dari gabungan topik yang harus memiliki undian';
$txt['merge_topic_list'] = 'Pilih topik untuk digabung';
$txt['merge_select_subject'] = 'Pilih subjek dari topik yang digabung';
$txt['merge_custom_subject'] = 'Subjek Pilihan';
$txt['merge_enforce_subject'] = 'Ubah subjek dari semua mesej';
$txt['merge_include_notifications'] = 'Sertakan makluman?';
$txt['merge_check'] = 'Gabung?';
$txt['merge_no_poll'] = 'Tidak ada undian';

$txt['response_prefix'] = 'Per:';
$txt['current_icon'] = 'Ikon Sekarang';

$txt['smileys_current'] = 'Set Smiley Sekarang';
$txt['smileys_none'] = 'Tidak ada Smileys';
$txt['smileys_forum_board_default'] = 'Standard Forum/Papan';

$txt['search_results'] = 'Hasil Pencarian';
$txt['search_no_results'] = 'Maaf, tiada padanan ditemukan';

$txt['totalTimeLogged1'] = 'Jumlah waktu masuk: ';
$txt['totalTimeLogged2'] = ' hari, ';
$txt['totalTimeLogged3'] = ' jam dan ';
$txt['totalTimeLogged4'] = ' minit.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'h';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Ada';
$txt['approve_thereare'] = 'Ada';
$txt['approve_member'] = 'satu ahli';
$txt['approve_members'] = 'ahli';
$txt['approve_members_waiting'] = 'menunggu kelulusan.';

$txt['notifyboard_turnon'] = 'Anda ingin email makluman saat seseorang menulis topik baru dalam papan ini?';
$txt['notifyboard_turnoff'] = 'Anda yakin ingin menerima makluman topik baru untuk papan ini?';

$txt['activate_code'] = 'Kod pengaktifan Anda adalah';

$txt['find_members'] = 'Cari Ahli';
$txt['find_username'] = 'Nama, nama pengguna, atau alamat email';
$txt['find_buddies'] = 'Hanya Memaparkan Teman?';
$txt['find_wildcards'] = 'Wildcard Dibenarkan: *, ?';
$txt['find_no_results'] = 'Tidak ada yang ditemukan';
$txt['find_results'] = 'Hasil';
$txt['find_close'] = 'Tutup';

$txt['unread_since_visit'] = 'Papar pos belum dibaca.';
$txt['show_unread_replies'] = 'Papar jawapan belum dibaca.';

$txt['change_color'] = 'Ubah Warna';

$txt['quickmod_delete_selected'] = 'Padam Pilihan';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Anda menerima satu atau lebih mesej peribadi baru.\\nAnda ingin melihatnya sekarang?';

$txt['previous_next_back'] = '&laquo; sebelumnya';
$txt['previous_next_forward'] = 'selanjutnya &raquo;';

$txt['movetopic_auto_board'] = '[PAPAN]';
$txt['movetopic_auto_topic'] = '[LINK TOPIK]';
$txt['movetopic_default'] = 'Topik ini sudah dipindahkan ke ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Sampaikan atau lebarkan header.';

$txt['mark_unread'] = 'Tanda belum dibaca';

$txt['ssi_not_direct'] = 'Tolong jangan akses SSI.php dengan URL secara langsung; anda boleh gunakan laluan (%1$s) atau menambahkan ?ssi_function=sesuatu.';
$txt['ssi_session_broken'] = 'SSI.php tidak dapat membuka sesi!  Ini akan menyebabkan masalah keluar dan fungsi lain - tolong pastikan SSI.php dimasukkan sebelum *semua* yang lain dalam setiap skrip anda!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Semak pos';
$txt['preview_fetch'] = 'Mendapatkan semakan...';
$txt['preview_new'] = 'Mesej baru';
$txt['error_while_submitting'] = 'Kesalahan berikut atau kesalahan terjadi saat menuliskan mesej ini:';

$txt['split_selected_posts'] = 'Pos terpilih';
$txt['split_selected_posts_desc'] = 'Pos di bawah ini akan membentuk topik baru setelah pemisahan.';
$txt['split_reset_selection'] = 'reset pilihan';

$txt['modify_cancel'] = 'Batal';
$txt['mark_read_short'] = 'Tanda Dibaca';

$txt['pm_short'] = 'Mesej Saya';
$txt['hello_member_ndt'] = 'Salam';

$txt['ajax_in_progress'] = 'Mengambil...';

?>