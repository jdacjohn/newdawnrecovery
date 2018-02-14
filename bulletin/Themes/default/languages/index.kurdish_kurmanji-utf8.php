<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'ku_TR.utf8';
$txt['lang_dictionary'] = 'ku';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Yekşem', 'Duşem', 'Sêşem', 'Çarşem', 'Pêncşem', 'Înî', 'Şemî');
$txt['days_short'] = array('Yek', 'Duş', 'Sêş', 'Çrş', 'Pênc', 'În', 'Şem');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Çile', 'Sibat', 'Adar', 'Nîsan', 'Gulan', 'Hezîran', 'Tîrmeh', 'Tebax', 'Îlon', 'Cotmeh', 'Mijdar', 'Kanûn');
$txt['months_titles'] = array(1 => 'Çile', 'Sibat', 'Adar', 'Nîsan', 'Gulan', 'Hezîran', 'Tîrmeh', 'Tebax', 'Îlon', 'Cotmeh', 'Mijdar', 'Kanûn');
$txt['months_short'] = array(1 => 'Çil', 'Sib', 'Adr', 'Nîs', 'Gul', 'Hez', 'Tîr', 'Teb', 'Îlon', 'Cot', 'Mij', 'Kan');

$txt['newmessages0'] = 'heb nû';
$txt['newmessages1'] = 'heb jê nû';
$txt['newmessages3'] = 'Nû';
$txt['newmessages4'] = ',';

$txt[2] = 'Rêvebir';

$txt[10] = 'Tomar Bike';

$txt[17] = 'Biguherîne';
$txt[18] = $context['forum_name'];
$txt[19] = 'Endam';
$txt[20] = 'Navê Forumê';
$txt[21] = 'Peyam';
$txt[22] = 'Peyama Dawîn';

$txt[24] = '(Mijar Tune)';
$txt[26] = 'Hejmara Peyaman';
$txt[27] = 'Agahiyên Endamiyê';
$txt[28] = 'Mêvan';
$txt[29] = 'Yê Şandî';
$txt[30] = '';
$txt[31] = 'Jê Bibe';
$txt[33] = 'Mijarek Nû Veke';

$txt[34] = 'Têkeve';
// Use numeric entities in the below string.
$txt[35] = 'Navê Bikarhêner';
$txt[36] = 'Şîfre';

$txt[40] = 'Navê Bikarhêner Nehat Dîtin.';

$txt[62] = 'Moderatorê Beşê';
$txt[63] = 'Mijarê Jê Bibe';
$txt[64] = 'Mijar';
$txt[66] = 'Peyamê Biguherîne';
$txt[68] = 'Nav';
$txt[69] = 'E-Peyam';
$txt[70] = 'Sernavê Mijarê';
$txt[72] = 'Peyam';

$txt[79] = 'Profîl';

$txt[81] = 'Şîfreyek Hilbijêrin';
$txt[82] = 'Şîfreyê Dubare Bikin';
$txt[87] = 'Asta Endamtiyê';

$txt[92] = 'Agahiyên profîlê';
$txt[94] = 'Giştî';
$txt[95] = 'Peyam';
$txt[96] = 'Malpera Înternetê';
$txt[97] = 'Bibe Endam';

$txt[101] = 'Lîsteya Peyaman';
$txt[102] = 'Daxuyanî';
$txt[103] = 'Malper';

$txt[104] = 'Mijarê asê bike/veke';
$txt[105] = 'Bişîne';
$txt[106] = 'Çewtiyek Çêbû!';
$txt[107] = '\'de';
$txt[108] = 'Derketin';
$txt[109] = 'Kê Destpê Kir';
$txt[110] = 'Bersiv';
$txt[111] = 'Peyama Dawîn';
$txt[114] = 'Têketina Rêvebir';
// Use numeric entities in the below string.
$txt[118] = 'Mijar';
$txt[119] = 'Alîkarî';
$txt[121] = 'Peyamê jê bibe';
$txt[125] = 'Min jê agahdar bike';
$txt[126] = 'Dema ji vê mijarê re peyam hat şandin bila bi e-peyamek agahî bê dayîn';
// Use numeric entities in the below string.
$txt[130] = "Zor Spas,\nKoma " . $context['forum_name'] . ' ';
$txt[131] = 'Ji bersivan agahdar bike';
$txt[132] = 'Mijarê veguheze';
$txt[133] = 'Veguheze vir';
$txt[139] = 'Rûpel';
$txt[140] = 'Endamên di nava ' . $modSettings['lastActive'] . ' deqeyan de bûne aktîf';
$txt[144] = 'Peyamên Taybet';
$txt[145] = 'Jê wergire û bersiv bide';
$txt[146] = 'Bersiv bide';

