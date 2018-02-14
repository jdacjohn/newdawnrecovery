<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'İzin Yönetimi';
$txt['permissions_modify'] = 'Düzenle';
$txt['permissions_access'] = 'İzinler';
$txt['permissions_allowed'] = 'İzni Var';
$txt['permissions_denied'] = 'İzni Yok';

$txt['permissions_switch'] = 'Değiştir';
$txt['permissions_global'] = 'Genel';
$txt['permissions_local'] = 'Yerel';

$txt['permissions_groups'] = 'Grupların İzinleri';
$txt['permissions_all'] = 'hepsi';
$txt['permissions_none'] = 'hiçbiri';
$txt['permissions_set_permissions'] = 'İzinleri ayarla';

$txt['permissions_with_selection'] = 'Seçilenle';
$txt['permissions_apply_pre_defined'] = 'Önceden ayarlanmış profilin izinlerini uygula';
$txt['permissions_select_pre_defined'] = 'Önceden ayarlanmış bir profil seçin';
$txt['permissions_copy_from_board'] = 'İzinleri bu bölümden kopyala';
$txt['permissions_select_board'] = 'Bir bölüm seç';
$txt['permissions_like_group'] = 'İzinleri bu gruba ayarla';
$txt['permissions_select_membergroup'] = 'Üye grubu seçin';
$txt['permissions_add'] = 'İzini Ekle';
$txt['permissions_remove'] = 'İzinleri Temizle';
$txt['permissions_deny'] = 'İzini Yasakla';
$txt['permissions_select_permission'] = 'Bir izin seçin';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'İzinleri düzenlemek için sadece bir seçenek seçin';
$txt['permissions_no_action'] = 'Eylem seçilmedi';
$txt['permissions_deny_dangerous'] = 'Bir veya daha çok izini yasaklama hakkınız var.\\nBu tehlikeli ve beklenmedik sonuçlara neden olabilir. Grup içindeki herkesin izinlerini yasaklıyorsunuz.\\n\\nDevam etmek istiyor musunuz?';

$txt['permissions_boards'] = 'Bölüm İzinleri';

$txt['permissions_modify_group'] = 'Grubu Düzele';
$txt['permissions_general'] = 'Genel İzinler';
$txt['permissions_board'] = 'Varsayılan Bölüm İzinleri';
$txt['permissions_commit'] = 'Değişiklikleri kaydet';
$txt['permissions_modify_local'] = 'Yerel İzinleri Düzenle';
$txt['permissions_on'] = 'bölümde';
$txt['permissions_local_for'] = 'Grup için yerel izinler';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = 'Kısaltmaların anlamı; \'İzinli\' (A), \'İzni Yok\' (X), veya <span style="color: red;">\'Yasakla\' (D)</span>.<br /><br />Eğer bir izni <span style="color: red;">\'Yasakla\' (D)</span> yaparsanız, herhangi bir üyenin veya moderatörün izinlerinide kısıtlamış olursunuz.<br />Bu yüzden, <span style="color: red;">\'Yasakla\' (D)</span> seçeneğini sadece <b>gerektiğinde</b> kullanın. Genelde bir izni kısıtlamak için \'İzini Yok\' (X) seçeneğiniz kullanmanız daha iyi olur.';

