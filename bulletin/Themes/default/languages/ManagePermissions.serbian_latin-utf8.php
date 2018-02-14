<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Upravljanje dozvolama';
$txt['permissions_modify'] = 'Izmeni';
$txt['permissions_access'] = 'Pristup';
$txt['permissions_allowed'] = 'dozvoljene';
$txt['permissions_denied'] = 'onemogućene';

$txt['permissions_switch'] = 'Prebaci na';
$txt['permissions_global'] = 'Globalne';
$txt['permissions_local'] = 'Lokalne';

$txt['permissions_groups'] = 'Dozvole po grupi članova';
$txt['permissions_all'] = 'sve';
$txt['permissions_none'] = 'nijedna';
$txt['permissions_set_permissions'] = 'Postavi dozvole';

$txt['permissions_with_selection'] = 'Nad odabranim';
$txt['permissions_apply_pre_defined'] = 'Primeni predefinisani profil dozvola';
$txt['permissions_select_pre_defined'] = 'Izaberite predefinisani profil';
$txt['permissions_copy_from_board'] = 'Kopiraj dozvole od ovog foruma';
$txt['permissions_select_board'] = 'Izaberite forum';
$txt['permissions_like_group'] = 'Postavi dozvole kao ova grupa';
$txt['permissions_select_membergroup'] = 'Izaberite grupu članova';
$txt['permissions_add'] = 'Dodaj dozvolu';
$txt['permissions_remove'] = 'Ukloni dozvolu';
$txt['permissions_deny'] = 'Onemogući dozvolu';
$txt['permissions_select_permission'] = 'Izaberite dozvolu';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Možete da izaberete samo jednu akciju da biste promenili dozvole';
$txt['permissions_no_action'] = 'Akcija nije izabrana';
$txt['permissions_deny_dangerous'] = 'Upravo ćete da onemogućite jednu ili više dozvola.\\nOvo može da bude opasno i izazove neočekivane rezultate ako niste sigurni da niko \\"slučajno\\" nije u grupi ili grupama kojima onemogućavate dozvole.\\n\\nDa li ste sigurni da želite da nastavite?';

$txt['permissions_boards'] = 'Dozvole po forumu';

$txt['permissions_modify_group'] = 'Izmeni grupu';
$txt['permissions_general'] = 'Opšte dozvole';
$txt['permissions_board'] = 'Globalne dozvole foruma';
$txt['permissions_commit'] = 'Sačuvaj promene';
$txt['permissions_modify_local'] = 'Promeni lokalne dozvole';
$txt['permissions_on'] = 'na forumu';
$txt['permissions_local_for'] = 'Lokalne dozvole za grupu';
$txt['permissions_option_on'] = 'D';
$txt['permissions_option_off'] = 'N';
$txt['permissions_option_deny'] = 'O';
$txt['permissions_option_desc'] = 'Za svaku dozvolu možete da izaberete ili \'Dozvoljena\' (D), \'Nedozvoljena\' (N), ili <span style="color: red;">\'Onemogućena\' (O)</span>.<br /><br />Remember that if you deny a permission, any member - whether moderator or otherwise - that is in that group will be denied that as well.<br />For this reason, you should use deny carefully, only when <b>necessary</b>. Disallow, on the other hand, denies unless otherwise granted.';

$txt['permissiongroup_general'] = 'Opšte';
$txt['permissionname_view_stats'] = 'Gledanje statistike foruma';
$txt['permissionhelp_view_stats'] = 'Statistika foruma je stranica koja prikazuje svu statistiku foruma kao što je broj članova, broj poruka po danu i nekoliko drugih top 10 stavki. Omogućivanje ove dozvole dodaće link pri dnu početne strane foruma (\'[više statistike]\').';
$txt['permissionname_view_mlist'] = 'Gledanje spiska članova';
$txt['permissionhelp_view_mlist'] = 'Spisak članova prikazuje sve članove koji su se registrovali na vaš forum. Ovaj spisak može da se sortira i pretražuje. Spisak članova je linkovan na početnoj strani foruma kao i na statistici foruma, klikom na broj članova.';
$txt['permissionname_who_view'] = 'Gledanje spiska "Ko je prisutan"';
$txt['permissionhelp_who_view'] = 'Ko je prisutan prikazuje sve članove koji su trenutno na mreži i šta trenutno rade. Ova dozvola će raditi jedino ako ste je omogućili u \'Mogućnostima i opcijama\'. Ovoj stranici možete da pristupite klikom na link u odeljku \'Prisutni korisnici\' na početnoj strani foruma.';
$txt['permissionname_search_posts'] = 'Pretraživanje poruka i korisnika';
$txt['permissionhelp_search_posts'] = 'The Search permission allows the user to search all boards he or she is allowed to access. When the search permission is enabled, a \'Search\' button will be added to the forum button bar.';
$txt['permissionname_karma_edit'] = 'Promena ugleda drugih ljudi';
$txt['permissionhelp_karma_edit'] = 'Karma is a feature that shows the popularity of a member. In order to use this feature, you need to have it enabled in \'Features and Options\'. This permission will allow a membergroup to cast a vote. This permission has no effect on guests.';

