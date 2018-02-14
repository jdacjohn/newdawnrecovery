<?php
// Version: 1.1; Search

$txt[183] = '搜尋設定';
$txt[189] = '選擇要搜尋的版面，或搜尋全部版面';
$txt[343] = '包含整個字詞';
$txt[344] = '包含任何字詞';
$txt[583] = '依照會員名稱';

$txt['search_post_age'] = '文章日期';
$txt['search_between'] = '這段時間之內';
$txt['search_and'] = '天到';
$txt['search_options'] = '選項';
$txt['search_show_complete_messages'] = '以文章方式顯示';
$txt['search_subject_only'] = '只搜尋主題標題';
$txt['search_relevance'] = '相關';
$txt['search_date_posted'] = '發佈日期';
$txt['search_order'] = '搜尋順序';
$txt['search_orderby_relevant_first'] = '最相關的結果最先';
$txt['search_orderby_large_first'] = '最多文章的主題最先';
$txt['search_orderby_small_first'] = '最少文章的主題最先';
$txt['search_orderby_recent_first'] = '最近發佈的主題最先';
$txt['search_orderby_old_first'] = '最舊的主題最先';

$txt['search_specific_topic'] = '只搜尋主題內的文章';

$txt['mods_cat_search'] = '搜尋';
$txt['groups_search_posts'] = '可使用搜尋功能的群組';
$txt['simpleSearch'] = '開啟簡易搜尋';
$txt['search_results_per_page'] = '每頁顯示的搜尋結果';
$txt['search_weight_frequency'] = '主題內的文章';
$txt['search_weight_age'] = '最後一篇文章的日期';
$txt['search_weight_length'] = '主題內的文章數量';
$txt['search_weight_subject'] = '主題的標題';
$txt['search_weight_first_message'] = '主題的第一篇文章';
$txt['search_weight_sticky'] = '頂置的主題';

$txt['search_settings_desc'] = '這裡可以讓您改變基本的搜尋功能。';
$txt['search_settings_title'] = '搜尋功能 - 設定';
$txt['search_settings_save'] = '儲存';

$txt['search_weights'] = '相關結果';
$txt['search_weights_desc'] = '這裡可以讓您改變搜尋出來的結果。 ';
$txt['search_weights_title'] = '搜尋 - 相關結果';
$txt['search_weights_total'] = '總共';
$txt['search_weights_save'] = '儲存';

$txt['search_method'] = '搜尋方法';
$txt['search_method_desc'] = '這裡可以讓您選擇搜尋的方法。';
$txt['search_method_title'] = '搜尋 - 方法';
$txt['search_method_save'] = '儲存';
$txt['search_method_messages_table_space'] = '文章佔用的資料庫容量';
$txt['search_method_messages_index_space'] = '索引文章佔用的資料庫容量';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Fulltext 索引';
$txt['search_method_no_index_exists'] = '不存在';
$txt['search_method_fulltext_create'] = '建立 fulltext 索引';
$txt['search_method_fulltext_cannot_create'] = '無法建立 fulltext 因為文章的長度超過 65,535 或資料表類型不是 MyISAM';
$txt['search_method_index_already_exsits'] = '已建立';
$txt['search_method_fulltext_remove'] = '移除 fulltext 索引';
$txt['search_method_index_partial'] = '部分建立';
$txt['search_index_custom_resume'] = '繼續';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = '如果要使用 fulltext 搜尋功能，您必須先建立 fulltext 索引！';

$txt['search_index'] = '搜尋索引';
$txt['search_index_none'] = '沒有索引';
$txt['search_index_custom'] = '自設索引';
$txt['search_index_label'] = '索引';
$txt['search_index_size'] = '大小';
$txt['search_index_create_custom'] = '建立自設索引';
$txt['search_index_custom_remove'] = '移除自設索引';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = '要使用自設的索引搜尋，您必須先建立自設的索引！';

$txt['search_force_index'] = '強制使用搜尋索引';
$txt['search_match_words'] = '包含全部字詞';
$txt['search_max_results'] = '結果的顯示數量';
$txt['search_max_results_disable'] = '(0：不限制)';

$txt['search_create_index'] = '建立索引';
$txt['search_create_index_why'] = '為什麼要建立搜尋索引？';
$txt['search_create_index_start'] = '建立';
$txt['search_predefined'] = '預設的設定';
$txt['search_predefined_small'] = '小空間的索引';
$txt['search_predefined_moderate'] = '中空間的索引';
$txt['search_predefined_large'] = '大空間的索引';
$txt['search_create_index_continue'] = '繼續';
$txt['search_create_index_not_ready'] = 'SMF 目前正在建立文章的搜尋索引。為了避免負荷主機，進度已被暫停。幾秒鐘後它會自動繼續。如果沒有繼續，請點下面的繼續按鈕。';
$txt['search_create_index_progress'] = '進度';
$txt['search_create_index_done'] = '自設的搜尋索引已經建立完成！';
$txt['search_create_index_done_link'] = '繼續';
$txt['search_double_index'] = '在文章資料表內有兩個索引。為了提高效率，建議您移除其中一項。';

$txt['search_error_indexed_chars'] = '錯誤的索引字數。高性能的索引最少要三個索引字。';
$txt['search_error_max_percentage'] = '錯誤的跳過字詞的百分比。請用高於 5%。';

$txt['search_adjust_query'] = '改變搜尋設定';
$txt['search_adjust_submit'] = '重新搜尋';
$txt['search_did_you_mean'] = '您是不是要找';

$txt['search_example'] = '<i>範例</i> 櫻木花道 "灌籃高手" - 漫畫';

?>