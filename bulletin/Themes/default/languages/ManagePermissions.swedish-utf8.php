<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Hantera r&auml;ttigheter';
$txt['permissions_modify'] = '&Auml;ndra';
$txt['permissions_access'] = 'Har beh&ouml;righet';
$txt['permissions_allowed'] = 'Till&aring;tet';
$txt['permissions_denied'] = 'Inte till&aring;tet';

$txt['permissions_switch'] = 'Byt till';
$txt['permissions_global'] = 'Globalt';
$txt['permissions_local'] = 'Lokalt';

$txt['permissions_groups'] = 'R&auml;ttigheter per medlemsgrupp';
$txt['permissions_all'] = 'alla';
$txt['permissions_none'] = 'inga';
$txt['permissions_set_permissions'] = 'St&auml;ll in r&auml;ttigheter';

$txt['permissions_with_selection'] = 'Med markerade val';
$txt['permissions_apply_pre_defined'] = 'Anv&auml;nd f&ouml;rvald r&auml;ttighetsprofil';
$txt['permissions_select_pre_defined'] = 'V&auml;lj en f&ouml;rvald profil';
$txt['permissions_copy_from_board'] = 'Kopiera r&auml;ttigheter fr&aring;n denna tavla';
$txt['permissions_select_board'] = 'V&auml;lj en tavla';
$txt['permissions_like_group'] = 'St&auml;ll in r&auml;ttigheter som denna grupp';
$txt['permissions_select_membergroup'] = 'V&auml;lj en medlemsgrupp';
$txt['permissions_add'] = 'L&auml;gg till r&auml;ttighet';
$txt['permissions_remove'] = 'Ta bort r&auml;ttighet';
$txt['permissions_deny'] = 'Neka r&auml;ttighet';
$txt['permissions_select_permission'] = 'V&auml;lj en r&auml;ttighet';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Du kan bara välja en handling för att ändra rättigheter';
$txt['permissions_no_action'] = 'Ingen handling vald';
$txt['permissions_deny_dangerous'] = 'Du har valt att förbjuda en eller flera rättigheter.\\nDetta kan vara farligt, och orsaka oväntade effekter, om du inte sett till att ingen av \\"misstag\\" råkar tillhöra den grupp eller de grupper som du förbjuder rättigheter för.\\n\\nÄr du säker på att du vill fortsätta?';

$txt['permissions_boards'] = 'R&auml;ttigheter per tavla';

$txt['permissions_modify_group'] = 'Redigera grupp';
$txt['permissions_general'] = 'Allm&auml;nna r&auml;ttigheter';
$txt['permissions_board'] = 'Globala r&auml;ttigheter f&ouml;r alla tavlor';
$txt['permissions_commit'] = 'Spara &auml;ndringar';
$txt['permissions_modify_local'] = '&Auml;ndra lokala r&auml;ttigheter';
$txt['permissions_on'] = 'p&aring; tavla';
$txt['permissions_local_for'] = 'Lokala r&auml;ttigheter f&ouml;r medlemsgrupp';
$txt['permissions_option_on'] = 'T';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'F';
$txt['permissions_option_desc'] = 'F&ouml;r varje r&auml;ttighet, kan du v&auml;lja antingen \'Till&aring;t\' (T), \'Neka\' (X), eller <span style="col
or: red;">\'F&ouml;rbjud\' (F)</span>.<br /><br />Kom ih&aring;g att om du f&ouml;rbjuder en r&auml;ttighet, s&aring; kommer samtliga medlemmar, inklusive moderatorer, som tillh&ouml;r den gruppen att f&ouml;rbjudas denna funktionalitet.<br />D&auml;rf&ouml;r b&ouml;r du anv&auml;nda detta med st&ouml;rsta f&ouml;rsiktighet, och bara n&auml;r det &auml;r absolut <b>n&ouml;dv&auml;ndigt</b>. Neka, &aring; andra sidan, tar bara bort funktionen om den inte beviljats p&aring; annat h&aring;ll.';

