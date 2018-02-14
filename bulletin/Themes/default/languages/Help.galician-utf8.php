<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Pechar ventana';

$helptxt['manage_boards'] = '
	<b>Editar foros</b><br />
	Neste menu podes crear/reordenar/eliminar foros, e as categorias
	arriba deles. Por exemplo, se tes un amplío sitio web
	que ofrece informacion achega de &quot;Anime&quot;, &quot;Carros&quot; e &quot;Musica&quot;,
	estes deben se-las categorias a maior nivel que debes crear. Debaixo desas
	categorias probablemente desexes crear &quot;sub-categorias&quot; jerarquicas,
	ou &quot;Foros&quot; para conter temas dentro de cada un. É unha jerarquia simple, con esta estrutura: <br />
	<ul>
		<li>
			<b>Anime</b>
			&nbsp;- Unha &quot;categoria&quot;
		</li>
		<ul>
			<li>
				<b>Dragon Ball</b>
				&nbsp;- Un foro na categoria de &quot;Anime&quot;
			</li>
			<ul>
				<li>
					<b>Dragon Ball Z</b>
					&nbsp;- Un subforo dentro do foro de &quot;Dragon Ball&quot;
				</li>
			</ul>
			<li><b>Aa! Megami-sama</b>
			&nbsp;- Un foro dentro da categoria de &quot;Anime&quot;</li>
		</ul>
	</ul>
	As Categorias permítente organiza-lo foro de mensaxes en temas (&quot;Anime, Carros&quot;),
	e os &quot;Foros&quot; dentro delas son témalos nos cales os usuarios poden
	publicar mensaxes. No exemplo anterior, un usuario interesado nun Audi,
	publicaria un mensaxe no foro &quot;Carros->Audi&quot;. As Categorias permiten
	atopar rapidamente cales son os seus intereses: En vez de &quot;Tenda&quot; téñense
	tendas de &quot;Hardware&quot; e &quot;Electrodomesticos&quot; ás que podes ir.
	Isto simplifica a túa busqueda por &quot;Pantalla&quot;, xa que podes ir á &quot;categoria&quot; de
	tenda de Hardware en vez da tenda de Electrodomesticos (onde encontrarias televisións de pantalla
	plana en vez de, probablemente, protectores de pantalla para a computadora).<br />

	Como se pode percibir arriba, un foro é unha peza importante dentro da categoria.
	Se queres discutir achega de &quot;Audi&quot;, debes ir á categoria &quot;Autos&quot; e ir ó foro
	&quot;Audi&quot; para publica-las túas mensaxes achega do que opinas nese foro.<br />
	As funcións administrativas neste menu son para crear novos foros en cada
	categoria, reordenarlas (poñer &quot;Audi&quot; abaixo de &quot;Ferrari&quot;), ou borrar un
	foro completamente.';

