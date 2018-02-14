<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'Встановлення форуму SMF';
$txt['installer_language'] = 'Вибір мови';
$txt['installer_language_set'] = 'Встановити';
$txt['congratulations'] = 'Поздоровляємо, процес Встановлення завершений!';
$txt['congratulations_help'] = 'Якщо у Вас виникають проблеми з роботою форуму, не забувайте про <a href="http://www.simplemachines.org/community/index.php" target="_blank">сайт технічної підтримки</a>.';
$txt['still_writable'] = 'Директорія інсталяції має права на запис. З метою безпеки рекомендується зробити її доступної тільки для читання.';
$txt['delete_installer'] = 'Натисніть сюди, щоб видалити install.php.';
$txt['delete_installer_maybe'] = '<i>(працює не на всіх серверах.)</i>';
$txt['go_to_your_forum'] = 'Тепер Ви можете перейти на встановлений <a href="%s">форум</a>. Після входу, Вам буде доступний розділ адміністрування.';
$txt['good_luck'] = 'Удачі!<br />SimpleMachines';

$txt['user_refresh_install'] = 'Відновлення форуму';
$txt['user_refresh_install_desc'] = 'Під час встановлення, інсталятор виявив, що одна або кілька таблиць, які повинні бути створені в базі даних, вже існують.<br />Ці таблиці були заповнені даними за замовчуванням, Ваші дані, які знаходяться в таблицях, збережені.';

$txt['default_topic_subject'] = 'Ласкаво просимо в SMF!';
$txt['default_topic_message'] = 'Ласкаво просимо на форум SimpleMachines!<br /><br />Якщо у Вас виникають проблеми з форумом, будь ласка, звертайтеся на [url=http://www.simplemachines.org/community/index.php]офіційний сайт підтримки[/url].<br /><br />Дякуємо!<br />SimpleMachines';
$txt['default_board_name'] = 'Загальний розділ';
$txt['default_board_description'] = 'У цьому розділі можна вести розмови на будь-які теми.';
$txt['default_category_name'] = 'Головна категорія';
$txt['default_time_format'] = '%d %B %Y, %H:%M:%S';
$txt['default_news'] = 'SMF форум встановлено!';
$txt['default_karmaLabel'] = 'Карма:';
$txt['default_karmaSmiteLabel'] = '[відняти]';
$txt['default_karmaApplaudLabel'] = '[додати]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nroot';
$txt['default_smileyset_name'] = 'За замовчуванням';
$txt['default_classic_smileyset_name'] = 'Classic';
$txt['default_theme_name'] = 'SMF Default Theme - Core';
$txt['default_classic_theme_name'] = 'Classic YaBB SE Theme';
$txt['default_babylon_theme_name'] = 'Babylon Theme';

$txt['default_administrator_group'] = 'Адміністратор';
$txt['default_global_moderator_group'] = 'Глобальний модератор';
$txt['default_moderator_group'] = 'Модератор';
$txt['default_newbie_group'] = 'Новачок';
$txt['default_junior_group'] = 'Користувач';
$txt['default_full_group'] = 'Постійний користувач';
$txt['default_senior_group'] = 'Старожило';
$txt['default_hero_group'] = 'Ветеран';

$txt['default_smiley_smiley'] = 'Посмішка';
$txt['default_wink_smiley'] = 'Підморгую';
$txt['default_cheesy_smiley'] = 'Веселий';
$txt['default_grin_smiley'] = 'Посміхаюся';
$txt['default_angry_smiley'] = 'Злий';
$txt['default_sad_smiley'] = 'Сумний';
$txt['default_shocked_smiley'] = 'Шокований';
$txt['default_cool_smiley'] = 'Крутий';
$txt['default_huh_smiley'] = 'Нерозумію';
$txt['default_roll_eyes_smiley'] = 'Залицяється';
$txt['default_tongue_smiley'] = 'Показує язик';
$txt['default_embarrassed_smiley'] = 'Стурбований';
$txt['default_lips_sealed_smiley'] = 'Рот на замку';
$txt['default_undecided_smiley'] = 'У замішанні';
$txt['default_kiss_smiley'] = 'Цілую';
$txt['default_cry_smiley'] = 'Плачу';
$txt['default_evil_smiley'] = 'Злий';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Афро';