$txt['permissiongroup_general'] = 'Allm&auml;nt';
$txt['permissionname_view_stats'] = 'Visa forumstatistik';
$txt['permissionhelp_view_stats'] = 'Forumstatistiken &auml;r en sida som sammanfattar statistik f&ouml;r forumet, som exempelvis antal medlemmar, antal inl&auml;gg per dag och topplistor &ouml;ver flera aspekter. Om du l&auml;gger till denna r&auml;ttighet, l&auml;ggs det till en l&auml;nk l&auml;ngst ned p&aring; forumindexet  (\'[Mer statistik]\').';
$txt['permissionname_view_mlist'] = 'Visa medlemslistan';
$txt['permissionhelp_view_mlist'] = 'Medlemslistan visar alla medlemmar som har registrerat sig f&ouml;r ditt forum. Listan kan sorteras och &auml;r s&ouml;kbar. Medlemslistan g&aring;r att n&aring; fr&aring;n b&aring;de forumindex och fr&aring;n statistiksidan, genonm att klicka p&aring; antal medlemmar.';
$txt['permissionname_who_view'] = 'Visa Vilka &auml;r online';
$txt['permissionhelp_who_view'] = 'Vilka &auml;r online visar en lista &ouml;ver samtliga medlemmar som &auml;r aktiva p&aring; forumet, och vad var och en av dessa g&ouml;r just nu. Denna r&auml;ttighet fungerar bara om du har aktiverat denna funktion i \'Inst&auml;llningar och tillval\'. Du kan komma &aring;t \'Vilka &auml;r online\' genom att klicka p&aring; l&auml;nken i avdelningen \'Vilka &auml;r online\' p&aring; forumindex. &auml;ven om detta inte till&aring;ts, kommer medlemmar &auml;nd&aring; att kunna se vilka som &auml;r online, bara inte var de &auml;r.';
$txt['permissionname_search_posts'] = 'S&ouml;k efter inl&auml;gg och &auml;mnen';
$txt['permissionhelp_search_posts'] = 'S&ouml;kr&auml;ttigheten g&ouml;r att anv&auml;ndaren till&aring;ts s&ouml;ka efter inl&auml;gg i samtliga tavlor som han eller hon har r&auml;ttigheter att bes&ouml;ka. N&auml;r denna r&auml;ttighet aktiveras, kommer en S&ouml;k-knapp att l&auml;ggas till l&auml;ngst upp p&aring; forumet.';
$txt['permissionname_karma_edit'] = '&Auml;ndra andra personers karma';
$txt['permissionhelp_karma_edit'] = 'Karma &auml;r en funktion som visar hur popul&auml;ra medlemmar &auml;r. F&ouml;r att kunna anv&auml;nda denna funktion, m&aring;ste du f&ouml;rst ha aktiverat det i \'Inst&auml;llningar och tillval\'. R&auml;ttigheten medf&ouml;r att medlemsgruppen ifr&aring;ga till&aring;ts r&ouml;sta om karma. Denna r&auml;ttighet har ingen effekt f&ouml;r g&auml;ster.';

$txt['permissiongroup_pm'] = 'Privata meddelanden';
$txt['permissionname_pm_read'] = 'L&auml;s privata meddelanden';
$txt['permissionhelp_pm_read'] = 'Denna r&auml;ttighet medf&ouml;r att anv&auml;ndare kan komma &aring;t avdelningen f&ouml;r privata meddelanden, och l&auml;sa sina privata meddelanden. Utan denna r&auml;ttighet kan anv&auml;ndare inte skicka privata meddelanden heller.';
$txt['permissionname_pm_send'] = 'Skicka privata meddelanden';
$txt['permissionhelp_pm_send'] = 'Skicka privata meddelanden till andra registrerade medlemmar. Kr&auml;ver att \'L&auml;s privata meddelanden\' ocks&aring; &auml;r p&aring;slaget.';

