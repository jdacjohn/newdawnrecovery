<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'Üye Grupları Yönetimi';
$txt['membergroups_description'] = 'Üye grupları benzer hak, ayar ve görünümlere sahip olunan gruplardır. Bazı üye grupları herhangi bir kullanıcının yazdığı iletiler üzerine kuruludur. Bir üye gurubunu profilini seçerek ve değiştirerek başkabirisine devredebilirsiniz.';
$txt['membergroups_modify'] = 'Değiştir';

$txt['membergroups_add_group'] = 'Grup Ekle';
$txt['membergroups_regular'] = 'Sıradan Gruplar';
$txt['membergroups_post'] = 'İleti sayısına göre gruplar';

$txt['membergroups_new_group'] = 'ÜyeGrubu ekle';
$txt['membergroups_group_name'] = 'Üye Grubu Adı';
$txt['membergroups_new_board'] = 'Görülebilir Bölümler';
$txt['membergroups_new_board_desc'] = 'Üye gruplarının görebildiği bölümler';
$txt['membergroups_new_board_post_groups'] = '<em>Not: ileti grupları ek erişime ihtiyaç duymazlar çünkü bulundukları birincil grup onlara zaten erişim hakları tanır.</em>';
$txt['membergroups_new_as_type'] = 'Tür';
$txt['membergroups_new_as_copy'] = 'Kopyası';
$txt['membergroups_new_copy_none'] = '(yok)';
$txt['membergroups_can_edit_later'] = 'Daha sonra düzenleyebilirsiniz.';

$txt['membergroups_edit_group'] = 'Üye Grubunu Düzenle';
$txt['membergroups_edit_name'] = 'Grup Adı';
$txt['membergroups_edit_post_group'] = 'Bu grup mesajlara kapalıdır';
$txt['membergroups_min_posts'] = 'Gerekli ileti sayısı';
$txt['membergroups_online_color'] = 'Çevrimiçi listesindeki renkler';
$txt['membergroups_star_count'] = 'Yıldız resimlerinin sayısı';
$txt['membergroups_star_image'] = 'Yıldız resim dosya adı';
$txt['membergroups_star_image_note'] = '($language değişkenini kullanıcıların dili olarak kullanabilirsiniz.)';
$txt['membergroups_max_messages'] = 'Kişisel İleti Kapasitesi';
$txt['membergroups_max_messages_note'] = '0 = sınırsız';
$txt['membergroups_edit_save'] = 'Kaydet';
$txt['membergroups_delete'] = 'Sil';
$txt['membergroups_confirm_delete'] = 'Bu grubu silmek istediğinize emin misiniz?';

$txt['membergroups_members_title'] = 'Grup Görüntüleniyor';
$txt['membergroups_members_no_members'] = 'Bu grup boş';
$txt['membergroups_members_add_title'] = 'Gruba üye ekle';
$txt['membergroups_members_add_desc'] = 'Eklenecek Üyelerin Listesi';
$txt['membergroups_members_add'] = 'Üye Ekle';
$txt['membergroups_members_remove'] = 'Gruptan Çıkar';

$txt['membergroups_postgroups'] = 'Gruplar';

$txt['membergroups_edit_groups'] = 'Üye Gruplarını Düzenle';
$txt['membergroups_settings'] = 'Üye Grubu Ayarları';
$txt['groups_manage_membergroups'] = 'Üye gruplarını düzenlemeye yetkili üye grupları';
$txt['membergroups_settings_submit'] = 'Kaydet';
$txt['membergroups_select_permission_type'] = 'İzin profilini seç';
$txt['membergroups_images_url'] = '{tema adresi}/images/';
$txt['membergroups_select_visible_boards'] = 'Bölümleri göster';

