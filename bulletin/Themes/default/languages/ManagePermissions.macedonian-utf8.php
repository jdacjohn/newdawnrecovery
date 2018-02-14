<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Управување со дозволите';
$txt['permissions_modify'] = 'Промени';
$txt['permissions_access'] = 'Пристап';
$txt['permissions_allowed'] = 'Дозволени';
$txt['permissions_denied'] = 'Оневозможени';

$txt['permissions_switch'] = 'Префрли на';
$txt['permissions_global'] = 'Општи';
$txt['permissions_local'] = 'Локални';

$txt['permissions_groups'] = 'Дозволи по групи на членови';
$txt['permissions_all'] = 'се';
$txt['permissions_none'] = 'ниедна';
$txt['permissions_set_permissions'] = 'Постави дозволи';

$txt['permissions_with_selection'] = 'На избраните';
$txt['permissions_apply_pre_defined'] = 'Примени го редефинираниот профил на дозволите';
$txt['permissions_select_pre_defined'] = 'Изберете редефиниран профил';
$txt['permissions_copy_from_board'] = 'Копирај ги дозволите од овој форум';
$txt['permissions_select_board'] = 'Изберете форум';
$txt['permissions_like_group'] = 'Постави ги дозволите како за оваа група';
$txt['permissions_select_membergroup'] = 'Изберете група на членови';
$txt['permissions_add'] = 'Додади дозвола';
$txt['permissions_remove'] = 'Отстрани дозвола';
$txt['permissions_deny'] = 'Оневозможи дозвола';
$txt['permissions_select_permission'] = 'Изберете дозвола';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Можете да изберете само една акција за да ги промените дозволите';
$txt['permissions_no_action'] = 'Не е избрана акција';
$txt['permissions_deny_dangerous'] = 'Сега ќе оневозможите една или повеќе дозволи.\\nОва може да биде опасно и да предизвика неочекувани резултати ако не сте сигурни дека никој \\"случајно\\" не е во групата или групите на кои им се оневозможуваат дозволите.\\n\\nДали сте сигурни дека сакате да продолжите?';

$txt['permissions_boards'] = 'Дозволи по форуми';

$txt['permissions_modify_group'] = 'Промени Група';
$txt['permissions_general'] = 'Општи дозволи';
$txt['permissions_board'] = 'Општи дозволи на Форумот';
$txt['permissions_commit'] = 'Сочувај ги промените';
$txt['permissions_modify_local'] = 'Промени ги локалните дозволи';
$txt['permissions_on'] = 'на форумот';
$txt['permissions_local_for'] = 'Локални дозволи за групите';
$txt['permissions_option_on'] = 'Д';
$txt['permissions_option_off'] = 'Н';
$txt['permissions_option_deny'] = 'О';
$txt['permissions_option_desc'] = 'За секоја дозвола можете да изберете \'Дозволена\' (Д), \'Недозволена\' (Н) или <span style="color: red;">\'Оневозможена\' (О)</span>.<br /><br />Запамти дека ако не-дозволиш дозвола, било кој член - без обзир дали е модератор или друг - кој е во групата, ќе му биде истото не-дозволено.<br />Од оваа причина, не-дозволувањето треба внимателно да се користи, само кога е <b>неопходно</b>. Оневозможувањето од друга страна, не-дозволува освен ако не е дозволено.';

