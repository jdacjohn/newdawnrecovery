<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = 'array()';

$txt[1006] = 'Tancar finestra';

$helptxt['manage_boards'] = '
<b>Editar f&ograve;rums</b><br />
En aquest missatge pots crear/reordenar/eliminar f&ograve;rums, i les categories
sobre ellos. Per exemple, si tens una amplia web
que ofereix informaci&oacute; d\'&quot;Esports&quot;, &quot;Cotxes&quot; i &quot;M&uacute;sica&quot;,
aquestes han de ser les categories de m&eacute;s alt nivell que has de crear. Sota d\'elles,
probablement voldr&agrave;s crear &quot;sub-categories&quot; jer&agrave;rquiques,
o &quot;F&ograve;rums&quot; per a contenir temes dintre de cadascun. Es una jerarquia simple, amb aquesta estructura: <br />
<ul>
  <li>
    <b>Esports</b>
    &nbsp;- Una &quot;categoria&quot;
  </li>
  <ul>
    <li>
      <b>Futbol</b>
      &nbsp;- Un f&ograve;rum en la categoria d\'&quot;Esports&quot;
    </li>
    <ul>
      <li>
        <b>Primera divisi&oacute;</b>
        &nbsp;- Un subf&ograve;rum dins del f&ograve;rum de &quot;Futbol&quot;
      </li>
    </ul>
    <li>
	  <b>Nataci&oacute;</b>
      &nbsp;- Un f&ograve;rum dins de la categoria d\'&quot;Esports&quot;
    </li>
  </ul>
  <li>
    <b>Cotxes</b>
    &nbsp;- Una altra &quot;categoria&quot;
  </li>
  <ul>
    <li>
      <b>Audi</b>
      &nbsp;- Un f&ograve;rum en la categoria d\'&quot;Audi&quot;
    </li>
  </ul>
</ul>
Les Categories et permeten organitzar el f&ograve;rum en temes (&quot;Esports, Cotxes&quot;),
i els &quot;F&ograve;rum&quot; dins d\'ells s&oacute;n els temes en els quals els membres poden
publicar missatges. En l\'exemple anterior, un usuari interessat en un Audi,
publicaria un missatge en el f&ograve;rum &quot;Cotxes->Audi&quot;. Las Categories permeten
trobar r&agrave;pidament quins s&oacute;n el seus interessos: en lloc de &quot;Botiga&quot; s\'ha de tenir
botiga de &quot;Hardware&quot; i &quot;Electrodom&grave;stics&quot; a les que es pot anar.
Aix&ograve; simplifica la teva cerca per &quot;Pantalla&quot;, degut a que pots anar a la &quot;categoria&quot; de
botiga de Hardware en lloc de a la de botiga d\'Electrodom&egrave;stics (on trobaries televisions de pantalla
plana en lloc de, probablement, protectors de pantalla per a l\'ordinador).<br />

Com es pot percebrer dalt, un f&ograve;rum &eacute;s una peça important dins de la categoria.
Si vols discutir referent a &quot;Audis&quot;, has d\'anar a la categoria &quot;Cotxes&quot; i anar al f&ograve;rum
&quot;Audi&quot; per a publicar els teus missatges referent del que opinis del tema.<br />
Las funcions administratives en aquest men&uacute; s&oacute;n per a crear nous f&ograve;rums en cada
categoria, reordenar-les (posar &quot;Audi&quot; sota de &quot;Ferrari&quot;) o esborrar un
f&ograve;rum completamente.';

$helptxt['edit_news'] = '<b>Editar Not&iacute;cies del f&ograve;rum</b><br />
Aix&ograve; permet especificar el text dels elements de les not&iacute;cies mostrades en la p&agrave;gina &iacute;ndex del f&ograve;rum.
Afegeix qualsevol element que desitgis (ex., &quot;Nova versi&oacute; del portal http://ParlaJapones.org&quot;). Cada element de les not&iacute;cies es separa
amb un \'enter\'';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Veure tots els membres</b><br />
			Veure tots els membres en el f&ograve;rum. Hi ha una llista amb hipervincles a tots els noms dels
			membres. Pots clicar en qualsevol dels membres per a obtenir m&eacute;s detalls d\'aquest (lloc web, edat, 
			sexe, etc) i, com Administrador, pots modificar qualsevol d\'aquestes dades. Tens un control total sobre els 
			membres, incloent la possibilitat d\'esborrar-los del f&ograve;rum.<br /><br />
		</li>
		<li>
			<b>Esperant aprovaci&oacute;</b><br />
			Aquesta secci&oacute; es mostra nom&eacute;s si tens activat que els administradors aprobin tots els nous registres d\'usuaris. Qualsevol que es registri per a unir-se al
			f&ograve;rum haur&agrave; d\'esser aprovat per un administrador per a esdevenir un usuari complert. La secci&oacute; mostra tots aquells usuarios que
			estan esperant aprovaci&oacute;, junt al seu correu i adre&ccedil;a IP. Pots escollir ja sigui acceptar o rebutjar (esborrar)
			qualsevol usuari de la llista al seleccionar el quadre al costat de l\'usuari, i seleccionant l\'acci&oacute; del quadre colapsable al final
			de la pantalla. Quan rebutgis un usuari, pots escolllir esborrar l\'usuari amb o sense notificaci&oacute; de la decisi&oacute;.<br /><br />
		</li>
		<li>
			<b>Esperant activaci&oacute;</b><br />
			Aquesta secci&oacute; estar&agrave; visible nom&eacute;s si est&agrave; activat en el f&ograbe;rum el que els usuaris activin els seus comptes. En aquesta secci&oacute; es llistaran tots els
			usuaris que no hagin activat els seus comptes. Des d\'aquesta pantalla pots escollir acceptar, rebutjar o recordar-lis als
			usuaris amb registres pendents. Com en la opci&oacute; anterior, pots escollir enviar-li un correu a l\'usuari per a informar-li de l\'acci&oacute; presa.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Membres amb acc&eacute;s prohibit</b><br />
	SMF permet &quot;banejar&quot; o &quot;restringir l\'acc&eacute;s&quot; a membres, per prevenir l\'acc&eacute;s a persones que han incomplert
	les normes del f&ograve;rum (fer spam, faltar al respecte, etc). Aix&ograve; permet restringir
	l\'acc&eacute;s als membres que no desitgis m&eacute;s en el f&ograve;rum. Com administrador, quan veus els missatges,
	pots veure la IP de cada usuari que va utilizar al publicar el missatge. En la llista d\'accessos prohibits,
	simplement introdueix l\'adre&ccedil;a IP, guarda els canvis i ells ja no podran accedir al f&ograve;rum des d\'aquella IP.<br />
	Tamb&eacute; pots restringir l\'acc&eacute;s d\'usuaris utilitzant la seva adre&ccedil;a de correu o el seu nom d\'usuari.';

$helptxt['modsettings'] = '<b>Config. i Opcions de \'Mods\' instal·lats</b><br />
	SMF t&eacute; alguns mods preinstal·lats. Pots activar-los o desactiva-rlos des d\'aquest men&uacute;.';

$helptxt['number_format'] = '<b>Format de Nombres</b><br />
	Pots ajustar com vols que siguin mostrats els nombres a l\'usuari. El format &eacute;s:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	On \',\' &eacute;s el car&agrave;cter utilitzat per a dividir els grups de milers, \'.\' &eacute;s el car&agrave;cter utilitzat com el punt decimal i el nombre de zeros indica la exactitud dels redondejos.';

