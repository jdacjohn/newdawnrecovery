<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Керування правами доступу користувачів';
$txt['permissions_modify'] = 'Змінити';
$txt['permissions_access'] = 'Доступ';
$txt['permissions_allowed'] = 'Дозволити';
$txt['permissions_denied'] = 'Заборонити';

$txt['permissions_switch'] = 'Переключити на';
$txt['permissions_global'] = 'Глобальний';
$txt['permissions_local'] = 'Локальний';

$txt['permissions_groups'] = 'Права доступу по групах';
$txt['permissions_all'] = 'всі';
$txt['permissions_none'] = 'немає';
$txt['permissions_set_permissions'] = 'Встановити';

$txt['permissions_with_selection'] = 'З виділеним';
$txt['permissions_apply_pre_defined'] = 'Застосувати предвстановленій профіль прав доступу';
$txt['permissions_select_pre_defined'] = 'Виберіть профіль';
$txt['permissions_copy_from_board'] = 'Копіювати права доступу із цього розділу';
$txt['permissions_select_board'] = 'Виберіть розділ';
$txt['permissions_like_group'] = 'Встановити права доступу як у цієї групи';
$txt['permissions_select_membergroup'] = 'Вибрати групу';
$txt['permissions_add'] = 'Дозволити';
$txt['permissions_remove'] = 'Зняти права доступу';
$txt['permissions_deny'] = 'Заборонити';
$txt['permissions_select_permission'] = 'Виберіть права доступу';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Ви можете вибрати тільки одну дію при зміні прав доступу';
$txt['permissions_no_action'] = 'Дія не обрана';
$txt['permissions_deny_dangerous'] = 'Ви збираєтеся заборонити одне або кілька дій.\\nЩе раз все перевірте, щоб Ви випадково не урізали комусь права.\\n\\nВи дійсно хочете продовжити?';

$txt['permissions_boards'] = 'Права доступу по розділах';

$txt['permissions_modify_group'] = 'Зміна прав користувачів';
$txt['permissions_general'] = 'Основні права';
$txt['permissions_board'] = 'Права для розділів із глобальними привілеями';
$txt['permissions_commit'] = 'Зберегти';
$txt['permissions_modify_local'] = 'Змінити локальні права доступу';
$txt['permissions_on'] = 'у розділі';
$txt['permissions_local_for'] = 'Локальні права доступу для розділу';
$txt['permissions_option_on'] = '+';
$txt['permissions_option_off'] = '-';
$txt['permissions_option_deny'] = 'X';
$txt['permissions_option_desc'] = 'Як права доступу Ви можете встановити наступні права \'Дозволити\' (+), \'Відхилити\' (-), або <span style="color: red;">\'Заборонити\' (X)</span>.<br /><br />Користуйтеся забороною прав доступу з обережністю.';

$txt['permissiongroup_general'] = 'Загальні';
$txt['permissionname_view_stats'] = 'Перегляд статистики форуму';
$txt['permissionhelp_view_stats'] = 'Статистика користувачів відображає загальну інформацію про форум, таку як: загальна кількість користувачів, кількість залишених повідомлень, створених тем і т.д.';
$txt['permissionname_view_mlist'] = 'Перегляд списку користувачів';
$txt['permissionhelp_view_mlist'] = 'Список користувачів показує всіх користувачів, зареєстрованих на форумі. Список може бути відсортований за Вашим бажанням. Список користувачів доступний з головної сторінки і з сторінки із статистикою форуму.';
$txt['permissionname_who_view'] = 'Перегляд Хто Online';
$txt['permissionhelp_who_view'] = 'Список Хто Online відображає користувачів, які в цей момент перебувають на форумі, а також їхня поточна дія або місце розташування. Ці права доступу будуть працювати тільки якщо Ви включите їх в \'Характеристиках і Настроюваннях\'. Щоб переглянути цей список, натисніть на посилання Хто Online, на головній сторінці. Якщо заборонити, користувачі зможуть переглядати список Хто Online, але не будуть бачити, де перебувають і що роблять інші користувачі.';
$txt['permissionname_search_posts'] = 'Пошук повідомлень і тем';
$txt['permissionhelp_search_posts'] = 'Дані права дозволяють користувачам використати функцію пошуку по форуму. Якщо дозволити цю функцію, на головній сторінці користувачі побачать кнопку ПОШУК.';
$txt['permissionname_karma_edit'] = 'Зміна карми користувачів';
$txt['permissionhelp_karma_edit'] = 'Карма це додаткова можливість форуму, яка відображає популярність користувача на форумі. Дані права доступу будуть працювати, тільки якщо Ви включили функцію Карма, у настроюваннях Вашого форуму. Для гостей, дані права доступу встановити неможливо.';

