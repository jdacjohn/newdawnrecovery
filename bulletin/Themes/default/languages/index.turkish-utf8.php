<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'tr_TR.utf8';
$txt['lang_dictionary'] = 'tr';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi');
$txt['days_short'] = array('Paz', 'Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık');
$txt['months_titles'] = array(1 => 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık');
$txt['months_short'] = array(1 => 'Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Ekm', 'Ksm', 'Ara');

$txt['newmessages0'] = 'tane yeni';
$txt['newmessages1'] = 'tanesi yeni';
$txt['newmessages3'] = 'Yeni';
$txt['newmessages4'] = '';

$txt[2] = 'Admin';

$txt[10] = 'Kaydet';

$txt[17] = 'Değiştir';
$txt[18] = $context['forum_name'];
$txt[19] = 'Üye';
$txt[20] = 'Forum Adı';
$txt[21] = 'Mesaj';
$txt[22] = 'Son mesaj';

$txt[24] = '(Konu Yok)';
$txt[26] = 'Mesaj Sayısı';
$txt[27] = 'Üyelik Bilgileri';
$txt[28] = 'Ziyaretçi';
$txt[29] = 'Gönderen';
$txt[30] = '';
$txt[31] = 'Sil';
$txt[33] = 'Yeni Konu Başlat';

$txt[34] = 'Giriş Yap';
// Use numeric entities in the below string.
$txt[35] = 'Kullanıcı Adı';
$txt[36] = 'Şifre';

$txt[40] = 'Kullanıcı adı bulunamadı.';

$txt[62] = 'Bölüm Moderatörü';
$txt[63] = 'Konuyu Sil';
$txt[64] = 'Konu';
$txt[66] = 'Mesajı değiştir';
$txt[68] = 'Adı';
$txt[69] = 'E-Posta';
$txt[70] = 'Konu Başlığı';
$txt[72] = 'Mesaj';

$txt[79] = 'Profil';

$txt[81] = 'Şifrenizi seçin';
$txt[82] = 'Şifreyi tekrarlayın';
$txt[87] = 'Üyelik Seviyesi';

$txt[92] = 'Profil bilgileri';
$txt[94] = 'Toplam';
$txt[95] = 'Mesaj';
$txt[96] = 'Web Sitesi';
$txt[97] = 'Kayıt';

$txt[101] = 'Mesaj Listesi';
$txt[102] = 'Duyurular';
$txt[103] = 'Ana Sayfa';

$txt[104] = 'Konuyu Kilitle/Aç';
$txt[105] = 'Gönder';
$txt[106] = 'Bir hata meydana geldi!';
$txt[107] = '\'de';
$txt[108] = 'Çıkış';
$txt[109] = 'Başlatan';
$txt[110] = 'Yanıtlar';
$txt[111] = 'Son Mesaj';
$txt[114] = 'Yönetici Girişi';
// Use numeric entities in the below string.
$txt[118] = 'Konu';
$txt[119] = 'Yardım';
$txt[121] = 'Mesajı Sil';
$txt[125] = 'Haberdar et';
$txt[126] = 'Bu konuya mesaj gönderilirse e-posta ile bildirilsin mi';
// Use numeric entities in the below string.
$txt[130] = "Teşekkürler\n" . $context['forum_name'] . '';
$txt[131] = 'Cevaplardan haberdar et';
$txt[132] = 'Konuyu taşı';
$txt[133] = 'Şuraya taşı';
$txt[139] = 'Sayfa';
$txt[140] = 'Son ' . $modSettings['lastActive'] . ' dakika içinde aktif olan üyeler';
$txt[144] = 'Özel Mesajlar';
$txt[145] = 'Bu mesajı alıntı ile cevapla';
$txt[146] = 'Yanıtla';

$txt[151] = 'Mesaj Yok...';
$txt[152] = 'size ait';
$txt[153] = 'mesaj var';
$txt[154] = 'Bu mesajı sil';

$txt[158] = 'Online Üyeler';
$txt[159] = 'Özel Mesaj';
$txt[160] = 'Gitmek istediğiniz yer';
$txt[161] = 'git';
$txt[162] = 'Bu konuyu silmek istediğinden emin misin?';
$txt[163] = 'Evet';
$txt[164] = 'Hayır';

$txt[166] = 'Arama Sonuçları';
$txt[167] = 'Arama Bitti';
$txt[170] = 'Üzgünüm, aradığınız bulunamadı.';
$txt[176] = 'üzerinde';

$txt[182] = 'Ara';
$txt[190] = 'Hepsi';

$txt[193] = 'Geri';
$txt[194] = 'Hatırlar';
$txt[195] = 'Konuyu başlatan';
$txt[196] = 'Konu Başlığı';
$txt[197] = 'Gönderen';
$txt[200] = 'Kayıtlı olan üyeler';
$txt[201] = 'Hoş geldiniz';
$txt[208] = 'Yönetim Merkezi';
$txt[211] = 'Son Düzenleme';
$txt[212] = 'Bu konu hakkında haber verilmesini iptal etmek istiyor musun?';

$txt[214] = 'Son Mesajlar';

$txt[227] = 'Yer';
$txt[231] = 'Cinsiyet';
$txt[233] = 'Kayıt Tarihi';

$txt[234] = 'En son gönderilen mesajları göster';
$txt[235] = 'en son mesaj gönderilen konudur';

$txt[238] = 'Bay';
$txt[239] = 'Bayan';

$txt[240] = 'Kullanıcı adında geçersiz karakter kullanıldı.';

$txt['welcome_guest'] = 'Hoşgeldiniz, <b>' . $txt[28] . '</b>.Lütfen <a href="' . $scripturl . '?action=login">giriş yapın</a> veya <a href="' . $scripturl . '?action=register">kayıt olun</a>.';
$txt['welcome_guest_activate'] = '<br />E-posta adresinize aktivasyon iletisi gelmediyse lütfen <a href="' . $scripturl . '?action=activate">buraya tıklayın</a>.';
$txt['hello_member'] = 'Merhaba';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Hoş Geldiniz';
$txt[247] = 'Merhaba';
$txt[248] = 'Hoş Geldiniz,';
$txt[249] = 'Lütfen';
$txt[250] = 'Geri';
$txt[251] = 'Gitmek istediğiniz yer';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Gönderen';

$txt[287] = 'Gülümseme';
$txt[288] = 'Kızgın';
$txt[289] = 'Kahkaha';
$txt[290] = 'Kahkaha';
$txt[291] = 'Üzgün';
$txt[292] = 'Göz kırpan';
$txt[293] = 'Sırıtan';
$txt[294] = 'Şaşırmış';
$txt[295] = 'Karizmatik';
$txt[296] = 'Ney';
$txt[450] = 'Masum';
$txt[451] = 'Dil çıkaran';
$txt[526] = 'Utandım';
$txt[527] = 'Sustum';
$txt[528] = 'Kararsız';
$txt[529] = 'Öpücük';
$txt[530] = 'Ağlayan';

$txt[298] = 'Moderatör';
$txt[299] = 'Moderatörler';

$txt[300] = 'Konuları okunmuş say.';
$txt[301] = 'Görüntülenme';
$txt[302] = 'Yeni';

$txt[303] = 'Tüm Üyeler';
$txt[305] = 'Bak';
$txt[307] = 'E-Posta';

$txt[308] = 'Üyeler Listelendi';
$txt[309] = 'in';
$txt[310] = 'Toplam üye';
$txt[311] = 'e kadar';
$txt[315] = 'Şifremi Unuttum';

$txt[317] = 'Tarih';
// Use numeric entities in the below string.
$txt[318] = 'Kimden';
$txt[319] = 'Konu';
$txt[322] = 'Yenile';
$txt[324] = 'Kime';

$txt[330] = 'Konu';
$txt[331] = 'Üyeler';
$txt[332] = 'Üye Listesi';
$txt[333] = 'Yeni mesaj var';
$txt[334] = 'Yeni mesaj yok';

$txt['sendtopic_send'] = 'Gönder';

$txt[371] = 'Zaman dengesi';
$txt[377] = 'veya';

$txt[398] = 'Üzgünüm, eşleşme bulunamadı.';

$txt[418] = 'Bildiri';

$txt[430] = 'Üzgünüm %s, bu forumda yasaklandınız.';

$txt[452] = 'Tüm Mesajları Okunmuş Say';

$txt[454] = 'Beğenilen konu (' . $modSettings['hotTopicPosts'] . '\'dan fazla mesaj içermekte)';
$txt[455] = 'Çok beğenilen konu (' . $modSettings['hotTopicVeryPosts'] . '\'den fazla mesaj içermekte)';
$txt[456] = 'Kilitli Konu';
$txt[457] = 'Normal Konu';
$txt['participation_caption'] = 'İletinizin bulunduğu konu';

$txt[462] = 'Git';

$txt[465] = 'Yazdır';
$txt[467] = 'Profil';
$txt[468] = 'Konu Özeti';
$txt[470] = 'Yok';
$txt[471] = 'Mesaj';
$txt[473] = 'Bu kullanıcı adı başka bir üye tarafından kullanılmaktadır.';

$txt[488] = 'Toplam Üye Sayısı';
$txt[489] = 'Toplam Mesaj Sayısı';
$txt[490] = 'Toplam Konu Sayısı';

$txt[497] = 'Bağlı kalmak istediğin süre';

$txt[507] = 'Önizleme';
$txt[508] = 'Sürekli Bağlı Kal';

$txt[511] = 'Kayıtlı';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'Site';

$txt[525] = 'Gönderen:';

$txt[578] = 'saat';
$txt[579] = 'gün';

$txt[581] = ', yeni üyemiz.';

$txt[582] = 'Aranılacak';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Selam+Orda+mısın?';
$txt[604] = 'YIM';

$txt[616] = 'Site şuan bakım modunda...';

$txt[641] = 'Okunma Sayısı';
$txt[642] = 'defa';

$txt[645] = 'Forum İstatistikleri';
$txt[656] = 'Son üye';
$txt[658] = 'Toplam Kategori';
$txt[659] = 'Son mesaj';

$txt[660] = 'Size gönderilmiş';
$txt[661] = 'Şuana kadar gönderilmiş mesajları görmek için';
$txt[662] = 'buraya';
$txt[663] = 'tıklayın.';

$txt[665] = 'Toplam bölüm ';

$txt[668] = 'Sayfayı Yazdır';

$txt[679] = 'Buraya kullandığınız geçerli e-posta adresi girin';

$txt[683] = 'Ben bir tuhafım!';
$txt[685] = $context['forum_name'] . ' - Bilgiler';

$txt[707] = 'Bu Konuyu Gönder';

$txt['sendtopic_title'] = '&quot;%s&quot; başlıklı konuyu arkadaşınıza gönderiyorsunuz';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Selam %s,';
$txt['sendtopic_this_topic'] = 'Senden bu konuya göz atmanı istiyorum. "%s" on ' . $context['forum_name'] . '.  Görmek için linke tıklayabilirsin.';
$txt['sendtopic_thanks'] = 'Teşekkürler';
$txt['sendtopic_sender_name'] = 'Adınız';
$txt['sendtopic_sender_email'] = 'E-Posta adresiniz';
$txt['sendtopic_receiver_name'] = 'Alıcının adı';
$txt['sendtopic_receiver_email'] = 'Alıcının e-posta adresi';
$txt['sendtopic_comment'] = 'Yorum ekle';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Konuya birde yorum eklendi.';

$txt[721] = 'E-Posta adresimi gizle';

$txt[737] = 'Tümünü seç';

// Use numeric entities in the below string.
$txt[1001] = 'Veritabanı Hatası';
$txt[1002] = 'Lütfen tekrar deneyin. Eğer tekrar hata mesajı alırsanız, bu hatayı yöneticiye bildirin.';
$txt[1003] = 'Dosya';
$txt[1004] = 'Satır';
// Use numeric entities in the below string.
$txt[1005] = 'Veritabanınızda bir hata saptandı ve otomatik olarak onarım işlemi denendi. Eğer sorun devam ederse veya bu mesajı almaya devam ediyorsanız, lütfen sunucunuzla temas kurun.';
$txt['database_error_versions'] = '<b>Not:</b> Veritabanızın güncellemesi gerekiyor. Sizin dosyalarınızın şuanki sürümü ' . $forum_version . ', <em>ama</em> veritabanın sürümü ' . $modSettings['smfVersion'] . '. Upgrade.php\'yi çalıştırmanız tavsiye ediliyor.';
$txt['template_parse_error'] = 'Tema Ayrıştırma Hatası!';
$txt['template_parse_error_message'] = 'Tema içerisinde hatalı bir kod bulundu. Bu problem geçicidir, Lütfen daha sonra tekrar deneyin. Eğer sürekli bu iletiyle karşılaşıyorsanız yönetici ile iletişime geçiniz.<br /><br />Hatayı düzeltildikten sonra sayfayı <a href="javascript:location.reload();">yenileyiniz</a>.';
$txt['template_parse_error_details'] = '<tt><b>%1$s</b></tt> adındaki tema veya dil dosyasının yüklenmesinde sorun var. Lütfen söz dizimini denetleyin ve tekrar deneyin, tek tire işaretleri önünde tek yatık çizgiler olmalı (<tt>\'</tt>) ve tek yatık çizgi kullanacaksanız iki tane yazmalısınız (<tt>\\</tt>). PHP kodlarında hatayı daha belirgin görmek istiyorsanız, <a href="' . $boardurl . '%1$s">doğrudan dosyaya erişmeyi</a> deneyin.<br /><br />Tekrar denemek istiyorsanız <a href="javascript:location.reload();">sayfayı yenileyin</a> veya <a href="' . $scripturl . '?theme=1">varsayılan temayı kullanın</a>.';

$txt['smf10'] = '<b>Bugün</b>  ';
$txt['smf10b'] = '<b>Dün</b>  ';
$txt['smf20'] = 'Yeni Anket';
$txt['smf21'] = 'Soru';
$txt['smf23'] = 'Oyla';
$txt['smf24'] = 'Toplam oy';
$txt['smf25'] = 'Kısayollar: Mesajı gönderme; ALT+S - Mesajı önizlemek için; ALT+P';
$txt['smf29'] = 'Sonuçları görüntüle';
$txt['smf30'] = 'Oylamayı Kilitle';
$txt['smf30b'] = 'Oylamanın Kilidini Kaldır';
$txt['smf39'] = 'Anketi düzenle';
$txt['smf43'] = 'Anket';
$txt['smf47'] = '1 Gün';
$txt['smf48'] = '1 Hafta';
$txt['smf49'] = '1 Ay';
$txt['smf50'] = 'Her zaman';
$txt['smf52'] = 'Kullanıcı adınızı, parolanızı ve aktif kalma süresini giriniz';
$txt['smf53'] = '1 Saat';
$txt['smf56'] = 'TAŞINDI';
$txt['smf57'] = 'Lütfen konuyu neden taşıdığınıza dair<br />bir açıklama yazın.';
$txt['smf60'] = 'Üzgünüm, karma değişikliği yapmak için yeterli mesaja sahip değilsiniz - en azından gerektiği kadarına ';
$txt['smf62'] = 'Üzgünüm, bir müddet beklemeden karma eylemi gerçekleştiremezsiniz.';
$txt['smf82'] = 'Forumun';
$txt['smf88'] = '';
$txt['smf96'] = 'Sabit Konu';

$txt['smf138'] = 'Sil';

$txt['smf199'] = 'Özel Mesajlarınız';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Daha fazla istatistik]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kod';
$txt['smf239'] = 'Alıntı sahibi';
$txt['smf240'] = 'Alıntı';

