<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Editovat práva';
$txt['permissions_modify'] = 'Změnit';
$txt['permissions_access'] = 'Přístup';
$txt['permissions_allowed'] = 'Povolit';
$txt['permissions_denied'] = 'Zakázat';

$txt['permissions_switch'] = 'Přepnout na';
$txt['permissions_global'] = 'Globální';
$txt['permissions_local'] = 'Lokální';

$txt['permissions_groups'] = 'Práva podle skupin';
$txt['permissions_all'] = 'vše';
$txt['permissions_none'] = 'nic';
$txt['permissions_set_permissions'] = 'Nastavit práva';

$txt['permissions_with_selection'] = 'Na výběru';
$txt['permissions_apply_pre_defined'] = 'Aplikuj předdefinovaný profil práv';
$txt['permissions_select_pre_defined'] = 'Vyber profil';
$txt['permissions_copy_from_board'] = 'Kopírovat práva z této diskuse';
$txt['permissions_select_board'] = 'Vybrat diskusi';
$txt['permissions_like_group'] = 'Nastavit práva jako tato skupina';
$txt['permissions_select_membergroup'] = 'Vybrat skupinu';
$txt['permissions_add'] = 'Přidat právo';
$txt['permissions_remove'] = 'Ubrat právo';
$txt['permissions_deny'] = 'Zakázat právo';
$txt['permissions_select_permission'] = 'Vybrat právo';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Můžeš nastavit pouze jednu akci k modifikaci práv';
$txt['permissions_no_action'] = 'Nebyla vybrána žádná akce';
$txt['permissions_deny_dangerous'] = 'Hodláš zakázat jedno nebo více práv.\\nTo může být nebezpečné a způsobit neočekávané důsledky, pokud nemáš jistotu, že nikdo není \\"náhodou\\" ve skupině nebo skupinách, kterým tato práva zakazuješ.\\n\\nJsi si jistý, že chceš pokračovat?';

$txt['permissions_boards'] = 'Práva pro diskusi';

$txt['permissions_modify_group'] = 'Upravit skupinu';
$txt['permissions_general'] = 'Obecná práva';
$txt['permissions_board'] = 'Globální práva pro diskusi';
$txt['permissions_commit'] = 'Uložit změny';
$txt['permissions_modify_local'] = 'Změnit lokální práva';
$txt['permissions_on'] = 'v diskusi';
$txt['permissions_local_for'] = 'Lokální práva pro skupinu';
$txt['permissions_option_on'] = 'P';
$txt['permissions_option_off'] = 'N';
$txt['permissions_option_deny'] = 'Z';
$txt['permissions_option_desc'] = 'Pro každé právo můžeš vybrat \'Povolit\' (P), \'Nepovolit\' (N), nebo <span style="color: red;">\'Zakázat\' (Z)</span>.<br /><br />Když zakážeš právo, jakýkoli uživatel, včetně moderátorů, který je v dané skupině, bude mít toto právo zakázáno.<br />Z toho důvodu by se zakazování mělo používat opatrně, pouze v případě nutnosti. Nepovolení zakazuje operace jen pokud nejsou jinde povoleny.';

