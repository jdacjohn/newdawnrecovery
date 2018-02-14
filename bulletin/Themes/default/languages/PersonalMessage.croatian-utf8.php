<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Privatne Poruke';
$txt[148] = 'Po&#353;alji Poruku';
$txt[150] = 'Primatelj';
$txt[1502] = 'BCC';
$txt[316] = 'Sandu&#269;i&#263;';
$txt[320] = 'Izlazna po&#353;ta';
$txt[321] = 'Nova Poruka';
$txt[411] = 'Brisanje Poruka';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Brisanje svih poruka u va&#353;em PMBOX';
$txt[413] = 'Jeste li sigurni da &#382;elite izbrisati sve poruke?';
$txt[535] = 'Primatelj';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Nova Privatna Poruka: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Korisnik SENDER vam je poslao privatnu poruku sa ' . $context['forum_name'] . '.' . "\n\n" . 'NAPOMENA: Ovo je samo obavijest. Nemojte odgovarati na ovu poruku.' . "\n\n" . 'Poruka glasi:' . "\n\n" . 'MESSAGE';
$txt[748] = '(vi&#353;e primatelja: \'ime1, ime2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Odgovorite na ovu Privatnu Poruku ovdje:';

$txt['smf249'] = 'Jeste li sigurni da &#382;elite izbrisati sve ozna&#269;ene privatne poruke?';

$txt['sent_to'] = 'Primatelj';
$txt['reply_to_all'] = 'Odgovor na Sve';

$txt['pm_capacity'] = 'Kapacitet';
$txt['pm_currently_using'] = '%s poruka, %s%% iskori&#353;teno.';

$txt['pm_error_user_not_found'] = 'Nije prona&#273;en korisnik \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Korisnik \'%s\' je blokirao va&#353;u privatnu poruku.';
$txt['pm_error_data_limit_reached'] = 'PP za \'%s\' nije poslan jer je korisnikov inbox pun!';
$txt['pm_successfully_sent'] = 'Uspje&#353;no poslana PP za \'%s\'.';
$txt['pm_too_many_recipients'] = 'Ne smijete poslati poruku ka vi&#353;e od %d primatelja od jednom.';
$txt['pm_too_many_per_hour'] = 'Prekora&#269;ili ste ograni&#269;enje od %d osobnih poruka na sat.';
$txt['pm_send_report'] = 'Po&#353;alji izvje&#353;taj';
$txt['pm_save_outbox'] = 'Spremi kopiju u moj outbox';
$txt['pm_undisclosed_recipients'] = 'Neotkriveni primatelji';

$txt['pm_read'] = 'Pro&#269;itaj';
$txt['pm_replied'] = 'Odgovoreno';

// Message Pruning.
$txt['pm_prune'] = 'Po&#269;isti Poruke';
$txt['pm_prune_desc1'] = 'Izbri&#353;i sve privatne poruke starije od';
$txt['pm_prune_desc2'] = 'dana.';
$txt['pm_prune_warning'] = 'Sigurni ste da &#382;elite po&#269;istiti svoje privatne poruke?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Daljnje Akcije';
$txt['pm_actions_delete_selected'] = 'Izbri&#353;i Odabrano';
$txt['pm_actions_filter_by_label'] = 'Filtriraj po Nazivu';
$txt['pm_actions_go'] = 'Kreni';

// Manage Labels Screen.
$txt['pm_apply'] = 'Primjeni';
$txt['pm_manage_labels'] = 'Uredi Mape';
$txt['pm_labels_delete'] = 'Sigurni ste da &#382;elite izbrisati odabrane mape?';
$txt['pm_labels_desc'] = 'Odavdje mo&#382;ete dodati, urediti ili izbrisati mape koje koristite u centru za privatne poruke.';
$txt['pm_label_add_new'] = 'Nova Mapa';
$txt['pm_label_name'] = 'Mapa';
$txt['pm_labels_no_exist'] = 'Trenutno nemate definiranih mapa!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Mapa';
$txt['pm_msg_label_title'] = 'Dodjeli Poruku Mapi';
$txt['pm_msg_label_apply'] = 'Dodaj Mapu';
$txt['pm_msg_label_remove'] = 'Izbri&#353;i Mapu';
$txt['pm_msg_label_inbox'] = 'Inbox';
$txt['pm_sel_label_title'] = 'Dodjeli Ozna&#269;eno Mapi';
$txt['labels_too_many'] = '%s poruka je ve&#263; dodjeljeno maksimalno dozvoljenom broju mapa!';