$txt['smf251'] = 'Konuyu böl';
$txt['smf252'] = 'Konuları birleştir';
$txt['smf254'] = 'Konunun Yeni Başlığı';
$txt['smf255'] = 'Sadece bu gönderileni böl.';
$txt['smf256'] = 'Konuyu bu mesaj ve bu mesaj sonrasından böl.';
$txt['smf257'] = 'Bölünecek mesajları seçin.';
$txt['smf258'] = 'Yeni Konu';
$txt['smf259'] = 'Konu başarılı şekilde bölünmüştür.';
$txt['smf260'] = 'Konu Kaynağı';
$txt['smf261'] = 'Lütfen hangi mesajları bölmek istediğinizi seçin';
$txt['smf264'] = 'Konuların birleştirilmesi tamamlandı.';
$txt['smf265'] = 'Yeni birleştirilen konu';
$txt['smf266'] = 'Birleştirilecek Konu';
$txt['smf267'] = 'Hedef Bölüm';
$txt['smf269'] = 'Hedef Konu';
$txt['smf274'] = 'Birleştirmek istediğinden emin misin';
$txt['smf275'] = 'ile';
$txt['smf276'] = 'Bu fonksiyon iki konunun birleştirilmesini sağlar.Zamana göre sınıflandırılması yapılacaktır. Bu yüzden en yeni olan ilk konu mesajı olarak birleştirilcektir';

