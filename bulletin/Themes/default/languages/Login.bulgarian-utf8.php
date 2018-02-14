<?php
// Version: 1.1.2; Login

$txt[37] = 'Не си въвел име.';
$txt[38] = 'Не си въвел парола.';
$txt[39] = 'Невалидна парола';
$txt[98] = 'Избери потребителско име';
$txt[155] = 'Режим на Профилактика';
$txt[245] = 'Регистрацията е успешна';
$txt[431] = 'Поздравления! Вече си член на нашия форум.';
// Use numeric entities in the below string.
$txt[492] = 'и твоята парола е';
$txt[500] = 'Моля въведи валиден е-мейл адрес, %s.';
$txt[517] = 'Задължителна информация';
$txt[520] = 'Използва се само при влизане. Можете да използвате специални символи, като си изберете екранно име от настройките на вашия профил.';
$txt[585] = 'Съгласен съм';
$txt[586] = 'Не съм съгласен';
$txt[633] = 'Внимание!';
$txt[634] = 'Този раздел е само за регистрирани потребители.';
$txt[635] = 'Моля, влезте с вашето име и парола или';
$txt[636] = 'се регистрирайте';
$txt[637] = 'в ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Може да го смениш след като влезеш във форума и натиснеш бутона ПРОФИЛ или от линка по долу:';
$txt[719] = 'Твоето име е: ';
$txt[730] = 'Този е-мейл адрес (%s) се ползва от друг потребител. Ако мислите че това е грешка, идете на страницата за влизане и изискайте изпращане на забравена парола.';

$txt['login_hash_error'] = 'Имаме нова защита на паролите.  Моля, въведи паролата си още един път.';

$txt['register_age_confirmation'] = 'Аз съм поне на %d години';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Добре дошъл в ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Вече имаш регистрация в ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Твоето име за влизане е %2$s с парола %3$s.' . "\n\n" . 'Можеш да смениш паролата си от настройките на профила ти или да посетиш тази страница, след като влезеш с твоето име и парола:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Вече имаш регистрация в ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Твоето име за влизане е %2$s с парола %3$s (може да бъде сменена по-късно.)' . "\n\n" . 'Преди да можеш да ползваш форума, трябва да активираш регистрацията си като натиснеш на следния линк:' . "\n\n" . '%5$s' . "\n\n" . 'Ако имаш проблеми с активацията ползвай следния код "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Вече имаш регистрация в ' . $context['forum_name'] . ' , %1$s.' . "\n\n" . 'Твоето име за влизане е %2$s с парола %3$s (може да бъде сменена по-късно.)' . "\n\n" . 'Преди да можеш да ползваш форума, регистрацията ти трябва да бъде одобрена от администраторите, това се извършва на ръчно, така че молим за търпение. Ще получиш е-мейл с решението до 48 часа' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Вече имаш регистрация в ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Твоето име за влизане е "%2$s".' . "\n\n" . 'Преди да можеш да ползваш форума, трябва да активираш регистрацията си като натиснеш на следния линк:' . "\n\n" . '%4$s' . "\n\n" . 'Ако имаш проблеми с активацията ползвай следния код "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Вашата заявка за регистрация в ' . $context['forum_name'] . ' е получена, %1$s.' . "\n\n" . 'Името с което сте се регистрирали е %2$s.' . "\n\n" . 'Преди да имате възможност да ползвате форума, вашата заявка трябва  да бъде одобрена. Очаквайте съобщение от този е-мейл адрес.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Имате забрана за регистрация в този форум!';
$txt['under_age_registration_prohibited'] = 'Съжалявам, но потребители под %d години не може да се регистрират в този форум.';

$txt['activate_account'] = 'Активиране на регистрация';
$txt['activate_success'] = 'Регистрация е активирана успешно. Сега вече можеш да влезеш във форума с твоето име и парола.';
$txt['activate_not_completed1'] = 'Не си активирал регистрацията си. Моля провери си е-мейла за активационен линк. Забележка: Ако нямаш активационен линк, моля регистрирай се отново с друг е-мейл адрес!';
$txt['activate_not_completed2'] = 'Имаш ли нужда от нов активационен линк?';
$txt['activate_after_registration'] = 'Регистрирането успешно. Провери дадения от теб е-мейл адрес, там би трябвало да има съобщение от нас с линк, чрез който да активираш регистрацията си. Забележка: Ако до 30мин. няма активационен линк, моля регистрирай се отново с друг е-мейл адрес!';
$txt['invalid_userid'] = 'Няма такъв потребител';
$txt['invalid_activation_code'] = 'Невалиден активационен код';
$txt['invalid_activation_username'] = 'Потребителско име или е-мейл адрес';
$txt['invalid_activation_new'] = 'Ако си се регистрирал с грешен е-мейл адрес, напиши нов и твоята парола от регистрацията ти.';
$txt['invalid_activation_new_email'] = 'Нов е-мейл';
$txt['invalid_activation_password'] = 'Стара парола';
$txt['invalid_activation_resend'] = 'Текущ активационен код';
$txt['invalid_activation_known'] = 'Ако вече знаеш активационния си код, моля напиши го тук.';
$txt['invalid_activation_retry'] = 'Код за активация';
$txt['invalid_activation_submit'] = 'Активиране';

