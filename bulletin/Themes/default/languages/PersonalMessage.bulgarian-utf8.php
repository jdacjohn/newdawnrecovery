<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Лични съобщения';
$txt[148] = 'Изпращане';
$txt[150] = 'До';
$txt[1502] = 'Bcc';
$txt[316] = 'Входящи';
$txt[320] = 'Изходящи';
$txt[321] = 'Ново съобщение';
$txt[411] = 'Изтриване на съобщения';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Изтрий всички съобщения от PMBOX';
$txt[413] = 'Сигурни ли сте че желаете да бъдат изтрити?';
$txt[535] = 'Получател';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Ново съобщение: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Имате съобщение от SENDER от ' . $context['forum_name'] . '.' . "\n\n" . 'ВАЖНО: Това е автоматично известие. Не отговаряйте на този е-мейл.' . "\n\n" . 'В съобщението се съдържа следното:' . "\n\n" . 'MESSAGE';
$txt[748] = '(допълнителни получатели: \'име1, име2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Отговорете на това съобщение от тук:';

$txt['smf249'] = 'Сигурни ли сте че желаете да изтриете избраните съобщения?';

$txt['sent_to'] = 'Изпратени до';
$txt['reply_to_all'] = 'Отговор към всички';

$txt['pm_capacity'] = 'Капацитет';
$txt['pm_currently_using'] = '%s съобщения, %s%% запълнен.';

$txt['pm_error_user_not_found'] = 'Не може да се намери потребител \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Потребител \'%s\' не желае да получава съобщения от вас.';
$txt['pm_error_data_limit_reached'] = 'Съобщението не е изпратено до \'%s\' . Капацитетът за съобщения му е изчерпан.';
$txt['pm_successfully_sent'] = 'Изпратено е успешно до \'%s\'.';
$txt['pm_too_many_recipients'] = 'Не може да изпратите съобщение до повече от %d получатели.';
$txt['pm_too_many_per_hour'] = 'Превишили сте лимита от %d съобщения на час.';
$txt['pm_send_report'] = 'Уведоми за нередност';
$txt['pm_save_outbox'] = 'Запази копие от това съобщение при моите изходящи съобщения';
$txt['pm_undisclosed_recipients'] = 'Неоткрити получатели';

$txt['pm_read'] = 'Прочети';
$txt['pm_replied'] = 'Отговорено до';

// Message Pruning.
$txt['pm_prune'] = 'Почистване от ненужни съобщения';
$txt['pm_prune_desc1'] = 'Изтрий всички по-стари от';
$txt['pm_prune_desc2'] = 'дни.';
$txt['pm_prune_warning'] = 'Потвърждавате ли?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Допълнителни действия';
$txt['pm_actions_delete_selected'] = 'Изтрий избраните';
$txt['pm_actions_filter_by_label'] = 'Сортиране по папки';
$txt['pm_actions_go'] = 'Потвърди';

// Manage Labels Screen.
$txt['pm_apply'] = 'Приложи';
$txt['pm_manage_labels'] = 'Настройки на папките';
$txt['pm_labels_delete'] = 'Сигурни ли сте че желаете да изтриете тези папки?';
$txt['pm_labels_desc'] = 'От тук можете да добавяте, коригирате или изтривате папки, използвани за сортиране на съобщенията.';
$txt['pm_label_add_new'] = 'Добави нова папка';
$txt['pm_label_name'] = 'Име на папката';
$txt['pm_labels_no_exist'] = 'Нямате добавени папки!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Папка';
$txt['pm_msg_label_title'] = 'Премести в папка';
$txt['pm_msg_label_apply'] = 'Добави в папка';
$txt['pm_msg_label_remove'] = 'Премахни от папка';
$txt['pm_msg_label_inbox'] = 'Входящи';
$txt['pm_sel_label_title'] = 'Добави избраните в';
$txt['labels_too_many'] = 'Съжалявам, %s съобщения се съдържат в максимално ограничения брой папки!';

// Sidebar Headings.
$txt['pm_labels'] = 'Папки';
$txt['pm_messages'] = 'Съобщения';
$txt['pm_preferences'] = 'Настройки';

$txt['pm_is_replied_to'] = 'Вие сте отговорили или препратили това съобщение.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Уведоми администратор';
$txt['pm_report_title'] = 'Уведомително съобщение до администратор';
$txt['pm_report_desc'] = 'От тук имате възможност да уведомите администраторите за получено съобщение, което мислите че е нередно или обидно.';
$txt['pm_report_admins'] = 'Изберете администратор';
$txt['pm_report_all_admins'] = 'Уведоми всички администратори';
$txt['pm_report_reason'] = 'Опишете причината за уведомлението';
$txt['pm_report_message'] = 'Изпращане';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[Уведомление за PM] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} ви уведомява за по долното съобщение, изпратено {SENDER}, със следната причина:';
$txt['pm_report_pm_other_recipients'] = 'Други получатели на съобщението:';
$txt['pm_report_pm_hidden'] = '%d скрит(и) получател(и)';
$txt['pm_report_pm_unedited_below'] = 'Това е оригиналното съдържание на съобщението:';
$txt['pm_report_pm_sent'] = 'Изпратено:';

$txt['pm_report_done'] = 'Благодарим ви за доверието. Скоро ще получите отговор от администраторите.';
$txt['pm_report_return'] = 'Обратно към входящите съобщения';

$txt['pm_search_title'] = 'Търсене в съобщенията';
$txt['pm_search_bar_title'] = 'Търсене';
$txt['pm_search_text'] = 'Търсене на';
$txt['pm_search_go'] = 'Търси';
$txt['pm_search_advanced'] = 'Експертно търсене';
$txt['pm_search_user'] = 'От потребител - име';
$txt['pm_search_match_all'] = 'Комбинация от думите';
$txt['pm_search_match_any'] = 'Която и да е от думите';
$txt['pm_search_options'] = 'Опции';
$txt['pm_search_post_age'] = 'от кога до кога';
$txt['pm_search_show_complete'] = 'Показване на резултатите като съобщения.';
$txt['pm_search_subject_only'] = 'Търсене в заглавията на съобщенията или изпращач.';
$txt['pm_search_between'] = 'Между';
$txt['pm_search_between_and'] = 'и';
$txt['pm_search_between_days'] = 'дни';
$txt['pm_search_order'] = 'Сортиране по';
$txt['pm_search_choose_label'] = 'Изберете в кои папки да се търси';

$txt['pm_search_results'] = 'Резултат от търсенето';
$txt['pm_search_none_found'] = 'Няма намерени съобщения';

$txt['pm_search_orderby_relevant_first'] = 'Най-уместните първо';
$txt['pm_search_orderby_recent_first'] = 'Най-новите първо';
$txt['pm_search_orderby_old_first'] = 'Най-старите първо';

$txt['pm_visual_verification_label'] = 'Визуално потвърждение';
$txt['pm_visual_verification_desc'] = 'Моля, напишете символите от картинката за да изпратите съобщението.';
$txt['pm_visual_verification_listen'] = 'Чуйте символите';

?>