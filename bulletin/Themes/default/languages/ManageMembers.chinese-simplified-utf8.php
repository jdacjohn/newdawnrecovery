<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = '管理会员组';
$txt['membergroups_description'] = '您可以到会员的个人资料里将会员分为数个群组, 可以是根据相关的权限设定为同一群组, 也可以按照发表的帖子数来归类群组.';
$txt['membergroups_modify'] = '修改';

$txt['membergroups_add_group'] = '增加群组';
$txt['membergroups_regular'] = '特殊群组';
$txt['membergroups_post'] = '根据帖子数的群组';

$txt['membergroups_new_group'] = '新增群组';
$txt['membergroups_group_name'] = '群组名称';
$txt['membergroups_new_board'] = '可以看到的版块';
$txt['membergroups_new_board_desc'] = '这个群组的成员可以进入的版块.';
$txt['membergroups_new_board_post_groups'] = '<em>注意：一般情况下，不需要为群组设置权限，因为他们已得到相关权限。</em>';
$txt['membergroups_new_as_type'] = '根据类型';
$txt['membergroups_new_as_copy'] = '按照';
$txt['membergroups_new_copy_none'] = '(没有)';
$txt['membergroups_can_edit_later'] = '您之后还能够修改这些设定';

$txt['membergroups_edit_group'] = '编辑群组';
$txt['membergroups_edit_name'] = '群组名称';
$txt['membergroups_edit_post_group'] = '这个群组是根据帖子数来做分类的.';
$txt['membergroups_min_posts'] = '最低帖子数';
$txt['membergroups_online_color'] = '在在线名单里采用的色彩';
$txt['membergroups_star_count'] = '星状图案数量';
$txt['membergroups_star_image'] = '星状图案文件名';
$txt['membergroups_star_image_note'] = '您可以根据会员的语言来使用$language';
$txt['membergroups_max_messages'] = '短信息数量上限';
$txt['membergroups_max_messages_note'] = '0 = 无限制';
$txt['membergroups_edit_save'] = '保存';
$txt['membergroups_delete'] = '删除';
$txt['membergroups_confirm_delete'] = '您确定要删除这个会员组?!';

$txt['membergroups_members_title'] = '浏览这个群组的成员';
$txt['membergroups_members_no_members'] = '此群组无任何成员';
$txt['membergroups_members_add_title'] = '加入新的会员到这个群组';
$txt['membergroups_members_add_desc'] = '要加入的会员名称';
$txt['membergroups_members_add'] = '加入会员';
$txt['membergroups_members_remove'] = '删除会员';

$txt['membergroups_postgroups'] = '帖子数的群组';

$txt['membergroups_edit_groups'] = '编辑会员组';
$txt['membergroups_settings'] = '会员组配置';
$txt['groups_manage_membergroups'] = '可更改会员组的群组';
$txt['membergroups_settings_submit'] = '保存';
$txt['membergroups_select_permission_type'] = '选择权限资料';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = '显示版块';

$txt['admin_browse_approve'] = '帐号等待审核者';
$txt['admin_browse_approve_desc'] = '在此你可以管理所有帐号等待审核的注册者';
$txt['admin_browse_activate'] = '帐号等待激活者';
$txt['admin_browse_activate_desc'] = '此处列出了帐号等待激活者的本站论坛注册者';
$txt['admin_browse_awaiting_approval'] = '等待审核<span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = '等待激活<span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = '用户名';
$txt['admin_browse_email'] = 'Email地址';
$txt['admin_browse_ip'] = 'IP地址';
$txt['admin_browse_registered'] = '已注册';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = '已选择';
$txt['admin_browse_no_members_approval'] = '没有帐号等待审核者';
$txt['admin_browse_no_members_activate'] = '没有帐号等待激活者';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = '所有选中的注册者？';
$txt['admin_browse_outstanding_warn'] = '所有相关的会员？';
$txt['admin_browse_w_approve'] = '批准';
$txt['admin_browse_w_activate'] = '激活';
$txt['admin_browse_w_delete'] = '删除';
$txt['admin_browse_w_reject'] = '拒绝';
$txt['admin_browse_w_remind'] = '提醒';
$txt['admin_browse_w_approve_deletion'] = '批准 (删除帐号)';
$txt['admin_browse_w_email'] = '并发送邮件';
$txt['admin_browse_w_approve_require_activate'] = '批准且还要激活';

$txt['admin_browse_filter_by'] = '筛选原则';
$txt['admin_browse_filter_show'] = '显示';
$txt['admin_browse_filter_type_0'] = '未激活的新帐号';
$txt['admin_browse_filter_type_2'] = 'Unactivated Email Changes';
$txt['admin_browse_filter_type_3'] = '未批准的新帐号';
$txt['admin_browse_filter_type_4'] = '未批准并已删除的帐号';
$txt['admin_browse_filter_type_5'] = '未批准的年龄不够的帐号';

$txt['admin_browse_outstanding'] = '资深会员';
$txt['admin_browse_outstanding_days_1'] = '是指注册时间超过：';
$txt['admin_browse_outstanding_days_2'] = '天';
$txt['admin_browse_outstanding_perform'] = '执行以下行动';
$txt['admin_browse_outstanding_go'] = '执行行动';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = '您的注册请求已被拒绝';
$txt['admin_approve_reject_desc'] = '很遗憾地通知阁下，您想加入' . $context['forum_name'] . '的申请已被拒绝。';
$txt['admin_approve_delete'] = '您的帐号已被删除';
$txt['admin_approve_delete_desc'] = '您在网站' . $context['forum_name'] . '的帐号已被删除。这可能是因为您从未激活您的帐号——如果是这样您还可以重新注册。';
$txt['admin_approve_remind'] = '注册提醒';
$txt['admin_approve_remind_desc'] = '您还没有激活您在该网站的帐号';
$txt['admin_approve_remind_desc2'] = '请点击以下链接激活您的帐号：';
$txt['admin_approve_accept_desc'] = '网站管理员亲自激活了您的帐号，现在您可以登录和发帖了。';
$txt['admin_approve_require_activation'] = '您在网站' . $context['forum_name'] . '的帐号已通过网站管理员的批准，您激活后即可使用这一帐号。';

?>