<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'Инсталатор на SMF';
$txt['installer_language'] = 'Език';
$txt['installer_language_set'] = 'Ползвай';
$txt['congratulations'] = 'Поздравления. Процесът по инсталиране завърши успешно.';
$txt['congratulations_help'] = 'If at any time you need support, or SMF fails to work properly, please remember that <a href="http://www.simplemachines.org/community/index.php">help is available</a> if you need it.';
$txt['still_writable'] = 'Записването в инсталационната директория е все още възможно.  It\'s a good idea to chmod it so that it is not writable for security reasons.';
$txt['delete_installer'] = 'Click here to delete this install.php file now. <i>(doesn\'t work on all servers.)</i>';
$txt['delete_installer_maybe'] = '<em>(не работи с всеки сървър.)</em>';
$txt['go_to_your_forum'] = 'Можете да посетите <a href="%1$s">вашия новоинсталиран форум</a> и да го ползвате.  Първо трябва да се впишете, за да ползвате центъра за администриране..';
$txt['good_luck'] = 'Късмет!<br />Simple Machines';

$txt['user_refresh_install'] = 'Forum Refreshed';
$txt['user_refresh_install_desc'] = 'Една или повече от таблиците, които трябва да бъдат създадени вече съществуват.<br />Липсващите таблици са пресъздадени и попълнени с данните по подразбиране, без да бъде изтривана информация от съществуващите таблици.';

$txt['default_topic_subject'] = 'Добре дошли в SMF!';
$txt['default_topic_message'] = 'Добре дошли в Simple Machines Forum!<br /><br />Надяваме се, че ползването на форума ще бъде наслада за вас!&nbsp; Ако възникне проблем, не се притеснявайте да [url=http://www.simplemachines.org/community/index.php]ни попитате за помощ[/url].<br /><br />Благодарим ви!<br />Simple Machines';
$txt['default_board_name'] = 'Обща дискусия';
$txt['default_board_description'] = 'Можете да говорите за каквото си пожелаете в раздела.';
$txt['default_category_name'] = 'Обща категория';
$txt['default_time_format'] = '%B %d, %Y, %I:%M:%S %p';
$txt['default_news'] = 'SMF - току-що инсталиран!';
$txt['default_karmaLabel'] = 'Рейтинг:';
$txt['default_karmaSmiteLabel'] = '[понижи]';
$txt['default_karmaApplaudLabel'] = '[повиши]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nroot';
$txt['default_smileyset_name'] = 'Набор от Alienine';
$txt['default_classic_smileyset_name'] = 'Classic';
$txt['default_theme_name'] = 'Тема по подразбиране за SMF - Curve';
$txt['default_classic_theme_name'] = 'Класическа (YaBB SE) тема';
$txt['default_babylon_theme_name'] = 'Тема Babylon';

$txt['default_administrator_group'] = 'Администратор';
$txt['default_global_moderator_group'] = 'Глобален модератор';
$txt['default_moderator_group'] = 'Модератор';
$txt['default_newbie_group'] = 'Начинаещ';
$txt['default_junior_group'] = 'Младши потребител';
$txt['default_full_group'] = 'Пълноправен потребител';
$txt['default_senior_group'] = 'Старши потребител';
$txt['default_hero_group'] = 'Потребител герой';

$txt['default_smiley_smiley'] = 'Усмивчица';
$txt['default_wink_smiley'] = 'Намигване';
$txt['default_cheesy_smiley'] = 'Смотан';
$txt['default_grin_smiley'] = 'Ухилен';
$txt['default_angry_smiley'] = 'Ядосан';
$txt['default_sad_smiley'] = 'Тъжен';
$txt['default_shocked_smiley'] = 'Шокиран';
$txt['default_cool_smiley'] = 'Готин';
$txt['default_huh_smiley'] = 'Ъ?';
$txt['default_roll_eyes_smiley'] = 'Завърти очи';
$txt['default_tongue_smiley'] = 'Плезещ се';
$txt['default_embarrassed_smiley'] = 'Засрамен';
$txt['default_lips_sealed_smiley'] = 'Млъкнал';
$txt['default_undecided_smiley'] = 'Нерешителен';
$txt['default_kiss_smiley'] = 'Целувчица';
$txt['default_cry_smiley'] = 'Плачещ';
$txt['default_evil_smiley'] = 'Зъл';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'Кликнете тук';
$txt['error_message_try_again'] = 'за нов опит.';
$txt['error_message_bad_try_again'] = 'за инсталиране въпреки това. Имайте предвид, че това <em>НЕ</em>  е препоръчително.';

