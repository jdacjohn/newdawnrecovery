<?php
// Version: 1.1.2; Login

$txt[37] = '名前が入力されていません。';
$txt[38] = 'パスワードが入力されていません。';
$txt[39] = 'パスワードが間違っています。';
$txt[98] = 'ユーザ名（半角英数字で）';
$txt[155] = 'メンテナンス中です。';
$txt[245] = '登録完了';
$txt[431] = 'ユーザ登録は完了しました。あなたは、このフォーラムの一員です。';
// Use numeric entities in the below string.
$txt[492] = 'あなたのパスワード：';
$txt[500] = '有効なメールアドレスを入力してください：%s';
$txt[517] = '必修項目';
$txt[520] = 'この情報はSMF内のみで使われます。もし、特殊文字を使いたい場合、プロフィール画面から実際フォーラム上で表示される名前を指定できます。';
$txt[585] = '承諾する';
$txt[586] = '承諾しない';
$txt[633] = '警告！';
$txt[634] = '登録されたメンバーのみこのセクションにアクセスできます。';
$txt[635] = 'ログインするか';
$txt[636] = 'ユーザ登録';
$txt[637] = 'をクリックして' . $context['forum_name'] . 'のアカウントを取得してください';
// Use numeric entities in the below two strings.
$txt[701] = 'You may change it after you login by going to the profile page, or by visiting this page after you login:';
$txt[719] = 'あなたのユーザ名：';
$txt[730] = 'そのメールアドレス「%s」は、ほかのメンバーによって使われています。もしも、間違いならば、ログインページの「パスワードを忘れた？」をクリックし再発行申請をしてください。';

$txt['login_hash_error'] = 'パスワードのセキュリティがアップグレードされました。お手数ですがもう一度パスワードを入力してください。';

$txt['register_age_confirmation'] = '私は%d歳です。';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'ようこそ' . $context['forum_name'] .'へ';

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'あなたの' . $context['forum_name'] . '上のアカウント『%1$s』は無事登録されました！' . "\n\n" . 'あなたのユーザー名は、『%2$s』パスワードは『%3$s』です。' . "\n\n" . 'パスワードを変更したい場合、ログイン後プロフィール画面に行くか、以下のアドレスにアクセスしてください：' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'あなたの' . $context['forum_name'] . '上のアカウント『%1$s』は仮登録されました！' . "\n\n" . 'あなたのユーザー名は、『%2$s』パスワードは『%3$s』です。（これは後で変更することができます。）' . "\n\n" . 'ログインする前に、あなたのアカウントをアクティベートする必要があります。 アクティベートするには以下のアドレスにアクセスしてください：' . "\n\n" . '%5$s' . "\n\n" . 'もしも、アクティベート作業に問題が生じた場合は、以下のコードを入力してみてください：%4$s' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'あなたの' . $context['forum_name'] . '上のアカウント『%1$s』の登録は受理されました。' . "\n\n" . 'あなたのユーザー名は、『%2$s』パスワードは『%3$s』です。' . "\n\n" . 'フォーラムが使えるようになる前に、管理人によってアカウントの承認を受ける必要があります。あなたのリクエストが無事承認されると、あなたにこのメールアドレスから別のメールが送られてくるでしょう。' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'あなたの' . $context['forum_name'] . '上のアカウント『%1$s』は無事登録されました！' . "\n\n" . 'あなたのユーザー名は『%2$s』です。' . "\n\n" . 'ログインする前に、あなたのアカウントをアクティベートする必要があります。 アクティベートするには以下のアドレスにアクセスしてください：' . "\n\n" . '%4$s' . "\n\n" . 'もしも、アクティベート作業に問題が生じた場合は、以下のコードを入力してみてください：%3$s' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'あなたの' . $context['forum_name'] . '上のアカウント『%1$s』の登録は受理されました。' . "\n\n" . 'あなたのユーザー名は『%2$s』です。' . "\n\n" . 'フォーラムが使えるようになる前に、管理人によってアカウントの承認を受ける必要があります。あなたのリクエストが無事承認されると、あなたにこのメールアドレスから別のメールが送られてくるでしょう。' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = '遺憾ながら、あなたはこのフォーラムへの登録が許可されていません。';
$txt['under_age_registration_prohibited'] = '遺憾ながら、あなたは年齢が%dに満たないため、このフォーラムへの登録は許可されていません。';

