<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Håndter tilladelser';
$txt['permissions_modify'] = 'Ændre';
$txt['permissions_access'] = 'Adgang';
$txt['permissions_allowed'] = 'Tilladt';
$txt['permissions_denied'] = 'Nægtet';

$txt['permissions_switch'] = 'Skift til';
$txt['permissions_global'] = 'Global';
$txt['permissions_local'] = 'Lokal';

$txt['permissions_groups'] = 'Tilladelser ved medlemsgruppe';
$txt['permissions_all'] = 'alle';
$txt['permissions_none'] = 'ingen';
$txt['permissions_set_permissions'] = 'Sæt tilladelser';

$txt['permissions_with_selection'] = 'Med valg';
$txt['permissions_apply_pre_defined'] = 'Sæt pre-defineret tilladelsesprofil';
$txt['permissions_select_pre_defined'] = 'Vælg en pre-defineret profil';
$txt['permissions_copy_from_board'] = 'Kopier tilladelser fra dette board';
$txt['permissions_select_board'] = 'Vælg et board';
$txt['permissions_like_group'] = 'Sæt tilladelser så de svarer til denne gruppe';
$txt['permissions_select_membergroup'] = 'Vælg en medlemsgruppe';
$txt['permissions_add'] = 'Tilføj tilladelse';
$txt['permissions_remove'] = 'Fjern tilladelse';
$txt['permissions_deny'] = 'Nægt tilladelse';
$txt['permissions_select_permission'] = 'Vælg en tilladelse';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Du kan kun vælge en funktion at ændre tilladelser for';
$txt['permissions_no_action'] = 'Ingen funktion valgt';
$txt['permissions_deny_dangerous'] = 'Du er ved at nægte en eller flere tilladelser.\\nDette kan være farligt og medføre uventede resultater, hvis du ikke er sikker at ingen tilfældigvis er i gruppen, eller grupper du nægter tilladelser til.\\n\\nEr du sikker på at du vil fortsætte?';

$txt['permissions_boards'] = 'Tilladelser ved Board';

$txt['permissions_modify_group'] = 'Ændre gruppe';
$txt['permissions_general'] = 'Generelle tilladelser';
$txt['permissions_board'] = 'Globale Board tilladelser';
$txt['permissions_commit'] = 'Gem ændringer';
$txt['permissions_modify_local'] = 'Ændre lokale tilladelser';
$txt['permissions_on'] = 'på board';
$txt['permissions_local_for'] = 'Lokale tilladelser for gruppe';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = 'For hver tilladelse kan du vælge enten \'Tillad\' (A), \'Afvis\' (X), eller <span style="color: red;">\'Forbudt\' (D)</span>.<br /><br />Husk at hvis du nægter en tilladelse, vil ethvert medlem - moderator eller ej - som er i den gruppe, også blive nægtet adgang.<br />Af denne grund, bør du bruge \'Afvis\' med forsigtighed, og kun når det er <b>nødvendigt</b>. På den anden side forbyder \'Afvis\' alt, medmindre andre tilladelser giver tilladelse.';

$txt['permissiongroup_general'] = 'Generelt';
$txt['permissionname_view_stats'] = 'Se forum statistik';
$txt['permissionhelp_view_stats'] = 'Forum statistiker er en side med optælning af al statistik på forumet, såsom medlemsantal, antal daglige posteringer, og forskellige top 10 statistikker. Aktivering af dette link, tilføjer et link i bunden af indexet (\'[Flere stats]\').';
$txt['permissionname_view_mlist'] = 'Se medlemsliste';
$txt['permissionhelp_view_mlist'] = 'Medlemslisten viser alle medlemmer som er registreret på dit forum. Listen kan blive sorteret og søgt i. Medlemslisten er linket til fra både boardindexet og stats siden, ved at klikke på antallet af medlemmer.';
$txt['permissionname_who_view'] = 'Se hvem er online';
$txt['permissionhelp_who_view'] = 'Hvem er online viser alle medlemmer som nu er online, og hvad de i øjeblikket foretager sig. Denne tilladelse vil virke hvis du har aktiveret den i \'Funktioner\'. Du kan tilgå \'Hvem er online\' skærmen ved at klikke linket i  \'Brugere online\' sektionen på boardindexet.';
$txt['permissionname_search_posts'] = 'Søg efter post og emner';
$txt['permissionhelp_search_posts'] = 'Søgetilladelsen giver brugeren ret til at søge i alle boards vedkommende har adgang til. Når \'Søg efter post og emner\' er aktiveret, vil en \'Søg\' knap være synlig i forummets topbar (Menuen i toppen).';
$txt['permissionname_karma_edit'] = 'Ændre andre folks karma';
$txt['permissionhelp_karma_edit'] = 'Karma er en funktion der viser populariteten hos et medlem. For at kunne bruge denne funktion, skal du have aktiveret den i \'Funktiner og valg\'. Denne rettighed vil tillade en medlemsgruppe at stemme. Tilladelsen har ikke effekt på gæster.';

