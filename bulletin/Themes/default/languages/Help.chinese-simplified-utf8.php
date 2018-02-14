<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = '关闭窗口';

$helptxt['manage_boards'] = '
	<b>编辑版块</b><br />
	这个页面可以让你建立/重整/删除版块, 以及上面的类别. 
	譬如你的论坛范围非常广泛, 并提供 &quot;运动&quot;, &quot;车类&quot; 
	以及 &quot;音乐&quot;, 这些可以当成最高层的类别. 这些类别下面你可以建立等级制度的 
	&quot;子类别&quot;, 或 &quot;版块&quot;. 下面是一个简单的构造: <br />
	<ul>
		<li>
			<b>运动</b>
			&nbsp;- &quot;类别&quot;
			&nbsp;- A &quot;category&quot;
		</li>
		<ul>
			<li>
				<b>棒球</b>
				&nbsp;- 版块在 &quot;运动&quot; 的类别下面
				&nbsp;- A board under the category of &quot;Sports&quot;
			</li>
			<ul>
				<li>
					<b>统计资料</b>
					&nbsp;- 在 &quot;棒球&quot; 的子版块下面
					&nbsp;- A child board under the board of &quot;Baseball&quot;
				</li>
			</ul>
			<li><b>篮球</b>
			&nbsp;- 版块在 &quot;运动&quot; 的类别下面
			&nbsp;- A board under the category of &quot;Sports&quot;</li>
		</ul>
	</ul>
	类别可让你分开你的论坛并收取广泛的主题 (&quot;车类, 运动&quot;), 
	而这些 &quot;版块&quot; 可让会员发布新主题. 会员对篮球感兴趣可发帖到 
	&quot;运动->篮球&quot;. 类别并可帮助会员快速的寻找对他感兴趣的版块: 
	与其用 &quot;商店&quot; 你可以用 &quot;硬件类&quot; 或 &quot;衣类&quot; 
	因为商店的范围较广. 这样如果说你要找 &quot;主机板&quot; 
	可以到硬盘类版块.<br />
	就如上面所描述的, 版块是在类别下面. 如果你要讨论 &quot;主机板&quot; 
	你可以到硬件类别下的主机板版块发布你的文章.<br />
	这里的管理功能可以让你新增版块在类别下面, 从整顺序 
	(把 &quot;主机板&quot; 放到 &quot;显示卡&quot; 后面), 或者删除版块.';

$helptxt['edit_news'] = '<b>编辑论坛公告</b><br />
	这里可以让你发布论坛公告. 论坛公告会出现在论坛主页的公告区里. 
	你可以发布任何公告 (譬如 &quot;论坛在今天两点将会关闭维修&quot;).
	每篇不同的公告应该放在不同的区域里, 当主页刷新时会更改.';

$helptxt['view_members'] = '
    <ul>
        <li>
    <b>浏览会员名单</b><br />
	观看会员的名单. 你可以点选会员名称到会员数据页. 会员数据页可以让你更进一步了解点选的会员 
	(主页, 年龄等等.), 管理员可以更改这里的数据. 你有全部的权利更改会员数据, 甚至删除会员。<br /><br />
        </li>
        <li>
            <b>等待审核批准</b><br />
            本区域的出现是因为你规定了所有新的注册用户都必须得到管理员的批准。本区域列出的是所有正在等待管理员批准的用户名单（包括他们的Email和IP地址）。
			通过勾选用户名和选择屏幕下面的下拉式列表框的项目，选择你就可以批准或拒绝某人成为注册用户。
			拒绝某人时，在删除该预备成员时你可以选择是否将决定通知对方。<br /><br />
        </li>
        <li>
            <b>等待激活</b><br />
            本区域的出现是因为你规定了所有新的注册用户必须激活后帐号才能生效。本区域列出的是所有尚未被激活的帐号。
			你可以批准或拒绝某人成为注册用户，或者提醒他注册未完成（如某些资料填写不全）。你可以选择是否通过Eamil将决定通知对方。<br /><br />
        </li>
    </ul>';

$helptxt['ban_members'] = '<b>限制会员</b><br />
	SMF 可以让你 &quot;禁用&quot; 会员, 如果他们违反了论坛的规定. 
	管理员可以禁止他们浏览论坛. 在会员发布的帖子里你可以看到他们的 IP. 
	只要把 IP 输入到这里就可以禁止他们发布任何帖子.注意: 有些会员的 IP 会更改.<br />或输入他们的电子邮件限制会员.';

