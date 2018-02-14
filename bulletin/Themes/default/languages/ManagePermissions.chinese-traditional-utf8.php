<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = '管理權限';
$txt['permissions_modify'] = '修改';
$txt['permissions_access'] = '允許 ';
$txt['permissions_allowed'] = '允許 ';
$txt['permissions_denied'] = '停用';

$txt['permissions_switch'] = '切換';
$txt['permissions_global'] = '全區性';
$txt['permissions_local'] = '區域性';

$txt['permissions_groups'] = '群組的權限';
$txt['permissions_all'] = '全部';
$txt['permissions_none'] = '無';
$txt['permissions_set_permissions'] = '設定權限';

$txt['permissions_with_selection'] = '選擇項目';
$txt['permissions_apply_pre_defined'] = '套用預先設定的權限資料';
$txt['permissions_select_pre_defined'] = '選擇一個預設的權限';
$txt['permissions_copy_from_board'] = '複製這個版面的權限';
$txt['permissions_select_board'] = '選擇看板';
$txt['permissions_like_group'] = '權限繼承自選擇的群組';
$txt['permissions_select_membergroup'] = '選擇群組';
$txt['permissions_add'] = '增加權限';
$txt['permissions_remove'] = '清除權限';
$txt['permissions_deny'] = '拒絕權限';
$txt['permissions_select_permission'] = '選擇權限';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = '您只能選擇一個方法來修改權限';
$txt['permissions_no_action'] = '沒有選擇任何動作';
$txt['permissions_deny_dangerous'] = '您正在停用一或多種權限。\\n若您不懂此功能的作用，請不要繼續。\\n\\n您是否確定要執行？';

$txt['permissions_boards'] = '版面的權限';

$txt['permissions_modify_group'] = '修改群組';
$txt['permissions_general'] = '一般權限';
$txt['permissions_board'] = '全區性的權限';
$txt['permissions_commit'] = '儲存更改';
$txt['permissions_modify_local'] = '修改區域性的權限';
$txt['permissions_on'] = '到版面';
$txt['permissions_local_for'] = '該群組的區域性權限';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = '在每一項權限中您都可以選擇: \'允許 \' (A), \'拒絕\' (X), 或是 <span style="color: red;">\'停用\' (D)</span>.<br /><br />請注意, 若您選擇的是停用, 那麼整個群組裡的成員, 就算是板主也將不能夠使用這些功能.<br />因此, 請您只有在 <b>必要</b> 的時候才使用停用功能. 換句話, 拒絕則是較適合使用的功能.';

$txt['permissiongroup_general'] = '一般設定';
$txt['permissionname_view_stats'] = '觀看討論區統計資料';
$txt['permissionhelp_view_stats'] = '討論區的統計資料可讓您瞭解會員總數, 每天的文章數及其他的統計資料. 允許這項功能會在論壇首頁下方加入 \'[統計資料]\'.';
$txt['permissionname_view_mlist'] = '觀看會員名單';
$txt['permissionhelp_view_mlist'] = '會員名單讓您知道討論區的總會員及會員帳號. 您可以類別也可以尋找會員.';
$txt['permissionname_who_view'] = '觀看線上名單';
$txt['permissionhelp_who_view'] = '線上名單可讓您看到目前在線的會員。使用這項權限您必須同時也允許了線上名單 (在功能及選項裡)。如果關閉這個功能，會員還是能看到誰在線，但是看不到他們的動作。';
$txt['permissionname_search_posts'] = '使用搜尋功能';
$txt['permissionhelp_search_posts'] = '搜尋權限允許會員使用搜尋功能. 如果允許此權限, 搜尋按鈕將會出現在論壇裡.';
$txt['permissionname_karma_edit'] = '更改其他人的評價值';
$txt['permissionhelp_karma_edit'] = '評價功能讓您瞭解會員的歡迎度. 使用這項權限您必須同時也允許了評價 (在功能及選項裡). 這項權限允許會員增加其他會員的評價值, 除了訪客以外..';

$txt['permissiongroup_pm'] = '私人訊息設定';
$txt['permissionname_pm_read'] = '閱讀私人訊息';
$txt['permissionhelp_pm_read'] = '這項權限允許會員使用私人訊息. 如果拒絕此權限會員將無法傳送私人訊息.';
$txt['permissionname_pm_send'] = '傳送私人訊息';
$txt['permissionhelp_pm_send'] = '傳送私人訊息給其他會員, 必須同時允許閱讀私人訊息.';

