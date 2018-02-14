<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'sq_AL.utf8';
$txt['lang_dictionary'] = 'en';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('E Djele', 'E Hene', 'E Marte', 'E Merkure', 'E Enjte', 'E Premte', 'E Shtune');
$txt['days_short'] = array('Djl', 'Hen', 'Mart', 'Merk', 'Enj', 'Prem', 'Sht');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Janar', 'Shkurt', 'Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nentor', 'Dhjetor');
$txt['months_titles'] = array(1 => 'Janar', 'Shkurt', 'Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nentor', 'Dhjetor');
$txt['months_short'] = array(1 => 'Jan', 'Shkr', 'Mars', 'Pri', 'Maj', 'Qesh', 'Korr', 'Gush', 'Sht', 'Tet', 'Nent', 'Dhj');

$txt['newmessages0'] = 'eshte i ri';
$txt['newmessages1'] = 'te reja';
$txt['newmessages3'] = 'I ri';
$txt['newmessages4'] = ',';

$txt[2] = 'Admin';

$txt[10] = 'Ruaj';

$txt[17] = 'Ndrysho';
$txt[18] = $context['forum_name'] . ' - Indeksi';
$txt[19] = 'Anetare';
$txt[20] = 'Kategorite dhe Rubrikat';
$txt[21] = 'Postsime';
$txt[22] = 'Postimi i fundit:';

$txt[24] = '(Pa titull)';
$txt[26] = 'Postime';
$txt[27] = 'Shiko Profilin';
$txt[28] = 'Vizitor';
$txt[29] = 'Autor';
$txt[30] = '';
$txt[31] = 'Leviz';
$txt[33] = 'Hap teme te re';

$txt[34] = 'Identifkohuni';
// Use numeric entities in the below string.
$txt[35] = 'Emri';
$txt[36] = 'Fjalekalimi';

$txt[40] = 'Ky emer nuk ekziston.';

$txt[62] = 'Moderator';
$txt[63] = 'Fshijeni temen';
$txt[64] = 'Tema';
$txt[66] = 'Ndrysho postimin';
$txt[68] = 'Emer';
$txt[69] = 'Email';
$txt[70] = 'Titulli';
$txt[72] = 'Postimi';

$txt[79] = 'Ndrysho Profilin';

$txt[81] = 'Fjalekalimi juaj';
$txt[82] = 'Verifiko fjalekalimin';
$txt[87] = 'Pozicioni';

$txt[92] = 'Shikoni profilin e';
$txt[94] = 'Numri total i';
$txt[95] = 'Postime';
$txt[96] = 'Faqja Personale';
$txt[97] = 'Regjistrohuni';

$txt[101] = 'Indeksi I Postimeve';
$txt[102] = 'Njoftime';
$txt[103] = 'Takime Forum';

$txt[104] = 'Mbyll/Hap Temen';
$txt[105] = 'Posto';
$txt[106] = 'Nje Gabim Eshte Krijuar!';
$txt[107] = 'ne';
$txt[108] = 'Dalja';
$txt[109] = 'Nisur nga';
$txt[110] = 'Pergjigje';
$txt[111] = 'Postimi i fundit';
$txt[114] = 'Identifikim Administratori';
// Use numeric entities in the below string.
$txt[118] = 'Teme';
$txt[119] = 'Ndihme';
$txt[121] = 'Fshij postimin';
$txt[125] = 'Lajmeroni';
$txt[126] = 'Deshironi nje email lajmerues, nese dikush shkruan ne kete teme?';
// Use numeric entities in the below string.
$txt[130] = "Me respekt nga " . $context['forum_name'] . '';
$txt[131] = 'Lajmerimet per pergjigjet';
$txt[132] = 'Leviz Temen';
$txt[133] = 'Levize ne';
$txt[139] = 'Faqe';
$txt[140] = 'Anetaret aktive ne ' . $modSettings['lastActive'] . ' minutat e shkuara';
$txt[144] = 'Mesazhet Private';
$txt[145] = 'Pergjigju me citim';
$txt[146] = 'Pergjigju';

