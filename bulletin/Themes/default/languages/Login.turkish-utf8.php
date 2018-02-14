<?php
// Version: 1.1.2; Login

$txt[37] = 'Kullanıcı adı girilmedi.';
$txt[38] = 'Şifre girilmedi';
$txt[39] = 'Şifre yanlış';
$txt[98] = 'Kullanıcı adı seçin';
$txt[155] = 'Onarım Modu';
$txt[245] = 'Kayıt başarılı';
$txt[431] = 'Hoş Geldiniz.. Artık sizde forumumuza üyesiniz.';
// Use numeric entities in the below string.
$txt[492] = 'şifreniz';
$txt[500] = 'Lütfen geçerli bir e-posta adresi girin.';
$txt[517] = 'Gerekli Bilgiler';
$txt[520] = 'Sadece forumumuzda tanınmanız için kullanılacaktır. Kayıt olduktan sonra profilinizden görünen isminizi değiştirebilirsiniz.';
$txt[585] = 'Kabul Ediyorum';
$txt[586] = 'Kabul Etmiyorum';
$txt[633] = 'Uyarı!';
$txt[634] = 'Sadece kayıtlı üyeler bu kısma ulaşabilirler.';
$txt[635] = 'Lütfen <font style="color: red;"><b>giriş yapın</b></font> veya ';
$txt[636] = '';
$txt[637] = '<a href="' . $scripturl . '?action=register"><font style="color: red;"><b>üye olun</b></font></a> ';
// Use numeric entities in the below two strings.
$txt[701] = 'Kayıt olduktan sonra kimlik bilgileriniz kısmında forumda kullanmayı istediğiniz rumuzu kullanabilirsiniz:';
$txt[719] = 'Kullanıcı adınız: ';
$txt[730] = ' (%s) bu e-posta adresi başka bir kullanıcı tarafından kullanılmaktadır. Bir yanlışlık olduğunu düşünüyorsanız şifre hatırlatma sayfasında bu e-posta\\yı kullanarak şifrenizin gönderilmesini isteyin';

$txt['login_hash_error'] = 'Şifre güvenliği güncellendi. Lütfen şifrenizi tekrar giriniz.';

$txt['register_age_confirmation'] = 'En az %d yaşındayım';

// Use numeric entities in the below six strings.
$txt['register_subject'] = '' . $context['forum_name'] . '\'a Hoş Geldiniz';

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Değerli %1$s, artık sizde bir ' . $context['forum_name'] . ' üyesisiniz!' . "\n\n" . 'Kullanıcı adınız: %2$s ve şifreniz: %3$s.' . "\n\n" . 'Giriş yaptıktan sonra şifrenizi, profilinize giderek veya bu sayfayı ziyaaret ederek değiştirebilirsiniz:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Değerli %1$s, artık sizde bir ' . $context['forum_name'] . ' üyesisiniz!' . "\n\n" . 'Kullanıcı adınız: %2$s ve şifreniz: %3$s.' . "\n\n" . 'Giriş yapabilmek için önce hesabınız aktifleştirmeniz gerekmektedir. Aktivasyonu yapmak için lütfen bu link\'e tıklayın:' . "\n\n" . '%5$s' . "\n\n" . 'Eğer link ile aktivasyonda bir sorun yaşarsanız lütfen bu kodu kullanın: "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Değerli %1$s ' . $context['forum_name'] . ' da yapmış olduğunuz kayıt isteği başarılı bir şekilde alındı.' . "\n\n" . 'Bize kayıt olduğunuz kullanıcı adı: %2$s ve şifreniz: %3$s.' . "\n\n" . 'Oturum açabilmeniz ve forum\'u kullabileminiz için üyelik isteğinizin kontrol edilmesi ve onaylanması gerekmektedir. Üyeliğiniz kabul edildiğinde bu mail adresine bunu bildiren bir mail atılacaktır.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Değerli %1$s, artık sizde bir ' . $context['forum_name'] . ' üyesisiniz!' . "\n\n" . 'Kullanıcı adınız "%2$s".' . "\n\n" . 'Giriş yapabilmek için önce hesabınızı aktifleştirmeniz gerekmektedir. Aktivasyonu yapmak için lütfen bu link\'e tıklayın:' . "\n\n" . '%4$s' . "\n\n" . 'Eğer link ile aktivasyonda bir sorun yaşarsanız lütfen bu kodu kullanın: "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Değerli %1$s ' . $context['forum_name'] . ' da yapmış olduğunuz kayıt isteği başarılı bir şekilde alındı.' . "\n\n" . 'Bize kayıt olduğunuz kullanıcı adı: %2$s.' . "\n\n" . 'Oturum açabilmeniz ve forum\'u kullabileminiz için üyelik isteğinizin kontrol edilmesi ve onaylanması gerekmektedir. Üyeliğiniz kabul edildiğinde bu mail adresine bunu bildiren bir mail atılacaktır.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Üzgünüz, bu forumda kayıt olmanız yasaklanmmıştır.';
$txt['under_age_registration_prohibited'] = 'Üzgünüz, %d yaşın altında olanların bu forum\'a erişim izni bulunmamaktadır.';