$txt['permissiongroup_calendar'] = '日曆設定';
$txt['permissionname_calendar_view'] = '觀看日曆';
$txt['permissionhelp_calendar_view'] = '日曆允許會員觀看事件及生日. 如果允許此權限, 日曆按鈕將會出現在論壇裡. 在論壇首頁最下方也可看到最新的事件及生日. 使用這項權限您必須同時也允許了日曆功能 (在功能及選項裡).';
$txt['permissionname_calendar_post'] = '發表事件';
$txt['permissionhelp_calendar_post'] = '事件是一篇有日期的主題. 您可以在日曆裡發表事件. 只有可發表文章的會員才可以發表事件.';
$txt['permissionname_calendar_edit'] = '編輯事件';
$txt['permissionhelp_calendar_edit'] = '事件旁的紅色 (*) 可以讓您編輯事件. 如果會員要編輯事件他必須是發表事件主題的人.';
$txt['permissionname_calendar_edit_own'] = '自己的事件';
$txt['permissionname_calendar_edit_any'] = '任何的事件';

$txt['permissiongroup_maintenance'] = '版面管理設定';
$txt['permissionname_admin_forum'] = '管理討論區及資料庫';
$txt['permissionhelp_admin_forum'] = '這項權限允許會員:<ul><li>改變討論區, 資料庫和佈景的設定</li><li>管理程式外掛</li><li>使用資料庫和論壇的維護工具</li><li>查看錯誤和外掛紀錄</li></ul>. 請注意此項權限非常重要.';
$txt['permissionname_manage_boards'] = '管理版面和類別';
$txt['permissionhelp_manage_boards'] = '這項權限允許新增, 修改和刪除版面及類別';
$txt['permissionname_manage_attachments'] = '管理附加檔案及頭像';
$txt['permissionhelp_manage_attachments'] = '這項權限允許會員進入檔案中心. 裡面有論壇所有的附加檔案及頭像.';
$txt['permissionname_manage_smileys'] = '管理表情圖案';
$txt['permissionhelp_manage_smileys'] = '這項權限允許會員進入表情圖案中心. 在裡面可以新增, 刪除, 及修改表情圖案和表情圖案集.';
$txt['permissionname_edit_news'] = '修改新聞';
$txt['permissionhelp_edit_news'] = '新聞功能會出現在論壇的首頁裡. 如果要使用此功能, 請在論壇設定裡開啟.';

$txt['permissiongroup_member_admin'] = '管理群';
$txt['permissionname_moderate_forum'] = '管理討論區的會員';
$txt['permissionhelp_moderate_forum'] = '這項權限包括全部重要的管理資格:<ul><li>修改同意條款</li><li>瀏覽/刪除會員</li><li>額外的個人資料, 包括追蹤IP和瀏覽隱形會員</li><li>啟用帳號</li><li>審核通知及審核帳號</li><li>傳送私人訊息</li><li>還有其他的功能</li></ul>';
$txt['permissionname_manage_membergroups'] = '管理和加入會員群組';
$txt['permissionhelp_manage_membergroups'] = '這項權限允許會員修改會員群組, 及加入其他會員到會員群組.';
$txt['permissionname_manage_permissions'] = '管理權限';
$txt['permissionhelp_manage_permissions'] = '這項權限允許會員修改會員群組的權限, 全區性或地區性修改版面';
$txt['permissionname_manage_bans'] = '管理阻擋列表';
$txt['permissionhelp_manage_bans'] = '這項權限允許會員新增或移除阻擋會員的帳號, IP位址, 主機名稱, 及電子郵件. 也可以瀏覽和刪除阻擋會員的登入訊息.';
$txt['permissionname_send_mail'] = '傳送電子郵件給會員';
$txt['permissionhelp_send_mail'] = '傳送電子郵件給全部會員或某個群組. 可使用電子郵件或私人訊息傳送 (私人信息需要 傳送私人訊息 權限).';