$txt['permissiongroup_general'] = 'Општи';
$txt['permissionname_view_stats'] = 'Гледање на статистиките на форумот';
$txt['permissionhelp_view_stats'] = 'Статистиката на форумот е страница на која се сумирани сите статистики на форумот, пр. број на членови, дневен број на пораки, и неколку топ 10 статистики. Со овозможувањето на оваа дозвола се додава линк на дното на првата страница на форумот (\'[Повеќе статистики]\').';
$txt['permissionname_view_mlist'] = 'Гледање на листата на членови';
$txt['permissionhelp_view_mlist'] = 'Листата на членови ги прикажува сите членови кои се регистрирале на вашиот форумот. Оваа листа може да биде сортирана и пребараувана. Листата на членови е линкувана од првата страница на форумот и од страницата со статистики, со кликнување на бројот на членови.';
$txt['permissionname_who_view'] = 'Гледај кој е присутен моментално';
$txt['permissionhelp_who_view'] = 'Дозволата за кој е присутен моментално ги прикажува сите членови кои се вклучени и што прават во моментот. Оваа дозвола ќе работи само доколкку сте ја овозможиле во \'Можности и опции\'. Можете да пристапите на \'Кој е присутен\' екранот со кликнување на линкот во \'Активни корисници\' секцијата на првата страница на форумот.';
$txt['permissionname_search_posts'] = 'Пребарувај за пораки и теми';
$txt['permissionhelp_search_posts'] = 'Дозволата за пребарување му овозможува на корисникот да ги пребарува сите форуми каде и му е дозволен пристапот, и \'Пребарување\' копчето ќе биде додадено во менито на форумот.';
$txt['permissionname_karma_edit'] = 'Промена на кармата на други корисници';
$txt['permissionhelp_karma_edit'] = 'Карма е опција која ја прикажува популарноста на членот. За да може да се користи оваа опција, треба истата да се овозможи во \'Можности и опции\'. Оваа дозвола ќе им дозволи на групите на членови да гласаат. Оваа дозвола нема ефект врз гостите.';

$txt['permissiongroup_pm'] = 'Приватни пораки';
$txt['permissionname_pm_read'] = 'Читање на приватните пораки';
$txt['permissionhelp_pm_read'] = 'Оваа дозвола им дозволува на членовите да пристапат на делот со Приватните пораки и да ги читаат своите приватни пораки. Без оваа дозвола корисникот не може да праќа приватни пораки.';
$txt['permissionname_pm_send'] = 'Испраќање на приватни пораки';
$txt['permissionhelp_pm_send'] = 'Испрати приватни пораки на другите регистрирани членови. Ја бара вклучена дозволата \'Читај ги приватните пораки\'.';

$txt['permissiongroup_calendar'] = 'Календар';
$txt['permissionname_calendar_view'] = 'Гледање на календарот';
$txt['permissionhelp_calendar_view'] = 'Календарот ги прикажува родендените, настаните и празниците за секој месец. Оваа дзвола овозможува пристап на овој календар. Кога оваа дозвола е овозможена, се додава копче на горното мени со копчиња и ќе биде покажана листа на дното на првата страница на форумот со моментални и идни родендени, настани и празници. Календарот треба да се овозоможи во \'Измени ги Опциите и можностите\'.';
$txt['permissionname_calendar_post'] = 'Создавање на настани во календарот';
$txt['permissionhelp_calendar_post'] = 'Настан е тема линкувана со одреден датум или период. Создавањето на настани може да се прави во календарот. Настан може да биде создаден само ако на корисникот му е дозволено да создава нови теми.';
$txt['permissionname_calendar_edit'] = 'Уредување на настаните во календарот';
$txt['permissionhelp_calendar_edit'] = 'Настан е тема линкувана со одреден датум или период. Настанот може да биде изменет си кликнување на црвената ѕвезда (*) поставена веднаш до настанот во самиот календар. За да може да го менува настанот корисникот мора да има доволно привилегии да ја менува првата порака во темата која е линкувана со настанот.';
$txt['permissionname_calendar_edit_own'] = 'сопствени настани';
$txt['permissionname_calendar_edit_any'] = 'било кои настани';

