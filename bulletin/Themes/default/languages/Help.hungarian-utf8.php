<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Ablak bezárása';

$helptxt['manage_boards'] = '	<b>Fórumok szerkesztése</b><br />
	Ebben a menüben fórumokat és a felettük levő kategóriákat lehet létrehozni, átrendezni, törölni.
	Például, ha több témakörrel foglalkozó webhelyed van, amely információkat nyújt pl.
	&quot;sportokról&quot;, &quot;autókról&quot; és &quot;zenéről&quot;, ezek
	lennének a legfelső szintű kategóriák. Ezek alatt alkategóriák vagy fórumok
	lennének hierarchikus struktúrában, mindegyikhez témakörök lennének rendelve. Egy egyszerű struktúra,
	ami ezt megvalósítja: <br />
	<ul>
		<li>
			<b>Sportok</b>
			&nbsp;- &quot;alkategória&quot;
		</li>
		<ul>
			<li>
				<b>Baseball</b>
				&nbsp;- fórum a &quot;Sportok&quot; kategórián belül;
			</li>
			<ul>
				<li>
					<b>Statisztika</b>
					&nbsp;- alfórum a &quot;Baseball&quot; fórumon belül
				</li>
			</ul>
			<li><b>Futball</b>
			&nbsp;- alfórum a &quot;Sport&quot; kategórián belül</li>
		</ul>
	</ul>
	A kategóriákkal a fórumrendszer témakörökre bontható (&quot;autók ,
	sportok&quot;), továbbá az alattuk levő &quot;fórumok&quot; tartalmazzák azokat a témákat,
	ahova a felhasználó írhat. A Trabantok iránt érdeklődő felhasználó
	hozzászólást írhat az &quot;Autók->Trabant&quot; támakörben. A kategóriák alapján
	a felhasználók gyorsan megtalálják a számukra érdekes témákat:
	Egy általános &quot;Bolt&quot; helyett célszerű kialakítani a
	&quot;Hardver&quot; és &quot;Ruházat&quot; boltot. Ez egyszerűsíti
	a keresést.<br />
	Ahogy fent említettük, a fórum egy kulcstémakör egy kategória alatt.
	Ha a Trabant témakör érdekel bennünket, menjünk a &quot;Trabant&quot; témakörre, amely az &quot;Autók&quot; kategóriában van és
	menjünk a &quot;Trabant&quot; fórumra, ahol megtehetjük hozzászólásunkat.<br />
	Ennek a menünek az adminisztrációs funkciói arra szolgálnak, hogy új fórumokat hozzunk létre a kategóriákon belül, átrendezzük őket (tegyük a &quot;Trabant&quot; fórumot a &quot;Mercedes&quot; után), vagy töröljük a fórumot teljes egészében.';

$helptxt['edit_news'] = '<b>Fórumhírek szerkesztése</b><br />
	Lehetővé teszi hírek megjelenítését a főoldalon.
	Bármennyi tartalmi elem elhelyezhető itt (pl., &quot;Ne feletkezzünk el a pénteki konferenciáról&quot;). Minden új elemet célszerű egy külön dobozban elhelyezni. A hírek véletlenszerűen jelennek meg.';

$helptxt['view_members'] = '	<ul>
		<li>
			<b>Összes tag megtekintése</b><br />
			A fórum összes tagjának megtekintése. A tagok neveiről kapunk egy linkelt listát.
			Bármelyik névre kattintva megjelennek a részletek (webhely, kor, stb.),
			adminisztrátorként módosítani lehet ezeket a paramétereket.
			Az adminisztrátornak teljes felügyeleti joga van a tagok felett, beleértve
			azt a képességet, hogy törölje őket a fórumból.<br /><br />
		</li>
		<li>
			<b>Jóváhagyásra vár</b><br />
			Ez a szekció csak akkor jelenik meg, ha az új regisztrációnál adminisztrátori jóváhagyásra
			van szükség. A regisztrálás után a tag csak akkor válik érvényes felhasználóvá, ha a
			regisztrációt az adminisztrátor jóváhagyta. Ez a szekció listázza azokat a tagokat, akiknek
			a regisztrációja adminisztrátori jóváhagyásra vár. Megjelenik e-mail és IP címük. A
			regisztrációt az adminisztrátor elfogadja vagy visszautasítja (törli) a tag neve melletti
			doboz segítségével és a legördülő menüben a megfelelő művelet kiválasztásával a képernyő
			alján. Visszautasítás esetén választható a tag törlése értesítés küldésével vagy anélkül.
			<br /><br />
		</li>
		<li>
			<b>Aktiválásra vár</b><br />
			Ez a szekció csak akkor látható, ha regisztráció aktiválása engedélyezett. A listában
			megjelennek a még nem aktivált regisztrációs kérelmek. A képernyőn kiválasztható az elfogadás,
			a törlés vagy a tagok emlékeztetése a regisztrációra. Ahogy a fentiekben, választható a tag
			értesítése e-mailben a kiválasztott műveletről.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Tagok kitiltása</b><br />
	Az SMF lehetőséget ad felhasználók &quot;kitiltására&quot;, biztonsági okokból kifolyólag (pl. spam). Az adminisztrátor látja a felhasználó IP címét. A kitiltás listában gépeld be az IP címet és a felhasználó a továbbiakban nem küldhet hozzászólást arról a helyről.<br />A kitiltást el lehet végezni e-mail cím alapján is.';

$helptxt['modsettings'] = '<b>Beállítások és opciók szerkesztése</b><br />
	Ebben a szekcióban számos beállítási lehetőség van. A telepített csomagok beállításait is általában itt lehet elvégezni.';

$helptxt['number_format'] = '<b>Számformátum</b><br />
	Itt állíthatod be, hogy a számok milyen formátumban kerüljenek megjelenítésre. Az alapformátum a következő:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Ahol is a \',\' szolgál az ezres csoportok elválasztására, míg a \'.\' szolgál tizedesvesszőként. A nullák száma a kerekítés pontosságát szabályozza.';

