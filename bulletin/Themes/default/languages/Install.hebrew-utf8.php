<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = true;

$txt['smf_installer'] = 'התקנת SMF';
$txt['installer_language'] = 'שפה';
$txt['installer_language_set'] = 'Set';
$txt['congratulations'] = 'ברכות, תהליך ההתקנה הושלם!';
$txt['congratulations_help'] = '';
$txt['still_writable'] = 'Your installation directory is still writable. It\'s a good idea to chmod it so that it is not writable for security reasons.';
$txt['delete_installer'] = 'לחץ כאן למחוק את קובץ ההתקנה. <i>(doesn\'t work on all servers.)</i>';
$txt['delete_installer_maybe'] = '<i>(doesn\'t work on all servers.)</i>';
$txt['go_to_your_forum'] = '';
$txt['good_luck'] = 'בהצלחה!<br />';

$txt['user_refresh_install'] = 'Forum Refreshed';
$txt['user_refresh_install_desc'] = 'While installing, the installer found that (with the details you provided) one or more of the tables this installer might create already existed.<br />Any missing tables in your installation have been recreated with the default data, but no data was deleted from existing tables.';

$txt['default_topic_subject'] = 'ברוך הבא ל SMF!';
$txt['default_topic_message'] = '';
$txt['default_board_name'] = 'דיון כללי';
$txt['default_board_description'] = '';
$txt['default_category_name'] = 'קטגוריה כללית';
$txt['default_time_format'] = '%B %d, %Y, %I:%M:%S %p';
$txt['default_news'] = 'SMF - Just Installed!';
$txt['default_karmaLabel'] = 'Karma:';
$txt['default_karmaSmiteLabel'] = '[smite]';
$txt['default_karmaApplaudLabel'] = '[applaud]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nroot';
$txt['default_smileyset_name'] = 'Default';
$txt['default_classic_smileyset_name'] = 'Classic';
$txt['default_theme_name'] = 'SMF Default Theme - Core';
$txt['default_classic_theme_name'] = 'Classic YaBB SE Theme';
$txt['default_babylon_theme_name'] = 'Babylon Theme';

$txt['default_administrator_group'] = 'Administrator';
$txt['default_global_moderator_group'] = 'Global Moderator';
$txt['default_moderator_group'] = 'Moderator';
$txt['default_newbie_group'] = 'Newbie';
$txt['default_junior_group'] = 'Jr. Member';
$txt['default_full_group'] = 'Full Member';
$txt['default_senior_group'] = 'Sr. Member';
$txt['default_hero_group'] = 'Hero Member';

$txt['default_smiley_smiley'] = 'Smiley';
$txt['default_wink_smiley'] = 'Wink';
$txt['default_cheesy_smiley'] = 'Cheesy';
$txt['default_grin_smiley'] = 'Grin';
$txt['default_angry_smiley'] = 'Angry';
$txt['default_sad_smiley'] = 'Sad';
$txt['default_shocked_smiley'] = 'Shocked';
$txt['default_cool_smiley'] = 'Cool';
$txt['default_huh_smiley'] = 'Huh?';
$txt['default_roll_eyes_smiley'] = 'Roll Eyes';
$txt['default_tongue_smiley'] = 'Tongue';
$txt['default_embarrassed_smiley'] = 'Embarrassed';
$txt['default_lips_sealed_smiley'] = 'Lips Sealed';
$txt['default_undecided_smiley'] = 'Undecided';
$txt['default_kiss_smiley'] = 'Kiss';
$txt['default_cry_smiley'] = 'Cry';
$txt['default_evil_smiley'] = 'Evil';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'לחץ כאן';
$txt['error_message_try_again'] = 'לנסות שוב.';
$txt['error_message_bad_try_again'] = '';

