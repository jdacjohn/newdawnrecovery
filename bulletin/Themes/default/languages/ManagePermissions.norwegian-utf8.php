<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Endre rettigheter';
$txt['permissions_modify'] = 'Rediger';
$txt['permissions_access'] = 'Har tilgang';
$txt['permissions_allowed'] = 'Tillat';
$txt['permissions_denied'] = 'Nektet';

$txt['permissions_switch'] = 'Endre til';
$txt['permissions_global'] = 'Global';
$txt['permissions_local'] = 'Lokal';

$txt['permissions_groups'] = 'Rettigheter etter medlemsgruppe';
$txt['permissions_all'] = 'alle';
$txt['permissions_none'] = 'ingen';
$txt['permissions_set_permissions'] = 'Aktiver rettigheter';

$txt['permissions_with_selection'] = 'Med valgte';
$txt['permissions_apply_pre_defined'] = 'Bruk den forh&aring;ndsdefinerte rettighetsprofilen';
$txt['permissions_select_pre_defined'] = 'Velg en forh&aring;ndsdefinert profil';
$txt['permissions_copy_from_board'] = 'Kopier rettigheter fra denne seksjonen';
$txt['permissions_select_board'] = 'Velg seksjon';
$txt['permissions_like_group'] = 'Sett rettigheter som denne gruppa';
$txt['permissions_select_membergroup'] = 'Velg medlemsgruppe';
$txt['permissions_add'] = 'Legg til rettighet';
$txt['permissions_remove'] = 'Slett rettighet';
$txt['permissions_deny'] = 'Ikke tillat rettighet';
$txt['permissions_select_permission'] = 'Velg en rettighet';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Du kan bare velge et alternativ for å redigere rettighetene';
$txt['permissions_no_action'] = 'Ingenting valgt';
$txt['permissions_deny_dangerous'] = 'Du er nå iferd med å nekte en eller flere rettigheter.\\nDette kan v&ære farlig og gi uventede resultater om du ikke er helt sikker på at ingen er <i>tilfeldigvis</i> i den gruppa eller de gruppene du prøver å nekte tilgang til.\\n\\nEr du sikker på at du vil fortsette?';

$txt['permissions_boards'] = 'Forumbaserte rettigheter';

$txt['permissions_modify_group'] = 'Endre gruppe';
$txt['permissions_general'] = 'Generelle rettigheter';
$txt['permissions_board'] = 'Globale seksjonbaserte rettigheter';
$txt['permissions_commit'] = 'Lagre endringer';
$txt['permissions_modify_local'] = 'Rediger lokale rettigheter';
$txt['permissions_on'] = 'p&aring; seksjonen';
$txt['permissions_local_for'] = 'Lokale rettigheter for gruppe';
$txt['permissions_option_on'] = 'T';
$txt['permissions_option_off'] = 'I';
$txt['permissions_option_deny'] = 'N';
$txt['permissions_option_desc'] = 'For hver rettighet du setter enten Tillatt (T), Ikke tillatt (I) eller <span style="color: red;">Nektet (N)</span>.<br /><br />Husk p&aring; at du ikke bare justerer rettighetene for et medlem, men en hel medlemsgruppe, s&aring;nn at alle i den medlemsgruppa vil ha samme rettighetene.<br />Av denne grunn bruk innstillinga Nektet forsiktig og bare <strong>om n&oslash;dvendig</strong>. Ikke tillatt p&aring; en annen side, nekter bare med mindre det ikke er andre innstillinger.';

