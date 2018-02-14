<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Administrar Permisos';
$txt['permissions_modify'] = 'Modificar';
$txt['permissions_access'] = 'T&eacute; acc&eacute;s';
$txt['permissions_allowed'] = 'Perm&egrave;s';
$txt['permissions_denied'] = 'Denegat';

$txt['permissions_switch'] = 'Canviar a';
$txt['permissions_global'] = 'Global';
$txt['permissions_local'] = 'Local';

$txt['permissions_groups'] = 'Permisos per Grup d\'usuaris';
$txt['permissions_all'] = 'tot';
$txt['permissions_none'] = 'cap';
$txt['permissions_set_permissions'] = 'Establir permisos';

$txt['permissions_with_selection'] = 'Amb selecci&oacute;';
$txt['permissions_apply_pre_defined'] = 'Aplicar el perfil predefinit de permisos';
$txt['permissions_select_pre_defined'] = 'Seleccionar un perfil predeterminat';
$txt['permissions_copy_from_board'] = 'Copiar permisos d\'aquest F&ograve;rum';
$txt['permissions_select_board'] = 'Seleccionar el f&ograve;rum';
$txt['permissions_like_group'] = 'Establir els permisos com els d\'aquest grup';
$txt['permissions_select_membergroup'] = 'Seleccionar un grupo d\'usuaris';
$txt['permissions_add'] = 'Afegir Perm&iacute;s';
$txt['permissions_remove'] = 'Netejar Perm&iacut;s';
$txt['permissions_deny'] = 'Denegar Perm&iacute;s';
$txt['permissions_select_permission'] = 'Seleccionar un perm&iacute;s';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Pots seleccionar nom&eacute;s una acci&oacute; per a modificar els permisos';
$txt['permissions_no_action'] = 'No s\'ha seleccionat cap acci&oacute;';
$txt['permissions_deny_dangerous'] = 'Est&agrave;s a punt de negar un o m&eacute;s permisos.\\nAix&ograve; pot ser perill&oacute;s i causar resultats inesperats si \\"accidentalment\\" has deixat a alg&uacute; en els grups als que els denegues permisos.\\n\\nEst&agrave;s segur que desitges continuar?';

$txt['permissions_boards'] = 'Permisos per F&ograve;rum';

$txt['permissions_modify_group'] = 'Modificar Grup';
$txt['permissions_general'] = 'Permisos Generals';
$txt['permissions_board'] = 'Permisos Globals del F&ograve;rum';
$txt['permissions_commit'] = 'Guardar canvis';
$txt['permissions_modify_local'] = 'Modificar Permisos Locals';
$txt['permissions_on'] = 'en el f&ograve;rum';
$txt['permissions_local_for'] = 'Permisos Locals per grup';
$txt['permissions_option_on'] = 'P';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'N';
$txt['permissions_option_desc'] = 'Per a cada perm&iacute;s pots escollir \'Permetre\' (P), \'Rebutjar\' (X), o <span style="color: red;">\'Negar\' (N)</span>.<br /><br />Recorda que si negues un perm&iacute;s, qualsevol usuari - sigui moderador o qualsevol altra cosa - que es trobi en aquell grup ser&agrave; negat tamb&eacute;.<br />Per aquest motiu has d\'utilitzar negar amb cautela, nom&eacute;s quan sigui <b>necessari</b>. Rebutjar, pel contrari, nega l\'acc&eacute;s a menys que hagi estat perm&eacute;s.';

