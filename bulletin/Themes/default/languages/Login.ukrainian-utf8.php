<?php
// Version: 1.1.2; Login

$txt[37] = 'Ви не ввели ім\'я користувача.';
$txt[38] = 'Ви не ввели пароль.';
$txt[39] = 'Невірний пароль';
$txt[98] = 'Ім\'я користувача';
$txt[155] = 'Технічне обслуговування';
$txt[245] = 'Реєстрація пройшла успішно!';
$txt[431] = 'Поздоровляємо! Тепер Ви зареєстровані на форумі.';
// Use numeric entities in the below string.
$txt[492] = 'і Ваш пароль';
$txt[500] = 'Будь ласка, введіть дійсну email адресу, %s.';
$txt[517] = 'Необхідна інформація';
$txt[520] = 'Буде використана тільки для ідентифікації форумом.';
$txt[585] = 'Я приймаю';
$txt[586] = 'Я не приймаю';
$txt[633] = 'Увага!';
$txt[634] = 'Тільки зареєстровані користувачі мають доступ у цей розділ.';
$txt[635] = 'Будь ласка, увійдіть або';
$txt[636] = 'зареєструйтеся';
$txt[637] = 'на ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Ви можете змінити це після того як увійдете в настроювання Вашого профілю, або відвідаєте цю сторінку після входу:';
$txt[719] = 'Ім\'я користувача: ';
$txt[730] = 'Ця email адреса (%s) використовується іншим зареєстрованим користувачем. Якщо Ви думаєте, що це помилка, перейдіть на сторінку входу і скористайтеся нагадуванням пароля, використовуючи цю адресу.';

$txt['login_hash_error'] = 'Політика паролів була змінена. Будь ласка, змініть Ваш пароль.';

$txt['register_age_confirmation'] = 'Я старше %d років';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Ласкаво Просимо на ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Ви зареєструвалися на ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Ваше ім\'я користувача %2$s і пароль %3$s.' . "\n\n" . 'Ви можете змінити пароль після того як увійдете в настроюваннях Вашого профілю, або, перейшовши по цьому посиланню, після входу:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Ви зареєстровані на ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Ваше ім\'я користувача %2$s і пароль %3$s (який може бути змінений пізніше.)' . "\n\n" . 'Перед тим як увійти, Вам потрібно активувати Ваш обліковий запис. Для того, щоб це зробити, будь ласка, перейдіть по посиланню:' . "\n\n" . '%5$s' . "\n\n" . 'Якщо у Вас виникли проблеми з активацією, будь ласка, використайте цей код "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Ваш запит про реєстрацію на ' . $context['forum_name'] . ' був прийнятий, %1$s.' . "\n\n" . 'Ім\'я користувача %2$s і пароль %3$s.' . "\n\n" . 'Перед тим як Ви зможете увійти і почати користуватися форум, Ваш запит повинен розглянути і підтвердити Адміністратор форуму.  Після цього, Ви отримаєте інший лист з цієї адреси.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Ви зареєстровані на ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Ваше ім\'я користувача "%2$s".' . "\n\n" . 'Перед тим як Ви зможете увійти, спочатку потрібно активувати обліковий запис. Для того, щоб це зробити перейдіть по цьому посиланню:' . "\n\n" . '%4$s' . "\n\n" . 'Якщо у Вас виникли проблеми з активацією, будь ласка, використайте цей код "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Ваш запит про реєстрацію на ' . $context['forum_name'] . ' був отриманий, %1$s.' . "\n\n" . 'Ім\'я користувача під яким Ви зареєструвалися %2$s.' . "\n\n" . 'Перед тим як Ви зможете увійти і почати користуватися форум, Ваш запит повинен розглянути і підтвердити Адміністратор форуму.  Після цього, Ви отримаєте інший лист з цієї адреси.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Вибачите, Вам заборонено реєструватися на цьому форумі.';
$txt['under_age_registration_prohibited'] = 'Вибачте, але користувачам, які не досягли %d років не дозволено реєструватися на цьому форумі.';

