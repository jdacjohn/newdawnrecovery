<?php
// Version: 1.1.2; Login

$txt[37] = 'Tem de escrever um nome de utilizador.';
$txt[38] = 'N&atilde;o escreveu nenhuma password.';
$txt[39] = 'A password est&aacute; incorrecta';
$txt[98] = 'Escolha um nome de utilizador';
$txt[155] = 'Modo de manuten&ccedil;&atilde;o';
$txt[245] = 'O seu registo foi efectuado com sucesso';
$txt[431] = 'Parab&eacute;ns! Voc&ecirc; agora &eacute; um membro deste f&oacute;rum.';
// Use numeric entities in the below string.
$txt[492] = 'e a sua password &#233;';
$txt[500] = 'Por favor introduza um endere&ccedil;o de e-mail v&aacute;lido, %s.';
$txt[517] = 'Preenchimento obrigat&oacute;rio';
$txt[520] = 'Usado apenas para indentifica&ccedil;&atilde;o no F&oacute;rum';
$txt[585] = 'Concordo';
$txt[586] = 'N&atilde;o concordo';
$txt[633] = 'Aviso!';
$txt[634] = 'Apenas os membros registados t&ecirc;m acesso a esta funcionalidade.';
$txt[635] = 'Por favor entre no formul&aacute;rio em baixo ou';
$txt[636] = 'registe-se';
$txt[637] = 'no ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Pode alterar os seus dados depois de Entrar clicando no seu Perfil, ou visitando esta p&#225;gina:';
$txt[719] = 'O seu Nome de Utilizador &#233;:';
$txt[730] = 'Este endere&ccedil;o de e-mail (%s) j&aacute; est&aacute; a ser usado por um membro registado. Se acha que esta mensagem est&aacute; errada v&aacute; at&eacute; &agrave; p&aacute;gina de entrada e clique em \'Esqueceu-se da Password?\\. Use o seu e-mail para recuperar as informa&ccedil;&otilde;es.';

$txt['login_hash_error'] = 'A seguran&ccedil;a das passwords foi recentemente actualizada. Por favor introduza a sua password novamente.';

$txt['register_age_confirmation'] = 'Eu tenho pelo menos %d anos de idade';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Bem-vindo ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Est&#225; agora registado com uma conta no ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'O seu nome de utilizador &#233; %2$s e a password &#233; %3$s.' . "\n\n" . 'Pode alterar a sua password no seu perfil depois de entrar, ou visitando esta p&#225;gina:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Est&#225; agora registado com uma conta no ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'O seu nome de utilizador &#233; %2$s e a password &#233; %3$s (que pode ser alterada posteriormente.)' . "\n\n" . 'Antes de poder entrar, tem de primeiro activar a sua conta. Para isso, clique por favor no seguinte endere&#231;o:' . "\n\n" . '%5$s' . "\n\n" . 'Se tiver alguma dificuldade na activa&#231;&#227;o atrav&#233;s deste endere&#231;o, por favor use o c&#243;digo "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'O seu pedido de registo em ' . $context['forum_name'] . ' foi recebido, %1$s.' . "\n\n" . 'O nome de utilizador com que se registou foi %2$s e a password &#233; %3$s.' . "\n\n" . 'Antes de se ligar e poder come&#231;ar a utilizar o f&#243;rum, o seu registo ter&#225; de ser aprovado.  Quando isso acontecer, voc&ecirc; ir&#225; receber outro e-mail deste endere&#231;o.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Est&#225; agora registado com uma conta no ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'O seu nome de utilizador &#233; "%2$s".' . "\n\n" . 'Antes de poder entrar, tem de primeiro de activar a sua conta. Para isso, clique por favor no seguinte endere&#231;o:' . "\n\n" . '%4$s' . "\n\n" . 'Se tiver alguma dificuldade na activa&#231;&#227;o atrav&#233;s deste endere&#231;o, por favor use o c&#243;digo "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'O seu pedido de registo em ' . $context['forum_name'] . ' foi recebido, %1$s.' . "\n\n" . 'O nome de utilizador com que se registou foi %2$s.' . "\n\n" . 'Antes de se ligar e poder come&#231;ar a utilizar o f&#243;rum, o seu registo ter&#225; de ser aprovado.  Quando isso acontecer, voc&ecirc; ir&#225; receber outro e-mail deste endere&#231;o.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Desculpe, mas voc&ecirc; n&atilde;o tem permiss&atilde;o para se registar neste F&oacute;rum.';
$txt['under_age_registration_prohibited'] = 'Desculpe, mas utilizadores menores do que %d anos n&atilde;o se podem registar neste F&oacute;rum.';

