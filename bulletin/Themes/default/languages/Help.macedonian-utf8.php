<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Затвори го прозорецот';

$helptxt['manage_boards'] = '
	<b>Edit Boards</b><br />
	In this menu you can create/reorder/remove boards, and the categories
	above them. For example, if you had a wide-ranging
	site that offered information on &quot;Sports&quot; and &quot;Cars&quot; and &quot;Music&quot;, these
	would be the top-level Categories you\'d create. Under each of these
	categories you\'d likely want to create hierarchical &quot;sub-categories&quot;,
	or &quot;Boards&quot; for topics within each. It\'s a simple hierarchy, with this structure: <br />
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
	Sports&quot;), and the &quot;Boards&quot; under them are the actual topics under which
	members can post. A user interested in Pintos
	would post a message under &quot;Cars->Pinto&quot;. Categories allow people to
	quickly find what their interests are: Instead of a &quot;Store&quot; you have
	&quot;Hardware&quot; and &quot;Clothing&quot; stores you can go to. This simplifies your
	search for &quot;pipe joint compound&quot; because you can go to the Hardware
	Store &quot;category&quot; instead of the Clothing Store (where you\'re unlikely
	to find pipe joint compound).<br />
	As noted above, a Board is a key topic underneath a broad category.
	If you want to discuss &quot;Pintos&quot; you\'d go to the &quot;Auto&quot; category and
	jump into the &quot;Pinto&quot; board to post your thoughts in that board.<br />
	Administrative functions for this menu item are to create new boards
	under each category, to reorder them (put &quot;Pinto&quot; behind &quot;Chevy&quot;), or
	to delete the board entirely.';