$txt['permissiongroup_pm'] = 'Privatne poruke';
$txt['permissionname_pm_read'] = 'Čitanje privatnih poruka';
$txt['permissionhelp_pm_read'] = 'This permission allows users to access the Personal Messages section and read their Personal Messages. Without this permission a user is unable to send Personal Messages.';
$txt['permissionname_pm_send'] = 'Slanje privatnih poruka';
$txt['permissionhelp_pm_send'] = 'Send personal messages to other registered members. Requires the \'Read personal messages\' permission.';

$txt['permissiongroup_calendar'] = 'Kalendar';
$txt['permissionname_calendar_view'] = 'Gledanje kalendara';
$txt['permissionhelp_calendar_view'] = 'The calendar shows for each month the birthdays, events and holidays. This permission allows access to this calendar. When this permission is enabled, a button will be added to the top button bar and a list will be shown at the bottom of the board index with current and upcoming birthdays, events and holidays. The calendar needs be enabled from \'Edit Features and Options\'.';
$txt['permissionname_calendar_post'] = 'Kreiranje događaja u kalendaru';
$txt['permissionhelp_calendar_post'] = 'An Event is a topic linked to a certain date or date range. Creating events can be done from the calendar. An event can only be created if the user that creates the event is allowed to post new topics.';
$txt['permissionname_calendar_edit'] = 'Uređivanje događaja u kalendaru';
$txt['permissionhelp_calendar_edit'] = 'An Event is a topic linked to a certain date or date range. Event can be edited by clicking the red asterisk (*) next to the event in the calendar view. In order to be able to edit an event, a user must have sufficient permissions to edit the first message of the topic that is linked to the event.';
$txt['permissionname_calendar_edit_own'] = 'sopstveni događaji';
$txt['permissionname_calendar_edit_any'] = 'bilo koji događaji';

$txt['permissiongroup_maintenance'] = 'Administracija foruma';
$txt['permissionname_admin_forum'] = 'Administriranje foruma i baze podataka';
$txt['permissionhelp_admin_forum'] = 'This permission allows a user to:<ul><li>change forum, database and theme settings</li><li>manage packages</li><li>use the forum and database maintenance tools</li><li>view the error and mod logs</li></ul> Use this permission with caution, as it is very powerful.';
$txt['permissionname_manage_boards'] = 'Uređivanje foruma i kategorija';
$txt['permissionhelp_manage_boards'] = 'This permission allows creation, editing and removal of boards and categories.';
$txt['permissionname_manage_attachments'] = 'Upravljanje priloženim datotekama i avatarima';
$txt['permissionhelp_manage_attachments'] = 'This permission allows access to the attachment center, where all forum attachments and avatars are listed and can be removed.';
$txt['permissionname_manage_smileys'] = 'Upravljanje smajlijima';
$txt['permissionhelp_manage_smileys'] = 'This allows access to the smiley center. In the smiley center you can add, edit and remove smileys and smiley sets.';
$txt['permissionname_edit_news'] = 'Uređivanje vesti';
$txt['permissionhelp_edit_news'] = 'The news function allows a random news line to appear on each screen. In order to use the news function, enabled it in the forum settings.';

