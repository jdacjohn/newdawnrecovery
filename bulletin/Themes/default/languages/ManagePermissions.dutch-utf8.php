<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Permissies bewerken';
$txt['permissions_modify'] = 'Aanpassen';
$txt['permissions_access'] = 'Toegang';
$txt['permissions_allowed'] = 'Toegestaan';
$txt['permissions_denied'] = 'Geweigerd';

$txt['permissions_switch'] = 'Schakel om naar';
$txt['permissions_global'] = 'Globaal';
$txt['permissions_local'] = 'Lokaal';

$txt['permissions_groups'] = 'Permissies per ledengroep';
$txt['permissions_all'] = 'alle';
$txt['permissions_none'] = 'geen';
$txt['permissions_set_permissions'] = 'Stel permissies in';

$txt['permissions_with_selection'] = 'Met selectie';
$txt['permissions_apply_pre_defined'] = 'Gebruik het voor-gedefinieerde permissie-profiel';
$txt['permissions_select_pre_defined'] = 'Kies een voor-gedefinieerde permissie-profiel';
$txt['permissions_copy_from_board'] = 'Kopieer permissies van dit board';
$txt['permissions_select_board'] = 'Selecteer een board';
$txt['permissions_like_group'] = 'Stel de permissies in zoals bij deze ledengroep';
$txt['permissions_select_membergroup'] = 'Kies een ledengroep';
$txt['permissions_add'] = 'Voeg permissie toe';
$txt['permissions_remove'] = 'Verwijder permissie';
$txt['permissions_deny'] = 'Ontzeg permissie';
$txt['permissions_select_permission'] = 'Kies een permissie';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Je kunt slechts &eacute;&eacute;n actie kiezen om de permissies aan te passen';
$txt['permissions_no_action'] = 'Geen actie gekozen';
$txt['permissions_deny_dangerous'] = 'Je staat op het punt &eacute;&eacute;n of meerdere permissies te ontzeggen.\\nDit kan gevaarlijk zijn en ongewenste resultaten tot gevolg hebben als je je er niet van hebt verzekerd dat iemand \\\'per ongeluk\\\' in de groep terecht is gekomen welke de permissies ontzegd zijn.\\n\\nWeet je zeker dat je door wilt gaan?';

$txt['permissions_boards'] = 'Permissies per board';

$txt['permissions_modify_group'] = 'Bewerk ledengroep';
$txt['permissions_general'] = 'Algemene permissies';
$txt['permissions_board'] = 'Globale board-permissies';
$txt['permissions_commit'] = 'Opslaan';
$txt['permissions_modify_local'] = 'Lokale board-permissies aanpassen';
$txt['permissions_on'] = 'op board';
$txt['permissions_local_for'] = 'Lokale permissies voor ledengroep';
$txt['permissions_option_on'] = 'T';
$txt['permissions_option_off'] = 'N';
$txt['permissions_option_deny'] = 'O';
$txt['permissions_option_desc'] = 'Voor iedere permissie kun je kiezen uit \'Toestaan\' (T), \'Niet-toestaan\' (N), of <span style="color: red;">\'Ontzeggen\' (O)</span>.<br /><br />Onthoud dat wanneer je voor -Ontzeggen- kiest, ieder lid, of het nou een moderator is of niet, in die groep die permissie zal worden ontzegd.<br />Om deze reden zul je -Ontzeggen- zorgvuldig dienen te gebruiken. -Niet-toestaan- blokkeert TENZIJ op andere wijze toegekend.';

