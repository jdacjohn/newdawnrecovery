<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'pl_PL.utf8';
$txt['lang_dictionary'] = 'pl';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');
$txt['days_short'] = array('Nd', 'Pn', 'Wt', 'Śr', 'Cz', 'Pt', 'So');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');
$txt['months_titles'] = array(1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');
$txt['months_short'] = array(1 => 'Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 'Lis', 'Gru');

$txt['newmessages0'] = 'nowa';
$txt['newmessages1'] = 'nowych';
$txt['newmessages3'] = 'Nowych';
$txt['newmessages4'] = ',';

$txt[2] = 'Administracja';

$txt[10] = 'Zachowaj';

$txt[17] = 'Modyfikuj';
$txt[18] = $context['forum_name'] . ' - Indeks';
$txt[19] = 'użytkowników';
$txt[20] = 'Nazwa działu';
$txt[21] = 'Wiadomości';
$txt[22] = 'Nowe:';

$txt[24] = '(Bez tematu)';
$txt[26] = 'Wiadomości';
$txt[27] = 'Zobacz profil';
$txt[28] = 'Gość';
$txt[29] = 'Autor';
$txt[30] = '';
$txt[31] = 'Usuń';
$txt[33] = 'Rozpocznij nowy wątek';

$txt[34] = 'Zaloguj się';
// Use numeric entities in the below string.
$txt[35] = 'Nazwa użytkownika';
$txt[36] = 'Hasło';

$txt[40] = 'Nazwa użytkownika nie istnieje.';

$txt[62] = 'Moderator działu';
$txt[63] = 'Usuń wątek';
$txt[64] = 'wątkach,';
$txt[66] = 'Modyfikuj wiadomość';
$txt[68] = 'Nazwa wyświetlana';
$txt[69] = 'Email';
$txt[70] = 'Temat';
$txt[72] = 'Wiadomość';

$txt[79] = 'Profil';

$txt[81] = 'Wybierz hasło';
$txt[82] = 'Potwierdź hasło';
$txt[87] = 'Pozycja';

$txt[92] = 'Zobacz profil';
$txt[94] = 'W sumie';
$txt[95] = 'wiadomości w';
$txt[96] = 'Strona WWW';
$txt[97] = 'Rejestracja';

$txt[101] = 'Indeks wiadomości';
$txt[102] = 'Aktualności';
$txt[103] = 'Strona główna';

$txt[104] = 'Zamknij/Otwórz wątek';
$txt[105] = 'Wyślij wiadomość';
$txt[106] = 'Wystąpił błąd!';
$txt[107] = 'at';
$txt[108] = 'Wyloguj się';
$txt[109] = 'Zaczęty przez';
$txt[110] = 'Odpowiedzi';
$txt[111] = 'Ostatnia wiadomość';
$txt[114] = 'Logowanie do administracji';
// Use numeric entities in the below string.
$txt[118] = 'Wątek';
$txt[119] = 'Pomoc';
$txt[121] = 'Usuń wiadomość';
$txt[125] = 'Powiadamiaj';
$txt[126] = 'Czy chcesz otrzymywać powiadomienia, kiedy ktoś odpowie na ten wątek?';
// Use numeric entities in the below string.
$txt[130] = "Pozdrowienia,\nZałoga " . $context['forum_name'] . '.';
$txt[131] = 'Powiadamiaj o odpowiedziach';
$txt[132] = 'Przesuń wątek';
$txt[133] = 'Przesuń do';
$txt[139] = 'Strony';
$txt[140] = 'Użytkownicy aktywni w ciągu ostatnich ' . $modSettings['lastActive'] . ' minut';
$txt[144] = 'Prywatne Wiadomości';
$txt[145] = 'Odpowiedz cytując';
$txt[146] = 'Odpowiedz';

$txt[151] = 'Brak wiadomości...';
$txt[152] = 'masz';
$txt[153] = 'wiadomości';
$txt[154] = 'Usunąć tę wiadomość';

$txt[158] = 'Użytkownicy online';
$txt[159] = 'Prywatne Wiadomości';
$txt[160] = 'Skocz do';
$txt[161] = 'Idź';
$txt[162] = 'Na pewno chcesz usunąć ten wątek?';
$txt[163] = 'Tak';
$txt[164] = 'Nie';

$txt[166] = 'Wyniki szukania';
$txt[167] = 'Koniec wyników';
$txt[170] = 'Nic nie znaleziono';
$txt[176] = 'on';

$txt[182] = 'Szukaj';
$txt[190] = 'Wszystkie';

$txt[193] = 'Wróć';
$txt[194] = 'Przypomnienie hasła';
$txt[195] = 'Wątek zaczęty przez';
$txt[196] = 'Tytuł';
$txt[197] = 'Wiadomość wysłana przez';
$txt[200] = 'Lista zarejestrowanych użytkowników.';
$txt[201] = 'Witamy';
$txt[208] = 'Centrum administracji';
$txt[211] = 'Ostatnia zmiana';
$txt[212] = 'Czy chcesz wyłączyć powiadamianie o tym wątku?';

$txt[214] = 'Ostatnie wiadomości';

$txt[227] = 'Miejsce pobytu';
$txt[231] = 'Płeć';
$txt[233] = 'Data rejestracji';

$txt[234] = 'Zobacz ostatnio wysłane wiadomości';
$txt[235] = 'jest najbardziej aktualnym wątkiem';

$txt[238] = 'Mężczyzna';
$txt[239] = 'Kobieta';

$txt[240] = 'Nieprawidłowy znak w nazwie użytkownika.';

$txt['welcome_guest'] = 'Witamy, <b>' . $txt[28] . '</b>. <a href="' . $scripturl . '?action=login">Zaloguj się</a> lub <a href="' . $scripturl . '?action=register">zarejestruj</a>.';
$txt['welcome_guest_activate'] = '<br />Czy dotarł do Ciebie <a href="' . $scripturl . '?action=activate">email aktywacyjny?</a>';
$txt['hello_member'] = 'Hej,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Witamy,';
$txt[247] = 'Hej,';
$txt[248] = 'Witamy,';
$txt[249] = 'Proszę';
$txt[250] = 'Wróć';
$txt[251] = 'Wybierz cel';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Wysłany przez';

$txt[287] = 'Uśmiech';
$txt[288] = 'Złość';
$txt[289] = 'Chichot';
$txt[290] = 'Śmiech';
$txt[291] = 'Smutny';
$txt[292] = 'Mrugnięcie';
$txt[293] = 'Duży uśmiech';
$txt[294] = 'Szok';
$txt[295] = 'Spoko';
$txt[296] = 'Co?';
$txt[450] = 'Z politowaniem';
$txt[451] = 'Język';
$txt[526] = 'Zawstydzony';
$txt[527] = 'Buzia na kłódkę';
$txt[528] = 'Niezdecydowany';
$txt[529] = 'Buziak';
$txt[530] = 'Płacz';

$txt[298] = 'Moderator';
$txt[299] = 'Moderatorzy';

$txt[300] = 'Zaznacz wątki w tym dziale jako przeczytane';
$txt[301] = 'Wyświetleń';
$txt[302] = 'Nowy';

$txt[303] = 'Zobacz wszystkich użytkowników';
$txt[305] = 'Zobacz';
$txt[307] = 'Email';

$txt[308] = 'Przeglądanie użytkowników';
$txt[309] = '';
$txt[310] = 'w sumie';
$txt[311] = 'do';
$txt[315] = 'Zapomniałeś hasła?';

$txt[317] = 'Data';
// Use numeric entities in the below string.
$txt[318] = 'Od';
$txt[319] = 'Temat';
$txt[322] = 'Sprawdź czy ni ma nowych wiadomości';
$txt[324] = 'Do';

$txt[330] = 'Wątków';
$txt[331] = 'Użytkownicy';
$txt[332] = 'Lista użytkowników';
$txt[333] = 'Nowe wiadomości';
$txt[334] = 'Brak nowych wiadomości';

$txt['sendtopic_send'] = 'Wyślij';

$txt[371] = 'Przesunięcie czasu';
$txt[377] = 'lub';

$txt[398] = 'Nic nie znaleziono';

$txt[418] = 'Powiadomienie';

$txt[430] = 'Przykro nam %s, jesteś zbanowany na tym forum!';

$txt[452] = 'Zaznacz wątki jako przeczytane';

$txt[454] = 'Gorący wątek (Więcej niż ' . $modSettings['hotTopicPosts'] . ' odpowiedzi)';
$txt[455] = 'Bardzo gorący wątek (Więcej niż ' . $modSettings['hotTopicVeryPosts'] . ' odpowiedzi)';
$txt[456] = 'Zamknięty wątek';
$txt[457] = 'Normalny wątek';
$txt['participation_caption'] = 'Wątek w którym uczestniczyłeś';

$txt[462] = 'IDŹ';

$txt[465] = 'Drukuj';
$txt[467] = 'Profil';
$txt[468] = 'Podgląd wątku';
$txt[470] = 'brak';
$txt[471] = 'wiadomość';
$txt[473] = 'Ta nazwa jest już używana przez innego użytkownika.';

$txt[488] = 'Użytkowników w sumie';
$txt[489] = 'Wiadomości w sumie';
$txt[490] = 'Wątków w sumie';

$txt[497] = 'Czas zalogowania (w minutach)';

$txt[507] = 'Podgląd';
$txt[508] = 'Bądź zawsze zalogowany';

$txt[511] = 'Zapisane';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'wysłane przez';

$txt[578] = 'godzin';
$txt[579] = 'dni';

$txt[581] = ', nasz najnowszy użytkownik.';

$txt[582] = 'Szukaj';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Czesc.+Jestes+tam?';
$txt[604] = 'YIM';

$txt[616] = 'Pamiętaj, forum jest tymczasowo zamknięte.';

$txt[641] = 'Przeczytany';
$txt[642] = 'razy';

$txt[645] = 'Statystyki forum';
$txt[656] = 'Najnowszy użytkownik';
$txt[658] = 'Kategorii w sumie';
$txt[659] = 'Ostatnio wysłane';

$txt[660] = 'Musisz';
$txt[661] = 'kliknąć';
$txt[662] = 'tu';
$txt[663] = 'aby je zobaczyć.';

$txt[665] = 'Działów w sumie';

$txt[668] = 'Drukuj stronę';

$txt[679] = 'Podaj prawidłowy adres email.';

$txt[683] = 'Jestem ekstra!';
$txt[685] = $context['forum_name'] . ' - Centrum informacji';

$txt[707] = 'Wyślij ten wątek';

$txt['sendtopic_title'] = 'Wyślij wątek &quot;%s&quot; do znajomego.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = '%s,';
$txt['sendtopic_this_topic'] = 'Chciałbym abyś przeczytał "%s" na ' . $context['forum_name'] . '. Aby to zrobić, kliknij ten link';
$txt['sendtopic_thanks'] = 'Dziękuję';
$txt['sendtopic_sender_name'] = 'Twoje imię';
$txt['sendtopic_sender_email'] = 'Twój adres email';
$txt['sendtopic_receiver_name'] = 'Imię odbiorcy';
$txt['sendtopic_receiver_email'] = 'Adres email odbiorcy';
$txt['sendtopic_comment'] = 'Dodaj komentarz';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Komentarz dotyczący tego wątku został dodany do listu';

$txt[721] = 'Ukryj adres email?';

$txt[737] = 'Zaznacz wszystko';

// Use numeric entities in the below string.
$txt[1001] = 'Błąd bazy danych';
$txt[1002] = 'Spróbuj ponownie. Jeśli powrócisz do tego komunikatu, zgłoś błąd administratorowi.';
$txt[1003] = 'Plik';
$txt[1004] = 'Linia';
// Use numeric entities in the below string.
$txt[1005] = 'SMF wykryło i spróbowało automatycznie naprawić błąd w bazie danych. Jeśli nadal będziesz napotykał problemy, lub otrzymywał te listy, skontaktuj się z właścicielem serwera.';
$txt['database_error_versions'] = '<b>Uwaga:</b> Wygląda na to, że twoja baza danych wymaga uaktualnienia. Pliki forum mają obecnie wersję ' . $forum_version . ', podczas gdy baza danych jest w wersji SMF ' . $modSettings['smfVersion'] . '. Powinieneś uruchomić najnowszą wersję upgrade.php.';
$txt['template_parse_error'] = 'Błąd parsowania stylu!';
$txt['template_parse_error_message'] = 'Wygląda na to, że coś poszło nie tak w systemie stylów. Ten problem powinien być tylko tymczasowy, spróbuj później. Jeśli nadal będzie się pojawiał ten komunikat, skontaktuj się z administratorem.<br /><br />Możesz równieź spróbować <a href="javascript:location.reload();">odświeżyć tę stronę</a>.';
$txt['template_parse_error_details'] = 'Wystąpił problem załadowaniem pliku stylu lub języka: <tt><b>%1$s</b></tt>. Sprawdź składnię i spróbuj ponownie - pamiętaj, pojedyncze cudzysłowy (<tt>\'</tt>) często muszą być poprzedzone ukośnikiem (<tt>\\</tt>). Aby zobaczyć bardziej szczegółową informację o błędzie z PHP, spróbuj <a href="' . $boardurl . '%1$s">połączyć się z plikiem bezpośrednio</a>.<br /><br />Możesz również <a href="javascript:location.reload();">odświeżyć tę stronę</a> lub <a href="' . $scripturl . '?theme=1">użyć domyślnego stylu</a>.';

$txt['smf10'] = '<b>Dzisiaj</b> o ';
$txt['smf10b'] = '<b>Wczoraj</b> o ';
$txt['smf20'] = 'Wyślij nową ankietę';
$txt['smf21'] = 'Pytanie';
$txt['smf23'] = 'Zagłosuj';
$txt['smf24'] = 'Głosów w sumie';
$txt['smf25'] = 'Skróty: naciśnij alt+s aby wysłać wiadomość, alt+p aby ją podejrzeć';
$txt['smf29'] = 'Zobacz wyniki.';
$txt['smf30'] = 'Zamknij głosowanie';
$txt['smf30b'] = 'Otwórz głosowanie';
$txt['smf39'] = 'Modyfikuj ankietę';
$txt['smf43'] = 'Ankieta';
$txt['smf47'] = '1 Dzień';
$txt['smf48'] = '1 Tydzień';
$txt['smf49'] = '1 Miesiąc';
$txt['smf50'] = 'Zawsze';
$txt['smf52'] = 'Zaloguj się podając nazwę użytkownika, hasło i długość sesji';
$txt['smf53'] = '1 Godzina';
$txt['smf56'] = 'PRZENIESIONY';
$txt['smf57'] = 'Wprowadź krótki opis, tłumaczący<br />powód przeniesienia wątku.';
$txt['smf60'] = 'Nie masz wystarczającej ilości wiadomości, aby modyfikować reputację - potrzebujesz przynajmniej ';
$txt['smf62'] = 'Aby móc wykonać tę czynność ponownie, musisz zaczekać ';
$txt['smf82'] = 'Dział';
$txt['smf88'] = '';
$txt['smf96'] = 'Wątek przyklejony';

$txt['smf138'] = 'Usuń';

$txt['smf199'] = 'Twoje prywatne wiadomości';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Więcej statystyk]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kod';
$txt['smf239'] = 'Cytat';
$txt['smf240'] = 'Cytuj';

$txt['smf251'] = 'Podziel wątek';
$txt['smf252'] = 'Scal wątki';
$txt['smf254'] = 'Temat nowego wątku';
$txt['smf255'] = 'Wydziel tylko tę wiadomość.';
$txt['smf256'] = 'Wydziel tę wiadomość i wszystkie nowsze od niej.';
$txt['smf257'] = 'Wybierz wiadomości do wydzielenia.';
$txt['smf258'] = 'Nowy wątek';
$txt['smf259'] = 'Wątek został podzielony na dwa.';
$txt['smf260'] = 'Wątek oryginalny';
$txt['smf261'] = 'Wybierz, które wiadomości chcesz wydzielić.';
$txt['smf264'] = 'Wątki zostały scalone.';
$txt['smf265'] = 'Nowo scalony wątek';
$txt['smf266'] = 'Wątek do scalenia';
$txt['smf267'] = 'Dział docelowy';
$txt['smf269'] = 'Wątek docelowy';
$txt['smf274'] = 'Na pewno chcesz scalić';
$txt['smf275'] = 'i';
$txt['smf276'] = 'Ta funkcja scali wiadomości z dwóch wątków w jeden. Wiadomości będą posortowane według daty wysłania. Najwcześniej wysłana wiadomość będzie pierwszą wiadomością wątku.';

$txt['smf277'] = 'Przyklej wątek';
$txt['smf278'] = 'Odklej wątek';
$txt['smf279'] = 'Zamknij wątek';
$txt['smf280'] = 'Otwórz wątek';

$txt['smf298'] = 'Szukanie zaawansowane';

$txt['smf299'] = 'POWAŻNE RYZYKO BEZPIECZEŃSTWA:';
$txt['smf300'] = 'Nie usunąłeś ';

$txt['smf301'] = 'Strona wygenerowana w ';
$txt['smf302'] = ' sekund z ';
$txt['smf302b'] = ' zapytaniami.';

$txt['smf315'] = 'Użyj tej funkcji aby poinformować moderatorów i administratorów forum o wiadomości łamiącej zasady forum.<br /><i>Twój adres email zostanie odkryty przed moderatorami, jeżeli jej użyjesz.</i>';

$txt['online2'] = 'Online';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Prywatna wiadomość (Online)';
$txt['online5'] = 'Prywatna wiadomość (Offline)';
$txt['online8'] = 'Status';

$txt['topbottom4'] = 'Do góry';
$txt['topbottom5'] = 'Do dołu';

if ($_SERVER['QUERY_STRING']=='')
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> :: <a href="http://www.siteground.com">Hosting Services for SMF by SiteGround</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}
else
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}


