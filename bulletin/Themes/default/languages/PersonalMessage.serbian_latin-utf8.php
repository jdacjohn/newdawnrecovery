<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Indeks privatnih poruka';
$txt[148] = 'Pošalji poruku';
$txt[150] = 'Za';
$txt[1502] = 'Bcc';
$txt[316] = 'Primljeno';
$txt[320] = 'Poslato';
$txt[321] = 'Nova poruka';
$txt[411] = 'Obriši poruke';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Obriši sve poruke u mom PMBOX sandučetu';
$txt[413] = 'Da li ste sigurni da želite da obrišete sve poruke?';
$txt[535] = 'Primalac';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Nova privatna poruka: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'SENDER vam je upravo poslao novu privatnu poruku na ' . $context['forum_name'] . '.' . "\n\n" . 'VAŽNO: Zapamtite, ovo je samo obaveštenje. Ne odgovarajte na ovaj e-mail.' . "\n\n" . 'Poruka koju vam je poslao glasi ovako:' . "\n\n" . 'MESSAGE';
$txt[748] = '(više primalaca: \'ime1, ime2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Odgovorite na ovu privatnu poruku ovde:';

$txt['smf249'] = 'Da li ste sigurni da želite da obrišete sve izabrane privatne poruke?';

$txt['sent_to'] = 'Za';
$txt['reply_to_all'] = 'Odgovori svima';

$txt['pm_capacity'] = 'Kapacitet';
$txt['pm_currently_using'] = '%s poruka, ukupno %s%%.';

$txt['pm_error_user_not_found'] = 'Ne mogu da pronađem člana \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Korisnik \'%s\' je blokirao vaše privatne poruke.';
$txt['pm_error_data_limit_reached'] = 'PP za \'%s\' nije poslata jer je njihovo prijemno sanduče puno.';
$txt['pm_successfully_sent'] = 'PP je uspešno poslata \'%s\'.';
$txt['pm_too_many_recipients'] = 'Ne možete da pošaljete privatnu poruku ka više od %d primalaca odjednom.';
$txt['pm_too_many_per_hour'] = 'Prekoračili ste ograničenje od %d privatnih poruka po satu.';
$txt['pm_send_report'] = 'Pošalji izveštaj';
$txt['pm_save_outbox'] = 'Sačuvaj kopiju u sandučetu Poslato';
$txt['pm_undisclosed_recipients'] = 'Neprikazani primaoci';

$txt['pm_read'] = 'Pročitaj';
$txt['pm_replied'] = 'Odgovoreno na';

// Message Pruning.
$txt['pm_prune'] = 'Obriši sve poruke';
$txt['pm_prune_desc1'] = 'Obriši sve privatne poruke starije od';
$txt['pm_prune_desc2'] = 'dana.';
$txt['pm_prune_warning'] = 'Da li ste sigurni da želite da obrišete svoje privatne poruke?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Dalje akcije';
$txt['pm_actions_delete_selected'] = 'Obriši izabrano';
$txt['pm_actions_filter_by_label'] = 'Filtriraj po odeljku';
$txt['pm_actions_go'] = 'Idi';

// Manage Labels Screen.
$txt['pm_apply'] = 'Primeni';
$txt['pm_manage_labels'] = 'Upravljaj odeljcima';
$txt['pm_labels_delete'] = 'Da li ste sigurni da želite da obrišete izabrane odeljke?';
$txt['pm_labels_desc'] = 'Ovde možete da dodajete, menjate i brišete odeljke korišćene u privatnim porukama.';
$txt['pm_label_add_new'] = 'Dodaj novi odeljak';
$txt['pm_label_name'] = 'Ime odeljka';
$txt['pm_labels_no_exist'] = 'Trenutno niste odredili nijedan odeljak!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Odeljak';
$txt['pm_msg_label_title'] = 'Dodeli odeljak poruci';
$txt['pm_msg_label_apply'] = 'Dodaj odeljak';
$txt['pm_msg_label_remove'] = 'Ukloni odeljak';
$txt['pm_msg_label_inbox'] = 'Primljene poruke';
$txt['pm_sel_label_title'] = 'Izabrani odeljak';
$txt['labels_too_many'] = '%s poruka već ima najveći dozvoljeni broj odeljaka!';