$txt['install_settings'] = 'הגדרות הפורום';
$txt['install_settings_info'] = 'אנא מלא את הפרטים הבאים:';
$txt['install_settings_name'] = 'שם הפורום';
$txt['install_settings_name_info'] = '.שם הקהילה שלך';
$txt['install_settings_name_default'] = 'הקהילה שלי';
$txt['install_settings_url'] = 'כתובת הפורום';
$txt['install_settings_url_info'] = 'כתובת הפורום שלך.';
$txt['install_settings_compress'] = 'תצורת Gzip ';
$txt['install_settings_compress_title'] = '';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = '';
$txt['install_settings_dbsession'] = 'Database Sessions';
$txt['install_settings_dbsession_title'] = '';
$txt['install_settings_dbsession_info1'] = '';
$txt['install_settings_dbsession_info2'] = 'It doesn\'t seem like this feature will work on your server, but you can try it.';
$txt['install_settings_utf8'] = 'UTF-8 Character Set';
$txt['install_settings_utf8_title'] = 'Use UTF-8 as default character set';
$txt['install_settings_utf8_info'] = 'This feature lets both the database and the forum use an international character set, UTF-8. This can be useful when working with multiple languages that use different character sets.';
$txt['install_settings_stats'] = 'Allow Stat Collection';
$txt['install_settings_stats_title'] = 'Allow Simple Machines to Collect Basic Stats Monthly';
$txt['install_settings_stats_info'] = 'If enabled, this will allow Simple Machines to visit your site once a month to collect basic statistics. This will help us make decisions as to which configurations to optimize the software for. For more information please visit our <a href="http://www.simplemachines.org/about/stats.php" target="_blank">info page</a>.';
$txt['install_settings_proceed'] = 'המשך';

$txt['mysql_settings'] = 'הגדרות מסד הנתונים';
$txt['mysql_settings_info'] = '';
$txt['mysql_settings_server'] = 'שם שרת מסד נתונים';
$txt['mysql_settings_server_info'] = '';
$txt['mysql_settings_username'] = 'שם משתמש של מסד הנתונים';
$txt['mysql_settings_username_info'] = '';
$txt['mysql_settings_password'] = 'סיסמא של מסד הנתונים';
$txt['mysql_settings_password_info'] = '';
$txt['mysql_settings_database'] = 'שם מסד הנתונים';
$txt['mysql_settings_database_info'] = '';
$txt['mysql_settings_prefix'] = 'טבלאות prefix';
$txt['mysql_settings_prefix_info'] = 'לא חובה*';

$txt['user_settings'] = 'צור חשבון חדש';
$txt['user_settings_info'] = 'חשבון ניהולי';
$txt['user_settings_username'] = 'שם משתמש';
$txt['user_settings_username_info'] = '';
$txt['user_settings_password'] = 'סיסמא';
$txt['user_settings_password_info'] = '';
$txt['user_settings_again'] = 'חזור על הסיסמא';
$txt['user_settings_again_info'] = '(בשביל אימות.)';
$txt['user_settings_email'] = 'Email';
$txt['user_settings_email_info'] = '';
$txt['user_settings_database'] = 'סיסמא של מסד הנתונים';
$txt['user_settings_database_info'] = '';
$txt['user_settings_proceed'] = 'סיום';

$txt['ftp_setup'] = 'פרטי FTP';
$txt['ftp_setup_info'] = '';
$txt['ftp_server'] = 'שרת';
$txt['ftp_server_info'] = '';
$txt['ftp_port'] = 'פורט';
$txt['ftp_username'] = 'שם משתמש';
$txt['ftp_username_info'] = '';
$txt['ftp_password'] = 'סיסמא';
$txt['ftp_password_info'] = '';
$txt['ftp_path'] = 'נתיב התקנה';
$txt['ftp_path_info'] = '';
$txt['ftp_path_found_info'] = 'The path in the box above was automatically detected.';
$txt['ftp_connect'] = 'התחבר';
$txt['ftp_setup_why'] = 'מה הוא השלב הזה?';
$txt['ftp_setup_why_info'] = 'בשלב זה תצטרך לתת הרשאות לקבצים,בבקשה תן הרשאות-  777 לקבצים:';
$txt['ftp_setup_again'] = 'לנסות שוב.';