$txt[151] = 'Asnje mesazh...';
$txt[152] = 'ju keni';
$txt[153] = 'mesazhe';
$txt[154] = 'Fshije kete mesazh';

$txt[158] = 'Anetare Ne Linje';
$txt[159] = 'Mesazhet Private';
$txt[160] = 'Shko te';
$txt[161] = 'shko';
$txt[162] = 'Jeni te sigurte qe doni te fshini kete teme?';
$txt[163] = 'Po';
$txt[164] = 'Jo';

$txt[166] = 'Rezultatet E Kerkimit';
$txt[167] = 'Rezultatet perfundimtare';
$txt[170] = 'Na vjen keq, por nuk u gjet asnje rezultat';
$txt[176] = 'ne';

$txt[182] = 'Kerko';
$txt[190] = 'Te gjitha';

$txt[193] = 'Mbrapa';
$txt[194] = 'Kujto fjalekalimin';
$txt[195] = 'Teme e nisur nga';
$txt[196] = 'Titulli';
$txt[197] = 'Posuar nga';
$txt[200] = 'Lista e tere anetareve.';
$txt[201] = 'Miresevini';
$txt[208] = 'Qendra Administrative';
$txt[211] = 'Ndryshimi I Fundit';
$txt[212] = 'Deshironi te c\'aktivizoni njoftimet te kjo teme?';

$txt[214] = 'Postimet E Fundit';

$txt[227] = 'Vendndodhja';
$txt[231] = 'Gjinia';
$txt[233] = 'Data E Rregjistrimit';

$txt[234] = 'Shiko postimet me te reja ne forum.';
$txt[235] = 'postimi i fundit ne kete teme me';

$txt[238] = 'Mashkull';
$txt[239] = 'Femer';

$txt[240] = 'Karakter i palejuar eshte perdorur ne emrin e perdoruesit.';

$txt['welcome_guest'] = 'Miresevini, <b>' . $txt[28] . '</b>. Ju lutemi <a href="' . $scripturl . '?action=login">identifikohuni</a> ose <a href="' . $scripturl . '?action=register">regjistrohuni</a>.';
$txt['welcome_guest_activate'] = '<br />Mos keni humbur gje <a href="' . $scripturl . '?action=activate">e-mail aktivizimi?</a>';
$txt['hello_member'] = 'Hej,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Miresevini,';
$txt[247] = 'Hej,';
$txt[248] = 'Miresevini,';
$txt[249] = 'Ju lutemi';
$txt[250] = 'Mbrapa';
$txt[251] = 'Ju lutemi zgjidhni nje destinacion';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Posted by';

$txt[287] = 'Smiley';
$txt[288] = 'Angry';
$txt[289] = 'Cheesy';
$txt[290] = 'Laugh';
$txt[291] = 'Sad';
$txt[292] = 'Wink';
$txt[293] = 'Grin';
$txt[294] = 'Shocked';
$txt[295] = 'Cool';
$txt[296] = 'Huh';
$txt[450] = 'Roll Eyes';
$txt[451] = 'Tongue';
$txt[526] = 'Embarrassed';
$txt[527] = 'Lips sealed';
$txt[528] = 'Undecided';
$txt[529] = 'Kiss';
$txt[530] = 'Cry';

$txt[298] = 'Moderator';
$txt[299] = 'Moderatore';

$txt[300] = 'Sheno Temat si te Lexuara per kete Rubrike';
$txt[301] = 'Shikime';
$txt[302] = 'I ri';

$txt[303] = 'Shih tere perdoruesit';
$txt[305] = 'Shih';
$txt[307] = 'Email';

$txt[308] = 'Anetaret E Shikuar';
$txt[309] = 'e';
$txt[310] = 'numri total i anetareve';
$txt[311] = 'ne';
$txt[315] = 'Keni harruar fjalekalimin?';

$txt[317] = 'Data';
// Use numeric entities in the below string.
$txt[318] = 'Nga';
$txt[319] = 'Titulli';
$txt[322] = 'Shiko per mesazhe te reja';
$txt[324] = 'Tek';

