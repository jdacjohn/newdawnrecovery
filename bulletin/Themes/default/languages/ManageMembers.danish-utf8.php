<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'Administrer medlemsgrupper';
$txt['membergroups_description'] = 'Medlemsgrupper er grupper af medlemmer der har ens tilladelser, fremtræden eller adgangsrettigheder. Nogle medlemsgrupper er baseret på mængde af post disse har lavet. Du kan tilknytte en bruger til en medlemsgruppe ved at vælge dennes profil og ændre personens kontoindstillinger.';
$txt['membergroups_modify'] = 'Ændre';

$txt['membergroups_add_group'] = 'Tilføj gruppe';
$txt['membergroups_regular'] = 'Almindelige grupper';
$txt['membergroups_post'] = 'Grupper baseret på beskedantal';

$txt['membergroups_new_group'] = 'Tilføj Gruppe';
$txt['membergroups_group_name'] = 'Medlemsgruppens navn';
$txt['membergroups_new_board'] = 'Synlige Boards';
$txt['membergroups_new_board_desc'] = 'Boards som medlemsgruppen kan se.';
$txt['membergroups_new_board_post_groups'] = '<em>Bemærk: normalt behøver postgrupper ikke adgang den medlemsgruppe de er medlem af, automatisk giver dem adgang.</em>';
$txt['membergroups_new_as_type'] = 'ved type';
$txt['membergroups_new_as_copy'] = 'eller baseret på';
$txt['membergroups_new_copy_none'] = '(ingen)';
$txt['membergroups_can_edit_later'] = '(du kan rette dem senere.)';

$txt['membergroups_edit_group'] = 'Rediger gruppe';
$txt['membergroups_edit_name'] = 'Gruppenavn';
$txt['membergroups_edit_post_group'] = 'Denne gruppe er baseret på beskeder.';
$txt['membergroups_min_posts'] = 'Min. antal beskeder';
$txt['membergroups_online_color'] = 'Farve vist på online liste';
$txt['membergroups_star_count'] = 'Antal stjerner der vises';
$txt['membergroups_star_image'] = 'Filnavn på stjernerne';
$txt['membergroups_star_image_note'] = '(Du kan bruge $language som sprog til brugeren.)';
$txt['membergroups_max_messages'] = 'Max personlige beskeder';
$txt['membergroups_max_messages_note'] = '(0 = ubegrænset)';
$txt['membergroups_edit_save'] = 'Gem';
$txt['membergroups_delete'] = 'Slet';
$txt['membergroups_confirm_delete'] = 'Eer du sikker på at du vil slette denne gruppe?!';

$txt['membergroups_members_title'] = 'Viser alle medlemmer fra gruppe';
$txt['membergroups_members_no_members'] = 'Denne gruppe er i øjeblikket tom';
$txt['membergroups_members_add_title'] = 'Tilføj et medlem til denne gruppe';
$txt['membergroups_members_add_desc'] = 'Liste af medlemmer at tilføje';
$txt['membergroups_members_add'] = 'Tilføj medlemmer';
$txt['membergroups_members_remove'] = 'Fjern fra gruppe';

$txt['membergroups_postgroups'] = 'Besked grupper';

$txt['membergroups_edit_groups'] = 'Rediger medlemsgrupper';
$txt['membergroups_settings'] = 'Indstillinger for medlemsgrupper';
$txt['groups_manage_membergroups'] = 'Grupper der kan redigere i medlemsgrupper';
$txt['membergroups_settings_submit'] = 'Gem';
$txt['membergroups_select_permission_type'] = 'Vælg tilladelsesprofil';
$txt['membergroups_images_url'] = '{tema URL}/images/';
$txt['membergroups_select_visible_boards'] = 'Vis boards';

$txt['admin_browse_approve'] = 'Medlemmer hvis konto afventer godkendelse';
$txt['admin_browse_approve_desc'] = 'Her kan du styre alle medlemmer som venter på at få deres konto godkendt.';
$txt['admin_browse_activate'] = 'Medlemmer hvis konto afventer aktivering';
$txt['admin_browse_activate_desc'] = 'Dette skærmbillede viser alle medlemmer der endnu ikke har aktiveres deres konto i dit forum.';
$txt['admin_browse_awaiting_approval'] = 'Afventer godkendelse <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Afventer aktivering <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Brugernavn';
$txt['admin_browse_email'] = 'E-mail Address';
$txt['admin_browse_ip'] = 'IP Addresse';
$txt['admin_browse_registered'] = 'Registreret';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Med valgte';
$txt['admin_browse_no_members_approval'] = 'Der er ingen medlemmer der afventer godkendelse.';
$txt['admin_browse_no_members_activate'] = 'Ingen medlemmer har i øjeblikket ikke aktiveret deres konto.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'Alle valgte medlemmer?';
$txt['admin_browse_outstanding_warn'] = 'alle berørte medlemmer?';
$txt['admin_browse_w_approve'] = 'Godkend';
$txt['admin_browse_w_activate'] = 'Aktivér';
$txt['admin_browse_w_delete'] = 'Slet';
$txt['admin_browse_w_reject'] = 'Afvis';
$txt['admin_browse_w_remind'] = 'Reminder';
$txt['admin_browse_w_approve_deletion'] = 'Godkend (Slet konti)';
$txt['admin_browse_w_email'] = 'og send e-mail';
$txt['admin_browse_w_approve_require_activate'] = 'Godkend og forlang aktivering';

$txt['admin_browse_filter_by'] = 'Sortér efter';
$txt['admin_browse_filter_show'] = 'Viser';
$txt['admin_browse_filter_type_0'] = 'Ikke aktiverede konti';
$txt['admin_browse_filter_type_2'] = 'Ikke aktiverede e-mail ændringer';
$txt['admin_browse_filter_type_3'] = 'Afviste nye konti';
$txt['admin_browse_filter_type_4'] = 'Ikke godkendte slettede konti';
$txt['admin_browse_filter_type_5'] = 'Ikke godkendte "under alder"- konti';

$txt['admin_browse_outstanding'] = 'Medlemmer der skiller sig ud';
$txt['admin_browse_outstanding_days_1'] = 'Med medlemmer der registrede sig mere end';
$txt['admin_browse_outstanding_days_2'] = 'dag(e) siden';
$txt['admin_browse_outstanding_perform'] = 'Anvend følgende handling';
$txt['admin_browse_outstanding_go'] = 'Udfør';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Registrering blev afvist';
$txt['admin_approve_reject_desc'] = 'Desværre blev din anmodning om at blive medlem ved ' . $context['forum_name'] . ' afvist.';
$txt['admin_approve_delete'] = 'Kontoen er slettet';
$txt['admin_approve_delete_desc'] = 'Din konto hos ' . $context['forum_name'] . ' er blevet slettet. Dette kan være fordi du aldrig registrede denne. Derfor burde du kunne registrere dig igen.';
$txt['admin_approve_remind'] = 'Reminder om registrering';
$txt['admin_approve_remind_desc'] = 'Du har stadig ikke registreret din konto hos';
$txt['admin_approve_remind_desc2'] = 'Følge venligst linket herunder, for at aktivere din konto:';
$txt['admin_approve_accept_desc'] = 'Administratoren har manuelt aktiveret sin konto. Du kan nu logge ind og deltage.';
$txt['admin_approve_require_activation'] = 'Din konto hos ' . $context['forum_name'] . ' er blevet godkendt af forummets administrator, og skal aktiveres før du kan deltage.';

?>