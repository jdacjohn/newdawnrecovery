<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Editovať práva';
$txt['permissions_modify'] = 'Zmeniť';
$txt['permissions_access'] = 'Prístup';
$txt['permissions_allowed'] = 'Povoliť';
$txt['permissions_denied'] = 'Zakázať';

$txt['permissions_switch'] = 'Prepnuť na';
$txt['permissions_global'] = 'Globálne';
$txt['permissions_local'] = 'Lokálne';

$txt['permissions_groups'] = 'Práva podľa skupin';
$txt['permissions_all'] = 'všetko';
$txt['permissions_none'] = 'nič';
$txt['permissions_set_permissions'] = 'Nastaviť práva';

$txt['permissions_with_selection'] = 'Na výbere';
$txt['permissions_apply_pre_defined'] = 'Aplikuj preddefinovaný profil práv';
$txt['permissions_select_pre_defined'] = 'Výber profil';
$txt['permissions_copy_from_board'] = 'Kopírovať práva z tejto diskusie';
$txt['permissions_select_board'] = 'Vybrať diskusiu';
$txt['permissions_like_group'] = 'Nastaviť práva ako táto skupina';
$txt['permissions_select_membergroup'] = 'Vybrať skupinu';
$txt['permissions_add'] = 'Pridať právo';
$txt['permissions_remove'] = 'Ubrať právo';
$txt['permissions_deny'] = 'Zakázať právo';
$txt['permissions_select_permission'] = 'Vybrať právo';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Môžete nastaviť iba jednu akciu k modifikácii práv';
$txt['permissions_no_action'] = 'Nebola vybrána žiadna akcia';
$txt['permissions_deny_dangerous'] = 'Chystáte sa zakázať jedno alebo viac práv.\\nTo môže byť nebezpečné a spôsobyť neočakávané dôsledky, ak nemáte istotu, že nikto nie je \\"náhodou\\" v skupine alebo skupinách, ktorým túto správu zakazuješ.\\n\\nSte si istý, že chcete pokračovať?';

$txt['permissions_boards'] = 'Práva pre diskusiu';

$txt['permissions_modify_group'] = 'Upraviť skupinu';
$txt['permissions_general'] = 'Všeobecné práva';
$txt['permissions_board'] = 'Globálne práva pre diskusiu';
$txt['permissions_commit'] = 'Uložiť zmeny';
$txt['permissions_modify_local'] = 'Zmeniť lokálne práva';
$txt['permissions_on'] = 'v diskusii';
$txt['permissions_local_for'] = 'Lokálne práva pre skupinu';
$txt['permissions_option_on'] = 'P';
$txt['permissions_option_off'] = 'N';
$txt['permissions_option_deny'] = 'Z';
$txt['permissions_option_desc'] = 'Pre každé právo môžete vybrať \'Povoliť\' (P), \'Nepovoliť\' (N), alebo <span style="color: red;">\'Zakázať\' (Z)</span>.<br /><br />Keď zakážete právo, akýkoľvek užívateľ, vrátane moderátorov, ktorý je v danej skupine, bude mať toto právo zakázané.<br />Z toho dôvodu by sa zakazovanie malo používať opatrne, iba v prípade nutnosti. Nepovolenie zakazuje operácie iba keď nie sú inde povolené.';

