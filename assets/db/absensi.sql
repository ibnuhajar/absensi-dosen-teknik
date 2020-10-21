-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2020 at 05:31 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `pendidikan` text NOT NULL,
  `alamat` text NOT NULL,
  `note` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `role`, `username`, `password`, `pendidikan`, `alamat`, `note`, `foto`, `date`) VALUES
(1, 'alex', 'alex@gmail.com', 'Administrator', 'superadmin', 'admin', 'alex', 'alex', 'alex', 'admin.jpg', '2020-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(225) NOT NULL,
  `url_jurusan` varchar(225) NOT NULL,
  `deskripsi_jurusan` text NOT NULL,
  `date_jurusan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `url_jurusan`, `deskripsi_jurusan`, `date_jurusan`) VALUES
(1, 'Mesin', 'https://ft.uisu.ac.id/index.php/akademik/program-studi/7-teknik-mesin', '<p></p><p><strong>VISI :</strong></p>\r\n<p>Menjadi Program Studi Teknik Mesin (PSTM) yang islami, andal, teruji, unggul yang</p>\r\n<p>bermartabat mulia, dan dicintai oleh masyarakat dan di-ridhoi Allah SWT.</p>\r\n<p><strong>MISI :</strong></p>\r\n<p>&nbsp; &nbsp; Melaksanakan proses pembelajaran sesuai dengan standar pendidikan\r\n tinggi konsentrasi pada bidang konversi energi, material dan \r\nmanufaktur.<br>&nbsp; &nbsp; Melaksanakan penelitian, pengabdian masyarakat dan dakwah islamiah secara professional dan berkesinambungan.<br>&nbsp; &nbsp; Menyelenggarakan dan mengembangkan program studi teknik mesin yang kompetitif.<br>&nbsp; &nbsp; Membentuk sarjana teknik mesin yang professional, turut berperan dalam pembangunan masyarakat, bangsa dan negara.</p>\r\n<p><strong>TUJUAN :</strong></p>\r\n<p>&nbsp; &nbsp; Menghasilkan sarjana teknik mesin di bidang konversi energi, \r\nmaterial dan manufaktur dan yang unggul, handal, teruji dan kompetitif \r\nyang berkarakter islami.<br>&nbsp; &nbsp; Menghasilkan karya-karya yang inovatif \r\ndalam bidang konversi energi, material dan manufaktur untuk meningkatkan\r\n kualitas akademik demi kemaslahatan masyarakat.<br>&nbsp; &nbsp; Meningkatkan kompetensi dan profesionalisme dosen teknik mesin.<br>&nbsp; &nbsp;\r\n Menghasilkan sarjana teknik mesin dalam bidang konversi energi, \r\nmaterial dan manufaktur untuk mengabdikan Ilmu dan teknologi demi \r\nkemaslahatan masyarakat.<br>&nbsp; &nbsp; Meningkatkan peran aktif alumni teknik mesin dalam membantu pemerintah, masyarakat dan stakeholder.</p><br><p></p>', '2020-09-25'),
(2, 'Elektro', 'https://ft.uisu.ac.id/index.php/akademik/program-studi/9-teknik-elektro', 'da', '2020-09-25'),
(3, 'Sipil', 'https://ft.uisu.ac.id/index.php/akademik/program-studi/10-teknik-sipil', '<p></p><p>Visi, misi dan tujuan Program Studi Teknik Sipil (PSTS) Fakultas Teknik UISU:</p>\r\n<p>VISI</p>\r\n<p>Menjadi Program Studi Teknik Sipil (PSTS) yang islami, andal, teruji, terdepan dan</p>\r\n<p>bermartabat mulia, dan dicintai oleh masyarakat dan di-ridhoi Allah SWT.</p>\r\n<p>MISI</p>\r\n<p>1. Melaksanakan proses pembelajaran yang memenuhi standar pendidikan tinggi Nasional</p>\r\n<p>dan selalu berorientasi kepada bidang Sains dan Rekayasa.</p>\r\n<p>2. Melaksanakan pendidikan, penelitian, pengabdian masyarakat dan dakwah islamiah</p>\r\n<p>dalam rangka penyebarluasan sains dan teknologi yang melibatkan staf pengajar dan</p>\r\n<p>Mahasiswa Jurusan Teknik Sipil.</p>\r\n<p>3. Mengembangkan kerja sama dengan berbagai Lembaga Pemerintahan dan Swasta.</p>\r\n<p>4. Menyediakan berbagai media pengajaran serta meningkatkan mutu Akademik sesuai</p>\r\n<p>dengan kebutuhan stake holder. Melakukan evaluasi secara berkesinambungan terhadap</p>\r\n<p>pengembangan Akademik.</p>\r\n<p>TUJUAN</p>\r\n<p>1. Menghasilkan sarjana teknik Sipil, yang teruji, kompetitip, berkarakter islami sesuai</p>\r\n<p>dengan kebutuhan masyarakat.</p>\r\n<p>2. Menghasilkan karya Penelitian yang inovatif dalam bidang rekayasa dan teknologi untuk</p>\r\n<p>meningkatkan mutu pendidikan demi kemaslahatan umat.</p>\r\n<p>3. Menjalin kerja sama dalam bidang Rekayasa dan teknologi dengan berbagai institusi</p>\r\n<p>pemerintah dan swasta.</p>\r\n<p>4. Melengkapi dan meningkatkan berbagai sarana dan prasarana pembelajaran secara</p>\r\n<p>berkelanjutan sesuai dengan kebutuhan stake holder.</p>\r\n<p>5. Melaksanakan evaluasi secara berkesinambungan terhadap pengembangan kurikulum</p>\r\n<p>jurusan teknik sipil.</p>\r\n<p>KOMPETENSI LULUSAN PROGRAM STUDI TEKNIK SIPIL</p>\r\n<p>1. Menjadi perancang/pelaksana bangunan teknik sipil</p>\r\n<p>Merancang proyek bangunan teknik sipil (Gedung, Jembatan, Jalan Raya, Bendung, Saluran, dll)</p>\r\n<p>Melaksanakan pekerjaan pembangunan proyek bangunan teknik sipil</p>\r\n<p>2. Ahli Rekayasa Jalan Raya dan Transportasi</p>\r\n<p>Mampu merancang, menganalisis, menghitung trase jalan dan proyek konstruksi perkerasan jalan raya</p>\r\n<p>Mampu melaksanakan pembangunan dan pengawasan proyek konstruksi jalan raya</p>\r\n<p>Mampu melakukan pengujian bahan – bahan kontruksi jalan</p>\r\n<p>3. Ahli Struktur/Konstruksi Gedung dan Jembatan</p>\r\n<p>Mampu merancang, menganalisis, menghitung bangunan gedung bertingkat dan bangunan gedung lainnya serta bertingkat</p>\r\n<p>Mampu melaksanakan pembangunan dan pengawasan proyek gedung bertingkat dan bangunan gedung lainnya serta bertingkat</p>\r\n<p>Mampu melakukan pengujian bahan – bahan konstruksi beton, baja dan kayu</p>\r\n<p>4. Ahli Perencanaan dan Pengelolaan Instalasi Pengolahan Air Bersih</p>\r\n<p>Mampu merencanakan keperluan air bersih, termasuk kebutuhan air bersih disuatu tempat, lengkap dengan perencanaan dimensi</p>\r\n<p>bangunan – bangunan pengolahan yang ada didalam instalasi pengelolaan air bersih.</p>\r\n<p>Mampu melakukan pengelolaan dan perawatan pada instalasi pengelolaan air bersih.</p>\r\n<p>5. Ahli Manajemen Konstruksi</p>\r\n<p>Mampu merancang, menganalisis, menghitung pekerjaan konstruksi dengan mengutamakan unsur – unsur ekonomi serta</p>\r\n<p>memperhatikan kemampuan teknologi</p>\r\n<p>Mampu melaksanakan pengawasan dan pengendalian proyek konstruksi bangunan teknik sipil</p>\r\n<p>6. Ahli Manajemen Properti</p>\r\n<p>Mampu merancang, menganalisis dan menghitung pekerjaan properti dengan mengutamakan unsur – unsur ekonomi serta</p>\r\n<p>memperhatikan kemampuan manajemen.</p>\r\n<p>Mampu melaksanakan pengawasan dan pengendalian properti manajemen</p>\r\n<p>7. Ahli Struktur/Konstruksi Gedung dan Jembatan</p>\r\n<p>Memahami cara bertindak dan berprilaku timbal balik antara sesama dalam kegiatan organisasi pada saat perancangan dan</p>\r\n<p>pelaksanaan kegiatan proyek dan mampu menyatakan pendapat secara lisan dan tertulis serta memahami aturan – aturan yang</p>\r\n<p>berlaku.</p>\r\n<p>8. Berkehidupan bermasyarakat</p>\r\n<p>Memahami tentang pentingnya nilai – nilai moral dalam bertindak dan bekerja sesuai profesi kompetensi pendukung.</p>\r\n<p>Mampu menggunakan konsep – konsep manajemen, keuangan dan ekonomi rekayasa dalam pekerjaan – pekerjaan teknik sipil</p>\r\n<p>Mampu mengidentifikasi, menganalisis dan membantu merencanakan serta merancang masalah – masalah lingkungan terutama lingkungan perkotaan.</p><p></p>', '2020-09-25'),
(4, 'Industri', 'https://ft.uisu.ac.id/index.php/akademik/program-studi/6-teknik-industri', '21', '2020-09-24'),
(5, 'Informatika', 'https://ft.uisu.ac.id/index.php/akademik/program-studi/8-teknik-informatika', '231', '2020-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `dosen` varchar(225) NOT NULL,
  `matakuliah` varchar(225) NOT NULL,
  `jurusan` varchar(225) NOT NULL,
  `absen` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `dosen`, `matakuliah`, `jurusan`, `absen`, `date`) VALUES
(21, 'Ibnuhajar', 'dadawd', 'Elektro', 2, '2020-10-19'),
(22, 'Ibnuhajar', 'dwad', 'Industri', 0, '2020-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_mk` int(11) NOT NULL,
  `nama_mk` varchar(225) NOT NULL,
  `sks_mk` int(5) NOT NULL,
  `semester_mk` int(5) NOT NULL,
  `jurusan_mk` varchar(225) NOT NULL,
  `deskripsi_mk` text NOT NULL,
  `date_mk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mk`, `nama_mk`, `sks_mk`, `semester_mk`, `jurusan_mk`, `deskripsi_mk`, `date_mk`) VALUES
(2, 'Machine learning', 3, 7, 'Informatika', '<p>ini adalah mata kuliah machine learning<br></p>', '2020-09-28'),
(7, 'dadawd', 2, 3, 'Elektro', '<p>wadadaw<br></p>', '2020-10-14'),
(8, 'dwad', 3, 5, 'Sipil', '<p>wadawda<br></p>', '2020-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nip_pengajar` varchar(20) NOT NULL,
  `nama_pengajar` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `jurusan_pengajar` varchar(225) NOT NULL,
  `deskripsi_pengajar` text NOT NULL,
  `date_pengajar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nip_pengajar`, `nama_pengajar`, `username`, `password`, `jurusan_pengajar`, `deskripsi_pengajar`, `date_pengajar`) VALUES
(4, 'FT289177391', 'Ibnuhajar', 'ibnuhajar', '123456', 'Informatika', '<p>dosen aajjajdahjwhda<br></p>', '2020-10-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