$helptxt['time_format'] = '<b>Időformátum</b><br />
	Itt állíthatod be, hogy milyen formátumban jelenjenek meg a dátumok. Sok betűkód van, de alapjában véve nem egy bonyolult dolog.
	Lényegében követi a PHP strftime() függvényét. A leírás lentebb található (részletesebb leírást pedig a <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a> oldal szolgáltat).<br />
	<br />
	Az alábbi karaktereket ismeri fel a rendszer: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - hét napja, rövidítve<br />
	&nbsp;&nbsp;%A - hét napja, teljes<br />
	&nbsp;&nbsp;%b - hónap neve, rövidítve<br />
	&nbsp;&nbsp;%B - hónap neve, teljes<br />
	&nbsp;&nbsp;%d - nap, 2 számjegy ("01" .. "31")<br />
	&nbsp;&nbsp;%D<b>*</b> - azonos %m/%d/%y-val<br />
	&nbsp;&nbsp;%e<b>*</b> - a hónap napja (1 - 31)<br />
	&nbsp;&nbsp;%H - óra, 24-órás formátumban, 2 számjeggyel ("00" .. "23")<br />
	&nbsp;&nbsp;%I - óra, 12-órás formátumban, 2 számjeggyel ("01" .. "12")<br />
	&nbsp;&nbsp;%m - hónap, számmal ("01" .. "12") [van kitöltő szóköz]<br />
	&nbsp;&nbsp;%M - perc [2 számjegy] <br />
	&nbsp;&nbsp;%p - &quot;am&quot; vagy &quot;pm&quot;, annak megfelelően, hogy az adott időpont délelőtt, vagy délután van-e<br />
	&nbsp;&nbsp;%R<b>*</b> - időpont 24 órás formátumban [pl.: 00:00][Itt nincs másodperc!!!]<br />
	&nbsp;&nbsp;%S - másodperc [2 számjegy]<br />
	&nbsp;&nbsp;%T<b>*</b> - idő, azonos a %H:%M:%S-val<br />
	&nbsp;&nbsp;%y - év 2 számjeggyel ("00" .. "99")<br />
	&nbsp;&nbsp;%Y - év, évszázaddal együtt<br />
	&nbsp;&nbsp;%Z - időzóna neve [3 betű]<br />
	&nbsp;&nbsp;%% - a \'%\' karakter<br />
	<br />
	<i>* Nem működik Windows szervereken.</i></span>';

$helptxt['live_news'] = '<b>Élő közlemények</b><br />
	Ebben a dobozban a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> friss bejelentéseit lehet látni.
	Időnként célszerű leellenőrizni, hogy van-e frissítés, új kiadás vagy fontos információ a Simple Machines oldalán.';

$helptxt['registrations'] = '<b>Regisztráció</b><br />
	Ez a szekció tartalmazza az összes funkciót, amely szükséges az új regisztrációk kezeléséhez. Négy alszekciót tartalmaz, amelyek a fórum beállításaitól függően 		jelennek meg. Ezek a következőek:<br /><br />
	<ul>
		<li>
			<b>Új felhasználó regisztrálása</b><br />
			Ezen a képernyőn lehet új tagot regisztrálni. Akkor hasznos, ha a fórumon a regisztráció nem engedélyezett vagy az adminisztrátor tesztelés céljából új tagot hoz létre. Ha az aktiválás is szükséges a regisztráláshoz, akkor a tag levelet kap az aktiválás elvégzésére. Emellett itt lehet új jelszót küldeni e-mailben a megadott címre.<br /><br />
		</li>
		<li>
			<b>Regisztrációs feltételek szerkesztése</b><br />
			Lehetővé teszi egy szöveg megjelenítését, amelyet a felhasználó a regisztrációkor lát. Az alapértelmezett regisztrációs feltételek átszerkeszthetőek.<br /><br />
		</li>
		<li>
			<b>Fenntartott nevek beállítása</b><br />
			Ezen a felületen meg lehet adni azokat a szavakat vagy neveket, amelyek nem használhatóak felhasználónévként.<br /><br />
		</li>
		<li>
			<b>Beállítások</b><br />
			Ez a szekció csak akkor látható, ha a felhasználó rendelkezik a fórum adminisztrálásának a jogával. Itt lehet beállítani a regisztráció módját illetve minden egyéb regisztrációval kapcsolatos lehetőséget.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Moderációs napló</b><br />
	Ebben a szekcióban tudja az adminisztrátor nyomonkövetni a moderátorok moderálási műveleteit. Biztonsági okokból a műveletek bejegyzése 24 órán át megmarad. Az \'objects\' oszlop listázza az összes olyan változót, amely kapcsolatos a művelettel.';
$helptxt['error_log'] = '<b>Hibanapló</b><br />
	A hibanapló nyomon követ minden komoly hibát, amelyet a felhasználók találnak a fórum használata során. Napra leszűkítve listázza ezeket a hibákat, amelyek rendezhetőek a dátum melletti fekete nyíl segítségével. A hibák szűrhetőek a hibastatisztika melletti képre kattintva. Ez lehetővé teszi például a szűrést felhasználók alapján. Ha a szűrő aktív, csak a szűrésnek megfelelő elemek láthatóak.';
$helptxt['theme_settings'] = '<b>Sablon beállítások</b><br />
	Ez a képernyő a sablonhoz kapcsolódó beállítások szerkesztését teszi lehetővé. Ilyen beállítás például a sablon könyvtára és az URL információ, de a sablon kialakításának beállításai is itt jelennek meg. A legtöbb sablonnak számos felhasználó által megváltoztatható opciója van.';
$helptxt['smileys'] = '<b>Grimaszok</b><br />
	Grimaszok és grimasz csomagok kezelése. Ne feledd, hogy ha egy grimaszt beállítasz egy csomagban, akkor az az összes csomagban szerepelni fog, 
	elkerülve az eltérő csomagok eltérő grimaszaiból adódó kellemetlenségeket.<br /><br />

	Továbbá itt szerkesztheted az üzenet ikonokat is, ha azokat bekapcsoltad a beállítások oldalon.';
$helptxt['calendar'] = '<b>Naptár kezelése</b><br />
	Itt módosíthatóak a naptár aktuális beállításai, valamint itt lehet ünnepnapokat létrehozni és törölni.';

$helptxt['serversettings'] = '<b>Szerver beállítások</b><br />
	Itt módosíthatod a fórum konfigurációjának fő értékeit. Ez a szekció tartalmazza az adatbázis és URL beállításokat, ahogy a más,
	fontos konfigurációs beállításokat is, mint a levelezés és gyorsítótárazás. Légy körültekintő, mikor ezeket az értékeket szerkeszted,
	ugyanis egy hibás beállítás a fórum helytelen működéséhez vezethet.';

$helptxt['topicSummaryPosts'] = 'A válasz írása során megjelenített előzmények száma.';
$helptxt['enableAllMessages'] = 'Állítsd be a hozzászólások <em>maximális</em> számát, amelyet egy téma megjeleníthet linkként. Alacsonyabbra állítva, mint az &quot;Üzenetek száma oldalanként téma nézetben&quot; azt jelenti, hogy soha nem jelenik meg, túl magasra állítva pedig a fórum működését lassítja.';
$helptxt['enableStickyTopics'] = 'A kiemelt témák mindig a hagyományos témák előtt jelennek meg a listában, általában fontos üzenetek esetében használatosak. Megváltoztatható természetesen, de alapértelmezés szerint csak a moderátorok és az adminisztrátorok tudnak témákat kiemeltté tenni.';
$helptxt['allow_guestAccess'] = 'A pipa törlésével megakadályozza a vendégeket, hogy bizonyos alapvető műveleteken kívül  - bejelentkezés, regisztrálás, jelszó emlékeztető, stb. - más műveleteket elvégezzenek a fórumban. Ez nem ugyanaz, mint a vendégek letiltása a fórumhoz való hozzáféréstől.';
$helptxt['userLanguage'] = 'Bekapcsolása esetén a felhasználók kiválaszthatják, hogy melyik nyelvi csomagot akarják használni. Nem érinti az alapértelmezett értéket.';
$helptxt['trackStats'] = 'Statisztikák:<br />A legutóbbi hozzászólások és a legnépszerűbb témák listázásának engedélyezése.
		Ezen felül számos egyéb statisztikai adat is - úgymint az egyidőben bejelentkezett tagok legnagyobb száma, új tagok és témák - megjelenítésre kerülnek.<hr />
		Oldalletöltések:<br />Az oldalletöltések számával bővíti a statisztikákat összegző oldalt.';
