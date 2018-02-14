<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Yksityisviestit';
$txt[148] = 'L&#228;het&#228; viesti';
$txt[150] = 'K&#228;ytt&#228;j&#228;lle';
$txt[1502] = 'Kopio';
$txt[316] = 'Saapuneet';
$txt[320] = 'L&#228;hetetyt';
$txt[321] = 'Uusi viesti';
$txt[411] = 'Poista viestit';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Poista kaikki viestit laatikosta PMBOX';
$txt[413] = 'Oletko varma ett&#228; haluat poistaa kaikki viestit?';
$txt[535] = 'Vastaanottaja';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Uusi yksityisviesti: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'SENDER on l&#228;hett&#228;nyt sinulle yksityisviestin keskustelualueella ' . $context['forum_name'] . '.' . "\n\n" . 'T&#196;RKE&#196;&#196;: Muista, t&#228;m&#228; on vain ilmoitus viestist&#228; keskustelualueella. &#196;l&#228; vastaa t&#228;h&#228;n s&#228;hk&#246;postilla!' . "\n\n" . 'Sinulle l&#228;hetetty viesti on seuraavanlainen:' . "\n\n" . 'MESSAGE';
$txt[748] = '(useampia vastaanottajia \'tunnus1, tunnus2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Vastaa viestiin t&#228;&#228;ll&#228;:';

$txt['smf249'] = 'Oletko varma ett&#228; haluat poistaa valitut viestit?';

$txt['sent_to'] = 'L&#228;hetetty k&#228;ytt&#228;j&#228;lle';
$txt['reply_to_all'] = 'Vastaa kaikille';

$txt['pm_capacity'] = 'Tilan k&#228;ytt&#246;';
$txt['pm_currently_using'] = 'Viestej&#228; %s, %s%% tilasta k&#228;yt&#246;ss&#228;.';

$txt['pm_error_user_not_found'] = 'J&#228;sent&#228; \'%s\' ei l&#246;ydy.';
$txt['pm_error_ignored_by_user'] = 'K&#228;ytt&#228;j&#228; \'%s\' on est&#228;nyt yksityisviestit sinulta.';
$txt['pm_error_data_limit_reached'] = 'Viesti&#228; ei voida l&#228;hett&#228;&#228; k&#228;ytt&#228;j&#228;lle \'%s\' koska h&#228;nen postilaatikkonsa on t&#228;ynn&#228;!';
$txt['pm_successfully_sent'] = 'Viestin l&#228;hetys j&#228;senelle \'%s\' onnistui.';
$txt['pm_too_many_recipients'] = 'Voit l&#228;hett&#228;&#228; yksityisviestin korkeintaan %d :lle vastaanottajalle kerrallaan.';
$txt['pm_too_many_per_hour'] = 'Olet l&#228;hett&#228;nyt maksimim&#228;&#228;r&#228;n %d yksityisviestej&#228; tuntia kohden.';
$txt['pm_send_report'] = 'L&#228;hetysraportti';
$txt['pm_save_outbox'] = 'Tallenna kopio l&#228;hetettyjen kansioon';
$txt['pm_undisclosed_recipients'] = 'Piilokopion saaneet vastaanottajat';

$txt['pm_read'] = 'Luettu';
$txt['pm_replied'] = 'Vastattu';

// Message Pruning.
$txt['pm_prune'] = 'Karsi viestej&#228;';
$txt['pm_prune_desc1'] = 'Poista kaikki yksityisviestit jotka ovat vanhempia kuin';
$txt['pm_prune_desc2'] = 'p&#228;iv&#228;&#228;.';
$txt['pm_prune_warning'] = 'Oletko varma ett&#228; haluat karsia yksityisviestej&#228;si?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Lis&#228;valinnat';
$txt['pm_actions_delete_selected'] = 'Poista valitut';
$txt['pm_actions_filter_by_label'] = 'Suodata leiman mukaan';
$txt['pm_actions_go'] = 'Mene';

// Manage Labels Screen.
$txt['pm_apply'] = 'K&#228;yt&#228;';
$txt['pm_manage_labels'] = 'Hallinnoi leimoja';
$txt['pm_labels_delete'] = 'Oletko varma ett&#228; haluat poistaa valitut leimat? Se poistaa samalla kaikki s&#228;&#228;nn&#246;t jotka niihin on kytketty.';
$txt['pm_labels_desc'] = 'T&#228;&#228;ll&#228; voit lis&#228;t&#228;, muokata sek&#228; poistaa leimoja yksityisviestialueeltasi.';
$txt['pm_label_add_new'] = 'Lis&#228;&#228; uusi leima';
$txt['pm_label_name'] = 'Leiman nimi';
$txt['pm_labels_no_exist'] = 'Sinulla ei ole ainuttakaan leimaa asetettuna!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Leima';
$txt['pm_msg_label_title'] = 'Viestin leima';
$txt['pm_msg_label_apply'] = 'Lis&#228;&#228; leima';
$txt['pm_msg_label_remove'] = 'Poista leima';
$txt['pm_msg_label_inbox'] = 'Saapuneet';
$txt['pm_sel_label_title'] = 'Leimaa valitut';
$txt['labels_too_many'] = 'Pahoittelut, %s viestiss&#228; on jo maksimi sallittu m&#228;&#228;r&#228; leimoja!';

