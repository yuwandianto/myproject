-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 06:39 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `nama_berita` varchar(700) NOT NULL,
  `title_berita` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `nama_berita`, `title_berita`) VALUES
(2, 'Judul berita Dari Admin1', 'title dari admin');

-- --------------------------------------------------------

--
-- Table structure for table `isi_berita`
--

CREATE TABLE `isi_berita` (
  `id` int(11) NOT NULL,
  `berita` varchar(700) NOT NULL,
  `link` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_berita`
--

INSERT INTO `isi_berita` (`id`, `berita`, `link`) VALUES
(1, 'jalur prestasi 11', '#'),
(2, 'jalur beasiswa11', '#'),
(3, 'Jalur Keren1', '#');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `nama_jadwal` varchar(700) NOT NULL,
  `title_jadwal` varchar(700) NOT NULL,
  `ket` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `nama_jadwal`, `title_jadwal`, `ket`) VALUES
(3, 'judul jadwal dari admin1', 'title jadwal dari admin', 'Jadwal dapat berubah sewaktu-waktu keterangan dari admin');

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id` int(11) NOT NULL,
  `judul1` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id`, `judul1`) VALUES
(1, 'test dari Admin');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`) VALUES
(1, 'jurusan111'),
(3, 'jurusan3\r\n\r\n'),
(5, 'Rekayasa Perangkat Lunak II'),
(6, 'Grafika'),
(7, 'Rekayasa Perangkat Lunak II'),
(8, 'Grafika'),
(9, 'Akuntansi'),
(10, 'Akuntansi IV'),
(11, 'Grafika'),
(12, 'tst'),
(13, '11');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `slide1` varchar(700) NOT NULL,
  `title1` varchar(700) NOT NULL,
  `img1` varchar(700) NOT NULL,
  `slide2` varchar(700) NOT NULL,
  `title2` varchar(700) NOT NULL,
  `img2` varchar(700) NOT NULL,
  `slide3` varchar(700) NOT NULL,
  `title3` varchar(700) NOT NULL,
  `img3` varchar(700) NOT NULL,
  `slide4` varchar(700) NOT NULL,
  `title4` varchar(700) NOT NULL,
  `img4` varchar(700) NOT NULL,
  `slide5` varchar(700) NOT NULL,
  `title5` varchar(700) NOT NULL,
  `img5` varchar(700) NOT NULL,
  `slide6` varchar(700) NOT NULL,
  `title6` varchar(700) NOT NULL,
  `img6` varchar(700) NOT NULL,
  `slide7` varchar(700) NOT NULL,
  `title7` varchar(700) NOT NULL,
  `img7` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `slide1`, `title1`, `img1`, `slide2`, `title2`, `img2`, `slide3`, `title3`, `img3`, `slide4`, `title4`, `img4`, `slide5`, `title5`, `img5`, `slide6`, `title6`, `img6`, `slide7`, `title7`, `img7`) VALUES