$txt['permissiongroup_calendar'] = 'Kalender';
$txt['permissionname_calendar_view'] = 'Visa kalendern';
$txt['permissionhelp_calendar_view'] = 'Kalendern visar alla aktuella f&ouml;delsedagar, h&auml;ndelser och h&ouml;gtider f&ouml;r varje enskild m&aring;nad. Denna r&auml;ttighet g&ouml;r att anv&auml;ndaren kommer &aring;t kalendern. N&auml;r denna r&auml;ttighet &auml;r aktiverad, kommer en knapp att l&auml;ggas till l&auml;ngst upp p&aring; forumet, och en lista visas l&auml;ngst ner p&aring; forumindex med aktuella och kommande f&ouml;delsedagar, h&auml;ndelser och h&ouml;gtider. Kalendern m&aring;ste aktiveras fr&aring;n \'Inst&auml;llningar och tillval\'.';
$txt['permissionname_calendar_post'] = 'Skapa h&auml;ndelser i kalendern';
$txt['permissionhelp_calendar_post'] = 'En h&auml;ndelse &auml;r ett nytt &auml;mne som l&auml;nkas till en s&auml;rskild dag eller flera dagar i f&ouml;ljd. Skapa h&auml;ndelser g&ouml;rs fr&aring;n kalendern. H&auml;ndelser kan endast skapas om anv&auml;ndaren har r&auml;ttigheter att starta nya &auml;mnen.';
$txt['permissionname_calendar_edit'] = '&Auml;ndra h&auml;ndelser i kalendern';
$txt['permissionhelp_calendar_edit'] = 'En h&auml;ndelse &auml;r ett nytt &auml;mne som l&auml;nkas till en s&auml;rskild dag eller flera dagar i f&ouml;ljd. H&auml;ndelser kan &auml;ndras genom att klicka p&aring; den r&ouml;da asterisken (*) som visas intill h&auml;ndelsen i kalendern. F&ouml;r att kunna &auml;ndra h&auml;ndelser, m&aring;ste anv&auml;ndaren ifr&aring;ga ha tillr&auml;ckliga r&auml;ttigheter f&ouml;r att kunna &auml;ndra i det f&ouml;rsta inl&auml;gget i det &auml;mne som h&auml;ndelsen l&auml;nkar till.';
$txt['permissionname_calendar_edit_own'] = 'Egna h&auml;ndelser';
$txt['permissionname_calendar_edit_any'] = 'Samtliga h&auml;ndelser';

$txt['permissiongroup_maintenance'] = 'Forumadministration';
$txt['permissionname_admin_forum'] = 'Administrera forum och databas';
$txt['permissionhelp_admin_forum'] = 'Denna r&auml;ttighet g&ouml;r att anv&auml;ndaren kommer &aring;t att:<ul><li>&auml;ndra forum-, databas- och temainst&auml;llningar</li><l
i>hantera paket</li><li>anv&auml;nda underh&aring;llsverktyg f&ouml;r forum och databaser</li><li>visa fellogg och moderatorlogg</li></ul> Anv&auml;nd denna r&auml;ttighet med f&ouml;rsiktighet, d&aring; det &auml;r mycket kraftfullt.';
$txt['permissionname_manage_boards'] = 'Hantera tavlor och kategorier';
$txt['permissionhelp_manage_boards'] = 'Denna r&auml;ttighet till&aring;ter skapande, redigering och radering av tavlor och kategorier.';
$txt['permissionname_manage_attachments'] = 'Hantera bifogade filer och personliga bilder';
$txt['permissionhelp_manage_attachments'] = 'Denna r&auml;ttighet &ouml;ppnar tillg&aring;ng till bilage-centret, d&auml;r alla bifogade filer p&aring; forumet och alla personliga bilder &aring;terfinns och kan tas bort.';
$txt['permissionname_manage_smileys'] = 'Hantera smileys';
$txt['permissionhelp_manage_smileys'] = 'Detta &ouml;ppnar access till smiley-centret. D&auml;r kan du l&auml;gga till, redigera och ta bort smileys och smiley-upps&auml;ttningar.';
$txt['permissionname_edit_news'] = 'Redigera nyheter';
$txt['permissionhelp_edit_news'] = 'Nyhetsfunktionen g&ouml;r att en slumpvis utvald nyhetsrad l&auml;ggs till &ouml;verst p&aring; alla sidor. F&ouml;r att kunna anv&auml;nda den, m&aring;ste den vara aktiverad bland foruminst&auml;llningarna.';

