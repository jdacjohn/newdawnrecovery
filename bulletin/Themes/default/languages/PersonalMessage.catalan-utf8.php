<?php
// Version: 1.1; PersonalMessage

$txt[143] = '&Iacute;ndex de missatges personals';
$txt[148] = 'Enviar missatges';
$txt[150] = 'Per a';
$txt[1502] = 'Bcc';
$txt[316] = 'Bustia d\'Entrada';
$txt[320] = 'Bustia de Sortida';
$txt[321] = 'Nou Missatge';
$txt[411] = 'Esborrar Missatge';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Esborrar tots els missatges del teu PMBOX';
$txt[413] = 'Estás segur que desitges esborrar tots els missatges?';
$txt[535] = 'Destinatari';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Nou Missatge Personal: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Acaben de enviar-te un missatge personal de part de SENDER en ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANT: Recorda, aquesta es solament una notificaci&oacute;. Per favor, no respongues a aquest email.' . "\n\n" . 'El missatge que t\'enviaren fou:' . "\n\n" . 'MESSAGE';
$txt[748] = '(m&uacute;ltiples destinataris com \'nomusuari1, nomusuario\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Respondre a aquest missatge personal ac&iacute;:';

$txt['smf249'] = 'Desitges esborrar tots els Missatges Personals seleccionats?';

$txt['sent_to'] = 'Enviat a';
$txt['reply_to_all'] = 'Responder a Tots';

$txt['pm_capacity'] = 'Capacitat';
$txt['pm_currently_using'] = '%s missatges, %s%% ple.';

$txt['pm_error_user_not_found'] = 'No s\'ha pogut trobar l\'usuari \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'L\'usuari \'%s\' ha bloquejat el teu missatge personal.';
$txt['pm_error_data_limit_reached'] = 'El missatge personal no s\'ha pogut enviar a \'%s\' degut a que excedix el llimit de missatges personales.';
$txt['pm_successfully_sent'] = 'El missatge personal s\'ha enviat satisfactoriament a \'%s\'.';
$txt['pm_too_many_recipients'] = 'No pots enviar missatges privats a m&eacute;s de %d destinatari(s) a la vegada.';
$txt['pm_too_many_per_hour'] = 'Has excedit el l&iacute;mit de %d missatges personals per hora.';
$txt['pm_send_report'] = 'Enviar notificacio';
$txt['pm_save_outbox'] = 'Guardar una copia en la meua bustia de sortida';
$txt['pm_undisclosed_recipients'] = 'Destinatari(s) sense revelar';

$txt['pm_read'] = 'Llegir';
$txt['pm_replied'] = 'Respost a';

// Message Pruning.
$txt['pm_prune'] = 'Purgar Missatges';
$txt['pm_prune_desc1'] = 'Esorrar tots els teus missatges personals mes antics de ';
$txt['pm_prune_desc2'] = 'dies.';
$txt['pm_prune_warning'] = 'Estás segur que desitges esborrar els teus missatges personals?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Accions adicionals';
$txt['pm_actions_delete_selected'] = 'Esborrar seleccionats';
$txt['pm_actions_filter_by_label'] = 'Filtrar per etiqueta';
$txt['pm_actions_go'] = 'Anar';

// Manage Labels Screen.
$txt['pm_apply'] = 'Aplicar';
$txt['pm_manage_labels'] = 'Administrar Etiquetes';
$txt['pm_labels_delete'] = 'Estás segur que desitges esborrar les etiquetes seleccionades?';
$txt['pm_labels_desc'] = 'Ac&iacute; pots afegir, editar y esborrar etiquetes utilitzades en el centre de missatges personals.';
$txt['pm_label_add_new'] = 'Afegir nova etiqueta';
$txt['pm_label_name'] = 'Nom de la etiqueta';
$txt['pm_labels_no_exist'] = 'No tens ninguna etiqueta donada d\'alta!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etiqueta';
$txt['pm_msg_label_title'] = 'Etiquetar Missatge';
$txt['pm_msg_label_apply'] = 'Afegir etiqueta';
$txt['pm_msg_label_remove'] = 'Eliminar etiqueta';
$txt['pm_msg_label_inbox'] = 'Bustia d\'Entrada';
$txt['pm_sel_label_title'] = 'Etiquetar seleccionats';
$txt['labels_too_many'] = 'Ho sentim, %s missatges ja tenen el nombre m&agrave;xim de etiquetes permes!';