$txt['permissiongroup_maintenance'] = 'Администрирање на форумот';
$txt['permissionname_admin_forum'] = 'Администрирање на форумот и базата на податоци';
$txt['permissionhelp_admin_forum'] = 'Оваа дозвола му овозможува на корисникот да: <ul><li>ги менува сетирањата на форумот, базата и темите</li><li> управува со пакетите</li><li>да ги користи алатките за одржување на форумот и базата</li><li>ги гледа грешките и mod записите</li></ul>. Внимателно користи ја оваа дозвола бидејќи е многу моќна.';
$txt['permissionname_manage_boards'] = 'Уредување на форумот и категориите';
$txt['permissionhelp_manage_boards'] = 'Оваа дозвола овозможува создавање, менување и отстранување на форуми и категории.';
$txt['permissionname_manage_attachments'] = 'Управување со атачментите и аватарите';
$txt['permissionhelp_manage_attachments'] = 'Оваа дозвола овозможува пристап до центарот за атачменти, каде сите атачменти и аватари од форумот се излистани и можат да бидат отстранети.';
$txt['permissionname_manage_smileys'] = 'Управување со Смешковците';
$txt['permissionhelp_manage_smileys'] = 'Ова овозможува пристап до центарот за Смешковци. Таму можете да додавате, менувате или отстранувате Смешковци и нивните сетирања.';
$txt['permissionname_edit_news'] = 'Уредување на вестите';
$txt['permissionhelp_edit_news'] = 'Оваа дозвола овозможува случајно избрано линиско поле со вести да се појави на секој екранn. За да се користи оваа функција треба да ја овозможите во сетирањата на форумот.';

$txt['permissiongroup_member_admin'] = 'Администрирање на членовите';
$txt['permissionname_moderate_forum'] = 'Уредување на членовите на форумот';
$txt['permissionhelp_moderate_forum'] = 'Оваа дозвола ги вклучува сите важни модераторски функции за членовите:<ul><li>пристап на страницата за уредување на зачленувањето</li><li>пристап за гледање на листата на членови и бришење на истите</li><li>опширни информации за профилот, вклучувајќи идентификатор на IP/корисникот и (скриени) моменталниот статус</li><li>активирање на членство</li><li>добивање известувања за одобрување нови членови</li><li>immune to ignore PM</li><li>неколку мали работи</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Уредување и доделување групи';
$txt['permissionhelp_manage_membergroups'] = 'Оваа дозвола му овозможува на корисникот да ги менува групите на членови и да доделува групи на другите членови.';
$txt['permissionname_manage_permissions'] = 'Уредување на дозволите';
$txt['permissionhelp_manage_permissions'] = 'Оваа дозвола им овозможува на корисниците да ги менуваат сите дозволи на групите, глобално или за поединечните форуми.';
$txt['permissionname_manage_bans'] = 'Уредување на списокот на забрани';
$txt['permissionhelp_manage_bans'] = 'Оваа дозвола им овозможува на корисниците да додааваат или отстрануваат кориснички имиња, IP адреси, провајдери и E-mail адреси на листата на забранети корисници. Исто така дозволува да се гледаат и отстрануваат логовите на обидите за пријавување на забранетите корисници.';
$txt['permissionname_send_mail'] = 'Праќање email-и на членовите';
$txt['permissionhelp_send_mail'] = 'Масовни пораки за сите членови на форумот, или само за неколку групи на членови преку email или приватни пораки (ова бара дозвола за \'Испрати приватна порака\').';

