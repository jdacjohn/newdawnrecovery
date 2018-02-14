<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'Zarządzaj grupami użytkowników';
$txt['membergroups_description'] = 'Do grup należą użytkownicy o takich samych pozwoleniach, wyglądzie lub prawach dostępu. Niektóre grupy użytkowników bazują na liczbie wiadomości wysłanych przez użytkownika. Możesz przypisać kogoś do danej grupy zmieniając ustawienia w jego profilu.';
$txt['membergroups_modify'] = 'Zmień';

$txt['membergroups_add_group'] = 'Dodaj grupę';
$txt['membergroups_regular'] = 'Zwykłe grupy';
$txt['membergroups_post'] = 'Grupy oparte na ilości wiadomości';

$txt['membergroups_new_group'] = 'Dodaj grupę';
$txt['membergroups_group_name'] = 'Nazwa grupy użytkowników';
$txt['membergroups_new_board'] = 'Dostępne działy';
$txt['membergroups_new_board_desc'] = 'Działy, które widzi ta grupa użytkowników.';
$txt['membergroups_new_board_post_groups'] = '<em>Uwaga! Normalnie, grupy mogące się wypowiadać nie potrzebują specjalnie ustawionych praw dostępu, ponieważ grupa, w której już się znajdują, daje im te uprawnienia.';
$txt['membergroups_new_as_type'] = 'wg typu';
$txt['membergroups_new_as_copy'] = 'bazujące na';
$txt['membergroups_new_copy_none'] = '(żadne)';
$txt['membergroups_can_edit_later'] = '(możesz zmienić je później)';

$txt['membergroups_edit_group'] = 'Modyfikuj grupę';
$txt['membergroups_edit_name'] = 'Nazwa grupy';
$txt['membergroups_edit_post_group'] = 'Ta grupa jest oparta na liczbie wiadomości.';
$txt['membergroups_min_posts'] = 'Wymagana liczba wiadomości';
$txt['membergroups_online_color'] = 'Kolor na liście użytkowników online';
$txt['membergroups_star_count'] = 'Ilość gwiazdek';
$txt['membergroups_star_image'] = 'Nazwa pliku gwiazdek';
$txt['membergroups_star_image_note'] = '(rozpoczynając od URL/images, możesz użyć $language dla języka danego użytkownika.)';
$txt['membergroups_max_messages'] = 'Maks. ilość prywatnych wiadomości';
$txt['membergroups_max_messages_note'] = '(0 = nieograniczona)';
$txt['membergroups_edit_save'] = 'Zapisz';
$txt['membergroups_delete'] = 'Usuń';
$txt['membergroups_confirm_delete'] = 'Czy na pewno chcesz usunąć tę grupę?';

$txt['membergroups_members_title'] = 'Wyświetlanie wszystkich użytkowników w grupie';
$txt['membergroups_members_no_members'] = 'Ta grupa jest obecnie pusta';
$txt['membergroups_members_add_title'] = 'Dodaj użytkownika do tej grupy';
$txt['membergroups_members_add_desc'] = 'Lista użytkowników do dodania';
$txt['membergroups_members_add'] = 'Dodaj użytkowników';
$txt['membergroups_members_remove'] = 'Usuń z grupy';

$txt['membergroups_postgroups'] = 'Grupy wiadomości';

$txt['membergroups_edit_groups'] = 'Edytuj grupy użytkowników';
$txt['membergroups_settings'] = 'Ustawienia grup użytkowników';
$txt['groups_manage_membergroups'] = 'Grupy którym wolno zmieniać grupy użytkowników';
$txt['membergroups_settings_submit'] = 'Zapisz';
$txt['membergroups_select_permission_type'] = 'Wybierz profil uprawnień';
$txt['membergroups_images_url'] = '{URL stylu}/images/';
$txt['membergroups_select_visible_boards'] = 'Pokaż działy';

$txt['admin_browse_approve'] = 'Użytkownicy, których konta oczekują na zatwierdzenie';
$txt['admin_browse_approve_desc'] = 'Tutaj możesz zarządzać wszystkimi użytkownikami, którzy czekają na zatwierdzenie ich kont.'
 ;
