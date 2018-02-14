<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'Penginstall SMF';
$txt['installer_language'] = 'Bahasa';
$txt['installer_language_set'] = 'Set';
$txt['congratulations'] = 'Selamat, proses install selesai!';
$txt['congratulations_help'] = 'Jika kapan saja anda memerlukan sokongan, atau SMF gagal bekerja dengan betul, harap diingat bahawa <a href="http://www.simplemachines.org/community/index.php" target="_blank">bantuan tersedia</a> bila anda memerlukannya.';
$txt['still_writable'] = 'Direktori install anda masih boleh ditulis.  Alangkah baiknya untuk melakukan chmod pada direktori itu agar tidak boleh ditulis untuk sebab sekuriti.';
$txt['delete_installer'] = 'Klik di sini untuk memadam fail install.php sekarang.';
$txt['delete_installer_maybe'] = '<em>(tidak bekerja pada semua server.)</em>';
$txt['go_to_your_forum'] = 'Sekarang anda boleh melihat <a href="%1$s">forum yang baru saja diinstall</a> dan mulai menggunakannya.  anda mesti masuk lebih dulu, setelah itu anda akan boleh mengakses pusat pengurusan.';
$txt['good_luck'] = 'Semoga berjaya!<br />Simple Machines';

$txt['user_refresh_install'] = 'Forum Disegarkan';
$txt['user_refresh_install_desc'] = 'Selama install, penginstall menemukan bahawa (dengan butiran yang anda sediakan) satu atau lebih table yang akan dibuat penginstall ini telah ada.<br />Setiap table yang kurang dalam install anda telah dibuat ulang dengan data standar, tapi tiada data yang dipadam dari table yang telah ada.';

$txt['default_topic_subject'] = 'Selamat datang di SMF!';
$txt['default_topic_message'] = 'Selamat datang di Forum Simple Machines!<br /><br />Kami harap anda menikmati penggunaan forum anda.&nbsp; Jika anda mempunyai masalah, jangan ragu-ragu untuk [url=http://www.simplemachines.org/community/index.php]meminta bantuan kami[/url].<br /><br />Terima kasih!<br />Simple Machines';
$txt['default_board_name'] = 'Diskusi Umum';
$txt['default_board_description'] = 'Bebas untuk membicarakan apa saja dalam board ini.';
$txt['default_category_name'] = 'Kategori Umum';
$txt['default_time_format'] = '%d %B %Y, %I:%M:%S %p';
$txt['default_news'] = 'SMF - Baru saja Diinstall!';
$txt['default_karmaLabel'] = 'Karma:';
$txt['default_karmaSmiteLabel'] = '[tampar]';
$txt['default_karmaApplaudLabel'] = '[sanjung]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nroot';
$txt['default_smileyset_name'] = 'Set Alienine';
$txt['default_classic_smileyset_name'] = 'Classic';
$txt['default_theme_name'] = 'Standar Tema SMF - Curve';
$txt['default_classic_theme_name'] = 'Tema Klasik YaBB SE';
$txt['default_babylon_theme_name'] = 'Tema Babylon';

$txt['default_administrator_group'] = 'Pengurus';
$txt['default_global_moderator_group'] = 'Global Moderator';
$txt['default_moderator_group'] = 'Moderator';
$txt['default_newbie_group'] = 'Baru';
$txt['default_junior_group'] = 'Anak';
$txt['default_full_group'] = 'Remaja';
$txt['default_senior_group'] = 'Dewasa';
$txt['default_hero_group'] = 'Unggul';

$txt['default_smiley_smiley'] = 'Senyum';
$txt['default_wink_smiley'] = 'Kenyit';
$txt['default_cheesy_smiley'] = 'Sinis';
$txt['default_grin_smiley'] = 'Geram';
$txt['default_angry_smiley'] = 'Marah';
$txt['default_sad_smiley'] = 'Sedih';
$txt['default_shocked_smiley'] = 'Terkejut';
$txt['default_cool_smiley'] = 'Tenang';
$txt['default_huh_smiley'] = 'Dengus';
$txt['default_roll_eyes_smiley'] = 'Pusing Mata';
$txt['default_tongue_smiley'] = 'Ejek';
$txt['default_embarrassed_smiley'] = 'Malu';
$txt['default_lips_sealed_smiley'] = 'Tutup mulut';
$txt['default_undecided_smiley'] = 'Pening';
$txt['default_kiss_smiley'] = 'Cium';
$txt['default_cry_smiley'] = 'Nangis';
$txt['default_evil_smiley'] = 'Jahat';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Keriting';

