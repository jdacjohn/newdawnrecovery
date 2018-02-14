<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Personal Messages Index';
$txt[148] = 'Send message';
$txt[150] = 'To';
$txt[1502] = 'Bcc';
$txt[316] = 'Inbox';
$txt[320] = 'Outbox';
$txt[321] = 'New Message';
$txt[411] = 'Delete Messages';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Delete all messages in your PMBOX';
$txt[413] = 'Are you sure you want to delete all messages?';
$txt[535] = 'Recipient';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'New Personal Message: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'You have just been sent a personal message by SENDER on ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANT: Remember, this is just a notification. Please do not reply to this email.' . "\n\n" . 'The message they sent you was:' . "\n\n" . 'MESSAGE';
$txt[748] = '(multiple recipients: \'name1, name2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Jawab ke Mesej Peribadi ini di sini:';

$txt['smf249'] = 'Are you sure you want to delete all selected personal messages?';

$txt['sent_to'] = 'Kirim ke';
$txt['reply_to_all'] = 'Jawab ke Semua';

$txt['pm_capacity'] = 'Kapasiti';
$txt['pm_currently_using'] = '%1$s mesej, %2$s%% penuh.';

$txt['pm_error_user_not_found'] = 'Tidak boleh menemukan ahli \'%1$s\'.';
$txt['pm_error_ignored_by_user'] = 'Pengguna \'%1$s\' telah menyekat mesej peribadi anda.';
$txt['pm_error_data_limit_reached'] = 'Mesej tidak boleh dikirimkan ke \'%1$s\' karena inboxnya penuh!';
$txt['pm_successfully_sent'] = 'Mesej sudah dikirim dengan jayanya ke \'%1$s\'.';
$txt['pm_too_many_recipients'] = 'Anda tidak boleh mengirimkan mesej ke lebih dari %1$d penerima sekaligus.';
$txt['pm_too_many_per_hour'] = 'You have exceeded the limit of %d personal messages per hour.';
$txt['pm_send_report'] = 'Kirim laporan';
$txt['pm_save_outbox'] = 'Simpan salinan dalam outbox saya';
$txt['pm_undisclosed_recipients'] = 'Ungkap penerima';

$txt['pm_read'] = 'Baca';
$txt['pm_replied'] = 'Jawab Ke';

// Message Pruning.
$txt['pm_prune'] = 'Padam Mesej';
$txt['pm_prune_desc1'] = 'Padam semua mesej peribadi lebih lama dari';
$txt['pm_prune_desc2'] = 'hari.';
$txt['pm_prune_warning'] = 'Anda yakin ingin memadam mesej peribadi anda?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Tindakan Lanjut';
$txt['pm_actions_delete_selected'] = 'Padam Pilihan';
$txt['pm_actions_filter_by_label'] = 'Tapis Dengan Label';
$txt['pm_actions_go'] = 'Pergi';

// Manage Labels Screen.
$txt['pm_apply'] = 'Guna';
$txt['pm_manage_labels'] = 'Mengatur Label';
$txt['pm_labels_delete'] = 'Anda yakin ingin memadam label pilihan?';
$txt['pm_labels_desc'] = 'Dari sini anda boleh menambah, mengedit dan memadam label yang dipakai dalam pusat mesej peribadi anda.';
$txt['pm_label_add_new'] = 'Tambah Label Baru';
$txt['pm_label_name'] = 'Nama Label';
$txt['pm_labels_no_exist'] = 'Buat masa ini anda tidak menyediakan label!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Label';
$txt['pm_msg_label_title'] = 'Mesej Label';
$txt['pm_msg_label_apply'] = 'Tambah Label';
$txt['pm_msg_label_remove'] = 'Padam Label';
$txt['pm_msg_label_inbox'] = 'Inbox';
$txt['pm_sel_label_title'] = 'Label Dipilih';
$txt['labels_too_many'] = 'Sorry, %s messages already had the maximum amount of labels allowed!';

// Sidebar Headings.
$txt['pm_labels'] = 'Label';
$txt['pm_messages'] = 'Mesej';
$txt['pm_preferences'] = 'Keutamaan';

$txt['pm_is_replied_to'] = 'Anda telah meneruskan atau menjawab mesej ini.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Laporkan Ke Pengurus';
$txt['pm_report_title'] = 'Laporkan Mesej Peribadi';
$txt['pm_report_desc'] = 'Dari laman ini anda boleh melaporkan mesej peribadi yang anda terima ke pasukan pengurus forum. Pastikan untuk menyertakan penjelasan mengapa anda melaporkan mesej ini, karena ini akan dikirimkan bersama dengan isi dari mesej asalnya.';
$txt['pm_report_admins'] = 'Laporan dikirimkan ke pengurus';
$txt['pm_report_all_admins'] = 'Kirim ke semua pengurus forum';
$txt['pm_report_reason'] = 'Alasan mengapa anda melaporkan mesej ini';
$txt['pm_report_message'] = 'Laporkan Mesej';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} telah melaporkan mesej peribadi di bawah ini, dikirimkan oleh {SENDER}, untuk alasan berikut:';
$txt['pm_report_pm_other_recipients'] = 'Penerima lain dari mesej ini termasuk:';
$txt['pm_report_pm_hidden'] = '%1$d penerima tersembunyi';
$txt['pm_report_pm_unedited_below'] = 'Di bawah ini adalah kandungan asal mesej peribadi yang dilaporkan:';
$txt['pm_report_pm_sent'] = 'Dikirimkan:';

$txt['pm_report_done'] = 'Terima kasih kerana mengirimkan laporan ini. Anda akan menerima jawapan dari pasukan pengurusan dalam waktu tidak lama lagi.';
$txt['pm_report_return'] = 'Kembali ke inbox';

$txt['pm_search_title'] = 'Cari Mesej Peribadi';
$txt['pm_search_bar_title'] = 'Cari Mesej';
$txt['pm_search_text'] = 'Mencari';
$txt['pm_search_go'] = 'Cari';
$txt['pm_search_advanced'] = 'Carian lengkap';
$txt['pm_search_user'] = 'Oleh pengguna';
$txt['pm_search_match_all'] = 'Sama seluruh kata';
$txt['pm_search_match_any'] = 'Sama setiap kata';
$txt['pm_search_options'] = 'Pilihan';
$txt['pm_search_post_age'] = 'Usia mesej';
$txt['pm_search_show_complete'] = 'Papar mesej lengkap dalam hasil.';
$txt['pm_search_subject_only'] = 'Cari hanya dengan subjek dan pembuat.';
$txt['pm_search_between'] = 'antara';
$txt['pm_search_between_and'] = 'dan';
$txt['pm_search_between_days'] = 'hari';
$txt['pm_search_order'] = 'Urutan carian';
$txt['pm_search_choose_label'] = 'Pilih label untuk dicari, atau cari semua';

$txt['pm_search_results'] = 'Hasil Carian';
$txt['pm_search_none_found'] = 'Tidak Ada Mesej Ditemui';

$txt['pm_search_orderby_relevant_first'] = 'Paling berkaitan pertama';
$txt['pm_search_orderby_recent_first'] = 'Paling baru pertama';
$txt['pm_search_orderby_old_first'] = 'Terlama pertama';

$txt['pm_visual_verification_label'] = 'Pengesahan';
$txt['pm_visual_verification_desc'] = 'Sila masukkan kod dalam gambar di atas untuk mengirimkan mesej ini.';
$txt['pm_visual_verification_listen'] = 'Listen to the Letters';

?>