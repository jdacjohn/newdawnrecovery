<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'St&auml;ng f&ouml;nstret';

$helptxt['manage_boards'] = '
	<b>Redigera tavlor</b><br />
	I denna meny kan du skapa, &auml;ndra ordning och ta bort tavlor och kategorier. Till exempel; om du har ett brett forum som b&aring;de inneh&aring;ller information om &quot;Sport&quot;, &quot;Bilar&quot; och &quot;Musik&quot;, s&aring; blir det de kategorier du b&ouml;r skapa. Under varje s&aring;dan kategori vill du troligen skapa tavlor (anslagstavlor) med &auml;mnen p&aring; varje s&aring;dan tavla. Det blir en enkel hierarki, med denna struktur: <br />
	<ul>
		<li>
			<b>Sport</b>
			&nbsp;- En &quot;kategori&quot;
		</li>
		<ul>
			<li>
				<b>Ishockey</b>
				&nbsp;- En tavla under kategorin &quot;Sport&quot;
			</li>
			<ul>
				<li>
					<b>Statistik</b>
					&nbsp;- En undertavla som ligger under tavlan &quot;Ishockey&quot;
				</li>
			</ul>
			<li><b>Fotbolll</b>
			&nbsp;- En tavla under kategorin &quot;Sport&quot;</li>
		</ul>
	</ul>
	Kategorier l&aring;ter dig dela upp forumet i bredare &auml;mnen (&quot;Bilar, Sport&quot;), och tavlorna
	d&auml;runder &auml;r de faktiska huvud&auml;mnen som dina medlemmar kan skriva i. En person som &auml;r intresserad
	av Volvo-bilar, skulle f&ouml;ljaktligen starta ett nytt &auml;mne under &quot;Bilar->Volvo&quot;. Kategorier
	l&aring;ter anv&auml;ndare snabbt hitta r&auml;tt utifr&aring;n deras intressen: Ist&auml;llet f&ouml;r en &quot;Aff&auml;r&quot;, s&aring; finns
	ist&auml;llet &quot;J&auml;rnaff&auml;r&quot; och &quot;Kl&auml;daff&auml;r&quot;. D&aring; blir det enkelt f&ouml;r dina anv&auml;ndare
	att hitta r&auml;tt.<br />
	Som tidigare p&aring;pekats &auml;r en (anslags)tavla ett huvud&auml;mne under en bredare kategori.
	Vill du diskutera Volvo-bilar, s&aring; g&aring;r du l&auml;mpligen in under kategorin &quot;Bilar&quot;, och d&auml;runder g&aring;r du till tavlan &quot;Volvo&quot;. f&ouml;r att d&auml;r skriva dina &aring;sikter.<br />
	Administrativa funktioner i denna avdelning innefattar att skapa nya tavlor under valfri kategori, att sortera om dem (i vilken ordning de ska visas) samt att ta bort tavlan helt och h&aring;llet.';

$helptxt['edit_news'] = '<b>Redigera forumnyheter</b><br />
	Det h&auml;r l&aring;ter dig ange texten f&ouml;r de nyheter som visas p&aring; forumindexet (f&ouml;rstasidan). Du kan l&auml;gga till vilken text du vill (ex. &quot; Gl&ouml;m inte bort konferensen p&aring; tisdag&quot;). Varje nyhet hamnar i en separat textruta, och kommer att visas slumpvalt.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Visa alla medlemmar</b><br />
			Visa alla medlemmar p&aring; tavlan. Du kommer h&auml;r att f&aring; en lista med alla medlemsnamn. Du kan klicka p&aring; namnen
			f&ouml;r att f&aring; all information om medlemmarna ifr&aring;ga (hemsidesadress, &aring;lder, o.s.v.), och som administrat&ouml;r
			kan du ocks&aring; &auml;ndra alla dessa uppgifter. Du har fullst&auml;ndig kontroll &ouml;ver medlemmarna, inklusive f&ouml;rm&aring;gan
			att ta bort dessa fr&aring;n forumet om det skulle beh&ouml;vas.<br /><br />
		</li>
		<li>
			<b>V&auml;ntar p&aring; godk&auml;nnande</b><br />
			Denna avdelning visas bara om du har aktiverat godk&auml;nnande av administrat&ouml;r f&ouml;r nya medlemmar. Personer som registrerar sig p&aring; forumet kommer d&aring; inte att bli fullst&auml;ndiga medlemmar f&ouml;rr&auml;n de godk&auml;nts av en administrat&ouml;r. I denna avdelning visas alla medlemmar som fortfarande v&auml;ntar p&aring; godk&auml;nnande, tillsammans med deras e-postadresser och IP-adresser. Du kan v&auml;lja att antingen godk&auml;nna eller neka (radera) dessa, genom att kryssa i rutorna bredvid medlemmen ifr&aring;ga och v&auml;lja &ouml;nskad &aring;tg&auml;rd fr&aring;n rullgardinsmenyn l&auml;ngst ned p&aring; sk&auml;rmen. N&auml;r du nekar en medlem kan du v&ouml;lja att radera medlemmen med eller utan att meddela vederb&ouml;rande om ditt beslut.<br /><br />
		</li>
		<li>
			<b>V&auml;ntar p&aring; aktivering</b><br />
			Denna avdelning visas bara om du har valt aktivering av nya medlemmar p&aring; forumet. D&aring; visas h&auml;r alla medlemmar som fortfarande inte aktiverat sina konton, genom att f&ouml;lja l&auml;nken i e-postmeddelandet de f&aring;r. Fr&aring;n denna sk&auml;rm kan du v&auml;lja att antingen aktivera, radera eller p&aring;minna medlemmarna att de fortfarande inte har aktiverat sina konton. Som du ser kan du ocks&aring; v&auml;lja att skicka e-post till medlemmarna med information om vad du gjort.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Bannlys medlemmar</b><br />
	SMF tillhandah&aring;ller m&ouml;jligheter att &quot;bannlysa&quot; anv&auml;ndare, f&ouml;r att f&ouml;rhindra br&aring;kstakar (exempelvis personer som postat spam, st&auml;llt till med andra problem, o.s.v.) fr&aring;n att anv&auml;nda forumet. Som administrat&ouml;r, kan du n&auml;r du l&auml;ser inl&auml;gg p&aring; forumet se vilken IP-adress som vederb&ouml;rande anv&auml;nde vid det aktuella tillf&auml;llet. I bannlysningslistan kan du helt enkelt knappa in den IP-adressen, och de kan d&aring; inte l&auml;ngre skriva inl&auml;gg fr&aring;n den datorn. Observera dock att oskyldiga kan komma att drabbas, d&aring; det med vissa Internet-leverant&ouml;rer kan framst&aring; som att flera anv&auml;ndare har samma IP-adress.<br />Du kan ocks&aring; bannlysa personer genom deras e-postadress.';

$helptxt['modsettings'] = '<b>&Auml;ndra inst&auml;llningar och tillval</b><br />
	I denna avdelning finns ett antal funktioner som kan anpassas till dina behov. Inst&auml;llningar f&ouml;r eventuella installerade paket (modifikationer) dyker vanligtvis ocks&aring; upp h&auml;r.';

$helptxt['number_format'] = '<b>Talformat</b><br />
	Du kan anv&auml;nda denna inst&auml;llning f&ouml;r att &auml;ndra hur tal (siffror) ska visas. Det anges i f&ouml;ljande format:<br />
	<div style="margin-left: 2ex;">1 234,00</div><br />
	D&auml;r mellanslaget &auml;r det tecken som ska anv&auml;ndas som tusentalsavgr&auml;nsare (mellan varje tusental). \',\' &auml;r tecknet som ska anv&auml;ndas som decimaltecken, och antal nollor anger antal decimaler vid avrundningar.';

