<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = '権限の管理';
$txt['permissions_modify'] = '修正';
$txt['permissions_access'] = 'アクセスのみ可能';
$txt['permissions_allowed'] = '許可';
$txt['permissions_denied'] = '不許可';

$txt['permissions_switch'] = '切り替え';
$txt['permissions_global'] = '全体';
$txt['permissions_local'] = 'ローカル';

$txt['permissions_groups'] = 'メンバーグループの権限設定';
$txt['permissions_all'] = '全て';
$txt['permissions_none'] = 'なし';
$txt['permissions_set_permissions'] = '権限の設定';

$txt['permissions_with_selection'] = '選択された';
$txt['permissions_apply_pre_defined'] = '初期設定の権限';
$txt['permissions_select_pre_defined'] = 'ベースとなる権限を選択';
$txt['permissions_copy_from_board'] = 'この権限設定をこの板でも反映';
$txt['permissions_select_board'] = '掲示板を選択';
$txt['permissions_like_group'] = 'このグループと同じ権限を以下のグループに指定する';
$txt['permissions_select_membergroup'] = 'メンバーグループを設定';
$txt['permissions_add'] = '権限を追加';
$txt['permissions_remove'] = '権限を削除';
$txt['permissions_deny'] = '否認';
$txt['permissions_select_permission'] = '権限の選択';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = '権限は、一つのアクションを選択することで修正できます。';
$txt['permissions_no_action'] = '何も選択されていません。';
$txt['permissions_deny_dangerous'] = 'あなたは、いくつかの権限を禁止にしようとしています。\\nこれは危険で、誰も許可を与えないグループ（複数可）がいないことを確かめていなければ、予期しない結果を引き起こすことになります。\\n\\n続けてもよろしいでしょうか？';

$txt['permissions_boards'] = '掲示板別の権限の設定';

$txt['permissions_modify_group'] = 'グループの修正';
$txt['permissions_general'] = '全般の権限';
$txt['permissions_board'] = '全般の権限';
$txt['permissions_commit'] = '変更を保存';
$txt['permissions_modify_local'] = 'ローカルな権限を修正';
$txt['permissions_on'] = 'という掲示板の';
$txt['permissions_local_for'] = 'このグループにここだけの権限を設定';
$txt['permissions_option_on'] = '○';
$txt['permissions_option_off'] = '△';
$txt['permissions_option_deny'] = '×';
$txt['permissions_option_desc'] = '権限は「許可」（○）、「否認」（△）、<span style="color: red;">「禁止」（×）</span>から選ぶことができます。<br /><br />あなたが許可を否定すればそのグループに属しているメンバー（モデレーターを除く）も同様に禁止されることを忘れないでください。<br />よって、禁止のオプションは<b>慎重</b>に行ってください。 Disallow, on the other hand, denies unless otherwise granted.';

$txt['permissiongroup_general'] = '全般';
$txt['permissionname_view_stats'] = 'フォーラムの統計を表示';
$txt['permissionhelp_view_stats'] = 'フォーラムの統計は、メンバー数、毎日の投稿数、いくつかのトップ１０の統計といった、すべての統計情報を要約したページです。この権限を与えると掲示板の最下部にそのリンクが張られます。 (\'[More Stats]\').';
$txt['permissionname_view_mlist'] = 'メンバーリストを閲覧';
$txt['permissionhelp_view_mlist'] = 'メンバーリストとは、フォーラム上での登録メンバーの一覧です。この一覧でソートしたり検索したりできます。これは、掲示板一覧ページおよび、フォーラム統計ページからリンクされます。';
$txt['permissionname_who_view'] = 'オンラインののメンバーを表示';
$txt['permissionhelp_who_view'] = '「オンラインのメンバー」とは、その時点でアクセスしているメンバーの名前を表示します。この権限は「全般のオプション」で有効にした際に働きます。この機能を有効化することにより、掲示板一覧で「オンラインのユーザ」のリンクで確認できるようにします。';
$txt['permissionname_search_posts'] = 'スレッドと投稿の検索';
$txt['permissionhelp_search_posts'] = '検索の許可は、アクセス許可された掲示板全てを検索できるようにします。この権限を与えた場合、フォーラムのバーに「検索」ボタンが追加されます。';
$txt['permissionname_karma_edit'] = '他人の雰囲気（karma）の変更';
$txt['permissionhelp_karma_edit'] = '雰囲気（Karma）とは、メンバーの人気を示す項目です。この機能を使うためには「」の権限を許可する必要があります。この権限でメンバーグループが、特定メンバーに評価を投票することができるようになります。なお、この権限はゲストには効果ありません。';

