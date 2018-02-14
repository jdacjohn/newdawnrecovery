<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'Instalator SMF';
$txt['installer_language'] = 'Bahasa';
$txt['installer_language_set'] = 'Set';
$txt['congratulations'] = 'Selamat, proses instalasi selesai!';
$txt['congratulations_help'] = 'Jika kapan saja Anda memerlukan dukungan, atau SMF gagal bekerja dengan benar, harap diingat bahwa <a href="http://www.simplemachines.org/community/index.php" target="_blank">bantuan tersedia</a> jika Anda memerlukannya.';
$txt['still_writable'] = 'Direktori instalasi Anda masih bisa ditulisi.  Alangkah baiknya untuk melakukan chmod agar tidak bisa ditulisi untuk alasan keamanan.';
$txt['delete_installer'] = 'Klik di sini untuk menghapus file install.php sekarang.';
$txt['delete_installer_maybe'] = '<i>(tidak bekerja pada semua server.)</i>';
$txt['go_to_your_forum'] = 'Sekarang Anda bisa melihat <a href="%s">forum Anda yang baru saja diinstalasi</a> dan mulai menggunakannya.  Pertama Anda harus memastikan Anda masuk, setelah itu Anda akan bisa mengakses pusat administrasi.';
$txt['good_luck'] = 'Selamat!<br />Simple Machines';

$txt['user_refresh_install'] = 'Forum Disegarkan';
$txt['user_refresh_install_desc'] = 'Ketika menginstalasi, instalator menemukan bahwa (dengan detil yang Anda sediakan) satu atau lebih tabel yang mungkin sudah dibuat oleh instalator ini.<br />Setiap tabel yang tidak ada dalam instalasi Anda sudah dibuat ulang dengan data standar, tetapi tidak ada data yang dihapus dari tabel yang sudah ada.';

$txt['default_topic_subject'] = 'Selamat datang di SMF!';
$txt['default_topic_message'] = 'Selamat datang di Forum Simple Machines!<br /><br />Kami berharap Anda senang menggunakan forum Anda.&nbsp; Jika Anda mempunyai masalah, jangan ragu untuk [url=http://www.simplemachines.org/community/index.php]meminta asistensi kami[/url].<br /><br />Terima kasih!<br />Simple Machines';
$txt['default_board_name'] = 'Diskusi Umum';
$txt['default_board_description'] = 'Anda bebas membicarakan apapun dalam board ini.';
$txt['default_category_name'] = 'Kategori Umum';
$txt['default_time_format'] = '%d %B, %Y, %I:%M:%S %p';
$txt['default_news'] = 'SMF - Baru Diinstalasi!';
$txt['default_karmaLabel'] = 'Karma:';
$txt['default_karmaSmiteLabel'] = '[ditampar]';
$txt['default_karmaApplaudLabel'] = '[dielukan]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nroot';
$txt['default_smileyset_name'] = 'Standar';
$txt['default_classic_smileyset_name'] = 'Klasik';
$txt['default_theme_name'] = 'Tema Standar SMF - Inti';
$txt['default_classic_theme_name'] = 'Tema Klasik YaBB SE';
$txt['default_babylon_theme_name'] = 'Tema Babylon';

$txt['default_administrator_group'] = 'Administrator';
$txt['default_global_moderator_group'] = 'Moderator Global';
$txt['default_moderator_group'] = 'Moderator';
$txt['default_newbie_group'] = 'Pendatang';
$txt['default_junior_group'] = 'Anggota Yunior';
$txt['default_full_group'] = 'Anggota Penuh';
$txt['default_senior_group'] = 'Anggota Senior';
$txt['default_hero_group'] = 'Anggota Pahlawan';

$txt['default_smiley_smiley'] = 'Smiley';
$txt['default_wink_smiley'] = 'Berkedip';
$txt['default_cheesy_smiley'] = 'Senyum';
$txt['default_grin_smiley'] = 'Geram';
$txt['default_angry_smiley'] = 'Marah';
$txt['default_sad_smiley'] = 'Sedih';
$txt['default_shocked_smiley'] = 'Terkejut';
$txt['default_cool_smiley'] = 'Kalem';
$txt['default_huh_smiley'] = 'Hah?';
$txt['default_roll_eyes_smiley'] = 'Mata Bergulung';
$txt['default_tongue_smiley'] = 'Lidah';
$txt['default_embarrassed_smiley'] = 'Malu';
$txt['default_lips_sealed_smiley'] = 'Bibir Tertutup';
$txt['default_undecided_smiley'] = 'Bingung';
$txt['default_kiss_smiley'] = 'Cium';
$txt['default_cry_smiley'] = 'Menangis';
$txt['default_evil_smiley'] = 'Jahat';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'Klik di sini';
$txt['error_message_try_again'] = 'untuk mencoba langkah ini lagi.';
$txt['error_message_bad_try_again'] = 'untuk mencoba tetap menginstalasi, tapi catatan bahwa ini <i>sangat</i> tidak disarankan.';

