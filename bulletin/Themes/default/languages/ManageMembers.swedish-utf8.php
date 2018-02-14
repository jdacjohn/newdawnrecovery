<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'Hantera medlemsgrupper';
$txt['membergroups_description'] = 'Medlemsgrupper &auml;r grupper med medlemmar som har liknande r&auml;ttigheter, utseende eller &aring;tkomstr&auml;tt. En del medlemsgrupper baseras p&aring; antal inl&auml;gg som en anv&auml;ndare har skrivit. Du kan l&auml;gga till n&aring;gon till en medlemsgrupp genom att g&aring; till dennes profil, och &auml;ndra kontoinst&auml;llningarna.';
$txt['membergroups_modify'] = '&Auml;ndra';

$txt['membergroups_add_group'] = 'L&auml;gg till grupp';
$txt['membergroups_regular'] = 'Allm&auml;nna grupper';
$txt['membergroups_post'] = 'Inl&auml;ggsbaserade grupper';

$txt['membergroups_new_group'] = 'L&auml;gg till ny medlemsgrupp';
$txt['membergroups_group_name'] = 'Namn p&aring; medlemsgruppen';
$txt['membergroups_new_board'] = 'Synliga tavlor';
$txt['membergroups_new_board_desc'] = 'Tavlor som medlemsgruppen kan se.';
$txt['membergroups_new_board_post_groups'] = '<em>Obs: Vanligtvis behöver inte inläggsbaserade grupper någon behörighet, eftersom den vanliga medlemsgruppen som medlemmen tillhör ger behörigheter.</em>';
$txt['membergroups_new_as_type'] = 'av typen';
$txt['membergroups_new_as_copy'] = 'baserad p&aring;';
$txt['membergroups_new_copy_none'] = '(ingen)';
$txt['membergroups_can_edit_later'] = 'Du kan &auml;ndra detta senare';

$txt['membergroups_edit_group'] = 'Redigera medlemsgrupp';
$txt['membergroups_edit_name'] = 'Namn p&aring; medlemsgruppen';
$txt['membergroups_edit_post_group'] = 'Denna grupp baseras p&aring; antal skrivna inl&auml;gg.';
$txt['membergroups_min_posts'] = 'Minsta antalet inl&auml;gg som kr&auml;vs';
$txt['membergroups_online_color'] = 'F&auml;rg i online-listan';
$txt['membergroups_star_count'] = 'Antal stj&auml;rnor';
$txt['membergroups_star_image'] = 'Filnamn p&aring; stj&auml;rnbilden';
$txt['membergroups_star_image_note'] = 'du kan anv&auml;nda $language f&ouml;r användarens valda språk';
$txt['membergroups_max_messages'] = 'Max antal privata meddelanden';
$txt['membergroups_max_messages_note'] = '(0 = obegr&auml;nsat)';
$txt['membergroups_edit_save'] = 'Spara';
$txt['membergroups_delete'] = 'Radera';
$txt['membergroups_confirm_delete'] = '&Auml;r du s&auml;ker p&aring; att du vill radera denna medlemsgrupp?!';

$txt['membergroups_members_title'] = 'Visar alla medlemmar i gruppen';
$txt['membergroups_members_no_members'] = 'Denna grupp &auml;r f&ouml;r n&auml;rvarande tom';
$txt['membergroups_members_add_title'] = 'L&auml;gg till en medlem till denna grupp';
$txt['membergroups_members_add_desc'] = 'Lista &ouml;ver medlemmar att l&auml;gga till';
$txt['membergroups_members_add'] = 'L&auml;gg till medlemmar';
$txt['membergroups_members_remove'] = 'Ta bort fr&aring;n grupp';

$txt['membergroups_postgroups'] = 'Inl&auml;ggsbaserade medlemsgrupper';

$txt['membergroups_edit_groups'] = 'Redigera medlemsgrupper';
$txt['membergroups_settings'] = 'Medlemsgruppsinst&auml;llningar';
$txt['groups_manage_membergroups'] = 'Grupper som har beh&ouml;righet att &auml;ndra medlemsgrupper';
$txt['membergroups_settings_submit'] = 'Spara';
$txt['membergroups_select_permission_type'] = 'V&auml;lj r&auml;ttighetsprofil';
$txt['membergroups_images_url'] = '{temats Internetadress}/images/';
$txt['membergroups_select_visible_boards'] = 'Visa tavlor';

