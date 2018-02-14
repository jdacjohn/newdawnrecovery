<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'ウィンドウを閉じる';

$helptxt['manage_boards'] = '
	<b>>掲示板編集</b><br />
	このメニューから掲示板とカテゴリの作成／並べ替え／削除ができます。
	例えば、スポーツ」、「車」、そして「音楽」等、幅広い分野を取り扱っているサイトの場合、これらが最上位のカテゴリにくるでしょう。
	また、各カテゴリの下にはその分野に応じたスレッド、子板を設置することができます。<br />
	具体的には、以下のような簡単な階層構造になっています：<br />
	<ul>
		<li>
			<b>スポーツ</b>
			&nbsp;- 「カテゴリ」
		</li>
		<ul>
			<li>
				<b>野球</b>
				&nbsp;- 「スポーツ」というカテゴリの掲示板
			</li>
			<ul>
				<li>
					<b>統計</b>
					&nbsp;-「野球」掲示板の中の子板
				</li>
			</ul>
			<li>
				<b>サッカー</b>
				&nbsp;- 「スポーツ」というカテゴリの掲示板
			</li>
		</ul>
	</ul>
	カテゴリによって、フォーラムをおおざっぱに分類し、メンバーは、
	その中に含まれる掲示板で趣旨に添った話題の投稿や、
	スレッドを立てる事ができます。
	たとえば、ハチロクに興味を持つユーザは「車→ハチロク」で投稿をするでしょう。<br />
	このように、カテゴリは利用者の関心があるものをすばやく見つけるのに役立ちます。
	買い物に例えると、
	「ジョイントコンパウンド」(パイプ用のジョイントコンパウンドはまず見つからないであろう)を買う際に
	漠然と「雑貨屋」へ行くのではなく、「機材」や「衣類」の店へと行くことができるからです。
	これにより、「ジョイントコンパウンド」を探すのに  衣類の店ではなく、
	機材の店という「カテゴリ」へと行くことができるため、自分の探し物が楽になります。<br />
	管理人室で使用できる機能は、各カテゴリの下に新しい掲示板を作る
	設置する（「トレノ」の後ろに「ハチロク」を置く等）、整理する
	もしくは掲示板を完全に削除する等です。';

$helptxt['edit_news'] = '<b>フォーラムからのお知らせの編集</b><br />
	掲示板一覧にフォーラムからのお知らせを書き込むことができます。お好きなものを書き込んでください。
	（例：今週の火曜日、会議に遅れないように！」など）ニュースは複数のテキストボックスに
	書き込むことにより、それらをランダムに表示させることができます。';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>全てのメンバーを表示</b><br />
			掲示板に全てのメンバーを表示させます。メンバー名のハイパーリンクが張られたリストが表示されます。
			これをクリックすることにより、メンバーの情報（ホームページ，年齢他）を閲覧できます。
			また、管理人は、それらの情報を修正できます。
			あなたは、フォーラムのメンバーに関する、削除するなどを含めた完全な権限を持っています。<br /><br />
		</li>
		<li>
			<b>承認待ちのメンバー</b><br />
			このセクションは、新しいメンバーが、フォーラムへ登録する際に、管理人の承認を必要とする設定をしている場合表示されます。一旦管理人によって承認を得たメンバーは、正式メンバーとなります。
			ここでは、承認を得ていないメンバーのメールアドレスとIPアドレスのリストが表示されます。
			そのメンバーの登録を承認するかしないかは、チェックボックスをクリックし、ページの下のポップアップメニューから一括で否認したり、
			拒絶（削除）することができます。
			なお、メンバーの登録を否認するときに、その処置をそのメンバーにメールで通知することもできます。<br /><br />
		</li>
		<li>
			<b>アクティベーション待ち</b><br />
			このセクションでは、新しくメンバーが登録されたときに、フォーラムからアクティベーションコードの入ったメールを送信する設定の時に表示されます。
			ここでは、アクティベーションを行っていないメンバーのアカウントのリストが表示されます。
			この画面から、そのメンバーを管理人の手でアクティベーションを行ったり、拒絶、再発行することができます。
			なお、ここで行った処置をそのメンバーにメールで通知することもできます。<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>メンバー制裁</b><br />
	スパムや荒らし行為などにより掲示板の信頼を汚した人々を立ち入らせないため、SMFはユーザを「キック」する機能を備えています。
	これは、フォーラムにとって有害なユーザに対して有効です。
	管理人はメッセージ閲覧時、各ユーザが投稿した時点の IP アドレスを見ることができます。
	キック一覧内にその IPアドレスを入力し保存するだけで、彼らは投稿できなくなります。<br />
	あなたは、彼らのメールアドレスにその事を通知することができます。';

$helptxt['modsettings'] = '<b>全般の設定</b><br />
	ここでは、フォーラムの全般的な設定を行います。一部のMODでは、ここにそのオプションが現れます。';