$txt['permissiongroup_general'] = 'Algemeen';
$txt['permissionname_view_stats'] = 'Bekijk de forumstatistieken';
$txt['permissionhelp_view_stats'] = 'De forumstatistieken geven alle statistieken van het forum weer, zoals het aantal leden, aantal berichten per dag, en verscheidene top 10 statistieken. Het toestaan van deze permissie laat een link verschijnen onderaan de indexpagina (\'[Meer statistieken]\').';
$txt['permissionname_view_mlist'] = 'Bekijk de ledenlijst';
$txt['permissionhelp_view_mlist'] = 'De ledenlijst toont alle geregistreerde leden van het forum. De lijst kan worden gesorteerd en worden doorzocht. De lijst is gelinkt vanaf de forum index en de statistieken pagina, door te klikken op het aantal leden.';
$txt['permissionname_who_view'] = 'Bekijk wie er online zijn';
$txt['permissionhelp_who_view'] = '\'Gebruikers online\' toont alle leden die online zijn en wat ze aan het doen zijn op dat moment. Deze permissie zal alleen werken als dit is geactiveerd in \'Features en opties\'. Je kunt de lijst bekijken door te klikken op de link in de \'Gebruikers Online\' sectie op de boardindex.';
$txt['permissionname_search_posts'] = 'Zoeken naar berichten en topics';
$txt['permissionhelp_search_posts'] = 'De zoekpermissie staat gebruikers toe alle boards waar zij toegang toe hebben te doorzoeken. Als deze permissie is geactiveerd, zal een \'Zoek\'-knop toegevoegd worden aan de knoppenbalk.';
$txt['permissionname_karma_edit'] = 'Karma van andere leden aanpassen';
$txt['permissionhelp_karma_edit'] = 'Karma is een feature die de populariteit van een lid toont. Om deze feature te kunnen gebruiken, dient deze te zijn geactiveerd in \'Features en opties\'. Deze permissie zal leden de mogelijkheid geven een stem uit te brengen. Gasten kunnen dat niet.';

$txt['permissiongroup_pm'] = 'Persoonlijke berichten';
$txt['permissionname_pm_read'] = 'Lees persoonlijke berichten';
$txt['permissionhelp_pm_read'] = 'Deze permissie staat leden toe om toegang te krijgen tot de persoonlijke berichten-sectie en persoonlijke berichten te ontvangen. Zonder deze permissie kan een gebruiker geen persoonlijke berichten versturen aan dit lid.';
$txt['permissionname_pm_send'] = 'Stuur persoonlijk berichten';
$txt['permissionhelp_pm_send'] = 'Deze permissie staat leden toe om persoonlijke berichten te sturen naar andere leden. Het is noodzakelijk dat de \'Lees persoonlijke berichten\'-permissie aan staat.';

$txt['permissiongroup_calendar'] = 'Kalender';
$txt['permissionname_calendar_view'] = 'Bekijk de kalender';
$txt['permissionhelp_calendar_view'] = 'De kalender toont voor iedere maand de verjaardagen, gebeurtenissen en feestdagen. Met deze permissie krijgt de gebruiker toegang tot de kalender. Als deze permissie is geactiveerd, verschijnt er een knop in de knoppenbalk en zal er een lijst verschijnen onderaan de forumindexpagina met daarop de huidige en aankomende verjaardagen, gebeurtenissen en feestdagen. De kalender dient dan wel te zijn geactiveerd in \'Kalender\'.';
$txt['permissionname_calendar_post'] = 'Voeg gebeurtenissen toe aan de kalender';
$txt['permissionhelp_calendar_post'] = 'Een gebeurtenis is een topic dat gelinkt is aan een bepaalde datum of een periode. Het aanmaken van een gebeurtenis kan worden gedaan vanaf de kalender. Een gebeurtenis kan alleen worden gemaakt als de gebruiker die de gebeurtenis aanmaakt nieuwe berichten mag maken.';
$txt['permissionname_calendar_edit'] = 'Bewerk gebeurtenissen in de kalender';
$txt['permissionhelp_calendar_edit'] = 'Een gebeurtenis is een topic die gelinkt is aan een bepaalde datum of een periode. Een gebeurtenis kan worden bewerkt door op het rode sterretje (*) te klikken naast de gebeurtenis in het kalenderscherm. Om een gebeurtenis te kunnen bewerken, moet de gebruiker voldoende permissies hebben om het eerste bericht van het topic dat aan de gebeurtenis is gekoppeld te kunnen bewerken.';
$txt['permissionname_calendar_edit_own'] = 'Eigen gebeurtenissen';
$txt['permissionname_calendar_edit_any'] = 'Elke gebeurtenis';

