<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'pt_PT.utf8';
$txt['lang_dictionary'] = 'pt';
$txt['lang_spelling'] = 'portuguese';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Domingo', 'Segunda-Feira', 'Ter&ccedil;a-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'S&aacute;bado');
$txt['days_short'] = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Janeiro', 'Fevereiro', 'Mar&ccedil;o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
$txt['months_titles'] = array(1 => 'Janeiro', 'Fevereiro', 'Mar&ccedil;o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
$txt['months_short'] = array(1 => 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

$txt['newmessages0'] = '&eacute; nova';
$txt['newmessages1'] = 's&atilde;o novas';
$txt['newmessages3'] = 'novas';
$txt['newmessages4'] = ',';

$txt[2] = 'Admin';

$txt[10] = 'Gravar';

$txt[17] = 'Modificar';
$txt[18] = $context['forum_name'] . ' - &Iacute;ndice';
$txt[19] = 'Membros';
$txt[20] = 'Nome do Quadro';
$txt[21] = 'Mensagens';
$txt[22] = '&Uacute;ltima mensagem';

$txt[24] = '(sem assunto)';
$txt[26] = 'Mensagens';
$txt[27] = 'Ver Perfil';
$txt[28] = 'Visitante';
$txt[29] = 'Autor';
$txt[30] = 'em';
$txt[31] = 'Apagar';
$txt[33] = 'Iniciar novo t&oacute;pico';

$txt[34] = 'Entrar';
// Use numeric entities in the below string.
$txt[35] = 'Utilizador';
$txt[36] = 'Password';

$txt[40] = 'Esse utilizador n&atilde;o existe.';

$txt[62] = 'Moderador de servi&ccedil;o';
$txt[63] = 'Remover t&oacute;pico';
$txt[64] = 'T&oacute;picos';
$txt[66] = 'Modificar mensagem';
$txt[68] = 'Nome';
$txt[69] = 'E-mail';
$txt[70] = 'Assunto';
$txt[72] = 'Mensagem';

$txt[79] = 'Perfil';

$txt[81] = 'Escolha uma password';
$txt[82] = 'Verifique a password';
$txt[87] = 'Posi&ccedil;&atilde;o';

$txt[92] = 'Ver o perfil de';
$txt[94] = 'Total';
$txt[95] = 'Mensagens';
$txt[96] = 'Website';
$txt[97] = 'Registe-se';

$txt[101] = '&Iacute;ndice de mensagens';
$txt[102] = 'Not&iacute;cias';
$txt[103] = 'In&iacute;cio';

$txt[104] = 'Trancar/Destrancar T&oacute;pico';
$txt[105] = 'Enviar';
$txt[106] = 'Ocorreu um erro!';
$txt[107] = 'em';
$txt[108] = 'Sair';
$txt[109] = 'Iniciado por';
$txt[110] = 'Respostas';
$txt[111] = '&Uacute;ltima mensagem';
$txt[114] = 'Entrar na Administra&ccedil;&atilde;o';
// Use numeric entities in the below string.
$txt[118] = 'T&#243;pico';
$txt[119] = 'Ajuda';
$txt[121] = 'Apagar Mensagem';
$txt[125] = 'Notificar';
$txt[126] = 'Quer receber um e-mail de notifica&ccedil;&atilde;o cada vez que alguem responder a este t&oacute;pico?';
// Use numeric entities in the below string.
$txt[130] = "At&#233; breve,\nA administra&#231;&#227;o do " . $context['forum_name'] . '.';
$txt[131] = 'Notificar respostas';
$txt[132] = 'Mover t&oacute;pico';
$txt[133] = 'Mover para';
$txt[139] = 'P&aacute;ginas';
$txt[140] = 'Utilizadores activos nos &uacute;ltimos ' . $modSettings['lastActive'] . ' minutos';
$txt[144] = 'Mensagens pessoais';
$txt[145] = 'Responder com cita&ccedil;&atilde;o';
$txt[146] = 'Responder';

$txt[151] = 'N&atilde;o tem mensagens...';
$txt[152] = 'voc&ecirc; tem';
$txt[153] = 'mensagens';
$txt[154] = 'Apagar esta mensagem';

$txt[158] = 'Utilizadores Online';
$txt[159] = 'Mensagem pessoal';
$txt[160] = 'Ir para';
$txt[161] = 'OK';
$txt[162] = 'Tem a certeza que quer apagar este t&oacute;pico?';
$txt[163] = 'Sim';
$txt[164] = 'N&atilde;o';

$txt[166] = 'Resultados da pesquisa';
$txt[167] = 'Fim dos resultados';
$txt[170] = 'N&atilde;o foi encontrado nada com base nos par&acirc;metros de pesquisa que forneceu';
$txt[176] = 'em';

$txt[182] = 'Pesquisa';
$txt[190] = 'Todas';

$txt[193] = 'Voltar';
$txt[194] = 'Lembrar password';
$txt[195] = 'T&oacute;pico iniciado por';
$txt[196] = 'T&iacute;tulo';
$txt[197] = 'Enviado por';
$txt[200] = 'Lista pesquis&aacute;vel de todos os membros registados.';
$txt[201] = 'Por favor d&ecirc;em as boas vindas a';
$txt[208] = 'Centro de Administra&ccedil;&atilde;o';
$txt[211] = '&Uacute;ltima modifica&ccedil;&atilde;o';
$txt[212] = 'Deseja desactivar a notifica&ccedil;&atilde;o deste t&oacute;pico?';

$txt[214] = 'Mensagens recentes';

$txt[227] = 'Localidade';
$txt[231] = 'Sexo';
$txt[233] = 'Data de registo';

$txt[234] = 'Ver as mensagens mais recentes do F&oacute;rum.';
$txt[235] = 'foi o &uacute;ltimo t&oacute;pico a ser respondido';

$txt[238] = 'Masculino';
$txt[239] = 'Feminino';

$txt[240] = 'Caracter inv&aacute;lido usado no nome de utilizador.';

$txt['welcome_guest'] = 'Ol&aacute;, <b>' . $txt[28] . '</b>. Por favor <a href="' . $scripturl . '?action=login">Entre</a> ou <a href="' . $scripturl . '?action=register">Registe-se</a> se ainda n&atilde;o for membro.';
$txt['welcome_guest_activate'] = '<br />Perdeu o seu <a href="' . $scripturl . '?action=activate">e-mail de activa&ccedil;&atilde;o?</a>';
$txt['hello_member'] = 'Ol&aacute;,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Ol&#225;,';
$txt[247] = 'Ol&aacute;';
$txt[248] = 'Seja bem-vindo,';
$txt[249] = 'Por favor fa&ccedil;a o';
$txt[250] = 'Voltar atr&aacute;s';
$txt[251] = 'Por favor seleccione um destino';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Enviado por';

$txt[287] = 'Sorridente';
$txt[288] = 'Zangado';
$txt[289] = 'Contente';
$txt[290] = 'Riso';
$txt[291] = 'Triste';
$txt[292] = 'Wink';
$txt[293] = 'Grin';
$txt[294] = 'Chocado';
$txt[295] = 'Cool';
$txt[296] = 'Hein';
$txt[450] = 'Rolar os olhos';
$txt[451] = 'Lingua';
$txt[526] = 'Embara&ccedil;ado';
$txt[527] = 'Labios fechados';
$txt[528] = 'Indeciso';
$txt[529] = 'Beijo';
$txt[530] = 'Chorar';

$txt[298] = 'Moderador';
$txt[299] = 'Moderadores';

$txt[300] = 'Marcar t&oacute;picos como lidos para este quadro';
$txt[301] = 'Visualiza&ccedil;&otilde;es';
$txt[302] = 'Novo';

$txt[303] = 'Ver todos os utilizadores';
$txt[305] = 'Ver';
$txt[307] = 'E-mail';

$txt[308] = 'A ver membros';
$txt[309] = 'de um total de';
$txt[310] = 'membros';
$txt[311] = 'a';
$txt[315] = 'Esqueceu-se da password?';

$txt[317] = 'Data';
// Use numeric entities in the below string.
$txt[318] = 'De';
$txt[319] = 'Assunto';
$txt[322] = 'Verificar se tem novas mensagens';
$txt[324] = 'Para';

$txt[330] = 'T&oacute;picos';
$txt[331] = 'Membros';
$txt[332] = 'Lista de membros';
$txt[333] = 'H&aacute; novas mensagens';
$txt[334] = 'N&atilde;o h&aacute; novas mensagens';

$txt['sendtopic_send'] = 'Enviar';

$txt[371] = 'Diferen&ccedil;a Hor&aacute;ria';
$txt[377] = 'ou';

$txt[398] = 'N&atilde;o foram encontrados nehuns resultados para a sua pesquisa';

$txt[418] = 'Notifica&ccedil;&otilde;es';

$txt[430] = '%s, voc&ecirc; foi banido deste f&oacute;rum!';

$txt[452] = 'Marcar TODAS as mensagens como lidas';

$txt[454] = 'T&oacute;pico Quente (Mais de ' . $modSettings['hotTopicPosts'] . ' Respostas)';
$txt[455] = 'T&oacute;pico Muito Quente (Mais de ' . $modSettings['hotTopicVeryPosts'] . ' Respostas)';
$txt[456] = 'T&oacute;pico Trancado';
$txt[457] = 'T&oacute;pico Normal';
$txt['participation_caption'] = 'T&oacute;picos em que voc&ecirc; participou';

$txt[462] = 'IR';

$txt[465] = 'Imprimir';
$txt[467] = 'Perfil';
$txt[468] = 'Resumo do T&oacute;pico';
$txt[470] = 'N/D';
$txt[471] = 'mensagem';
$txt[473] = 'Este nome j&aacute; est&aacute; em uso por outro membro.';

$txt[488] = 'Total de Membros';
$txt[489] = 'Total de Mensagens';
$txt[490] = 'Total de T&oacute;picos';

$txt[497] = 'Minutos para permanecer ligado';

$txt[507] = 'Pr&eacute;-Visualizar';
$txt[508] = 'Permanecer sempre ligado';

$txt[511] = 'Registado';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'por';

$txt[578] = 'horas';
$txt[579] = 'dias';

$txt[581] = ', o nosso membro mais recente.';

$txt[582] = 'Procurar por';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Ol&aacute;.+Est&aacute;s+a&iacute;?';
$txt[604] = 'YIM';

$txt[616] = 'Lembre-se, o F&oacute;rum est&aacute; em \'Modo de Manuten&ccedil;&atilde;o\'.';

$txt[641] = 'Lida';
$txt[642] = 'vezes';

$txt[645] = 'Estat&iacute;sticas';
$txt[656] = 'Membro Mais Recente';
$txt[658] = 'Total de Categorias';
$txt[659] = '&Uacute;ltima Mensagem';

$txt[660] = 'Voc&ecirc; tem';
$txt[661] = 'Clique';
$txt[662] = 'aqui';
$txt[663] = 'para visualiz&aacute;-las.';

$txt[665] = 'Total de Quadros';

$txt[668] = 'Imprimir';

$txt[679] = 'Tem de ser um endere&ccedil;o de e-mail v&aacute;lido.';

$txt[683] = 'Sou um cromo!!';
$txt[685] = $context['forum_name'] . ' - Centro de Informa&ccedil;&atilde;o';

$txt[707] = 'Enviar este t&oacute;pico';

$txt['sendtopic_title'] = 'Enviar este t&oacute;pico &quot;%s&quot; a um amigo.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Ol&#225; %s,';
$txt['sendtopic_this_topic'] = 'D&#225; uma vista de olhos nisto: "%s" no ' . $context['forum_name'] . '.  Para veres basta clicares no endere&#231;o em baixo';
$txt['sendtopic_thanks'] = 'Fica bem';
$txt['sendtopic_sender_name'] = 'O seu nome';
$txt['sendtopic_sender_email'] = 'O seu e-mail';
$txt['sendtopic_receiver_name'] = 'O destinat&aacute;rio';
$txt['sendtopic_receiver_email'] = 'E-mail do destinat&aacute;rio';
$txt['sendtopic_comment'] = 'Adicionar um coment&aacute;rio';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Foi adicionado um coment&#225;rio relativo a este t&#243;pico';

$txt[721] = 'Esconder e-mail do p&uacute;blico?';

$txt[737] = 'Seleccionar todos';

// Use numeric entities in the below string.
$txt[1001] = 'Erro na base de dados';
$txt[1002] = 'Por favor tente novamente. Se voltar a ver este erro, por favor contacte o administrador.';
$txt[1003] = 'Ficheiro';
$txt[1004] = 'Linha';
// Use numeric entities in the below string.
$txt[1005] = 'O SMF detectou e tentou reparar automaticamente um erro na base de dados. Se continuar a receber estas mensagens, contacte a sua empresa de alojamento.';
$txt['database_error_versions'] = '<b>Nota:</b> Parece que a sua base de dados precisa de ser actualizada. Os ficheiros est&atilde;o na vers&atilde;o ' . $forum_version . ', enquanto a sua base de dados est&aacute; na vers&atilde;o' . $modSettings['smfVersion'] . '. Recomenda-se que seja executada a actualiza&ccedil;&atilde;o para a &uacute;ltima vers&atilde;o.';
$txt['template_parse_error'] = 'Erro na Template!';
$txt['template_parse_error_message'] = 'Parece que aconteceu alguma coisa com as templates do f&oacute;rum. Este deve ser apenas um problema tempor&aacute;rio. Se continuar a ver esta mensagem, por favor contacte o administrador.<br /><br />Pode tamb&eacute;m tentar <a href="javascript:location.reload();">actualizar esta p&aacute;gina</a>.';
$txt['template_parse_error_details'] = 'Houve um problema ao carregar a template ou ficheiro de idioma. <tt><b>%1$s</b></tt> Por favor verifique os erros e tente novamente - lembre-se, um simples ap&oacute;strofe (<tt>\'</tt>) tem de ser na maioria das vezes antecedido de uma barra (<tt>\\</tt>).  Para ver informa&ccedil;&otilde;es mais especificas dos erros de PHP, tente <a href="' . $boardurl . '%1$s">aceder ao ficheiro directamente</a>.<br /><br />Pode querer tentar <a href="javascript:location.reload();">actualizar esta p&aacute;gina</a> ou <a href="' . $scripturl . '?theme=1">usar o Tema Padr&atilde;o</a>.';

$txt['smf10'] = '<b>Hoje</b> &agrave;s ';
$txt['smf10b'] = '<b>Ontem</b> &agrave;s ';
$txt['smf20'] = 'Nova vota&ccedil;&atilde;o';
$txt['smf21'] = 'Pergunta';
$txt['smf23'] = 'Votar';
$txt['smf24'] = 'Votos totais';
$txt['smf25'] = 'Atalhos: pressione alt+s para enviar ou alt+p para pr&eacute;-visualizar';
$txt['smf29'] = 'Ver resultados';
$txt['smf30'] = 'Trancar vota&ccedil;&atilde;o';
$txt['smf30b'] = 'Destrancar Vota&ccedil;&atilde;o';
$txt['smf39'] = 'Editar vota&ccedil;&atilde;o';
$txt['smf43'] = 'Vota&ccedil;&atilde;o';
$txt['smf47'] = '1 Dia';
$txt['smf48'] = '1 Semana';
$txt['smf49'] = '1 M&ecirc;s';
$txt['smf50'] = 'Para sempre';
$txt['smf52'] = 'Entrar com nome de utilizador, password e dura&ccedil;&atilde;o da sess&atilde;o';
$txt['smf53'] = '1 Hora';
$txt['smf56'] = 'MOVIDO';
$txt['smf57'] = 'Por favor escreva uma breve descri&ccedil;&atilde;o da raz&atilde;o <br />de ter movido este t&oacute;pico.';
$txt['smf60'] = 'Desculpe, mas voc&ecirc; n&atilde;o tem mensagens suficientes para votar no karma - precisa de ter pelo menos ';
$txt['smf62'] = 'Desculpe, mas n&atilde;o pode alterar o karma deste membro duas vezes seguidas. Tem de aguardar pelo tempo de espera m&iacute;nimo de ';
$txt['smf82'] = 'Quadro';
$txt['smf88'] = 'em';
$txt['smf96'] = 'T&oacute;pico inamov&iacute;vel';

$txt['smf138'] = 'Apagar';

$txt['smf199'] = 'As suas mensagens pessoais';

$txt['smf211'] = 'Kb';

$txt['smf223'] = '[Mais estat&iacute;sticas]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'C&#243;digo';
$txt['smf239'] = 'Cita&#231;&#227;o de';
$txt['smf240'] = 'Citar';

$txt['smf251'] = 'Dividir o T&oacute;pico';
$txt['smf252'] = 'Juntar T&oacute;picos';
$txt['smf254'] = 'Assunto para o novo t&oacute;pico';
$txt['smf255'] = 'Separar apenas esta mensagem.';
$txt['smf256'] = 'Dividir o t&oacute;pico depois desta mensagem incluindo a mesma.';
$txt['smf257'] = 'Seleccionar as mensagens para dividir.';
$txt['smf258'] = 'Novo t&oacute;pico';
$txt['smf259'] = 'O t&oacute;pico foi dividido com sucesso em dois.';
$txt['smf260'] = 'T&oacute;pico de origem';
$txt['smf261'] = 'Por favor seleccione as mensagens que quer dividir.';
$txt['smf264'] = 'Os t&oacute;picos foram &uacute;nidos com sucesso.';
$txt['smf265'] = 'T&oacute;pico unido recentemente';
$txt['smf266'] = 'T&oacute;pico a ser unido';
$txt['smf267'] = 'Quadro alvo';
$txt['smf269'] = 'T&oacute;pico alvo';
$txt['smf274'] = 'Tem a certeza que quer juntar';
$txt['smf275'] = 'com';
$txt['smf276'] = 'Esta funcionalidade vai juntar as mensagens de dois t&oacute;picos diferentes em um unico. As mensagens ser&atilde;o ordenadas de acordo com a data em que foram enviadas. Como tal, a mensagem mais antiga ser&aacute; a primeira mensagem do novo t&oacute;pico';

$txt['smf277'] = 'Activar inamov&iacute;vel';
$txt['smf278'] = 'Desactivar inamov&iacute;vel';
$txt['smf279'] = 'Trancar t&oacute;pico';
$txt['smf280'] = 'Destrancar t&oacute;pico';

$txt['smf298'] = 'Pesquisa avan&ccedil;ada';

$txt['smf299'] = 'RISCO DE SEGURAN&Ccedil;A:';
$txt['smf300'] = 'Voc&ecirc; n&atilde;o apagou ';

$txt['smf301'] = 'P&aacute;gina criada em ';
$txt['smf302'] = ' segundos com ';
$txt['smf302b'] = ' procedimentos.';

$txt['smf315'] = 'Use esta funcionalidade para denunciar aos moderadores e administradores algum uso abusivo do f&oacute;rum ou de alguma mensagem que n&atilde;o se enquadra neste t&oacute;pico.<br /><i>O seu endere&ccedil;o de e-mail ser&aacute; revelado aos moderadores se usar esta funcionalidade.</i>';

$txt['online2'] = 'On-Line';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Mensagem pessoal (Online)';
$txt['online5'] = 'Mensagem pessoal (Offline)';
$txt['online8'] = 'Estado';

$txt['topbottom4'] = 'Ir para o topo';
$txt['topbottom5'] = 'Ir para o fundo';

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


$txt['calendar3'] = 'Anivers&aacute;rios:';
$txt['calendar4'] = 'Eventos:';
$txt['calendar3b'] = 'Pr&oacute;ximos anivers&aacute;rios:';
$txt['calendar4b'] = 'Pr&oacute;ximos eventos:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'M&ecirc;s:';
$txt['calendar10'] = 'Ano:';
$txt['calendar11'] = 'Dia:';
$txt['calendar12'] = 'T&iacute;tulo do evento:';
$txt['calendar13'] = 'Colocar em:';
$txt['calendar20'] = 'Editar evento';
$txt['calendar21'] = 'Apagar este evento?';
$txt['calendar22'] = 'Apagar evento';
$txt['calendar23'] = 'Colocar evento';
$txt['calendar24'] = 'Calend&aacute;rio';
$txt['calendar37'] = 'Link para o calend&aacute;rio';
$txt['calendar43'] = 'Link para o evento';
$txt['calendar47'] = 'Pr&oacute;ximas datas importantes';
$txt['calendar47b'] = 'Calend&aacute;rio Hoje';
$txt['calendar51'] = 'Semana';
$txt['calendar54'] = 'N&uacute;mero de dias:';
$txt['calendar_how_edit'] = 'Como editar estes eventos?';
$txt['calendar_link_event'] = 'Linkar eventos com mensagens:';
$txt['calendar_confirm_delete'] = 'Tem a certeza que quer apagar este evento?';
$txt['calendar_linked_events'] = 'Eventos linkados';

$txt['moveTopic1'] = 'Colocar um t&oacute;pico de redireccionamento';
$txt['moveTopic2'] = 'Alterar o assunto do t&oacute;pico';
$txt['moveTopic3'] = 'Novo assunto';
$txt['moveTopic4'] = 'Alterar o assunto de todas as mensagens';

$txt['theme_template_error'] = 'N&atilde;o foi possivel abrir a template \'%s\'.';
$txt['theme_language_error'] = 'N&atilde;o foi possivel carregar o ficheiro de idioma \'%s\'.';

$txt['parent_boards'] = 'Sub-Quadro';

$txt['smtp_no_connect'] = 'N&atilde;o foi possivel ligar ao servidor de SMTP';
$txt['smtp_port_ssl'] = 'Porta SMTP incorrecta.; Deve ser 465 para servidores SSL.';
$txt['smtp_bad_response'] = 'N&atilde;o foi possivel receber os c&oacute;digos de resposta do servidor de e-mail';
$txt['smtp_error'] = 'Ocorreram alguns problemas durante o envio do e-mail. Erro: ';
$txt['mail_send_unable'] = 'N&atilde;o foi possivel enviar a mensagem para o endere&ccedil;o de e-mail \'%s\'';

$txt['mlist_search'] = 'Procurar por utilizadores';
$txt['mlist_search2'] = 'Pesquisar novamente';
$txt['mlist_search_email'] = 'Procurar por endere&ccedil;os de email';
$txt['mlist_search_messenger'] = 'Procurar por endere&ccedil;o de MSN Messenger';
$txt['mlist_search_group'] = 'Procurar por grupo';
$txt['mlist_search_name'] = 'Procurar por nome';
$txt['mlist_search_website'] = 'Procurar por website';
$txt['mlist_search_results'] = 'Resultados de pesquisa por';

$txt['attach_downloaded'] = 'transferido';
$txt['attach_viewed'] = 'visto';
$txt['attach_times'] = 'vezes';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Defini&ccedil;&otilde;es';
$txt['never'] = 'Nunca';
$txt['more'] = 'mais';

$txt['hostname'] = 'Servidor';
$txt['you_are_post_banned'] = 'Desculpe %s, mas voc&ecirc; foi banido de enviar mensagens pessoais neste F&oacute;rum.';
$txt['ban_reason'] = 'Raz&atilde;o';

$txt['tables_optimized'] = 'As tabelas da base de dados foram optimizadas';

$txt['add_poll'] = 'Adicionar Vota&ccedil;&atilde;o';
$txt['poll_options6'] = 'S&oacute; pode escolher at&eacute; %s op&ccedil;&otilde;es.';
$txt['poll_remove'] = 'Remover Vota&ccedil;&atilde;o';
$txt['poll_remove_warn'] = 'Tem a certeza que quer remover esta vota&ccedil;&atilde;o deste t&oacute;pico?';
$txt['poll_results_expire'] = 'Os resultados ser&atilde;o divulgados quando a vota&ccedil;&atilde;o for encerrada';
$txt['poll_expires_on'] = 'Vota&ccedil;&atilde;o encerra';
$txt['poll_expired_on'] = 'Vota&ccedil;&atilde;o encerrada';
$txt['poll_change_vote'] = 'Remover voto';
$txt['poll_return_vote'] = 'Op&ccedil;&otilde;es de vota&ccedil;&atilde;o';

$txt['quick_mod_remove'] = 'Remover seleccionados';
$txt['quick_mod_lock'] = 'Trancar seleccionados';
$txt['quick_mod_sticky'] = 'Tornar os seleccionados inamov&iacute;veis';
$txt['quick_mod_move'] = 'Mover seleccionados para';
$txt['quick_mod_merge'] = 'Juntar seleccionados';
$txt['quick_mod_markread'] = 'Marcar seleccionados como lidos';
$txt['quick_mod_go'] = 'OK!';
$txt['quickmod_confirm'] = 'Tem a certeza que quer continuar?';

$txt['spell_check'] = 'Verificador ortogr&aacute;fico';

$txt['quick_reply_1'] = 'Resposta r&aacute;pida';
$txt['quick_reply_2'] = 'Com a <i>resposta r&aacute;pida</i> pode usar o c&oacute;digo BBC e os smileys numa mensagem normal, mas muito mais rapidamente.';
$txt['quick_reply_warning'] = 'Aviso: este t&oacute;pico est&aacute; actualmente trancado!<br />Apenas os moderadores ou administradores podem responder.';

$txt['notification_enable_board'] = 'Tem a certeza que deseja activar a notifica&ccedil;&atilde;o de novos t&oacute;picos neste quadro?';
$txt['notification_disable_board'] = 'Tem a certeza que deseja desactivar a notifica&ccedil;&atilde;o de novos t&oacute;picos neste quadro?';
$txt['notification_enable_topic'] = 'Tem a certeza que deseja activar a notifica&ccedil;&atilde;o de novas respostas neste t&oacute;pico?';
$txt['notification_disable_topic'] = 'Tem a certeza que deseja desactivar a notifica&ccedil;&atilde;o de novas respostas neste t&oacute;pico?';

$txt['rtm1'] = 'Denunciar ao Moderador';

$txt['unread_topics_visit'] = 'T&oacute;picos recentes n&atilde;o lidos';
$txt['unread_topics_visit_none'] = 'N&atilde;o h&aacute; topicos n&atilde;o lidos desde a sua &uacute;ltima visita.  <a href="' . $scripturl . '?action=unread;all">Clique aqui para ver todos os t&oacute;picos n&atilde;o lidos</a>.';
$txt['unread_topics_all'] = 'Todos os t&oacute;picos n&atilde;o lidos';
$txt['unread_replies'] = 'T&oacute;picos actualizados';

$txt['who_title'] = 'Quem est&aacute; ligado';
$txt['who_and'] = ' e ';
$txt['who_viewing_topic'] = ' est&atilde;o a ver este t&oacute;pico.';
$txt['who_viewing_board'] = ' est&atilde;o a ver este quadro.';
$txt['who_member'] = 'Membro';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'HTML 4.01 v&aacute;lido!';
$txt['valid_xhtml'] = 'XHTML 1.0 v&aacute;lido!';
$txt['valid_css'] = 'CSS v&aacute;lido!';

$txt['guest'] = 'Visitante';
$txt['guests'] = 'Visitantes';
$txt['user'] = 'Membro';
$txt['users'] = 'Membros';
$txt['hidden'] = 'Escondidos';
$txt['buddy'] = 'Amigo';
$txt['buddies'] = 'Amigos';
$txt['most_online_ever'] = 'Recorde de Utilizadores Online';
$txt['most_online_today'] = 'Utilizadores Online Hoje';

$txt['merge_select_target_board'] = 'Seleccione o quadro alvo do t&oacute;pico unido';
$txt['merge_select_poll'] = 'Seleccione qual das sondagens o t&oacute;pico deve conter';
$txt['merge_topic_list'] = 'Seleccione os t&oacute;picos para juntar';
$txt['merge_select_subject'] = 'Seleccione o assunto do t&oacute;pico unido';
$txt['merge_custom_subject'] = 'Alterar assunto';
$txt['merge_enforce_subject'] = 'Alterar o assunto de todas as mensagens';
$txt['merge_include_notifications'] = 'Incluir notifica&ccedil;&otilde;es?';
$txt['merge_check'] = 'Juntar?';
$txt['merge_no_poll'] = 'Sem vota&ccedil;&atilde;o';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Icon actual';

$txt['smileys_current'] = 'Conjunto de smileys actual';
$txt['smileys_none'] = 'Sem smileys';
$txt['smileys_forum_board_default'] = 'Padr&atilde;o do F&oacute;rum/Quadro';

$txt['search_results'] = 'Resultados da pesquisa';
$txt['search_no_results'] = 'N&atilde;o foram encontrados resultados';

$txt['totalTimeLogged1'] = 'Tempo total online: ';
$txt['totalTimeLogged2'] = ' dias, ';
$txt['totalTimeLogged3'] = ' horas e ';
$txt['totalTimeLogged4'] = ' minutos.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'h';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'H&aacute;';
$txt['approve_thereare'] = 'H&aacute;';
$txt['approve_member'] = 'um membro';
$txt['approve_members'] = 'membros';
$txt['approve_members_waiting'] = '&agrave; espera de aprova&ccedil;&atilde;o.';

$txt['notifyboard_turnon'] = 'Quer receber um email de notifica&ccedil;&atilde;o cada vez que alguem iniciar um novo t&oacute;pico neste quadro?';
$txt['notifyboard_turnoff'] = 'Tem a certeza que pretende desactivar a notifica&ccedil;&atilde;o de novos t&oacute;picos neste quadro?';

$txt['activate_code'] = 'O seu c&oacute;digo de activa&ccedil;&atilde;o &eacute;';

$txt['find_members'] = 'Encontrar membros';
$txt['find_username'] = 'Nome, nome de utilizador, ou endere&ccedil;o de e-mail';
$txt['find_buddies'] = 'Mostrar apenas amigos?';
$txt['find_wildcards'] = 'S&atilde;o permitidos \'Wildcards\': *, ?';
$txt['find_no_results'] = 'N&atilde;o foram encontrados resultados';
$txt['find_results'] = 'Resultados';
$txt['find_close'] = 'Fechar';

$txt['unread_since_visit'] = 'Mostrar t&oacute;picos n&atilde;o lidos desde a &uacute;ltima visita.';
$txt['show_unread_replies'] = 'Ver novas respostas aos meus t&oacute;picos.';

$txt['change_color'] = 'Alterar a cor';

$txt['quickmod_delete_selected'] = 'Apagar seleccionados';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Recebeu uma ou mais mensagens pessoais.\\nVer as mensagens pessoais agora?';

$txt['previous_next_back'] = '&laquo; anterior';
$txt['previous_next_forward'] = 'seguinte &raquo;';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'Este t&oacute;pico foi movido para ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Comprimir ou expandir o cabe&ccedil;alho.';

$txt['mark_unread'] = 'Marcar como n&atilde;o lido';

$txt['ssi_not_direct'] = 'Por favor n&atilde;o aceda directamente ao ficheiro SSI.php; deve usar antes o caminho (%s) ou adicionar ?ssi_function=qualquercoisa.';
$txt['ssi_session_broken'] = 'SSI.php foi incapaz de carregar uma sess&atilde;o! Isto pode causar problemas com o logout e outras fun&ccedil;&otilde;es - certifique-se que SSI.php est&aacute; incluido antes de *qualquer* coisa em todos os scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Mensagem anterior';
$txt['preview_fetch'] = 'Carregar pr&eacute;-visualiza&ccedil;&atilde;o...';
$txt['preview_new'] = 'Nova mensagem';
$txt['error_while_submitting'] = 'Os seguintes erros ocorreram enquanto colocava esta mensagem:';

$txt['split_selected_posts'] = 'Mensagens seleccionadas';
$txt['split_selected_posts_desc'] = 'As mensagens abaixo ir&atilde;o formar um novo t&oacute;pico depois de divididas.';
$txt['split_reset_selection'] = 'anular selec&ccedil;&atilde;o';

$txt['modify_cancel'] = 'Cancelar';
$txt['mark_read_short'] = 'Marcar como Lido';

$txt['pm_short'] = 'As Minhas Mensagens';
$txt['hello_member_ndt'] = 'Ol&aacute;';

$txt['ajax_in_progress'] = 'A carregar...';

?>