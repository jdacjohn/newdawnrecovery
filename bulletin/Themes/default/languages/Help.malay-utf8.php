<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = 'array()';

$txt[1006] = 'Tutup tetingkap';

$helptxt['manage_boards'] = '	<strong>Edit Papan</strong><br />
	Dalam menu ini anda boleh membuat/mengedit/memadam papan dan kategori di atasnya
	Sebagai contoh, jika anda mempunyai laman berskala-luas yang menawarkan
	informasi masalah &quot;Sukan&quot; dan &quot;Kereta&quot; serta &quot;Muzik&quot;, ini
	akan menjadi Kategori tingkat-teratas yang anda buat. Di bawah setiap kategori ini
	Anda mungkin mahu membuat hirarki &quot;sub-kategori&quot; atau
	&quot;Papan&quot; untuk masing-masing topik di dalamnya. Hirarki sederhana, dengan struktur ini: <br />
	<ul>
		<li>
			<strong>Sukan</strong>
			&nbsp;- A &quot;kategori&quot;
		</li>
		<ul>
			<li>
				<strong>Baseball</strong>
				&nbsp;- Papan di bawah kategori &quot;Sukan&quot;
			</li>
			<ul>
				<li>
					<strong>Stats</strong>
					&nbsp;- Papan anak di bawah papan &quot;Baseball&quot;
				</li>
			</ul>
			<li><strong>Football</strong>
			&nbsp;- Papan di bawah kategori &quot;Sukan&quot;</li>
		</ul>
	</ul>
	Kategori mengizinkan anda untuk memecah papan menjadi topik luas (&quot;Kereta,
	Sukan&quot;), dan &quot;Papan&quot; di bawahnya adalah topik sebenarnya yang
	boleh dipos oleh ahli. Pengguna yang tertarik dengan Pintos akan menulis
	di bawah &quot;Cars->Pinto&quot;. Kategori mengizinkan orang untuk menemukan
	dengan cepat apa yang menarik bagi mereka: Daripada &quot;Kedai&quot; anda
	mempunyai kedai &quot;Perkakasan&quot; dan &quot;Pakaian&quot; yang boleh anda masuki. 
	Ini menyederhanakan pencarian &quot;paip sambungan kompaun&quot; kerana anda boleh pergi ke 
	&quot;Kategori&quot; Kedai Perkakasan daripada Kedai Pakaian (di mana anda tidak akan
	menemukan paip sambungan kompaun).<br />
	Seperti dinyatakan di atas, Papan adalah kunci topik di bawah kategori papan.
	Jika anda mahu membicarakan &quot;Pintos&quot; anda mesti pergi ke kategori &quot;Kereta&quot; dan
	melompat ke dalam papan &quot;Pinto&quot; untuk menuliskan pemikiran anda pada papan itu.<br />
	Fungsi Pengurusan untuk item menu ini adalah untuk membuat papan baru di bawah setiap
	kategori, untuk mengedit semula (memindahkan &quot;Pinto&quot; di belakang &quot;Chevy&quot;), atau
	memadam seluruh papan.';

$helptxt['edit_news'] = '<ul class="normallist"> <li> <strong>Berita</strong><br /> Bahagian ini membolehkan anda menetapkan teks untuk item berita yang dipaparkan pada laman Indeks Papan. Tambah sebarang item yang anda mahukan (contoh, &quot;Jangan lupa mesyuarat hari Selasa ini&quot;). Setiap item berita dipaparkan secara rawak dan mesti ditempatkan dalam kotak berasingan. </li> <li> <strong>Suratan Berita</strong><br /> Bahagian ini mengizinkan anda untuk mengirimkan suratan berita kepada ahli forum melalui mesej peribadi atau emel. Pertama pilih grup yang anda kehendaki untuk menerima suratan berita, dan yang tidak anda kehendaki untuk menerima suratan berita. Jika anda mahukan, anda boleh menambah ahli tambahan dan alamat emel yang akan menerima suratan berita. Akhir sekali, masukkan mesej yang hendak anda kirimkan dan pilih sama ada anda mahu ia dikirimkan kepada ahli sebagai mesej peribadi atau emel. </li> <li> <strong>Tetapan</strong><br /> Bahagian ini mengandungi beberapa aturan yang berkaitan dengan berita dan suratan berita, termasuk memilih grup mana yang boleh mengedit berita forum atau mengirim suratan berita. Di sana terdapat juga tetapan konfigurasi sama ada anda mahu suapan berita dihidupkan pada forum, termasuk tetapan konfigurasi panjang (berapa karakter untuk dipaparkan) bagi setiap pos berita dari suapan berita. </li> </ul> ';

$helptxt['view_members'] = '	<ul>
		<li>
			<strong>Lihat seluruh Ahli</strong><br />
			Melihat seluruh ahli dalam papan. anda disajikan dengan hiperlink daftar nama ahli. anda 
			boleh mengklik pada salah satu nama untuk menemukan butiran ahli (homepage, umur, dll.), dan
			sebagai Pengurus anda boleh mengubah parameter ini. anda memiliki kawalan penuh atas ahli,
			termasuk kemampuan untuk memadamnya dari forum.<br /><br />
		</li>
		<li>
			<strong>Menunggu Persetujuan</strong><br />
			Bahagian ini hanya dipaparkan jika anda mengaktifkan persetujuan Pengurus atas semua pendaftaran baru. Setiap orang yang mendaftar untuk menyertai fo
			Anda hanya akan menjadi ahli penuh sekali mereka sudah disetujui oleh Pengurus. Bahagian ini mendaftar seluruh ahli yang masih
			menunggu persetujuan, bersamaan dengan alamat IP dan emailnya. anda boleh memilih untuk menerima atau menolak (memadam)
			setiap ahli pada daftar dengan menTanda kotak didekat ahli dan memilih tindakan dari kotak drop-down di layar
			bawah. Ketika menolak ahli anda boleh memilih untuk memadam ahli dengan atau tanpa memberitahukan keputusan anda.<br /><br />
		</li>
		<li>
			<strong>Menunggu Pengaktifan</strong><br />
			Bahagian ini hanya akan terlihat jika anda mengaktifkan pengaktifan akaun ahli pada forum. Bahagian ini akan mendaftar semua
			ahli yang masih belum mengaktifkan akaun barunya. Dari layar ini anda boleh memiliih untuk menerima, menolak atau mengingatkan
			ahli dengan pendaftaran yang tertunda. Seperti di atas anda juga boleh memilih untuk mengirim email kepada ahli guna memaklumkan
			tindakan yang telah anda ambil.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Menyekat Ahli</strong><br />
	SMF menyediakan kemampuan untuk &quot;menyekat&quot; pengguna, untuk menjaga orang yang melanggar adab papan
	dengan spamming, trolling, dll. Ini mengizinkan anda ke pengguna itu yang merupakan ancaman bagi forum anda. Sebagai Pengurus,
	ketika anda melihat mesej, anda boleh melihat setiap alamat IP pengguna untuk dipos pada saat itu. Dalam daftar sekatan,
	Anda cukup mengetik alamat IP tersebut, menyimpan, dan mereka tidak boleh lagi mengepos dari lokasi itu.<br />Anda juga boleh
	menyekat orang melalui alamat emailnya.';

