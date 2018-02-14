<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Mengatur Keizinan';
$txt['permissions_modify'] = 'Ubah';
$txt['permissions_access'] = 'Access';
$txt['permissions_allowed'] = 'Diizinkan';
$txt['permissions_denied'] = 'Dinafikan';

$txt['permissions_switch'] = 'Switch To';
$txt['permissions_global'] = 'Global';
$txt['permissions_local'] = 'Local';

$txt['permissions_groups'] = 'Permissions by Membergroup';
$txt['permissions_all'] = 'semua';
$txt['permissions_none'] = 'tiada';
$txt['permissions_set_permissions'] = 'Tetapkan keizinan';

$txt['permissions_with_selection'] = 'Dengan pilihan';
$txt['permissions_apply_pre_defined'] = 'Terapkan set keizinan tetapan asal';
$txt['permissions_select_pre_defined'] = 'Pilih profil tetapan asal';
$txt['permissions_copy_from_board'] = 'Salin keizinan dari papan ini';
$txt['permissions_select_board'] = 'Pilih papan';
$txt['permissions_like_group'] = 'Tetapkan keizinan seperti grup ini';
$txt['permissions_select_membergroup'] = 'Pilih grup ahli';
$txt['permissions_add'] = 'Tambah keizinan';
$txt['permissions_remove'] = 'Padam keizinan';
$txt['permissions_deny'] = 'Tolak keizinan';
$txt['permissions_select_permission'] = 'Pilih keizinan';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Anda hanya boleh memilih satu aksi untuk memodifikasi keizinan';
$txt['permissions_no_action'] = 'Tindakan tidak dipilih';
$txt['permissions_deny_dangerous'] = 'Anda akan menafikan satu atau lebih keizinan.\\nIni boleh berbahaya dan menyebabkan hasil yang tidak diharapkan jika anda belum yakin tidak seorangpun \\"secara kebetulan\\" di dalam grup yang anda nafikan keizinannya.\\n\\nAnda yakin mahu teruskan?';

$txt['permissions_boards'] = 'Permissions by Board';

$txt['permissions_modify_group'] = 'Ubah Grup';
$txt['permissions_general'] = 'Keizinan Umum';
$txt['permissions_board'] = 'Keizinan Papan Default';
$txt['permissions_commit'] = 'Simpan Perubahan';
$txt['permissions_modify_local'] = 'Modify Local Permissions';
$txt['permissions_on'] = 'dalam profil';
$txt['permissions_local_for'] = 'Keizinan untuk grup';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = 'Untuk setiap keizinan anda dapat mengambil baik \'Izinkan\' (A), \'Larang\' (X), atau <span style="color: red;">\'Tolak\' (D)</span>.<br /><br />Ingat bahawa jika anda menafikan satu keizinan, setiap ahli - apakah moderator atau bukan - yang ada dalam grup itu akan dinafikan juga.<br />Untuk alasan ini, anda semestinya menggunakan penafian dengan hati-hati, hanya bila <strong>diperlukan</strong>. Larang, pula menafikan kecuali sebaliknya diizinkan.';

$txt['permissiongroup_general'] = 'Umum';
$txt['permissionname_view_stats'] = 'Lihat statistik forum';
$txt['permissionhelp_view_stats'] = 'Statistik forum adalah sebuah laman yang meringkas semua statistik forum, seperti jumlah ahli, jumlah pos harian, dan beberapa statistik 10 teratas. Mengaktifkan keizinan ini akan menambah link di bawah indeks papan (\'[Statistik Lengkap]\').';
$txt['permissionname_view_mlist'] = 'Lihat senarai ahli dan grup';
$txt['permissionhelp_view_mlist'] = 'Senarai ahli memperlihatkan semua ahli yang telah berdaftar pada forum anda. Senarai dapat diurut dan dicari. Senarai ahli dihubungkan dari indeks papan dan laman statistik, dengan klik pada jumlah ahli. Ini juga berlaku bagi laman grup yang merupakan senarai mini ahli dalam grup tersebut.';
$txt['permissionname_who_view'] = 'Lihat Siapa Online';
$txt['permissionhelp_who_view'] = 'Siapa online memaparkan semua ahli yang ketika ini online dan apa yang mereka lakukan ketika ini. Keizinan ini hanya akan bekerja jika anda juga mengaktifkannya dalam \'Ciri dan Pilihan\'. Anda dapat mengakses layar \'Siapa Online\' dengan klik link dalam bahagian \'Pengguna Online\' dari indeks papan. Meskipun dinafikan, ahli masih akan boleh melihat siapa online, hanya tidak di mana mereka berada.';
$txt['permissionname_search_posts'] = 'Mencari pos dan topik';
$txt['permissionhelp_search_posts'] = 'Keizinan pencarian membolehkan pengguna untuk mencari semua papan di mana dia diizinkan untuk mengakses. Ketika keizinan pencarian diaktifkan, butang \'Cari\' akan ditambahkan ke bar butang forum.';
$txt['permissionname_karma_edit'] = 'Ubah karma orang lain';
$txt['permissionhelp_karma_edit'] = 'Karma adalah ciri yang memperlihatkan populariti ahli. Untuk menggunakan ciri ini, anda perlu mengaktifkannya dalam \'Ciri dan Pilihan\'. Keizinan ini akan membolehkan grup ahli untuk memberikan suara. Keizinan ini tidak berkesan pada tetamu.';

