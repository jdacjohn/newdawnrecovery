<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Denna sida l&aring;ter dig &auml;ndra inst&auml;llningar f&ouml;r funktioner, modifikationer och allm&auml;nna valm&ouml;jligheter i ditt forum. V&auml;nligen se <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">temainst&auml;llningarna</a> f&ouml;r fler valm&ouml;jligheter. Klicka p&aring; hj&auml;lpikonerna f&ouml;r mer information om en inst&auml;llning.';

$txt['mods_cat_features'] = 'Grundl&auml;ggande forumfunktioner';
$txt['pollMode'] = 'Omr&ouml;stningsl&auml;ge';
$txt['smf34'] = 'Inaktivera omr&ouml;stningar';
$txt['smf32'] = 'Aktivera omr&ouml;stningar';
$txt['smf33'] = 'Visa befintliga omr&ouml;stningar som vanliga &auml;mnen';
$txt['allow_guestAccess'] = 'Till&aring;t g&auml;ster att bes&ouml;ka forumet';
$txt['userLanguage'] = 'Aktivera m&ouml;jlighet f&ouml;r medlemmar att v&auml;lja spr&aring;k';
$txt['allow_editDisplayName'] = 'Till&aring;t medlemmar att &auml;ndra sina visade namn';
$txt['allow_hideOnline'] = 'Till&aring;t icke-administrat&ouml;rer att d&ouml;lja om de &auml;r online';
$txt['allow_hideEmail'] = 'Till&aring;t medlemmar att d&ouml;lja sin e-postadress fr&aring;n alla utom administrat&ouml;rer?';
$txt['guest_hideContacts'] = 'Visa inte kontaktinformation om medlemmar f&ouml;r g&auml;ster';
$txt['titlesEnable'] = 'Aktivera egna titlar';
$txt['enable_buddylist'] = 'Aktivera kompis-listor';
$txt['default_personalText'] = 'Standardtext f&ouml;r anv&auml;ndares personliga text';
$txt['max_signatureLength'] = 'Max antal till&aring;tna tecken i signaturer<div class="smalltext">(0 f&ouml;r ingen begr&auml;nsning)</div>';
$txt['number_format'] = 'Standardformat f&ouml;r tal';
$txt['time_format'] = 'Standardformat f&ouml;r datum/tid';
$txt['time_offset'] = 'Allm&auml;n tidsf&ouml;rskjutning gentemot serverns klocka<div class="smalltext">(l&auml;ggs till respektive medlems tidsf&ouml;rskjutning)</div>';
$txt['failed_login_threshold'] = 'Antal f&ouml;rs&ouml;k anv&auml;ndaren f&aring;r att logga in';
$txt['lastActive'] = 'I hur m&aring;nga minuter r&auml;knas anv&auml;ndare som aktiva';
$txt['trackStats'] = 'Lagra daglig statistik';
$txt['hitStats'] = 'Lagra antal dagliga sidvisningar (kr&auml;ver att statistik ocks&aring; &auml;r p&aring;slaget)';
$txt['enableCompressedOutput'] = 'Aktivera komprimerad utdata';
$txt['databaseSession_enable'] = 'Anv&auml;nd databasstyrda sessioner';
$txt['databaseSession_loose'] = 'Till&aring;t webbl&auml;sare att g&aring; tillbaka till cachade sidor';
$txt['databaseSession_lifetime'] = 'Antal sekunder innan en oanv&auml;nd session st&auml;ngs';
$txt['enableErrorLogging'] = 'Aktivera felloggning';
$txt['cookieTime'] = 'Standardtid att f&ouml;rbli inloggad (i minuter)';
$txt['localCookies'] = 'Aktivera lokal lagring av cookies<div class="smalltext">(SSI fungerar inte bra med detta p&aring;slaget)</div>';
$txt['globalCookies'] = 'Anv&auml;nd cookies oberoende av underdom&auml;ner<div class="smalltext">(st&auml;ng av lokal lagring av cookies f&ouml;rst!)</div>';
$txt['securityDisable'] = 'St&auml;ng av administrationss&auml;kerhet';
$txt['send_validation_onChange'] = 'Kräv omaktivering om anv&auml;ndaren byter e-postadress';
$txt['approveAccountDeletion'] = 'Kräv godkännande av administratör när medlemmar raderar sina konton';
$txt['autoOptDatabase'] = 'Optimera tabeller med hur m&aring;nga dagars mellanrum?<div class="smalltext">(0 f&ouml;r att st&auml;nga av)</div>';
$txt['autoOptMaxOnline'] = 'Max antal anv&auml;ndare online f&ouml;r att p&aring;b&ouml;rja optimering<div class="smalltext">(0 f&ouml;r ingen maxgr&auml;ns)</div>';
$txt['autoFixDatabase'] = 'Reparera automatiskt korrupta tabeller';
$txt['allow_disableAnnounce'] = 'Till&aring;t anv&auml;ndare att st&auml;nga av underr&auml;ttelse av tillk&auml;nnagivanden';
$txt['disallow_sendBody'] = 'Till&aring;t inte utskick av br&ouml;dtext i underr&auml;ttelser?';
$txt['modlog_enabled'] = 'Logga moderatorers &aring;tg&auml;rder';
$txt['queryless_urls'] = 'Anv&auml;nd s&ouml;kmotorv&auml;nliga URL:er<div class="smalltext"><b>endast f&ouml;r Apache-servrar!</b></div>';
$txt['max_image_width'] = 'Maxbredd f&ouml;r postade bilder (0 = ingen gr&auml;ns)';
$txt['max_image_height'] = 'Maxh&ouml;jd f&ouml;r postade bilder (0 = ingen gr&auml;ns)';
$txt['mail_type'] = 'Metod för e-postutskick';
$txt['mail_type_default'] = '(PHP:s standard)';
$txt['smtp_host'] = 'SMTP-server';
$txt['smtp_port'] = 'SMTP-port';
$txt['smtp_username'] = 'Anv&auml;ndarnamn f&ouml;r SMTP';
$txt['smtp_password'] = 'L&ouml;senord f&ouml;r SMTP';
$txt['enableReportPM'] = 'Aktivera anmälning av privata meddelanden';
$txt['max_pm_recipients'] = 'Max antal personer som varje privat meddelande f&aring;r skickas till.<div class="smalltext">(0 f&ouml;r ingen gr&auml;ns, administrat&ouml;rer &auml;r undantagna fr&aring;n begränsningen)</div>';
$txt['pm_posts_verification'] = 'Medlemmar med färre än detta antal inlägg måste ange bokstavskod när de skickar privata meddelanden.<div class="smalltext">(0 för ingen gräns, administratörer är undantagna från begränsningen)</div>';
$txt['pm_posts_per_hour'] = 'Maximalt antal privata meddelanden som medlemmar kan skicka per timme.<div class="smalltext">(0 för ingen gräns, moderatorer och administratörer är undantagna från begränsningen)</div>';