$txt['error_message_click'] = 'Натисніть сюди';
$txt['error_message_try_again'] = 'щоб повторити дію.';
$txt['error_message_bad_try_again'] = 'продовжити встановлення форуму, не дивлячись ні на що (Не рекомендується).';

$txt['install_settings'] = 'Основні настроювання';
$txt['install_settings_info'] = 'Деякі деталі, необхідні для встановлення форуму.';
$txt['install_settings_name'] = 'Назва форуму';
$txt['install_settings_name_info'] = 'Тут вказується повна назва Вашого форуму, наприклад: &quot;Тестовий форум&quot;.';
$txt['install_settings_name_default'] = 'Назва Вашого форуму';
$txt['install_settings_url'] = 'Адреса (URL) форуму';
$txt['install_settings_url_info'] = 'Адреса (URL) форуму вказується <b>без \'/\'</b> у кінці.<br />Програма встановлення форуму автоматично визначила адресу. При бажанні Ви можете її змінити.';
$txt['install_settings_compress'] = 'Gzip стискання даних при передачі<br/>з сервера на компьютер користувача';
$txt['install_settings_compress_title'] = 'Стискати вихідні дані для економії трафіка.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Ця функція працює не на всіх серверах.<br />Натисніть <a href="install.php?obgz=1&amp;pass_string=PASS" onclick="return reqWin(this.href, 200, 60);" target="_blank">сюди</a> для перевірки Вашого сервера. (Якщо Gzip підтримується сервером, Ви побачите слово "PASS".)';
$txt['install_settings_dbsession'] = 'Сесії в Базі Даних';
$txt['install_settings_dbsession_title'] = 'Зберігати сесії в Базі Даних';
$txt['install_settings_dbsession_info1'] = 'Ця функція підвищує продуктивність форуму через швидкий доступ до сесій користувачів.';
$txt['install_settings_dbsession_info2'] = 'Гарна ідея зберігати сесії в базі даних, але на Вашому сервері вона може не працювати.';
$txt['install_settings_utf8'] = 'Використати кодування UTF-8';
$txt['install_settings_utf8_title'] = 'Використати кодування UTF-8 за замовчуванням';
$txt['install_settings_utf8_info'] = 'Ця опція дозволяє в базі даних і форумі використовувати міжнародне кодування UTF-8. Це зручно при використанні багатомовності чи різних кодувань.';
$txt['install_settings_stats'] = 'Дозволити збирати статистику';
$txt['install_settings_stats_title'] = 'Дозволити Simple Machines збирати щомісячну статистику';
$txt['install_settings_stats_info'] = 'Якщо дозволити, то це дозволить Simple Machines відвідувати Ваш сайт раз на місяць для збору звичайної статистики. Це допоможе нам ухвалити рішення щодо оптимізації програмного забезпечення. Для одержання докладної інформації відвідайте <a href="http://www.simplemachines.org/about/stats.php">інформаційну сторінку</a>.';
$txt['install_settings_proceed'] = 'Продовжити';

$txt['mysql_settings'] = 'Настроювання MySQL';
$txt['mysql_settings_info'] = 'Настроювання Вашого MySQL сервера. Якщо Вам не відомі ці дані, зверніться до Вашого хостера.';
$txt['mysql_settings_server'] = 'Сервер MySQL';
$txt['mysql_settings_server_info'] = 'Найчастіше використовується localhost - якщо Ви не знаєте ім\'я сервера, спробуйте localhost.';
$txt['mysql_settings_username'] = 'Користувач MySQL';
$txt['mysql_settings_username_info'] = 'Введіть ім\'я користувача, для підключення до Бази Даних MySQL.<br />Якщо Ви не знаєте ім\'я користувача, спробуйте ввести обліковий запис ФТП користувача. Найчастіше ці дані збігаються.';
$txt['mysql_settings_password'] = 'Пароль MySQL';
$txt['mysql_settings_password_info'] = 'Введіть пароль для доступу до Бази Даних MySQL.<br />Якщо не знаєте пароль, спробуйте ввести пароль від облікового запису ФТП користувача.';
$txt['mysql_settings_database'] = 'База Даних MySQL';
$txt['mysql_settings_database_info'] = 'Введіть назву Бази Даних, яку Ви хочете використати.<br />Якщо База відсутня, інсталятор спробує створити її.';
$txt['mysql_settings_prefix'] = 'Префікс таблиць MySQL';
$txt['mysql_settings_prefix_info'] = 'Префікс для кожної таблиці в Базі Даних.  <b>Не встановлюйте два форуми з одним і тим самим префіксом!</b>.';

