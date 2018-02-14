<?php
// Version: 1.1.2; Login

$txt[37] = 'Has d\'escriure un nom d\'usuari.';
$txt[38] = 'No has proporcionat la teva contrasenya.';
$txt[39] = 'Contrasenya incorrecta';
$txt[98] = 'Escull un nom d\'usuari';
$txt[155] = 'Mode de Manteniment';
$txt[245] = 'Registre amb &egrave;xit';
$txt[431] = 'Felicitats! Ara ets usuari del f&ograve;rum.';
// Use numeric entities in the below string.
$txt[492] = 'i la teva contrasenya &eacute;s';
$txt[500] = 'Per favor introdueix una adre&ccedit;a de correu v&agrave;lida. (%s)';
$txt[517] = 'Informaci&oacute; Requerida';
$txt[520] = 'Utilitzat nom&eacute;s per a identificaci&oacute; per SMF. Pots utilitzar car&agrave;cteres especials despr&egrave;s d\'haver ingressat, canviant el teu nom a mostrar en el teu perfil.';
$txt[585] = 'Accepto';
$txt[586] = 'No accepto';
$txt[633] = 'Advert&egrave;ncia!';
$txt[634] = 'Nom&eacute;s membres registrats tenen acc&eacute;s a aquesta secci&oacute;.';
$txt[635] = 'Per favor ingressa sota o fes click';
$txt[636] = '-aqu&iacute;-';
$txt[637] = 'per a registrar un comtpte en ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Ho pots canviar despr&egrave;s d\'ingressar en la p&agrave;gina del perfil o visitant aquesta p&agrave;gina despr&egrave;s d\'ingressar:';
$txt[719] = 'El teu nom d\'usuari &eacute;s: ';
$txt[730] = 'Aquesta adre&ccedil;a de correu (%s) est&agrave; sent utilitzada per un usuari registrat. Si creus que &eacute;s un error, ves a la p&agrave;gina d\'ingr&eacute;s i utilitza la funci&oacute; recordar contrasenya amb aquesta adre&ccedil;a.';

$txt['login_hash_error'] = 'L\'esquema per a la seguretat de les contrasenyes ha estat actualitzat recentment. Si et plau, introdueix la teva contrasenya un altre cop.';

$txt['register_age_confirmation'] = 'Tinc com a m&iacute;nim %d anys';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Benvingut a ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Has registrat un compte a  ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'El nom d\'usuari del teu compte és %2$s i la teva contrasenya és %3$s.' . "\n\n" . 'Pots canviar la teva contrasenya després d\'ingressar, en la pàgina de perfil, o visitant aquesta pàgina un cop hagis ingressat:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Has registrat un compte a ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'El nom d\'usuari del teu compte és %2$s i la contrasenya és %3$s (que pot ser canviada després.)' . "\n\n" . 'Abans de poder ingressar, has d\'activar el compte. Per a fer-ho, segueix aquest enllaç:' . "\n\n" . '%5$s' . "\n\n" . 'En cas de tenir algun problema amb l\'activació, si et plau usa el codi "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'La teva sol·licitut de registre en ' . $context['forum_name'] . ' ha estat rebuda, %1$s.' . "\n\n" . 'El nom d\'usuari amb el que et t\'has registrat és %2$s amb la contrasenya %3$s.' . "\n\n" . 'Abans de poder ingrssar i utilitzar el fòrum, la teva sol·licitut serà revisada i aprovada. Quan això succeeixi, rebràs un altre correu des d\'aquesta adreça.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Has registrat un compte a ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'El teu nom d\'usuari és "%2$s".' . "\n\n" . 'Abans de poder ingressar, has d\'activar el teu compte. Per a fer-ho segueix aquest enllaç:' . "\n\n" . '%4$s' . "\n\n" . 'En cas de tenir algun problema amb l\'activació, si et plau utilitza el codi "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'La teva sol·licitut de registre a ' . $context['forum_name'] . ' ha estat rebuda, %1$s.' . "\n\n" . 'El nom d\'usuari amb el que t\'has registrat és %2$s.' . "\n\n" . 'Abans de poder ingressar i utilitzar el fòrum, la teva sol·licitut serà revisada i aprovada.  Quan això passi rebràs un altre correu des d\'aquesta adreça.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Ho sentim, no est&agrave;s autoritzat a registrar-te en aquest f&ograve;rum';
$txt['under_age_registration_prohibited'] = 'Ho sentim, per&ograve; no es permet el registre en aquest f&ograve;rum de persones menors de %d anys';

