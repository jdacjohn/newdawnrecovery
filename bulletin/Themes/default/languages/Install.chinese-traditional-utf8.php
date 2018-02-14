<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'SMF 論壇安裝程式';
$txt['installer_language'] = '語系';
$txt['installer_language_set'] = '設定';
$txt['congratulations'] = '恭喜您，安裝程序已經完成！';
$txt['congratulations_help'] = '如果您在任何時候需要幫助，請連上<a href="http://www.simplemachines.org/community/index.php" target="_blank">SMF討論區英文官方網站</a>來尋求協助。';
$txt['still_writable'] = '您的安裝目錄仍然可以存取. 基於某些安全問題，我們建議您將安裝目錄設定為不可讀取.';
$txt['delete_installer'] = '刪除安裝檔案 (install.php)。';
$txt['delete_installer_maybe'] = '<i>(有些主機可能無法自動刪除。)</i>';
$txt['go_to_your_forum'] = '現在您可以看到 <a href="%s">您剛安裝完成的討論區</a>. 建議您先進入管理中心看看.';
$txt['good_luck'] = '祝您好運! <br />Simple Machines';

$txt['user_refresh_install'] = '論壇已重新整理';
$txt['user_refresh_install_desc'] = '安裝程式找到一些已經存在的資料表.<br />任何遺漏的資料表已經重新增入, 但是沒有刪除任何存在的資料表.';

$txt['default_topic_subject'] = '歡迎來到 SMF!';
$txt['default_topic_message'] = '歡迎來到 SMF 論壇!<br /><br />希望您會喜歡您的論壇.&nbsp; 如果您有問題, 請到 [url=http://www.simplemachines.org/community/index.php]尋求協助[/url].<br /><br />謝謝!<br />Simple Machines';
$txt['default_board_name'] = '一般討論區';
$txt['default_board_description'] = '任何討論主題都可在此發表.';
$txt['default_category_name'] = '一般類別';
$txt['default_time_format'] = '%B %d, %Y, %I:%M:%S %p';
$txt['default_news'] = 'SMF - 已經安裝！';
$txt['default_karmaLabel'] = '評價：';
$txt['default_karmaSmiteLabel'] = '[貶]';
$txt['default_karmaApplaudLabel'] = '[褒]';
$txt['default_reserved_names'] = '系統管理員\\n管理員\\n訪客\\nroot';
$txt['default_smileyset_name'] = '預設';
$txt['default_classic_smileyset_name'] = '復古';
$txt['default_theme_name'] = 'SMF 預設佈景 - 核心';
$txt['default_classic_theme_name'] = '復古 YaBB SE 佈景';
$txt['default_babylon_theme_name'] = 'Babylon 佈景';

$txt['default_administrator_group'] = '管理員';
$txt['default_global_moderator_group'] = '全區板主';
$txt['default_moderator_group'] = '區域板主';
$txt['default_newbie_group'] = '新手';
$txt['default_junior_group'] = '普通會員';
$txt['default_full_group'] = '高級會員';
$txt['default_senior_group'] = '資深會員';
$txt['default_hero_group'] = '英雄';

$txt['default_smiley_smiley'] = '表情符號';
$txt['default_wink_smiley'] = '微笑';
$txt['default_cheesy_smiley'] = '呵呵';
$txt['default_grin_smiley'] = '賊賊地笑';
$txt['default_angry_smiley'] = '生氣';
$txt['default_sad_smiley'] = '難過';
$txt['default_shocked_smiley'] = '驚訝';
$txt['default_cool_smiley'] = '酷';
$txt['default_huh_smiley'] = '什麼?';
$txt['default_roll_eyes_smiley'] = '轉眼珠子';
$txt['default_tongue_smiley'] = '吐舌';
$txt['default_embarrassed_smiley'] = '害羞';
$txt['default_lips_sealed_smiley'] = '不能說';
$txt['default_undecided_smiley'] = '苦惱';
$txt['default_kiss_smiley'] = '飛吻';
$txt['default_cry_smiley'] = '哭泣';
$txt['default_evil_smiley'] = '小惡魔';
$txt['default_azn_smiley'] = '^-^';
$txt['default_afro_smiley'] = '爆炸頭';

$txt['error_message_click'] = '按此';
$txt['error_message_try_again'] = '重新執行安裝程序.';
$txt['error_message_bad_try_again'] = '略過錯誤, 繼續安裝, 但是請注意, 我們 <i>非常不建議</i> 您這麼做.';

