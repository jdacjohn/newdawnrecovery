<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = '管理會員群組';
$txt['membergroups_description'] = '您可以到會員的個人資料裡將會員分為數個群組，可以是依照相關的權限設定為同一群組，也可以按照發表的文章數來歸類群組。';
$txt['membergroups_modify'] = '修改';

$txt['membergroups_add_group'] = '增加群組';
$txt['membergroups_regular'] = '特殊群組';
$txt['membergroups_post'] = '依照文章數的群組';

$txt['membergroups_new_group'] = '新增群組';
$txt['membergroups_group_name'] = '群組名稱';
$txt['membergroups_new_board'] = '可瀏覽的版面';
$txt['membergroups_new_board_desc'] = '這個群組的成員可以瀏覽的版面。';
$txt['membergroups_new_board_post_groups'] = '<em>注意：通常文章群組不需要限制可瀏覽的版面，因為會員屬於的其它群組已有需要的權限。</em>';
$txt['membergroups_new_as_type'] = '依照類型';
$txt['membergroups_new_as_copy'] = '按照';
$txt['membergroups_new_copy_none'] = '(沒有)';
$txt['membergroups_can_edit_later'] = '您之後還能夠修改這些設定。';

$txt['membergroups_edit_group'] = '編輯群組';
$txt['membergroups_edit_name'] = '群組名稱';
$txt['membergroups_edit_post_group'] = '這個群組是依照文章數來做分類的。';
$txt['membergroups_min_posts'] = '需要的文章數';
$txt['membergroups_online_color'] = '在線上名單裡採用的色彩';
$txt['membergroups_star_count'] = '星狀圖案數量';
$txt['membergroups_star_image'] = '星狀圖案檔名';
$txt['membergroups_star_image_note'] = '您可以依照會員的語系來使用 $language';
$txt['membergroups_max_messages'] = '私人訊息數量上限';
$txt['membergroups_max_messages_note'] = '0 = 無限制';
$txt['membergroups_edit_save'] = '儲存';
$txt['membergroups_delete'] = '刪除';
$txt['membergroups_confirm_delete'] = '您確定要刪除這個會員群組?!';

$txt['membergroups_members_title'] = '瀏覽這個群組的成員';
$txt['membergroups_members_no_members'] = '此群組無任何成員';
$txt['membergroups_members_add_title'] = '加入新的會員到這個群組';
$txt['membergroups_members_add_desc'] = '要加入的會員名稱';
$txt['membergroups_members_add'] = '加入會員';
$txt['membergroups_members_remove'] = '移除會員';

$txt['membergroups_postgroups'] = '文章群組';

$txt['membergroups_edit_groups'] = '編輯群組';
$txt['membergroups_settings'] = '群組設定';
$txt['groups_manage_membergroups'] = '可改變群組的群組';
$txt['membergroups_settings_submit'] = '儲存';
$txt['membergroups_select_permission_type'] = '選擇權限類型';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = '顯示版面';

$txt['admin_browse_approve'] = '等待審核的帳號';
$txt['admin_browse_approve_desc'] = '這裡可以讓您管理等待審核的會員帳號。';
$txt['admin_browse_activate'] = '等待審核的會員';
$txt['admin_browse_activate_desc'] = '這個頁面會列出全部未啟用帳號的會員。';
$txt['admin_browse_awaiting_approval'] = '等待審核 <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = '等待啟用 <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = '帳號';
$txt['admin_browse_email'] = '郵件';
$txt['admin_browse_ip'] = 'IP 位址';
$txt['admin_browse_registered'] = '已註冊';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = '選項動作';
$txt['admin_browse_no_members_approval'] = '沒有會員等待帳號審核。';
$txt['admin_browse_no_members_activate'] = '沒有會員未啟用帳號。';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = '所有選擇的會員？';
$txt['admin_browse_outstanding_warn'] = '所有符合的會員？';
$txt['admin_browse_w_approve'] = '批准';
$txt['admin_browse_w_activate'] = '啟用';
$txt['admin_browse_w_delete'] = '刪除';
$txt['admin_browse_w_reject'] = '拒絕';
$txt['admin_browse_w_remind'] = '提醒';
$txt['admin_browse_w_approve_deletion'] = '批准 (刪除帳號)';
$txt['admin_browse_w_email'] = '和傳送信件';
$txt['admin_browse_w_approve_require_activate'] = '批准和需要啟用帳號';

$txt['admin_browse_filter_by'] = '過濾';
$txt['admin_browse_filter_show'] = '顯示';
$txt['admin_browse_filter_type_0'] = '未啟用的帳號';
$txt['admin_browse_filter_type_2'] = '未啟用的郵件改變';
$txt['admin_browse_filter_type_3'] = '未審核的帳號';
$txt['admin_browse_filter_type_4'] = '未審核的刪除帳號';
$txt['admin_browse_filter_type_5'] = '未審核的年齡限制帳號';

$txt['admin_browse_outstanding'] = '未處理的會員';
$txt['admin_browse_outstanding_days_1'] = '已註冊超過此時間的會員';
$txt['admin_browse_outstanding_days_2'] = '天前';
$txt['admin_browse_outstanding_perform'] = '進行下面動作';
$txt['admin_browse_outstanding_go'] = '執行';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = '拒絕的註冊';
$txt['admin_approve_reject_desc'] = '很抱歉，您申請的 ' . $context['forum_name'] . ' 帳號已被拒絕。';
$txt['admin_approve_delete'] = '刪除的帳號';
$txt['admin_approve_delete_desc'] = '您在 ' . $context['forum_name'] . ' 的帳號已被刪除。可能因為您沒有啟用帳號，如果是您現在可以重新註冊。';
$txt['admin_approve_remind'] = '註冊提醒';
$txt['admin_approve_remind_desc'] = '您還未啟用您的帳號在';
$txt['admin_approve_remind_desc2'] = '請點下面的連結啟用帳號：';
$txt['admin_approve_accept_desc'] = '您的帳號已被管理員啟用，您現在可以登入論壇了。';
$txt['admin_approve_require_activation'] = '您在 ' . $context['forum_name'] . ' 的帳號已被管理員接受，但您現在必須啟用帳號才能發言。';

?>