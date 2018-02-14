<?php
// Version: 1.1.2; Login

$txt[37] = '請輸入您的帳號名稱。';
$txt[38] = '您沒有輸入密碼。';
$txt[39] = '密碼錯誤';
$txt[98] = '選擇帳號';
$txt[155] = '系統維護';
$txt[245] = '註冊完成';
$txt[431] = '完成! 恭喜您成為本討論區會員。';
// Use numeric entities in the below string.
$txt[492] = '您的密碼是';
$txt[500] = '請您填入合法的EMAIL信箱位址， %s。';
$txt[517] = '必須提供的項目';
$txt[520] = '這只是登入用的會員帳號。';
$txt[585] = '我接受';
$txt[586] = '不接受';
$txt[633] = '警告！';
$txt[634] = '本區只供有權瀏覽的使用者進入。';
$txt[635] = '請在下方登入或';
$txt[636] = '註冊';
$txt[637] = '本論壇 ' . $context['forum_name'] . ' 的帳號。';
// Use numeric entities in the below two strings.
$txt[701] = '您可以在進入討論區後，在個人資料頁更改，或是透過下方的連結：';
$txt[719] = '您的帳號名稱是： ';
$txt[730] = '您提供的信箱地址： %s 已經有其他使用者使用。若您確認這是您的私人信箱，請到登入頁選擇 忘記密碼 將該帳號的密碼寄到這個電子信箱中。';

$txt['login_hash_error'] = '密碼保護措施已更新，請重新輸入您的密碼。';

$txt['register_age_confirmation'] = '我超過 %d 歲';

// Use numeric entities in the below six strings.
$txt['register_subject'] = '歡迎到 ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = '您已在 ' . $context['forum_name'] . '完成註冊， %1$s！' . "\n\n" . '您申請的帳號是 %2$s，密碼是 %3$s。' . "\n\n" . '登入後您可以到個人資料裡改變密碼，或到這個頁面：' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = '您已在 ' . $context['forum_name'] . '完成註冊， %1$s！' . "\n\n" . '您申請的帳號是 %2$s，密碼是 %3$s (登入後可以改變。)' . "\n\n" . '在登入前，您必須先啟用您的帳號。請到下面的連結啟用帳號：' . "\n\n" . '%5$s' . "\n\n" . '如果無法用上面的連結啟用帳號，請用這個代碼 "%4$s"。' . "\n\n" . $txt[130];
$txt['register_pending_message'] = '您在 ' . $context['forum_name'] . ' 申請的帳號已經收到， %1$s。' . "\n\n" . '您申請的帳號是 %2$s，密碼是 %3$s。' . "\n\n" . '在登入前，管理員必須先審核您的註冊申請。審核完畢後您會再收到另一封信。' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = '您已在 ' . $context['forum_name'] . '完成註冊， %1$s!' . "\n\n" . '您申請的帳號是 "%2$s"。' . "\n\n" . '在登入前，您必須先啟用您的帳號。請到下面的連結啟用帳號：' . "\n\n" . '%4$s' . "\n\n" . '如果無法用上面的連結啟用帳號，請用這個代碼 "%3$s"。' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = '您在 ' . $context['forum_name'] . ' 申請的帳號已經收到， %1$s。' . "\n\n" . '您申請的帳號是 %2$s。' . "\n\n" . '在登入前，管理員必須先審核您的註冊申請。審核完畢後您會再收到另一封信。' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = '抱歉，您不能申請成為這個論壇的會員。';
$txt['under_age_registration_prohibited'] = '抱歉，年紀小於 %d 歲不能申請成為會員。';

