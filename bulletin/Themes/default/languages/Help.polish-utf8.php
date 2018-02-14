<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Zamknij okno';

$helptxt['manage_boards'] = '<b>Edytuj działy</b><br /> W tym menu możesz stworzyć/usunąć/zmienić kolejność działów i kategorii. Przykładowo miałeś stronę o szerokiej tematyce takiej jak &quot;Sport&quot;, &quot;Motoryzacja&quot; i &quot;Muzyka&quot;. To były by kategorie najwyższego poziomu. Pod każdą z nich chciałbyś prawdopodobnie stworzyć hierarhiczne &quot;podkategorie&quot; lub &quot;działy&quot; dla tematów. To będzie prosta hierarhia ze strukturą w stylu<br /><ul> <li> <b>Sport</b> &nbsp;- A &quot;kategoria&quot';

$helptxt['edit_news'] = '<b>Edycja aktualności forum</b><br /> Pozwala wprowadzić tekst informacji o nowościach, wyświetlany na stronie głównej forum. Dodaj co tylko chcesz (np. &quot;Nie zapomnijcie o konferencji w najbliższy wtorek&quot;). Informacje te są wyświetlane losowo, każda w osobnej ramce.'
;

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Przeglądanie użytkowników</b><br />
			Przeglądaj wszystkich użytkowników forum. Zostanie wyświetlona lista użytkowników, z których
			każdy jest odnośnikiem do jego profilu. Jako administrator, możesz modyfikować profile
			użytkowników. Masz całkowitą kontrolę nad użytkownikami,
			włącznie z ich usunięciem z forum.<br /><br />
		</li>
		<li>
			<b>Oczekujący na zatwierdzenie</b><br />
			Ta sekcja pokazuje się tylko jeśli włączona jest opcja zatwierdzania wszystkich nowych użytkowników. Każdy rejestrujący się
			na forum staje się pełnym użytkownikiem dopiero po zatwierdzeniu przez admina. Ta sekcja wyświetla wszystkich tych użytkowników,
			którzy oczekują na zatwierdzenie. Pokazują się również ich emaile i adres IP. Możesz wybrać czy zatwierdzić, czy odrzucić
			(skasować) każdego użytkownika z listy, poprzez zaznaczenie użytkowników i wybranie odpowiedniej czynności z rozwijanej listy.
			Podczas odrzucania użytkownika możesz wybrać czy po usunięciu poinformować go emailem o swojej decyzji.<br /><br />
		</li>
		<li>
			<b>Oczekujący na aktywację</b><br />
			Ta sekcja pokazuje się tylko jeśli włączona jest opcja aktywacji kont użytkownika. Ta lista
			wyświetla wszystkich użytkowników, którzy jeszcze nie aktywowali swojego konta. Możesz wybrać czy aktywować te konta za nich,
			odrzucić, czy też przypomnieć o konieczności aktywacji konta. Tak jak powyżej, możesz poinformować lub nie użytkowników
			o swojej decyzji.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Ban użytkowników</b><br/> SMF pozwala na &quot;ban&quot; użytkowników którzy zakłócają działanie forum poprzez spamowanie, floodowanie, itp. Jako admin widzisz podczas przeglądania wiadomości adres IP każdego z użytkowników z którego wysłana została wiadomość. Możesz dodać dane IP do listy banów co zablokuje możliwość pisania wiadomości z tej lokacji.<br />Możesz również banować użytkowników podając ich adres email.';

$helptxt['modsettings'] = '<b>Opcje forum</b><br />
	Jest wiele opcji w tej sekcji, które możesz zmienić wedle uznania. Większość opcji modyfikacji, pojawi się również w tym miejscu.';

$helptxt['number_format'] = '<b>Format liczb</b><br /> Możesz użyć tych ustawień do ustalenia formatu, w jakim liczby będą wyświetlane na forum. Format tego ustawienia jest następujący:<br /> <div style="margin-left: 2ex;">1,234.00</div><br /> gdzie \',\' to znak używany do oddzielania grup tysięcy, \'.\' to znak używany do oddzielania części dziesiętnej, a liczba zer po nim określa dokładność zaokrągleń.';

$helptxt['time_format'] = '<b>Format czasu</b><br /> Możesz dostosować sposób wyświetlania daty i czasu do swoich upodobań. Wygląda to na dość skompilowany ciąg literek, ale nie jest specjalnie trudne. Konwencja pochodzi z funkcji PHP strftime i została opisana poniżej (więcej szczegółów można znaleźć na stronie <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br /> <br /> Następujące znaki są rozpoznawane w łańcuchu formatującym: <br /> <span class="smalltext"> &nbsp;&nbsp;%a - skrócony dzień tygodnia<br /> &nbsp;&nbsp;%A - pełny dzień tygodnia<br /> &nbsp;&nbsp;%b - skrócona nazwa miesiąca<br /> &nbsp;&nbsp;%B - pełna nazwa miesiąca<br /> &nbsp;&nbsp;%d - dzień miesiąca (01 do 31) <br /> &nbsp;&nbsp;%D<b>*</b> - to samo, co %m/%d/%y <br /> &nbsp;&nbsp;%e<b>*</b> - dzień miesiąca (1 do 31) <br /> &nbsp;&nbsp;%H - godzina (format 24-godzinny) (zakes od 00 do 23) <br /> &nbsp;&nbsp;%I - godzina (format 12-godzinny) (zakres od 01 do 12) <br /> &nbsp;&nbsp;%m - miesiąc jako liczba (01 do 12) <br /> &nbsp;&nbsp;%M - minuty jako liczba <br /> &nbsp;&nbsp;%p - albo &quot;am&quot; albo &quot;pm&quot; zgodnie z aktualnym czasem<br /> &nbsp;&nbsp;%R<b>*</b> - czas w notacji 24-godzinnej <br /> &nbsp;&nbsp;%S - sekundy jako liczba dziesiętna <br /> &nbsp;&nbsp;%T<b>*</b> - aktualny czas, odpowiednik %H:%M:%S <br /> &nbsp;&nbsp;%y - rok jako liczba dwucyfrowa, bez uwzględnienia wieku (00 do 99) <br /> &nbsp;&nbsp;%Y - rok jako liczba 4-cyfrowa<br /> &nbsp;&nbsp;%Z - strefa czasowa, nazwa lub skrót <br /> &nbsp;&nbsp;%% - znak \'%\' <br /> <br /> <i>* Nie działa na serwerach opartych o system Windows.</i></span>';