$txt['permissiongroup_pm'] = '個人メッセージ';
$txt['permissionname_pm_read'] = '個人メッセージ閲覧';
$txt['permissionhelp_pm_read'] = 'This permission allows users to access the Personal Messages section and read their Personal Messages. Without this permission a user is unable to send Personal Messages.';
$txt['permissionname_pm_send'] = '個人メッセージ送信';
$txt['permissionhelp_pm_send'] = 'Send personal messages to other registered members. Requires the \'Read personal messages\' permission.';

$txt['permissiongroup_calendar'] = 'カレンダー';
$txt['permissionname_calendar_view'] = 'カレンダーの閲覧';
$txt['permissionhelp_calendar_view'] = 'The calendar shows for each month the birthdays, events and holidays. This permission allows access to this calendar. When this permission is enabled, a button will be added to the top button bar and a list will be shown at the bottom of the board index with current and upcoming birthdays, events and holidays. The calendar needs be enabled from \'Edit Features and Options\'.';
$txt['permissionname_calendar_post'] = 'カレンダーにイベントを作成';
$txt['permissionhelp_calendar_post'] = 'An Event is a topic linked to a certain date or date range. Creating events can be done from the calendar. An event can only be created if the user that creates the event is allowed to post new topics.';
$txt['permissionname_calendar_edit'] = 'カレンダーのイベントの編集';
$txt['permissionhelp_calendar_edit'] = 'An Event is a topic linked to a certain date or date range. Event can be edited by clicking the red asterisk (*) next to the event in the calendar view. In order to be able to edit an event, a user must have sufficient permissions to edit the first message of the topic that is linked to the event.';
$txt['permissionname_calendar_edit_own'] = '自分のイベント';
$txt['permissionname_calendar_edit_any'] = '他のイベント';

$txt['permissiongroup_maintenance'] = 'フォーラム管理';
$txt['permissionname_admin_forum'] = 'データーベースの管理';
$txt['permissionhelp_admin_forum'] = 'This permission allows a user to change forum and theme settings, manage packages, and use the forum and database maintenance tools. Use this permission with caution, as it is very powerful.';
$txt['permissionname_manage_boards'] = 'Manage boards and categories';
$txt['permissionhelp_manage_boards'] = 'This permission allows creation, editing and removal of boards and categories.';
$txt['permissionname_manage_attachments'] = 'Manage attachments and avatars';
$txt['permissionhelp_manage_attachments'] = 'This permission allows access to the attachment center, where all forum attachments and avatars are listed and can be removed.';
$txt['permissionname_manage_smileys'] = 'Manage smileys';
$txt['permissionhelp_manage_smileys'] = 'This allows access to the smiley center. In the smiley center you can add, edit and remove smileys and smiley sets.';
$txt['permissionname_edit_news'] = 'ニュース編集';
$txt['permissionhelp_edit_news'] = 'The news function allows a random news line to appear on each screen. In order to use the news function, enabled it in the forum settings.';