$txt['permissiongroup_general'] = 'Obecné';
$txt['permissionname_view_stats'] = 'Prohlížet statistiky fóra';
$txt['permissionhelp_view_stats'] = 'Statistiky fóra je stránka sumarizující všechny statistiky fóra, jako je počet členů, denní počet příspěvků, a několik dalších &quot;Top 10&quot; statistik. Zapnutí této volby přidá na konec Seznamu diskusí odkaz (\'[Více statistik]\').';
$txt['permissionname_view_mlist'] = 'Prohlížet seznam uživatelů';
$txt['permissionhelp_view_mlist'] = 'Seznam uživatelů zobrazí všechny členy registrované na tvém fóru. Seznam může být tříděn a prohledáván. Přes jména/čísla členů na něj vedou odkazy jak ze seznamu diskusí, tak ze stránky se statistikami fóra.';
$txt['permissionname_who_view'] = 'Prohlížet, kdo je online';
$txt['permissionhelp_who_view'] = '\'Kdo je online\' zobrazí všechny členy, kteří jsou právě online, a činnosti, které právě provádějí. Toto oprávnění funguje pouze tehdy, je-li současně zapnuto v sekci \'Nastavení a volby\'. Okno \'Kdo je online\' otevřeš kliknutím na sekci \'Uživatelů online\' na seznamu diskusí.';
$txt['permissionname_search_posts'] = 'Vyhledávat v příspěvcích a tématech';
$txt['permissionhelp_search_posts'] = 'Právo vyhledávat dovolí uživatelům prohledávat všechny diskuse, ke kterým má povolen přístup. Je-li uděleno právo vyhledávat, bude do tlačítkového pruhu přidáno tlačítko \'Vyhledávání\'.';
$txt['permissionname_karma_edit'] = 'Měnit karmu jiných uživatelů';
$txt['permissionhelp_karma_edit'] = 'Karma ukazuje popularitu člena. Abys mohl tuto funkci používat, musíš ji zapnout v sekci \'Nastavení a volby\'. Toto oprávnění dovolí hlasovat o popularitě členům skupiny, nemá efekt na hosty.';

$txt['permissiongroup_pm'] = 'Soukromé zprávy';
$txt['permissionname_pm_read'] = 'Číst soukromé zprávy';
$txt['permissionhelp_pm_read'] = 'Toto oprávnění dovolí uživatelům zpřístupnit sekci Soukromých zpráv a číst své soukromé zprávy. Bez tohoto oprávnění není uživatel schopen posílat soukromé zprávy.';
$txt['permissionname_pm_send'] = 'Posílat soukromé zprávy';
$txt['permissionhelp_pm_send'] = 'Poslat soukromou zprávu ostatním registrovaným uživatelům. Vyžaduje právo \'Číst soukromé zprávy\'.';

$txt['permissiongroup_calendar'] = 'Kalendář';
$txt['permissionname_calendar_view'] = 'Zobrazit kalendář';
$txt['permissionhelp_calendar_view'] = 'Kalendář ukazuje narozeniny, události a svátky každý měsíc. Toto oprávnění řídí přístup ke kalendáři. Je-li uděleno, na tlačítkový pruh bude přidáno tlačítko a  ve spodní části seznamu diskusí bude zobrazen seznam se současnými a blížícími se narozeninami, událostmi a svátky. Kalendář musí být zapnutý v sekci \'Editovat nastavení a volby\'.';
$txt['permissionname_calendar_post'] = 'Vytvářet události v kalendáři';
$txt['permissionhelp_calendar_post'] = 'Událost je téma propojené s datem nebo určitým obdobím. Události se vytváří v kalendáři. Událost může být vytvořena pouze pokud uživatel, který ji vytváří, má současně povoleno zakládat nová témata.';
$txt['permissionname_calendar_edit'] = 'Měnit události v kalendáři';
$txt['permissionhelp_calendar_edit'] = 'Událost je téma propojené s datem nebo určitým obdobím. Událost je možno změnit v okně kalendáře kliknutím na červenou hvězdičku (*) vedle události. Uživatel musí mít dostatek práv na editaci prvního příspěvku v diskusi, aby mohl události měnit.';
$txt['permissionname_calendar_edit_own'] = 'Vlastní události';
$txt['permissionname_calendar_edit_any'] = 'Libovolné události';

$txt['permissiongroup_maintenance'] = 'Administrace fóra';
$txt['permissionname_admin_forum'] = 'Administrovat fórum a databázi';
$txt['permissionhelp_admin_forum'] = 'Toto oprávnění dovolí uživateli měnit nastavení fóra a vzhledu, spravovat balíčky a používat nástroje pro údržbu fóra a databáze. Uděluj toto oprávnění s rozvahou, protože je velmi silné.';
$txt['permissionname_manage_boards'] = 'Spravovat diskuse a kategorie';
$txt['permissionhelp_manage_boards'] = 'Toto oprávnění dovolí vytvářet, editovat a měnit diskuse a kategorie.';
$txt['permissionname_manage_attachments'] = 'Spravovat přílohy a avatary';
$txt['permissionhelp_manage_attachments'] = 'Toto oprávnění zpřístupňuje Centrum příloh, které zobrazuje a umožní manipulaci se všemi přílohami a avatary.';
$txt['permissionname_manage_smileys'] = 'Spravovat emotikony';
$txt['permissionhelp_manage_smileys'] = 'Umožní přístup k Centru emotikonů. V něm můžeš přidávat, měnit a mazat jednotlivé emotikony i celé jejich skupiny.';
$txt['permissionname_edit_news'] = 'Editovat novinky';
$txt['permissionhelp_edit_news'] = 'Funkce \'Novinky\' zobrazení v horní části stránky řádku s náhodně vybranou novinkou. Abys mohl tuto funkci používat ji musíš zapnout v nastavení fóra.';

