<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Seznam soukromých zpráv';
$txt[148] = 'Poslat zprávu';
$txt[150] = 'Komu';
$txt[1502] = 'Skrytá kopie';
$txt[316] = 'Inbox';
$txt[320] = 'Outbox';
$txt[321] = 'Nová zpráva';
$txt[411] = 'Smazat zprávy';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Smazat všechny zprávy ve schránce PMBOX';
$txt[413] = 'Jsi si jistý, že chceš smazat všechny zprávy?';
$txt[535] = 'Příjemce';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Nová soukromá zpráva: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Právě jsi dostal soukromou zprávu od uživatele SENDER z fóra ' . $context['forum_name'] . '.' . "\n\n" . 'DŮLEŽITÉ: Toto je pouze upozornění. Neodpovídej na tento email.' . "\n\n" . 'Zpráva, kterou ti poslal, následuje:' . "\n\n" . 'MESSAGE';
$txt[748] = '(více adresátů: \'jméno1, jméno2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Na tuto soukromou zprávu odpověz zde:';

$txt['smf249'] = 'Jsi si jistý, že chceš smazat všechny vybrané zprávy?';

$txt['sent_to'] = 'Adresát';
$txt['reply_to_all'] = 'Odpovědět všem';

$txt['pm_capacity'] = 'Kapacita';
$txt['pm_currently_using'] = '%s zpráv, %s%% obsazeno.';

$txt['pm_error_user_not_found'] = 'Nemůžu najít uživatele \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Uživatel \'%s\' blokuje tvé soukromé zprávy.';
$txt['pm_error_data_limit_reached'] = 'Soukromá zpráva nemohla být zaslána uživateli  \'%s\', protože překročil limit zpráv!';
$txt['pm_successfully_sent'] = 'Soukromá zpráva úspěšně zaslána \'%s\'.';
$txt['pm_too_many_recipients'] = 'Nemůžeš poslat soukromou zprávu více než %d uživatelům najednou.';
$txt['pm_too_many_per_hour'] = 'Překročil jsi limit %d soukromých zpráv za hodinu.';
$txt['pm_send_report'] = 'Poslat hlášení';
$txt['pm_save_outbox'] = 'Založit kopii mezi odeslané';
$txt['pm_undisclosed_recipients'] = 'Skrytí adresáti';

$txt['pm_read'] = 'Přečteno';
$txt['pm_replied'] = 'Odpovězeno';

// Message Pruning.
$txt['pm_prune'] = 'Promazat zprávy';
$txt['pm_prune_desc1'] = 'Smazat všechny zprávy starší než';
$txt['pm_prune_desc2'] = 'dní.';
$txt['pm_prune_warning'] = 'Jsi si jistý, že chceš promazat své soukromé zprávy?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Další akce';
$txt['pm_actions_delete_selected'] = 'Smazat vybrané';
$txt['pm_actions_filter_by_label'] = 'Filtrovat podle značky';
$txt['pm_actions_go'] = 'Ok';

// Manage Labels Screen.
$txt['pm_apply'] = 'Použít';
$txt['pm_manage_labels'] = 'Spravovat značky';
$txt['pm_labels_delete'] = 'Jsi si jistý, že chce smazat vybrané značky?';
$txt['pm_labels_desc'] = 'Zde můžeš přidávat, měnit a mazat značky pro použití ,k označování soukromých zpráv.';
$txt['pm_label_add_new'] = 'Přidat značku';
$txt['pm_label_name'] = 'Jméno značky';
$txt['pm_labels_no_exist'] = 'Nemáš nastavené žádné značky!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Značka';
$txt['pm_msg_label_title'] = 'Označ zprávu';
$txt['pm_msg_label_apply'] = 'Přidej značku';
$txt['pm_msg_label_remove'] = 'Odstraň značku';
$txt['pm_msg_label_inbox'] = 'Inbox';
$txt['pm_sel_label_title'] = 'Označ vybrané';
$txt['labels_too_many'] = 'Lituji, ale %s zpráv již mělo překročeno maximální množství značek!';

// Sidebar Headings.
$txt['pm_labels'] = 'Značky';
$txt['pm_messages'] = 'Zprávy';
$txt['pm_preferences'] = 'Nastavení';

$txt['pm_is_replied_to'] = 'Toto je buď přeposlaná nebo zodpovězená zpráva.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Nahlásit adminovi';
$txt['pm_report_title'] = 'Hlášení soukromé zprávy';
$txt['pm_report_desc'] = 'Z této stránky můžeš nahlašovat soukromé zprávy členům administrátorského teamu tohoto fóra. Prosím, uveď důvod, proč nahlašuješ tuto zprávu - bude odeslán spolu s původním zněním nahlašované zprávy.';
$txt['pm_report_admins'] = 'Adminstrátor, kterému poslat hlášení';
$txt['pm_report_all_admins'] = 'Poslat všem administrátorům';
$txt['pm_report_reason'] = 'Důvod, proč nahlašuješ tuto zprávu';
$txt['pm_report_message'] = 'Nahlásit zprávu';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[HLÁŠENÍ] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = 'Uživatel {REPORTER} nahlásil následující soukromou zprávu, odeslanou uživatelem {SENDER}, z tohoto důvodu:';
$txt['pm_report_pm_other_recipients'] = 'Ostatní příjemci této zprávy:';
$txt['pm_report_pm_hidden'] = '%d skrytých příjemců';
$txt['pm_report_pm_unedited_below'] = 'Níže je původní obsah nahlášené soukromé zprávy:';
$txt['pm_report_pm_sent'] = 'Odeslal:';

$txt['pm_report_done'] = 'Díky za nahlášení této zprávy. Brzy by se ti měl ozvat někdo z týmu adminů';
$txt['pm_report_return'] = 'Zpět do inboxu';

$txt['pm_search_title'] = 'Prohledávat soukromé zprávy';
$txt['pm_search_bar_title'] = 'Prohledávat zprávy';
$txt['pm_search_text'] = 'Výraz';
$txt['pm_search_go'] = 'Hledat';
$txt['pm_search_advanced'] = 'Pokročilé vyhledávání';
$txt['pm_search_user'] = 'podle uživatele';
$txt['pm_search_match_all'] = 'Všechna slova';
$txt['pm_search_match_any'] = 'Některá slova';
$txt['pm_search_options'] = 'Volby';
$txt['pm_search_post_age'] = 'Stáří';
$txt['pm_search_show_complete'] = 'Ve výsledcích zobrazovat celou zprávu.';
$txt['pm_search_subject_only'] = 'Vyhledávat pouze podle tématu a autora.';
$txt['pm_search_between'] = 'Mezi';
$txt['pm_search_between_and'] = 'a';
$txt['pm_search_between_days'] = 'dny';
$txt['pm_search_order'] = 'Seřadit výsledky podle';
$txt['pm_search_choose_label'] = 'Vybrat značky podle kterých vyhledávat nebo vyhledávat vše';

$txt['pm_search_results'] = 'Výsledky vyhledávání';
$txt['pm_search_none_found'] = 'Nenalezeny žádné zprávy';

$txt['pm_search_orderby_relevant_first'] = 'Relevance';
$txt['pm_search_orderby_recent_first'] = 'Stáří';
$txt['pm_search_orderby_old_first'] = 'Stáří (od nejstarších)';

$txt['pm_visual_verification_label'] = 'Ověření';
$txt['pm_visual_verification_desc'] = 'Prosím zadej kód z obrázku, abys mohl odeslat tuto zprávu.';
$txt['pm_visual_verification_listen'] = 'Přehrát písmena';

?>