$txt[330] = 'Tema';
$txt[331] = 'Anetare';
$txt[332] = 'Lista e Anetareve';
$txt[333] = 'Postimet E Reja';
$txt[334] = 'Asnje Postim I Ri';

$txt['sendtopic_send'] = 'Dergo';

$txt[371] = 'Koha Lokale';
$txt[377] = 'ose';

$txt[398] = 'Na vjen keq, nuk u gjet asnje rezultat';

$txt[418] = 'Njoftime';

$txt[430] = 'Ju jeni perzene nga ky forum!';

$txt[452] = 'Sheno Tere mesazhet si te lexuara';

$txt[454] = 'Teme E Nxehte (Me shume se ' . $modSettings['hotTopicPosts'] . ' pergjigje)';
$txt[455] = 'Shume Teme E Nxehte (Me shume se ' . $modSettings['hotTopicVeryPosts'] . ' pergjigje)';
$txt[456] = 'Teme E Mbyllur';
$txt[457] = 'Teme Normale';
$txt['participation_caption'] = 'Teme ku keni postuar';

$txt[462] = 'SHKO';

$txt[465] = 'Printo';
$txt[467] = 'Profili';
$txt[468] = 'Permbledhja E Temes';
$txt[470] = 'N/A';
$txt[471] = 'mesazh';
$txt[473] = 'Ky emer eshte ne perdorim nga nje anetar tjeter.';

$txt[488] = 'Totali I Anetareve';
$txt[489] = 'Totali I Postimeve';
$txt[490] = 'Totali I Temave';

$txt[497] = 'Minuta i identifikuar';

$txt[507] = 'Rishiko';
$txt[508] = 'Gjithmone i identifikuar';

$txt[511] = 'Identifikuar';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'nga';

$txt[578] = 'ore';
$txt[579] = 'dite';

$txt[581] = ', anetari me i ri.';

$txt[582] = 'Kerko per';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hi.+Jeni+momentalisht+ketu?';
$txt[604] = 'YIM';

$txt[616] = 'Mos haroni, ky forum momentalisht ndodhet ne faze \'Mirembajteje\'.';

$txt[641] = 'Lexuar';
$txt[642] = 'here';

$txt[645] = 'Permbledhja E Forumit';
$txt[656] = 'Anetari me i ri';
$txt[658] = 'Totali I Katigorive';
$txt[659] = 'Postimi I Fundit';

$txt[660] = 'Ju keni marre';
$txt[661] = 'Kliko';
$txt[662] = 'ketu';
$txt[663] = 'per ti pare ato.';

$txt[665] = 'Totali i rubrikave';

$txt[668] = 'Printo Faqen';

$txt[679] = 'Adresa email duhet te jete e vlefshme.';

$txt[683] = 'Booooo: Jam shume i zgjuar!!';
$txt[685] = $context['forum_name'] . ' - Qendra E Statistikave';

$txt[707] = 'Dergo kete teme';

$txt['sendtopic_title'] = 'Dergo kete teme &quot;%s&quot; nje shoku.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Pershendetje %s,';
$txt['sendtopic_this_topic'] = 'Deshiroj ti hedhesh nje sy "%s" ne ' . $context['forum_name'] . '.  Per te pare ate, te lutem kliko ne kete link';
$txt['sendtopic_thanks'] = 'Faleminderit';
$txt['sendtopic_sender_name'] = 'Emri Juaj';
$txt['sendtopic_sender_email'] = 'Emaili Juaj';
$txt['sendtopic_receiver_name'] = 'Emri I Marresit';
$txt['sendtopic_receiver_email'] = 'Emaili I Marresit';
$txt['sendtopic_comment'] = 'Vendos nje koment';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Nje koment u shtua per kete teme';

$txt[721] = 'Deshironi ta fshihni nga publiku adresen tuaj te email-it?';

$txt[737] = 'Shenoi te gjitha';

