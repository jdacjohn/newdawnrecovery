<?php
// Version: 1.1.2; Login

$txt[37] = 'আপনার ব্যবহারকারীর নাম লিখতে হবে।';
$txt[38] = 'আপনার পাসওয়ার্ড লিখতে হবে।';
$txt[39] = 'ভুল শব্দচাবি';
$txt[98] = 'ব্যবহারকারীর নাম';
$txt[155] = 'রক্ষনাবেক্ষন চলছে';
$txt[245] = 'নিবন্ধন সফল হয়েছে';
$txt[431] = 'আপনি এখন এই ফোরামের একজন সদস্য।';
// Use numeric entities in the below string.
$txt[492] = 'এবং আপনার পাসওয়ার্ড হচ্ছে';
$txt[500] = 'একটি সঠিক ইমেইল লিখুন, %s';
$txt[517] = 'দরকারি তথ্য';
$txt[520] = 'শুধু এই ফোরামে ব্যবহার করা হবে।';
$txt[585] = 'আমি রাজি';
$txt[586] = 'আমি রাজি না';
$txt[633] = 'সমস্যা!';
$txt[634] = 'শুধুমাত্র নিবন্ধনকৃত সদস্যরাই এই স্থান দেখতে পারবে।';
$txt[635] = 'প্রবেশ করুন অথবা';
$txt[636] = 'নিবন্ধন করুন';
$txt[637] = 'সাথে ' . $context['forum_name'] . '।';
// Use numeric entities in the below two strings.
$txt[701] = 'আপনি এটা পরিবর্তন করতে চেয়ে থাকতে পারেন আপনার প্রোফাইলের পাতায় গিয়ে অথবা যেই পাতায় আপনি যাচ্ছেন প্রবেশ করার পরে।:';
$txt[719] = 'আপনার ব্যবহারকারীর নাম: ';
$txt[730] = 'এই ইমেইল (%s) অন্য এক সদস্য ব্যবহার করছে। আপনি যদি এটাকে ভুল বলে মনে করে, প্রবেশের পাতায় গিয়ে পাসওয়ার্ড মনে করবে ব্যবহার করুন সাথে ইমেইল।';

$txt['login_hash_error'] = 'পাসওয়ার্ডের ক্ষমতা পরিবর্তন করা হয়েছে। আপনি পাসওয়ার্ড লিখুন।';

$txt['register_age_confirmation'] = 'আমার বয়স %d বেশী।';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'স্বাগতম ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'আপনি নিবন্ধন করেছে ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'আপনার ব্যবহারকারীর নাম হচ্ছে %2$s এবং পাসওয়ার্ড হচ্ছে %3$s।' . "\n\n" . 'আপনি আপনার পাসওয়ার্ড পরিবর্তন করতে পারেন প্রবেশ করে প্রোফাইলে গিয়ে অথবা সামনের পাতায় গিয়ে:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'আপনি নিবন্ধন করেছে ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'আপনার ব্যবহারকারীর নাম হচ্ছে %2$s এবং পাসওয়ার্ড হচ্ছে %3$s।' . "\n\n" . 'প্রথমে আপনার একাউন্ট সক্রিয় করতে হবে। সেটা করার জন্য এই লিঙ্কে ক্লিক করুন:' . "\n\n" . '%5$s' . "\n\n" . 'Should you have any problems with activation, please use the code "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'আপনার নিবন্ধনের আবেদনপত্র ' . $context['forum_name'] . ' ফোরাম পেয়েছে। %1$s।' . "\n\n" . 'আপনি এই ব্যবহারকারীর নাম ব্যবহার করেছেন %2$s এবং এই পাসওয়ার্ড ব্যবহার করেছেন %3$s।' . "\n\n" . 'আপনার প্রবেশ করার আগে আপনার আবেদন দেখা হবে এবং সমর্থন করতে হবে। এটা হবার পরে, আপনি আরেকটি ইমেইল পাবেন এই ইমেইলের থেকে।' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'আপনি নিবন্ধন করেছেন ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'আপনার ব্যবহারকারীর নাম হচ্ছে "%2$s"।' . "\n\n" . 'প্রবেশ করার আগে আপনার এই একাউন্ট সক্রিয় করতে হবে। সেটা করার জন্য এই লিঙ্কে ক্লিক করুন:' . "\n\n" . '%4$s' . "\n\n" . 'আপনার যদি সমস্যা হয়ে থাকে, তাহলে এই কোড ব্যবহার করুন "%3$s"।' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'Your registration request at ' . $context['forum_name'] . ' has been received, %1$s.' . "\n\n" . 'The username you registered with was %2$s.' . "\n\n" . 'Before you can login and start using the forum, your request will be reviewed and approved.  When this happens, you will receive another email from this address.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Sorry, you are not allowed to register on this forum.';
$txt['under_age_registration_prohibited'] = 'Sorry, but users under the age of %d are not allowed to register on this forum.';

