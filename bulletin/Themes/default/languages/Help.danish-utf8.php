<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Luk vindue';

$helptxt['manage_boards'] = '
	<b>Administrer boards og kategorier:</b><br />
	I denne menu kan du oprette/rearangere/slette boards, samt kategorierne de ligger under. Hvis du f.eks har et bredfavnende site som tilbyder information om &quot;Sport&quot; og &quot;Biler&quot; og &quot;Musik&quot;, ville disse være topkategorier som du ville oprette.
	Under hver af disse kategorier, ville du så oprette hierakiske &quot;under-kategorier&quot;,
	eller &quot;boards&quot; med emner inden i hver af dem. Det er et simpelt hieraki med denne struktur: <br />
	<ul>
		<li>
			<b>Sport</b>
			&nbsp;- en &quot;kategori&quot;
		</li>
		<ul>
			<li>
				<b>Baseball</b>
				&nbsp;- Et board under kategorien &quot;Sport&quot;
			</li>
			<ul>
				<li>
					<b>Statistik</b>
					&nbsp;- Et underboard af boardet &quot;Baseball&quot;
				</li>
			</ul>
			<li><b>Fodbold</b>
			&nbsp;- Et board under kategorien &quot;Sport&quot;</li>
		</ul>
	</ul>
	Kategorier tillader dig at dele boardet op i brede emner (&quot;Biler,
	Sport&quot;), og &quot;boardene&quot; under dem er emnerne, hvorunder medlemmerne kan poste. En bruger der er interesseret i Toyota
	ville poste under &quot;Biler->Toyota&quot;. Kategorier tillader folk hurtigt at finde hen til hvor deres interesser er: I stedet for blot en generel &quot;Butik&quot; kan du have en &quot;Sko&quot; og en &quot;Tøj&quot; butik. Dette forenkler søgningen efter f.eks &quot;snørebånd&quot;, da man kan pound&quot; fordi man kan søge i skobutikken i stedet for at søge i tøjbutikken (hvor man højst sansynligt ikke finder snørrebånd).<br />
	Som nævnt herover er et board et vigtigt emne under en bred kategori.
	Hvis man ønsker at snakke om &quot;Toyota&quot; vil man gå til kategorien &quot;Biler&quot; og springe ind til boardet &quot;Toyota&quot; for at poste sine tanker der.<br />
	Administrative funktioner i denne menu er at oprette nye boards under hver kategori, og til at reorganisere disse (som f.eks at oprette &quot;Corolla&quot; under &quot;Toyota&quot;), eller slette boardet helt.';

$helptxt['edit_news'] = '<b>Redigér forumnyheder</b><br />
	Dette tillader dig at ændre teksten i nyhedsboksen der vises i boardindekset.
	Tilføj ethvert emne du har lyst (eks.: &quot;Glem ikke konferencen denne tirsdag&quot;). Hver nyhed bør oprettes i hver sin boks. Nyheder vises i tilfældig rækkefølge.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Se alle medlemmer:</b><br />
			Se alle medlemmer i boardet. Du får præsenteret en liste med brugere, og hyperlink til deres profil. Du kan klikke på ethvert af navnene for at se detaljer om medlemmet (hjemmeside, alder, o.s.v), og som administrator kan du rette disse parametre. Du har fuld kontrol over medlemmer, inklusiv muligheden for at slette dem fra forummet.<br /><br />
		</li>
		<li>
			<b>Afventer godkendelse:</b><br />
			Denne sektion er kun vist hvis du har aktiveret administratorgodkendelse af alle nye registreringer. Enhver der registrerer sig for at deltage i dit forum, bliver først fuldt medlem efter de er blevet godkendt af en administrator. Sektionen viser alle de medlemmer der stadig afventer godkendelse, sammen med deres mail- og IP adresse. Du kan vælge enten at godkende eller afvise (slette) ethvert medlem på listen ved at checke boksen ved siden af medlemmet og vælge handlingen nederst på siden. Når du afviser et medlem, kan du vælge at slette denne med eller uden besked til vedkommende om grunden til afvisningen.<br /><br />
		</li>
		<li>
			<b>Afventer aktivering:</b><br />
			Denne sektion vil kun blive vist hvis du har indstillet at nye medlemmer skal aktivere deres konto for at bruge forummet. Du vil her kunne se alle medlemmer der endnu ikke har aktiveret deres konto. Fra dette skærmbillede kan du enten acceptere, afvise eller påminde medlemmer som mangler at registrere sig. Som ovenfor, kan du også vælge at maile medlemmet, for at informere denne om de evt. valg du har truffet.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Ban Medlemmer:</b><br />
	SMF tilbyder muligheden til at &quot;banne&quot; burgere, for at udelukke folk der har brudt sig mod reglerne med spamming m.m. Dette tillader dig at vælge de brugere der er skadelige mod dit forum.
	 Som administrator,
	når du læser beskeder, kan du se hver brugers IP-adresse der på det tidspunkt blev brugt til at poste. I banningliste,
	skriver du så simpelthen den IP-adresse ind, gemmer, og de kan dermed ikke længere poste fra den lokation.<br />Du kan også banne folk gennem deres mailadresse.';

$helptxt['modsettings'] = '<b>Redigér funtioner og valg</b><br />
	Der er en del features i denne sektion der kan indstilles til dine preferencer.  Indstillinger for installerede mods vil generelt også blive vist her.';

$helptxt['number_format'] = '<b>Standard talformat:</b><br />
	Du kan bruge denne instilling til at formatere den måde tal bliver vist til brugeren. Formatet af denne instilling er:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Hvor \',\' i ovenstående eksempel er brugt som tusindseparator, er karakteren \'.\' brugt som decimalseparator.';

