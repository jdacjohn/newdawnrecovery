<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'Administrar Grups d\'usuaris';
$txt['membergroups_description'] = 'Els grups d\'usuaris serveixen per agrupar usuaris que tenen la mateixa configuraci&oacute; de permisos, apari&egrave;ncia o drets d\'acc&eacute;s. Alguns grups estn basats en el nombre de missatges que un usuario ha publicat. Pots assignar a alg&uacute; a un grup seleccionant el seu perfil i canviant la configuraci&oacute; del seu compte.';
$txt['membergroups_modify'] = 'Modificar';

$txt['membergroups_add_group'] = 'Afegir grup';
$txt['membergroups_regular'] = 'Grups regulars';
$txt['membergroups_post'] = 'Grups basats en el nombre de missatges';

$txt['membergroups_new_group'] = 'Afegir Grup';
$txt['membergroups_group_name'] = 'Nom del grup d\'usuaris';
$txt['membergroups_new_board'] = 'F&ograve;rums Visibles';
$txt['membergroups_new_board_desc'] = 'F&ograve;rums que el grup d\'usuaris pot veure.';
$txt['membergroups_new_board_post_groups'] = '<em>Nota: normalment, els grups basats en el conteig de missatges no necessiten acces perque el grup en el que el usuari es troba li donara acces.</em>';
$txt['membergroups_new_as_type'] = 'per tipus';
$txt['membergroups_new_as_copy'] = 'o en base a';
$txt['membergroups_new_copy_none'] = '(cap)';
$txt['membergroups_can_edit_later'] = '(pots editar-los despr&egrave;s.)';

$txt['membergroups_edit_group'] = 'Editar Grup';
$txt['membergroups_edit_name'] = 'Nom del grup';
$txt['membergroups_edit_post_group'] = 'Aquest grup est&agrave; basat en el nombre de missatges.';
$txt['membergroups_min_posts'] = 'Nombre de missatges requerits';
$txt['membergroups_online_color'] = 'Color en la llista d\'usuaris en l&iacute;nia';
$txt['membergroups_star_count'] = 'Nombre d\'imatges d\'estrella';
$txt['membergroups_star_image'] = 'Arxiu d\'imatge d\'estrella';
$txt['membergroups_star_image_note'] = '(comen&ccedil;ant en el URL del tema/imatges, pots utilitzar $language per a utilitzar l\'idioma de l\'usuari).';
$txt['membergroups_max_messages'] = 'M&agrave;x. missatges personals';
$txt['membergroups_max_messages_note'] = '(0 = il·limitat)';
$txt['membergroups_edit_save'] = 'Guardar';
$txt['membergroups_delete'] = 'Esborrar';
$txt['membergroups_confirm_delete'] = 'Est&agrave;s segur de voler esborrar aquest grup?!';

$txt['membergroups_members_title'] = 'Mostrant tots els usuaris del grup';
$txt['membergroups_members_no_members'] = 'Aquest grup es troba actualment buit';
$txt['membergroups_members_add_title'] = 'Afegir un usuari a aquest grup';
$txt['membergroups_members_add_desc'] = 'Llista d\'Usuaris a Afegir';
$txt['membergroups_members_add'] = 'Afegir Usuaris';
$txt['membergroups_members_remove'] = 'Eliminar-lo del Grup';

$txt['membergroups_postgroups'] = 'Grups basats en el nombre de missatges';

$txt['membergroups_edit_groups'] = 'Editar Grups de Membres';
$txt['membergroups_settings'] = 'Opcions dels Grups de Members';
$txt['groups_manage_membergroups'] = 'Grups que tenen permes cambiar de grup de membres';
$txt['membergroups_settings_submit'] = 'Guardar';
$txt['membergroups_select_permission_type'] = 'Selecciona perfil de permisos';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'Mostrar Categories';

