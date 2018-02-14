<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = '这里可以让您更改插件模块的设定, 及其它的功能. 请到 <a href="' . $scripturl . '?action=theme;sa=settings;id=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">风格设定</a> 更改风格的设定.';

$txt['mods_cat_features'] = '基本功能';
$txt['pollMode'] = '投票模式';
$txt['smf34'] = '关闭投票';
$txt['smf32'] = '打开投票';
$txt['smf33'] = '显示投票为主题';
$txt['allow_guestAccess'] = '允许访客进入论坛';
$txt['userLanguage'] = '允许会员选择的语言';
$txt['allow_editDisplayName'] = '允许会员更改昵称?';
$txt['allow_hideOnline'] = '允许会员隐藏上线状态?';
$txt['allow_hideEmail'] = '允许会员隐藏电子邮件 (只有版主看的到)?';
$txt['guest_hideContacts'] = '对访客隐藏会员的联络数据';
$txt['titlesEnable'] = '允许自订头衔';
$txt['enable_buddylist'] = '允许好友名单';
$txt['default_personalText'] = '预设的自订文字';
$txt['max_signatureLength'] = '签名文件的允许文字<div class="smalltext">(0 为无限制.)</div>';
$txt['number_format'] = '预设的数字格式';
$txt['time_format'] = '预设的时间格式';
$txt['time_offset'] = '时区设定<div class="smalltext">(加入到特定的会员选项.)</div>';
$txt['failed_login_threshold'] = '错误登录的次数';
$txt['lastActive'] = '多少时间为在线 (分钟)';
$txt['trackStats'] = '纪录每天的统计数据';
$txt['hitStats'] = '纪录每天的网页浏览数(必须允许统计资料)';
$txt['enableCompressedOutput'] = '打开压缩的输出';
$txt['databaseSession_enable'] = '用数据库纪录工作过程';
$txt['databaseSession_loose'] = '允许浏览器回到记忆里的前页';
$txt['databaseSession_lifetime'] = '运行超时的秒数';
$txt['enableErrorLogging'] = '打开错误纪录';
$txt['cookieTime'] = '预设的登录时间 (分钟)';
$txt['localCookies'] = '区域性保存 cookies<div class="smalltext">(SSI 可能会出现问题.)</div>';
$txt['globalCookies'] = '使用副属网址的 cookies<div class="smalltext">(必须先关掉区域性的 cookies!)</div>';
$txt['securityDisable'] = '关闭管理安全措施';
$txt['send_validation_onChange'] = 'Email更改时需要重新Email激活';
$txt['approveAccountDeletion'] = '需经管理员批准会员才有权删除帐号';
$txt['autoOptDatabase'] = '优化数据表的天数<div class="smalltext">(0 为不优化.)</div>';
$txt['autoOptMaxOnline'] = '优化数据库时允许上线的会员数<div class="smalltext">(0 为不设定.)</div>';
$txt['autoFixDatabase'] = '自动修复数据表';
$txt['allow_disableAnnounce'] = '允许会员关闭公告通知';
$txt['disallow_sendBody'] = '邮件通知中不允许发送帖子内容';
$txt['modlog_enabled'] = '纪录管理动作';
$txt['queryless_urls'] = '显示没 ?\'s 的网址（SEF(搜索友好)）<div class="smalltext"><b>Apache 才能用!显示为.html后缀。</b></div>';
$txt['max_image_width'] = '发布的图片宽度 (0 = 不设定)';
$txt['max_image_height'] = '发布的图片高度 (0 = 不设定)';
$txt['mail_type'] = '电子邮件类型';
$txt['mail_type_default'] = '(PHP默认)';
$txt['smtp_host'] = 'SMTP 服务器';
$txt['smtp_port'] = 'SMTP 连接埠';
$txt['smtp_username'] = 'SMTP 帐号';
$txt['smtp_password'] = 'SMTP 密码';
$txt['enableReportPM'] = '允许记录私人信消息';
$txt['max_pm_recipients'] = '允许最大的收信人数。<div class="smalltext">(0 为不限制，管理员不受设置限制)</div>';
$txt['pm_posts_verification'] = '发贴数为多少以下需要发短信时填写验证码<div class="smalltext">(0 为不限制，管理员不受设置影响)</div>';
$txt['pm_posts_per_hour'] = '一小时内会员发送短信的限值<div class="smalltext">(0 为不限制，斑竹不受设置限制)</div>';

