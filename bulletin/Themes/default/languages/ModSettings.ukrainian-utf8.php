<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Цей розділ дозволяє змінювати настроювання різних функцій Вашого форуму.  Будь ласка, переглянете <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">настроювання теми оформлення</a> для зміни додаткових параметрів. Ви можете переглянути короткий опис кожної функції, нажавши на кнопку (?).';

$txt['mods_cat_features'] = 'Основні Настроювання';
$txt['pollMode'] = 'Голосування';
$txt['smf34'] = 'Заборонити голосування';
$txt['smf32'] = 'Дозволити голосування';
$txt['smf33'] = 'Показувати існуючі голосування як теми';
$txt['allow_guestAccess'] = 'Дозволити гостям переглядати форум';
$txt['userLanguage'] = 'Дозволити користувачам вибирати мову форума';
$txt['allow_editDisplayName'] = 'Дозволити користувачам змінювати відображуване ім\'я';
$txt['allow_hideOnline'] = 'Дозволити користувачам приховувати їх online статус?';
$txt['allow_hideEmail'] = 'Дозволити користувачам приховувати їх email адресу?';
$txt['guest_hideContacts'] = 'Не показувати інформацію користувачів гостям форуму';
$txt['titlesEnable'] = 'Дозволити підпис над аватарой';
$txt['enable_buddylist'] = 'Дозволити список друзів';
$txt['default_personalText'] = 'Підпис під аватарой за замовчуванням';
$txt['max_signatureLength'] = 'Максимум символів у підписі<div class="smalltext">(0 без обмежень)</div>';
$txt['number_format'] = 'Формат чисел за замовчуванням';
$txt['time_format'] = 'Формат часу за замовчуванням';
$txt['time_offset'] = 'Різниця часу відносно часу за Грінвічем<div class="smalltext">(змінюється і у профілях користувачів.)</div>';
$txt['failed_login_threshold'] = 'Кількість невдалих спроб входу';
$txt['lastActive'] = 'Час, під час якого, користувач вважається активним';
$txt['trackStats'] = 'Включити докладну статистику';
$txt['hitStats'] = 'Включити статистику переглядів<div class="smalltext">(статистика повинна бути включена.)</div>';
$txt['enableCompressedOutput'] = 'Використати стискування трафіка';
$txt['databaseSession_enable'] = 'Зберігати сесії у Базі Даних';
$txt['databaseSession_loose'] = 'Дозволяти браузерам повертатися на кешовану сторінку';
$txt['databaseSession_lifetime'] = 'Секунд до кінця витікання сесії';
$txt['enableErrorLogging'] = 'Включити протокол помилок';
$txt['cookieTime'] = 'Час дії кукі (cookies) у хвилинах';
$txt['localCookies'] = 'Використати локальне зберігання кукі (cookies) <div class="smalltext">(SSI із цією функцією працювати не буде)</div>';
$txt['globalCookies'] = 'Використати незалежні кукі (cookies) для субдоменов<div class="smalltext">(спочатку відключіть локальне зберігання кукі (cookies)!)</div>';
$txt['securityDisable'] = 'Відключити перевірку пароля для Адміністраторів';
$txt['send_validation_onChange'] = 'Вимагати схвалення облікового запису після зміни email адреси';
$txt['approveAccountDeletion'] = 'Запитувати схвалення Адміністратора, коли користувач видаляє обліковий запис';
$txt['autoOptDatabase'] = 'Оптимізувати таблиці Бази Даних через кожні ... днів?<div class="smalltext">(0 скасувати.)</div>';
$txt['autoOptMaxOnline'] = 'Максимум користувачів Online під час оптимізації<div class="smalltext">(0 без обмеження.)</div>';
$txt['autoFixDatabase'] = 'Автоматично відновлювати ушкоджені таблиці';
$txt['allow_disableAnnounce'] = 'Дозволити користувачам відмовлятися від повідомлень форуму';
$txt['disallow_sendBody'] = 'Не відправляти текст нового повідомлення у Повідомленнях?';
$txt['modlog_enabled'] = 'Записувати дії Модераторів';
$txt['queryless_urls'] = 'Дозволити дружні URL<div class="smalltext"><b>Тільки для серверів із Apache!</b></div>';
$txt['max_image_width'] = 'Максимальна ширина зображень, які прикріплюються (0 = скасувати)';
$txt['max_image_height'] = 'Максимальна висота зображень, які прикріплюються (0 = скасувати)';
$txt['mail_type'] = 'Тип Mail сервера';
$txt['mail_type_default'] = '(за замовчуванням використовувати функцію mail PHP)';
$txt['smtp_host'] = 'SMTP сервер';
$txt['smtp_port'] = 'SMTP порт';
$txt['smtp_username'] = 'SMTP логін';
$txt['smtp_password'] = 'SMTP пароль';
$txt['enableReportPM'] = 'Дозволити повідомляти про особисті повідомлення';
$txt['max_pm_recipients'] = 'Максимальна кількість одержувачів при відправленні особистого повідомлення<div class="smalltext">(0 без обмежень)</div>';
$txt['pm_posts_verification'] = 'Показувати число під яким користувачі муситимуть вводити код при надсиланні персональних повідомлень.<div class="smalltext">(0 для зняття обмежень, для адміністрації не потрібно)</div>';
$txt['pm_posts_per_hour'] = 'Кількість персональних повідомлень, яку користувачі можуть надсилати за годину.<div class="smalltext">(0 для зняття обмежень, для модераторів не потрібно)</div>';