$txt['coppa_not_completed1'] = 'Администраторите все още не са получили съгласието на твоите родители.';
$txt['coppa_not_completed2'] = 'Нужда от повече информация?';

$txt['awaiting_delete_account'] = 'Твоята регистрация подлежи на изтриване!<br />Ако желаеш да я възобновиш, моля маркирай тук &quot;Възобновяване на регистрация&quot; , и влез във форума.';
$txt['undelete_account'] = 'Възобновяване на регистрация';

$txt['change_email_success'] = 'Сменил си си е-мейл адреса, и поради това форума ти е изпратил нов активационен линк на него.';
$txt['resend_email_success'] = 'Новият активационен линк е изпратен успешно.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Нова парола';
$txt['change_password_1'] = 'Детайли на профила';
$txt['change_password_2'] = 'са сменени и паролата ти е променена. По долу са твоите нови детайли на профила.';

$txt['maintenance3'] = 'Режим на профилактика.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Моля, прочети и при желание се съгласи за да продължиш.';
$txt['register_passwords_differ_js'] = 'Двете пароли не са еднакви!';

$txt['approval_after_registration'] = 'Регистрирането е успешно. Но все още вашата регистрация не е одобрена - администраторите на форума трябва да я одобрят, това се извършва на ръчно, така че молим за търпение.';

$txt['admin_settings_desc'] = 'Тук може да променяте различни настройки за регистрация на новите потребители.';

$txt['admin_setting_registration_method'] = 'Избор на метод за регистрация на нови потребители';
$txt['admin_setting_registration_disabled'] = 'Регистрирането е деактивирано';
$txt['admin_setting_registration_standard'] = 'Свободна регистрация';
$txt['admin_setting_registration_activate'] = 'Регистрация с активация';
$txt['admin_setting_registration_approval'] = 'С одобрение на админа';
$txt['admin_setting_notify_new_registration'] = 'Известяване на администраторите при нов потребител';
$txt['admin_setting_send_welcomeEmail'] = 'Изпращане на е-мейл до новите потребители';

$txt['admin_setting_password_strength'] = 'Комплектност на паролата ';
$txt['admin_setting_password_strength_low'] = 'Проста - минимум 4 символа';
$txt['admin_setting_password_strength_medium'] = 'Средна - не може да съдържа името';
$txt['admin_setting_password_strength_high'] = 'Висока - да съдържа различни символи';

$txt['admin_setting_image_verification_type'] = 'Сложност на визуалното потвърждение на картинката ';
$txt['admin_setting_image_verification_type_desc'] = 'Колкото е по-сложна толкова по-трудно е за ботовете да се регистрират автоматично';
$txt['admin_setting_image_verification_off'] = 'Деактивирано';
$txt['admin_setting_image_verification_vsimple'] = 'Много опростена - обикновен текст върху картинката';
$txt['admin_setting_image_verification_simple'] = 'Опростена - Припокриващи се цветни букви, без замъгляване';
$txt['admin_setting_image_verification_medium'] = 'Средна - Припокриващи се цветни букви, със замъгляване';
$txt['admin_setting_image_verification_high'] = 'Висока - Разкривени букви, с много замъгляване';
$txt['admin_setting_image_verification_sample'] = 'Пример';
$txt['admin_setting_image_verification_nogd'] = '<b>Note:</b> as this server does not have the GD library installed the different complexity settings will have no effect.';

