<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = 'array()';

$txt[1006] = 'Tutup jendela';

$helptxt['manage_boards'] = '
	<b>Edit Board</b><br />
	Dalam menu ini Anda bisa membuat atau mengatur ulang serta menghapus board dan kategori
	di atasnya. Sebagai contoh, jika Anda mempunyai situs yang luas
	yang menawarkan informasi &quot;Olah raga&quot; dan &quot;Mobil&quot; dan &quot;Musik&quot;, ini
	akan menjadi Kategori tingkat-teratas yang Anda buat. Di bawah masing-masing dari kategori ini
	Anda mungkin ingin membuat hirarki &quot;sub-kategori&quot;,
	atau &quot;Boards&quot; untuk topik masing-masing. Hirarki sederhana, dengan struktur ini: <br />
	<ul>
		<li>
			<b>Olah raga</b>
			&nbsp;- &quot;kategori&quot;
		</li>
		<ul>
			<li>
				<b>Baseball</b>
				&nbsp;- Board di bawah kategori &quot;Olah raga&quot;
			</li>
			<ul>
				<li>
					<b>Stats</b>
					&nbsp;- Anak board di bawah &quot;Bisbol&quot;
				</li>
			</ul>
			<li><b>Football</b>
			&nbsp;- Board di bawah kategori &quot;Olah raga&quot;</li>
		</ul>
	</ul>
	Kategori membolehkan Anda memisahkan board ke dalam topik board (&quot;Mobil,
	Olah raga&quot;), dan &quot;Board&quot; di bawahnya adalah topik sebenarnya di mana
	pengguna bisa menulis. pengguna yang tertarik dalam Pinto
	akan menulis pesan di bawah &quot;Mobil->Pinto&quot;. Kategori membolehkan orang
	dengan cepat mencari apa yang membuatnya tertarik: Daripada &quot;Toko&quot; yang Anda punyai
	&quot;Hardware&quot; dan &quot;Pakaian&quot; tempat di mana Anda bisa capai. Ini menyederhanakan pencarian
	Anda untuk &quot;komponen gabungan pipa&quot; karena Anda bisa pergi ke &quot;kategori&quot; Toko 
	Hardware daripada Toko Pakaian (di mana Anda tidak mungkin
	menemukan komponen gabungan pipa).<br />
	Seperti yang dicatat di atas, Board adalah kunci topik di bawah kategori board.
	Jika Anda ingin mendiskusikan &quot;Pintos&quot; Anda pergi ke kategori &quot;Otomotif&quot; dan
	masuk ke dalam board &quot;Pinto&quot; untuk menulis pemikiran Anda dalam board tersebut.<br />
	Fungsi Administratif untuk item menu adalah untuk membuat board baru
	di bawah setiap kategori, untuk menyusun ulangnya (simpan &quot;Pinto&quot; di belakang &quot;Chevy&quot;), atau
	untuk menghapus board seluruhnya.';

$helptxt['edit_news'] = '<b>Edit Berita Forum</b><br />
	Ini membolehkan Anda menetapkan teks untuk item berita yang ditampilkan pada halaman Indeks Board.
	Tambah item mana saja yang Anda inginkan (contoh., &quot;Jangan lupa konferensi Selasa ini&quot;). Setiap item berita harus
	dalam kotak terpisah, dan akan ditampilkan secara acak.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Melihat semua anggota</b><br />
			Melihat semua anggota dalam board. Anda diperlihatkan daftar hiperlink nama anggota. Anda bisa
			mengklik dari nama mana saja untuk mencari detail dari anggota (homepage, usia, dll.), dan sebagai
			Administrator Anda bisa mengubah parameter ini. Anda mempunyai kontrol lengkap, termasuk
			kemampuan untuk menghapusnya dari forum.<br /><br />
		</li>
		<li>
			<b>Menunggu persetujuan</b><br />
			Seksi ini hanya ditampilkan jika Anda menghidupkan persetujuan admin untuk semua pendaftaran baru. Setiap orang yang mendaftar bergabung dengan
			forum Anda hanya bisa menjadi anggota penuh setelah disetujui oleh admin. Seksi mendaftar semua anggota tersebut yang
			masih menunggu persetujuan, bersamaan dengan alamat IP dan emailnya. Anda bisa memilih baik menerima atau menolak (menghapus)
			setiap anggota dalam daftar dengan mencentang kotak di sebelah anggota dan memilih tindakan dari kotak drop-down di bawah
			layar. Ketika menolak anggota Anda bisa menghapus anggota baik dengan atau tanpa memberitahukan mereka tentang keputusan Anda.<br /><br />
		</li>
		<li>
			<b>Menunggu aktivasi</b><br />
			Seksi ini hanya akan terlihat jika Anda mempunyai aktivasi dari akun anggota dihidupkan pada forum. Seksi ini akan mendaftarkan semua
			anggota yang masih belum mengaktifkan akun baru mereka. Dari layar ini Anda bisa memilih untuk menerima, menolak atau mengingatkan
			anggota dengan pendaftaran yang tertunda. Seperti di atas Anda juga bisa memilih untuk mengirim email anggota untuk menginformasikan
			tindakan yang telah Anda buat.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Mengucilkan anggota</b><br />
	SMF menyertakan kemampuan untuk &quot;mengucilkan&quot; anggota, untuk menjaga orang yang melanggar kepercayaan board
	dengan spamming, penekanan, dll. Ini membolehkan Anda ke pengguna itu yang merugikan forum Anda. Sebagai admin,
	ketika Anda melihat pesan, Anda bisa melihat alamat IP pengguna untuk menulis pada saat itu. Dalam daftar pengucilan,
	Anda tinggal mengetikan alamat IP itu, menyimpan, dan mereka tidak lagi menulis dari lokasi tersebut.<br />Anda bisa juga
	mengucilkan orang melalui alamat email.';

$helptxt['modsettings'] = '<b>Edit Fitur dan Opsi</b><br />
	Ada beberapa fitur dalam seksi ini yang bisa diubah ke preferensi Anda.  Opsi untuk mods terinstalasi akan muncul di sini.';

$helptxt['number_format'] = '<b>Format Angka</b><br />
	Anda bisa menggunakan seting ini untuk membentuk cara dimana angka pada forum Anda akan ditampilkan ke pengguna. Format dari seting ini adalah:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Dimana \',\' adalah karakter yang digunakan untuk memisahkan grup ribuan, \'.\' adalah karakter yang digunakan sebagai titik desimal dan angka nol menunjukan akurasi pembulatan.';

