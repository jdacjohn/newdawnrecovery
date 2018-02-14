<?php
// Version: 1.1.2; Login

$txt[37] = 'Debes escribir un nome de usuario.';
$txt[38] = 'Non proporcionáche-la túa contrasinal.';
$txt[39] = 'Contrasinal incorrecta';
$txt[98] = 'Escolle un nome de usuario';
$txt[155] = 'Modo de Mantemento';
$txt[245] = 'Rexistro con exito';
$txt[431] = '&iexcl;Felicidades! Agora es membro do foro.';
// Use numeric entities in the below string.
$txt[492] = 'e o teu contrase&#241;a é';
$txt[500] = 'Por favor introduce unha direccion de email valida. (%s)';
$txt[517] = 'Informacion Requirida';
$txt[520] = 'Usado só para identificacion por SMF. Podes usar carácteres especiais despues de ingresar, cambiando o teu nome a amosar no teu perfil.';
$txt[585] = 'Acepto';
$txt[586] = 'Non acepto';
$txt[633] = '&iexcl;Advertencia!';
$txt[634] = 'Solamente usuarios rexistrados teñen acceso a esta seccion.';
$txt[635] = 'Por favor ingresa abaixo ou fai click';
$txt[636] = '-aqui-';
$txt[637] = 'para rexistrar unha conta en ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Pódelo cambiar despu&#233;s de ingresar na p&#225;gina de perfil, ou visitando esta p&#225;gina despu&#233;s de que ingreses:';
$txt[719] = 'O teu nome de usuario é: ';
$txt[730] = 'Esa direccion de email (%s) esta sendo usada por un usuario rexistrado. Se cres que é un erro, ve á pagina de ingreso e usa a funcion lembrar contrasinal con esa direccion.';

$txt['login_hash_error'] = 'O esquema para a seguridade das contrasinais foi actualizado recentemente.  Por favor, introduce a túa contrasinal novamente.';

$txt['register_age_confirmation'] = 'Teño polo menos %d anos';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Benvido a ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Haz rexistrado unha conta en  ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'O nome de usuario da túa conta é %2$s e o seu contrase&#241;a é %3$s.' . "\n\n" . 'Podes cambia-lo teu contrase&#241;a despues que ingreses, na p&#225;gina de perfil, ou visitando esta p&#225;gina unha vez que ingreses:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Haz rexistrado unha conta en ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'O nome de usuario da túa conta é %2$s e o seu contrase&#241;a é %3$s (que pode ser cambiada despu&#233;s.)' . "\n\n" . 'Antes de que poidas ingresar, debes primeiro activa-la túa conta. Para lo face, por favor segue este enlace:' . "\n\n" . '%5$s' . "\n\n" . 'En caso que teñas alg&#250;n problema coa activaci&#243;n, por favor usa o c&#243;digo "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'A túa solicitude de rexistro en ' . $context['forum_name'] . ' foi recibida, %1$s.' . "\n\n" . 'O nome de usuario co que te rexistraches foi %2$s e o seu contrase&#241;a foi %3$s.' . "\n\n" . 'Antes de que poidas ingresar e utiliza-lo foro, a túa solicitude ser&#225; revisada e aprobada.  Cando isto aconteza, recibir&#225;s outro email dende esta direcci&#243;n.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Haz rexistrado unha conta en ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'O teu nome de usuario é "%2$s".' . "\n\n" . 'Antes de que poidas ingresar, debes primeiro activa-la túa conta. Para lo face, por favor segue este enlace:' . "\n\n" . '%4$s' . "\n\n" . 'En caso que teñas alg&#250;n problema coa activaci&#243;n, por favor usa o c&#243;digo "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'A túa solicitude de rexistro en ' . $context['forum_name'] . ' foi recibida, %1$s.' . "\n\n" . 'O nome de usuario co que te rexistraches foi %2$s.' . "\n\n" . 'Antes de que poidas ingresar e utiliza-lo foro, a túa solicitude ser&#225; revisada e aprobada.  Cando isto aconteza, recibir&#225;s outro email dende esta direcci&#243;n.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Síntoo, non estas autorizado para te rexistrar neste foro';
$txt['under_age_registration_prohibited'] = 'Sentímolo, pero non se permite o rexistro neste foro de persoas menores de %d anos';