// Sidebar Headings.
$txt['pm_labels'] = 'Mape';
$txt['pm_messages'] = 'Poruke';
$txt['pm_preferences'] = 'Postavke';

$txt['pm_is_replied_to'] = 'Na ovu poruku ste odgovorili ili ste je proslijedili.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Prijavi Administratoru';
$txt['pm_report_title'] = 'Obavijesti o privatnoj poruci';
$txt['pm_report_desc'] = 'S ove stranice mo&#382;ete administratorima prijaviti neprihvatljive privatne poruke koje ste primili. Uklju&#269;ite obja&#353;njenje za&#353;to prijavljujete ovu poruku, ono &#263;e biti poslano uz originalnu poruku.';
$txt['pm_report_admins'] = 'Administrator kojemu &#353;aljete obavijest';
$txt['pm_report_all_admins'] = 'Po&#353;alji svim forum administratorima';
$txt['pm_report_reason'] = 'Razlog prijavljivanja ove poruke';
$txt['pm_report_message'] = 'Po&#353;alji';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[PRIJAVA] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} je prijavio privatnu poruku ispod, koju je poslao {SENDER}, iz slijede&#263;ih razloga:';
$txt['pm_report_pm_other_recipients'] = 'Drugi primatelji poruke:';
$txt['pm_report_pm_hidden'] = '%d skriveni primatelj(i)';
$txt['pm_report_pm_unedited_below'] = 'Ispod se nalazi originalni sadr&#382;aj prijavljene poruke:';
$txt['pm_report_pm_sent'] = 'Poslano:';

$txt['pm_report_done'] = 'Hvala na obavijesti. Administratorski tim &#263;e vam se ubrzo javiti';
$txt['pm_report_return'] = 'Povratak u inbox';

$txt['pm_search_title'] = 'Pretra&#382;i Privatne Poruke';
$txt['pm_search_bar_title'] = 'Pretra&#382;i Poruke';
$txt['pm_search_text'] = 'Tra&#382;i';
$txt['pm_search_go'] = 'Tra&#382;i';
$txt['pm_search_advanced'] = 'Napredno Pretra&#382;ivanje';
$txt['pm_search_user'] = 'korisnik';
$txt['pm_search_match_all'] = 'Sve rije&#269;i';
$txt['pm_search_match_any'] = 'Bilo koja rije&#269;';
$txt['pm_search_options'] = 'Opcije';
$txt['pm_search_post_age'] = 'Dob';
$txt['pm_search_show_complete'] = 'U rezultatima prika&#382;i cijelu poruku.';
$txt['pm_search_subject_only'] = 'Tra&#382;i samo po naslovu i autoru.';
$txt['pm_search_between'] = 'Izme&#273;u';
$txt['pm_search_between_and'] = 'i';
$txt['pm_search_between_days'] = 'dana';
$txt['pm_search_order'] = 'Sortiraj rezultate po';
$txt['pm_search_choose_label'] = 'Odaberite mapu za pretra&#382;ivanje ili ozna&#269;ite sve mape';

$txt['pm_search_results'] = 'Rezultati Pretra&#382;ivanja';
$txt['pm_search_none_found'] = 'Nema rezultata';

$txt['pm_search_orderby_relevant_first'] = 'Najrelevantniji prvi';
$txt['pm_search_orderby_recent_first'] = 'Najnoviji prvi';
$txt['pm_search_orderby_old_first'] = 'Najstariji prvi';

$txt['pm_visual_verification_label'] = 'Provjera';
$txt['pm_visual_verification_desc'] = 'Molimo Vas da unesete kod sa slike iznad da bist poslali ovu privatnu poruku.';
$txt['pm_visual_verification_listen'] = 'Slu&#353;ajte slova';

?>