$txt['activate_account'] = 'Activaci&oacute; del compte';
$txt['activate_success'] = 'El teu compte ha estat activat satisfact&ograve;riament. Ara pots procedir a ingressar al f&ograve;rum.';
$txt['activate_not_completed1'] = 'La teva adre&ccedil;a de correu ha de ser validada abans de poder ingressar.';
$txt['activate_not_completed2'] = 'Necessites un altre correu d\'activaci&oacute;?';
$txt['activate_after_registration'] = 'Gr&agrave;cies per registrar-te. En breu rebr&agrave;s un correu amb un enlla&ccedil; per activar el teu compte. Si no reps cap correu despr&eacute;s d\'algun temps, mira la teva b&uacute;stia de spam.';
$txt['invalid_userid'] = 'L\'usuari no existeix';
$txt['invalid_activation_code'] = 'Codi d\'activaci&oacute; inv&agrave;lid';
$txt['invalid_activation_username'] = 'Nom d\'usuari o correu';
$txt['invalid_activation_new'] = 'Si t\'has registrast amb una adre&ccedil;a de correu incorrecta, escriu aqu&iacute; una nova junt amb la teva contrasenya.';
$txt['invalid_activation_new_email'] = 'Nova adre&ccedil;a de correu';
$txt['invalid_activation_password'] = 'Contrasenya anterior';
$txt['invalid_activation_resend'] = 'Reenviar codi d\'activaci&oacute;';
$txt['invalid_activation_known'] = 'Si ja coneixes el teu codi d\'activaci&oacute;, escriu-lo aqu&iacute;.';
$txt['invalid_activation_retry'] = 'Codi d\'activaci&oacute;';
$txt['invalid_activation_submit'] = 'Activar';

$txt['coppa_not_completed1'] = 'L\'administrador no ha rebut enara el consentiment dels teus pares/tutor per al teu compte.';
$txt['coppa_not_completed2'] = 'Necessitas m&eacute;s detalls?';

$txt['awaiting_delete_account'] = 'El teu compte ha estat marcat per a ser esborrat!<br />Si dessitges restaurar el teu compte, selecciona la casella &quot;Reactivar el meu compte&quot;, i ingressa novament.';
$txt['undelete_account'] = 'Reactivar el meu compte';

$txt['change_email_success'] = 'La teva adre&ccedil;a de correu ha estat canviada i se t\'ha enviat un nou correu d\'activaci&oacute;.';
$txt['resend_email_success'] = 'Un nou correu d\'activaci&oacute; ha estat enviat satisfact&grave;riamente.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalls de la nova contrasenya';
$txt['change_password_1'] = 'Les teves dades per a poder ingressar en';
$txt['change_password_2'] = 'han estat canviats i la teva contrasenya ha estat resetejada. Sota estan les teves noves dades per a ingressar.';

$txt['maintenance3'] = 'Aquest f&ograve;rum est&agrave; en mode de manteniment.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Per favor, llegeix/accepta els termes per a poder enviar el formulari.';
$txt['register_passwords_differ_js'] = 'No coincideixen les contrasenyes.';

$txt['approval_after_registration'] = 'Gr&agrave;cies per registrar-te. L\'administrador ha d\'aprovar el teu registre abans de poder comen&ccedil;ar a utilitzar el teu compte, rebr&agrave;s un correu en el m&iacute;nim de temps possible notificant-te de la decisi&oacute; de l\'administrador.';

$txt['admin_settings_desc'] = 'Aqu&iacute; pots canviar varis par&agrave;metres relacionats amb el registre de nous usuaris.';

