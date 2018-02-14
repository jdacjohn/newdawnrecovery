<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Lukk vinduet';

$helptxt['manage_boards'] = '
	<b>Forumoversikt</b><br />
	P&aring; denne siden kan du opprette/sortere/fjerne fora og tilh&oslash;rende
	kategorier. For eksempel, om du har en side som dekker flere felter, som informasjon innenfor
	sport, biler og musikkm ville dette v&aelig;rt kategoriene du hadde opprettet. Under disse
	kategoriene ville du ha opprettet &quot;underkategorier&quot; eller &quot;fora&quot;
	for emenene under hver del. Det er et enkelt hierarki, med f&oslash;lgende oppsett: <br />
	<ul>
		<li>
			<b>Sport</b>
			&nbsp;- En kategori
		</li>
		<ul>
			<li>
				<b>Vinteridrett</b>
				&nbsp;- Et forum under kategorien &quot;Sport&quot;
			</li>
			<ul>
				<li>
					<b>Hopp</b>
					&nbsp;- Et delforum til forumet &quot;Vinteridrett&quot;
				</li>
			</ul>
			<li><b>Sommeridrett</b>
			&nbsp;- Et forum under kategorien &quot;Sport&quot;</li>
		</ul>
	</ul>
	Kategorier lar deg dele inn forumet i hovedemner (&quot;Biler, sport&quot;)
	og &quot;foraene&quot;, i hver kategori, er emner medlemmene kan diskutere i. 
	Et medlem interessert i Volvo, ville da ha laget et emne under &quot;Biler->Volvo&quot;.
	Kategorier lar folk raskt og enkelt finne hvor de har mest interesse av &aring; snakke om: 
	I steden for bare en &quot;butikk&quot; har du b&aring;de &quot;elektro-&quot; og
	&quot;klesbutikker&quot; du kan g&aring; i. Dette gj&oslash;r det enkelt n&aring;r du leter
	etter et plasma-TV, for da kan du g&aring; inn i elektrobutikk-&quot;kategorien&quot;
	isteden for klesbutikken (der det ikke akkurat er store sjansen for at du f&aring;r kj&oslash;pt
	et plasma-TV).<br />
	Som nevnt ovenfor, er en seksjon et n&oslash;kkelemne under verdt hovedemne.
	Dersom du vil diskutere &quot;Volvo&quot;, vil du da g&aring; inn under kategorien &quot;Biler&quot;
	og inn i forumet &quot;Volvo&quot; for &aring; skrive dine meninger i det forumet.<br />
	Administrative funksjoner p&aring; denne siden, er &aring; opprette nye fora under hver
	kategori, stokke om p&aring; dem (sette &quot;Volvo&quot; under &quot;Fiat&quot;) eller &aring;
	fjerne et forum fullstendig.';

$helptxt['edit_news'] = '<b>Endre forumnyheter</b><br />
	Dette lar deg skrive inn en tekst for nyhetselementer synlige p&aring forumets hovedside.
	Legg til hva du vil (f.eks. &quot;Ikke glem kampen p&aring; s&oslash;ndag!&quot;). Hver nyhetsak
	skal i hver sin boks, og de vises i tilfeldig rekkef&oslash;lge.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Vise alle medlemmer</b><br />
			Viser alle medlemmer p&aring; forumet. Du blir presentert for en liste med linker.
			Der du kan klikke p&aring; hvert navn for &aring; f&aring; mer detaljer om hvert medlem.
			Som administrator kan du endre p&aring; opplysningene. Du har full kontroll over
			dine medlemmer, inkludert tilgang til &aring; slette medlemskontoen til hver medlem fra forumet.<br /><br />
		</li>
		<li>
			<b>Venter p&aring; godkjenning</b><br />
			Denne vises kun om du har aktivert godkjennelse av admin for hver nye registrering. Den som
			&oslash;nsker &aring; opprette en konto p&aring; forumet, vil ikke bli fullverdige medlemmer f&oslash;r
			en administrator har godkjent medlemskapet. Denne delen vil liste opp alle de medlemmene som
			fremdeles venter p&aring; godkjenning, sammen med sin e-postadresse og IP-adresse.
			Du kan velge om du vil godta eller avvise (slette) hvert medlem i lista ved &aring; sette et kryss
			i boksen ved siden av medlemmet og velge handling basert p&aring; rullegardinslisten p&aring; bunnen
			av siden. N&aring;r du avviser et medlem, kan du velge &aring; slette medlemmet ved &aring enten
			gi medlemmet beskjed eller ikke om din avgj&oslash;relse.<br /><br />
		</li>
		<li>
			<b>Venter p&aring; aktivering</b><br />
			Denne delen vises kun om du har aktivert funksjonen med &aring; aktivere medlemskontoene via en link i 
			e-post, eller ved at du som administrator selv aktiverer medlemskapet. Denne delen vil liste opp alle medlemmene som
			enn&aring; ikke har aktivert sin medlemskonto. Fra dette bilde kan du enten godta, avvise eller sende p&aring;minnelse 
			til medlemmer som ikke er aktivert. Du kan ogs&aring; informere medlemmet via e-post om din avgj&oslash;relse.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Steng ute medlemmer</b><br />
	SMF gir deg muligheten til &aring; &quot;utestenge&quot; medlemmer, for &aring; unng&aring; folk som har
	brutt regler p&aring; forumet, f.eks. spamming, flodding eller annet, til &aring; f&aring; tilgang til forumet. 
	Som administrator kan du se hvert medlems IP-adresse i innleggene. I &quot;Utestengte medlemmer&quot; skriver du bare inn IP-adressen, lagrer 
	og de kan ikke lenger skrive p&aring; forumet fra den IPen.<br /> Du kan ogs&aring; utestenge medlemmer via e-postadressen.';

$helptxt['modsettings'] = '<b>Funksjoner og innstillinger</b><br />
	Det er mange innstillinger og funksjoner i denne delen, som kan endres p&aring;. Du vil ogs&aring; finne innstillinger for installerte modifikasjoner her.';

$helptxt['number_format'] = '<b>Standard tallformat</b><br />
	Du kan bruke denne innstillingen for &aring; justere formatet for tall p&aring; forumet. Standardformatet for forumet er:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Kommategnet blir brukt som skilletegn for tusen, mens . brukes for desimaler. Dette m&aring; gjerne endres til den norske standarden: 1 234,00, uten tusenskilletegn og med komma for desimaler.';

