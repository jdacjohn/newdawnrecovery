<?php
// Version: 1.1.2; Login

$txt[37] = 'Внесувањето корисничко име е задолжително.';
$txt[38] = 'Не сте ја внеле својата лозинка.';
$txt[39] = 'Погрешна лозинка';
$txt[98] = 'Изберете корисничко име (choose user name)';
$txt[155] = 'Мод за одржување';
$txt[245] = 'Зачленувањето е успешно';
$txt[431] = 'Успешно! Сега сте член на форумот.';
// Use numeric entities in the below string.
$txt[492] = 'а вашата лозинка е';
$txt[500] = 'Ве молам внесете точна email адреса, %s.';
$txt[517] = 'Потребни информации';
$txt[520] = 'Се користи само за идентификација на форумот. Можете да користите специјални карактери после пријавувањето, со менување на вашето име што се прикажува во профилот.';
$txt[585] = 'Се сложувам (I agree)';
$txt[586] = 'Не се сложувам';
$txt[633] = 'Внимание!';
$txt[634] = 'Само регистрираните членови можат да пристапат во овој дел.';
$txt[635] = 'Пријавете се подолу или';
$txt[636] = 'зачленете се';
$txt[637] = 'на Форумот за планинарски споротови.';
// Use numeric entities in the below two strings.
$txt[701] = 'Можете да ја промените во страницата со профилот после пријавувањето, или кога ја посетувате оваа страница после пријавувањето.:';
$txt[719] = 'Вашето корисничко име е: ';
$txt[730] = 'Таа email адреса (%s) веќе се користи од страна на регистриран член. Ако мислите дека е ова грешка, посетете ја страницата за пријавување и употребете го потсетникот за лозинка со таа адреса.';

$txt['login_hash_error'] = 'Функцијата за сигурност на лозинките е неодамна надоградена.  Ве молиме внесете ја лозинката повторно.';

$txt['register_age_confirmation'] = 'Јас имам најмалку %d години';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Добредојдовте на ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Вие сте регистрирани со налог на ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Вашето корисничко име на налогот е %2$s а лозинката е %3$s.' . "\n\n" . 'Можете да ја смените лозинката после логирањето на Вашиот профил, или со посета на следната страница после пријавувањето:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Вие сте регистрирани со налог на ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Корисничкото име на Вашиот налог е %2$s и лозинката е %3$s (која може да биде сменета подоцна.)' . "\n\n" . 'Пред да можете да се логирате, прво треба да го активирате вашиот налог. За да го направите тоа следете го овој линк:' . "\n\n" . '%5$s' . "\n\n" . 'Доколку имате некој проблем со активацијата, Ве молиме искористете го кодот "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'Вашето барање за регистрација на ' . $context['forum_name'] . ' е пристигнато, %1$s.' . "\n\n" . 'Корисничкото име кое сакате да го користите е %2$s а лозинката е %3$s.' . "\n\n" . 'Пред да можете да се пријавите и да почнете да го користите форумот, Вашето барање ќе биде разгледано и одобрено.  Кога тоа ќе се случи, ќе добиете уште една email порака од оваа адреса.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Вие сте сега регистриран со налог на ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Вашето корисничко име е "%2$s".' . "\n\n" . 'Пред да можете да се пријавите, прво треба да го активирате налогот. За да го направите тоа, Ве молам следете го следниот линк:' . "\n\n" . '%4$s' . "\n\n" . 'Ако имате било какви проблеми со активацијата, Ве молиме искористете го следниот код "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Вашето барање за регистрација на ' . $context['forum_name'] . ' е примено, %1$s.' . "\n\n" . 'Корисничкото име во налогот беше %2$s.' . "\n\n" . 'Пред да можете да се пријавите и почнете да го користите форумот, вашето барње ќе биде разгледано и одобрено.  Кога тоа ќе се случи, ќе добиете уште една email порака од оваа адреса.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Извинете. но вам не ви е дозволено да се зачлените на овој форум';
$txt['under_age_registration_prohibited'] = 'Извинете, но на корисниците под возрасната граница од %d не им е дозволено да се регистрираат на овој форум.';

$txt['activate_account'] = 'Активирање на налогот';
$txt['activate_success'] = 'Вашиот налог е успешно активиран. Сега можете да се пријавите';
$txt['activate_not_completed1'] = 'Вашата email адреса мора да биде потврдена пред да се пријавите.';
$txt['activate_not_completed2'] = 'Дали ви е потребен уште еден email за активирање?';
$txt['activate_after_registration'] = 'Ви се заблагодаруваме на зачленувањето. Наскоро ќе примите email со линк за активирање на вашиот налог.';
$txt['invalid_userid'] = 'Корисничкото име не постои';
$txt['invalid_activation_code'] = 'Погрешен код за активирање';
$txt['invalid_activation_username'] = 'корисничко име или email';
$txt['invalid_activation_new'] = 'Ако при зачленувањето сте употребиле погрешна email адреса, внесете нова заедно со вашата лозинка.';
$txt['invalid_activation_new_email'] = 'Нова email адреса';
$txt['invalid_activation_password'] = 'Стара лозинка';
$txt['invalid_activation_resend'] = 'Испрати го повторно кодот за активирање';
$txt['invalid_activation_known'] = 'Ако веќе го знате вашиот код за активирање, внесете го овде.';
$txt['invalid_activation_retry'] = 'Код за активирање';
$txt['invalid_activation_submit'] = 'Активирај';