// Use numeric entities in the below string.
$txt[1001] = 'Gabim Ne Bazen E Te Dhenave';
$txt[1002] = 'Ju lutemi riprovojeni.  Nese ky problem perseritet, ju lutemi raportoni kete gabim ne nje Administrator.';
$txt[1003] = 'Kartele';
$txt[1004] = 'Rresht';
// Use numeric entities in the below string.
$txt[1005] = 'Nje gabim eshte gjetur ne bazen e te dhenave. Skripti do mundohet ta riparoje, por nese shihni qe ky gabim perseritet, atehere jeni te lutur te kontaktoni hostin tuaj.';
$txt['database_error_versions'] = '<b>Shenim:</b> Figuron se baza juaj e te dhenave <em>ndoshta</em> duhet bere upgrade. Versioni aktual i forumit eshte ' . $forum_version . ', kurse bazea e te dhenave ndodhet ne versionin ' . $modSettings['smfVersion'] . '. Gabimi i mesiperm mund te riparohet nqs ju perdorni versionin e fundti te upgrade.php.';
$txt['template_parse_error'] = 'Gabim Ne Profilin E Forumit!';
$txt['template_parse_error_message'] = 'Me sa duket dicka ka vajtur keq me sistemin e profilit te forumit.  Ky problem duhet te jet temporar, keshtu qe ju lutemi ejani me vone dhe riprovojeni serisht.  Nqs ju vazhdoni te shifni kete mesazh, ju lutemi kontaktoni nje Administrator.<br /><br />Gjithashtu mune te provoni te <a href="javascript:location.reload();">rifreskoni kete faqe</a>.';
$txt['template_parse_error_details'] = 'Ka ndodhur nje problem ne ngarkimin e <tt><b>%1$s</b></tt> profilit te forumit ose te gjuhes.  Ju lutemi kontrolloni strukturen gramatike dhe riprovojeni serisht - mos haroni, citimet e veme (<tt>\'</tt>) shpesh her duhet te shpetohen me nje slash (<tt>\\</tt>).  Te shikoni me shume informacione specifike nga PHP, provoni <a href="' . $boardurl . '%1$s">te hyni ne skede direkt</a>.<br /><br />Ndoshta ju duhet te <a href="javascript:location.reload();">rifreskoni kete faqe</a> ose <a href="' . $scripturl . '?theme=1">te perdrorni profilin e paracaktuar te forumit</a>.';

$txt['smf10'] = '<b>Sot</b> ne ';
$txt['smf10b'] = '<b>Dje</b> ne ';
$txt['smf20'] = 'Posto nje sondazh te ri';
$txt['smf21'] = 'Pyetje';
$txt['smf23'] = 'Votoni';
$txt['smf24'] = 'Totali I Votave';
$txt['smf25'] = 'Shtyp alt+s per te postuar shkrimin ose alt+p per ta rishikuar ate';
$txt['smf29'] = 'Shikoni rezultatet';
$txt['smf30'] = 'Mbyll votimin';
$txt['smf30b'] = 'Rihap votimin';
$txt['smf39'] = 'Ndrysho Sondazhin';
$txt['smf43'] = 'Sondazh';
$txt['smf47'] = '1 Dite';
$txt['smf48'] = '1 Jave';
$txt['smf49'] = '1 Muaj';
$txt['smf50'] = 'Gjithmone';
$txt['smf52'] = 'Identifikohuni me emrin, fjalekalimin dhe kohen e identifikimit';
$txt['smf53'] = '1 Ore';
$txt['smf56'] = 'LEVIZUR';
$txt['smf57'] = 'Ju lutemi shkruani nje arsye<br />pse kjo teme po levizet.';
$txt['smf60'] = 'Na vjen keq, nuk keni postime te mjaftueshme te ndryshoni karma - ju duhet te keni te pakten ';
$txt['smf62'] = 'Na vjen keq, nuk mund te riperserisni nje aksion per karma pa pritur ';
$txt['smf82'] = 'Forum';
$txt['smf88'] = 'ne';
$txt['smf96'] = 'Kryeteme';

