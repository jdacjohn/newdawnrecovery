<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = 'array()';

$txt[1006] = '關閉視窗';

$helptxt['manage_boards'] = '
	<b>編輯版面</b><br />
	這個頁面可以讓你建立/重整/移除版面, 以及上面的類別. 
	譬如你的論壇範圍非常廣泛, 並提供 &quot;運動&quot;, &quot;車類&quot; 
	以及 &quot;音樂&quot;, 這些可以當成最高層的類別. 這些類別下面你可以建立等級制度的 
	&quot;子類別&quot;, 或 &quot;版面&quot;. 下面是一個簡單的構造: <br />
	<ul>
		<li>
			<b>運動Sports</b>
			&nbsp;- &quot;類別&quot;
			&nbsp;- A &quot;category&quot;
		</li>
		<ul>
			<li>
				<b>棒球Baseball</b>
				&nbsp;- 版面在 &quot;運動&quot; 的類別下面
				&nbsp;- A board under the category of &quot;Sports&quot;
			</li>
			<ul>
				<li>
					<b>統計資料Stats</b>
					&nbsp;- 在 &quot;棒球&quot; 的子版面下面
					&nbsp;- A child board under the board of &quot;Baseball&quot;
				</li>
			</ul>
			<li><b>籃球Football</b>
			&nbsp;- 版面在 &quot;運動&quot; 的類別下面
			&nbsp;- A board under the category of &quot;Sports&quot;</li>
		</ul>
	</ul>
	類別可讓你分開你的論壇並收取廣泛的話題 (&quot;車類, 運動&quot;), 
	而這些 &quot;版面&quot; 可讓會員發布新話題. 會員對籃球感興趣可發布文章到 
	&quot;運動->籃球&quot;. 類別並可幫助會員快速的尋找對他感興趣的版面: 
	與其用 &quot;商店&quot; 你可以用 &quot;硬體類&quot; 或 &quot;衣類&quot; 
	因為商店的範圍較廣. 這樣如果說你要找 &quot;主機板&quot; 
	可以到硬碟類版面.<br />
	就如上面所描述的, 版面是在類別下面. 如果你要討論 &quot;主機板&quot; 
	你可以到硬體類別下的主機板版面發佈你的文章.<br />
	這裡的管理功能可以讓你新增版面在類別下面, 從整順序 
	(把 &quot;主機板&quot; 放到 &quot;顯示卡&quot; 後面), 或者刪除版面.';

$helptxt['edit_news'] = '<b>編輯論壇新聞</b><br />
	這裡可以讓你發佈論壇新聞. 論壇新聞會出現在論壇主頁的新聞區裡. 
	你可以發佈任何新聞 (譬如 &quot;論壇在今天兩點將會關閉維修&quot;).
	每篇不同的新聞應該放在不同的區塊裡, 當主頁刷新時會改變.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>瀏覽會員名單</b><br />
			觀看會員的名單. 你可以點選會員名稱到會員資料頁. 會員資料頁可以讓你更進一步了解點選的會員 
			(主頁, 年齡等等.), 管理員可以改變這裡的資料. 你有全部的權利改變會員資料, 甚至刪除會員.<br /><br />
		</li>
		<li>
			<b>等待審核</b><br />	
			如果你的管理裡用了等待核准, 新會員註冊會出現在這裡, 會員的電子郵件及 IP 也會出現在這. 
			你可以點選列表的選項拒絕或核准. 用戶只有核准後才會變成會員. 當你拒絕用戶註冊後你可以選擇通知或不通知他們.<br /><br />
		</li>
		<li>
			<b>等待啟用</b><br />
			如果你的管理裡用了等待啟用, 這裡會出現任何還沒啟用帳號的會員. 這裡你可以選擇接受, 拒絕, 或通知他們. 
			如同上面所講, 你可以告知或不告知他們你所選擇的動作.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>阻擋會員</b><br />
	SMF 可以讓你 &quot;禁用&quot; 會員, 如果他們違反了論壇的規定. 
	管理員可以禁止他們瀏覽論壇. 在會員發佈的文章裡你可以看到他們的 IP. 
	只要把 IP 輸入到這裡就可以禁止他們發佈任何文章.注意: 有些會員的 IP 會改變.<br />或輸入他們的電子郵件阻擋會員.';

$helptxt['modsettings'] = '<b>修改特色及選項</b><br />
	這裡可以任意修改論壇的特色. 外掛的選項通常也會在這裡出現.';

$helptxt['number_format'] = '<b>數字格式</b><br />
	這裡可以讓您設定論壇使用的數字格式. 格式為: <br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	您可以使用 \',\' 來顯示千的單位, 或用 \'.\' 來顯示小數.';

