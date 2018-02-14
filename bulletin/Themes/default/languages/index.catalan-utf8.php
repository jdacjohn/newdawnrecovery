<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'ca_ES.utf8';
$txt['lang_dictionary'] = 'ca';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Diumenge', 'Dilluns', 'Dimats', 'Dimecres', 'Dijous', 'Divendres', 'Dissabte');
$txt['days_short'] = array('Diu', 'Dil', 'Dim', 'Dix;', 'Dij', 'Div', 'Dis');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Gener', 'Febrer', 'Mar&ccedil;', 'Abril', 'Maig', 'Juny', 'Juliol', 'Agost', 'Septembre', 'Octubre', 'Novembre', 'Decembre');
$txt['months_titles'] = array(1 => 'Gener', 'Febrer', 'Mar&ccedil;', 'Abril', 'Maig', 'Juny', 'Juliol', 'Agost', 'Septembre', 'Octubre', 'Novembre', 'Decembre');
$txt['months_short'] = array(1 => 'Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dec');

$txt['newmessages0'] = '&eacute;s nou';
$txt['newmessages1'] = 's&oacute;n nous';
$txt['newmessages3'] = 'Nou(s)';
$txt['newmessages4'] = ',';

$txt[2] = 'Administraci&oacute;';

$txt[10] = 'Guardar';

$txt[17] = 'Modificar';
$txt[18] = $context['forum_name'] . ' - &Iacute;ndex';
$txt[19] = 'Usuaris';
$txt[20] = 'Nom del f&ograve;rum';
$txt[21] = 'Missatges';
$txt[22] = 'Darrer missatge';

$txt[24] = '(Sense assumpte)';
$txt[26] = 'Missatges';
$txt[27] = 'Veure Perfil';
$txt[28] = 'Visitant';
$txt[29] = 'Autor';
$txt[30] = 'el';
$txt[31] = 'Eliminar';
$txt[33] = 'Crear nou tema';

$txt[34] = 'Ingressar';
// Use numeric entities in the below string.
$txt[35] = 'Usuari';
$txt[36] = 'Contrasenya';

$txt[40] = 'Nom d\'usuari innexistent.';

$txt[62] = 'Moderador del F&ograve;rum';
$txt[63] = 'Eliminar Tema';
$txt[64] = 'Temes';
$txt[66] = 'Modificar missatge';
$txt[68] = 'Nom';
$txt[69] = 'Correu';
$txt[70] = 'Assumpte';
$txt[72] = 'Missatge';

$txt[79] = 'Editar Perfil';

$txt[81] = 'Escull contrasenya';
$txt[82] = 'Verifica contrasenya';
$txt[87] = 'Posici&oacute;';

$txt[92] = 'Veur perfil de';
$txt[94] = 'Total';
$txt[95] = 'Missatges';
$txt[96] = 'Web';
$txt[97] = 'Registrar-se';

$txt[101] = '&Iacute;ndex de Missatges';
$txt[102] = 'Not&iacute;cies';
$txt[103] = 'Inici';

$txt[104] = 'Bloquejar/Desbloquejar Tema';
$txt[105] = 'Publicar';
$txt[106] = 'Ha ocurrit un error!';
$txt[107] = 'a les';
$txt[108] = 'Sortir';
$txt[109] = 'Iniciat per';
$txt[110] = 'Respostes';
$txt[111] = 'Darrer missatge';
$txt[114] = 'Ingressar a Administraci&oacute;';
// Use numeric entities in the below string.
$txt[118] = 'Tema';
$txt[119] = 'Ajuda';
$txt[121] = 'Eliminar misatge';
$txt[125] = 'Notificar';
$txt[126] = 'Desitges una notificaci&oacute; per correu si alg&uacute; respon a aquest tema?';
// Use numeric entities in the below string.
$txt[130] = "Salutacions,\nL\'equip " . $context['forum_name'] . '.';
$txt[131] = 'Notificar respostes';
$txt[132] = 'Moure tema';
$txt[133] = 'Moure a';
$txt[139] = 'P&agrave;gines';
$txt[140] = 'Usuaris actius en els darrers ' . $modSettings['lastActive'] . ' minuts';
$txt[144] = 'Missatges Personals';
$txt[145] = 'Respondre citant';
$txt[146] = 'Resposta';

