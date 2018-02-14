<?php
// Version: 1.1.2; Login

$txt[37] = 'Anda harus mengisi nama pengguna.';
$txt[38] = 'Anda tidak memasukan kata sandi Anda.';
$txt[39] = 'Kata sandi tidak benar';
$txt[98] = 'Pilih nama pengguna';
$txt[155] = 'Mode Pemeliharaan';
$txt[245] = 'Pendaftaran sukses';
$txt[431] = 'Sukses! Sekarang Anda adalah anggota Forum.';
// Use numeric entities in the below string.
$txt[492] = 'dan kata sandi Anda adalah';
$txt[500] = 'Silahkan masukkan alamat email yang benar, %s.';
$txt[517] = 'Informasi yang Dibutuhkan';
$txt[520] = 'Hanya digunakan untuk indentifikasi oleh SMF.';
$txt[585] = 'Saya Setuju';
$txt[586] = 'Saya Tidak Setuju';
$txt[633] = 'Peringatan!';
$txt[634] = 'Hanya anggota terdaftar yang diijinkan untuk mengakses seksi ini.';
$txt[635] = 'Silahkan masuk atau';
$txt[636] = 'mendaftarkan akun';
$txt[637] = 'dengan ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Anda boleh mengubahnya setelah Anda masuk dan pergi ke halaman profil, atau dengan mengunjungi halaman ini setelah Anda masuk:';
$txt[719] = 'Nama pengguna Anda: ';
$txt[730] = 'Alamat emil itu (%s) sudah digunakan oleh anggota terdaftar. Jika Anda merasa ini suatu kesalahan, pergi ke halaman masuk dan gunakan pengingat kata sandi dengan alamat tersebut.';

$txt['login_hash_error'] = 'Keamanan kata sandi sudah ditingkatkan akhir-akhir ini.  Silahkan masukkan kata sandi Anda lagi.';

$txt['register_age_confirmation'] = 'Saya setidaknya berusia %d tahun';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Selamat datang di ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Sekarang Anda terdaftar dengan akun di ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Akun nama pengguna Anda adalah %2$s dan kata sandinya %3$s.' . "\n\n" . 'Anda bisa mengubah kata sandi Anda setelah Anda masuk dan pergi ke profil Anda, atau dengan mengunjungi halaman ini setelah Anda masuk:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Sekarang Anda terdaftar dengan akun di ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Akun nama pengguna Anda adalah %2$s dan kata sandinya %3$s (yang bisa diubah nantinya.)' . "\n\n" . 'Sebelum Anda masuk, pertama Anda perlu untuk mengaktifkan akun Anda. Untuk melakukannya, silahkan ikuti link berikut:' . "\n\n" . '%5$s' . "\n\n" . 'Seandainya Anda mempunyai masalah dengan aktivasi, silahkan gunakan kode "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Pendaftaran Anda di ' . $context['forum_name'] . ' sudah diterima, %1$s.' . "\n\n" . 'Nama pengguna yang Anda daftarkan adalah %2$s dan kata sandinya %3$s.' . "\n\n" . 'Sebelum Anda bisa masuk dan mulai menggunakan forum, permintaan Anda akan ditinjau dan disetujui.  Bila ini selesai, Anda akan menerima email lain dari alamat ini.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Sekarang Anda terdaftar dengan akun di ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Nama pengguna Anda adalah "%2$s".' . "\n\n" . 'Sebelum Anda masuk, pertama Anda perlu untuk mengaktifkan akun Anda. Untuk melakukannya, silahkan ikuti link berikut:' . "\n\n" . '%4$s' . "\n\n" . 'Seandainya Anda mempunyai masalah dengan aktivasi, silahkan gunakan kode "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Permintaan pendaftaran Anda di ' . $context['forum_name'] . ' sudah diterima, %1$s.' . "\n\n" . 'Nama pengguna yang Anda daftarkan adalah %2$s.' . "\n\n" . 'Sebelum Anda bisa masuk dan mulai menggunakan forum, permintaan Anda akan ditinjau dan disetujui.  Bila ini selesai, Anda akan menerima email lain dari alamat ini.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Maaf, Anda tidak diijinkan untuk mendaftar pada forum ini.';
$txt['under_age_registration_prohibited'] = 'Maaf, tapi pengguna di bawah usia %d tidak diijinkan untuk mendaftar di forum ini.';