$txt['permissiongroup_profile'] = '個人資料';
$txt['permissionname_profile_view'] = '觀看個人資料的統計及簡介';
$txt['permissionhelp_profile_view'] = '這項權限允許會員觀看其他會員的統計資料, 發表的文章等等.';
$txt['permissionname_profile_view_own'] = '自己的';
$txt['permissionname_profile_view_any'] = '所有人的';
$txt['permissionname_profile_identity'] = '編輯帳號設定';
$txt['permissionhelp_profile_identity'] = '帳號設定包括密碼設定, 電子郵件設定, 群組及選擇的語系.';
$txt['permissionname_profile_identity_own'] = '自己的';
$txt['permissionname_profile_identity_any'] = '所有人的';
$txt['permissionname_profile_extra'] = '編輯附加的個人資料';
$txt['permissionhelp_profile_extra'] = '附加的個人資料包括頭項設定, 所選擇的佈景, 郵件通知及私人訊息.';
$txt['permissionname_profile_extra_own'] = '自己的';
$txt['permissionname_profile_extra_any'] = '所有人的';
$txt['permissionname_profile_title'] = '編輯自訂頭銜';
$txt['permissionhelp_profile_title'] = '自訂頭銜會出現在名稱的下方.';
$txt['permissionname_profile_title_own'] = '自己的';
$txt['permissionname_profile_title_any'] = '所有人的';
$txt['permissionname_profile_remove'] = '刪除帳號';
$txt['permissionhelp_profile_remove'] = '這項權限允許會員刪除帳號自己的帳號.';
$txt['permissionname_profile_remove_own'] = '自己的';
$txt['permissionname_profile_remove_any'] = '所有人的';
$txt['permissionname_profile_server_avatar'] = '選擇主機內的頭像';
$txt['permissionhelp_profile_server_avatar'] = '這項功能可以讓會員選擇主機內的頭像。';
$txt['permissionname_profile_upload_avatar'] = '上傳頭像到主機';
$txt['permissionhelp_profile_upload_avatar'] = '這項功能可以讓會員上傳自己的頭像到主機內。';
$txt['permissionname_profile_remote_avatar'] = '選擇遠方主機上的圖像';
$txt['permissionhelp_profile_remote_avatar'] = '您可以允許會員使用遠方主機裡的圖案，但是有可能會使您的論壇變慢。';

$txt['permissiongroup_general_board'] = '一般設定';
$txt['permissionname_moderate_board'] = '管理版面';
$txt['permissionhelp_moderate_board'] = '管理版面權限增加其他小的權限像回覆封鎖的主題, 改變投票過期時間等等.';

$txt['permissiongroup_topic'] = '主題設定';
$txt['permissionname_post_new'] = '發表新主題';
$txt['permissionhelp_post_new'] = '允許會員發表主題, 但是不允許會員回覆主題.';
$txt['permissionname_merge_any'] = '合併主題';
$txt['permissionhelp_merge_any'] = '合併兩個或以上的主題, 最早的主題為第一篇. 如要合併多個主題, 會員必須使用快速管理功能.';
$txt['permissionname_split_any'] = '分拆主題';
$txt['permissionhelp_split_any'] = '把一篇主題分拆為兩個主題.';
$txt['permissionname_send_topic'] = '傳送主題給朋友';
$txt['permissionhelp_send_topic'] = '這項權限允許會員使用電子郵件傳送主題給朋友.';
$txt['permissionname_make_sticky'] = '頂置主題';
$txt['permissionhelp_make_sticky'] = '頂置主題會永遠出現在版面的最上層.';
$txt['permissionname_move'] = '移動任何主題';
$txt['permissionhelp_move'] = '移動文章到別的版面. 會員只允許移動文章到可進入的版面裡.';
$txt['permissionname_move_own'] = '自己的';
$txt['permissionname_move_any'] = '任何人的';
$txt['permissionname_lock'] = '封鎖主題';
$txt['permissionhelp_lock'] = '這項權限允許會員封鎖主題。只有管理員和版主才可以回覆封鎖的主題。';
$txt['permissionname_lock_own'] = '自己的';
$txt['permissionname_lock_any'] = '任何人的';
$txt['permissionname_remove'] = '刪除主題';
$txt['permissionhelp_remove'] = '刪除主題但是不能刪除會員回覆的文章！';
$txt['permissionname_remove_own'] = '自己的';
$txt['permissionname_remove_any'] = '任何人的';
$txt['permissionname_post_reply'] = '回覆主題';
$txt['permissionhelp_post_reply'] = '允許會員回覆主題.';
$txt['permissionname_post_reply_own'] = '自己的';
$txt['permissionname_post_reply_any'] = '任何人的';
$txt['permissionname_modify_replies'] = '編輯自己主題裡的回覆文章';
$txt['permissionhelp_modify_replies'] = '這項權限允許會員在自己的主題裡編輯回覆的文章。';
$txt['permissionname_delete_replies'] = '刪除自己主題裡的回覆文章';
$txt['permissionhelp_delete_replies'] = '這項權限允許會員在自己的主題裡刪除回覆的文章。';
$txt['permissionname_announce_topic'] = '公告主題';
$txt['permissionhelp_announce_topic'] = '這項權限允許會員傳送公告郵件給全部會員或某個會員群組';

