<?php
// Version: 1.1.2; Login

$txt[37] = '请填入你的帐号名称';
$txt[38] = '你没有输入密码';
$txt[39] = '密码错误或无法识别';
$txt[98] = '请选择帐号名称';
$txt[155] = '系统维护';
$txt[245] = '注册成功';
$txt[431] = '完成! 恭喜你成为本论坛会员';
// Use numeric entities in the below string.
$txt[492] = '你的密码是';
$txt[500] = '请你填入合法的EMAIL信箱地址, %s';
$txt[517] = '必须提供的项目';
$txt[520] = '这只是登录用的用户帐号。（你在登录论坛之后可到你的个人信息里更改你的昵称）';
$txt[585] = '我接受';
$txt[586] = '不接受';
$txt[633] = '警告!';
$txt[634] = '本区只供有权浏览的用户进入。';
$txt[635] = '请在下面登录或';
$txt[636] = '注册';
$txt[637] = '本论坛 ' . $context['forum_name'] . ' 的帐号';
// Use numeric entities in the below two strings.
$txt[701] = '你可以在进入论坛后, 在个人资料页更改, 或是通过下面的连接：';
$txt[719] = '你的帐号名称是: ';
$txt[730] = '你提供的EMAIL信箱地址: %s 已经有其它用户使用. 若你确认这是你的私人信箱, 请到登录页选择 忘记密码 将该帐号的密码发送到这个EMAIL信箱中';

$txt['login_hash_error'] = '密码安全策略已升级，请再次填写你的密码。';

$txt['register_age_confirmation'] = '我已经超过 %d 岁了。';

// Use numeric entities in the below six strings.
$txt['register_subject'] = '欢迎光临 ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = '你已成功地注册于网站' . $context['forum_name'] . ', %1$s!' . "\n\n" . '你帐号的用户名是 %2$s ，密码是 %3$s。' . "\n\n" . '如想更改你的密码，你登录后可在“个人资料”栏目修改，也可在登录后进入该页面修改：' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = '你已成功地注册于网站 ' . $context['forum_name'] . ', %1$s!' . "\n\n" . '你帐号的用户名是 %2$s ，密码是 %3$s (以后还可以修改)。' . "\n\n" . '在你登录网站之前，你还需激活你的帐号。请点击这个链接：' . "\n\n" . '%5$s' . "\n\n" . '如果你不知道如何激活，或激活不成功，请使用这个代码："%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = '你的注册请求已发送给 ' . $context['forum_name'] . ' 的管理员， %1$s.' . "\n\n" . '你注册的用户名是 %2$s，密码是 %3$s.' . "\n\n" . '请等候网站管理员Email通知你审核的结果。只有审核通过你才能登录本站。' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = '你已成功地注册于网站 ' . $context['forum_name'] . ', %1$s!' . "\n\n" . '你的用户名是 "%2$s".' . "\n\n" . '在你登录网站之前，你还需激活你的帐号。请点击这个链接：' . "\n\n" . '%4$s' . "\n\n" . '如果你无法使用上面地址激活，请使用激活码 "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = '你的注册请求已发送给 ' . $context['forum_name'] . ' 的管理员，%1$s.' . "\n\n" . '你注册的用户名是 %2$s.' . "\n\n" . '请等候网站管理员Email通知你审核的结果。只有审核通过你才能登录本站。' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = '很抱歉, 论坛不允许你注册';
$txt['under_age_registration_prohibited'] = '对不起，年龄小于%d岁者暂未允许注册于本站。';