$txt['activate_account'] = 'Activacion da cuenta';
$txt['activate_success'] = 'A túa conta foi activada satisfactoriamente. Agora podes proceder a ingresar ó foro.';
$txt['activate_not_completed1'] = 'A túa conta de email precisa ser validada antes de que poidas ingresar.';
$txt['activate_not_completed2'] = '&iquest;Precisas outro email de activacion?';
$txt['activate_after_registration'] = 'Grazas por te rexistrar. Recibiras en breve un email cun enlace para activa-la túa conta.  If you don\'t receive an email after some estafe, check your spam folder.';
$txt['invalid_userid'] = 'O usuario non existe';
$txt['invalid_activation_code'] = 'Codigo de activacion invalido';
$txt['invalid_activation_username'] = 'Nome de usuario ou email';
$txt['invalid_activation_new'] = 'Se te rexistraches cunha direccion de email incorrecta, escribe aqui unha nova xunto coa túa contrasinal.';
$txt['invalid_activation_new_email'] = 'Nova direccion de email';
$txt['invalid_activation_password'] = 'Contrasinal anterior';
$txt['invalid_activation_resend'] = 'Reenviar codigo de activacion';
$txt['invalid_activation_known'] = 'Se xa coñéce-lo teu c&oacutedigo de activacion, escribelo aqui.';
$txt['invalid_activation_retry'] = 'Codigo de activacion';
$txt['invalid_activation_submit'] = 'Activar';

$txt['coppa_not_completed1'] = 'O administrador non recibiu aínda o consentimento dos teus pais/titor para a túa conta.';
$txt['coppa_not_completed2'] = '&iquest;Precisas mais detalles?';

$txt['awaiting_delete_account'] = '&iexcl;A túa conta foi marcada para se borrar!<br />Se desexas restaura-la túa conta, For favor selecciona a casiña &quot;Reactiva-la miña conta&quot;, e ingresa novamente.';
$txt['undelete_account'] = 'Reactiva-la miña cuenta';

$txt['change_email_success'] = 'O teu direccion de email foi cambiada, e envíousele un novo email de activacion.';
$txt['resend_email_success'] = 'Un novo email de activacion foi envíado satisfactoriamente.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalles da nova contrase&#241;a';
$txt['change_password_1'] = 'Os teus datos para ingresar en';
$txt['change_password_2'] = 'foron cambiados e o teu contrase&#241;a foi reseteada. Debaixo est&#225;n os teus novos datos para ingresar.';

$txt['maintenance3'] = 'Este foro esta en modo de mantemento.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Favor de ler/acepta-los t&#233;rminos para poder envia-la forma.';
$txt['register_passwords_differ_js'] = 'Non coinciden as contrase&#241;as.';

$txt['approval_after_registration'] = 'Grazas por te rexistrar. O administrador debe aproba-lo teu rexistro antes de que poidas empezar a usa-la túa conta, recibiras un email á brevedad posible notificandote da decision do administrador.';

$txt['admin_settings_desc'] = 'Aqui podes cambiar varios parametros relacionados co rexistro de novos usuarios.';

$txt['admin_setting_registration_method'] = 'Metodo de rexistro utilizado para os novos usuarios';
$txt['admin_setting_registration_disabled'] = 'Rexistro Desactivado';
$txt['admin_setting_registration_standard'] = 'Rexistro Inmediato';
$txt['admin_setting_registration_activate'] = 'Activacion polo Usuario';
$txt['admin_setting_registration_approval'] = 'Aprobacion de Usuarios';
$txt['admin_setting_notify_new_registration'] = 'Notificar ós administradores cando un novo usuario rexístrese';
$txt['admin_setting_send_welcomeEmail'] = 'Mandar email de benvida ós novos usuarios';

$txt['admin_setting_password_strength'] = 'Required strength for user passwords';
$txt['admin_setting_password_strength_low'] = 'Low - 4 character minimum';
$txt['admin_setting_password_strength_medium'] = 'Medium - cannot contain username';
$txt['admin_setting_password_strength_high'] = 'High - mixture of different characters';

$txt['admin_setting_image_verification_type'] = 'Complexity of visual verification image';
$txt['admin_setting_image_verification_type_desc'] = 'The morre complex the image the harder it is for bots to bypass';
$txt['admin_setting_image_verification_off'] = 'Disabled';
$txt['admin_setting_image_verification_vsimple'] = 'Very Simple - Plain text on image';
$txt['admin_setting_image_verification_simple'] = 'Simple - Overlapping coloured letters, non noise';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlapping coloured letters, with noise';
$txt['admin_setting_image_verification_high'] = 'High - Angled letters, considerable noise';
$txt['admin_setting_image_verification_sample'] = 'Sample';
$txt['admin_setting_image_verification_nogd'] = '<b>Note:</b> as this server does not have the GD library installed the different complexity settings will have non effect.';

