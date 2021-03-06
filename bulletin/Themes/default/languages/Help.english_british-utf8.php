<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Close window';

$helptxt['manage_boards'] = '
	<b>Edit Boards</b><br />
	You can create/reorder/remove boards, and the categories
	above them, using this menu. For example, if you had a wide-ranging
	site that offered information on &quot;Sports&quot;, &quot;Cars&quot; and &quot;Music&quot;, these
	would be the top-level Categories you would create. Under each of these
	categories you might want to create hierarchical &quot;sub-categories&quot;,
	or &quot;Boards&quot;, for topics within each. It is a simple hierarchy with this structure: <br />
	<ul>
		<li>
			<b>Sports</b>
			&nbsp;- A &quot;category&quot;
		</li>
		<ul>
			<li>
				<b>Baseball</b>
				&nbsp;- A board under the category of &quot;Sports&quot;
			</li>
			<ul>
				<li>
					<b>Stats</b>
					&nbsp;- A child board under the board of &quot;Baseball&quot;
				</li>
			</ul>
			<li><b>Football</b>
			&nbsp;- A board under the category of &quot;Sports&quot;</li>
		</ul>
	</ul>
	Categories allow you to break down the board into broad topics (&quot;Cars,
	Sports&quot;) and the &quot;Boards&quot; under them are the actual topics under which
	members can post. A user interested in Pintos
	would post a message under &quot;Cars->Pinto&quot;. Categories allow people to
	quickly find their interests. Instead of a &quot;Store&quot;, you can go to 
	&quot;Hardware&quot; and &quot;Clothing&quot; stores. This simplifies your
	search for &quot;pipe joint compound&quot; because you can go to the Hardware
	Store &quot;category&quot; instead of the Clothing Store (where you are unlikely
	to find pipe joint compound).<br />
	As noted above, a Board is a key topic underneath a broad category.
	If you want to discuss &quot;Pintos&quot;, you would go to the &quot;Auto&quot; category and
	jump into the &quot;Pinto&quot; board to post your thoughts in that board.<br />
	Administrative functions for this menu item are to create new boards
	under each category, to reorder them (put &quot;Pinto&quot; behind &quot;Chevy&quot;) or
	to delete the board entirely.';

$helptxt['edit_news'] = '<b>Edit Forum News</b><br />
	You can set the text for news items displayed on the Board Index page from here.
	Add any item you want (e.g., &quot;Do not miss the conference this Tuesday&quot;). Each news item should
	go in a separate box and they are displayed randomly.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>View all Members</b><br />
			View all members in the board. You are presented with a hyperlinked list of member names. You may click
			on any of the names to find details of the members (homepage, age, etc.) and as Administrator
			you are able to modify these parameters. You have complete control over members including the
			ability to delete their accounts from the forum.<br /><br />
		</li>
		<li>
			<b>Awaiting Approval</b><br />
			This section is only shown if you have admin approval of all new registrations enabled on the forum. Anyone who registers to join your
			forum will only become a full member once they have been approved by an admin. The section lists all those members who
			are still awaiting approval along with their email and IP addresses. You can choose to either accept or reject (delete)
			any member on the list by checking the box next to the member and choosing the action from the drop-down box at the bottom
			of the screen. When rejecting a member, you can choose to delete the member either with or without notifying them of your decision.<br /><br />
		</li>
		<li>
			<b>Awaiting Activation</b><br />
			This section will only be visible if you have activation of member accounts enabled on the forum. This section lists all
			members who have still not activated their new accounts. You can choose to either accept, reject or remind
			members with outstanding registrations. As above, you can also choose to email the member to inform them of the
			action you have taken.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Ban Members</b><br />
	SMF provides the ability to &quot;ban&quot; users to prevent people who have violated the trust of the board
	by spamming, trolling, etc. from using this forum. This allows you to ban those users who are detrimental to your forum.<br />
	When you view messages as an admin, you can see each user\'s IP address used to post at that time. In the ban list,
	you simply type in that IP address and save it and they can no longer post from that location. You can also
	ban people through their email address.';

$helptxt['modsettings'] = '<b>Edit Features and Options</b><br />
	There are several features in this section that can be changed to your preference.  Options for installed mods will generally also appear in here.';

$helptxt['number_format'] = '<b>Number Format</b><br />
	You can use this setting to format the way in which numbers on your forum will be displayed to the user. The format of this setting is:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Where \',\' is the character used to split up groups of thousands, \'.\' is the character used as the decimal point and the number of zeros dictate the accuracy of roundings.';