$helptxt['number_format'] = '<b数値の表示形式</b><br />
	ここでは、以下に示すようなフォーラムで表示される数字の表示形式を指定できます：<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	ここでの『,』は１０００桁を表し、『.』は０以下の小数点を表す文字です。';

$helptxt['time_format'] = '<b>時刻形式</b><br />
	ここでは、フォーラムで表示される時刻の表示形式を設定できます。いくつかややこしい引数がありますが単純です。
	（詳細は<a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>を参照してください。）
	<br />
	引数は、以下のように変換されます：<br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - 短縮された曜日の名前<br />
	&nbsp;&nbsp;%A - 曜日の名前 <br />
	&nbsp;&nbsp;%b - 短縮された月の名前<br />
	&nbsp;&nbsp;%B - 月の名前 <br />
	&nbsp;&nbsp;%d - 日付を10進数で（01～31）<br />
	&nbsp;&nbsp;%D<b>*</b> - %m/%d/%yと同じ<br />
	&nbsp;&nbsp;%e<b>*</b> - 月単位の日付を10進数で表したもの（01～31）<br />
	&nbsp;&nbsp;%H - 24時間表示の時間（00～23）<br />
	&nbsp;&nbsp;%I - 12時間表示の時間（01～12）<br />
	&nbsp;&nbsp;%m - 月を10進数で表記（01～12）<br />
	&nbsp;&nbsp;%M - 分を10進数で表記<br />
	&nbsp;&nbsp;%p - 指定した時間の「am」と「pm」を指定<br />
	&nbsp;&nbsp;%R<b>*</b> - 24時間表記の時間<br />
	&nbsp;&nbsp;%S - 秒を10進数で表記<br />
	&nbsp;&nbsp;%T<b>*</b> - 現在の時間。%H:%M:%Sと同じ<br />
	&nbsp;&nbsp;%y - 世紀の部分を除いた年（00～99）<br />
	&nbsp;&nbsp;%Y - 世紀を含む年を４桁で表記<br />
	&nbsp;&nbsp;%Z - タイムゾーンまたはその名前または短縮形<br />
	&nbsp;&nbsp;%% - 文字リテラル<br />
	<br />
	<i>*印は、サーバーＯＳにWindows系を使ってる場合この書式は使えません。</i></span>';

$helptxt['live_news'] = '<b>SMFからのお知らせ</b><br />
	このボックスには、<a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>からのお知らせが表示されます。
	アップデートの確認、リリース情報、そのほか重要な情報が公式サイトから送られてきます。';

$helptxt['registrations'] = '<b>メンバー管理</b><br />
	このセクションでは、メンバーの登録に際に関する設定を行います。
	ここでできる設定は、以下の４つのです：<br /><br />
	<ul>
		<li>
			<b>メンバー登録</b><br />
			この画面では、管理人が手動でメンバーのアカウントを作成します。
			これは、フォーラムが内輪向けである場合や、管理人がテスト用のアカウントを作成する場合において役立つでしょう。
			アカウントのアクティベーションを行う設定の場合、そこで指定されたメンバーにアクティベーションメールが送られます。
			また、そこで新しいパスワードを一緒に送信することもできます。<br /><br />
		</li>
		<li>
			<b>利用規約の編集</b><br />
			ここでは、メンバーがこのフォーラムに登録する際に表示される、利用規約文を設定することができます。
			あなたは、デフォルトの文章を書き換えることができます。これはSMFの中に含まれます。<br /><br />
		</li>
		<li>
			<b>予約名の設定</b><br />
			ここでは、ユーザーに使われて欲しくない名前を設定します。<br /><br />
		</li>
		<li>
			<b>設定</b><br />
			This section will only be visible if you have permission to administrate the forum. From this screen you can decide on the registration method
			is use on your forum, as well as other registration related settings.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Moderation Log</b><br />
	This section allows members of the admin team to track all the moderation actions that the forum moderators have performed. To ensure that
	moderators cannot remove references to the actions they have performed, entries may not be deleted until 24 hours after the action was taken.
	The \'objects\' column lists any variables associated with the action.';
$helptxt['error_log'] = '<b>エラーログ</b><br />
	The error log tracks logs every serious error encountered by users using your forum. It lists all of these errors by date which can be sorted
	by clicking the black arrow next to each date. Additionally you can filter the errors by clicking the picture next to each error statistic. This
	allows you to filter, for example, by member. When a filter is active the only results that will be displayed will be those that match that filter.';
$helptxt['theme_settings'] = '<b>テーマ設定</b><br />
	The settings screen allows you to change settings specific to a theme. These settings include options such as the themes directory and URL information but
	also options that affect the layout of a theme on your forum. Most themes will have a variety of user configurable options, allowing you to adapt a theme
	to suit your individual forum needs.';
