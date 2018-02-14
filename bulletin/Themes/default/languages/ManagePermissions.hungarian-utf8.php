<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Jogosultságok kezelése';
$txt['permissions_modify'] = 'Módosítás';
$txt['permissions_access'] = 'Hozzáférés';
$txt['permissions_allowed'] = 'Engedélyezve';
$txt['permissions_denied'] = 'Megtagadva';

$txt['permissions_switch'] = 'Csere';
$txt['permissions_global'] = 'globálisra';
$txt['permissions_local'] = 'helyire';

$txt['permissions_groups'] = 'Jogosultságok felhasználói csoport szerint';
$txt['permissions_all'] = 'összes';
$txt['permissions_none'] = 'egyik sem';
$txt['permissions_set_permissions'] = 'Jogosultságok beállítása';

$txt['permissions_with_selection'] = 'A kiválasztással';
$txt['permissions_apply_pre_defined'] = 'Előre definiált jogosultsági profil alkalmazása';
$txt['permissions_select_pre_defined'] = 'Válassz profilt';
$txt['permissions_copy_from_board'] = 'Jogosultságok másolása a fórumról';
$txt['permissions_select_board'] = 'Válassz egy fórumot';
$txt['permissions_like_group'] = 'Ugyanazok a jogosultságok, mint a következő csoportnak';
$txt['permissions_select_membergroup'] = 'Válassz egy csoportot';
$txt['permissions_add'] = 'Jogosultság hozzáadása';
$txt['permissions_remove'] = 'Jogosultság törlése';
$txt['permissions_deny'] = 'Jogosultság megtagadása';
$txt['permissions_select_permission'] = 'Válassz egy jogosultságot';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Csak egy műveletet választhatsz ki a jogosultságok módosítására';
$txt['permissions_no_action'] = 'Nincs kiválasztva művelet';
$txt['permissions_deny_dangerous'] = 'Egy vagy több jogosultságot készülsz megtagadni.\\nEz veszélyes lehet és váratlan eredményeket okozhat, ha nem vagy megbizonyosodva arról, hogy senki sincs \\"véletlenül\\" abban a csoportban vagy csoportokban, melynek megtagadod a jogosultságait.\\n\\nBiztos vagy benne, hogy folytatod?';

$txt['permissions_boards'] = 'Jogosultságok fórum szerint';

$txt['permissions_modify_group'] = 'Csoport módosítása';
$txt['permissions_general'] = 'Általános jogosultságok';
$txt['permissions_board'] = 'Globális fórum jogosultságok';
$txt['permissions_commit'] = 'Módosítások mentése';
$txt['permissions_modify_local'] = 'Helyi jogosultságok módosítása';
$txt['permissions_on'] = 'a fórumon';
$txt['permissions_local_for'] = 'Helyi jogosultságok a csoportnak';
$txt['permissions_option_on'] = 'E';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'M';
$txt['permissions_option_desc'] = 'Minden jogosultságnál választhatsz az \'Engedélyez\' (E), \'Nem engedélyez\' (X), vagy <span style="color: red;">\'Megtagad\' (M)</span> opciók közül.<br /><br />Ne feledd, hogyha megtagadsz egy jogosultságot, bármely tag - még a moderátor vagy bárki más is - aki abban a csoportban van, szintén tagadva lesz.<br />Ebből az okból kifolyólag csak akkor használd a megtagadást, ha <b>szükséges</b>. A Nem engedélyez szintén tiltja a jogosultságot, hacsak nem lett külön megadva a tagnak.';