$txt['coppa_not_completed1'] = 'Администраторот се уште не добил одобрение од Вашиот родител/старател за налогот.';
$txt['coppa_not_completed2'] = 'Потребни се повеќе детали?';

$txt['awaiting_delete_account'] = 'Вашиот налог е означен за бришење!<br />Ако сакате да го обновите налогот, Ве молиме означете &quot;Обнови го мојот налог&quot; box, и пријави се повторно.';
$txt['undelete_account'] = 'Обнови го мојот налог';

$txt['change_email_success'] = 'Вашата email адреса е сменета, а новиот email за активирање е испратен на неа.';
$txt['resend_email_success'] = 'Новата email порака за активирање е успешно испратена.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Детали за новата лозинка';
$txt['change_password_1'] = 'Вашите детали за пријавувањето';
$txt['change_password_2'] = 'се изменети а вашата лозинка е ресетирана. Подолу се новите детали за пријавување.';

$txt['maintenance3'] = 'Овој форум е во мод на одржување.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Ве молам прочитајте/прифатете ги условите за да можете да ја поднесете формата.';
$txt['register_passwords_differ_js'] = 'Двете лозинки кои пто ги внесовте не се совпаѓаат!';

$txt['approval_after_registration'] = 'Се заблагодаруваме на зачленувањето. Администраторот мора да го одобри вашето зачленување пред да можете да го користите својот налог. Набрзо ќе примите email со известување за одлуката на администраторот.';

$txt['admin_settings_desc'] = 'Овде можеш да измениш многу подесувања поврзани со регистрацијата на нови членови.';

$txt['admin_setting_registration_method'] = 'Метод за регистрација наменет за нови членови';
$txt['admin_setting_registration_disabled'] = 'Оневозможена регистрација';
$txt['admin_setting_registration_standard'] = 'Моментална регистрација';
$txt['admin_setting_registration_activate'] = 'Активирање на членот';
$txt['admin_setting_registration_approval'] = 'Одобрување на членот';
$txt['admin_setting_notify_new_registration'] = 'Извести ги администраторите кога ќе се придружи нов член';
$txt['admin_setting_send_welcomeEmail'] = 'Испрати email за добредојде на новите членви';

$txt['admin_setting_password_strength'] = 'Бара сила за лозинки на корисникот';
$txt['admin_setting_password_strength_low'] = 'Ниско - најмалку 4 карактери';
$txt['admin_setting_password_strength_medium'] = 'Средно - не може да го содржи корисничкото име';
$txt['admin_setting_password_strength_high'] = 'Високо - мешавина на различни карактери';

$txt['admin_setting_image_verification_type'] = 'Комплексноста на визуелната верификација со фотографија';
$txt['admin_setting_image_verification_type_desc'] = 'Колку посложена е фотографијата толку потешко е за bots да поминат';
$txt['admin_setting_image_verification_off'] = 'Оневозможено';
$txt['admin_setting_image_verification_vsimple'] = 'Многу едноставно - Стандарден текст во фотографија';
$txt['admin_setting_image_verification_simple'] = 'Едноставна - Преклопување на букви во различни бои, без пречки';
$txt['admin_setting_image_verification_medium'] = 'Средна - Преклопување на различно обоени букви, со пречки';
$txt['admin_setting_image_verification_high'] = 'Висока - Искривени букви, повеќе пречки';
$txt['admin_setting_image_verification_sample'] = 'Пример';
$txt['admin_setting_image_verification_nogd'] = '<b>Забелешка:</b> заради тоа што овој сервер нема инсталација на GD library различните подесувања за поголема комплексност на визуелната верификација нема да имаат никаков ефект.';