$txt['permissiongroup_member_admin'] = 'Administracija članova';
$txt['permissionname_moderate_forum'] = 'Uređivanje članova foruma';
$txt['permissionhelp_moderate_forum'] = 'This permission includes all important member moderation functions:<ul><li>access to registration management</li><li>access to the view/delete members screen</li><li>extensive profile info, including track IP/user and (hidden) online status</li><li>activate accounts</li><li>get approval notifications and approve accounts</li><li>immune to ignore PM</li><li>several small things</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Upravljanje i dodeljivanje grupa članova';
$txt['permissionhelp_manage_membergroups'] = 'This permission allows a user to edit membergroups and assign membergroups to other members.';
$txt['permissionname_manage_permissions'] = 'Upravljanje dozvolama';
$txt['permissionhelp_manage_permissions'] = 'This permission allows a user to edit all permissions of a membergroup, globally or for individual boards.';
$txt['permissionname_manage_bans'] = 'Upravljanje spiskom zabrana';
$txt['permissionhelp_manage_bans'] = 'This permission allows a user to add or remove usernames, IP addresses, hostnames and email addresses to a list of banned users. It also allows to view and remove log entries of banned users that attempted to login.';
$txt['permissionname_send_mail'] = 'Slanje e-mail-a članovima';
$txt['permissionhelp_send_mail'] = 'Mass mail all forum members, or just a few membergroups by email or personal message (the latter requires \'Send Personal Message\' permission).';

$txt['permissiongroup_profile'] = 'Profili članova';
$txt['permissionname_profile_view'] = 'Gledanje profila i statistike';
$txt['permissionhelp_profile_view'] = 'This permission allows users clicking on a username to see a summary of profile settings, some statistics and all posts of the user.';
$txt['permissionname_profile_view_own'] = 'svog profila';
$txt['permissionname_profile_view_any'] = 'bilo kog profila';
$txt['permissionname_profile_identity'] = 'Izmena podešavanja naloga';
$txt['permissionhelp_profile_identity'] = 'Account settings are the basic settings of a profile, like password, email address, membergroup and preferred language.';
$txt['permissionname_profile_identity_own'] = 'svog profila';
$txt['permissionname_profile_identity_any'] = 'bilo kog profila';
$txt['permissionname_profile_extra'] = 'Izmena dodatnih podešavanja profila';
$txt['permissionhelp_profile_extra'] = 'Additional profile settings include settings for avatars, theme preferences, notifications and Personal Messages.';
$txt['permissionname_profile_extra_own'] = 'svog profila';
$txt['permissionname_profile_extra_any'] = 'bilo kog profila';
$txt['permissionname_profile_title'] = 'Izmena prilagođenog naziva';
$txt['permissionhelp_profile_title'] = 'The custom title is shown on the topic display page, under the profile of each user that has a custom title.';
$txt['permissionname_profile_title_own'] = 'svog profila';
$txt['permissionname_profile_title_any'] = 'bilo kog profila';
$txt['permissionname_profile_remove'] = 'Brisanje naloga';
$txt['permissionhelp_profile_remove'] = 'This permission allows a user to delete his account, when set to \'Own Account\'.';
$txt['permissionname_profile_remove_own'] = 'svog naloga';
$txt['permissionname_profile_remove_any'] = 'bilo kog naloga';
$txt['permissionname_profile_server_avatar'] = 'Odabir avatara sa servera';
$txt['permissionhelp_profile_server_avatar'] = 'If enabled this will allow a user to select an avatar from the avatar collections installed on the server.';
$txt['permissionname_profile_upload_avatar'] = 'Dostava avatara na server';
$txt['permissionhelp_profile_upload_avatar'] = 'This permission will allow a user to upload their personal avatar to the server.';
$txt['permissionname_profile_remote_avatar'] = 'Odabir udaljenog avatara';
$txt['permissionhelp_profile_remote_avatar'] = 'Because avatars might influence the page creation time negatively, it is possible to disallow certain membergroups to use avatars from external servers. ';

$txt['permissiongroup_general_board'] = 'Opšte';
$txt['permissionname_moderate_board'] = 'Uređivanje foruma';
$txt['permissionhelp_moderate_board'] = 'The moderate board permission adds a few small permissions that make a moderator a real moderator. Permissions include replying to locked topics, changing the poll expire time and viewing poll results.';