$txt['permissiongroup_member_admin'] = 'Správa uživatelů';
$txt['permissionname_moderate_forum'] = 'Spravovat uživatele';
$txt['permissionhelp_moderate_forum'] = 'Toto oprávnění zahrnuje všechny důležité funkce pro správu uživatelů:<ul><li>Přístup ke správě registrací</li><li>Přístup k oknu pro prohlížení/mazání členů</li><li>Rozsáhlé informace o profilu uživatele, včetně možnosti sledovat IP uživatele a (skrytý) online status</li><li>Aktivaci účtů</li><li>Zisk upozornění o schválení a schvalování účtů</li><li>Imunitu proti ignorovaným soukromým zprávám.</li><li>několik dalších drobností</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Spravovat a zařazovat do skupin';
$txt['permissionhelp_manage_membergroups'] = 'Toto oprávnění umožní uživateli editovat skupiny uživatelů a přiřazovat členy fóra do skupin.';
$txt['permissionname_manage_permissions'] = 'Spravovat práva';
$txt['permissionhelp_manage_permissions'] = 'Toto oprávnění dovolí uživateli editovat všechna práva skupiny, globální či individuálně pro jednotlivé diskuse.';
$txt['permissionname_manage_bans'] = 'Spravovat seznam zákazů';
$txt['permissionhelp_manage_bans'] = 'Toto oprávnění umožní uživateli přidávat nebo mazat uživatelská jména, IP adresy, jména hostitelského počítače a e-mailové adresy v seznamu zakázaných uživatelů. Také zpřístupní a umožní manipulaci se záznamy o těch zakázaných členech, kteří se pokusili přihlásit.';
$txt['permissionname_send_mail'] = 'Posílat mail uživatelům';
$txt['permissionhelp_send_mail'] = 'Hromadná pošta všem členům fóra, nebo pouze několika skupinám buď e-mailem, nebo soukromou zprávou (to ovšem vyžaduje oprávnění \'Poslat soukromou zprávu\').';