$txt['permissiongroup_general'] = 'Genel';
$txt['permissionname_view_stats'] = 'İstatistikleri görebilir';
$txt['permissionhelp_view_stats'] = 'İstatistikler Forum\'un tüm istatistiğini özetleyen bir sayfadır, üye sayısı, günlük gönderilen iletiler ve birçok En popüler 10 istatistiği. Buna izin verirseniz anasayfanın altında bir link eklencektir (\'[Diğer İstatistikler]\').';
$txt['permissionname_view_mlist'] = 'Üye listesini görebilir';
$txt['permissionhelp_view_mlist'] = 'Foruma kayıtlı olan tüm üyeleri gösterir. Bu liste sıralıdır ve arama yapılabilir. Ana sayfaya veya istatistik sayfasından Üye sayısına tıklayarak Üye listesini görebilir.';
$txt['permissionname_who_view'] = 'Kimlerin çevrimiçi olduğunu görebilir';
$txt['permissionhelp_who_view'] = 'Kişilerin kimlerin çevrimiçi olduğunu görebilmelerine olanak tanır. Bu izini çalıştırmak için \'Seçenekler ve Opsiyonlar\'dan Çevrimiçi Üyeler\'i etkinleştir seçeneğini etkinleştirmelidir. Bu izin yasaklansa bile üyeler kimin çevrimiçi olabildiklerini görebilecek fakat ne yaptıklarını göremeyeceklerdir.';
$txt['permissionname_search_posts'] = 'Arama yapabilir';
$txt['permissionhelp_search_posts'] = 'Arama izni kullanıcının görebildiği tüm odalar içinde arama yapabilmesini sağlar. Arama izni verildiği zaman forumun üst sütununa \'Arama\' butonu eklenecektir.';
$txt['permissionname_karma_edit'] = 'Kişilerin karmasını değiştirebilir';
$txt['permissionhelp_karma_edit'] = 'Karma bir üyenin popülerliğini göstermeye yarar. Bu özelliği kullanabilmeniz için \'Seçenekler ve Opsiyonlar\' kısmından izini ayarlamanız gerekir. Bu izin sayesinde kullanıcılar oy verebileceklerdir. Ziyaretçiler bu izinden mahrumdurlar.';

$txt['permissiongroup_pm'] = 'Kişisel İletiler';
$txt['permissionname_pm_read'] = 'Kişisel iletilerini okuyabilir';
$txt['permissionhelp_pm_read'] = 'Bu izin kullanıcıların Kişisel İleti bölümüne girip kişisel iletilerini okuyabilmelerini sağlar. İzin verilmeden kullanıcılar kişisel ileti gönderemez.';
$txt['permissionname_pm_send'] = 'Kişisel ileti gönderebilir';
$txt['permissionhelp_pm_send'] = 'Diğer kayıtlı kullanıcılara kişisel ileti gönderilebilinmesini sağlar. \'Özel mesajı oku\' iznini gerektirir.';

$txt['permissiongroup_calendar'] = 'Takvim';
$txt['permissionname_calendar_view'] = 'Takvime bakabilir';
$txt['permissionhelp_calendar_view'] = 'Takvim her ay olan doğum günleri,olaylar ve önemli günleri gösterir. Bu izin takvime girebilmeyi içerir. Bu izin onaylandığı zaman, ana sayfada gelecek doğum günleri,olayları vs.. gösteren bir buton belirecektir. Takvimin \'Seçenekler ve Opsiyonlar\'dan aktif kılınması gerekmektedir.';
$txt['permissionname_calendar_post'] = 'Takvime olay ekleyebilir';
$txt['permissionhelp_calendar_post'] = 'Olay belli bir gün olacağı duyurulan takvim öğesidir. Olayları oluşturma Takvimden yapılabilir. Olaylar sadece izin verilen kullanıcılar tarafından eklenebilir.';
$txt['permissionname_calendar_edit'] = 'Takvimdeki olayları düzenleyebilir';
$txt['permissionhelp_calendar_edit'] = 'Olay bitiş tarihinden sonra etkisiz hale gelir. Olaylar takvimde kırmızı(*) işaretine tıklanarak düzenlenebilir. Ancak düzenlemek için kullanıcının bu izinlere sahip olması gerekmektedir.';
$txt['permissionname_calendar_edit_own'] = 'Kendi olaylarını';
$txt['permissionname_calendar_edit_any'] = 'Herhangi bir olayı';