$txt['permissiongroup_pm'] = 'Особисті повідомлення';
$txt['permissionname_pm_read'] = 'Читання особистих повідомлень';
$txt['permissionhelp_pm_read'] = 'Дані права доступу дають користувачам доступ у розділ особистих повідомлень. Без цих прав, користувачі не зможуть читати особисті повідомлення.';
$txt['permissionname_pm_send'] = 'Відправлення особистих повідомлень';
$txt['permissionhelp_pm_send'] = 'Дані права доступу дають користувачам можливість відправляти особисті повідомлення. Необхідні права для читання особистих повідомлень.';

$txt['permissiongroup_calendar'] = 'Календар';
$txt['permissionname_calendar_view'] = 'Перегляд календаря';
$txt['permissionhelp_calendar_view'] = 'Календар відображає дні народження, свята або події в кожному місяці року. Ці права доступу дають можливість переглядати календар. Після того як Ви додасте ці права, користувачі побачать кнопку КАЛЕНДАР у рядку кнопок форуму. Не забудьте включити функцію календаря в настроюваннях форуму.';
$txt['permissionname_calendar_post'] = 'Створення подій у календарі';
$txt['permissionhelp_calendar_post'] = 'Подія це створена тема, яка прив\'язана до певного дня календаря. Подія може бути створена, якщо користувач має права на створення нових тем на форумі.';
$txt['permissionname_calendar_edit'] = 'Редагування подій у календарі';
$txt['permissionhelp_calendar_edit'] = 'Подія може бути відредаговано, натисканням на червону зірочку (*). Для можливості редагування подій, користувач повинен мати право редагувати перше повідомлення в темі.';
$txt['permissionname_calendar_edit_own'] = 'Власні події';
$txt['permissionname_calendar_edit_any'] = 'Будь-які події';

$txt['permissiongroup_maintenance'] = 'Адміністрування форуму';
$txt['permissionname_admin_forum'] = 'Адміністрування форуму і бази даних';
$txt['permissionhelp_admin_forum'] = 'Це право дозволяє користувачеві:<ul><li>змінювати настроювання форуму, Бази Даних і тем оформлення;</li><li>управляти пакетами модифікацій;</li><li>використати функцію обслуговування форуму;</li><li>переглядати помилки форуму і лог модераторских дій;</li></ul> Використовуйте ці права доступу з обережністю. Воно дає великі привелегії на форумі.';
$txt['permissionname_manage_boards'] = 'Керування розділами і категоріями';
$txt['permissionhelp_manage_boards'] = 'Ці права доступу дозволяють користувачам створювати, редагувати,  видаляти розділи і категорії на форумі.';
$txt['permissionname_manage_attachments'] = 'Керування вкладеннями і аватарами';
$txt['permissionhelp_manage_attachments'] = 'Ці права доступу дозволяють користувачам управляти вкладеннями і аватарами на форумі.';
$txt['permissionname_manage_smileys'] = 'Керування смайлами';
$txt['permissionhelp_manage_smileys'] = 'Ці права доступу дозволяють користувачам управляти смайлами форуму. Видаляти, додавати, редагувати, і так само створювати нові набори смайлів';
$txt['permissionname_edit_news'] = 'Редагування новин';
$txt['permissionhelp_edit_news'] = 'Це право дозволяє користувачам управляти новинами форуму. Функція новин повинна бути включена в настроюваннях форуму.';