$txt['install_settings'] = 'Seting Dasar';
$txt['install_settings_info'] = 'Hanya beberapa hal bagi Anda untuk menyiapkan ;).';
$txt['install_settings_name'] = 'Nama Forum';
$txt['install_settings_name_info'] = 'Ini adalah nama dari forum Anda, contoh. &quot;Forum Pengujian&quot;.';
$txt['install_settings_name_default'] = 'Komunitas Saya';
$txt['install_settings_url'] = 'URL Forum';
$txt['install_settings_url_info'] = 'Ini adalah URL ke forum Anda <b>tanpa garis miring \'/\'!</b>.<br />Dalam hal umum, Anda akan membiarkan nilai standar dalam kotak ini - biasanya benar.';
$txt['install_settings_compress'] = 'Output Gzip';
$txt['install_settings_compress_title'] = 'Kompres output untuk menghemat bandwidth.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Fungsi ini tidak bekerja pada semua server, tapi Anda bisa menghemat banyak bandwidth.<br />Klik <a href="install.php?obgz=1&amp;pass_string=LULUS" onclick="return reqWin(this.href, 200, 60);" target="_blank">di sini</a> untuk mengujinya. (seharusnya mengatakan "LULUS".)';
$txt['install_settings_dbsession'] = 'Sesi Database';
$txt['install_settings_dbsession_title'] = 'Gunakan database untuk sesi daripada menggunakan file.';
$txt['install_settings_dbsession_info1'] = 'Fitur ini hampir selalu yang terbaik, karena sesi lebih bebas.';
$txt['install_settings_dbsession_info2'] = 'Fitur ini umumnya adalah ide yang baik, tetapi mungkin tidak bekerja dengan benar pada server ini.';
$txt['install_settings_utf8'] = 'Set Karakter UTF-8';
$txt['install_settings_utf8_title'] = 'Gunakan UTF-8 sebagai set karakter standar';
$txt['install_settings_utf8_info'] = 'Fitur ini membiarkan database dan forum menggunakan set karakter internasional, UTF-8. Ini dapat berguna saat bekerja dengan multi bahasa yang menggunakan set karakter yang berbeda.';
$txt['install_settings_stats'] = 'Ijinkan Mengoleksi Stat';
$txt['install_settings_stats_title'] = 'Ijinkan Simple Machines untuk Mengoleksi Stat Dasar Bulanan';
$txt['install_settings_stats_info'] = 'Jika dihidupkan, ini akan membolehkan Simple Machines untuk mengunjungi situs Anda sekali sebulan untuk mengumpulkan statistik dasar. Ini akan membantu kami membuat keputusan konfigurasi mana untuk mengoptimasi software. Untuk informasi lebih jauh silahkan kunjungi <a href="http://www.simplemachines.org/about/stats.php" target="_blank">halaman info kami</a>.';
$txt['install_settings_proceed'] = 'Lanjutkan';

$txt['mysql_settings'] = 'Seting Server MySQL';
$txt['mysql_settings_info'] = 'Ini adalah seting untuk menggunakan server MySQL Anda.  Jika Anda tidak mengetahui nilainya, Anda harus menanyakan kepada host Anda.';
$txt['mysql_settings_server'] = 'Nama server MySQL';
$txt['mysql_settings_server_info'] = 'Ini biasanya localhost - jika Anda tidak tahu, coba localhost.';
$txt['mysql_settings_username'] = 'Nama pengguna MySQL';
$txt['mysql_settings_username_info'] = 'Isi nama pengguna Anda untuk menghubungkan database MySQL Anda.<br />Jika Anda tidak tahu apa itu, coba menggunakan akun ftp Anda, kebanyakan nilainya sama.';
$txt['mysql_settings_password'] = 'Kata sandi MySQL';
$txt['mysql_settings_password_info'] = 'Di sini, masukkan kata sandi yang Anda perlukan untuk menghubungkan database MySQL Anda.<br />Jika Anda tidak tahu, Anda bisa mencoba kata sandi pad akun ftp Anda.';
$txt['mysql_settings_database'] = 'Nama database MySQL';
$txt['mysql_settings_database_info'] = 'Isi nama database yang ingin Anda gunakan di mana SMF akan menyimpan datanya.<br />Jika database ini tidak ada, instalator ini akan mencoba untuk membuatnya.';
$txt['mysql_settings_prefix'] = 'Prefiks tabel MySQL';
$txt['mysql_settings_prefix_info'] = 'Prefiks untuk setiap tabel dalam database.  <b>Jangan menginstalasi dua forum dengan prefiks yang sama!</b><br />Nilai ini membolehkan multipel instalasi dalam satu database.';