$txt['permissiongroup_profile'] = 'Profily uživatelů';
$txt['permissionname_profile_view'] = 'Prohlížet profil a statistiky';
$txt['permissionhelp_profile_view'] = 'Toto oprávnění umožní uživateli kliknutím na jméno jiného člena vidět jeho nastavení profilu, nějaké statistiky a všechny jeho příspěvky.';
$txt['permissionname_profile_view_own'] = 'Vlastní profil';
$txt['permissionname_profile_view_any'] = 'Libovolný profil';
$txt['permissionname_profile_identity'] = 'Modifikovat nastavení účtu';
$txt['permissionhelp_profile_identity'] = 'Nastavení účtu je základní nastavení profilu, jako je heslo, e-mailová adresa, příslušnost ke skupině a preferovaný jazyk.';
$txt['permissionname_profile_identity_own'] = 'Vlastní profil';
$txt['permissionname_profile_identity_any'] = 'Libovolný profil';
$txt['permissionname_profile_extra'] = 'Modifikovat rozšířené nastavení účtu';
$txt['permissionhelp_profile_extra'] = 'Rozšířená nastavení profilu obsahují možnosti pro avatary, vzhledy, upozorňování a soukromé zprávy.';
$txt['permissionname_profile_extra_own'] = 'Vlastní profil';
$txt['permissionname_profile_extra_any'] = 'Libovolný profil';
$txt['permissionname_profile_title'] = 'Modifikovat vlastní titulek';
$txt['permissionhelp_profile_title'] = 'Vlastní titulek je zobrazen na stránce s tématem, pod profilem uživatele, který má vlastní titulek.';
$txt['permissionname_profile_title_own'] = 'Vlastní profil';
$txt['permissionname_profile_title_any'] = 'Libovolný profil';
$txt['permissionname_profile_remove'] = 'Smazat účet';
$txt['permissionhelp_profile_remove'] = 'Toto oprávnění umožňuje uživateli smazat svůj účet, je-li nastaveno na \'Vlastní účet\'.';
$txt['permissionname_profile_remove_own'] = 'Vlastní účet';
$txt['permissionname_profile_remove_any'] = 'Libovolný účet';
$txt['permissionname_profile_server_avatar'] = 'Vybrat avatar na serveru';
$txt['permissionhelp_profile_server_avatar'] = 'Pokud je povoleno, umožní uživateli vybrat si avatar instalovaný na serveru.';
$txt['permissionname_profile_upload_avatar'] = 'Nahrát avatar na server';
$txt['permissionhelp_profile_upload_avatar'] = 'Toto oprávnění umožňuje uživateli nahrát avatar na server.';
$txt['permissionname_profile_remote_avatar'] = 'Nastavit si vzdálený avatar';
$txt['permissionhelp_profile_remote_avatar'] = 'Protože avatary mohou negativně ovlivnit dobu generování stránky, je možné některým skupinám uživatelů zakázat použití avatarů z externích serverů. ';

$txt['permissiongroup_general_board'] = 'Obecné';
$txt['permissionname_moderate_board'] = 'Moderovat diskusi';
$txt['permissionhelp_moderate_board'] = 'Povolení moderovat diskusi dodá několik oprávnění, které z moderátora udělají skutečného moderátora. Oprávnění obsahují právo odpovídat na uzamčené diskuse, měnit dobu vypršení ankety a prohlížet výsledky anket.';

$txt['permissiongroup_topic'] = 'Témata';
$txt['permissionname_post_new'] = 'Zakládat nová témata';
$txt['permissionhelp_post_new'] = 'Toto oprávnění umožní zakládat nová témata. Nedovolí však odpovídat na již existující témata.';
$txt['permissionname_merge_any'] = 'Slučovat témata';
$txt['permissionhelp_merge_any'] = 'Sloučí dvě či více témat do jednoho. Pořadí zpráv ve sloučeném tématu bude založeno na času vytvoření zpráv. Uživatel může slučovat témata pouze v těch diskusích, kde k tomu má oprávnění. Aby mohl slučovat více témat najednou, musí uživatel ve svém nastavení profilu aktivovat rychlou moderaci.';
$txt['permissionname_split_any'] = 'Rozdělovat témata';
$txt['permissionhelp_split_any'] = 'Rozdělí téma ve dvě samostatná témata.';
$txt['permissionname_send_topic'] = 'Posílat témata přátelům';
$txt['permissionhelp_send_topic'] = 'Toto oprávnění umožňuje uživatelům zaslat téma příteli. Požaduje se přitom zadání e-mailové adresy a k odkazu je možnost přidat zprávu.';
$txt['permissionname_make_sticky'] = 'Připichovat témata';
$txt['permissionhelp_make_sticky'] = 'Připíchnutá témata jsou témata, která zůstávají na čele seznamu témat. Mohou být použity pro důležité zprávy nebo oznámení.';
$txt['permissionname_move'] = 'Přesunovat témata';
$txt['permissionhelp_move'] = 'Přesuň téma z jedné diskuse do druhé. Uživatelé mohou jako cílovou diskusi zvolit pouze tu dikusi, do které mají přístup.';
$txt['permissionname_move_own'] = 'Vlastní téma';
$txt['permissionname_move_any'] = 'Libovolné téma';
$txt['permissionname_lock'] = 'Zamykat témata';
$txt['permissionhelp_lock'] = 'Toto oprávnění dovolí uživateli zamknout téma a tak zajistit, že do něj již nikdo další nepřispěje. Pouze uživatelé s právem \'Moderovat diskuse\' mohou přispívat do zamčených témat.';
$txt['permissionname_lock_own'] = 'Vlastní téma';
$txt['permissionname_lock_any'] = 'Libovolné téma';
$txt['permissionname_remove'] = 'Odstraňovat témata';
$txt['permissionhelp_remove'] = 'Odstraní celé téma. Pozor - toto oprávnění neumožňuje mazat jednotlivé příspěvky v tématu!';
$txt['permissionname_remove_own'] = 'Vlastní téma';
$txt['permissionname_remove_any'] = 'Libovolné téma';
$txt['permissionname_post_reply'] = 'Odpovídat v tématech';
$txt['permissionhelp_post_reply'] = 'Toto oprávnění dovolí odpovídat na témata.';
$txt['permissionname_post_reply_own'] = 'Vlastní téma';
$txt['permissionname_post_reply_any'] = 'Libovolné téma';
$txt['permissionname_modify_replies'] = 'Měnit příspěvky ve vlastních tématech';
$txt['permissionhelp_modify_replies'] = 'Toto oprávnění umožní uživateli, který začal téma, měnit všechny příspěvky v daném tématu.';
$txt['permissionname_delete_replies'] = 'Mazat odpovědi na vlastní témata';
$txt['permissionhelp_delete_replies'] = 'Toto oprávnění umožňuje uživateli, který založil téma, aby v něm odmazával libovolné odpovědi.';
$txt['permissionname_announce_topic'] = 'Upozornit na téma';
$txt['permissionhelp_announce_topic'] = 'Dovolí rozeslat e-mail upozorňující na téma všem členům fóra, nebo jen vybraným skupinám.';

