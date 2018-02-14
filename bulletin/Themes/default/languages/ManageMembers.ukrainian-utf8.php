<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'Керування групами користувачів';
$txt['membergroups_description'] = 'Групи користувачів мають певні параметри настроювання і свої права доступу. Деякі групи користувачів залежать від кількості повідомлень. Ви можете призначати групу користувачеві, зайшовши в його профіль і, змінивши настроювання облікового запису.';
$txt['membergroups_modify'] = 'Змінити';

$txt['membergroups_add_group'] = 'Додати групу';
$txt['membergroups_regular'] = 'Основні групи';
$txt['membergroups_post'] = 'Групи засновані на кількості повідомлень';

$txt['membergroups_new_group'] = 'Нова група користувачів';
$txt['membergroups_group_name'] = 'Назва нової групи';
$txt['membergroups_new_board'] = 'Доступні розділи';
$txt['membergroups_new_board_desc'] = 'Розділи доступні для групи користувачів';
$txt['membergroups_new_board_post_groups'] = '<em>Примітка: звичайно, для того щоб залишити повідомлення не потрібно особливих прав, тому як група за замовчуванням надає ці права</em>';
$txt['membergroups_new_as_type'] = 'за типом';
$txt['membergroups_new_as_copy'] = 'базується на';
$txt['membergroups_new_copy_none'] = '(немає)';
$txt['membergroups_can_edit_later'] = 'Ви можете відредагувати це пізніше.';

$txt['membergroups_edit_group'] = 'Редагувати групи користувачів';
$txt['membergroups_edit_name'] = 'Назва групи';
$txt['membergroups_edit_post_group'] = 'Ця група залежить від кількості повідомлень';
$txt['membergroups_min_posts'] = 'Необхідна кількість повідомлень';
$txt['membergroups_online_color'] = 'Кольори в списку online';
$txt['membergroups_star_count'] = 'Кількість зображень(зірочок)';
$txt['membergroups_star_image'] = 'Ім\'я файлу емблеми';
$txt['membergroups_star_image_note'] = 'Ви можете використати параметр $language для вказання тої чи іншої мови, якщо це потрібно';
$txt['membergroups_max_messages'] = 'Максимальна кількість особистих повідомлень';
$txt['membergroups_max_messages_note'] = '0 - необмежено';
$txt['membergroups_edit_save'] = 'Зберегти';
$txt['membergroups_delete'] = 'Видалити';
$txt['membergroups_confirm_delete'] = 'Ви впевнені, що хочете видалити цю групу?!';

$txt['membergroups_members_title'] = 'Показати всіх користувачів групи';
$txt['membergroups_members_no_members'] = 'Ця група зараз порожня';
$txt['membergroups_members_add_title'] = 'Додати користувача в цю групу';
$txt['membergroups_members_add_desc'] = 'Список доданих користувачів';
$txt['membergroups_members_add'] = 'Додати користувачів';
$txt['membergroups_members_remove'] = 'Видалити з групи';

$txt['membergroups_postgroups'] = 'Групи користувачів, які мають права на відсилання повідомлень';

$txt['membergroups_edit_groups'] = 'Редагувати групи користувачів';
$txt['membergroups_settings'] = 'Властивості групи користувачів';
$txt['groups_manage_membergroups'] = 'Групи, яким дозволено змінювати групи користувачів';
$txt['membergroups_settings_submit'] = 'Зберегти';
$txt['membergroups_select_permission_type'] = 'Встановити права';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'вибрати розділи';

$txt['admin_browse_approve'] = 'Користувачі, облікові записи яких, очікують схвалення';
$txt['admin_browse_approve_desc'] = 'Тут Ви можете керувати всіма користувачами, облікові записи, яких очікують схвалення.';
$txt['admin_browse_activate'] = 'Облікові записи користувачів, які очікують активацію';
$txt['admin_browse_activate_desc'] = 'Список користувачів, які очікують активацію.';
$txt['admin_browse_awaiting_approval'] = 'Очікують схвалення <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Очікують активації <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Ім\'я користувача';
$txt['admin_browse_email'] = 'Email адреса ';
$txt['admin_browse_ip'] = 'IP адреса';
$txt['admin_browse_registered'] = 'Зареєстрований';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'З виділеними';
$txt['admin_browse_no_members_approval'] = 'Немає користувачів, які очікує схвалення.';
$txt['admin_browse_no_members_activate'] = 'Немає користувачів, які очікує активації.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'всіх виділених користувачів?';
$txt['admin_browse_outstanding_warn'] = 'всіх користувачів?';
$txt['admin_browse_w_approve'] = 'Підтвердити';
$txt['admin_browse_w_activate'] = 'Активувати';
$txt['admin_browse_w_delete'] = 'Видалити';
$txt['admin_browse_w_reject'] = 'Відхилити';
$txt['admin_browse_w_remind'] = 'Повідомити';
$txt['admin_browse_w_approve_deletion'] = 'Підтвердити (Видалення облікового запису)';
$txt['admin_browse_w_email'] = 'і відправити email';
$txt['admin_browse_w_approve_require_activate'] = 'Схвалити і активувати';

$txt['admin_browse_filter_by'] = 'Фільтрувати по';
$txt['admin_browse_filter_show'] = 'Відображення';
$txt['admin_browse_filter_type_0'] = 'Неактивовані облікові записи';
$txt['admin_browse_filter_type_2'] = 'Неактивовані Email зміни';
$txt['admin_browse_filter_type_3'] = 'Несхвалені нові облікові записи';
$txt['admin_browse_filter_type_4'] = 'Неодобрені на видалення облікові записи';
$txt['admin_browse_filter_type_5'] = 'Неодобрені облікові записи, які не підходять під віковий ценз';

$txt['admin_browse_outstanding'] = 'Неактивовані користувачі';
$txt['admin_browse_outstanding_days_1'] = 'З усіма користувачами зареєстрованими більше';
$txt['admin_browse_outstanding_days_2'] = 'днів назад';
$txt['admin_browse_outstanding_perform'] = 'Виконати наступні дії';
$txt['admin_browse_outstanding_go'] = 'Виконати дію';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Реєстрація відхилена';
$txt['admin_approve_reject_desc'] = 'На жаль Ваше бажання приєднається до ' . $context['forum_name'] . ' було відхилено.';
$txt['admin_approve_delete'] = 'Обліковий запис вилучений';
$txt['admin_approve_delete_desc'] = 'Ваш обліковий запис на  ' . $context['forum_name'] . ' був вилучений.  Це відбулося через те, що Ви не активували свій обліковий запис. Можливість нової реєстрації у Вас зберігається.';
$txt['admin_approve_remind'] = 'Нагадати про реєстрацію';
$txt['admin_approve_remind_desc'] = 'Ви, як і раніше, не активували свій обліковий запис на  ';
$txt['admin_approve_remind_desc2'] = 'Будь ласка, натисніть на посилання, щоб активувати Ваш обліковий запис:';
$txt['admin_approve_accept_desc'] = 'Ваш обліковий запис був активований вручну Адміністратором форуму. Ви можете увійти і залишати Ваші повідомлення на форумі.';
$txt['admin_approve_require_activation'] = 'Ваш обліковий запис на  ' . $context['forum_name'] . ' був схвалена Адміністратором форуму, тепер Вам необхідно його активувати, перед тим як Ви зможете залишати повідомлення.';

?>