$txt['activate_account'] = '帐号激活';
$txt['activate_success'] = '你的帐号已经激活, 现在你可以登录论坛';
$txt['activate_not_completed1'] = '你的帐号尚未通过认证成功, 所以不能登录论坛';
$txt['activate_not_completed2'] = '重新发送激活信?';
$txt['activate_after_registration'] = '感谢你的注册. 你将会收到一封激活Email, 内含有帐号激活的链接。如果迟迟收不到激活Email，请检查你邮箱的“垃圾邮件”目录（可能会被误认为是由表及里邮件）。';
$txt['invalid_userid'] = '无此会员';
$txt['invalid_activation_code'] = '激活码错误';
$txt['invalid_activation_username'] = '帐号或EMAIL';
$txt['invalid_activation_new'] = '若你注册时填错了EMAIL信箱地址, 请在此填入一个新的信箱地址, 并输入你的密码以做更改';
$txt['invalid_activation_new_email'] = '新的信箱地址';
$txt['invalid_activation_password'] = '旧的密码';
$txt['invalid_activation_resend'] = '重新发送激活信';
$txt['invalid_activation_known'] = '如果你已经知道你的激活码, 请在此输入';
$txt['invalid_activation_retry'] = '激活码';
$txt['invalid_activation_submit'] = '激活';

$txt['coppa_not_completed1'] = '网站管理员仍未收到你父母或监护人的同意书。';
$txt['coppa_not_completed2'] = '想知道得更详细吗？';

$txt['awaiting_delete_account'] = '你的帐号已被封存！<br />如果你想恢复你的帐号，请勾选&quot;恢复我的帐号&quot; ，并重新登录。';
$txt['undelete_account'] = '恢复我的帐号';

$txt['change_email_success'] = '你的电子邮件已被更改, 新的激活信函已发送到你的信箱';
$txt['resend_email_success'] = '新的激活信已成功发出';
// Use numeric entities in the below three strings.
$txt['change_password'] = '新密码数据';
$txt['change_password_1'] = '登录资料';
$txt['change_password_2'] = '已被更改. 下面是你新的登录资料';

$txt['maintenance3'] = '本论坛目前正在维护中';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = '注册前请阅读并接受本论坛的使用规则';
$txt['register_passwords_differ_js'] = '你两次填写的密码不一致！';

$txt['approval_after_registration'] = '感谢你的注册, 本论坛所有用户注册皆须通过站长的审核, 审核结果将会以EMAIL通知你, 谢谢';

$txt['admin_settings_desc'] = '在此你可更改与新用户注册相关的设置';

$txt['admin_setting_registration_method'] = '新用户注册的方式';
$txt['admin_setting_registration_disabled'] = '禁止用户自行注册';
$txt['admin_setting_registration_standard'] = '用户注册后帐号马上生效';
$txt['admin_setting_registration_activate'] = '用员注册后需激活帐号';
$txt['admin_setting_registration_approval'] = '会员注册后需等待管理员审核';
$txt['admin_setting_notify_new_registration'] = '当有用户注册时马上通知管理员';
$txt['admin_setting_send_welcomeEmail'] = '给新用户发送欢迎函';

$txt['admin_setting_password_strength'] = '密码长度限制';
$txt['admin_setting_password_strength_low'] = '低安全性 - 4个字符以上';
$txt['admin_setting_password_strength_medium'] = '中等安全性 - 密码中不包含用户名';
$txt['admin_setting_password_strength_high'] = '高安全性 - 各种字符混杂';

$txt['admin_setting_image_verification_type'] = '验证码复杂度';
$txt['admin_setting_image_verification_type_desc'] = '图片越复杂机器人越难饶过';
$txt['admin_setting_image_verification_off'] = '不使用';
$txt['admin_setting_image_verification_vsimple'] = '非常简单 - 纯文本图片';
$txt['admin_setting_image_verification_simple'] = '简单 - 重叠的彩色文字，无杂点';
$txt['admin_setting_image_verification_medium'] = '中等 - 重叠的彩色文字，有杂点';
$txt['admin_setting_image_verification_high'] = '高 - 变形文字，大量杂点';
$txt['admin_setting_image_verification_sample'] = '范例';
$txt['admin_setting_image_verification_nogd'] = '<b>注意：</b>如果服务器没有安装GD库，不同复杂度的图片将无效。';

