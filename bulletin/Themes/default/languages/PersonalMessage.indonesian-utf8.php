<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Indeks Pesan Pribadi';
$txt[148] = 'Kirim pesan';
$txt[150] = 'Untuk';
$txt[1502] = 'Bcc';
$txt[316] = 'Kotak masuk';
$txt[320] = 'Kotak keluar';
$txt[321] = 'Pesan Baru';
$txt[411] = 'Hapus Pesan';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Hapus semua pesan dalam PMBOX Anda';
$txt[413] = 'Anda yakin ingin menghapus semua pesan?';
$txt[535] = 'Penerima';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Pesan Pribadi Baru: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'Anda telah menerima pesan pribadi dari SENDER pada ' . $context['forum_name'] . '.' . "\n\n" . 'PENTING: Ingat, ini hanyalah pemberitahuan. Harap tidak menjawab ke email ini.' . "\n\n" . 'Pesan yang dikirimkan kepada Anda:' . "\n\n" . 'MESSAGE';
$txt[748] = '(multipel penerima: \'nama1, nama2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Jawab ke Pesan Pribadi ini di sini:';

$txt['smf249'] = 'Anda yakin ingin menghapus semua pesan pribadi yang dipilih?';

$txt['sent_to'] = 'Dikirimkan ke';
$txt['reply_to_all'] = 'Jawab ke Semua';

$txt['pm_capacity'] = 'Kapasitas';
$txt['pm_currently_using'] = '%s pesan, %s%% penuh.';

$txt['pm_error_user_not_found'] = 'Tidak bisa menemukan anggota \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Pengguna \'%s\' telah memblok pesan pribadi Anda.';
$txt['pm_error_data_limit_reached'] = 'PM tidak bisa dikirimkan ke \'%s\' karena kotak masuknya penuh!';
$txt['pm_successfully_sent'] = 'PM telah dikirimkan dengan sukses ke \'%s\'.';
$txt['pm_too_many_recipients'] = 'Anda tidak boleh mengirimkan pesan pribadi ke lebih dari %d penerima sekaligus.';
$txt['pm_too_many_per_hour'] = 'Anda telah melampaui batas dari %d pesan pribadi per jam.';
$txt['pm_send_report'] = 'Kirim laporan';
$txt['pm_save_outbox'] = 'Simpan duplikatnya dalam kotak keluar saya';
$txt['pm_undisclosed_recipients'] = 'Penerima tidak menrima';

$txt['pm_read'] = 'Baca';
$txt['pm_replied'] = 'Jawab ke';

// Message Pruning.
$txt['pm_prune'] = 'Pangkas Pesan';
$txt['pm_prune_desc1'] = 'Hapus semua pesan pribadi lebih lama dari';
$txt['pm_prune_desc2'] = 'hari.';
$txt['pm_prune_warning'] = 'Anda yakin ingin memangkas pesan pribadi Anda?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Aksi Selanjutnya';
$txt['pm_actions_delete_selected'] = 'Hapus yang Dipilih';
$txt['pm_actions_filter_by_label'] = 'Saring Dengan Label';
$txt['pm_actions_go'] = 'Ayo';

// Manage Labels Screen.
$txt['pm_apply'] = 'Terapkan';
$txt['pm_manage_labels'] = 'Atur Label';
$txt['pm_labels_delete'] = 'Anda yakin ingin menghapus semua label yang dipilih?';
$txt['pm_labels_desc'] = 'Dari sini Anda bisa menambah, mengedit dan menghapus label yang digunakan dalam pusat pesan pribadi Anda.';
$txt['pm_label_add_new'] = 'Tambah Label Baru';
$txt['pm_label_name'] = 'Nama Label';
$txt['pm_labels_no_exist'] = 'Saat ini Anda tidak menyiapkan label apapun!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Label';
$txt['pm_msg_label_title'] = 'Pesan Label';
$txt['pm_msg_label_apply'] = 'Tambah Label';
$txt['pm_msg_label_remove'] = 'Hapus Label';
$txt['pm_msg_label_inbox'] = 'Kotak masuk';
$txt['pm_sel_label_title'] = 'Label Dipilih';
$txt['labels_too_many'] = 'Maaf, %s pesan sudah melebihi jumlah maksimum label yang dibolehkan!';