$txt['permissiongroup_post'] = '文章設定';
$txt['permissionname_delete'] = '刪除文章';
$txt['permissionhelp_delete'] = '刪除文章但是無法刪除第一篇的文章。';
$txt['permissionname_delete_own'] = '自己的';
$txt['permissionname_delete_any'] = '任何人的';
$txt['permissionname_modify'] = '編輯文章';
$txt['permissionhelp_modify'] = '修改文章.';
$txt['permissionname_modify_own'] = '自己的';
$txt['permissionname_modify_any'] = '任何人的';
$txt['permissionname_report_any'] = '向板主檢舉不當文章';
$txt['permissionhelp_report_any'] = '這項權限會在每一篇文章裡加入檢舉的連結。當會員檢舉文章時此版面的版主都會收到信件，裡面會有不當文章的連結及會員提供的訊息。';

$txt['permissiongroup_poll'] = '投票設定';
$txt['permissionname_poll_view'] = '觀看投票';
$txt['permissionhelp_poll_view'] = '這項權限允許會員觀看投票, 不然只能看到主題.';
$txt['permissionname_poll_vote'] = '參與投票';
$txt['permissionhelp_poll_vote'] = '這項權限允許註冊會員參與投票.';
$txt['permissionname_poll_post'] = '發表投票';
$txt['permissionhelp_poll_post'] = '這項權限允許會員發表投票。';
$txt['permissionname_poll_add'] = '將投票增加到主題中';
$txt['permissionhelp_poll_add'] = '允許會員將投票增加到已有主題中. 必須要有足夠的權限才可使用.';
$txt['permissionname_poll_add_own'] = '自己的';
$txt['permissionname_poll_add_any'] = '所有人的';
$txt['permissionname_poll_edit'] = '修改投票';
$txt['permissionhelp_poll_edit'] = '這項權限允許會員改變投票裡的選擇項目.';
$txt['permissionname_poll_edit_own'] = '自己的';
$txt['permissionname_poll_edit_any'] = '所有人的';
$txt['permissionname_poll_lock'] = '封鎖投票';
$txt['permissionhelp_poll_lock'] = '封鎖投票阻止會員參與投票.';
$txt['permissionname_poll_lock_own'] = '自己的';
$txt['permissionname_poll_lock_any'] = '所有人的';
$txt['permissionname_poll_remove'] = '刪除投票';
$txt['permissionhelp_poll_remove'] = '允許會員刪除投票.';
$txt['permissionname_poll_remove_own'] = '自己的';
$txt['permissionname_poll_remove_any'] = '所有人的';

$txt['permissiongroup_notification'] = '郵件通知設定';
$txt['permissionname_mark_any_notify'] = '主題回覆通知';
$txt['permissionhelp_mark_any_notify'] = '這項功能會通知會員新回覆的文章.';
$txt['permissionname_mark_notify'] = '新主題通知';
$txt['permissionhelp_mark_notify'] = '這項功能會通知會員新發佈的主題.';

$txt['permissiongroup_attachment'] = '附加檔案設定';
$txt['permissionname_view_attachments'] = '觀看附加檔案';
$txt['permissionhelp_view_attachments'] = '附加檔案是附加在文章裡的檔案. 這項功能可在 修改功能及選項 允許會員使用. 您也可以禁止無此權限的會員下載附加檔案.';
$txt['permissionname_post_attachment'] = '上傳附件檔案';
$txt['permissionhelp_post_attachment'] = '附加檔案是附加在文章裡的檔案. 一篇文章裡可有多個附件.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = '權限設定';
$txt['groups_manage_permissions'] = '可管理權限的群組';
$txt['permission_settings_submit'] = '儲存';
$txt['permission_settings_enable_deny'] = '允許停用的權限';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = '關閉這個選項會將 \\\'停用\\\' 權限改為 \\\'拒絕\\\'.';
$txt['permission_by_membergroup_desc'] = '這裡可以讓您改變群組的全區權限。這些權限只在非區域版面有效。您可以到 \'版面權限\' 頁面改變區域權限。';
$txt['permission_by_board_desc'] = '這裡可以讓您選擇版面是用全區還是區域權限。區域權限表示在那個版面，您可以改變每個群組該有的權限。';
$txt['permission_settings_desc'] = '這裡可以讓您選擇誰可以改變權限，還有其它權限的設定。';
$txt['permission_settings_enable_postgroups'] = '開啟文章群組的權限';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = '關閉這個設定會移除文章群組的全部權限。';
$txt['permission_settings_enable_by_board'] = '開起版面的區域權限';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = '關閉這個設定會移除版面層次的全部權限。';

?>