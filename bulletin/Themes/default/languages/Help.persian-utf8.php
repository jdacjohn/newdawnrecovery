<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = 'آرایه()';

$txt[1006] = 'بستن پنجره';

$helptxt['manage_boards'] = '<b>ویرایش انجمن ها</b><br />
	در این قسمت شما میتوانید انجمن و شاخه جدیدی را ایجاد/ ویرایش/ حذف نمایید.
	برای مثال اگر موضوع سایت شما &quot;ورزش&quot; ، &quot;اتومبیل&quot; یا
	&quot;موسیقی&quot; باشد، حتما شما نیاز به ایجاد شاخه و زیرگروه های متنوعی
	خواهید داشت. برای مثال در زیر نمونه ای از نحوه ایجاد انجمن برای یک سایت که موضوع آن
	&quot;ورزش&quot; است را ملاحظه می نمایید:<br />
	<ul>
		<li>
			<b>ورزش ها</b>
			&nbsp;- &quot;یک شاخه&quot;
		</li>
		<ul>
			<li>
				<b>بیسبال</b>
				&nbsp;- یک انجمن در شاخه &quot;ورزش ها&quot;
			</li>
			<ul>
				<li>
					<b>نتایج</b>
					&nbsp;- یک زیرگروه برای انجمن &quot;بیسبال&quot;
				</li>
			</ul>
			<li><b>فوتبال</b>
			&nbsp;- یک انجمن در شاخه &quot;ورزش ها&quot;</li>
		</ul>
	</ul>
	در نمونه بالا طرز جاگیری انجمن ها و زیر انجمن ها را در یک گروه کوچک مشاهده کردید. نحوه ایجاد
	انجمن ها و شاخه ها به این صورت، در ابتدا برای کاربران مفید است. چرا که برای مثال در سایتی
	که برای  &quot;اتومبیل&quot; است، کاربر براحتی میتوانید موضوعی را که بدنبال آن است را
	جستجو و پیدا کند.<br />';

$helptxt['edit_news'] = '<b>ویرایش جعبه اخبار</b><br />
	در این قسمت شما میتوانید مطلبی را که قصد دارید همه کاربران از آن مطلع و باخبر شوند
	را وارد نمایید. برای مثال شما میتوانید در این جعبه بنویسید: ( روز سه شنبه این هفته ساعت
	5 بعد از ظهر کنفرانس برگزار خواهد شد. از همه کاربران تقاضا می کنیم در این کنفرانس
	شرکت کنند ). این پیغام در جعبه اخبار انجمن که بصورت پیشفرض در بالای انجمن
	 است، برای کاربران نمایش داده خواهد شد.';

$helptxt['view_members'] = '<b>لیست کاربران</b><br />
	دیدن همه کاربران انجمن. در این قسمت شما لیست همه کاربران ثبت نام کرده در انجمن را
	مشاهده می نمایید. با کلیک بر روی نام کاربری یا نام اصلی هر یک از کاربران، به قسمت
	مشخصات کاربر منتقل خواهید شد و مشخصاتی مانند (وب سایت کاربر، تاریخ تولد، آدرس
	 .پیغامگیرها و ...) را مشاهده نمایید. آدرس IP که در این لیست نمایش داده می شود،
	آخرین آدرس IP است که کاربر با آن در انجمن جاضر شده است. همچنین با کلیک روی این
	آدرس میتوانید موقعیت مکانی کاربر را نیز ردیابی نمایید.';

$helptxt['ban_members'] = '<b>منع کاربران</b><br />
	در این قسمت شما می توانید از امکان &quot;منع کاربران&quot; استفاده نمایید. با استفاده از منع کاربران
	براحتی می توانید به لحاظ امنیتی یا هر دلیل دیگر هر کاربری را که میخواهید منع نموده و اجازه ورود این کاربران
	را به انجمن بگیرید. برای مثال کاربری قوانین سایت را رعایت نکرده و بصورت مستمر در سطح انجان و بین کاربران
	 ایجاد بی نظمی میکند. در این قبیل موارد براحتی با مراجعه به این قسمت براحتی میتوانید با استفاده از ورودی هایی
	همچون &quot;آدرس IP&quot; یا &quot;نام کاربری&quot; یا &quot;نام میزبان اینترنتی&quot; و ... کاربر را منع نمایید.
	همچنین در این قسمت، لیستی از فعالیت کاربرانی منع شده ثبت می شود.';

$helptxt['modsettings'] = '<b>ویرایش تنظیمات عمومی انجمن ها</b><br />
	تنظیمات بخشهای مختلفی از انجمن در این قسمت قرار دارد. در کنار هر یک از موارد، علامت راهنمایی وجود دارد که درصورت
	برخورد با مشکل میتوانید از راهنمایی های این قسمت استفاده نمایید.';

$helptxt['number_format'] = '<b>فرمت نمایش اعداد</b><br />
	در این قسمت شما میتوانید فرمت نمایش اعداد را در انجمن انتخاب کنید. <br/><br />
	<i>(توجه: در این گزینه ها &quot; . &quot; به معنی اعشار و &quot; , &quot;به منعی جدا کردن است.)</i>';

