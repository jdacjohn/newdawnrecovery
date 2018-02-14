<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'ja_JP.utf8';
$txt['lang_dictionary'] = 'en';
$txt['lang_spelling'] = 'american';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');
$txt['days_short'] = array('日','月','火','水','木','金','土');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array( 1 => '１月','２月','３月','４月','５月','６月','７月','８月','９月','１０月','１１月','１２月');
$txt['months_titles'] = array(1 => '１月（睦月）', '２月（如月）', '３月（弥生）', '４月（卯月）', '５月（皐月）', '６月（水無月）', '７月（文月）', '８月（葉月）', '９月（長月）', '１０月（神無月）', '１１月（霜月）', '１２月（師走）');
$txt['months_short'] = array( 1 => '1','2','3','4','5','6','7','8','9','10','11','12');

$txt['newmessages0'] = '通の未読の個人メッセージが届いています';
$txt['newmessages1'] = '通の未読の個人メッセージが届いています';
$txt['newmessages3'] = '　未読の個人メッセージ';
$txt['newmessages4'] = 'と、';

$txt[2] = '管理人室';

$txt[10] = '保存';

$txt[17] = '修正';
$txt[18] = $context['forum_name'] . '－ホーム';
$txt[19] = 'メンバー';
$txt[20] = '掲示板名';
$txt[21] = '件の投稿';
$txt[22] = '最新の投稿';

$txt[24] = '（題名無し）';
$txt[26] = '投稿';
$txt[27] = 'プロフィールを見る';
$txt[28] = 'ゲスト';
$txt[29] = '投稿者';
$txt[30] = '投稿日：';
$txt[31] = '削除';
$txt[33] = 'スレッドを建てる';

$txt[34] = 'ログイン';
// Use numeric entities in the below string.
$txt[35] = 'ユーザ名';
$txt[36] = 'パスワード';

$txt[40] = 'そのようなユーザ名は存在しません。';

$txt[62] = '掲示板のモデレーター';
$txt[63] = 'スレッドの削除';
$txt[64] = 'スレッド';
$txt[66] = '投稿内容を編集';
$txt[68] = '名前';
$txt[69] = 'メール';
$txt[70] = '題名';
$txt[72] = '内容';

$txt[79] = 'プロフィール';

$txt[81] = 'パスワード';
$txt[82] = 'パスワード確認';
$txt[87] = 'グループ';

$txt[92] = 'プロフィール閲覧：';
$txt[94] = '統計';
$txt[95] = '投稿数';
$txt[96] = 'サイト';
$txt[97] = '登録';

$txt[101] = '投稿内容一覧';
$txt[102] = 'お知らせ';
$txt[103] = 'ホーム';

$txt[104] = 'スレッドのロック／アンロック';
$txt[105] = '投稿';
$txt[106] = 'エラー発生！';
$txt[107] = 'にて';
$txt[108] = 'ログアウト';
$txt[109] = 'スレッド開設者';
$txt[110] = '投稿数';
$txt[111] = '最終投稿';
$txt[114] = '管理人ログイン';
// Use numeric entities in the below string.
$txt[118] = 'スレッド';
$txt[119] = 'ヘルプ';
$txt[121] = '投稿内容を削除';
$txt[125] = '更新通知';
$txt[126] = 'このスレッドが更新された際にメールで通知を受けますか？';
// Use numeric entities in the below string.
$txt[130] = $context['forum_name'] . 'をこれからもよろしく！';
$txt[131] = 'スレッドの更新の通知';
$txt[132] = 'スレッドの移動';
$txt[133] = '移動先';
$txt[139] = 'ページ';
$txt[140] = $modSettings['lastActive'] . '分前までのアクティブなユーザ';
$txt[144] = '個人メッセージ';
$txt[145] = '引用して返信';
$txt[146] = '返信する';

$txt[151] = '投稿はありません。';
$txt[152] = 'さん。現在';
$txt[153] = '通の個人メッセージ';
$txt[154] = 'この個人メッセージを削除しますか';

