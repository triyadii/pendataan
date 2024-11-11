-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2024 pada 09.06
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_pendataan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kode_desa`
--

CREATE TABLE `tbl_kode_desa` (
  `idDesa` int(11) NOT NULL,
  `kodeDesa` varchar(200) NOT NULL,
  `namaDesa` varchar(200) NOT NULL,
  `kodeKecamatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kode_desa`
--

INSERT INTO `tbl_kode_desa` (`idDesa`, `kodeDesa`, `namaDesa`, `kodeKecamatan`) VALUES
(1, '1207012001', 'Kuta Bayu', '120701'),
(2, '1207012002', 'Gunung Paribuan', '120701'),
(3, '1207012003', 'Simempar', '120701'),
(4, '1207012004', 'Gunung Seribu ', '120701'),
(5, '1207012005', 'Gunung Sinembah', '120701'),
(6, '1207012006', 'Bintang Meriah', '120701'),
(7, '1207012007', 'Kuta tengah', '120701'),
(8, '1207012008', 'Pekan Gunung Meriah', '120701'),
(9, '1207012009', 'Gunung Meriah', '120701'),
(10, '1207012010', 'Ujung Meriah', '120701'),
(11, '1207012011', 'Marjandi Pematang', '120701'),
(12, '1207012012', 'Marjandi Tongah', '120701'),
(13, '1207022001', 'Medan Sinembah', '120702'),
(14, '1207022002', 'Ujung Serdang', '120702'),
(15, '1207022003', 'Limau manis', '120702'),
(16, '1207022004', 'Bandar Labuhan ', '120702'),
(17, '1207022005', 'Bangun Rejo', '120702'),
(18, '1207022006', 'Aek Pancur', '120702'),
(19, '1207022007', 'Sei Merah', '120702'),
(20, '1207022008', 'Naga Timbul', '120702'),
(21, '1207022009', 'Langau Seprang', '120702'),
(22, '1207022010', 'Tanjung Mulia', '120702'),
(23, '1207022011', 'Punden Rejo', '120702'),
(24, '1207022012', 'Tanjung Morawa B', '120702'),
(25, '1207022013', 'Dagang Kerawan', '120702'),
(26, '1207022014', 'Tanjung Morawa A', '120702'),
(27, '1207022015', 'Buntu Badimbar', '120702'),
(28, '1207022016', 'Bangun Sari', '120702'),
(29, '1207022017', 'Dagang Kelambir', '120702'),
(30, '1207022018', 'Dalu Sepuluh A', '120702'),
(31, '1207022019', 'Dalu Sepuluh B', '120702'),
(32, '1207022020', 'Wonosari', '120702'),
(33, '1207022021', 'Perdamean', '120702'),
(34, '1207022022', 'Penara Kebun', '120702'),
(35, '1207022023', 'Bangun Sari Baru', '120702'),
(36, '1207022024', 'Telaga Sari', '120702'),
(37, '1207022025', 'Tanjung Baru ', '120702'),
(38, '1207022026', 'Pekan Tanjung Morawa', '120702'),
(39, '1207032001', 'Bandar Baru', '120703'),
(40, '1207032002', 'Batu Layang ', '120703'),
(41, '1207032003', 'Batu Mbelin', '120703'),
(42, '1207032004', 'Betimus Mbaru', '120703'),
(43, '1207032005', 'Bengkurung', '120703'),
(44, '1207032006', 'Bingkawan', '120703'),
(45, '1207032007', 'Buah Nabar', '120703'),
(46, '1207032008', 'Bukum ', '120703'),
(47, '1207032009', 'Buluh Awar', '120703'),
(48, '1207032010', 'Cinta Rakyat', '120703'),
(49, '1207032011', 'Durin Serugun', '120703'),
(50, '1207032012', 'Ketangkuhen', '120703'),
(51, '1207032013', 'Kuala', '120703'),
(52, '1207032014', 'Martelu', '120703'),
(53, '1207032015', 'Negeri Gugung', '120703'),
(54, '1207032016', 'Puangaja', '120703'),
(55, '1207032017', 'Rumah Kinangkung SP', '120703'),
(56, '1207032018', 'Rambung Baru', '120703'),
(57, '1207032019', 'Rumah Pil Pil ', '120703'),
(58, '1207032020', 'Rumah Sumbul ', '120703'),
(59, '1207032021', 'Sala Bulan ', '120703'),
(60, '1207032022', 'Sayum Sabah', '120703'),
(61, '1207032023', 'Sembahe', '120703'),
(62, '1207032024', 'Sibolangit', '120703'),
(63, '1207032025', 'Sikeben', '120703'),
(64, '1207032026', 'Suka Maju', '120703'),
(65, '1207032027', 'Suka Makmur', '120703'),
(66, '1207032028', 'Tambunen', '120703'),
(67, '1207032029', 'Tanjung Beringin', '120703'),
(68, '1207032030', 'Ujung Deleng ', '120703'),
(69, '1207042001', 'Suka Makmur', '120704'),
(70, '1207042002', 'Namo Mirik', '120704'),
(71, '1207042003', 'Suka Dame', '120704'),
(72, '1207042004', 'Pasar X', '120704'),
(73, '1207042005', 'Perpanden', '120704'),
(74, '1207042006', 'Kutalimbaru', '120704'),
(75, '1207042007', 'Sampe Cita', '120704'),
(76, '1207042008', 'Suka Rende', '120704'),
(77, '1207042009', 'Kwala Lau Bicik', '120704'),
(78, '1207042010', 'Lau Bakeni ', '120704'),
(79, '1207042011', 'Silenbo lebo', '120704'),
(80, '1207042012', 'Sawit Rejo', '120704'),
(81, '1207042013', 'Namo Rube Julu', '120704'),
(82, '1207042014', 'Sei Mencirim', '120704'),
(83, '1207052001', 'Bintang Meriah', '120705'),
(84, '1207052002', 'Sugau', '120705'),
(85, '1207052003', 'Tiang Layar', '120705'),
(86, '1207052004', 'Durin Simbelang', '120705'),
(87, '1207052005', 'Namo Riam', '120705'),
(88, '1207052006', 'Durin Tonggal', '120705'),
(89, '1207052007', 'Hulu', '120705'),
(90, '1207052008', 'Pertampilen', '120705'),
(91, '1207052009', 'Salam Tani', '120705'),
(92, '1207052010', 'Tengah', '120705'),
(93, '1207052011', 'Namo Simpur', '120705'),
(94, '1207052012', 'Simalingkar A', '120705'),
(95, '1207052013', 'Namo Bintang', '120705'),
(96, '1207052014', 'Lama ', '120705'),
(97, '1207052015', 'Namsorih', '120705'),
(98, '1207052016', 'Tuntungan I', '120705'),
(99, '1207052017', 'Gunung Tinggi ', '120705'),
(100, '1207052018', 'Tuntungan II', '120705'),
(101, '1207052019', 'Durin Jangak', '120705'),
(102, '1207052020', 'Sembahe Baru', '120705'),
(103, '1207052021', 'Tanjung Anom ', '120705'),
(104, '1207052022', 'Sei Glugur', '120705'),
(105, '1207052023', 'Suka Raya', '120705'),
(106, '1207052024', 'Baru', '120705'),
(107, '1207052025', 'Perumnas Simalingkar', '120705'),
(108, '1207062001', 'Deli Tua', '120706'),
(109, '1207062002', 'Jati Kesuma', '120706'),
(110, '1207062003', 'Namo Rambe', '120706'),
(111, '1207062004', 'Gunung Kelawas', '120706'),
(112, '1207062005', 'Ujung Labuhan', '120706'),
(113, '1207062006', 'Lubang Ido ', '120706'),
(114, '1207062007', 'Siluelue', '120706'),
(115, '1207062008', 'Timbang Lawan ', '120706'),
(116, '1207062009', 'Batu Mbelin', '120706'),
(117, '1207062010', 'Namo Batang ', '120706'),
(118, '1207062011', 'Tanjung Selamat', '120706'),
(119, '1207062012', 'Bekukul ', '120706'),
(120, '1207062013', 'Namo Pakam ', '120706'),
(121, '1207062014', 'Sukamulia Hilir', '120706'),
(122, '1207062015', 'Sukamulia Hulu', '120706'),
(123, '1207062016', 'Rumah Mbacang', '120706'),
(124, '1207062017', 'Cinta Rakyat', '120706'),
(125, '1207062018', 'Batu Penjemuran', '120706'),
(126, '1207062019', 'Kuta tengah', '120706'),
(127, '1207062020', 'Namo Landur', '120706'),
(128, '1207062021', 'Gunung Berita', '120706'),
(129, '1207062022', 'Tangkahan ', '120706'),
(130, '1207062023', 'Uruk Gedang', '120706'),
(131, '1207062024', 'Rumah Keben', '120706'),
(132, '1207062025', 'Namo Pinang', '120706'),
(133, '1207062026', 'Sudirejo', '120706'),
(134, '1207062027', 'Jaba', '120706'),
(135, '1207062028', 'Kuta Tualah', '120706'),
(136, '1207062029', 'Kwala Simeme', '120706'),
(137, '1207062030', 'Batu Gemuk', '120706'),
(138, '1207062031', 'Lau Mulgab', '120706'),
(139, '1207062032', 'Batu Rejo', '120706'),
(140, '1207062033', 'Sedang Tungir', '120706'),
(141, '1207062034', 'Namo Mbaru', '120706'),
(142, '1207062035', 'Rimo Mungkur', '120706'),
(143, '1207062036', 'Namo Mbelin', '120706'),
(144, '1207072001', 'Aji Baho', '120707'),
(145, '1207072002', 'Biru - Biru', '120707'),
(146, '1207072003', 'Candi Rejo ', '120707'),
(147, '1207072004', 'Kuta Mulyo', '120707'),
(148, '1207072005', 'Kuala Dekah', '120707'),
(149, '1207072006', 'Mbaruai', '120707'),
(150, '1207072007', 'Mardinding Julu', '120707'),
(151, '1207072008', 'Namo Suro Baru', '120707'),
(152, '1207072009', 'Peria-Ria', '120707'),
(153, '1207072010', 'Penen', '120707'),
(154, '1207072011', 'Rumah Gerat', '120707'),
(155, '1207072012', 'Sidodadi', '120707'),
(156, '1207072013', 'Sidomulyo', '120707'),
(157, '1207072014', 'Selamat', '120707'),
(158, '1207072015', 'Sariaba Jahe', '120707'),
(159, '1207072016', 'Tanjung Sena ', '120707'),
(160, '1207072017', 'Namo Tualang', '120707'),
(161, '1207082001', 'Talun Kenas', '120708'),
(162, '1207082002', 'Gunung Rintih', '120708'),
(163, '1207082003', 'Sumbul ', '120708'),
(164, '1207082004', 'Tandukan Raga', '120708'),
(165, '1207082005', 'Limau Mungkur', '120708'),
(166, '1207082006', 'Negara Beringin', '120708'),
(167, '1207082007', 'Lau Barus Baru', '120708'),
(168, '1207082008', 'Juma Tombak', '120708'),
(169, '1207082009', 'Siguci', '120708'),
(170, '1207082010', 'Kuta Jurung', '120708'),
(171, '1207082011', 'Tala Peta', '120708'),
(172, '1207082012', 'Lau Rakit', '120708'),
(173, '1207082013', 'Penungkiren', '120708'),
(174, '1207082014', 'Rambai ', '120708'),
(175, '1207082015', 'Lau Rempak', '120708'),
(176, '1207092001', 'Bah Perak', '120709'),
(177, '1207092002', 'Bandar Kuala', '120709'),
(178, '1207092003', 'Bah Balua', '120709'),
(179, '1207092005', 'Bandar Gugung', '120709'),
(180, '1207092006', 'Bandar Meriah', '120709'),
(181, '1207092007', 'Batu Gingging', '120709'),
(182, '1207092008', 'Bangun Purba', '120709'),
(183, '1207092009', 'Bangun Purba Tengah', '120709'),
(184, '1207092010', 'Begerpang', '120709'),
(185, '1207092011', 'Batu Rata', '120709'),
(186, '1207092012', 'Cimahi', '120709'),
(187, '1207092014', 'Damak Maliho', '120709'),
(188, '1207092015', 'Greahan', '120709'),
(189, '1207092017', 'Marombun Ujung Jawi ', '120709'),
(190, '1207092018', 'Marombun Barat', '120709'),
(191, '1207092019', 'Mabar', '120709'),
(192, '1207092020', 'Perguroan', '120709'),
(193, '1207092023', 'Rumah Deleng', '120709'),
(194, '1207092024', 'Sibaganding', '120709'),
(195, '1207092025', 'Sialang', '120709'),
(196, '1207092027', 'Sukaluwei', '120709'),
(197, '1207092030', 'Tanjung Purba', '120709'),
(198, '1207092032', 'Ujung Ganjang', '120709'),
(199, '1207092033', 'Ujung Rambe', '120709'),
(200, '1207192001', 'Tanjung Gusti ', '120719'),
(201, '1207192002', 'Baru Titi Besi', '120719'),
(202, '1207192003', 'Bandar Kuala', '120719'),
(203, '1207192004', 'Batu Lokong', '120719'),
(204, '1207192005', 'Galang Suka', '120719'),
(205, '1207192006', 'Galang Barat', '120719'),
(206, '1207192007', 'Jaharun A', '120719'),
(207, '1207192008', 'Jaharun B', '120719'),
(208, '1207192009', 'Juhar Baru', '120719'),
(209, '1207192012', 'Keramat Gajah', '120719'),
(210, '1207192013', 'Kotasan', '120719'),
(211, '1207192015', 'Kotangan', '120719'),
(212, '1207192016', 'Kelapa Satu', '120719'),
(213, '1207192019', 'Nogorejo', '120719'),
(214, '1207192022', 'Paku', '120719'),
(215, '1207192023', 'Petumbukan ', '120719'),
(216, '1207192024', 'Petangguhan', '120719'),
(217, '1207192025', 'Pisang Pala', '120719'),
(218, '1207192026', 'Paya Itik ', '120719'),
(219, '1207192027', 'Pulau Tagor Batu', '120719'),
(220, '1207192028', 'Paya Kuda', '120719'),
(221, '1207192029', 'Paya Sampir', '120719'),
(222, '1207192030', 'Sei Putih', '120719'),
(223, '1207192031', 'Sei Karang', '120719'),
(224, '1207192034', 'Tanah Abang', '120719'),
(225, '1207192035', 'Timbang Deli', '120719'),
(226, '1207192036', 'Tanah Merah', '120719'),
(227, '1207192037', 'Tanjung Siporkis', '120719'),
(228, '1207192038', 'Galang Kota', '120719'),
(229, '1207202001', 'Tiga Juhar', '120720'),
(230, '1207202002', 'Tanjung Bambu', '120720'),
(231, '1207202003', 'Rumah Rih', '120720'),
(232, '1207202004', 'Liang Musda', '120720'),
(233, '1207202005', 'Durian IV Mbelang', '120720'),
(234, '1207202006', 'Tanah Gara Hulu', '120720'),
(235, '1207202007', 'Gunung Manupak A', '120720'),
(236, '1207202008', 'Bah Bah Buntu', '120720'),
(237, '1207202009', 'Tanjung Muda', '120720'),
(238, '1207202010', 'Tanjung Raja', '120720'),
(239, '1207202011', 'Kuta Mbelin', '120720'),
(240, '1207202012', 'Rumah Sumbul ', '120720'),
(241, '1207202013', 'Ranggit-git', '120720'),
(242, '1207202014', 'Liang Pematang', '120720'),
(243, '1207202015', 'Gunung Marupak B', '120720'),
(244, '1207202016', 'Rumah Lengo', '120720'),
(245, '1207202017', 'Sipinggan', '120720'),
(246, '1207202018', 'Tanjung Timur', '120720'),
(247, '1207202019', 'Durian Tinggung', '120720'),
(248, '1207202020', 'Sibunga Bunga Hilir', '120720'),
(249, '1207212001', 'Lantasan Baru', '120721'),
(250, '1207212002', 'Patumbak I', '120721'),
(251, '1207212003', 'Patumbak II', '120721'),
(252, '1207212004', 'Lantasan Lama', '120721'),
(253, '1207212005', 'Sigara gara', '120721'),
(254, '1207212006', 'Marendal I', '120721'),
(255, '1207212007', 'Marindal II', '120721'),
(256, '1207212008', 'Patumbak Kampung', '120721'),
(257, '1207222001', 'Kedai Durian', '120722'),
(258, '1207222002', 'Suka Makmur', '120722'),
(259, '1207222003', 'Mekar Sari', '120722'),
(260, '1207222004', 'Deli Tua', '120722'),
(261, '1207222005', 'Deli Tua Timur', '120722'),
(262, '1207222006', 'Deli Tua Barat', '120722'),
(263, '1207232001', 'Sei Semayang', '120723'),
(264, '1207232002', 'Lalang ', '120723'),
(265, '1207232003', 'Puji Mulyo', '120723'),
(266, '1207232004', 'Paya Geli', '120723'),
(267, '1207232005', 'Mulio Rejo', '120723'),
(268, '1207232006', 'Purwodadi', '120723'),
(269, '1207232007', 'Sumber Melati Diski', '120723'),
(270, '1207232008', 'Tanjung Gusta', '120723'),
(271, '1207232009', 'Helvetia', '120723'),
(272, '1207232010', 'Medan Krio', '120723'),
(273, '1207232011', 'Sei Mencirim', '120723'),
(274, '1207232012', 'Sukamaju', '120723'),
(275, '1207232013', 'Sunggal Kanan', '120723'),
(276, '1207232014', 'Serbajadi', '120723'),
(277, '1207232015', 'Telaga Sari', '120723'),
(278, '1207232016', 'Tanjung Selamat', '120723'),
(279, '1207232017', 'Sei Beras Sekata', '120723'),
(280, '1207242001', 'Hamparan Perak ', '120724'),
(281, '1207242002', 'Sei Baharu', '120724'),
(282, '1207242003', 'Klumpang Kebun ', '120724'),
(283, '1207242004', 'Klumpang Kampung', '120724'),
(284, '1207242005', 'Klambir Lima Kampung', '120724'),
(285, '1207242006', 'Tandem Hulu II', '120724'),
(286, '1207242007', 'Klambir', '120724'),
(287, '1207242008', 'Selemak', '120724'),
(288, '1207242009', 'Kelambir Lima Kebun', '120724'),
(289, '1207242010', 'Sialang Muda', '120724'),
(290, '1207242011', 'Paya Bakung', '120724'),
(291, '1207242012', 'Tandem Hulu I', '120724'),
(292, '1207242013', 'Tandem Hilir I', '120724'),
(293, '1207242014', 'Tandem Hilir II', '120724'),
(294, '1207242015', 'Kota Datar', '120724'),
(295, '1207242016', 'Bulu Cina', '120724'),
(296, '1207242017', 'Kota Rantang', '120724'),
(297, '1207242018', 'Paluh Manan', '120724'),
(298, '1207242019', 'Lama ', '120724'),
(299, '1207242020', 'Paluh Kurau ', '120724'),
(300, '1207252001', 'Helvetia', '120725'),
(301, '1207252002', 'Manunggal ', '120725'),
(302, '1207252003', 'Pematang Johar', '120725'),
(303, '1207252004', 'Karang Gading', '120725'),
(304, '1207252005', 'TelagaTujuh', '120725'),
(305, '1207262001', 'Pematang Lalang', '120725'),
(306, '1207262002', 'Sambirejo Timur', '120726'),
(307, '1207262003', 'Kolam', '120726'),
(308, '1207262004', 'Percut', '120726'),
(309, '1207262005', 'Laut Dendang', '120726'),
(310, '1207262006', 'Tembung', '120726'),
(311, '1207262007', 'Cinta Rakyat', '120726'),
(312, '1207262008', 'Amplas', '120726'),
(313, '1207262009', 'Saentis', '120726'),
(314, '1207262010', 'Sampali', '120726'),
(315, '1207262011', 'Bandar Khalipah', '120726'),
(316, '1207262012', 'Bandar Klippa', '120726'),
(317, '1207262013', 'Tanjung Selamat', '120726'),
(318, '1207262014', 'Tanjung Rejo', '120726'),
(319, '1207262015', 'Medan Estate', '120726'),
(320, '1207262016', 'Cinta Damai', '120726'),
(321, '1207262017', 'Bandar Setia', '120726'),
(322, '1207262018', 'Sei Rotan', '120726'),
(323, '1207262019', 'Kenangan', '120726'),
(324, '1207262020', 'Kenangan Baru', '120726'),
(325, '1207272001', 'Sena', '120727'),
(326, '1207272002', 'Tumpatan Nibung', '120727'),
(327, '1207272003', 'Tanjung Sari', '120727'),
(328, '1207272004', 'Baru', '120727'),
(329, '1207272005', 'Batangkuis Pekan', '120727'),
(330, '1207272006', 'Sidodadi', '120727'),
(331, '1207272007', 'Bintang Meriah', '120727'),
(332, '1207272008', 'Bakaran Batu', '120727'),
(333, '1207272009', 'Paya Gambar', '120727'),
(334, '1207272010', 'Mesjid', '120727'),
(335, '1207272011', 'Sugiharjo', '120727'),
(336, '1207282001', 'Sekip', '120728'),
(337, '1207282002', 'Pagar Jati', '120728'),
(338, '1207282003', 'Tanjung Gambus I', '120728'),
(339, '1207282004', 'Pasar Melintang', '120728'),
(340, '1207282005', 'Pagar Merbau III', '120728'),
(341, '1207282006', 'Bakaran Batu', '120728'),
(342, '1207282007', 'Lubuk Pakam I,II', '120728'),
(343, '1207282008', 'Lubuk Pakam III', '120728'),
(344, '1207282009', 'Paluh Kemiri', '120728'),
(345, '1207282010', 'Cemara', '120728'),
(346, '1207282011', 'Syahmad', '120728'),
(347, '1207282012', 'Petapahan', '120728'),
(348, '1207282013', 'Lubuk Pakam Pekan', '120728'),
(349, '1207312001', 'Tanjung Mulia', '120731'),
(350, '1207312002', 'Purwodadi', '120731'),
(351, '1207312003', 'Sidodadi Batu B', '120731'),
(352, '1207312004', 'Suka Mulia', '120731'),
(353, '1207312005', 'Jati Rejo ', '120731'),
(354, '1207312006', 'Pagar Merbau I ', '120731'),
(355, '1207312007', 'Pagar Merbau II', '120731'),
(356, '1207312008', 'Sidoharjo-I Pasar Miring ', '120731'),
(357, '1207312009', 'Jati Baru', '120731'),
(358, '1207312010', 'Bandar Dolok ', '120731'),
(359, '1207312011', 'Tanjung Garbus II', '120731'),
(360, '1207312012', 'Tanjung Garbus Kampung', '120731'),
(361, '1207312013', 'Perbarakan ', '120731'),
(362, '1207312014', 'Sukamandi Hilir', '120731'),
(363, '1207312015', 'Sukamandi Hulu ', '120731'),
(364, '1207312016', 'Sumberejo', '120731'),
(365, '1207322001', 'Sei Tuan ', '120732'),
(366, '1207322002', 'Tengah', '120732'),
(367, '1207322003', 'Bagan Serdang', '120732'),
(368, '1207322004', 'Rantau Panjang', '120732'),
(369, '1207322005', 'Regemuk', '120732'),
(370, '1207322006', 'Kubah Sentang', '120732'),
(371, '1207322007', 'Pantai Labu Pekan ', '120732'),
(372, '1207322008', 'Pantai Labu Baru ', '120732'),
(373, '1207322009', 'Ramunia 1', '120732'),
(374, '1207322010', 'Ramunia 2', '120732'),
(375, '1207322011', 'Perkebunan Ramunia ', '120732'),
(376, '1207322012', 'Denai Lama', '120732'),
(377, '1207322013', 'Denai Kuala', '120732'),
(378, '1207322014', 'Denai Sarang Burung', '120732'),
(379, '1207322015', 'Binjai Bakung ', '120732'),
(380, '1207322016', 'Paluh Sibaji ', '120732'),
(381, '1207322017', 'Kelambir', '120732'),
(382, '1207322018', 'Durian', '120732'),
(383, '1207322019', 'Pematang Biara', '120732'),
(384, '1207332001', 'Serdang', '120733'),
(385, '1207332002', 'Sidourip', '120733'),
(386, '1207332003', 'Aras Kabu', '120733'),
(387, '1207332004', 'Pasar VI Kuala Namu', '120733'),
(388, '1207332005', 'Emplasmen Kuala Namu', '120733'),
(389, '1207332006', 'Pasar V Kebun Kelapa', '120733'),
(390, '1207332007', 'Beringin ', '120733'),
(391, '1207332008', 'Sidoarjo II Ramunia', '120733'),
(392, '1207332009', 'Karang Anyar', '120733'),
(393, '1207332010', 'Sidodadi Ramunia', '120733'),
(394, '1207332011', 'Tumpatan', '120733'),
(397, '1207021026', 'Pekan Tanjung Morawa', '120702'),
(398, '1207191038', 'Galang kota', '120719'),
(399, '1207221004', 'Deli Tua', '120722'),
(400, '1207221005', 'Deli Tua Timur', '120722'),
(401, '1207221006', 'Deli Tua Barat', '120722'),
(402, '1207261019', 'Kenangan', '120726'),
(403, '1207261020', 'Kenangan Baru', '120726'),
(404, '1207281007', 'Lubuk Pakam I,II', '120728'),
(405, '1207281008', 'Lubuk Pakam III', '120728'),
(406, '1207281009', 'Paluh Kemiri', '120728'),
(407, '1207281010', 'Cemara', '120728'),
(408, '1207281011', 'Syahmad', '120728'),
(409, '1207281012', 'Petapahan', '120728'),
(410, '1207281013', 'Lubuk Pakam Pekan', '120728');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kode_kecamatan`
--

