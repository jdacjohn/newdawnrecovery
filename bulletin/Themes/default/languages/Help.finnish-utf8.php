<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Sulje ikkuna';

$helptxt['manage_boards'] = '
	<b>Hallinnoi alueita ja kategorioita</b><br />
	T&#228;&#228;ll&#228; voit luoda/j&#228;rjestell&#228;/poistaa alueita ja kategorioita. Esimerkiksi jos sinulla on laaja-alainen
	sivusto joka kertoo &quot;Urheilusta&quot;, &quot;Autoista&quot; sek&#228; &quot;Musiikista&quot;, n&#228;m&#228;
	voisivat olla alueiden nimi&#228; keskustelualueellasi. Jokaisen alueen alla voisi olla kategorioita sek&#228;
	niill&#228; alakategorioita. Hierarargiasi voisi olla yksinkertaisesti seuraavanlainen: <br />


	<ul>
		<li>
			<b>Urheilu</b>
			&nbsp;-  &quot;alue&quot;
		</li>
		<ul>
			<li>
				<b>Pes&#228;pallo</b>
				&nbsp;- kategoria &quot;Urheilu&quot; alueella
			</li>
			<ul>
				<li>
					<b>Tilastot</b>
					&nbsp;- alakategoria &quot;Pes&#228;pallo&quot; kategorian alla
				</li>
			</ul>
			<li><b>Jalkapallo</b>
			&nbsp;- kategoria &quot;Urheilu&quot; alueella</li>
		</ul>
	</ul>
	Alueiden avulla voit ryhmitell&#228; keskustelualueen aiheittain (&quot;Autot,
	Urheilu&quot;), sek&#228; &quot;kategoriat&quot; niiden alla ovat alueita johon
	j&#228;senet voivat l&#228;hett&#228;&#228; viestej&#228;. J&#228;sen joka on kiinnostunut Mersuista,
        voi kirjoittaa viestins&#228; alueelle &quot;Autot->Merzedes&quot;. Alueiden ja kategorioiden 
        avulla ihmiset l&#246;yt&#228;v&#228;t helposti sen mik&#228; heit&#228; kiinnostaa: Sen sijaan ett&#228; olisi vain &quot;Kauppa&quot;,
        sinulla on &quot;vaate-&quot; ja &quot;rauta-&quot; kaupat joista valita. 
        <br />
	Kuten edell&#228; mainittiin, kategoria on avainaihe laajemman alueen alla.
	Jos haluat keskustella &quot;Mersuista&quot;, menet alueelle &quot;Autot&quot; ja
	siirryt siit&#228; kategoriaan &quot;Mercedes&quot; kirjoittamaan ajatuksiasi.<br />
	Yll&#228;pitotoiminnot t&#228;&#228;ll&#228; ovat lyhyk&#228;isyydess&#228;&#228;n kategorioiden luominen alueiden alle,
	niiden j&#228;rjesteleminen (laita esim &quot;Mersut&quot; &quot;Chevyen&quot; j&#228;lkeen), tai sitten
	koko kategorian poistaminen.';

$helptxt['edit_news'] = '<b>Uutisten muokkaus</b><br />
	T&#228;&#228;ll&#228; voit kirjoittaa lyhyit&#228; uutisp&#228;tki&#228; mitk&#228; n&#228;kyv&#228;t keskustelualueen etusivulla.
	Lis&#228;&#228; mink&#228;laisen uutisen haluat (esim., &quot;Muistakaa miitinki torstaina&quot;). Jokainen uutinen
	menee omaan laatikkoonsa ja ne n&#228;ytet&#228;&#228;n sattumanvaraisessa j&#228;rjestyksess&#228;.';

$helptxt['view_members'] = '
	<ul>
		<li>
                        <b>Tarkastele kaikkia j&#228;seni&#228;</b><br />
                	Tarkastele kaikkia j&#228;seni&#228; keskustelualueellasi. Sinulle n&#228;ytet&#228;&#228;n linkitetty lista j&#228;seniesi nimist&#228;. Voit klikata
                 	mit&#228; tahansa nimist&#228; saadaksesi lis&#228;tietoja heist&#228; (kotisivu, ik&#228;, jne.). Yll&#228;pit&#228;j&#228;n&#228; sin&#228; voit
                	muokata mit&#228; tahansa n&#228;ist&#228; kohdista. Sinulla on t&#228;ysi valta kaikkiin j&#228;seniin, mukaanlukien
                	heid&#228;n j&#228;senyytens&#228; poistaminen koko keskustelualueelta.<br /><br />
		</li>
		<li>
			<b>Hyv&#228;ksynt&#228;&#228; odottamassa</b><br />
			T&#228;m&#228; alue n&#228;kyy vain jos olet edellytt&#228;nyt yll&#228;pidon hyv&#228;ksynt&#228;&#228; kaikkiin uusiin rekister&#246;itymisiin. Kuka tahansa joka rekister&#246;ityy
			keskustelualueellesi, p&#228;&#228;see j&#228;seneksi vasta kun yll&#228;pito on hyv&#228;ksynyt rekister&#246;innin. T&#228;m&#228; alue listaa kaikki j&#228;senet jotka
			ovat odottamassa hyv&#228;ksynt&#228;&#228;. Tiedot sis&#228;lt&#228;v&#228;t my&#246;s s&#228;hk&#246;posti- sek&#228; IP-osoitteen. Voit valita hyv&#228;ksytk&#246; vai hylk&#228;&#228;tk&#246; (tuhoat)
			kenet tahansa listasta valitsemalla valintalaatikon j&#228;senen vierest&#228; sek&#228; valinnan alasvetovalikosta ruunun alareunassa.
			Kun hylk&#228;&#228;t hakemuksen, voit valita l&#228;hteek&#246; hakijalle p&#228;&#228;t&#246;ksest&#228;si ilmoitus s&#228;hk&#246;postiin vai ei.<br /><br />
		</li>
		<li>
			<b>Aktivointia odottamassa</b><br />
			T&#228;m&#228; alue n&#228;kyy vain jos olet edellytt&#228;nyt aktivointia uusissa j&#228;senhakemuksissa. T&#228;m&#228; alue listaa kaikki j&#228;senet
			jotka eiv&#228;t ole aktivoineet j&#228;senyytt&#228;&#228;n. T&#228;&#228;ll&#228; voit valita hyv&#228;ksytk&#246;, hylk&#228;&#228;tk&#246;, vai muistutako heit&#228; keskener&#228;isest&#228;
			j&#228;senhakemuksesta. Voit siis valita l&#228;hteek&#246; hakijalle s&#228;hk&#246;postiin ilmoitus siit&#228; mit&#228; olet p&#228;&#228;tt&#228;nyt heid&#228;n hakemukselleen tehd&#228;.
			<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Porttikiellot</b><br />
	SMF:ss&#228; on ominaisuus jonka avulla voit antaa k&#228;ytt&#228;jille &quot;porttikieltoja&quot;, torjuaksesi ihmiset jotka ovat rikkoneet s&#228;&#228;nt&#246;j&#228;si
	sp&#228;mm&#228;&#228;m&#228;ll&#228;, trollaamalla jne. Siis kaikki jotka ovat vahingollisia keskustelualueellesi. Kun katselet
	viestej&#228; yll&#228;pit&#228;j&#228;n&#228;, n&#228;et k&#228;ytt&#228;jien IP-osoitteet jonka kautta he ovat sill&#228; kertaa kirjoittaneet. Lis&#228;&#228; vain
	k.o osoite estoihin ja talleta, ja he eiv&#228;t en&#228;&#228; voi kirjoitella keskustelualueellesi siit&#228; osoitteesta.<br />Voit my&#246;s
	est&#228;&#228; k&#228;ytt&#228;ji&#228; s&#228;hk&#246;postiosoitteen tai tunnuksen mukaan.';

$helptxt['modsettings'] = '<b>Muokkaa keskustelualueen asetuksia</b><br />
	T&#228;&#228;ll&#228; voit muokata lukuisia keskustelualueen asetuksia. Pakettien hallinnassa asennetut muokkaukset asentavat my&#246;s usein niihin liittyvi&#228; asetuksia t&#228;nne.';

$helptxt['number_format'] = '<b>Numeroformaatti<b><br />
	T&#228;ll&#228; asetuksella voit valita miss&#228; muodossa numerot n&#228;kyv&#228;t keskustelualueella. Asetuksen formaatti on:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Merkki \',\' jakaa tuhannet ja \'.\' merkki&#228; k&#228;ytet&#228;&#228;n desimaalien edess&#228;.';