$helptxt['time_format'] = '<b>Standard tidsformat</b><br />
	Du har tilgang til &aring; endre utseendet for dato og tid p&aring; forumet. Det er mange bokstaver, men det er et ganske enkelt oppsett.
	Konverteringene f&oslash;lger PHP sin strftime-funksjon og blir beskrevet under (flere detaljer finnes p&aring; <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	F&oslash;lgende tegn blir gjenkjent som formater: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - forkortet navn p&aring; ukedag<br />
	&nbsp;&nbsp;%A - fullstendig navn p&aring; ukedag<br />
	&nbsp;&nbsp;%b - forkortet navn p&aring; m&aring;ned<br />
	&nbsp;&nbsp;%B - fullstendig navn p&aring; m&aring;ned<br />
	&nbsp;&nbsp;%d - dato i m&aring;neden (01 til 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - samme som %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - dato i m&aring;neden (1 til 31) <br />
	&nbsp;&nbsp;%H - timevisning med 24-timersklokke (fra 00 til 23) <br />
	&nbsp;&nbsp;%I - timevisning med 12-timersklokke (fra 01 til 12 b&oslash;r suppleres med %p for am/pm) <br />
	&nbsp;&nbsp;%m - m&aring;ned med tall (01 til 12) <br />
	&nbsp;&nbsp;%M - minuttvisning <br />
	&nbsp;&nbsp;%p - visning av &quot;am&quot eller &quot;pm&quot; for 12-timersklokke<br />
	&nbsp;&nbsp;%R<b>*</b> - tiden med 24-timersklokke <br />
	&nbsp;&nbsp;%S - sekundervisning <br />
	&nbsp;&nbsp;%T<b>*</b> - gjeldende tid, samme som %H:%M:%S <br />
	&nbsp;&nbsp;%y - &aring;rstall med to siffer (00 til 99) <br />
	&nbsp;&nbsp;%Y - &aring;rstall med fire siffer<br />
	&nbsp;&nbsp;%Z - tidssone, navn eller forkortelse<br />
	&nbsp;&nbsp;%% - gir deg tegnet \'%\' <br />
	<br />
	<i>* Vil ikke fungere p&aring; en Windows-basert server.</i></span>';

$helptxt['live_news'] = '<b>Siste nytt fra Simple Machines</b><br />
	Denne boksen vil vise siste kunngj&oslash;ringer fra <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	Du b&oslash;r sjekke denne boksen for oppdateringer, nye versjoner og viktig informasjon fra Simple Machines.';

$helptxt['registrations'] = '<b>Registreringsbehandling</b><br />
	Denne delen inneholder alle funksjonene som er n&oslash;dvendige for &aring; behandle nye registreringer p&aring; forumet. 
	Den inneholder opptil fire seksjoner basert p&aring, forumets innstillinger. De er som f&oslash;lger:<br /><br />
	<ul>
		<li>
			<b>Registrér nytt medlem</b><br />
			Fra dette bildet kan du velge &aring; registrere en medlemkonto for et medlem. Dette kan v&aelig;re nyttig om forumet
			er stengt for nye medlemmer eller om du, som administrator, &oslash;nsker &aring; opprette en testkonto.
			Dersom medlemskapet krever aktivering, vil medlemmet bli tilsendt en aktiveringslink i en e-post,
			som vedkommende m&aring; klikke p&aring. Du kan ogs&aring; velge &aring; sende medlemmet en e-post
			med nytt passord til den registrerte e-postadressen..<br /><br />
		</li>
		<li>
			<b>Endre registreringserkl&arlig;ring</b><br />
			Dette lar deg endre teksten til registreringserkl&aelig;ringen som vises n&aring; et medlem registrerer seg p&aring; forumet.
			Du kan legge til eller fjerne alt fra basiserkl&aelig;ringen, som f&oslash;lger med SMF.<br /><br />
		</li>
		<li>
			<b>Definér reserverte navn</b><br />
			Bruk denne delen til &aring; spesifisere ord og navn du ikke vil dine medlemmer skal bruke.<br /><br />
		</li>
		<li>
			<b>Instillinger</b><br />
			Denne delen er kun synlig om du har tilgang til &aring; administrere forumet.
			Fra dette bildet kan du velge registreringsmetode som er brukt p&aring; forumet, samt andre relaterte innstillinger.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Vis moderatorlogg</b><br />
	Denne delen lar administratorer kontrollere og sjekke alle moderatorhandlinger som moderatorene p&aring; forumet har utf&oslash;rt. 
	For &aring; unng&aring; at moderatorene kan slette sine spor, kan ingen av disse loggf&oslash;rte hendelsene slettes f&oslash;r etter 24
	timer er g&aring;tt siden handlingen ble utf&oslash;rt.
	Kolonnen "elementer" viser variablene som h&oslash;rer til handlingen.';
$helptxt['error_log'] = '<b>Loggf&oslash;rte feilmeldinger</b><br />
	Denne delen loggf&oslash;rer alle viktige feilmeldinger som har oppst&aring;tt under bruk av forumet ditt.
	Loggen lister opp alle feilmeldingene etter dato som kan sorteres ved &aring; klikke p&aring; pilen ved siden av hver dato.
	Du kan ogs&aring; filtrere feilmeldingene ved &aring; klikke p&aring; ikonet ved siden av hver feilmelding.
	Dette lar deg filtrere etter medlem. N&aring;r du har filtrering aktivert, vil kun resultater som passer til filtreringen bli vist.';
$helptxt['theme_settings'] = '<b>Designinnstillinger</b><br />
	Denne delen lar deg endre innstillingene for et spesielt design. Disse innstillingene inkluderer alternativer som designmappe og adresseinformasjon, men ogs&aring; innstillinger som p&aring;virker layouten til et design p&aring; forumet. De fleste design vil ha et variert utvalg av brukerdefinerbare innstillinger, som lar deg tilpasse designet til forumet p&aring; best mulig m&aring;te.';
$helptxt['smileys'] = '<b>Smilefjes</b><br />
	Her kan du legge til og fjerne smilefjes og smileysett. Merk deg at om et smilefjes er i et sett, er det i alle sett, ellers kan det virke
	forvirrende for medlemmer som bruker forskjellige smileysett.<br /><br />

	Du kan ogs&aring; endre innleggsikoner fra denne delen, om du har dem aktivert i innstillingene dine.';
$helptxt['calendar'] = '<b>Behandle kalenderen</b><br />
	Her kan du stille p&aring innstillingene for kalenderen, samt legge til og fjerne helligdager som kommer frem i kalenderen.';

$helptxt['serversettings'] = '<b>Serverinnstillinger</b><br />
	Her kan du endre p&aring; hovedinnstillingene til forumet. Denne delen inkluderer database- og adresseinnstillinger, samt 
	annen viktig konfigurasjon som mailinstillinger og cache. Tenk deg n&oslash;ye igjennom f&oslash;r du stiller p&aring; noe her, 
	fordi om du gj&oslash;r en feil, kan du gj&oslash;re forumet ustabilt.';

$helptxt['topicSummaryPosts'] = 'Dette lar deg stille inn antall tidligere innlegg som skal vises i emneoversikten p&aring; svarbildet.';
$helptxt['enableAllMessages'] = 'Sett dette til det <em>maksimale</em> antallet innlegg et emne kan ha for &aring; vise "Alle"-linken. Ved &aring; sette den lavere enn &quot;Antall innlegg per side i et emne&quot; vil bety at den linken aldri blir vist, mens om du setter den for h&oslash;yt kan det gj&oslash;re forumet ditt saktere.';
$helptxt['enableStickyTopics'] = 'Prioriterte emner er slike som forblir p&aring; toppen av emnelista. Dette blir oftest brukt til viktig informasjon. Selv om du kan endre p&aring; rettighetene, er det normalt bare moderatorer og administratorer som kan gj&oslash;re emner prioriterte.';
$helptxt['allow_guestAccess'] = 'Ved &aring; fjerne avhukingen i denne boksen vil du kun gi gjestene muligheten til &aring; logge inn, registrere, motta passordp&aring;minnelse osv. p&aring; forumet ditt. Men dette er ikke det samme som &aring; nekte gjestene tilgang til forumet.';
$helptxt['userLanguage'] = 'Ved aktivering av denne funksjonen vil du la medlemmene f&aring; velge spr&aring;kpakken de vil bruke p&aring; forumet. Dette vil ikke overstyre basisinnstillingen.';
$helptxt['trackStats'] = 'Statistikk:<br />Denn vil la medlemmene se de nyeste innleggene og de mest aktive emnene p&aring; forumet. Denne vil ogs&aring; vise ulike oversikter, som flest brukere p&aring;logget, nye medlemmer og nye emner.<hr />
		Sidevisninger:<br />Legger til en ekstra kolonne p&aring; statistikksiden med antall sidevisninger forumet ditt har hatt.';
$helptxt['titlesEnable'] = 'Ved &aring; aktive egendefinerte titler kan du la medlemmer, med relevante rettigheter, opprette en spesiell tittel som passer til seg selv. Denne vil vises like under visningsnavnet.<br /> <em>For eksempel:</em>:<br />Hans<br />En kul fyr';
$helptxt['topbottomEnable'] = 'Dette vil legge til knapper for &aring; g&aring til toppen eller bunnen av siden uten &aring; bla seg igjennom hele siden.';
$helptxt['onlineEnable'] = 'Dette vil legge til en indikator som vil vise om et medlem er innlogget eller utlogget';
$helptxt['todayMod'] = 'Dette vil vise &quotIdag&quot; eller &quot;Igår&quot; isteden for datoen.';
$helptxt['enablePreviousNext'] = 'Dette vil vise en link til neste og forrige emne.';
$helptxt['pollMode'] = 'Dette vil velge om du vil aktivere avstemninger eller ikke. Dersom avstemninger er deaktivert, vil eksisterende avstemninger skjules fra emneoversikten. Du kan velge &aring; vise dem som vanlige emner uten avstemning ved &aring; velge 
		&quot;Vis avstemninger som emner&quot;.<br /><br />For &aring; bestemme over hvem som kan opprette avstemninger, vise avstemninger og lignende, kan du bestemme det under rettighetene. Husk p&aring; dette om avstemninger ikke fungerer.';
$helptxt['enableVBStyleLogin'] = 'Dette vil vise et mer kompakt innloggingsfelt p&aring; hver side av forumet for gjestene.';
$helptxt['enableCompressedOutput'] = 'Dette vil komprimere utdata for &aring; spare b&aring;ndbredde, men det krever at serveren din har zlib installert.';
$helptxt['databaseSession_enable'] = 'Dette alternativet aktiverer bruk av sesjoner - som er best for servere med mange brukere, men det hjelper p&aring; timeout-meldinger og kan gj&oslash;re forumet raskere.';
$helptxt['databaseSession_loose'] = 'Ved &aring; aktivere dette, vil du begrense b&aring;ndbreddeforbruket for dine medlemmer, og gj&oslash;re slik at det &aring; klikke tilbake ikke vil oppfriske siden - det negative med dette er at ikonene vil ikke oppdateres, samt endel andre ting. (med mindre du klikker p&aring; oppdater siden istedet for &aring; g&aring; tilbake til den.)';
$helptxt['databaseSession_lifetime'] = 'Dette er antall sekunder en sesjon varer f&oslash;r den timer ut. Om den blir inaktiv, kalles det for at den har &quot;timet ut&quot;. Alt over 2400 sekunder er anbefalt.';
$helptxt['enableErrorLogging'] = 'Dette vil loggf&oslash;re alle feilmeldingene, som for eksempel en mislykket innlogging, slik at du kan se hva som gikk galt.';
$helptxt['allow_disableAnnounce'] = 'Dette vil la medlemmene f&aring; deaktivere varsling ved kunngj&oslash;ringer som blir laget n&aring;r du velger &quot;Kunngj&oslash;r emnet&quot;.';
$helptxt['disallow_sendBody'] = 'Dette sl&aring;r av funksjonen med &aring; sende innholdet i svar og innlegg i e-postmeldinger ved varsling.<br /><br />Oftest, n&aring;r medlemmer svarer p&aring; mailen, vil webmasteren motta svarene.';
$helptxt['compactTopicPagesEnable'] = 'Dette vil bare vise et utvalg av sidene for et langt emne.<br /><i>Eksempel:</i>
		&quot;3&quot; for &aring; vise: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; for &aring; vise: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Dette vil vise hvor lang tid det tok for SMF &aring laste fram siden p&aring bunnen av siden.';
$helptxt['removeNestedQuotes'] = 'Dette vil kun vise sitatene fra det opprinnelige innlegg, og ikke de andre innleggene det siteres fra.';
$helptxt['simpleSearch'] = 'Dette vil vise en enkel s&oslash;keboks og ha en link til for &aring; gi tilgang til avansert s&oslash;k.';
$helptxt['max_image_width'] = 'Dette lar seg sette en maksimumsst&oslash;rrelse for vedlagte bilder. Bilder som er mindre enn denne grensen vil ikke bli p&aring;virket av denne endringen.';
$helptxt['mail_type'] = 'Denne innstillingen lar deg velge PHPs basisinnstillinger eller innstillingene for SMTP. PHP st&oslash;tter ikke autentisering via SMTP (som mange leverand&oslash;rer krever n&aring;), s&aring; om du &oslash;nsker dette, b&oslash;r du velge SMTP. V&aelig;r oppmerksom p&aring; at SMTP kan v&aelig;re tregere og noen servere vil ikke godta brukernavn og passord.<br /><br />Du trenger ikke &aring; fylle inn innstillingene for SMTP om du bruker PHPs basisinnstilling.';
$helptxt['attachmentEnable'] = 'Vedlegg er filer som medlemmer kan laste opp og legge ved i sitt innlegg.<br /><br />
		<b>Kontroller filendelse på vedlegg</b>:<br /> &Oslash;nsker du &aring; sjekke at filene har korrekt endelse?<br />
		<b>Tillatte filendelser p&aring; vedlegg</b>:<br /> Du kan stille inn hvilke filendelser som er tillatt p&aring; forumet.<br />
		<b>Vedleggsmappe</b>:<br /> Stien til vedleggsmappen p&aring; serveren.<br />(Eks.: /home/sider/dinside/www/forum/attachments)<br />
		<b>Maksimumsst&oslash;rrelse for mappe</b> (i KB):<br /> Skriv inn hvor stor denne mappa kan v&aelig;, inkludert alle filene.<br />
		<b>Maksimumsst&oslash;rrelse for vedlegg i innlegg</b> (i KB):<br /> Skriv inn hva maksimumsst&oslash;rrelsen for alle vedlegg i hvert innlegg.  Om denne er satt lavere enn st&oslash;rrelsen per vedlegg, blir dette hovedgrensa.<br />
		<b>Maksimumsst&oslash;rrelse per vedlegg</b> (i KB):<br /> Skriv inn hva maksimumsst&oslash;rrelsen for et enkelt vedlegg.<br />
		<b>Maks antall vedlegg per innlegg</b>:<br /> Skriv inn det maksimale antallet vedlegg et medlem kan legge ved per innlegg.<br />
		<b>Vise bildevedlegg som bilde under innlegg</b>:<br /> Om den opplastede filen er et bilde, vil dette vises under innlegget.<br />
		<b>Endre bildest&oslash;rrelse ved visning under innlegg</b>:<br /> Om dette alternativet er valgt, vil dette lagre et separat (mindre) vedlegg til miniatyren for &aring; spare b&aring;ndbredde.<br />
		<b>Maksimumsbredde og -h&oslash;yde p&aring; miniatyrer</b>:<br /> Blir kun brukt om alternativet ovenfor &quot;Endre bildest&oslash;rrelse ved visning under innlegg&quot; er aktivert. Miniatyrene vil bli minimert proporsjonalt.';
$helptxt['karmaMode'] = 'Karma er en funksjon som kan vise populariteten til et medlem. Medlemmer, med gyldige rettigheter,
                kan si at et medlem har en &quot;bra&quot; eller &quot;d&aring;rlig&quot; karma basert p&aring; oppf&oslash;rsel og innlegg.
                Du kan stille inn antall innlegg som er p&aring;krevd for &aring; gi karma til medlemmer, tidspunktet mellom 
                hvor ofte slikt kan deles ut, og om adminstratorer m&aring; vente ogs&aring;. Dersom du har tr&oslash;bbel med denne funksjonen, 
                sjekk igjenom rettighetene.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'Kalenderen brukes for &aring; vise f&oslash;dselsdager eller for &aring; vise viktige hendelser relatert til ditt forum.<br /><br />
		<b>Vise dager som koblinger til "Legg til hendelse"</b>:<br />Dette vil la dine medlemmer legge til hendelser for den aktuelle dagen ved &aring; klikke p&aring; datoen<br />
		<b>Vise ukenummere</b>:<br />Vise hvilken uke datoene er i.<br />
		<b>Maks antall forest&aring;ende dager som skal vises p&aring; forumoversikten</b>:<br />Dersom dette er satt til 7, vil hendelser for den neste uken bli vist.<br />
		<b>Vis helligdager</b>:<br />Viser dagens helligdager under kalenderdelen p&aring; forumoversikten.<br />
		<b>Vis f&oslash;dselsdager</b>:<br />Viser dagens bursdagsbarn under kalenderdelen p&aring; forumoversikten.<br />
		<b>Vis hendelser</b>:<br />Viser dagens hendelser under kalenderdelen p&aring; forumoversikten.<br />
		<b>Standard forum for hendelser</b>:<br />Hva vil du skal v&aelig;re forumet for hendelser?<br />
		<b>Tillat hendelser som ikke knyttes mot et emne</b>:<br />Lar medlemmer legge til hendelser uten at de trenger &aring; v&aelig;re tilknyttet et emne.<br />
		<b>Minimum år</b>:<br />Skriv inn det &quot;f&oslash;rste&quot; &aring;ret i kalenderen.<br />
		<b>Maksimum år</b>:<br />Skriv inn det &quot;siste&quot; &aring;ret i kalenderen.<br />
		<b>Fødselsdagsfarge</b>:<br />Skriv inn fargen du vil ha p&aring; f&oslash;dselsdagene.<br />
		<b>Hendelsesfarge</b>:<br />Skriv inn fargen du vil ha p&aring; hendelsene<br />
		<b>Helligdagsfarge</b>:<br />Skriv inn fargen du vil ha p&aring; helligdagene<br />
		<b>Tillat hendelser over flere dager</b>:<br />Huk av for &aring; tillate hendelser med varighet over flere dager.<br />
		<b>Maks antall dager en hendelse kan vare</b>:<br />Skriv inn maksimalt antall dager en hendelse kan vare.<br /><br />
		Husk at bruk av kalenderen (legge til/endre hendelser osv.) er kontrollert av rettighetene som blir endret p&aring; rettighetsbildet.';
$helptxt['localCookies'] = 'SMF bruker informasjonskapsler for &aring; oppbevare innloggingsinformasjon p&aring; brukerens datamaskin.
	Informasjonskapslsene kan gjerne lagres for hele domenet (server.no) eller bare for forumet (server.no/forum/).<br />
	Merk dette alternativet om du har problemer med brukere som blir utlogget automatisk.<hr />
	Informasjonskapsler som lagres for hele domenet er mindre sikkert hvis brukt p&aring; delte webservere (som p&aring; Tripod eller home.no).<hr />
	Informasjonskapsler kun for forumet vil ikke fungere utenfor mappa til forumet, s&aring; om forumet ditt befinner seg p&aring; www.server.no/forum, kan f.eks. ikke en side som www.server.no/index.php f&aring; tak i kontoinformasjonen din. Om du bruker SSI.php, som f&oslash;lger med forumet, er det anbefalt at du bruker informasjonskapsler lagret for hele domenet.';
$helptxt['enableBBC'] = 'Ved &aring; aktivere dette alternativet vil du tillate dine medlemmer &aring; bruke BBC-koder p&aring; forumet, som vil la dem f&aring; legge til bilder til sine innlegg, formatere skriften og mye mer.';
$helptxt['time_offset'] = 'Ikke alle forumadministratorer tilh&oslash;rer samme tidssone som serveren forumet er hostet p&aring;. Bruk dette alternativet for &aring; skrive inn tidsavviket (i timer) i forhold til det forumet skal bruke fra serverens tidssone. Negative verdier og verdier med desimal (.) er tillatte.';
$helptxt['spamWaitTime'] = 'Ikke alle forumadministratorer tilh&oslash;rer samme tidssone som serveren forumet er hostet p&aring;. Bruk dette alternativet for &aring; skrive inn tidsavviket (i timer) i forhold til det forumet skal bruke fra serverens tidssone. Negative verdier og verdier med desimal (.) er tillatte.';

$helptxt['enablePostHTML'] = 'Dette vil tillate bruk av basis HTML-tagger i innlegg:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Her kan du velge hvilket basisdesign som skal brukes, hvilket design gjestene vil bruke og andre alternativer. Klikk p&aring; et design for &aring; endre innstillingene for det.';
$helptxt['theme_install'] = 'Dette lar deg installere nye design p&aring; forumet. Du kan gj&oslash;re dette fra en allerede opprettet mappe, ved &aring; laste opp en innpakket fil for designet eller ved &aring; kopiere basisdesignet.<br /><br />Merk deg at den innpakkede filen eller mappa m&aring; ha en fil med navnet <tt>theme_info.xml</tt> i seg.';
$helptxt['enableEmbeddedFlash'] = 'Dette alternativet vil la dine medlemmer aktivere Flash direkte i sine innlegg p&aring; samme m&aring;te som bilder. Dette kan v&aelig;re en stor sikkerhetsrisiko, skj&oslash;nt bare noen f&aring; har klart &aring; utnytte denne.
	BRUK KUN P&Aring; EGET ANSVAR!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Lar brukere linke til <a href="' . $scripturl . '?action=.xml;sa=news">siste nytt</a>
	og lignende data. Det er ogs&aring; anbefalt at du begrenser st&oslash;rrelsen p&aring; data ettersom n&aring; RSS-data blir vist i Trillian eller andre klienter, blir det kuttet ned.';
$helptxt['hotTopicPosts'] = 'Skriv inn antall innlegg for et emne til &aring; bli karakterisert som aktivt eller veldig aktivt.';
$helptxt['globalCookies'] = 'Gj&oslash;r innloggingsinformasjonskapsler tilgjengelige over ulike subdomener.  For eksempel om...<br />
	Siden din befinner seg p&aring; http://www.simplemachines.no/,<br />
	og forumet ditt befinner seg p&aring; http://forum.simplemachines.no/<br />
	vil dette alternativet la deg f&aring; tilgang til forumets informasjonskapsel p&aring; siden din. Ikke aktiver dette om det er flere subdomener (f.eks. hacker.simplemachines.no) som ikke er under din kontroll.';
$helptxt['securityDisable'] = 'Dette vil <i>deaktivere</i> den ekstra passordkontrollen for administratordelen. Dette er <b>ikke</b> anbefalt!';
$helptxt['securityDisable_why'] = 'Dette er ditt gjeldende passord. (samme som du bruker for &aring; logge inn.)<br /><br />Ved &aring; skrive dette inn forsikrer deg om at de endringene du utf&oslash;rer blir utf&oslash;rt av <b>deg</b>.';
$helptxt['emailmembers'] = 'I denne meldingen kan du bruke ulike &quot;variabler&quot;.  Disse er:<br />
	{$board_url} - Adressen til forumet ditt.<br />
	{$current_time} - Gjeldende klokkeslett.<br />
	{$member.email} - Medlemmets e-postadresse.<br />
	{$member.link} - Link til medlemmets profil.<br />
	{$member.id} - Medlemmets bruker-ID.<br />
	{$member.name} - Medlemmets navn. (For personifisering)<br />
	{$latest_member.link} - Link til profilen til det nyeste medlemmet.<br />
	{$latest_member.id} - Bruker-ID til det nyeste medlemmet.<br />
	{$latest_member.name} - Navnet til det nyeste medlemmet.';
$helptxt['attachmentEncryptFilenames'] = 'Krypterte filnavn p&aring; vedlegg lar deg ha flere vedlegg med samme navn, trygg bruk av .php-filer som vedlegg og &oslash;ker sikkerheten. Det vil, p&aring; en annen side, v&aelig;re vanskelig &aring; gjenopprette databasen over vedleggene om noe drastisk skulle skje.';

$helptxt['failed_login_threshold'] = 'Still inn antall mislykkete innloggingsfors&oslash;k f&oslash;r brukeren blir videresendt til skjermbildet for passordp&aring;minnelse.';
$helptxt['oldTopicDays'] = 'Dersom dette alternativet er aktivert vil medlemmet f&aring; en advarsel om vedkommende legger inn et emnet som ikke har blitt svart p&aring; etter x antall dager, som du bestemmer her. Skriv inn 0 for &aring; deaktivere dette alternativet.';
$helptxt['edit_wait_time'] = 'Antall sekunder et innlegg kan endres f&oslash;r endringstidspunktet blir loggf&oslash;rt.';
$helptxt['edit_disable_time'] = 'Antall minutter som skal g&aring; for et medlem ikke kan endre sitt innlegg. Skriv inn 0 for &aring; deaktivere. <br /><br /><i>Merk: Dette vil ikke ha noen effekt p&aring; medlemmer som har rettigheter til &aring; endre innlegg.</i>';
$helptxt['enableSpellChecking'] = '(Dette fungerer kun p&aring; engelsk) Aktiver stavekontroll. Du M&Aring; ha korrekt pspell-bibliotek installert p&aring; din server. Din server ' . (function_exists('pspell_new') ? 'HAR' : 'HAR IKKE') . ' dette satt opp.';
$helptxt['lastActive'] = 'Skriv inn tidsperioden som skal sees p&aring; etter aktive brukere. Basisinstillingen er 15 minutter.';

$helptxt['autoOptDatabase'] = 'Dette alternativet vil optimalisere databasen med jevne mellomrom basert p&aring; hva du skriver inn her. Skriver du inn 1 blir den optimalisert hver dag. Du kan ogs&aring; skrive inn hvor mange brukere online det kan v&aelig;re p&aring; det meste s&aring;nn at det ikke overbelaster serveren og skaper problemer for for mange brukere.';
$helptxt['autoFixDatabase'] = 'Dette vil automatisk reparere &oslash;delagte tabeller og fortsette som om ingenting har skjedd. Dette kan v&aelig;re nyttig fordi eneste m&aring;ten &aring; fikse dette er &aring; REPARERE tabellen. P&aring; denne m&aring;ten vil ikke forumet ditt g&aring; ned uten at du merker det da du vil f&aring; en e-post n&aring; dette skjer.';

$helptxt['enableParticipation'] = 'Dette vil vise et lite ikon p&aring; emner et medlem har skrevet i.';

$helptxt['db_persist'] = 'Dette beholder tilkoblingen aktiv for &aring; &oslash;ke ytelsen. Dersom du ikke er p&aring; en dedikert server, kan dette skape problemer hos din leverand&oslash;r.';

$helptxt['queryless_urls'] = 'Dette endrer utseendet p&aring; adressene slik at de er mer vennlige for s&oslash;kemotorene. Adressene vil se ut som f.eks. index.php/topic,1.html.<br /><br />Dette funksjonen vil ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'ikke') . ' fungere p&aring; din server.';
$helptxt['countChildPosts'] = 'Aktivering av dette alternativet vil bety at emner og innlegg i et forums delforum vil telles med totalene p&aring; hovedsiden.<br /><br />Dette vil gj&oslash;re forumet ditt litt treigere, men det vil bety at om det kun er innlegg og emner i delforumet, vil det ikke st&aring; 0 p&aring; hovedsiden.';
$helptxt['fixLongWords'] = 'Dette alternativet vil dele opp ord som best&aring; av flere enn et bestemt antall tegn slik at de ikke &oslash;delegger forumets layout. (s&aring; mye..) Dette alternativet b&oslash;r ikke settes til en verdi under 40 tegn.';

$helptxt['who_enabled'] = 'Dette alternativet lar deg aktivere eller deaktivere muligheten til &aring; se hvem som er p&aring; forumet og hva de driver med.';

$helptxt['recycle_enable'] = 'Oppretter en papirkurv der emner og innlegg som er slettet blir lagt inn.';

$helptxt['enableReportPM'] = 'Dette alternativet lar dine medlemmer rapportere personlige meldinger de mottar til administrasjonen. Dette kan v&aelig;re nyttig for &aring; kontrollere misbruk av PM-systemet.';
$helptxt['max_pm_recipients'] = 'Dette alternativet lar deg sette det maksimale antallet mottakere en PM kan ha fra et annet medlem. Dette kan bli brukt til &aring; forhindre reklamemisbruk av PM-systemet. Merk at medlemmer med rettigheter til &aring; sende ut nyhetsbrev, er fritatt fra denne begrensningen. Sett til null for ingen grense..';
$helptxt['pm_posts_verification'] = 'Denne innstillingen vil tvinge brukere til å skrive inn en kode fra et generert bilde hvr gang de sender en personlig melding. Kun brukere som har totalt antall innlegg lavere enn grenseverdien vil måtte legge inn koden - dette vil hjelpe på ovenfor automatiserte spam script.';
$helptxt['pm_posts_per_hour'] = 'Dette vil begrense antall personlige medlinger som kan bli sendt fra en bruker over en periode på 1 time. Dette vil ikke berøre adminstratorer eller moderatorer.';

$helptxt['default_personalText'] = 'Skriv inn den vanlige personlige teksten hvert medlem har.';

$helptxt['modlog_enabled'] = 'Loggf&osaslh;rer alle moderatorhandlinger.';

$helptxt['guest_hideContacts'] = 'Hvis dette alternativet er aktivert vil du skjule e-postadresser og annen kontaktinformasjon for gjestene p&aring; forumet.';

$helptxt['registration_method'] = 'Dette alternativet bestemmer hvilken registeringsmetode du vil bruke for nye medlemmer til ditt forum. Du kan velge mellom:<br /><br />
	<ul>
		<li>
			<b>Registrering deaktivert</b><br />
				Deaktiverer registeringsprosessen, som betyr at ingen nye medlemmer kan registrere seg p&aring; forumet ditt.<br />
		</li><li>
			<b>&Oslash;yeblikkelig registering</b><br />
				Nye medlemmer kan logge inn og skrive innlegg &oslash;yeblikkelig etter registering p&aring; forumet.<br />
		</li><li>
			<b>Medlem m&aring; aktivere seg</b><br />
				N&aring;r dette alternativet er aktivert m&aring; ethvert medlem som registrerer seg, klikke p&aring; en aktiveringslink som er sendt til medlemmets e-postadresse f&oslash;r de er medlemmer p&aring; forumet<br />
		</li><li>
			<b>Medlem m&aring; godkjennes</b><br />
				Dette alternativet vil gj&oslash;re slik at alle nye medlemmer m&aring; godkjennes av administrator f&oslash;r de blir medlemmer.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Om dette alternativet er aktivert, vil et medlem som endrer sin e-postadresse motta en aktiveringslink til sin nye e-postadresse for &aring; re-aktivere medlemskontoen sin';
$helptxt['send_welcomeEmail'] = 'Om dette alternativet er aktivert, vil en e-post bli sendt til ethvert nytt medlem for &aring; &oslash;nske dem velkommen til forumet';
$helptxt['password_strength'] = 'Denne innstillingen bestemmer sikkerhetsgraden til passordene medlemmene dine bruker. Desto sikrere passordene er, desto vanskeligere vil det v&aelig;re &aring; ta over et medlems brukerkonto.
	Alternativene er:
	<ul>
		<li><b>Lav:</b> Passordet m&aring; best&aring; av minimum fire (4) tegn.</li>
		<li><b>Middels:</b> Passordet m&aring; best&aring; av minimum &aring;tte (8) tegn og kan ikke inneholde deler av e-postadressen eller medlemmets brukernavn.</li>
		<li><b>H&oslash;y:</b> Samme som for middels, bare at passordet m&aring; inneholde en blanding av b&aring;de store og sm&aring; bokstaver, samt minst ett siffer.</li>
	</ul>';

$helptxt['coppaAge'] = 'Verdien i dette feltet vil bestemme minimumsalderen for nye medlemmer til &aring; f&aring; &oslash;yeblikkelig adgang til forumet. Ved registering m&aring; de bekrefte at de er over denne gitte alderen og dersom de ikke er, vil de enten bli nektet adgang til forumet eller settes p&aring; vent i p&aring;vente av godkjennelse fra foreldre/foresatte - avhengig av hvilken begrensning som er valgt.
	Dersom verdien er satt til 0 vil de resterende aldersbestemte begrensningene bli ignorert.';
$helptxt['coppaType'] = 'Dersom aldersgrense er satt vil denne innstillingen bestemme hva som skal skje om et medlem under aldersgrensen pr&oslash;ver &aring; registrere seg p&aring; forumet ditt. Det er to muligheter:
	<ul>
		<li>
			<b>Nekte registeringen:</b><br />
				Ethvert medlem under aldersgrensen vil f&aring; sin registering annulert.<br />
		</li><li>
			<b>Kreve godkjenning fra foreldre/foresatte</b><br />
				Ethvert nytt medlem under aldersgrensen vil kunne f&aring; tilgang til forumet som "Under godkjenning" og vil f&aring; tilgang til en utfyllingsform som foreldrene m&aring; fylle ut og godkjenne for &aring; gi tilgang til det aktuelle medlemmets adgang p&aring; forumet. De vil ogs&aring; f&aring; kontaktinformasjon til administrator slik at de kan sende denne utfyllingsformen via e-post eller telefaks.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Kontaktinformasjonen er p&aring;krevd for utfyllingsformer som gir adgang for mindre&aring;rige registeringer til adminstratoren. Disse detaljene vil bli vist til alle nye mindre&aring;rige og er p&aring;krevd en godkjennelse fra foreldre/foresatte. Skriv inn iallfall en e-postadresse eller telefaksnummer du kan n&aring;s p&aring;.';

$helptxt['allow_hideOnline'] = 'Med dette alternativet kan du tillate medlemmer &aring; skjule sin innloggingsstatus for andre medlemmer (untatt for admin). Dersom deaktivert, kan kun medlemmer med moderatortilgang skjule sin innloggingsstatus. Merk at dette ikke har p&aring;virkning p&aring; allerede innloggede medlemmer - det vil bare stoppe dem fra &aring; skjule seg selv ved en senere anledning.';
$helptxt['allow_hideEmail'] = 'Med dette aktivert kan medlemmer velge &aring; skjule sin e-postadresse for andre brukere og gjester. Men administratorer kan alltid se e-postadressene, og kan for&oslash;vrig ikke skjule sine adresser.';

$helptxt['latest_support'] = 'Dette panelet viser deg noen av de vanligste problemene og sp&oslash;rsm&aring;lene rundt ditt serveroppsett. Ingen grunn til bekymring, dette blir ikke loggf&oslash;rt eller noe.<br /><br />Dersom dette feltet kun sier &quot;Henter hjelpinformasjon&quot;, kan ditt system ikke koble til <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Her kan du se noen av de mest popul&aelig;re modifiseringspakker, med raske og enkle installasjoner.<br /><br />Dersom denne seksjonen ikke viser noe, kan ditt system ikke koble til <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Denne delen vil vise de nyeste og mest popul&aelig;re design fra <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>. Skjønt det vil ikke komme opp noe fornuftig om ditt system ikke kan koble til <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'For din egen sikkerhet, er svaret p&aring; ditt hemmelige sp&oslash;rsm&aring;l (p&aring; samme m&aring;te som ditt passord) kryptert p&aring; en slik m&aring;te at SMF kan kun fortelle deg om du har skrevet det riktig, slik at det aldri kan fortelle deg (eller noen andre) svaret eller passordet ditt.';
$helptxt['moderator_why_missing'] = 'Siden lokale moderatorer kun er for et forum om gangen, blir du n&oslash;dt for &aring; velge moderatorer fra <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">forumoversikten</a>.';

$helptxt['permissions'] = 'Rettigheter lar deg enten tillate eller nekte medlemsgrupper fra &aring; ulike handlinger p&aring; forumet.<br /><br />Du kan endre flere fora p&aring; en gang ved &aring; bruke avhukingsboksene eller du kan se p&aring; rettighetene til en spesifikk gruppe ved &aring; klikke p&aring; "Endre"';
$helptxt['permissions_board'] = 'Dersom et forum er satt til "Global", vil det bety at det forumet ikke har noen spesielle rettighetsregler. "Lokal" betyr at det har sine egne rettighetsregler i tillegg til de globale. Dette gir deg tilgang til &aring; sette ulike rettighetsregler for hvert forum, slik at du ikke trenger &aring; stille dem inn for hvert eneste.';
$helptxt['permissions_quickgroups'] = 'Dette lar seg bruke &quot;basis&quot; rettighetsoppsett - standard, betyr "ingenting spesielt", begrenset, betyr "som gjester", moderator, betyr "det moderator har" og til sist "vedlikehold", som er nesten like mange rettigheter som en administrator.';
$helptxt['permissions_deny'] = '&Aring; nekte rettigheter kan v&aelig; nyttig n&aring;r du vil ta bort noen rettigheter fra spesifikke medlemmer.  Du kan legge til en ekstra medlemsgruppe med "nektet" tilgang for medlemmene du vil nekte tilgang for.<br /><br />V&aelig;r forsiktig da en nektet rettighet vil forbli nektet uansett hvilke andre medlemsgrupper medlemmet er i.';
$helptxt['permissions_postgroups'] = 'Aktivering av rettigheter for medlemsgrupper basert p&aring; antall innlegg gir deg tilgang til &aring; sette spesiell tilgang for medlemmer som har skrevet et visst antall innlegg. Rettighetene for de innleggsbaserte gruppene vil bli <em>lagt til</em> i tillegg til rettighetene i medlemmenes vanlige medlemsgruppe.';
$helptxt['permissions_by_board'] = 'Aktivering av dette alternativet vil la deg sette ulike rettigheter for hvert forum. Som en basisinnstilling bruker et forum globale rettigheter, men med dette alternativet aktivert, kan du endre til lokale rettighetsinnstillinger. Dette vil gi deg en meget avansert m&aring;te &aring; behandle rettighetene p&aring;.';
$helptxt['membergroup_guests'] = 'Medlemsgruppen "Uregistrerte gjester", er alle brukere som ikke er innlogget.';
$helptxt['membergroup_regular_members'] = 'Medlemsgruppen "Ugrupperte medlemmer", er innloggede medlemmer uten en prim&aelig;r medlemsgruppe innstilt i sin profil.';
$helptxt['membergroup_administrator'] = 'Administratoren kan, per definisjon, gj&oslash;re akkurat hva vedkommende vil i hvert eneste forum. Det er ingen rettighetsinnstillinger for administratoren.';
$helptxt['membergroup_moderator'] = 'Medlemsgruppen "Moderator", er en spesiell medlemsgruppe. Rettigheter og innstillinger satt for denne gruppen har kun virkning for moderatorene <em>p&aring; foraene de kan styre over</em>. Utenfor de fora er de kun vanlige medlemmer.';
$helptxt['membergroups'] = 'I SMF er det to typer grupper dine medlemmer kan v&aelig;re en del av. Disse er:
	<ul>
		<li><b>Vanlige grupper:</b> En vanlig gruppe er en gruppe som medlemmene ikke blir automatisk satt til. For &aring; sette et medlem til en slik gruppe, g&aring;r du inn p&aring; Kontoinnstillinger p&aring; medlemmets profil. Her kan du sette medlemmet til hvilken som helst av de vanlige gruppene du mener de skal h&oslash;re til i.</li>
		<li><b>Innleggsbaserte grupper:</b> Det som skiller disse fra vanlige grupper, er at disse kan du ikke sette medlemmer til. Istedet blir medlemmene automatisk satt til en av disse gruppene alt etter hvor mange innlegg som kreves for hver gruppe.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Du kan endre disse hendelsene ved &aring; klikke p&aring; den r&oslash;de stjerna ved siden av navnet.';

$helptxt['maintenance_general'] = 'Her kan du optimalisere mysql-tabeller (gj&oslash;re dem mindre og raskere!), s&oslash;rge for at du har nyeste versjon, se etter feilmeldinger som kan &oslash;delegge forumet, telle alle forumets totaler og t&oslash;mme logger.<br /><br />De to nederste alternativene b&oslash;r kunne unng&aring;s med mindre noe er galt, men de vil ikke gj&oslash;re noe skade.';
$helptxt['maintenance_backup'] = 'Denne delen lar deg lagre en kopi av alle innlegg, innstillinger, medlemmer og annen informasjon fra ditt forum til en veldig stor fil.<br /><br />Det er anbefalt at du gj&oslash;r dette ofte av sikkerhetshensyn, kanskje ukentlig eller hver m&aring;ned.';
$helptxt['maintenance_rot'] = 'Dette lar deg slette gamle emner <b>for godt!</b> Det er anbefalt at du lager en sikkerhetskopi av dette f&oslash;rst i tilfelle du slettet noe du ikke burde gjort.<br /><br />V&aelig;r forsiktig med bruken av dette alternativet.';

$helptxt['avatar_allow_server_stored'] = 'Dette lar dine medlemmer velge blant avatarer som er lagret p&aring; serveren. Disse er, vanligvis, plassert i samme mappe som SMF under en mappe kalt "Avatars".<br /><b>Tips!</B> Hvis du lager undermapper i "Avatars" oppretter du der kategorier av avatarer.';
$helptxt['avatar_allow_external_url'] = 'Med denne aktivert, kan dine medlemmer skrive inn en ekstern adresse (URL) til sine egne avatarer. Det negative med det, kan være at de kan gjerne bruke avatarer som er ekstremt store eller linke til bilder du ikke vil tillate på ditt forum.';
$helptxt['avatar_download_external'] = 'Med denne aktivert, vil den eksterne avataren, som brukeren skriver inn, bli lastet ned til forumet ditt. Dersom adressen er korrekt, vil avataren bli behandlet som en opplastet avatar.';
$helptxt['avatar_allow_upload'] = 'Dette alternativet er nesten slik som for eksterne avatarer, men her har du mer kontroll over dem, med tanke p&aring; endring av st&oslash;rrelsen pluss at dine medlemmer ikke trenger &aring; legge ut sine avatarer et annet sted.<br /><br />Eneste minus, vil v&aelig;re at avatarene kan ta ekstremt stor plass p&aring; serveren din.';
$helptxt['avatar_download_png'] = 'PNG-filer er st&oslash;rre, men gir bedre komprimering av kvalitet. Dersom dette alternativet ikke er valgt, vil JPG-filer bli brukt istedenfor - disse er gjerne mindre, men kan tilby d&aring;rligere kvalitet under komprimering.';

$helptxt['disableHostnameLookup'] = 'Dette vil deaktivere oppsporing av vertsnavn, som i noen tilfeller kan v&aelig;re en treig prosess. Men dette kan gj&oslash;re utestengelser mindre effektive.';

$helptxt['search_weight_frequency'] = 'Vektleggingsfaktorer blir brukt for &aring; beregne relevansen til et s&oslash;keresultat basert p&aring; kriteriene. Endre disse faktorene slik at de passer til det som er viktig for ditt forum. Dersom ditt forum fokuserer mye p&aring; nyheter, vil du kanskje ha en h&oslash;y verdi p&aring; "Alder for innlegg". Alle verdier er relative i relasjon til hver andre og b&oslash;r kun inneholde positive tall.<br /><br />Denne faktoren teller antall innlegg som treffer og deler p&aring; antall innlegg innenfor emnet.';
$helptxt['search_weight_age'] = 'Vektleggingsfaktorer blir brukt for &aring; beregne relevansen til et s&oslash;keresultat basert p&aring; kriteriene. Endre disse faktorene slik at de passer til det som er viktig for ditt forum. Dersom ditt forum fokuserer mye p&aring; nyheter, vil du kanskje ha en h&oslash;y verdi p&aring; "Alder for innlegg". Alle verdier er relative i relasjon til hver andre og b&oslash;r kun inneholde positive tall.<br /><br />Denne faktoren rangerer alderen for nyeste innlegg som treffer innenfor emnet. Jo nyere innlegg, desto h&oslash;yere poengsum.';
$helptxt['search_weight_length'] = 'Vektleggingsfaktorer blir brukt for &aring; beregne relevansen til et s&oslash;keresultat basert p&aring; kriteriene. Endre disse faktorene slik at de passer til det som er viktig for ditt forum. Dersom ditt forum fokuserer mye p&aring; nyheter, vil du kanskje ha en h&oslash;y verdi p&aring; "Alder for innlegg". Alle verdier er relative i relasjon til hver andre og b&oslash;r kun inneholde positive tall.<br /><br />Denne faktoren er basert p&aring; emnest&oslash;rrelse. Jo flere innlegg som er i emnet, desto h&oslash;yere poengsum.';
$helptxt['search_weight_subject'] = 'Vektleggingsfaktorer blir brukt for &aring; beregne relevansen til et s&oslash;keresultat basert p&aring; kriteriene. Endre disse faktorene slik at de passer til det som er viktig for ditt forum. Dersom ditt forum fokuserer mye p&aring; nyheter, vil du kanskje ha en h&oslash;y verdi p&aring; "Alder for innlegg". Alle verdier er relative i relasjon til hver andre og b&oslash;r kun inneholde positive tall.<br /><br />Denne faktoren ser etter om kriteriene f&aring;r treff i tittelen p&aring; emner.';
$helptxt['search_weight_first_message'] = 'Vektleggingsfaktorer blir brukt for &aring; beregne relevansen til et s&oslash;keresultat basert p&aring; kriteriene. Endre disse faktorene slik at de passer til det som er viktig for ditt forum. Dersom ditt forum fokuserer mye p&aring; nyheter, vil du kanskje ha en h&oslash;y verdi p&aring; "Alder for innlegg". Alle verdier er relative i relasjon til hver andre og b&oslash;r kun inneholde positive tall.<br /><br />Denne faktoren ser etter om et treff for kriteriene finnes i det f&oslash;rste innlegget i et emne.';
$helptxt['search_weight_sticky'] = 'Vektleggingsfaktorer blir brukt for &aring; beregne relevansen til et s&oslash;keresultat basert p&aring; kriteriene. Endre disse faktorene slik at de passer til det som er viktig for ditt forum. Dersom ditt forum fokuserer mye p&aring; nyheter, vil du kanskje ha en h&oslash;y verdi p&aring; "Alder for innlegg". Alle verdier er relative i relasjon til hver andre og b&oslash;r kun inneholde positive tall.<br /><br />Denne faktoren ser etter om emnet er prioritert og &oslash;ker poengsummen dersom emnet er det.';
$helptxt['search'] = 'Juster alle innstillinger for s&oslash;kefunksjoner her.';
$helptxt['search_why_use_index'] = 'En s&oslash;keoversikt kan drastisk forbedre ytelsen til s&oslash;k p&aring; ditt forum. Spesielt n&aring; det blir flere og flere innlegg p&aring; forumet. Da vil et s&oslash;k uten s&oslash;keoversikt ta lenger tid og &oslash;ke presset p&aring; din database. Dersom ditt forum har flere enn 50 000 innlegg, er det nesten anbefalt at du bruker s&oslash;keoversikt for &aring; oppn&aring; h&oslash;yest ytelse p&aring; ditt forum.<br /><br /><b>Merk!</B> En s&oslash;keoversikt kan ta opp endel plass. Et fullteksts&oslash;k er en innebygget oversikt i MySQL. Denne er ganske kompakt (omtrent like stor som st&oslash;rrelsen p&aring; tabellen for innlegg), men mange ord blir ikke lagt til og kan i noen tilfeller f&oslash;re til treigere s&oslash;k. Den egendefinerte oversikten er ofte st&oslash;rre (avhengig av dine innstillinger kan den v&aelig;re opptil tre ganger s&aring; stor som tabellen for innlegg), men ytelsen er bedre enn for en fulltekstoversikt og mye mer stabil.';

$helptxt['see_admin_ip'] = 'IP-adressene er synlige for administratorer og moderatorer som hjelpemiddel i administrasjon og vil gj&oslash;re det enklere &aring; spore opp de som kun er ute etter &aring; skape d&aring;rlig stemning. Husk at IP-adressene ikke alltid sporer helt til identiteten for vedkommende, da IP-adresser ofte endres for hver person.<br /><br />Medlemmene kan se sin egen IP.';
$helptxt['see_member_ip'] = 'Din IP-adresse er kun synlig for deg og moderatorer. Husk at denne informasjonen ikke sporer tilbake til din identitet og at IP-adresser ofte forandrer seg.<br /><br />Du kan ikke se andre medlemmers IP-adresser og de kan heller ikke se din.';

$helptxt['ban_cannot_post'] = 'Begrensningen "Kan ikke skrive" vil sette forumet i skrivebeskyttet modus for det utestengte medlemmet. Vedkommende kan ikke opprette nye emner, svare p&aring; emner, sende personlige meldinger eller avgi stemme i avstemninger. Det bannlyste medlemmet kan p&aring; en annen side lese personlige meldinger og emner.<br /><br />En advarsel vil bli vist til medlemmet at vedkommende et utestengt p&aring; den m&aring;ten.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Innlegginnstillinger</b><br />
			Endrer innstillinger relatert til det med &aring; skrive innlegg og m&aring;ten innlegg er vist. Du kan ogs&aring; aktive stavekontroll fra her.
		</li><li>
			<b>BB-kode</b><br />
			Aktiverer koden som kan vise foruminnlegg med korrekt utseende. Du kan ogs&aring; velge hvilke koder som skal v&aelig;re tillatt.
		</li><li>
			<b>Sensurerte ord</b>
			For &aring; kunne ha litt kontroll p&aring; spr&aring;kbruken kan du sensurere spesielle ord p&aring; forumet. Denne funksjonen lar deg erstatte forbudte ord med mer uskyldige versjoner.
		</li><li>
			<b>Emneinnstillinger</b>
			Endrer innstillinger relatert til emner. Antall emner per side, prioriterte emner aktivert eller ei, antall innlegg i et emne for &aring; kalle det aktivt osv.
		</li>
	</ul>';

?>