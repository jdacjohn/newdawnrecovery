<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Zoznam súkromných správ';
$txt[148] = 'Poslať správu';
$txt[150] = 'Komu';
$txt[1502] = 'Skrytá kópia';
$txt[316] = 'Inbox';
$txt[320] = 'Outbox';
$txt[321] = 'Nová správa';
$txt[411] = 'Vymazať správy';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Vymazať všetky správy v schránke PMBOX';
$txt[413] = 'Ste si istý, že chcete vymzať všetky správy?';
$txt[535] = 'Príjemca';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Nová súkromná správa: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Práve ste dostali súkromnú správu od užívateľa SENDER z fóra ' . $context['forum_name'] . '.' . "\n\n" . 'DôLEŽITÉ: Toto je iba upozornenie. Neodpovedajte na tento email.' . "\n\n" . 'Správa, ktorú vám poslal, nasleduje:' . "\n\n" . 'MESSAGE';
$txt[748] = '(viac adresátov: \'meno1, meno2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Na túto súkromnú správu odpovedzte tu:';

$txt['smf249'] = 'Ste si istý, že chcete vymazať všetky vybrané správy?';

$txt['sent_to'] = 'Adresát';
$txt['reply_to_all'] = 'Odpovedať všetkým';

$txt['pm_capacity'] = 'Kapacita';
$txt['pm_currently_using'] = '%s správ, %s%% obsadené.';

$txt['pm_error_user_not_found'] = 'Nemôžem nájsť užívateľa \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Užívateľ \'%s\' blokuje vaše súkromné správy.';
$txt['pm_error_data_limit_reached'] = 'Súkromná správa nemohla byť zaslaná užívateľovi  \'%s\', protože prekročil limit správ!';
$txt['pm_successfully_sent'] = 'Súkromná správa úspešne odoslaná \'%s\'.';
$txt['pm_too_many_recipients'] = 'Nemôžete poslať súkromnú správu viac ako %d užívateľom súčasne.';
$txt['pm_too_many_per_hour'] = 'Prekrocil si limit pro poslani súkromnych sprav za hodinu.';
$txt['pm_send_report'] = 'Poslať hlásenie';
$txt['pm_save_outbox'] = 'Založiť kópiu medzi odoslané';
$txt['pm_undisclosed_recipients'] = 'Skrytí adresáti';

$txt['pm_read'] = 'Prečítané';
$txt['pm_replied'] = 'Odpovedané';

// Message Pruning.
$txt['pm_prune'] = 'Premazať správy';
$txt['pm_prune_desc1'] = 'Vymazať všetky správy staršie ako';
$txt['pm_prune_desc2'] = 'dní.';
$txt['pm_prune_warning'] = 'Ste si istý, že chcete premazať vaše súkromné správy?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Ďalšia akcia';
$txt['pm_actions_delete_selected'] = 'Zmazať vybrané';
$txt['pm_actions_filter_by_label'] = 'Filtrovať podľa značky';
$txt['pm_actions_go'] = 'Ok';

// Manage Labels Screen.
$txt['pm_apply'] = 'Použiť';
$txt['pm_manage_labels'] = 'Spravovať značky';
$txt['pm_labels_delete'] = 'Ste si istý, že chcete zmazať vybrané značky?';
$txt['pm_labels_desc'] = 'Tu môžete pridávať, meniť a mazať značky pre použitie ,k označovaní súkromných správ.';
$txt['pm_label_add_new'] = 'Pridať značku';
$txt['pm_label_name'] = 'Meno značky';
$txt['pm_labels_no_exist'] = 'Nemáte nastavené žiadne značky!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Značka';
$txt['pm_msg_label_title'] = 'Označ správu';
$txt['pm_msg_label_apply'] = 'Pridaj značku';
$txt['pm_msg_label_remove'] = 'Odstráň značku';
$txt['pm_msg_label_inbox'] = 'Inbox';
$txt['pm_sel_label_title'] = 'Označ vybrané';
$txt['labels_too_many'] = 'Ľutujeme, ale %s správ už malo prekročené maximálne množstvo značiek!';