$txt['calendar3'] = 'Urodziny:';
$txt['calendar4'] = 'Wydarzenia:';
$txt['calendar3b'] = 'Nadchodzące urodziny:';
$txt['calendar4b'] = 'Nadchodzące wydarzenia:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Miesiąc:';
$txt['calendar10'] = 'Rok:';
$txt['calendar11'] = 'Dzień:';
$txt['calendar12'] = 'Nazwa wydarzenia:';
$txt['calendar13'] = 'Dodaj w:';
$txt['calendar20'] = 'Modyfikuj wydarzenie';
$txt['calendar21'] = 'Usunąć to wydarzenie?';
$txt['calendar22'] = 'Usuń wydarzenie';
$txt['calendar23'] = 'Dodaj wydarzenie';
$txt['calendar24'] = 'Kalendarz';
$txt['calendar37'] = 'Odnośnik do kalendarza';
$txt['calendar43'] = 'Połącz z wydarzeniem';
$txt['calendar47'] = 'Nadchodzące wydarzenia';
$txt['calendar47b'] = 'Kalendarz na dziś';
$txt['calendar51'] = 'Tydzień';
$txt['calendar54'] = 'Liczba dni:';
$txt['calendar_how_edit'] = 'jak modyfikować wydarzenia?';
$txt['calendar_link_event'] = 'Połącz Zdarzenie z Wiadomością';
$txt['calendar_confirm_delete'] = 'Na pewno chcesz usunąć to zdarzenie?';
$txt['calendar_linked_events'] = 'Połączone Zdarzenia';

