<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Atur Perijinan';
$txt['permissions_modify'] = 'Ubah';
$txt['permissions_access'] = 'Akses';
$txt['permissions_allowed'] = 'Diijinkan';
$txt['permissions_denied'] = 'Ditolak';

$txt['permissions_switch'] = 'Tukar Ke';
$txt['permissions_global'] = 'Global';
$txt['permissions_local'] = 'Lokal';

$txt['permissions_groups'] = 'Perijinan oleh Grup anggota';
$txt['permissions_all'] = 'semua';
$txt['permissions_none'] = 'tidak ada';
$txt['permissions_set_permissions'] = 'Setel perijinan';

$txt['permissions_with_selection'] = 'Dengan pilihan';
$txt['permissions_apply_pre_defined'] = 'Terapkan profil perijinan pre-defined';
$txt['permissions_select_pre_defined'] = 'Pilih profil pre-defined';
$txt['permissions_copy_from_board'] = 'Copy perijinan dari board ini';
$txt['permissions_select_board'] = 'Pilih board';
$txt['permissions_like_group'] = 'Setel perijinan seperti grup ini';
$txt['permissions_select_membergroup'] = 'Pilih grup anggota';
$txt['permissions_add'] = 'Tambah perijinan';
$txt['permissions_remove'] = 'Bersihkan perijinan';
$txt['permissions_deny'] = 'Tolak perijinan';
$txt['permissions_select_permission'] = 'Pilih perijinan';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Anda hanya bisa memilih satu tindakan untuk mengubah perijinan';
$txt['permissions_no_action'] = 'Tidak ada tindakan yang dipilih';
$txt['permissions_deny_dangerous'] = 'Anda akan menolak satu atau lebih perijinan.\\nIni bisa berbahaya dan menyebabkan hasil yang tidak diharapkan jika Anda belum memastikan tidak ada seorangpun \\"secara kebetulan\\" dalam grup atau grup yang perijinannya Anda tolak.\\n\\nAnda yakin ingin melanjutkan?';

$txt['permissions_boards'] = 'Perijinan oleh Board';

$txt['permissions_modify_group'] = 'Ubah Grup';
$txt['permissions_general'] = 'Perijinan Umum';
$txt['permissions_board'] = 'Perijinan Board Global';
$txt['permissions_commit'] = 'Simpan perubahan';
$txt['permissions_modify_local'] = 'Ubah Perijinan Lokal';
$txt['permissions_on'] = 'pada board';
$txt['permissions_local_for'] = 'Perijinan Lokal untuk grup';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = 'Untuk setiap perijinan Anda bisa memilih baik \'Ijinkan\' (A), \'Tidak diijinkan\' (X), atau <span style="color: red;">\'Tolak\' (D)</span>.<br /><br />Ingat bahwa jika Anda menolak perijinan, anggota mana saja - baik moderator atau sebaliknya - yang berada dalam grup akan ditolaknya juga.<br />Untuk alasan ini, Anda harus menggunakan penolakan dengan hati-hati, hanya bila <b>perlu</b>. Tidak diijinkan, menolak kecuali sebaliknya dibolehkan.';

