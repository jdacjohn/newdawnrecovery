<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = '';

$txt[1006] = 'Pencereyi kapat';

$helptxt['manage_boards'] = '
	<b>Bölümeri düzenle</b><br />
	Bu menüde oda ve kategori ekleme/düzenleme/kaldırma işlemlerini 
	yapabilirsiniz. Örneğin, &quot;Spor&quot;,&quot;Araba&quot; ve &quot;Müzik&quot; ile ilgili
        oldukça geniş yelpazeli bir siteniz var ise bunlar sizin ekleyeceğiniz en üst Kategoriler olur.
	Tüm bu kategorilerin içinde isteğiniz yönünde hiyerarşik &quot;alt-kategoriler&quot;,
	veya &quot;Odalar&quot; oluşturabilirsiniz. Hiyerarşik düzen şu şekildedir: <br />

	<ul>
		<li>
			<b>Spor</b>
			&nbsp;- Bir &quot;kategori&quot;
		</li>
		<ul>
			<li>
				<b>Futbol</b>
				&nbsp;- Bu &quot;Spor&quot; kategorisininin altında bir kategoridir.
			</li>
			<ul>
				<li>
					<b>İstatistikler</b>
					&nbsp;- Bu ise &quot;Futbol&quot; alt bölümüne ait bir alt bölümdür
				</li>
			</ul>
			<li><b>Yüzme</b>
			&nbsp;- Bu &quot;Spor&quot; kategorisinin altında bir kategoridir</li>
		</ul>
	</ul>
	Kategoriler size forumu çeşitli başlıklar altında ayırmanızı sağlar (&quot;Araba,
	Spor&quot;), ve bu kategorilerin içindeki &quot;Odalar&quot; kısmında üyelerin mesaj
	atabileceği konular bulunur. Galatasaray hakkındaki konuları görmek isteyen üye
	&quot;Spor->Futbol->GALATASARAY&quot; dizinindeki konulara kolaylıkla ulaşabilir. 
	Kategoriler üyelere istedikleri konuyu kolaylıkla bulmalarını sağlar. Sadece &quot;Alışveriş&quot; yerine
	&quot;Bilgisayar&quot; ve &quot;Giyim&quot; bölümlerinde ilginize göre kolaylıkla ulaşabilirsiniz.
	Bu sayede girmek istemediğiniz yerlere girmeye mecbur kalmazsınız; çünkü Bilgisayar Malzemesi ararken
	bu &quot;kategori&quot yerine Giyim Mağazası kısmına girmek zorunda değilsiniz.<br />
	Yukarıda belirtildiği gibi bu odalar geniş kapsamlı kategorilerin altındaki birer konu gibidirler.
	Eğer &quot;Galatasaray&quot; hakkında konuşmak istiyorsanız, &quot;Spor->Futbol&quot; kategorilerinin
	içinde yer alan &quot;Galatasaray&quot; odasına girip düşünceleriniz paylaşabilirsiniz.<br />
	Bu menüdeki yönetici işlemleri her kategori altında yeni bir oda oluşturma, onların 
	sıralamalarını değiştirme (&quot;Galatasaray&quot\'ı; &quot;Sakaryaspor&quot;\'un üstüne yerleştirme)
	veya tamamen bu konuları silme.';

$helptxt['edit_news'] = '<b>Forum haberlerini düzenleme</b><br />
	Bu işlem size Ana Sayfanızda önemli haberleri duyurmanızı sağlar.
	İsteğinize göre şekillendirebilirsiniz bunu (örn., &quot;Haftasonu olacak olan Buluşmayı unutma!&quot;). 
	Her haber farklı kutulara yazılır ve ayrı ayrı görüntülenirler.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Tüm Üyeleri Göster</b><br />
			Bu özellik forum\'da bulunan tüm üyeleri isimleri profil\'lerine köprülenmiş bir şekilde
			görüntülemenize ve eğer yönetici iseniz bu üyelerin seçeneklerinizi değiştirmenize olanak
                        tanır (website, yaş, vb.). Yönetici haklarına sahip biri, üyeler üzerinde komple kontrole 
                        sahiptir, üye hesabını silmek gibi seçeneklerde Yöneticinin yetkileri arasında bulunur.<br /><br />
		</li>
		<li>
			<b>Onay Bekleyen Üyeler</b><br />
			Bu bölüm sadece Yönetici onaylı üyelik sistemi seçili ise görüntülenebilir. Bu seçenek seçili ise bir kişi ancak yönetici 
                        onun üyelik isteğini kabul ettiyse tam bir üye haline gelebilir. Bu bölümde hala yönetici onayı beklemekte olan üyeler,
                        e-posta ve IP adresleri ile birlikte gösterilirler. Burada kişilerin üyelik isteklerini ister kabul edebilir istersenizde
			kabul etmeyebilirsiniz. Üyelerin isimlerinin yanındaki kutulara tıklayabilir ve aşağıdaki çoktan seçmeli menüden yapılacak işlemi
                        seçebilirsiniz. Bir üyenin başvurusunu kabul etmeyecekseniz, bu üyenin bu kararınızdan haberdar edilip edilmeyeceğini belirleyebilirsiniz.<br /><br />
		</li>
		<li>
			<b>Aktivasyon Bekleyen Üyeler</b><br />
			Bu bölüm sadece forum seçeneklerinde aktivasyon onaylı üyeliği seçtiyseniz görüntülenebilir olacaktır. Bu bölümde henüz
                        hesaplarını aktifleştirmemiş üyelerin tümünü görebilirsiniz. Bu bölümde isterseniz üyenin hesabını aktifleştirebilir,
			silebilir veya br hatırlatma mail\\i yollayabilirsiniz. Ayrıca isterseniz kararınızdan bu üyeyi haberdar edebilirsiniz.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Üyeleri yasaklama</b><br />
	SMF forumlardaki güvenilirliği arttırmak ve belli bir yaptırım uygulayabilmek adına üyeleri &quot;banlama&quot; 
	hakkını vermektedir. Administrator olarak gördüğünüz tüm mesajlarda kullanıcıların hangi IP den msj gönderdiğini
	görebilirsiniz. Ban Listesinde üyeleri IP adresleri ile banlayarak o alandan mesaj atılmasını engellersiniz. <br />
	Kullanıcıları mail adreslerine görede banlayabilirsiniz.';

$helptxt['modsettings'] = '<b>Mod Seçenekleri</b><br />
	Bo bölümde forum\'unuzda yüklü olan modlara ait seçenekler bulunmaktadır';

$helptxt['number_format'] = '<b>Sayı formatı</b><br />
	Forum içinde kullanılmasını istediğiniz sayı formatını belirleyebilirsiniz. Say formatı: <br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Virgül \',\' işareti binleri ayırmaya yararken, nokta \'.\' işareti ondalık sayıların ayrılmasında kullanılmıştır.';

$helptxt['time_format'] = '<b>Zaman biçimi</b><br />
	Forumun zaman biçiminide istediğiniz gibi ayarlayabilirsiniz.
	Ufak PHP kodlarının anlamları aşağıda belirtilmiştir. (daha fazla detay için <a href="http://www.php.net/manual/function.strftime.php" target="_new">php.net</a>).<br />
	<br />
	Bu karakterler zaman biçimlendirilmesinde kullanılmaktadır: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - Belirlenmiş hafta ismi<br />
	&nbsp;&nbsp;%A - Tüm hafta ismi<br />
	&nbsp;&nbsp;%b - Belirlenmiş ay ismi<br />
	&nbsp;&nbsp;%B - Tüm ay ismi<br />
	&nbsp;&nbsp;%d - ay\'ın günleri (01\'den 31\'e kadar) <br />
	&nbsp;&nbsp;%D<b>*</b> - ile %m/%d/%y aynıdır<br />
	&nbsp;&nbsp;%e<b>*</b> - ay\'ın günü (1 den 31 e kadar) <br />
	&nbsp;&nbsp;%H - 24 saat sistemi (00 ile 23 arası) <br />
	&nbsp;&nbsp;%I - 12 saat sistemi (01 ile 12 arası) <br />
	&nbsp;&nbsp;%m - sayı olarak ay (01 den 12 ye kadar) <br />
	&nbsp;&nbsp;%M - sayı olarak dakika <br />
	&nbsp;&nbsp;%p - &quot;am&quot; veya &quot;pm&quot; olması<br />
	&nbsp;&nbsp;%R<b>*</b> - 24 saatlik sistemde düzen <br />
	&nbsp;&nbsp;%S - saniyeler <br />
	&nbsp;&nbsp;%T<b>*</b> - Şu an, %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2 rakamlı yıl (00 dan 99 a) <br />
	&nbsp;&nbsp;%Y - 4 rakamlı yıl<br />
	&nbsp;&nbsp;%Z - yerel zaman bölgesi <br />
	&nbsp;&nbsp;%% - \'%\' karakteri <br />
	<br />
	<i>* Windows altyapılı serverlarda çalışmamaktadır.</i></span>';

$helptxt['live_news'] = '<b>Birebir Duyurular</b><br />
	Bu kutucuk <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> tarafından yapılan duyuruları dakika dakika gösterir.
	Burayı yenilemeler, düzeltimler vs.. için mümkün olduğunca çok ziyaret etmeniz gerekmektedir.';

$helptxt['registrations'] = '<b>Kayıt yönetimi</b><br />
	Bu bölüm forumunuza kayıt yaptırmak isteyenler için olan seçekleri düzenleyebileceğiniz yerdir.
	Burada 4 seçenek bulunmaktadır. Bunlar:<br /><br />
	<ul>
		<li>
			<b>Yeni Üye Kaydetme</b><br />
			Bu ekrandan yeni üye kayıdı yapılmaktadır. Bu ekran genelde sınırlandırılmış kullanıcı hizmeti veren forumlarda adminler 
			tarafından kullanıcı açılması için yapılmıştır veya test kullanıcıları oluşturmak için kullanılmaktadır. Kullanıcıları aktivasyonla
			üye yapacak olursanız mail adresine gelen linkin tıklanması gerekir, isteyen adminler şifreleri maillere otomatik yollayabilirler.<br /><br />
		</li>
		<li>
			<b>Üyelik Sözleşmesini Düzenle</b><br />
			Bu bölümde kayıt sırasında gösterilecek üyelik sözleşmesini düzenleyebilirsiniz. SMF ile birlikte gelen
			varsayılan anlaşmayı komple değiştirebilir veya üzerinde oynamalar yapabilirsiniz.<br /><br />
		</li>
		<li>
			<b>Ayrılmış İsimleri Düzenle</b><br />
                        Bu arayüzü kullanarak üyeler tarafından seçilmesine izin olmayacak kullanıcı adlarını belirleyebilirsiniz.<br /><br />
		</li>
		<li>
			<b>Seçenekler</b><br />
			Bu bölüm sadece forum\' yönetmeye izniniz varsa görüntülenebilir olacaktır. Bu bölümden forum\'unuzda kullanılacak
			üye kayıt şeklini, ve diğer kayıtla alakalı seçenekleri değiştirebilirsiniz.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Moderasyon Kaydı</b><br />
	Bu bölüm moderatörlerin yaptıkları işlerin kayıdını tutmaktadır.\'Amaç\' kısmında ise yapılan işlemlerle ilgili açıklamalar bulunabilir.';
$helptxt['error_log'] = '<b>Hata Kaydı</b><br />
	Hata kaydı forumun içinde herhangi bir kullanıcının karşılaştığı hataları saniye saniye kayıt eder. Bu sayede forumun son durumu ile kolayca
	ilgilenilebilir.';
$helptxt['theme_settings'] = '<b>Tema Ayarları</b><br />
	Ayarlar ekranı varsayılan tema ile alakalı olarak gözükür. Tema dizinleri ve URL adresleri gibi ayarları içermektedir.Çoğu tema kullanıcıların 
	isteklerine göre değiştirebileceği ayarlarla donatılmıştır';
$helptxt['smileys'] = '<b>Gülümseme Merkezi</b><br />
	Bu bölümde forumunuzda kullanmak istediğiniz gülümseme resimlerinin dizinlerini belirleyebilir ve isteğinize göre değiştirebilirsiniz.<br /><br />
	Buradan mesaj ikonlarını düzenleyebilirsiniz,eğer ayarlar sayfasından aktifleştirirseniz .';
$helptxt['calendar'] = '<b>Takvim Yönetimi</b><br />
	Buradan takvim ayarlarını düzenleyebilirsiniz. Tatilleri ve özel günleri ekleyebilir ve kaldırabilirsiniz.';

$helptxt['serversettings'] = '<b>Sunucu Ayaları</b><br />
	Burada forum\'unuzun çekirdek ayarlarını yapabilirsiniz. Bu bölüm veritabanı ayarlarının yanı sıra
	önbellek ve mail ayarları gibi daha birçok ayarı içermektedir. Burada düzenleme yaparken dikkatli olun
	çünkü yapacağınız değişiklikler forum\'unuzun erişilememesine neden olabilir.';

$helptxt['topicSummaryPosts'] = 'Yanıtlama ekranında yer alacak önceki mesajların sayısını belirlemenizi sağlar.';
$helptxt['enableAllMessages'] = 'Bunu hepsini göster tuşu görüntülenmeden önce gösterilecek <em>maksimum</em> mesaj sayısını ayarlayabilirsiniz.';
$helptxt['enableStickyTopics'] = 'Yapışkan Konu özelliği odalarda bulunan konu listesinin en üstüne konu sabitlemek için kullanılır
		Bu özelliği moderatörlere ve adminlere özel kılabilirsiniz.';
$helptxt['allow_guestAccess'] = 'Bu kutuyu işaretlememek, ziyaretçilerin basit işlemler dışında neredeyse hiçbir şey yapamamalarına neden olacaktır. Bu ziyaretçilerin bölümlere erişememesi ile aynı şey değildir.';
$helptxt['userLanguage'] = 'Bu seçeneği kullanıma açtığınız takdirde her üye forumu desteklenen her dilde görüntüleyebilecektir. Bu
		forumun varsayılan dilini değiştirmez.';
$helptxt['trackStats'] = 'İstatistikler:<br />Bu üyelerin forumdaki en son mesajları ve en popüler konuları görmelerini sağlar.
		En fazla online olan üye,en yeni üye vs.. gibi değişik alanda istatistiklerde bulunmaktadır.<hr />
		Hit:<br />Sayfaların görüntülenme sayısını belirler';
$helptxt['titlesEnable'] = 'Bu sayede kullanıcılar kendileri için özel topikler açabileceklerdir. Bu kullanıcının adının altında gözükecektir.
		<br /><i>Örneğin:</i><br />SekondeR<br />Karizma';
$helptxt['topbottomEnable'] = 'Bu özellik kullanıcıların sayfa içinde mouse ihtiyaç duymadan aşağı yukarı gitmesini sağlayan butonların gösterimini sağlar.';
$helptxt['onlineEnable'] = 'Kullanıcının online olup olmadığı hakkında bir resim gösterilir.';
$helptxt['todayMod'] = 'Sadece tarihler yerine &quot;Bugün&quot;, veya &quot;Dün&quot;, yazılarının eklenebilmesini sağlar.';
$helptxt['enablePreviousNext'] = 'Bir önceki ve sonraki konuya link verir.';
$helptxt['pollMode'] = 'Anketlerin etkin kılınmasını sağlar. Eğer bu seçenek kapatılırsa varolan konulardaki anketler gizlenecektir. 
		Bunu engellemek için &quot;Varolan Anketleri Konu olarak göster&quot; seçeneğini etkin kılabilirsiniz.<br /><br />
		Kimlerin anket açabileceğini veya görebileceğini izinler kısmından ayarlayabilirsiniz.';
$helptxt['enableVBStyleLogin'] = 'Her sayfada ziyaretçiler için giriş panelinin gösterilmesini sağlar.';
$helptxt['enableCompressedOutput'] = 'Düşük bandwithler için sıkıştırma özelliğini sağlar anca yüklenebilmesi için zlib gerekmektedir.';
$helptxt['databaseSession_enable'] = 'Bu seçenek database in oturum deposu olarak kullanılmasını sağlar - dengeli serverlar için en iyisidir, tüm zaman aşımı hatalarında yardım eder ve forumun hızının artmasını sağlar.';
$helptxt['databaseSession_loose'] = 'Bu seçeneğin etkin kılınması forumun kullandığı bandwith i düşürür ve sayfalar arası geri dönüş mümkün olmaz - ve yeni ikonlar yüklenmez. (seçip gösterilmelerini istemediğiniz sürece)';
$helptxt['databaseSession_lifetime'] = 'Bir oturumun zaman aşımına uğraması için gerekli süre.  Bir oturum uzun süredir işlem yapmadıysa &quot;Zaman Aşımı&quot; hatası ile forumdan çıkışı sağlanır. 2400\'den yüksek seçenekler tavsiye edilir.';
$helptxt['enableErrorLogging'] = 'Hertürlü hatanın kayıt edilmesini sağlar. Yanlış şifre vs..';
$helptxt['allow_disableAnnounce'] = 'Bu kullancıların duyuruları alıp almayacaklarını seçebilmelerini sağlar.';
$helptxt['disallow_sendBody'] = 'Bu seçenek kullanıcıların duyuru alırken metinin içerilip içerilmeyeceğini seçmelerine olanak tanıyan özelliği ortadan kaldırır.<br /><br />Çoğu zaman kullanıcılar yanlışlıkla duyuru mail\'ine cevap yazabilirler ve buda yöneticinin ilgili metini almasına neden olur.';
$helptxt['compactTopicPagesEnable'] = 'Sayfa numaralarını gösterir sadece.<br /><i>Örneğin:</i>
		&quot;3&quot; göster: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; göster: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Sayfaların altında SMF nin o sayfanın gösterme hızını belirten saniye..';
$helptxt['removeNestedQuotes'] = 'Sadece alıntı yapılan mesajı içerir. Alıntı yaptığınız mesajdaki alıntı alınmaz..';
$helptxt['simpleSearch'] = 'Basit arama modülünü gösterir ve gelişmiş arama modülü için link barıdırır.';
$helptxt['max_image_width'] = 'Gönderilecek resimlerin maksimum byte ını belirlemenizi sağlar..';
$helptxt['mail_type'] = 'Bu seçenek PHP\'nin varsayılan mail seçeneğini kullanmanıza, veya SMTP kullanmanıza olanak tanır.  Unutmayın SMTP kullanmak PHP\'nin varsayılan seçeneğini kullanmaktan daha uzun sürebilir, ayrıca SMTP sunucusu her zaman bir kullanıcı adı ve şifre gerektirmeyebilir.<br /><br />Eğer PHP\'nin varsayılan mail sistemini kullanacaksanız kullanıcı adı ve şifre girmenize zaten gerek yoktur.';
$helptxt['attachmentEnable'] = 'Eklentiler kullanıcıların mesajlarına ekledikleri dosyalardır.<br /><br />
		<b>Eklentilerin uzantılarını kontrol et</b>:<br /> Dosyaların uzantılarını kontrol etmek istiyor musunuz?<br />
		<b>İzin verilen uzantılar</b>:<br /> İzin verilen uzantıları ayarlayabilirsiniz.<br />
		
		<b>Eklenti dizini</b>:<br /> Eklenti dosyalarının dizini<br />(örneğin: /home/sites/pluslive/www/forum/attachments)<br />
		
		<b>Maksimum Eklenti dosyası boyutu </b> (KB):<br /> Dosyaların ne kadar büyük olabileceğini seçin.<br />
		<b>Mesaj başına maksimum eklenti boyutu</b> (KB):<br /> Her mesajda yapılabilecek eklenti boyutunu belirleyiniz.<br />
		<b>Eklenti başına maksimum boyut</b> (KB):<br /> Tüm eklentilerin ayrı ayrı en fazla ne kadar büyüklükte olabileceğini belirleyiniz.<br />
		<b>Mesaj başına maksimum eklenti sayısı</b>:<br /> Bir mesajda yapılabilecek eklenti sayısını belirleyiniz.<br />
		<b>Eklentileri mesajda resim olarak göster</b>:<br /> Eğer eklenen dosya resim ise mesajda resim gösterilecektir<br />
		<b>Resimler gösterilirken önizleme resmi göster</b>:<br /> Eğer bu seçilirse, resimin tamamı yerine küçük bir resim gösterilir.<br />';
$helptxt['karmaMode'] = 'Karma bir üyenin popülerliğini göstermeye yarar. &quot;Karma&quot; vermek için gerekli olan mesaj sayısını,
		karmalar arasında geçmesi gerek süreyi değiştirebilirsiniz.<br /><br />İzinlerden gerekli ayarlarda yapılabilir.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'Takvim üyelerin doğum günlerinin gösterilmesinde veya önemli günlerde uyarılmanız için kullanılır.<br /><br />
		<b>Günlerde \'Olay Ekle\' linkini göster.</b>:<br />Kullanıcıların günlerin üzerine tıklayarak önemli duyuruları yazabilmelerini sağlar.<br />
		<b>Hafta numaralarını göster</b>:<br />Hangi haftada olduğunu göster.<br />
		<b>Gelişmiş sayfada gösterilecek maksimum gün sayısı</b>:<br />Eğer bu sayıyı 7 yaparsanız, bir sonraki hafta gerçekleşecek olaylarda gösterilir.<br />
		<b>Tatilleri ana sayfada göster</b>:<br />Bugün\'ün tatillerini ana sayfadaki takvim sütununda göster.<br />
		<b>Doğum günlerini ana sayfada göster</b>:<br />Bugün\'ün doğum günlerini ana sayfada takvim sütununda göster.<br />
		<b>Olayları ana sayfada göster</b>:<br />Bugün\'ün olaylarını ana sayfadaki takvim sütununda göster.<br />
		<b>Mesajların atılacağı Varsayılan Sayfa</b>:<br />Olayların ekleneceği varsayılan sayfayı belirleyiniz.<br />
		<b>Minimum yıl</b>:<br />Takvimde gösterilecek &quot;ilk&quot; yılı seçiniz.<br />
		<b>Maksimum yıl</b>:<br />Takvimde gösterilecek &quot;en son&quot; yılı seçiniz.<br />
		<b>Doğum günü rengi</b>:<br />Doğum günü yazısının rengini seçiniz.<br />
		<b>Olay rengi</b>:<br />Olay yazısının rengini seçiniz.<br />
		<b>Tatil rengi</b>:<br />Tatil yazısının rengini seçiniz.<br />
		<b>Olayların günleri birbirine bağlamasına izin ver</b>:<br />Olayların bağlanmasını kontrol et<br />
		<b>Bir olayın bağlayabileceği maksimum gün sayısı</b>:<br />Maksimum gün sayısını seçiniz.<br /><br />
		Takvimiun kullanım ayarlarının izinler menüsünden kontrol edildiğini unutmayınız..';
$helptxt['localCookies'] = 'SMF giriş bilgilerinizin saklanması için cookie yükler bilgisayarınıza.
	Cookie ler genel ayarla (pluslive.info) veya yerel (pluslive.info/path/to/forum) olarak saklanabilir.<br />
	Eğer otomatik olarak çıkış problemi yaşıyorsanız bu seçeneği kontrol ediniz.<hr />
	Genel olarak kullanılan cookieler paylaşılan webserverlar tarafından kullanıldığı zaman daha az güvenli olurlar (bkz. Tripod)<hr />
	Yerel cookieler belirtildiği dosyanın dışında çalışmaz, eğer forumunuz örneğin www.pluslive.info/forum de kuruluysa www.pluslive.info/index.php  gibi sayfalar bilgilerinize ulaşamaz.
	Özellikle SSI.php yi kullanırken, genel cookieler tercih edilir.';
$helptxt['enableBBC'] = 'Bu seçeneği aktif etmek kullanıcıların mesaj yazarken BBC kullanmasına olanak sağlayarak, mesajlarını resimlerle ve değişik yazı tipleriyle renklendirmelerine olanak tanıyacaktır.';
$helptxt['time_offset'] = 'Tüm forum adminleri forumlarının aynı GMT ayarları üzerinde kullanımını isterler. Bu seçenek sayesinde + veya - saatler belirterek GMT yi belirleyebilirsiniz.';
$helptxt['spamWaitTime'] = 'Atılan mesajlar arasında beklenilmesi gereken süreyi belirtiniz. Bu özellik sürekli gereksiz mesaj atan kullanıcıları bir nevi olsun durdurabilir.';

$helptxt['enablePostHTML'] = 'Bazı HTML biçimlerinin kullanılabilmesini sağlar:
		<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Varsayılan temayı ve ziyaretçilerin göreceği temayı seçebilirsiniz,
	Temaların sağ taraflarına tıklayarak gerekli değişiklikleride yapabilirsiniz.';
$helptxt['theme_install'] = 'Yeni temaların yüklenebilmesini sağlar. Zaten oluşturulmuş bir dizindende yapabilirsiniz, tema için gerekli dosyaları upload ederek, veya varsayılan temayı kopyalayarak.<br /><br />Unutmayın arşiv veya dizinler <tt>theme_info.xml</tt> açıklama dosyasını içermek zorundadır.';
$helptxt['enableEmbeddedFlash'] = 'Kullanıcıların mesajlarında flash ürünlerini kullanabilmelerini sağlar,
	resimler gibi.  Ancak güvenlik açığı ortaya çıkarabilir.
	KENDI RISK HAKKINIZI KULLANIN!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Kullanıcıların <a href="%s?action=.xml;sa=news">En son haberler</a>\'a link verebilmelerini sağlar.
	En son haberlerin sayısının kısıtlanması tavsiye edilir, çünkü Trillian gibi programlarda rss data
	gösterilmeye çalışıldığı zaman haberlerin tepeleri kesilir.';
$helptxt['hotTopicPosts'] = 'Bir konunun &quot;Beğenilen&quot; veya &quot;Çok Beğenilen&quot; kategorilerine girebilmesi için gereken mesaj sayısını
	değiştirebilirsiniz.';
$helptxt['globalCookies'] = 'Subdomainlerin bağımsız cookieler kullanabilmesini sağlar.  Örneğin, eğer...<br />
	Sizin siteniz http://www.pluslive.info/ da ise,<br />
	ve forumunuzda http://forum.pluslive.info/ da kayıtlıysa,<br />
	bu değişikliği kullanarak forumunuzun cookie sini kullanabilmenizi sağlayacak.';
$helptxt['securityDisable'] = 'Admin paneline girmek için sorulan şifre kontrolünü <i>kaldırır</i>. Tavsiye edilmemektedir!';
$helptxt['securityDisable_why'] = 'Bu sizin o anda kullandığınız şifredir.<br /><br />Bu kontrolün yapılması yapılan tüm işlemlerin <b>sizin</b> tarafınızdan yapıldığını garanti altına alır.';
$helptxt['emailmembers'] = 'Bu mesajlarda bazı &quot;değişkenler&quot; kullanabilirsiniz. Bunlar:<br />
	{\\$board_url} - Forumunuzun URL addresi.<br />
	{\\$current_time} - Şuanki zaman.<br />
	{\\$member.email} - Belirtilen kullanıcının maili.<br />
	{\\$member.link} - Belirtilen kullanıcının linki.<br />
	{\\$member.id} - Belirtilen kullanıcının ID numarası.<br />
	{\\$member.name} - Belirtilen kullanıcının adı.  (özelleştirmek için)<br />
	{\\$latest_member.link} - En son kayır olan kullanıcının linki.<br />
	{\\$latest_member.id} - En son kayır olan kullanıcının ID numarası.<br />
	{\\$latest_member.name} - En son kayır olan kullanıcının adı.';
$helptxt['attachmentEncryptFilenames'] = 'Eklenti dosyalarınızın şifrelenmesi aynı isimde 1den fazla dosyanızın olabilmesini
	mümkün kılar. Bu avantajının yanında şiddetli bir zarar sonrasında database inizin yeniden kurulumunda zorluk çıkarabilir.';

$helptxt['failed_login_threshold'] = 'Şifre Hatırlatma ekranına iletilmeden önce yapılabilecek yanlış şifre girişimlerinin sayısı.';
$helptxt['oldTopicDays'] = 'Eğer bu seçenek aktif edilirse, ayarlanmış zaman\'dan sonra bir konuya bir cevap yazılması durumunda kullanıcı bir uyarı mesajı alacaktır. Buradaki veri giriş türü gün\'dür, örneğin konu cevap süresini maksimum bir hafta yapmak için rakamı 7 olarak, seçeneği devre dışı bırakmak için değeri 0 olarak girebilirsiniz.';
$helptxt['edit_wait_time'] = 'Bir mesajın gönderildikten sonra ne kadar zamana kadar tekrar düzenlenebileceğini gösteren zaman(saniye).';
$helptxt['edit_disable_time'] = 'Bir kullanıcının mesajını düzenleyebileceği maksimum süre. Devre dışı bırakmak için 0 olarak ayarlayın. <br /><br /><i>Note: This will not effect any user who has permission to edit other peoples posts.</i>';
$helptxt['enableSpellChecking'] = 'İmla kontrolünü aç. İmla kontrolü için pspell kütüphanesi bulundurmanız gerekmektedir.. Sunucunuz ' . (function_exists('pspell_new') == 1 ? 'DESTEKLIYOR' : 'DESTEKLEMIYOR') . ' .';
$helptxt['lastActive'] = 'Ana sayfada aktif olarak gösterilecek kullanıcılar için süre belirleyiniz. Varsayılan 15 dakikadır.';

$helptxt['autoOptDatabase'] = 'Veritabanını günaşırı optimize eder. Bu kontrolü her gün yapmasını istiyorsanız 1 i seçin. Maksimum online kullanıcı sayısınıda sınırlandırabilirsiniz bu sayede serverınızda aşırı yüklenmeyi önleyebilirsiniz.';
$helptxt['autoFixDatabase'] = 'Otomatik olarak hatalı tabloları düzeltir ve hiçbirşey olmamış gibi devam eder.  Yararlı olabilir çünkü forumunuza zarar vermeden önce kolaylıkla bu riskten kurtulabilirsiniz.  İşlem bittiği zaman size mail gönderilir.';

$helptxt['enableParticipation'] = 'Kullanıcının mesaj attığı konuların üzerinde küçük bir ikon belirir.';

$helptxt['db_persist'] = 'Performansı arttırmak için bağlantıyı aktif kılar.  Servera bağlı değilseniz host ile aranızda sorun meydana getirebilir.';

$helptxt['queryless_urls'] = 'URL formatlarını bir ölçüde değiştirir bu sayede daha kullanışlı aramalar yapılabilir. Şu şekilde görünürler (index.php/action_profile/u_1).<br /><br />Bu özellik ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'not') . ' serverınızda çalışacak.';
$helptxt['countChildPosts'] = 'Bu seçeneği seçtiğiniz takdirde alt bölümlerin mesaj sayısı, üst bölümün mesaj sayısına dahil edilecektir.';
$helptxt['fixLongWords'] = 'Uzun kelimeleri belirli formatta kısaltır bu sayede forumun görüntüsü bozulmaz. (mesela ... gibi)';

$helptxt['who_enabled'] = 'Forumda kimin ne yaptığını görmenizi sağlar.';

$helptxt['recycle_enable'] = '&quot;Çöp Kutusu&quot; silinen iletiler veya konular bu odaya gönderilir.';

$helptxt['enableReportPM'] = 'Bu özellik kullanıcıların aldıkları kişisel iletileri yöneticilere şikayet edebilmelerine olanak tanımaktadır.';
$helptxt['max_pm_recipients'] = 'Bu özellik kişisel ileti gönderilirken, sönderilecek kişi sayısını sınırlamanızı sağlar. Limiti kaldırmak için 0 yapın.';
$helptxt['pm_posts_verification'] = 'Bu seçenek kişisel ilet gönderilirken resim doğrulamasını zorunlu kılar.';
$helptxt['pm_posts_per_hour'] = 'Bir saat içinde gönderilecek kişiel ileti sayısını sınırlar.';

$helptxt['default_personalText'] = 'Varsayılan yazıyı belirler bu sayede kullanıcı &quot;kişisel yazı.&quot;sını belirleyebilir.';

$helptxt['modlog_enabled'] = 'Tüm moderatör hareketlerini kaydet.';

$helptxt['guest_hideContacts'] = 'Seçildiği takdirde ziyaretçiler tarafından üyelerin profillerindeki herhangi bir mail adresinin
			görülebilmesi söz konusu olmayacaktır.';

$helptxt['registration_method'] = 'Forumunuza kayıt olacak kişilerin kayıtlarını nasıl yapabileceklerini seçebilirsiniz.Bunlar:<br /><br />
	<ul>
		<li>
			<b>Kayıt Durduruldu:</b><br />
				Foruma yeni üye alımını durdurursunuz.<br />
		</li><li>
			<b>Hemen Kayıt</b><br />
				Yeni üyeler foruma üye olduktan sonra hemen mesaj atmaya başlayabilirler.<br />
		</li><li>
			<b>Üye Aktivasyonu</b><br />
				Üyeler kayıt oldukları zaman email adreslerine aktivasyon linki yollanır. Üye bu linke tıklamadan foruma giriş yapma hakkına sahip olamaz.<br />
		</li><li>
			<b>Üye Kabulü</b><br />
				Adminlerin onayı olmadan üyelikler aktif edilemez.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Profillerindeki email adreslerini değiştiren üyelerin yeni emaillerine gelen link ile üyeliklerini tekrar aktif hale getirmeleri gerekir.';
$helptxt['send_welcomeEmail'] = 'Yeni gelen üyelere HOŞGELDİNİZ maili gönderilir.';
$helptxt['password_strength'] = 'Bu seçenek üyelerin şifreleri için gerekli olan şifre karmaşıklığını ayarlamanızı sağlar. Şifre karmaşıklaştıkça, kırmak da o kadar zorlaşır.
	Olası ayarlar:
	<ul>
		<li><b>Düşük:</b> Şifre en az 4 karakterden oluşmalı.</li>
		<li><b>Orta:</b> Şifre en az 8 karakterden oluşmalı ve kullanıcı adını veya e-mail adresini içermemeli.</li>
		<li><b>High:</b> Ortadaki tüm özellikler geçerlidir ama ek olarak şifre büyük ve küçük harflerden oluşmalı ve en az bir rakam içermelidir.</li>
	</ul>';

$helptxt['coppaAge'] = 'Bu kutuda belirtilen değer, siteye üye olabilecek kişilerinin minimum yaşlarını belirtecektir.
	Yaşı belirlenmiş değerin altında olanlar ayarlarda seçilen seçeneğe bağlı olarak ya ebeveyinlerinden izin almak zorunda olacak yada forum\'a üye olamayacaklardır.
	Burada değer 0 olarak girildiği takdirde tüm yaş sınırlamaları kaldırılacaktır.';
$helptxt['coppaType'] = 'Yaş sınırlaması aktifse bu seçenekler belirlenmiş yaşın altında biri üye olmaya çalıştığında yapılacak hareketi belirleyecektir:';
$helptxt['coppaPost'] = 'İletişim kutuları ebeveyinlerin çocuklarının siteye erişimini onaylaması için forum yöneticilerine onay göndermeleri için gereklidir.';

$helptxt['allow_hideOnline'] = 'Üyeler diğer üyelerden online olduklarını gizleyebilirler (admin ve moderatörler dışında). Bu özellik kapatılması durumunda sadece admin ve moderatörler tarafından kullanılabilecektir.';
$helptxt['allow_hideEmail'] = 'İsteyen kullanıcılar email adreslerini adminler dışındaki kullanıcılardan gizleyebilirler.';

$helptxt['latest_support'] = 'Bu panelde server ayarlarında en çok karşılaşılan problemler ve sorular yer alır. Merak etmeyin bu bilgiler kayıt edilmez.<br /><br />Eğer &quot;Destek bilgileri alınıyor...&quot;, diye kaldıysa büyük ihtimal bilgisayarınız <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> adresine bağlanamamıştır.';
$helptxt['latest_packages'] = 'En son hizmete sunulan modüller ve paketleri görebilirsiniz.<br /><br />Eğer bu kısım gözükmüyorsa bilgisayarınız <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> adresine bağlanamamış demektir.';
$helptxt['latest_themes'] = 'Bu alan bazı en son çıkan temalar ile en çok kullanılan temalardan örnekleri sunar. <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  Eğer bilgisayarınız <a href="http://www.simplemachines.org/">www.simplemachines.org</a> adresine bağlanamadıysa bu alanda bilgi göremeyebilirsiniz.';

$helptxt['secret_why_blank'] = 'Sizin güvenliğiniz için verilen cevap ve şifre otomatik olarak şifrelenir ve hiç bir koşulda kimseye verilmez.';
$helptxt['moderator_why_missing'] = 'Moderatörler oda bazında yapıldığı için ,  <a href="javascript:window.open(\'%s?action=manageboards\'); self.close();">Oda yönetimi biriminden moderatörleri belirleyebilirsiniz.</a>.';

$helptxt['permissions'] = 'İzinler size belirli konular hakkında yasaklama,izin verme gibi haklar sağlar.<br /><br />İzinleri kutulara tik atarak kolaylık belirleyebilir ve \'Düzenle.\\ tuşu ile bitirebilirsiniz.';
$helptxt['permissions_board'] = 'Eğer bir oda  \'Genel,\' olarak belirtildiyse bu oda herkes tarafından görülebilir.  \'Yerel\' özel izinler karşılığında görülebilen ve girilebilen odaları belirtir.';
$helptxt['permissions_quickgroups'] = 'Bunlar size &quot;varsayılan&quot; izinlerin yapılandırılmasındada yardımcı olur - standart \'özel bir şey yok\' anlamına gelir, kısıtlı ise \'ziyaretçi gibi\' manasına gelir, moderatör \'moderatör ne yaparsa\'anlamına gelir, ve son olarak \'bakım\' admin seviyesine en yakın gruptur.';
$helptxt['permissions_deny'] = 'İzinleri yasaklamak belli üyelere forum\'da belli eylemleri yasaklamak istediğiniz zaman size çok yardımcı olabilirler.<br /><br />Belli üyelere yasaklama getirmek için onlar için bir üye grubu yaratın ve izinlerini yasaklayıp üyeleri bu gruba dahil edin. Unutmayın eğer bir üye bir izni yasaklanmış bir gruba dahilse, diğer gruplardan hangi haklar gelirse gelsin yasaklanmış hakkını kullanamayacaktır.';
$helptxt['permissions_postgroups'] = 'Mesaja bağlı gruplar için izin ayarlanmasını aktif etmek belli mesajlardaki kullanıcılara belli izinleri vermenizi sağlayacaktır. Bu gruplardan alınan yeni izinler ana üye grubunun izinlerine <em>eklenecektir</em>.';
$helptxt['permissions_by_board'] = 'Bu seçeneği aktif etmek her bölüm için farklı üye gruplarına değişik izinler vermenizi sağlayacaktır.';
$helptxt['membergroup_guests'] = 'Ziyaretçiler, forum\'a giriş yapmamış tüm kullanıcıları içeren gruptur.';
$helptxt['membergroup_regular_members'] = 'Normal üyeler forum\'a giriş yapmış ama herhangi bir üye grubuna dahil edilmemiş üyelerdir.';
$helptxt['membergroup_administrator'] = 'Administrator\'lar forum\'da tüm bölümleri görebilir istedikleri her şeyi yapabilmektedirler. Admin\'ler için izin sınırlaması yapılamamaktadır.';
$helptxt['membergroup_moderator'] = 'Moderatör grubu özel bir üye grubudur, <em>sadece moderatörü oldukları bölümlerde</em> belli başlı izinlere sahiplerdir. Bu bölümler dışında mod\'ların diğer üyelerden bir farkı yoktur.';
$helptxt['membergroups'] = 'SMF de üyelerinizin ayrıldığı iki çeşit grup vardır. Bunlar:
	<ul>
		<li><b>Düzenli Gruplar:</b> Düzenli gruplar &quot;Üyelik Ayarları&quot;ndan girilerek yapılabilir.Bu sayede üyeleri istediğini sayıda düzenli gruba üye yapabilirsiniz.</li>
		<li><b>Mesaj Yapılı Gruplar:</b> Düzenli grupların aksine üyeler atanamaz. Grubun minimum mesaj sayısına ulaşan üye o gruba girmiş olur.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Olayları isimlerinin sağ tarafında bulunan kırmızı (*) işarete tıklayarak düzenleyebilirsiniz.';

$helptxt['maintenance_general'] = 'Tablolarınızı optimize edebilirsiniz buradan (daha küçük ve daha hızlı!), en son versiyonlarına sahip olduğunuza emin olun.<br /><br />Çeşitli zararların gelmemesine dikkat ediniz.';
$helptxt['maintenance_backup'] = 'Forumunuzdaki tüm bilgileri büyük bir dosya halinde kopyalamanızı sağlar.<br /><br />Haftalık olarak güvenliğiniz açısından yapılmasını tavsiye ederiz.';
$helptxt['maintenance_rot'] = 'Bu size <b>Tamamen</b> ve <b>Geri Dönülemeyecek Şekilde</b> eski dosyaları silmenizi sağlar. Önce bir back-up yapıp bunu yapmanızı tavsiye ederiz.<br /><br />Bu seçeneği dikkatli kullanın.';

$helptxt['avatar_allow_server_stored'] = 'Kullanıcıların avatarlarını sizin serverınızdan almasını sağlar<br />Eğer SMF nin avatarlar klasörü içine dizinler oluşturursanız avatar &quot;kategorisi&quot; yapabilirsiniz.';
$helptxt['avatar_allow_external_url'] = 'Başka adreslerden link verilmesini ve avatarlarda kullanılabilmeyi sağlar.';
$helptxt['avatar_download_external'] = 'Bu özellik seçilirse, karşı bir sunucudan avatar bu sunucuya transfer edilir ve öntanımlı boyuta küçültülür.';
$helptxt['avatar_allow_upload'] = 'Bu özellik &quot;Kullanıcıların dışarıdan avatar seçebilmelerine izin ver&quot; gibi, ancak bu özellik daha hızlı bir çalışmayı öngörür.<br /><br />Fakar diğer bir taraftan serverınızda daha fazla boşluğa ihtiyaç duyar.';
$helptxt['avatar_download_png'] = 'PNG dosyaları daha büyük boyutlu ancak daha kaliteli resim formatıdır. Bu seçenek seçilmediği takdirde JPEG- daha küçük ancak daha az kaliteli- resimler kullanılacaktır.';

$helptxt['disableHostnameLookup'] = 'Host isimlerinin bakılmasını kaldıracaktır.';

$helptxt['search_weight_frequency'] = 'Önemli unsurlar arama sonuçlarının yararlılığı için kullanılır. Önemli unsurları forumunuzun yapısına göre değiştiriniz. Örneğin bir haber forumu yapılacak aramada \'en son uyuştuğu mesajı göster\' özelliğinin değerinin daha yüksek olması yararlı olacaktır. Tüm rakamlar birbirleri ile belli bir şekilde bağlantılı ve pozitif olmak zorundadırlar.<br /><br />Bu unsur bulunan arama sonuçlarının sayısını toplam mesaj sayısına böler.';
$helptxt['search_weight_age'] = 'Önemli unsurlar arama sonuçlarının yararlılığı için kullanılır. Önemli unsurları forumunuzun yapısına göre değiştiriniz. Örneğin bir haber forumu yapılacak aramada \'en son uyuştuğu mesajı göster\' özelliğinin değerinin daha yüksek olması yararlı olacaktır. Tüm rakamlar birbirleri ile belli bir şekilde bağlantılı ve pozitif olmak zorundadırlar.<br /><br />Bu unsur bulunan mesajın süresine dayalıdır. Daha fazla sonuç, daha fazla kazancı gösterir.';
$helptxt['search_weight_length'] = 'Önemli unsurlar arama sonuçlarının yararlılığı için kullanılır. Önemli unsurları forumunuzun yapısına göre değiştiriniz. Örneğin bir haber forumu yapılacak aramada \'en son uyuştuğu mesajı göster\' özelliğinin değerinin daha yüksek olması yararlı olacaktır. Tüm rakamlar birbirleri ile belli bir şekilde bağlantılı ve pozitif olmak zorundadırlar.<br /><br />Bu unsur konu büyüklüğüne dayalıdır. Konularda bulunan fazla mesajlar, daha fazla kazancı gösterir.';
$helptxt['search_weight_subject'] = 'Önemli unsurlar arama sonuçlarının yararlılığı için kullanılır. Önemli unsurları forumunuzun yapısına göre değiştiriniz. Örneğin bir haber forumu yapılacak aramada \'en son uyuştuğu mesajı göster\' özelliğinin değerinin daha yüksek olması yararlı olacaktır. Tüm rakamlar birbirleri ile belli bir şekilde bağlantılı ve pozitif olmak zorundadırlar.<br /><br />Bu unsur konuların başlığında bulunabilmeye dayalıdır.';
$helptxt['search_weight_first_message'] = 'Önemli unsurlar arama sonuçlarının yararlılığı için kullanılır. Önemli unsurları forumunuzun yapısına göre değiştiriniz. Örneğin bir haber forumu yapılacak aramada \'en son uyuştuğu mesajı göster\' özelliğinin değerinin daha yüksek olması yararlı olacaktır. Tüm rakamlar birbirleri ile belli bir şekilde bağlantılı ve pozitif olmak zorundadırlar.<br /><br />Bu unsur konuların ilk mesajlarında bulunabilmeye dayalıdır.';
$helptxt['search_weight_sticky'] = 'Arama ağırlıklarının önemini belirler, mesela bir haber sitesi için son gönderilme tarihi aramalarda daha fazla ağırlık taşımalıdır.';
$helptxt['search'] = 'Arama ile ilgili tüm seçenekleri burada ayarlayabilirsiniz.';
$helptxt['search_why_use_index'] = 'Arama indeksi aramaları hızlandırıp sunucu üzerindeki yükü azaltır, 50000 den fazla üyeli bir forumunuz varsa indekslemeyi aktifleştirmeyi düşünebilirsiniz.';

$helptxt['see_admin_ip'] = 'IP adresleri moderatörler ve adminler tarafından görülebilir. Bu özellik yetkili kişilerin kullanıcıları daha rahat takip ederek, forumun yapısını korumalarına yardımcı olur. Unutmayın IP adresleri her zaman kişileri göstermez çünkü çoğu kullanıcının IP si belirli aralıklarla değişir.<br /><br />Kullanıcıların kendi IP lerini görebilmeleride sağlanmıştır.';
$helptxt['see_member_ip'] = 'IP adresiniz sadece siz ve moderatörler tarafından görülebilir, diğer kullanıcılar sizin IP\'nizi göremezler. Unutmayın bu bilgi kimliğini ortaya çıkarmaz, ve çoğu IP dinamiktir yani devamlı değişirler.<br /><br />Ne siz diğer kullanıcıların IP adreslerini görebilirsiniz, ne de onlar sizin IP adresinizi görebilirler.';

$helptxt['ban_cannot_post'] = '\'Mesaj Atma Engellemesi\', forum\'u yasaklanmış kullanıcı için sadece-okunulabilir bir hale getirir. Kullanıcı yeni konular açamaz, konulara cevap atamaz, özel mesajlar gönderemez veya anketlerde oy kullanamaz. Ama engellenmiş kullanıcı kendi özel mesajlarını ve diğer tüm konuları okuma hakkına hala sahiptir.<br /><br />Bu şekilde yasaklanmış kullanıcılara engellenmiş hareketleri yapmak istediklerinde bir uyarı gösterilir.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Mesaj Ayarları</b><br />
			Mesajların atılmaları ve gösterimleriyle ilgili ayarları düzenler. Aynı zamanda yazım denetimini de burada aktif edebilirsiniz.
		</li><li>
			<b>Bulletin Board Code</b><br />
			Mesajlardaki görünümü değiştirebilen BBC kodları ile ilgili ayarları düzenleyin. Aynı zamanda buradan izin verilen/verilmeyen kodları seçebilirsiniz.
		</li><li>
			<b>Sansürlü Kelimeler</b>
			Forumdaki üslubu kontrol altında tutabilmek için, belli kelimeleri sansürleyebilirsiniz. Bu özellik forumdaki yasak kelimeleri zararsız keilemelere çeverimenizi sağlar.
		</li><li>
			<b>Konu Ayarları</b>
			Konularla ilgili ayarları düzenler. Örneğin, bir sayfada gösterilecek konu sayısı, sabit konulara izin veriliyor mu, verilmiyor mu, bir konunun beğenilen konu sayılması için kaç mesaj gerektiği, vb.
		</li>
	</ul>';

?>