$txt['permissiongroup_post'] = 'Příspěvky';
$txt['permissionname_delete'] = 'Mazat příspěvky';
$txt['permissionhelp_delete'] = 'Odstraní příspěvky. Nedovolí ale uživateli smazat první příspěvek tématu.';
$txt['permissionname_delete_own'] = 'Vlastní příspěvek';
$txt['permissionname_delete_any'] = 'Jakýkoli příspěvek';
$txt['permissionname_modify'] = 'Měnit příspěvky';
$txt['permissionhelp_modify'] = 'Umožní editovat příspěvky.';
$txt['permissionname_modify_own'] = 'Vlastní příspěvek';
$txt['permissionname_modify_any'] = 'Jakýkoli příspěvek';
$txt['permissionname_report_any'] = 'Nahlašovat příspěvky moderátorům';
$txt['permissionhelp_report_any'] = 'Toto oprávnění přidá ke každému příspěvku odkaz, který umožní nahlášení příspěvku moderátorovi. V případě nahlášení obdrží všichni moderátoři dané diskuse e-mail s odkazem na příspěvek a popisem problému (jak je podán uživatelem, který příspěvek nahlásil).';

$txt['permissiongroup_poll'] = 'Ankety';
$txt['permissionname_poll_view'] = 'Prohlížet ankety';
$txt['permissionhelp_poll_view'] = 'Toto oprávnění umožní uživateli vidět anketu. Bez něj uvidí uživatelé pouze téma.';
$txt['permissionname_poll_vote'] = 'Hlasovat v anketách';
$txt['permissionhelp_poll_vote'] = 'Toto oprávnění umožní registrovaným uživatelům dát svůj hlas v anketách. Neplatí pro hosty.';
$txt['permissionname_poll_post'] = 'Vytvářet ankety';
$txt['permissionhelp_poll_post'] = 'Toto oprávnění umožní uživateli vytvářet nové ankety. Jelikož jsou ankety zvláštním případem témat, nelze toto právo použít bez udělení povolení \'Zakládat nová témata\'.';
$txt['permissionname_poll_add'] = 'Přidávat ankety k tématům';
$txt['permissionhelp_poll_add'] = 'Přidat anketu k tématům dovolí uživateli přidat anketu až poté, co bylo dané téma založeno. Toto oprávnění vyžaduje dostatečná práva k editaci prvního příspěvku v tématu.';
$txt['permissionname_poll_add_own'] = 'Vlastní témata';
$txt['permissionname_poll_add_any'] = 'Jakákoli témata';
$txt['permissionname_poll_edit'] = 'Měnit ankety';
$txt['permissionhelp_poll_edit'] = 'Toto oprávnění umožní editovat možnosti anket a nulovat ankety. Pro změnu maximálního počtu hlasů a data ukončení ankety potřebuje uživatel právo \'Moderovat diskuse\'.';
$txt['permissionname_poll_edit_own'] = 'Vlastní anketa';
$txt['permissionname_poll_edit_any'] = 'Jakákoli anketa';
$txt['permissionname_poll_lock'] = 'Zamykat ankety';
$txt['permissionhelp_poll_lock'] = 'Zamknutí ankety je ochrání před přijmutím dalších hlasů.';
$txt['permissionname_poll_lock_own'] = 'Vlastní anketa';
$txt['permissionname_poll_lock_any'] = 'Jakákoli anketa';
$txt['permissionname_poll_remove'] = 'Mazat ankety';
$txt['permissionhelp_poll_remove'] = 'Toto oprávnění dovolí mazání anket.';
$txt['permissionname_poll_remove_own'] = 'Vlastní anketa';
$txt['permissionname_poll_remove_any'] = 'Jakákoli anketa';