$helptxt['time_format'] = '<b>Aikaformaatti</b><br />
	T&#228;&#228;ll&#228; voit valita miss&#228; muodossa aika n&#228;ytet&#228;&#228;n. Merkkej&#228; on lukuisia, mutta silti asetus on yksinkertainen.
	Merkit noudattavat PHP:n strftime toimintoa, kuten alla olevassa listassa n&#228;kyy (lis&#228;tietoja tarjoaa <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	Voit k&#228;ytt&#228;&#228; seuraavia merkkej&#228;: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - viikonp&#228;iv&#228; lyhennettyn&#228;<br />
	&nbsp;&nbsp;%A - viikonp&#228;iv&#228;<br />
	&nbsp;&nbsp;%b - kuukausi lyhennettyn&#228;<br />
	&nbsp;&nbsp;%B - kuukausi<br />
	&nbsp;&nbsp;%d - kuukaudenp&#228;iv&#228; (01 - 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - sama kuin %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - kuukaudenp&#228;iv&#228; (1 - 31) <br />
	&nbsp;&nbsp;%H - 24-tunnin kello (00 - 23) <br />
	&nbsp;&nbsp;%I - 12-tunnin kello (01 - 12) <br />
	&nbsp;&nbsp;%m - kuukausi numerona (01 - 12) <br />
	&nbsp;&nbsp;%M - minuutti numerona <br />
	&nbsp;&nbsp;%p - joko &quot;am&quot; tai &quot;pm&quot; riippuen ajasta (Englantilainen j&#228;rjestelm&#228;)<br />
	&nbsp;&nbsp;%R<b>*</b> - aika 24 tunnin merkkij&#228;rjestelm&#228;ll&#228; <br />
	&nbsp;&nbsp;%S - sekunti desimaaleina <br />
	&nbsp;&nbsp;%T<b>*</b> - nykyinen aika, sama kuin %H:%M:%S <br />
	&nbsp;&nbsp;%y - kaksinumeroinen vuosiluku (00 - 99) <br />
	&nbsp;&nbsp;%Y - nelj&#228;numeroinen vuosiluku<br />
	&nbsp;&nbsp;%Z - aikavy&#246;hyke tai lyhennys <br />
	&nbsp;&nbsp;%% - varsinainen %-merkki <br />
	<br />
	<i>* Ei toimi Windows-pohjaisilla servereill&#228;.</i></span>';

$helptxt['live_news'] = '<b>Uutisv&#228;l&#228;hdykset</b><br />
	T&#228;m&#228; laatikko n&#228;ytt&#228;&#228; viimeisimpi&#228; tiedotteita sivustolta <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	Sit&#228; kannattaa lukea silloin t&#228;ll&#246;in, koska se sis&#228;lt&#228;&#228; tietoa p&#228;ivityksist&#228;, uusista julkaisuista, sek&#228; muita t&#228;rkeit&#228; asioita Simple Machines sivustolta.';

$helptxt['registrations'] = '<b>Rekister&#246;intien hallinta</b><br />
	T&#228;ll&#228; alueella on kaikki rekister&#246;inteihin liittyv&#228;t asetukset. Se on jaettu nelj&#228;&#228;n
	osaan, mitk&#228; n&#228;kyv&#228;t riippuen keskustelualueesi asetuksista. Alueet ovat:<br /><br />
	<ul>
		<li>
			<b>Rekister&#246;i uusi j&#228;sen</b><br />
			T&#228;ll&#228; alueella voit rekister&#246;id&#228; uuden j&#228;senen heid&#228;n puolestaan. T&#228;m&#228; voi olla tarpeellinen toiminto etenkin silloin kun rekister&#246;innit on ev&#228;tty
			uusilta j&#228;senilt&#228;, tai kun yll&#228;pit&#228;j&#228; haluaa luoda testij&#228;senen. Jos j&#228;senyyden aktivointia edellytet&#228;&#228;n, 
			j&#228;senelle l&#228;hetet&#228;&#228;n aktivoitumislinkki s&#228;hk&#246;postiin jota on klikattava ennekuin tunnusta voi k&#228;ytt&#228;&#228;. Samalla tavalla voit
			valita l&#228;hetet&#228;&#228;nk&#246; salasana my&#246;s s&#228;hk&#246;postitse.<br /><br />
		</li>
		<li>
			<b>Muokkaa rekister&#246;itymislomaketta</b><br />
			T&#228;&#228;ll&#228; voit muokata rekister&#246;itymislomaketta joka n&#228;ytet&#228;&#228;n rekister&#246;ityess&#228; keskustelualueellesi.
			Voit vapaasti lis&#228;t&#228; tai poistaa mit&#228; tahansa alkupe&#228;isest&#228; rekister&#246;itymislomakkeesta joka tulee SMF:n mukana.
		</li>
		<li>
			<b>Aseta varatut nimet</b><br />
			T&#228;&#228;ll&#228; voit m&#228;&#228;&#228;ritell&#228; mit&#228; nimi&#228; j&#228;senesi eiv&#228;t voi k&#228;ytt&#228;&#228;.<br /><br />
		</li>
		<li>
			<b>Asetukset</b><br />
			T&#228;m&#228; alue n&#228;kyy vain yll&#228;pit&#228;jille. T&#228;&#228;ll&#228; voit valita rekister&#246;itymismetodin
			keskustelualueellesi, sek&#228; muokata muita rekister&#246;itymiseen liittyvi&#228; asetuksia.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Valvontalogi</b><br />
	T&#228;ll&#228; alueella yll&#228;pit&#228;j&#228;t voivat katsella ja j&#228;ljitt&#228;&#228; kaikkia valvontatoimenpiteit&#228; mit&#228; keskustelualueella on tehty. Varmistaaksesi ettei
	valvojasi voi poistaa tekemi&#228;&#228;n toimenpiteit&#228;, logia ei voi tyhjent&#228;&#228; ennekuin 24 tuntia tapahtumasta on kulunut.
	\'Tapahtuma\' sarake n&#228;ytt&#228;&#228; kaikki tehdyt toimenpiteet.';
$helptxt['error_log'] = '<b>Virhelogi</b><br />
	Virhelogi n&#228;ytt&#228;&#228; kaikki merkitt&#228;vimm&#228;t virhetilanteet mit&#228; keskustelualueellasi on tapahtunut. Se listaa kaikki virheet aikaj&#228;rjestyksess&#228;, jotka voi k&#228;&#228;nt&#228;&#228;
	klikkaamalla mustaa nuolta p&#228;iv&#228;m&#228;&#228;r&#228;n vieress&#228;. Vaihtoehtoisesti voit suodattaa virheit&#228; klikkaamalla ikonia virheraportin vieress&#228;. T&#228;m&#228;
	antaa sinun lajitella virheet esim k&#228;ytt&#228;j&#228;n mukaan. Kun suodatus on p&#228;&#228;ll&#228;, se n&#228;ytt&#228;&#228; kaikki siihen soveltuvat virheet.';
$helptxt['theme_settings'] = '<b>Teemojen asetukset</b><br />
	T&#228;&#228;ll&#228; voit ruuvata tietyn teeman asetuksia. N&#228;m&#228; asetukset sis&#228;lt&#228;v&#228;t esim teeman hakemistopolun ja osoitteen, mutta 
	my&#246;s keskustelualueesi ulkoasuun liittyvi&#228; asioita. Useimilla teemoilla my&#246;s on lukuisia k&#228;ytt&#228;jien itse ruuvattavissa olevia asetuksia, joita voi muokata 
	keskustelualueen tarpeiden mukaan.';
$helptxt['smileys'] = '<b>Hymi&#246;t ja viesti-ikonit</b><br />
	T&#228;&#228;ll&#228; voit lis&#228;t&#228; ja poistaa hymi&#246;it&#228; ja hymi&#246;settej&#228;. Varmista ett&#228; jos hymi&#246; lis&#228;t&#228;&#228;n yhteen settiin, se laitetaan my&#246;s muihin - muutoin se ei n&#228;y
	j&#228;senell&#228; joka k&#228;ytt&#228;&#228; toista setti&#228;.<br /><br />

	T&#228;&#228;ll&#228; voit my&#246;s muokata viesti ikoneja, jos olet ottanut ne k&#228;ytt&#246;&#246;n asetuksista.';
$helptxt['calendar'] = '<b>Hallinnoi kalenteria</b><br />
	T&#228;&#228;ll&#228; voit muokata kalenterisi asetuksia, sek&#228; lis&#228;t&#228; tai poistaa juhlap&#228;ivi&#228; ja muita tapahtumia.';

$helptxt['serversettings'] = '<b>Serverin asetukset</b><br />
	T&#228;&#228;ll&#228; on keskustelualueesi keskeisimm&#228;t asetukset, kuten tietokanta ja url-osoitteiden asetukset, sek&#228; muita
	t&#228;rkeit&#228; asetuksia kuten s&#228;k&#246;posti ja v&#228;limuistin asetukset. Mieti tarkaan kun muutat n&#228;it&#228; asetuksia, koska virhe voi
	est&#228;&#228; foorumille p&#228;&#228;syn kokonaan.';

$helptxt['topicSummaryPosts'] = 'T&#228;&#228; voit m&#228;&#228;ritell&#228; kuinka monta edellist&#228; viesti&#228; n&#228;ytet&#228;&#228;n vastauslomakkeen alla.';
$helptxt['enableAllMessages'] = 'M&#228;&#228;rittele <em>maksimim&#228;&#228;r&#228;</em> viesteille aiheissa jotta n&#228;ytet&#228;&#228;n linkki Kaikki. Jos asetat t&#228;m&#228;n pienemm&#228;ksi kuin &quot;Enimm&#228;ism&#228;&#228;r&#228; viestej&#228; n&#228;kyviss&#228; aiheissa:&quot; on, linkki&#228; ei n&#228;y ollenkaan. Liian iso taas voi jumittaa keskustelualuettasi.';
$helptxt['enableStickyTopics'] = 'Pysyv&#228;t aiheet n&#228;kyv&#228;t aina yimm&#228;isen&#228; viestilistassa. Niit&#228; k&#228;ytet&#228;&#228;n usein t&#228;rkeille
		viesteille. Voit m&#228;&#228;ritell&#228; oikeuksista kuka saa niit&#228; asettaa. Oletuksena vain valvojat ja yll&#228;pit&#228;j&#228;t voivat asettaa pysyvi&#228; aiheita.';
$helptxt['allow_guestAccess'] = 'Poistamalla t&#228;st&#228; valinnan, vieraat eiv&#228;t voi tehd&#228; muuta kirjautua, rekister&#246;ity&#228;, k&#228;ytt&#228;&#228; salasanamuistutusta , jne.  T&#228;m&#228; ei ole sama asetus kuin est&#228;&#228; vieraiden p&#228;&#228;sy tietyille alueille.';
$helptxt['userLanguage'] = 'Jos sallit t&#228;m&#228;n, j&#228;senesi voivat valita mit&#228; kielitiedostoa k&#228;ytet&#228;&#228;n keskustelualueellasi. Se ei vaikuta
		oletuskieleen.';
$helptxt['trackStats'] = 'Tilastot:<br />N&#228;ytt&#228;&#228; j&#228;senille viimeisimm&#228;t viestit ja suosituimmat aiheet keskustelualueellasi.
		Se n&#228;ytt&#228;&#228; my&#246;s lukuisia muita tilastoja, kuten j&#228;seni&#228; paikalla, uudet j&#228;sent ja uudet aiheet.<hr />
		Sivujen katselut:<br />Lis&#228;&#228; lis&#228;sarakkeen tilastoihin joka n&#228;ytt&#228;&#228; kuinka monta sivua on p&#228;ivitt&#228;in keskustelualueellasi avattu.';
$helptxt['titlesEnable'] = 'Sallimalla muokatut tittelit, ne j&#228;senet joilla siihen on oikeudet, voivat valita oman tittelin itselleen.
		T&#228;m&#228; titteli n&#228;kyy nimen alla.<br /><i>Esimerkiksi:</i><br />Jukka<br />Nasta tyyppi';
$helptxt['topbottomEnable'] = 'T&#228;m&#228; lis&#228;&#228; mene yl&#246;s ja mane alas nappulat teemaasi, jotta k&#228;yytt&#228;j&#228; voi siirty&#228; sivun yl&#228;- tai
		alareunaan ilman vierityst&#228;.';
$helptxt['onlineEnable'] = 'T&#228;m&#228; n&#228;ytt&#228;&#228; ikonin joka ilmaisee onko k&#228;ytt&#228;j&#228; paikalla vai ei';
$helptxt['todayMod'] = 'T&#228;m&#228; n&#228;ytt&#228;&#228; &quot;T&#228;n&#228;&#228;n&quot;, tai &quot;Eilen&quot;, p&#228;iv&#228;m&#228;&#228;r&#228;n sijaan.';
$helptxt['enablePreviousNext'] = 'T&#228;m&#228; n&#228;ytt&#228;&#228; aiheiden yl&#228;nurkassa linkin seuraavaan ja edelliseen aiheeseen.';
$helptxt['pollMode'] = 'T&#228;m&#228;n avulla valitset n&#228;ytet&#228;&#228;nk&#246; &#228;&#228;nestyksi&#228; vai ei. Jos &#228;&#228;nestykset otetaan pois p&#228;&#228;lt&#228;, kaikki jo luodut &#228;&#228;nestykset menev&#228;t piiloon
		viesteist&#228;. Voit valita my&#246;s ett&#228; jatkossa n&#228;ytet&#228;&#228;n tavallinen aihe ilman niiden &#228;&#228;nestyksi&#228; valitsemalla
		&quot;N&#228;yt&#228; nykyiset &#228;&#228;nestykset kuten tavalliset aiheet&quot;.<br /><br />Valitaksesi kuka saa luoda &#228;&#228;nestyksi&#228;, katsella niit&#228;, 
		jne, voit asettaa oikeudet sen mukaisesti. Muista t&#228;m&#228; jos &#228;&#228;&#228;nestykset eiv&#228;t toimi.';
$helptxt['enableVBStyleLogin'] = 'T&#228;m&#228; n&#228;ytt&#228;&#228; vieraille tietynlaisen kirjautumislomakkeen joka sivulla.';
$helptxt['enableCompressedOutput'] = 'T&#228;m&#228; asetus pakkaa sivujen kokoa jonkin verran, mutta se edellytt&#228;&#228; ett&#228;
		zlib on asennettu.';
$helptxt['databaseSession_enable'] = 'T&#228;m&#228; asetus laittaa tietokantapohjaiset sessiot k&#228;ytt&#246;&#246;n. Se voi auttaa tietyiss&#228; timeout ongelmissa ja tehd&#228; foorumin hieman nopeammaksi.';
$helptxt['databaseSession_loose'] = 'T&#228;m&#228; asetus v&#228;hent&#228;&#228; hieman keskustelualueesi kaistank&#228;ytt&#246;&#228;, jolloin klikattaessa takaisn nappia sivu ei p&#228;ivity - huono puoli on, ett&#228; my&#246;sk&#228;&#228;n (uusi) ikonit eiv&#228;t p&#228;ivity muiden asioiden lis&#228;ksi. (ellet klikkaa sen sivun linkki&#228; takaisin painikkeen sijaan.)';
$helptxt['databaseSession_lifetime'] = 'T&#228;m&#228; on session pituus sekunneissa jonka sessio kest&#228;&#228; sen j&#228;lkeen kun sit&#228; ei ole k&#228;ytetty. Jos sessio on k&#228;ytt&#228;m&#228;t&#246;n liian kauan, se sanoo ett&#228; &quot;aika loppui&quot;.  Kaikki luvut jotka on suurempia kuin 2400, ovat suositeltavia.';
$helptxt['enableErrorLogging'] = 'T&#228;m&#228; rekister&#246;i kaikki virheet, kuten ep&#228;onnistuneet kirjautumiset jotta voit n&#228;hd&#228; mik&#228; meni vikaan.';
$helptxt['allow_disableAnnounce'] = 'T&#228;m&#228; antaa j&#228;senien est&#228;&#228; tiedotteiden vastaanottamisen s&#228;hk&#246;postiin kun k&#228;yt&#228;t viestien l&#228;hetyksess&#228; &quot;Tiedota aiheesta&quot; toimintoa.';
$helptxt['disallow_sendBody'] = 'T&#228;m&#228; asetus est&#228;&#228; sen, ettei j&#228;senet voi n&#228;hd&#228; viestien sis&#228;lt&#246;&#228; muistutus s&#228;hk&#246;posteissa.<br /><br />Usein j&#228;senet rupeavat vastailemaan sellaisiin viesteihin s&#228;hk&#246;postilla, mik&#228; taas tarkoittaa ett&#228; yll&#228;pit&#228;j&#228; saa ne vastaukset.';
$helptxt['compactTopicPagesEnable'] = 'T&#228;m&#228; n&#228;ytt&#228;&#228; sivujen lukum&#228;&#228;r&#228;n valinnan.<br /><i>Esimerkki:</i>
		&quot;3&quot; n&#228;ytt&#228;&#228;: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; n&#228;ytt&#228;&#228;: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'T&#228;m&#228; n&#228;ytt&#228;&#228; ajan joka foorumilla meni sivun luomiseen sivun alareunassa.';
$helptxt['removeNestedQuotes'] = 'T&#228;m&#228; n&#228;ytt&#228;&#228; tekstin lainauksen vain siit&#228; viestist&#228; jota lainataan, ei mahdollisia lainauksia muista viesteist&#228;.';
$helptxt['simpleSearch'] = 'T&#228;m&#228; n&#228;ytt&#228;&#228; yksinkertaisen hakulomakkeen sek&#228; linkin edistyneemp&#228;&#228;n versioon.';
$helptxt['max_image_width'] = 'T&#228;m&#228;n avulla asetat rajoitukset kuinka isona linkitettyja kuvia voidaan n&#228;ytt&#228;&#228; viesteiss&#228;. Pienempiin kuvakokoihin se ei vaikuta.';
$helptxt['mail_type'] = 'T&#228;ss&#228; voit valita k&#228;ytet&#228;&#228;nk&#246; PHP\'n oletusasetuksia, vai ohitetaanko ne SMTP:ll&#228;.  PHP ei tue k&#228;ytt&#228;j&#228;n todennusta (mit&#228; monet palveluntarjoajat edellytt&#228;v&#228;t nykyisin), joten jos haluat k&#228;ytt&#228;&#228; sit&#228;, valitse SMTP.  Huomioi ett&#228; SMTP voi olla hitaanmpi, sek&#228; jotkin palvelimet eiv&#228;t huoli tunnuksia ja salasanoja.<br /><br />Sinun ei tarvitse t&#228;ytt&#228;&#228; SMTP kohtia jos k&#228;yt&#228;t PHP:n oletuksia.';
$helptxt['attachmentEnable'] = 'Liitteet ovat tiedostoja joita j&#228;senet voivat ladata serverillesi ja liitt&#228;&#228; niit&#228; viesteihin.<br /><br />
		<b>Tarkista liitteen tiedostomuoto</b>:<br /> Haluatko tarkastaa tiedostojen formaatin?<br />
		<b>Sallitut tiedostomuodot</b>:<br /> voit valita mink&#228;laisia tiedostoja saa k&#228;ytt&#228;&#228;.<br />
		<b>Liitteiden tallennuskansio</b>:<br /> hakemistopolku liitetiedostojen kansioon<br />(esim: /home/sites/sinunsivusi/www/foorumi/liitteet)<br />
		<b>Liitetiedostojen kansion maksimikoko</b> (kilotavuissa):<br /> Valitse kuinka paljon tilaa liitetiedoston kansio saa vied&#228;, tiedostoineen.<br />
		<b>Liitteiden maksimikoko per viesti</b> (kilotavuissa):<br /> Valitse kuinka iso liitteiden yhteiskoko viesti&#228; kohden saa olla saa olla.  Jos t&#228;m&#228; on v&#228;hemm&#228;n kuin liitekohtainen maksimi, t&#228;m&#228; on sitten rajana.<br />
		<b>Liitteen maksimikoko</b> (kilotavuissa):<br /> Valitse kuinka iso yksitt&#228;inen liite saa olla.<br />
		<b>Maksimi m&#228;&#228;r&#228; liitteit&#228; viesti&#228; kohden</b>:<br /> Valitse kuinka monta tiedostoa voidaan yhteen viestiin liitt&#228;&#228;.<br />
		<b>N&#228;yt&#228; kuvaliitteet kuvana viesteiss&#228;</b>:<br /> Jos k&#228;ytetty liite on kuvatiedosto, se n&#228;ytet&#228;&#228;n viestin alareunassa.<br />
		<b>N&#228;yt&#228; kuvat pienenennettyn&#228; viesteiss&#228;</b>:<br /> Jos yll&#228;oleva on valittu, t&#228;m&#228; tallentaa erillisen (pienempi) liitteen esikatselukuvakkeeksi kaistan k&#228;yt&#246;n pienent&#228;miseksi.<br />
		<b>Maksimi korkeus ja leveys esikatselukuville:</b>:<br /> K&#228;ytet&#228;&#228;n vain jos &quot;N&#228;yt&#228; kuvat pienenennettyn&#228; viesteiss&#228;&quot; on valittuna. Esikatselukuvakkeet muutetaan t&#228;m&#228;n kokoisiksi.';
$helptxt['karmaMode'] = 'Karma on toiminto joka voi n&#228;ytt&#228;&#228; kuinka suosittu j&#228;sen on. Jos sallitaan, j&#228;senet voivat
		antaa \'positiivista\' tai \'negatiivista\' karmaa muille j&#228;senille, jonka avulla siis heid&#228;n suosionsa lasketaan. Voit muuttaa
		kuinka monta viesti&#228; tarvitaan &quot;karmaan&quot;, aikaraja kuinka usein voi &#228;&#228;nest&#228;&#228;, sek&#228; tarvitseeko yll&#228;pit&#228;jienkin 
		noudattaa t&#228;t&#228; aikarajoitusta.<br /><br />Oikeuksista voit valita mitk&#228; j&#228;senryhm&#228;t voivat &#228;&#228;nest&#228;&#228; karmaa.
		Jos tuntuu ettei t&#228;m&#228; toiminto pelit&#228; kaikilla, tarkista viel&#228; kerran ett&#228; oikeudet on kunnossa.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'Kalenteria voi k&#228;ytt&#228;&#228; n&#228;ytt&#228;m&#228;&#228;n syntym&#228;p&#228;iv&#228;t tai tarkeit&#228; tapahtumia yhteis&#246;ss&#228;si.<br /><br />
		<b>Linkit&#228; p&#228;iv&#228;t \'L&#228;het&#228; tapahtuma\' toimintoon</b>:<br />T&#228;m&#228;n avulla j&#228;senet voivat lis&#228;t&#228;t&#228; tapahtuman klikkaamalla k.o p&#228;iv&#228;n numeroa<br />
		<b>N&#228;yt&#228; viikkojen numerot</b>:<br />N&#228;yt&#228; miik&#228; viikko on menossa.<br />
		<b>Maksimim&#228;&#228;r&#228; p&#228;ivi&#228; jolloin tapahtuma n&#228;kyy etusivulla</b>:<br />Jos t&#228;m&#228; on esim 7, seuraavan viikon tapahtumat n&#228;kyv&#228;t.<br />
		<b>N&#228;yt&#228; lomat etusivulla</b>:<br />N&#228;yt&#228; p&#228;iv&#228;n juhlap&#228;iv&#228;t ja pyh&#228;t keskustelualueen etusivulla.<br />
		<b>N&#228;yt&#228; syntym&#228;p&#228;iv&#228;t etusivulla</b>:<br />N&#228;yt&#228; p&#228;iv&#228;n syntym&#228;p&#228;iv&#228;sankarit keskustelualueen etusivulla.<br />
		<b>N&#228;yt&#228; tapahtumat etusivulla</b>:<br />N&#228;yt&#228; p&#228;iv&#228;n tapahtumat keskustelualueen etusivuilla.<br />
		<b>Oletusalue johon tapahtumia l&#228;hetet&#228;&#228;n</b>:<br />Mik&#228; on oletusalue kalenterin tapahtumille?<br />
		<b>Salli ettei tapahtumia tarvitse linkitt&#228;&#228; viesteihin</b>:<br />Salli j&#228;senten lis&#228;t&#228; tapahtumia kalenteriin ilman ett&#228; siit&#228; alotetaan uutta aihetta keskustelualueelle.<br />
		<b>Ensimm&#228;inen vuosi kalenterissa</b>:<br />Valitse &quot;ensimm&#228;inen&quot; vuosi kalenterillesi.<br />
		<b>Viimeinen vuosi kalenterissa</b>:<br />Valitse kalenterisi viimeinen vuosi<br />
		<b>Syntym&#228;p&#228;ivien v&#228;ri</b>:<br />Valitse syntym&#228;p&#228;ivien tekstille v&#228;ri<br />
		<b>TApahtumien v&#228;ri</b>:<br />Valitse tekstin v&#228;ri tapahtumille<br />
		<b>Lomien v&#228;rir</b>:<br />Valitse loma-ajoille tekstin v&#228;ri<br />
		<b>Salli tapahtumien kest&#228;&#228; useampia p&#228;ivi&#228;</b>:<br />Valitse t&#228;m&#228;, niin sallittapahtumien kest&#228;&#228; useampia p&#228;ivi&#228;.<br />
		<b>Tapahtuman maksimipituus p&#228;iviss&#228;</b>:<br />Valitse pituus.<br /><br />
		Huomioi ett&#228; kalenterin k&#228;ytt&#246; (tapahtumien lis&#228;&#228;minen, lukeminen jne) on asetettu oikeuksisssa.';
$helptxt['localCookies'] = 'SMF k&#228;ytt&#228;&#228; ev&#228;steit&#228; kirjautumistietojen tallennukseen k&#228;ytt&#228;j&#228;n koneella.
	Ev&#228;steet voidaan tallentaa globaalisti (minunserveri.com) tai paikallisesti (minunserveri.com/polku/minun/foorumille).<br />
	Valitse t&#228;m&#228; toiminto jos sinulla on ongelmia esim k&#228;ytt&#228;jien kirjautuessa automaattisesti ulos.<hr />
	Globaalisti tallennetut ev&#228;steet ovat v&#228;hemm&#228;n turvallisia kun k&#228;ytet&#228;&#228;n jaettua serveri&#228; (esim GeoCities).<hr />
	Paikalliset ev&#228;steet eiv&#228;t toimi foorumi kansion ulkopuolella, joten jos keskustelualueesi sijaitsee www.minunserverini.com/forum, sivut kuten www.minunserverini.com/index.php eiv&#228;t puysty lukemaan k&#228;ytt&#228;j&#228;tietoja.
	Etenkin jos k&#228;yt&#228;t SSI.php:ta, globaalit ev&#228;steet ovat suositeltavia.';
$helptxt['enableBBC'] = 'Valitsemalla t&#228;m&#228;n toiminnon sallit j&#228;seniesi k&#228;ytt&#228;&#228; BBC-koodia keskustelualueella, jonka avulla he voivat muokata viestej&#228;&#228;n kuvin, muotoiluin jne.';
$helptxt['time_offset'] = 'Kaikki yll&#228;pit&#228;j&#228;t eiv&#228;t halua keskustelualueen k&#228;ytt&#228;v&#228;n serverins&#228; aikaa. T&#228;m&#228;n toiminnon avulla voit siirt&#228;&#228; keskustelualueen kellon eri aikaan kuin serverin kello. Miinus ja desimaaliarvot eiv&#228;t toimi.';
$helptxt['spamWaitTime'] = 'T&#228;st&#228; voit valita kuinka pitk&#228; aikav&#228;li viestien l&#228;hett&#228;misen v&#228;lill&#228; pit&#228;&#228; olla. T&#228;ll&#228; voidaa est&#228;&#228; sp&#228;mm&#228;&#228;minen foorumilla.';

$helptxt['enablePostHTML'] = 'T&#228;m&#228; sallii viesteiss&#228; perus HTML koodit:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'T&#228;&#228;ll&#228; voit asettaa voiko oletusteemaa k&#228;ytt&#228;&#228;, mit&#228; teemaa vieraat k&#228;ytt&#228;v&#228;t,
	sek&#228; muita sen tyyppisi&#228; asetuksia. Klikkaa teeman nime&#228; muuttaaksesi sen asetuksia.';
$helptxt['theme_install'] = 'T&#228;m&#228;n avulla voit asentaa uusia teemoja.  Voit k&#228;ytt&#228;&#228; jo luotua hakemistoa lataamalla kaikki tiedostot sinne, tai kopioimalla oletusteeman.<br /><br />Huomioi ett&#228; ladattavissa tiedostoissa pit&#228;&#228; olla mukana <tt>theme_info.xml</tt> tiedosto.';
$helptxt['enableEmbeddedFlash'] = 'T&#228;m&#228;n asetuksen avulla sallit j&#228;seniesi k&#228;yttt&#228;&#228; flashi&#228; viesteiss&#228; kuten kuvia.
	T&#228;m&#228; voi olla teoriassa tietoturvariski, tosin harva sen hyv&#228;ksik&#228;yt&#246;ss&#228; on onnistunut.
	K&#228;YT&#228; OMALLA VASTUULLA!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Sallii j&#228;senien linkitt&#228;&#228; <a href="' . $scripturl . '?action=.xml;sa=news">Uutisiin</a>
	ja sen tyyppisiin tiedostoihin.  On suositeltavaa ett&#228; asetat viesteille kokorajoituksen, koska rss tiedot
	n&#228;ytet&#228;&#228;n er&#228;iss&#228; ohjelmissa, kuten Trillianissa, joissa sen oletetaankin olevan p&#228;tk&#228;isty.';
$helptxt['hotTopicPosts'] = 'Muuta tarvittavien viestien m&#228;&#228;r&#228;&#228; &quot;suositulle&quot; tai
	&quot;eritt&#228;in suositulle&quot; aiheelle.';
$helptxt['globalCookies'] = 'Salli alidomainista riippuvaiset ev&#228;steet.  Esimerkiksi, jos...<br />
	Sivustosi on osoitteessa http://www.simplemachines.org/,<br />
	ja keskustelualueesi on osoitteessa http://forum.simplemachines.org/,<br />
	k&#228;ytt&#228;m&#228;ll&#228; t&#228;t&#228; toimintoa sallit p&#228;&#228;syn keskustelualueen ev&#228;steeseen p&#228;&#228;sivun kautta.';
$helptxt['securityDisable'] = 'T&#228;m&#228; <i>poistaa</i> salasanavarmistuksen yll&#228;pitoalueelta. T&#228;m&#228; ei ole suositeltavaa!';
$helptxt['securityDisable_why'] = 'T&#228;m&#228; on sinun nykyinen salasanasi. (sama mill&#228; kirjaudut sis&#228;&#228;n.)<br /><br />Salasanalla varmistetaan, että olet itse kirjautumassa yll&#228;pitoalueelle.';
$helptxt['emailmembers'] = 'Viestiss&#228; voit k&#228;ytt&#228;&#228; seuraavia &quot;muuttujia&quot;.  Ne ovat:<br />
	{$board_url} - Keskustelualueesi URL.<br />
	{$current_time} - T&#228;m&#228;nhetkinen aika.<br />
	{$member.email} - K.o j&#228;senen nykyinen s&#228;hk&#246;postiosoite.<br />
	{$member.link} - K.o j&#228;senen nykyinen linkki.<br />
	{$member.id} - K.o j&#228;senen id -numero.<br />
	{$member.name} - K.o j&#228;senen nimi.<br />
	{$latest_member.link} - Viimeisimm&#228;n rekister&#246;ityneen j&#228;senen linkki.<br />
	{$latest_member.id} - Viimeisimm&#228;n rekister&#246;ityneen j&#228;senen id.<br />
	{$latest_member.name} - Viimeisimm&#228;n rekister&#246;ityneen j&#228;senen nimi.';
$helptxt['attachmentEncryptFilenames'] = 'Salaamalla tiedostojen nimet voit k&#228;ytt&#228;&#228; useampaa samannimist&#228; tiedostoa,
	turvallisesti k&#228;ytt&#228;&#228; .php tiedostoja liitteen&#228;, sek&#228; parantaa tietoturvaa.  Se tosin voi vaikeuttaa tietokannan korjausta
	jos jotain kriittist&#228; tapahtuu.';

$helptxt['failed_login_threshold'] = 'Aseta kuinka monta kertaa virheellisi&#228; kirjauksia voi olla ennekuin j&#228;sen siirret&#228;&#228;n salasanamuistutukseen.';
$helptxt['oldTopicDays'] = 'T&#228;m&#228;n toiminnon avulla k&#228;ytt&#228;j&#228;&#228; varoitetaan jos h&#228;n yritt&#228;&#228; vastata aiheeseen johon ei ole kirjoitettu m&#228;&#228;r&#228;ttyyn aikaan. Aseta arvoksi 0, jos haluat toiminnon popis p&#228;&#228;lt&#228;.';
$helptxt['edit_wait_time'] = 'Kuinka monta sekuntia on aikaa korjata l&#228;hetetty&#228; viesti&#228; ennenkuin siihen lis&#228;t&#228;&#228;n viimeksi muokattu leima.';
$helptxt['edit_disable_time'] = 'Kuinka monta mimuutin j&#228;lkeen k&#228;ytt&#228;j&#228; ei voi en&#228;&#228; muokata viesti&#228;&#228;n. Laita 0 sulkeaksesi toiminnon. <br /><br /><i>Huomioi: T&#228;m&#228; ei vaikuta j&#228;seniin joilla on oikeus muokata muiden viestej&#228;.</i>';
$helptxt['enableSpellChecking'] = 'K&#228;yt&#228; oikolukua. Pspell kirjastot pit&#228;&#228; olla asenettuna serverille. Sinun serverill&#228;si ' . (function_exists('pspell_new') ? 'N&#228;YTT&#228;ISI' : 'EI N&#228;YTT&#228;ISI') . ' olevan t&#228;m&#228; asennettuna.';
$helptxt['lastActive'] = 'Aseta aika minuuteissa kuinka kauan k&#228;ytt&#228;j&#228;t n&#228;kyv&#228;t aktiivisina keskustelualueen etusivulla. Oletus on 15 minuuttia.';

$helptxt['autoOptDatabase'] = 'T&#228;m&#228; optimoi tietokannan m&#228;&#228;r&#228;tyin v&#228;liajoin.  Aseta 1 jos haluat sen tapahtuvan p&#228;ivitt&#228;in.  Voit my&#246;s asettaa kuinka monta k&#228;ytt&#228;j&#228;&#228; foorumilla saa olla optimoinnin tapahtuessa, jotta se ei ylikuormita serveri&#228;si tai h&#228;iritse k&#228;ytt&#228;ji&#228;si.';
$helptxt['autoFixDatabase'] = 'T&#228;m&#228; korjaa automaattisesti rikkin&#228;iset taulut ja jatkaa kuin mit&#228;&#228;n ei olisi tapahtunut. T&#228;m&#228; voi olla k&#228;yt&#228;nn&#246;llist&#228;, koska ainoa keino on korjata taulu ja t&#228;ll&#228; tavoin keskustelualueesi ei ole alhaalla siihen saakka kunnes olet korjannut itse virheen. Saat kyll&#228; viestin kun n&#228;in tapahtuu.';

$helptxt['enableParticipation'] = 'T&#228;m&#228; n&#228;ytt&#228;&#228; k&#228;ytt&#228;j&#228;lle erilaisen ikonin jos h&#228;n on osallistunut k.o aiheeseen.';

$helptxt['db_persist'] = 'Pit&#228;&#228; yhteyden jatkuvasti p&#228;&#228;ll&#228; nopeuden parantamiseksi. Jos et ole omalla serverill&#228;si, t&#228;m&#228; voi aiheuttaa ongelmia palveluntarjoasi kanssa.';

$helptxt['queryless_urls'] = 'T&#228;m&#228; muuttaa URL-osoitteiden muotoa jotta hakukoneet pit&#228;isiv&#228;t niist&#228; enemm&#228;n.  Ne n&#228;ytt&#228;v&#228;t t&#228;llaisilta index.php/topic,1.html.<br /><br />T&#228;m&#228; toiminto ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'ei') . ' n&#228;ytt&#228;isi toimivan serverill&#228;si';
$helptxt['countChildPosts'] = 'T&#228;m&#228; toiminto tarkoittaa sit&#228; ett&#228; alueen ja sen alakategorioiden viestim&#228;&#228;r&#228;t lasketaan yhteen ja niiden summa n&#228;ytet&#228;&#228;n etusivulla<br /><br />T&#228;m&#228; hidastaa sivun latautumista, mutta toisaalta jos yl&#228;kategoriassa ei ole yht&#228;&#228;n viestie&#228;, niin etusivulla ei lue sitten \'0\'.';
$helptxt['fixLongWords'] = 'T&#228;m&#228; toiminto katkaisee sanat jotka ovat m&#228;r&#228;tty&#228; pidemm&#228;t jotta ne eiv&#228;t sotkisi keskustelualueen ulkon&#228;k&#246;&#228;. (niin paljon...)  T&#228;t&#228; arvoa ei kannata asettaa alle 40.';

$helptxt['who_enabled'] = 'T&#228;m&#228;n avulla suljet k&#228;ytt&#228;jilt&#228; toiminnon jossa p&#228;&#228;see katselemaan mit&#228; muut k&#228;ytt&#228;j&#228;t tekev&#228;t keskustelualueella.';

$helptxt['recycle_enable'] = '&quot;Siirt&#228;&#228;&quot; poistetut aiheet ja viestit m&#228;&#228;r&#228;tylle alueelle.';

$helptxt['enableReportPM'] = 'T&#228;m&#228;n toiminnon avulla j&#228;senet voivat raportoida saamistaan yksityisviesteist&#228; yll&#228;pidolle. T&#228;m&#228; voi olla k&#228;tev&#228;&#228; h&#228;irik&#246;jen j&#228;ljitt&#228;misess&#228; jne.';
$helptxt['max_pm_recipients'] = 'T&#228;ss&#228; voit asettaa rajoituksen kuinka monta vastaanottajaa saa olla j&#228;senen l&#228;hett&#228;m&#228;ss&#228; yksityisviestiss&#228;. T&#228;ll&#228; voidaan ehk&#228;ist&#228; sp&#228;mm&#228;&#228;mist&#228; yksityisviestien kautta. Huomioi ett&#228; tVmV ei koske j&#228;seni&#228; jotka saavat l&#228;hett&#228;&#228; uutiskirjeit&#228;. Aseta 0 jos et halua rajoitusta ollenkaan.';
$helptxt['pm_posts_verification'] = 'Tämä asetus pakottaa käyttäjän kirjoittamaan varmistuskuvassa näytetyn koodin aina lähettäessä yksityisviestiä. Vain käyttäjät joilla on annettua pienempi viestimäärä foorumilla, joutuvat antamaan koodin. Tämä asetus auttaa lähinnä taistelussa automatisoituja spam-skriptejä vastaan.';
$helptxt['pm_posts_per_hour'] = 'Tällä asetuksella voit rajoittaa montako yksityisviestiä käyttäjä voi lähettää tunnin sisällä. Tämä ei vaikuta ylläpitäjiin tai moderaattoreihin.';

$helptxt['default_personalText'] = 'Asettaa oletustekstin mik&#228; n&#228;kyy j&#228;senien &quot;Oma teksti&quot; kohdassa.';

$helptxt['modlog_enabled'] = 'Pit&#228;&#228; logia kaikista valvonta tapahtumista.';

$helptxt['guest_hideContacts'] = 'Jos valitset t&#228;m&#228;n, kaikki pikaviestin ja s&#228;hk&#246;postiosoitteet piilotetaan
	kaikilta keskustelualueen vierailta';

$helptxt['registration_method'] = 'T&#228;m&#228; asetus m&#228;&#228;rittelee mit&#228; metodia k&#228;ytet&#228;&#228;n kun uusia j&#228;seni&#228; rekister&#246;ityy keskustelualueellesi. Voit valita seuraavista:<br /><br />
	<ul>
		<li>
			<b>Rekister&#246;ityminen estetty:</b><br />
				Pys&#228;ytt&#228;&#228; rekister&#246;itymistoiminnon, jolloin kukaan ei voi rekister&#246;ity&#228; keskustelualueellesi.<br />
		</li><li>
			<b>V&#228;lit&#246;n rekister&#246;inti</b><br />
				Uudet j&#228;senet voivat kirjautua samantien kun ovat rekister&#246;ityneet keskustelualueellesi.<br />
		</li><li>
			<b>Edellyt&#228; aktivointia</b><br />
				Kun rekiste&#246;inti on tehty, j&#228;senelle l&#228;hetet&#228;&#228;n aktivoitumislinkki s&#228;hk&#246;postiin jota klikkaamalla j&#228;senyys astuu voimaan<br />
		</li><li>
			<b>Edellyt&#228; yll&#228;pidon hyv&#228;ksynt&#228;&#228;</b><br />
				Kun rekister&#246;ityminen on tehty, yll&#228;pit&#228;j&#228;n pit&#228;&#228; hyv&#228;ksy&#228; se ennekuin se astuu voimaan.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Kun t&#228;m&#228; on valittuna, kaikki j&#228;senet jotka muuttavat s&#228;hk&#246;postiosoitettaan, joutuvat uudelleen aktivoimaan sen k.o osoitteeseen l&#228;hetett&#228;v&#228;n linkin kautta.';
$helptxt['send_welcomeEmail'] = 'Kun t&#228;m&#228; on valittuna, kaikille uusille j&#228;senille l&#228;hetet&#228;&#228;n tervetuliaisviesti s&#228;hk&#246;postiin';
$helptxt['password_strength'] = 'T&#228;m&#228; asetus m&#228;&#228;rittelee mit&#228; j&#228;senien salasanoilta edelllytet&#228;&#228;n. Mit&#228; &quot;voimakkaampi&quot; asetus, sen vaikeampi salasanoja on ulkopuolisten arvailla.
	Vaihtoehdot ovat:
	<ul>
		<li><b>Matala:</b> salasanan on oltava v&#228;hint&#228;&#228;m nelj&#228; merkki&#228; pitk&#228;.</li>
		<li><b>Keskitaso:</b> Salasanan tulee olla v&#228;hint&#228;&#228;n kahdeksan merkki&#228; pitk&#228;, eik&#228; saa sis&#228;lt&#228;&#228; osia k&#228;ytt&#228;j&#228;n tunnuksesta tai s&#228;hk&#246;postiosoittesta.</li>
		<li><b>Korkea:</b> Kuten keskitaso, mutta salasanan tulee olla sekoitus isoja ja pieni&#228; merkkej&#228;, sek&#228; ainakin yhden numeron.</li>
	</ul>';

$helptxt['coppaAge'] = 'T&#228;ss&#228; m&#228;&#228;ritell&#228;&#228;n ik&#228;raja uusille j&#228;senille jotta he voisivat rekister&#246;ity&#228; keskustelualueelle.
	Rekister&#246;ityess&#228; heilt&#228; kysyt&#228;&#228;n ovatko he t&#228;m&#228;n ik&#228;isi&#228;, jos eiv&#228;t, heid&#228;n j&#228;senyyttt&#228;&#228;n ei hyv&#228;ksyt&#228; tai edellytet&#228;&#228;n vanhempien lupalappua - riippuen asetuksista.
	Jos asetat arvoksi 0, kaikki muutkin ik&#228;rajoitustoiminnot poistuvat k&#228;yt&#246;st&#228;.';
$helptxt['coppaType'] = 'Jos ik&#228;rajoitus on p&#228;&#228;ll&#228;, t&#228;st&#228; voit m&#228;&#228;ritell&#228; mit&#228; tapahtuu jos alaik&#228;inen yritt&#228;&#228; rekister&#246;ity&#228; keskustelualueellesi. Valittavana on kaksi vaihtoehtoa:
	<ul>
		<li>
			<b>Hylk&#228;&#228; rekister&#246;ityminen:</b><br />
				Alaik&#228;isten j&#228;senhakemukset hyl&#228;t&#228;&#228;n samantien.<br />
		</li><li>
			<b>Edellyt&#228; kirjallista lupaa vanhemmilta/huoltajilta</b><br />
				Kaikki alaik&#228;isten hakemukset laitetaan odottamaan, ja heille esitet&#228;&#228;n lupakaavake jonka vanhempien t&#228;ytyy t&#228;ytt&#228;&#228; jotta j&#228;senyys voi astua voimaan.
				Heille esitet&#228;&#228;n my&#246;s yhteystiedot jotka m&#228;&#228;rittelit asetuksissa, jotta he voivat palauttaa lupakaavakkeen postitse tai faksilla.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Yhteystietolomake on t&#228;ytett&#228;v&#228; jotta alaik&#228;isten lupakaavakkeeseen saadaan asianmukaiset tiedot. N&#228;m&#228; tiedot n&#228;ytet&#228;&#228;n kaikille alaik&#228;isille hakijoille. Ainakin postiosoite tai faksin numero pit&#228;&#228; antaa.';

$helptxt['allow_hideOnline'] = 'T&#228;m&#228;n toiminnon avulla k&#228;ytt&#228;j&#228;t voivat valita n&#228;kyv&#228;tk&#246; he muille (paitsi yll&#228;pidolle) sis&#228;&#228;nkirjatuneena vai eiv&#228;t. Jos asetus ei ole p&#228;&#228;ll&#228;, vain he joilla on valvontaoikeudet voivat k&#228;ytt&#228;&#228; toimintoa. Huomioi ett&#228; jos otat sen pois p&#228;&#228;lt&#228; nyt, ne j&#228;senet jotka ovat piilottaneet itsens&#228; pysyv&#228;t piilossa jatkossakin. Asetus vaikuttaa vain siit&#228; eteenp&#228;in.';
$helptxt['allow_hideEmail'] = 'T&#228;m&#228;n toiminnon avulla j&#228;senet voivat piilottaa s&#228;hk&#246;postiosoitteensa muilta j&#228;senilt&#228;. Yll&#228;pito n&#228;kee kuitenkin aina kaikkien s&#228;hk&#246;postiosoitteet.';

$helptxt['latest_support'] = 'T&#228;m&#228; paneeli n&#228;ytt&#228;&#228; yleisimm&#228;t ongelmat ja kysymykset joihin yll&#228;pit&#228;j&#228;t ovat t&#246;rm&#228;nneet. <br /><br />Jos t&#228;m&#228; n&#228;ytt&#228;&#228; vain &quot;Vastaanotetaan tietoja...&quot;, sinun koneesi ei luultavammin saa yhteytt&#228; sivustoon <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'T&#228;&#228;ll&#228; voit katsella suosituimpia ja satunnaisia paketteja ja muokkauksia, sis&#228;lt&#228;en nopean ja helpon asennuksen.<br /><br />Jos t&#228;m&#228; ei n&#228;y, se luultavimmin johtuu siit&#228; ettei koneesi saa yhteytt&#228; sivustolle <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'T&#228;&#228;ll&#228; n&#228;kyy uusimmat ja suosituimmat teemat sivustolta <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  Voi olla ettei se n&#228;y kunnolla jos koneesi ei saa yhteytt&#228; sivustoon <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Tietoturvasyist&#228; vastaus kysymykseesi salasanan ohella on kryptattu siten, että vain SMF tiet&#228;&#228; menik&#246; se oikein vai ei, joten kukaan ei niit&#228; pysty selvitt&#228;m&#228;&#228;n.';
$helptxt['moderator_why_missing'] = 'Koska valvonta on toteutettu alueittain, sinun t&#228;ytyy luoda j&#228;senist&#228; valvojia <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">alueiden hallinnasta</a> k&#228;sin.';

$helptxt['permissions'] = 'Oikeuksilla joko sallit tai kiell&#228;t ryhmi&#228; tehd&#228; jotain.<br /><br />Voit muokata useampia alueita kerralla valintalaatikoiden avulla, tai katsella tietyn ryhm&#228;n oikeuksia klikkaamalla \'Muokkaa.\'';
$helptxt['permissions_board'] = 'Jos alue on merkattu \'Globaaliksi,\', se tarkoittaa ettei sill&#228; ole mit&#228; aluekohtaisia erityisoikeuksi asetettuna.  \'Paikallinen\' tarkoittaa ett&#228; alueella on omat oikeudet, jotka poikkeavat siis globaaleista.  T&#228;m&#228;n avulla voit asettaa alueelle enemm&#228;n tai v&#228;hemm&#228;n oikeuksia, ilman ett&#228; sinun t&#228;ytyisi k&#228;yd&#228; kaikki alueet l&#228;pi.';
$helptxt['permissions_quickgroups'] = 'T&#228;m&#228;n avulla voit k&#228;ytt&#228;&#228; &quot;oletus&quot; oikeusasetuksia - standardi tarkoittaa \'ei erityist&#228;\', rajoitettu tarkoittaa \'kuten vieras\', moderaattri tarkoittaa \'mit&#228; moderaattorilla on\', ja viimeiseksi \'huoltaja\' tarkoittaa ett&#228; oikeudet ovat hyvin l&#228;hell&#228; yll&#228;pit&#228;j&#228;&#228;.';
$helptxt['permissions_deny'] = 'Kielt&#228;minen voi olla hy&#246;dyllist&#228; kun haluat est&#228;&#228; jonkin tietyn oikeuden haluamiltasi j&#228;senilt&#228;. Voit lis&#228;t&#228; ryhm&#228;&#228;n jolla on \'kiell&#228;\'-oikeus asetettuna ne j&#228;senet joilta haluat oikeuden kielt&#228;&#228;.<br /><br />K&#228;yt&#228; varoen, kielletty oikeus pysyy kiellettyn&#228; huolimatta siit&#228; mihin muihin ryhmiin j&#228;sen kuuluu.';
$helptxt['permissions_postgroups'] = 'Asettamalla oikeuksia viestim&#228;&#228;riin perustuville ryhmille, voit esim lis&#228;t&#228; oikeuksia tietyn viestim&#228;&#228;r&#228;n j&#228;lkeen yms. Viestim&#228;&#228;riin perustuvien ryhmien oikeudet <em>kopioidaan</em> tavallisten j&#228;senien ryhm&#228;lt&#228;.';
$helptxt['permissions_by_board'] = 'T&#228;m&#228;n avulla voit asettaa eri oikeudet, eri ryhmille joka alueella erikseen. Oletuksena alue k&#228;ytt&#228;&#228; globaaleja oikeuksia, mutta t&#228;m&#228;n avulla voit vaihtaa ne paikallisiin. T&#228;m&#228; tarjoaa mahdollisuuden viritell&#228; oikeuksia hyvinkin tarkasti alueittain.';
$helptxt['membergroup_guests'] = 'Vieraiden j&#228;senryhm&#228; tarkoittaa k&#228;ytt&#228;ji&#228; jotka eiv&#228;t ole kirjautuneet sis&#228;lle keskustelualueelle.';
$helptxt['membergroup_regular_members'] = 'Tavalliset j&#228;senet ovat niit&#228; j&#228;seni&#228; jotka ovat rekister&#246;ityneet, mutta joita ei ole liitetty mihink&#228;&#228;n erityiseen ryhm&#228;&#228;n.';
$helptxt['membergroup_administrator'] = 'Yll&#228;pit&#228;j&#228; voi tehd&#228; mit&#228; tahansa ja n&#228;kee kaikki alueet. Yll&#228;pit&#228;j&#228;lle ei aseteta mit&#228;&#228;n oikeuksia koska h&#228;nell&#228; on ne kaikki.';
$helptxt['membergroup_moderator'] = 'Aluevalvojat on erityinen ryhm&#228;. Oikeudet ja asetukset t&#228;lle ryhm&#228;lle vain sill&#228; <em>alueella joita he valvovat</em>. N&#228;iden alueiden ulkopuolella heill&#228; on tavallisen j&#228;senen oikeudet.';
$helptxt['membergroups'] = 'SMF foorumissa on kahdenlaisia ryhmi&#228; joihin j&#228;sen voi kuulua. Ne ovat:
	<ul>
		<li><b>Tavalliset ryhm&#228;t:</b> Tavallinen ryhm&#228; on ryhm&#228; johon j&#228;sent&#228; ei automaattisesti liitet&#228;. Liitt&#228;&#228;ksesi j&#228;senen t&#228;llaiseen ryhm&#228;&#228;n, mene h&#228;nen profiiliinsa ja klikkaa kohtaa &quot;Perusasetukset&quot;. Sielt&#228; voit liitt&#228;&#228; h&#228;net niin moneen tavalliseen ryhm&#228;&#228;n kuin haluat.</li>
		<li><b>Viestim&#228;&#228;riin perustuvat ryhm&#228;t:</b> N&#228;ihin ryhmiin ei voi liitt&#228;&#228; ket&#228;&#228;n kuten tavallisiin ryhmiin. Sensijaan j&#228;senet liitet&#228;&#228;n n&#228;ihin rymiin sen perusteella kuinka monta viesti&#228; he ovat kirjoittaneet.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Voit muokata n&#228;it&#228; tapahtumia klikkaamalla punaista t&#228;hte&#228; (*) niiden nimien vieress&#228;.';

$helptxt['maintenance_general'] = 'T&#228;&#228;ll&#228; voit optimoida tietokantasi taulut (joka tekee ne pienemmiksi ja nopeammiksi!), varsmistua ett&#228; sinulla on uusimmat versiot, l&#246;yt&#228;&#228; virheet mitk&#228; vaivaa, uudelleenlaskea statistiikat, sek&#228; tyhjent&#228;&#228; lgitiedostoja.<br /><br />Kahta viimeist&#228; voit v&#228;ltell&#228; ellei joku ole pieless&#228;.';
$helptxt['maintenance_backup'] = 'T&#228;&#228;ll&#228; voit kopioida kaikki viestit, asetukset, j&#228;senet, sek&#228; muut foorumisi tiedot yhteen isoon tiedostoon.<br /><br />On suositeltavaa tehd&#228; t&#228;m&#228; usein, ehk&#228;p&#228; viikottain, ihan varmuuden vuoksi.';
$helptxt['maintenance_rot'] = 'T&#228;ll&#228; voit poistaa vanhoja viestej&#228; <b>lopullisesti</b> ja <b>peruuttamattomasti</b>.  On suositeltavaa tehd&#228; varmuuskopio tietokannasta ennen t&#228;t&#228;,  jos vaikka poistat vahingossa jotain mit&#228; ei ollut tarkoitus.<br /><br />K&#228;yt&#228; t&#228;t&#228; toimintoa varoen.';

$helptxt['avatar_allow_server_stored'] = 'T&#228;m&#228; sallii j&#228;sentesi valita avatar kuvan joka on tallennettu serverillesi.  Ne sijaitsevat yleens&#228; samassa paikassa kuin SMF, avatar kansiossa.<br />Vinkkin&#228;,voit luoda alikansioita siihen kasnioon, jolloin ne n&#228;kyv&#228;t &quot;avatar kategorioina&quot; k&#228;ytt&#228;jille.';
$helptxt['avatar_allow_external_url'] = 'T&#228;m&#228; sallii k&#228;ytt&#228;&#228; linkitettyj&#228; avatar kuvia, eli j&#228;senet voivat kirjoittaa URL -osoitteen miss&#228; heid&#228;n kuvansa sijaitsee.  Huono puoli t&#228;ss&#228; on se, ett&#228; kuvat voivat olla suurikokoisia tai sis&#228;lt&#228;&#228; grafiikkaa jota et halua foorumillesi.';
$helptxt['avatar_download_external'] = 'T&#228;m&#228;n avulla j&#228;senen linkitt&#228;m&#228; kuva ladataan serverille ja sit&#228; kohdellaan kuten ladattuja kuvia muutenkin.';
$helptxt['avatar_allow_upload'] = 'T&#228;m&#228; on samankaltainen toiminto kuin &quot;linkitetyt avtar kuvat&quot;, mutta sinulla on parempi kontrolli niihin, niiden kokoon, eik&#228; j&#228;sentesi tarvitsee etsi&#228; tallennuspaikkaa kuvilleen.<br /><br />Huono puoli on, ett&#228; ne viev&#228;t tilaa palvelimellasi.';
$helptxt['avatar_download_png'] = 'PNG:t ovat isompia, mutta parempi laatuisia pakattuina.  Jos t&#228;t&#228; ei ole valittuna, k&#228;ytet&#228;&#228;n JPEG  muotoa - joka on usein pienempi kooltaan, mutta my&#246;s huonompi laadultaan.';

$helptxt['disableHostnameLookup'] = 'Poistaa k&#228;yt&#246;st&#228; palvelinnimien selvitt&#228;misen, joka voi olla hyvin hidasta.  Huomioi ett&#228; se tekee porttikiellot hieman tehottomammiksi.';

$helptxt['search_weight_frequency'] = 'Painoarvoja k&#228;ytet&#228;&#228;n arvoimaan hakutuloksen asiaankuuluvuutta. Muuta n&#228;it&#228; niin ett&#228; ne vastaavat niihin asiohin jotka ovat t&#228;rkeimpi&#228; keskustelualueellasi. Esimerkiksi uutissivustolla, t&#228;rkeimp&#228;n&#228; asiana voisi pit&#228;&#228; asian tuoreutta. Kaikki arvot ovat suhteessa toisiinsa.<br /><br /> T&#228;m&#228; painoarvo painottaa samasta aiheesta l&#246;ytyvi&#228; osumia.';
$helptxt['search_weight_age'] = 'Painoarvoja k&#228;ytet&#228;&#228;n arvoimaan hakutuloksen asiaankuuluvuutta. Muuta n&#228;it&#228; niin ett&#228; ne vastaavat niihin asiohin jotka ovat t&#228;rkeimpi&#228; keskustelualueellasi. Esimerkiksi uutissivustolla, t&#228;rkeimp&#228;n&#228; asiana voisi pit&#228;&#228; asian tuoreutta. Kaikki arvot ovat suhteessa toisiinsa.<br /><br />T&#228;m&#228; painoarvo painottaa viestin ik&#228;&#228;. Mit&#228; tuoreempi viesti, sen enemm&#228;n sill&#228; on painoarvoa';
$helptxt['search_weight_length'] = 'Painoarvoja k&#228;ytet&#228;&#228;n arvoimaan hakutuloksen asiaankuuluvuutta. Muuta n&#228;it&#228; niin ett&#228; ne vastaavat niihin asiohin jotka ovat t&#228;rkeimpi&#228; keskustelualueellasi. Esimerkiksi uutissivustolla, t&#228;rkeimp&#228;n&#228; asiana voisi pit&#228;&#228; asian tuoreutta. Kaikki arvot ovat suhteessa toisiinsa.<br /><br />T&#228;m&#228; painoarvoa painottaa aiheen pituutta. Mit&#228; pitempi aihe, sen isompi painoarvo sill&#228; on.';
$helptxt['search_weight_subject'] = 'Painoarvoja k&#228;ytet&#228;&#228;n arvoimaan hakutuloksen asiaankuuluvuutta. Muuta n&#228;it&#228; niin ett&#228; ne vastaavat niihin asiohin jotka ovat t&#228;rkeimpi&#228; keskustelualueellasi. Esimerkiksi uutissivustolla, t&#228;rkeimp&#228;n&#228; asiana voisi pit&#228;&#228; asian tuoreutta. Kaikki arvot ovat suhteessa toisiinsa.<br /><br />T&#228;m&#228; painoarvo painottaa l&#246;ytyyk&#246; haettu sana viestin otsikosta.';
$helptxt['search_weight_first_message'] = 'Painoarvoja k&#228;ytet&#228;&#228;n arvoimaan hakutuloksen asiaankuuluvuutta. Muuta n&#228;it&#228; niin ett&#228; ne vastaavat niihin asiohin jotka ovat t&#228;rkeimpi&#228; keskustelualueellasi. Esimerkiksi uutissivustolla, t&#228;rkeimp&#228;n&#228; asiana voisi pit&#228;&#228; asian tuoreutta. Kaikki arvot ovat suhteessa toisiinsa.<br /><br />T&#228;m&#228; painoarvo painottaa aiheen ensimm&#228;isest&#228; viestist&#228; l&#246;ytyvi&#228; osumia.';
$helptxt['search_weight_sticky'] = 'Painoarvoja k&#228;ytet&#228;&#228;n arvoimaan hakutuloksen asiaankuuluvuutta. Muuta n&#228;it&#228; niin ett&#228; ne vastaavat niihin asiohin jotka ovat t&#228;rkeimpi&#228; keskustelualueellasi. Esimerkiksi uutissivustolla, t&#228;rkeimp&#228;n&#228; asiana voisi pit&#228;&#228; asian tuoreutta. Kaikki arvot ovat suhteessa toisiinsa.<br /><br />T&#228;m&#228; painoarvo katsoo onko aihe pysyv&#228; ja lis&#228;&#228; osuvuutta sen mukaan.';
$helptxt['search'] = 'Valitse kaikki asetukset hakua varten t&#228;&#228;ll&#228;. T&#228;&#228;lt&#228; et voi m&#228;&#228;ritell&#228; kuka p&#228;&#228;see k&#228;ytt&#228;m&#228;&#228;n hakua. Sen voit tehd&#228; oikeuksien hallinnasta.';
$helptxt['search_why_use_index'] = 'Hakuindeksi voi lis&#228;t&#228; keskustelualueesi haun nopeutta huomattavasti. Erityisesti silloin kun viestien lukum&#228;&#228;r&#228; nousee isommaksi, haku ilman indeksi&#228; voi olla tuskallisen hidas ja lis&#228;t&#228; tietokantasi kuormaa. Jos keskustelualueellasi on enemm&#228;n kuin 50.000 viesti&#228;, harkitse indeksin luomista.<br /><br />Huomioi ett&#228; hakuindeksi tarvitsee tilaa. Fulltext indeksi on sis&#228;&#228;nrakennettu MySQL indeksi. Se on suhteelllisen tiivis (suunnilleen viestitaulun kokoinen), mutta useat sanoista eiv&#228;t ole indeksoituja joten jotkin hauista voivat olla hitaita. Muokattu indeksi on usein isompi (riippuen asetuksistasi, se voi olla jopa 3 kertaa viestitauluasi isompi), mutta se on nopeampi kuin fulltext ja on kohtuullisen vakaa. ';

$helptxt['see_admin_ip'] = 'IP-osoitteet n&#228;ykyv&#228;t yll&#228;pidolle ja valvojille jotta he voivat j&#228;ljitt&#228;&#228; esim h&#228;irik&#246;it&#228; paremmin. Muista ett&#228; IP- osoitteet eiv&#228;t ihan aina t&#228;sm&#228;&#228; ja useimmilla se vaihtuu s&#228;&#228;nn&#246;llisesti.<br /><br />J&#228;senet n&#228;kev&#228;t oman osoitteensa.';
$helptxt['see_member_ip'] = 'IP- osoitteesi n&#228;kyy vain sinulle ja valvojille.  Muista ett&#228; t&#228;m&#228; informaatio ei v&#228;ltt&#228;m&#228;tt&#228; identifioi ket&#228;&#228;n koska useimmat IP:t muuttuvat s&#228;&#228;nn&#246;llisesti.<br /><br />Et voi n&#228;hd&#228; muiden osoitteita, eiv&#228;tk&#228; he n&#228;e sinun osoitettasi.';

$helptxt['ban_cannot_post'] = '\'Ei pysty l&#228;hett&#228;m&#228;&#228;n viestej&#228;\' rajoite muuttaa keskustelualueen vain luettavaksi estetylle k&#228;ytt&#228;j&#228;lle. H&#228;n ei voi aloittaa uusia aiheita, vastata nykyisiin, l&#228;hett&#228;&#228; yksityisviestej&#228; tai &#228;&#228;nest&#228;&#228;. Estetty k&#228;ytt&#228;j&#228; voi kuitenkin lukea yksityisviestej&#228; sek&#228; aiheita.<br /><br />K&#228;ytt&#228;j&#228;lle joka on estetty t&#228;lla&#228; tavalla, n&#228;ytet&#228;&#228;n varoitusviesti.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Viestien asetukset</b><br />
			Muokkaa asetuksia jotka liittyv&#228;t viestien l&#228;hett&#228;miseen ja miten ne n&#228;ytet&#228;&#228;n. T&#228;&#228;lt&#228; voit my&#246;s pist&#228;&#228; oikoluvun p&#228;&#228;lle.
		</li><li>
			<b>BBC koodit</b><br />
			Aseta koodit joilla muokata tekstin ulkoasua. Voit my&#246;s valita mitk&#228; koodit ovat k&#228;yt&#246;ss&#228; ja mitk&#228; eiv&#228;t.
		</li><li>
			<b>Sensuroidut sanat</b>
			Voidaksesi pit&#228;&#228; kielenk&#228;yt&#246;n siistin&#228; keskustelualueellasi, voit sensuroida sanoja. T&#228;m&#228; toiminto antaa sinun muuttaa automaattisesti tiettyj&#228; sanoja siistimpiin versioihin.
		</li><li>
			<b>Aiheiden asetukset</b>
			Muokkaa aiheiden asetuksia. Kuinka monta viesti&#228; sivulla n&#228;ytet&#228;&#228;n, onko pysyv&#228;t aiheet p&#228;&#228;ll&#228; vei eiv&#228;t, kuinka paljon pit&#228;&#228; vastauksia olla ett&#228; aihe on kuuma, jne.
		</li>
	</ul>';

?>