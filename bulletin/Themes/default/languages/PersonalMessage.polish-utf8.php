<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Indeks Prywatnych Wiadomości';
$txt[148] = 'Wyślij wiadomość';
$txt[150] = 'Do';
$txt[1502] = 'Kopia do';
$txt[316] = 'Odebrane';
$txt[320] = 'Wysłane';
$txt[321] = 'Nowa wiadomość';
$txt[411] = 'Usuń wiadomości';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Usuń wszystkie wiadomości z PMBOX';
$txt[413] = 'Czy na pewno chcesz usunąć wszystkie wiadomości?';
$txt[535] = 'Odbiorca';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Nowa prywatna wiadomość: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'SENDER z ' . $context['forum_name'] . ' wysłał do Ciebie wiadomość.' . "\n\n" . 'UWAGA: To jest tylko powiadomienie, nie odpowiadaj na ten email.' . "\n\n" . 'Wysłana wiadomość brzmi:' . "\n\n" . 'MESSAGE';
$txt[748] = '(kilku odbiorców: \'użytkownik1, użytkownik2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Tu możesz odpowiedzieć na tę wiadomość:';

$txt['smf249'] = 'Czy na pewno chcesz usunąć wszystkie zaznaczone wiadomości?';

$txt['sent_to'] = 'Wysłane do';
$txt['reply_to_all'] = 'Odpowiedz wszystkim';

$txt['pm_capacity'] = 'Pojemność';
$txt['pm_currently_using'] = '%s wiadomości, %s%% zajęte.';

$txt['pm_error_user_not_found'] = 'Nie można znaleźć użytkownika \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Użytkownik \'%s\' zablokował twoją prywatną wiadomość.';
$txt['pm_error_data_limit_reached'] = 'Nie można wysłać PW do \'%s\', limit PW osiągnięty.';
$txt['pm_successfully_sent'] = 'PW wysłana do %s odbiorcy(ów)';
$txt['pm_too_many_recipients'] = 'Nie możesz wysłać wiadomości do więcej niż %d odbiorców na raz.';
$txt['pm_too_many_per_hour'] = 'Limit %d prywatnych wiadomości na godzinę został osiągnięty.';
$txt['pm_send_report'] = 'Zgłoś niemiłą wiadomość adminowi';
$txt['pm_save_outbox'] = 'Zachowaj kopię w wysłanych';
$txt['pm_undisclosed_recipients'] = 'Odbiorcy nieujawnieni';

$txt['pm_read'] = 'Przeczytane';
$txt['pm_replied'] = 'Wysłano odpowiedź';

// Message Pruning.
$txt['pm_prune'] = 'Usuń wiadomości';
$txt['pm_prune_desc1'] = 'Usuń wszystkie wiadomości starsze niż';
$txt['pm_prune_desc2'] = 'dni.';
$txt['pm_prune_warning'] = 'Na pewno usunąć stare wiadomości prywatne?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Inne możliwości';
$txt['pm_actions_delete_selected'] = 'Usuń zaznaczone';
$txt['pm_actions_filter_by_label'] = 'Przefiltruj według etykiety';
$txt['pm_actions_go'] = 'Idź do';

// Manage Labels Screen.
$txt['pm_apply'] = 'Zastosuj';
$txt['pm_manage_labels'] = 'Zarządzaj etykietami';
$txt['pm_labels_delete'] = 'Jesteś pewien że chcesz usunąć zaznaczone etykiety?';
$txt['pm_labels_desc'] = 'Tu możesz dodawać, edytować i usuwać etykiety użyte w Twoim centrum wiadomośći.';
$txt['pm_label_add_new'] = 'Dodaj nową etykietę';
$txt['pm_label_name'] = 'Nazwa etykiety';
$txt['pm_labels_no_exist'] = 'Nie masz obecnie ustawień etykiet!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etykieta';
$txt['pm_msg_label_title'] = 'Oznacz wiadomość etykietą';
$txt['pm_msg_label_apply'] = 'Dodaj etykietę';
$txt['pm_msg_label_remove'] = 'Usuń etykietę';
$txt['pm_msg_label_inbox'] = 'Odebrane';
$txt['pm_sel_label_title'] = 'Etykieta zaznaczona';
$txt['labels_too_many'] = 'Wiadomość %s posiada już maksymalną ilość dozwolonych etykiet!';

