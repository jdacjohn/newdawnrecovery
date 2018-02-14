<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'Instalator SMF';
$txt['installer_language'] = 'Język';
$txt['installer_language_set'] = 'Ustaw';
$txt['congratulations'] = 'Gratulacje, proces instalacji zakończony!';
$txt['congratulations_help'] = 'Jeśli SMF nie będzie poprawnie działało, lub będziesz kiedykolwiek potrzebował pomocy pamiętaj, że zawsze możesz zwrócić się o nią <a href="http://www.simplemachines.org/community/index.php">do nas</a>.';
$txt['still_writable'] = 'Wciąż można zapisywać w Twoim katalogu instalacyjnym. Z powodów bezpieczeństwa powinieneś przeprowadzić na nim chmod, tak żeby nie można było w nim zapisywać.';
$txt['delete_installer'] = 'Kliknij tu aby usunąć plik install.php.';
$txt['delete_installer_maybe'] = '<i>(nie działa na niektórych serwerach.)</i>';
$txt['go_to_your_forum'] = 'Teraz możesz odwiedzić <a href="%s">twoje nowo zainstalowane forum</a> i zacząć go używać. Aby móc skorzystać z funkcji administracyjnych, powinieneś najpierw się zalogować.';
$txt['good_luck'] = 'Powodzenia!<br />Zaołga Simple Machines';

$txt['user_refresh_install'] = 'Forum odświeżone';
$txt['user_refresh_install_desc'] = 'Podczas instalacji, instalator stwierdził (wykorzystując informacje podane przez Ciebie), że jedna lub więcej tabel, które instalator powinien utworzyć już istnieje.<br />Jakiekolwiek brakujące tabele w twojej instalacji zostały odtworzone z domyślnymi danymi, a z istniejących tabel niczego nie skasowano.';

$txt['default_topic_subject'] = 'Witamy w SMF!';
$txt['default_topic_message'] = 'Witamy w Forum Simple Machines!<br /><br />Mamy nadzieję, że używanie Twojego forum będzie Ci się podobało.&#160; Jeśli napotkasz jakiekolwiek problemy, zawsze możesz [url=http://www.simplemachines.org/community/index.php]zwrócić się do nas po pomoc[/url].<br /><br />Dziękujemy!<br />Simple Machines';
$txt['default_board_name'] = 'Dyskusja ogólna';
$txt['default_board_description'] = 'W tym dziale możesz rozmawiać o wszystkim.';
$txt['default_category_name'] = 'Kategoria ogólna';
$txt['default_time_format'] = '%B %d, %Y, %I:%M:%S %p';
$txt['default_news'] = 'Forum zostało uruchomione!';
$txt['default_karmaLabel'] = 'Reputacja';
$txt['default_karmaSmiteLabel'] = '[potępiam]';
$txt['default_karmaApplaudLabel'] = '[popieram]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nroot\\nGość\\nAdministrator';
$txt['default_smileyset_name'] = 'Standardowe';
$txt['default_classic_smileyset_name'] = 'Klasyczne';
$txt['default_theme_name'] = 'Domyślny styl SMF';
$txt['default_classic_theme_name'] = 'Styl Classic YaBB SE';
$txt['default_babylon_theme_name'] = 'Styl Babylon';

$txt['default_administrator_group'] = 'Administrator';
$txt['default_global_moderator_group'] = 'Moderator Globalny';
$txt['default_moderator_group'] = 'Moderator';
$txt['default_newbie_group'] = 'Nowy użytkownik';
$txt['default_junior_group'] = 'Użytkownik';
$txt['default_full_group'] = 'Aktywny użytkownik';
$txt['default_senior_group'] = 'Zaawansowany użytkownik';
$txt['default_hero_group'] = 'Ekspert';

$txt['default_smiley_smiley'] = 'Uśmiech';
$txt['default_wink_smiley'] = 'Mrugnięcie';
$txt['default_cheesy_smiley'] = 'Chichot';
$txt['default_grin_smiley'] = 'Duży uśmiech';
$txt['default_angry_smiley'] = 'Zły';
$txt['default_sad_smiley'] = 'Smutny';
$txt['default_shocked_smiley'] = 'Szok';
$txt['default_cool_smiley'] = 'Cool';
$txt['default_huh_smiley'] = 'Co?';
$txt['default_roll_eyes_smiley'] = 'Z politowaniem';
$txt['default_tongue_smiley'] = 'Język';
$txt['default_embarrassed_smiley'] = 'Zawstydzony';
$txt['default_lips_sealed_smiley'] = 'Buzia na kłódkę';
$txt['default_undecided_smiley'] = 'Niezdecydowany';
$txt['default_kiss_smiley'] = 'Buziak';
$txt['default_cry_smiley'] = 'Płacz';
$txt['default_evil_smiley'] = 'Zły';
$txt['default_azn_smiley'] = 'Uśmiech 2';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'Kliknij tutaj';
$txt['error_message_try_again'] = 'aby wykonać ten krok ponownie.';
$txt['error_message_bad_try_again'] = 'aby spróbować instalacji mimo wszystko. Miej jednak na uwadze, że jest to <i>gorąco</i> odradzane.';