$helptxt['time_format'] = '<b>Datumformat</b><br />
	Du kan f&ouml;rm&aring;gan att till fullo &auml;ndra hur datum och klockslag ska visas f&ouml;r dig sj&auml;lv p&aring; forumet. Det finns m&aring;nga kryptiska sm&aring; tecken, men det &auml;r egentligen ganska enkelt. Begreppen f&ouml;ljer samma standard som PHP-funktionen  strftime, och beskrivs mer ing&aring;ende nedan (mer information kan du hitta p&aring; <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	F&ouml;ljande tecken k&auml;nns igen i formatstr&auml;ngen: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - Veckodag i f&ouml;rkortad form (m&aring;n, etc).<br />
	&nbsp;&nbsp;%A - Hela veckodagen (m&aring;ndag, etc.)<br />
	&nbsp;&nbsp;%b - M&aring;nadens namn i f&ouml;rkortad form (jan, etc.)<br />
	&nbsp;&nbsp;%B - Hela m&aring;nadens namn (januari, etc.)<br />
	&nbsp;&nbsp;%d - Dagen p&aring; m&aring;naden (01 t.o.m. 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - Samma som %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - Dagen p&aring; m&aring;naden utan nollor (1 t.o.m. 31) <br />
	&nbsp;&nbsp;%H - Timme med 24-timmarsklocka, som anv&auml;nds i Sverige (00 t.o.m 23) <br />
	&nbsp;&nbsp;%I - Timme med 12-timmarsklocka (01 t.o.m. 12) <br />
	&nbsp;&nbsp;%m - M&aring;nad som nummer (01 t.o.m. 12) <br />
	&nbsp;&nbsp;%M - Minut som nummer <br />
	&nbsp;&nbsp;%p - Antingen &quot;am&quot; eller &quot;pm&quot; vid 12-timmarsklockor, utifr&aring;n den aktuella tiden<br />
	&nbsp;&nbsp;%R<b>*</b> - Klockslag i 24-timmarsklocka <br />
	&nbsp;&nbsp;%S - Sekund som decimaltal <br />
	&nbsp;&nbsp;%T<b>*</b> - Aktuellt klockslag, samma som %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2-siffrigt &aring;r (00 t.o.m 99) <br />
	&nbsp;&nbsp;%Y - 4-siffrigt &aring;r (ex. 2006)<br />
	&nbsp;&nbsp;%Z - Namn eller f&ouml;rkortning p&aring; aktuell tidszon <br />
	&nbsp;&nbsp;%% - Ett bokstavligt \'%\'-tecken <br />
	<br />
	<i>Tecken markerade med * fungerar inte p&aring; Windows-servrar.</i></span><br /><br />
	F&ouml;r vedertagen svensk standard, kan du exempelvis anv&auml;nda denna str&auml;ng: <b>%A den %e %B %Y kl. %H:%M:%S</b><br />
	vilket resulterar i datum s&aring;som: <b>m&aring;ndag den 23 september 2006 kl. 09:43:33</b>';

$helptxt['live_news'] = '<b>Tillk&auml;nnagivanden live</b><br />
	H&auml;r &aring;terfinns aktuella tillk&auml;nnagivanden fr&aring;n <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	Du b&ouml;r komma tillbaka hit med j&auml;mna mellanrum, f&ouml;r att f&aring; information om uppdateringar, nya versioner och annan viktig information fr&aring;n Simple Machines.';

$helptxt['registrations'] = '<b>Registreringshantering</b><br />
	Denna avdelning inneh&aring;ller alla funktioner som kan vara viktiga f&ouml;r att hantera nya medlemsregistreringar p&aring; forumet. H&auml;r kan upp till fyra underavdelningar synas, beroende p&aring; vilka inst&auml;llningar du valt. Dessa &auml;r:<br /><br />
	<ul>
		<li>
			<b>Registrera ny medlem</b><br />
			Fr&aring;n denna sk&auml;rm kan du registrera anv&auml;ndarkonton f&ouml;r nya medlemmar &aring; deras r&auml;kning. Det kan vara anv&auml;ndbart p&aring; forum d&auml;r registreringsm&ouml;jligheten &auml;r avst&auml;ngd, eller d&auml;r administrat&ouml;ren vill skapa ett testkonto. Om forumet &auml;r inst&auml;llt s&aring; att nya anv&auml;ndarkonton m&aring;ste aktiveras, s&aring; kommer e-post att skickas ut med en l&auml;nk som personen ifr&aring;ga m&aring;ste klicka p&aring;. P&aring; samma s&auml;tt kan du ocks&aring; v&auml;lja att skicka ett nytt l&ouml;senord till anv&auml;ndaren ifr&aring;ga till deras e-postadress.<br /><br />
		</li>
		<li>
			<b>&Auml;ndra medlemsvillkor</b><br />
			Detta l&aring;ter dig ange den text som visas som medlemsvillkor, vilket visas n&auml;r nya medlemmar registrerar sig p&aring; forumet. Du kan l&auml;gga till eller ta bort vad du vill fr&aring;n den standardtext, som f&ouml;ljer med SMF.<br /><br />
		</li>
		<li>
			<b>St&auml;ll in reserverade namn</b><br />
			Med detta gr&auml;nssnitt kan du ange ord eller namn som dina anv&auml;ndare inte f&aring;r anv&auml;nda sig av som anv&auml;ndarnamn.<br /><br />
		</li>
		<li>
			<b>Inst&auml;llningar</b><br />
			Den h&auml;r avdelningen visas bara om du har beh&ouml;righet att administrera forumet. Fr&aring;n denna sk&auml;rm kan du v&auml;lja vilken registreringsmetod som ska anv&auml;ndas p&aring; forumet, liksom &ouml;vriga registreringsrelaterade inst&auml;llningar.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Modereringslogg</b><br />
	Genom denna avdelning kan administrat&ouml;rer sp&aring;ra alla &aring;tg&auml;rder som forumets moderatorer har utf&ouml;rt. F&ouml;r att s&auml;kerst&auml;lla att moderatorer inte sj&auml;lv ska kunna d&ouml;lja sina handlingar genom att radera i loggen, s&aring; kan poster i denna loggfil inte raderas f&ouml;rr&auml;n minst 24 timmar efter att h&auml;ndelsen intr&auml;ffat.';
$helptxt['error_log'] = '<b>Fellogg</b><br />
	Felloggen sp&aring;rar alla allvarligare felmeddelanden som anv&auml;ndare p&aring; forumet r&aring;kat ut f&ouml;r. Som standard sorteras listan enligt datum med nyaste datumet f&ouml;rst, vilket kan &auml;ndras till motsatt ordning genom att klicka p&aring; den lilla pilen bredvid varje datum. Du kan ocks&aring; filtrera posterna, genom att klicka p&aring; n&aring;gon av bilderna bredvid n&aring;gon av texterna vid felmeddelandet. D&auml;rigenom kan du exempelvis filtrera efter medlem. N&auml;r du aktiverar ett filter, s&aring; visas bara de poster som st&auml;mmer &ouml;verens med filtret.';
$helptxt['theme_settings'] = '<b>Temainst&auml;llningar</b><br />
	Inst&auml;llningssk&auml;rmen l&aring;ter dig &auml;ndra s&aring;dana inst&auml;llningar som &auml;r specifika f&ouml;r ett tema. Det innefattar bl.a. s&ouml;kv&auml;gar till temat, men &auml;ven tillval som p&aring;verkar utseendet. De flesta teman har ett antal olika tillval som anv&auml;ndare sj&auml;lv kan v&auml;lja, s&aring; att du kan f&aring; allting som du sj&auml;lv vill.';
$helptxt['smileys'] = '<b>Smileycenter</b><br />
	H&auml;r kan du l&auml;gga till och ta bort smileys samt smileyupps&auml;ttningar. Det viktigaste &auml;r att om en smiley finns i en smileyupps&auml;ttning, s&aring; m&aring;ste den finnas i samtliga upps&auml;ttningar - annars skulle det kunna bli f&ouml;rvirrande n&auml;r dina anv&auml;ndare, om de v&auml;ljer olika smileyupps&auml;ttningar.<br /><br />

	Du kan ocks&aring; &auml;ndra meddelandeikoner h&auml;rifr&aring;n, om du har aktiverat s&aring;dana p&aring; inst&auml;llningssidan.';
$helptxt['calendar'] = '<b>Hantera kalender</b><br />
	H&auml;r kan du &auml;ndra inst&auml;llningar vad g&auml;ller kalendern, samt l&auml;gga till och ta bort h&ouml;gtider som visas i kalendern.';

$helptxt['serversettings'] = '<b>Serverinst&auml;llningar</b><br />
	H&auml;r kan du ange grundinst&auml;llningarna f&ouml;r forumet. Det innefattar bl.a. databasuppgifter och adresser, liksom andra viktigare inst&auml;llningar s&aring;som e-postinst&auml;llningar och cachning. Var f&ouml;rsiktig med allt du g&ouml;r i denna avdelning, d&aring; &auml;ndring av dessa inst&auml;llningar kan g&ouml;ra att forumet slutar fungera.';

$helptxt['topicSummaryPosts'] = 'Detta l&aring;ter dig ange hur m&aring;nga tidigare inl&auml;gg, som ska visas i &auml;mnessammanfattningen n&auml;r n&aring;gon svarar p&aring; ett &auml;mne.';
$helptxt['enableAllMessages'] = 'St&auml;ll detta till det <em>h&ouml;gsta</em> antalet inl&auml;gg ett &auml;mne f&aring;r ha, f&ouml;r att fortfarande ha m&ouml;jligheten att visa samtliga inl&auml;gg. Om detta v&auml;rde &auml;r l&auml;gre &auml;n &quot;Antal inl&auml;gg per sida i &auml;mnen&quot;, s&aring; inneb&auml;r det att det aldrig kommer att visas; och om du anger ett f&ouml;r h&ouml;gt v&auml;rde, s&aring; kan det g&ouml;ra forumet l&aring;ngsamt.';
$helptxt['enableStickyTopics'] = 'Fastklistrade &auml;mnen (p&aring; vissa forum kallat sticky-&auml;mnen) &auml;r &auml;mnen som alltid f&ouml;rblir l&auml;ngst upp p&aring; &auml;mneslistan i en tavla. Det anv&auml;nds mestadels f&ouml;r att uppm&auml;rksamma anv&auml;ndare p&aring; viktigare meddelanden. &Auml;ven om du kan &auml;ndra det med hj&auml;lp av r&auml;ttigheter, s&aring; &auml;r det som regel bara moderatorer och administrat&ouml;rer som kan klistra fast &auml;mnen.';
$helptxt['allow_guestAccess'] = 'Om du avmarkerar detta alternativ, s&aring; kommer det att f&ouml;rhindra oregistrerade g&auml;ster fr&aring;n att g&ouml;ra n&aring;gonting annat &auml;n det allra mest grundl&auml;ggande - logga in, registrera sig, anv&auml;nda l&ouml;senordsp&aring;minnelse, etc. - p&aring; forumet. Observera att det inte &auml;r samma sak som att f&ouml;rhindra g&auml;ster tillg&aring;ng till enskilda tavlor.';
$helptxt['userLanguage'] = 'Om du aktiverar denna funktion, s&aring; kan medlemmar sj&auml;lv v&auml;lja vilket spr&aring;k de vill att forumet ska visas p&aring;. Det p&aring;verkar inte det f&ouml;rvalda spr&aring;ket.';
$helptxt['trackStats'] = 'Statistik:<br />Detta l&aring;ter anv&auml;ndare se de senaste ionl&auml;ggen och de popul&auml;raste &auml;mnena p&aring; forumet. Det visar ocks&aring; en hel del statistik, s&aring;som exempelvis n&auml;r flest medlemmar av inloggade och n&auml;r flest &auml;mnen skrevs.<hr />
		Sidvisningar:<br />Detta l&auml;gger till en till kolumn till statistiksidan, med antal sidvisningar p&aring; ditt forum.';
$helptxt['titlesEnable'] = 'Om anpassade titlar aktiveras, s&aring; kan medlemmar med n&ouml;dv&auml;ndiga r&auml;ttigheter sj&auml;lv skapa en anpassad titel f&ouml;r sig sj&auml;lv.
		Detta visas nedanf&ouml;r deras namn vid exempelvis inl&auml;gg.<br /><i>Exempel:</i><br />Jeff<br />Schysst kille';
$helptxt['topbottomEnable'] = 'Detta l&auml;gger till knappar f&ouml;r &quot;G&aring; upp&quot; och &quot;G&aring; ned&quot;, s&aring; att medlemmar kan ta sig l&auml;ngst upp resp. l&auml;ngst ned p&aring; den aktuella sidan utan att beh&ouml;va rulla sig dit.';
$helptxt['onlineEnable'] = 'Detta kommer att visa en bild som talar om huruvida en anv&auml;ndare &auml;r inloggad just nu eller inte.';
$helptxt['todayMod'] = 'Med detta aktiverat kommer texten &quot;idag&quot;, respektive &quot;ig&aring;r&quot; att visas ist&auml;llet f&ouml;r datumet, vid inl&auml;gg som skrivits de dagarna.';
$helptxt['enablePreviousNext'] = 'Detta visar en l&auml;nk till n&auml;sta och f&ouml;reg&aring;ende &auml;mne p&aring; tavlan ifr&aring;ga.';
$helptxt['pollMode'] = 'Detta anger huruvida omr&ouml;stningar till&aring;ts eller inte. Om omr&ouml;stningar st&auml;ngts av, kommer eventuella befintliga omr&ouml;stningar (och hela dessa &auml;mnen) att d&ouml;ljas fr&aring;n listan p&aring; &auml;mnen p&aring; tavlorna. Du kan v&auml;lja att forts&auml;tta visa sj&auml;lva &auml;mnena utan tillh&ouml;rande omr&ouml;stningar genom att ist&auml;llet v&auml;lja &quot;Visa befintliga omr&ouml;stningar som &auml;mnen&quot;.<br /><br />F&ouml;r att v&auml;lja vilka som ska kunna skapa och visa omr&ouml;stningar, anv&auml;nder du r&auml;ttigheter d&auml;r det finns alternativ f&ouml;r s&aring;dant. Kom ih&aring;g det om omr&ouml;stningar inte funkar, trots att denna funktion &auml;r p&aring;slagen.';
$helptxt['enableVBStyleLogin'] = 'Detta visar en nedbantad inloggningsruta p&aring; varje sida p&aring; forumet f&ouml;r oregistrerade g&auml;ster.';
$helptxt['enableCompressedOutput'] = 'Denna funktion kommer att komprimera all utdata fr&aring;n forumet, f&ouml;r att minska den anv&auml;nda bandbredden. F&ouml;rutom snabbare laddningstider m&auml;rker anv&auml;ndarna ingen skillnad av detta, men det kr&auml;ver att modulen zlib finns installerad p&aring; servern.';
$helptxt['databaseSession_enable'] = 'Detta alternativ g&ouml;r att sessioner lagras i databasen, ist&auml;llet f&ouml;r vanliga filer p&aring; servern - det &auml;r b&auml;st f&ouml;r s&aring;dana avancerade webbhotell som balanserar anrop mellan olika servrar f&ouml;r samma sida, men kan vara till hj&auml;lp f&ouml;r alla former av timeout-problem samt kan dessutom snabba upp forumet.';
$helptxt['databaseSession_loose'] = 'Om du aktiverar detta, s&aring; minskas den anv&auml;nda bandbredden p&aring; forumet, d&aring; sidorna inte kommer att laddas om n&auml;r du klickar Bak&aring;t i webbl&auml;saren, utan ist&auml;llet anv&auml;nda webbl&auml;sarens mellanlagrade sidor. Nackdelen med detta &auml;r bl.a. att &quot;Nytt&quot;-ikonerna vid &auml;mnen inte kommer att uppdateras (s&aring;vida du inte klickar dig tillbaka till den sidan, ist&auml;llet f&ouml;r att anv&auml;nda Bak&aring;t-knappen).';
$helptxt['databaseSession_lifetime'] = 'Detta &auml;r det antal sekunder som sessioner ska h&aring;llas vid liv sedan senaste aktivitet. Om ingenting gjorts inom s&aring; m&aring;nga sekunder (ex. om man h&aring;llit p&aring; l&auml;nge med att skriva ett inl&auml;gg), s&aring; kommer man att f&aring; ett timeout-meddelande. Vi rekommenderar ett v&auml;rde p&aring; minst 2400 (= 40 minuter) f&ouml;r detta.';
$helptxt['enableErrorLogging'] = 'Detta kommer att logga alla felmeddelanden, s&aring;som exempelvis misslyckade inloggningar, s&aring; att du kan se vad som h&auml;nt.';
$helptxt['allow_disableAnnounce'] = 'Detta g&ouml;r s&aring; att medlemmar kan v&auml;lja bort att f&aring; e-post vid viktiga tillk&auml;nnagivanden, d.v.s. de &auml;mnen du anger ska skickas ut tillk&auml;nnagivanden p&aring; med hj&auml;lp av alternativet &quot;Tillk&auml;nnage &auml;mnet&quot; vid postande.';
$helptxt['disallow_sendBody'] = 'Detta alternativ tar bort valm&ouml;jligheten f&ouml;r anv&auml;ndare att kunna f&aring; hela texten vid inl&auml;gg och nya &auml;mnen i de e-postmeddelanden som skickas ut vid underr&auml;ttelser.<br /><br />Det &auml;r n&auml;mligen inte helt ovanligt att medlemmar f&ouml;rs&ouml;ker att svara p&aring; s&aring;dana e-postmeddelanden, vilket i s&aring; fall vanligen inneb&auml;r att webbmastern f&aring;r svaret.';
$helptxt['compactTopicPagesEnable'] = 'Detta kommer att visas ett urval av de tillg&auml;ngliga sidnumren, genom s&aring; m&aring;nga sidor som du anger.<br /><i>Exempel:</i>
		Ange &quot;3&quot; f&ouml;r att visa: 1 ... 4 [5] 6 ... 9 <br />
		Ange &quot;5&quot; f&ouml;r att visa: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Detta kommer att visa hur l&aring;ng tid som SMF tog p&aring; sig att skapa sidan ifr&aring;ga, l&auml;ngst ner p&aring; alla sidor (mest anv&auml;ndbart vid fels&ouml;kning).';
$helptxt['removeNestedQuotes'] = 'Detta kommer bara att visa det aktuella inl&auml;gget som citeras n&auml;r anv&auml;ndare anv&auml;nder citat-funktionen, och inte eventuella citat som redan f&ouml;rekom i det &auml;mnen (o.s.v.).';
$helptxt['simpleSearch'] = 'Detta visar en enklare s&ouml;kruta vid s&ouml;kning, med en l&auml;nk till det mer avancerade fullst&auml;ndiga s&ouml;kformul&auml;ret.';
$helptxt['max_image_width'] = 'Detta l&aring;ter dig ange en maximal storlek f&ouml;r bilder som visas i inl&auml;gg. Bilder som &auml;r mindre &auml;n denna maximala storlek kommer inte att p&aring;verkas.';
$helptxt['mail_type'] = 'Detta l&aring;ter dig v&auml;lja om e-post ska skickas med hj&auml;lp av PHP:s inbyggda inst&auml;llningar (vilket antingen inneb&auml;r Sendmail eller SMTP), eller om du ist&auml;llet vill ange egna SMTP-inst&auml;llningar. PHP inbyggda funktioner st&ouml;djer inte inloggning vid utskick av e-post (d.v.s. anv&auml;ndning av anv&auml;ndarnamn och l&ouml;senord), vilket m&aring;nga webbhotelln nuf&ouml;rtiden kr&auml;ver, s&aring; om ditt &auml;r ett s&aring;dant b&ouml;r du v&auml;lja SMTP.  Observera att SMTP kan sakta ner utskick, och somliga servrar godtar inte anv&auml;ndarnamn och l&ouml;senord.<br /><br />Om du anv&auml;nder PHP:s standard, beh&ouml;ver du inte fylla i n&aring;got av SMTP-inst&auml;llningarna.';
$helptxt['attachmentEnable'] = 'Bifogade filer (eller bilagor) inneb&auml;r filer som anv&auml;ndare kan ladda upp till servern, och l&auml;gga till som del av ett inl&auml;gg.<br /><br />
		<b>Kontrollera filtill&auml;gg p&aring; bilagor</b>:<br /> Vill du kontrollera filtill&auml;ggen p&aring; filerna?<br />
		<b>Till&aring;tna filtill&auml;gg p&aring; bilagor</b>:<br /> H&auml;r anger du vilka filtill&auml;gg som ska till&aring;tas p&aring; bifogade filer.<br />
		<b>Katalog f&ouml;r bifogade filer</b>:<br /> S&ouml;kv&auml;gen till den katalog d&auml;r bifogade filer ska lagras<br />(exempelvis:: /home/sites/dinsida/www/forum/attachments)<br />
		<b>Maxstorlek f&ouml;r katalogen f&ouml;r bifogade filer</b> (i KB):<br /> Ange hur stor katalogen d&auml;r de bifogade filerna lagras f&aring;r bli, inklusive alla filer i den.<br />
		<b>Maxstorlek f&ouml;r bifogade filer i varje inl&auml;gg</b> (i KB):<br /> Ange den h&ouml;gsta till&aring;tna totala filstorleken f&ouml;r alla bifogade filer i ett enskilt inl&auml;gg. Om detta v&auml;rde &auml;r l&auml;gre &auml;n gr&auml;nsen f&ouml;r varje bifogad fil, s&aring; kommer det h&auml;r v&auml;rdet att g&auml;lla f&ouml;r b&aring;da.<br />
		<b>Maxstorlek f&ouml;r varje enskild fil</b> (i KB):<br /> Ange den maximala filstorleken p&aring; varje enskild bifogad fil.<br />
		<b>Max antal bifogade filer per inl&auml;gg:</b>:<br /> Ange hur m&aring;nga bifogade filer som varje person kan bifoga i varje inl&auml;gg.<br />
		<b>Visa bifogade bildfiler som bilder under inl&auml;gg</b>:<br /> Om den uppladdade filen &auml;r en bild, s&aring; kommer den att visas nedanf&ouml;r inl&auml;gget.<br />
		<b>Storleksf&ouml;r&auml;ndra bilder n&auml;r de visas under inl&auml;gg</b>:<br /> Om detta alternativ &auml;r p&aring;slaget, s&aring; kommer en s&auml;rskild f&ouml;rminskad bild att visas som miniatyrbild, f&ouml;r att f&ouml;rminska bandbredd/laddningstid.<br />
		<b>Maximal bredd och h&ouml;jd f&ouml;r miniatyrbilder</b>:<br /> Anv&auml;nds bara med alternativet &quot;Storleksf&ouml;r&auml;ndra bilder n&auml;r de visas under inl&auml;gg&quot;. Detta &auml;r den maximala bredd och h&ouml;jd som bifogade bilder kommer att f&ouml;rminskas till. De kommer att skalas ner proportionerligt.';
$helptxt['karmaMode'] = 'Karma &auml;r en funktion f&ouml;r att visa medlemmars popularitet..Om de till&aring;ts g&ouml;ra det, s&aring; kan medlemmar ge positivt eller negativt omd&ouml;me till andra medlemmar; vilket &auml;r hur deras popularitet m&auml;ts. Du kan &auml;ndra antal inl&auml;gg som kr&auml;vs f&ouml;r att kunna p&aring;verka n&aring;gons karma, hur l&aring;ng det m&aring;ste g&aring; innan man f&aring;r ge karma p&aring; nytt samt huruvida &auml;ven administrat&ouml;rer ska l&aring;sas av denna tidsgr&auml;ns.<br /><br />Huruvida grupper av medlemmar kan ge positiv eller negativ karma, kontrolleras av r&auml;ttigheter. Om du har problem att f&aring; denna funktion att fungera, kontrollera d&aring; dena r&auml;ttigheter.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'The calendar can be used for showing birthdays, or for showing important moments happening in your community.<br /><br />
		<b>Show days as link to \'Post Event\'</b>:<br />This will allow members to post events for that day, when they click on that date<br />
		<b>Show week numbers</b>:<br />Show which week it is.<br />
		<b>Max days in advance on board index</b>:<br />If this is set to 7, the next week\'s worth of events will be shown.<br />
		<b>Show holidays on board index</b>:<br />Show today\'s holidays in a calendar bar on the board index.<br />
		<b>Show birthdays on board index</b>:<br />Show today\'s birthdays in a calendar bar on the board index.<br />
		<b>Show events on board index</b>:<br />Show today\'s events in a calendar bar on the board index.<br />
		<b>Default Board to Post In</b>:<br />What\'s the default board to post events in?<br />
		<b>Allow events not linked to posts</b>:<br />Allow members to post events without requiring it to be linked with a post in a board.<br />
		<b>Minimum year</b>:<br />Select the &quot;first&quot; year on the calendar list.<br />
		<b>Maximum year</b>:<br />Select the &quot;last&quot; year on the calendar list<br />
		<b>Birthday color</b>:<br />Select the color of the birthday text<br />
		<b>Event color</b>:<br />Select the color of the event text<br />
		<b>Holiday color</b>:<br />Select the color of the Holiday text<br />
		<b>Allow events to span multiple days</b>:<br />Check to allow events to span multiple days.<br />
		<b>Max number of days an event can span</b>:<br />Select the maximum days that an event can span.<br /><br />
		Remember that usage of the calendar (posting events, viewing events, etc.) is controlled by permissions set on the permissions screen.';
$helptxt['localCookies'] = 'SMF anv&auml;nder cookies f&ouml;r att lagra inloggningsinformation p&aring; anv&auml;ndarnas datorer. Cookies
	kan sparas antingen globalt (f&ouml;r ex. dom&auml;nnamn.se) eller lokalt (f&ouml;r ex. dom&auml;nnamn.se/forum).<br />
	Markera detta alternativ om du eller dina anv&auml;ndare f&aring;r problem med att de blir utloggade automatiskt eller dylikt.<hr />
	Globalt sparade cookies &auml;r mindre s&auml;kra om de anv&auml;nds p&aring; delade webbservrar, d.v.s. exempelvis webbhotell med m&aring;nga webbsidor p&aring; samma fysiska server.<hr />
	Lokala cookies fungerar inte utanf&ouml;r forumkataligen, s&aring; om ditt forum finns p&aring; adress www.dom&auml;nnamn.se/forum, s&aring; kommer inte sidan www.dom&auml;nnamn.se/index.php att komma &aring;t kontoinformationen.
	S&auml;rskilt n&auml;r du anv&auml;nder SSI.php, rekommenderar vi starkt att du anv&auml;nder globala cookies.';
$helptxt['enableBBC'] = 'V&auml;lj detta alternativ f&ouml;r att l&aring;ta dina medlemmar anv&auml;nda forumkoder (s.k. Bulletin Board Code eller BBC) p&aring; forumet; f&ouml;r att p&aring; s&aring; s&auml;tt kunna skriva inl&auml;gg med formatering, s&aring;som bilder samt f&auml;rg- och storleksf&ouml;r&auml;ndring av text.';
$helptxt['time_offset'] = 'Inte alla forumadministrat&ouml;rer vill att deras forum ska anv&auml;nda sig av samma tidszon som den fysiska servern &auml;r placerad i - exempelvis kanske ditt webbhotell ligger i utlandet, medan du vill anv&auml;nda svenska tider p&aring; forumet. Med detta alternativ kan du ange en f&ouml;rskjutning f&ouml;r forumet gentemot servers tid, r&auml;knat i timmar. Du kan anv&auml;nda b&aring;de positiva och negativa tal, och &auml;ven decimaltal om s&aring; beh&ouml;vs.';
$helptxt['spamWaitTime'] = 'H&auml;r kan du ange hur l&aring;ng tid som m&aring;ste g&aring; mellan varje inl&auml;gg som dina anv&auml;ndare skriver. Det kan anv&auml;ndas f&ouml;r att motverka spam, genom att begr&auml;nsa hur ofta anv&auml;ndarna kan posta.';

$helptxt['enablePostHTML'] = 'Detta till&aring;ter anv&auml;ndning av vissa grundl&auml;ggande HTML-taggar i inl&auml;gg:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'H&auml;r kan du v&auml;lja huruvida standardtemat g&aring;r att v&auml;lja, vilket tema som kommer att anv&auml;ndas f&ouml;r g&auml;ster och andra temarelaterade inst&auml;llningar. Klicka p&aring; ett tema till h&ouml;ger, f&ouml;r att &auml;ndra inst&auml;llningar f&ouml;r det temat.';
$helptxt['theme_install'] = 'H&auml;r kan du installera nya teman. Det kan du g&ouml;ra utifr&aring;n en befintlig katalog p&aring; servern, genom att ladda upp en packad fil med temat eller genom att g&ouml;ra en kopia av standardtemat.<br /><br />Observera att den packade filen eller katalogen m&aring;ste inneh&aring;lla en definitionsfil vid namn <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Detta alternativ l&aring;ter dina anv&auml;ndare anv&auml;nda Flash inuti inl&auml;gg (f&ouml;r ex. animationer), precis som vanliga bilder. Detta medf&ouml;r en viss s&auml;kerhetsrisk, &auml;ven om det hittills inte &auml;r m&aring;nga som lyckats att utnyttja det. ANV&Auml;ND P&Aring; EGEN RISK!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Till&aring;ter personer att l&auml;nka till <a href="' . $scripturl . '?action=.xml;sa=news">Senaste nyheterna</a>
	och dylika data. Det rekommenderas ocks&aring; att du begr&auml;nsar storleken p&aring; senaste inl&auml;ggen/nyheterna, eftersom vissa klienter (som ex. Trillian) kortar ner RSS-data som skickas.';
$helptxt['hotTopicPosts'] = '&Auml;ndra antalet inl&auml;gg i ett &auml;mne som kr&auml;vs f&ouml;r att &auml;mnet ska klassas som &quot;hett&quot; respektive
	&quot;mycket hett&quot; topic.';
$helptxt['globalCookies'] = 'G&ouml;r s&aring; att inloggningscookies finns tillg&auml;ngliga under samtliga underdom&auml;ner till dom&auml;nnamnet ifr&aring;ga. Till exempel, om...<br />
	Din sajt finns p&aring; http://www.simplemachines.org/,<br />
	och ditt forum finns p&aring; http://forum.simplemachines.org/,<br />
	Med detta alternativ kan du komma &aring;t forumets cookie &auml;ven p&aring; din huvudsida. Aktivera inte detta alternativ om det finns andra underdom&auml;ner till ditt dom&auml;nnamn som du inte sj&auml;lv har kontroll &ouml;ver.';
$helptxt['securityDisable'] = 'Detta <i>inaktiverar</i> den extra l&ouml;senordsf&ouml;rfr&aring;gningen n&auml;r personer f&ouml;rs&ouml;ker att g&aring; till administrationsgr&auml;nssnittet. Detta rekommenderas inte!';
$helptxt['securityDisable_why'] = 'Detta &auml;r dett nuvarande l&ouml;senord (samma som du anv&auml;nder vid inloggning).<br /><br />Att knappa in detta s&auml;kerst&auml;ller att du verkligen vill utf&ouml;ra vad du nu h&aring;ller p&aring; med, och att det verkligen &auml;r <b>du</b> som g&ouml;r det.';
$helptxt['emailmembers'] = 'I detta meddelande kan du anv&auml;nda n&aring;gra s.k. &quot;variabler&quot;. Dessa &auml;r:<br />
	{$board_url} - Internetadressen till ditt forum.<br />
	{$current_time} - Aktuellt klockslag.<br />
	{$member.email} - Aktuella medlemmens e-postadress.<br />
	{$member.link} - Aktuella medlemmens l&auml;nk.<br />
	{$member.id} - Aktuella medlemmens ID-nummer.<br />
	{$member.name} - Aktuella medlemms namn (f&ouml;r att f&aring; meddelandet att se mer personligt ut)<br />
	{$latest_member.link} - Den senast registrerade medlemmens l&auml;nk.<br />
	{$latest_member.id} - Den senast registrerade medlemmens ID-nummer.<br />
	{$latest_member.name} - Den senast registrerade medlemmens namn.';
$helptxt['attachmentEncryptFilenames'] = 'Om du krypterar filnamnen, s&aring; blir det m&ouml;jligt att ha mer &auml;n en bifogad fil med samma namn, att utan risk anv&auml;nda PHP-filer som bifogade filer; plus att det h&ouml;jer s&auml;kerheten. Dock kan det medf&ouml;ra att det blir sv&aring;rare att bygga upp databasen igen, om n&aring;got drastiskt skulle r&aring;ka intr&auml;ffa.';

$helptxt['failed_login_threshold'] = 'Ange antalet misslyckade inloggningsf&ouml;rs&ouml;k, innan anv&auml;ndaren ist&auml;llet ska vidarebefordras till sk&auml;rmen f&ouml;r l&ouml;senordsp&aring;minnelse.';
$helptxt['oldTopicDays'] = 'Om detta alternativ &auml;r aktiverat, s&aring; kommer ett varningsmeddelande att visas om en anv&auml;ndare f&ouml;rs&ouml;ker att svara p&aring; ett inl&auml;gg som det inte skrivits i p&aring; en viss tid, r&auml;knat i antal dagar. S&auml;tt till 0, om du vill st&auml;nga av den funktionen.';
$helptxt['edit_wait_time'] = 'Antal sekunder som anv&auml;ndare kan &auml;ndra i sina inl&auml;gg, innan forumet b&ouml;rjar logga datum f&ouml;r senaste &auml;ndring.';
$helptxt['edit_disable_time'] = 'Antal minuter som f&aring;r g&aring; innan anv&auml;ndare inte l&auml;ngre kan &auml;ndra i inl&auml;gg de gjort. S&auml;tt till 0, om de alltid ska kunna &auml;ndra i inl&auml;ggen.<br /><br /><i>Obs: Detta p&aring;verkar inte anv&auml;ndare som har beh&ouml;righet att redigera andra personers inl&auml;gg.</i>';
$helptxt['enableSpellChecking'] = 'Aktivera stavningskontroll. Du M&Aring;STE ha modulen pspell installerad p&aring; servern (webbhotellet), och PHP-konfigurationen m&aring;ste ocks&aring; innefatta st&ouml;d f&ouml;r pspell. Din server ' . (function_exists('pspell_new') ? 'HAR' : 'HAR INTE') . ' detta st&ouml;d.';
$helptxt['lastActive'] = 'Ange hur m&aring;nga minuter som aktiva anv&auml;ndare ska visas p&aring; forumindex, d.v.s. de anv&auml;ndare som varit aktiva under de senaste X minuterna. Standard &auml;r 15 minuter.';

$helptxt['autoOptDatabase'] = 'Detta alternativ optimerar automatiskt databasen, med s&aring; h&auml;r m&aring;nga dagars mellanrum. S&auml;tt till 1 f&ouml;r att optimera dagligen. Du kan ocks&aring; ange hur m&aring;nga anv&auml;ndare som maximalt f&aring;r vara inloggade samtidigt n&auml;r optimeringen inleds, s&aring; att inte servern blir &ouml;verbelastad eller alltf&ouml;r m&aring;nga anv&auml;ndare blir irriterad p&aring; att forumet g&aring;r l&aring;ngsamt.';
$helptxt['autoFixDatabase'] = 'Detta kommer automatiskt att reparera skadade eller korrupta tabeller, och d&auml;refter forts&auml;tta som om inget h&auml;nt. Detta kan vara anv&auml;ndbart, eftersom det enda s&auml;ttet att &aring;tg&auml;rda s&aring;dana problem &auml;r just att REPARERA tabellen, och p&aring; s&aring; s&auml;tt beh&ouml;ver inte forumet ligga nere tills du uppt&auml;cker felet. Du kommer dock att f&aring; ett e-postmeddelande n&auml;r s&aring; h&auml;nder.';

$helptxt['enableParticipation'] = 'Detta visar en liten ikon bredvid de &auml;mnen som medlemmen ifr&aring;ga skrivit inl&auml;gg i.';

$helptxt['db_persist'] = 'H&aring;ller databasuppkopplingen vid liv hela tiden, f&ouml;r att &ouml;ka hastigheten p&aring; forumet. Om du inte har forumet p&aring; den dedikerad server (d.v.s. utan andra kunder), finns det en viss risk att du kan f&aring; problem med webbhotellet om du aktiverar detta.';

$helptxt['queryless_urls'] = 'Detta &auml;ndrar formatet p&aring; de Internetadresser som forumet anv&auml;nder, s&aring; att s&ouml;kmotorer l&auml;ttare kan indexera ditt forum. D&aring; kommer adresserna att se ut s&aring; h&auml;r: index.php/topic,1.html.<br /><br />Denna funktion ' . (strpos(php_sapi_name(), 'apache') !== false ? 'kommer att fungera' : 'kommer inte att fungera') . ' p&aring; din server.';
$helptxt['countChildPosts'] = 'Med detta alternativ kommer &auml;mnen och inl&auml;gg i undertavlor att r&auml;knas in i totalsummorna p&aring; forumindex.<br /><br />Detta kommer att sakta ner forumet m&auml;rkbart, men medf&ouml;r att tavlor som inte inneh&aring;ller n&aring;gra &auml;mnen (men d&auml;remot har undertavlor som g&ouml;r det), inte l&auml;ngre kommer att visa \'0\'.';
$helptxt['fixLongWords'] = 'Detta alternativ delar upp ord l&auml;ngre &auml;n angiven l&auml;ngd till flera kortare ord, s&aring; att forumets utseende inte riskerar att saboteras p&aring; grund av skumma inl&auml;gg med extremt l&aring;nga ord (eller &aring;tminstone inte lika mycket). Du b&ouml;r inte ange ett v&auml;rde mindre &auml;n 40 tecken.';

$helptxt['who_enabled'] = 'H&auml;r kan du sl&aring; p&aring; eller av m&ouml;jligheten f&ouml;r dina anv&auml;ndare att se vilka som bes&ouml;ker forumet just nu, och vad de g&ouml;r f&ouml;r n&aring;got.';

$helptxt['recycle_enable'] = '&quot;&Aring;tervinner&quot; raderade &auml;mnen och inl&auml;gg till en viss angiven tavla.';

$helptxt['enableReportPM'] = 'Med detta f&aring;r dina medlemmar m&ouml;jlighet att anm&auml;la privata meddelanden de f&aring;r till administrat&ouml;rerna. Det kan vara anv&auml;ndbart f&ouml;r att kunna sp&aring;ra exempelvis spam och mobbning via privata meddelanden.';
$helptxt['max_pm_recipients'] = 'Detta alternativ l&aring;ter dig ange det h&ouml;gsta antalet mottagare som varje enskilt privat meddelande kan skickas till. Det kan hj&auml;lpa till att minska spam och dylikt via privata meddelanden. Observera att anv&auml;ndare med tillst&aring;nd att skicka ut nyhetsbrev undantas fr&aring;n denna begr&auml;nsning. S&auml;tt till 0 f&ouml;r ingen gr&auml;ns.';
$helptxt['pm_posts_verification'] = 'Denna inst&auml;llning anv&auml;nds f&ouml;r att tvinga anv&auml;ndare att ange en kod med bokst&auml;ver som visas p&aring; bilden, varje g&aring;ng som de f&ouml;rs&ouml;ker att skicka privata meddelanden. Enbart medlemmar som skrivit f&auml;rre &auml;n angivet antal inl&auml;gg beh&ouml;ver ange denna kod - det b&ouml;r hj&auml;lpa till att f&ouml;rhindra spam via automatiska system.';
$helptxt['pm_posts_per_hour'] = 'Detta begr&auml;nsar antal privata meddelanden som varje enskild anv&auml;ndare maximalt kan skicka ut per timme. Det p&aring;verkar inte administrat&ouml;rer eller moderatorer.';

$helptxt['default_personalText'] = 'Anger standardtexten som anv&auml;ndare kommer att ha som &quot;personlig text&quot;';

$helptxt['modlog_enabled'] = 'Loggar alla &aring;tg&auml;rder som moderatorer vidtar.';

$helptxt['guest_hideContacts'] = 'Om detta alternativ &auml;r aktiverat, s&aring; kommer e-postadresser och messenger-kontaktinformation automatiskt att d&ouml;ljas fr&aring;n alla oregistrerade g&auml;ster p&aring; forumet. Det kan vara praktiskt f&ouml;r att f&ouml;rhindra spamrobotar fr&aring;n att s&ouml;ka &aring;t e-postadresser p&aring; forumet till utskick av skr&auml;ppost.';

$helptxt['registration_method'] = 'H&auml;r kan du v&auml;lja vilken registreringsmetod som ska anv&auml;ndas f&ouml;r personer som vill registrera sig p&aring; forumet. Du kan v&auml;lja mellan:<br /><br />
	<ul>
		<li>
			<b>Registrering inaktiverad:</b><br />
				St&auml;nger av registreringsm&ouml;jligheten helt och h&aring;llet, s&aring; att inga nya medlemmar kan registrera sig p&aring; forumet.<br />
		</li><li>
			<b>Omedelbar registrering</b><br />
				Nya medlemmar kan logga in och skriva inl&auml;gg omedelbart efter att ha registrerat sig.<br />
		</li><li>
			<b>Medlemsaktivering</b><br />
				Med detta alternativ kommer medlemmar som registrerar sig att f&aring; e-postmeddelande utskickat, med en aktiveringsl&auml;nk som de m&aring;ste klicka p&aring; innan de kan bli fullst&auml;ndiga medlemmar.<br />
		</li><li>
			<b>Medlemsgodk&auml;nnande</b><br />
				Med detta alternativ m&aring;ste alla nya medlemmar som registrerar sig bli manuellt godk&auml;nda av administrat&ouml;ren, innan de kan bli medlemmar.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'N&auml;r detta alternativ &auml;r markerat, kommer alla medlemmar som byter e-postadress i sin profil att beh&ouml;va &aring;teraktivera sitt konto med e-postmeddelande som skickas till deras nya adress.';
$helptxt['send_welcomeEmail'] = 'Med detta alternativ kommer alla nya medlemmar att f&aring; ett e-postmeddelande, som v&auml;lkomnar de till forumet.';
$helptxt['password_strength'] = 'Detta inst&auml;llning best&auml;mmer hur h&aring;rd kontroll det ska finnas p&aring; de l&ouml;senord som medlemmarna v&auml;ljer. Ju sv&aring;rare l&ouml;senord folk v&auml;ljer, desto sv&aring;rare b&ouml;r det bli f&ouml;r obeh&ouml;riga att kunna hacka sig in p&aring; medlemmarnas konton.
	De m&ouml;jliga alternativen &auml;r:
	<ul>
		<li><b>L&aring;g:</b> L&ouml;senorden m&aring;ste best&aring; av minst fyra tecken.</li>
		<li><b>Medel:</b> L&ouml;senorden m&aring;ste best&aring; av minst &aring;tta tecken, och f&aring;r inte best&aring; av delar av anv&auml;ndarnamnet eller e-postadressen.</li>
		<li><b>H&ouml;g:</b> Samma som medel, f&ouml;rutom att l&ouml;senordet ocks&aring; m&aring;ste inneh&aring;lla en blandning av b&aring;de stora och sm&aring; bokst&auml;ver, samt minst en siffra.</li>
	</ul>';

$helptxt['coppaAge'] = 'Detta v&auml;rde anger den minsta &aring;ldern som medlemmar m&aring;ste vara f&ouml;r att omedelbart f&aring; tillg&aring;ng till forumet.
	Vid registrering kommer anv&auml;ndare att f&aring; bekr&auml;fta huruvida de passerat denna &aring;lder. Om inte, kommer de antingen inte att kunna registrera sig, eller att inaktiveras tills dess att f&ouml;r&auml;ldrar/m&aring;lsm&auml;n l&auml;mnat samtycke; beroende p&aring; alternativen som valts.
	Om du anger v&auml;rdet 0, inneb&auml;r detta ingen &aring;ldersgr&auml;ns och alla andra &aring;ldersinst&auml;llningar kommer att ignoreras.';
$helptxt['coppaType'] = 'Om &aring;ldersgr&auml;ns &auml;r aktiverad, kommer denna inst&auml;llning att ange vad som h&auml;nder n&auml;r n&aring;gon som understiger minimi&aring;ldern f&ouml;rs&ouml;ker att registrera sig. Det finns tv&aring; alternativ att v&auml;lja mellan:
	<ul>
		<li>
			<b>Neka deras medlemsskap:</b><br />
				Medlemmar som understiger minimi&aring;ldern kommer inte att kunna bli medlemmar alls.<br />
		</li><li>
			<b>Kr&auml;v f&ouml;r&auml;ldrars/m&aring;lsm&auml;ns samtycke</b><br />
				Nya medlemmar som f&ouml;rs&ouml;ker att registrera sig och understiger minimi&aring;ldern, kommer att f&aring; inaktiva konton tills vidare, och kommer att erbjudas ett formul&auml;r som deras f&ouml;r&auml;ldrar m&aring;ste skriva under f&ouml;r att medlemsskapet ska aktiveras.
				De kommer d&aring; ocks&aring; att f&aring; tillg&aring;ng till den kontaktinformation som anges i denna avdelning, s&aring; att de kan skicka formul&auml;ret till administrat&ouml;ren via brev eller fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'I dessa rutor anges den kontaktinformation som ska visas i formul&auml;ren n&auml;r minder&aring;riga medlemmar f&ouml;rs&ouml;ker att registrera sig, s&aring; att de kan skicka de underskrivna formul&auml;ren till administrat&ouml;ren. Denna information m&aring;ste anges om du valt att personer som understiger minimi&aring;ldern ska kr&auml;va f&ouml;r&auml;ldrars samtycke. Du m&aring;ste &aring;tminstone ange antingen postadress eller faxnummer.';

$helptxt['allow_hideOnline'] = 'Med detta alternativ, kommer alla medlemmar att f&aring; m&ouml;jlighet att d&ouml;lja huruvida de &auml;r inloggade p&aring; forumet just nu fr&aring;n andra anv&auml;ndare (f&ouml;rutom administrat&ouml;rer, som alltid kommer att se det). Om denna funktion &auml;r inaktiverad, kommer enbart medlemmar med beh&ouml;righet att moderera forum att kunna d&ouml;lja sin n&auml;rvaro. Observera att befintliga medlemmars val inte kommer att p&aring;verkas om du aktiverar detta - det kommer bara att hindra medlemmarna fr&aring;n att kunna d&ouml;lja sig sj&auml;lva fr&aring;n och med nu.';
$helptxt['allow_hideEmail'] = 'Med detta alternativ kan medlemmar v&auml;lja att d&ouml;lja sin e-postadress fr&aring;n andra anv&auml;ndare. Dock kan administrat&ouml;rer alltid se allas e-postadress, oavsett vad de v&auml;ljer.';

$helptxt['latest_support'] = 'Denna panel visar n&aring;gra vanliga problem och fr&aring;gor med tanke p&aring; din servers konfiguration. Men oroa dig inte - det som visas h&auml;r kommer inte att loggas eller sparas n&aring;gonstans.<br /><br />Om denna ruta alltid visar texten &quot;H&auml;mtar supportinformation...&quot;, s&aring; beror det antagligen p&aring; att din dator av n&aring;gon anledning inte kan ansluta till den officiella sajten <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'H&auml;r kan du se n&aring;gra av de mest popul&auml;ra paketen och modifikationerna som finns tillg&auml;ngliga, plus n&aring;gra slumpvis utvalda paket, med m&ouml;jlighet att installera dessa snabbt och enkelt.<br /><br />Om denna avdelning inte inneh&aring;ller n&aring;gonting, beror det antagligen p&aring; att din dator av n&aring;gon anledning inte kan ansluta till den officiella sajten <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Denna avdelning visar n&aring;gra av de senaste och popul&auml;raste teman, som finns tillg&auml;ngliga fr&aring;n <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>. Den kanske inte visas om din dator inte kan ansluta till <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>, dock.';

$helptxt['secret_why_blank'] = 'F&ouml;r din s&auml;kerhets skull, &auml;r svaret p&aring; din hemliga fr&aring;ga (liksom ditt l&ouml;senord) krypterat p&aring; ett s&aring;dant s&auml;tt att SMF bara kan avg&ouml;ra om det &auml;r r&auml;tt eller fel - d&auml;rf&ouml;r &auml;r det om&ouml;jligt att kunna tala om f&ouml;r dig (eller vad viktigare &auml;r; n&aring;gon annan) vad svaret eller l&ouml;senordet &auml;r.';
$helptxt['moderator_why_missing'] = 'D&aring; moderatorer anges per tavla, s&aring; m&aring;ste du g&ouml;ra medlemmar till moderatorer fr&aring;n <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">hantering av tavlor</a>.';

$helptxt['permissions'] = 'R&auml;ttigheter inneb&auml;r f&ouml;rm&aring;gan att antingen l&aring;ta eller inte l&aring;ta medlemsgrupper att g&ouml;ra specifika saker p&aring; forumet.<br /><br />Du kan &auml;ndra flera tavlor samtidigt med kryssrutorna, eller se p&aring; r&auml;ttigheterna f&ouml;r en viss grupp genom att klicka \'&Auml;ndra\'.';
$helptxt['permissions_board'] = 'Om en tavla &auml;r satt till \'Global\', s&aring; inneb&auml;r det att den inte kommer att ha n&aring;gra s&auml;rskilda r&auml;ttigheter, utan anv&auml;nda samma som hela forumet. \'Lokalt\' inneb&auml;r att tavlan har egna anpassade r&auml;ttigheter, och inte f&ouml;ljer samma som resten. Det m&ouml;jligg&ouml;r f&ouml;r dig att ha tavlor med fler eller f&auml;rre r&auml;ttigheter &auml;n de &ouml;vriga, utan att beh&ouml;va &auml;ndra r&auml;ttigheterna p&aring; varenda tavla.';
$helptxt['permissions_quickgroups'] = 'Dessa alternativ anv&auml;nds som standardupps&auml;ttningar av r&auml;ttigheter, om du inte vill anpassa allting sj&auml;lv. Standard inneb&auml;r \'ingenting speciellt\', restriktivt inneb&auml;r \'som en g&auml;st\', moderator inneb&auml;r \'samma som moderatorer har\' och slutligen \'underh&aring;ll\' inneb&auml;r r&auml;ttigheter v&auml;ldigt snarlik administrat&ouml;rers.';
$helptxt['permissions_deny'] = 'Att f&ouml;rbjuda r&auml;ttigheter kan vara anv&auml;ndbart n&auml;r du vill ta bort r&auml;ttigheter fr&aring;n vissa medlemmar. Du kan t.ex. tilldela medlemmar en s&auml;rskild medlemsgrupp med \'f&ouml;rbjud\'-r&auml;ttigheter, s&aring; att dessa medlemmar inte kan g&ouml;ra de sakerna.<br /><br />Anv&auml;nd med f&ouml;rsiktighet - en f&ouml;rbjuden r&auml;ttighet f&ouml;rblir f&ouml;rbjuden oavsett vilka andra medlemsgrupper som medlemmen ifr&aring;ga tillh&ouml;r.';
$helptxt['permissions_postgroups'] = 'Att aktivera r&auml;ttigheter f&ouml;r inl&auml;ggsbaserade grupper, l&aring;ter dig tilldela olika r&auml;ttigheter beroende p&aring; antal inl&auml;gg som medlemmar skrivit. R&auml;ttigheterna f&ouml;r inl&auml;ggsbaserade grupper <em>l&auml;ggs till</em> de r&auml;ttigheter som de vanliga medlemsgrupperna ger.';
$helptxt['permissions_by_board'] = 'Med detta alternativ kan du ange olika r&auml;ttigheter f&ouml;r olika tavlor. Som standard har alla tavlor en global r&auml;ttighetsupps&auml;ttning, men med detta alternativ kan du byta enskilda tavlor till lokala r&auml;ttigheter f&ouml;r just den tavlan. Det ger ett avancerat s&auml;tt att kunna hantera r&auml;ttigheterna.';
$helptxt['membergroup_guests'] = 'Medlemsgruppen G&auml;ster inneb&auml;r samtliga anv&auml;ndare som inte &auml;r inloggade.';
$helptxt['membergroup_regular_members'] = '&quot;Vanliga medlemmar&quot; &auml;r alla medlemmar som &auml;r inloggade, men inte &auml;r tilldelade n&aring;gon huvudsaklig medlemsgrupp.';
$helptxt['membergroup_administrator'] = 'Administrat&ouml;ren kan per definition se och g&ouml;ra allt, och komma &aring;t samtliga tavlor. D&auml;rf&ouml;r finns inga r&auml;ttigheter att v&auml;lja f&ouml;r administrat&ouml;rer.';
$helptxt['membergroup_moderator'] = 'Medlemsgruppen Moderatorer &auml;r en lite speciell medlemsgrupp. De r&auml;ttigheter och inst&auml;llningar du tilldelar till den gruppen kommer att g&auml;lla f&ouml;r alla moderatorer, men <em>bara p&aring; just de tavlor som de &auml;r moderator f&ouml;r</em>. Utanf&ouml;r dessa tavlor fungerar de som helt vanliga medlemmar.';
$helptxt['membergroups'] = 'I SMF finns det tv&aring; typer av medlemsgrupper som dina medlemmar kan vara del av. Dessa &auml;r:
	<ul>
		<li><b>Vanliga grupper:</b> En vanlig grupp &auml;r en medlemsgrupp som medlemmar inte automatiskt hamnar i, utan m&aring;ste tilldelas. F&ouml;r att tilldela medlemmar en grupp, s&aring; g&aring;r du helt enkelt in i deras profil och klickar p&aring; &quot;Kontoinst&auml;llningar&quot;. H&auml;rifr&aring;n kan du tilldela dem ett obegr&auml;nsat antal medlemsgrupper, som de sedan kommer att tillh&ouml;ra.</li>
		<li><b>Inl&auml;ggsbaserade grupper:</b> Till skillnad fr&aring;n vanliga grupper, kan man inte tilldela inl&auml;ggsbaserade grupper. Ist&auml;llet kommer medlemmar automatiskt att tilldelas dessa grupper, beroende p&aring; antal inl&auml;gg de skrivit p&aring; forumet.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Du kan redigera dessa h&auml;ndelser genom att klicka p&aring; den r&ouml;da asterisken (*) bredvid deras namn.';

$helptxt['maintenance_general'] = 'H&auml;rifr&aring;n har du m&ouml;jlighet att optimera alla tabeller i databasen (vilket g&ouml;r dem mindre och snabbare!), se till att du har senaste versionen av SMF, hitta eventuella fel p&aring; forumet, r&auml;kna om statistik samt t&ouml;mma loggfiler.<br /><br />De tv&aring; sistn&auml;mnda b&ouml;r inte anv&auml;ndas s&aring;vida inget &auml;r fel, men &aring;stadkommer ingen skada.';
$helptxt['maintenance_backup'] = 'H&auml;r kan du g&ouml;ra en s&auml;kerhetskopia av hela forumet - alla inl&auml;gg, inst&auml;llningar, medlemmar och &ouml;vrig information - till en enda stor fil.<br /><br />Vi rekommenderar att du g&ouml;r detta ofta, kanske en g&aring;ng i veckan eller liknande, s&aring; att du kan f&aring; tillbaka forumet om n&aring;got g&aring;r p&aring; tok.';
$helptxt['maintenance_rot'] = 'Detta l&aring;ter dig radera gamla &auml;mnen <b>fullst&auml;ndigt</b> och <b>o&aring;terkalleligt</b>. Vi rekommenderar att du g&ouml;r en s&auml;kerhetskopia innan, ifall du r&aring;kar ta bort f&ouml;r mycket.<br /><br />Anv&auml;nd denna funktion med f&ouml;rsiktighet.';

$helptxt['avatar_allow_server_stored'] = 'Detta l&aring;ter dina medlemmar v&auml;lja fr&aring;n personliga bilder som redan finns tillg&auml;ngliga p&aring; servern. De &auml;r vanligtvis placerade i samma huvudkatalog som SMF, men i underkataligen /avatars.<br />Ett litet tips: Om du skapar underkataloger till den katalogen, s&aring; kan du indela personliga bilder i olika kategorier.';
$helptxt['avatar_allow_external_url'] = 'Med detta alternativ kan dina medlemmar knappa in en Internetadress till en egen personlig bild. Nackdelen med det &auml;r att det finns en viss risk att de kanske anv&auml;nder ovanligt stora bilder, eller bilder du anser ol&auml;mpliga p&aring; forumet.';
$helptxt['avatar_download_external'] = 'Med detta alternativ valt, kommer servern att ladda hem externa personliga bilder fr&aring;n den angivna Internetadressen, och lagra den lokalt p&aring; servern. Om det lyckas, kommer bilden d&auml;refter att hanteras som en uppladdningsbar personlig bild.';
$helptxt['avatar_allow_upload'] = 'Detta alternativ p&aring;minner om &quot;Till&aring;t medlemmar att v&auml;lja en extern personlig bild&quot;, men eftersom de laddas upp till din server har du st&ouml;rre kontroll &ouml;ver de personliga bilderna, du kan l&auml;ttare storleksf&ouml;r&auml;ndra dem ocfh dina medlemmar beh&ouml;ver inte ha n&aring;gonstans att lagra bilderna.<br /><br />Nackdelen &auml;r att det kan t&auml;nkas ta upp mycket utrymme p&aring; servern eller webbhotellskontot.';
$helptxt['avatar_download_png'] = 'Bilder i PNG-format &auml;r vanligtvis st&ouml;rre, men erbjuder b&auml;ttre bildkvalitet. Om du v&auml;ljer bort detta, kommer bilder ist&auml;llet att sparas i JPEG-format - JPEG-bilder &auml;r ofta mindre, men &auml;r vanligtvis av s&auml;mre eller grynigare kvalitet.';

$helptxt['disableHostnameLookup'] = 'Detta st&auml;nger av s&ouml;kning av servernamn utifr&aring;n IP-adresser, vilket p&aring; en del servrar kan vara v&auml;ldigt l&aring;ngsamt. Observera att detta g&ouml;r bannlysning mindre effektiv.';

$helptxt['search_weight_frequency'] = 'Vikter anv&auml;nds f&ouml;r att avg&ouml;ra relevansen vid s&ouml;kresultat. &Auml;ndra dessa vikter f&ouml;r att best&auml;mma vad som &auml;r viktigast vid s&ouml;kning p&aring; ditt forum. Till exempel, ett forum tillh&ouml;rande en nyhetssajt vill troligen ha ett relativt h&ouml;gt v&auml;rde f&ouml;r \'&Aring;lder f&ouml;r senast matchande inl&auml;gg\'. Alla v&auml;rden &auml;r relativa till varandra och ska vara positiva heltal.<br /><br />Denna faktor r&auml;knar antal inl&auml;gg som &ouml;verensst&auml;mmer, och delar dem med det totala antalet inl&auml;gg i ett &auml;mne.';
$helptxt['search_weight_age'] = 'Vikter anv&auml;nds f&ouml;r att avg&ouml;ra relevansen vid s&ouml;kresultat. &Auml;ndra dessa vikter f&ouml;r att best&auml;mma vad som &auml;r viktigast vid s&ouml;kning p&aring; ditt forum. Till exempel, ett forum tillh&ouml;rande en nyhetssajt vill troligen ha ett relativt h&ouml;gt v&auml;rde f&ouml;r \'&Aring;lder f&ouml;r senast matchande inl&auml;gg\'. Alla v&auml;rden &auml;r relativa till varandra och ska vara positiva heltal.<br /><br />Denna faktor r&auml;knar hur gammalt det senast &ouml;veremsst&auml;mmande inl&auml;gget inom ett &auml;mne &auml;r. Ju nyare inl&auml;gget &auml;r, desto h&ouml;gre blir denna po&auml;ng.';
$helptxt['search_weight_length'] = 'Vikter anv&auml;nds f&ouml;r att avg&ouml;ra relevansen vid s&ouml;kresultat. &Auml;ndra dessa vikter f&ouml;r att best&auml;mma vad som &auml;r viktigast vid s&ouml;kning p&aring; ditt forum. Till exempel, ett forum tillh&ouml;rande en nyhetssajt vill troligen ha ett relativt h&ouml;gt v&auml;rde f&ouml;r \'&Aring;lder f&ouml;r senast matchande inl&auml;gg\'. Alla v&auml;rden &auml;r relativa till varandra och ska vara positiva heltal.<br /><br />Denna faktor baseras p&aring; &auml;mnets storlek. Ju fler inl&auml;gg som &auml;mnet best&aring;r av, desto h&ouml;gre po&auml;ng.';
$helptxt['search_weight_subject'] = 'Vikter anv&auml;nds f&ouml;r att avg&ouml;ra relevansen vid s&ouml;kresultat. &Auml;ndra dessa vikter f&ouml;r att best&auml;mma vad som &auml;r viktigast vid s&ouml;kning p&aring; ditt forum. Till exempel, ett forum tillh&ouml;rande en nyhetssajt vill troligen ha ett relativt h&ouml;gt v&auml;rde f&ouml;r \'&Aring;lder f&ouml;r senast matchande inl&auml;gg\'. Alla v&auml;rden &auml;r relativa till varandra och ska vara positiva heltal.<br /><br />Denna faktor avg&ouml;r huruvida en s&ouml;kterm hittas i &auml;mnets rubrik.';
$helptxt['search_weight_first_message'] = 'Vikter anv&auml;nds f&ouml;r att avg&ouml;ra relevansen vid s&ouml;kresultat. &Auml;ndra dessa vikter f&ouml;r att best&auml;mma vad som &auml;r viktigast vid s&ouml;kning p&aring; ditt forum. Till exempel, ett forum tillh&ouml;rande en nyhetssajt vill troligen ha ett relativt h&ouml;gt v&auml;rde f&ouml;r \'&Aring;lder f&ouml;r senast matchande inl&auml;gg\'. Alla v&auml;rden &auml;r relativa till varandra och ska vara positiva heltal.<br /><br />Denna faktor avg&ouml;r huruvida s&ouml;kvillkoren &ouml;verensst&auml;mmer med det f&ouml;rsta inl&auml;gget i ett &auml;mne.';
$helptxt['search_weight_sticky'] = 'Vikter anv&auml;nds f&ouml;r att avg&ouml;ra relevansen vid s&ouml;kresultat. &Auml;ndra dessa vikter f&ouml;r att best&auml;mma vad som &auml;r viktigast vid s&ouml;kning p&aring; ditt forum. Till exempel, ett forum tillh&ouml;rande en nyhetssajt vill troligen ha ett relativt h&ouml;gt v&auml;rde f&ouml;r \'&Aring;lder f&ouml;r senast matchande inl&auml;gg\'. Alla v&auml;rden &auml;r relativa till varandra och ska vara positiva heltal.<br /><br />Denna faktor avg&ouml;r huruvida ett &auml;mne &auml;r fastklistrat, och &ouml;kar relevanspo&auml;ngen om s&aring; &auml;r fallet.';
$helptxt['search'] = 'Justera alla inst&auml;llningar f&ouml;r s&ouml;kfunktionen h&auml;r.';
$helptxt['search_why_use_index'] = 'S&ouml;kindex kan kraftigt f&ouml;rb&auml;ttra prestandan vid s&ouml;kning p&aring; forumet. S&auml;rskilt n&auml;r antal inl&auml;gg &ouml;kar, kan det bli v&auml;ldigt l&aring;ngsamt att s&ouml;ka utan index, plus att det &ouml;kar belastningen p&aring; databasen. Om ditt forum best&aring;r av fler &auml;n 50&nbsp;000 inl&auml;gg, b&ouml;r du &ouml;verv&auml;ga att skapa ett s&ouml;kindex f&ouml;r att s&auml;kerst&auml;lla att forumet forts&auml;tter att vara snabbt.<br /><br />Observera att ett s&ouml;kindex kan ta upp ganska stor plats i databasen. Fulltextindex &auml;r en form av inbyggt index i MySQL - det &auml;r relativt utrymmessn&aring;lt (ungef&auml;r lika stor plats som inl&auml;ggstabellen), men en hel del ord lagras inte d&auml;r och i vissa fall kan det bli ganska l&aring;ngsamt. Ett anpassat index &auml;r vanligtvis st&ouml;rre (beroende p&aring; konfigurationen kan det r&ouml;ra sig om tre g&aring;nger st&ouml;rre plats &auml;n alla inl&auml;gg), men prestandan &auml;r b&auml;ttre &auml;n med fulltext och det &auml;r relativt stabilt.';

$helptxt['see_admin_ip'] = 'IP-adresser visas f&ouml;r administrat&ouml;rer och moderatorer f&ouml;r att underl&auml;tta hantering av forumet, och underl&auml;tta m&ouml;jligheten att sp&aring;ra upp br&aring;kmakare. Kom ih&aring;g att IP-adresser beh&ouml;ver inte identifiera en enskild person, och de flesta personers IP-adress &auml;ndras d&aring; och d&aring;.<br /><br />Medlemmar kan ocks&aring; se sin egen IP-adress.';
$helptxt['see_member_ip'] = 'Din IP-adress visas enbart f&ouml;r dig och forumets moderatorer. Kom ih&aring;g att IP-adresser inte kan identifiera en enskild person, och de flesta personers IP-adresser byts ut d&aring; och d&aring;.<br /><br />Du kan inte se andra medlemmars IP-adress, och de kan inte se din.';

$helptxt['ban_cannot_post'] = 'Begr&auml;nsningen \'kan inte posta\' f&ouml;rvandlar forumet till ett skrivskyddat s&aring;dant f&ouml;r den bannlysta anv&auml;ndaren. Anv&auml;ndare kan inte skapa nya &auml;mnen eller svara p&aring; befintliga &auml;mnen, skicka privata meddelanden eller r&ouml;sta i omr&ouml;stningar. Den bannlysta anv&auml;ndaren kan dock fortfarande l&auml;sa privata meddelanden och &auml;mnen som vanligt.<br /><br />Ett varningsmeddelande visas f&ouml;r anv&auml;ndare som &auml;r bannlysta p&aring; det h&auml;r s&auml;ttet.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Skrivinst&auml;llningar</b><br />
			&Auml;ndra inst&auml;llningar som har att g&ouml;ra med att skriva inl&auml;gg, och hur inl&auml;gg visas. Du kan ocks&aring; aktivera stavningskontroll h&auml;r.
		</li><li>
			<b>Forumkoder</b><br />
			Aktivera de koder som visar forumets inl&auml;gg i r&auml;tt utseende. L&aring;ter dig ocks&aring; kontrollera vilka koder som till&aring;ts och inte.
		</li><li>
			<b>Censurerade ord</b>
			F&ouml;r att h&aring;lla spr&aring;kbruket p&aring; forumet under kontroll, har du m&ouml;jlighet att censurera utvalda ord. Denna funktion l&aring;ter dig omvandla f&ouml;rbjudna ord till oskylda varianter.
		</li><li>
			<b>&Auml;mnesinst&auml;llningar</b>
			&Auml;ndra inst&auml;llningar relaterade till &auml;mnen. Antal &auml;mnen per sida, huruvida fastklistrade &auml;mnen st&ouml;ds eller inte, antal inl&auml;gg som beh&ouml;vs f&ouml;r att ett &auml;mne ska anses som hett, o.s.v.
		</li>
	</ul>';

?>