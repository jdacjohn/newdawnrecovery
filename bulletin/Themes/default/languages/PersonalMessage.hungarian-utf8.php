<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Privát üzenetek';
$txt[148] = 'Üzenet elküldése';
$txt[150] = 'Címzett';
$txt[1502] = 'További címzettek';
$txt[316] = 'Bejövő';
$txt[320] = 'Kimenő';
$txt[321] = 'Új üzenet';
$txt[411] = 'Üzenetek törlése';
// Don't translate "PMBOX" in this string.
$txt[412] = 'PMBOX - Összes üzenet törlése';
$txt[413] = 'Biztos vagy benne, hogy törölni akarod az összes üzenetet?';
$txt[535] = 'Címzett';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = '&#218;j priv&#225;t &#252;zenet: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'SENDER k&#252;ld&#246;tt egy &#250;j priv&#225;t &#252;zenetet neked a k&#246;vetkez&#245;n: ' . $context['forum_name'] . '.' . "\n\n" . 'FONTOS: Eml&#233;kezz, ez csak egy &#233;rtesít&#245;. K&#233;rlek ne v&#225;laszolj erre a lev&#233;lre.' . "\n\n" . 'Az &#252;zenet:' . "\n\n" . 'MESSAGE';
$txt[748] = '(t&#246;bb c&#237;mzettek: \'n&#233;v1, n&#233;v2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'V&#225;lasz a priv&#225;t &#252;zenetre itt:';

$txt['smf249'] = 'Biztos vagy benne, hogy törölni akarod az összes kiválasztott privát üzenetet?';

$txt['sent_to'] = 'Címzett';
$txt['reply_to_all'] = 'Válasz mindenkinek';

$txt['pm_capacity'] = 'Kapacitás';
$txt['pm_currently_using'] = '%s üzenet, %s%% betelt.';

$txt['pm_error_user_not_found'] = 'Nem található a felhasználó: \'%s\'.';
$txt['pm_error_ignored_by_user'] = '\'%s\' blokkolta a privát üzeneted.';
$txt['pm_error_data_limit_reached'] = 'Az PÜ nem küldhető el a következőnek, mivel a postafiókja megtelt: \'%s\'!';
$txt['pm_successfully_sent'] = 'A PÜ sikeresen elküldve a következőnek: \'%s\'.';
$txt['pm_too_many_recipients'] = 'Nem küldhetsz egy üzenetet több, mint %d címzettnek.';
$txt['pm_too_many_per_hour'] = 'Túllépted az óránként küldhető %d privát üzenet korlátozást.';
$txt['pm_send_report'] = 'Értesítés küldése';
$txt['pm_save_outbox'] = 'Másolat készítése a kimenő üzenetekbe';
$txt['pm_undisclosed_recipients'] = 'Meg nem nevezett címzettek';

$txt['pm_read'] = 'Olvasott';
$txt['pm_replied'] = 'Válaszoltál rá';

// Message Pruning.
$txt['pm_prune'] = 'Üzenetek törlése';
$txt['pm_prune_desc1'] = 'Összes privát üzenet törlése, mely régebbi';
$txt['pm_prune_desc2'] = 'napnál.';
$txt['pm_prune_warning'] = 'Biztos vagy benne, hogy törölni akarod a privát üzeneteid?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'További műveletek';
$txt['pm_actions_delete_selected'] = 'Kiválasztott törlése';
$txt['pm_actions_filter_by_label'] = 'Szűrés cimke szerint';
$txt['pm_actions_go'] = 'Ok';

// Manage Labels Screen.
$txt['pm_apply'] = 'Alkalmaz';
$txt['pm_manage_labels'] = 'Címkék kezelése';
$txt['pm_labels_delete'] = 'Biztos vagy benne, hogy törölni akarod a kiválasztott címkéket?';
$txt['pm_labels_desc'] = 'Itt hozhatod létre, szerkesztheted, és törölheted a privát üzeneteknél használt címkéket.';
$txt['pm_label_add_new'] = 'Új címke';
$txt['pm_label_name'] = 'Címke neve';
$txt['pm_labels_no_exist'] = 'Jelenleg nincsenek beállítva címkék!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Címke';
$txt['pm_msg_label_title'] = 'Címke üzenet';
$txt['pm_msg_label_apply'] = 'Címke hozzáadása';
$txt['pm_msg_label_remove'] = 'Címke eltávolítása';
$txt['pm_msg_label_inbox'] = 'Bejövő';
$txt['pm_sel_label_title'] = 'Címke kiválasztva';
$txt['labels_too_many'] = 'Sajnálom, %s üzeneten már a maximum engedélyezett számú címke van!';