$txt['error_message_click'] = 'Klik di sini';
$txt['error_message_try_again'] = 'untuk mencuba langkah ini lagi.';
$txt['error_message_bad_try_again'] = 'untuk tetap mencuba install, tapi perhatikan bahawa ini <em>sangat tidak</em> disarankan.';

$txt['install_settings'] = 'Tetapan Dasar';
$txt['install_settings_info'] = 'Hanya beberapa hal untuk anda sediakan ;).';
$txt['install_settings_name'] = 'Nama forum';
$txt['install_settings_name_info'] = 'Ini adalah nama forum anda, misal &quot;Forum Pengujian&quot;.';
$txt['install_settings_name_default'] = 'Komunitas Saya';
$txt['install_settings_url'] = 'URL forum';
$txt['install_settings_url_info'] = 'Ini adalah URL ke forum anda <strong>tanpa akhiran \'/\'!</strong>.<br />Dalam banyak kasus, anda boleh membiarkan nilai standar dalam kotak ini - ia biasanya benar.';
$txt['install_settings_compress'] = 'Output Gzip';
$txt['install_settings_compress_title'] = 'Kompresi output untuk menghemat bandwidth.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Fungsi ini tidak bekerja dengan betul pada semua server, tapi anda boleh banyak menghemat bandwidth.<br />Klik <a href="install.php?obgz=1&amp;pass_string=PASS" onclick="return reqWin(this.href, 200, 60);" target="_blank">di sini</a> untuk mengujinya. (semestinya menyatakan "LULUS".)';
$txt['install_settings_dbsession'] = 'Sesi Database';
$txt['install_settings_dbsession_title'] = 'Gunakan database untuk sesi daripada menggunakan fail.';
$txt['install_settings_dbsession_info1'] = 'Fitur ini hampir selalu jadi yang terbaik, karena menjadikan sesi lebih berdiri sendiri.';
$txt['install_settings_dbsession_info2'] = 'Fitur ini umumnya adalah ide yang baik, tapi mungkin tidak bekerja pada server ini.';
$txt['install_settings_utf8'] = 'Set Karakter UTF-8';
$txt['install_settings_utf8_title'] = 'Gunakan UTF-8 sebagai standar set karakter';
$txt['install_settings_utf8_info'] = 'Fitur ini mengizinkan set karakter internasional pada database dan forum, UTF-8. Ini berguna ketika bekerja dengan multi bahasa yang menggunakan set karakter berbeza.';
$txt['install_settings_stats'] = 'Ijinkan Koleksi Statistik';
$txt['install_settings_stats_title'] = 'Ijinkan Simple Machines untuk Mengoleksi Statistik Dasar Bulanan';
$txt['install_settings_stats_info'] = 'Jika dihidupkan, ini akan mengizinkan Simple Machines untuk mengunjungi laman anda sekali dalam sebulan untuk mengumpul statistik asas. Ini akan membantu kami menentukan keputusan tetapan mana untuk mengoptimasi software for. Untuk maklumat lebih lengkap sila kunjungi <a href="http://www.simplemachines.org/about/stats.php" target="_blank">laman info</a> kami.';
$txt['install_settings_proceed'] = 'Teruskan';

$txt['mysql_settings'] = 'MySQL Server Settings';
$txt['mysql_settings_info'] = 'These are the settings to use for your MySQL server.  If you don\'t know the values, you should ask your host what they are.';
$txt['mysql_settings_server'] = 'MySQL server name';
$txt['mysql_settings_server_info'] = 'This is nearly always localhost - so if you don\'t know, try localhost.';
$txt['mysql_settings_username'] = 'MySQL username';
$txt['mysql_settings_username_info'] = 'Fill in the username you need to connect to your MySQL database here.<br />If you don\'t know what it is, try the username of your ftp account, most of the time they are the same.';
$txt['mysql_settings_password'] = 'MySQL password';
$txt['mysql_settings_password_info'] = 'Here, put the password you need to connect to your MySQL database.<br />If you don\'t know this, you should try the password to your ftp account.';
$txt['mysql_settings_database'] = 'MySQL database name';
$txt['mysql_settings_database_info'] = 'Fill in the name of the database you want to use for SMF to store its data in.<br />If this database does not exist, this installer will try to create it.';
$txt['mysql_settings_prefix'] = 'MySQL table prefix';
$txt['mysql_settings_prefix_info'] = 'The prefix for every table in the database.  <b>Do not install two forums with the same prefix!</b><br />This value allows for multiple installations in one database.';

