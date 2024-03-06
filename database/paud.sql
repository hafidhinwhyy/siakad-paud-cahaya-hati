-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2024 pada 10.06
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(5) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `absen` int(2) NOT NULL,
  `izin` int(2) NOT NULL,
  `sakit` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `nama_siswa`, `absen`, `izin`, `sakit`) VALUES
(3, 'ABIDZAR DZIKRI', 1, 1, 0),
(4, 'AHMAD MAULANA YUSUF', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(7, 'galeri1661674680.jpeg', '<p>Munaqosah Bersama</p>', '2022-08-28 08:18:00', '2022-08-28 10:18:00'),
(8, 'galeri1661427725.jpeg', '<p>Kegiatan Muharram</p>', '2022-08-25 11:42:05', '2022-08-25 13:42:05'),
(9, 'galeri1671903944.jpg', '<p>Wisuda</p>', '2022-12-24 17:45:44', '2022-12-24 18:45:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(5) NOT NULL,
  `nama_guru` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(30) NOT NULL,
  `tpt_lahir` varchar(30) CHARACTER SET latin1 NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text CHARACTER SET latin1 NOT NULL,
  `jabatan` enum('Kepala Sekolah','Guru','Bendahara','') CHARACTER SET latin1 NOT NULL,
  `tmt` date NOT NULL,
  `tgl_sk` date NOT NULL,
  `no_sk` varchar(30) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama_guru`, `username`, `tpt_lahir`, `tgl_lahir`, `alamat`, `jabatan`, `tmt`, `tgl_sk`, `no_sk`, `foto`) VALUES
(1, 'Hafidhin Wahyu S.Pd', 'why', 'Bekasi', '2001-07-23', '<p>Trias Cibitung Bekasi</p>', 'Guru', '2022-12-01', '2021-07-01', '019/YPSH/VII/2021', 'guru1672145086.jpg'),
(3, 'Bagus Nazhareta', 'bagus', 'DEPOK', '2001-03-06', '<p>awdasdwasdawdasdadwsdawds</p>', 'Guru', '2021-04-03', '2021-07-06', 'awdasdavscdaw', 'guru1672985788.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tujuan` text NOT NULL,
  `sasaran` varchar(200) NOT NULL,
  `sbr_dana` varchar(200) NOT NULL,
  `pj` varchar(200) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama`, `keterangan`, `tujuan`, `sasaran`, `sbr_dana`, `pj`, `gambar`, `created_at`, `updated_at`) VALUES
(32, 'Kegiatan Parenting (Bertanam Hidroponik)', 'pada Tanggal 13 Mei 2019 Di Kebun Hidroponik Berkah Tani', 'Agar Siswa Dan Orang Tua Memahami Tentang Tanaman Hidroponik', 'Seluruh Siswa & Orang Tua PAUD Cahaya Hati', 'Bantuan Operasional Pendidikan (BOP) PAUD', 'Kepala Sekolah & Komite Sekolah', 'kegiatan1672033882.jpg', '2022-12-26 05:55:31', '2022-12-26 06:51:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `umur`, `keterangan`, `foto`) VALUES
(3, 'B2', '5 - 6 Tahun', '<p>B2 Adalah Rombongan Belajar Untuk Usia 5 - 6 Tahun.</p>', 'kelas1661427345.jpeg'),
(4, 'B1', '4 - 5 Tahun', '<p>B1 Adalah Rombongan Belajar Untuk Usia 4 - 5 Tahun.</p>', 'kelas1661427170.jpeg'),
(66, 'A', '3 - 4 Tahun', '<p>A Adalah Rombongan Belajar Untuk Usia 3 - 4 Tahun.</p>', 'kelas1707466466.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(5) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nipd` varchar(8) NOT NULL,
  `semester` int(2) DEFAULT NULL,
  `agama_dan_moral` text NOT NULL,
  `motorik` text NOT NULL,
  `kognitif` text NOT NULL,
  `sosial_emosional` text NOT NULL,
  `bahasa` text NOT NULL,
  `seni` text NOT NULL,
  `thn_ajaran` varchar(30) NOT NULL,
  `rombel` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nama_siswa`, `nipd`, `semester`, `agama_dan_moral`, `motorik`, `kognitif`, `sosial_emosional`, `bahasa`, `seni`, `thn_ajaran`, `rombel`) VALUES
(6, 'ABIDZAR DZIKRI', '20220288', 1, '<p>Adasdsa</p>', '<p>Awasd</p>', '<p>Adasda</p>', '<p>Awdas</p>', '<p>Afas</p>', '<p>Afsw</p>', '2022/2023', 'B1'),
(7, 'AHMAD MAULANA YUSUF', '20220268', 1, 'Aa', 'Bb', 'Cc', 'Dd', 'Ee', 'Ff', '2022/2023', 'A'),
(15, 'ABIDZAR DZIKRI', '20220288', 2, '<p>awd</p>', '<p>dwa</p>', '<p>sadaw</p>', '<p>awdas</p>', '<p>wads</p>', '<p>awdas</p>', '2022/2023', 'B1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_panggil` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `kelas` enum('Play Grup','Kelas A','Kelas B') NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `berat_badan_lahir` varchar(10) NOT NULL,
  `penyakit_sering_diderita` varchar(100) NOT NULL,
  `penyakit_pernah_diderita` varchar(100) NOT NULL,
  `pantangan_makan` varchar(100) NOT NULL,
  `nama_ayah_kdg` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `pendidikan_akhir_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `telepon_ayah` varchar(20) NOT NULL,
  `nama_ibu_kdg` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `pendidikan_akhir_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `telepon_ibu` varchar(20) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `pendidikan_akhir_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `telepon_wali` varchar(20) NOT NULL,
  `alamat_wali` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `nama_panggil`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `kelas`, `anak_ke`, `berat_badan`, `tinggi_badan`, `alamat`, `berat_badan_lahir`, `penyakit_sering_diderita`, `penyakit_pernah_diderita`, `pantangan_makan`, `nama_ayah_kdg`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pendidikan_akhir_ayah`, `pekerjaan_ayah`, `telepon_ayah`, `nama_ibu_kdg`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `pendidikan_akhir_ibu`, `pekerjaan_ibu`, `telepon_ibu`, `alamat_ortu`, `nama_wali`, `pendidikan_akhir_wali`, `pekerjaan_wali`, `telepon_wali`, `alamat_wali`, `username`, `foto`) VALUES
(84, 'Silvia Anggraeni', 'silvia', 'Bogor', '2001-01-24', 'P', 'Play Grup', '2', '45 kg', '151 cm', '<p>Padurenan Cibinong Bogor</p>', '3 kg', '-', 'tifus', '-', 'Adang Suganda', 'Jakarta', '1967-06-06', 'SMA', 'Buruh Harian Lepas', '089605177118', 'Lilis Lisnawati', 'Tasikmalaya', '1971-09-10', 'SMA', 'Ibu Rumah Tangga', '085781608909', '<p>Padurenan Cibinong Bogor</p>', '-', '-', '-', '-', '<p>-</p>', 'silvia', 'Silvia Anggraeni.jpg'),
(85, 'Salis Uswatunnisa Suganda', 'Salis', 'Bogor', '2008-08-05', 'P', 'Play Grup', '3', '50 kg', '157 cm', 'Padurenan Cibinong Bogor', '3 kg', '-', 'Demam Berdarah', '-', 'Adang Suganda', 'Jakarta', '1967-06-06', 'SMA', 'Buruh Harian Lepas', '089605177118', 'Lilis Lisnawati', 'Tasikmalaya', '1971-09-10', 'SMA', 'Ibu Rumah Tangga', '085781608909', 'Padurenan Cibinong Bogor', '-', '-', '-', '-', '-', 'salis', 'Salis Uswatunnisa Suganda.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `tentang_sekolah` text NOT NULL,
  `foto_sekolah` varchar(50) NOT NULL,
  `google_maps` text NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `foto_kepsek` varchar(50) NOT NULL,
  `sambutan_kepsek` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `email`, `telepon`, `alamat`, `logo`, `favicon`, `tentang_sekolah`, `foto_sekolah`, `google_maps`, `nama_kepsek`, `foto_kepsek`, `sambutan_kepsek`, `created_at`, `updated_at`) VALUES
(1, 'PAUD Cahaya Hati', 'cahayahati@gmail.com', '081234567893', '<p>Jl. Masjid Al-Baliyah Rt. 05/011 Kebon Kopi Pabuaran Cibinong Bogor 16916</p>', 'logo1674184405.png', '', '<p><strong>Visi Sekolah : </strong></p>\r\n<p><span style=\"font-size: 16.0pt; mso-bidi-font-size: 18.0pt; line-height: 150%; font-family: \'Arial\',sans-serif; mso-bidi-font-weight: bold;\">\"Membangun </span><span lang=\"IN\" style=\"font-size: 16.0pt; mso-bidi-font-size: 18.0pt; line-height: 150%; font-family: \'Arial\',sans-serif; mso-ansi-language: IN; mso-bidi-font-weight: bold;\">dan Membentuk generasi yang unggul,</span><span lang=\"IN\" style=\"font-size: 16.0pt; mso-bidi-font-size: 18.0pt; line-height: 150%; font-family: \'Arial\',sans-serif; mso-bidi-font-weight: bold;\"> </span><span lang=\"IN\" style=\"font-size: 16.0pt; mso-bidi-font-size: 18.0pt; line-height: 150%; font-family: \'Arial\',sans-serif; mso-ansi-language: IN; mso-bidi-font-weight: bold;\">kreatif, terarah dan berakhlak mulia.\"</span></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Misi Sekolah :</strong></p>\r\n<ol>\r\n<li>Menanamkan nilai-nilai moral, sosial, agama, dan sportifitas</li>\r\n<li>Mengembangkan keterampilan belajar pada tiap siswa</li>\r\n<li>Mengembangkan iklim belajar yang menyenangkan, berwawasan luas yang berakar pada norma nilai-nilai budaya bangsa.</li>\r\n<li>Memberdayakan seluruh potensi sekolah untuk memberikan mutu pelayanan yang maksimal.</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p><strong>Tujuan Sekolah : </strong></p>\r\n<ol>\r\n<li>Mewujudkan anak yang memiliki akhlak, pengetahuan, keterampilan yang seimbang pada setiap aspek perkembangannya.</li>\r\n<li>Mewujudkan anak yang ceria, sehat, mampu merawat diri dan lingkungannya.</li>\r\n<li>Menjadikan anak yang senantiasa berkepribadian islami sejak dini dan selalu berakhlak mulia sebagai bekal dimasa dewasa dan bekal menjalani kehidupan selanjutnya.</li>\r\n<li>Membina dan membimbing anak dengan pengetahuan, agama, berwawasan luas untuk mengikuti pendidikan lebih lanjut.</li>\r\n</ol>', 'sekolah1661426968.jpeg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4347078537357!2d106.8452749143126!3d-6.466485465025233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c11546d40219%3A0x8c0248857e2ce37c!2sMajelis%20Taklim%20Nurul%20Hidayah!5e0!3m2!1sid!2sid!4v1661001014246!5m2!1sid!2sid', 'Nurhayati S.Pd.I', 'kepalasekolah1661427640.jpeg', '<p style=\"text-align: center;\">Pendidikan anak sejak usia dini merupakan hal yang sangan penting. Berbagai hasil penelitian menyimpulkan bahwa fase perkembangan anak pada usia dini (0-6 tahun) merupakan fase emas (the golden age) bagi perkembangan kecerdasan, perilaku dan kepribadian anak yang akan memberikan pengaruh besar pada tahapan perkembangan anak selanjutnya.</p>', '2023-01-20 03:59:40', '2022-07-04 09:15:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(5) NOT NULL,
  `aspek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id`, `aspek`) VALUES
(1, 'Perkembangan Nilai Agama dan Moral'),
(2, 'Perkembangan Motorik'),
(3, 'Perkembangan Kognitif'),
(4, 'Perkembangan Sosial - Emosional'),
(5, 'Perkembangan Bahasa'),
(6, 'Perkembangan Seni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(5) NOT NULL,
  `nipd` varchar(8) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik_siswa` varchar(16) NOT NULL,
  `agama` enum('ISLAM','KATOLIK','PROTESTAN','HINDU','BUDHA','KONGHUCU') NOT NULL,
  `alamat` text NOT NULL,
  `jns_tinggal` varchar(50) NOT NULL,
  `transportasi` varchar(30) NOT NULL,
  `rombel` varchar(5) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skhun` varchar(10) NOT NULL,
  `penerima_kps` enum('Ya','Tidak','','') DEFAULT NULL,
  `no_kps` varchar(10) DEFAULT NULL,
  `foto` varchar(200) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `thn_lahir_ayah` varchar(5) NOT NULL,
  `pendidikan_ayah` enum('Tidak Sekolah','SD/Sederajat','SMP/Sederajat','SMA/Sederajat','Diploma','S1','S2','S3','-') NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `penghasilan_ayah` enum('< Rp. 500.000','Rp. 500.000 - Rp. 999.999','Rp. 1.000.000 - Rp. 1.999.999','Rp. 2.000.000 - Rp. 2.999.999','Rp. 3.000.000 - Rp. 3.999.999','Rp. 4.000.000 - Rp. 4.999.999','Rp. 5.000.000 - Rp. 5.999.999','> Rp. 6.000.000','Tidak Berpenghasilan') NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `thn_lahir_ibu` int(4) NOT NULL,
  `pendidikan_ibu` enum('Tidak Sekolah','SD/Sederajat','SMP/Sederajat','SMA/Sederajat','D3/Sederajat','S1','S2','S3','-') NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `penghasilan_ibu` enum('< Rp. 500.000','Rp. 500.000 - Rp. 999.999','Rp. 1.000.000 - Rp. 1.999.999','Rp. 2.000.000 - Rp. 2.999.999','Rp. 3.000.000 - Rp. 3.999.999','Rp. 4.000.000 - Rp. 4.999.999','Rp. 5.000.000 - Rp. 5.999.999','> Rp. 6.000.000','Tidak Berpenghasilan') NOT NULL,
  `nik_ibu` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nipd`, `nama_siswa`, `username`, `jk`, `nisn`, `tpt_lahir`, `tgl_lahir`, `nik_siswa`, `agama`, `alamat`, `jns_tinggal`, `transportasi`, `rombel`, `no_telp`, `email`, `skhun`, `penerima_kps`, `no_kps`, `foto`, `nama_ayah`, `thn_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nik_ayah`, `nama_ibu`, `thn_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nik_ibu`) VALUES
(7, '20220288', 'ABIDZAR DZIKRI', 'zikri', '', '-', 'DEPOK', '2016-07-21', '3276082107160003', 'ISLAM', '<p>JALAN REVOLUSI</p>', 'Bersama Orang Tua', 'Jalan Kaki', 'B2', '08126550585', '-', '-', 'Tidak', '-', 'siswa1673262558.jpg', 'DZULKIFLI', '1985', 'SMA/Sederajat', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 1.999.999', '3276080505850001', 'ITA SUTRIANI', 1984, 'SMA/Sederajat', 'Tidak Bekerja', 'Tidak Berpenghasilan', '3276054307840001'),
(8, '20220268', 'AHMAD MAULANA YUSUF', 'ahmad', '', '-', 'DEPOK', '2018-01-08', '3276080801180003', 'ISLAM', '<p>JALAN REVOLUSI</p>', 'Bersama Orang Tua', 'Jalan Kaki', 'A', '089520631933', '-', '-', 'Tidak', '-', 'siswa1673268819.jpg', 'MARDIYANTO', '1969', 'Diploma', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 1.999.999', '3276050901690001', 'MARYANIH', 1979, 'SMA/Sederajat', 'Tidak Bekerja', 'Tidak Berpenghasilan', '3276057003790001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(69, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(110, 'hafidhin', 'why', '202cb962ac59075b964b07152d234b70', 'guru'),
(118, 'Bagus Nazhareta', 'bagus', '202cb962ac59075b964b07152d234b70', 'guru'),
(119, 'ABIDZAR DZIKRI', 'zikri', '202cb962ac59075b964b07152d234b70', 'siswa'),
(120, 'AHMAD MAULANA YUSUF', 'ahmad', '202cb962ac59075b964b07152d234b70', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_siswa` (`nama_siswa`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nipd` (`nipd`),
  ADD KEY `nama_siswa` (`nama_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