$txt['permissiongroup_member_admin'] = 'Medlemsadministration';
$txt['permissionname_moderate_forum'] = 'Moderera forummedlemmar';
$txt['permissionhelp_moderate_forum'] = 'Denna r&auml;ttighet inkluderar alla viktiga medlemshanteringsfunktioner:<ul><li>tillg&aring;ng till registrering av medlemmar</li><li>tillg&aring;ng till att visa och radera medlemmar</li><li>ut&ouml;kad profilinformation, inklusive IP-adress och online-status</li><li>aktivera anv&auml;ndarkonton</li><li>f&aring; underr&auml;ttelse om godk&auml;nnanden, och godk&auml;nna anv&auml;ndarkonton</li><li>immun mot att ignorera privata meddelanden</li><li>andra diverse sm&aring;saker</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Hantera och tilldela medlemsgrupper';
$txt['permissionhelp_manage_membergroups'] = 'Denna r&auml;ttighet l&aring;ter en anv&auml;ndare &auml;ndra medlemsgrupper och tilldela medlemsgrupp till andra medlemmar.';
$txt['permissionname_manage_permissions'] = 'Hantera r&auml;ttigheter';
$txt['permissionhelp_manage_permissions'] = 'Denna r&auml;ttighet l&aring;ter en anv&auml;ndare redigera alla r&auml;ttigheter f&ouml;r en medlemsgrupp, antingen globalt eller f&ouml;r enskilda tavlor.';
$txt['permissionname_manage_bans'] = 'Hantera bannlysningslista';
$txt['permissionhelp_manage_bans'] = 'Denna r&auml;ttighet l&aring;ter en anv&auml;ndare l&auml;gga till eller ta bort anv&auml;ndarnamn, IP-adresser, servernamn och e-postadresser fr&aring;n listan &ouml;ver bannlysta medlemmar. Den l&aring;ter dem ocks&aring; att visa och ta bort poster i loggfilen &ouml;ver bannlysta medlemmar som f&ouml;rs&ouml;kt att logga in.';
$txt['permissionname_send_mail'] = 'Skicka e-post till medlemmar';
$txt['permissionhelp_send_mail'] = 'Skicka massbrev till samtliga medlemmar p&aring; forumet eller bara vissa medlemsgrupper, via antingen e-post eller privata meddelanden (det sistn&auml;mnda kr&auml;ver \'Skicka privata meddelanden\'-r&auml;ttighet).';

$txt['permissiongroup_profile'] = 'Medlemsprofiler';
$txt['permissionname_profile_view'] = 'Visa profilsammanfattning och statistik';
$txt['permissionhelp_profile_view'] = 'Denna r&auml;ttighet l&aring;ter anv&auml;ndare klicka p&aring; ett anv&auml;ndarnamn, f&ouml;r att p&aring; s&aring; s&auml;tt kunna f&aring; fram en sammanfattning av profilinstllningar, en del statistik och samtliga inl&auml;gg som anv&auml;ndaren skrivit.';
$txt['permissionname_profile_view_own'] = 'Ens egen profil';
$txt['permissionname_profile_view_any'] = 'Allas profiler';
$txt['permissionname_profile_identity'] = '&Auml;ndra kontoinst&auml;llningar';
$txt['permissionhelp_profile_identity'] = 'Kontoinst&auml;llningar inneb&auml;r de mest grundl&auml;ggande inst&auml;llningarna i anv&auml;ndares profiler, som exempelvis l&ouml;senord, e-postadress, medlemsgrupp och &ouml;nskat spr&aring;k.';
$txt['permissionname_profile_identity_own'] = 'Ens egen profil';
$txt['permissionname_profile_identity_any'] = 'Allas profiler';
$txt['permissionname_profile_extra'] = '&Auml;ndra ytterligare profilinst&auml;llningar';
$txt['permissionhelp_profile_extra'] = 'Ytterligare profilinst&auml;llningar inneb&auml;r bl.a. inst&auml;llningar f&ouml;r personliga bilder, privata meddelanden, temainst&auml;llningar och underr&auml;ttelser.';
$txt['permissionname_profile_extra_own'] = 'Ens egen profil';
$txt['permissionname_profile_extra_any'] = 'Allas profiler';
$txt['permissionname_profile_title'] = '&Auml;ndra anpassade titlar';
$txt['permissionhelp_profile_title'] = 'Anpassade titlar visas p&aring; &auml;mnessidorna, precis under dennes anv&auml;ndarnamn.';
$txt['permissionname_profile_title_own'] = 'Ens egen profil';
$txt['permissionname_profile_title_any'] = 'Allas profiler';
$txt['permissionname_profile_remove'] = 'Radera konto';
$txt['permissionhelp_profile_remove'] = 'Denna r&auml;ttighet till&aring;ter en anv&auml;ndare att radera sitt eget konto, n&auml;r det &auml;r st&auml;llt p&aring; \'Ens eget konto\'.';
$txt['permissionname_profile_remove_own'] = 'Ens eget konto';
$txt['permissionname_profile_remove_any'] = 'Allas konton';
$txt['permissionname_profile_server_avatar'] = 'V&auml;lja en personlig bild fr&aring;n servern';
$txt['permissionhelp_profile_server_avatar'] = 'Om aktiverat, kommer anv&auml;ndare att kunna v&auml;lja en personlig bild fr&aring;n en samling bilder installerade p&aring; servern.';
$txt['permissionname_profile_upload_avatar'] = 'Ladda upp personlig bild till servern';
$txt['permissionhelp_profile_upload_avatar'] = 'Denna r&auml;ttighet till&aring;ter anv&auml;ndare att ladda upp sin egen personliga bild till servern.';
$txt['permissionname_profile_remote_avatar'] = 'V&auml;lja externt lagrade personliga bilder';
$txt['permissionhelp_profile_remote_avatar'] = 'D&aring; personliga bilder (avatars) kan p&aring;verka laddningstiden av en sida negativt, &auml;r det m&ouml;jligt att st&auml;lla in s&aring; att vissa medlemsgrupper inte f&aring;r anv&auml;nda bilder fr&aring;n andra servrar.';