$txt['permissiongroup_member_admin'] = 'メンバーグループの管理';
$txt['permissionname_moderate_forum'] = 'フォーラムのメンバーの管理';
$txt['permissionhelp_moderate_forum'] = 'This permission includes all important member moderation functions:<ul><li>access to registration management</li><li>access to the view/delete members screen</li><li>extensive profile info, including track IP/user and (hidden) online status</li><li>アカウントのアクティベート</li><li>get approval notifications and approve accounts</li><li>immune to ignore PM</li><li>several small things</li></ul>';
$txt['permissionname_manage_membergroups'] = 'メンバーグループの管理と権限の割り当て';
$txt['permissionhelp_manage_membergroups'] = 'This permission allows a user to edit membergroups and assign membergroups to other members.';
$txt['permissionname_manage_permissions'] = '権限の管理';
$txt['permissionhelp_manage_permissions'] = 'This permission allows a user to edit all permissions of a membergroup, globally or for individual boards.';
$txt['permissionname_manage_bans'] = 'キックしたリストの管理';
$txt['permissionhelp_manage_bans'] = 'This permission allows a user to add or remove usernames, IP addresses, hostnames and email addresses to a list of banned users. It also allows to view and remove log entries of banned users that attempted to login.';
$txt['permissionname_send_mail'] = 'メンバーにフォーラムから送るメール';
$txt['permissionhelp_send_mail'] = 'Mass mail all forum members, or just a few membergroups by email or personal message (the latter requires \'Send Personal Message\' permission).';

$txt['permissiongroup_profile'] = 'メンバーのプロフィール';
$txt['permissionname_profile_view'] = 'プロフィールの概要と統計を表示';
$txt['permissionhelp_profile_view'] = 'This permission allows users clicking on a username to see a summary of profile settings, some statistics and all posts of the user.';
$txt['permissionname_profile_view_own'] = '自分のプロフィール';
$txt['permissionname_profile_view_any'] = '他のプロフィール';
$txt['permissionname_profile_identity'] = 'アカウントの設定を編集';
$txt['permissionhelp_profile_identity'] = 'Account settings are the basic settings of a profile, like password, email address, membergroup and preferred language.';
$txt['permissionname_profile_identity_own'] = '自分のプロフィール';
$txt['permissionname_profile_identity_any'] = '他のプロフィール';
$txt['permissionname_profile_extra'] = 'プロフィールの詳細を編集';
$txt['permissionhelp_profile_extra'] = 'Additional profile settings include settings for avatars, theme preferences, notifications and Personal Messages.';
$txt['permissionname_profile_extra_own'] = '自分のプロフィール';
$txt['permissionname_profile_extra_any'] = '他のプロフィール';
$txt['permissionname_profile_title'] = 'カスタムタイトルを編集';
$txt['permissionhelp_profile_title'] = 'The custom title is shown on the topic display page, under the profile of each user that has a custom title.';
$txt['permissionname_profile_title_own'] = '自分のプロフィール';
$txt['permissionname_profile_title_any'] = '他のプロフィール';
$txt['permissionname_profile_remove'] = 'アカウント削除';
$txt['permissionhelp_profile_remove'] = 'This permission allows a user to delete his account, when set to \'Own Account\'.';
$txt['permissionname_profile_remove_own'] = '自分のアカウント';
$txt['permissionname_profile_remove_any'] = '他のアカウント';
$txt['permissionname_profile_server_avatar'] = 'サーバー上のアバター画像の指定を許可';
$txt['permissionhelp_profile_server_avatar'] = 'If enabled this will allow a user to select an avatar from the avatar collections installed on the server.';
$txt['permissionname_profile_upload_avatar'] = 'アバター画像のアップロードを許可';
$txt['permissionhelp_profile_upload_avatar'] = 'This permission will allow a user to upload their personal avatar to the server.';
$txt['permissionname_profile_remote_avatar'] = '他のサーバーのアバター画像の指定を許可';
$txt['permissionhelp_profile_remote_avatar'] = 'Because avatars might influence the page creation time negatively, it is possible to disallow certain membergroups to use avatars from external servers. ';

$txt['permissiongroup_general_board'] = '全般';
$txt['permissionname_moderate_board'] = '掲示板のMOD';
$txt['permissionhelp_moderate_board'] = 'The moderate board permission adds a few small permissions that make a moderator a real moderator. Permissions include replying to locked topics, changing the poll expire time and viewing poll results eventhough ';