$txt['activate_account'] = 'アカウントのアクティべーション';
$txt['activate_success'] = 'あなたのアカウントは無事使えるようになりました。すぐにログインできます。';
$txt['activate_not_completed1'] = 'このメールアドレスはログイン時に使うため、必ず有効なものを入れてください。';
$txt['activate_not_completed2'] = '他のアクティべーションのメールを送りますか？';
$txt['activate_after_registration'] = '登録していただきありがとうございました。まもなくアクティべーションコードが送られてきます。';
$txt['invalid_userid'] = 'そのようなユーザは見つかりませんでした。';
$txt['invalid_activation_code'] = '無効なアクティべーションコードです';
$txt['invalid_activation_username'] = 'ユーザ名かメール';
$txt['invalid_activation_new'] = 'もしも、間違ったメールアドレスで登録してしまった場合、古いパスワードと新しいパスワードをここに書き込んでください。';
$txt['invalid_activation_new_email'] = '新しいメールアドレス';
$txt['invalid_activation_password'] = '古いパスワード';
$txt['invalid_activation_resend'] = 'アクティべーションコードの再送';
$txt['invalid_activation_known'] = '準備できましたら、アクティべーションコードをここに入力してください。';
$txt['invalid_activation_retry'] = 'アクティべーション';
$txt['invalid_activation_submit'] = 'アクティベート';

$txt['coppa_not_completed1'] = '管理人は、あなたの親／保護者からの同意をまだ受け取っていません。';
$txt['coppa_not_completed2'] = '詳細情報';

$txt['awaiting_delete_account'] = 'あなたのアカウントは、削除にマークされています！<br />もしも、アカウントを復活させたい場合、『アカウントの再アクティベート』をチェックしてください。';
$txt['undelete_account'] = 'アカウントの再アクティベート';

$txt['change_email_success'] = '新しいアクティべーションコードを変更したメールアドレスに送りました。';
$txt['resend_email_success'] = '新しいアクティべーションコードのメールを再送しました。';
// Use numeric entities in the below three strings.
$txt['change_password'] = '新しいパスワード';
$txt['change_password_1'] = 'あなたの新しいパスワードは、';
$txt['change_password_2'] = 'です。ログインし、パスワードを変更したり戻したりできます。以下が新しいログイン時の詳細情報です。';

$txt['maintenance3'] = '現在このフォーラムはメンテナンスモードに入っています。';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = '登録する前に利用規約を読んでください。';
$txt['register_passwords_differ_js'] = '２つのパスワードの入力が異なっています！';

$txt['approval_after_registration'] = '登録していただきありがとうございました。まもなく管理人の承認を得て、ユーザ登録の完了を示すメールが届くでしょう。';

$txt['admin_settings_desc'] = 'ここで、新メンバーの登録と関係する様々な設定を変更することができます。';

$txt['admin_setting_registration_method'] = '新しいメンバーの登録方法';
$txt['admin_setting_registration_disabled'] = 'メンバー登録を無効化';
$txt['admin_setting_registration_standard'] = '即時登録';
$txt['admin_setting_registration_activate'] = 'アクティベーションを行う';
$txt['admin_setting_registration_approval'] = '管理人がメンバーを承認する';
$txt['admin_setting_notify_new_registration'] = '新しいメンバーが入ったときに管理人にメールを送る';
$txt['admin_setting_send_welcomeEmail'] = '新しいメンバーにようこそメールを送る';

$txt['admin_setting_password_strength'] = 'パスワードの文字数';
$txt['admin_setting_password_strength_low'] = '低 - ４文字以上';
$txt['admin_setting_password_strength_medium'] = '通常－ユーザー名と同一は不可';
$txt['admin_setting_password_strength_high'] = '高－英数字が混在';

$txt['admin_setting_image_verification_type'] = 'Complexity of visual verification image';
$txt['admin_setting_image_verification_type_desc'] = 'The more complex the image the harder it is for bots to bypass';
$txt['admin_setting_image_verification_off'] = 'Disabled';
$txt['admin_setting_image_verification_vsimple'] = 'Very Simple - Plain text on image';
$txt['admin_setting_image_verification_simple'] = 'Simple - Overlapping coloured letters, no noise';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlapping coloured letters, with noise';
$txt['admin_setting_image_verification_high'] = 'High - Angled letters, considerable noise';
$txt['admin_setting_image_verification_sample'] = 'Sample';
$txt['admin_setting_image_verification_nogd'] = '<b>Note:</b> as this server does not have the GD library installed the different complexity settings will have no effect.';