$txt['admin_setting_registration_method'] = 'M&egrave;tode de registre utilitzat pels nous usuaris';
$txt['admin_setting_registration_disabled'] = 'Registre Desactivat';
$txt['admin_setting_registration_standard'] = 'Registre Immediat';
$txt['admin_setting_registration_activate'] = 'Activaci&oacute; per l\'Usuari';
$txt['admin_setting_registration_approval'] = 'Aprobaci&oacute; d\'Usuaris';
$txt['admin_setting_notify_new_registration'] = 'Notificar als administradors quan un nou usuari se registri';
$txt['admin_setting_send_welcomeEmail'] = 'Enviar correu de benvinguda als nous usuaris';

$txt['admin_setting_password_strength'] = 'Es requereix cert nivell de complicaci&oacute; en les contrasenyes dels usuaris';
$txt['admin_setting_password_strength_low'] = 'Baix - 4 car&agrave;cters com a m&iacute;nim';
$txt['admin_setting_password_strength_medium'] = 'Mig - no pot contenir el nom d\'usuari';
$txt['admin_setting_password_strength_high'] = 'Alta - barreja de diferents car&agrave;cters';

$txt['admin_setting_image_verification_type'] = 'Complexitat de la imatge en la verificaci&oacute; visual';
$txt['admin_setting_image_verification_type_desc'] = 'Com m&eacute;s complexa sigui la imatge m&eacute;s dif&iacute;cil ser&agrave; l\'acc&eacute;s dels bots';
$txt['admin_setting_image_verification_off'] = 'Desactivat';
$txt['admin_setting_image_verification_vsimple'] = 'Molt Baixa - Text pla en imatge';
$txt['admin_setting_image_verification_simple'] = 'Baixa - Lletres acolorides intercalades, sense interfer&egrave;ncies';
$txt['admin_setting_image_verification_medium'] = 'Mitja - Lletres acolorides intercalades, amb interfer&egrave;ncies';
$txt['admin_setting_image_verification_high'] = 'Alta - Lletres anguladas, amb moltes interfer&egrave;ncies';
$txt['admin_setting_image_verification_sample'] = 'Exemple';
$txt['admin_setting_image_verification_nogd'] = '<b>Nota:</b> si aquest servidor no t&eacute; la biblioteca de GD instal·lada els diversos ajustaments de la complexitat no tindran cap efecte.';

$txt['admin_setting_coppaAge'] = 'Edat per sota de la qual s\'aplicaran restriccions en el registre';
$txt['admin_setting_coppaAge_desc'] = '(Posa 0 per a desactivar-ho)';
$txt['admin_setting_coppaType'] = 'Acci&oacute; que es pendr&agrave; quan es registri un usuari per sota de la edat m&iacute;nima';
$txt['admin_setting_coppaType_reject'] = 'Rebutjar el seu registre';
$txt['admin_setting_coppaType_approval'] = 'Sol·licitar l\'aprovaci&oacute; dels pares/tutor';
$txt['admin_setting_coppaPost'] = 'Adre&ccedil;a postal a la que s\'ha d\'enviar l\'autoritzaci&oacute;';
$txt['admin_setting_coppaPost_desc'] = 'Nom&eacute;s aplica quan la restricci&oacute; d\'edat est&agrave; activada';
$txt['admin_setting_coppaFax'] = 'Nombre de fax al qual s\'hauran d\'enviar les pantalles d\'aprobaci&oacute;';
$txt['admin_setting_coppaPhone'] = 'Tel&egrave;fon amb el que es pot contactar als pares/tutor amb preguntes referents a la restricci&oacute; d\'edat';
$txt['admin_setting_coppa_require_contact'] = 'Has de proporcionar una adre&ccedil;a o fax de contacte si l\'aprovaci&oacute; dels pares/tutor es requerida.';