$helptxt['titlesEnable'] = 'Az egyedi titulus engedélyezése esetén a megfelelő jogosultsággal rendelkező tag saját titulust állíthat be magának, mely a neve alatt kerül megjelenítésre.<br /><i>Például:</i><br />Pistike<br />Menő csávó';
$helptxt['topbottomEnable'] = 'A Fel/Le gombok megjelenítése a lap tetejére/aljára ugráshoz.';
$helptxt['onlineEnable'] = 'Kép segítségével jelzi a tag online/offline állapotát';
$helptxt['todayMod'] = 'A dátum helyett a &quot;Ma&quot; és a &quot;Tegnap&quot; szavak használata.';
$helptxt['enablePreviousNext'] = 'A következő/előző témára mutató link megjelenítése.';
$helptxt['pollMode'] = 'Engedélyezettek-e a szavazások, avagy sem. Kikapcsolás esetén a már meglévő szavazások nem jelennek meg a témalistában. Ha azt akarod, hogy a szavazást tartalmazó témák megjelenjenek a szavazás nélkül, válaszd a &quot;Létező szavazások megjelenítése témákként&quot; lehetőséget.<br /><br />A jogosultságokkal beállíthatod, hogy kik indíthatnak szavazást, kik láthatják, stb. Emlékezz erre, ha a szavazások nem működnek.';
$helptxt['enableVBStyleLogin'] = 'Megjelenít egy egyszerű bejelentkező felületet a fórum összes oldalán.';
$helptxt['enableCompressedOutput'] = 'Tömöríti a kimenő adatokat a sávszélesség megtakarításának érdekében - Zlib megléte szükséges hozzá.';
$helptxt['databaseSession_enable'] = 'Az adatbázis használata a munkamenetek tárolására - optimális a kevésbé terhelt szerverek esetében, de segít az időkifutási esetekben is, és magát a fórumot is gyorsabbá teszi.';
$helptxt['databaseSession_loose'] = 'Bekapcsolásával a fórum által használt sávszélesség csökkeni fog, és a vissza gombra kattintva nem fogja újratölteni az oldalt - a hátránya az, hogy az (új) ikonok nem fognak frissülni, más dolgokkal együtt (amíg nem kattintasz arra az oldalra, ahelyett hogy visszamennél rá.)';
$helptxt['databaseSession_lifetime'] = 'A már nem használt munkamenet élettartama másodpercben megadva. Ha egy munkakemenetet túl hosszú ideig nem használnak, akkor lép fel az &quot;időkifutás&quot; esete. Minden, 2400-nál nagyobb érték javasolt.';
$helptxt['enableErrorLogging'] = 'Minden hibát naplózni fog, mint például egy sikertelen bejelentkezés, így láthatod ha valami nem működik megfelelően.';
$helptxt['allow_disableAnnounce'] = 'Lehetővé teszi a felhasználóknak, hogy ne értesüljenek a bejelentett témákról.';
$helptxt['disallow_sendBody'] = 'Az opció megszünteti a lehetőséget arra, hogy a válaszok és hozzászólások tartalmát megkapják az értesítő e-mailekben.<br /><br />Gyakran a tagok válaszolni fognak az értesítő levélre, ami a legtöbb esetben azt jelenti, hogy a webmester kapja a választ.';
$helptxt['compactTopicPagesEnable'] = 'Az oldalak számának egy részét jeleníti meg.<br /><i>Példa:</i>
		&quot;3&quot; a következőhöz: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; a következőhöz: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Megjeleníti az oldal létrehozásához szükséges időt a fórum alján.';
$helptxt['removeNestedQuotes'] = 'Csak a kérdéses hozzászólás idézetét fogja megjeleníti, a hozzászólásban lévő idézeteket már nem.';
$helptxt['simpleSearch'] = 'Egy egyszerű kereső űrlapot jelenít meg egy linkkel a fejlettebb űrlapra.';
$helptxt['max_image_width'] = 'Beállítható az elküldött képek maximális mérete. A maximálisnál kisebb képeken nem lesz hatással.';
$helptxt['mail_type'] = 'Ez a beállítás lehetővé teszi, hogy válassz a PHP alapértelmezett beállításai közül, vagy felülírod őket SMTP beállításokal. A PHP nem támogatja az SMTP-vel való hitelesítést (amit manapság sok szolgáltató követel), tehát ha azt akarod használni, válaszd az SMTP-t. Kérlek vedd figyelembe, hogy az SMTP lassabb lehet.<br /><br />Nem kell kitöltened az SMTP beállításokat, ha a PHP alapértelmezett beállításait használod.';
$helptxt['attachmentEnable'] = 'A csatolmányok fájlok, melyeket a tagok feltölthetnek és csatolhatnak a hozzászólásaikhoz<br /><br />
		<b>Csatolmány kiterjesztésének ellenőrzése</b>:<br /> Szeretnéd ellenőrizni a fájlok kiterjesztését?<br />
		<b>Engedélyezett kiterjesztések</b>:<br /> Beállíthatod a csatolt fájlok engedélyezett kiterjesztéseit.<br />
		<b>Csatolmányok könyvtár</b>:<br /> Az útvonal a csatolmányok könyvtárához<br />(példa: /home/oldalak/teoldalad/www/forum/attachments)<br />
		<b>Max csatolmányok könyvtár méret</b> (KB-ban):<br /> Meghatározhatod mekkora legyen a csatolmányok könyvtár mérete, az összes fájlt beleszámítva.<br />
		<b>Max csatolmány méret üzenetenként</b> (KB-ban):<br /> Meghatározhatod a hozzászólásonkénti összes csatolmány maximális méretét. Ha ez kisebb mint a csatolmányonkénti korlát, ez lesz a korlát.<br />
		<b>Max méret csatolmányonként</b> (KB-ban):<br /> Meghatározhatod a maximális fájlméretet egy-egy csatolmánynak.<br />
		<b>Max csatolmányok száma üzenetenként</b>:<br /> Meghatározhatod a csatolmányok számát, amit egy felhasználó feltölhet hozzászólásonként.<br />
		<b>Kép csatolmányok megjelenítése képként az üzenet alatt</b>:<br /> Ha a feltöltött fájl kép, a hozzászólás alatt fog megjelenni.<br />
		<b>Képek átméretezése mikor az üzenet alatt jelenik meg</b>:<br /> Ha a fenti opció be van kapcsolva, ez egy különálló (kisebb) csatolmányt fog elmenteni a sávszélesség csökkentése érdekében.<br />
		<b>Bélyegképek maximum szélessége és magassága</b>:<br /> Csak a &quot;Képek átméretezése mikor az üzenet alatt jelenik meg&quot; opcióval működik, a maximális szélesség és magasság amekkorára egy csatolmányt lekicsinyít. Arányosan lesznek átméretezve.';