$txt['permissiongroup_general'] = 'Általános';
$txt['permissionname_view_stats'] = 'Fórum statisztikák megtekintése';
$txt['permissionhelp_view_stats'] = 'A fórum statisztikák egy oldal, mely összegzi a fórum összes statisztikáját, például hogy hány tag regisztrált, a napi hozzászólások száma és pár top 10 statisztika. Ezt a jogosultságot bekapcsolva a fórum főoldalának alján megjelenik egy link (\'[További adatok]\').';
$txt['permissionname_view_mlist'] = 'Taglista megtekintése';
$txt['permissionhelp_view_mlist'] = 'A taglista mejeleníti a fórumon regisztrált összes tagot. A lista rendezhető és kereshető. A taglista linkelve van a főoldalról és a statisztikai oldalról is a felhasználók számára kattintva.';
$txt['permissionname_who_view'] = 'Ki online megtekintése';
$txt['permissionhelp_who_view'] = 'A ki online megjeleníti az összes olyan tagot, aki jelenleg elérhető és azt, hogy mit csinálnak abban a pillanatban. Ez a jogosultság csak akkor működik, ha bekapcsoltad a \'Beállítások és opciók\' menüben is. A \'Ki online\' képernyőt elérheted a fórum főoldalán lévő \'Online felhasználók\' linkre kattintva. Még ha ez meg is van tagadva, a tagok továbbra is láthatják hogy ki online, csak azt nem hogy hol vannak.';
$txt['permissionname_search_posts'] = 'Üzenetek és témák keresése';
$txt['permissionhelp_search_posts'] = 'A keresési jogosultság lehetővé teszi a felhasználó számára, hogy keressen az összes, számára elérhető fórumban. Mikor a keresés jogosultság be van kapcsolva, egy \'Keresés\' gomb fog megjelenni a fórum gombsorában.';
$txt['permissionname_karma_edit'] = 'Mások karmájának módosítása';
$txt['permissionhelp_karma_edit'] = 'A karma egy olyan lehetőség, mely a tag népszerűségét mutatja. Annak érdekében hogy ezt használhasd, be kell kapcsolnod a \'Beállítások és opciók\' menüben. Ez a jogosultság engedélyezni fogja a csoportnak hogy szavazzon. A jogosultságnak nincs hatása a vendégeken.';

$txt['permissiongroup_pm'] = 'Privát üzenetek';
$txt['permissionname_pm_read'] = 'Privát üzenetek olvasása';
$txt['permissionhelp_pm_read'] = 'Ez a jogosultság engedélyezi a felhasználók számára, hogy elérjék privát üzeneteiket és elolvassák őket. A jogosultság nélkül a felhasználó képtelen privát üzenetek küldésére.';
$txt['permissionname_pm_send'] = 'Privát üzenetek küldése';
$txt['permissionhelp_pm_send'] = 'Privát üzenetek küldése más regisztrált felhasználóknak. Szükségelteti a \'Privát üzenetek olvasása\' jogosultságot.';

$txt['permissiongroup_calendar'] = 'Naptár';
$txt['permissionname_calendar_view'] = 'Naptár megtekintése';
$txt['permissionhelp_calendar_view'] = 'A naptár megjeleníti minden hónapban a születésnapokat, eseményeket és ünnepeket. Ez a jogosultság engedélyt ad a naptár eléréséhez. Amikor ez a jogosultság be van kapcsolva, egy gomb fog hozzáadódni a felső gombsorhoz és a fórum főoldalának alján megjelennek a jelenlegi és elkövetkezendő születésnapok, események és ünnepek. A naptárt be kell kapcsolni a \'Beállítások és opciók szerkesztése\' menüben.';
$txt['permissionname_calendar_post'] = 'Naptári események létrehozása';
$txt['permissionhelp_calendar_post'] = 'Egy esemény egy téma, ami bizonyos dátumra vagy dátumtávra van linkelve. Egy esemény csak akkor hozható létre, ha a felhasználó aki létrehozza az eseményt, nyithat témát.';
$txt['permissionname_calendar_edit'] = 'Naptári események szerkesztése';
$txt['permissionhelp_calendar_edit'] = 'Egy esemény egy téma, ami bizonyos dátumra vagy dátumtávra van linkelve. Az esemény naptár nézetben az esemény melleti piros csillagra (*) kattintva szerkeszthető. Annak érdekében, hogy szerkeszthessen egy eseményt, a felhasználónak meg kellenek hogy legyenek a megfelelő jogosultságai arra, hogy szerkeszthesse az eseményre linkelt téma első üzenetét.';
$txt['permissionname_calendar_edit_own'] = 'Saját események';
$txt['permissionname_calendar_edit_any'] = 'Bármely esemény';