$txt['mods_cat_layout'] = 'Layout och utseendem&auml;ssiga tillval';
$txt['compactTopicPagesEnable'] = 'Begr&auml;nsa antal sidnummer som visas';
$txt['smf235'] = 'Antal sidor i f&ouml;ljd att visa:';
$txt['smf236'] = 'f&ouml;r att visa';
$txt['todayMod'] = 'Aktivera &quot;Idag&quot;-funktion';
$txt['smf290'] = 'Inaktiverat';
$txt['smf291'] = 'Endast idag';
$txt['smf292'] = 'Idag &amp; ig&aring;r';
$txt['topbottomEnable'] = 'Aktivera G&aring; upp/ned-knappar';
$txt['onlineEnable'] = 'Visa om anv&auml;ndare &auml;r online i inl&auml;gg och privata meddelanden';
$txt['enableVBStyleLogin'] = 'Visa snabbinloggning p&aring; alla sidor';
$txt['defaultMaxMembers'] = 'Antal personer per sida i medlemslistor';
$txt['timeLoadPageEnable'] = 'Visa hur l&aring;ng tid det tagit att skapa varje sida';
$txt['disableHostnameLookup'] = 'St&auml;ng av lookup av servernamn?';
$txt['who_enabled'] = 'Aktivera lista p&aring; vilka som &auml;r online';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Karma-l&auml;ge';
$txt['smf64'] = 'Inaktivera karma|Aktivera total karma|Aktivera positiv/negativ karma';
$txt['karmaMinPosts'] = 'Minsta antalet inl&auml;gg f&ouml;r att kunna &auml;ndra karma';
$txt['karmaWaitTime'] = 'V&auml;ntetid i timmar';
$txt['karmaTimeRestrictAdmins'] = 'Tvinga &auml;ven administrat&ouml;rer till v&auml;ntetiden';
$txt['karmaLabel'] = 'Karma-rubrik';
$txt['karmaApplaudLabel'] = 'Rubrik f&ouml;r att f&ouml;rb&auml;ttra karma';
$txt['karmaSmiteLabel'] = 'Rubrik f&ouml;r att f&ouml;rs&auml;mra karma';