$txt[151] = 'Peyam Tune...';
$txt[152] = 'Aîdê We';
$txt[153] = 'Peyam Heye';
$txt[154] = 'Vê peyamê jê bibe';

$txt[158] = 'Endamên Girêdayî';
$txt[159] = 'Peyama Taybet';
$txt[160] = 'Cihê ku hûn dixwazin herin';
$txt[161] = 'here';
$txt[162] = 'Tu ji dil dixwazî vê mijarê jê bibî?';
$txt[163] = 'Erê';
$txt[164] = 'Na';

$txt[166] = 'Encamên Lêgerînê';
$txt[167] = 'Lêgerîn Qediya';
$txt[170] = 'Xemgîn im, daxwaza we nehat dîtin.';
$txt[176] = 'li ser';

$txt[182] = 'Lêgerîn';
$txt[190] = 'Hemû';

$txt[193] = 'Vegere';
$txt[194] = 'Bi bîr tîne';
$txt[195] = 'Yê mijar daye destpêkirin';
$txt[196] = 'Sernavê Mijarê';
$txt[197] = 'Yê şandî';
$txt[200] = 'Endamên Qeydbûyî';
$txt[201] = 'Hûn bi xêr hatin';
$txt[208] = 'Navenda Rêveberiyê';
$txt[211] = 'Guhertina Dawîn';
$txt[212] = 'Hûn dixwazin agahdarbûna ji bo vê mijarê betal bikin?';

$txt[214] = 'Peyamên Dawîn';

$txt[227] = 'Cih';
$txt[231] = 'Zayend';
$txt[233] = 'Dîroka Qeydbûnê';

$txt[234] = 'Peyamên dawîn nîşan bide';
$txt[235] = 'Mijara herî dawîn peyam hatiye şandin e';

$txt[238] = 'Xort/Mêr';
$txt[239] = 'Keç/Jin';

$txt[240] = 'Di navê bikarhêner de karektera çewt heye.';

$txt['welcome_guest'] = 'Bi xêr hatî, <b>' . $txt[28] . '</b>. Ji kerema xwe re <a href="' . $scripturl . '?action=login">Têkevin</a> an jî <a href="' . $scripturl . '?action=register">Bibin Endam</a>.';
$txt['welcome_guest_activate'] = '<br />E-peyama we ya aktîvasyonê nehati be <a href="' . $scripturl . '?action=activate">li vir bitikin</a>.';
$txt['hello_member'] = 'Bi xêr hatî,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Hûn bi xêr hatin,';
$txt[247] = 'Silav';
$txt[248] = 'Hûn bi xêr hatin,';
$txt[249] = 'Ji kerema xwe re';
$txt[250] = 'Vegere';
$txt[251] = 'Cihê ku hûn dixwazin herin';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Yê şandî';

$txt[287] = 'Pişirîn';
$txt[288] = 'Bi hêrs';
$txt[289] = 'KenêBiDeng';
$txt[290] = 'KenekGeş';
$txt[291] = 'Xemgîn';
$txt[292] = 'ÇavQusandin';
$txt[293] = 'KenêReş';
$txt[294] = 'Matmayî';
$txt[295] = 'Karîzmatîk';
$txt[296] = 'Çi';
$txt[450] = 'Şirîn';
$txt[451] = 'EzmanDirêj';
$txt[526] = 'Şermok';
$txt[527] = 'Hişş';
$txt[528] = 'Bêbiryar';
$txt[529] = 'Maç';
$txt[530] = 'Girî';

$txt[298] = 'Moderator';
$txt[299] = 'Moderatoran';