$txt['permissiongroup_profile'] = 'Профил на членовите';
$txt['permissionname_profile_view'] = 'Гледање на профилот и статистиките';
$txt['permissionhelp_profile_view'] = 'Оваа дозвола им овозможува на кирисниците со кликнување на корисничко име да ги погледаат сетирањата на профилот, некои статистики и сите пораки на корисникот.';
$txt['permissionname_profile_view_own'] = 'својот профил';
$txt['permissionname_profile_view_any'] = 'било кој профил';
$txt['permissionname_profile_identity'] = 'Измена на подесувањата на налогот';
$txt['permissionhelp_profile_identity'] = 'Сетирањата на акаунтот се основни сетирања на профилот, на пр. лозинката, email адресата, групата каде членува и пожелниот јазик.';
$txt['permissionname_profile_identity_own'] = 'својот профил';
$txt['permissionname_profile_identity_any'] = 'било кој профил';
$txt['permissionname_profile_extra'] = 'Измена на дополнителните подесувања на профилот';
$txt['permissionhelp_profile_extra'] = 'Дополнителни сетирања на профилот вклучувајќи аватари, сетирања на темите, известувања и приватни пораки.';
$txt['permissionname_profile_extra_own'] = 'својот профил';
$txt['permissionname_profile_extra_any'] = 'било кој профил';
$txt['permissionname_profile_title'] = 'Измена на стандардниот назив';
$txt['permissionhelp_profile_title'] = 'Стандардниот назив е прикажан на страната каде се прикажуваат темите, испод профилот на секој корисник кој има стандарден назив.';
$txt['permissionname_profile_title_own'] = 'својот профил';
$txt['permissionname_profile_title_any'] = 'било кој профил';
$txt['permissionname_profile_remove'] = 'Бришење на налогот';
$txt['permissionhelp_profile_remove'] = 'Оваа дозвола му овозможува на корисникот да го избрише акаунтот, кога е подесено на \'Сопствен акаунт\'.';
$txt['permissionname_profile_remove_own'] = 'својот налог';
$txt['permissionname_profile_remove_any'] = 'било кој налог';
$txt['permissionname_profile_server_avatar'] = 'избери аватар од серверот';
$txt['permissionhelp_profile_server_avatar'] = 'Доколку е ова овозможено ќе им овозможи на корисниците да користат аватари веќе инсталирани на серверот.';
$txt['permissionname_profile_upload_avatar'] = 'Внеси аватар на сервер';
$txt['permissionhelp_profile_upload_avatar'] = 'Оваа дозвола ќе му дозволи на корисникот да го внесе личниот аватар на сервер.';
$txt['permissionname_profile_remote_avatar'] = 'Избирање надворешен аватар';
$txt['permissionhelp_profile_remote_avatar'] = 'Бидејќи аватарите можат негативно да влијаат на времето потребно за отварање на страницата, можно е да не се дозволи одредени групи да користат аватари од надворешни сервери. ';

$txt['permissiongroup_general_board'] = 'Општи';
$txt['permissionname_moderate_board'] = 'Уредување на форумот';
$txt['permissionhelp_moderate_board'] = 'Сетирањето за модератор додава неколку мали дозволи кои го прават модераторот вистински модератор. Дозволите вклучуваат одговарање на заклучени теми, менување на времето на истекување на гласањата и гледање на резултатите од истите.';

$txt['permissiongroup_topic'] = 'Теми';
$txt['permissionname_post_new'] = 'Поставување нови теми';
$txt['permissionhelp_post_new'] = 'Оваа дозвола им овозможува на корисниците да поставуаат нови теми. Не дозволува да се оставаат одговори на темите.';
$txt['permissionname_merge_any'] = 'Спојување на теми';
$txt['permissionhelp_merge_any'] = 'Спој две или повеќе теми во една. Редоследот на пораките во споената тема ќе биде врз основа на времето на испраќање на пораките. Корисник може само да спои теми на форумите каде има дозвола да го прави оа. Со цел да се спојуваат повеќе теми одеднаш, корисникот мора да има сетирано quickmoderation во неговиот профил.';
$txt['permissionname_split_any'] = 'Поделба на теми';
$txt['permissionhelp_split_any'] = 'Подели тема во две одделни теми.';
$txt['permissionname_send_topic'] = 'Испраќање теми на пријатели';
$txt['permissionhelp_send_topic'] = 'Оваа дозвола му овозможува на корисникот да испрати тема на пријател преку email, со внесување на својата email и сетирање за дозволено испраќање пораки.';
$txt['permissionname_make_sticky'] = 'Направи ги темите лепливи';
$txt['permissionhelp_make_sticky'] = 'Лепливи теми се оние кои секогаш остануваат на врвот на форумот. Тие можат да бидат корисни за најавувања или други важни пораки.';
$txt['permissionname_move'] = 'Преместување на теми';
$txt['permissionhelp_move'] = 'Преместување тема од еден форум во друг. Корисниците можат да означат целен форум ако имаат дозвола за пристап на истите.';
$txt['permissionname_move_own'] = 'своите теми';
$txt['permissionname_move_any'] = 'било кои теми';
$txt['permissionname_lock'] = 'Заклучување на теми';
$txt['permissionhelp_lock'] = 'Оваа дозвола му овозможува на корисник да ја заклучи темата. Ова може да се направи со цел никој да не може да праќа пораки на истата. Само корисниците со \'Moderate board\' дозволи ќе можат се уште да праќаат пораки на заклучените теми.';
$txt['permissionname_lock_own'] = 'своите теми';
$txt['permissionname_lock_any'] = 'било кои теми';
$txt['permissionname_remove'] = 'Бришење на пораки';
$txt['permissionhelp_remove'] = 'Отстрани ги пораките. Ова не му дозволува на корисникот да ја избрише првата порака во темата.';
$txt['permissionname_remove_own'] = 'своите пораки';
$txt['permissionname_remove_any'] = 'било кои пораки';
$txt['permissionname_post_reply'] = 'Испраќање одговор';
$txt['permissionhelp_post_reply'] = 'Оваа дозвола овозможува одговарање на темите.';
$txt['permissionname_post_reply_own'] = 'на своите теми';
$txt['permissionname_post_reply_any'] = 'на било кои теми';
$txt['permissionname_modify_replies'] = 'Промена на одговорите на своите теми';
$txt['permissionhelp_modify_replies'] = 'Оваа дозвола му овозможува на корисник кој започнал тема да ги менува сите одговори на таа тема.';
$txt['permissionname_delete_replies'] = 'Delete replies to own topics';
$txt['permissionhelp_delete_replies'] = 'This permission allows a user that started a topic to remove all replies to their topic.';
$txt['permissionname_announce_topic'] = 'Испраќање на тема';
$txt['permissionhelp_announce_topic'] = 'Оваа дозвола овозможува да се испрати известување преку email за тема на сите членови или на неколку групи на членови.';