$txt['caching_information'] = '<div align="center"><b><u>Viktigt! L&auml;s detta innan du aktiverar dessa funktioner.</b></u></div><br />
        SMF st&ouml;djer cachning (lokal mellanlagring) genom anv&auml;ndning av s.k. acceleratorer. De acceleratorer som
        f&ouml;r n&auml;rvarande st&ouml;ds &auml;r:<br />
        <ul>
                <li>APC</li>
                <li>eAccelerator</li>
                <li>Turck MMCache</li>
                <li>Memcached</li>
                <li>Zend Platform/Performance Suite (Inte Zend Optimizer)</li>
        </ul>
        Cachning kommer bara att fungera p&aring; servern, om du har PHP kompilerad med en av ovanst&aring;ende optimerare, eller
        om du har memcache tillg&auml;nglig<br /><br />
        SMF utf&ouml;r cachning p&aring; flera olika niv&aring;er. Ju h&ouml;gre niv&aring;, desto mer processorkraft beh&ouml;vs f&ouml;r att &aring;terh&auml;mta
        den mellanlagrade informationen. Om cachning finns tillg&auml;nglig f&ouml;r dig, rekommenderar vi att du f&ouml;rs&ouml;ker niv&aring;
        1 f&ouml;rst<br /><br />
        Observera att om du anv&auml;nder memcached, kommer du att beh&ouml;va ange detaljer om servern nedan. Detta ska anges
        i form av en kommaseparerad lista, enligt exemplet nedan:<br />
        &quot;server1,server2,server3:port,server4&quot;<br /><br />
        Observera att om ingen port har angetts, kommer SMF att anv&auml;nda port 11211. SMF kommer att f&ouml;rs&ouml;ka balansera trafiken j&auml;mnt eller slumpvis mellan de angivna servrarna.<br /><br />
        %s
        <hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF har inte lyckats att k&auml;nna av att n&aring;gon kompatibel accelerator finns p&aring; din server.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF has k&auml;nt av att din server har APC installerad.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF has k&auml;nt av att din server har eAccelerator nstallerad.';
$txt['detected_MMCache'] = '<b style="color: green">SMF has k&auml;nt av att din server har MMCache nstallerad.';
$txt['detected_Zend'] = '<b style="color: green">SMF has k&auml;nt av att din server har Zend nstallerad.';
$txt['detected_Memcached'] = '<b style="color: green">SMF har upptäckt att din server har memcached installerat.';

$txt['cache_enable'] = 'Cachingsniv&aring;';
$txt['cache_off'] = 'Ingen cachning';
$txt['cache_level1'] = 'Niv&aring; 1 cachning';
$txt['cache_level2'] = 'Niv&aring; 2 cachning (Inte rekommenderat)';
$txt['cache_level3'] = 'Niv&aring; 3 cachning (Inte rekommenderat)';
$txt['cache_memcached'] = 'Inst&auml;llningar f&ouml;r memcache';

?>