$txt['permissiongroup_general'] = 'Všeobecné';
$txt['permissionname_view_stats'] = 'Prezerať štatistiky fóra';
$txt['permissionhelp_view_stats'] = 'Štatistiky fóra je stránka sumarizujúca všetky štatistiky fóra, ako je počet členov, denný počet príspevkov, a niekoľko ďalších &quot;Top 10&quot; štatistik. Zapnutie tejto voľby pridá na koniec Zoznamu diskusí odkaz (\'[Viac štatistík]\').';
$txt['permissionname_view_mlist'] = 'Prezerať zoznam užívateľov';
$txt['permissionhelp_view_mlist'] = 'Zoznam užívateľov zobrazí všetkých členov registrovaných vo vašom fóre. Zoznam môže byť triedený a prehľadávaný. Prostredníctvom mien/čísel členov naň vedú odkazy ako zo zoznamu diskusií, tak zo stránky so štatistikami fóra.';
$txt['permissionname_who_view'] = 'Prezerať, kto je online';
$txt['permissionhelp_who_view'] = '\'Kto je online\' zobrazí všetkých členov, ktorí sú práve online, a činnosti, ktoré práve vykonávajú. Toto oprávnenie funguje iba vtedy, ak je súčasne zapnuté v sekcii \'Nastavenia a voľby\'. Okno \'Kto je online\' otvoríte kliknutím na sekciu \'Užívateľov online\' na zozname diskusií.';
$txt['permissionname_search_posts'] = 'Vyhľadávať v príspevkoch a témach';
$txt['permissionhelp_search_posts'] = 'Právo vyhľadávať dovolí užívateľom prohľadávať všetky diskusie, ku ktorým má povolený prístup. Ak je udelené právo vyhľadávať, bude do tlačítkového pruhu pridané tlačítko \'Vyhľadávanie\'.';
$txt['permissionname_karma_edit'] = 'Meniť karmu iných užívateľov';
$txt['permissionhelp_karma_edit'] = 'Karma ukazuje popularitu člena. Aby ste mohli túto funkciu používať, musíte ju zapnuť v sekcii \'Nastavenia a voľby\'. Toto oprávnenie dovolí hlasovať o popularite členom skupiny, nemá efekt na hostí.';

$txt['permissiongroup_pm'] = 'Súkromné správy';
$txt['permissionname_pm_read'] = 'Čítať súkromné správy';
$txt['permissionhelp_pm_read'] = 'Toto oprávnenie dovolí užívateľom sprístupniť sekciu Súkromných správ a čítať svoje súkromné správy. Bez tohto oprávnenia nie je užívateľ schopný posielať súkromné správy.';
$txt['permissionname_pm_send'] = 'Posielať súkromné správy';
$txt['permissionhelp_pm_send'] = 'Poslať súkromnú správu ostatným registrovaným užívateľom. Vyžaduje právo \'Čítať súkromné správy\'.';

$txt['permissiongroup_calendar'] = 'Kalendár';
$txt['permissionname_calendar_view'] = 'Zobraziť kalendár';
$txt['permissionhelp_calendar_view'] = 'Kalendár ukazuje narodeniny, udalosti a sviatky každý mesiac. Toto oprávnenie riadi prístup ku kalendáru. Ak je udelené, na tlačítkový pruh bude pridané tlačítko a v spodnej části zoznamu diskusií bude zobrazený zoznam so súčasnými a blížiacimi sa narodeninami, událosťami a sviatkami. Kalendár musí byť zapnutý v sekcii \'Editovať nastavenia a voľby\'.';
$txt['permissionname_calendar_post'] = 'Vytvárať udalosti v kalendári';
$txt['permissionhelp_calendar_post'] = 'Udalosť je téma prepojená s dátumom alebo určitým obdobím. Udalosti sa vytvárajú v kalendári. Udalosť môže byť vytvorená iba ak užívateľ, ktorý ju vytvára, má súčasne povolené zakladať nové témy.';
$txt['permissionname_calendar_edit'] = 'Meniť udalosti v kalendári';
$txt['permissionhelp_calendar_edit'] = 'Udalosť je téma prepojená s dátumom alebo určitým obdobím. Udalosť je možné zmeniť v okne kalendára kliknutím na červenú hviezdičku (*) vedľa udalosti. Užívateľ musí mať dostatočné práva na editáciu prvého príspevku v diskusii, aby mohol udalosti meniť.';
$txt['permissionname_calendar_edit_own'] = 'Vlastné udalosti';
$txt['permissionname_calendar_edit_any'] = 'Ľubovolné udalosti';