$txt['user_settings'] = 'Buat Akun Anda';
$txt['user_settings_info'] = 'Instalator sekarang akan membuat akun administrator untuk Anda.';
$txt['user_settings_username'] = 'Nama pengguna Anda';
$txt['user_settings_username_info'] = 'Pilih nama yang ingin Anda gunakan untuk masuk.<br />Ini tidak bisa diubah nantinya, tetapi nama tampilannya bisa.';
$txt['user_settings_password'] = 'Kata sandi';
$txt['user_settings_password_info'] = 'Isi kata sandi yang Anda sukai di sini, dan mengingatnya dengan baik!';
$txt['user_settings_again'] = 'Kata sandi';
$txt['user_settings_again_info'] = '(hanya untuk verifikasi.)';
$txt['user_settings_email'] = 'Alamat Email';
$txt['user_settings_email_info'] = 'Lengkapi juga alamat email Anda.  <b>Ini harus alamat email yang benar.</b>';
$txt['user_settings_database'] = 'Kata sandi Database MySQL';
$txt['user_settings_database_info'] = 'Instalator memerlukan Anda untuk menyediakan kata sandi database untuk membuat akun administrator, untuk alasan keamanan.';
$txt['user_settings_proceed'] = 'Selesai';

$txt['ftp_setup'] = 'Informasi Koneksi FTP';
$txt['ftp_setup_info'] = 'Instalator ini bisa menghubungkan via FTP untuk membetulkan file mana yang perlu ditulisi dan tidak.  Jika ini tidak bekerja bagi Anda, Anda perlu melakukannya secara manual dan membuat file bisa ditulisi.  Harap dicatat bahwa ini tidak mendukung SSL untuk saat ini.';
$txt['ftp_server'] = 'Server';
$txt['ftp_server_info'] = 'Ini haruslah server dan port untuk server FTP Anda.';
$txt['ftp_port'] = 'Port';
$txt['ftp_username'] = 'Nama pengguna';
$txt['ftp_username_info'] = 'Nama pengguna untuk masuk. <i>Ini tidak akan disimpan di mananpun.</i>';
$txt['ftp_password'] = 'Kata sandi';
$txt['ftp_password_info'] = 'Kata sandi untuk masuk. <i>Ini tidak akan disimpan di mananpun.</i>';
$txt['ftp_path'] = 'Path Instalasi';
$txt['ftp_path_info'] = 'Ini adalah path <i>relatif</i> yang Anda gunakan dalam server FTP Anda.';
$txt['ftp_path_found_info'] = 'Path dalam kotak di atas dideteksi secara otomatis.';
$txt['ftp_connect'] = 'Sambungkan';
$txt['ftp_setup_why'] = 'Untuk apa langkah ini?';
$txt['ftp_setup_why_info'] = 'Beberapa file perlu ditulis agar SMF bekerja dengan benar.  Langkah ini membolehkan Anda untuk membiarkan instalator membuat bisa ditulisi bagi Anda.  Tetapi, dalam banyak kasus ia tidak bekerja - dalam hal ini, pastikan file berikut adalah 777 (bisa ditulis, 755 pada beberapa host):';
$txt['ftp_setup_again'] = 'untuk menguji apakah bisa ditulisi lagi.';