$txt['permissiongroup_general'] = 'Umum';
$txt['permissionname_view_stats'] = 'Lihat statistik forum';
$txt['permissionhelp_view_stats'] = 'Statistik forum adalah halaman yang meringkas semua statistik forum, seperti jumlah anggota, jumlah tulisan harian, dan beberapa statistik 10 teratas. Menghidupkan perijinan ini menambah link dibawah indeks board (\'[Stats Lengkap]\').';
$txt['permissionname_view_mlist'] = 'Lihat Daftar anggota';
$txt['permissionhelp_view_mlist'] = 'Daftar anggota menampilkan semua anggota yang terdaftar pada forum Anda. Daftar bisa disimpan dan dicari. Daftar anggota dihubungkan dari indeks board dan halaman statistik, dengan mengklik pada jumlah anggota.';
$txt['permissionname_who_view'] = 'Lihat Siapa yang Online';
$txt['permissionhelp_who_view'] = 'Siapa yang online menampilkan semua anggota yang saat ini online dan apa yang mereka lakukan saat itu. Perijinan ini hanya akan bekerja jika Anda juga menghidupkannya dalam \'Opsi dan Fitur\'. Anda bisa mengakses layar \'Siapa yang Online\' dengan mengklik link dalam seksi \'Pengguna Online\' dari indeks board. Bahkan jika ini ditolak, anggota masih bisa melihat siapa yang online, tapi tidak di mana mereka berada.';
$txt['permissionname_search_posts'] = 'Mencari tulisan dan topik';
$txt['permissionhelp_search_posts'] = 'Perijinan pencarian membolehkan pengguna untuk mencari semua board di mana ia diijinkan untuk mengakses. Ketika perijinan pencarian dihidupkan, tombol \'Cari\' akan ditambahkan ke bar tombol forum.';
$txt['permissionname_karma_edit'] = 'Ubah karma orang lain';
$txt['permissionhelp_karma_edit'] = 'Karma adalah fitur yang menampilkan popularitas anggota. Agar fitur ini bisa digunakan, Anda perlu menghidupkannya dalam \'Opsi dan Fitur\'. Perijinan ini akan membolehkan grup anddota menyalurkan pilihan. Perijinan ini tidak mempengaruhi pengunjung.';

$txt['permissiongroup_pm'] = 'Pesan Pribadi';
$txt['permissionname_pm_read'] = 'Baca pesan pribadi';
$txt['permissionhelp_pm_read'] = 'Perijinan ini membolehkan pengguna untuk mengakses seksi Pesasn Pribadi dan membaca Pesan Pribadinya. Tanpa perijinan ini pengguna tidak bisa mengirimkan Pesan Pribadi.';
$txt['permissionname_pm_send'] = 'Kirim pesan pribadi';
$txt['permissionhelp_pm_send'] = 'Mengirimkan pesan pribadi ke anggota terdaftar. Memerlukan perijinan \'Baca pesan pribadi\'.';

$txt['permissiongroup_calendar'] = 'Kalender';
$txt['permissionname_calendar_view'] = 'Lihat kalender';
$txt['permissionhelp_calendar_view'] = 'Kalender menampilkan ulang tahun setiap bulan, event dan hari libur. Perijinan ini membolehkan akses terhadap kalender ini. Ketika perijinan dihidupkan, tombol akan ditambahkan ke bar tombol atas dan sebuah daftar akan ditampilkan dibawah indeks board dan ulang tahun mendatang, event dan hari libur. Kalender perlu dihidupkan dari \'Edit Opsi dan Fitur\'.';
$txt['permissionname_calendar_post'] = 'Buat event dalam kalender';
$txt['permissionhelp_calendar_post'] = 'Event adalah topik yang dikaitkan ke tanggal tertentu atau jangkauan tanggal. Pembuatan event bisa dikerjakan dari kalender. Event hanya bisa dibuat jika pengguna yang membuat event diijinkan untuk menulis topik baru.';
$txt['permissionname_calendar_edit'] = 'Edit event dalam kalender';
$txt['permissionhelp_calendar_edit'] = 'Event adalah topik yang dikaitkan ke tanggal tertentu atau jangkauan tanggal. Event bisa diedit dengan mengklik bintang (*) merah disebelah tampilan even dalam kalender. Agar bisa mengedit event, pengguna harus mempunyai perijinan cukup untuk mengedit pesan pertama dari topik yang dikaitkan ke event.';
$txt['permissionname_calendar_edit_own'] = 'Event sendiri';
$txt['permissionname_calendar_edit_any'] = 'Event mana saja';

