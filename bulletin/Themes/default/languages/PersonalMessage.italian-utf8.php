<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Indice dei messaggi privati';
$txt[148] = 'Invia messaggio';
$txt[150] = 'A';
$txt[1502] = 'CCn';
$txt[316] = 'Ricevuti';
$txt[320] = 'Inviati';
$txt[321] = 'Nuovo messaggio';
$txt[411] = 'Elimina messaggi';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Elimina tutti i messaggi nella PMBOX';
$txt[413] = 'Eliminare tutti i messaggi?';
$txt[535] = 'Destinatario';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Nuovo messaggio privato: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Hai appena ricevuto un messaggio privato da SENDER su ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANTE: ricorda, questa &#232; solo una notifica. Non rispondere a questa e-mail.' . "\n\n" . 'Il messaggio inviato &#232;:' . "\n\n" . 'MESSAGE';
$txt[748] = '(destinatari multipli: \'name1, name2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Rispondi a questo messaggio privato qui:';

$txt['smf249'] = 'Eliminare tutti i messaggi privati selezionati?';

$txt['sent_to'] = 'Inviato a';
$txt['reply_to_all'] = 'Rispondi a tutti';

$txt['pm_capacity'] = 'Capacità';
$txt['pm_currently_using'] = '%s messaggi, piena al %s%%.';

$txt['pm_error_user_not_found'] = 'Utente \'%s\' non trovato.';
$txt['pm_error_ignored_by_user'] = 'L\'utente \'%s\' ha bloccato il tuo messaggio privato.';
$txt['pm_error_data_limit_reached'] = 'MP non inviato a \'%s\' poiché la cartella Messaggi ricevuti è piena.';
$txt['pm_successfully_sent'] = 'MP inviato con successo a \'%s\'.';
$txt['pm_too_many_recipients'] = 'Non si possono inviare messaggi privati a più di %d destinatari(o) contemporaneamente.';
$txt['pm_too_many_per_hour'] = 'Hai superato il limite di %d messaggi privati all\'ora.';
$txt['pm_send_report'] = 'Invia rapporto';
$txt['pm_save_outbox'] = 'Salva una copia in Messaggi inviati';
$txt['pm_undisclosed_recipients'] = 'Destinatari nascosti';

$txt['pm_read'] = 'Letto';
$txt['pm_replied'] = 'Risposto a';

// Message Pruning.
$txt['pm_prune'] = 'Pulizia messaggi';
$txt['pm_prune_desc1'] = 'Elimina tutti i messaggi privati più vecchi di';
$txt['pm_prune_desc2'] = 'giorni.';
$txt['pm_prune_warning'] = 'Procedere con la pulizia dei propri messaggi privati?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Azioni ulteriori';
$txt['pm_actions_delete_selected'] = 'Elimina selezionati';
$txt['pm_actions_filter_by_label'] = 'Filtra per etichetta';
$txt['pm_actions_go'] = 'Vai';

// Manage Labels Screen.
$txt['pm_apply'] = 'Applica';
$txt['pm_manage_labels'] = 'Gestione etichette';
$txt['pm_labels_delete'] = 'Eliminare le etichette selezionate?';
$txt['pm_labels_desc'] = 'Da qui è possibile aggiungere, modificare ed eliminare le etichette utilizzate nella propria cartella dei messaggi privati.';
$txt['pm_label_add_new'] = 'Aggiungi nuova etichetta';
$txt['pm_label_name'] = 'Nome etichetta';
$txt['pm_labels_no_exist'] = 'Nessuna etichetta impostata al momento!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etichetta';
$txt['pm_msg_label_title'] = 'Etichetta messaggio';
$txt['pm_msg_label_apply'] = 'Aggiungi etichetta';
$txt['pm_msg_label_remove'] = 'Elimina etichetta';
$txt['pm_msg_label_inbox'] = 'Messaggi ricevuti';
$txt['pm_sel_label_title'] = 'Etichetta selezionata';
$txt['labels_too_many'] = 'Spiacente, %s messaggi hanno già il numero massimo di etichette applicate!';

// Sidebar Headings.
$txt['pm_labels'] = 'Etichette';
$txt['pm_messages'] = 'Messaggi';
$txt['pm_preferences'] = 'Preferenze';

$txt['pm_is_replied_to'] = 'Hai inoltrato o risposto a questo messaggio.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Segnala all\'amministratore';
$txt['pm_report_title'] = 'Segnala messaggio privato';
$txt['pm_report_desc'] = 'Da questa pagina è possibile segnalare il messaggio privato ricevuto al team degli amministratori del forum. Assicurarsi di spiegare la causa della segnalazione del messaggio, poiché verrà inviata insieme al contenuto del messaggio originale.';
$txt['pm_report_admins'] = 'Amministratore a cui segnalare';
$txt['pm_report_all_admins'] = 'Inviare a tutti gli amministratori del forum';
$txt['pm_report_reason'] = 'Causa della segnalazione del messaggio';
$txt['pm_report_message'] = 'Segnala messaggio';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} ha segnalato il seguente messaggio privato, inviato da {SENDER}, per il motivo seguente:';
$txt['pm_report_pm_other_recipients'] = 'Altri destinatari del messaggio sono:';
$txt['pm_report_pm_hidden'] = '%d destinatari nascosti';
$txt['pm_report_pm_unedited_below'] = 'Seguono i contenuti originali del messaggio privato segnalato:';
$txt['pm_report_pm_sent'] = 'Inviato:';

$txt['pm_report_done'] = 'Grazie per aver inviato questa segnalazione. Riceverete risposta dal team di amministrazione a breve.';
$txt['pm_report_return'] = 'Torna ai Messaggi ricevuti';

$txt['pm_search_title'] = 'Ricerca tra i messaggi privati';
$txt['pm_search_bar_title'] = 'Ricerca messaggi';
$txt['pm_search_text'] = 'Cerca per';
$txt['pm_search_go'] = 'Cerca';
$txt['pm_search_advanced'] = 'Ricerca avanzata';
$txt['pm_search_user'] = 'dall\'utente';
$txt['pm_search_match_all'] = 'Confronta tutte le parole';
$txt['pm_search_match_any'] = 'Confronta qualsiasi parola';
$txt['pm_search_options'] = 'Opzioni';
$txt['pm_search_post_age'] = 'Et&#224;';
$txt['pm_search_show_complete'] = 'Mostra messaggio completo nei risultati.';
$txt['pm_search_subject_only'] = 'Cerca solo per oggetto e autore.';
$txt['pm_search_between'] = 'Tra';
$txt['pm_search_between_and'] = 'e';
$txt['pm_search_between_days'] = 'giorni';
$txt['pm_search_order'] = 'Ordina i risultati per';
$txt['pm_search_choose_label'] = 'Scegli quali etichette cercare, o cercale tutte';

$txt['pm_search_results'] = 'Risultati ricerca';
$txt['pm_search_none_found'] = 'Nessun messaggio trovato';

$txt['pm_search_orderby_relevant_first'] = 'Prima i pi&#249; significativi';
$txt['pm_search_orderby_recent_first'] = 'Prima i pi&#249; recenti';
$txt['pm_search_orderby_old_first'] = 'Prima i pi&#249; vecchi';

$txt['pm_visual_verification_label'] = 'Verifica';
$txt['pm_visual_verification_desc'] = 'Inserire il codice nell\'immagine qui sopra per inviare questo MP.';
$txt['pm_visual_verification_listen'] = 'Ascolta le lettere';

?>