$txt['smf277'] = 'Konuyu sabitle';
$txt['smf278'] = 'Sabitlemeyi kaldır';
$txt['smf279'] = 'Kilitle';
$txt['smf280'] = 'Kilidi aç';

$txt['smf298'] = 'Gelişmiş Arama';

$txt['smf299'] = 'GÜVENLİK TEHLİKESİ:';
$txt['smf300'] = 'Silmeniz gereken dosya: ';

$txt['smf301'] = 'Bu Sayfa ';
$txt['smf302'] = ' Saniyede ';
$txt['smf302b'] = ' Sorgu ile Oluşturuldu';

$txt['smf315'] = 'Bu mesajı yetkililere bildir.';

$txt['online2'] = 'Çevrimiçi';
$txt['online3'] = 'Çevrimdışı';
$txt['online4'] = 'Özel Mesaj (Online)';
$txt['online5'] = 'Özel Mesaj (Offline)';
$txt['online8'] = 'Durumu';

$txt['topbottom4'] = 'Yukarı git';
$txt['topbottom5'] = 'Aşağı git';

if ($_SERVER['QUERY_STRING']=='')
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> :: <a href="http://www.siteground.com">Hosting Services for SMF by SiteGround</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}
else
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}


$txt['calendar3'] = 'Doğum Günleri:';
$txt['calendar4'] = 'Etkinlikler:';
$txt['calendar3b'] = 'Yaklaşan Doğum Günleri:';
$txt['calendar4b'] = 'Yaklaşan Etkinlikler:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Ay:';
$txt['calendar10'] = 'Yıl:';
$txt['calendar11'] = 'Gün:';
$txt['calendar12'] = 'Etkinlik Başlığı:';
$txt['calendar13'] = 'Ekleneceği Bölüm:';
$txt['calendar20'] = 'Etkinliği Düzenle';
$txt['calendar21'] = 'Bu Etkinlik Silinsin mi?';
$txt['calendar22'] = 'Etkinliği Sil';
$txt['calendar23'] = 'Etkinlik Gir';
$txt['calendar24'] = 'Takvim';
$txt['calendar37'] = 'Takvime ekle';
$txt['calendar43'] = 'Etkinliğe Bağla';
$txt['calendar47'] = 'Takvim';
$txt['calendar47b'] = 'Takvimde Bugün';
$txt['calendar51'] = 'Hafta';
$txt['calendar54'] = 'Süreceği Gün:';
$txt['calendar_how_edit'] = 'Etkinlikleri nasıl düzenleyeceksin?';
$txt['calendar_link_event'] = 'Mesaja Hatırlatma Bağla:';
$txt['calendar_confirm_delete'] = 'Bu hatırlatmayı silmek istediğinizden eminmisiniz ?';
$txt['calendar_linked_events'] = 'Bağlanılan Hatırlatmalar';

