-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2015 at 07:53 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ecommerce2`
--
CREATE DATABASE IF NOT EXISTS `db_ecommerce2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_ecommerce2`;

-- --------------------------------------------------------

--
-- Table structure for table `banners_tabel`
--

CREATE TABLE IF NOT EXISTS `banners_tabel` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `title_banner` varchar(255) NOT NULL,
  `description_banner` text NOT NULL,
  `image_banner` text NOT NULL,
  `status_banner` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `banners_tabel`
--

INSERT INTO `banners_tabel` (`id_banner`, `title_banner`, `description_banner`, `image_banner`, `status_banner`, `created_at`, `modified_at`) VALUES
(2, 'Acer E1', 'Our Best Value Intel Core i7', 'ne71b_banner_en_970x535.jpg', 1, '2015-06-27 22:20:14', '2015-06-28 05:07:31'),
(3, 'Asus Intro', 'Asus Banner Intro', 'Asus_A43SV_-_Intro_Banner_600Pixels.jpg', 1, '2015-06-27 22:49:07', '0000-00-00 00:00:00'),
(4, 'Asus Intro Laptop', 'Asus Intro Laptop', 'banner-laptop-Asus.jpg', 1, '2015-06-27 22:49:29', '0000-00-00 00:00:00'),
(5, 'ACER Travel Mate', 'ACER Travel Mate', 'banner_AcerTravelMate.png', 1, '2015-06-28 05:10:56', '0000-00-00 00:00:00'),
(6, 'Lenovo Ideapad Yoga', 'Lenovo Ideapad Yoga', 'HERO_BANNER_GREY.jpg', 1, '2015-06-28 05:11:55', '0000-00-00 00:00:00'),
(7, 'Toshiba PRo Cosmio', 'Toshiba PRo Cosmio', 'Toshiba_Qosmio_banner.jpg', 1, '2015-06-28 05:14:24', '0000-00-00 00:00:00'),
(8, 'Toshiba Top Banner', 'Toshiba Top Banner', 'Toshiba-satelite-M840_Topp_Banner.jpg', 1, '2015-06-28 05:15:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands_tabel`
--

CREATE TABLE IF NOT EXISTS `brands_tabel` (
  `id_brand` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `permalink` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id_brand`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `brands_tabel`
--

INSERT INTO `brands_tabel` (`id_brand`, `name`, `permalink`, `deskripsi`, `created_at`, `modified_at`) VALUES
(1, 'Asus', 'Asus', 'Asus', '2015-06-18 16:35:58', '0000-00-00 00:00:00'),
(2, 'Acer', 'Acer', 'Acer', '2015-06-18 16:36:34', '0000-00-00 00:00:00'),
(3, 'Toshiba', 'Toshiba', 'Toshiba', '2015-06-18 16:37:19', '0000-00-00 00:00:00'),
(4, 'Lenovo', 'Lenovo', 'Lenovo', '2015-06-18 16:37:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('60dafc5dd8ed939cc25bf01b3c02dcae', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36', 1439372093, 'a:7:{s:9:"user_data";s:0:"";s:7:"id_user";s:1:"9";s:10:"user_email";s:16:"haruka@gmail.com";s:9:"user_name";s:15:"Haruka Nakagawa";s:9:"id_status";s:1:"2";s:8:"is_login";b:1;s:17:"flash:old:message";s:61:"<div class="alert alert-success"> Review Success Added </div>";}'),
('772379487f4d5b3cb3beeca008b97301', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36', 1439355973, '');

-- --------------------------------------------------------

--
-- Table structure for table `country_tabel`
--

CREATE TABLE IF NOT EXISTS `country_tabel` (
  `id_country` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `country_tabel`
--

INSERT INTO `country_tabel` (`id_country`, `country_name`) VALUES
(1, 'Indonesia'),
(2, 'Jepang'),
(3, 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
  `id_harga` int(11) NOT NULL AUTO_INCREMENT,
  `range_harga` varchar(11) NOT NULL,
  PRIMARY KEY (`id_harga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `range_harga`) VALUES
(1, '3-5 JUTA'),
(2, '5-7 JUTA'),
(3, '7-9 JUTA'),
(4, '> 9 JUTA');

-- --------------------------------------------------------

--
-- Table structure for table `komentars_tabel`
--

CREATE TABLE IF NOT EXISTS `komentars_tabel` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `komentars_tabel`
--

INSERT INTO `komentars_tabel` (`id_komentar`, `id_product`, `id_user`, `komentar`, `created_at`, `created_by`) VALUES
(1, 76, 9, 'Cocok untuk dipakai sehari-hari.', '2015-08-12 16:35:42', 'Haruka Nakagawa');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `kriteria_name` varchar(50) NOT NULL,
  `parameter_id` int(11) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria_name`, `parameter_id`) VALUES
(1, 'Multimedia', 1),
(2, '5-7 Juta', 2),
(3, 'Amd Series', 3),
(4, '2', 4),
(5, 'Hdd 750gb', 5),
(6, 'Toshiba', 6),
(7, 'Hdd 1tb', 5),
(8, '4', 4),
(9, 'Hdd 500gb', 5),
(10, 'Lenovo', 6),
(11, 'Intel Core I3', 3),
(12, 'Asus', 6),
(13, 'Acer', 6),
(14, 'Intel Core I5', 3),
(15, '7-9 Juta', 2),
(16, 'Intel Core I7', 3),
(17, '> 9 Juta', 2),
(18, '8', 4),
(19, 'Daily', 1),
(20, '3-5 Juta', 2),
(21, 'Dual Core', 3),
(22, 'Hdd 320gb', 5),
(23, 'Quad Core', 3),
(24, 'Gaming', 1),
(25, '12', 4),
(26, '16', 4),
(27, 'Business', 1),
(28, 'Ssd 128gb', 5),
(29, 'Ssd 256gb', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_produk`
--