$txt['permissiongroup_maintenance'] = 'Forumbeheer';
$txt['permissionname_admin_forum'] = 'Beheer forum en database';
$txt['permissionhelp_admin_forum'] = 'Deze permissie geeft de gebruiker de mogelijkheid om:<ul><li>de forum, database en de thema-instellingen te veranderen</li><li>pakketten te beheren</li><li>gebruik te maken van forum- en databaseonderhoudsgereedschappen</li><li>het bekijken van fouten- en moderatielogs</li></ul>Wees voorzichtig met deze permissie, daar deze erg krachtig is.';
$txt['permissionname_manage_boards'] = 'Beheer boards en categorie&euml;n';
$txt['permissionhelp_manage_boards'] = 'Deze permissie staat toe om boards en categorie&euml;n aan te maken, te wijzigen en te verwijderen.';
$txt['permissionname_manage_attachments'] = 'Beheer bijlagen en avatars';
$txt['permissionhelp_manage_attachments'] = 'Deze permissie verschaft toegang tot het bestandsbeheerder waar alle bijlagen en avatars op een rijtje staan en kunnen worden verwijderd.';
$txt['permissionname_manage_smileys'] = 'Beheer smileys';
$txt['permissionhelp_manage_smileys'] = 'Hiermee kan toegang worden verkregen tot het smileybeheer. In het smileybeheer kun je smileys en smileysets toevoegen, bewerken en verwijderen.';
$txt['permissionname_edit_news'] = 'Bewerk nieuws';
$txt['permissionhelp_edit_news'] = 'De nieuwsfunctie toont willekeurig een nieuwsregel op elk scherm. Om dit te tonen dient dit geactiveerd te zijn in de foruminstellingen.';

$txt['permissiongroup_member_admin'] = 'Ledenbeheer';
$txt['permissionname_moderate_forum'] = 'Beheer forumleden';
$txt['permissionhelp_moderate_forum'] = 'Deze permissie omvat alle belangrijke functies voor ledenbeheer:<ul><li>toegang tot registratiebeheer</li><li>toegang tot \'bekijk/verwijder leden\'-scherm</li><li>uitgebreide profielinformatie, inclusief IP-tracering en (verborgen) online status</li><li>accountactivatie</li><li>ontvang lidgoedkeuringsnotificaties en accountgoedkeuring</li><li>immuun voor PM-negeerlijst</li><li>verscheidene kleine zaken</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Beheer en toekennen van ledengroepen';
$txt['permissionhelp_manage_membergroups'] = 'Met deze permissie kan een gebruiker de ledengroepen beheren en toewijzen aan andere leden.';
$txt['permissionname_manage_permissions'] = 'Beheer permissies';
$txt['permissionhelp_manage_permissions'] = 'Met deze permissie kan een gebruiker alle permissies van een ledengroep bewerken, globaal of voor individuele boards.';
$txt['permissionname_manage_bans'] = 'Beheer banlijst';
$txt['permissionhelp_manage_bans'] = 'Met deze permissie kan een gebruiker namen, IP-adressen, hostnamen en e-mailadressen toevoegen of verwijderen aan de lijst van verbannen gebruikers. Het geeft ook toegang tot het bekijken en verwijderen van logbestanden van verbannen gebruikers die probeerden in te loggen.';
$txt['permissionname_send_mail'] = 'Stuur een forummailing naar leden';
$txt['permissionhelp_send_mail'] = 'Groepsmail naar alle forum leden of slechts enkele ledengroepen via e-mail of persoonlijk bericht (voor de laatste heb je \'Stuur persoonlijk bericht\'-permissie nodig).';