$txt['permissiongroup_notification'] = 'Upozornění';
$txt['permissionname_mark_any_notify'] = 'Vyžadovat upozornění na odpovědi';
$txt['permissionhelp_mark_any_notify'] = 'Tato funkce fóra umožní uživatelům obdržet upozornění kdykoliv někdo odpoví na téma, které nechali &quot;hlídat&quot;.';
$txt['permissionname_mark_notify'] = 'Vyžadovat upozornění na nová témata';
$txt['permissionhelp_mark_notify'] = 'Upozornění na nová témata je vlastnost, která dovolí uživatelům obdržet e-mail pokaždé, je-li na jimi sledované diskusi vytvořeno nové téma.';

$txt['permissiongroup_attachment'] = 'Přílohy';
$txt['permissionname_view_attachments'] = 'Prohlížet přílohy';
$txt['permissionhelp_view_attachments'] = 'Přílohy jsou soubory připojené k zasílaným příspěvkům. Tato funkce může být zapnuta a nakonfigurována v okně \'Editovat nastavení a volby\'. Protože k přílohám není přistupováno přímo, udělením/neudělením práva je prohlížet můžeš uživatelům povolit či zakázat jejich stahování.';
$txt['permissionname_post_attachment'] = 'Posílat přílohy';
$txt['permissionhelp_post_attachment'] = 'Přílohy jsou soubory připojené k zasílaným příspěvkům. Jedna zpráva může obsahovat více příloh.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Nastavení práv';
$txt['groups_manage_permissions'] = 'Skupiny s právem měnit práva';
$txt['permission_settings_submit'] = 'Uložit';
$txt['permission_settings_enable_deny'] = 'Povolit zákaz oprávnění';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Vypnutí této volby změní práva \\\'Zakázat\\\' na \\\'Nepovolit\\\'.';
$txt['permission_by_membergroup_desc'] = 'Zde můžeš nastavit všechna globální práva pro kaHere you ždou skupinu. Práva platí ve všech diskusích, které nejsou přepnuty na lokální práva (viz obrazovka \'Práva pro diskusi\').';
$txt['permission_by_board_desc'] = 'Zde můžeš nastavit, zda diskuse používá globální nastavení práv, nebo zda má zvláštní režim. S použitím lokálních práv můžeš nastavovat každé právo zvlášť pro každou skupinu.';
$txt['permission_settings_desc'] = 'Zde můžeš nastavit, kdo má právo měnit práva a také jak vychytralý má být systém práv..';
$txt['permission_settings_enable_postgroups'] = 'Povolit práva pro skupiny založené na počtu příspěvků';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Pokud vypneš toto nastavení, smažou se všechna práva přiřazena skupinám s počtem příspěvků.';
$txt['permission_settings_enable_by_board'] = 'Povolit pokročilé nastavení práv pro každou diskusi';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Pokud vypneš toto nastavení, smažeš všechna dodatečná oprávnění pro diskuse.';

?>