$txt['install_settings'] = 'Podstawowe ustawienia';
$txt['install_settings_info'] = 'Kilka prostych rzeczy, które musisz ustawić ;).';
$txt['install_settings_name'] = 'Nazwa forum';
$txt['install_settings_name_info'] = 'To jest nazwa twojego forum, np. &quot;Forum testowe&quot;.';
$txt['install_settings_name_default'] = 'Moje forum';
$txt['install_settings_url'] = 'URL forum';
$txt['install_settings_url_info'] = 'To jest adres internetowy do twojego forum <b>(nie może być zakończony symbolem \'/\'!)</b>.<br />W większości przypadków możesz pozostawić w tym polu wartość domyślną.';
$txt['install_settings_compress'] = 'Kompresja Gzip';
$txt['install_settings_compress_title'] = 'Pakuj dane aby zmniejszyć transfer';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Funkcja ta nie działa na niektórych serwerach, ale zmniejszy zarówno transfer danych na forum, jak i rozmiary bazy danych.<br />Kliknij <a href="install.php?obgz=1&amp;pass_string=OK" onclick="return reqWin(this.href, 200, 60);">tutaj</a> aby ją przetestować (powinien pokazać się napis "OK").';
$txt['install_settings_dbsession'] = 'Sesje w bazie danych';
$txt['install_settings_dbsession_title'] = 'Użyj bazy danych zamiast plików do przechowania informacji sesjach';
$txt['install_settings_dbsession_info1'] = 'Najczęściej warto włączyć tę funkcję, ponieważ dzięki niej dane o sesjach są bardziej godne zaufania.';
$txt['install_settings_dbsession_info2'] = 'Nie wygląda na to, że ta funkcja zadziała na Twoim serwerze ale możesz spróbować.';
$txt['install_settings_utf8'] = 'Kodowanie UTF-8';
$txt['install_settings_utf8_title'] = 'Użyj UTF-8 jako domyślnego systemu kodowania';
$txt['install_settings_utf8_info'] = 'Ta opcja pozwoli bazie danych i forum używać międzynarodowego systemu kodowania znaków UTF-8. Jest ono przydatne podczas używania na forum wielu języków, które korzystają z różnych zestawów znaków.';
$txt['install_settings_stats'] = 'Pozwól pobierać statystyki';
$txt['install_settings_stats_title'] = 'Pozwól Simple Machines zbierać podstawowe statystyki co miesiąc';
$txt['install_settings_stats_info'] = 'Zaznaczone pozwoli Simple Machines odwiedzać Twoją stronę raz na miesiąc w celu zebrania podstawowych statystyk. Pomoże nam to podejmować decyzje pod jaką konfigurację mamy optymalizować oprogramowanie. Dla dalszych informacji zobacz naszą <a href="http://www.simplemachines.org/about/stats.php" target="_blank">stronę informacyjną</a>.';
$txt['install_settings_proceed'] = 'Wykonaj';

$txt['mysql_settings'] = 'Ustawienia serwera MySQL';
$txt['mysql_settings_info'] = 'Te ustawienia dotyczą twojego serwera MySQL. Jeśli nie znasz tych wartości, powinieneś zapytać o nie właściciela serwera.';
$txt['mysql_settings_server'] = 'Nazwa serwera MySQL';
$txt['mysql_settings_server_info'] = 'To prawie zawsze jest localhost - więc jeśli nie wiesz, spróbuj localhost.';
$txt['mysql_settings_username'] = 'Nazwa użytkownika MySQL';
$txt['mysql_settings_username_info'] = 'Tu wprowadź nazwę użytkownika, której używasz aby połączyć się z bazą danych MySQL.<br />Jeśli jej nie znasz, spróbuj nazwy użytkownika dla twojego konta FTP, w większości przypadków są one takie same.';
$txt['mysql_settings_password'] = 'Hasło MySQL';
$txt['mysql_settings_password_info'] = 'Tu podaj hasło, którego używasz aby połączyć się z bazą danych MySQL.<br />Jeśli go nie znasz powinieneś spróbować hasła twojego konta FTP.';
$txt['mysql_settings_database'] = 'Nazwa bazy danych MySQL';
$txt['mysql_settings_database_info'] = 'Wprowadź nazwę bazy danych, której ma używać SMF aby przechowywać dane.<br />Jeśli baza danych nie istnieje, instalator spróbuje ją utworzyć.';
$txt['mysql_settings_prefix'] = 'Prefiks bazy danych MySQL';
$txt['mysql_settings_prefix_info'] = 'Prefiks każdej z tabel w bazie danych.  <b>Nie instaluj dwóch forów z tym samym prefiksem!</b><br />Ta wartość pozwala na instalację kilku forów w jednej bazie danych.';