$txt['permissiongroup_topic'] = 'Teme';
$txt['permissionname_post_new'] = 'Postavljanje nove teme';
$txt['permissionhelp_post_new'] = 'This permission allows users to post new topics. It doesn\'t allow to post replies to topics.';
$txt['permissionname_merge_any'] = 'Spajanje tema';
$txt['permissionhelp_merge_any'] = 'Merge two or more topic into one. The order of messages within the merged topic will be based on the time the messages were created. A user can only merge topics on those boards a user is allowed to merge. In order to merge multiple topics at once, a user has to enable quickmoderation in their profile settings.';
$txt['permissionname_split_any'] = 'Deoba tema';
$txt['permissionhelp_split_any'] = 'Split a topic into two separate topics.';
$txt['permissionname_send_topic'] = 'Slanje teme prijateljima';
$txt['permissionhelp_send_topic'] = 'This permission allows a user to mail a topic to a friend, by entering their email address and allows adding a message.';
$txt['permissionname_make_sticky'] = 'Zalepljivanje tema';
$txt['permissionhelp_make_sticky'] = 'Sticky topics are topics that always remain on top of a board. They can be useful for announcements or other important messages.';
$txt['permissionname_move'] = 'Premeštanje tema';
$txt['permissionhelp_move'] = 'Move a topic from one board to the other. Users can only select target boards they are allowed to access.';
$txt['permissionname_move_own'] = 'svojih tema';
$txt['permissionname_move_any'] = 'bilo kojih tema';
$txt['permissionname_lock'] = 'Zaključavanje tema';
$txt['permissionhelp_lock'] = 'This permission allows a user to lock a topic. This can be done in order to make sure no one can reply to a topic. Only uses with a \'Moderate board\' permission can still post in locked topics.';
$txt['permissionname_lock_own'] = 'svojih tema';
$txt['permissionname_lock_any'] = 'bilo kojih tema';
$txt['permissionname_remove'] = 'Brisanje poruka';
$txt['permissionhelp_remove'] = 'Remove posts. This does not allow a user to delete the first post of a topic.';
$txt['permissionname_remove_own'] = 'svojih poruka';
$txt['permissionname_remove_any'] = 'bilo kojih poruka';
$txt['permissionname_post_reply'] = 'Slanje odgovora';
$txt['permissionhelp_post_reply'] = 'This permission allows replying to topics.';
$txt['permissionname_post_reply_own'] = 'na svoje teme';
$txt['permissionname_post_reply_any'] = 'na bilo koje teme';
$txt['permissionname_modify_replies'] = 'Izmena odgovora na svoje teme';
$txt['permissionhelp_modify_replies'] = 'This permission allows a user that started a topic to modify all replies to their topic.';
$txt['permissionname_delete_replies'] = 'Brisanje odgovora na svoje teme';
$txt['permissionhelp_delete_replies'] = 'This permission allows a user that started a topic to remove all replies to their topic.';
$txt['permissionname_announce_topic'] = 'Slanje teme';
$txt['permissionhelp_announce_topic'] = 'This allows to send an announcement e-mail about a topic to all members or to a few membergroups.';

$txt['permissiongroup_post'] = 'Poruke';
$txt['permissionname_delete'] = 'Uklanjanje tema';
$txt['permissionhelp_delete'] = 'Delete topics as a whole. Note that this permission doesn\'t allow to delete specific messages within the topic!';
$txt['permissionname_delete_own'] = 'svojih tema';
$txt['permissionname_delete_any'] = 'bilo kojih tema';
$txt['permissionname_modify'] = 'Izmena poruka';
$txt['permissionhelp_modify'] = 'Izmena poruka';
$txt['permissionname_modify_own'] = 'svojih poruka';
$txt['permissionname_modify_any'] = 'bilo kojih poruka';
$txt['permissionname_report_any'] = 'Prijavljivanje poruka urednicima';
$txt['permissionhelp_report_any'] = 'This permission adds a link to each message, allowing a user to report a post to a moderator. On reporting, all moderators on that board will receive an email with a link to the reported post and a description of the problem (as given by the reporting user).';