$helptxt['live_news'] = '<b>Aktualne ogłoszenia</b><br /> Ten boks pokazuje ostatnie ogłoszenia z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>. Powinieneś sprawdzać je na bieżąco aby uzyskiwać informacje o aktualizacjach, nowych wydaniach i ważnych informacjach od Simple Machines.';

$helptxt['registrations'] = '<b>Zarządzanie rejestracją</b><br />
	Ta sekcja zawiera wszystkie funkcje związane z zarządzaniem nowymi rejestracjami na forum. Jest podzielona na maksymalnie cztery
	działy, które są widoczne zależnie od ustawień Twojego forum:<br /><br />
	<ul>
		<li>
			<b>Zarejestruj nowego użytkownika</b><br />
			Tu możesz zarejestrować użytkownika na jego prośbę. Jest to przydatne na zamkniętych forach,
			lub gdy admin chce stworzyć konto testowe. Jeśli jest włączona opcja aktywacji konta,
			to do użytkownika zostanie wysłany emailem link aktywacyjny, który będzie musiał być kliknięty, by zacząć korzystać z konta.
			Ewentualnie można wybrać opcję, by przesłać użytkownikowi hasło na email.<br /><br />
		</li>
		<li>
			<b>Edytuj umowę rejestracyjną</b><br />
			W tym miejscu możesz zmienić umowę rejestracyjną, wyświetlaną podczas tworzenia nowego konta na forum.
			Możesz dodać, usunąć i zmienić wszystko co zostało standardowo zaproponowane przez SMF.<br /><br />
		</li>
		<li>
			<b>Ustal zarezerwowane nazwy</b><br />
			Tu ustalisz jakie wyrazy nie będą mogły być użyte przez użytkowników do stworzenia ich nazwy konta.<br /><br />
		</li>
		<li>
			<b>Ustawienia</b><br />
			Ta sekcja będzie widoczna jedynie, jeśli masz zezwolenie na administrację forum. Tu możesz ustawić sposób rejestracji
			jaki będzie używany na forum, a także inne związane z rejestracją opcje.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Log moderacji</b><br /> Ta sekcja pozwala członkom grupy administratorów śledzić wszystkie czynności moderacyjne, które wykonali moderatorzy. Aby moderatorzy nie mogli usunąć odwołań do akcji, które wykonali, wpisy nie mogą zostać usunięte przed upływem 24 godzin od ich wystąpienia. Kolumna \'obiekty\' pokazuje zmienne powiązane z akcją.';
$helptxt['error_log'] = '<b>Raport błędów forum</b><br />
	Każdy błąd, który wystąpił podczas korzystania z forum zostaje zapisany. Domyślnie są sortowane po dacie.
	Za pomocą strzałek, można zmienić sortowanie, a dodatkowo można włączyć filtr,
	np. wg użytkownika. Podczas filtrowania, wyświetlą się jedynie te wpisy, które pasują do filtra.';
$helptxt['theme_settings'] = '<b>Ustawienia stylu</b><br/> Ekran ten pozwoli Tobie na zmianę specyficznych ustawień dla obecnego stylu, włączając w to opcje takie jak katalog oraz adres URL stylu czy ustawienia layoutu forum. Większość stylów posiada rozmaite opcje pozwalające na dostosowanie ustawień do indywidualnych potrzeb forum.';
$helptxt['smileys'] = '<b>Centrum Uśmieszków</b><br /> Tutaj możesz dodawać i usuwać uśmieszki i zestawy uśmieszków. Zauważ, że jeśli uśmieszek znajduje się w jedym zestawie, to istnieje również w pozostałych zestawach - w przeciwnym wypadku mogłoby być to zaskakujące dla użytkowników forum używających różnych zestawów.<br /><br /> Możesz tutaj również edytować ikony wiadomości, o ile włączyłeś je na stronie ustawień.';
$helptxt['calendar'] = '<b>Zarządzaj kalendarzem</b><br/> Tutaj możesz dodawać i usuwać wpisy oraz zmienić ustawienia kalendarza.'
;

$helptxt['serversettings'] = '<b>Ustawienia serwera</b><br />
	Tu możesz zmienić główne ustawienia forum. W tej sekcji znajdziesz ustawienia bazy danych, ścieżek URL, a także
	tych związanych z pocztą i pamięcią podręczną. Zastanów się przed zmianami w tym miejscu, gdyż błędy mogą spowodować
	brak dostępu do forum.';

$helptxt['topicSummaryPosts'] = 'Ta opcja pozwala ustawić liczbę poprzednich wiadomości widocznych w podsumowaniu wątku podczas odpowiedzi.';
$helptxt['enableAllMessages'] = 'Definiuje <em>maksymalną</em> ilość wiadomości w wąteku, dla którego zostanie wyświetlony link do wszystkich wiadomości. Ustawienie tej ilości na mniej niż &quot;Maksymalna ilość wiadomości do wyświetlenia na stronie wątku&quot; spowoduje, że link nigdy się nie pojawi, a zbyt duża wartość może spowolnić Twoje forum.';
$helptxt['enableStickyTopics'] = 'Przyklejone są wątkami które pozostają stale na górze listy tematów. Zazwyczaj używane są do przekazania ważnych wiadomości. Domyślnie tylko moderatorzy i administratorzy mogą zakładać przyklejone wątki ale możesz to zmienić w zezwoleniach użytkowników.';
$helptxt['allow_guestAccess'] = 'Odznaczenie tej opcji wyłączy gościom wykonywanie większości czynności poza tymi najprostszymi - logowanie, rejestracja, przypominanie hasła, itp. - na Twoim forum. Nie jest to to samo co uniemożliwianie gościom dostępu do działów.';
$helptxt['userLanguage'] = 'Włączenie tej opcji pozwoli uzytkownikom wybrać plik językowy z którego bedą korzystać. Nie będzie to miało wpływu na ustawienia domyslne';
$helptxt['trackStats'] = 'Statystyki:<br />To pozwoli na wyświetlanie użytkownikom listy najnowszych wiadomości oraz najbardziej popularnych wątków na Twoim forum. Opcja ta pozwoli również na wyświetlanie różnych statystyk, jak np. najwyższa liczba użytkowników online, nowi użytkownicy czy nowe wątki.<hr />  Trafienia:<br />Dodaje następną kolumne na stronie statystyk z ilością trafień na Twoim forum.';
$helptxt['titlesEnable'] = 'Włączenie Tytułów osobistych pozwoli użytkownikom ze stosownymi uprawnieniami na stworzenie własnych tytułów widocznych pod nazwą.<br/><i>Na przykład:</i><br/>Janek<br/>Spoko koleś';
$helptxt['topbottomEnable'] = 'Dodaje przyciski w górę i w dół, przez co użytkownicy mogą przenieś się na koniec i początek strony bez przewijania.';
$helptxt['onlineEnable'] = 'Pokazuje obrazek wskazujący czy użytkownik jest online lub offline';
$helptxt['todayMod'] = 'Będzie pokazywać "Dzisiaj" lub "Wczoraj", jeśli to możliwe, zamiast daty.';
$helptxt['enablePreviousNext'] = 'To spowoduje wyświetlanie odnośnika do następnego i poprzedniego wątku.';
$helptxt['pollMode'] = 'Ta opcja włącza lub wyłącza ankiety. Jeśli opcja jest wyłączona, to wszystkie istniejące ankiety zostaną ukryte
		na liście wątków. Możesz wybrać, czy pokazywać wątki, w których były ankiety bez ankiet, przez wybranie
		&quot;Pokaż ankiety jako wątki&quot;.<br /><br />By zdecydować kto może tworzyć ankiety, lub w nich głosować,
		zajrzyj do zarządzania zezwoleniami. Pamiętaj o tym, jeśli komuś nie działają ankiety.';
