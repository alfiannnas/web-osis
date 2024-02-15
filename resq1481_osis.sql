-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2024 at 11:47 AM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resq1481_osis`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `pesan`) VALUES
(1, 'asdasd', '2131231'),
(2, 'asdas', 'aku mau mcd'),
(3, 'asdasda', 'asdasdsa'),
(4, 'M. ALFFI AZIZI ', 'Semoga OSIM MAS MUALLIMIN 2024 bisa menjadi yang terbaik dari yang terbaik. Semangat!!!, \r\njadikan Visi,Misi, dan program yang kalian rencanakan\r\nmenjadi sebuah kenyataan \r\n#MUALLIMINBERSAMABISAJAYA\r\n#MUALLIMINZAMANBERZAMAN\r\n#OSIMMASMUALLIMIN?'),
(5, 'insan ', 'full day bsa g AC nya sering di servis kyk ikan asin kmi klo udh siang '),
(6, 'hitaf', 'LOPE SEKEBON BUAT ANAK HUMASS ?????????'),
(7, 'hitaf', 'yang buat masuk surga'),
(8, 'damha', '????? ?????? ?? ?? ??????? ????? ???? ?? ???  ??????? ???? ??? ????????'),
(9, 'Ketos 24', 'Semangatt teruss untukk adek\" awak dan sahabat\" awak dan anggota\" awak , semoga kalian sukses dunia akhirat. dan kalian adalah keluarga kedua ku di duniaa.... ai lop yuu alll osim <3 osim no more , brother for ever<3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_images`
--

CREATE TABLE `tb_images` (
  `id` int(3) NOT NULL,
  `tipeimage` varchar(20) NOT NULL DEFAULT '',
  `dataimage` blob NOT NULL,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_images`
--

INSERT INTO `tb_images` (`id`, `tipeimage`, `dataimage`, `judul`, `deskripsi`) VALUES
(5, 'WhatsApp Image 2024-', 0x363563373666313134393135612d576861747341707020496d61676520323032342d30322d31302061742031392e31342e33365f38313564396266622e6a7067, 'Isra Miraj (7 Maret 2024)', 'السَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ\r\n\r\n\"Isra Miraj, sebuah perjalanan luar biasa yang mengajarkan kita tentang kebesaran dan kebijaksanaan Allah. Malam yang penuh makna, di mana Rasulullah SAW diangkat ke langit, menyeberangi lapisan-lapisan alam, dan bertemu dengan para nabi. Dalam perjalanan ini, Rasulullah menerima perintah shalat lima waktu, sebuah anugerah luar biasa bagi umat manusia.\r\nMomen Isra Miraj mengajarkan kita tentang kekuatan iman, ketabahan, dan rasa syukur. Rasulullah, sebagai pemimpin umat, mendapatkan wawasan langsung dari Allah, membawa petunjuk hidup yang menjadi landasan bagi umat Islam. Peristiwa ini mengingatkan kita akan pentingnya mendekatkan diri kepada Tuhan, merawat iman, dan menghidupkan ajaran-Nya dalam kehidupan sehari-hari.\r\nIsra Miraj bukan hanya peristiwa sejarah, tetapi juga merupakan pelajaran tentang kekuatan doa, kepatuhan kepada Allah, dan pentingnya perjalanan spiritual dalam menjalani kehidupan. Semoga kita dapat mengambil hikmah dan inspirasi dari perjalanan luar biasa ini untuk memperkuat iman, meningkatkan ibadah, dan mendekatkan diri kepada Sang Pencipta.”\r\n\r\nوَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_images`
--
ALTER TABLE `tb_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_images`
--
ALTER TABLE `tb_images`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