$txt['admin_setting_coppaAge'] = '注册最低年龄限制';
$txt['admin_setting_coppaAge_desc'] = '（设为0则表示没有限制）';
$txt['admin_setting_coppaType'] = '年龄不够的用户注册时采取的行动';
$txt['admin_setting_coppaType_reject'] = '拒绝注册';
$txt['admin_setting_coppaType_approval'] = '要求得到父母或监护人的批准';
$txt['admin_setting_coppaPost'] = '要求提供其父母或监护人的通信地址';
$txt['admin_setting_coppaPost_desc'] = '年龄一定要合格才能申请';
$txt['admin_setting_coppaFax'] = '要求提供其父母或监护人的传真号码';
$txt['admin_setting_coppaPhone'] = '要求提供其父母或监护人的联系电话';
$txt['admin_setting_coppa_require_contact'] = '请提供你父母或监护人的通信地址或传真号码';

$txt['admin_register'] = '新会员注册';
$txt['admin_register_desc'] = '通过此处你可以为论坛加入新会员. 你可以为他们输入一些数据, 如果你愿意的话也可以发送电子邮件给这些新会员';
$txt['admin_register_username'] = '新会员帐号';
$txt['admin_register_email'] = '电子邮件';
$txt['admin_register_password'] = '密码';
$txt['admin_register_username_desc'] = '新会员的帐号';
$txt['admin_register_email_desc'] = '新会员的电子邮件 (如果需要发送数据的话请填写)';
$txt['admin_register_password_desc'] = '新会员的密码';
$txt['admin_register_email_detail'] = '通过电子邮件发送会员的新密码';
$txt['admin_register_email_detail_desc'] = '有无勾选都必须要电子邮件';
$txt['admin_register_email_activate'] = '会员必须激活帐号';
$txt['admin_register_group'] = '隶属于特殊的会员组';
$txt['admin_register_group_desc'] = '这个会员将会隶属于的群组';
$txt['admin_register_group_none'] = '(不加入特殊群组)';
$txt['admin_register_done'] = '会员 %s 已注册成功！';

$txt['admin_browse_register_new'] = '注册新会员';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = '有新会员加入';
$txt['admin_notify_profile'] = '%s 已经加入你的论坛. 请按下面链接观看他的个人资料';
$txt['admin_notify_approval'] = '新会员必须先激活帐号才能发帖. 请按下面链接到帐号激活区';

$txt['coppa_title'] = '年龄受限论坛';
$txt['coppa_after_registration'] = '感谢你注册于 ' . $context['forum_name'] . '.<br /><br />因你的年龄小于{MINIMUM_AGE}，我们需要得到你的父母或监护人的同意后才能让你成为正式会员。请打印以下确认表：';
$txt['coppa_form_link_popup'] = '在新窗口打开确认表';
$txt['coppa_form_link_download'] = '下载确认表';
$txt['coppa_send_to_one_option'] = '并请你的父母或监护人的填写好确认表之后通过以下方式发送给我们：';
$txt['coppa_send_to_two_options'] = '并请你的父母或监护人的填写好确认表之后通过以下方式发送给我们：';
$txt['coppa_send_by_post'] = '邮寄到该地址：';
$txt['coppa_send_by_fax'] = '传真到：';
$txt['coppa_send_by_phone'] = '请你的父母或监护人拔打这个电话与网站管理员联系：{PHONE_NUMBER}.';

$txt['coppa_form_title'] = '父母或监护人确认表（用于注册于 ' . $context['forum_name'].'）';
$txt['coppa_form_address'] = '地址';
$txt['coppa_form_date'] = '日期';
$txt['coppa_form_body'] = '我同意让{CHILD_NAME} （子女姓名）成为网站（或论坛）：' . $context['forum_name'] . '的注册会户，他/她的用户名为：{USER_NAME}。<br /><br />我知道并且允许其他人看到他/她公开于该网站（或论坛）的某些个人信息。<br /><br />签名：<br />{PARENT_NAME} （父母或监护人）。';

$txt['visual_verification_label'] = '图片验证码';
$txt['visual_verification_description'] = '请输入图上的字母';
$txt['visual_verification_sound'] = '收听图片上的字母';
$txt['visual_verification_sound_again'] = '重放一次';
$txt['visual_verification_sound_close'] = '关闭窗口';
$txt['visual_verification_request_new'] = '换一个验证码';
$txt['visual_verification_sound_direct'] = '如无法听见图上的文字，请尝试直接播放';

?>