$txt['moveTopic1'] = 'Wyślij wątek przekierowujący';
$txt['moveTopic2'] = 'Zmień temat wątku';
$txt['moveTopic3'] = 'Nowy temat';
$txt['moveTopic4'] = 'Zmień temat każdej wiadomości';

$txt['theme_template_error'] = 'Nie można załadować szablonu \'%s\'.';
$txt['theme_language_error'] = 'Nie można załadować pliku języka \'%s\'.';

$txt['parent_boards'] = 'Działy podrzędne';

$txt['smtp_no_connect'] = 'Nie można połączyć się z hostem SMTP';
$txt['smtp_port_ssl'] = 'Błędne ustawienie portu SMTP, powinno być 465 dla serwerów SSL.';
$txt['smtp_bad_response'] = 'Nie można uzyskać odpowiedzi z serwera poczty';
$txt['smtp_error'] = 'Wystąpiłyu błędy podczas wysyłania poczty. Błąd: ';
$txt['mail_send_unable'] = 'Nie można wysłać wiadomości email na adres \'%s\'';

$txt['mlist_search'] = 'Szukaj użytkowników';
$txt['mlist_search2'] = 'Szukaj ponownie';
$txt['mlist_search_email'] = 'Szukaj wg adresu email';
$txt['mlist_search_messenger'] = 'Szukaj wg identyfikatora komunikatora';
$txt['mlist_search_group'] = 'Szukaj wg pozycji';
$txt['mlist_search_name'] = 'Szukaj wg nazwy';
$txt['mlist_search_website'] = 'Szukaj wg strony WWW';
$txt['mlist_search_results'] = 'Szukaj w wynikach';

