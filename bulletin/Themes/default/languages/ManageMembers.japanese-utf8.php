<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'メンバーグループの管理';
$txt['membergroups_description'] = 'メンバーグループは、同一の権限、外観、アクセス権を持っているグループです。また、投稿に応じてのグループ分けをすることもできます。プロフィールおよびアカウント設定によりメンバーグループ分けをすることができます。';
$txt['membergroups_modify'] = '修正';

$txt['membergroups_add_group'] = 'グループ作成';
$txt['membergroups_regular'] = 'レギュラーなグループ';
$txt['membergroups_post'] = 'グループごとの投稿数をカウント';

$txt['membergroups_new_group'] = 'グループ作成';
$txt['membergroups_group_name'] = 'メンバーグループ名';
$txt['membergroups_new_board'] = '掲示板の設定';
$txt['membergroups_new_board_desc'] = 'この掲示板を見ることができるグループ';
$txt['membergroups_new_board_post_groups'] = '<em>備考：通常、投稿数によるグループで判別する必要はありません。</em>';
$txt['membergroups_new_as_type'] = 'タイプで';
$txt['membergroups_new_as_copy'] = 'をベースに';
$txt['membergroups_new_copy_none'] = '（なし）';
$txt['membergroups_can_edit_later'] = '（後で編集できます）';

$txt['membergroups_edit_group'] = 'グループ編集';
$txt['membergroups_edit_name'] = 'グループ名';
$txt['membergroups_edit_post_group'] = '投稿数に基づいたグループ';
$txt['membergroups_min_posts'] = '必要な投稿数';
$txt['membergroups_online_color'] = 'オンライン時の色';
$txt['membergroups_star_count'] = '星の数';
$txt['membergroups_star_image'] = '星の画像のファイル名';
$txt['membergroups_star_image_note'] = '（この星の置かれているURLは、Themeディレクトリ内の言語ディレクトリの中にあります。）';
$txt['membergroups_max_messages'] = '最大個人メッセージ';
$txt['membergroups_max_messages_note'] = '（0は無限）';
$txt['membergroups_edit_save'] = '保存';
$txt['membergroups_delete'] = '削除';
$txt['membergroups_confirm_delete'] = 'このメンバーグループを削除してもいいですか！？';

$txt['membergroups_members_title'] = 'グループにいるメンバーを全て表示する。';
$txt['membergroups_members_no_members'] = 'このグループにはメンバーがいません。';
$txt['membergroups_members_add_title'] = 'このグループにメンバー追加';
$txt['membergroups_members_add_desc'] = '追加するメンバーのリスト';
$txt['membergroups_members_add'] = 'マーカーを追加';
$txt['membergroups_members_remove'] = 'グループから削除';

$txt['membergroups_postgroups'] = '投稿したグループ';

$txt['membergroups_edit_groups'] = 'メンバーグループ';
$txt['membergroups_settings'] = 'メンバーグループの設定';
$txt['groups_manage_membergroups'] = 'メンバーグループの変更を許可するグループGroups allowed to change membergroups';
$txt['membergroups_settings_submit'] = '保存';
$txt['membergroups_select_permission_type'] = '権限のプロフィールを選択';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = '掲示板を表示';

$txt['admin_browse_approve'] = '承認待ちのメンバーのアカウント';
$txt['admin_browse_approve_desc'] = 'From here you can manage all members who are waiting to have their accounts approved.';
$txt['admin_browse_activate'] = 'アクティベーション待ちのメンバーのアカウント';
$txt['admin_browse_activate_desc'] = 'This screen lists all the members who have still not activated their accounts at your forum.';
$txt['admin_browse_awaiting_approval'] = '承認待ち<span style="font-weight: normal">（%d）</span>';
$txt['admin_browse_awaiting_activate'] = 'アクティベーション待ち<span style="font-weight: normal">（%d）</span>';

$txt['admin_browse_username'] = 'ユーザー名';
$txt['admin_browse_email'] = 'メールアドレス';
$txt['admin_browse_ip'] = 'ＩＰアドレス';
$txt['admin_browse_registered'] = '登録済み';
$txt['admin_browse_id'] = 'ＩＤ';
$txt['admin_browse_with_selected'] = '選択';
$txt['admin_browse_no_members_approval'] = 'No members currently awaite approval.';
$txt['admin_browse_no_members_activate'] = 'No members currently have not activated their accounts.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'all selected members?';
$txt['admin_browse_outstanding_warn'] = 'all affected members?';
$txt['admin_browse_w_approve'] = '承認';
$txt['admin_browse_w_activate'] = 'アクティベート';
$txt['admin_browse_w_delete'] = '削除';
$txt['admin_browse_w_reject'] = '非承認';
$txt['admin_browse_w_remind'] = '再発行';
$txt['admin_browse_w_approve_deletion'] = '承認（削除されたアカウント）';
$txt['admin_browse_w_email'] = 'とメール送信';
$txt['admin_browse_w_approve_require_activate'] = '承認とアクティベーションを必要とする';

$txt['admin_browse_filter_by'] = 'フィルタ条件：';
$txt['admin_browse_filter_show'] = '表示';
$txt['admin_browse_filter_type_0'] = 'アクティベートを受けていないアカウント';
$txt['admin_browse_filter_type_2'] = 'メール変更時のアクティベートを受けていないアカウント';
$txt['admin_browse_filter_type_3'] = '承認を受けていないアカウント';
$txt['admin_browse_filter_type_4'] = '削除によって承認を受けていないアカウント';
$txt['admin_browse_filter_type_5'] = '年齢制限によって承認を受けていないアカウント';

$txt['admin_browse_outstanding'] = '未定メンバー';
$txt['admin_browse_outstanding_days_1'] = 'With all members who registered longer than';
$txt['admin_browse_outstanding_days_2'] = '日前';
$txt['admin_browse_outstanding_perform'] = '次のアクションを行います。';
$txt['admin_browse_outstanding_go'] = '実行';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = '登録拒否';
$txt['admin_approve_reject_desc'] = '遺憾ながら、あなたの使用しているアプリケーションでの' . $context['forum_name'] . 'への登録は拒否されました。';
$txt['admin_approve_delete'] = 'アカウントは削除されました。';
$txt['admin_approve_delete_desc'] = 'あなたの' . $context['forum_name'] . '上のアカウントは削除されました。アカウントが有効化されなかった場合があります。その場合は、お手数ですがもう一度登録し直してみてください。';
$txt['admin_approve_remind'] = '登録漏れ';
$txt['admin_approve_remind_desc'] = 'あなたのアカウントはまだアクティベートを受けていません：';
$txt['admin_approve_remind_desc2'] = '以下をクリックするとアカウントアクティベーション作業は完了します：';
$txt['admin_approve_accept_desc'] = 'あなたのアカウントは管理人によって手動でアクティベートされました。以降ログインと投稿が出来ます。';
$txt['admin_approve_require_activation'] = 'あなたの、' . $context['forum_name'] . 'のアカウントは、管理人によって承認され、有効化されました。これにより投稿したりすることができるようになるでしょう。';

?>