$helptxt['karmaMode'] = 'A karma egy tag népszerűségét jeleníti meg. A tagok, ha engedélyezett,
		\'megtapsolhatnak\' vagy \'lehurroghatnak\' más tagokat, ami alapján kialakul a népszerűségük. Megváltoztathatod
		a &quot;karmához&quot; szükséges hozzászólások számát, a tapsolások vagy lehurrogások közötti időt, és ha az adminisztrátoroknak
		várniuk kell, ezt az időt is.<br /><br />Hogy egy csoport tagjai megtapsolhatnak-e másokat vagy sem, egy jogosultság
		által van vezérelve. Ha nem működik mindenkinek, ellenőrizd le kétszer is a jogosultságokat.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'A naptár használható születésnapok megjelenítésére, vagy a közösségben történő fontos események megjelenítésére.<br /><br />
		<b>Napok megjelenítése linkként az \'Esemény létrehozásához\'</b>:<br />Lehetővé teszi a tagoknak, hogy a napra kattintva elküldhessenek egy eseményt.<br />
		<b>Hetek számának megjelenítése</b>:<br />Megjeleníti az aktuális hetet.<br />
		<b>Max napok a fórum főoldalán</b>:<br />Ha 7-re van állítva, a jövő hét legtöbb eseménye meg fog jelenni.<br />
		<b>Ünnepek megjelenítése</b>:<br />Mai nap ünnepeinek megjelenítése a naptár sávban a fórum főoldalán.<br />
		<b>Születésnapok megjelenítése</b>:<br />Mai nap szülestésnapjainak megjelenítése a naptár sávban a fórum főoldalán.<br />
		<b>Események megjelenítése</b>:<br />Mai nap eseményeinek megjelenítése a naptár sávban a fórum főoldalán.<br />
		<b>Alapértelmezett fórum az eseményeknek</b>:<br />Mi az alapértelmezett fórum ahova az események kerülnek?<br />
		<b>Üzenetekre nem linkelt események engedélyezése</b>:<br />Lehetővé teszi a tagoknak, hogy anélkül küldhessenek eseményt, hogy linkelniük kéne egy hozzászóláshoz.<br />
		<b>Minimum év</b>:<br />Válaszd ki az &quot;első&quot; évet a naptár listában.<br />
		<b>Maximum év</b>:<br />Válaszd ki az &quot;utolsó&quot; évet a naptár listában.<br />
		<b>Születésnap színe</b>:<br />Válaszd ki a születésnap szövegének színét.<br />
		<b>Esemény színe</b>:<br />Válaszd ki az esemény szövegének színét.<br />
		<b>Ünnep színe</b>:<br />Válaszd ki az ünnep szövegének színét.<br />
		<b>Több napig tartó események engedélyezése</b>:<br />Pipáld be, ha engedélyezni akarod a több napig tartó eseményeket.<br />
		<b>Max napok száma ameddig egy esemény tarthat</b>:<br />Határozd meg a maximális napok számát amíg egy esemény húzódhat.<br /><br />
		Emlékezz, hogy a naptár használata (események létrehozása, megtekintése, stb.) a jogosultság képernyőn beállított jogosultságok szerint van vezérelve.';
$helptxt['localCookies'] = 'Az SMF sütiket használ a bejelentkezési információk tárolására.
	A sütik tárolhatóak globálisan (enszerverem.hu) vagy helyileg (enszerverem.hu/utvonal/a/forumhoz).<br />
	Pipáld be ezt az opciót, ha olyan problémával szembesülsz, hogy a felhasználókat automatikusan kilépteti a rendszer.<hr />
	A globálisan tárolt sütik kevésbé biztonságosak, mikor megosztott webszerveren használjuk őket (például a Tripod).<hr />
	A helyi sütik nem működnek a fórum könyvtárán kívül, tehát ha a fórumod az www.enszerverem.hu/forum könyvtárban van, a www.enszerverem.hu/index.php oldalnak és ehhez hasonlóaknak nem lesz elérésük az azonosító információihoz.
	Különösképp ha SSI.php-t használsz, a globális sütik javasoltak.';
$helptxt['enableBBC'] = 'Az opció bekapcsolásával a tagok használhatnak Bulletin Board kódot (BB) a fórumon keresztül, lehetővé téve ezzel a hozzászólások formázását.';
$helptxt['time_offset'] = 'Nem minden adminisztrátor szeretné ugyanazt az időt használni, mint amit a szerver. Használd ezt az opciót az időkülönbség beállítására (órákban). A negatívok és tizedesek engedélyezettek.';
$helptxt['spamWaitTime'] = 'Beállítható két hozzászólás közötti szükséges idő mennyisége. Használható a "spam" megakadályozásához.';

$helptxt['enablePostHTML'] = 'Ez lehetővé teszi néhány alapvető HTML tag elküldését:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Meghatározhatod hogy az alapértelmezett sablon választható-e, melyiket fogják a vendégek használni,
	valamint más, hasonló opciókat is itt állíthatsz be. Kattints a sablonra annak beállításainak megváltoztatásához.';
$helptxt['theme_install'] = 'Lehetővé teszi új sablonok telepítését. Megteheted ezt egy már létező könyvtárból, egy tömörített fájl feltöltésével, vagy az alapértelmezett sablon lemásolásával.<br /><br />Vedd figyelembe, hogy a tömörített fájlban vagy a könyvtárban kell, hogy legyen egy <tt>theme_info.xml</tt> fájl.';
$helptxt['enableEmbeddedFlash'] = 'Az opció lehetővé teszi a felhasználóknak, hogy közvetlenül a hozzászólásba illeszthessenek Flash videókat. Biztonsági rés lehet, páran már sikeresen ki is aknázták ezt a lehetőséget.
	SAJÁT FELELŐSSÉGRE HASZNÁLD!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Lehetővé teszi a felhasználóknak hogy linkeljenek a <a href="' . $scripturl . '?action=.xml;sa=news">Legutóbbi hírekre</a>
	és hasonló adatokra. Javasolt, hogy korlátozd a legutóbbi hozzászólások/hírek méretét, mert amikor az RSS adatok
	megjelennek néhány kliensben, mint például a Trillian, várhatóan meg lesz csonkítva.';
$helptxt['hotTopicPosts'] = 'A szükséges hozzászólások száma ahhoz, hogy egy téma állapota &quot;aktív&quot; vagy
	&quot;nagyon aktív&quot; legyen.';
$helptxt['globalCookies'] = 'A bejelentkezési sütiket elérhetővé teszi az aldomaineken keresztül. Például, ha...<br />
	Az oldalad címe http://www.simplemachines.hu,<br />
	és a fórum a http://forum.simplemachines.hu címen érhető el,<br />
	ezt az opciót használva lehetőséged lesz a fórum sütijének elérésére az oldaladon. Ne kapcsold be, ha vannak olyan aldomainek (például hacker.simplemachines.hu), amik nem a tiéd.';