$txt['attach_downloaded'] = 'pobrany';
$txt['attach_viewed'] = 'wyświetlony';
$txt['attach_times'] = 'razy';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Konfiguracja';
$txt['never'] = 'Nigdy';
$txt['more'] = 'więcej';

$txt['hostname'] = 'Nazwa hosta';
$txt['you_are_post_banned'] = 'Przykro nam, nie wolno ci wysyłać wiadomości normalnych i prywatnych na tym forum.';
$txt['ban_reason'] = 'Powód';

$txt['tables_optimized'] = 'Tabele bazy danych zoptymalizowane';

$txt['add_poll'] = 'Dodaj ankietę';
$txt['poll_options6'] = 'Możesz wybrać maksymalnie %s opcji.';
$txt['poll_remove'] = 'Usuń ankietę';
$txt['poll_remove_warn'] = 'Na pewno chcesz usunąć ankietę z tego wątku?';
$txt['poll_results_expire'] = 'Wyniki będą pokazane, kiedy głosowanie będzie skończone';
$txt['poll_expires_on'] = 'Głosowanie się kończy';
$txt['poll_expired_on'] = 'Głosowanie skończone';
$txt['poll_change_vote'] = 'Usuń głos';
$txt['poll_return_vote'] = 'Opcje głosowania';