$txt['permissiongroup_pm'] = 'Mesej Peribadi';
$txt['permissionname_pm_read'] = 'Baca mesej peribadi';
$txt['permissionhelp_pm_read'] = 'Keizinan ini membolehkan pengguna untuk mengakses bahagian Mesej Peribadi dan membaca Mesej Peribadinya. Tanpa keizinan ini pengguna tidak boleh untuk mengirimkan Mesej Peribadi.';
$txt['permissionname_pm_send'] = 'Kirim mesej peribadi';
$txt['permissionhelp_pm_send'] = 'Kirimkan mesej peribadi ke ahli berdaftar lain. Memerlukan keizinan \'Baca mesej peribadi\'.';

$txt['permissiongroup_calendar'] = 'Kalendar';
$txt['permissionname_calendar_view'] = 'Lihat kalendar';
$txt['permissionhelp_calendar_view'] = 'Kalendar memaparkan setiap bulannya hari jadi, acara dan hari cuti. Keizinan ini membolehkan akses ke kalendar ini. Ketika keizinan ini diaktifkan, butang akan ditambahkan ke bar butang atas dan sebuah senarai akan dipaparkan di bawah indeks papan dengan hari jadi, acara dan hari cuti mendatang. Kalendar perlu diaktifkan dari \'Edit Ciri dan Pilihan\'.';
$txt['permissionname_calendar_post'] = 'Buat acara dalam kalendar';
$txt['permissionhelp_calendar_post'] = 'Sebuah acara adalah topik yang dihubungkan ke tarikh dan jangkauan tarikh tertentu. Pembuatan acara boleh dikerjakan dari kalendar. Sebuah acara hanya boleh dibuat jika pengguna yang membuat acara diizinkan untuk menulis topik baru.';
$txt['permissionname_calendar_edit'] = 'Edit acara dalam kalendar';
$txt['permissionhelp_calendar_edit'] = 'Sebuah acara adalah topik yang dihubgungkan ke tarikh atau jangkauan tarikh tertentu. Acara dapat diedit dengan klik bintang merah (*) di sebelah acara dalam paparan kalendar. Untuk boleh edit sebuah acara, pengguna mesti memiliki izin yang cukup untuk edit mesej pertama pada topik yang dikaitkan ke acara ini.';
$txt['permissionname_calendar_edit_own'] = 'Acara sendiri';
$txt['permissionname_calendar_edit_any'] = 'Setiap acara';