$txt['admin_browse_approve'] = 'Medlemmar vars konton v&auml;ntar p&aring; godk&auml;nnande';
$txt['admin_browse_approve_desc'] = 'H&auml;rifr&aring;n kan du hantera alla medlemmar som v&auml;ntar p&aring; att deras konton ska godk&auml;nnas.';
$txt['admin_browse_activate'] = 'Medlemmar vars konton v&auml;ntar p&aring; att aktiveras';
$txt['admin_browse_activate_desc'] = 'Dennma sk&auml;rm visar alla medlemmar som fortfarande inte har aktiverat sina konton p&aring; forumet.';
$txt['admin_browse_awaiting_approval'] = 'V&auml;ntar p&aring; godk&auml;nnande <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'V&auml;ntar p&aring; aktivering <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Anv&auml;ndarnamn';
$txt['admin_browse_email'] = 'E-postadress';
$txt['admin_browse_ip'] = 'IP-adress';
$txt['admin_browse_registered'] = 'Registrerad';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Med markerade';
$txt['admin_browse_no_members_approval'] = 'Inga medlemmar v&auml;ntar p&aring; godk&auml;nnande f&ouml;r n&auml;rvarande.';
$txt['admin_browse_no_members_activate'] = 'Det finns inga medlemmar som inte har aktiverat sina konton.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'alla markerade medlemmar?';
$txt['admin_browse_outstanding_warn'] = 'alla berörda medlemmar?';
$txt['admin_browse_w_approve'] = 'Godkänn';
$txt['admin_browse_w_activate'] = 'Aktivera';
$txt['admin_browse_w_delete'] = 'Radera';
$txt['admin_browse_w_reject'] = 'Neka';
$txt['admin_browse_w_remind'] = 'Påminn';
$txt['admin_browse_w_approve_deletion'] = 'Godkänn (radera konton)';
$txt['admin_browse_w_email'] = 'och skicka e-post';
$txt['admin_browse_w_approve_require_activate'] = 'Godkänn och kräv aktivering';

$txt['admin_browse_filter_by'] = 'Filtrera genom';
$txt['admin_browse_filter_show'] = 'Visar';
$txt['admin_browse_filter_type_0'] = 'Oaktiverade nya konton';
$txt['admin_browse_filter_type_2'] = 'Oaktiverade konton med ny e-postadress';
$txt['admin_browse_filter_type_3'] = 'Inte godk&auml;nda nya konton';
$txt['admin_browse_filter_type_4'] = 'Inte godk&auml;nda kontoborttagningar';
$txt['admin_browse_filter_type_5'] = 'Inte godk&auml;nda "minder&aring;riga" konton';

$txt['admin_browse_outstanding'] = 'Ofullst&auml;ndiga medlemmar';
$txt['admin_browse_outstanding_days_1'] = 'Med alla medlemmar som registrerade sig l&auml;ngre &auml;n';
$txt['admin_browse_outstanding_days_2'] = 'dagar sedan';
$txt['admin_browse_outstanding_perform'] = 'Vidta f&ouml;ljande &aring;tg&auml;rd';
$txt['admin_browse_outstanding_go'] = 'Genomf&ouml;r &aring;tg&auml;rd';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Registrering nekad';
$txt['admin_approve_reject_desc'] = 'Tyvärr har din ansökan om medlemskap hos ' . $context['forum_name'] . ' blivit nekad.';
$txt['admin_approve_delete'] = 'Konto raderat';
$txt['admin_approve_delete_desc'] = 'Ditt användarkonto hos ' . $context['forum_name'] . ' har raderats. Detta kan tänkas vara för att du aldrig aktiverat ditt konto, om så är fallet så bör du kunna registrera dig igen.';
$txt['admin_approve_remind'] = 'Registreringspåminnelse';
$txt['admin_approve_remind_desc'] = 'Du har fortfarande inte aktiverat ditt användarkonto hos';
$txt['admin_approve_remind_desc2'] = 'Vänligen klicka på länken nedan för att aktivera ditt konto:';
$txt['admin_approve_accept_desc'] = 'Ditt konto har aktiverats manuellt av administratören, och därför kan du nu logga in och skriva inlägg.';
$txt['admin_approve_require_activation'] = 'Ditt användarkonto hos ' . $context['forum_name'] . ' har godkänts av forumets administratör, och måste nu aktiveras innan du kan börja skriva inlägg.';

?>