$txt['permissiongroup_profile'] = 'Ledenprofielen';
$txt['permissionname_profile_view'] = 'Bekijk profielsamenvatting en -statistieken';
$txt['permissionhelp_profile_view'] = 'Deze permissie staat gebruikers toe om bij het klikken op een gebruikersnaam een samenvatting van de profiel gegevens, statistieken, en alle berichten van dat lid te bekijken.';
$txt['permissionname_profile_view_own'] = 'Eigen profiel';
$txt['permissionname_profile_view_any'] = 'Elk profiel';
$txt['permissionname_profile_identity'] = 'Bewerk accountinstellingen';
$txt['permissionhelp_profile_identity'] = 'Accountinstellingen zijn de basisinstellingen van een profiel, zoals wachtwoord, e-mailadres, ledengroep en voorkeurstaal.';
$txt['permissionname_profile_identity_own'] = 'Eigen profiel';
$txt['permissionname_profile_identity_any'] = 'Elk profiel';
$txt['permissionname_profile_extra'] = 'Bewerk extra profielinstellingen';
$txt['permissionhelp_profile_extra'] = 'Extra profielinstellingen bevatten instellingen voor avatars, themavoorkeuren, notificaties en persoonlijke berichten.';
$txt['permissionname_profile_extra_own'] = 'Eigen profiel';
$txt['permissionname_profile_extra_any'] = 'Elk profiel';
$txt['permissionname_profile_title'] = 'Bewerk extra titel';
$txt['permissionhelp_profile_title'] = 'De extra titel zie je bij je berichten, onder het profiel van elke gebruiker die deze extra titel heeft.';
$txt['permissionname_profile_title_own'] = 'Eigen profiel';
$txt['permissionname_profile_title_any'] = 'Elk profiel';
$txt['permissionname_profile_remove'] = 'Verwijder account';
$txt['permissionhelp_profile_remove'] = 'Deze permissie staat een gebruiker toe zijn account te verwijderen, als het is ingesteld op \'Eigen account\'.';
$txt['permissionname_profile_remove_own'] = 'Eigen account';
$txt['permissionname_profile_remove_any'] = 'Elk account';
$txt['permissionname_profile_server_avatar'] = 'Selecteer een avatar van de server';
$txt['permissionhelp_profile_server_avatar'] = 'Indien ingesteld, kun je hiermee de gebruiker de mogelijkheid geven om een avatar te selecteren van de avatarverzamelingen die ge&iuml;nstalleerd zijn op de server.';
$txt['permissionname_profile_upload_avatar'] = 'Upload een avatar naar de server';
$txt['permissionhelp_profile_upload_avatar'] = 'Deze permissie zorgt ervoor dat een gebruiker zijn persoonlijke avatar kan uploaden naar de server.';
$txt['permissionname_profile_remote_avatar'] = 'Kies een elders opgeslagen avatar';
$txt['permissionhelp_profile_remote_avatar'] = 'Omdat avatars de laadtijd van een pagina negatief kunnen be&iuml;nvloeden, is het mogelijk om bepaalde ledengroepen niet toe te staan avatars van andere locaties te laten gebruiken.';

$txt['permissiongroup_general_board'] = 'Algemeen';
$txt['permissionname_moderate_board'] = 'Modereer board';
$txt['permissionhelp_moderate_board'] = 'De \'Modereer board\'-permissie voegt een paar permissies toe, zodat een moderator ook een echte moderator wordt. Permissies zoals het reageren op reeds gelockte topics, het veranderen van de verloopdatum van een poll en het bekijken van de resultaten van een poll.';