$txt['permissiongroup_maintenance'] = 'Forum Yönetimi';
$txt['permissionname_admin_forum'] = 'Forum ve veritabanını yönetebilir';
$txt['permissionhelp_admin_forum'] = 'Bu özellik sayesinde kullanıcılar:<ul><li>Forumun veritabanını ve temasını değiştirebilir</li><li>paket ayarlaması</li><li>forumu ve database ana öğelerini kullan </li><li>hata ve mod loglarını görüntüle</li></ul> Bu özelliği dikkatli kullanınız.';
$txt['permissionname_manage_boards'] = 'Bölüm ve kategorileri yönetebilir';
$txt['permissionhelp_manage_boards'] = 'Bu özellik odaların eklenmesini,düzenlenmesini ve kaldırılabilmesini içerir.';
$txt['permissionname_manage_attachments'] = 'Eklentiler ve avatarları yönetebilir';
$txt['permissionhelp_manage_attachments'] = 'Eklenti merkezine girişe izin verir. (Forumdaki tüm eklentilerin saklandığı ve silinebileceği yer).';
$txt['permissionname_manage_smileys'] = 'Gülümsemeleri ayarlayabilir';
$txt['permissionhelp_manage_smileys'] = 'Gülümseme merkezine girişe izin verir. Gülümsemeleri buradan ekleyip çıkarabilirsiniz.';
$txt['permissionname_edit_news'] = 'Haberleri düzenleyebilir';
$txt['permissionhelp_edit_news'] = 'Haber fonksiyonu her sayfada rastgele bir haber dizini çıkmasını sağlar. Bu özelliği kullanmak için forum ayarlarından etkin kılınız.';

$txt['permissiongroup_member_admin'] = 'Üye Yönetimi';
$txt['permissionname_moderate_forum'] = 'Forum üyelerini yönetebilir';
$txt['permissionhelp_moderate_forum'] = 'Tüm önemli üye yönetim ayarlarını içerir:<ul><li>üyelik yönetimine girmeyi</li><li>üye silmeyi</li><li>gizli olabilmeyi,IP tespit etmeyi</li><li>üyeliği aktif etmeyi</li><li>üye kabulü yapmayı</li><li>özel mesajları yasaklamayı</li><li>ve bir sürü ufak şeyi</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Üye gruplarını yönetebilir';
$txt['permissionhelp_manage_membergroups'] = 'Üye grupları yeniden düzenlenebilir ve yeni gruplar oluşturulabilir';
$txt['permissionname_manage_permissions'] = 'İzinleri yönetebilir';
$txt['permissionhelp_manage_permissions'] = 'Bir üye grubunun tüm izinlerini ayarlayabilmeyi sağlar';
$txt['permissionname_manage_bans'] = 'Yasaklı listesini yönetebilir';
$txt['permissionhelp_manage_bans'] = 'IP, Host adı veya e-posta adresi ile yasaklı listesine girdi ekleyebilir veya çıkarabilirsiniz. Yasaklı üyelerin hata iletilerini görebilmenizi ve silebilmenizi sağlar.';
$txt['permissionname_send_mail'] = 'Üyelere e-posta gönderebilir';
$txt['permissionhelp_send_mail'] = 'Belli üye gruplarına, üyelere veya tüm foruma e-posta / kişisel ileti sağlar (sonuncusu \'Kişisel İleti Gönder\' iznini gerektirir).';