$txt['permissiongroup_maintenance'] = 'Pengurusan forum';
$txt['permissionname_admin_forum'] = 'Pengurusan forum dan database';
$txt['permissionhelp_admin_forum'] = 'Keizinan ini membolehkan pengguna untuk:<ul class="normallist"><li>mengubah forum, database dan tetapan tema</li><li>mengatur paket</li><li>menggunakan piranti forum dan pemeliharaan database</li><li>melihat kesalahan dan log moderasi</li></ul> Gunakan keizinan ini dengan hati-hati, kerana sangat penting.';
$txt['permissionname_manage_boards'] = 'Mengatur papan dan kategori';
$txt['permissionhelp_manage_boards'] = 'Keizinan ini membolehkan pembuatan, pengeditan, dan pemadaman papan dan kategori.';
$txt['permissionname_manage_attachments'] = 'Mengatur lampiran dan avatar';
$txt['permissionhelp_manage_attachments'] = 'Keizinan ini membolehkan akses ke pusat lampiran, di mana semua lampiran forum dan avatar didaftarkan dan dapat dipadam.';
$txt['permissionname_manage_smileys'] = 'Mengatur smiley dan ikon mesej';
$txt['permissionhelp_manage_smileys'] = 'Ini membolehkan akses ke pusat smiley. Dalam pusat smiley anda boleh menambah, edit, dan memadam smiley dan set smiley. Jika anda telah mengaktifkan ikon mesej diubahsuai, anda juga boleh menambah dan edit ikon mesej dengan keizinan ini.';
$txt['permissionname_edit_news'] = 'Edit berita';
$txt['permissionhelp_edit_news'] = 'Fungsi berita mengizinkan baris berita acak untuk muncul pada setiap layar. Untuk menggunakan fungsi berita, aktifkan ia dalam tetapan forum.';

$txt['permissiongroup_member_admin'] = 'Pengurusan ahli';
$txt['permissionname_moderate_forum'] = 'Moderasi ahli forum';
$txt['permissionhelp_moderate_forum'] = 'Keizinan ini termasuk semua fungsi moderasi penting:<ul class="normallist"><li>mengakses ke pengurusan pendaftaran</li><li>akses ke layar lihat/padam ahli</li><li>info profil ekstensif, termasuk jejak IP/pengguna dan status online (sembunyi)</li><li>mengaktifkan akaun</li><li>memperoleh kelulusan makluman dan kelulusan akaun</li><li>kebal untuk mengabaikan mesej</li><li>beberapa hal kecil lainnya</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Mengatur dan menempatkan grup ahli';
$txt['permissionhelp_manage_membergroups'] = 'Keizinan ini membolehkan pengguna untuk edit grup ahli dan menempatkan grup ahli ke ahli lain.';
$txt['permissionname_manage_permissions'] = 'Mengatur keizinan';
$txt['permissionhelp_manage_permissions'] = 'Keizinan ini membolehkan pengguna untuk edit semua keizinan grup ahli, secara global atau untuk papan individual.';
$txt['permissionname_manage_bans'] = 'Mengatur senarai sekatan';
$txt['permissionhelp_manage_bans'] = 'Keizinan ini membolehkan pengguna untuk menambah atau memadam nama pengguna, alamat IP, nama host dan alamat email ke sebuah senarai pengguna yang disekat. Ia juga membolehkan pengguna untuk melihat dan memadam entri log pengguna yang disekat yang mencuba untuk masuk.';
$txt['permissionname_send_mail'] = 'Kirim email forum ke ahli';
$txt['permissionhelp_send_mail'] = 'Surat masal semua ahli forum, atau hanya beberapa grup ahli dengan email atau mesej peribadi (mesej peribadi memerlukan keizinan \'Kirim Mesej Peribadi\').';

