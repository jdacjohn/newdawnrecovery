<?php
// Version: 1.1.2; Login

$txt[37] = 'Powinieneś podać nazwę użytkownika.';
$txt[38] = 'Pole hasła jest puste';
$txt[39] = 'Hasło niewłaściwe';
$txt[98] = 'Wybierz nazwę użytkownika';
$txt[155] = 'Forum chwilowo niedostępne';
$txt[245] = 'Rejestracja zakończona pomyślnie';
$txt[431] = 'Jesteś teraz członkiem forum.';
// Use numeric entities in the below string.
$txt[492] = 'twoje hasło to';
$txt[500] = 'Wpisz prawidłowy adres email, %s.';
$txt[517] = 'Informacje wymagane';
$txt[520] = 'Używane do identyfikacji przez SMF. Możesz używać znaków specjalnych po zalogowaniu, zmieniając wyświetlaną nazwę użytkownika w profilu.';
$txt[585] = 'Zgadzam się';
$txt[586] = 'Nie zgadzam się';
$txt[633] = 'Uwaga!';
$txt[634] = 'Tylko zarejestrowani użytkownicy mają dostęp do tej sekcji.';
$txt[635] = 'Zaloguj się lub';
$txt[636] = 'zarejestruj';
$txt[637] = 'w ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Możesz je zmienić po zalogowaniu wchodząc do profilu lub odwiedzając tę stronę:';
$txt[719] = 'Twoja nazwa użytkownika to: ';
$txt[730] = 'Ten adres email (%s) jest już używany przez zarejestrowanego użytkownika. Jeśli uważasz, że to błąd, przejdź do strony logowania i użyj funkcji przypomnienia hasła z tym adresem.';

$txt['login_hash_error'] = 'Ustawienia bezpieczeństwa zostały podniesione. Proszę ponownie wpisać hasło.';

$txt['register_age_confirmation'] = 'Mam conajmniej %d lat';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Witaj na ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Zostałeś właśnie zarejestrowany z kontem w ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Twoja nazwa użytkownika to %2$s a hasło brzmi %3$s.' . "\n\n" . 'Możesz zmienić hasło gdy się zalogujesz wchodząc w stronę edycji swojego profilu bądź bezpośrednio poprzez następujący adres:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Twoje konto w ' . $context['forum_name'] . ', zostało zarejestrowane, %1$s!' . "\n\n" . 'Twoja nazwa użytkownika to %2$s, a hasło brzmi %3$s (można je później zmienić.)' . "\n\n" . 'Zanim będziesz mógł się zalogować, musisz wpierw aktywować konto. Aby to uczynić użyj poniższego adresu:' . "\n\n" . '%5$s' . "\n\n" . 'W razie jakichkolwiek problemów z rejestracją użyj tego kodu "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Twoja prośba o rejestrację w ' . $context['forum_name'] . ' została odebrana, %1$s.' . "\n\n" . 'Nazwa użytkownika jaką wybrałeś to %2$s a hasło brzmiało %3$s.' . "\n\n" . 'Zanim będziesz mógł się zalogować i zacząć używać forum, twoja prośba będzie musiała zostać przejrzana i zaaprobowana. Kiedy to się stanie, dostaniesz jeszcze jeden email z tego adresu.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Jesteś już zarejestrowany z własnym kontem w ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Twoja nazwa użytkownika to "%2$s".' . "\n\n" . 'Zanim będziesz się mógł zalogować, musisz wpierw aktywować to konto. Aby to zrobić kliknij na ten link:' . "\n\n" . '%4$s' . "\n\n" . 'W razie jakiś problemów z aktywacją użyj tego kodu "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Twoja prośba o rejestrację w ' . $context['forum_name'] . ' została odebrana, %1$s.' . "\n\n" . 'Twój login to %2$s.' . "\n\n" . 'Jednak zanim będziesz mógł się zalogować i zacząć używać forum, zlecenie będzie musiało zostać zaaprobowane przez administrację. Kiedy to się zdarzy, dostaniesz jeszcze jeden email z tego adresu.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Przykro nam, nie możesz zarejestrować się na tym forum';
$txt['under_age_registration_prohibited'] = 'Przykro nam, ale użytkownicy poniżej %d nie mają pozwolenia na rejstrację na tym forum.';

$txt['activate_account'] = 'Aktywacja konta';
$txt['activate_success'] = 'Twoje konto zostało aktywowane. Teraz możesz się zalogować.';
$txt['activate_not_completed1'] = 'Twój adres email musi zostać zweryfikowany, zanim będziesz mógł się zalogować.';
$txt['activate_not_completed2'] = 'Potrzebujesz następnego emaila aktywacyjnego?';
$txt['activate_after_registration'] = 'Dziękujemy za rejestrację. Wkrótce otrzymasz email z odnośnikiem potrzebnym do aktywacji konta.';
$txt['invalid_userid'] = 'Użytkownik nie istnieje';
$txt['invalid_activation_code'] = 'Nieprawidłowy kod aktywacyjny';
$txt['invalid_activation_username'] = 'Nazwa użytkownika lub email';
$txt['invalid_activation_new'] = 'Jeśli zarejestrowałeś się ze złym adresem wpisz właściwy adres i twoje hasło tutaj.';
$txt['invalid_activation_new_email'] = 'Nowy adres email';
$txt['invalid_activation_password'] = 'Stare hasło';
$txt['invalid_activation_resend'] = 'Wyślij kod aktywacyjny ponownie';
$txt['invalid_activation_known'] = 'Jeśli już znasz twój kod aktywacyjny, wpisz go tutaj.';
$txt['invalid_activation_retry'] = 'Kod aktywacyjny';
$txt['invalid_activation_submit'] = 'Aktywuj';