$txt['permissiongroup_pm'] = 'Personlig besked';
$txt['permissionname_pm_read'] = 'Læs personlig besked';
$txt['permissionhelp_pm_read'] = 'Denne rettighed giver brugere adgang til \'personlig besked\' -sektionen og ret til at læse deres  personlige beskeder. Uden denne rettighed, kan en bruger ikke sende personlige beskeder.';
$txt['permissionname_pm_send'] = 'Send personlig besked';
$txt['permissionhelp_pm_send'] = 'Send personlige beskeder til andre registrerede medlemmer. Kræver at \'Læs personlig besked\' også er markeret.';

$txt['permissiongroup_calendar'] = 'Kalender';
$txt['permissionname_calendar_view'] = 'Se kalenderen';
$txt['permissionhelp_calendar_view'] = 'Kalenderen viser for hver måned, fødselsdage, begivenheder og feriedage. Tilladelsen her giver adgang til denne. Såfremt den er aktiveret, vil en knap blive tilføjet til topbaren (menuen i toppen af forummet) og en liste vil blive vist i bunden af boardindexet med nuværende kommende fødselsdage, begivenheder og feriedage. Kalenderen skal yderligere være aktiveret fra \'Redigere funktioner og valg\' under \'Forum Kontrol\'.';
$txt['permissionname_calendar_post'] = 'Opret begivenheder i kalenderen';
$txt['permissionhelp_calendar_post'] = 'En begivenhed er et emne, som er linket til en bestemt eller flere datoer. Oprettelse af begivenheder kan gøres fra kalenderen. En begivenhed kan kun oprettes, hvis brugeren har tilladelse til at poste nye emner.';
$txt['permissionname_calendar_edit'] = 'Rediger begivenheder i kalenderen';
$txt['permissionhelp_calendar_edit'] = 'En begivenhed er et emne, som er linket til en eller flere bestemte datoer. En begivenhed kan editeres ved at klikke det røde jokertegn (*) ved siden af begivenheden i kalenderen. For at kunne editere en begivenhed, skal brugeren have tilstrækkelige rettigheder til at editere den første besked i emnet som er linket til begivenheden.';
$txt['permissionname_calendar_edit_own'] = 'Egne begivenheder';
$txt['permissionname_calendar_edit_any'] = 'Andre begivenheder';

$txt['permissiongroup_maintenance'] = 'Forum administration';
$txt['permissionname_admin_forum'] = 'Administrer forum og database';
$txt['permissionhelp_admin_forum'] = 'Denne rettighed tillader en bruger at:<ul><li>ændre forum, database og tema indstilinger</li><li>administrere pakker</li><li>bruge forum og vedligeholdelsesværktøjer i databasen </li><li>Læse fejl og moderations logs</li></ul> Brug denne tilladelse med forsigtighed, den er meget kraftfuld.';
$txt['permissionname_manage_boards'] = 'Administrer boards og kategorier';
$txt['permissionhelp_manage_boards'] = 'Denne rettighed tillader oprettelse, editering og fjernelse af boards og kategorier.';
$txt['permissionname_manage_attachments'] = 'Administrer vedhæftninger og avatars';
$txt['permissionhelp_manage_attachments'] = 'Denne tilladelse tillader adgang til \'vedhæftingsadministrering\' under \'Forum\', hvor alle vedhæftinger og  avatars er listet og kan blive fjernet.';
$txt['permissionname_manage_smileys'] = 'Administrer smileys';
$txt['permissionhelp_manage_smileys'] = 'Dette giver tilladelse til smiley centret. Der kan du tilføje, redigere og fjerne smileys og smiley sæt.';
$txt['permissionname_edit_news'] = 'Rediger nyheder';
$txt['permissionhelp_edit_news'] = 'Denne funktion tillader en tilfældig nyhedslinie fra liste af nyheder at vise sig i toppen af hver skærm. For at bruge denne funktion, skal den være aktiveret i forum indstillingerne.';