$txt['install_settings'] = 'Basic Settings';
$txt['install_settings_info'] = 'Just a few things for you to setup ;).';
$txt['install_settings_name'] = 'Име на форума';
$txt['install_settings_name_info'] = 'Името на форума, напр. &quot;TФорум за тестване&quot;.';
$txt['install_settings_name_default'] = 'Моята общност';
$txt['install_settings_url'] = 'Адрес на форума';
$txt['install_settings_url_info'] = 'Адресът на форума ви <strong>без "/" накрая!</strong>.<br />Обикновено може да оставите стойността по подразбиране (би трябвало да е правилна.).';
$txt['install_settings_compress'] = 'Gzip компресиранеt';
$txt['install_settings_compress_title'] = 'Компресирай изпращаните данни, за да се щади връзката.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'This function does not work properly on all servers, but can save you a lot of bandwidth.<br />Click <a href="install.php?obgz=1&amp;pass_string=PASS" onclick="return reqWin(this.href, 200, 60);">here</a> to test it. (it should just say "PASS".)';
$txt['install_settings_dbsession'] = 'Сесии на базата от данни';
$txt['install_settings_dbsession_title'] = 'Ползвай базата от данни за сесиите вместо файлове.';
$txt['install_settings_dbsession_info1'] = 'Обикновено това е най-добрия вариант (прави сесиите по-зависими).';
$txt['install_settings_dbsession_info2'] = 'It doesn\'t seem like this feature will work on your server, but you can try it.';
$txt['install_settings_utf8'] = 'Знаков набор UTF-8';
$txt['install_settings_utf8_title'] = 'Ползвай знаковия набор UTF-8 по подразбиране';
$txt['install_settings_utf8_info'] = 'Функцията прави възможно ползването на международния знаков набор UTF-8 от форума и базата от данни. Полезно е при работа с няколко езика, които ползват различни знакови набори.';
$txt['install_settings_stats'] = 'Изпращане на статистически данни';
$txt['install_settings_stats_title'] = 'Разреши на Simple Machines да получава основни статистически данни ежемесечно.';
$txt['install_settings_stats_info'] = 'Ще позволи на Simple Machines да посещават веднъж на месец сайта и да получава основни статистически данни. Това ще ни улесни във вземането на решения касаещи оптимизирането на продукта към определени конфигурации. Повече информация можете да намерите на нашата <a href="http://www.simplemachines.org/about/stats.php" target="_blank">информационна страница</a>.';
$txt['install_settings_proceed'] = 'Изпълни';

$txt['mysql_settings'] = 'MySQL Server Settings';
$txt['mysql_settings_info'] = 'These are the settings to use for your MySQL server.  If you don\'t know the values, you should ask your host what they are.';
$txt['mysql_settings_server'] = 'MySQL server name';
$txt['mysql_settings_server_info'] = 'This is nearly always localhost - so if you don\'t know, try localhost.';
$txt['mysql_settings_username'] = 'MySQL username';
$txt['mysql_settings_username_info'] = 'Fill in the username you need to connect to your MySQL database here.<br />If you don\'t know what it is, try the username of your ftp account, most of the time they are the same.';
$txt['mysql_settings_password'] = 'MySQL password';
$txt['mysql_settings_password_info'] = 'Here, put the password you need to connect to your MySQL database.<br />If you don\'t know this, you should try the password to your ftp account.';
$txt['mysql_settings_database'] = 'MySQL database name';
$txt['mysql_settings_database_info'] = 'Fill in the name of the database you want to use for SMF to store its data in.<br />If this database does not exist, this installer will try to create it.';
$txt['mysql_settings_prefix'] = 'MySQL table prefix';
$txt['mysql_settings_prefix_info'] = 'The prefix for every table in the database.  <b>Do not install two forums with the same prefix!</b><br />This value allows for multiple installations in one database.';

$txt['user_settings'] = 'Вашият акаунт';
$txt['user_settings_info'] = 'Създаване администраторски акаунт.';
$txt['user_settings_username'] = 'Потребителско име';
$txt['user_settings_username_info'] = 'Изберете име, с което да се вписвате.<br />Веднъж зададено не може да се променя, но потребителското име (display name) може да бъде променяно.';
$txt['user_settings_password'] = 'Парола';
$txt['user_settings_password_info'] = 'Въведете парола и я запомнете!';
$txt['user_settings_again'] = 'Повторете паролата';
$txt['user_settings_again_info'] = 'Само за потвърждение.';
$txt['user_settings_email'] = 'Е-майл';
$txt['user_settings_email_info'] = 'Въведете е-майл адрес.  <strong>Необходимо е да е реален.</strong>';
$txt['user_settings_database'] = 'MySQL Database Password';
$txt['user_settings_database_info'] = 'Поради съображения за сигурност е необходимо е да въведете паролата на базата от данни, преди да бъде създаден администраторският акаунт.';
$txt['user_settings_proceed'] = 'Продължи';