$txt['activate_account'] = 'Активація облікового запису';
$txt['activate_success'] = 'Ваш обліковий запис вдало активований. Ви можете увійти на форум.';
$txt['activate_not_completed1'] = 'Ваша email адреса повинна бути перевірена, перш, ніж Ви зможете увійти.';
$txt['activate_not_completed2'] = 'Відправити повторно лист для активації?';
$txt['activate_after_registration'] = 'Дякуємо за реєстрацію. Через декілька хвилин Ви отримаєте листа з посиланням для активації Вашого облікового запису.';
$txt['invalid_userid'] = 'Користувач не існує';
$txt['invalid_activation_code'] = 'Неправильний код активації';
$txt['invalid_activation_username'] = 'Ім\'я користувача або email';
$txt['invalid_activation_new'] = 'Якщо Ви зареєструвалися і вказали неправильну email адресу, напишіть нову і вкажіть Ваш пароль.';
$txt['invalid_activation_new_email'] = 'Нова email адреса';
$txt['invalid_activation_password'] = 'Старий пароль';
$txt['invalid_activation_resend'] = 'Відправити повторно код активації';
$txt['invalid_activation_known'] = 'Якщо Ви знаєте Ваш код активації, будь ласка, наберіть його тут.';
$txt['invalid_activation_retry'] = 'Код активації';
$txt['invalid_activation_submit'] = 'Активувати';

$txt['coppa_not_completed1'] = 'Адміністратор ще не одержав згоди на Вашу реєстрацію від батьків/опікуна.';
$txt['coppa_not_completed2'] = 'Потрібні докладні деталі?';

$txt['awaiting_delete_account'] = 'Ваш обліковий запис був відзначений на видалення!<br />Якщо Ви хочете відновити Ваш обліковий запис, будь ласка, реактивируйте Ваш обліковий запис. відзначивши &quot;Активувати мій обліковий запис&quot; і ввійдіть знову.';
$txt['undelete_account'] = 'Активувати мій обліковий запис';

$txt['change_email_success'] = 'Ваша email адреса була змінена. Вам відправлений лист для активації.';
$txt['resend_email_success'] = 'Новий лист активації був вдало відправлений.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Інформація про новий пароль';
$txt['change_password_1'] = 'Інформація для входу на';
$txt['change_password_2'] = 'був змінений і пароль знищений. Нижче наведена інформація для входу.';

$txt['maintenance3'] = 'Форум перебуває на Технічному Обслуговуванні.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Будь ласка, прочитайте угоду перш, ніж Ви зареєструєтеся.';
$txt['register_passwords_differ_js'] = 'Паролі не збігаються!';

$txt['approval_after_registration'] = 'Дякуємо за реєстрацію. Адміністратор повинен підтвердити Вашу реєстрацію, перш ніж Ви зможете використати Ваш обліковий запис. Після підтвердження Ви отримаєте листа від Адміністратора.';

$txt['admin_settings_desc'] = 'Тут Ви можете змінити настроювання, пов\'язані з реєстрацією нових користувачів.';

$txt['admin_setting_registration_method'] = 'Спосіб реєстрації нових користувачів';
$txt['admin_setting_registration_disabled'] = 'Реєстрація заборонена';
$txt['admin_setting_registration_standard'] = 'Миттєва реєстрація';
$txt['admin_setting_registration_activate'] = 'Активація користувача';
$txt['admin_setting_registration_approval'] = 'Схвалення користувача';
$txt['admin_setting_notify_new_registration'] = 'Повідомляти Адміністратора при реєстрації нових користувачів';
$txt['admin_setting_send_welcomeEmail'] = 'Відправляти вітання новим користувачам';

$txt['admin_setting_password_strength'] = 'Вимоги до довжини пароля користувачів';
$txt['admin_setting_password_strength_low'] = 'Низька - мінімум 4 символи';
$txt['admin_setting_password_strength_medium'] = 'Середня - не може збігатися з ім\'ям користувача';
$txt['admin_setting_password_strength_high'] = 'Високе - сполучення різних символів';

$txt['admin_setting_image_verification_type'] = 'Complexity of visual verification image';
$txt['admin_setting_image_verification_type_desc'] = 'The more complex the image the harder it is for bots to bypass';
$txt['admin_setting_image_verification_off'] = 'Disabled';
$txt['admin_setting_image_verification_vsimple'] = 'Very Simple - Plain text on image';
$txt['admin_setting_image_verification_simple'] = 'Simple - Overlapping coloured letters, no noise';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlapping coloured letters, with noise';
$txt['admin_setting_image_verification_high'] = 'High - Angled letters, considerable noise';
$txt['admin_setting_image_verification_sample'] = 'Sample';
$txt['admin_setting_image_verification_nogd'] = '<b>Note:</b> as this server does not have the GD library installed the different complexity settings will have no effect.';