$helptxt['smileys'] = '<b>スマイリーセンター</b><br />
	Here you can add and remove smileys, and smiley sets.  Note importantly that if a smiley is in one set, it\'s in all sets - otherwise, it might
	get confusing for your users using different sets.<br /><br />

	You are also able to edit message icons from here, if you have them enabled on the settings page.';
$helptxt['calendar'] = '<b>カレンダーの管理</b><br />
	Here you can modify the current calendar settings as well as add and remove holidays that appear on the calendar.';

$helptxt['serversettings'] = '<b>Server Settings</b><br />
	Here you can perform the core configuration for your forum. This section includes the database and url settings, as well as other
	important configuration items such as mail settings and caching. Think carefully whenever editing these settings as an error may
	render the forum inaccessible';

$helptxt['topicSummaryPosts'] = 'この機能は、あなたの投稿がスクリーンでスレッド内容の要約の中で示される文字数をセットする事ができます。';
$helptxt['enableAllMessages'] = 'Set this to the <em>maximum</em> number of posts a topic can have to show the all link.  Setting this lower than &quot;Maximum messages to display in a topic page&quot; will simply mean it never gets shown, and setting it too high could slow down your forum.';
$helptxt['enableStickyTopics'] = 'Stickies are topics that remain on top of the topic list. They are mostly used for important
		messages. Although you can change this with permissions, by default only moderators and administrators can make topics sticky.';
$helptxt['allow_guestAccess'] = 'Unchecking this box will stop guests from doing anything but very basic actions - login, register, password reminder, etc. - on your forum.  This is not the same as disallowing guest access to boards.';
$helptxt['userLanguage'] = 'Turning this option on will allow users to select which language file they use. It will not affect the
		default selection.';
$helptxt['trackStats'] = '状況：<br />ここから、このフォーラムでだれが最後に投稿したか、
		投稿数が多いスレッド等の全般の統計情報を見ることができます。<hr />
		Page views:<br />Adds another column to the stats page with the number of pageviews on your forum.';
$helptxt['titlesEnable'] = 'Switching Custom Titles on will allow members with the relevant permission to create a special title for themselves.
		This will be shown underneath the name.<br /><i>For example:</i><br />Jeff<br />Cool Guy';
$helptxt['topbottomEnable'] = 'This will add go up and go down buttons, so that member can go to the top and bottom of a page
		without scrolling.';
$helptxt['onlineEnable'] = 'これは、メンバーのオンライン／オフラインを画像で表示させるものです。';
$helptxt['todayMod'] = '日付の代わりに「今日」と「昨日」を表示させます。';
$helptxt['enablePreviousNext'] = 'This will show a link to the next and previous topic.';
$helptxt['pollMode'] = 'This selects whether polls are enabled or not. If polls are disabled, any existing polls will be hidden
		from the topic listing. You can choose to continue to show the regular topic without their polls by selecting
		&quot;Show Existing Polls as Topics&quot;.<br /><br />To choose who can post polls, view polls, and similar, you
		can allow and disallow those permissions. Remember this if polls are not working.';
$helptxt['enableVBStyleLogin'] = 'This will show a more compact login on every page of the forum for guests.';
$helptxt['enableCompressedOutput'] = 'こオプションは、出力する際に圧縮し、転送量を減らすことができます。
		ただし、サーバーにzlibがインストールされてることが条件です。';
$helptxt['databaseSession_enable'] = 'This option makes use of the database for session storage - it is best for load balanced servers, but helps with all timeout issues and can make the forum faster.';
$helptxt['databaseSession_loose'] = 'Turning this on will decrease the bandwidth your forum uses, and make it so clicking back will not reload the page - the downside is that the (new) icons won\'t update, among other things. (unless you click to that page instead of going back to it.)';
$helptxt['databaseSession_lifetime'] = 'This is the number of seconds for sessions to last after they haven\'t been accessed.  If a session is not accessed for too long, it is said to have &quot;timed out&quot;.  Anything higher than 2400 is recommended.';
$helptxt['enableErrorLogging'] = 'This will log any errors, like a failed login, so you can see what went wrong.';
$helptxt['allow_disableAnnounce'] = 'This will allow users to opt out of notification of topics you announce by checking the &quot;announce topic&quot; checkbox when posting.';
$helptxt['disallow_sendBody'] = 'This option removes the option to receive the text of replies and posts in notification emails.<br /><br />Often, members will reply to the notification email, which in most cases means the webmaster receives the reply.';
$helptxt['compactTopicPagesEnable'] = 'これは、ページの表示のされ方を設定します。<br /><i>例：</i>
		&quot;3&quot;の場合： 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot;の場合： 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'This will show the time in seconds SMF took to create that page at the bottom of the board.';