$txt['permissiongroup_general'] = 'Generelt';
$txt['permissionname_view_stats'] = 'Vise forum statistikk';
$txt['permissionhelp_view_stats'] = 'Forum statistikk er en side som oppsummerer all statistikk p&aring; forumet, som antall medlemmer, antall innlegg til dagen og en hel rekke topp 10-lister. Ved &aring; aktivere denne rettigheten vil denne linken komme frem: ([Mer statistikk]).';
$txt['permissionname_view_mlist'] = 'Vise medlemslista';
$txt['permissionhelp_view_mlist'] = 'Medlemslista viser alle medlemmene som er registrert p&aring; forumet ditt. Lista kan sorteres og s&oslash;kes p&aring;. Medlemslista blir linket til fra b&aring;de forumets hovedside og statistikksiden, ved &aring; klikke p&aring; antall medlemmer.';
$txt['permissionname_who_view'] = 'Vise Hvem er p&aring;logget';
$txt['permissionhelp_who_view'] = 'Hvem er p&aring;logget viser alle medlemmene som er innlogget og hva de driver med. Denne rettigheten vil kun fungere om du har aktivert alternativet i "Installerte modifikasjoner innstillinger og alternativer". Du kan f&aring; tilgang til "Hvem er p&aring;logget" ved &aring; klikke p&aring; linken i seksjonen Brukere p&aring;logget p&aring; forumets hovedside.';
$txt['permissionname_search_posts'] = 'S&oslash;ke etter innlegg';
$txt['permissionhelp_search_posts'] = 'S&oslash;kerettigheten gir brukeren tilgang til &aring; s&oslash;ke i alle seksjoner han/hun har tilgang til. N&aring;r s&oslash;kerettigheten er aktivert vil en "S&oslash;k" knapp v&aelig;re synlig p&aring; forumets meny.';
$txt['permissionname_karma_edit'] = 'Redigere andres karma';
$txt['permissionhelp_karma_edit'] = 'Karma er en funksjon som viser populariteten til et medlem. For &aring; kunne bruke denne funksjonen, m&aring; den v&aelig;re aktivert i "Installerte modifikasjoner innstillinger og alternativer". Denne rettigheten vil gi en medlemsgruppe tilgang til &aring; avgi stemme. Denne rettigheten har ingen effekt p&aring; gjester.';

$txt['permissiongroup_pm'] = 'Personlige meldinger';
$txt['permissionname_pm_read'] = 'Lese personlige meldinger';
$txt['permissionhelp_pm_read'] = 'Denne rettigheten gir brukeren tilgang til menyen for Personlige meldinger og &aring; lese sine personlige meldinger. Uten denne rettigheten er brukeren ikke istand til &aring; sende private meldinger.';
$txt['permissionname_pm_send'] = 'Sende personlige meldinger';
$txt['permissionhelp_pm_send'] = 'Sende personlige meldinger til registrerte medlemmer. Krever at brukeren har tilgang til &aring; "Lese personlige meldinger".';

$txt['permissiongroup_calendar'] = 'Kalender';
$txt['permissionname_calendar_view'] = 'Vise kalenderen';
$txt['permissionhelp_calendar_view'] = 'Kalenderen viser for hver m&aring;ned f&oslash;dselsdager, hendelser og ferier. Denne rettigheten gir tilgang til denne kalenderen. N&aring;r denne rettigheten er aktivert, vil en kalenderknapp bli vist p&aring; forumets meny &oslash;verst og ikke minst vil kommende f&oslash;dselsdager og hendelser bli vist nederst p&aring; forumets hovedside. Kalenderen m&aring; v&aelig;re aktivert fra "Installerte modifikasjoner innstillinger og alternativer".';
$txt['permissionname_calendar_post'] = 'Opprette hendelser i kalenderen';
$txt['permissionhelp_calendar_post'] = 'En hendelse er et emnet koblet til en spesiell dato eller datoer. Opprettelse av hendelser kan skje fra kalenderen. En hendelse kan kun bli opprettet om brukeren som oppretter hendelsen har tilgang til &aring; lage nye emner.';
$txt['permissionname_calendar_edit'] = 'Redigere hendelser i kalenderen';
$txt['permissionhelp_calendar_edit'] = 'En hendelse er et emne som har en tilkobling til en spesiall dato eller flere datoer. Hendelser kan redigeres ved &aring; klikke p&aring; den r&oslash;de stjerna (*) ved siden av hendelsen i kalenderen. For &aring; kunne redigere hendelsen, m&aring; medlemme ha de n&oslash;dvendige rettighetene til &aring; redigere det f&oslash;rste innlegget i emnet som hendelsen h&oslash;rer til.';
$txt['permissionname_calendar_edit_own'] = 'Egne hendelser';
$txt['permissionname_calendar_edit_any'] = 'Alle hendelser';