$txt[300] = 'Mijaran xwendî bihesibîne.';
$txt[301] = 'Nîşandan';
$txt[302] = 'Nû';

$txt[303] = 'Hemû Endam';
$txt[305] = 'Binêre';
$txt[307] = 'e-peyam';

$txt[308] = 'Endam hatin lîstekirin';
$txt[309] = 'in';
$txt[310] = 'Bi giştî Endam';
$txt[311] = 'qasê';
$txt[315] = 'Min şîfre ji bîr kir';

$txt[317] = 'Dîrok';
// Use numeric entities in the below string.
$txt[318] = 'Ji Kê';
$txt[319] = 'Mijar';
$txt[322] = 'Nû bike';
$txt[324] = 'Ji kê re';

$txt[330] = 'Mijar';
$txt[331] = 'Lîsteya Endaman';
$txt[332] = 'Lîsteya Endaman';
$txt[333] = 'Peyama nû heye';
$txt[334] = 'Peyama nû tune';

$txt['sendtopic_send'] = 'Bişîne';

$txt[371] = 'Teraza Zemên';
$txt[377] = 'an jî';

$txt[398] = 'Xemgîn im, li hev hatin çênebû.';

$txt[418] = 'Daxuyanî';

$txt[430] = 'Xemgîn im %s, ev forum ji we re qedexe ye.';

$txt[452] = 'Hemû peyaman xwendî bihesibîne';

$txt[454] = 'Mijarê hatî hezkirin ji (' . $modSettings['hotTopicPosts'] . '\' zêdetir peyam dihewîne)';
$txt[455] = 'Mijara pir jê hatî hezkirin ji (' . $modSettings['hotTopicVeryPosts'] . '\' zêdetir peyam dihewîne)';
$txt[456] = 'Mijara Asêkirî';
$txt[457] = 'Mijara Normal';
$txt['participation_caption'] = 'Di mijarê de peyama te jî heye';

$txt[462] = 'HERE';

$txt[465] = 'Çap Bike';
$txt[467] = 'Profîl';
$txt[468] = 'Kurteya Mijarê';
$txt[470] = 'Tune';
$txt[471] = 'Peyam';
$txt[473] = 'Ev navê bikarhêner ji aliyê endamek din tê bikaranîn.';

$txt[488] = 'Hejmara giştî ya endaman';
$txt[489] = 'Hejmara giştî ya peyaman';
$txt[490] = 'Hejmara giştî ya mijaran';

$txt[497] = 'Tu dixwazî çiqas girêdayî bimînî';

$txt[507] = 'Pêşdîtin';
$txt[508] = 'Tim girêdayî bimîne';

$txt[511] = 'Logged';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'Yê şandî:';

$txt[578] = 'saet';
$txt[579] = 'roj';

$txt[581] = ', endamê me yê nû.';

$txt[582] = 'Peyva lêgerînê';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Silav+Tu+Li Wir Î?';
$txt[604] = 'YIM';

$txt[616] = 'Malper niha moda telbekirinê de ye.. tê tamîrkirin...';

$txt[641] = 'Hejmara Xwendinê';
$txt[642] = 'caran';

$txt[645] = 'Îstatîkên Forumê';
$txt[656] = 'Endamê Dawîn';
$txt[658] = 'Giştiya Kategoriyan';
$txt[659] = 'Peyama Dawîn';

$txt[660] = 'Ji bo dîtina';
$txt[661] = 'peyamên ku heta niha ji we re hatine şandin';
$txt[662] = 'li vir';
$txt[663] = 'bitikin.';

$txt[665] = 'Giştiya Beşan ';

$txt[668] = 'Rûpelê Çap Bike';

$txt[679] = 'Li vir e-peyama xwe ya hûn bi kar tînin, binivîsin';

$txt[683] = 'Ez piçek seyr im!';
$txt[685] = $context['forum_name'] . ' - Navenda Agahiyê';

$txt[707] = 'Vê mijarê bişîne';