$txt['activate_account'] = 'Hesap aktivasyonu';
$txt['activate_success'] = 'Hesabınız başarıyla aktifleştirildi. Şimdi giriş yapabilirsiniz.';
$txt['activate_not_completed1'] = 'Giriş yapmadan önce e-posta adresinize gönderilen ileti ile onaylamanız gerekiyor.';
$txt['activate_not_completed2'] = 'Aktivasyon kodu mu gerekiyor?';
$txt['activate_after_registration'] = 'Kayıt olduğunuz için teşekkürler.  Hesabınızın aktifleştirmek için e-posta\'nıza gönderilen adrese tıklayın.';
$txt['invalid_userid'] = 'Kullanıcı bulunamadı';
$txt['invalid_activation_code'] = 'Geçersiz aktivasyon kodu';
$txt['invalid_activation_username'] = 'Kullanıcı adı veya e-posta';
$txt['invalid_activation_new'] = 'Eğer yanlış bir e-posta adresiyle kayıt olduysanız, doğru bir adres ve şifrenizi buraya yazın.';
$txt['invalid_activation_new_email'] = 'Yeni e-posta adresiniz';
$txt['invalid_activation_password'] = 'Eski parolanız';
$txt['invalid_activation_resend'] = 'Aktivasyon kodunu tekrar yolla';
$txt['invalid_activation_known'] = 'Eğer aktivasyon kodunuzu biliyorsanız lütfen buraya yazın.';
$txt['invalid_activation_retry'] = 'Aktivasyon Kodu';
$txt['invalid_activation_submit'] = 'Aktifleştir';

$txt['coppa_not_completed1'] = 'Yönetici hala kayıt olmanız için gerekli olan veli iznini almadı.';
$txt['coppa_not_completed2'] = 'Daha fazla bilgi...';

$txt['awaiting_delete_account'] = 'Hesabınız silinmek üzere işaretlenmiştir!<br />Eğer hesabınızı geri yüklemek istiyorsanız, lütfen &quot;Hesabımı geri yükle&quot; kutusunu kontrol edin, ve tekrar oturum açın.';
$txt['undelete_account'] = 'Hesabımı geri yükle';

$txt['change_email_success'] = 'E-Posta adresiniz değiştirildi, yeni bir aktivasyon mesajınız bu adrese gönderildi.';
$txt['resend_email_success'] = 'Yeni bir aktivasyon kodu e-posta adresinize başarıyla gönderildi.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Yeni Şifre Ayrıntıları';
$txt['change_password_1'] = 'Üye girişiniz';
$txt['change_password_2'] = 'Şifreniz sıfırlandı ve değiştirildi. Yeni üye girişi bilgileriniz aşağıdadır.';

$txt['maintenance3'] = 'Forum Bakıma Alınmıştır...';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Lütfen kayıt olmadan önce üyelik sözleşmesini okuyunuz.';
$txt['register_passwords_differ_js'] = 'Girmiş olduğunuz iki şifre birbiri ile uyuşmuyor!';