$txt[151] = 'No tens missatges...';
$txt[152] = 'tens';
$txt[153] = 'missatges';
$txt[154] = 'Esborrar aquest missatge';

$txt[158] = 'Usuaris en l&iacute;nia';
$txt[159] = 'Missatge Personal';
$txt[160] = 'Anar a';
$txt[161] = 'Anar';
$txt[162] = 'Est&agrave;s segur de voler esborrar aquest tema?';
$txt[163] = 'S&iacute;';
$txt[164] = 'No';

$txt[166] = 'Resultats de la cerca';
$txt[167] = 'Fi de resultats';
$txt[170] = 'Ho sentim, no s\'han trobat coincid&egrave;ncies';
$txt[176] = 'en';

$txt[182] = 'Buscar';
$txt[190] = 'Tots';

$txt[193] = 'Endarrera';
$txt[194] = 'recordatori';
$txt[195] = 'Missatge iniciat per';
$txt[196] = 'T&iacute;tol';
$txt[197] = 'Publicat per';
$txt[200] = 'Llista (amb opci&oacute; de cerca) de tots els usuaris registrats.';
$txt[201] = 'Per favor, d&oacute;na la benvinguda a';
$txt[208] = 'Centre d\'Administraci&oacute; SMF';
$txt[211] = 'Darrera modificaci&oacute;';
$txt[212] = 'Desitges desactivar la notificaci&oacute; en aquest tema?';

$txt[214] = 'Missatges recents';

$txt[227] = 'Ubicaci&oacute;';
$txt[231] = 'G&egrave;nere';
$txt[233] = 'Data de registre';

$txt[234] = 'Veure els 10 missatges m&eacute;s recents en el f&ograve;rum.';
$txt[235] = '&eacute;s el tema actualitzat m&eacute;s recentment';

$txt[238] = 'Mascul&iacute;';
$txt[239] = 'Femen&iacute;';

$txt[240] = 'Car&agrave;cter inv&agrave;lid en el nom d\'usuari.';

$txt['welcome_guest'] = 'Benvingut(da), <b>' . $txt[28] . '</b>. Per favor <a href="' . $scripturl . '?action=login">ingressa</a> o <a href="' . $scripturl . '?action=register">registra\'t</a>.';
$txt['welcome_guest_activate'] = '<br />Has perdut el teu <a href="' . $scripturl . '?action=activate">correu d\'activaci&oacute;?</a>';
$txt['hello_member'] = 'Hola,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Benvingut(da),';
$txt[247] = 'Hola,';
$txt[248] = 'Benvingut(da),';
$txt[249] = 'Per favor';
$txt[250] = 'Endarrera';
$txt[251] = 'Per favor selecciona un dest&iacute;';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Publicat per';

$txt[287] = 'Sonrisa';
$txt[288] = 'Enfadat';
$txt[289] = 'Somrient';
$txt[290] = 'Riure';
$txt[291] = 'Trist';
$txt[292] = 'Ginyar';
$txt[293] = 'Somriure';
$txt[294] = 'Impressionat';
$txt[295] = 'Fantàstic';
$txt[296] = 'Huh';
$txt[450] = 'Girar ulls';
$txt[451] = 'Llengua';
$txt[526] = 'Avergonyit';
$txt[527] = 'No parla';
$txt[528] = 'Indec&iacute;s';
$txt[529] = 'Pet&oacute;';
$txt[530] = 'Plorar';

$txt[298] = 'Moderador';
$txt[299] = 'Moderadors';

$txt[300] = 'Marcar Temes com a llegits per aquest f&ograve;rum';
$txt[301] = 'Vistes';
$txt[302] = 'Nou';

$txt[303] = 'Veure tots els usuaris';
$txt[305] = 'Veure';
$txt[307] = 'Correu';

$txt[308] = 'Veient usuaris';
$txt[309] = 'de';
$txt[310] = 'usuaris totals';
$txt[311] = 'a';
$txt[315] = 'Has olvidat la teva contrasenya?';