$txt['sendtopic_title'] = 'Mijara &quot;%s&quot; bişînin hevalê xwe.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Silav %s,';
$txt['sendtopic_this_topic'] = 'Ji te dixwazim ku li vê mijarê binêrî. "%s" on ' . $context['forum_name'] . '.  Ji bo ditinê tu dikarî li girêdanê bitikî.';
$txt['sendtopic_thanks'] = 'Zor Spas';
$txt['sendtopic_sender_name'] = 'Navê We';
$txt['sendtopic_sender_email'] = 'e-peyama we';
$txt['sendtopic_receiver_name'] = 'Navê hevalê we';
$txt['sendtopic_receiver_email'] = 'E-peyama hevalê we';
$txt['sendtopic_comment'] = 'Nêrîna xwe bêje';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Li mijarê nêrînek zêdebû.';

$txt[721] = 'E-peyama min veşêre';

$txt[737] = 'Hemûyan Hilbijêre';

// Use numeric entities in the below string.
$txt[1001] = 'Çewtiya danegehê';
$txt[1002] = 'Dîsa biceribînin. Ger hûn dîsa peyama çewtiyê bistînin, vê yekê ji rêvebir re bibêjin.';
$txt[1003] = 'Pel';
$txt[1004] = 'Rêzik';
// Use numeric entities in the below string.
$txt[1005] = 'Di danegeha we de çewtiyek hate dîtin û xebata sererastkirinê otomatîk hat ceribandin. Ger hûn dîsa peyama çewtiyê bistînin, bi pêşkêşkerê xwe re bikevin têkiliyê.';
$txt['database_error_versions'] = '<b>Not:</b> Divê danegeha we bê rojanekirin. Guhertoya heyî ya pelên we ' . $forum_version . ', <em>ama</em> guhertoya danegehê ' . $modSettings['smfVersion'] . '. upgrage.php\' xebaitandina vê tê pêşniyarkirin.';
$txt['template_parse_error'] = 'Çewtiya Dirbê!';
$txt['template_parse_error_message'] = 'Di nava dirbê de kodek çewt hate dîtin. Ev problem ne mayînde ye, ji kerema xwe re paşê dîsa biceribînin. Ger hûn dîsa peyama çewtiyê bistînin, vê yekê ji rêvebir re bibêjin.<br /><br />Piştî rastkirina çewtiyê rûpelê <a href="javascript:location.reload();">nû bikin</a>.';
$txt['template_parse_error_details'] = '<tt><b>%1$s</b></tt> di barkirinê vê dirb û pelên zimên de çewtî heye. Rêzkirina peyvan kontrol bikin, divê li beriya kevana bi tenê, xêz berwar hebe (<tt>\'</tt>) û ger hûn bixwazin xêza berwarî bi kar bînin, divê hûn du heban bi kar bînin (<tt>\\</tt>). Ji bo baştir dîtina çewtiyên koda PHP, <a href="' . $boardurl . '%1$s">gihiştina rasterast</a> biceribînin.<br /><br />Ji bo dîsa ceribandinê <a href="javascript:location.reload();">rûpelê nû bikin</a> an jî <a href="' . $scripturl . '?theme=1">dirba bixweber bi kar bînin</a>.';

$txt['smf10'] = '<b>Îro</b>  ';
$txt['smf10b'] = '<b>Duh</b>  ';
$txt['smf20'] = 'Anketa Nû';
$txt['smf21'] = 'Pirs';
$txt['smf23'] = 'Deng Bide';
$txt['smf24'] = 'Giştiya Dengan';
$txt['smf25'] = 'Kurterê: Şandina Peyamê; ALT+S - Pêşdîtina Peyamê; ALT+P';
$txt['smf29'] = 'Encaman Bibîne';
$txt['smf30'] = 'Dengdanê Asê Bike';
$txt['smf30b'] = 'Asêkirina Dengdanê Rake';
$txt['smf39'] = 'Anketê sererast bike';
$txt['smf43'] = 'Anket';
$txt['smf47'] = '1 roj';
$txt['smf48'] = '1 Hefte';
$txt['smf49'] = '1 Meh';
$txt['smf50'] = 'Her Dem';
$txt['smf52'] = 'Navê bikarhêner, şîfre û wexta xwe ya aktîfbûnê binivîsin';
$txt['smf53'] = '1 Saet';
$txt['smf56'] = 'HAT VEGUHEZTIN';
$txt['smf57'] = 'Wekî hinceta veguheztina mijarê <br />sedemek binivîsin.';
$txt['smf60'] = 'Xemgîn im, ji bo bikaranîna taybetiya karma peyamên we ne bes e - peyamên we ne bes e ';
$txt['smf62'] = 'Xemgîn im, bêyî navberekî hûn nikarin xebata karma bimeşînin.';
$txt['smf82'] = 'Forumê';
$txt['smf88'] = '';
$txt['smf96'] = 'Mijara Sabîtkirî';

