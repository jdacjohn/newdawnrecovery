<?php
// Version: 1.1; ManageMembers

$txt['membergroups_title'] = 'ניהול קבוצות המשתמשים';
$txt['membergroups_description'] = 'פה תוכלו לערוך את קבוצות המשתמשים של הפורום.';
$txt['membergroups_modify'] = 'שנה';

$txt['membergroups_add_group'] = 'הוסף קבוצה';
$txt['membergroups_regular'] = 'קבוצות רגילות';
$txt['membergroups_post'] = 'פרסם קבוצות';

$txt['membergroups_new_group'] = 'הוסף קבוצות';
$txt['membergroups_group_name'] = 'שם קבוצה';
$txt['membergroups_new_board'] = 'הראה פורמים';
$txt['membergroups_new_board_desc'] = 'הקבוצה יכולה לראות את הפורמים.';
$txt['membergroups_new_board_post_groups'] = '<em>Note: normally, post groups don\'t need access because the group the member is in will give them access.</em>';
$txt['membergroups_new_as_type'] = 'על ידי סוג';
$txt['membergroups_new_as_copy'] = 'או בסס משל';
$txt['membergroups_new_copy_none'] = '(אין)';
$txt['membergroups_can_edit_later'] = '(אתה יכול לערוך אותם אחר כך.)';

$txt['membergroups_edit_group'] = 'ערוך קבוצה';
$txt['membergroups_edit_name'] = 'שם הקבוצה';
$txt['membergroups_edit_post_group'] = 'הקבוצה הזאת מבוססת מהודעות.';
$txt['membergroups_min_posts'] = 'Req. posts';
$txt['membergroups_online_color'] = 'צבע הקבוצה ברשימת המחוברים';
$txt['membergroups_star_count'] = 'מיספר כוכבים';
$txt['membergroups_star_image'] = 'שם קובץ של כוכב';
$txt['membergroups_star_image_note'] = '(שם של הכוכב שאתה רוצה שהיה לקבוצה זאת.)';
$txt['membergroups_max_messages'] = 'מקסימום מסרים אישים';
$txt['membergroups_max_messages_note'] = '(0 = בלתי מוקבל)';
$txt['membergroups_edit_save'] = 'שמור';
$txt['membergroups_delete'] = 'מחק';
$txt['membergroups_confirm_delete'] = 'אתה בטוח רוצה למחוק תקבוצה הזאת?!';

$txt['membergroups_members_title'] = 'הצג את כל המשתמש מהקבוצה';
$txt['membergroups_members_no_members'] = 'הקבוצה הזה לפי שעה ריקה';
$txt['membergroups_members_add_title'] = 'הוסף משתמש לקבוצה';
$txt['membergroups_members_add_desc'] = 'רשימה של חברים להוסיף לקבוצה';
$txt['membergroups_members_add'] = 'הוסף חברים';
$txt['membergroups_members_remove'] = 'מחק קובץ';

$txt['membergroups_postgroups'] = 'Post groups';

$txt['membergroups_edit_groups'] = 'Edit Membergroups';
$txt['membergroups_settings'] = 'Membergroup Settings';
$txt['groups_manage_membergroups'] = 'Groups allowed to change membergroups';
$txt['membergroups_settings_submit'] = 'Save';
$txt['membergroups_select_permission_type'] = 'Select permission profile';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'Show boards';

$txt['admin_browse_approve'] = 'Members whose accounts are awaiting approval';
$txt['admin_browse_approve_desc'] = 'From here you can manage all members who are waiting to have their accounts approved.';
$txt['admin_browse_activate'] = 'Members whose accounts are awaiting activation';
$txt['admin_browse_activate_desc'] = 'This screen lists all the members who have still not activated their accounts at your forum.';
$txt['admin_browse_awaiting_approval'] = 'Awaiting Approval <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Awaiting Activation <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Username';
$txt['admin_browse_email'] = 'Email Address';
$txt['admin_browse_ip'] = 'IP Address';
$txt['admin_browse_registered'] = 'Registered';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'With Selected';
$txt['admin_browse_no_members_approval'] = 'No members currently awaite approval.';
$txt['admin_browse_no_members_activate'] = 'No members currently have not activated their accounts.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'all selected members?';
$txt['admin_browse_outstanding_warn'] = 'all affected members?';
$txt['admin_browse_w_approve'] = 'Approve';
$txt['admin_browse_w_activate'] = 'Activate';
$txt['admin_browse_w_delete'] = 'Delete';
$txt['admin_browse_w_reject'] = 'Reject';
$txt['admin_browse_w_remind'] = 'Remind';
$txt['admin_browse_w_approve_deletion'] = 'Approve (Delete Accounts)';
$txt['admin_browse_w_email'] = 'and send email';
$txt['admin_browse_w_approve_require_activate'] = 'Approve and Require Activation';

$txt['admin_browse_filter_by'] = 'Filter By';
$txt['admin_browse_filter_show'] = 'Displaying';
$txt['admin_browse_filter_type_0'] = 'Unactivated New Accounts';
$txt['admin_browse_filter_type_2'] = 'Unactivated Email Changes';
$txt['admin_browse_filter_type_3'] = 'Unapproved New Accounts';
$txt['admin_browse_filter_type_4'] = 'Unapproved Account Deletions';
$txt['admin_browse_filter_type_5'] = 'Unapproved "Under Age" Accounts';

$txt['admin_browse_outstanding'] = 'Outstanding Members';
$txt['admin_browse_outstanding_days_1'] = 'With all members who registered longer than';
$txt['admin_browse_outstanding_days_2'] = 'days ago';
$txt['admin_browse_outstanding_perform'] = 'Perform the following action';
$txt['admin_browse_outstanding_go'] = 'Perform Action';

// Use numeric entities in the below nine strings.
$txt['admin_approve_reject'] = 'Registration Rejected';
$txt['admin_approve_reject_desc'] = 'Regrettably, your application to join ' . $context['forum_name'] . ' has been rejected.';
$txt['admin_approve_delete'] = 'Account Deleted';
$txt['admin_approve_delete_desc'] = 'Your account on ' . $context['forum_name'] . ' has been deleted.  This may be because you never activated your account, in which case you should be able to register again.';
$txt['admin_approve_remind'] = 'Registration Reminder';
$txt['admin_approve_remind_desc'] = 'You still have not activated your account at';
$txt['admin_approve_remind_desc2'] = 'Please click the link below to activate your account:';
$txt['admin_approve_accept_desc'] = 'Your account has been activated manually by the admin and you can now login and post.';
$txt['admin_approve_require_activation'] = 'Your account on ' . $context['forum_name'] . ' has been approved by the forum administrator, and must now be activated before you can begin posting.';

?>