$txt['permissiongroup_maintenance'] = 'Forumadministrasjon';
$txt['permissionname_admin_forum'] = 'Adninistrere forumet og databasen';
$txt['permissionhelp_admin_forum'] = 'Denne rettigheten gir medlemmet tilgang til &aring; redigere forumets innstillinger, design innstillinger, behandle pakker og bruke forumets database og vedlikeholdsverkt&oslash;y. Bruk denne rettigheten med omtanke, ettersom den er veldig s&aring;rbar for forumet.';
$txt['permissionname_manage_boards'] = 'Administrere forumer og kategorier';
$txt['permissionhelp_manage_boards'] = 'Denne rettigheten gir medlemmet tilgang til &aring; opprette, redigere og fjerne fora og kategorier.';
$txt['permissionname_manage_attachments'] = 'Administrere vedlegg og avatarer';
$txt['permissionhelp_manage_attachments'] = 'Denne rettigheten gir medlemmet tilgang til administrasjon av vedlegg, hvor avatarer og vedlegg kan bli fjernet.';
$txt['permissionname_manage_smileys'] = 'Administrere smilefjes';
$txt['permissionhelp_manage_smileys'] = 'Denne rettigheten gir medlemmet tilgang til administrasjon av smilefjes, hvor en kan legge til, redigere og fjerne enkelt-smil og sett med smilefjes.';
$txt['permissionname_edit_news'] = 'Redigere nyheter';
$txt['permissionhelp_edit_news'] = 'Nyhetsfunksjonen gj&oslash;r slik at en tilfeldig nyhetsak vil komme frem p&aring; hver side p&aring; forumet. For &aring; kunne bruke nyhetsfunksjonen, m&aring; den v&aelig;re aktivert i forumets innstillinger.';

$txt['permissiongroup_member_admin'] = 'Administrasjon av medlemmer';
$txt['permissionname_moderate_forum'] = 'Redigere p&aring; forumets medlemmer';
$txt['permissionhelp_moderate_forum'] = 'Denne rettigheten inkluderer alle viktige moderatorfunksjoner:<ul><li>tilgang til &aring; vise registeringserkl&aelig;ring</li><li>tilgang til &aring; vise/slette medlemsbildet</li><li>utvidet profilinformasjon som &aring; kunne spore IP/bruker og (skjult) innlogging</li><li>aktivere kontoer</li><li>motta godkjennelsesvarsler og godkjenne kontoer</li><li>immun mot ignorerte PMer</li><li>andre sm&aring;ting</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Administrere medlemsgrupper';
$txt['permissionhelp_manage_membergroups'] = 'Denne rettigheten gir medlemmet tilgang til &aring; redigere medlemsgrupper og tildele disse til medlemmer.';
$txt['permissionname_manage_permissions'] = 'Administrere rettigheter';
$txt['permissionhelp_manage_permissions'] = 'Denne rettigheten gir medlemmet tilagng til &aring; redigere alle rettigheter til en medlemsgruppe, globalt eller for enkelt-forumer.';
$txt['permissionname_manage_bans'] = 'Administrere utestengelser ';
$txt['permissionhelp_manage_bans'] = 'Denne rettigheten gir medlemmet tilgang til &aring; legge til eller fjerne brukernavn, IP-adresser, ISP og epost-adresser p&aring; en liste over utestengte medlemmer. Den gir ogs&aring; tilgang til &aring; se p&aring; og fjerne elementer i loggen , hvor bannlyste medlemmer har fors&oslash;kt &aring; logge inn.';
$txt['permissionname_send_mail'] = 'Sende en e-post til medlemmene';
$txt['permissionhelp_send_mail'] = 'Sender en e-post til alle forumets medlemmer, eller bare noen spesielle medlemsgrupper p&aring; mail eller som PM. (PM alternativet krever tilgang til &aring; "sende private meldinger").';

