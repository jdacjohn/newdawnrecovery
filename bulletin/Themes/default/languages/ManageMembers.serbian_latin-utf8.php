<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'Upravljanje korisničkim grupama';
$txt['membergroups_description'] = 'Korisničke grupe su grupe članova koji imaju slične dozvole, podešavanja i prava pristupa. Neke korisničke grupe su bazirane na broju poruka koje je korisnik poslao. Možete da dodate nekoga u grupu izmenom njegovog profila.';
$txt['membergroups_modify'] = 'Izmeni';

$txt['membergroups_add_group'] = 'Dodaj grupu';
$txt['membergroups_regular'] = 'Obične grupe';
$txt['membergroups_post'] = 'Grupe zasnovane na broju poruka';

$txt['membergroups_new_group'] = 'Dodaj grupu članova';
$txt['membergroups_group_name'] = 'Ime grupe članova';
$txt['membergroups_new_board'] = 'Vidljivi forumi';
$txt['membergroups_new_board_desc'] = 'Forumi koje članovi grupe mogu da vide.';
$txt['membergroups_new_board_post_groups'] = '<em>Napomena: normalno, grupama zasnovanim na broju poruka nije potreban pristup pošto će im grupa u kojima je član dati pristup.</em>';
$txt['membergroups_new_as_type'] = 'po tipu';
$txt['membergroups_new_as_copy'] = 'ili bazirano na';
$txt['membergroups_new_copy_none'] = '(bez)';
$txt['membergroups_can_edit_later'] = '(možete da ih izmenite kasnije.)';

$txt['membergroups_edit_group'] = 'Izmeni grupu';
$txt['membergroups_edit_name'] = 'Ime grupe';
$txt['membergroups_edit_post_group'] = 'Ova grupa je bazirana na porukama.';
$txt['membergroups_min_posts'] = 'Min. poruka';
$txt['membergroups_online_color'] = 'Boju u spisku prisutnih';
$txt['membergroups_star_count'] = 'Broj zvezda';
$txt['membergroups_star_image'] = 'Ime datoteke zvezde';
$txt['membergroups_star_image_note'] = 'možete da koristite $language za jezik korisnika';
$txt['membergroups_max_messages'] = 'Maks. broj privatnih poruka';
$txt['membergroups_max_messages_note'] = '(0 = neograničeno)';
$txt['membergroups_edit_save'] = 'Sačuvaj';
$txt['membergroups_delete'] = 'Izbriši';
$txt['membergroups_confirm_delete'] = 'Da li ste sigurni da želite da obrišete ovu grupu?!';

$txt['membergroups_members_title'] = 'Prikazujem članove grupe';
$txt['membergroups_members_no_members'] = 'Ova grupe je trenutno prazna';
$txt['membergroups_members_add_title'] = 'Dodaj člana ovoj grupi';
$txt['membergroups_members_add_desc'] = 'Spisak članova za dodavanje';
$txt['membergroups_members_add'] = 'Dodaj članove';
$txt['membergroups_members_remove'] = 'Ukloni iz grupe';

$txt['membergroups_postgroups'] = 'Grupe zasnovane na broju poruka';

$txt['membergroups_edit_groups'] = 'Izmeni grupe članova';
$txt['membergroups_settings'] = 'Podešavanja grupa članova';
$txt['groups_manage_membergroups'] = 'Grupe kojima je dozvoljeno da vrše izmenu grupa članova';
$txt['membergroups_settings_submit'] = 'Sačuvaj';
$txt['membergroups_select_permission_type'] = 'Izaberite profil dozvola';
$txt['membergroups_images_url'] = '{URL teme}/images/';
$txt['membergroups_select_visible_boards'] = 'Prikaži forume';