$helptxt['edit_news'] = '<b>Edit Forum News</b><br />
	This allows you to set the text for news items displayed on the Board Index page.
	Add any item you want (e.g., &quot;Don\'t miss the conference this Tuesday&quot;). Each news item should
	go in a separate box, and they are displayed randomly.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>View all Members</b><br />
			View all members in the board. You are presented with a hyperlinked list of member names. You may click
			on any of the names to find details of the members (homepage, age, etc.), and as Administrator
			you are able to modify these parameters. You have complete control over members, including the
			ability to delete them from the forum.<br /><br />
		</li>
		<li>
			<b>Awaiting Approval</b><br />
			This section is only shown if you have enabled admin approval of all new registrations. Anyone who registers to join your
			forum will only become a full member once they have been approved by an admin. The section lists all those members who
			are still awaiting approval, along with their email and IP address. You can choose to either accept or reject (delete)
			any member on the list by checking the box next to the member and choosing the action from the drop-down box at the bottom
			of the screen. When rejecting a member you can choose to delete the member either with or without notifying them of your decision.<br /><br />
		</li>
		<li>
			<b>Awaiting Activation</b><br />
			This section will only be visible if you have activation of member accounts enabled on the forum. This section will list all
			members who have still not activated their new accounts. From this screen you can choose to either accept, reject or remind
			members with outstanding registrations. As above you can also choose to email the member to inform them of the
			action you have taken.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Ban Members</b><br />
	SMF provides the ability to &quot;ban&quot; users, to prevent people who have violated the trust of the board
	by spamming, trolling, etc. This allows you to those users who are detrimental to your forum. As an admin,
	when you view messages, you can see each user\'s IP address used to post at that time. In the ban list,
	you simply type that IP address in, save, and they can no longer post from that location.<br />You can also
	ban people through their email address.';

$helptxt['modsettings'] = '<b>Edit Features and Options</b><br />
	There are several features in this section that can be changed to your preference.  Options for installed mods will generally also appear in here.';

$helptxt['number_format'] = '<b>Формат на броевите</b><br />
	Можеш да го искористиш ова сетирање за да одредиш во кој формат ќе им бидат прикажувани броевите на корисниците. Форматот на ова сетирање е:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Каде \',\' е карактер искористен да се поделат групите од по илјада, \'.\' е карактер искористен како децимална точка и бројот на нулите ја одредува точноста на заокружувањето.';

$helptxt['time_format'] = '<b>Формат на време</b><br />
	Можеш да подесиш за себе како ќе изгледаат времето и датумот. Има многу мали букви но е доста едноставно.
	Вообичаените изгледи се следени од функцијата strftime на PHP и се опишани подоле (повеќе детали можат да се најдат на <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	Следните карактери се препознени во format string-от: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - скратеница на име на ден<br />
	&nbsp;&nbsp;%A - целосно име на ден<br />
	&nbsp;&nbsp;%b - скратеница на име на месец<br />
	&nbsp;&nbsp;%B - целосно име на месец<br />
	&nbsp;&nbsp;%d - ден во месецот (01 до 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - исто како %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - дем во месецот (1 до 31) <br />
	&nbsp;&nbsp;%H - час користејќи 24-часовна форма (од 00 до 23) <br />
	&nbsp;&nbsp;%I - час користејќи 12-часовна форма (од 01 до 12) <br />
	&nbsp;&nbsp;%m - месец како бројка (01 до 12) <br />
	&nbsp;&nbsp;%M - минута како бројка <br />
	&nbsp;&nbsp;%p - either &quot;претпладне&quot; или &quot;попладне&quot; соодветно на даденото време<br />
	&nbsp;&nbsp;%R<b>*</b> - време во 24-часовна форма <br />
	&nbsp;&nbsp;%S - секунда како децимална бројка <br />
	&nbsp;&nbsp;%T<b>*</b> - моментално време, еднакво на %H:%M:%S <br />
	&nbsp;&nbsp;%y - година со 2 броеви (00 до 99) <br />
	&nbsp;&nbsp;%Y - година со 4 броеви<br />
	&nbsp;&nbsp;%Z - time zone or name or abbreviation <br />
	&nbsp;&nbsp;%% - a literal \'%\' character <br />
	<br />
	<i>* Не работи на Windows-базирани сервери.</i></span>';

$helptxt['live_news'] = '<b>Live announcements</b><br />
	This box shows recently updated announcements from <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	You should check here every now and then for updates, new releases, and important information from Simple Machines.';

$helptxt['registrations'] = '<b>Registration Management</b><br />
	This section contains all the functions that could be necessary to manage new registrations on the forum. It contains up to four
	sections which are visible depending on your forum settings. These are:<br /><br />
	<ul>
		<li>
			<b>Register new member</b><br />
			From this screen you can choose to register accounts for new members on their behalf. This can be useful in forums where registration is closed
			to new members, or in cases where the admin wishes to create a test account. If the option to require activation of the account
			is selected the member will be emailed a activation link which must be clicked before they can use the account. Similarly you can
			select to email the users new password to the stated email address.<br /><br />
		</li>
		<li>
			<b>Edit Registration Agreement</b><br />
			This allows you to set the text for the registration agreement displayed when members sign up for your forum.
			You can add or remove anything from the default registration agreement, which is included in SMF.<br /><br />
		</li>
		<li>
			<b>Set Reserved Names</b><br />
			Using this interface you can specify words or names which may not be used by your users.<br /><br />
		</li>
		<li>
			<b>Settings</b><br />
			This section will only be visible if you have permission to administrate the forum. From this screen you can decide on the registration method
			is use on your forum, as well as other registration related settings.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Moderation Log</b><br />
	This section allows members of the admin team to track all the moderation actions that the forum moderators have performed. To ensure that
	moderators cannot remove references to the actions they have performed, entries may not be deleted until 24 hours after the action was taken.
	The \'objects\' column lists any variables associated with the action.';
$helptxt['error_log'] = '<b>Error Log</b><br />
	The error log tracks logs every serious error encountered by users using your forum. It lists all of these errors by date which can be sorted
	by clicking the black arrow next to each date. Additionally you can filter the errors by clicking the picture next to each error statistic. This
	allows you to filter, for example, by member. When a filter is active the only results that will be displayed will be those that match that filter.';
$helptxt['theme_settings'] = '<b>Theme Settings</b><br />
	The settings screen allows you to change settings specific to a theme. These settings include options such as the themes directory and URL information but
	also options that affect the layout of a theme on your forum. Most themes will have a variety of user configurable options, allowing you to adapt a theme
	to suit your individual forum needs.';
$helptxt['smileys'] = '<b>Центар на Смешковците</b><br />
	Овде можеш да додаваш или отстрануваш Смешковци, и сетирањата на истите. Запамти дека ако еден Смешко е во една група, тогаш тој е во сите групи - инаку може
	може да биде збунувачки за корисниците кои користат различни сетирања.';
$helptxt['calendar'] = '<b>Manage Calendar</b><br />
	Here you can modify the current calendar settings as well as add and remove holidays that appear on the calendar.';

$helptxt['serversettings'] = '<b>Server Settings</b><br />
	Here you can perform the core configuration for your forum. This section includes the database and url settings, as well as other
	important configuration items such as mail settings and caching. Think carefully whenever editing these settings as an error may
	render the forum inaccessible';

$helptxt['topicSummaryPosts'] = 'Ова ти овозможува да одредиш бројката на претходни пораки да се прикажува на прозорецот каде се пишува одговор.';
$helptxt['enableAllMessages'] = 'Set this to the <em>maximum</em> number of posts a topic can have to show the all link.  Setting this lower than &quot;Maximum messages to display in a topic page&quot; will simply mean it never gets shown, and setting it too high could slow down your forum.';
$helptxt['enableStickyTopics'] = 'Лепливите се теми кои остануваат на врвот на листата. Тие обично се користат за важни пораки. Иако можеш да го смениш ова со дозволите, 
стандардно само модераторите и администраторите можат да направат тема леплива.';
$helptxt['allow_guestAccess'] = 'Unchecking this box will stop guests from doing anything but very basic actions - login, register, password reminder, etc. - on your forum.  This is not the same as disallowing guest access to boards.';
$helptxt['userLanguage'] = 'Со вклучувањето на оваа опција на корисниците ќе им се дозволи да изберат кој јазик ќе користат. Тоа нема да влијае
на стандардната селекција на јазик.';
$helptxt['trackStats'] = 'Статистики:<br /> Ова ќе им овозможи на корисниците да ги гледаат последните пораки и најпопуларните теми на твојот форум.
Исто така ќе покаже неколку статистики, пр. најмногу активни корисници во исто време, нови членови и нови теми.<hr />
		Прегледи:<br /> Додава друга колона на страницата со статистики каде се гледа бројот на прегледи на твојот форум.';
$helptxt['titlesEnable'] = 'Вклучувањето на опцијата за Стандардни наслови ќе им овозможи на членовите со соодветни дозволи да создаваат посебни текстови за себе.
		Тие би биле покажани под името.<br /><i>На пр.</i><br /> Јане<br />Мангупче';
$helptxt['topbottomEnable'] = 'Со ова би се додале копчиња за горе и доле, и со нив членовите би можеле да се отидат на дното или врвот на страницата со нивно притискање
		без скролување.';
$helptxt['onlineEnable'] = 'Со ова би се покажувала слика кој би индицирала дали членот е активен или не во моментот';
$helptxt['todayMod'] = 'Ова би покажувало &quot;Денес&quot;, или &quot;Вчера&quot;, наместо датум.';
$helptxt['enablePreviousNext'] = 'Со ова би се покажувал линк према следната или претходната страница со теми.';
$helptxt['pollMode'] = 'Со ова се овозможуваат гласањата. Доколку гласањата бидат оневозможени тогаш сите постоечки гласања ќе бидат сокриени
		од страниците со теми. Можеш да избереш да продолжи прикажувањето на стандардните теми без нивните гласања со селектирање
		&quot;Прикажи ги Постоечките Гласања како Теми;.<br /><br />За да избереш кој може да поставува гласања, да ги прегледува истите, и слично, 
		можеш да ги овозможиш или оневозможиш овие дозволи. Запамети го ова ако гласањата не работат.';
$helptxt['enableVBStyleLogin'] = 'Ова ќе прикаже покомпактно пријавување на гости на секоја страница од форумот.';
$helptxt['enableCompressedOutput'] = 'Оваа опција ќе ги компресира излезните податоци и ќе овозможи помало трошење на интернетот (bandwidth), но мора да има инсталиран zlib.';
$helptxt['databaseSession_enable'] = 'Оваа опција ја користи базата за чување на сесиите - најдобра е за серверите со балансирано оптоварување, но помага и со времето на мирување на форумот и може да го направи побрзо иститот. Не работи доколку опцијата session.auto_start е вклучена.';
$helptxt['databaseSession_loose'] = 'Со вклучувањето на оваа опциија ќе се намали bandwidth-от што го користи форумот, и со кликнување наназад нема да се освежи претходната страница - односно новите икони нема да се појават. За да се види освежена страницата во тој случај треба да се притисне на линк према неа или да се притисне F5.';
$helptxt['databaseSession_lifetime'] = 'Ова е број на секунди за времетраење на сесија откако ќе и се пристапи. Ако на сесијата не и е пристапено предолго се вели дека се случило &quot;Временско истекување&quot;. Препорачлива е секоја вредност над 2400.';
$helptxt['enableErrorLogging'] = 'Со ова ќе се запишуваат сите грешки, на пр. неуспешно пријавување, и ќе може да се провери во што бил проблемот.';
$helptxt['allow_disableAnnounce'] = 'This will allow users to opt out of notification of topics you announce by checking the &quot;announce topic&quot; checkbox when posting.';
$helptxt['disallow_sendBody'] = 'This option removes the option to receive the text of replies and posts in notification emails.<br /><br />Often, members will reply to the notification email, which in most cases means the webmaster receives the reply.';
$helptxt['compactTopicPagesEnable'] = 'Со ова ќе се овозможи селекција на бројките на страниците.<br /><i>Пример:</i>
		&quot;3&quot; ќе прикаже: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; ќе прикаже: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Со ова ќе се прикажува времето потребно за појавување на страницата на форумот, на дното изразено во секунди.';
$helptxt['removeNestedQuotes'] = 'Со ова би се покажало цитирањето само кога членот ќе го пишува одговорот, односно нема да се појави во самиот одговор (порака) кој ќе биде поставен на форумот.';
$helptxt['simpleSearch'] = 'Со ова ќе се прикаже едноставно пребарување и линк према форма со напредно пребарување.';
$helptxt['max_image_width'] = 'This allows you to set a maximum size for posted pictures. Pictures smaller than the maximum will not be affected.';
$helptxt['mail_type'] = 'Ова ти овозможува да селектираш или стандардна PHP mail програма или свој mail сервер.
		Пополни ги деталите за својот излезен и влезен mail сервер освен ако не селектираш sendmail.';
$helptxt['attachmentEnable'] = 'Атачменти се датотеки кои членовите можат да ги поднесат, и да ги закачат за порака.<br /><br />
		<b>Провери ја екстензијата на атачментите</b>:<br /> Дали сакаш да ја провериш екстензијата на датотеките?<br />
		<b>Дозволени екстензии на атачментите</b>:<br /> Можеш да одобриш одредени екстензии за атачментите.<br />
		<b>Прикаши ги атачментите како слика во пораките</b>:<br /> Ако поднесениот фајл е слика, ова ќе се покаже испод пораката<br />
		<b>Директориум на атачментите</b>:<br /> Патеката до директориумот со атачменти<br />(пример: /home/sites/yoursite/www/forum/attachments)<br />
		<b>Адреса (URL) на атачментите</b>:<br /> Интернет адреса до директориумот со атачментите<br />(пример: http://www.yoursite.com/forum/attachments)<br />
		<b>Максимална големина на фолдерот</b> (во KB):<br /> Одреди колку голем може да биде директориумот со атачменти, вклучувајќи ги сите датотеки внатре.<br />
		<b>Максимален број на атачменти по порака</b> (во KB):<br /> Избери ја максималната големина на сите атачменти по порака. Ако тоа е пониско од големината по атачмент, ова ќе биде лимитот.<br />
		<b>Максимална големина на атачмент</b> (во KB):<br /> Одбери ја максималната големина на секој посебен атачмент.<br />
		<b>Максимален број на атачменти по порака</b>:<br /> Одбери го го бројот на атачменти по член и по порака.';
$helptxt['karmaMode'] = 'Карма е опција која ја прикажува популарноста на член. Членовите ако им е дозволени, може да \'им аплаудираат\' или \'да ги удираат\' другите членови, и на тој начин се одредува нивната популарност. Можеш да го смениш
        бројот на пораки потребен за да се има &quot;карма&quot;, времето меѓу ударите и аплаузите, и дали администраторите
		треба исто така да чекаат.<br /><br />Дали членовите на групи можат да ги удираат другите е контролирано со дозволи.
		Ако имаш проблем со коректна работа на оваа опција за сите, повторно провери ги дозволите.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'Календарот може да биде користен за прикажување родендени или за прикажување на важни моменти кои се случуваат во општеството.<br /><br />
		<b>Прикажи ги деновите како линкови према \'Поставени Настани\'</b>:<br />Ова ќе им овозможи на членовите да поставуваат настани за одреден датум кога ќе кликнат на него<br />
		<b>Прикажи го бројот на неделата</b>:<br />Прикажува која недела е сега.<br />
		<b>Најголем број на денови во иднина на форумот</b>:<br />Ако ова е подесено на 7, ќе бидат прикажани настаните во следните 7 дена.<br />
		<b>Прикажи ги празниците на првата страница на форумот</b>:<br />Ги прикажува денешните празници во поле за календарот на првата страница.<br />
		<b>Прикажи ги родендените на првата страница на форумот</b>:<br />Ги прикажува денешните родендени во поле за календар на првата страница.<br />
		<b>Прикажи ги настаните на првата страница на форумот</b>:<br />Ги прикажува денешните настани во поле за календар на првата страница.<br />
		<b>Стандарден форум за поднесување пораки</b>:<br />Кој е стандардниот форум за поднесување настани?<br />
		<b>Од година</b>:<br />Селектирај &quot;прва&quot; година во календарот.<br />
		<b>До година</b>:<br />Селектирај &quot;последна&quot; година во календарот<br />
		<b>Боја на роденденот</b>:<br />Селектирај ја бојата на текстот за најава на родендените<br />
		<b>Боја на настаните</b>:<br />Селектирај ја бојата на текстот за најава на настаните<br />
		<b>Боја за празници</b>:<br />Селектирај ја бојата на текстот за најава на празници<br />
		<b>Овозможува да се поврзат повеќе денови</b>:<br />Означи ако сакаш настаните да може да траат повеќе денови.<br />
		<b>Максимален број на денови на трање на настанот</b>:<br />Одбери максимален број на денови на траење на настаните.<br /><br />
		Запамети дека користењето на календарот (поднесување настани, прегледување настани, итн.) е контролирано со доволи на страницата со дозволи.';
$helptxt['localCookies'] = 'SMF користи cookies да чува информации за логирањето во компјутерот на корисникот.
	Cookies можат да бидат чувани глобално (myserver.com) или локално (myserver.com/path/to/forum).<br />
	Провери ја оваа опција доколку имаш проблеми со автоматско пријавување на членовите.<hr />
	Глобално чуваните cookies се понесигурни кога се користат на заеднички вебсервер (како Tripod).<hr />
	Локалните cookies не работат надвор од фолдерот на форумот така да ако форумот е сочуван на www.myserver.com/forum, страниците како www.myserver.com/index.php не можат да ги најдат информациите за акаунтот.
	Посебно кога користат SSI.php, глобалните cookies се препорачуваат.';
$helptxt['enableBBC'] = 'Со селектирање на оваа опција ќе дозволите вашите членови да го користат BBC низ целиот форум, дозволувајќи им на членовите да ги форматираат своите пораки со фотосграфии, различен изглед на текстот и др.';
$helptxt['time_offset'] = 'Не сите администратори сакаат нивниот форум да ја користи временската зона на серверот. Искористи ја оваа опција да внесеш бројка за разликата во часови во однос на локалното време на твојот форум. Дозволени се негативни и децимални вредности.';
$helptxt['spamWaitTime'] = 'Овде може да се селектира временската разлика во секунди која мора да ја има меѓу две пораки што ги оставате на форумот. Ова се користи за да се спречи оставањето (spamming) голем број пораки одеднаш.';

$helptxt['enablePostHTML'] = 'Ова ќе овозможи пораки со некои основни HTML кодови:
	&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;pre&gt;, &lt;blockquote&gt;, &lt;img src=&quot;&quot; /&gt;, &lt;a href=&quot;&quot;&gt;, и &lt;br /&gt;.';

$helptxt['themes'] = 'Овде можете да одберете дали ќе биде искористен стандардниот изглед на темата, што ќе користат гостите,
	како и други опции. Кликни на тема во десно за да ги смениш сетирањата за неа.';
$helptxt['theme_install'] = 'Ова ти овозможува да инсталираш нови теми. Ова можеш да го направиш од веќе создаден директориум, со внесување на датотеките за таа тема, или со копирање на стандардната тема.<br /><br />Запамети дека архивниот фајл или директориумот мора да имаат <tt>theme_info.xml</tt> фајл за дефинирање.';
$helptxt['enableEmbeddedFlash'] = 'Оваа опција ќе им овозможи на членовите да користат Flash директно во нивните пораки,
	само како фотографии. Ова може да претставува безбедносен ризик, иако само неколку досега го искористиле тоа.
	КОРИСТИ ГО НА СВОЈ РИЗИК!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Им овозможува на членовите да ги линкуваат <a href="' . $scripturl . '?action=.xml;sa=news">Најновите новости</a>
	и слични податоци.  Исто така е препорачливо да се ограничи големината на Најновите пораки/новости затоа што кога rss data
	is displayed in some clients, like Trillian, it is expected to be truncated.';
$helptxt['hotTopicPosts'] = 'Смени го бројот на пораки по тема за да се стигне до состојбата на &quot;популарна&quot; или
	&quot;многу популарна&quot; тема.';
$helptxt['globalCookies'] = 'Дозволува користење на независни cookies  на подадреси.  На пример, ако ...<br />
	твојот сајт еhttp://www.simplemachines.org/,<br />
	и твојот форум е http://forum.simplemachines.org/,<br />
	Користењето на модификацијата ќе ти овозможи да му пристапиш на cookie на форумот на твојот сајт.';
$helptxt['securityDisable'] = 'Ова го <i>оневозможува</i> дополнителното проверување на лозинката за аминистративниот оддел. Ова не се препорачува!';
$helptxt['securityDisable_why'] = 'Ова е твојата моментална лозинка. (истата која ја користиш за пријавување.)<br /><br />Барајќи да се внесе помага да се осигурате дека само вие ги правите измените без обзир на било какво администрирање на сајтот се работи.';
$helptxt['emailmembers'] = 'Во оваа порака можеш да користиш неколку &quot;променливи&quot;.  Тие се:<br />
	{$board_url} - Адреса (URL) на твојот форум.<br />
	{$current_time} - Моментално време.<br />
	{$member.email} - Моменталниот email на членот.<br />
	{$member.link} - Моменталниот линк на членот.<br />
	{$member.id} - Моменталниот ID на членот.<br />
	{$member.name} - Моменталното име на членот.  (за лично обраќање.)<br />
	{$latest_member.link} - Најновиот регистриран линк на член.<br />
	{$latest_member.id} - Најновиот регистриран ID на член.<br />
	{$latest_member.name} - Најново регистрирано име на член.';
$helptxt['attachmentEncryptFilenames'] = 'Енкриптирањето на името на атачментите овозможува повеќе атачменти со исто име
	да се користат безбедноo .php датотеките со атачменти, и се зајакнува безбедноста.  Но ова може да го направи потежко повторното формирање 
	на базата на податоци ако се случи нешто драстично.';

$helptxt['failed_login_threshold'] = 'Одреди го бројот на неуспешни пријавувања пред да се пренасочи членот на страницата за потсетување на лозинката.';
$helptxt['oldTopicDays'] = 'If this option is enabled a warning will be displayed to the user when attempting to reply to a topic which has not had any new replies for the amount of time, in days, specified by this setting. Set this setting to 0 to disable the feature.';
$helptxt['edit_wait_time'] = 'Број на секунди дозволен за измена на порака пред да се пријави последниот датум на измена.';
$helptxt['edit_disable_time'] = 'Number of minutes allowed to pass before a user can no longer edit a post they have made. Set to 0 disable. <br /><br /><i>Note: This will not effect any user who has permission to edit other peoples posts.</i>';
$helptxt['enableSpellChecking'] = 'Овозможи граматичка проверка. Мора да имаш pspell библиотека инсталирана на овој сервер и сетирање на истиот да ја користи. Твојот сервер ' . (function_exists('pspell_new') == 1 ? 'DOES' : 'DOES NOT') . ' изгледа дека го има ова сетирано. За да биде употребливо ова потребна е можност за спелување на македонски за што се уште нема услови (16.04.2006).';
$helptxt['lastActive'] = 'Одреди број на минути за кои на првата страница ќе има информација колку корисници биле активни на првата страница на форумот. Стандардната вредност е 15 минути.';

$helptxt['autoOptDatabase'] = 'Оваа опција ја оптимизира базата на податоци на одреден број денови.  Внеси 1 за да се прави оптимизација секој ден.  Исто така можеш да одредиш најголем број на активни корисници во меоментот, за да не го преоптовариш серверот или преголем несоодветен број на корисници.';
$helptxt['autoFixDatabase'] = 'Ова автоматски ќе ги поправа расипаните табели и ќе ја обнови како ништо да не се случило.  Ова може да биде корисни бидејќи единствен начин да се среди табела е да се ПОПРАВИ истата, и на овој начин твојот форум your forum нема да падне додека бидеш известен, добиваш информација преку email кога ќе се случи нешто такво.';

$helptxt['enableParticipation'] = 'Ова прикажува мала икона на темата која членот ја поставил.';

$helptxt['db_persist'] = 'Ја одржува активна конекцијата за подобрување на перформансите.  Ако не си на dedicated server, ова може да предизвика проблеми со провајдерот.';

$helptxt['queryless_urls'] = 'Со ова се менува малку форматот на насловот на адресите (URL) така да пребарувачките сајтови ќе ги наоѓаат подобро.  Тие ќе погледаат во index.php/topic,1.html.<br /><br />Оваа можност ќе ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'not') . ' работи на твојот сервер.';
$helptxt['countChildPosts'] = 'Checking this option will mean that posts and topics in a board\'s child board will count toward its totals on the index page.<br /><br />This will make things notably slower, but means that a parent with no posts in it won\'t show \'0\'.';
$helptxt['fixLongWords'] = 'Оваа опција ги дели зборовите подолги од одредена должина на делови со цел да не го менуваат изгледот на форумот. (толку ...)  Оваа опција не треба да биде сетирана на помалку од 40.';

$helptxt['who_enabled'] = 'Оваа опција ти овозможува да ја вклучиш или исклучиш дозволата на членовите да видат кој се е моментално на форумот и што точно прават.';

$helptxt['recycle_enable'] = '&quot;Врати ги&quot; избришаните теми и пораки на одредениот форум.';

$helptxt['enableReportPM'] = 'This option allows your users to report personal messages they receive to the administration team. This may be useful in helping to track down any abuse of the personal messaging system.';
$helptxt['max_pm_recipients'] = 'This option allows you to set the maximum amount of recipients allowed in a single personal message sent by a forum member. This may be used to help stop spam abuse of the PM system. Note that users with permission to send newsletters are exempt from this restriction. Set to zero for no limit.';
$helptxt['pm_posts_verification'] = 'This setting will force users to enter a code shown on a verification image each time they are sending a personal message. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['pm_posts_per_hour'] = 'This will limit the number of personal messages which may be sent by a user in a one hour period. This does not affect admins or moderators.';

$helptxt['default_personalText'] = 'Се внесува стандарден текст кој членовите ќе го користат како &quot;личен текст.&quot;';

$helptxt['modlog_enabled'] = 'Ќе ги запишува сите активности на модерирање.';

$helptxt['guest_hideContacts'] = 'Ако оваа опција е означена ќе бидат сокриени email и messenger конакт-информациите
	на сите членови од сите гости на форумот.';

$helptxt['registration_method'] = 'Оваа опција го одредува методот на зачленување кои го користат корисниците кои сакаат да се придружат. Можеш да селектираш од:<br /><br />
	<ul>
		<li>
			<b>Зачленувањето е исклучено:</b><br />
				Го оневозможува зачленувањето што значи дека нови членови не можат да се регистрираат на твојот форум.<br />
		</li><li>
			<b>Брзо зачленување</b><br />
				Новите членови можат да се пријават и оставаат пораки веднаш по зачленувањето.<br />
		</li><li>
			<b>Активација на членовите</b><br />
				Кога оваа опција е вклучена тоа овозможува секој член кој се регистрира на форумот да добие email со линк за активација кој мора да биде кликнат за да стане полноправен член.<br />
		</li><li>
			<b>Одобрување на член</b><br />
				Со оваа опција секој корисник што сака да се зачлени на форумот ќе мора да биде одобрен од страна на администраторот пред да стане член.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Кога оваа опција е вклучена сите членови кои ја смениле email адресата во нивниот профил, ќе мора да го реактивираат нивниот акаунт преку email испратен на новата email адреса.';
$helptxt['send_welcomeEmail'] = 'Со вклучување на оваа опција сите нови членови на форумот ќе примат email за добредојде';
$helptxt['password_strength'] = 'This setting determines the strength required for passwords selected by your forum users. The stronger the password, the harder it should be to compromise member\'s accounts.
	Its possible options are:
	<ul>
		<li><b>Low:</b> The password must be at least four characters long.</li>
		<li><b>Medium:</b> The password must be at least eight characters long, and can not be part of a users name or email address.</li>
		<li><b>High:</b> As for medium, except the password must also contain a mixture of upper and lower case letters, and at least one number.</li>
	</ul>';

$helptxt['coppaAge'] = 'The value specified in this box will determine the minimum age that new members must be to be granted immediate access to the forums.
	On registration they will be prompted to confirm whether they are over this age, and if not will either have their application rejected or suspended awaiting parental approval - dependant on the type of restriction chosen.
	If a value of 0 is chosen for this setting then all other age restriction settings shall be ignored.';
$helptxt['coppaType'] = 'If age restrictions are enabled, then this setting will define that happens when a user below the minimum age attempts to register with your forum. There are two possible choices:
	<ul>
		<li>
			<b>Reject Their Registration:</b><br />
				Any new member below the minimum age will have their registration rejected immediately.<br />
		</li><li>
			<b>Require Parent/Guardian Approval</b><br />
				Any new member who attempts to register and is below the minimum permitted age will have their account marked as awaiting approval, and will be presented with a form upon which their parents must give permission to become a member of the forums.
				They will also be presented with the forum contact details entered on the settings page, so they can send the form to the administrator by mail or fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'The contact boxes are required so that forms granting permission for underage registration can be sent to the forum administrator. These details will be shown to all new minors, and are required for parent/guardian approval. At the very least a postal address or fax number must be provided.';

$helptxt['allow_hideOnline'] = 'Со вклучување на оваа опција сите членови ќе можат да ја сокријат својата моментална присутност на форумот од другите корисници (освен администраторите). Ако не е вклучена само членовите кои го модерираат форумот ќе можат да го сокријат своето присуство. Запамети дека со исклучувањето на оваа опција нема да се смени статусот на членовите - само нема да им дозволи да се кријат во иднина.';
$helptxt['allow_hideEmail'] = 'Со вклучувањето на оваа опција членовите ќе можат да изберат дали да ја сокријат својата email адреса од другите членови. Но администраторите секогаш ќе можат да ја видат истата на сите членови.';

$helptxt['latest_support'] = 'Овој прозорец ви ги прикажува некои од најновите вообичаени проблеми и прашања за сетирањата на твојот сервер. Без грижи, оваа информација не е пријавена или нешто слично.<br /><br />Ако останува како &quot;Добивање информации за поддршка ...&quot;, твојот компјутер веројатно не може да се поврзе со <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Овде може да ги видиш некои од најпопуларните случано избрани пакети или модови, со брза и лесна инсталација.<br /><br />Ако овој оддел не се појавува тогаш твојот компјутер тогаш најверојатно не можеш да се поврзеш со <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Во овој оддел се прикажуваат неколку од последните и најпопуларни теми од <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.  Може да не биде прикажана како што треба доколку твојот компјутер не може да го најде <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'За твоја безбедност, одговорот на твоето прашање (како и твојота лозинка) е енкриптирана на таков начин да само SMF може да ти ја прикаже ако одговориш точно на прашањето, во ниеден друг случај и никој што е поважно не можеш да ги откриеш својот одговор или лозинка.';
$helptxt['moderator_why_missing'] = 'Бидејќи модерирањето е врз основа на board-by-board basis, мораш да ги направиш членовите модератори од <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">страницата за управување со форумот</a>.';

$helptxt['permissions'] = 'Дозволите се како им дозволуваш или забрануваш на групите да прават одредени работи.<br /><br />Можеш да менуваш повеќекратни форуми одеднаш со полињата за означување, или да гледаш во дозволите за одредена група со кликнување на \'Измени.\'';
$helptxt['permissions_board'] = 'Ако форум е означен како \'Општ,\' тоа значи дека форумот нема да има специјални дозволи.  \'Локален\' значи дека ќе има сопствени дозволи - одделни од општите.  Ова ти овозможува да имаш форуми лои имаат повеќе или помалку дозволи од останатите, без да се бара да се сетираат за секој форум.';
$helptxt['permissions_quickgroups'] = 'Ова ти дозволува да ги користиш &quot;стандардните&quot; сетирања за дозволи - стандардно значи \'ништо посебно\', ограничувачки значи \'како гостин\', модератор значи \'што има модераторот\', и последно \'одржување\' значи дозволи многу блиску до администраторските.';
$helptxt['permissions_deny'] = 'Denying permissions can be useful when you want take away permission from certain members. You can add a membergroup with a \'deny\'-permission to the members you wish to deny a permission.<br /><br />Use with care, a denied permission will stay denied no matter what other membergroups the member is in.';
$helptxt['permissions_postgroups'] = 'Enabling permissions for post count based groups will allow you to attribute permissions to members that have posted a certain amount of messages. The permissions of the post count based groups are <em>added</em> to the permissions of the regular membergroups.';
$helptxt['permissions_by_board'] = 'Enabling this option will allow you to, for each board for each membergroup, set different permissions. By default a board uses global permissions, but with this option enabled, you can switch a board to local permission settings. This provides a very sophisticated way to manage your permissions.';
$helptxt['membergroup_guests'] = 'The Guests membergroup are all users that are not logged in.';
$helptxt['membergroup_regular_members'] = 'The Regular Members are all members that are logged in, but that have no primary membergroup assigned.';
$helptxt['membergroup_administrator'] = 'The administrator can, per definition, do anything and see any board. There are no permission settings for the administrator.';
$helptxt['membergroup_moderator'] = 'The Moderator membergroup is a special membergroup. Permissions and settings assigned to this group apply to moderators but only <em>on the boards they moderate</em>. Outside these boards they\'re just like any other member.';
$helptxt['membergroups'] = 'Во SMF има два типа на групи во кои членовите можат да бидат. Тоа се:
	<ul>
		<li><b>Обична група:</b> Обичната група е група во која не се врши автоматско зачленување. За да се стави член во оваа група се оди во неговиот профил и се кликнува &quot;Сетирања на акаунтот&quot;. Од тука можеш да им доделуваш кои сакаш обични групи на кои би припаѓале.</li>
		<li><b>Групи према испратени пораки:</b> За разлика од обичните групи овие групи не можат да бидат доделувани. Членовите автоматски се зачленуваат кога ќе достигнат минимален број на испратени пораки кој е задолжителен за таа група.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Можеш да ги менуваш настаните со кликнување на црвената ѕвезда (*) веднаш до нивните имиња.';

$helptxt['maintenance_general'] = 'Од тука можеш да ги оптимизираш сите твои табели (тоа ги прави помали и побрзи!), провери дали ги имаш најновите верзии, најди било какви грешки кои можат да му пречат на твојот форум, пресеметај ги збировите, и празните записи.<br /><br />Последниве две опции треба да се избегнуваат освен ако нешто не е во ред, но не сметаат.';
$helptxt['maintenance_backup'] = 'Овој дел ви дозволува да сочувате копија од сите пораки, сетирања, членови и други информации во еден многу голем фајл.<br /><br />Се препорачува ова да го правиш често, можеби еднаш неделно, заради сигурност и безбедност.';
$helptxt['maintenance_rot'] = 'Ова ти овозможува <b>целосно</b> и <b>неповратно</b> да отстрануваш стари теми.  Препорачано е да се направи прво резервна копија, за секој случај доколку отстраниш нешто што не требало.<br /><br />Внимателно користи ја оваа опција.';

$helptxt['avatar_allow_server_stored'] = 'Ова им овозможува на твоите членови сами да избираат аватари кои се чуваат на твојот сервер.  Тие се генерално на исто место како и SMF во директориумот Avatars.<br />Ако создаваш поддиректориум во директориумот Avatars, можеш да направиш &quot;категории&quot; на аватари.';
$helptxt['avatar_allow_external_url'] = 'Со ова вклучено членовите можат да внесат адреса (URL) кон нивен аватар.  Ова е пожелно доколку не сакаш да имаш на серверот фотографии кои се големи или одреден тип фотографии.<br /><br />Запамети дека на членовите им е потребна дозвола да изберат надворешен аватар за да можат да ја користат. Оваа опција им го овозможува користењето само на оние со потребни дозволи.';
$helptxt['avatar_download_external'] = 'With this option enabled, the URL given by the user is accessed to download the avatar at that location. On success, the avatar will be treated as uploadable avatar.';
$helptxt['avatar_allow_upload'] = 'Оваа опција личи многу на &quot;Дозволи им на членовите да изберат надворешен аватар&quot;, освен што имаш подобра контрола над аватаритеs, пократко време за менување на големината, и твоите членови не мора да имаат место на серверот да ги стават аватарите.<br /><br />Но може да се случи да заземе доста место на вашиот сервер.';
$helptxt['avatar_download_png'] = 'PNG фотографиите се поголеми но нудат подобра квалитетна компресија.  Ако ова не е означено наместо нив ќе се користат JPEG а тие се често помали, но со помал квалитет.';

$helptxt['disableHostnameLookup'] = 'Ова ги оневозможува пребарувањата на имињата на провајдери, кои на некои сервери се многу спори.  Запамети дека ова ќе ги направи забраните помалку ефективни.';

$helptxt['search_weight_frequency'] = 'Тежинските фактори се користени да ја одредат релевантноста на добиените резултати од пребарувањата. Измени ги овие тежински фактори да се поклопуваат со работите кои се посебно важни за вашиот форум. На пр. форум за вести, може да бара релативно висока вредност за \'староста на најновата порака како резултат на пребарувањето\'. Сите вреднсоти се релативни во меѓусебниот однос и треба да бидат позитивен број (поситиве интегерс).<br /><br />Овој фактор го пресметува бројот на пораки како резултат на пребарувањето и го дели со вкупниот број на пораки во темата.';
$helptxt['search_weight_age'] = 'Тежинските фактори се користени да ја одредат релевантноста на добиените резултати од пребарувањата. Измени ги овие тежински фактори да се поклопуваат со работите кои се посебно важни за вашиот форум. На пр. форум за вести, може да бара релативно висока вредност за \'староста на најновата порака како резултат на пребарувањето\'. Сите вреднсоти се релативни во меѓусебниот однос и треба да бидат позитивен број (поситиве интегерс).<br /><br />Овој фактор ја проценува староста на последната порака добиена во пребарувањето, во темата. Колку понова е оваа порака резултатот е повисок.';
$helptxt['search_weight_length'] = 'Тежинските фактори се користени да ја одредат релевантноста на добиените резултати од пребарувањата. Измени ги овие тежински фактори да се поклопуваат со работите кои се посебно важни за вашиот форум. На пр. форум за вести, може да бара релативно висока вредност за \'староста на најновата порака како резултат на пребарувањето\'. Сите вреднсоти се релативни во меѓусебниот однос и треба да бидат позитивен број (поситиве интегерс).<br /><br />Овој фактор е врз основа на тежината на темата. Колку повеќе пораки има во темата толку резултатот е повисок.';
$helptxt['search_weight_subject'] = 'Тежинските фактори се користени да ја одредат релевантноста на добиените резултати од пребарувањата. Измени ги овие тежински фактори да се поклопуваат со работите кои се посебно важни за вашиот форум. На пр. форум за вести, може да бара релативно висока вредност за \'староста на најновата порака како резултат на пребарувањето\'. Сите вреднсоти се релативни во меѓусебниот однос и треба да бидат позитивен број (поситиве интегерс).<br /><br />Овој фактор пребарува дали терминот за пребарување може да се најде во насловот (Subject) на тема.';
$helptxt['search_weight_first_message'] = 'Тежинските фактори се користени да ја одредат релевантноста на добиените резултати од пребарувањата. Измени ги овие тежински фактори да се поклопуваат со работите кои се посебно важни за вашиот форум. На пр. форум за вести, може да бара релативно висока вредност за \'староста на најновата порака како резултат на пребарувањето\'. Сите вреднсоти се релативни во меѓусебниот однос и треба да бидат позитивен број (поситиве интегерс).<br /><br />Овој фактор пребарува дали може да се најде резултат во првата порака на тема.';
$helptxt['search_weight_sticky'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a topic is sticky and increases the relevancy score if it is.';
$helptxt['search'] = 'Adjust all settings for the search function here.';
$helptxt['search_why_use_index'] = 'A search index can greatly improve the performance of searches on your forum. Especially when the number of messages on a forum grows bigger, searching without an index can take a long time and increase the pressure on your database. If your forum is bigger than 50.000 messages, you might want to consider creating a search index to assure peak performance of your forum.<br /><br />Note that a search index can take up quite some space. A fulltext index is a built-in index of MySQL. It\'s relatively compact (approximately the same size as the message table), but a lot of words aren\'t indexed and it can, in some search queries, turn out to be very slow. The custom index is often bigger (depending on your configuration it can be up to 3 times the size of the messages table) but it\'s performance is better than fulltext and relatively stable.';

$helptxt['see_admin_ip'] = 'IP адресите се прикажуваат на администраторите и модераторите за да го направат полесно барањето.  Запамети дека IP не секогаш идентификуваат бидејќи повеќето од нив се менуваат периодично.<br /><br />На членовите им е дозволено да ја гледаат својата IP адреса.';
$helptxt['see_member_ip'] = 'Вашата IP адреса е покажана само на вас и на администраторите.  Запаметете дека оваа информација не може да се користи за идентификација затоа што повеќето IP се менуваат периодично.<br /><br />Не можеш да ја видиш IP адресата на другите членови и тие не можат да ја видат твојата.';

$helptxt['ban_cannot_post'] = 'The \'cannot post\' restriction turns the forum into read-only mode for the banned user. The user cannot create new topics, or reply to existing ones, send personal messages or vote in polls. The banned user can however still read personal messages and topics.<br /><br />A warning message is shown to the users that are banned this way.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Post Settings</b><br />
			Modify the settings related to the posting of messages and the way messages are shown. You can also enable the spell check here.
		</li><li>
			<b>Bulletin Board Code</b><br />
			Enable the code that show forum messages in the right layout. Also adjust which codes are allowed and which aren\'t.
		</li><li>
			<b>Censored Words</b>
			In order to keep the language on your forum under control, you can censor certain words. This function allows you to convert forbidden words into innocent versions.
		</li><li>
			<b>Topic Settings</b>
			Modify the settings related to topics. The number of topics per page, whether stickey topics are enabled or not, the number of messages needed for a topic to be hot, etc.
		</li>
	</ul>';

?>