$txt['permissiongroup_member_admin'] = 'Адміністрування користувачів';
$txt['permissionname_moderate_forum'] = 'Керування користувачами форуму';
$txt['permissionhelp_moderate_forum'] = 'Ці права доступу включають всі важливі функції модерування, такі як:<ul><li>доступ до настроювання реєстрації;</li><li>перегляд і видалення користувачів;</li><li>перегляд інформації користувачів, яка включає перевірку IP адреси;</li><li>активація облікового запису;</li><li>одержання повідомлення про схвалення облікового запису і можливість схвалювати обліковий запис;</li><li>відправлення особистих повідомлень користувачам, які відмовилися від одержання особистих повідомлень;</li><li>інші функції.</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Керування групами користувачів';
$txt['permissionhelp_manage_membergroups'] = 'Дозволяє користувачам редагувати групи користувачів, і так само включати користувачів у ці групи.';
$txt['permissionname_manage_permissions'] = 'Керування правами доступу';
$txt['permissionhelp_manage_permissions'] = 'Це право дозволяє користувачам міняти права доступу до груп користувачів.';
$txt['permissionname_manage_bans'] = 'Редагування бан списку';
$txt['permissionhelp_manage_bans'] = 'Це право дозволяє користувачам редагувати бан список. Є можливість чистити лог спроб звернення на форуму від забанених користувачів.';
$txt['permissionname_send_mail'] = 'Відправлення email користувачам';
$txt['permissionhelp_send_mail'] = 'Це право дозволяє робити масове розсилання повідомлень користувачам, або деяким групам користувачів. Можна відправляти email або особисті повідомлення.';

$txt['permissiongroup_profile'] = 'Профілі користувачів';
$txt['permissionname_profile_view'] = 'Перегляд профілів користувачів';
$txt['permissionhelp_profile_view'] = 'Це право дозволяє переглядати профілі зареєстрованих на форумі користувачів. Переглядати загальну інформацію, статистику і всі повідомлення користувача.';
$txt['permissionname_profile_view_own'] = 'Власний профіль';
$txt['permissionname_profile_view_any'] = 'Любий профіль';
$txt['permissionname_profile_identity'] = 'Зміна настроювань облікового запису';
$txt['permissionhelp_profile_identity'] = 'Настроювання облікового запису містять в собі основні настроювання, такі як: зміна пароля, email адреси, мови і т.д.';
$txt['permissionname_profile_identity_own'] = 'Власний профіль';
$txt['permissionname_profile_identity_any'] = 'Любий профіль';
$txt['permissionname_profile_extra'] = 'Редагування додаткових настроювань профілю';
$txt['permissionhelp_profile_extra'] = 'Додаткові настроювання облікового запису містять у собі настроювання аватара, тем оформлення, повідомлень і особистих повідомлень.';
$txt['permissionname_profile_extra_own'] = 'Власний профіль';
$txt['permissionname_profile_extra_any'] = 'Любий профіль';
$txt['permissionname_profile_title'] = 'Встановлення підпису над аватаром';
$txt['permissionhelp_profile_title'] = 'Даний підпис відображається в кожній темі, над профілем кожного користувача, добре було б, якщо б це поле не було залишено порожнім.';
$txt['permissionname_profile_title_own'] = 'Власний профіль';
$txt['permissionname_profile_title_any'] = 'Любий профіль';
$txt['permissionname_profile_remove'] = 'Видалення облікового запису';
$txt['permissionhelp_profile_remove'] = 'Це право дозволяє користувачам видаляти їх власні облікові записи з форуму.';
$txt['permissionname_profile_remove_own'] = 'Власний';
$txt['permissionname_profile_remove_any'] = 'Любий';
$txt['permissionname_profile_server_avatar'] = 'Використання аватар форуму';
$txt['permissionhelp_profile_server_avatar'] = 'Це право дозволяє користувачам використати аватари, які встановлені на Вашому форумі.';
$txt['permissionname_profile_upload_avatar'] = 'Завантаження аватар на сервер';
$txt['permissionhelp_profile_upload_avatar'] = 'Це право дозволить користувачам завантажувати свої власні аватари на сервер.';
$txt['permissionname_profile_remote_avatar'] = 'Встановлення вилучених аватар';
$txt['permissionhelp_profile_remote_avatar'] = 'Це право дозволить користувачам вказувати посилання на аватари, розташовані на іншому сервері. З метою безпеки, не варто дозволяти використати дану функцію неперевіреним користувачам.';

$txt['permissiongroup_general_board'] = 'Загальні';
$txt['permissionname_moderate_board'] = 'Модерування розділу';
$txt['permissionhelp_moderate_board'] = 'Це право додає деякі невеликі функції модерування в розділах. Наприклад, відповідь у закриту тему, зміну часу закінчення голосування і перегляд результатів голосування.';

