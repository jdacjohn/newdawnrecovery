<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'Felhasználói csoportok kezelése';
$txt['membergroups_description'] = 'A felhasználói csoportok olyan felhasználók csoportjai, akiknek hasonló beállításaik, megjelenésük, vagy hozzáférési jogaik vannak. Néhány felhasználói csoport a felhasználó hozzászólásainak számán alapul. Felhasználói csoporthoz való rendelést a felhasználó profiljában teheted meg.';
$txt['membergroups_modify'] = 'Módosítás';

$txt['membergroups_add_group'] = 'Csoport hozzáadása';
$txt['membergroups_regular'] = 'Állandó csoportok';
$txt['membergroups_post'] = 'Hozzászólások számán alapuló csoportok';

$txt['membergroups_new_group'] = 'Felhasználói csoport hozzáadása';
$txt['membergroups_group_name'] = 'Felhasználói csoport neve';
$txt['membergroups_new_board'] = 'Látható fórumok';
$txt['membergroups_new_board_desc'] = 'Fórumok, amiket a felhasználói csoport láthat';
$txt['membergroups_new_board_post_groups'] = '<em>Megjegyzés: normális esetben a hozzászólási csoportoknak nem kell engedély, mivel a csoport, amiben a felhasználó van, engedélyt ad nekik.</em>';
$txt['membergroups_new_as_type'] = 'típus szerint';
$txt['membergroups_new_as_copy'] = 'a következő alapján';
$txt['membergroups_new_copy_none'] = '(nincs)';
$txt['membergroups_can_edit_later'] = 'Később szerkesztheted őket.';

$txt['membergroups_edit_group'] = 'Felhasználói csoport szerkesztése';
$txt['membergroups_edit_name'] = 'Csoport neve';
$txt['membergroups_edit_post_group'] = 'Ez a csoport hozzászólások számán alapul';
$txt['membergroups_min_posts'] = 'Szükséges hozzászólások';
$txt['membergroups_online_color'] = 'Szín az online listában';
$txt['membergroups_star_count'] = 'Csillagok száma';
$txt['membergroups_star_image'] = 'Csillag fájlneve';
$txt['membergroups_star_image_note'] = 'használhatod a $language változót a felhasználó nyelvéhez';
$txt['membergroups_max_messages'] = 'Max privát üzenetek';
$txt['membergroups_max_messages_note'] = '0 = végtelen';
$txt['membergroups_edit_save'] = 'Mentés';
$txt['membergroups_delete'] = 'Törlés';
$txt['membergroups_confirm_delete'] = 'Biztos vagy benne, hogy törölni szeretnéd ezt a csoportot?!';

$txt['membergroups_members_title'] = 'Összes felhasználó megjelenítése a csoportból';
$txt['membergroups_members_no_members'] = 'Ez a csoport jelenleg üres';
$txt['membergroups_members_add_title'] = 'Felhasználó hozzáadása a csoporthoz';
$txt['membergroups_members_add_desc'] = 'Hozzáadandó felhasználók listája';
$txt['membergroups_members_add'] = 'Felhasználók hozzádása';
$txt['membergroups_members_remove'] = 'Eltávolítás a csoportból';

$txt['membergroups_postgroups'] = 'Hozzászólási csoportok';

$txt['membergroups_edit_groups'] = 'Felhasználói csoportok szerkesztése';
$txt['membergroups_settings'] = 'Felhasználói csoport beállítások';
$txt['groups_manage_membergroups'] = 'Felhasználói csoportok változtatására jogosult csoportok';
$txt['membergroups_settings_submit'] = 'Mentés';
$txt['membergroups_select_permission_type'] = 'Válaszd ki a jogosultsági profilt';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'Fórumok megjelenítése';

