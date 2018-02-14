<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'SMF论坛安装程序';
$txt['installer_language'] = '语言';
$txt['installer_language_set'] = '设置';
$txt['congratulations'] = '恭喜你, 安装程序已经完成!';
$txt['congratulations_help'] = '如果您在任何时候需要帮助, 请连上<a href="http://www.smf.cn" target="_blank">SMF中文开发推广网站</a>或<a href="http://www.simplemachines.org/community/index.php">SMF论坛英文官方网站</a>以寻求协助.';
$txt['still_writable'] = '您的安装目录仍然可以读写. 基于某些安全问题，我们建议您将安装目录设定为不可读取.';
$txt['delete_installer'] = '按此直接删除安装文件 (install.php). ';
$txt['delete_installer_maybe'] = '<i>（但是在某些服务器尚无法成功删除）</i>';
$txt['go_to_your_forum'] = '现在您可以看到 <a href="%s">您刚安装完成的论坛</a>. 建议您先进入管理中心看看.';
$txt['good_luck'] = '祝您好运! <br />Simple Machines <br />SMF 中文站(smf.cn)';

$txt['user_refresh_install'] = '论坛已重新整理';
$txt['user_refresh_install_desc'] = '安装程序找到一些已经存在的数据表.<br />任何遗漏的数据表已经重新增入, 但是没有删除任何存在的数据表.';

$txt['default_topic_subject'] = '欢迎使用SMF!';
$txt['default_topic_message'] = '欢迎光临SMF论坛!<br /><br />希望您会喜欢这个论坛.&nbsp; 如果您有问题, 请到 [url=http://www.smf.cn]SMF中文开发推广网站[/url]或[url=http://www.simplemachines.org/community/index.php]官方网站（是一个支持中文交流的多国语言网站，但主要是英文）[/url]寻求帮助。<br /><br />谢谢!<br />SMF中文开发推广网站';
$txt['default_board_name'] = '一般论坛';
$txt['default_board_description'] = '任何讨论主题都可在此发表.';
$txt['default_category_name'] = '一般分类';
$txt['default_time_format'] = '%B %d, %Y, %I:%M:%S %p';
$txt['default_news'] = 'SMF - 新鲜出炉！';
$txt['default_karmaLabel'] = '评价:';
$txt['default_karmaSmiteLabel'] = '[鸡蛋]';
$txt['default_karmaApplaudLabel'] = '[鲜花]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nroot\\管理员';
$txt['default_smileyset_name'] = '默认';
$txt['default_classic_smileyset_name'] = '经典';
$txt['default_theme_name'] = 'SMF默认风格 - Core';
$txt['default_classic_theme_name'] = '经典YaBB SE风格';
$txt['default_babylon_theme_name'] = 'Babylon 风格';

$txt['default_administrator_group'] = '管理员';
$txt['default_global_moderator_group'] = '总版主';
$txt['default_moderator_group'] = '版主';
$txt['default_newbie_group'] = '新手';
$txt['default_junior_group'] = '初级会员';
$txt['default_full_group'] = '中级会员';
$txt['default_senior_group'] = '高级会员';
$txt['default_hero_group'] = '超级会员';

$txt['default_smiley_smiley'] = '笑脸';
$txt['default_wink_smiley'] = '眨眼';
$txt['default_cheesy_smiley'] = '偷笑';
$txt['default_grin_smiley'] = ' 咧嘴笑';
$txt['default_angry_smiley'] = '生气';
$txt['default_sad_smiley'] = '悲伤';
$txt['default_shocked_smiley'] = '震惊';
$txt['default_cool_smiley'] = 'Cool';
$txt['default_huh_smiley'] = '啊？';
$txt['default_roll_eyes_smiley'] = '嘘……';
$txt['default_tongue_smiley'] = '吐舌头';
$txt['default_embarrassed_smiley'] = '尴尬';
$txt['default_lips_sealed_smiley'] = '闭嘴';
$txt['default_undecided_smiley'] = '犹豫的';
$txt['default_kiss_smiley'] = '亲吻';
$txt['default_cry_smiley'] = '哭';
$txt['default_evil_smiley'] = '使坏';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = '按此';
$txt['error_message_try_again'] = '重新执行安装程序.';
$txt['error_message_bad_try_again'] = '略过错误, 继续安装, 但是请注意, 我们 <i>非常不建议</i> 您这么做.';