$helptxt['time_format'] = '<b>فرمت نمایش تاریخ</b><br />
	در این قسمت براحتی با استفاده از فرمت های نمایش تابع <a href="http://www.php.net/manual/function.strftime.php" target="_blank">strftime</a> میتوانید نحوه نمایش تاریخ و زمان
	را در انجمن تغییر دهید. در زیر لیست فرمت های خروجی این تابع را مشاهده می نمایید. توجه داشته باشید که برای نمایش تاریخ و زمان فقط باید از
	این فرمت ها استفاده نمایید.<br />
	<br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - نام روزهای هفته<br />
	&nbsp;&nbsp;%A - نام کامل روزهای هفته<br />
	&nbsp;&nbsp;%b - نام کوتاه ماه جاری<br />
	&nbsp;&nbsp;%B - نام کامل ماه جاری<br />
	&nbsp;&nbsp;%d - چندمین روز از ماه (01 تا 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - ترکیب %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - چندمین روز از ماه (1 تا 31) <br />
	&nbsp;&nbsp;%H - ساعت بصورت 24- (از 00 تا 23) <br />
	&nbsp;&nbsp;%I - ساعت بصورت 12- (از 01 تا 12) <br />
	&nbsp;&nbsp;%m - ماه بصورت شماره (01 تا 12) <br />
	&nbsp;&nbsp;%M - شماره دقیقه<br />
	&nbsp;&nbsp;%p - زمان قبل از ظهر یا بعد از ظهر<br />
	&nbsp;&nbsp;%R<b>*</b> - زمان در 24 ساعت <br />
	&nbsp;&nbsp;%S - نمایش ثانیه<br />
	&nbsp;&nbsp;%T<b>*</b> - زمان جاری، بصورت ترکیب %H:%M:%S <br />
	&nbsp;&nbsp;%y - سال با 2 حرف (00 to 84) <br />
	&nbsp;&nbsp;%Y - سال با 4 عدد بصورت 1384 <br />
	&nbsp;&nbsp;%Z - نام زمان محلی <br />
	&nbsp;&nbsp;%% - یک جایگزین کاراکتر فاصله <br />
	<br />
	<i>* این امکان در سرورهای ویندوز وجود ندارد.</i></span>';

$helptxt['live_news'] = '<b>خبرهای جدید برنامه</b><br>
	در این قسمت برنامه بصورت خودکار به سایت <a href="http://www.simplemachines.org/">www.simplemachines.org</a>
	 متصل شده و آخرین اخبار و بروز رسانی های برنامه را برای شما نمایش می دهد.';

$helptxt['registrations'] = '<b>ثبت نام کاربر جدید</b><br />
	در این قسمت کاربر جدیدی را میتوانید عضو انجمن نمایید. برای این کار از فرم مربوطه استفاده نموده و
	نام کاربرای و آدرس ایمیل و رمز عبور کاربر را انتخاب نمایید. همچنین در این قسمت از طریق منوی
	کاربری میتوانید این کاربر را عضو یکی از گروه های کاربری نمایید.<br />
	بدلیل آنکه تعداد انجمن ها همیشه یکی نیست، نام گروه کاربری مدیر انجمن در این لیست وجود
	ندارد. درصورتی که میخواهید این کاربر مدیر یکی از انجمن ها باشد به قسمت تنظیمات همان انجمن
	رفته و نام کاربری ایشان را در لیست مدیران همان انجمن اضافه کنید.';

$helptxt['modlog'] = '<b>سیستم گزارش به مدیران</b><br />
	سیستم گزارش به مدیران عنوان یکی از ویژگی های SMF است که کاربران می توانند در مورد هر یک از موضوع ها و ارسال های دیگر کاربران
	توضیحی را به مدیر ارائه دهند';
$helptxt['error_log'] = '<b>گزارش خطاها</b><br />
	در این قسمت لیست خطاهای انجمن ذخیره و ثبت میشود. برای مثال اگر کاربری برای ورود به انجمن روز عبور خود را اشتباه وارد کند،
	پیغام &quot;رمزعبور وارد شده صحیح نیست&quot; برای کاربر نمایش داده خواهد شد. حال برای کنترل بیشتر و با خبر شدن مدیر از
	این موضوع و اینکه ممکن است شخص دیگری، قصد دستبرد در حساب کاربری کاربری داشته باشد یا اینکه کاربر رمز عبور خود را فراموش کرده باشد،
	زمان و آدرس IP این شخص ذخیره شده و از طریق این قسمت قابل کنترل میباشد.';
$helptxt['theme_settings'] = '<b>تنظیمات قالب</b><br />
	قالب جاری انجمن همان قالبی است که هم اکنون صفحات انجمن با آن نمایش داده می شود. در این قسمت شما میتوانید تنظیمات این قالب را مدیریت نمایید. برای مثال می توانید آدرس پوشه قالب ها یا تصاویر را تغییر دهید.';
$helptxt['smileys'] = '<b>مدیریت صورتک ها</b><br />
	در این قسمت شما می توانید صورتک های انجمن را مدیریت نموده و تنظیمات آنها را تغییر دهید و یا صورتک های جدیدی را نصب و یا حذف نمایید.';
$helptxt['calendar'] = '<b>مدیریت تقویم</b><br />
	در اینجا تمامی تنظیمات مرتبط با تقویم را می توانید مدیریت کنید.';

$helptxt['serversettings'] = '<b>تنظیمات سرور</b><br />
	در اینجا شما می توانید انجمن خود را پیکربندی نمایید. این بخش شامل پایگاه داده ، آدرس وب و دیگر آیتم ها مهم از جمله تنظیمات ایمیل و ذخیره ساز می باشد. تنظیمات اشتباه در این قسمت می تواند انجمن را دچار ایرادات اساسی کند.';

$helptxt['topicSummaryPosts'] = 'تعداد ارسال هایی که میخواهید در یک موضوع نمایش داده شود را می توانید از این قسمت انتخاب نمایید.';
$helptxt['enableAllMessages'] = 'تنظیم <em>حداکثر</em> تعداد ارسال های یک تاپیک که می تواند همه لینک ها را نمایش دهد. این مقدار باید کمتر از تعداد نمایش ارسال ها در یک صفحه باشد.';
$helptxt['enableStickyTopics'] = 'در صفحات داخلی انجمن، موضوعات بر اساس الویت زمان ارسال، مرتب می شوند. اما برخی مواقع
	ممکن است شما نیاز داشته باشید تا موضوعی برای مدتی طولانی بالاتر از همه موضوعات قرار گیرد تا همه کاربرانی که وارد
	انجمن می شوند، بالاتر از همه موضوعات، موضوع دلخواه و البته مهم شما را ببینند. این موضوع می توانید برای مثال قوانین آن
	بخش باشد که برای مدتی طولانی و یا همیشه باید بالاتر از همه موضوعات قرار بگیرد. این عمل توسط مدیر اصلی سایت یا
	مدیر آن انجمن و در صورت تعیین دسترسی توسط کاربران صورت می گیرد.<br />
	در این قسمت شما با فعال کردن این گزینه به مدیران و کاربران این امکان را می دهید که موضوعات دلخواه را بصورت مهم تعیین کنند و
	این موضوع یا موضوعات بالاتر از همه موضوعات قرار بگیرد.';
$helptxt['allow_guestAccess'] = 'با غیرفعال کردن این گزینه دسترسی مهمان ها محدود می شود اما می توانند کارهای اصلی مثل : ورود ، ثبت نام و یاداوری رمز عبور را انجام دهند.';
$helptxt['userLanguage'] = 'فعال بودن این گزینه به کاربران این امکان را میدهد که از قسمت مشخصات کاربری خود، در صورت چند زبانه بودن انجمن
	زبان دلخواه را انتخاب نماییند.';
$helptxt['trackStats'] = 'آمار :<br />این گزینه به کاربران امکان می دهد تا جدیدترین موضوع های ارسال شده به انجمن و سایر آمار متفرقه را مشاهده نمایند.<hr />
		سایر ارقام و اعداد:<br /> سایر آمار و ارقام در مورد انجمن.';
$helptxt['titlesEnable'] = 'نام مستعار در حقیقت لقبی است که کاربر برای خود انتخاب می کند. این نام مستعار یا لقب کاربر همیشه
	 در سمت راست ارسال کاربر، در زیر نام کاربری وی نمایش داده خواهد شد. نام مستعار از قسمت &quot;ویرایش مشخصات شخصی&quot; قابل انتخاب است و
	در صورت فعال بودن این گزینه همه کاربران، هر لقب یا نام مستعاری را می توانند برای خود انتخاب کنند.<br /><br />
	مثال:<br />
	<b>Arian</b><br />
	<i>پسر خوب</i><br /><br />
	در این مثال <b>&quot;Arian&quot;</b> نام کاربری و <i>&quot;پسر خوب&quot;</i>  نام مستعار یا لقب کاربر است.';
$helptxt['topbottomEnable'] = 'در صورت فعال بودن این گزینه کلید های &quot;بروبالا&quot; و &quot;برو پایین&quot; در قسمت بالا و پایین
	صفحات داخلی انجمن و صفحات موضوع ظاهر خواهد شد که کاربران با استفاده از این کلیدها می توانند به بالا یا انتهای صفحه مراجعه
	کنند.';
$helptxt['onlineEnable'] = 'این گزینه حاضر یا غایب بودن (آنلاین و آفلاین) بودن کاربر را در ارسال ها و پیغام خصوصی ها نمایش می دهد.';
$helptxt['todayMod'] = 'در این قسمت می توانید بجای استفاده از تاریخ و زمان کامل آخرین ارسالها، برای ارسال هایی که در روز جاری و یا روز قبل ارسال شده اند از عبارات
	&quot;امروز&quot; و &quot;دیروز&quot; بجای تاریخ کامل ارسال ها استفاده کنید.';
$helptxt['enablePreviousNext'] = 'با انتخاب این گزینه، در صفحات داخلی دیدن موضوع لینکهای &quot;بعدی&quot; و &quot;قبلی&quot; برای دیدن موضوعات مربوطه نمایش داده می شود.';
$helptxt['pollMode'] = 'در این قسمت شما میتوانید نظرسنجی های انجمن را کنترل نمایید.<br /><br />
	اگر گزینه &quot;غیرفعال کردن نظرسنجی ها&quot; را انتخاب نمایید همه نظرسنجی هایی که تاکنون در انجمن ایجاد شده است
	مخفی خواهند شد و هیچ کاربری توانایی ایجاد نظرسنجی جدید را نخواهد داشد.<br /><br />
	در صورتی که گزینه &quot;فعال کردن نظرسنجی ها&quot; را انتخاب نمایید&quot; همه نظرسنجی ها برای کاربران نمایش داده
	شده و کاربران می توانند نظرسنجی جدیدی را ایجاد کنند.<br /><br />
	اما در صورتی که گزینه &quot;غیرفعال، نمایش همه نظرسنجی های ارسال شده تا این لحظه&quot; را انتخاب نمایید، کاربران اجازه ایجاد نظرسنجی جدیدی را ندارند؛ اما
	همه نظرسنجی هایی که تاکنون ارسال شده است فعال بوده و کاربران توانایی مشاهده و شرکت در آنها را دارند.';
$helptxt['enableVBStyleLogin'] = 'با انتخاب این گزینه فرم کوچکی برای ورود به انجمن، در تمام صفحات نمایش داده خواهد شد.';
$helptxt['enableCompressedOutput'] = 'این گزینه برای ذخیره فایل ها و صفحات خروجی انجمن، و صرفه جویی و ذخیره پهنای باند مفید است. برای فعال بودن و اجرای این ویژگی باید zlib در سرور شما نصب و فعال باشد.';
$helptxt['databaseSession_enable'] = 'این گزینه بعنوان تنظیم کننده و مرتب کننده پایگاه داده عمل می کند و فعال بودن این گزینه برای سرعت بخشیدن به انجمن ها و ارتباط سریع بین برنامه و بانک اطلاعاتی مناسب است.<br /><br />توجه : در صورتی که session.auto_start فعال (on) باشد این گزینه قادر به اجرا نخواهد بود.';
$helptxt['databaseSession_loose'] = 'فعال بودن این گزینه موجب کاهش پهنای باند انجمن شما می شود. این گزینه در واقع از ذخیره صفحات و فایل های انجمن بخصوص تصاویر در قسمت کلاینت، و همچنین از کش (Cache) شدن خودکار آن جلوگیری می کند. اما در صورت عدم انتخاب این گزینه ممکن است کاربران از ارسال های جدید و آیکن موضوعات و انجمن های دارای ارسال جدید 		بی خبر باشند.';
$helptxt['databaseSession_lifetime'] = 'در این برخی شرایط مدت زمان ارتباط سیستم کلاینت با سرور طولانی مدت می شود. برای مثال کاربر موضوع ای را ارسال می کند. اما بدلایل مختلف زمان ارسال و دریافت اطلاعات از سرور به کلاینت و برعکس، مدت زیادی طول می کشد. در این موارد پیغام خطای &quot;Time Out&quot; یا &quot;اتمام زمان مجاز&quot; به کاربر نمایش داده می شود
	که کاربر را ملزم به برگشت و ارسال مجدد موضوع خود یا ... می کند. در این گزینه شما مقدار ثانیه های این مدت را تعیین می کنید.';
$helptxt['enableErrorLogging'] = 'در این قسمت لیست خطاهای انجمن از جمله کاربرانی که رمزعبور خود را اشتباه وارد می کنند و ... ذخیره و ثبت می شود.';
$helptxt['allow_disableAnnounce'] = 'این گزینه به کاربران اجازه می دهد تا باخبر سازی خود را از ارسال موضوع یا ارسال جدید به انجمن ها و موضوعات، فعال یا غیرفعال کنند';
$helptxt['disallow_sendBody'] = 'این گزینه متن پاسخ ها را در ایمیل باخبرسازی حذف می کند.<br /><br />خیلی اوقات, اعضا به ایمیل های باخبرسازی  جواب می دهند, این بدین معناست که مدیر پاسخ ها را دریافت میکند.';
$helptxt['compactTopicPagesEnable'] = 'در این قسمت فرمت و نحوه نمایش اعداد را در انجمن انتخاب می نماید<br /><br /> مثال :<br />
		در صورتی که عدد 3 را انتخاب کنید، اعداد به صورت  1 ... 4 [5] 6 ... 9 نمایش داده خواهد شد.<br />
		 در صورتی که عدد 5 را انتخاب کنید، اعداد به صورت  1 ... 3 4 [5] 6 7 ... 9 نمایش داده خواهد شد.';
$helptxt['timeLoadPageEnable'] = 'با انتخاب این گزینه مدت زمان لود صفحات انجمن در قسمت پایین هر صفحه نمایش داده می شود.';
$helptxt['removeNestedQuotes'] = 'این گزینه فقط برای حفظ زیبایی صفحه بوده و اجازه ارسال دو نقل قول در داخل یکدیگر را نمیدهد و به این صورت از به هم خوردگی صفحات جلوگیری میکند. ';
$helptxt['simpleSearch'] = 'با انتخاب این گزینه فرم کوچکی برای جستجو نمایش داده شده و لینکی برای جستجوی پیشرفته ایجاد خواهد شد. ';
$helptxt['max_image_width'] = 'برای جلوگیری از بهم خوردگی صفحات، می توانید حداکثر طول و عرض تصاویر ارسال شده توسط کاربران را تعیین نمایید.
	با انتخاب این گزینه در صورت بزرگ بودن تصویر ، اندازه آن به اندازه های انتخابی شما تغییر خواهد نمود.';
$helptxt['mail_type'] = 'در این قسمت برنامه ارسال ایمیل انجمن را انتخاب و نام کاربری و رمزعبور و سایر تنظیمات اتصال به سرور ارسال ایمیل را تعیین می نمایید.';
$helptxt['attachmentEnable'] = 'در این قسمت اجازه پیوست فایل به موضوع را تعیین می نماید. در صورتی که گزینه &quot;غیر فعال کردن ارسال فایل های پیوست&quot; انتخاب شود
	کاربران اجازه پیوست فایل جدیدی را نخواهند داشت. اما در صورتی که گزینه &quot;غیر فعال کردن ارسال پیوست ارسال جدید&quot; انتخاب شود کاربران اجازه پیوست فایل جدیدی را 	نخواهند داشت و همه لینکهای فایلهای پیوستی که تاکنون ارسال شده اند مخفی خواهند شد. اما در صورتی که گزینه &quot;فعال کردن همه فایل های پیوست ارسال&quot; انتخاب
	شود، همه لینکها فعال شده و کاربران مجاز به ارسال فایل پیوست ارسال جدید خواهند بود.';
$helptxt['karmaMode'] = 'در هر جمعی نیاز به رأی گیری و انتخاب بهترین وجود دارد. ممکن است برای انجمن خود، نیاز به انتخاب مدیر یا همکار و یا مسئول برخی امور داشته باشید.
	در این گونه موارد SMF به شما این امکان را می دهد تا کاربران انجمنتان به یکدیگر رأی مثبت و منفی دهند. با این کار علاوه بر انتخاب کاربران مفید و محبوب برای همه می توانید
	به این هدف خود دسترسی پیدا کنید.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'در این گزینه فعال یا غیر فعال بودن تقویم انجمن را تعیین می نمایید.';
$helptxt['localCookies'] = 'SMF از کوکی ها برای به بخاطر سپردن کاربران وارد شده استفاده می کند.
	این کوکی ها بصورت معمولی بصورت (myserver.com) و یا بصورت (myserver.com/path/to/forum) ذخیره می شوند.<br />
	در صورتی که کاربران شما در ورود و خروج به انجمن با مشکل روبرو هستند و یا ناخواسته از انجمن خارج می شوند، حتما این گزینه
	را فعال نموده و انتخاب کنید.<hr />
	اگر از سرورهای همگانی و رایگان یا اشتراک فایل (مانند Tripod) استفاده میکنید حتما این گزینه را فعال کنید.<hr />
	اگر انجمن های شما از داخل یک پوشه مانند www.myserver.com/forum, است، صفحاتی مثل www.myserver.com/index.php
	قادر به بازخوانی مشخصات کاربری و به خاطر سپردن ورود و خروج شما و کاربران نخواهد بود.';
$helptxt['enableBBC'] = 'با انتخاب این گزینه، کاربران میتوانند در ارسال های خود از کــــدهای BB استفاده نمایند.
	همچنین در قسمت بالای ویرایشگر، آیکن ها و تنظیمات استفاده از این کدها فعال می شود.';
$helptxt['time_offset'] = 'این گزینه برای بیشتر مدیران، بخصوص مدیران سایت های ایرانی گزینه پر استفاده ای خواهد بود.
	برای مثال انجمن شما از کشور ایران مدیریت می شود و بیشتر کاربران سایت و انجمن شما از ساعت رسمی تهران
	استفاده می نمایند. حال اگر سرور سایت شما در کشور دیگری باشد، ساعت و دقایق آن بر حسب همان کشور
	یا گرینویچ تنظیم شده است. در این قبیل موارد با استفاده از این گزینه میتوانید اختلاف زمانی سایت خودتان را با ساعت سرور تعیین نماید و به این وسیله
	ساعت و دقایق انجمن به وقت تهران ثبت خواهند شد. تهران مثبت 3 ساعت و 30 دقیقه (3.30+) با گرینویچ لندن اختلاف زمانی دارد.';
$helptxt['spamWaitTime'] = 'در این گزینه شما مدت زمان فاصله بین 2 ارسال را تعیین می کنید. برای مثال اگر "5ثانیه" را در این گزینه انتخاب کنید،
	هیچ کاربری نمی تواند در مدت کمتر از 5 ثانیه 2 ارسال پی در پی داشته باشد و برای ارسال دوم باید به مدت 5 ثانیه صبر کنید. با این گزینه
	تا حدی میتوان از ارسال موضوع های هرزنامه ها در انجمن جلوگیری کرد.';

$helptxt['enablePostHTML'] = 'با فعال شدن این گزینه کاربران میتوانند از تگ های HTML از جمله: &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; و غیره بصورت معمولی در ارسال های خود استفاده کنند.';

$helptxt['themes'] = 'در این قسمت می توانید تنظیمات قالب انجمن را مدیریت نموده و قالب انجمن را تغییر دهید. همچنین می توانید قالب های
	جدیدی را نصب و یا آنها را حذف نمایید.';
$helptxt['theme_install'] = 'در این قسمت می توانید با وارد کردن مسیر قالبی که قبلا در سرور آپلود و ایجاد شده است، قالب جدیدی را نصب نمایید. یا از طریق فرم مربوطه
	قالب را آپلود نمایید. بدلیل فارسی بودن
	زبان انجمن تغییراتی در قالب های فارسی ایجاد شده است. به همین دلیل برای درست نمایش داده شدن و مرتب بودن انجمن توصیه میکنیم از قالب های فارسی
	 پرشین تمز یا سایر قالب هایی که نکات مهم ترجمه به زبان فارسی در آن رعایت شده است استفاده کنید.<br /><br />توجه : در مسیر وارد شده حتما باید فایل <tt>theme_info.xml</tt>
	وجود داشته باشد.';
$helptxt['enableEmbeddedFlash'] = 'با فعال کردن این گزینه کاربران میتوانند در ارسال های خود فایل فلش را نیز قرار دهند. بدلیل اینکه ممکن است این فایل، فایل های آلوده دیگری را بر روی سیستم کاربران اجرا کنند، توصیه میشود که این گزینه غیرفعال باشد.';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'با انتخاب این گزینه کاربران می توانند <a href="' . $scripturl . '?action=.xml" target="_blank">نسخه XML آخرین ارسال ها</a> به انجمن را 	دریافت نمایند.<br />گزینه انتخاب کراکتر نیز برای نمایش طول متن موضوع استفاده می شود.';
$helptxt['hotTopicPosts'] = 'در این گزینه تعداد پاسخها برای انتخاب موضوعات &quot;پرطرفدار&quot; و &quot;خیلی پزطرفدار&quot; را تعیین می کنید.';
$helptxt['globalCookies'] = 'برای مثال اگر آدرس سایت شما www.simplemachines.org<br /><br />
	و آدرس انجمن های سایت شما	forum.simplemachines.org باشد،<br /><br />
	 با انتخاب این گزینه شما به ایجاد کوکی ها با آدرس انجمن ها دستیابی پیدا می کنید.';
$helptxt['securityDisable'] = 'این گزینه درخواست رمزعبور مدیر را که برای امنیت بیشتر، به هنگام ورود به مرکز مدیریت سوال می کند را غیر فعال می کند.';
$helptxt['securityDisable_why'] = 'در این قسمت باید رمز عبوری را که به هنگام ورود از آن استفاده می نماید را وارد نمایید.این رمز عبور فقط برای امنیت بیشتر و اطمینان از اینکه مدیر اصلی وارد
	مرکز مدیریت می شود پرسیده می شود.';
$helptxt['emailmembers'] = 'در منت پیغام خودتان می توانید از توابع زیر استفاده کنید:<br />
	{$board_url} - آدرس URL انجمن شما.<br />
	{$current_time} - زمان فعلی.<br />
	{$member.email} - آدرس ایمیل کاربر گیرنده.<br />
	{$member.link} - لینک پروفایل کاربر.<br />
	{$member.id} - شماره id کاربر.<br />
	{$member.name} - نام کاربر.<br />
	{$latest_member.link} - لینک به پروفایل آخرین کاربر عضو شده.<br />
	{$latest_member.id} - شماره id آخرین کاربر عضو شده.<br />
	{$latest_member.name} - نام آخرین کاربر عضو شده.';
$helptxt['attachmentEncryptFilenames'] = 'برای مثال کاربر اول فایلی با نام file1.txt را به همراه نامه خود پیوست می کند کاربر دوم نیز قصد پیوست فایلی با همان نام را دارد
	در صورتی که این گزینه انتخاب شده باشد، در این گونه موارد برنامه به صورت خودکار، فایلهای هم نام را تغییر نام داده و به این صورت هیچ خطایی از بابت هم نام بودن فایل
	به کاربر نمایش داده نخواهد شد. اما در صورتی که نام انتخاب شده برای فایلهای پیوست مهم باشد، این گزینه باید غیر فعال باشد. با این کار فایلها با نام اصلی خود در سرور
	آپلود می شوند و برنامه هیچ گونه دخالتی در نام فایل و تغییر نام خودکار آن نخواهد داشت.';

$helptxt['failed_login_threshold'] = 'برای مثال اگر شما این گزینه را عدد 3 را انتخاب کنید، درصورتی که کاربری در فرم ورود، نام کاربری و یا رمز عبور خود را
	اشتباه وارد کند، بعد از 3 بار تکرار مجدد و مرتب این عمل، بصورت خودکار صفحه " رمز عبورم را فراموش کرده ام " برای کاربر نمایش داده خواهد شد
	و کاربر میتواند با استفاده از این صفحه رمزعبور خود را مجددا بازیابی کند.';
$helptxt['oldTopicDays'] = ' زمانی که این گزینه فعال می شود ، هنگام پاسخ دادن به موضوعی که از تاریخ مشخص شده بیشتر گذاشته باشد هشدار می دهد.با قرار دادن مقدار صفر آنرا غیرفعال کنید ! ';
$helptxt['edit_wait_time'] = 'مدت زمانی که کاربر پس از ویرایش یک ارسال باید صبر کند تا ارسال دیگری را ویرایش کند.';
$helptxt['edit_disable_time'] = 'مدت زمانی به دقیقا که کاربر می تواند ارسال خود را ویرایش نماید. 0 برای غیرفعال. <br /><br /><i>توجه: این تنظیم تغییری بر سطوح دسترسی کاربران ایجاد نمی کند.</i>';
$helptxt['enableSpellChecking'] = 'این گزینه غلط یاب (spell checking) متن را فعال می نماید.برای فعال کردن این ویژگی باید pspell library بر روی سرور شما قبلا نصب باشد و استفاده از آن در قسمت تنظیمات PHP فعال باشد. سرور شما قادر به اجرای این ویژگی <b>' . (function_exists('pspell_new') == 1 ? 'می باشد' : 'نمی باشد') . ' </b>.';
$helptxt['lastActive'] = 'هر چند ثانیه یک بار برنامه بصورت خودکار نام و تعداد کاربران حاضر در انجمن را ثبت و ذخیره می کند.
	با انتخاب این گزینه شما تعداد دقایق این جستجو را تعیین می کنید. برای مثال اگر عدد 15 را انتخاب کرده باشید،
	هر 15 دقیقه یک بار تعداد و مشخصات کاربران حاضر در انجمن شمارش میشود.';

$helptxt['autoOptDatabase'] = 'در این گزینه مدت زمان ترمیم و فشرده سازی بانک اطلاعاتی را تعیین می نمایید. درصورتی که عدد 1 را انتخاب نمایید،
	برنامه بصورت روزانه بانک اطلاعاتی برنامه را فشرده خواهد نمود. همچنین شما می توانید این انتخاب را بر اساس تعداد کاربران حاضر در انجمن نیز انجام دهید.
	بصورتی که اگر تعداد کاربران آنلاین بیشتر از عدد انتخاب شده باشد، برنامه شروع به فشرده سازی پایگاه داده خواهد نمود.';
$helptxt['autoFixDatabase'] = 'این گزینه بصورت خودکار جداول شکسته شده بانک اطلاعاتی را ترمیم می کند.فعال بودن این گزینه مفید
	و سودمند است. زیرا تنها راه برای ترمیم جدول های شکسته شده و نامنظم است و همچنین در صورت اشکال و بروز خطا در بانک
	اطلاعاتی انجمن سایت شما بی خبر غیر فعال نشده و در صورت مشاهده به هم ریختگی در بانک اطلاعاتی توسط ایمیل به شما اطلاع
	داده خواهد شد.';

$helptxt['enableParticipation'] = 'در این گزینه، آیکن کوچکی در صفحه موضوع نمایش داده می شود.';

$helptxt['db_persist'] = 'تماس همیشگی با بانک اطلاعاتی.  چنانچه از هاست های رایگان استفاده می کنید و مدیریت کلی بانک اطلاعاتی در دسترس شما نیست باید از آن استفاده کنید.';

$helptxt['queryless_urls'] = 'این گزینه آدرس لینک های انجمن را تغییر داده و خروجی صفحات را به <span dir=ltr>.html</span> تبدیل می کند.<br /><br />
	این ویژگی در سرور شما وجود ' . (strpos(php_sapi_name(), 'apache') !== false ? 'دارد' : 'ندارد') . '.';
$helptxt['countChildPosts'] = 'با انتخاب این گزینه موضوع ها و ارسال های زیر انجمن ها در هنگام نمایش انجمن اصلی در صفحه اول انجمن نمایش داده می شود';
$helptxt['fixLongWords'] = 'این گزینه کلمات بلندتر از طول استاندارد را به قطعات کوچکتر تقسیم می کند.<br /><br />
	توجه : فعال کردن این گزینه توصیه نمی شود.';

$helptxt['who_enabled'] = 'این گزینه به کاربران امکان می دهد تا لیست کاربران حاضر در انجمن را مشاهده نمایند.';

$helptxt['recycle_enable'] = 'در این قسمت می توانید انجمنی را برای آرشیو موضوع های حذف شده ایجاد نمایید. در این صورت همه موضوع های حذف شده بصورت خودکار به این انجمن منتقل خواهند
	شد.';

$helptxt['enableReportPM'] = 'این گزینه این امکان را می دهد که کاربران پیغام های خصوصی دریافتی را به تیم مدیریت گزارش دهند. این امکان کمک می کند تا توهینی از طریق پیغام خصوصی صورت نگیرد.';
$helptxt['max_pm_recipients'] = 'این گزینه این امکان را می دهد تا حداکثر تعداد پیغام های خصوصی دریافتی و ارسالی کاربران محدود شود.این گزینه برای جلوگیری از هرزنامه ها در سیستم پیغام خصوصی مفید است.پیغام های خصوصی از این قاعده مستثنی می باشند. برای نامحدود کردن عدد صفر را وارد نمایید.';
$helptxt['pm_posts_verification'] = 'این تنظیم موجب می شود که این کد امنیتی هر بار هنگام ارسال پیغام خصوصی ظاهر شود. کاربرانی که ارسالی کمتر از این مقدار داشته باشند برای ارسال پیغام خصوصی باید کدامنیتی را وارد نمایند. این امکان جلوی اسکریپت های هرزنامه را می گیرد.';
$helptxt['pm_posts_per_hour'] = 'این گزینه تعداد پیغام های خصوصی ارسالی در یک ساعت را محدود می کند. مدیران از این قاعده مستثنی هستند.';

$helptxt['default_personalText'] = 'هر کاربری میتواند بعد از ثبت نام در انجمن، وارد قسمت مشخصات خود شده و بیوگرافی کوتاهی را برای خود انتخاب کند.
	در صورتی که شما متن یا نوشته ای را در کادر مربوطه وارد کنید، این متن بجای بیوگرافی کاربران قرار خواهد گرفت. همیشه بیاد داشته باشید که این
	بیوگرافی و متنی که شما انتخاب میکنید بعدا توسط کاربر قابل ویرایش و حذف می باشد.';

$helptxt['modlog_enabled'] = 'با فعال شدن این گزینه کاربران می توانند گزارش یا توضیحی در مورد ارسالی را به مدیر انجمن ارسال کنند. این توضیح می تواند درخواست یا شکایت
	یا توضیح تکمیلی باشد.';

$helptxt['guest_hideContacts'] = 'بصورت پیشفرض هر بازدیدکننده ای که بعنوان کاربر مهمان وارد انجمن شود، توانایی دیدن تمامی مشخصات شخصی کاربران عضو شده
	از جمله آدرس ایمیل، شماره و نام مستعار در پیغامگیرها و مسنجرها، تاریخ تولد و محل سکونت و ... را دارد. اما در صورتی که این گزینه انتخاب شود؛ این امکان از
	کاربران مهمان سلب میشود.';

$helptxt['registration_method'] = 'این گزینه روش عضویت کاربر جدید را تعیین می کند. در زیر عنوان و توضیحات این روش ها را مشاهده مینمایید :<br /><br />
	<ul>
		<li>
			<b>غیر فعال شدن عضویت کاربر جدید</b><br />
				با انتخاب این گزینه امکان عضویت کاربر جدید غیرفعال شده و هیچ کاربری توانایی عضویت در انجمن ها را نخواهد داشت. <br /><br />
		</li><li>
			<b>عضویت بلافاصله بعد از تکمیل فرم</b><br />
				در این گزینه کاربر بلافاصله بعد از تکمیل فرم عضویت، قادر به ورود و فعالیت در انجمن می باشد.<br /><br />
		</li><li>
			<b>فعال سازی حساب کاربری توسط کاربر</b><br />
				در این گزینه بعد از تکمیل فرم ثبت نام، لینک فعال سازی حساب کاربری کاربر به آدرس ایمیل وی ارسال خواهد شد و بعد از کلیک بر روی
				این لینک، حساب کاربری کاربر فعال شده و کاربر قادر به ورود و فعالیت در انجمن خواهد شد.<br /><br />
		</li><li>
			<b>فعال سازی توسط مدیر</b><br />
				با انتخاب این گزینه حساب کاربری کاربر زمانی که توسط مدیر تایید شود فعال خواهد شد.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'با فعال بودن این گزینه درصورتی که کاربری آدرس ایمیل خود را از قسمت مشخصات شخصی خود تغییر دهد، نام کاربری وی بطور خودکار 	غیرفعال شده و رمزعبور جدیدی به آدرس ایمیل جدید کاربر فرستاده می شود و کاربر برای ورود و فعالیت مجدد در انجمن نیاز به فعال سازی حساب کاربری خود دارد.';
$helptxt['send_welcomeEmail'] = 'با انتخاب این گزینه برای کاربرانی که تازه عضو انجمن شده اند ایمیلی با عوان خوش آمد گویی و تشکر بابت عضویت، ارسال خواهد شد.';
$helptxt['password_strength'] = 'این گزینه میزان استحکام رمزعبور کاربران شما را تعیین میکند:
	<ul>
		<li><b>پایین:</b> رمزعبور حداقل باید از چهار کاراکتر مجاز تشکیل شده باشد.</li>
		<li><b>متوسط:</b> درازای رمز عبور باید کمتر از هشت کاراکتر باشد و نمی تواند قسمتی از نام کاربری و آدرس ایمیل باشد.</li>
		<li><b>بالا:</b> تمامی شرایط حالت متوسط، علاوه اینکه در محتوای رمز عبور حتما باید از اعداد و حرف ها استفاده شود.</li>
	</ul>';

$helptxt['coppaAge'] = 'حداقل سن کاربر را برای عضویت وارد نمایید';
$helptxt['coppaType'] = 'اگر گزینه بالا فعال باشد این را هم می توانید فعال کنید.';
$helptxt['coppaPost'] = 'مشخصات والدین را برای تماس با این قسمت وارد نمایید.';

$helptxt['allow_hideOnline'] = 'مخفی کردن آنلاین بودن';
$helptxt['allow_hideEmail'] = 'مخفی کردن ادرس ایمیل';

$helptxt['latest_support'] = 'این پنل برخی از مشلات کاربران را با راه حل های آن ازطریق اتصال به simplemachines.org برای شما نمایان می کند';
$helptxt['latest_packages'] = 'از اینجا میتوانید آخرین بسته های <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> را ملاحظه کنید.';
$helptxt['latest_themes'] = 'از اینجا آخرین قالب ها را در <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> ملاحظه می کنید.';

$helptxt['secret_why_blank'] = 'اگر این فیلد خالی باشد گزینه سوال امنیتی غیرفعال خواهد بود اما با وارد کردن این فیلد در صورت فراموش کردن رمزعبور می توانید با وارد کردن سوال خود رمزعبور خود را بازیابی نمایید.';
$helptxt['moderator_why_missing'] = 'شما باید مدیر انجمن را برای هر انجمن به صورت جداگانه انتخاب نمایید';

$helptxt['permissions'] = 'از اینجا می توانید دسترسی کاربران را ویرایش کنید';
$helptxt['permissions_board'] = 'از اینجا می توانید دسترسی کاربران را ویرایش کنید';
$helptxt['permissions_quickgroups'] = 'از اینجا می توانید دسترسی کاربران را ویرایش کنید';
$helptxt['permissions_deny'] = 'از اینجا می توانید دسترسی کاربران را ویرایش کنید';
$helptxt['permissions_postgroups'] = 'از اینجا می توانید دسترسی کاربران را ویرایش کنید';
$helptxt['permissions_by_board'] = 'از اینجا می توانید دسترسی کاربران را ویرایش کنید';
$helptxt['membergroup_guests'] = 'گروه کاربری مهمان همه کاربرانی هستند که وارد نشده اند.';
$helptxt['membergroup_regular_members'] = 'اینها کاربرانی هستند که وارد شده اند اما برای هیچ گروهی مشخص نشده اند';
$helptxt['membergroup_administrator'] = 'این کاربران اجازه مدیریت کل انجمن را دارند.';
$helptxt['membergroup_moderator'] = 'این کاربران مدیران انجمن های شما هستند';
$helptxt['membergroups'] = 'در SMF دو نوع گروه کاربری وجود دارد. برای درک مفهوم این دو گروه به توضیحات زیر توجه کنید:
	<ul>
		<li><b>گروه های ثابت : </b> در واقع این گروه کادر ثابت انجمن ها هستند. در این گروه، کاربران بطور خودکار نمی توانند عضو گروه شوند.
		یکی دیگر از ویژگی های این نوع گروه ها شرکت و همکاری در نظم و امور اصلی سایت از جمله مدیریت آن هستند. </li><br /><br />
		<li><b>گروه ها ارسال موضوع :</b> در این نوع گروه ها کاربران بر اساس تعداد ارسال و فعالیت در انجمن پیشرفت درجه نموده و بصورت
		خودکار عضو گروه های دیگری می شوند.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'چگونگی ویرایش تقویم';

$helptxt['maintenance_general'] = 'در این قسمت بسرعت و براحتی می توانید از امکانات مربوط به بانک اطلاعاتی استفاده نموده و عیوب و خطاهای بانک اطلاعاتی را برطرف نمایید.';
$helptxt['maintenance_backup'] = 'در این قسمت می توانید نسخه پشتیبان (Backup) از بانک اطلاعاتی خود تهیه و دریافت نمایید.';
$helptxt['maintenance_rot'] = 'این قسـمت به شما امکان می دهـد تا بصورت کامل موضوعات و تاپـیـک هـای قـدیمـی و اضافی را حذف نمایید. تـوجـه داشته باشیـد که بـا ایـن کار، موضـوعـات تـعیـیـن شـده بـصـورت <b>کـامـل</b> و <b>غـیـرقـابـل بـرگـشـت</b> حـذف خـواهنـد شـد.';

$helptxt['avatar_allow_server_stored'] = 'این گزینه به کاربران اجازه می دهد تا از آواتارهای نصب شده در سرور شما استفاده نمایند. ';
$helptxt['avatar_allow_external_url'] = 'در این قسمت می توانید این امکان را به کاربران بدهید که تصویر آواتار خود را از یک سرور خارجی، مانند سایت شخصی کاربر انتخاب کنند. در گزینه های
				بعدی حداکثر سایز تصاویر را تعیین می نمایید.';
$helptxt['avatar_download_external'] = 'اجازه به کاربران برای انتخاب آواتور از یک سرور دیگر';
$helptxt['avatar_allow_upload'] = 'انتخاب این گزینه به کاربران امکان میدهد تا تصویر آواتار خود را از روی سیستم خود بر روی سرور آپلود نمایند.';
$helptxt['avatar_download_png'] = 'با انتخاب این گزینه، از فرمت PNG برای ذخیره تصاویر کوچک شده استفاده خواهد شد، در غیر این صورت، فرمت JPEG مورد استفاده خواهد بود.';

$helptxt['disableHostnameLookup'] = 'غیرفعال شدن جستجوی نام میزبان ، این گزینه برای سرورها با سرعت پایین توصیه می شود.';

$helptxt['search_weight_frequency'] = 'به طور کل پنج گزینه آخر مربوط به تنظیمات جستجو بر یکدیگر تاثیر دارند. بدین معنی که عددی که در هر یک
	انتخاب می شود به صورت غیر مستقیم در دیگر گزینه ها نیز تاثیر خواهد داشت.<br /><br />
	در این گزینه حساسیت نتایج جستجو نسبت به جستجوی اعداد در متن موضوع ها را تعیین می کند. برای مثال در انجمن سایتی که در زمینه
	نرم افزار یا دروسی مثل فیزیک یا شیمی فعالیت می کند، اعداد خیلی مهم است و جستجو برای اعداد باید با دقت بیشتری انجام گیرد.
	حداکثر حساسیت نتایج جستجو عدد 30 و حداقل آن 1 است و عددی که انتخاب می شود باید رقمی بین این اعداد باشد.';
$helptxt['search_weight_age'] = 'به طور کل پنج گزینه آخر مربوط به تنظیمات جستجو بر یکدیگر تاثیر دارند. بدین معنی که عددی که در هر یک
	انتخاب می شود به صورت غیر مستقیم در دیگر گزینه ها نیز تاثیر خواهد داشت.<br /><br />
	در این گزینه حساسیت نتایج جستجو نسبت به تاریخ و زمان ارسال را تعیین می کنید. برای مثال در انجمن سایتی که در زمینه
	اخبار فعالیت می کند، زمان ارسال خیلی مهم است و برای کاربران جسجو از میان ارسال های اخیر، از اولویت بیشتری برخوردار است.
	حداکثر حساسیت نتایج جستجو عدد 30 و حداقل آن 1 است و عددی که انتخاب می کنید می بایستی رقمی بین این اعداد باشد.
	با بزرگ بودن عدد انتخاب شده حساسیت برای نمایش ارسالهای اخیر نیز بیشتر خواهد شد و قبل از همه برنامه کلمه کلیدی را
	از میان آخرین ارسالها انجام خواهد داد و ارسالهای قدیمی در اولویت بعدی قرار دارند.';
$helptxt['search_weight_length'] = 'به طور کل پنج گزینه آخر مربوط به تنظیمات جستجو بر یکدیگر تاثیر دارند. بدین معنی که عددی که در هر یک
	انتخاب می شود به صورت غیر مستقیم در دیگر گزینه ها نیز تاثیر خواهد داشت.<br /><br />
	در برخی از سایتها ممکن است نیازی به جستجو از میان موضوع های بلند وجود نداشته باشد. برای مثال در سایتی که در زمینه سرگرمی و تفریح
	فعالیت می کند بیشتر موضوع ها و ارسالهای انجمن، کوتاه و مختصر است. بنابراین جستجو از میان این ارسالها نسبت به موضوع هایی که با طول بیشتر
	مانند مقالات ارسال شده اند از اولویت بیشتری برخوردار است. بدین معنی که موتور جسنجوگر انجمن، قبل از جستجوی موضوع های بلند و طولانی
	موضوع های کوتاه و مختصر را جسنجو می کند.';
$helptxt['search_weight_subject'] = 'به طور کل پنج گزینه آخر مربوط به تنظیمات جستجو بر یکدیگر تاثیر دارند. بدین معنی که عددی که در هر یک
	انتخاب می شود به صورت غیر مستقیم در دیگر گزینه ها نیز تاثیر خواهد داشت.<br /><br />
	در این گزینه حساسیت نتایج جستجو نسبت به عنوان موضوع ها انتخاب می کند.';
$helptxt['search_weight_first_message'] = 'به طور کل پنج گزینه آخر مربوط به تنظیمات جستجو بر یکدیگر تاثیر دارند. بدین معنی که عددی که در هر یک
	انتخاب می شود به صورت غیر مستقیم در دیگر گزینه ها نیز تاثیر خواهد داشت.<br /><br />
	در برخی سایتها ممکن است جستجو از میان اولین ارسال هر موضوع چندان مهم نباشد و هدف  از جستجو پاسخها و موضوع های بعدی است.
	در این گزینه می توانید این اولویت را کمتر و یا بیشتر کنید.';
$helptxt['search_weight_sticky'] = 'حساسیت جستجو می تواند در هنگام جستجو موثر باشد. تغییر حساسیت می تواند نتایج جستجو را تغییر دهد.';
$helptxt['search'] = 'تمامی تنظیمات مربوط یه جستجو ها';
$helptxt['search_why_use_index'] = 'با انتخاب این گزینه با ایجاد یک فهرست ، سرعت جستجو سریع تر می شود. به عنوان مثال در انجمنی با 50 هزار موضوع ، هنگام جستجو عادی فشار بسیار زیادی بر پایگاه داده وارد می شود.';

$helptxt['see_admin_ip'] = 'از آدرس IP فقط برای ردگیری کاربر در موارد خاص استفاده می شود. هیچ کاربری اجازخ دیدن آدرس IP دیگران را ندارد. آدرس IP هر کس فقط برای خودش و مدیران قابل نمایش است.';
$helptxt['see_member_ip'] = 'آدرس IP شما فقط برای خودتان و مدیر انجمن قابل نمایش است. هیچ کاربری قادر به دیدن آدرس IP دیگر کاربران نمی باشد.';

$helptxt['ban_cannot_post'] = 'کاربر فقط اجازه خواندن دارد';

$helptxt['posts_and_topics'] = 'تنظیمات ارسال ها و موضوع ها';

?>