$txt['permissiongroup_profile'] = 'Medlemsprofiler';
$txt['permissionname_profile_view'] = 'Vise profilen og statistikk for medlemmet';
$txt['permissionhelp_profile_view'] = 'Denne rettigheten gir medlemmer tilgangen til &aring; klikke p&aring; et brukernavn for &aring; se profilen til medlemmet og noe statistikk, samt alle innleggene for medlemmet.';
$txt['permissionname_profile_view_own'] = 'Egen profil';
$txt['permissionname_profile_view_any'] = 'Alle profiler';
$txt['permissionname_profile_identity'] = 'Redigere innstillinger for konto';
$txt['permissionhelp_profile_identity'] = 'Innstillingene for kontoen er de vanlige innstillingene p&aring; profilen som passord, e-postadresse, medlemsgruppe og spr&aring;k.';
$txt['permissionname_profile_identity_own'] = 'Egen profil';
$txt['permissionname_profile_identity_any'] = 'Alle profiler';
$txt['permissionname_profile_extra'] = 'Redigere ekstrainnstillinger for profil';
$txt['permissionhelp_profile_extra'] = 'Ekstrainntillingene for profilen inkluderer innstillinger for avatar, alternativer for design, varsling og personlige meldinger.';
$txt['permissionname_profile_extra_own'] = 'Egen profil';
$txt['permissionname_profile_extra_any'] = 'Alle profiler';
$txt['permissionname_profile_title'] = 'Redigere egendefinert tittel';
$txt['permissionhelp_profile_title'] = 'Den egendefinerte tittelen blir vist p&aring; emnesidene under brukernavnet p&aring; den som har en egendefinert tittel.';
$txt['permissionname_profile_title_own'] = 'Egen profil';
$txt['permissionname_profile_title_any'] = 'Alle profiler';
$txt['permissionname_profile_remove'] = 'Slett konto';
$txt['permissionhelp_profile_remove'] = 'Denne rettigheten gir medlemmet tilgang til &aring; slette sin egen konto om det er satt til "Egen konto".';
$txt['permissionname_profile_remove_own'] = 'Egen konto';
$txt['permissionname_profile_remove_any'] = 'Alle kontoer';
$txt['permissionname_profile_server_avatar'] = 'Velge en avatar fra serveren';
$txt['permissionhelp_profile_server_avatar'] = 'Om dette er aktivert vil du tillate medlemmene &aring; velge en avatar som er lagret p&aring; serveren.';
$txt['permissionname_profile_upload_avatar'] = 'Laste opp en avatar til serveren';
$txt['permissionhelp_profile_upload_avatar'] = 'Denne rettigheten vil tillate et medlem &aring; laste opp sin avatar til serveren.';
$txt['permissionname_profile_remote_avatar'] = 'Velge en ekstern avatar';
$txt['permissionhelp_profile_remote_avatar'] = 'Siden avatarer kan p&aring;virke negativt p&aring; nedlastningstiden, er det mulig &aring; nekte medlemsgrupper &aring; bruke avatarer fra eksterne avatarer.';

$txt['permissiongroup_general_board'] = 'Generelt';
$txt['permissionname_moderate_board'] = 'Forum-moderator';
$txt['permissionhelp_moderate_board'] = 'Ved &aring; v&aelig;re forum-moderator vil noen sm&aring;knapper komme frem. Rettighetene inkluderer &aring; svare til stengte emner, redigere n&aring;r en avstemning skal utl&oslash;pe og vise resultater i en avstemning selv om den ikke er utl&oslash;pt. ';