// Sidebar Headings.
$txt['pm_labels'] = 'Odeljci';
$txt['pm_messages'] = 'Poruke';
$txt['pm_preferences'] = 'Podešavanja';

$txt['pm_is_replied_to'] = 'Prosledili ste ili ste odgovorili na ovu poruku.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Prijavi administratoru';
$txt['pm_report_title'] = 'Prijavi privatnu poruku';
$txt['pm_report_desc'] = 'Sa ove stranice možete da prijavite administratorskom timu foruma privatnu poruku koju ste primili. Podnesite i opis razloga iz kojeg prijavljujete poruku jer će biti poslat zajedno sa sadržajem originalne poruke.';
$txt['pm_report_admins'] = 'Administrator kojem želite da pošaljete poruku';
$txt['pm_report_all_admins'] = 'Pošalji svim administratorima';
$txt['pm_report_reason'] = 'Razlog zbog kojeg prijavljujete ovu poruku';
$txt['pm_report_message'] = 'Prijavi poruku';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[PRIJAVA] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} je prijavio privatnu poruku, poslatu od {SENDER}, iz sledećih razloga:';
$txt['pm_report_pm_other_recipients'] = 'Primaoci ove privatne poruke su i:';
$txt['pm_report_pm_hidden'] = '%d skrivenih primalaca';
$txt['pm_report_pm_unedited_below'] = 'Ispod se nalazi originalni sadržaj privatne poruke koja je prijavljena:';
$txt['pm_report_pm_sent'] = 'Poslato:';

$txt['pm_report_done'] = 'Zahvaljujemo što ste podneli prijavu. Uskoro bi trebalo da čujete odgovor admiistratorskog tima';
$txt['pm_report_return'] = 'Vrati se na primljene poruke';

$txt['pm_search_title'] = 'Pretraži privatne poruke';
$txt['pm_search_bar_title'] = 'Pretraživanje poruka';
$txt['pm_search_text'] = 'Traži za';
$txt['pm_search_go'] = 'Traži';
$txt['pm_search_advanced'] = 'Napredna pretraga';
$txt['pm_search_user'] = 'po korisniku';
$txt['pm_search_match_all'] = 'Poklopi sve reči';
$txt['pm_search_match_any'] = 'Poklopi bilo koju reč';
$txt['pm_search_options'] = 'Opcije';
$txt['pm_search_post_age'] = 'Starost';
$txt['pm_search_show_complete'] = 'Prikaži cele poruke u rezultatima.';
$txt['pm_search_subject_only'] = 'Traži samo po temi i autoru.';
$txt['pm_search_between'] = 'Između';
$txt['pm_search_between_and'] = 'i';
$txt['pm_search_between_days'] = 'dana';
$txt['pm_search_order'] = 'Sortiraj rezultate po';
$txt['pm_search_choose_label'] = 'Izaberite odeljke po kojima želite da tražite ili izaberite sve';

$txt['pm_search_results'] = 'Razultati pretrage';
$txt['pm_search_none_found'] = 'Nema nađenih poruka';

$txt['pm_search_orderby_relevant_first'] = 'Prvo najrelevantniji rezultati';
$txt['pm_search_orderby_recent_first'] = 'Prvo najsvežiji rezultati';
$txt['pm_search_orderby_old_first'] = 'Prvo najstariji rezultati';

$txt['pm_visual_verification_label'] = 'Potvrda';
$txt['pm_visual_verification_desc'] = 'Unesite kod sa slike da biste poslali privatnu poruku.';
$txt['pm_visual_verification_listen'] = 'Slušajte slova';

?>