$helptxt['edit_news'] = '<b>Editar Noticias do foro</b><br />
	Isto permítete especifica-lo texto para os elementos das noticias amosadas na pagina indice do foro.
	Agrega calquera elemento que desexes (ex., &quot;Nova version do portal http://HABLAJAPONES.org&quot;). Cada elemento das noticias sepárase
	por un <enter>';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Ver tódolos usuarios</b><br />
			Ver tódolos usuarios no foro de mensaxes. Presentaseche unha lista con hipervinculo, de todos
			os nomes dos usuarios. Podes facer click en calquera dos nomes para obter maiores
			detalles dun usuario en especial (sitio web, idade, sexo, etc), e como Administrador, podes modificar
			calquera deses datos. Tes un total control sobre os usuarios, incluíndo a posibilidade de
			los borra do foro de mensaxes.<br /><br />
		</li>
		<li>
			<b>Agardando aprobacion</b><br />
			Esta seccion se mostra solamente se tes activado que os administradores aproben tódolos novos rexistros de usuarios. Calquera que se rexistre para se unir ó teu
			foro se volvera un usuario completo cando sexa aprobado por un administrador. A seccion mostra todos aqueles usuarios que
			esten agardando aprobacion, xunto co seu email e direccion IP. O teu podes escoller xa sexa aceptar e rexeitar (borrar)
			calquera usuario na lista ó selecciona-lo cadro ó lado do usuario, e seleccionando a accion do cadro colapsable ó final
			da pantalla. Cando rexeites un usuario, podes escoller borra-lo usuario con ou sen lle notificar do teu decision.<br /><br />
		</li>
		<li>
			<b>Agardando activacion</b><br />
			Esta seccion sera visible solamente se tes activado no foro o que os usuarios activen as súas contas. Esta seccion listase tódolos
			usuarios que non activaron as súas novas contas. Dende esta pantalla podes escoller aceptar, rexeitar ou lles lembrar ós
			usuarios con rexistros pendentes. Como na opcion anterior, podes escoller lle enviar email ó usuario para lle informar da
			accion que tomes.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Usuarios con acceso prohibido</b><br />
	SMF permite &quot;banear&quot; ou &quot;restrinxi-lo acceso&quot; a usuarios, para previ-lo acceso a persoas que violaron
	a confianza do foro de mensaxes, ó facer spam, ser groseiros, etc. Isto permítete lles restrinxi-lo
	acceso ós usuarios que non desexes mais no teu foro de mensaxes. Como administrador, cando ve-los mensaxes,
	podes ve-lo IP de cada usuario que utilizo cando publico o mensaxe. Na lista de accesos prohibidos,
	simplemente introduce a direccion IP, garda os cambios, e eles non podran accesar o foro dende ese IP.<br />
	Tamen podes restrinxi-lo acceso de usuarios usando o seu direccion de email, ou o seu nome de usuario.';

$helptxt['modsettings'] = '<b>Config. e Opcións de \'Mods\' instalados</b><br />
	SMF ten algúns mods preinstalados, podes los activa ou los desactiva dende este menu.';

$helptxt['number_format'] = '<b>Formato de Numeros</b><br />
	Podes axustar como os numeros seran amosados ó usuario.  O formato é:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Onde \',\' é o caracter utilizado para dividi-los grupos de miles, \'.\' é o caracter utilizado como o punto decimal e o numero de ceros indica a exactitude dos redondeos.';

$helptxt['time_format'] = '<b>Formato de Hora</b><br />
	Podes axustar como visualizáse-la hora e a data. Hai moitas palabras, pero é relativamente facil.
	O formato segue as especificacións da funcion strftime de PHP, e descríbense a continuacion (mais detalles poden se atopar en <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	Os seguintes carácteres recoñécense na cadea do formato:<br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - nome abreviado do día da semana <br />
	&nbsp;&nbsp;%A - nome completo do día da semana <br />
	&nbsp;&nbsp;%b - nome abreviado do mes <br />
	&nbsp;&nbsp;%B - nome completo do mes <br />
	&nbsp;&nbsp;%d - día do mes (01 a 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - o mesmo que %m/%d/%e <br />
	&nbsp;&nbsp;%e<b>*</b> - día do mes (1 a 31) <br />
	&nbsp;&nbsp;%H - hora usando formato de 24 horas (rango 00 a 23) <br />
	&nbsp;&nbsp;%I - hora usando formato de 12 horas (rango 01 a 12) <br />
	&nbsp;&nbsp;%m - mes como numero (01 a 12) <br />
	&nbsp;&nbsp;%M - minuto como numero <br />
	&nbsp;&nbsp;%p - &quot;am&quot; ou &quot;pm&quot; de acordo á hora actual<br />
	&nbsp;&nbsp;%R<b>*</b> - hora en formato de 24 horas <br />
	&nbsp;&nbsp;%S - segundos como numero decimal <br />
	&nbsp;&nbsp;%T<b>*</b> - hora actual, da mesma maneira que %H:%M:%S <br />
	&nbsp;&nbsp;%e - ano en formato de 2 digitos (00 a 99) <br />
	&nbsp;&nbsp;%E - ano en formato de 4 digitos <br />
	&nbsp;&nbsp;%Z - zona horaria ou nome ou abreviacion <br />
	&nbsp;&nbsp;%% - caracter \'%\'  <br />
	<br />
	<i>* Non funciona en servidores Windows.</i></span>';

$helptxt['live_news'] = '<b>Anuncios en vivo</b><br />
	Este cadro mostra os anuncios recentemente actualizados dende <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	Debes revisar aqui de vez en cando por actualizacións, novas versións, e informacion importante do equipo de Simple Machines.';

$helptxt['registrations'] = '<b>Manexo do Rexistro de Usuarios</b><br />
	Esta seccion contén tódalas funcións que poden ser necesarias para manexar novos rexistros de usuarios no foro. Contén ata tres
	seccións que son visibles dependendo da configuracion do teu foro. &#201;stas son:<br /><br />
	<ul>
		<li>
			<b>Rexistrar Novo usuario</b><br />
			Dende esta pantalla podes escoller rexistrar novas contas en nome dos novos usuarios. Isto pode ser util en foros onde o rexistro esta pechado
			para novos usuarios, ou en casos onde o administrador desexa crear unha conta de proba. Se a opcion de requirir activacion da conta
			esta seleccionada, envíasesele un email ó usuario, cunha liga á que se lle debera facer click antes de que poidan usa-la conta. Asimesmo, podes
			selecciona-lo enviar por email ó usuario unha nova contrasinal ó seu direccion de email.<br /><br />
		</li>
		<li>
			<b>Editar Carta de Aceptacion ó se rexistrar</b><br />
			Isto permítete establecer o texto para a carta de aceptacion amosada ós usuarios cando estan en
			o proceso de rexistro para obter unha conta no teu foro de mensaxes.
			Podes cambiar calquera texto da carta de aceptacion orixinal que se unclute en SMF.
		</li>
		<li>
			<b>Configuracion</b><br />
			Esta seccion sera visible solamente se tes permisos para administra-lo foro. Dende esta pantalla podes decidi-lo metodo de rexistro
			que sera usado no teu foro, asi como algunhas outras configuracións.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Log de Moderacion</b><br />
	Esta seccion permítelle ós administradores se manter ó tanto de tódalas accións de moderacion que os moderadores do foro realizaron. Para se asegurar que
	os moderadores non poidan elimina-las referencias ás accións que eles realizaron, as entradas non poden se eliminar ata 24 horas despues de que a accion realícese.
	A columna \'obxectos\' lista calquera variable asociada coa accion.';
$helptxt['error_log'] = '<b>Log de Erros</b><br />
	O log de erros rastrexa calquera erro grave atopado por usuarios ó usa-lo teu foro. Lista todos eses erros por data, que pode ser usada para ordenar
	ó facer click na frecha negra ó lado de cada data. Asimesmo, podes filtra-los erros ó facer click na imaxe ó lado de cada estadistica de erro. Isto
	permítete filtrar, por exemplo, por usuario. Cando un filtro esta activo, solamente os resultados que concorden co filtro, seran amosados.';
$helptxt['theme_settings'] = '<b>Configuracion do Tema</b><br />
	A pantalla de configuracion permítete cambia-las configuracion especifica dun tema. Esta configuracion inclúe opcións tales como o directorio los tema e informaci&#243;n de URLS pero tamen
	opcións que afectan o deseño dun tema no teu foro. A maior&iacutea los tema tendran unha variedade de opcións configurables polo usuario, permitiendote adaptar un tema
	para satisface-las necesidades individuais do teu foro.';
$helptxt['smileys'] = '<b>Centro de Smileys</b><br />
	Aqui podes agregar e eliminar smileys asi como conxuntos de smileys. É importante mencionar que se un smiley esta nun conxunto, debe estar en tódolos conxuntos - doutra maneira, podra
	ser confuso para os teus usuarios cando utilicen diferentes conxuntos.';
$helptxt['calendar'] = '<b>Administrar Calendario</b><br />
	Aqui podes modifica-la configuracion do calendario, asi como agregar e elimina-los dias festivos que aparecen no calendario.';

$helptxt['serversettings'] = '<b>Server Settings</b><br />
	Fire you can perform the labre configuration for your forum. This section includes the database and url settings, as well as other
	important configuration items such as mail settings and caching. Think carefully whenever editing these settings as an erro may
	render the forum inaccessible';

$helptxt['topicSummaryPosts'] = 'Isto permítete especifica-lo numero de mensaxes anteriores amosados no sumario de temas, na pantalla de responder.';
$helptxt['enableAllMessages'] = 'Establece isto ó numero <em>maximo</em> de mensaxes que un tema pode ter para amosa-lo enlace <i>todos</i>.  Se estableces este valor menor ó de &quot;Maximo numero de mensaxes a amosar nunha pagina de Tema&quot; o unico que conseguiras é que nunca se amose, e se o estableces moi alto, pode alenta-lo teu foro.';
$helptxt['enableStickyTopics'] = 'Mensaxes fixados son temas que permanecen a parte superior da lista de mensaxes.
	Son usados xeralmente para mensaxes importantes. Solamente moderadores e administradores poden fixar un tema.';
$helptxt['allow_guestAccess'] = 'O desseleccionar esta opcion limitase ós visitantes a facer solamente as funcións mais basicas - ingresar, se rexistrar, lembrar contrasinal, etc - no teu foro.  Isto NON é o mesmo que deshabilitar o acceso dos visitantes ós foros.';
$helptxt['userLanguage'] = 'Ó activar esta opcion, os usuarios poden selecciona-lo arquivo de idioma que usasen.
	Isto non afectase a seleccion predeterminada.';
$helptxt['trackStats'] = 'Estadisticas:<br />Isto permite ós usuarios ve-los ultimos mensaxes, e témalos mais populares do teu foro de mensaxes.
	Tamen mostra varias estadisticas, como o maximo de usuarios conectados ó mesmo tempo, novos usuarios, e novos temas.<hr />
	Hits:<br />Agrega outra columna á pagina de estadisticas co numero de hits no teu foro.';
$helptxt['titlesEnable'] = 'Activando os Titulos Personalizados lle permitira ós usuarios que conten co permiso respectivo, o especificar un titulo especial por eles mesmos.
	este amosásese debaixo do nome.<br /><i>ex.:</i><br />Omar<br />Saiya-jin';
$helptxt['topbottomEnable'] = 'Isto agregase os botóns ir arriba e abaixo, para que os usuarios poidan ir a parte superior e inferior da pagina sen
	facer scroll.';
$helptxt['onlineEnable'] = 'Est amosa unha imaxe indicando se o usuario esta conectado ou non.';
$helptxt['todayMod'] = 'Isto amosase \'Hoxe\' ou \'Onte\' en vez da data.';
$helptxt['enablePreviousNext'] = 'Isto amosase unha liga ó tema anterior e ó seguinte.';
$helptxt['pollMode'] = 'Isto especifica se as sondaxes estan activadas ou non: Se as sondaxes estan desactivadas, calquera sondaxe xa existente sera oculta
		do listado de temas. Podes escolle-lo continuar amosando témalos sen a súa sondaxe asociada a eles seleccionando
		&quot;Amosar Sondaxes existentes como Temas&quot;.Para seleccionar quen pode publicar sondaxes, ver sondaxes, e outras cousas, podes
		permitir ou restrinxi-los seus permisos. Lembranza isto se as sondaxes non estan funcionando.';
$helptxt['enableVBStyleLogin'] = 'Isto amosase un cadro para ingresa-lo teu usuario/contrasinal a parte inferior do foro de mensaxes.';
$helptxt['enableCompressedOutput'] = 'Esta opcion compactase a saída para reduci-lo consumo de ancho de banda,
	pero precisa que zlib este instalado no servidor.';
$helptxt['databaseSession_enable'] = 'Esta opcion fai uso da base de datos para gardar informacion de sesións - é mellor para servidores coa carga balanceada, pero axuda con tódolos problemas de timeout e pode facer mais rapido ó foro.  Non funciona se session.auto_start esta activado.';
$helptxt['databaseSession_loose'] = 'Activando esta opcio decrementara o ancho de banda que consome o teu foro, e fai que ó facer <i>click</i> en atras non recargue a pagina - o malo disto é que os (novos) iconas non se actualizasen, entre outras cousas. (a menos que fagas <i>click</i> nesa pagina eb vez de regresar a ela.)';
$helptxt['databaseSession_lifetime'] = 'Este é o numero de segundos que durasen as sesións despues que non sexan accesadas.  Se unha sesion non é accesada por moito tempo, se di que ha &quot;expirado&quot;.  Recoméndase calquera valor arriba de 2400.';
$helptxt['enableErrorLogging'] = 'Isto rexistrase (log) calquera erro, como un ingreso de usuario invalido, para que poidas ver que saio mal.';
$helptxt['allow_disableAnnounce'] = 'This will allow users to opt out of notification of topics you announce by checking the &quot;announce topic&quot; checkbox when posting.';
$helptxt['disallow_sendBody'] = 'Esta opcion elimina a posibilidade de recibi-lo texto das respostas e os mensaxes nos emails de notificacion.<br /><br />É comun que os usuarios, por erro, respondan ós emails de notificacion, o que significa na mayoria das veces que o webmaster recibe a resposta.';
$helptxt['compactTopicPagesEnable'] = 'Isto amosase como se amosase a seleccion das paginas.<br /><i>Ex.:</i>
		&quot;3&quot; para amosar: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; para amosar: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Isto amosase a parte inferior do foro, o tempo en segundos que SMF preciso para crea-la pagina.';
$helptxt['removeNestedQuotes'] = 'Isto amosase solamente unha cita do mensaxe en cuestion, pero non calquera outro que estea presente doutros mensaxes.';
$helptxt['simpleSearch'] = 'Isto amosase unha forma de busqueda simple, cunha liga a unha forma para busquedas avanzadas.';
$helptxt['max_image_width'] = 'Isto te permitira establecer o maximo dunha imaxe publicada. Imagenes mais pequenas que o maximo non son afectadas.';
$helptxt['mail_type'] = 'Esta opcion permítete escoller entre usa-las opcións por defecto de PHP, ou sobreescribirlas con SMTP.  PHP non soporta o usar autentificacion con SMTP (que na actualidade, moitos servidores requíreno) asi que, de lo precisa, selecciona SMTP.  Lembranza que SMTP pode ser mais lento, e algúns servidores non toman nomes de usuarios e contrasinais.<br /><br />Non precisas enche-los valores de SMTP, se esta opcion esta utilizando os valores por defecto de PHP.';
$helptxt['attachmentEnable'] = 'Os arquivos adjuntos son arquivos que os usuarios poden subir, e engadir a un mensaxe.<br /><br />
		<b>Revisa-la extension</b>:<br /> &iquest;Desexas revisa-la extension dos arquivos?<br />
		<b>Extensións permitidas</b>:<br /> Podes especifica-las extensións permitidas para os arquivos adjuntos.<br />
		<b>Directorio</b>:<br /> A ruta ó teu directorio de arquivos adjuntos<br />(exemplo: /home/sitios/tusitio/www/foro/attachments)<br />
		<b>Tamaño maximo do directorio de arquivos adjuntos</b> (en KB):<br /> Selecciona o tamaño maximo que pode te-lo directorio de arquivos adjuntosque tan grande ser&aacute, incluíndo tódolos arquivos dentro desta.<br />
		<b>Tamaño maximo de tódolos arquivos adjuntos no mensaxe</b> (en KB):<br /> Selecciona o tamaño maximo de tódolos arquivos adjuntos do mensaxe.  Se é menor que o limite de cada arquivo engado, este sera o limite.<br />
		<b>Tamaño maximo de cada arquivo engado</b> (en KB):<br /> Selecciona o tamaño maximo de cada arquivo engado.<br />
		<b>Numero maximo de arquivos adjuntos por mensaxe</b>:<br /> Selecciona o numero de arquivos adjuntos que un usuario pode subir, por mensaxe.<br />
		<b>Amosa-los arquivos adjuntos como imagenes nos mensaxes</b>:<br /> Se o arquivo subido é unha imaxe, esta amosásese debaixo do mensaxe.<br />
		<b>Axusta-lo tamaño das imagenes cando se amosen debaixo dos mensaxes</b>:<br /> Se a opcion anterior foi seleccionada, isto gardase un attachment separado (mais pequeno) para o thumbnail para aforrar ancho de banda.<br />
		<b>Ancho e Alto maximos dos thumbnails</b>:<br /> Usado solamente coa opcion &quot;Axusta-lo tamaño das imagenes cando se amosen debaixo dos mensaxes&quot;, o ancho e alto maximos ó que se lle reduciran o tamaño ás imaxe. Se lles cambiar&acute; o tamaño proporcionalmente.';
$helptxt['karmaMode'] = 'Karma é unha funcion que mostra a popularidad dun usuario Os usuarios, se teñen o permiso correspondente, poden
		\'aplaudir\' or \'castigar\' a outros usuarios, que é como a súa popularidad é calculada. Podes cambia-lo
		numero de mensaxes necesarios para ter &quot;karma&quot;, o tempo entre castigos ou aplausos, e se os administradores
		teñen que agardar este tempo tamen.<br /><br />O que grupos de usuarios poidan castigar a outros contoulla a traves
		dun permiso. Se tes problemas ó tratar de facer funcionar esta opcion para todo mundo, deberias revisar novamente os teus permisos.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'O calendario pode ser usado para amosar aniversario, ou momentos importantes no teu foro.<br /><br />
		<b>Amosar dias como enlaces a \'Publicar evento\'</b>:<br />Isto permítelle ós usuarios publicar eventos para ese día, cando eles fagan <i>click nesa data</i><br />
		<b>Amosar numeros de semana</b>:<br />Amosar cal semana do ano é.<br />
		<b>Maximo de dias adiantados no indice do foro</b>:<br />Se lle pos 7, tódolos eventos da proxima semana amosásense.<br />
		<b>Amosar dias festivos no indice do foro</b>:<br />Mostra os dias festivos do día de hoxe nunha barra do calendario no indice do foro.<br />
		<b>Amosar aniversario no indice do foro</b>:<br />Mostra os aniversario do día de hoxe nunha barra do calendario no indice do foro.<br />
		<b>Amosar eventos no indice do foro</b>:<br />Mostra os eventos do día de hoxe nunha barra do calendario no indice do foro.<br />
		<b>Foro default onde se publicasen</b>:<br />&iquest;Cal é o foro de default no que se publicasen os eventos?<br />
		<b>Ano minimo</b>:<br />Selecciona o &quot;primeiro&quot; ano na lista do calendario.<br />
		<b>Ano maximo</b>:<br />Selecciona o &quot;ultimo&quot; ano na lista do calendario<br />
		<b>Color para os aniversario</b>:<br />Selecciona o color do texto cando se amosen aniversario<br />
		<b>Color para os eventos</b>:<br />Selecciona o color do texto cando se amosen eventos<br />
		<b>Color para dias festivos</b>:<br />Selecciona o color do texto cando se amosen dias festivos<br />
		<b>Permitir que os eventos esténdanse varios dias</b>:<br />Seleccionalo para permitir que os eventos expándanse multiples dias.<br />
		<b>Numero maximo de dias que un evento pode se expandir</b>:<br />Selecciona o maximo numero de dias que un evento pode se expandir.<br /><br />
		Lembranza que o uso do calendario (publicar eventos, ver eventos, etc.) esta controlado polos permisos especificados na pantalla de permisos.';
$helptxt['localCookies'] = 'SMF usa cookies para gardar informacion ó ingresar, na computadora do usuario.
	As cookies poden se gardar globalmente (<i>tusitio.com</i>) ou localmente (<i>tusitio.com/ruta/ó/foro</i>).<br />
	Selecciona esta opcion se estas tendo problemas con usarios que estan sinto sacados do teu foro de mensaxes automaticamente.<hr />
	Cookoes almacenadas globalmente son menos seguras cando se usan nun servidor web compartido (como Tripod).<hr />
	Cookies locais non funcionan afora do directorio do foro, asi que se o teu foro esta almacenado en <i>www.tusitio.com/foro</i>, paginas como <i>www.tusitio.com/index.php</i> non poden accesar a informacion da conta.
	Especialmente cando se usa SSI.php, recoméndase o uso de cookies globais.';
$helptxt['enableBBC'] = 'O seleccionar esta opcion lle permitira ós teus usuarios o poder utilizar Bulletin Board Code (BBC) no foro, permitiendoles lle dar formato ás súas mensaxes con imagenes, estilos de texto, e mais.';
$helptxt['time_offset'] = 'Not all forum administrators want their forum to use the same time zone as the server upon which it is hosted. Use this option to specify a time difference (in hours) from which the forum should operate from the server time. Negative and decimal values are permitted.';
$helptxt['spamWaitTime'] = 'Aqui podes selecciona-lo tempo de debe transcorrer entre publicacion de mensaxes. Isto pode se utilizar para evitar que as persoas fagan spam no teu foro, ó lles limitar que tan seguido poden publicar mensaxes.';

$helptxt['enablePostHTML'] = 'Isto permitira o publicar mensaxes tags basicos de HTML:
	&lt;b&gt;, &lt;ou&gt;, &lt;i&gt;, &lt;pre&gt;, &lt;blockquote&gt;, &lt;img src=&quot;&quot; /&gt;, &lt;a href=&quot;&quot;&gt;, e &lt;br /&gt;.';

$helptxt['themes'] = 'Aqui podes escoller se o usuario pode seleccionar temas, que tema sera usado polos convidados,
	entre varias opcións. Haz <i>click</i> en calquera los tema da dereita para cambia-lo seu configuracion.';
$helptxt['theme_install'] = 'Isto permítete instalar novos temas.  Podes lo face dende un directorio previamente creado, subindo o arquivo para o tema, ou copiando o tema de default.<br /><br />Toma en conta que o arquivo ou directorio debe te-lo arquivo de definicion <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Esta opcion lle permitira ós teus usuarios usar Flash dentro das súas mensaxes,
	como se fosen imagenes.  Isto é un posible risco de seguridade, aínda que poucos puideron lo explora.
	&iexcl;USALO BAIXO O TEU PROPIO RISCO!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Permite facer unha liga ás <a href="' . $scripturl . '?action=.xml;sa=news">Noticas Recentes</a>
	e datos similares.  Recoméndase que limíte-lo tamaño dos mensaxes/noticias porque cando os datos rss amósanse
	nalgúns clientes como Trillian, se trunca a informacion.';
$helptxt['hotTopicPosts'] = 'Cambia o numero de mensaxes nun tema necesarios para alcanza-lo estado de &quot;quente&quot; ou
	&quot;moi quente&quot;.';
$helptxt['globalCookies'] = 'Permite o uso de cookies independentes de subdominio.  Por exemplo, se...<br />
	A túa sitio esta en http://www.simplemachines.org/,<br />
	E o teu foro esta en http://foro.simplemachines.org/,<br />
	Usando esta modificacion, te permitira accesar as cookies do foro na túa sitio.';
$helptxt['securityDisable'] = 'Isto <i>desactiva</i> a revision adicional de contrasinal para accede-la seccion de administracion. &iexcl;NON é recomendable!';
$helptxt['securityDisable_why'] = 'Esta é a túa contrasinal actual. (a mesma que usas para ingresar.)<br /><br />O que teñas que la escribi axuda a nos asegurar que realmente desexes realiza-la tarefa administrativa que estes realizando,e que es <b>tu</b> realmente.';
$helptxt['emailmembers'] = 'Neste mensaxe podes usar algunhas &quot;variables&quot;.  estas son:<br />
	{$board_url} - O URL do teu foro.<br />
	{$current_estafe} - A hora actual.<br />
	{$member.email} - O correo electronico do usuario destino.<br />
	{$member.link} - Lígaa do usuario destino.<br />
	{$member.ide} - O IDE do usuario destino.<br />
	{$member.name} - O nome do usuario destino.  (maior personalizacion)<br />
	{$latest_member.link} - Liga ó ultimo usuario rexistrado.<br />
	{$latest_member.ide} - O IDE do ultimo usuario rexistrado.<br />
	{$latest_member.name} - O nome do ultimo usuario rexistrado.';
$helptxt['attachmentEncryptFilenames'] = 'Encripta-los nomes dos attachments permítete ter mais dun arquivo subido como attachment
	co mesmo nome. Para maior seguridade usa arquivos .php para baixa-los arquivos adjuntos.  Sen embargo, fai mais dificil reconstruír
	a base de datos se algo drastico acontece.';

$helptxt['failed_login_threshold'] = 'Especifica o numero de intentos fallidos de ingreso, antes de redireccionarlos á pantalla de recordatorio de contrasinais.';
$helptxt['oldTopicDays'] = 'Se esta opcion esta activada amosasesele ó usuario unha advertencia cando tente responder a un tema que non tivo novas respostas polo tempo especificado, en dias, nesta opcion. Pon 0 para desactivar esta funcion.';
$helptxt['edit_wait_time'] = 'Numero de segundos que deben transcorrer despues da publicacion dun mensaxe, para que se rexistre a data a ultima modificacion.';
$helptxt['edit_disable_time'] = 'Numero de minutos transcorridos permitidos antes de que un usuario non poida continuar editando un mensaxe que eles publicaron. Pon 0 para lo desactiva. <br /><br /><i>Note: Isto non tendra efecto nos usuarios que teñan o permiso para edita-los mensaxes doutros usuarios.</i>';
$helptxt['enableSpellChecking'] = 'Activa-la revision de ortografia. DEBES te-la libreria pspell instalada no teu servidor e configurado PHP para a utilice. O teu servidor ' . (function_exists('pspell_new') == 1 ? 'SE' : 'NON') . ' asemella que teña esta opcion configurada.';
$helptxt['lastActive'] = 'Especifica o numero de minutos nos que, antes dese tempo, un usuario séguese amosando activo no indice do foro. O default son 15 minutos.';

$helptxt['autoOptDatabase'] = 'Esta opcion optimiza automaticamente a base de datos cada X dias.  Especifica 1 para realizar unha optimizacion diaria.  Asimesmo, podes especificar un maximo numero de usuarios en linea, para que non sobrecárgue-lo teu servidor ou incomodes a moitos usuarios.';
$helptxt['autoFixDatabase'] = 'Isto arranxase automaticamente táboas na base de datos con problemas, e continuase como se nada acontecese.  Isto pode ser util, xa que a unica maneira de arranxar este tipo de problemas, é REPARANDO a táboa, e o teu foro non estara caído ata que te deas conta.  Envíaseseche un email cando isto aconteza.';

$helptxt['enableParticipation'] = 'Isto mostra un pequeno icona los tema en que o usuario publicou mensaxes.';

$helptxt['db_persist'] = 'Mantén a conexion activa para incrementa-lo rendemento.  Se a túa NON estas nun servidor dedicado, isto pode te causar problemas co teu provedor de hospedaje.';

$helptxt['queryless_urls'] = 'Isto cambia o formato dos URLS un pouco, para que sexan mais agradables para os servizos de busqueda (google, por exemplo).  Estes URLS se veran como, por exemplo: index.php/action_profile/ou_1.';
$helptxt['countChildPosts'] = 'Checking this option will mean that posts and topics in a board\'s child board will count toward its totals on the index pague.<br /><br />This will make things notably slower, but means that a parent with non posts in it won\'t show \'0\'.';
$helptxt['fixLongWords'] = 'Esta opcion divide as palabras que sexan mais longas de certa lonxitude, en partes, para que non destrúan a aparencia do foro. (no posible...)';

$helptxt['who_enabled'] = 'Esta opcion permítete activar ou desactiva-la posibilidade de que os usuarios vexan quen esta en linea navegando o foro, asi como o que estan facendo.';

$helptxt['recycle_enable'] = '&quot;Recicla&quot; temas e mensaxes eliminados ó foro especificado.';

$helptxt['enableReportPM'] = 'This option allows your users to report persoal messages they receive to the administration team. This may be useful in helping to track down any abuse of the persoal messaging system.';
$helptxt['max_pm_recipients'] = 'This option allows you to set the maximum amount of recipients allowed in a persoal message sent by a forum member. This may be used to help stop spam abuse of the PM system. Note that users with permission to send newsletters are exempt from this restriction. Set to zero for non limit.';
$helptxt['pm_posts_verification'] = 'This setting will force users to enter a code shown on a verification image each estafe they are sending a persoal message. Only users with a pos count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['pm_posts_per_hour'] = 'This will limit the number of persoal messages which may be sent by a user in a one hour period. This does not affect admins or moderators.';

$helptxt['default_personalText'] = 'Establece o texto por defecto que tendran os usuarios, como su &quot;texto persoal.&quot;';

$helptxt['modlog_enabled'] = 'Gardar logs de tódalas accións dos moderadores.';

$helptxt['guest_hideContacts'] = 'Se esta opcion esta seleccionada as direccións de email e os detalles dos mensaxeiros (ICQ, E!, MSN)
	de tódolos teus usuarios ocultasensele ós visitantes do teu foro';

$helptxt['registration_method'] = 'Esta opcion determina que metodo de rexistro é usada para as persoas que desexen se unir ó teu foro. Podes lo selecciona entre:<br /><br />
	<ul>
		<li>
			<b>Rexistro Desactivado:</b><br />
				Desactiva o proceso de rexistro, con este metodo ninguén pode se rexistrar no teu foro.<br />
		</li><li>
			<b>Rexistro Inmediato</b><br />
				Os novos usuarios poden ingresar e publicar inmediatamente despues de se rexistrar no teu foro.<br />
		</li><li>
			<b>Activacion de Usuario</b><br />
				Cando esta opcion esta activada calquera usuario que se rexistre no teu foro tendra unha liga de activacio que s ele envíase por email que tendran que visitar antes que poidan se converter usuarios validos<br />
		</li><li>
			<b>Aprobaci&#243;n de Usuarios</b><br />
				Esta opcion hara que tódolos novos usuarios que se rexistren no teu foro precisen ser aprobados por un administrador para que se poidan volver usuarios validos.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Cando esta opcion esta seleccionada tódolos usuarios que cambien o seu direccion de email no seu perfil tendran que reactiva-las súas conta dende o email envíado á nova direccion';
$helptxt['send_welcomeEmail'] = 'Cando esta opcion esta seleccionada a tódolos novos usuarios envíaseselles un email de benvida ó teu foro';
$helptxt['password_strength'] = 'This setting determines the strength required for passwords selected by your forum users. The morre &quot;strong&quot; the password, the harder it should be to compromise uesr accounts.
	The possible settings are:
	<ul>
		<li><b>Low:</b> The password must be at least four characters long.</li>
		<li><b>Medium:</b> The password must be at least eight characters long, and can not be part of a users name or email address.</li>
		<li><b>High:</b> As for medium, except the password must also contain a mixture of upper and lower case letters, and at least one number.</li>
	</ul>';

$helptxt['coppaAge'] = 'O valor especificado neste cadro determinase a idade minima que os novos usuarios deben ter para que s elle conceda acceso inmediato ós foros.
	Durante o proceso de rexistro se lles pedira que confirmen se son maiores a esa idade, e de non lo se, pode ou s ele nega-la súa solicitude, ou suspendarla agardando pola aprobacion dos pais - dependendo do tipo de restriccion escollida.
	Se se pon 0 neste valor, entón tódalas restricións de idade ignorásense.';
$helptxt['coppaType'] = 'Se as restricións de idade estan activas, entón este valor determinase que pasase cando un usuario mais xoven da idade minima tenta se rexistrar no teu foro. Hai dúas posibilidades:
	<ul>
		<li>
			<b>Rexeita-la súa solicitude de rexistro:</b><br />
				A calquera novo usuario que non cumpra coa idade minima se lle rechazaraa a súa solicitude de rexistro inmediatamente.<br />
		</li><li>
			<b>Requirir aprovacion do Pai ou Titor</b><br />
				A calquera novo usuario que non cumpra coa idade minima a súa cuentra marcásese como agardando autorizacion, e amosasesele unha forma na que os seus pais ou titores deben da-lo permiso para que se converta nun usuario do foro.
				A eles tamen s elle amosase unha forma cos datos de contacto que se especificaron na pantalla de configuracion, para que poidan envia-la forma ó administrador por correo ou fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Os cadros de contacto son requiridos para que as formas que outorgan o permiso ós usuarios por debaixo da idade minima poida ser envíada ó administador do foro. Estes detalles seran amosados a tódolos usuarios debaixo da idade minima, e son necesarios para a aprobacion do pai ou titor. Polo menos se debe prover unha direccion postal ou un numero de fax.';

$helptxt['allow_hideOnline'] = 'Cando esta opcion esta seleccionada tódolos usuarios poder&aacuten lle ocultar ós demas usuarios se estan conectados (agás ós administradores). Se esta desactivado, solamente os usuarios que poden modera-lo foro poden oculta-la súa presenza. É importante mencionar que deshabilitando esta opcion non cambia o estado de ningun usuario existente - simplemente lles impide se ocultar no futuro.';
$helptxt['allow_hideEmail'] = 'Cando esta opcion esta seleccionada os usuarios poden escoller oculta-lo seu direccion email doutros usuarios. Sen embargo, os administradores sempre poden ve-la direccion email de calquera usuario.';

$helptxt['latest_support'] = 'Este panel te mostra algúns de problemas e preguntas mais comúns da configuracion do teu servidor. Non te preocupes, esta informacion non se rexistra en ningun momento.<br /><br />Se permanece como &quot;Obtendo informacion de soporte...&quot;, a túa computadora moi probablemente non se pode conectar a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Aqui podes ver algúns dos mais populares mods, asi como algúns paquetes ou mods aleatorios, con instalacións rapidas e sinxelas.<br /><br />Se esta seccion non se pode amosar, probablemente a túa computadora non se pode conectar a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Esta area mostra algúns dos ultimos e mais populares temas de <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  Pode que non se amose correctamente se a túa computadora non pode atopar <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Pola túa seguridade, a resposta á túa pregunta (asi como a túa contrasinal) esta encriptada dunha maneira na que SMF pode te dicir solamente se esta correcta, asi, jamas podra te dicir (&iexcl;ou a alguén mais, que é o importante!) cal é a túa resposta ou a túa contrasinal.';
$helptxt['moderator_why_missing'] = 'Debido a que a moderacion realízase en cada foro, debes facer a un usuario moderador dende a <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">interface de manexo de foros</a>.';

$helptxt['permissions'] = 'A traves dos permisos permíteslles ou impides ós grupos facer cousas especificas.<br /><br />Podes modificar varios foros ó mesmo tempo usando as casiñas, ou busca nos permisos por un grupo especifico ó facer click en \'Modificar.\'';
$helptxt['permissions_board'] = 'Se un foro especifícase como \'Global,\' significa que o foro non tendra permisos especiais.  \'Local\' significa que tendra os seus propios permisos - separados dos globais.  Isto permítete ter un foro que ten mais (ou menos) permisos que outro, sen que sexa necesario que los especifique para cada un dos foros.';
$helptxt['permissions_quickgroups'] = 'Estes permítente usa-la configuracion &quot;default&quot; de permisos - estandar significa \'nada especial\', restrictivo significa \'como visitante\', moderador significa \'que un moderador ten\', e por ultimo \'mantemento\' significa permisos moi próximos ós dun administrador.';
$helptxt['permissions_deny'] = 'Denying permissions can be useful when you want take away permission from certain members. You can add a membergroup with a \'deny\'-permission to the members you wish to deny a permission.<br /><br />Use with care, a denied permission will stay denied non matter what other membergroups the member is in.';
$helptxt['permissions_postgroups'] = 'Enabling permissions for pos count based groups will allow you to attribute permissions to members that have posted a certain amount of messages. The permissions of the pos count based groups are <em>added</em> to the permissions of the regular membergroups.';
$helptxt['permissions_by_board'] = 'Enabling this option will allow you to, for each board for each membergroup, set different permissions. By default a board uses global permissions, but with this option enabled, you can switch a board to local permission settings. This provides a very sophisticated way to manage your permissions.';
$helptxt['membergroup_guests'] = 'The Guests membergroup are all users that are not logged in.';
$helptxt['membergroup_regular_members'] = 'The Regular Members are all members that are logged in, but that have non primary membergroup assigned.';
$helptxt['membergroup_administrator'] = 'The administrator can, per definition, do anything and see any board. There are non permission settings for the administrator.';
$helptxt['membergroup_moderator'] = 'The Moderator membergroup is a special membergroup. Permissions and settings assigned to this group apply to moderators but only <em>on the boards they moderate</em>. Outside these boards they\'re just like any other member.';
$helptxt['membergroups'] = 'En SMF hai dous tipos de grupos ós que os teus usuarios poden pertencer. Estes son:
	<ul>
		<li><b>Grupos Regulares:</b> Un grupo regular é un grupo no que os usuarios non se lles ingresa automaticamente. Para ingresar a un usuario ó grupo simplemente ve ó seu perfil e haz <i>click</i> en &quot;Configuracion da conta&quot;. Ahi podes lle asignar tódolos grupos regulares ós que desexas que pertenza.</li>
		<li><b>Grupos de Mensaxes:</b> A diferenza dos grupos regulares, este tipo de grupos non poden ser asignados. En vez diso, os usuarios son asignados automaticamente a un grupo, cando alcanzan o minimo de mensaxes publicados necesarios para pertencer a dito grupo.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Podes editar eses eventos facendo click no asterisco vermello (*) ó lado dos seus nomes.';

$helptxt['maintenance_general'] = 'Dende aqui, podes optimizar tódalas túas táboas (&iexcl;las face mais pequenas e mais rapidas!), asegurate de te-las versións mais novas, atopar calquera erro que poida estar afectando o teu foro, recontar totais, e baleirar os logs.<br /><br />Os dous ultimos podes los ignora a menos que algo este fallando, pero non afecta en nada lo face.';
$helptxt['maintenance_backup'] = 'Esta area permítete gardar unha copia de tódolos mensaxes, configuracións, usuarios, e outra informacion do teu foro nun arquivo moi grande.<br /><br />É recomendado lo face a miúdo, probablemente semanalmete, por seguridade.';
$helptxt['maintenance_rot'] = 'Isto permítete <b>completa</b> e <b>irrevocablemente</b> borrar temas vellos. É recomendable que tentes facer un apoio primeiro, en caso que accidentalmente borres algo que non desexabas.<br /><br />Usa esta opcion con coidado.';

$helptxt['avatar_allow_server_stored'] = 'Isto permítelle ós teus usuarios seleccionar avatares almacenados no teu servidor. Estan, xeralmente, no mesmo lugar que SMF dentro do directorio avatars.<br />Como tip, se creas subdirectorios nese directorio, podes facer &quot;categorias&quot; de avatares.';
$helptxt['avatar_allow_external_url'] = 'Con esta opcion activada, os teus usuarios poden especificar un URL para os seus propios avatares. A desvantaxe disto é, nalgúns casos, poidan utilizar imagenes moi grandes ou que non desexes que utilicen no teu foro.';
$helptxt['avatar_download_external'] = 'Con esta opcion activada, descargásese o avatar do URL especificado polo usuario. Se o proceso foi realizado con exito, o avatar tratásese como un avatar subido polo usuario.';
$helptxt['avatar_allow_upload'] = 'Esta opcion é similar á de &quot;Permitir ós usuarios seleccionar un avatar externo&quot;, Agás que tes un mellor control dos avatares, é mais facil lles cambia-lo tamaño, e os teus usuarios non precisan ter un lugar onde hospeda-los seus avatares..<br /><br />Sen embargo, a desvantaxe é que pode consumir moito espazo no teu servidor.';
$helptxt['avatar_download_png'] = 'Os PNG son mais grandes, pero ofrecen unha mellor calidade de compresion. De non estar seleccionado, se usaraa no seu lugar JPEG - que xeralmente é de menor tamaño, pero con menor calidade.';

$helptxt['disableHostnameLookup'] = 'Isto desactiva a busqueda de nomes de servidores, que nalgúns servidores é moi lento.  É importante mencionar que isto hara a restriccion de accesos menos eficaz.';

$helptxt['search_weight_frequency'] = 'Os factores de peso úsanse para determina-la relevancia dos resultados da busqueda. Cambia estes factores de peso para que coincida coas cousas que son importantes especificamente para o teu foro. Por exemplo, un foro dun sitio de noticias, pode precisar un valor relativamente alto para \'antig&uuml;idade do &uacuteltimo mensaxe que coincido\'. Tódolos valores son relativos, relacionados entre se, e deben ser enteiros positivos.<br /><br />Este factor conta a cantidade de mensaxes que coincidiron e divídeos polo numero total de mensaxes dentro do tema.';
$helptxt['search_weight_age'] = 'Os factores de peso úsanse para determina-la relevancia dos resultados da busqueda. Cambia estes factores de peso para que coincida coas cousas que son importantes especificamente para o teu foro. Por exemplo, un foro dun sitio de noticias, pode precisar un valor relativamente alto para \'antig&uuml;idade do &uacuteltimo mensaxe que coincido\'. Tódolos valores son relativos, relacionados entre se, e deben ser enteiros positivos.<br /><br />Este factor cualifica a antig&uuml;idade do ultimo mensaxe dentro dun tema. Entre mais recente é, maior o seu puntuacion.';
$helptxt['search_weight_length'] = 'Os factores de peso úsanse para determina-la relevancia dos resultados da busqueda. Cambia estes factores de peso para que coincida coas cousas que son importantes especificamente para o teu foro. Por exemplo, un foro dun sitio de noticias, pode precisar un valor relativamente alto para \'antig&uuml;idade do &uacuteltimo mensaxe que coincido\'. Tódolos valores son relativos, relacionados entre se, e deben ser enteiros positivos.<br /><br />Este factor esta baseado no tamaño do tema. Entre mais mensaxes teña un tema, maior o seu puntuacion.';
$helptxt['search_weight_subject'] = 'Os factores de peso úsanse para determina-la relevancia dos resultados da busqueda. Cambia estes factores de peso para que coincida coas cousas que son importantes especificamente para o teu foro. Por exemplo, un foro dun sitio de noticias, pode precisar un valor relativamente alto para \'antig&uuml;idade do &uacuteltimo mensaxe que coincido\'. Tódolos valores son relativos, relacionados entre se, e deben ser enteiros positivos.<br /><br />Este factor revisa se se atopan coincidencias no asunto do tema.';
$helptxt['search_weight_first_message'] = 'Os factores de peso úsanse para determina-la relevancia dos resultados da busqueda. Cambia estes factores de peso para que coincida coas cousas que son importantes especificamente para o teu foro. Por exemplo, un foro dun sitio de noticias, pode precisar un valor relativamente alto para \'antig&uuml;idade do &uacuteltimo mensaxe que coincido\'. Tódolos valores son relativos, relacionados entre se, e deben ser enteiros positivos.<br /><br />Este factor revisa se se atopan coincidencias no primeiro mensaxe do tema.';
$helptxt['search_weight_sticky'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a topic is sticky and increases the relevancy score if it is.';
$helptxt['search'] = 'Aqui podes axusta-la configuracion da funcion de busqueda.';
$helptxt['search_why_use_index'] = 'A search index can greatly improve the performance of searches on your forum. Especially when the number of messages on a forum grows bigger, searching without an index can take a long estafe and increase the pressure on your database. If your forum is bigger than 50.000 messages, you might want to consider creating a search index to assure peak performance of your forum.<br /><br />Note that a search index can take up quite some space. A fulltext index is a built-in index of MYSQL. It\'s relatively compact (approximately the same size as the message table), but a lot of words aren\'t indexed and it can, in some search queres, turn out to be very slow. The custom index is often bigger (depending on your configuration it can be up to 3 estafes the size of the messages table) but it\'s performance is better than fulltext and relatively stable.';

$helptxt['see_admin_ip'] = 'Ós administradores e moderadores amosansélle-las IPS para facilita-la moderacion e para facer mais facil o rastrexo de persoas indesexables. Lembranza que as direccións IP non sempre son identificatorias, e que as IPS cambian periodicamente.<br /><br />Tamen s elle permite ós usuarios ve-la súa propia IP.';
$helptxt['see_member_ip'] = 'O teu direccion IP é amosada solamente a ti e ós moderadores. Lembranza que esta informacion non é identificatoria e moitas IPS cambian periodicamente.<br /><br />Non podes ve-las IPS doutros usuarios e eles non poden ve-la túa.';

$helptxt['ban_cannot_post'] = 'The \'cannot post\' restriction turns the forum into read-only mode for the banned user. The user cannot create new topics, or reply to existing ones, send personal messages or vote in polls. The banned user can however still read personal messages and topics.<br /><br />A warning message is shown to the users that are banned this way.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Post Settings</b><br />
			Modify the settings related to the posting of messages and the way messages are shown. You can also enable the spell check here.
		</li><li>
			<b>Bulletin Board Code</b><br />
			Enable the code that show forum messages in the right layout. Also adjust which codes are allowed and which aren\'t.
		</li><li>
			<b>Censored Words</b>
			In order to keep the language on your forum under control, you can censor certain words. This function allows you to convert forbidden words into innocent versions.
		</li><li>
			<b>Topic Settings</b>
			Modify the settings related to topics. The number of topics per page, whether stickey topics are enabled or not, the number of messages needed for a topic to be hot, etc.
		</li>
	</ul>';

?>