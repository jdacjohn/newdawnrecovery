<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = '這裡可以讓您改變外掛模組的設定和及其它功能。請到 <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">佈景設定</a> 改變佈景的設定。';

$txt['mods_cat_features'] = '基本功能';
$txt['pollMode'] = '投票模式';
$txt['smf34'] = '關閉投票';
$txt['smf32'] = '開啟投票';
$txt['smf33'] = '顯示投票為主題';
$txt['allow_guestAccess'] = '允許訪客進入論壇';
$txt['userLanguage'] = '允許會員選擇的語系';
$txt['allow_editDisplayName'] = '允許會員改變暱稱?';
$txt['allow_hideOnline'] = '允許會員隱藏上線狀態?';
$txt['allow_hideEmail'] = '允許會員隱藏電子郵件 (只有版主看的到)?';
$txt['guest_hideContacts'] = '對訪客隱藏會員的聯絡資料';
$txt['titlesEnable'] = '允許自訂頭銜';
$txt['enable_buddylist'] = '允許好友名單';
$txt['default_personalText'] = '預設的自訂文字';
$txt['max_signatureLength'] = '簽名檔的允許文字<div class="smalltext">(0 為無限制.)</div>';
$txt['number_format'] = '預設的數字格式';
$txt['time_format'] = '預設的時間格式';
$txt['time_offset'] = '時區設定<div class="smalltext">(加入到特定的會員選項.)</div>';
$txt['failed_login_threshold'] = '錯誤登入的次數';
$txt['lastActive'] = '時間內出現過的會員 (分鐘)';
$txt['trackStats'] = '記錄每天的統計資料';
$txt['hitStats'] = '記錄每天頁面的點擊 (必須開啟統計資料)';
$txt['enableCompressedOutput'] = '開啟壓縮的輸出';
$txt['databaseSession_enable'] = '用資料庫記錄工作階段';
$txt['databaseSession_loose'] = '允許瀏覽器回到記憶裡的前頁';
$txt['databaseSession_lifetime'] = '工作階段過期的秒數';
$txt['enableErrorLogging'] = '開啟錯誤記錄';
$txt['cookieTime'] = '預設的登入時間 (分鐘)';
$txt['localCookies'] = '區域性儲存 cookies<div class="smalltext">(SSI 可能會出現問題.)</div>';
$txt['globalCookies'] = '使用副屬網址的 cookies<div class="smalltext">(必須先關掉區域性的 cookies!)</div>';
$txt['securityDisable'] = '關閉管理安全措施';
$txt['send_validation_onChange'] = 'EMAIL改變時提供新密碼';
$txt['approveAccountDeletion'] = '會員刪除帳號時需要管理員同意';
$txt['autoOptDatabase'] = '優化資料表的天數<div class="smalltext">(0 為不優化.)</div>';
$txt['autoOptMaxOnline'] = '優化資料庫時允許上線的會員數<div class="smalltext">(0 為不設定.)</div>';
$txt['autoFixDatabase'] = '自動修復資料表';
$txt['allow_disableAnnounce'] = '允許會員關閉公告';
$txt['disallow_sendBody'] = '回覆通知的信件不包括文章內容？';
$txt['modlog_enabled'] = '記錄管理動作';
$txt['queryless_urls'] = '顯示沒 ?\'s 的網址<div class="smalltext"><b>Apache 才能用!</b></div>';
$txt['max_image_width'] = '附件圖片的最大寬度 (0 = 不限制)';
$txt['max_image_height'] = '附件圖片的最大高度 (0 = 不限制)';
$txt['mail_type'] = '電子郵件類型';
$txt['mail_type_default'] = '(PHP 預設)';
$txt['smtp_host'] = 'SMTP 伺服器';
$txt['smtp_port'] = 'SMTP 連接埠';
$txt['smtp_username'] = 'SMTP 帳號';
$txt['smtp_password'] = 'SMTP 密碼';
$txt['enableReportPM'] = '開啟檢舉私人訊息的功能';
$txt['max_pm_recipients'] = '私人訊息的收件人上限。<div class="smalltext">(0 如果不限制，管理員除外)</div>';
$txt['pm_posts_verification'] = '強制當會員要傳送訊息時必須輸入驗證碼的文章數量。<div class="smalltext">(0 為不限制，不限於管理元)</div>';
$txt['pm_posts_per_hour'] = '一個小時內會員可以傳送的訊息數量。<div class="smalltext">(0 為不限制，不限於版主)</div>';