$txt['moveTopic1'] = 'Taşıma bilgilendirmesi ile ilgili konu aç';
$txt['moveTopic2'] = 'Konunun başlığını değiştir';
$txt['moveTopic3'] = 'Yeni konu';
$txt['moveTopic4'] = 'Tüm mesajın konu başlığını değiştir';

$txt['theme_template_error'] = '\'%s\' adlı teması yüklenemiyor.';
$txt['theme_language_error'] = '\'%s\' adlı dil dosyası yüklenemiyor.';

$txt['parent_boards'] = 'Alt Bölümler';

$txt['smtp_no_connect'] = 'SMTP sunucusuna bağlanılamadı';
$txt['smtp_port_ssl'] = 'SMTP bağlantı noktası yanlış; eğer sunucu SSL ise 465 olarak girin.';
$txt['smtp_bad_response'] = 'E-Posta sunucusundan yanıt alınamadı';
$txt['smtp_error'] = 'E-Posta yollanırken hata oluştu: ';
$txt['mail_send_unable'] = '\'%s\' adresine e-posta gönderilemedi.';

$txt['mlist_search'] = 'Üyelerde ara';
$txt['mlist_search2'] = 'Tekrar Ara';
$txt['mlist_search_email'] = 'E-Posta adresine göre ara';
$txt['mlist_search_messenger'] = 'MSN adresine göre ara';
$txt['mlist_search_group'] = 'Pozisyona göre ara';
$txt['mlist_search_name'] = 'İsme Göre Ara';
$txt['mlist_search_website'] = 'Web sitesine göre ara';
$txt['mlist_search_results'] = 'Arama sonuçları:';