$txt['user_settings'] = 'Buat Akaun Anda';
$txt['user_settings_info'] = 'Penginstall sekarang akan mencipta akaun pengurus baru bagi anda.';
$txt['user_settings_username'] = 'Nama pengguna anda';
$txt['user_settings_username_info'] = 'Pilih nama yang anda mahukan untuk masuk.<br />Ini tidak boleh diubah kemudiannya, tapi nama paparan anda boleh.';
$txt['user_settings_password'] = 'Kata kunci';
$txt['user_settings_password_info'] = 'Isi kata kunci yang dikehendaki di sini, dan ingat dengan baik!';
$txt['user_settings_again'] = 'Kata kunci';
$txt['user_settings_again_info'] = '(hanya untuk pengesahan.)';
$txt['user_settings_email'] = 'Alamat Email';
$txt['user_settings_email_info'] = 'Lengkapi alamat email anda juga.  <strong>Ini mesti alamat email yang sah.</strong>';
$txt['user_settings_database'] = 'Kata kunci Database';
$txt['user_settings_database_info'] = 'Penginstall memerlukan anda untuk menyediakan kata kunci database untuk membuat akaun pengurus, untuk sebab sekuriti.';
$txt['user_settings_proceed'] = 'Selesai';

$txt['ftp_setup'] = 'Maklumat Koneksi FTP';
$txt['ftp_setup_info'] = 'Penginstall boleh menyambung via FTP untuk membetulkan fail yang perlu boleh ditulis atau tidak.  Jika ini tidak bekerja bagi anda, anda mesti melakukannya secara manual dan menjadikan fail boleh ditulis.  Harap dicatat bahawa ini tidak menyokong SSL buat masa ini.';
$txt['ftp_server'] = 'Server';
$txt['ftp_server_info'] = 'Ini mesti server dan port untuk server FTP anda.';
$txt['ftp_port'] = 'Port';
$txt['ftp_username'] = 'Nama pengguna';
$txt['ftp_username_info'] = 'Nama pengguna untuk masuk. <em>Ini tidak akan disimpan di manapun.</em>';
$txt['ftp_password'] = 'Kata kunci';
$txt['ftp_password_info'] = 'Kata kunci untuk masuk. <em>Ini tidak akan disimpan di manapun.</em>';
$txt['ftp_path'] = 'Path Install';
$txt['ftp_path_info'] = 'Ini adalah path <em>relatif</em> yang anda pakai dalam server FTP anda.';
$txt['ftp_path_found_info'] = 'Path dalam kotak di atas secara automatik dikesan.';
$txt['ftp_connect'] = 'Sambung';
$txt['ftp_setup_why'] = 'Untuk apa langkah ini?';
$txt['ftp_setup_why_info'] = 'Beberapa fail perlu boleh ditulis agar SMF bekerja dengan betul.  Langkah ini mengizinkan anda untuk membiarkan penginstall membuatnya boleh ditulis bagi anda.  Akan tetapi, dalam hal ia tidak bekerja, sila jadikan fail berikut 777 (boleh ditulis, 755 pada beberapa host):';
$txt['ftp_setup_again'] = 'untuk menguji apakah fail ini boleh ditulis lagi.';

