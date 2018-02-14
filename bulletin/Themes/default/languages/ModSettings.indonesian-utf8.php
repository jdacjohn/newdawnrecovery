<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Halaman ini membolehkan Anda untuk mengubah seting fitur, mods, dan opsi dasar dalam forum Anda.  Silahkan lihat <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">seting tema</a> untuk opsi lebih jauh.  Klik ikon bantuan untuk informasi lebih rinci tentang seting.';

$txt['mods_cat_features'] = 'Fitur Dasar';
$txt['pollMode'] = 'Mode poling';
$txt['smf34'] = 'Matikan poling';
$txt['smf32'] = 'Hidupkan poling';
$txt['smf33'] = 'Tampilkan poling yang sudah ada sebagai topik';
$txt['allow_guestAccess'] = 'Ijinkan pengunjung untuk melihat forum';
$txt['userLanguage'] = 'Hidupkan dukungan bahasa yang bisa dipilih pengguna';
$txt['allow_editDisplayName'] = 'Ijinkan pengguna mengedit nama tampilannya?';
$txt['allow_hideOnline'] = 'Ijinkan non-administrator untuk menyembunyikan status online-nya?';
$txt['allow_hideEmail'] = 'Ijinkan pengguna untuk menyembunyikan emailnya dari setiap orang kecuali admin?';
$txt['guest_hideContacts'] = 'Jangan munculkan detil kontak dari anggota ke pengunjung';
$txt['titlesEnable'] = 'Hidupkan judul bebas';
$txt['enable_buddylist'] = 'Hidupkan daftar teman';
$txt['default_personalText'] = 'Teks pribadi standar';
$txt['max_signatureLength'] = 'Maximum karakter dibolehkan dalam tanda tangan <div class="smalltext">(0 untuk tanpa maksimum.)</div>';
$txt['number_format'] = 'Format angka standar';
$txt['time_format'] = 'Format waktu standar';
$txt['time_offset'] = 'Jarak waktu keseluruhan <div class="smalltext">(ditambahkan ke opsi spesifik anggota.)</div>';
$txt['failed_login_threshold'] = 'Permulaan gagal masuk';
$txt['lastActive'] = 'Permulaan waktu online pengguna';
$txt['trackStats'] = 'Telusuri statistik harian';
$txt['hitStats'] = 'Telusuri halaman yang dilihat harian (stat harus dihidupkan)';
$txt['enableCompressedOutput'] = 'Hidupkan kompresi output';
$txt['databaseSession_enable'] = 'Gunakan pengendalian sesi database';
$txt['databaseSession_loose'] = 'Ijinkan browsers untuk kembali ke halaman cache';
$txt['databaseSession_lifetime'] = 'Detik sebelum waktu sesi tidak digunakan habis';
$txt['enableErrorLogging'] = 'Hidupkan pencatatan kesalahan';
$txt['cookieTime'] = 'Lama cookie masuk standar (dalam menit)';
$txt['localCookies'] = 'Hidupkan penyimpanan lokal untuk cookies <div class="smalltext">(SSI tidak bekerja baik dengan menghidupkan ini.)</div>';
$txt['globalCookies'] = 'Gunakan cookie subdomain independen <div class="smalltext">(matikan cookie lokal terlebih dulu!)</div>';
$txt['securityDisable'] = 'Matikan keamanan administrasi';
$txt['send_validation_onChange'] = 'Diperlukan reaktivasi setelah perubahan email';
$txt['approveAccountDeletion'] = 'Diperlukan persetujuan admin saat anggota menghapus akun';
$txt['autoOptDatabase'] = 'Optimasi tabel setiap berapa hari? <div class="smalltext">(0 untuk mematikan.)</div>';
$txt['autoOptMaxOnline'] = 'Maximum pengguna online saat mengoptimasi<div class="smalltext">(0 untuk tanpa max.)</div>';
$txt['autoFixDatabase'] = 'Otomatis membetulkan tabel rusak';
$txt['allow_disableAnnounce'] = 'Ijinkan pengguna untuk mematikan pengumuman';
$txt['disallow_sendBody'] = 'Jangan tulis teks dalam pemberitahuan?';
$txt['modlog_enabled'] = 'Log tindakan moderasi';
$txt['queryless_urls'] = 'Ramah URL mesin pencari <div class="smalltext"><b>hanya Apache!</b></div>';
$txt['max_image_width'] = 'Max panjang gambar yang ditulis (0 = dimatikan)';
$txt['max_image_height'] = 'Max tinggi gambar yang ditulis (0 = dimatikan)';
$txt['mail_type'] = 'Tipe Mail';
$txt['mail_type_default'] = '(standar PHP)';
$txt['smtp_host'] = 'SMTP server';
$txt['smtp_port'] = 'SMTP port';
$txt['smtp_username'] = 'Nama pengguna SMTP';
$txt['smtp_password'] = 'Kata sandi SMTP';
$txt['enableReportPM'] = 'Hidupkan pelaporan pesan pribadi';
$txt['max_pm_recipients'] = 'Maksimum jumlah penerima yang diijinkan dalam pesan pribadi. <div class="smalltext">(0 untuk tanpa batas, kecuali admin)</div>';
$txt['pm_posts_verification'] = 'Jumlah tulisan di bawah di mana pengguna harus memasukan kode saat mengirimkan pesan pribadi. <div class="smalltext">(0 untuk tanpa batas, admin dikecualikan)</div>';
$txt['pm_posts_per_hour'] = 'Jumlah pesan pribadi yang dibolehkan untuk mengirim dalam satu jam.<div class="smalltext">(0 untuk tanpa batas, moderator dikecualikan)</div>';