$txt['permissiongroup_topic'] = 'Теми';
$txt['permissionname_post_new'] = 'Створення нових тем';
$txt['permissionhelp_post_new'] = 'Це право дозволяє користувачам створювати нові теми. За замовчуванням,  не дозволяється відповідати в темах. Тобто якщо в користувача немає прав відповідати в темі, він зможе тільки її створити.';
$txt['permissionname_merge_any'] = 'Об\'єднання тем';
$txt['permissionhelp_merge_any'] = 'Це право дозволяє користувачам поєднувати дві теми в одну. Головною темою вийде та, в якої перше повідомлення створене раніше.';
$txt['permissionname_split_any'] = 'Поділ тем';
$txt['permissionhelp_split_any'] = 'Це право дозволяє користувачам розділяти теми';
$txt['permissionname_send_topic'] = 'Відправлення тем друзям';
$txt['permissionhelp_send_topic'] = 'Це право дозволяє користувачам відправляти посилання на тему своїм друзям.';
$txt['permissionname_make_sticky'] = 'Прикріплення тем';
$txt['permissionhelp_make_sticky'] = 'Це право дозволяє користувачам прикріплювати теми.';
$txt['permissionname_move'] = 'Переміщення тем';
$txt['permissionhelp_move'] = 'Це право дозволяє переміщати тему з одного розділу в іншій.';
$txt['permissionname_move_own'] = 'Власна тема';
$txt['permissionname_move_any'] = 'Будь-яка тема';
$txt['permissionname_lock'] = 'Закриття тем';
$txt['permissionhelp_lock'] = 'Це право дозволяє користувачам закривати теми. Після цього в неї може написати тільки Модератор або Адміністратор.';
$txt['permissionname_lock_own'] = 'Власна тема';
$txt['permissionname_lock_any'] = 'Будь-яка тема';
$txt['permissionname_remove'] = 'Видалення тем';
$txt['permissionhelp_remove'] = 'Це право дозволяє користувачам видаляти теми.';
$txt['permissionname_remove_own'] = 'Власна тема';
$txt['permissionname_remove_any'] = 'Будь-яка тема';
$txt['permissionname_post_reply'] = 'Відправлення повідомлень у тему';
$txt['permissionhelp_post_reply'] = 'Це право дозволяє користувачам відповідати в теми';
$txt['permissionname_post_reply_own'] = 'Власна тема';
$txt['permissionname_post_reply_any'] = 'Будь-яка тема';
$txt['permissionname_modify_replies'] = 'Редагування будь-яких відповідей у власній темі';
$txt['permissionhelp_modify_replies'] = 'Це право дозволяє авторові теми змінювати відповіді у власній темі.';
$txt['permissionname_delete_replies'] = 'Видалення будь-яких відповідей у власній темі';
$txt['permissionhelp_delete_replies'] = 'Це право дозволяє авторові теми видаляти відповіді у власній темі.';
$txt['permissionname_announce_topic'] = 'Оголошення користувачів про тему';
$txt['permissionhelp_announce_topic'] = 'Це право дозволяє відправляти повідомлення про тему по email зареєстрованих користувачах або тільки обраних групах користувачів.';

$txt['permissiongroup_post'] = 'Повідомлення';
$txt['permissionname_delete'] = 'Видалення повідомлень';
$txt['permissionhelp_delete'] = 'Це право дозволяє користувачам видаляти повідомлення в темах, крім найпершого повідомлення.';
$txt['permissionname_delete_own'] = 'Власне повідомлення';
$txt['permissionname_delete_any'] = 'Будь-яке повідомлення';
$txt['permissionname_modify'] = 'Редагування повідомлень';
$txt['permissionhelp_modify'] = 'Редагування повідомлень';
$txt['permissionname_modify_own'] = 'Власне повідомлення';
$txt['permissionname_modify_any'] = 'Будь-яке повідомлення';
$txt['permissionname_report_any'] = 'Сповіщення Модераторів';
$txt['permissionhelp_report_any'] = 'За допомогою цього права поміщаєся в кожній відповіді посилання для оповіщення Модераторів. Після оповіщення, всі Модератори розділу отримують повідомлення на email з посиланням і коментарем.';