$txt['permissiongroup_profile'] = 'Profil Ahli';
$txt['permissionname_profile_view'] = 'Lihat ringkasan dan statistik profil';
$txt['permissionhelp_profile_view'] = 'Keizinan ini membolehkan pengguna klik pada nama pengguna untuk melihat tetapan profilnya, beberapa statistik dan semua pos pengguna.';
$txt['permissionname_profile_view_own'] = 'Profil sendiri';
$txt['permissionname_profile_view_any'] = 'Setiap profil';
$txt['permissionname_profile_identity'] = 'Edit tetapan akaun';
$txt['permissionhelp_profile_identity'] = 'Keizinan ini adalah tetapan dasar profil, seperti kata kunci, alamat email, grup ahli dan bahasa yang dimahukan.';
$txt['permissionname_profile_identity_own'] = 'Profil sendiri';
$txt['permissionname_profile_identity_any'] = 'Setiap profil';
$txt['permissionname_profile_extra'] = 'Edit tetapan profil tambahan';
$txt['permissionhelp_profile_extra'] = 'Tetapan profil tambahan termasuk tetapan avatar, keutamaan tema, makluman dan Mesej Peribadi.';
$txt['permissionname_profile_extra_own'] = 'Profil sendiri';
$txt['permissionname_profile_extra_any'] = 'Setiap profil';
$txt['permissionname_profile_title'] = 'Edit tajuk plihan';
$txt['permissionhelp_profile_title'] = 'Tajuk plihan dipaparkan pada laman paparan topik, di bawah profil setiap pengguna yang memiliki tajuk plihan.';
$txt['permissionname_profile_title_own'] = 'Profil sendiri';
$txt['permissionname_profile_title_any'] = 'Setiap profil';
$txt['permissionname_profile_remove'] = 'Padam akaun';
$txt['permissionhelp_profile_remove'] = 'Keizinan ini membolehkan pengguna untuk memadam akaunnya, ketika ditetapkan ke \'Akaun Sendiri\'.';
$txt['permissionname_profile_remove_own'] = 'Akaun sendiri';
$txt['permissionname_profile_remove_any'] = 'Setiap akaun';
$txt['permissionname_profile_server_avatar'] = 'Pilih avatar dari server';
$txt['permissionhelp_profile_server_avatar'] = 'Jika aktif ia membolehkan pengguna untuk memilih avatar dari koleksi avatar pada server.';
$txt['permissionname_profile_upload_avatar'] = 'Muatnaik avatar ke server';
$txt['permissionhelp_profile_upload_avatar'] = 'Keizinan ini akan membolehkan pengguna untuk memuatnaik avatar peribadinya ke server.';
$txt['permissionname_profile_remote_avatar'] = 'Pilih avatar yang disimpan dari jauh';
$txt['permissionhelp_profile_remote_avatar'] = 'Kerana avatar dapat mempengaruhi waktu pembuatan laman secara negatif, dimungkinkan untuk melarang grup ahli tertentu untuk menggunakan avatar dari server eksternal.';

$txt['permissiongroup_general_board'] = 'Umum';
$txt['permissionname_moderate_board'] = 'Moderasi papan';
$txt['permissionhelp_moderate_board'] = 'Keizinan memoderasi papan menambahkan beberapa keizinan kecil yang membuat moderator menjadi benar-benar moderator. Keizinan termasuk menjawab ke topik yang dikunci, mengubah undian yang waktunya berakhir dan melihat hasil undian.';