$txt['coppa_not_completed1'] = 'Administrator wciąż nie otrzymał zgody twojego rodzica bądź opiekuna';
$txt['coppa_not_completed2'] = 'Więcej szczegółów?';

$txt['awaiting_delete_account'] = 'Twoje konto zostało zaznaczone jako do usunięcia! Jeśli chcesz je odzyskać, proszę zaznaczyć "Reaktywuj moje konto" i zaloguj się ponownie.';
$txt['undelete_account'] = 'Reaktywuj moje konto';

$txt['change_email_success'] = 'Twój adres email został zmieniony. Na nowy adres został wysłany email aktywacyjny.';
$txt['resend_email_success'] = 'Nowy email aktywacyjny został wysłany.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Nowe hasło';
$txt['change_password_1'] = 'Informacje o logowaniu na';
$txt['change_password_2'] = 'zostały zmienione, a twoje hasło zostało zresetowane. Poniżej znajdują się informacje o twoim nowym loginie i haśle.';

$txt['maintenance3'] = 'To forum jest w trybie obsługi.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Proszę przeczytaj i zaakceptuj warunki aby wysłać formularz.';
$txt['register_passwords_differ_js'] = 'Wpisane hasła nie są takie same !';

$txt['approval_after_registration'] = 'Dziękujemy za rejestrację. Administrator musi zatwierdzić Twoją rejestrację zanim będziesz mógł używać swojego konta. Wkrótce otrzymasz email z decyzją administratora.';

$txt['admin_settings_desc'] = 'Możesz tutaj zmienić rozmaite ustawienia dotyczące rejestracji nowych użytkowników.';

$txt['admin_setting_registration_method'] = 'Metoda rejestracji dla nowych użytkowników';
$txt['admin_setting_registration_disabled'] = 'Rejestracja wyłączona';
$txt['admin_setting_registration_standard'] = 'Natychmiastowa rejestracja';
$txt['admin_setting_registration_activate'] = 'Aktywacja użytkownika';
$txt['admin_setting_registration_approval'] = 'Zatwierdzenie użytkownika';
$txt['admin_setting_notify_new_registration'] = 'Powiadom administrację gdy nowy użytkownik się dołącza';
$txt['admin_setting_send_welcomeEmail'] = 'Wysyłaj emaile powitalne nowym użytkownikom';

$txt['admin_setting_password_strength'] = 'Wymagana siła haseł użytkowników';
$txt['admin_setting_password_strength_low'] = 'Niska - minimum 4 znaki';
$txt['admin_setting_password_strength_medium'] = 'Średnia - nie może zawierać nazwy użytkownika';
$txt['admin_setting_password_strength_high'] = 'Wysoka - mieszanka różnych znaków';

$txt['admin_setting_image_verification_type'] = 'Złożoność obrazka do weryfikacji (CAPTCHA)';
$txt['admin_setting_image_verification_type_desc'] = 'Im bardziej obraz jest złożony, tym trudniejsze jest obejście go przez boty';
$txt['admin_setting_image_verification_off'] = 'Wyłącz';
$txt['admin_setting_image_verification_vsimple'] = 'Bardzo prosty - Sam tekst';
$txt['admin_setting_image_verification_simple'] = 'Prosty - Nachodzące na siebie kolorowe litery, bez szumu';
$txt['admin_setting_image_verification_medium'] = 'Średni - Nachodzące na siebie kolorowe litery, z szumem';
$txt['admin_setting_image_verification_high'] = 'Trudny - Pochylone litery, znaczny szum';
$txt['admin_setting_image_verification_sample'] = 'Przykład';
$txt['admin_setting_image_verification_nogd'] = '<b>Uwaga:</b> ustawienie złożoności nie ma znaczenia, ponieważ serwer nie ma zainstalowanej biblioteki GD.';

$txt['admin_setting_coppaAge'] = 'Wiek poniżej którego należy dać ograniczenia związane z rejestracją';
$txt['admin_setting_coppaAge_desc'] = '(Ustaw 0 aby wyłączyć)';
$txt['admin_setting_coppaType'] = 'Co należy zrobić z użytkownikami próbującymi się zarejestrować poniżej wymaganego wieku';
$txt['admin_setting_coppaType_reject'] = 'Odrzuć ich próbę rejestracji';
$txt['admin_setting_coppaType_approval'] = 'Wymaga zatwierdzenia przez rodzica bądź opiekuna';
$txt['admin_setting_coppaPost'] = 'Adres pocztowy na który należy wysyłać formularze zatwierdzające';
$txt['admin_setting_coppaPost_desc'] = 'Ma sens tylko gdy rejestracja jest ograniczona wiekowo';
$txt['admin_setting_coppaFax'] = 'Numer faksu na jaki mają być przesłane formularze zatwierdzające';
$txt['admin_setting_coppaPhone'] = 'Numer kontaktowy dla rodziców w sprawie ograniczeń wiekowych';
$txt['admin_setting_coppa_require_contact'] = 'Muszą podać adres pocztowy bądź numer faksu jeśli zgoda rodzica bądź opiekuna jest wymagana';