$txt['admin_browse_approve'] = 'Megerősítésre váró felhasználók';
$txt['admin_browse_approve_desc'] = 'Innen kezelheted az összes felhasználót, akinek azonosítója megerősítésre vár.';
$txt['admin_browse_activate'] = 'Aktiválásra váró felhasználók';
$txt['admin_browse_activate_desc'] = 'Ez a képernyő megjeleníti az összes tagot, akik még nem aktiválták azonosítójukat.';
$txt['admin_browse_awaiting_approval'] = 'Megerősítésre vár <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Aktiválásra vár <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Felhasználónév';
$txt['admin_browse_email'] = 'E-mail cím';
$txt['admin_browse_ip'] = 'IP cím';
$txt['admin_browse_registered'] = 'Regisztrált';
$txt['admin_browse_id'] = 'AZ';
$txt['admin_browse_with_selected'] = 'A kiválasztottakkal';
$txt['admin_browse_no_members_approval'] = 'Jelenleg egy felhasználó sem várakozik megerősítésre.';
$txt['admin_browse_no_members_activate'] = 'Jelenleg egy felhasználónak sem kell aktiválni az azonosítóját.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'az összes kiválasztot taggal?';
$txt['admin_browse_outstanding_warn'] = 'az összes érintett taggal?';
$txt['admin_browse_w_approve'] = 'Megerősítés';
$txt['admin_browse_w_activate'] = 'Aktiválás';
$txt['admin_browse_w_delete'] = 'Törlés';
$txt['admin_browse_w_reject'] = 'Visszautasítás';
$txt['admin_browse_w_remind'] = 'Emlékeztetés';
$txt['admin_browse_w_approve_deletion'] = 'Megerősítés (azonosítók törlése)';
$txt['admin_browse_w_email'] = 'és küldjön e-mailt';
$txt['admin_browse_w_approve_require_activate'] = 'Megerősítés és aktiválás kérése';

$txt['admin_browse_filter_by'] = 'Szűrés';
$txt['admin_browse_filter_show'] = 'Megjelenítve';
$txt['admin_browse_filter_type_0'] = 'Nem aktivált új azonosítók';
$txt['admin_browse_filter_type_2'] = 'Nem aktivált e-mail változtatások';
$txt['admin_browse_filter_type_3'] = 'Meg nem erősített új azonosítók';
$txt['admin_browse_filter_type_4'] = 'Meg nem erősített azonosító törlések';
$txt['admin_browse_filter_type_5'] = 'Meg nem erősített "Kor alatti" azonosítók';

$txt['admin_browse_outstanding'] = 'Kívülálló tagok';
$txt['admin_browse_outstanding_days_1'] = 'Az összes taggal, aki több, mint';
$txt['admin_browse_outstanding_days_2'] = 'napja';
$txt['admin_browse_outstanding_perform'] = 'A következő művelet végrehajtása';
$txt['admin_browse_outstanding_go'] = 'Művelet végrehajtása';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Regisztr&#225;ci&#243; visszautas&#237;tva';
$txt['admin_approve_reject_desc'] = 'Sajn&#225;latos m&#243;don a jelentkez&#233;sed a következő f&#243;rumon vissza lett utas&#237;tva:' . $context['forum_name'] . '';
$txt['admin_approve_delete'] = 'Azonos&#237;t&#243; t&#246;r&#246;lve';
$txt['admin_approve_delete_desc'] = 'Azonos&#237;t&#243;d a k&#246;vetkez&#245; f&#243;rumon t&#246;r&#246;lve lett: ' . $context['forum_name'] . '. Ez az&#233;rt t&#246;rt&#233;nhetett, mert soha nem aktiv&#225;ltad az azonos&#237;t&#243;d, ebben az esetben &#250;jra regisztr&#225;lhatsz.';
$txt['admin_approve_remind'] = 'Regisztr&#225;ci&#243; eml&#233;keztet&#245;';
$txt['admin_approve_remind_desc'] = 'M&#233;g mindig nem aktiv&#225;ltad az azonosít&#243;d a következ&#245;n:';
$txt['admin_approve_remind_desc2'] = 'K&#233;rlek kattints az al&#225;bbi linkre azonos&#237;t&#243;d aktiv&#225;l&#225;s&#225;hoz:';
$txt['admin_approve_accept_desc'] = 'Az azonos&#237;t&#243;d egy adminisztr&#225;tor k&#233;zileg aktiv&#225;lta, mostm&#225;r bejelentkezhetsz és hozz&#225;sz&#243;lhatsz a tém&#225;khoz.';
$txt['admin_approve_require_activation'] = 'Azonos&#237;t&#243;d egy adminisztr&#225;tor megerős&#237;tette, &#233;s most aktiv&#225;lnod kell, mielőtt hozzász&#243;lhatn&#225;l a k&#246;vetkező f&#243;rumhoz: ' . $context['forum_name'] . '.';

?>