<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'Ledengroepen beheren';
$txt['membergroups_description'] = 'Ledengroepen zijn groepen van leden die dezelfde permissies hebben. Sommige ledengroepen zijn gebaseerd op het aantal geplaatste berichten. Je kunt de leden aan &eacute;&eacute;n of meerdere groepen toewijzen door hun profiel te selecteren en de account instellingen aan te passen.';
$txt['membergroups_modify'] = 'Aanpassen';

$txt['membergroups_add_group'] = 'Ledengroep toevoegen';
$txt['membergroups_regular'] = 'Reguliere ledengroepen';
$txt['membergroups_post'] = 'Bericht-gerelateerde ledengroepen';

$txt['membergroups_new_group'] = 'Ledengroep toevoegen';
$txt['membergroups_group_name'] = 'Naam ledengroep';
$txt['membergroups_new_board'] = 'Zichtbare boards';
$txt['membergroups_new_board_desc'] = 'Boards die de ledengroep kan zien';
$txt['membergroups_new_board_post_groups'] = '<em>Let op: normaal gesproken hebben bericht-gerelateerde groepen geen toegang nodig omdat de groep waarin ze zitten hen toegang zal geven.</em>';
$txt['membergroups_new_as_type'] = 'aan de hand van type';
$txt['membergroups_new_as_copy'] = 'gebaseerd op';
$txt['membergroups_new_copy_none'] = '(geen)';
$txt['membergroups_can_edit_later'] = 'Je kunt deze later bewerken.';

$txt['membergroups_edit_group'] = 'Bewerk ledengroep';
$txt['membergroups_edit_name'] = 'Naam van de ledengroep:';
$txt['membergroups_edit_post_group'] = 'Deze ledengroep is gebaseerd op aantal berichten';
$txt['membergroups_min_posts'] = 'Benodigd aantal berichten';
$txt['membergroups_online_color'] = 'Kleur in de online lijst';
$txt['membergroups_star_count'] = 'Aantal sterafbeeldingen';
$txt['membergroups_star_image'] = 'Afbeelding bestandsnaam';
$txt['membergroups_star_image_note'] = 'Je kunt $language gebruiken voor de taal van de gebruiker.';
$txt['membergroups_max_messages'] = 'Maximum aantal persoonlijke berichten';
$txt['membergroups_max_messages_note'] = '0 = onbeperkt';
$txt['membergroups_edit_save'] = 'Opslaan';
$txt['membergroups_delete'] = 'Verwijder';
$txt['membergroups_confirm_delete'] = 'Weet je zeker dat je deze ledengroep wilt verwijderen?!';

$txt['membergroups_members_title'] = 'Toon alle leden van groep';
$txt['membergroups_members_no_members'] = 'Deze groep is momenteel leeg';
$txt['membergroups_members_add_title'] = 'Voeg een lid toe aan deze groep';
$txt['membergroups_members_add_desc'] = 'Lijst van leden om toe te voegen';
$txt['membergroups_members_add'] = 'Voeg leden toe';
$txt['membergroups_members_remove'] = 'Verwijder uit ledengroep';

$txt['membergroups_postgroups'] = 'Bericht-gerelateerde groepen';

$txt['membergroups_edit_groups'] = 'Bewerk ledengroep';
$txt['membergroups_settings'] = 'Ledengroepinstellingen';
$txt['groups_manage_membergroups'] = 'Ledengroepen die ledengroepen mogen aanpassen';
$txt['membergroups_settings_submit'] = 'Opslaan';
$txt['membergroups_select_permission_type'] = 'Selecteer permissieprofiel';
$txt['membergroups_images_url'] = '{thema URL}/images/';
$txt['membergroups_select_visible_boards'] = 'Toon boards';