$txt[158] = 'オンラインのユーザ';
$txt[159] = '個人メッセージ';
$txt[160] = 'ジャンプ先';
$txt[161] = '移動';
$txt[162] = '本当にこのスレッドを削除してもいいですか？';
$txt[163] = 'はい';
$txt[164] = 'いいえ';

$txt[166] = '検索結果';
$txt[167] = '検索終了';
$txt[170] = '何も見つかりませんでした。';
$txt[176] = 'より';

$txt[182] = '検索';
$txt[190] = 'すべて';

$txt[193] = '戻る';
$txt[194] = 'パスワードの再発行';
$txt[195] = 'スレッド開設者';
$txt[196] = 'スレッド名';
$txt[197] = '投稿者';
$txt[200] = '検索可能な全てのメンバー';
$txt[201] = '歓迎！';
$txt[208] = '管理人室';
$txt[211] = '最終編集';
$txt[212] = 'このスレッドの更新情報のメール通知を解除しますか？';

$txt[214] = '最近の投稿';

$txt[227] = '所在地';
$txt[231] = '性別';
$txt[233] = '登録日';

$txt[234] = '新着１０件の投稿';
$txt[235] = 'が、最近更新されたスレッドです。';

$txt[238] = '男性';
$txt[239] = '女性';

$txt[240] = 'ユーザ名に不正な文字が含まれています。<storng>半角英数字のみ</strong>で書いてください。';

$txt['welcome_guest'] = 'ようこそ<b>' . $txt[28] . '</b>さん。まずは、<a href="' . $scripturl . '?action=login">ログイン</a>するか、<a href="' . $scripturl . '?action=register">ユーザ登録</a>してください。';
$txt['welcome_guest_activate'] = '<br /><a href="' . $scripturl . '?action=activate">アクティべーションメール</a>送られて来ませんでしたか？';
$txt['hello_member'] = 'ようこそ';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'ようこそ、';
$txt[247] = 'ようこそ、';
$txt[248] = 'ようこそ、';
$txt[249] = 'まずは、';
$txt[250] = '戻る';
$txt[251] = '行き先を指定してください';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = '投稿者：';

$txt[287] = 'スマイリー';
$txt[288] = '怒り';
$txt[289] = 'ほほえみ';
$txt[290] = '笑い';
$txt[291] = '悲しい';
$txt[292] = 'ウィンク';
$txt[293] = 'ニヤリ';
$txt[294] = 'ショック';
$txt[295] = 'クール';
$txt[296] = '疑問';
$txt[450] = '目が回る';
$txt[451] = 'アカンベー';
$txt[526] = '困惑';
$txt[527] = '口を紡ぐ';
$txt[528] = '未決';
$txt[529] = 'キス';
$txt[530] = '泣き';

$txt[298] = 'モデレーター';
$txt[299] = 'モデレーター';

$txt[300] = '全てのスレッドを読んだことにする。';
$txt[301] = '参照数';
$txt[302] = '最新';

$txt[303] = '全ユーザを表示';
$txt[305] = '表示';
$txt[307] = 'メール';

$txt[308] = 'メンバーを表示';
$txt[309] = '全';
$txt[310] = '人中';
$txt[311] = '～';
$txt[315] = 'パスワードを忘れましたか？';

$txt[317] = '日付';
// Use numeric entities in the below string.
$txt[318] = '送信者';
$txt[319] = '題名';
$txt[322] = '新しいメッセージの確認';
$txt[324] = '受信者';

$txt[330] = '件のスレッド';
$txt[331] = 'メンバーリスト';
$txt[332] = 'メンバーリスト';
$txt[333] = '新着投稿あり';
$txt[334] = '新着投稿無し';

$txt['sendtopic_send'] = '送信';

$txt[371] = '時差';
$txt[377] = 'もしくは';

$txt[398] = 'マッチしませんでした';

$txt[418] = '通知';

$txt[430] = '%sさん、あなたはこのフォーラム使用を停止されています！';