$txt['smf138'] = 'Jê Bibe';

$txt['smf199'] = 'Peyamên We yên Taybet';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Zêdetir Îstatîk]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kod';
$txt['smf239'] = 'Xwediyê jêwergirtinê';
$txt['smf240'] = 'Jêwergirtin';

$txt['smf251'] = 'Mijarê Parçe Bike';
$txt['smf252'] = 'Mijaran bi Heve Bike';
$txt['smf254'] = 'Sernavê Nû ya Mijarê';
$txt['smf255'] = 'Tenê ya şandî parçe bike.';
$txt['smf256'] = 'Mijarê ji vê peyam û pê ve parçe bibira.';
$txt['smf257'] = 'Peyamên jo bo parçekirinê hilbijêrin.';
$txt['smf258'] = 'Mijara Nû';
$txt['smf259'] = 'Mijar hat parçekirin.';
$txt['smf260'] = 'Çavkaniya Mijarê';
$txt['smf261'] = 'Mijarên ku hûn dixwazin parçe bikin, hilbijêrin';
$txt['smf264'] = 'Bihevekirina mijaran qediya.';
$txt['smf265'] = 'Mijara nû bihevekirî';
$txt['smf266'] = 'Mijara ku wê bê bihevekirin';
$txt['smf267'] = 'Beşa Hedef';
$txt['smf269'] = 'Mijara Hedef';
$txt['smf274'] = 'Tu ji dil dixwazî bi heve bikî';
$txt['smf275'] = 'û';
$txt['smf276'] = 'Ev fonssiyon du mijaran bi heve dike, dike yek. Li dor demê wê bê senifandin, rêzkirin. Lewma yê herî nû wê wekî peyama mijara bê bihevekirin';

$txt['smf277'] = 'Mijarê Asê Bike';
$txt['smf278'] = 'Asêkirinê Rake';
$txt['smf279'] = 'Asêbike';
$txt['smf280'] = 'Asêkirinê Rake';

$txt['smf298'] = 'Lêgerîna Pêşketî';

$txt['smf299'] = 'TALÛKEYA EWLEKARIYÊ:';
$txt['smf300'] = 'Pela ku divê bê jêbirin: ';

$txt['smf301'] = 'Ev rûpel ';
$txt['smf302'] = ' saniyeyê de bi ';
$txt['smf302b'] = ' lêpirsînê hat afirandin';

$txt['smf315'] = 'Ev peyamê ragihine rêvebiran.';

$txt['online2'] = 'Girêdayî';
$txt['online3'] = 'Ne girêdayî';
$txt['online4'] = 'Peyama Tyabet (Girêdayî)';
$txt['online5'] = 'Peyama Taybet (Ne Girêdayî)';
$txt['online8'] = 'Rewş';

$txt['topbottom4'] = 'Here Jor';
$txt['topbottom5'] = 'Here Jêr';

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


