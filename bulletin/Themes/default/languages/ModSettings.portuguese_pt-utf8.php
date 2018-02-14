<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Esta p&aacute;gina permite alterar as configura&ccedil;&otilde;es dos MOD\'s, fun&ccedil;&otilde;es e op&ccedil;&otilde;es b&aacute;sicas do F&oacute;rum. Por favor consulte as <a href="' . $scripturl . '?action=theme;sa=admin;theme=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">configura&ccedil;&otilde;es dos Temas</a> para mais op&ccedil;&otilde;es. Clique nos &iacute;cones de ajuda para obter mais informa&ccedil;&otilde;es sobre uma configura&ccedil;&atilde;o.';

$txt['mods_cat_features'] = 'Configura&ccedil;&otilde;es B&aacute;sicas do F&oacute;rum';
$txt['pollMode'] = 'Sondagens';
$txt['smf34'] = 'Desactivar sondagens';
$txt['smf32'] = 'Activar sondagens';
$txt['smf33'] = 'Mostrar sondagens existentes como t&oacute;picos';
$txt['allow_guestAccess'] = 'Permitir que os Visitantes naveguem no F&oacute;rum';
$txt['userLanguage'] = 'Activar escolha do idioma por parte do utilizador';
$txt['allow_editDisplayName'] = 'Permitir que os utilizadores possam alterar o seu nome vis&iacute;vel?';
$txt['allow_hideOnline'] = 'Permitir que os utilizadores n&atilde;o-administradores possam esconder o seu estado online';
$txt['allow_hideEmail'] = 'Permitir que o utilizador esconda o seu e-mail de todos excepto do administrador?';
$txt['guest_hideContacts'] = 'N&atilde;o revelar detalhes dos membros aos visitantes';
$txt['titlesEnable'] = 'Activar t&iacute;tulos personalizados';
$txt['enable_buddylist'] = 'Activar lista de amigos';
$txt['default_personalText'] = 'Texto pessoal por defeito';
$txt['max_signatureLength'] = 'N&uacute;mero m&aacute;ximo de caracteres permitidos na assinatura<div class="smalltext">(0 para n&atilde;o ter m&aacute;ximo)</div>';
$txt['number_format'] = 'Formato padr&atilde;o da numera&ccedil;&atilde;o';
$txt['time_format'] = 'Formato padr&atilde;o da hora';
$txt['time_offset'] = 'Diferen&ccedil;a hor&aacute;ria global<div class="smalltext">(os membros podem especificar uma diferen&ccedil;a hor&aacute;ria diferente.)</div>';
$txt['failed_login_threshold'] = 'N&uacute;mero M&aacute;ximo de Logins Falhados';
$txt['lastActive'] = 'Tempo em Minutos para mostrar os Utilizadores Activos no F&oacute;rum';
$txt['trackStats'] = 'Registar as estat&iacute;sticas di&aacute;rias';
$txt['hitStats'] = 'Registar os Hits (&eacute; necess&aacute;rio ter as estat&iacute;sticas activadas)';
$txt['enableCompressedOutput'] = 'Activar output comprimido';
$txt['databaseSession_enable'] = 'Usar sess&otilde;es na base de dados';
$txt['databaseSession_loose'] = 'Permitir que os browsers voltem atr&aacute;s para as p&aacute;ginas em cache';
$txt['databaseSession_lifetime'] = 'Segundos antes de expirar uma sess&atilde;o n&atilde;o utilizada';
$txt['enableErrorLogging'] = 'Activar registo dos erros';
$txt['cookieTime'] = 'Dura&ccedil;&atilde;o padr&atilde;o das cookies do login (em minutos)';
$txt['localCookies'] = 'Activar armazenamento local das cookies <div class="smalltext">(SSI n&atilde;o funciona bem com esta fun&ccedil;&atilde;o activada.)</div>';
$txt['globalCookies'] = 'Usar cookies independentes do sub-dom&iacute;nio <div class="smalltext">(desactive as cookies locais primeiro!)</div>';
$txt['securityDisable'] = 'Desactivar seguran&ccedil;a da administra&ccedil;&atilde;o';
$txt['send_validation_onChange'] = 'Enviar um email com a nova password se o endere&ccedil;o de email for alterado';
$txt['approveAccountDeletion'] = 'Requerer a aprova&ccedil;&atilde;o do administrador quando um membro apaga a sua conta';
$txt['autoOptDatabase'] = 'Optimizar tabelas a cada quantos dias?<div class="smalltext">(0 para desactivar.)</div>';
$txt['autoOptMaxOnline'] = 'N&uacute;mero m&aacute;ximo de utilizadores online durante a optimiza&ccedil;&atilde;o<div class="smalltext">(0 para n&atilde;o ter m&aacute;ximo.)</div>';
$txt['autoFixDatabase'] = 'Reparar automaticamente as tabelas com erros';
$txt['allow_disableAnnounce'] = 'Permitir que os utilizadores desactivem os an&uacute;ncios do F&oacute;rum';
$txt['disallow_sendBody'] = 'N&atilde;o permitir a coloca&ccedil;&atilde;o de texto nas notifica&ccedil;&otilde;es?';
$txt['modlog_enabled'] = 'Registar as ac&ccedil;&otilde;es dos moderadores';
$txt['queryless_urls'] = 'URLs amig&aacute;veis dos motores de busca <div class="smalltext"><b>Apenas em servidores Apache!</b></div>';
$txt['max_image_width'] = 'Largura m&aacute;xima das imagens enviadas (0 = desactivar)';
$txt['max_image_height'] = 'Altura m&aacute;xima das imagens enviadas (0 = desactivar)';
$txt['mail_type'] = 'Tipo de Mail';
$txt['mail_type_default'] = '(PHP por defeito)';
$txt['smtp_host'] = 'Servidor SMTP';
$txt['smtp_port'] = 'Porta SMTP';
$txt['smtp_username'] = 'SMTP utilizador';
$txt['smtp_password'] = 'Password SMTP';
$txt['enableReportPM'] = 'Activar a den&uacute;ncia de mensagens pessoais';
$txt['max_pm_recipients'] = 'N&uacute;mero m&aacute;ximo de recipientes permitidos numa mensagem pessoal.<div class="smalltext">(0 para n&atilde;o ter limite, os administradores est&atilde;o isentos)</div>';
$txt['pm_posts_verification'] = 'N&uacute;mero de mensagens m&iacute;nimo para que os utilizadores tenham que inserir o c&oacute;digo antes de enviarem mensagens pessoais.<div class="smalltext">(0 para n&atilde;o ter limite, os admins est&atilde;o isentos)</div>';
$txt['pm_posts_per_hour'] = 'N&uacute;mero de mensagens pessoais que um utilizador pode enviar numa hora.<div class="smalltext">(0 para n&atilde;o ter limite, moderadores est&atilde;o isentos)</div>';

