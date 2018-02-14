<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'עריכת דרגות';
$txt['permissions_modify'] = 'עריכה';
$txt['permissions_access'] = 'גישה';
$txt['permissions_allowed'] = 'רשאי';
$txt['permissions_denied'] = 'לא-רשאי';

$txt['permissions_switch'] = 'החלף אל';
$txt['permissions_global'] = 'גלובלי';
$txt['permissions_local'] = 'מקומי';

$txt['permissions_groups'] = 'הרשאות קבוצות משתמשים';
$txt['permissions_all'] = 'הכל';
$txt['permissions_none'] = 'ללא';
$txt['permissions_set_permissions'] = 'קבע הרשאות';

$txt['permissions_with_selection'] = 'עם בחירה';
$txt['permissions_apply_pre_defined'] = 'קביעת פרופיל הרשאות מוגדר מראש';
$txt['permissions_select_pre_defined'] = 'בחירת פרופיל הרשאות מוגדר מראש';
$txt['permissions_copy_from_board'] = 'העתקת הרשאות מפורום זה';
$txt['permissions_select_board'] = 'בחירת פורום';
$txt['permissions_like_group'] = 'קביעת הרשאות כמו הקבוצה הזאת';
$txt['permissions_select_membergroup'] = 'בחירת קבוצת משתמשים';
$txt['permissions_add'] = 'הוספת הרשאה';
$txt['permissions_remove'] = 'ניקוי הרשאה';
$txt['permissions_deny'] = 'ביטול הרשאה';
$txt['permissions_select_permission'] = 'בחירת הרשאה';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'באפשרותך לבחור רק פעולה אחת על מנת לשנות את ההרשאות';
$txt['permissions_no_action'] = 'אף פעולה נבחרה';
$txt['permissions_deny_dangerous'] = 'You are about to deny one or more permissions.\\nThis can be dangerous and cause unexpected results if you haven\'t made sure no one is \\"accidently\\" in the group or groups you are denying permissions to.\\n\\nAre you sure you want to continue?';

$txt['permissions_boards'] = 'הרשאות עפ"י פורומים';

$txt['permissions_modify_group'] = 'עריכת קבוצה';
$txt['permissions_general'] = 'הרשאות כלליות';
$txt['permissions_board'] = 'הרשאות פורום כלליות';
$txt['permissions_commit'] = 'שמור שינויים';
$txt['permissions_modify_local'] = 'ערוך מיקום הרשאות';
$txt['permissions_on'] = 'על הפורום';
$txt['permissions_local_for'] = 'מיקום הרשאות של קבוצות';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = 'הסבר קצר: \'להרשות\' (A), \'לאסור\' (X), \'לבטל\' (D).';

$txt['permissiongroup_general'] = 'כללי';
$txt['permissionname_view_stats'] = 'הצגת סטיסטיקות פורמים';
$txt['permissionhelp_view_stats'] = '';
$txt['permissionname_view_mlist'] = 'הצג רשימת חברים';
$txt['permissionhelp_view_mlist'] = '';
$txt['permissionname_who_view'] = 'הצג מי מחובר';
$txt['permissionhelp_who_view'] = '';
$txt['permissionname_search_posts'] = 'חיפוש הודעות ונושאים';
$txt['permissionhelp_search_posts'] = '';
$txt['permissionname_karma_edit'] = 'שנה לאחרים את הקארמה';
$txt['permissionhelp_karma_edit'] = '';

$txt['permissiongroup_pm'] = 'הודעות פרטיות';
$txt['permissionname_pm_read'] = 'קריאת הודעות פרטיות';
$txt['permissionhelp_pm_read'] = '';
$txt['permissionname_pm_send'] = 'שליחת הודעות פרטיות';
$txt['permissionhelp_pm_send'] = '';

$txt['permissiongroup_calendar'] = 'לוח שנה';
$txt['permissionname_calendar_view'] = 'הצג לוח שנה';
$txt['permissionhelp_calendar_view'] = '';
$txt['permissionname_calendar_post'] = 'שליחת אירוע בלוח השנה';
$txt['permissionhelp_calendar_post'] = '';
$txt['permissionname_calendar_edit'] = 'עריכת אירועים בלוח שנה';
$txt['permissionhelp_calendar_edit'] = '';
$txt['permissionname_calendar_edit_own'] = 'אירוע של עצמם';
$txt['permissionname_calendar_edit_any'] = 'אירוע של אחרים';