$txt['permissiongroup_profile'] = 'Profil';
$txt['permissionname_profile_view'] = 'Profil özetine ve istatistiğine bakabilir';
$txt['permissionhelp_profile_view'] = 'Profiline bakılan kullanıcı hakkındaki istatistiklerin ve ufak bir özetin gösterilmesini sağlar..';
$txt['permissionname_profile_view_own'] = 'Kendi profiline';
$txt['permissionname_profile_view_any'] = 'Herhangi bir profile';
$txt['permissionname_profile_identity'] = 'Hesap ayarlarını düzenleyebilir';
$txt['permissionhelp_profile_identity'] = 'Hesap yönetim ayarları şifre, profil, e-posta adresi, üye grubu ve tercih edilen dil gibi basit işlemleri içerir.';
$txt['permissionname_profile_identity_own'] = 'Kendi hesabını';
$txt['permissionname_profile_identity_any'] = 'Herhangi bir hesabı';
$txt['permissionname_profile_extra'] = 'Forum profil bilgilerini düzenleyebilir';
$txt['permissionhelp_profile_extra'] = 'Ek profil ayarları. Avatar, tema seçenekleri, hatırlatmalar ve kişisel iletiler dahil.';
$txt['permissionname_profile_extra_own'] = 'Kendi profilini';
$txt['permissionname_profile_extra_any'] = 'Herhangi bir profili';
$txt['permissionname_profile_title'] = 'Kişisel başlığını değiştirebilir';
$txt['permissionhelp_profile_title'] = 'Kullanıcı adının altında yazan ismi belirtir.';
$txt['permissionname_profile_title_own'] = 'Kendi profilinin';
$txt['permissionname_profile_title_any'] = 'Herhangi bir profili';
$txt['permissionname_profile_remove'] = 'Hesap silebilir';
$txt['permissionhelp_profile_remove'] = 'Kendi üyeliğini silebilme hakkını verir. \'Kendi Üyeliği\' kısmı ayarlandığında.';
$txt['permissionname_profile_remove_own'] = 'Kendi hesabını';
$txt['permissionname_profile_remove_any'] = 'Herhangi bir hesabı';
$txt['permissionname_profile_server_avatar'] = 'Sunucudan bir avatar seçebilir';
$txt['permissionhelp_profile_server_avatar'] = 'Bu özellik kullanıcının sunucuda bulunan avatar\'ları kullanabilmesine olanak tanır.';
$txt['permissionname_profile_upload_avatar'] = 'Sunucuya avatar yükleyebilir';
$txt['permissionhelp_profile_upload_avatar'] = 'Bu özellik kullanıcının kişisel avatar\'ını sunucuya yükleyebilmesine olanak tanır.';
$txt['permissionname_profile_remote_avatar'] = 'Uzaktan avatar çağırabilir';
$txt['permissionhelp_profile_remote_avatar'] = 'Avatar\'lar sayfanın açılış hızını etkileyebileceği için belli üye gruplarının dışarıdan avatar çağırması engellenebilir.';

$txt['permissiongroup_general_board'] = 'Genel';
$txt['permissionname_moderate_board'] = 'Bölüm yönetimi';
$txt['permissionhelp_moderate_board'] = 'Bölüm Yönetim izni moderatörlere birkaç ufak özellik daha ekler. Kilitli konulara yanıt verebilme, anket sonuçlarını görebilme ve anket tarihini düzenleyebilme gibi.';

$txt['permissiongroup_topic'] = 'Konular';
$txt['permissionname_post_new'] = 'Yeni konular gönderebilir';
$txt['permissionhelp_post_new'] = 'Bu izin sadece yeni konu göndermesine izin veriri. İletilere yanıt verme yetkisini birlikte getirmez';
$txt['permissionname_merge_any'] = 'Herhangi bir konuyu birleştirebilir';
$txt['permissionhelp_merge_any'] = 'Konuyu başka bir konu ile birleştirebilir. İletilerin sıralanması tarihlerine göre olacaktır. Konu birleştirme izni olanlar istedikleri gibi konuları birleştirebilirler.';
$txt['permissionname_split_any'] = 'Herhangi bir konuyu bölebilir';
$txt['permissionhelp_split_any'] = 'Konuyu ikiye ayırarak farklı konular oluşturabilir.';
$txt['permissionname_send_topic'] = 'Konuları arkadaşlarına gönderebilir';
$txt['permissionhelp_send_topic'] = 'Bu izin kullanıcıların bazı konuları arkadaşlarının e-posta adresine göndermesine izin verir.';
$txt['permissionname_make_sticky'] = 'Konuları sabitleyebilir';
$txt['permissionhelp_make_sticky'] = 'Kalıcı konular odaların en üstüne yerleştirilmiş konulardır. Önemli mesajlar veya duyurular için yararlı olabilir.';
$txt['permissionname_move'] = 'Konuları taşıyabilir';
$txt['permissionhelp_move'] = 'Konuyu başka bir bölüme taşıyabilir. Konuyu taşıdığı yere erişimi olmalıdır.';
$txt['permissionname_move_own'] = 'Kendi konularını';
$txt['permissionname_move_any'] = 'Herhangi bir konuyu';
$txt['permissionname_lock'] = 'Konuları kilitleyebilir';
$txt['permissionhelp_lock'] = 'Bu izin üyelerin konuları kilitleyebilmelerine olanak tanır. Bu sayede kimse konuya ileti göndermeye devam edemez. Sadece \'Bölüm Yönetimi\' izni bulunanlar ileti gönderebilirler.';
$txt['permissionname_lock_own'] = 'Kendi konularını';
$txt['permissionname_lock_any'] = 'Herhangi bir konuyu';
$txt['permissionname_remove'] = 'Konuları silebilir';
$txt['permissionhelp_remove'] = 'Konuları toptan sil. Unutmayın konudaki belli iletileri silmek için kullanılmaz!';
$txt['permissionname_remove_own'] = 'Kendi konularını';
$txt['permissionname_remove_any'] = 'Herhangi bir konuyu';
$txt['permissionname_post_reply'] = 'Konulara yanıt verebilir';
$txt['permissionhelp_post_reply'] = 'Bu izin konuların yanıtlanabilmelerine izin verir.';
$txt['permissionname_post_reply_own'] = 'Kendi konularına';
$txt['permissionname_post_reply_any'] = 'Herhangi bir konuya';
$txt['permissionname_modify_replies'] = 'Konusundaki yanıtları düzenleyebilir';
$txt['permissionhelp_modify_replies'] = 'Kullanıcıların kendi konularında bulunan iletileri düzenleyebilmelerini sağlar.';
$txt['permissionname_delete_replies'] = 'Konusundaki yanıtları silebilir';
$txt['permissionhelp_delete_replies'] = 'Kullanıcıların kendi konularında bulunan iletileri silebilmelerini sağlar.';
$txt['permissionname_announce_topic'] = 'Konuları duyuru olarak gönderebilir';
$txt['permissionhelp_announce_topic'] = 'Konuların e-posta yoluyla belirlenmiş üyelere gönderilebilmelerini sağlar.';