$txt['permissiongroup_post'] = 'Пораки';
$txt['permissionname_delete'] = 'Отстранување теми';
$txt['permissionhelp_delete'] = 'Избриши ги темите како целина. Знај дека оваа дозвола не овозможува бришење на пораките внатре во темите!';
$txt['permissionname_delete_own'] = 'своите теми';
$txt['permissionname_delete_any'] = 'било кои теми';
$txt['permissionname_modify'] = 'Измена во пораките';
$txt['permissionhelp_modify'] = 'Измена во пораките';
$txt['permissionname_modify_own'] = 'своите пораки';
$txt['permissionname_modify_any'] = 'било кои пораки';
$txt['permissionname_report_any'] = 'Пријавување пораки на модераторите';
$txt['permissionhelp_report_any'] = 'Оваа дозвола додава линк на секоја порака, дозволувајќи му на корисникот да пријави порака на модераторот. По пријавувањето, сите модератори на тој форум ќе примат email со линк према пријавената порака и опис на проблемот од страна на корисникот кој ја испратил пријавата.';

$txt['permissiongroup_poll'] = 'Гласања';
$txt['permissionname_poll_view'] = 'Гледање на гласањата';
$txt['permissionhelp_poll_view'] = 'Оваа дозвола му овозможува на корисникот да го гледа гласањето. Без оваа дозвола корисникот може да ја види само темата.';
$txt['permissionname_poll_vote'] = 'Гласање во гласањата';
$txt['permissionhelp_poll_vote'] = 'Оваа довола му овозможува на членот да гласа со еден глас. Не важи за гостите.';
$txt['permissionname_poll_post'] = 'Поставување на гласаљето';
$txt['permissionhelp_poll_post'] = 'Оваа дозвола му овозможува на корисникот да постави ново гласање. Бидејќи гласањата се дел од темите, не може да се користи оваа дозвола без доволата за \'Испрати нова порака\' создавање нови теми.';
$txt['permissionname_poll_add'] = 'Додавање гласање на темите';
$txt['permissionhelp_poll_add'] = 'Додавањето гласања на темите му овозможува на корисникот да додаде гласање откако темата е создадена. Оваа дозвола бара доволно права за менување на првата порака во темата.';
$txt['permissionname_poll_add_own'] = 'сопствени теми';
$txt['permissionname_poll_add_any'] = 'било која тема';
$txt['permissionname_poll_edit'] = 'Уредување на гласањата';
$txt['permissionhelp_poll_edit'] = 'Оваа дозвола овозможува менување на сетирањата на гласањата. Со цел да се корегира максималниот број гласови и денот на завршување на гласањето, корисникот мора да има \'Модерирање на форумот\' дозволи.';
$txt['permissionname_poll_edit_own'] = 'сопствени гласања';
$txt['permissionname_poll_edit_any'] = 'било кои гласања';
$txt['permissionname_poll_lock'] = 'Заклучување на гласањето';
$txt['permissionhelp_poll_lock'] = 'Заклучувањето на гласањето не дозволува прифаќање понатамошнио гласови.';
$txt['permissionname_poll_lock_own'] = 'сопствени гласања';
$txt['permissionname_poll_lock_any'] = 'било кои гласања';
$txt['permissionname_poll_remove'] = 'Отстранување на гласањата';
$txt['permissionhelp_poll_remove'] = 'Оваа дозвола овозможува отстранување на гласањата.';
$txt['permissionname_poll_remove_own'] = 'сопствени гласања';
$txt['permissionname_poll_remove_any'] = 'било кои гласања';