$txt['admin_register'] = 'Rejestracja nowego użytkownika';
$txt['admin_register_desc'] = 'Tutaj możesz zarejestrować nowych użytkowników i jeśli chcesz wysłać im szczegóły emailem.';
$txt['admin_register_username'] = 'Nowa nazwa użytkownika';
$txt['admin_register_email'] = 'Adres email';
$txt['admin_register_password'] = 'Hasło';
$txt['admin_register_username_desc'] = 'Nazwa użytkownika dla nowego członka';
$txt['admin_register_email_desc'] = 'Adres email użytkownika<br />(wymagany jeśli zechcesz wysłać szczegóły rejestracji)';
$txt['admin_register_password_desc'] = 'Nowe hasło dla użytkownika';
$txt['admin_register_email_detail'] = 'Wyślij hasło użytkownikowi';
$txt['admin_register_email_detail_desc'] = 'Adres email wymagany nawet, gdy nie zaznaczono tej opcji';
$txt['admin_register_email_activate'] = 'Użytkownik musi aktywować konto';
$txt['admin_register_group'] = 'Podstawowa grupa użytkowników';
$txt['admin_register_group_desc'] = 'Podstawowa grupa, do której będzie należał nowy użytkownik';
$txt['admin_register_group_none'] = '(brak podstawowej grupy użytkowników)';
$txt['admin_register_done'] = 'Użytkownik %s został zarejestrowany!';

$txt['admin_browse_register_new'] = 'Zarejestruj nowego użytkownika';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Dołaczył nowy użytkownik';
$txt['admin_notify_profile'] = '%s właśnie zarejestrował się na forum. Kliknij na odnośnik poniżej, aby zobaczyć jego profil.';
$txt['admin_notify_approval'] = 'Zanim ten użytkownik będzie mógł zacząć wysyłać wiadomości, musisz zatwierdzić jego konto. Kliknij na odnośnik poniżej, aby przejść do okna zatwierdzania użytkowników.';

$txt['coppa_title'] = 'Forum ograniczone wiekowo';
$txt['coppa_after_registration'] = 'Dziękujemy za rejestrację w ' . $context['forum_name'] . '.<br /><br />Ponieważ nie masz jeszcze {MINIMUM_AGE} lat, prawnym wymogiem jest otrzymanie zgody twojego rodzica bądź opiekuna zanim będziesz mógł użyć swojego konta. Aby ją zdobyć proszę wydrukować poniższy formularz:';
$txt['coppa_form_link_popup'] = 'Pokaż formularz w nowym oknie';
$txt['coppa_form_link_download'] = 'Ściągnij formularz jako plik tekstowy';
$txt['coppa_send_to_one_option'] = 'Potem poproś swojego rodzica bądź opiekuna aby wysłał wypełniony formularz na adres:';
$txt['coppa_send_to_two_options'] = 'Potem poproś swojego rodzica bądź opiekuna aby wysłał wypełniony formularz:';
$txt['coppa_send_by_post'] = 'Wyślij na następujący adres:';
$txt['coppa_send_by_fax'] = 'Prześlij fax na następujący numer:';
$txt['coppa_send_by_phone'] = 'Alternatywnie możesz skontaktować się poprzez numer telefonu {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Formularz dotyczący zgody na rejestrację w ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Adres';
$txt['coppa_form_date'] = 'Data';
$txt['coppa_form_body'] = 'Ja, {PARENT_NAME},<br /><br />Daję pozwolenie {CHILD_NAME} (imię i nazwisko dziecka) aby stał się pełnym użytkownikiem forum: ' . $context['forum_name'] . ', z nazwą użytkownika: {USER_NAME}.<br /><br />Rozumiem, że informacje osobiste wpisane przez {USER_NAME} mogą być widoczne dla innych jego użytkowników.<br /><br />Podpisano:<br />{PARENT_NAME} (Rodzic/Opiekun).';

$txt['visual_verification_label'] = 'Weryfikacja';
$txt['visual_verification_description'] = 'Wpisz litery widoczne na obrazku.';
$txt['visual_verification_sound'] = 'Odsłuchaj litery';
$txt['visual_verification_sound_again'] = 'Odtwórz';
$txt['visual_verification_sound_close'] = 'Zamknij okno';
$txt['visual_verification_request_new'] = 'Pobierz inny obraz';
$txt['visual_verification_sound_direct'] = 'Masz problem z odsłuchaniem? Spróbuj pobrać plik bezpośrednio.';

?>