$txt['permissiongroup_post'] = 'İletiler';
$txt['permissionname_delete'] = 'İletileri kaldırabilir';
$txt['permissionhelp_delete'] = 'İletileri kaldırabilir. Konunun ilk iletisinin silinmesine izin vermez.';
$txt['permissionname_delete_own'] = 'Kendi iletilerini';
$txt['permissionname_delete_any'] = 'Herhangi bir iletiyi';
$txt['permissionname_modify'] = 'İletileri düzenleyebilir';
$txt['permissionhelp_modify'] = 'İletilerin düzenlenebilmesini sağlar.';
$txt['permissionname_modify_own'] = 'Kendi iletisini';
$txt['permissionname_modify_any'] = 'Herhangi bir iletiyi';
$txt['permissionname_report_any'] = 'İletileri moderatöre rapor edebilir';
$txt['permissionhelp_report_any'] = 'Tüm iletilere bir bağlantı yerleştirir. Bu bağlantı sayesinde bahsi geçen ileti moderatöre kolay bir şekilde rapor edilebilir.';

$txt['permissiongroup_poll'] = 'Anketler';
$txt['permissionname_poll_view'] = 'Anketleri görebilir';
$txt['permissionhelp_poll_view'] = 'Kullanıcıların anketi görmesine izin verir. Bu izin etkin değilse, kullanıcı sadece konuyu görür.';
$txt['permissionname_poll_vote'] = 'Anketleri oylayabilir';
$txt['permissionhelp_poll_vote'] = 'Kayıtlı kullanıcıların tek oy kullanmalarını sağlar.';
$txt['permissionname_poll_post'] = 'Yeni anket başlatabilir';
$txt['permissionhelp_poll_post'] = 'Kullanıcıların yeni bir anket göndermesine izin verir.';
$txt['permissionname_poll_add'] = 'Konulara anket ekleyebilir';
$txt['permissionhelp_poll_add'] = 'Konular açıldıktan sonra anket ekleyebilmeyi sağlar. Konunun ilk mesajını düzenleyebilme izinleri gerekir.';
$txt['permissionname_poll_add_own'] = 'Kendi konularına';
$txt['permissionname_poll_add_any'] = 'Herhangi bir konuya';
$txt['permissionname_poll_edit'] = 'Anketleri düzenleyebilir';
$txt['permissionhelp_poll_edit'] = 'Anketteki seçeneklerin düzenlenebilmesini veya sıfırlanabilmesini sağlar. Oyları ve bitiş tarihini değiştirmek için \'Bölüm yönetimi\' iznine sahip olmak gerekir.';
$txt['permissionname_poll_edit_own'] = 'Kendi anketlerini';
$txt['permissionname_poll_edit_any'] = 'Herhangi bir anketi';
$txt['permissionname_poll_lock'] = 'Anketleri kilitleyebilir';
$txt['permissionhelp_poll_lock'] = 'Ankete başka oy verilmesini önlemek için kilitleyebilir.';
$txt['permissionname_poll_lock_own'] = 'Kendi anketlerini';
$txt['permissionname_poll_lock_any'] = 'Herhangi bir anketi';
$txt['permissionname_poll_remove'] = 'Anketleri silebilir';
$txt['permissionhelp_poll_remove'] = 'Kullanıcıların anketi kaldırmasına izin verir.';
$txt['permissionname_poll_remove_own'] = 'Kendi anketlerini';
$txt['permissionname_poll_remove_any'] = 'Herhangi bir anketi';