$txt['quick_mod_remove'] = 'Usuń zaznaczone';
$txt['quick_mod_lock'] = 'Zamknij zaznaczone';
$txt['quick_mod_sticky'] = 'Przyklej zaznaczone';
$txt['quick_mod_move'] = 'Przenieś zaznaczone do';
$txt['quick_mod_merge'] = 'Scal zaznaczone';
$txt['quick_mod_markread'] = 'Ustaw zaznaczone jako przeczytane';
$txt['quick_mod_go'] = 'Wykonaj!';
$txt['quickmod_confirm'] = 'Na pewno chcesz to zrobić?';

$txt['spell_check'] = 'Sprawdź ortografię';

$txt['quick_reply_1'] = 'Szybka odpowiedź';
$txt['quick_reply_2'] = 'W <i>szybkiej odpowiedzi</i> możesz użyć kodów BBC i uśmieszków tak jak przy normalnej odpowiedzi.';
$txt['quick_reply_warning'] = 'Uwaga: ten wątek jest obecnie zamknięty!<br />Tylko administratorzy i moderatorzy mogą wysyłać do niego odpowiedzi.';

$txt['notification_enable_board'] = 'Na pewno chcesz włączyć powiadamianie o nowych wątkach w tym dziale?';
$txt['notification_disable_board'] = 'Na pewno chcesz wyłączyć powiadamianie o nowych wątkach w tym dziale?';
$txt['notification_enable_topic'] = 'Na pewno chcesz włączyć powiadamianie o nowych odpowiedziach w tym wątku?';
$txt['notification_disable_topic'] = 'Na pewno chcesz wyłączyć powiadamianie o nowych odpowiedziach w tym wątku?';