$txt['permissiongroup_general_board'] = 'Allm&auml;nt';
$txt['permissionname_moderate_board'] = 'Moderera tavla';
$txt['permissionhelp_moderate_board'] = '\'Moderera tavla\' l&auml;gger till n&aring;gra sm&aring; r&auml;ttigheter, f&ouml;r att g&ouml;ra en moderator till en riktig moderator. Det innefattar bl.a. m&ouml;jlighet att svara p&aring; l&aring;sta &auml;mnen, &auml;ndra tiden n&auml;r en omr&ouml;stning avslutas och att visa omr&ouml;stningsresultat.';

$txt['permissiongroup_topic'] = '&Auml;mnen';
$txt['permissionname_post_new'] = 'Skapa nya &auml;mnen';
$txt['permissionhelp_post_new'] = 'Denna r&auml;ttighet l&aring;ter anv&auml;ndare skapa nya &auml;mnen. It till&aring;ter inte att skriva svar till &auml;mnen.';
$txt['permissionname_merge_any'] = 'Sammanfoga &auml;mnen';
$txt['permissionhelp_merge_any'] = 'Sammanfoga tv&aring; eller fler &auml;mnen till ett &auml;mne. Inl&auml;ggen i det &auml;mnen kommer att sorteras, utifr&aring;n tiden som de skapades. En anv&auml;ndare kan bara sammanfoga &auml;mnen p&aring; de tavlor som han har till&aring;telse att sammanfoga. F&ouml;r att kunna sammanfoga flera &auml;mnen samtidigt, m&aring;ste anv&auml;ndaren aktivera snabbmoderering i sina profilinst&auml;llningar.';
$txt['permissionname_split_any'] = 'Dela upp &auml;mnen';
$txt['permissionhelp_split_any'] = 'Dela upp ett &auml;mne till flera mindre &auml;mnen.';
$txt['permissionname_send_topic'] = 'Skicka &auml;mnen till v&auml;nner';
$txt['permissionhelp_send_topic'] = 'Denna r&auml;ttighet l&aring;ter anv&auml;ndare e-posta &auml;mnen till v&auml;nner eller bekanta, genom att ange deras e-postadress och eventuellt ett extra meddelande till personen ifr&aring;ga.';
$txt['permissionname_make_sticky'] = 'Kunna klistra fast &auml;mnen';
$txt['permissionhelp_make_sticky'] = 'Fastklistrade &auml;mnen &auml;r &auml;mnen som alltid f&ouml;rblir l&auml;ngst upp p&aring; &auml;mneslistan p&aring; en tavla. Det &auml;r anv&auml;ndbart f&ouml;r tillk&auml;nnagivanden och andra viktiga meddelanden.';
$txt['permissionname_move'] = 'Flytta &auml;mnen';
$txt['permissionhelp_move'] = 'Flytta ett &auml;mne fr&aring;n en tavla till en annan. Anv&auml;ndare kan bara flytta &auml;mnen till tavlor som de har beh&ouml;righet att bes&ouml;ka.';
$txt['permissionname_move_own'] = 'Egna &auml;mnen';
$txt['permissionname_move_any'] = 'Alla &auml;mnen';
$txt['permissionname_lock'] = 'L&aring;s &auml;mnen';
$txt['permissionhelp_lock'] = 'Denna r&auml;ttighet l&aring;ter en anv&auml;ndare l&aring;sa ett &auml;mne. Detta kan g&ouml;ras f&ouml;r att se till att ingen kan skriva nya inl&auml;gg i &auml;mnet. Endast anv&auml;ndare med r&auml;ttigheten \'Moderera tavla\' kan svara p&aring; l&aring;sta &auml;mnen.';
$txt['permissionname_lock_own'] = 'Egna &auml;mnen';
$txt['permissionname_lock_any'] = 'Alla &auml;mnen';
$txt['permissionname_remove'] = 'Radera &auml;mnen';
$txt['permissionhelp_remove'] = 'Radera &auml;mnen som helhet. Observera att detta r&auml;ttighet inte till&aring;ter anv&auml;ndare att radera enskilda inl&auml;gg i ett &auml;mne!';
$txt['permissionname_remove_own'] = 'Egna &auml;mnen';
$txt['permissionname_remove_any'] = 'Alla &auml;mnen';
$txt['permissionname_post_reply'] = 'Skriva svar till &auml;mnen';
$txt['permissionhelp_post_reply'] = 'Denna r&auml;ttighet l&aring;ter anv&auml;ndare svara p&aring; befintliga &auml;mnen.';
$txt['permissionname_post_reply_own'] = 'Egna &auml;mnen';
$txt['permissionname_post_reply_any'] = 'Alla &auml;mnen';
$txt['permissionname_modify_replies'] = 'Redigera svar till egna &auml;mnen';
$txt['permissionhelp_modify_replies'] = 'Med denna r&auml;ttighet kan anv&auml;ndare som startat ett &auml;mne redigera samtliga svar i det &auml;mnet.';
$txt['permissionname_delete_replies'] = 'Radera svar till egna &auml;mnen';
$txt['permissionhelp_delete_replies'] = 'Med denna r&auml;ttighet kan anv&auml;ndare som startat ett &auml;mne radera samtliga svar till det &auml;mnet.';
$txt['permissionname_announce_topic'] = 'Tillk&auml;nnage &auml;mnen';
$txt['permissionhelp_announce_topic'] = 'Detta till&aring;ter anv&auml;ndaren att skicka tillk&auml;nnagivanden via e-post om &auml;mnen till alla medlemmar eller vissa medlemsgrupper.';