$txt['activate_account'] = '帳號啟用';
$txt['activate_success'] = '您的帳號已經通過啟用了, 現在您可以登入討論區.';
$txt['activate_not_completed1'] = '您的帳號尚未通過認證成功, 所以不能登入討論區.';
$txt['activate_not_completed2'] = '重新寄送啟用信函?';
$txt['activate_after_registration'] = '感謝您的註冊。您將會收到一封啟用信件，內含有帳號啟用的連結。如果一段時間過後還是沒收到，請檢查您的垃圾信件。';
$txt['invalid_userid'] = '無此會員';
$txt['invalid_activation_code'] = '啟用碼錯誤';
$txt['invalid_activation_username'] = '帳號或EMAIL';
$txt['invalid_activation_new'] = '若您註冊時填錯了EMAIL信箱位址, 請在此填入一個新的信箱位址, 並輸入您的密碼以做更改.';
$txt['invalid_activation_new_email'] = '新的信箱位址';
$txt['invalid_activation_password'] = '舊的密碼';
$txt['invalid_activation_resend'] = '重新寄送啟用信函';
$txt['invalid_activation_known'] = '如果您已經知道您的啟用碼, 請在此輸入.';
$txt['invalid_activation_retry'] = '啟用碼';
$txt['invalid_activation_submit'] = '進行啟用';

$txt['coppa_not_completed1'] = '管理員還是沒收到您監護人的認可訊息。';
$txt['coppa_not_completed2'] = '更多資訊？';

$txt['awaiting_delete_account'] = '您的帳號會在近期刪除！<br />如果您想恢復您的帳號，請勾選 &quot;重新啟用帳號&quot; 欄位，然後重新登入。';
$txt['undelete_account'] = '重新啟用帳號';

$txt['change_email_success'] = '您的電子郵件已被更改，新的啟用信件已寄到您的信箱。';
$txt['resend_email_success'] = '新的啟用信件已成功寄出。';
// Use numeric entities in the below three strings.
$txt['change_password'] = '新密碼資料';
$txt['change_password_1'] = '登入資料';
$txt['change_password_2'] = '已被更改。下面是您新的登入資料。';

$txt['maintenance3'] = '本討論區目前正在維護中.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = '請閱讀並接受本討論區的使用規則。';
$txt['register_passwords_differ_js'] = '您兩次輸入的密碼不相同！';

$txt['approval_after_registration'] = '感謝您的註冊, 本討論區所有使用者註冊皆須通過站長的審核, 審核結果將會以EMAIL通知您, 謝謝.';

$txt['admin_settings_desc'] = '這裡可以讓您改變註冊系統使用的不同方法。';

$txt['admin_setting_registration_method'] = '會員註冊方法';
$txt['admin_setting_registration_disabled'] = '關閉註冊';
$txt['admin_setting_registration_standard'] = '馬上啟用';
$txt['admin_setting_registration_activate'] = '會員啟用';
$txt['admin_setting_registration_approval'] = '審核帳號';
$txt['admin_setting_notify_new_registration'] = '有新會員時通知管理員';
$txt['admin_setting_send_welcomeEmail'] = '寄送歡迎信件';

$txt['admin_setting_password_strength'] = '密碼使用的安全措施';
$txt['admin_setting_password_strength_low'] = '低 - 4 個字元';
$txt['admin_setting_password_strength_medium'] = '中 - 不能包括帳號';
$txt['admin_setting_password_strength_high'] = '高 - 包含大小寫字母';

$txt['admin_setting_image_verification_type'] = '複雜的視覺圖片驗證';
$txt['admin_setting_image_verification_type_desc'] = '更複雜的圖片, 機器人更難破解

';
$txt['admin_setting_image_verification_off'] = '停用';
$txt['admin_setting_image_verification_vsimple'] = '非常簡單 - 純文字圖片';
$txt['admin_setting_image_verification_simple'] = 'Simple - Overlapping coloured letters, no noise';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlapping coloured letters, with noise';
$txt['admin_setting_image_verification_high'] = '高級 - 變形文字, 帶有大量的雜訊';
$txt['admin_setting_image_verification_sample'] = '圖片驗證樣本';
$txt['admin_setting_image_verification_nogd'] = '<b>注意:</b> 如果主機不支援 GD 模組, 不同的複雜設定將無法作用。
';