$helptxt['time_format'] = '<b>Format d\'Hora</b><br />
	Pots ajustar com visualitzar l\'hora i la data. Hi ha moltes possibilitats, per&ograve; &eacute;s relativament f&agrave;cil.
	El format segueix les especificacions de la funci&oacute; <b>strftime</b> de PHP que es descriu a continuaci&oacute; (pots trobar m&eacute;s detalls a <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	Els seg&uuml;ents car&agrave;cters es recon&egrave;ixen en la cadena del format:<br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - nom abreujat del dia de la setmana <br />
	&nbsp;&nbsp;%A - nom complert del dia de la setmana <br />
	&nbsp;&nbsp;%b - nom abreujat del mes <br />
	&nbsp;&nbsp;%B - nom complert del mes <br />
	&nbsp;&nbsp;%d - dia del mes (01 a 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - el mateix que %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - dia del mes (1 a 31) <br />
	&nbsp;&nbsp;%H - hora utilitzant format de 24 hores (rang 00 a 23) <br />
	&nbsp;&nbsp;%I - hora utilitzant format de 12 horas (rang 01 a 12) <br />
	&nbsp;&nbsp;%m - mes com a nombre (01 a 12) <br />
	&nbsp;&nbsp;%M - minut com a nombre <br />
	&nbsp;&nbsp;%p - &quot;am&quot; o &quot;pm&quot; d\'acord a l\'hora actual<br />
	&nbsp;&nbsp;%R<b>*</b> - hora en format de 24 horas <br />
	&nbsp;&nbsp;%S - segons com a nombre decimal <br />
	&nbsp;&nbsp;%T<b>*</b> - hora actual, de la mateixa manera que %H:%M:%S <br />
	&nbsp;&nbsp;%y - any en format de 2 d&iacute;gits (00 a 99) <br />
	&nbsp;&nbsp;%Y - any en format de 4 d&iacute;gits <br />
	&nbsp;&nbsp;%Z - zona hor&agrave;ria o nom o abreujament <br />
	&nbsp;&nbsp;%% - car&agrave;cter \'%\'  <br />
	<br />
	<i>* No funciona en servidors Windows.</i></span>';

$helptxt['live_news'] = '<b>Anuncis en viu</b><br />
	Aquest quadre mostra els anuncis recentment actualitzats des de <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.
	Revisa-ho de tant en tant per estar al corrent d\'actualitzacions, noves versions i informacions importants de l\'equip de Simple Machines.';

$helptxt['registrations'] = '<b>Administraci&oacute; del Registre d\'Usuaris</b><br />
	Aquesta secci&oacute; cont&eacute; totes les funcions que poden ser necess&agrave;ries per a gestionar nous registres d\'usuaris en el f&ograve;rum. Cont&eacute; fins a tres
	seccions que s&oacute;n visibles depenent de la configuraci&oacute; del f&ograve;rum. Aquestes s&oacute;n:<br /><br />
	<ul>
        <li>
            <b>Registrar Nou usuari</b><br />
            Des d\'aquesta pantalla pots registrar nous comptes d\'usuari en nom seu. Aix&ograve; por ser &uacute;til en f&ograve;rums on el registre est&agrave; deshabilitat
            per a nous usuaris, o en casos en que l\'administrador desitgi crear un compte de prova. Si l\'opci&oacute; de requerir activaci&oacute; del compte
            est&agrave; seleccionada, se li enviar&agrave; un correu a l\'usuari amb una URL a la que s\'haur&agrave; d\'accedir abans de poder utilitzar-la. També, es pot
            seleccionar l\'enviar per correu a l\'usuari una nova contrasenya a la seva adre&ccedil;a de correu..<br /><br />
        </li>
		<li>
			<b>Editar Carta d\'Acceptaci&oacute; al registrar-se</b><br />
			Aix&ograve; permet establir el text de la carta d\'acceptaci&oacute; mostrada als membres quan estan en
			el proc&eacute;s de registre per a obtenir un compte en el f&ograve;rum.
			Pots canviar qualsevol text de la carta d\'acceptaci&oacute; original que s\'inclou en SMF.
		</li>
		<li>
			<b>Configuraci&oacute;</b><br />
			Aquesta secci&oacute; estar&agrave; visible nom&eacute;s si tens permisos per a administrar el f&ograve;rum. Des d\'aquesta pantalla es pot decidir el m&egrave;tode de registre
			que s\'utilitzar&agrave; en el f&ograve;rum, aix&iacute; com algunes altres configuracions.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Log de Moderaci&oacute;</b><br />
	Aquesta secci&oacute; permet als administradors estar al corrent de totes les accions de moderaci&oacute; que els moderadors han realitzat. Per assegurar-se que
	els moderadors no puguin eliminar las refer&egrave;ncies a les accions que ells han realitzat, les entrades no poden eliminar-se fins 24 hores despr&egrave;s de que l\'acci&oacute; s\'hagi realitzat.
	La columna \'objetos\' llista qualsevol variable associada amb l\'acci&oacute;.';
$helptxt['error_log'] = '<b>Log d\'Errors</b><br />
	El log d\'errors rastreja qualsevol error greu trobat per usuaris a l\'utilitzar el f&ograve;rum. Llista tots els errors per data, que pot ser utilitzada per a ordenar
	al clicar a la fletxa blanca al cant&oacute; de cada data. Tamb&eacute; es poden filtrar els errors clicant en la imatge al cant&oacute; de cada estad&iacute;stica d\'error. Aix&ograve;
	permet filtrar, per exemple, per usuari. Quan un filtre est&agrave; actiu, nom&eacute;s es mostraran els resultats que concordin amb el filtre.';
$helptxt['theme_settings'] = '<b>Configuraci&oacute; del Tema</b><br />
	Aquesta pantalla permet canviar la configuraci&oacute; espec&iacute;fica d\'un tema. Aquesta configuraci&oacute; inclou opcions com ara el directori dels temes i informació de URLs per&ograve; tamb&eacute;
    opcions que afecten al disseny del tema. La majoria dels temes tindran una varietat d\'opcions configurables per l\'usuari, permetent adaptar un tema per a satisfer les necessitats individuals del f&ograve;rum.';
$helptxt['smileys'] = '<b>Col·lecci&oacute; d\'emoticones</b><br />
	Aqu&iacute; pots afegir i eliminar emoticones aix&iacute; com conjunts d\'ells. Es important mencionar que si una emoticona sinclou en un conjunt, aquesta ha d\'estar en la resta de conjunts (d\'altra forma podria ser conf&uacute;s pels usuaris a l\'utilitzar altres conjunts).';
$helptxt['calendar'] = '<b>Administrar Calendari</b><br />
	Aqu&iacute; es pot modificar la configuraci&oacute; del calendari, aix&iacute; com afegir i eliminar els dies festius que apareixen en el calendari.';

$helptxt['serversettings'] = '<b>Configuraci&oacute; del Servidor</b><br />
	Aqu&iacute; pots realitzar la configuraci&oacute; principal del teu f&ograve;rum. Aquesta secci&oacute; inclou la configuraci&oacute; de la base de dades i URLs, aix&iacute; com altres
	elements importants de la configuraci&oacute; com la configuraci&oacute; del correu i la cax&eacute;. Ves amb cura a l\'editar aquestes configuracions perqu&egrave; un error
	podria deixar inaccessible el f&ograve;rum';

$helptxt['topicSummaryPosts'] = 'Permet especificar el nombre de missatges anteriors mostrats en el sumari de temes en la pantalla de respondre.';
$helptxt['enableAllMessages'] = 'Permet establir el nombre <em>m&agrave;xim<em> de missatges que ha de tenir un tema per a mostrar l\'enlla&ccedil; <i>tots</i>. Si s\'estableix el valor menor al de &quot;M&agrave;xim nombre de missatges a mostrar en una p&agrave;gina de Tema&quot; l\'&uacute;nic que s\'aconsegueix &eacute;s que mai es mostri, i si s\'estableix molt alt, pot relentir el f&ograve;rum.';
$helptxt['enableStickyTopics'] = 'Els missatges fixats s&oacute;n temes que perman&egrave;ixen  en la part superior de la llista de missatges.
	Normalment s\'utilitzen per a missatges importants. Nom&eacute;s els moderadors i els administradors poden fixar un tema.';
$helptxt['allow_guestAccess'] = 'El no seleccionar aquesta opci&oacute; limitar&agrave; als visitants a nom&eacute;s poder utilitzar les funciones m&eacute;s b&agrave;siques - ingressar, registrar-se, recordar contrasenya, etc - en el f&ograve;rum. Aix&ograve; NO &eacute;s el mateix que deshabilitar l\'acc&eacute;s dels visitants als f&ograve;rums.';
$helptxt['userLanguage'] = 'Amb l\'opci&oacute; activa, els usuaris podran seleccionar l\'idioma a utilitzar en els f&ograve;rums.
	No afecta a la selecci&oacute; predeterminada.';
$helptxt['trackStats'] = 'Estad&iacute;stiques:<br />Permet als usuaris veure els darrers missatges i els temes m&eacute;s populars del f&ograve;rum.
	Tamb&eacute; mostra diverses estad&iacute;stiques, com ara el m&agrave;xim de membres connectats al mateix temps, nous membres i nous temes.<hr />
	Hits:<br />Afegeix una altra columna a la p&agrave;gina d\'estad&iacute;stiques amb el nombre de hits en el f&ograve;rum.';
$helptxt['titlesEnable'] = 'Si s\'activa, permet als usuaris especificar un t&iacute;tol especial per ells mateixos el qual es mostrar&agrave; sota del nom.<br />
	<i>ex.:</i><br />cadetill<br />ErBorde';
$helptxt['topbottomEnable'] = 'Amb l\'opci&oacute; activa, s\'afegiran els botons d\'anar a dalt i a baix, per a que els usuaris puguin anar a la part superior i inferior de la p&agrave;gina sense fer scroll.';
$helptxt['onlineEnable'] = 'Si est&agrave; activa, es mostrar&agrave; si l\'usuari est&agrave; o no connectat.';
$helptxt['todayMod'] = 'Mostrar&agrave; \'Avui\' o \'Ahir\' en lloc de la data.';
$helptxt['enablePreviousNext'] = 'Mostrar&agrave; un enlla&ccedil; per als temes anterior i seg&uuml;ent.';
$helptxt['pollMode'] = 'Especifica si les enquestes estan actives o no. Si no ho estan, qualsevol enquesta ja existent s\'ocultarà
	del llistat de temes. Pots escollir el continuar mostrant els temes sense la seva enquesta asociada seleccionant
	&quot;Mostrar Enquestes existents com Temes&quot;. Per a seleccionar qui pot publicar enquestes, veure-les i altres par&agrave;metres, pots
	permetre o restringir els seus permisos. Recuerda aix&ograve; si les enquestes no estan funcionant.';
$helptxt['enableVBStyleLogin'] = 'Aix&ograve; mostrar&agrave; un quadre per a ingressar l\'usuari/contrasenya per als usuaris convidats del f&ograve;rum.';
$helptxt['enableCompressedOutput'] = 'Aquesta opci&oacute; compactar&agrave; la sortida per a reduir el tr&agrave;fic d\'internet, 
	per&ograve; necessita que zlib estigui instal·lat en el servidor.';
$helptxt['databaseSession_enable'] = 'Aquesta opci&oacute; fa &uacute;s de la base de dades per a guardar informaci&oacute; de sessions - &eacute;s millor per a servidors de c&agrave;rrega balancejada, per&ograve; ajuda amb tots els problemas de timeout i pot fer m&eacute;s r&agrave;pid el f&ograve;rum.  No funciona si session.auto_start est&agrave; actiu.';
$helptxt['databaseSession_loose'] = 'Activant aquesta opci&oacute; es decrementa l\'ample de banda que consumeix el f&ograve;rum i fa que al fer <i>click</i> a endarrera no recargui la p&agrave;gina - lo dolent d\'aix&ograve; &eacute;s que els (nous) icones no s\'actualizarn (entre altres coses) a menys que facis <i>click</i> en aquella p&agrave;gina en lloc de retornar a ella.';
$helptxt['databaseSession_lifetime'] = 'Aquest &eacute;s el nombre de segons que duraran les sessions despr&egrave;s de que no hagin estat accedides.  Si una sessi&oacute; no &eacute;s accedida per molt temps, es diu que ha &quot;expirat&quot;.  Es recomana qualsevol valor m&eacute;s gran de 2400.';
$helptxt['enableErrorLogging'] = 'Aix&ograve; registrar&agrave; (log) qualsevol error, com ara un ingr&eacute;s d\'usuari inv&agrave;lid, per a que es pugui veure que ha anat malament.';
$helptxt['allow_disableAnnounce'] = 'Aix&ograve; permet als usuaris a optar per no participar de les notificacions dels temes que publiques polsant la casella de verificaci&oacute; &quot;tema publicat&quot; quan publiquin un missatge.';
$helptxt['disallow_sendBody'] = 'Aquesta opci&oacute; elimina la posibilitat de rebre el text de les respostes i els missatges en els correus de notificaci&oacute;.<br /><br />Es com&uacute; que els usuaris, per error, responguin als correus de notificaci&oacute;, el que significa la major part de cops que el webmaster rebi la resposta.';
$helptxt['compactTopicPagesEnable'] = 'Especifica com es mostrar&agrave; la selecci&oacute; de les p&agrave;gines.<br /><i>Ej.:</i>
		&quot;3&quot; per mostrar: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; per mostrar: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Mostrar&agrave; en la parte inferior del f&ograve;rum el temps emprat par a crear la p&agrave;gina.';
$helptxt['removeNestedQuotes'] = 'Mostrar&agrave; nom&eacute;s una cita del missatge en q&uuml;esti&oacute;, per&ograve; no qualsevol que hagi estat present en altres missatges.';
$helptxt['simpleSearch'] = 'Mostrar&agrave; una forma de cerca simple, amb un enlla&ccedil; a una forma de cerca avan&ccedil;ada.';
$helptxt['max_image_width'] = 'Permetr&agrave; establir la mida m&agrave;xima d\'una imatge al ser publicada. Les imatges m&eacute;s petites que el m&agrave;xim no es veuran afectades.';
$helptxt['mail_type'] = 'Aquesta opci&oacute; permet escollir entre utilitzar les opcions per defecte de PHP, o sobreescriure-les amb SMTP. PHP no suporta la utilitzaci&oacute; d\'autentificaci&oacute; amb SMTP (que en l\'actualitat, molts servidors ho requereixen) aix&iacute; que, de necessitar-ho, selecciona SMTP.  Recorda que SMTP pot ser m&eacute;s lent, i alguns servidors no prenen noms d\'usuaris i contrasenyes.<br /><br />No necesites omplir els valors de SMTP, si aquesta opci&oacute; est&agrave; utilitzant els valors per defecte de PHP.';
$helptxt['attachmentEnable'] = 'Els arxius adjunts s&oacute;n arxius que els usuaris poden pujar adjuntant-lo a un missatge.<br /><br />
		<b>Cal revisar les extensi&oacute;ns</b>:<br /> Desitja revisar la extensi&oacute; dels arxius?<br />
		<b>Extensions permeses</b>:<br /> Pots especificar les extensions permeses pels arxius adjunts.<br />
		<b>Directori</b>:<br /> Ruta del directori d\'arxius adjunts<br />(exemple: /home/sitios/elteulloc/www/foro/attachments)<br />
		<b>Mida m&agrave;xima d\'espaci del directori d\'arxius adjunts</b> (en KB):<br /> Selecciona la mida m&agrave;xima que pot tenir el directori d\'arxius adjunto, incloent-hi tots els arxius dins d\'aquest.<br />
		<b>Mida m&agrave;xima de tots els arxius adjunts en un missatge</b> (en KB):<br /> Selecciona la mida m&agrave;xima de tots els arxius adjuntus d\'un missatge.  Si es menor que el l&iacute;mit de cada arxiu adjunt, aquest ser&agrave; el l&iacute;mit.<br />
		<b>Mida m&agrave;xima de cada arxiu adjunt</b> (en KB):<br /> Selecciona la mida m&agrave;xima de cada arxiu adjunt.<br />
		<b>Nombre m&agrave;xim d\'arxius adjunts per missatge</b>:<br /> Selecciona el nombre d\'arxius adjunts que un usuari pot pujar per missatge.
		<b>Mostrar els adjunts com a imatges en els missatges</b>:<br /> Si l\'arxiu adjunt &eacute;s una imatgen, aquesta es mostrar&agrave; sota del missatge<br />
		<b>Ajustar la mida de les imatges quan es mostrin sota dels missatges</b>:<br /> Si la opci&oacute; anterior ha estat seleccionada, aix&ograve; guardar&agrave; un adjunt separat (m&eacute;s petit) per a la miniatura visualitzada per a estalviar ample de banda.<br />
		<b>Amplada i Al&ccedil;ada m&agrave;xima de les miniatures visualitzades</b>:<br /> Nom&eacute;s utilitzat amb la opci&oacute; &quot;Ajustar la mida de les imatges quan es mostrin sota dels missatges&quot;, l\'amplada i l\'al&ccedil;ada m&agrave;xima al que se li reduir&agrave; la mida a les imatges. Se\'ls canviar&agrave; la mida proporcionalment.';
$helptxt['karmaMode'] = 'Karma &eacute;s una funci&oacute; que mostra la popularitat d\'un membre. Els usuaris, si tenen el perm&iacute;s corresponent, poden
		\'aplaudir\' o \'castigar\' a altres usuaris, que &eacute;s com es calcula la popularitat. Pots canviar el nombre de missatges necessaris per a tenir &quot;karma&quot;, el temps entre c&agrave;stigs o aplaudiments i si els administradors tamb&eacute; han d\'esperar.<br /><br />El fet de que un grup d\'usuaris puguin castigar a altres es controla a trav&eacute;s
		d\'un perm&iacute;s. Si tens problemes al tractar de fer funcionar aquesta opci&oacute; per a tothom, hauries de revisar novament els teus permisos.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'El calendari pot ser utilitzat per a mostrar aniversaris o moments importants en el f&ograve;rum.<br /><br />
		  <b>Mostrar dies com enllaços a \'Publicar event\'</b>:<br />Permet als usuaris publicar events per aquell dia al fer <i>click en aquella data</i><br />
		  <b>Mostrar n&uacute;mero de setmana</b>:<br />Mostrar el n&uacute;mero de la setmana de l\'any.<br />
		  <b>M&agrave;xim de dies avan&ccedil;ats en l\'&iacute;ndex del f&ograve;rum</b>:<br />Si es posa 7, es mostraran tots els events de la propera setmana.<br />
		  <b>Mostrar dies festius en l\'&iacute;ndex del f&ograve;rum</b>:<br />Mostra les festivitats del dia d\'avui en una barra del calendari en l\'&iacute;ndex del f&ograve;rum.<br />
		  <b>Mostrar aniversaris en l\'&iacute;ndex del f&ograve;rum</b>:<br />Mostra els aniversaris del dia d\'avui en una barra del calendari en l\'&iacute;ndex del f&ograve;rum.<br />
		  <b>Mostrar events en l\'&iacute;ndex del f&ograve;rum</b>:<br />Mostra els events del dia d\'avui en una barra del calendari en l\'&iacute;ndex del f&ograve;rum.<br />
		  <b>f&ograve;rum predefinit on es publicaran</b>:<br />Quin &eacute;s el f&ograve;rum predefinit en el que es publicaran els events?<br />
		  <b>Any m&iacute;nim</b>:<br />Selecciona el &quot;primer&quot; any en la llista del calendari.<br />
		  <b>Any m&agrave;xim</b>:<br />Selecciona el &quot;darrer&quot; any en la llista del calendari.<br />
		  <b>Color pels aniversaris</b>:<br />Selecciona el color del text per quan es mostrin aniversaris<br />
		  <b>Color pels events</b>:<br />Selecciona el color del text per quan es mostrin events<br />
		  <b>Color pels dies festius</b>:<br />Selecciona el color del text per quan es mostrin dies festius<br />
		  <b>Permetre que els events s\'estenguin varis dies</b>:<br />Selecciona-ho per a permetre que els events s\'estenguin m&eacute;s d\'un dia.<br />
		  <b>Nombre m&agrave;xim de dies que un event pot expandir-se</b>:<br />Selecciona el nombre m&agrave;xim de dies que un event pot estener-se.<br /><br />
		  Recorda que l\'&uacute;s del calendari (publicar events, veure events, etc.) est&agrave; controlat pels permisos especificats en la pantalla de permisos.';
$helptxt['localCookies'] = 'SMF utilitza cookies per a enmagatzemar informaci&oacute; d\'ingr&eacute;s en l\'ordinador de l\'usuari.
		  Les cookies poden guardar-se globalment (<i>elteulloc.com</i>) o localment (<i>elteulloc.com/ruta/al/foro</i>).<br />
		  Selecciona aquesta opci&oacute; si tens problemes amb usuaris que es desactiven autom&agrave;ticament.<hr />
		  Les cookies enmagatzemades globalment s&oacute;n menys segures quan s\'utilitzen en un servidors web compartits (com Tripod).<hr />
		  Les cookies locals no funcionen fora del directori del f&ograve;rum, aix&iacute; que si el f&ograve;rum est&agrave; enmagatzemat en <i>www.elteulloc.com/foro</i>, p&agrave;gines com <i>www.elteulloc.com/index.php</i> no podran accedir a la informaci&oacute; del compte.
		  Si s\'utilitza SSI.php es recomana l\'&uacute;s de cookies globals.';
$helptxt['enableBBC'] = 'Seleccionant aquesta opci&oacute; permet als usuaris el poder utilitzar Bulletin Board Code (BBC) en el f&ograve;rum, permetent-los donar format als seus missatges amb imatges, estils de text i altres.';
$helptxt['time_offset'] = 'No tots els administradors dels f&ograve;rums necessiten que el f&ograve;rum utilitzi la mateixa zona hor&agrave;ria que el servidor en el que estigui allotjat. Utilitza aquesta opci&oacute; per a especificar una difer&egrave;ncia hor&agrave;ria (en hores) en la que el f&ograve;rum ha d\'operar, comparada amb l\'hora del servidor. Es permeten valors negatius i decimals.';
$helptxt['spamWaitTime'] = 'Temps que ha de transc&oacute;rrer entre dos publicacions de missatges. Pot utilitzar-se per a evitar SPAM en el f&ograve;rum al limitar-lis qu&egrave; tan seguit poden publicar missatges.';

$helptxt['enablePostHTML'] = 'Permet el publicar tags b&agrave;sics de HTML en els missatges:
	&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;pre&gt;, &lt;blockquote&gt;, &lt;img src=&quot;&quot; /&gt;, &lt;a href=&quot;&quot;&gt;, and &lt;br /&gt;.';

$helptxt['themes'] = 'Aqu&iacute; pots escollir si l\'usuari pot seleccionar temes, quin tema ser&agrave; utilitzat pels convidats,
	entre varies opcions. Fes <i>click</i> en qualsevol dels temes de la derta per canviar la seva configuraci&oacute;.';
$helptxt['theme_install'] = 'Permite instal·lar nous temes. Pot fer-se des d\'un directori previament creat, pujant l\'arxiu pel tema o copian el tema de defecte.<br /><br />Tingues en compte que l\'arxiu o directori ha de tenir l\'arxiu de definici&oacute; <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Permet als usuaris utilitzar Flash dins dels missatges com si fossin imatges. Es un possible risc de seguretat, encara que pocs han pogut explotar-lo. UTILITZA-HO SOTA EL TEU PROPI RISC!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Permet fer un enlla&ccedil; a les <a href="' . $scripturl . '?action=.xml;sa=news">Not&iacute;cies Recents</a>
	i dades similars. Es recomana que limitis la mida dels missatges/not&iacute;cies perqu&egrave; quan les dades rss es mostrin 
	en alguns clients com Trillian, es trunca la informaci&oacute;.';
$helptxt['hotTopicPosts'] = 'Nombre de missatges d\'un tema per a considerar-lo &quot;calent&quot; o &quot;molt calent&quot;.';
$helptxt['globalCookies'] = 'Permet l\'&uacute;s de cookies independents de subdomini. Per exemple, si...<br />
	El teu lloc est&agrave; en http://www.simplemachines.org/,<br />
	I el foro est&agrave; en http://foro.simplemachines.org/,<br />
	Utilitzant aquesta modificaci&oacute; et permetr&agrave; accedir a les cookies del foro.';
$helptxt['securityDisable'] = '<i>Desactiva</i> la revisi&oacute; adicional de contrasenya per accedir a la secci&oacute; d\'administraci&oacute;. &iexcl;NO &eacute;s recomanable!';
$helptxt['securityDisable_why'] = 'Aquesta &eacute;s la teva contrasenya actual (la mateixa que utilitzes per a ingressar).<br /><br />El que hagis d\'escriure-la ajuda a assegurar-nos que realment vols realitzar la tasca administrativa que estiguis realitzant i que ets <b>tu</b> realment.';
$helptxt['emailmembers'] = 'En aquest missatge pots utilitzar algunes &quot;variables&quot;. Aquestes s&oacute;n:<br />
	{$board_url} - URL del f&ograve;rum.<br />
	{$current_time} - Hora actual.<br />
	{$member.email} - Correo electr&ograve;nic de l\'usuari dest&iacute;.<br />
	{$member.link} - Enlla&ccedil; a l\'usuari dest&iacute;.<br />
	{$member.id} - ID de l\'usuari dest&iacute;.<br />
	{$member.name} - Nom de l\'usuari dest&iacute; (major personalitzaci&oacute;).<br />
	{$latest_member.link} - Enlla&ccedil; al darrer usuari registrat.<br />
	{$latest_member.id} - ID del darrer usuari registrat.<br />
	{$latest_member.name} - Nom del darrer usuari registrat.';
$helptxt['attachmentEncryptFilenames'] = 'Encriptar els noms dels adjunts permet tenir m&eacute;s d\'un arxiu pujat com adjunt 
	amb el mateix nom. Per a major seguretat utilitza arxius .php per a baixar els adjunts. No obstant, fa m&eacute;s dif&iacute;cil reconstruir 
	la base de dades si algo dr&agrave;stic succeeix.';

$helptxt['failed_login_threshold'] = 'Especifica el nombre d\'intents fallits d\'ingr&eacute;s abans de redireccionar-los a la pantalla de recordatori de contrasenyes.';
$helptxt['oldTopicDays'] = 'Si aquesta opci&oacute; est&agrave; activa se li mostrar&agrave; a l\'usuari una advert&egrave;ncia quan intenti responder a un tema que no ha tingut noves respostes durant el temps especificat, en dies, en aquesta opci&oacute;. Posa 0 per a desactivar aquesta funci&oacute;.';
$helptxt['edit_wait_time'] = 'Nombre de segons que has de transc&oacute;rrer despr&egrave;s de la publicaci&oacute; d\'un missatge, per a que es registri la data de la darrera modificaci&oacute;.';
$helptxt['edit_disable_time'] = 'Nombre de minuts transcorreguts permesos abans de que un usuari no pugui continuar editant un missatge que ells han publicat. Posa 0 per a desactivar-ho. <br /><br /><i>Nota: Aix&ograve; no tindr&agrave; efecte en els usuaris que tinguin el perm&iacute;s per a editar els missatges d\'altres usuaris.</i>';
$helptxt['enableSpellChecking'] = 'Activa la revisi&oacute; d\'ortografia. HAS DE TENIR la llibreria pspell instal·lada en el servidor i configurat PHP per a utilitzarla. El teu servidor ' . (function_exists('pspell_new') == 1 ? 'SI' : 'NO') . ' sembla que tingui aquesta opci&oacute; configurada.';
$helptxt['lastActive'] = 'Especifica el nombre de minuts durant els quals un usuari roman actiu. El temps predefinit &eacute;s de 15 minuts.';

$helptxt['autoOptDatabase'] = 'Aquesta opci&oacute; optimitza autom&agrave;ticament la base de dades cada X dies. Especifica 1 per a realitzar una optimitzaci&oacute; di&agrave;ria. Tamb´&eacute; pots especificar un nombre m&agrave;xim d\'usuaris en l&iacute;nia, per a no sobrecarregar el servidor i no molestis a masses usuaris.';
$helptxt['autoFixDatabase'] = 'Activat arreglar&agrave; autom&agrave;ticament taules en la base de dades amb problemes i continuar&agrave; com si res hagu&eacute;s passat. Pot ser &uacute;til, degut a que la &uacute;nica forma d\'arreglar aquest tipus de problemes, és REPARANT la taula, i el f&ograve;rum no estar&agrave; caigut fins que et donis compte. Quan aix&ograve; passi, se t\'enviar&agrave; un correu.';

$helptxt['enableParticipation'] = 'Aix&ograve; mostra una petita icona en els temes en que l\'usuari ha publicat missatges.';

$helptxt['db_persist'] = 'Mant&eacute; la connexi&oacute; activa per a incrementar el rendiment. Si NO est&agrave;s en un servidor dedicat, aix&ograve; pot causar-te problemes amb el teu prove&iuml;dor d\'allotjament.';

$helptxt['queryless_urls'] = 'Canvia una mica el format de les URLs, per a que siguin m&eacute;s agradables per als motors de cerca (google, per exemple). Aquestes URLs es veuran estol a per exemple: index.php/action_profile/u_1.';
$helptxt['countChildPosts'] = 'La comprovaci&oacute; d\'aquesta opci&oacute; significar&agrave; que els missatges i els temes el el f&ograve;rum fill d\'un f&ograve;rum contaran cap als seus totals en la p&agrave;gina de l\'&iacute;ndex.<br /><br />Aix&ograve; relentitzar&agrave; el f&ograve;rum, per&ograve; significa que un pare sense missatges no mostrar&agrave; \'0\'.';
$helptxt['fixLongWords'] = 'Divideix les paraules que seguin m&eacute;s llargues de certa longitud en parts per a que no destrueixin l\'aparen&ccedil;a del f&ograve;rum (en la mesura del possible...).';

$helptxt['who_enabled'] = 'Permet activar o desactivar la possibilitat de que els usuaris vegin qui est&agrave; en l&iacute;nia navegant el f&ograve;rum, aix&iacute; com el que est&agrave; fent.';

$helptxt['recycle_enable'] = '&quot;Recicle&quot; temes i missatges eliminats en el f&ograve;rum especificat.';

$helptxt['enableReportPM'] = 'Aquesta opci&oacute; permet als usuaris informar de missatges personals que rebin a l\'equip administratiu. Aix&ograve; pot ser &uavute;til per ajudar a localitzar qualsevol ab&uacute;s en el sistema de missatgeria personal.';
$helptxt['max_pm_recipients'] = 'Aquesta opci&oacute; et permet especificar la quantitat m&agrave;xima de missatges que es poden emmagatzemar en la safata de sortida per un usuari del f&ograve;rum. Aix&ograve; es pot utilitzar per a ajudar a parar l\'SPAM mitjan&ccedil;ant el sistema de MP. Nota que els usuaris amb perm&iacute;s per enviar fulls informatius estan exempts d\'aquesta restricció. Posa cero per a no límit.';
$helptxt['pm_posts_verification'] = 'Aquesta opci&oacute; obligar&agrave; als usuaris a introduir un codi mostrat en una imatge de verificaci&oacute; cada cop que envi&iuml;n un missatge privat. Nom&eacute;s els usuaris amb un nombre de missatges inferior a l\'establert necesitaran introduir aquest codi - aix&ograve; hauria d\'ajudar contra els scripts automatitzats de spam.';
$helptxt['pm_posts_per_hour'] = 'Aix&ograve; limitar&agrave; el nombre de missatges privats enviats per un usuari en el per&iacute;ode d\'una hora. Aix&ograve; no afecta ni als administradors ni als moderadors.';

$helptxt['default_personalText'] = 'Estableix el text predefinit que tindran els usuaris com a &quot;text personal.&quot;';

$helptxt['modlog_enabled'] = 'Guardar logs de totes les accions dels moderadors.';

$helptxt['guest_hideContacts'] = 'Si est&agrave; activa, les adreces de correu i els detalls dels missatgers (ICQ, Y!, MSN) 
	de tots els usuaris s\'amagaran als visitants del f&ograve;rum';

$helptxt['registration_method'] = 'Determina quin m&egrave;tode de registre &eacute;s utilitzat per a les persones que desitgin unir-se al f&ograve;rum. Pots seleccionar entre:<br /><br />
  <ul>
    <li>
      <b>Registre Desactivat:</b><br />
      Desactiva el proc&eacute;s de registre impossibilitant que ning&uacute; pugui registrar-se en el f&ograve;rum.<br />
    </li>
	<li>
      <b>Registre Inmediat</b><br />
      Els nous usuaris poden ingressar i publicar inmediatament despr&egrave;s de registrar-se en el f&ograve;rum.<br />
    </li>
	<li>
      <b>Activaci&oacute; d\'Usuari</b><br />
      Tot usuari que es registri al f&ograve;rum rebr&agrave; per correu un enlla&ccedil; d\'activaci&oacute; que haur&agrave; de visitar abans de convertir-se en usuari v&agrave;lid<br />
    </li>
	<li>
      <b>Aprobació d\'Usuaris</b><br />
      Todos els nous usuaris que es registrin en el f&ograve;rum han de ser per un administrador per a que siguin usuaris v&agrave;lids.
    </li>
  </ul>';
$helptxt['send_validation_onChange'] = 'Si la opci&oacute; est&agrave; activa, tots els usuaris que canvi&iuml;n la seva  adre&ccedil;a de correu en el seu perfil hauran de reactivar el seu compte des del correu enviat a la nova adre&ccedil;a';
$helptxt['send_welcomeEmail'] = 'Amb l\'opci&oacute; seleccionada, s\'enviar&agrave; un correu de benvinguda a tots els nous usuaris del f&ograve;rum';
$helptxt['password_strength'] = 'Aquesta opció determina la complicació que ha de tenir la contrasenya seleccionada pels usuaris del fòrum. Quant m&eacute;s &quot;complicada&quot; sigui la contrasenya, ser&agrave; m&eacute;s dif&iacute;cil hakejar el compte de l\'usuari.
	Les possibles configuracions s&oacute;n:
	<ul>
		<li><b>Baix:</b> La contrasenya ha de tenir quatre car&agrave;cters de llargada com a m&iacute;nim.</li>
		<li><b>Mig:</b> La contrasenya ha de tenir com a m&iacute;nim vuit car&ograve;cters de llargada i no pot tenir part del nom o del correu de l\'usuari.</li>
		<li><b>Alt:</b> Igual que el Mig, però la contrasenya també ha de tenir una barreja de lletres majúscules i minúscules i, com a mínim, un número.</li>
	</ul>';

$helptxt['coppaAge'] = 'El valor especificat en aquest quadre determinar&agrave; l\'edat m&iacute;nima que els nous usuaris hauran de tenir per a que se\'ls doni acc&eacute;s inmediat als f&ograve;rums.
	Durant el proc&eacute;s de registre se\'ls demanar&agrave; que confirmin si s&oacute;n majors d\'aquesta edat i, de no ser-ho, pot o negar-se-li la sol·licitud, o suspendre-la esperant per l\'aprovaci&oacute; dels pares - depenent del tipus de restricci&oacute; escollida.
	Si es posa 0, llavors totes les restriccions d\'edat s\'ignoraran.';
$helptxt['coppaType'] = 'Si les restriccions d\'edat estan actives, llavors aquest valor determinar&agrave; qu&egrave; pasar&agrave; quan un usuari m&eacute;s jove de l\'edat m&iacute;nima intenta registrar-se en el f&ograve;rum. Hi ha dos possibilitats:
	<ul>
		<li>
			<b>Rebutjar la seva sol·licitud de registre:</b><br />
				A qualsevol nou usuari que no compleixi amb l\'edat m&iacute;nima se li rebujar&agrave; la seva sol·licitud de registre inmediatament.<br />
		</li><li>
			<b>Requerir aprovaci&oacute; del Pare o Tutor</b><br />
				A qualsevol nou usuari que no compleixi amb l\'edat m&iacute;nima el seu compte es marcar&agrave; com esperant autorizaci&oacute;, i se li mostrar&agrave; una pantalla en la que els seus pares o tutors hauran de donar el perm&iacute;s necessari per a que es converteixi en un usuari del f&ograve;rum.
				A ells tamb&eacute;n se\'ls mostrar&agrave; una pantalla amb les dades de contacte que s\'han especificat en la pantalla de configuraci&oacute;, per a que puguin enviar la pantalla a l\'administrador per correo o fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Els quadres de contacte s&oacute;n requerits per a que les pantalles que otorguin el perm&iacute;s als usuaris per sota de l\'edat m&iacute;nima puguin ser enviades a l\'administador del f&ograve;rum. Aquests detalls seran mostrats a tots els usuaris sota de l\'edat m&iacute;nima, i s&oacute;n necesaris per a l\'aprobaci&oacute; del pare o tutor. Com a m&iacute;nim s\'ha de donar una adre&ccedil;a postal o un n&uacute;mero de fax.';

$helptxt['allow_hideOnline'] = 'Amb l\'opci&oacute; seleccionada tots els usuaris podran ocultar a la resta si estan connectats (excepte als administradors). Si est&agrave; desactivada, nom&egrave;s els usuaris que poden moderar el f&ograve;rum poden ocultar la seva pres&egrave;ncia. Es important mencionar que deshabilitant aquesta opci&oacute; no canvia l\'estat de cap usuari existent - simplement se\'ls impedeix ocultar-se en el futur.';
$helptxt['allow_hideEmail'] = 'Amb l\'opci&oacute; seleccionada els usuaris poden escollir ocultar la seva adre&ccedil;a de correu a la resta d\'usuaris. No obstant, els administradors sempre poden veure-la.';

$helptxt['latest_support'] = 'Aquest panell mostra alguns dels problemes i preguntes m&eacute;s comuns de la configuraci&oacute; del servidor. No et preocupis, aquesta informaci&oacute; no es registra en cap moment.<br /><br />Si roman com &quot;Obtenint informaci&oacute; de suport...&quot;, segurament &eacute;s que no es pot connectar a <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Mostra alguns dels mods m&eacute;s populars, aix&iacute; com alguns paquets o mods aleatoris, amb instal·lacions r&agrave;pides i sencilles.<br /><br />Si la secci&oacute; no es pot mostrar, probablement &eacute;s que no es pot connectar a <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Mostra alguns dels darrers i m&eacute;s populars temes de <a href="http://www.simplemachines.org/">www.simplemachines.org</a>. Pot ser que no es mostri correctament si no pots conectarte amb <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Per la teva seguretat, la resposta a la teva pregunta (aix&iacute; com la contrasenya) est&agrave; encriptada de manera que "SMF" nom&eacute;s pot verificar si &eacute;s correcta, no podr&agrave; &quot;retornar-te&quot; (ni a ning&uacute; m&eacute;s, qu&eacute; &eacute;s l\'important!) quina &eacute;s la teva resposta o la teva contrasenya.';
$helptxt['moderator_why_missing'] = 'Degut a que la moderaci&oacute; es realitza en cada f&ograve;rum, has de fer a un membre moderador des de la <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">pantalla d\'adminitraci&oacute; de f&ograve;rums</a>.';

$helptxt['permissions'] = 'A trav&eacute; dels permisos permets o denegues als grups fer coses espec&iacute;fiques.<br /><br />Pots modificar varis f&ograve;rums al mateix temps utilitzant les caselles, o buscar en els permisos per un grup espec&iacute;fic fent click en \'Modificar.\'';
$helptxt['permissions_board'] = 'Si un f&ograve;rum s\'especifica com a \'Global,\' significa que el f&ograve;rum no tendr&agrave; permisos especials.  \'Local\' significa que tendr&agrave; els seus propis permisos - separats dels globals.  Aix&ograve; permet tenir un f&ograve;rum amb m&eacute;s (o menys) permisos que un altre, sense que sigui necessari que s\'especifiquin per a cada un dels f&ograve;rums.';
$helptxt['permissions_quickgroups'] = 'Permeten utilitzar la configuraci&oacute; &quot;predefinit&quot; de permisos - est&agrave;ndar significa \'res especial\', restrictiu significa \'com a visitant\', moderador significa \'que t&eacute; un moderador\', i per &uacute;ltim \'manteniment\' significa permisos molt propers als d\'un administrador.';
$helptxt['permissions_deny'] = 'Denegar permisos pot ser útil si vols permisos a certs usuaris. Es pot afegir un grup d\'usuaris amb un \'denegar\'-perm&iacute;s als usuaris que els hi vuilgui denegar.<br /><br />Utilitza-ho amb cura, un perm&iacute;s denegat estar&agrave; denegat encara pertanyi a altres grups d\'usuaris.';
$helptxt['permissions_postgroups'] = 'Habilitar els permisos per als grups basats en nombre de missatges permet atribuir permisos als usuaris que han superat certa quantitat de missatges. Els permisos dels grups basats en nombre de missatges s\'<em>afegeixen</em> als permisos dels grups de membres normals.';
$helptxt['permissions_by_board'] = 'Habilitar aquesta opci&oacute; et permetr&agrave; a, per a cada tauler per cada grup, fixar diversos permisos. Per defecte, un f&ograve;rum utilitza permisos globals, per&ograve; amb aquesta opci&oacute; habilitada, es podran canviar els permisos a un f&ograve;rum de forma local. Aix&ograve; proporciona una forma molt sofisticada de gestionar els permisos.';
$helptxt['membergroup_guests'] = 'El grup de Visitants s&oacute;n tots aquells usuaris que no han iniciat sessi&oacute;.';
$helptxt['membergroup_regular_members'] = 'Els Usuaris Regulars s&oacute;n tots els usuaris que han iniciat sessi&oacute;, per&ograve; que no tenen un grup primari assignat.';
$helptxt['membergroup_administrator'] = 'L\'administrador pot, per definici&oacute;, fer qualsevol cosa i veure qualsevol f&ograve;rum. No hi ha cap configuraci&oacute; de permisos per l\'administrador.';
$helptxt['membergroup_moderator'] = 'El grup de moderadors &eacute;s un grup especial. Els permisos i configuracions assignats a aquest grup s\'apliquen als moderadors per&ograve; nom&eacute;s <em>en el f&ograve;rum que moderen</em>. Fora d\'aquests s&eacute;n com un usuari m&eacute;s.';
$helptxt['membergroups'] = 'En SMF hi ha dos tipus de grups als que els usuaris poden perten&egrave;ixer. Aquests s&oacute;n:
  <ul>
    <li>
	  <b>Grups Regulars:</b> Un grup regular &eacute;s un grup en el que els usuaris no se\'ls ingressa autom&agrave;ticament. Per a ingressar a un usuari al grup nom&eacute;s s\'ha d\'anar al seu perfil i fer <i>click</i> en &quot;Configuraci&oacute; del compte&quot;. All&iacute; es pot assignar-li tots els grups regulars als que desitgis que pertanyi.</li>
    <li>
	  <b>Grups de Missatges:</b> A difer&egrave;ncia dels grups regulars, aquest tipus de grups no poden ser assignats. En lloc d\'aix&ograve;, els usuaris s&oacute;n assignats autom&agrave;ticament a un grup quan arribin al m&iacute;nim de missatges publicats necessaris per a pertanyer a dit grup.</li>
  </ul>';

$helptxt['calendar_how_edit'] = 'Pots editar aquests events fent click en l\'asterisc vermell (*) al cant&oacute; dels seus noms.';

$helptxt['maintenance_general'] = 'Des d\'aqu&iacute;, pots optimitzar totes les taules (fer-les m&eacute;s petites i m&eacute;s r&agrave;pidas!), assegura\'t de tenir les versions m&eacute;s noves, trobar qualsevol error que pugui estar afectant el f&ograve;rum, recontar totals i buidar els logs.<br /><br />Els dos darrers pots ignorar-los a menys que alguna cosa estigui fallant, per&ograve; tampoc passa res si es fa.';
$helptxt['maintenance_backup'] = 'Aquesta &agrave;rea permet guardar una c&ograve;pia de tots els misatges, configuracions, usuaris i altra informaci&oacute; del f&ograve;rum en un arxiu molt gran.<br /><br />Es recomanat fer-ho sobint, m&eacute;s o menys cada setmana, per q&uuml;estions de seguretat.';
$helptxt['maintenance_rot'] = 'Permet de forma <b>complerta</b> i <b>irrevocable</b> esborrar temes antigs. Es recomanable fer una c&ograve;pia de seguretat abans per si s\'esborra alguna cosa no desitjada de forma accidental.<br /><br />Utilitza aquesta opci&oacute; amb cura.';

$helptxt['avatar_allow_server_stored'] = 'Permet als usuaris seleccionar &agrave;vatars emmagatzemats en el servidor. Estan, generalment, en el mateix lloc que SMF dins del directori &agrave;vatars.<br />Com a truc, si crees subdirectoris dins d\'aquest, pots fer &quot;categor&iacute;es&quot; d\'&agrave;vatars.';
$helptxt['avatar_allow_external_url'] = 'Amb aquesta opci&oacute; activada, els usuaris poden especificar una URL per als seus propis &agrave;vatars. El desavantatge d\'aix&ograve; &eacute;s que, en alguns casos, puguin utilitzar imatges molt grans o que no desitgis que s\'utilitcin en el f&ograve;rum.';
$helptxt['avatar_download_external'] = 'Amb aquesta opci&oacute; activada, es descarregar&agrave; l\'avatar de la URL especificada per l\'usuari. Si el proc&eacute;s &eacute;s realitzat amb &eacute;xit, l\'avatar es tractar&agrave; com un avatar pujat per l\'usuari.';
$helptxt['avatar_allow_upload'] = 'Aquesta opci&oacute; &eacute;s similar a la de &quot;Permetre als usuaris seleccionar un &agrave;vatar extern&quot;, excepte que tens un millor control dels &agrave;vatars, &eacute;s m&eacute;s f&agrave;cil canviar-lis la mida i els usuaris no necesiten tenir un lloc on hospedar els seus &agrave;vatars.<br /><br />No obstant, el desaventatge &eacute;s que pots consumir molt espai en el servidor.';
$helptxt['avatar_download_png'] = 'Els PNG s&oacute;n m&eacute;s grans, per&ograve; ofereixen m&eacute; qualitat de compressi&oacute;. Si no est&agrave; seleccionat, en el seu lloc s\'utilitzar&agrave; JPEG - que generalment &eacute;s m&eacute;s petit per&ograve; amb menys qualitat.';

$helptxt['disableHostnameLookup'] = 'Aix&ogrve; desactiva la cerca de noms de servidors, que en alguns servidors &eacute;s molt lent. Es important mencionar que aix&ograve; far&agrave; la restricci&oacute; d\'acc&eacute;s menys efica&ccedil;.';

$helptxt['search_weight_frequency'] = 'Els factors de pes s\'utilitzen per a determinar la relev&agrave;ncia dels resultats de la cerca. Canvia aquests factors de pes per a que coincideixi amb les coses que s&oacute;n importants espec&iacute;ficament per al teu f&ograve;rum. Per exemple, un f&ograve;rum d\'un lloc de not&iacute;cies pot necessitar un valor relativament alt per a l\' \'antiguitat del darrer missatge coincident;\'. Tots els valors s&oacute;n relatius, relacionats entre si i ha de ser sencers positius.<br /><br />Aquest factor conta la quantitat de missatges que van coincidir i els divideix pel nombre total de missatges dins del tema.';
$helptxt['search_weight_age'] = 'Els factors de pes s\'utilitzen per a determinar la relev&agrave;ncia dels resultats de la cerca. Canvia aquests factors de pes per a que coincideixi amb les coses que s&oacute;n importants espec&iacute;ficament per al teu f&ograve;rum. Per exemple, un f&ograve;rum d\'un lloc de not&iacute;cies pot necessitar un valor relativament alt per a l\' \'antiguitat del darrer missatge coincident;\'. Tots els valors s&oacute;n relatius, relacionats entre si i ha de ser sencers positius.<br /><br /Aquest factor qualifica l\'antiguitat del darrer missatge dins d\'un tema. Quan m&eacute;s recent &eacute;s, major la seva puntuaci&oacute;.';
$helptxt['search_weight_length'] = 'Els factors de pes s\'utilitzen per a determinar la relev&agrave;ncia dels resultats de la cerca. Canvia aquests factors de pes per a que coincideixi amb les coses que s&oacute;n importants espec&iacute;ficament per al teu f&ograve;rum. Per exemple, un f&ograve;rum d\'un lloc de not&iacute;cies pot necessitar un valor relativament alt per a l\' \'antiguitat del darrer missatge coincident;\'. Tots els valors s&oacute;n relatius, relacionats entre si i ha de ser sencers positius.<br /><br />Aquest factor est&agrave; basat en la mida del tema. Quan m&eacute;s missatges tingui un tema, major la seva puntuaci&oacute;.';
$helptxt['search_weight_subject'] = 'Els factors de pes s\'utilitzen per a determinar la relev&agrave;ncia dels resultats de la cerca. Canvia aquests factors de pes per a que coincideixi amb les coses que s&oacute;n importants espec&iacute;ficament per al teu f&ograve;rum. Per exemple, un f&ograve;rum d\'un lloc de not&iacute;cies pot necessitar un valor relativament alt per a l\' \'antiguitat del darrer missatge coincident;\'. Tots els valors s&oacute;n relatius, relacionats entre si i ha de ser sencers positius.<br /><br />Aquest factor revisa si es troben coincid&egrave;ncies en l\'assumpte del tema.';
$helptxt['search_weight_first_message'] = 'Els factors de pes s\'utilitzen per a determinar la relev&agrave;ncia dels resultats de la cerca. Canvia aquests factors de pes per a que coincideixi amb les coses que s&oacute;n importants espec&iacute;ficament per al teu f&ograve;rum. Per exemple, un f&ograve;rum d\'un lloc de not&iacute;cies pot necessitar un valor relativament alt per a l\' \'antiguitat del darrer missatge coincident;\'. Tots els valors s&oacute;n relatius, relacionats entre si i ha de ser sencers positius.<br /><br />Aquest factor revisa si es troben coincid&egrave;ncies en el primer missatge del tema.';
$helptxt['search_weight_sticky'] = 'Els factors de pes s\'usen per a determinar la relev&agrave;ncia dels resultats de la recerca. Canvia aquests factors de pes per a que coincideixi amb les coses que s&oacute;n importants espec&iacute;ficament pel teu f&ograve;rum. Per exemple, un f&ograve;rum d\'un lloc de not&iacute;cies, pot necessitar un valor relativament alt per a \'l\'antiguitat del darrer missatge que coincid&iacute;s\'. Tots els valors s&oacute;n relatius, relacionats entre s&iacute;, i han de ser sencers positius<br /><br />Aquest factor revisa quan un tema est&agrave; fixe i incrementa la seva rellev&agrave;ncia si ho est&agrave;.';
$helptxt['search'] = 'Aqu&iacute; es pot ajustar la configuraci&oacute; de la funci&oacute; de recerca. Es important mencionar que aqu&iacute; no es pot especificar qui t&eacute; acc&eacute;s a la funci&oacute; de recerca. Utilitza la pantalla de \'gestionar permisos\' en el panell administratiu per aix&ograve;.';
$helptxt['search_why_use_index'] = 'Un &iacute;ndex de recerca pot millorar enormement l\'execuci&oacute; de les recerques en el f&ograve;rum. Especialment quand el nombre de missatges del f&ograve;rum augmenta, buscar sense un &iacute;ndex pot portar for&ccedila temps i incrementa la pressi&oacute; sobre la teva base de dades. Si el teu f&ograve;rum t&eacute; m&eacute;s de 50.000 missatges, hauries de considerar la creaci&oacute; d\'un &iacute;ndex de recerca per assegurar un funcionament &ograve;ptim de f&ograve;rum.<br /><br />Tingues en compte que un &iacute;ndex de recerca pot ocupar espaci. Un &iacute;ndex fulltext &eacute;s un &iacute;ndex incorporat a MySQL. Es relativament compacte (aproximadament la mateixa mida que la tabla de missatges), per&ograve; moltes de les paraules no estan indexades i pot ralentir algunes de les consultes. L\'&iacute;ndex personalitzat &eacute;s sovint major (depenent de la teva configuraci&oacute; pot triplicar la mida de la tabla de missatges) per&ograve; el seu funcionament &eacute;s millor que fulltext i relativament estable.';

$helptxt['see_admin_ip'] = 'Als administradors i moderadors se\'ls mostren les IPs per a facilitar la moderaci&oacute; i per fer m&eacute;s f&agrave;cil el seguiment de persones indesitjables. Recorda que les adre&ccedil;es IPs no sempre s&oacute;n identificat&ograve;ries, i que les IPs canvien peri&oacute;dicament.<br /><br />Tamb&eacute; se\'ls permet als usuaris veure la seva pr&ograve;pia IP.';
$helptxt['see_member_ip'] = 'La teva adre&ccedil;a IP &eacute;s mostrada nom&eacute;s a tu i als moderadors. Recorda que aquesta informaci&oacute; no &eacute;s identificat&ograve;ria i moltes IPs canvien peri&ograve;dicament.<br /><br />No pots veure les IPs de la resta d\'usuaris i ells no poden veure la teva.';

$helptxt['ban_cannot_post'] = 'La restricci&oacute; \'no es pot publicar\' esdev&eacute; el f&ograve;rum a nom&eacute;s lectura per als usuaris restringits. Els usuaris no podran crear nous temes o respondre als ja existents, enviar missatges personals o votar a les enquestes. No obstant, els usuaris restringits poden llegir els seus missatges personals i els temes.<br /><br />Es mostrar&agrave; un missatge d\'av&iacute;s als usuaris que han estat restringits aix&iacute;.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Configuraci&oacute; de Publicacions</b><br />
			Modifica la configuraci&oacute; relacionada a la publicaci&oacute; de missatges i la forma de mostrar els missatges. Aqu&iacute; tamb&eacute; pots habilitar la correcci&oacute; ortogr&agrave;fica.
		</li><li>
			<b>Bulletin Board Code</b><br />
			Activa qu&egrave; codis es mostraran en els missatges del f&ograve;rum des de la finestra de la dreta. Tamb&eacute; es pot ajustar qu&egrave; codis es permetran i quins no.
		</li><li>
			<b>Paraules Censurades</b>
			Per a mantenir un llenguatge amb respecte, es poden censurar algunes paraules. Aquesta funci&oacute; permet convertir paraules censurades en mots innocents.
		</li><li>
			<b>Configuraci&oacute; dels Temes</b>
			Modifica la configuraci&oacute; relacionada amb els temes. El nombre de temes per p&agrave;gina, si estan permesos els missatges fixos, el nombre de respostes per a que un missatge es consideri calent, etc.
		</li>
	</ul>';

?>