$txt['mods_cat_layout'] = 'Op&ccedil;&otilde;es de Layout';
$txt['compactTopicPagesEnable'] = 'Limitar n&uacute;mero de links de p&aacute;ginas';
$txt['smf235'] = 'P&aacute;ginas cont&iacute;nuas para mostrar:';
$txt['smf236'] = 'para mostrar';
$txt['todayMod'] = 'Activar a op&ccedil;&atilde;o &quot;Hoje&quot;';
$txt['smf290'] = 'Desactivado';
$txt['smf291'] = 'Apenas Hoje';
$txt['smf292'] = 'Hoje &amp; Ontem';
$txt['topbottomEnable'] = 'Activar bot&otilde;es Ir para o Topo/Fundo';
$txt['onlineEnable'] = 'Mostrar online/offline nas mensagens e MPs';
$txt['enableVBStyleLogin'] = 'Activar login r&aacute;pido em todas as p&aacute;ginas';
$txt['defaultMaxMembers'] = 'N&uacute;mero de membros por p&aacute;gina na lista de membros';
$txt['timeLoadPageEnable'] = 'Mostrar tempo de cria&ccedil;&atilde;o das p&aacute;ginas';
$txt['disableHostnameLookup'] = 'Desactivar verifica&ccedil;&atilde;o do hostname?';
$txt['who_enabled'] = 'Activar a lista de Quem Est&aacute; Online';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Karma';
$txt['smf64'] = 'Desactivar|Activar karma total|Activar karma positivo/negativo';
$txt['karmaMinPosts'] = 'Definir o n&uacute;mero m&iacute;nimo de mensagens para alterar o karma';
$txt['karmaWaitTime'] = 'Definir o tempo de espera em horas';
$txt['karmaTimeRestrictAdmins'] = 'Restringir os administradores para o tempo de espera';
$txt['karmaLabel'] = 'T&iacute;tulo do Karma';
$txt['karmaApplaudLabel'] = 'Aumentar Karma';
$txt['karmaSmiteLabel'] = 'Diminuir Karma';