$txt['user_settings'] = 'Створення Вашого облікового запису';
$txt['user_settings_info'] = 'Програма встановлення форуму створить для Вас обліковий запис адміністратора.';
$txt['user_settings_username'] = 'Ім\'я користувача';
$txt['user_settings_username_info'] = 'Виберіть ім\'я, яке Ви хочете використати.<br />Увага! Це ім\'я надалі змінити буде не можна! Ви зможете змінити тільки відображуване ім\'я.';
$txt['user_settings_password'] = 'Пароль';
$txt['user_settings_password_info'] = 'Введіть пароль!';
$txt['user_settings_again'] = 'Підтвердіть пароль';
$txt['user_settings_again_info'] = '(підтвердження пароля.)';
$txt['user_settings_email'] = 'Email адреса';
$txt['user_settings_email_info'] = 'Введіть Вашу email адресу.  <b>Вона повинна бути справжньою</b>';
$txt['user_settings_database'] = 'Пароль до Бази Даних MySQL';
$txt['user_settings_database_info'] = 'З метою безпеки, для створення облікового запису адміністратора, потрібно ввести пароль до Бази Даних MySQL.';
$txt['user_settings_proceed'] = 'Продовжити';

$txt['ftp_setup'] = 'Настроювання FTP сервера';
$txt['ftp_setup_info'] = 'Програма встановлення форуму може підключитися до сервера по протоколу ФТП, щоб змінити атрибути файлів (папок), якщо необхідно змінити права на запис або навпаки.  Якщо інсталятор, з якихось причин, не зміг цього зробити, рекомендується власноруч зайти на форум через ФТП і змінити атрибути необхідних файлів на потрібні. Будь ласка, не забувайте, що до повної установки форуму, SSL не підтримується.';
$txt['ftp_server'] = 'FTP сервер';
$txt['ftp_server_info'] = 'Вкажіть назву FTP сервера і порт.';
$txt['ftp_port'] = 'Порт';
$txt['ftp_username'] = 'Ім\'я користувача';
$txt['ftp_username_info'] = 'Ім\'я користувача для доступу до FTP. <i>Надалі ніде не використовується і не зберігається</i>.';
$txt['ftp_password'] = 'Пароль';
$txt['ftp_password_info'] = 'Пароль для доступу до FTP. <i>Надалі ніде не використовується і не зберігається</i>.';
$txt['ftp_path'] = 'Шлях встановлення форуму';
$txt['ftp_path_info'] = 'Це шлях FTP сервера.';
$txt['ftp_path_found_info'] = 'Знайдений шлях.';
$txt['ftp_connect'] = 'Підключитися';
$txt['ftp_setup_why'] = 'Для чого це потрібно?';
$txt['ftp_setup_why_info'] = 'Наступні файли повинні мати права на запис. Програма встановлення форуму може спробувати зробити їх такими, якщо з якихось причин цього не відбулося, будь ласка, проставте права на запис для цих файлів вручну. CHMOD 777 (на деяких серверах 755):';
$txt['ftp_setup_again'] = 'Перевірити права на запис.';