CREATE TABLE IF NOT EXISTS `kriteria_produk` (
  `id_kriteria_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  PRIMARY KEY (`id_kriteria_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=523 ;

--
-- Dumping data for table `kriteria_produk`
--

INSERT INTO `kriteria_produk` (`id_kriteria_produk`, `id_kriteria`, `id_produk`) VALUES
(1, 1, 36),
(2, 2, 36),
(3, 3, 36),
(4, 4, 36),
(5, 5, 36),
(6, 6, 36),
(7, 1, 39),
(8, 2, 39),
(9, 3, 39),
(10, 4, 39),
(11, 7, 39),
(12, 6, 39),
(13, 1, 37),
(14, 2, 37),
(15, 3, 37),
(16, 8, 37),
(17, 9, 37),
(18, 6, 37),
(19, 1, 38),
(20, 2, 38),
(21, 3, 38),
(22, 8, 38),
(23, 5, 38),
(24, 6, 38),
(25, 1, 57),
(26, 2, 57),
(27, 3, 57),
(28, 8, 57),
(29, 7, 57),
(30, 10, 57),
(31, 1, 1),
(32, 2, 1),
(33, 11, 1),
(34, 4, 1),
(35, 9, 1),
(36, 12, 1),
(37, 1, 23),
(38, 2, 23),
(39, 11, 23),
(40, 4, 23),
(41, 9, 23),
(42, 13, 23),
(43, 1, 40),
(44, 2, 40),
(45, 11, 40),
(46, 4, 40),
(47, 5, 40),
(48, 6, 40),
(49, 1, 22),
(50, 2, 22),
(51, 11, 22),
(52, 8, 22),
(53, 9, 22),
(54, 13, 22),
(55, 1, 24),
(56, 2, 24),
(57, 14, 24),
(58, 4, 24),
(59, 9, 24),
(60, 13, 24),
(61, 1, 59),
(62, 2, 59),
(63, 14, 59),
(64, 8, 59),
(65, 9, 59),
(66, 10, 59),
(67, 1, 2),
(68, 15, 2),
(69, 14, 2),
(70, 8, 2),
(71, 9, 2),
(72, 12, 2),
(73, 1, 25),
(74, 15, 25),
(75, 14, 25),
(76, 8, 25),
(77, 9, 25),
(78, 13, 25),
(79, 1, 41),
(80, 15, 41),
(81, 14, 41),
(82, 8, 41),
(83, 9, 41),
(84, 6, 41),
(85, 1, 58),
(86, 15, 58),
(87, 14, 58),
(88, 8, 58),
(89, 9, 58),
(90, 10, 58),
(91, 1, 3),
(92, 15, 3),
(93, 14, 3),
(94, 8, 3),
(95, 7, 3),
(96, 12, 3),
(97, 1, 26),
(98, 15, 26),
(99, 14, 26),
(100, 8, 26),
(101, 7, 26),
(102, 13, 26),
(103, 1, 42),
(104, 15, 42),
(105, 14, 42),
(106, 8, 42),
(107, 7, 42),
(108, 6, 42),
(109, 1, 43),
(110, 15, 43),
(111, 16, 43),
(112, 4, 43),
(113, 7, 43),
(114, 6, 43),
(115, 1, 44),
(116, 15, 44),
(117, 16, 44),
(118, 8, 44),
(119, 9, 44),
(120, 6, 44),
(121, 1, 60),
(122, 15, 60),
(123, 16, 60),
(124, 8, 60),
(125, 7, 60),
(126, 10, 60),
(127, 1, 4),
(128, 17, 4),
(129, 16, 4),
(130, 8, 4),
(131, 7, 4),
(132, 12, 4),
(133, 1, 27),
(134, 17, 27),
(135, 16, 27),
(136, 8, 27),
(137, 7, 27),
(138, 13, 27),
(139, 1, 61),
(140, 17, 61),
(141, 16, 61),
(142, 18, 61),
(143, 7, 61),
(144, 10, 61),
(145, 19, 5),
(146, 20, 5),
(147, 3, 5),
(148, 4, 5),
(149, 9, 5),
(150, 12, 5),
(151, 19, 62),
(152, 20, 62),
(153, 3, 62),
(154, 4, 62),
(155, 9, 62),
(156, 10, 62),
(157, 19, 32),
(158, 20, 32),
(159, 3, 32),
(160, 4, 32),
(161, 9, 32),
(162, 13, 32),
(163, 19, 46),
(164, 20, 46),
(165, 3, 46),
(166, 4, 46),
(167, 9, 46),
(168, 6, 46),
(169, 19, 63),
(170, 20, 63),
(171, 3, 63),
(172, 8, 63),
(173, 9, 63),
(174, 10, 63),
(175, 19, 45),
(176, 2, 45),
(177, 3, 45),
(178, 4, 45),
(179, 9, 45),
(180, 6, 45),
(181, 19, 64),
(182, 20, 64),
(183, 21, 64),
(184, 4, 64),
(185, 9, 64),
(186, 10, 64),
(187, 19, 30),
(188, 20, 30),
(189, 21, 30),
(190, 4, 30),
(191, 22, 30),
(192, 13, 30),
(193, 19, 28),
(194, 20, 28),
(195, 21, 28),
(196, 4, 28),
(197, 9, 28),
(198, 13, 28),
(199, 19, 6),
(200, 20, 6),
(201, 21, 6),
(202, 4, 6),
(203, 9, 6),
(204, 12, 6),
(205, 19, 48),
(206, 20, 48),
(207, 21, 48),
(208, 4, 48),
(209, 9, 48),
(210, 6, 48),
(211, 19, 29),
(212, 20, 29),
(213, 21, 29),
(214, 8, 29),
(215, 9, 29),
(216, 13, 29),
(217, 19, 49),
(218, 20, 49),
(219, 21, 49),
(220, 8, 49),
(221, 9, 49),
(222, 6, 49),
(223, 19, 47),
(224, 2, 47),
(225, 21, 47),
(226, 4, 47),
(227, 9, 47),
(228, 6, 47),
(229, 19, 65),
(230, 20, 65),
(231, 11, 65),
(232, 4, 65),
(233, 9, 65),
(234, 10, 65),
(235, 19, 8),
(236, 20, 8),
(237, 11, 8),
(238, 4, 8),
(239, 9, 8),
(240, 12, 8),
(241, 19, 31),
(242, 2, 31),
(243, 11, 31),
(244, 4, 31),
(245, 9, 31),
(246, 13, 31),
(247, 19, 66),
(248, 2, 66),
(249, 11, 66),
(250, 4, 66),
(251, 9, 66),
(252, 10, 66),
(253, 19, 50),
(254, 2, 50),
(255, 11, 50),
(256, 4, 50),
(257, 9, 50),
(258, 6, 50),
(259, 19, 52),
(260, 2, 52),
(261, 11, 52),
(262, 4, 52),
(263, 5, 52),
(264, 6, 52),
(265, 19, 53),
(266, 2, 53),
(267, 11, 53),
(268, 4, 53),
(269, 7, 53),
(270, 6, 53),
(271, 19, 51),
(272, 2, 51),
(273, 11, 51),
(274, 8, 51),
(275, 9, 51),
(276, 6, 51),
(277, 19, 67),
(278, 2, 67),
(279, 11, 67),
(280, 8, 67),
(281, 9, 67),
(282, 10, 67),
(283, 19, 54),
(284, 2, 54),
(285, 14, 54),
(286, 4, 54),
(287, 9, 54),
(288, 6, 54),
(289, 19, 55),
(290, 2, 55),
(291, 14, 55),
(292, 8, 55),
(293, 9, 55),
(294, 6, 55),
(295, 19, 68),
(296, 2, 68),
(297, 14, 68),
(298, 8, 68),
(299, 9, 68),
(300, 10, 68),
(301, 19, 33),
(302, 2, 33),
(303, 14, 33),
(304, 8, 33),
(305, 9, 33),
(306, 13, 33),
(307, 19, 71),
(308, 15, 71),
(309, 16, 71),
(310, 8, 71),
(311, 9, 71),
(312, 10, 71),
(313, 19, 70),
(314, 15, 70),
(315, 16, 70),
(316, 18, 70),
(317, 9, 70),
(318, 10, 70),
(319, 19, 69),
(320, 20, 69),
(321, 23, 69),
(322, 4, 69),
(323, 9, 69),
(324, 10, 69),
(325, 19, 7),
(326, 20, 7),
(327, 23, 7),
(328, 4, 7),
(329, 9, 7),
(330, 12, 7),
(331, 24, 9),
(332, 20, 9),
(333, 3, 9),
(334, 8, 9),
(335, 9, 9),
(336, 12, 9),
(337, 24, 10),
(338, 2, 10),
(339, 3, 10),
(340, 8, 10),
(341, 7, 10),
(342, 12, 10),
(343, 24, 34),
(344, 15, 34),
(345, 3, 34),
(346, 8, 34),
(347, 7, 34),
(348, 13, 34),
(349, 24, 11),
(350, 17, 11),
(351, 3, 11),
(352, 18, 11),
(353, 7, 11),
(354, 12, 11),
(355, 24, 12),
(356, 17, 12),
(357, 14, 12),
(358, 18, 12),
(359, 7, 12),
(360, 12, 12),
(361, 24, 72),
(362, 17, 72),
(363, 14, 72),
(364, 18, 72),
(365, 7, 72),
(366, 10, 72),
(367, 24, 35),
(368, 17, 35),
(369, 16, 35),
(370, 8, 35),
(371, 7, 35),
(372, 13, 35),
(373, 24, 73),
(374, 17, 73),
(375, 16, 73),
(376, 18, 73),
(377, 7, 73),
(378, 10, 73),
(379, 24, 13),
(380, 17, 13),
(381, 16, 13),
(382, 18, 13),
(383, 7, 13),
(384, 12, 13),
(385, 24, 14),
(386, 17, 14),
(387, 16, 14),
(388, 25, 14),
(389, 5, 14),
(390, 12, 14),
(391, 24, 56),
(392, 17, 56),
(393, 16, 56),
(394, 26, 56),
(395, 7, 56),
(396, 6, 56),
(397, 24, 74),
(398, 17, 74),
(399, 16, 74),
(400, 26, 74),
(401, 7, 74),
(402, 10, 74),
(403, 27, 75),
(404, 20, 75),
(405, 3, 75),
(406, 4, 75),
(407, 9, 75),
(408, 10, 75),
(409, 27, 76),
(410, 2, 76),
(411, 3, 76),
(412, 8, 76),
(413, 9, 76),
(414, 10, 76),
(415, 27, 79),
(416, 2, 79),
(417, 11, 79),
(418, 4, 79),
(419, 9, 79),
(420, 10, 79),
(421, 27, 16),
(422, 2, 16),
(423, 11, 16),
(424, 4, 16),
(425, 9, 16),
(426, 12, 16),
(427, 27, 77),
(428, 2, 77),
(429, 11, 77),
(430, 8, 77),
(431, 9, 77),
(432, 10, 77),
(433, 27, 78),
(434, 2, 78),
(435, 11, 78),
(436, 8, 78),
(437, 7, 78),
(438, 10, 78),
(439, 27, 80),
(440, 2, 80),
(441, 14, 80),
(442, 4, 80),
(443, 9, 80),
(444, 10, 80),
(445, 27, 81),
(446, 15, 81),
(447, 14, 81),
(448, 8, 81),
(449, 9, 81),
(450, 10, 81),
(451, 27, 82),
(452, 15, 82),
(453, 14, 82),
(454, 8, 82),
(455, 7, 82),
(456, 10, 82),
(457, 27, 17),
(458, 15, 17),
(459, 14, 17),
(460, 8, 17),
(461, 7, 17),
(462, 12, 17),
(463, 27, 84),
(464, 17, 84),
(465, 14, 84),
(466, 8, 84),
(467, 7, 84),
(468, 10, 84),
(469, 27, 20),
(470, 17, 20),
(471, 14, 20),
(472, 8, 20),
(473, 28, 20),
(474, 12, 20),
(475, 27, 83),
(476, 17, 83),
(477, 14, 83),
(478, 18, 83),
(479, 9, 83),
(480, 10, 83),
(481, 27, 18),
(482, 17, 18),
(483, 14, 18),
(484, 18, 18),
(485, 29, 18),
(486, 12, 18),
(487, 27, 85),
(488, 17, 85),
(489, 16, 85),
(490, 8, 85),
(491, 9, 85),
(492, 10, 85),
(493, 27, 19),
(494, 17, 19),
(495, 16, 19),
(496, 8, 19),
(497, 7, 19),
(498, 12, 19),
(499, 27, 87),
(500, 17, 87),
(501, 16, 87),
(502, 8, 87),
(503, 7, 87),
(504, 10, 87),
(505, 27, 86),
(506, 17, 86),
(507, 16, 86),
(508, 18, 86),
(509, 7, 86),
(510, 10, 86),
(511, 27, 21),
(512, 17, 21),
(513, 16, 21),
(514, 18, 21),
(515, 29, 21),
(516, 12, 21),
(517, 27, 15),
(518, 20, 15),
(519, 23, 15),
(520, 4, 15),
(521, 9, 15),
(522, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `memori`
--

CREATE TABLE IF NOT EXISTS `memori` (
  `id_memori` int(11) NOT NULL AUTO_INCREMENT,
  `ukuran` varchar(5) NOT NULL,
  PRIMARY KEY (`id_memori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `memori`
--

INSERT INTO `memori` (`id_memori`, `ukuran`) VALUES
(1, '2'),
(2, '4'),
(3, '8'),
(4, '12'),
(5, '16');

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE IF NOT EXISTS `parameter` (
  `id_parameter` int(11) NOT NULL AUTO_INCREMENT,
  `parameter_name` varchar(100) NOT NULL,
  `parameter_question` text NOT NULL,
  PRIMARY KEY (`id_parameter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `parameter`
--

INSERT INTO `parameter` (`id_parameter`, `parameter_name`, `parameter_question`) VALUES
(1, 'Tipe Kebutuhan', 'Tipe produk laptop seperti apa yang anda inginkan?'),
(2, 'Harga', 'Berapakah harga produk laptop yang anda inginkan?'),
(3, 'Processor', 'Tipe processor seperti apa yang anda butuhkan?'),
(4, 'Memori', 'Berapa besar memory (RAM) laptop yang anda inginkan?'),
(5, 'Storage', 'Tipe dan seberapa besar media penyimpanan dari produk laptop yang anda inginkan?'),
(6, 'Brand', 'Brand produk laptop apa yang anda inginkan?');

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

CREATE TABLE IF NOT EXISTS `processor` (
  `id_processor` int(11) NOT NULL AUTO_INCREMENT,
  `processor` varchar(50) NOT NULL,
  PRIMARY KEY (`id_processor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`id_processor`, `processor`) VALUES
(1, 'DUAL CORE'),
(2, 'QUAD CORE'),
(3, 'INTEL CORE I3'),
(4, 'INTEL CORE I5'),
(5, 'INTEL CORE I7'),
(6, 'AMD SERIES');

-- --------------------------------------------------------

--
-- Table structure for table `products_tabel`
--

CREATE TABLE IF NOT EXISTS `products_tabel` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` float NOT NULL,
  `processor` varchar(50) NOT NULL,
  `memory` varchar(10) NOT NULL,
  `vga` varchar(50) NOT NULL,
  `screen` varchar(5) NOT NULL,
  `os` varchar(50) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `product_stock` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL,
  `product_image` text NOT NULL,
  `product_image_thumb` text NOT NULL,
  `permalink` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `products_tabel`
--

INSERT INTO `products_tabel` (`id_product`, `id_category`, `id_brand`, `product_name`, `product_description`, `product_price`, `processor`, `memory`, `vga`, `screen`, `os`, `storage`, `color`, `product_stock`, `created_at`, `modified_at`, `product_image`, `product_image_thumb`, `permalink`, `status`, `product_code`) VALUES
(1, 1, 1, 'ASUS A455LD-WX110D', 'Intel Core i3 4030U-1.9Ghz, RAM 2GB, HDD 500GB, DVD/RW, VGA nVidia GT820M-2GB, Screen 14"  , Dos.', 5499000, 'Intel Core i3 4030U-1.9Ghz', '2', 'VGA nVidia GT820M-2GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-27 22:53:23', 'asus-a455ld-wx110d-black.jpg', 'asus-a455ld-wx110d-black.jpg', 'ASUS-A455LD-WX110D', 1, 'ASU110D'),
(2, 1, 1, 'ASUS A455LJ-WX053D', 'Intel Core i5 5200U-2.2Ghz Turbo 2.7Ghz, RAM 4GB, 500GB, DVD/RW, VGA Nvidia Geforce GT920M-2GB, Screen 14", Dos.', 7499000, 'Intel Core i5 5200U-2.2Ghz Turbo 2.7Ghz', '4', 'VGA Nvidia Geforce GT920M-2GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-27 22:53:35', 'asus-a455lj-wx053d-black.jpg', 'asus-a455lj-wx053d-black.jpg', 'ASUS-A455LJ-WX053D', 1, 'ASU153D'),
(3, 1, 1, 'ASUS A455LN-WX031D', 'Intel Core i5 5200U-2.2Ghz Turbo 2.7Ghz, RAM 4GB, HDD 1TB, DVD/RW, VGA nVidia GT840M-2GB, Screen 14", Dos.', 7499000, 'Intel Core i5 5200U-2.2Ghz Turbo 2.7Ghz', '4', 'VGA nVidia GT840M-2GB', '14', 'DOS', 'HDD 1TB', 'Dark Blue', 10, '2015-06-27 14:30:03', '2015-06-28 00:06:06', 'ASUS_A455LN_Dark_Blue.jpg', 'ASUS_A455LN_Dark_Blue.jpg', 'ASUS-A455LN-WX031D', 1, 'ASU131D'),
(4, 1, 1, 'ASUS X450JN-WX022D', 'Intel Core i7 4710HQ-2.5Ghz Turbo 3.5Ghz, RAM 4GB, HDD 1TB, DVD/RW, VGA nVidia GT840-2GB, Screen 14", Dos.', 9499000, 'Intel Core i7 4710HQ-2.5Ghz Turbo 3.5Ghz', '4', 'VGA nVidia GT840M-2GB', '14', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 00:17:21', 'asus-x450jn-wx022d-black.jpg', 'asus-x450jn-wx022d-black.jpg', 'ASUS-X450JN-WX022D', 1, 'ASU122D'),
(5, 2, 1, 'ASUS X454WA-VX005D', 'New Arrival !!! \r\nAMD DualCore  E1 6010-1.350Ghz, RAM 2GB, HDD 500GB, DVD/RW, VGA AMD RADEON R2, Screen 14", Dos\r\nFREE : Mouse Keren', 3499000, 'AMD DualCore  E1 6010-1.350?Ghz', '2', 'VGA AMD RADEON R2', '14', 'DOS', 'HDD 500GB', 'White', 10, '2015-06-27 14:30:03', '2015-06-28 00:20:20', 'asus-x454wa-vx005d-white.jpg', 'asus-x454wa-vx005d-white.jpg', 'ASUS-X454WA-VX005D', 1, 'ASU205D'),
(6, 2, 1, 'ASUS X453MA-WX220B', 'Best Buy with Windows Original !!! \r\nIntel Celeron DualCore N2840-2.58Ghz, RAM 2GB, HDD 500GB, DVD/RW, VGA Intel HD Graphics, Screen 14" , Windows 8.1-Bing', 3899000, 'Intel Celeron DualCore N2840-2.58?Ghz', '2', 'VGA Intel HD Graphics', '14', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 00:24:10', 'ASUS_X453MA-WX220B_Black.jpg', 'ASUS_X453MA-WX220B_Black.jpg', 'ASUS-X453MA-WX220B', 1, 'ASU220B'),
(7, 2, 1, 'ASUS X453MA-WX248B', 'New Arrival  !!!\r\nIntel QuadCore N3540-2.16Ghz Turbo 2.66Ghz, RAM 2GB, HDD 500GB, DVD/RW, VGA Intel HD Graphics, Screen 14", Windows 8.1-Bing', 4199000, 'Intel QuadCore N3540-2.16Ghz Turbo 2.66?Ghz', '2', 'VGA Intel HD Graphics', '14', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 00:46:04', 'asus-x453ma-wx248b-black.jpg', 'asus-x453ma-wx248b-black.jpg', 'ASUS-X453MA-WX248B', 1, 'ASU248B'),
(8, 2, 1, 'ASUS X455LA-WX058D', 'New Arrival & Model !!!\r\nIntel Core i3 4030U-1.9Ghz, RAM 2GB, HDD 500GB, DVD/RW, VGA Intel HD 4400, Screen 14" LED, Dos.\r\nFREE : Mouse Keren', 4899000, 'Intel Core i3 4030U-1.9Ghz', '2', 'VGA Intel HD 4400', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 00:47:58', 'asus-x455la-wx058d-black.jpg', 'asus-x455la-wx058d-black.jpg', 'ASUS-X455LA-WX058D', 1, 'ASU258D'),
(9, 3, 1, 'ASUS X550DP-WX181D', 'BEST BUY QUADCORE Processors !!!\r\nAMD QuadCore A8 5550M-2.1Ghz Turbo 3.1Ghz, RAM 2GB, HDD 500GB, VGA Dual AMD RADEON HD8550G+ HD8670-2GB, Screen 15.6" , Dos.', 4899000, 'AMD QuadCore A8 5550M-2.1Ghz Turbo 3.1Ghz', '4', 'VGA Dual AMD RADEON HD8550G + HD8670-2GB', '15.6', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 00:58:05', 'asus-x550dp-wx181d-black.jpg', 'asus-x550dp-wx181d-black.jpg', 'ASUS-X550DP-WX181D', 1, 'ASU381D'),
(10, 3, 1, 'ASUS X550ZE-XX033D', 'NEW Superrior QUADCORE Processors !!!\r\nAMD QuadCore A10 7400P-2.5Ghz Turbo 3.4Ghz, RAM 4GB, HDD 1TB, VGA Dual AMD RADEON R6 + R5 M230-2GB, Screen 15.6", Dos.', 6699000, 'AMD QuadCore A10 7400P-2.5Ghz Turbo 3.4Ghz', '4', 'VGA Dual AMD RADEON R6 + R5 M230-2GB', '15.6', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 01:02:58', 'asus-x550ze-xx033d-black.jpg', 'asus-x550ze-xx033d-black.jpg', 'ASUS-X550ZE-XX033D', 1, 'ASU333D'),
(11, 3, 1, 'ASUS N551ZU-CN041H', 'NEW Superrior QUADCORE Processors !!!\r\nAMD Quad Core FX 7600P-2.7Ghz Turbo 3.6Ghz, RAM 8GB, HDD 1TB, DVD/RW, VGA AMD RADEON R9 M280X- 4GB, Screen 15.6" FHD, Windows 8.1', 12799000, 'AMD Quad Core FX 7600P-2.7Ghz Turbo 3.6Ghz', '8', 'VGA AMD RADEON R9 M280X- 4GB', '15.6', 'Windows', 'HDD 1TB', 'Grey', 10, '2015-06-27 14:30:03', '2015-06-28 01:13:57', 'asus-n551zu-cn041h-grey.jpg', 'asus-n551zu-cn041h-grey.jpg', 'ASUS-N551ZU-CN041H', 1, 'ASU341H'),
(12, 3, 1, 'ASUS N550JV-CN301D', 'GAMING Laptop with Unparalle Quad-Speaker Sound + SuB Woofer. \r\nIntel Core i5 4200H-2.8Ghz Turbo 3.4Ghz, RAM 8GB, HDD 1TB, Blueray, VGA nVidia GT750M-2GB,  Screen 15" LED FHD, Dos.', 11799000, 'Intel Core i5 4200H-2.8?Ghz Turbo 3.4Ghz', '8', 'VGA nVidia GT750M-2GB', '15.6', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 01:40:40', 'asus-n550jv-cn301d-black.jpg', 'asus-n550jv-cn301d-black.jpg', 'ASUS-N550JV-CN301D', 1, 'ASU301D'),
(13, 3, 1, 'ASUS ROG G550JX-CN024H', 'NEW REPUBLIC of GAMING Laptop !!!\r\nIntel Core i7 4720HQ-2.6Ghz Turbo 3.6Ghz, RAM 8GB, HDD 1TB, DVD/RW, VGA Nvidia GTX 950M-4GB, Screen 15.6" FHD, Windows 8.1\r\nFREE : Sub Woofer + BackPack ASUS ROG', 15499000, 'Intel Core i7 4720HQ-2.6Ghz Turbo 3.6Ghz', '8', 'VGA Nvidia GTX950-4GB', '15.6', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 01:42:16', '-asus-rog-g550jx-cn024h-black-.jpg', '-asus-rog-g550jx-cn024h-black-.jpg', 'ASUS-ROG-G550JX-CN024H', 1, 'ASU324H'),
(14, 3, 1, 'ASUS ROG G552JX-DM014H', 'Open order please call our sales,,,\r\nNEW ARRIVAL BEST REPUBLIC of GAMING Laptop 2015 !!! \r\nIntel Core i7 4720HQ-2.6Ghz Turbo 3.6Ghz, RAM 12GB, HDD 750GB, DVD/RW, VGA nVidia GTX950-2GB, Screen 15.6” FHD, Windows 8.1\r\nFREE : Mouse GAMING REXUS G5', 16999000, 'Intel Core i7 4720HQ-2.5Ghz Turbo 3.5Ghz', '12', 'VGA nVidia GTX950-2GB', '15.6', 'Windows', 'HDD 750GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 04:57:17', 'ASUS_ROG_G552JX-DM014H_Black.jpg', 'ASUS_ROG_G552JX-DM014H_Black.jpg', 'ASUS-ROG-G552JX-DM014H', 1, 'ASU314H'),
(15, 4, 1, 'ASUS PRO P453MA-WX326B', 'Good Quality & Material !!!\r\nIntel QuadCore N3540-2.66Ghz, RAM 2GB, HDD 500GB, DVD/RW, VGA Intel HD Graphics, Screen 14", Windows 8.1-Bing', 4399000, 'Intel QuadCore N3540-2.66?Ghz', '2', 'VGA Intel HD Graphics', '14', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 04:59:30', 'asus-pro-p453ma-wx326b-black.jpg', 'asus-pro-p453ma-wx326b-black.jpg', 'ASUS-PRO-P453MA-WX326B', 1, 'ASU426B'),
(16, 4, 1, 'ASUS PRO P450LDV-WO316D', 'Good Quality & Material !!!\r\nIntel Core i3 4030U-1.9Ghz, RAM 2GB, HDD 500GB, DVD/RW, VGA nVidia GT820M-2GB, Screen 14", Dos', 5579000, 'Intel Core i3 4030U-1.9Ghz', '2', 'VGA nVidia GT820M-2GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 05:01:36', 'ASUS_PRO_P450LDV-WO316D_Black.jpg', 'ASUS_PRO_P450LDV-WO316D_Black.jpg', 'ASUS-PRO-P450LDV-WO316D', 1, 'ASU416D'),
(17, 4, 1, 'ASUS PRO P450LDV-WX0209', 'Good Quality & Material !!!\r\nIntel Core i5 4210U-1.7Ghz Turbo 2.7Ghz, RAM 4GB, HDD 1TB, DVD/RW, VGA nVidia GT820M-2GB, Screen 14", Dos', 7399000, 'Intel Core i5 4210U-1.7Ghz Turbo 2.7Ghz', '4', 'VGA nVidia GT820M-2GB', '14', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 05:19:33', 'ASUS_PRO_P450LDV-WX0209_Black.jpg', 'ASUS_PRO_P450LDV-WX0209_Black.jpg', 'ASUS-PRO-P450LDV-WX0209', 1, 'ASU4209'),
(18, 4, 1, 'ASUS PRO BU401LG-CZ058G', 'Good Quality & Material !!!\r\nIntel Core i5 4500U-1.8Ghz Turbo 3.0Ghz, RAM 8GB, HDD 256GB SSD, FingerPrint, VGA  nVidia GT730M-1GB, Screen 14" HD+, Windows 7 Professional with Win8Pro', 20399000, 'Intel Core i5 4500U-1.8Ghz Turbo 3.0Ghz', '8', 'VGA  nVidia GT730M-1GB', '14', 'Windows', 'SSD 256GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 05:19:51', 'ASUS_PRO_BU401LG-CZ058G_Black.jpg', 'ASUS_PRO_BU401LG-CZ058G_Black.jpg', 'ASUS-PRO-BU401LG-CZ058G', 1, 'ASU458G'),
(19, 4, 1, 'ASUS PRO PU451LD-WO150D', 'Good Quality & Material !!!\r\nIntel Core i7 4510U-2.0Ghz Turbo 3.1Ghz, RAM 4GB, HDD 1TB, DVD/RW, FingerPrint, VGA nVidia GT820M-1GB, Screen 14", Dos', 10199000, 'Intel Core i7 4510U-2.0Ghz Turbo 3.1Ghz', '4', 'VGA nVidia GT820M-1GB', '14', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 05:19:10', 'ASUS_PRO_PU451LD-WO150D_Black.jpg', 'ASUS_PRO_PU451LD-WO150D_Black.jpg', 'ASUS-PRO-PU451LD-WO150D', 1, 'ASU450D'),
(20, 4, 1, 'ASUS PRO BU401LA-CZ059G', 'Good Quality & Material !!!\r\nIntel Core i5 4200U-1.6Ghz Turbo 2.6Ghz, RAM 4GB, HDD 128GB SSD + 500GB, FingerPrint, VGA  nVidia GT730M-1GB, Screen 14" HD+, Windows 7 Professional with Win8Pro', 17799000, 'Intel Core i5 4200U-1.6Ghz Turbo 2.6Ghz', '4', 'VGA  nVidia GT730M-1GB', '14', 'Windows', 'HDD 128GB SSD + 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 05:21:07', 'ASUS_PRO_BU401LA-CZ059G_Black.jpg', 'ASUS_PRO_BU401LA-CZ059G_Black.jpg', 'ASUS-PRO-BU401LA-CZ059G', 1, 'ASU459G'),
(21, 4, 1, 'ASUS PRO B451JA-FA092G', 'Good Quality & Material !!!\r\nIntel Core i7 4610M-3.0Ghz Turbo 3.7Ghz, RAM 8GB, HDD 256GB SSD, DVD/RW, FingerPrint, VGA  Intel HD 4400, Screen 14" FHD, Windows 8 Professional', 18799000, 'Intel Core i7 4610M-3.0Ghz Turbo 3.7Ghz', '8', 'VGA Intel HD 4400????', '14', 'Windows', 'HDD 256GB SSD', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 05:52:45', 'ASUS_PRO_B451JA-FA092G_Black.jpg', 'ASUS_PRO_B451JA-FA092G_Black.jpg', 'ASUS-PRO-B451JA-FA092G', 1, 'ASU492G'),
(22, 1, 2, 'ACER ASPIRE E5-471G-381U', 'Best Buy with 2GB Graphics for Design !!!\r\nIntel Core i3 4005U-1.7Ghz, RAM 4GB, HDD 500GB, DVD/RW, VGA nVidia GT820M-2GB, Screen 14", Dos.', 5499000, 'Intel Core i3 4005U-1.7Ghz', '4', 'VGA nVidia GT820M-2GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 12:04:56', 'ACER_ASPIRE_E5-471G-381U_Piano_Black.jpg', 'ACER_ASPIRE_E5-471G-381U_Piano_Black.jpg', 'ACER-ASPIRE-E5-471G-381U', 1, 'ACE181U'),
(23, 1, 2, 'ACER ASPIRE E5-471G-3G5A', 'Acer menghadirkan laptop tipe basic untuk penggunaan sehari-hari dengan kinerja yang optimal namun dengan harga yang cukup terjangkau, ACER ASPIRE E5-471G-3G5A Black dengan bobotnya yang tidak terlalu berat yaitu 2.10kg, tentunya akan membuat aktivitas sehari-hari anda menjadi lebih produktif dan optimal. ACER ASPIRE E5-471G-3G5A Black merupakan pilihan yang cocok dipakai browsing di internet, berkirim email, chating, mendengarkan musik favorit anda hingga melakukan aktivitas komputasi ringan lainnya.\r\n\r\nSpesifikasi Laptop Basic ACER ASPIRE E5-471G-3G5A Black Yang Handal\r\nACER ASPIRE E5-471G-3G5A Black hadir dengan prosesor Intel Core i3 4030U dengan kecepatan 1.9 GHz, memori RAM 2GB dan kapasitas hardisk hingga 500GB. Laptop ACER ASPIRE E5-471G-3G5A Black memiiki layar berukuran 14 inci yang tentunya akan membuat anda semakin nyaman saat melakukan aktivitas komputasi ringan seperti chat maupun membaca dan berikirim email dengan keluarga, teman maupun rekan kerja anda. ', 5899000, 'Intel Core i3 4030U-1.9Ghz', '2', 'VGA nVidia GT820M-2GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 12:11:59', 'ACER_ASPIRE_E5-471G-3G5A_Black.jpg', 'ACER_ASPIRE_E5-471G-3G5A_Black.jpg', 'ACER-ASPIRE-E5-471G-3G5A', 1, 'ACE1G5A'),
(24, 1, 2, 'ACER ASPIRE E5-471-52M0', 'Dengan didesain casing berwarna black, laptop ACER ASPIRE E5-471-52M0, Piano Black ini sudah dibekali pula dengan layar yang berukuran sebesar 14 inc. Sistem operasi yang mendukung untuk bisa digunakan pada laptop acer type ini adalah os DOS. Sedangkan amunisi yang digunakan sebagai pemacu mesinnya supaya berjalan secara maksimal adalah prosessor intel core i5 4210U-1.7 GHZ yang memiliki kecepatan maksimal yang mampu ditempuhnya yaitu sebesar 2.7 Ghz. Masalah ruang penyimpananya sendiri, laptop ACER ASPIRE E5-471-52M0, Piano Black ini sudah dibekali dengan hardisk yang berkapasitas sebesar 500 GB, beserta RAM sebesar 2 GB. Bagian grafisnya sendiri, laptop ini juga sudah berbekal tekhnologi dari VGA intel HD 4400. Sehingga akan lebih nyaman lagi saat sedang digunakan, dengan layar atau gambar yang jernih dan bening. Sistem operasi yang mampu berjalan pada laptop ini adalah sistem opersi DOS.', 5899000, 'Intel Core i5 4210U-1.7Ghz Turbo 2.7Ghz', '2', 'VGA Intel HD 4400', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 12:17:56', 'ACER_ASPIRE_E5-471-52M0_Piano_Black.png', 'ACER_ASPIRE_E5-471-52M0_Piano_Black.png', 'ACER-ASPIRE-E5-471-52M0', 1, 'ACE12M0'),
(25, 1, 2, 'ACER ASPIRE E5-471G-503W', 'ACER ASPIRE E5-471G-503W Pearl White hadir dengan prosesor Intel Core i3 4030U dengan kecepatan 1.9 GHz, memori RAM 2GB dan kapasitas hardisk hingga 500GB. Laptop ACER ASPIRE E5-471G-503W Pearl White memiiki layar berukuran 14 inci yang tentunya akan membuat anda semakin nyaman saat melakukan aktivitas komputasi ringan seperti chat maupun membaca dan berikirim email dengan keluarga, teman maupun rekan kerja anda.\r\n \r\nTipe Grafis Dan Resolusi Layar Pada ACER ASPIRE E5-471G-503W Pearl White\r\n\r\nLaptop ACER ASPIRE E5-471G-503W Pearl White dibekali dengan grafis nVidia GT820M-2GB dan memiliki resolusi layar 1368 x 768 yang akan membuat pengalaman komputasi ringan anda menjadi lebih sempurna. Tidak lupa Acer membekali sistem audio Stereo speakers sehingga akan memanjakan anda dengan kualitas suara yang cukup handal.', 7099000, 'Intel Core i5 4210U-1.7Ghz Turbo 2.7Ghz', '4', 'VGA nVidia GT820M-2GB', '14', 'DOS', 'HDD 500GB', 'White', 10, '2015-06-27 14:30:03', '2015-06-28 12:19:57', 'ACER_ASPIRE_E5-471G-503W_Pearl_White.jpg', 'ACER_ASPIRE_E5-471G-503W_Pearl_White.jpg', 'ACER-ASPIRE-E5-471G-503W', 1, 'ACE103W'),
(26, 1, 2, 'ACER ASPIRE E5-471G-66FJ', 'ACER ASPIRE E5-471G-66FJ Black', 7099000, 'Intel Core i5 4210U-1.7Ghz Turbo 2.7Ghz', '4', 'VGA nVidia GT820M-2GB', '14', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-07-09 23:38:50', 'ACER_ASPIRE_E5-471G-66FJ_Black.jpg', 'ACER_ASPIRE_E5-471G-66FJ_Black.jpg', 'ACER-ASPIRE-E5-471G-66FJ', 1, 'ACE16FJ'),
(27, 1, 2, 'ACER ASPIRE E5-472G', 'New Arrival !!!\r\nIntel Core i7 4712MQ - 2.30GHz turbo 3.3GHz, RAM 4GB, HDD 1TB, VGA Nvidia GT 820M - 2GB, Screen 14", Dos', 9999000, 'Intel Core i7 4712MQ - 2.30GHz turbo 3.3GHz', '4', 'VGA nVidia GT820M-2GB', '14', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 12:24:15', 'ACER_ASPIRE_E5-472G.jpg', 'ACER_ASPIRE_E5-472G.jpg', 'ACER-ASPIRE-E5-472G', 1, 'ACE172G'),
(28, 2, 2, 'ACER ASPIRE ES1-111-CU5A', 'First with Fanless, Quiet Computing !!!\r\nIntel Celeron DualCore N2840-2.58Ghz, RAM 2GB, HDD 500GB. VGA Intel HD Graphics, Screen 11.6" , Windows 8.1-Bing', 3399000, 'Intel Celeron DualCore N2840-2.58Ghz', '2', 'VGA Intel HD Graphics', '11', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 12:24:01', 'ACER_ASPIRE_ES1-111-CU5A_Black.jpg', 'ACER_ASPIRE_ES1-111-CU5A_Black.jpg', 'ACER-ASPIRE-ES1-111-CU5A', 1, 'ACE2U5A'),
(29, 2, 2, 'ACER ASPIRE E3-112M-N2840', 'ACER ASPIRE E3-112M-N2840', 3499000, 'Intel Celeron DualCore N2840-2.58Ghz', '4', 'VGA Intel HD Graphics', '11', 'Windows', 'HDD 500GB', 'Silver', 10, '2015-06-27 14:30:03', '2015-06-28 12:26:37', 'ACER_ASPIRE_E3-112M-N2840_Silver.jpg', 'ACER_ASPIRE_E3-112M-N2840_Silver.jpg', 'ACER-ASPIRE-E3-112M-N2840', 1, 'ACE2840'),
(30, 2, 2, 'ACER ASPIRE EZ1401-320-Win8', 'Slim Model !!!\r\nIntel Celeron DualCore N2840-2.58Ghz, RAM 2GB, HDD 320GB. DVD/RW, VGA Intel HD Graphics, Screen 14", Windows 8.1-Bing', 3899000, 'Intel Celeron DualCore N2840-2.58Ghz', '2', 'VGA Intel HD Graphics', '14', 'Windows', 'HDD 320GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 12:27:35', 'ACER_ASPIRE_EZ1401-320-Win8_Black.jpg', 'ACER_ASPIRE_EZ1401-320-Win8_Black.jpg', 'ACER-ASPIRE-EZ1401-320-Win8', 1, 'ACE2IN8'),
(31, 2, 2, 'ACER ASPIRE E5-471-384R', 'Spesifikasi Laptop Basic ACER ASPIRE E5-471-384R White Yang Handal\r\nACER ASPIRE E5-471-384R White hadir dengan prosesor Intel Core i3-4005U dengan kecepatan 1.7Ghz, memori RAM 2GB dan kapasitas hardisk hingga 500GB. Laptop ACER ASPIRE E5-471-384R White memiiki layar berukuran 14 inci yang tentunya akan membuat anda semakin nyaman saat melakukan aktivitas komputasi ringan seperti chat maupun membaca dan berikirim email dengan keluarga, teman maupun rekan kerja anda.', 5199000, 'Intel Core i3 4005U-1.7Ghz', '2', 'VGA Intel HD 4400', '14', 'Linux', 'HDD 500GB', 'White', 10, '2015-06-27 14:30:03', '2015-06-28 12:32:59', 'ACER_ASPIRE_E5-471-384R_White.jpg', 'ACER_ASPIRE_E5-471-384R_White.jpg', 'ACER-ASPIRE-E5-471-384R', 1, 'ACE284R'),
(32, 2, 2, 'ACER ASPIRE E5-421-27R2', 'Spesifikasi Laptop Basic ACER ASPIRE E5-421-27R2 Black Yang Handal\r\nACER ASPIRE E5-421-27R2 Black hadir dengan prosesor AMD QuadCore E2 6110 dengan kecepatan 1.5 GHz, memori RAM 2GB dan kapasitas hardisk hingga 500GB. Laptop ACER ASPIRE E5-421-27R2 Black memiiki layar berukuran 14 inci yang tentunya akan membuat anda semakin nyaman saat melakukan aktivitas komputasi ringan seperti chat maupun membaca dan berikirim email dengan keluarga, teman maupun rekan kerja anda. ', 3799000, 'AMD QuadCore E2 6110-1.5Ghz', '2', 'VGA AMD RADEON TM R2', '14', 'Linux', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 12:33:33', 'ACER_ASPIRE_E5-421-27R2_Black.jpg', 'ACER_ASPIRE_E5-421-27R2_Black.jpg', 'ACER-ASPIRE-E5-421-27R2', 1, 'ACE27R2'),
(33, 2, 2, 'ACER ASPIRE V3-371-51EV', 'New Arrival !!!\r\nIntel Core i5 4210U-1.6Ghz, RAM 4GB, HDD 500GB, VGA Intel HD Graphics, Screen 13.3" LED, Dos.', 6699000, 'Intel Core i5 4210U-1.6Ghz', '4', 'VGA Intel HD Graphics', '13.3', 'Linux', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 12:34:48', 'ACER_ASPIRE_V3-371-51EV_Black.jpg', 'ACER_ASPIRE_V3-371-51EV_Black.jpg', 'ACER-ASPIRE-V3-371-51EV', 1, 'ACE21EV'),
(34, 3, 2, 'ACER ASPIRE E5-551', 'New Arrival !!!\r\nAMD QuadCore A10-7300 1.9GHz turbo 3.2GHz, RAM 4GB, HDD 1TB, VGA AMD Radeon R7 M265-2GB, Screen 15.6", Dos', 7299000, 'AMD QuadCore A10-7300 1.9GHz turbo 3.2GHz', '4', 'VGA AMD Radeon R7 M265-2GB', '15.6', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 13:37:49', 'ACER_ASPIRE_E5-551.jpg', 'ACER_ASPIRE_E5-551.jpg', 'ACER-ASPIRE-E5-551', 1, 'ACE3551'),
(35, 3, 2, 'ACER ASPIRE E5-572G', 'New Arrival !!!\r\nIntel Core i7 4712MQ - 2.30GHz turbo 3.3 GHz, RAM 8GB, HDD 1TB, VGA Nvidia GT 840M - 2GB, Screen 15.6" FHD, Dos', 12299000, 'Intel Core i7 4712MQ - 2.30GHz turbo 3.3 GHz', '4', 'VGA Nvidia GT 840M - 2GB', '15.6', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-06-28 13:38:36', 'ACER_ASPIRE_E5-572G.jpg', 'ACER_ASPIRE_E5-572G.jpg', 'ACER-ASPIRE-E5-572G', 1, 'ACE372G'),
(36, 1, 3, 'TOSHIBA Satellite L40D-B002', 'Slim Design QuadCore Processors !!!\r\nAMD QuadCore A6 6310-1.8Ghz Turbo 2.4Ghz, RAM 2GB, HDD 750GB, no DVD, VGA AMD RADEON R4, Screen 14" , Windows 8.1', 5499000, 'AMD QuadCore A6 6310-1.8Ghz Turbo 2.4Ghz', '2', 'VGA AMD RADEON R4', '14', 'Windows', 'HDD 750GB', 'White', 10, '2015-06-27 14:30:03', '2015-06-28 13:39:32', 'TOSHIBA_Satellite_L40D-B002_White.jpg', 'TOSHIBA_Satellite_L40D-B002_White.jpg', 'TOSHIBA-Satellite-L40D-B002', 1, 'TOS1002'),
(37, 1, 3, 'TOSHIBA Satellite L40D-AS101B', 'QuadCore Processors.\r\nAMD QuadCore A8 5545M-1.7Ghz Turbo 2.7Ghz, RAM 4GB, HDD 500GB, DVD±RW , VGA AMD RADEON HD 8510G, Screen 14", Dos', 5499000, 'AMD QuadCore A8 5545M-1.7Ghz Turbo 2.7Ghz', '4', 'VGA AMD RADEON HD 8510G', '14', 'DOS', 'HDD 500GB', 'Blue', 10, '2015-06-27 14:30:03', '2015-06-28 13:41:42', 'TOSHIBA_Satellite_L40D-AS101B_Blue.jpg', 'TOSHIBA_Satellite_L40D-AS101B_Blue.jpg', 'TOSHIBA-Satellite-L40D-AS101B', 1, 'TOS101B'),
(38, 1, 3, 'TOSHIBA Satellite C55D-B5206', 'The 15.6” Satellite® C50 laptop series offers everything a budget-conscious user could ask for—basic power, portability and performance—all at a great price. This PC series comes with all the laptop essentials and is great for web browsing, socializing, emailing, entertainment and multitasking. ', 5599000, 'AMD QuadCore A8 6410-2.0Ghz Turbo 2.4Ghz', '4', 'VGA AMD RADEON R5', '15.6', 'Windows', 'HDD 750GB', 'Black', 10, '2015-06-27 14:30:03', '2015-07-09 12:23:26', 'satellite-C55D-B5206-600-01.jpg', 'satellite-C55D-B5206-600-01.jpg', 'TOSHIBA-Satellite-C55D-B5206', 1, 'TOS1206'),
(39, 1, 3, 'TOSHIBA Satellite C55D-B5214', 'Ideal for Home & Office with 15" Display !!!\r\nAMD QuadCore A8 6410-2.0Ghz Turbo 2.4Ghz, RAM 2GB, HDD 1TB, DVD/RW, VGA AMD RADEON R5, Screen 15" , Windows 8.1\r\nMore Speed with QuadCore Processors ', 5699000, 'AMD QuadCore A8 6410-2.0Ghz Turbo 2.4Ghz', '2', 'VGA AMD RADEON R5', '15.6', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-07-09 12:23:55', 'toshiba-satellite-c55d-b5214-black.jpg', 'toshiba-satellite-c55d-b5214-black.jpg', 'TOSHIBA-Satellite-C55D-B5214', 1, 'TOS1214'),
(40, 1, 3, 'TOSHIBA Satellite C55-B5272', 'Maximum Speed for Mulitasking !!!\r\n\r\nIntel Core i3 3217U-1.8GHz, RAM 2 GB, HDD 750GB, DVD/RW, VGA Intel HD 4000, Screen 15.6", Windows 7 Home Premium', 5599000, 'Intel Core i3 3217U-1.8GHz', '2', 'VGA Intel HD 4000', '15.6', 'Windows', 'HDD 750GB', 'Black', 10, '2015-06-27 14:30:03', '2015-07-09 12:25:10', 'toshiba-satellite-c55-b5272-black.jpg', 'toshiba-satellite-c55-b5272-black.jpg', 'TOSHIBA-Satellite-C55-B5272', 1, 'TOS1272'),
(41, 1, 3, 'TOSHIBA Satellite L40-4200U', 'TOSHIBA Satellite L40-4200U Grey\r\nSlim Design !!!\r\nIntel Core Ghz Turbo 2.6Ghz, RAM 4GB, HDD 500GB, DVD/RW, VGA AMD RADEON R7 M260-2GB, Screen 14", Dos.', 7799000, 'Intel Core i5 4200U-1.6Ghz Turbo 2.6Ghz', '4', 'VGA AMD RADEON R7 M260-2GB', '14', 'DOS', 'HDD 500GB', 'Grey', 10, '2015-06-27 14:30:03', '2015-08-02 17:46:23', 'TOSHIBA_Satellite_L40-4200U_Grey.jpg', 'TOSHIBA_Satellite_L40-4200U_Grey.jpg', 'TOSHIBA-Satellite-L40-4200U', 1, 'TOS100U'),
(42, 1, 3, 'TOSHIBA Satellite L50-B208BX', 'Movie buff, social networker, web surfer, instant messenger or photographer. Whoever you are, you will always be highly entertained by a Satellite L50-A laptop. It&#039;s so slim and stylish, you will want to take it everywhere. And you can. While Intel® or AMD processors* deliver a smooth, speedy experience, the latest AMD or NVIDIA® graphics* will bring you a better graphics experience, wherever you go. So your movies, games and web pages are always right there, when you need them. All with the rich depth of DTS® Sound™ and in stunning definition on the 15.6" HD widescreen display. And because some models also feature a 10-point touchscreen*, it&#039;s really easy to access your documents and web pages too.', 7999000, 'Intel Core i5 4210U-1.7Ghz Turbo 2.7Ghz', '4', 'VGA AMD RADEON R7 M260-2GB', '15.6', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 17:49:46', 'TOSHIBA_Satellite_L50-B208BX_Black.jpg', 'TOSHIBA_Satellite_L50-B208BX_Black.jpg', 'TOSHIBA-Satellite-L50-B208BX', 1, 'TOS18BX'),
(43, 1, 3, 'TOSHIBA Satellite C55-A5195', 'TOSHIBA Satellite C55-A5195 Silver', 7499000, 'Intel Core i7 3517U-1.9GHz Turbo 3.0Ghz', '2', 'VGA Intel HD 4000', '15.6', 'Windows', 'HDD 1TB', 'Silver', 10, '2015-06-27 14:30:03', '2015-08-02 17:57:24', 'TOSHIBA_Satellite_C55-A5195_Silver.jpg', 'TOSHIBA_Satellite_C55-A5195_Silver.jpg', 'TOSHIBA-Satellite-C55-A5195', 1, 'TOS1195'),
(44, 1, 3, 'TOSHIBA Satellite C55T-A5394', 'The 15.6" Satellite C55t-A5394 laptop computer offers everything a budget-conscious user could ask for-basic power, portability and performance-all at a great price. This PC comes with all the laptop essentials and is great for web browsing, socializing, emailing, entertainment and multitasking.', 7899000, 'Intel Core i7 3517U-1.9GHz Turbo 3.0Ghz', '4', 'VGA Intel HD 4000', '15.6', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 18:24:11', 'TOSHIBA_Satellite_C55T-A5394_Black.jpg', 'TOSHIBA_Satellite_C55T-A5394_Black.jpg', 'TOSHIBA-Satellite-C55T-A5394', 1, 'TOS1394'),
(45, 2, 3, 'TOSHIBA Satellite C40D-B204', 'TOSHIBA Satellite C40D-B204', 5299450, 'AMD DualCore E1 6010-1.35Ghz', '2', 'VGA AMD RADEON R2', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 18:41:01', 'TOSHIBA_Satellite_C40D-B204.jpg', 'TOSHIBA_Satellite_C40D-B204.jpg', 'TOSHIBA-Satellite-C40D-B204', 1, 'TOS2204'),
(46, 2, 3, 'TOSHIBA Satellite C40D-A106', 'Toshiba Satellite C40D, notebook yang ideal untuk memenuhi kebutuhan komputasi dan multimedia Anda. Dikemas dengan desain yang kompak dan stylish, laptop ini begitu portabel untuk Anda bawa ketika beraktivitas. Dibekali dengan prosesor 3rd Gen AMD Quad Core dan dilengkapi dengan berbagai teknologi terkini dari Toshiba seperti Toshiba HDD Accelerator, PC Health Monitor, dan Split Screen Utility, rasakan kemudahan dalam melakukan berbagai pekerjaan komputasi.\r\n', 4499000, 'AMD QuadCore A4 5000-1.5Ghz', '2', 'VGA AMD HD8330', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 18:44:02', 'TOSHIBA_Satellite_C40D-A106.jpg', 'TOSHIBA_Satellite_C40D-A106.jpg', 'TOSHIBA-Satellite-C40D-A106', 1, 'TOS2106'),
(47, 2, 3, 'TOSHIBA Satellite NB10-AS100', 'TOSHIBA menghadirkan laptop tipe basic untuk penggunaan sehari-hari dengan kinerja yang optimal namun dengan harga yang cukup terjangkau, TOSHIBA Satellite NB10-A109 Black dengan bobotnya yang tidak terlalu berat yaitu 1.3 kg, tentunya akan membuat aktivitas sehari-hari anda menjadi lebih produktif dan optimal. TOSHIBA Satellite NB10-A109 Black merupakan pilihan yang cocok dipakai browsing di internet, berkirim email, melakukan chating, mendengarkan musik favorit anda hingga melakukan aktivitas komputasi ringan lainnya.', 6599000, 'Intel Celeron DualCore N2830-2.41Ghz', '2', 'VGA Intel HD Graphics', '11', 'Windows', 'HDD 500GB', 'Black', 0, '2015-06-27 14:30:03', '2015-08-02 18:48:11', 'TOSHIBA_Satellite_NB10-AS100_Black.jpg', 'TOSHIBA_Satellite_NB10-AS100_Black.jpg', 'TOSHIBA-Satellite-NB10-AS100', 1, 'TOS2100'),
(48, 2, 3, 'TOSHIBA Satellite C40-B203E', 'Intel Celeron DualCore N2830-2.16Ghz, RAM 2GB, HDD 500GB, VGA Intel HD Graphics, Screen 14" LED, Dos.', 4599000, 'Intel Celeron DualCore N2830-2.41Ghz', '2', 'VGA Intel HD Graphics', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 18:53:30', 'TOSHIBA_Satellite_C40-B203E_Black.jpg', 'TOSHIBA_Satellite_C40-B203E_Black.jpg', 'TOSHIBA-Satellite-C40-B203E', 1, 'TOS203E'),
(49, 2, 3, 'TOSHIBA Satellite C55T-B5230', 'The 15.6" Satellite C50 laptop series offers everything a budget-conscious user could ask for--basic power, portability and performance--all at a great price. This PC series comes with all the laptop essentials and is great for web browsing, socializing, emailing, entertainment and multitasking.', 4599000, 'Intel DualCore N2830-2.41Ghz', '4', 'VGA Intel HD Graphics', '15.6', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 18:56:57', 'TOSHIBA_Satellite_C55T-B5230_Black.jpg', 'TOSHIBA_Satellite_C55T-B5230_Black.jpg', 'TOSHIBA-Satellite-C55T-B5230', 1, 'TOS2230'),
(50, 2, 3, 'TOSHIBA Satellite C40-AT02B1', 'Toshiba memiliki beberapa seri laptop yang cukup menarik dengan spesifikasi yang bervariasi. Salah satunya adalah seri laptop Satellite C40 yang menjadi salah satu laptop dari Toshiba dengan spesifikasi terjangkau untuk para konsumen. Laptop ini sendiri mempunyai desain yang menarik dengan mengedepankan konsep minimalis dengan bentuk lebih ramping dibanding generasi lawas dari Satellite C40.\r\n\r\nSatellite seri C40 ini memang menjadi salah satu seri terbaru Toshiba yang memiliki kehalusan desain yang menampilan bentuk bulat dan pipih dengan tampilan tombol yang bertenaga. Seri laptop Satellite C40 menayjikan 2 varian layar dengan ukuran 14.0” dan 15.6” yang menampilan kualitas HD. Dan untuk seri Satellite C40-AT02B1 ini menggunaka layar 14 inch.', 5799000, 'Intel Core i3 3120M-2.5Ghz', '2', 'VGA nVidia GT710M-1GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 18:58:55', 'TOSHIBA_Satellite_C40-AT02B1_Black.jpg', 'TOSHIBA_Satellite_C40-AT02B1_Black.jpg', 'TOSHIBA-Satellite-C40-AT02B1', 1, 'TOS22B1'),
(51, 2, 3, 'TOSHIBA Satellite C50-3217U', 'Ideal for Home & Office with 15" Display  !!!\r\nIntel Core i3 3217U-1.8Ghz, RAM 4GB, HDD 500GB, DVD/RW, VGA Intel HD 4000, Screen 15.6", Dos', 5099000, 'Intel Core i3 3217U-1.8Ghz', '4', 'VGA Intel HD 4000', '15.6', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 19:01:17', 'TOSHIBA_Satellite_C50-3217U_Black.jpg', 'TOSHIBA_Satellite_C50-3217U_Black.jpg', 'TOSHIBA-Satellite-C50-3217U', 1, 'TOS217U'),
(52, 2, 3, 'TOSHIBA Satellite L55-B5267', 'Ideal for Home & Office with 15" Display !!! \r\nIntel Core i3 4025U-1.9Ghz, RAM 2GB, HDD 750GB, DVD/RW, VGA Intel HD 4000, Screen 15.6", Windows 8.1\r\nSlim Design with Skullcandy Speaker ', 5799000, 'Intel Core i3 4025U-1.9Ghz', '2', 'VGA Intel HD 4000', '15.6', 'Windows', 'HDD 750GB', 'Gold', 10, '2015-06-27 14:30:03', '2015-08-02 19:06:53', 'TOSHIBA_Satellite_L55-B5267_Satin_Gold.jpg', 'TOSHIBA_Satellite_L55-B5267_Satin_Gold.jpg', 'TOSHIBA-Satellite-L55-B5267', 1, 'TOS2267'),
(53, 2, 3, 'TOSHIBA Satellite L55T-B5271', 'Ideal for Home & Office with 15" Display !!! \r\nIntel Core i3 4025U-1.9Ghz, RAM 2GB, HDD 1TB, DVD/RW, VGA Intel HD 4000, Screen 15.6", Windows 8.1\r\nSlim Design with Skullcandy Speaker ', 6299000, 'Intel Core i3 4025U-1.9Ghz', '2', 'VGA Intel HD 4000', '15.6', 'Windows', 'HDD 1TB', 'Gold', 10, '2015-06-27 14:30:03', '2015-08-02 19:08:27', 'TOSHIBA_Satellite_L55T-B5271_Satin_Gold.jpg', 'TOSHIBA_Satellite_L55T-B5271_Satin_Gold.jpg', 'TOSHIBA-Satellite-L55T-B5271', 1, 'TOS2271'),
(54, 2, 3, 'TOSHIBA Satellite C40-A108', 'Price After CashBack US 15,-\r\nIntel Core i5 3230-2.6Ghz Turbo 3.2Ghz, RAM 2GB, HDD 500GB, DVD/RW, VGA Intel HD 4000, Screen 14" LED, Dos.\r\nColor: Black.', 6885000, 'Intel Core i5 3230M-2.6Ghz Turbo 3.2Ghz', '2', 'VGA Intel HD 4000', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 19:09:21', 'TOSHIBA_Satellite_C40-A108_Black.jpg', 'TOSHIBA_Satellite_C40-A108_Black.jpg', 'TOSHIBA-Satellite-C40-A108', 1, 'TOS2108'),
(55, 2, 3, 'TOSHIBA Satellite L40-AS106G', 'Intel Core i5 3337U-1.8Ghz Turbo 2.7Ghz, RAM 4GB, HDD 500GB, DVD/RW, VGA Intel HD 4000, Screen 14", Dos.', 6699000, 'Intel Core i5 3337U-1.8Ghz Turbo 2.7Ghz', '4', 'VGA Intel HD 4000', '14', 'DOS', 'HDD 500GB', 'Gold', 10, '2015-06-27 14:30:03', '2015-08-02 19:10:39', 'TOSHIBA_Satellite_L40-AS106G_Gold.jpg', 'TOSHIBA_Satellite_L40-AS106G_Gold.jpg', 'TOSHIBA-Satellite-L40-AS106G', 1, 'TOS206G'),
(56, 3, 3, 'TOSHIBA Qosmio X75-A7295', 'SUPER GAMING LAPTOP !!!\r\nIntel Core i7 4700MQ-2.1Ghz Turbo 3.3Ghz, RAM 16GB, HDD 1TB, Bluray, VGA nVidia GTX770-3GB, Screen 17.3", Windows 8\r\nFREE : Mouse GAMING REXUS R5', 17599000, 'Intel Core i7 4700MQ-2.1Ghz Turbo 3.3Ghz', '16', 'VGA nVidia GTX770-3GB', '17.3', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 19:12:56', 'TOSHIBA_Qosmio_X75-A7295_Black-Red.jpg', 'TOSHIBA_Qosmio_X75-A7295_Black-Red.jpg', 'TOSHIBA-Qosmio-X75-A7295', 1, 'TOS3295'),
(57, 1, 4, 'LENOVO IdeaPad Z40-75-PID', 'New Arrival !!! \r\nAMD QuadCore A10 7300M-2.5Ghz Turbo 3.5Ghz, RAM 4GB, HDD 1TB, VGA AMD RADEON R5  M255-2GB, Screen 14" LED, Dos.\r\nFree Games : https://www.amd4u.com/gamepromo/', 6679000, 'AMD QuadCore A10 7300M-2.5Ghz Turbo 3.5Ghz', '4', 'VGA AMD R5 M230-2GB', '14', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 19:16:18', 'LENOVO_IdeaPad_Z40-75-PID_Black.jpg', 'LENOVO_IdeaPad_Z40-75-PID_Black.jpg', 'LENOVO-IdeaPad-Z40-75-PID', 1, 'LEN1PID'),
(58, 1, 4, 'LENOVO IdeaPad Z40-70-6173', 'New Arrival !!! \r\nIntel Core i5 4210U-1.7Ghz, RAM 4GB, HDD 500GB, DVD/RW, VGA nVidia GT820-2GB, Screen 14" LED FHD, Dos.\r\nWarranty 2 (Two) Years.', 7179000, 'Intel Core i5 4210U-1.7Ghz', '4', 'VGA nVidia GT820-2GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 19:19:55', 'LENOVO_IdeaPad_Z40-70-6173_Black.jpg', 'LENOVO_IdeaPad_Z40-70-6173_Black.jpg', 'LENOVO-IdeaPad-Z40-70-6173', 1, 'LEN1173'),
(59, 1, 4, 'LENOVO IdeaPad G40-70-7699', 'New Slim Model !!!\r\nIntel Core i5 4210U-1.7Ghz  Turbo 2.7Ghz, RAM 4GB, HDD 500GB, DVD/RW, VGA AMD R5 M230-2GB, Screen 14", Dos.', 6699000, 'Intel Core i5 4210U-1.7Ghz  Turbo 2.7Ghz', '4', 'VGA AMD R5 M230-2GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 19:21:34', 'LENOVO_IdeaPad_G40-70-7699_Black.jpg', 'LENOVO_IdeaPad_G40-70-7699_Black.jpg', 'LENOVO-IdeaPad-G40-70-7699', 1, 'LEN1699'),
(60, 1, 4, 'LENOVO IdeaPad G40-70-4430', 'NEW ARRIVAL !!!\r\nIntel Core i7 4510U-2.0Ghz Turbo 3.1Ghz, RAM 4GB, HDD 1TB, DVD/RW, VGA AMD RADEON R5 M230-2GB, Screen 14", Dos', 7999000, 'Intel Core i7 4510U-2.0Ghz Turbo 3.0Ghz', '4', 'VGA AMD R5 M230-2GB', '14', 'DOS', 'HDD 1TB', 'Silver', 10, '2015-06-27 14:30:03', '2015-08-02 19:27:06', 'LENOVO_IdeaPad_G40-70-4430_Silver.jpg', 'LENOVO_IdeaPad_G40-70-4430_Silver.jpg', 'LENOVO-IdeaPad-G40-70-4430', 1, 'LEN1430'),
(61, 1, 4, 'LENOVO IdeaPad Z50-70-5511', 'The case of the Z50-70 is completely black, mainly made of plastic, and it has a futuristic and angular design. The slightly brighter display cover is matte and shimmery, the top of the base unit has a brushed metal finish that attracts fingerprints. The display frame is glossy; the bottom has a knobbed pattern to improve grip.\r\n\r\nYou don&#039;t need a whole lot of force to twist the base unit, which results in inconvenient creaking sounds. The same applies for the flexible display, push on the back and you can see picture distortions at some spots. The hinge keeps the display well in position and just slightly bounces during sudden movements, for example, in a car or on a train ride. We could not see any obvious build quality flaws like protruding edges or uneven gaps, only the maintenance cover was not perfectly integrated (also see Maintenance section).', 9999000, 'Intel Core i7 4510U-2.0Ghz Turbo 3.0Ghz', '8', 'VGA nVidia GT40-4GB', '15', 'Windows', 'HDD 1TB', 'White', 10, '2015-06-27 14:30:03', '2015-08-02 19:29:40', 'LENOVO_IdeaPad_Z50-70-5511.jpg', 'LENOVO_IdeaPad_Z50-70-5511.jpg', 'LENOVO-IdeaPad-Z50-70-5511', 1, 'LEN1511'),
(62, 2, 4, 'LENOVO IdeaPad G40-45-BID', 'New Slim Model  !!!\r\nAMD DualCore E1 6010-1.35Ghz Turbo 2.4Ghz, RAM 2GB, HDD 500GB, DVD/RW, AMD RADEON R2, Screen 14", Windows 8.1-Bing', 3599000, 'AMD DualCore E1 6010-1.35Ghz Turbo 2.4Ghz?', '2', 'AMD RADEON R2', '14', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 19:31:25', 'LENOVO_IdeaPad_G40-45-BID.jpg', 'LENOVO_IdeaPad_G40-45-BID.jpg', 'LENOVO-IdeaPad-G40-45-BID', 1, 'LEN2BID'),
(63, 2, 4, 'LENOVO IdeaPad G40-45-SID', 'New Slim Model !!!\r\nAMD A8 6410-2.0Ghz Turbo 2.4Ghz, RAM 4GB, HDD 500GB, DVD/RW, VGA AMD RADEON R5 M23, Screen 14" LED, Dos.', 4899000, 'AMD QuadCore A8 6410-2.0Ghz Turbo 2.4Ghz?', '4', 'VGA AMD RADEON R5 M230-2GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 19:32:50', 'LENOVO_IdeaPad_G40-45-SID.jpg', 'LENOVO_IdeaPad_G40-45-SID.jpg', 'LENOVO-IdeaPad-G40-45-SID', 1, 'LEN2SID'),
(64, 2, 4, 'LENOVO IdeaPad G40-30-WID', 'Di desain dengan minimalis serta dengan sentuhan tekstur hitam membuat Lenovo IdeaPad G40-30 tampil cantik nan anggun. Dengan bobot laptop sekitar 2.1 Kg membuat laptop ini cocok dibawa kemanapun Anda bepergian. Memiliki desain keyboard dengan formula terbaru yakni “Keyboard AccuType” membuat Anda semakin mudah dalam urusan ketik-mengetik. Karena keyboard tersebut memiliki bentuk yang ergonomis yang disesuaikan dengan jari-jemari manusia, sehingga Anda akan lebih mudah dan cepat dalam mengetik sebuah artikel yang panjang.', 3399000, 'Intel Celeron DualCore N2830-2.41Ghz', '2', 'VGA Intel HD Graphics', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 19:37:26', 'LENOVO_IdeaPad_G40-30-WID.jpg', 'LENOVO_IdeaPad_G40-30-WID.jpg', 'LENOVO-IdeaPad-G40-30-WID', 1, 'LEN2WID'),
(65, 2, 4, 'LENOVO IdeaPad G40-70-2218', 'New Slim Model !!!\r\nIntel Core i3 4030U-1.9Ghz, RAM 2GB, HDD 500GB, DVD/RW, VGA Intel HD 4400, Screen 14", Dos.', 4799000, 'Intel Core i3 4030U-1.9Ghz?', '2', 'VGA Integrated Graphics', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-02 19:41:36', 'LENOVO_IdeaPad_G40-70-2218_Black.jpg', 'LENOVO_IdeaPad_G40-70-2218_Black.jpg', 'LENOVO-IdeaPad-G40-70-2218', 1, 'LEN2218'),
(66, 2, 4, 'LENOVO IdeaPad G40-70-2220', 'New Slim Model !!!\r\nIntel Core i3 4030U-1.9Ghz, RAM 2GB, HDD 500GB, DVD/RW, VGA AMD RADEON R5 M230-2GB, Screen 14" LED, Dos.', 5199000, 'Intel Core i3 4030U-1.9Ghz?', '2', 'VGA AMD RADEON R5 M230-2GB', '14', 'DOS', 'HDD 500GB', 'Silver', 10, '2015-06-27 14:30:03', '2015-08-02 19:42:53', 'LENOVO_IdeaPad_G40-70-2220_Silver.jpg', 'LENOVO_IdeaPad_G40-70-2220_Silver.jpg', 'LENOVO-IdeaPad-G40-70-2220', 1, 'LEN2220'),
(67, 2, 4, 'LENOVO Ideapad Z40-70-6180', 'NEW ARRIVAL  !!!\r\nIntel Core i3 4030U-1.9Ghz, RAM 4GB, HDD 500GB, DVD/RW, VGA nVidia GT 820M-2GB, Screen 14" LED, Dos.', 5999000, 'Intel Core i3 4030U-1.9Ghz?', '4', 'VGA nVidia GT 820M-2GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 00:35:46', 'LENOVO_Ideapad_Z40-70-6180_Black.jpg', 'LENOVO_Ideapad_Z40-70-6180_Black.jpg', 'LENOVO-Ideapad-Z40-70-6180', 1, 'LEN2180'),
(68, 2, 4, 'LENOVO IdeaPad S410-2199', 'LENOVO IdeaPad S410-2199 Black\r\nIntel Core i5 4200U-1.6Ghz Turbo 2.6Ghz, RAM 4GB, HDD 500GB, DVD/RW, VGA AMD HD8570-1GB, Screen 14", Windows 8.1', 6699000, 'Intel Core i5 4200U-1.6Ghz  Turbo 2.6Ghz?', '4', 'VGA AMD HD8570-1GB', '14', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 00:38:50', 'LENOVO_IdeaPad_S410-2199_Black.jpg', 'LENOVO_IdeaPad_S410-2199_Black.jpg', 'LENOVO-IdeaPad-S410-2199', 1, 'LEN2199'),
(69, 2, 4, 'LENOVO IdeaPad G40-30-QID', 'New Slim Model !!!\r\nIntel QuadCore N3450-2.0Ghz, RAM 2GB, HDD 500GB, DVD/RW, Intel HD Graphics, Screen 14", Windows 8.1-Bing', 4099000, 'Intel QuadCore N3450-2.0Ghz?', '2', 'VGA Intel HD Graphics', '14', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 00:40:15', 'LENOVO_IdeaPad_G40-30-QID.jpg', 'LENOVO_IdeaPad_G40-30-QID.jpg', 'LENOVO-IdeaPad-G40-30-QID', 1, 'LEN2QID'),
(70, 2, 4, 'LENOVO IdeaPad U430P-4500U-8GB', 'Weighs Less Than 5 lbs; Less Than 1" ThickWhether you&#039;re on the road, at the café, or on the way to class, at just 1.89kg (4.17 lbs) and 20.8mm (0.82") thick, the U430 Touch won&#039;t weigh you down.10-Point Multitouch DisplayInteract with your U430 Touch by using simple, intuitive gestures directly on the 14" 10-point multitouch display – which allows all ten fingers to accurately engage with the screen at the same time.Voice ControlChoose a model with voice control to perform tasks on your U430 Touch by simply telling it what to do or asking a question.Lenovo Motion ControlUse the webcam as an input device. Effortlessly flip pages, rewind/forward music, change volume, and gesture other simple commands with the flick of a hand – without even touching the screen.', 8699000, 'Intel Core i7 4500U-1.8Ghz  Turbo 3.0Ghz?', '8', 'VGA Intel HD Graphics', '14', 'Windows', 'HDD 500GB', 'Grey', 10, '2015-06-27 14:30:03', '2015-08-03 00:42:20', 'LENOVO_IdeaPad_U430P-4500U-8GB_Grey.jpg', 'LENOVO_IdeaPad_U430P-4500U-8GB_Grey.jpg', 'LENOVO-IdeaPad-U430P-4500U-8GB', 1, 'LEN28GB'),
(71, 2, 4, 'LENOVO IdeaPad U430P-4510U-4GB', 'Lenovo offers a wide variety of ultrabooks. There are 13-, 14- and 15-inch devices, although not all of them meet Intel&#039;s requirements in regard to the weight or dimensions respectively. This is not a problem for the customer as long as the higher weight results in a sturdy and high-quality device. The latter is realized by the aluminum finish of the display cover, base unit and interior. We already liked the solid construction of the U400 and U410, but the completely redesigned case is even better. ', 8499000, 'Intel Core i7 4510U-2.0Ghz  Turbo 3.1Ghz', '4', 'VGA Intel HD Graphics', '14', 'Windows', 'HDD 500GB', 'Red', 10, '2015-06-27 14:30:03', '2015-08-03 00:44:10', 'LENOVO_IdeaPad_U430P-4510U-4GB_Red.jpg', 'LENOVO_IdeaPad_U430P-4510U-4GB_Red.jpg', 'LENOVO-IdeaPad-U430P-4510U-4GB', 1, 'LEN24GB'),
(72, 3, 4, 'LENOVO IdeaPad Y40-80-5200U', 'NEW Generation Processors with 4GB Graphics !!!\r\nIntel Core i5 5200U-2.2Ghz Turbo 2.7Ghz, RAM 8GB, HDD 1TB, VGA AMD RADEON R9 M275-4GB, Screen 14" FHD , Windows 8.1', 12899000, 'Intel Core i5 5200U-2.0Ghz Turbo 3.5Ghz', '8', 'VGA AMD RADEON R9 M275-4GB', '14', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 00:45:15', 'LENOVO_IdeaPad_Y40-80-5200U_Black.jpg', 'LENOVO_IdeaPad_Y40-80-5200U_Black.jpg', 'LENOVO-IdeaPad-Y40-80-5200U', 1, 'LEN300U'),
(73, 3, 4, 'LENOVO IdeaPad Y510-9485', 'The Lenovo IdeaPad Y510 notebook PC? your new home and home office entertainment center that makes your ideas come to life. This elegant and versatile notebooks packs a lot of power and performance in a small, highly mobile package. This masterful 6.4-pound PC features a 15.4-inch display, an Intel Core 2 Duo 1.66GHz processor, a 160GB Hard drive, and 2GB of DDR2 memory, and a Dual Layer DVD Recordable optical drive -- all running on the Windows Vista Home Premium operating system. This Lenovo IdeaPad Y510 boasts Dolby Home Theater premium audio with four speakers and a sub-woofer, Multimedia Control Center to give you a one-stop total entertainment environment with a convenient Shuttle Key that puts volume and equalizer controls with easy reach.', 10999000, 'Intel Core i7 4700HQ-2.4Ghz Turbo 3.4Ghz', '8', 'VGA nVidia GT750M-2GB x Duak SLi', '15.6', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 00:48:39', 'LENOVO_IdeaPad_Y510-9485_Black.jpg', 'LENOVO_IdeaPad_Y510-9485_Black.jpg', 'LENOVO-IdeaPad-Y510-9485', 1, 'LEN3485'),
(74, 3, 4, 'LENOVO IdeaPad Y70-70-20ID', 'High Performance Gaming Laptop with New 4GB Graphics!!!\r\nIntel Core i7 4710HQ-2.5Ghz Turbo 3.5Ghz, RAM 16GB, HDD 1TB, VGA nVidia GTX860M-4GB, Screen 17.3" FHD Touch, Windows 8.1\r\nBacklit KeyBoard, JBL Speakers\r\nFREE : DVD/RW External', 19799000, 'Intel Core i7 4710HQ-2.5Ghz Turbo 3.5Ghz', '16', 'VGA nVidia GTX860M-4GB', '17.3', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:06:07', 'LENOVO_IdeaPad_Y70-70-20ID_Black.jpg', 'LENOVO_IdeaPad_Y70-70-20ID_Black.jpg', 'LENOVO-IdeaPad-Y70-70-20ID', 1, 'LEN30ID'),
(75, 4, 4, 'LENOVO IdeaPad B475-1704 PROCOM', 'LENOVO IdeaPad B475-1704 PROCOM Black', 3699000, 'AMD QuadCore A6 3400-1.4Ghz Turbo 2.3Ghz', '2', 'VGA AMD 6480G?', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:17:32', 'LENOVO_IdeaPad_B475-1704_PROCOM_Black.jpg', 'LENOVO_IdeaPad_B475-1704_PROCOM_Black.jpg', 'LENOVO-IdeaPad-B475-1704-PROCOM', 1, 'LEN4COM'),
(76, 4, 4, 'LENOVO ThinkPad E445-5IA', 'Notebook LENOVO ThinkPad E445-5IA\r\nAMD A8 5550-2.1 Turbo 3.1?GHz, RAM 4GB, HDD 500GB, VGA AMD HD8570M-1GB?, Screen 14" LED, Dos.?', 5999000, 'AMD QuadCore A8 5550-2.1Ghz Turbo 3.1?GHz', '4', 'VGA AMD RADEON HD8570M-1GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:19:08', 'LENOVO_ThinkPad_E445-5IA_Black.jpg', 'LENOVO_ThinkPad_E445-5IA_Black.jpg', 'LENOVO-ThinkPad-E445-5IA', 1, 'LEN45IA'),
(77, 4, 4, 'LENOVO ThinkPad E440-U02', 'Laptop Lenovo Edge E440-U02 merupakan notebook keluaran lenovo dengan processor core i3 dipadukan dengan Ram 4GB dan Harddisk sebesar 1 TB sebagai media penyimpanannya. - See more at: http://www.laptopmurah.net/lenovo-edge-e440-u02/#sthash.XTpEJGfU.dpuf', 6299000, 'Intel Core i3 4000M-2.6Ghz', '4', 'VGA Intel HD 4600', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:20:40', 'LENOVO_ThinkPad_E440-U02_Black.jpg', 'LENOVO_ThinkPad_E440-U02_Black.jpg', 'LENOVO-ThinkPad-E440-U02', 1, 'LEN4U02'),
(78, 4, 4, 'LENOVO ThinkPad E450-YIA', 'Small Business Optimized !!!\r\nIntel Core i5 5200U-2.6Ghz Turbo 3.2Ghz, RAM 4GB, HDD 1TB, VGA AMD RADEON R7 M260-2GB, Screen 14", Dos.', 6599000, 'Intel Core i3 4005U-1.70Ghz', '4', 'VGA Intel HD 4600', '14', 'DOS', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:22:00', 'LENOVO_ThinkPad_E450-YIA_Black.jpg', 'LENOVO_ThinkPad_E450-YIA_Black.jpg', 'LENOVO-ThinkPad-E450-YIA', 1, 'LEN4YIA'),
(79, 4, 4, 'LENOVO IdeaPad B40-70-4261', 'Maximum Security with FingerPrint !!!\r\nIntel Core i3 4010U-1.7Ghz, RAM 2GB, HDD 500GB, VGA AMD R5 M239-2GB, DVD/RW, FingerPrint, Screen 14" LED, Dos.', 5199000, 'Intel Core i3 4010U-1.7?Ghz', '2', 'VGA AMD R5 M239-2GB???', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:22:51', 'LENOVO_IdeaPad_B40-70-4261_Black.jpg', 'LENOVO_IdeaPad_B40-70-4261_Black.jpg', 'LENOVO-IdeaPad-B40-70-4261', 1, 'LEN4261'),
(80, 4, 4, 'LENOVO IdeaPad B40-70-6093', 'Maximum Security with FingerPrint !!! \r\nIntel Core i5 4210U-1.7Ghz Turbo 2.7Ghz, RAM 2GB, HDD 500GB, VGA AMD R5 M230-2GB, DVD/RW, FingerPrint, Screen 14", Dos.\r\n', 6399000, 'Intel Core i5 4210U-1.7?Ghz Turbo 2.7Ghz', '2', 'VGA AMD R5 M230 2GB', '14', 'DOS', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:23:46', 'LENOVO_IdeaPad_B40-70-6093.jpg', 'LENOVO_IdeaPad_B40-70-6093.jpg', 'LENOVO-IdeaPad-B40-70-6093', 1, 'LEN4093'),
(81, 4, 4, 'LENOVO ThinkPad E440-2SG', 'Battery Life\r\nUp to 6 hours with standard 6-cell 48Wh battery\r\nWeight\r\nStarting at 2.14 kg / 4.7 lbs\r\nSpeakers\r\nStereo with Dolby® Advanced Audio™\r\nMicrophone\r\nDual-array with VOIP enhancement\r\nPorts\r\n2 USB 3.0, 1 USB 2.0 powered, VGA, HDMI, RJ45, 4-in-1 card reader, audio/headphone combo jack, Lenovo OneLink technology', 7599000, 'Intel Core i5 4210M-2.5Ghz Turbo 3.1Ghz', '4', 'VGA Intel HD 4600', '14', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:27:36', 'LENOVO_ThinkPad_E440-2SG.jpg', 'LENOVO_ThinkPad_E440-2SG.jpg', 'LENOVO-ThinkPad-E440-2SG', 1, 'LEN42SG'),
(82, 4, 4, 'LENOVO ThinkPad E440-RSG', 'Lenovo OneLink TechnologyGet more from your power cable! OneLink technology is a unique interface that simplifies connectivity through a single cable to the ThinkPad OneLink Dock. The OneLink dock provides dedicated video, USB 3.0 ports, Gigabit Ethernet, and audio—all while charging your notebook.Lenovo Solutions for Small BusinessBuilt on the Intel® Small Business Advantage platform and includes unique security and productivity features to keep your small-to-mid-sized business up and running: after-hours maintenance, software monitoring, USB blocker, energy savings, and the ability to backup and restore applications.', 7999000, 'Intel Core i5 4210M-2.6Ghz Turbo 3.2Ghz', '4', 'VGA Intel HD 4600', '14', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:29:21', 'LENOVO_ThinkPad_E440-RSG_Black.png', 'LENOVO_ThinkPad_E440-RSG_Black.png', 'LENOVO-ThinkPad-E440-RSG', 1, 'LEN4RSG'),
(83, 4, 4, 'LENOVO ThinkPad T440P-DSG', 'BUILT FOR BUSINESS !!!\r\nIntel Core i5 4300M-2.6GHz Turbo 3.3Ghz, RAM 8GB, HDD 500GB, DVD/RW, VGA Intel HD 4400, Screen 14", Windows 8 Professional', 10999000, 'Intel Core i5 4300M-2.6GHz Turbo 3.3Ghz', '8', 'VGA Intel HD 4600?', '14', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:30:27', 'LENOVO_ThinkPad_T440P-DSG_Black.jpg', 'LENOVO_ThinkPad_T440P-DSG_Black.jpg', 'LENOVO-ThinkPad-T440P-DSG', 1, 'LEN4DSG'),
(84, 4, 4, 'LENOVO ThinkPad E440-8ID', 'Lenovo Thinkpad E440-8ID Hitam Notebook [14"/i5/Nvidia GT740M/Win 8 SL] + Office 365 Software merupakan laptop yang didukung oleh Intel Core i5-4210M, NVIDIA GeForce GT740M 2GB, AntiGlare, Touch Screen, dan 4GB 1600MHz DDR3 dengan kapasitas penyimpanan 1TB HDD (5400rpm). Bonus Microsoft Office 365 Personal seharga Rp 719.000.', 10199000, 'Intel Core i5 4210M-2.6Ghz Turbo 3.2Ghz', '4', 'VGA nVidia GT740M-2GB', '14', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:33:25', 'LENOVO_ThinkPad_E440-8ID_Black.jpg', 'LENOVO_ThinkPad_E440-8ID_Black.jpg', 'LENOVO-ThinkPad-E440-8ID', 1, 'LEN48ID'),
(85, 4, 4, 'LENOVO ThinkPad E440-NSG', 'Small Business Optimized !!!\r\nIntel Core i7 4702MQ-2.2Ghz Turbo 3.2Ghz, RAM 4GB, HDD 500GB, DVD/RW, VGA Intel HD 4600, Screen 14", Windows 8', 9999000, 'Intel Core i7 4702MQ-2.2?Ghz Turbo 3.2Ghz', '4', 'VGA Intel HD 4600', '14', 'Windows', 'HDD 500GB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:34:14', 'LENOVO_ThinkPad_E440-NSG_Black.jpg', 'LENOVO_ThinkPad_E440-NSG_Black.jpg', 'LENOVO-ThinkPad-E440-NSG', 1, 'LEN4NSG'),
(86, 4, 4, 'LENOVO ThinkPad T440P-41SG', '4th generation Intel® Core™ processors deliver the performance to increase productivity for your business. Devices turn on in an instant and are always up-to-date with your Lenovo work laptop. You can multitask quickly and move effortlessly between applications, collaborate wirelessly in a high quality videoconference — all with the convenience of longer battery life. Plus, you can guard against identity theft and ensure safe access to your network with built-in security features. In fact, the only thing more amazing than an Intel Core processor-based PC is what your users will do with it.', 13499000, 'Intel Core i7 4600M-2.9GHz Turbo 3.6Ghz', '8', 'VGA nVidia GT730M-1GB', '14', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:36:37', 'LENOVO_ThinkPad_T440P-41SG_Black.jpg', 'LENOVO_ThinkPad_T440P-41SG_Black.jpg', 'LENOVO-ThinkPad-T440P-41SG', 1, 'LEN41SG');
INSERT INTO `products_tabel` (`id_product`, `id_category`, `id_brand`, `product_name`, `product_description`, `product_price`, `processor`, `memory`, `vga`, `screen`, `os`, `storage`, `color`, `product_stock`, `created_at`, `modified_at`, `product_image`, `product_image_thumb`, `permalink`, `status`, `product_code`) VALUES
(87, 4, 4, 'LENOVO ThinkPad E440-9ID', 'Lenovo ThinkPad Edge E440-9ID memiliki spesifikasi yang bisa diandalkan dalam menyelesaikan setiap pekerjaan anda dengan laptop ini. karena sudah menggunakan prosesor dari intel yang merupakan kelas teratas yang diproduksi oleh intel, sehingga kemampuannya dalam melakukan komputasi akan semakin cepat dan efisien. Desain dari laptop ini sangat menarik dan juga memiliki warna hitam khas dari Lenovo. Tidak hanya itu saja sistem operasi pada laptop ini juga sudah disediakan oleh Lenovo, yaitu sistem operasi Windows 8 SL yang dapat anda gunakan sebagai sistem operasi yang mudah untuk digunakan dan juga familiar.\r\n\r\nKapasitas dari hardisk pada laptop ini juga sudah memiliki kapasitas sebesar 1 TB, dengan kapasitas sebesar ini tentu saja anda bisa dengan tenang dalam menyimpan berbagai macam data pada laptop ini. tidak hanya itu saja bila anda ingin menyimpan data pada media disk, Lenovo sudah menyediakan DVD RW pada laptop ini.', 12699000, 'Intel Core i7 4712MQ-2.2?Ghz Turbo 3.2Ghz', '4', 'VGA nVidia GT740M-2GB', '14', 'Windows', 'HDD 1TB', 'Black', 10, '2015-06-27 14:30:03', '2015-08-03 01:39:32', 'LENOVO_ThinkPad_E440-9ID_Black.jpg', 'LENOVO_ThinkPad_E440-9ID_Black.jpg', 'LENOVO-ThinkPad-E440-9ID', 1, 'LEN49ID');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `permalink` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id_category`, `category_name`, `permalink`, `deskripsi`, `created_at`, `modified_at`) VALUES
(1, 'Multimedia', 'Multimedia', 'Laptop dengan spesifikasi canggih, baterai yang tahan lama dan model yang keren. Biasanya dilengkapi audio video dengan kualitas premium seperti HP Envy yang dilengkapi Beats Audio atau Asus N Series dengan Bang Olufsen atau Toshiba P series dengan Harman Kardon. Bisa dibilang laptop multimedia mirip laptop gaming namun dengan baterai lebih tahan lama, lebih ringan dan model yang lebih untuk umum. Cocok untuk casual gamer maupun professional yang butuh laptop untuk produktivitas sekaligus hiburan seperti menonton DVD / Bluray di laptop', '2015-06-18 14:57:22', '0000-00-00 00:00:00'),
(2, 'Daily', 'Daily', 'Ukuran layar bervariasi mulai dari 11 sampai 17 inci dengan spesifikasi dan harga ekonomis. Lebih kuat dari netbook dan cocok untuk berbagai pekerjaan harian. Beberapa tipe dilengkapi dengan spesifikasi cukup untuk menjalankan game atau program 3D dengan setting rendah. Cocok bagi anda yang mencari laptop harian, tidak masalah model atau berat dan budget sekitar 4 sampai 7 juta.', '2015-06-18 14:58:49', '2015-06-18 15:15:18'),
(3, 'Gaming', 'Gaming', 'Laptop seperti Dell Alienware, Asus ROG, Toshiba Qosmio atau MSI GT adalah laptop untuk game terbaru dengan kualitas gambar dan suara terbaik. Harga tidak murah, baterai cenderung boros dan berat dibanding laptop umumnya. Namun laptop gaming adalah laptop dengan spesifikasi terbaik. Cocok untuk para hardcore gamer. Begitu pula jika anda professional yang menggunakan program 3D atau video editing tercanggih.', '2015-06-18 14:59:44', '0000-00-00 00:00:00'),
(4, 'Business', 'Business', 'Ciri-ciri laptop iniadalah design dan rangka yang kokoh sehingga lebih tahan benturan. Cocok bagi professional dengan mobilitas tinggi dan jika lokasi kerja di lapangan. Harga tidak murah namun kualitas dan ketahanan terbukti dengan model-model yang bertahan lama di pasar seperti Lenovo Thinkpad, HP Elitebook atau Dell Latitude.', '2015-06-18 15:00:15', '2015-06-18 15:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE IF NOT EXISTS `rule` (
  `id_rule` int(11) NOT NULL AUTO_INCREMENT,
  `rule_kode` varchar(10) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rule`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id_rule`, `rule_kode`, `id_product`) VALUES
(1, 'R1', 36),
(2, 'R2', 39),
(3, 'R3', 37),
(4, 'R4', 38),
(5, 'R5', 57),
(6, 'R6', 1),
(7, 'R7', 23),
(8, 'R8', 40),
(9, 'R9', 22),
(10, 'R10', 24),
(11, 'R11', 59),
(12, 'R12', 2),
(13, 'R13', 25),
(14, 'R14', 41),
(15, 'R15', 58),
(16, 'R16', 3),
(17, 'R17', 26),
(18, 'R18', 42),
(19, 'R19', 43),
(20, 'R20', 44),
(21, 'R21', 60),
(22, 'R22', 4),
(23, 'R23', 27),
(24, 'R24', 61),
(25, 'R25', 5),
(26, 'R26', 62),
(27, 'R27', 32),
(28, 'R28', 46),
(29, 'R29', 63),
(30, 'R30', 45),
(31, 'R31', 64),
(32, 'R32', 30),
(33, 'R33', 28),
(34, 'R34', 6),
(35, 'R35', 48),
(36, 'R36', 29),
(37, 'R37', 49),
(38, 'R38', 47),
(39, 'R39', 65),
(40, 'R40', 8),
(41, 'R41', 31),
(42, 'R42', 66),
(43, 'R43', 50),
(44, 'R44', 52),
(45, 'R45', 53),
(46, 'R46', 51),
(47, 'R47', 67),
(48, 'R48', 54),
(49, 'R49', 55),
(50, 'R50', 68),
(51, 'R51', 33),
(52, 'R52', 71),
(53, 'R53', 70),
(54, 'R54', 69),
(55, 'R55', 7),
(56, 'R56', 9),
(57, 'R57', 10),
(58, 'R58', 34),
(59, 'R59', 11),
(60, 'R60', 12),
(61, 'R61', 72),
(62, 'R62', 35),
(63, 'R63', 73),
(64, 'R64', 13),
(65, 'R65', 14),
(66, 'R66', 56),
(67, 'R67', 74),
(68, 'R68', 75),
(69, 'R69', 76),
(70, 'R70', 79),
(71, 'R71', 16),
(72, 'R72', 77),
(73, 'R73', 78),
(74, 'R74', 80),
(75, 'R75', 81),
(76, 'R76', 82),
(77, 'R77', 17),
(78, 'R78', 84),
(79, 'R79', 20),
(80, 'R80', 83),
(81, 'R81', 18),
(82, 'R82', 85),
(83, 'R83', 19),
(84, 'R84', 87),
(85, 'R85', 86),
(86, 'R86', 21),
(87, 'R87', 15);

-- --------------------------------------------------------

--
-- Table structure for table `rule_detail`
--

CREATE TABLE IF NOT EXISTS `rule_detail` (
  `id_rule_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(11) DEFAULT NULL,
  `id_parameter` int(11) DEFAULT NULL,
  `id_rule` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rule_detail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=523 ;

--
-- Dumping data for table `rule_detail`
--

INSERT INTO `rule_detail` (`id_rule_detail`, `id_kriteria`, `id_parameter`, `id_rule`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 1),
(3, 3, 3, 1),
(4, 4, 4, 1),
(5, 5, 5, 1),
(6, 6, 6, 1),
(7, 1, 1, 2),
(8, 2, 2, 2),
(9, 3, 3, 2),
(10, 4, 4, 2),
(11, 7, 5, 2),
(12, 6, 6, 2),
(13, 1, 1, 3),
(14, 2, 2, 3),
(15, 3, 3, 3),
(16, 8, 4, 3),
(17, 9, 5, 3),
(18, 6, 6, 3),
(19, 1, 1, 4),
(20, 2, 2, 4),
(21, 3, 3, 4),
(22, 8, 4, 4),
(23, 5, 5, 4),
(24, 6, 6, 4),
(25, 1, 1, 5),
(26, 2, 2, 5),
(27, 3, 3, 5),
(28, 8, 4, 5),
(29, 7, 5, 5),
(30, 10, 6, 5),
(31, 1, 1, 6),
(32, 2, 2, 6),
(33, 11, 3, 6),
(34, 4, 4, 6),
(35, 9, 5, 6),
(36, 12, 6, 6),
(37, 1, 1, 7),
(38, 2, 2, 7),
(39, 11, 3, 7),
(40, 4, 4, 7),
(41, 9, 5, 7),
(42, 13, 6, 7),
(43, 1, 1, 8),
(44, 2, 2, 8),
(45, 11, 3, 8),
(46, 4, 4, 8),
(47, 5, 5, 8),
(48, 6, 6, 8),
(49, 1, 1, 9),
(50, 2, 2, 9),
(51, 11, 3, 9),
(52, 8, 4, 9),
(53, 9, 5, 9),
(54, 13, 6, 9),
(55, 1, 1, 10),
(56, 2, 2, 10),
(57, 14, 3, 10),
(58, 4, 4, 10),
(59, 9, 5, 10),
(60, 13, 6, 10),
(61, 1, 1, 11),
(62, 2, 2, 11),
(63, 14, 3, 11),
(64, 8, 4, 11),
(65, 9, 5, 11),
(66, 10, 6, 11),
(67, 1, 1, 12),
(68, 15, 2, 12),
(69, 14, 3, 12),
(70, 8, 4, 12),
(71, 9, 5, 12),
(72, 12, 6, 12),
(73, 1, 1, 13),
(74, 15, 2, 13),
(75, 14, 3, 13),
(76, 8, 4, 13),
(77, 9, 5, 13),
(78, 13, 6, 13),
(79, 1, 1, 14),
(80, 15, 2, 14),
(81, 14, 3, 14),
(82, 8, 4, 14),
(83, 9, 5, 14),
(84, 6, 6, 14),
(85, 1, 1, 15),
(86, 15, 2, 15),
(87, 14, 3, 15),
(88, 8, 4, 15),
(89, 9, 5, 15),
(90, 10, 6, 15),
(91, 1, 1, 16),
(92, 15, 2, 16),
(93, 14, 3, 16),
(94, 8, 4, 16),
(95, 7, 5, 16),
(96, 12, 6, 16),
(97, 1, 1, 17),
(98, 15, 2, 17),
(99, 14, 3, 17),
(100, 8, 4, 17),
(101, 7, 5, 17),
(102, 13, 6, 17),
(103, 1, 1, 18),
(104, 15, 2, 18),
(105, 14, 3, 18),
(106, 8, 4, 18),
(107, 7, 5, 18),
(108, 6, 6, 18),
(109, 1, 1, 19),
(110, 15, 2, 19),
(111, 16, 3, 19),
(112, 4, 4, 19),
(113, 7, 5, 19),
(114, 6, 6, 19),
(115, 1, 1, 20),
(116, 15, 2, 20),
(117, 16, 3, 20),
(118, 8, 4, 20),
(119, 9, 5, 20),
(120, 6, 6, 20),
(121, 1, 1, 21),
(122, 15, 2, 21),
(123, 16, 3, 21),
(124, 8, 4, 21),
(125, 7, 5, 21),
(126, 10, 6, 21),
(127, 1, 1, 22),
(128, 17, 2, 22),
(129, 16, 3, 22),
(130, 8, 4, 22),
(131, 7, 5, 22),
(132, 12, 6, 22),
(133, 1, 1, 23),
(134, 17, 2, 23),
(135, 16, 3, 23),
(136, 8, 4, 23),
(137, 7, 5, 23),
(138, 13, 6, 23),
(139, 1, 1, 24),
(140, 17, 2, 24),
(141, 16, 3, 24),
(142, 18, 4, 24),
(143, 7, 5, 24),
(144, 10, 6, 24),
(145, 19, 1, 25),
(146, 20, 2, 25),
(147, 3, 3, 25),
(148, 4, 4, 25),
(149, 9, 5, 25),
(150, 12, 6, 25),
(151, 19, 1, 26),
(152, 20, 2, 26),
(153, 3, 3, 26),
(154, 4, 4, 26),
(155, 9, 5, 26),
(156, 10, 6, 26),
(157, 19, 1, 27),
(158, 20, 2, 27),
(159, 3, 3, 27),
(160, 4, 4, 27),
(161, 9, 5, 27),
(162, 13, 6, 27),
(163, 19, 1, 28),
(164, 20, 2, 28),
(165, 3, 3, 28),
(166, 4, 4, 28),
(167, 9, 5, 28),
(168, 6, 6, 28),
(169, 19, 1, 29),
(170, 20, 2, 29),
(171, 3, 3, 29),
(172, 8, 4, 29),
(173, 9, 5, 29),
(174, 10, 6, 29),
(175, 19, 1, 30),
(176, 2, 2, 30),
(177, 3, 3, 30),
(178, 4, 4, 30),
(179, 9, 5, 30),
(180, 6, 6, 30),
(181, 19, 1, 31),
(182, 20, 2, 31),
(183, 21, 3, 31),
(184, 4, 4, 31),
(185, 9, 5, 31),
(186, 10, 6, 31),
(187, 19, 1, 32),
(188, 20, 2, 32),
(189, 21, 3, 32),
(190, 4, 4, 32),
(191, 22, 5, 32),
(192, 13, 6, 32),
(193, 19, 1, 33),
(194, 20, 2, 33),
(195, 21, 3, 33),
(196, 4, 4, 33),
(197, 9, 5, 33),
(198, 13, 6, 33),
(199, 19, 1, 34),
(200, 20, 2, 34),
(201, 21, 3, 34),
(202, 4, 4, 34),
(203, 9, 5, 34),
(204, 12, 6, 34),
(205, 19, 1, 35),
(206, 20, 2, 35),
(207, 21, 3, 35),
(208, 4, 4, 35),
(209, 9, 5, 35),
(210, 6, 6, 35),
(211, 19, 1, 36),
(212, 20, 2, 36),
(213, 21, 3, 36),
(214, 8, 4, 36),
(215, 9, 5, 36),
(216, 13, 6, 36),
(217, 19, 1, 37),
(218, 20, 2, 37),
(219, 21, 3, 37),
(220, 8, 4, 37),
(221, 9, 5, 37),
(222, 6, 6, 37),
(223, 19, 1, 38),
(224, 2, 2, 38),
(225, 21, 3, 38),
(226, 4, 4, 38),
(227, 9, 5, 38),
(228, 6, 6, 38),
(229, 19, 1, 39),
(230, 20, 2, 39),
(231, 11, 3, 39),
(232, 4, 4, 39),
(233, 9, 5, 39),
(234, 10, 6, 39),
(235, 19, 1, 40),
(236, 20, 2, 40),
(237, 11, 3, 40),
(238, 4, 4, 40),
(239, 9, 5, 40),
(240, 12, 6, 40),
(241, 19, 1, 41),
(242, 2, 2, 41),
(243, 11, 3, 41),
(244, 4, 4, 41),
(245, 9, 5, 41),
(246, 13, 6, 41),
(247, 19, 1, 42),
(248, 2, 2, 42),
(249, 11, 3, 42),
(250, 4, 4, 42),
(251, 9, 5, 42),
(252, 10, 6, 42),
(253, 19, 1, 43),
(254, 2, 2, 43),
(255, 11, 3, 43),
(256, 4, 4, 43),
(257, 9, 5, 43),
(258, 6, 6, 43),
(259, 19, 1, 44),
(260, 2, 2, 44),
(261, 11, 3, 44),
(262, 4, 4, 44),
(263, 5, 5, 44),
(264, 6, 6, 44),
(265, 19, 1, 45),
(266, 2, 2, 45),
(267, 11, 3, 45),
(268, 4, 4, 45),
(269, 7, 5, 45),
(270, 6, 6, 45),
(271, 19, 1, 46),
(272, 2, 2, 46),
(273, 11, 3, 46),
(274, 8, 4, 46),
(275, 9, 5, 46),
(276, 6, 6, 46),
(277, 19, 1, 47),
(278, 2, 2, 47),
(279, 11, 3, 47),
(280, 8, 4, 47),
(281, 9, 5, 47),
(282, 10, 6, 47),
(283, 19, 1, 48),
(284, 2, 2, 48),
(285, 14, 3, 48),
(286, 4, 4, 48),
(287, 9, 5, 48),
(288, 6, 6, 48),
(289, 19, 1, 49),
(290, 2, 2, 49),
(291, 14, 3, 49),
(292, 8, 4, 49),
(293, 9, 5, 49),
(294, 6, 6, 49),
(295, 19, 1, 50),
(296, 2, 2, 50),
(297, 14, 3, 50),
(298, 8, 4, 50),
(299, 9, 5, 50),
(300, 10, 6, 50),
(301, 19, 1, 51),
(302, 2, 2, 51),
(303, 14, 3, 51),
(304, 8, 4, 51),
(305, 9, 5, 51),
(306, 13, 6, 51),
(307, 19, 1, 52),
(308, 15, 2, 52),
(309, 16, 3, 52),
(310, 8, 4, 52),
(311, 9, 5, 52),
(312, 10, 6, 52),
(313, 19, 1, 53),
(314, 15, 2, 53),
(315, 16, 3, 53),
(316, 18, 4, 53),
(317, 9, 5, 53),
(318, 10, 6, 53),
(319, 19, 1, 54),
(320, 20, 2, 54),
(321, 23, 3, 54),
(322, 4, 4, 54),
(323, 9, 5, 54),
(324, 10, 6, 54),
(325, 19, 1, 55),
(326, 20, 2, 55),
(327, 23, 3, 55),
(328, 4, 4, 55),
(329, 9, 5, 55),
(330, 12, 6, 55),
(331, 24, 1, 56),
(332, 20, 2, 56),
(333, 3, 3, 56),
(334, 8, 4, 56),
(335, 9, 5, 56),
(336, 12, 6, 56),
(337, 24, 1, 57),
(338, 2, 2, 57),
(339, 3, 3, 57),
(340, 8, 4, 57),
(341, 7, 5, 57),
(342, 12, 6, 57),
(343, 24, 1, 58),
(344, 15, 2, 58),
(345, 3, 3, 58),
(346, 8, 4, 58),
(347, 7, 5, 58),
(348, 13, 6, 58),
(349, 24, 1, 59),
(350, 17, 2, 59),
(351, 3, 3, 59),
(352, 18, 4, 59),
(353, 7, 5, 59),
(354, 12, 6, 59),
(355, 24, 1, 60),
(356, 17, 2, 60),
(357, 14, 3, 60),
(358, 18, 4, 60),
(359, 7, 5, 60),
(360, 12, 6, 60),
(361, 24, 1, 61),
(362, 17, 2, 61),
(363, 14, 3, 61),
(364, 18, 4, 61),
(365, 7, 5, 61),
(366, 10, 6, 61),
(367, 24, 1, 62),
(368, 17, 2, 62),
(369, 16, 3, 62),
(370, 8, 4, 62),
(371, 7, 5, 62),
(372, 13, 6, 62),
(373, 24, 1, 63),
(374, 17, 2, 63),
(375, 16, 3, 63),
(376, 18, 4, 63),
(377, 7, 5, 63),
(378, 10, 6, 63),
(379, 24, 1, 64),
(380, 17, 2, 64),
(381, 16, 3, 64),
(382, 18, 4, 64),
(383, 7, 5, 64),
(384, 12, 6, 64),
(385, 24, 1, 65),
(386, 17, 2, 65),
(387, 16, 3, 65),
(388, 25, 4, 65),
(389, 5, 5, 65),
(390, 12, 6, 65),
(391, 24, 1, 66),
(392, 17, 2, 66),
(393, 16, 3, 66),
(394, 26, 4, 66),
(395, 7, 5, 66),
(396, 6, 6, 66),
(397, 24, 1, 67),
(398, 17, 2, 67),
(399, 16, 3, 67),
(400, 26, 4, 67),
(401, 7, 5, 67),
(402, 10, 6, 67),
(403, 27, 1, 68),
(404, 20, 2, 68),
(405, 3, 3, 68),
(406, 4, 4, 68),
(407, 9, 5, 68),
(408, 10, 6, 68),
(409, 27, 1, 69),
(410, 2, 2, 69),
(411, 3, 3, 69),
(412, 8, 4, 69),
(413, 9, 5, 69),
(414, 10, 6, 69),
(415, 27, 1, 70),
(416, 2, 2, 70),
(417, 11, 3, 70),
(418, 4, 4, 70),
(419, 9, 5, 70),
(420, 10, 6, 70),
(421, 27, 1, 71),
(422, 2, 2, 71),
(423, 11, 3, 71),
(424, 4, 4, 71),
(425, 9, 5, 71),
(426, 12, 6, 71),
(427, 27, 1, 72),
(428, 2, 2, 72),
(429, 11, 3, 72),
(430, 8, 4, 72),
(431, 9, 5, 72),
(432, 10, 6, 72),
(433, 27, 1, 73),
(434, 2, 2, 73),
(435, 11, 3, 73),
(436, 8, 4, 73),
(437, 7, 5, 73),
(438, 10, 6, 73),
(439, 27, 1, 74),
(440, 2, 2, 74),
(441, 14, 3, 74),
(442, 4, 4, 74),
(443, 9, 5, 74),
(444, 10, 6, 74),
(445, 27, 1, 75),
(446, 15, 2, 75),
(447, 14, 3, 75),
(448, 8, 4, 75),
(449, 9, 5, 75),
(450, 10, 6, 75),
(451, 27, 1, 76),
(452, 15, 2, 76),
(453, 14, 3, 76),
(454, 8, 4, 76),
(455, 7, 5, 76),
(456, 10, 6, 76),
(457, 27, 1, 77),
(458, 15, 2, 77),
(459, 14, 3, 77),
(460, 8, 4, 77),
(461, 7, 5, 77),
(462, 12, 6, 77),
(463, 27, 1, 78),
(464, 17, 2, 78),
(465, 14, 3, 78),
(466, 8, 4, 78),
(467, 7, 5, 78),
(468, 10, 6, 78),
(469, 27, 1, 79),
(470, 17, 2, 79),
(471, 14, 3, 79),
(472, 8, 4, 79),
(473, 28, 5, 79),
(474, 12, 6, 79),
(475, 27, 1, 80),
(476, 17, 2, 80),
(477, 14, 3, 80),
(478, 18, 4, 80),
(479, 9, 5, 80),
(480, 10, 6, 80),
(481, 27, 1, 81),
(482, 17, 2, 81),
(483, 14, 3, 81),
(484, 18, 4, 81),
(485, 29, 5, 81),
(486, 12, 6, 81),
(487, 27, 1, 82),
(488, 17, 2, 82),
(489, 16, 3, 82),
(490, 8, 4, 82),
(491, 9, 5, 82),
(492, 10, 6, 82),
(493, 27, 1, 83),
(494, 17, 2, 83),
(495, 16, 3, 83),
(496, 8, 4, 83),
(497, 7, 5, 83),
(498, 12, 6, 83),
(499, 27, 1, 84),
(500, 17, 2, 84),
(501, 16, 3, 84),
(502, 8, 4, 84),
(503, 7, 5, 84),
(504, 10, 6, 84),
(505, 27, 1, 85),
(506, 17, 2, 85),
(507, 16, 3, 85),
(508, 18, 4, 85),
(509, 7, 5, 85),
(510, 10, 6, 85),
(511, 27, 1, 86),
(512, 17, 2, 86),
(513, 16, 3, 86),
(514, 18, 4, 86),
(515, 29, 5, 86),
(516, 12, 6, 86),
(517, 27, 1, 87),
(518, 20, 2, 87),
(519, 23, 3, 87),
(520, 4, 4, 87),
(521, 9, 5, 87),
(522, 12, 6, 87);

-- --------------------------------------------------------

--
-- Table structure for table `states_tabel`
--

CREATE TABLE IF NOT EXISTS `states_tabel` (
  `id_state` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  PRIMARY KEY (`id_state`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `states_tabel`
--

INSERT INTO `states_tabel` (`id_state`, `state`) VALUES
(1, 'Jawa Barat'),
(2, 'Jawa Tengah'),
(3, 'Jawa Timur'),
(4, 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE IF NOT EXISTS `storage` (
  `id_storage` int(11) NOT NULL AUTO_INCREMENT,
  `ukuran` varchar(11) NOT NULL,
  PRIMARY KEY (`id_storage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`id_storage`, `ukuran`) VALUES
(1, 'HDD 320GB'),
(2, 'HDD 500GB'),
(3, 'HDD 750GB'),
(4, 'HDD 1TB'),
(5, 'SSD 128GB'),
(6, 'SSD 256GB');

-- --------------------------------------------------------

--
-- Table structure for table `users_status`
--

CREATE TABLE IF NOT EXISTS `users_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_status`
--

INSERT INTO `users_status` (`id_status`, `status`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `users_tabel`
--

CREATE TABLE IF NOT EXISTS `users_tabel` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_status` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `first_address` varchar(100) NOT NULL,
  `second_address` varchar(100) DEFAULT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_zip` varchar(12) NOT NULL,
  `id_state` varchar(10) NOT NULL,
  `id_country` varchar(10) NOT NULL,
  `user_agree` tinyint(1) NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users_tabel`
--

INSERT INTO `users_tabel` (`id_user`, `id_status`, `user_email`, `user_password`, `confirm_password`, `user_name`, `first_address`, `second_address`, `user_phone`, `user_city`, `user_zip`, `id_state`, `id_country`, `user_agree`, `last_login`, `created`, `modified`) VALUES
(1, 1, 'kurniawan.lucifer@gmail.com', 'admin', 'admin', 'Kurniawan', 'Komplek Citra Biru Blok A No 33 RT05 RW08', '', '085720573592', 'Bandung', '40615', '1', '1', 1, '2015-08-12 12:03:39', '0000-00-00 00:00:00', '2015-04-27 08:59:18'),
(2, 2, 'pevpearce@gmail.com', 'pev1234', 'pev1234', 'Pevita Pearce', 'Komplek Citra Biru Blok A No 33 RT05 RW08', '', '085720264347', 'Bandung', '40615', '1', '1', 1, '2015-02-05 00:19:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 'willi@gmail.com', 'willi', 'willi', 'Willi Willi', 'Dago Cigadung', 'Rancakendal', '085624254898', 'Bandung', '40112', '1', '1', 1, '2015-08-12 11:38:13', '0000-00-00 00:00:00', '2015-07-31 14:33:49'),
(8, 2, 'lawrence@gmail.com', 'lawrence', 'lawrence', 'Jennifer Lawrence', 'Jalan Setiabudi Indah No 12 RT 08 RW 01', '', '085720264347', 'Jakarta', '33201', '1', '1', 1, '2015-08-12 12:05:53', '0000-00-00 00:00:00', '2015-04-01 21:47:59'),
(9, 2, 'haruka@gmail.com', 'nakagawa', 'nakagawa', 'Haruka Nakagawa', 'Jalan Yokohama Jepang', 'Jalan Jendral Soedirman', '081321621423', 'Bandung', '56032', '1', '1', 1, '2015-08-12 16:35:04', '0000-00-00 00:00:00', '2015-06-10 15:26:18'),
(10, 1, 'eviherlina@gmail.com', 'admin', 'admin', 'Evi Herlina', 'Jalan Cibiru Hilir', '', '085732097439', 'Bandung', '40614', '1', '1', 1, '2015-04-09 14:50:28', '2015-03-01 21:23:28', '0000-00-00 00:00:00'),
(11, 2, 'irishbella@gmail.com', 'iloco', 'iloco', 'Irish Bella', 'Komplek Perumahan Kebun Binatang Bandung Blok A No 33 RT05 RW08 Kel. Pasirbiru Kec. Cibiru', '', '081321621423', 'Bandung', '40615', '1', '1', 1, '2015-08-12 11:18:09', '2015-04-16 14:13:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_rekomendasi`
--

CREATE TABLE IF NOT EXISTS `user_rekomendasi` (
  `id_user_rekomendasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tanggal_rekomendasi` datetime DEFAULT NULL,
  `id_rule` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user_rekomendasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
