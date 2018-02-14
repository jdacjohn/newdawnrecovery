<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'indice de mensaxes persoais';
$txt[148] = 'Enviar mensaxe';
$txt[150] = 'Para';
$txt[1502] = 'Bcc';
$txt[316] = 'Bandexa de Entrada';
$txt[320] = 'Bandexa de Saída';
$txt[321] = 'Novo Mensaxe';
$txt[411] = 'Borrar Mensaxes';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Borrar tódolos mensaxes do teu PMBOX';
$txt[413] = '¿Estás seguro que desexas borrar tódolos mensaxes?';
$txt[535] = 'Destinatario';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Novo Mensaxe Persoal: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Rematan de te enviar un mensaxe persoal de parte de SENDER en ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANTE: Lembranza, isto é solamente unha notificacion. Por favor, non respondas a este email.' . "\n\n" . 'O mensaxe que te envíaron foi:' . "\n\n" . 'MESSAGE';
$txt[748] = '(multiples destinatarios como \'nombreusuario1, nombreusuario2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Responder a este mensaxe persoal aqui:';

$txt['smf249'] = '¿Desexas borrar tódolos Mensaxes Instantaneos seleccionados?';

$txt['sent_to'] = 'Envíado a';
$txt['reply_to_all'] = 'Responder a Todos';

$txt['pm_capacity'] = 'Capacidade';
$txt['pm_currently_using'] = '%s mensaxes, %s%% cheo.';

$txt['pm_error_user_not_found'] = 'Non se puido atopar ó usuario \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'O usuario \'%s\' bloqueou a túa mensaxe persoal.';
$txt['pm_error_data_limit_reached'] = 'O mensaxe persoal non se puido enviar a \'%s\' debido a que excedíche-lo limite de mensaxes persoais.';
$txt['pm_successfully_sent'] = 'O mensaxe persoal envíose satisfactoriamente a \'%s\'.';
$txt['pm_too_many_recipients'] = 'You may not send persoal messages to morre than %d recipient(s) at once.';
$txt['pm_too_many_per_hour'] = 'You have exceeded the limit of %d persoal messages per hour.';
$txt['pm_send_report'] = 'Enviar reporte';
$txt['pm_save_outbox'] = 'Gardar unha copia no meu buzon de saída';
$txt['pm_undisclosed_recipients'] = 'Destinatario(s) sen revelar';

$txt['pm_read'] = 'Read';
$txt['pm_replied'] = 'Replied To';

// Message Pruning.
$txt['pm_prune'] = 'Purgar Mensaxes';
$txt['pm_prune_desc1'] = 'Borrar tódolas túas mensaxes persoais mais antigos de ';
$txt['pm_prune_desc2'] = 'dias.';
$txt['pm_prune_warning'] = '¿Estás seguro que desexas borra-las túas mensaxes persoais?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Accións adicionais';
$txt['pm_actions_delete_selected'] = 'Borrar seleccionados';
$txt['pm_actions_filter_by_label'] = 'Filtrar por etiqueta';
$txt['pm_actions_go'] = 'Ir';

// Manage Labels Screen.
$txt['pm_apply'] = 'Aplicar';
$txt['pm_manage_labels'] = 'Administrar Etiquetas';
$txt['pm_labels_delete'] = '¿Estás seguro que desexas borra-las etiquetas seleccionadas?';
$txt['pm_labels_desc'] = 'Aqui podes agregar, editar e borrar etiquetas utilizadas no centro de mensaxes persoais.';
$txt['pm_label_add_new'] = 'Agregar nova etiqueta';
$txt['pm_label_name'] = 'Nome da etiqueta';
$txt['pm_labels_no_exist'] = '¡Non tes ningunha etiqueta dada de alta!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etiqueta';
$txt['pm_msg_label_title'] = 'Etiquetar Mensaxe';
$txt['pm_msg_label_apply'] = 'Agregar etiqueta';
$txt['pm_msg_label_remove'] = 'Eliminar etiqueta';
$txt['pm_msg_label_inbox'] = 'Bandexa de Entrada';
$txt['pm_sel_label_title'] = 'Etiquetar seleccionados';
$txt['labels_too_many'] = '&iexcl;Sentímolo, %s mensaxes xa teñen o numero maximo de etiquetas permitido!';

// Sidebar Headings.
$txt['pm_labels'] = 'Etiquetas';
$txt['pm_messages'] = 'Mensaxes';
$txt['pm_preferences'] = 'Configuracion';

$txt['pm_is_replied_to'] = 'Haz reenviado ou respondido a este mensaxe.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Report To Admin';
$txt['pm_report_title'] = 'Report Personal Message';
$txt['pm_report_desc'] = 'From this page you can report the personal message you received to the admin team of the forum. Please be sure to include a description of why you are reporting the message, as this will be sent along with the contents of the original message.';
$txt['pm_report_admins'] = 'Administrator to send report to';
$txt['pm_report_all_admins'] = 'Send to all forum admins';
$txt['pm_report_reason'] = 'Reason why you are reporting this message';
$txt['pm_report_message'] = 'Report Message';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} has reported the below personal message, sent by {SENDER}, for the following reason:';
$txt['pm_report_pm_other_recipients'] = 'Other recipients of the message include:';
$txt['pm_report_pm_hidden'] = '%d hidden recipient(s)';
$txt['pm_report_pm_unedited_below'] = 'Below is the original contents of the personal message being reported:';
$txt['pm_report_pm_sent'] = 'Sent:';

$txt['pm_report_done'] = 'Thank you for submitting this report. You should hear back from the admin team shortly';
$txt['pm_report_return'] = 'Return to Inbox';

$txt['pm_search_title'] = 'Search Personal Messages';
$txt['pm_search_bar_title'] = 'Search Messages';
$txt['pm_search_text'] = 'Search for';
$txt['pm_search_go'] = 'Search';
$txt['pm_search_advanced'] = 'Advanced search';
$txt['pm_search_user'] = 'by user';
$txt['pm_search_match_all'] = 'Match all words';
$txt['pm_search_match_any'] = 'Match any words';
$txt['pm_search_options'] = 'Options';
$txt['pm_search_post_age'] = 'Age';
$txt['pm_search_show_complete'] = 'Show full message in results.';
$txt['pm_search_subject_only'] = 'Search by subject and author only.';
$txt['pm_search_between'] = 'Between';
$txt['pm_search_between_and'] = 'and';
$txt['pm_search_between_days'] = 'days';
$txt['pm_search_order'] = 'Order results by';
$txt['pm_search_choose_label'] = 'Choose labels to search by, or search all';

$txt['pm_search_results'] = 'Search Results';
$txt['pm_search_none_found'] = 'No Messages Found';

$txt['pm_search_orderby_relevant_first'] = 'Most relevant first';
$txt['pm_search_orderby_recent_first'] = 'Most recent first';
$txt['pm_search_orderby_old_first'] = 'Oldest first';

$txt['pm_visual_verification_label'] = 'Verification';
$txt['pm_visual_verification_desc'] = 'Please enter the code in the image above to send this pm.';
$txt['pm_visual_verification_listen'] = 'Listen to the Letters';

?>