$txt['calendar3'] = 'Rojbûnan:';
$txt['calendar4'] = 'Çalakiyan:';
$txt['calendar3b'] = 'Rojbûnên Nêz:';
$txt['calendar4b'] = 'Çalakiyên Nêz:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Meh:';
$txt['calendar10'] = 'Sal:';
$txt['calendar11'] = 'Roj:';
$txt['calendar12'] = 'Sernavê Çalakiyê:';
$txt['calendar13'] = 'Wê li ku zêde bibe:';
$txt['calendar20'] = 'Çalakiyê Sererast Bike';
$txt['calendar21'] = 'Bila çalakî bê jêbirin?';
$txt['calendar22'] = 'Çalakiyê jê bibe';
$txt['calendar23'] = 'Çalakî Têkeve';
$txt['calendar24'] = 'Salname';
$txt['calendar37'] = 'Salname lê zêde bike';
$txt['calendar43'] = 'Li çalakiyê ve girê bide';
$txt['calendar47'] = 'Salname';
$txt['calendar47b'] = 'Di salnameyê de îro';
$txt['calendar51'] = 'Hefte';
$txt['calendar54'] = 'Çend roj berdewam:';
$txt['calendar_how_edit'] = 'Hûn ê çalakiyan çawa sererast bikin?';
$txt['calendar_link_event'] = 'Bi peyamê ve reminder girê bide:';
$txt['calendar_confirm_delete'] = 'Tu ji dil dixwazî vê çalakiyê jê bibî?';
$txt['calendar_linked_events'] = 'Çalakiyên Girêdayî';

$txt['moveTopic1'] = 'Guherandina cihê mijarê ragihîne';
$txt['moveTopic2'] = 'Sernavê mijarê biguherîne';
$txt['moveTopic3'] = 'Mijara Nû';
$txt['moveTopic4'] = 'Sernavê mijara hemû peyamê biguherîne';

$txt['theme_template_error'] = '\'%s\' Ev dirb nayê barkirin.';
$txt['theme_language_error'] = '\'%s\' Ev pela zimên nayê barkirin.';

$txt['parent_boards'] = 'Beşên Jêr';

$txt['smtp_no_connect'] = 'Pêşkêşkera SMTP nayê gihiştin';
$txt['smtp_port_ssl'] = 'Têketina porta SMTP çewt e; ger hûn gihiştina SSL bi kar tînî, wekî 465 têkevin.';
$txt['smtp_bad_response'] = 'Ji pêşkêşkerê Mail bersiv nehat standin';
$txt['smtp_error'] = 'Dema e-peyam dihat şandin çewtî derket: ';
$txt['mail_send_unable'] = '\'%s\' re e-peyam nehat şandin.';

$txt['mlist_search'] = 'Di nav endaman de Lê bigere';
$txt['mlist_search2'] = 'Dîsa Lê bigere';
$txt['mlist_search_email'] = 'Li gor navnîşana e-peyamê bigere';
$txt['mlist_search_messenger'] = 'Li gor navnîşana MSNê bigere';
$txt['mlist_search_group'] = 'Li gor asta endamtiyê bigere';
$txt['mlist_search_name'] = 'Li gor navan bigere';
$txt['mlist_search_website'] = 'Li gor navnîşana malperê bigere';
$txt['mlist_search_results'] = 'Encamên Lêgerînê';

$txt['attach_downloaded'] = 'Barkirin:';
$txt['attach_viewed'] = 'Nîşandan:';
$txt['attach_times'] = 'caran';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Vebijêrk';
$txt['never'] = 'Tu caran';
$txt['more'] = 'Zêdetir';

$txt['hostname'] = 'Navê Host';
$txt['you_are_post_banned'] = 'Xemgîn im %s, lê ji bo peyamşandina vê forumê û şandina peyamên taybet hûn hatine astengkirin.';
$txt['ban_reason'] = 'Sedem';

$txt['tables_optimized'] = 'Tabloyên danegehê hatin baştirinkirin';

$txt['add_poll'] = 'Anketek Nû';
$txt['poll_options6'] = 'Hûn dikarin tenê %s anket hilbijêrin.';
$txt['poll_remove'] = 'Anketê Jê Bibe';
$txt['poll_remove_warn'] = 'Hûn ji dil dixwazin anketê ji mijaran rakin?';
$txt['poll_results_expire'] = 'Encam, dema dengdan qediya, wê bê nîşandan';
$txt['poll_expires_on'] = 'Dengdan Diqede';
$txt['poll_expired_on'] = 'Dengdan Qediya';
$txt['poll_change_vote'] = 'Dengê Jê Bibe';
$txt['poll_return_vote'] = 'Vebijêrkên Dengdanê';