$helptxt['enableVBStyleLogin'] = 'Właczenie tej opcji spowoduje wyświetlanie małego pola logowania na każdej stronie forum.';
$helptxt['enableCompressedOutput'] = 'Włączenie tej opcji spowoduje kompresowanie wynikowej strony w celu zmniejszenia zużycia przepustowości łącza, ale wymaga zainstalowanej bibloteki zlib.';
$helptxt['databaseSession_enable'] = 'Ta opcja wykorzystuje bazę danych do przechowywania informacji o sesjach - jest to najlepsze rozwiązanie dla serwerów wykorzystujących load-balancing, ale pomaga również przy wszelkich problemach z timeoutem i może przyspieszyć działanie forum.';
$helptxt['databaseSession_loose'] = 'Włączenie tej opcji spowoduje zmniejszenie transferu, jaki generuje Twoje forum, oraz sprawi, że powrót do poprzedniej strony nie będzie skutkować jej przeładowaniem. Minusem jest między innymi to, że ikony nowych wiadomości nie odświeżą się (dopóki nie przejdziesz do niej kliknięciem zamiast przyciskiem powrotu).'
;
$helptxt['databaseSession_lifetime'] = 'To jest czas bezczynności w sekundach, po którym sesja wygaśnie. Jeśli czas bezczynności użytkownika przekroczy tą wartość kolejna akcja spowoduje wyświetlenie komunikatu &quot;sesja wygasła&quot;. Wartości powyżej 2400 sekund nie są zalecane.';
$helptxt['enableErrorLogging'] = 'To spowoduje logowanie wszystkich błędów, jak np. błędne logowania, tak aby można było zobaczyć, co poszło źle.';
$helptxt['allow_disableAnnounce'] = 'Ta opcja umożliwi użytkownikom wyłączenie powiadamiania o wątkach, które administrator zaznaczył jako wątki do powiadamiania.';
$helptxt['disallow_sendBody'] = 'Ta opcja usuwa opcję otrzymywania treści odpowiedzi i wiadomości w powiadomieniach wysyłanych na email.<br /><br />Częśto użytkownicy odpowiadają na takie powiadomienia, a to w większości przypadków oznacza, że odpowiedź otrzymuje webmaster.';
$helptxt['compactTopicPagesEnable'] = 'Ta opcja pokazuje jak będzie wyświetlana ilość stron w jednym temacie.<br /><i>Przykład:</i> &quot;3&quot; wyświetlaj jako: 1 ... 4 [5] 6 ... 9<br />
&quot;5&quot; wyświetlaj jako: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'To będzie pokazywać na dole strony forum czas w sekundach jakie SMF zajeło wygenerowanie strony.';
$helptxt['removeNestedQuotes'] = 'Ta opcja wyłączy wklejanie zagnieżdżonych cytatów, podczas cytowania wiadomości.';
$helptxt['simpleSearch'] = 'To wyświetli prosty formularz wyszukiwania i link do bardziej zaawansowanego formularza.';
$helptxt['max_image_width'] = 'To pozwala na ustawienie maksymalnego rozmiaru wysyłanych obrazków. Nie będzie to miało wpływu na obrazki mniejsze niż maksimum.';
$helptxt['mail_type'] = 'To ustawienie pozwala Ci wybrać pomiędzy domyślnymi ustawieniami PHP a zastąpieniem tych ustawień przez SMTP. PHP nie obsługuje autoryzacji SMTP (której wiele serwerów aktualnie wymaga), tak więc jeśli jest ona dla Ciebie konieczna, powinieneś wybrać SMTP. Miej na uwadze, że SMTP może działać wolniej, a niektóre serwery mogą nie przyjmować nazwy użytkownika i hasła.<br /><br />Nie musisz wypełniać ustawień SMTP jeśli zdecydowałeś się na domyślne utawienia PHP.';
$helptxt['attachmentEnable'] = 'Załącznik to plik, który może zostać wysłany na serwer przez użytkownika i dodany do wiadomości.<br /><br /><b>Sprawdź rozszerzenie załącznika</b>:<br />Czy chcesz sprawdzić rozszerzenie pliku?<br /> <b>Dozwolone rozszerzenia plików</b>:<br />Możesz tutaj ustwić jakie roższerzenia są akceptowane.<br /> <b>Wyświetlaj załączniki graficzne jako obrazki pod wiadomością</b>:<br />Jeśli wysyłany plik jest obrazkiem, zostanie pokazany na dole wiadomości.<br /> <b>Katalog załączników</b>:<br />Ścieżka do twojego folderu z załącznikiem.<br />(przykład: /home/sites/yoursite/www/forum/attachments)<br /> <b>URL do załączników</b>:<br />URL do twojego folderu z załącznikiem<br /> (przykład:http://www.yoursite.com/forum/attachments)<br /> <b>Maksymalny rozmiar katalogu załączników</b> (w KB):<br />Określ jak duży może być folder z załącznikami, włączając w to pliki już się w nim znajdujące.<br /> <b>Maksymalny rozmiar załącznika na jedną wiadomość</b> (w KB):<br />Określ maksymalny rozmiar wszystkich załączników w wiadomości. Jeśli bedzie on niższy niż rozmiar przypadający na załącznik, ten tutaj będzie ograniczeniem.<br /> <b>Maksymalny rozmiar zalącznika</b> (in KB):</b> (w KB):<br />Określ maksymalny rozmiar każdego pojedynczego załącznika.<br /> <b>Maksymalna ilość załączników przypadająca na jedną wiadomość</b>:<br />Określ ilość załączników jaką może dodać';
$helptxt['karmaMode'] = 'Reputacja (w angielskiej wersji: \'karma\') to możliwość pokazania popularności użytkownika na forum. Użytkownicy, jeśli mają udzielone zezwolenie,
		mogą zagłosować na innych użytkowników klikając \'popieram\' lub \'potępiam\' (lub inne ustawione w opcjach).
		Administrator może zmienić minimalną ilość wiadomości napisanych przez użytkownika, powyżej której użytkownik ma prawo zdobywania reputacji, czas pomiędzy głosowaniem na tego samego użytkownika, oraz czy admini również muszą czekać.
		<br /><br />Zezwolenie na głosowanie jest ustawiane dla grupy, lub użytkownika poprzez zezwolenia.
		Jeśli ktoś na forum ma problemy, sprawdź jeszcze raz zezwolenia.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'Kalendarz może być używany do wyświetlania dat urodzin albo ważnych wydarzeń w życiu społeczności.<br /><br /> <b>Pokazuj dni jako odnośniki do \'Dodaj wydarzenie\'</b>:<br />To pozwoli użytkownikowi na dodawanie wydarzenia do tego dnia, którego data została wybrana<br /> <b>Pokazuj numery tygodni</b>:<br />Pokaż, który jest tydzień.<br /> <b>Maksymalna liczba dni na przód w indeksie działów</b>:<br />Jeśli ustawiony jest na 7, zostaną pokazane wydarzenia z następnego tygodnia.<br /> <b>Pokazuj święta w indeksie działów</b>:<br />Pokazuj dzisiajesze święta w tablicy kalendarza w indeksie działów.<br /> <b>Pokazuj urodziny w indeksie działów</b>:<br />Pokazuj dzisiejsze urosziny w tabeli kalendarza w indeksie działów.<br /> <b>Pokazuj wydarzenia w indeksie działów</b>:<br />Pokazuj dzisiejsze wydarzenia w tabeli kalendarza w indeksie działów.<br /> <b>Domyślny dział do dodawania wydarzeń</b>:<br />Jaki jest domyślny dział do dodawania wydarzeń?<br /> <b>Rok pierwszy</b>:<br />Zaznacz &quot;pierwszy&quot; rok na liście kalendarza.<br /> <b>Rok ostatni</b>:<br />Zaznacz &quot;ostatni&quot; rok na liście kalendarza<br /> <b>Kolor urodzin</b>:<br />Wybierz kolor tekstu dla urodzin<br /> <b>Kolor wydarzeń</b>:<br />Wybierz kolor tekstu dla wydarzeń<br /> <b>Kolor świąt</b>:<br />Wybierz kolor tekstu dla świąt<br /> <b>Zezwól na kilkudniowe wydarzenia</b>:<br />Zezwól na kilkudniowe wydarzenia.<br /> <b>Maksymalna długość trwania wydarzenia (w dniach)</b>:<br />Wybierz maksymalną ilość dni jaką może trwać dane wydarzenie.<br /><br /> Pamiętaj, że używanie kalendarza (dodawanie wydarzeń, pokazywanie wydarzeń, etc.) może być kontrolowane za pomocą zezwoleń w panelu zezwoleń.';