$txt['permissiongroup_general'] = 'General';
$txt['permissionname_view_stats'] = 'Veure les estad&iacute;stiques del f&ograve;rum';
$txt['permissionhelp_view_stats'] = 'Les estad&iacute;stiques del f&ograve;rum &eacute;s una p&agrave;gina que resum totes les estad&iacute;stiques del f&ograve;rum, tals com el nombre d\'usuaris, nombre diari de missatges i varies estad&iacute;stiques dels 10 mellors. Activar aquest perm&iacute;s afegeix un enlla&ccedil; en la parte inferior de l\'&iacute;ndex del f&ograve;rum (\'[M&eacute;s estad&iacute;stiques]\').';
$txt['permissionname_view_mlist'] = 'Veure la llista d\'usuaris';
$txt['permissionhelp_view_mlist'] = 'La llista d\'usuaris mostra a tots els usuaris que s\'han registrat en el f&ograve;rum. La llista pot ser ordenada, aix&iacute; com buscar en ella. La llista d\'usuaris s\'enlla&ccedil;a des del &iacute;ndex del f&ograve;rum i la p&agrave;gina d\'estad&iacute;stiques, al fer click en el nombre d\'usuaris.';
$txt['permissionname_who_view'] = 'Veure Qui est&agrave; en l&iacute;nia';
$txt['permissionhelp_who_view'] = 'Qui est&agrave; en l&iacute;nia mostra tots els usuaris que estn connectats, aix&iacute; com el que estn fent. Aquest perm&iacute;s funcionar&agrave; nom&eacute;s si ho tens activat tamb&eacute; en \'Config. i Opcions\'. Pots accedir a la pantalla de \'Qui est&agrave; en l&iacute;nia\' fent click en l\'enlla&ccedil; en la secci&oacute; d\' \'Usuaris en l&iacute;nia\' en l\'&iacute;ndex del f&ograve;rum.';
$txt['permissionname_search_posts'] = 'Cercar per missatges i temes';
$txt['permissionhelp_search_posts'] = 'El perm&iacute;s per a cercar permet a l\'usuari buscar en tots els f&ograve;rums als que t&eacute; acc&eacute;s. Quan el perm&iacute;s de cerca est&agrave; activat, el bot&oacute; de \'Buscar\' s\\afegir&agrave; a la barra de botons del f&ograve;rum.';
$txt['permissionname_karma_edit'] = 'Canviar el karma d\'altres usuaris';
$txt['permissionhelp_karma_edit'] = 'Karma &eacute;s una funci&oacute; que mostra la popularitat d\'un usuari. Per a poder utilitzar aquesta funci&oacute; has de tenir-la activada en \'Config. i Opcions\'. Aquest perm&iacute;s permetr&agrave; a un grup el poder votar. Aquest perm&iacute;s no t&eacute; efecte en convidats.';

$txt['permissiongroup_pm'] = 'Missatgeria Personal';
$txt['permissionname_pm_read'] = 'Llegir missatges personals';
$txt['permissionhelp_pm_read'] = 'Aquest perm&iacute;s permet als usuaris accedir a la secci&oacute; de Missatges Personals per a llegir els seus missatges. Sense aquest perm&iacute;s, un usuari no pot enviar missatges personals.';
$txt['permissionname_pm_send'] = 'Enviar missatges personals';
$txt['permissionhelp_pm_send'] = 'Envia missatges personals a altres usuaris registrats. Necessita del perm&iacute;s \'Llegir missatges personals\'.';

$txt['permissiongroup_calendar'] = 'Calendari';
$txt['permissionname_calendar_view'] = 'Veure el calendari';
$txt['permissionhelp_calendar_view'] = 'El calendari mostra per a cada mes, els aniversaris, events i dies festius. Aquest perm&iacute;s permet l\'acc&eacute;s al calendari. Quan aquest perm&iacute;s est&agrave; actiu, s\'afegir&agrave; un bot&oacute; a la barra de botons del f&ograve;rum i es mostrar&agrave; una llista en la part inferior de l\'&iacute;ndex del f&ograve;rum amb els aniversaris, events i dies festius propers. El calendari ha de ser activat des de \'Config. i Opcions\'.';
$txt['permissionname_calendar_post'] = 'Crear events en el calendari';
$txt['permissionhelp_calendar_post'] = 'Un event &eacute;s un tema lligat a certa data o rang de dates. Es poden crear events des del calendari. Un event pot crear-se nom&eacute;s si l\'usuari que crea l\'event pot crear nous temes.';
$txt['permissionname_calendar_edit'] = 'Editar events en el calendari';
$txt['permissionhelp_calendar_edit'] = 'Un event &eacute;s un tema lligat a certa data o rang de dates. Poden editar-se fent click en l\'asterisc vermell (*) al cant&oacute; de l\'event, en la vista del calendari. Per a poder modificar un event, l\'usuari ha de tenir els permisos necessaris per a editar el primer missatge del tema lligat a l\'event.';
$txt['permissionname_calendar_edit_own'] = 'Events propis';
$txt['permissionname_calendar_edit_any'] = 'Qualsevol event';

