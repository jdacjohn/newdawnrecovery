<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'T&#228;&#228;ll&#228;  voit muokata keskustelualueesi perusasetuksia. Katso teeman <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">asetuksista</a> lis&#228;&#228; vaihtoehtoja.  Klikkaamalla kysymys ikoneja saat lis&#228;tietoja k.o ominaisuudesta.';

$txt['mods_cat_features'] = 'Perusasetukset';
$txt['pollMode'] = '&#196;&#228;nestykset';
$txt['smf34'] = 'Est&#228;  &#228;&#228;nestykset';
$txt['smf32'] = 'Salli &#228;&#228;nestykset';
$txt['smf33'] = 'N&#228;yt&#228; nykyiset &#228;&#228;nestykset kuten tavalliset aiheet';
$txt['allow_guestAccess'] = 'Anna vieraiden selailla keskustelualuetta';
$txt['userLanguage'] = 'Anna k&#228;ytt&#228;j&#228;n valita keskustelualueella k&#228;ytett&#228;v&#228; kieli';
$txt['allow_editDisplayName'] = 'Anna j&#228;senten muokata n&#228;ytett&#228;v&#228;&#228; nime&#228;&#228;n';
$txt['allow_hideOnline'] = 'Anna muidenkin kuin yll&#228;pit&#228;jien piilottaa heid&#228;n paikallaolostatus';
$txt['allow_hideEmail'] = 'Anna j&#228;senten piilottaa muilta s&#228;hk&#246;postiosoitteensa (paitsi yll&#228;pidolta)?';
$txt['guest_hideContacts'] = '&#196;l&#228; n&#228;yt&#228; j&#228;senien yhteystietoja vieraille.';
$txt['titlesEnable'] = 'N&#228;yt&#228; muokatut tittelit';
$txt['enable_buddylist'] = 'K&#228;yt&#228; kaverilistoja';
$txt['default_personalText'] = 'Oletus oma teksti';
$txt['max_signatureLength'] = 'Suurin sallittu m&#228;&#228;r&#228; merkkej&#228; allekirjoituksessa<div class="smalltext">(0 ei rajoitusta.)</div>';
$txt['number_format'] = 'Oletus numeroformaatti';
$txt['time_format'] = 'Oletus aikaformaatti';
$txt['time_offset'] = 'Keskustelualueen kelloaika<div class="smalltext">(Siirt&#228;&#228; kaikkien kelloa keskustelualueella, 0=serverisi aika)</div>';
$txt['failed_login_threshold'] = 'Ep&#228;onnistuneita kirjautumisia';
$txt['lastActive'] = 'Kuinka nopeasti k&#228;ytt&#228;j&#228; ei n&#228;y en&#228;&#228; sis&#228;ll&#228;olevana';
$txt['trackStats'] = 'Tallenna tilastoja';
$txt['hitStats'] = 'Tallenna p&#228;ivitt&#228;iset sivujen katselujen m&#228;&#228;r&#228;t (statistiikan pit&#228;&#228; olla p&#228;&#228;ll&#228;) ';
$txt['enableCompressedOutput'] = 'Pakattu ulosanti p&#228;&#228;ll&#228;';
$txt['databaseSession_enable'] = 'K&#228;yt&#228; tietokantapohjaisia sessioita';
$txt['databaseSession_loose'] = 'Salli selainten palata v&#228;limuistiin tallennetuille sivuille';
$txt['databaseSession_lifetime'] = 'Sekunneissa kuinka nopeasti k&#228;ytt&#228;m&#228;t&#246;n sessio vanhenee';
$txt['enableErrorLogging'] = 'Virheiden kirjaus p&#228;&#228;ll&#228;';
$txt['cookieTime'] = 'Kirjautumisev&#228;steen oletuspituus (minuuteissa)';
$txt['localCookies'] = 'K&#228;yt&#228; paikallisia ev&#228;steit&#228;<div class="smalltext">(SSI ei toimi kunnolla jos t&#228;m&#228; on p&#228;&#228;ll&#228;.)</div>';
$txt['globalCookies'] = 'K&#228;yt&#228;  alidomainista riippuvaisia ev&#228;steit&#228; ?<br />Varoitus: Ota paikalliset ev&#228;steet ensin pois p&#228;&#228;lt&#228; !';
$txt['securityDisable'] = 'Yll&#228;pidon salasanavarmistus pois p&#228;&#228;lt&#228;';
$txt['send_validation_onChange'] = 'Jos j&#228;sen vaihtaa s&#228;hk&#246;postiosoitetta, l&#228;het&#228; uusi salasana s&#228;hk&#246;postilla';
$txt['approveAccountDeletion'] = 'Edellyt&#228; yll&#228;pidon hyv&#228;ksynt&#228;&#228; j&#228;senyyden poistoissa';
$txt['autoOptDatabase'] = 'Optimoi taulut m&#228;&#228;r&#228;ttyjen  p&#228;ivien v&#228;lein?<br /><i>(0 ei p&#228;&#228;ll&#228; )</i>';
$txt['autoOptMaxOnline'] = 'Maksimim&#228;&#228;r&#228;  k&#228;ytt&#228;ji&#228;  sis&#228;ll&#228;  kun optimointi tapahtuu?<br /><i>(0 rajattomasti)</i>';
$txt['autoFixDatabase'] = 'Korjaa automaattisesti rikkin&#228;iset taulut';
$txt['allow_disableAnnounce'] = 'Salli j&#228;senten est&#228;&#228;  tiedotteiden saapuminen s&#228;hk&#246;postiin';
$txt['disallow_sendBody'] = '&#196;l&#228; salli teksti&#228; muistutusviesteiss&#228;';
$txt['modlog_enabled'] = 'Tallenna valvontalogia';
$txt['queryless_urls'] = 'Hakukoneyst&#228;v&#228;lliset  URL-osoitteet <div class="smalltext"><b>Vain Apache!</b></div>';
$txt['max_image_width'] = 'Maksimileveys l&#228;hetetyille kuville (0 = ei rajoitusta)';
$txt['max_image_height'] = 'Maksimikorkeus l&#228;hetetyille kuville (0 = ei rajoitusta)';
$txt['mail_type'] = 'S&#228;hk&#246;postin tyyppi';
$txt['mail_type_default'] = '(PHP oletus)';
$txt['smtp_host'] = 'SMTP serveri';
$txt['smtp_port'] = 'SMTP portti';
$txt['smtp_username'] = 'SMTP tunnus';
$txt['smtp_password'] = 'SMTP salasana';
$txt['enableReportPM'] = 'Anna raportoida yksityisviesteist&#228; yll&#228;pidolle';
$txt['max_pm_recipients'] = 'Maksimim&#228;&#228;r&#228; vastaanottajia yksityisviesteiss&#228;.<div class="smalltext">(0 ei rajaa. Ei koske yll&#228;pit&#228;ji&#228;)</div>';
$txt['pm_posts_verification'] = 'Viestim&#228;&#228;r&#228; joka j&#228;senen t&#228;ytyy saavuttaa jotta h&#228;nen ei tarvitsee sy&#246;tt&#228;&#228; varmistuskoodia l&#228;hett&#228;ess&#228;&#228;n yksityisviestej&#228;.<div class="smalltext">(0 ei rajaa, ei koske yll&#228;pit&#228;ji&#228;)</div>';
$txt['pm_posts_per_hour'] = 'Yksityisviestien maksimim&#228;&#228;r&#228; tuntia kohden.<div class="smalltext">(0 ei rajaa, ei koske moderaattoreita)</div>';

