<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Этот раздел позволяет изменять настройки различных функций Вашего форума.  Пожалуйста, просмотрите <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">настройки темы оформления</a> для изменения дополнительных параметров. Вы можете просмотреть краткое описание каждой функции, нажав на кнопку (?).';

$txt['mods_cat_features'] = 'Основные настройки';
$txt['pollMode'] = 'Голосования';
$txt['smf34'] = 'Запретить голосования';
$txt['smf32'] = 'Разрешить голосования';
$txt['smf33'] = 'Показывать существующие голосования как темы';
$txt['allow_guestAccess'] = 'Разрешить гостям просматривать форум';
$txt['userLanguage'] = 'Разрешить пользователям выбирать язык форума';
$txt['allow_editDisplayName'] = 'Разрешить пользователям изменять отображаемое имя';
$txt['allow_hideOnline'] = 'Разрешить пользователям скрывать их online статус?';
$txt['allow_hideEmail'] = 'Разрешить пользователям скрывать их email адрес?';
$txt['guest_hideContacts'] = 'Не показывать информацию пользователей гостям форума';
$txt['titlesEnable'] = 'Разрешить подпись над аватаром';
$txt['enable_buddylist'] = 'Разрешить список друзей';
$txt['default_personalText'] = 'Подпись под аватаром по умолчанию';
$txt['max_signatureLength'] = 'Максимум символов в подписи<div class="smalltext">(0 без ограничений)</div>';
$txt['number_format'] = 'Формат чисел по умолчанию';
$txt['time_format'] = 'Формат времени по умолчанию';
$txt['time_offset'] = 'Разница во времени<div class="smalltext">(изменяется и в профилях пользователей.)</div>';
$txt['failed_login_threshold'] = 'Количество неудачных попыток входа';
$txt['lastActive'] = 'Время, в течении которого, пользователь считается активным';
$txt['trackStats'] = 'Включить подробную статистику';
$txt['hitStats'] = 'Включить статистику просмотров<div class="smalltext">(статистика должна быть включена.)</div>';
$txt['enableCompressedOutput'] = 'Использовать сжатие трафика';
$txt['databaseSession_enable'] = 'Хранить сессии в Базе Данных';
$txt['databaseSession_loose'] = 'Разрешать браузерам возвращаться на кэшированную страницу';
$txt['databaseSession_lifetime'] = 'Продолжительность сессии в секундах';
$txt['enableErrorLogging'] = 'Включить протоколирование ошибок';
$txt['cookieTime'] = 'Время действия cookies (в минутах)';
$txt['localCookies'] = 'Использовать локальное хранение cookies<div class="smalltext">(SSI с этой функцией работать не будет)</div>';
$txt['globalCookies'] = 'Использовать независимые cookies для субдоменов<div class="smalltext">(сначала отключите локальное хранение cookies!)</div>';
$txt['securityDisable'] = 'Отключить проверку пароля для Администраторов';
$txt['send_validation_onChange'] = 'Требовать одобрения учетной записи после смены email адреса';
$txt['approveAccountDeletion'] = 'Запрашивать одобрение Администратора, когда пользователь удаляет учетную запись';
$txt['autoOptDatabase'] = 'Оптимизировать таблицы через каждые ... дней?<div class="smalltext">(0 отменить.)</div>';
$txt['autoOptMaxOnline'] = 'Максимум пользователей Online во время оптимизации<div class="smalltext">(0 без ограничения.)</div>';
$txt['autoFixDatabase'] = 'Автоматически восстанавливать поврежденные таблицы';
$txt['allow_disableAnnounce'] = 'Разрешить пользователям отказываться от уведомлений форума';
$txt['disallow_sendBody'] = 'Не отправлять текст нового сообщения в уведомлениях?';
$txt['modlog_enabled'] = 'Записывать действия Модераторов';
$txt['queryless_urls'] = 'Разрешить дружественные URL<div class="smalltext"><b>Только для Apache!</b></div>';
$txt['max_image_width'] = 'Максимальная ширина прикрепляемых изображений (0 = отменить)';
$txt['max_image_height'] = 'Максимальная высота прикрепляемых изображений (0 = отменить)';
$txt['mail_type'] = 'Тип Mail сервера';
$txt['mail_type_default'] = '(по умолчанию от PHP)';
$txt['smtp_host'] = 'SMTP сервер';
$txt['smtp_port'] = 'SMTP порт';
$txt['smtp_username'] = 'SMTP логин';
$txt['smtp_password'] = 'SMTP пароль';
$txt['enableReportPM'] = 'Разрешить сообщать о личных сообщениях';
$txt['max_pm_recipients'] = 'Максимальное количество получателей при отправке личного сообщения.<div class="smalltext">(0 без ограничений)</div>';
$txt['pm_posts_verification'] = 'Количество сообщений, после которого пользователи не будут вводить код при отсылке личных сообщений.<div class="smalltext">(0- всегда вводить код, Администратор не подвержен данной настройке)</div>';
$txt['pm_posts_per_hour'] = 'Количество личных сообщений отсылаемых пользователей в течение одного часа.<div class="smalltext">(0 без ограничений, Модераторы не подвержены данной настройке)</div>';