$txt['activate_account'] = 'একাউন্ট সক্রিয় করুন';
$txt['activate_success'] = 'আপনার একাউন্ট সক্রিয় হয়েছে। আপনি প্রবেশের পাতায় যেতে পারেন।';
$txt['activate_not_completed1'] = 'আপনার ইমেইল ভেরিফিকেশন করতে হবে লগ-ইন করার আগে।';
$txt['activate_not_completed2'] = 'আরেকটি ভেরিফিকেশন ইমেইল লাগবেl?';
$txt['activate_after_registration'] = 'নিবন্ধন করার জন্য ধন্যবাদ। আপনি একটি ইমেইল পাবেন একাউন্ট চালু করার জন্য। যদি কিছু সময়ের মধ্যে সেটি না পেয়ে থাকেন, তাহলে আপনার স্প্যাম ফোল্ডার দেখুন।';
$txt['invalid_userid'] = 'ব্যবহারকারী নেই';
$txt['invalid_activation_code'] = 'এক্টিভেশন কোডটি ঠিক নয়';
$txt['invalid_activation_username'] = 'ইমেইল বা ব্যবহারকারীর নাম';
$txt['invalid_activation_new'] = 'আপনি যদি ভুল ইমেইল দিয়ে নিবন্ধন করে থাকেন, নতুনটি এবং শব্দচাবিটি এখানে লিখুন।';
$txt['invalid_activation_new_email'] = 'নতুন ইমেইল';
$txt['invalid_activation_password'] = 'পুরোনো শব্দচাবি';
$txt['invalid_activation_resend'] = 'একাউন্ট সচলের কোড আবার পাঠান';
$txt['invalid_activation_known'] = 'যদি আপনই একাউন্ট সচল করার কোড জেনে থাকেন, তাহলে এখানে লিখুন।';
$txt['invalid_activation_retry'] = 'এক্টিভেশন কোড';
$txt['invalid_activation_submit'] = 'সচল করুন';

$txt['coppa_not_completed1'] = 'প্রশাসক এখনো অভিভাবকের কাছ থেকে কোনো তথ্য পায়নি।';
$txt['coppa_not_completed2'] = 'আরো জানতে চাই';

$txt['awaiting_delete_account'] = 'আপনার একাউন্টকে বাতিল করার জন্য বলা হয়েছে!<br />আপনি যদি একাউন্টটিকে পুনরায় চালু করতে ইচ্ছুক থাকেন, &quot;পুনরায় চালু করুন একাউন্ট&quot; বাক্স দেখুন এবং প্রবেশ করুন।';
$txt['undelete_account'] = 'একাউন্ট পুনরায় চালু করুন';

$txt['change_email_success'] = 'আপনার ইমেইল পরিবর্তন করা হয়েছে এবং একটি নতুন এক্টিভেশন ইমেইল পাঠানো হয়েছে।';
$txt['resend_email_success'] = 'একটি নতুন এক্টিভেশন ইমেইল পাঠানো সম্পূর্ণ হয়েছে।';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'নতুন শব্দচাবির তথ্য';
$txt['change_password_1'] = 'আপনার প্রবেশ করার তথ্য';
$txt['change_password_2'] = 'পরিবর্তন করা হয়েছে। নিচে এখনের প্রবেশ করার তথ্য।';