$txt['quick_mod_remove'] = 'Yê bijartî jê bibe';
$txt['quick_mod_lock'] = 'Yê bijartî asê bike';
$txt['quick_mod_sticky'] = 'Yê bijartî rawestîne';
$txt['quick_mod_move'] = 'Yê bijartî veguhezîne';
$txt['quick_mod_merge'] = 'Yê bijartî bi heve bike';
$txt['quick_mod_markread'] = 'Yê bijartî wekî xwendî bihesibîne';
$txt['quick_mod_go'] = 'Here!';
$txt['quickmod_confirm'] = 'Tu ji dil dixwazî?';

$txt['spell_check'] = 'Kontrol Bike';

$txt['quick_reply_1'] = 'Bersiva Lez';
$txt['quick_reply_2'] = '<i>Bersiva Lezp</i> bi vê taybetiyê hûn dikarin bi lez bersiv binivîsin. Hûn dikarin kod û smile bi kar bînin.';
$txt['quick_reply_warning'] = 'HIŞYARÎ: Ev mijar asêkirî ye!<br />Tenê rêvebir dikarin bersiv bidin.';

$txt['notification_enable_board'] = 'Hûn ji dil dixwazin ji bo mijarên nû yên vê beşê bên agahdarkirin?';
$txt['notification_disable_board'] = 'Hûn ji dil dixwazin agahdarkirina xwe ya ji bo mijarên nû yên vê beşê betal bikin?';
$txt['notification_enable_topic'] = 'Hûn ji dil dixwazin ji bo peyamên nû yên vê mijarê bên agahdarkirin?';
$txt['notification_disable_topic'] = 'Hûn ji dil dixwazin agahdarkirina xwe ya ji bo mijarên nû yên vê beşê betal bikin?';

$txt['rtm1'] = 'Ragihîne Moderator';

$txt['unread_topics_visit'] = 'Peyamên Nexwendî';
$txt['unread_topics_visit_none'] = 'Peyama nû nehatiye şandin... <a href="' . $scripturl . '?action=unread;all">Ji bo kontrola hemûyan bitikin.</a>';
$txt['unread_topics_all'] = 'Hemû mijarên min nexwendî';
$txt['unread_replies'] = 'Mijarên bi peyamên nû';

$txt['who_title'] = 'Kî Girêdayî Ye';
$txt['who_and'] = ' û ';
$txt['who_viewing_topic'] = ' mijarê vedikole.';
$txt['who_viewing_board'] = ' beşê vedikole.';
$txt['who_member'] = 'Endam';

$txt['powered_by_php'] = 'Bi pitgiriya PHP';
$txt['powered_by_mysql'] = 'Bi piştgriya MySQL';
$txt['valid_html'] = 'HTML 4.01 Derbasdar e!';
$txt['valid_xhtml'] = 'XHTML 1.0 Derbasdar e!';
$txt['valid_css'] = 'CSS Derbasdar e!';

$txt['guest'] = 'Mêvan';
$txt['guests'] = 'Mêvan';
$txt['user'] = 'Endam';
$txt['users'] = 'Endam';
$txt['hidden'] = 'Veşartî';
$txt['buddy'] = 'Heval';
$txt['buddies'] = 'Heval';
$txt['most_online_ever'] = 'Herî zêde çend kes bûye online';
$txt['most_online_today'] = 'Îro herî zêde çend kes bûye online';

$txt['merge_select_target_board'] = 'Beşa ku wê mijara bihevekirî lê bê afirandin';
$txt['merge_select_poll'] = 'Anketa di mijara wê bê bihevekirin de hilbijêrin';
$txt['merge_topic_list'] = 'Mijarên ji bo bihevekirinê';
$txt['merge_select_subject'] = 'Sernavê mijarê bi heve kirî';
$txt['merge_custom_subject'] = 'Sernavê Taybet';
$txt['merge_enforce_subject'] = 'Sernavê hemû mijaran biguherîne';
$txt['merge_include_notifications'] = 'Bila vebijêrkên agahdarbûnê jî bihewîne?';
$txt['merge_check'] = 'Bi heve bike?';
$txt['merge_no_poll'] = 'Anket tune';

$txt['response_prefix'] = 'Bersiv: ';
$txt['current_icon'] = 'Sîmgeya Heyî';