$helptxt['removeNestedQuotes'] = 'This will only show the quote of the post in question, not any quoted posts from that post.';
$helptxt['simpleSearch'] = 'これは、簡易検索フォームと詳細検索フォームを表示させるものです。';
$helptxt['max_image_width'] = 'れは、投稿される画像ファイルの最大サイズをセットします。画像がこれよりも小さい場合は無視されます。';
$helptxt['mail_type'] = 'これは、PHPがメールを送信に使われる方式を指定できます。もしも、Sendmailを使用しない場合、メールサーバー、ユーザー名、パスワード等を別途書き込む必要があります。<br /><br />You don\'t need to fill in the SMTP settings if this is set to PHP\'s default.';
$helptxt['attachmentEnable'] = 'ファイル添付とは、メンバーが投稿時にファイルをアップロードすることです。<br /><br />
		<b>ゲストの添付ファイルの投稿を許可</b>：<br />ゲストによるファイル添付を許可する場合選択してください。<br />
		<b>添付ファイルの拡張子のチェック</b>：<br />添付されたファイルの拡張子をチェックします。<br />
		<b>添付ファイルの画像を投稿に表示</b>：<br />画像ファイルがアップロードされた際に投稿文の下に画像を表示させます。<br />
		<b>許可する添付ファイルの拡張子</b>：<br />添付することができるファイルの拡張子を設定できます。<br />
		<b>添付ファイルのアップ先のパス</b>：<br />添付ファイルを格納するフォルダへのパスです。<br />（例：/home/sites/yoursite/www/forum/attachments）<br />
		<b>添付ファイルのURL</b>：<br />添付ファイルを格納するフォルダのURLです。<br />（例：http://www.yoursite.com/forum/attachments）<br />
		<b>添付ファイルの最大サイズ</b>（kBで設定）：<br />添付できるファイルサイズの上限を設定できます。<br />
		<b>添付ファイルフォルダのサイズの容量：</b>（kBで）：<br />添付ファイルの容量の制限を設定できます。<br /><b>Resize images when showing under posts</b>:<br /> If the above option is selected, this will save a separate (smaller) attachment for the thumbnail to decrease bandwidth.<br />
		<b>Maximum width and height of thumbnails</b>:<br /> Only used with the &quot;Resize images when showing under posts&quot; option, the maximum width and height to resize attachments down from.  They will be resized proportionally.';
$helptxt['karmaMode'] = '雰囲気（Karma）は、メンバーの好感度を示すものです。 Members, if allowed, can
		\'applaud\' or \'smite\' other members, which is how their popularity is calculated. You can change the
		number of posts needed to have a &quot;karma&quot;, the time between smites or applauds, and if administrators
		have to wait this time as well.<br /><br />Whether or not groups of members can smite others is controlled by
		a permission.  If you have trouble getting this feature to work for everyone, double check your permissions.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'カレンダーは、ユーザの誕生日やコミュニティにおける重要なお知らせ等を表示するために使われます。<br /><br />
		<b>Show days as link to \'Post Event\'</b>:<br />This will allow members to post events for that day, when they click on that date<br />
		<b>Show week numbers</b>:<br />Show which week it is.<br />
		<b>Max days in advance on board index</b>:<br />If this is set to 7, the next week\'s worth of events will be shown.<br />
		<b>Show holidays on board index</b>:<br />Show today\'s holidays in a calendar bar on the board index.<br />
		<b>Show birthdays on board index</b>:<br />Show today\'s birthdays in a calendar bar on the board index.<br />
		<b>Show events on board index</b>:<br />Show today\'s events in a calendar bar on the board index.<br />
		<b>Default Board to Post In</b>:<br />What\'s the default board to post events in?<br />
		<b>Allow events not linked to posts</b>:<br />Allow members to post events without requiring it to be linked with a post in a board.<br />
		<b>Minimum year</b>:<br />Select the &quot;first&quot; year on the calendar list.<br />
		<b>Maximum year</b>:<br />Select the &quot;last&quot; year on the calendar list<br />
		<b>Birthday color</b>:<br />Select the color of the birthday text<br />
		<b>Event color</b>:<br />Select the color of the event text<br />
		<b>Holiday color</b>:<br />Select the color of the Holiday text<br />
		<b>Allow events to span multiple days</b>:<br />Check to allow events to span multiple days.<br />
		<b>Max number of days an event can span</b>:<br />Select the maximum days that an event can span.<br /><br />
		Remember that usage of the calendar (posting events, viewing events, etc.) is controlled by permissions set on the permissions screen.';