$txt['permissiongroup_post'] = 'Inl&auml;gg';
$txt['permissionname_delete'] = 'Radera inl&auml;gg';
$txt['permissionhelp_delete'] = 'Ta bort inl&auml;gg. Detta till&aring;ter inte anv&auml;ndare att ta bort det f&ouml;rsta inl&auml;gget i ett &auml;mne.';
$txt['permissionname_delete_own'] = 'Egna inl&auml;gg';
$txt['permissionname_delete_any'] = 'Alla inl&auml;gg';
$txt['permissionname_modify'] = 'Redigera inl&auml;gg';
$txt['permissionhelp_modify'] = '&Auml;ndra i befintliga inl&auml;gg';
$txt['permissionname_modify_own'] = 'Egna inl&auml;gg';
$txt['permissionname_modify_any'] = 'Alla inl&auml;gg';
$txt['permissionname_report_any'] = 'Anm&auml;la inl&auml;gg till moderatorerna';
$txt['permissionhelp_report_any'] = 'Denna r&auml;ttighet l&auml;gger till en l&auml;nk till varje inl&auml;gg, som l&aring;ter anv&auml;ndaren enkelt anm&auml;la inl&auml;gget (om det &auml;r ol&auml;mpligt) till en moderator. Vid anm&auml;lan kommer samtliga moderatorer p&aring; den aktuella tavlan att f&aring; ett e-post-meddelande med en l&auml;nk till det anm&auml;lda inl&auml;gget och en beskrivning &ouml;ver vad problemet &auml;r (som anm&auml;laren skrivit).';