$txt['smileys_current'] = 'Seta Smile a heyî';
$txt['smileys_none'] = 'Seta Smile tune';
$txt['smileys_forum_board_default'] = 'Standarta Forumê';

$txt['search_results'] = 'Encamên Lêgerînê';
$txt['search_no_results'] = 'Tu encam nehat dîtin';

$txt['totalTimeLogged1'] = 'Wexta giştî ya girêdayîmana we: ';
$txt['totalTimeLogged2'] = ' roj, ';
$txt['totalTimeLogged3'] = ' saet û ';
$txt['totalTimeLogged4'] = ' deqe.';
$txt['totalTimeLogged5'] = 'roj ';
$txt['totalTimeLogged6'] = 'saet ';
$txt['totalTimeLogged7'] = 'deqe';

$txt['approve_thereis'] = 'Aniha';
$txt['approve_thereare'] = 'Aniha';
$txt['approve_member'] = 'yek endam';
$txt['approve_members'] = 'Endam';
$txt['approve_members_waiting'] = 'yên li benda erêkirinê.';

$txt['notifyboard_turnon'] = 'Dema di vê beşê de mijarek nû vebû hûn ê bi e-peyamek bên hişyarkirin.\\n\\nHûn dixwazin berdewam bikin?';
$txt['notifyboard_turnoff'] = 'Dema di vê beşê de mijarek nû vebû hûn ê bi e-peyamek neyên hişrakirin.\\n\\nHûn dixwazin berdewam bikin?';

$txt['activate_code'] = 'Koda we ya aktîvasyonê';

$txt['find_members'] = 'Li endamek bigere';
$txt['find_username'] = 'Nav, navê bikarhêner an jî e-peyam';
$txt['find_buddies'] = 'Tenê hevalan nîşan dide?';
$txt['find_wildcards'] = 'Nîşanên taybet ên sermest: * û ?';
$txt['find_no_results'] = 'Daxwaza we nehat dîtin';
$txt['find_results'] = 'Encam';
$txt['find_close'] = 'Bigire';

$txt['unread_since_visit'] = 'Peyamên nû şandin nîşan bide.';
$txt['show_unread_replies'] = 'Bersivên nû yên ji bo peyamên min nîşan bide.';

$txt['change_color'] = 'Rengê biguherîne';

$txt['quickmod_delete_selected'] = 'Yên bijartî jê bibe';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Peyamên we yên nû hene.\\nDi paceyek nû de bibîne?';

$txt['previous_next_back'] = '&laquo; Ye berê';
$txt['previous_next_forward'] = 'Ya piştî &raquo;';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'Ev mijar ' . $txt['movetopic_auto_board'] . "li vî beşê hat veguheztin.\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Qadê nîşan bide/nede';

$txt['mark_unread'] = 'Nexwendî bihesibîne';

$txt['ssi_not_direct'] = 'Ji kerema xwe re wekî URL rasterast xwe negihînin pela SSI.php; Ger hûn bixwazin bigihin fonksiyona SSI riya \'?ssi_function=tiştek\' bi kar bînin.';
$txt['ssi_session_broken'] = 'SSI.php was unable to load a session!  This may cause problems with logout and other functions - please make sure SSI.php is included before *anything* else in all your scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Pêşdîtina Peyamê';
$txt['preview_fetch'] = 'Pêşdîtin tê amadekirin...';
$txt['preview_new'] = 'Peyama Nû';
$txt['error_while_submitting'] = 'Dema peyam dihat şandin çewtî derketin:';

$txt['split_selected_posts'] = 'Peyamên Nîşankirî';
$txt['split_selected_posts_desc'] = 'Peyamên li jêr piştî xebata parçekirinê wê her yek mijarek biafirînin.';
$txt['split_reset_selection'] = 'Bijartinê Betal Bike';

$txt['modify_cancel'] = 'Betal';
$txt['mark_read_short'] = 'Xwendî Bihesibîne';

$txt['pm_short'] = 'Peyamên Min';
$txt['hello_member_ndt'] = 'Bi xêr hatî';

$txt['ajax_in_progress'] = 'Tê barkirin...';

?>