$txt['permissiongroup_notification'] = 'Haberdar Edilme';
$txt['permissionname_mark_any_notify'] = 'Yanıtlardan haberdar edilebilir';
$txt['permissionhelp_mark_any_notify'] = 'Kullanıcılara kayıt oldukları konuya gelen her iletide e-posta gönderilir.';
$txt['permissionname_mark_notify'] = 'Yeni konulardan haberdar edilebilir';
$txt['permissionhelp_mark_notify'] = 'Yeni konularda haber edilme sayesinde her yeni konu açıldığı zaman e-posta yoluyla haber edilirler.';

$txt['permissiongroup_attachment'] = 'Eklentiler';
$txt['permissionname_view_attachments'] = 'Eklentideki dosyaları görebilir';
$txt['permissionhelp_view_attachments'] = 'Eklentiler iletelere eklenen dosyalardır. Bu özellik \'Özellikler ve Seçenekler\' kısmında değişiklik yapılarak ayarlanabilir. Eklentilere direkt ulaşılmadığı için izinlerden istemediğiniz kullanıcılar tarafından download edilebilmesini engelleyebilirisiniz.';
$txt['permissionname_post_attachment'] = 'İletilerine dosya ekleyebilir';
$txt['permissionhelp_post_attachment'] = 'Eklentiler iletilere eklenen dosyalardır. Tek iletide birden fazla eklenti olabilir.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'İzin Ayarları';
$txt['groups_manage_permissions'] = 'İzin ayarlarını değiştirmeye yetkili kullanıcı grupları';
$txt['permission_settings_submit'] = 'Kaydet';
$txt['permission_settings_enable_deny'] = 'İzinlerin yasaklanmasını aktif etmek için bu seçeneği işaretleyin';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Bu seçeneğin kapatılması \\\'Yasakla\\\' izinlerinin hepsini \\\'İzin Verme\\\' şeklinde değiştirecektir.';
$txt['permission_by_membergroup_desc'] = 'Burada her üye grubu için genel ayarları değiştirebilirsiniz. Bu izinler yerel izinlerle kısıtlanmamış diğer tüm bölümler için varsayılan izinler olacaklardır.';
$txt['permission_by_board_desc'] = 'Burada bir bölümün kendi yerel izinlerine mi sahip olacağını yoksa ana forum rejimine mi sadık kalacağını seçebilirsiniz. Yerel izinlerin seçilmesi, ilgili bölüm için üye gruplarının o bölümde hangi yetkilere sahip olacağının tek tek belirlenebilmesi anlamına gelir.';
$txt['permission_settings_desc'] = 'Bu bölümde kimlerin izinleri değiştirme iznine sahip olacağını - izin sisteminin ne kadar karmaşıklaşacağını seçebilirsiniz.';
$txt['permission_settings_enable_postgroups'] = 'İleti sayısına bağlı gruplar için izinlerin ayarlanabilmesine izin ver';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Bu seçeneğin kapatılması, şu anda mesaj sayısına bağlı gruplar için ayarlarlanmış tüm izinleri sıfırlayacaktır.';
$txt['permission_settings_enable_by_board'] = 'Gelişmiş bölüm tabanlı (yerel) izinlere izin ver';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Bu seçeneğin kapatılması, tüm yerel izinlerin sıfırlanmasına neden olacaktır.';

?>