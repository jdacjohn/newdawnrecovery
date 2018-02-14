<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'id_ID.utf8';
$txt['lang_dictionary'] = 'id';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
$txt['days_short'] = array('Mng', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
$txt['months_titles'] = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des');

$txt['newmessages0'] = 'baru';
$txt['newmessages1'] = 'baru';
$txt['newmessages3'] = 'Baru';
$txt['newmessages4'] = ',';

$txt[2] = 'Admin';

$txt[10] = 'Simpan';

$txt[17] = 'Ubah';
$txt[18] = $context['forum_name'] . ' - Indeks';
$txt[19] = 'Anggota';
$txt[20] = 'Nama Board';
$txt[21] = 'Tulisan';
$txt[22] = 'Tulisan terakhir';

$txt[24] = '(Tanpa Subyek)';
$txt[26] = 'Tulisan';
$txt[27] = 'Lihat Profil';
$txt[28] = 'Pengunjung';
$txt[29] = 'Pembuat';
$txt[30] = 'pada';
$txt[31] = 'Hapus';
$txt[33] = 'Mulai topik baru';

$txt[34] = 'Masuk';
// Use numeric entities in the below string.
$txt[35] = 'Nama pengguna';
$txt[36] = 'Kata sandi';

$txt[40] = 'Nama pengguna itu tidak ada.';

$txt[62] = 'Moderator Board';
$txt[63] = 'Hapus Topik';
$txt[64] = 'Topik';
$txt[66] = 'Ubah pesan';
$txt[68] = 'Nama';
$txt[69] = 'Email';
$txt[70] = 'Subyek';
$txt[72] = 'Pesan';

$txt[79] = 'Profil';

$txt[81] = 'Pilih kata sandi';
$txt[82] = 'Verifikasi kata sandi';
$txt[87] = 'Posisi';

$txt[92] = 'Lihat profil dari';
$txt[94] = 'Total';
$txt[95] = 'Tulisan';
$txt[96] = 'Website';
$txt[97] = 'Daftar';

$txt[101] = 'Indeks Pesan';
$txt[102] = 'Berita';
$txt[103] = 'Home';

$txt[104] = 'Kunci/Buka kunci Topik';
$txt[105] = 'Tulis';
$txt[106] = 'Kesalahan Telah Terjadi!';
$txt[107] = 'di';
$txt[108] = 'Keluar';
$txt[109] = 'Dimulai oleh';
$txt[110] = 'Jawaban';
$txt[111] = 'Tulisan terahkir';
$txt[114] = 'Masuk Administrasi';
// Use numeric entities in the below string.
$txt[118] = 'Topik';
$txt[119] = 'Bantuan';
$txt[121] = 'Hapus pesan';
$txt[125] = 'Beritahu';
$txt[126] = 'Anda ingin email pemberitahuan jika seseorang menjawab topik ini?';
// Use numeric entities in the below string.
$txt[130] = "Salam, Tim \n " . $context['forum_name'] . '.';
$txt[131] = 'Beritahu jawaban';
$txt[132] = 'Pindahkan Topik';
$txt[133] = 'Pindahkan ke';
$txt[139] = 'Halaman';
$txt[140] = 'Pengguna aktif dalam ' . $modSettings['lastActive'] . ' menit terakhir';
$txt[144] = 'Pesan Pribadi';
$txt[145] = 'Jawab dengan kutipan';
$txt[146] = 'Jawab';

$txt[151] = 'Tidak ada pesan...';
$txt[152] = 'Anda mempunyai';
$txt[153] = 'pesan';
$txt[154] = 'Hapus pesan ini';

$txt[158] = 'Pengguna Online';
$txt[159] = 'Pesan Pribadi';
$txt[160] = 'Lompat ke';
$txt[161] = 'ayo';
$txt[162] = 'Anda yakin ingin menghapus topik ini?';
$txt[163] = 'Ya';
$txt[164] = 'Tidak';

$txt[166] = 'Hasil Pencarian';
$txt[167] = 'Akhir dari Hasil';
$txt[170] = 'Maaf, tidak ada yang ditemukan';
$txt[176] = 'pada';

$txt[182] = 'Cari';
$txt[190] = 'Semua';

$txt[193] = 'Kembali';
$txt[194] = 'Pengingat kata sandi';
$txt[195] = 'Topik dimulai oleh';
$txt[196] = 'Judul';
$txt[197] = 'Ditulis oleh';
$txt[200] = 'Daftar yang bisa dicari dari semua anggota terdaftar.';
$txt[201] = 'Selamat datang';
$txt[208] = 'Pusat Administrasi';
$txt[211] = 'Edit Terakhir';
$txt[212] = 'Anda ingin mematikan pemberitahuan pada topik ini?';

$txt[214] = 'Tulisan terbaru';

$txt[227] = 'Lokasi';
$txt[231] = 'Kelamin';
$txt[233] = 'Tanggal Terdaftar';

$txt[234] = 'Lihat tulisan paling baru pada forum.';
$txt[235] = 'adalah topik yang baru-baru ini dimutakhirkan';

$txt[238] = 'Pria';
$txt[239] = 'Wanita';

$txt[240] = 'Katakter yang digunakan dalam Nama pengguna tidak benar.';

$txt['welcome_guest'] = 'Selamat datang, <b>' . $txt[28] . '</b>. Silahkan <a href="' . $scripturl . '?action=login">masuk</a> atau <a href="' . $scripturl . '?action=register">mendaftar</a>.';
$txt['welcome_guest_activate'] = '<br />Lupa <a href="' . $scripturl . '?action=activate">email aktivasi Anda?</a>';
$txt['hello_member'] = 'Hey,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Selamat datang,';
$txt[247] = 'Hey,';
$txt[248] = 'Selamat datang,';
$txt[249] = 'Silahkan';
$txt[250] = 'Kembali';
$txt[251] = 'Silahkan pilih tujuan';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Ditulis oleh';

$txt[287] = 'Smiley';
$txt[288] = 'Marah';
$txt[289] = 'Senyum';
$txt[290] = 'Tertawa';
$txt[291] = 'Sedih';
$txt[292] = 'Kedip';
$txt[293] = 'Geram';
$txt[294] = 'Terkejut';
$txt[295] = 'Kalem';
$txt[296] = 'Hah';
$txt[450] = 'Gulung mata';
$txt[451] = 'Lidah';
$txt[526] = 'Malu';
$txt[527] = 'Bibir rapat';
$txt[528] = 'Bingung';
$txt[529] = 'Cium';
$txt[530] = 'Menangis';

$txt[298] = 'Moderator';
$txt[299] = 'Moderator';

$txt[300] = 'Tandai Topik sudah Dibaca untuk Board ini';
$txt[301] = 'Dilihat';
$txt[302] = 'Baru';

$txt[303] = 'Lihat semua anggota';
$txt[305] = 'Lihat';
$txt[307] = 'Email';

$txt[308] = 'Melihat Anggota';
$txt[309] = 'dari';
$txt[310] = 'total anggota';
$txt[311] = 'ke';
$txt[315] = 'Lupa kata sandi Anda?';

$txt[317] = 'Tanggal';
// Use numeric entities in the below string.
$txt[318] = 'Dari';
$txt[319] = 'Subyek';
$txt[322] = 'Periksa pesan baru';
$txt[324] = 'Untuk';

$txt[330] = 'Topik';
$txt[331] = 'Anggota';
$txt[332] = 'Daftar Anggota';
$txt[333] = 'Tulisan Baru';
$txt[334] = 'Tidak ada Tulisan baru';

$txt['sendtopic_send'] = 'Kirim';

$txt[371] = 'Jarak Waktu';
$txt[377] = 'atau';

$txt[398] = 'Maaf, tidak ada yang ditemukan';

$txt[418] = 'Pemberitahuan';

$txt[430] = 'Maaf %s, Anda dikucilkan dari penggunaan forum ini!';

$txt[452] = 'Tandai SEMUA pesan sudah dibaca';

$txt[454] = 'Topik Hangat (Lebih dari ' . $modSettings['hotTopicPosts'] . ' jawaban)';
$txt[455] = 'Topik Sangat Hangat (Lebih dari ' . $modSettings['hotTopicVeryPosts'] . ' jawaban)';
$txt[456] = 'Topik Dikunci';
$txt[457] = 'Topik Normal';
$txt['participation_caption'] = 'Topik yang telah Anda tulis dalam';

$txt[462] = 'AYO';

$txt[465] = 'Cetak';
$txt[467] = 'Profil';
$txt[468] = 'Ringkasan Topik';
$txt[470] = 'N/A';
$txt[471] = 'pesan';
$txt[473] = 'Nama ini sudah dipakai oleh anggota lain.';

$txt[488] = 'Total Anggota';
$txt[489] = 'Total Tulisan';
$txt[490] = 'Total Topik';

$txt[497] = 'Menit untuk tetap masuk';

$txt[507] = 'Tinjau';
$txt[508] = 'Selalu masuk';

$txt[511] = 'Masuk';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'oleh';

$txt[578] = 'Jam';
$txt[579] = 'hari';

$txt[581] = ', anggota terbaru kami.';

$txt[582] = 'Mencari';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hi.+Anda+di+sana?';
$txt[604] = 'YIM';

$txt[616] = 'Ingat, forum dalam \'Mode Pemeliharaan\'.';

$txt[641] = 'Baca';
$txt[642] = 'kali';

$txt[645] = 'Statistik Forum';
$txt[656] = 'Anggota Terbaru';
$txt[658] = 'Total Kategori';
$txt[659] = 'Tulisan Terbaru';

$txt[660] = 'Anda mendapat';
$txt[661] = 'Klik';
$txt[662] = 'di sini';
$txt[663] = 'untuk melihatnya.';

$txt[665] = 'Total Board';

$txt[668] = 'Cetak Halaman';

$txt[679] = 'Ini harus alamat email yang benar.';

$txt[683] = 'Saya celaka!!';
$txt[685] = $context['forum_name'] . ' - Pusat Info';

$txt[707] = 'Kirim topik ini';

$txt['sendtopic_title'] = 'Kirim topik &quot;%s&quot; ke teman.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Yth %s,';
$txt['sendtopic_this_topic'] = 'Saya ingin Anda memeriksa "%s" pada ' . $context['forum_name'] . '.  Untuk melihatnya, silahkan klik link ini';
$txt['sendtopic_thanks'] = 'Terima kasih';
$txt['sendtopic_sender_name'] = 'Nama Anda';
$txt['sendtopic_sender_email'] = 'Alamat email Anda';
$txt['sendtopic_receiver_name'] = 'Nama penerima';
$txt['sendtopic_receiver_email'] = 'Alamat email penerima';
$txt['sendtopic_comment'] = 'Tambahkan komentar';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Komentar juga ditambahkan ke topik ini';

$txt[721] = 'Sembunyikan alamat email dari umum?';

$txt[737] = 'Centang semua';

// Use numeric entities in the below string.
$txt[1001] = 'Database Salah';
$txt[1002] = 'Silahkan coba lagi.  Jika Anda kembali ke layar kesalahan ini, laporkan kesalahan ke administrator.';
$txt[1003] = 'File';
$txt[1004] = 'Baris';
// Use numeric entities in the below string.
$txt[1005] = 'SMF telah mendeteksi dan mencoba membetulkan kesalahan dalam database Anda secara otomatis.  Jika Anda mempunyai masalah terus, atau terus menerima email ini, silahkan hubungi host Anda.';
$txt['database_error_versions'] = '<b>Catatan:</b> Nampaknya database Anda <em>mungkin</em> perlu dinaikkan. File forum Anda saat ini adalah versi ' . $forum_version . ', sementara database Anda versi ' . $modSettings['smfVersion'] . '. Kesalahan di atas mungkin akan hilang jika Anda menjalankan versi terbaru dari upgrade.php.';
$txt['template_parse_error'] = 'Penguraian Template Salah!';
$txt['template_parse_error_message'] = 'Nampaknya ada yang salah pada forum dengan sistem template.  Masalah ini hanya sementara, silahkan kembali lagi nanti dan mencoba lagi.  Jika Anda terus melihat pesan ini, silahkan hubungi administrator.<br /><br />Anda juga bisa mencoba <a href="javascript:location.reload();">menyegarkan halaman ini</a>.';
$txt['template_parse_error_details'] = 'Ada masalah pengambilan template <tt><b>%1$s</b></tt> atau file bahasa.  Silahkan periksa sintaks dan coba lagi - ingat, tanda kutip tunggal (<tt>\'</tt>) sering harus didampingi dengan garis miring terbalik (<tt>\\</tt>).  Untuk melihat informasi kesalahan spesifik dari PHP, coba <a href="' . $boardurl . '%1$s">mengakses file secara langsung</a>.<br /><br />Anda mungkin ingin mencoba <a href="javascript:location.reload();">menyegarkan halaman ini</a> or <a href="' . $scripturl . '?theme=1">menggunakan tema standar</a>.';

$txt['smf10'] = '<b>Hari ini</b> at ';
$txt['smf10b'] = '<b>Kemarin</b> at ';
$txt['smf20'] = 'Tulis poling baru';
$txt['smf21'] = 'Pertanyaan';
$txt['smf23'] = 'Kirimkan Pilihan';
$txt['smf24'] = 'Total Pemilih';
$txt['smf25'] = 'jalan pintas: tekan alt+s untuk mengirimkan/menulis atau alt+p meninjaunya dulu';
$txt['smf29'] = 'Lihat hasil';
$txt['smf30'] = 'Kunci Pilihan';
$txt['smf30b'] = 'Buka kunci Pilihan';
$txt['smf39'] = 'Edit Poling';
$txt['smf43'] = 'Poling';
$txt['smf47'] = '1 Hari';
$txt['smf48'] = '1 Minggu';
$txt['smf49'] = '1 Bulan';
$txt['smf50'] = 'Selamanya';
$txt['smf52'] = 'Masuk dengan nama pengguna, kata sandi dan lama sesi';
$txt['smf53'] = '1 Jam';
$txt['smf56'] = 'DIPINDAHKAN';
$txt['smf57'] = 'Silahkan masukkan penjelasan singkat kenapa<br />topik ini dipindahkan.';
$txt['smf60'] = 'Maaf, Anda tidak mempunyai cukup tulisan untuk mengubah karma - Anda memerlukan setidaknya ';
$txt['smf62'] = 'Maaf, Anda tidak bisa mengulang tindakan karma tanpa menunggu ';
$txt['smf82'] = 'Board';
$txt['smf88'] = 'dalam';
$txt['smf96'] = 'Topik Lengket';

$txt['smf138'] = 'Hapus';

$txt['smf199'] = 'Pesan Pribadi Anda';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[Stats Lengkap]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Kode';
$txt['smf239'] = 'Kutip dari';
$txt['smf240'] = 'Kutip';

$txt['smf251'] = 'Pisahkan Topik';
$txt['smf252'] = 'Gabung Topik';
$txt['smf254'] = 'Subyek Untuk Topik Baru';
$txt['smf255'] = 'Hanya memisahkan tulisan ini.';
$txt['smf256'] = 'Pisahkan topik setelah dan termasuk tulisan ini.';
$txt['smf257'] = 'Pilih tulisan untuk dipisahkan.';
$txt['smf258'] = 'Topik Baru';
$txt['smf259'] = 'Topik telah dipisahkan menjadi dua topik dengan sukses.';
$txt['smf260'] = 'Topik Asal';
$txt['smf261'] = 'Silahkan pilih tulisan mana yang ingin Anda pisahkan.';
$txt['smf264'] = 'Topik digabung dengan sukses.';
$txt['smf265'] = 'Topik yang Baru Digabung';
$txt['smf266'] = 'Topik yang akan digabung';
$txt['smf267'] = 'Board target';
$txt['smf269'] = 'Target topik';
$txt['smf274'] = 'Anda yakin ingin menggabung';
$txt['smf275'] = 'dengan';
$txt['smf276'] = 'Fungsi ini akan menggabung pesan dari dua topik menjadi satu topik. Pesan akan diurut berdasarkan waktu penulisan. Oleh karena itu, pesan yang ditulis lebih lama akan menjadi pesan pertama dari topik yang digabung.';

$txt['smf277'] = 'Set topik lengket';
$txt['smf278'] = 'Set topik non-lengket';
$txt['smf279'] = 'Kunci topik';
$txt['smf280'] = 'Buka kunci topik';

$txt['smf298'] = 'Pencarian Lanjutan';

$txt['smf299'] = 'RESIKO KEAMANAN UTAMA:';
$txt['smf300'] = 'Anda belum menghapus ';

$txt['smf301'] = 'Halaman dibuat dalam ';
$txt['smf302'] = ' detik dengan ';
$txt['smf302b'] = ' permintaan.';

$txt['smf315'] = 'Gunakan fungsi ini untuk memberitahu moderator dan administrator tentang pesan yang ditulis secara salah atau penyerangan.<br /><i>Harap dicatat bahwa alamat email Anda akan diperlihatkan ke moderator jika Anda menggunakan ini.</i>';

$txt['online2'] = 'Online';
$txt['online3'] = 'Offline';
$txt['online4'] = 'Pesan Pribadi (Online)';
$txt['online5'] = 'Pesan Pribadi (Offline)';
$txt['online8'] = 'Status';

$txt['topbottom4'] = 'Naik';
$txt['topbottom5'] = 'Turun';

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


$txt['calendar3'] = 'Ulang tahun:';
$txt['calendar4'] = 'Event:';
$txt['calendar3b'] = 'Ulang tahun mendatang:';
$txt['calendar4b'] = 'Event mendatang:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Bulan:';
$txt['calendar10'] = 'Tahun:';
$txt['calendar11'] = 'Hari:';
$txt['calendar12'] = 'Judul Event:';
$txt['calendar13'] = 'Tulis Dalam:';
$txt['calendar20'] = 'Edit Event';
$txt['calendar21'] = 'Hapus event ini?';
$txt['calendar22'] = 'Hapus Event';
$txt['calendar23'] = 'Tulis Event';
$txt['calendar24'] = 'Kalender';
$txt['calendar37'] = 'Link ke Kalender';
$txt['calendar43'] = 'Link Event';
$txt['calendar47'] = 'Kalender Mendatang';
$txt['calendar47b'] = 'Kalender Hari ini';
$txt['calendar51'] = 'Minggu';
$txt['calendar54'] = 'Jumlah Hari:';
$txt['calendar_how_edit'] = 'bagaimana Anda mengedit event ini?';
$txt['calendar_link_event'] = 'Kaitkan Event Ke Tulisan:';
$txt['calendar_confirm_delete'] = 'Anda yakin ingin menghapus event ini?';
$txt['calendar_linked_events'] = 'Event Terkait';

$txt['moveTopic1'] = 'Tulis topik pengalihan';
$txt['moveTopic2'] = 'Ubah subyek topik';
$txt['moveTopic3'] = 'Subyek Baru';
$txt['moveTopic4'] = 'Ubah setiap subyek pesan';

$txt['theme_template_error'] = 'Tidak bisa mengambil template \'%s\'.';
$txt['theme_language_error'] = 'Tidak bisa mengambil file bahasa \'%s\'.';

$txt['parent_boards'] = 'Anak Board';

$txt['smtp_no_connect'] = 'Tidak bisa menghubungi host SMTP';
$txt['smtp_port_ssl'] = 'Seting gerbang SMTP tidak benar; seharusnya 465 untuk SSL servers.';
$txt['smtp_bad_response'] = 'Tidak bisa mendapatkan kode respon server mail';
$txt['smtp_error'] = 'Terjadi masalah dengan pengiriman Mail. Kesalahan: ';
$txt['mail_send_unable'] = 'Tidak bisa mengirimkan mail ke alamat email \'%s\'';

$txt['mlist_search'] = 'Mencari anggota';
$txt['mlist_search2'] = 'Cari lagi';
$txt['mlist_search_email'] = 'Cari dengan alamat email';
$txt['mlist_search_messenger'] = 'Cari dengan nama panggilan messenger';
$txt['mlist_search_group'] = 'Cari dengan posisi';
$txt['mlist_search_name'] = 'Cari dengan nama';
$txt['mlist_search_website'] = 'Cari dengan website';
$txt['mlist_search_results'] = 'Hasil pencarian untuk';

$txt['attach_downloaded'] = 'di-download';
$txt['attach_viewed'] = 'dilihat';
$txt['attach_times'] = 'kali';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Seting';
$txt['never'] = 'Tidak pernah';
$txt['more'] = 'selengkapnya';

$txt['hostname'] = 'Nama host';
$txt['you_are_post_banned'] = 'Maaf %s, Anda dikucilkan dari penulisan ataupun pengiriman pesan pribadi pada forum ini.';
$txt['ban_reason'] = 'Alasan';

$txt['tables_optimized'] = 'Tabel database dioptimasi';

$txt['add_poll'] = 'Tambah Poling';
$txt['poll_options6'] = 'Anda hanya boleh memilih sampai %s opsi.';
$txt['poll_remove'] = 'Hapus Poling';
$txt['poll_remove_warn'] = 'Anda yakin ingin menghapus poling ini dari topik?';
$txt['poll_results_expire'] = 'Hasil akan ditampilkan ketika pemilihan ditutup';
$txt['poll_expires_on'] = 'Penutupan Pemilihan';
$txt['poll_expired_on'] = 'Pemilihan ditutup';
$txt['poll_change_vote'] = 'Hapus Pemilihan';
$txt['poll_return_vote'] = 'Opsi Pemilihan';

$txt['quick_mod_remove'] = 'Hapus yang dipilih';
$txt['quick_mod_lock'] = 'Kunci yang dipilih';
$txt['quick_mod_sticky'] = 'Lengketkan yang dipilih';
$txt['quick_mod_move'] = 'Pindahkan yang dipilih ke';
$txt['quick_mod_merge'] = 'Gabung yang dipilih';
$txt['quick_mod_markread'] = 'Tandai yang dipilih sudah dibaca';
$txt['quick_mod_go'] = 'Ayo!';
$txt['quickmod_confirm'] = 'Anda yakin ingin melakukan ini?';

$txt['spell_check'] = 'Pemeriksaan Ejaan';

$txt['quick_reply_1'] = 'Jawab Cepat';
$txt['quick_reply_2'] = 'Dengan <i>Jawab-Cepat</i> Anda bisa menggunakan kode bulletin board dan smiley sebagaimana tulisan normal, tetapi jauh lebih menyenangkan.';
$txt['quick_reply_warning'] = 'Perhatian: topik ini sekarang dikunci!<br />Hanya admin dan moderator yang bisa menjawab.';

$txt['notification_enable_board'] = 'Anda yakin ingin menghidupkan pemberitahuan atas topik baru untuk board ini?';
$txt['notification_disable_board'] = 'Anda yakin ingin mematikan pemberitahuan atas topik baru untuk board ini?';
$txt['notification_enable_topic'] = 'Anda yakin ingin menghidupkan pemberitahuan atas jawaban baru untuk topik ini?';
$txt['notification_disable_topic'] = 'Anda yakin ingin mematikan pemberitahuan atas jawaban baru untuk topik ini?';

$txt['rtm1'] = 'Laporkan ke moderator';

$txt['unread_topics_visit'] = 'Topik Terbaru yang Belum Dibaca';
$txt['unread_topics_visit_none'] = 'Tidak ada topik yang belum dibaca sejak kuncjungan terakhir Anda.  <a href="' . $scripturl . '?action=unread;all">Klik di sini untuk mencoba semua topik yang belum dibaca</a>.';
$txt['unread_topics_all'] = 'Semua Topik Tidak Dibaca';
$txt['unread_replies'] = 'Mutakhirkan Topik';

$txt['who_title'] = 'Siapa Online';
$txt['who_and'] = ' dan ';
$txt['who_viewing_topic'] = ' melihat topik ini.';
$txt['who_viewing_board'] = ' melihat board ini.';
$txt['who_member'] = 'Anggota';

$txt['powered_by_php'] = 'Didukung oleh PHP';
$txt['powered_by_mysql'] = 'Didukung oleh MySQL';
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['valid_css'] = 'Valid CSS!';

$txt['guest'] = 'Pengunjung';
$txt['guests'] = 'Pengunjung';
$txt['user'] = 'Pengguna';
$txt['users'] = 'Pengguna';
$txt['hidden'] = 'Sembunyi';
$txt['buddy'] = 'Teman';
$txt['buddies'] = 'Teman';
$txt['most_online_ever'] = 'Terbanyak Online';
$txt['most_online_today'] = 'Terbanyak Online Hari ini';

$txt['merge_select_target_board'] = 'Pilih target board dari topik yang digabung';
$txt['merge_select_poll'] = 'Pilih poling mana yang harus dimiliki gabungan topik';
$txt['merge_topic_list'] = 'Pilih topik yang akan digabung';
$txt['merge_select_subject'] = 'Pilih subyek dari topik gabungan';
$txt['merge_custom_subject'] = 'Subyek bebas';
$txt['merge_enforce_subject'] = 'Ubah subyek dari semua pesan';
$txt['merge_include_notifications'] = 'Sertakan pemberitahuan?';
$txt['merge_check'] = 'Gabung?';
$txt['merge_no_poll'] = 'Tidak ada poling';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Ikon Sekarang';

$txt['smileys_current'] = 'Smiley Set Sekarang';
$txt['smileys_none'] = 'Tidak ada Smileys';
$txt['smileys_forum_board_default'] = 'Standar Forum/Board';

$txt['search_results'] = 'Hasil Pencarian';
$txt['search_no_results'] = 'Tidak ada yang ditemukan';

$txt['totalTimeLogged1'] = 'Total waktu tinggal: ';
$txt['totalTimeLogged2'] = ' hari, ';
$txt['totalTimeLogged3'] = ' jam dan ';
$txt['totalTimeLogged4'] = ' menit.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'h';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Ada';
$txt['approve_thereare'] = 'Ada';
$txt['approve_member'] = 'satu anggota';
$txt['approve_members'] = 'anggota';
$txt['approve_members_waiting'] = 'menunggu persetujuan.';

$txt['notifyboard_turnon'] = 'Anda ingin email pemberitahuan saat seseorang menulis topik baru dalam board ini?';
$txt['notifyboard_turnoff'] = 'Anda yakin tidak ingin menerima pemberitahuan atas topik baru untuk board ini?';

$txt['activate_code'] = 'Kode aktivasi Anda adalah';

$txt['find_members'] = 'Cari anggota';
$txt['find_username'] = 'Nama, nama pengguna, atau alamat email';
$txt['find_buddies'] = 'Hanya Menampilkan Teman?';
$txt['find_wildcards'] = 'Wildcard Diijinkan: *, ?';
$txt['find_no_results'] = 'Tidak ada yang ditemukan';
$txt['find_results'] = 'Hasil';
$txt['find_close'] = 'Tutup';

$txt['unread_since_visit'] = 'Tampilkan tulisan tidak dibaca sejak kunjungan terakhir.';
$txt['show_unread_replies'] = 'Tampilkan jawaban baru ke tulisan Anda.';

$txt['change_color'] = 'Ganti warna';

$txt['quickmod_delete_selected'] = 'Hapus yang Dipilih';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Anda menerima satu atau lebih pesan pribadi.\\nLihat sekarang (dalam jendela baru)?';

$txt['previous_next_back'] = '&laquo; sebelumnya';
$txt['previous_next_forward'] = 'berikutnya &raquo;';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'Topik ini sudah dipindahkan ke ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Sempitkan atau Lebarkan header.';

$txt['mark_unread'] = 'Tandai tidak dibaca';

$txt['ssi_not_direct'] = 'Harap tidak mengakses SSI.php dengan URL secara langsung; mungkin Anda ingin menggunakan path (%s) atau menambahkan ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php tidak bisa mengambil sesi!  Ini disebabkan ada masalah dengan keluar dan fungsi lainnya - pastikan SSI.php disertakan sebelum *yang lainnya* dalam naskah Anda!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Tinjau tulisan';
$txt['preview_fetch'] = 'Pengambilan Tinjauan...';
$txt['preview_new'] = 'Pesan baru';
$txt['error_while_submitting'] = 'Kesalahan berikut atau kesalahan terjadi saat menulis pesan ini:';

$txt['split_selected_posts'] = 'Tulisan yang dipilih';
$txt['split_selected_posts_desc'] = 'Tulisan di bawah akan membentuk topik baru setelah pemisahan.';
$txt['split_reset_selection'] = 'reset pilihan';

$txt['modify_cancel'] = 'Batal';
$txt['mark_read_short'] = 'Tandai Dibaca';

$txt['pm_short'] = 'Pesan Saya';
$txt['hello_member_ndt'] = 'Halo';

$txt['ajax_in_progress'] = 'Mengambil...';

?>