$txt['user_settings'] = 'Utwórz swoje konto';
$txt['user_settings_info'] = 'Instalator utworzy teraz twoje konto administratora.';
$txt['user_settings_username'] = 'Nazwa użytkownika';
$txt['user_settings_username_info'] = 'Wybierz nazwę, przy pomocy której chcesz się logować.<br />Nie może być ona zmieniona później, ale możesz zmienić swoją nazwę wyświetlaną.';
$txt['user_settings_password'] = 'Hasło';
$txt['user_settings_password_info'] = 'Tu wprowadź hasło i dobrze je zapamiętaj!';
$txt['user_settings_again'] = 'Hasło';
$txt['user_settings_again_info'] = '(dla sprawdzenia)';
$txt['user_settings_email'] = 'Adres email';
$txt['user_settings_email_info'] = 'Podaj również swój adres email. <b>Adres musi być prawidłowy.</b>';
$txt['user_settings_database'] = 'Hasło bazy danych MySQL';
$txt['user_settings_database_info'] = 'Z powodów bezpieczeństwa instalator wymaga, abyś w celu stworzenia konta administratora, podał hasło do bazy danych.';
$txt['user_settings_proceed'] = 'Koniec';

$txt['ftp_setup'] = 'Informacje o połączeniu FTP';
$txt['ftp_setup_info'] = 'Instalator może połączyć się poprzez FTP aby zmienić atrybuty plików, które muszą być zapisywalne, a nie są. Jeśli ta funkcja nie zadziała u ciebie, musisz własnoręcznie dokonać potrzebnych zmian. Opcja ta nie działa obecnie z SSL.';
$txt['ftp_server'] = 'Serwer';
$txt['ftp_server_info'] = 'To powinien być serwer i port twojego konta FTP.';
$txt['ftp_port'] = 'Port';
$txt['ftp_username'] = 'Nazwa użytkownika';
$txt['ftp_username_info'] = 'Nazwa używana w celu logowania się. <i>Nie będzie ona nigdzie zapisana.</i>';
$txt['ftp_password'] = 'Hasło';
$txt['ftp_password_info'] = 'Hasło używane w celu logowania się. <i>Nie będzie ono nigdzie zapisane.</i>';
$txt['ftp_path'] = 'Ścieżka instalacji';
$txt['ftp_path_info'] = 'To jest ścieżka pokazująca prawdziwą lokalizację plików na serwerze FTP (np. /public_html/smf).';
$txt['ftp_path_found_info'] = 'Ścieżka w polu powyżej została wykryta automatycznie.';
$txt['ftp_connect'] = 'Połącz';
$txt['ftp_setup_why'] = 'Po co jest ten krok?';
$txt['ftp_setup_why_info'] = 'Aby działać poprawnie, SMF musi mieć możliwość zapisywania w niektórych plikach. Teraz instalator wykona potrzebne zmiany na tych plikach. Jeśli jednak to nie zadziała, zmień atrybuty następujących plików na 777 (zapisywalne):';
$txt['ftp_setup_again'] = 'aby ponownie przetestować, czy można zapisywać w tych plikach.';