$txt['smf138'] = 'Fshij';

$txt['smf199'] = 'Mesazhet Tuaja Private';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Me Shume Statistika]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kodi';
$txt['smf239'] = 'Cituar nga';
$txt['smf240'] = 'Citim';

$txt['smf251'] = 'Ndaje Temen';
$txt['smf252'] = 'Bashkoje Temen';
$txt['smf254'] = 'Titull Per Temen E Re';
$txt['smf255'] = 'Nda vetem kete postim.';
$txt['smf256'] = 'Nda temen me pas dhe perfshi kete postim.';
$txt['smf257'] = 'Zgjidh postime per te ndare.';
$txt['smf258'] = 'Teme E Re';
$txt['smf259'] = 'Tema u nda me sukses ne dy tema.';
$txt['smf260'] = 'Origjina E Temes';
$txt['smf261'] = 'Ju lutemi zgjidhni cilat postime doni te ndani.';
$txt['smf264'] = 'Temat u bashkuan me sukses.';
$txt['smf265'] = 'Tema E Re E Bashkuar';
$txt['smf266'] = 'Teme per tu bashkuar';
$txt['smf267'] = 'Zgjidh rubrike';
$txt['smf269'] = 'Zgjidh teme';
$txt['smf274'] = 'Jeni te sigurte qe doni ti bashkoni';
$txt['smf275'] = 'me';
$txt['smf276'] = 'Ky funksion do bashkoje mesazhet nga dy tema ne nje te vetme. Keto mesazhe do renditen sipas kohes qe jane postuar. Si pasoje e kesaj, mesazhet qe jan postuar te parat do jen ne fillim te temes se bashkuar.';

$txt['smf277'] = 'Vendoseni Temen si Kryeteme';
$txt['smf278'] = 'Hiqeni Temen nga Kryeteme';
$txt['smf279'] = 'Kyc Temen';
$txt['smf280'] = 'Rihap Temen';

$txt['smf298'] = 'Kerkim i avancuar:';

$txt['smf299'] = 'RREZIK I MADH SIGURIE:';
$txt['smf300'] = 'Ju nuk keni fshire ';

$txt['smf301'] = 'Faqja u krijua ne ';
$txt['smf302'] = ' sekonda me ';
$txt['smf302b'] = ' veprime.';

$txt['smf315'] = 'Perdorni kete funksion per te lajmeruar stafin per abuzime qe jane bere ne forum.<br /><i>Nqs vendosni te perdorni kete funksion adresa juaj e email do shfaqet te stafi i forumit.</i>';

$txt['online2'] = 'Ne Linje';
$txt['online3'] = 'Jo Ne Linje';
$txt['online4'] = 'Mesazh Privat (Ne linje)';
$txt['online5'] = 'Mesazh Pirvat (Jo Ne Linje)';
$txt['online8'] = 'Statusi';

$txt['topbottom4'] = 'Shko Lart';
$txt['topbottom5'] = 'Shko Poshte';

if ($_SERVER['QUERY_STRING']=='')
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> :: <a href="http://www.siteground.com">Hosting Services for SMF by SiteGround</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}
else
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}


$txt['calendar3'] = 'Ditelindjet:';
$txt['calendar4'] = 'Ngjarjet:';
$txt['calendar3b'] = 'Ditelindjet E Ardhshme:';
$txt['calendar4b'] = 'Ngjarjet E Ardhshme:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Muaj:';
$txt['calendar10'] = 'Vit:';
$txt['calendar11'] = 'Dite:';
$txt['calendar12'] = 'Titulli I Ngjarjes:';
$txt['calendar13'] = 'Posto Ne:';
$txt['calendar20'] = 'Modifiko Ngjarjen';
$txt['calendar21'] = 'Deshironi ta fshini kete ngjarje?';
$txt['calendar22'] = 'Fshije Ngjarjen';
$txt['calendar23'] = 'Posto Ngjarje';
$txt['calendar24'] = 'Calendari';
$txt['calendar37'] = 'Link per te Kalendari';
$txt['calendar43'] = 'Link per te Ngjarja';
$txt['calendar47'] = 'Kalendari I Ardhshem';
$txt['calendar47b'] = 'Kalendari I Sotem';
$txt['calendar51'] = 'Jave';
$txt['calendar54'] = 'Numri i Diteve:';
$txt['calendar_how_edit'] = 'si modifikohen keto ngjarje?';
$txt['calendar_link_event'] = 'Vendos Linkun E Ngjarjes Ne Postim:';
$txt['calendar_confirm_delete'] = 'Jeni te sigurte qe doni ta fshini kete ngjarje?';
$txt['calendar_linked_events'] = 'Ngjarjet E Linkuara';