$txt[317] = 'Data';
// Use numeric entities in the below string.
$txt[318] = 'De';
$txt[319] = 'Assumpte';
$txt[322] = 'Rebre Nous Missatges';
$txt[324] = 'Per a';

$txt[330] = 'Temes';
$txt[331] = 'Usuaris';
$txt[332] = 'Llista d\'usuaris';
$txt[333] = 'Nous Missatges';
$txt[334] = 'No hi ha nous Missatges';

$txt['sendtopic_send'] = 'Enviar';

$txt[371] = 'Difer&egrave;ncia Hor&agrave;ria';
$txt[377] = 'o';

$txt[398] = 'Ho sentim, no s\'ha trobat coincid&egrave;ncies';

$txt[418] = 'Notificaci&oacute;';

$txt[430] = 'Ho sentim %s, tens l\'acce&egrave;s denegat a aquest f&ograve;rum!';

$txt[452] = 'Marcar TOTS els missatges com a llegits';

$txt[454] = 'Tema calent (M&eacute;s de ' . $modSettings['hotTopicPosts'] . ' respostes)';
$txt[455] = 'Tema molt calent (M&eacute;s de ' . $modSettings['hotTopicVeryPosts'] . ' respostes)';
$txt[456] = 'Tema bloquejat';
$txt[457] = 'Tema normal';
$txt['participation_caption'] = 'Temes en els que has participat';

$txt[462] = 'ANAR';

$txt[465] = 'Imprimir';
$txt[467] = 'Perfil';
$txt[468] = 'Sumari de Temes';
$txt[470] = 'N/D';
$txt[471] = 'missatge';
$txt[473] = 'Aquest nom est&agrave; en &uacute;s per un altre usuari.';

$txt[488] = 'Total d\'Usuaris';
$txt[489] = 'Total de Missatges';
$txt[490] = 'Total de Temes';

$txt[497] = 'Duraci&oacute; de la sessi&oacute; en minuts';

$txt[507] = 'Previsualitzar';
$txt[508] = 'Recordar sempre Usuari/Contrasenya';

$txt[511] = 'En l&iacute;nia';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'per';

$txt[578] = 'hores';
$txt[579] = 'dies';

$txt[581] = ', el nostre usuari m&eacute;s recent.';

$txt[582] = 'Cercar per';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Est&agrave;s.+aqu&iacute;?';
$txt[604] = 'YIM';

$txt[616] = 'Recorda, aquest f&ograve;rum est&agrave; en \'Mode de Manteniment\'.';

$txt[641] = 'Llegit';
$txt[642] = 'cops';

$txt[645] = 'Estad&iacute;stiques SMF';
$txt[656] = 'Darrer usuari';
$txt[658] = 'Total de Categories';
$txt[659] = 'Darrer missatge';

$txt[660] = 'Tens';
$txt[661] = 'Fes click';
$txt[662] = 'aqu&iacute;';
$txt[663] = 'par a veure\'ls.';

$txt[665] = 'Total de F&ograve;rums';

$txt[668] = 'Imprimir P&agrave;gina';

$txt[679] = 'Ha de ser una adre&ccedil;a v&agrave;lida de correu.';

$txt[683] = 'un munt';
$txt[685] = $context['forum_name'] . ' - Centre d\'Informaci&oacute;';

$txt[707] = 'Enviar tema';

$txt['sendtopic_title'] = 'Enviar tema &#171; %s &#187; a un amic.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Estimat %s,';
$txt['sendtopic_this_topic'] = 'Vull que revisis el seg&uuml;ent tema: %s, en ' . $context['forum_name'] . '. Per a veure-ho, fes click en el seg&uuml;ent enlla&ccedil;';
$txt['sendtopic_thanks'] = 'Gr&agrave;cies';
$txt['sendtopic_sender_name'] = 'El teu nom';
$txt['sendtopic_sender_email'] = 'La teva adre&ccedil;a de correu';
$txt['sendtopic_receiver_name'] = 'Nom del destinatari';
$txt['sendtopic_receiver_email'] = 'Adre&ccedil;a de correu del destinatari';
$txt['sendtopic_comment'] = 'Afegir un comentari';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Un comentari referent aquest tema ha estat afegit';

