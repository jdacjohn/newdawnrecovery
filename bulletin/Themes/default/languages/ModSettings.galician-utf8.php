<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Esta paxina permítete cambia-la configuracion das caracteristicas, mods, e opcións basicas do teu foro.  Por favor revisa a <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_ide'] . ';sesc=' . $context['session_ide'] . '">configuracion do tema</a> para mais opcións.  Fai <i>click</i> nos iconas de axuda para mais informacion achega dalgunha opcion.';

$txt['mods_cat_features'] = 'Basic Features';
$txt['pollMode'] = 'Modo Sondaxe';
$txt['smf34'] = 'Desactivar Sondaxes';
$txt['smf32'] = 'Activar Sondaxes';
$txt['smf33'] = 'Amosar Sondaxes como temas';
$txt['allow_guestAccess'] = 'Permitir ós visitantes navegar no foro';
$txt['userLanguage'] = 'Activar Idioma seleccionado polo usuario';
$txt['allow_editDisplayName'] = '&iquest;Lle permitir ós usuarios modifica-lo seu nome?';
$txt['allow_hideOnline'] = '&iquest;Lle permitir ós usuarios NON administradores se ocultar?';
$txt['allow_hideEmail'] = 'Lle permitir ós usuarios agocha-lo seu email do publico (agás a administradores)';
$txt['guest_hideContacts'] = 'Non revelar detalles de contacto dos usuarios ós visitantes';
$txt['titlesEnable'] = 'Activar Titulos Personalizado';
$txt['enable_buddylist'] = 'Enable buddy lists';
$txt['default_personalText'] = 'Texto Persoal por defecto';
$txt['max_signatureLength'] = 'Numero maximo de carácteres permitido en sinaturas<div class="smalltext">(0 para que non haxa max)</div>';
$txt['number_format'] = 'Formato de numeros por defecto';
$txt['time_format'] = 'Formato de Tempo por defecto';
$txt['time_offset'] = 'Diferenza horaria global<div class="smalltext">(agregado ás opcións especificas dos usuarios.)</div>';
$txt['failed_login_threshold'] = 'Tempo de agarda ó fallar un ingreso';
$txt['lastActive'] = 'Tempo despues da súa ultima accion durante o cal os usuarios apareceran en linea';
$txt['trackStats'] = 'Rastrear Estadisticas';
$txt['hitStats'] = 'Rastrear Hits (debe estar activado stats)';
$txt['enableCompressedOutput'] = 'Activar Compresion de Saída';
$txt['databaseSession_enable'] = 'Usar sesións almacenadas na base de datos';
$txt['databaseSession_loose'] = 'Lle permitir ós navegadores regresar ás paxinas no cache';
$txt['databaseSession_lifetime'] = 'Segundos para que expire unha sesion non utilizada';
$txt['enableErrorLogging'] = 'Activar log de erros';
$txt['cookieTime'] = 'Duracion por defecto das cookies para o ingreso (en minutos)';
$txt['localCookies'] = 'Activa-lo almacenamento local de cookies<div class="smalltext">(SSI non funcionase aínda con isto activado.)</div>';
$txt['globalCookies'] = '&iquest;Usar cookies independentes de subdominio?<div class="smalltext">&iexcl;Advertencia: Hai que deshabilitar as cookies locais primeiro!</div>';
$txt['securityDisable'] = '&iquest;Desactiva-la seguridade na administracion?';
$txt['send_validation_onChange'] = 'Enviar por email nova contrasinal se o usuario cambia o seu direccion de email';
$txt['approveAccountDeletion'] = 'Requiri-la aprobacion dun administrador cando un usuario borre a súa cuenta';
$txt['autoOptDatabase'] = '&iquest;Optimizar táboas cada cantos dias?<div class="smalltext">(0 para desactivar)</div>';
$txt['autoOptMaxOnline'] = 'Maximos usuarios en linea mentres se optimiza<div class="smalltext">(0 para que non haxa max)</div>';
$txt['autoFixDatabase'] = 'Arreglar táboas con problemas automaticamente';
$txt['allow_disableAnnounce'] = 'Permitir ós usuarios desactiva-lo recibir notificacións de \'Foros de Anuncios\'';
$txt['disallow_sendBody'] = '&iquest;Non permitir envia-lo texto do mensaxe nas notificacións?';
$txt['modlog_enabled'] = 'Gardar log das accións de moderacion';
$txt['queryless_urls'] = 'Amosar URLS sen ?s<div class="smalltext"><b>&iexcl;Só Apache!</b></div>';
$txt['max_image_width'] = 'Ancho maximo das imagenes nos mensaxes (0 = desactivar)';
$txt['max_image_height'] = 'Altura maxima das imagenes nos mensaxes (0 = desactivar)';
$txt['mail_type'] = 'Tipo de Correo';
$txt['mail_type_default'] = '(Predeterminado de PHP)';
$txt['smtp_host'] = 'Servidor SMTP';
$txt['smtp_port'] = 'Porto SMTP';
$txt['smtp_username'] = 'Usuario SMTP';
$txt['smtp_password'] = 'Contrasinal SMTP';
$txt['enableReportPM'] = 'Enable reporting of persoal messages';
$txt['max_pm_recipients'] = 'Maximum number of recipients allowed in a persoal message.<div class="smalltext">(0 for non limit, admin\'s are exempt)</div>';
$txt['pm_posts_verification'] = 'Pos count under which users must enter code when sending persoal messages.<div class="smalltext">(0 for non limit, admins are exempt)</div>';
$txt['pm_posts_per_hour'] = 'Number of persoal messages a user may send in an hour.<div class="smalltext">(0 for non limit, moderators are exempt)</div>';

