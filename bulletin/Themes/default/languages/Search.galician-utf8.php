<?php
// Version: 1.1; Search

$txt[183] = 'Establecer parametros de busqueda';
$txt[189] = 'Escolle un foro no que se buscase, ou buscar en todos';
$txt[343] = 'Coincidir tódalas palabras';
$txt[344] = 'Coincidir con calquera palabra';
$txt[583] = 'por usuario';

$txt['search_post_age'] = 'Antiguedad do mensaxe';
$txt['search_between'] = 'Entre';
$txt['search_and'] = 'e';
$txt['search_options'] = 'Opcións';
$txt['search_show_complete_messages'] = 'Amosa-los resultados como mensaxes';
$txt['search_subject_only'] = 'Asuntos de temas solamente';
$txt['search_relevance'] = 'Relevancia';
$txt['search_date_posted'] = 'Data en que se publico';
$txt['search_order'] = 'Orde de busqueda ';
$txt['search_orderby_relevant_first'] = 'Resultados mais importantes primeiro';
$txt['search_orderby_large_first'] = 'Temas mais longos primeiro';
$txt['search_orderby_small_first'] = 'Temas mais peque&#241;vos primeiro';
$txt['search_orderby_recent_first'] = 'Temas mais recentes primeiro';
$txt['search_orderby_old_first'] = 'Temas mais vellos primeiro';

$txt['search_specific_topic'] = 'Buscando solamente mensaxes no tema';

$txt['mods_cat_search'] = 'Buscar';
$txt['groups_search_posts'] = 'Membergroups with access to the search function';
$txt['simpleSearch'] = 'Activar busqueda simple';
$txt['search_results_per_page'] = 'Numero de resultados da busqueda por paxina';
$txt['search_weight_frequency'] = 'Peso relativo da busqueda para o numero de mensaxes atopados dentro dun tema';
$txt['search_weight_age'] = 'Peso relativo da busqueda para a idade do ultimo mensaxe encontrado';
$txt['search_weight_length'] = 'Peso relativo da busqueda para o tamaño do tema';
$txt['search_weight_subject'] = 'Peso relativo da busqueda para os resultados que se atopen no asunto';
$txt['search_weight_first_message'] = 'Peso relativo da busqueda para cando o resultado se encuente no primeiro mensaxe';
$txt['search_weight_sticky'] = 'Relative search weight for a sticky topic';

$txt['search_settings_desc'] = 'Aqui podes cambia-la configuracion basica da funcion de busqueda.';
$txt['search_settings_title'] = 'Funcion de busqueda - configuracion';
$txt['search_settings_save'] = 'Gardar';

$txt['search_weights'] = 'Pesos';
$txt['search_weights_desc'] = 'Aqui podes cambia-los compoñentes individuais da puntuacion relevante. ';
$txt['search_weights_title'] = 'Busqueda - pesos';
$txt['search_weights_total'] = 'Total';
$txt['search_weights_save'] = 'Gardar';

$txt['search_method'] = 'Metodo de busqueda';
$txt['search_method_desc'] = 'Aqui podes establecer o metodo en que a busqueda é realizada.';
$txt['search_method_title'] = 'Busqueda - metodo';
$txt['search_method_save'] = 'Gardar';
$txt['search_method_messages_table_space'] = 'Espazo usado polos mensaxes do foro na base de datos';
$txt['search_method_messages_index_space'] = 'Espazo usado para indexar os mensaxes na base de datos';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'indice Fulltext';
$txt['search_method_no_index_exists'] = 'non existe actualmente';
$txt['search_method_fulltext_create'] = 'crear un indice fulltext';
$txt['search_method_fulltext_cannot_create'] = 'cannot be created because the max message length is above 65,535';
$txt['search_method_index_already_exsits'] = 'xa foi creado con anterioridade';
$txt['search_method_fulltext_remove'] = 'eliminar indice fulltext';
$txt['search_method_index_partial'] = 'partially created';
$txt['search_index_custom_resume'] = 'resume';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = '&#161;Para que poidas usa-la b&#250;squeda fulltext, debes crear primeiro un &#237;ndice fulltext!';

$txt['search_index'] = 'Search index';
$txt['search_index_none'] = 'Non index';
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
$txt['search_max_results_disable'] = '(0: non limit)';

$txt['search_create_index'] = 'Create index';
$txt['search_create_index_why'] = 'Why create a search index?';
$txt['search_create_index_start'] = 'Create';
$txt['search_predefined'] = 'Pre-defined profile';
$txt['search_predefined_small'] = 'Small sized index';
$txt['search_predefined_moderate'] = 'Moderate sized index';
$txt['search_predefined_large'] = 'Largue sized index';
$txt['search_create_index_continue'] = 'Continúe';
$txt['search_create_index_not_ready'] = 'SMF is currently creating a search index of your messages. To avoid overloading your server, the process has been temporarily paused. It should automatically continúe in a few seconds. If it doesn\'t, please click continúe below.';
$txt['search_create_index_progress'] = 'Progress';
$txt['search_create_index_done'] = 'Custom search index created!';
$txt['search_create_index_done_link'] = 'Continúe';
$txt['search_double_index'] = 'You have currently created two indexes on the messages table. For best performance it is advisable to remove one of the two indexes.';

$txt['search_error_indexed_chars'] = 'Invalid number of indexed characters. At least 3 characters are needed for a useful index.';
$txt['search_error_max_percentage'] = 'Invalid percentage of words to be skipped. Use a value of at least 5%.';

$txt['search_adjust_query'] = 'Axustar parametros de busqueda';
$txt['search_adjust_submit'] = 'Favor de revisa-la busqueda';
$txt['search_did_you_mean'] = 'Pode que tentes buscar por';

$txt['search_example'] = '<i>e.g.</i> Orwell "Animal Farm" -movie';

?>