$txt[452] = 'すべての投稿を読んだことにする';

$txt[454] = 'ホットなスレッド（' . $modSettings['hotTopicPosts'] . '件以上の投稿）';
$txt[455] = 'とてもホットなスレッド（' . $modSettings['hotTopicVeryPosts'] . '件以上の投稿）';
$txt[456] = 'ロックされたスレッド';
$txt[457] = '普通のスレッド';
$txt['participation_caption'] = 'あなたが投稿したスレッド：';

$txt[462] = '実行';

$txt[465] = '印刷';
$txt[467] = 'プロフィール';
$txt[468] = 'スレッドの概要';
$txt[470] = 'なし';
$txt[471] = '通のメッセージ';
$txt[473] = 'そのユーザ名は、すでに他のメンバーが使用しています。';

$txt[488] = '全メンバー数';
$txt[489] = '全投稿数';
$txt[490] = '全スレッド数';

$txt[497] = 'ログイン状態の保持時間（分）';

$txt[507] = 'プレビュー';
$txt[508] = '常時ログイン';

$txt[511] = 'ＩＰ記録';
// Use numeric entities in the below string.
$txt[512] = 'ＩＰ';

$txt[513] = 'ＩＣＱ';
$txt[515] = 'サイト';

$txt[525] = 'by';

$txt[578] = '時間';
$txt[579] = '日';

$txt[581] = 'さんが、加わりました。';

$txt[582] = '検索条件';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hi.+Are+you+there?';
$txt[604] = 'YIM';

$txt[616] = 'このフォーラムは「メンテナンスモード」に入っています.';

$txt[641] = '参照数';
$txt[642] = '回';

$txt[645] = 'フォーラムの統計情報';
$txt[656] = '最新メンバー';
$txt[658] = '全カテゴリ';
$txt[659] = '最新投稿';

$txt[660] = 'あなたに';
$txt[661] = 'が来ています。';
$txt[662] = 'ここ';
$txt[663] = 'をクリックすると閲覧できます。';

$txt[665] = '全掲示板';

$txt[668] = 'ページを印刷';

$txt[679] = '正しいメールアドレスを指定してください。';

$txt[683] = 'I am a geek!!';
$txt[685] = $context['forum_name'] . '－情報センター';

$txt[707] = 'スレッドの紹介';

$txt['sendtopic_title'] = '「%s」を友達に紹介する。';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = '%sさんへ';
$txt['sendtopic_this_topic'] = $context['forum_name'] . 'の' . '「%s」というスレッドを是非見てください。';
$txt['sendtopic_thanks'] = '';
$txt['sendtopic_sender_name'] = 'あなたの名前';
$txt['sendtopic_sender_email'] = 'あなたのメールアドレス';
$txt['sendtopic_receiver_name'] = '送信先の名前';
$txt['sendtopic_receiver_email'] = '送信先のメールアドレス';
$txt['sendtopic_comment'] = 'コメントを追加';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'このスレッドに関するコメントも加えられました。';

$txt[721] = '外部からメールアドレスを見えないようにする。';

$txt[737] = 'すべてをチェック';