$txt['permissiongroup_maintenance'] = 'Administraci&oacute; del F&ograve;rum';
$txt['permissionname_admin_forum'] = 'Administrar el f&ograve;rum i la base de dades';
$txt['permissionhelp_admin_forum'] = 'Aquest perm&iacute;s permet a un usuari canviar la config. del f&ograve;rum i dels temes, administrar paquets i utilitzar les eines de manteniment del f&ograve;rum i la base de dades. Utilitza aquest perm&iacute;s amb precacuci&oacute; ja que &eacute;s molt poder&oacute;s.';
$txt['permissionname_manage_boards'] = 'Administrar f&ograve;rums i categorias';
$txt['permissionhelp_manage_boards'] = 'Aquest perm&iacute;s permet la creaci&oacute;, edici&oacute; i eliminaci&oacute; de f&ograve;rums i categories.';
$txt['permissionname_manage_attachments'] = 'Administrar arxius adjunts i &agrave;vatars';
$txt['permissionhelp_manage_attachments'] = 'Aquest perm&iacute;s permet l\'acc&eacute;s al centro d\'arxius adjunts, on estan llistats tots els arxius adjunts i &agrave;vatars del f&ograve;rum i d\'on pueden ser eliminats.';
$txt['permissionname_manage_smileys'] = 'Administrar emoticones';
$txt['permissionhelp_manage_smileys'] = 'Permet accedir al centro d\'emoticones. Aqu&iacute; es pot afegir, editar i emilinar emoticones i conjunts d\'ells.';
$txt['permissionname_edit_news'] = 'Editar Not&iacute;cies';
$txt['permissionhelp_edit_news'] = 'La funci&oacute; de not&iacute;cies permet que en cada pantalla apareixiuna l&iacute;nia aleat&ograve;ria de not&iacute;cies. Per a utilitzar la funci&oacute; de not&iacute;cies, activa-la en la Config. del f&ograve;rum.';

$txt['permissiongroup_member_admin'] = 'Administraci&oacute; d\'usuaris';
$txt['permissionname_moderate_forum'] = 'Moderar usuaris del f&ograve;rum';
$txt['permissionhelp_moderate_forum'] = 'Aquest perm&iacute;s inclou totes les funcions importants de moderaci&oacute; d\'usuaris, tals com la prohibici&oacute; d\'acc&eacute;s, administrarci&oacute; del registre d\'usuaris, rastrejar un usuaris.';
$txt['permissionname_manage_membergroups'] = 'Administrar i assignar grups d\'usuaris';
$txt['permissionhelp_manage_membergroups'] = 'Aquest perm&iacute;s permet a un usuari editar els grups d\'usuaris i assignar-li grups d\'usuaris a altres usuaris.';
$txt['permissionname_manage_permissions'] = 'Administrar permisos';
$txt['permissionhelp_manage_permissions'] = 'Aquest perm&iacute;s permet a un usuari editar tots els permisos d\'un grup d\'usuaris, en f&ograve;rums individuals o globalment.';
$txt['permissionname_manage_bans'] = 'Administrar la llista d\'accessos prohibits';
$txt['permissionhelp_manage_bans'] = 'Aquest perm&iacute;s permet a un usuari afegir o eliminar usuaris, adreces IP, noms de servidors i adreces de correu de la llista d\'usuaris amb acc&eacute;s prohibit. Tamb&eacute; els permet veure i eliminar les entrades del log dels usuaris amb acc&eacute;s prohibit que hagin intentat entrar.';
$txt['permissionname_send_mail'] = 'Enviar un correu del f&ograve;rum als usuaris';
$txt['permissionhelp_send_mail'] = 'Enviament massiu de correus a tots els usuaris del f&ograve;rum o nom&eacute;s a alguns grups d\'usuaris via correu o misatge personal (aquest darrer necessita el perm&iacute;s \'Enviar Missatge Personal\').';