$txt['permissiongroup_maintenance'] = 'Administrácia fóra';
$txt['permissionname_admin_forum'] = 'Administrovať fórum a databázu';
$txt['permissionhelp_admin_forum'] = 'Toto oprávnenie dovolí uží0vateľovi meniť nastavenie fóra a vzhľadu, spravovať balíčky a používať nástroje na údržbu fóra a databázy. Udelujte toto oprávnenie s rozvahou, pretože je veľmi silné.';
$txt['permissionname_manage_boards'] = 'Spravovať diskusie a kategórie';
$txt['permissionhelp_manage_boards'] = 'Toto oprávnenie dovolí vytvárať, editovať a meniť diskusie a kategórie.';
$txt['permissionname_manage_attachments'] = 'Spravovať prílohy a avatary';
$txt['permissionhelp_manage_attachments'] = 'Toto oprávnenie sprístupňuje Centrum príloh, ktoré zobrazuje a umožní manipuláciu so všetkými prílohami a avatarmi.';
$txt['permissionname_manage_smileys'] = 'Spravovať emotikony';
$txt['permissionhelp_manage_smileys'] = 'Umožňuje prístup k Centru emotikonov. V ňom môžete pridávať, meniť a mazať jednotlivé emotikony i celé ich skupiny.';
$txt['permissionname_edit_news'] = 'Editovať novinky';
$txt['permissionhelp_edit_news'] = 'Funkcie \'Novinky\' zobrazennie v hornej části stránky riadku s náhodne vybranou novinkou. Aby ste mohli túto funkciu používať, musíte ju zapnúť v nastaveniach fóra.';

$txt['permissiongroup_member_admin'] = 'Správa užívateľov';
$txt['permissionname_moderate_forum'] = 'Spravovať užívateľov';
$txt['permissionhelp_moderate_forum'] = 'Toto oprávnenie zahrňuje všetky dôležité funkcie pre správu užívateľov:<ul><li>Prístup k správe registrácií</li><li>Prístup k oknu pre prezeranie/mazanie členov</li><li>Rozsiahle informácie o profile užívateľa, vrátane možnosti sledovať IP užívateľa a (skrytý) online status</li><li>Aktiváciu účtov</li><li>Tisk upozornení o schválení a schvalovaní účtov</li><li>Imunitu proti ignorovaným súkromným správam.</li><li>niekoľko )ďalších drobností</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Spravovať a zaraďovať do skupin';
$txt['permissionhelp_manage_membergroups'] = 'Toto oprávnenie umožní užívateľovi editovať skupiny užívateľov a priradzovať členov fóra do skupin.';
$txt['permissionname_manage_permissions'] = 'Spravovať práva';
$txt['permissionhelp_manage_permissions'] = 'Toto oprávnenie dovolí užívateľovi editovať všetky práva skupiny, globálne či individuálne pre jednotlivé diskuse.';
$txt['permissionname_manage_bans'] = 'Spravovať zoznam zákazov';
$txt['permissionhelp_manage_bans'] = 'Toto oprávnenie umožní užívateľovi pridávať alebo mazať užívateľské mena, IP adresy, mena hostitelského počítača a e-mailové adresy v zozname zakázaných užívateľov. Tiež sprístupní a umožní manipuláciu so záznamami o tých zakázaných členoch, ktorí sa pokusili prihlásiť.';
$txt['permissionname_send_mail'] = 'Posielať mail užívateľom';
$txt['permissionhelp_send_mail'] = 'Hromadná pošta všetkým členom fóra, alebo iba niekoľkým skupinám buď e-mailom, alebo súkromnou správou (to ale vyžaduje oprávnenie \'Poslať súkromnú správu\').';