// Use numeric entities in the below string.
$txt[1001] = 'データーベースエラー';
$txt[1002] = '再度実行してみてください。もし、このエラーがもう一度起こるようなら、管理人に連絡してください。';
$txt[1003] = 'ファイル';
$txt[1004] = '行';
// Use numeric entities in the below string.
$txt[1005] = 'SMFはデータベースにおけるエラーを検知し、自動的に修復しました。もし、同じ問題が引き続き起きるか、これらのメールが送付されてくる場合は、サーバーの管理人と連絡をとってください。';
$txt['database_error_versions'] = '<b>Note:</b> 使用中のデーターベースのバージョンが低いように思われます。あなたの使用しているフォーラムのバージョンは' . $forum_version . 'で、データーベース側のバージョンは' . $modSettings['smfVersion'] . 'です。upgrade.phpを実行してバージョンアップする必要があります。';
$txt['template_parse_error'] = 'テンプレートパースエラー';
$txt['template_parse_error_message'] = 'テンプレートシステム上で何らかの不具合があるように思われます。この問題は、一時的な物で再試行すれば直ります。もし、同じメッセージが出た場合は、お手数ですが管理人に連絡を取ってください。<br /><br /><a href="javascript:location.reload();">ここ</a>から再試行できます。';
$txt['template_parse_error_details'] = '<tt><b>%1$s</b></tt>のテンプレートもしくは言語ファイルを読むときにエラーが発生しました。チェックしてやり直してください。注意：シングル・クオート（<tt>\'</tt>）が含まれる場合、かならず（<tt>\\</tt>）でくくることを忘れないでください。もう少し詳細なエラーの説明をphpからみたい場合は<a href="' . $boardurl . '%1$s">直接ファイルにアクセス</a>してみてください。<br /><br /><a href="javascript:location.reload();">ページのリロード</a>か<a href="' . $scripturl . '?theme=1">デフォルトのテーマ</a>を使ってください。';

$txt['smf10'] = '<b>今日</b>の';
$txt['smf10b'] = '<b>昨日</b>の';
$txt['smf20'] = '投票箱の設置';
$txt['smf21'] = '質問';
$txt['smf23'] = '票を入れる';
$txt['smf24'] = '全投票数';
$txt['smf25'] = 'ショートカット: alt+sで送信／投稿、alt+rでリセット（Macの場合はControlキー）';
$txt['smf29'] = '結果を表示する。';
$txt['smf30'] = '投票のロック';
$txt['smf30b'] = '投票のロック解除';
$txt['smf39'] = '投票箱を修正';
$txt['smf43'] = '投票箱';
$txt['smf47'] = '１日';
$txt['smf48'] = '１週間';
$txt['smf49'] = '１ヶ月';
$txt['smf50'] = '期間限定無し';
$txt['smf52'] = 'ユーザ名、パスワード、クッキー保持期間を入力してログインして下さい。';
$txt['smf53'] = '１時間';
$txt['smf56'] = '移転';
$txt['smf57'] = 'ここにスレッドの移転理由を記入してください。';
$txt['smf60'] = 'あなたは、雰囲気（Karma）を変更するのに十分な投稿をしていません。もう少し投稿してください。';
$txt['smf62'] = '投稿時間が短すぎます。しばらくお待ちになってから投稿してください。';
$txt['smf82'] = '掲示板';
$txt['smf88'] = '';
$txt['smf96'] = 'スレッド更新の通知';

$txt['smf138'] = '削除';

$txt['smf199'] = '個人メッセージ';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[詳細]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'コード';
$txt['smf239'] = '引用元：';
$txt['smf240'] = '引用';

$txt['smf251'] = 'スレッドの分割';
$txt['smf252'] = 'スレッドの結合';
$txt['smf254'] = 'スレッドの題名';
$txt['smf255'] = 'この投稿だけ分割';
$txt['smf256'] = 'このスレッドのこの投稿から分割する';
$txt['smf257'] = '分割したい投稿';
$txt['smf258'] = 'スレッドを立てる';
$txt['smf259'] = 'スレッドは無事２つに分割されました。';
$txt['smf260'] = '元のスレッド';
$txt['smf261'] = '分割したい投稿を指定してください。';
$txt['smf264'] = 'スレッドの結合は成功しました';
$txt['smf265'] = '最近の結合されたスレッド';
$txt['smf266'] = '結合されたスレッド';
$txt['smf267'] = 'ターゲットとなる板';
$txt['smf269'] = 'ターゲットとなるスレッド';
$txt['smf274'] = 'を結合してもいいですか？';
$txt['smf275'] = 'と';
$txt['smf276'] = 'この機能は２つのスレッドの内容を１つのスレッドに結合するものです。投稿は、時間によってソートされます。一番最初に投稿されたメッセージがスレッドの先頭になります。';