$txt['admin_browse_approve'] = 'Hesapları onay bekleyen üyeler';
$txt['admin_browse_approve_desc'] = 'Burada hesaplarının onaylanmasını bekleyen tüm üyelerle ilgili işlem yapabilirsiniz.';
$txt['admin_browse_activate'] = 'Hesapları aktivasyon bekleyen üyeler';
$txt['admin_browse_activate_desc'] = 'Burada hesaplarını aktive etmemiş tüm üyeleri görebilirsiniz.';
$txt['admin_browse_awaiting_approval'] = 'Onay Bekleniyor <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Aktivasyon Bekleniyor <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Kullanıcı Adı';
$txt['admin_browse_email'] = 'E-Posta Adresi';
$txt['admin_browse_ip'] = 'IP Adresi';
$txt['admin_browse_registered'] = 'Kayıt Tarihi';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Seçilileri';
$txt['admin_browse_no_members_approval'] = 'Onay bekleyen hiç üye yok.';
$txt['admin_browse_no_members_activate'] = 'Üyeliklerini aktifleştirmemiş hiç kimse bulunmamakta.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'mek istiyor musunuz tüm seçili üyeleri?';
$txt['admin_browse_outstanding_warn'] = 'mek istiyor musunuz tüm etkilenmiş üyeleri?';
$txt['admin_browse_w_approve'] = 'Onayla';
$txt['admin_browse_w_activate'] = 'Aktifleştir';
$txt['admin_browse_w_delete'] = 'Sil';
$txt['admin_browse_w_reject'] = 'Kabul Etme';
$txt['admin_browse_w_remind'] = 'Hatırlat';
$txt['admin_browse_w_approve_deletion'] = 'Onayla (Silme İşlemini Onayla)';
$txt['admin_browse_w_email'] = 've e-posta gönder';
$txt['admin_browse_w_approve_require_activate'] = 'Onayla ve Aktivasyon İste';

$txt['admin_browse_filter_by'] = 'Filtrele';
$txt['admin_browse_filter_show'] = 'Görüntülenen';
$txt['admin_browse_filter_type_0'] = 'Aktifleştirilmemiş Yeni Hesaplar';
$txt['admin_browse_filter_type_2'] = 'Aktifleştirilmemiş E-Mail Değişiklikleri';
$txt['admin_browse_filter_type_3'] = 'Onaylanmamış Yeni Hesaplar';
$txt['admin_browse_filter_type_4'] = 'Onaylanmamış Hesap Silme İstekleri';
$txt['admin_browse_filter_type_5'] = 'Onaylanmamış \'Gerekli Yaşın Altındaki\' Hesaplar';

$txt['admin_browse_outstanding'] = 'Eski Üyelikler';
$txt['admin_browse_outstanding_days_1'] = '';
$txt['admin_browse_outstanding_days_2'] = 'günden fazla süredir üye olan kullanıcılar için';
$txt['admin_browse_outstanding_perform'] = 'Şu eylemi gerçekleştir';
$txt['admin_browse_outstanding_go'] = 'Eylemi Gerçekleştir';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Üyelik Kabul Edilmedi';
$txt['admin_approve_reject_desc'] = 'Üzgünüz ama ' . $context['forum_name'] . ' için yapmış olduğunuz üyelik talepi reddedildi.';
$txt['admin_approve_delete'] = 'Hesap Silindi';
$txt['admin_approve_delete_desc'] = '' . $context['forum_name'] . ' da bulunan hesabınız silinmiştir. Bunun nedeni hesabınızı aktifleştirmemeniz olabilir, bu durumda tekrar kayıt olabilirsiniz.';
$txt['admin_approve_remind'] = 'Kayıt Hatırlatması';
$txt['admin_approve_remind_desc'] = 'Bu forum daki üyeliğinizi hala aktifleştirmediniz';
$txt['admin_approve_remind_desc2'] = 'Lütfen üyeliğinizi aktifleştirmek için aşağıdaki link\'e tıklayın:';
$txt['admin_approve_accept_desc'] = 'Hesabınız forum yöneticisi arafından aktifleştirilmiştir, artık oturum açabilir veya mesaj atabilirsiniz.';
$txt['admin_approve_require_activation'] = '' . $context['forum_name'] . ' daki üyeliğiniz forum yöneticisi tarafından onaylanmıştır, ve mesaj atmaya başlanadan önce aktive edilmesi gerekmektedir.';

?>