$txt['mods_cat_layout'] = 'Ulkoasu';
$txt['compactTopicPagesEnable'] = 'N&#228;yt&#228;  sivujen tiivistys';
$txt['smf235'] = 'Miten sivut n&#228;ytet&#228;&#228;n:';
$txt['smf236'] = 'n&#228;kyy';
$txt['todayMod'] = 'N&#228;yt&#228; t&#228;n&#228;&#228;n asetus';
$txt['smf290'] = 'Estetty';
$txt['smf291'] = 'Vain t&#228;n&#228;&#228;n';
$txt['smf292'] = 'T&#228;n&#228;&#228;n & eilen';
$txt['topbottomEnable'] = 'N&#228;yt&#228;  yl&#246;s/alas painikkeet';
$txt['onlineEnable'] = 'N&#228;yt&#228;  paikalla/poissa viesteiss&#228;';
$txt['enableVBStyleLogin'] = 'N&#228;yt&#228; VB-tyylinen kirjautumislomake';
$txt['defaultMaxMembers'] = 'J&#228;seni&#228; sivua kohden j&#228;senlistassa';
$txt['timeLoadPageEnable'] = 'N&#228;yt&#228; sivun tekemiseen k&#228;ytetty aika jokaisella sivulla';
$txt['disableHostnameLookup'] = 'Est&#228; palvelinnimien haku';
$txt['who_enabled'] = 'N&#228;yt&#228; toiminto mit&#228; keskustelualueella tapahtuu';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Karman muoto';
$txt['smf64'] = 'Est&#228;  Karma|Salli Karma Totaali|Salli Karma Positiivinen/Negatiivinen';
$txt['karmaMinPosts'] = 'M&#228;&#228;rit&#228; minimi viestien m&#228;&#228;r&#228; karman muokkaukselle';
$txt['karmaWaitTime'] = 'Aseta odotusaika tunneissa';
$txt['karmaTimeRestrictAdmins'] = 'Aseta aikarajoitus my&#246;s yll&#228;pit&#228;jille';
$txt['karmaLabel'] = 'Karman nimi';
$txt['karmaApplaudLabel'] = 'Positiivinen Karma';
$txt['karmaSmiteLabel'] = 'Negatiivinen Karma';

