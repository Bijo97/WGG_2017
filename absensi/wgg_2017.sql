-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Apr 2017 pada 16.56
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wgg_2017`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'BPH'),
(2, 'Acara'),
(3, 'Pubdekdok'),
(4, 'Keamanan'),
(5, 'Perlengkapan'),
(6, 'Sekretariat'),
(7, 'IT'),
(8, 'Konsumsi'),
(9, 'Kesehatan'),
(10, 'Peran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(4) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` int(8) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `nama` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs_absen`
--

CREATE TABLE `mhs_absen` (
  `id` int(11) NOT NULL,
  `nrp` int(8) NOT NULL,
  `id_keg` int(4) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs_new`
--

CREATE TABLE `mhs_new` (
  `id` int(4) NOT NULL,
  `nrp` int(8) DEFAULT NULL,
  `id_keg` int(4) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` int(11) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama_panitia` varchar(225) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panitia`
--

INSERT INTO `panitia` (`id_panitia`, `nrp`, `nama_panitia`, `id_divisi`, `username`, `password`) VALUES
(1, '11414014', 'Kevin Merco', 1, '', ''),
(2, '25414007', 'Natasah Bunardi', 1, '', ''),
(3, '25414060', 'Septianda Angelica', 1, '', ''),
(4, '24414039', 'Randy', 1, '', ''),
(5, '25414097', 'Hananiel Vincent', 1, '', ''),
(6, '37415088', 'Marcelina Yang', 1, '', ''),
(7, '37414089', 'Yonathan Said Marcos', 1, '', ''),
(8, '21414020', 'Victor Winata Pranoto', 1, '', ''),
(9, '51414004', 'Oktavianus Filemon Tallo', 2, '', ''),
(10, '21415087', 'Giovanni Bunardi', 2, '', ''),
(11, '51415007', 'Hans Christian', 2, '', ''),
(12, '33415192', 'Marcella Caroline Jaya', 2, '', ''),
(13, '32415184', 'Yosefin Karina', 2, '', ''),
(14, '41415034', 'Sheilly Yuliani', 2, '', ''),
(15, '35415053', 'Fransiskus ', 2, '', ''),
(16, '11416004', 'Clarita Ivone Rumimpunu', 2, '', ''),
(17, '11416012', 'Patricia Tanjung', 2, '', ''),
(18, '11416029', 'Theresia Lunetta Thionarto', 2, '', ''),
(19, '12415011', 'Tyas Widyaratna Sandhy', 2, '', ''),
(20, '21416025', 'Hanesha Nithalya Muliauwan', 2, '', ''),
(21, '21416054', 'Sentosa Purnomo', 2, '', ''),
(22, '21416066', 'Dion Nathanael Widjajanto', 2, '', ''),
(23, '22416122', 'Alvin Surya Pranatha', 2, '', ''),
(24, '22416172', 'Giovanno Josaphat Paul Toding', 2, '', ''),
(25, '23415003', 'Giovanov Sebastian', 2, '', ''),
(26, '23416035', 'Jhon Heryanto', 2, '', ''),
(27, '23416038', 'Leonardus Putera Santoso', 2, '', ''),
(28, '25415076', 'Celia Devita Iskandar', 2, '', ''),
(29, '32415110', 'Sarah Febe Angelina', 2, '', ''),
(30, '32416053', 'Stephani Octaviana', 2, '', ''),
(31, '33416065', 'Florencia Leicester', 2, '', ''),
(32, '34416007', 'Jaya Saputra', 2, '', ''),
(33, '34416009', 'Gabriela Clara', 2, '', ''),
(34, '37415070', 'Cindy Fhelianto Tiono', 2, '', ''),
(35, '37416015', 'Monica Cindy', 2, '', ''),
(36, '37416079', 'Kendy Sumiok Tanod', 2, '', ''),
(37, '42416036', 'Brigitta Sally', 2, '', ''),
(38, '42416098', 'Merlinda Fransisca', 2, '', ''),
(39, '51416005', 'Aveline Catherine', 2, '', ''),
(40, '51416029', 'Elizabeth Glory Victory', 2, '', ''),
(41, '51416102', 'Sherin Fongana', 2, '', ''),
(42, '33414051', 'Jessenia Kolin', 3, '', ''),
(43, '41415059', 'Ryan Sidharta', 3, '', ''),
(44, '22415051', 'Lily Sutanto', 3, '', ''),
(45, '22414018', 'Gabriella Ling', 3, '', ''),
(46, '42415006', 'Juan Richard', 3, '', ''),
(47, '21416124', 'Benedict Andrian', 3, '', ''),
(48, '22416082', 'Celine Betharina', 3, '', ''),
(49, '22416164', 'Allessander Gabrielle', 3, '', ''),
(50, '31416033', 'Irene Alvania', 3, '', ''),
(51, '31416034', 'Andre Tanujaya', 3, '', ''),
(52, '41416034', 'Nadia Leonora', 3, '', ''),
(53, '42415117', 'Celia Ivana', 3, '', ''),
(54, '42416012', 'Devina', 3, '', ''),
(55, '23415002', 'Ivan Surya', 3, '', ''),
(56, '21416061', 'Shendy Leonardo', 3, '', ''),
(57, '21416096', 'Josephine Widyatmadja', 3, '', ''),
(58, '23416028', 'Michael Keyson', 3, '', ''),
(59, '25416051', 'Evania', 3, '', ''),
(60, '31415161', 'Erik Eka Nugraha', 3, '', ''),
(61, '42416029', 'Ferdiantio Jeremiah', 3, '', ''),
(62, '42416066', 'Josh Verrell Davidson', 3, '', ''),
(63, '51416024', 'Charles Endriko', 3, '', ''),
(64, '41415009', 'Natasya Angelina', 3, '', ''),
(65, '21416122', 'Ronald Herdjijono', 3, '', ''),
(66, '22415108', 'Velisa Yulian', 3, '', ''),
(67, '22415112', 'Jeremiah Albertus', 3, '', ''),
(68, '22416053', 'Maria Cornelia', 3, '', ''),
(69, '22416091', 'Kurniadi Lay', 3, '', ''),
(70, '23415010', 'Priscillia Alvina', 3, '', ''),
(71, '23416018', 'Alexander Edward', 3, '', ''),
(72, '26415117', 'William Chen', 3, '', ''),
(73, '31416064', 'Robert djohari', 3, '', ''),
(74, '33416101', 'Bella Audrey', 3, '', ''),
(75, '41415047', 'William Vijadhammo', 3, '', ''),
(76, '41416089', 'Thetania Mega', 3, '', ''),
(77, '41416090', 'Maria Fransisca Cah', 3, '', ''),
(78, '42416107', 'Chessie Churchill', 3, '', ''),
(79, '42416153', 'Ignatia Anelka', 3, '', ''),
(80, '51415072', 'Gaby Lingga', 3, '', ''),
(81, '42416081', 'Gabrielle Agatha', 3, '', ''),
(82, '25414058', 'Ricky Setiawan Hartanto', 4, '', ''),
(83, '25415057', 'Jonathan Edward', 4, '', ''),
(84, '33415055', 'Venny', 4, '', ''),
(85, '21415049', 'Jesica Tjandranegara', 4, '', ''),
(86, '51415035', 'Ika Putri Wijaya', 4, '', ''),
(87, '25416088', 'Reynold Bernadi', 4, '', ''),
(88, '32416159', 'Vergina Natasha', 4, '', ''),
(89, '21414233', 'Alberto Orson Ongkowidjojo', 4, '', ''),
(90, '21415160', 'Ronny Gondo Hudaya', 4, '', ''),
(91, '37416062', 'Vanesa Novilia Limarta', 4, '', ''),
(92, '41416055', 'Fellicia Angelina Gunawan', 4, '', ''),
(93, '25416085', 'Styllia Ariane S', 4, '', ''),
(94, '34416018', 'Shefry Frajonsky Simatauw', 4, '', ''),
(95, '22416114', 'Clisila Olan Kurniyawan', 4, '', ''),
(96, '41416128', 'Adi Kelvianto Tjhoe', 4, '', ''),
(97, '26415175', 'Albert Edwillian Pratomo', 4, '', ''),
(98, '21416126', 'Dennis William', 4, '', ''),
(99, '22416086', 'Desy Linggawati', 4, '', ''),
(100, '22416152', 'Prianto Welly Ho', 4, '', ''),
(101, '21416216', 'Dennis Wijaya', 4, '', ''),
(102, '32416109', 'Natasia', 4, '', ''),
(103, '33416129', 'Caroline Sutjiono', 4, '', ''),
(104, '25416031', 'Felicia Layrensius', 4, '', ''),
(105, '22415054', 'Felix Andika Wicaksono', 4, '', ''),
(106, '35415010', 'Devina Chandra', 4, '', ''),
(107, '41416087', 'Tjan, Johan Edbert Tjandra P', 4, '', ''),
(108, '25416046', 'Jason Averell Lumanto', 4, '', ''),
(109, '41416035', 'Pamela Wijaya', 4, '', ''),
(110, '24416025', 'Maurice Ravel Honggoputra', 4, '', ''),
(111, '37416060', 'Gracia Amelia', 4, '', ''),
(112, '32416205', 'Ervita Hestiawati', 4, '', ''),
(113, '22416170', 'Reyner Habel Djimat', 4, '', ''),
(114, '33415150', 'Ruben Davy Setyawan', 4, '', ''),
(115, '37416030', 'Michael Agung Christanto', 4, '', ''),
(116, '21416224', 'Intan Maharani Sindarto', 4, '', ''),
(117, '41416007', 'Kezia Ade Sutjahjo', 4, '', ''),
(118, '22415039', 'Ezra Bezaliel', 4, '', ''),
(119, '32416085', 'Sonia Febianti', 4, '', ''),
(120, '34415066', 'Benhard Tanudjaja', 4, '', ''),
(121, '33416017', 'Agatha Rode Gracia', 4, '', ''),
(122, '41416086', 'Diana Effendy', 4, '', ''),
(123, '25415046', 'Daniel Pratama', 4, '', ''),
(124, '21416085', 'Kevin Hendra Putra', 4, '', ''),
(125, '26414104', 'Nathanael Adi', 5, '', ''),
(126, '25415077', 'Joshua Revindy Chandra', 5, '', ''),
(127, '41415126', 'Felicia Natalie Tjoanda', 5, '', ''),
(128, '35414013', 'Albert Chriestanto', 5, '', ''),
(129, '21415108', 'Stefanus Brian Juan Nday', 5, '', ''),
(130, '21415183', 'Davin Sugiarto', 5, '', ''),
(131, '25414022', 'Felix valentino', 5, '', ''),
(132, '41415063', 'Tara kirana', 5, '', ''),
(133, '31415175', 'Reinaldo sitongan', 5, '', ''),
(134, '26415177', 'Bobby irawan', 5, '', ''),
(135, '12415020', 'Cherry', 5, '', ''),
(136, '21415044', 'Yosua wardiman', 5, '', ''),
(137, '37416033', 'Jason suharli', 5, '', ''),
(138, '32416007', 'Willy wijaya', 5, '', ''),
(139, '33416054', 'Jessica runtulalu', 5, '', ''),
(140, '25416008', 'Harry setyawan firmansyah', 5, '', ''),
(141, '25416073', 'Garry rezky putra tantowi', 5, '', ''),
(142, '42416160', 'Christopher jonathan', 5, '', ''),
(143, '41416126', 'Jovian kurniawan', 5, '', ''),
(144, '33416061', 'Evelyn', 5, '', ''),
(145, '41416121', 'Yoshua nico prasetyo', 5, '', ''),
(146, '22416113', 'Gratianus gerry', 5, '', ''),
(147, '21416138', 'Rivaldi giantara', 5, '', ''),
(148, '21416039', 'Teddy sugiarto', 5, '', ''),
(149, '24416006', 'Suranggi Gautama', 5, '', ''),
(150, '22416117', 'Richman', 5, '', ''),
(151, '22416041', 'Alodia angdrijono', 5, '', ''),
(152, '26416139', 'Michael levi', 5, '', ''),
(153, '31416059', 'Vincent putra wikarsa', 5, '', ''),
(154, '21416052', 'Kristian oktavio', 5, '', ''),
(155, '37416032', 'Ivan adriel', 5, '', ''),
(156, '51416015', 'Nastasia nolia seva', 5, '', ''),
(157, '31416055', 'Ericsen tambunan', 5, '', ''),
(158, '37416026', 'Richard surya christanto', 5, '', ''),
(159, '21414133', 'Peter Christian Budiono', 6, '', ''),
(160, '32415178', 'Evelin Lesmanaputri', 6, '', ''),
(161, '12415002', 'Johanna Elvina', 6, '', ''),
(162, '26415183', 'Stephanie Liem', 6, '', ''),
(163, '22415101', 'Jessica Agustin Angelina', 6, '', ''),
(164, '51415020', 'Nindy Elyse Tantono', 6, '', ''),
(165, '25415025', 'Alicia Puspitasari', 6, '', ''),
(166, '25416012', 'Bella Eka Fianty', 6, '', ''),
(167, '22415019', 'Devina Mitzi Wijaya', 6, '', ''),
(168, '32416006', 'Sylvia Hartanto', 6, '', ''),
(169, '21416090', 'Bernadette Mega Claudia Kuncoro', 6, '', ''),
(170, '25416063', 'Monica Yunita', 6, '', ''),
(171, '11416040', 'Aditya Putri Goentoro', 6, '', ''),
(172, '12416019', 'Celine Putri Andreti', 6, '', ''),
(173, '33416090', 'Sharon Angelina Susanto', 6, '', ''),
(174, '42416133', 'Listia Febriani', 6, '', ''),
(175, '11416043', 'Jessica Renanda', 6, '', ''),
(176, '25416078', 'Sandra Lukita', 6, '', ''),
(177, '22416014', 'Dea Agnes', 6, '', ''),
(178, '22416162', 'Cinthya Dewi', 6, '', ''),
(179, '22416031', 'Stephanie ', 6, '', ''),
(180, '42416124', 'Yuriko Virginia Gosang', 6, '', ''),
(181, '32416142', 'Liviana Siaw', 6, '', ''),
(182, '21415100', 'Jimmy Pranata', 6, '', ''),
(183, '21415019', 'Marcellino Gozal', 6, '', ''),
(184, '22416022', 'Michael Owen Tantrajaya', 6, '', ''),
(185, '21415058', 'David Ardhyan S', 6, '', ''),
(186, '21416192', 'Albert Janitra Sanjaya', 6, '', ''),
(187, '25416020', 'Arvin Oktovianus Sukamto', 6, '', ''),
(188, '21415057', 'Arthur', 6, '', ''),
(189, '24416059', 'Monggalana Putra Utamo', 6, '', ''),
(190, '26415039', 'Kevin Nyoto', 7, '', ''),
(191, '26415058', 'Billy Jonathan', 7, '', ''),
(192, '26415090', 'Alfred Louis', 7, '', ''),
(193, '26415068', 'Stephen Lukas', 7, '', ''),
(194, '26415171', 'Antonio Chandra', 7, '', ''),
(195, '26415114', 'Amelia Kezia', 7, '', ''),
(196, '26416074', 'Giovanni Gabriela', 7, '', ''),
(197, '26416027', 'Maximillian', 7, '', ''),
(198, '26416010', 'Elvan Alandi', 7, '', ''),
(199, '26416016', 'Debby Meliani', 7, '', ''),
(200, '26416045', 'Felicia Listyani Wijono', 7, '', ''),
(201, '26416018', 'Kristian Halim', 7, '', ''),
(202, '32415046', 'Joan Jesslyn', 8, '', ''),
(203, '26415027', 'Christopher Albert', 8, '', ''),
(204, '37415009', 'Angelica Aprilia', 8, '', ''),
(205, '32415049', 'Lianny ', 8, '', ''),
(206, '22415026', 'Kevin', 8, '', ''),
(207, '24415061', 'Jonathan Herlianto', 8, '', ''),
(208, '22415005', 'Claudya Marchellina', 8, '', ''),
(209, '21415152', 'Stevanus William Effendi', 8, '', ''),
(210, '22415114', 'Ronaldo Fantoni', 8, '', ''),
(211, '22415106', 'Anthony Kurniawan Kuswandi', 8, '', ''),
(212, '25415078', 'Wijaya Wardhana G', 8, '', ''),
(213, '34415046', 'Albertus Alvin Sugianto', 8, '', ''),
(214, '37415063', 'Ignatius Stifan Pratama', 8, '', ''),
(215, '11416054', 'Carissa Adelia Novinna', 8, '', ''),
(216, '22416019', 'Mitzy Ghema Susanto', 8, '', ''),
(217, '22416074', 'Venysia Wardoyo', 8, '', ''),
(218, '24416104', 'Kevin Adi Suryantono', 8, '', ''),
(219, '26416084', 'Holiyed Hadi', 8, '', ''),
(220, '26416014', 'Timothy Christian Yunanto', 8, '', ''),
(221, '31416068', 'Kelvin Christianto', 8, '', ''),
(222, '31416169', 'Go Kevin Candra', 8, '', ''),
(223, '32416029', 'Claudia Lawrensia', 8, '', ''),
(224, '32416204', 'Jessica Theresia', 8, '', ''),
(225, '35416035', 'Kevin Lianggara', 8, '', ''),
(226, '35416024', 'Joshua Lukas Setyabudhi', 8, '', ''),
(227, '36416003', 'Defira Amadea', 8, '', ''),
(228, '36416035', 'Stefhani', 8, '', ''),
(229, '37416027', 'Bernadetta Claudia Usmantara', 8, '', ''),
(230, '37416044', 'Natasha Monique', 8, '', ''),
(231, '51416095', 'Fanny Irwan', 8, '', ''),
(232, '51416022', 'Kevin Gunawan', 8, '', ''),
(233, '22414147', 'Ellen Calista Devi Sanjaya', 9, '', ''),
(234, '25415037', 'Ancelloti Alessandro', 9, '', ''),
(235, '26415163', 'Yuan Pratama', 9, '', ''),
(236, '41415049', 'Laurensia Devina Wijaya', 9, '', ''),
(237, '24415028', 'Benny Putra Utomo', 9, '', ''),
(238, '41415033', 'Dinda Geraldine Claudia', 9, '', ''),
(239, '21414027', 'Calvin Fendyanto', 9, '', ''),
(240, '21415023', 'Edward Marvela', 9, '', ''),
(241, '21415101', 'Andreas Pramono Setiawan', 9, '', ''),
(242, '21416235', 'Citra Yohanna', 9, '', ''),
(243, '24416013', 'Albertus Andrie Christian', 9, '', ''),
(244, '22416070', 'Lidwina Karlia Gunawan', 9, '', ''),
(245, '25416049', 'Aloysius Fung', 9, '', ''),
(246, '25416053', 'Bertinus Enrico Rahardjo', 9, '', ''),
(247, '25416070', 'Kevin Chandra Gunawan', 9, '', ''),
(248, '25416076', 'Erik Tanzil', 9, '', ''),
(249, '26415155', 'Reyner Wijoyo', 9, '', ''),
(250, '31415176', 'Michelle Winnie Tanuwijaya', 9, '', ''),
(251, '31415177', 'Anastasia Nabella S', 9, '', ''),
(252, '32416066', 'Jessica Levina Kosasih', 9, '', ''),
(253, '33416002', 'Leonardo Gunawan', 9, '', ''),
(254, '33416051', 'Desi Natalia Susanti', 9, '', ''),
(255, '33416064', 'Gabriel Anastasia', 9, '', ''),
(256, '33416094', 'Felicia', 9, '', ''),
(257, '37415050', 'Veren Ornela', 9, '', ''),
(258, '37416024', 'Clara Bella Jessica Arijaya', 9, '', ''),
(259, '41415005', 'Angelica Widjaja', 9, '', ''),
(260, '41415152', 'Jonathan Adrianto', 9, '', ''),
(261, '41416037', 'Olivia Tirta Putri', 9, '', ''),
(262, '41416109', 'Gavrila Averina T.', 9, '', ''),
(263, '51416067', 'Lita Hendryani', 9, '', ''),
(264, '24416004', 'Garincha Bintang Laksana', 9, '', ''),
(265, '24416045', 'Pollen Sandro Ongkowijoyo', 9, '', ''),
(266, '32416125', 'Leonard Ronaldo Prayogo', 9, '', ''),
(267, '21416156', 'William Hauwing', 9, '', ''),
(268, '11414049', 'Jenet Katili', 10, '', ''),
(269, '11414050', 'Arniescza Ratna Hayu Budi Uton', 10, '', ''),
(270, '11416005', 'Asti Kusumaningtyas', 10, '', ''),
(271, '11416048', 'Vivian Graciela Chertian', 10, '', ''),
(272, '12416003', 'Kurniawati Adirahsetio', 10, '', ''),
(273, '21414014', 'Hanny Sampurna Lumanto', 10, '', ''),
(274, '21414015', 'Yoga Ditiya W.', 10, '', ''),
(275, '21414021', 'Johan Siandy', 10, '', ''),
(276, '21414183', 'Albert Yanuar Ivan Wongso', 10, '', ''),
(277, '21414237', 'Lukas Chavez Shanellron Fernandez', 10, '', ''),
(278, '21415016', 'Ricky Surya', 10, '', ''),
(279, '21415079', 'Yosua Hardistianto', 10, '', ''),
(280, '21415135', 'Michael Oktavianus K.', 10, '', ''),
(281, '21415151', 'Benedictus Wishnu Wintang Kencana', 10, '', ''),
(282, '21416014', 'Jason Evan', 10, '', ''),
(283, '21416036', 'Veronica Sherly Prayogo', 10, '', ''),
(284, '21416129', 'Alan Satria', 10, '', ''),
(285, '21416154', 'Winston Dassmer', 10, '', ''),
(286, '21416186', 'James Pringgo AdiMuljo', 10, '', ''),
(287, '21416223', 'Moses Setiady', 10, '', ''),
(288, '22414019', 'Ian Audrey Tanoni', 10, '', ''),
(289, '22415060', 'Christina Cynta Rinjaya', 10, '', ''),
(290, '22415062', 'Gracia Ayu P', 10, '', ''),
(291, '22415150', 'Rizaldi Johan Mangitung', 10, '', ''),
(292, '22416001', 'Samuel Christian Wiwanda', 10, '', ''),
(293, '22416002', 'Andrew Laksamana', 10, '', ''),
(294, '22416009', 'Erwin Christian Gani', 10, '', ''),
(295, '22416010', 'Amadea Nathania S.K.', 10, '', ''),
(296, '22416011', 'Patricia Marissa', 10, '', ''),
(297, '22416023', 'Samantha Isabela Ongkowijoyo', 10, '', ''),
(298, '22416035', 'Anastasia Elena Setiawan', 10, '', ''),
(299, '22416051', 'Jessica Vera Bilinda', 10, '', ''),
(300, '22416052', 'Febby Cynthia Liman', 10, '', ''),
(301, '22416061', 'Timotius', 10, '', ''),
(302, '22416093', 'Matthew Adriel', 10, '', ''),
(303, '22416099', 'Helena Audrey Istiawan', 10, '', ''),
(304, '22416105', 'Vincentius Kennard Ganiadi', 10, '', ''),
(305, '22416118', 'Cindy Widjaya', 10, '', ''),
(306, '22416140', 'Febiyanti Hendriyanto', 10, '', ''),
(307, '22416147', 'Grace Felicia', 10, '', ''),
(308, '22416151', 'Jessica Frinanda Ferdy', 10, '', ''),
(309, '22416157', 'Jonathan Richard', 10, '', ''),
(310, '22416165', 'Bagus Arisanjaya Irawan', 10, '', ''),
(311, '22416174', 'Effendi Prasetyo Tanujaya', 10, '', ''),
(312, '23415011', 'Jonathan Teng', 10, '', ''),
(313, '23415026', 'Denny Christian Raga', 10, '', ''),
(314, '23416001', 'Evert O''Neil', 10, '', ''),
(315, '23416011', 'Jeremy Putra', 10, '', ''),
(316, '23416012', 'Hendrata Irvin', 10, '', ''),
(317, '24416063', 'David Julius Wibowo', 10, '', ''),
(318, '24416081', 'Andre Saputra', 10, '', ''),
(319, '24416087', 'Yonatan Kristian Adechandra Sarumaha', 10, '', ''),
(320, '24416091', 'Andreas Alvaro Valentino', 10, '', ''),
(321, '25416003', 'Alexander Prayogo', 10, '', ''),
(322, '25416009', 'Evander Eric', 10, '', ''),
(323, '25416026', 'Timotius Bintoro Yananto', 10, '', ''),
(324, '25416036', 'Zebe Da', 10, '', ''),
(325, '25416044', 'Alexander', 10, '', ''),
(326, '25416058', 'Yosephine Gabriela', 10, '', ''),
(327, '25416071', 'Juan Exel Sandjaja', 10, '', ''),
(328, '25416072', 'Yovita Rosalia', 10, '', ''),
(329, '25416088', 'Reynold Bernardi', 10, '', ''),
(330, '26413069', 'Richard Putra Sugijanto', 10, '', ''),
(331, '26415007', 'Alex Christopher', 10, '', ''),
(332, '26415037', 'James Wibisono Santoso', 10, '', ''),
(333, '26415048', 'Elbert Jonathan', 10, '', ''),
(334, '26415051', 'Randy Nugraha Tedjakusuma', 10, '', ''),
(335, '26415095', 'Ivan Eko Novianto', 10, '', ''),
(336, '26415126', 'Kevin', 10, '', ''),
(337, '26415167', 'Yanes Robert Yeska Kakihary', 10, '', ''),
(338, '26416040', 'Albert', 10, '', ''),
(339, '26416043', 'Daniel', 10, '', ''),
(340, '26416105', 'Samuel Febrian Tumewu', 10, '', ''),
(341, '26416145', 'Vania Putri Minarso', 10, '', ''),
(342, '31413251', 'Kezia Zulkarnaen', 10, '', ''),
(343, '31414079', 'Daniel Fernando Suwito', 10, '', ''),
(344, '31415086', 'Yohanes Lay', 10, '', ''),
(345, '31415092', 'Natalia Susanto', 10, '', ''),
(346, '31415094', 'Novia Chandra Tanuwijaya', 10, '', ''),
(347, '31415256', 'Juan Alexander', 10, '', ''),
(348, '31416013', 'Hendrawan Heriyanto', 10, '', ''),
(349, '31416016', 'Daniel Liaw', 10, '', ''),
(350, '31416021', 'Martin Lee', 10, '', ''),
(351, '31416029', 'Joshua William Willianto', 10, '', ''),
(352, '31416074', 'Ivenliane Siswanto', 10, '', ''),
(353, '31416144', 'Firilianti Renata Arsel Sutanto', 10, '', ''),
(354, '31416190', 'Tan, Cynthia Melisa Santoso', 10, '', ''),
(355, '31416191', 'Fenny Jie', 10, '', ''),
(356, '31416245', 'Joshua Michael Kurniawan', 10, '', ''),
(357, '32415062', 'Christian Andersen', 10, '', ''),
(358, '32415089', 'Effie Kurniati Prayogo', 10, '', ''),
(359, '32415226', 'Maria Agustin', 10, '', ''),
(360, '32415238', 'Dean Charlos Padji Dogi', 10, '', ''),
(361, '32415255', 'Aldo Tjondro', 10, '', ''),
(362, '32416019', 'Stephanie Angelina', 10, '', ''),
(363, '32416024', 'Irene Shania', 10, '', ''),
(364, '32416042', 'Cindy Lestari Utomo', 10, '', ''),
(365, '32416051', 'William Suryajaya', 10, '', ''),
(366, '32416052', 'Vicky Febriana', 10, '', ''),
(367, '32416057', 'Jocelyn Lamuel', 10, '', ''),
(368, '32416072', 'Evania Yuniar', 10, '', ''),
(369, '32416079', 'Adetya Krisnanda', 10, '', ''),
(370, '32416084', 'Gladys Paramita Tjioewinata', 10, '', ''),
(371, '32416096', 'Melissa Wong', 10, '', ''),
(372, '32416103', 'Fely Julia Christina Hartanto', 10, '', ''),
(373, '32416108', 'Michelle Charity Hariyono', 10, '', ''),
(374, '32416117', 'Jessica Natalia Salim', 10, '', ''),
(375, '32416121', 'Athalia Felicia Mulyono', 10, '', ''),
(376, '32416136', 'Chlarita Ekklesia Putrihadi', 10, '', ''),
(377, '32416140', 'Indira Nafarin', 10, '', ''),
(378, '32416145', 'Celine Martha Christia Sidarto', 10, '', ''),
(379, '32416154', 'Frans Kristian', 10, '', ''),
(380, '32416176', 'Hanna Vennysia Ongaran', 10, '', ''),
(381, '32416188', 'Feren Valensya Wiowo', 10, '', ''),
(382, '32416189', 'Maria Melinda Halim', 10, '', ''),
(383, '32416211', 'Frids Tapatab', 10, '', ''),
(384, '33413036', 'Melissa Gunawan', 10, '', ''),
(385, '33413151', 'Sintya Admaja', 10, '', ''),
(386, '33415146', 'Joan Sophia', 10, '', ''),
(387, '33415188', 'Pattricia Celline Tjamalla', 10, '', ''),
(388, '33416012', 'Melinda Clairine Nathania', 10, '', ''),
(389, '33416024', 'Phyllia Kharisty', 10, '', ''),
(390, '33416035', 'Caroline Natalie', 10, '', ''),
(391, '33416046', 'Karina Eugina Tjahyadi', 10, '', ''),
(392, '33416047', 'Reimons Santoso', 10, '', ''),
(393, '33416052', 'Grace Angelyn Claudia', 10, '', ''),
(394, '33416093', 'Jeremia', 10, '', ''),
(395, '34416002', 'Anthony Julius Tedjokumolo', 10, '', ''),
(396, '34416016', 'Monica Christy Setiawan', 10, '', ''),
(397, '34416037', 'Grace Angel Leonardy', 10, '', ''),
(398, '34416038', 'Vincenzio Evan Siemon', 10, '', ''),
(399, '34416045', 'Benedictus Jevon Tjoanda', 10, '', ''),
(400, '35416006', 'Tiffany Evangeline Tanjaya', 10, '', ''),
(401, '35416011', 'Felita Clairine Hutomo', 10, '', ''),
(402, '35416012', 'Thania Roselind', 10, '', ''),
(403, '35416023', 'Magdalena Susanto', 10, '', ''),
(404, '35416037', 'Kartikasari', 10, '', ''),
(405, '35416059', 'Michael Christopher Elim', 10, '', ''),
(406, '36414066', 'Andreas Sulistio', 10, '', ''),
(407, '36415015', 'Jemmy Gunawan', 10, '', ''),
(408, '36416009', 'Giovanno Battista', 10, '', ''),
(409, '36416031', 'Veny Fennensia Handoko', 10, '', ''),
(410, '36416034', 'Andrew Hans', 10, '', ''),
(411, '36416049', 'Elizabeth Christy Chandra', 10, '', ''),
(412, '36416055', 'Theresa Kirana', 10, '', ''),
(413, '37415056', 'Liviany Claudia Laksmana', 10, '', ''),
(414, '37416012', 'Shania Austine', 10, '', ''),
(415, '41413041', 'Ellena Felicia Antono', 10, '', ''),
(416, '41413119', 'Safira Caroline Christina', 10, '', ''),
(417, '41416093', 'Elvina Andriani Rahardja', 10, '', ''),
(418, '41416096', 'Sifra Cindy O.S.', 10, '', ''),
(419, '41416130', 'Carolina', 10, '', ''),
(420, '42415031', 'Felicia Manda', 10, '', ''),
(421, '42416005', 'Fenny Pangestu', 10, '', ''),
(422, '42416008', 'Cicilia Claresta S', 10, '', ''),
(423, '42416015', 'Gresiana Gede Wirawati', 10, '', ''),
(424, '42416033', 'Christina', 10, '', ''),
(425, '42416039', 'Matthew Mona Tilaar', 10, '', ''),
(426, '42416048', 'Stefany Yonatan', 10, '', ''),
(427, '42416052', 'Hendro Richard Del Piero', 10, '', ''),
(428, '42416072', 'Michelle Kosasih', 10, '', ''),
(429, '42416073', 'Nicholas Sebastian', 10, '', ''),
(430, '42416085', 'Ayu Widhi Mulyani', 10, '', ''),
(431, '42416086', 'Fanuel Erzy Aprilyan Haryana', 10, '', ''),
(432, '42416117', 'Immanuela Lesterina Budianto', 10, '', ''),
(433, '42416140', 'I Ketut Wijaya Mahaputra', 10, '', ''),
(434, '42416143', 'Michellin Mellysa Mindra Prayo', 10, '', ''),
(435, '42416174', 'Sherly Lisianti', 10, '', ''),
(436, '51415044', 'Reni', 10, '', ''),
(437, '51415049', 'Karina Angela Gosaly', 10, '', ''),
(438, '51416003', 'Agatha Giovanny Puteri Radja', 10, '', ''),
(439, '51416010', 'Melina Yanti', 10, '', ''),
(440, '51416012', 'Winona Araminta', 10, '', ''),
(441, '51416016', 'Sellina Tanya', 10, '', ''),
(442, '51416019', 'Sarah Azaliah Karsa', 10, '', ''),
(443, '51416023', 'Lita Sanjulya', 10, '', ''),
(444, '51416038', 'Veronica Maureen', 10, '', ''),
(445, '51416039', 'Lofina Junita', 10, '', ''),
(446, '51416077', 'Bramsetya Handi Laksana', 10, '', ''),
(447, '51416078', 'Marco Nugroho', 10, '', ''),
(448, '51416081', 'Ribka Kinanti Maharani Kassa', 10, '', ''),
(449, '51416088', 'Lavenia Pili Roboh', 10, '', ''),
(450, '51416101', 'Delaya Sandhy Kartika', 10, '', ''),
(451, '61416001', 'Natalia Dewi', 10, '', ''),
(452, '61416002', 'Fiorentina Agustin', 10, '', ''),
(453, '61416003', 'Linda', 10, '', ''),
(454, '61416004', 'Emmanuela Oktafiyeni Baik', 10, '', ''),
(455, '61416005', 'Tirza Nathania', 10, '', ''),
(456, '61416007', 'Amanda Cicillia Damayanti', 10, '', ''),
(457, '61416008', 'Indri Mariani Nainggolan', 10, '', ''),
(458, '61416009', 'Ulfa Meinia Dwi Rohanda', 10, '', ''),
(459, '61416011', 'Julita', 10, '', ''),
(460, '61416012', 'Dama Tanti Sewalangi', 10, '', ''),
(461, '61416013', 'Darvis Arthur Tefa', 10, '', ''),
(462, '61416014', 'Novianti Yanti Lapik', 10, '', ''),
(463, '61416016', 'Viona Evelin Salinding', 10, '', ''),
(464, '61416017', 'Kornelia Kalua', 10, '', ''),
(465, '61416018', 'Argitha Imelda', 10, '', ''),
(466, '61416019', 'Julian Soselisa', 10, '', ''),
(467, '21414007', 'Bintoro Gustanto Hendrawan', 10, '', ''),
(468, '21414091', 'Kurniawan Ester Ghozali', 10, '', ''),
(469, '21414210', 'Evan Cressandi', 10, '', ''),
(470, '21415006', 'David Prayogo', 10, '', ''),
(471, '22414155', 'Oddie Christian Hartanto', 10, '', ''),
(472, '22415105', 'Celia Felicia Tanoni', 10, '', ''),
(473, '24415021', 'Daniel Teofilus Young', 10, '', ''),
(474, '24415041', 'Jovan Daniel Danu', 10, '', ''),
(475, '24415093', 'Christopher Lisanthoni', 10, '', ''),
(476, '25415064', 'Alvin Hadinata', 10, '', ''),
(477, '26415081', 'Yosia Alexander Christian', 10, '', ''),
(478, '31415186', 'Lady Olivia Osito', 10, '', ''),
(479, '33415194', 'Grace Irene Warouw', 10, '', ''),
(480, '42415021', 'Ivama Tammy', 10, '', ''),
(481, '42415024', 'Golda N. Waworuntu', 10, '', ''),
(482, '42415075', 'William Jevon', 10, '', ''),
(483, '42415081', 'Karen Suherman', 10, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapat`
--

CREATE TABLE `rapat` (
  `id_rapat` int(11) NOT NULL,
  `rapat` varchar(225) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rapat`
--

INSERT INTO `rapat` (`id_rapat`, `rapat`, `tanggal`) VALUES
(1, 'Rapat Pleno 1', '2017-04-21'),
(2, 'Rapat Pleno 2', '2017-05-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapat_keluar`
--

CREATE TABLE `rapat_keluar` (
  `id_keluar` int(11) NOT NULL,
  `id_panitia` int(11) NOT NULL,
  `id_rapat` int(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapat_keluar_new`
--

CREATE TABLE `rapat_keluar_new` (
  `id_rk_new` int(11) NOT NULL,
  `nrp` int(11) NOT NULL,
  `id_rapat` int(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapat_masuk`
--

CREATE TABLE `rapat_masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_panitia` int(11) NOT NULL,
  `id_rapat` int(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapat_masuk_new`
--

CREATE TABLE `rapat_masuk_new` (
  `id_rm_new` int(11) NOT NULL,
  `nrp` int(11) NOT NULL,
  `id_rapat` int(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhs_absen`
--
ALTER TABLE `mhs_absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mhs_keg` (`id_keg`);

--
-- Indexes for table `mhs_new`
--
ALTER TABLE `mhs_new`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mhs_new` (`id_keg`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`),
  ADD KEY `fk_panitia_id_div` (`id_divisi`);

--
-- Indexes for table `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id_rapat`);

--
-- Indexes for table `rapat_keluar`
--
ALTER TABLE `rapat_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `fk_keluar_id_panitia` (`id_panitia`),
  ADD KEY `fk_keluar_id_rapat` (`id_rapat`);

--
-- Indexes for table `rapat_keluar_new`
--
ALTER TABLE `rapat_keluar_new`
  ADD PRIMARY KEY (`id_rk_new`),
  ADD KEY `fk_new_id_rapat` (`id_rapat`);

--
-- Indexes for table `rapat_masuk`
--
ALTER TABLE `rapat_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `fk_masuk_id_panitia` (`id_panitia`),
  ADD KEY `fk_masuk_id_rapat` (`id_rapat`);

--
-- Indexes for table `rapat_masuk_new`
--
ALTER TABLE `rapat_masuk_new`
  ADD PRIMARY KEY (`id_rm_new`),
  ADD KEY `fk_new_id_rapat` (`id_rapat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mhs_absen`
--
ALTER TABLE `mhs_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mhs_new`
--
ALTER TABLE `mhs_new`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id_panitia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=484;
--
-- AUTO_INCREMENT for table `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id_rapat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rapat_keluar`
--
ALTER TABLE `rapat_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rapat_keluar_new`
--
ALTER TABLE `rapat_keluar_new`
  MODIFY `id_rk_new` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rapat_masuk`
--
ALTER TABLE `rapat_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rapat_masuk_new`
--
ALTER TABLE `rapat_masuk_new`
  MODIFY `id_rm_new` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mhs_absen`
--
ALTER TABLE `mhs_absen`
  ADD CONSTRAINT `fk_mhs_keg` FOREIGN KEY (`id_keg`) REFERENCES `kegiatan` (`id`);

--
-- Ketidakleluasaan untuk tabel `mhs_new`
--
ALTER TABLE `mhs_new`
  ADD CONSTRAINT `fk_mhs_new` FOREIGN KEY (`id_keg`) REFERENCES `kegiatan` (`id`);

--
-- Ketidakleluasaan untuk tabel `panitia`
--
ALTER TABLE `panitia`
  ADD CONSTRAINT `fk_panitia_id_div` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`);

--
-- Ketidakleluasaan untuk tabel `rapat_keluar`
--
ALTER TABLE `rapat_keluar`
  ADD CONSTRAINT `fk_keluar_id_panitia` FOREIGN KEY (`id_panitia`) REFERENCES `panitia` (`id_panitia`),
  ADD CONSTRAINT `fk_keluar_id_rapat` FOREIGN KEY (`id_rapat`) REFERENCES `rapat` (`id_rapat`);

--
-- Ketidakleluasaan untuk tabel `rapat_masuk`
--
ALTER TABLE `rapat_masuk`
  ADD CONSTRAINT `fk_masuk_id_panitia` FOREIGN KEY (`id_panitia`) REFERENCES `panitia` (`id_panitia`),
  ADD CONSTRAINT `fk_masuk_id_rapat` FOREIGN KEY (`id_rapat`) REFERENCES `rapat` (`id_rapat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