$txt['admin_setting_coppaAge'] = 'Idade debaixo da cal se aplicasen restricións no rexistro';
$txt['admin_setting_coppaAge_desc'] = '(Pon 0 para lo desactiva)';
$txt['admin_setting_coppaType'] = 'Accion que se tomase cando un usuario por debaixo da idade minima rexístrese';
$txt['admin_setting_coppaType_reject'] = 'Rexeita-lo seu rexistro';
$txt['admin_setting_coppaType_approval'] = 'Solicita-la aprobacion dos pais/titor';
$txt['admin_setting_coppaPost'] = 'Direccion postal á que se debe envia-la autorizacion';
$txt['admin_setting_coppaPost_desc'] = 'Só aplica cando a restriccion de idade esta activada';
$txt['admin_setting_coppaFax'] = 'Numero de fax ó cal as formas de aprobacion deberan se enviar';
$txt['admin_setting_coppaPhone'] = 'Telefono no que se poden contactar ós pais/titor con preguntas referentes á restriccion de idade';
$txt['admin_setting_coppa_require_contact'] = 'Debes proporcionar unha direccion ou fax de contacto se a aprobacion dos pais/titor é requirida.';

$txt['admin_register'] = 'Rexistro dun novo usuario';
$txt['admin_register_desc'] = 'Dende aqui podes rexistrar no foro novos usuarios e, de asi lo desexa, lles envia-los seus detalles por email.';
$txt['admin_register_username'] = 'Novo Nome de usuario';
$txt['admin_register_email'] = 'Nova Direccion de email';
$txt['admin_register_password'] = 'Contrasinal';
$txt['admin_register_username_desc'] = 'Nome de usuario para o novo usuario';
$txt['admin_register_email_desc'] = 'Direccion email do usuario<br />(requirida se seleccionáche-la opcion de lles enviar por email os seus detalles)';
$txt['admin_register_password_desc'] = 'Nova contrasinal para o usuario';
$txt['admin_register_email_detail'] = 'Enviar por email a nova contrasinal ó usuario';
$txt['admin_register_email_detail_desc'] = 'É necesaria a direccion email, aínda se non esta seleccionado';
$txt['admin_register_email_activate'] = 'Lle pedir ó usuario que active a cuenta';
$txt['admin_register_group'] = 'Grupo primario';
$txt['admin_register_group_desc'] = 'Grupo de usuario primario ó que o novo usuario pertenecera';
$txt['admin_register_group_none'] = '(sen grupo primario)';
$txt['admin_register_done'] = 'Member %s has been registered successfully!';

$txt['admin_browse_register_new'] = 'Rexistrar novo usuario';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Un novo usuario hase suscrito';
$txt['admin_notify_profile'] = '%s asinou como novo usuario do foro. Fai <i>click</i> no enlace para ve-lo seu perfil.';
$txt['admin_notify_approval'] = 'Antes de que este usuario poida publicar mensaxes debe ter primeiro a súa conta aprobada. Fai <i>click</i> no enlace para ir á pantalla de aprobaci&#243;n.';

$txt['coppa_title'] = 'Foro con restriccion de idade';
$txt['coppa_after_registration'] = 'Grazas por te rexistrar con ' . $context['forum_name'] . '.<br /><br />Debido a que estas por debaixo da idade de {MINIMUM_AGE}, hai un requirimento legal
	para obte-lo permiso dos teus pais/titor antes de que poidas empezar a usa-la túa conta. Para proceder coa activacion da conta por favor imprima a forma que a continuacion se mostra:';
$txt['coppa_form_link_popup'] = 'Carga-la forma nunha xanela nova';
$txt['coppa_form_link_download'] = 'Descargar forma';
$txt['coppa_send_to_one_option'] = 'Entón solicitale ós teus pais/titor que envíen a forma propiamente enchida por:';
$txt['coppa_send_to_two_options'] = 'Entón solicitale ós teus pais/titor que envíen a forma propiamente enchida por calquera destas dúas opcións:';
$txt['coppa_send_by_post'] = 'Correo, á seguinte direccion:';
$txt['coppa_send_by_fax'] = 'Fax, ó seguinte numero:';
$txt['coppa_send_by_phone'] = 'Alternativamente, fai que lle falen ó administrador ó numero {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Forma de permiso para se rexistrar en ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Direccion';
$txt['coppa_form_date'] = 'Data';
$txt['coppa_form_body'] = 'Eu {PARENT_NAME},<br /><br />dou o permiso para que {CHILD_NAME} (child name) convértase nun usuario rexistrado do foro: ' . $context['forum_name'] . ', co nome de usuario: {USER_NAME}.<br /><br />Entendo que certa informacion persoal proporcionada por {USER_NAME} pode que sexa amosada a outros usuarios do foro.<br /><br />Asinado por:<br />{PARENT_NAME} (Pai/Titor).';

$txt['visual_verification_label'] = 'Visual verification';
$txt['visual_verification_description'] = 'Type the letters shown in the picture';
$txt['visual_verification_sound'] = 'Listen to the letters';
$txt['visual_verification_sound_again'] = 'Play again';
$txt['visual_verification_sound_close'] = 'Close window';
$txt['visual_verification_request_new'] = 'Request another image';
$txt['visual_verification_sound_direct'] = 'Having problems hearing this?  Try a direct link to it.';

?>