$txt['permissiongroup_topic'] = 'Topik';
$txt['permissionname_post_new'] = 'Pos topik baru';
$txt['permissionhelp_post_new'] = 'Keizinan ini membolehkan pengguna untuk menulis topik baru. Ia tidak membolehkan untuk menulis jawapan ke topik.';
$txt['permissionname_merge_any'] = 'Gabung setiap topik';
$txt['permissionhelp_merge_any'] = 'Gabung dua atau lebih topik menjadi satu. Urutan mesej di dalam topik gabungan akan didasarkan pada waktu mesej dibuat. Pengguna hanya boleh menggabung topik pada papan itu, pengguna diizinkan untuk menggabung. Untuk menggabung multipel topik sekaligus, pengguna mesti mengaktifkan moderasi cepat dalam tetapan profilnya.';
$txt['permissionname_split_any'] = 'Pisahkan setiap topik';
$txt['permissionhelp_split_any'] = 'Pisahkan topik menjadi dua topik terpisah.';
$txt['permissionname_send_topic'] = 'Kirim topik ke teman';
$txt['permissionhelp_send_topic'] = 'Keizinan ini membolehkan pengguna untuk mengirim email topik ke temannya dengan memasukan alamat email dan diizinkan untuk menambahkan mesej.';
$txt['permissionname_make_sticky'] = 'Jadikan topik lekit';
$txt['permissionhelp_make_sticky'] = 'Topik lekit adalah topik yang selalu berada di atas papan. Ini berguna untuk pengumuman atau mesej penting lainnya.';
$txt['permissionname_move'] = 'Pindahkan topik';
$txt['permissionhelp_move'] = 'Pindahkan topik dari satu papan ke yang lainnya. Pengguna hanya boleh memilih target papan di mana mereka diizinkan untuk mengakses.';
$txt['permissionname_move_own'] = 'Topik sendiri';
$txt['permissionname_move_any'] = 'Setiap topik';
$txt['permissionname_lock'] = 'Kunci topik';
$txt['permissionhelp_lock'] = 'Keizinan ini membolehkan pengguna untuk mengunci topik. Ini boleh dikerjakan agar memastikan tiada seorangpun boleh menjawab ke topik. Hanya pengguna dengan keizinan \'Moderasi papan\' masih boleh menulis dalam topik yang dikunci.';
$txt['permissionname_lock_own'] = 'Topik sendiri';
$txt['permissionname_lock_any'] = 'Setiap topik';
$txt['permissionname_remove'] = 'Padam topik';
$txt['permissionhelp_remove'] = 'Padam topik secara kesemuaan. Perhatikan bahawa keizinan ini tidak membolehkan untuk memadam mesej tertentu di dalam topik!';
$txt['permissionname_remove_own'] = 'Topik sendiri';
$txt['permissionname_remove_any'] = 'Setiap topik';
$txt['permissionname_post_reply'] = 'Pos jawapan ke topik';
$txt['permissionhelp_post_reply'] = 'Keizinan ini membolehkan menjawab ke topik.';
$txt['permissionname_post_reply_own'] = 'Topik sendiri';
$txt['permissionname_post_reply_any'] = 'Setiap topik';
$txt['permissionname_modify_replies'] = 'Ubah jawapan ke topik sendiri';
$txt['permissionhelp_modify_replies'] = 'Keizinan ini membolehkan pengguna yang memulai topik untuk mengubah semua jawapan ke topiknya.';
$txt['permissionname_delete_replies'] = 'Padam jawapan ke topik sendiri';
$txt['permissionhelp_delete_replies'] = 'Keizinan ini membolehkan pengguna yang memulai topik memadam semua jawapan ke topik.';
$txt['permissionname_announce_topic'] = 'Umumkan topik';
$txt['permissionhelp_announce_topic'] = 'Ini mengizinkan pengguna untuk mengirimkan email pengumuman mengenai topik ke semua ahli atau beberapa grup ahli.';

$txt['permissiongroup_post'] = 'Pos';
$txt['permissionname_delete'] = 'Padam pos';
$txt['permissionhelp_delete'] = 'Padam pos. Ini tidak mengizinkan pengguna untuk memadam pos pertama pada topik.';
$txt['permissionname_delete_own'] = 'Pos sendiri';
$txt['permissionname_delete_any'] = 'Setiap topik';
$txt['permissionname_modify'] = 'Ubah pos';
$txt['permissionhelp_modify'] = 'Edit pos';
$txt['permissionname_modify_own'] = 'Pos sendiri';
$txt['permissionname_modify_any'] = 'Setiap pos';
$txt['permissionname_report_any'] = 'Laporkan pos ke moderator';
$txt['permissionhelp_report_any'] = 'Keizinan ini menambah link ke setiap mesej, mengizinkan pengguna untuk melaporkan pos ke moderator. Saat pelaporan, semua moderator pada papan itu akan menerima email dengan link ke pos yang dilaporkan dan deskripsi masalah (diberikan oleh pengguna pelapor).';