$txt['permissiongroup_topic'] = 'スレッド';
$txt['permissionname_post_new'] = 'スレッドを立てる';
$txt['permissionhelp_post_new'] = 'この権限はユーザが新しいスレッドを立てることができるようにするものです。この項目は、スレッドへの投稿を許可するものではありません。';
$txt['permissionname_merge_any'] = 'スレッドの結合';
$txt['permissionhelp_merge_any'] = '２つのスレッドを１つに結合するものです。The order of messages within the merged topic will be based on the time the messages were created. A user can only merge topics on those boards a user is allowed to merge. In order to merge multiple topics at once, a user has to enable quickmoderation in their profile settings.';
$txt['permissionname_split_any'] = 'スレッドの分割';
$txt['permissionhelp_split_any'] = 'スレッドを２つに分割します。';
$txt['permissionname_send_topic'] = 'スレッドを友達に紹介';
$txt['permissionhelp_send_topic'] = 'この権限は、メール送信画面を使って、スレッドを友達に知紹介するものです。';
$txt['permissionname_make_sticky'] = 'スレッドの更新通知';
$txt['permissionhelp_make_sticky'] = 'Sticky topics are topics that always remain on top of a board. They can be useful for announcements or other important messages.';
$txt['permissionname_move'] = 'スレッドの移動';
$txt['permissionhelp_move'] = 'Move a topic from one board to the other. Users can only select target boards they are allowed to access.';
$txt['permissionname_move_own'] = '自分のスレッド';
$txt['permissionname_move_any'] = '他のスレッド';
$txt['permissionname_lock'] = 'スレッドのロック';
$txt['permissionhelp_lock'] = 'This permission allows a user to lock a topic. This can be done in order to make sure noone can reply to a topic. Only uses with a \'Moderate board\' permission can still post in locked topics.';
$txt['permissionname_lock_own'] = '自分のスレッド';
$txt['permissionname_lock_any'] = '他のスレッド';
$txt['permissionname_remove'] = 'スレッドの削除';
$txt['permissionhelp_remove'] = 'Delete topics as a whole. Note that this permission doesn\'t allow to delete specific messages within the topic!';
$txt['permissionname_remove_own'] = '自分のスレッド';
$txt['permissionname_remove_any'] = '他のスレッド';
$txt['permissionname_post_reply'] = 'スレッドへの返信';
$txt['permissionhelp_post_reply'] = 'この権限はスレッドへの投稿の可否を設定します。';
$txt['permissionname_post_reply_own'] = '自分のスレッド';
$txt['permissionname_post_reply_any'] = '他のスレッド';
$txt['permissionname_modify_replies'] = '自分のスレッド内の投稿を修正できる';
$txt['permissionhelp_modify_replies'] = 'This permission allows a user that started a topic to modify all replies to their topic.';
$txt['permissionname_delete_replies'] = '自分のスレッド内の投稿を削除できる';
$txt['permissionhelp_delete_replies'] = 'This permission allows a user that started a topic to remove all replies to their topic.';
$txt['permissionname_announce_topic'] = 'アナウンスのスレッド';
$txt['permissionhelp_announce_topic'] = 'This allows to send an announcement e-mail about a topic to all members or to a few membergroups.';

$txt['permissiongroup_post'] = '投稿';
$txt['permissionname_delete'] = '投稿の削除';
$txt['permissionhelp_delete'] = '投稿内容を削除します。ただし、スレッドで一番最初の投稿は、削除できません。';
$txt['permissionname_delete_own'] = '自分の投稿';
$txt['permissionname_delete_any'] = '他の投稿';
$txt['permissionname_modify'] = '投稿の修正';
$txt['permissionhelp_modify'] = '投稿の編集';
$txt['permissionname_modify_own'] = '自分の投稿';
$txt['permissionname_modify_any'] = '他の投稿';
$txt['permissionname_report_any'] = 'モデレータに投稿の報告';
$txt['permissionhelp_report_any'] = 'This permission adds a link to each message, allowing a user to report a post to a moderator. On reporting, all moderators on that board will receive an e-mail with a link to the reported post and a description of the problem (as given by the reporting user).';