$txt['install_settings'] = '基本设置   &nbsp;<a href="http://www.smf.cn" target=_blank>需要帮助？</a>';
$txt['install_settings_info'] = '只需要您设定几个选项 ;).';
$txt['install_settings_name'] = '论坛名称';
$txt['install_settings_name_info'] = '这是您论坛的名称, 例如 &quot;测试论坛&quot;.';
$txt['install_settings_name_default'] = '我的论坛';
$txt['install_settings_url'] = '论坛网址';
$txt['install_settings_url_info'] = '请填入您论坛的网址 <b>但请勿加上结尾的斜线 \'/\'!</b>.<br />一般来说, 您不用更改这个项目, 显示在画面上的通常就是正确的结果.';
$txt['install_settings_compress'] = 'Gzip输出';
$txt['install_settings_compress_title'] = '将网页压缩发送以节省带宽.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = '可能有些服务器不提供本功能, 但是若有提供的话, 将可以节省您非常大的带宽以及流量. <br /><a href="install.php?obgz=1&amp;pass_string=GZIP检查通过" onclick="return reqWin(this.href, 200, 60);" target=_blank>请按此检查</a>GZIP压缩功能 (应该会显示GZIP检查通过.)';
$txt['install_settings_dbsession'] = '数据库运行态';
$txt['install_settings_dbsession_title'] = '使用数据库代替文件.';
$txt['install_settings_dbsession_info1'] = '这项功能通常对运行最有效也最可靠.';
$txt['install_settings_dbsession_info2'] = '尽管您的服务器可能无法使用这项功能, 但可以试试。';
$txt['install_settings_utf8'] = 'UTF-8 编码';
$txt['install_settings_utf8_title'] = '使用 UTF-8 作为默认编码（smf.cn提示您，请重新下载utf-8版的语言包，本语言包不支持！！）';
$txt['install_settings_utf8_info'] = '本选项可以让你在数据库和论坛里使用国际化的UTF-8，当你论坛里使用多个国家语言的时候特别有用。';
$txt['install_settings_stats'] = '允许状态收集';
$txt['install_settings_stats_title'] = '允许Simple Machines每月收集基本数据';
$txt['install_settings_stats_info'] = '如果允许，Simple Machines（英文官方）将每月对你的论坛进行基本情况收集，这将让我们了解程序的哪些配置需要优化，请多情况，请访问我们的介绍页（<a href="http://www.simplemachines.org/about/stats.php" target="_blank">英文</a>）（<a href="http://www.smf.cn/bbs/index.php?topic=835" target="_blank">中文版本</a>）';
$txt['install_settings_proceed'] = '继续';

$txt['mysql_settings'] = 'MySQL数据库主机设定';
$txt['mysql_settings_info'] = '您需要设定关于MySQL数据库的信息. 若是您不知道以下信息, 请向您的主机管理员或服务提供商索取.';
$txt['mysql_settings_server'] = 'MySQL数据库主机名称';
$txt['mysql_settings_server_info'] = '通常是localhost, 因此若您不知道, 请输入localhost应该就没有问题.';
$txt['mysql_settings_username'] = 'MySQL用户帐号';
$txt['mysql_settings_username_info'] = '请输入您链接到MySQL的用户帐号名称.<br />若您不知道的话, 可以试试您的ftp帐号, 应该是一样的.';
$txt['mysql_settings_password'] = 'MySQL用户密码';
$txt['mysql_settings_password_info'] = '请输入您MySQL的用户密码.<br />若您不知道的话, 同样可以试试您的ftp密码, 应该也是相同的.';
$txt['mysql_settings_database'] = 'MySQL数据库名称';
$txt['mysql_settings_database_info'] = '请输入您想要SMF论坛保存数据在内的数据库名称.<br />若这个数据库不存在, 安装程序将会建立这个数据库以保存数据.';
$txt['mysql_settings_prefix'] = 'MySQL数据表前导符';
$txt['mysql_settings_prefix_info'] = '数据库内每个数据表的前导符, 例如前置aaa的话, 数据表将被命名为aaa_原数据表名称  <br>请勿以相同的前导符安装两个论坛!</b>这样将会造成数据的覆写。<br />前导符的功能是让您可以在同一个数据库内安装一个以上的SMF论坛.';

$txt['user_settings'] = '建立您的帐号';
$txt['user_settings_info'] = '安装程序现在会为您建立管理员帐号.';
$txt['user_settings_username'] = '您的帐号名称';
$txt['user_settings_username_info'] = '请选择您想要使用的登录帐号名称<br />帐号将不能更改, 但是您可以更改您显示的昵称.';
$txt['user_settings_password'] = '您的密码';
$txt['user_settings_password_info'] = '请输入您想要使用的密码, 并且把它记牢!';
$txt['user_settings_again'] = '您的密码';
$txt['user_settings_again_info'] = '(输入两次以免错误.)';
$txt['user_settings_email'] = 'Email信箱地址';
$txt['user_settings_email_info'] = '请输入您的EMAIL信箱地址. <b>必须输入正确可用的信箱地址.</b>';
$txt['user_settings_database'] = 'MySQL数据库密码';
$txt['user_settings_database_info'] = '由于安全因素, 安装程序需要您输入MYSQL数据库的密码才能够为您建立管理员帐号.';
$txt['user_settings_proceed'] = '完成';

