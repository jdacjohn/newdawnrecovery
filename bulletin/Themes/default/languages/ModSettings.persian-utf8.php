<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'در این قسمت می توانید تنظیمات عمومی انجمن را مشاهده و مدیریت نمایید. برای مدیریت تنظیمات قالب پیش فرض انجمن نیز <a href="' . $scripturl . '?action=theme;sa=settings;id=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">اینجا</a> را کلیک کنید. ';

$txt['mods_cat_features'] = 'تنظیمات کلی انجمن ها';
$txt['pollMode'] = 'سیستم نظرسنجی :';
$txt['smf34'] = 'غیر فعال کردن نظرسنجی ها';
$txt['smf32'] = 'فعال کردن نظرسنجی ها';
$txt['smf33'] = 'غیرفعال، نمایش همه نظرسنجی های ارسال شده تا این لحظه';
$txt['allow_guestAccess'] = 'آیا کاربران مهمان اجازه دیدن انجمن را داشته باشند؟';
$txt['userLanguage'] = 'آیا کاربران اجازه انتخاب زبان را داشته باشند؟';
$txt['allow_editDisplayName'] = 'آیا کاربران اجازه انتخاب یک نام مستعار در انجمن داشته باشند؟';
$txt['allow_hideOnline'] = 'کاربران اجازه مخفی نمودن موقعیت خود را در انجمن داشته باشند :';
$txt['allow_hideEmail'] = 'کاربران اجازه مخفی نمودن آدرس ایمیلشان را داشته باشند :';
$txt['guest_hideContacts'] = 'عدم نمایش مشخصات خصوصی اعضا، برای کاربران مهمان. ( مثال: ایمیل ) :';
$txt['titlesEnable'] = 'فعال شدن انتخاب نام مستعار';
$txt['enable_buddylist'] = 'فعال کردن اضافه کردن دوستان به لیست';
$txt['default_personalText'] = 'بیوگرافی پیشفرض برای کاربران';
$txt['max_signatureLength'] = 'حداکثر تعداد کاراکتر مجاز برای انتخاب امضا :<div class="smalltext">( 0 یعنی بدون محدودیت )</div>';
$txt['number_format'] = 'فرمت پیش فرض نمایش اعداد در انجمن :';
$txt['time_format'] = 'فرمت پیش فرض زمان در انجمن :';
$txt['time_offset'] = 'اختلاف زمانی با ساعت سرور :';
$txt['failed_login_threshold'] = 'تعداد دفعات ورود نا موفق';
$txt['lastActive'] = 'مدت زمان فاصله برای ثبت آمار کاربران آنلاین در انجمن :';
$txt['trackStats'] = 'ثبت آمار روزانه';
$txt['hitStats'] = 'ثبت سایر آمار و مشخصات (قبلا باید گزینه بالا فعال باشد)';
$txt['enableCompressedOutput'] = 'فعال کردن فشرده سازی فایل های خروجی برای ذخیره پهنای باند:';
$txt['databaseSession_enable'] = 'استفاده از تنظیم کننده بانک اطلاعاتی';
$txt['databaseSession_loose'] = 'کاربران مجاز به بازگشت به صفحه قبل و استفاده از صفحات کش باشند؟';
$txt['databaseSession_lifetime'] = 'مدت زمان مجاز برای هر فعالیت در انجمن(timeout) بر حسب ثانیه';
$txt['enableErrorLogging'] = 'فعال بودن ثبت گزارش خطاها';
$txt['cookieTime'] = 'مدت زمان پیش فرض حذف کوکی بعد از ورود به انجمن ( برحسب دقیقه)';
$txt['localCookies'] = 'ثبت آدرس دقیق انجمن برای کوکی ها<div class="smalltext">(SSI در صورت فعال شدن گزینه قادر به اجرا نخواهد بود.)</div>';
$txt['globalCookies'] = 'ایجاد کوکی برای ساب دامنه<div class="smalltext">(برای فعال کردن این گزینه ، قسمت بالا را غیرفعال کنید)</div>';
$txt['securityDisable'] = 'غیر فعال شدن پرسش رمز عبور برای ورود به مرکز مدیریت';
$txt['send_validation_onChange'] = 'ریست شدن خودکار رمزعبور در صورت تغییر آدرس ایمیل';
$txt['approveAccountDeletion'] = 'حذف حساب کاربری کاربر مستلزم تایید مدیر باشد؟';
$txt['autoOptDatabase'] = 'فشرده سازی جدول های بانک اطلاعاتی بعد از چند روز؟<div class="smalltext">(0 یعنی غیرفعال)</div>';
$txt['autoOptMaxOnline'] = 'حداکثر کاربران آنلاین برای شروع فشرده سازی<div class="smalltext">(0 یعنی غیرفعال)</div>';
$txt['autoFixDatabase'] = 'بصورت خودکار جدول های شکسته شده را تعمیر کن';
$txt['allow_disableAnnounce'] = 'کاربران اجازه غیرفعال کردن موضوعهای اطلاعیه را داشته باشند؟';
$txt['disallow_sendBody'] = 'در ایمیلهای باخبرسازی متن موضوع ها ارسال نشود؟';
$txt['modlog_enabled'] = 'سیستم گزارش به مدیران';
$txt['queryless_urls'] = 'فعال کردن خروجی html. در آدرس صفحات<div class="smalltext"><b>فقط Apache!</b></div>';
$txt['max_image_width'] = 'حداکثر طول تصاویر ارسال شده در موضوع ها ( 0 یعنی بدون محدودیت )';
$txt['max_image_height'] = 'حداکثر عرض تصاویر ارسال شده در موضوع ها ( 0 یعنی بدون محدودیت )';
$txt['mail_type'] = 'ایمیل:';
$txt['mail_type_default'] = 'پیشفرض PHP';
$txt['smtp_host'] = 'سرور SMTP:';
$txt['smtp_port'] = 'پورت SMTP:';
$txt['smtp_username'] = 'نام کاربری SMTP:';
$txt['smtp_password'] = 'رمز عبور SMTP:';
$txt['enableReportPM'] = 'فعال کردن گزارش به مدیران برای پیغام های خصوصی';
$txt['max_pm_recipients'] = 'حداکثر تعداد پیغام خصوصی برای هر کاربر.<div class="smalltext">(0 برای نامحدود, مدیر نامحدود می باشد)</div>';
$txt['pm_posts_verification'] = 'حداکثر تعداد ارسال پیغام خصوصی برای درخواست کد امنیتی .<div class="smalltext">(0 برای نامحدود, مدیر مستثنی است)</div>';
$txt['pm_posts_per_hour'] = 'حداکثر تعداد پیغام خصوصی که یک کاربر می تواند در یک ساعت ارسال کند.<div class="smalltext">(0 برای نامحدود, مدیران مستثنى هستند)</div>';