$txt['mods_cat_layout'] = 'Настроювання відображення';
$txt['compactTopicPagesEnable'] = 'Обмежити кількість сторінок для відображення';
$txt['smf235'] = 'Формат відображення:';
$txt['smf236'] = 'для відображення';
$txt['todayMod'] = 'Дозволити функцію &quot;Сьогодні&quot;';
$txt['smf290'] = 'Скасувати';
$txt['smf291'] = 'Тільки Сьогодні';
$txt['smf292'] = 'Сьогодні і Вчора';
$txt['topbottomEnable'] = 'Відображати кнопки НАГОРУ/ВНИЗ';
$txt['onlineEnable'] = 'Відображати статус online/offline у повідомленнях користувача';
$txt['enableVBStyleLogin'] = 'Показувати функцію швидкого входу на форум на кожній сторінці';
$txt['defaultMaxMembers'] = 'Кількість користувачів на сторінку (у списку користувачів)';
$txt['timeLoadPageEnable'] = 'Відображати час, витрачений на створення сторінки';
$txt['disableHostnameLookup'] = 'Не відображати назви хостів користувачів?';
$txt['who_enabled'] = 'Дозволити список "Користувачі Online"';

$txt['smf293'] = 'Карма';
$txt['karmaMode'] = 'Функція Карми';
$txt['smf64'] = 'Відмінити|Відображати загальну карму||Відображати окремо плюс/мінус';
$txt['karmaMinPosts'] = 'Мінімальна кількість повідомлень для зміни карми користувачів';
$txt['karmaWaitTime'] = 'Час очікування в годинниках';
$txt['karmaTimeRestrictAdmins'] = 'Обмежити Адміністраторів часом очікування';
$txt['karmaLabel'] = 'Назва карми';
$txt['karmaApplaudLabel'] = 'Мітка для додатка карми';
$txt['karmaSmiteLabel'] = 'Мітка для зменшення карми';

$txt['caching_information'] = '<div align="center"><b><u>Увага! Перш ніж задіяти цю функцію, прочитайте наступну інформацію</b></u></div><br />
        SMF підтримує кешування за допомогою акселераторів. Підтримуються наступні акселератори:<br />
        <ul>
                <li>APC</li>
                <li>eAccelerator</li>
                <li>Turck MMCache</li>
                <li>Memcached</li>
                <li>Zend Platform/Performance Suite (Не Zend Optimizer!)</li>
        </ul>
        Кешування на Вашому сервері, буде працювати, тільки якщо PHP скомпільований з підтримкою одного з вищезгаданих акселераторів, або з підтримкою "memcache". <br /><br />
        SMF підтримує кілька рівнів кешування. Чим вище рівень, тим більше навантажується процесор(CPU). Якщо Ваш сервер підтримує функцію кешування, рекомендується встановити спочатку перший рівень.
        <br /><br />
        <b>Нагадування!</b><br/>
        Якщо Ви використовуєте функцію "memcache", нижче Ви повинні вказати деякі настроювання. Вводити їх через кому, як показано на прикладі нижче:<br />
        &quot;сервер1,сервер2,сервер3:порт,сервер4&quot;<br /><br />
        Якщо порт не зазначений, SMF буде використати порт за замовчуванням, 11211. SMF автоматично збалансує навантаження між серверами.
        <br /><br />
         %s
        <hr />';

$txt['detected_no_caching'] = '<b style="color: red;">На Вашому сервері не виявлено акселераторів, які підтримуються SMF</b>';
$txt['detected_APC'] = '<b style="color: green">На Вашому сервері встановлений APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">На Вашому сервері встановлений eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">На Вашому сервері встановлений MMCache.';
$txt['detected_Zend'] = '<b style="color: green">На Вашому сервері встановлений Zend.';
$txt['detected_Memcached'] = '<b style="color: green">SMF has detected that your server has Memcached installed.';

$txt['cache_enable'] = 'Рівень кешування';
$txt['cache_off'] = 'Кешування відключено';
$txt['cache_level1'] = 'Рівень 1';
$txt['cache_level2'] = 'Рівень 2 (Не рекомендується)';
$txt['cache_level3'] = 'Рівень 3 (Не рекомендується)';
$txt['cache_memcached'] = 'Настроювання Memcache';

?>