$txt['admin_setting_coppaAge'] = 'Ограничение за възрастова граница при регистрация';
$txt['admin_setting_coppaAge_desc'] = 'При 0, няма ограничение';
$txt['admin_setting_coppaType'] = 'Действие при Активирано ограничение ';
$txt['admin_setting_coppaType_reject'] = 'Отказ за регистрация';
$txt['admin_setting_coppaType_approval'] = 'Родителско одобрение';
$txt['admin_setting_coppaPost'] = 'Пощенски адрес на форума за изпращане на одобрението';
$txt['admin_setting_coppaPost_desc'] = 'Валидно само при Активирано ограничение';
$txt['admin_setting_coppaFax'] = 'Факс номер на форума за родителско одобрение';
$txt['admin_setting_coppaPhone'] = 'Телефонен номер на форума за родителско одобрение';
$txt['admin_setting_coppa_require_contact'] = 'Въведи телефонен или факс номер при за възрастова граница при регистрация.';

$txt['admin_register'] = 'Регистрация на нов потребител';
$txt['admin_register_desc'] = 'От тук можеш да регистрираш нови потребители и ако желаеш може да ги уведомиш по е-мейл.';
$txt['admin_register_username'] = 'Ново потребителско име';
$txt['admin_register_email'] = 'Е-мейл Адрес';
$txt['admin_register_password'] = 'Парола';
$txt['admin_register_username_desc'] = 'Име за вход';
$txt['admin_register_email_desc'] = 'Личен е-мейл на потребителя';
$txt['admin_register_password_desc'] = 'Парола за новия потребител';
$txt['admin_register_email_detail'] = 'Изпращане на паролата по е-мейл';
$txt['admin_register_email_detail_desc'] = 'Е-мейл адреса е задължителен дори ако не е маркирано';
$txt['admin_register_email_activate'] = 'Потребителя трябва да активира регистрацията';
$txt['admin_register_group'] = 'Основна членска група';
$txt['admin_register_group_desc'] = 'Основна членска група към която потребителя ще бъде член ';
$txt['admin_register_group_none'] = 'без основна група';
$txt['admin_register_done'] = 'Потребител %s е регистриран успешно!';

$txt['admin_browse_register_new'] = 'Нова регистрация';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Нова регистрация';
$txt['admin_notify_profile'] = '%s току що се регистрира. За да видиш профила му виж линка по долу.';
$txt['admin_notify_approval'] = 'Преди този потребител да може да ползва всички функции на форума, регистрацията му трябва да бъде одобрена. Виж линка по долу за да предприемеш необходимите действия.';

$txt['coppa_title'] = 'Форум с ограничение по възраст';
$txt['coppa_after_registration'] = 'Благодарим си че се регистрирахте в ' . $context['forum_name'] . '.

Тъй като сте под минималната възраст {MINIMUM_AGE} за регистрация, е необходимо

	

да имате родителско разрешение преди да ползвате форума. Моля, отпечатайте и попълнете този формуляр:';
$txt['coppa_form_link_popup'] = 'Зареждане на формулярът в нов прозорец';
$txt['coppa_form_link_download'] = 'Сваляне на формулярът като текстов файл';
$txt['coppa_send_to_one_option'] = 'Изпратете попълнения формуляр по:';
$txt['coppa_send_to_two_options'] = 'Може да изпратите попълнения формуляр и по:';
$txt['coppa_send_by_post'] = 'Изпратете потвърждението до следния адрес:';
$txt['coppa_send_by_fax'] = 'Изпратете потвърждението до следния факс номер:';
$txt['coppa_send_by_phone'] = 'Обадете се на следния телефонен номер {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Родителско разрешение за регистрация в ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Адрес';
$txt['coppa_form_date'] = 'Дата';
$txt['coppa_form_body'] = 'Аз {PARENT_NAME},

Давам разрешението си {CHILD_NAME} (име на детето) да стане пълноправен потребител на вашия форум: ' . $context['forum_name'] . ', с потребителско име: {USER_NAME}.

Осъзнавам че личната информация дадена във форума от {USER_NAME} би могла да се види от други потребители.

Подпис:
{PARENT_NAME} (Родител/Настойник).';

$txt['visual_verification_label'] = 'Визуално потвърждение';
$txt['visual_verification_description'] = 'Въведете буквите показани на картинката';
$txt['visual_verification_sound'] = 'Чуйте буквите';
$txt['visual_verification_sound_again'] = 'Повторение';
$txt['visual_verification_sound_close'] = 'Затвори';
$txt['visual_verification_request_new'] = 'Желая нови букви - Натиснете бутона F5 на вашата клавиатура';
$txt['visual_verification_sound_direct'] = 'Проблеми с аудиото?  Пробвайте линка.';

?>