$txt['caching_information'] = '<div align="center"><b><u>T&#228;rke&#228;&#228;!! Lue t&#228;m&#228; ennenkuin k&#228;yt&#228;t t&#228;t&#228; toimintoa.</b></u></div><br />
	SMF tukee v&#228;limuistin k&#228;ytt&#246;&#228; esilataajien avulla. Tuetut esilataajat ovat:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Ei Zend Optimizer)</li>
	</ul>
	V&#228;limuistin k&#228;ytt&#246; on mahdollista vain jos serverisi PHP on asetettu toimimaan jonkun edell&#228;mainitun esilataajan kanssa, tai memcache
	on saatavilla. <br /><br />
	SMF k&#228;ytt&#228;&#228; v&#228;limuistia eri tasoilla. Mit&#228; korkeampi taso on, sen enemm&#228;n se vie suorittimen resursseja hakiessaan v&#228;limuistista tietoa. Jos v&#228;limuisti toimii serverill&#228;si, on suositeltavaa kokeilla sit&#228; ensin tasoilla 1.
	<br /><br />
	Huomio ett&#228; jos k&#228;yt&#228;t v&#228;limuistia, sinun tulee k&#228;ytt&#228;&#228; seuraavia asetuksia serverill&#228;si. Asetukset sy&#246;tet&#228;&#228;n pilkulla erotettuina listassa alla olevan esimerkin mukaisesti:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Huomio jos porttia ei ole valittu, SMF k&#228;ytt&#228;&#228; porttia 11211. SMF suorittaa my&#246;s satunnaisesti kuorman tasausta servereill&#228;si.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF ei l&#246;yt&#228;nyt sopivaa esilataajaa serverilt&#228;si.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF tunnisti ett&#228; serverillesi on asennettu APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF tunnisti ett&#228; serverillesi on asennettu eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">SMF tunnisti ett&#228; serverillesi on asennettus MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF tunnisti ett&#228; serverillesi on asennettu Zend.';
$txt['detected_Memcached'] = '<b style="color: green">SMF tunnisti että palvelimelle on asennettu Memcached.
';

$txt['cache_enable'] = 'V&#228;limuistin taso';
$txt['cache_off'] = 'Ei k&#228;yt&#246;ss&#228;';
$txt['cache_level1'] = 'Taso 1';
$txt['cache_level2'] = 'Taso 2 (Ei suositeltava)';
$txt['cache_level3'] = 'Taso 3 (Ei suositeltava)';
$txt['cache_memcached'] = 'V&#228;limuistin asetukset';

?>