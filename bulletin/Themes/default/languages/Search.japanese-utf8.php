<?php
// Version: 1.1; Search

$txt[183] = '検索条件を設定';
$txt[189] = '検索する掲示板を指定してください。未指定の場合すべての掲示板から検索します。';
$txt[343] = 'どの語にも一致（AND）';
$txt[344] = 'いずれかの語に一致（OR）';
$txt[583] = 'ユーザで';

$txt['search_post_age'] = '投稿後の経過時間';
$txt['search_between'] = '';
$txt['search_and'] = '～';
$txt['search_options'] = '検索範囲';
$txt['search_show_complete_messages'] = '投稿文';
$txt['search_subject_only'] = 'スレッド名のみ';
$txt['search_relevance'] = '関連';
$txt['search_date_posted'] = '投稿された日';
$txt['search_order'] = '検索順';
$txt['search_orderby_relevant_first'] = '返信の多いスレッドを先頭';
$txt['search_orderby_large_first'] = '容量の大きいスレッドを先頭';
$txt['search_orderby_small_first'] = '容量の小さいスレッドを先頭';
$txt['search_orderby_recent_first'] = '新しいスレッドを先頭に';
$txt['search_orderby_old_first'] = '古いスレッドを先頭';

$txt['search_specific_topic'] = 'このスレッドの投稿のみを検索';

$txt['mods_cat_search'] = '検索';
$txt['groups_search_posts'] = 'メンバーグループの検索権限の設定';
$txt['simpleSearch'] = '簡易検索を有効化';
$txt['search_results_per_page'] = '１度に表示する検索結果数';
$txt['search_weight_frequency'] = 'Relative search weight for number of matching messages within a topic';
$txt['search_weight_age'] = 'Relative search weight for age of last matching message';
$txt['search_weight_length'] = 'Relative search weight for topic length';
$txt['search_weight_subject'] = 'Relative search weight for a matching subject';
$txt['search_weight_first_message'] = 'Relative search weight for a first message match';
$txt['search_weight_sticky'] = 'Relative search weight for a sticky topic';

$txt['search_settings_desc'] = 'Here you can changes the basic settings of the search function.';
$txt['search_settings_title'] = '検索機能－設定';
$txt['search_settings_save'] = '保存';

$txt['search_weights'] = '比重';
$txt['search_weights_desc'] = 'Here you can change the individual components of the relevance rating. ';
$txt['search_weights_title'] = '検索－比重';
$txt['search_weights_total'] = 'トータル';
$txt['search_weights_save'] = '保存';

$txt['search_method'] = '検索方法';
$txt['search_method_desc'] = 'Here you can set the way search is powered.';
$txt['search_method_title'] = '検索－方法';
$txt['search_method_save'] = '保存';
$txt['search_method_messages_table_space'] = 'データーベース上のフォーラムのメッセージのスペース';
$txt['search_method_messages_index_space'] = 'データーベース上のインデックスのメッセージのスペース';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Fulltext index';
$txt['search_method_no_index_exists'] = 'doesn\'t currently exist';
$txt['search_method_fulltext_create'] = '全文検索のインデックスを作成';
$txt['search_method_fulltext_cannot_create'] = 'cannot be created because the max message length is above 65,535 or table type is not MyISAM';
$txt['search_method_index_already_exsits'] = 'すでに作成されています';
$txt['search_method_fulltext_remove'] = '全文検索のインデックスを削除';
$txt['search_method_index_partial'] = 'partially created';
$txt['search_index_custom_resume'] = '続ける';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'In order to be able to use fulltext search, you\\\'ll have to create a fulltext index first!';

$txt['search_index'] = 'Search index';
$txt['search_index_none'] = 'インデックス無し';
$txt['search_index_custom'] = 'Custom index';
$txt['search_index_label'] = 'インデックス';
$txt['search_index_size'] = 'サイズ';
$txt['search_index_create_custom'] = 'create custom index';
$txt['search_index_custom_remove'] = 'remove custom index';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'In order to be able to use a custom index search, you\\\'ll have to create a custom index first!';

$txt['search_force_index'] = 'Force the use of a search index';
$txt['search_match_words'] = 'Match whole words only';
$txt['search_max_results'] = '一度に表示する検索結果の数';
$txt['search_max_results_disable'] = '（０は無制限）';

$txt['search_create_index'] = 'インデックス作成';
$txt['search_create_index_why'] = 'なぜインデックスを作成するのですか？';
$txt['search_create_index_start'] = '作成';
$txt['search_predefined'] = 'Pre-defined profile';
$txt['search_predefined_small'] = 'Small sized index';
$txt['search_predefined_moderate'] = 'Moderate sized index';
$txt['search_predefined_large'] = 'Large sized index';
$txt['search_create_index_continue'] = '続ける';
$txt['search_create_index_not_ready'] = 'SMF is currently creating a search index of your messages. To avoid overloading your server, the process has been temporarily paused. It should automatically continue in a few seconds. If it doesn\'t, please click continue below.';
$txt['search_create_index_progress'] = '進行度';
$txt['search_create_index_done'] = 'Custom search index created!';
$txt['search_create_index_done_link'] = '続ける';
$txt['search_double_index'] = 'You have currently created two indexes on the messages table. For best performance it is advisable to remove one of the two indexes.';

$txt['search_error_indexed_chars'] = 'Invalid number of indexed characters. At least 3 characters are needed for a useful index.';
$txt['search_error_max_percentage'] = 'Invalid percentage of words to be skipped. Use a value of at least 5%.';

$txt['search_adjust_query'] = '検索パラメータの調整';
$txt['search_adjust_submit'] = '反転検索';
$txt['search_did_you_mean'] = 'もしかして';

$txt['search_example'] = '<i>例：</i>"動物 園" -映画';

?>