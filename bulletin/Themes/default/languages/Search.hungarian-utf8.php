<?php
// Version: 1.1; Search

$txt[183] = 'Keresési paraméterek beállítása';
$txt[189] = 'Válassz egy fórumot, vagy keress az összesben';
$txt[343] = 'Összes szó egyezik';
$txt[344] = 'Bármely szó egyezik';
$txt[583] = 'Felhasználó szerint';

$txt['search_post_age'] = 'Üzenet kora';
$txt['search_between'] = '';
$txt['search_and'] = 'és';
$txt['search_options'] = 'Opciók';
$txt['search_show_complete_messages'] = 'Eredmények megjelenítése üzenetekként';
$txt['search_subject_only'] = 'Csak a témák címében keressen';
$txt['search_relevance'] = 'Relevancia';
$txt['search_date_posted'] = 'Elküldés ideje';
$txt['search_order'] = 'Keresési sorrend';
$txt['search_orderby_relevant_first'] = 'Leginkább egyező eredmények elsőként';
$txt['search_orderby_large_first'] = 'Legnagyobb témák elsőként';
$txt['search_orderby_small_first'] = 'Legkisebb témák elsőként';
$txt['search_orderby_recent_first'] = 'Legújabb témák elsőként';
$txt['search_orderby_old_first'] = 'Legrégebbi témák elsőként';

$txt['search_specific_topic'] = 'Keresés csak a téma hozzászólásaiban';

$txt['mods_cat_search'] = 'Keresés';
$txt['groups_search_posts'] = 'A keresés funkciót elérő csoportok';
$txt['simpleSearch'] = 'Egyszerű keresés bekapcsolása';
$txt['search_results_per_page'] = 'Keresési eredmények száma oldalanként';
$txt['search_weight_frequency'] = 'Relatív keresési súlyozás az egy témában egyező üzenetek számára';
$txt['search_weight_age'] = 'Relatív keresési súlyozás az utolsó egyező üzenet korára';
$txt['search_weight_length'] = 'Relatív keresési súlyozás a téma hosszára';
$txt['search_weight_subject'] = 'Relatív keresési súlyozás egyező tárgy esetén';
$txt['search_weight_first_message'] = 'Relatív keresési súlyozás az első egyező üzenetre';
$txt['search_weight_sticky'] = 'Relatív keresési súlyozás kiemelt témánál';

$txt['search_settings_desc'] = 'Itt változtathatod meg a keresés funckió alapvető beállításait.';
$txt['search_settings_title'] = 'Keresés funkció - beállítások';
$txt['search_settings_save'] = 'Mentés';

$txt['search_weights'] = 'Súlyozások';
$txt['search_weights_desc'] = 'Itt változtathatod meg a különböző komponensek releváns értékeléseit.';
$txt['search_weights_title'] = 'Keresés - súlyozások';
$txt['search_weights_total'] = 'Összesen';
$txt['search_weights_save'] = 'Mentés';

$txt['search_method'] = 'Keresési mód';
$txt['search_method_desc'] = 'Itt állíthatod be a keresés módját.';
$txt['search_method_title'] = 'Keresés - mód';
$txt['search_method_save'] = 'Mentés';
$txt['search_method_messages_table_space'] = 'A fórum üzenetek által felhasznált hely az adatbázisban';
$txt['search_method_messages_index_space'] = 'A fórum üzenetek indexelésére felhasznált hely az adatbázisban';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Fulltext index';
$txt['search_method_no_index_exists'] = 'nem létezik jelenleg';
$txt['search_method_fulltext_create'] = 'fulltext index készítése';
$txt['search_method_fulltext_cannot_create'] = 'nem hozható létre, mivel a max. üzenet hossz 65,535 fölött van vagy a tábla típusa nem MyISAM';
$txt['search_method_index_already_exsits'] = 'már létrehozva';
$txt['search_method_fulltext_remove'] = 'fulltext index eltávolítása';
$txt['search_method_index_partial'] = 'részlegesen elkészítve';
$txt['search_index_custom_resume'] = 'folytatás';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'A fulltext keresés érdekében előbb létre kell hoznod egy fulltext indexet!';

$txt['search_index'] = 'Keresőindex';
$txt['search_index_none'] = 'Nincs index';
$txt['search_index_custom'] = 'Egyedi index';
$txt['search_index_label'] = 'Index';
$txt['search_index_size'] = 'Méret';
$txt['search_index_create_custom'] = 'egyedi index készítése';
$txt['search_index_custom_remove'] = 'egyedi index eltávolítása';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Az egyedi index keresés érdekében előbb létre kell hoznod egy egyedi indexet!';

$txt['search_force_index'] = 'Keresőindex használatának kényszerítése';
$txt['search_match_words'] = 'Csak teljes szavaknál egyezzen';
$txt['search_max_results'] = 'Maximum megjelenítendő eredmények';
$txt['search_max_results_disable'] = '(0: nincs korlát)';

$txt['search_create_index'] = 'Index létrehozása';
$txt['search_create_index_why'] = 'Miért készítsek keresőindexet?';
$txt['search_create_index_start'] = 'Létrehoz';
$txt['search_predefined'] = 'Előre definiált profil';
$txt['search_predefined_small'] = 'Kis méretű index';
$txt['search_predefined_moderate'] = 'Közepes méretű index';
$txt['search_predefined_large'] = 'Nagy méretű index';
$txt['search_create_index_continue'] = 'Tovább';
$txt['search_create_index_not_ready'] = 'Az SMF jelenleg egy keresőindexet hoz létre az üzeneteidből. A szerver túlterheltségének elkerülése érdekében a folyamat ideiglesen szüneteltetve van. Automatikusan folytatódni fog pár másodpercen belül. Ha nem, kérlek kattints a továbbra alul.';
$txt['search_create_index_progress'] = 'Folyamat';
$txt['search_create_index_done'] = 'Egyedi keresőindex létrehozva!';
$txt['search_create_index_done_link'] = 'Tovább';
$txt['search_double_index'] = 'Jelenleg két indexet készítettél az üzenetek táblájáról. A legjobb teljesítmény érdekében tanácsos az egyik index eltávolítása.';

$txt['search_error_indexed_chars'] = 'Az indexelt karakterek száma érvénytelen. Minimum 3 karakter szükséges egy használható indexhez.';
$txt['search_error_max_percentage'] = 'Érvénytelen százalék az átugrandó szavaknak. A használt érték minimum 5% legyen.';

$txt['search_adjust_query'] = 'Keresési paraméterek beállítása';
$txt['search_adjust_submit'] = 'Keresés módosítása';
$txt['search_did_you_mean'] = 'Talán erre gondoltál:';

$txt['search_example'] = '<i>pl.</i> Orwell "állatfarm" -mozi';

?>