$txt['attach_downloaded'] = 'Yükleme:';
$txt['attach_viewed'] = 'Gösterim:';
$txt['attach_times'] = 'kez';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Seçenekler';
$txt['never'] = 'Asla';
$txt['more'] = 'daha çok';

$txt['hostname'] = 'Host adı';
$txt['you_are_post_banned'] = 'Üzgünüz %s, yasaklı olduğunuz için normal veya kişisel ileti gönderemezsiniz.';
$txt['ban_reason'] = 'Sebep';

$txt['tables_optimized'] = 'Veritabanı tabloları en iyi hale getirildi.';

$txt['add_poll'] = 'Anket ekle';
$txt['poll_options6'] = 'Sadece %s adet seçim yapabilirsiniz.';
$txt['poll_remove'] = 'Anketi Kaldır';
$txt['poll_remove_warn'] = 'Konudan anketi kaldırmak istediğinizden emin misiniz?';
$txt['poll_results_expire'] = 'Sonuçlar oylama sona erdiğinde gösterilecektir';
$txt['poll_expires_on'] = 'Oylamanın kapancağı tarih:';
$txt['poll_expired_on'] = 'Oylama kapandı';
$txt['poll_change_vote'] = 'Oyu Kaldır';
$txt['poll_return_vote'] = 'Oylama seçenekleri';