$txt['permissiongroup_maintenance'] = 'Administrasi Forum';
$txt['permissionname_admin_forum'] = 'Administrasi forum dan database';
$txt['permissionhelp_admin_forum'] = 'Perijinan membolehkan pengguna untuk:<ul><li>mengubah forum, database dan seting tema</li><li>mengatur paket</li><li>menggunakan forum dan piranti pemeliharaan database</li><li>melihat kesalahan dan log mod</li></ul> Gunakan perijinan ini dengan hati-hati, karena sangat berpengaruh.';
$txt['permissionname_manage_boards'] = 'Atur board dan kategori';
$txt['permissionhelp_manage_boards'] = 'Perijinan ini membolehkan pembuatan, pengeditan dan penghapusan board serta kategori.';
$txt['permissionname_manage_attachments'] = 'Atur lampiran dan avatar';
$txt['permissionhelp_manage_attachments'] = 'Perijinan ini membolehkan akses ke pusat lampiran, di mana semua lampiran forum dan avatar didaftarkan dan bisa dihapus.';
$txt['permissionname_manage_smileys'] = 'Atur smiley';
$txt['permissionhelp_manage_smileys'] = 'Ini membolehkan akses ke pusat smiley. Dalam pusat smiley Anda bisa menambah, mengedit, dan menghapus smiley dan set smiley.';
$txt['permissionname_edit_news'] = 'Edit berita';
$txt['permissionhelp_edit_news'] = 'Fungsi berita membolehkan baris berita acak muncul pada setiap layar. Agar bisa menggunakan fungsi berita, hidupkan itu dalam seting forum.';

$txt['permissiongroup_member_admin'] = 'Administrasi anggota';
$txt['permissionname_moderate_forum'] = 'Moderasi anggota forum';
$txt['permissionhelp_moderate_forum'] = 'Perijinan termasuk semua fungsi moderasi penting anggota:<ul><li>mengakses manajemen pendaftaran</li><li>akses untuk melihat/menghapus layar anggota</li><li>Info profil ekstensif, termasuk jejak IP/pengguna dan status (sembunyi) online</li><li>mengaktifkan akun</li><li>mendapatkan pemeberitahuan persetujuan dan menyetujui akun</li><li>kekebalan untuk mengabaikan PM</li><li>beberapa hal kecil lain</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Atur dan tempatkan grup anggota';
$txt['permissionhelp_manage_membergroups'] = 'Perijinan ini membolehkan pengguna untuk mengedit grup anggota dan menempatkan grup anggota ke anggota lainnya.';
$txt['permissionname_manage_permissions'] = 'Atur perijinan';
$txt['permissionhelp_manage_permissions'] = 'Perijinan ini membolehkan pengguna untuk mengedit semua perijinan dari grup anggota, secara global atau board individual.';
$txt['permissionname_manage_bans'] = 'Atur daftar pengucilan';
$txt['permissionhelp_manage_bans'] = 'Perijinan ini membolehkan pengguna untuk menambah atau menghapus nama pengguna, alamat IP, nama host dan alamat email ke daftar pengguna yang dikucilkan. Juga membolehkan untuk melihat serta menghapus entri log pengguna yang dikucilkan yang mencoba untuk masuk.';
$txt['permissionname_send_mail'] = 'Kirim email forum ke anggota';
$txt['permissionhelp_send_mail'] = 'Surat massal ke semua anggota forum, atau hanya beberapa grup anggota dengan email atau pesan pribadi (yang terakhir memerlukan perijinan \'Kirim Pesan Pribadi\').';