$txt['admin_setting_coppaAge'] = 'Мінімальний вік користувача для успішної реєстрації';
$txt['admin_setting_coppaAge_desc'] = '(0- без обмеження)';
$txt['admin_setting_coppaType'] = 'Дії, які виконуються при реєстрації користувача молодше вказаного віку';
$txt['admin_setting_coppaType_reject'] = 'Скасувати реєстрацію';
$txt['admin_setting_coppaType_approval'] = 'Запросити підтвердження у батьків/опікуна';
$txt['admin_setting_coppaPost'] = 'Email адреса, на який повинне бути прислане схвалення про дозвіл реєстрації';
$txt['admin_setting_coppaPost_desc'] = 'Тільки попередити, якщо користувач молодше встановленого віку';
$txt['admin_setting_coppaFax'] = 'Номер факсу, на який повинне бути присланий схвальний лист про дозвіл реєстрації';
$txt['admin_setting_coppaPhone'] = 'Ваш контактний номер для зв\'язку з батьками';
$txt['admin_setting_coppa_require_contact'] = 'Ви також повинні ввести поштову адресу або номер телефону для контактів з батьками/опікунами, щоб одержати схвалення.';

$txt['admin_register'] = 'Реєстрація нового користувача';
$txt['admin_register_desc'] = 'Тут Ви можете зареєструвати нових користувачів. Рекомендується відправити деталі користувачів на їх email.';
$txt['admin_register_username'] = 'Ім\'я користувача';
$txt['admin_register_email'] = 'email адреса';
$txt['admin_register_password'] = 'Пароль';
$txt['admin_register_username_desc'] = 'Ім\'я нового користувача';
$txt['admin_register_email_desc'] = 'Email адреса користувача';
$txt['admin_register_password_desc'] = 'Пароль нового користувача';
$txt['admin_register_email_detail'] = 'Відправити новий пароль користувачеві';
$txt['admin_register_email_detail_desc'] = 'Потрібна вірна email адреса';
$txt['admin_register_email_activate'] = 'Вимагати активації облікового запису';
$txt['admin_register_group'] = 'Основна група користувача';
$txt['admin_register_group_desc'] = 'Основна група, до якої буде належати новий користувач';
$txt['admin_register_group_none'] = '(немає основної групи)';
$txt['admin_register_done'] = 'Користувач %s вдало зареєстрований!';

$txt['admin_browse_register_new'] = 'Зареєструвати нового користувача';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Зареєстрований новий користувач';
$txt['admin_notify_profile'] = 'На Вашому форумі зареєстрований новий користувач, %s. Натисніть на посилання, щоб переглянути його профіль.';
$txt['admin_notify_approval'] = 'Перш ніж користувач зможе відправляти повідомлення, обліковий запис повинен бути схвалений. Натисніть на посилання, щоб схвалити користувача.';

$txt['coppa_title'] = 'Форум з обмеженням за віком';
$txt['coppa_after_registration'] = 'Дякуємо за реєстрацію на форумі ' . $context['forum_name'] . '.<br /><br />Оскільки Ви молодше  {MINIMUM_AGE} років, ми повинні одержати від Ваших батьків або опікуна дозвіл, перш ніж Ви зможете використати Ваш обліковий запис. Щоб активувати обліковий запис, будь ласка, роздрукуйте цю форму:';
$txt['coppa_form_link_popup'] = 'Відкрити форму в новому вікні';
$txt['coppa_form_link_download'] = 'Завантажити форму як текстовий файл';
$txt['coppa_send_to_one_option'] = 'Попросіть батьків/опікунів заповнити форму:';
$txt['coppa_send_to_two_options'] = 'Попросіть батьків/опікунів відправити заповнену форму на email або факс, зазначені нижче:';
$txt['coppa_send_by_post'] = 'Відправити на наступну адресу:';
$txt['coppa_send_by_fax'] = 'Відправити факс на наступний номер:';
$txt['coppa_send_by_phone'] = 'Альтернатива, нехай батьки подзвонять Адміністраторові форуму за телефоном {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Форма схвалення для реєстрації на ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Адреса';
$txt['coppa_form_date'] = 'Дата';
$txt['coppa_form_body'] = 'Я {PARENT_NAME},<br /><br /> дозволяю  {CHILD_NAME} (ім\'я дитини) зареєструватися на форумі: ' . $context['forum_name'] . ', з ім\'ям користувача: {USER_NAME}.<br /><br />Я розумію, що введена особиста інформація {USER_NAME}, може бути показана іншим користувачам форуму<br /><br />Підпис:<br />{PARENT_NAME} (Батько/Опікун).';

$txt['visual_verification_label'] = 'Візуальна перевірка';
$txt['visual_verification_description'] = 'Наберіть символи, що відображені зображенні';
$txt['visual_verification_sound'] = 'Прослухати';
$txt['visual_verification_sound_again'] = 'Програти знову';
$txt['visual_verification_sound_close'] = 'Закрити вікно';
$txt['visual_verification_request_new'] = 'Запросити інше зображення';
$txt['visual_verification_sound_direct'] = 'Проблеми із прослуховуванням? Спробуйте пряме посилання для прослуховування';

?>