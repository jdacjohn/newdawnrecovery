<?php
// Version: 1.1; Search

$txt[183] = 'Impostare i parametri di ricerca';
$txt[189] = 'Scegliere la sezione in cui cercare oppure cercare in tutto il forum';
$txt[343] = 'Tutte le parole';
$txt[344] = 'Una parola qualsiasi';
$txt[583] = 'dall\'utente';

$txt['search_post_age'] = 'Età del messaggio';
$txt['search_between'] = 'Tra';
$txt['search_and'] = 'e';
$txt['search_options'] = 'Opzioni';
$txt['search_show_complete_messages'] = 'Mostra i risultati come messaggi';
$txt['search_subject_only'] = 'Cerca solo nell\'oggetto delle discussioni';
$txt['search_relevance'] = 'Rilevanza';
$txt['search_date_posted'] = 'Data di inserimento';
$txt['search_order'] = 'Ordine di ricerca';
$txt['search_orderby_relevant_first'] = 'Prima i risultati più rilevanti';
$txt['search_orderby_large_first'] = 'Prima le discussioni più lunghe';
$txt['search_orderby_small_first'] = 'Prima le discussioni più brevi';
$txt['search_orderby_recent_first'] = 'Prima le discussioni più recenti';
$txt['search_orderby_old_first'] = 'Prima le discussioni più vecchie';

$txt['search_specific_topic'] = 'Cerca solo nei messaggi della discussione';

$txt['mods_cat_search'] = 'Cerca';
$txt['groups_search_posts'] = 'Gruppi abilitati alla funzione di ricerca';
$txt['simpleSearch'] = 'Attiva ricerca semplice';
$txt['search_results_per_page'] = 'Numero di risultati della ricerca per pagina';
$txt['search_weight_frequency'] = 'Peso specifico della ricerca per numero di messaggi corrispondenti in una discussione';
$txt['search_weight_age'] = 'Peso specifico della ricerca per età dell\'ultimo messaggio corrispondente';
$txt['search_weight_length'] = 'Peso specifico della ricerca per lunghezza della discussione';
$txt['search_weight_subject'] = 'Peso specifico della ricerca per corrispondenza nell\'oggetto';
$txt['search_weight_first_message'] = 'Peso specifico della ricerca per corrispondenza nel primo messaggio';
$txt['search_weight_sticky'] = 'Peso specifico della ricerca per discussione importante';

$txt['search_settings_desc'] = 'Opzioni per modificare le impostazioni di base della funzione di ricerca.';
$txt['search_settings_title'] = 'Impostazioni della funzione di ricerca';
$txt['search_settings_save'] = 'Salva';

$txt['search_weights'] = 'Pesi';
$txt['search_weights_desc'] = 'Opzioni per modificare i singoli componenti dell\'indice di rilevanza.';
$txt['search_weights_title'] = 'Pesi della ricerca';
$txt['search_weights_total'] = 'Totale';
$txt['search_weights_save'] = 'Salva';

$txt['search_method'] = 'Metodo di ricerca';
$txt['search_method_desc'] = 'Opzioni per impostare il modo in cui viene effettuata una ricerca.';
$txt['search_method_title'] = 'Metodo di ricerca';
$txt['search_method_save'] = 'Salva';
$txt['search_method_messages_table_space'] = 'Spazio utilizzato dai messaggi del forum nel database';
$txt['search_method_messages_index_space'] = 'Spazio utilizzato per indicizzare i messaggi nel database';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Indice fulltext';
$txt['search_method_no_index_exists'] = 'attualmente non esiste';
$txt['search_method_fulltext_create'] = 'crea un indice fulltext';
$txt['search_method_fulltext_cannot_create'] = 'non può essere creato perché il messaggio più lungo supera i 65.535 caratteri oppure perché la tabella non è di tipo MyISAM';
$txt['search_method_index_already_exsits'] = 'già creato';
$txt['search_method_fulltext_remove'] = 'elimina indice fulltext';
$txt['search_method_index_partial'] = 'creato parzialmente';
$txt['search_index_custom_resume'] = 'riprendi';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Per utilizzare la ricerca fulltext, è necessario creare prima un indice fulltext!';

$txt['search_index'] = 'Ricerca nell\'indice';
$txt['search_index_none'] = 'Nessun indice';
$txt['search_index_custom'] = 'Indice personalizzato';
$txt['search_index_label'] = 'Indice';
$txt['search_index_size'] = 'Dimensione';
$txt['search_index_create_custom'] = 'crea indice personalizzato';
$txt['search_index_custom_remove'] = 'elimina indice personalizzato';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Per utilizzare una ricerca su indice personalizzato, è necessario creare prima un indice personalizzato!';

$txt['search_force_index'] = 'Obbliga l\'utilizzo di un indice di ricerca';
$txt['search_match_words'] = 'Solo corrispondenza di parole intere';
$txt['search_max_results'] = 'Numero massimo di risultati da visualizzare';
$txt['search_max_results_disable'] = '(0 = nessun limite)';

$txt['search_create_index'] = 'Crea un indice';
$txt['search_create_index_why'] = 'Perché creare un indice di ricerca?';
$txt['search_create_index_start'] = 'Crea';
$txt['search_predefined'] = 'Profilo predefinito';
$txt['search_predefined_small'] = 'Indice di piccole dimensioni';
$txt['search_predefined_moderate'] = 'Indice di medie dimensioni';
$txt['search_predefined_large'] = 'Indice di grandi dimensioni';
$txt['search_create_index_continue'] = 'Continua';
$txt['search_create_index_not_ready'] = 'Creazione di un indice di ricerca per i messaggi in corso. Per evitare il sovraccarico del server, il processo è stato temporaneamente sospeso. Dovrebbe riprendere entro pochi secondi. In caso contrario, fare clic sul pulsante "Continua".';
$txt['search_create_index_progress'] = 'Avanzamento';
$txt['search_create_index_done'] = 'L\'indice di ricerca personalizzato è stato creato con successo!';
$txt['search_create_index_done_link'] = 'Continua';
$txt['search_double_index'] = 'Al momento esistono due indici della tabella dei messaggi. Per ottimizzare le prestazioni è preferibile cancellarne uno.';

$txt['search_error_indexed_chars'] = 'Numero di caratteri indicizzati non valido. Per avere un indice utilizzabile sono necessari almeno tre caratteri.';
$txt['search_error_max_percentage'] = 'Percentuale di parole da saltare non valida. Utilizzare un valore pari almeno a 5%.';

$txt['search_adjust_query'] = 'Correggi i parametri di ricerca';
$txt['search_adjust_submit'] = 'Rivedi la ricerca';
$txt['search_did_you_mean'] = 'Forse cercavi';

$txt['search_example'] = '<i>es.:</i> Orwell "fattoria degli animali" -film';

?>