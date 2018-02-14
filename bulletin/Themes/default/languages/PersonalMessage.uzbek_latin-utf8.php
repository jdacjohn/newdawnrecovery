<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Shaxsiy maktublar';
$txt[148] = 'Maktub yuborish';
$txt[150] = 'Qabul qiluvchi';
$txt[1502] = 'Yana qabul qiluvchilar';
$txt[316] = 'Maktublar';
$txt[320] = 'Yuborilganlar';
$txt[321] = 'Yangi maktub';
$txt[411] = 'Maktublarni o`chirish';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Barcha maktublarni o`chirish';
$txt[413] = 'Barcha maktublarni o`chirmoqchiligingizga ishonchingiz komilmi?';
$txt[535] = 'Qabul qiluvchi';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Yangi maktub: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'You have just been sent a personal message by SENDER on ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANT: Remember, this is just a notification. Please do not reply to this email.' . "\n\n" . 'The message they sent you was:' . "\n\n" . 'MESSAGE';
$txt[748] = '(Qo`shimcha qabul qiluvchilar: \'a`zo1, a`zo2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Quyidagi sahifa orqali ushbu maktubga javob yozishingiz mumkin:';

$txt['smf249'] = 'Barcha belgilangan maktublarni o`chirmoqchiligingizga ishonchingiz komilmi?';

$txt['sent_to'] = 'Qabul qiluvchi(lar)';
$txt['reply_to_all'] = 'Barchasiga javob berish';

$txt['pm_capacity'] = 'Capacity';
$txt['pm_currently_using'] = '%s ta yangi, %s%% ta jami.';

$txt['pm_error_user_not_found'] = 'Foydalanuvchi izlashni yopish \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Foydalanuvchi \'%s\' maktublar qutisini yopgan.';
$txt['pm_error_data_limit_reached'] = 'Qutisi to`lganligi sababli maktubingizni \'%s\'ga yuborishning imkoni bo`lmadi.';
$txt['pm_successfully_sent'] = 'Maktubingiz \'%s\'ga yuborildi.';
$txt['pm_too_many_recipients'] = 'Siz %d tadan ortiq foydalanuvchilarga birdaniga maktub yubora olmaysiz.';
$txt['pm_too_many_per_hour'] = 'You have exceeded the limit of %d personal messages per hour.';
$txt['pm_send_report'] = 'Ma`lumotnoma yuborish';
$txt['pm_save_outbox'] = 'Maktubning bir nusxasini \'Yuborilganlar\' qutisida saqlaysizmi?';
$txt['pm_undisclosed_recipients'] = 'Undisclosed recipients';

$txt['pm_read'] = 'O`qish';
$txt['pm_replied'] = 'Javob berish';

// Message Pruning.
$txt['pm_prune'] = 'Prune Messages';
$txt['pm_prune_desc1'] = 'Barcha eski maktublarni o`chirish. Sana chegarasi:';
$txt['pm_prune_desc2'] = 'kunlar.';
$txt['pm_prune_warning'] = 'Are you sure you wish to prune your personal messages?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Further Actions';
$txt['pm_actions_delete_selected'] = 'Belgilanganlarni o`chirish';
$txt['pm_actions_filter_by_label'] = 'Filter By Label';
$txt['pm_actions_go'] = 'Bajar';

// Manage Labels Screen.
$txt['pm_apply'] = 'Tasdiqlash';
$txt['pm_manage_labels'] = 'Manage Labels';
$txt['pm_labels_delete'] = 'Are you sure you wish to delete the selected labels?';
$txt['pm_labels_desc'] = 'From here you can add, edit and delete the labels used in your personal message center.';
$txt['pm_label_add_new'] = 'Add New Label';
$txt['pm_label_name'] = 'Label Name';
$txt['pm_labels_no_exist'] = 'You currently have no labels setup!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Label';
$txt['pm_msg_label_title'] = 'Label Message';
$txt['pm_msg_label_apply'] = 'Add Label';
$txt['pm_msg_label_remove'] = 'Remove Label';
$txt['pm_msg_label_inbox'] = 'Inbox';
$txt['pm_sel_label_title'] = 'Label Selected';
$txt['labels_too_many'] = 'Sorry, %s messages already had the maximum amount of labels allowed!';