$txt['smf277'] = 'スレッドの更新通知を受ける';
$txt['smf278'] = 'スレッドの更新通知を解除';
$txt['smf279'] = 'スレッドのロック';
$txt['smf280'] = 'スレッドのロック解除';

$txt['smf298'] = '詳細検索';

$txt['smf299'] = '重大なセキュリティ上の問題があります：';
$txt['smf300'] = 'あなたはまだ、以下を削除していません：';

$txt['smf301'] = 'ページの生成に';
$txt['smf302'] = '秒';
$txt['smf302b'] = 'かかりました。';

$txt['smf315'] = 'この機能は、不適切な語句を入力したか、間違って入力した際に管理人とモデレーターに通知させるものです。';

$txt['online2'] = 'オンライン';
$txt['online3'] = 'オフライン';
$txt['online4'] = '個人メッセージ（オンライン）';
$txt['online5'] = '個人メッセージ（オフライン）';
$txt['online8'] = 'ステータス';

$txt['topbottom4'] = '最上部へ';
$txt['topbottom5'] = '最下部へ';

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


$txt['calendar3'] = '誕生日:';
$txt['calendar4'] = 'イベント：';
$txt['calendar3b'] = '近づいている誕生日：';
$txt['calendar4b'] = '近づいているイベント：';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = '月：';
$txt['calendar10'] = '年：';
$txt['calendar11'] = '日：';
$txt['calendar12'] = 'イベント名：';
$txt['calendar13'] = '投稿内容：';
$txt['calendar20'] = 'イベント編集';
$txt['calendar21'] = 'このイベントを削除しますか？';
$txt['calendar22'] = 'イベントを削除';
$txt['calendar23'] = 'イベントを投稿';
$txt['calendar24'] = 'カレンダー';
$txt['calendar37'] = 'カレンダーにリンク';
$txt['calendar43'] = 'イベントにリンク';
$txt['calendar47'] = '今度の予定';
$txt['calendar47b'] = '今日のカレンダー';
$txt['calendar51'] = '週：';
$txt['calendar54'] = '日付：';
$txt['calendar_how_edit'] = 'これらのイベントを編集しますか？';
$txt['calendar_link_event'] = 'イベントのリンク先の投稿：';
$txt['calendar_confirm_delete'] = 'このイベントを削除しますか？';
$txt['calendar_linked_events'] = 'リンクされたイベント';

$txt['moveTopic1'] = '移転するスレッドの内容';
$txt['moveTopic2'] = 'スレッドの題名を変える';
$txt['moveTopic3'] = '新しい題名';
$txt['moveTopic4'] = '全てのメッセージの題名を変更する';

$txt['theme_template_error'] = 'テンプレート「%s」の読み取りに失敗しました。';
$txt['theme_language_error'] = '言語ファイル「%s」の読み取りに失敗しました。';

$txt['parent_boards'] = '子板';

$txt['smtp_no_connect'] = 'SMTPホストに接続できません。';
$txt['smtp_port_ssl'] = 'SMTPのポート設定が認識されませんでした。it should be 465 for SSL servers.';
$txt['smtp_bad_response'] = 'メールサーバからのレスポンスがありません。';
$txt['smtp_error'] = 'メール送信時に以下のエラーが発生しました：';
$txt['mail_send_unable'] = '指定されたメールアドレス「%s」にメールを送ることができませんでした。';

$txt['mlist_search'] = 'ユーザを検索';
$txt['mlist_search2'] = '再検索';
$txt['mlist_search_email'] = 'メールアドレスで検索';
$txt['mlist_search_messenger'] = 'ニックネームで検索';
$txt['mlist_search_group'] = 'グループで検索';
$txt['mlist_search_name'] = '名前で検索';
$txt['mlist_search_website'] = 'サイトで検索';
$txt['mlist_search_results'] = '検索結果：';

$txt['attach_downloaded'] = 'ダウンロード回数';
$txt['attach_viewed'] = '閲覧回数';
$txt['attach_times'] = '回';