$txt['mods_cat_layout'] = 'Deseño (Temas)';
$txt['compactTopicPagesEnable'] = 'Activar Mod de Tema Compacto';
$txt['smf235'] = 'Numero de paxinas contiguas a amosar:';
$txt['smf236'] = 'para amosar';
$txt['todayMod'] = 'Activar Mod de Hoxe';
$txt['smf290'] = 'Desactivado';
$txt['smf291'] = 'Só Hoxe';
$txt['smf292'] = 'Hoxe e Onte';
$txt['topbottomEnable'] = 'Activar botóns Ir Arriba/Ir Abajo';
$txt['onlineEnable'] = 'Amosar Conectado/Desconectado en mensaxes e en MP';
$txt['enableVBStyleLogin'] = 'Activar ingreso estilo VB';
$txt['defaultMaxMembers'] = 'Usuarios por paxina na Lista Completa de Usuarios';
$txt['timeLoadPageEnable'] = 'Amosar tempo tomado para crear cada paxina';
$txt['disableHostnameLookup'] = '&iquest;Desactiva-la busqueda dos nomes dos servidores?';
$txt['who_enabled'] = 'Activar Quen esta en linea';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Modo de Karma';
$txt['smf64'] = 'Desactivar Karma|Activar Karma Total|Activar Karma Positivo/Negativo';
$txt['karmaMinPosts'] = 'Especifica o minimo numero de mensaxes necesarios para modifica-lo karma';
$txt['karmaWaitTime'] = 'Especifica o tempo de agarda en horas';
$txt['karmaTimeRestrictAdmins'] = 'Restrinxir Administradores a agardar';
$txt['karmaLabel'] = 'Etiqueta do Karma';
$txt['karmaApplaudLabel'] = 'Etiqueta Karma para aplaudir';
$txt['karmaSmiteLabel'] = 'Etiqueta Karma para castigar';

$txt['caching_information'] = '<div align="center"><b><u>Important! Read this first before enabling these features.</b></u></div><br />
	SMF supports caching through the use of accelerators. The currently supported accelerators include:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	</ul>
	Caching will only work on your server if you have PHP compiled with one of the above optimizers, or have memcache
	available. <br /><br />
	SMF performs caching at a variety of levels. The higher the level of caching enabled the more CPU time will be spent
	retrieving cached information. If caching is available on your machine it is recommended that you try caching at level 1 first.
	<br /><br />
	Note that if you use memcached you need to provide the server details in the setting below. This should be entered as a comma separated list
	as shown in the example below:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Note that if no port is specified SMF will use port 11211. SMF will attempt to perform rough/random load balancing across the servers.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF has not been able to detect a compatible accelerator on your server.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF has detected that your server has APC installed.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF has detected that your server has eAccelerator installed.';
$txt['detected_MMCache'] = '<b style="color: green">SMF has detected that your server has MMCache installed.';
$txt['detected_Zend'] = '<b style="color: green">SMF has detected that your server has Zend installed.';
$txt['detected_Memcached'] = '<b style="color: green">SMF has detected that your server has Memcached installed.';

$txt['cache_enable'] = 'Caching Level';
$txt['cache_off'] = 'No caching';
$txt['cache_level1'] = 'Level 1 Caching';
$txt['cache_level2'] = 'Level 2 Caching (Not Recommended)';
$txt['cache_level3'] = 'Level 2 Caching (Not Recommended)';
$txt['cache_memcached'] = 'Memcache settings';

?>