$helptxt['localCookies'] = 'SMF używa ciasteczek (cookies) do przechowywania informacji na komputerze użytkownika. Ciasteczka mogą być przechowywane globalnie (mojserwer.com) lub lokalnie (mojserwer.com/sciezka/do/forum).<br /> Sprawdź tą opcję jeśli występują problemy polegające na automatycznym wylogowywaniu użytkowników.<hr /> Ciasteczka przechowywane globalnie są mniej bezpieczne jeśli są używane na współdzielonym serwerze (np. Tripod).<hr /> Ciasteczka lokalne nie działają poza katalogiem forum, tak więc jeśli Twoje forum jest zainstalowane w www.mojserwer.com/forum, strony w stylu www.mojserwer.com/index.php nie będą w stanie uzyskać dostępu do informacji o koncie użytkownika. Globalne ciasteczka są szczególnie polecane gdy używasz SSI.php.';
$helptxt['enableBBC'] = 'Zaznaczenie tej opcji pozwoli użytkownikom na korzystanie w wiadomościach z kodów BBC, dzięki czemu będą mogli umieszczać obrazki, formatować tekst, itp.';
$helptxt['time_offset'] = 'Nie wszystcy administratorzy chcą aby forum używało tej samej strefy czasowej co serwer. Użyj tej opcji aby ustawić różnicę (w godzinach) między czasem na serwerze a godziną na forum. Dozwolone są wartości ujemne oraz ułamkowe.';
$helptxt['spamWaitTime'] = 'Tutaj możesz ustawić czas po upływie którego można napisać kolejną wiadomość. Ta opcja chroni przez "spamowaniem" ustalając jak często użytkownicy mogą wysyłać wiadomość.';

$helptxt['enablePostHTML'] = 'Włączenie tej opcji umożliwi korzystanie w wiadomościach z podstawowych znaczników HTML: &lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;pre&gt;, &lt;blockquote&gt;, &lt;img src=&quot;&quot; /&gt;, &lt;a href=&quot;&quot;&gt;, and &lt;br /&gt;.';

$helptxt['themes'] = 'W tej sekcji możesz zadecydować czy użytkownik może wybrać styl domyślny, jaki styl widzą goście
	i inne opcje związane ze stylami. Kliknij na stylu po prawej stronie, by zmienić jego ustawienia.';
$helptxt['theme_install'] = 'Tutaj możesz zainstalować nowe style podając katalog, wgrywając archiwum lub kopiując domyślny styl. Pamiętaj że katalog lub archiwum musi zawierać plik theme_info.xml.'
;
$helptxt['enableEmbeddedFlash'] = 'Ta opcja zezwoli twoim użytkownikom na używanie Flasha bezpośrednio w swoich wiadomościach, tak jak obrazków. Może to być ryzykowne pod względem bezpieczeństwa, chociaż tylko kilku się to udało wykorzystać. UŻYWAJ NA WŁASNĄ ODPOWIEDZIALNOŚĆ!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Zezwól na łączenie się z <a href="' . $scripturl . '?action=.xml;sa=news">Ostatnimi aktualnościami</a> itp.
	Polecamy ograniczyć rozmiar liczby ostatnich wiadomości/aktualności ze względu na to, że
	niektóre czytniki RSS, jak np. Trillian, je obetną.';