$txt['mods_cat_layout'] = 'تنظیمات عمومی';
$txt['compactTopicPagesEnable'] = 'نمایش عدد شماره صفحه فعلی انجمن:';
$txt['smf235'] = 'فرمت نمایش شماره صفحه:';
$txt['smf236'] = 'برای مثال';
$txt['todayMod'] = 'فعال بودن نمایش «امروز» در تاریخ و زمان ارسال:';
$txt['smf290'] = 'غیرفعال';
$txt['smf291'] = 'فقط نمایش امروز';
$txt['smf292'] = 'موضوع های ارسال شده در امروز و دیروز';
$txt['topbottomEnable'] = 'فعال بودن لینک های « برو بالا » و « برو پایین » :';
$txt['onlineEnable'] = 'نمایش آیکن آنلاین و آفلان بودن کاربر در کنار ارسال ها';
$txt['enableVBStyleLogin'] = 'نمایش فرم ورود در همه صفحات';
$txt['defaultMaxMembers'] = 'تعداد اسامی نمایش داده شده در لیست کاربران:';
$txt['timeLoadPageEnable'] = 'نمایش مدت زمان ایجاد صفحات :';
$txt['disableHostnameLookup'] = 'غیرفعال شدن جستجوی نام میزبان';
$txt['who_enabled'] = 'فعال بودن لیست کاربرانی که در انجمن ها حضور دارند :';