$helptxt['localCookies'] = 'SMFユーザがログインする際に使われる情報をCookieとしてクライアントのコンピュータに保存します。
	ここでCookieを、サーバー単位（myserver.com）で保存させるか、ローカル単位（myserver.com/path/to/forum)で保存させるかを選択できます。<br />
	Check this option if you\'re experiencing problems with users getting logged out automatically.<hr />
	Globally stored cookies are less secure when used on a shared webserver (like Tripod).<hr />
	Local cookies don\'t work outside the forum folder so, if your forum is stored at www.myserver.com/forum, pages like www.myserver.com/index.php cannot access the account information.
	Especially when using SSI.php, global cookies are recommended.';
$helptxt['enableBBC'] = 'Selecting this option will allow your members to use Bulletin Board Code (BBC) throughout the forum, allowing users to format their posts with images, type formatting and more.';
$helptxt['time_offset'] = 'Not all forum administrators want their forum to use the same time zone as the server upon which it is hosted. Use this option to specify a time difference (in hours) from which the forum should operate from the server time. Negative and decimal values are permitted.';
$helptxt['spamWaitTime'] = 'Here you can select the amount of time that must pass between postings. This can be used to stop people from "spamming" your forum by limiting how often they can post.';

$helptxt['enablePostHTML'] = 'これは以下の基本的なHTMLタグの使用を許可します：
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Here you can select whether the default theme can be chosen, what theme guests will use,
	as well as other options. Click on a theme to the right to change the settings for it.';
$helptxt['theme_install'] = 'This allows you to install new themes.  You can do this from an already created directory, by uploading an archive for the theme, or by copying the default theme.<br /><br />Note that the archive or directory must have a <tt>theme_info.xml</tt> definition file.';
$helptxt['enableEmbeddedFlash'] = 'これは、ユーザがFlashのアドレスを投稿した際に画像のようにFlashを
	表示させるようにする機能です。This could pose a security risk, although few have successfully exploited it.
	<b>使用上危険があります！</b>';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = '<a href="' . $scripturl . '?action=.xml;sa=news">最近のニュース</a>と同じようなデータへリンクできるようにします。（日本語は未対応）
	最近の投稿／ニュースのサイズを制限することを推奨します。It is also recommended that you limit the size of recent posts/news because, when rss data
	is displayed in some clients, like Trillian, it is expected to be truncated.';
$helptxt['hotTopicPosts'] = 'Change the number of posts for a topic to reach the state of a &quot;hot&quot; or
	&quot;very hot&quot; topic.';
$helptxt['globalCookies'] = 'Makes log in cookies available across subdomains.  For example, if...<br />
	Your site is at http://www.simplemachines.org/,<br />
	And your forum is at http://forum.simplemachines.org/,<br />
	Using this option will allow you to access the forum\'s cookie on your site.  Do not enable this if there are other subdomains (like hacker.simplemachines.org) not controlled by you.';
$helptxt['securityDisable'] = 'ここを <i>無効化</i>すると、管理人室にはいるときにパスワードを再度入力する必要が無くなります。あまり推奨できません。';
$helptxt['securityDisable_why'] = 'ここには自分のパスワードを入力して下さい。（ログイン時のものと同じです）<br /><br />Having to type this helps ensure that you want to do whatever administration you are doing, and that it is <b>you</b> doing it.';
$helptxt['emailmembers'] = 'フォーラムからのメール送信時に以下の変数が使えます：<br />
	{$board_url} - フォーラムのURL<br />
	{$current_time} - 標準の時間<br />
	{$member.email} - 現在のメンバーのメール<br />
	{$member.link} - 現在のメンバーのリンク.<br />
	{$member.id} - 現在のメンバーのID<br />
	{$member.name} - 現在のメンバーの表示名 (for personalization.)<br />
	{$latest_member.link} - 最近登録されたメンバーのリンク<br />
	{$latest_member.id} - 最近登録されたメンバーのID<br />
	{$latest_member.name} - 最近登録されたメンバーの表示名';
$helptxt['attachmentEncryptFilenames'] = 'Encrypting attachment filenames allows you to have more than one attachment of the
	same name, to safely use .php files for attachments, and heightens security.  It, however, could make it more
	difficult to rebuild your database if something drastic happened.';

$helptxt['failed_login_threshold'] = 'Set the number of failed login attempts before directing the user to the password reminder screen.';
$helptxt['oldTopicDays'] = 'If this option is enabled a warning will be displayed to the user when attempting to reply to a topic which has not had any new replies for the amount of time, in days, specified by this setting. Set this setting to 0 to disable the feature.';
$helptxt['edit_wait_time'] = 'Number of seconds allowed for a post to be edited before logging the last edit date.';
$helptxt['edit_disable_time'] = 'Number of minutes allowed to pass before a user can no longer edit a post they have made. Set to 0 disable. <br /><br /><i>Note: This will not effect any user who has permission to edit other peoples posts.</i>';
$helptxt['enableSpellChecking'] = 'Enable spell checking. You MUST have the pspell library installed on your server and your PHP configuration set up to use the pspell library. Your server ' . (function_exists('pspell_new') ? 'DOES' : 'DOES NOT') . ' appear to have this set up.';
$helptxt['lastActive'] = 'Set the number of minutes to show people are active in X number of minutes on the board index. Default is 15 minutes.';