$txt['admin_setting_coppaAge'] = 'Возраст под која е ограничено регистрирањето';
$txt['admin_setting_coppaAge_desc'] = '(Подеси на 0 за да се оневозможи)';
$txt['admin_setting_coppaType'] = 'Акција која се презема во случај корисникот да е под возрасната граница';
$txt['admin_setting_coppaType_reject'] = 'Отфрли ја нивната регистрација';
$txt['admin_setting_coppaType_approval'] = 'Побарај задолжително одобрување од родител/старател';
$txt['admin_setting_coppaPost'] = 'Поштенска адреса каде одобрението треба да биде испратено';
$txt['admin_setting_coppaPost_desc'] = 'Се користи само ако возрасното ограничување е применливо';
$txt['admin_setting_coppaFax'] = 'Број на факс каде треба да биде испратено одобрението';
$txt['admin_setting_coppaPhone'] = 'Контакт тел. за родителите со форма за возрасно ограничување';
$txt['admin_setting_coppa_require_contact'] = 'Мора да внесете или поштенски или факс контакт ако одобрувањето од родител/старател е задолжително.';

$txt['admin_register'] = 'Регистрација на нов член';
$txt['admin_register_desc'] = 'Од тука може да регистрирате нови членови на форумот, и ако сакаат испратете им ги деталите по email.';
$txt['admin_register_username'] = 'Ново корисничко име';
$txt['admin_register_email'] = 'Email адреса';
$txt['admin_register_password'] = 'Лозинка';
$txt['admin_register_username_desc'] = 'Корисничко име за новиот член';
$txt['admin_register_email_desc'] = 'Email адреса на членот';
$txt['admin_register_password_desc'] = 'Лозинка за новиот член';
$txt['admin_register_email_detail'] = 'Испрати ја новата лозинка на членот преку еmail порака';
$txt['admin_register_email_detail_desc'] = 'Email адресата е задолжителна дури и ако не е означена';
$txt['admin_register_email_activate'] = 'Задолжително е активирањето на налогот на секој корисник';
$txt['admin_register_group'] = 'Примарна група на членови';
$txt['admin_register_group_desc'] = 'Примарна група на која новите членови ќе и припаѓаат';
$txt['admin_register_group_none'] = '(нема примарна група)';
$txt['admin_register_done'] = 'Членот %s е успешно регистриран!';

$txt['admin_browse_register_new'] = 'Регистрирај нов член';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Нов член ни се придружи';
$txt['admin_notify_profile'] = '%s самошто се регистрираше како нов член на форумот. Кликни на линкот подоле да го видиш неговиот профил.';
$txt['admin_notify_approval'] = 'Членот пред да може да остава пораки мора првин да има одобрен налог. Кликни на линкот подоле за да се префрлиш на страницата за одобрување.';

$txt['coppa_title'] = 'Форум со возрасно ограничување';
$txt['coppa_after_registration'] = 'Ви благодариме за регистрирањето на ' . $context['forum_name'] . '.<br /><br />Бидејќи сте под возрасната граница од {НАЈМАЛКУ_ГОДИНИ}, легално побарување е
    да добиеме одобрување од Вашите родители/старатели пред да можете да го користите својот налог. За да може да се активира налогот прво отштампајте го следниот формулар:';
$txt['coppa_form_link_popup'] = 'Вчитај го формуларот во нов прозорец';
$txt['coppa_form_link_download'] = 'Симни го формуларот како текстуална датотека';
$txt['coppa_send_to_one_option'] = 'Потоа договори со родителите/старателите да го испратат комплетниот формулар со:';
$txt['coppa_send_to_two_options'] = 'Потоа договори твоите родители/старатели да го испратат комплетниот формулар со:';
$txt['coppa_send_by_post'] = 'Испрати, на следната адреса:';
$txt['coppa_send_by_fax'] = 'Факс, на следниот број:';
$txt['coppa_send_by_phone'] = 'Алтернативно, договори тие да му се јават на администраторот на {БРОЈ_НА_ТЕЛЕФОН}.';

$txt['coppa_form_title'] = 'Форма за одобрување на регистрацијата на ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Адреса';
$txt['coppa_form_date'] = 'Датум';
$txt['coppa_form_body'] = 'Јас {ИМЕ_НА_РОДИТЕЛ},<br /><br />давам дозвола за {ИМЕ_НА_ДЕТЕТО} да стане полноправен регистриран член на : ' . $context['forum_name'] . ', со корисничко име: {КОРИСНИЧКО_ИМА}.<br /><br />Се согласувам дека некои лични информации внесени од {КОРИСНИЧКО_ИМА} можат да бидат прикажани на други корисници на форумот.<br /><br />Потпис:<br />{ИМЕ_НА_РОДИТЕЛ} (Родител/Старател).';

$txt['visual_verification_label'] = 'Визуелна потврда';
$txt['visual_verification_description'] = 'Внеси ги буквите прикажани на сликата';
$txt['visual_verification_sound'] = 'Слушај ги буквите';
$txt['visual_verification_sound_again'] = 'Пушти ги повторно';
$txt['visual_verification_sound_close'] = 'Затвори го прозорецот';
$txt['visual_verification_request_new'] = 'Побарајте друга слика';
$txt['visual_verification_sound_direct'] = 'Имате проблем со слушање на ова?  Обидете се со директен линк према него.';

?>