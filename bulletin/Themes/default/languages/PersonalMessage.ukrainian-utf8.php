<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Особисті Повідомлення';
$txt[148] = 'Відправити повідомлення';
$txt[150] = 'Кому';
$txt[1502] = 'Копія';
$txt[316] = 'Вхідні';
$txt[320] = 'Висхідні';
$txt[321] = 'Нове Повідомлення';
$txt[411] = 'Видалити Повідомлення';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Видалити всі особисті повідомлення';
$txt[413] = 'Ви впевнені, що хочете видалити всі повідомлення?';
$txt[535] = 'Одержувач';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Нове Особисте Повідомлення: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Тільки що Ви одержали особисте повідомлення від SENDER на ' . $context['forum_name'] . '.' . "\n\n" . 'Важливо: Запам\'ятаєте, це всього лише повідомлення. Будь ласка не відповідайте на цей email.' . "\n\n" . 'Відправлене Вам повідомлення:' . "\n\n" . 'MESSAGE';
$txt[748] = '(одержувачі: \'ім\'я1, ім\'я2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Відповісти на це Особисте Повідомлення тут:';

$txt['smf249'] = 'Ви впевнені, що хочете видалити всі виділені особисті повідомлення?';

$txt['sent_to'] = 'Одержувач';
$txt['reply_to_all'] = 'Відповісти Всім';

$txt['pm_capacity'] = 'Кількість';
$txt['pm_currently_using'] = '%s повідомлень, %s%% повний.';

$txt['pm_error_user_not_found'] = 'Не можу знайти користувача \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Користувач \'%s\' заблокував Ваше особисте повідомлення.';
$txt['pm_error_data_limit_reached'] = 'Повідомлення не може бути відправлене \'%s\' скринька переповнена!';
$txt['pm_successfully_sent'] = 'Повідомлення вдало відправлене \'%s\'.';
$txt['pm_too_many_recipients'] = 'Ви не можете відправити особисті повідомлення більше %d одержувачам за один раз.';
$txt['pm_too_many_per_hour'] = 'Ви ще перевищили ліміт в %d персональних повідомлень за годину.';
$txt['pm_send_report'] = 'Відправити звіт';
$txt['pm_save_outbox'] = 'Зберігати копію у висхідних';
$txt['pm_undisclosed_recipients'] = 'Сховані одержувачі';

$txt['pm_read'] = 'Прочитати';
$txt['pm_replied'] = 'Відповісти';

// Message Pruning.
$txt['pm_prune'] = 'Видалити Повідомлення';
$txt['pm_prune_desc1'] = 'Видалити всі особисті повідомлення старіші, ніж';
$txt['pm_prune_desc2'] = 'днів.';
$txt['pm_prune_warning'] = 'Ви впевнені, що хочете очистити Ваші особисті повідомлення?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Подальші дії';
$txt['pm_actions_delete_selected'] = 'Видалити виділені';
$txt['pm_actions_filter_by_label'] = 'Фільтрувати по мітках';
$txt['pm_actions_go'] = 'Відправити';

// Manage Labels Screen.
$txt['pm_apply'] = 'Прийняти';
$txt['pm_manage_labels'] = 'Керування Ярликами';
$txt['pm_labels_delete'] = 'Ви впевнені, що хочете видалити виділені ярлики?';
$txt['pm_labels_desc'] = 'Тут Ви можете додавати, редагувати і видаляти папки у Вашому центрі особистих повідомлень.';
$txt['pm_label_add_new'] = 'Створити новий ярлик';
$txt['pm_label_name'] = 'Ім\'я ярлика';
$txt['pm_labels_no_exist'] = 'У Вас створених ярликів!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Ярлик';
$txt['pm_msg_label_title'] = 'Створити ярлик';
$txt['pm_msg_label_apply'] = 'Додати ярлик';
$txt['pm_msg_label_remove'] = 'Видалити ярлик';
$txt['pm_msg_label_inbox'] = 'Вхідні';
$txt['pm_sel_label_title'] = 'Існуючі папки';
$txt['labels_too_many'] = 'Вибачите, %s повідомлення мають максимально дозволена кількість ярликів!';

// Sidebar Headings.
$txt['pm_labels'] = 'Ярлики';
$txt['pm_messages'] = 'Повідомлень';
$txt['pm_preferences'] = 'Переваги';

$txt['pm_is_replied_to'] = 'Ви відповіли на це повідомлення.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Повідомити Адміністраторові';
$txt['pm_report_title'] = 'Повідомити про Особисте Повідомлення';
$txt['pm_report_desc'] = 'Із цієї сторінки Ви можете повідомити про отримане Вами особисте повідомлення Адміністрації форуму. Будь ласка, переконаєтеся, що Ви написали причину, по якій Ви повідомляєте про Ваше повідомлення.';
$txt['pm_report_admins'] = 'Відправити Адміністраторові';
$txt['pm_report_all_admins'] = 'Відправити всім Адміністраторам форуму';
$txt['pm_report_reason'] = 'Причина';
$txt['pm_report_message'] = 'Відправити';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[Звіт] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} відправив звіт про особисте повідомлення, відправлене {SENDER}, з наступних причин:';
$txt['pm_report_pm_other_recipients'] = 'Інші одержувачі повідомлення:';
$txt['pm_report_pm_hidden'] = '%d схований (-і) одержувач (-і)';
$txt['pm_report_pm_unedited_below'] = 'Нижче зміст оригінального особистого повідомлення про яке посилали звіт:';
$txt['pm_report_pm_sent'] = 'Відправники:';

$txt['pm_report_done'] = 'Спасибі за відправлений звіт. Незабаром Ви одержите повідомлення від Адміністрації';
$txt['pm_report_return'] = 'Повернуться у вхідні';

$txt['pm_search_title'] = 'Пошук Особистих Повідомлень';
$txt['pm_search_bar_title'] = 'Пошук Повідомлень';
$txt['pm_search_text'] = 'Пошук';
$txt['pm_search_go'] = 'Пошук';
$txt['pm_search_advanced'] = 'Розширений Пошук';
$txt['pm_search_user'] = 'по користувачі';
$txt['pm_search_match_all'] = 'Утримуючі всі слова';
$txt['pm_search_match_any'] = 'Утримуючі будь-які слова';
$txt['pm_search_options'] = 'Властивості';
$txt['pm_search_post_age'] = 'За віком';
$txt['pm_search_show_complete'] = 'Показувати повністю повідомлення в результатах.';
$txt['pm_search_subject_only'] = 'Пошук тільки по темі і авторові.';
$txt['pm_search_between'] = 'Між';
$txt['pm_search_between_and'] = 'і';
$txt['pm_search_between_days'] = 'днів';
$txt['pm_search_order'] = 'Результати пошуку';
$txt['pm_search_choose_label'] = 'Виберіть параметри пошуку або пошук всього';

$txt['pm_search_results'] = 'Результати Пошуку';
$txt['pm_search_none_found'] = 'Повідомлень не знайдене';

$txt['pm_search_orderby_relevant_first'] = 'Доречні першим';
$txt['pm_search_orderby_recent_first'] = 'Останні першими';
$txt['pm_search_orderby_old_first'] = 'Старі першими';

$txt['pm_visual_verification_label'] = 'Перевірка';
$txt['pm_visual_verification_desc'] = 'Будь ласка, введіть код із зображення, показаного вище для відправлення приватного повідомлення.';
$txt['pm_visual_verification_listen'] = 'Чутливий до регістру';

?>