$txt['admin_browse_activate'] = 'Użytkownicy, których konta oczekują na aktywację';
$txt['admin_browse_activate_desc'] = 'Tu wymienieni są wszyscy użytkownicy, którzy jeszcze nie aktywowali swoich kont na twoim forum.';
$txt['admin_browse_awaiting_approval'] = 'Oczekiwanie na zatwierdzenie <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Oczekujący na aktywację (%d)';

$txt['admin_browse_username'] = 'Nazwa użytkownika';
$txt['admin_browse_email'] = 'Adres email'
 ;
$txt['admin_browse_ip'] = 'Adres IP';
$txt['admin_browse_registered'] = 'Zarejestrowany';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Z zaznaczonym';
$txt['admin_browse_no_members_approval'] = 'Aktualnie żaden użytkownik nie czeka na zgodę.';
$txt['admin_browse_no_members_activate'] = 'Aktualnie żaden użytkownik nie zdążył aktywować swojego konta.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'wszyscy zaznaczeni użytkownicy?';
$txt['admin_browse_outstanding_warn'] = 'wszyscy dotknięci użytkownicy?';
$txt['admin_browse_w_approve'] = 'Zatwierdź';
$txt['admin_browse_w_activate'] = 'Aktywuj';
$txt['admin_browse_w_delete'] = 'Usuń';
$txt['admin_browse_w_reject'] = 'Odrzuć';
$txt['admin_browse_w_remind'] = 'Przypomnij';
$txt['admin_browse_w_approve_deletion'] = 'Zatwierdź (usuń konto)';
$txt['admin_browse_w_email'] = 'i wyslij email';
$txt['admin_browse_w_approve_require_activate'] = 'Zatwierdź i wymagaj aktywacji';

$txt['admin_browse_filter_by'] = 'Filtruj:';
$txt['admin_browse_filter_show'] = 'Wyświetlane';
$txt['admin_browse_filter_type_0'] = 'Nieaktywowane nowe konta';
$txt['admin_browse_filter_type_2'] = 'Nieaktywowane zmiany adresu email';
$txt['admin_browse_filter_type_3'] = 'Niezatwierdzone nowe konta';
$txt['admin_browse_filter_type_4'] = 'Niezatwierdzone prośby o skasowanie konta';
$txt['admin_browse_filter_type_5'] = 'Niezatwierdzone konta z restrykcjami wiekowymi';

$txt['admin_browse_outstanding'] = 'Zalegający użytkownicy';
$txt['admin_browse_outstanding_days_1'] = 'Wszyscy użytkownicy zarejestrowani dłużej niż';
$txt['admin_browse_outstanding_days_2'] = 'dni temu';
$txt['admin_browse_outstanding_perform'] = 'Zrób to';
$txt['admin_browse_outstanding_go'] = 'Zrób to';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Rejestracja odrzucona';
$txt['admin_approve_reject_desc'] = 'Przykro nam, ale twoje zgłoszenie do ' . $context['forum_name'] . ' zostało odrzucone.'
 ;
$txt['admin_approve_delete'] = 'Konto usunięte';
$txt['admin_approve_delete_desc'] = 'Twoje konto na ' . $context['forum_name'] . ' zostało usunięte. Możliwe, że nigdy nie było ono aktywowane. Jeżeli tak, możesz zarejestrować się ponownie.'
 ;
$txt['admin_approve_remind'] = 'Przypomnienie rejestracji';
$txt['admin_approve_remind_desc'] = 'Wciąż nie aktywowałeś konta na';
$txt['admin_approve_remind_desc2'] = 'Kliknij na odnośnik poniżej aby je aktywować:';
$txt['admin_approve_accept_desc'] = 'Twoje konto zostało aktywowane przez administratora, możesz sie teraz zalogowac i wysylać nowe wiadomości.';
$txt['admin_approve_require_activation'] = 'Twoje konto na '.$context['forum_name'].' zostało zatwierdzone przez administratora i musi zostać aktywowane zanim zaczniesz wysyłać wiadomości';

?>