$txt['moveTopic1'] = 'Posto nje teme ridrejtuese';
$txt['moveTopic2'] = 'Ndrysho titullin e temes';
$txt['moveTopic3'] = 'Titull i ri';
$txt['moveTopic4'] = 'Ndrysho dhe titujt e postimeve te tjera';

$txt['theme_template_error'] = 'E pamundur te ngarkohet \'%s\' profili i forumit.';
$txt['theme_language_error'] = 'E pamundur te ngarkohet \'%s\' gjuha e forumit.';

$txt['parent_boards'] = 'NENFORUME';

$txt['smtp_no_connect'] = 'Nuk mund te lidhet ne hostin SMTP';
$txt['smtp_port_ssl'] = 'Vendosja e portes per SMTP eshte e gabuar; duhet te jet 465 per servera SSL.';
$txt['smtp_bad_response'] = 'E pamundur te mari nga serveri mail kodet e pergjigjes';
$txt['smtp_error'] = 'Hasi probleme duke derguar Mail. Gabim: ';
$txt['mail_send_unable'] = 'E pamundur te dergohet mail ne adresen e email-it \'%s\'';

$txt['mlist_search'] = 'Kerko per anetare';
$txt['mlist_search2'] = 'Kerko perseri';
$txt['mlist_search_email'] = 'Kerko ne baze te adrese se email-it';
$txt['mlist_search_messenger'] = 'Kerko sipas nofkes ne messenger';
$txt['mlist_search_group'] = 'Kerko sipas pozicionit';
$txt['mlist_search_name'] = 'Kerko sipas emrit';
$txt['mlist_search_website'] = 'Kerko sipas faqes se internetit';
$txt['mlist_search_results'] = 'Rezultatet e kerkimit per';

$txt['attach_downloaded'] = 'shkarkuar';
$txt['attach_viewed'] = 'shikuar';
$txt['attach_times'] = 'here';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Mundesite';
$txt['never'] = 'Kurre';
$txt['more'] = 'me shume';

$txt['hostname'] = 'Hostuesi';
$txt['you_are_post_banned'] = 'Na vjen keq %s, ju eshte hequr e drejta te postoni ose te dergoni mesazhe private ne kete forum.';
$txt['ban_reason'] = 'Arsyeja';

$txt['tables_optimized'] = 'Tabelat e bazes se te dhenave u optimizuan';

$txt['add_poll'] = 'Hap Sondazh';
$txt['poll_options6'] = 'Mund te zgjidhni vetem deri ne %s opsione.';
$txt['poll_remove'] = 'Hiq Sontazhin';
$txt['poll_remove_warn'] = 'Jeni te sigurte qe do ta hiqni kete sondazh nga kjo teme?';
$txt['poll_results_expire'] = 'Rezultatet do duken kur te jete mbyllur sondazhi';
$txt['poll_expires_on'] = 'Votimi Mbyllet';
$txt['poll_expired_on'] = 'Votimi Mbyllet';
$txt['poll_change_vote'] = 'Hiq Votim';
$txt['poll_return_vote'] = 'Opsione Votimi';