$helptxt['time_format'] = '<b>時間格式</b><br />
	你可以修改時間格式給你自己. 這裡用了很多簡寫, 但是非常簡單. PHP 的strftime函數用法如下 
	(詳細的用法可到 <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	時間格式可用以下簡寫: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - 週日簡稱<br />
	&nbsp;&nbsp;%A - 週日名稱<br />
	&nbsp;&nbsp;%b - 月份簡稱<br />
	&nbsp;&nbsp;%B - 月份名稱<br />
	&nbsp;&nbsp;%d - 日子 (01 to 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - 如同 %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - 日子 (1 to 31) <br />
	&nbsp;&nbsp;%H - 24-hour 格式 (range 00 to 23) <br />
	&nbsp;&nbsp;%I - 12-hour 格式 (range 01 to 12) <br />
	&nbsp;&nbsp;%m - 數字月份 (01 to 12) <br />
	&nbsp;&nbsp;%M - 分鐘 <br />
	&nbsp;&nbsp;%p - 可用 &quot;am&quot; 或 &quot;pm&quot; 上午或下午<br />
	&nbsp;&nbsp;%R<b>*</b> - 時間以24小時標記 <br />
	&nbsp;&nbsp;%S - 秒數以小數計算 <br />
	&nbsp;&nbsp;%T<b>*</b> - 目前時間, 等於 %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2 位數年份 (00 to 99) <br />
	&nbsp;&nbsp;%Y - 4 位數年份<br />
	&nbsp;&nbsp;%Z - 時區 <br />
	&nbsp;&nbsp;%% - \'%\' 符號 <br />
	<br />
	<i>* 無法用在 Windows-based 伺服器.</i></span>';

$helptxt['live_news'] = '<b>Live 公告</b><br />
	這裡會出現 <a href="http://www.simplemachines.org/">www.simplemachines.org 的最新注意事項</a>
	這裡會常出現更新檔, 新論壇下載, 或 Simple Machines Team 的重要事件.';

$helptxt['registrations'] = '<b>註冊管理</b><br />
	這裡可以讓你用各種功能管理會員註冊. 依據你論壇的設定, 你會看到不同的區塊及功能. 這些是:<br /><br />
	<ul>
		<li>
			<b>註冊新會員</b><br />
			這裡你可以註冊新的會員. 當你的論壇已不開放註冊或你需要新增測試會員時可以用這個功能. . 如果你要求新會員啟用帳號, 
			啟用郵件會寄到他們的信箱裡, 他們必須依照郵件的指示啟動帳號. 你也可以選擇寄密碼給會員.
		</li>
		<li>
			<b>修改註冊同意條款</b><br />
			當新會員註冊時會看到論壇的同意條款. 你可以完全改變, 移除, 或修改 SMF 原有的同意條款內容.<br /><br />
		</li>
		<li>
			<b>保留帳號</b><br />
			這裡你可以禁止會員使用某些帳號.<br /><br />
		</li>
		<li>
			<b>設定</b><br />
			這個頁面只有在可管理論壇的權限下出現。這裡個讓您改變註冊的設定，和其他相關的設定。
		</li>
	</ul>';

$helptxt['modlog'] = '<b>管理紀錄</b><br />
	任何版主的管理紀錄都會在這出現, 譬如說刪除文章及刪除會員. 任何紀錄一定會在這出現, 如果版主要刪除必須等24小時過後.
	版主的動作變數都會出現在 \'物件\' 欄裡.';
$helptxt['error_log'] = '<b>錯誤紀錄</b><br />
	錯誤紀錄會紀錄所有會用使用論壇時而發生錯誤的紀錄. 所有錯誤是依照發生日期出現, 你也可以按日期旁邊的箭頭來進行類別. 
	此外你可以按錯誤旁的圖片來進行過濾. 譬如說過濾會員只會陳列你所過濾的會員.';
$helptxt['theme_settings'] = '<b>佈景設定</b><br />
	這裡可以讓你改變佈景的設定. 設定包括佈景的資料夾及 URL 的資料. 其他的選項可以讓你對佈景進行規劃. 
	有些佈景提供不同的選項任你規劃你所喜歡的論壇.';
$helptxt['smileys'] = '<b>表情圖案中心</b><br />
	在這裡您可以新增或移除表情圖案和圖案集. 注意如果一個表情圖案在一個圖案集裡面, 他必須也出現在每個圖案集.
	要不然會無法顯示.<br /><br />

	您也可以在這裡編輯文章的圖示，如果有開啟這個功能。';
$helptxt['calendar'] = '<b>管理日曆</b><br />
	這裡可以讓您修改目前的日曆設定，也可以新增或移除假期。';

$helptxt['serversettings'] = '<b>主機設定</b><br />
	這裡可以讓您改變論壇內主要的設定。這裡包含了資料庫和 URL 的設定，還有一些
	重要的功能像郵件設定和快取。請小心改變這裡的設定，任何錯誤可能會讓您的
	論壇無法使用';

$helptxt['topicSummaryPosts'] = '這裡可以讓你選擇出現在主題回覆時該出現的文章數.';
$helptxt['enableAllMessages'] = '這裡可以讓您設定顯示 全部 連結的 <em>最多</em> 文章數量。如果這個設定是小於 &quot;主題頁面顯示的文章數&quot; 表示永遠不會顯示 全部 的連結，如果設定太高可能會讓您的論壇變慢。';
$helptxt['enableStickyTopics'] = '頂置的主題會出現在版面的最上頭. 頂置可用在重要的主題. 原本的預設值只讓版主頂置主題.';
$helptxt['allow_guestAccess'] = '不勾選這個欄位會讓訪客無法進行任何動作，除了使用登入，忘記密碼功能等等。這個跟禁止訪客進入版面的權限不同。';
$helptxt['userLanguage'] = '使用這個選項可以讓會員改變論壇語言, 但是不會改變預設值.';
$helptxt['trackStats'] = '統計:<br />這個可以讓會員瀏覽最新的文章或最受歡迎的文章. 其他的統計像最高線上人數, 最新註冊會員, 及最新文章也會出現.<hr />
		點閱數:<br />添加新的統計欄顯示論壇的點閱數.';
$helptxt['titlesEnable'] = '使用這個可以讓會員輸入自己喜歡的頭銜. 頭銜會出現在會員名稱的下面.';
$helptxt['topbottomEnable'] = '這個選項會增加往上及往下, 會員可以點往上到最頂端及往下到最下端.';
$helptxt['onlineEnable'] = '這個選項會顯示會員在線或不在線的圖示';
$helptxt['todayMod'] = '顯示 &quot;今天&quot;, 或 &quot;昨天&quot; 來取代日期.';
$helptxt['enablePreviousNext'] = '顯示連結到下篇其上篇的文章.';
$helptxt['pollMode'] = '你可以選擇使用會禁止使用投票. 如果禁止使用投票, 任何現有的投票將會被隱藏. 你可以繼續顯示現有的主題如果你准許
		&quot;顯示現有投票為主題&quot;.<br /><br />權限選單可讓你選擇誰可以發表投票. 請記住這個選項如果投票功能出現問題.';
$helptxt['enableVBStyleLogin'] = '顯示登入區到論壇的最下端.';
$helptxt['enableCompressedOutput'] = '這個選項可以讓你使用 zlib 來壓縮帶寬. 一定要安裝 zlib 才可使用.';
$helptxt['databaseSession_enable'] = '此項功能將使用資料庫來管理工作階段。最好使用在有負載平衡功能的主機，也可能讓您的論壇更快。';
$helptxt['databaseSession_loose'] = '啟用此項功能會減少您論壇使用的寬頻, 但是如果您按回上頁不過更新您的頁面.';
$helptxt['databaseSession_lifetime'] = '您可以選擇工作階段的時間 (已秒計算), 最好是高於2400.';
$helptxt['enableErrorLogging'] = '這個會紀錄任何錯誤, 譬如說無法登入等等.';
$helptxt['allow_disableAnnounce'] = '這個可以讓會員反勾選公告主題的選項來退出公告文章的郵件通知。';
$helptxt['disallow_sendBody'] = '這個選項會在回覆的通知信件內移除文章內容。<br /><br />通常會員會直接回復通知信件，表示只有管理員才會收到回覆的訊息。';
$helptxt['compactTopicPagesEnable'] = '顯示頁數的格式.<br /><i>例如:</i>
		&quot;3&quot; 顯示為: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; 顯示為: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = '在論壇的最下方顯示 SMF 開啟主頁所花的時間.';
$helptxt['removeNestedQuotes'] = '只顯示引用的文章, 不會顯示任何相互套疊的引用.';
$helptxt['simpleSearch'] = '只顯示簡單的搜尋及進階搜尋的連結.';
$helptxt['max_image_width'] = '設定文章貼圖的最大值. 不會影響小於最大值的圖片.';
$helptxt['mail_type'] = '讓你選擇使用預設的 PHP 郵件軟體或你自己的郵件伺服器. 除了 sendmail 之外請輸入發出郵件的伺服器.';
$helptxt['attachmentEnable'] = '附件檔案可讓會員上傳檔案及貼入文章裡.<br /><br />
		<b>檢查附件檔案的副檔名</b>:<br /> 你要檢查附加檔案的副檔名嗎?<br />
		<b>允許的副檔名</b>:<br /> 設定可上傳的副檔名.<br />
		<b>附件檔案的路徑</b>:<br /> 你附加檔案的上傳路徑<br />(例如: /home/sites/yoursite/www/forum/attachments)<br />
		<b>附件檔案的目錄空間</b> (以 kB):<br /> 附件目錄的最大空間, 包括裡面的所有檔案.<br />
		<b>文章允許的檔案大小</b> (以 KB):<br /> 選擇每篇文章裡允許的全部檔案大小.  如果這個比每個檔案的大小限制還小, 將以這個來決定允許的檔案大小.<br />
		<b>每個附件檔案的最大值</b> (以 KB):<br /> 選擇每個檔案的最大值。<br />
		<b>每篇文章允許的檔案數</b>:<br /> 選擇每篇文章允許的檔案數.<br />
		<b>縮圖顯示附件檔案</b>:<br /> 如果上傳的檔案是圖片，可以直接在文章裡顯示。<br />
		<b>重新改變縮圖的尺寸</b>:<br /> 如果勾選，這會讓論壇改變圖片的尺寸，以縮圖顯示在文章下方。<br />
		<b>縮圖的最大寬和高度</b>:<br /> 必須勾選 &quot;重新改變縮圖的尺寸&quot; 功能。這會將圖片縮小至設定的寬度和高度。';
$helptxt['karmaMode'] = '評價代表會員的歡迎度. 如果允許的話, 會員可以增加或減少其他會員的歡迎度. 你可以改變要多少文章數才可以有一個 &quot;評價&quot;.
		<br /><br />您可以在權限選單裡面允許減少其他會員的歡迎度.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = '日曆可以顯示會員的生日及重要的公告.<br /><br />
		<b>顯示連結日期到 \'發表事件\'</b>:<br />當會員點選日期時可以讓他們發佈事件.<br />
		<b>顯示週數</b>:<br />顯示第幾個禮拜.<br />
		<b>論壇首頁顯示的天數</b>:<br />如果您設定的是7, 那一週內的事件都會出現在論壇首頁.<br />
		<b>主頁裡顯示假期</b>:<br />主頁裡會顯示今天是什麼假期.<br />
		<b>主頁裡顯示生日</b>:<br />主頁裡會顯示今天是誰的生日.<br />
		<b>主頁裡顯示事件</b>:<br />主頁裡會顯示今天的事件.<br />
		<b>事件將出現到的版面</b>:<br />您想要發表的事件出現在哪個版面內?<br />
		<b>允許事件不連到文章</b>:<br />可以直接讓會員發佈事件，不需選擇出現在哪個文章內。<br />
		<b>年份的最小值</b>:<br />設定日曆的 &quot;第一年&quot;.<br />
		<b>年份的最大值</b>:<br />設定日曆的 &quot;最後一年&quot;.<br />
		<b>生日顏色</b>:<br />輸入生日的顏色<br />
		<b>事件顏色</b>:<br />輸入事件的顏色<br />
		<b>假期顏色</b>:<br />輸入假期的顏色<br />
		<b>允許事件維持數日</b>:<br />勾選如果你允許同樣的事件維持多天.<br />
		<b>事件可維持日數</b>:<br />選擇事件可以維持的日數.<br /><br />
		記得會員使用日曆的功能 (發佈事件, 瀏覽事件等等) 可以在權限選單裡面開啟.';
$helptxt['localCookies'] = 'SMF 使用 cookies 來儲存登入資料到會員的電腦裡.
	Cookies 可以用全區性的方式儲存 (myserver.com) 或以區域性的方式來儲存 (myserver.com/path/to/forum).<br />
	使用這個選項如果會員無法永久登入, 或自動登出.<hr />
	普遍式儲存比較不安全如果你使用分享的伺服器 (譬如 Kimo 的免費網址).<hr />
	地區式儲存無法到論壇的資料夾外使用, 如果你的論壇安裝在 www.myserver.com/forum, 網頁像 www.myserver.com/index.php 將無法使用帳戶的資料.
	如果使用 SSI.php, 建議您使用全區性來儲存.';
$helptxt['enableBBC'] = '使用這個選項可讓會員使用 Bulletin Board Code (BBCode 代碼). BBCode 代碼可讓會員改變文章內容的形式.';
$helptxt['time_offset'] = '如果管理員不想使用跟伺服器一樣的時區, 可以輸入時差 (小時) 來改變時區, 時差是以伺服器的時區來計算. 可以輸入負數及小數.';
$helptxt['spamWaitTime'] = '你可以在這選擇會員發佈文章時該等的時間. 這個功能可以禁止會員灌水.';

$helptxt['enablePostHTML'] = '允許使用基本的 HTML:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = '這裡你可以允許會員使用哪些佈景, 及訪客使用的預設佈景. 你也可以點選佈景改變他的設定.';
$helptxt['theme_install'] = '這裡可以讓你安裝新的佈景. 你可以用已建的資料夾, 然後上傳你要的佈景, 或者複製預設的佈景.<br /><br />
	注意: 在佈景的資料夾裡必須要有 <tt>theme_info.xml</tt> 定義檔.';
$helptxt['enableEmbeddedFlash'] = '這個選項可讓會員在文章裡使用 Flash 檔,像圖檔一樣. 雖然安全問題必不嚴重, 使用 Flash 還是有一定的危險.';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = '允許會員連結 <a href="' . $scripturl . '?action=.xml;sa=news">最近公告</a>
	及相關的資料. 建議你限制最近公告及文章的使用值, 因為有些使用 RSS 數據的軟體會縮短公告的資料 (例如 Trillian).';
$helptxt['hotTopicPosts'] = '改變&quot;熱門主題&quot; 的文章數或 &quot;超熱門主題&quot; 的文章數.';
$helptxt['globalCookies'] = '允許使用次級域名的 Cookies. 例如, 如果...<br />
	您的網址是 http://www.simplemachines.org/,<br />
	您的論壇在 http://forum.simplemachines.org/,<br />
	使用此項可以讓你使用論壇的 cookie 在您的網址裡。請勿使用這項功能如果次網域 (像 hacker.simplemachines.org 不是您所擁有)。';
$helptxt['securityDisable'] = '當管理員進入管理區時需要再輸入一次密碼. 這個選單可讓你關掉這個功能, 但是並不建議使用!';
$helptxt['securityDisable_why'] = '這是您的密碼 (跟你登入時的密碼相同).<br /><br />輸入您的密碼可保證是您本人在修改論壇的設定.';
$helptxt['emailmembers'] = '郵件內容可讓你使用少許的 &quot;變數&quot;. 這些是:<br />
	{$board_url} - 論壇的地址.<br />
	{$current_time} - 目前時間.<br />
	{$member.email} - 會員郵件地址.<br />
	{$member.link} - 會員網址.<br />
	{$member.id} - 會員編號.<br />
	{$member.name} - 會員名稱.<br />
	{$latest_member.link} - 最新註冊會員網址.<br />
	{$latest_member.id} - 最新註冊會員編號.<br />
	{$latest_member.name} - 最新註冊會員名稱.';
$helptxt['attachmentEncryptFilenames'] = '加密附加檔案可讓你安全的重複使用同樣的檔案名及 .php 檔. 但是資料庫如果發生錯誤會較難修復.';

$helptxt['failed_login_threshold'] = '設定錯誤登入的數量, 之後轉向到忘記密碼頁面.';
$helptxt['oldTopicDays'] = '如果使用這個功能，會員在回覆文章時會檢查主題的日期，如果主題已很久沒有回復，會員會收到警告的訊息。設為 0 表示關閉此功能。';
$helptxt['edit_wait_time'] = '如果會員在設定的時間內編輯文章，文章將不會顯示最後編輯時間的訊息。';
$helptxt['edit_disable_time'] = '過了多久後會員將無法編輯文章。設為 0 關閉此功能。<br /><br /><i>注意：不會影響可以編輯其它會員的文章的會員。</i>';
$helptxt['enableSpellChecking'] = '允許拼字檢查. 必須要安裝 pspell 程式庫到您的伺服器裡及 PHP 設定使用 pspell. 您的伺服器 ' . (function_exists('pspell_new') == 1 ? '有' : '沒有') . ' 安裝 pspell.';
$helptxt['lastActive'] = '顯示時間已內的在線會員. 預設值是15分鐘.';

$helptxt['autoOptDatabase'] = '定時優化資料庫. 設定為一天可讓您定時每天進行優化. 你可以輸入在線會員的最大值, 以免伺服器負荷過重.';
$helptxt['autoFixDatabase'] = '自動修復資料庫的表格. 通成這是修復資料庫的唯一辦法. 當修復時會自動郵件通知您.';

$helptxt['enableParticipation'] = '圖示會員發佈文章的主題.';

$helptxt['db_persist'] = '延續線路使伺服器永遠在線. 通常會增加論壇速度但是有些主機會產生問題.';

$helptxt['queryless_urls'] = '改變論壇的網址讓搜尋網站更容易找到, 論壇網址會以html方式顯示. 這會像 index.php/action_profile/u_1.<br /><br />這項功能' . (strpos(php_sapi_name(), 'apache') !== false ? '' : '不') . '可用在您的伺服器.';
$helptxt['countChildPosts'] = '勾選這個功能表示子版面內的文章也會計算在論壇首頁顯示的文章數。<br /><br />這會讓論壇變慢，同時也表示沒有文章的母版面不會顯示 0 篇文章。';
$helptxt['fixLongWords'] = '這項功能可縮短長句子以免破壞論壇的外觀.';

$helptxt['who_enabled'] = '這項功能可讓你允許或禁止觀看同區瀏覽的會員.';

$helptxt['recycle_enable'] = ' 將 &quot;回收文章&quot; 移到到選擇的版面.';

$helptxt['enableReportPM'] = '這可以讓您的會員檢舉不當的私人訊息。';
$helptxt['max_pm_recipients'] = '這個選項可以讓您設定每個會員最多一次能夠寄件給多少會員。這是為了避免私人訊息的系統被濫用。記得如果會員能夠寄送新聞信件，他們不會被這個設定限制。設定 0 如果不限制收件者的上限。';
$helptxt['pm_posts_verification'] = '這個設定會強制會員在傳送私人訊息時輸入驗證碼。只有文章少於某數量的會員需要輸入驗證碼 - 這可以用來防止自動的垃圾攻擊。';
$helptxt['pm_posts_per_hour'] = '這個設定會限制會員在一個小時內傳送的私人訊息數量，但不限於管理員和版主。';

$helptxt['default_personalText'] = '設定預設的 &quot;個人訊息.&quot;';

$helptxt['modlog_enabled'] = '紀錄所有管理動作.';

$helptxt['guest_hideContacts'] = '如果使用這項功能, 會員的電子郵件和即時通訊帳號將不會對訪客顯示.';

$helptxt['registration_method'] = '您可以設定哪種會員註冊的方法, 您可以選擇:<br /><br />
	<ul>
		<li>
			<b>禁止註冊:</b><br />
				禁止新會員註冊.<br />
		</li><li>
			<b>馬上註冊</b><br />
				新註冊會員可馬上發佈文章.<br />
		</li><li>
			<b>啟用帳號</b><br />
				新註冊用戶會收到論壇的啟用郵件, 用戶必須啟用帳號才可成為會員.<br />
		</li><li>
			<b>核准帳號</b><br />
				新註冊用戶必須等管理員核准才可成為會員.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = '當使用這項功能時, 改變電子郵件的會員必須重新啟用帳號';
$helptxt['send_welcomeEmail'] = '當使用這項功能時, 新註冊會員會收到歡迎信件';
$helptxt['password_strength'] = '這個設定可以讓您使用不同的密碼困難度。越困難的密碼表示越難被駭。
	可用的設定是：
	<ul>
		<li><b>低：</b> 密碼必須多於 4 個字元。</li>
		<li><b>中：</b> 密碼必須多於 8 個字元，不能包括會員名稱和電子郵件。</li>
		<li><b>高：</b> 跟中相同，但是密碼必須有大小寫的字母和至少一個數字。</li>
	</ul>';

$helptxt['coppaAge'] = '這個數值可以讓您限制會員的年齡，如果年齡多於設定的年齡，會員可馬上登入。
	在註冊時會員必須提供年齡，如果年齡太小，您可以選擇馬上拒絕註冊，或等待審核。
	如果輸入 0 表示不限制年齡。';
$helptxt['coppaType'] = '如果使用年齡限制的功能，這裡的設定可以讓您選擇對年齡過小的會員所進行的動作，有兩個選擇：
	<ul>
		<li>
			<b>馬上拒絕註冊：</b><br />
				年齡太小會馬上被拒絕註冊。<br />
		</li><li>
			<b>需要監護人認可</b><br />
				任何年齡太小的會員需要監護人的認可才能註冊，註冊會標示為等待認可。之後論壇會顯示認可的表單。
				會員必須請監護人認可後將表單寄回或傳真給管理員。
		</li>
	</ul>';
$helptxt['coppaPost'] = '這裡的欄位必須填寫如果論壇有限制會員的年齡。資料會顯示給年齡過小的會員，會員必須要監護人的認可才能註冊完成。至少需要提供地址或傳真號碼的資料。';

$helptxt['allow_hideOnline'] = '允許使用此項功能可讓會員隱藏自己, 只有管理員才能看到他們. 如果不允許, 只有版主才能隱藏上線資料.';
$helptxt['allow_hideEmail'] = '使用這項功能可讓會員隱藏他們的電子郵件, 只有管理員或版主可看到.';

$helptxt['latest_support'] = '這裡會顯示您伺服器常發生問題及錯誤, 但是不會被紀錄下來.<br /><br />如果顯示 &quot;擷取維護資料...&quot;, 表示你無法連接到 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = '這裡會顯示最評價高的外掛及軟件, 還有安裝方法.<br /><br />如果未顯示任何東西表示你無法連接到 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = '這裡會顯示 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> 的最新及最受歡迎的佈景. 如果未顯示任何東西表示您無法連接到 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = '因為安全問題, 您問題的答案 (以及密碼) 都是用 SMF 的方法來加密. SMF 有辦法確認您的身分如果您提供正確的答案, 但是從不會顯示您的答案或密碼.';
$helptxt['moderator_why_missing'] = '您必須到 <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">board management interface</a> 來選擇版主.';

$helptxt['permissions'] = '權限頁面允許你設定組群所能做的事.<br /><br />你可以從選單來更改權限, 然後套用到版面.';
$helptxt['permissions_board'] = '如果版面的設定值是 \'全區性,\' 表示這個版面無特別的權限.  \'區域性\' 表示版面有自己的權限 - 跟全區性不同. 如果有些版面的權限跟別區不同, 您可以用區域性設定, 這樣您就不用一個版面一個版面設定.';
$helptxt['permissions_quickgroups'] = '您可以用 &quot;預設&quot; 權限 - 普通表示 \'無特別權限\', 限制表示 \'訪客的權限\', 版主表示 \'版主的權限\', 及 \'維修權限\' 表示跟版主接近的權限.';
$helptxt['permissions_deny'] = '停用的權限會讓會員無法使用某種功能。您可以新增一個群組，給它停用的權限，然後把將會員加入到那個群組。<br /><br />記住，停用的權限會完全禁止會員使用某種功能，不管會員是不是屬於其它的群組。';
$helptxt['permissions_postgroups'] = '開啟依文章數的群組可以讓您依照會員的文章數來改變會員的權限。文章數的權限會 <em>加在</em> 特殊群組的權限內。';
$helptxt['permissions_by_board'] = '開啟這個選項可以讓您改變不同版面和不同群組的權限。預設的版面是使用全區性的權限。開啟這個功能可以讓您將權限改成區域性權限。';
$helptxt['membergroup_guests'] = '訪客的群組是任何未登入的使用者。';
$helptxt['membergroup_regular_members'] = '普通會員是已登入的會員，但是不屬於任何特殊群組。';
$helptxt['membergroup_administrator'] = '管理員可以管理任何版面和任何設定。您不能改變管理員的權限。';
$helptxt['membergroup_moderator'] = '版主的群組是特殊群組。它的權限只有在<em>版主可管理的版面才有效</em>。在其他版面就跟其他會員相同。';
$helptxt['membergroups'] = 'SMF的論壇使用兩種的會員群組, 他們是:
	<ul>
		<li><b>特殊群組:</b>特殊群組是版主必須指定的會員群組. 如要加入某位會員進入特殊群組, 請到會員的個人資料裡的 &quot;帳號設定&quot; 裡面.
		<li><b>文章群組:</b>文章群組是以會員的文章數來類別的群組.
	</ul>';

$helptxt['calendar_how_edit'] = '您可以點名稱旁的紅色 (*) 來修改事件.';

$helptxt['maintenance_general'] = '這裡你可以優化資料庫 (變小及變快!), 但是您必須要有最新的版本. 優化資料庫可讓您找出錯誤, 重新計算, 及刪除紀錄.<br /><br />除了無法修復的錯誤, 盡量避免使用最後兩項.';
$helptxt['maintenance_backup'] = '這裡您可以備份文章, 設定, 會員資料, 及其他消息.<br /><br />建議您作好防禦措施, 要時常備份以免無法修復論壇的錯誤.';
$helptxt['maintenance_rot'] = '這裡您可以完全的刪除舊文章. 刪除的文章將無法恢復. 建議您先備份在移除, 以免刪除了您要的文章. <br /><br />使用這項功能時請特別注意.';

$helptxt['avatar_allow_server_stored'] = '您可以允許會員使用您伺服器裡的頭像. 頭象通常儲存在 Avatars 資料夾裡.<br />如果您要使用不同種類的頭像, 您可以建立新的資料夾在 Avatars 下面.';
$helptxt['avatar_allow_external_url'] = '您可以允許會員連結其他網址的頭像. 您必須注意會員連結的頭像不會太大或使用不正當頭像.<br /><br />記得會員必須要有特定的權限才能使用這項功能.';
$helptxt['avatar_download_external'] = '當勾選這個選項，會員可以提供頭像的網址。如果圖片可正常顯示，它會以上傳頭想表示。';
$helptxt['avatar_allow_upload'] = '這項設定跟連結頭像差不多, 但是全部的頭像會儲存到您的主機裡, 會員也不必擔心要把頭像放到其他的網址裡. <br /><br />注意頭像占的容量可能會非常大.';
$helptxt['avatar_download_png'] = 'PNGs 檔通常較大, 但是壓縮品質較好. 如果您不允許 PNG 檔, 圖檔會使用 JPEG. JPEG 檔較小但是品質較差.';

$helptxt['disableHostnameLookup'] = '這項禁止使用搜索主機名稱, 但是有些伺服器會變慢. 可能會讓您禁止用戶的方法較無作用.';

$helptxt['search_weight_frequency'] = '搜尋重量是用來決定適當的搜尋結果。您可以對符合論壇的重要性來改變這些重量。例如一個新聞的論壇，較高的 \'最後一篇文章的日期\' 的數值會比較好。全部的數值必須是正數。<br /><br />這個重量會計算符合的文章的數量，然後除於主題內的文章數。';
$helptxt['search_weight_age'] = '搜尋重量是用來決定適當的搜尋結果。您可以對符合論壇的重要性來改變這些重量。例如一個新聞的論壇，較高的 \'最後一篇文章的日期\' 的數值會比較好。全部的數值必須是正數。<br /><br />這個重量會找主題內最後一篇文章的日期。越新的日期，分數越高。';
$helptxt['search_weight_length'] = '搜尋重量是用來決定適當的搜尋結果。您可以對符合論壇的重要性來改變這些重量。例如一個新聞的論壇，較高的 \'最後一篇文章的日期\' 的數值會比較好。全部的數值必須是正數。<br /><br />這個重量會計算主題的文章數量。越多文章的主題，分數越高。';
$helptxt['search_weight_subject'] = '搜尋重量是用來決定適當的搜尋結果。您可以對符合論壇的重要性來改變這些重量。例如一個新聞的論壇，較高的 \'最後一篇文章的日期\' 的數值會比較好。全部的數值必須是正數。<br /><br />這個重量會在主題的標題內找搜尋字。';
$helptxt['search_weight_first_message'] = '搜尋重量是用來決定適當的搜尋結果。您可以對符合論壇的重要性來改變這些重量。例如一個新聞的論壇，較高的 \'最後一篇文章的日期\' 的數值會比較好。全部的數值必須是正數。<br /><br />這個重量會在主題內的第一篇文章內找搜尋字。';
$helptxt['search_weight_sticky'] = '搜尋重量是用來決定適當的搜尋結果。您可以對符合論壇的重要性來改變這些重量。例如一個新聞的論壇，較高的 \'最後一篇文章的日期\' 的數值會比較好。全部的數值必須是正數。<br /><br />這個重量會看主題是不是頂置主題，如果是，它的分數越高。';
$helptxt['search'] = '這裡可以改變搜尋功能的設定。';
$helptxt['search_why_use_index'] = '搜尋索引會改善論壇的搜尋速度。特別是當文章數越來越多，不用索引會讓您的搜尋和資料庫速度變慢。如果您的論壇多於 50.000 篇文章，建議您建立搜尋索引。<br /><br />注意搜尋索引會佔較大空間。Fulltext 索引是 MySQL 內建的索引功能。它佔的空間比較小 (大概跟文章的資料表相同)，但是很多字不包括在索引內，速度也比較慢。自設的索引通常比較大 (依設定而定可能會大於文章的資料表的三倍)，但是它比 Fulltext 還快，也較穩定。';

$helptxt['see_admin_ip'] = 'IP位址可讓版主追蹤會員的動作, 但是有些IP經常改變. 會員也可以看到自己的IP.';
$helptxt['see_member_ip'] = '只有會員自己和版主可以看到IP. 其他的會員無法看到您的IP, 您也不能看到其他會員的IP, 除非您是管理員.';

$helptxt['ban_cannot_post'] = '\'不能發佈\' 的限制會禁止被阻擋的會員進行發言。他們將不能發佈主題，回覆文章，寄送私人訊息或參與投票。不過他們還是可以閱讀私人訊息和文章。<br /><br />論壇會顯示警告訊息給這些會員。';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>文章設定</b><br />
			改變發佈文章和顯示文章的設定。這裡也可以讓您開啟拼字功能。
		</li><li>
			<b>Bulletin Board Code</b><br />
			開啟 BBC 的功能。也可以選擇允許和不允許的 BBC。
		</li><li>
			<b>封鎖的字元</b>
			為了避免論壇出現不正當的發言，您可以將某些字封鎖不讓會員使用。這個功能可以讓您將封鎖的字改成其它的顯示方法。
		</li><li>
			<b>主題設定</b>
			改變主題的設定。您可以改變每頁顯示的主題數，使用頂至主題，或是熱門主題的數量等等。
		</li>
	</ul>';

?>