$txt['activate_account'] = 'Activa&ccedil;&atilde;o de conta';
$txt['activate_success'] = 'A sua conta foi activada com sucesso. Pode a partir de agora Entrar no F&oacute;rum.';
$txt['activate_not_completed1'] = 'O seu endere&ccedil;o de e-mail necessita de ser validado antes de poder entrar no F&oacute;rum. Por favor verifique se recebeu o c&oacute;digo de activa&ccedil;&atilde;o no seu e-mail!';
$txt['activate_not_completed2'] = 'Precisa de outro e-mail de activa&ccedil;&atilde;o?';
$txt['activate_after_registration'] = 'Obrigado por se registar. Ir&aacute; receber em breve um e-mail com um endere&ccedil;o para efectuar a activa&ccedil;&atilde;o da sua conta.  Se n&atilde;o receber um e-mail dentro de pouco tempo, verifique a sua pasta de SPAM.';
$txt['invalid_userid'] = 'O utilizador n&atilde;o existe';
$txt['invalid_activation_code'] = 'C&oacute;digo de activa&ccedil;&atilde;o inv&aacute;lido';
$txt['invalid_activation_username'] = 'Nome de Utilizador ou E-Mail';
$txt['invalid_activation_new'] = 'Se se registou com um endere&ccedil;o de e-mail errado, escreva um novo e a sua password aqui.';
$txt['invalid_activation_new_email'] = 'Novo e-mail';
$txt['invalid_activation_password'] = 'Password antiga';
$txt['invalid_activation_resend'] = 'Reenviar c&oacute;digo de activa&ccedil;&atilde;o';
$txt['invalid_activation_known'] = 'Se j&aacute; sabe o seu c&oacute;digo de activa&ccedil;&atilde;o, escreva-o aqui.';
$txt['invalid_activation_retry'] = 'C&oacute;digo de activa&ccedil;&atilde;o';
$txt['invalid_activation_submit'] = 'Activar';

$txt['coppa_not_completed1'] = 'O administrador ainda n&atilde;o recebeu consentimento de activa&ccedil;&atilde;o da sua conta por parte do seu familiar/tutor.';
$txt['coppa_not_completed2'] = 'Necessita de mais detalhes?';

$txt['awaiting_delete_account'] = 'A sua conta foi marcada como apagada!<br />Se pretende restaurar a sua conta, marque a caixa &quot;Reactivar a minha conta&quot; e entre novamente.';
$txt['undelete_account'] = 'Reactivar a minha conta';

$txt['change_email_success'] = 'O seu endere&ccedil;o de email foi alterado, e foi enviado um novo e-mail de activa&ccedil;&atilde;o.';
$txt['resend_email_success'] = 'Um novo e-mail de activa&ccedil;&atilde;o foi enviado com sucesso.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalhes da nova password';
$txt['change_password_1'] = 'As suas informa&#231;&#245;es de entrada em';
$txt['change_password_2'] = 'foram alteradas e a sua password restaurada. Seguem em baixo os novos dados.';

$txt['maintenance3'] = 'Este quadro est&aacute; em modo de manuten&ccedil;&atilde;o.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Por favor leia e aceite o acordo antes se registar.';
$txt['register_passwords_differ_js'] = 'As duas passwords que inseriu não correspondem!';

$txt['approval_after_registration'] = 'Obrigado por se registar. O Administrador tem de aprovar o seu registo antes que voc&ecirc; possa come&ccedil;ar a usar a sua conta, ir&aacute; receber um e-mail em breve a informar da decis&atilde;o do Administrador.';

$txt['admin_settings_desc'] = 'Aqui pode alterar uma variedadade de defini&ccedil;&otilde;es relacionadas com o registo de novos membros.';