$txt['MSN'] = 'MSN';

$txt['settings'] = '設定';
$txt['never'] = 'なし';
$txt['more'] = 'more';

$txt['hostname'] = 'ホスト名';
$txt['you_are_post_banned'] = '%sさん、すみませんが、あなたはこのフォーラム上での投稿および個人メッセージのやりとりを停止されています。';
$txt['ban_reason'] = '理由';

$txt['tables_optimized'] = 'データーベースの再構築は済んでいます。';

$txt['add_poll'] = '投票欄追加';
$txt['poll_options6'] = 'あなたは、%s票入れることができます。';
$txt['poll_remove'] = '投票欄削除';
$txt['poll_remove_warn'] = 'このスレッドから投票箱を削除しても良いですか？';
$txt['poll_results_expire'] = '投票完了したら結果を表示';
$txt['poll_expires_on'] = '投票締め切り';
$txt['poll_expired_on'] = '投票締め切り';
$txt['poll_change_vote'] = '投票を削除';
$txt['poll_return_vote'] = '投票のオプション';

$txt['quick_mod_remove'] = '選択されたものを削除';
$txt['quick_mod_lock'] = '選択されたものをロック';
$txt['quick_mod_sticky'] = '選択されたものの更新通知を受ける';
$txt['quick_mod_move'] = '選択されたものを移動';
$txt['quick_mod_merge'] = '選択されたものを結合';
$txt['quick_mod_markread'] = 'Mark selected read';
$txt['quick_mod_go'] = '実行！';
$txt['quickmod_confirm'] = '本当に実行しますか？';

$txt['spell_check'] = 'スペルチェック';

$txt['quick_reply_1'] = '簡易返信';
$txt['quick_reply_2'] = '<i>簡易返信</i>では通常の投稿のように、便利なBBCコード及びスマイリーが使えます。';
$txt['quick_reply_warning'] = '警告：このスレッドは現在ロックされています！<br />管理人、モデレーターのみが返信できます。';

$txt['notification_enable_board'] = '全ての新しいスレッドからの更新通知を有効にしますか？';
$txt['notification_disable_board'] = 'この掲示板の新しいスレッドからの更新通知を無効化しますか？';
$txt['notification_enable_topic'] = 'このスレッドに新しい投稿があった際に通知を受けますか？';
$txt['notification_disable_topic'] = 'このスレッドの新しい投稿の通知を無効化しますか？';

$txt['rtm1'] = 'モデレーターに連絡';

$txt['unread_topics_visit'] = '最近の未読のスレッド';
$txt['unread_topics_visit_none'] = '新着の未読のスレッドはありません。<a href="' . $scripturl . '?action=unread;all">全ての未読を読む</a>.';
$txt['unread_topics_all'] = '全ての未読のスレッド';
$txt['unread_replies'] = '更新されたスレッド';

$txt['who_title'] = 'オンラインのメンバー';
$txt['who_and'] = 'さんと、';
$txt['who_viewing_topic'] = 'さんが、このスレッドを見ています。';
$txt['who_viewing_board'] = 'さんが、この掲示板を見ています。';
$txt['who_member'] = 'メンバー';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'Valid CSS!';

$txt['guest'] = 'ゲスト';
$txt['guests'] = 'ゲスト';
$txt['user'] = 'ユーザー';
$txt['users'] = 'ユーザー';
$txt['hidden'] = '秘密';
$txt['buddy'] = '仲間';
$txt['buddies'] = '仲間';
$txt['most_online_ever'] = 'これまでの最大オンライン人数';
$txt['most_online_today'] = '本日の最大オンライン人数';

