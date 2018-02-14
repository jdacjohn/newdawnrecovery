<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'zh_CN.utf8';
$txt['lang_dictionary'] = 'en';
$txt['lang_spelling'] = 'american';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$txt['days_short'] = array('周日', '周一', '周二', '周三', '周四', '周五', '周六');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
$txt['months_titles'] = array(1 => '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
$txt['months_short'] = array(1 => '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

$txt['newmessages0'] = '条新短信';
$txt['newmessages1'] = '条新短信';
$txt['newmessages3'] = '新短信';
$txt['newmessages4'] = ',';

$txt[2] = '管理';

$txt[10] = '保存';

$txt[17] = '修改';
$txt[18] = $context['forum_name'] . ' - 首页';
$txt[19] = '会员';
$txt[20] = '版块名称';
$txt[21] = '帖子';
$txt[22] = '最后发表';

$txt[24] = '(无标题)';
$txt[26] = '帖子';
$txt[27] = '查看个人资料';
$txt[28] = '访客';
$txt[29] = '作者';
$txt[30] = '于';
$txt[31] = '删除';
$txt[33] = '发表新主题';

$txt[34] = '登录';
// Use numeric entities in the below string.
$txt[35] = '会员帐号';
$txt[36] = '密码';

$txt[40] = '请输入正确的帐号。';

$txt[62] = '版主';
$txt[63] = '删除主题';
$txt[64] = '主题';
$txt[66] = '修改信息';
$txt[68] = '会员名称';
$txt[69] = '电子邮件';
$txt[70] = '标题';
$txt[72] = '内容';

$txt[79] = '个人资料';

$txt[81] = '输入密码';
$txt[82] = '确认密码';
$txt[87] = '会员组';

$txt[92] = '观看会员资料 会员:';
$txt[94] = '总';
$txt[95] = '帖子';
$txt[96] = '个人网站';
$txt[97] = '注册';

$txt[101] = '返回版块首页';
$txt[102] = '公告';
$txt[103] = '首页';

$txt[104] = '封锁/解锁主题';
$txt[105] = '发帖';
$txt[106] = '发生错误!';
$txt[107] = '在';
$txt[108] = '注销';
$txt[109] = '作者';
$txt[110] = '回复';
$txt[111] = '最后回复';
$txt[114] = '管理员登录';
// Use numeric entities in the below string.
$txt[118] = '主题';
$txt[119] = '帮助';
$txt[121] = '删帖';
$txt[125] = '订阅';
$txt[126] = '订阅本帖: 当有人回帖时, 您想要收到一封电子邮件提醒您吗?';
// Use numeric entities in the below string.
$txt[130] = "敬祝,\n" . $context['forum_name'] . ' 论坛管理小组.\n 中文支持 smf.cn';
$txt[131] = '加入订阅';
$txt[132] = '移动帖子';
$txt[133] = '移动到';
$txt[139] = '页';
$txt[140] = '过去 ' . $modSettings['lastActive'] . ' 分钟内出现的会员';
$txt[144] = '站内短信';
$txt[145] = '引用原文回复';
$txt[146] = '回复';

$txt[151] = '没有任何信息';
$txt[152] = '您有';
$txt[153] = '短信';
$txt[154] = '删除这个帖子';

$txt[158] = '在线会员';
$txt[159] = '站内短信';
$txt[160] = '跳到';
$txt[161] = 'go';
$txt[162] = '您确定要删除这篇主题吗?';
$txt[163] = '确认';
$txt[164] = '取消';

$txt[166] = '搜索结果';
$txt[167] = '搜索结果最末端';
$txt[170] = '很抱歉, 没有找到任何相符的数据';
$txt[176] = '于';

$txt[182] = '搜索';
$txt[190] = '全部';

$txt[193] = '回上一页';
$txt[194] = '密码提醒';
$txt[195] = '主题发帖人为';
$txt[196] = '标题';
$txt[197] = '作者';
$txt[200] = '在此可以浏览所有已注册的会员..';
$txt[201] = '你好！';
$txt[208] = '管理中心';
$txt[211] = '最后编辑时间';
$txt[212] = '您想要关闭对于这篇帖子的订阅吗?';

$txt[214] = '最新帖子';

$txt[227] = '来自';
$txt[231] = '性别';
$txt[233] = '注册日期';

$txt[234] = '观看最新发表的帖子.';
$txt[235] = '是最近更新的主题';

$txt[238] = '男';
$txt[239] = '女';

$txt[240] = '帐号名称内含不可使用的字符.';

$txt['welcome_guest'] = '你好！ <b>' . $txt[28] . '</b>. 请先 <a href="' . $scripturl . '?action=login">登录</a> 或 <a href="' . $scripturl . '?action=register">注册一个帐号</a>.';
$txt['welcome_guest_activate'] = '<br />您忘了 <a href="' . $scripturl . '?action=activate">激活您的帐号吗?';
$txt['hello_member'] = '你好！';
// Use numeric entities in the below string.
$txt['hello_guest'] = '你好！';
$txt[247] = '哈喽，';
$txt[248] = '你好！';
$txt[249] = '请';
$txt[250] = '返回';
$txt[251] = '请选择一个目的地';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = '作者';

$txt[287] = '微笑';
$txt[288] = '生气';
$txt[289] = '偷笑';
$txt[290] = '哈哈哈';
$txt[291] = '难过';
$txt[292] = '眨眼';
$txt[293] = '奸笑';
$txt[294] = '惊讶';
$txt[295] = '酷';
$txt[296] = '???';
$txt[450] = '转眼';
$txt[451] = '伸舌头';
$txt[526] = '害羞';
$txt[527] = '无话可说';
$txt[528] = '很难决定啊';
$txt[529] = '飞吻';
$txt[530] = '哭泣';

$txt[298] = '版主';
$txt[299] = '版主';

$txt[300] = '标记所有主题为已阅读';
$txt[301] = '浏览';
$txt[302] = '新';

$txt[303] = '会员名单';
$txt[305] = '浏览';
$txt[307] = 'Email';

$txt[308] = '浏览会员';
$txt[309] = '在全部';
$txt[310] = '会员中';
$txt[311] = '到';
$txt[315] = '忘了您的密码吗?';

$txt[317] = '日期';
// Use numeric entities in the below string.
$txt[318] = '发件人';
$txt[319] = '标题';
$txt[322] = '检查新信息';
$txt[324] = '收件人';

$txt[330] = '主题';
$txt[331] = '会员';
$txt[332] = '会员名单';
$txt[333] = '新帖';
$txt[334] = '没有新帖';

$txt['sendtopic_send'] = '送出';

$txt[371] = '时区设定';
$txt[377] = '或';

$txt[398] = '很抱歉, 没有找到任何符合的数据';

$txt[418] = '订阅';

$txt[430] = '很抱歉 %s, 本论坛禁止您进入!';

$txt[452] = '标记所有帖子为已阅读';

$txt[454] = '热门主题(超过' . $modSettings['hotTopicPosts'] . ' 篇回帖)';
$txt[455] = '超热门主题(超过' . $modSettings['hotTopicVeryPosts'] . '篇回帖)';
$txt[456] = '封锁的主题';
$txt[457] = '一般的主题';
$txt['participation_caption'] = '您曾经参与过的主题';

$txt[462] = 'GO';

$txt[465] = '打印';
$txt[467] = '个人资料';
$txt[468] = '帖子总览';
$txt[470] = 'N/A';
$txt[471] = '封短信息';
$txt[473] = '这个会员名称已经有人使用了，或者因为你重复提交了申请，请尝试用你刚才的信息登录。谢谢。';

$txt[488] = '总会员人数';
$txt[489] = '总帖数';
$txt[490] = '总主题数';

$txt[497] = '登录时间 (分钟)';

$txt[507] = '预览';
$txt[508] = '永远自动登录';

$txt[511] = '已记录';
// Use numeric entities in the below string.
$txt[512] = 'IP 地址';

$txt[513] = 'ICQ';
$txt[515] = '个人网站';

$txt[525] = '作者';

$txt[578] = '小时';
$txt[579] = '天';

$txt[581] = ', 最新加入的会员.';

$txt[582] = '搜索';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hi.你好啊！';
$txt[604] = 'Yahoo!';

$txt[616] = '提醒, 目前论坛是设定为维护状态.';

$txt[641] = '阅读';
$txt[642] = '次';

$txt[645] = '论坛统计资料';
$txt[656] = '最新注册会员';
$txt[658] = '总分类数量';
$txt[659] = '最新帖子';

$txt[660] = '您有';
$txt[661] = '按';
$txt[662] = '此';
$txt[663] = '进入.';

$txt[665] = '版块总计';

$txt[668] = '打印本页';

$txt[679] = '必须是有效的电子邮件信箱.';

$txt[683] = '我是神经病!!';
$txt[685] = $context['forum_name'] . ' - 信息中心';

$txt[707] = '发送此主题';

$txt['sendtopic_title'] = '将这篇文章 &quot;%s&quot; 发给朋友.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = '亲爱的 %s,';
$txt['sendtopic_this_topic'] = '这篇来自 ' . $context['forum_name'] . ' 论坛，名为 “%s” 的文章可能对你有用。你可以点击下面链接浏览';
$txt['sendtopic_thanks'] = '敬上';
$txt['sendtopic_sender_name'] = '您的大名';
$txt['sendtopic_sender_email'] = '您的电子邮件';
$txt['sendtopic_receiver_name'] = '收件者大名';
$txt['sendtopic_receiver_email'] = '收件者电子邮件';
$txt['sendtopic_comment'] = '输入备注';
// Use numeric entities in the below string.
$txt['sendtopic2'] = '我对这篇帖子的附言';

$txt[721] = '将电子邮件隐藏不对外公开?';

$txt[737] = '选取全部';

// Use numeric entities in the below string.
$txt[1001] = '数据库错误';
$txt[1002] = '请重新操作一次. 如果这个问题持续发生, 请联络系统管理员.';
$txt[1003] = '文件';
$txt[1004] = '行';
// Use numeric entities in the below string.
$txt[1005] = 'SMF论坛系统已在数据库中发现错误, 并且修正完毕. 如果这个问题持续发生, 请联络您的主机系统管理员.';
$txt['database_error_versions'] = '<b>注意:</b> 您<em>可能</em>需要更新您的数据库. 您的论坛版本是 ' . $forum_version . ', 您的SMF数据库版本是 ' . $modSettings['smfVersion'] . '. 执行最新的upgrade.php升级可能会解决上述错误。';
$txt['template_parse_error'] = '主题模板执行错误!';
$txt['template_parse_error_message'] = '论坛的主题模板出现错误, 这可能是暂时性的, 请稍后再进入论坛. 如果错误继续发生, 请通知管理员.<br /><br />你也可以 <a href="javascript:location.reload();">刷新此页</a>.';
$txt['template_parse_error_details'] = '无法安装 <tt><b>%1$s</b></tt> 主题或语言文件. 请注意 (<tt>\'</tt>) 通常需要使用 (<tt>\\</tt>) 才能. 请按 <a href="' . $boardurl . '%1$s">这里看全部的错误信息</a>.<br /><br />您也可以 <a href="javascript:location.reload();">刷新此页</a> 或 <a href="' . $scripturl . '?theme=1">使用预设的风格</a>.';

$txt['smf10'] = '<b>今天</b> ';
$txt['smf10b'] = '<b>昨天</b> ';
$txt['smf20'] = '新投票';
$txt['smf21'] = '问题';
$txt['smf23'] = '发起投票';
$txt['smf24'] = '总票数';
$txt['smf25'] = '快捷键: 按下ALT-S可以发帖/按下ALT-P可以预览帖子';
$txt['smf29'] = '查看结果.';
$txt['smf30'] = '封锁投票';
$txt['smf30b'] = '解锁投票';
$txt['smf39'] = '更改投票';
$txt['smf43'] = '投票';
$txt['smf47'] = '一天';
$txt['smf48'] = '一周';
$txt['smf49'] = '一个月';
$txt['smf50'] = '永远';
$txt['smf52'] = '请输入帐号, 密码以及预计登录时间';
$txt['smf53'] = '一小时';
$txt['smf56'] = '移动';
$txt['smf57'] = '请输入为何您移动这篇主题的原因.';
$txt['smf60'] = '很抱歉, 您没有修改评价的权限, 您需要 ';
$txt['smf62'] = '很抱歉, 您目前无法执行这个动作, 请再等待 ';
$txt['smf82'] = '版块';
$txt['smf88'] = '在';
$txt['smf96'] = '置顶的主题';

$txt['smf138'] = '删除';

$txt['smf199'] = '您的短信息';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[详细统计资料]';

// Use numeric entities in the below three strings.
$txt['smf238'] = '程序代码';
$txt['smf239'] = '引用自';
$txt['smf240'] = '引用';

$txt['smf251'] = '分拆主题';
$txt['smf252'] = '合并主题';
$txt['smf254'] = '新主题的标题';
$txt['smf255'] = '只分拆此篇文章.';
$txt['smf256'] = '回复这篇文章之后分拆此篇主题.';
$txt['smf257'] = '请选择您要分拆的文章.';
$txt['smf258'] = '新主题';
$txt['smf259'] = '主题已经分拆成功为两篇主题.';
$txt['smf260'] = '原主题';
$txt['smf261'] = '请选择您要分拆的文章.';
$txt['smf264'] = '主题已经合并成功.';
$txt['smf265'] = '新合并的主题';
$txt['smf266'] = '您要合并的主题';
$txt['smf267'] = '目标版块';
$txt['smf269'] = '目标主题';
$txt['smf274'] = '确定要合并';
$txt['smf275'] = '和';
$txt['smf276'] = '这个功能会将两篇帖子合并为一篇帖子. 所有的回帖都会根据回复时间重新排列顺序, 因此最早发表的帖子会成为这个主题的第一篇内容.';

$txt['smf277'] = '置顶主题';
$txt['smf278'] = '取消置顶主题';
$txt['smf279'] = '封锁主题';
$txt['smf280'] = '解锁主题';

$txt['smf298'] = '高级搜索';

$txt['smf299'] = '重大安全警告:';
$txt['smf300'] = '您并没有删除 ';

$txt['smf301'] = '本页花了 ';
$txt['smf302'] = ' 秒, 以及 ';
$txt['smf302b'] = ' 次的数据库查询.';

$txt['smf315'] = '使用这个功能通知版主以及管理员有问题的帖子.<br /><i>请注意: 使用这个功能会将您的电子邮件信箱地址告诉版主以及管理员.</i>';

$txt['online2'] = '在线';
$txt['online3'] = '离线';
$txt['online4'] = '短信息 (在线)';
$txt['online5'] = '短信息 (离线)';
$txt['online8'] = '状态';

$txt['topbottom4'] = '向上';
$txt['topbottom5'] = '向下';

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


$txt['calendar3'] = '寿星:';
$txt['calendar4'] = '事件:';
$txt['calendar3b'] = '近日寿星:';
$txt['calendar4b'] = '近日事件:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = '月:';
$txt['calendar10'] = '年:';
$txt['calendar11'] = '日:';
$txt['calendar12'] = '事件名称:';
$txt['calendar13'] = '相关帖子:';
$txt['calendar20'] = '修改事件内容';
$txt['calendar21'] = '删除这个事件?';
$txt['calendar22'] = '删除事件';
$txt['calendar23'] = '发表事件';
$txt['calendar24'] = '日历';
$txt['calendar37'] = '链接到日历';
$txt['calendar43'] = '链接事件';
$txt['calendar47'] = '近日事件';
$txt['calendar47b'] = '今日事件';
$txt['calendar51'] = '周';
$txt['calendar54'] = '维持的天数:';
$txt['calendar_how_edit'] = '如何修改事件内容?';
$txt['calendar_link_event'] = '将事件链接到帖子中：';
$txt['calendar_confirm_delete'] = '你确定你说要删除该事件吗？';
$txt['calendar_linked_events'] = '已链接的事件';

$txt['moveTopic1'] = '发表一篇自动转址主题';
$txt['moveTopic2'] = '修改这篇主题的标题';
$txt['moveTopic3'] = '新的标题';
$txt['moveTopic4'] = '修改每篇帖子的标题';

$txt['theme_template_error'] = '无法加载风格文件 \'%s\'.';
$txt['theme_language_error'] = '无法载入语言文件: \'%s\'.';

$txt['parent_boards'] = '子版块';

$txt['smtp_no_connect'] = '无法链接到邮件发信服务器 (SMTP)';
$txt['smtp_port_ssl'] = 'SMTP 连接端口的设定错误；给 SSL 的主机它必须是 465。';
$txt['smtp_bad_response'] = '邮件服务器没有回应';
$txt['smtp_error'] = '发送邮件时发生错误: ';
$txt['mail_send_unable'] = '不能发送邮件到以下地址： \'%s\'';

$txt['mlist_search'] = '寻找会员';
$txt['mlist_search2'] = '重新搜索';
$txt['mlist_search_email'] = '根据电子邮件搜索';
$txt['mlist_search_messenger'] = '根据传讯软件昵称搜索';
$txt['mlist_search_group'] = '根据群组或阶级搜索';
$txt['mlist_search_name'] = '根据昵称搜索';
$txt['mlist_search_website'] = '根据个人网站搜索';
$txt['mlist_search_results'] = '搜索结果';

$txt['attach_downloaded'] = '已被下载';
$txt['attach_viewed'] = '已被阅读';
$txt['attach_times'] = '次';

$txt['MSN'] = 'MSN';

$txt['settings'] = '设置';
$txt['never'] = '没登录过';
$txt['more'] = '更多……';

$txt['hostname'] = '主机地址';
$txt['you_are_post_banned'] = '对不起 %s, 您被禁止发送短信息.';
$txt['ban_reason'] = '原因';

$txt['tables_optimized'] = '数据库已优化';

$txt['add_poll'] = '投票';
$txt['poll_options6'] = '您只能选择%s个选项.';
$txt['poll_remove'] = '删除投票';
$txt['poll_remove_warn'] = '您确定要删除这个投票吗?';
$txt['poll_results_expire'] = '投票结果将会在投票结束后公告';
$txt['poll_expires_on'] = '投票截止日期';
$txt['poll_expired_on'] = '投票已截止';
$txt['poll_change_vote'] = '删除投票';
$txt['poll_return_vote'] = '投票选项';

$txt['quick_mod_remove'] = '删除所选';
$txt['quick_mod_lock'] = '封锁选项';
$txt['quick_mod_sticky'] = '置顶选项';
$txt['quick_mod_move'] = '移动选项到';
$txt['quick_mod_merge'] = '合并选项';
$txt['quick_mod_markread'] = '将所选帖子标记为“已读”';
$txt['quick_mod_go'] = '执行!';
$txt['quickmod_confirm'] = '您是否确定要继续?';

$txt['spell_check'] = '拼字检查（英文）';

$txt['quick_reply_1'] = '快速回复';
$txt['quick_reply_2'] = '通过 <i>快速回复</i> 功能, 您可以快速的回复帖子, 您也可以使用BBCODE或是HTML (如果这个版块允许的话).';
$txt['quick_reply_warning'] = '注意: 此篇主题已经被封锁了!<br />只有版主可以回复.';

$txt['notification_enable_board'] = '您确定要订阅这个版块的新帖子吗?';
$txt['notification_disable_board'] = '您确定不再订阅这个版块的新帖子吗?';
$txt['notification_enable_topic'] = '您确定要订阅这个帖子吗?';
$txt['notification_disable_topic'] = '您确定不再订阅这个帖子吗?';

$txt['rtm1'] = '向版主举报';

$txt['unread_topics_visit'] = '未阅读的主题';
$txt['unread_topics_visit_none'] = '您上次光临之后未有新的主题. <a href="' . $scripturl . '?action=unread;all">所有未阅读的主题</a>.';
$txt['unread_topics_all'] = '所有未阅读的主题';
$txt['unread_replies'] = '更新的主题';

$txt['who_title'] = '在线会员';
$txt['who_and'] = ' 以及 ';
$txt['who_viewing_topic'] = ' 正在阅读本主题.';
$txt['who_viewing_board'] = ' 正在浏览本版块.';
$txt['who_member'] = '会员';

$txt['powered_by_php'] = 'PHP 支持';
$txt['powered_by_mysql'] = 'MySQL 支持';
$txt['valid_html'] = '验证 HTML 4.01!';
$txt['valid_xhtml'] = '验证 XHTML 1.0!';
$txt['valid_css'] = '验证 CSS!';

$txt['guest'] = '访客';
$txt['guests'] = '访客';
$txt['user'] = '会员';
$txt['users'] = '会员';
$txt['hidden'] = '隐身';
$txt['buddy'] = '好友';
$txt['buddies'] = '好友';
$txt['most_online_ever'] = '历史最高在线';
$txt['most_online_today'] = '今天最高在线';

$txt['merge_select_target_board'] = '选择合并主题要放置的目标版块';
$txt['merge_select_poll'] = '选择在合并后要保存的投票';
$txt['merge_topic_list'] = '选择要合并的主题';
$txt['merge_select_subject'] = '选择合并后主题的标题';
$txt['merge_custom_subject'] = '自订标题';
$txt['merge_enforce_subject'] = '修改所有回帖的标题';
$txt['merge_include_notifications'] = '包含订阅?';
$txt['merge_check'] = '合并?';
$txt['merge_no_poll'] = '没有投票';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = '目前使用的图示';

$txt['smileys_current'] = '目前的表情图案集';
$txt['smileys_none'] = '不使用表情图案';
$txt['smileys_forum_board_default'] = '论坛/版块的默认设置';

$txt['search_results'] = '搜索结果';
$txt['search_no_results'] = '没有找到相符合的结果';

$txt['totalTimeLogged1'] = '总登录时间: ';
$txt['totalTimeLogged2'] = ' 天, ';
$txt['totalTimeLogged3'] = ' 小时和 ';
$txt['totalTimeLogged4'] = ' 分钟.';
$txt['totalTimeLogged5'] = '天 ';
$txt['totalTimeLogged6'] = '时 ';
$txt['totalTimeLogged7'] = '分';

$txt['approve_thereis'] = '共有';
$txt['approve_thereare'] = '共有';
$txt['approve_member'] = '一位会员';
$txt['approve_members'] = '位会员';
$txt['approve_members_waiting'] = '等待审核.';

$txt['notifyboard_turnon'] = '当有会员在这个版块内发表新主题时, 是否要通过电子邮件通知您?';
$txt['notifyboard_turnoff'] = '您确定您不想收到来自这个版块的新主题通知吗?';

$txt['activate_code'] = '您的激活码是';

$txt['find_members'] = '寻找会员';
$txt['find_username'] = '帐号, 昵称或电子邮件';
$txt['find_buddies'] = '只查找好友？';
$txt['find_wildcards'] = '您可以使用的万用字符: *, ?';
$txt['find_no_results'] = '没有找到任何结果';
$txt['find_results'] = '搜索结果';
$txt['find_close'] = '关闭';

$txt['unread_since_visit'] = '显示上次光临之后的新主题.';
$txt['show_unread_replies'] = '显示您有参与讨论的所有新回复.';

$txt['change_color'] = '更改颜色';

$txt['quickmod_delete_selected'] = '删除选取的项目';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = '您收到了新的短信息.\\n要打开新窗口阅读吗?';

$txt['previous_next_back'] = '&laquo; 上一篇主题';
$txt['previous_next_forward'] = '下一篇主题 &raquo;';

$txt['movetopic_auto_board'] = '[版块]';
$txt['movetopic_auto_topic'] = '[主题链接]';
$txt['movetopic_default'] = '此篇主题已经被移动到 ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = '折叠或展开.';

$txt['mark_unread'] = '标记未读';

$txt['ssi_not_direct'] = '请不要直接读写 SSI.php; 您可以用路径 (%s) 或加入 ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php 未能装载一个session！这可能会使得用户注销（退出）和其它一些功能出现问题——请检查确认 SSI.php 包含语句在你的脚本中的任何代码之前！';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = '预览帖子';
$txt['preview_fetch'] = '准备预览……';
$txt['preview_new'] = '新站内短信';
$txt['error_while_submitting'] = '发送站内短信时发生以下错误：';

$txt['split_selected_posts'] = '已选帖子';
$txt['split_selected_posts_desc'] = '分离帖子将产生一个新主题';
$txt['split_reset_selection'] = '重新选择';

$txt['modify_cancel'] = '取消';
$txt['mark_read_short'] = '标记已读';

$txt['pm_short'] = '我的消息';
$txt['hello_member_ndt'] = '您好';

$txt['ajax_in_progress'] = '加载中...';

?>