// Sidebar Headings.
$txt['pm_labels'] = 'Značky';
$txt['pm_messages'] = 'Správy';
$txt['pm_preferences'] = 'Nastavenia';

$txt['pm_is_replied_to'] = 'Toto je buď preposlaná alebo zodpovedaná správa.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Nahlásiť adminovi';
$txt['pm_report_title'] = 'Hlásenie súkromnej správy';
$txt['pm_report_desc'] = 'Z tejto stránky môžete nahlasovať súkromné správy členom administrátorského teamu tohto fóra. Prosím, uveďte dôvod, prečo nahlasujete túto správu - bude odoslaný spolu s pôvodným znením nahlasovanej správy.';
$txt['pm_report_admins'] = 'Adminstrátor, ktorému poslať hlásenie';
$txt['pm_report_all_admins'] = 'Poslať všetkým administrátorom';
$txt['pm_report_reason'] = 'Dôvod, prečo nahlasujete túto správu';
$txt['pm_report_message'] = 'Nahlásiť správu';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[HLÁSENIE] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = 'Užívateľ {REPORTER} nahlásil následujúcu súkromnú správu, odoslanú užívateľom {SENDER}, z tohto dôvodu:';
$txt['pm_report_pm_other_recipients'] = 'Ostatní príjemci tejto správy:';
$txt['pm_report_pm_hidden'] = '%d skrytých príjemcov';
$txt['pm_report_pm_unedited_below'] = 'Nižšie je pôvodný obsah nahlásenej súkromnej správy:';
$txt['pm_report_pm_sent'] = 'Odoslal:';

$txt['pm_report_done'] = 'Vďaka za nahlásenie tejto správy. Čoskoro by sa vám mal ozvať niekto z adminov';
$txt['pm_report_return'] = 'Späť do inboxu';

$txt['pm_search_title'] = 'Prehľadávať súkromné správy';
$txt['pm_search_bar_title'] = 'Prehľadávať správy';
$txt['pm_search_text'] = 'Výraz';
$txt['pm_search_go'] = 'Hľadať';
$txt['pm_search_advanced'] = 'Pokročilé vyhľadávanie';
$txt['pm_search_user'] = 'podľa užívateľa';
$txt['pm_search_match_all'] = 'Všetky slová';
$txt['pm_search_match_any'] = 'Niektoré slová';
$txt['pm_search_options'] = 'Voľby';
$txt['pm_search_post_age'] = 'Vek';
$txt['pm_search_show_complete'] = 'Vo výsledkoch zobrazovať celú správu.';
$txt['pm_search_subject_only'] = 'Vyhľadávať iba podľa témy a autora.';
$txt['pm_search_between'] = 'Medzi';
$txt['pm_search_between_and'] = 'a';
$txt['pm_search_between_days'] = 'dňami';
$txt['pm_search_order'] = 'Usporiadať výsledky podľa';
$txt['pm_search_choose_label'] = 'Vybrať značky podľa ktorých vyhľadávať alebo vyhľadávať všetko';

$txt['pm_search_results'] = 'Výsledky vyhľadávania';
$txt['pm_search_none_found'] = 'Nenájdené žiadne správy';

$txt['pm_search_orderby_relevant_first'] = 'Relevancia';
$txt['pm_search_orderby_recent_first'] = 'Vek';
$txt['pm_search_orderby_old_first'] = 'Vek (od najstarších)';

$txt['pm_visual_verification_label'] = 'Overeni';
$txt['pm_visual_verification_desc'] = 'Pro odeslani zpravy musis opsat pismenka z obrazku.';
$txt['pm_visual_verification_listen'] = 'Poslechni si pismenka';

?>