$txt['permissiongroup_member_admin'] = 'Medlemsadministration';
$txt['permissionname_moderate_forum'] = 'Moderér forummedlemmer';
$txt['permissionhelp_moderate_forum'] = 'Denne tilladelse inkluderer alle vigtige medlems moderationsfunktioner:<ul><li>adgang til registrerings administration</li><li>adgang til at læse/slette medlems skærm</li><li>udviddet profil info, og spor IP/bruger og (skjult) online status</li><li>aktivere kontoer</li><li>modtage godkendelsesbeskeder og godkende konti</li><li>imun til at ignorere PM</li><li>andre små ting</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Administrer og tilegn medlemsgrupper';
$txt['permissionhelp_manage_membergroups'] = 'Denne tilladelse giver en bruger lov til at editere medlemsgrupper og tilegne  medlemsgrupper til andre medlemmer.';
$txt['permissionname_manage_permissions'] = 'Administrer tilladelser';
$txt['permissionhelp_manage_permissions'] = 'Denne funktion tillalder en bruger at editere alle tilladelser til en medlemgruppe, globalt eller for individuelle boards.';
$txt['permissionname_manage_bans'] = 'Administrer forvisningslisten';
$txt['permissionhelp_manage_bans'] = 'Denne funktion tillader en bruger at fjerne brugernavne, IP adresser, hostnavne og email adresser på en liste af forbydne bruger. Den tillader også at læse og fjerne log filer over forbydne brugere som prøvede at logge ind.';
$txt['permissionname_send_mail'] = 'Send en forum email til medlemmer';
$txt['permissionhelp_send_mail'] = 'Masse mail alle forum medlemmer, eller kun nogle få medlemsgrupper ved email eller personlig besked (stigen kræver \'Send personlig besked\' tilladelse).';