$helptxt['modsettings'] = '<b>修改特色及选项</b><br />
	这里可以任意修改论坛的特色. 插件的选项通常也会在这里出现.';

$helptxt['number_format'] = '<b>数字格式</b><br />
	这里可以让您设定论坛使用的数字格式. 格式为: <br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	您可以使用 \',\' 来显示千的单位, 或用 \'.\' 来显示小数.';

$helptxt['time_format'] = '<b>时间格式</b><br />
	你可以修改时间格式给你自己. 这里用了很多简写, 但是非常简单. PHP 的strftime函数用法如下 
	(详细的用法可到 <a href="http://www.php.net/manual/function.strftime.php" target="_new">php.net</a>).<br />
	<br />
	时间格式可用以下简写: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - 周日简称<br />
	&nbsp;&nbsp;%A - 周日名称<br />
	&nbsp;&nbsp;%b - 月份简称<br />
	&nbsp;&nbsp;%B - 月份名称<br />
	&nbsp;&nbsp;%d - 日子 (01 to 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - 如同 %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - 日子 (1 to 31) <br />
	&nbsp;&nbsp;%H - 24-hour 格式 (range 00 to 23) <br />
	&nbsp;&nbsp;%I - 12-hour 格式 (range 01 to 12) <br />
	&nbsp;&nbsp;%m - 数字月份 (01 to 12) <br />
	&nbsp;&nbsp;%M - 分钟 <br />
	&nbsp;&nbsp;%p - 可用 &quot;am&quot; 或 &quot;pm&quot; 上午或下午<br />
	&nbsp;&nbsp;%R<b>*</b> - 时间以24小时标记 <br />
	&nbsp;&nbsp;%S - 秒数以小数计算 <br />
	&nbsp;&nbsp;%T<b>*</b> - 目前时间, 等于 %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2 位数年份 (00 to 99) <br />
	&nbsp;&nbsp;%Y - 4 位数年份<br />
	&nbsp;&nbsp;%Z - 时区 <br />
	&nbsp;&nbsp;%% - \'%\' 符号 <br />
	<br />
	<i>* 无法用在 Windows-based 服务器.</i></span>';

$helptxt['live_news'] = '<b>Live 公告</b><br />
	这里会出现 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org 的最新注意事项</a>
	这里会常出现升级文档, 新论坛下载, 或 Simple Machines的重要事件.';

$helptxt['registrations'] = '<b>注册管理</b><br />
	这里可以让你用各种功能管理会员注册. 依据你论坛的设定, 你会看到四个不同的区域及功能. 这些是:<br /><br />
	<ul>
		<li>
			<b>注册新会员</b><br />
			这里你可以注册新的会员. 当你的论坛已不开放注册或你需要新增测试会员时可以用这个功能. . 如果你要求新会员启用帐号, 
			启用邮件会发送到他们的信箱里, 他们必须根据邮件的指示启动帐号. 你也可以选择发送密码给会员.<br /><br />
        </li>
        <li>
            <b>编辑注册协议</b><br />
            你可以设定好用户注册时需阅读并接受的协议。该协议可以与SMF已设定好的不同。<br /><br />
        </li>
        <li>
            <b>设置禁用名</b><br />
            你可以设置用户不能使用的名称或词语。<br /><br />
        </li>
        <li>
            <b>用户注册设置</b><br />
            你可以设置用户注册的模式，以及与注册过程相关的一些设置。
		</li>
	</ul>';

$helptxt['modlog'] = '<b>管理纪录</b><br />
	任何版主的管理纪录都会在这出现, 譬如说删帖及删除会员. 任何纪录一定会在这出现, 如果版主要删除必须等24小时过后.
	版主的动作变量都会出现在 \'对象\' 栏里.';
$helptxt['error_log'] = '<b>错误日志</b><br />
	错误纪录会纪录所有会用使用论坛时而发生错误的纪录. 所有错误是根据发生日期出现, 你也可以按日期旁边的箭头来进行分类。
	此外你可以按错误旁的图片来进行过滤. 譬如说过滤会员只会陈列你所过滤的会员。';
$helptxt['theme_settings'] = '<b>风格设定</b><br />
	这里可以让你更改风格的设定. 设定包括风格的文件夹及 URL 的数据. 其它的选项可以让你对风格进行规划. 
	有些风格提供不同的选项任你规划你所喜欢的论坛.';
$helptxt['smileys'] = '<b>表情图案中心</b><br />
	在这里您可以新增或删除表情图案和图案集. 注意如果一个表情图案在一个图案集里面, 他必须也出现在每个图案集.
	要不然会无法显示。<br /><br />
    如在相关设定中已许可，你也可编辑信息图标。';
$helptxt['calendar'] = '<b>管理事件</b><br />
    在此你可修改事件设置，也可增加或删除节日（庆祝日）。';

$helptxt['serversettings'] = '<b>服务器设置</b><br />	你可以在这里设置论坛核心的配置信息，这里包括数据库及网址还有其他重要的配置，例如邮件和缓存。在设置前一定要想清楚，因为修改错误有可能导致论坛无法访问。';

$helptxt['topicSummaryPosts'] = '这里可以让你选择出现在主题回复时该出现的帖数.';
$helptxt['enableAllMessages'] = '设置“显示所有链接”时一个主题的 <em>最多</em>回复次数。设置值小于&quot;在一个主题页显示的最多回复&quot; 
意味着不会显示所有链接，请注意设置值过大时对论坛的运行速度有不良影响。';
$helptxt['enableStickyTopics'] = '置顶的主题会出现在版块的最上头. 置顶可用在重要的主题. 原本的默认值只让版主置顶主题.';
$helptxt['allow_guestAccess'] = '不勾选时游客在此论坛将仅仅只能注册、登录、查找密码等基本权限。但与“禁止游客访问版块”并不完全一样。';
$helptxt['userLanguage'] = '使用这个选项可以让会员更改论坛语言, 但是不会更改默认值.';
$helptxt['trackStats'] = '统计:<br />这个可以让会员浏览最新的帖子或最受欢迎的主题. 其它的统计像最高在线人数, 最新注册会员, 及最新帖子也会出现.<hr />
		综合浏览量:<br />添加新的统计栏显示论坛的综合浏览量。';
$helptxt['titlesEnable'] = '使用这个可以让会员输入自己喜欢的头衔. 头衔会出现在会员名称的下面.';
$helptxt['topbottomEnable'] = '这个选项会增加往上及往下, 会员可以点往上到最顶端及往下到最下端.';
$helptxt['onlineEnable'] = '这个选项会显示会员在线或不在线的图示';
$helptxt['todayMod'] = '显示 &quot;今天&quot;, 或 &quot;昨天&quot; 来取代日期.';
$helptxt['enablePreviousNext'] = '显示到下一帖或上一帖的链接.';
$helptxt['pollMode'] = '你可以选择使用会禁止使用投票. 如果禁止使用投票, 任何现有的投票将会被隐藏. 你可以继续显示现有的主题如果你准许
		&quot;显示现有投票为主题&quot;.<br /><br />权限选单可让你选择谁可以发表投票. 请记住这个选项如果投票功能出现问题.';
$helptxt['enableVBStyleLogin'] = '显示登录区到论坛的最下端.';
$helptxt['enableCompressedOutput'] = '这个选项可以让你使用 zlib 来压缩带宽. 一定要安装 zlib 才可使用.';
$helptxt['databaseSession_enable'] = '此项功能将对工作过程使用数据库, 可能会让您的论坛更快. 但是必须设定 session.auto_start 为 off.';
$helptxt['databaseSession_loose'] = '启用此项功能会减少您论坛使用的带宽, 但是如果您按回上页不会刷新您的页面.';
$helptxt['databaseSession_lifetime'] = '您可以选择工作过程的时间 (已秒计算), 最好是高于2400.';
$helptxt['enableErrorLogging'] = '这个会纪录任何错误, 譬如说无法登录等等.';
$helptxt['allow_disableAnnounce'] = '这个可以让会员取消因你勾选回帖时自动发送&quot;公告主题&quot;的邮件通知。';
$helptxt['disallow_sendBody'] = '该选项取消“在邮件通知中接收回复或帖子全部内容”这一选项。<br /><br />因用户常常会错误地直接回复这样的邮件通知给网站管理员。';
$helptxt['compactTopicPagesEnable'] = '显示页数的格式.<br /><i>例如:</i>
		&quot;3&quot; 显示为: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; 显示为: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = '在论坛的最下面显示 SMF 打开页面所花的时间.';
$helptxt['removeNestedQuotes'] = '只显示引用的帖子, 不会显示任何相互层叠的引用.';
$helptxt['simpleSearch'] = '只显示简单的搜索及高级搜索的链接.';
$helptxt['max_image_width'] = '设定帖子贴图的最大值. 不会影响小于最大值的图片.';
$helptxt['mail_type'] = '让你选择使用预设的 PHP 邮件功能或你自己的邮件服务器. PHP邮件不具备SMTP认证功能。但SMTP比较慢。选择了前者则与后者相关的设置不必再填写。';
$helptxt['attachmentEnable'] = '附件可让会员上传文件及贴入帖子里.<br /><br />
		<b>允许游客使用附件?</b>:<br />  点选如果你想让游客上传附件.<br />
		<b>检查附件的扩展名</b>:<br /> 你要检查附件的扩展名吗?<br />
		<b>限制使用附件的群组</b>:<br /> 设定可以使用附件的群组.<br />
		<b>允许的扩展名</b>:<br /> 设定可上传的扩展名.<br />
		<b>附件的路径</b>:<br /> 你附件的上传路径<br />(例如: /home/sites/yoursite/www/forum/attachments)<br />
		<b>最大文件值</b> (in kB):<br /> 附件的最大值.<br />
		<b>最大文件夹空间</b> (in kB):<br /> 附件文件夹的空间.<br />
		<b>图示附件</b>:<br /> 如果上传的是图案会显示在帖子下面.<br />
        <b>减小帖子中的图片尺寸</b>：<br /> 选择它意味着将以以较小的缩略图形式把图片保存为附件（这样可节省带宽）。<br />
        <b>缩略图的最大宽度和高度</b>：<br /> 只有你选择了&quot;减小帖子中的图片尺寸&quot;之后这个选项才会生效。';
$helptxt['karmaMode'] = '评价代表会员的欢迎度. 如果允许的话, 会员可以增加或减少其它会员的欢迎度. 你可以更改要多少文章数才可以有一个 &quot;评价&quot;.
		<br /><br />您可以在权限选单里面允许减少其它会员的欢迎度.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = '日历可以显示会员的生日及重要的公告.<br /><br />
		<b>显示链接日期到 \'发表事件\'</b>:<br />当会员点选日期时可以让他们发布事件.<br />
		<b>显示周数</b>:<br />显示第几个礼拜.<br />
		<b>论坛首页显示的天数</b>:<br />如果您设定的是7, 那一周内的事件都会出现在论坛首页.<br />
		<b>主页里显示假期</b>:<br />主页里会显示今天是什么假期.<br />
		<b>主页里显示生日</b>:<br />主页里会显示今天是谁的生日.<br />
		<b>主页里显示事件</b>:<br />主页里会显示今天的事件.<br />
		<b>事件将出现到的版块</b>:<br />您想要发表的事件出现在哪个版块内?<br />
        <b>允许事件不与帖子链接</b>:<br />允许用户发布不需与帖子链接的事件<br />
		<b>年份的最小值</b>:<br />设定日历的 &quot;第一年&quot;.<br />
		<b>年份的最大值</b>:<br />设定日历的 &quot;最后一年&quot;.<br />
		<b>生日颜色</b>:<br />输入生日的颜色<br />
		<b>事件颜色</b>:<br />输入事件的颜色<br />
		<b>假期颜色</b>:<br />输入假期的颜色<br />
		<b>允许事件维持数日</b>:<br />勾选如果你允许同样的事件维持多天.<br />
		<b>事件可维持日数</b>:<br />选择事件可以维持的日数.<br /><br />
		记得会员使用日历的功能 (发布事件, 浏览事件等等) 可以在权限选单里面打开.';
$helptxt['localCookies'] = 'SMF 使用 cookies 来保存登录数据到会员的计算机里.
	Cookies 可以用全区性的方式保存 (myserver.com) 或以区域性的方式来保存 (myserver.com/path/to/forum).<br />
	使用这个选项如果会员无法永久登录, 或自动注销.<hr />
	普遍式保存比较不安全如果你使用分享的服务器 (譬如 Kimo 的免费网址).<hr />
	地区式保存无法到论坛的文件夹外使用, 如果你的论坛安装在 www.myserver.com/forum, 网页像 www.myserver.com/index.php 将无法使用账户的数据.
	如果使用 SSI.php, 建议您使用全区性来保存.';
$helptxt['enableBBC'] = '使用这个选项可让会员使用 Bulletin Board Code (BBCode 代码). BBCode 代码可让会员更改帖子内容的形式.';
$helptxt['time_offset'] = '如果管理员不想使用跟服务器一样的时区, 可以输入时差 (小时) 来更改时区, 时差是以服务器的时区来计算. 可以输入负数及小数.';
$helptxt['spamWaitTime'] = '你可以在这选择会员发帖时该等的时间. 这个功能可以禁止会员灌水.';

$helptxt['enablePostHTML'] = '允许使用基本的 HTML:
    <ul style="margin-bottom: 0;">
        <li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
        <li>&lt;a href=&quot;&quot;&gt;</li>
        <li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
        <li>&lt;br /&gt;, &lt;hr /&gt;</li>
        <li>&lt;pre&gt;, &lt;blockquote&gt;</li>
    </ul>';

$helptxt['themes'] = '这里你可以允许会员使用哪些风格, 及访客使用的预设风格. 你也可以点选风格更改他的设定.';
$helptxt['theme_install'] = '这里可以让你安装新的风格. 你可以用已建的文件夹, 然后上传你要的风格, 或者复制预设的风格.<br /><br />
	注意: 在风格的文件夹里必须要有 <tt>theme_info.xml</tt> 定义档.';
$helptxt['enableEmbeddedFlash'] = '这个选项可让会员在帖子里使用 Flash 文件,像图案一样. 虽然安全问题必不严重, 使用 Flash 还是有一定的危险.';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = '允许会员链接 <a href="' . $scripturl . '?action=.xml;sa=news">最近公告</a>
	及相关的资料. 建议你限制最近公告及文章的使用值, 因为有些使用 RSS 数据的软件会缩短公告的数据 (例如 Trillian).';
$helptxt['hotTopicPosts'] = '更改&quot;热门主题&quot; 的帖子数或 &quot;超热门主题&quot; 的帖子数.';
$helptxt['globalCookies'] = '允许使用次级域名的 Cookies. 例如, 如果...<br />
	您的网址是 http://www.simplemachines.org/,<br />
	您的论坛在 http://forum.simplemachines.org/,<br />
	使用此项可以让你使用论坛的 cookie 在您的网址里.请勿使用这项功能如果次网址 (如 hacker.simplemachines.org )不是您所拥有。';
$helptxt['securityDisable'] = '当管理员进入管理区时需要再输入一次密码. 这个选单可让你关掉这个功能, 但是并不建议使用!';
$helptxt['securityDisable_why'] = '这是您的密码 (跟你登录时的密码相同).<br /><br />输入您的密码可保证是您本人在修改论坛的设定.';
$helptxt['emailmembers'] = '邮件内容可让你使用少许的 &quot;变数&quot;. 这些是:<br />
	{$board_url} - 论坛的地址.<br />
	{$current_time} - 目前时间.<br />
	{$member.email} - 会员邮件地址.<br />
	{$member.link} - 会员网址.<br />
	{$member.id} - 会员编号.<br />
	{$member.name} - 会员名称.<br />
	{$latest_member.link} - 最新注册会员网址.<br />
	{$latest_member.id} - 最新注册会员编号.<br />
	{$latest_member.name} - 最新注册会员名称.';
$helptxt['attachmentEncryptFilenames'] = '加密附件可让你安全的重复使用同样的文件名及 .php 文件. 但是数据库如果发生错误会较难修复.';

$helptxt['failed_login_threshold'] = '设定错误登录的数量, 之后转向到忘记密码页.';
$helptxt['oldTopicDays'] = '如许可这一选项，当用户想回复一个在设定时间（天）里没有任何回帖的主题的时候，自动给该用户一个提示。设置为0则关闭这一功能。';
$helptxt['edit_wait_time'] = '发帖后可修改的时间限制 (秒).';
$helptxt['edit_disable_time'] = '设置用户多少秒内不得编辑他发布的帖子。设置为0则关闭这一功能。<br /><br /><i>注意：这种设置对能够编辑用户帖子的特权用户如斑竹无效。</i>';
$helptxt['enableSpellChecking'] = '允许拼字检查. 必须要安装 pspell 链接库到您的服务器里及 PHP 设定使用 pspell. 您的服务器 ' . (function_exists('pspell_new') == 1 ? '有' : '没有') . ' 安装 pspell.';
$helptxt['lastActive'] = '显示时间已内的在线会员. 默认值是15分钟.';

$helptxt['autoOptDatabase'] = '定时优化数据库. 设定为一天可让您定时每天进行优化. 你可以输入在线会员的最大值, 以免服务器负荷过重.';
$helptxt['autoFixDatabase'] = '自动修复数据库的表格. 通成这是修复数据库的唯一办法. 当修复时会自动邮件通知您.';

$helptxt['enableParticipation'] = '图示会员发帖的主题.';

$helptxt['db_persist'] = '延续线路使服务器永远在线. 通常会增加论坛速度但是有些主机会产生问题.';

$helptxt['queryless_urls'] = '实现SEF，更改论坛的网址让搜索引擎更容易找到, 论坛网址会以.html方式显示. 这会像 index.php/action_profile/u_1和http://smf.cn/bbs/index.php/board,1.0.html<br /><br />自动检测结果：这项功能' . (strpos(php_sapi_name(), 'apache') !== false ? '' : '不') . '可用在您的服务器，你可以启动该功能。';
$helptxt['countChildPosts'] = '勾选该项则在论坛首页显示分论坛的帖子数包括其子论坛的帖子数。<br /><br />注意：这将使得论坛速度大为降低。';
$helptxt['fixLongWords'] = '这项功能可缩短长句子以免破坏论坛的外观，这个选项不应该设置在40以内。';

$helptxt['who_enabled'] = '这项功能可让你允许或禁止观看同区浏览的会员.';

$helptxt['recycle_enable'] = ' 将 &quot;回收帖子&quot; 移到到选择的版块.';

$helptxt['enableReportPM'] = '这一选项将允许用户将他收到的个人站内短信发送给管理员。可用于严格的用户管理。';
$helptxt['max_pm_recipients'] = '这个选项可以让你设置会员发送短信允许的最大收信人数目，这有可能可以帮助你解决滥用短信系统干扰会员的问题，注意这里输入的限制并不会影响有权限发新闻剪辑公告的成员。如果不限制，请输入 0。';
$helptxt['pm_posts_verification'] = '该设置将强制用户每次在发送短信息前输入一个图形验证码。当发贴量在设置的值以下的用户才需要填写验证码——该功能应该可以有效防止垃圾广告程序。（默认值5）';
$helptxt['pm_posts_per_hour'] = '该设置将限制用户在一个小时内的短信息发送频率，本设置不会影响管理员和斑竹。（默认值20）';

$helptxt['default_personalText'] = '设定预设的 &quot;个人信息.&quot;';

$helptxt['modlog_enabled'] = '纪录所有管理动作.';

$helptxt['guest_hideContacts'] = '如果使用这项功能, 会员的电子邮件和实时通讯帐号将不会对访客显示.';

$helptxt['registration_method'] = '您可以设定哪种会员注册的方法, 您可以选择:<br /><br />
	<ul>
		<li>
			<b>禁止注册:</b><br />
				禁止新会员注册.<br />
		</li><li>
			<b>马上注册</b><br />
				新注册会员可马上发帖.<br />
		</li><li>
			<b>启用帐号</b><br />
				新注册用户会收到论坛的启用邮件, 用户必须启用帐号才可成为会员.<br />
		</li><li>
			<b>核准帐号</b><br />
				新注册用户必须等管理员核准才可成为会员.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = '当使用这项功能时, 更改电子邮件的会员必须重新启用帐号';
$helptxt['send_welcomeEmail'] = '当使用这项功能时，注册会员会收到欢迎信件';
$helptxt['password_strength'] = '决定注册用户密码的安全程度。越&quot;强&quot;密码越安全。
    可能的设置有：
    <ul>
        <li><b>低：</b> 密码必须不少于四个字符。</li>
        <li><b>中：</b> 密码必须不少于八个字符，且不包括用户名和Email地址。</li>
        <li><b>高：</b> 在上面“中”等的基本上还要求密码由大小写字母及数字混合组成。</li>
    </ul>';

$helptxt['coppaAge'] = '数字决定达到多少岁才能访问论坛。
    注册时会询问其年龄，如低于该年龄则被拒绝注册或等待其父母的批准（你可设置成其中之一）
    如为“0”则与年龄有关的限制都无效。';
$helptxt['coppaType'] = '如已作年龄限制，则：
    <ul>
        <li>
            <b>拒绝注册：</b><br />
                拒绝小于限制年龄者注册<br />
        </li><li>
            <b>需要父母（监护人）的批准</b><br />
               将给其父母（监护人）发送一份详细的邮件，邮件中包含收取回执的管理员的email或传真信息。
        </li>
    </ul>';
$helptxt['coppaPost'] = '需要提供管理员的联络信息（至少包括管理员的email或传真号码）以确保可以收到未成年人父母的回执。';

$helptxt['allow_hideOnline'] = '允许使用此项功能可让会员隐藏自己, 只有管理员才能看到他们. 如果不允许, 只有版主才能隐藏登录数据.';
$helptxt['allow_hideEmail'] = '使用这项功能可让会员隐藏他们的电子邮件, 只有管理员或版主可看到.';

$helptxt['latest_support'] = '这里会显示您服务器常发生问题及错误, 但是不会被纪录下来.<br /><br />如果显示 &quot;取得支持信息中......&quot;, 表示你无法连接到 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = '这里会显示最评价高的插件及软件, 还有安装方法.<br /><br />如果未显示任何东西表示你无法连接到 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = '这里会显示 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> 的最新及最受欢迎的风格. 如果未显示任何东西表示您无法连接到 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = '因为安全问题, 您问题的答案 (以及密码) 都是用 SMF 的方法来加密. SMF 有办法确认您的身分如果您提供正确的答案, 但是从不会显示您的答案或密码.';
$helptxt['moderator_why_missing'] = '您必须到 <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">版块管理</a> 来选择版主.';

$helptxt['permissions'] = '权限页面允许你设定组所能做的事.<br /><br />你可以从选单来更改权限, 然后套用到版块.';
$helptxt['permissions_board'] = '如果版块的设定值是 \'全区性,\' 表示这个版块无特别的权限.  \'区域性\' 表示版块有自己的权限 - 跟全区性不同. 如果有些版块的权限跟别区不同, 您可以用区域性设定, 这样您就不用一个版块一个版块设定.';
$helptxt['permissions_quickgroups'] = '您可以用 &quot;预设&quot; 权限 - 普通表示 \'无特别权限\', 限制表示 \'访客的权限\', 版主表示 \'版主的权限\', 及 \'维修权限\' 表示跟版主接近的权限.';
$helptxt['permissions_deny'] = '“拒绝权限”可以帮助你取消特定会员的权限，你可将一个该会员组加上\'拒绝\'标记。<br /><br />小心使用，因为同时又属于其它会员组的会员仍然会被取消相应权限。';
$helptxt['permissions_postgroups'] = '允许“与帖子数”相关的会员组享受特殊权限。即在非特殊群组的会员组的权限之外<em>增加</em>额外的权限。';
$helptxt['permissions_by_board'] = '将允许你为不同子论坛的不同会员组设置不同的权限。默认时子论坛与全局权限设置是相同的，但在此你可以让某个子论坛有特定的权限设置。';
$helptxt['membergroup_guests'] = '游客组是所有未登录的来访者。';
$helptxt['membergroup_regular_members'] = '非特殊群组的会员包括所有不属于特定会员组的所有登录者。';
$helptxt['membergroup_administrator'] = '管理员拥有网站的最高权限，不受任何限制。';
$helptxt['membergroup_moderator'] = '版主组的权限仅当他在自己的版块里时才有效，在其它地方他与普通会员享受同样的权限。';
$helptxt['membergroups'] = 'SMF的论坛使用两种的会员组, 他们是:
	<ul>
		<li><b>特殊群组:</b>特殊群组是版主必须指定的会员组. 如要加入某位会员进入特殊群组, 请到会员的个人资料里的 &quot;帐号设定&quot; 里面.
		<li><b>文章群组:</b>文章群组是以会员的帖子数来分类的群组.
	</ul>';

$helptxt['calendar_how_edit'] = '您可以点名称旁的红色 (*) 来修改事件.';

$helptxt['maintenance_general'] = '这里你可以优化数据库 (变小及变快!), 但是您必须要有最新的版本. 优化数据库可让您找出错误, 重新计算, 及删除纪录.<br /><br />除了无法修复的错误, 尽量避免使用最后两项.';
$helptxt['maintenance_backup'] = '这里您可以备份帖子, 设定, 会员数据, 及其它消息.<br /><br />建议您作好防御措施, 要时常备份以免无法修复论坛的错误.';
$helptxt['maintenance_rot'] = '这里您可以完全的删除旧帖. 删除的帖子将无法恢复. 建议您先备份在删除, 以免删除了您要的帖子. <br /><br />使用这项功能时请特别注意.';

$helptxt['avatar_allow_server_stored'] = '您可以允许会员使用您服务器里的头像. 头象通常保存在 Avatars 文件夹里.<br />如果您要使用不同种类的头像, 您可以建立新的文件夹在 Avatars 下面.';
$helptxt['avatar_allow_external_url'] = '您可以允许会员链接其它网址的头像. 您必须注意会员链接的头像不会太大或使用不正当头像.<br /><br />记得会员必须要有特定的权限才能使用这项功能.';
$helptxt['avatar_download_external'] = '如允许该项，将通过用户提供的链接（URL）下载头像。';
$helptxt['avatar_allow_upload'] = '这项设定跟链接头像差不多, 但是全部的头像会保存到您的主机里, 会员也不必担心要把头像放到其它的网址里. <br /><br />注意头像占的容量可能会非常大.';
$helptxt['avatar_download_png'] = 'PNGs 档通常较大, 但是压缩品质较好. 如果您不允许 PNG 文件, 图案会使用 JPEG. JPEG 文件较小但是品质较差.';

$helptxt['disableHostnameLookup'] = '这项禁止使用搜索主机名称, 但是有些服务器会变慢. 可能会让您禁止用户的方法较无作用.';

$helptxt['search_weight_frequency'] = '用来找寻最接近的搜索结果.';
$helptxt['search_weight_age'] = '用来找寻最接近的搜索结果. 此项功能将会先搜索最新的帖子, 在搜索旧的帖子.';
$helptxt['search_weight_length'] = '用来找寻最接近的搜索结果. 此项功能会先搜索帖子数最多的主题.';
$helptxt['search_weight_subject'] = '用来找寻最接近的搜索结果. 此项功能会先搜索主题里的标题.';
$helptxt['search_weight_first_message'] = '用来找寻最接近的搜索结果. 此项功能会先搜索主题里的第一篇帖子.';
$helptxt['search_weight_sticky'] = '权重是用来决定搜索结果相关程序的。改变重要程序来配置你论坛里面哪些搜索的内容的重要程序。举例：一个新闻站点， 可能想要的是“与帖子发表时间相关的搜索权重”。所有值应该根据其他相关的项算出来而且是正数。<br /><br />这些因素会因为是否置顶和匹配程序影响。';
$helptxt['search'] = '调整搜索功能的设置。请注意你如果你想设置谁能使用搜索功能，请在 管理平台的\'权限管理\'中设置';
$helptxt['search_why_use_index'] = '一个搜索索引可以极大程序地改进论坛搜索引擎的性能，特别是论坛上的数据很多的时候，没有索引的搜索将会增加搜索的时间和增加数据库服务器的负载，如果你的论坛有超过5万条数据，你可能需要考虑创建一个索引来保证论坛的高性能。<br /><br />注意的是，索引会占用挺多的数据库空间。全文索引是 MySQL 内置的索引功能，是一个相关实体的压缩版（大家占用帖子数据表相同的空间），但是很多常见词不会被索引，而且某些查询会很慢。自定义索引经常会更加大一点（看你的配置，最大可能是你帖子表的三倍），但是性能和稳定性会更好。';

$helptxt['see_admin_ip'] = 'IP地址可让版主跟踪会员的动作, 但是有些IP经常更改. 会员也可以看到自己的IP.';
$helptxt['see_member_ip'] = '只有会员自己和版主可以看到IP. 其它的会员无法看到您的IP, 您也不能看到其它会员的IP, 除非您是管理员.';

$helptxt['ban_cannot_post'] = '\'不能发帖（cannot post）\' 将对受禁用户把论坛设置为“只读”模式。这类用户不能发新帖、回帖、发站内短信（可以读取别人发给他的站内短信）、投票。<br /><br />
系统会自动将这些提示给受禁用户。';

$helptxt['posts_and_topics'] = '
    <ul>
        <li>
            <b>帖子设置</b><br />
            修改站内短信的相关设置。并可开放拼写检查功能。
        </li><li>
            <b>BBCode</b><br />
            允许使用BBCode来控制论坛内容的排版，可以指定能用和不能用的BBCode。
        </li><li>
            <b>禁语</b>
            可以禁用某些词，允许自动用设定的词替换某些词（如脏话）。
        </li><li>
            <b>主题设置</b>
            每页多少主题， 达到多少回帖的主题才是热帖，等等
        </li>
    </ul>';

?>