$helptxt['securityDisable'] = '<i>Kikapcsolja</i> az adminisztrációs szekciónál való jelszó ellenőrzést. Nem ajánlott!';
$helptxt['securityDisable_why'] = 'Ez az aktuális jelszavad. (ugyanaz amit a bejelentkezéshez használsz.)<br /><br />Ez segít annak biztosításában hogy valamilyen adminisztrációs műveletet akarsz végrehajtani, és hogy azt <strong>te</strong> csinálod.';
$helptxt['emailmembers'] = 'Ebben az üzenetben használhatsz néhány &quot;változót&quot;. Ezek a következők:<br />
	{$board_url} - Az URL a fórumodhoz.<br />
	{$current_time} - A pontos idő.<br />
	{$member.email} - A felhasználó e-mail címe.<br />
	{$member.link} - A felhasználóra vezető link.<br />
	{$member.id} - A felhasználó azonosítója.<br />
	{$member.name} - A felhasználó neve. (megszólításra.)<br />
	{$latest_member.link} - A legutóbb regisztrált tagra vezető link.<br />
	{$latest_member.id} - A legutóbb regisztrált tag azonosítója.<br />
	{$latest_member.name} - A legutóbb regisztrált tag neve.';
$helptxt['attachmentEncryptFilenames'] = 'A csatolmányok fájlnevének titkosítása lehetővé teszi számodra, hogy egynél több csatolmánynak is
	ugyanolyan neve legyen, hogy biztonságosan használhasd a .php fájlokat csatolmányokként, valamint a biztonságot is növeli. Azonban sokkal bonyolultabbá
	teheti az adatbázis újraépítését, ha valami drasztikus történik.';

$helptxt['failed_login_threshold'] = 'Beállítható a sikertelen bejelentkezési kísérletek küszöbértéke, mielőtt a felhasználó a jelszó emlékeztető oldalra lenne irányítva.';
$helptxt['oldTopicDays'] = 'Ha ez az opció be van kapcsolva, egy figyelmeztető üzenet fog megjelenni a felhasználónak, amikor egy olyan témára próbál válaszolni, amibe már a meghatározott időtartam óta nem érkezett új válasz. Állítsd az értéket 0-ra a kikapcsoláshoz.';
$helptxt['edit_wait_time'] = 'Szerkesztésre lévő idő másodpercekben, mielőtt az utolsó szerkesztési idő naplózásra kerülne.';
$helptxt['edit_disable_time'] = 'Percek száma, amíg egy felhasználó módosíthatja hozzászólását. Állítsd 0-ra a kikapcsoláshoz.<br /><br /><i>Megjegyzés: Nincs hatással azon felhasználókra, akiknek van jogosultsága más felhasználók hozzászólásainak módosítására.</i>';
$helptxt['enableSpellChecking'] = 'Helyesírás ellenőrzés bekapcsolása. A szerveren a pspell könyvtár telepítve KELL hogy legyen és a PHP úgy kell legyen konfigurálva, hogy használja a pspell könyvtárat. A szervered úgy tűnik ' . (function_exists('pspell_new') ? 'ÍGY' : 'NEM ÍGY') . ' van beállítva.';
$helptxt['lastActive'] = 'Állítsd be hány percet mutasson az aktív felhasználók az elmúlt X percben résznél a fórum főoldalán. Az alapértelmezett 15 perc.';

$helptxt['autoOptDatabase'] = 'Ez az opció optimalizálja az adatbázist a beállított időszak szerint. Állítsd 1-re a napi optimalizáláshoz. Továbbá meghatározhatod a maximális online felhasználók számát, így a szerver nem lesz túlterhelve.';
$helptxt['autoFixDatabase'] = 'Automatikusan javítja a hibás táblákat. Hasznos lehet, mivel az egyetlen mód a helyreállításra a tábla JAVÍTÁSA, és így a fórum nem fog leállni, míg észleled a problémát. E-mail értesítést küld, ha ilyen történik.';

$helptxt['enableParticipation'] = 'Egy kis ikont jelenít meg azoknál a témáknál, amelyikhez a felhasználó hozzászólt.';

$helptxt['db_persist'] = 'Aktívan tartja a kapcsolatot a teljesítmény növelésének érdekében. Ha nem dedikált szerveren van, akkor ez problémákat okozhat a szolgáltatóddal.';

$helptxt['queryless_urls'] = 'Megváltoztatja kicsit az URLek formáját, így a keresőmotorok jobban fogják szeretni. Így fognak kinézni: index.php/topic,1.html.<br /><br />Ez a tulajdonság ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'nem') . ' működik a szervereden.';
$helptxt['countChildPosts'] = 'Az opció bepipálásával egy fórum alfórumaiban lévő hozzászólások és témák száma hozzáadódik a főoldalon megjelenítetthez.<br /><br />Ez érezhetően lelassítja a műveleteket, de ha a szülő fórumnak nincsenek hozzászólásai, nem \'0\' fog megjelenni.';
$helptxt['fixLongWords'] = 'Egy bizonyos hosszúságnál hosszabb szavakat darabokra tördeli, így azok nem fogják a fórum kialakítását megtörni. Az opció 40 alattira  való állítása nem javasolt.';

$helptxt['who_enabled'] = 'Az opcióval be- és kikapcsolható, hogy a felhasználók láthatják-e ki böngészi és fórumot és mit csinál.';

$helptxt['recycle_enable'] = '&quot;Újrahasznosítja&quot; a törölt témákat és hozzászólásokat a meghatározott fórumban.';

$helptxt['enableReportPM'] = 'Ez az opció lehetővé a felhasználóknak, hogy jelentsék a privát üzeneteket az adminisztrátori csoportnak. Hasznos lehet a visszaélések nyomonkövetésére.';
$helptxt['max_pm_recipients'] = 'Ez az opció lehetővé teszi meghatározni a privát üzenetekben a címzettek maximális számát. Használható a PÜ rendszerrel való visszaélés elkerüléséhez. Vedd figyelembe, hogy a hírlevelek küldésére jogosultak kivételt képeznek. Állítsd az értéket nullára, ha nem akarsz korlátozást.';
$helptxt['pm_posts_verification'] = 'Ennek bekapcsolásával a felhasználóknak be kell majd írniuk egy kódot, mielőtt elküldhetnék a privát üzenetüket. Csak a beállított hozzászólás szám alatti felhasználóknak kell beírnia - ez remélhetőleg segít az automatizált spammelő scriptek elleni harcban.';
$helptxt['pm_posts_per_hour'] = 'Lekorlátozza az egy felhasználó által óránként küldhető privát üzenetek számát. Nincs hatással az adminokra vagy moderátorokra.';

$helptxt['default_personalText'] = 'Beállítja a felhasználó alapértelmezett &quot;személyes szövegét.&quot;';