$txt['admin_setting_registration_method'] = 'M&eacute;todo de registo aplicado para novos membros';
$txt['admin_setting_registration_disabled'] = 'Registo desactivado';
$txt['admin_setting_registration_standard'] = 'Registo imediato';
$txt['admin_setting_registration_activate'] = 'Activa&ccedil;&atilde;o pelo utilizador';
$txt['admin_setting_registration_approval'] = 'Aprovado pelo administrador';
$txt['admin_setting_notify_new_registration'] = 'Informar administradores quando um membro se regista';
$txt['admin_setting_send_welcomeEmail'] = 'Enviar e-mail de boas vindas aos novos membros';

$txt['admin_setting_password_strength'] = 'Qualidade das passwords dos membros';
$txt['admin_setting_password_strength_low'] = 'Fraca - 4 caracteres m&iacute;nimos';
$txt['admin_setting_password_strength_medium'] = 'M&eacute;dia - n&atilde;o pode conter nome de utilizador';
$txt['admin_setting_password_strength_high'] = 'Alta - mistura de caracteres';

$txt['admin_setting_image_verification_type'] = 'Complexidade da imagem de verifica&ccedil;&atilde;o visual';
$txt['admin_setting_image_verification_type_desc'] = 'Quanto mais complexa for a imagem, mais dif&iacute;cil &eacute; de ser ultrapassada por rob&ocirc;s';
$txt['admin_setting_image_verification_off'] = 'Desactivada';
$txt['admin_setting_image_verification_vsimple'] = 'Muito Simples - Texto simples ou imagem';
$txt['admin_setting_image_verification_simple'] = 'Simples - Letras coloridas, sem est&aacute;tica';
$txt['admin_setting_image_verification_medium'] = 'M&eacute;dia - Letras coloridas, com est&aacute;tica';
$txt['admin_setting_image_verification_high'] = 'Alta - Letras anguladas, est&aacute;tica consider&aacute;vel';
$txt['admin_setting_image_verification_sample'] = 'Exemplo';
$txt['admin_setting_image_verification_nogd'] = '<b>Nota:</b> uma vez que este servidor n&atilde;o tem instalada a biblioteca GD, as configura&ccedil;&otilde;es de complexidade n&atilde;o ir&atilde;o ter qualquer efeito.';

$txt['admin_setting_coppaAge'] = 'Idade para aplicar restri&ccedil;&otilde;es de registo';
$txt['admin_setting_coppaAge_desc'] = '(Defina como 0 para desactivar)';
$txt['admin_setting_coppaType'] = 'Ac&ccedil;&atilde;o a tomar quando o utilizador n&atilde;o tiver a idade m&iacute;nima permitida';
$txt['admin_setting_coppaType_reject'] = 'Rejeitar o registo';
$txt['admin_setting_coppaType_approval'] = 'Requerer aprova&ccedil;&atilde;o do familiar/tutor';
$txt['admin_setting_coppaPost'] = 'Endere&ccedil;o postal para onde as declara&ccedil;&otilde;es de aprova&ccedil;&atilde;o devem ser enviadas';
$txt['admin_setting_coppaPost_desc'] = 'Apenas se aplica se a restri&ccedil;&atilde;o da idade estiver em ordem';
$txt['admin_setting_coppaFax'] = 'N&uacute;mero de Fax para onde as declara&ccedil;&otilde;es de aprova&ccedil;&atilde;o devem ser enviadas';
$txt['admin_setting_coppaPhone'] = 'N&uacute;mero de contacto que os familiares podem usar para colocar quest&otilde;es sobre a restri&ccedil;&atilde;o';
$txt['admin_setting_coppa_require_contact'] = 'Deve introduzir tanto um endere&ccedil;o postal ou de fax se a aprova&ccedil;&atilde;o por parte dos familiares/tutores for necess&aacute;ria.';

