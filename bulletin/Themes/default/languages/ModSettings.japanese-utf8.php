<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'ここでは、フォーラムの基本的な設定、修正（Mod）等の設定を変更します。Please see the <a href="' . $scripturl . '?action=theme;sa=settings;id=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">テーマ設定</a>でより詳細な設定ができます。くわしくは、ヘルプアイコンをクリックし、説明を確認してください。';

$txt['mods_cat_features'] = '基本的なフォーラムの設定';
$txt['pollMode'] = '投票箱モード';
$txt['smf34'] = '投票箱を無効化';
$txt['smf32'] = '投票箱を有効化';
$txt['smf33'] = 'スレッド上の投票箱を表示';
$txt['allow_guestAccess'] = 'ゲストのフォーラム閲覧を許可';
$txt['userLanguage'] = 'ユーザ自身が言語を設定できるようにする';
$txt['allow_editDisplayName'] = 'ユーザが自身の表示される名前を変更できるようにする';
$txt['allow_hideOnline'] = '管理人以外が自身のオンラインステータスを隠すことを許可';
$txt['allow_hideEmail'] = 'ユーザ自身のメールを管理人以外から隠すことができるのを許可';
$txt['guest_hideContacts'] = 'ゲストからのメンバーへ連絡を許可しない';
$txt['titlesEnable'] = 'カスタムタイトルを有効化';
$txt['enable_buddylist'] = '仲間リストを有効化';
$txt['default_personalText'] = 'デフォルトの署名';
$txt['max_signatureLength'] = '署名の最大文字数<div class="smalltext">（0は無制限）</div>';
$txt['number_format'] = 'デフォルトの数字のフォーマット';
$txt['time_format'] = 'デフォルトの時間表示形式';
$txt['time_offset'] = '時差<div class="smalltext">(changing this will put everyone\'s time off.)</div>';
$txt['failed_login_threshold'] = 'ログイン失敗までの時間しきい値';
$txt['lastActive'] = 'ユーザがオフラインに状態にする時間';
$txt['trackStats'] = '状況を追跡';
$txt['hitStats'] = 'ヒットを追跡（まず、状況を有効化する必要があります）';
$txt['enableCompressedOutput'] = '圧縮転送を有効化';
$txt['databaseSession_enable'] = 'データーベース接続にセッションを使う';
$txt['databaseSession_loose'] = 'ブラウザがページをキャッシュする事を許可する。';
$txt['databaseSession_lifetime'] = 'セッションのタイムアウトまでの時間';
$txt['enableErrorLogging'] = 'エラーログをとる';
$txt['cookieTime'] = 'デフォルトのログイン時のcookieの保存間（分で）';
$txt['localCookies'] = 'ローカルにCookieを保存<div class="smalltext">（SSI機能使用時には反映されません）</div>';
$txt['globalCookies'] = 'サブドメイン別に独立したCookieを使う<div class="smalltext">（まずCookieを無効化する必要があります）</div>';
$txt['securityDisable'] = '管理人セキュリティーを無効化';
$txt['send_validation_onChange'] = 'メールアドレスが変更された際に新しいパスワードを送信';
$txt['approveAccountDeletion'] = 'メンバーのアカウントを削除するときに管理人の承認を必要とする';
$txt['autoOptDatabase'] = 'テーブルを最適化する日付の間隔<div class="smalltext">（0は無効化）</div>';
$txt['autoOptMaxOnline'] = 'ユーザーのオンライン数に応じての最適化<div class="smalltext">（0は指定しない）</div>';
$txt['autoFixDatabase'] = 'テーブルの自動修正';
$txt['allow_disableAnnounce'] = 'ユーザーがアナウンスを受け取らないのを許可する';
$txt['disallow_sendBody'] = 'Don\'t allow post text in notifications?';
$txt['modlog_enabled'] = '修正ログをつける';
$txt['queryless_urls'] = 'URLに?を使わない<div class="smalltext"><b>Apacheのみ！</b></div>';
$txt['max_image_width'] = '投稿画面上の画像の最大幅（0 = 無制限）';
$txt['max_image_height'] = '投稿画面上の画像の最大高（0 = 無制限）';
$txt['mail_type'] = 'メール送信の設定';
$txt['mail_type_default'] = '（PHPデフォルト）';
$txt['smtp_host'] = 'SMTPサーバ';
$txt['smtp_port'] = 'SMTPポート';
$txt['smtp_username'] = 'SMTPユーザ名';
$txt['smtp_password'] = 'SMTPパスワード';
$txt['enableReportPM'] = '個人メッセージのレポートをつける';
$txt['max_pm_recipients'] = 'Maximum number of recipients allowed in a personal message.<div class="smalltext">(0 for no limit, admin\'s are exempt)</div>';
$txt['pm_posts_verification'] = 'Post count under which users must enter code when sending personal messages.<div class="smalltext">(0 for no limit, admins are exempt)</div>';
$txt['pm_posts_per_hour'] = 'Number of personal messages a user may send in an hour.<div class="smalltext">(0 for no limit, moderators are exempt)</div>';