$helptxt['autoOptDatabase'] = 'This option optimizes the database every so many days.  Set it to 1 to make a daily optimization.  You can also specify a maximum number of online users, so that you won\'t overload your server or inconvenience too many users.';
$helptxt['autoFixDatabase'] = 'This will automatically fix broken tables and resume like nothing happened.  This can be useful, because the only way to fix it is to REPAIR the table, and this way your forum won\'t be down until you notice.  It does email you when this happens.';

$helptxt['enableParticipation'] = 'This shows a little icon on the topics the user has posted in.';

$helptxt['db_persist'] = 'このフォーラムの命令を優先するようにさせます。If you aren\'t on a dedicated server, this may cause you problems with your host.';

$helptxt['queryless_urls'] = 'This changes the format of URLs a little so search engines will like them better.  They will look like index.php/topic,1.html.<br /><br />This feature will ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'not') . ' work on your server.';
$helptxt['countChildPosts'] = 'Checking this option will mean that posts and topics in a board\'s child board will count toward its totals on the index page.<br /><br />This will make things notably slower, but means that a parent with no posts in it won\'t show \'0\'.';
$helptxt['fixLongWords'] = 'This option breaks words longer than a certain length into pieces so they don\'t disturb the forum\'s layout. (as much...)  This option should not be set to a value under 40.';

$helptxt['who_enabled'] = 'This option allows you to turn on or off the ability for users to see who is browsing the forum and what they are doing.';

$helptxt['recycle_enable'] = '「リサイクル」とは、指定された掲示板の削除されたスレッドや投稿の移動先を意味します。';

$helptxt['enableReportPM'] = 'This option allows your users to report personal messages they receive to the administration team. This may be useful in helping to track down any abuse of the personal messaging system.';
$helptxt['max_pm_recipients'] = 'This option allows you to set the maximum amount of recipients allowed in a personal message sent by a forum member. This may be used to help stop spam abuse of the PM system. Note that users with permission to send newsletters are exempt from this restriction. Set to zero for no limit.';
$helptxt['pm_posts_verification'] = 'This setting will force users to enter a code shown on a verification image each time they are sending a personal message. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['pm_posts_per_hour'] = 'This will limit the number of personal messages which may be sent by a user in a one hour period. This does not affect admins or moderators.';

$helptxt['default_personalText'] = 'Sets the default text a user will have as their &quot;personal text.&quot;';

$helptxt['modlog_enabled'] = '全ての修正をログに残します。';

$helptxt['guest_hideContacts'] = 'If selected this option will hide the email addresses and messenger contact details
	of all members from any guests on your forum';

$helptxt['registration_method'] = 'このオプションは、ユーザがこのフォーラムに登録する際、管理人の承認を得ることを必要とさせるものです。You can select from:<br /><br />
	<ul>
		<li>
			<b>メンバー登録無効化</b><br />
				Disables the registration process, which means that no new members can register to join your forum.<br />
		</li><li>
			<b>承認待ち</b><br />
				New members can login and post immediately after registering on your forum.<br />
		</li><li>
			<b>メンバーアクティべーション</b><br />
				When this option is enabled any members registering to the forum will have a activation link emailed to them which they must click before they can become full members<br />
		</li><li>
			<b>メンバー承認</b><br />
				This option will make it so all new members registering to your forum will need to be approved by the admin before they become members.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'When this option is checked all members who change their email address in their profile will have to reactivate their account from an email sent to that address';
$helptxt['send_welcomeEmail'] = 'このオプションは、フォーラムに新しいメンバーが登録されたときに、そのメンバーにようこそメールを送るかを指定します。';
$helptxt['password_strength'] = 'This setting determines the strength required for passwords selected by your forum users. The stronger the password, the harder it should be to compromise member\'s accounts.
	Its possible options are:
	<ul>
		<li><b>Low:</b> The password must be at least four characters long.</li>
		<li><b>Medium:</b> The password must be at least eight characters long, and can not be part of a users name or email address.</li>
		<li><b>High:</b> As for medium, except the password must also contain a mixture of upper and lower case letters, and at least one number.</li>
	</ul>';

$helptxt['coppaAge'] = 'The value specified in this box will determine the minimum age that new members must be to be granted immediate access to the forums.
	On registration they will be prompted to confirm whether they are over this age, and if not will either have their application rejected or suspended awaiting parental approval - dependant on the type of restriction choosen.
	If a value of 0 is choosen for this setting then all other age restriction settings shall be ignored.';
