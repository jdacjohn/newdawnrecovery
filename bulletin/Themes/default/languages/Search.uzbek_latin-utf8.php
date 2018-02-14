<?php
// Version: 1.1; Search

$txt[183] = 'Qidiruv xossalarini o`zgartirish';
$txt[189] = 'Qidiruv uchun biror bo`lim yoki hammasini tanlang';
$txt[343] = 'To`liq jumla holida';
$txt[344] = 'Biror mos keluvchi so`z yordamida';
$txt[583] = 'Foydalanuvchi';

$txt['search_post_age'] = 'Xabarlar muddati';
$txt['search_between'] = 'Muddati';
$txt['search_and'] = 'dan';
$txt['search_options'] = 'Qidiruv usuli';
$txt['search_show_complete_messages'] = 'Natijalarni xabar ko`rinishida ko`rish';
$txt['search_subject_only'] = 'Faqat mavzular orasidan izlash';
$txt['search_relevance'] = 'Moslik darajasi';
$txt['search_date_posted'] = 'Sanasi';
$txt['search_order'] = 'Natijalar tartibi';
$txt['search_orderby_relevant_first'] = 'Avval eng moslarini';
$txt['search_orderby_large_first'] = 'Avval katta mavzularni';
$txt['search_orderby_small_first'] = 'Avval kichik mavzularni';
$txt['search_orderby_recent_first'] = 'Avval so`ngilarini';
$txt['search_orderby_old_first'] = 'Avval eskilarini';

$txt['search_specific_topic'] = 'Faqat mavzulardagi postlar orasidan izlash';

$txt['mods_cat_search'] = 'Izlash';
$txt['groups_search_posts'] = 'Qidiruvdan foydalana oladigan a`zolar guruhlari';
$txt['simpleSearch'] = 'Oddiy qidiruvchi ishga tushirish';
$txt['search_results_per_page'] = 'Sahifalardagi qidiruv natijalarining joylashish soni';
$txt['search_weight_frequency'] = 'Relative search weight for number of matching messages within a topic';
$txt['search_weight_age'] = 'Relative search weight for age of last matching message';
$txt['search_weight_length'] = 'Relative search weight for topic length';
$txt['search_weight_subject'] = 'Relative search weight for a matching subject';
$txt['search_weight_first_message'] = 'Relative search weight for a first message match';
$txt['search_weight_sticky'] = 'Relative search weight for a sticky topic';

$txt['search_settings_desc'] = 'Bu yarda siz qidiruvning asosiy xususiyatlarinii o`zgatririshingiz mumkin.';
$txt['search_settings_title'] = 'Search function - settings';
$txt['search_settings_save'] = 'Saqlash';

$txt['search_weights'] = 'Weights';
$txt['search_weights_desc'] = 'Here you can change the individual components of the relevance rating. ';
$txt['search_weights_title'] = 'Search - weights';
$txt['search_weights_total'] = 'Umumiy';
$txt['search_weights_save'] = 'Saqlash';

$txt['search_method'] = 'Qidiruv metodi';
$txt['search_method_desc'] = 'Here you can set the way search is powered.';
$txt['search_method_title'] = 'Search - method';
$txt['search_method_save'] = 'Saqlash';
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
$txt['search_method_fulltext_warning'] = 'In order to be able to use fulltext search, you\\\'ll have to create a fulltext index first!';

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
$txt['search_max_results'] = 'Ko`rsatiladigan eng ko`p natijalar soni';
$txt['search_max_results_disable'] = '(0: cheklanmagan)';

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

$txt['search_adjust_query'] = 'Qidiruv usullariini o`zgartirish';
$txt['search_adjust_submit'] = 'Qidiruvni ko`rib chiqish';
$txt['search_did_you_mean'] = 'You may have meant to search for';

$txt['search_example'] = '<i>e.g.</i> Orwell "Animal Farm" -movie';

?>