$txt['activate_account'] = 'Aktivasi Akun';
$txt['activate_success'] = 'Akun Anda sudah diaktivasi dengan sukses. Sekarang Anda bisa melanjutkan untuk masuk.';
$txt['activate_not_completed1'] = 'Alamat email Anda perlu divalidasi sebelum Anda bisa masuk.';
$txt['activate_not_completed2'] = 'Perlu email aktivasi lain?';
$txt['activate_after_registration'] = 'Terima kasih atas pendaftarannya. Anda akan menerima email segera dengan link untuk mengaktifkan akun Anda.  Jika Anda tidak menerima email setelah beberapa waktu, periksa folder spam.';
$txt['invalid_userid'] = 'Pengguna tidak ada';
$txt['invalid_activation_code'] = 'Kode aktivasi tidak benar';
$txt['invalid_activation_username'] = 'Nama pengguna atau email';
$txt['invalid_activation_new'] = 'Jika Anda terdaftar dengan alamat email yang salah, ketik yang baru dan kata sandi Anda di sini.';
$txt['invalid_activation_new_email'] = 'Alamat email baru';
$txt['invalid_activation_password'] = 'Kata sandi lama';
$txt['invalid_activation_resend'] = 'Kirim ulang kode aktivasi';
$txt['invalid_activation_known'] = 'Jika Anda sudah mengetahui kode aktivasi Anda, silahkan ketikkan di sini.';
$txt['invalid_activation_retry'] = 'Kode aktivasi';
$txt['invalid_activation_submit'] = 'Aktifkan';

$txt['coppa_not_completed1'] = 'Administrator masih belum menerima persetujuan orang tua/wali untuk akun Anda.';
$txt['coppa_not_completed2'] = 'Perlu lebih rinci?';

$txt['awaiting_delete_account'] = 'Akun Anda sudah ditandai untuk penghapusan!<br />Jika Anda ingin menyimpan kembali akun Anda, Silahkan centang kotak &quot;Aktifkan lagi akun saya&quot;, dan masuk lagi.';
$txt['undelete_account'] = 'Aktifkan lagi akun saya';

$txt['change_email_success'] = 'Alamat email Anda sudah diubah, dan email aktivasi sudah dikirimkan ke sana.';
$txt['resend_email_success'] = 'Email aktivasi baru sudah dikirimkan dengan sukses.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Rincian Kata sandi Baru';
$txt['change_password_1'] = 'Rincian masuk Anda di';
$txt['change_password_2'] = 'sudah diubah dan kata sandi Anda direset. Di bawah ini rincian masuk Anda yang baru.';

$txt['maintenance3'] = 'Board ini dalam Mode Pemeliharaan.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Silahkan baca dan terima perjanjian sebelum mendaftar.';
$txt['register_passwords_differ_js'] = 'Dua kata sandi yang Anda masukan tidak sama!';

$txt['approval_after_registration'] = 'Terima kasih atas pendaftarannya. Admin harus menyetujui pendaftaran Anda sebelum Anda bisa masuk untuk menggunakan akun Anda, Anda akan menerima email segera mengenai keputusan admin.';

$txt['admin_settings_desc'] = 'Di sini Anda bisa mengubah berbagai seting terkait dengan pendaftaran anggota baru.';

$txt['admin_setting_registration_method'] = 'Metode pendaftaran anggota baru';
$txt['admin_setting_registration_disabled'] = 'Pendaftaran Dimatikan';
$txt['admin_setting_registration_standard'] = 'Pendaftaran Langsung';
$txt['admin_setting_registration_activate'] = 'Aktivasi Anggota';
$txt['admin_setting_registration_approval'] = 'Persetujuan Anggota';
$txt['admin_setting_notify_new_registration'] = 'Beritahu administrator saat anggota baru bergabung';
$txt['admin_setting_send_welcomeEmail'] = 'Kirim email selamat datang ke anggota baru';

$txt['admin_setting_password_strength'] = 'Diperlukan kekuatan untuk kata sandi pengguna';
$txt['admin_setting_password_strength_low'] = 'Rendah - minimum 4 karakter';
$txt['admin_setting_password_strength_medium'] = 'Sedang - tidak berisi nama pengguna';
$txt['admin_setting_password_strength_high'] = 'Tinggi - campuran dari berbagai karakter';

$txt['admin_setting_image_verification_type'] = 'Kompleksitas gambar verifikasi visual';
$txt['admin_setting_image_verification_type_desc'] = 'Semakin kompleks gambar semakin sulit untuk dilewati oleh bots';
$txt['admin_setting_image_verification_off'] = 'Dimatikan';
$txt['admin_setting_image_verification_vsimple'] = 'Sangat Sederhana - Teks biasa pada gambar';
$txt['admin_setting_image_verification_simple'] = 'Sederhana - Huruf berwarna saling tindih, tanpa bercak';
$txt['admin_setting_image_verification_medium'] = 'Medium - Huruf berwarna saling tindih, dengan bercak';
$txt['admin_setting_image_verification_high'] = 'Tinggi - Huruf bersudut, bercak banyak';
$txt['admin_setting_image_verification_sample'] = 'Contoh';
$txt['admin_setting_image_verification_nogd'] = '<b>Catatan:</b> karena server ini tidak terinstalasi librari GD setelan kompleksitas berbeda tidak akan berpengaruh.';