$txt['install_settings'] = '基礎設定';
$txt['install_settings_info'] = '只需要您設定幾個選項 ;).';
$txt['install_settings_name'] = '討論區名稱';
$txt['install_settings_name_info'] = '這是您討論區的名稱, 例如 &quot;測試討論區&quot;.';
$txt['install_settings_name_default'] = '我的討論區';
$txt['install_settings_url'] = '討論區網址';
$txt['install_settings_url_info'] = '請填入您討論區的網址 <b>但請勿加上結尾的斜線 \'/\'!</b>.<br />一般來說, 您不用更改這個項目, 顯示在畫面上的通常就是正確的結果.';
$txt['install_settings_compress'] = 'Gzip輸出';
$txt['install_settings_compress_title'] = '將網頁壓縮傳送以節省頻寬.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = '可能有些伺服器不提供本功能，若有提供的話可以節省您非常大的頻寬以及流量。<br /><a href="install.php?obgz=1&amp;pass_string=通過" onclick="return reqWin(this.href, 200, 60);" target="_blank">請按此檢查</a>GZIP壓縮功能 (通過會顯示 "通過"。)';
$txt['install_settings_dbsession'] = '資料庫工作階段';
$txt['install_settings_dbsession_title'] = '使用資料庫代替檔案.';
$txt['install_settings_dbsession_info1'] = '這項功能通常對工作階段最有效也最可靠。';
$txt['install_settings_dbsession_info2'] = '此功能最好能夠使用，但在您的主機可能無法正常運作。';
$txt['install_settings_utf8'] = 'UTF-8 編碼';
$txt['install_settings_utf8_title'] = '使用 UTF-8 編碼';
$txt['install_settings_utf8_info'] = '這個功能會讓資料庫和論壇使用 UTF-8 國際編碼。UTF-8 可以讓您順利的處理不同的編碼。';
$txt['install_settings_stats'] = '允許統計收集';
$txt['install_settings_stats_title'] = '允許 Simple Machines 每個月收集基本的資料';
$txt['install_settings_stats_info'] = '如果開啟它會允許 Simple Machines 在每個月瀏覽您的論壇並收集基本的資料。這可以幫助我們決定哪些設定可以促進論壇的效能。如需更多資訊請到 <a href="http://www.simplemachines.org/about/stats.php">說明網站</a>。';
$txt['install_settings_proceed'] = '進行';

$txt['mysql_settings'] = 'MySQL資料庫主機設定';
$txt['mysql_settings_info'] = '您需要設定關於MySQL資料庫的資訊. 若是您不曉得以下資訊, 請向您的主機管理者索取.';
$txt['mysql_settings_server'] = 'MySQL資料庫主機名稱';
$txt['mysql_settings_server_info'] = '通常是localhost, 因此若您不曉得, 請輸入localhost應該就沒有問題.';
$txt['mysql_settings_username'] = 'MySQL使用者帳號';
$txt['mysql_settings_username_info'] = '請輸入您連結到MySQL的使用者帳號名稱.<br />若您不曉得的話, 可以試試您的ftp帳號, 應該是一樣的.';
$txt['mysql_settings_password'] = 'MySQL使用者密碼';
$txt['mysql_settings_password_info'] = '請輸入您MySQL的使用者密碼.<br />若您不曉得的話, 同樣可以試試您的ftp密碼, 應該也是相同的.';
$txt['mysql_settings_database'] = 'MySQL資料庫名稱';
$txt['mysql_settings_database_info'] = '請輸入您想要SMF討論區儲存資料在內的資料庫名稱.<br />若這個資料庫不存在, 安裝程式將會建立這個資料庫以儲存資料.';
$txt['mysql_settings_prefix'] = 'MySQL資料表前置字元';
$txt['mysql_settings_prefix_info'] = '資料庫內每個資料表的前置字元, 例如前置aaa的話, 資料表將被命名為aaa_原資料表名稱  <br>請勿以相同的前置字元安裝兩個討論區!</b>這樣將會造成資料的覆寫。<br />前置字元的功能是讓您可以在同一個資料庫內安裝一個以上的SMF討論區.';

$txt['user_settings'] = '建立您的帳號';
$txt['user_settings_info'] = '安裝程式現在會為您建立管理者帳號.';
$txt['user_settings_username'] = '您的帳號名稱';
$txt['user_settings_username_info'] = '請選擇您想要使用的登入帳號名稱<br />帳號將不能更改, 但是您可以更改您顯示的暱稱.';
$txt['user_settings_password'] = '您的密碼';
$txt['user_settings_password_info'] = '請輸入您想要使用的密碼, 並且把它記牢!';
$txt['user_settings_again'] = '您的密碼';
$txt['user_settings_again_info'] = '(輸入兩次以免錯誤.)';
$txt['user_settings_email'] = 'Email信箱地址';
$txt['user_settings_email_info'] = '請輸入您的EMAIL信箱地址. <b>必須輸入正確可用的信箱地址.</b>';
$txt['user_settings_database'] = 'MySQL資料庫密碼';
$txt['user_settings_database_info'] = '由於安全因素, 安裝程式需要您輸入MYSQL資料庫的密碼才能夠為您建立管理者帳號.';
$txt['user_settings_proceed'] = '完成';