$txt['mods_cat_layout'] = 'Настройки отображения';
$txt['compactTopicPagesEnable'] = 'Ограничить количество отображаемых страниц';
$txt['smf235'] = 'Формат отображения:';
$txt['smf236'] = 'для отображения';
$txt['todayMod'] = 'Разрешить функцию &quot;Сегодня&quot;';
$txt['smf290'] = 'Отменить';
$txt['smf291'] = 'Только Сегодня';
$txt['smf292'] = 'Сегодня и Вчера';
$txt['topbottomEnable'] = 'Отображать кнопки ВВЕРХ/ВНИЗ';
$txt['onlineEnable'] = 'Отображать статус online/offline в сообщениях пользователя';
$txt['enableVBStyleLogin'] = 'Показывать функцию быстрого входа на форум на каждой странице';
$txt['defaultMaxMembers'] = 'Количество пользователей на страницу (в списке пользователей)';
$txt['timeLoadPageEnable'] = 'Отображать время, затраченное на создание страницы';
$txt['disableHostnameLookup'] = 'Не отображать название хостов пользователей?';
$txt['who_enabled'] = 'Разрешить список "Пользователи Online"';

$txt['smf293'] = 'Карма';
$txt['karmaMode'] = 'Функция Кармы';
$txt['smf64'] = 'Отменить|Отображать общую карму|Отображать отдельно плюс/минус';
$txt['karmaMinPosts'] = 'Минимальное количество сообщений для изменения кармы пользователей';
$txt['karmaWaitTime'] = 'Время ожидания в часах';
$txt['karmaTimeRestrictAdmins'] = 'Ограничить Администраторов временем ожидания';
$txt['karmaLabel'] = 'Название кармы';
$txt['karmaApplaudLabel'] = 'Метка для прибавления кармы';
$txt['karmaSmiteLabel'] = 'Метка для уменьшения кармы';

$txt['caching_information'] = '<div align="center"><b><u>Внимание! Прежде чем задействовать эту функцию, прочтите следующую информацию.</b></u></div><br />
        SMF поддерживает кэширование с помощью акселераторов. Поддерживаются следующие акселераторы:<br />
        <ul>
                <li>APC</li>
                <li>eAccelerator</li>
                <li>Turck MMCache</li>
                <li>Memcached</li>
                <li>Zend Platform/Performance Suite (Не Zend Optimizer!)</li>
        </ul>
        Кэширование будет работать лучше, если PHP скомпилирован с поддержкой одного из упомянутых выше оптимизаторов или на сервере доступен memcached. <br /><br />
        SMF поддерживает несколько уровней кэширования. Чем выше уровень, тем больше загрузка процессора сервера. Если Ваш сервер поддерживает кэширование, рекомендуется сначала попробовать первый уровень.
        <br /><br />
        Обратите внимание: если Вы используете memcached, ниже Вы должны указать некоторые настройки. Вводите их через запятую, как показано на примере:<br />
        &quot;сервер1,сервер2,сервер3:порт,сервер4&quot;<br /><br />
        Если порт не указан, SMF будет использовать порт по умолчанию - 11211. SMF будет пытаться автоматически сбалансировать нагрузку между серверами.
        <br /><br />
        %s
        <hr />';

$txt['detected_no_caching'] = '<b style="color: red;">На Вашем сервере не обнаружено поддерживаемых SMF акселераторов.</b>';
$txt['detected_APC'] = '<b style="color: green">На Вашем сервере установлен APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">На Вашем сервере установлен eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">На Вашем сервере установлен MMCache.';
$txt['detected_Zend'] = '<b style="color: green">На Вашем сервере установлен Zend.';
$txt['detected_Memcached'] = '<b style="color: green">На Вашем сервере установлен Memcached.';

$txt['cache_enable'] = 'Уровень кэширования';
$txt['cache_off'] = 'Кэширование отключено';
$txt['cache_level1'] = 'Уровень 1';
$txt['cache_level2'] = 'Уровень 2 (Не рекомендуется)';
$txt['cache_level3'] = 'Уровень 3 (Не рекомендуется)';
$txt['cache_memcached'] = 'Настройка Memcached';

?>