<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Na tej stronie możesz zmienić ustawienia funkcji i prostych opcji forum. Przejrzyj <a href="' . $scripturl . '?action=theme;sa=settings;id=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">ustawienia stylów</a> jeśli chcesz zmienić inne opcje. Kliknij na ikony pomocy, jeśli chcesz uzyskać więcej informacji o jakimś ustawieniu.';

$txt['mods_cat_features'] = 'Podstawowe opcje';
$txt['pollMode'] = 'Tryb ankiety';
$txt['smf34'] = 'Wyłącz ankiety';
$txt['smf32'] = 'Włącz ankiety';
$txt['smf33'] = 'Wyświetl istniejące ankiety jako wątki';
$txt['allow_guestAccess'] = 'Pozwól gościom przeglądać forum';
$txt['userLanguage'] = 'Pozwól użytkownikom wybrać język forum';
$txt['allow_editDisplayName'] = 'Pozwól użytkownikom na zmianę ich wyświetlanej nazwy';
$txt['allow_hideOnline'] = 'Pozwól nie-administratorom ukrywać swój status online';
$txt['allow_hideEmail'] = 'Pozwól użytkownikom ukrywać adresy email przed wszystkimi oprócz administratorów';
$txt['guest_hideContacts'] = 'Nie pokazuj gościom informacji kontaktowych użytkowników';
$txt['titlesEnable'] = 'Włącz tytuły osobiste';
$txt['enable_buddylist'] = 'Włącz listę znajomych';
$txt['default_personalText'] = 'Domyślny tekst osobisty';
$txt['max_signatureLength'] = 'Maksymalna ilość znaków w podpisach<div class="smalltext">(0 dla nieograniczonej)</div>';
$txt['number_format'] = 'Domyślny format liczb';
$txt['time_format'] = 'Domyślny format czasu';
$txt['time_offset'] = 'Generalne przesunięcie czasu<div class="smalltext">(modyfikacja tej wartości zmieni ustawienia u wszystkich.)</div>';
$txt['failed_login_threshold'] = 'Dopuszczalna ilość prób zalogowania';
$txt['lastActive'] = 'Ilość w minutach do pokazania, że użytkownik jest aktywny';
$txt['trackStats'] = 'Śledź statystykę dni';
$txt['hitStats'] = 'Śledź ilość wejść na dzień (statystyki muszą być włączone)';
$txt['enableCompressedOutput'] = 'Włącz kompresję';
$txt['databaseSession_enable'] = 'Informacje o sesjach w bazie danych';
$txt['databaseSession_loose'] = 'Zezwól przeglądarkom wracać do stron zachowanych w cache';
$txt['databaseSession_lifetime'] = 'Sekund do wygaśnięcia nieaktywnej sesji';
$txt['enableErrorLogging'] = 'Włącz raportowanie błędów';
$txt['cookieTime'] = 'Domyślny czas zalogowania (w minutach)';
$txt['localCookies'] = 'Włącz lokalne przechowywanie plików cookie<div class="smalltext">(SSI nie działa z tą opcją)</div>';
$txt['globalCookies'] = 'Używaj plików cookie niezależnych od subdomeny<div class="smalltext">(najpierw wyłącz lokalne pliki cookie!)</div>';
$txt['securityDisable'] = 'Wyłącz dodatkowe sprawdzanie hasła w centrum administracji';
$txt['send_validation_onChange'] = 'Wyślij nowe hasło przy zmianie adresu email';
$txt['approveAccountDeletion'] = 'Wymagaj aprobaty administratora gdy użytkownik chce usunąć swoje konto';
$txt['autoOptDatabase'] = 'Co ile dni optymalizować tabele?<div class="smalltext">(0 aby wyłączyć funkcję)</div>';
$txt['autoOptMaxOnline'] = 'Maksymalna ilość użytkowników online podczas optymalizacji<div class="smalltext">(0 dla nieograniczonej)</div>';
$txt['autoFixDatabase'] = 'Automatycznie naprawiaj uszkodzone tabele';
$txt['allow_disableAnnounce'] = 'Zezwól użytkownikom na wyłączenie ogłoszeń';
$txt['disallow_sendBody'] = 'Wyłączyć treść wiadomości w powiadomieniach?';
$txt['modlog_enabled'] = 'Raportuj czynności moderatorów';
$txt['queryless_urls'] = 'Wyświetlaj adresy przyjazne wyszukiwarkom (bez znaku &quot;?&quot;) <div class="smalltext"><b>działa tylko na Apache!</b></div>';
$txt['max_image_width'] = 'Maksymalna szerokość obrazków w wiadomościach (0 = wyłącz)';
$txt['max_image_height'] = 'Maksymalna wysokość obrazków w wiadomościach (0 = wyłącz)';
$txt['mail_type'] = 'Typ poczty';
$txt['mail_type_default'] = '(domyślne PHP)';
$txt['smtp_host'] = 'Serwer SMTP';
$txt['smtp_port'] = 'Port SMTP';
$txt['smtp_username'] = 'Nazwa użytkownika SMTP';
$txt['smtp_password'] = 'Hasło SMTP';
$txt['enableReportPM'] = 'Włącz zgłaszanie prywatnych wiadomościach administracji';
$txt['max_pm_recipients'] = 'Maksymalna dozwolona liczba odbiorców przy wysyłaniu prywatnych wiadomości.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['pm_posts_verification'] = 'Liczba wiadomości poniżej której użytkownik musi wpisać kod weryfikacyjny, aby wysłać prywatną wiadomość.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['pm_posts_per_hour'] = 'Maksymalna liczba prywatnych wiadomości jaką użytkownik może wysłać w ciągu godziny.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';