$txt['smf293'] = 'امتیاز به کاربران';
$txt['karmaMode'] = 'سیستم امتیاز دهی کاربران';
$txt['smf64'] = 'غیرفعال کردن|فعال و نمایش همه امتیازها|فعال و نمایش هر دو امتیازهای مثبت و منفی';
$txt['karmaMinPosts'] = 'حداقل تعداد ارسال مورد نیاز برای امتیازدهی توسط کاربران:';
$txt['karmaWaitTime'] = 'مدت زمان فاصله برای هر امتیاز ( برحسب ساعت) :';
$txt['karmaTimeRestrictAdmins'] = 'اعمال محدودیت مدت زمان برای مدیر انجمن:';
$txt['karmaLabel'] = 'عنوان:';
$txt['karmaApplaudLabel'] = 'عنوان امتیاز مثبت:';
$txt['karmaSmiteLabel'] = 'عنوان امتیاز منفی:';

$txt['caching_information'] = '<div align="center"><b><u>توجه ! قبل از استفاده از این ویژگی این متن را بخوانید </b></u></div><br />
	SMF از نهانگاه (کش) با استفاده از سرعت دهنده ها پشتیبانی می کند. درحال حاضر سرعت دهنده های زیر را پشتیبانی می کند :<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	</ul>
	کش کردن درصورتی که با یکی از بهینه سازان بالا سرور کار کند ، پشتیبانی می شود, یا حافظه کش فراهم گردد <br /><br />
	SMF عمل کش را در سطوح مختلف انجام میدهد . سطوح بالا کش در دریافت فایلهای نهانگاه زمان بیشتری از cpu را مصرف می کنند .. 
	اگر عمل کش روی سرور شما فراهم است ، پیشنهاد می کنیم که سطح 1 را برای شروع کار انتخاب کنید .
	<br /><br />
	توجه بکنید که اگر از حافظه نهان ( memcash ) استفاده کنید باید تنظیمات سرور را انجام دهید . باید با کاما لیست از هم جداشود.
	بعنوان مثال :<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	نکته اینکه اگر پورتی وارد نکنید از پورت 11211 استفاده  میکند . SMF تلاش می کند که تعادل بارگزاری در بین سرورها را بصورت تصادفی انجام دهد .
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF شتاب دهنده سازگار بر روی سرور پیدا نکرد</b>';
$txt['detected_APC'] = '<b style="color: green">SMF شتاب دهنده APC را پیدا کرد';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF شتاب دهنده eAccelerator را بر روی سرور پیدا کرد';
$txt['detected_MMCache'] = '<b style="color: green">SMF شتاب دهنده MMCache را بر روی سرور پیدا کرد';
$txt['detected_Zend'] = '<b style="color: green">SMF ، Zend را بر روی سرور پیدا کرد';
$txt['detected_Memcached'] = '<b style="color: green">SMF متوجه شده است که بر روی سرور شما Memchached نصب شده است.';

$txt['cache_enable'] = 'Caching سطح';
$txt['cache_off'] = 'بدون کش';
$txt['cache_level1'] = 'سطح 1 کش';
$txt['cache_level2'] = 'سطح 2 کش ( پیشنهاد نمی شود (';
$txt['cache_level3'] = 'سطح 3 کش (پیشنهاد نمی شود)';
$txt['cache_memcached'] = 'Memcache تنظیمات';

?>