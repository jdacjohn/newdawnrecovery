<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Zavřít okno';

$helptxt['manage_boards'] = '
	<b>Editovat Diskuse</b><br />
	V tomto menu můžete vytvářet/přeskupovat/odebírat diskuse a kategorie
	nad nimi. Například, pokud máte web s širokým záběrem,
	který nabízí informace o &quot;Sportech&quot; a &quot;Autech&quot; a &quot;Hudbě&quot;, tyto
	budou kategoriemi nejvyšší úrovně, které vytvoříte. V každé z těchto
	kategorií budete chtít vytvořit hierarchické &quot;Podkategorie&quot;,
	nebo &quot;Diskuse&quot; s tématy v nich. Je to jednoduchá hierarchie s touto strukturou: <br />
	<ul>
		<li>
			<b>Sporty</b>
			&nbsp;- &quot;kategorie&quot;
		</li>
		<ul>
			<li>
				<b>Baseball</b>
				&nbsp;- Diskuse podřízená kategorii &quot;Sporty&quot;
			</li>
			<ul>
				<li>
					<b>Statistiky</b>
					&nbsp;- Dceřinná diskuse podřízená diskusi &quot;Baseball&quot;
				</li>
			</ul>
			<li><b>Football</b>
			&nbsp;- Diskuse podřízená kategorii &quot;Sporty&quot;</li>
		</ul>
	</ul>
	Kategorie vám dovolují rozdělit fórum na široce zaměřená témata (&quot;Auta,
	Sporty&quot;), a &quot;Diskuse&quot; jim podřízené jsou vlastní témata, kam
	můžou uživatelé přispívat. Uživatel zajímající se o Trabanty
	by vytvořil zprávu v &quot;Auta->Trabanty&quot;. Kategorie umožňují lidem
	rychle najít to, co je zajímá: Místo &quot;Obchody&quot; máte kategorie
	&quot;Železářství&quot; a &quot;Oděvy&quot;. To zjednodušuje
	hledání &quot;spojky trubek&quot; protože můžete jít do &quot;kategorie&quot;Železářství
	místo do Oděvů (kde je nalezení spojky trubek dost nepravděpodobné).<br />
	Jak je zmíněno výše, Diskuse je klíčové téma podřízené kategorii s širokým záběrem.
	Pokud se chcete bavit o &quot;Trabantech&quot; půjdete do kategorie &quot;Auta&quot; a
	přejdete do diskuse &quot;Trabanty&quot;, abyste sem přidali svoje myšlenky.<br />
	Administrativní funkce pro tuto položku menu jsou vytvoření nové diskuse
	v každé kategorii, jejich přeskupení (posunout &quot;Trabanty&quot; před &quot;Škodovky&quot;), nebo
	určitou diskusi smazat úplně.';

$helptxt['edit_news'] = '<b>Editovat Novinky fóra</b><br />
	Tato položka vám dovoluje nastavit text pro zprávy zobrazované na Board Index page.
	Přidejte požadovanou pložku (např., &quot;Nepropásněte konferenci toto úterý&quot;). Každá položka zpráv by měla
	být zařazena do zvláštního oddílu a jsou zobrazovány náhodně.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Zobraz všechny uživatele</b><br />
			Zobrazí všechny uživatele na fóru. Poskytne nalinkovaný seznam jmen uživatelů. Můžete kliknout
			na kterékoliv z těchto jmen pro zobrazení detailů uživatele (homepage, věk, atd.), a jako Administrátor
			můžete modifikovat tyto parametry. Máte kompletní kontrolu nad uživateli, včetně
			možnosti jej smazat z fóra.<br /><br />
		</li>
		<li>
			<b>Čeká se na schválení</b><br />
			Tato sekce je zobrazena pouze pokud máte zapnuté schvalování všech nových registrací administrátorem. Kdokoliv se zaregistruje na vašem
			fóru se stane plnoprávným uživatelem teprve až je schválen administrátorem. Tato sekce zobrazí všechny uživatele, kteří
			ještě stále čekají na schválení, spolu s jejich emailem a IP adresou. Můžete si vybrat jestli je přijmete nebo odmítnete (smažete)
			jakéhokoliv uživatele na seznamu zašktnutím políčka vedle něj a zvolením akce z rozbalovacího políčka naspodu stránky.
      Při odmítnutí uživatele si můžete vybrat, jestli jej smažete a dáte mu to na vědomí, nebo mu vaše rozhodnutí neoznámíte.<br /><br />
		</li>
		<li>
			<b>Čeká se na aktivaci</b><br />
			Tato sekce je zobrazena pouze pokud máte na fóru zapnuté aktivování uživatelských účtůnt. Tato sekce zobrazí všechny uživatele,
      kteří ještě neaktivovali svůj nový účet. Ná této stránce můžete vybrat jestli přijmete, odmítnete nebo upozorníte
			členy s nedokončenou registrací. Také si můžete vybrat, jestli uživateli pošlete email s informací o provedené akci.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Zakázání uživatelů</b><br />
	SMF poskytuje možnost &quot;zakázat&quot; uživatele, což zabrání lidem , kteří porušili pravidla fóra
	spamováním, trolling, atd. To vám dovolí zbavit se uživatelů škodících fóru. Jakožto admin, vidíte
	při prohlížení zpráv IP adresu každého uživatele, kterou použil při poslání příspěvku. Do seznamu zákazů
	jednoduše napíšete danou IP adresu, uložíte a uživatelé již dále nemůžou z toho místa přispívat.<br />Můžete také
	zakázat uživatele podle jejich emailových adres.';

$helptxt['modsettings'] = '<b>Editovat vlastnosti a možnosti</b><br />
	V této sekci je několik vlastností, které můžete změnit podle vašich preferencí. Možnosti pro naistalované mody se tady obvykle také zobrazí.';

$helptxt['number_format'] = '<b>Formát čísel</b><br />
	Tato položka slouží k nastavení formátu zobrazení čísel. Formát použitý k tomuto nastavení je následující:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Kde \',\' je znak užívaný k oddělení skupin po tisících, \'.\' je znak oddělující celou část čísla od desetin a počet nul za desetinnou čárkou určuje přesnost zaokrouhlování.';