$txt['approval_after_registration'] = 'Kayıt olduğunuz için teşekkürler. Hesabınızı kullanmaya başlamadan önce yöneticinin kaydınızı onaylamasını bekleyeceksiniz. Yöneticinin kaydınız üzerindeki kararı kısa bir süre sonra e-posta ile size bildirilecektir.';

$txt['admin_settings_desc'] = 'Burada yeni üyelerin kaydı ile ilgili birçok ayarı değiştirebilirsiniz.';

$txt['admin_setting_registration_method'] = 'Yeni üyeler için kullanılacak kayıt metodu';
$txt['admin_setting_registration_disabled'] = 'Yeni Kayıtlar Kapalı!';
$txt['admin_setting_registration_standard'] = 'Hızlı Kayıt';
$txt['admin_setting_registration_activate'] = 'Aktivasyon Onaylı';
$txt['admin_setting_registration_approval'] = 'Yönetici Onaylı';
$txt['admin_setting_notify_new_registration'] = 'Yeni üye kaydı olduğunda yöneticiye bildir';
$txt['admin_setting_send_welcomeEmail'] = 'Yeni üyelere hoşgeldin mail\'i gönder';

$txt['admin_setting_password_strength'] = 'Üyelerin şifreleri için gerekli direnç';
$txt['admin_setting_password_strength_low'] = 'Düşük - en az 4 karakterden oluşmalıdır';
$txt['admin_setting_password_strength_medium'] = 'Orta - kullanıcı adını içeremez';
$txt['admin_setting_password_strength_high'] = 'Yüksek - değişik karakterlerin kombinasyonundan oluşmalıdır';

$txt['admin_setting_image_verification_type'] = 'Görsel Onay';
$txt['admin_setting_image_verification_type_desc'] = 'Görsel onayı aktifleştirerek botların üye olmasını engelleyebilirsiniz';
$txt['admin_setting_image_verification_off'] = 'Kapalı';
$txt['admin_setting_image_verification_vsimple'] = 'Çok Basit - Sadece Yazı';
$txt['admin_setting_image_verification_simple'] = 'Basit - Üst üste gelen renkli harfler, ses yok';
$txt['admin_setting_image_verification_medium'] = 'Orta - Üst üste gelen renkli harfler,  ses var';
$txt['admin_setting_image_verification_high'] = 'Yüksek - Açılı harfler, fazla ses';
$txt['admin_setting_image_verification_sample'] = 'Örnek';
$txt['admin_setting_image_verification_nogd'] = '<b>Not:</b> bu sunucuda GD desteği yüklü olmadığı için görsel onay etkili olmayacaktır.';

$txt['admin_setting_coppaAge'] = 'Üyelik kısıtlamalarının etkin olacağı yaş sınırı';
$txt['admin_setting_coppaAge_desc'] = '(Kapatmak için 0 yazın)';
$txt['admin_setting_coppaType'] = 'Yaş sınırının altında biri kayıt olmak istediğinde yapılacak işlem';
$txt['admin_setting_coppaType_reject'] = 'Üyeliğe kabul etme';
$txt['admin_setting_coppaType_approval'] = 'Veli onayı iste';
$txt['admin_setting_coppaPost'] = 'Veli onay formlarının gönderileceği posta adresi';
$txt['admin_setting_coppaPost_desc'] = 'Sadece \'Veli onayı iste\' aktif ise seçilmelidir';
$txt['admin_setting_coppaFax'] = 'Veli onay formlarının gönderileceği faks numarası';
$txt['admin_setting_coppaPhone'] = 'Velilerin bilgi edinebilecekleri telefon numarası';
$txt['admin_setting_coppa_require_contact'] = '\'Veli onayı iste\' aktifse ya bir posta adresi yada bir fax numarası girmeniz zorunludur.';

