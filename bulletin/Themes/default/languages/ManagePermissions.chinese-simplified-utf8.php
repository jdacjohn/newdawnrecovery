<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = '管理权限';
$txt['permissions_modify'] = '修改';
$txt['permissions_access'] = '允许';
$txt['permissions_allowed'] = '允许';
$txt['permissions_denied'] = '拒绝';

$txt['permissions_switch'] = '切换';
$txt['permissions_global'] = '全区性';
$txt['permissions_local'] = '区域性';

$txt['permissions_groups'] = '组群的权限';
$txt['permissions_all'] = '全部';
$txt['permissions_none'] = '无';
$txt['permissions_set_permissions'] = '设定权限';

$txt['permissions_with_selection'] = '选择项目';
$txt['permissions_apply_pre_defined'] = '套用预先设定的权限数据';
$txt['permissions_select_pre_defined'] = '选择一个预设的权限';
$txt['permissions_copy_from_board'] = '复制这个版块的权限';
$txt['permissions_select_board'] = '选择版块';
$txt['permissions_like_group'] = '权限继承自选择的组群';
$txt['permissions_select_membergroup'] = '选择组群';
$txt['permissions_add'] = '增加权限';
$txt['permissions_remove'] = '清除权限';
$txt['permissions_deny'] = '拒绝权限';
$txt['permissions_select_permission'] = '选择权限';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = '您只能选择一个方法来修改权限';
$txt['permissions_no_action'] = '没有选择任何动作';
$txt['permissions_deny_dangerous'] = '您正在拒绝一或多种权限.\\n若您不知道再做什么的话, 请不要继续.\\n\\n您是否确定要执行?';

$txt['permissions_boards'] = '版块的权限';

$txt['permissions_modify_group'] = '修改组群';
$txt['permissions_general'] = '一般权限';
$txt['permissions_board'] = '全区性的权限';
$txt['permissions_commit'] = '保存更改';
$txt['permissions_modify_local'] = '修改区域性的权限';
$txt['permissions_on'] = '到版块';
$txt['permissions_local_for'] = '该组群的区域性权限';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = '在每一项权限中您都可以选择:  \'允许\' (A), \'拒绝\' (X), 或是 <span style="color: red;">\'停用\' (D)</span>.<br /><br />请注意, 若您选择的是拒绝, 那么整个组群里的成员, 就算是版主也将不能够使用这些功能.<br />因此, 请您只有在 <b>必要</b>的时候才使用停用功能. 换句话, 拒绝则是较适合使用的功能.';

$txt['permissiongroup_general'] = '一般设定';
$txt['permissionname_view_stats'] = '观看论坛统计资料';
$txt['permissionhelp_view_stats'] = '论坛的统计资料可让您了解会员总数, 每天的帖子数及其它的统计资料. 允许这项功能会在论坛首页下面加入 \'[统计资料]\'.';
$txt['permissionname_view_mlist'] = '观看会员名单';
$txt['permissionhelp_view_mlist'] = '会员名单让您知道论坛的总会员及会员帐号. 您可以分类也可以寻找会员.';
$txt['permissionname_who_view'] = '观看在线名单';
$txt['permissionhelp_who_view'] = '在线名单可让您看到目前在线的会员. 使用这项权限您必须已允许在线名单 (在功能及选项里)。即使关闭了这一功能，会员还是可以看到谁在线，但查询不到他们在哪。';
$txt['permissionname_search_posts'] = '使用搜索功能';
$txt['permissionhelp_search_posts'] = '搜索权限允许会员使用搜索功能. 如果允许此权限, 搜索按钮将会出现在论坛里.';
$txt['permissionname_karma_edit'] = '更改其它人的评价值';
$txt['permissionhelp_karma_edit'] = '评价功能让您了解会员的欢迎度. 使用这项权限您必须同时也允许了评价 (在功能及选项里). 这项权限允许会员增加其它会员的评价值, 除了访客以外..';

$txt['permissiongroup_pm'] = '短信息设定';
$txt['permissionname_pm_read'] = '阅读短信息';
$txt['permissionhelp_pm_read'] = '这项权限允许会员使用短信息. 如果拒绝此权限会员将无法发送短信息.';
$txt['permissionname_pm_send'] = '发送短信息';
$txt['permissionhelp_pm_send'] = '发送短信息给其它会员, 必须同时允许阅读短信息.';

