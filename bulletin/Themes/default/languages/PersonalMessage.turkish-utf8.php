<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Kişisel Mesajlarım';
$txt[148] = 'Mesaj Gönder';
$txt[150] = 'Kime';
$txt[1502] = 'Bilgi';
$txt[316] = 'Gelen Mesajlar';
$txt[320] = 'Giden Mesajlar';
$txt[321] = 'Yeni Mesaj';
$txt[411] = 'Mesajları Sil';
// Don't translate "PMBOX" in this string.
$txt[412] = 'PMBOX\'ndaki Tüm Mesajları Sil';
$txt[413] = 'Mesajlarınızın hepsini silmek istediğinizden emin misiniz?';
$txt[535] = 'Kime';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Yeni Özel Mesaj: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'SENDER size '.$context['forum_name'].' sitesinde yeni bir Özel mesaj gönderildi.' . "\n\n" . 'Önemli: Bu sadece haber vermek için gönderilen bir mesajdır. Lütfen bu e-postaya cevap vermeyin.' . "\n\n" . 'Gönderilen mesaj:' . "\n\n" . 'MESSAGE';
$txt[748] = '(Çoklu alıcılar: \'üye1, üye2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Bu kişisel iletiyi yanıtla:';

$txt['smf249'] = 'Tüm seçili özel mesajlarınızı silmek istediğinizden eminmisiniz?';

$txt['sent_to'] = 'Alıcı';
$txt['reply_to_all'] = 'Hepsini Yanıtla';

$txt['pm_capacity'] = 'Kapasite';
$txt['pm_currently_using'] = '%s ileti, %s%% dolu.';

$txt['pm_error_user_not_found'] = 'Üye bulunamadı >> \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Kullanıcı \'%s\' sizi engellemiştir.';
$txt['pm_error_data_limit_reached'] = '\'%s\' adlı üyeye gelen kutusu dolu olduğu için kişisel ileti gönderilemedi!';
$txt['pm_successfully_sent'] = 'Kişisel iletiniz \'%s\' adlı üyeye başarıyla gönderildi!';
$txt['pm_too_many_recipients'] = 'Aynı anda %d alıcıdan fazla kişiye kişisel ileti gönderemezsiniz.';
$txt['pm_too_many_per_hour'] = 'Saatlik özel mesaj gönderim hakkınızı doldurdunuz. ( Limit : %d )';
$txt['pm_send_report'] = 'Rapor gönder';
$txt['pm_save_outbox'] = 'Giden kutusuna kaydet';
$txt['pm_undisclosed_recipients'] = 'Gizli alıcılar';

$txt['pm_read'] = 'Oku';
$txt['pm_replied'] = 'Cevap Verilmiş';

// Message Pruning.
$txt['pm_prune'] = 'İletileri Temizle';
$txt['pm_prune_desc1'] = 'Şu tarihten eski tüm kişisel iletilerimi sil:';
$txt['pm_prune_desc2'] = 'gün.';
$txt['pm_prune_warning'] = 'Kişisel iletilerinizi temizlemek istediğinize emin misiniz?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'İleri Seçenekler';
$txt['pm_actions_delete_selected'] = 'Seçilileri Sil';
$txt['pm_actions_filter_by_label'] = 'Etikete Göre Filtrele';
$txt['pm_actions_go'] = 'Başla';

// Manage Labels Screen.
$txt['pm_apply'] = 'Uygula';
$txt['pm_manage_labels'] = 'Etiketleri Yönet';
$txt['pm_labels_delete'] = 'Seçili etiketleri silmek istediğinizden emin misiniz?';
$txt['pm_labels_desc'] = 'Burada özel mesajlarınızda kullanılabilecek etiketleri düzenleyebilir, silebilir veya yenilerini ekleyebilirsiniz.';
$txt['pm_label_add_new'] = 'Yeni Etiket Ekle';
$txt['pm_label_name'] = 'Etiket Adı';
$txt['pm_labels_no_exist'] = 'Şu anda yapılandırılmış etiketiniz bulunmamakta!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etiket';
$txt['pm_msg_label_title'] = 'Etiket Mesajı';
$txt['pm_msg_label_apply'] = 'Etiketi Ekle';
$txt['pm_msg_label_remove'] = 'Etiket Sil';
$txt['pm_msg_label_inbox'] = 'Gelen Kutusu';
$txt['pm_sel_label_title'] = 'Seçilileri Etiketle';
$txt['labels_too_many'] = 'Üzgünüz, %s mesaj zaten izin verilen en fazla etiket sayısına sahipti!';