$txt['ftp_setup'] = 'Информация за FTP връзката';
$txt['ftp_setup_info'] = 'Грешки свързани с правата за записване на файлове, могат да се отстранят посредством FTP връзка. Ако не стане, то тогава трябва да промените правата за записване на файловете собственоръчно.  За момента SSL криптирани връзки не се поддържат.';
$txt['ftp_server'] = 'Сървър';
$txt['ftp_server_info'] = 'Сървър и порт (за FTP сървъра).';
$txt['ftp_port'] = 'Порт';
$txt['ftp_username'] = 'Потребителско име';
$txt['ftp_username_info'] = 'Потребителско име за вписване. <em>Няма да бъде съхранено.</em>';
$txt['ftp_password'] = 'Парола';
$txt['ftp_password_info'] = 'Парола за вписване. <em>Няма да бъде съхранена.</em>';
$txt['ftp_path'] = 'Install Path';
$txt['ftp_path_info'] = 'This is the <i>relative</i> path you use in your FTP server.';
$txt['ftp_path_found_info'] = 'The path in the box above was automatically detected.';
$txt['ftp_connect'] = 'Свържи се';
$txt['ftp_setup_why'] = 'Защо е необходима тази стъпка?';
$txt['ftp_setup_why_info'] = 'Some files need to be writable for SMF to work properly.  This step allows you to let the installer make them writable for you.  However, in some cases it won\'t work - in that case, please make the following files 777 (writable):';
$txt['ftp_setup_again'] = 'за повторно тестване на правата за записване.';

$txt['error_php_too_low'] = 'Предупреждение! Явно версията на PHP, инсталирана на вашия сървър, не отговаря на <strong>минималните изисквания за инсталиране на SMF</strong>.<br />If you are not the host, you will need to ask your host to upgrade, or use a different host - otherwise, please upgrade PHP to a recent version.<br /><br />Ако сте уверени, че версията на PHP отговаря на изискванията можете да продължите, макар това да не препоръчително.';
$txt['error_missing_files'] = 'Липсват основни файлове, необходими за инсталирането, от директорията на скрипта!<br /><br />Моля, уверете се, юе се качили целият инсталационен модул, включително и .sql файла, след което опитайте отново.';
$txt['error_session_save_path'] = 'Please inform your host that the <b>session.save_path specified in php.ini</b> is not valid!  It needs to be changed to a directory that <b>exists</b>, and is <b>writable</b> by the user PHP is running under.<br />';
$txt['error_windows_chmod'] = 'You\'re on a windows server, and some crucial files are not writable.  Please ask your host to give <b>write permissions</b> to the user PHP is running under for the files in your SMF installation.  The following files or directories need to be writable:';
$txt['error_ftp_no_connect'] = 'Свързването с FTP сървъра е невъзможно с предоставените данни.';
$txt['error_mysql_connect'] = 'Cannot connect to the MySQL database server with the supplied data.<br /><br />If you are not sure about what to type in, please contact your host.';
$txt['error_mysql_too_low'] = 'The version of MySQL that your database server is using is very old, and does not meet SMF\'s minimum requirements.<br /><br />Please ask your host to either upgrade it or supply a new one, and if they won\'t, please try a different host.';
$txt['error_mysql_database'] = 'The installer was unable to access the &quot;<i>%s</i>&quot; database.  With some hosts, you have to create the database in your administration panel before SMF can use it.  Some also add prefixes - like your username - to your database names.';
$txt['error_mysql_queries'] = 'Some of the queries were not executed properly.  This could be caused by an unsupported (development or old) version of MySQL.<br /><br />Technical information about the queries:';
$txt['error_mysql_queries_line'] = 'Line #';
$txt['error_mysql_missing'] = 'The installer was unable to detect MySQL support in PHP.  Please ask your host to ensure that PHP was compiled with MySQL, or that the proper extension is being loaded.';
$txt['error_session_missing'] = 'The installer was unable to detect sessions support in your server\'s installation of PHP.  Please ask your host to ensure that PHP was compiled with session support (in fact, it has to be explicitly compiled without it.)';
$txt['error_user_settings_again_match'] = 'Въвели сте две напълно различни пароли!';
$txt['error_user_settings_taken'] = 'Sorry, a member is already registered with that username and/or password.<br /><br />A new account has not been be created.';
$txt['error_user_settings_query'] = 'Възникна грешка в базата от данни при опита за създаване на администраторски акаунт:';
$txt['error_subs_missing'] = 'Не е намерен файлът Sources/Subs.php.  Моля, уверете се че сте качили го качил правилно, след което опитайте отново.';
$txt['error_mysql_alter_priv'] = 'The MySQL account you specified does not have permission to ALTER, CREATE, and/or DROP tables in the database; this is necessary for SMF to function properly.';
$txt['error_versions_do_not_match'] = 'Друга версия на SMF е вече инсталирана с въведените данни.  Ако желаете да актуализирате трябва да ползвате модула за актуализиране.<br /><br />В противен случай е желателно да въведете различни данни или да създадете резервно копие, след което да изтриете данните в базата от данни.';
$txt['error_mod_security'] = 'The installer has detected the mod_security module is installed on your web server. Mod_security will block submitted forms even before SMF gets a say in anything. SMF has a built-in security scanner that will work more effectively than mod_security and that won\'t block submitted forms.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">More information about disabling mod_security</a>';
$txt['error_utf8_mysql_version'] = 'The current version of your database doesn\'t support the use of the UTF-8 character set. You can still install SMF without any problems, but only with UTF-8 support unchecked. If you would like to switch over to UTF-8 in the future (e.g. after the MySQL server of your forum has been upgraded to a version >= 4.1), you can convert your forum to UTF-8 through the admin panel.';

?>