$txt['permissiongroup_profile'] = 'Profil Anggota';
$txt['permissionname_profile_view'] = 'Lihat ringkasan profil dan stats';
$txt['permissionhelp_profile_view'] = 'Perijinan ini membolehkan pengguna mengklik pada nama pengguna untuk melihat ringkasan dari seting profil, beberapa statistik dan semua tulisan dari pengguna.';
$txt['permissionname_profile_view_own'] = 'Profil sendiri';
$txt['permissionname_profile_view_any'] = 'Profil mana saja';
$txt['permissionname_profile_identity'] = 'Edit seting akun';
$txt['permissionhelp_profile_identity'] = 'Seting akun adalah seting dasar profil, seperti kata sandi, alamat email, grup anggota dan bahasa yang disukai.';
$txt['permissionname_profile_identity_own'] = 'Profil sendiri';
$txt['permissionname_profile_identity_any'] = 'Setiap Profil';
$txt['permissionname_profile_extra'] = 'Edit seting profil tambahan';
$txt['permissionhelp_profile_extra'] = 'Seting profil tambahan termasuk seting untuk avatar, preferensi tema, pemberitahuan dan Pesan Pribadi.';
$txt['permissionname_profile_extra_own'] = 'Profil sendiri';
$txt['permissionname_profile_extra_any'] = 'Setiap Profil';
$txt['permissionname_profile_title'] = 'Edit judul bebas';
$txt['permissionhelp_profile_title'] = 'Judul bebas ditampilkan pada halaman tampilan topik, di bawah profil dari setiap pengguna yang mempunyai judul bebas.';
$txt['permissionname_profile_title_own'] = 'Profil sendiri';
$txt['permissionname_profile_title_any'] = 'Setiap Profil';
$txt['permissionname_profile_remove'] = 'Hapus akun';
$txt['permissionhelp_profile_remove'] = 'Perijinan ini membolehkan pengguna untuk menghapus akunnya, ketika menyetel \'Akun Sendiri\'.';
$txt['permissionname_profile_remove_own'] = 'Akun Sendiri';
$txt['permissionname_profile_remove_any'] = 'Setiap akun';
$txt['permissionname_profile_server_avatar'] = 'Pilih avatar dari server';
$txt['permissionhelp_profile_server_avatar'] = 'Jika dihidupkan ini akan membolehkan pengguna untuk memilih avatar dari koleksi avatar yang diinstalasi pada server.';
$txt['permissionname_profile_upload_avatar'] = 'Kirim avatar ke server';
$txt['permissionhelp_profile_upload_avatar'] = 'Perijinan ini akan membolehkan pengguna untuk mengirimkan avatar pribadinya ke server.';
$txt['permissionname_profile_remote_avatar'] = 'Pilih avatar yang disimpan secara jarak jauh';
$txt['permissionhelp_profile_remote_avatar'] = 'Karena avatar mungkin mempengaruhi waktu pembuatan halaman secara negatif, memungkinkan untuk tidak mengijinkan grup anggota tertentu untuk menggunakan avatar dari server eksternal.';

$txt['permissiongroup_general_board'] = 'Umum';
$txt['permissionname_moderate_board'] = 'Moderasi board';
$txt['permissionhelp_moderate_board'] = 'Perijinan memoderasi board menambahkan beberapa perijinan kecil yang membuat moderator menjadi benar-benar moderator. Perijinan termasuk menjawab pada topik yang dikunci, mengubah waktu habis poling dan melihat hasil poling.';

$txt['permissiongroup_topic'] = 'Topik';
$txt['permissionname_post_new'] = 'Tulis topik baru';
$txt['permissionhelp_post_new'] = 'Perijinan ini membolehkan pengguna untuk menulis topik baru. Tidak mengijinkan menjawab terhadap jawaban yang ditulis pada topik.';
$txt['permissionname_merge_any'] = 'Gabung setiap topik';
$txt['permissionhelp_merge_any'] = 'Menggabungkan dua atau lebih topik menjadi satu. Urutan pesan dalam topik yang digabung akan didasarkan pada waktu pesan dibuat. Pengguna hanya bisa menggabung topik pada board itu di mana pengguna diijinkan untuk menggabung. Agar bisa menggabung multipel topik sekaligus, pengguna harus menghidupkan moderasi cepat dalam seting profilnya.';
$txt['permissionname_split_any'] = 'Pisahkan setiap topik';
$txt['permissionhelp_split_any'] = 'Memisahkan topik menjadi dua topik terpisah.';
$txt['permissionname_send_topic'] = 'Kirim topik ke teman';
$txt['permissionhelp_send_topic'] = 'Perijinan ini membolehkan pengguna untuk mengirimkan topik ke teman, dengan memasukan alamat emailnya dan menambahkan pesan.';
$txt['permissionname_make_sticky'] = 'Buat topik lengket';
$txt['permissionhelp_make_sticky'] = 'Topik lengket adalah topik yang selalu berada di atas board. Ini berguna untuk pemberitahuan atau pesan penting lainnya.';
$txt['permissionname_move'] = 'Pindahkan topik';
$txt['permissionhelp_move'] = 'Memindahkan topik dari satu board ke yang lainnya. Pengguna hanya bisa memilih tujuan board yang diijinkan untuk mengakses.';
$txt['permissionname_move_own'] = 'Topik sendiri';
$txt['permissionname_move_any'] = 'Setiap topik';
$txt['permissionname_lock'] = 'Kunci topik';
$txt['permissionhelp_lock'] = 'Perijinan ini membolehkan pengguna untuk mengunci topik. Ini bisa dilakukan agar memastikan tidak seorangpun bisa menjawab ke topik. Hanya digunakan dengan perijinan \'Moderasi board\' yang masih bisa menulis dalam topik terkunci.';
$txt['permissionname_lock_own'] = 'Topik sendiri';
$txt['permissionname_lock_any'] = 'Setiap topik';
$txt['permissionname_remove'] = 'Hapus topik';
$txt['permissionhelp_remove'] = 'Menghapus topik keseluruhan. Catatan bahwa perijinan ini tidak diijinkan untuk menghapus pesan khusus dalam topik!';
$txt['permissionname_remove_own'] = 'Topik sendiri';
$txt['permissionname_remove_any'] = 'Setiap topik';
$txt['permissionname_post_reply'] = 'Tulis jawaban ke topik';
$txt['permissionhelp_post_reply'] = 'Perijinan ini membolehkan menjawab topik.';
$txt['permissionname_post_reply_own'] = 'Topik sendiri';
$txt['permissionname_post_reply_any'] = 'Setiap topik';
$txt['permissionname_modify_replies'] = 'Ubah jawaban ke topik sendiri';
$txt['permissionhelp_modify_replies'] = 'Perijinan ini membolehkan pengguna yang memulai topik untuk mengubah semua jawaban pada topiknya.';
$txt['permissionname_delete_replies'] = 'Hapus jawaban ke topik sendiri';
$txt['permissionhelp_delete_replies'] = 'Perijinan ini membolehkan pengguna yang memulai topik untuk menghapus semua jawaban pada topiknya.';
$txt['permissionname_announce_topic'] = 'Umumkan topik';
$txt['permissionhelp_announce_topic'] = 'Ini membolehkan pengguna untuk mengirimkan email pengumuman mengenai topik ke semua anggota atau beberapa grup anggota.';