$txt['permissiongroup_maintenance'] = 'Fórum adminisztráció';
$txt['permissionname_admin_forum'] = 'A fórum és adatbázis adminisztrálása';
$txt['permissionhelp_admin_forum'] = 'A jogosultság a következőket engedélyezi:<ul><li>fórum, adatbázis és sablon beállítások megváltoztatása</li><li>csomagok kezelése</li><li>a fórum és adatbázis karbantartó eszközök használata</li><li>hiba és moderátori naplók megtekintése</li></ul> Óvatosan használd ezt a jogosultságot, mivel nagyon erőteljes.';
$txt['permissionname_manage_boards'] = 'Fórumok és kategóriák kezelése';
$txt['permissionhelp_manage_boards'] = 'Ez a jogosultság engedélyezi a fórumok és kategóriák létrehozását, szerkesztését és törlését.';
$txt['permissionname_manage_attachments'] = 'Avatarok és csatolmányok kezelése';
$txt['permissionhelp_manage_attachments'] = 'Ez a jogosultság elérést ad a csatolt állományok központjához, ahol minden csatolt állomány és avatar megtalálható és törölhető.';
$txt['permissionname_manage_smileys'] = 'Grimaszok kezelése';
$txt['permissionhelp_manage_smileys'] = 'Hozzáférést biztosít a grimasz központhoz. A grimasz központban hozzáadhatsz, szerkeszthetsz és törölhetsz grimaszokat és grimasz csomagokat.';
$txt['permissionname_edit_news'] = 'Hírek szerkesztése';
$txt['permissionhelp_edit_news'] = 'A hírek funkcióval egy véletlenszerű hír sort jeleníthetsz meg minden oldalon. A hírek funkció használata érdekében kapcsold be a fórum beállításokban.';

$txt['permissiongroup_member_admin'] = 'Felhasználó adminisztráció';
$txt['permissionname_moderate_forum'] = 'Fórum tagok moderálása';
$txt['permissionhelp_moderate_forum'] = 'Ez a jogosultság magába foglal minden fontos moderációs funkciót:<ul><li>hozzáférés a regisztrációk kezeléséhez</li><li>hozzáférés a tagok megtekintése/törlése képernyőhöz</li><li>kibővített profil információ, magába foglalva az IP/felhasználó követését és (rejtett) online állapotát</li><li>azonosítók aktiválása</li><li>megerősítési értesítések fogadása és azonosítók megerősítése</li><li>immunis a PÜ mellőzésre</li><li>pár kisebb dolog</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Csoportok kezelése és hozzárendelése';
$txt['permissionhelp_manage_membergroups'] = 'Ez a jogosultság engedélyezi a felhasználónak, hogy szerkessze a felhasználói csoportokat és hozzárendeljen csoportokat más felhasználókhoz.';
$txt['permissionname_manage_permissions'] = 'Jogosultságok kezelése';
$txt['permissionhelp_manage_permissions'] = 'Ez a jogosultság engedélyezi a felhasználónak, hogy egy felhasználói csoport összes jogosultságát szerkessze, globálisan vagy fórumonként.';
$txt['permissionname_manage_bans'] = 'Tiltólista kezelése';
$txt['permissionhelp_manage_bans'] = 'Ez a jogosultság engedélyezi a felhasználónak, hogy hozzáadjon vagy töröljön felhasználóneveket, IP címeket, kiszolgálóneveket és e-mail címeket a kitiltott felhasználók listájáról. Továbbá engedélyezi a bejelentkezni próbálkozó kitiltott felhasználók naplójának megtekintését és törlését.';
$txt['permissionname_send_mail'] = 'Fórum e-mail küldése a tagoknak';
$txt['permissionhelp_send_mail'] = 'Tömeges levél az összes fórumtagnak, vagy csak pár felhasználói csoportnak e-mailben vagy privát üzenetben (utóbbi a \'Privát üzenetek küldése\' jogosultságot igényli).';