$txt['admin_register'] = 'Registre d\'un nou usuari';
$txt['admin_register_desc'] = 'Des d\'aqu&iacute; pots registrar en el f&ograve;rum nous usuaris i, si ho desitges, enviar-li els seus detalls per correu.';
$txt['admin_register_username'] = 'Nou Nom d\'usuari';
$txt['admin_register_email'] = 'Nova Adre&ccedil;a de correu';
$txt['admin_register_password'] = 'Contrasenya';
$txt['admin_register_username_desc'] = 'Nom d\'usuari pel nou usuari';
$txt['admin_register_email_desc'] = 'Adre&ccedil;a de correu de l\'usuari<br />(requerida si has seleccionat l\'opci&oacute; d\'enviar-li per correu els seus detalls)';
$txt['admin_register_password_desc'] = 'Nova contrasenya per l\'usuari';
$txt['admin_register_email_detail'] = 'Enviar per correu la nova contrasenya a l\'usuari';
$txt['admin_register_email_detail_desc'] = 'Es necess&agrave;ria l\'adre&ccedil;a de correu, encara que no estigui seleccionat';
$txt['admin_register_email_activate'] = 'Requerir-li a l\'usuari que activi el compte';
$txt['admin_register_group'] = 'Grup primari';
$txt['admin_register_group_desc'] = 'Grup d\'usuari primari al que el nuevo usuari pertanyer&agrave;';
$txt['admin_register_group_none'] = '(sense grup primari)';
$txt['admin_register_done'] = 'L\'usuari %s ha estat registrat satisfact&ograve;riament!';

$txt['admin_browse_register_new'] = 'Registrar nou membre';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Un nou usuari s\'ha inscrit';
$txt['admin_notify_profile'] = '%s ha firmat com a nou usuari del f&ograve;rum. Fes <i>click</i> en l\'enlla&ccedil; per a veure el seu perfil.';
$txt['admin_notify_approval'] = 'Abans de que aquest usuari pugui publicar missatges ha detenir el seu compte aprovat. Fes <i>click</i> en l\'enlla&ccedil; per anar a la pantalla d\'aprovació.';

$txt['coppa_title'] = 'F&ograve;rum amb restricci&oacute; d\'edat';
$txt['coppa_after_registration'] = 'Gr&agrave;cies per registrar-te a ' . $context['forum_name'] . '.<br /><br />Degut a que est&agrave;s per sota de l\'edat de {MINIMUM_AGE}, hi ha un requeriment legal
	per a obtenir el perm&iacute;s dels pares/tutor abans de poder comen&ccedil;ar a utilitzar el teu compte. Per a procedir amb l\'activaci&oacute; del compte, imprimeix la pantalla que es mostra a continuaci&oacute;:';
$txt['coppa_form_link_popup'] = 'Carregar la pantalla en una nova finestra';
$txt['coppa_form_link_download'] = 'Descarregar pantalla';
$txt['coppa_send_to_one_option'] = 'Aleshores sol·licita-li als teus pares/tutor que envi&iuml;n la pantalla degudament omplerta per:';
$txt['coppa_send_to_two_options'] = 'Aleshores sol·licita-li als teus pares/tutor que envi&iuml;n la pantalla degudament omplerta per qualsevol d\'aquestes dues opcions:';
$txt['coppa_send_by_post'] = 'Correu, a la seg&uuml;ent adre&ccedil;a:';
$txt['coppa_send_by_fax'] = 'Fax, al seg&uuml;ent nombre:';
$txt['coppa_send_by_phone'] = 'Alternativament, fes que ho parlin amb l\'administrador al nombre {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Pantalla de perm&iacute;s per a registrar-se a ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Adre&ccedil;a';
$txt['coppa_form_date'] = 'Data';
$txt['coppa_form_body'] = 'Jo {PARENT_NAME},<br /><br />dono el perm&iacute;s per a que {CHILD_NAME} (nom del fill) esdevingui un usuari registrat del f&ograve;rum: ' . $context['forum_name'] . ', amb el nom d\'usuari: {USER_NAME}.<br /><br />Entenc que certa informaci&oacute; personal proporcionada per {USER_NAME} pot que sigui mostrada a altres usuaris del f&ograve;rum.<br /><br />Firmat per:<br />{PARENT_NAME} (Pare/Tutor).';

$txt['visual_verification_label'] = 'Verificaci&oacute; visual';
$txt['visual_verification_description'] = 'Prem les lletres mostrades en la imatge';
$txt['visual_verification_sound'] = 'Escoltar les lletres';
$txt['visual_verification_sound_again'] = 'Escoltar un altre cop';
$txt['visual_verification_sound_close'] = 'Tancar finestra';
$txt['visual_verification_request_new'] = 'Demanar una nova imatge';
$txt['visual_verification_sound_direct'] = 'Tens problemes en escoltar-ho? Prova un enllaç a aquest.';

?>