$txt['quick_mod_remove'] = 'Seçilenleri kaldır';
$txt['quick_mod_lock'] = 'Seçilenleri kilitle';
$txt['quick_mod_sticky'] = 'Seçilenleri sabitle';
$txt['quick_mod_move'] = 'Seçilenleri taşı';
$txt['quick_mod_merge'] = 'Seçilenleri birleştir';
$txt['quick_mod_markread'] = 'Seçilenleri okundu say';
$txt['quick_mod_go'] = 'Git!';
$txt['quickmod_confirm'] = 'Emin misiniz?';

$txt['spell_check'] = 'İmla Kontrolü';

$txt['quick_reply_1'] = 'Hızlı Cevap';
$txt['quick_reply_2'] = '<i>Hızlı cevap</i>\'ı kullanarak hemen mesaj gönderebilirsin. Gülümseme ve kod kullanabilirsiniz.';
$txt['quick_reply_warning'] = 'UYARI: Bu konu Kilitlenmiştir!<br />Sadece yöneticiler yanıt yazabilir.';

$txt['notification_enable_board'] = 'Bu bölümde açılacak yeni konulardan haberdar edilmek istediğinize emin misiniz?';
$txt['notification_disable_board'] = 'Bu bölümde açılacak yeni konulardan haberdar edilmeyi iptal etmek istediğinize emin misiniz?';
$txt['notification_enable_topic'] = 'Bu konuya gönderilecek yeni iletilerden haberdar edilmek istediğinize emin misiniz?';
$txt['notification_disable_topic'] = 'Bu konuya gönderilecek yeni iletilerden haberdar edilmeyi iptal etmek istediğinize emin misiniz?';