$txt['permissiongroup_profile'] = 'Felhasználói profilok';
$txt['permissionname_profile_view'] = 'Profil összegzés és statisztikák megtekintése';
$txt['permissionhelp_profile_view'] = 'Ez a jogosultság engedélyezi a felhasználónak, hogy a felhasználónévre kattintva egy összegzést kapjon a profilról, néhány statisztikát és megtekinthesse a felhasználó összes hozzászólását.';
$txt['permissionname_profile_view_own'] = 'Saját profil';
$txt['permissionname_profile_view_any'] = 'Bármely profil';
$txt['permissionname_profile_identity'] = 'Azonosító beállítások szerkesztése';
$txt['permissionhelp_profile_identity'] = 'Az azonosító beállítások a profil alapvető beállításai, mint a jelszó, e-mail cím, felhasználói csoport és nyelv.';
$txt['permissionname_profile_identity_own'] = 'Saját profil';
$txt['permissionname_profile_identity_any'] = 'Bármely profil';
$txt['permissionname_profile_extra'] = 'További profil beállítások szerkesztése';
$txt['permissionhelp_profile_extra'] = 'A további profil beállítások az avatarokra, sablonokra, értesítésekre és privát üzenetekre vonatkozó beállításokat foglalja magába.';
$txt['permissionname_profile_extra_own'] = 'Saját profil';
$txt['permissionname_profile_extra_any'] = 'Bármely profil';
$txt['permissionname_profile_title'] = 'Egyedi titulus szerkesztése';
$txt['permissionhelp_profile_title'] = 'Az egyedi titulus a témákban jelenik meg minden olyan felhasználó profilja alatt, akinek van egyedi titulusa.';
$txt['permissionname_profile_title_own'] = 'Saját profil';
$txt['permissionname_profile_title_any'] = 'Bármely profil';
$txt['permissionname_profile_remove'] = 'Azonosító törlése';
$txt['permissionhelp_profile_remove'] = 'A jogosultság engedélyezi a felhasználónak, hogy törölje saját azonosítóját, ha \'Saját azonosító\' az érték.';
$txt['permissionname_profile_remove_own'] = 'Saját azonosító';
$txt['permissionname_profile_remove_any'] = 'Bármely azonosító';
$txt['permissionname_profile_server_avatar'] = 'Avatar választása a szerverről';
$txt['permissionhelp_profile_server_avatar'] = 'Ha be van kapcsolva, a felhasználó válaszhat a szerveren telepített avatar gyűjtemények közül.';
$txt['permissionname_profile_upload_avatar'] = 'Avatar feltöltése a szerverre';
$txt['permissionhelp_profile_upload_avatar'] = 'Ez a jogosultság lehetővé teszi a felhasználó számára, hogy feltöltse saját avatarját a szerverre.';
$txt['permissionname_profile_remote_avatar'] = 'Külső avatar használata';
$txt['permissionhelp_profile_remote_avatar'] = 'Mivel az avatarok rossz hatással lehetnek az oldal létrehozási idejére, lehetőség van bizonyos felhasználói csoportoknak megtiltani, hogy külső szerveren lévő avatart használjanak.';

