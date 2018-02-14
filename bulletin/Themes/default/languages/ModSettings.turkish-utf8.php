<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Bu sayfa sana forumun mod ayarlarını, genel ayarlarını ve bazı basit ayarları yapmana izin verir. Diğer seçenekler için <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">tema ayarlarına</a> bakın.  Yardım ikonlarına tıklayarak ayarlar hakkında bilgi alabilirsiniz.';

$txt['mods_cat_features'] = 'Temel Özellikler';
$txt['pollMode'] = 'Anketler';
$txt['smf34'] = 'Kapalı';
$txt['smf32'] = 'Aktif';
$txt['smf33'] = 'Şu andan itibaren kapalı';
$txt['allow_guestAccess'] = 'Ziyaretçiler forumu gezebilsin';
$txt['userLanguage'] = 'Kullanıcılar Dil tercihi yapabilsin';
$txt['allow_editDisplayName'] = 'Kullanıcılar rumuzlarını değiştirebilsin';
$txt['allow_hideOnline'] = 'Üyeler online durumunu gizleyebilir';
$txt['allow_hideEmail'] = 'Üyeler e-posta adreslerini gizleyebilsin';
$txt['guest_hideContacts'] = 'Üyelerin profil bilgileri ziyaretçilerden gizlensin';
$txt['titlesEnable'] = 'Özel kullanıcı başlıkları aktif';
$txt['enable_buddylist'] = 'Arkadaş listelerine izin ver';
$txt['default_personalText'] = 'Varsayılan kişisel mesaj';
$txt['max_signatureLength'] = 'İmzalarda en çok kaç karakter kullanılsın?<div class="smalltext">(0 sınırsız.)</div>';
$txt['number_format'] = 'Varsayılan sayı biçimi';
$txt['time_format'] = 'Varsayılan zaman biçimi';
$txt['time_offset'] = 'Zaman dengesi<div class="smalltext">(bu seçeneği üyeler değiştirebilir.)</div>';
$txt['failed_login_threshold'] = 'Başarısız oturum açma sınırı';
$txt['lastActive'] = 'Kimler Online\'ın kaydının tutulacağı zaman limiti';
$txt['trackStats'] = 'İstatistikler aktif';
$txt['hitStats'] = 'Sayfa gösterimi istatistiği aktif (günlük istatistikler aktif olmalı)';
$txt['enableCompressedOutput'] = 'Sıkıştırılmış çıktı aktif';
$txt['databaseSession_enable'] = 'Veritabanı bazlı oturum süresi kullan';
$txt['databaseSession_loose'] = 'Tarayıcıların önbelleğine izin ver';
$txt['databaseSession_lifetime'] = 'Kullanılmamış bir oturumun zaman aşımı (saniye)';
$txt['enableErrorLogging'] = 'Hata kaydı tutmayı etkinleştir';
$txt['cookieTime'] = 'Varsayılan oturum uzunluğu (dakika)';
$txt['localCookies'] = 'Çerezleri depola (local)<div class="smalltext">(bunu açarsanız SSI çalışmayacaktır)</div>';
$txt['globalCookies'] = 'Bağımsız alan adı içeren çerezleri kullan (global)<div class="smalltext">(önce çerezleri depolamayı kapatmalısın!)</div>';
$txt['securityDisable'] = 'Yönetim Merkezinin güvenliğini kapat';
$txt['send_validation_onChange'] = 'E-Posta adresi değiştiğinde tekrar aktivasyon iste';
$txt['approveAccountDeletion'] = 'Kullanıcı kendi hesabını sildiğinde yönetici onayı iste';
$txt['autoOptDatabase'] = 'Tabloları kaç günde bir en iyi hale getirsin?<div class="smalltext">(0 devre dışıdır.)</div>';
$txt['autoOptMaxOnline'] = 'Online üye sayısı en çok kaç olduğunda tablolar yeniden optimize edilsin?<div class="smalltext">(0 devre dışıdır.)</div>';
$txt['autoFixDatabase'] = 'Bozulmuş tabloları otomatik olarak onar.';
$txt['allow_disableAnnounce'] = 'Kullanıcıların duyuruları kapatmalarına izin ver';
$txt['disallow_sendBody'] = 'Duyurularda sonradan mesaj göndermeye izin verme?';
$txt['modlog_enabled'] = 'Moderatör işlemleri kaydedilsin mi?';
$txt['queryless_urls'] = 'URL\'leri göstermeden kullan<div class="smalltext"><b>Sadece Apache!</b></div>';
$txt['max_image_width'] = 'Mesajlardaki resimlerin genişliği (0 = kapatır)';
$txt['max_image_height'] = 'Mesajlardaki resimleri yüksekliği (0 = kapatır)';
$txt['mail_type'] = 'E-Posta gönderim türü';
$txt['mail_type_default'] = '(PHP standart)';
$txt['smtp_host'] = 'SMTP sunucusu';
$txt['smtp_port'] = 'SMTP portu';
$txt['smtp_username'] = 'SMTP kullanıcı adı';
$txt['smtp_password'] = 'SMTP şifresi';
$txt['enableReportPM'] = 'Özel mesajların rapor edilmesini etkinleştir';
$txt['max_pm_recipients'] = 'Özel mesajlarda izin verilen en fazla alıcı sayısı.<div class="smalltext">(Limiti kaldırmak için 0 yazın, admin\'ler her zaman istediği kadar atabilir)</div>';
$txt['pm_posts_verification'] = 'Kişisel iletilerde, doğrulama kodu uygulanmaması için sahip olunması gereken en az ileti<div class="smalltext">(0 - limitsiz, adminler dahil değil)</div>';
$txt['pm_posts_per_hour'] = 'Bir saat içerisinde gönderilebilecek en fazla kişisel ileti.<div class="smalltext">(0 - limitsiz, moderatörler dahil değil)</div>';