$txt['rtm1'] = 'Moderatöre Bildir';

$txt['unread_topics_visit'] = 'Okunmamış son konular';
$txt['unread_topics_visit_none'] = 'Son ziyaretinizden beri yeni ileti gönderilmemiştir. <a href="' . $scripturl . '?action=unread;all">Tüm yeni iletileri görüntülemek için tıklayın.</a>';
$txt['unread_topics_all'] = 'Okumadığım tüm konular';
$txt['unread_replies'] = 'Değişiklik Olmuş Konular';

$txt['who_title'] = 'Kimler Çevrimiçi';
$txt['who_and'] = ' ve ';
$txt['who_viewing_topic'] = ' konuyu incelemekte.';
$txt['who_viewing_board'] = ' bölümü incelemekte.';
$txt['who_member'] = 'Üye';

$txt['powered_by_php'] = 'PHP Kullanıyor';
$txt['powered_by_mysql'] = 'MySQL Kullanıyor';
$txt['valid_html'] = 'HTML 4.01 Uyumlu!';
$txt['valid_xhtml'] = 'XHTML 1.0 Uyumlu!';
$txt['valid_css'] = 'CSS Uyumlu!';

$txt['guest'] = 'Ziyaretçi';
$txt['guests'] = 'Ziyaretçi';
$txt['user'] = 'Üye';
$txt['users'] = 'Üye';
$txt['hidden'] = 'Gizli';
$txt['buddy'] = 'Arkadaş';
$txt['buddies'] = 'Arkadaşlar';
$txt['most_online_ever'] = 'En Çok Çevrimiçi';
$txt['most_online_today'] = 'Bugün En Çok Çevrimiçi';

$txt['merge_select_target_board'] = 'Birleştirilmiş konunun oluşturulacağı bölüm';
$txt['merge_select_poll'] = 'Birleştirilecek konudaki anketi seçin';
$txt['merge_topic_list'] = 'Birleştirilecek konular';
$txt['merge_select_subject'] = 'Birleştirilmiş konunun başlığı';
$txt['merge_custom_subject'] = 'Özel başlık';
$txt['merge_enforce_subject'] = 'Tüm iletilerin başlığın değiştir';
$txt['merge_include_notifications'] = 'Haberdar edilme saklansın?';
$txt['merge_check'] = 'Birleştir?';
$txt['merge_no_poll'] = 'Anket yok';

$txt['response_prefix'] = 'Ynt: ';
$txt['current_icon'] = 'İleti İkonu';

$txt['smileys_current'] = 'Kullanılan gülümseme seti';
$txt['smileys_none'] = 'Gülümseme yok';
$txt['smileys_forum_board_default'] = 'Forum/Bölüm Standartı';

$txt['search_results'] = 'Arama Sonuçları';
$txt['search_no_results'] = 'Hiç sonuç bulunamadı';