$txt['admin_browse_approve'] = 'Članovi čiji nalozi čekaju na odobrenje';
$txt['admin_browse_approve_desc'] = 'Odavde možete da upravljate svim članovima čiji nalozi čekaju na odobrenje.';
$txt['admin_browse_activate'] = 'Članovi čiji nalozi čekaju na aktivaciju';
$txt['admin_browse_activate_desc'] = 'Ova stranica prikazuje spisak svih članova koji još uvek nisu aktivirali svoje naloge na ovom forumu.';
$txt['admin_browse_awaiting_approval'] = 'Čeka na odobrenje <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Čeka na aktivaciju <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Korisničko ime';
$txt['admin_browse_email'] = 'E-mail adresa';
$txt['admin_browse_ip'] = 'IP adresa';
$txt['admin_browse_registered'] = 'Registrovan';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Sa izabranim';
$txt['admin_browse_no_members_approval'] = 'Nijedan član trenutno ne čeka na odobrenje.';
$txt['admin_browse_no_members_activate'] = 'Nema članova koji još uvek nisu aktivirali svoje naloge.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'sve izabrane članove?';
$txt['admin_browse_outstanding_warn'] = 'all affected members?';
$txt['admin_browse_w_approve'] = 'Odobri';
$txt['admin_browse_w_activate'] = 'Aktiviraj';
$txt['admin_browse_w_delete'] = 'Obriši';
$txt['admin_browse_w_reject'] = 'Odbaci';
$txt['admin_browse_w_remind'] = 'Podseti';
$txt['admin_browse_w_approve_deletion'] = 'Odobri (obriši naloge)';
$txt['admin_browse_w_email'] = 'i pošalji e-mail';
$txt['admin_browse_w_approve_require_activate'] = 'Odobri i zahtevaj aktivaciju';

$txt['admin_browse_filter_by'] = 'Filtriraj po';
$txt['admin_browse_filter_show'] = 'Prikazujem';
$txt['admin_browse_filter_type_0'] = 'Neaktivirane nove naloge';
$txt['admin_browse_filter_type_2'] = 'Neaktivirane promene e-mail-a';
$txt['admin_browse_filter_type_3'] = 'Neaktivirane nove naloge';
$txt['admin_browse_filter_type_4'] = 'Neodobrena brisanja naloga';
$txt['admin_browse_filter_type_5'] = 'Neodobrene naloge mladih korisnika';

$txt['admin_browse_outstanding'] = 'Izvanredni članovi';
$txt['admin_browse_outstanding_days_1'] = 'Nad svim članovima koji su se registrovali pre više od';
$txt['admin_browse_outstanding_days_2'] = 'dana';
$txt['admin_browse_outstanding_perform'] = 'izvrši sledeće akcije';
$txt['admin_browse_outstanding_go'] = 'Izvrši akciju';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Registracija odbijena';
$txt['admin_approve_reject_desc'] = 'Nažalost, vaš zahtev za pridruživanje ' . $context['forum_name'] . ' je odbijen.';
$txt['admin_approve_delete'] = 'Obrisan nalog';
$txt['admin_approve_delete_desc'] = 'Vaš nalog na ' . $context['forum_name'] . ' je obrisan.  Ovo može biti zato što nikada niste aktivirali svoj nalog, u čijem slučaju možete da se ponovo registrujete.';
$txt['admin_approve_remind'] = 'Podsećanje na registraciju';
$txt['admin_approve_remind_desc'] = 'Još uvek niste aktivirali svoj nalog na';
$txt['admin_approve_remind_desc2'] = 'Kliknite na sledeći link da biste aktivirali svoj nalog:';
$txt['admin_approve_accept_desc'] = 'Vaš nalog je ručno aktiviran od strane administratora tako da sada možete da se prijavite i počnete sa pisanjem poruka.';
$txt['admin_approve_require_activation'] = 'Vaš nalog na ' . $context['forum_name'] . ' je odobren od strane administratora. Pre nego što počnete sa pisanjem poruka, moraćete da ga aktivirate.';

?>