$txt['permissiongroup_topic'] = 'Emner';
$txt['permissionname_post_new'] = 'Opprette nye emner';
$txt['permissionhelp_post_new'] = 'Denne rettigheten gj&oslash;r slik at medlemmene kan opprette nye emner, men ikke &aring; svare p&aring; emnene.';
$txt['permissionname_merge_any'] = 'Sl&aring; sammen alle emner';
$txt['permissionhelp_merge_any'] = 'Sl&aring; sammen to eller flere emner til ett. Sorteringen av innlegg blir etter dato, noe som kan f&oslash;re til at rekkef&oslash;lgen blir forandret deretter. Et medlem kan kun sl&aring; sammen emner i de forumene medlemmet har tilgang til &aring; gj&oslash;re dette. For &aring; kunne sl&aring; sammen flere emner p&aring; en gang, m&aring; knappene for hurtigmod v&aelig;re aktivert i profilen.';
$txt['permissionname_split_any'] = 'Dele opp alle emner';
$txt['permissionhelp_split_any'] = 'Dele et emne til to ulike emner.';
$txt['permissionname_send_topic'] = 'Sende emner til venner';
$txt['permissionhelp_send_topic'] = 'Denne rettigheten gir medlemmet muligheten til &aring; sende en e-post med et tips til emnet ved &aring; skrive inn mottakerens e-postadresse og legge til en kommentar.';
$txt['permissionname_make_sticky'] = 'Gj&oslash;re emner viktige';
$txt['permissionhelp_make_sticky'] = 'Viktige emner er emner som alltid er &oslash;verst i en forum. De brukes ofte til kunngj&oslash;ringer eller andre viktige beskjeder.';
$txt['permissionname_move'] = 'Flytte emner';
$txt['permissionhelp_move'] = 'Flytte emner fra en forum til en annen. Medlemmene kan bare velge forumer de har tilgang til.';
$txt['permissionname_move_own'] = 'Egne emner';
$txt['permissionname_move_any'] = 'Alle emner';
$txt['permissionname_lock'] = 'Stenge emner';
$txt['permissionhelp_lock'] = 'Denne rettigheten gj&oslash;r slik at medlemmer kan stenge et emne. Dette kan gj&oslash;re slik at ingen kan svare p&aring; emnet. Kun medlemmer med en "forumsmoderator" tilgang kan fremdeles svare i stengte emner.';
$txt['permissionname_lock_own'] = 'Egne emner';
$txt['permissionname_lock_any'] = 'Alle emner';
$txt['permissionname_remove'] = 'Slette emner';
$txt['permissionhelp_remove'] = 'Sletter hele emner fra forumet. Merk at denne rettigheten ikke gir tilgang til kun &aring; slette innlegg fra et emne!';
$txt['permissionname_remove_own'] = 'Egne emner';
$txt['permissionname_remove_any'] = 'Alle emner';
$txt['permissionname_post_reply'] = 'Svare p&aring; emner';
$txt['permissionhelp_post_reply'] = 'Denne rettigheten tillater medlemmet &aring; svare p&aring; emner.';
$txt['permissionname_post_reply_own'] = 'Egne emner';
$txt['permissionname_post_reply_any'] = 'Alle emner';
$txt['permissionname_modify_replies'] = 'Redigere svar til egne emner';
$txt['permissionhelp_modify_replies'] = 'Denne rettigheten gir medlemmet som startet et emne til &aring; redigere alle svarene i sitt emne.';
$txt['permissionname_delete_replies'] = 'Slette svar til egne emner';
$txt['permissionhelp_delete_replies'] = 'Denne rettigheten gir medlemmet som startet et emne til &aring; slette alle svarene i sitt emne.';
$txt['permissionname_announce_topic'] = 'Sett emne som kunngj&oslash;ring';
$txt['permissionhelp_announce_topic'] = 'Denne rettigheten gir medlemmet tilgang til &aring; sende en epost om kunngj&oslash;ring, til alle medlemmer eller noen f&aring; medlemsgrupper.';

$txt['permissiongroup_post'] = 'Innlegg';
$txt['permissionname_delete'] = 'Slette innlegg';
$txt['permissionhelp_delete'] = 'Sletter innlegg. Dette gir ikke tilgang til &aring; slette det f&oslash;rste innlegget i et emne.';
$txt['permissionname_delete_own'] = 'Egne innlegg';
$txt['permissionname_delete_any'] = 'Alle innlegg';
$txt['permissionname_modify'] = 'Redigere innlegg';
$txt['permissionhelp_modify'] = 'Redigerer innlegg';
$txt['permissionname_modify_own'] = 'Egne innlegg';
$txt['permissionname_modify_any'] = 'Alle innlegg';
$txt['permissionname_report_any'] = 'Rapportere innlegg til moderator';
$txt['permissionhelp_report_any'] = 'Denne rettigheten legger til en link til hvert innlegg som gir medlemmene tilgang til &aring; rapportere innlegg til moderator. Ved rapportering blir alle moderatorer for det forumet tilsendt en e-post med en link til det rapporterte innlegget og en kommentar fra medlemmet som rapporterte.';