$txt[721] = 'Amagar correu al p&uacute;blic';

$txt[737] = 'Seleccionar tot';

// Use numeric entities in the below string.
$txt[1001] = 'Error en la Base de Dades';
$txt[1002] = 'Per favor intenta novament. Si aquesta pantalla apareix un altre cop, notifica de l\'error a un administrador.';
$txt[1003] = 'Arxiu';
$txt[1004] = 'l&iacute;nia';
// Use numeric entities in the below string.
$txt[1005] = 'SMF ha detectat errors en la base de dades i els ha tratat de corregir autom&agrave;ticament.  Si els problemes persisteixen, o segueixes rebent aquests correus, contacta amb el teu prove&iuml;dor de webhosting.';
$txt['database_error_versions'] = '<b>Nota:</b> Sembla que la base de dades pot necessitar una actualitzaci&oacute;. La versi&oacute; dels arxius del f&ograve;rum &eacute;s ' . $forum_version . ', mentres que la de la base de dades est&agrave; en la versi&oacute; de SMF ' . $modSettings['smfVersion'] . '. Et recomanem que executis la darrera versi&oacute; d\'upgrade.php.';
$txt['template_parse_error'] = 'Error al parsejar el Template!';
$txt['template_parse_error_message'] = 'Sembla que alguna cosa s\'ha espatllat en el f&ograve;rum amb el sistema de temes. Aquest problema pot ser que nom&eacute;s sigui temporal, per favor, retorna en uns moments i intenta-ho un altre cop. Si continues veient aquest missatge, per favor contacta a l\'administrador.<br /><br />Pots intentar <a href="javascript:location.reload();">actualitzar aquesta p&agrave;gina</a>.';
$txt['template_parse_error_details'] = 'Ha hagut un problema carregat el tema o arxiu d\'idioma <tt><b>%1$s</b></tt>. Per favor revisa la sintaxis i intenta-ho unaltre cop - recorda, els ap&ograve;strofes (<tt>\'</tt>) generalment han de tenir una seq&uuml;&egrave;ncia d\'escapament amb la diagonal invertida (<tt>\\</tt>). Per a veure informaci&oacute; espec&iacute;fica de l\'error del lloc de PHP intenta <a href="' . $boardurl . '%1$s">accedir a l\'arxiu directament</a>.<br /><br />Pots intentar <a href="javascript:location.reload();">actualitzar aquesta p&agrave;gina</a> o <a href="' . $scripturl . '?theme=1">utilitzar el tema predefinit</a>.';

$txt['smf10'] = '<b>Avui</b> a les ';
$txt['smf10b'] = '<b>Ahir</b> a les ';
$txt['smf20'] = 'Publicar Nova Enquesta';
$txt['smf21'] = 'Pregunta';
$txt['smf23'] = 'Enviar vot';
$txt['smf24'] = 'Total de vots';
$txt['smf25'] = 'acc&eacute;s r&agrave;pid: pressiona alt+s per a publicar o alt+p per a previsualitzar';
$txt['smf29'] = 'Veure resultads.';
$txt['smf30'] = 'Bloquejar Enquesta';
$txt['smf30b'] = 'Desbloquejar Enquesta';
$txt['smf39'] = 'Editar Enquesta';
$txt['smf43'] = 'Enquesta';
$txt['smf47'] = '1 Dia';
$txt['smf48'] = '1 Setmana';
$txt['smf49'] = '1 Mes';
$txt['smf50'] = 'Sempre';
$txt['smf52'] = 'Ingressar amb nom d\'usuari, contrasenya i duraci&oacute; de la sessi&oacute;';
$txt['smf53'] = '1 Hora';
$txt['smf56'] = 'MOGUT';
$txt['smf57'] = 'Per favor introdueix una breu descripci&oacute; de<br />per qu&egrave; aquest tema s\'est&agrave; movent.';
$txt['smf60'] = 'Ho sentim, no tens missatges suficients per a modificar el karma - necessites almenys ';
$txt['smf62'] = 'Ho sentim, no pots repetir una acci&oacute; de karma sense esperar ';
$txt['smf82'] = 'F&ograve;rum';
$txt['smf88'] = 'en';
$txt['smf96'] = 'Tema Fixat';