$txt['rtm1'] = 'Zgłoś do moderatora';

$txt['unread_topics_visit'] = 'Nowe nieprzeczytane wątki';
$txt['unread_topics_visit_none'] = 'Brak nieprzeczytanych wątków od twojej ostatniej wizyty. <a href="' . $scripturl . '?action=unread;all">Kliknij tu, aby wyświetlić wszystkie nieprzeczytane wątki</a>.';
$txt['unread_topics_all'] = 'Wszystkie nieprzeczytane wątki';
$txt['unread_replies'] = 'Wątki z nowymi odpowiedziami';

$txt['who_title'] = 'Kto jest online';
$txt['who_and'] = ' i ';
$txt['who_viewing_topic'] = ' przegląda ten wątek.';
$txt['who_viewing_board'] = ' przeglądają ten dział.';
$txt['who_member'] = 'Użytkownik';

$txt['powered_by_php'] = 'Działa na PHP';
$txt['powered_by_mysql'] = 'Działa na MySQL';
$txt['valid_html'] = 'Prawidłowy HTML 4.01!';
$txt['valid_xhtml'] = 'Prawidłowy XHTML 1.0!';
$txt['valid_css'] = 'Prawidłowy CSS!';

$txt['guest'] = 'Gość';
$txt['guests'] = 'Gości';
$txt['user'] = 'Użytkownik';
$txt['users'] = 'Użytkowników';
$txt['hidden'] = 'Ukrytych';
$txt['buddy'] = 'Znajomy';
$txt['buddies'] = 'Znajomi';
$txt['most_online_ever'] = 'Najwięcej online';
$txt['most_online_today'] = 'Najwięcej online dzisiaj';