$txt['admin_setting_coppaAge'] = 'Usia di bawah yang berlaku pada pembatasan pendaftaran';
$txt['admin_setting_coppaAge_desc'] = '(Set 0 untuk mematikan)';
$txt['admin_setting_coppaType'] = 'Tindakan yang diambil saat pengguna mendaftar di bawah usia minimum';
$txt['admin_setting_coppaType_reject'] = 'Tolak pendaftarannya';
$txt['admin_setting_coppaType_approval'] = 'Perlu persetujuan orang tua/wali';
$txt['admin_setting_coppaPost'] = 'Alamat pos ke mana formulir persetujuan harus dikirimkan';
$txt['admin_setting_coppaPost_desc'] = 'Hanya berlaku jika pembatasan usia dijalankan';
$txt['admin_setting_coppaFax'] = 'Nomor Fax kemana formulir persetujuan harus di-fax';
$txt['admin_setting_coppaPhone'] = 'Nomor kontak untuk dikontak orang tua atas permintaan pembatasan usia';
$txt['admin_setting_coppa_require_contact'] = 'Anda harus memasukkan baik kontak pos ataupun fax jika persetujuan orang tua/wali diperlukan.';

$txt['admin_register'] = 'Pendaftaran anggota baru';
$txt['admin_register_desc'] = 'Dari sini Anda bisa mendaftarkan anggota baru ke dalam forum, dan jika diinginkan, mengirim email detilnya kepada mereka.';
$txt['admin_register_username'] = 'Nama pengguna Baru';
$txt['admin_register_email'] = 'Alamat Email';
$txt['admin_register_password'] = 'Kata sandi';
$txt['admin_register_username_desc'] = 'Nama pengguna untuk anggota baru';
$txt['admin_register_email_desc'] = 'Alamat email dari anggota';
$txt['admin_register_password_desc'] = 'Kata sandi untuk anggota baru';
$txt['admin_register_email_detail'] = 'Email kata sandi ke pengguna';
$txt['admin_register_email_detail_desc'] = 'Alamat email diperlukan meskipun tidak dicentang';
$txt['admin_register_email_activate'] = 'Pengguna perlu mengaktifkan akunnya';
$txt['admin_register_group'] = 'Grup anggota Primer';
$txt['admin_register_group_desc'] = 'Anggota baru dari Grup anggota primer akan dimiliki';
$txt['admin_register_group_none'] = '(tidak ada grup anggota primer)';
$txt['admin_register_done'] = 'Anggota %s sudah didaftarkan dengan sukses!';

$txt['admin_browse_register_new'] = 'Daftarkan anggota baru';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Anggota baru telah bergabung';
$txt['admin_notify_profile'] = '%s telah mendaftar sebagai anggota baru pada forum Anda. Klik link di bawah untuk melihat profilnya.';
$txt['admin_notify_approval'] = 'Sebelum anggota ini bisa mulai menulis akunnya harus disetujui terlebih dulu. Klik pada link di bawah untuk pergi ke layar persetujuan.';

$txt['coppa_title'] = 'Forum Usia Terbatas';
$txt['coppa_after_registration'] = 'Terima kasih atas pendaftarannya dengan ' . $context['forum_name'] . '.<br /><br />Karena Anda berusia di bawah {MINIMUM_AGE}, diperlukan perijinan resmi
	dari orang tua atau wali sebelum Anda mulai menggunakan akun Anda.  Untuk mengatur aktivasi akun silahkan cetak formulir di bawah ini:';
$txt['coppa_form_link_popup'] = 'Ambil Formulir Dalam Jendela Baru';
$txt['coppa_form_link_download'] = 'Ambil Formulir sebagai File Teks';
$txt['coppa_send_to_one_option'] = 'Lalu mengatur agar orang tua/wali Anda mengirimkan formulir lengkap dengan:';
$txt['coppa_send_to_two_options'] = 'Lalu mengatur agar orang tua/wali Anda mengirimkan formulir lengkap baik dengan:';
$txt['coppa_send_by_post'] = 'Pos, ke alamat berikut:';
$txt['coppa_send_by_fax'] = 'Fax, ke nomor berikut:';
$txt['coppa_send_by_phone'] = 'Alternatifnya, atur untuk mereka agar menelepon administrator di {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Formulir perijinan untuk pendaftaran di ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Alamat';
$txt['coppa_form_date'] = 'Tanggal';
$txt['coppa_form_body'] = 'Saya {PARENT_NAME},<br /><br />Memberikan ijin kepada {CHILD_NAME} (child name) untuk menjadi anggota terdaftar penuh dari forum: ' . $context['forum_name'] . ', dengan nama pengguna: {USER_NAME}.<br /><br />Saya mengerti bahwa informasi pribadi tertentu dimasukkan oleh {USER_NAME} yang bisa dilihat oleh pengguna lainnya di forum.<br /><br />Tertanda:<br />{PARENT_NAME} (Orang Tua/Wali).';

$txt['visual_verification_label'] = 'Verifikasi Visual';
$txt['visual_verification_description'] = 'Ketik huruf yang terlihat dalam gambar';
$txt['visual_verification_sound'] = 'Dengarkan huruf';
$txt['visual_verification_sound_again'] = 'Mainkan lagi';
$txt['visual_verification_sound_close'] = 'Tutup jendela';
$txt['visual_verification_request_new'] = 'Minta gambar lain';
$txt['visual_verification_sound_direct'] = 'Punya masalah mendengarkan ini?  Coba link langsung.';

?>