$txt['totalTimeLogged1'] = 'Çevrimiçi olunan toplam süre: ';
$txt['totalTimeLogged2'] = ' gün, ';
$txt['totalTimeLogged3'] = ' saat ve ';
$txt['totalTimeLogged4'] = ' dakika.';
$txt['totalTimeLogged5'] = 'gün ';
$txt['totalTimeLogged6'] = 'saat ';
$txt['totalTimeLogged7'] = 'dk';

$txt['approve_thereis'] = 'Şu anda';
$txt['approve_thereare'] = 'Şu anda';
$txt['approve_member'] = 'bir üye';
$txt['approve_members'] = 'üye';
$txt['approve_members_waiting'] = 'onay beklemektedir.';

$txt['notifyboard_turnon'] = 'Bu bölümde yeni bir konu açıldığında e-posta ile uyarı alacaksınız.\\n\\nDevam etmek istiyor musunuz?';
$txt['notifyboard_turnoff'] = 'Artık bu bölüme yeni konular eklendiğinde e-posta ile uyarı almayacaksınız.\\n\\nDevam etmek istiyor musunuz?';

$txt['activate_code'] = 'Aktivasyon kodunuz';

$txt['find_members'] = 'Üye Ara';
$txt['find_username'] = 'Adı, kullanıcı adı, veya e-posta adresi';
$txt['find_buddies'] = 'Sadece Arkadaşları Göster?';
$txt['find_wildcards'] = 'Joker Karakterleri: * ve ?';
$txt['find_no_results'] = 'Hiç sonuç bulunamadı';
$txt['find_results'] = 'Sonuçlar';
$txt['find_close'] = 'Kapat';

$txt['unread_since_visit'] = 'Yeni gönderilen iletileri göster.';
$txt['show_unread_replies'] = 'İletilerime yazılan yeni yanıtları göster.';

$txt['change_color'] = 'Rengi Değiştir';

$txt['quickmod_delete_selected'] = 'Seçilenleri sil';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Bir veya daha fazla kişisel ileti aldınız.\\nGörüntülemek istiyor musunuz?';

$txt['previous_next_back'] = '&laquo; önceki';
$txt['previous_next_forward'] = 'sonraki &raquo;';

$txt['movetopic_auto_board'] = '[BÖLÜM]';
$txt['movetopic_auto_topic'] = '[KONU ADRESİ]';
$txt['movetopic_default'] = 'Bu konu ' . $txt['movetopic_auto_board'] . " isimli bölüme taşınmıştır.\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Alanı gizle/göster';

$txt['mark_unread'] = 'Okunmadı say';

$txt['ssi_not_direct'] = 'Lüften SSI.php dosyasına doğrudan URL olarak erişmeyin; SSI fonksiyonuna erişmek istiyorsanız \'?ssi_function=birsey\' yolunu kullanın.';
$txt['ssi_session_broken'] = 'SSI.php oturumu yükleyemedi!  Bu çıkış fonksiyonu veya diğer birkaç fonksiyonların işleyişinde sorunlara sebep olabilir - lütfen SSI.php\'yi içerten kodun sayfanın en başında olduğuna emin olun!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'İletiyi önizle';
$txt['preview_fetch'] = 'Önizleme oluşturuluyor...';
$txt['preview_new'] = 'Yeni ileti';
$txt['error_while_submitting'] = 'İleti gönderilirken şu hatalar oluştu:';

$txt['split_selected_posts'] = 'Seçili iletiler';
$txt['split_selected_posts_desc'] = 'Aşağıdaki iletiler bölme işlemi tamamlandıktan sonra yeni bir konu oluşturacaklar.';
$txt['split_reset_selection'] = 'seçimi sıfırla';

$txt['modify_cancel'] = 'İptal';
$txt['mark_read_short'] = 'Okunmuş Say';

$txt['pm_short'] = 'İletilerim';
$txt['hello_member_ndt'] = 'Merhaba';

$txt['ajax_in_progress'] = 'Yükleniyor...';

?>