$txt['permissiongroup_calendar'] = '日历设定';
$txt['permissionname_calendar_view'] = '观看日历';
$txt['permissionhelp_calendar_view'] = '日历允许会员观看事件及生日. 如果允许此权限, 日历按钮将会出现在论坛里. 在论坛首页最下面也可看到最新的事件及生日. 使用这项权限您必须同时也允许了日历功能 (在功能及选项里).';
$txt['permissionname_calendar_post'] = '发表事件';
$txt['permissionhelp_calendar_post'] = '事件是一篇有日期的主题. 您可以在日历里发表事件. 只有可发帖的会员才可以发表事件.';
$txt['permissionname_calendar_edit'] = '编辑事件';
$txt['permissionhelp_calendar_edit'] = '事件旁的红色 (*) 可以让您编辑事件. 如果会员要编辑事件他必须是发表事件主题的人.';
$txt['permissionname_calendar_edit_own'] = '自己的事件';
$txt['permissionname_calendar_edit_any'] = '任何的事件';

$txt['permissiongroup_maintenance'] = '版块管理设定';
$txt['permissionname_admin_forum'] = '管理论坛及数据库';
$txt['permissionhelp_admin_forum'] = '这项权限允许会员:<ul><li>更改论坛, 数据库和风格的设定</li><li>管理程序插件</li><li>使用数据库和论坛的维护工具</li><li>查看错误和插件纪录</li></ul>. 请注意此项权限非常重要.';
$txt['permissionname_manage_boards'] = '管理版块和分类';
$txt['permissionhelp_manage_boards'] = '这项权限允许新增, 修改和删除版块及分类';
$txt['permissionname_manage_attachments'] = '管理附件及头像';
$txt['permissionhelp_manage_attachments'] = '这项权限允许会员进入文件中心. 里面有论坛所有的附件及头像.';
$txt['permissionname_manage_smileys'] = '管理表情图案';
$txt['permissionhelp_manage_smileys'] = '这项权限允许会员进入表情图案中心. 在里面可以新增, 删除, 及修改表情图案和表情图案集.';
$txt['permissionname_edit_news'] = '修改新闻';
$txt['permissionhelp_edit_news'] = '本新闻功能将使新闻随机出现在每个屏幕里，如需使用本功能请在论坛设置里开启。';

$txt['permissiongroup_member_admin'] = '管理团队';
$txt['permissionname_moderate_forum'] = '管理论坛的会员';
$txt['permissionhelp_moderate_forum'] = '这项权限包括全部重要的管理资格:<ul><li>修改同意条款</li><li>浏览/删除会员</li><li>其他的个人资料, 包括跟踪IP和浏览隐形会员</li><li>启用帐号</li><li>审核通知及审核帐号</li><li>发送短信息</li><li>还有其它的功能</li></ul>';
$txt['permissionname_manage_membergroups'] = '管理和加入会员组群';
$txt['permissionhelp_manage_membergroups'] = '这项权限允许会员修改会员组群, 及加入其它会员到会员组群.';
$txt['permissionname_manage_permissions'] = '管理权限';
$txt['permissionhelp_manage_permissions'] = '这项权限允许会员修改会员组群的权限, 全区性或地区性修改版块';
$txt['permissionname_manage_bans'] = '管理限制列表';
$txt['permissionhelp_manage_bans'] = '这项权限允许会员新增或删除限制会员的帐号, IP地址, 主机名称, 及电子邮件. 也可以浏览和删除限制会员的登录信息.';
$txt['permissionname_send_mail'] = '发送电子邮件给会员';
$txt['permissionhelp_send_mail'] = '发送电子邮件给全部会员或某个组群. 可使用电子邮件或短信息发送 (私人信息需要 发送短信息 权限).';