$txt['permissiongroup_topic'] = 'Topics';
$txt['permissionname_post_new'] = 'Plaats nieuwe topics';
$txt['permissionhelp_post_new'] = 'Deze permissie staat gebruikers toe om nieuwe topics te plaatsen. Met deze permissie is het niet mogelijk om te reageren in een topic.';
$txt['permissionname_merge_any'] = 'Voeg topics samen';
$txt['permissionhelp_merge_any'] = 'Voeg twee of meer topics samen in &eacute;&eacute;n topic. De volgorde van de berichten in het topic worden bepaald door de datum en tijd waarop deze berichten zijn geplaatst. Een gebruiker kan alleen topics samenvoegen op boards waar hij deze rechten heeft. Om meerdere topics ineens samen te voegen dient de gebruiker in zijn profiel quickmoderation te activeren.';
$txt['permissionname_split_any'] = 'Splits topics';
$txt['permissionhelp_split_any'] = 'Splits een topic in twee aparte topics.';
$txt['permissionname_send_topic'] = 'Stuur topics naar vrienden';
$txt['permissionhelp_send_topic'] = 'Deze permissie stelt een gebruiker in staat om een topic naar een vriend te e-mailen door zijn e-mailadres in te vullen en een berichtje er aan toe te voegen.';
$txt['permissionname_make_sticky'] = 'Maak topics sticky';
$txt['permissionhelp_make_sticky'] = 'Sticky topics zijn topics die altijd bovenaan staan in de lijst met topics op een board. Ze kunnen handig zijn voor aankondigingen of andere belangrijke berichten.';
$txt['permissionname_move'] = 'Verplaats topics';
$txt['permissionhelp_move'] = 'Verplaats een topic van het ene board naar een ander board. Gebruikers kunnen alleen een board kiezen waartoe ze toegang hebben.';
$txt['permissionname_move_own'] = 'Eigen topics';
$txt['permissionname_move_any'] = 'Elk topic';
$txt['permissionname_lock'] = 'Zet topics op slot';
$txt['permissionhelp_lock'] = 'Deze permissie stelt een gebruiker in staat om een topic te op slot te zetten (locken) of van het slot af te halen. Dit kan worden gedaan om er zeker van te zijn dat er verder niemand meer reageert. Alleen gebruikers met een \'Modereer board\' permissie zullen dan nog wel kunnen reageren in die topics.';
$txt['permissionname_lock_own'] = 'Eigen topics';
$txt['permissionname_lock_any'] = 'Elk topic';
$txt['permissionname_remove'] = 'Verwijder topics';
$txt['permissionhelp_remove'] = 'Verwijder topics in zijn geheel. Let op dat deze permissie niet is om alleen bepaalde berichten in een topic te kunnen verwijderen!';
$txt['permissionname_remove_own'] = 'Eigen topics';
$txt['permissionname_remove_any'] = 'Elk topic';
$txt['permissionname_post_reply'] = 'Plaats reacties op topics';
$txt['permissionhelp_post_reply'] = 'Deze permissie staat een gebruiker in staat te reageren in topics.';
$txt['permissionname_post_reply_own'] = 'Eigen topics';
$txt['permissionname_post_reply_any'] = 'Elk topic';
$txt['permissionname_modify_replies'] = 'Bewerk reacties in eigen topics';
$txt['permissionhelp_modify_replies'] = 'Deze permissie stelt de topic starter in staat alle reacties van anderen in zijn topic te kunnen aanpassen.';
$txt['permissionname_delete_replies'] = 'Verwijder reacties in eigen topics';
$txt['permissionhelp_delete_replies'] = 'Deze permissie stelt de topic starter in staat alle reacties van anderen in zijn topic te kunnen verwijderen.';
$txt['permissionname_announce_topic'] = 'Kondig topic aan';
$txt['permissionhelp_announce_topic'] = 'Hiermee kun je een aankondings-e-mail sturen over een topic aan alle leden of aan enkele ledengroepen.';

$txt['permissiongroup_post'] = 'Berichten plaatsen';
$txt['permissionname_delete'] = 'Verwijder berichten';
$txt['permissionhelp_delete'] = 'Verwijder berichten. De gebruiker kan niet het eerste bericht in een topic verwijderen.';
$txt['permissionname_delete_own'] = 'Eigen berichten';
$txt['permissionname_delete_any'] = 'Elk bericht';
$txt['permissionname_modify'] = 'Bewerk berichten';
$txt['permissionhelp_modify'] = 'Bewerk berichten';
$txt['permissionname_modify_own'] = 'Eigen berichten';
$txt['permissionname_modify_any'] = 'Elk bericht';
$txt['permissionname_report_any'] = 'Rapporteer berichten aan de moderators';
$txt['permissionhelp_report_any'] = 'Deze permissie voegt een link toe aan elk bericht, dat de gebruiker in staat stelt het bericht te rapporteren aan de moderators. Alle moderators van dat board (inclusief admins) zullen dan een e-mail krijgen met een omschrijving erbij (die door de gebruiker is ingevuld).';

