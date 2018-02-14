<?php
// Version: 1.1; Search

$txt[183] = 'Postavi parametre pretrage';
$txt[189] = 'Izaberite forum u okviru kojeg želite da tražite, ili izaberite sve';
$txt[343] = 'Poklopi sve reči';
$txt[344] = 'Poklopi bilo koje reči';
$txt[583] = 'po korisniku';

$txt['search_post_age'] = 'Poruke su';
$txt['search_between'] = 'između';
$txt['search_and'] = 'i';
$txt['search_options'] = 'Opcije';
$txt['search_show_complete_messages'] = 'Prikaži rezultate kao poruke';
$txt['search_subject_only'] = 'Samo naslov teme';
$txt['search_relevance'] = 'Relevantnost';
$txt['search_date_posted'] = 'Datum slanja';
$txt['search_order'] = 'Poređaj po';
$txt['search_orderby_relevant_first'] = 'najrelevantnijim rezultatima';
$txt['search_orderby_large_first'] = 'najvećim temama';
$txt['search_orderby_small_first'] = 'najmanjim temama';
$txt['search_orderby_recent_first'] = 'najsvežijim temama';
$txt['search_orderby_old_first'] = 'najstarijim temama';

$txt['search_specific_topic'] = 'Pretražujem samo poruke u temi';

$txt['mods_cat_search'] = 'Pretraga';
$txt['groups_search_posts'] = 'Korisničke grupe sa pristupom funkciji pretrage';
$txt['simpleSearch'] = 'Omogući jednostavnu pretragu';
$txt['search_results_per_page'] = 'Broj rezultata pretrage po stranici';
$txt['search_weight_frequency'] = 'Relativna težina broja poklapajućih poruka unutar teme';
$txt['search_weight_age'] = 'Relativna težina starosti poslednje poklapajuće poruke';
$txt['search_weight_length'] = 'Relativna težina dužine teme';
$txt['search_weight_subject'] = 'Relativna težina poklapajućeg naslova';
$txt['search_weight_first_message'] = 'Relativna težina prve poklopljene poruke';
$txt['search_weight_sticky'] = 'Relativna težina lepljive teme';

$txt['search_settings_desc'] = 'Ovde možete da promenite osnovna podešavanja funkcije pretrage.';
$txt['search_settings_title'] = 'Funkcija pretrage - podešavanja';
$txt['search_settings_save'] = 'Sačuvaj';

$txt['search_weights'] = 'Težine';
$txt['search_weights_desc'] = 'Ovde možete izmeniti pojedine komponente za određivanje značaja poruka. ';
$txt['search_weights_title'] = 'Pretraga - težine';
$txt['search_weights_total'] = 'Ukupno';
$txt['search_weights_save'] = 'Sačuvaj';

$txt['search_method'] = 'Način pretrage';
$txt['search_method_desc'] = 'Ovde možete da promenite način na koji se odvija pretraga.';
$txt['search_method_title'] = 'Pretraga - način';
$txt['search_method_save'] = 'Sačuvaj';
$txt['search_method_messages_table_space'] = 'Prostor zauzet porukama u bazi';
$txt['search_method_messages_index_space'] = 'Prostor zauzet indeksom poruka u bazi';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Fulltext index';
$txt['search_method_no_index_exists'] = 'trenutno ne postoji';
$txt['search_method_fulltext_create'] = 'napravi fulltext index';
$txt['search_method_fulltext_cannot_create'] = 'ne može da se napravi jer je najveća dužina poruke iznad 65,535 ili tip tabele nije MyISAM';
$txt['search_method_index_already_exsits'] = 'već postoji';
$txt['search_method_fulltext_remove'] = 'ukloni fulltext index';
$txt['search_method_index_partial'] = 'je delimično napravljen';
$txt['search_index_custom_resume'] = 'nastavi';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Da biste mogli da koristite fulltext pretragu, moraćete prvo da napravite fulltext index!';

$txt['search_index'] = 'Pretraživački indeks';
$txt['search_index_none'] = 'Bez indeksa';
$txt['search_index_custom'] = 'Prilagođeni indeks';
$txt['search_index_label'] = 'Indeks';
$txt['search_index_size'] = 'Veličina';
$txt['search_index_create_custom'] = 'napravi prilagođeni indeks';
$txt['search_index_custom_remove'] = 'ukloni prilagođeni indeks';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Da biste koristili pretragu pomoću prilagođenog indeksa, moraćete prvo da napravite prilagođeni indeks!';

$txt['search_force_index'] = 'Forsiraj upotrebu pretraživačkog indeksa';
$txt['search_match_words'] = 'Poklopi samo cele reči';
$txt['search_max_results'] = 'Najveći broj rezultata za prikaz';
$txt['search_max_results_disable'] = '(0: neograničeno)';

$txt['search_create_index'] = 'Napravi indeks';
$txt['search_create_index_why'] = 'Zašto napraviti indeks?';
$txt['search_create_index_start'] = 'Napravi';
$txt['search_predefined'] = 'Predefinisan profil';
$txt['search_predefined_small'] = 'Indeks male veličine';
$txt['search_predefined_moderate'] = 'Indeks srednje veličine';
$txt['search_predefined_large'] = 'Indeks velike veličine';
$txt['search_create_index_continue'] = 'Nastavi';
$txt['search_create_index_not_ready'] = 'SMF trenutno pravi indeks za pretragu vaših poruka. Da bi izbegli preopterećenje vašeg servera, proces je trenutno pauziran. Trebalo bi da se automatski nastavi za par sekundi. Ako se ne nastavi, kliknite na \'Nastavi\' ispod ove poruke.';
$txt['search_create_index_progress'] = 'Napredak';
$txt['search_create_index_done'] = 'Prilagođen indeks za pretragu je napravljen!';
$txt['search_create_index_done_link'] = 'Nastavi';
$txt['search_double_index'] = 'Trenutno ste napravili dva indeksa u tabeli poruka. Zbog najboljih performansi, preporučujemo da uklonite jedan od ta dva indeksa.';

$txt['search_error_indexed_chars'] = 'Neispravan broj indeksovanih znakova. Potrebna su barem 3 znaka za koristan indeks.';
$txt['search_error_max_percentage'] = 'Neispravan procenat reči za preskakanje. Koristite vrednost od najmanje 5%.';

$txt['search_adjust_query'] = 'Podesi parametre pretrage';
$txt['search_adjust_submit'] = 'Ponovi pretragu';
$txt['search_did_you_mean'] = 'Da niste možda mislili na';

$txt['search_example'] = '<i>na pr.</i> Stevan Sremac "Zona Zamfirova" -film';

?>