$helptxt['hotTopicPosts'] = 'Zmienia liczbę wiadomości, która jest wymagana do oznaczenia wątku jako &quot;gorący&quot; lub &quot;bardzo gorący&quot;.';
$helptxt['globalCookies'] = 'Ta opcja włącza ciasteczka działające we wszystkich poddomenach. Na przykład jeśli:<br />
	twoja strona to http://www.simplemachines.org/,<br />
	a Twoje forum to http://forum.simplemachines.org/,<br />
	Włączenie tej opcji umożliwi Ci dostęp do ciasteczek forum ze swojej strony. Nie włączaj tej opcji, jeśli na Twoim serwerze są inne poddomeny (np. hacker.simplemachines.org), których nie kontrolujesz.';
$helptxt['securityDisable'] = 'To <i>wyłącza</i> dodatkowe sprawdzania hasła przy wchodzeniu do sekcji administracyjne. Nie jest to zalecane!';
$helptxt['securityDisable_why'] = 'Jest to Twoje bieżące hasło. (to samo którego używasz
 do logowania.)<br /><br />Zmuszając do wpisania tego pomaga upewnić się
że chcesz wykonać czynności administracyjne, i że wiesz co <b>Ty</b> robisz to.';
$helptxt['emailmembers'] = 'W tej wiadomości możesz użyć kilku &quot;zmiennych&quot;. Są to:<br /> {$board_url} - Adres URL Twojego forum.<br /> {$current_time} - Aktualny czas.<br /> {$member.email} - Adres e-mail aktualnego użytkownika.<br /> {$member.link} - Link do profilu aktualnego użytkownika.<br /> {$member.id} - Id aktualnego użytkownika.<br /> {$member.name} - Nazwa aktualnego użytkownika. (do personalizacji)<br /> {$latest_member.link} - Link do profilu ostatnio zarejestrowanego użytkownika.<br /> {$latest_member.id} - Id ostatnio zarejestrowanego użytkownika.<br /> {$latest_member.name} - Nazwa ostatnio zarejestrowanego użytkownika.';
$helptxt['attachmentEncryptFilenames'] = 'Kodowanie nazwy załącznika umożliwia psiadnie więcej niż jednego załącznika o tej samej nazwie, dla bezpieczeństwa użyj plików .php dla załącznika i wzmocnij ochronę. Jednakże może to utrudnić odbudowę bazy danych w pewnych drastycznych przypadkach.';

$helptxt['failed_login_threshold'] = 'Ustawia liczbę nieudanych prób logowania zanim użytkownik zostanie przekierowany do strony z przypominaniem hasła.';
$helptxt['oldTopicDays'] = 'Jeśli ta opcja jest włączona, użytkownik zobaczy ostrzeżenie podczas próby napisania wiadomości w wątku, w którym nikt nic nie napisał w podanym w tym ustawieniu okresie czasu (w dniach). Ustawienie ilości dni na 0 spowoduje wyłączenie pokazywania ostrzeżeń.';
$helptxt['edit_wait_time'] = 'Liczba sekund, w których można jeszcze edytować wiadomość zanim zastanie zapisana informacja o dacie ostatniej modyfikacji.';
$helptxt['edit_disable_time'] = 'Liczba minut po upływie których użytkownik nie będzie mógł edytować napisanej przez siebie wiadomości. Ustaw 0 by wyłączyć.<br /><br /><i>Pamiętaj: Opcja ta nie wpływnie na użytkowników mających pozwolenie na edycję wiadomości pozostałych użytkowników.</i>'
;
$helptxt['enableSpellChecking'] = 'Włącza sprawdzanie pisowni. Musisz mieć zainstalowaną bibliotekę pspell na serwerze, a Twoja konfiguracja PHP musi być ustawiona do użycia tej biblioteki. Wydaje się że twój serwer ' . (function_exists('pspell_new') == 1 ? 'MA skonfigurowany pspell.' : 'NIE MA skonfigurowanego pspell\'a.') . '.';
$helptxt['lastActive'] = 'Ustawia liczbę minut przez które ludzie będą widoczni na głównej stronie forum jako aktywni. Domyślnie 15 minut.';

$helptxt['autoOptDatabase'] = 'Ta opcja zoptymalizuje bazę danych co zadaną ilość dni. Ustaw 1, aby optymalizować bazę danych codziennie. Możesz również określić maksymalną ilość użytkowników będących online na forum. Dzięki temu nie przeciążysz serwera i nie sprawisz, że użytkownicy będą niezadowoleni z powolnego działania forum.';
$helptxt['autoFixDatabase'] = 'Automatycznie naprawia uszkodzone tabele i przywraca działanie forum tak, jakby nic się nie stało. Może być to użyteczne, ponieważ jedynym sposobem na naprawę jest REPAIR tabeli, a dzięki temu forum nie będzie wyłączone dopóki nie dowiesz się o awarii. Zostaniesz powiadomiony emailem jeśli coś takiego się stanie.';

$helptxt['enableParticipation'] = 'To pokazuje małą ikonę przy wątkach, w których użytkownik napisał.';

$helptxt['db_persist'] = 'Ustal stałe połączenie (persistent connection) z bazą danych aby zwiększyć wydajność. Jeśli nie jesteś na dedykowanym serwera, może to powodować problemy z Twoim hostem.';

$helptxt['queryless_urls'] = 'Zmienia troszkę format adresów URL tak, aby były one lepiej indeksowane przez wyszukiwarki. Będą one wyglądać mniej więcej tak: index.php/topic,1.html.<br /><br />Ta funkcja ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'nie') . ' będzie działać na Twoim serwerze.';
$helptxt['countChildPosts'] = 'Po włączeniu tej opcji, przy działach zawierających poddziały pojawi się liczba wiadomości będąca sumą poddziałów. <br /><br />Może to znacząco spowolnić forum, ale dzięki temu działy z poddziałami niezawierające wiadomości nie będą pokazywać 0 wiadomości.';
$helptxt['fixLongWords'] = 'Ta opcja spowoduje dzielenie wyrazów dłuższych niż określona ilość znaków na części tak, aby nie psuły one designu forum. (tak bardzo...) Ta opcja nie powinna być ustawiona na wartość poniżej 40.';

$helptxt['who_enabled'] = 'Ta opcja pozwala Tobie właczyć lub wyłączyć możliwość sprawdzania użytkownikom kto przegląda forum i co kto robi.';