$txt['permissiongroup_maintenance'] = 'ניהול פורום';
$txt['permissionname_admin_forum'] = 'ניהול פורום ומסד נתונים';
$txt['permissionhelp_admin_forum'] = '';
$txt['permissionname_manage_boards'] = 'Manage boards and categories';
$txt['permissionhelp_manage_boards'] = 'This permission allows creation, editing and removal of boards and categories.';
$txt['permissionname_manage_attachments'] = 'Manage attachments and avatars';
$txt['permissionhelp_manage_attachments'] = 'This permission allows access to the attachment center, where all forum attachments and avatars are listed and can be removed.';
$txt['permissionname_manage_smileys'] = 'Manage smileys';
$txt['permissionhelp_manage_smileys'] = 'This allows access to the smiley center. In the smiley center you can add, edit and remove smileys and smiley sets.';
$txt['permissionname_edit_news'] = 'עריכת חדשות';
$txt['permissionhelp_edit_news'] = 'The news function allows a random news line to appear on each screen. In order to use the news function, enabled it in the forum settings.';

$txt['permissiongroup_member_admin'] = 'Member administration';
$txt['permissionname_moderate_forum'] = 'ניהול פורום בינוני';
$txt['permissionhelp_moderate_forum'] = 'This permission includes all important member moderation functions, like banning, registration management and member tracking and tracing.';
$txt['permissionname_manage_membergroups'] = 'Manage and assign membergroups';
$txt['permissionhelp_manage_membergroups'] = 'This permission allows a user to edit membergroups and assign membergroups to other members.';
$txt['permissionname_manage_permissions'] = 'Manage permissions';
$txt['permissionhelp_manage_permissions'] = 'This permission allows a user to edit all permissions of a membergroup, globally or for individual boards.';
$txt['permissionname_manage_bans'] = 'Manage ban list';
$txt['permissionhelp_manage_bans'] = 'This permission allows a user to add or remove usernames, IP addresses, hostnames and email addresses to a list of banned users. It also allows to view and remove log entries of banned users that attempted to login.';
$txt['permissionname_send_mail'] = 'שליחת הודעה לכל הקהילה';
$txt['permissionhelp_send_mail'] = 'Mass mail all forum members, or just a few membergroups by email or personal message (the latter requires \'Send Personal Message\' permission).';

$txt['permissiongroup_profile'] = 'פורפילי משתמשים';
$txt['permissionname_profile_view'] = 'הצג פרופילי משתמשים';
$txt['permissionhelp_profile_view'] = 'This permission allows users clicking on a username to see a summary of profile settings, some statistics and all posts of the user.';
$txt['permissionname_profile_view_own'] = 'פרופיל של עצמם';
$txt['permissionname_profile_view_any'] = 'פרופיל של אחרים';
$txt['permissionname_profile_identity'] = 'עריכת הגדרות חשבון';
$txt['permissionhelp_profile_identity'] = 'Account settings are the basic settings of a profile, like password, email address, membergroup and preferred language.';
$txt['permissionname_profile_identity_own'] = 'פרופיל של עצמם';
$txt['permissionname_profile_identity_any'] = 'פרופיל של אחרים';
$txt['permissionname_profile_extra'] = 'עריכת פרופיל';
$txt['permissionhelp_profile_extra'] = 'Additional profile settings include settings for avatars, theme preferences, notifications and Personal Messages.';
$txt['permissionname_profile_extra_own'] = 'Own profile';
$txt['permissionname_profile_extra_any'] = 'Any profile';
$txt['permissionname_profile_title'] = 'Edit custom title';
$txt['permissionhelp_profile_title'] = 'The custom title is shown on the topic display page, under the profile of each user that has a custom title.';
$txt['permissionname_profile_title_own'] = 'Own profile';
$txt['permissionname_profile_title_any'] = 'Any profile';
$txt['permissionname_profile_remove'] = 'Delete account';
$txt['permissionhelp_profile_remove'] = 'This permission allows a user to delete his account, when set to \'Own Account\'.';
$txt['permissionname_profile_remove_own'] = 'Own account';
$txt['permissionname_profile_remove_any'] = 'Any account';
$txt['permissionname_profile_server_avatar'] = 'Select an avatar from the server';
$txt['permissionhelp_profile_server_avatar'] = 'If enabled this will allow a user to select an avatar from the avatar collections installed on the server.';
$txt['permissionname_profile_upload_avatar'] = 'Upload an avatar to the server';
$txt['permissionhelp_profile_upload_avatar'] = 'This permission will allow a user to upload their personal avatar to the server.';
$txt['permissionname_profile_remote_avatar'] = 'Choose a remotely stored avatar';
$txt['permissionhelp_profile_remote_avatar'] = 'Because avatars might influence the page creation time negatively, it is possible to disallow certain membergroups to use avatars from external servers. ';