$txt['admin_browse_approve'] = 'Usuaris que est&agrave;n esperant l\'aprobaci&oacute; dels seus compters';
$txt['admin_browse_approve_desc'] = 'des de ac&iacute; pots manejar a tots els usuaris que est&agrave;n esperant la aprobaci&oacute; dels seus compters.';
$txt['admin_browse_activate'] = 'Usuaris que estan esperant l\'activaci&oacute;';
$txt['admin_browse_activate_desc'] = 'Esta pantalla llista tots els usuaris que encara no han activat els seus compters.';
$txt['admin_browse_awaiting_approval'] = 'Esperant Aprobaci&oacute; <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Esperant Activaci&oacute; <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Nom de usuari';
$txt['admin_browse_email'] = 'Direcci&oacute; email';
$txt['admin_browse_ip'] = 'Direcci&oacute; IP';
$txt['admin_browse_registered'] = 'Registrat';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Seleccionat amb';
$txt['admin_browse_no_members_approval'] = 'No hi ha usuaris actualment en espera d\'aprovaci&oacute;.';
$txt['admin_browse_no_members_activate'] = 'No hi ha usuaris actualment que no hagin activat el seu compte.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'Tots els usuaris seleccionats?';
$txt['admin_browse_outstanding_warn'] = 'tots els usuaris afectats?';
$txt['admin_browse_w_approve'] = 'Aprovar';
$txt['admin_browse_w_activate'] = 'Activar';
$txt['admin_browse_w_delete'] = 'Borrar';
$txt['admin_browse_w_reject'] = 'Rebutjar';
$txt['admin_browse_w_remind'] = 'Recordar';
$txt['admin_browse_w_approve_deletion'] = 'Aprovar (Borrar Compters)';
$txt['admin_browse_w_email'] = 'i enviar email';
$txt['admin_browse_w_approve_require_activate'] = 'Aprovar i requerir l\'activaci&oacute;';

$txt['admin_browse_filter_by'] = 'Filtrar per';
$txt['admin_browse_filter_show'] = 'Mostrat';
$txt['admin_browse_filter_type_0'] = 'Compters nous sense activar';
$txt['admin_browse_filter_type_2'] = 'Canvis de Email sense activar';
$txt['admin_browse_filter_type_3'] = 'Nous compters sense aprovar';
$txt['admin_browse_filter_type_4'] = 'Borrat de compters sense aprovar';
$txt['admin_browse_filter_type_5'] = 'Compters "baix de la edad" sense aprovar';

$txt['admin_browse_outstanding'] = 'Usuaris Sobresalients';
$txt['admin_browse_outstanding_days_1'] = 'Amb tots els usuaris que se\'n registraren fa mes de';
$txt['admin_browse_outstanding_days_2'] = 'dies';
$txt['admin_browse_outstanding_perform'] = 'Realitza la següent acci&oacute;';
$txt['admin_browse_outstanding_go'] = 'Realitzar Acci&oacute;';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Registre rebutjat';
$txt['admin_approve_reject_desc'] = 'Lamentem informar-te que la teva solicitud per perteneixer al f&ograve;rum ' . $context['forum_name'] . ' ha sigut rebutjada.';
$txt['admin_approve_delete'] = 'Compte borrat';
$txt['admin_approve_delete_desc'] = 'El teu compte en ' . $context['forum_name'] . ' ha sigut borrat.  Probablement fou a que mai activares el teu compte, en eixe cas pots registrar-te de nou.';
$txt['admin_approve_remind'] = 'Recordatori de Registre';
$txt['admin_approve_remind_desc'] = 'Tu no has activat el teu compte encara en';
$txt['admin_approve_remind_desc2'] = 'Per favor fes click en el enllaç seguent per activar el teu compter:';
$txt['admin_approve_accept_desc'] = 'El teu compter ha sigut activat manualment per el administrador. Ja pots ingressar y publicar missatges.';
$txt['admin_approve_require_activation'] = 'El teu compte en  ' . $context['forum_name'] . ' ha sigut aprovat per els administrador del f&ograve;rum, i deu ser activat abans de poder publicar missatges.';

?>