// Sidebar Headings.
$txt['pm_labels'] = 'Leimat';
$txt['pm_messages'] = 'Viestit';
$txt['pm_preferences'] = 'Lis&#228;valinnat';

$txt['pm_is_replied_to'] = 'Olet edelleenl&#228;hett&#228;nyt tai vastannut t&#228;h&#228;n viestiin.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Raportoi yll&#228;pidolle';
$txt['pm_report_title'] = 'Raportoi yksityisviestist&#228;';
$txt['pm_report_desc'] = 'T&#228;&#228;ll&#228; voit raportoida yll&#228;pidolle saamastasi yksityisviestist&#228;. Ole hyv&#228; ja liit&#228; mukaan selvitys miksi viestist&#228; raportoit, se l&#228;hetet&#228;&#228;n alkuper&#228;isen viestin mukana yll&#228;pidolle..';
$txt['pm_report_admins'] = 'Yll&#228;pit&#228;j&#228; jolle l&#228;hetet&#228;&#228;n raportti';
$txt['pm_report_all_admins'] = 'L&#228;het&#228; kaikille yll&#228;pit&#228;jille';
$txt['pm_report_reason'] = 'Syy miksi raportoit viestist&#228;';
$txt['pm_report_message'] = 'Raportoi viesti';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[RAPORTOITU VIESTI]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} raportoi seuraavasta yksityisviestist&#228; jonka {SENDER} on l&#228;hett&#228;nyt h&#228;nelle. Syy:';
$txt['pm_report_pm_other_recipients'] = 'Muut viestin saajat:';
$txt['pm_report_pm_hidden'] = '%d piilotettu(a) vastaanottaja(a)';
$txt['pm_report_pm_unedited_below'] = 'Alla on alkuper&#228;inen versio raportoidusta viestist&#228;:';
$txt['pm_report_pm_sent'] = 'L&#228;hetti:';

$txt['pm_report_done'] = 'Kiitos raportoinnistasi. Yll&#228;pitoryhm&#228; ottaa sinuun yhteytt&#228; tarvittaessa pikapuoliin';
$txt['pm_report_return'] = 'Palaa saapuneisiin';

$txt['pm_search_title'] = 'Hae yksityisviestej&#228;';
$txt['pm_search_bar_title'] = 'Etsi viestej&#228;';
$txt['pm_search_text'] = 'Etsi seuraavaa';
$txt['pm_search_go'] = 'Hae';
$txt['pm_search_advanced'] = 'Tarkempi haku';
$txt['pm_search_user'] = 'k&#228;ytt&#228;j&#228;n mukaan';
$txt['pm_search_match_all'] = 'Osu kaikkiin sanoihin';
$txt['pm_search_match_any'] = 'Osu mihin tahansa sanoista';
$txt['pm_search_options'] = 'Lis&#228;valinnat';
$txt['pm_search_post_age'] = 'Ik&#228;';
$txt['pm_search_show_complete'] = 'N&#228;yt&#228; koko viesti hakutuloksissa.';
$txt['pm_search_subject_only'] = 'Hae vain otsikon ja kirjoittajan mukaan.';
$txt['pm_search_between'] = 'V&#228;lill&#228;';
$txt['pm_search_between_and'] = 'ja';
$txt['pm_search_between_days'] = 'p&#228;ivi&#228;';
$txt['pm_search_order'] = 'J&#228;rjest&#228; tulokset seuraavasti';
$txt['pm_search_choose_label'] = 'Valitse leimat joista etsit&#228;&#228;n tai valitse kaikki';

$txt['pm_search_results'] = 'Haun tulokset';
$txt['pm_search_none_found'] = 'Viestej&#228; ei l&#246;ytynyt';

$txt['pm_search_orderby_relevant_first'] = 'Osuvin ensimm&#228;iseksi';
$txt['pm_search_orderby_recent_first'] = 'Uusin ensimm&#228;iseksi';
$txt['pm_search_orderby_old_first'] = 'Vanhin ensimm&#228;iseksi';

$txt['pm_visual_verification_label'] = 'Varmistus';
$txt['pm_visual_verification_desc'] = 'Kirjoita kuvassa n&#228;kyv&#228; merkkisarja l&#228;hett&#228;&#228;ksesi t&#228;m&#228;n viestin.';
$txt['pm_visual_verification_listen'] = 'Kuuntele kirjaimet';

?>