// Sidebar Headings.
$txt['pm_labels'] = 'Címkék';
$txt['pm_messages'] = 'Üzenetek';
$txt['pm_preferences'] = 'Beállítások';

$txt['pm_is_replied_to'] = 'Továbbítottad vagy válaszoltál erre a levélre.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Jelentés az adminisztrátornak';
$txt['pm_report_title'] = 'Privát üzenet jelentése';
$txt['pm_report_desc'] = 'Ezen az oldalon jelentheted a privát üzeneteid a fórum adminisztrátorainak. Kérlek mindenképp mellékelj egy leírást amiért jelentetted az üzenetet, mivel ez is el lesz küldve az üzenet eredeti tartalmán kívül.';
$txt['pm_report_admins'] = 'Adminisztrátor, akinek a jelentést küldöd';
$txt['pm_report_all_admins'] = 'Küldés az összes adminisztrátornak';
$txt['pm_report_reason'] = 'Indok amiért jelented az üzenetet';
$txt['pm_report_message'] = 'Üzenet jelentése';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[JELENTÉS] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} jelentette az alábbi üzenetet, melyet {SENDER} küldött, a következő okból:';
$txt['pm_report_pm_other_recipients'] = 'Az üzenet további címzettei:';
$txt['pm_report_pm_hidden'] = '%d rejtett címzett';
$txt['pm_report_pm_unedited_below'] = 'Alább látható a jelentett privát üzenet eredeti tartalma:';
$txt['pm_report_pm_sent'] = 'Elküldve:';

$txt['pm_report_done'] = 'Köszönjük a jelentést. Rövid időn belül hallani fogsz az adminisztrátori csapatról';
$txt['pm_report_return'] = 'Visszatérés a bejövő üzenetekhez';

$txt['pm_search_title'] = 'Privát üzenetek keresése';
$txt['pm_search_bar_title'] = 'Üzenetek keresése';
$txt['pm_search_text'] = 'Keresés a következőre';
$txt['pm_search_go'] = 'Keresés';
$txt['pm_search_advanced'] = 'Összetett kereső';
$txt['pm_search_user'] = 'felhasználó szerint';
$txt['pm_search_match_all'] = 'Összes szó egyezik';
$txt['pm_search_match_any'] = 'Bármely szó egyezik';
$txt['pm_search_options'] = 'Opciók';
$txt['pm_search_post_age'] = 'Kor';
$txt['pm_search_show_complete'] = 'A teljes üzenetet jelenítse meg az eredményekben.';
$txt['pm_search_subject_only'] = 'Keresés tárgy és szerző szerint.';
$txt['pm_search_between'] = '';
$txt['pm_search_between_and'] = 'és';
$txt['pm_search_between_days'] = 'nap';
$txt['pm_search_order'] = 'Eredmények rendezése';
$txt['pm_search_choose_label'] = 'Válaszd ki a címkéket, amelyekben keresni szeretnél vagy keress az összesben';

$txt['pm_search_results'] = 'Keresési eredmények';
$txt['pm_search_none_found'] = 'Nem található üzenet';

$txt['pm_search_orderby_relevant_first'] = 'Leginkább egyező elsőként';
$txt['pm_search_orderby_recent_first'] = 'Legújabb elsőként';
$txt['pm_search_orderby_old_first'] = 'Legrégebbi elsőként';

$txt['pm_visual_verification_label'] = 'Megerősítés';
$txt['pm_visual_verification_desc'] = 'Kérlek írd be a fenti képen látható kódot a PÜ elküldéséhez.';
$txt['pm_visual_verification_listen'] = 'Hallgasd meg a betűket';

?>