$txt['permissiongroup_profile'] = 'Perfils d\'Usuaris';
$txt['permissionname_profile_view'] = 'Veure resum del perfil i estad&iacute;stiques';
$txt['permissionhelp_profile_view'] = 'Aquest perm&iacute;s permet als usuaris fer click en un nom d\'usuaris per a veure un resum de la configuraci&oacute; del seu perfil, algunas estad&iacute;stiques i tots els missatges.';
$txt['permissionname_profile_view_own'] = 'Perfil propi';
$txt['permissionname_profile_view_any'] = 'Qualsevol perfil';
$txt['permissionname_profile_identity'] = 'Editar la config. del compte';
$txt['permissionhelp_profile_identity'] = 'La config. del compte s&oacute;n les caracter&iacute;stiques b&agrave;siques d\'un perfil, tals com contrasenya, adre&ccedil;a de correu, grup i idioma predefinit.';
$txt['permissionname_profile_identity_own'] = 'Perfil propi';
$txt['permissionname_profile_identity_any'] = 'Qualsevol perfil';
$txt['permissionname_profile_extra'] = 'Editar la config. adicional del perfil';
$txt['permissionhelp_profile_extra'] = 'La config. adicional del perfil inclou dades del &agrave;vatar, prefer&egrave;ncies del tema, notificacions i missatges personals.';
$txt['permissionname_profile_extra_own'] = 'Perfil propi';
$txt['permissionname_profile_extra_any'] = 'Qualsevol perfil';
$txt['permissionname_profile_title'] = 'Editar t&iacute;tol personalitzat';
$txt['permissionhelp_profile_title'] = 'El t&iacute;tol personalitzat es mostra en la p&agrave;gina on es mostren temes i sota del perfil de cada usuari que tingui un t&iacute;tol personalitzat.';
$txt['permissionname_profile_title_own'] = 'Perfil propi';
$txt['permissionname_profile_title_any'] = 'Qualsevol perfil';
$txt['permissionname_profile_remove'] = 'Esborrar compte';
$txt['permissionhelp_profile_remove'] = 'Aquest perm&iacute;s permet a un usuari esborrar el se propi compte, quan tingui el valor de \'Compte propi\'.';
$txt['permissionname_profile_remove_own'] = 'Compte propi';
$txt['permissionname_profile_remove_any'] = 'Qualsevol compte';
$txt['permissionname_profile_server_avatar'] = 'Selecciona un avatar del servidor';
$txt['permissionhelp_profile_server_avatar'] = 'Si aix&ograve; est&agrave; activat, permetr&agrave; que un usuari seleccioni un avatar de les col·leccions instal·lades en el servidor.';
$txt['permissionname_profile_upload_avatar'] = 'Pujar un avatar al servidor';
$txt['permissionhelp_profile_upload_avatar'] = 'Aquesta opci&oacute; permetr&agrave; a un usuari pujar un avatar personal al servidor.';
$txt['permissionname_profile_remote_avatar'] = 'Seleccionar un &agrave;vatar remot';
$txt['permissionhelp_profile_remote_avatar'] = 'Degut a que els &agrave;vatars poden influir negativament en el temps requerit per a crear una p&agrave;gina, &eacute;s possible deshabilitar a alguns grups es utilitzar-los enmagatzemats en servidors externs. ';

$txt['permissiongroup_general_board'] = 'General';
$txt['permissionname_moderate_board'] = 'Moderar f&ograve;rum';
$txt['permissionhelp_moderate_board'] = 'El perm&iacute;s per a moderar el f&ograve;rum agrega alguns pocs permisos que permeten a un moderador ser un moderador real. Els permisos inclouen responder a temes bloquejats, canviar la expiraci&oacute; d\'una enquesta i veure els resultats d\'aquestes';