$txt['mods_cat_layout'] = 'Düzen ve Seçenekler';
$txt['compactTopicPagesEnable'] = 'Ekranda görünecek sayfaların limiti';
$txt['smf235'] = 'Ekranda görünecek sayfa sayısı aralığı:';
$txt['smf236'] = 'ekranda görünecek hali';
$txt['todayMod'] = '&quot;Bugün&quot; özelliği';
$txt['smf290'] = 'Kapalı';
$txt['smf291'] = 'Sadece Bugün';
$txt['smf292'] = 'Bügün &amp; Dün';
$txt['topbottomEnable'] = 'Yukarı/Aşağı butonu aktif';
$txt['onlineEnable'] = 'Üyenin Online/Offline durumunu göster';
$txt['enableVBStyleLogin'] = 'Her sayfada giriş yapma alanını göster';
$txt['defaultMaxMembers'] = 'Üye listesinde gösterilecek üye sayısı';
$txt['timeLoadPageEnable'] = 'Sayfanın kaç saniyede yüklendiğini göster';
$txt['disableHostnameLookup'] = 'Hostadı taramasını kapat';
$txt['who_enabled'] = 'Kimler Online\'ı etkinleştir';

$txt['smf293'] = 'Karma ';
$txt['karmaMode'] = 'Karma modu';
$txt['smf64'] = 'Karma devre dışı|Toplam karmayı etkinleştir|Olumlu/Olumsuz karmayı etkinleştir';
$txt['karmaMinPosts'] = 'Karmayı değiştirmek için gereken asgari mesaj sayısını düzenle';
$txt['karmaWaitTime'] = 'Bekleme süresi (saat olarak)';
$txt['karmaTimeRestrictAdmins'] = 'Bekleme süresinde yöneticileri kısıtla';
$txt['karmaLabel'] = 'Karma etiketi';
$txt['karmaApplaudLabel'] = 'Alkış etiketi';
$txt['karmaSmiteLabel'] = 'Karma ceza etiketi';

$txt['caching_information'] = '<div align="center"><b><u>Önemli! Bu özellikleri kullanmadan önce mutlaka burayı okuyunuz.</b></u></div><br />
	SMF hızlandırıcılar yolu ile önbelleklemeyi desteklemektedir. Şu anda desteklenen hızlandırıcılar:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Zend Optimizer Değil!)</li>
	</ul>
	Önbellekleme sadece sisteminizde yukarıdaki hızlandırıcılar yüklü ise çalışacaktır. <br /><br />
	SMF birçok önbellekleme aşaması desteklemektedir, aşama arttıkça, işlemcinize binen yükte aynı oranda artacaktır. 
        Eğer sisteminizde önbellekleme kullanılabilir ise size şiddetle seviye 1 önbelleklemeyi kullanmanızı öneririz.
	<br /><br />
	Unutmayın eğer memcahce kullanacaksanız sunucunuz ile ilgili detayları aşağıda belirtmeniz gerekecektir.
        Bu detaylar aşağıdaki gibi girilmelidir:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Eğer bir port belirtilmezse, SMF varsayılan olarak port 11211 i kullancaktır.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF sisteminizde uyumlu bir hızlandırıcıya rastlayamadı.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF sisteminizde APC nin yüklü olduğunu tespit etti.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF sisteminizde eAccelerator ın yüklü olduğunu tespit etti.';
$txt['detected_MMCache'] = '<b style="color: green">SMF sisteminizde MMCache in yüklü olduğunu tespit etti.';
$txt['detected_Zend'] = '<b style="color: green">SMF sisteminizde Zend in yüklü olduğunu tespit etti';
$txt['detected_Memcached'] = '<b style="color: green">SMF sisteminizde MMCache\'in yüklü olduğunu tespit etti.';

$txt['cache_enable'] = 'Önbellekleme Seviyesi';
$txt['cache_off'] = 'Yok';
$txt['cache_level1'] = 'Seviye 1';
$txt['cache_level2'] = 'Seviye 2 (Önerilmez)';
$txt['cache_level3'] = 'Seviye 3 (Önerilmez)';
$txt['cache_memcached'] = 'Memcache ayarları';

?>