$txt['admin_setting_coppaAge'] = '低年齡的會員註冊限制';
$txt['admin_setting_coppaAge_desc'] = '(0 如果不禁止)';
$txt['admin_setting_coppaType'] = '如果低於限制的年齡';
$txt['admin_setting_coppaType_reject'] = '禁止註冊';
$txt['admin_setting_coppaType_approval'] = '需監護人認可';
$txt['admin_setting_coppaPost'] = '寄送認可表單的地址';
$txt['admin_setting_coppaPost_desc'] = '只在有年齡限制下有效';
$txt['admin_setting_coppaFax'] = '寄送認可表單的傳真號碼';
$txt['admin_setting_coppaPhone'] = '年齡限制的聯絡電話';
$txt['admin_setting_coppa_require_contact'] = '如果需要監護人認可，您必須提供地址或傳真號碼。';

$txt['admin_register'] = '新會員註冊';
$txt['admin_register_desc'] = '透過此處您可以為討論區加入新會員. 您可以為他們輸入一些資料, 如果您願意的話也可以寄電子郵件給這些新會員.';
$txt['admin_register_username'] = '新會員帳號';
$txt['admin_register_email'] = '電子郵件';
$txt['admin_register_password'] = '密碼';
$txt['admin_register_username_desc'] = '新會員的帳號';
$txt['admin_register_email_desc'] = '新會員的電子郵件 (如果需要寄送資料的話請填寫)';
$txt['admin_register_password_desc'] = '新會員的密碼';
$txt['admin_register_email_detail'] = '透過電子郵件寄送會員的新密碼';
$txt['admin_register_email_detail_desc'] = '有無勾選都必須要電子郵件';
$txt['admin_register_email_activate'] = '會員必須啟用帳號';
$txt['admin_register_group'] = '隸屬於特殊的會員群組';
$txt['admin_register_group_desc'] = '這個會員將會隸屬於的群組';
$txt['admin_register_group_none'] = '(不加入任何群組)';
$txt['admin_register_done'] = '會員 %s 已經完成註冊！';

$txt['admin_browse_register_new'] = '註冊新會員';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = '有新會員加入';
$txt['admin_notify_profile'] = '%s 已經加入您的討論區. 請按下方連結觀看他的個人資料.';
$txt['admin_notify_approval'] = '新會員必須先啟用帳號才能發表文章. 請按下方連結到帳號啟用區.';

$txt['coppa_title'] = '年齡限制論壇';
$txt['coppa_after_registration'] = '謝謝您成為 ' . $context['forum_name'] . ' 的會員。<br /><br />因為您的年齡未到限制的年齡 {MINIMUM_AGE}，您必須
	請監護人認可才能正式成為會員。請印出填寫下面的表單：';
$txt['coppa_form_link_popup'] = '開啟表單的新視窗';
$txt['coppa_form_link_download'] = '下載表單';
$txt['coppa_send_to_one_option'] = '然後請監護人將表單寄給管理員：';
$txt['coppa_send_to_two_options'] = '然後請監護人將表單寄給管理員：';
$txt['coppa_send_by_post'] = '地址：';
$txt['coppa_send_by_fax'] = '傳真：';
$txt['coppa_send_by_phone'] = '您也可以請監護人打電話給管理員，電話是：{PHONE_NUMBER}。';

$txt['coppa_form_title'] = '在論壇 ' . $context['forum_name'] . ' 的認可表單。';
$txt['coppa_form_address'] = '地址';
$txt['coppa_form_date'] = '日期';
$txt['coppa_form_body'] = '我 {PARENT_NAME}，<br /><br />認可會員 {CHILD_NAME} (會員名稱) 註冊成為此論壇的會員： ' . $context['forum_name'] . '，他的帳號是：{USER_NAME}。<br /><br />我了解 {USER_NAME} 所輸入的私人的資料可被其他論壇會員瀏覽。<br /><br />簽名：<br />{PARENT_NAME} (監護人)。';

$txt['visual_verification_label'] = '視覺驗證';
$txt['visual_verification_description'] = '請輸入顯示的驗證碼';
$txt['visual_verification_sound'] = '聽取驗證碼';
$txt['visual_verification_sound_again'] = '重新播放';
$txt['visual_verification_sound_close'] = '關閉視窗';
$txt['visual_verification_request_new'] = '要求新的驗證碼';
$txt['visual_verification_sound_direct'] = '聽不清楚驗證碼嗎？試試它的連結。';

?>