$helptxt['time_format'] = '<b>Formát času</b><br />
	Máš možnost přizpůsobit vzhled data a času podle svého. Napoprvé tě zmate množství písmenek, ale vše je poměrně jednoduché.
	Konvence odpovídají parametrům PHP funkce strftime a jsou popsány níže. Více informací nalezneš v online dokumentaci PHP na adrese <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	Formátovací řetězec rozeznává následující znaky: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - zkrácený název dne<br />
	&nbsp;&nbsp;%A - celý název dne<br />
	&nbsp;&nbsp;%b - zkrácený název měsíce<br />
	&nbsp;&nbsp;%B - celý název měsíce<br />
	&nbsp;&nbsp;%d - den v daném měsíci (01 až 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - stejné jako %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - den v daném měsíci (1 až 31) <br />
	&nbsp;&nbsp;%H - hodiny v 24hodinovém vyjádření (00 až 23) <br />
	&nbsp;&nbsp;%I - hodiny v 12hodinovém vyjádření (01 až 12) <br />
	&nbsp;&nbsp;%m - měsíc - číselně (01 až 12) <br />
	&nbsp;&nbsp;%M - minuta - číselně <br />
	&nbsp;&nbsp;%p - buď &quot;am&quot; nebo &quot;pm&quot; v závislosti na aktuálním čase<br />
	&nbsp;&nbsp;%R<b>*</b> - čas v 24hodinové notaci <br />
	&nbsp;&nbsp;%S - sekundy jako desetinné číslo <br />
	&nbsp;&nbsp;%T<b>*</b> - aktuální čas, ekvivalent zápisu %H:%M:%S <br />
	&nbsp;&nbsp;%y - rok dvouciferně (00 až 99) <br />
	&nbsp;&nbsp;%Y - rok čtyřciferně<br />
	&nbsp;&nbsp;%Z - časové pásmo, název nebo zkratka <br />
	&nbsp;&nbsp;%% - znak \'%\' <br />
	<br />
	<i>* Nefunguje na serverech založených na Windows.</i></span>';

$helptxt['live_news'] = '<b>Živě ze Simple Machines</b><br />
	Toto pole zobrazuje poslední aktualizovaná oznámení od <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	Měli byste se tam občas podívat na aktualizace, nové releasy a důležité informace od Simple Machines.';

$helptxt['registrations'] = '<b>Správa registrací</b><br />
	Tato sekce obsahuje všechny funkce nezbytné pro správu nových registrací na fóru. Jsou v ní až čtyři
  sekce, viditelné podle nastavení fóra. Jsou to:<br /><br />
	<ul>
		<li>
			<b>Registrovat nové uživatele</b><br />
			Na této stránce můžete zaregistovat nové uživatele v jejich zastoupení. Toto může být užitečné na fórech, kde je registrace novým
      uživatelům uzavřena, nebo v případech, kdy si admin přeje vytvořit testovací účet. Je-li zapnuto vyžadování aktivace účtu,
			bude uživateli zaslám emailem aktivační odkaz, na který musí kliknout, než bude moci účet využívat. Podobně si můžete
      zvolit zaslání emailem uživatelům nové heslo na uvedenou emailovou adresu.<br /><br />
		</li>
		<li>
			<b>Editovat registrační smlouvu</b><br />
			Umožňuje nastavit text of registration agreement, který je zobraze, když se uživatel registruje na vaše fórum.
			Můžete přidat nebo odebrat cokoliv z výchozího registration agreement, který je součástí SMF.<br /><br />
		</li>
		<li>
			<b>Nastav vyhrazená jména</b><br />
			Použitím tohoto rozhraní můžete specifikovat slova nebo jména, která nebudou moci být použita vašimi uživateli.<br /><br />
		</li>
		<li>
			<b>Nastavení</b><br />
			Tato sekce bude viditelná pouze pokud máte oprávnění administrovat fórum. Na této stránce můžete rozhodnout o způsobu registrace
			používané na vašem fóru, stejně jako o dalších nastavení registrace.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Log moderace</b><br />
	Tato sekce umožňuje členům teamu adminů sledovat všechny moderační akce, které provedli moderátoři fóra. Aby bylo zabezpečeno, že
	moderátoři nebudou moci smazat reference o akcích, které provedli, záznamy není možno smazat dříve než 24 hodin po provedení akce.
	Sloupec \'objektů\' zobrazuje všechny proměnné spojené s danou akcí.';
$helptxt['error_log'] = '<b>Log chyb</b><br />
	Log chyb zaznamenává všechny vážné chyby, se kterými se setkali uživatelé fóra. Vypisuje chyby podle data, které může být setříděno kliknutím na černou šipku vedle každého data. Dále můžeš filtrovat chyby kliknutím na obrázek vedle každé chyby. To ti umožní filtrovat, například podle uživatele. Pokud je filtr aktivní, uvidíš pouze výsledky, které odpovídají nastavenému filtru.';
$helptxt['theme_settings'] = '<b>Nastavení vzhledu</b><br />
	Stránka nastavení ti umožňuje změnit vlastnosti zvoleného vzhledu. Tato nastavení zahrnují možnosti jako adresář vzhledu nebo URL informace, ale
	také volby, které ovlivňují rozvržení vzhledu na fóru. Většina vzhledů bude mít mnoho druhů užvatelsky nastavitelných voleb, umožňujících přizpůsobení vzhledu
	tak, aby se hodil individuálním potřebám tvého fóra.';
$helptxt['smileys'] = '<b>Centrum emotikonů</b><br />
	Zde můžeš přidávat a odebírat emotikony a jejich sady. Měj na paměti, že je-li emotikon v jedné sadě, musí být ve všech sadách.
	V opačném případě dojde ke zmatení uživatelů používajících různé sady.';
$helptxt['calendar'] = '<b>Správa kalendáře</b><br />
	Zde můžeš modifikovat nastavení aktuálního kalendáře, stejně tak jako odebírat svátky, které se v kalendáři objevují.';

$helptxt['serversettings'] = '<b>Nastavení serveru</b><br />
	Zde můžeš provádět hlavní nastavení tvého fóra. Tato sekce zahrnuje nastavení databáze a url, stejně tak další
	důležité konfigurační volby jako jako nastavení mailu a caching. Editování těchto nastavení důkladně zvažuj, protože chyba může
	učinit tvoje fórum nedostupné';

$helptxt['topicSummaryPosts'] = 'Dovolí nastavit počet předchozích příspěvků zobrazených v souhrnu tématu v okně odpovědi na téma.';
$helptxt['enableAllMessages'] = 'Nastavení <em>maximálního</em> počtu zpráv, které může mít téma, aby se zobrazoval odkaz na zobrazení všech příspěvků. Pokud je nastaveno níže než na &quot;Počet příspěvků na seznamu témat&quot;, bude to znamenat, že se nikdy nezobrazí; příliš vysoké nastavení může zpomalit tvé fórum.';
$helptxt['enableStickyTopics'] = 'Připíchnutá témata jsou témata, která zůstávají na čele seznamu témat. Většinou jsou použity pro
		důležité zprávy. Standardně mohou vytvářet připíchnutá témata pouze moderátoři a adminové, avšak běžní uživatelé mohou dostat povolení k připíchnutí tématu.';
$helptxt['allow_guestAccess'] = 'Zrušení zaškrtnutí tohoto políčka zabrání hostům dělat cokoliv kromě nejzákladnějších akcí - přihlášení, registrace, připomenutí hesla atd. - na tvém fóru.  Není to totéž jako nepovolení přístupu hostů na fórum.';
$helptxt['userLanguage'] = 'Zapnutí této volby dovolí uživatelům zvolit, jaký jazykový soubor použijí.
	Neovlivní to však výchozí nastavení.';
$helptxt['trackStats'] = 'Stats:<br />Dovolí uživatelům vidět poslední příspěvky a nejpopulárnější témata na tvém fóru.
		také zobrazí některé statistiky, jako nejvíce uživatelů online, nové uživatele a nová témata.<hr />
		Návštěv:<br />Přidá ke statistikám další sloupec s počtem návštěv na tvém fóru.';
$helptxt['titlesEnable'] = 'Zapnutí vlastních titulků dovolí členům s  odpovídajícím oprávněním vytvořit si vlastní titulek.
		Ten bude zobrazen pod jejich jménem.<br /><i>Příklad:</i><br />Jaroušek<br />Ostrý hoch';
$helptxt['topbottomEnable'] = 'Zobrazí tlačítka Nahoru a Dolů, takže uživatelé mohou přejít na začátek a konec stránky bez scrollování.';
$helptxt['onlineEnable'] = 'Zobrazí obrázek indikující, zda je uživatel online nebo offline';
$helptxt['todayMod'] = 'Zobrazí text &quot;dnes&quot;, nebo &quot;včera&quot; namísto data.';
$helptxt['enablePreviousNext'] = 'Zobrazí odkaz na předchozí a následující téma.';
$helptxt['pollMode'] = 'Určuje, zda jsou povoleny ankety. Nejsou-li ankety povoleny, budou všechny existující ankety skryty. Můžeš se rozhodnout zobrazit témata bez jejich anket zaškrtnutím volby &quot;Zobrazit existující ankety jako témata&quot;.<br /><br />Pro určení, kdo může vytvářet ankety, kdo jen prohlížet atp. můžeš udělit různá oprávnění. Pamatuj na to, když nebudou ankety pracovat.';
$helptxt['enableVBStyleLogin'] = 'Hostům zobrazí malé okno pro přihlášení na každé stránce fóra.';
$helptxt['enableCompressedOutput'] = 'Tato volba zkomprimuje výstup pro úsporu šířky pásma, ale požaduje mít nainstalovanou knihovnu zlib.';
$helptxt['databaseSession_enable'] = 'Tato volba používá databázi k ukládání sezení (session). Nejlepší je pro servery s vyrovnaným zatížením, ale pomáhá se všemi timeout problémy a může fórum urychlit. Nefunguje, je-li session.auto_start zapnuto.';
$helptxt['databaseSession_loose'] = 'Zapnutím snížíš šířku pásma, které fórum používá. Fórum při kliknutí na tlačítko Zpět prohlížeče neobnoví stránku. Nevýhodou je, že - mimo jiné - nebudou obnovovány ikony &quot;nové&quot;. (Pokud neklikneš na stránku namísto vrácení se k ní.)';
$helptxt['databaseSession_lifetime'] = 'Počet sekund, po kterých budou nepoužívaná sezení (session) zrušeny. Není-li k session přistupováno příliš dlouho, vyprší její platnost. Doporučuje se použít číslo větší než 2400.';
$helptxt['enableErrorLogging'] = 'Bude zaznamenávat všechny chyby (jako např. chybná přihlášení), takže můžete vidět co bylo špatně.';
$helptxt['allow_disableAnnounce'] = 'Tato volba dovolí uživatelům přihlásit se k příjmu oznámení témat, které oznámíš zaškrtnutím políčka &quot;oznam téma&quot; při vytváření příspevku.';
$helptxt['disallow_sendBody'] = 'Tato volba odebere možnost dostávat text odpovědí příspěvků oznamovacím emailem.<br /><br />Uživatelé často odpovídají na oznamovací email, což ve většině případů znamená, že tuto odpověď obdrží webmaster.';
$helptxt['compactTopicPagesEnable'] = 'Zobrazí pouze výběr z čísel stránek.<br /><i>Příklad:</i>
		&quot;3&quot; k zobrazení: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; k zobrazení: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Na konci stránky zobrazí dobu v sekundách, kterou SMF potřebovalo její vytvoření.';
$helptxt['removeNestedQuotes'] = 'V případě citace příspěvku zobrazí pouze tento příspěvek, nikoliv další vnořené citace.';
$helptxt['simpleSearch'] = 'Zobrazí jednoduchý vyhledávací formulář a odkaz na formulář pro rozšířené vyhledávání.';
$helptxt['max_image_width'] = 'Toto ti umožní nastavit maximální rozměry posílaných obrázků. Menších obrázků se nastavení netýká.';
$helptxt['mail_type'] = 'Umožní zvolit buď defaultní PHP mailovací program, nebo tvůj mailovací server.
		Vyplň detaily o tvém mailovém serveru, pokud jsi nevybral sendmail.';
$helptxt['attachmentEnable'] = 'Přílohy jsou soubory, které mohou členové nahrát a připojit je ke svému příspěvku.<br /><br />
		<b>Kontrolovat příponu příloh</b>:<br /> Chceš testovat příponu souborů?<br />
		<b>Povolené přípony příloh</b>:<br /> Můžeš zadat povolené přípony souborů s přílohami.<br />
		<b>Zobrazovat obrázkové přílohy jako obrázky pod příspěvkem</b>:<br /> Je-li přílohou soubor s obrázkem, zobrazí jej fórum pod příspěvkem<br />
		<b>Adresář s přílohami</b>:<br /> Cesta k adresáři, do kterého budou ukládány přílohy<br />(příklad: /home/sites/tvojestranka/www/forum/prilohy)<br />
		<b>URL s přílohami</b>:<br /> URL adresáře, do kterého budou ukládány přílohy<br />(příklad: http://www.tvujserver.cz/www/forum/prilohy)<br />
		<b>Maximální velikost adresáře s přílohami</b> (v KB):<br /> Zadej jak velký smí adresář s přílohami být, včetně všech souborů v něm.<br />
		<b>Maximální velikost příloh na zprávu</b> (v KB):<br /> Zadej maximální velikost souborů (souhrnnou) připojených ke zprávě.
		Je-li tato hodnota menší, než maximální velikost přílohy, bude toto limit.<br />
		<b>Maximální velikost přílohy</b> (v KB):<br /> Zadej maximální velikost jedné přílohy.<br />
		<b>Maximální počet příloh na zprávu</b>:<br /> Zadej počet příloh, který může uživatel připojit k jednomu příspěvku.';
$helptxt['karmaMode'] = 'Karma je rys fóra, který ukazuje popularitu člena. Členové fóra, je-li jim to dovoleno, mohou
		&quot;vytleskat&quot; nebo &quot;vypískat&quot; jiné členy, z čehož je pak počítána jejich popularita. Můžeš změnit počet příspěvků
		potřebných pro vlastnění &quot;karmy&quot;, dobu mezi potlesky a pískoty, a jestli
		administrátoři musí tuto dobu čekat také.<br /><br />
		To, zda mohou skupiny členů snížit karmu ostatním, je řízeno oprávněními. Máš-li potíže s rozběháním této funkce,
		překontroluj všechna oprávnění.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'Kalendář může být použit pro zobrazení narozenin, nebo důležitých událostí ve tvé komunitě.<br /><br />
		<b>Zobrazovat dny jako odkazy na \'Poslat událost\'</b>:<br />Dovolí členům zadat událost pro den, na jehož datum kliknou<br />
		<b>Zobrazovat čísla týdnů</b>:<br />Zobrazí číslo týdne, který to je.<br />
		<b>Maximální počet dnů dopředu na seznamu diskusí</b>:<br />Je-li nastaveno na 7, bude zobrazen příští týden s událostmi.<br />
		<b>Zobrazovat svátky na seznamu diskusí</b>:<br />V kalendářovém pruhu na seznamu diskusí zobrazí dnešní svátky.<br />
		<b>Zobrazovat narozeniny na seznamu diskusí</b>:<br />V kalendářovém pruhu na seznamu diskusí zobrazí dnešní narozeniny.<br />
		<b>Zobrazovat události na seznamu diskusí</b>:<br />V kalendářovém pruhu na seznamu diskusí zobrazí dnešní události.<br />
		<b>Výchozí diskuse k posílání událostí</b>:<br />Která je výchozí diskuse pro posílání událostí?<br />
		<b>Minimální rok</b>:<br />Vyber &quot;první&quot; rok v seznamu kalendáře.<br />
		<b>Maximální rok</b>:<br />Vyber &quot;poslední&quot; rok v seznamu kalendáře<br />
		<b>Barva pro narozeniny</b>:<br />Vyber barvu narozeninového textu<br />
		<b>Barva pro události</b>:<br />Vyber  barvu textu události<br />
		<b>Barva pro svátky</b>:<br />Vyber barvu textu svátku<br />
		<b>Povolit vícedenní události</b>:<br />Zaškrtni pro povolení událostí trvajících více dní.<br />
		<b>Maximální počet dnů na událost</b>:<br />Zadej maximální počet dní, který může událost trvat.<br /><br />
		Pamatuj že používání kalendáře (zadávání a prohlížení událostí atd.) je řízeno oprávněními nastavenými v okně práv.';
$helptxt['localCookies'] = 'SMF používá cookies pro ukládání informací o přihlášení na klientském počítači.
	Cookies mohou být uloženy globálně (mujserver.cz), nebo lokálně (mujserver.cz/cesta/k/fóru/).<br />
	Zaškrtni tuto možnost, pokud máš problém s automaticky odhlašovanými uživateli.<hr />
	Globálně ukládané cookies jsou méně bezpečně, jsou-li používány pro sdílený server (jako např. Tripod).<hr />
	Lokální cookies nefungují mimo adresář fóra, takže je-li tvoje fórum na adrese www.mujserver.cz/forum, stánky jako www.mujserver.cz/index.php nemají přístup k informacím o účtu.
	Globální cookies jsou obzvláště doporučeny, používáš-li SSI.php.';
$helptxt['enableBBC'] = 'Zaškrtnutím této volby dovolíš uživatelům na fóru používat BB kód (BBC) a s jeho pomocí formátovat příspěvky, vkládat obrázky a mnohem více.';
$helptxt['time_offset'] = 'Ne všichni administrátoři chtějí používat fórum ve stejné časové zóně jako je server, na kterém fórum běží. Použij toto nastavení k zadání časového rozdílu (v hodinách) času na fóru oproti času na serveru. Záporná a desetinná čísla jsou povolena.';
$helptxt['spamWaitTime'] = 'Zde můžeš zadat dobu, která musí proběhnout mezi zasláním příspěvků. Tímto omezením jak často mohou uživatelé přispívat se může zabránit nežádoucímu &quot;spamování&quot;.';

$helptxt['enablePostHTML'] = 'Umožní zadávat do příspěvků některé základní HTML tagy:
	&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;pre&gt;, &lt;blockquote&gt;, &lt;img src=&quot;&quot; /&gt;, &lt;a href=&quot;&quot;&gt;, a &lt;br /&gt;.';

$helptxt['themes'] = 'Zde můžeš zvolit zda smí být vybrán výchozí vzhled, který vzhled budou používat hosté
	a další možnosti. Klikni na vzhled vpravo pro změnu jeho nastavení.';
$helptxt['theme_install'] = 'Dovolí instalovat nové vzhledy. To lze udělat z již vytvořeného adresáře nahráním archivu nového vzhledu, nebo kopírováním výchozího vzhledu.<br /><br />Dej pozor, aby archiv nebo adresář obsahoval definiční soubor <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Umožní uživatelům používat Flash přímo uvnitř příspěvků, podobně jako obrázky.
	To může vytvořit bezpečnostní díru, ačkoliv zatím zneužitou jen málokdy. NA VLASTNÍ NEBEZPEČÍ!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Povolí uživatelům odkazovat na <a href="' . $scripturl . '?action=.xml;sa=news">Poslední novinky</a>
	a podobná data. Je také doporučeno omezit velikost posledních příspěvků/novinek protože některé rss klienty, jako
	Trillian, očekávají rss data zkrácená.';
$helptxt['hotTopicPosts'] = 'Změní počet příspěvků, které musí téma mít, aby získalo status &quot;žhavé&quot; nebo
	&quot;velmi žhavé&quot; téma.';
$helptxt['globalCookies'] = 'Povolí používat cookies nezávislá na subdoméně.  Například: <br />
	Tvůj web je na http://www.simplemachines.org/,<br />
	a fórum je na http://forum.simplemachines.org/,<br />
	použitím této modifikace ti dovolí pracovat s cookie fóra v celém tvém webu.';
$helptxt['securityDisable'] = 'Toto <i>deaktivuje</i> dodatečnou kontrolu hesla v administrátorské sekci. Nedoporučuje se to!';
$helptxt['securityDisable_why'] = 'Toto je tvé současné heslo. (Stejné, jaké používáš pro přihlášení.)<br /><br />
	Tím, že jej zde napíšeš pomáhá zajistit, že chceš dělat administrátorskou práci a že jsi to <b>ty</b> kdo ji dělá.';
$helptxt['emailmembers'] = 'V této zprávě můžeš použít několik &quot;proměnných&quot;. Jsou to:<br />
	{$board_url} - URL tvého fóra<br />
	{$current_time} - aktuální čas<br />
	{$member.email} - e-mail člena fóra<br />
	{$member.link} - odkaz na profil člena<br />
	{$member.id} - id člena fóra<br />
	{$member.name} - jméno člena fóra (pro personalizaci)<br />
	{$latest_member.link} - odkaz na profil posledního registrovaného člena fóra<br />
	{$latest_member.id} - ID posledního registrovaného člena<br />
	{$latest_member.name} - jméno posledního registrovaného člena';
$helptxt['attachmentEncryptFilenames'] = 'Zašifrování jmen souborů s přílohami ti dovolí mít více příloh téhož jména,
	používat .php soubory jako přílohy a zvyšuje bezpečnost. Na druhou stranu může zkomplikovat obnovu databáze, stane-li se něco vážného.';

$helptxt['failed_login_threshold'] = 'Nastav počet neúspěšných pokusů o přihlášení před přesměrováním uživatele na okno obnovy hesla.';
$helptxt['oldTopicDays'] = 'Pokud je povolena tato volba, bude zobrazeno varování, když se bude snažit uživatel odpovědět do tématu, kde byl poslední příspěvek starší než počet dní udaný zde. Nastav na 0, abys zakázal tuto vlastnost.';
$helptxt['edit_wait_time'] = 'Počet sekund, po který je povoleno editovat příspěvek, aniž by byl zaznamenán čas poslední úpravy.';
$helptxt['edit_disable_time'] = 'Počet minut, po které má uživatel právo měnit svůj příspěvek. Nastav na 0 pro vypnutí. <br /><br /><i>Poznámka: netýká se uživatelů, kteří mají oprávnění editovat cizí příspěvky.</i>';
$helptxt['enableSpellChecking'] = 'Zapne kontrolu pravopisu. MUSÍŠ mít nainstalovanou knihovnu pspell na svém serveru a PHP musí být nakonfigurována pro její použití. Tvůj server ' . (function_exists('pspell_new') == 1 ? 'MÁ' : 'NEMÁ') . ' nastavenu tuto podporu.';
$helptxt['lastActive'] = 'Nastav počet minut, po který je hlídán počet aktivních osob a zobrazován na seznamu diskusí. Výchozí hodnota je 15 minut.';

$helptxt['autoOptDatabase'] = 'Tato volba zapne automatickou optimalizaci databáze jednou za N dní. Nastav na 1 pro každodenní optimalizaci. Také můžeš nastavit maximální počet online uživatelů, takže nepřetížíš server nebo nezpůsobíš nepohodlí příliš mnoha uživatelům.';
$helptxt['autoFixDatabase'] = 'Automaticky opraví poškozené tabulky a znovu spustí práci, jako by se nic nestalo. To může být užitečné, protože jediný způsob jak napravit chyby je OPRAVIT tabulky a takto tvé fórum nebude mimo provoz, pokud nezjistíš chybu. O provedení opravy tě informuje e-mailem.';

$helptxt['enableParticipation'] = 'Zobrazí malou ikonu u tématu, do kterého uživatel přispěl.';

$helptxt['db_persist'] = 'Použije perzistentní spojení s databází pro zvýšení výkonu. (Ponechá spojení s databází otevřené.) Nejsi-li na vlastním serveru, může ti tato volba způsobit potíže s tvým poskytovatelem.';

$helptxt['queryless_urls'] = 'Změní formát URL adres na tvar lépe čitelný pro vyhledávače. Odkazy budou vypadat jako index.php/topic,1.html.<br /><br />Tato funkce ' . (strpos(php_sapi_name(), 'apache') !== false ? 'BUDE' : 'NEBUDE') . ' na tvém serveru pracovat.';
$helptxt['countChildPosts'] = 'Zaškrtnutí této volby způsobí, že příspěvky z pod-diskusí se započtou do součtů na seznamu diskusí.<br /><br />Ačkoli to věci do jisté míry zpomalí, znamená to, že rodičovská diskuse bez příspěvků už nebude zobrazovat \'0\'.';
$helptxt['fixLongWords'] = 'Zalomí slova delší, než je zadaná délka, na menší kousky tak, aby tolik nenarušovaly layout fóra. Zadaná délka by neměly být menší než 40.';

$helptxt['who_enabled'] = 'Umožňuje zapnout nebo vypnout možnost zobrazit uživatelům, kdo je na fóru a co přesně dělá.';

$helptxt['recycle_enable'] = '&quot;Recykluje&quot; smazaná témata a příspěvky do zadané dikuse.';

$helptxt['enableReportPM'] = 'Tato volba umožňuje uživatelům hlásit soukromé zprávy administrátorům. Ta může být užitečné, když se snažíš odhalit zneužívání systému soukromých zprávy.';
$helptxt['max_pm_recipients'] = 'Tato volba ti umožní nastavit maximální počet příjemců soukromé zprávy. Může to pomoci při boji se spamem. Uživatelé s oprávněním rozesílat bulletiny mají výjimku z tohoto omezení. Nastav 0 pro zrušení omezení.';
$helptxt['pm_posts_verification'] = 'Toto nastavení přinutí uživatele zadat kód z ověřovacího obrázku pokaždé, když posílají soukromou zprávu. Pouze uživatelé s nižším než nastaveným počtem budou muset zadávat kód - to by mělo pomoci v boji proti automatickým spamovým skriptům.';
$helptxt['pm_posts_per_hour'] = 'Toto omezí počet soukromých zpráv, které může uživatel poslat za hodinu. Neplatí pro administrátory a moderátory.';

$helptxt['default_personalText'] = 'Nastaví výchozí text, který budou uživatelé mít jako jejich &quot;osobní text&quot;.';

$helptxt['modlog_enabled'] = 'Zaznamenává všechny moderátorské akce.';

$helptxt['guest_hideContacts'] = 'Je-li zaškrtnuta, tato volba skryje e-mailovou adresu a další kontaktní údaje (MSN messenger, ICQ...) před ostatními uživateli fóra.';

$helptxt['registration_method'] = 'Tato volba určuje jaká metoda registrace je použita pro nové potenciální členy fóra. Můžeš si vybrat z:<br /><br />
	<ul>
		<li>
			<b>Registrace zakázána:</b><br />
				Zruší registrační proces, takže se do fóra nemohou připojit žádní další noví členové.<br />
		</li><li>
			<b>Okamžitá registrace</b><br />
				Noví členové se mohou přihlásit a psát příspěvky okamžitě po registraci.<br />
		</li><li>
			<b>Nutná aktivace</b><br />
				Je-li aktivní tato možnost, každý nově registrovaný člen dostane e-mail s aktivačním odkazem, na který musí kliknout. Tím se teprve stane plnoprávným členem fóra.<br />
		</li><li>
			<b>Nutné schválení</b><br />
				Při použití tohoto způsobu musí být všichni nově registrovaní uživatelé schváleni adminem předtím, než se mohou stát členy fóra.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Je-li zaškrtnuta, musí všichni členové, kteří ve svém profilu změnili svou e-mailovou adresu, reaktivovat svůj účet pomocí e-mailu zaslaného na tuto adresu.';
$helptxt['send_welcomeEmail'] = 'Je-li tato volba zapnuta, je všem novým uživatelům poslán uvítací e-mail';
$helptxt['password_strength'] = 'Toto nastavení určuje sílu hesla pro tvé uživatele. Silnějsí heslo znamená, že je obtížnější kompromitovat účty uživatelů.
	Možné volby jsou:
	<ul>
		<li><b>Nízká:</b> Heslo musí mít aspoň 4 znaky.</li>
		<li><b>Střední:</b> Heslo musí mít aspoň 8 znaků a nemůže být částí .</li>
		<li><b>Vysoká:</b> Jako střední, navíc se musí skládat ze směsi malých a velkých písmen a musí obsahovat alespoň jedno číslo.</li>
	</ul>';

$helptxt['coppaAge'] = 'Hodnota nastavená v tomto poli určí minimální věk, který musí uživatel mít, aby mu byl povolen okamžitý přístup na fórum.
	Při registraci budou vyzváni, aby potvrdili, jestli dosáhli tohoto věku a pokud ne, bude jejich žádost odmítnuta nebo odložena do doby schválení rodiči - což záleží na typu zvoleného omezení.
	Pokud je pro toto nastavení zvolena hodnota 0, veškerá věková omezení budou ignorována.';
$helptxt['coppaType'] = 'Pokud jsou věková omezení zapnuta, pak toto nastavení bude definovat, že toto se stane pokud se uživatel s věkem nižším než minimální pokusí zaregistrovat na tvém fóru. Existují dvě možnosti:
	<ul>
		<li>
			<b>Odmítnout jejich registraci:</b><br />
				Registrace jakéhokoliv nového uživatele nedosahujícího minimálního věku bude okamžitě odmítnuta.<br />
		</li><li>
			<b>Požadovat svolení rodiče/zákonného zástupce</b><br />
				Účet jakéhokoliv nového uživatele, který se pokusí zaregistrovat a je pod věkovou hranicí, bude označen jako že čeká na schválení a bude mu předložen formulář, kterým mu musí jeho rodiče udělit povolení stát se uživatelem fóra.
				Také jim budou sděleny kontaktní údaje fóra, které jsou zadány na stránce nastavení, aby mohli zaslat formulář administrátorovi faxem nebo mailem.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Políčka na kontaktní údaje jsou vyžadována, aby mohly být formuláře povolující registrace nezletilých zaslány administrátorům fóra. Tyto údaje budou zobrazeny všem nezletilým a jsou vyžadovány pro schválení rodičem/zákonným zástupcem. Poskytnuta musí být alespoň poštovní adresa nebo faxové číslo.';

$helptxt['allow_hideOnline'] = 'Aktivací této volby dostanou všichni členové možnost skrýt svůj online status před ostatními uživateli (kromě administrátorů). Není-li volba zapnuta, mohou svou přítomnost skrýt pouze moderátoři fóra.	Vypnutím této volby nezměníš status jednotlivých členů, pouze jim zabráníš se v budoucnu skrýt.';
$helptxt['allow_hideEmail'] = 'Je-li tato volba zapnuta, členové fóra mohou skrýt svou e-mailovou adresu před ostatními uživateli. Nicméně administrátoři si mohou zobrazit adresy kohokoli.';

$helptxt['latest_support'] = 'Tento panel vypisuje nejčastější problémy a otázky týkající se konfigurace serveru. Nemusíš se obávat, tato informace není zaznamenávána.<br /><br />Zůstane-li v okně nápis &quot;Stahuji informace podpory...&quot;, tvůj počítač se asi nemůže připojit k serveru <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Zde můžeše vidět některé populární a pár náhodně vybraných balíčků nebo modifikací, spolu s rychlou a snadnou instalací.<br /><br />Neobjeví-li se tato sekce, tvůj počítač se asi nemůže připojit k serveru <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Toto okno zobrazí několik nejnovějších a nejpopulárnějších vzhledů (skinů) ze serveru <a href="http://www.simplemachines.org/">www.simplemachines.org</a>, ačkoliv se vzhledy nemusí zobrazit správně, pokud se tvůj počítač nemůže připojit k serveru <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Pro tvou bezpečnost je odpověď na tvou otázku (stejně jako tvé heslo) zašifrována tak, že SMF ti může pouze říci, jestli jsi ji zadal správně či ne. Bohužel ti tedy SMF nemůže sdělit, jaká odpověď nebo heslo to bylo (a co je důležitější, ani nikomu jinému).';
$helptxt['moderator_why_missing'] = 'Jelikož je moderování prováděno v každé diskusi samostatně, musíš některé členy ustavit moderátory pomocí
<a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">rozhraní správy diskusí</a>.';

$helptxt['permissions'] = 'Práva (oprávnění) jsou způsob, jakým můžeš skupinám povolit nebo zakázat některé věci.<br /><br />Pomocí zaškrtávacích políček můžeš spravovat více diskusí současně, nebo prohlížet práva vybrané skupiny kliknutím na &quot;Změnit&quot;.';
$helptxt['permissions_board'] = 'Je-li diskuse nastavena jako \'Globální\', znamená to, že diskuse nebude mít žádná zvláštní práva. \'Lokální\' znamená, že má svá vlastní oprávnění, udělovaná zvlášť od gobálních. To ti dovolí mít diskusi s více či méně právy než mají ostatní, aniž bys musel práva nastavovat zvlášť pro jednu každou diskusi.';
$helptxt['permissions_quickgroups'] = 'Dovolí ti použít &quot;výchozí&quot; nastavení práv - standardní znamená \'nic zvláštního\', restriktivní znamená \'jako host\', moderátor znamená \'s právy jako má moderátor\', a konečně \'údržba\' znamená práva velmi blízká těm, která má administrátor.';
$helptxt['permissions_deny'] = 'Zakázání oprávnění může být užitečné, když chcete odebrat oprávnění určitým uživatelům. Můžete přidat skupinu uživatelů se \'zakázaným\'-oprávněním člemům, klterým chcete odebrat oprávnění.<br /><br />Při správném použití zůstane zakázané oprávnění zakázaným bez ohledu na to, ve kterých skupinách je uživatel členem.';
$helptxt['permissions_postgroups'] = 'Povolení oprávnění skupinám založených na počtu příspěvků ti dovolí přiřadit oprávnění uživatelům, kteří přispěli určitým počtem zpráv. Oprávnění skupinám založených na počtu příspěvků jsou <em>přidány</em> k oprávněním běžných skupin uživatelů.';
$helptxt['permissions_by_board'] = 'Zapnutí této volby ti dovolí zapnout různá oprávnění ke kažé kategorii pro každou skupinu. Standardně fórum používá globální oprávnění, ale pokud je tato volba zapnuta, můžeš přepnout kategorii na lokální nastavení oprávnění. Což poskytuje propracovaný způsob jakým spravovat oprávnění.';
$helptxt['membergroup_guests'] = 'Skupina hostů jsou všichni uživatelé, kteří se nepřihlásili.';
$helptxt['membergroup_regular_members'] = 'Běžní uživatelé jsou ti uživatelé, kteří se přihlásili, ale nejsou přidáni do žádné primární skupiny.';
$helptxt['membergroup_administrator'] = 'Administrátor může, z definice, dělat cokoliv a vidět všechny kategorie. Pro administrátora se nenastavují žádná oprávnění.';
$helptxt['membergroup_moderator'] = 'Skupina moderátorů je speciální skupina. Oprávnění a nastavení přiřazená této skupině platí pouze pro moderátory, ale pouze <em>v kategoriích, které moderují</em>. Mimo tyto kategorie jsou jako ostatní uživatelé.';
$helptxt['membergroups'] = 'SMF rozlišuje dva typy skupin, jejichž součástí může být člen fóra. Jsou to:
	<ul>
		<li><b>Běžné skupiny:</b> Běžná skupina je skupina, do které nejsou členové přidáváni automaticky. Pro přidání člena do skupiny si otevři jeho profil a klikni na &quot;Nastavení účtu&quot;. Odsud jej můžeš přidat do libovolného počtu běžných skupin, jejichž má být členem.</li>
		<li><b>Hodnosti:</b> Na rozdíl od běžných skupin jsou uživatelé fóra do jednotlivých \'hodností\' zařazováni automaticky podle počtu příspěvků, který zaslali. Každá \'hodnost\' má určený minimální počet příspěvků, kterého je nutno dosáhnout.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Tyto události můžeš editovat kliknutím na červenou hvězdičku (*) vedle jejich jména.';

$helptxt['maintenance_general'] = 'Odsud můžeš optimalizovat všechny své tabulky (zmenšit je a zrychlit!), ujistit se, že máš nejnovější verze, najít možné chyby poškozující tvé fórum, přepočítat součty a mazat záznamy (logy).<br /><br />Posledním dvěma zmiňovanéým akcím, ač ničemu neublíží, by ses měl vyhnout, dokud nedojde k nějaké chybě.';
$helptxt['maintenance_backup'] = 'Tato oblast ti dovolí uložit kopii všech příspěvků, nastavení, členů a dalších informací o tvém fóru.<br /><br />Toto zálohování se z důvodů bezpečnosti doporučuje provádět často, nejlépe jednou týdně.';
$helptxt['maintenance_rot'] = 'Umožní ti <b>kompletně</b> a <b>nenávratně</b> smazat stará témata. Před mazáním se doporučuje nejprve vytvořit záložní kopii pro případ, že smažeš něco, co jsi nechtěl.<br /><br />Používej tuto funkci velmi opatrně.';

$helptxt['avatar_allow_server_stored'] = 'Umožní tvým členům vybrat si z avatarů uložených na tvém serveru. Ty jsou většinou umístěny ve stejném místě jako SMF, v adresáři &quot;avatars&quot;.<br />Tip: Jestliže v tomto adresáři vytvoříš další podadresáře, můžeš vytvořit &quot;kategorie&quot; avatarů.';
$helptxt['avatar_allow_external_url'] = 'Je-li zapnuto, umožní uživatelům zadat URL svého vlastního avataru. Nevýhodou je, že v některých případech mohou uživatelé použít jako avatar extrémně velké obrázky, což je nežádoucí.<br /><br />Měj na paměti, že členové potřebují zvláštní oprávnění na použití vzdáleného avataru. Zapnutí této možnosti zpřístupní jeho použití pouze uživatelům s potřebnými právy.';
$helptxt['avatar_download_external'] = 'Je-li zapnuta tato volba, stáhne se ze zadaného URL avatar. V případě úspěchu bude avatar považován za funkční.';
$helptxt['avatar_allow_upload'] = 'Tato možnost je velmi podobná volbě &quot;Umožnit uživatelům zvolit si externí avatar&quot;, pouze nabízí lepší kontrolu nad avatary, lepší čas na změnu velikosti, a členové fóra nepotřebují mít prostor na uložení avataru.<br /><br />Nevýhodou je, že uložené avatary mohou zabrat na tvém serveru mnoho místa.';
$helptxt['avatar_download_png'] = 'PNG soubory jsou větší, ale kompresí se neztrácí kvalita. Není-li zatrhnuto, bude namísto toho použita JPEG komprese - nabízí sice menší obrázky, ale ne tak kvalitní.';

$helptxt['disableHostnameLookup'] = 'Vypne vyhledávání jména hostitele, které je na některých serverech velmi pomalé. Tím se však sníží efektivita banování.';

$helptxt['search_weight_frequency'] = 'Pro určení relevance výsledků vyhledávání jsou použity váhy. Změň nastavení vah tak, aby odpovídalo požadavkům tvého fóra. Například fórum serveru se zprávami o současném dění požaduje relativně vysokou hodnotu pro \'stáří poslední vyhovující zprávy\'. Všechny hodnoty jsou relativní (porovnávány vůči sobě) a měla by to být celá kladná čísla.<br /><br />Tento faktor bere v úvahu počet vyhovujících zpráv vydělěný celkovým počtem příspěvků v tématu.';
$helptxt['search_weight_age'] = 'Pro určení relevance výsledků vyhledávání jsou použity váhy. Změň nastavení vah tak, aby odpovídalo požadavkům tvého fóra. Například fórum serveru se zprávami o současném dění požaduje relativně vysokou hodnotu pro \'stáří poslední vyhovující zprávy\'. Všechny hodnoty jsou relativní (porovnávány vůči sobě) a měla by to být celá kladná čísla.<br /><br />Tento faktor zohledňuje stáří posledního vyhovujívcího příspěvku v tématu. Čím je zpráva novější, tím vyšší má skóre.';
$helptxt['search_weight_length'] = 'Pro určení relevance výsledků vyhledávání jsou použity váhy. Změň nastavení vah tak, aby odpovídalo požadavkům tvého fóra. Například fórum serveru se zprávami o současném dění požaduje relativně vysokou hodnotu pro \'stáří poslední vyhovující zprávy\'. Všechny hodnoty jsou relativní (porovnávány vůči sobě) a měla by to být celá kladná čísla.<br /><br />Tento faktor je založen na velikosti tématu. Čím více je v tématu příspěvků, tím vyšší je skóre.';
$helptxt['search_weight_subject'] = 'Pro určení relevance výsledků vyhledávání jsou použity váhy. Změň nastavení vah tak, aby odpovídalo požadavkům tvého fóra. Například fórum serveru se zprávami o současném dění požaduje relativně vysokou hodnotu pro \'stáří poslední vyhovující zprávy\'. Všechny hodnoty jsou relativní (porovnávány vůči sobě) a měla by to být celá kladná čísla.<br /><br />Tento faktor zohledňuje zda je vyhledávané slovo v předmětu/názvu tématu.';
$helptxt['search_weight_first_message'] = 'Pro určení relevance výsledků vyhledávání jsou použity váhy. Změň nastavení vah tak, aby odpovídalo požadavkům tvého fóra. Například fórum serveru se zprávami o současném dění požaduje relativně vysokou hodnotu pro \'stáří poslední vyhovující zprávy\'. Všechny hodnoty jsou relativní (porovnávány vůči sobě) a měla by to být celá kladná čísla.<br /><br />Tento faktor zohledňuje, zda vyhovuje první příspěvek v tématu.';
$helptxt['search_weight_sticky'] = 'Váhové faktory jsou používány k určení relevantnosti výsledků hledání. Změň tyto váhové faktory tak, aby odpovídaly věcem zvláště důležitým pro tvé fórum. Například, fórum o novinkách by mělo přikládat větší váhu \'Stáří posledního nalezeného příspěvku\'. Všechny hodnoty jsou navzájem relativní a měly by být celá kladná čísla.<br /><br />Tato váha kontroluje, zda je téma připíchnuté a zvyšuje jeho skóre při vyhledávání.';
$helptxt['search'] = 'Zde nastav všechny volby vyhledávání.';
$helptxt['search_why_use_index'] = 'Rejstřík vyhledávání může výrazně zplepšit výkon vyhledání tvého fóra. Zejména když se zvyšuje počet zpráv na fóru, vyhledávání bez rejstříku může trvat dlouho a zvyšuje nároky na tvou databázi. Má-li tvé fórum více než 50.000 zpráv, zvaž vytvoření rejstříku vyhledávání pro zajištění nejvyššího možného výkonu fóra.<br /><br />Nezapoměň, že rejstřík vyhledávání může zabrat docela dost místa. Fulltextový rejstřík je součástí MySQL. Je relativně kompaktní (má přibližně stejnou velikost jako tabulka zpráv), ale spousta slov není indexována a tak některé dotazy mohou být velmi pomalé. Uživatelský rejstřík je často větší (podle tvé konfigurace může být až 3 krát větší než tabulka zpráv), ale jeho výkon je lepší než fulltextový a je relativně stabilní.';

$helptxt['see_admin_ip'] = 'Pro usnadnění moderování a vystopování lidí, kteří na fóru dělají neplechu, jsou moderátorům a administrátorům zobrazeny IP adresy. Pamatuj, že IP adresy nemusí být vždy identifikující a IP adresy většiny lidí se periodicky mění.<br /><br />Členům fóra je také dovoleno vidět svou IP adresu';
$helptxt['see_member_ip'] = 'Tvoje IP adresa je zobrazena jenom tobě a moderátorům.  Pamatuj že IP adresy nemusí být vždy identifikující a IP adresy většiny lidí se periodicky mění.<br /><br />Nemůžeš vidět IP adresu ostatních členů fóra a oni nemohou vidět tvou.';

$helptxt['ban_cannot_post'] = 'Po zákazu \'přispívání\' může zakázaný uživatel fórum pouze číst. Uživatel nemůže vytvářet nová témata nebo odpovídat do existujících, posílat soukromé zprávy nebo hlasovat v anketách. Zakaázaný uživatel ovšem stále může číst soukromé zprávy i témata.<br /><br />Takto zakázaným uživatelům se zobrazuje výstražná zpráva.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Nastavení přispívání</b><br />
			Umožňuje změny nastavení týkající se psaní a zobrazování příspěvků. Zde můžeš také povolit kontrolu pravopisu.
		</li><li>
			<b>Bulletin Board Code</b><br />
			Povoluje zobrazení zpráv ve správné úpravě. Umožňuje nastavit, které značky jsou povolené a které ne.
		</li><li>
			<b>Cenzurovaná slova</b>
			Abys udržel jazyk fóra pod kontrolou, můžeš cenzurovat určitá slova. Tato funkce ti umožňuje změnit zakázaná slova na jejich přijatelné verze.
		</li><li>
			<b>Nastavení tématu</b>
			Umožňuje změny nastavení týkající se témat. Počet témat na stránce, jestli jsou povolena připíchnutá témata, počet příspěvků, který musí téma dosáhnout, aby se stalo žhavým, atd.
		</li>
	</ul>';

?>