$txt['admin_setting_coppaAge'] = '登録制限を適用する年齢';
$txt['admin_setting_coppaAge_desc'] = '（０は無効化）';
$txt['admin_setting_coppaType'] = '最低年齢に満たない場合の処置';
$txt['admin_setting_coppaType_reject'] = '拒否';
$txt['admin_setting_coppaType_approval'] = '親／保護者からの同意を必要とする';
$txt['admin_setting_coppaPost'] = '承認証書の送り先の住所';
$txt['admin_setting_coppaPost_desc'] = 'Only applies if age restriction is in place';
$txt['admin_setting_coppaFax'] = 'Fax number to which approval forms should be faxed';
$txt['admin_setting_coppaPhone'] = '年齢規制があった場合、親がかける連絡先の電話番号';
$txt['admin_setting_coppa_require_contact'] = '親/保護者承認が必要な場合、郵便、ファックスなどの連絡手段のいずれかを入力しなければなりません。';

$txt['admin_register'] = '新規メンバー登録';
$txt['admin_register_desc'] = 'このフォーラムで閲覧，投稿をしたい場合ユーザ登録が必要です。ここから、ユーザ名、メールアドレス等の情報を書き込むことができます。';
$txt['admin_register_username'] = 'ユーザ名';
$txt['admin_register_email'] = 'メールアドレス';
$txt['admin_register_password'] = 'パスワード';
$txt['admin_register_username_desc'] = '新しいメンバーのユーザ名（使える文字は半角英数字のみです。）';
$txt['admin_register_email_desc'] = 'メンバーのメールアドレス<br />（有効なメールアドレスを入れる必要があります。）';
$txt['admin_register_password_desc'] = 'ユーザのパスワード';
$txt['admin_register_email_detail'] = '新しいメンバーのメールアドレス';
$txt['admin_register_email_detail_desc'] = 'メールチェックが有効であるかの確認';
$txt['admin_register_email_activate'] = 'メールによるアクティべーションを必修にする。';
$txt['admin_register_group'] = '初期のメンバーグループ';
$txt['admin_register_group_desc'] = '新しいメンバーの初期のメンバーグループの配属先：';
$txt['admin_register_group_none'] = '（初期のメンバーグループ）';
$txt['admin_register_done'] = '%sさんの登録は成功しました！';

$txt['admin_browse_register_new'] = 'メンバー登録';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = '新しいメンバーが加わりました';
$txt['admin_notify_profile'] = '%sさんが、このフォーラムでの登録を済ませました。名前のリンクをクリックしてその人のプロフィールをみることができます。';
$txt['admin_notify_approval'] = 'このメンバーが登録を完了する前にあなたの承認を得る必要があります。リンクをクリックして承認画面にいけます。';

$txt['coppa_title'] = '年齢認証';
$txt['coppa_after_registration'] = $context['forum_name'] . 'に登録していただきありがとうございました。<br /><br />あなたは、{MINIMUM_AGE}歳未満なので、フォーラムが使用できるようになる前に
	親／保護者からの許可を得る法的必要があります。アカウントのアクティベーションを受ける前に、以下のフォームを印刷してください：';
$txt['coppa_form_link_popup'] = '新しいウィンドウで開く';
$txt['coppa_form_link_download'] = 'テキストファイルで保存';
$txt['coppa_send_to_one_option'] = 'Then arrange for your parent/guardian to send the completed form by:';
$txt['coppa_send_to_two_options'] = 'Then arrange for your parent/guardian to send the completed form by either:';
$txt['coppa_send_by_post'] = '以下の住所に郵送で：';
$txt['coppa_send_by_fax'] = '以下の電話番号で：';
$txt['coppa_send_by_phone'] = 'もしくは、管理人に電話（{PHONE_NUMBER}）をかけるように準備してください。';

$txt['coppa_form_title'] = $context['forum_name'] . 'への登録';
$txt['coppa_form_address'] = 'アドレス';
$txt['coppa_form_date'] = '日時';
$txt['coppa_form_body'] = 'I {PARENT_NAME},<br /><br />Give permission for {CHILD_NAME} (child name) to become a fully registered member of the forum: ' . $context['forum_name'] . ', with the username: {USER_NAME}.<br /><br />I understand that certain personal information entered by {USER_NAME} may be shown to other users of the forum.<br /><br />Signed:<br />{PARENT_NAME} (Parent/Guardian).';

$txt['visual_verification_label'] = 'Visual verification';
$txt['visual_verification_description'] = 'Type the letters shown in the picture';
$txt['visual_verification_sound'] = 'Listen to the letters';
$txt['visual_verification_sound_again'] = 'Play again';
$txt['visual_verification_sound_close'] = 'Close window';
$txt['visual_verification_request_new'] = 'Request another image';
$txt['visual_verification_sound_direct'] = 'Having problems hearing this?  Try a direct link to it.';

?>