$helptxt['time_format'] = '<b>Format Waktu</b><br />
	Anda mempunyai kekuatan untuk menyesuaikan bagaimana waktu dan tanggal seharusnya terlihat untuk Anda sendiri. Ada banyak huruf kecil, tetapi ini lebih sederhana.
	Konvensi mengikuti fungsi PHP strftime dan dijelaskan di bawah ini (lebih rinci bisa ditemukan di <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	Karakter berikut dikenal dalam format string: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - singkatan dari nama hari<br />
	&nbsp;&nbsp;%A - nama penuh dari hari<br />
	&nbsp;&nbsp;%b - singkatan nama bulan<br />
	&nbsp;&nbsp;%B - nama penuh dari bulan<br />
	&nbsp;&nbsp;%d - tanggal dalam bulan (01 sampai 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - sama seperti %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - tanggal dalam bulan (1 sampai 31) <br />
	&nbsp;&nbsp;%H - jam menggunakan waktu 24-jam (mulai 00 sampai 23) <br />
	&nbsp;&nbsp;%I - jam menggunakan waktu 12-jam (mulai 01 sampai 12) <br />
	&nbsp;&nbsp;%m - nomor bulan (01 to 12) <br />
	&nbsp;&nbsp;%M - angka menit <br />
	&nbsp;&nbsp;%p - baik &quot;am&quot; atau &quot;pm&quot; berdasarkan waktu yang diberikan<br />
	&nbsp;&nbsp;%R<b>*</b> - waktu dalam notasi 24 jam <br />
	&nbsp;&nbsp;%S - detik sebagai angka desimal <br />
	&nbsp;&nbsp;%T<b>*</b> - waktu saat ini, sama dengan %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2 digit tahun (00 sampai 99) <br />
	&nbsp;&nbsp;%Y - 4 digit tahun<br />
	&nbsp;&nbsp;%Z - zona waktu atau nama atau singkatan <br />
	&nbsp;&nbsp;%% - literal karakter \'%\' <br />
	<br />
	<i>* Tidak bekerja pada server berbasis Windows.</i></span>';

$helptxt['live_news'] = '<b>Pengumuman langsung</b><br />
	Kotak ini menampilkan pengumuman terbaru yang dimutakhirkan dari <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	Anda harus memeriksa pemutakhiran, rilis baru, dan informasi penting dari Simple Machines.';

$helptxt['registrations'] = '<b>Manajemen Pendaftaran</b><br />
	Seksi ini berisi semua fungsi yang bisa mengatur pendaftaran baru pada forum. Ini berisi sampai empat
	seksi yang terlihat tergantung pada seting forum Anda, yaitu:<br /><br />
	<ul>
		<li>
			<b>Daftarkan anggota baru</b><br />
			Dari layar ini Anda bisa memilih untuk mendaftarkan akun untuk anggota baru atas nama mereka. Ini bisa berguna dalam forum di mana pendaftaran ditutup
			terhadap anggota baru, atau dalam hal admin ingin membuat akun pengujian. Jika opsi terhadap akun yang memerlukan aktivasi
			dipilih, anggota akan dikirim email link aktivasi yang harus diklik sebelum mereka bisa menggunakan akun. Anda bisa
			memilih untuk mengirim email kata sandi baru pengguna untuk menyatakan alamat email.<br /><br />
		</li>
		<li>
			<b>Edit Perjanjian Pendaftaran</b><br />
			Ini membolehkan Anda menetapkan teks untuk perjanjian pendaftaran ketika anggota mendaftar pada forum Anda.
			Anda bisa menambah atau menghapus apapun dari perjanjian standar, yang disertakan dalam SMF.<br /><br />
		</li>
		<li>
			<b>Set Nama Terpakai</b><br />
			Menggunakan interface ini Anda bisa menetapkan kata-kata atau nama yang tidak boleh digunakan oleh pengguna Anda.<br /><br />
		</li>
		<li>
			<b>Seting</b><br />
			Seksi ini hanya akan muncul jika Anda mempunyai perijinan untuk administrasi forum. Dari layar ini Anda bisa memutuskan metode pendaftaran
			yang digunakan pada forum Anda, juga seting lain yang terkait dengan.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Log Moderasi</b><br />
	Seksi ini membolehkan anggota dari tim admin untuk melacak semua tindakan moderasi yang dilakukan oleh moderator. Untuk memastikan bahwa
	moderator tidak bisa menghapus referensi ke tindakan yang telah dilakukannya, entri tidak boleh dihapus 24 jam setelah tindakan dilakukan.
	Kolom \'obyek\' menampilkan variabel yang terkait dengan tindakan.';
$helptxt['error_log'] = '<b>Log Kesalahan</b><br />
	Log kesalahan melacak log setiap kesalahan serius terjadi oleh pengguna yang menggunakan forum Anda. Menampilkan semua kesalahan ini dengan tanggal yang bisa diurut
	dengan mengklik panah hitam disebelah setiap tanggal. Sebagai tambahan, Anda bisa menyaring kesalahan dengan mengklik gambar disebelah setiap statistik kesalahan. Ini
	membolehkan Anda untuk menyaring, misalnya dengan angota. Ketika filter aktif hanya hasil yang sesuai penyaringan yang akan ditampilkan.';
$helptxt['theme_settings'] = '<b>Seting Tema</b><br />
	Layar seting membolehkan Anda untuk mengubah seting tertentu terhadap tema. Seting ini termasuk opsi seperti direktori tema dan informasi URL tetapi
	juga opsi yang mempengaruhi tata letak tema pada forum Anda. Kebanyakan tema akan mempunyai berbagai opsi yang bisa dikonfigurasi oleh pengguna, membolehkan Anda menyesuaikan tema
	untuk memenuhi keperluan forum individual.';
$helptxt['smileys'] = '<b>Pusat Smiley</b><br />
	Di sini Anda bisa menambah dan mengubah smileys, dan set smiley.  Harap dicatat secara penting bahwa jika smiley satu set, itu dalam semua set - jika tidak, akan
	membingungkan pengguna Anda menggunakan set yang berbeda.<br /><br />

	Anda juga bisa mengedit ikon pesan dari sini, jika Anda menghidupkannya pada halaman seting.';
$helptxt['calendar'] = '<b>Atur Kalender</b><br />
	Di sini Anda bisa mengubah seting kalender saat ini juga menambah dan menghapus hari libur yang muncul pada kalender.';

$helptxt['serversettings'] = '<b>Seting Server</b><br />
	Di sini Anda bisa memperlihatkan konfigurasi utama untuk forum Anda. Bagian ini termasuk seting database dan url, juga item konfigurasi
	penting lainnya seperti seting surat dan caching. Berpikirlah dengan hati-hati saat mengedit seting ini karena kesalahan akan mengakibatkan
	forum tidak bisa diakses';

$helptxt['topicSummaryPosts'] = 'Ini membolehkan Anda untuk menetapkan jumlah tulisan sebelumnya yang ditampilkan dalam ringkasan topik di layar jawab.';
$helptxt['enableAllMessages'] = 'Set ini ke <em>maksimum</em> jumlah dari tulisan di mana topik menampilkan semua link.  Menetapkan ini lebih kecil daripada &quot;Pesan maksimum untuk ditampilkan dalam halaman topik&quot; berarti itu tidak pernah ditampilkan, dan setelan terlalu tinggi bisa memperlambat forum Anda.';
$helptxt['enableStickyTopics'] = 'Lengket adalah topik yang tetap ada di atas dari daftar topik. Ini kebanyakan digunakan untuk pesan
		penting. Meskipun Anda bisa mengubah dengan perijinan ini, standarnya hanya moderator dan administrator yang bisa membuat topik lengket.';
$helptxt['allow_guestAccess'] = 'Tidak mencentang kotak ini akan menghentikan pengunjung dari mengerjakan apapun tetapi tindakan sangat mendasar - masuk, mendaftar, pengingat kata sandi, dll. - pada forum Anda.  Ini tidak sama dengan tidak mengijinkan pengunjung mengakses board.';
$helptxt['userLanguage'] = 'Menghidupkan opsi ini akan membolehkan pengguna untuk memilih file bahasa yang digunakan. Ini tidak mempengaruhi
		pilihan standar.';
$helptxt['trackStats'] = 'Stats:<br />Ini membolehkan pengguna untuk melihat tulisan terakhir dan topik terpopuler pada forum Anda.
		Ini akan juga menampilkan beberapa statistik, seperti anggota online terbanyak, anggota baru dan topik baru.<hr />
		Lihat Halaman:<br />Menambah kolom lain ke halaman statistik dengan jumlah halaman dilihat pada forum Anda.';
$helptxt['titlesEnable'] = 'Menghidupkan Judul Sendiri akan membolehkan anggota dengan perijinan relevan untuk membuat judul khusus bagi mereka sendiri.
		Ini akan ditampilkan di bawah nama.<br /><i>Contoh:</i><br />Jeff<br />Orang Kalem';
$helptxt['topbottomEnable'] = 'Ini akan menambah tombol naik dan turun, dengan demikian anggota itu bisa pergi ke atas dan bawah halaman
		tanpa menggulung.';
$helptxt['onlineEnable'] = 'Ini akan menampilkan gambar untuk menunjukan apakah anggota online atau offline';
$helptxt['todayMod'] = 'Ini akan menampilkan &quot;Hari Ini&quot;, atau &quot;Kemarin&quot;, daripada tanggal.';
$helptxt['enablePreviousNext'] = 'Ini akan menampilkan link ke topik berikutnya dan sebelumnya.';
$helptxt['pollMode'] = 'Ini memilih apakah poling dihidupkan atau tidak. Jika poling dimatikan, setiap poling akan disembunyikan
		dari daftar topik. Anda bisa memilih untuk melanjutkan menampilkan topik seperti biasa tanpa poling mereka dengan memilih
		&quot;Tampilkan Poling yang Ada sebagai Topik&quot;.<br /><br />Untuk memilih siapa yang bisa menulis poling, melihat poling, dan yang mirip, Anda
		bisa membolehkan dan tidak perijinan tersebut. Ingat ini hanya jika poling tidak bekerja.';
$helptxt['enableVBStyleLogin'] = 'Ini akan menampilkan masuk lebih kecil pada setiap halaman forum untuk pengunjung.';
$helptxt['enableCompressedOutput'] = 'Opsi ini akan memadatkan output untuk merendahkan konsumsi bandwidth, tapi memerlukan
		zlib diinstalasi.';
$helptxt['databaseSession_enable'] = 'Opsi ini membuat penggunaan database untuk penyimpanan sesi - yang terbaik untuk keseimbangan server, tetapi membantu dengan masalah kehabisan waktu dan bisa membuat forum lebih cepat.';
$helptxt['databaseSession_loose'] = 'Menghidupkan ini akan mengurangi penggunaan bandwidth forum Anda, dan membuat mengklliknya tidak akan mengambil ulang halaman - kekurangannya ialah ikon baru tidak akan dimutakhirkan. (kecuali Anda mengklik ke halaman tersebut daripada kembali kepadanya.)';
$helptxt['databaseSession_lifetime'] = 'Ini adalah jumlah detik untuk sesi berakhir setelah mereka belum diakses.  Jika sesi tidak diakses terlalu lama, katakanlah mempunyai &quot;waktu habis&quot;.  Apapun lebih tinggi dari 2400 direkomendasikan.';
$helptxt['enableErrorLogging'] = 'Ini akan mencatat setiap kesalahan, seperti gagal masuk, dengan demikian Anda bisa melihat apa yang membuat salah.';
$helptxt['allow_disableAnnounce'] = 'Ini akan membolehkan pengguna untuk mengirimkan pemberitahuan dari topik yang Anda umumkan dengan mencentang kotak centang &quot;umumkan topik&quot; saat penulisan.';
$helptxt['disallow_sendBody'] = 'Opsi ini menghapus opsi untuk menerima teks jawaban dan tulisan dalam email pemberitahuan.<br /><br />Seringkali, anggota akan menjawab ke email pemberitahuan, dari banyak kasus berarti webmaster menerima jawaban.';
$helptxt['compactTopicPagesEnable'] = 'Ini akan menampilkan pilihan dari jumlah halaman.<br /><i>Contoh:</i>
		&quot;3&quot; untuk menampilkan: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; untuk menampilkan: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Ini akan menampilkan waktu dalam detik yang diperlukan SMF untuk membuat halaman di bawah board.';
$helptxt['removeNestedQuotes'] = 'Ini hanya akan tampil dengan kutipan dalam tulisan pertanyaan, tidak dalam tulisan kutipan dari tulisan tersebut.';
$helptxt['simpleSearch'] = 'Ini akan menampilkan bentuk pencarian sederhana dan link ke bentuk lebih maju.';
$helptxt['max_image_width'] = 'Ini membolehkan Anda menetapkan besar maksimum untuk gambar tulisan. Gambar lebih kecil dari maksimum tidak akan berpengaruh.';
$helptxt['mail_type'] = 'Seting ini membolehkan Anda untuk membuat baik seting standar PHP, atau menimpa seting tersebut dengan SMTP.  PHP tidak mendukung penggunaan otentikasi dengan SMTP (yang diperlukan kebanyakan host, sekarang) oleh karenanya jika Anda menginginkannya harus memilih SMTP.  Harap dicatat bahwa SMTP bisa lebih lambat, dan beberapa server tidak akan mengambil nama dan kata sandi.<br /><br />Anda tidak perlu mengisi seting SMTP jika ini disetek ke standar PHP.';
$helptxt['attachmentEnable'] = 'Lampiran adalah file yang di-upload anggota, dan dilampirkan ke tulisan.<br /><br />
		<b>Periksa ekstensi lampiran</b>:<br /> Anda ingin memeriksa ekstensi dari files?<br />
		<b>Ekstensi lampiran yang diijinkan</b>:<br /> Anda bisa menetapkan ekstensi yang diijinkan untuk file terlampir.<br />
		<b>Direktori lampiran</b>:<br /> Path ke folder lampiran Anda<br />(contoh: /home/sites/yoursite/www/forum/lampiran)<br />
		<b>Ruang spasi folder lampiran maksimum</b> (in KB):<br /> Pilih seberapa besar folder lampiran seharusnya, termasuk semua file di dalamnya.<br />
		<b>Maks besar lampiran per tulisan</b> (dalam KB):<br /> Pilih besar file maksimum dari semua lampiran dibuat per tulisan.  Jika ini lebih kecil daripada batas per-lampiran, ini akan menjadi batas.<br />
		<b>Maks besar per lampiran</b> (dalam KB):<br /> Pilih besar file maksimum untuk setiap lampiran terpisah.<br />
		<b>Maks jumlah lampiran per tulisan</b>:<br /> Pilih jumlah lampiran seseorang bisa membuatnya, per tulisan.<br />
		<b>Tampilkan lampiran sebagai gambar dalam tulisan</b>:<br /> Jika file yang di-upload adalah gambar, ini akan ditampilkan di bawah tulisan.<br />
		<b>Gambar disesuaikan saat muncul dalam tulisan</b>:<br /> Jika opsi di atas dipilih, ini akan menyimpan lampiran (lebih kecil) terpisah untuk thumbnail guna mengurangi bandwidth.<br />
		<b>Panjang dan tinggi Maksimum dari thumbnails</b>:<br /> Hanya digunakan dengan &quot;Sesuaikan gambar saat muncul dalam tulisan&quot; opsi, panjang dan tinggi maksimum untuk menyesuaikan lampiran yang diambil.  Itu akan disesuaikan secara proporsional.';
$helptxt['karmaMode'] = 'Karma adalah fitur yang menampilkan popularitas anggota. Jika diijinkan, bisa
		\'dihormati\' atau \'disenangi\' anggota lain, yakni bagaimana popularitasnya dihitung. Anda bisa mengubah
		jumlah dari tulisan yang diperlukan untuk mempunyai &quot;karma&quot;, waktu antara senang dan dihormati, dan jika administrator
		harus menunggu waktu ini juga.<br /><br />Baik grup dari anggota bisa menyenangi yang lain atau tidak dikontrol oleh
		perijinan.  Jika Anda mempunyai kesulitan mendapatkan fitur ini untuk bekerja buat setiap orang, klik dobel perijinan Anda.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'Kalender bisa digunakan untuk menampilkan ulang tahun, atau untuk menampilkan saat penting yang terjadi dalam komunitas Anda.<br /><br />
		<b>Tampilkan hari sebagai link ke \'Tulis Event\'</b>:<br />Ini akan membolehkan anggota untuk menulis event untuk hari itu, ketika mereka mengklik pada tanggal itu<br />
		<b>Tampilkan angka mingguan</b>:<br />Menampilkan mingguan.<br />
		<b>Maks hari ke depan pada indeks board</b>:<br />Jika ini disetel 7, event minggu depan  akan ditampilkan.<br />
		<b>Tampilkan hari libur pada indeks board</b>:<br />Tampilkan hari libur dalam bar kalender pada indeks board.<br />
		<b>Tampilkan hari ulang tahun pada indeks board</b>:<br />Menampilkan ulang tahun hari ini dalam kalender pada indeks board.<br />
		<b>Tampilkan event pada indeks board</b>:<br />Menampilkan event hari ini dalam kalender pada indeks board.<br />
		<b>Standar Board untuk Menulis</b>:<br />Standar board apa untuk menulis event?<br />
		<b>Ijinkan event tidak dilink ke tulisan</b>:<br />Ijinkan anggota untuk menulis event tanpa harus dikaitkan dengan tulisan dalam board.<br />
		<b>Minimum tahun</b>:<br />Pilih tahun &quot;pertama&quot; pada daftar kalender.<br />
		<b>Maksimum tahun</b>:<br />Pilih tahun &quot;terakhir&quot; pada daftar kalender<br />
		<b>Warta Ulang Tahun</b>:<br />Pilih warna dari teks ulang tahun<br />
		<b>Warna Event</b>:<br />Pilih warna teks event<br />
		<b>Warna Hari Libur</b>:<br />Pilih warna teks Hari libur<br />
		<b>Ijinkan event untuk memisah multipel hari</b>:<br />Centang untuk mengijinkan event dipisah ke dalam multipel hari.<br />
		<b>Maks jumlah hari dimana event bisa dipisah</b>:<br />Pilih hari maksimum yang bisa memisahkan event.<br /><br />
		Ingat bahwa penggunaan dari kalender (penulisan event, melihat event, dll.) dikontrol oleh set perijinan di layar perijinan.';
$helptxt['localCookies'] = 'SMF menggunakan cookies untuk menyimpan informasi masuk pada komputer klien.
	Cookies bisa disimpan secara global (myserver.com) atau secara lokal (myserver.com/path/ke/forum).<br />
	Periksa opsi ini jika Anda mengalami kesulitan dengan pengguna keluar secara otomatis.<hr />
	Secara global cookie yang disimpan kurang aman saat digunakan pada webserver berbagi (seperti Tripod).<hr />
	Cookie Lokal tidak bekerja di luar folder forum, oleh karenanya jika forum Anda disimpan di www.myserver.com/forum, halaman seperti www.myserver.com/index.php tidak bisa mengakses informasi akun.
	Terutama ketika menggunakan SSI.php, cookie global direkmomendasikan.';
$helptxt['enableBBC'] = 'Memilih opsi ini akan membolehkan anggota Anda menggunakan Kode Board Buletin (BBC) melalui forum, mengijinkan pengguna untuk membentuk tulisan mereka dengan gambar, tipe pembentukan dan banyak lagi.';
$helptxt['time_offset'] = 'Tidak semua administrator forum menginginkan forum mereka untuk menggunakan zona waktu yang sama dengan server di mana dia berada. Gunakan opsi ini untuk menentukan perbedaan waktu (dalam jam) dari mana forum dioperasikan menggunakan waktu server. Nilai negatif dan positif diperbolehkan.';
$helptxt['spamWaitTime'] = 'Di sini Anda bisa memilih jumlah waktu yang harus dilalui antara dua tulisan. Ini bisa digunakan untuk menghentikan orang dari "spamming" forum Anda dengan membatasi seberapa sering mereka menulis.';

$helptxt['enablePostHTML'] = 'Ini akan membolehkan penulisan dari tag dasar HTML:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Di sini Anda bisa memilih apakah tema standar bisa dipilih, tema apa yang akan digunakan oleh pengunjung,
	juga pilihan lainnya. Klik pada tema di kanan untuk mengubah seting.';
$helptxt['theme_install'] = 'Ini membolehkan Anda untuk menginstalasi tema baru.  Anda bisa melakukan ini dari direktori yang sudah dibuat, dengan meng-upload arsip untuk tema, atau dengan meng-copy tema standar.<br /><br />Catatan bahwa arsip atau direktori harus mempunyai file definisi <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Opsi ini akan membolehkan pengguna Anda untuk menggunakan Flash secara langsung di dalam tulisannya,
	seperti halnya gambar.  Ini bisa menimbulkan resiko keamanan, meskipun telah dengan sukses dihindari.
	GUNAKAN DENGAN RESIKO ANDA SENDIRI!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Ijinkan orang untuk menghubungkan <a href="' . $scripturl . '?action=.xml;sa=news">Berita terbaru</a>
	dan data yang mirip.  Ini direkomendasikan bahwa Anda membatasi jumlah tulisan terbaru/berita karena, ketika data rss
	ditampilkan dalam beberapa klien, seperti Trillian, itu akan dipotong.';
$helptxt['hotTopicPosts'] = 'Ubah jumlah tulisan untuk topik guna mencapai keadaan topik &quot;hangat&quot; atau
	&quot;sangat panas&quot; topic.';
$helptxt['globalCookies'] = 'Membuat log dalam cookie tersedia antar subdomain.  Sebagai contoh, jika...<br />
	Situs Anda adalah http://www.simplemachines.org/,<br />
	Dan forum Anda adalah http://forum.simplemachines.org/,<br />
	Menggunakan opsi ini akan membolehkan Anda untuk mengakses cookie forum pada situs Anda.  Jangan hidupkan ini jika ada subdomain lain (seperti hacker.simplemachines.org) yang tidak dikontrol oleh Anda.';
$helptxt['securityDisable'] = 'Ini <i>mematikan</i> pemeriksaan kata sandi tambahan untuk seksi administrasi. Ini tidak direkomendasikan!';
$helptxt['securityDisable_why'] = 'Ini kata sandi Anda saat ini. (sama dengan yang Anda pakai untuk masuk.)<br /><br />Perlu mengetik bantuan ini memastikan Anda bahwa Anda ingin melakukan apapun yang ingin Anda kerjakan, dan yaitu <b>Anda</b> mengerjakannya.';
$helptxt['emailmembers'] = 'Dalam pesan ini Anda bisa menggunakan beberapa &quot;variabel&quot;.  Diantaranya:<br />
	{$board_url} - URL ke forum Anda.<br />
	{$current_time} - waktu saat ini.<br />
	{$member.email} - email anggota saat ini.<br />
	{$member.link} - link anggota saat ini.<br />
	{$member.id} - id anggota saat ini.<br />
	{$member.name} - nama anggota saat ini.  (untuk personalisasi.)<br />
	{$latest_member.link} - link anggota terdaftar yang terbaru.<br />
	{$latest_member.id} - id anggota terdaftar yang terbaru.<br />
	{$latest_member.name} - nama anggota terdaftar yang terbaru.';
$helptxt['attachmentEncryptFilenames'] = 'Mengenkripsi nama file lampiran membolehkan Anda untuk mempunyai lebih dari satu lampiran dengan
	nama sama, untuk keamanan gunaka file .php sebagai lampiran, dan kemanan tertinggi.  Akan tetapi, akan membuat lebih sulit
	untuk membangun ulang database Anda jika sesuatu yang drastis terjadi.';

$helptxt['failed_login_threshold'] = 'Set jumlah percobaan masuk sebelum mengarahkan pengguna ke layar pengingat.';
$helptxt['oldTopicDays'] = 'Jika opsi ini dihidupkan sebuah pengingat akan ditampilkan ke pengguna saat mencoba menjawab topik yang belum mempunyai jawaban baru untuk beberapa waktu, dalam hari, ditetapkan oleh seting ini. Seting ini ke 0 untuk mematikan fitur ini.';
$helptxt['edit_wait_time'] = 'Jumlah detik diijinkan untuk mengedit tulisan sebelum masuk ke tanggal edit terakhir.';
$helptxt['edit_disable_time'] = 'Jumlah menit diijinkan untuk melalui sebelum pengguna tidak lagi mengedit tulisan yang dibuatnya. Set ke 0 untuk mematikan. <br /><br /><i>Catatan: Ini tidak akan berpengaruh ke pengguna mana pun yang mempunyai perijinan untuk mengedit tulisan orang lain.</i>';
$helptxt['enableSpellChecking'] = 'Hidupkan pemeriks ejaan. Anda HARUS mempunyai pustaka pspell terinstalasi pada server Anda dan konfigurasi PHP diset untuk menggunakan pustaka pspell. Server Anda ' . (function_exists('pspell_new') ? 'MEMPUNYAI' : 'TIDAK MEMPUNYAI') . ' muncul untuk mengaktifkannya.';
$helptxt['lastActive'] = 'Set jumlah menit untuk menampilkan orang aktif dalam X menit pada indeks board. Standarnya 15 menit.';

$helptxt['autoOptDatabase'] = 'Opsi ini mengoptimasi database setiap beberapa hari.  Set ke 1 untuk membuat optimasi harian.  Anda juga bisa menetapkan jumlah maksimum dari pengguna online, agar Anda tidak membebani server atau terlalu banyak pengguna tidak menjadi nyaman.';
$helptxt['autoFixDatabase'] = 'Ini akan membetulkan secara otomatis tabel yang rusak dan meneruskannya lagi seolah-olah tidak ada yang terjadi.  Ini berguna karena cara untuk membetulkannya hanyalah untu MEREPARASI tabel, dan cara ini forum Anda tidak akan mati sampai Anda catat.  Anda akan dikirim email jika ini terjadi.';

$helptxt['enableParticipation'] = 'Ini akan menampilkan ikon kecil pada topik yang telah ditulis pengguna.';

$helptxt['db_persist'] = 'Biarkan koneksi aktif untuk meningkatkan performansi.  Jika Anda bukan pada server tersendiri, ini akan menimbulkan masalah dengan host Anda.';

$helptxt['queryless_urls'] = 'Perubahan format URL ini sedikit agar mesin pencari akan menyukainya lebih baik.  Mereka akan mencari seperti index.php/topic,1.html.<br /><br />Fitur ini akan ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'tidak akan') . ' bekerja pada server Anda.';
$helptxt['countChildPosts'] = 'Mencentang opsi ini akan berarti bahwa tulisan dan topik dalam anak board akan dihitung totalnya pada halaman indeks.<br /><br />Ini menjadikan lebih lambat, tetapi berarti bahwa leluhurnya yang tanpa tulisan tidak akan menampilkan \'0\'.';
$helptxt['fixLongWords'] = 'Opsi ini memisahkan kata lebih panjang dari panjang tertentu ke dalam beberapa agar tidak mengganggu tata letak forum. (kebanyakan...)  Opsi ini seharusnya tidak di set ke nilai di bawah 40.';

$helptxt['who_enabled'] = 'Opsi ini membolehkan Anda untuk menghidupkan atau mematikan kemampuan untuk pengguna melihat siapa yang melihat forum dan apa yang mereka kerjakan.';

$helptxt['recycle_enable'] = '&quot;Siklus ulang&quot; topik terhapus dan tulisan pada board tertentu.';

$helptxt['enableReportPM'] = 'Opsi ini membolehkan pengguna Anda untuk melaporkan pesan pribadi yang mereka terima ke tim administrator. Ini mungkin berguna untuk melacak setiap penyerangan dari sistem pesan pribadi.';
$helptxt['max_pm_recipients'] = 'Opsi ini membolehkan Anda untuk menetapkan jumlah maksimum penerima yang diijinkan dalam pesan pribadi yang dikirim oleh anggota forum. Ini untuk membantu menghentikan penyerangan spam terhadap sistem PM. Catatan bahwa pengguna dengan perijinan untuk mengirim surat berita adalah dikecualikan dari batasan ini. Setel ke nol untuk tanpa batas.';
$helptxt['pm_posts_verification'] = 'Seting ini akan memaksa pengguna untuk memasukkan kode yang ditampilkan pada gambar verifikasi setiap kali mengirimkan pesan pribadi. Hanya pengguna dengan jumlah tulisan di bawah jumlah set nomor akan memerlukan kode - ini akan membantu memerangi naskah spam.';
$helptxt['pm_posts_per_hour'] = 'Ini akan membatasi jumlah pesan pribadi yang bisa dikirimkan oleh pengguna dalam periode satu jam. Ini tidak mempengaruhi admin atau moderator.';

$helptxt['default_personalText'] = 'Teks standar yang dipunyai pengguna sebagai &quot;teks pribadi.&quot; mereka';

$helptxt['modlog_enabled'] = 'Log semua tindakan moderasi.';

$helptxt['guest_hideContacts'] = 'Jika dipilih opsi ini akan menyembunyikan alamat email dan pesan detail kontak
	semua anggota dari setiap pengunjung pada forum Anda';

$helptxt['registration_method'] = 'Opsi ini menguji metode apa yang digunakan untuk pendaftaran bagi orang yang ingin bergabung dengan forum Anda. Anda bisa memilihnya dari:<br /><br />
	<ul>
		<li>
			<b>Pendaftaran dimatikan:</b><br />
				Mematikan proses pendaftaran, yang berarti bahwa tidak ada anggota baru lagi bisa bergabung dengan forum Anda.<br />
		</li><li>
			<b>Pendaftaran Langsung</b><br />
				Anggota baru bisa masuk dan menulis segera setelah pendaftaran pada forum Anda.<br />
		</li><li>
			<b>Aktivasi Anggota</b><br />
				Saat opsi ini dihidupkan setiap anggota yang mendaftar ke forum akan dikirim email link aktivasi yang harus diklik sebelum mereka bisa menjadi anggota penuh<br />
		</li><li>
			<b>Persetujuan Anggota</b><br />
				Opsi ini akan menjadikan semua anggota yang mendaftar ke forum Anda perlu disetujui oleh admin sebelum mereka menjadi anggota.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Saat opsi ini dicentang semua anggota yang mengubah alamat email dalam profilnya harus mengaktifkan kembali akun mereka dari email yang dikirim ke alamat tersebut';
$helptxt['send_welcomeEmail'] = 'Saat opsi ini dihidupkan semua anggota baru akan dikirim email selamat datang terhadap komunitas Anda';
$helptxt['password_strength'] = 'Seting ini menguji kekuatan yang diperlukan untuk kata sandi yang dipilih oleh pengguna forum Anda. Semakin kuat kata sandi, semakin sulit untuk menembus akun anggota.
	Kemungkinan opsinya adalah:
	<ul>
		<li><b>Rendah:</b> Panjang kata sandi harus setidaknya empat karakter.</li>
		<li><b>Sedang:</b> Panjang kata sandi setidaknya delapan karakter, dan tidak boleh berisi bagian nama pengguna atau alamat email.</li>
		<li><b>Tinggi:</b> Seperti Sedang, kecuali kata sandi harus juga berisi campuran huruf besar dan kecil, dan setidaknya satu angka.</li>
	</ul>';

$helptxt['coppaAge'] = 'Nilai yang ditetapkan dalam kotak ini akan menguji usia minimum bahwa anggota baru harus digeri ijin akses secara langsung ke forum.
	Saat pendaftaran mereka akan ditanyakan untuk meyakinkan apakah mereka lebih dari usia ini, dan jika tidak aplikasi mereka ditolak atau ditunda menunggu persetujuan orang tuanya - apapun jenis pembatasannya yang dipilih.
	Jika nilai 0 dipilih untuk seting ini kemudian semua pembatasan usia akan diabaikan.';
$helptxt['coppaType'] = 'Jika pembatasan dihidupkan, seting ini akan menetapkan itu terjadi ketika pengguna di bawah usia minimum mencoba mendaftar dengan forum Anda. Ada dua kemungkinan pilihan:
	<ul>
		<li>
			<b>Tolak Pendaftaran Mereka:</b><br />
				Setiap anggota baru di bawah usia minimum akan ditolak pendaftarannya secara langsung.<br />
		</li><li>
			<b>Memerlukan Persetujuan Orang Tua/Wali</b><br />
				Setiap anggota baru yang mencoba mendaftar di bawah usia minimum yang diperbolehkan akun mereka akan ditandai sebagai menunggu persetujuan, dan akan disiapkan dengan formulir yang harus diijinkan oleh orang tuanya untuk menjadi anggota forum.
				Mereka juga akan disiapkan dengan perincian kontak yang dimasukkan pada halaman seting, dengan demikian mereka dapat mengirimnya ke administrator dengan surat atau fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Kotak kontak diperlukan agar formulir perijinan untuk pendaftaran di bawah usia tersebut bisa dikirimkan ke administrator forum. Perincian ini akan ditampilkan ke semua, dan diperlukan persetujuan orang tua/wali. Setidaknya alamat pos atau nomor fax harus disertakan.';

$helptxt['allow_hideOnline'] = 'Dengan opsi ini dihidupkan semua anggota akan bisa menyembunyikan status online mereka dari pengguna lain (kecuali administrator). Jika dimatikan hanya pengguna yang memoderasi forum bisa menyembunyikan keberadaan mereka. Catatan bahwa mematikan opsi ini tidak akan mengubah status anggota yang sudah ada - hanya memberhentikannya dari menyembunyikan dirinya sendiri dikemudian hari.';
$helptxt['allow_hideEmail'] = 'Dengan menghidupkan opsi ini anggota bisa memilih untuk menyembunyikan alamat email mereka dari anggota lain. Tetapi, administrator selalu bisa melihat alamat email siapapun.';

$helptxt['latest_support'] = 'Panel ini menampilkan beberapa dari masalah umum dan pertanyaan pada konfigurasi server Anda. Jangan khawatir, informasi ini tidak dicatat atau lainnya.<br /><br />Jika ini tetap &quot;Mengambil dukungan informasi...&quot;, komputer Anda kemungkinan tidak bisa menghubungi <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Di sini Anda bisa melihat beberapa paket atau mod yang paling populer, dengan instalasi cepat dan mudah.<br /><br />Jika seksi ini tidak tampil, komputer Anda mungkin tidak menghubungi <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Area ini menampilkan tema paling populer dan terbaru <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  Ini mungkin tidak tampil dengan benar jika komputer Anda tidak bisa menghubungi <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Untuk keamanan Anda, jawaban dari pertanyaan Anda (juga kata sandi Anda) dienkripsi dalam cara dimana SMF hanya bisa memberitahu Anda jika benar, tidak akan memberitahu Anda (atau siapapun, penting!) apa jawaban Anda atau kata sandi Anda sebenarnya.';
$helptxt['moderator_why_missing'] = 'Karena moderasi dikerjakan dengan basis board-demi-board, Anda harus membuat moderator anggta dari <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">Interface manajemen board</a>.';

$helptxt['permissions'] = 'Perijinan adalah bagaimana Anda membolehkan grup, atau menolak grup, mengerjakan hal-hal tertentu.<br /><br />Anda bisa mengubah multipel board sekaligus denga kotak centang, atau melihat perijinan untuk grup tertentu dengan mengklik \'Ubah.\'';
$helptxt['permissions_board'] = 'Jika board disetel ke \'Global,\' itu berarti bahwa board tidak akan mempunyai perijinan khusus.  \'Lokal\' berarti itu akan mempunyai perijinan sendiri - terpisah dari yang global.  Ini membolehkan Anda untuk mempunyai board yang mempunyai perijinan lebih atau kurang daripada yang lainnya, tanpa Anda harus menyetel setiap board.';
$helptxt['permissions_quickgroups'] = 'Ini membolehkan Anda untuk menggunakan setup perijinan &quot;standar&quot; - standar berarti \'tidak ada yang khusus\', terbatas berarti \'mirip pengunjung\', moderator berarti \'apa yang dipunyai moderator\', dan terakhir \'pemeliharaan\' berarti perijinan yang mirip dengan administrator.';
$helptxt['permissions_deny'] = 'Menolak perijinan bisa berguna ketika Anda ingin mengambil perijinan dari anggota tertentu. Anda bisa menambah grup anggota dengen \'tolak\'-perijinan ke anggota yang Anda ingin tolak perijinannya.<br /><br />Gunakan dengan hati-hati, perijinan ditolak akan tetap ditolak apapun grup anggotanya dimana anggota terdaftar.';
$helptxt['permissions_postgroups'] = 'Menghidupkan perijinan untuk jumlah tulisan berdasarkan grup akan membolehkan Anda untuk menetapkan perijinan ke anggota yang telah menulis sejumlah pesan. Perijinan dari jumlah tulisan berdasarkan grup <em>ditambahkan</em> ke perijinan dari grup anggota reguler.';
$helptxt['permissions_by_board'] = 'Menghidupkan opsi ini akan membolehkan Anda untuk menyetel perijinan berbeda untuk setiap board dan grup anggota. Standarnya, board menggunakan perijinan global, tetapi dengan opsi ini dihidupkan, Anda bisa mengalihkan ke seting perijinan lokal. Ini menyediakan cara sempurna untuk mengatur perijinan Anda.';
$helptxt['membergroup_guests'] = 'Grup anggota pengunjung adalah semua pengguna yang tidak masuk.';
$helptxt['membergroup_regular_members'] = 'Anggota Reguler adalah semua anggota yang masuk, tetapi tidak mempunyai grup anggota.';
$helptxt['membergroup_administrator'] = 'Administrator bisa mengerjakan apapun per definisi, dan melihat board mana pun. Tidak ada seting perijinan untuk administrator.';
$helptxt['membergroup_moderator'] = 'Grup anggota Moderator adalah grup anggota khusus. Perijinan dan seting diterapkan ke grup ini untuk moderator tetapi hanya <em>pada board yang dimoderasinya</em>. Di luar board ini mereka seperti layaknya anggota lain.';
$helptxt['membergroups'] = 'Dalam SMF ada dua jenis grup dimana anggota Anda bisa menjadi bagiannya. Yaitu:
	<ul>
		<li><b>Grup Reguler:</b> Grup reguler adalah grup dimana anggota tidak secara otomatis dimasukkan ke dalamnya. Untuk menugaskan anggota agar Anda dalam grup, cukup pergi ke profil dan klik &quot;Seting Akun&quot;. Dari sini Anda bisa menugaskan sejumlah grup reguler yang akan menjadi bagian dari grup.</li>
		<li><b>Grup Penulis:</b> Tidak seperti grup reguler, grup penulis tidak bisa disetel. Sebaliknya, anggota otomatis disetel ke grup berdasarkan tulisan saat mereka mencapai jumlah minimum tulisan yang diperlukan untuk menjadi bagian grup itu.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Anda bisa mengedit event ini dengan mengklik bintang (*) merah disebelah namanya.';

$helptxt['maintenance_general'] = 'Dari sini, Anda bisa mengoptimasi semua tabel Anda (membuatnya lebih kecil dan cepat), pastikan Anda mempunyai versi terbaru, untuk mencari kesalahan yang mungkin mengacaukan board Anda, menghitung ulang total, dan mengosongkan log.<br /><br />Dua yang terakhir harus dihindari kecuali terjadi kesalahan..';
$helptxt['maintenance_backup'] = 'Area ini membolehkan Anda untuk menyimpan copy dari semua tulisan, seting, anggota, dan informasi lainnya dalam forum Anda ke file yang sangat besar.<br /><br />Direkomendasikan bahwa Anda sering melakukan ini, mungkin mingguan.';
$helptxt['maintenance_rot'] = 'Ini membolehkan Anda untuk menghapus topik lama <b>selamanya</b> dan <b>tidak bisa ditemukan lagi</b>.  Direkomendasikan bahwa Anda mencoba membuat cadangannya terlebih dahulu, untuk menjaga kesalahan menghapus yang sebenarnya bukan maksud Anda.<br /><br />Gunakan opsi ini dengan hati-hati.';

$helptxt['avatar_allow_server_stored'] = 'Ini membolehkan anggota Anda untuk memilih avatar yang disimpan pada server Anda sendiri.  Mereka, umumnya, dalam tempat yang sama dimana SMF berada di bawah folder avatar.<br />Sebagai saran, jika Anda membuat direktori dalam folder tersebut, Anda bisa membuat &quot;kategorie&quot; dari avatar.';
$helptxt['avatar_allow_external_url'] = 'Dengan ini dihidupkan, anggota Anda bisa mengetikan URL ke avatar mereka sendiri. Akibat dari ini, dalam beberapa kasus, mereka mungkin menggunakan avatar yang sangat besar atau gambar potret yang tidak Anda inginkan pda forum Anda.';
$helptxt['avatar_download_external'] = 'Dengan opsi ini dihidupkan, URL yang diberikan oleh pengguna diakses untuk men-download avatar di lokasi tersebut. Bila sukses, avatar akan diperlakukan sebagai avatar yang di-upload.';
$helptxt['avatar_allow_upload'] = 'Opsi ini sangat mirip dengan &quot;Ijinkan anggota untuk memilih avatar eksternal&quot;, kecuali bahwa Anda mempunyai kontrol lebih baik mengenai avatar, waktu penyesuaian lebih baik, dan anggota Anda tidak harus menyimpan avatar disuatu tempat.<br /><br />Tetapi, akibatnya adalah itu memerlukan banyak ruang pada server Anda.';
$helptxt['avatar_download_png'] = 'PNG lebih besar, tetapi menawarkan kualitas kompresi lebih baik.  Jika ini tidak dicentang, JPEG akan digunakan - yang lebih kecil, tapi juga kurang baik atau kualitas buram.';

$helptxt['disableHostnameLookup'] = 'Ini mematikan pencarian nama host, yang pada beberapa server sangat lambat.  Catatan bahwa ini akan membuat pengucilan kurang efektif.';

$helptxt['search_weight_frequency'] = 'Faktor bobot digunakan untuk menguji relevansi dari hasil pencarian. Ganti faktor bobot untuk menyamakan sesuatu yang sangat penting untuk forum Anda. Sebagai contoh, forum dari situs berita, mungkin menginginkan nilai relatif tinggi untuk \'usia dari pesan terakhir yang sama\'. Semua nilai adalah relatif dalam hubungannya ke yang lain dan harus integer positif.<br /><br />Faltor ini menghitung jumlah pesan yang sama dan membaginya dengan jumlah total pesan dalam topik.';
$helptxt['search_weight_age'] = 'Faktor bobot digunakan untuk menguji relevansi dari hasil pencarian. Ganti faktor bobot untuk menyamakan sesuatu yang sangat penting untuk forum Anda. Sebagai contoh, forum dari situs berita, mungkin menginginkan nilai relatif tinggi untuk \'usia dari pesan terakhir yang sama\'. Semua nilai adalah relatif dalam hubungannya ke yang lain dan harus integer positif.<br /><br />Faltor ini menghitung jumlah pesan yang sama dan membaginya dengan jumlah total pesan dalam topik. Semakin baru pesan ini, semakin tinggi nilainya.';
$helptxt['search_weight_length'] = 'Faktor bobot digunakan untuk menguji relevansi dari hasil pencarian. Ganti faktor bobot untuk menyamakan sesuatu yang sangat penting untuk forum Anda. Sebagai contoh, forum dari situs berita, mungkin menginginkan nilai relatif tinggi untuk \'usia dari pesan terakhir yang sama\'. Semua nilai adalah relatif dalam hubungannya ke yang lain dan harus integer positif.<br /><br />Faktor ini berdasarkan pada ukuran topik. Semakin banyak pesan dalam topik, semakin tinggi nilainya.';
$helptxt['search_weight_subject'] = 'Faktor bobot digunakan untuk menguji relevansi dari hasil pencarian. Ganti faktor bobot untuk menyamakan sesuatu yang sangat penting untuk forum Anda. Sebagai contoh, forum dari situs berita, mungkin menginginkan nilai relatif tinggi untuk \'usia dari pesan terakhir yang sama\'. Semua nilai adalah relatif dalam hubungannya ke yang lain dan harus integer positif.<br /><br />Faktor ini mencari term yang bisa ditemukan dalam subyek topik.';
$helptxt['search_weight_first_message'] = 'Faktor bobot digunakan untuk menguji relevansi dari hasil pencarian. Ganti faktor bobot untuk menyamakan sesuatu yang sangat penting untuk forum Anda. Sebagai contoh, forum dari situs berita, mungkin menginginkan nilai relatif tinggi untuk \'usia dari pesan terakhir yang sama\'. Semua nilai adalah relatif dalam hubungannya ke yang lain dan harus integer positif.<br /><br />Faktor ini mencari yang sama yang bisa ditemukan dalam pesan pertama dari topik.';
$helptxt['search_weight_sticky'] = 'Faktor bobot digunakan untuk menguji relevansi hasil pencarian. Ubah faktor bobot ini untuk menyamakan hal yang penting secara khusus untuk forum Anda. Sebagai contoh, forum dari situs berita, mungkin menginginkan nilai relatif tinggi untuk \'usia pesan terakhir yang sama\'. Semua nilai adalah relatif dalam hubungannya ke yang lain dan harus integer positif.<br /><br />Faktor ini mencari apakah topik adalah sticky dan meningkatkan skor relevansi jika ada.';
$helptxt['search'] = 'Sesuaikan semua seting untuk fungsi pencarian di sini.';
$helptxt['search_why_use_index'] = 'Indeks pencarian bisa lebih meningkatkan performansi dari pencarian pada forum Anda. Terutama ketika jumlah pesan pada forum menjadi lebih besar, pencarian tanpa indeks memerlukan waktu lama dan meningkatkan tekanan pada database Anda. Jika forum Anda lebih besar dari 50.000 pesan, mungkin Anda ingin mempertimbangkan membuat indeks pencarian untuk memastikan peak performsi dari forum Anda.<br /><br />Catatan bahwa pencarian indeks memerlukan beberapa ruang. Indeks teks penuh adlah indeks  built-in MySQL. Relatif kecil (ukurannya sama persis dengan tabel pesan), tapi banyak kata tidak diindeks dan dapat mencari permintaan menjadi sangat lambat. Indeks bebas sering lebih besar (tergantung pada konfigurasi Anda, ia bisa 3 kali ukuran tabel pesan) tapi performansi lebih baik daripada teks penuh dan relatif stabil.';

$helptxt['see_admin_ip'] = 'Alamat IP yang ditampilkan ke administrator dan moderator untuk memfasilitasi moderasi dan membuatnya lebih mudah dalam melacak orang jika tidak baik.  Ingat bahwa alamat IP tidak selalu mengidentifikasi, dan kebanyakan alamat IP orang berubah secara periodik.<br /><br />Anggota juga diijinkan untuk melihat IP mereka sendiri.';
$helptxt['see_member_ip'] = 'Alamat IP Anda ditampilkan hanya pada Anda dan moderator.  Ingat bahwa informasi ini tidak mengidentifikasi, dan kebanyakan IP berubah secara periodik.<br /><br />Anda tidak bisa melihat alamat IP anggota, dan mereka tidak bisa melihat punya Anda.';

$helptxt['ban_cannot_post'] = 'Pembatasan \'tidak bisa menulis\' menjadikan forum hanya-baca untuk pengguna terkucil. pengguna tidak bisa membuat topik baru, atau menjawab ke yang ada. mengirim pesan pribadi atau memilih dalam poling. pengguna terkucil masih bisa membaca pesan pribadi dan topik.<br /><br />Pesan pengingat ditampilkan ke pengguna yang dikucilkan dengan cara ini.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Seting Penulisan</b><br />
			Mengubah seting terkait dengan penulisan pesan dan cara pesan ditampilkan. Anda juga bisa menghidupkan pemeriksa ejaan di sini.
		</li><li>
			<b>Kode Buletin Board</b><br />
			Hidupkan kode yang menampilkan pesan forum dalam tata letak yang benar. Juga sesuaikan kode mana yang diijinkan dana mana yang tidak.
		</li><li>
			<b>Sensor Kata</b>
			Untuk menjaga bahasa pada forum Anda tetap di bawah kontrol, Anda bisa menyensor kata-kata tertentu. Fungsi ini membolehkan Anda mengubah kata-kata terlarang ke dalam versi tidak bersalah.
		</li><li>
			<b>Seting Topik</b>
			Mengubah seting terkait dengan topik. Jumlah topik per halaman, apakah topik lengket dihidupkan atau tidak, jumlah pesan yang diperlukan untuk topik menjadi hangat, dll.
		</li>
	</ul>';

?>