$txt['permissiongroup_poll'] = 'Polls';
$txt['permissionname_poll_view'] = 'Bekijk polls';
$txt['permissionhelp_poll_view'] = 'Deze permissie stelt een gebruiker in staat een poll te bekijken. Zonder deze permissie zal de gebruiker slechts de topic zien zonder de poll.';
$txt['permissionname_poll_vote'] = 'Stemmen in polls';
$txt['permissionhelp_poll_vote'] = 'Deze permissie stelt een (geregistreerd) lid in staat een stem uit te brengen. Dit heeft geen invloed op gasten.';
$txt['permissionname_poll_post'] = 'Plaats polls';
$txt['permissionhelp_poll_post'] = 'Deze permissie stelt een gebruiker in staat een nieuwe poll te plaatsen.';
$txt['permissionname_poll_add'] = 'Voeg een poll toe aan topics';
$txt['permissionhelp_poll_add'] = 'Deze permissie stelt een gebruiker in staat om een poll toe te voegen aan een reeds bestaande topic. Er zijn dan wel voldoende rechten nodig om het eerste bericht in een topic te mogen bewerken.';
$txt['permissionname_poll_add_own'] = 'Eigen topics';
$txt['permissionname_poll_add_any'] = 'Elk topic';
$txt['permissionname_poll_edit'] = 'Bewerk polls';
$txt['permissionhelp_poll_edit'] = 'Deze permissie stelt een gebruiker in staat de opties van een poll te bewerken en een poll te resetten. Om het maximum aantal stemmen en de verloopdatum te kunnen veranderen heeft de gebruiker de \'Modereer board\' permissie nodig.';
$txt['permissionname_poll_edit_own'] = 'Eigen polls';
$txt['permissionname_poll_edit_any'] = 'Elke poll';
$txt['permissionname_poll_lock'] = 'Zet polls op slot';
$txt['permissionhelp_poll_lock'] = 'Het op slot zetten van polls voorkomt dat er nog stemmen kunnen worden uitgebracht.';
$txt['permissionname_poll_lock_own'] = 'Eigen polls';
$txt['permissionname_poll_lock_any'] = 'Elke poll';
$txt['permissionname_poll_remove'] = 'Verwijder polls';
$txt['permissionhelp_poll_remove'] = 'Deze permissie stelt een gebruiker in staat om polls te verwijderen.';
$txt['permissionname_poll_remove_own'] = 'Eigen polls';
$txt['permissionname_poll_remove_any'] = 'Elke poll';

$txt['permissiongroup_notification'] = 'Notificaties';
$txt['permissionname_mark_any_notify'] = 'Verzoek notificatie bij reacties';
$txt['permissionhelp_mark_any_notify'] = 'Deze permissie stelt een gebruiker in staat om een notificatiebericht (e-mail) te krijgen wanneer er een reactie is in een topic waar hij dit heeft aangevraagd.';
$txt['permissionname_mark_notify'] = 'Verzoek notificatie bij nieuwe topics';
$txt['permissionhelp_mark_notify'] = 'Deze permissie stelt een gebruiker in staat om een notificatiebericht (e-mail) te krijgen wanneer er een topic is gestart in een board waar hij dit heeft aangevraagd.';

$txt['permissiongroup_attachment'] = 'Bijlagen';
$txt['permissionname_view_attachments'] = 'Bekijk bijlagen';
$txt['permissionhelp_view_attachments'] = 'Bijlagen (attachments) zijn bestanden die als bijlage zijn geplaatst in berichten. Deze feature kan worden geactiveerd en beheerd in \'Bijlagen en avatars\'. Omdat bijlagen niet direct worden benaderd, kun je ze beschermen tegen downloaden door gebruikers die deze rechten niet hebben.';
$txt['permissionname_post_attachment'] = 'Plaats bijlagen';
$txt['permissionhelp_post_attachment'] = 'Bijlagen (attachments) zijn bestanden die als bijlage zijn geplaatst in berichten. Een bericht kan meerdere attachments bevatten.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Permissieinstellingen';
$txt['groups_manage_permissions'] = 'Ledengroepen die permissies mogen beheren';
$txt['permission_settings_submit'] = 'Opslaan';
$txt['permission_settings_enable_deny'] = 'Zet de optie aan om permissies te kunnen ontzeggen';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Als je deze optie uitschakelt, zullen alle \\\'Ontzeg\\\'-permissies omgezet worden naar \\\'Niet toestaan\\\'.';
$txt['permission_by_membergroup_desc'] = 'Hier kun je de globale permissies per ledengroep aangeven. Deze permissies gelden op alle boards die niet overschreven zijn door lokale permissies in het \'Boardpermissies\'-scherm.';
$txt['permission_by_board_desc'] = 'Hier kun je aangeven of een board de globale permissies gebruikt, of zijn eigen permissies heeft. Lokale permissies houden in dat je voor het board in kwestie voor elke ledengroep andere permissies in kunt stellen.';
$txt['permission_settings_desc'] = 'Hier kun je aangeven wie er permissies in mogen stellen, evenals hoe verfijnd het zou moeten zijn.';
$txt['permission_settings_enable_postgroups'] = 'Schakel permissies voor bericht-gerelateerde ledengroepen in';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Als je deze optie uitschakelt, zullen de permissies voor bericht-gerelateerde groepen verwijderd worden.';
$txt['permission_settings_enable_by_board'] = 'Schakel geavanceerde per-board permissies in.';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Als je deze optie uitschakelt, zullen alle permissies op boardniveau verwijderd worden.';

?>