$txt['permissiongroup_poll'] = 'Glasanja';
$txt['permissionname_poll_view'] = 'Gledanje glasanja';
$txt['permissionhelp_poll_view'] = 'This permission allows a user to view a poll. Without this permission, the user will only see the topic.';
$txt['permissionname_poll_vote'] = 'Glasanje u glasanjima';
$txt['permissionhelp_poll_vote'] = 'This permission allows a (registered) user to cast one vote. It doesn\'t apply to guests.';
$txt['permissionname_poll_post'] = 'Postavljanje glasanja';
$txt['permissionhelp_poll_post'] = 'This permission allows a user to post a new poll. As polls are special cases of topics, you cannot use this permission without the \'Post new topic\' permission.';
$txt['permissionname_poll_add'] = 'Dodavanje glasanja temama';
$txt['permissionhelp_poll_add'] = 'Add poll to topics allows a user to add a poll after the topic has been created. This permission requires sufficient rights to edit the first post of a topic.';
$txt['permissionname_poll_add_own'] = 'svojim temama';
$txt['permissionname_poll_add_any'] = 'bilo kojim temama';
$txt['permissionname_poll_edit'] = 'Uređivanje glasanja';
$txt['permissionhelp_poll_edit'] = 'This permission allows to edit the options of a poll and to reset the poll. In order to edit the maximum number of votes and the expiration time, a user needs to have the \'Moderate board\' permission.';
$txt['permissionname_poll_edit_own'] = 'svojih glasanja';
$txt['permissionname_poll_edit_any'] = 'bilo kojih glasanja';
$txt['permissionname_poll_lock'] = 'Zaključavanje glasanja';
$txt['permissionhelp_poll_lock'] = 'Locking polls prevents the poll from accepting any more votes.';
$txt['permissionname_poll_lock_own'] = 'svojih glasanja';
$txt['permissionname_poll_lock_any'] = 'bilo kojih glasanja';
$txt['permissionname_poll_remove'] = 'Uklanjanje glasanja';
$txt['permissionhelp_poll_remove'] = 'This permission allows removal of polls.';
$txt['permissionname_poll_remove_own'] = 'svojih glasanja';
$txt['permissionname_poll_remove_any'] = 'bilo kojih glasanja';

$txt['permissiongroup_notification'] = 'Obaveštenja';
$txt['permissionname_mark_any_notify'] = 'Zahtevanje obaveštavanja pri odgovorima';
$txt['permissionhelp_mark_any_notify'] = 'This feature allows users to receive a notification whenever someone replies to a topic they subscribed to.';
$txt['permissionname_mark_notify'] = 'Zahtevanje obaveštavanja o novim temama';
$txt['permissionhelp_mark_notify'] = 'Notification on new topics is a feature that allows a user to receive an email every time a new topic is created on the board they subscribe to.';

$txt['permissiongroup_attachment'] = 'Priložene datoteke';
$txt['permissionname_view_attachments'] = 'Gledanje priloženih datoteka';
$txt['permissionhelp_view_attachments'] = 'Attachments are files that are attached to posted messages. This feature can be enabled and configured in \'Edit Features and Options\'. Since attachments are not directly accessed, you can protect them from being downloaded by users that don\'t have this permission.';
$txt['permissionname_post_attachment'] = 'Prilaganje datoteka';
$txt['permissionhelp_post_attachment'] = 'Attachments are files that are attached to posted messages. One message can contain multiple attachments.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Podešavanja dozvola';
$txt['groups_manage_permissions'] = 'Korisničke grupe kojima je dozvoljeno da upravljaju dozvolama';
$txt['permission_settings_submit'] = 'Sačuvaj';
$txt['permission_settings_enable_deny'] = 'Omogući opciju za onemogućivanje dozvola';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Isključivanje ove opcije će prouzrokovati ažuriranje \\\'onemogućenih\\\' dozvola na \\\'nedozvoljene\\\'.';
$txt['permission_by_membergroup_desc'] = 'Ovde možete da postavite globalne dozvole za svaku grupu korisnika. Ove dozvole biće u opticaju na forumima u kojima one nisu pregažene lokalnim postavkama postavljenim na stranici \'Dozvole po forumu\'.';
$txt['permission_by_board_desc'] = 'Ovde možete da postavite da li forum koristi globalne dozvole ili ima posebne dozvole. Korišćenje lokalnih dozvola vam omogućava da za određeni forum postavite posebne dozvole za svaku korisničku grupu.';
$txt['permission_settings_desc'] = 'Ovde možete da promenite ko ima dozvolu da menja dozvole kao i koliko bi sistem dozvola trebalo da bude sofisticiran.';
$txt['permission_settings_enable_postgroups'] = 'Omogući dozvole za grupe zasnovane na broju poruka';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Onemogućivanje ovog podešavanja će ukloniti trenutno podešene dozvole za grupe zasnovane na broju poruka.';
$txt['permission_settings_enable_by_board'] = 'Omogući napredne dozvole po forumu';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Onemogućivanje ove opcije prouzrokovaće uklanjanje svih dozvola postavljnih na nivou foruma.';

?>