$txt['permissiongroup_poll'] = 'Голосування';
$txt['permissionname_poll_view'] = 'Перегляд голосувань';
$txt['permissionhelp_poll_view'] = 'Це право дозволяє користувачам переглядати голосування. Без цього права вони побачать одну тему (без голосування).';
$txt['permissionname_poll_vote'] = 'Можливість голосувати';
$txt['permissionhelp_poll_vote'] = 'Це право дозволяє зареєстрованим користувачам голосувати в голосуваннях.';
$txt['permissionname_poll_post'] = 'Створення голосувань';
$txt['permissionhelp_poll_post'] = 'Це право дозволяє користувачам створювати голосування.';
$txt['permissionname_poll_add'] = 'Додавання голосувань у тему';
$txt['permissionhelp_poll_add'] = 'Це право дозволяє додавати голосування в тему, яка вже була створена. Це право вимагає права редагування першого повідомлення в темі.';
$txt['permissionname_poll_add_own'] = 'Власна тема';
$txt['permissionname_poll_add_any'] = 'Будь-яка тема';
$txt['permissionname_poll_edit'] = 'Редагування голосувань';
$txt['permissionhelp_poll_edit'] = 'Це право дозволяє редагувати варіанти відповідей у голосуванні і обнулювати лічильник голосів. Для завдання опції кількості максимальних повідомлень і час голосування, користувач повинен мати право  \'Модерування розділу\'.';
$txt['permissionname_poll_edit_own'] = 'Власне голосування';
$txt['permissionname_poll_edit_any'] = 'Будь-яке голосування';
$txt['permissionname_poll_lock'] = 'Закриття голосувань';
$txt['permissionhelp_poll_lock'] = 'Це право дозволяє користувачам закривати голосування.';
$txt['permissionname_poll_lock_own'] = 'Власне голосування';
$txt['permissionname_poll_lock_any'] = 'Будь-яке голосування';
$txt['permissionname_poll_remove'] = 'Видалення голосувань';
$txt['permissionhelp_poll_remove'] = 'Це право дозволяє користувачам видаляти голосування.';
$txt['permissionname_poll_remove_own'] = 'Власне голосування';
$txt['permissionname_poll_remove_any'] = 'Будь-яке голосування';

$txt['permissiongroup_notification'] = 'Повідомлення';
$txt['permissionname_mark_any_notify'] = 'Одержання повідомлень про нові відповіді';
$txt['permissionhelp_mark_any_notify'] = 'Це право дозволяє користувачам одержувати повідомлення про нові повідомлення в темі.';
$txt['permissionname_mark_notify'] = 'Одержання повідомлень про нові теми';
$txt['permissionhelp_mark_notify'] = 'Це право дозволяє користувачам одержувати повідомлення про нові теми.';

$txt['permissiongroup_attachment'] = 'Вкладення';
$txt['permissionname_view_attachments'] = 'Перегляд вкладень';
$txt['permissionhelp_view_attachments'] = 'Вкладення - це файли, які користувач прикріпив до свого повідомлення. Це право дозволяє переглядати вкладення, створені користувачами.';
$txt['permissionname_post_attachment'] = 'Відправлення вкладень';
$txt['permissionhelp_post_attachment'] = 'Вкладення - це файли, які користувач прикріпив до свого повідомлення. Це право дозволять прикріплювати вкладення до повідомлення. На одне повідомлення може бути кілька вкладень.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Настроювання Прав Доступу';
$txt['groups_manage_permissions'] = 'Група користувачів, яка має право змінювати права доступу';
$txt['permission_settings_submit'] = 'Зберегти';
$txt['permission_settings_enable_deny'] = 'Включити використання заборонних прав для груп';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Вимикання цієї функції знищить всі заборонні права користувачів.';
$txt['permission_by_membergroup_desc'] = 'Тут Ви можете встановити глобальні права для кожної групи. Ці права будуть діяти в будь-якому розділі, крім тих на які поширюються локальні права доступу.';
$txt['permission_by_board_desc'] = 'Тут Ви можете встановити які права буде використати розділ, глобальні або локальні. Використання локальних дозволів мається на увазі, що для груп користувачів у цьому розділі діють свої певні права, які можливо відрізняються від глобальних.';
$txt['permission_settings_desc'] = 'Тут Ви можете вибрати, хто має право змінювати права в розділах.';
$txt['permission_settings_enable_postgroups'] = 'Включити використання прав для груп заснованих на кількості повідомлень';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Вимикання цієї функції знищить всі виставлені права доступу для груп заснованих на кількості повідомлень.';
$txt['permission_settings_enable_by_board'] = 'Включити виставляння окремих прав доступу для кожного розділу';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Вимикання цієї опції знищить всі виставлені права доступу для розділу.';

?>