$txt['permissiongroup_profile'] = 'Medlemsprofiler';
$txt['permissionname_profile_view'] = 'Se oplysninger og stats for profiler';
$txt['permissionhelp_profile_view'] = 'Denne tilladelse giver en bruger tilladelse til at klikke på et brugernavn og se oversigt over profilindstillinger, statistikker og alle beskeder fra brugeren.';
$txt['permissionname_profile_view_own'] = 'Egen profil';
$txt['permissionname_profile_view_any'] = 'Enhver profil';
$txt['permissionname_profile_identity'] = 'Rediger kontoindstillinger';
$txt['permissionhelp_profile_identity'] = 'Kontoindstillinger er grundlæggende indstillinger af en profil, såsom kodeord, e-mail adresse, gruppemedlemsskab og foretrukkent sprog.';
$txt['permissionname_profile_identity_own'] = 'Egen profil';
$txt['permissionname_profile_identity_any'] = 'Enhver profil';
$txt['permissionname_profile_extra'] = 'Rediger øvrige profil-indstillinger';
$txt['permissionhelp_profile_extra'] = 'Øvrige profil-indstillinger indeholder indstillinger for avatars, tema indstillinger, abonnement og personlige beskeder.';
$txt['permissionname_profile_extra_own'] = 'Egen profil';
$txt['permissionname_profile_extra_any'] = 'Enhver profil';
$txt['permissionname_profile_title'] = 'Rediger valgbar titel';
$txt['permissionhelp_profile_title'] = 'Den valgbare titel er vist på emnesiden, under hver brugers profil af hver bruger der har en sådan.';
$txt['permissionname_profile_title_own'] = 'Egen profil';
$txt['permissionname_profile_title_any'] = 'Enhver profil';
$txt['permissionname_profile_remove'] = 'Slet konto';
$txt['permissionhelp_profile_remove'] = 'Denne funktion giver en bruger ret til at slette sin konto, når sat til \'Egen konto\'.';
$txt['permissionname_profile_remove_own'] = 'Egen konto';
$txt['permissionname_profile_remove_any'] = 'Enhver konto';
$txt['permissionname_profile_server_avatar'] = 'Vælge bannere fra serveren';
$txt['permissionhelp_profile_server_avatar'] = 'Hvis dette punkt er aktivt, vil det tillade en bruger at vælge en banner fra bannersamlingen som er installeret på serveren.';
$txt['permissionname_profile_upload_avatar'] = 'Upload bannere til serveren';
$txt['permissionhelp_profile_upload_avatar'] = 'Denne rettighed vil give brugeren tilladelse til at uploade egenbannere til serveren.';
$txt['permissionname_profile_remote_avatar'] = 'Vælg en eksternt lagrede bannere';
$txt['permissionhelp_profile_remote_avatar'] = 'Fordi bannere kan have negativ indflydelse på tiden det tager at indlæse hver side, er det muligt at forbyde udvalgte medlemsgrupper at bruge bannere fra eksterne servere. ';

$txt['permissiongroup_general_board'] = 'Generelt';
$txt['permissionname_moderate_board'] = 'Moderer board';
$txt['permissionhelp_moderate_board'] = 'Moderer board tilladelsen giver nogle få mindre tilladelser der gør en moderator til en virkelig moderator. Tilladelser inkluderer svar på låste emner, ændring af udløbstid- og læsnig af afstemingsresultater.';

$txt['permissiongroup_topic'] = 'Emner';
$txt['permissionname_post_new'] = 'Oprette nyt emne';
$txt['permissionhelp_post_new'] = 'Denne tilladelse giver brugere ret til at poste ny emner. Den giver ikke tilladelse til at poste svar til emner.';
$txt['permissionname_merge_any'] = 'Flette ethvert emne';
$txt['permissionhelp_merge_any'] = 'Flette to eller flere emner til et. Rækkefølgen af beskeder i den flettede meddelelse vil være baseret på tiden for hvornår det er postet. En bruger kan kun flette emner på de boards hvor en bruger er tilladt at flette. For at kunne flette flere emner på en gang, en bruger skal have aktiveret hurtigedition i deres profil indstillinger.';
$txt['permissionname_split_any'] = 'Splitte ethvert emne';
$txt['permissionhelp_split_any'] = 'Split et emne over i to separate emner.';
$txt['permissionname_send_topic'] = 'Sende emner til venner';
$txt['permissionhelp_send_topic'] = 'Denne tilladelse giver en bruger tilladelse til at maile et emne til en ven, ved at tilføje deres e-mail adresse tillader tillader tilføjelse af besked.';
$txt['permissionname_make_sticky'] = 'Fremhæve et emne';
$txt['permissionhelp_make_sticky'] = 'Emner der er fremhævet (mærket med en knappenål), forbliver altid i toppen af et board. De kan være anvendelige for annonceringer eller andre vigtige beskeder.';
$txt['permissionname_move'] = 'Flytte et emne';
$txt['permissionhelp_move'] = 'Flytter et emne fra et board til et andet board. Brugere kan kun vælge destinationsboards som de er tilladt adgang til.';
$txt['permissionname_move_own'] = 'Eget emne';
$txt['permissionname_move_any'] = 'Ethvert emne';
$txt['permissionname_lock'] = 'Låse emner';
$txt['permissionhelp_lock'] = 'Denne tilladelse giver en bruger adgang til at låse et emne. Dette kan gøres for at være sikker på at ingen kan svare på på det emne. Kun brugere med \'Moderer board\' tilladelse kan stille post i emner i låst position .';
$txt['permissionname_lock_own'] = 'Eget emne';
$txt['permissionname_lock_any'] = 'Ethvert emne';
$txt['permissionname_remove'] = 'Slette emne';
$txt['permissionhelp_remove'] = 'Slet emne. Bemærk at denne rettighed ikke tillader en bruger at fjerne de enkeltesvar i et emne.';
$txt['permissionname_remove_own'] = 'Egne emner';
$txt['permissionname_remove_any'] = 'Alle emner';
$txt['permissionname_post_reply'] = 'Poste svar til emner ';
$txt['permissionhelp_post_reply'] = 'Denne tilladelse giver lov til at svare på emner .';
$txt['permissionname_post_reply_own'] = 'Eget emne';
$txt['permissionname_post_reply_any'] = 'Ethvert emne';
$txt['permissionname_modify_replies'] = 'Ændre svar til egne emner';
$txt['permissionhelp_modify_replies'] = 'Denne tilladelse giver en bruger der startede et emne ret til at ændre i alle følgende svar i dette.';
$txt['permissionname_delete_replies'] = 'Slette svar i egne emner';
$txt['permissionhelp_delete_replies'] = 'Denne rettighed giver tilladelse for brugeren til at slette de svar der ønskes slettet i egne oprettede emner.';
$txt['permissionname_announce_topic'] = 'Annoncer emne';
$txt['permissionhelp_announce_topic'] = 'Dette tillader at sende en annonce e-mail om et emne til alle medlemmer eller kun nogle få medlemsgrupper.';