// Sidebar Headings.
$txt['pm_labels'] = 'Etiquetes';
$txt['pm_messages'] = 'Missatges';
$txt['pm_preferences'] = 'Configuraci&oacute;';

$txt['pm_is_replied_to'] = 'Has reenviat o respost a aquest missatge.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Notificar a l\'administraci&oacute;';
$txt['pm_report_title'] = 'Missatge Personal Notificat';
$txt['pm_report_desc'] = 'des de aquesta pagina tu pots notificar el missatge personal que has rebut al equip d\'administraci&oacute; del f&ograve;rum. Per favor inclou una descripcio per la cual estas reportant aquest missatge, aquesta se enviara conjuntament amb el missatge original.';
$txt['pm_report_admins'] = 'Administrador per enviar notificacio a';
$txt['pm_report_all_admins'] = 'Envia a tots els administradors del f&ograve;rum';
$txt['pm_report_reason'] = 'Motiu per el cual notifiques el missatge';
$txt['pm_report_message'] = 'Notificar missatge';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[INFORMAR]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} ha notificat el segünt missatge pesonal, enviat per {SENDER}, per el següent motiu:';
$txt['pm_report_pm_other_recipients'] = 'Altres receptors del missatge inclou:';
$txt['pm_report_pm_hidden'] = '%d receptor(s) ocults';
$txt['pm_report_pm_unedited_below'] = 'Baix esta el contingut del missatge original que s\'ha notificat:';
$txt['pm_report_pm_sent'] = 'Enviat:';

$txt['pm_report_done'] = 'Gracies per la teua notificacio. Recibira resposta del equip de administracio el mes aviat possible';
$txt['pm_report_return'] = 'Tornat a la bustia d\'entrada';

$txt['pm_search_title'] = 'Buscar missatges personals';
$txt['pm_search_bar_title'] = 'Buscar missatges';
$txt['pm_search_text'] = 'Cercar per a';
$txt['pm_search_go'] = 'Buscar';
$txt['pm_search_advanced'] = 'Busqueda avançada';
$txt['pm_search_user'] = 'per usuari';
$txt['pm_search_match_all'] = 'Buscar totes les paraules';
$txt['pm_search_match_any'] = 'Buscar cualsevol paraula';
$txt['pm_search_options'] = 'Opcions';
$txt['pm_search_post_age'] = 'Edat';
$txt['pm_search_show_complete'] = 'Mostrar els missagtes complet en el resultat.';
$txt['pm_search_subject_only'] = 'Buscar sols per temes i autor.';
$txt['pm_search_between'] = 'Entre';
$txt['pm_search_between_and'] = 'i';
$txt['pm_search_between_days'] = 'dies';
$txt['pm_search_order'] = 'Ordena els resultats per';
$txt['pm_search_choose_label'] = 'Escull l\'etiqueta per a buscar per, o buscar tot';

$txt['pm_search_results'] = 'Resultats de la recerca';
$txt['pm_search_none_found'] = 'No hi ha missatges';

$txt['pm_search_orderby_relevant_first'] = 'Mes importants primer';
$txt['pm_search_orderby_recent_first'] = 'Mes recents primer';
$txt['pm_search_orderby_old_first'] = 'Mes vells primer';

$txt['pm_visual_verification_label'] = 'Verificaci&oacute;';
$txt['pm_visual_verification_desc'] = 'Per favor introdu&iuml;x el codi de la imatge per a enviar aquest missatge personal.';
$txt['pm_visual_verification_listen'] = 'Escoltar les Lletres';

?>