$txt['mods_cat_layout'] = 'Opcje wyglądu';
$txt['compactTopicPagesEnable'] = 'Ogranicz liczbę wyświetlanych odnośników do stron';
$txt['smf235'] = 'Ilość wyświetlanych kolejnych stron:';
$txt['smf236'] = 'wyświetla';
$txt['todayMod'] = 'Włącz funkcję &quot;Dzisiaj&quot;';
$txt['smf290'] = 'Wyłączona';
$txt['smf291'] = 'Tylko Dzisiaj';
$txt['smf292'] = 'Dzisiaj i Wczoraj';
$txt['topbottomEnable'] = 'Włącz przyciski Idź do góry/do dołu';
$txt['onlineEnable'] = 'Pokazuj status online/offline użytkownika w wiadomościach';
$txt['enableVBStyleLogin'] = 'Pokazuj pole logowania na dole';
$txt['defaultMaxMembers'] = 'Ilość ludzi na stronę listy użytkowników';
$txt['timeLoadPageEnable'] = 'Wyświetlaj czas generacji strony';
$txt['disableHostnameLookup'] = 'Wyłącz sprawdzanie dostawcy internetowego';
$txt['who_enabled'] = 'Włącz listę użytkowników online';

$txt['smf293'] = 'Reputacja';
$txt['karmaMode'] = 'Tryb reputacji';
$txt['smf64'] = 'Wyłącz reputację|Włącz całkowitą reputację|Włącz pozytywną/negatywną reputację';
$txt['karmaMinPosts'] = 'Minimalna ilość wiadomości potrzebna do zmiany reputacji';
$txt['karmaWaitTime'] = 'Czas oczekiwania w godzinach';
$txt['karmaTimeRestrictAdmins'] = 'Podporządkuj administratorów czasowi oczekiwania';
$txt['karmaLabel'] = 'Nazwa reputacji';
$txt['karmaApplaudLabel'] = 'Etykieta poparcia';
$txt['karmaSmiteLabel'] = 'Etykieta potępienia';

$txt['caching_information'] = '<div align="center"><b><u>Ważne! Przeczytaj to zanim włączysz poniższe opcje.</b></u></div><br /> SMF obsługuje cache używając akceleratorów. Aktualnie obsługiwane akceleratory to:<br /> <ul> <li>APC</li> <li>eAccelerator</li> <li>Turck MMCache</li> <li>Memcached</li> <li>Zend Platform/Performance Suite (nie Zend Optimizer)</li> </ul> Cache będzie działać na Twoim serwerze tylko jeśli PHP będzie skompilowane z jednym z wyżej wymienionych akceleratorów lub z włączonym memcache. <br /><br /> SMF pozwala na aktywację cache na różnych poziomach. Im wyższy poziom cache, tym więcej czasu procesora będzie zużywane na odczytanie cache\'owanych informacji. Jeśli na Twojej maszynie jest uaktywnione cache\'owanie, zaleca się rozpocząć od ustawienia poziomu 1. <br /><br /> Pamiętaj, że jeśli używasz memcache, musisz podać parametry serwera w ustawieniach poniżej. Powinny być one podane w formie oddzielonej przecinkami listy, tak jak na poniższym przykładzie:<br /> &quot;serwer1,serwer2,serwer3:port,serwer4&quot;<br /><br /> Jeśli port nie zostanie podany, SMF użyje portu 11211. SMF będzie próbować wymuszonego lub losowego rozłożenia obciążenia pomiędzy serwerami. <br /><br /> %s <hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF nie jest w stanie wykryć na Twoim serwerze kompatybilnego akceleratora.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany Zend.';
$txt['detected_Memcached'] = '<b style="color: green">SMF wykryło że twój serwer ma zainstalowany Memcached. ';

$txt['cache_enable'] = 'Poziom cache';
$txt['cache_off'] = 'Wyłącz cache';
$txt['cache_level1'] = 'Poziom 1';
$txt['cache_level2'] = 'Poziom 2 (nie polecany)';
$txt['cache_level3'] = 'Poziom 3 (nie polecany)';
$txt['cache_memcached'] = 'Ustawienia Memcache';

?>