$helptxt['modlog_enabled'] = 'Naplóz minden moderátori műveletet.';

$helptxt['guest_hideContacts'] = 'Az opciót bekapcsolva a vendégek számára nem fognak megjelenni a felhasználók e-mail címei és kapcsolati információi.';

$helptxt['registration_method'] = 'Meghatározza a fórumhoz csatlakozni kívánó személyek regisztrációjának módját. A következők közül választhatsz:<br /><br />
	<ul>
		<li>
			<b>Regisztráció kikapcsolva:</b><br />
				Kikapcsolja a regisztrációs folyamatot, ami azt jelenti hogy egy új tag se tud csatlakozni a fórumodhoz.<br />
		</li><li>
			<b>Azonnali regisztráció</b><br />
				Az új tagok azonnal bejelentkezhetnek és küldhetnek üzenetet a fórumon való regisztrálás után.<br />
		</li><li>
			<b>Felhasználói aktiválás</b><br />
				Az opció bekapcsolásakor bármely tag aki regisztrál a fórumon, kapni fog e-mailben egy aktivációs linket, amire előbb rá kell kattintania, hogy teljesértékű taggá váljon.<br />
		</li><li>
			<b>Felhasználó megerősítése</b><br />
				Az opció bekapcsolásakor minden új tag aki regisztrál a fórumon, meg kell hogy legyen erősítve az admin által, hogy teljesértékű taggá váljon.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Az opció bekapcsolásakor minden olyan felhasználó, aki megváltoztatta e-mail címét, újból kell hogy aktiválja az azonosítóját';
$helptxt['send_welcomeEmail'] = 'Az opció bekapcsolásakor minden új felhasználó kapni fog egy e-mailt, melyben üdvözlöd őket a közösségben';
$helptxt['password_strength'] = 'Ez a beállítás meghatározza a felhasználók által megadott jelszavak kötelező erősségét. Minél nehezebb a jelszó, annál kisebb az esélye hogy kompromisszum lépne fel a felhasználók azonosítójával.
	A lehetséges opciók:
	<ul>
		<li><b>Alacsony:</b> A jelszó legalább 4 karakter hosszú kell, hogy legyen.</li>
		<li><b>Közepes:</b> A jelszó legalább 8 karakter hosszú kell, hogy legyen és nem tartalmazhatja a felhasználó nevét vagy e-mail címét.</li>
		<li><b>Magas:</b> Ugyanaz mint a közepes, kivéve hogy a jelszó kis- és nagybetűk kombinációját, valamint legalább egy számot kell, hogy tartalmazzon.</li>
	</ul>';

$helptxt['coppaAge'] = 'A mezőben megadott érték fogja meghatározni a minimum kort, ahány évesnek az új tagoknak lenniük kell, hogy azonnali hozzáférésük legyen a fórumhoz.
	A regisztráció során meg kell majd erősíteniük, hogy ezen kor felett vannak-e, és ha nem, akkor a jelentkezésük vagy vissza lesz utasítva vagy szülői megerősítésre várakózoként lesz beállítva - a kiválasztott megkötés típusától függően.
	Ha a beállítás értéke 0, akkor minden más kor megkötési beállítás mellőzve lesz.';
$helptxt['coppaType'] = 'Ha a kor megkötés be van kapcsolva, akkor ez a beállítás fogja meghatározni mi fog történni ha egy, a minimum kor alatti felhasználó regisztrálni próbál. Két lehetőség van:
	<ul>
		<li>
			<b>Regisztráció visszautasítása</b><br />
				Minden, a minimum kor alá eső új tag regisztrációja azonnal visszautasításra kerül.<br />
		</li><li>
			<b>Szülői/gondozói beleegyezés</b><br />
				Minden új tag aki regisztrálni próbál és a minimum kor alatt van, annak azonosítója megerősítésre váróként lesz megjelölve, majd kapni fog egy űrlapot ahol a szüleinek engedélyt kell adniuk, hogy a fórum teljeskörű tagjává váljon.
				Megkapják továbbá a beállítások oldalon megadott kapcsolati adatokat is, így elküldhetik az űrlapot az adminisztrátornak e-mailben vagy faxon.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'A kapcsolati mezők szükségesek ahhoz, hogy az engedélyt adó űrlapokat a fórum adminisztrátorának el lehessen juttatni. Ezek az adatok azok számára jelennek meg, akiknél szülői/gondozói beleegyezés szükséges. Legalább egy postai cím vagy fax szám megadása szükséges.';

$helptxt['allow_hideOnline'] = 'Ezt az opciót bekapcsolva minden felhasználónak lehetősége lesz elrejteni online állapotát más felhasználók elől (az adminisztrátorokat kivéve). Ha ki van kapcsolva, akkor csak a fórumot moderálók tudják elrejteni jelenlétüket. Vedd figyelembe hogy az opció kikapcsolása nem fogja megváltoztatni egy felhasználó állapotát sem - csak megakadályozza, hogy a jövőben elrejthessék magukat.';
$helptxt['allow_hideEmail'] = 'Ezt az opciót bekapcsolva a felhasználók kiválaszthatják, hogy elrejtik-e e-mail címüket mások elől. Az adminisztrátorok továbbra is láthatják mindenki e-mail címét.';

$helptxt['latest_support'] = 'Ez a panel a szerver konfigurációdnak megfelelően megjeleníti a leggyakoribb problémákat és kérdéseket. Ne aggódj, ez az információ nem kerül naplózásra.<br /><br />Ha azt látod, &quot;Támogatási információ lekérése...&quot;, akkor a számítógéped nem tudott csatlakozni a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> oldalhoz.';
$helptxt['latest_packages'] = 'Itt láthatsz pár népszerű, valamint néhány véletlenszerűen kiválasztott csomagot, melyeket gyorsan és egyszerűen telepíthetsz.<br /><br />Ha ez a szekció nem jelenik meg, akkor a számítógéped nem tudott csatlakozni a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> oldalhoz.';
$helptxt['latest_themes'] = 'Ez a rész a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> oldalán található legutóbbi és legnépszerűbb sablonok közül jelenít meg párat. Ha a számítógéped nem találja a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> címet, nem fog helyesen megjelenni.';

$helptxt['secret_why_blank'] = 'A biztonságod érdekében a kérdésre adott válasz (ahogy a jelszavad is) egy olyan módon van titkosítva, ami alapján az SMF csak azt tudja megmondani hogy az helyes-e, így soha nem tudja megmondani (vagy bárki más, fontos!) hogy mi a válaszod vagy jelszavad.';
$helptxt['moderator_why_missing'] = 'Mivel a moderáció fórumonként állítható, a tagokat moderátorrá kell tenned a <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">fórum kezelő felületen</a>.';