$helptxt['coppaType'] = 'If age restrictions are enabled, then this setting will define that happens when a user below the minimum age attempts to register with your forum. There are two possible choices:
	<ul>
		<li>
			<b>Reject Their Registration:</b><br />
				Any new member below the minimum age will have their registration rejected immediately.<br />
		</li><li>
			<b>Require Parent/Guardian Approval</b><br />
				Any new member who attempts to register and is below the minimum permitted age will have their account marked as awaiting approval, and will be presented with a form upon which their parents must give permission to become a member of the forums.
				They will also be presented with the forum contact details entered on the settings page, so they can send the form to the administrator by mail or fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'The contact boxes are required so that forms granting permission for underage registration can be sent to the forum administrator. These details will be shown to all new minors, and are required for parent/guardian approval. At the very least a postal address or fax number must be provided.';

$helptxt['allow_hideOnline'] = 'With this option enabled all members will be able to hide their online status from other users (except administrators). If disabled only users who can moderate the forum can hide their presence. Note that disabling this option will not change any existing member\'s status - it just stops them from hiding themselves in the future.';
$helptxt['allow_hideEmail'] = 'With this option enabled members can choose to hide their email address from other members. However, administrators can always see everyone\'s email addresses.';

$helptxt['latest_support'] = 'This panel shows you some of the most common problems and questions on your server configuration. Don\'t worry, this information isn\'t logged or anything.<br /><br />If this stays as &quot;Retrieving support information...&quot;, your computer probably cannot connect to <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Here you can see some of the most popular and some random packages or mods, with quick and easy installations.<br /><br />If this section doesn\'t show up, your computer probably cannot connect to <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'This area shows a few of the latest and most popular themes from <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  It may not show up properly if your computer can\'t find <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>, though.';

$helptxt['secret_why_blank'] = 'For your security, the answer to your question (as well as your password) is encrypted in such a way that SMF can only tell you if get it right, so it can never tell you (or anyone else, importantly!) what your answer or password is.';
$helptxt['moderator_why_missing'] = 'Since moderation is done on a board-by-board basis, you have to make members moderators from the <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">board management interface</a>.';

$helptxt['permissions'] = 'Permissions are how you either allow groups to, or deny groups from, doing specific things.<br /><br />You can modify multiple boards at once with the checkboxes, or look at the permissions for a specific group by clicking \'Modify.\'';
$helptxt['permissions_board'] = 'If a board is set to \'Global,\' it means that the board will not have any special permissions.  \'Local\' means it will have its own permissions - separate from the global ones.  This allows you to have a board that has more or less permissions than another, without requiring you to set them for each and every board.';
$helptxt['permissions_quickgroups'] = 'These allow you to use the &quot;default&quot; permission setups - standard means \'nothing special\', restrictive means \'like a guest\', moderator means \'what a moderator has\', and lastly \'maintenance\' means permissions very close to those of an administrator.';
$helptxt['permissions_deny'] = 'Denying permissions can be useful when you want take away permission from certain members. You can add a membergroup with a \'deny\'-permission to the members you wish to deny a permission.<br /><br />Use with care, a denied permission will stay denied no matter what other membergroups the member is in.';
$helptxt['permissions_postgroups'] = 'Enabling permissions for post count based groups will allow you to attribute permissions to members that have posted a certain amount of messages. The permissions of the post count based groups are <em>added</em> to the permissions of the regular membergroups.';
$helptxt['permissions_by_board'] = 'Enabling this option will allow you to, for each board for each membergroup, set different permissions. By default a board uses global permissions, but with this option enabled, you can switch a board to local permission settings. This provides a very sophisticated way to manage your permissions.';
$helptxt['membergroup_guests'] = 'The Guests membergroup are all users that are not logged in.';
$helptxt['membergroup_regular_members'] = 'The Regular Members are all members that are logged in, but that have no primary membergroup assigned.';
$helptxt['membergroup_administrator'] = 'The administrator can, per definition, do anything and see any board. There are no permission settings for the administrator.';
$helptxt['membergroup_moderator'] = 'The Moderator membergroup is a special membergroup. Permissions and settings assigned to this group apply to moderators but only <em>on the boards they moderate</em>. Outside these boards they\'re just like any other member.';
$helptxt['membergroups'] = 'In SMF there are two types of groups that your members can be part of. These are:
	<ul>
		<li><b>Regular Groups:</b> A regular group is a group to which members are not automatically put into. To assign a member to be in a group simply go to their profile and click &quot;Account Settings&quot;. From here you can assign them any number of regular groups to which they will be part.</li>
		<li><b>Post Groups:</b> Unlike regular groups post based groups cannot be assigned. Instead, members are automatically assigned to a post based group when they reach the minimum number of posts required to be in that group.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'You can edit these events by clicking on the red asterisk (*) next to their names.';