$txt['permissiongroup_profile'] = 'Profily užívateľov';
$txt['permissionname_profile_view'] = 'Prezerať profil a štatistiky';
$txt['permissionhelp_profile_view'] = 'Toto oprávnenie umožní užívateľovi kliknutím na meno iného člena vidieť jeho nastavenie profilu, nejaké štatistiky a všetky jeho príspevky.';
$txt['permissionname_profile_view_own'] = 'Vlastný profil';
$txt['permissionname_profile_view_any'] = 'Ľubovolný profil';
$txt['permissionname_profile_identity'] = 'Modifikovať nastavenie účtu';
$txt['permissionhelp_profile_identity'] = 'Nastavenie účtu je základné nastavenie profilu, ako je heslo, e-mailová adresa, príslušnosť k skupine a preferovaný jazyk.';
$txt['permissionname_profile_identity_own'] = 'Vlastný profil';
$txt['permissionname_profile_identity_any'] = 'Ľubovolný profil';
$txt['permissionname_profile_extra'] = 'Modifikovať rozšírené nastavenie účtu';
$txt['permissionhelp_profile_extra'] = 'Rozšírené nastavenie profilu obsahují možnosti pre avatary, vzhľady, upozorňovanie a súkromné správy.';
$txt['permissionname_profile_extra_own'] = 'Vlastný profil';
$txt['permissionname_profile_extra_any'] = 'Ľubovolný profil';
$txt['permissionname_profile_title'] = 'Modifikovať vlastný titulok';
$txt['permissionhelp_profile_title'] = 'Vlastný titulok je zobrazený na stránke s témou, pod profilom užívateľa, ktorý má vlastný titulok.';
$txt['permissionname_profile_title_own'] = 'Vlastný profil';
$txt['permissionname_profile_title_any'] = 'Ľubovolný profil';
$txt['permissionname_profile_remove'] = 'Vymazať účet';
$txt['permissionhelp_profile_remove'] = 'Toto oprávnenie umožňuje užívateľovi zmazať svoj účet, ak je nastavené na \'Vlastný účet\'.';
$txt['permissionname_profile_remove_own'] = 'Vlastný účet';
$txt['permissionname_profile_remove_any'] = 'Ľubovolný účet';
$txt['permissionname_profile_server_avatar'] = 'Vybrať avatar na servery';
$txt['permissionhelp_profile_server_avatar'] = 'Ak je povolené, umožní užívateľovi vybrať si avatar inštalovaný na servery.';
$txt['permissionname_profile_upload_avatar'] = 'Nahrať avatar na server';
$txt['permissionhelp_profile_upload_avatar'] = 'Toto oprávnenie umožňuje užívateľovi nahrať avatar na server.';
$txt['permissionname_profile_remote_avatar'] = 'Nastaviť si vzdialený avatar';
$txt['permissionhelp_profile_remote_avatar'] = 'Pretože avatary môžu negatívne ovplyvniť čas generovania stránky, je možné niektorým skupinám užívateľom zakázať použitie avatarov z externych serverov. ';

$txt['permissiongroup_general_board'] = 'Všeobecné';
$txt['permissionname_moderate_board'] = 'Moderovať diskusiu';
$txt['permissionhelp_moderate_board'] = 'Povolenie moderovať diskusiu dodá niekoľko oprávnení, ktoré z moderátora urobia skutočného moderátora. Oprávnenia obsahujú právo odpovedať v zamknutých diskusiach, meniť čas vypršania ankety a prezerať výsledky ankiet.';

$txt['permissiongroup_topic'] = 'Témy';
$txt['permissionname_post_new'] = 'Zakladať nové témy';
$txt['permissionhelp_post_new'] = 'Toto oprávnenie umožní zakladať nové témy. Nedovolí však odpovedať na už existujúce témy.';
$txt['permissionname_merge_any'] = 'Spájať témy';
$txt['permissionhelp_merge_any'] = 'Spojí dve alebo viac tém do jednej. Poradie správ v spojenej téme bude založené na času vytvorenia správ. Užívateľ môže spájať témy iba v tých diskusiách, kde k tomu má oprávnenie. Aby mohol spájať viac tém naraz, musí užívateľ vo svojom nastavení profilu aktivovať rýchlu moderáciu.';
$txt['permissionname_split_any'] = 'Rozdelovať témy';
$txt['permissionhelp_split_any'] = 'Rozdelí témy vo dvoch samostatných témach.';
$txt['permissionname_send_topic'] = 'Posielať témy priateľom';
$txt['permissionhelp_send_topic'] = 'Toto oprávnenie umožňuje užívateľom zaslať témy priateľovi. Požaduje sa pritom zadanie e-mailovej adresy a k odkazu je možnosť pridať správu.';
$txt['permissionname_make_sticky'] = 'Prišpendlievať témy';
$txt['permissionhelp_make_sticky'] = 'Prišpendlené témy sú témy, ktoré zostávajú na čele zoznamu tém. Môžu byť použité pre dôležité správy alebo oznámenia.';
$txt['permissionname_move'] = 'Presúvať témy';
$txt['permissionhelp_move'] = 'Presuňte témy z jednej diskusie do druhej. Užívatelia môžu ako cieľovú diskusiu zvoliť iba tú dikusiu, do ktorej majú prístup.';
$txt['permissionname_move_own'] = 'Vlastná téma';
$txt['permissionname_move_any'] = 'Ľubovolná téma';
$txt['permissionname_lock'] = 'Zamykať témy';
$txt['permissionhelp_lock'] = 'Toto oprávnenie dovolí užívateľovi zamknuť tému a tak zaistiť, že do nej už nikto ďalší neprispeje. Iba užívatelia s právom \'Moderovať diskusie\' môžu prispievať do zamknutých tém.';
$txt['permissionname_lock_own'] = 'Vlastná téma';
$txt['permissionname_lock_any'] = 'Ľubovolná téma';
$txt['permissionname_remove'] = 'Mazať príspevky';
$txt['permissionhelp_remove'] = 'Odstráni príspevky. Nedovolí ale užívateľovi zmazať prvý príspevok témy.';
$txt['permissionname_remove_own'] = 'Vlastný príspevok';
$txt['permissionname_remove_any'] = 'Akýkoľvek príspevok';
$txt['permissionname_post_reply'] = 'Odpovedať v témach';
$txt['permissionhelp_post_reply'] = 'Toto oprávnenie dovolí odpovedať na témy.';
$txt['permissionname_post_reply_own'] = 'Vlastná téma';
$txt['permissionname_post_reply_any'] = 'Ľubovolná téma';
$txt['permissionname_modify_replies'] = 'Meniť príspevky vo vlastných témach';
$txt['permissionhelp_modify_replies'] = 'Toto oprávnenie umožní užívateľovi, ktorý začal tému, meniť všetky príspevky v danej téme.';
$txt['permissionname_delete_replies'] = 'Mazať odpovede na vlastné témy';
$txt['permissionhelp_delete_replies'] = 'Toto oprávnenie umožňuje užívateľovi, ktorý založil tému, aby v ňom odmazával ľubovolné odpovede.';
$txt['permissionname_announce_topic'] = 'Upozorniť na tému';
$txt['permissionhelp_announce_topic'] = 'Dovolí rozoslať e-mail upozorňujúci na tému vštkým členom fóra, alebo iba vybraným skupinám.';