$txt['permissiongroup_poll'] = 'Undian';
$txt['permissionname_poll_view'] = 'Lihat undian';
$txt['permissionhelp_poll_view'] = 'Keizinan ini membolehkan pengguna untuk melihat undian. Tanpa keizinan ini, pengguna hanya melihat topik.';
$txt['permissionname_poll_vote'] = 'Pilih dalam undian';
$txt['permissionhelp_poll_vote'] = 'Keizinan ini membolehkan pengguna (berdaftar) untuk memberikan satu suara. Ini tidak berlaku bagi tetamu.';
$txt['permissionname_poll_post'] = 'Pos undian';
$txt['permissionhelp_poll_post'] = 'Keizinan ini mengizinkan pengguna untuk menulis undian baru. Pengguna mesti memiliki keizinan \'Pos topik baru\'.';
$txt['permissionname_poll_add'] = 'Tambah undian ke topik';
$txt['permissionhelp_poll_add'] = 'Tambah undian ke topik membolehkan pengguna untuk menambah undian setelah topik telah dibuat. Keizinan ini memerlukan hak yang cukup untuk edit pos pertama pada topik.';
$txt['permissionname_poll_add_own'] = 'Topik sendiri';
$txt['permissionname_poll_add_any'] = 'Setiap topik';
$txt['permissionname_poll_edit'] = 'Edit undian';
$txt['permissionhelp_poll_edit'] = 'Keizinan ini membolehkan pengguna untuk edit pilihan undian dan mereset undian. Agar boleh edit jumlah pilihan maksimum dan waktu berakhirnya, pengguna perlu mempunyai keizinan \'Moderasi papan\'.';
$txt['permissionname_poll_edit_own'] = 'Undian Sendiri';
$txt['permissionname_poll_edit_any'] = 'Setiap undian';
$txt['permissionname_poll_lock'] = 'Kunci undian';
$txt['permissionhelp_poll_lock'] = 'Mengunci undian menghindari undian atas penerimaan suara baru.';
$txt['permissionname_poll_lock_own'] = 'Undian sendiri';
$txt['permissionname_poll_lock_any'] = 'Setiap undian';
$txt['permissionname_poll_remove'] = 'Padam undian';
$txt['permissionhelp_poll_remove'] = 'Keizinan ini membolehkan pemadaman undian.';
$txt['permissionname_poll_remove_own'] = 'Undian sendiri';
$txt['permissionname_poll_remove_any'] = 'Setiap undian';

$txt['permissiongroup_notification'] = 'Makluman';
$txt['permissionname_mark_any_notify'] = 'Minta makluman pada jawapan';
$txt['permissionhelp_mark_any_notify'] = 'Ciri ini mengizinkan anda untuk menerima makluman kapan saja seseorang menjawab pada topik di mana mereka berlangganan.';
$txt['permissionname_mark_notify'] = 'Minta makluman pada topik baru';
$txt['permissionhelp_mark_notify'] = 'Makluman pada topik baru adalah ciri yang mengizinkan pengguna untuk menerima email setiap kali topik baru dibuat pada papan di mana mereka berlangganan.';

$txt['permissiongroup_attachment'] = 'Lampiran';
$txt['permissionname_view_attachments'] = 'Lihat lampiran';
$txt['permissionhelp_view_attachments'] = 'Lampiran adalah fail yang dilampirkan ke mesej yang dipos. Ciri ini dapat diaktifkan dan dikonfigurasi dalam \'Edit Ciri dan Pilihan\'. Kerana lampiran tidak diakses secara langsung, anda dapat melindunginya dimuatturun oleh pengguna yang tiada izin.';
$txt['permissionname_post_attachment'] = 'Pos lampiran';
$txt['permissionhelp_post_attachment'] = 'Lampiran adalah fail yang dilampirkan ke mesej yang dipos. Satu mesej dapat berisi pelbagai lampiran.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Tetapan Keizinan';
$txt['groups_manage_permissions'] = 'Grup ahli diperbolehkan untuk mengatur keizinan';
$txt['permission_settings_submit'] = 'Simpan';
$txt['permission_settings_enable_deny'] = 'Aktifkan pilihan untuk menafikan keizinan';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Mematikan pilihan ini akan memutakhirkan keizinan-\\\'Tolak\\\' ke \\\'Larang\\\'.';
$txt['permission_by_membergroup_desc'] = 'Here you can set all global permissions for each membergroup. These permissions are valid on all boards that have not been overridden by local permissions set in the \'Permissions by board\'-screen.';
$txt['permission_by_board_desc'] = 'Di sini anda dapat menetapkan apakah papan menggunakan keizinan global atau mempunyai aturan keizinan spesifik. Menggunakan keizinan lokal bererti bahawa untuk papan itu, anda dapat menetapkan setiap keizinan untuk setiap grup ahli.';
$txt['permission_settings_desc'] = 'Di sini anda dapat menetapkan siapa yang memiliki keizinan untuk mengubah keizinan, juga seberapa memuaskan sistem keizinan semestinya.';
$txt['permission_settings_enable_postgroups'] = 'Aktifkan keizinan untuk grup berasaskan jumlah pos';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Mematikan tetapan ini akan memadam keizinan yang ketika ini ditetapkan ke grup berasaskan jumlah pos.';
$txt['permission_settings_enable_by_board'] = 'Enable advanced by-board permissions';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Disabling this setting will remove all permissions set on board level.';

?>