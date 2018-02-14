<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Индекс на приватни пораки';
$txt[148] = 'Испрати порака';
$txt[150] = 'За';
$txt[1502] = 'Bcc';
$txt[316] = 'Примени';
$txt[320] = 'Испратени';
$txt[321] = 'Нова порака';
$txt[411] = 'Избриши ги пораките';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Избриши ги сите пораки од инбоксот на моето сандаче';
$txt[413] = 'Дали си сигурен дека сакаш да ги избришеш сите пораки?';
$txt[535] = 'Примател';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Нова приватна порака: Наслов';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Испраќачот само што ви испрати нова приватна порака на ' . $context['forum_name'] . '.' . "\n\n" . 'ВАЖНО: Запаметете, ова е само известување. Не одговарајте на овој email.' . "\n\n" . 'Пораката која ви ја испратил е следната:' . "\n\n" . 'ПОРАКА';
$txt[748] = '(повеќе приматели: \'име1, име2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Одговорете на оваа приватна порака тука:';

$txt['smf249'] = 'Дали сте сигурни дека сакате да ги избришете сите означени приватни пораки?';

$txt['sent_to'] = 'Испратено';
$txt['reply_to_all'] = 'Одговори на сите';

$txt['pm_capacity'] = 'Капацитет';
$txt['pm_currently_using'] = '%s пораки, %s%% полно.';

$txt['pm_error_user_not_found'] = 'Не можам да го пронајдам членот \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Корисникот \'%s\' ги блокирал вашите приватни пораки.';
$txt['pm_error_data_limit_reached'] = 'Приватната порака за \'%s\' не е испратена заради пречекорен максимален лимит.';
$txt['pm_successfully_sent'] = 'Приватната порака е успешно испратена на \'%s\'.';
$txt['pm_too_many_recipients'] = 'Можете да испратите лични пораки на повеќе од %d примател(и) одеднаш.';
$txt['pm_too_many_per_hour'] = 'Го преминавте  ограничувањето од %d лични пораки по час.';
$txt['pm_send_report'] = 'Испрати извештај';
$txt['pm_save_outbox'] = 'Сочувај копија во сандачето Испратени';
$txt['pm_undisclosed_recipients'] = 'Недостапен примател';

$txt['pm_read'] = 'Прочитани';
$txt['pm_replied'] = 'Одговорено на';

// Message Pruning.
$txt['pm_prune'] = 'Бришење на пораки';
$txt['pm_prune_desc1'] = 'Избриши ги сите приватни пораки постари од';
$txt['pm_prune_desc2'] = 'денови.';
$txt['pm_prune_warning'] = 'Дали си сигурен дека сакаш да ги избришес личните пораки?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Понатамошни акции';
$txt['pm_actions_delete_selected'] = 'Избриши го означеното';
$txt['pm_actions_filter_by_label'] = 'Филтрирај према Етикета';
$txt['pm_actions_go'] = 'Оди';

// Manage Labels Screen.
$txt['pm_apply'] = 'Примени';
$txt['pm_manage_labels'] = 'Уредувај ги Етикетите';
$txt['pm_labels_delete'] = 'Дали си сигурен дека сакаш да ги избришеш означените етикети?';
$txt['pm_labels_desc'] = 'Од тука можеш да додаваш, менуваш и бришеш labels користени во твоите лични пораки.';
$txt['pm_label_add_new'] = 'Додади нова Етикета';
$txt['pm_label_name'] = 'Име на Етикета';
$txt['pm_labels_no_exist'] = 'Моментално немаш ниедена етикета!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Етикета';
$txt['pm_msg_label_title'] = 'Порака со Етикета';
$txt['pm_msg_label_apply'] = 'Додади Етикета';
$txt['pm_msg_label_remove'] = 'Отстрани Етикета';
$txt['pm_msg_label_inbox'] = 'Примени';
$txt['pm_sel_label_title'] = 'Означени Етикети';
$txt['labels_too_many'] = 'Извинете, %s пораки веќе имаат максимален број дозволени етикети!';

// Sidebar Headings.
$txt['pm_labels'] = 'Етикети';
$txt['pm_messages'] = 'Пораки';
$txt['pm_preferences'] = 'Подесувања';

$txt['pm_is_replied_to'] = 'Вие одговоривте или ја препративте оваа порака.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Извести го Администраторот';
$txt['pm_report_title'] = 'Извести за Лична порака';
$txt['pm_report_desc'] = 'Од оваа страница можеш да го известиш Администраторот за лични пораки кои сте ги примиле. Ве молиме вклучете и опис зошто ја пријавувате оваа порака и тој опис ќе биде испратен заедно со содржината на оргиналната порака.';
$txt['pm_report_admins'] = 'Администраторот да испрати извештај на';
$txt['pm_report_all_admins'] = 'Испрати на сите Администратори на форумот';
$txt['pm_report_reason'] = 'Причина заради која ја пријавувате оваа порака';
$txt['pm_report_message'] = 'Пријави ја пораката';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[ИЗВЕСТИ] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} ја пријавил следната лична порака подоле, испратена од {SENDER}, заради следната причина:';
$txt['pm_report_pm_other_recipients'] = 'Извештајот е испратен и на следните приматели:';
$txt['pm_report_pm_hidden'] = '%d сокриен(и) примател(и)';
$txt['pm_report_pm_unedited_below'] = 'Подоле е оргиналниот текст на пораката која е пријавена:';
$txt['pm_report_pm_sent'] = 'Испрати:';

$txt['pm_report_done'] = 'Ви благодариме за поднесувањето на овој извештај. За кратко време ќе добиете одговот од Администраторот';
$txt['pm_report_return'] = 'Врати се во Примени пораки';

$txt['pm_search_title'] = 'Пребарувај ги Личните пораки';
$txt['pm_search_bar_title'] = 'Пребарај ги пораките';
$txt['pm_search_text'] = 'Пребарај за';
$txt['pm_search_go'] = 'Пребарување';
$txt['pm_search_advanced'] = 'Напредно пребарување';
$txt['pm_search_user'] = 'од корисник';
$txt['pm_search_match_all'] = 'Совпаѓање на сите зборови';
$txt['pm_search_match_any'] = 'Совпаѓање на било кој збор';
$txt['pm_search_options'] = 'Можности';
$txt['pm_search_post_age'] = 'Возраст';
$txt['pm_search_show_complete'] = 'Покажи целосна порака во резултатите.';
$txt['pm_search_subject_only'] = 'Пребарувај само по наслов и автор.';
$txt['pm_search_between'] = 'Помеѓу';
$txt['pm_search_between_and'] = 'и';
$txt['pm_search_between_days'] = 'денови';
$txt['pm_search_order'] = 'Подреди ги резултатите према';
$txt['pm_search_choose_label'] = 'Одбери етикети за пребарување, или пребарувај ги сите';

$txt['pm_search_results'] = 'Резултати на пребарувањето';
$txt['pm_search_none_found'] = 'Нема најдени пораки';

$txt['pm_search_orderby_relevant_first'] = 'Прво најблиските';
$txt['pm_search_orderby_recent_first'] = 'Прво најновите';
$txt['pm_search_orderby_old_first'] = 'Прво најстарите';

$txt['pm_visual_verification_label'] = 'Одобрување';
$txt['pm_visual_verification_desc'] = 'Ве молам внесете во кодот во сликата погоре за да биде испратена оваа лична порака.';
$txt['pm_visual_verification_listen'] = 'Слушајте ги буквите';

?>