$txt['permissiongroup_general_board'] = 'General';
$txt['permissionname_moderate_board'] = 'Moderate board';
$txt['permissionhelp_moderate_board'] = 'The moderate board permission adds a few small permissions that make a moderator a real moderator. Permissions include replying to locked topics, changing the poll expire time and viewing poll results.';

$txt['permissiongroup_topic'] = 'נושאים';
$txt['permissionname_post_new'] = 'פירסום נושאים חדשים';
$txt['permissionhelp_post_new'] = 'This permission allows users to post new topics. It doesn\'t allow to post replies to topics.';
$txt['permissionname_merge_any'] = 'מיזוג נושאים של אחרים';
$txt['permissionhelp_merge_any'] = 'Merge two or more topic into one. The order of messages within the merged topic will be based on the time the messages were created. A user can only merge topics on those boards a user is allowed to merge. In order to merge multiple topics at once, a user has to enable quickmoderation in their profile settings.';
$txt['permissionname_split_any'] = 'פיצול נושאים של אחרים';
$txt['permissionhelp_split_any'] = 'Split a topic into two seperate topics.';
$txt['permissionname_send_topic'] = 'שליחת נושא לחבר';
$txt['permissionhelp_send_topic'] = 'This permission allows a user to mail a topic to a friend, by entering their email address and allows adding a message.';
$txt['permissionname_make_sticky'] = 'קביעת נושא כדביק';
$txt['permissionhelp_make_sticky'] = 'Sticky topics are topics that always remain on top of a board. They can be useful for announcements or other important messages.';
$txt['permissionname_move'] = 'העברת נושאים אחרים';
$txt['permissionhelp_move'] = 'Move a topic from one board to the other. Users can only select target boards they are allowed to access.';
$txt['permissionname_move_own'] = 'נושאים של עצמם';
$txt['permissionname_move_any'] = 'נושאים של אחרים';
$txt['permissionname_lock'] = 'נעילת נושאים';
$txt['permissionhelp_lock'] = 'This permission allows a user to lock a topic. This can be done in order to make sure noone can reply to a topic. Only uses with a \'Moderate board\' permission can still post in locked topics.';
$txt['permissionname_lock_own'] = 'נושאים של עצמם';
$txt['permissionname_lock_any'] = 'נושאים אחרים';
$txt['permissionname_remove'] = 'הסרת הודעות';
$txt['permissionhelp_remove'] = 'Remove posts. This does not allow a user to delete the first post of a topic.';
$txt['permissionname_remove_own'] = 'הודעות של עצמם';
$txt['permissionname_remove_any'] = 'הודעות של אחרים';
$txt['permissionname_post_reply'] = 'פרסום תגובות בנושאים';
$txt['permissionhelp_post_reply'] = 'This permission allows replying to topics.';
$txt['permissionname_post_reply_own'] = 'נושאים של עצמם';
$txt['permissionname_post_reply_any'] = 'נושאים של אחרים';
$txt['permissionname_modify_replies'] = 'עריכת תגובות בנושא של עצמם';
$txt['permissionhelp_modify_replies'] = 'This permission allows a user that started a topic to modify all replies to their topic.';
$txt['permissionname_delete_replies'] = 'Delete replies to own topics';
$txt['permissionhelp_delete_replies'] = 'This permission allows a user that started a topic to remove all replies to their topic.';
$txt['permissionname_announce_topic'] = 'Announce topic';
$txt['permissionhelp_announce_topic'] = 'This allows to send an announcement e-mail about a topic to all members or to a few membergroups.';

$txt['permissiongroup_post'] = 'הודעות';
$txt['permissionname_delete'] = 'הסר נושאים';
$txt['permissionhelp_delete'] = 'Delete topics as a whole. Note that this permission doesn\'t allow to delete specific messages within the topic!';
$txt['permissionname_delete_own'] = 'נושאים של עצמם';
$txt['permissionname_delete_any'] = 'נושאים של אחרים';
$txt['permissionname_modify'] = 'עריכת הודעות';
$txt['permissionhelp_modify'] = 'Edit posts';
$txt['permissionname_modify_own'] = 'הודעות של עצמם';
$txt['permissionname_modify_any'] = 'הודעות של אחרים';
$txt['permissionname_report_any'] = 'דווח';
$txt['permissionhelp_report_any'] = 'This permission adds a link to each message, allowing a user to report a post to a moderator. On reporting, all moderators on that board will receive an email with a link to the reported post and a description of the problem (as given by the reporting user).';