$helptxt['permissions'] = 'A jogosultságokkal engedélyezheted vagy tagadhatod meg a csoportoktól, hogy bizonyos műveleteket elvégezhessenek.<br /><br />Egyszerre több fórumot is módosíthatsz a jelölőnégyzetek segítségével, vagy megtekintheted egy csoport jogosultságait a \'Módosítás\' linkre kattintva.';
$helptxt['permissions_board'] = 'Ha egy fórum \'Globálisra\' van állítva, az azt jelenti hogy a fórumnak nem lesz semmilyen speciális jogosultsága. A \'Helyi\' azt jelenti, hogy saját jogosultságai vannak - a globális fórumoktól különbözőek. Ez lehetővé teszi olyan fórumok létrehozását, amiben több vagy kevesebb jogosultság engedélyezett mint egy másikban, anélkül hogy minden egyes fórumra be kéne őket állítanod.';
$helptxt['permissions_quickgroups'] = 'Lehetővé teszik az &quot;alapértelmezett;quot; jogosultsági sablonokat használni - a standard jelentése \'semmi különös\', a megkötött jelentése \'mint egy vendég\', a moderátor jelentése \'ami egy moderátornak van\', és végül a \'karbantartó\' jelentése hogy jogosultságai nagyon közelítenek egy adminisztrátoréhoz.';
$helptxt['permissions_deny'] = 'A jogosultságok megtagadása hasznos lehet, amikor bizonyos felhasználóktól jogosultságot akarsz elvenni. Létrehozhatsz egy felhasználói csoportot \'megtagadás\' jogosultsággal azon felhasználók számára, akiktől meg akarsz tagadni egy jogosultságot.<br /><br />Körültekintéssel használd, egy megtagadott jogosultság megtagadott marad, nem számít milyen más felhasználói csoportokban van a tag.';
$helptxt['permissions_postgroups'] = 'A jogosultságokat bekapcsolva a hozzászólások számán alapuló csoportoknak lehetővé teszik jogosultságok hozzárendelését olyan tagokhoz, akik egy bizonyos számú üzenetet elküldtek. A hozzászólások számán alapuló csoportok jogosultságai az állandó felhasználói csoportok jogosultságaihoz lesznek <em>hozzáadva</em>.';
$helptxt['permissions_by_board'] = 'Az opciót bekapcsolva lehetőséged nyílík minden egyes fórumon minden egyes felhasználói csoportnak különböző jogosultágokat beállítani. Alapértelmezésként egy fórum a globális jogosultságokat használja, de ezt az opciót bekapcsolva átválthatsz egy fórumot helyi jogosultságú beállításokra. Ezzel nagyon kifinomultan kezelhetőek a jogosultságok.';
$helptxt['membergroup_guests'] = 'A Vendégek felhasználói csoport minden olyan felhasználó, aki nincs bejelentkezve.';
$helptxt['membergroup_regular_members'] = 'Az Állandó tagok az összes olyan tag aki bejelentkezett, de nincs hozzárendelve elsődleges felhasználói csoport.';
$helptxt['membergroup_administrator'] = 'Az adminisztrátor bármit megtehet és minden fórumot lát. Az adminisztrátornak nincsenek jogosultsági beállításai.';
$helptxt['membergroup_moderator'] = 'A moderátor felhasználói csoport egy speciális csoport. A csoporthoz rendelt jogosultságok és beállítások alkalmazódnak a moderátorokra, de csak azokon <em>a fórumokon ahol moderálnak</em>. Ezeken a fórumokon kívül ugyanolyanok, mint bármelyik másik tag.';
$helptxt['membergroups'] = 'Az SMF-ben két típus különböztethető meg, aminek a felhasználók tagjai lehetnek. Ezek a következők:
	<ul>
		<li><b>Állandó csoportok:</b> Az állandó csoport egy olyan csoport, melybe a tagok nem automatikusan kerülnek be. Egy tag hozzárendeléséhez egyszerűen menj a profiljába és kattints az &quot;Azonosító beállításai&quot; linkre. Itt bármennyi állandó csoporthoz hozzárendelheted a felhasználót.</li>
		<li><b>Hozzászólások számán alapuló csoportok:</b> Az állandó csoportokkal ellentétben a hozászólások számán alapuló csoportokhoz nem lehet hozzárendelni senkit. Helyette a tagok automatikusan hozzárendelődnek a hozzászólások számán alapuló csoporthoz, amint elérik a csoporthoz szükséges minimális hozzászólások számát.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Ezeket az eseményeket a nevük mellett lévő piros csillagra (*) kattintva szerkesztheted.';

$helptxt['maintenance_general'] = 'Itt optimalizálhatod az összes táblát (kisebbé és gyorsabbá teszi azokat!), megbizonyosodhatsz arról hogy a legújabb verzió van-e meg, megkeresheted a hibákat, újraszámláltathatod a statisztikát, és ürítheted a naplókat.<br /><br />Az utolsó kettő kerülendő, hacsak valami rossz, de nem bánt semmit.';
$helptxt['maintenance_backup'] = 'Lehetővé teszi egy másolat készítését a fórumban lévő összes hozzászólásról, beállításról, tagról, és egyéb információkról.<br /><br />Javasolt ezt gyakran elvégezni, esetleg hetente, a biztonság érdekében.';
$helptxt['maintenance_rot'] = 'Lehetővé teszi hogy <b>teljesen</b> és <b>végérvényesen</b> eltávolítsd a régi táblákat. Javasolt először egy biztonsági másolat készítése, arra az esetre ha valami olyasmi is törlődne, amit nem szerettél volna.<br /><br />Körültekintéssel használd ezt az opciót.';

$helptxt['avatar_allow_server_stored'] = 'Lehetővé teszi a tagoknak hogy egy szerveren tárolt avatart válasszanak. Ugyanott találhatóak mint az SMF, az avatars könyvtárban.<br />Ötletként, ha mappákat hozol létre abban a könyvtárban, &quot;kategorizálhatod&quot; az avatarokat.';
$helptxt['avatar_allow_external_url'] = 'Ezt bekapcsolva a tagok beírhatnak egy címet a saját avatarjukhoz. Ennek hátránya, hogy néhány esetben olyan avatarokat használhatnak, amik túlságosan nagyok vagy portré képek, amiket te nem szívesen látnál a fórumodon.';
$helptxt['avatar_download_external'] = 'Ezt az opciót bekapcsolva a felhasználó által megadott címről az avatar letöltésre kerül. Siker esetén az avatar feltölthető avatarként lesz kezelve.';
$helptxt['avatar_allow_upload'] = 'Az opció hasonló a &quot;Külső avatarokhoz&quot;, kivéve hogy itt nagyobb vezérlésed van az avatarok felett, átméretezheted őket, valamint így a tagjaidnak nem kell sehová se feltölteni az avatarokat.<br /><br />Ennek hátránya hogy sok helyet elfoglalhat a szervereden.';
$helptxt['avatar_download_png'] = 'A PNG fájlok nagyobbak, de jobb minőségű tömörítést eredményeznek. Ha ez nincs bepipálva, a JPEG lesz helyette használva - ami gyakran kisebb méretű, de a minősége is rosszabb.';

$helptxt['disableHostnameLookup'] = 'Kikapcsolja a kiszolgálónevek felkeresését, ami néhány szerveren nagyon lassú. Vedd figyelembe, hogy így a kitiltás kevésbé lesz hatékony.';