$txt['permissiongroup_profile'] = '个人资料设定';
$txt['permissionname_profile_view'] = '观看个人资料的统计及简介';
$txt['permissionhelp_profile_view'] = '这项权限允许会员观看其它会员的统计资料, 发表的帖子等等.';
$txt['permissionname_profile_view_own'] = '自己的';
$txt['permissionname_profile_view_any'] = '所有人的';
$txt['permissionname_profile_identity'] = '编辑帐号设定';
$txt['permissionhelp_profile_identity'] = '帐号设定包括密码设定, 电子邮件设定, 组群及选择的语言.';
$txt['permissionname_profile_identity_own'] = '自己的';
$txt['permissionname_profile_identity_any'] = '所有人的';
$txt['permissionname_profile_extra'] = '编辑附加的个人资料';
$txt['permissionhelp_profile_extra'] = '附加的个人资料包括头项设定, 所选择的风格, 邮件通知及短信息.';
$txt['permissionname_profile_extra_own'] = '自己的';
$txt['permissionname_profile_extra_any'] = '所有人的';
$txt['permissionname_profile_title'] = '编辑自订头衔';
$txt['permissionhelp_profile_title'] = '自订头衔会出现在名称的下面.';
$txt['permissionname_profile_title_own'] = '自己的';
$txt['permissionname_profile_title_any'] = '所有人的';
$txt['permissionname_profile_remove'] = '删除帐号';
$txt['permissionhelp_profile_remove'] = '这项权限允许会员删除帐号自己的帐号.';
$txt['permissionname_profile_remove_own'] = '自己的';
$txt['permissionname_profile_remove_any'] = '所有人的';
$txt['permissionname_profile_server_avatar'] = '选择主机内的头像';
$txt['permissionhelp_profile_server_avatar'] = '这项功能可以让会员选择主机内的头像。';
$txt['permissionname_profile_upload_avatar'] = '上传头像到主机';
$txt['permissionhelp_profile_upload_avatar'] = '这项功能可以让会员上传自己的头像到主机内。';
$txt['permissionname_profile_remote_avatar'] = '选择远方主机上的图像';
$txt['permissionhelp_profile_remote_avatar'] = '您可以允许会员使用远方主机里的图案，但是有可能会使您的论坛变慢。';

$txt['permissiongroup_general_board'] = '一般设定';
$txt['permissionname_moderate_board'] = '管理版块';
$txt['permissionhelp_moderate_board'] = '管理版块权限增加其它小的权限像回复封锁的主题, 更改投票过期时间等等.';

$txt['permissiongroup_topic'] = '主题设定';
$txt['permissionname_post_new'] = '发表新主题';
$txt['permissionhelp_post_new'] = '允许会员发表主题, 但是不允许会员回复主题.';
$txt['permissionname_merge_any'] = '合并主题';
$txt['permissionhelp_merge_any'] = '合并两个或以上的主题, 最早的主题为第一篇. 如要合并多个主题, 会员必须使用快速管理功能.';
$txt['permissionname_split_any'] = '分拆主题';
$txt['permissionhelp_split_any'] = '把一篇主题分拆为两个主题.';
$txt['permissionname_send_topic'] = '发送主题给朋友';
$txt['permissionhelp_send_topic'] = '这项权限允许会员使用电子邮件发送主题给朋友.';
$txt['permissionname_make_sticky'] = '置顶主题';
$txt['permissionhelp_make_sticky'] = '置顶主题会永远出现在版块的最上层.';
$txt['permissionname_move'] = '移动任何主题';
$txt['permissionhelp_move'] = '移动帖子到别的版块. 会员只允许移动帖子到可进入的版块里.';
$txt['permissionname_move_own'] = '自己的';
$txt['permissionname_move_any'] = '任何人的';
$txt['permissionname_lock'] = '封锁主题';
$txt['permissionhelp_lock'] = '这项权限允许会员封锁主题. 只有管理员和版主才可以回复封锁的主题.';
$txt['permissionname_lock_own'] = '自己的';
$txt['permissionname_lock_any'] = '任何人的';
$txt['permissionname_remove'] = '删除主题';
$txt['permissionhelp_remove'] = '删除主题但是不能删除会员回复的帖子!';
$txt['permissionname_remove_own'] = '自己的';
$txt['permissionname_remove_any'] = '任何人的';
$txt['permissionname_post_reply'] = '回复主题';
$txt['permissionhelp_post_reply'] = '允许会员回复主题.';
$txt['permissionname_post_reply_own'] = '自己的';
$txt['permissionname_post_reply_any'] = '任何人的';
$txt['permissionname_modify_replies'] = '编辑自己主题里的回复内容';
$txt['permissionhelp_modify_replies'] = '这项权限允许会员在自己的主题里编辑回复的帖子.';
$txt['permissionname_delete_replies'] = '删除自己主题里的回复内容';
$txt['permissionhelp_delete_replies'] = '这项权限允许会员在自己的主题里删除回复的帖子.';
$txt['permissionname_announce_topic'] = '公告主题';
$txt['permissionhelp_announce_topic'] = '这项权限允许会员发送公告邮件给全部会员或某个会员组群';