$txt['ftp_setup'] = 'FTP联机信息';
$txt['ftp_setup_info'] = '安装程序无法通过FTP进入您的主机中修改文件的权限, 请您手动将这些文件的权限设定为可擦写..';
$txt['ftp_server'] = '服务器';
$txt['ftp_server_info'] = '请输入您的FTP服务器地址以及连接端口号.';
$txt['ftp_port'] = '埠号';
$txt['ftp_username'] = '用户帐号';
$txt['ftp_username_info'] = '入FTP用的用户帐号. <i>这个帐号不会被保存在任何地方, 请放心.</i>';
$txt['ftp_password'] = '密码';
$txt['ftp_password_info'] = '登录用的密码. <i>也请放心, 这个数据不会被保存.</i>';
$txt['ftp_path'] = '安装路径';
$txt['ftp_path_info'] = '这是在您主机上, SMF安装的<i>相对路径</i>.';
$txt['ftp_path_found_info'] = '已自动侦测到路径';
$txt['ftp_connect'] = '链接';
$txt['ftp_setup_why'] = '这项动作的理由?';
$txt['ftp_setup_why_info'] = '有些文件需要可擦写的权限. 安装程序可自动帮您更改权限, 如果不成功请自行更改以下文件 (777 或 775 为可擦写):';
$txt['ftp_setup_again'] = '测试这些文件可否读写.';

$txt['error_php_too_low'] = '警告! PHP版本过低! 请联络您的主机管理人员.';
$txt['error_missing_files'] = '安装文件不完全! 请重新上传一次整套SMF论坛再重新安装一次.';
$txt['error_session_save_path'] = '请联络您的主机管理人员, 贵主机PHP的 <b>session.save_path</b> 设定有误. 请确定路径是存在的.<br />';
$txt['error_windows_chmod'] = '您使用的主机是WINDOWS, 但是有某些文件无法读写, 请联络您的主机管理人员开放您读写文件的权限. 以下的文件或文件夹必须可擦写:';
$txt['error_ftp_no_connect'] = '无法使用您提供的信息登录您的FTP主机.';
$txt['error_mysql_connect'] = '无法通过您提供的信息登录您的MySQL主机<br /><br />若您有不了解的数据, 例如用户帐号与密码, 请联络您的主机管理人员.';
$txt['error_mysql_too_low'] = '您主机所使用的MYSQL数据库版本过旧, 请联络您的主机管理人员将MYSQL更新.';
$txt['error_mysql_database'] = '安装程序无法链接到 &quot;<i>%s</i>&quot; 数据库. 在某些主机公司的服务器上, 您需要先到您的帐号管理中心（例如CPANEL）中打开MYSQL数据库才能够使用.';
$txt['error_mysql_queries'] = '某些查询指令无法正常工作, 这可能是由于MYSQL的版本过旧或是您使用的是开发中的MYSQL版本.<br /><br />以下是技术信息:';
$txt['error_mysql_queries_line'] = '行 #';
$txt['error_mysql_missing'] = '安装程序无法侦测PHP支持的MySQL. 请寻问您的管理员PHP是否跟MySQL一起编译, 或确定主机可以使用需要的扩充功能.';
$txt['error_session_missing'] = '安装程序无法侦测PHP支持的session. 请寻问您的管理员PHP是否跟session一起编译, 或确定主机可以使用需要的扩充功能';
$txt['error_user_settings_again_match'] = '您输入的两次密码不相同!';
$txt['error_user_settings_taken'] = '很抱歉, 已经有用户使用了相同的帐号以及密码了.<br /><br />无法用该用户名创建新帐号.';
$txt['error_user_settings_query'] = '建立论坛管理员帐号时发生错误, 以下是错误信息:';
$txt['error_subs_missing'] = '无法找到文件: Sources/Subs.php file. 请重新上传此文件.';
$txt['error_mysql_alter_priv'] = '你填写的MySQL帐号没有对数据库进行修改、创建、删除表等方面的权限，将会使得SMF不能正常工作。';
$txt['error_versions_do_not_match'] = '安装程序侦测到另一个版本的 SMF。如果您是要升级论坛，请用升级程序。<br /><br />如果不是要升级，您可以用不同的安装数据，或备份数据后将论坛的数据删除在进行安装。';
$txt['error_mod_security'] = '安装程序检测到你的服务器安装了 mod_security 模块，Mod_security 会在SMF取得数据前阻止提交表单。SMF 有一个内建的比 mod_security 更有效而且不会妨碍提交表单数据的扫描器。<br /><br /><a href="http://www.smf.cn/bbs/index.php/topic,220.0.html">关于禁用 mod_security 的更多信息。</a>';
$txt['error_utf8_mysql_version'] = '你服务器上当前版本的数据库不支持使用UTF-8编码集，你仍然可以继续安装SMF，但是不允许选择UTF-8模式，如果你希望以后使用UTF-8模式（例如你的服务器上的MYSQL升级到4.1以上），你可以在管理面板转换你的论坛到UTF-8编码。（SMF.CN注：关于编码等问题，欢迎先咨询我们的意见，请在论坛提出）';

?>