$helptxt['time_format'] = '<b>Standard tidsformat:</b><br />
	Du kan instille hvordan tidformatet skal vises for dig selv. Der er mange små bogstaver, men det er ret simpelt.
	Konverteringerne følger PHP\'s strftime() funktion og er beskrevet herunder (flere detaljer kan findes på <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	De følgende karakterer kan genkendes i formateringsstrengen: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - forkortet ugedag navn<br />
	&nbsp;&nbsp;%A - fuld ugedag navn<br />
	&nbsp;&nbsp;%b - forkortet månedsnavn<br />
	&nbsp;&nbsp;%B - fuld månedsnavn<br />
	&nbsp;&nbsp;%d - dag på måned (01 til 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - samme som %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - dag på måned (1 til 31) <br />
	&nbsp;&nbsp;%H - Timer som 24-timers ur (range 00 til 23) <br />
	&nbsp;&nbsp;%I - Timer som et 12-timers ur (range 01 til 12) <br />
	&nbsp;&nbsp;%m - måned som nummer (01 til 12) <br />
	&nbsp;&nbsp;%M - minut som nummer <br />
	&nbsp;&nbsp;%p - enten &quot;am&quot; eller &quot;pm&quot; efter den opgivne tid<br />
	&nbsp;&nbsp;%R<b>*</b> - tid i 24 timers notation <br />
	&nbsp;&nbsp;%S - sekunder som decimal tal <br />
	&nbsp;&nbsp;%T<b>*</b> - nuværende tid, lig med %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2 digit år (00 til 99) <br />
	&nbsp;&nbsp;%Y - 4 digit år<br />
	&nbsp;&nbsp;%Z - tids zone eller navn eller forkortelse <br />
	&nbsp;&nbsp;%% - en literal \'%\' karakter <br />
	<br />
	<i>* Virker ikke på Windows-baserede servere.</i></span>';

$helptxt['live_news'] = '<b>Live bekendtgørelser</b><br />
	Denne boks viser nyligt opdaterede bekendtgørelser fra <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	Du bør en gang imellem checke her efter opdateringer, nye filversioner, samt vigtig information fra Simple Machines.';

$helptxt['registrations'] = '<b>Registrationsstyring</b><br />
	Denne sektion indeholder alle funktioner til at styre nye registreringer i forummet. Registrationsstyringen indeholder op til fire sektioner som er synlige afhængigt af dine forumindstillinger. Disse er:<br /><br />
	<ul>
		<li>
			<b>Registrer nyt medlem</b><br />
			Fra dette skærmbillede kan du vælge at registrere nye medlemmer på deres vegne. Dette kan være brugbart i forummer hvor registreringen er lukket for nye medlemmer, eller i tilfælde hvor administratoren ønsker at oprette en testkonto. Hvis &quot;Kræv at brugeren aktiverer konto&quot; er markeret, vil medlemmet få sendt en aktiveringsmail som skal anvendes, før brugeren kan bruge sin konto. Samtidig kan du vælge at maile brugeren sit kodeord til den angivne mailadresse.<br /><br />
		</li>
		<li>
			<b>Redigér Registrationsbevis</b><br />
			Dette tillader dig at rette i teksten til registreringsaftalen som nye medlemmer der registrerer sig i forummet får vist.
			Du kan tilføje og fjerne tekst som du ønsker, fra det originale registrationsbevis som følger med SMF.<br /><br />
		</li>
		<li>
			<b>Indstil reserverede navne</b><br />
			Her kan du specificere ord og navne som dine brugere ikke må anvende.<br /><br />
		</li>
		<li>
			<b>Indstillinger</b><br />
			Denne sektion er kun synlig, hvis du har rettigheder til at administrere forummet. Fra dette skærmbillede, kan du bestemme hvilken registrationsmetode der skal anvendes i dit forum, såvel som andre indstillinger relateret til registrering.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Logbog over moderatorændringer:</b><br />
	Denne sektion tillader medlemmer af administrationsteamet at følge alle moderationsændringer som forummoderatorer har udført. For at sikre at
	moderatorer ikke kan fjerne referencer til de handlinger de har udført, bør handlinger ikke slettes før 24 timer efter de er lavet.
	The \'objects\' column lists any variables associated with the action.';
$helptxt['error_log'] = '<b>Forum Fejllog:</b><br />
	Fejlloggen logger alle kritiske fejl brugere oplever i dit forum. Den lister alle disse fejl efter dato, og kan sorteres ved at klikke på den lille pil ved siden af hver dato. Yderligere kan du sortere fejlene ved at klikke på billedet ved siden af hver fejlstatistik. Dette tillader dig at sortere efter f.eks medlem. Hvis et filter er aktivt, vil der kun vises resultater der matcher det valgte filter.';
$helptxt['theme_settings'] = '<b>Tema indstillinger:</b><br />
	Dette skærmbillede tillader dig at ændre indstillingerne, specifikt for et bestemt tema. Disse indstillinger inkluderer valg af temaets folder- og adresseinformation, men også andre valg der har effekt på temaerne i dit forum. De fleste temaer vil have forskellige brugerindstillinger, hvilket tillader dig at tilpasse et tema til dine behov.';
$helptxt['smileys'] = '<b>Smileys og Smileypakker:</b><br />
	Her kan du tilføje og fjerne smileys, og smileypakker.  Det er vigtigt at bemærke at hvis en smiley er indeholdt i en pakke, er det vigtigt den er indeholdt i alle pakker - ellers bliver det forvirrende for dine brugere at bruge forskellige sæt.';
$helptxt['calendar'] = '<b>Kalender</b><br />
	Her kan du rette i den aktuelle kalender, såvel som tilføje og fjerne feriedage og helligdage der vises i kalenderen.';

$helptxt['serversettings'] = '<b>Rediger Serverindstillinger</b><br />
	Her kan du ændre standardkonfigurationen for dit forum. Denne sektion inkluderer indstillinger for dataasen og adresser, såvel som andre vigtige konfigurationsindstillinger som mailindstillinger og caching. Tænk dig godt om, da ændringer i disse indstillinger kan resultere i fejl der gør forummet ubrugbart.';

$helptxt['topicSummaryPosts'] = '<b>Antal posteringer at vise i emneoversigten:</b><br />Dette tillader dig at indstille antallet af tidligerebeskeder vist i emneoversigten på svaroversigten.';
$helptxt['enableAllMessages'] = '<b>Max antal posteringer for at "Vis alle beskeder" kan aktiveres i et emne:</b><br />Sæt denne indstilling til det <em>maksimale</em> antal af beskeder et emne kan have for at vise linket &quot;Vis alle&quot; .  Sættes denne til mindre end &quot;Antallet af posteringer per side på emnesider&quot; betyder simpelthen at denne aldrig bliver vist, og sættes den for højt, kan det gå ud over performancen af dit forum.';
$helptxt['enableStickyTopics'] = 'Fremhævede emner placeres i toppen af emnelisten. Dette bruges for det meste til vigtige beskeder. Som standard er det kun moderatorer og administratorer der kan fremhæve emner, men tilladelser til dette kan dog gives til andre brugere.';
$helptxt['allow_guestAccess'] = 'Låses denne boks, stoppes gæster i at gøre andet end meget basale handlinger - logge ind, registere, kodeordshusker o.s.v - i dit forum.  Dette er ikke det samme som at udelukke gæster fra boards.';
$helptxt['userLanguage'] = 'Aktivering af denne funktion vil tillade brugere at vælge hvad for et sprog de vil bruge i forummet. Det vil ikke berøre standardvalget.';
$helptxt['trackStats'] = '<b>Spor daglig statistik:</b><br />Dette vil tillade brugere at se de seneste beskeder og mest populære emner på dit forum.
		Det vil også vise forskellige statistikker, såsom medlemmer mest online, ny medlemmer og ny emner.<hr />
		<b>Spor daglige hits:</b><br />Tilføjer en kolonne til statistiksiden med antal hits på dit forum.';
$helptxt['titlesEnable'] = 'Aktivering af valgte titler, vil tillade medlemmer med den relevante tilladelse at oprette en speciel titel for dem selv.
		Dette vil blive vist under deres navne.<br /><i>For eksempel:</i><br />Jeff<br />Fin fyr';
$helptxt['topbottomEnable'] = '<b>Aktiver Gå op/Gå ned knapper:</b><br />Dette vil tilføje knapper til at springe op og ned på siderne, uden at skulle scrolle manuelt.';
$helptxt['onlineEnable'] = '<b>Vis online/offline i beskeder og PM\'s:</b><br />Dette vil vise et ikon der indikerer om et medlem er online eller offline.';
$helptxt['todayMod'] = '<b>Aktiver &quot;I dag&quot; funktion:</b><br />Dette vil vise &quot;I dag&quot;, eller &quot;I går&quot;, i stedet for datoen.';
$helptxt['enablePreviousNext'] = 'Dette vil vise et link til forrige og næste emne.';
$helptxt['pollMode'] = 'Dette vælger om afstemninger er aktiveret eller ej. Hvis disse er deaktiveret, vil alle eksisterende afstemninger være skjult fra emnevisningen. Du kan vælge at fortsætte med at vise det regulære emne uden afstemning ved at vælge 		&quot;Vis i stedet eksisterende afstemninger som emner&quot;.<br /><br />For at vælge hvem der kan tilføje, se og poste i afstemninger m.m., kan du tilføje/fjerne rettigheder til disse. Husk dette, hvis afstemninger ikke virker.';
$helptxt['enableVBStyleLogin'] = '<b>Vis hurtig-login på alle sider</b><br />Dette vil vise et hurtig-login på alle sider.';
$helptxt['enableCompressedOutput'] = '<b>Aktiver komprimeret output:</b><br />Denne funktion vil komprimere outputtet til at bruge mindre båndbredde, men kræver zlib installeret.';
$helptxt['databaseSession_enable'] = '<b>Brug databasedrevne sessioner:</b><br />Denne funktion gør brug af databasen til sessionslager - dette er bedst for load balanced servere, men hjælper med alle timeout problemer og kan gøre forummet hurtigere. Virker ikke hvis session.auto_start er aktiveret.';
$helptxt['databaseSession_loose'] = '<b>Tillad caching af besøgte sider:</b><br />Aktivering af dette vil formindske båndbredden for dine brugere, og gøre at klikken tilbage vil ikke reloade siden - ulempen er at blandt andet nye ikoner og billeder ikke vil blive opdateret. (med mindre du klikker dig til siden, i stedet for at gå tilbage til den.)';
$helptxt['databaseSession_lifetime'] = '<b>Sekunder før en ubrugt session udløber:</b><br />Dette er antallet af sekunder sessions varer, efter de ikke er blevet brugt. Hvis en session ikke bruges i noget tid, udløber der en såkaldt &quot;timeout&quot;. Alt højere end 2400 er anbefalet.';
$helptxt['enableErrorLogging'] = '<b>Aktiver fejllog:</b><br />Dette vil logge alle fejl såsom forfejlede loginforsøg, så du kan se hvad der gik galt.';
$helptxt['allow_disableAnnounce'] = '<b>Tillad brugere at deaktivere beskeder fra nyhedscenteret:</b><br />Dette vil tillade brugere at fravælge beskeder fra emner du annoncerer, ved at checke &quot;Annoncér emne&quot; checkboksen når du poster.';
$helptxt['disallow_sendBody'] = '<b>Tillad ikke tekstindhold i mails sendt fra "abonnementbeskeder"?</b><br />Denne indstilling fjerner muligheden for at kunne modtage indholdet fra svar i abonnementsmail.<br /><br />Ofte vil medlemmer svare på abonnementsmailen, hvilket i de fleste tilfælde betyder at det er webmasteren der modtager mailen.';
$helptxt['compactTopicPagesEnable'] = '<b>Begræns antal af viste sidelinks:</b><br />Denne indstilling bestemmer hvor mange sidelinks der skal vises ad gangen.<br /><i>Eksempel:</i><br />
		&quot;3&quot; for at vise: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; for at vise: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = '<b>Vist indlæsningstid for hver side:</b><br />Dette vil vise antallet af sekunder SMF tog om at loade siden, i bunden af denne.';
$helptxt['removeNestedQuotes'] = '<b>Fjern tilknyttede citater i nye poster:</b><br />Dette vil kun viste citatet på poster i spørgsmål, ikke citérede poster fra dem.';
$helptxt['simpleSearch'] = '<b>Aktivér simpel søgning:</b><br />Dette vil vise et simpelt søgevindue, og linke til en mere avanceret søgeform.';
$helptxt['max_image_width'] = '<b>Max bredde/højde på postede billeder:</b><br />Dette tillader dig at sætte en max størrelse på postede billeder. Billeder mindre end maksimum-indstillingen, vil ikke blive berørt.';
$helptxt['mail_type'] = '<b>Afsendelsesmetode for mails:</b><br />Dette tillader dig enten at bruge standard PHP mailprogrammet, eller din mailserver.
		Udfyld detaljerne på din udgående mailserver, medmindre du valgte (PHP Standard).';
$helptxt['attachmentEnable'] = '<b>Indstillinger for vedhæftninger:</b><br />Vedhæftninger er filer som medlemmer kan uploade og vedhæfte i en post.<br /><br />
		<b>Check vedhæftningers filtype</b>:<br /> Vil du kontrollere hvilke filtyper medlemmerne uploader?<br />
		<b>Tilladte filtyper:</b><br /> Her kan du bestemme hvilke filtyper der kan vedhæftes.<br />
		<b>Vis vedhæftede billeder uder posteringer</b>:<br /> Hvis den uploadede fil er et billede, vil det blive vist under posten<br />
		<b>Sti til vedhæftninger:</b><br /> Stien til hvor vedhæftede filer bliver gemt<br />(eks.: /home/sites/dinside/www/forum/attachments)<br />
		<b>Adresse til vedhæftninger</b>:<br /> webadressen til vedhæftninger<br />(eks.: http://www.dinside.com/forum/attachments)<br />
		<b>Max anvendt plads til filer:</b> (i KB):<br /> Vælg hvor stor folderen til vedhæftninger kan være, inklusiv alle filer.<br />
		<b>Max samlet filstørrelse per postering:</b> (i KB):<br /> Vælg hvor meget samlet alle filer i én og samme postering må fylde.  Hvis denne grænse er sat lavere end &quot;Max størrelse for hver fil per postering&quot;-begrænsningen, vil denne være grænsen.<br />
		<b>Max størrelse for hver fil per postering</b> (i KB):<br /> Vælg hvor stor en enkelt fil maksimalt må være som en vedhæftning.<br />
		<b>Antal tilladte filer per postering:</b>:<br /> Vælg det maksimale antal vedhæftninger der kan være per post.';
$helptxt['karmaMode'] = '<b>Karma mode:</b><br />Karma en egenskab der viser populariteten på et medlem. Hvis et medlem har tilladelse til det, kan vedkommende give \'god\' eller \'dårlig\' karma til andre brugere, på denne måde måles brugeres popularitet. Du kan ændre antallet af beskeder behøvet for at kunne have en  &quot;karma&quot;, tiden mellen \'god\' eller \'dårlig\', samt hvorvidt administratorer også er berørt af tidsbegrænsningen.<br /><br />Hvorvidt medlemsgrupper kan give andre karma, er kontrolleret af rettigheder. Hvis du har problemer med at få dette til at virke for alle, så dobbeltcheck dine rettigheder.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'Kalenderen kan bruges til at vise fødselsdage, eller til at vise vigtige events der vedrører dit community.<br /><br />
		<b>Show days as link to \'Post Event\'</b>:<br />This will allow members to post events for that day, when they click on that date<br />
		<b>Show week numbers</b>:<br />Show which week it is.<br />
		<b>Max days in advance on board index</b>:<br />If this is set to 7, the next week\'s worth of events will be shown.<br />
		<b>Show holidays on board index</b>:<br />Show today\'s holidays in a calendar bar on the board index.<br />
		<b>Show birthdays on board index</b>:<br />Show today\'s birthdays in a calendar bar on the board index.<br />
		<b>Show events on board index</b>:<br />Show today\'s events in a calendar bar on the board index.<br />
		<b>Default Board to Post In</b>:<br />What\'s the default board to post events in?<br />
		<b>Minimum year</b>:<br />Select the &quot;first&quot; year on the calendar list.<br />
		<b>Maximum year</b>:<br />Select the &quot;last&quot; year on the calendar list<br />
		<b>Birthday color</b>:<br />Select the color of the birthday text<br />
		<b>Event color</b>:<br />Select the color of the event text<br />
		<b>Holiday color</b>:<br />Select the color of the Holiday text<br />
		<b>Allow events to span multiple days</b>:<br />Check to allow events to span multiple days.<br />
		<b>Max number of days an event can span</b>:<br />Select the maximum days that an event can span.<br /><br />
		Remember that usage of the calendar (posting events, viewing events, etc.) is controlled by permissions set on the permissions screen.';
$helptxt['localCookies'] = '<b>Aktiver lokal lagring af cookies:</b><br />SMF bruger cookies til at gemme login information på de besøgendes computer.
	Cookies kan gemmes globalt (myserver.com) eller lokalt(myserver.com/sti/til/forum).<br />
	Check denne indstilling hvis du har prolemer med at brugere bliver smidt automatisk af.<hr />
	Globalt gemte cookies er mindre sikre når de bliver brugt på en delt server (som Tripod).<hr />
	Lokale cookies virker ikke uden for forummets folder, så hvis forummet er gemt på www.myserver.com/forum, vil sider såsom www.myserver.com/index.php ikke kunne bruge kontoinformationerne.
	Især hvis der bruges SSI.php, er globale cookies anbefalet.';
$helptxt['enableBBC'] = '<b>Aktivér bulletin board kode (BBC):</b><br />Denne indstilling tillader dine medlemmer at bruge Bulletin Board Kode (BBC) i hele forummet, som f.eks at formatere deres poster med billeder, formateret tekst og andet.';
$helptxt['time_offset'] = '<b>Tidsforskydning:</b><br />Ikke alle forum-administratorer ønsker deres forum bruger samme tidsformat som serveren, systemet kører på. Brug denne mulighed til at angive forskudt tid (i timer), i forhold til serverens tidsindstilling. Negative- og decimaltal er tilladt.';
$helptxt['spamWaitTime'] = '<b>Tid mellem hver postering fra samme IP adresse:</b><br />Her kan du bestemme tiden der skal gå mellem posteringer. Dette kan bruges til at hindre brugere i at "spamme" dit forum, ved at bestemme hvor ofte de kan poste.';

$helptxt['enablePostHTML'] = '<b>Aktivér grundlæggende HTML i posteringer:</b><br />Dette tillader brugen af nogle basale HTML tags:
	&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;pre&gt;, &lt;blockquote&gt;, &lt;img src=&quot;&quot; /&gt;, &lt;a href=&quot;&quot;&gt;, og &lt;br /&gt;.';

$helptxt['themes'] = '<b>Tema Administration:</b><br />Her kan du vælge hvorvidt standardtemaet kan bruges, hvilke temaer brugere kan bruge, såvel som andre ting. Klik på et tema til højre, for at ændre indstillingerne for det.';
$helptxt['theme_install'] = '<b>Installer et nyt tema:</b><br />Dette tillader dig at installere nye temaer. Du kan gøre dette fra en allerede oprettet folder, ved at uploade et arkiv til temaet, eller ved at kopiere standard temaet(Default).<br /><br />Bemærk at folderen eller arkivet skal have en <tt>theme_info.xml</tt> definitionsfil.';
$helptxt['enableEmbeddedFlash'] = '<b>Indlemrer Flash i poster:</b><br />Denne indstilling tillader dine brugere at bruge Flash direkte i deres poster,
	på linie med billeder. Dette kan være en sikkerhedstrussel, selvom kun få har oplevet det.
	BRUG DET PÅ EGEN RISIKO!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Tillader folk at linke til <a href="' . $scripturl . '?action=.xml;sa=news">Seneste nyheder</a>
	og tilsvarende data. Det anbefales også at du begrænser størrelsen på seneste posteringer/nyheder da, når rss data vises i rss klienter som Trillian, forventes det at disse er afkortet.';
$helptxt['hotTopicPosts'] = '<b>Antallet af posteringer, før et emne bliver vist som hot:</b><br />Justér her antallet af posteringer i et svar for at dette bliver fremhævet som et &quot;hot&quot; emne eller
	&quot;meget hot&quot; emne.';
$helptxt['globalCookies'] = '<b>Brug subdomain-uafhængige cookies:</b><br />Tillader dig at bruge subdomain-uafhængige cookies.  For eksempel, hvis...<br />
	Din side er på http://www.simplemachines.org/,<br />
	og dit forum er på http://forum.simplemachines.org/,<br />
	Hvis du bruger denne modifikation, vil det tillade dig at tilgå forummets cookie på din side.';
$helptxt['securityDisable'] = '<b>Deaktiver administrationssikkerhed</b><br />Dette <i>deaktiverer</i> ekstra kodeordscheck for administrator sektionen. Dette er ikke anbefalet!<br /><br />Når dette <i>ikke</i> er aktiveret, skal administrator skrive sit kodeord oftere, for at komme ind i administrationen.';
$helptxt['securityDisable_why'] = 'Dette er dit aktuelle kodeord. (det samme du bruger til at logge ind.)<br /><br />At få dig til at skrive dette hjælper dig med at sikre at den administrering der foretages også bliver udført af <b>dig</b> . ';
$helptxt['emailmembers'] = 'I denne besked kan du bruge forskellige &quot;variabler&quot;.  Disse er:<br />
	{$board_url} - Webadressen til dit forum.<br />
	{$current_time} - Aktuel tid og dato.<br />
	{$member.email} - Det aktuelle medlems e-mail.<br />
	{$member.link} - Det aktuelle medlems link.<br />
	{$member.id} - Det aktuelle medlems id.<br />
	{$member.name} - Det aktuelle medlems navn.  (personligt.)<br />
	{$latest_member.link} - Link til det nyeste medlem.<br />
	{$latest_member.id} - Det nyeste medlems id.<br />
	{$latest_member.name} - Det nyeste medlem navn.';
$helptxt['attachmentEncryptFilenames'] = '<b>Kryptér gemte filenavne:</b><br />Kryptering af filnavne tillader dig at have flere filer med samme navn gemt, at kunne vedhæfte .php filer på en sikker måde, og højner generelt sikkerheden. Dette kan dog gøre det mere besværligt at skulle genetablere din database, hvis noget drastisk skulle hænde.';

$helptxt['failed_login_threshold'] = '<b>Maksimalt antal login forsøg:</b><br />Sæt antallet af forfejlede login forsøg, før brugeren viderestilles til kodehusker skærmbilledet.';
$helptxt['oldTopicDays'] = '<b>Tid før et emne bliver advaret som værende ældre ved svar:</b><br />Hvis denne indstilling er valgt, vil brugeren få en advarsel hvis vedkommende svarer i et emne, der ikke er blevet skrevet i i den angivne tid i dage, specificeret i denne indstilling. Sæt værdien til \'0\' for at deaktivere funktionen.';
$helptxt['edit_wait_time'] = '<b>Antal sekunder en besked kan redigeres, før sidste redigeringsdato vil blive ændret:</b><br />Antal sekunder en besked kan redigeres, før sidste redigeringsdato vil blive ændret.';
$helptxt['edit_disable_time'] = '<b>Maksimal tid fra oprettelse af emne der kan gå, indtil redigering deaktiveres:</b><br />Antal minutter der skal gå, før en bruger ikke længere kan redigere en post denne selv har lavet. Sæt til 0 for at deaktivere. <br /><br /><i>Bemærk: Dette vil ikke berøre brugere som har adgang til at redigere i andre folks poster.</i>';
$helptxt['enableSpellChecking'] = '<b>Aktivér stavekontrol:</b><br />Aktivérer stavekontrollen. Du SKAL have pspell library installeret på din server, og din PHP konfiguration sat op til at  bruge dette. Din server ' . (function_exists('pspell_new') == 1 ? 'SER UD TIL' : 'SER IKKE UD TIL') . ' at have dette (korrekt) installeret.';
$helptxt['lastActive'] = '<b>Brugere online de seneste xx minutter:</b><br />Sæt antallet af minutter tilbage i tiden hvor seneste aktive brugere er listet. Default tiden er 15 minutter. Alle brugere der har været aktive inden for den angivede tid, vil dermed blive vist som værende aktive';

$helptxt['autoOptDatabase'] = '<b>Optimer tabeller for hver antal dage:</b><br />Denne indstilling optimerer din database for hver det antal dage der er angivet. Sættes værdien til 1, optimeres din database hver dag. Du kan også angive det maksimale antal brugere der må være online, så du ikke belaster serveren eller generer for mange brugere.';
$helptxt['autoFixDatabase'] = '<b>Fix automatisk ødelagte tabeller:</b><br />Dette vil automatisk reparere ødelagte tabeller og fortsætte som intet var hændt. Dette kan være meget brugbart, da den eneste måde til at fikse den, er at reparere tabellen. På denne måde vil dit forum ikke være nede, indtil du erfarer der har været fejl. Du modtager en mail, hvis dette sker.';

$helptxt['enableParticipation'] = '<b>Vis deltagerikoner:</b><br />Dette viser et lille ikon i emnet, brugeren har postet i.';

$helptxt['db_persist'] = '<b>Brug en permanent forbindelse:</b><br/>Holder forbindelsen til serveren i live , for at øge ydelsen. Hvis du ikke er på en dedikeret server, kan dette give dig problemer med din host.';

$helptxt['queryless_urls'] = '<b>Søgemaskine-venlige URLs:</b><br />Dette ændrer formatet af linkene i forummet, så søgemaskiner bedre kan indeksere dem. De vil se ud som f.eks index.php/topic,1.html.<br /><br />Denne feature vil ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : '<i>ikke</i>') . ' virke på din server.';
$helptxt['countChildPosts'] = '<b>Medtæl underliggende boards antal beskeder til totalen:</b><br />Hvis du markerer denne indstilling, betyder det at indlæg og svar i underliggende boards medtælles i totalen på indexsiden til disse.<br /><br />Dette kan gøre visningen betydelig langsommere, men betyder at et board der ikke har nogle posteringer direkte under sig, ikke vil vise \'0\' poster.';
$helptxt['fixLongWords'] = '<b>Maximum antal karakterer per postering:</b><br />Denne indstilling deler ord længere end en given længde, så de ikke ødelægger forummets layout. (så meget...)  Denne indstilling bør ikke stå på under 40.';

$helptxt['who_enabled'] = '<b>Aktiver "brugere online" listen:</b><br />Denne mulighed tillader dine brugere at kunne se hvad andre foretager sig i forummet.';

$helptxt['recycle_enable'] = '<b>Aktivér genetablering af slettede emner:</b><br />Muliggør &quot;genetablering&quot; af slettede emner og posteringer. Emner og posteringer der slettes, flyttes til boardet angivet herunder.';

$helptxt['enableReportPM'] = '<b>Aktivér anmeldelse af personlige beskeder:</b><br />Denne indstilling tillader dine brugere at anmelde personlige beskeder de modtager, til administrationsteamet. Dette kan være hjælpsom til at spore misbrug af det personlige beskedcenter.';
$helptxt['max_pm_recipients'] = '<b>Det maksimale antal modtagere tilladt i personlige beskeder:</b><br />Denne indstilling tillader dig at kontrollere det maksimale antal modtagere en bruger kan sende en besked til ved afsendelse af personlige beskeder. Dette er meget brugbart til at stoppe spamudnyttelse af det personlige beskedcenter. Bemærk at brugere der er tilladt at sende nyhedsbreve, ikke er berørt af denne begrænsning. Sæt værdien til nul for at fjerne begrænsningen.';
$helptxt['pm_posts_verification'] = '<b>Det maksimale antal beskeder brugere må sende, før de skal kvittere med godkendelseskode:</b><br />Denne indstilling tvinger brugere til at skrive en kode vist i et verifikationsbillede, hvergang de sender en personlig besked. Kun brugere der sender et større antal beskeder end det angivede nummer, er nødt til at skulle skrive koden - dette burde hjælpe mod automatiske spamming scripts.';
$helptxt['pm_posts_per_hour'] = '<b>Det maksimale antal beskeder en bruger kan sende i timen:</b><br />Dette vil begrænse antallet af personlige beskeder pr. time, som kan sendes af en bruger. Indstillingen vedrører ikke administratorer og moderatorer.';

$helptxt['default_personalText'] = 'Sætter standardteksten en bruger vil få som sin	 &quot;personlige tekst.&quot;';

$helptxt['modlog_enabled'] = '<b>Log moderatorændringer:</b><br />Logger alle moderatorers handlinger';

$helptxt['guest_hideContacts'] = 'Hvis denne indstilling er valgt, vil mailadresser og Messenger kontaktdetaljer være skjult fra alle gæster i dit forum.';

$helptxt['registration_method'] = '<b>Registreringsmetoden nye medlemmer skal bruge:</b><br />Denne indstilling bestemmer hvilken registreringsmetode der skal bruges over for folk der ønsker at melde sig ind i dit forum. Du kan vælge mellem:<br /><br />
	<ul>
		<li>
			<b>Registrering er deaktiveret:</b><br />
				Deaktiverer registrering, hvilket betyder at ingen nye medlemmer kan tilmelde sig dit forum.<br />
		</li><li>
			<b>Øjeblikkelig Registrering</b><br />
				Nye medlemmer kan logge ind, så snart de har registreret sig i dit forum.<br />
		</li><li>
			<b>Medlemsaktivering</b><br />
				Hvis denne indstilling er valgt, får nye medlemmer en aktiveringsmail sendt til sig, med et link de skal klikke på for at blive fuldgyldigt medlem<br />
		</li><li>
			<b>Medlemsgodkendelse</b><br />
				Med denne indstilling skal alle nye medlemmer som registrerer sig, godkendes af administratoren før de kan blive medlem.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = '<b>Kræv genaktivering hvis brugere skifter e-mail:</b><br />Hvis denne indstilling er aktiveret, skal alle medlemmer der skifter deres mailadresse reaktivere deres konto via en e-mail sendt til den nye mailadresse.';
$helptxt['send_welcomeEmail'] = '<b>Send velkomstmail til nye medlemmer:</b><br />Hvis denne indstilling er sat, får alle nye medlemmer en e-mail som byder dem velkommen til dit community';
$helptxt['password_strength'] = '<b>Krav til brugeres kodeord:</b><br />Denne indstilling bestemmer hvor komplext kodeord skal være for brugerne af dit forum. Jo længere og mere kompliceret kodeordet er, jo sværere er det at kompromitere medlemmers konti.
	De mulige indstillinger er:
	<ul>
		<li><b>Lav - minimum 4 karakterer:</b> Kodeordet skal være på minimum 4 karakterer.</li>
		<li><b>Medium - kodeord kan ikke indeholde brugernavn:</b> Kodeordet skal være på mindst 8 karakterer, og må ikke indeholde brugernavn eller mailadresse på brugeren.</li>
		<li><b>Høj - blanding af forskellige karakterer:</b> Som i medium beskyttelse, bortset fra at kodeordet SKAL indeholde en blanding af store og små bogstaver, og mindst ét ciffer.</li>
	</ul>';

$helptxt['coppaAge'] = '<b>Aldersgrænse for nye medlemmer:</b><br /> Værdien i denne boks vil fastsætte minimumsalderen nye medlemmer skal være, for at få øjeblikkelig adgang til forummet.
	Ved registrering vil registranter få en besked, hvor de skal bekræfte om de er over denne alder, og hvis ikke, enten får deres optagelse afvist eller suspenderet, indtil en forældergodkendelse falder på plads - afhængigt af typen af registrering.
	Hvis værdien \'0\' er valgt, bliver alle andre aldersrestriktioner tilsidesat.';
$helptxt['coppaType'] = '<b>Handling hvis registranten er under minimumsalderen: </b><br /> Hvis aldersbegrænsning er aktiveret, vil denne indstilling definere hvad der sker hvis en bruger under minimumsalderen prøver at registrere sig i dit forum. Der er to mulige valg:
	<ul>
		<li>
			<b>Afvis registreringen:</b><br />
				Nye medlemmer under minimumsalderen, bliver øjeblikkelig afvist.<br />
		</li><li>
			<b>Forlang godkendelse fra forælder/værge:</b><br />
				Alle  medlemmer som prøver at registrere og som er under minimumsalderen, vil have deres konto markeret som &quot;afventer godkendelse&quot;, og vil blive præsenteret for en formular hvor deres forældre skal give tilladelse til at blive medlem i forummet.
				De vil også blive præsenteret med kontaktdetaljer som du har angivet i indstillingerne, således at de kan sende formularen til administratoren med mail eller fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = '<b>Postadresse hvortil godkendelsen skal sendes:</b><br /> Kontaktboksen er krævet, således at formularen der skal give adgangstilladelse for mindreårige, kan sendes til administratoren af forummet. Disse informationer vil blive vist til alle mindreårige, og er krævet til forælder/værge-godkendelse. I det mindste skal en postadresse eller et faxnummer være angivet.';

$helptxt['allow_hideOnline'] = 'Med denne indstilling vil alle medlemmer være i stand til at skjule deres online status fra andre brugere, (undtagen administratorer). Hvis indstillingen er deaktiveret, kan kun brugere med moderatorrettigheder skjule deres status. Bemærk at hvis denne indstilling deaktiveres, ændres ingen medlemmers status - det forhindrer dem blot i at være skjulte.';
$helptxt['allow_hideEmail'] = 'Med denne indstilling, kan medlemmer vælge at skjule deres mailadresse fra andre medlemmer. Administratorer kan dog altid se alles mailadresser.';

$helptxt['latest_support'] = 'Dette panel viser dig nogle af de mest almindelige problemer og spørgsmål vedrørende din serverkonfiguration. Bare roligt, Denne information bliver ikke logget.<br /><br />Hvis der bliver ved med at stå &quot;Modtager support information...&quot;, kan din computer højst sansynligt ikke få forbindelse til <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Her kan du se nogle af de mest populære samt andre installationspakker og mods, med hurtig og enkel installation.<br /><br />Hvis denne sektion ikke dukker op, har du formentlig ikke forbindelse til <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = '<b>Nyeste og mest populære temaer:</b><br />Dette område viser nogle af de nyeste og mest populære temaer fra <a href="http://www.simplemachines.org/">www.simplemachines.org</a>. Data bliver dog ikke vist korrekt, hvis din computer ikke kan forbinde til <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'For din egen sikkerhed, er svaret til dit spørgsmål (såvel som dit kodeord), krypteret på en måde hvor kun SMF kan fortælle om det er rigtigt, det kan dermed aldrig fortælle dig (eller nogen andre), hvad dit svar eller kodeord er.';
$helptxt['moderator_why_missing'] = 'Siden moderation foretages på et board-til-board basis, er du nødt til at gøre medlemmer til moderatorer fra <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">Administrér Boards</a>-interfacet.';

$helptxt['permissions'] = '<b>Håndter tilladelser:</b><br />Tilladelser er hvordan du enten tilføjer eller fjerner rettigheder fra grupper, til at gøre specifikke ting.<br /><br />Du kan modificere flere grupper på en gang, ved at markere checkboksene ud for dem, eller du kan redigere en specifik gruppe ved at klikke på \'Ændre.\'';
$helptxt['permissions_board'] = 'Hvis et board sættes til \'global,\' betyder det at boardet ikke vil have nogle specielle rettigheder. \'Lokal\' btyder det vil have dets egne rettigheder - separat fra de globale. Dette tillader dig at have et board som har flere eller færre rettigheder end andre, uden at du er nødt til at ændre dem for hvert eneste board.';
$helptxt['permissions_quickgroups'] = '<b>Sæt pre-defineret tilladelsesprofil:</b><br />Dette tillader dig hurtigt at sætte nogle &quot;standard&quot; tilladelser - standard betyder \'ingen specielle rettigheder\', begrænset betyder \'som en gæst\', moderator betyder \'rettigheder som moderator\', og til sidst betyder \'Maintainer\' rettigheder tæt på dem en administrator har.';
$helptxt['permissions_deny'] = '<b>Aktivér muligheden for at kunne nægte rettigheder:</b><br />Dette kan være brugbart hvis du vil fjerne tilladelser fra visse medlemmer. Du kan tilføje en medlemsgruppe med en \'afvis\'-tilladelse til de medlemmer du vil fjerne rettigheder fra.<br /><br />Brug dette med forsigtighed, en fjernet tilladelse vil forblive fjernet, uanset hvilke andre medlemsgruppper medlemmet er en del af.';
$helptxt['permissions_postgroups'] = '<b>Aktivér specielle rettigheder for brugere med et vis antal beskeder:</b><br />Aktivering af rettigheder for brugere med et vis antal beskeder, giver dig mulighed for at tildele medlemmer i disse grupper, specielle rettigheder. Rettigheder af post-baserede grupper, bliver <em>tilføjet</em> til rettighederne af de regulære medlemsgrupper.';
$helptxt['permissions_by_board'] = '<b>Aktivér avancerede board-rettigheder:</b><br />Denne indstilling giver dig mulighed for at sætte forskellige rettigheder for hvert eneste medlemsgruppe i hvert eneste board. Som standard bruger et board globale rettigheder, men med denne indstilling kan du sætte et board til at bruge lokale rettigheder. Dette giver en sofistikeret mulighed til at styre rettigheder.';
$helptxt['membergroup_guests'] = '<b>Ikke-registrerede Gæster:</b><br />Ikke-registrerede Gæster er alle brugere der ikke er logget ind.';
$helptxt['membergroup_regular_members'] = '<b>Ikke-gruppérede medlemmer:</b><br />Ikke-gruppérede medlemmer er alle medlemmer der er logget ind, men ikke er med i nogen primær medlemsgruppe.';
$helptxt['membergroup_administrator'] = '<b>Administrator:</b><br />Administratorer kan per definition gøre alt og se alle boards. Der forefindes derfor ingen rettighedsindstillinger for administratorer.';
$helptxt['membergroup_moderator'] = '<b>Moderatorer:</b><br />Moderator medlemsgruppen er en speciel medlemsgruppe. Tilladelser og indstillinger der er sat for en sådan gruppe, gælder kun <em>i de boards de er moderatorer i</em>. Uden for disse boards har de blot almindelige rettigheder, lige som ethvert andet medlem.';
$helptxt['membergroups'] = '<b>Administrer medlemsgrupper:</b><br />I SMF er der to typer af grupper dine medlemmer kan være en del af. Disse er:
	<ul>
		<li><b>Regulære Grupper:</b> En regulær gruppe er en gruppe som medlemmer ikke automatisk bliver puttet ind i. For at tilføje et medlem til en gruppe, skal du blot gå ind i deres profil og klikke &quot;Kontorelaterede indstillinger
&quot;. Herfra kan du tilføje medlemmet til de grupper du ønsker de skal være en del af.</li>
		<li><b>Post Grupper:</b> I modsætning til regulære grupper, kan medlemmer ikke tilføjes til postgrupper. I stedet for bliver medlemmer automatisk tildelt en postbaseret gruppe, hvilket sker ud fra at de opnår minimumsantallet af poster for at komme med i den pågældende gruppe.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Du kan redigere disse begivenheder ved at klikke på det røde asterisk (*) ved siden af navnet.';

$helptxt['maintenance_general'] = '<b>Forum Vedligeholdelse - Generel vedligehold:</b><br />Herfra kan du optimere alle tabeller (gør dem mindre og hurtigere!), checke at du har de nyeste filversioner, finde alle fejl som ødelægger dit board, genoptælle totaler, samt tømme logs.<br /><br />De sidste to bør undgås, medmindre der er noget galt som ikke decideret har ødelagt noget.';
$helptxt['maintenance_backup'] = '<b>Forum Vedligeholdelse - Backup Database:</b><br />Dette område tillader dig at gemme en kopi af alle poster, indstillinger, medlemmer og anden information fra dit forum, til en meget stor fil.<br /><br />Det er anbefalet at du af sikkerhedsgrunde ofte gør dette, måske en gang om ugen.';
$helptxt['maintenance_rot'] = '<b>Forum Vedligeholdelse - Fjern gamle posteringer:</b><br />Dette tillader dig <b>fuldstændig</b> og <b>uigenkaldeligt</b> at fjerne emner.  Det er anbefalet at du først tager en backup, som sikkerhed for at du skulle komme til at slette noget du ikke ville have slettet.<br /><br />Brug denne mulighed med forsigtighed.';

$helptxt['avatar_allow_server_stored'] = '<b>Server-gemte avatarer:</b><br />Dette tillader dine medlemmer at vælge mellem avatars gemt på din server. Disse ligger generelt på samme placering som SMF, under Avatars-folderen.<br />Et tip: Hvis du opretter foldere  i folderen Avatars, bliver disse til &quot;kategorier&quot; af avatars.<br /><br />Avatars er billeder og/eller logoer, medlemmer kan bruge som &quot;ansigt&quot; udadtil, mod andre brugere.';
$helptxt['avatar_allow_external_url'] = '<b>Eksterne avatarer:</b><br />Med dette aktiveret, kan dine medlemmer skrive en webadresse til en ekstern avatar. Problemet med dette er, at en avatar dermed kan være meget større, samt at du ikke har styr på hvilke billeder der så kommer ind i dit forum.<br /><br />Husk at medlemmer samtidig også skal have de rigtige rettigheder for at kunne bruge denne funktion. Denne indstilling aktiverer kun brugen af eksterne avatarer for de brugere der har de korrekte rettigheder.';
$helptxt['avatar_download_external'] = '<b>Download avatar til defineret adresse:</b><br />Med denne indstilling aktiveret, vil den webadresse som brugeren angiver, blive brugt til at downloade avataren fra den lokation. Hvis dette er sucessfuldt, vil denne blive behandlet som en avatar der kan uploades.';
$helptxt['avatar_allow_upload'] = '<b>Avatarer der kan uploades:</b><br />Denne indstilling er meget lig funktionen &quot;Eksterne avatarer&quot;, bortset fra du har bedre kontrol over avatarene, bedre mulighed for at reducere størrelsen på dem, og dine medlemmer behøver ikke at have et sted at gemme dem.<br /><br />Husk dog at dette kan tage en del plads fra din server.';
$helptxt['avatar_download_png'] = '<b>Konvertér reducerede avatars til PNG?</b><br />PNG filer fylder mere, men giver bedre kompression uden kvalitetstabs. Hvis denne mulighed ikke er markeret, vil der i stedet blive brugt JPEG - som ofte er mindre i filstørrelse, men også i en dårligere kvalitet.';

$helptxt['disableHostnameLookup'] = '<b>Deaktiver indhenting af hostnavn?</b><br />Dette deaktiverer lookup af hostnavn, hvilket på nogle servere er meget langsom. Bemærk at dette gør banning mindre effektiv.';

$helptxt['search_weight_frequency'] = '<b>Relativ søgevægt efter nummer eller matchende beskeder i et emne:</b><br />Faktorerne på søgevægten bruges til at fastslå relevansen at et søgeresultat. Ret disse faktorer til at gøre søgningen mere relevant for dit forum. F.eks er søgerelevansen i et nyhedsforum vægtet meget højt på de nyeste beskeder. Alle værdier er relative i forhold til hinanden, og skal bestå af positive heltal.<br /><br />Denne faktor tæller antallet af matchende beskeder, og deler dem efter det totale antal af beskeder i et emne.';
$helptxt['search_weight_age'] = '<b>Relativ søgevægt efter nyeste beskeder:</b><br />Faktorerne på søgevægten bruges til at fastslå relevansen at et søgeresultat. Ret disse faktorer til at gøre søgningen mere relevant for dit forum. F.eks er søgerelevansen i et nyhedsforum vægtet meget højt på de nyeste beskeder. Alle værdier er relative i forhold til hinanden, og skal bestå af positive heltal.<br /><br />Denne faktor fremhæver de nyeste matchende beskeder først. Jo nyere beskeder er, jo højere score.';
$helptxt['search_weight_length'] = '<b>Relativ søgevægt efter emnestørrelse:</b><br />Faktorerne på søgevægten bruges til at fastslå relevansen at et søgeresultat. Ret disse faktorer til at gøre søgningen mere relevant for dit forum. F.eks er søgerelevansen i et nyhedsforum vægtet meget højt på de nyeste beskeder. Alle værdier er relative i forhold til hinanden, og skal bestå af positive heltal.<br /><br />Denne faktor er baseret på enmets størrelse. Jo flere beskeder der er i emnet, jo højere score.';
$helptxt['search_weight_subject'] = '<b>Relativ søgevægt efter match i emnets subject:</b><br />Faktorerne på søgevægten bruges til at fastslå relevansen at et søgeresultat. Ret disse faktorer til at gøre søgningen mere relevant for dit forum. F.eks er søgerelevansen i et nyhedsforum vægtet meget højt på de nyeste beskeder. Alle værdier er relative i forhold til hinanden, og skal bestå af positive heltal.<br /><br />Denne faktor checker hvorvidt et match kan findes i subjektet i emnet.';
$helptxt['search_weight_first_message'] = '<b>Relativ søgevægt efter match i første besked:</b><br />Faktorerne på søgevægten bruges til at fastslå relevansen at et søgeresultat. Ret disse faktorer til at gøre søgningen mere relevant for dit forum. F.eks er søgerelevansen i et nyhedsforum vægtet meget højt på de nyeste beskeder. Alle værdier er relative i forhold til hinanden, og skal bestå af positive heltal.<br /><br />Denne faktor undersøger om et match kan findes i den første besked i et emne.';
$helptxt['search_weight_sticky'] = '<b>Relativ søgevægt efter fremhævede emner:</b><br />Faktorerne på søgevægten bruges til at fastslå relevansen at et søgeresultat. Ret disse faktorer til at gøre søgningen mere relevant for dit forum. F.eks er søgerelevansen i et nyhedsforum vægtet meget højt på de nyeste beskeder. Alle værdier er relative i forhold til hinanden, og skal bestå af positive heltal.<br /><br />Denne faktor kigger på om et emne er et fremhævet emne, og øger den relevante score hvis det er.';
$helptxt['search'] = '<b>Søg:</b><br />Juster her alle indstillinger der vedrører søgefunktionerne.';
$helptxt['search_why_use_index'] = '<b>Hvorfor skal man oprette et søgeindeks?</b><br />Et søgeindex kan kraftigt forbedre ydelsen på søgninger i dit forum. Især efterhånden som antallet af beskeder i dit forum vokser, vil søgning uden et index tage lang tid, og forøge presset på din database. Hvis dit forum har mere end 50.000 beskeder, er det en god ide at oprette et søgeindex for at sikre høj ydelse i dit forum.<br /><br />Bemærk at et søgeindex bruger en del plads. Et fuldtext index er et indbygget index i MySQL. Det er relativt kompakt (ca. samme størrelse som selve beskederne fylder i beskedtabellen), men en del ord er ikke indekserede, og kan ved visse søgninger være meget langsom. Specialindekset er ofte større (afhængig af din konfiguration kan det være op til 3 gange større end hvad beskederne fylder i beskedtabellen) men dets performance er bedre end fuldtekst index, og er relativt stabilt.';

$helptxt['see_admin_ip'] = 'IP-adresser bliver vist til administratorer og moderatorer for at lette moderationer og for at gøre det lettere at tracke folk der laver ballade. Husk på at IP-adresser ikke altid er identificererende , og at de flestes IP-adresse skifter periodisk.<br /><br />Medlemmer er også tilladt at se deres egen IP-adresser.';
$helptxt['see_member_ip'] = 'Din Ip-adresse vises kun til dig og moderatorer. Husk at denne information ikke er identificerende, og at de flestes IP-adresse skifter periodisk.<br /><br />Du kan ikke se andre medlemmers IP-adresser, og de kan ikke se din.';

$helptxt['ban_cannot_post'] = '\'Kan ikke poste\' restriktionen gør forummet til read-only tilstand for den bannede bruger. Denne kan ikke oprette nye emner, eller svare på eksisterende, sende personlige beskeder eller stemme i afstemninger. Det bannede medlem kan dog stadig læse personlige beskeder og emner.<br /><br />En advarsel vises på denne måde til de medlemmer der er bannede.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Posteringsindstillinger:</b><br />
			Redigér indstillinger relateret til postning af beskeder, samt måden beskeder præsenteres på. Her kan du også aktivere stavekontrol.
		</li><li>
			<b>Bulletin Board Kode:</b><br />
			Aktivér koder der får forumbeskeder til at fremstå på den rette måde. Justér også hvilke koder der skal være tilladt og hvilke der ikke skal.
		</li><li>
			<b>Cencurerede Ord:</b>
			For at holde sproget i dit forum under kontrol, kan du cencurere bestemte ord. Denne funktion tillader dig at konvertere forbudte ord til uskyldige versioner.
		</li><li>
			<b>Emne-indstillinger:</b>
			Redigér indstillinger relateret til emner. Antallet af emner pr side, om emner kan fremhæves eller ej, antallet af beskeder for at vise et emne som værende hot, o.s.v.
		</li>
	</ul>';

?>