<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'Управление на потребителските групи';
$txt['membergroups_description'] = 'Потребителските групи, са групи от потребители които се различават по права за ползване, и достъп до различните функции на форума. Някои от тях се базирани по брой публикации направени от даден потребител(Динамични групи). Като администратор, можеш да променяш статута на потребителите от техните профили.';
$txt['membergroups_modify'] = 'Промени';

$txt['membergroups_add_group'] = 'Добави група';
$txt['membergroups_regular'] = 'Основни групи';
$txt['membergroups_post'] = 'Групи базирани на брой публикации';

$txt['membergroups_new_group'] = 'Добави група';
$txt['membergroups_group_name'] = 'Име на групата';
$txt['membergroups_new_board'] = 'Достъпни Раздели';
$txt['membergroups_new_board_desc'] = 'Раздели които членовете на тази група могат да виждат.';
$txt['membergroups_new_board_post_groups'] = '<em>Забележка: обикновено, Динамични групи(базирани на брой публикации) нямат нужда от достъп, защото потребителите преминават от една група в друга динамично.</em>';
$txt['membergroups_new_as_type'] = 'по вид';
$txt['membergroups_new_as_copy'] = 'на основата на';
$txt['membergroups_new_copy_none'] = '(никоя)';
$txt['membergroups_can_edit_later'] = '(може да се настроят по-късно.)';

$txt['membergroups_edit_group'] = 'Промени групата';
$txt['membergroups_edit_name'] = 'Име на групата';
$txt['membergroups_edit_post_group'] = 'Статична група(Не е базирана на брой публикации).';
$txt['membergroups_min_posts'] = 'Минимум публикации';
$txt['membergroups_online_color'] = 'Цвят в онлайн списъка';
$txt['membergroups_star_count'] = 'Брой на звездичките';
$txt['membergroups_star_image'] = 'Име на файла';
$txt['membergroups_star_image_note'] = '(starting off theme URL/images, you can use $language for the language of the user..)';
$txt['membergroups_max_messages'] = 'Максимум брой лични съобщения';
$txt['membergroups_max_messages_note'] = '(0 = неограничен)';
$txt['membergroups_edit_save'] = 'Запази';
$txt['membergroups_delete'] = 'Изтрий';
$txt['membergroups_confirm_delete'] = 'Сигурен ли си че желаеш да изтриеш групата?!';

$txt['membergroups_members_title'] = 'Списък с членовете на тази група';
$txt['membergroups_members_no_members'] = 'Групата няма потребители';
$txt['membergroups_members_add_title'] = 'Добавяне на потребител към групата';
$txt['membergroups_members_add_desc'] = 'Списък на потребителите за които ще бъдат добавени';
$txt['membergroups_members_add'] = 'Добави потребители';
$txt['membergroups_members_remove'] = 'Извади от групата';

$txt['membergroups_postgroups'] = 'Динамични групи(базирани на брой публикации)';

$txt['membergroups_edit_groups'] = 'Редактиране групите';
$txt['membergroups_settings'] = 'Настройки на групите';
$txt['groups_manage_membergroups'] = 'Групи имащи права да променят другите групи';
$txt['membergroups_settings_submit'] = 'Съхрани';
$txt['membergroups_select_permission_type'] = 'Избор на вид за достъп';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'Покажи разделите на форума';

$txt['admin_browse_approve'] = 'Потребители чиито регистрации чакат да бъдат одобрени';
$txt['admin_browse_approve_desc'] = 'От тук можеш да управляваш всички потребители, чиито регистрации чакат да бъдат одобрени.';
$txt['admin_browse_activate'] = 'Потребители които не са активирали регистрациите си';
$txt['admin_browse_activate_desc'] = 'Потребители които не са активирали регистрациите си в този форум.';
$txt['admin_browse_awaiting_approval'] = 'Чакащи Одобрение <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Неактивирани Регистрации <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Потребителско име';
$txt['admin_browse_email'] = 'Е-майл адрес';
$txt['admin_browse_ip'] = 'IP адрес';
$txt['admin_browse_registered'] = 'Регистриран';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Със избраните';
$txt['admin_browse_no_members_approval'] = 'Няма чакащи за одобрение.';
$txt['admin_browse_no_members_activate'] = 'Няма потребители, които не са активирали регистрациите си.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'всички избрани потребители?';
$txt['admin_browse_outstanding_warn'] = 'всички засегнати потребители?';
$txt['admin_browse_w_approve'] = 'Одобри';
$txt['admin_browse_w_activate'] = 'Активирай';
$txt['admin_browse_w_delete'] = 'Изтрий';
$txt['admin_browse_w_reject'] = 'Откажи';
$txt['admin_browse_w_remind'] = 'Напомни';
$txt['admin_browse_w_approve_deletion'] = 'Одобри (Изтриване на регистрации)';
$txt['admin_browse_w_email'] = 'и изпрати Е-мейл';
$txt['admin_browse_w_approve_require_activate'] = 'Одобрение с активация';

$txt['admin_browse_filter_by'] = 'Сортирай по';
$txt['admin_browse_filter_show'] = 'Показване';
$txt['admin_browse_filter_type_0'] = 'Неактивирани регистрации';
$txt['admin_browse_filter_type_2'] = 'Неактивирани промени на е-мейл';
$txt['admin_browse_filter_type_3'] = 'Неодобрени нови регистрации';
$txt['admin_browse_filter_type_4'] = 'Неодобрени регистрации за изтриване';
$txt['admin_browse_filter_type_5'] = 'Неодобрени "Under Age" регистрации';

$txt['admin_browse_outstanding'] = 'Отличителни потребители';
$txt['admin_browse_outstanding_days_1'] = 'Потребители регистрирали се повече преди';
$txt['admin_browse_outstanding_days_2'] = 'дни';
$txt['admin_browse_outstanding_perform'] = 'Приложи следното действие';
$txt['admin_browse_outstanding_go'] = 'Прилагане';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Отказ на регистрация';
$txt['admin_approve_reject_desc'] = 'За съжаление, вашата регистрация в ' . $context['forum_name'] . ' не е одобрена.';
$txt['admin_approve_delete'] = 'Изтриване на регистрация';
$txt['admin_approve_delete_desc'] = 'Вашата регистрация в ' . $context['forum_name'] . ' е изтрита. Може би не сте я активирали, но може отново да се регистрирате.';
$txt['admin_approve_remind'] = 'Напомняне';
$txt['admin_approve_remind_desc'] = 'Все още не сте активирали регистрацията си в';
$txt['admin_approve_remind_desc2'] = 'Моля, използвайте линка по долу:';
$txt['admin_approve_accept_desc'] = 'Вашата регистрация е активирана от администраторите на форума.';
$txt['admin_approve_require_activation'] = 'Вашата регистрация в ' . $context['forum_name'] . ' е одобрена, но сега вие трябва да я активирате.';

?>