$txt['permissiongroup_post'] = 'Príspevky';
$txt['permissionname_delete'] = 'Odstraňovať témy';
$txt['permissionhelp_delete'] = 'Odstrání celú tému. Pozor - toto oprávnenie neumožňuje mazať jednotlivé príspevky v téme!';
$txt['permissionname_delete_own'] = 'Vlastná téma';
$txt['permissionname_delete_any'] = 'Ľubovolná téma';
$txt['permissionname_modify'] = 'Meniť príspevky';
$txt['permissionhelp_modify'] = 'Umožní editovať príspevky.';
$txt['permissionname_modify_own'] = 'Vlastný príspevok';
$txt['permissionname_modify_any'] = 'Akýkoľvek príspevok';
$txt['permissionname_report_any'] = 'Nahlasovať príspevky moderátorom';
$txt['permissionhelp_report_any'] = 'Toto oprávnenie pridá ku každému príspevku odkaz, ktorý umožní nahlásenie príspevku moderátorovi. V prípade nahlásenia obdržia všetci moderátori danej diskusie e-mail s odkazom na príspevok a popisom problému (ako je podaný užívateľom, ktorý príspevok nahlásil).';

$txt['permissiongroup_poll'] = 'Ankety';
$txt['permissionname_poll_view'] = 'Prezerať ankety';
$txt['permissionhelp_poll_view'] = 'Toto oprávnenie umožní užívateľovi vidieť anketu. Bez nej uvidí užívatel iba témy.';
$txt['permissionname_poll_vote'] = 'Hlasovať v anketách';
$txt['permissionhelp_poll_vote'] = 'Toto oprávnení umožní registrovaným užívateľom dať svoj hlas v anketách. Neplatí pre hostí.';
$txt['permissionname_poll_post'] = 'Vytvárať ankety';
$txt['permissionhelp_poll_post'] = 'Toto oprávnenie umožní užívateľovi vytvárať nové ankety. Keďže sú ankety zvláštnym prípadom tém, nie je možné toto právo použiť bez udelenia povolenia \'Zakládať nové témy\'.';
$txt['permissionname_poll_add'] = 'Pridávať ankety k témam';
$txt['permissionhelp_poll_add'] = 'Pridať anketu k témam dovolí užívateľovi pridať anketu až potom, čo bola daná téma založená. Toto oprávnenie vyžaduje dostatečné práva k editácií prvého príspevku v téme.';
$txt['permissionname_poll_add_own'] = 'Vlastné témy';
$txt['permissionname_poll_add_any'] = 'Akékoľvek témy';
$txt['permissionname_poll_edit'] = 'Meniť ankety';
$txt['permissionhelp_poll_edit'] = 'Toto oprávnenie umožní editovať možnosti ankiet a nulovať ankety. Pre zmenu maximálneho počtu hlasov a dátumu ukončenia ankety potrebujete právo \'Moderovať diskusie\'.';
$txt['permissionname_poll_edit_own'] = 'Vlastná anketa';
$txt['permissionname_poll_edit_any'] = 'Akákoľvek anketa';
$txt['permissionname_poll_lock'] = 'Zamykať ankety';
$txt['permissionhelp_poll_lock'] = 'Zamknutie ankety ju ochráni pred prijatím ďalších hlasov.';
$txt['permissionname_poll_lock_own'] = 'Vlastná anketa';
$txt['permissionname_poll_lock_any'] = 'Akákoľvek anketa';
$txt['permissionname_poll_remove'] = 'Mazať ankety';
$txt['permissionhelp_poll_remove'] = 'Toto oprávnenie dovolí mazanie ankiet.';
$txt['permissionname_poll_remove_own'] = 'Vlastná anketa';
$txt['permissionname_poll_remove_any'] = 'Akákoľvek anketa';