$txt['permissiongroup_poll'] = 'Omr&ouml;stningar';
$txt['permissionname_poll_view'] = 'Visa omr&ouml;stningar';
$txt['permissionhelp_poll_view'] = 'Denna r&auml;ttighet l&aring;ter anv&auml;ndare se omr&ouml;stningar. Utan denna r&auml;tt kommer anv&auml;ndaren bara att se sj&auml;lva &auml;mnet.';
$txt['permissionname_poll_vote'] = 'Delta i omr&ouml;stningar';
$txt['permissionhelp_poll_vote'] = 'Denna r&auml;ttighet l&aring;ter registrerade anv&auml;ndare r&ouml;sta i befintliga omr&ouml;stningar. Det kan inte anv&auml;ndas f&ouml;r g&auml;ster, som i vilket fall som helst inte kan r&ouml;sta.';
$txt['permissionname_poll_post'] = 'Skapa omr&ouml;stningar';
$txt['permissionhelp_poll_post'] = 'Denna r&auml;ttighet l&aring;ter anv&auml;ndare starta nya omr&ouml;stningar.';
$txt['permissionname_poll_add'] = 'L&auml;gga till omr&ouml;stningar till befintliga &auml;mnen';
$txt['permissionhelp_poll_add'] = 'Detta till&aring;ter anv&auml;ndare att l&auml;gga till en omr&ouml;stning i efterhand till ett befintligt &auml;mne. Denna r&auml;ttighet kr&auml;ver tillr&auml;cklig beh&ouml;righet f&ouml;r att kunna redigera det f&ouml;rsta inl&auml;gget i ett &auml;mne.';
$txt['permissionname_poll_add_own'] = 'Egna &auml;mnen';
$txt['permissionname_poll_add_any'] = 'Alla &auml;mnen';
$txt['permissionname_poll_edit'] = '&Auml;ndra i omr&ouml;stningar';
$txt['permissionhelp_poll_edit'] = 'Denna r&auml;ttighet l&aring;ter anv&auml;ndare &auml;ndra valm&ouml;jligheterna i en omr&ouml;stning, samt nollst&auml;lla resultaten. F&ouml;r att kunna &auml;ndra maximalt antal r&ouml;ster och tiden n&auml;r an omr&ouml;stning st&auml;ngs m&aring;ste anv&auml;ndaren ha r&auml;ttigheten \'Moderera tavla\'.';
$txt['permissionname_poll_edit_own'] = 'Egna omr&ouml;stningar';
$txt['permissionname_poll_edit_any'] = 'Alla omr&ouml;stningar';
$txt['permissionname_poll_lock'] = 'L&aring;sa omr&ouml;stningar';
$txt['permissionhelp_poll_lock'] = 'Att l&aring;sa omr&ouml;stningar f&ouml;rhindrar fler personer fr&aring;n att r&ouml;sta i omr&ouml;stningen, utan att p&aring;verka sj&auml;lva &auml;mnet i sig.';
$txt['permissionname_poll_lock_own'] = 'Egna omr&ouml;stningar';
$txt['permissionname_poll_lock_any'] = 'Alla omr&ouml;stningar';
$txt['permissionname_poll_remove'] = 'Radera omr&ouml;stningar';
$txt['permissionhelp_poll_remove'] = 'Denna r&auml;ttighet l&aring;ter anv&auml;ndare ta bort omr&ouml;stningar fr&aring;n ett &auml;mne.';
$txt['permissionname_poll_remove_own'] = 'Egna omr&ouml;stningar';
$txt['permissionname_poll_remove_any'] = 'Alla omr&ouml;stningar';