$txt['permissiongroup_general_board'] = 'Általános';
$txt['permissionname_moderate_board'] = 'Fórum moderálása';
$txt['permissionhelp_moderate_board'] = 'A fórum moderálása jogosultság egy pár jogosultságot ad, ami egy moderátort igazi moderátorrá tesz. A jogosultságok tartalmazzák a lezárt témákra való válaszolást, szavazás lejártának megváltoztatását és szavazás eredményeinek megtekintését.';

$txt['permissiongroup_topic'] = 'Témák';
$txt['permissionname_post_new'] = 'Új témák indítása';
$txt['permissionhelp_post_new'] = 'Ez a jogosultság engedélyezi a felhasználóknak, hogy új témákat indítsanak. Ez nem engedélyezi a témákra való válaszolást.';
$txt['permissionname_merge_any'] = 'Bármely téma összevonása';
$txt['permissionhelp_merge_any'] = 'Kettő vagy több téma összevonása egybe. Az összevont témában az üzenetek sorrendje az üzenetek létrehozásának idején alapul. Egy felhasználó csak ott vonhat össze témákat, amelyik fórumban engedélyezve van neki. Annak érdekében, hogy egy felhasználó több témát összevonhasson egyidőben, a profil beállításokban be kell hogy legyen kapcsolva a gyors moderáció.';
$txt['permissionname_split_any'] = 'Bármely téma szétválasztása';
$txt['permissionhelp_split_any'] = 'Egy téma szétválasztása két különálló témává.';
$txt['permissionname_send_topic'] = 'Témák elküldése barátoknak';
$txt['permissionhelp_send_topic'] = 'A jogosultság engedélyezi a felhasználónak, hogy elküldjön egy témát a barátjának, beírva az e-mail címét és lehetőség van megjegyzés hozzáadására is.';
$txt['permissionname_make_sticky'] = 'Témák kiemelése';
$txt['permissionhelp_make_sticky'] = 'A kiemelt témák olyan témák, melyek mindig a fórum tetején maradnak. Hasznos közleményeknek vagy más fontos üzeneteknek.';
$txt['permissionname_move'] = 'Téma áthelyezése';
$txt['permissionhelp_move'] = 'Egy téma áthelyezése egyik fórumból a másikba. A felhasználók csak olyan cél fórumokat választhatnak ki, ahova van engedélyük.';
$txt['permissionname_move_own'] = 'Saját téma';
$txt['permissionname_move_any'] = 'Bármely téma';
$txt['permissionname_lock'] = 'Témák lezárása';
$txt['permissionhelp_lock'] = 'A jogosultság engedélyezi a felhasználónak hogy lezárjon egy témát. Ezzel biztosíthatjuk azt, hogy senki ne tudjon válaszolni egy témára. A \'Fórum moderálása\' jogosultsággal továbbra is lehetséges a lezárt témákhoz való hozzászólás.';
$txt['permissionname_lock_own'] = 'Saját téma';
$txt['permissionname_lock_any'] = 'Bármely téma';
$txt['permissionname_remove'] = 'Témák törlése';
$txt['permissionhelp_remove'] = 'Témák törlése, ahogy vannak. Vedd figyelembe, hogy ez a jogosultság nem engedélyezi a témákban lévő üzenetek törlését!';
$txt['permissionname_remove_own'] = 'Saját téma';
$txt['permissionname_remove_any'] = 'Bármely téma';
$txt['permissionname_post_reply'] = 'Válaszolás a témákra';
$txt['permissionhelp_post_reply'] = 'Ez a jogosultság engedélyezi a témákra való válaszolást.';
$txt['permissionname_post_reply_own'] = 'Saját téma';
$txt['permissionname_post_reply_any'] = 'Bármely téma';
$txt['permissionname_modify_replies'] = 'Saját témák válaszainak módosítása';
$txt['permissionhelp_modify_replies'] = 'A jogosultság engedélyezi a témát indító felhasználónak, hogy módosítson minden üzenetet, ami a témájába érkezik.';
$txt['permissionname_delete_replies'] = 'Saját témák válaszainak törlése';
$txt['permissionhelp_delete_replies'] = 'A jogosultság engedélyezi a témát indító felhasználónak, hogy töröljön minden üzenetet, ami a témájába érkezik.';
$txt['permissionname_announce_topic'] = 'Téma bejelentése';
$txt['permissionhelp_announce_topic'] = 'Engedélyezi a felhasználónak, hogy küldjön egy bejelentő e-mailt egy témáról az összes felhasználónak vagy pár felhasználói csoportnak.';