$txt['error_php_too_low'] = 'Peringatan!  Nampaknya Anda tidak mempunyai versi PHP yang diinstalasi pada server web Anda yang memenuhi <b>kebutuhan minimum instalasi</b> SMF.<br />Jika Anda bukan host, Anda perlu meminta host Anda untuk memutakhirkan, atau menggunakan host lain - sebaliknya, silahkan mutakhirkan PHP ke versi terbaru.<br /><br />Jika Anda mengetahui bahwa versi PHP Anda cukup tinggi Anda bisa melanjutkan, meskipun tidak disarankan.';
$txt['error_missing_files'] = 'Tidak bisa menemukan file krusial instalasi dalam direktori dari naskah ini!<br /><br />Pastikan Anda sudah mengirimkan seluruh paket instalasi, termasuk file sql, dan coba lagi.';
$txt['error_session_save_path'] = 'Silahkan beritahu host Anda bahwa <b>session.save_path ditetapkan dalam php.ini</b> tidak benar!  Itu perlu diubah ke direktori yang <b>sudah ada</b>, dan <b>bisa ditulisi</b> oleh pengguna dimana PHP dijalankan.<br />';
$txt['error_windows_chmod'] = 'Anda berada pada server windows, dan beberapa file krusial tidak bisa ditulis.  Silahkan minta host Anda untuk memberikan <b>perijinan menulis</b> untuk pengguna PHP dimana dijalankan untuk file instalasi SMF Anda.  File-file berikut atau direktori harus bisa ditulisi:';
$txt['error_ftp_no_connect'] = 'Tidak bisa menghubungi server FTP dengan detil kombinasi ini.';
$txt['error_mysql_connect'] = 'Tidak bisa menghubungi server database MySQL dengan data yang disediakan.<br /><br />Jika Anda tidak yakin tentang apa yang diketikan, silahkan hubungi host Anda.';
$txt['error_mysql_too_low'] = 'Versi MySQL dimana server database yang Anda gunakan sudah tua, dan tidak memenuhi kebutuhan minimum SMF.<br /><br />Silahkan minta host Anda untuk memutakhirkan atau menyediakannya, dan jika mereka tidak mau, silahkan coba host yang berbeda.';
$txt['error_mysql_database'] = 'Instalator tidak bisa mengakses database &quot;<i>%s</i>&quot;.  Dengan beberapa host, Anda harus membuat database dalam panel administrasi sebelum SMF bisa menggunakannya.  Yang lainnya juga menambahkan prefiks - seperti nama pengguna Anda - ke nama database Anda.';
$txt['error_mysql_queries'] = 'Beberapa permintaan tidak dijalankan dengan benar.  Ini bisa disebabkan oleh versi MySQL yang tidak didukung (pengembangan atau tua).<br /><br />Informasi teknis mengenai permintaan:';
$txt['error_mysql_queries_line'] = 'Baris #';
$txt['error_mysql_missing'] = 'Instalator tidak bisa mendeteksi dukungan MySQL dalam PHP.  Silahkan minta host Anda untuk memastikan bahwa PHP sudah dikompilasi dengan MySQL, atau bahwa ekstensi yang benar sudah dipanggil.';
$txt['error_session_missing'] = 'Instalator tidak bisa mendeteksi dukungan sesi dalam instalasi server PHP Anda.  Silahkan minta host Anda untuk memastikan bahwa  PHP dikompilasi dengan dukungan sesi (kenyataannya, harus dikompilasi secara eksplisit tanpa itu.)';
$txt['error_user_settings_again_match'] = 'Anda memasukan dua kata sandi yang berbeda!';
$txt['error_user_settings_taken'] = 'Maaf, anggota sudah terdaftar dengan nama pengguna dan/atau kata sandi itu.<br /><br />Akun baru belum dibuat.';
$txt['error_user_settings_query'] = 'Kesalahan database terjadi ketika mencoba membuat administrator.  Kesalahan ini adalah:';
$txt['error_subs_missing'] = 'Tidak bisa menemukan file Sources/Subs.php.  Pastikan ia dikirimkan dengan benar, dan coba lagi.';
$txt['error_mysql_alter_priv'] = 'Akun MySQL yang Anda tetapkan tidak mempunyai perijinan untuk ALTER, CREATE, dan/atau DROP tabel dalam database; ini perlu agar SMF berfungsi dengan benar.';
$txt['error_versions_do_not_match'] = 'Instalator mendeteksi versi SMF lain sudah diinstalasi dengan informasi yang ditetapkan.  Jika Anda ingin mencoba memutakhirkan, Anda harus menggunakan pemutakhiran, bukan instalator.<br /><br />Sebaliknya, Anda mungkin ingin menggunakan informasi yang berbeda, atau membuat cadangan dan kemudian menghapus data yang ada dalam database saat ini.';
$txt['error_mod_security'] = 'Instalator mendeteksi modul mod_security diinstalasi pada server web Anda. Mod_security akan memblok formulir yang dikirimkan bahkan sebelum SMF memperoleh apapun. SMF mempunyai pemindai keamanan built-in yang akan bekerja lebih efektif daripada mod_security dan tidak akan memblok formulir yang dikirimkan.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">Informasi lebih jauh mengenai mematikan mod_security</a>';
$txt['error_utf8_mysql_version'] = 'Versi database Anda saat ini tidak mendukung penggunaan set karakter UTF-8. Anda masih bisa menginstalasi SMF tanpa masalah, tetapi tidak mencentang dukungan UTF-8. Jika Anda ingin menukarke UTF-8 nantinya (contoh. setelah server MySQL dari forum Anda sudah dimutakhirkan ke versi >= 4.1), Anda bisa mengubah forum Anda ke UTF-8 melalui panel admin.';

?>