$txt['permissiongroup_notification'] = 'Upozornenia';
$txt['permissionname_mark_any_notify'] = 'Vyžadovať upozornenie na odpovede';
$txt['permissionhelp_mark_any_notify'] = 'Táto funkcia fóra umožní užívateľom obdržať upozornenie kedykoľvek niekto odpovie na tému, ktoré nechali &quot;strážiť&quot;.';
$txt['permissionname_mark_notify'] = 'Vyžadovať upozornenie na nové témy';
$txt['permissionhelp_mark_notify'] = 'Upozornenie na nové témy je vlastnosť, ktorá dovolí užívateľom obdržať e-mail vždy, keď je v nimi sledovanej diskusii vytvorená nová téma.';

$txt['permissiongroup_attachment'] = 'Prílohy';
$txt['permissionname_view_attachments'] = 'Prezerať prílohy';
$txt['permissionhelp_view_attachments'] = 'Prílohy sú súbory pripojené k zasielaným príspevkom. Táto funkcia môže byť zapnutá a nakonfigurovaná v okne \'Editovať nastavenia a voľby\'. Pretože k prílohám nie je pristupované priamo, udelením/neudelením práva ich prezerať môžete užívateľom povoliť alebo zakázať ich sťahovanie.';
$txt['permissionname_post_attachment'] = 'Posielať prílohy';
$txt['permissionhelp_post_attachment'] = 'Prílohy sú súbory pripojené k zasielaným príspevkom. Jedna správa môže obsahovať viac príloh.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Nastavenie práv';
$txt['groups_manage_permissions'] = 'Skupiny s právom meniť práva';
$txt['permission_settings_submit'] = 'Uložiť';
$txt['permission_settings_enable_deny'] = 'Povoliť zákaz oprávnení';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Vypnutie tejto voľby zmení práva \\\'Zakázať\\\' na \\\'Nepovoliť\\\'.';
$txt['permission_by_membergroup_desc'] = 'Tu môžete nastaviť všetky globálne práva pre každú skupinu. Práva platia vo všetkých diskusiach, ktoré nie sú prepnuté na lokálne práva (viď obrazovka \'Práva pre diskusiu\').';
$txt['permission_by_board_desc'] = 'Tu môžete nastaviť, či diskusia používa globálne nastavenie práv, alebo či má zvláštny režim. S použitím lokálnych práv môžete nastavovať každé právo zvlášť pre každúu skupinu.';
$txt['permission_settings_desc'] = 'Tu môžete nastaviť, kto má právo meniť práva a tiež aký vychytralý má byť systém práv..';
$txt['permission_settings_enable_postgroups'] = 'Povoliť práva pre skupiny založené na počte príspevkov';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Ak vypnete toto nastavenie, vymažú sa všetky práva priradené skupinám s počtom príspevkov.';
$txt['permission_settings_enable_by_board'] = 'Povoliť pokročilé nastavenie práv pre každú diskusiu';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Ak vypnete toto nastavenie, zmažete všetky dodatočné oprávnenia pre diskusie.';

?>