$txt['permissiongroup_post'] = 'Hozzászólások';
$txt['permissionname_delete'] = 'Hozzászólások törlése';
$txt['permissionhelp_delete'] = 'Hozzászólások eltávolítása. Ez nem engedélyezi a felhasználónak, hogy törölje a téma első hozzászólását.';
$txt['permissionname_delete_own'] = 'Saját hozzászólás';
$txt['permissionname_delete_any'] = 'Bármely hozzászólás';
$txt['permissionname_modify'] = 'Hozzászólások módosítása';
$txt['permissionhelp_modify'] = 'Hozzászólások szerkesztése';
$txt['permissionname_modify_own'] = 'Saját hozzászólás';
$txt['permissionname_modify_any'] = 'Bármely hozzászólás';
$txt['permissionname_report_any'] = 'Hozzászólások jelentése a moderátoroknak';
$txt['permissionhelp_report_any'] = 'Ez a jogosultság egy linket ad hozzá minden egyes üzenethez, lehetővé téve a felhasználónak, hogy jelentse a hozzászólást egy moderátornak. Jelentéskor az összes moderátor, aki azon a fórumon moderál, kapni fog egy e-mailt a jelentett hozzászólásra mutató linkkel és egy leírást a problémáról (ahogy a jelentő megadta).';

$txt['permissiongroup_poll'] = 'Szavazások';
$txt['permissionname_poll_view'] = 'Szavazások megtekintése';
$txt['permissionhelp_poll_view'] = 'A jogosultság lehetővé teszi a felhasználónak, hogy megtekintsen egy szavazást. A jogosultság nélkül a felhasználó csak a témát fogja látni.';
$txt['permissionname_poll_vote'] = 'Szavazás a szavazásokon';
$txt['permissionhelp_poll_vote'] = 'A jogosultság lehetővé teszi egy (regisztrált) felhasználónak, hogy szavazzon. Nem érvényes a vendégekre.';
$txt['permissionname_poll_post'] = 'Szavazások létrehozása';
$txt['permissionhelp_poll_post'] = 'A jogosultság lehetővé teszi a felhasználónak, hogy új szavazást hozzon létre.';
$txt['permissionname_poll_add'] = 'Szavazás hozzáadása a témákhoz';
$txt['permissionhelp_poll_add'] = 'A szavazás hozzáadása a témákhoz lehetővé teszi egy felhasználónak, hogy hozzáadjon egy szavazást a témához miután létrehozta. A jogosultság megfelelő engedélyeket követel meg, hogy a téma első hozzászólását szerkeszthesse.';
$txt['permissionname_poll_add_own'] = 'Saját témák';
$txt['permissionname_poll_add_any'] = 'Bármely téma';
$txt['permissionname_poll_edit'] = 'Szavazások szerkesztése';
$txt['permissionhelp_poll_edit'] = 'A jogosultság lehetővé teszi egy felhasználónak, hogy szerkessze egy szavazás opcióit és hogy lenulláza azt. Annak érdekében, hogy szerkeszthesse a szavazatok maximális számát és a lejárat idejét, a felhasználónak kell, hogy legyen \'Fórum moderálása\' jogosultsága.';
$txt['permissionname_poll_edit_own'] = 'Saját szavazás';
$txt['permissionname_poll_edit_any'] = 'Bármely szavazás';
$txt['permissionname_poll_lock'] = 'Szavazások lezárása';
$txt['permissionhelp_poll_lock'] = 'A szavazások lezárásával megakadályozható, hogy további szavazatok érkezzenek be.';
$txt['permissionname_poll_lock_own'] = 'Saját szavazás';
$txt['permissionname_poll_lock_any'] = 'Bármely szavazás';
$txt['permissionname_poll_remove'] = 'Szavazások eltávolítása';
$txt['permissionhelp_poll_remove'] = 'A jogosultság lehetővé teszi a szavazások eltávolítását.';
$txt['permissionname_poll_remove_own'] = 'Saját szavazás';
$txt['permissionname_poll_remove_any'] = 'Bármely szavazás';