$txt['error_php_too_low'] = 'Uwaga! Wersja PHP zainstalowana na Twoim serwerze <b>nie spełnia minimalnych wymagań</b> SMF.<br />jeśli nie jesteś właścicielem serwera, będziesz musiał go poprosić o dokonanie uaktualnienia, możesz też skorzystać z innego serwera. W innym przypadku uaktualnij PHP do najnowszej wersji.<br /><br />Jeśli wiesz na pewno, że masz wystarczająco nową wersję PHP, możesz kontynuować, chociaż jest to odradzane.';
$txt['error_missing_files'] = 'Nie znaleziono niezbędnych plików w katalogu instalacji!<br /><br />Upewnij się, że wysłałeś na serwer cały pakiet instalacyjny, razem z plikiem sql i spróbuj ponownie.';
$txt['error_session_save_path'] = 'Poinformuj właściciela serwera, że <b>wpis session.save_path w php.ini</b> jest niewłaściwy! Musi on być zmieniony na katalog, który <b>istnieje</b> i ma możliwość <b>zapisu</b> przez użytkownika,  u którego jest uruchomione PHP.<br />';
$txt['error_windows_chmod'] = 'Jesteś na serwerze windows i niektóre niezbędne pliki nie są zapisywalne. Poproś właściciela serwera aby umożliwił <b>zapisywanie plików</b> twojej instalacji SMF użytnikowi, u którego jest uruchomione PHP.';
$txt['error_ftp_no_connect'] = 'Nie można połączyć się z serwerem FTP za pomocą wprowadzonych wartości.';
$txt['error_mysql_connect'] = 'Nie można połączyć się z bazą danych MySQL za pomocą wprowadzonych wartości.<br /><br />Jeśli nie masz pewności, co wpisać, zapytaj właściciela serwera.';
$txt['error_mysql_too_low'] = 'Twój serwer bazy danych używa wersji MySQL nie spełniającej minimalnych wymagań SMF.<br /><br />Poproś właściciela serwera aby ją zaktualizował albo zainstalował nową. Jeśli tego nie zrobi przenieś się na inny serwer.';
$txt['error_mysql_database'] = 'Instalator nie był w stanie uzyskać dostępu do bazy danych &quot;<i>%s</i>&quot;. W przypadku niektórych serwerów, będziesz musiał własnoręcznie utworzyć nową bazę danych w panelu administracyjnym serwera zanim SMF będzie mogło jej używać. Niektóre serwery dodają również prefiksy (np. twoją nazwę użytkownika) do nazwy bazy danych.';
$txt['error_mysql_queries'] = 'Niektóre z zapytań nie zostały poprawnie wykonane. Prawdopodobnie stało się tak dlatego, że serwer używa niekompatybilnej (rozwojowej lub starej) wersji MySQL.<br /><br />Informacja techniczna o zapytaniach:';
$txt['error_mysql_queries_line'] = 'Linia nr';
$txt['error_mysql_missing'] = 'Instalator nie wykrył wsparcia dla MySQL w PHP. Zapytaj właściciela serwera, czy PHP było skompilowane z MySQL i czy ładowane jest odpowiednie rozszerzenie.';
$txt['error_session_missing'] = 'Instalator nie był w stanie wykryć wsparcia dla sesji w PHP na Twoim serwerze. Zapytaj się właściciela serwera, czy PHP było skompilowane ze wsparciem dla sesji (a raczej czy specjalnie zostało skompilowane bez)';
$txt['error_user_settings_again_match'] = 'Wpisałeś dwa różne hasła!';
$txt['error_user_settings_taken'] = 'Przykro nam, jeden z członków już używa tej nazwy użytkownika i/lub hasła.<br /><br />Nie utworzono nowego konta.';
$txt['error_user_settings_query'] = 'Wystąpił błąd bazy danych podczas próby utworzenia konta administratora. Błąd ma następującą postać:';
$txt['error_subs_missing'] = 'Nie można odnaleźć pliku Sources/Subs.php. Upewnij się, że został prawidłowo wysłany na serwer i spróbuj ponownie.';
$txt['error_mysql_alter_priv'] = 'Konto MySQL które wskazałeś nie ma uprawnień do wykonania poleceń SQL: ALTER, CREATE, i/lub DROP tabeli w bazie danych; jest to wymagane dla poprawnego funkcjonowania SMF.';
$txt['error_versions_do_not_match'] = 'Instalator wykrył inną wersję SMF zainstalowaną z podanymi teraz informacjami. Jeśli probujesz dokonać uaktualnienia, powinieneś użyć pakiet uaktualniający a nie instalujący.<br /><br />Możesz również spróbować podać inne dane bazy danych, lub zrobić kopię bezpieczeństwa i usunąć aktualną bazę danych, w celu dokończenia instalacji.' ;
$txt['error_mod_security'] = 'Instalator wykrył, że na Twoim serwerze jest zainstalowany moduł mod_security. Mod_security będzie blokować wysyłane formularze nawet zanim SMF będzie w stanie zrobić z nimi cokolwiek. SMF posiada wbudowany skaner bezpieczeństwa, który będzie działać efektywniej niż mod_security i nie będzie blokować wysyłanych formularzy.<br /><br />.<a href="http://www.simplemachines.org/redirect/mod_security">Więcej o wyłączaniu mod_security</a>';
$txt['error_utf8_mysql_version'] = 'Obecna wersja bazy danych nie wspiera kodowania UTF-8. Możesz nadal zainstalować SMF bez żadnych problemów, ale bez obsługi UTF-8. Gdybyś chciał przejść w przyszłości na UTF-8 (n.p. po zaktualiowaniu MySQL\'a >= 4.1), możesz przeprowadzić konwersję na UTF-8 przez panel administracyjny.';

?>