$txt['smf138'] = 'Esborrar';

$txt['smf199'] = 'Els teus Missatges personals';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[M&eacute;s Estad&iacute;stiques]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Codi';
$txt['smf239'] = 'Cita de';
$txt['smf240'] = 'Citar';

$txt['smf251'] = 'Dividir Tema';
$txt['smf252'] = 'Combinar Temes';
$txt['smf254'] = 'Assumpte per al nou tema';
$txt['smf255'] = 'Nom&eacute;s dividir aquest missatge.';
$txt['smf256'] = 'Dividir tema a partir d\'aquest missatge (incloent-lo).';
$txt['smf257'] = 'Selecciona els missatges a dividir.';
$txt['smf258'] = 'Nou Missatge';
$txt['smf259'] = 'El tema s\'ha dividit satisfact&ograve;riament en dos temas.';
$txt['smf260'] = 'Tema d\'Origen';
$txt['smf261'] = 'Per favor selecciona quin missatge desitges dividir.';
$txt['smf264'] = 'Els temes han estat convinats satisfact&ograve;riament.';
$txt['smf265'] = 'Nou Tema Convinat';
$txt['smf266'] = 'Tema a ser convinat';
$txt['smf267'] = 'F&ograve;rum dest&iacute;';
$txt['smf269'] = 'Tema dest&iacute;';
$txt['smf274'] = 'Est&agrave;s segur de voler convinar?';
$txt['smf275'] = 'amb';
$txt['smf276'] = 'Aquesta funci&oacute; convinar&agrave; els missatges de dos temes en un. Els missatges seran ordenats d\'acord amb la data en que es van publicar. Per lo tant, el missatge publicat m&eacute;s recentment ser&agrave; el primer missatge del tema convinat.';

$txt['smf277'] = 'Fixar tema';
$txt['smf278'] = 'Desfixar tema';
$txt['smf279'] = 'Bloquejar tema';
$txt['smf280'] = 'Desbloquejar tema';

$txt['smf298'] = 'Cerca Avan&ccedil;ada';

$txt['smf299'] = 'RISC IMPORTANT DE SEGURETAT:';
$txt['smf300'] = 'No has esborrat ';

$txt['smf301'] = 'P&agrave;gina creada en ';
$txt['smf302'] = ' segons amb ';
$txt['smf302b'] = ' consultes.';

$txt['smf315'] = 'Utilitza aquesta funci&oacute; per a informar als moderadors i administradors d\'un missaatge abusiu o incorrecte.<br /><i>Si utilitzes aix&ograve;, tingues en compte que la teva adre&ccedil;a de correu ser&agrave; revelada als moderadors.</i>';

$txt['online2'] = 'Connectat';
$txt['online3'] = 'Desconnectat';
$txt['online4'] = 'Missatge Personal (Connectat)';
$txt['online5'] = 'Missatge Personal (Desconnectat)';
$txt['online8'] = 'Estat';

$txt['topbottom4'] = 'Anar Dalt';
$txt['topbottom5'] = 'Anar Baix';

if ($_SERVER['QUERY_STRING']=='')
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> :: <a href="http://www.siteground.com">Hosting Services for SMF by SiteGround</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}
else
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}