$txt['ftp_setup'] = 'FTP連線資訊';
$txt['ftp_setup_info'] = '安裝程式可透過FTP進入您的主機改變檔案的權限。如果無法幫您改變檔案權限，請您手動將這些檔案的權限設定為可讀寫。注意此功能不支援 SSL 的網址。';
$txt['ftp_server'] = '伺服器';
$txt['ftp_server_info'] = '請輸入您的FTP伺服器位址以及連接埠號。';
$txt['ftp_port'] = '埠號';
$txt['ftp_username'] = '使用者帳號';
$txt['ftp_username_info'] = '入FTP用的使用者帳號。<i>這個帳號不會被儲存在任何地方，請放心。</i>';
$txt['ftp_password'] = '密碼';
$txt['ftp_password_info'] = '登入用的密碼。<i>也請放心，這個資料不會被儲存。</i>';
$txt['ftp_path'] = '安裝路徑';
$txt['ftp_path_info'] = '這是在您主機上，SMF安裝的<i>相對路徑</i>。';
$txt['ftp_path_found_info'] = '自動偵測到上面的路徑。';
$txt['ftp_connect'] = '連結';
$txt['ftp_setup_why'] = '這項動作的理由？';
$txt['ftp_setup_why_info'] = '有些檔案需要可讀寫的權限。安裝程式可自動幫您改變權限，如果不成功請手動改變以下檔案 (777 或 755 為可讀寫)：';
$txt['ftp_setup_again'] = '測試這些檔案可否讀寫。';

$txt['error_php_too_low'] = '警告！PHP版本過低！請聯絡您的主機管理人員。';
$txt['error_missing_files'] = '安裝檔案不完全！請重新上傳一次整套SMF討論區再重新安裝一次。';
$txt['error_session_save_path'] = '請聯絡您的主機管理人員，貴主機PHP的 <b>session.save_path</b> 設定有誤。請確定路徑是存在的。<br />';
$txt['error_windows_chmod'] = '您使用的主機是WINDOWS，但是有某些檔案無法讀寫，請聯絡您的主機管理人員開放您讀寫檔案的權限。以下的檔案或資料夾必須可讀寫：';
$txt['error_ftp_no_connect'] = '無法使用您提供的資訊登入您的FTP主機。';
$txt['error_mysql_connect'] = '無法透過您提供的資訊登入您的MySQL主機<br /><br />若您有不瞭解的資料，例如使用者帳號與密碼，請聯絡您的主機管理人員。';
$txt['error_mysql_too_low'] = '您主機所使用的MYSQL資料庫版本過舊，請聯絡您的主機管理人員將MYSQL更新。';
$txt['error_mysql_database'] = '安裝程式無法連結到 &quot;<i>%s</i>&quot; 資料庫。在某些主機公司的伺服器上，您需要先到您的帳號管理中心（例如CPANEL）中開啟MYSQL資料庫才能夠使用。';
$txt['error_mysql_queries'] = '某些查詢指令無法正常工作，這可能是由於MYSQL的版本過舊或是您使用的是開發中的MYSQL版本。<br /><br />以下是技術訊息：';
$txt['error_mysql_queries_line'] = '行 #';
$txt['error_mysql_missing'] = '安裝程式無法偵測PHP支援的MySQL。請尋問您的管理員PHP是否跟MySQL一起編譯，或確定主機可以使用需要的擴充功能。';
$txt['error_session_missing'] = '安裝程式無法偵測您的主機是否支援工作階段 (sessions)。請問您的主機管理員 PHP 是否支援工作階段 (預設的編譯是有包括工作階段)。';
$txt['error_user_settings_again_match'] = '您兩次輸入的密碼不相同！';
$txt['error_user_settings_taken'] = '很抱歉，已經有使用者使用了相同的帳號以及密碼。<br /><br />系統沒有建立任何新帳號。';
$txt['error_user_settings_query'] = '建立討論區管理者帳號時發生錯誤，以下是錯誤訊息：';
$txt['error_subs_missing'] = '無法找到檔案：Sources/Subs.php 檔案。請重新上傳此檔案。';
$txt['error_mysql_alter_priv'] = '您提供的 MySQL 帳號沒有 ALTER，CREATE，和/或 DROP 的權限。SMF 論壇必須要有上面的權限才能正常運作。';
$txt['error_versions_do_not_match'] = '安裝程式偵測到另一個版本的 SMF。如果您是要更新論壇，請用更新程式。<br /><br />如果不是要更新，您可以用不同的安裝資料，或備份資料後將論壇的資料刪除在進行安裝。';
$txt['error_mod_security'] = '安裝程式到您的主機有用 mod_security 的模組。Mod_security 會在 SMF 干涉之前阻擋傳送的表單。SMF 有更好的內建安全程式，比 mod_security 還更有效率，也能夠正確的處理傳送的表單。<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">流覽關閉 mod_security 的相關訊息</a>';
$txt['error_utf8_mysql_version'] = '您的資料庫版本不支援 UTF-8 編碼。您還是可以安全的安裝 SMF，但不可勾選 UTF-8 支援。如果將來需要轉換到 UTF-8 (例如 MySQL 版本升級到 4.1 以上)，您可以到管理後台使用 UTF-8 的轉換功能。';

?>