$txt['permissiongroup_topic'] = 'Temes';
$txt['permissionname_post_new'] = 'Publicar nous temes';
$txt['permissionhelp_post_new'] = 'Permet als usuaris publicar nous temes. No permet publicar respostes a temes.';
$txt['permissionname_merge_any'] = 'Convinar qualsevol tema';
$txt['permissionhelp_merge_any'] = 'Convinar dos o m&eacute;s temes en un. L\'ordenaci&oacute; dels missatges dins del tema convinat es basar&agrave; en l\'hora en la que els missatges van ser creats. Un usuari nom&eacute;s pot unir temes en els f&ograve;rums que tingui perm&iacute;s per a fer-ho. Per a convinar m&uacute;ltiples en un de sol, un usuari ha d\'activar la moderaci&oacute; r&agrave;pida en la config. del seu perfil.';
$txt['permissionname_split_any'] = 'Dividir qualsevol tema';
$txt['permissionhelp_split_any'] = 'Dividir un tema en dos temes separats.';
$txt['permissionname_send_topic'] = 'Enviar temes a amics';
$txt['permissionhelp_send_topic'] = 'Aquest perm&iacute;s permet a un usuari enviar un tema per correu a un amic, a l\'introduir la seva adre&ccedil;a de correu, permet al mateix temps afegir-hi un missatge.';
$txt['permissionname_make_sticky'] = 'Fixar temes';
$txt['permissionhelp_make_sticky'] = 'Els temes fixats s&oacute;n temes que sempre perman&egrave;ixen en la part superior d\'un f&ograve;rum. Poden ser &uacute;tils per anuncis o altres missatges importants.';
$txt['permissionname_move'] = 'Moure temes';
$txt['permissionhelp_move'] = 'Moure un tema d\'un f&ograve;rum a un altre. Els usuaris poden seleccionar nom&egrave;s f&ograve;rums dest&iacute; als que tinguin acc&egrave;s.';
$txt['permissionname_move_own'] = 'Tema propi';
$txt['permissionname_move_any'] = 'Qualsevol tema';
$txt['permissionname_lock'] = 'Bloquejar temes';
$txt['permissionhelp_lock'] = 'Aquest perm&iacute;s permet a un usuari bloquejar un tema. Aix&ograve; pot fer-se per assegurar-se que ning&uacute; respongui a un tema. Nom&eacute;s usuaris amb el perm&iacute;s de \'Moderar f&ograve;rum\' poden encara publicar en temes bloquejados.';
$txt['permissionname_lock_own'] = 'Tema propi';
$txt['permissionname_lock_any'] = 'Qualsevol tema';
$txt['permissionname_remove'] = 'Esborrar temes';
$txt['permissionhelp_remove'] = 'Esborrar temes complerts. Permet esborrar missatges espec&iacute;fics dins del tema!';
$txt['permissionname_remove_own'] = 'Tema propi';
$txt['permissionname_remove_any'] = 'Qualsevol tema';
$txt['permissionname_post_reply'] = 'Publicar respostes a temes';
$txt['permissionhelp_post_reply'] = 'Aquest perm&iacute;s permet responder a temes.';
$txt['permissionname_post_reply_own'] = 'Tema propi';
$txt['permissionname_post_reply_any'] = 'Qualsevol tema';
$txt['permissionname_modify_replies'] = 'Modificar respostes als temes propis';
$txt['permissionhelp_modify_replies'] = 'Permet al usuari que va iniciar un tema, el modificar totes les respostes al seu tema.';
$txt['permissionname_delete_replies'] = 'Esborrar respostes en els temes propis';
$txt['permissionhelp_delete_replies'] = 'Permite l\'usuari que va iniciar el tema eliminar totes les respostes a aquests.';
$txt['permissionname_announce_topic'] = 'Tema d\'anuncis';
$txt['permissionhelp_announce_topic'] = 'Permet enviar un correu d\'anuncis referent un tema a tots els usuaris o nom&eacutes a alguns grups d\'usuaris.';

$txt['permissiongroup_post'] = 'Missatges';
$txt['permissionname_delete'] = 'Esborrar missatge';
$txt['permissionhelp_delete'] = 'Esborrar missatges. Impideix a un usuari esborrar el primer mensaje d\'un tema.';
$txt['permissionname_delete_own'] = 'Missatges propis';
$txt['permissionname_delete_any'] = 'Qualsevol missatge';
$txt['permissionname_modify'] = 'Modificar missatges';
$txt['permissionhelp_modify'] = 'Editar missatges';
$txt['permissionname_modify_own'] = 'Missatges propis';
$txt['permissionname_modify_any'] = 'Qualsevol missatge';
$txt['permissionname_report_any'] = 'Advertir a un moderador sobre un missatge';
$txt['permissionhelp_report_any'] = 'Afegeix un enlla&ccedil; a cada missatge, permetint a un usuari reportar el missatge al moderador. Al reportar-lo, tots els moderadors d\'aquell f&ograve;rum rebran un correu amb un enlla&ccedil; al missatge reportat i una descripci&oacute; del problema (proporcionada per l\'usuari quel reporta).';