$txt['mods_cat_layout'] = 'Opsi dan Tata Letak';
$txt['compactTopicPagesEnable'] = 'Batasi jumlah link halaman yang ditampilkan';
$txt['smf235'] = 'Halaman menyambung untuk ditampilkan:';
$txt['smf236'] = 'untuk ditampilkan';
$txt['todayMod'] = 'Hidupkan fitur &quot;Hari ini&quot;';
$txt['smf290'] = 'Dimatikan';
$txt['smf291'] = 'Hanya Hari ini';
$txt['smf292'] = 'Hari ini &amp; Kemarin';
$txt['topbottomEnable'] = 'Hidupkan tombol Naik/Turun';
$txt['onlineEnable'] = 'Tampilkan online/offline dalam tulisan dan PM';
$txt['enableVBStyleLogin'] = 'Tampilkan masuk cepat pada setiap halaman';
$txt['defaultMaxMembers'] = 'Anggota per halaman dalam daftar anggota';
$txt['timeLoadPageEnable'] = 'Tampilkan waktu yang diperlukan untuk membuat setiap halaman';
$txt['disableHostnameLookup'] = 'Matikan pencarian nama host?';
$txt['who_enabled'] = 'Hidupkan daftar siapa yang online';

$txt['smf293'] = 'Karma';
$txt['karmaMode'] = 'Mode Karma';
$txt['smf64'] = 'Matikan karma|Hidupkan karma total|Hidupkan karma positif/negatif';
$txt['karmaMinPosts'] = 'Set minimum tulisan diperlukan untuk mengubah karma';
$txt['karmaWaitTime'] = 'Set waktu tunggu dalam jam';
$txt['karmaTimeRestrictAdmins'] = 'Batasi administrator untuk menunggu waktu';
$txt['karmaLabel'] = 'Label Karma';
$txt['karmaApplaudLabel'] = 'Label Karma Dielukan';
$txt['karmaSmiteLabel'] = 'Label Karma Ditampar';

$txt['caching_information'] = '<div align="center"><b><u>Penting! Baca ini dulu sebelum menghidupkan fitur ini.</b></u></div><br />
	Dukungan caching SMF melalui penggunaan akselerator. Saat ini akselerator yang didukung termasuk:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Bukan Zend Optimizer)</li>
	</ul>
	Caching hanya akan bekerja pada server Anda jika PHP Anda dikompilasi dengan salah satu optimator di atas, atau tersedia 
	memcache. <br /><br />
	SMF melakukan caching di berbagai tingkatan. Semakin tinggi tingkat caching dihidupkan semakin banyak waktu CPU akan 
	sibuk mengambil informasi cache. Jika caching tersedia pada mesin Anda, direkomendasikan bahwa Anda mencoba caching pada tingkat 1 terlebih dahulu.
	<br /><br />
	Catatan bahwa jika Anda menggunakan memcached Anda perlu menyediakan detil server dalam seting di bawah ini. Ini harus dimasukan sebagai daftar dipisahkan oleh koma
	seperti terlihat dalam contoh di bawah ini:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Catatan bahwa jika tidak ada port yang ditetapkan SMF akan menggunakan 11211. SMF akan mencoba untuk melakukan pengambilan kasar/acak penyeimbangan pada server.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF tidak bisa mendeteksi akselerator kompatibel pada server Anda.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF mendeteksi bahwa server Anda diinstalasi APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF mendeteksi bahwa server Anda diinstalasi eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">SMF mendeteksi bahwa server Anda diinstalasi MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF mendeteksi bahwa server Anda diinstalasi Zend.';
$txt['detected_Memcached'] = '<b style="color: green">SMF mendeteksi bahwa server Anda terinstalasi Memcached.';

$txt['cache_enable'] = 'Tingkat Caching';
$txt['cache_off'] = 'Tidak ada caching';
$txt['cache_level1'] = 'Tingkat 1 Caching';
$txt['cache_level2'] = 'Tingkat 2 Caching (Tidak Direkomendasikan)';
$txt['cache_level3'] = 'Tingkat 3 Caching (Tidak Direkomendasikan)';
$txt['cache_memcached'] = 'Seting Memcache';

?>