$txt['error_php_too_low'] = 'Amaran! Anda tiada versi PHP pada server web anda yang sesuai dengan <strong>syarat minimum install</strong>.<br />Anda perlu meminta host anda untuk meningkatkannya, atau gunakan host berbeza - sebaliknya, sila tingkatkan PHP ke versi terbaru.<br /><br />Jika anda mengetahui bahawa versi PHP anda cukup tinggi anda boleh melanjutkan, meskipun ini sangat tidak disarankan.';
$txt['error_missing_files'] = 'Tidak boleh menemukan fail install penting dalam direktori naskah ini!<br /><br />Pastikan anda memuatnaik seluruh pakej install, termasuk fail sql, dan kemudian cuba lagi.';
$txt['error_session_save_path'] = 'Sila beritahu host anda bahawa <strong>session.save_path yang ditetapkan dalam php.ini</strong> tidak benar!  Ia perlu diubah ke direktori yang <strong>ada</strong>, dan <strong>boleh ditulis</strong> oleh pengguna di mana PHP dijalankan.<br />';
$txt['error_windows_chmod'] = 'Anda pada server windows, dan beberapa fail penting tidak boleh ditulis.  Sila minta host anda untuk memberikan <strong>izin menulis</strong> ke pengguna di mana PHP dijalankan untuk fail dalam install SMF anda.  File-file atau direktori berikut perlu boleh ditulis:';
$txt['error_ftp_no_connect'] = 'Tidak boleh menyambung ke server FTP dengan kombinasi butiran.';
$txt['error_mysql_connect'] = 'Cannot connect to the MySQL database server with the supplied data.<br /><br />If you are not sure about what to type in, please contact your host.';
$txt['error_mysql_too_low'] = 'The version of MySQL that your database server is using is very old, and does not meet SMF\'s minimum requirements.<br /><br />Please ask your host to either upgrade it or supply a new one, and if they won\'t, please try a different host.';
$txt['error_mysql_database'] = 'The installer was unable to access the &quot;<i>%s</i>&quot; database.  With some hosts, you have to create the database in your administration panel before SMF can use it.  Some also add prefixes - like your username - to your database names.';
$txt['error_mysql_queries'] = 'Some of the queries were not executed properly.  This could be caused by an unsupported (development or old) version of MySQL.<br /><br />Technical information about the queries:';
$txt['error_mysql_queries_line'] = 'Line #';
$txt['error_mysql_missing'] = 'The installer was unable to detect MySQL support in PHP.  Please ask your host to ensure that PHP was compiled with MySQL, or that the proper extension is being loaded.';
$txt['error_session_missing'] = 'Penginstall tidak boleh mengesan sokongan sesi dalam install PHP server anda.  Sila minta host anda untuk memastikan bahawa PHP dikompilasi dengan sokongan sesi (sebenarnya, mesti dikompilasi tanpa itu secara eksplisit.)';
$txt['error_user_settings_again_match'] = 'Anda memasukkan dua kata kunci yang sama sekali berbeza!';
$txt['error_user_settings_taken'] = 'Maaf, seorang ahli telah terdaftar dengan nama pengguna dan/atau alamat email itu.<br /><br />Akaun baru belum dibuat.';
$txt['error_user_settings_query'] = 'Kesalahan database terjadi saat mencuba untuk membuat pengurus.  Kesalahan ini adalah:';
$txt['error_subs_missing'] = 'Tidak boleh menemukan fail Sources/Subs.php.  Pastikan itu dimuatnaik dengan betul, dan kemudian cuba lagi.';
$txt['error_mysql_alter_priv'] = 'The MySQL account you specified does not have permission to ALTER, CREATE, and/or DROP tables in the database; this is necessary for SMF to function properly.';
$txt['error_versions_do_not_match'] = 'Penginstall mengesan ada versi SMF lain diinstall dengan maklumat yang ditetapkan.  Jika anda mencuba untuk meningkatkan, anda mesti menggunakan pengemaskini, bukan penginstall.<br /><br />Sebaliknya, anda mungkin mahu menggunakan maklumat berbeza, atau membuat backup dan kemudian memadam data yang ketika ini ada dalam database.';
$txt['error_mod_security'] = 'Penginstall mengesan modul mod sekuriti diinstall pada server web anda. Mod sekuriti akan menyekat borang yang dikirimkan bahkan sebelum SMF mendapatkan jawapan apapun. SMF mempunyai pemindai sekuriti sedia ada yang akan bekerja lebih efektif daripada mod sekuriti dan tidak akan menyekat borang yang dikirimkan.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">Maklumat lebih jauh mengenai mematikan mod sekuriti</a>';
$txt['error_utf8_mysql_version'] = 'The current version of your database doesn\'t support the use of the UTF-8 character set. You can still install SMF without any problems, but only with UTF-8 support unchecked. If you would like to switch over to UTF-8 in the future (e.g. after the MySQL server of your forum has been upgraded to a version >= 4.1), you can convert your forum to UTF-8 through the admin panel.';

?>