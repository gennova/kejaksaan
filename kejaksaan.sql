-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2020 pada 19.50
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kejaksaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `ringkasan` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `ringkasan`, `isi`, `tanggal`, `foto`) VALUES
(1, 'Siapa Sangka, Seorang Sri Mulyani Tak Pernah Juara Kelas Waktu SD', '<p>Menteri Keuangan (Menkeu) <a href=\"https://www.detik.com/tag/sri-mulyani\">Sri Mulyani</a> Indrawati mengungkapkan dirinya semasa duduk di bangku sekolah dasar (SD) tidak pernah juara kelas. Berbeda', '<p>Menteri Keuangan (Menkeu) <a href=\"https://www.detik.com/tag/sri-mulyani\">Sri Mulyani</a> Indrawati mengungkapkan dirinya semasa duduk di bangku sekolah dasar (SD) tidak pernah juara kelas. Berbeda dengan adik dan kakaknya yang selalu berprestasi di sekolah.</p>\r\n<p>\"Kebetulan kakak-kakak saya sama adik saya itu pintar banget, di sekolah itu juara kelas. Saya nggak pernah juara kelas waktu SD,\" kata Sri Mulyani dalam webinar, Minggu (20/12/2020).</p>\r\n<p>Menurutnya hal itu bisa saja menjadi alasan dirinya untuk berkecil hati lantaran setiap kali menerima rapor sekolah dirinya lah satu-satunya yang tidak juara kelas. Tapi dia meyakini bahwa setiap orang diciptakan berbeda.</p>\r\n<p>Dibandingkan saudara-saudara kandungnya, dia menilai dirinya memang berbeda. <a href=\"https://www.detik.com/tag/sri-mulyani\">Sri Mulyani</a> cenderung lebih senang dengan aktivitas luar ruangan alias outdoor. Bahkan dia sudah bisa mengendarai motor di saat kakak-kakaknya belum bisa.</p>\r\n<p>\"Orangtua saya punya vespa saya pinjam terus saya belajar saja naik vespa, padahal badan saya masih kurus kecil, sama motornya itu lebih berat motornya dua kali lipat, tapi saya suka outdoor, saya suka kegiatan naik gunung, saya suka kemping waktu kecil. Kakak saya relatif mungkin nggak, lebih kutu buku barangkali kalau bisa dikatakan,\" paparnya.</p>\r\n<p>\"Itu yang membedakan, jadi nggak bisa kalau dibandingkannya adalah rapor dengan rapor karena kita beda,\" sebutnya.</p>', '2020-12-21 00:38:10', 'sri-mulyani_169.jpg'),
(2, 'Beda Aturan Rapid Antigen, Pusat-Daerah Tak Kompak? ', '<p>Sejumlah pemerintah daerah memperketat perjalanan keluar masuk daerahnya untuk mencegah penyebaran virus Corona jelang libur Natal dan Tahun Baru. Salah satunya ialah dengan mewajibkan tes', '<p>Sejumlah pemerintah daerah memperketat perjalanan keluar masuk daerahnya untuk mencegah penyebaran virus Corona jelang libur Natal dan Tahun Baru. Salah satunya ialah dengan mewajibkan tes <a href=\"https://www.detik.com/tag/rapid-antigen\">rapid antigen</a> dan PCR.</p>\r\n<p>Namun begitu, pemerintah pusat dalam hal ini Kementerian Perhubungan (Kemenhub) menyatakan kriteria atau syarat perjalanan orang di masa liburan Natal dan Tahun Baru masih mengacu ketentuan lama yang mana syarat berpergian antar kota di semua moda hanya dengan menunjukkan bukti keterangan sehat melalui hasil rapid test atau PCR yang berlaku selama 14 hari.</p>\r\n<p>Kemenhub menyatakan akan mengikuti arahan dari Satuan Tugas Penanganan COVID-19 (Satgas COVID-19).</p>', '2020-12-21 00:40:30', 'infografis-harga-tertinggi-rapid-test-antigen-1_169.jpg'),
(3, 'Komnas KIPI Tegaskan Keamanan Vaksin COVID-19 Adalah Prioritas', '<p>Ketua Komisi Nasional Kejadian Ikutan Pasca Imunisasi (Komnas KIPI) Prof. Dr. dr. Hindra Irawan Satari mengatakan dalam setiap fase pengembangan vaksin, keamanan selalu menjadi prioritas utama. Ia ', '<p><strong>Jakarta</strong> -</p>\r\n<p>Ketua Komisi Nasional Kejadian Ikutan Pasca Imunisasi (Komnas KIPI) Prof. Dr. dr. Hindra Irawan Satari mengatakan dalam setiap fase pengembangan vaksin, keamanan selalu menjadi prioritas utama. Ia memaparkan setiap fase uji klinis yang dilakukan, tidak akan dapat maju jika ditemukan ketidakamanan pada proses pengembangan vaksin.</p>\r\n<p>\"Keamanan vaksin sudah dinilai dari sejak vaksin itu dirancang dan sebelum diujicobakan kepada manusia. Meski demikian, vaksin merupakan produk biologi sehingga tingkat keamanannya tidak mungkin mencapai 100%,\" papar Hindra dalam keterangan tertulis, Minggu (20/12/2020).</p>\r\n<p>Ia menuturkan bisa saja ada ikutan pasca pemberian vaksin seperti keluhan nyeri, perdarahan, atau terjadi pembengkakan. Tapi itu semua merupakan reaksi alamiah dari suatu vaksin.</p>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div id=\"div-gpt-ad-1572510743529-0\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>\"Jika memang terkandung bahan yang berbahaya dalam vaksin, hal tersebut pasti sudah diketahui sejak pengembangan vaksin di fase awal. Selain itu, semua hal terkait vaksin sudah diinformasikan secara transparan dan tidak mungkin disembunyikan,\" papar Hindra.</p>\r\n<p>Untuk itu, Hindra berharap masyarakat mencari dan mendapatkan informasi tentang vaksin melalui informasi resmi. Sehingga tidak terjadi simpang siur terkait keamanan vaksin.</p>', '2020-12-21 00:41:59', 'irawan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `konten` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `menu`, `konten`) VALUES
(1, 'VISI', '<p><span style=\"color: #e03e2d;\"><strong><span style=\"text-decoration: underline;\">Visi&nbsp;Kejaksaan R.I :</span></strong></span></p>\n<p><strong>\"Menjadi Lembaga Penegak Hukum yang Professional, Proporsional dan Akuntabel\"</strong></p>\n<p>Dengan Penjelasan :</p>\n<ol>\n<li>Lembaga Penegak Hukum: Kejaksaan RI sebagai salah satu lembaga penegak hukum di Indonesia yang mempunyai tugas dan fungsi sebagai penyidik pada tindak pidana tertentu, penuntut umum, pelaksana penetapan hakim, pelaksana putusan pengadilan yang telah memperoleh kekuatan hukum tetap, melakukan pengawasan terhadap pelaksanaan putusan pidana bersyarat, pidana pengawasan dan lepas bersyarat, bertindak sebagai Pengacara Negara serta turut membina ketertiban dan ketentraman umum melalui upaya antara lain : meningkatkan kesadaran hukum masyarakat, Pengamanan kebijakan penegakan hukum dan Pengawasan Aliran Kepercayaan dan penyalahgunaan penodaan agama</li>\n<li>Profesional: Segenap aparatur Kejaksaan RI dalam melaksanakan tugas didasrkan atas nilai luhur TRI KRAMA ADHYAKSA serta kompetensi dan kapabilitas yang ditunjang dengan pengetahuan dan wawasan yang luas serta pengalaman kerja yang memadai dan berpegang teguh pada aturan serta kode etik profesi yang berlaku</li>\n<li>Proporsional: Dalam melaksanakan tugas dan fungsinya Kejaksaan selalu memakai semboyan yakni menyeimbangkan yang tersurat dan tersirat dengan penuh tanggungjawab, taat azas, efektif dan efisien serta penghargaan terhadap hak-hak publik</li>\n<li>Akuntabel: Bahwa kinerja Kejaksaan Republik Indonesia dapat dipertanggungjawabkan sesuai dengan ketentuan yang berlaku</li>\n</ol>\n<p>&nbsp;</p>\n<p>Misi Kejaksaan R.I :</p>\n<p>1.&nbsp;Meningkatkan Peran Kejaksaan Republik Indonesia Dalam Program Pencegahan Tindak Pidana</p>\n<p>2. Meningkatkan Professionalisme Jaksa Dalam Penanganan Perkara Tindak Pidana</p>\n<p>3. Meningkatkan Peran Jaksa Pengacara Negara Dalam Penyelesaian Masalah Perdata dan Tata Usaha Negara&nbsp;</p>\n<p>4. Mewujudkan Upaya Penegakan Hukum Memenuhi Rasa Keadilan Masyarakat</p>\n<p>5. Mempercepat Pelaksanaan Reformasi Birokrasi dan Tata Kelola Kejaksaan Republik Indonesia yang Bersih dan Bebas Korupsi, Kolusi dan Nepotisme</p>\n<div>&nbsp;</div>\n<p>(Sumber: Peraturan Jaksa Agung Nomor: 007/A/JA/08/2016 tentang Perubahan Atas Peraturan Jaksa Agung Republik Indonesia Nomor PER-010/A/JA/06/2015 Tentang Rencana Strategis Kejaksaan Republik Indonesia Tahun 2015-2019 tanggal 4 Agustus 2016)</p>'),
(2, 'TUGAS', '<p><strong>TUGAS DAN WEWENANG</strong></p>\n<p>Pimpinan yang memegang adalah&nbsp;</p>'),
(3, 'STRUKTUR', NULL),
(4, 'PROFIL', NULL),
(5, 'SEJARAH', NULL),
(6, 'PEMBINAAN', NULL),
(7, 'INTELIJEN', NULL),
(8, 'TP4D', NULL),
(9, 'PIDANA UMUM', '<p>DATA</p>'),
(10, 'PIDANA KHUSUS', NULL),
(11, 'DATUN', NULL),
(12, 'PENGAWASAN', NULL),
(13, 'TATA USAHA', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `konten` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id`, `menu`, `konten`) VALUES
(1, 'PEMBINAAN', NULL),
(2, 'INTELIJEN', NULL),
(3, 'TP4D', NULL),
(4, 'PIDANA UMUM', NULL),
(5, 'PIDANA KHUSUS', NULL),
(6, 'DATUN', NULL),
(7, 'PENGAWASAN', NULL),
(8, 'TATA USAHA', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(5) UNSIGNED NOT NULL,
  `nopengaduan` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `namapelapor` varchar(100) NOT NULL,
  `alamatpelapor` varchar(200) DEFAULT NULL,
  `emailpelapor` varchar(100) DEFAULT NULL,
  `telponpelapor` varchar(100) DEFAULT NULL,
  `namaterlapor` varchar(100) DEFAULT NULL,
  `jabatanterlapor` varchar(100) DEFAULT NULL,
  `satuanterlapor` varchar(100) DEFAULT NULL,
  `subjekaduan` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nopengaduan`, `uname`, `namapelapor`, `alamatpelapor`, `emailpelapor`, `telponpelapor`, `namaterlapor`, `jabatanterlapor`, `satuanterlapor`, `subjekaduan`, `tujuan`) VALUES
(1, 'ADUAN-G52FSQ3PYX', 'user', 'Roby', 'Kalteng', 'roby@hotmail.com', '085643221232', 'Tasya', 'Mentri', 'Pendidikan', 'Pencurian Hati', 'barangbukti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkara`
--

CREATE TABLE `perkara` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `konten` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perkara`
--

INSERT INTO `perkara` (`id`, `menu`, `konten`) VALUES
(1, 'PIDANA UMUM', NULL),
(2, 'PIDANA KHUSUS', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(5) UNSIGNED NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `pengirim`, `pesan`, `remark`) VALUES
(1, 'user', 'bisa ajaaa', 'bisa ajaaa'),
(2, 'user', 'yahooooooooo', 'pidanakhusus'),
(3, 'user', 'yahooooooooo', 'pidanakhusus'),
(4, 'user', 'sssss', 'pidanaumum'),
(5, 'pidanaumum', 'daftar barang bukti', 'barangbukti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `usernm` varchar(20) NOT NULL,
  `passwd` varchar(200) NOT NULL,
  `leveluser` enum('admin','pembinaan','intelijen','pidanaumum','pidanakhusus','barangbukti','barangrampasan','user') NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `usernm`, `passwd`, `leveluser`, `nama`, `alamat`, `email`, `telpon`, `pekerjaan`, `pendidikan`) VALUES
(1, 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'admin', '', '', NULL, NULL, NULL, NULL),
(2, 'user', '*D5D9F81F5542DE067FFF5FF7A4CA4BDD322C578F', 'user', '', '', NULL, NULL, NULL, NULL),
(3, 'pembinaan', '*448F8D72D0010A5D78BA1C9CFBED30852A15B6EC', 'pembinaan', '', '', NULL, NULL, NULL, NULL),
(4, 'pidanaumum', '*90B4868A1D75BAE0636D8E118EB074B5647C1A8A', 'pidanaumum', '', '', NULL, NULL, NULL, NULL),
(5, 'pidanakhusus', '*1B41CFE940AF145EB0868EAC91BD55869BA14B05', 'pidanakhusus', '', '', NULL, NULL, NULL, NULL),
(7, '90', '*B51B3B35B15DBEC35106A773BF9396595F620A17', 'user', '90', '90', '90', '90', '90', '90'),
(8, 'barangbukti', '*4C318E5311A702FD1B8142264FFFD33886A35E84', 'barangbukti', '', '', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perkara`
--
ALTER TABLE `perkara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perkara`
--
ALTER TABLE `perkara`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