$txt['permissiongroup_poll'] = 'Avstemninger';
$txt['permissionname_poll_view'] = 'Vise avstemninger';
$txt['permissionhelp_poll_view'] = 'Denne rettigheten gir medlemmet tilgang til &aring; vise avstemninger. Without this permission, the user will only see the topic.';
$txt['permissionname_poll_vote'] = 'Stemme i avstemninger';
$txt['permissionhelp_poll_vote'] = 'Denne rettigheten gir et registrert medlem til &aring; avgi stemme i avstemninger. Denne gjelder ikke for gjester.';
$txt['permissionname_poll_post'] = 'Lage avstemninger';
$txt['permissionhelp_poll_post'] = 'Denne rettigheten gir et medlem &aring; lage nye avstemninger. Siden avstemninger er en spesiell type emner kan den ikke brukes uten at medlemmet har tilgang til rettigheten "Opprette nye emner".';
$txt['permissionname_poll_add'] = 'Legge til avstemninger til emner';
$txt['permissionhelp_poll_add'] = 'Denne rettigheten gir medlemmer tilgang til &aring; legge til en avstemning til et emne som allerede eksisterer. Denne rettigheten krever at medlemmet har tilgang til &aring; redigere det f&oslash;rste innlegget i et emne.';
$txt['permissionname_poll_add_own'] = 'Egne emner';
$txt['permissionname_poll_add_any'] = 'Alle emner';
$txt['permissionname_poll_edit'] = 'Redigere avstemninger';
$txt['permissionhelp_poll_edit'] = 'Denne rettigheten gir medlemmer tilgang til &aring; redigere alternativene for en avstemning og nullstille antall stemmer. For &aring; kunne redigere maks antall stemmer og varighet m&aring; medlemmet ogs&aring; ha rettigheten "forummoderator".';
$txt['permissionname_poll_edit_own'] = 'Egne avstemninger';
$txt['permissionname_poll_edit_any'] = 'Alle avstemninger';
$txt['permissionname_poll_lock'] = 'Stenge avstemninger';
$txt['permissionhelp_poll_lock'] = 'Stengte avstemninger kan ikke motta flere stemmer.';
$txt['permissionname_poll_lock_own'] = 'Egne avstemninger';
$txt['permissionname_poll_lock_any'] = 'Alle avstemninger';
$txt['permissionname_poll_remove'] = 'Slette avstemninger';
$txt['permissionhelp_poll_remove'] = 'Denne rettigheten tillater sletting av avstemninger.';
$txt['permissionname_poll_remove_own'] = 'Egne avstemninger';
$txt['permissionname_poll_remove_any'] = 'Alle avstemninger';

$txt['permissiongroup_notification'] = 'Varsling';
$txt['permissionname_mark_any_notify'] = 'Be om varsling ved svar';
$txt['permissionhelp_mark_any_notify'] = 'Denne funksjonen gir medlemmer tilgang til &aring; f&aring; varsel p&aring; e-post n&aring;r noen svarer til et emne de har abonnert p&aring;.';
$txt['permissionname_mark_notify'] = 'Be om varsling ved nye emner';
$txt['permissionhelp_mark_notify'] = 'Varsling ved nye emner er en funksjon som lar medlemmer f&aring; varsel p&aring; e-post om noen lager nye emner i forumer de har abonnert p&aring;.';

$txt['permissiongroup_attachment'] = 'Vedlegg';
$txt['permissionname_view_attachments'] = 'Vise vedlegg';
$txt['permissionhelp_view_attachments'] = 'Vedlegg er filer som er vedlagt til skrevne innlegg. Denne funksjonen kan aktiveres og konfigureres i "Rediger installerte modifikasjoner". Siden vedlegg ikke blir hentet fra direkte, kan du beskytte dem fra &aring; bli nedlastet fra medlemmer som ikke har denne rettigheten.';
$txt['permissionname_post_attachment'] = 'Legge ved filer';
$txt['permissionhelp_post_attachment'] = 'Vedlegg er filer som er vedlagt til skrevne innlegg. Et innlegg kan inneholde flere vedlegg.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Rettighetsinnstillinger';
$txt['groups_manage_permissions'] = 'Medlemsgrupper med tilgang til &aring; behandle rettigheter';
$txt['permission_settings_submit'] = 'Lagre';
$txt['permission_settings_enable_deny'] = 'Aktivere funksjonen til &aring; nekte rettigheter';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Ved &aring; sl&aring; av denne funksjonen vil "Nektet"-rettigheter bli endret til "Ikke tillatt".';
$txt['permission_by_membergroup_desc'] = 'Her kan du stille inn globale rettigheter for hver medlemsgruppe. Disse rettighetene er gyldige p&aring; fora som ikke har blitt overstyrt med lokale rettigheter.';
$txt['permission_by_board_desc'] = 'Her kan du stille inn om et forum bruker globale rettigheter eller en spesifikk rettighetsprofil. Ved &aring; bruke lokale rettigheter menes det kun for det forumet. Du kan sette rettighet for hver medlemsgruppe.';
$txt['permission_settings_desc'] = 'Her kan du stille inn hvem som har tilgang til &aring; endre rettigheter og hvor avansert rettighetssysteme skal v&aelig;re.';
$txt['permission_settings_enable_postgroups'] = 'Aktivere rettigheter for innleggsbaserte grupper';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Deaktivering av denne innstillingen vil fjerne rettighetene som er satt for innleggsbaserte grupper.';
$txt['permission_settings_enable_by_board'] = 'Aktivere avanserte forumrettigheter';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = ' Deaktivering av denne innstillingen vil fjerne rettighetene satt p&aring; de aktuelle fora med egne innstillinger.';

?>