$txt['permissiongroup_post'] = 'Postning';
$txt['permissionname_delete'] = 'Fjerne emner ';
$txt['permissionhelp_delete'] = 'Slet emner som et hele. Denne tilladelse giver ikke adgang til at slette specifikke beskeder i emnet!';
$txt['permissionname_delete_own'] = 'Eget emne';
$txt['permissionname_delete_any'] = 'Ethvert emne';
$txt['permissionname_modify'] = 'Ændre i beskeder';
$txt['permissionhelp_modify'] = 'Rediger beskeder';
$txt['permissionname_modify_own'] = 'Egen besked';
$txt['permissionname_modify_any'] = 'Enhver besked';
$txt['permissionname_report_any'] = 'Kan anmelde beskeder til moderatorer';
$txt['permissionhelp_report_any'] = 'Denne tilladelse tilføjer et link til hver besked, der tillader en bruger at anmelde en besked til en moderator. Ved anmeldelsen, modtager alle moderatorer i det pågældende board en e-mail med et link til den anmeldte besked, samt en beskrivelse af problemet (som oplyst af den anmeldende bruger).';

$txt['permissiongroup_poll'] = 'Afstemninger (Polls)';
$txt['permissionname_poll_view'] = 'Læse afstemninger';
$txt['permissionhelp_poll_view'] = 'Denne tilladelse tillader en bruger til at se afstemninger. Uden denne tilladelse, vil brugeren kun kunne se emnet.';
$txt['permissionname_poll_vote'] = 'Stemme i afstemninger';
$txt['permissionhelp_poll_vote'] = 'Denne tilladelse giver (registrerede) brugere lov at afgive en stemme. Dette gælder ikke gæster.';
$txt['permissionname_poll_post'] = 'Oprette afstemninger';
$txt['permissionhelp_poll_post'] = 'Denne tilladelse giver en bruger ret til at kreere en ny afstemning. Eftersom afstemninger oprettes i emner, kan du ikke bruge denne tilladelse uden \'Oprette nyt emne\' tilladelsen.';
$txt['permissionname_poll_add'] = 'Tilføje afstemning til emner';
$txt['permissionhelp_poll_add'] = 'Tilføje afstemning til emner  tillader en bruger at føje en afstemning til emner som er lavet. Denne tilladelse kræver specielle rettigheder til at editere den første besked i et emne.';
$txt['permissionname_poll_add_own'] = 'Egne emner ';
$txt['permissionname_poll_add_any'] = 'Ethvert emne ';
$txt['permissionname_poll_edit'] = 'Redigere afstemninger';
$txt['permissionhelp_poll_edit'] = 'Denne tilladelse tillader at redigere de enkelte punkter i en afstemning, samt nulstille denne. For at kunne editere maximum antal stemmer og udløbstiden, skal en bruger have \'Moderer board\' tilladelse.';
$txt['permissionname_poll_edit_own'] = 'Egen afstemning';
$txt['permissionname_poll_edit_any'] = 'Enhver afstemning';
$txt['permissionname_poll_lock'] = 'Låse afstemninger';
$txt['permissionhelp_poll_lock'] = 'Låsning af afstemninger låser for tilføjelse af flere stemmer.';
$txt['permissionname_poll_lock_own'] = 'Egen afstemning';
$txt['permissionname_poll_lock_any'] = 'Enhver afstemning';
$txt['permissionname_poll_remove'] = 'Fjerne afstemninger';
$txt['permissionhelp_poll_remove'] = 'Denne tilladelse giver lov at fjerne afstemninger.';
$txt['permissionname_poll_remove_own'] = 'Egen afstemning';
$txt['permissionname_poll_remove_any'] = 'Enhver afstemning';