$txt['permissiongroup_notification'] = 'Értesítések';
$txt['permissionname_mark_any_notify'] = 'Értesítés kérése a válaszokról';
$txt['permissionhelp_mark_any_notify'] = 'Az opció lehetővé teszi a tagoknak, hogy értesítést kapjanak, ha valaki válaszol egy általuk feliratkozott témára.';
$txt['permissionname_mark_notify'] = 'Értesítés kérése az új témákról';
$txt['permissionhelp_mark_notify'] = 'Az opció lehetővé teszi a tagoknak, hogy egy e-mailt kapjanak minden egyes alkalommal, amikor egy új téma jön létre egy általuk feliratkozott fórumban.';

$txt['permissiongroup_attachment'] = 'Csatolt állományok';
$txt['permissionname_view_attachments'] = 'Csatolmányok megtekintése';
$txt['permissionhelp_view_attachments'] = 'A csatolmányok fájlok, melyek az elküldött üzenetekhez vannak csatolva. Ez a tulajdonság bekapcsolható és konfigurálható a \'Beállítások és opciók szerkesztése\' menüben. Mivel a csatolmányok nem érhetőek el közvetlenül, védheted őket attól, hogy azon felhasználók ne tölthessék le, akiknek nincs meg ez a jogosultsága.';
$txt['permissionname_post_attachment'] = 'Csatolmányok küldése';
$txt['permissionhelp_post_attachment'] = 'A csatolmányok fájlok, melyek az elküldött üzenetekhez vannak csatolva. Egy üzenet tartalmazhat többet is.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Jogosultság beállítások';
$txt['groups_manage_permissions'] = 'Jogosultságok kezelésére jogosult csoportok';
$txt['permission_settings_submit'] = 'Mentés';
$txt['permission_settings_enable_deny'] = 'Jogosultságok megtagadása opció bekapcsolása';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Az opciót kikapcsolva a \\\'Megtagad\\\' jogosultságokból \\\'Nem engedélyez\\\' lesz.';
$txt['permission_by_membergroup_desc'] = 'Itt állíthatod be a globális jogosultságokat minden egyes felhasználói csoportnak. Ezek a jogosultságok érvényesek az összes fórumon, amelyeket nem írnak felül a \'Jogosultságok fórum szerint\' képernyőn beállított helyi jogosultságok.';
$txt['permission_by_board_desc'] = 'Itt beállíthatod, hogy a fórum a globális jogosultságokat használja vagy sajátos jogosultságokat. A helyi jogosultságok használatával minden jogosultságot beállíthatsz minden egyes felhasználói csoportnak azon a fórumon.';
$txt['permission_settings_desc'] = 'Itt beállíthatod kinek van joga a jogosultságok változtatására, ahogy azt is, hogy hogyan működjön a jogosultsági rendszer.';
$txt['permission_settings_enable_postgroups'] = 'Jogosultságok bekapcsolása az üzenetek számán alapuló csoportoknak';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Ezt a beállítást kikapcsolva a hozzászólások számán alapuló csoportok jogosultságai törlődnek.';
$txt['permission_settings_enable_by_board'] = 'Összetett fórum szerinti jogosultságok bekapcsolása';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'A beállítás kikapcsolásával minden fórum szintű jogosultságot eltávolít.';

?>