$txt['permissiongroup_poll'] = '投票箱';
$txt['permissionname_poll_view'] = '投票箱の閲覧';
$txt['permissionhelp_poll_view'] = 'ここでは、投票箱の内容を閲覧できるかを指定します。この権限がない場合、スレッドの内容のみ表示されます。';
$txt['permissionname_poll_vote'] = '投票箱へ投票';
$txt['permissionhelp_poll_vote'] = 'This permission allows a (registered) user to cast one vote. It doesn\'t apply to guests.';
$txt['permissionname_poll_post'] = '投票箱の設置';
$txt['permissionhelp_poll_post'] = 'この権限の設定はユーザの投票箱の設置に関するものです。「スレッドを立てる」権限が無い場合、この機能を使うことはできません。';
$txt['permissionname_poll_add'] = 'スレッドで投票箱を作る';
$txt['permissionhelp_poll_add'] = 'Add poll to topics allows a user to add a poll after the topic has been created. This permission requires sufficent rights to edit the first post of a topic.';
$txt['permissionname_poll_add_own'] = '自分のスレッド';
$txt['permissionname_poll_add_any'] = '他のスレッド';
$txt['permissionname_poll_edit'] = '投票の編集';
$txt['permissionhelp_poll_edit'] = 'This permission allows to edit the options of a poll and to reset the poll. In order to edit the maximum number of votes and the expiration time, a user needs to have the \'Moderate board\' permission.';
$txt['permissionname_poll_edit_own'] = '自分の投票箱';
$txt['permissionname_poll_edit_any'] = '他の投票箱';
$txt['permissionname_poll_lock'] = '投票をロック';
$txt['permissionhelp_poll_lock'] = 'Locking polls prevents the poll from accepting any more votes.';
$txt['permissionname_poll_lock_own'] = '自分の投票箱';
$txt['permissionname_poll_lock_any'] = '他の投票箱';
$txt['permissionname_poll_remove'] = '投票を削除';
$txt['permissionhelp_poll_remove'] = 'ここでは、投票箱の削除権限を指定します。';
$txt['permissionname_poll_remove_own'] = '自分の投票箱';
$txt['permissionname_poll_remove_any'] = '他の投票箱';

$txt['permissiongroup_notification'] = '更新通知';
$txt['permissionname_mark_any_notify'] = '投稿があった際に通知を受け取る';
$txt['permissionhelp_mark_any_notify'] = 'This feature allows users to receive a notification whenever someone replies to a topic they subscribed to.';
$txt['permissionname_mark_notify'] = '新しいスレッドが立ったら通知を受ける';
$txt['permissionhelp_mark_notify'] = 'Notification on new topics is a feature that allows a user to receive an e-mail every time a new topic is created on the board they subscribe to.';

$txt['permissiongroup_attachment'] = 'ファイル添付';
$txt['permissionname_view_attachments'] = '添付ファイルの閲覧';
$txt['permissionhelp_view_attachments'] = 'Attachments are files that are attached to posted messages. This feature can be enabled and configured in \'Edit Features and Options\'. Since attachments are not directly accessed, you can protect them from being downloaded by users that don\'t have this permission.';
$txt['permissionname_post_attachment'] = 'ファイルを添付';
$txt['permissionhelp_post_attachment'] = 'Attachments are files that are attached to posted messages. One message can contain multiple attachments.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = '権限設定';
$txt['groups_manage_permissions'] = '権限を変更できるメンバーグループ';
$txt['permission_settings_submit'] = '保存';
$txt['permission_settings_enable_deny'] = 'Enable the option to deny permissions';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'このオプションをオフにすると△否認を×禁止に権限が変更されます。';
$txt['permission_by_membergroup_desc'] = 'ここで、各メンバーグループの全般的な権限を設定できます。ここでの設定は、任意の掲示板にローカルな権限が指定されていない場合を除いてすべて反映されます。';
$txt['permission_by_board_desc'] = 'Here you can set whether a board uses the global permissions or has a specific permission regime. Using local permissions means that for that board, you can set every permission for every membergroup.';
$txt['permission_settings_desc'] = 'Here you can set who has permission to change permissions, as well as how sophisticated the permission system should be.';
$txt['permission_settings_enable_postgroups'] = 'Enable permissions for post count based groups';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Disabling this setting will remove permissions currently set to post count based groups.';
$txt['permission_settings_enable_by_board'] = 'Enable advanced by-board permissions';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Disabling this setting will remove all permissions set on board level.';

?>