$txt['quick_mod_remove'] = 'Fshij te zgjedhurat';
$txt['quick_mod_lock'] = 'Mbyll te zgjedhurat';
$txt['quick_mod_sticky'] = 'Bej kryetema te zgjedhurat';
$txt['quick_mod_move'] = 'Leviz te zgjedhurat ne';
$txt['quick_mod_merge'] = 'Bashko te zgjedhurat';
$txt['quick_mod_markread'] = 'Sheno te zgjehdurat si te lexuara';
$txt['quick_mod_go'] = 'Shko!';
$txt['quickmod_confirm'] = 'Jeni te sigurte per kete veprim?';

$txt['spell_check'] = 'Kontrollo Germezimin';

$txt['quick_reply_1'] = 'Pergjigje E Shpejte';
$txt['quick_reply_2'] = 'Me opsionin <i>Pergjigje E Shpejte</i> mund te perdorni te gjitha kodet dhe ikonat si ne nje postim normal, mjafton ti mbani mend si jane ato :)';
$txt['quick_reply_warning'] = 'Lajmerim: Kjo teme momentalisht eshte e mbyllur!<br />Vetem Administatoret dhe Moderatoret mund te pergjigjen.';

$txt['notification_enable_board'] = 'Jeni te sigurte se doni te merrni njoftime per temat e reja te kesaj rubrike?';
$txt['notification_disable_board'] = 'Jeni te sigurte se doni te hiqni njoftimet per tema te reja ne kete rubrike?';
$txt['notification_enable_topic'] = 'Jeni te sigurte se doni te merrni njoftime per postimet e reja ne kete teme?';
$txt['notification_disable_topic'] = 'Jeni te sigurte se nuk deshironi te merrni njoftime per postimet e reja ne kete teme?';

$txt['rtm1'] = 'Raporto Te Moderatori';

$txt['unread_topics_visit'] = 'Temat E Reja Te Palexuara';
$txt['unread_topics_visit_none'] = 'Nuk u gjend asnje teme e palexuar qe nga vizita juaj e fundit.  <a href="' . $scripturl . '?action=unread;all">Kliko kete per te provuar te shikosh te gjitha temat e palexuara</a>.';
$txt['unread_topics_all'] = 'Te Gjitha Temat E Palexuara';
$txt['unread_replies'] = 'Temat E Azhornuara';

$txt['who_title'] = 'Kush Ndodhet Ne Linje';
$txt['who_and'] = ' dhe ';
$txt['who_viewing_topic'] = ' po shikojne kete teme.';
$txt['who_viewing_board'] = ' po shikojne kete rubrike.';
$txt['who_member'] = 'Anetar';

$txt['powered_by_php'] = 'Mundesuar nga PHP';
$txt['powered_by_mysql'] = 'Mundeshuar nga MySQL';
$txt['valid_html'] = 'HTML 4.01!';
$txt['valid_xhtml'] = 'XHTML 1.0!';
$txt['valid_css'] = 'CSS!';

$txt['guest'] = 'Vizitor';
$txt['guests'] = 'Vizitore';
$txt['user'] = 'Anetar';
$txt['users'] = 'Anetare';
$txt['hidden'] = 'Padukshem';
$txt['buddy'] = 'Mik';
$txt['buddies'] = 'Miq';
$txt['most_online_ever'] = 'Most Online Ever';
$txt['most_online_today'] = 'Most Online Today';

$txt['merge_select_target_board'] = 'Zgjidh temen ku do bashkangjitesh';
$txt['merge_select_poll'] = 'Zgjidh cilin sondazh duhet te kete tema qe po bashkangjitet';
$txt['merge_topic_list'] = 'Zgjidh temat qe do bashkangjiten';
$txt['merge_select_subject'] = 'Zgjidh titullin e temes se bashkangjitur';
$txt['merge_custom_subject'] = 'Titull i ri';
$txt['merge_enforce_subject'] = 'Ndrsho titullin e te gjitha postimeve';
$txt['merge_include_notifications'] = 'Perfshire njoftimet?';
$txt['merge_check'] = 'Bashkangjit?';
$txt['merge_no_poll'] = 'Asnje sondazh';

$txt['response_prefix'] = '';
$txt['current_icon'] = 'Ikona E Tanishme';