$txt['mods_cat_layout'] = '外观及选项';
$txt['compactTopicPagesEnable'] = '显示的页数格式';
$txt['smf235'] = '连续的显示页数:';
$txt['smf236'] = '显示';
$txt['todayMod'] = '打开 &quot;今天&quot; 功能';
$txt['smf290'] = '关闭';
$txt['smf291'] = '只显示今天';
$txt['smf292'] = '今天 &amp; 昨天';
$txt['topbottomEnable'] = '打开 向上/向下 按钮';
$txt['onlineEnable'] = '显示 在线/离线 到帖子内及短信息';
$txt['enableVBStyleLogin'] = '在每页显示快速登录';
$txt['defaultMaxMembers'] = '会员名单内显示的会员数';
$txt['timeLoadPageEnable'] = '显示打开网页的时间';
$txt['disableHostnameLookup'] = '关闭主机名搜索?';
$txt['who_enabled'] = '打开在线会员名单';

$txt['smf293'] = '评价';
$txt['karmaMode'] = '评价模式';
$txt['smf64'] = '关闭评价|打开评价|允许正评价及负评价';
$txt['karmaMinPosts'] = '帖子数必须大于多少才能修改评价';
$txt['karmaWaitTime'] = '评价等待时间 (小时)';
$txt['karmaTimeRestrictAdmins'] = '对版主限制等待时间';
$txt['karmaLabel'] = '评价标签';
$txt['karmaApplaudLabel'] = '评价赞赏标签';
$txt['karmaSmiteLabel'] = '评价惩罚标签';

$txt['caching_information'] = '<div align="center"><b><u>重要！！启用该功能前请仔细阅读</b></u></div><br />
	SMF 支持通过加速器来使用高速缓存系统，当前支持的加速器有：<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	</ul>
	缓存系统只支持拥有php编译器加上以上的加速器，或者有 memcache。<br /><br />
	SMF 拥有一个可变等级的高速缓存系统，高一级的缓存级别需要消耗更多的CPU时间来获取缓存数据。如果你的服务器支持缓存，我们建议你使用 Level 1 的缓存机制。
	<br /><br />
	需要注意的是如果你使用 memcached，你需要在下面提供服务器相应的设置信息。需要输入用英文逗号（,）隔开的列表，例如:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	如果没有指定特定的端口，SMF将会使用 11211 端口，SMF会尝试在你的服务器间执行大概的和随机的负载平衡。
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF 在你服务器侦测不到兼容的加速器。</b>';
$txt['detected_APC'] = '<b style="color: green">SMF 侦测到你的服务器安装了 APC。';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF 侦测到你的服务器安装了 eAccelerator。';
$txt['detected_MMCache'] = '<b style="color: green">SMF 侦测到你的服务器安装了 MMCache。';
$txt['detected_Zend'] = '<b style="color: green">SMF 侦测到你的服务器安装了 Zend。';
$txt['detected_Memcached'] = '<b style="color: green">SMF has detected that your server has Memcached installed.';

$txt['cache_enable'] = '高速缓存级别';
$txt['cache_off'] = '不使用高速缓存';
$txt['cache_level1'] = 'Level 1 缓存';
$txt['cache_level2'] = 'Level 2 缓存 (Not Recommended)';
$txt['cache_level3'] = 'Level 3 缓存 (Not Recommended)';
$txt['cache_memcached'] = 'Memcache 设置';

?>