$txt['calendar3'] = 'Aniversari:';
$txt['calendar4'] = 'Events:';
$txt['calendar3b'] = 'Propers Aniversaris:';
$txt['calendar4b'] = 'Propers Events:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Mes:';
$txt['calendar10'] = 'Any:';
$txt['calendar11'] = 'Dia:';
$txt['calendar12'] = 'T&iacute;tol de l\'Event:';
$txt['calendar13'] = 'Publicar en:';
$txt['calendar20'] = 'Editar event';
$txt['calendar21'] = 'Esborrar aquest event?';
$txt['calendar22'] = 'Esborrar event';
$txt['calendar23'] = 'Publicar event';
$txt['calendar24'] = 'Calendari';
$txt['calendar37'] = 'Enlla&ccedil; al calendari';
$txt['calendar43'] = 'Enlla&ccedil;ar event';
$txt['calendar47'] = 'Calendari de propers events';
$txt['calendar47b'] = 'Calendari d\'Avui';
$txt['calendar51'] = 'Setmana';
$txt['calendar54'] = 'Nombre de Dies:';
$txt['calendar_how_edit'] = 'com edites aquests events?';
$txt['calendar_link_event'] = 'Enllaçar Event al Missatge:';
$txt['calendar_confirm_delete'] = 'Est&#225;s segur que desitges esborrar aquest event?';
$txt['calendar_linked_events'] = 'Events Lligats';

$txt['moveTopic1'] = 'Publicar un tema de redireccionament';
$txt['moveTopic2'] = 'Canviar el t&iacute;tol del tema';
$txt['moveTopic3'] = 'Nou assumpte';
$txt['moveTopic4'] = 'Canviar l\'assumpte de cada missatge';

$txt['theme_template_error'] = 'No s\'ha pogut carregar la plantilla \'%s\'.';
$txt['theme_language_error'] = 'No s\'ha pogut carregar l\'arxiu d\'idioma \'%s\'.';

$txt['parent_boards'] = 'Subf&ograve;rums';

$txt['smtp_no_connect'] = 'No ha estat possible connectar-se al servidor SMTP';
$txt['smtp_port_ssl'] = 'El port SMTP indicat &eacute;s incorrecte; hauria de ser el 465 per a servidors SSL.';
$txt['smtp_bad_response'] = 'No s\'han pogut obtenir els codis de resposta del servidor de correu';
$txt['smtp_error'] = 'Ha hagut problemes a l\'enviar el correu. Error: ';
$txt['mail_send_unable'] = 'No se li ha pogut enviar el correu a l\'adre&ccedil;a \'%s\'';

$txt['mlist_search'] = 'Cercar per usuaris';
$txt['mlist_search2'] = 'Buscar novament';
$txt['mlist_search_email'] = 'Cercar per adre&ccedil;a de correu';
$txt['mlist_search_messenger'] = 'Cercar per nick de messenger';
$txt['mlist_search_group'] = 'Cercar per posici&oacute;';
$txt['mlist_search_name'] = 'Cercar per nom';
$txt['mlist_search_website'] = 'Cercar per lloc Web';
$txt['mlist_search_results'] = 'Cercar resultats per';

$txt['attach_downloaded'] = 'descarregat';
$txt['attach_viewed'] = 'vist';
$txt['attach_times'] = 'cops';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Configuraci&oacute;';
$txt['never'] = 'Mai';
$txt['more'] = 'mes';

$txt['hostname'] = 'Nom del servidor';
$txt['you_are_post_banned'] = 'Ho sentim %s, tens restringit el poder publicar respostes o enviar missatges personals en el f&ograve;rum.';
$txt['ban_reason'] = 'Ra&oacute;';

$txt['tables_optimized'] = 'Taules de la base de dades optimitzades';

$txt['add_poll'] = 'Afedir enquesta';
$txt['poll_options6'] = 'Pots seleccionar fins %s opcions.';
$txt['poll_remove'] = 'Eliminar enquesta';
$txt['poll_remove_warn'] = 'Est&aagrave;s seguro de voler eliminar aquesta enquesta del tema?';
$txt['poll_results_expire'] = 'Els resultats es mostraran un cop que l\'enquesta s\'hagi tancat';
$txt['poll_expires_on'] = 'La votaci&oacute; es tanca';
$txt['poll_expired_on'] = 'Votaci&oacute; tancada';
$txt['poll_change_vote'] = 'Eliminar Vot';
$txt['poll_return_vote'] = 'Opcions de votaci&oacute;';