$txt['permissiongroup_poll'] = 'סקר';
$txt['permissionname_poll_view'] = 'הצגת סקרים';
$txt['permissionhelp_poll_view'] = 'This permission allows a user to view a poll. Without this permission, the user will only see the topic.';
$txt['permissionname_poll_vote'] = 'להצביע בסקרים';
$txt['permissionhelp_poll_vote'] = 'This permission allows a (registered) user to cast one vote. It doesn\'t apply to guests.';
$txt['permissionname_poll_post'] = 'פרסום סקרים';
$txt['permissionhelp_poll_post'] = 'This permission allows a user to post a new poll. As polls are special cases of topics, you cannot use this permission without the \'Post new topic\' permission.';
$txt['permissionname_poll_add'] = 'הוספת סקר לנושאים';
$txt['permissionhelp_poll_add'] = 'Add poll to topics allows a user to add a poll after the topic has been created. This permission requires sufficent rights to edit the first post of a topic.';
$txt['permissionname_poll_add_own'] = 'נושאים של עצמם';
$txt['permissionname_poll_add_any'] = 'נושאים של אחרים';
$txt['permissionname_poll_edit'] = 'עריכת סקרים';
$txt['permissionhelp_poll_edit'] = 'This permission allows to edit the options of a poll and to reset the poll. In order to edit the maximum number of votes and the expiration time, a user needs to have the \'Moderate board\' permission.';
$txt['permissionname_poll_edit_own'] = 'סקרים של עצמם';
$txt['permissionname_poll_edit_any'] = 'סקרים של אחרים';
$txt['permissionname_poll_lock'] = 'נעילת סקרים';
$txt['permissionhelp_poll_lock'] = 'Locking polls prevents the poll from accepting any more votes.';
$txt['permissionname_poll_lock_own'] = 'סקרים של עצמם';
$txt['permissionname_poll_lock_any'] = 'סקרים של אחרים';
$txt['permissionname_poll_remove'] = 'הסרת סקרים';
$txt['permissionhelp_poll_remove'] = 'This permission allows removal of polls.';
$txt['permissionname_poll_remove_own'] = 'סקרים של עצמם';
$txt['permissionname_poll_remove_any'] = 'סקרים של אחרים';

$txt['permissiongroup_notification'] = 'הודעות';
$txt['permissionname_mark_any_notify'] = 'בקשת הודעה על תגובות בנושאים';
$txt['permissionhelp_mark_any_notify'] = 'This feature allows users to receive a notification whenever someone replies to a topic they subscribed to.';
$txt['permissionname_mark_notify'] = 'בקשת הודעה על נושאים חדשים';
$txt['permissionhelp_mark_notify'] = 'Notification on new topics is a feature that allows a user to receive an email every time a new topic is created on the board they subscribe to.';

$txt['permissiongroup_attachment'] = 'קובץ מצורף';
$txt['permissionname_view_attachments'] = 'הצגת קבצים מצורפים';
$txt['permissionhelp_view_attachments'] = 'Attachments are files that are attached to posted messages. This feature can be enabled and configured in \'Edit Features and Options\'. Since attachments are not directly accessed, you can protect them from being downloaded by users that don\'t have this permission.';
$txt['permissionname_post_attachment'] = 'פרסום קבצים מצורפים';
$txt['permissionhelp_post_attachment'] = 'Attachments are files that are attached to posted messages. One message can contain multiple attachments.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Permission Settings';
$txt['groups_manage_permissions'] = 'Membergroups allowed to manage permissions';
$txt['permission_settings_submit'] = 'Save';
$txt['permission_settings_enable_deny'] = 'Enable the option to deny permissions';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Turning off this option will update \\\'Deny\\\'-permissions to \\\'Disallow\\\'.';
$txt['permission_by_membergroup_desc'] = 'Here you can set all global permissions for each membergroup. These permissions are valid on all boards that have not been overridden by local permissions set in the \'Permissions by board\'-screen.';
$txt['permission_by_board_desc'] = 'Here you can set whether a board uses the global permissions or has a specific permission regime. Using local permissions means that for that board, you can set every permission for every membergroup.';
$txt['permission_settings_desc'] = 'Here you can set who has permission to change permissions, as well as how sophisticated the permission system should be.';
$txt['permission_settings_enable_postgroups'] = 'Enable permissions for post count based groups';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Disabling this setting will remove permissions currently set to post count based groups.';
$txt['permission_settings_enable_by_board'] = 'Enable advanced by-board permissions';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Disabling this setting will remove all permissions set on board level.';

?>