$txt['maintenance3'] = 'বোর্ডটিতে রক্ষণাবেক্ষণ চলছে।';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'নিয়মাবলী পড়ুন এবং রাজি হোন নিবন্ধনের আগে।';
$txt['register_passwords_differ_js'] = 'আপনার লেখা দুটি পাসওয়ার্ড একই নয়!';

$txt['approval_after_registration'] = 'নিবন্ধনের জন্য ধন্যবার। প্রশাসক আপনার একাউন্টকে সম্মতি দিতে হবে আপনার ব্যবহারের আগে এবং একটি ইমেইল পাবেন প্রশাসকের অনুমতি পাবার পরে।';

$txt['admin_settings_desc'] = 'Here you can change a variety of settings related to registration of new members.';

$txt['admin_setting_registration_method'] = 'Method of registration employed for new members';
$txt['admin_setting_registration_disabled'] = 'Registration Disabled';
$txt['admin_setting_registration_standard'] = 'Immediate Registration';
$txt['admin_setting_registration_activate'] = 'Member Activation';
$txt['admin_setting_registration_approval'] = 'Member Approval';
$txt['admin_setting_notify_new_registration'] = 'Notify administrators when a new member joins';
$txt['admin_setting_send_welcomeEmail'] = 'Send welcome email to new members';

$txt['admin_setting_password_strength'] = 'Required strength for user passwords';
$txt['admin_setting_password_strength_low'] = 'Low - 4 character minimum';
$txt['admin_setting_password_strength_medium'] = 'Medium - cannot contain username';
$txt['admin_setting_password_strength_high'] = 'High - mixture of different characters';

$txt['admin_setting_image_verification_type'] = 'Complexity of visual verification image';
$txt['admin_setting_image_verification_type_desc'] = 'The more complex the image the harder it is for bots to bypass';
$txt['admin_setting_image_verification_off'] = 'Disabled';
$txt['admin_setting_image_verification_vsimple'] = 'Very Simple - Plain text on image';
$txt['admin_setting_image_verification_simple'] = 'Simple - Overlapping colored letters, no noise';
$txt['admin_setting_image_verification_medium'] = 'Medium - Overlapping colored letters, with noise';
$txt['admin_setting_image_verification_high'] = 'High - Angled letters, considerable noise';
$txt['admin_setting_image_verification_sample'] = 'Sample';
$txt['admin_setting_image_verification_nogd'] = '<b>Note:</b> as this server does not have the GD library installed the different complexity settings will have no effect.';

$txt['admin_setting_coppaAge'] = 'Age below which to apply registration restrictions';
$txt['admin_setting_coppaAge_desc'] = '(Set to 0 to disable)';
$txt['admin_setting_coppaType'] = 'Action to take when a user below minimum age registers';
$txt['admin_setting_coppaType_reject'] = 'Reject their registration';
$txt['admin_setting_coppaType_approval'] = 'Require parent/guardian approval';
$txt['admin_setting_coppaPost'] = 'Postal address to which approval forms should be sent';
$txt['admin_setting_coppaPost_desc'] = 'Only applies if age restriction is in place';
$txt['admin_setting_coppaFax'] = 'Fax number to which approval forms should be faxed';
$txt['admin_setting_coppaPhone'] = 'Contact number for parents to contact with age restriction queries';
$txt['admin_setting_coppa_require_contact'] = 'You must enter either a postal or fax contact if parent/guardian approval is required.';