$helptxt['recycle_enable'] = '&quot;Przywraca&quot; usunięte wątki i wiadomości w określonym forum.';

$helptxt['enableReportPM'] = 'Ta opcja pozwala twoim użytkownikom na zgłaszanie prywatnych wiadomości, które otrzymali, do ekipy administracyjnej. Może być to pomocne przy tropieniu nadużyć systemu prywatnych wiadomości.';
$helptxt['max_pm_recipients'] = 'Ta opcja pozwala na ustawienie maksymalnej ilości odbiorców wiadomości prywatnych, wysyłanych przez użytkownika forum. Może być to użyteczne do powstrzymania spamu wysyłanego przy użyciu systemu PW. Pamiętaj, że użytkownicy z uprawnieniami do wysyłania newsletterów nie są objęci tym ograniczeniem. Wpisanie wartości zerowej spowoduje wyłączenie limitu.';
$helptxt['pm_posts_verification'] = 'Ta opcja wymusi na użytkownikach wprowadzenie kodu z obrazka przy każdym wysyłaniu prywatnej wiadomości. Tylko użytkownicy o liczbie wiadomości poniżej ustawionej liczby będą musieli wpisywać kod. Ta funkcja pomaga w walce z automatycznym spamem.';
$helptxt['pm_posts_per_hour'] = 'Ogranicza liczbę prywatnych wiadomości jaką użytkownik może wysłać w ciągu godziny. Nie wpływa na moderatorów i administrację forum.';

$helptxt['default_personalText'] = 'Ustawia domyślny tekst który użytkownicy będą miali ustawiony w polu "prywatny tekst/podpis."';

$helptxt['modlog_enabled'] = 'Loguj wszystkie czynności moderacyjne.';

$helptxt['guest_hideContacts'] = 'Jeśli wybierzesz tę opcję, to adresy email i numery kontaktów IM wszystkich użytkowników będą ukrywane przed gośćmi.';

$helptxt['registration_method'] = 'Ta opcja umożliwia wybór metody rejestracji, przez osoby chcące dołączyć do użytkowników forum. Masz wybór pomiędzy:<br /><br />
	<ul>
		<li>
			<b>Rejestracja wyłączona</b><br />
				Wyłącza rejestrację, co oznacza, że jedyny sposób na dołączenie do grona użytkowników, to stworzenie konta przez administratora.<br />
		</li><li>
			<b>Rejestracja natychmiastowa</b><br />
				Nowi użytkownicy mogą zalogować się i pisać wiadomości bezpośrednio po rejestracji.<br />
		</li><li>
			<b>Aktywacja użytkownika</b><br />
				Nowi użytkownicy po rejestracji otrzymają email z odnośnikiem do aktywacji konta. Dopiero po kliknięciu staną się pełnoprawnymi użytkownikami forum. Ta opcja zapobiega podawaniu niepoprawnych adresów email.<br />
		</li><li>
			<b>Zatwierdzenie użytkownika</b><br />
				Nowi użytkownicy po rejestracji muszą zaczekać, aż ich rejestrację zatwierdzi administrator.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Gdy ta opcja jest zaznaczona wszystcy użytkownicy którzy zmienią swój adres email w profilu będą musieli reaktowawć swoje konto poprzez email wysłany na nowy adres.';
$helptxt['send_welcomeEmail'] = 'Gdy ta opcja jest włączona nowi użytkownicy otrzymają emaila witającego ich na Twoim forum.';
$helptxt['password_strength'] = 'To ustawienie określa wymaganą siłę haseł użytkowników Twojego forum. Im silniejsze jest hasło, tym trudniej je odgadnąć lub złamać. Dostępne są następujące ustawienia dla siły haseł: <ul> <li><b>Niska:</b> Hasło musi mieć długość conajmniej czterech znaków.</li> <li><b>Średnia:</b> Hasło musi mieć długość conajmniej ośmiu znaków i nie może być częścią nazwy użytkownika lub jego adresu email.</li> <li><b>Wysoka:</b> To samo, co w Średnim, poza tym, że hasło musi składać się z dużych i małych liter oraz conajmniej jednej cyfry.</li> </ul>';

$helptxt['coppaAge'] = 'Wartość podana w tym polu określa minimalny wiek użytkownika pozwalający na natychmiastową rejestrację na forum. Podczas rejestracji użytkownik będzie musiał potwierdzić, czy przekroczył określony wiek. Jeżeli odpowiedź będzie negatywna rejestracja zostanie odrzucona lub zawieszona do momentu potwierdzenia przez dorosłego opiekuna - w zależności od wybranego trybu. Jeżeli zostanie wisane 0 wszelkie restrykcje związane z wiekiem będą ignorowane.';
$helptxt['coppaType'] = 'Jeśli ograniczenia wieku są włączone, to w tym miejscu można wybrać w jaki sposób traktować osoby poniżej wymaganego wieku. Do wyboru są dwa tryby postępowania:
	<ul>
		<li>
			<b>Odrzucenie próby rejestracji:</b><br />
				Każdy próba rejestracji nowego użytkownika poniżej wymaganego wieku zostanie odrzucona.<br />
		</li><li>
			<b>Wymóg zatwierdzenia przez rodzica bądź opiekuna</b><br />
				Każdy nowy użytkownik poniżej wymaganego wieku, musi przesłać zgodę rodziców bądź opiekunów, zanim jego konto zostanie aktywowane.
				Zostanie też przesłane im standardowy formularz do wypełnienia przez rodziców lub opiekunów, oraz dane kontaktowe, na jaki ma on być wysłany.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Miejsce na wpisanie danych kontaktowych jest wymagane, tak by rodzice lub opiekunowie małoletnich mogli przesłać formularz ze zgodą. Musi być wypełnione przynajmniej pole adresowe lub numer faksu.';

$helptxt['allow_hideOnline'] = 'Zaznaczając tę opcje pozwolisz użytkownikom na ukrycie swojego statusu online przed innymi uzytkownikami (oprócz administratorów). Jeżeli opcja pozostanie wyłaczona jedynie osoby moderujące forum bedą mogły ukryc swoją obecność. Wyłączenie tej opcji nie zmieni istniejącego statusu użytkownika - powstrzyma ich przed ukrywaniem statusu w przyszłości.';
$helptxt['allow_hideEmail'] = 'Zaznaczając tą opcjie pozwolisz uzytkownikom na ukrywanie ich adresu e-mail przed innymi uzytkownikami. Jednakże administratorzy mogą zawsze zobaczyc adres e-mail każdego uzytkownika';