$txt['permissiongroup_poll'] = 'Enquestes';
$txt['permissionname_poll_view'] = 'Veure enquestes';
$txt['permissionhelp_poll_view'] = 'Permet a un usuari veure una enquesta. Sense aquest perm&iacute;s, l\'usuari ver&agrave; nom&eacute;s el tema.';
$txt['permissionname_poll_vote'] = 'Votar en enquestes';
$txt['permissionhelp_poll_vote'] = 'Permet a un usuari emitir un vot. No aplicable a convidats.';
$txt['permissionname_poll_post'] = 'Publicar enquestes';
$txt['permissionhelp_poll_post'] = 'Permet a un usuari publicar una nova enquesta. Degut a que les enquestes s&oacute;n un tipus especial de tema, no pots utilitzar aquest perm&iacute;s sense el de \'Publicar nous temes\'.';
$txt['permissionname_poll_add'] = 'Afegir enquestes a temes';
$txt['permissionhelp_poll_add'] = 'Permet a un usuari afegir una enquesta despr&egrave;s d\'haver creat el tema. Aquest perm&iacute;s necessita permisos suficients per a editar el primer missatge d\'un tema.';
$txt['permissionname_poll_add_own'] = 'Temes propis';
$txt['permissionname_poll_add_any'] = 'Qualsevol tema';
$txt['permissionname_poll_edit'] = 'Editar enquestes';
$txt['permissionhelp_poll_edit'] = 'Permet editar les opcions d\'una enquesta aix&iacute; com reiniciar la enquesta. Per a editar el m&agrave;xim nombre de vots i la data de caducitat, l\'usuari necessita tenir el perm&iacute;s de \'Moderar f&ograve;rum\'.';
$txt['permissionname_poll_edit_own'] = 'Enquesta pr&ograve;pia';
$txt['permissionname_poll_edit_any'] = 'Qualsevol enquesta';
$txt['permissionname_poll_lock'] = 'Bloquejar enquestes';
$txt['permissionhelp_poll_lock'] = 'Impideix que la enquesta accepti m&eacute;s vots.';
$txt['permissionname_poll_lock_own'] = 'Enquesta pr&ograve;pia';
$txt['permissionname_poll_lock_any'] = 'Qualsevol enquesta';
$txt['permissionname_poll_remove'] = 'Eliminar enquestes';
$txt['permissionhelp_poll_remove'] = 'Aquest perm&iacute;s permet l\'eliminaci&oacute; d\'enquestes.';
$txt['permissionname_poll_remove_own'] = 'Enquesta pr&ograve;pia';
$txt['permissionname_poll_remove_any'] = 'Qualsevol enquesta';

$txt['permissiongroup_notification'] = 'Notificacions';
$txt['permissionname_mark_any_notify'] = 'Sol·licitar notificaci&oacute; en respostes';
$txt['permissionhelp_mark_any_notify'] = 'Permet a l\'usuari rebre notificacions cada cop que alg&uacute; respongui en un tema al que est&egrave; subscrit.';
$txt['permissionname_mark_notify'] = 'Sol·licitar notificaci&oacute; en temes nous';
$txt['permissionhelp_mark_notify'] = 'Permet a un usuari el rebre un correu cada cop que es crei un nou tema en el f&ograve;rum en el que est&egrave; subscrit.';

$txt['permissiongroup_attachment'] = 'Arxius adjunts';
$txt['permissionname_view_attachments'] = 'Veure arxius adjunts';
$txt['permissionhelp_view_attachments'] = 'Els arxius adjunts s&oacute;n arxius que estan adjunts a missatges publicats. Aquesta opci&oacute; pot ser activada i configurada en \'Config. i Opcions\'. Degut a que no s\'accedeix directament als adjunts, pots evitar que aquests siguin descarregats per usuaris que no tinguin aquest perm&iacute;s.';
$txt['permissionname_post_attachment'] = 'Publicar arxius adjunts';
$txt['permissionhelp_post_attachment'] = 'Els arxius adjunts s&oacute;n arxius que estan adjunts a missatges publicats. Un missatge pot tenir varis adjunts.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Opcions dels Permisos';
$txt['groups_manage_permissions'] = 'Grups de members que tenen permis per a modificar permisos';
$txt['permission_settings_submit'] = 'Guardar';
$txt['permission_settings_enable_deny'] = 'Activar la opcion per a denegar permisos';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Desactivar aquesta opcio actualitzara els permisos denegats a desactivats.';
$txt['permission_by_membergroup_desc'] = 'Aquí pots fixar tots els permisos globals per a cada grup de membres. Estos permisos son valids en totes les categories que no tinguen actius els permisos locals fixats en la pantalla de \' Permisos per categoria\'.';
$txt['permission_by_board_desc'] = 'Aquí pots fixar si una categoria utilitza permisos globals o si utilitza permisos especifics. Utilitzar permisos locals per a aquesta categoria significa que tu pots fixar cada permis per a cada grup de membres.';
$txt['permission_settings_desc'] = 'Aquí pots establir qui té permís per canviar permisos, també com de sofisticat el sistema de permisos hauria de ser.';
$txt['permission_settings_enable_postgroups'] = 'Activar permisos per als grups basats en el conteig de missatges';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Deshabilitar aço eliminara tots els permisos fixats als grups basats en el conteig de missatges.';
$txt['permission_settings_enable_by_board'] = 'Activar permisos avançats per categoria';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Deshabilitar aço eliminara tots els permisos fixats per a esta categoria.';

?>