$helptxt['modsettings'] = '<strong>Edit Ciri dan Pilihan</strong><br />
	Ada beberapa ciri dalam bahagian ini yang boleh anda ubah ke pilihan anda.  Pilihan untuk mods terinstalasi umumnya juga akan muncul di sini.';

$helptxt['number_format'] = '<strong>Format Angka</strong><br />
	Anda dapat menggunakan aturan ini untuk membentuk cara angka dipaparkan pada forum anda kepada pengguna. Format aturan ini adalah:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Di mana \',\' adalah karakter yang dipakai untuk memisahkan grup ribu, \'.\' adalah karakter yang dipakai untuk titik desimal dan angka sifar menyatakan ketepatan pembulatan.';

$helptxt['time_format'] = '<strong>Format Waktu</strong><br />
	Anda memiliki kemampuan untuk menyesuaikan bagaimana jam dan tarikh terlihat bagi anda sendiri. Ada banyak huruf kecil, tapi tidak cukup sederhana.
	Konvensi mengikuti fungsi strftime PHP dan dijelaskan di bawah ini (lebih butiran dapat ditemukan di <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	Karakter berikut dikenal dalam string format: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - singkatan nama hari<br />
	&nbsp;&nbsp;%A - nama hari lengkap<br />
	&nbsp;&nbsp;%b - singkatan nama bulan<br />
	&nbsp;&nbsp;%B - nama bulan lengkap<br />
	&nbsp;&nbsp;%d - tarikh dari sebulan (01 sampai 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - sama seperti %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - tarikh dari sebulan (1 sasmpai 31) <br />
	&nbsp;&nbsp;%H - jam menggunakan waktu 24-jam (jangkauan 00 sampai 23) <br />
	&nbsp;&nbsp;%I - jam menggunakan waktu 12-jam (jangkauan 01 sampai 12) <br />
	&nbsp;&nbsp;%m - bulan sebagai angka (01 sampai 12) <br />
	&nbsp;&nbsp;%M - minit sebagai angka <br />
	&nbsp;&nbsp;%p - baik &quot;am&quot; ataupun &quot;pm&quot; tergantung jam yang diberikan<br />
	&nbsp;&nbsp;%R<b>*</b> - jam dalam notasi 24 jam <br />
	&nbsp;&nbsp;%S - saat sebagai angka desimal <br />
	&nbsp;&nbsp;%T<b>*</b> - jam sekarang, sama dengan %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2 digit tahun (00 sampai 99) <br />
	&nbsp;&nbsp;%Y - 4 digit tahun<br />
	&nbsp;&nbsp;%Z - zon waktu atau nama atau singkatan <br />
	&nbsp;&nbsp;%% - literal karakter \'%\' <br />
	<br />
	<i>* Ini tidak berfungsi pada server berbasis-Windows.</i></span>';

$helptxt['live_news'] = '<strong>Pengumuman langsung</strong><br />
	Kotak ini memaparkan pengumuman yang dikemaskinikan baru-baru ini dari <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	Anda mesti selalu memeriksa ini untuk kemaskini, versi baru, dan informasi penting lain dari Simple Machines.';

$helptxt['registrations'] = '<strong>Pengurusan Pendaftaran</strong><br />
	Bahagian ini berisi semua fungsi yang diperlukan untuk mengatur pendaftaran pada forum. Ia berisi sampai empat
	bahagian yang terliht tergantung pada aturan forum anda. Ini adalah:<br /><br />
	<ul>
		<li>
			<strong>Daftarkan ahli baru</strong><br />
			Dari layar ini anda boleh memilih untuk mendaftarkan akaun bagi ahli baru atas nama mereka. Ini berguna dalam forum di mana pendaftaran ditutup bagi
			ahli baru, atau dalam hal di mana Pengurus mahu membuat akaun ujian. Jika pilihan untuk memerlukan pengaktifan dari akaun
			yang dipilih, ahli akan diberi email link pengaktifan yang mesti diklik sebelum mereka boleh menggunakan akaunnya. Hal yang serupa anda boleh
			memilih untuk mengirimkan email ke pengguna kata kunci baru ke alamat email yang dinyatakan.<br /><br />
		</li>
		<li>
			<strong>Edit Perjanjian Pendaftaran</strong><br />
			Ini mengizinkan anda untuk mengatur teks untuk perjanjian pendaftaran ketika ahli mendaftar di forum anda.
			Anda boleh menambah atau memadam apapun dari perjanjian pendaftaran default yang disertakan dalam SMF.<br /><br />
		</li>
		<li>
			<strong>Set Nama-Nama Terpelihara</strong><br />
			Menggunakan fungsi ini anda boleh menetapkan kata atau nama yang tidak boleh dipakai oleh pengguna anda.<br /><br />
		</li>
		<li>
			<strong>Aturan</strong><br />
			Bahagian ini hanya akan terlihat jika anda memiliki keizinan Pengurusan forum. Dari layar ini anda boleh memutuskan cara pendaftaran yang akan dipakai
			di forum anda, juga aturan berkaitan pendaftaran lainnya.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Log Moderasi</strong><br />
	Bahagian ini mengizinkan ahli pasukan Pengurus untuk merekod semua tindakan moderasi yang dilakukan Moderator forum. Untuk memastikan bahawa
	Moderator tidak boleh memadam semakan atas tindakan yang sudah dilakukannya, entri tidak boleh dipadam sampai 24 jam setelah tindakan dilakukan.
	Kolum \'objek\' mendaftar setiap pembolehubah berkaitan dengan tindakan.';
$helptxt['error_log'] = '<strong>Log Kesalahan</strong><br />
	Log kesalahan merekod log setiap kesalahan serius yang ditemukan oleh pengguna yang menggunakan forum anda. Ia mendaftar semua kesalahan ini dengan tarikh yang boleh diedit dengan mengklik setiap tarikh. Sebagai tambahan anda boleh menapis kesalahan ini dengan mengklik gambar di sebelah statistik kesalahan. Ini
	mengizinkan anda untuk menapis, misalnya, oleh ahli. Ketika tapisan aktif hanya hasil yang akan dipaparkan yang sesuai dengan tapisan itu.';
$helptxt['theme_settings'] = '<strong>Aturan Tema</strong><br />
	Layar aturan ini mengizinkan anda untuk mengubah aturan khusus tema. Aturan ini termasuk pilihan seperti direktori tema dan informasi URL
	juga pilihan yang mempengaruhi rupa tema pada forum anda. Banyak tema akan memiliki variasi pilihan yang boleh ditetapan pengguna, mengizinkan anda untuk mengadaptasi tema
	sesuai dengan keperluan forum individual anda.';
$helptxt['smileys'] = '<strong>Pusat Smiley</strong><br />
	Di sini anda dapat menambah dan memadam smiley, dan set smiley.  Catat dengan penting bahawa jika smiley ada dalam satu set, ia ada dalam seluruh set - sebaliknya, ia mungkin
	membingungkan pengguna anda dalam menggunakan set berbeda.<br /><br />

	Anda juga boleh mengedit ikon mesej dari sini, jika anda sudah diaktifkan pada laman aturan.';
$helptxt['calendar'] = '<strong>Mengatur Kalendar</strong><br />
	Di sini anda boleh mengubah aturan kalendar semasa, juga menambah dan memadam hari cuti yang muncul pada kalendar.';

$helptxt['serversettings'] = '<strong>Aturan Server</strong><br />
	Di sini anda dapat melakukan tetapan ini untuk forum anda. Bahagian ini termasuk aturan database dan url, juga item tetapan
	penting lainnya seperti aturan surat dan caching. Fikirkan dengan hati-hati bila mengedit aturan ini kerana kesilapan boleh
	mengakibatkan forum tidak boleh diakses';

$helptxt['topicSummaryPosts'] = 'Ini mengizinkan anda untuk mengatur jumlah pos sebelum dipaparkan dalam ringkasan topik pada layar jawab.';
$helptxt['enableAllMessages'] = 'Aturan ini ke jumlah pos topik <em>maksima</em> yang boleh memaparkan semua link.  Aturan ini lebih rendah daripada &quot;Maksima mesej dipaparkan dalam laman topik&quot; bererti tidak pernah dipaparkan, dan aturan terlalu tinggi boleh melambatkan forum anda.';
$helptxt['enableStickyTopics'] = 'Lekit adalah topik yang tetap berada di atas daftar topik. Ini biasanya dipakai untuk mesej
		penting. Meskipun anda dapat mengubah ini dengan keizinan, defaultnya hanya Moderator dan Pengurus yang dapat membuat topik lekit.';
$helptxt['allow_guestAccess'] = 'Tidak menanda kotak ini akan menghentikan tetamu dari melakukan apapun kecuali tindakan mendaftar - masuk, mendaftar, pengingat kata kunci, dll. - pada forum anda.  Ini tidak sama seperti tidak mengizinkan tetamu mengakses ke papan.';
$helptxt['userLanguage'] = 'Mengaktifkan pilihan ini akan mengizinkan pengguna untuk memilih fail bahasa yang mereka pakai. Ini tidak akan mempengaruhi
		pemilihan default.';
$helptxt['trackStats'] = 'Statistik:<br />Ini akan mengizinkan pengguna untuk melihat pos terbaru dan topik paling popular pada forum anda.
		Ia juga akan memaparkan beberapa statistik, seperti ahli online terlama, ahli baru dan topik baru.<hr />
		laman dilihat:<br />Menambah kolum lain ke laman statistik dengn jumlah laman dilihat pada forum anda.';
$helptxt['titlesEnable'] = 'Mengaktifkan Tajuk Pilihan akan mengizinkan ahli dengan keizinan yang berkaitan untuk membuat judul khusus bagi mereka sendiri.
		Ini akan dipaparkan di bawah nama.<br /><em>Sebagai contoh:</em><br />Fahim<br />Budak Baik';
$helptxt['topbottomEnable'] = 'Ini akan menambah butang naik dan turun agar ahli dapat pergi ke atas dan bawah laman
		tanpa menggulung.';
$helptxt['onlineEnable'] = 'Ini akan memaparkan gambar untuk menunjukkan apakah ahli online atau offline';
$helptxt['todayMod'] = 'Ini akan memaparkan &quot;Hari ini&quot;, atau &quot;Semalam&quot;, daripada tarikh.<br /><br />  <strong>Contoh:</strong><br /><br />  <dt>  <dt>Dimatikan</dt>  <dd>Oktober 3, 2009 pada 12:59:18 am</dd>  <dt>Hanya Hari Ini</dt>  <dd>Hari ini pada 12:59:18 am</dd>  <dt>Hari ini &amp; Semalam</dt>  <dd>Semalam pada 09:36:55 pm</dd>  </dt>  ';
$helptxt['enablePreviousNext'] = 'Ini akan memaparkan link ke topik berikutnya dan sebelumnya.';
$helptxt['pollMode'] = 'Ini memilih apakah undian diaktifkan atau tidak. Jika undian dimatikan, setiap undian akan disembunyikan
		dari daftar topik. anda boleh memilih untuk melanjutkan memaparkan topik biasa tanpa undiannya dengan memilih
		&quot;Paparkan Undian yang Ada sebagai Topik&quot;.<br /><br />untuk memilih siapa yang boleh menulis undian, melihat undian, dan sebagainya, anda
		boleh mengizinkan atau menafikan keizinan itu. Ingat ini jika undian tidak berfungsi.';
$helptxt['enableVBStyleLogin'] = 'Ini akan memaparkan login masuk yang lebih ringkas pada setiap laman forum untuk tetamu.';
$helptxt['enableCompressedOutput'] = 'Pilihan ini akan mengecilkan output bagi merendahkan penggunaan bandwidth, tapi memerlukan agar
		zlib diinstal.';
$helptxt['databaseSession_enable'] = 'Pilihan ini memanfaatkan database untuk penyimpanan sesi - itu yang terbaik untuk keseimbangan capaian server, membantu semua masalah kehabolehn waktu dan membuat forum lebih cepat.';
$helptxt['databaseSession_loose'] = 'Mengaktifkan ini akan mengurangi bandwidth penggunaan forum anda, dan membuat mengklik kembali tidak akan mengambil semula laman - kerugiannya bahawa ikon (baru) tidak akan dikemaskinikan, diantara hal lainnya. (kecuali anda mengklik laman itu daripada kembali ke sana.)';
$helptxt['databaseSession_lifetime'] = 'Ini adalah jumlah saat untuk sesi berakhir setelah mereka tidak diakses.  Jika sebuah sesi tidak diakses terlalu lama, dikatakan &quot;kehabolehn waktu&quot;.  Selain itu yang lebih tinggi dari 2400 disarankan.';
$helptxt['enableErrorLogging'] = 'Ini akan mencatat setiap kesalahan, seperti gagal masuk, maka anda dapat melihat apa yang salah.';
$helptxt['allow_disableAnnounce'] = 'Ini akan mengizinkan pengguna untuk mengeluarkan makluman topik yang anda umumkan dengan mengklik kotak tanda &quot;umumkan topik&quot; ketika mengepos.';
$helptxt['disallow_sendBody'] = 'Pilihan ini memadam pilihan untuk menerima teks jawapan dan pos dalam email makluman.<br /><br />Seringkali pengguna akan menjawab ke email makluman yang dalam hal ini bererti webmaster menerima jawapan.';
$helptxt['compactTopicPagesEnable'] = 'Ini akan memaparkan pemilihan dari jumlah laman.<br /><em>Contoh:</em>
		&quot;3&quot; untuk memaparkan: 1 ... 2 [3] 4 ... 9 <br />
		&quot;5&quot; untuk memaparkan: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Ini akan memaparkan jam dalam saat yang diperlukan SMF untuk membuat laman itu di bawah papan.';
$helptxt['removeNestedQuotes'] = 'Ini akan membuang kuot daripada pos apabila menyebut pos berkenaan melalui link kuot.';
$helptxt['simpleSearch'] = 'Ini akan memaparkan borang carian mudah dan link ke borang carian lengkap.';
$helptxt['max_image_width'] = 'Ini mengizinkan anda untuk mengatur ukuran maksima untuk gambar yang dipos. Gambar lebih kecil dari maksima tidak akan dipengaruhi.';
$helptxt['mail_type'] = 'Aturan ini mengizinkan anda untuk memilih aturan default PHP, atau mengabaikan aturan itu dengan SMTP.  PHP tidak menyokong pemakaian pengesahan dengan SMTP (banyak host memerlukannya sekarang) maka jika anda mahukannya anda mesti memilih SMTP.  Ambil perhatian bahawa SMTP mungkin lebih lambat, dan beberapa server tidak akan mengambil nama pengguna dan kata kunci.<br /><br />Anda tidak perlu mengisi aturan SMTP jika ini diatur ke default PHP.';
$helptxt['attachmentEnable'] = 'Lampiran ialah fail yang ahli boleh muatnaik, dan sertakan dalam pos.<br /><br />  <b>Periksa extension lampiran</b>:<br /> Adakah anda mahu periksa extension yang dibenarkan pada fail lampiran.<br />  <b>Direktori lampiran</b>:<br /> Laluan ke folder lampiran anda<br />(contoh: /home/sites/yoursite/www/forum/attachments)<br />  <b>Ruang folder lampiran maksima</b> (dalam KB):<br /> Pilih berapa besar folder lampiran dibenarkan, termasuk fail dalamnya.<br />  <b>Saiz lampiran maksima satu pos</b> (dalam KB):<br /> Pilih saiz fail maksima bagi semua lampiran dibuat setiap pos. Jika ini rendah daripada had setiap lampiran, ia akan menjadi had.<br />  <b>Saiz maksima satu lampiran</b> (dalam KB):<br /> Pilih saiz fail maksima bagi setiap satu lampiran.<br />  <b>Jumlah maksima lampiran satu pos</b>:<br /> Pilih jumlah lampiran seorang boleh buat, satu pos.<br />  <b>Paparkan lampiran sebagai imej dalam pos</b>:<br />  Jika fail yang dimuatnaik adalah imej, ia akan dipaparkan di bawah pos.<br />  <b>Saizkan semua imej bila dipaparkan di bawah pos</b>:<br />  Jika pilihan di atas dipilih, ia akan menyimpan satu lampiran berasingan (lebih kecil) berbentuk thumbnail bagi mengurangkan bandwidth.<br />  <b>Lebar dan tinggi maksima thumbnail</b>:<br />  Hanya digunakan pada pilihan &quot;Saizkan semua imej bila dipaparkan di bawah pos&quot;, maksima lebar dan tinggi untuk saizkan semula lampiran mengecil. Ia akan disaizkan semula mengikut keadaan. ';
$helptxt['karmaMode'] = 'Karma adalah ciri yang memaparkan populariti ahli. Ahli, jika diizinkan, boleh melakukan
		\'applaud\' atau \'smite\' ahli lain, dengan cara ini populariti dihitung. anda dapat mengubah jumlah pos yang diperlukan untuk mempunyai &quot;karma&quot;, waktu antara smite atau applaud, dan jika Pengurus
		mesti menunggu waktu ini juga.<br /><br />Apakah grup ahli dapat melakukan smite yang lain di kawalan oleh
		sebuah keizinan.  Jika anda mengalami masalah agar ciri ini bekerja untuk setiap orang, klik ganda keizinan anda.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'Kalendar dapat dipakai untuk memaparkan hari jadi, atau untuk memaparkan acara yang terjadi dalam komuniti anda.<br /><br />
		<strong>Paparkan hari sebagai link ke \'Pos Acara\'</strong>:<br />Ini akan mengizinkan ahli untuk mengepos acara untuk hari itu, ketika mereka mengklik pada tarikh itu<br />
		<strong>Paparkan angka minggu</strong>:<br />Memaparkan minggu yang mana itu.<br />
		<strong>Maksima hari ke depan pada indeks papan</strong>:<br />Jika ini diatur ke 7, even minggu depannya akan dipaparkan.<br />
		<strong>Paparkan hari cuti pada indeks papan</strong>:<br />Memaparkan cuti hari ini dalam bar kalendar pada indeks papan.<br />
		<strong>Memaparkan hari jadi pada indeks papan index</strong>:<br />Memaparkan hari jadi hari ini dalam bar kalendar pada indeks papan.<br />
		<strong>Paparkan acara pada indeks papan</strong>:<br />Memaparkan acara hari ini dalam bar kalendar pada indeks papan.<br />
		<strong>Default Papan untuk Menulis</strong>:<br />Papan mana yang dipakai untuk mengepos acara?<br />
		<strong>Benarkan acara tidak dikaitkan ke pos</strong>:<br />Mengizinkan ahli untuk mengepos acara tanpa mesti dihubungkan dengan pos pada papan.<br />
		<strong>Minima tahun</strong>:<br />Memilih tahun &quot;pertama&quot; pada daftar kalendar.<br />
		<strong>Maksima tahun</strong>:<br />Memilih tahun &quot;terakhir&quot; pada daftar kalendar<br />
		<strong>Birthday color</strong>:<br />Memilih warna teks hari jadi<br />
		<strong>Warna acara</strong>:<br />Memilih warna teks acara<br />
		<strong>Warna cuti</strong>:<br />Memilih warna teks Hari cuti<br />
		<strong>Benarkan acara untuk memanjang beberapa hari</strong>:<br />Tanda untuk mengizinkan acara memanjang beberapa hari.<br />
		<strong>Maksima jumlah hari acara boleh dilanjutkan</strong>:<br />Memilih maksima hari di mana acara boleh dilanjutkan.<br /><br />
		Ingat bahawa penggunaan kalendar (penulisan acara, melihat acara, dll) dikawalan oleh keizinan yang diatur pada layar keizinan.';
$helptxt['localCookies'] = 'SMF menggunakan cookie untuk menyimpan informasi masuk pada komputer pengguna.
	Cookie dapat disimpan secara global (myserver.com) atau secara lokal (myserver.com/path/ke/forum).<br />
	Tanda pilihan ini jika anda mengalami masalah boleh pengguna dikeluarkan secara automatik.<hr />
	Secara global cookie yang disimpan kurang aman ketika dipakai pada server web yang berbagi (seperti Tripod).<hr />
	Cookie lokal tidak berfungsi di luar folder forum, maka jika forum anda disimpan di www.myserver.com/forum, laman seperti www.myserver.com/index.php tidak boleh mengakses informasi akaun.
	Terutama saat menggunakan SSI.php, cookies global disarankan.';
$helptxt['enableBBC'] = 'Memilih pilihan ini akan mengizinkan ahli anda untuk menggunakan Kod Papan Buletin (BBC) pada forum, mengizinkan pengguna untuk membentuk posnya dengan gambar, jenis format dan lain-lain.';
$helptxt['time_offset'] = 'Tidak semua Pengurus forum mengmahukan forumnya menggunakan zon waktu yang sama seperti server di mana ia ditempatkan. Gunakan pilihan ini untuk menetapkan perbedaan waktu (dalam jam) di mana forum semestinya beroperasi dari waktu server. Nilai desimal negatif diperbolehkan.';
$helptxt['spamWaitTime'] = 'Di sini anda dapat memilih jumlah waktu yang mesti dilalui di antara penulisan. Ini boleh dipakai untuk menghentikan orang atas "spamming" forum anda dengan membatasi berapa kerap mereka mengepos.';

$helptxt['enablePostHTML'] = 'Ini akan mengizinkan beberapa tag dasar HTML:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Di sini anda dapat memilih apakah tema default dapat dipilih, tema apa yang akan dipakai tetamu,
	juga pilihan lainnya. Klik pada tema di kanan untuk mengubah setelannya.';
$helptxt['theme_install'] = 'Ini mengizinkan anda untuk menginstalasi tema baru.  anda boleh melakukan ini dari direktori yang sudah dibuat, dengan mengemaskinikan arkib untuk tema, atau dengan menyalin tema default.<br /><br />Catatan bahawa arkib atau direktori mesti memiliki fail definisi <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Pilihan ini akan mengizinkan pengguna anda untuk memakai Flash secara langsung di dalam posnya,
	seperti halnya gambar.  Ini dapat mewujudkan risiko sekuriti, meskipun beberapa sudah dieksploitasi dengan sukses.
	GUNAKAN DENGAN RISIKO ANDA SENDIRI!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Mengizinkan orang untuk menghubungkan ke <a href="%s?action=.xml;sa=news">Berita terbaru</a>
	dan data yang serupa.  anda disarankan membatasi ukuran pos/berita terbaru kerana ketika data rss
	dipaparkan dalam beberapa pengguna, seperti Trillian, ia diharapkan terpotong.';
$helptxt['hotTopicPosts'] = 'Mengubah jumlah pos untuk topik guna mencapai kondisi topik &quot;hangat&quot; atau
	&quot;panas&quot;.';
$helptxt['globalCookies'] = 'Membuat log dalam cookie tersedia menyeberangi subdomain.  Sebagai contoh, jika...<br />
	Laman anda ada di http://www.simplemachines.org/,<br />
	Dan forum anda ada di http://forum.simplemachines.org/,<br />
	Menggunakan pilihan ini akan mengizinkan anda untuk mengakses cookie forum pada laman anda.  Jangan hidupkan ini jika ada subdomain lain (seperti hacker.simplemachines.org) yang tidak dikawalan oleh anda.';
$helptxt['securityDisable'] = 'Ini <em>mematikan</em> pemeriksaan kata kunci tambahan untuk bahagian Pengurusan. Ini tidak disarankan!';
$helptxt['securityDisable_why'] = 'Ini adalah kata kunci anda saat ini. (hal yang sama yang anda pakai untuk masuk.)<br /><br />Daripada mengetik, ini membantu meyakinkan bahawa anda mahu melakukan Pengurusan apapun yang anda kerjakan, yakni adalah <strong>Anda</strong> yang mengerjakannya.';
$helptxt['emailmembers'] = 'Dalam mesej ini anda boleh menggunakan beberapa &quot;pembolehubah&quot;.  Ini adalah:<br />
	{\\$papan_url} - URL ke forum anda.<br />
	{\\$current_time} - Waktu semasa.<br />
	{\\$member.email} - Email ahli semasa.<br />
	{\\$member.link} - Link ahli semasa.<br />
	{\\$member.id} - ID ahli semasa.<br />
	{\\$member.name} - Nama ahli semasa.  (untuk personalisasi.)<br />
	{\\$latest_member.link} - Link ahli mendaftar paling baru.<br />
	{\\$latest_member.id} - ID ahli mendaftar paling baru.<br />
	{\\$latest_member.name} - Nama ahli mendaftar paling baru.';
$helptxt['attachmentEncryptFilenames'] = 'Mengenkripsi nama fail lampiran mengizinkan anda untuk memiliki lebih dari satu lampiran dengan
	nama yang sama, untuk menggunakan fail .php yang aman untuk lampiran, dan tingginya sekuriti.  Akan tetapi, boleh menyulitkan
	untuk membangun semula database anda jika sesuatu yang mengejutkan berlaku.';

$helptxt['failed_login_threshold'] = 'Mengatur jumlah percubaan gagal masuk sebelum mengalihkan pengguna ke layar pengingat kata kunci.';
$helptxt['oldTopicDays'] = 'Jika pilihan ini diaktifkan, peringatan akan dipaparkan ke pengguna saat mencuba menjawab ke topik yang tidak memiliki jawapan baru dalam beberapa waktu, dalam hari, ditetapkan dengan mengatur ini. Aturan ini menjadi 0 untuk mematikan ciri.';
$helptxt['edit_wait_time'] = 'Jumlah saat diizinkan untuk pos yang diedit sebelum masuk ke tarikh edit terakhir.';
$helptxt['edit_disable_time'] = 'Jumlah minit diizinkan berlalu sebelum pengguna tidak lagi mengedit pos yang telah dibuatnya. Aturan ke 0 untuk mematikan. <br /><br /><em>Catatan: Ini tidak mempengaruhi setiap pengguna yang mempunyai keizinan untuk mengedit pos orang lain.</em>';
$helptxt['enableSpellChecking'] = 'Mengaktifkan pemeriksaan ejaan. anda HARUS mempunyai librari pspell terinstalasi pada server anda dan tetapan PHP anda untuk menyiapkan pemakaian librari pspell. Server anda ' . (function_exists('pspell_new') ? 'DOES' : 'DOES NOT') . ' terlihat sudah menyiapkan ini.';
$helptxt['lastActive'] = 'Aturan jumlah minit untuk memaparkan orang yang aktif dalam X jumlah minit pada indeks papan. Defaultnya 15 minit.';

$helptxt['autoOptDatabase'] = 'Pilihan ini mengoptimakan database setiap beberapa hari.  Aturan jadi 1 untuk optimasi harian.  anda juga boleh menetapkan jumlah maksima pengguna online agar server anda tidak terlebih beban atau mesej terlalu banyak pengguna.';
$helptxt['autoFixDatabase'] = 'Ini secara automatik akan membetulkan table yang rosak dan kembali lagi seperti tidak ada yang terjadi.  Ini berguna kerana satu-satunya cara untuk membetulkan adalah dengan membaiki table, dan cara ini forum tidak akan mati sampai anda perhatikan.  Ia mengirimkan email kepada anda ketika ini terjadi.';

$helptxt['enableParticipation'] = 'Ini memaparkan ikon kecil pada topik yang dipos pengguna.';

$helptxt['db_persist'] = 'Memelihara sambungan aktif untuk meningkatkan persembahan.  Jika anda tidak pada server sendiri, ini boleh menyebabkan masalah dengan host anda.';

$helptxt['queryless_urls'] = 'Ini mengubah sedikit format URL agar mesin pencari lebih menyukainya.  Ini akan terlihat seperti index.php/topic,1.html.<br /><br />Ciri ini ' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'tidak') . ' akan bekerja pada server anda.';
$helptxt['countChildPosts'] = 'Menanda pilihan ini akan bererti bahawa pos dan topik dalam papan anak akan dihitung jumlahnya pada laman indeks.<br /><br />Ini akan menjadikan cukup lambat, tapi bererti bahawa induk yang tidak berisi pos tidak akan memaparkan \'0\'.';
$helptxt['fixLongWords'] = 'Pilihan ini memecah kata yang lebih panjang dari panjang tertentu ke dalam bagian sehingga mereka tidak mengganggu rupa forum. (sebanyak itu...)  Pilihan ini jangan diatur ke nilai di bawah 40. Pilihan ini tidak akan berfungsi denga forum yang menggunakan UTF-8 dan PHP kurang dari 4.4.0. Ini ' . (empty($GLOBALS['context']['utf8']) || version_compare(PHP_VERSION, '4.4.0') != -1 ? 'AKAN' : 'TIDAK AKAN') . ' bekerja pada server anda';

$helptxt['who_enabled'] = 'Pilihan ini mengizinkan anda untuk mengaktifkan atau mematikan kemampuan pengguna untuk melihat siapa yang sedang melihat forum dan apa yang mereka lakukan.';

$helptxt['recycle_enable'] = '&quot;Guna semula&quot; topik dan pos yang dipadam ke papan yang ditetapkan.';

$helptxt['enableReportPM'] = 'Pilihan ini mengizinkan pengguna anda untuk melaporkan mesej peribadi yang mereka terima ke pasukan Pengurusan. Ini berguna dalam membantu merekod setiap penyerangan sistem mesej peribadi.';
$helptxt['max_pm_recipients'] = 'Pilihan ini mengizinkan anda untuk mengatur jumlah penerima maksima yang diperbolehkan dalam satu mesej peribadi dikirimkan oleh ahli forum. Ini boleh dipakai untuk membantu menghentikan serangan spam pada sistem mesej. Catatan bahawa pengguna dengan keizinan untuk mengirimkan surat berkala dikecualikan dari batasan ini. Aturan sifar untuk tanpa batas.';
$helptxt['pm_posts_verification'] = 'Aturan ini akan memaksa pengguna untuk memasukan kod yang dipaparkan pada gambar pengesahan setiap kali mereka mengirimkan mesej peribadi. Hanya pengguna dengan jumlah pos di bawah angka yang diatur yang perlu memasukan kod - ini akan membantu memerangi naskhah spam automatik.';
$helptxt['pm_posts_per_hour'] = 'Ini akan membatasi jumlah mesej peribadi yang dikirimkan oleh pengguna dalam masa satu jam. Ini tidak mempengaruhi Pengurus atau Moderator.';

$helptxt['default_personalText'] = 'Sets the default text a user will have as their &quot;personal text.&quot;';

$helptxt['modlog_enabled'] = 'Mencatat semua tindakan moderasi.';

$helptxt['guest_hideContacts'] = 'Jika pilihan ini dipilih akan menyembunyikan alamat email dan butiran kontak messenger 
	terhadap semua ahli dan tetamu pada forum anda';

$helptxt['registration_method'] = 'Pilihan ini menentukan cara apa pendaftaran dipakai untuk orang yang mahu menyertai forum anda. anda dapat memilih dari:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Pendaftaran Dimatikan</strong><br />
				Mematikan proses pendaftaran, yang bererti bahawa tiada ahli baru boleh mendaftar untuk menyertai forum anda.<br />
		</li><li>
			<strong>Pendaftaran Terus</strong><br />
				Ahli baru dapat masuk dan mengepos terus setelah mendaftar dengan forum anda.<br />
		</li><li>
			<strong>Pengaktifan Emel</strong><br />
				Ketika pilihan ini diaktifkan mana-mana ahli yang mendaftar dengan forum akan menerima pautan pengaktifan dikirimkan kepada mereka yang mereka perlu klik sebelum mereka boleh menjadi ahli penuh.<br />
		</li><li>
			<strong>Kelulusan Pengurusan</strong><br />
				Pilihan ini akan menjadikan setiap ahli baru yang mendaftar dengan forum anda perlu diluluskan oleh pengurusan sebelum mereka menjadi ahli penuh.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Ketika pilihan ini ditanda semua ahli yang mengubah alamat emailnya dalam profilnya mesti mengaktifkan semula akaunnya dari email yang dikirimkan ke alamat itu';
$helptxt['send_welcomeEmail'] = 'Ketika pilihan ini diaktifkan semua ahli akan dikirim email penyambutan mereka pada komuniti anda';
$helptxt['password_strength'] = 'Aturan ini menentukan kekuatan kata kunci yang dipilih oleh pengguna forum anda. Semakin kuat kata kunci, semakin sulit untuk membongkar akaun ahli.
	Kemungkinan pilihannya adalah:
	<ul>
		<li><strong>Rendah:</strong> Panjang kata kunci mesti setidaknya empat karakter.</li>
		<li><strong>Medium:</strong> Panjang kata kunci mesti setidaknya delapan karakter, dan bukan bagian dari nama pengguna atau alamat email.</li>
		<li><strong>Tinggi:</strong> Seperti medium, kecuali kata kunci juga mesti berisi campuran huruf besar dan kecil, dan setidaknya satu angka.</li>
	</ul>';

$helptxt['coppaAge'] = 'Nilai yang ditetapkan dalam kotak ini akan menentukan usia minima di mana ahli baru diberi akses langsung ke forum.
	Semasa pendaftaran mereka akan ditanya sebagai pengesahan usia, dan jika permintaan mereka ditolak atau ditunda menunggu persetujuan ibubapa/penjaga - tergantung pada jenis batasan yang dipilih.
	Jika nilai 0 yang dipilih untuk aturan ini maka semua pembatasan usia akan diabaikan.';
$helptxt['coppaType'] = 'Jika pembatasan usia diaktifkan, maka aturan ini akan mendefinisikan jika pengguna di bawah usia minima cuba untuk mendaftar pada forum anda, ada dua kemungkinan pilihan:
	<ul>
		<li>
			<strong>Tolak Pendaftaran Mereka:</strong><br />
				Setiap ahli baru di bawah usia minima ditolak pendaftarannya secara langsung.<br />
		</li><li>
			<strong>Diperlukan Persetujuan Ibubapa/Penjaga</strong><br />
				Setiap ahli baru yang mencuba untuk mendaftar dan di bawah usia minima yang diperbolehkan memiliki tanda menunggu persetujuan, dan akan disediakan dengan satu borang setelah ibubapa/penjaganya memberi keizinan untuk menjadi ahli forum.
				Mereka juga akan disediakan dengan butiran kontak forum pada laman aturan, agar mereka dapat mengirimkan borang ke Pengurus dengan surat atau fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Kotak kontak diperlukan agar borang itu mendapat keizinan untuk pendaftaran di bawah umur yang boleh dikirimkan ke Pengurus forum. Butiran ini akan dipaparkan ke semua minor baru, dan diperlukan persetujuan dari ibubapa/penjaga. Setidaknya alamat pos atau nombor fax mesti disediakan.';

$helptxt['allow_hideOnline'] = 'Dengan mengaktifkan pilihan ini semua ahli akan boleh menyembunyikan status online mereka dari pengguna lain (kecuali Pengurus). Jika dimatikan, hanya pengguna yang dapat memoderasi forum boleh menyembunyikan statusnya. Catatan bahawa mematikan pilihan ini tidak akan mengubah status setiap ahli- ini hanya menghentikan mereka dari menyembunyikan diri mereka.';
$helptxt['allow_hideEmail'] = 'With this option enabled members can choose to hide their email address from other members. However, administrators can always see everyone\'s email addresses.';

$helptxt['latest_support'] = 'Panel ini memaparkan kepada anda beberapa masalah paling umum dan pertanyaan pada tetapan server anda. Jangan risau, informasi ini tidak dicatat atau apapun.<br /><br />Jika ini tetap ada seperti &quot;Mengambil informasi sokongan...&quot;, komputer anda mungkin tidak boleh menyambung ke <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Di sini anda boleh melihat beberapa pakej atau mods popular dan kerap, dengan instalasi cepat dan mudah.<br /><br />Jika bahagian ini tidak dipaparkan, komputer anda mungkin tidak dapat bersambung ke <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'kawasan ini memaparkan tema terbaru dan paling popular dari <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  Akan tetapi, ia mungkin tidak dipaparkan dengan betul jika komputer anda tidak boleh bersambung dengan <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Untuk sekuriti anda, jawapan pertanyaan anda (juga kata kunci anda) dienkripsi dengan cara di mana hanya SMF yang boleh mengatakan kepada anda jika anda memperolehnya dengan betul, maka ia tidak pernah mengatakan kepada anda (atau orang lain, yang terpenting!) apa jawapan atau kata kunci anda.';
$helptxt['moderator_why_missing'] = 'Kerana moderasi berfungsi atas dasar papan-demi-papan, anda mesti membuat ahli Moderator dari <a href="javascript:window.open(\'%s?action=admin;kawasan=manageboards\'); self.close();">fungsi pengurusan papan</a>.';

$helptxt['permissions'] = 'Keizinan adalah bagaimana anda mengizinkan grup untuk atau menolak grup, melakukan hal-hal spesifik.<br /><br />Anda boleh mengubah beberapa papan sekaligus dengan kotak tanda, atau melihat keizinan untuk grup tertentu dengan mengklik \'Ubah.\'';
$helptxt['permissions_board'] = 'Jika papan diatur ke \'Global,\' itu bererti bahawa papan tidak akan mempunyai keizinan khusus.  \'Lokal\' bererti ia mempunyai keizinan sendiri - terpisah dari yang global.  Ini mengizinkan anda untuk mempunyai papan yang memiliki lebih atau kurang keizinan daripada yang lain, tanpa memerlukan anda untuk mengaturnya bagi setiap papan.';
$helptxt['permissions_quickgroups'] = 'Ini mengizinkan anda untuk menggunakan penyiapan keizinan &quot;default&quot; - default bererti \'tidak ada yang khusus\', terhad bererti \'seperti tetamu\', Moderator bererti \'apa yang dimiliki Moderator\', dan terakhir \'pemeliharaan\' bererti keizinan yang sangat dekat dengan yang dimiliki Pengurus.';
$helptxt['permissions_deny'] = 'Menolak keizinan boleh membantu ketika anda mahu mengambil keizinan dari ahli tertentu. anda boleh menambah grup ahli dengan keizinan-\'tolak\' ke ahli yang mahu anda tolak keizinannya.<br /><br />Gunakan dengan hati-hati, keizinan yang ditolak akan tetap ditolak tanpa mempedulikan di grup ahli mana seorang ahli itu menyertai.';
$helptxt['permissions_postgroups'] = 'Mengaktifkan keizinan untuk grup berasaskan jumlah pos akan mengizinkan anda untuk memberi nilai keizinan ke ahli yang telah mengepos dalam jumlah mesej tertentu. Keizinan grup berasaskan pos <em>ditambahkan</em> ke keizinan grup ahli biasa.';
$helptxt['permissions_by_board'] = 'Enabling this option will allow you to, for each board for each membergroup, set different permissions. By default a board uses global permissions, but with this option enabled, you can switch a board to local permission settings. This provides a very sophisticated way to manage your permissions.';
$helptxt['membergroup_guests'] = 'Grup ahli Tetamu adalah semua pengguna yang tidak login masuk.';
$helptxt['membergroup_regular_members'] = 'Grup ahli Berdaftar Biasa adalah seluruh ahli yang masuk, tapi tidak memiliki grup ahli utama yang disediakan.';
$helptxt['membergroup_administrator'] = ' Grup Pengurus boleh, per definisi, melakukan apa saja dan melihat setiap papan. Tidak ada aturan kebenaran untuk Pengurus.';
$helptxt['membergroup_moderator'] = 'Grup ahli Moderator adalah grup ahli khusus. Keizinan dan aturan ditempatkan ke grup ini berlaku pada Moderator tapi hanya <em>pada papan yang mereka moderasi</em>. Di luar papan ini mereka adalah seperti ahli lain.';
$helptxt['membergroups'] = 'Dalam SMF, ada dua jenis grup di mana ahli boleh menjadi sebahagian darinya. Ini adalah:
	<ul>
		<li><strong>Grup Biasa:</strong> Grup biasa adalah grup di mana ahli tidak secara automatik masuk ke dalamnya. Untuk menempatkan ahli ke dalam grup cukup pergi ke profilnya dan klik &quot;Aturan Akaun&quot;. Dari sini anda dapat menempatkannya ke sejumlah grup biasa di mana mereka akan menjadi bagian dari grup.</li>
		<li><strong>Grup Pos:</strong> Tidak seperti grup biasa, grup pos tidak boleh ditempatkan. Sebaliknya, ahli secara automatik ditempatkan ke grup berasaskan pos ketika mereka mencapai jumlah minima pos yang diperlukan agar berada dalam grup itu.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Anda dapat mengedit acara ini dengan mengklik pada bintang merah (*) di sebelah namanya.';

$helptxt['maintenance_general'] = 'From here, you are able to optimize all your tables (makes them smaller and faster!), make sure you have the newest versions, find any errors that might be messing up your board, recount totals, and empty logs.<br /><br />The last two should be avoided unless something is wrong, but don\'t hurt anything.';
$helptxt['maintenance_backup'] = 'kawasan ini mengizinkan anda untuk menyimpan pendua dari semua pos, aturan, ahli, dan informasi lain dalam forum anda ke fail yang sangat besar.<br /><br />Disarankan untuk selalu melakukan ini, barangkali mingguan, untuk sekuriti.';
$helptxt['maintenance_rot'] = 'Ini mengizinkan anda untuk memadam topik lama <strong>sepenuhnya</strong> dan <strong>tidak boleh dikembalikan</strong> dari forum anda.  Disarankan bahawa anda mencuba untuk membuat backup lebih dulu seandainya anda memadam sesuatu yang tidak anda maksudkan.<br /><br />Gunakan pilihan ini dengan hati-hati.';

$helptxt['avatar_allow_server_stored'] = 'This allows your members to pick from avatars stored on your server itself.  They are, generally, in the same place as SMF under the avatars folder.<br />As a tip, if you create directories in that folder, you can make &quot;categories&quot; of avatars.';
$helptxt['avatar_allow_external_url'] = 'With this enabled, your members can type in a URL to their own avatar.  The downside of this is that, in some cases, they may use avatars that are overly large or portray images you don\'t want on your forum.';
$helptxt['avatar_download_external'] = 'Dengan mengaktifkan pilihan ini, URL yang diberikan oleh pengguna diakses untuk memuatturun avatar di lokasi itu. Bila sukses, avatar akan diperlakukan sebagai avatar yang dimuatnaik.';
$helptxt['avatar_allow_upload'] = 'This option is much like &quot;Allow members to select an external avatar&quot;, except that you have better control over the avatars, a better time resizing them, and your members do not have to have somewhere to put avatars.<br /><br />However, the downside is that it can take a lot of space on your server.';
$helptxt['avatar_download_png'] = 'PNG lebih besar, tapi menawarkan kualiti kompresi lebih baik.  Jika ini tidak ditanda, sebaliknya JPEG akan dipakai - yang selalu lebih kecil, tapi juga kualiti kurang dan agak suram.';

$helptxt['disableHostnameLookup'] = 'Ini mematikan pencarian nama host yang pada beberapa server sangat lambat.  Catatan bahawa ini akan membuat sekatan kurang efektif.';

$helptxt['search_weight_frequency'] = 'Faktor keutamaan dipakai untuk menentukan berkaitan hasil pencarian. Mengubah faktor keutamaan ini agar sesuai dengan hal yang terutama penting bagi forum anda. Sebagai contoh, forum laman berita, mungkin mengmahukan nilai relatif tinggi untuk \'usia mesej terakhir yang sama\'. Semua nilai relatif dalam hubungan satu sama lainnya dan mesti berupa integer positif.<br /><br />Faktor ini menghitung jumlah mesej yang sama dan membahaginya dengan jumlah mesej di dalam topik.';
$helptxt['search_weight_age'] = 'Faktor keutamaan dipakai untuk menentukan berkaitan hasil pencarian. Mengubah faktor keutamaan ini agar sesuai dengan hal yang terutama penting bagi forum anda. Sebagai contoh, forum laman berita, mungkin mengmahukan nilai relatif tinggi untuk \'usia mesej terakhir yang sama\'. Semua nilai relatif dalam hubungan satu sama lainnya dan mesti berupa integer positif.<br /><br />Faktor ini merata-ratkan usia mesej terakhir yang sama di dalam topik. Semakin baru mesej ini, semakin tinggi nilainya.';
$helptxt['search_weight_length'] = 'Faktor keutamaan dipakai untuk menentukan berkaitan hasil pencarian. Mengubah faktor keutamaan ini agar sesuai dengan hal yang terutama penting bagi forum anda. Sebagai contoh, forum laman berita, mungkin mengmahukan nilai relatif tinggi untuk \'usia mesej terakhir yang sama\'. Semua nilai relatif dalam hubungan satu sama lainnya dan mesti berupa integer positif.<br /><br />Faktor ini didasarkan pada ukuran topik. Semakin banyak mesej di dalam topik, semakin tinggi nilainya.';
$helptxt['search_weight_subject'] = 'Faktor keutamaan dipakai guna menguji berkaitan hasil pencarian. Ubah faktor keutamaan ini agar sesuai dengan kepentingan forum anda. Sebagai contoh, forum laman berita, mungkin mengmahukan nilai relatif lebih tinggi atas \'usia mesej yang sama\'. Semua nilai adalah relatif dalam hubungan yang satu denga  yang lain dan mesti integer positif.<br /><br />Faktor ini melihat apakah batasan pencarian boleh ditemukan di dalam subyek topik.';
$helptxt['search_weight_first_message'] = 'Faktor keutamaan dipakai untuk menentukan berkaitan hasil pencarian. Mengubah faktor keutamaan ini agar sesuai dengan hal yang terutama penting bagi forum anda. Sebagai contoh, forum laman berita, mungkin mengmahukan nilai relatif tinggi untuk \'usia mesej terakhir yang sama\'. Semua nilai relatif dalam hubungan satu sama lainnya dan mesti berupa integer positif.<br /><br />Faktor ini mencari apakah yang sama boleh ditemukan dalam mesej pertama pada topik.';
$helptxt['search_weight_sticky'] = 'Faktor keutamaan dipakai untuk menentukan berkaitan hasil pencarian. Ubah faktor keutamaan ini untuk menyesuaikan hal yang penting terutama untuk forum anda. Sebagai contoh, forum laman berita mungkin mahu memberi nilai relatif tinggi untuk \'usia mesej terakhir yang sama\'. Seluruh nilai relatif dalam hubungannya dengan yang lain dan mesti integer positif.<br /><br />Faktor ini terlihat apakah topik diLekitkan dan meningkatkan skor berkaitan jika demikian.';
$helptxt['search'] = 'Menyesuaikan semua aturan untuk fungsi pencarian di sini.';
$helptxt['search_why_use_index'] = 'Indeks pencarian dapat meningkatkan perlaksanaan pencarian pada forum anda. Terutama ketika jumlah mesej pada forum semakin besar, mencari tanpa indeks memerlukan waktu lama dan meningkatkan tekanan pada database anda. Jika forum anda lebih besar dari 50,000 mesej, anda mungkin mahu mempertimbangkan indeks pencarian untuk memastikan puncak perlaksanaan forum anda.<br /><br />Catatan bahawa indeks pencarian memerlukan beberapa ruang. Indeks teks lengkap adalah indeks built-in pada MySQL. Ia relatif kecil (tepatnya mempunyai ukuran yang sama seperti table mesej), tapi banyak kata tidak diindeks dan ia boleh dalam beberapa queri pencarian berubah menjadi sangat lambat. Indeks pilihan selalu lebih besar (bergantung pada tetapan anda, ia boleh mencapai 3 kali ukuran table mesej) tapi perlaksanaannya lebih baik daripada teks lengkap dan stabil secara relatif.';

$helptxt['see_admin_ip'] = 'Alamat IP dipaparkan ke Pengurus dan Moderator untuk menguruskan moderasi dan memudahkan merekod orang bila tidak baik.  Ingat bahawa alamat IP tidak selalu tepat, dan banyak alamat IP berubah dari masa ke semasa.<br /><br />Ahli juga diizinkan untuk melihat IP miliknya sendiri.';
$helptxt['see_member_ip'] = 'Alamat IP anda dipaparkan hanya bagi anda dan Moderator.  Ingat bahawa informasi ini tidak selalu tepat, dan banyak IP berubah dari masa ke semasa.<br /><br />Anda tidak boleh melihat alamat IP ahli lain, dan mereka tidak melihat IP anda.';

$helptxt['ban_cannot_post'] = 'Batasan \'tidak boleh mengepos\' mengubah forum menjadikannya hanya boleh dibaca untuk pengguna yang disekat. Pengguna tidak boleh membuat topik baru, atau menjawab ke topik yang sudah ada, mengirim mesej peribadi atau memilih dalam undian. Akan tetapi pengguna yang disekat masih boleh membaca mesej peribadi serta topik.<br /><br />Pesan peringatan dipaparkan ke pengguna yang disekat dengan cara ini.';

$helptxt['posts_and_topics'] = '	<ul>
		<li>
			<strong>Aturan Pos</strong><br />
			Mengubah aturan berkaitan dengan penulisan mesej dan cara mesej dipaparkan. anda juga boleh mengaktifkan pemeriksaan ejaan di sini.
		</li><li>
			<strong>Kod Buletin Papan</strong><br />
			Mengaktifkan kod yang memaparkan mesej forum dalam rupa yang benar. Juga menyesuaikan kod yang diizinkan dan yang tidak.
		</li><li>
			<strong>Sensor Perkataan</strong>
			Untuk menjaga bahasa pada forum anda di bawah kawalan, anda dapat menyensor kata-kata tertentu. Fungsi ini mengizinkan anda untuk mengubah kata terlarang ke dalam versi bersih.
		</li><li>
			<strong>Aturan Topik</strong>
			Mengubah aturan berkaitan dengan topik. Jumlah topik per laman, apakah topik lekit diaktifkan atau tidak, jumlah mesej yang diperlukan untuk topik hangat, dll.
		</li>
	</ul>';

?>