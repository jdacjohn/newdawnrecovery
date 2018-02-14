<?php
// Version: 1.1; Search

$txt[183] = '设置搜索参数';
$txt[189] = '选择在某版块搜索，或搜索所有版块';
$txt[343] = '精确搜索';
$txt[344] = '模糊搜索';
$txt[583] = '按用户名';

$txt['search_post_age'] = '帖子发布时间';
$txt['search_between'] = '在两段时间之间';
$txt['search_and'] = '到';
$txt['search_options'] = '选项';
$txt['search_show_complete_messages'] = '以帖子形式显示结果';
$txt['search_subject_only'] = '只搜索标题';
$txt['search_relevance'] = '精确度';
$txt['search_date_posted'] = '发帖时间';
$txt['search_order'] = '搜索 顺序';
$txt['search_orderby_relevant_first'] = '精确度高的结果在前';
$txt['search_orderby_large_first'] = '内容多的主题在前';
$txt['search_orderby_small_first'] = '内容少的主题在前';
$txt['search_orderby_recent_first'] = '新发布的主题在前';
$txt['search_orderby_old_first'] = '旧主题在前';

$txt['search_specific_topic'] = '只在主题内搜索帖子 ';

$txt['mods_cat_search'] = '搜索';
$txt['groups_search_posts'] = '具有搜索权限的会员组';
$txt['simpleSearch'] = '允许 简单搜索 ';
$txt['search_results_per_page'] = '每页显示的搜索结果条数 ';
$txt['search_weight_frequency'] = '与一个主题内符合条件的帖子数量相关的搜索权重';
$txt['search_weight_age'] = '与帖子发表时间相关的搜索权重';
$txt['search_weight_length'] = '与主题长度相关的搜索权重';
$txt['search_weight_subject'] = '与标题匹配程度相关的搜索权重';
$txt['search_weight_first_message'] = '与主题第一个帖子匹配程度相关的搜索权重';
$txt['search_weight_sticky'] = '当主题置顶时的搜索权重';

$txt['search_settings_desc'] = '在此你可更改搜索功能的基本设置';
$txt['search_settings_title'] = '搜索功能 - 设置';
$txt['search_settings_save'] = '保存';

$txt['search_weights'] = '权重';
$txt['search_weights_desc'] = '在此你可更改判断相关程度的因素';
$txt['search_weights_title'] = '搜索 - 权重';
$txt['search_weights_total'] = '总共';
$txt['search_weights_save'] = '保存';

$txt['search_method'] = '搜索模式';
$txt['search_method_desc'] = '在此你可设置搜索的方式';
$txt['search_method_title'] = '搜索 - 模式';
$txt['search_method_save'] = '保存';
$txt['search_method_messages_table_space'] = '帖子使用的数据大小';
$txt['search_method_messages_index_space'] = '索引使用的数据大小';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = '全文索引';
$txt['search_method_no_index_exists'] = '现在不存在';
$txt['search_method_fulltext_create'] = '建立全文索引';
$txt['search_method_fulltext_cannot_create'] = '无法建立全文索引，因为文章的长度超过 65,535 或数据表类型不是 MyISAM';
$txt['search_method_index_already_exsits'] = '已创建';
$txt['search_method_fulltext_remove'] = '清除全文索引';
$txt['search_method_index_partial'] = '部分创建（未完成）';
$txt['search_index_custom_resume'] = '恢复（继续）';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = '为使用全文索引，你必须先创建一个全文索引';

$txt['search_index'] = '搜索索引';
$txt['search_index_none'] = '不使用索引';
$txt['search_index_custom'] = '自定义索引';
$txt['search_index_label'] = '状态';
$txt['search_index_size'] = '大小';
$txt['search_index_create_custom'] = '创建自定义索引';
$txt['search_index_custom_remove'] = '删除自定义索引';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = '希望使用自定义索引，你必须先创建自定义索引！';

$txt['search_force_index'] = '强制使用搜索索引';
$txt['search_match_words'] = '精确匹配单词';
$txt['search_max_results'] = '最大显示结果';
$txt['search_max_results_disable'] = '(0: 无限制)';

$txt['search_create_index'] = '创建索引';
$txt['search_create_index_why'] = '为什么要创建索引？';
$txt['search_create_index_start'] = '创建';
$txt['search_predefined'] = '预设配置';
$txt['search_predefined_small'] = '小型索引';
$txt['search_predefined_moderate'] = '中型索引';
$txt['search_predefined_large'] = '大型索引';
$txt['search_create_index_continue'] = '继续';
$txt['search_create_index_not_ready'] = 'SMF 正在创建索引，为了防止你的服务器过载，我们暂停缓冲一下，系统应该会在几秒后继续执行，如果没有执行，请手动点一下下面的继续按钮。';
$txt['search_create_index_progress'] = '进度';
$txt['search_create_index_done'] = '自定义索引已经成功创建！';
$txt['search_create_index_done_link'] = '继续返回索引选项';
$txt['search_double_index'] = '你已经创建了两个索引数据，为了更好的性能，我们建议你删除其中一个索引。';

$txt['search_error_indexed_chars'] = '错误的索引字符，至少需要3个以上的字符。';
$txt['search_error_max_percentage'] = '错误的字符百分比将被忽略，至少需要5%';

$txt['search_adjust_query'] = '调整搜索参数';
$txt['search_adjust_submit'] = '反相搜索 ';
$txt['search_did_you_mean'] = '你是想搜索';

$txt['search_example'] = '<i>如：</i> Orwell "Animal Farm" -电影';

?>