$helptxt['latest_support'] = 'Ten panel pokazuje niektóre z najczęstszych problemów i pytań dotyczących konfiguracji Twojego serwera. Nie mart się, te informacje nie są nigdzie zapisywane.<br /><br />Jeśli cały czas pojawia komunikat &quot;Retrieving support information...&quot;, Twój komputer prawdopodobnie nie może połączyć się z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Tutaj możesz zobaczyć kilka z najpopularniejszych i kilka losowych pakietów lub modyfikacji, których instalacja jest szybka i łatwa. <br /><br />Jeśli ta sekcja się nie pojawia, Twój komputer nie może prawdopodobnie połączyć się z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Ten dział pokazuje kilka ostatnich i najpopularniejszych szablonów z <a href="http://www.simplemachines.org/">www.simplemachines.org</a>. Może się jednak nie wyświetlić poprawnie, jeśli twój komputer nie jest w stanie znaleźć <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Ze względów bezpieczeństwa odpowiedź na twoje pytanie (tak jak i na twoje hasło) jest zakodowana w taki sposób, że tylko SMF moze go potwierdzić. Nigdy nie powie Ci (ani nikomu innemu) jaka jest Twoja odpowiedz i hasło.';
$helptxt['moderator_why_missing'] = 'Moderatorzy ustalani są poprzez <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">zarządzanie działami</a>, dla każdego działu osobno.';

$helptxt['permissions'] = 'Zezwolenia pozwalają administratorom decydować o dostępie grup użytkowników do różnych czynności na forum.<br /><br />Można zarządzać zezwoleniami poprzez działy lub grupy użytkowników.';
$helptxt['permissions_board'] = 'Jeśli dział ma ustawienie \'globalne\', oznacza to, że nie posiada żadnych dodatkowych pozwoleń. Ustawienie \'lokalne\' oznacza, że dział posiada swoje odrębne zezwolenia. Pozwala to na ograniczenie lub zwiększenie dostępu do któregoś z działów, bez konieczności zmian w całym forum.';
$helptxt['permissions_quickgroups'] = 'Ta opcja pozwala na szybkie przyznanie domyślnych zezwoleń dla grup. Standardowe to zwyczajne prawa użytkownika. Restrykcyjne to takie jakie ma gość. Moderatorskie to prawa jakie posiadają moderatorzy. Przynależność do obsługi forum daje prawa bardzo bliskie administratorskim.';
$helptxt['permissions_deny'] = 'Zabronienie jakiejś czynności jest przydatne, jeśli chcesz zmienić pozwolenia konkretnemu użytkownikowi. Możesz też stworzyć grupę użytkowników z odebranymi prawami i oddać tam tych użytkowników.<br /><br />Zalecamy ostrożne stosowanie. Po zabronieniu użytkownikowi wybranych czynności na forum, nie będzie on miał do nich dostępu, niezależnie od grupy, do której przynależy.';
$helptxt['permissions_postgroups'] = 'Zezwolenia dla grup opartych na ilości wiadomości pozwalają na dodanie dodatkowych praw użytkownikom, którzy napisali określoną liczbę wiadomości. Tak by np. nagrodzić wiernych użytkowników forum. Te zezwolenia <em>dodają się</em> do zezwoleń z innych grup, do których należą użytkownicy.';
$helptxt['permissions_by_board'] = 'Włączenie tej opcji umożliwi nadanie różnych praw każdemu działowi, dla każdej grupy użytkowników. Domyślnie każdy dział posiada zezwolenia globalne, a po włączeniu tej opcji można przełączyć dział na zezwolenia lokalne. Pozwala to na korzystanie z zezwoleń w dowolny sposób.';
$helptxt['membergroup_guests'] = 'Grupa Goście to wszyscy użytkownicy, którzy nie są zalogowani.';
$helptxt['membergroup_regular_members'] = 'Użytkownikami bez grupy są wszyscy użytkownicy którzy są zarejestrowani, ale nie mają przydzielonej żadnej grupy.';
$helptxt['membergroup_administrator'] = 'Administrator może z definicji robić wszystko i widzieć wszystkie fora. Nie istnieją ustawienia uprawnień dla administratora.';
$helptxt['membergroup_moderator'] = 'Moderatorzy to specjalna grupa. Pozwolenia i ustawienia dotyczące tej grupy dotyczą się moderatorów, ale <em>tylko w działach, w których moderują</em>. Poza tymi działami, ich prawa nie różnią się od praw zwykłych użytkowników.';
$helptxt['membergroups'] = 'W SMF są dwa rodzaje grup użytkowników:
	<ul>
		<li><b>Zwykłe grupy:</b> To takie grupy, do których użytkownicy nie są przydzielani automatycznie. By przypisać użytkownika do grupy, administrator musi wejść do jego profilu i kliknąć na ustawienia konta. Z tego miejsca można przydzielić go do dowolnej liczby istniejących grup.</li>
		<li><b>Grupy oparte na ilości wiadomości:</b> W odróżnieniu od zwykłych grup, do grup opartych na ilości wiadomości napisanych przez użytkownika, nie można przydzielić użytkowników. Użytkownicy są przydzielani do nich automatycznie po osiągnięciu określonej liczby wiadomości.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Możesz edytować te zdarzenia poprzez kliknięcie na czerwonej gwiazdce (*) zaraz obok ich nazw.';

$helptxt['maintenance_general'] = 'W tym miejscu możesz zadbać o sprawność forum. Włączyć optymalizację (zmniejszyć i przyspieszyć tabele baz danych), upewnić się, że posiadasz najnowszą wersję SMF, wyszukać błędy psujące działy, przeliczyć statystyki i opróżnić logi.<br /><br />Raczej unikaj dwu ostatnich czynności, chyba że coś pójdzie nie tak jak trzeba, choć jeśli to zrobisz, to nic złego się nie stanie.';
$helptxt['maintenance_backup'] = 'Tutaj możesz zapisać kopię wszystkich wiadomości, ustawień, użytkowników i innych informacji dotyczących Twojego forum w bardzo dużym pliku.<br /><br />Zaleca się, aby dla bezpieczeństwa robić to dość często (np. raz w tygodniu).';
$helptxt['maintenance_rot'] = 'Pozwala <b>całkowicie</b> i <b>nieodwracalnie</b> usunąć stare wątki. Zaleca się zrobić najpierw kopię na wypadek, gdyby zostało usunięte coś, czego nie chciałeś skasować.<br /><br />Używaj tej opcji z należytą ostrożnością.';