$txt['smileys_current'] = 'Ikonat Aktuale';
$txt['smileys_none'] = 'Asnje Ikone';
$txt['smileys_forum_board_default'] = 'Paracaktuar Nga Forumi';

$txt['search_results'] = 'Rezultatet E Kerkimit';
$txt['search_no_results'] = 'Kerkimi nuk dha rezultate';

$txt['totalTimeLogged1'] = 'Koha totale e identifikimit: ';
$txt['totalTimeLogged2'] = ' dite, ';
$txt['totalTimeLogged3'] = ' ore dhe ';
$txt['totalTimeLogged4'] = ' minuta.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'o ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Eshte';
$txt['approve_thereare'] = 'Jane';
$txt['approve_member'] = 'nje anetar';
$txt['approve_members'] = 'anetare';
$txt['approve_members_waiting'] = 'ne pritje te aprovimit.';

$txt['notifyboard_turnon'] = 'Deshironi njoftime me email kur dikush poston ne kete rubrike?';
$txt['notifyboard_turnoff'] = 'Jeni te sigurte se nuk deshironi me njoftime kur dikush shkruan ne kete rubrike?';

$txt['activate_code'] = 'Kodi juaj i aktivizimit eshte';

$txt['find_members'] = 'Gjej Anetare';
$txt['find_username'] = 'Emer, emer perdoruesi, ose email';
$txt['find_buddies'] = 'Trego Vetem Miqte?';
$txt['find_wildcards'] = 'Shenjat E Lejuara: *, ?';
$txt['find_no_results'] = 'Asnje rezulatat';
$txt['find_results'] = 'Rezultate';
$txt['find_close'] = 'Mbylle';

$txt['unread_since_visit'] = 'Shiko postimet e palexuara qe nga vizita juaj e fundit ne forum.';
$txt['show_unread_replies'] = 'Shiko pergjigjet qe jane dhene ne temat ku ju keni postuar.';

$txt['change_color'] = 'Ndrysho Ngjyren';

$txt['quickmod_delete_selected'] = 'Fshij Te Zgjedhurat';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Ju keni mare nje ose me shume mesazhe private.\\nDeshironi ti shikoni tani (me nje dritare te re)?';

$txt['previous_next_back'] = '&laquo; meparshmi';
$txt['previous_next_forward'] = 'tjetri &raquo;';

$txt['movetopic_auto_board'] = '[RUBRIKA]';
$txt['movetopic_auto_topic'] = '[LINKU I TEMES]';
$txt['movetopic_default'] = 'Kjo teme eshte levizur ne ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Mblidh Ose Zmadho Titullin.';

$txt['mark_unread'] = 'Sheno Te Palexuarat';

$txt['ssi_not_direct'] = 'Ju lutemi mos nderhyni ne SSI.php direkt ndermjet linkut URL; Ju duhet te zgjidhni rrugen e automatizuar (%s) ose shto ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php nuk pati mundesi te ngarkoj seancen!  Kjo mund te shkaktoj probleme me daljen nga forumi ose probleme te tjera - ju lutemi sigurohuni qe SSI.php eshte e perfshire para *c\'do gjeje* tjeter ne te gjitha skriptet tuaja!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Rishiko postimin';
$txt['preview_fetch'] = 'Duke sjelle per rishikim...';
$txt['preview_new'] = 'Mesazh i ri';
$txt['error_while_submitting'] = 'Ky gabim ose keto gabime ndodhen gjate kohes qe ju postonit kete mesazh:';

$txt['split_selected_posts'] = 'Temat e zgjedhura';
$txt['split_selected_posts_desc'] = 'Temat e meposhtme do formojne nje teme te re pas ndarjes.';
$txt['split_reset_selection'] = 'rikthe zgjedhjet';

$txt['modify_cancel'] = 'Cancel';
$txt['mark_read_short'] = 'Mark Read';

$txt['pm_short'] = 'My Messages';
$txt['hello_member_ndt'] = 'Hello';

$txt['ajax_in_progress'] = 'Loading...';

?>