// Sidebar Headings.
$txt['pm_labels'] = 'Labels';
$txt['pm_messages'] = 'Maktublar';
$txt['pm_preferences'] = 'Xossalar';

$txt['pm_is_replied_to'] = 'You have forwarded or responded to this message.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Boshqaruvchiga xabar qilish';
$txt['pm_report_title'] = 'Shaxsiy maktub haqida xabar qilish';
$txt['pm_report_desc'] = 'Ushbu sahifada siz sizga yuborilgan shaxsiy maktub haqida forum ma`muriyatiga xabar qilishingiz mumkin. Maktub mantni bilan birga borishi uchun ushbu maktub haqida nega xabar qilayotganingiz haqida izoh kiriting.';
$txt['pm_report_admins'] = 'Boshqaruvchi';
$txt['pm_report_all_admins'] = 'Barcha boshqaruvchilarga xabar qilish';
$txt['pm_report_reason'] = 'Nega xabar qilayotganingiz sababi';
$txt['pm_report_message'] = 'Maktub haqida xabar berish';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[Xabar berish] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} has reported the below personal message, sent by {SENDER}, for the following reason:';
$txt['pm_report_pm_other_recipients'] = 'Other recipients of the message include:';
$txt['pm_report_pm_hidden'] = '%d yashirin qabul qiluvchi(lar)';
$txt['pm_report_pm_unedited_below'] = 'Quyida maktub matni:';
$txt['pm_report_pm_sent'] = 'Yuborish:';

$txt['pm_report_done'] = 'Xabar berganingiz uchun tashakkur. Tez orada boshqaruvchidan javob kelishi mumkin';
$txt['pm_report_return'] = 'Maktublar qutisiga qaytish';

$txt['pm_search_title'] = 'Shaxsiy maktublarni izlash';
$txt['pm_search_bar_title'] = 'Maktublarni izlash';
$txt['pm_search_text'] = 'Izlash';
$txt['pm_search_go'] = 'Qidiruv';
$txt['pm_search_advanced'] = 'Mukammal qidiruv';
$txt['pm_search_user'] = 'foydalanuvchi tomonidan';
$txt['pm_search_match_all'] = 'Barch so`zlar bo`yicha';
$txt['pm_search_match_any'] = 'Biror so`z bo`yicha';
$txt['pm_search_options'] = 'Imkoniyatlar';
$txt['pm_search_post_age'] = 'Yoshi';
$txt['pm_search_show_complete'] = 'Show full message in results.';
$txt['pm_search_subject_only'] = 'Faqat muallif va mavzu bo`yicha ko`rsating.';
$txt['pm_search_between'] = 'Orasida';
$txt['pm_search_between_and'] = 'va';
$txt['pm_search_between_days'] = 'Kunlar';
$txt['pm_search_order'] = 'Natijalarni tartiblash';
$txt['pm_search_choose_label'] = 'Choose labels to search by, or search all';

$txt['pm_search_results'] = 'Qidiruv natijalari';
$txt['pm_search_none_found'] = 'Xech qanday maktub topilmadi';

$txt['pm_search_orderby_relevant_first'] = 'Eng muhimlarini avval';
$txt['pm_search_orderby_recent_first'] = 'Yangilarini avval';
$txt['pm_search_orderby_old_first'] = 'Eskilarini avval';

$txt['pm_visual_verification_label'] = 'Tekshiruv';
$txt['pm_visual_verification_desc'] = 'Iltimos, ushbu maktubni yuborish uchun yuqoridagi rasmdagi belgilarni kiriting.';
$txt['pm_visual_verification_listen'] = 'Belgilarni tinglab ko`rish';

?>