<?php
// Version: 1.1; Search

$txt[183] = 'Parametry vyhledávání';
$txt[189] = 'Vyber diskuse k vyhledávání nebo hledej všude';
$txt[343] = 'Hledat všechna slova';
$txt[344] = 'Hladat některá slova';
$txt[583] = 'podle uživatele';

$txt['search_post_age'] = 'Stáří zprávy';
$txt['search_between'] = 'Mezi';
$txt['search_and'] = 'a';
$txt['search_options'] = 'Volby';
$txt['search_show_complete_messages'] = 'Zobraz výsledky jako zprávy';
$txt['search_subject_only'] = 'Pouze názvy témat';
$txt['search_relevance'] = 'Relevance';
$txt['search_date_posted'] = 'Datum';
$txt['search_order'] = 'Pořadí výsledků';
$txt['search_orderby_relevant_first'] = 'Výsledky s nejvyšší relevancí jako první';
$txt['search_orderby_large_first'] = 'Nejdelší témata jako první';
$txt['search_orderby_small_first'] = 'Nejkratší témata jako první';
$txt['search_orderby_recent_first'] = 'Nejnovější témata jako první';
$txt['search_orderby_old_first'] = 'Nejstarší témata jako první';

$txt['search_specific_topic'] = 'Prohledávat pouze příspěvky v tématu';

$txt['mods_cat_search'] = 'Vyhledávání';
$txt['groups_search_posts'] = 'Skupiny s oprávněním využívat vyhledávání';
$txt['simpleSearch'] = 'Povolit jednoduché vyhledávání';
$txt['search_results_per_page'] = 'Počet výsledků na stránku';
$txt['search_weight_frequency'] = 'Relativní váha pro počet nalezených příspěvků v tématu';
$txt['search_weight_age'] = 'Relativní váha pro stáří posledního nalezeného příspěvku';
$txt['search_weight_length'] = 'Relativní váha pro délku tématu';
$txt['search_weight_subject'] = 'Relativní váha pro nález v tématu';
$txt['search_weight_first_message'] = 'Relativní váha pro nález v prvním příspěvku';
$txt['search_weight_sticky'] = 'Relativní váha pro připíchnuté téma';

$txt['search_settings_desc'] = 'Zde můžeš změnit základní nastavení vyhledávání.';
$txt['search_settings_title'] = 'Vyhledávání - nastavení';
$txt['search_settings_save'] = 'Uložit';

$txt['search_weights'] = 'Váhy';
$txt['search_weights_desc'] = 'Zde můžeš měnit jednotlivé složky pro zjišťování relevance.';
$txt['search_weights_title'] = 'Vyhledávání - váhy';
$txt['search_weights_total'] = 'Celkem';
$txt['search_weights_save'] = 'Uložit';

$txt['search_method'] = 'Metody vyhledávání';
$txt['search_method_desc'] = 'Zde můžeš vybrat, jakou metodu bude vyhledávání používat.';
$txt['search_method_title'] = 'Vyhledávání - váhy';
$txt['search_method_save'] = 'Uložit';
$txt['search_method_messages_table_space'] = 'Místo zabrané příspěvky v databázi';
$txt['search_method_messages_index_space'] = 'Místo zabrané indexy v databázi';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Fulltextový index';
$txt['search_method_no_index_exists'] = 'zatím neexistuje';
$txt['search_method_fulltext_create'] = 'vytvořit fulltextový index';
$txt['search_method_fulltext_cannot_create'] = 'nemůže být vytvořen protože délka zprávy je větší než 65,535 nebo typ tabulky není MyISAM';
$txt['search_method_index_already_exsits'] = 'již vytvořen';
$txt['search_method_fulltext_remove'] = 'smazat fulltextový index';
$txt['search_method_index_partial'] = 'částečně vytvořen';
$txt['search_index_custom_resume'] = 'pokračovat';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Abys mohl používat fulltextové vyhledávání, nejdříve musíš vytvořit fulltextový index!';

$txt['search_index'] = 'Index vyhledávání';
$txt['search_index_none'] = 'Žádný index';
$txt['search_index_custom'] = 'Vlastní index';
$txt['search_index_label'] = 'Index';
$txt['search_index_size'] = 'Velikost';
$txt['search_index_create_custom'] = 'vytvořit vlastní index';
$txt['search_index_custom_remove'] = 'smazat vlastní index';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Abys mohl používat vyhledávání s vlastním indexem, musíš jej nejprve vytvořit!';

$txt['search_force_index'] = 'Přikaž používání indexu';
$txt['search_match_words'] = 'Pouze celá slova';
$txt['search_max_results'] = 'Maximální počet výsledků k zobrazení';
$txt['search_max_results_disable'] = '(0 - bez omezení)';

$txt['search_create_index'] = 'Vytvořit index';
$txt['search_create_index_why'] = 'Proč vytvářet index pro vyhledávání?';
$txt['search_create_index_start'] = 'Vytvořit';
$txt['search_predefined'] = 'Předdefinovaný profil';
$txt['search_predefined_small'] = 'Malý index';
$txt['search_predefined_moderate'] = 'Střední index';
$txt['search_predefined_large'] = 'Velký index';
$txt['search_create_index_continue'] = 'Pokračovat';
$txt['search_create_index_not_ready'] = 'SMF právě vytváří vyhledávací index tvých zpráv. Aby nedošlo k přetížení serveru, proces byl dočasně přerušen a měl by automaticky pokračovat za pár sekund - pokud ne, stiskni tlačítko Pokračovat.';
$txt['search_create_index_progress'] = 'Postup';
$txt['search_create_index_done'] = 'Vlastní index pro vyhledávání vytvořen!';
$txt['search_create_index_done_link'] = 'Pokračovat';
$txt['search_double_index'] = 'Nyní jsou vytvořeny dva indexy nad zprávami. Pro nejvyšší výkon se doporučuje jeden z nich smazat..';

$txt['search_error_indexed_chars'] = 'Nesprávný počet indexovaných znaků. Alespoň tři znaky jsou nutné pro vytvoření užitečného indexu.';
$txt['search_error_max_percentage'] = 'Nesprávné procento slov k přeskočení. Použij hodnotu alespoň 5%.';

$txt['search_adjust_query'] = 'Změnit parametry vyhledávání';
$txt['search_adjust_submit'] = 'Hledat znovu';
$txt['search_did_you_mean'] = 'Možná jsi chtěl hledat';

$txt['search_example'] = '<i>např.</i> Orwell "Farma zvířat" -film';

?>