$txt['error_php_too_low'] = 'Увага! Для нормальної роботи SMF форуму потрібна версія PHP вище, ніж встановлена у Вас. <br />Якщо Ви користуєтеся послугами хостингу, зверніться до хостера з проханням оновити версію PHP. Встановлення форуму можна продовжити, але можуть виникнути проблеми.<br /><b>Це не рекомендується</b>.';
$txt['error_missing_files'] = 'Програмі встановлення форуму не вистачає деяких файлів!<br /><br />Будь ласка, впевніться в тому, що Ви завантажили на сервер всі файли.';
$txt['error_session_save_path'] = 'Будь ласка, сповістіть Вашого хостера про те, що <b>session.save_path зазначений в php.ini</b> невірний!  Шлях необхідно змінити на <b>існуючу</b> директорію, яка <b>має права на запис</b>.<br />';
$txt['error_windows_chmod'] = 'Ви використовуєте сервер на базі Windows, і деякі файли не мають прав на запис. Будь ласка, зверніться до Вашого хостера, із проханням дати права на запис, користувачеві, під яким працює PHP. Наступні файли і папки повинні мати права на запис:';
$txt['error_ftp_no_connect'] = 'Неможливо підключитися до FTP сервера із зазначеними даними.';
$txt['error_mysql_connect'] = 'Неможливо підключитися до Бази Даних MySQL із зазначеними даними<br /><br />Якщо Ви не знаєте, які дані необхідно ввести, будь ласка, зверніться до Вашого хостера.';
$txt['error_mysql_too_low'] = 'Версія встановленого MySQL сервера застаріла, і не відповідає мінімальним вимоги форуму SMF.<br /><br />Будь ласка, зверніться до Вашому хостера із проханням оновити програмне забезпечення.';
$txt['error_mysql_database'] = 'Програма встановлення форуму не може одержати доступ до &quot;<i>%s</i>&quot;. На деяких серверах необхідно вручну створити базу даних.';
$txt['error_mysql_queries'] = 'Деякі запити були неправильно оброблені. Це могло відбутися через непідтримувану або стару версію MySQL сервера<br /><br />Інформація про запит:';
$txt['error_mysql_queries_line'] = 'Рядок #';
$txt['error_mysql_missing'] = 'Програма встановлення форуму не змогла визначити підтримку MySQL. Будь ласка, впевніться в том, що PHP встановлено з підтримкою MySQL.';
$txt['error_session_missing'] = 'Програма встановлення форуму не змогла визначити підтримку сесій на Вашому сервері інтерпретатором PHP.  Будь ласка, впевніться в том, що PHP встановлено з підтримкою сесій.';
$txt['error_user_settings_again_match'] = 'Паролі не збігаються!';
$txt['error_user_settings_taken'] = 'Вибачите, користувач із таким ім\'ям вже зареєстрований<br /><br />Обліковий запис не створено.';
$txt['error_user_settings_query'] = 'Під час створення облікового запису адміністратора виникла наступна помилка:';
$txt['error_subs_missing'] = 'Відсутній файл Sources/Subs.php. Будь ласка, впевніться в том, що Ви завантажили на сервер всі файли.';
$txt['error_mysql_alter_priv'] = 'Обліковий запис MySQL, який Ви вказали не має права ЗМІНЮВАТИ, СТВОРЮВАТИ і ВИДАЛЯТИ таблиці в базі даних, які необхідно для правильної роботи форуму SMF.';
$txt['error_versions_do_not_match'] = 'Програма встановлення форуму виявила іншу встановлену версію SMF. Якщо Ви хочете оновити встановлену версію, скористайтеся програмою оновлення (upgrade.php).<br /><br />';
$txt['error_mod_security'] = 'Програма встановлення форуму виявила встановлений модуль mod_security. Цей модуль буде блокувати дані, які передаються формою. SMF форум має вбудований сканер безпеки, який перевершує по можливостях цей модуль і працює набагато ефективніше.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">Як відключити mod_security</a>';
$txt['error_utf8_mysql_version'] = 'Поточна версія бази даних не підтримує кодування UTF-8. Ви можете без проблем установити SMF, але без підтримки UTF-8. Якщо Ви бажаєте ввімкнути підтримку UTF-8 у майбутньому (попередньо обновивши MySQL сервер Вашого форуму до версії >=4.1), то можна перетворити форум в UTF-8 через панель Адміністрування.';

?>