$txt['mods_cat_layout'] = 'レイアウトとオプション';
$txt['compactTopicPagesEnable'] = '一度に表示されるページのリンクの上限';
$txt['smf235'] = '隣接するページ数：';
$txt['smf236'] = 'を表示';
$txt['todayMod'] = '&quot;Today&quot;機能を有効化';
$txt['smf290'] = '無効化';
$txt['smf291'] = '今日だけ';
$txt['smf292'] = '今日と明日';
$txt['topbottomEnable'] = '最上部へ／最下部へアイコンを使う';
$txt['onlineEnable'] = '投稿画面と個人メッセージ画面にオンライン／オフラインを表示';
$txt['enableVBStyleLogin'] = 'vBスタイルでログインを有効化';
$txt['defaultMaxMembers'] = '一度にメンバーリストで表示するメンバー数';
$txt['timeLoadPageEnable'] = 'ページの生成にかかった時間を全てのページに表示する';
$txt['disableHostnameLookup'] = 'ホスト名の逆引きをしない';
$txt['who_enabled'] = 'オンラインのメンバーのリストを表示';

$txt['smf293'] = '雰囲気（Karma）';
$txt['karmaMode'] = '雰囲気モード';
$txt['smf64'] = '無効化|総計|善し悪し';
$txt['karmaMinPosts'] = '雰囲気の修正に必要な最小投稿数';
$txt['karmaWaitTime'] = '待ち時間';
$txt['karmaTimeRestrictAdmins'] = '管理人もこの制限下にはいる';
$txt['karmaLabel'] = '雰囲気のラベル';
$txt['karmaApplaudLabel'] = 'ネガティブなラベル';
$txt['karmaSmiteLabel'] = 'ポジティブなラベル';

$txt['caching_information'] = '<div align="center"><b><u>Important! Read this first before enabling these features.</b></u></div><br />
	SMF supports caching through the use of accelerators. The currently supported accelerators include:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	</ul>
	Caching will only work on your server if you have PHP compiled with one of the above optimizers, or have memcache
	available. <br /><br />
	SMF performs caching at a variety of levels. The higher the level of caching enabled the more CPU time will be spent
	retrieving cached information. If caching is available on your machine it is recommended that you try caching at level 1 first.
	<br /><br />
	Note that if you use memcached you need to provide the server details in the setting below. This should be entered as a comma separated list
	as shown in the example below:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Note that if no port is specified SMF will use port 11211. SMF will attempt to perform rough/random load balancing across the servers.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF has not been able to detect a compatible accelerator on your server.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF has detected that your server has APC installed.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF has detected that your server has eAccelerator installed.';
$txt['detected_MMCache'] = '<b style="color: green">SMF has detected that your server has MMCache installed.';
$txt['detected_Zend'] = '<b style="color: green">SMF has detected that your server has Zend installed.';
$txt['detected_Memcached'] = '<b style="color: green">SMF has detected that your server has Memcached installed.';

$txt['cache_enable'] = 'キャッシュレベル';
$txt['cache_off'] = 'キャッシュしない';
$txt['cache_level1'] = 'レベル１';
$txt['cache_level2'] = 'レベル２（推奨しません）';
$txt['cache_level3'] = 'レベル３（推奨しません）';
$txt['cache_memcached'] = 'キャッシュ設定';

?>