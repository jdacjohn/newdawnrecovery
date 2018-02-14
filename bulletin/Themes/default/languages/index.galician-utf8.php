<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'gl_ES.utf8';
$txt['lang_dictionary'] = 'gl';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Domingo', 'Luns', 'Martes', 'Mércores', 'Xoves', 'Venres', 'Sabado');
$txt['days_short'] = array('Dom', 'Lun', 'Mar', 'Miañe', 'Jue', 'Ve', 'Sab');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Xaneiro', 'Febreiro', 'Marzo', 'Abril', 'Maio', 'Xuño', 'Xullo', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Decembro');
$txt['months_titles'] = array(1 => 'Xaneiro', 'Febreiro', 'Marzo', 'Abril', 'Maio', 'Xuño', 'Xullo', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Decembro');
$txt['months_short'] = array(1 => 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');

$txt['newmessages0'] = 'é novo';
$txt['newmessages1'] = 'son novos';
$txt['newmessages3'] = 'Novo(s)';
$txt['newmessages4'] = ',';

$txt[2] = 'Administracion';

$txt[10] = 'Gardar';

$txt[17] = 'Modificar';
$txt[18] = $context['forum_name'] . ' - indice';
$txt[19] = 'Usuarios';
$txt[20] = 'Nome do foro';
$txt[21] = 'Mensaxes';
$txt[22] = 'ultimo mensaxe';

$txt[24] = '(Sen asunto)';
$txt[26] = 'Mensaxes';
$txt[27] = 'Ver Perfil';
$txt[28] = 'Visitante';
$txt[29] = 'Autor';
$txt[30] = 'en';
$txt[31] = 'Eliminar';
$txt[33] = 'Crear novo tema';

$txt[34] = 'Ingresar';
// Use numeric entities in the below string.
$txt[35] = 'Usuario';
$txt[36] = 'Contrasinal';

$txt[40] = 'Nome de usuario non existente.';

$txt[62] = 'Moderador do Foro';
$txt[63] = 'Eliminar Tema';
$txt[64] = 'Temas';
$txt[66] = 'Modificar mensaxe';
$txt[68] = 'Nome';
$txt[69] = 'Email';
$txt[70] = 'Asunto';
$txt[72] = 'Mensaxe';

$txt[79] = 'Perfil';

$txt[81] = 'Escolle contrasinal';
$txt[82] = 'Verifica contrasinal';
$txt[87] = 'Grupo';

$txt[92] = 'Ver perfil de';
$txt[94] = 'Total';
$txt[95] = 'Mensaxes';
$txt[96] = 'Web';
$txt[97] = 'Se rexistrar';

$txt[101] = 'indice de Mensaxes';
$txt[102] = 'Noticias';
$txt[103] = 'Inicio';

$txt[104] = 'Bloquear/Desbloquear Tema';
$txt[105] = 'Publicar';
$txt[106] = '&iexcl;Un erro ha!';
$txt[107] = 'ás';
$txt[108] = 'Saír';
$txt[109] = 'Iniciado por';
$txt[110] = 'Respostas';
$txt[111] = 'ultimo mensaxe';
$txt[114] = 'Ingresar a Administracion';
// Use numeric entities in the below string.
$txt[118] = 'Tema';
$txt[119] = 'Axuda';
$txt[121] = 'Eliminar mensaxe';
$txt[125] = 'Notificar';
$txt[126] = '&#191;Desexas unha notificacion por email se alguén responde a este tema?';
// Use numeric entities in the below string.
$txt[130] = "Saudos,\n o equipo " . $context['forum_name'] . '.';
$txt[131] = 'Notificar respostas';
$txt[132] = 'Mover tema';
$txt[133] = 'Mover a';
$txt[139] = 'Paxinas';
$txt[140] = 'Usuarios activos nos ultimos ' . $modSettings['lastActive'] . ' minutos';
$txt[144] = 'Mensaxes Persoais';
$txt[145] = 'Responder con cita';
$txt[146] = 'Resposta';

$txt[151] = 'Non tes mensaxes...';
$txt[152] = 'tes';
$txt[153] = 'mensaxes';
$txt[154] = 'Borrar este mensaxe';

$txt[158] = 'Usuarios en Linea';
$txt[159] = 'Mensaxe Persoal';
$txt[160] = 'Ir a';
$txt[161] = 'ir';
$txt[162] = '&#191;Estas seguro de borrar este tema?';
$txt[163] = 'Se';
$txt[164] = 'Non';

$txt[166] = 'Resultados da busqueda';
$txt[167] = 'Fin de resultados';
$txt[170] = 'Síntoo, non se atoparon mensaxes';
$txt[176] = 'en';

$txt[182] = 'Buscar';
$txt[190] = 'Todos';

$txt[193] = 'Atras';
$txt[194] = 'Contrasinal recordatorio';
$txt[195] = 'Mensaxe iniciado por';
$txt[196] = 'Titulo';
$txt[197] = 'Publicado por';
$txt[200] = 'Lista (con opcion de busqueda) de tódolos usuarios rexistrados.';
$txt[201] = 'Por favor, dá a benvida a';
$txt[208] = 'Centro de Administracion SMF';
$txt[211] = 'ultima modificacion';
$txt[212] = '&iquest;Desexas desactiva-la notificacion neste tema?';

$txt[214] = 'Mensaxes recentes';

$txt[227] = 'Ubicacion';
$txt[231] = 'Sexo';
$txt[233] = 'Data de rexistro';

$txt[234] = 'Ve-los mensaxes mais recentes do foro.';
$txt[235] = 'é o tema actualizado mais recentemente';

$txt[238] = 'Masculino';
$txt[239] = 'Feminino';

$txt[240] = 'Caracter invalido no nome de usuario.';

$txt['welcome_guest'] = 'Benvido(a), <b>' . $txt[28] . '</b>. Favor de <a href="' . $scripturl . '?action=login">ingresar</a> ou <a href="' . $scripturl . '?action=register">se rexistrar</a>.';
$txt['welcome_guest_activate'] = '<br />&iquest;Perdíche-ltu  <a href="' . $scripturl . '?action=activate">email de activacion?</a>';
$txt['hello_member'] = 'Ola,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Benvido(a),';
$txt[247] = 'Ola,';
$txt[248] = 'Benvido(a),';
$txt[249] = 'Por favor';
$txt[250] = 'Atras';
$txt[251] = 'Por favor selecciona un destino';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Publicado por';

$txt[287] = 'Sorriso';
$txt[288] = 'Enojado';
$txt[289] = 'Cheesy';
$txt[290] = 'Risa';
$txt[291] = 'Triste';
$txt[292] = 'Chiscar';
$txt[293] = 'Sorrir';
$txt[294] = 'Impresionado';
$txt[295] = 'Cool';
$txt[296] = 'Huh';
$txt[450] = 'Xirar ollos';
$txt[451] = 'Lingua';
$txt[526] = 'Avergonzado';
$txt[527] = 'Beizos selados';
$txt[528] = 'Indeciso';
$txt[529] = 'Bico';
$txt[530] = 'Chorar';

$txt[298] = 'Moderador';
$txt[299] = 'Moderadores';

$txt[300] = 'Marcar Temas como lidos para este foro';
$txt[301] = 'Vistas';
$txt[302] = 'Novo';

$txt[303] = 'Ver tódolos usuarios';
$txt[305] = 'Ver';
$txt[307] = 'Email';

$txt[308] = 'Vendo usuarios';
$txt[309] = 'de';
$txt[310] = 'usuarios totais';
$txt[311] = 'a';
$txt[315] = '&iquest;Esquecíche-la túa contrasinal?';

$txt[317] = 'Data';
// Use numeric entities in the below string.
$txt[318] = 'De';
$txt[319] = 'Asunto';
$txt[322] = 'Recibir Novos Mensaxes';
$txt[324] = 'Para';

$txt[330] = 'Temas';
$txt[331] = 'Usuarios';
$txt[332] = 'Lista de usuarios';
$txt[333] = 'Novos Mensaxes';
$txt[334] = 'Non hai novos Mensaxes';

$txt['sendtopic_send'] = 'Enviar';

$txt[371] = 'Diferenza Horaria';
$txt[377] = 'ou';

$txt[398] = 'Síntoo, non se atoparon mensaxes';

$txt[418] = 'Notificacion';

$txt[430] = 'Síntoo %s, te-lo acceso rexeitado a este foro!';

$txt[452] = 'Marcar TÓDOLOS mensaxes como lidos';

$txt[454] = 'Tema candente (Mais de ' . $modSettings['hotTopicPosts'] . ' respostas)';
$txt[455] = 'Tema moi candente (Mais de ' . $modSettings['hotTopicVeryPosts'] . ' respostas)';
$txt[456] = 'Tema bloqueado';
$txt[457] = 'Tema normal';
$txt['participation_caption'] = 'Temas nos que publicaches';

$txt[462] = 'IR';

$txt[465] = 'Imprimar';
$txt[467] = 'Perfil';
$txt[468] = 'Sumario de Temas';
$txt[470] = 'N/A';
$txt[471] = 'mensaxe';
$txt[473] = 'Este nome esta en uso por outro usuario.';

$txt[488] = 'Total de Usuarios';
$txt[489] = 'Total de Mensaxes';
$txt[490] = 'Total de Temas';

$txt[497] = 'Duracion da sesion en minutos';

$txt[507] = 'Previsualizar';
$txt[508] = 'Lembrar sempre Usuario/Contrasinal';

$txt[511] = 'En linea';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'por';

$txt[578] = 'horas';
$txt[579] = 'dias';

$txt[581] = ', o noso usuario mais recente.';

$txt[582] = 'Buscar por';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = '&iquest;Estas.+ahi?';
$txt[604] = 'YIM';

$txt[616] = 'Lembranza, este foro esta en \'Modo de Mantemento\'.';

$txt[641] = 'Lido';
$txt[642] = 'veces';

$txt[645] = 'Estadisticas SMF';
$txt[656] = 'ultimo usuario';
$txt[658] = 'Total de Categorias';
$txt[659] = 'ultimo mensaxe';

$txt[660] = 'Tes';
$txt[661] = 'Haz click';
$txt[662] = 'aqui';
$txt[663] = 'para los ve.';

$txt[665] = 'Total de Foros';

$txt[668] = 'Imprimar Pagina';

$txt[679] = 'Debe ser unha direccion valida de email.';

$txt[683] = 'un monton';
$txt[685] = $context['forum_name'] . ' - Centro de Informacion';

$txt[707] = 'Enviar tema';

$txt['sendtopic_title'] = 'Enviar tema &#171; %s &#187; a un amigo.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Estimado %s,';
$txt['sendtopic_this_topic'] = 'Quero que revíse-lo seguinte tema: %s, en ' . $context['forum_name'] . '. Para lo ve, fai click na seguinte liga';
$txt['sendtopic_thanks'] = 'Grazas';
$txt['sendtopic_sender_name'] = 'O teu nome';
$txt['sendtopic_sender_email'] = 'O teu direccion de email';
$txt['sendtopic_receiver_name'] = 'Nome do destinatario';
$txt['sendtopic_receiver_email'] = 'Direccion email do destinatario';
$txt['sendtopic_comment'] = 'Agregar un comentario';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Un comentario achega deste tema foi agregado';

$txt[721] = 'Agochar email do publico';

$txt[737] = 'Seleccionar todo';

// Use numeric entities in the below string.
$txt[1001] = 'Erro na Base de Datos';
$txt[1002] = 'Por favor tenta novamente.  Se esta pantalla aparece novamente, notifica do erro a un administrador.';
$txt[1003] = 'Arquivo';
$txt[1004] = 'Linea';
// Use numeric entities in the below string.
$txt[1005] = 'SMF detectou erros na base de datos, e tratounos de corrixir autom&#225;ticamente.  Se os problemas persisten, ou segues obtendo estes correos, favor de contactar ó teu provedor de webhosting.';
$txt['database_error_versions'] = '<b>Nota:</b> Asemella que a túa base de datos pode precisar unha actualizacion. A version dos arquivos do teu foro estan na version ' . $forum_version . ', mentres que a túa base de datos esta na version de SMF ' . $modSettings['smfVersion'] . '. Recomendámoste que execúte-la ultima versi&oacuten de upgrade.php.';
$txt['template_parse_error'] = '&iexcl;Erro ó parsear o Template!';
$txt['template_parse_error_message'] = 'Asemella que algo se estragou no foro co sistema de temas.  Este problema pode que solamente sexa temporal, por favor, regresa nuns momentos e intentalo novamente.  Se continúas vendo este mensaxe, por favor contacta ó administrador.<br /><br />Podes tentar <a href="javascript:location.reload();">actualizar esta pagina</a>.';
$txt['template_parse_error_details'] = 'Houbo un problema cargando o tema ou arquivo de idioma <tt><b>%1$s</b></tt>.  Por favor revisa a sintaxe e tenta novamente - lembranza, os apostrofes (<tt>\'</tt>) polo xeral deben ter unha secuencia de escape coa diagonal investida (<tt>\\</tt>).  Para ver informaci&#243;n especifica do erro do sitio de PHP tenta <a href="' . $boardurl . '%1$s">acceder ó arquivo directamente</a>.<br /><br />Podes tentar <a href="javascript:location.reload();">actualizar esta pagina</a> ou <a href="' . $scripturl . '?theme=1">usa-lo tema de default</a>.';

$txt['smf10'] = '<b>Hoxe ás</b> ';
$txt['smf10b'] = '<b>Onte</b> ás ';
$txt['smf20'] = 'Publicar Nova Sondaxe';
$txt['smf21'] = 'Pregunta';
$txt['smf23'] = 'Enviar voto';
$txt['smf24'] = 'Total de votos';
$txt['smf25'] = 'acceso rapido: presiona alt+s para publicar ou alt+p para previsualizar';
$txt['smf29'] = 'Ver resultados';
$txt['smf30'] = 'Bloquear Sondaxe';
$txt['smf30b'] = 'Desbloquear Sondaxe';
$txt['smf39'] = 'Editar Sondaxe';
$txt['smf43'] = 'Sondaxe';
$txt['smf47'] = '1 Día';
$txt['smf48'] = '1 Semana';
$txt['smf49'] = '1 Mes';
$txt['smf50'] = 'Sempre';
$txt['smf52'] = 'Ingresar con nome de usuario, contrasinal e duracion da sesion';
$txt['smf53'] = '1 Hora';
$txt['smf56'] = 'MOVIDO';
$txt['smf57'] = 'Por favor introduce unha breve descripcion de<br />por que este tema se esta movendo.';
$txt['smf60'] = 'Síntoo, non tes mensaxes suficientes para modifica-lo karma - precisas ó menos ';
$txt['smf62'] = 'Síntoo, non podes repetir unha accion de karma sen agardar ';
$txt['smf82'] = 'Foro';
$txt['smf88'] = 'en';
$txt['smf96'] = 'Tema Fixado';

$txt['smf138'] = 'Borrar';

$txt['smf199'] = 'As túas Mensaxes persoais';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Mais Estadisticas]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'C&#243;digo';
$txt['smf239'] = 'Cita de';
$txt['smf240'] = 'Citar';

$txt['smf251'] = 'Dividir Tema';
$txt['smf252'] = 'Combinar Temas';
$txt['smf254'] = 'Asunto para o novo tema';
$txt['smf255'] = 'Só dividir este mensaxe.';
$txt['smf256'] = 'Dividir tema a partir deste mensaxe (incluyendolo).';
$txt['smf257'] = 'Selecciona os mensaxes a dividir.';
$txt['smf258'] = 'Novo Mensaxe';
$txt['smf259'] = 'O tema dividíuse satisfactoriamente en dúas temas.';
$txt['smf260'] = 'Tema de Orixe';
$txt['smf261'] = 'Por favor selecciona que mensaxes desexas dividir.';
$txt['smf264'] = 'Témalos foron satisfactoriamente combinados.';
$txt['smf265'] = 'Novo Tema Combinado';
$txt['smf266'] = 'Tema a ser combinado';
$txt['smf267'] = 'Foro destino';
$txt['smf269'] = 'Tema destino';
$txt['smf274'] = '&iquest;Estas seguro que desexas combinar?';
$txt['smf275'] = 'con';
$txt['smf276'] = 'Esta funcion combinase os mensaxes de dúas temas nun tema. Os mensaxes seran ordenados de acordo coa data en que se publicaron. Polo tanto, o mensaxe publicado mais recentemente sera o primeiro mensaxe do tema combinado.';

$txt['smf277'] = 'Fixar tema';
$txt['smf278'] = 'Desfijar tema';
$txt['smf279'] = 'Bloquear tema';
$txt['smf280'] = 'Desbloquear tema';

$txt['smf298'] = 'Busqueda Avanzada';

$txt['smf299'] = 'RISCO MAIOR DE SEGURIDADE:';
$txt['smf300'] = 'Non borraches ';

$txt['smf301'] = 'Pagina creada en ';
$txt['smf302'] = ' segundos con ';
$txt['smf302b'] = ' queres.';

$txt['smf315'] = 'Usa esta funcion para informar ós moderadores e administradores dun mensaxe abusivo, ou publicado incorrectamente.<br /><i>É importante mencionar que o teu direccion de email sera revelada ó moderador se usas esta funcion.</i>';

$txt['online2'] = 'Conectado';
$txt['online3'] = 'Desconectado';
$txt['online4'] = 'Mensaxe Persoal (Conectado)';
$txt['online5'] = 'Mensaxe Persoal (Desconectado)';
$txt['online8'] = 'Status';

$txt['topbottom4'] = 'Ir Arriba';
$txt['topbottom5'] = 'Ir Abajo';

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


$txt['calendar3'] = 'Aniversario:';
$txt['calendar4'] = 'Eventos:';
$txt['calendar3b'] = 'Aniversarios proximos:';
$txt['calendar4b'] = 'Eventos proximos:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Mes:';
$txt['calendar10'] = 'Ano:';
$txt['calendar11'] = 'Día:';
$txt['calendar12'] = 'Titulo do Evento:';
$txt['calendar13'] = 'Publicar en:';
$txt['calendar20'] = 'Editar evento';
$txt['calendar21'] = '&iquest;Borrar este evento?';
$txt['calendar22'] = 'Borrar evento';
$txt['calendar23'] = 'Publicar evento';
$txt['calendar24'] = 'Calendario';
$txt['calendar37'] = 'Ligar ó calendario';
$txt['calendar43'] = 'Enlazar evento';
$txt['calendar47'] = 'Calendario de eventos proximos';
$txt['calendar47b'] = 'Calendario de Hoxe';
$txt['calendar51'] = 'Semana';
$txt['calendar54'] = 'Numero de Dias:';
$txt['calendar_how_edit'] = '&iquest;como editas eses eventos?';
$txt['calendar_link_event'] = 'Enlazar Evento ó Mensaxe:';
$txt['calendar_confirm_delete'] = '&#191;Est&#225;s seguro que desexas borrar este evento?';
$txt['calendar_linked_events'] = 'Eventos Ligados';

$txt['moveTopic1'] = 'Publicar un tema de redireccionamiento';
$txt['moveTopic2'] = 'Cambia-lo titulo do tema';
$txt['moveTopic3'] = 'Novo asunto';
$txt['moveTopic4'] = 'Cambia-lo asunto de cada mensaxe';

$txt['theme_template_error'] = 'Non se puido carga-la plantilla \'%s\'.';
$txt['theme_language_error'] = 'Non se puido carga-lo arquivo de idioma \'%s\'.';

$txt['parent_boards'] = 'Subforos';

$txt['smtp_no_connect'] = 'Non foi posible se conectar ó servidor SMTP';
$txt['smtp_port_ssl'] = 'SMTP port setting incorrect; it should be 465 for SSL servers.';
$txt['smtp_bad_response'] = 'Non se puideron obterer os codigos de resposta do servidor de mail';
$txt['smtp_error'] = 'Houbo problemas ó envia-lo mail. Erro: ';
$txt['mail_send_unable'] = 'Non s ele puido envia-lo email á direccion \'%s\'';

$txt['mlist_search'] = 'Buscar por usuarios';
$txt['mlist_search2'] = 'Buscar novamente';
$txt['mlist_search_email'] = 'Buscar por direccion de email';
$txt['mlist_search_messenger'] = 'Buscar por nick de messenger';
$txt['mlist_search_group'] = 'Buscar por grupo';
$txt['mlist_search_name'] = 'Buscar por nome';
$txt['mlist_search_website'] = 'Buscar por sitio Web';
$txt['mlist_search_results'] = 'Buscar resultados por';

$txt['attach_downloaded'] = 'descargado';
$txt['attach_viewed'] = 'visto';
$txt['attach_times'] = 'veces';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Configuracion';
$txt['never'] = 'Nunca';
$txt['more'] = 'mais';

$txt['hostname'] = 'Nome do servidor';
$txt['you_are_post_banned'] = 'Sentímolo %s, te-lo restrinxido o poder publicar mensaxes ou enviar mensaxes persoais no foro.';
$txt['ban_reason'] = 'Razon';

$txt['tables_optimized'] = 'Táboas da base de datos optimizadas';

$txt['add_poll'] = 'Agregar sondaxe';
$txt['poll_options6'] = 'Podes seleccionar ata %s opcións.';
$txt['poll_remove'] = 'Eliminar sondaxe';
$txt['poll_remove_warn'] = '&iquest;Estas seguro que desexas eliminar esta sondaxe do tema?';
$txt['poll_results_expire'] = 'Os resultados amosásense unha vez que a sondaxe péchese';
$txt['poll_expires_on'] = 'A votacion péchase';
$txt['poll_expired_on'] = 'Votacion pechada';
$txt['poll_change_vote'] = 'Eliminar Voto';
$txt['poll_return_vote'] = 'Opcións de votacion';

$txt['quick_mod_remove'] = 'Eliminar seleccionado(s)';
$txt['quick_mod_lock'] = 'Bloquear seleccionado(s)';
$txt['quick_mod_sticky'] = 'Fixar seleccionado(s)';
$txt['quick_mod_move'] = 'Mover seleccionado(s) a';
$txt['quick_mod_merge'] = 'Combinar seleccionado(s)';
$txt['quick_mod_markread'] = 'Marcar seleccionados como lidos';
$txt['quick_mod_go'] = '&iexcl;Ir!';
$txt['quickmod_confirm'] = '&#191;Est&#225;s seguro que desexas facer isto?';

$txt['spell_check'] = 'Revisar Ortografia';

$txt['quick_reply_1'] = 'Resposta rapida';
$txt['quick_reply_2'] = 'Na <i>Resposta rapida</i> podes usar BBC e smileys como o harias nun mensaxe normal, pero dunha maneira mais conveniente.';
$txt['quick_reply_warning'] = '&iexcl;Advertencia: o tema esta bloqueado!<br />Solamente admins e moderadores poden responder.';

$txt['notification_enable_board'] = '&iquest;Estas seguro que desexas activa-la notificacion de novos temas para este foro?';
$txt['notification_disable_board'] = '&iquest;Estas seguro que desexas desactiva-la notificacion de novos temas para este foro?';
$txt['notification_enable_topic'] = '&iquest;Estas seguro que desexas activa-la notificacion de novas respostas para este tema?';
$txt['notification_disable_topic'] = '&iquest;Estas seguro que desexas desactiva-la notificacion de novas respostas para este tema?';

$txt['rtm1'] = 'Reportar ó moderador';

$txt['unread_topics_visit'] = 'Novos temas non lidos';
$txt['unread_topics_visit_none'] = 'Non se han temas non lidos dende a túa ultima visita.  <a href="' . $scripturl . '?action=unread;all">Fai <i>click</i> aqui para tentar los tema non lidos</a>.';
$txt['unread_topics_all'] = 'los tema non lidos';
$txt['unread_replies'] = 'Temas actualizados';

$txt['who_title'] = 'Quen esta en linea';
$txt['who_and'] = ' e ';
$txt['who_viewing_topic'] = ' estan vendo este tema.';
$txt['who_viewing_board'] = ' estan vendo este foro.';
$txt['who_member'] = 'Usuario';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'HTML 4.01 valido';
$txt['valid_xhtml'] = 'XHTML 1.0 valido!';
$txt['valid_css'] = 'CSS valido!';

$txt['guest'] = 'Visitante';
$txt['guests'] = 'Visitantes';
$txt['user'] = 'Usuario';
$txt['users'] = 'Usuarios';
$txt['hidden'] = 'Oculto(s)';
$txt['buddy'] = 'Amigo';
$txt['buddies'] = 'Amigos';
$txt['most_online_ever'] = 'Most Online Ever';
$txt['most_online_today'] = 'Most Online Today';

$txt['merge_select_target_board'] = 'Selecciona o foro destino do tema combinado';
$txt['merge_select_poll'] = 'Selecciona cal sondaxe tendra o tema combinado';
$txt['merge_topic_list'] = 'Selecciona témalos a combinar';
$txt['merge_select_subject'] = 'Selecciona o titulo do tema combinado';
$txt['merge_custom_subject'] = 'Titulo personalizado';
$txt['merge_enforce_subject'] = 'Cambia-lo titulo de tódolos mensaxes';
$txt['merge_include_notifications'] = '&iquest;Incluír notificacións?';
$txt['merge_check'] = '&iquest;Combinar?';
$txt['merge_no_poll'] = 'Sen sondaxe';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Icona actual';

$txt['smileys_current'] = 'Conxunto actual de Smileys';
$txt['smileys_none'] = 'Sen Smileys';
$txt['smileys_forum_board_default'] = 'As que o foro este utilizando por defecto';

$txt['search_results'] = 'Resultados da busqueda';
$txt['search_no_results'] = 'Non se atoparon resultados';

$txt['totalTimeLogged1'] = 'Tempo total en linea: ';
$txt['totalTimeLogged2'] = ' dias, ';
$txt['totalTimeLogged3'] = ' horas e ';
$txt['totalTimeLogged4'] = ' minutos.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Hai';
$txt['approve_thereare'] = 'Hai';
$txt['approve_member'] = 'un usuario';
$txt['approve_members'] = 'usuarios';
$txt['approve_members_waiting'] = 'agardando aprobacion.';

$txt['notifyboard_turnon'] = '&iquest;Desexas unha notificacion por email cando alguén publique un novo tema neste foro?';
$txt['notifyboard_turnoff'] = '&iquest;Estas seguro que NON desexas recibir notificacións de temas novos neste foro?';

$txt['activate_code'] = 'O teu c&#243;digo de activaci&#243;n é';

$txt['find_members'] = 'Buscar usuarios';
$txt['find_username'] = 'Nome, nome de usuario, ou direccion de email';
$txt['find_buddies'] = '&iquest;Amosar amigos solamente?';
$txt['find_wildcards'] = 'Comodines permitidos: *, ?';
$txt['find_no_results'] = 'Non se atoparon resultados';
$txt['find_results'] = 'Resultados';
$txt['find_close'] = 'Pechar';

$txt['unread_since_visit'] = 'Amosar mensaxes non lidos dende a ultima visita.';
$txt['show_unread_replies'] = 'Amosar novas respostas ás túas mensaxes.';

$txt['change_color'] = 'Cambiar Color';

$txt['quickmod_delete_selected'] = 'Borrar seleccionados';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Recibiches un ou m&#225;s novos mensaxes persoais.\\n&#191;Desexas los ve agora (nunha nova xanela)?';

$txt['previous_next_back'] = '&laco; anterior';
$txt['previous_next_forward'] = 'proximo &raquo;';

$txt['movetopic_auto_board'] = '[FORO]';
$txt['movetopic_auto_topic'] = '[URL DO TEMA]';
$txt['movetopic_default'] = 'O tema foi movido a ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Encoger ou expandir encabezado.';

$txt['mark_unread'] = 'Marcar como non lidos';

$txt['ssi_not_direct'] = 'Por favor non acceses SSI.php usando directamente o URL; mellor usa a ubicacion (%s) ou agrega ?ssi_function=algun_valor.';
$txt['ssi_session_broken'] = '&iexcl;SSI.php non puido cargar unha sesion!  Isto pode causar problemas con algunhas funcións, tales como ingresar ou saír - &iexcl;Favor de se asegurar que SSI.php este incluído sempre ó principio *antes de calquera outro codigo* en tódolos teus scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Previsualizar mensaxe';
$txt['preview_fetch'] = 'Obtendo a previsualizacion...';
$txt['preview_new'] = 'Novo mensaxe';
$txt['error_while_submitting'] = 'Houbo un erro mentres se envíaba este mensaxe.';

$txt['split_selected_posts'] = 'Mensaxes seleccionados';
$txt['split_selected_posts_desc'] = 'Os mensaxes amosados a continuacion formasen un novo tema unha vez divididos.';
$txt['split_reset_selection'] = 'reinicializar seleccion';

$txt['modify_cancel'] = 'Cancelo';
$txt['mark_read_short'] = 'Marcar como lido';

$txt['pm_short'] = 'My Messages';
$txt['hello_member_ndt'] = 'Hello';

$txt['ajax_in_progress'] = 'Loading...';

?>