$helptxt['search_weight_frequency'] = 'A keresési súlyozások egy keresési eredmény tárgyhoz tartozását határozzák meg. Ezen súlyozási faktorok módosításával állíthatod be azokat a dolgokat, amik különösen fontosak a fórumodon. Például egy hírportál fóruma egy relatíve nagy értéket használhat az \'utolsó egyező üzenet korára\' faktornál. Minden érték relatív kapcsolatban van a másikkal és csak pozitív egészek lehetnek.<br /><br />Ez a faktor az egyező üzenetek számát elosztja egy témában létező összes üzenet számával.';
$helptxt['search_weight_age'] = 'A keresési súlyozások egy keresési eredmény tárgyhoz tartozását határozzák meg. Ezen súlyozási faktorok módosításával állíthatod be azokat a dolgokat, amik különösen fontosak a fórumodon. Például egy hírportál fóruma egy relatíve nagy értéket használhat az \'utolsó egyező üzenet korára\' faktornál. Minden érték relatív kapcsolatban van a másikkal és csak pozitív egészek lehetnek.<br /><br />Ez a faktor egy témában lévő egyező üzenet korát osztályozza. Minél újabb egy üzenet, annál nagyobb értékelést kap.';
$helptxt['search_weight_length'] = 'A keresési súlyozások egy keresési eredmény tárgyhoz tartozását határozzák meg. Ezen súlyozási faktorok módosításával állíthatod be azokat a dolgokat, amik különösen fontosak a fórumodon. Például egy hírportál fóruma egy relatíve nagy értéket használhat az \'utolsó egyező üzenet korára\' faktornál. Minden érték relatív kapcsolatban van a másikkal és csak pozitív egészek lehetnek.<br /><br />Ez a faktor a téma méretén alapul. Minél több üzenet van a témában, annál nagyobb értéket ér el.';
$helptxt['search_weight_subject'] = 'A keresési súlyozások egy keresési eredmény tárgyhoz tartozását határozzák meg. Ezen súlyozási faktorok módosításával állíthatod be azokat a dolgokat, amik különösen fontosak a fórumodon. Például egy hírportál fóruma egy relatíve nagy értéket használhat az \'utolsó egyező üzenet korára\' faktornál. Minden érték relatív kapcsolatban van a másikkal és csak pozitív egészek lehetnek.<br /><br />Ez a faktor ellenőrzi hogy a keresett kifejezés megtalálható-e a téma tárgyában.';
$helptxt['search_weight_first_message'] = 'A keresési súlyozások egy keresési eredmény tárgyhoz tartozását határozzák meg. Ezen súlyozási faktorok módosításával állíthatod be azokat a dolgokat, amik különösen fontosak a fórumodon. Például egy hírportál fóruma egy relatíve nagy értéket használhat az \'utolsó egyező üzenet korára\' faktornál. Minden érték relatív kapcsolatban van a másikkal és csak pozitív egészek lehetnek.<br /><br />Ez a faktor ellenőrzi hogy található-e egyezés a téma első üzenetében.';
$helptxt['search_weight_sticky'] = 'A keresési súlyozások egy keresési eredmény tárgyhoz tartozását határozzák meg. Ezen súlyozási faktorok módosításával állíthatod be azokat a dolgokat, amik különösen fontosak a fórumodon. Például egy hírportál fóruma egy relatíve nagy értéket használhat az \'utolsó egyező üzenet korára\' faktornál. Minden érték relatív kapcsolatban van a másikkal és csak pozitív egészek lehetnek.<br /><br />Ez a faktor ellenőrzi hogy a téma kiemelt-e és növeli a tárgyhoz tartozás értékét, ha az.';
$helptxt['search'] = 'Minden, a kereséséhez kapcsolódó beállítás itt módosítható.';
$helptxt['search_why_use_index'] = 'Egy keresőindex nagyban növelheti a fórumodon való keresések teljesítményét. Különösképp mikor az üzenetek száma a fórumodon egyre nagyobbra nő, az index nélkül való keresés hosszú időt vehet igénybe és jobban terheli az adatbázist. Ha a fórumodon több, mint 50.000 üzenet található, megfontolandó a keresőindex létrehozása a legjobb teljesítmény biztosításához.<br /><br />Vedd figyelembe, hogy egy keresőindex sok helyet emészthet fel. Egy fulltext index a MySQL egyik beépített indexe. Viszonylag kicsi (megközelítőleg ugyanakkora, mint az üzenetek táblája), de sok szó nincs indexelve, és néhány keresésben nagyon lassúnak bizonyulhat. Az egyedi index gyakran nagyobb (a konfigurációdtól függően 3-szor akkora is lehet, mint az üzenetek táblája), de a teljesítménye a fulltext-nél jobb és viszonylag stabil.';

$helptxt['see_admin_ip'] = 'Az IP címek az adminisztrátorok és moderátorok számára jelennek meg a könnyebb moderálás és nyomon követés érdekében. Ne feledd, hogy az IP címek nem mindig azonosítanak be, és legtöbbször az IP cím időszakosan változik.<br /><br />A felhasználók továbbá csak a saját IP címüket láthatják.';
$helptxt['see_member_ip'] = 'Az IP címed csak neked és a moderátoroknak jelenik meg. Ne feledd, hogy ez az információ nem azonosít,és a legtöbb IP időszakosan változik.<br /><br />Nem láthatod más tagok IP címét, és ők sem láthatják a tiéd.';

$helptxt['ban_cannot_post'] = 'A \'nem üzenhet\' megkötés a kitiltott felhasználó számára a fórumot csak olvasható módba váltja. A felhasználó nem hozhat létre új témákat, vagy válaszolhat már létezőkre, nem küldhet privát üzeneteket és nem vehet részt a szavazásokon. Habár a kitiltott felhasználó továbbra is tudja olvasni a privát üzeneteket és témákat.<br /><br />Egy figyelmeztető üzenet jelenik meg azoknak a tagoknak, akik ilyen módon vannak kitiltva.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Üzenet beállítások</b><br />
			Módosítja az üzenetek elküldéséhez kapcsolódó beállításokat és az üzenetek megjelenítési módját. Továbbá itt tudod bekapcsolni a helyesírás ellenörzőt is.
		</li><li>
			<b>Bulletin Board kód</b><br />
			Lehetővé teszi a BB kódok használatát a fórum üzenetekben. Beállítható, hogy mely kódok engedélyezettek és melyek nem.
		</li><li>
			<b>Cenzúrált szavak</b>
			A tartalom ellenőrzése érdekében bizonyos szavakat cenzúrázni lehet. Ez a funkció lehetővé teszi a tiltott szavak lecserélését másra.
		</li><li>
			<b>Téma beállítások</b>
			Módosítja a témákhoz kapcsolódó beállításokat. Az oldalankénti témák száma, lehetnek-e kiemelt témák vagy sem, a szükséges hozzászólások száma hogy egy téma aktív legyen, stb.
		</li>
	</ul>';

?>