$txt['permissiongroup_notification'] = 'Abonnering';
$txt['permissionname_mark_any_notify'] = 'Abonnér på svar';
$txt['permissionhelp_mark_any_notify'] = 'Dette valg tillader brugeren at modtage en besked når nogen svarer på et emne der abbonneres på.';
$txt['permissionname_mark_notify'] = 'Abonnering på nye emner ';
$txt['permissionhelp_mark_notify'] = 'Abonnéring på ny emner er en funktion der tillader en bruger at modtage en mail hver gang et emne er lavet på boardet de abbonnerer på.';

$txt['permissiongroup_attachment'] = 'Vedhæftinger';
$txt['permissionname_view_attachments'] = 'Læs vedhæftinger';
$txt['permissionhelp_view_attachments'] = 'Vedhæftinger er filer som er vedhæftet en postet besked. Denne funktion kan aktiveres i \'Rediger funktioner og valg\'. Siden vedhæftinger ikke hæftet direkte til en besked, kan du forhindre download for bruger der ikke har denne rettighed.';
$txt['permissionname_post_attachment'] = 'sende vedhæftinger';
$txt['permissionhelp_post_attachment'] = 'Vedhæftinger er filer der er vedhæftet til postede beskeder. En besked kan indeholde flere vedhæftinger.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Tilladelsesindstillinger';
$txt['groups_manage_permissions'] = 'Medlemsgrupper der kan ændre rettigheder';
$txt['permission_settings_submit'] = 'Gem';
$txt['permission_settings_enable_deny'] = 'Aktivér muligheden for at kunne nægte rettigheder';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Hvis du slår denne mulighed til, bliver \\\'Nægt\\\'-rettigheder til \\\'Afvis\\\'.';
$txt['permission_by_membergroup_desc'] = 'Her kan du ændre de globale rettigheder for hver medlemsgruppe. Disse rettigheder gælder for alle boards der ikke bliver overstyret af lokale rettigheder for disse, sat i \'Tilladelser ved Board\'-fanen.';
$txt['permission_by_board_desc'] = 'Her kan du bestemme om et board bruger de globale rettigheder, eller om dette skal operere efter specifikke rettigheder. Hvis der bruges lokale rettigheder, kan du sætte specifikke tilladelser for hver medlemsgruppe.';
$txt['permission_settings_desc'] = 'Her kan du bestemme hvem der har rettigheder til at ændre i rettigheder, såvel som hvor avanceret rettighedssystemet skal være.';
$txt['permission_settings_enable_postgroups'] = 'Aktivér specielle rettigheder for brugere med et vis antal beskeder';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Deaktivering af denne indstilling vil fjerne tilladelser som i øjeblikket er sat til postbaserede grupper';
$txt['permission_settings_enable_by_board'] = 'Aktivér avancerede board-rettigheder';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Déaktiverer du denne indstilling, fjerner du alle rettigheder på board level.';

?>