$txt['merge_select_target_board'] = '結合されたスレッドの行き先となる掲示板を選択';
$txt['merge_select_poll'] = '結合されたスレッドの投票箱を選択';
$txt['merge_topic_list'] = '結合されたスレッドを選択';
$txt['merge_select_subject'] = '結合されたスレッドの題名を選択';
$txt['merge_custom_subject'] = '題名';
$txt['merge_enforce_subject'] = '全てのメッセージの題名を変更する';
$txt['merge_include_notifications'] = '更新通知を継ぐ';
$txt['merge_check'] = '結合しますか？';
$txt['merge_no_poll'] = '投票無し';

$txt['response_prefix'] = 'Re：';
$txt['current_icon'] = '現在のアイコン';

$txt['smileys_current'] = '現在のスマイリーセット';
$txt['smileys_none'] = 'スマイリー無し';
$txt['smileys_forum_board_default'] = 'フォーラムもしくは掲示板のデフォルト';

$txt['search_results'] = '検索結果';
$txt['search_no_results'] = '該当無し';

$txt['totalTimeLogged1'] = '総ログイン時間：';
$txt['totalTimeLogged2'] = '日';
$txt['totalTimeLogged3'] = '時間';
$txt['totalTimeLogged4'] = '分';
$txt['totalTimeLogged5'] = '日 ';
$txt['totalTimeLogged6'] = '時間 ';
$txt['totalTimeLogged7'] = '分';

$txt['approve_thereis'] = '現在';
$txt['approve_thereare'] = '現在';
$txt['approve_member'] = '1人のメンバー';
$txt['approve_members'] = '人のメンバー';
$txt['approve_members_waiting'] = 'が承認待ちです。';

$txt['notifyboard_turnon'] = 'この掲示板の新しいスレッドに投稿した際の更新通知メールを受け取りますか？';
$txt['notifyboard_turnoff'] = '更新通知メールの受け取りを解除しますか？';

$txt['activate_code'] = 'あなたのアクティべーションコードは';

$txt['find_members'] = 'メンバーを検索';
$txt['find_username'] = '名前、ユーザ名、メールアドレス';
$txt['find_buddies'] = '仲間のみを表示';
$txt['find_wildcards'] = 'ワイルドカードを使う：*,';
$txt['find_no_results'] = '見つかりませんでした。';
$txt['find_results'] = '結果';
$txt['find_close'] = '閉じる';

$txt['unread_since_visit'] = '新着の未読の投稿を読む';
$txt['show_unread_replies'] = '更新のあったスレッドを読む';

$txt['change_color'] = '色を変える';

$txt['quickmod_delete_selected'] = '選択項目を削除';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'あなたに、他の新しい個人メッセージが届いています。\\nすぐに閲覧しますか？（別窓で）';

$txt['previous_next_back'] = '←前へ';
$txt['previous_next_forward'] = '次へ→';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'このスレッドは、' . $txt['movetopic_auto_board'] . "の" . $txt['movetopic_auto_topic'] . 'に移動しました。';

$txt['upshrink_description'] = 'ヘッダーを最小化／最大化';

$txt['mark_unread'] = '未読にする';

$txt['ssi_not_direct'] = 'SSI.phpへURLで直接アクセスしないでください。このファイルは、パス（%s）に?ssi_function=somethingという形式で使用します。';
$txt['ssi_session_broken'] = 'SSI.php は、セッションをロードすることができませんでした。This may cause problems with logout and other functions - please make sure SSI.php is included before *anything* else in all your scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = '投稿のプレビュー';
$txt['preview_fetch'] = 'プレビューを取得中…';
$txt['preview_new'] = '新しい投稿';
$txt['error_while_submitting'] = 'このメッセージを投稿するときにエラーが発生しました：';

$txt['split_selected_posts'] = '選択された投稿';
$txt['split_selected_posts_desc'] = '分割後、下記の投稿から新しいスレッドを形成するでしょう。';
$txt['split_reset_selection'] = '選択を解除';

$txt['modify_cancel'] = 'キャンセル';
$txt['mark_read_short'] = '既読';

$txt['pm_short'] = '個人メッセージ';
$txt['hello_member_ndt'] = 'ようこそ';

$txt['ajax_in_progress'] = 'Loading...';

?>