$txt['admin_register'] = 'Yeni Üye Kaydı';
$txt['admin_register_desc'] = 'Bu sayfadan yeni bir üyeyi e-posta adresi, kullanıcı adı ve parola belirterek sisteme üye kayıt edebilirsiniz.';
$txt['admin_register_username'] = 'Kullanıcı Adı';
$txt['admin_register_email'] = 'E-Posta Adresi';
$txt['admin_register_password'] = 'Şifre';
$txt['admin_register_username_desc'] = 'Yeni üye için kullanıcı adı';
$txt['admin_register_email_desc'] = 'Üyenin e-posta adresi';
$txt['admin_register_password_desc'] = 'Yeni üyenin parolası';
$txt['admin_register_email_detail'] = 'Şifreyi e-posta ile gönder';
$txt['admin_register_email_detail_desc'] = 'Kullanıcının parolasını e-posta adresine gönderir';
$txt['admin_register_email_activate'] = 'E-Posta Aktivasyonu Gerektir';
$txt['admin_register_group'] = 'Birincil Üye Grubu';
$txt['admin_register_group_desc'] = 'Kullanıcının dahil olacağı üye grubu';
$txt['admin_register_group_none'] = '(birincil üye grubu yok)';
$txt['admin_register_done'] = 'Üye %s başarıyla kayıt edildi!';

$txt['admin_browse_register_new'] = 'Yeni Üye Kaydet';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Yeni Üye Kaydı';
$txt['admin_notify_profile'] = 'Merhaba %s, yeni bir kullanıcı foruma üye oldu. Profilini görmek için aşağıdaki bağlantıya tıklayabilirsin.';
$txt['admin_notify_approval'] = 'Bu üyenin foruma giriş yapabilmesi için önce hesabının onaylanması gerekiyor. Aşağıdaki bağlantıya tıklayarak onaylama ekranına gidebilirsiniz.';

$txt['coppa_title'] = 'Yaş Sınırlamalı Forum';
$txt['coppa_after_registration'] = '' . $context['forum_name'] . ' da kayıt olduğunuz için teşekkürler.<br /><br />Foruma kayıt yaptırabilmek için yaşınızın en az {MINIMUM_AGE} olması gerekmektedir, üyelik hesabınızı kullanmaya başlamadan önce velinizden izin almanız zorunludur. Hesabınızın aktifleştirilmesi için lütfen aşağıdaki form\'u yazdırın:';
$txt['coppa_form_link_popup'] = 'Form\'u Yeni Bir Pencerede Aç';
$txt['coppa_form_link_download'] = 'Form\'u Bir Metin Dosyası Olarak İndir';
$txt['coppa_send_to_one_option'] = 'Daha sonra velinizin doldurmuş olduğu form\'u bu yolla bize göndermesini sağlayın:';
$txt['coppa_send_to_two_options'] = 'Daha sonra velinizin doldurmuş olduğu form\'u bu iki yoldan biri ile bize göndermesini sağlayın:';
$txt['coppa_send_by_post'] = 'Posta ile bu adrese:';
$txt['coppa_send_by_fax'] = 'Faks ile bu numaraya:';
$txt['coppa_send_by_phone'] = 'Veya alternatif olarak velinizin {PHONE_NUMBER} numarasından forum yöneticisi ile iletişime geçmesini sağlayabilirsiniz.';

$txt['coppa_form_title'] = 'Kayıt formu, ' . $context['forum_name'] . ' için';
$txt['coppa_form_address'] = 'Adres';
$txt['coppa_form_date'] = 'Tarih';
$txt['coppa_form_body'] = 'Ben {PARENT_NAME},<br /><br />Velisi olduğum {CHILD_NAME} (çocuğun ismi) adlı kişinin {USER_NAME} kullanıcı adı ile bu foruma üye olmasına izin veriyorum: ' . $context['forum_name'] . '.<br /><br />{USER_NAME} tarafından girilen bazı özel bilgilerin başkaları tarafından görülebileceğini anlıyor ve kabul ediyorum.<br /><br />İmza:<br />{PARENT_NAME} (Veli).';

$txt['visual_verification_label'] = 'Resim doğrulaması';
$txt['visual_verification_description'] = 'Resimde gösterilen harfleri giriniz';
$txt['visual_verification_sound'] = 'Harfleri dinle';
$txt['visual_verification_sound_again'] = 'Tekrar oyna';
$txt['visual_verification_sound_close'] = 'Pencereyi kaydet';
$txt['visual_verification_request_new'] = 'Başka görsel iste';
$txt['visual_verification_sound_direct'] = 'Dinlerken problem mi yaşıyorsunuz?  Doğrudan erişmeyi deneyin.';

?>