$txt['merge_select_target_board'] = 'Wybierz dział docelowy dla scalonego wątku';
$txt['merge_select_poll'] = 'Wybierz, którą ankietę powinien mieć scalony wątek';
$txt['merge_topic_list'] = 'Wybierz wątki do scalenia';
$txt['merge_select_subject'] = 'Wybierz temat scalonego wątku';
$txt['merge_custom_subject'] = 'Nowy temat';
$txt['merge_enforce_subject'] = 'Zmień temat wszystkich wiadomości';
$txt['merge_include_notifications'] = 'Dołącz powiadomienia?';
$txt['merge_check'] = 'Scal?';
$txt['merge_no_poll'] = 'Bez ankiety';

$txt['response_prefix'] = 'Odp: ';
$txt['current_icon'] = 'Obecna ikona';

$txt['smileys_current'] = 'Obecny zestaw uśmieszków';
$txt['smileys_none'] = 'Bez uśmieszków';
$txt['smileys_forum_board_default'] = 'Domyślne dla tego forum bądź działu';

$txt['search_results'] = 'Pokaż wyniki';
$txt['search_no_results'] = 'Nic nie znaleziono';

$txt['totalTimeLogged1'] = 'Czas zalogowania w sumie: ';
$txt['totalTimeLogged2'] = ' dni, ';
$txt['totalTimeLogged3'] = ' godz. ';
$txt['totalTimeLogged4'] = ' min.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'g ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Jest';
$txt['approve_thereare'] = 'Jest';
$txt['approve_member'] = 'użytkownik';
$txt['approve_members'] = 'użytkowników';
$txt['approve_members_waiting'] = 'do zatwierdzenia.';

$txt['notifyboard_turnon'] = 'Czy chcesz być powiadamianym przez email o nowych wątkach w tym dziale?';
$txt['notifyboard_turnoff'] = 'Na pewno nie chcesz być już powiadamianym o nowych wątkach w tym dziale?';

$txt['activate_code'] = 'Twój kod aktywacyjny to';

$txt['find_members'] = 'Znajdź użytkowników';
$txt['find_username'] = 'Nazwa użytkownika lub adres email';
$txt['find_buddies'] = 'Pokazuj tylko znajomych?';
$txt['find_wildcards'] = 'Dozwolone znaki: *, ?';
$txt['find_no_results'] = 'Nic nie znaleziono';
$txt['find_results'] = 'Wyniki';
$txt['find_close'] = 'Zamknij';

$txt['unread_since_visit'] = 'Pokaż wiadomości od ostatniej wizyty.';
$txt['show_unread_replies'] = 'Pokaż nowe odpowiedzi na twoje wątki.';

$txt['change_color'] = 'Zmień kolor';

$txt['quickmod_delete_selected'] = 'Usuń zaznaczone';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Otrzymałeś jedną lub więcej prywatnych wiadomości.\\nPokazać je teraz (w nowym oknie)?';

$txt['previous_next_back'] = '&laquo; poprzedni';
$txt['previous_next_forward'] = 'następny &#187;';

$txt['movetopic_auto_board'] = '[DZIAŁ]';
$txt['movetopic_auto_topic'] = 'ODNOŚNIK DO WĄTKU';
$txt['movetopic_default'] = 'Ten wątek został przeniesiony do ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Zmniejsz lub zwiększ nagłówek.';

$txt['mark_unread'] = 'Zaznacz jako nieprzeczytane';

$txt['ssi_not_direct'] = 'Nie łącz się z SSI.php bezpośrednio; powinieneś użyć ścieżki (%s) lub dodać ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php nie mogło załadować sesji! Może to powodować problemy z wylogowaniem i innymi funkcjami - upewnij się, że SSI.php jest "includowane" w kodzie przed *czymkolwiek* innym we wszystkich Twoich skryptach!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Podgląd';
$txt['preview_fetch'] = 'Generowanie podglądu...';
$txt['preview_new'] = 'Nowa wiadomość';
$txt['error_while_submitting'] = 'Podczas wysyłania wiadomości, pojawiły się następujące błędy:';

$txt['split_selected_posts'] = 'Zaznaczone wiadomości';
$txt['split_selected_posts_desc'] = 'Poniższe wypowiedzi utworzą nowy temat po podziale.';
$txt['split_reset_selection'] = 'Anuluj zaznaczenie';

$txt['modify_cancel'] = 'Anuluj';
$txt['mark_read_short'] = 'Zaznacz jako przeczytane';

$txt['pm_short'] = 'Moje Wiadomości';
$txt['hello_member_ndt'] = 'Witaj';

$txt['ajax_in_progress'] = 'Ładowanie...';

?>