// Sidebar Headings.
$txt['pm_labels'] = 'Etykiety';
$txt['pm_messages'] = 'Wiadomości';
$txt['pm_preferences'] = 'Ustawienia';

$txt['pm_is_replied_to'] = 'Na tę wiadomość już odpowiedziałeś lub przesłałeś ją dalej.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Zgłoś do administratora';
$txt['pm_report_title'] = 'Powiadamiaj o prywatnych wiadomościach';
$txt['pm_report_desc'] = 'Z tej strony możesz zgłosić odebraną prywatną wiadomość do administracji forum. Proszę dołączyć informację dlaczego zgłaszasz tą wiadomość. To zgłoszenie zostanie przesłane razem z wiadomością orginalną';
$txt['pm_report_admins'] = 'Administrator do którego wysłać zgłoszenie';
$txt['pm_report_all_admins'] = 'Wyślij do wszystkich administratorów forum';
$txt['pm_report_reason'] = 'Powód dla którego zgłaszasz tą wiadomość';
$txt['pm_report_message'] = 'Zgłoś wiadomość';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[ZGŁOSZENIE]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} zgłosił następującą PW, wysłaną przez {SENDER}, z następujących powodów:';
$txt['pm_report_pm_other_recipients'] = 'Dodatkowi odbiorcy tej wiadomości:';
$txt['pm_report_pm_hidden'] = '%d ukrytych dodatkowych odbiorców';
$txt['pm_report_pm_unedited_below'] = 'Poniżej jest zawartość zgłaszanej PW';
$txt['pm_report_pm_sent'] = 'Wyślij:';

$txt['pm_report_done'] = 'Dziękujemy za zgłoszenie, w najbliższym czasie spodziewaj się odpowiedzi od administracji.';
$txt['pm_report_return'] = 'Wróć do skrzynki odbiorczej';

$txt['pm_search_title'] = 'Szukaj w Prywatnych Wiadomościach';
$txt['pm_search_bar_title'] = 'Znajdź Wiadomość';
$txt['pm_search_text'] = 'Szukaj';
$txt['pm_search_go'] = 'Szukaj';
$txt['pm_search_advanced'] = 'Wyszukiwanie zaawansowane';
$txt['pm_search_user'] = 'Wysłane przez';
$txt['pm_search_match_all'] = 'Dopasuj wszystkie słowa';
$txt['pm_search_match_any'] = 'Dopasuj jakiekolwiek ze słów';
$txt['pm_search_options'] = 'Opcje';
$txt['pm_search_post_age'] = 'Wiek';
$txt['pm_search_show_complete'] = 'Pokaż całą wiadomość w rezultatach wyszukiwania.';
$txt['pm_search_subject_only'] = 'Szukaj tylko według tematu i autora';
$txt['pm_search_between'] = 'Pomiędzy';
$txt['pm_search_between_and'] = 'i';
$txt['pm_search_between_days'] = 'dni';
$txt['pm_search_order'] = 'Sortuj wyniki według';
$txt['pm_search_choose_label'] = 'Wybierz etykietę do przeszukania, lub przeszukaj wszystkie';

$txt['pm_search_results'] = 'Wyniki poszukiwania';
$txt['pm_search_none_found'] = 'Nie znaleziono poszukiwanej Wiadomości';

$txt['pm_search_orderby_relevant_first'] = 'Najpierw najlepiej dopasowane';
$txt['pm_search_orderby_recent_first'] = 'Najpierw najnowsze';
$txt['pm_search_orderby_old_first'] = 'Najpierw najstarsze';

$txt['pm_visual_verification_label'] = 'Weryfikacja';
$txt['pm_visual_verification_desc'] = 'Wpisz litery widoczne na obrazku.';
$txt['pm_visual_verification_listen'] = 'Odsłuchaj litery';

?>