$txt['quick_mod_remove'] = 'Eliminar seleccionat(s)';
$txt['quick_mod_lock'] = 'Bloquejar seleccionat(s)';
$txt['quick_mod_sticky'] = 'Fixar seleccionat(s)';
$txt['quick_mod_move'] = 'Moure seleccionat(s) a';
$txt['quick_mod_merge'] = 'Convinar seleccionat(s)';
$txt['quick_mod_markread'] = 'Marcar seleccionats com a llegits';
$txt['quick_mod_go'] = 'Anar!';
$txt['quickmod_confirm'] = 'Est&agrave;s segur de voler fer aix&ograve;?';

$txt['spell_check'] = 'Revisar Ortografia';

$txt['quick_reply_1'] = 'Resposta r&agrave;pida';
$txt['quick_reply_2'] = 'En la <i>Resposta r&agrave;pida</i> pots utilitzar BBC i emoticones com ho faries en un missatge normal, per&ograve; d\'una manera m&eacute;s convenient.';
$txt['quick_reply_warning'] = 'Advert&egrave;ncia: el tema est&agrave; bloquejado!<br />Nom&eacute;s administradors i moderadors poden respondre.';

$txt['notification_enable_board'] = 'Est&agrave;s segur de voler activar la notificaci&oacute; de nous temes per aquest f&ograve;rum?';
$txt['notification_disable_board'] = 'Est&agrave;s segur de voler desactivar la notificaci&oacute; de nous temes per aquest f&ograve;rum?';
$txt['notification_enable_topic'] = 'Est&agrave;s segur de voler activar la notificaci&oacute; de noves respostes per aquest tema?';
$txt['notification_disable_topic'] = 'Est&agrave;s segur de voler desactivar la notificaci&oacute; de noves respostes per aquest tema?';

$txt['rtm1'] = 'Advertir al moderador';

$txt['unread_topics_visit'] = 'Nous temes no llegits';
$txt['unread_topics_visit_none'] = 'No s\'han trobat temes no llegits des de la teva darrera visita.  <a href="' . $scripturl . '?action=unread;all">Fes <i>click</i> aqu&iacute; per a intentar amb tots els temes no llegits</a>.';
$txt['unread_topics_all'] = 'Tots els temes no llegits';
$txt['unread_replies'] = 'Temes actualitzats';

$txt['who_title'] = 'Qui est&agrave; en l&iacute;nia';
$txt['who_and'] = ' i ';
$txt['who_viewing_topic'] = ' estan veient aquest tema.';
$txt['who_viewing_board'] = ' estan veient aquest f&ograve;rum.';
$txt['who_member'] = 'Usuari';

$txt['powered_by_php'] = 'Impulsat per PHP';
$txt['powered_by_mysql'] = 'Impulsat per MySQL';
$txt['valid_html'] = 'HTML 4.01 v&agrave;lid';
$txt['valid_xhtml'] = 'XHTML 1.0 v&agrave;lid!';
$txt['valid_css'] = 'CSS v&agrave;lid!';

$txt['guest'] = 'Visitant';
$txt['guests'] = 'Visitants';
$txt['user'] = 'Usuari';
$txt['users'] = 'Usuaris';
$txt['hidden'] = 'Ocult(s)';
$txt['buddy'] = 'Amic';
$txt['buddies'] = 'Amics';
$txt['most_online_ever'] = 'M&agrave;xim Online Sempre';
$txt['most_online_today'] = 'M&agrave;xim Online Avui';

$txt['merge_select_target_board'] = 'Selecciona el f&ograve;rum dest&iacute; del tema convinat';
$txt['merge_select_poll'] = 'Selecciona quina enquesta tindr&agrave; el tema convinat';
$txt['merge_topic_list'] = 'Selecciona els temes a convinar';
$txt['merge_select_subject'] = 'Selecciona el t&iacute;tol del tema convinat';
$txt['merge_custom_subject'] = 'T&iacute;tol personalitzat';
$txt['merge_enforce_subject'] = 'Canviar el t&iacute;tol de tots els missatges';
$txt['merge_include_notifications'] = 'Incloure notificacions?';
$txt['merge_check'] = 'Convinar?';
$txt['merge_no_poll'] = 'Sense enquesta';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Icona actual';