$txt['permissiongroup_notification'] = 'Известувања';
$txt['permissionname_mark_any_notify'] = 'Барање известувања при оставање пораки (одговори)';
$txt['permissionhelp_mark_any_notify'] = 'Оваа можност им дозволува на корисниците да примаат известувања секогаш кога некој ќе одговори (остави порака) на темата на која се претплатени.';
$txt['permissionname_mark_notify'] = 'Барање известувања за нови теми';
$txt['permissionhelp_mark_notify'] = 'Известувањата за нови теми е можност која му дозволува на корисникот да прима email секогаш кога е поставена нова тема на категоријата на која е претплатен.';

$txt['permissiongroup_attachment'] = 'Поднесени атачменти';
$txt['permissionname_view_attachments'] = 'Гледање на поднесените атачменти';
$txt['permissionhelp_view_attachments'] = 'Атачментите се датотеки кои се закачени за оставените пораки. Оваа можност може да биде овозможена и сетирана во \'Измени ги Можностите и опциите\'. Бидејќи атачмемтите не се директно пристапни, можете да ги заштитите од симнување на корисниците кои ја немаат оваа дозвола.';
$txt['permissionname_post_attachment'] = 'Поднесување атачменти';
$txt['permissionhelp_post_attachment'] = 'Атачментите се датотеки кои се закачени за оставените пораки. Една порака може да содржи повеќе атачменти.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Подесувања на дозволите';
$txt['groups_manage_permissions'] = 'Групи на кои им е дозволено да управуваат со дозволите';
$txt['permission_settings_submit'] = 'Сочувај';
$txt['permission_settings_enable_deny'] = 'Овозможи ја опцијата да се одбијат дозволите';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Исклучувајќи ја оваа опција ќе ги надогради \\\'Одбиеј\\\'-дозволите во \\\'Не дозволувај\\\'.';
$txt['permission_by_membergroup_desc'] = 'Овде може да ги подесите сите општи дозволи за секоја група. Овие дозволи важат на сите форуми кои не се отфрлени со локалните дозволи подесени во \'Дозволи по форум\'- прозор.';
$txt['permission_by_board_desc'] = 'Овде можете да подесите дали форумот ги користи општите дозволи или има посебно сетирање за него.  Користењето на локални дозволи значи дека за тој форум, можете да ја подесите секоја дозвола за секоја група.';
$txt['permission_settings_desc'] = 'Овде може да подесите кој има дозвола да ги менува дозволите, како и колку софистициран системот на дозволи би требало да биде.';
$txt['permission_settings_enable_postgroups'] = 'Овозможи ја дозволата за созадавање групи засновани на бројот на пораки';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Оневозможувањето на ова подесување ќе доведе до отстрнување на моментално подесените дозволи за групите кои се темелат на бројот на пораки.';
$txt['permission_settings_enable_by_board'] = 'Овозможи напредни дозволи према форум';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Оневозможувањето на ова подесување ќе ги отстрани сите дозволи подесени на ниво на форум.';

?>