$txt['admin_register'] = 'Registration of new member';
$txt['admin_register_desc'] = 'From here you can register new members into the forum, and if desired, email them their details.';
$txt['admin_register_username'] = 'New Username';
$txt['admin_register_email'] = 'Email Address';
$txt['admin_register_password'] = 'Password';
$txt['admin_register_username_desc'] = 'Username for the new member';
$txt['admin_register_email_desc'] = 'Email address of the member';
$txt['admin_register_password_desc'] = 'Password for new member';
$txt['admin_register_email_detail'] = 'Email new password to user';
$txt['admin_register_email_detail_desc'] = 'Email address required even if unchecked';
$txt['admin_register_email_activate'] = 'Require user to activate the account';
$txt['admin_register_group'] = 'Primary Membergroup';
$txt['admin_register_group_desc'] = 'Primary membergroup new member will belong to';
$txt['admin_register_group_none'] = '(no primary membergroup)';
$txt['admin_register_done'] = 'Member %s has been registered successfully!';

$txt['admin_browse_register_new'] = 'Register new member';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'A new member has joined';
$txt['admin_notify_profile'] = '%s has just signed up as a new member of your forum. Click the link below to view their profile.';
$txt['admin_notify_approval'] = 'Before this member can begin posting they must first have their account approved. Click the link below to go to the approval screen.';

$txt['coppa_title'] = 'বয়স বাধা ফোরাম';
$txt['coppa_after_registration'] = 'নিবন্ধনের জন্য ধন্যবাদ ' . $context['forum_name'] । '<br /><br />কারণ আপনি নুন্যতম বৎসর, {MINIMUM_AGE} থেকে ছোট, আপনাকে একটি চিঠি নিতে হবে অভিভাবকের কাছ থেকে। একাউন্ট চালু করার জন্য, নিচের ফর্মটিকে প্রিন্ট করুন:';
$txt['coppa_form_link_popup'] = 'ফর্মটিকে নতুন উইন্ডোতে খুলুন';
$txt['coppa_form_link_download'] = 'ফর্মটিকে টেক্সট ফাইল হিসেবে ডাউনলোড করুন';
$txt['coppa_send_to_one_option'] = 'তারপর অনুমতি নিন অভিভাবকদের থেকে এবং পাঠিয়ে দিন:';
$txt['coppa_send_to_two_options'] = 'তারপর অনুমতি নিন অভিভাবকদের থেকে এবং পাঠিয়ে দিন দুটি মাধ্যমে:';
$txt['coppa_send_by_post'] = 'ডাকে, এই ঠিকানায়:';
$txt['coppa_send_by_fax'] = 'ফ্যাক্সে, এই নম্বরে:';
$txt['coppa_send_by_phone'] = 'অথবা আপনি প্রশাসককে এই ফোন নম্বরে {PHONE_NUMBER} জানাতে পারেন।';

$txt['coppa_form_title'] = 'নিবন্ধনের অনুমতির ফর্ম এই ফোরামে ' . $context['forum_name'];
$txt['coppa_form_address'] = 'ঠিকানা';
$txt['coppa_form_date'] = 'তারিখ';
$txt['coppa_form_body'] = 'আমি {PARENT_NAME},<br /><br />আমার সন্তান {CHILD_NAME} (সন্তানের নাম)-কে নিবন্ধন করার অনুমতি দিচ্ছি এই ফোরামে: ' . $context['forum_name'] . ', এবং ব্যবহারকারীর নাম হবে: {USER_NAME}।<br /><br />আমি জানি যে ব্যক্তিগত তথ্য {USER_NAME} অন্য সদস্যরা দেখতে পারে।<br /><br />সাক্ষর:<br />{PARENT_NAME} (অবিভাবক)।';

$txt['visual_verification_label'] = 'ছবির অক্ষর লিখুন';
$txt['visual_verification_description'] = 'ছবিটায় যা লেখা, তা লিখুন';
$txt['visual_verification_sound'] = 'অক্ষরগুলো শুনুন';
$txt['visual_verification_sound_again'] = 'আবার শুনুন';
$txt['visual_verification_sound_close'] = 'বন্ধ করুন';
$txt['visual_verification_request_new'] = 'আরেকটি ছবি চাই';
$txt['visual_verification_sound_direct'] = 'শুনতে সমস্যা হচ্ছে? সরাসরি লিঙ্ক চেষ্টা করুন। ';

?>