$txt['smileys_current'] = 'Conjunt actual d\'emoticones';
$txt['smileys_none'] = 'Sense emoticona';
$txt['smileys_forum_board_default'] = 'Les que el f&ograve;rum està utilitzant per defecte';

$txt['search_results'] = 'Resultats de la cerca';
$txt['search_no_results'] = 'No s\'han trobat resultats';

$txt['totalTimeLogged1'] = 'Temps total en l&iacute;nia: ';
$txt['totalTimeLogged2'] = ' dies, ';
$txt['totalTimeLogged3'] = ' hores i ';
$txt['totalTimeLogged4'] = ' minuts.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'h';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Hi ha';
$txt['approve_thereare'] = 'Hi ha';
$txt['approve_member'] = 'un usuari';
$txt['approve_members'] = 'usuaris';
$txt['approve_members_waiting'] = 'esperant aprobaci&oacute;.';

$txt['notifyboard_turnon'] = 'Desitges una notificaci&oacute; per correu quan alg&uacute; publiqui un nou tema en aquest f&ograve;rum?';
$txt['notifyboard_turnoff'] = 'Est&agrave;s segur de NO voler rebre notificacions de temes nous en aquest f&ograve;rum?';

$txt['activate_code'] = 'El teu codi d\'activaci&oacute; &eacute;s';

$txt['find_members'] = 'Buscar usuaris';
$txt['find_username'] = 'Nom, nom d\'usuari o adre&ccedil;a de correu';
$txt['find_buddies'] = 'Mostrar sols amics?';
$txt['find_wildcards'] = 'Comodins permesos: *, ?';
$txt['find_no_results'] = 'No s\'han trobat resultats';
$txt['find_results'] = 'Resultats';
$txt['find_close'] = 'Tancar';

$txt['unread_since_visit'] = 'Mostrar missatges no llegits des de la darrera visita.';
$txt['show_unread_replies'] = 'Mostrar noves respostes als teus missatges.';

$txt['change_color'] = 'Canviar Color';

$txt['quickmod_delete_selected'] = 'Esborrar seleccionats';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Has rebut un o més misatges personals.\\Desitges veure\'ls ara (en una nova finestra)?';

$txt['previous_next_back'] = '&laquo; anterior';
$txt['previous_next_forward'] = 'seg&uuml;ent &raquo;';

$txt['movetopic_auto_board'] = '[FORUM]';
$txt['movetopic_auto_topic'] = '[URL DEL TEMA]';
$txt['movetopic_default'] = 'El tema ha estat mogut a ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Escollir o expandir encapcelament.';

$txt['mark_unread'] = 'Marcar com no llegits';

$txt['ssi_not_direct'] = 'Per favor no accedeixis a SSI.php utilitzant directament la URL; millor utilitza la ubicaci&oacute; (%s) o afegeix ?ssi_function=algun_valor.';
$txt['ssi_session_broken'] = 'SSI.php no va poder carregar una sesi&oacute;!  Això pot causar problemes amb algunes funcions, tals com ingressar o sortir - Per favor assegurat que SSI.php està inclòs sempre al principi *abans de cualquier altre codi* en tots els teus scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Previsualitzar missatge';
$txt['preview_fetch'] = 'Obtingut de la previsualizaci&oacute;...';
$txt['preview_new'] = 'Nou missatge';
$txt['error_while_submitting'] = 'Va haver un error mentre se enviava aquest missatge.';

$txt['split_selected_posts'] = 'Missatges  seleccionats';
$txt['split_selected_posts_desc'] = 'Els missatges mostrats a continuaci&oacute; formar&agrave;n un nou tema una vegada dividits.';
$txt['split_reset_selection'] = 'reinicialitzar selecci&oacute;';

$txt['modify_cancel'] = 'Cancel·lar';
$txt['mark_read_short'] = 'Marcar Com a Lleguit';

$txt['pm_short'] = 'Els Meus Missatges';
$txt['hello_member_ndt'] = 'Hola';

$txt['ajax_in_progress'] = 'Carregant...';

?>