$txt['permissiongroup_post'] = 'Tulisan';
$txt['permissionname_delete'] = 'Hapus tulisan';
$txt['permissionhelp_delete'] = 'Hapus tulisan. Ini tidak membolehkan pengguna untuk menghapus tulisan pertama dari topik.';
$txt['permissionname_delete_own'] = 'Tulisan sendiri';
$txt['permissionname_delete_any'] = 'Setiap tulisan';
$txt['permissionname_modify'] = 'Ubah tulisan';
$txt['permissionhelp_modify'] = 'Edit tulisan';
$txt['permissionname_modify_own'] = 'Tulisan sendiri';
$txt['permissionname_modify_any'] = 'Setiap tulisan';
$txt['permissionname_report_any'] = 'Laporkan tulisan ke moderator';
$txt['permissionhelp_report_any'] = 'Perijinan ini menambahkan link ke setiap pesan, membolehkan pengguna untuk melaporkan tulisan ke moderator. Saat pelaporan, semua moderator pada board tersebut akan menerima email dengan link ke tulisan yang dilaporkan dan penjelasan masalah (seperti diberikan oleh pengguna yang melaporkan).';

$txt['permissiongroup_poll'] = 'Poling';
$txt['permissionname_poll_view'] = 'Lihat poling';
$txt['permissionhelp_poll_view'] = 'Perijinan ini membolehkan pengguna untuk melihat poling. Tanpa perijinan ini, pengguna hanya akan melihat topik.';
$txt['permissionname_poll_vote'] = 'Pilih dalam poling';
$txt['permissionhelp_poll_vote'] = 'Perijinan ini membolehkan pengguna (terdaftar) untuk menyampaikan satu pilihan. Tidak berlaku bagi pengunjung.';
$txt['permissionname_poll_post'] = 'Tulis poling';
$txt['permissionhelp_poll_post'] = 'Perijinan ini membolehkan pengguna untuk menulis poling baru.';
$txt['permissionname_poll_add'] = 'Tambah poling ke topik';
$txt['permissionhelp_poll_add'] = 'Menambahkan poling ke topik membolehkan pengguna untuk menambah poling setelah topik dibuat. Perijinan ini memerlukan hak yang cukup untuk mengedit tulisan pertama dari topik.';
$txt['permissionname_poll_add_own'] = 'Topik sendiri';
$txt['permissionname_poll_add_any'] = 'Setiap topik';
$txt['permissionname_poll_edit'] = 'Edit poling';
$txt['permissionhelp_poll_edit'] = 'Perijinan ini membolehkan pengguna untuk mengedit opsi dari poling dan mereset poling. Agar bisa mengedit jumlah maksimum pilihan dan waktu berakhirnya, pengguna perlu mempunyai perijinan \'Moderasi board\'.';
$txt['permissionname_poll_edit_own'] = 'Poling sendiri';
$txt['permissionname_poll_edit_any'] = 'Setiap poling';
$txt['permissionname_poll_lock'] = 'Kunci poling';
$txt['permissionhelp_poll_lock'] = 'Mengunci poling menjaga poling dari penerimaan pilihan lagi.';
$txt['permissionname_poll_lock_own'] = 'Poling sendiri';
$txt['permissionname_poll_lock_any'] = 'Setiap poling';
$txt['permissionname_poll_remove'] = 'Hapus poling';
$txt['permissionhelp_poll_remove'] = 'Perijinan ini membolehkan penghapusan poling.';
$txt['permissionname_poll_remove_own'] = 'Poling sendiri';
$txt['permissionname_poll_remove_any'] = 'Setiap poling';