(1, 'KARTU INDONESIA PINTAR KULIAH12', 'Pemerintah Indonesia terus berkomitmen untuk fokus meningkatkan pembangunan Sumberdaya Manusia melalui berbagai upaya cerdas. Kartu Indonesia Pintar Kuliah (KIP-Kuliah) adalah salah satu upaya untuk membantu asa para siswa yang memiliki keterbatasan ekonomi tetapi berprestasi untuk melanjutkan studi di perguruan tinggi 1.2', '', 'dari adminPERTANYAAN SEPUTAR KIP-KULIAH? dari admin', 'dari admin Punya pertanyaan seputar KIP-Kuliah ? Frequently Asked Question (FAQ) dapat di akses di halaman', '', ' PENDAFTARAN KIP-KULIAH dari admin', 'Nomor Induk Siswa Nasional (NISN), Nomor Pokok Sekolah Nasional (NPSN)', '', 'AYO KULIAH test dari admin', 'KIP-Kuliah memberikan akses kepada seluruh siswa di Indonesia untuk menggapai cita-cita melalui pendidikan tinggi. Ayo segera cari kampus idamanmu. KIP-Kuliah berlaku untuk jalur seleksi masuk perguruan tinggi SNMPTN, SBMPTN, SNMPN, UMPN, Seleksi mandiri PTN dan seleksi mandiri PTS.', '0', 'ADA KENDALA PENDAFTARAN?1', 'Apabila ada kendala NIK, NISN dan NPSN yang tidak terbaca oleh sistem KIP-Kuliah, Silahkan koordinasi dengan operator DAPODIK/EMIS di sekolah masing-masing untuk perbaikan sumber data secara mandiri oleh operator di web1', '', 'KIP-KULIAH UNTUK PENDAFTAR SNMPN1', 'Siswa pendaftar KIP-Kuliah yang mendaftar seleksi SNMPN diharapkan untuk segera melengkapi berkas dan memilih seleksi SNMPN di menu seleksi sistem pendaftaran KIP-Kuliah. Simpan KAP dan PIN yang diperoleh untuk kemudian dimasukkan ke sistem pendaftaran SNMPN. Selamat berjuang ! dari admiijn', '', 'KIP-KULIAH UNTUK SNMPTN1', 'Pilihan jalur seleksi SNMPTN di sistem KIP-Kuliah akan dibuka mulai tanggal 2 Maret 2020. Siswa pendaftar SNMPTN diharapkan untuk segera melengkapi berkas dan memilih seleksi SNMPTN di Menu Seleksi sistem KIP-Kuliah.  Semangat menggapai asa !1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(700) NOT NULL,
  `dibuka` varchar(700) NOT NULL,
  `ditutup` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jadwal`
--

INSERT INTO `tabel_jadwal` (`id`, `kegiatan`, `dibuka`, `ditutup`) VALUES
(2, 'Makan makan', 'besok', 'minggu'),
(3, 'Makan makan', 'sabtu', 'minggu'),
(4, 'Toering', '24 april', '25 April'),
(5, 'Makan makan', 'sabtu', 'minggu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `xid` int(11) NOT NULL,
  `xemail` varchar(30) NOT NULL,
  `xpass` varchar(150) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`xid`, `xemail`, `xpass`, `nama`) VALUES
(1, 'admin@admin.com', '$2y$10$wrXi8zm0o2gA3/4BI/FnHOPnEj4DG1962MU7qR4/Voi7GJTCG2Nby', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrasi`
--

CREATE TABLE `tbl_registrasi` (
  `id` int(11) NOT NULL,
  `nomor_daftar` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(2) NOT NULL,
  `bln_lahir` varchar(2) NOT NULL,
  `thn_lahir` varchar(4) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL,
  `wna` varchar(50) NOT NULL,
  `inklusi` varchar(20) NOT NULL,
  `alamat_jalan` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `transportasi` varchar(2) NOT NULL,
  `no_kks` varchar(7) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  `terima_kps` varchar(10) NOT NULL,
  `no_kps` varchar(20) NOT NULL,
  `usul_pip` varchar(10) NOT NULL,
  `penerima_kip` varchar(10) NOT NULL,
  `nomor_kip` varchar(10) NOT NULL,
  `nama_kip` varchar(50) NOT NULL,
  `terima_fisik_kip` varchar(10) NOT NULL,
  `alasan_layak_pip` varchar(20) NOT NULL,
  `nama_ayah_kandung` varchar(50) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `tahun_lahir_ayah` varchar(4) NOT NULL,
  `pendidikan_ayah` varchar(10) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `penghasilan_ayah` varchar(20) NOT NULL,
  `kebutuhan_khusus_ayah` varchar(20) NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `tahun_lahir_ibu` varchar(4) NOT NULL,
  `pendidikan_ibu` varchar(10) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_ibu` varchar(20) NOT NULL,
  `kebutuhan_khusus_ibu` varchar(20) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `nik_wali` varchar(20) NOT NULL,
  `tahun_lahir_wali` varchar(4) NOT NULL,
  `pendidikan_wali` varchar(10) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `penghasilan_wali` varchar(20) NOT NULL,
  `nomor_tlp` varchar(20) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ekskul` varchar(225) NOT NULL,
  `tinggi_badan` varchar(3) NOT NULL,
  `berat_badan` varchar(3) NOT NULL,
  `jenis_jarak` varchar(10) NOT NULL,
  `jarak` varchar(3) NOT NULL,
  `waktu_jam` varchar(2) NOT NULL,
  `waktu_menit` varchar(2) NOT NULL,
  `jumlah_saudara` varchar(3) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `asli` varchar(5) NOT NULL,
  `login` enum('0','1') NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `bukti_kk` varchar(100) NOT NULL,
  `bukti_raport` varchar(100) NOT NULL,
  `bukti_prestasi` varchar(100) NOT NULL,
  `bin1` varchar(3) NOT NULL,
  `bin2` varchar(3) NOT NULL,
  `bin3` varchar(3) NOT NULL,
  `bin4` varchar(3) NOT NULL,
  `bin5` varchar(3) NOT NULL,
  `big1` varchar(3) NOT NULL,
  `big2` varchar(3) NOT NULL,
  `big3` varchar(3) NOT NULL,
  `big4` varchar(3) NOT NULL,
  `big5` varchar(3) NOT NULL,
  `mtk1` varchar(3) NOT NULL,
  `mtk2` varchar(3) NOT NULL,
  `mtk3` varchar(3) NOT NULL,
  `mtk4` varchar(3) NOT NULL,
  `mtk5` varchar(3) NOT NULL,
  `ipa1` varchar(3) NOT NULL,
  `ipa2` varchar(3) NOT NULL,
  `ipa3` varchar(3) NOT NULL,
  `ipa4` varchar(3) NOT NULL,
  `ipa5` varchar(3) NOT NULL,
  `rata1` varchar(5) NOT NULL,
  `rata2` varchar(5) NOT NULL,
  `rata3` varchar(5) NOT NULL,
  `rata4` varchar(5) NOT NULL,
  `rata5` varchar(5) NOT NULL,
  `tingkat_prestasi` varchar(20) NOT NULL,
  `juara_prestasi` varchar(20) NOT NULL,
  `bidang_prestasi` varchar(30) NOT NULL,
  `nama_prestasi` text NOT NULL,
  `benar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_registrasi`
--

INSERT INTO `tbl_registrasi` (`id`, `nomor_daftar`, `nama`, `nisn`, `jk`, `tempat_lahir`, `tgl_lahir`, `bln_lahir`, `thn_lahir`, `nik`, `no_akta`, `agama`, `kewarganegaraan`, `wna`, `inklusi`, `alamat_jalan`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kode_pos`, `transportasi`, `no_kks`, `anak_ke`, `terima_kps`, `no_kps`, `usul_pip`, `penerima_kip`, `nomor_kip`, `nama_kip`, `terima_fisik_kip`, `alasan_layak_pip`, `nama_ayah_kandung`, `nik_ayah`, `tahun_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `kebutuhan_khusus_ayah`, `nama_ibu_kandung`, `nik_ibu`, `tahun_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `kebutuhan_khusus_ibu`, `nama_wali`, `nik_wali`, `tahun_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nomor_tlp`, `nomor_hp`, `email`, `ekskul`, `tinggi_badan`, `berat_badan`, `jenis_jarak`, `jarak`, `waktu_jam`, `waktu_menit`, `jumlah_saudara`, `sekolah_asal`, `pass`, `asli`, `login`, `tahun_lulus`, `foto`, `bukti_kk`, `bukti_raport`, `bukti_prestasi`, `bin1`, `bin2`, `bin3`, `bin4`, `bin5`, `big1`, `big2`, `big3`, `big4`, `big5`, `mtk1`, `mtk2`, `mtk3`, `mtk4`, `mtk5`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `rata1`, `rata2`, `rata3`, `rata4`, `rata5`, `tingkat_prestasi`, `juara_prestasi`, `bidang_prestasi`, `nama_prestasi`, `benar`) VALUES
(1, '', '', '0000000001', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$2y$10$wrXi8zm0o2gA3/4BI/FnHOPnEj4DG1962MU7qR4/Voi7GJTCG2Nby', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', 'aklsdalksdj', '0000000003', '', 'lkajdlka', '01', '01', '1234', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', 'l;kdsja;ldsa', '0000000004', '', 'lkajdkas', '01', '01', '2222', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', 'alvian', '0000000005', '', 'malang', '02', '02', '2000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$2y$10$QCINjuiHbMyrWnLS/25yT.WeZnDXOXlCwtFPf484CGkQiQrBOmhwG', 'QJ43K', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', 'Andika Pratama', '0000000007', '1', 'Tanah Laut', '11', '01', '2000', '', '', 'Islam', '', '', '', 'Jalan Krakatau', '09', '09', '', 'Alur', 'Jorong', '', '', '', '', '', '', '', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SMP 1 Jorong', '$2y$10$bMDKAC8ptf4HoxcxkLsio.J5jEGN28ouaPcCePaYAcgTZnRdENLtS', 'UP2EF', '0', '2020', 'b0aa1a394b667b58895480fadc45aaf9.jpg', '73cfe2904e907989a6d7d198e05e4cab.pdf', 'e41a3dec2264e7d2da88d039aa9fa5fe.pdf', '8894a831d2c810631fa6873e2b5a7f24.jpg', '89', '67', '77', '78', '78', '77', '77', '78', '99', '87', '86', '56', '67', '99', '87', '77', '87', '88', '89', '87', '', '', '', '', '', 'Internasional', 'Tiga', 'Keagamaan', 'zzz', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email_sekolah` varchar(200) NOT NULL,
  `tlp_sekolah` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id`, `nama_sekolah`, `alamat`, `email_sekolah`, `tlp_sekolah`, `logo`) VALUES
(1, 'SMK 8 Ponogoro', 'Jl. Sudirman', 'smk8@yahoo.com', '081123456', 'logo_prov.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `gambar` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`id`, `judul`, `text`, `gambar`) VALUES
(16, 'test2', 'test', 'dekstop.png'),
(17, 'test2', 'test1', 'dit_psmk1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isi_berita`
--
ALTER TABLE `isi_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`xid`);

--
-- Indexes for table `tbl_registrasi`
--
ALTER TABLE `tbl_registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `isi_berita`
--
ALTER TABLE `isi_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `xid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_registrasi`
--
ALTER TABLE `tbl_registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