CREATE TABLE `tbl_kode_kecamatan` (
  `idKecamatan` int(11) NOT NULL,
  `kodeKecamatan` varchar(200) NOT NULL,
  `namaKecamatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kode_kecamatan`
--

INSERT INTO `tbl_kode_kecamatan` (`idKecamatan`, `kodeKecamatan`, `namaKecamatan`) VALUES
(1, '120701', 'Gunung Meriah'),
(2, '120702', 'Tanjung Morawa'),
(3, '120703', 'Sibolangit'),
(4, '120704', 'Kutalimbaru'),
(5, '120705', 'Pancur Batu'),
(6, '120706', 'Namorambe'),
(7, '120707', 'Biru Biru'),
(8, '120708', 'STM Hilir'),
(9, '120709', 'Bangun Purba'),
(10, '120710', 'Galang'),
(11, '120711', 'STM Hulu'),
(12, '120712', 'Patumbak'),
(13, '120722', 'Deli Tua'),
(14, '120714', 'Sunggal'),
(15, '120715', 'Hamparan Perak'),
(16, '120716', 'Labuhan Deli'),
(17, '120717', 'Percut Sei Tuan'),
(18, '120718', 'Batang Kuis'),
(19, '120719', 'Lubuk Pakam '),
(20, '120720', 'Pagar Merbau'),
(21, '120721', 'Pantai Labu'),
(22, '120733', 'Beringin'),
(26, 'admin kecamatan', 'admin kecamatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_log`
--

CREATE TABLE `tbl_log` (
  `idLog` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_log`
--

INSERT INTO `tbl_log` (`idLog`, `username`, `keterangan`, `waktu`) VALUES
(1, 'admin', 'Melakukan Sinkronisasi pendataan', '2024-11-11 06:41:43'),
(2, 'admin', 'Melakukan Login Admin', '2024-11-11 06:44:10'),
(3, 'admin', 'Melakukan Login Admin', '2024-11-11 06:44:16'),
(4, 'admin', 'Melakukan Sinkronisasi pendataan', '2024-11-11 06:44:43'),
(5, 'admin', 'Melakukan Sinkronisasi pendataan', '2024-11-11 06:46:20'),
(6, 'admin', 'Melakukan Penghapusan Pendataan', '2024-11-11 06:59:38'),
(7, 'admin', 'Melakukan Sinkronisasi pendataan', '2024-11-11 07:02:02'),
(8, 'admin', 'Melakukan Penambahan pendataan', '2024-11-11 07:06:57'),
(9, 'admin', 'Melakukan Penambahan pendataan', '2024-11-11 07:07:24'),
(10, 'admin', 'Melakukan Penambahan pendataan', '2024-11-11 07:08:14'),
(11, 'admin', 'Melakukan Login Admin', '2024-11-11 07:08:30'),
(12, 'admin', 'Melakukan Penambahan pendataan', '2024-11-11 07:08:40'),
(13, 'admin', 'Melakukan Penghapusan Pendataan', '2024-11-11 07:10:31'),
(14, 'admin', 'Melakukan Penghapusan Pendataan', '2024-11-11 07:10:33'),
(15, 'admin', 'Melakukan Login Admin', '2024-11-11 07:14:40'),
(16, 'admin', 'Melakukan Penambahan Username, dengan username triyadii', '2024-11-11 07:19:09'),
(17, 'admin', 'Melakukan Penambahan Username, dengan username asdasd', '2024-11-11 07:19:32'),
(18, 'admin', 'Melakukan Penambahan Username, dengan username yanto', '2024-11-11 07:26:08'),
(19, 'yanto', 'Melakukan Login Admin', '2024-11-11 07:26:14'),
(20, 'yanto', 'Melakukan Penambahan pendataan', '2024-11-11 07:27:21'),
(21, 'admin', 'Melakukan Login Admin', '2024-11-11 07:27:27'),
(22, 'admin', 'Melakukan Penambahan Username, dengan username dika', '2024-11-11 07:27:39'),
(23, 'dika', 'Melakukan Login Admin', '2024-11-11 07:27:44'),
(24, 'admin', 'Melakukan Login Admin', '2024-11-11 07:27:54'),
(25, 'yanto', 'Melakukan Login Admin', '2024-11-11 07:28:04'),
(26, 'yanto', 'Melakukan Penghapusan Pendataan', '2024-11-11 07:37:00'),
(27, 'admin', 'Melakukan Login Admin', '2024-11-11 07:37:09'),
(28, 'admin', 'Melakukan Penghapusan Pendataan', '2024-11-11 07:38:56'),
(29, 'admin', 'Melakukan Penghapusan Pendataan', '2024-11-11 07:39:10'),
(30, 'admin', 'Melakukan Penghapusan Data User', '2024-11-11 07:40:35'),
(31, 'admin', 'Melakukan Penghapusan Data User', '2024-11-11 07:40:39'),
(32, 'admin', 'Melakukan Penghapusan Data User', '2024-11-11 07:43:16'),
(33, 'admin', 'Melakukan Penambahan Username, dengan username triyadii', '2024-11-11 07:48:10'),
(34, 'triyadii', 'Melakukan Login Admin', '2024-11-11 07:48:21'),
(35, 'triyadii', 'Melakukan Penambahan pendataan', '2024-11-11 07:48:33'),
(36, 'admin', 'Melakukan Login Admin', '2024-11-11 07:48:38'),
(37, 'admin', 'Gagal menghapus user, karena masih ada data di pendataan', '2024-11-11 07:48:44'),
(38, 'admin', 'Melakukan Penghapusan Pendataan', '2024-11-11 07:49:22'),
(39, 'admin', 'Melakukan Penghapusan Data User', '2024-11-11 07:49:27'),
(40, 'admin', 'Melakukan Penambahan Username, dengan username dico', '2024-11-11 07:52:24'),
(41, 'dico', 'Melakukan Perubahan Password', '2024-11-11 07:52:34'),
(42, 'dico', 'Melakukan Login Admin', '2024-11-11 07:52:41'),
(43, 'admin', 'Melakukan Login Admin', '2024-11-11 07:52:52'),
(44, 'admin', 'Melakukan Penghapusan Data User', '2024-11-11 07:52:57'),
(45, 'admin', 'Melakukan Login Admin', '2024-11-11 07:55:05'),
(46, 'admin', 'Melakukan Penambahan Username, dengan username yanto', '2024-11-11 07:55:15'),
(47, 'yanto', 'Melakukan Login Admin', '2024-11-11 07:55:22'),
(48, 'yanto', 'Melakukan Perubahan Password', '2024-11-11 07:55:29'),
(49, 'Tidak Diketahui', 'Melakukan Percobaan Login dengan menggunakan username yanto', '2024-11-11 07:55:36'),
(50, 'Tidak Diketahui', 'Melakukan Percobaan Login dengan menggunakan username yanto', '2024-11-11 07:55:40'),
(51, 'yanto', 'Melakukan Login Admin', '2024-11-11 07:55:44'),
(52, 'admin', 'Melakukan Login Admin', '2024-11-11 08:00:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendataan`
--

CREATE TABLE `tbl_pendataan` (
  `idPendataan` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` int(11) NOT NULL,
  `desa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hakAkses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `username`, `nama`, `password`, `hakAkses`) VALUES
(1, 'admin', 'Admin', '$2y$10$v7gtBXaDvFwD7gqbA2T0Iu/j47uJwUUqfLy61EWyq9VJPyKKQCWjK', 1),
(8, 'yanto', 'yanto', '$2y$10$WQVS32VKn4k20v5NAQsubOIh/d/tr7zDqn3.JYhJ8cPDnaHAPLekm', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kode_desa`
--
ALTER TABLE `tbl_kode_desa`
  ADD PRIMARY KEY (`idDesa`);

--
-- Indeks untuk tabel `tbl_kode_kecamatan`
--
ALTER TABLE `tbl_kode_kecamatan`
  ADD PRIMARY KEY (`idKecamatan`);

--
-- Indeks untuk tabel `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`idLog`);

--
-- Indeks untuk tabel `tbl_pendataan`
--
ALTER TABLE `tbl_pendataan`
  ADD PRIMARY KEY (`idPendataan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kode_desa`
--
ALTER TABLE `tbl_kode_desa`
  MODIFY `idDesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT untuk tabel `tbl_kode_kecamatan`
--
ALTER TABLE `tbl_kode_kecamatan`
  MODIFY `idKecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `idLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `tbl_pendataan`
--
ALTER TABLE `tbl_pendataan`
  MODIFY `idPendataan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