$txt['admin_register'] = 'Registo de novo utilizador';
$txt['admin_register_desc'] = 'A partir daqui pode registar novos utilizadores no F&oacute;rum, e de desejado, enviar os dados por email.';
$txt['admin_register_username'] = 'Novo nome de utilizador';
$txt['admin_register_email'] = 'Endere&ccedil;o de e-mail';
$txt['admin_register_password'] = 'Password';
$txt['admin_register_username_desc'] = 'Nome de Utilizador';
$txt['admin_register_email_desc'] = 'Endere&ccedil;o de e-mail';
$txt['admin_register_password_desc'] = 'Password';
$txt['admin_register_email_detail'] = 'Enviar nova password para o utilizador';
$txt['admin_register_email_detail_desc'] = 'Endere&ccedil;o de e-mail necess&aacute;rio mesmo que n&atilde;o marcado';
$txt['admin_register_email_activate'] = 'Requerer que o utilizador active a conta';
$txt['admin_register_group'] = 'Grupo';
$txt['admin_register_group_desc'] = 'O grupo a que o membro ir&aacute; pertencer';
$txt['admin_register_group_none'] = '(sem grupo)';
$txt['admin_register_done'] = 'O utilizador %s foi registado com sucesso!';

$txt['admin_browse_register_new'] = 'Registar novo utilizador';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Um novo utilizador foi registado';
$txt['admin_notify_profile'] = '%s acabou de se tornar um membro do F&#243;rum. Clique no link abaixo para ver o seu perfil.';
$txt['admin_notify_approval'] = 'Antes de poder come&#231;ar a colocar mensagens a sua conta ter&#225; de ser aprovada. Clique no link abaixo para ir para o ecr&#227; de aprova&#231;&#227;o.';

$txt['coppa_title'] = 'F&oacute;rum de idade restrita';
$txt['coppa_after_registration'] = 'Bem-vindo ao ' . $context['forum_name'] . '.<br /><br />Devido a teres idade inferior a {MINIMUM_AGE}, &eacute; um requerimento legal
	obter autoriza&ccedil;&atilde;o do teu familiar ou tutor antes que possas come&ccedil;ar a utilizar a tua conta.  Para obter a activa&ccedil;&atilde;o da conta imprime o formul&aacute;rio abaixo:';
$txt['coppa_form_link_popup'] = 'Carregar formul&aacute;rio numa nova janela';
$txt['coppa_form_link_download'] = 'Fazer download como ficheiro de texto';
$txt['coppa_send_to_one_option'] = 'Depois e s&oacute; pedir ao teu familiar/tutor que envie o formul&aacute;rio completo por:';
$txt['coppa_send_to_two_options'] = 'Depois e s&oacute; pedir ao teu familiar/tutor que envie o formul&aacute;rio completo por uma destas formas:';
$txt['coppa_send_by_post'] = 'Postal, para o seguinte endere&ccedil;o:';
$txt['coppa_send_by_fax'] = 'Fax, para o seguinte n&uacute;mero:';
$txt['coppa_send_by_phone'] = 'Em alternativa, podes pedir para ligarem para o administrador pelo seguinte n&uacute;mero {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Formul&aacute;rio de permiss&atilde;o para registo em ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Endere&ccedil;o';
$txt['coppa_form_date'] = 'Data';
$txt['coppa_form_body'] = 'Eu {PARENT_NAME},<br /><br />Declaro autorizar {CHILD_NAME} (nome do menor) a ser um membro registado do seguinte F&oacute;rum: ' . $context['forum_name'] . ', com o nome de utilizador: {USER_NAME}.<br /><br />Declaro compreender que certo tipo de informa&ccedil;&atilde;o pessoal facultada por {USER_NAME} poder&aacute; ser mostrada a outros utilizadores do F&oacute;rum.<br /><br />Assinatura:<br />{PARENT_NAME} (Familiar/Tutor).';

$txt['visual_verification_label'] = 'Verifica&ccedil;&atilde;o visual';
$txt['visual_verification_description'] = 'Insira as letras mostradas na imagem';
$txt['visual_verification_sound'] = 'Oi&ccedil;a as letras';
$txt['visual_verification_sound_again'] = 'Reproduzir novamente';
$txt['visual_verification_sound_close'] = 'Fechar esta janela';
$txt['visual_verification_request_new'] = 'Pedir para mostrar uma nova imagem';
$txt['visual_verification_sound_direct'] = 'Est&aacute; a ter problemas ao ouvir isto?  Experimente um link directo para o ficheiro.';

?>