// Sidebar Headings.
$txt['pm_labels'] = 'Label';
$txt['pm_messages'] = 'Pesan';
$txt['pm_preferences'] = 'Preferensi';

$txt['pm_is_replied_to'] = 'Anda telah meneruskan atau merespon terhadap pesan ini.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Laporkan Ke Admin';
$txt['pm_report_title'] = 'Laporkan Pesan Pribadi';
$txt['pm_report_desc'] = 'Dari halaman ini Anda bisa melaporkan pesan pribadi yang Anda terima ke tim admin forum. Pastikan Anda menyertakan penjelasan mengapa Anda melaporkan pesan, karena ini akan dikirimkan bersasmaan dengan pesan aslinya.';
$txt['pm_report_admins'] = 'Administrator yang dikirimi pesan';
$txt['pm_report_all_admins'] = 'Kirim ke semua administrator forum';
$txt['pm_report_reason'] = 'Alasan mengapa Anda melaporkan pesan ini';
$txt['pm_report_message'] = 'Laporkan Pesan';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} telah melaporkan pesan pribadi di bawah ini, dikirimkan oleh {SENDER}, untuk alasan berikut:';
$txt['pm_report_pm_other_recipients'] = 'Penerima pesan lainnya termasuk:';
$txt['pm_report_pm_hidden'] = '%d penerima tersembunyi';
$txt['pm_report_pm_unedited_below'] = 'Di bawah ini adalah isi asli dari pesan pribadi yang dilaporkan:';
$txt['pm_report_pm_sent'] = 'Dikirimkan:';

$txt['pm_report_done'] = 'Terima kasih atas pengiriman laporan ini. Anda akan menerima kabar dari tim admin dalam waktu dekat';
$txt['pm_report_return'] = 'Kembali ke kotak masuk';

$txt['pm_search_title'] = 'Mencari Pesan Pribadi';
$txt['pm_search_bar_title'] = 'Mencari Pesan';
$txt['pm_search_text'] = 'Pencarian';
$txt['pm_search_go'] = 'Cari';
$txt['pm_search_advanced'] = 'Pencarian Lanjutan';
$txt['pm_search_user'] = 'oleh pengguna';
$txt['pm_search_match_all'] = 'Sama semua kata';
$txt['pm_search_match_any'] = 'Sama setiap kata';
$txt['pm_search_options'] = 'Opsi';
$txt['pm_search_post_age'] = 'Usia';
$txt['pm_search_show_complete'] = 'Tampilkan pesan penuh dalam hasil.';
$txt['pm_search_subject_only'] = 'Cari hanya dengan subyek dan pembuat.';
$txt['pm_search_between'] = 'Antara';
$txt['pm_search_between_and'] = 'dan';
$txt['pm_search_between_days'] = 'hari';
$txt['pm_search_order'] = 'Hasil diurut dengan';
$txt['pm_search_choose_label'] = 'Pilih label untuk pencarian, atau mencari semua';

$txt['pm_search_results'] = 'Hasil Pencarian';
$txt['pm_search_none_found'] = 'Tidak Ada Pesan Ditemukan';

$txt['pm_search_orderby_relevant_first'] = 'Paling relevan pertama';
$txt['pm_search_orderby_recent_first'] = 'Terbaru pertama';
$txt['pm_search_orderby_old_first'] = 'Terlama pertama';

$txt['pm_visual_verification_label'] = 'Verifikasi';
$txt['pm_visual_verification_desc'] = 'Silahkan masukkan kode dalam gambar di atas untuk mengirimkan pm ini.';
$txt['pm_visual_verification_listen'] = 'Dengarkan Huruf';

?>