$txt['error_php_too_low'] = 'Warning! You do not appear to have a version of PHP installed on your webserver that meets SMF\'s <b>minimum installations requirements</b>.<br />If you are not the host, you will need to ask your host to upgrade, or use a different host - otherwise, please upgrade PHP to a recent version.<br /><br />If you know for a fact that your PHP version is high enough you may continue, although this is strongly discouraged.';
$txt['error_missing_files'] = 'Unable to find crucial installation files in the directory of this script!<br /><br />Please make sure you uploaded the entire installation package, including the sql file, and then try again.';
$txt['error_session_save_path'] = 'Please inform your host that the <b>session.save_path specified in php.ini</b> is not valid! It needs to be changed to a directory that <b>exists</b>, and is <b>writable</b> by the user PHP is running under.<br />';
$txt['error_windows_chmod'] = 'You\'re on a windows server, and some crucial files are not writable. Please ask your host to give <b>write permissions</b> to the user PHP is running under for the files in your SMF installation. The following files or directories need to be writable:';
$txt['error_ftp_no_connect'] = 'Unable to connect to FTP server with this combination of details.';
$txt['error_mysql_connect'] = 'Cannot connect to the MySQL database server with the supplied data.<br /><br />If you are not sure about what to type in, please contact your host.';
$txt['error_mysql_too_low'] = 'The version of MySQL that your database server is using is very old, and does not meet SMF\'s minimum requirements.<br /><br />Please ask your host to either upgrade it or supply a new one, and if they won\'t, please try a different host.';
$txt['error_mysql_database'] = 'שגיאה במסד הנתונים.';
$txt['error_mysql_queries'] = 'Some of the queries were not executed properly. This could be caused by an unsupported (development or old) version of MySQL.<br /><br />Technical information about the queries:';
$txt['error_mysql_queries_line'] = 'Line #';
$txt['error_mysql_missing'] = 'The installer was unable to detect MySQL support in PHP.  Please ask your host to ensure that PHP was compiled with MySQL, or that the proper extension is being loaded.';
$txt['error_session_missing'] = 'The installer was unable to detect sessions support in your server\'s installation of PHP.  Please ask your host to ensure that PHP was compiled with session support (in fact, it has to be explicitly compiled without it.)';
$txt['error_user_settings_again_match'] = 'הכנסת שתי סיסמאות שונות';
$txt['error_user_settings_taken'] = 'מצטער אך כבר מישהו נירשם אם שם משתמש זה<br /><br />החשבון לא נוצר.';
$txt['error_user_settings_query'] = 'A database error occurred while trying to create an administrator. This error was:';
$txt['error_subs_missing'] = 'Unable to find the Sources/Subs.php file. Please make sure it was uploaded properly, and then try again.';
$txt['error_mysql_alter_priv'] = 'The MySQL account you specified does not have permission to ALTER, CREATE, and/or DROP tables in the database; this is necessary for SMF to function properly.';
$txt['error_versions_do_not_match'] = 'The installer has detected another version of SMF already installed with the specified information.  If you are trying to upgrade, you should use the upgrader, not the installer.<br /><br />Otherwise, you may wish to use different information, or create a backup and then delete the data currently in the database.';
$txt['error_mod_security'] = 'The installer has detected the mod_security module is installed on your web server. Mod_security will block submitted forms even before SMF gets a say in anything. SMF has a built-in security scanner that will work more effectively than mod_security and that won\'t block submitted forms.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">More information about disabling mod_security</a>';
$txt['error_utf8_mysql_version'] = 'The current version of your database doesn\'t support the use of the UTF-8 character set. You can still install SMF without any problems, but only with UTF-8 support unchecked. If you would like to switch over to UTF-8 in the future (e.g. after the MySQL server of your forum has been upgraded to a version >= 4.1), you can convert your forum to UTF-8 through the admin panel.';

?>