$txt['admin_browse_approve'] = 'Nieuwe leden die op goedkeuring wachten';
$txt['admin_browse_approve_desc'] = 'Vanaf hier kun je de nieuwe aanmeldingen beheren die op goedkeuring wachten.';
$txt['admin_browse_activate'] = 'Aanmeldingen die op activering wachten';
$txt['admin_browse_activate_desc'] = 'Dit scherm toont alle leden die nog steeds hun account niet hebben geactiveerd.';
$txt['admin_browse_awaiting_approval'] = 'Wachten op goedkeuring <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Wachten op activering <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Gebruikersnaam';
$txt['admin_browse_email'] = 'E-mailadres';
$txt['admin_browse_ip'] = 'IP-adres';
$txt['admin_browse_registered'] = 'Geregistreerd';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Met geselecteerde';
$txt['admin_browse_no_members_approval'] = 'Er zijn geen leden die wachten op goedkeuring.';
$txt['admin_browse_no_members_activate'] = 'Er zijn geen leden die hun account nog niet geactiveerd hebben.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'alle geselecteerde leden?';
$txt['admin_browse_outstanding_warn'] = 'alle betrokken leden?';
$txt['admin_browse_w_approve'] = 'Goedkeuren';
$txt['admin_browse_w_activate'] = 'Activeren';
$txt['admin_browse_w_delete'] = 'Verwijder';
$txt['admin_browse_w_reject'] = 'Verwerp';
$txt['admin_browse_w_remind'] = 'Herinner';
$txt['admin_browse_w_approve_deletion'] = 'Goedkeuren (verwijder accounts)';
$txt['admin_browse_w_email'] = 'en stuur e-mail';
$txt['admin_browse_w_approve_require_activate'] = 'Goedkeuren en activering vereisen';

$txt['admin_browse_filter_by'] = 'Filteren op';
$txt['admin_browse_filter_show'] = 'Tonen';
$txt['admin_browse_filter_type_0'] = 'Niet-geactiveerde nieuwe accounts';
$txt['admin_browse_filter_type_2'] = 'Niet-geactiveerde e-mailveranderingen';
$txt['admin_browse_filter_type_3'] = 'Niet-goedgekeurde nieuwe accounts';
$txt['admin_browse_filter_type_4'] = 'Niet-goedgekeurde account-verwijderingen';
$txt['admin_browse_filter_type_5'] = 'Niet-goedgekeurde "minderjarige" accounts';

$txt['admin_browse_outstanding'] = 'Niet-afgehandelde leden';
$txt['admin_browse_outstanding_days_1'] = 'Met alle leden die zich langer dan';
$txt['admin_browse_outstanding_days_2'] = 'dagen geleden hebben geregistreerd';
$txt['admin_browse_outstanding_perform'] = 'Voer de volgende actie uit';
$txt['admin_browse_outstanding_go'] = 'Voer actie uit';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Registratie afgewezen';
$txt['admin_approve_reject_desc'] = 'Het spijt me te moeten mededelen dat je aanmelding op ons forum ' . $context['forum_name'] . ' is afgewezen.';
$txt['admin_approve_delete'] = 'Account verwijderd';
$txt['admin_approve_delete_desc'] = 'Je account op ' . $context['forum_name'] . ' is verwijderd.  Het zou kunnen dat dat komt omdat je je account nooit hebt geactiveerd, in welk geval je je weer opnieuw zou kunnen registreren.';
$txt['admin_approve_remind'] = 'Registratieherinnering';
$txt['admin_approve_remind_desc'] = 'Je hebt nog steeds je account niet geactiveerd op';
$txt['admin_approve_remind_desc2'] = 'Klik op onderstaande link om je account te activeren:';
$txt['admin_approve_accept_desc'] = 'Je account is handmatig geactiveerd door de admin en je kunt nu inloggen en berichten plaatsen.';
$txt['admin_approve_require_activation'] = 'Je account op ' . $context['forum_name'] . ' is goedgekeurd door de forumbeheerder, en moet nu geactiveerd worden alvorens je kunt beginnen met het plaatsen van berichten.';

?>