// Sidebar Headings.
$txt['pm_labels'] = 'Etiketler';
$txt['pm_messages'] = 'İletiler';
$txt['pm_preferences'] = 'Seçenekler';

$txt['pm_is_replied_to'] = 'Bu iletiyi yanıtladınız veya başka bir üyeye ilettiniz.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Yöneticiye Rapor Et';
$txt['pm_report_title'] = 'Kişisel İletiyi Rapor Et';
$txt['pm_report_desc'] = 'Bu sayfadan, aldığınız kişisel iletileri forum yönetimine rapor edebilirsiniz. Lütfen iletiyi neden rapor ettiğinizi de yazınız ve unutmayın bu iletinin tüm içeriği rapor edildikten sonra forum yöneticileri tarafından okunulabilecektir.';
$txt['pm_report_admins'] = 'İletilerin rapor edileceği yönetici';
$txt['pm_report_all_admins'] = 'Tüm forum yöneticilerine gönder';
$txt['pm_report_reason'] = 'İletiyi rapor etme nedeniniz';
$txt['pm_report_message'] = 'İletiyi Rapor Et';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[RAPOR ET] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER}, {SENDER} adlı kullanıcının kendisine göndermiş olduğu bu iletiyi aşağıdaki nedenle size rapor etti:';
$txt['pm_report_pm_other_recipients'] = 'Bu iletinin diğer alıcıları:';
$txt['pm_report_pm_hidden'] = '%d gizli alıcı';
$txt['pm_report_pm_unedited_below'] = 'Rapor edilen iletinin orjinal içeriği:';
$txt['pm_report_pm_sent'] = 'Gönderildi:';

$txt['pm_report_done'] = 'Bu raporu bize gönderdiğiniz için teşekkürler. En kısa sürede forum yönetiminden konu ile ilgili bilgi alacaksınız';
$txt['pm_report_return'] = 'Gelen kutusuna geri dön';

$txt['pm_search_title'] = 'Kişisel İletileri Ara';
$txt['pm_search_bar_title'] = 'İletileri Ara';
$txt['pm_search_text'] = 'Aranılacak Kelime(ler)';
$txt['pm_search_go'] = 'Ara';
$txt['pm_search_advanced'] = 'Gelişmiş arama';
$txt['pm_search_user'] = 'Kullanıcı';
$txt['pm_search_match_all'] = 'Tümünü içersin';
$txt['pm_search_match_any'] = 'Herhangi birini içersin';
$txt['pm_search_options'] = 'Seçenekler';
$txt['pm_search_post_age'] = 'Yaş';
$txt['pm_search_show_complete'] = 'Sonuçlarda iletinin tümünü göster.';
$txt['pm_search_subject_only'] = 'Sadece yazar ve konuya göre ara.';
$txt['pm_search_between'] = '';
$txt['pm_search_between_and'] = 've';
$txt['pm_search_between_days'] = 'gün arasında';
$txt['pm_search_order'] = 'İletileri sıralama şekli:';
$txt['pm_search_choose_label'] = 'Aranılacak etiketleri seçin yada tüm iletilerde arama yapın';

$txt['pm_search_results'] = 'Arama Sonuçları';
$txt['pm_search_none_found'] = 'Hiç İleti Bulunamadı';

$txt['pm_search_orderby_relevant_first'] = 'En alakalılar önce';
$txt['pm_search_orderby_recent_first'] = 'En yeniler önce';
$txt['pm_search_orderby_old_first'] = 'En eskiler önce';

$txt['pm_visual_verification_label'] = 'Doğrulama';
$txt['pm_visual_verification_desc'] = 'Lütfen yukarıdaki resimdeki kodu giriniz.';
$txt['pm_visual_verification_listen'] = 'Harfleri dinle';

?>