$helptxt['maintenance_general'] = 'From here, you are able to optimize all your tables (makes them smaller and faster!), make sure you have the newest versions, find any errors that might be messing up your board, recount totals, and empty logs.<br /><br />The last two should be avoided unless something is wrong, but don\'t hurt anything.';
$helptxt['maintenance_backup'] = 'This area allows you to save a copy of all the posts, settings, members, and other information in your forum to a very large file.<br /><br />It is recommended that you do this often, perhaps weekly, for safety and security.';
$helptxt['maintenance_rot'] = 'This allows you to <b>completely</b> and <b>irrevocably</b> remove old topics.  It is recommended that you try to make a backup first, just in case you remove something you didn\'t mean to.<br /><br />Use this option with care.';

$helptxt['avatar_allow_server_stored'] = 'This allows your members to pick from avatars stored on your server itself.  They are, generally, in the same place as SMF under the avatars folder.<br />As a tip, if you create directories in that folder, you can make &quot;categories&quot; of avatars.';
$helptxt['avatar_allow_external_url'] = 'With this enabled, your members can type in a URL to their own avatar.  The downside of this is that, in some cases, they may use avatars that are overly large or portray images you don\'t want on your forum.';
$helptxt['avatar_download_external'] = 'With this option enabled, the URL given by the user is accessed to download the avatar at that location. On success, the avatar will be treated as uploadable avatar.';
$helptxt['avatar_allow_upload'] = 'This option is much like &quot;Allow members to select an external avatar&quot;, except that you have better control over the avatars, a better time resizing them, and your members do not have to have somewhere to put avatars.<br /><br />However, the downside is that it can take a lot of space on your server.';
$helptxt['avatar_download_png'] = 'PNGs are larger, but offer better quality compression.  If this is unchecked, JPEG will be used instead - which is often smaller, but also of lesser or blurry quality.';

$helptxt['disableHostnameLookup'] = 'This disables host name lookups, which on some servers are very slow.  Note that this will make banning less effective.';

$helptxt['search_weight_frequency'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor counts the amount of matching messages and divides them by the total number of messages within a topic.';
$helptxt['search_weight_age'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor rates the age of the last matching message within a topic. The more recent this message is, the higher the score.';
$helptxt['search_weight_length'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor is based on the topic size. The more messages are within the topic, the higher the score.';
$helptxt['search_weight_subject'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a search term can be found withing the subject of a topic.';
$helptxt['search_weight_first_message'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a match can be found in the first message of a topic.';
$helptxt['search_weight_sticky'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a topic is sticky and increases the relevancy score if it is.';
$helptxt['search'] = 'Adjust all settings for the search function here. Please note you can\'t set here who has access to the search. Use the \'manage permissions\' screen in the admin panel for that.';
$helptxt['search_why_use_index'] = 'A search index can greatly improve the performance of searches on your forum. Especially when the number of messages on a forum grows bigger, searching without an index can take a long time and increase the pressure on your database. If your forum is bigger than 50.000 messages, you might want to consider creating a search index to assure peak performance of your forum.<br /><br />Note that a search index can take up quite some space. A fulltext index is a built-in index of MySQL. It\'s relatively compact (approximately the same size as the message table), but a lot of words aren\'t indexed and it can some search queries turn out to be very slow. The custom index is often bigger (depending on your configuration it can be up to 3 times the size of the messages table) but it\'s performance is better than fulltext and relatively stable.';

$helptxt['see_admin_ip'] = 'IP addresses are shown to administrators and moderators to facilitate moderation and to make it easier to track people up to no good.  Remember that IP addresses may not always be identifying, and most people\'s IP addresses change periodically.<br /><br />Members are also allowed to see their own IPs.';
$helptxt['see_member_ip'] = 'Your IP address is shown only to you and moderators.  Remember that this information is not identifying, and that most IPs change periodically.<br /><br />You cannot see other members\' IP addresses, and they cannot see yours.';

$helptxt['ban_cannot_post'] = 'The \'cannot post\' restriction turns the forum into read-only mode for the banned user. The user cannot create new topics, or reply to existing ones, send personal messages or vote in polls. The banned user can however still read personal messages and topics.<br /><br />A warning message is shown to the users that are banned this way.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Post Settings</b><br />
			Modify the settings related to the posting of messages and the way messages are shown. You can also enable the spell check here.
		</li><li>
			<b>Bulletin Board Code</b><br />
			Enable the code that show forum messages in the right layout. Also adjust which codes are allowed and which aren\'t.
		</li><li>
			<b>Censored Words</b>
			In order to keep the language on your forum under control, you can censor certain words. This function allows you to convert forbidden words into innocent versions.
		</li><li>
			<b>Topic Settings</b>
			Modify the settings related to topics. The number of topics per page, whether stickey topics are enabled or not, the number of messages needed for a topic to be hot, etc.
		</li>
	</ul>';

?>