$txt['permissiongroup_notification'] = 'Underr&auml;ttelser';
$txt['permissionname_mark_any_notify'] = 'Beg&auml;ra underr&auml;ttelser till &auml;mnen';
$txt['permissionhelp_mark_any_notify'] = 'Denna funktion l&aring;ter anv&auml;ndare v&auml;lja att f&aring; e-post n&auml;r personer svarar p&aring; &auml;mnen som de prenumererar p&aring;.';
$txt['permissionname_mark_notify'] = 'Beg&auml;ra underr&auml;ttelser till nya &auml;mnen';
$txt['permissionhelp_mark_notify'] = 'Denna funktion l&aring;ter anv&auml;ndare v&auml;lja att f&aring; e-post varje g&aring;ng som nya &auml;mnen skapas p&aring; tavlor som de prenumererar p&aring;.';

$txt['permissiongroup_attachment'] = 'Bifogade filer';
$txt['permissionname_view_attachments'] = 'Visa bifogade filer';
$txt['permissionhelp_view_attachments'] = 'Bifogade filer &auml;r filer som laddats upp och bifogats till inl&auml;gg. Denna funktion kan aktiveras och st&auml;llas in i \'&Auml;ndra inst&auml;llningar och tillval\'. D&aring; bifogade filer aldrig anropas direkt, s&aring; g&aring;r det bra att f&ouml;rhindra folk som inte har denna r&auml;ttighet att ladda ner filerna.';
$txt['permissionname_post_attachment'] = 'Bifoga filer';
$txt['permissionhelp_post_attachment'] = 'F&ouml;r att kunna bifoga filer till inl&auml;gg som skrivs. Ett inl&auml;gg kan inneh&aring;lla flera bifogade filer.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'R&auml;ttighetsinst&auml;llningar';
$txt['groups_manage_permissions'] = 'Medlemsgrupper som f&aring;r hantera r&auml;ttigheter';
$txt['permission_settings_submit'] = 'Spara';
$txt['permission_settings_enable_deny'] = 'Aktivera m&ouml;jlighet f&ouml;r att f&ouml;rbjuda r&auml;ttigheter';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Att st&auml;nga av detta alternativ kommer att uppdatera \\\'Neka\\\'-r&auml;ttigheter till \\\'F&ouml;rbjud\\\'.';
$txt['permission_by_membergroup_desc'] = 'H&auml;r kan du st&auml;lla in globala r&auml;ttigheter f&ouml;r varje medlemsgrupp. Dessa r&auml;ttigheter &auml;r giltiga p&aring; alla tavlor som inte styrts &ouml;ver av lokala r&auml;ttigheter som st&auml;llts in p&aring; sk&auml;rmen \'R&auml;ttigheter per tavla\'.';
$txt['permission_by_board_desc'] = 'H&auml;r kan du ange huruvida en tavla anv&auml;nder de globala r&auml;ttigheterna, eller har s&auml;rskild r&auml;ttigheter. Att anv&auml;nda lokala r&auml;ttigheter inneb&auml;r att du f&ouml;r en specifik tavla kan st&auml;lla in r&auml;ttigheter f&ouml;r alla medlemsgrupper.';
$txt['permission_settings_desc'] = 'H&auml;r kan du ange vilka som har r&auml;ttigheter att &auml;ndra r&auml;ttigheter, samt hur sofistikerat r&auml;ttighetssystemet ska vara.';
$txt['permission_settings_enable_postgroups'] = 'Aktivera r&auml;ttigheter f&ouml;r medlemsgrupper baserat p&aring; antal inl&auml;gg';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Att inaktivera denna inst&auml;llning kommer att ta bort alla r&auml;ttigheter som finns angivet f&ouml;r medlemsgrupper baserat p&aring; antal inl&auml;gg.';
$txt['permission_settings_enable_by_board'] = 'Aktivera avancerade per-tavla-r&auml;ttigheter';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Att inaktivera denna inst&auml;llning kommer att ta bort alla r&auml;ttigheter angivna f&ouml;r specifika tavlor.';

?>