$helptxt['avatar_allow_server_stored'] = 'Ta opcja umożliwia użytkownikom forum na użycie awatarów znajdujących się już na twoim serwerze. Znajdują się one przeważnie w tym samym katalogu co SMF w folderze awatarów.<br />Jako podpowiedź dodamy, że jeśli stworzysz oddzielne katalogi w folderze awatarów, powstaną  &quot;kategorie&quot; awatarów.' ;
$helptxt['avatar_allow_external_url'] = 'Kiedy ta funkcja jest włączona, użytkownicy mogą podać własny URL to awatara. Minusem tego jest to, że w niektórych przypadkach, mogą oni użyć awatara zbyt dużego, albo z podobizną, której sobie nie życzysz na swoim forum.' ;
$helptxt['avatar_download_external'] = 'Jeżeli włączysz tą opcję, będzie możliwe pobranie awatarów z zewnętrznego adresu URL podanego przez użytkownika. Awatar będzie traktowany jak wgrany na serwer.';
$helptxt['avatar_allow_upload'] = 'Ta opcja jest podobna do &quot;Zezwól użytkownikom na posiadanie awatarów z innego serwera&quot;, ale masz lepszą kontrolę nad awatarami, możesz zmieniać ich rozmiar a twoi użytkownicy nie muszą posiadać własnego serwera, na którym trzymaliby swoje awatary.<br /><br />Jednakże  są pewne minusy tej opcji. Musisz posiadać sporo miejsca na serwerze na awatary swoich forumowiczów.';
$helptxt['avatar_download_png'] = 'Pliki PNG są większe, ale oferują lepszą jakość. Jeśli ta opcja jest odznaczona, zostaną użyte pliki JPEG - które są zwykle mniejsze, ale zwykle o mniejszej jakości.';

$helptxt['disableHostnameLookup'] = 'Ta opcja wyłącza sprawdzanie nazwy DNS hosta, które na niektórych serwerach jest bardzo wolne. Zauważ że spowoduje to obniżenie efektywności banowania.';

$helptxt['search_weight_frequency'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik bazuje na częstości występowania. Zlicza liczbę pasujących do wyszukiwania wiadomości i dzieli je przez liczbę wiadomości w wątku.';
$helptxt['search_weight_age'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik przydziela tym większą ważność im nowsza wiadomość.';
$helptxt['search_weight_length'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik bazuje na rozmiarze wątku. Im więcej w nim wiadomości, tym bardziej jest ważny.';
$helptxt['search_weight_subject'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik daje większą wagę wiadomościom, w których wyszukiwana fraza znajduje się w temacie wątku.';
$helptxt['search_weight_first_message'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik sprawdza czy wyszukiwana fraza znajduje się w pierwszej wiadomości wątku.';
$helptxt['search_weight_sticky'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik przydziela większą ważność wątkom przyklejonym.';
$helptxt['search'] = 'Tutaj możesz dostosować wszystkie ustawienia dla funkcji wyszukiwania. Nie możesz tutaj ustawić kto ma do niej dostęp. Aby to zrobić przejdź do ekranu \'zarządzaj zezwoleniami\' w panelu administracyjnym.';
$helptxt['search_why_use_index'] = 'Indeks wyszukiwania w może w znaczny sposób przyspieszyć wyszukiwanie na forum. Szczególnie gdy liczba wiadomości na forum jest bardzo duża, wyszukiwanie bez indeksu może zająć dużo czasu i znacznie obciążać bazę danych. Jeśli ilość wiadomości na Twoim forum wzrośnie powyżej 50 tysięcy, weź pod uwagę stworzenie indeksu, by zwiększyć wydajność Twoje forum.<br /><br />Weź jednak pod uwagę, że indeks wyszukiwania może zająć sporo miejsca. Indeks pełnotekstowy jest wbudowany w indeks MySQL. Jest stosunkowo niewielki (podobnych rozmiarów co tabela wiadomości), lecz nie wszystkie słowa są indeksowane, a niektóre wyszukiwania i tak okazują się wolne. Indeks wybiórczy jest często większy (zależnie od konfiguracji do 3 razy większy niż tabela wiadomości), lecz jego wydajność jest większa od indeksu pełnotekstowego i nie jest zależna od rodzaju wyszukiwań.';

$helptxt['see_admin_ip'] = 'Adresy IP są pokazywane administratorom i moderatorom w celu ułatwienia moderacji i umożliwienia śledzenia osób, które robią złe rzeczy na forum. Pamiętaj, że adresy IP nie zawsze mogą być identyfikowane, a wiele osób zmienia swój adres IP co jakiś czas.<br /><br />Użytkownicy widzą swoje własne adresy IP.';
$helptxt['see_member_ip'] = 'Twój adres IP jest pokazywany jedynie Tobie i moderatorom. Pamiętaj że ta informacja nie identyfikuje jednoznacznie ludzi, ponieważ adresy IP zwykle się zmieniają okresowo<br /><br />Nie możesz sprawdzić adresów IP innych członków, a oni twojego.';

$helptxt['ban_cannot_post'] = 'Banowania \'Nie może wysyłać wiadomości\', włącza forum w tryb \'tylko do odczytu\' dla banowanego użytkownika. Użytkownik nie może tworzyć nowych wątków, odpowiadać na istniejące, wysyłać prywatnych wiadomości oraz oddawać głosów w ankietach. Zbanowany użytkownik może nadal odczytywać prywatne wiadomości oraz wątki.<br /><br />Wiadomość ostrzegawcza jest wyświetlana użytkownikowi jeśli został zbanowany w ten sposób.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Ustawienia wiadomości</b><br />
			Tu możesz zmienić ustawienia związane z pisaniem wiadomości i sposobem ich wyświetlania, a także włączyć sprawdzanie ortografii (jeśli serwer to umożliwia).
		</li><li>
			<b>Bulletin Board Code</b><br />
			Tu włączysz możliwość formatowania wiadomości, oraz wybrać które z kodów mają być dostępne dla użytkowników.
		</li><li>
			<b>Słowa cenzurowane</b>
			By utrzymać słownictwo forum pod kontrolą, możesz ustawić które słowa zostaną wymienione na ich \'poprawne\' odpowiedniki.
		</li><li>
			<b>Ustawienia wątków</b>
			Tu możesz zmieniać ustawienia dotyczące wątków: ilość na stronę, ilość potrzebna na by oznaczyć wątek jako gorący, opcje przyklejonych wątków itp.
		</li>
	</ul>';

?>