$helptxt['time_format'] = '<b>Time Format</b><br />
	You have the power to adjust how the time and date look for yourself. There are a lot of little letters but it is quite simple.
	The conventions follow PHP\'s strftime function and are described below (more details can be found at <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	The following characters are recognised in the format string: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - abbreviated weekday name<br />
	&nbsp;&nbsp;%A - full weekday name<br />
	&nbsp;&nbsp;%b - abbreviated month name<br />
	&nbsp;&nbsp;%B - full month name<br />
	&nbsp;&nbsp;%d - day of the month (01 to 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - same as %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - day of the month (1 to 31) <br />
	&nbsp;&nbsp;%H - hour using a 24-hour clock (range 00 to 23) <br />
	&nbsp;&nbsp;%I - hour using a 12-hour clock (range 01 to 12) <br />
	&nbsp;&nbsp;%m - month as a number (01 to 12) <br />
	&nbsp;&nbsp;%M - minute as a number <br />
	&nbsp;&nbsp;%p - either &quot;am&quot; or &quot;pm&quot; according to the given time<br />
	&nbsp;&nbsp;%R<b>*</b> - time in 24 hour notation <br />
	&nbsp;&nbsp;%S - second as a decimal number <br />
	&nbsp;&nbsp;%T<b>*</b> - current time, equal to %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2 digit year (00 to 99) <br />
	&nbsp;&nbsp;%Y - 4 digit year<br />
	&nbsp;&nbsp;%Z - time zone or name or abbreviation <br />
	&nbsp;&nbsp;%% - a literal \'%\' character <br />
	<br />
	<i>* Does not work on Windows-based servers.</i></span>';

$helptxt['live_news'] = '<b>Live announcements</b><br />
	This box shows recently updated announcements from <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	You should check here every now and then for updates, new releases and important information from Simple Machines.';

$helptxt['registrations'] = '<b>Registration Management</b><br />
	This section contains all the functions that could be necessary to manage new registrations on the forum. It contains up to four
	sections which are visible depending on your forum settings. These are:<br /><br />
	<ul>
		<li>
			<b>Register new member</b><br />
			You can choose to register accounts for new members, on their behalf, from this screen. This can be useful in forums where registration is closed
			to new members or in cases where the admin wishes to create a test account. If the option to require activation of the account
			is selected, the member will be emailed an activation link which must be clicked before they can use the account. Similarly, you can
			select to email the user\'s new password to the stated email address.<br /><br />
		</li>
		<li>
			<b>Edit Registration Agreement</b><br />
			You can set the text for the registration agreement displayed when members sign up for your forum.
			You can add or remove anything from the default registration agreement which is included in SMF.<br /><br />
		</li>
		<li>
			<b>Set Reserved Names</b><br />
			You can specify words or names which may not be used by your users.<br /><br />
		</li>
		<li>
			<b>Settings</b><br />
			This section will only be visible if you have permission to administrate the forum. You can select the registration method
			in use on your forum here as well as other registration related settings.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Moderation Log</b><br />
	This section allows members of the admin team to track all the moderation actions that the forum moderators have taken. Entries may not be deleted until 24 hours after the action was taken to ensure that moderators cannot remove references to the actions they have taken.
	The \'objects\' column lists any variables associated with the action.';
$helptxt['error_log'] = '<b>Error Log</b><br />
	The error log tracks and logs every serious error encountered by users using your forum. It lists all of these errors by date which can be sorted
	by clicking the arrow next to each date. Additionally, you can filter the errors by clicking the picture next to each error statistic. This
	allows you to filter, for example, by member. When a filter is active, the only results that will be displayed will be those that match the filter.';
$helptxt['theme_settings'] = '<b>Theme Settings</b><br />
	The settings screen allows you to change settings specific to a theme. These settings not only include options such as the themes directory and URL information but
	also options that affect the layout of a theme on your forum. Most themes will have a variety of user configurable options allowing you to adapt a theme
	to suit your individual forum needs.';
$helptxt['smileys'] = '<b>Smiley Centre</b><br />
	You can add and remove smileys and smiley sets here.  Note, importantly, that if a smiley is in one set, it is in all sets otherwise it might
	get confusing for your users using different sets.<br /><br />

	You can also edit message icons from here if you have them enabled on the settings page.';
$helptxt['calendar'] = '<b>Manage Calendar</b><br />
	You can modify the current calendar settings from here as well as add and remove holidays that appear on the calendar.';

$helptxt['serversettings'] = '<b>Server Settings</b><br />
	You can carry out the core configuration of your forum from here. This section includes the database and URL settings as well as other
	important configuration items such as mail settings and caching. Think carefully whenever editing these settings as an error may
	render the forum inaccessible.';

$helptxt['topicSummaryPosts'] = 'This allows you to set the number of previous posts shown in the topic summary at the reply screen.';
$helptxt['enableAllMessages'] = 'Set this to the <em>maximum</em> number of posts a topic can have to show the \'All\' link.  Setting this lower than &quot;Number of posts per page in a topic page&quot; will simply mean it never gets shown and setting it too high could slow down your forum.';
$helptxt['enableStickyTopics'] = 'Stickies are topics that remain at the top of the topic list and are mostly used for important
		messages.  By default, only moderators and administrators can make topics sticky although you can change this with permissions.';
$helptxt['allow_guestAccess'] = 'Unchecking this box will stop guests from doing anything but very basic actions - login, register, password reminder, etc. - on your forum.  This is not the same as disallowing guest access to boards.';
$helptxt['userLanguage'] = 'Turning this option on will allow users to select which language file they use. It will not affect the
		default selection.';
$helptxt['trackStats'] = 'Stats:<br />This will allow users to see the latest posts and the most popular topics on your forum.
		It will also show several statistics, like the most members online, new members and new topics.<hr />
		Page views:<br />Adds another column to the stats page with the number of pageviews on your forum.';
$helptxt['titlesEnable'] = 'Switching Custom Titles on will allow members with the relevant permission to create a special title for themselves which will be shown underneath their name.<br /><i>For example:</i><br />Jeff<br />Cool Guy';
$helptxt['topbottomEnable'] = 'This will add &quot;Go up&quot; and &quot;Go down&quot; buttons so that members can go to the top and bottom of a page
		without scrolling.';
$helptxt['onlineEnable'] = 'This will show an image indicating whether the member is online or offline';
$helptxt['todayMod'] = 'This will show &quot;Today&quot; or &quot;Yesterday&quot; instead of the date.';
$helptxt['enablePreviousNext'] = 'This will show a link to the next and previous topic.';
$helptxt['pollMode'] = 'This selects whether or not polls are enabled. If polls are disabled, any existing polls will be hidden
		from the topic listing. You can choose to continue to show the regular topic without their polls by selecting
		&quot;Show Existing Polls as Topics&quot;.<br /><br />To choose who can post polls, view polls or similar, you
		can allow and disallow those permissions. Remember this if polls are not working.';
$helptxt['enableVBStyleLogin'] = 'This will show a more compact login on every page of the forum for guests.';
$helptxt['enableCompressedOutput'] = 'This option allows output to be compressed to lower bandwidth consumption but requires
		zlib to be installed.';
$helptxt['databaseSession_enable'] = 'This option makes use of the database for session storage. It is best for load balanced servers but helps with all timeout issues and can make the forum faster.';
$helptxt['databaseSession_loose'] = 'Turning this on will decrease the bandwidth your forum uses and make it so that clicking back will not reload the page. The downside is that the (new) icons will not update, among other things, unless you click to that page instead of going back to it.';
$helptxt['databaseSession_lifetime'] = 'This is the number of seconds for sessions to continue after last access.  If a session is not accessed for some time, it is said to have &quot;timed out&quot;.  Anything higher than 2400 is recommended.';
$helptxt['enableErrorLogging'] = 'This will log any errors, like a failed login, so you can see what went wrong.';
$helptxt['allow_disableAnnounce'] = 'This will allow users to opt out of notification of topics you announce by checking the &quot;announce topic&quot; checkbox when posting.';
$helptxt['disallow_sendBody'] = 'This removes the option to receive the text of replies and posts in notification emails.<br /><br />Members will often reply to the notification email which in most cases means the webmaster receives the reply.';
$helptxt['compactTopicPagesEnable'] = 'This will just show a selection of the number of pages.<br /><i>Example:</i>
		&quot;3&quot; to display: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; to display: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'This will show, at the bottom of the board, the time in seconds SMF took to create that page.';
$helptxt['removeNestedQuotes'] = 'This will only show the quote of the post in question not any quoted posts from that post.';
$helptxt['simpleSearch'] = 'This will show a simple search form and a link to a more advanced form.';
$helptxt['max_image_width'] = 'This allows you to set a maximum size for posted pictures. Pictures smaller than the maximum will not be affected.';
$helptxt['mail_type'] = 'This will allow you to choose either PHP\'s default settings or to override those settings with SMTP.  PHP does not support using authentication with SMTP (which many hosts require now), so if you want that you should select SMTP.  Note that SMTP can be slower and some servers will not take usernames and passwords.<br /><br />You do not need to complete the SMTP settings if this is set to PHP\'s default.';
$helptxt['attachmentEnable'] = 'Attachments are files that members can upload and attach to a post.<br /><br />
		<b>Check attachment extension</b>:<br /> Do you want to check the extension of the files?<br />
		<b>Allowed attachment extensions</b>:<br /> You can set the allowed extensions of attached files.<br />
		<b>Attachments directory</b>:<br /> The path to your attachment folder<br />(example: /home/sites/yoursite/www/forum/attachments)<br />
		<b>Max attachment folder space</b> (in KB):<br /> Select how large the attachment folder can be, including all files within it.<br />
		<b>Max attachment size per post</b> (in KB):<br /> Select the maximum file size of all attachments made per post. This will be the limit if set lower than the per-attachment limit.<br />
		<b>Max size per attachment</b> (in KB):<br /> Select the maximum file size of each separate attachment.<br />
		<b>Max number of attachments per post</b>:<br /> Select the number of attachments a person can make per post.<br />
		<b>Display attachment as picture in posts</b>:<br /> If the uploaded file is a picture, this will show it underneath the post.<br />
		<b>Resize images when showing under posts</b>:<br /> If this option is selected, a separate (smaller) attachment for the thumbnail will be saved to decrease bandwidth.<br />
		<b>Maximum width and height of thumbnails</b>:<br /> Only used with the &quot;Resize images when showing under posts&quot; option, the max width and height from which to resize attachments.  They will be resized proportionately.';
$helptxt['karmaMode'] = 'Karma is a feature that shows the popularity of a member. Members, if allowed, can
		\'applaud\' or \'smite\' other members which is how their popularity is calculated. You can change the
		number of posts needed to have a &quot;karma&quot;, the time between smites or applauds and if administrators
		have to wait this time as well.<br /><br />Whether or not groups of members can smite others is controlled by
		a permission.  If you have trouble getting this feature to work for everyone, double check your permissions.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'The calendar can be used for showing birthdays or for showing important moments happening in your community.<br /><br />
		<b>Show days as link to \'Post Event\'</b>:<br />This will allow members to post events for that day when they click on that date<br />
		<b>Show week numbers</b>:<br />Show which week it is.<br />
		<b>Max days in advance on board index</b>:<br />If this is set to 7, all events for the next week will be shown.<br />
		<b>Show holidays on board index</b>:<br />Show today\'s holidays in a calendar bar on the board index.<br />
		<b>Show birthdays on board index</b>:<br />Show today\'s birthdays in a calendar bar on the board index.<br />
		<b>Show events on board index</b>:<br />Show today\'s events in a calendar bar on the board index.<br />
		<b>Default Board to Post In</b>:<br />What is the default board for posting events?<br />
		<b>Allow events not linked to posts</b>:<br />Allow members to post events without requiring it to be linked with a post in a board.<br />
		<b>Minimum year</b>:<br />Select the &quot;first&quot; year on the calendar list.<br />
		<b>Maximum year</b>:<br />Select the &quot;last&quot; year on the calendar list<br />
		<b>Birthday colour</b>:<br />Select the colour of the birthday text<br />
		<b>Event colur</b>:<br />Select the colour of the event text<br />
		<b>Holiday colour</b>:<br />Select the colour of the holiday text<br />
		<b>Allow events to span multiple days</b>:<br />Check to allow events to span multiple days.<br />
		<b>Max number of days an event can span</b>:<br />Select the maximum days that an event can span.<br /><br />
		Remember that usage of the calendar (posting events, viewing events, etc.) is controlled by permissions set on the permissions screen.';
$helptxt['localCookies'] = 'SMF uses cookies to store login information on the client computer.
	Cookies can be stored globally (myserver.com) or locally (myserver.com/path/to/forum).<br />
	Check this option if you are experiencing problems with users getting logged out automatically.<hr />
	Globally stored cookies are less secure when used on a shared webserver (like Tripod).<hr />
	Local cookies do not work outside the forum folder so, if your forum is stored at www.myserver.com/forum, pages like www.myserver.com/index.php cannot access the account information.
	Global cookies are recommended, especially when using SSI.php.';
$helptxt['enableBBC'] = 'Selecting this option will allow your members to use Bulletin Board Code (BBC) throughout the forum allowing users to format their posts with images, type formatting and more.';
$helptxt['time_offset'] = 'Not all forum administrators want their forum to use the same time zone as the server upon which it is hosted. Use this option to specify a time difference (in hours) which the forum should operate from the server time. Negative and decimal values are permitted.';
$helptxt['spamWaitTime'] = 'You can set the time that must pass between postings. This can be used to stop people from "spamming" your forum by limiting how often they can post.';

$helptxt['enablePostHTML'] = 'This will allow the posting of some basic HTML tags:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'You can select here whether the default theme can be chosen as well as what theme guests will use
	and other options. Click on a theme to change the settings for it.';
$helptxt['theme_install'] = 'This allows you to install new themes.  You can do this from an already created directory by uploading an archive for the theme or by copying the default theme.<br /><br />Note that the archive or directory must have a <tt>theme_info.xml</tt> definition file.';
$helptxt['enableEmbeddedFlash'] = 'This option will allow your users to use Flash directly inside their posts,
	just like images.  This could pose a security risk although few have successfully exploited it.
	USE AT YOUR OWN RISK!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Allows people to link to <a href="' . $scripturl . '?action=.xml;sa=news">Recent news</a>
	and similar data.  It is also recommended that you limit the size of recent posts/news because, when RSS data
	is displayed in some clients (like Trillian), it is expected to be truncated.';
$helptxt['hotTopicPosts'] = 'Change the number of posts for a topic to reach the state of a &quot;hot&quot; or
	&quot;very hot&quot; topic.';
$helptxt['globalCookies'] = 'Makes login cookies available across subdomains.  For example:<br />
	If your site is at http://www.simplemachines.org/<br />
	and your forum is at http://forum.simplemachines.org/,<br />
	using this option will allow you to access the forum\'s cookie on your site.  Do not enable this if there are other subdomains (like hacker.simplemachines.org) not controlled by you.';
$helptxt['securityDisable'] = 'This <i>disables</i> the additional password check for the administration section. This is not recommended!';
$helptxt['securityDisable_why'] = 'This is your current password (the same one you use to login).<br /><br />Having to type this helps ensure that you want to do whatever administration you are doing and that it is <b>you</b> doing it.';
$helptxt['emailmembers'] = 'You can use a few &quot;variables&quot; in this message.  These are:<br />
	{$board_url} - The URL to your forum.<br />
	{$current_time} - The current time.<br />
	{$member.email} - The current member\'s email address.<br />
	{$member.link} - The current member\'s link.<br />
	{$member.id} - The current member\'s id.<br />
	{$member.name} - The current member\'s name (for personalisation).<br />
	{$latest_member.link} - The most recently registered member\'s link.<br />
	{$latest_member.id} - The most recently registered member\'s id.<br />
	{$latest_member.name} - The most recently registered member\'s name.';
$helptxt['attachmentEncryptFilenames'] = 'Encrypting attachment filenames allows you to have more than one attachment of the
	same name, to safely use .php files for attachments and heightens security.  It could, however, make it more
	difficult to rebuild your database if something drastic happened.';

$helptxt['failed_login_threshold'] = 'Set the number of failed login attempts before directing the user to the password reminder screen.';
$helptxt['oldTopicDays'] = 'If this option is enabled, a warning will be displayed to the user when attempting to reply to a topic which has not had any new replies for the number of days specified by this setting (0 to disable).';
$helptxt['edit_wait_time'] = 'Number of seconds allowed for a post to be edited before logging the last edit date.';
$helptxt['edit_disable_time'] = 'Number of minutes allowed to pass before a user can no longer edit a post they have made (0 to disable). <br /><br /><i>Note: This will not affect any user who has permission to edit other people\'s posts.</i>';
$helptxt['enableSpellChecking'] = 'Enable spell checking. You MUST have the pspell library installed on your server and your PHP configuration set up to use the pspell library. Your server ' . (function_exists('pspell_new') ? 'DOES' : 'DOES NOT') . ' appear to have this set up.';
$helptxt['lastActive'] = 'Set the number of minutes to show people active in last X number of minutes on the board index. Default is 15 minutes.';

$helptxt['autoOptDatabase'] = 'This sets the number of days between database optimisations.  Set it to 1 to make a daily optimisation.  You can also specify a maximum number of online users so that you will not overload your server or inconvenience too many users.';
$helptxt['autoFixDatabase'] = 'This allows broken tables to be fixed automatically and resumes as if nothing happened.  It can be useful because otherwise the only way to fix a broken table is to REPAIR the table. This way your forum will not be down until you notice.  You will receive an email when this happens.';

$helptxt['enableParticipation'] = 'This shows a little icon on the topics in which the user has posted.';

$helptxt['db_persist'] = 'Keeps the connection active to increase performance.  This may cause you problems with your host if you are not on a dedicated server.';

$helptxt['queryless_urls'] = 'This changes the format of URLs a little so search engines will like them better.  They will look like index.php/topic,1.html.<br /><br />This feature will ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'not') . ' work on your server.';
$helptxt['countChildPosts'] = 'Checking this option will mean that posts and topics in a board\'s child board will count toward its totals on the index page.<br /><br />This will make things notably slower but means that a parent with no posts in it will not show \'0\'.';
$helptxt['fixLongWords'] = 'This option breaks words longer than the specified length into pieces so they do not upset the forum\'s layout too much.  This option should not be set to a value under 40.';

$helptxt['who_enabled'] = 'This option allows you to turn on or off the ability for users to see who is browsing the forum and what they are doing.';

$helptxt['recycle_enable'] = '&quot;Recycles&quot; deleted topics and posts to the specified board.';

$helptxt['enableReportPM'] = 'This option allows your users to report personal messages they receive to the administration team. This may be useful in helping to track down any abuse of the personal messaging system.';
$helptxt['max_pm_recipients'] = 'This option allows you to set the maximum number of recipients allowed in a personal message sent by a forum member (0 for no limit). This may be used to help stop spam abuse of the PM system. Note that users with permission to send newsletters are exempt from this restriction.';
$helptxt['pm_posts_verification'] = 'This setting will force users to enter a code shown on a verification image each time they send a personal message. Only users with a post count below the number set will need to enter the code. This should help combat automated spamming scripts.';
$helptxt['pm_posts_per_hour'] = 'This will limit the number of personal messages which may be sent by a user in a one hour period. This does not affect admins or moderators.';

$helptxt['default_personalText'] = 'Sets the default text a user will have as their &quot;personal text.&quot;';

$helptxt['modlog_enabled'] = 'Logs all moderation actions.';

$helptxt['guest_hideContacts'] = 'If selected, this option will hide the email addresses and messenger contact details
	of all members from any guests on your forum.';

$helptxt['registration_method'] = 'This option determines what method of registration is used for people wishing to join your forum. You can select from:<br /><br />
	<ul>
		<li>
			<b>Immediate Registration</b><br />
				New members can login and post immediately after registering with your forum.<br />
		</li><li>
			<b>Member Activation</b><br />
				All new members registering with your forum will have an activation link emailed to them which they must click before they can become full members.<br />
		</li><li>
			<b>Member Approval</b><br />
				All new members registering with your forum will need to be approved by the admin before they become members.
		</li><li>
			<b>Registration Disabled</b><br />
				Disables the registration process which means that no new members can register to join your forum.<br />
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'When this option is checked, all members who change their email address in their profile will have to reactivate their account from an email sent to that address.';
$helptxt['send_welcomeEmail'] = 'When this option is enabled, all new members will be sent an email welcoming them to your community.';
$helptxt['password_strength'] = 'This setting determines the strength required for passwords selected by your forum users. The stronger the password, the harder it should be to compromise members\' accounts.
	Its possible options are:
	<ul>
		<li><b>Low:</b> The password must be at least four characters long.</li>
		<li><b>Medium:</b> The password must be at least eight characters long and cannot be part of a users name or email address.</li>
		<li><b>High:</b> As for medium, plus the password must contain a mixture of upper and lower case letters and at least one number.</li>
	</ul>';

$helptxt['coppaAge'] = 'The value specified in this box will determine the minimum age that new members must be to be granted immediate access to the forums.
	On registration they will be prompted to confirm whether they are over this age and if not, will either have their application rejected or suspended awaiting parental approval dependant on the type of restriction selected.
	If a value of 0 is selected for this setting then all other age restriction settings will be ignored.';
$helptxt['coppaType'] = 'If age restrictions are enabled, this setting determines what happens when a user below the minimum age attempts to register with your forum. There are two possible choices:
	<ul>
		<li>
			<b>Reject Their Registration:</b><br />
				Any new member below the minimum age will have their registration rejected immediately.<br />
		</li><li>
			<b>Require Parent/Guardian Approval</b><br />
				Any new member who attempts to register and is below the minimum permitted age will have their account marked as awaiting approval.  They will be presented with a form upon which their parents must give permission to become a member of the forums.
				They will also be presented with the forum contact details entered on the settings page so they can send the form to the administrator by mail or fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'The contact boxes are required so that forms granting permission for underage registration can be sent to the forum administrator. These details will be shown to all new minors and are required for parent/guardian approval. At the very least, a postal address or fax number must be provided.';

$helptxt['allow_hideOnline'] = 'When this option is enabled, all members will be able to hide their online status from other users (except administrators). If disabled, only users who can moderate the forum can hide their presence. Note that disabling this option will not change any existing member\'s status - it just stops them from hiding themselves in the future.';
$helptxt['allow_hideEmail'] = 'When this option is enabled, members can choose to hide their email address from other members. However, administrators can always see everyone\'s email addresses.';

$helptxt['latest_support'] = 'This panel shows you some of the most common problems and questions on your server configuration. Do not worry, this information is not logged or anything.<br /><br />If this stays as &quot;Retrieving support information...&quot;, your computer probably cannot connect to <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'You can see here some of the most popular, and some random, packages or mods with quick and easy installations.<br /><br />If this section does not show up, your computer probably cannot connect to <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'This area shows a few of the latest and most popular themes from <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  It may not show up properly, however, if your computer cannot find <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'For your security, the answer to your question (as well as your password) is encrypted in such a way that SMF can only tell you if get it right.  SMF can never tell you (or importantly, anyone else!) your answer or password.';
$helptxt['moderator_why_missing'] = 'Moderation is done on a board-by-board basis so you have to make members moderators from the <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">board management interface</a>.';

$helptxt['permissions'] = 'Permissions are how you either allow groups to do, or deny groups from doing, specific things.<br /><br />You can modify multiple boards at once with the checkboxes or look at the permissions for a specific group by clicking \'Modify.\'';
$helptxt['permissions_board'] = 'If a board is set to \'Global\', it means that the board will not have any special permissions.  \'Local\' means it will have its own permissions separate from the global ones.  This allows you to have a board that has more or less permissions than another without requiring you to set them for each and every board.';
$helptxt['permissions_quickgroups'] = 'These allow you to use the &quot;default&quot; permission setups;  Restrictive means \'like a guest\', Standard means \'nothing special\', Moderator means \'what a moderator has\' and lastly Maintenance means \'very close to those of an administrator\'.';
$helptxt['permissions_deny'] = 'Denying permissions can be useful when you want take away permission from certain members. You can add a membergroup with a \'deny\' permission to the members you wish to deny a permission.<br /><br />Use with care as a denied permission will stay denied no matter what other membergroups the member is in.';
$helptxt['permissions_postgroups'] = 'Enabling permissions for post count based groups will allow you to attribute permissions to members that have posted a certain number of messages. The permissions of the post count based groups are <em>added</em> to the permissions of the regular membergroups.';
$helptxt['permissions_by_board'] = 'Enabling this option will allow you to set different permissions for each board for each membergroup. A board uses global permissions by default but, with this option enabled, you can switch a board to local permission settings. This provides a very sophisticated way of managing your permissions.';
$helptxt['membergroup_guests'] = 'The Guests membergroup is all users that are not logged in.';
$helptxt['membergroup_regular_members'] = 'The Regular Members are all members that are logged in but have no primary membergroup assigned.';
$helptxt['membergroup_administrator'] = 'The administrator can, by definition, do anything and see any board. There are no permission settings for the administrator.';
$helptxt['membergroup_moderator'] = 'The Moderator membergroup is a special membergroup. Permissions and settings assigned to this group apply to moderators but only <em>on the boards they moderate</em>. Outside these boards they are just like any other member.';
$helptxt['membergroups'] = 'In SMF there are two types of groups of which your members can be part. These are:
	<ul>
		<li><b>Regular Groups:</b> Members are not automatically put into a regular group. To assign a member to be in a group, simply go to their profile and click &quot;Account Settings&quot;. You can assign them to be part of any number of regular groups.</li>
		<li><b>Post Groups:</b> Unlike regular groups, post based groups cannot be assigned. Instead, members are automatically assigned to a post based group when they reach the minimum number of posts required to be in that group.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'You can edit these events by clicking on the red asterisk (*) next to their names.';

$helptxt['maintenance_general'] = 'You can optimise all your tables from here (makes them smaller and faster!), make sure you have the newest versions, find any errors that might be messing up your board, recount totals and empty logs.<br /><br />The last two should be avoided unless something is wrong but do not hurt anything.';
$helptxt['maintenance_backup'] = 'This area allows you to save a copy of all the posts, settings, members and other information in your forum to a very large file.<br /><br />It is recommended that you do this often, perhaps weekly, for safety and security.';
$helptxt['maintenance_rot'] = 'This allows you to <b>completely</b> and <b>irrevocably</b> remove old topics.  It is recommended that you try to make a backup first, just in case you remove something you did not mean to remove.<br /><br />Use this option with care.';

$helptxt['avatar_allow_server_stored'] = 'This allows your members to select from avatars stored on your server itself.  They are, generally, in the same place as SMF under the avatars folder.<br />As a tip, if you create directories in that folder, you can make &quot;categories&quot; of avatars.';
$helptxt['avatar_allow_external_url'] = 'When this option is enabled, your members can type in a URL to their own avatar.  The downside of this is that, in some cases, they may use avatars that are overly large or portray images that you do not want on your forum.';
$helptxt['avatar_download_external'] = 'When this option is enabled, the URL given by the user is accessed to download the avatar at that location. On success, the avatar will be treated as an uploadable avatar.';
$helptxt['avatar_allow_upload'] = 'This option is much like &quot;Allow members to select an external avatar&quot; except that you have better control over the avatars, a better time resizing them and your members do not have to have somewhere to put avatars.<br /><br />However, the downside is that it can take a lot of space on your server.';
$helptxt['avatar_download_png'] = 'PNGs are larger but offer better quality compression.  If this is unchecked, JPEG will be used instead which is often smaller but also of lesser or blurry quality.';

$helptxt['disableHostnameLookup'] = 'This disables host name lookups which on some servers are very slow.  Note that this will make banning less effective.';

$helptxt['search_weight_frequency'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site might want a relatively high value for \'age of last matching message\'. All values are relative to each other and should be positive integers.<br /><br />This factor counts the number of matching messages and divides them by the total number of messages within a topic.';
$helptxt['search_weight_age'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor rates the age of the last matching message within a topic. The more recent this message is, the higher the score.';
$helptxt['search_weight_length'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site might want a relatively high value for \'age of last matching message\'. All values are relative to each other and should be positive integers.<br /><br />This factor is based on the topic size. The more messages there are within the topic, the higher the score.';
$helptxt['search_weight_subject'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site might want a relatively high value for \'age of last matching message\'. All values are relative to each other and should be positive integers.<br /><br />This factor looks whether a search term can be found within the subject of a topic.';
$helptxt['search_weight_first_message'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site might want a relatively high value for \'age of last matching message\'. All values are relative to each other and should be positive integers.<br /><br />This factor looks whether a match can be found in the first message of a topic.';
$helptxt['search_weight_sticky'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site might want a relatively high value for \'age of last matching message\'. All values are relative to each other and should be positive integers.<br /><br />This factor looks whether a topic is sticky and increases the relevancy score if it is.';
$helptxt['search'] = 'Adjust all settings for the search function here.';
$helptxt['search_why_use_index'] = 'A search index can greatly improve the performance of searches on your forum. As the number of messages on a forum grows larger, searching without an index can take a long time and increase the pressure on your database. If your forum is larger than 50,000 messages, you might want to consider creating a search index to ensure peak performance of your forum.<br /><br />Note that a search index can take up quite a lot of space. A fulltext index is a built-in index of MySQL which is relatively compact (approximately the same size as the message table) but a lot of words are not indexed and it can, in some search queries, turn out to be very slow. The custom index is often larger (depending on your configuration it can be up to 3 times the size of the messages table) but its performance is better than fulltext and relatively stable.';

$helptxt['see_admin_ip'] = 'IP addresses are shown to administrators and moderators to facilitate moderation and to make it easier to track people up to no good.  Remember that IP addresses may not always be identifying and most people\'s IP address changes periodically.<br /><br />Members are also allowed to see their own IP addresses.';
$helptxt['see_member_ip'] = 'Your IP address is shown only to you and moderators.  Remember that this information may not always be identifying and most people\'s IP address changes periodically.<br /><br />You cannot see other members\' IP addresses and they cannot see yours.';

$helptxt['ban_cannot_post'] = 'The \'cannot post\' restriction turns the forum into read-only mode for the banned user. The user cannot create new topics, reply to existing ones, send personal messages or vote in polls. The banned user can, however, still read personal messages and topics.<br /><br />A warning message is shown to users that are banned this way.';

$helptxt['posts_and_topics'] = '	<ul>
		<li>
			<b>Post Settings</b><br />
			Modify the settings related to the posting of messages and the way messages are shown. You can also enable the spell check here.
		</li><li>
			<b>Bulletin Board Code</b><br />
			Enable the code that shows forum messages in the right layout and adjust which codes are allowed and which are not.
		</li><li>
			<b>Censored Words</b>
			You can censor certain words in order to keep the language on your forum under control. This function allows you to convert forbidden words into innocent versions.
		</li><li>
			<b>Topic Settings</b>
			Modify the settings related to topics. The number of topics per page, whether sticky topics are enabled or not, the number of messages needed for a topic to be hot, etc.
		</li>
	</ul>';

?>