$txt['permissiongroup_post'] = '帖子设定';
$txt['permissionname_delete'] = '删帖';
$txt['permissionhelp_delete'] = '删帖但是无法删除第一篇的文章.';
$txt['permissionname_delete_own'] = '自己的';
$txt['permissionname_delete_any'] = '任何人的';
$txt['permissionname_modify'] = '编辑帖子';
$txt['permissionhelp_modify'] = '修改帖子.';
$txt['permissionname_modify_own'] = '自己的';
$txt['permissionname_modify_any'] = '任何人的';
$txt['permissionname_report_any'] = '向版主举报不当帖子';
$txt['permissionhelp_report_any'] = '这项权限会在每一篇帖子里加入举报的链接. 当会员举报帖子时此版块的版主都会收到信件, 里面会有不当帖子的链接及会员提供的信息.';

$txt['permissiongroup_poll'] = '投票设定';
$txt['permissionname_poll_view'] = '观看投票';
$txt['permissionhelp_poll_view'] = '这项权限允许会员观看投票, 不然只能看到主题.';
$txt['permissionname_poll_vote'] = '参与投票';
$txt['permissionhelp_poll_vote'] = '这项权限允许注册会员参与投票.';
$txt['permissionname_poll_post'] = '发表投票';
$txt['permissionhelp_poll_post'] = '这项权限允许会员发表投票。';
$txt['permissionname_poll_add'] = '将投票增加到主题中';
$txt['permissionhelp_poll_add'] = '允许会员将投票增加到已有主题中. 必须要有足够的权限才可使用.';
$txt['permissionname_poll_add_own'] = '自己的';
$txt['permissionname_poll_add_any'] = '所有人的';
$txt['permissionname_poll_edit'] = '修改投票';
$txt['permissionhelp_poll_edit'] = '这项权限允许会员更改投票里的选择项目。如果需要修改最大投票数，会员需要有管理板块的权限。';
$txt['permissionname_poll_edit_own'] = '自己的';
$txt['permissionname_poll_edit_any'] = '所有人的';
$txt['permissionname_poll_lock'] = '封锁投票';
$txt['permissionhelp_poll_lock'] = '封锁投票阻止会员参与投票.';
$txt['permissionname_poll_lock_own'] = '自己的';
$txt['permissionname_poll_lock_any'] = '所有人的';
$txt['permissionname_poll_remove'] = '删除投票';
$txt['permissionhelp_poll_remove'] = '允许会员删除投票.';
$txt['permissionname_poll_remove_own'] = '自己的';
$txt['permissionname_poll_remove_any'] = '所有人的';

$txt['permissiongroup_notification'] = '邮件通知设定';
$txt['permissionname_mark_any_notify'] = '主题订阅';
$txt['permissionhelp_mark_any_notify'] = '这项功能会通知会员新回复的文章.';
$txt['permissionname_mark_notify'] = '新主题通知';
$txt['permissionhelp_mark_notify'] = '这项功能会通知会员新发布的主题.';

$txt['permissiongroup_attachment'] = '附件设定';
$txt['permissionname_view_attachments'] = '观看附件';
$txt['permissionhelp_view_attachments'] = '附件是附加在帖子里的文件. 这项功能可在 修改功能及选项 允许会员使用. 您也可以禁止无此权限的会员下载附件.';
$txt['permissionname_post_attachment'] = '上传附件文件';
$txt['permissionhelp_post_attachment'] = '附件是附加在帖子帖子里的文件. 一篇帖子里可有多个附件.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = '权限Settings';
$txt['groups_manage_permissions'] = '可管理权限的会员组';
$txt['permission_settings_submit'] = '保存';
$txt['permission_settings_enable_deny'] = '允许拒绝权限';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = '关闭这一可选项将把\\\'不接受\\\'更新为 \\\'“拒绝”\\\'-这一权限等级。';
$txt['permission_by_membergroup_desc'] = '在此你可为每一个会员组设置所有总体权限。这些权限对于任何未被“局部权限”的\'版块权限\'设置控制着的版块都有效.';
$txt['permission_by_board_desc'] = '在此你可设置是否让某个版块使用总体权限或一个特殊的权限方案（意味着对于这个版块，你可以为每一个会员设置一种权限';
$txt['permission_settings_desc'] = '在此你可设置谁有权限更改权限，决定权限系统的复杂程度';
$txt['permission_settings_enable_postgroups'] = '为帖子数相关的群组开放的权限';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = '关闭这一设置将清除为帖子数相关的群组开放的权限';
$txt['permission_settings_enable_by_board'] = '开放高级的版块权限';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = '关闭这一设置将清除所有版块的权限设置';

?>