$txt['caching_information'] = '<div align="center"><b><u>Importante! Leia esta informa&ccedil;&atilde;o antes de activar estas funcionalidades.</b></u></div><br />
	O SMF suporta o uso de cache atrav&eacute;s do uso de aceleradores. Os aceleradores suportados actualmente incluem:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (N&atilde;o &eacute; o Zend Optimizer)</li>
	</ul>
	O uso de cache ir&aacute; funcionar apenas se o seu servidor tiver o PHP compilado com um dos optimizadores em cima, ou se tiver a memcache dispon&iacute;vel. <br /><br />
	O SMF executa o cache a v&aacute;rios n&iacute;veis. Quanto maior for o n&iacute;vel de cache activado, mais tempo de CPU ser&aacute; usado para buscar a informa&ccedil;&atilde;o em cache. Se a sua m&aacute;quina tiver cache dispon&iacute;vel, recomendamos que experimente primeiro o cache de primeiro n&iacute;vel.
	<br /><br />
	Note que se usar a memcache ser&aacute; necess&aacute;rio fornecer os detalhes do servidor nas configura&ccedil;&otilde;es em baixo. Os dados dever&atilde;o ser introduzidos separados por v&iacute;rgulas tal como no exemplo em baixo:<br />
	&quot;servidor1,servidor2,servidor2:porto,servidor4&quot;<br /><br />
	Note que se n&atilde;o for definido nenhum porto, o SMF ir&aacute; usar o porto 11211. O SMF ir&aacute; tentar executar um balanceamento aleat&oacute;rio/em bruto em todos os servidores.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">O SMF n&atilde;o conseguiu detectar nenhum acelerador compat&iacute;vel no seu servidor.</b>';
$txt['detected_APC'] = '<b style="color: green">O SMF detectou que o seu servidor tem o APC instalado.';
$txt['detected_eAccelerator'] = '<b style="color: green">O SMF detectou que o seu servidor tem o eAccelerator instalado.';
$txt['detected_MMCache'] = '<b style="color: green">O SMF detectou que o seu servidor tem o MMCache instalado.';
$txt['detected_Zend'] = '<b style="color: green">O SMF detectou que o seu servidor tem o Zend instalado.';
$txt['detected_Memcached'] = '<b style="color: green">O SMF detectou que o seu servidor tem <i>Memcached</i> instalado.';

$txt['cache_enable'] = 'N&iacute;vel de Cache';
$txt['cache_off'] = 'Sem cache';
$txt['cache_level1'] = 'Cache de N&iacute;vel 1';
$txt['cache_level2'] = 'Cache de N&iacute;vel 2 (N&atilde;o Recomendado)';
$txt['cache_level3'] = 'Cache de N&iacute;vel 3 (N&atilde;o Recomendado)';
$txt['cache_memcached'] = 'Configura&ccedil;&otilde;es Memcache';

?>