$txt['permissiongroup_notification'] = 'Pemberitahuan';
$txt['permissionname_mark_any_notify'] = 'Minta pemberitahuan atas jawaban';
$txt['permissionhelp_mark_any_notify'] = 'Fitur ini membolehkan pengguna untuk menerima pemberitahuan kapan saja seseorang menjawab topik di mana mereka berlangganan.';
$txt['permissionname_mark_notify'] = 'Minta pemberitahuan pada topik baru';
$txt['permissionhelp_mark_notify'] = 'Pemberitahuan pada topik baru adalah fitur yang membolehkan pengguna untuk menerima email setiap kali topik baru dibuat pada board di mana mereka berlangganan.';

$txt['permissiongroup_attachment'] = 'Lampiran';
$txt['permissionname_view_attachments'] = 'Lihat lampiran';
$txt['permissionhelp_view_attachments'] = 'Lampiran adalah file yang dilampirkan ke pesan yang ditulis. Fitur ini bisa dihidupkan dan dikonfigurasi dalam \'Edit Opsi dan Fitur\'. Karena lampiran tidak diakses secara langsung, Anda bisa melindunginya dari penarikan oleh pengguna yang tidak mempunyai perijinan ini.';
$txt['permissionname_post_attachment'] = 'Tulis lampiran';
$txt['permissionhelp_post_attachment'] = 'Lampiran adalah file yang dilampirkan pada pesan yang ditulis. Satu pesan bisa berisi multipel lampiran.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Seting Perijinan';
$txt['groups_manage_permissions'] = 'Grup anggota diijinkan untuk mengatur perijinan';
$txt['permission_settings_submit'] = 'Simpan';
$txt['permission_settings_enable_deny'] = 'Hidupkan opsi untuk menolak perijinan';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Mematikan opsi ini akan memutakhirkan \\\'Tolak\\\'-perijinan ke \\\'Tidak Diijinkan\\\'.';
$txt['permission_by_membergroup_desc'] = 'Di sini Anda bisa menyetel semua perijinan global untuk setiap grup anggota. Perijinan ini berlaku pada semua  board yang tidak mempunyai penimpaan set perijinan lokal dalam layar-\'Perijinan oleh board\'.';
$txt['permission_by_board_desc'] = 'Di sini Anda bisa menyetel apakah board menggunakan perijinan global atau mempunyai rejim perijinan spesifik. Menggunakan perijinan lokal berarti bahwa untuk board itu, Anda bisa menyetel setiap perijinan untuk setiap grup anggota.';
$txt['permission_settings_desc'] = 'Di sini Anda bisa menyetel yang mempunyai perijinan untuk mengubah perijinan, juga bagaimana memuaskan serharusnya sebuah sistem.';
$txt['permission_settings_enable_postgroups'] = 'Hidupkan perijinan untuk jumlah tulisan berdasarkan grup';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Mematikan seting ini akan mematikan perijinan yang saat ini disetel ke jumlah tulisan berdasarkan grup.';
$txt['permission_settings_enable_by_board'] = 'Hidupkan perijinan tingkat lanjut oleh-board';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Mematikan seting ini akan menghapus semua setelan perijinan pada tingkat board.';

?>