$txt['mods_cat_layout'] = '外觀及選項';
$txt['compactTopicPagesEnable'] = '顯示的頁數格式';
$txt['smf235'] = '連續的顯示頁數:';
$txt['smf236'] = '顯示';
$txt['todayMod'] = '開啟 &quot;今天&quot; 功能';
$txt['smf290'] = '關閉';
$txt['smf291'] = '只顯示今天';
$txt['smf292'] = '今天 &amp; 昨天';
$txt['topbottomEnable'] = '開啟 向上/向下 按鈕';
$txt['onlineEnable'] = '顯示 在線/離線 到文章內及私人訊息';
$txt['enableVBStyleLogin'] = '在每頁顯示快速登入';
$txt['defaultMaxMembers'] = '會員名單內顯示的會員數';
$txt['timeLoadPageEnable'] = '顯示開啟網頁的時間';
$txt['disableHostnameLookup'] = '關閉主機名搜尋?';
$txt['who_enabled'] = '開啟線上會員名單';

$txt['smf293'] = '評價';
$txt['karmaMode'] = '評價模式';
$txt['smf64'] = '關閉評價|開啟評價|允許正評價及負評價';
$txt['karmaMinPosts'] = '文章數必須大於多少才能修改評價';
$txt['karmaWaitTime'] = '評價等待時間 (小時)';
$txt['karmaTimeRestrictAdmins'] = '對版主限制等待時間';
$txt['karmaLabel'] = '評價標籤';
$txt['karmaApplaudLabel'] = '評價讚賞標籤';
$txt['karmaSmiteLabel'] = '評價懲罰標籤';

$txt['caching_information'] = '<div align="center"><b><u>注意！改變快取設定前請先閱讀。</b></u></div><br />
	SMF 支援加速器的快取功能。目前支援的加速器有：<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	</ul>
	要使用快取功能，您主機內的 PHP 必須支援上面的加速器，或有 memcache
	可以使用。 <br /><br />
	SMF 會在不同的層次進行快取功能。越高層次的快取會需要更長的 CPU 時間來
	讀取快取資料。如果可以使用快取，建議您一開始先使用第一的層次。
	<br /><br />
	注意如果您使用 memcached 您必須在下面提供主機的資料。輸入的格式必須用逗點來分開，
	像下面的範例：<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	記得如果不輸入連接埠， SMF 會使用 11211。 SMF 會在各個主機試著進行初簡化和隨機的負載平衡功能。
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF 無法偵測到相容的加速器。</b>';
$txt['detected_APC'] = '<b style="color: green">SMF 偵測到您的主機支援 APC。';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF 偵測到您的主機支援 eAccelerator。';
$txt['detected_MMCache'] = '<b style="color: green">SMF 偵測到您的主機支援 MMCache。';
$txt['detected_Zend'] = '<b style="color: green">SMF 偵測到您的主機支援 Zend。';
$txt['detected_Memcached'] = '<b style="color: green">SMF 偵測到您的主機有安裝 Memcached。';

$txt['cache_enable'] = '快取層次';
$txt['cache_off'] = '不使用快取';
$txt['cache_level1'] = '層次 1';
$txt['cache_level2'] = '層次 2 (不建議)';
$txt['cache_level3'] = '層次 3 (不建議)';
$txt['cache_memcached'] = 'Memcache 設定';

?>