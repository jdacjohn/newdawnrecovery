<?php
// Version: 1.1; Search

$txt[183] = 'Задайте параметри на търсене';
$txt[189] = 'Изберете раздел в който желаете да търсите. Търсене във всички раздели не е препоръчително - може да доведе до много резултати.';
$txt[343] = 'Комбинацията от думите';
$txt[344] = 'Която и да е от думите';
$txt[583] = 'Публикации от потребител - име';

$txt['search_post_age'] = 'Публикации - от кога до кога';
$txt['search_between'] = 'Между';
$txt['search_and'] = 'и';
$txt['search_options'] = 'Опции';
$txt['search_show_complete_messages'] = 'Показване на резултатите като публикации';
$txt['search_subject_only'] = 'Търсене в заглавията на темите';
$txt['search_relevance'] = 'Уместност';
$txt['search_date_posted'] = 'По дата';
$txt['search_order'] = 'Сортиране по';
$txt['search_orderby_relevant_first'] = 'Най-уместните резултати първо';
$txt['search_orderby_large_first'] = 'Най-големите теми първо';
$txt['search_orderby_small_first'] = 'Най-малките теми първо';
$txt['search_orderby_recent_first'] = 'Най-новите теми първо';
$txt['search_orderby_old_first'] = 'Най-старите теми първо';

$txt['search_specific_topic'] = 'Търсене само в публикациите на темата';

$txt['mods_cat_search'] = 'Търсене';
$txt['groups_search_posts'] = 'Membergroups with access to the search function';
$txt['simpleSearch'] = 'Enable simple search';
$txt['search_results_per_page'] = 'Брой на резултатите на страница';
$txt['search_weight_frequency'] = 'Приоритет на търсене за брой на съвпадения от публикации в тема';
$txt['search_weight_age'] = 'Приоритет на търсене по давност на публикациите';
$txt['search_weight_length'] = 'Приоритет на търсене по големина на темите';
$txt['search_weight_subject'] = 'Приоритет на търсене за съвпадения в заглавията на темите';
$txt['search_weight_first_message'] = 'Приоритет на търсене по първа публикация в тема';
$txt['search_weight_sticky'] = 'Приоритет на търсене в залепените теми';

$txt['search_settings_desc'] = 'Here you can changes the basic settings of the search function.';
$txt['search_settings_title'] = 'Search function - settings';
$txt['search_settings_save'] = 'Съхрани';

$txt['search_weights'] = 'Weights';
$txt['search_weights_desc'] = 'Тук можеш да промениш различните приоритети при търсене. ';
$txt['search_weights_title'] = 'Приоритети при Търсене';
$txt['search_weights_total'] = 'Общо';
$txt['search_weights_save'] = 'Съхрани';

$txt['search_method'] = 'Search method';
$txt['search_method_desc'] = 'Here you can set the way search is powered.';
$txt['search_method_title'] = 'Search - method';
$txt['search_method_save'] = 'Save';
$txt['search_method_messages_table_space'] = 'Space used by forum messages in the database';
$txt['search_method_messages_index_space'] = 'Space used to index messages in the database';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Fulltext index';
$txt['search_method_no_index_exists'] = 'doesn\'t currently exist';
$txt['search_method_fulltext_create'] = 'create a fulltext index';
$txt['search_method_fulltext_cannot_create'] = 'cannot be created because the max message length is above 65,535 or table type is not MyISAM';
$txt['search_method_index_already_exsits'] = 'already created';
$txt['search_method_fulltext_remove'] = 'remove fulltext index';
$txt['search_method_index_partial'] = 'partially created';
$txt['search_index_custom_resume'] = 'resume';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'In order to be able to use fulltext search, you\'ll have to create a fulltext index first!';

$txt['search_index'] = 'Search index';
$txt['search_index_none'] = 'No index';
$txt['search_index_custom'] = 'Custom index';
$txt['search_index_label'] = 'Index';
$txt['search_index_size'] = 'Size';
$txt['search_index_create_custom'] = 'create custom index';
$txt['search_index_custom_remove'] = 'remove custom index';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'In order to be able to use a custom index search, you\\\'ll have to create a custom index first!';

$txt['search_force_index'] = 'Force the use of a search index';
$txt['search_match_words'] = 'Match whole words only';
$txt['search_max_results'] = 'Maximum results to show';
$txt['search_max_results_disable'] = '(0: no limit)';

$txt['search_create_index'] = 'Create index';
$txt['search_create_index_why'] = 'Why create a search index?';
$txt['search_create_index_start'] = 'Create';
$txt['search_predefined'] = 'Pre-defined profile';
$txt['search_predefined_small'] = 'Small sized index';
$txt['search_predefined_moderate'] = 'Moderate sized index';
$txt['search_predefined_large'] = 'Large sized index';
$txt['search_create_index_continue'] = 'Continue';
$txt['search_create_index_not_ready'] = 'SMF is currently creating a search index of your messages. To avoid overloading your server, the process has been temporarily paused. It should automatically continue in a few seconds. If it doesn\'t, please click continue below.';
$txt['search_create_index_progress'] = 'Progress';
$txt['search_create_index_done'] = 'Custom search index created!';
$txt['search_create_index_done_link'] = 'Continue';
$txt['search_double_index'] = 'You have currently created two indexes on the messages table. For best performance it is advisable to remove one of the two indexes.';

$txt['search_error_indexed_chars'] = 'Invalid number of indexed characters. At least 3 characters are needed for a useful index.';
$txt['search_error_max_percentage'] = 'Invalid percentage of words to be skipped. Use a value of at least 5%.';

$txt['search_adjust_query'] = 'Настройка на параметрите на търсене';
$txt['search_adjust_submit'] = 'Коригиране на търсенето';
$txt['search_did_you_mean'] = 'Може би имахте в предвид думата';

$txt['search_example'] = '<i>Пример:</i> Orwell "Animal Farm" -movie ';

?>