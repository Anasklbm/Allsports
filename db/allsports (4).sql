-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 08:08 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allsports`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_club`
--

CREATE TABLE IF NOT EXISTS `add_club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `dist` varchar(150) NOT NULL,
  `con` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `ck_won` varchar(150) NOT NULL,
  `ck_loss` varchar(150) NOT NULL,
  `ck_draw` varchar(150) NOT NULL,
  `fb_won` varchar(150) NOT NULL,
  `fb_loss` varchar(150) NOT NULL,
  `fb_draw` varchar(150) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `add_club`
--

INSERT INTO `add_club` (`id`, `nme`, `dist`, `con`, `em`, `uid`, `pas`, `ph`, `ck_won`, `ck_loss`, `ck_draw`, `fb_won`, `fb_loss`, `fb_draw`, `sid`, `st`) VALUES
(3, 'All Stars', 'Thiruvananthapuram', '9874563210', 'star@gmail.com', 'star123', '12345', '1.jpeg', '0', '0', '0', '3', '2', '2', 'kr123', 0),
(4, 'Ice Tigers', 'Idukki', '9638527415', 'ice@gmail.com', 'ice123', '12345', '4.gif', '0', '0', '0', '5', '1', '1', 'kr123', 0),
(5, 'Underworld', 'Malappuram', '9876541234', 'uw@gmail.com', 'uw123', '12345', '5.jpg', '0', '0', '0', '1', '1', '1', 'kr123', 0),
(6, 'Empire', 'Palakkad', '98745632105', 'em@gmail.com', 'em123', '12345', '6.jpg', '0', '0', '0', '2', '1', '0', 'kr123', 0),
(7, 'Warriors', 'Kollam', '9874563210', 'wa@gmail.com', 'wa123', '12345', '7.jpg', '0', '0', '0', '1', '0', '0', 'kr123', 0),
(8, 'Rams', 'Kottayam', '8796541230', 'ra@gmail.com', 'ra123', '12345', '8.jpg', '0', '0', '0', '0', '0', '0', 'kr123', 0),
(9, 'Pirates', 'Kozhikode', '9874563215', 'p@gmail.com', 'pr123', '12345', '9.jpg', '0', '0', '0', '1', '0', '0', 'kr123', 0),
(10, 'Deadly Foxes', 'Malappuram', '9874563210', 'f@gmail.com', 'fox123', '12345', '10.jpg', '0', '0', '0', '0', '0', '0', 'kr123', 0),
(11, 'Crossfit', 'Kasaragod', '7896541230', 'cross@gmail.com', 'cross123', '12345', '11.jpg', '0', '0', '0', '0', '0', '1', 'kr123', 0),
(12, 'Titans', 'Wayanad', '9874563312', 'ti@gmail.com', 'tit123', '12345', '12.png', '0', '0', '0', '0', '0', '0', 'kr123', 0),
(15, 'Red-Dragons', 'Thiruvananthapuram', '8976453214', 'dg@gmail.com', 'dragon123', '12345', 'dragon12313.jpg', '0', '0', '0', '0', '0', '0', 'kr123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_club1`
--

CREATE TABLE IF NOT EXISTS `add_club1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `dist` varchar(150) NOT NULL,
  `con` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `ck_won` varchar(150) NOT NULL,
  `ck_loss` varchar(150) NOT NULL,
  `ck_draw` varchar(150) NOT NULL,
  `fb_won` varchar(150) NOT NULL,
  `fb_loss` varchar(150) NOT NULL,
  `fb_draw` varchar(150) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `add_club1`
--

INSERT INTO `add_club1` (`id`, `nme`, `dist`, `con`, `em`, `uid`, `pas`, `ph`, `ck_won`, `ck_loss`, `ck_draw`, `fb_won`, `fb_loss`, `fb_draw`, `sid`, `st`) VALUES
(7, 'Red-Dragons', 'Thiruvananthapuram', '8976453214', 'dg@gmail.com', 'dragon123', '12345', 'dragon12313.jpg', '0', '0', '0', '0', '0', '0', 'kr123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ad_st`
--

CREATE TABLE IF NOT EXISTS `ad_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sta` varchar(150) NOT NULL,
  `nme` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `con` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ad_st`
--

INSERT INTO `ad_st` (`id`, `sta`, `nme`, `addr`, `con`, `em`, `uid`, `pas`, `ph`, `st`) VALUES
(1, '18', 'Kerala Sports Department', '38/758-a, M G Road, Ernakulam, Kerala 680035', '9876543210', 'kr@gmail.com', 'kr123', '123', '1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(150) NOT NULL,
  `typ` varchar(150) NOT NULL,
  `gid` varchar(150) NOT NULL,
  `dt` date NOT NULL,
  `uid` varchar(150) NOT NULL,
  `se` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `tid`, `typ`, `gid`, `dt`, `uid`, `se`, `st`) VALUES
(1, '1', '1', 'spot@gmail.com', '2021-04-12', 'ma@gmail.com', 'GT-50866', 0),
(2, '6', '2', 'spot@gmail.com', '2021-04-10', 'ma@gmail.com', 'GT-50748', 0),
(3, '3', '1', 'spot@gmail.com', '2021-04-10', 'ma@gmail.com', 'GT-78499', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `DistCode` int(11) NOT NULL AUTO_INCREMENT,
  `StCode` int(11) DEFAULT NULL,
  `DistrictName` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`DistCode`),
  KEY `StCode` (`StCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=651 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistCode`, `StCode`, `DistrictName`) VALUES
(1, 1, 'North and Middle Andama'),
(2, 1, 'South Andama'),
(3, 1, 'Nicobar'),
(4, 2, 'Anantapur'),
(5, 2, 'Chittoor'),
(6, 2, 'East Godavari'),
(7, 2, 'Guntur'),
(8, 2, 'Krishna'),
(9, 2, 'Kurnool'),
(10, 2, 'Prakasam'),
(11, 2, 'Srikakulam'),
(12, 2, 'Sri Potti Sri Ramulu Nellore'),
(13, 2, 'Vishakhapatnam'),
(14, 2, 'Vizianagaram'),
(15, 2, 'West Godavari'),
(16, 2, 'Cudappah'),
(17, 3, 'Anjaw'),
(18, 3, 'Changlang'),
(19, 3, 'East Siang'),
(20, 3, 'East Kameng'),
(21, 3, 'Kurung Kumey'),
(22, 3, 'Lohit'),
(23, 3, 'Lower Dibang Valley'),
(24, 3, 'Lower Subansiri'),
(25, 3, 'Papum Pare'),
(26, 3, 'Tawang'),
(27, 3, 'Tirap'),
(28, 3, 'Dibang Valley'),
(29, 3, 'Upper Siang'),
(30, 3, 'Upper Subansiri'),
(31, 3, 'West Kameng'),
(32, 3, 'West Siang'),
(33, 4, 'Baksa'),
(34, 4, 'Barpeta'),
(35, 4, 'Bongaigao'),
(36, 4, 'Cachar'),
(37, 4, 'Chirang'),
(38, 4, 'Darrang'),
(39, 4, 'Dhemaji'),
(40, 4, 'Dima Hasao'),
(41, 4, 'Dhubri'),
(42, 4, 'Dibrugarh'),
(43, 4, 'Goalpara'),
(44, 4, 'Golaghat'),
(45, 4, 'Hailakandi'),
(46, 4, 'Jorhat'),
(47, 4, 'Kamrup'),
(48, 4, 'Kamrup Metropolita'),
(49, 4, 'Karbi Anglong'),
(50, 4, 'Karimganj'),
(51, 4, 'Kokrajhar'),
(52, 4, 'Lakhimpur'),
(53, 4, 'Morigao'),
(54, 4, 'Nagao'),
(55, 4, 'Nalbari'),
(56, 4, 'Sivasagar'),
(57, 4, 'Sonitpur'),
(58, 4, 'Tinsukia'),
(59, 4, 'Udalguri'),
(60, 5, 'Araria'),
(61, 5, 'Arwal'),
(62, 5, 'Aurangabad'),
(63, 5, 'Banka'),
(64, 5, 'Begusarai'),
(65, 5, 'Bhagalpur'),
(66, 5, 'Bhojpur'),
(67, 5, 'Buxar'),
(68, 5, 'Darbhanga'),
(69, 5, 'East Champara'),
(70, 5, 'Gaya'),
(71, 5, 'Gopalganj'),
(72, 5, 'Jamui'),
(73, 5, 'Jehanabad'),
(74, 5, 'Kaimur'),
(75, 5, 'Katihar'),
(76, 5, 'Khagaria'),
(77, 5, 'Kishanganj'),
(78, 5, 'Lakhisarai'),
(79, 5, 'Madhepura'),
(80, 5, 'Madhubani'),
(81, 5, 'Munger'),
(82, 5, 'Muzaffarpur'),
(83, 5, 'Nalanda'),
(84, 5, 'Nawada'),
(85, 5, 'Patna'),
(86, 5, 'Purnia'),
(87, 5, 'Rohtas'),
(88, 5, 'Saharsa'),
(89, 5, 'Samastipur'),
(90, 5, 'Sara'),
(91, 5, 'Sheikhpura'),
(92, 5, 'Sheohar'),
(93, 5, 'Sitamarhi'),
(94, 5, 'Siwa'),
(95, 5, 'Supaul'),
(96, 5, 'Vaishali'),
(97, 5, 'West Champara'),
(98, 6, 'Chandigarh'),
(99, 7, 'Bastar'),
(100, 7, 'Bijapur'),
(101, 7, 'Bilaspur'),
(102, 7, 'Dantewada'),
(103, 7, 'Dhamtari'),
(104, 7, 'Durg'),
(105, 7, 'Jashpur'),
(106, 7, 'Janjgir-Champa'),
(107, 7, 'Korba'),
(108, 7, 'Koriya'),
(109, 7, 'Kanker'),
(110, 7, 'Kabirdham (formerly Kawardha);'),
(111, 7, 'Mahasamund'),
(112, 7, 'Narayanpur'),
(113, 7, 'Raigarh'),
(114, 7, 'Rajnandgao'),
(115, 7, 'Raipur'),
(116, 7, 'Surajpur'),
(117, 8, 'Dadra and Nagar Haveli'),
(118, 9, 'Dama'),
(119, 9, 'Diu'),
(120, 10, 'Central Delhi'),
(121, 10, 'East Delhi'),
(122, 10, 'New Delhi'),
(123, 10, 'North Delhi'),
(124, 10, 'North East Delhi'),
(125, 10, 'North West Delhi'),
(126, 10, 'South Delhi'),
(127, 10, 'South West Delhi'),
(128, 10, 'West Delhi'),
(129, 11, 'North Goa'),
(130, 11, 'South Goa'),
(131, 12, 'Ahmedabad'),
(132, 12, 'Amreli'),
(133, 12, 'Anand'),
(134, 12, 'Aravalli'),
(135, 12, 'Banaskantha'),
(136, 12, 'Bharuch'),
(137, 12, 'Bhavnagar'),
(138, 12, 'Dahod'),
(139, 12, 'Dang'),
(140, 12, 'Gandhinagar'),
(141, 12, 'Jamnagar'),
(142, 12, 'Junagadh'),
(143, 12, 'Kutch'),
(144, 12, 'Kheda'),
(145, 12, 'Mehsana'),
(146, 12, 'Narmada'),
(147, 12, 'Navsari'),
(148, 12, 'Pata'),
(149, 12, 'Panchmahal'),
(150, 12, 'Porbandar'),
(151, 12, 'Rajkot'),
(152, 12, 'Sabarkantha'),
(153, 12, 'Surendranagar'),
(154, 12, 'Surat'),
(155, 12, 'Tapi'),
(156, 12, 'Vadodara'),
(157, 12, 'Valsad'),
(158, 13, 'Ambala'),
(159, 13, 'Bhiwani'),
(160, 13, 'Faridabad'),
(161, 13, 'Fatehabad'),
(162, 13, 'Gurgao'),
(163, 13, 'Hissar'),
(164, 13, 'Jhajjar'),
(165, 13, 'Jind'),
(166, 13, 'Karnal'),
(167, 13, 'Kaithal'),
(168, 13, 'Kurukshetra'),
(169, 13, 'Mahendragarh'),
(170, 13, 'Mewat'),
(171, 13, 'Palwal'),
(172, 13, 'Panchkula'),
(173, 13, 'Panipat'),
(174, 13, 'Rewari'),
(175, 13, 'Rohtak'),
(176, 13, 'Sirsa'),
(177, 13, 'Sonipat'),
(178, 13, 'Yamuna Nagar'),
(179, 14, 'Bilaspur'),
(180, 14, 'Chamba'),
(181, 14, 'Hamirpur'),
(182, 14, 'Kangra'),
(183, 14, 'Kinnaur'),
(184, 14, 'Kullu'),
(185, 14, 'Lahaul and Spiti'),
(186, 14, 'Mandi'),
(187, 14, 'Shimla'),
(188, 14, 'Sirmaur'),
(189, 14, 'Sola'),
(190, 14, 'Una'),
(191, 15, 'Anantnag'),
(192, 15, 'Badgam'),
(193, 15, 'Bandipora'),
(194, 15, 'Baramulla'),
(195, 15, 'Doda'),
(196, 15, 'Ganderbal'),
(197, 15, 'Jammu'),
(198, 15, 'Kargil'),
(199, 15, 'Kathua'),
(200, 15, 'Kishtwar'),
(202, 15, 'Kupwara'),
(203, 15, 'Kulgam'),
(204, 15, 'Leh'),
(205, 15, 'Poonch'),
(206, 15, 'Pulwama'),
(207, 15, 'Rajouri'),
(208, 15, 'Ramba'),
(209, 15, 'Reasi'),
(210, 15, 'Samba'),
(211, 15, 'Shopia'),
(212, 15, 'Srinagar'),
(213, 15, 'Udhampur'),
(214, 16, 'Bokaro'),
(215, 16, 'Chatra'),
(216, 16, 'Deoghar'),
(217, 16, 'Dhanbad'),
(218, 16, 'Dumka'),
(219, 16, 'East Singhbhum'),
(220, 16, 'Garhwa'),
(221, 16, 'Giridih'),
(222, 16, 'Godda'),
(223, 16, 'Gumla'),
(224, 16, 'Hazaribag'),
(225, 16, 'Jamtara'),
(226, 16, 'Khunti'),
(227, 16, 'Koderma'),
(228, 16, 'Latehar'),
(229, 16, 'Lohardaga'),
(230, 16, 'Pakur'),
(231, 16, 'Palamu'),
(232, 16, 'Ramgarh'),
(233, 16, 'Ranchi'),
(234, 16, 'Sahibganj'),
(235, 16, 'Seraikela Kharsawa'),
(236, 16, 'Simdega'),
(237, 16, 'West Singhbhum'),
(238, 17, 'Bagalkot'),
(239, 17, 'Bangalore Rural'),
(240, 17, 'Bangalore Urba'),
(241, 17, 'Belgaum'),
(242, 17, 'Bellary'),
(243, 17, 'Bidar'),
(244, 17, 'Bijapur'),
(245, 17, 'Chamarajnagar'),
(246, 17, 'Chikkamagaluru'),
(247, 17, 'Chikkaballapur'),
(248, 17, 'Chitradurga'),
(249, 17, 'Davanagere'),
(250, 17, 'Dharwad'),
(251, 17, 'Dakshina Kannada'),
(252, 17, 'Gadag'),
(253, 17, 'Gulbarga'),
(254, 17, 'Hassa'),
(255, 17, 'Haveri'),
(256, 17, 'Kodagu'),
(257, 17, 'Kolar'),
(258, 17, 'Koppal'),
(259, 17, 'Mandya'),
(260, 17, 'Mysore'),
(261, 17, 'Raichur'),
(262, 17, 'Shimoga'),
(263, 17, 'Tumkur'),
(264, 17, 'Udupi'),
(265, 17, 'Uttara Kannada'),
(266, 17, 'Ramanagara'),
(267, 17, 'Yadgir'),
(268, 18, 'Alappuzha'),
(269, 18, 'Ernakulam'),
(270, 18, 'Idukki'),
(271, 18, 'Kannur'),
(272, 18, 'Kasaragod'),
(273, 18, 'Kollam'),
(274, 18, 'Kottayam'),
(275, 18, 'Kozhikode'),
(276, 18, 'Malappuram'),
(277, 18, 'Palakkad'),
(278, 18, 'Pathanamthitta'),
(279, 18, 'Thrissur'),
(280, 18, 'Thiruvananthapuram'),
(281, 18, 'Wayanad'),
(282, 19, 'Lakshadweep'),
(283, 20, 'Agar'),
(284, 20, 'Alirajpur'),
(285, 20, 'Anuppur'),
(286, 20, 'Ashok Nagar'),
(287, 20, 'Balaghat'),
(288, 20, 'Barwani'),
(289, 20, 'Betul'),
(290, 20, 'Bhind'),
(291, 20, 'Bhopal'),
(292, 20, 'Burhanpur'),
(293, 20, 'Chhatarpur'),
(294, 20, 'Chhindwara'),
(295, 20, 'Damoh'),
(296, 20, 'Datia'),
(297, 20, 'Dewas'),
(298, 20, 'Dhar'),
(299, 20, 'Dindori'),
(300, 20, 'Guna'),
(301, 20, 'Gwalior'),
(302, 20, 'Harda'),
(303, 20, 'Hoshangabad'),
(304, 20, 'Indore'),
(305, 20, 'Jabalpur'),
(306, 20, 'Jhabua'),
(307, 20, 'Katni'),
(308, 20, 'Khandwa (East Nimar);'),
(309, 20, 'Khargone (West Nimar);'),
(310, 20, 'Mandla'),
(311, 20, 'Mandsaur'),
(312, 20, 'Morena'),
(313, 20, 'Narsinghpur'),
(314, 20, 'Neemuch'),
(315, 20, 'Panna'),
(316, 20, 'Raise'),
(317, 20, 'Rajgarh'),
(318, 20, 'Ratlam'),
(319, 20, 'Rewa'),
(320, 20, 'Sagar'),
(321, 20, 'Satna'),
(322, 20, 'Sehore'),
(323, 20, 'Seoni'),
(324, 20, 'Shahdol'),
(325, 20, 'Shajapur'),
(326, 20, 'Sheopur'),
(327, 20, 'Shivpuri'),
(328, 20, 'Sidhi'),
(329, 20, 'Singrauli'),
(330, 20, 'Tikamgarh'),
(331, 20, 'Ujjai'),
(332, 20, 'Umaria'),
(333, 20, 'Vidisha'),
(334, 21, 'Ahmednagar'),
(335, 21, 'Akola'),
(336, 21, 'Amravati'),
(337, 21, 'Aurangabad'),
(338, 21, 'Beed'),
(339, 21, 'Bhandara'),
(340, 21, 'Buldhana'),
(341, 21, 'Chandrapur'),
(342, 21, 'Dhule'),
(343, 21, 'Gadchiroli'),
(344, 21, 'Gondia'),
(345, 21, 'Hingoli'),
(346, 21, 'Jalgao'),
(347, 21, 'Jalna'),
(348, 21, 'Kolhapur'),
(349, 21, 'Latur'),
(350, 21, 'Mumbai City'),
(351, 21, 'Mumbai suburba'),
(352, 21, 'Nanded'),
(353, 21, 'Nandurbar'),
(354, 21, 'Nagpur'),
(355, 21, 'Nashik'),
(356, 21, 'Osmanabad'),
(357, 21, 'Parbhani'),
(358, 21, 'Pune'),
(359, 21, 'Raigad'),
(360, 21, 'Ratnagiri'),
(361, 21, 'Sangli'),
(362, 21, 'Satara'),
(363, 21, 'Sindhudurg'),
(364, 21, 'Solapur'),
(365, 21, 'Thane'),
(366, 21, 'Wardha'),
(367, 21, 'Washim'),
(368, 21, 'Yavatmal'),
(369, 22, 'Bishnupur'),
(370, 22, 'Churachandpur'),
(371, 22, 'Chandel'),
(372, 22, 'Imphal East'),
(373, 22, 'Senapati'),
(374, 22, 'Tamenglong'),
(375, 22, 'Thoubal'),
(376, 22, 'Ukhrul'),
(377, 22, 'Imphal West'),
(378, 23, 'East Garo Hills'),
(379, 23, 'East Khasi Hills'),
(380, 23, 'Jaintia Hills'),
(381, 23, 'Ri Bhoi'),
(382, 23, 'South Garo Hills'),
(383, 23, 'West Garo Hills'),
(384, 23, 'West Khasi Hills'),
(385, 24, 'Aizawl'),
(386, 24, 'Champhai'),
(387, 24, 'Kolasib'),
(388, 24, 'Lawngtlai'),
(389, 24, 'Lunglei'),
(390, 24, 'Mamit'),
(391, 24, 'Saiha'),
(392, 24, 'Serchhip'),
(393, 25, 'Dimapur'),
(394, 25, 'Kiphire'),
(395, 25, 'Kohima'),
(396, 25, 'Longleng'),
(397, 25, 'Mokokchung'),
(398, 25, 'Mo'),
(399, 25, 'Pere'),
(400, 25, 'Phek'),
(401, 25, 'Tuensang'),
(402, 25, 'Wokha'),
(403, 25, 'Zunheboto'),
(404, 26, 'Angul'),
(405, 26, 'Boudh (Bauda);'),
(406, 26, 'Bhadrak'),
(407, 26, 'Balangir'),
(408, 26, 'Bargarh (Baragarh);'),
(409, 26, 'Balasore'),
(410, 26, 'Cuttack'),
(411, 26, 'Debagarh (Deogarh);'),
(412, 26, 'Dhenkanal'),
(413, 26, 'Ganjam'),
(414, 26, 'Gajapati'),
(415, 26, 'Jharsuguda'),
(416, 26, 'Jajpur'),
(417, 26, 'Jagatsinghpur'),
(418, 26, 'Khordha'),
(419, 26, 'Kendujhar (Keonjhar);'),
(420, 26, 'Kalahandi'),
(421, 26, 'Kandhamal'),
(422, 26, 'Koraput'),
(423, 26, 'Kendrapara'),
(424, 26, 'Malkangiri'),
(425, 26, 'Mayurbhanj'),
(426, 26, 'Nabarangpur'),
(427, 26, 'Nuapada'),
(428, 26, 'Nayagarh'),
(429, 26, 'Puri'),
(430, 26, 'Rayagada'),
(431, 26, 'Sambalpur'),
(432, 26, 'Subarnapur (Sonepur);'),
(433, 26, 'Sundergarh'),
(434, 27, 'Karaikal'),
(435, 27, 'Mahe'),
(436, 27, 'Pondicherry'),
(437, 27, 'Yanam'),
(438, 28, 'Amritsar'),
(439, 28, 'Barnala'),
(440, 28, 'Bathinda'),
(441, 28, 'Firozpur'),
(442, 28, 'Faridkot'),
(443, 28, 'Fatehgarh Sahib'),
(444, 28, 'Fazilka'),
(445, 28, 'Gurdaspur'),
(446, 28, 'Hoshiarpur'),
(447, 28, 'Jalandhar'),
(448, 28, 'Kapurthala'),
(449, 28, 'Ludhiana'),
(450, 28, 'Mansa'),
(451, 28, 'Moga'),
(452, 28, 'Sri Muktsar Sahib'),
(453, 28, 'Pathankot'),
(454, 28, 'Patiala'),
(455, 28, 'Rupnagar'),
(456, 28, 'Ajitgarh (Mohali);'),
(457, 28, 'Sangrur'),
(458, 28, 'Shahid Bhagat Singh Nagar'),
(459, 28, 'Tarn Tara'),
(460, 29, 'Ajmer'),
(461, 29, 'Alwar'),
(462, 29, 'Bikaner'),
(463, 29, 'Barmer'),
(464, 29, 'Banswara'),
(465, 29, 'Bharatpur'),
(466, 29, 'Bara'),
(467, 29, 'Bundi'),
(468, 29, 'Bhilwara'),
(469, 29, 'Churu'),
(470, 29, 'Chittorgarh'),
(471, 29, 'Dausa'),
(472, 29, 'Dholpur'),
(473, 29, 'Dungapur'),
(474, 29, 'Ganganagar'),
(475, 29, 'Hanumangarh'),
(476, 29, 'Jhunjhunu'),
(477, 29, 'Jalore'),
(478, 29, 'Jodhpur'),
(479, 29, 'Jaipur'),
(480, 29, 'Jaisalmer'),
(481, 29, 'Jhalawar'),
(482, 29, 'Karauli'),
(483, 29, 'Kota'),
(484, 29, 'Nagaur'),
(485, 29, 'Pali'),
(486, 29, 'Pratapgarh'),
(487, 29, 'Rajsamand'),
(488, 29, 'Sikar'),
(489, 29, 'Sawai Madhopur'),
(490, 29, 'Sirohi'),
(491, 29, 'Tonk'),
(492, 29, 'Udaipur'),
(493, 30, 'East Sikkim'),
(494, 30, 'North Sikkim'),
(495, 30, 'South Sikkim'),
(496, 30, 'West Sikkim'),
(497, 31, 'Ariyalur'),
(498, 31, 'Chennai'),
(499, 31, 'Coimbatore'),
(500, 31, 'Cuddalore'),
(501, 31, 'Dharmapuri'),
(502, 31, 'Dindigul'),
(503, 31, 'Erode'),
(504, 31, 'Kanchipuram'),
(505, 31, 'Kanyakumari'),
(506, 31, 'Karur'),
(507, 31, 'Krishnagiri'),
(508, 31, 'Madurai'),
(509, 31, 'Nagapattinam'),
(510, 31, 'Nilgiris'),
(511, 31, 'Namakkal'),
(512, 31, 'Perambalur'),
(513, 31, 'Pudukkottai'),
(514, 31, 'Ramanathapuram'),
(515, 31, 'Salem'),
(516, 31, 'Sivaganga'),
(517, 31, 'Tirupur'),
(518, 31, 'Tiruchirappalli'),
(519, 31, 'Theni'),
(520, 31, 'Tirunelveli'),
(521, 31, 'Thanjavur'),
(522, 31, 'Thoothukudi'),
(523, 31, 'Tiruvallur'),
(524, 31, 'Tiruvarur'),
(525, 31, 'Tiruvannamalai'),
(526, 31, 'Vellore'),
(527, 31, 'Viluppuram'),
(528, 31, 'Virudhunagar'),
(529, 32, 'Adilabad'),
(530, 32, 'Hyderabad'),
(531, 32, 'Karimnagar'),
(532, 32, 'Khammam'),
(533, 32, 'Mahbubnagar'),
(534, 32, 'Medak'),
(535, 32, 'Nalgonda'),
(536, 32, 'Nizamabad'),
(537, 32, 'Ranga Reddy'),
(538, 32, 'Warangal'),
(539, 33, 'Dhalai'),
(540, 33, 'North Tripura'),
(541, 33, 'South Tripura'),
(542, 33, 'Khowai'),
(543, 33, 'West Tripura'),
(544, 35, 'Agra'),
(545, 35, 'Aligarh'),
(546, 35, 'Allahabad'),
(547, 35, 'Ambedkar Nagar'),
(548, 35, 'Auraiya'),
(549, 35, 'Azamgarh'),
(550, 35, 'Bagpat'),
(551, 35, 'Bahraich'),
(552, 35, 'Ballia'),
(553, 35, 'Balrampur'),
(554, 35, 'Banda'),
(555, 35, 'Barabanki'),
(556, 35, 'Bareilly'),
(557, 35, 'Basti'),
(558, 35, 'Bijnor'),
(559, 35, 'Budau'),
(560, 35, 'Bulandshahr'),
(561, 35, 'Chandauli'),
(562, 35, 'Amethi (Chhatrapati Shahuji Maharaj Nagar)'),
(563, 35, 'Chitrakoot'),
(564, 35, 'Deoria'),
(565, 35, 'Etah'),
(566, 35, 'Etawah'),
(567, 35, 'Faizabad'),
(568, 35, 'Farrukhabad'),
(569, 35, 'Fatehpur'),
(570, 35, 'Firozabad'),
(571, 35, 'Gautam Buddh Nagar'),
(572, 35, 'Ghaziabad'),
(573, 35, 'Ghazipur'),
(574, 35, 'Gonda'),
(575, 35, 'Gorakhpur'),
(576, 35, 'Hamirpur'),
(577, 35, 'Hardoi'),
(578, 35, 'Hathras (Mahamaya Nagar);'),
(579, 35, 'Jalau'),
(580, 35, 'Jaunpur'),
(581, 35, 'Jhansi'),
(582, 35, 'Jyotiba Phule Nagar'),
(583, 35, 'Kannauj'),
(584, 35, 'Kanpur Dehat (Ramabai Nagar);'),
(585, 35, 'Kanpur Nagar'),
(586, 35, 'Kanshi Ram Nagar'),
(587, 35, 'Kaushambi'),
(588, 35, 'Kushinagar'),
(589, 35, 'Lakhimpur Kheri'),
(590, 35, 'Lalitpur'),
(591, 35, 'Lucknow'),
(592, 35, 'Maharajganj'),
(593, 35, 'Mahoba'),
(594, 35, 'Mainpuri'),
(595, 35, 'Mathura'),
(596, 35, 'Mau'),
(597, 35, 'Meerut'),
(598, 35, 'Mirzapur'),
(599, 35, 'Moradabad'),
(600, 35, 'Muzaffarnagar'),
(601, 35, 'Panchsheel Nagar (Hapur);'),
(602, 35, 'Pilibhit'),
(603, 35, 'Pratapgarh'),
(604, 35, 'Raebareli'),
(605, 35, 'Rampur'),
(606, 35, 'Saharanpur'),
(607, 35, 'Sambhal(Bheem Nagar);'),
(608, 35, 'Sant Kabir Nagar'),
(609, 35, 'Sant Ravidas Nagar'),
(610, 35, 'Shahjahanpur'),
(611, 35, 'Shamli'),
(612, 35, 'Shravasti'),
(613, 35, 'Siddharthnagar'),
(614, 35, 'Sitapur'),
(615, 35, 'Sonbhadra'),
(616, 35, 'Sultanpur'),
(617, 35, 'Unnao'),
(618, 35, 'Varanasi'),
(619, 34, 'Almora'),
(620, 34, 'Bageshwar'),
(621, 34, 'Chamoli'),
(622, 34, 'Champawat'),
(623, 34, 'Dehradu'),
(624, 34, 'Haridwar'),
(625, 34, 'Nainital'),
(626, 34, 'Pauri Garhwal'),
(627, 34, 'Pithoragarh'),
(628, 34, 'Rudraprayag'),
(629, 34, 'Tehri Garhwal'),
(630, 34, 'Udham Singh Nagar'),
(631, 34, 'Uttarkashi'),
(632, 36, 'Bankura'),
(633, 36, 'Bardhama'),
(634, 36, 'Birbhum'),
(635, 36, 'Cooch Behar'),
(636, 36, 'Dakshin Dinajpur'),
(637, 36, 'Darjeeling'),
(638, 36, 'Hooghly'),
(639, 36, 'Howrah'),
(640, 36, 'Jalpaiguri'),
(641, 36, 'Kolkata'),
(642, 36, 'Maldah'),
(643, 36, 'Murshidabad'),
(644, 36, 'Nadia'),
(645, 36, 'North 24 Parganas'),
(646, 36, 'Paschim Medinipur'),
(647, 36, 'Purba Medinipur'),
(648, 36, 'Purulia'),
(649, 36, 'South 24 Parganas'),
(650, 36, 'Uttar Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `fb_final`
--

CREATE TABLE IF NOT EXISTS `fb_final` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(150) NOT NULL,
  `t_nme` varchar(150) NOT NULL,
  `c1_id` varchar(150) NOT NULL,
  `c1_nme` varchar(150) NOT NULL,
  `c1_pic` varchar(150) NOT NULL,
  `c2_id` varchar(150) NOT NULL,
  `c2_nme` varchar(150) NOT NULL,
  `c2_pic` varchar(150) NOT NULL,
  `venu` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `tit` text NOT NULL,
  `des` text NOT NULL,
  `ph` varchar(150) NOT NULL,
  `vdo` varchar(150) NOT NULL,
  `c1_score` varchar(150) NOT NULL,
  `c2_score` varchar(150) NOT NULL,
  `mtid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `fb_final`
--

INSERT INTO `fb_final` (`id`, `tid`, `t_nme`, `c1_id`, `c1_nme`, `c1_pic`, `c2_id`, `c2_nme`, `c2_pic`, `venu`, `date`, `time`, `tit`, `des`, `ph`, `vdo`, `c1_score`, `c2_score`, `mtid`, `st`) VALUES
(1, '2', 'Premier league', 'star123', 'All Stars', '1.jpeg', 'fox123', 'Deadly Foxes', '10.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-12', '10:00:00', 'All Stars won by 3 goal Against Foxes', 'The Portuguese''s appointment was confirmed on 27 May 2016 and he arrived at Old Trafford with a glittering, trophy-laden CV including two Champions League final wins with Porto and Inter Milan and very successful stints with Chelsea (twice) and Real Madrid.<br />\r\n<br />\r\nMourinho swiftly made his mark in Manchester, becoming the first United boss to win three pieces of silverware in his debut season by claiming the Community Shield, the EFL Cup and the Europa League - the latter completing the club''s all-time set of trophies and booking a return to the Champions League.<br />\r\n<br />\r\nIn 2017/18, Jose masterminded stunning wins over Arsenal, Chelsea, Liverpool and eventual champions Manchester City, to name just a few, and guided the Reds to a second-placed finish with 81 points - the club''s best league position and highest points tally for five years. He also steered the team to a third final in his short tenure so far and was unfortunate not to win the Emirates FA Cup against Chelsea.<br />\r\n<br />\r\nSuch cup runs have taken the number of competitive matches Mourinho has overseen at United to 120, way above the default 76 for two full Premier League campaigns. He currently has an impressive win ratio of 61.66 per cent after 74 victories, 25 draws and only 21 defeats.', '1.JPG', '1.com_636611166535094_HD.mp4', '3', '0', '7', 0),
(2, '2', 'Premier league', 'ice123', 'Ice Tigers', '4.gif', 'fox123', 'Deadly Foxes', '10.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-12', '10:00:00', 'Deadly Foxes Defeat the Ice Tigers', 'The Portuguese''s appointment was confirmed on 27 May 2016 and he arrived at Old Trafford with a glittering, trophy-laden CV including two Champions League final wins with Porto and Inter Milan and very successful stints with Chelsea (twice) and Real Madrid.<br />\r\n<br />\r\nMourinho swiftly made his mark in Manchester, becoming the first United boss to win three pieces of silverware in his debut season by claiming the Community Shield, the EFL Cup and the Europa League - the latter completing the club''s all-time set of trophies and booking a return to the Champions League.<br />\r\n<br />\r\nIn 2017/18, Jose masterminded stunning wins over Arsenal, Chelsea, Liverpool and eventual champions Manchester City, to name just a few, and guided the Reds to a second-placed finish with 81 points - the club''s best league position and highest points tally for five years. He also steered the team to a third final in his short tenure so far and was unfortunate not to win the Emirates FA Cup against Chelsea.<br />\r\n<br />\r\nSuch cup runs have taken the number of competitive matches Mourinho has overseen at United to 120, way above the default 76 for two full Premier League campaigns. He currently has an impressive win ratio of 61.66 per cent after 74 victories, 25 draws and only 21 defeats.', '2.jpg', '2.com_636611166535094_HD.mp4', '1', '2', '13', 0),
(3, '2', 'Premier league', 'em123', 'Empire', '6.jpg', 'uw123', 'Underworld', '5.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-13', '10:00:00', 'Big Win for Underworld ', 'The Portuguese''s appointment was confirmed on 27 May 2016 and he arrived at Old Trafford with a glittering, trophy-laden CV including two Champions League final wins with Porto and Inter Milan and very successful stints with Chelsea (twice) and Real Madrid.<br />\r\n<br />\r\nMourinho swiftly made his mark in Manchester, becoming the first United boss to win three pieces of silverware in his debut season by claiming the Community Shield, the EFL Cup and the Europa League - the latter completing the club''s all-time set of trophies and booking a return to the Champions League.<br />\r\n<br />\r\nIn 2017/18, Jose masterminded stunning wins over Arsenal, Chelsea, Liverpool and eventual champions Manchester City, to name just a few, and guided the Reds to a second-placed finish with 81 points - the club''s best league position and highest points tally for five years. He also steered the team to a third final in his short tenure so far and was unfortunate not to win the Emirates FA Cup against Chelsea.<br />\r\n<br />\r\nSuch cup runs have taken the number of competitive matches Mourinho has overseen at United to 120, way above the default 76 for two full Premier League campaigns. He currently has an impressive win ratio of 61.66 per cent after 74 victories, 25 draws and only 21 defeats.', '3.jpg', '3.com_636611166535094_HD.mp4', '5', '0', '9', 0),
(4, '2', 'Premier league', 'tit123', 'Titans', '12.png', 'ra123', 'Rams', '8.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-13', '10:00:00', 'Match ended in a Draw ', 'The Portuguese''s appointment was confirmed on 27 May 2016 and he arrived at Old Trafford with a glittering, trophy-laden CV including two Champions League final wins with Porto and Inter Milan and very successful stints with Chelsea (twice) and Real Madrid.<br />\r\n<br />\r\nMourinho swiftly made his mark in Manchester, becoming the first United boss to win three pieces of silverware in his debut season by claiming the Community Shield, the EFL Cup and the Europa League - the latter completing the club''s all-time set of trophies and booking a return to the Champions League.<br />\r\n<br />\r\nIn 2017/18, Jose masterminded stunning wins over Arsenal, Chelsea, Liverpool and eventual champions Manchester City, to name just a few, and guided the Reds to a second-placed finish with 81 points - the club''s best league position and highest points tally for five years. He also steered the team to a third final in his short tenure so far and was unfortunate not to win the Emirates FA Cup against Chelsea.<br />\r\n<br />\r\nSuch cup runs have taken the number of competitive matches Mourinho has overseen at United to 120, way above the default 76 for two full Premier League campaigns. He currently has an impressive win ratio of 61.66 per cent after 74 victories, 25 draws and only 21 defeats.', '4.jpg', '4.com_636611166535094_HD.mp4', '1', '1', '10', 0),
(5, '2', 'Premier league', 'uw123', 'Underworld', '5.jpg', 'em123', 'Empire', '6.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-14', '10:00:00', 'Empire Stike  Again!!!', 'The Portuguese''s appointment was confirmed on 27 May 2016 and he arrived at Old Trafford with a glittering, trophy-laden CV including two Champions League final wins with Porto and Inter Milan and very successful stints with Chelsea (twice) and Real Madrid.<br />\r\n<br />\r\nMourinho swiftly made his mark in Manchester, becoming the first United boss to win three pieces of silverware in his debut season by claiming the Community Shield, the EFL Cup and the Europa League - the latter completing the club''s all-time set of trophies and booking a return to the Champions League.<br />\r\n<br />\r\nIn 2017/18, Jose masterminded stunning wins over Arsenal, Chelsea, Liverpool and eventual champions Manchester City, to name just a few, and guided the Reds to a second-placed finish with 81 points - the club''s best league position and highest points tally for five years. He also steered the team to a third final in his short tenure so far and was unfortunate not to win the Emirates FA Cup against Chelsea.<br />\r\n<br />\r\nSuch cup runs have taken the number of competitive matches Mourinho has overseen at United to 120, way above the default 76 for two full Premier League campaigns. He currently has an impressive win ratio of 61.66 per cent after 74 victories, 25 draws and only 21 defeats.', '5.jpeg', '5.com_636611166535094_HD.mp4', '1', '2', '6', 0),
(6, '2', 'Premier league', 'star123', 'All Stars', '1.jpeg', 'wa123', 'Warriors', '7.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-18', '10:00:00', 'All Stars won Again', 'The Portuguese''s appointment was confirmed on 27 May 2016 and he arrived at Old Trafford with a glittering, trophy-laden CV including two Champions League final wins with Porto and Inter Milan and very successful stints with Chelsea (twice) and Real Madrid.<br />\r\n<br />\r\nMourinho swiftly made his mark in Manchester, becoming the first United boss to win three pieces of silverware in his debut season by claiming the Community Shield, the EFL Cup and the Europa League - the latter completing the club''s all-time set of trophies and booking a return to the Champions League.<br />\r\n<br />\r\nIn 2017/18, Jose masterminded stunning wins over Arsenal, Chelsea, Liverpool and eventual champions Manchester City, to name just a few, and guided the Reds to a second-placed finish with 81 points - the club''s best league position and highest points tally for five years. He also steered the team to a third final in his short tenure so far and was unfortunate not to win the Emirates FA Cup against Chelsea.<br />\r\n<br />\r\nSuch cup runs have taken the number of competitive matches Mourinho has overseen at United to 120, way above the default 76 for two full Premier League campaigns. He currently has an impressive win ratio of 61.66 per cent after 74 victories, 25 draws and only 21 defeats.', '6.jpg', '6.com_636611166535094_HD.mp4', '2', '1', '11', 0),
(7, '2', 'Premier league', 'ice123', 'Ice Tigers', '4.gif', 'tit123', 'Titans', '12.png', 'Greenhill Stadium,Trivandrum', '2019-06-20', '10:00:00', 'Lucky win for Tigers', 'The Portuguese''s appointment was confirmed on 27 May 2016 and he arrived at Old Trafford with a glittering, trophy-laden CV including two Champions League final wins with Porto and Inter Milan and very successful stints with Chelsea (twice) and Real Madrid.<br />\r\n<br />\r\nMourinho swiftly made his mark in Manchester, becoming the first United boss to win three pieces of silverware in his debut season by claiming the Community Shield, the EFL Cup and the Europa League - the latter completing the club''s all-time set of trophies and booking a return to the Champions League.<br />\r\n<br />\r\nIn 2017/18, Jose masterminded stunning wins over Arsenal, Chelsea, Liverpool and eventual champions Manchester City, to name just a few, and guided the Reds to a second-placed finish with 81 points - the club''s best league position and highest points tally for five years. He also steered the team to a third final in his short tenure so far and was unfortunate not to win the Emirates FA Cup against Chelsea.<br />\r\n<br />\r\nSuch cup runs have taken the number of competitive matches Mourinho has overseen at United to 120, way above the default 76 for two full Premier League campaigns. He currently has an impressive win ratio of 61.66 per cent after 74 victories, 25 draws and only 21 defeats.', '7.jpg', '7.com_636611166535094_HD.mp4', '1', '0', '8', 0),
(8, '2', 'Premier league', 'em123', 'Empire', '6.jpg', 'star123', 'All Stars', '1.jpeg', 'Greenhill Stadium,Trivandrum', '2019-06-20', '10:00:00', 'Tragic loss for Empire', 'The Portuguese''s appointment was confirmed on 27 May 2016 and he arrived at Old Trafford with a glittering, trophy-laden CV including two Champions League final wins with Porto and Inter Milan and very successful stints with Chelsea (twice) and Real Madrid.<br />\r\n<br />\r\nMourinho swiftly made his mark in Manchester, becoming the first United boss to win three pieces of silverware in his debut season by claiming the Community Shield, the EFL Cup and the Europa League - the latter completing the club''s all-time set of trophies and booking a return to the Champions League.<br />\r\n<br />\r\nIn 2017/18, Jose masterminded stunning wins over Arsenal, Chelsea, Liverpool and eventual champions Manchester City, to name just a few, and guided the Reds to a second-placed finish with 81 points - the club''s best league position and highest points tally for five years. He also steered the team to a third final in his short tenure so far and was unfortunate not to win the Emirates FA Cup against Chelsea.<br />\r\n<br />\r\nSuch cup runs have taken the number of competitive matches Mourinho has overseen at United to 120, way above the default 76 for two full Premier League campaigns. He currently has an impressive win ratio of 61.66 per cent after 74 victories, 25 draws and only 21 defeats.', '8.jpg', '8.com_636611166535094_HD.mp4', '0', '6', '12', 0),
(9, '2', 'Premier league', 'ice123', 'Ice Tigers', '4.gif', 'ra123', 'Rams', '8.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-20', '10:00:00', 'Ram Seacure their win by 3 goal', 'The Portuguese''s appointment was confirmed on 27 May 2016 and he arrived at Old Trafford with a glittering, trophy-laden CV including two Champions League final wins with Porto and Inter Milan and very successful stints with Chelsea (twice) and Real Madrid.<br />\r\n<br />\r\nMourinho swiftly made his mark in Manchester, becoming the first United boss to win three pieces of silverware in his debut season by claiming the Community Shield, the EFL Cup and the Europa League - the latter completing the club''s all-time set of trophies and booking a return to the Champions League.<br />\r\n<br />\r\nIn 2017/18, Jose masterminded stunning wins over Arsenal, Chelsea, Liverpool and eventual champions Manchester City, to name just a few, and guided the Reds to a second-placed finish with 81 points - the club''s best league position and highest points tally for five years. He also steered the team to a third final in his short tenure so far and was unfortunate not to win the Emirates FA Cup against Chelsea.<br />\r\n<br />\r\nSuch cup runs have taken the number of competitive matches Mourinho has overseen at United to 120, way above the default 76 for two full Premier League campaigns. He currently has an impressive win ratio of 61.66 per cent after 74 victories, 25 draws and only 21 defeats.', '9.jpg', '9.com_636611166535094_HD.mp4', '1', '3', '14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fb_match`
--

CREATE TABLE IF NOT EXISTS `fb_match` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(150) NOT NULL,
  `t_nme` varchar(150) NOT NULL,
  `c1_id` varchar(150) NOT NULL,
  `c1_nme` varchar(150) NOT NULL,
  `c1_pic` varchar(150) NOT NULL,
  `c2_id` varchar(150) NOT NULL,
  `c2_nme` varchar(150) NOT NULL,
  `c2_pic` varchar(150) NOT NULL,
  `venu` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `fb_match`
--

INSERT INTO `fb_match` (`id`, `tid`, `t_nme`, `c1_id`, `c1_nme`, `c1_pic`, `c2_id`, `c2_nme`, `c2_pic`, `venu`, `date`, `time`, `st`) VALUES
(6, '2', 'Premier league', 'uw123', 'Underworld', '5.jpg', 'em123', 'Empire', '6.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-14', '10:00:00', 1),
(7, '2', 'Premier league', 'star123', 'All Stars', '1.jpeg', 'fox123', 'Deadly Foxes', '10.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-12', '10:00:00', 1),
(8, '2', 'Premier league', 'ice123', 'Ice Tigers', '4.gif', 'tit123', 'Titans', '12.png', 'Greenhill Stadium,Trivandrum', '2019-06-20', '10:00:00', 1),
(9, '2', 'Premier league', 'em123', 'Empire', '6.jpg', 'uw123', 'Underworld', '5.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-13', '10:00:00', 1),
(10, '2', 'Premier league', 'tit123', 'Titans', '12.png', 'ra123', 'Rams', '8.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-13', '10:00:00', 1),
(11, '2', 'Premier league', 'star123', 'All Stars', '1.jpeg', 'wa123', 'Warriors', '7.jpg', 'Greenhill Stadium,Trivandrum', '2019-06-18', '10:00:00', 1),
(12, '2', 'Premier league', 'em123', 'Empire', '6.jpg', 'star123', 'All Stars', '1.jpeg', 'Greenhill Stadium,Trivandrum', '2019-06-20', '10:00:00', 1),
(13, '2', 'Premier league', 'ice123', 'Ice Tigers', '4.gif', 'fox123', 'Deadly Foxes', '10.jpg', 'Greenhill Stadium,Trivandrum', '2018-06-12', '10:00:00', 1),
(14, '2', 'Premier league', 'ice123', 'Ice Tigers', '4.gif', 'ra123', 'Rams', '8.jpg', 'Greenhill Stadium,Trivandrum', '2018-06-20', '10:00:00', 1),
(15, '2', 'Premier league', 'uw123', 'Underworld', '5.jpg', 'em123', 'Empire', '6.jpg', 'Greenhill Stadium,Trivandrum', '2020-02-06', '13:08:00', 0),
(16, '2', 'Premier league', 'uw123', 'Underworld', '5.jpg', 'fox123', 'Deadly Foxes', '10.jpg', 'Greenhill Stadium,Trivandrum', '2020-10-02', '15:49:00', 0),
(17, '2', 'Premier league', 'em123', 'Empire', '6.jpg', 'uw123', 'Underworld', '5.jpg', 'Greenhill Stadium,Trivandrum', '2020-10-21', '14:48:00', 0),
(18, '2', 'Premier league', 'ra123', 'Rams', '8.jpg', 'star123', 'All Stars', '1.jpeg', 'Greenhill Stadium,Trivandrum', '2020-08-05', '14:48:00', 0),
(19, '2', 'Premier league', 'em123', 'Empire', '6.jpg', 'tit123', 'Titans', '12.png', 'Greenhill Stadium,Trivandrum', '2020-10-02', '15:50:00', 0),
(20, '2', 'Premier league', 'fox123', 'Deadly Foxes', '10.jpg', 'wa123', 'Warriors', '7.jpg', 'Greenhill Stadium,Trivandrum', '2020-10-02', '16:51:00', 0),
(21, '2', 'Premier league', 'star123', 'All Stars', '1.jpeg', 'uw123', 'Underworld', '5.jpg', 'Greenhill Stadium,Trivandrum', '2020-08-03', '17:50:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fb_squad`
--

CREATE TABLE IF NOT EXISTS `fb_squad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `con` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `sqd` varchar(150) NOT NULL,
  `pos` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `c_nme` varchar(150) NOT NULL,
  `cid` varchar(150) NOT NULL,
  `goal` int(11) NOT NULL,
  `assist` int(11) NOT NULL,
  `def` int(11) NOT NULL,
  `sav` int(11) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=626 ;

--
-- Dumping data for table `fb_squad`
--

INSERT INTO `fb_squad` (`id`, `nme`, `age`, `dob`, `con`, `em`, `sqd`, `pos`, `ph`, `c_nme`, `cid`, `goal`, `assist`, `def`, `sav`, `st`) VALUES
(1, 'Paul Stephen Rachubka', '32', '1983-05-14', '9874563210', 'pa@gmail.com', '1', 'Goalkeeper', '1.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(2, 'Sandip Nandy', '31', '1992-05-21', '9874563210', 'pa@gmail.com', '24', 'Goalkeeper', '2.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(3, 'Subhasish Roy Chowdhury', '34', '1885-05-07', '9874563210', 'pa@gmail.com', '27', 'Goalkeeper', '3.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(4, 'Sujith Sasikumar', '28', '2018-05-15', '8796541230', 'pa@gmail.com', '25', 'Goalkeeper', '4.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(5, 'Sandesh Jhingan', '29', '1883-05-14', '9874563210', 'pa@gmail.com', '21', 'Defender', '5.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(6, 'Lalruatthara', '31', '1883-05-10', '9874563215', 'pa@gmail.com', '39', 'Defender', '6.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(7, 'Samuel Shadap', '34', '1883-05-14', '8796541235', 'pa@gmail.com', '28', 'Defender', '7.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(8, 'Rino Anto', '32', '1884-05-14', '9874563210', 'pa@gmail.com', '31', 'Defender', '8.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(9, 'Nemanja LakiÄ‡-PeÅ¡iÄ‡', '33', '1885-05-15', '9874563210', 'pa@gmail.com', '4', 'Defender', '9.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(10, 'Wesley Michael Brown', '34', '1992-05-15', '9874563210', 'pa@gmail.com', '6', 'Defender', '10.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(11, 'Victor Herrero Pulga', '85', '1992-05-16', '8796541230', 'pa@gmail.com', '85', 'Midfielder', '11.png', 'All Stars', 'star123', 0, 9, 0, 0, 0),
(12, 'Deependra Singh Negi', '32', '1884-05-13', '9874563210', 'pa@gmail.com', '15', 'Midfielder', '12.png', 'All Stars', 'star123', 0, 5, 0, 0, 0),
(13, 'Kizito Keziron', '32', '1992-05-10', '9874563210', 'pa@gmail.com', '17', 'Midfielder', '13.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(14, 'Arata Izumi', '32', '1993-05-21', '9874563210', 'pa@gmail.com', '8', 'Midfielder', '14.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(15, 'Sahal Abdul Samad', '28', '1884-05-17', '9874563215', 'pa@gmail.com', '18', 'Midfielder', '15.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(16, 'Milan Singh Ongnam', '29', '1992-05-22', '9874563215', 'p@gmail.com', '12', 'Midfielder', '16.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(17, 'Ajith Sivan', '29', '1992-05-22', '8796541235', 'p@gmail.com', '36', 'Midfielder', '17.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(18, 'Prasanth Karuthadathkuni', '28', '1991-05-14', '7896541235', 'p@gmail.com', '11', 'Midfielder', '18.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(19, 'GuÃ°jÃ³n Baldvinsson', '29', '1884-05-08', '8796541230', 'p@gmail.com', '16', 'Forward', '19.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(20, 'Iain Edward Hume', '31', '1991-05-22', '9874563210', 'p@gmail.com', '10', 'Forward', '20.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(21, 'Karan Sawhney', '27', '1991-05-16', '9638527415', 'p@gmail.com', '7', 'Forward', '21.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(22, 'C K Vineeth', '29', '1991-05-01', '8796541235', 'p@gmail.com', '13', 'Forward', '22.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(23, 'Dimitar Berbatov', '28', '1993-05-22', '9638527415', 'p@gmail.com', '9', 'Forward', '23.png', 'All Stars', 'star123', 0, 0, 0, 0, 0),
(24, 'Paul Stephen Rachubka', '32', '1983-05-14', '9874563210', 'pa@gmail.com', '1', 'Goalkeeper', '1.png', 'Ice Tigers', 'ice123', 0, 0, 0, 5, 0),
(25, 'Sandip Nandy', '31', '1992-05-21', '9874563210', 'pa@gmail.com', '24', 'Goalkeeper', '2.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(26, 'Subhasish Roy Chowdhury', '34', '1885-05-07', '9874563210', 'pa@gmail.com', '27', 'Goalkeeper', '3.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(27, 'Sujith Sasikumar', '28', '2018-05-15', '8796541230', 'pa@gmail.com', '25', 'Goalkeeper', '4.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(532, 'Victor Herrero Pulga', '85', '1992-05-16', '8796541230', 'pa@gmail.com', '85', 'Midfielder', '11.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(533, 'Deependra Singh Negi', '32', '1884-05-13', '9874563210', 'pa@gmail.com', '15', 'Midfielder', '12.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(534, 'Kizito Keziron', '32', '1992-05-10', '9874563210', 'pa@gmail.com', '17', 'Midfielder', '13.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(535, 'Arata Izumi', '32', '1993-05-21', '9874563210', 'pa@gmail.com', '8', 'Midfielder', '14.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(536, 'Sahal Abdul Samad', '28', '1884-05-17', '9874563215', 'pa@gmail.com', '18', 'Midfielder', '15.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(537, 'Milan Singh Ongnam', '29', '1992-05-22', '9874563215', 'p@gmail.com', '12', 'Midfielder', '16.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(538, 'Ajith Sivan', '29', '1992-05-22', '8796541235', 'p@gmail.com', '36', 'Midfielder', '17.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(539, 'Prasanth Karuthadathkuni', '28', '1991-05-14', '7896541235', 'p@gmail.com', '11', 'Midfielder', '18.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(540, 'GuÃ°jÃ³n Baldvinsson', '29', '1884-05-08', '8796541230', 'p@gmail.com', '16', 'Forward', '19.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(541, 'Iain Edward Hume', '31', '1991-05-22', '9874563210', 'p@gmail.com', '10', 'Forward', '20.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(542, 'Karan Sawhney', '27', '1991-05-16', '9638527415', 'p@gmail.com', '7', 'Forward', '21.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(543, 'C K Vineeth', '29', '1991-05-01', '8796541235', 'p@gmail.com', '13', 'Forward', '22.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(544, 'Dimitar Berbatov', '28', '1993-05-22', '9638527415', 'p@gmail.com', '9', 'Forward', '23.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(545, 'Paul Stephen Rachubka', '32', '1983-05-14', '9874563210', 'pa@gmail.com', '1', 'Goalkeeper', '1.png', 'Underworld', 'uw123', 0, 0, 0, 10, 0),
(546, 'Sandip Nandy', '31', '1992-05-21', '9874563210', 'pa@gmail.com', '24', 'Goalkeeper', '2.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(547, 'Subhasish Roy Chowdhury', '34', '1885-05-07', '9874563210', 'pa@gmail.com', '27', 'Goalkeeper', '3.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(548, 'Sujith Sasikumar', '28', '2018-05-15', '8796541230', 'pa@gmail.com', '25', 'Goalkeeper', '4.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(549, 'Victor Herrero Pulga', '85', '1992-05-16', '8796541230', 'pa@gmail.com', '85', 'Midfielder', '11.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(550, 'Deependra Singh Negi', '32', '1884-05-13', '9874563210', 'pa@gmail.com', '15', 'Midfielder', '12.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(551, 'Kizito Keziron', '32', '1992-05-10', '9874563210', 'pa@gmail.com', '17', 'Midfielder', '13.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(552, 'Arata Izumi', '32', '1993-05-21', '9874563210', 'pa@gmail.com', '8', 'Midfielder', '14.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(553, 'Sahal Abdul Samad', '28', '1884-05-17', '9874563215', 'pa@gmail.com', '18', 'Midfielder', '15.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(554, 'Milan Singh Ongnam', '29', '1992-05-22', '9874563215', 'p@gmail.com', '12', 'Midfielder', '16.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(555, 'Ajith Sivan', '29', '1992-05-22', '8796541235', 'p@gmail.com', '36', 'Midfielder', '17.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(556, 'Prasanth Karuthadathkuni', '28', '1991-05-14', '7896541235', 'p@gmail.com', '11', 'Midfielder', '18.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(557, 'GuÃ°jÃ³n Baldvinsson', '29', '1884-05-08', '8796541230', 'p@gmail.com', '16', 'Forward', '19.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(558, 'Iain Edward Hume', '31', '1991-05-22', '9874563210', 'p@gmail.com', '10', 'Forward', '20.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(559, 'Karan Sawhney', '27', '1991-05-16', '9638527415', 'p@gmail.com', '7', 'Forward', '21.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(560, 'C K Vineeth', '29', '1991-05-01', '8796541235', 'p@gmail.com', '13', 'Forward', '22.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(561, 'Dimitar Berbatov', '28', '1993-05-22', '9638527415', 'p@gmail.com', '9', 'Forward', '23.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(562, 'Sandesh Jhingan', '29', '1883-05-14', '9874563210', 'pa@gmail.com', '21', 'Defender', '5.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(563, 'Lalruatthara', '31', '1883-05-10', '9874563215', 'pa@gmail.com', '39', 'Defender', '6.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(564, 'Samuel Shadap', '34', '1883-05-14', '8796541235', 'pa@gmail.com', '28', 'Defender', '7.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(565, 'Rino Anto', '32', '1884-05-14', '9874563210', 'pa@gmail.com', '31', 'Defender', '8.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(566, 'Nemanja LakiÄ‡-PeÅ¡iÄ‡', '33', '1885-05-15', '9874563210', 'pa@gmail.com', '4', 'Defender', '9.png', 'Ice Tigers', 'ice123', 0, 0, 2, 0, 0),
(567, 'Wesley Michael Brown', '34', '1992-05-15', '9874563210', 'pa@gmail.com', '6', 'Defender', '10.png', 'Ice Tigers', 'ice123', 0, 0, 0, 0, 0),
(568, 'Sandesh Jhingan', '29', '1883-05-14', '9874563210', 'pa@gmail.com', '21', 'Defender', '5.png', 'Underworld', 'uw123', 0, 0, 16, 0, 0),
(569, 'Lalruatthara', '31', '1883-05-10', '9874563215', 'pa@gmail.com', '39', 'Defender', '6.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(570, 'Samuel Shadap', '34', '1883-05-14', '8796541235', 'pa@gmail.com', '28', 'Defender', '7.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(571, 'Rino Anto', '32', '1884-05-14', '9874563210', 'pa@gmail.com', '31', 'Defender', '8.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(572, 'Nemanja LakiÄ‡-PeÅ¡iÄ‡', '33', '1885-05-15', '9874563210', 'pa@gmail.com', '4', 'Defender', '9.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(573, 'Wesley Michael Brown', '34', '1992-05-15', '9874563210', 'pa@gmail.com', '6', 'Defender', '10.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(574, 'Sandesh Jhingan', '29', '1883-05-14', '9874563210', 'pa@gmail.com', '21', 'Defender', '5.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(575, 'Lalruatthara', '31', '1883-05-10', '9874563215', 'pa@gmail.com', '39', 'Defender', '6.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(576, 'Samuel Shadap', '34', '1883-05-14', '8796541235', 'pa@gmail.com', '28', 'Defender', '7.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(577, 'Rino Anto', '32', '1884-05-14', '9874563210', 'pa@gmail.com', '31', 'Defender', '8.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(578, 'Nemanja LakiÄ‡-PeÅ¡iÄ‡', '33', '1885-05-15', '9874563210', 'pa@gmail.com', '4', 'Defender', '9.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(579, 'Wesley Michael Brown', '34', '1992-05-15', '9874563210', 'pa@gmail.com', '6', 'Defender', '10.png', 'Underworld', 'uw123', 0, 0, 0, 0, 0),
(580, 'Paul Stephen Rachubka', '32', '1983-05-14', '9874563210', 'pa@gmail.com', '1', 'Goalkeeper', '1.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(581, 'Sandip Nandy', '31', '1992-05-21', '9874563210', 'pa@gmail.com', '24', 'Goalkeeper', '2.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(582, 'Subhasish Roy Chowdhury', '34', '1885-05-07', '9874563210', 'pa@gmail.com', '27', 'Goalkeeper', '3.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(583, 'Sujith Sasikumar', '28', '2018-05-15', '8796541230', 'pa@gmail.com', '25', 'Goalkeeper', '4.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(584, 'Sandesh Jhingan', '29', '1883-05-14', '9874563210', 'pa@gmail.com', '21', 'Defender', '5.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(585, 'Lalruatthara', '31', '1883-05-10', '9874563215', 'pa@gmail.com', '39', 'Defender', '6.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(586, 'Samuel Shadap', '34', '1883-05-14', '8796541235', 'pa@gmail.com', '28', 'Defender', '7.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(587, 'Rino Anto', '32', '1884-05-14', '9874563210', 'pa@gmail.com', '31', 'Defender', '8.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(588, 'Nemanja LakiÄ‡-PeÅ¡iÄ‡', '33', '1885-05-15', '9874563210', 'pa@gmail.com', '4', 'Defender', '9.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(589, 'Wesley Michael Brown', '34', '1992-05-15', '9874563210', 'pa@gmail.com', '6', 'Defender', '10.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(590, 'Victor Herrero Pulga', '85', '1992-05-16', '8796541230', 'pa@gmail.com', '85', 'Midfielder', '11.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(591, 'Deependra Singh Negi', '32', '1884-05-13', '9874563210', 'pa@gmail.com', '15', 'Midfielder', '12.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(592, 'Kizito Keziron', '32', '1992-05-10', '9874563210', 'pa@gmail.com', '17', 'Midfielder', '13.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(593, 'Arata Izumi', '32', '1993-05-21', '9874563210', 'pa@gmail.com', '8', 'Midfielder', '14.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(594, 'Sahal Abdul Samad', '28', '1884-05-17', '9874563215', 'pa@gmail.com', '18', 'Midfielder', '15.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(595, 'Milan Singh Ongnam', '29', '1992-05-22', '9874563215', 'p@gmail.com', '12', 'Midfielder', '16.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(596, 'Ajith Sivan', '29', '1992-05-22', '8796541235', 'p@gmail.com', '36', 'Midfielder', '17.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(597, 'Prasanth Karuthadathkuni', '28', '1991-05-14', '7896541235', 'p@gmail.com', '11', 'Midfielder', '18.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(598, 'GuÃ°jÃ³n Baldvinsson', '29', '1884-05-08', '8796541230', 'p@gmail.com', '16', 'Forward', '19.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(599, 'Iain Edward Hume', '31', '1991-05-22', '9874563210', 'p@gmail.com', '10', 'Forward', '20.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(600, 'Karan Sawhney', '27', '1991-05-16', '9638527415', 'p@gmail.com', '7', 'Forward', '21.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(601, 'C K Vineeth', '29', '1991-05-01', '8796541235', 'p@gmail.com', '13', 'Forward', '22.png', 'Empire', 'em123', 0, 0, 0, 0, 0),
(602, 'Dimitar Berbatov', '28', '1993-05-22', '9638527415', 'p@gmail.com', '9', 'Forward', '23.png', 'Empire', 'em123', 2, 0, 0, 0, 0),
(603, 'Paul Stephen Rachubka', '32', '1983-05-14', '9874563210', 'pa@gmail.com', '1', 'Goalkeeper', '1.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(604, 'Sandip Nandy', '31', '1992-05-21', '9874563210', 'pa@gmail.com', '24', 'Goalkeeper', '2.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(605, 'Subhasish Roy Chowdhury', '34', '1885-05-07', '9874563210', 'pa@gmail.com', '27', 'Goalkeeper', '3.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(606, 'Sujith Sasikumar', '28', '2018-05-15', '8796541230', 'pa@gmail.com', '25', 'Goalkeeper', '4.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(607, 'Sandesh Jhingan', '29', '1883-05-14', '9874563210', 'pa@gmail.com', '21', 'Defender', '5.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(608, 'Lalruatthara', '31', '1883-05-10', '9874563215', 'pa@gmail.com', '39', 'Defender', '6.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(609, 'Samuel Shadap', '34', '1883-05-14', '8796541235', 'pa@gmail.com', '28', 'Defender', '7.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(610, 'Rino Anto', '32', '1884-05-14', '9874563210', 'pa@gmail.com', '31', 'Defender', '8.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(611, 'Nemanja LakiÄ‡-PeÅ¡iÄ‡', '33', '1885-05-15', '9874563210', 'pa@gmail.com', '4', 'Defender', '9.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(612, 'Wesley Michael Brown', '34', '1992-05-15', '9874563210', 'pa@gmail.com', '6', 'Defender', '10.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(613, 'Victor Herrero Pulga', '85', '1992-05-16', '8796541230', 'pa@gmail.com', '85', 'Midfielder', '11.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(614, 'Deependra Singh Negi', '32', '1884-05-13', '9874563210', 'pa@gmail.com', '15', 'Midfielder', '12.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(615, 'Kizito Keziron', '32', '1992-05-10', '9874563210', 'pa@gmail.com', '17', 'Midfielder', '13.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(616, 'Arata Izumi', '32', '1993-05-21', '9874563210', 'pa@gmail.com', '8', 'Midfielder', '14.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(617, 'Sahal Abdul Samad', '28', '1884-05-17', '9874563215', 'pa@gmail.com', '18', 'Midfielder', '15.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(618, 'Milan Singh Ongnam', '29', '1992-05-22', '9874563215', 'p@gmail.com', '12', 'Midfielder', '16.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(619, 'Ajith Sivan', '29', '1992-05-22', '8796541235', 'p@gmail.com', '36', 'Midfielder', '17.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(620, 'Prasanth Karuthadathkuni', '28', '1991-05-14', '7896541235', 'p@gmail.com', '11', 'Midfielder', '18.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(621, 'GuÃ°jÃ³n Baldvinsson', '29', '1884-05-08', '8796541230', 'p@gmail.com', '16', 'Forward', '19.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(622, 'Iain Edward Hume', '31', '1991-05-22', '9874563210', 'p@gmail.com', '10', 'Forward', '20.png', 'Warriors', 'wa123', 7, 0, 0, 0, 0),
(623, 'Karan Sawhney', '27', '1991-05-16', '9638527415', 'p@gmail.com', '7', 'Forward', '21.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(624, 'C K Vineeth', '29', '1991-05-01', '8796541235', 'p@gmail.com', '13', 'Forward', '22.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0),
(625, 'Dimitar Berbatov', '28', '1993-05-22', '9638527415', 'p@gmail.com', '9', 'Forward', '23.png', 'Warriors', 'wa123', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gro_data`
--

CREATE TABLE IF NOT EXISTS `gro_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `typ` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `cont` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gro_data`
--

INSERT INTO `gro_data` (`id`, `nme`, `typ`, `addr`, `la`, `lo`, `cont`, `em`, `pass`, `ph`, `st`) VALUES
(1, 'Sportika Club', 'Turf', 'Pulimoodu Junction, Santhi Nagar, Pulimoodu, Thiruvananthapuram, Kerala', 8.49658, 76.9508, '7984653215', 'spot@gmail.com', '123', '4175048.jpg', 1),
(2, 'Sparta Arena', 'Turf', 'Kazhakootam - Kovalam Bypass Road, Chacka, Thiruvananthapuram, Kerala, India', 8.49393, 76.9176, '7897894568', 'sparta@gmail.com', '123', '9395751.jpg', 1),
(3, 'Ivanous Ground', 'Normal', 'Nalanchira Junction, Thiruvananthapuram, Kerala', 8.54817, 76.9396, '7891235468', 'mar@gmail.com', '123', '4902618.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `g_typ`
--

CREATE TABLE IF NOT EXISTS `g_typ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `gid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `g_typ`
--

INSERT INTO `g_typ` (`id`, `nme`, `gid`, `st`) VALUES
(1, 'Football', 'spot@gmail.com', 0),
(2, 'Cricket', 'spot@gmail.com', 0),
(4, 'Badminton', 'spot@gmail.com', 0),
(5, 'Tennis', 'spot@gmail.com', 0),
(6, 'Basketball', 'spot@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lik`
--

CREATE TABLE IF NOT EXISTS `lik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lik`
--

INSERT INTO `lik` (`id`, `tid`, `uid`, `st`) VALUES
(1, '1', 'ma@gmail.com', 0),
(2, '2', 'ma@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typ` varchar(150) NOT NULL,
  `pos` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `typ`, `pos`, `st`) VALUES
(1, 'Football', 'Forward', 1),
(2, 'Football', 'Defender', 1),
(3, 'Football', 'Midfielder', 1),
(4, 'Football', 'Goalkeeper', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE IF NOT EXISTS `pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `brand` varchar(150) NOT NULL,
  `prc` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `nme`, `brand`, `prc`, `ph`, `sid`, `st`) VALUES
(1, 'Puma FUTURE 2.4 FG/AG', 'Puma', '2000', '303137.jpg', 'star@gmail.com', 0),
(2, 'Nike Football', 'Nike', '1000', '959158.jpg', 'star@gmail.com', 0),
(3, 'Adidas Wrist Band', 'Adidas', '500', '148257.jpeg', 'star@gmail.com', 0),
(4, 'Puma Ferrari Jacket', 'Puma', '7000', '360760.jpg', 'star@gmail.com', 0),
(5, 'Nike Jordan Shoes', 'Nike', '5000', '903814.jpg', 'star@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_data`
--

CREATE TABLE IF NOT EXISTS `shop_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `cont` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shop_data`
--

INSERT INTO `shop_data` (`id`, `nme`, `addr`, `la`, `lo`, `cont`, `em`, `pass`, `ph`, `st`) VALUES
(1, 'Sports Gear international', 'Pulimoodu Junction, Santhi Nagar, Pulimoodu, Thiruvananthapuram, Kerala', 8.49478, 76.9483, '9874651325', 'sgi@gmail.com', '123', '9308135.jpg', 1),
(2, 'All Stars Sports Wear', 'East Fort, Pavithra Nagar, East Fort, Pazhavangadi, Thiruvananthapuram, Kerala, India', 8.48579, 76.9464, '7895461236', 'star@gmail.com', '123', '9836853.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `StCode` int(11) NOT NULL AUTO_INCREMENT,
  `StateName` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`StCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StCode`, `StateName`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE IF NOT EXISTS `tim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typ` varchar(150) NOT NULL,
  `frm` time NOT NULL,
  `to` time NOT NULL,
  `amt` varchar(150) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `gid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `typ`, `frm`, `to`, `amt`, `sid`, `gid`, `st`) VALUES
(1, 'Full Court', '09:00:00', '10:00:00', '1000', '1', 'spot@gmail.com', 0),
(2, 'Half Court', '10:00:00', '11:00:00', '500', '1', 'spot@gmail.com', 0),
(3, 'Half Court', '10:00:00', '11:00:00', '500', '1', 'spot@gmail.com', 0),
(4, 'Full Court', '11:00:00', '12:00:00', '1000', '1', 'spot@gmail.com', 0),
(5, 'Full Court', '10:00:00', '11:00:00', '1000', '2', 'spot@gmail.com', 0),
(6, 'Full Court', '11:00:00', '12:00:00', '1000', '2', 'spot@gmail.com', 0),
(7, 'Full Court', '12:00:00', '13:00:00', '1000', '2', 'spot@gmail.com', 0),
(8, 'Full Court', '10:00:00', '11:00:00', '1000', '4', 'spot@gmail.com', 0),
(9, 'Full Court', '11:00:00', '12:00:00', '1000', '4', 'spot@gmail.com', 0),
(10, 'Full Court', '12:00:00', '13:00:00', '1000', '4', 'spot@gmail.com', 0),
(11, 'Full Court', '10:00:00', '11:00:00', '1000', '5', 'spot@gmail.com', 0),
(12, 'Full Court', '11:00:00', '12:00:00', '1000', '5', 'spot@gmail.com', 0),
(13, 'Full Court', '10:00:00', '11:00:00', '1000', '6', 'spot@gmail.com', 0),
(14, 'Full Court', '11:00:00', '12:00:00', '1000', '6', 'spot@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tor`
--

CREATE TABLE IF NOT EXISTS `tor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `des` text NOT NULL,
  `typ` varchar(150) NOT NULL,
  `venu` varchar(150) NOT NULL,
  `dt` varchar(150) NOT NULL,
  `last_dt` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tor`
--

INSERT INTO `tor` (`id`, `nme`, `des`, `typ`, `venu`, `dt`, `last_dt`, `ph`, `st`) VALUES
(1, 'Champions League', 'The UEFA Champions League is an annual continental club football competition organised by the Union of European Football Associations (UEFA) and contested by top-division European clubs. It is one of the most prestigious tournaments in the world and the most prestigious club competition in European football, played by the national league champions (and, for some nations, one or more runners-up) of the strongest UEFA national associations. The UEFA Champions League final is the most watched annual sporting event worldwide. The final of the 2012â€“13 tournament had the highest TV ratings to date, drawing 360 million television viewers.[1]<br />\r\n<br />\r\nIntroduced in 1992, the competition replaced the European Champion Clubs'' Cup, or simply European Cup, which had run since 1955, adding a group stage to the competition and allowing multiple entrants from certain countries.[2] The pre-1992 competition was initially a straight knockout tournament open only to the champion club of each country. During the 1990s, the format was expanded, incorporating a round-robin group stage to include clubs that finished runner-up of some nations'' top-level league.[2] While most of Europe''s national leagues can still only enter their national league champion, Europe''s strongest national leagues now provide up to five teams for the competition.[3][4] Clubs that finish next-in-line in each nation''s top level league, having not qualified for the UEFA Champions League competition, are eligible for the next-level UEFA Europa League competition.', 'Football', 'Greenhill Stadium,Trivandrum', '2018-06-20', '2018-06-12', '1.jpg', 0),
(2, 'Premier league', 'The UEFA Champions League is an annual continental club football competition organised by the Union of European Football Associations (UEFA) and contested by top-division European clubs. It is one of the most prestigious tournaments in the world and the most prestigious club competition in European football, played by the national league champions (and, for some nations, one or more runners-up) of the strongest UEFA national associations. The UEFA Champions League final is the most watched annual sporting event worldwide. The final of the 2012â€“13 tournament had the highest TV ratings to date, drawing 360 million television viewers.[1]<br />\r\n<br />\r\nIntroduced in 1992, the competition replaced the European Champion Clubs'' Cup, or simply European Cup, which had run since 1955, adding a group stage to the competition and allowing multiple entrants from certain countries.[2] The pre-1992 competition was initially a straight knockout tournament open only to the champion club of each country. During the 1990s, the format was expanded, incorporating a round-robin group stage to include clubs that finished runner-up of some nations'' top-level league.[2] While most of Europe''s national leagues can still only enter their national league champion, Europe''s strongest national leagues now provide up to five teams for the competition.[3][4] Clubs that finish next-in-line in each nation''s top level league, having not qualified for the UEFA Champions League competition, are eligible for the next-level UEFA Europa League competition.', 'Football', 'Greenhill Stadium,Trivandrum', '2018-06-28', '2018-06-12', '2.png', 0),
(3, 'Europa League', 'The UEFA Champions League is an annual continental club football competition organised by the Union of European Football Associations (UEFA) and contested by top-division European clubs. It is one of the most prestigious tournaments in the world and the most prestigious club competition in European football, played by the national league champions (and, for some nations, one or more runners-up) of the strongest UEFA national associations. The UEFA Champions League final is the most watched annual sporting event worldwide. The final of the 2012â€“13 tournament had the highest TV ratings to date, drawing 360 million television viewers.[1]<br />\r\n<br />\r\nIntroduced in 1992, the competition replaced the European Champion Clubs'' Cup, or simply European Cup, which had run since 1955, adding a group stage to the competition and allowing multiple entrants from certain countries.[2] The pre-1992 competition was initially a straight knockout tournament open only to the champion club of each country. During the 1990s, the format was expanded, incorporating a round-robin group stage to include clubs that finished runner-up of some nations'' top-level league.[2] While most of Europe''s national leagues can still only enter their national league champion, Europe''s strongest national leagues now provide up to five teams for the competition.[3][4] Clubs that finish next-in-line in each nation''s top level league, having not qualified for the UEFA Champions League competition, are eligible for the next-level UEFA Europa League competition.', 'Football', 'Greenhill Stadium,Trivandrum', '2018-06-22', '2018-06-11', '3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tor_reg`
--

CREATE TABLE IF NOT EXISTS `tor_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(150) NOT NULL,
  `t_nme` varchar(150) NOT NULL,
  `cid` varchar(150) NOT NULL,
  `c_nme` varchar(150) NOT NULL,
  `c_ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tor_reg`
--

INSERT INTO `tor_reg` (`id`, `tid`, `t_nme`, `cid`, `c_nme`, `c_ph`, `st`) VALUES
(2, '2', 'Premier league', 'uw123', 'Underworld', '5.jpg', 0),
(3, '1', 'Champions League', 'uw123', 'Underworld', '5.jpg', 0),
(4, '2', 'Premier league', 'star123', 'All Stars', '1.jpeg', 0),
(5, '2', 'Premier league', 'ice123', 'Ice Tigers', '4.gif', 0),
(6, '2', 'Premier league', 'fox123', 'Deadly Foxes', '10.jpg', 0),
(7, '2', 'Premier league', 'em123', 'Empire', '6.jpg', 0),
(8, '2', 'Premier league', 'wa123', 'Warriors', '7.jpg', 0),
(9, '2', 'Premier league', 'tit123', 'Titans', '12.png', 0),
(10, '2', 'Premier league', 'ra123', 'Rams', '8.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_msg`
--

CREATE TABLE IF NOT EXISTS `t_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(150) NOT NULL,
  `msg` text NOT NULL,
  `uid` varchar(150) NOT NULL,
  `dt` date NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_msg`
--

INSERT INTO `t_msg` (`id`, `tid`, `msg`, `uid`, `dt`, `st`) VALUES
(2, '1', 'Its shame the foxes lost', 'ma@gmail.com', '2020-03-18', 0),
(3, '1', 'I am sure next time they will win', 'ma@gmail.com', '2020-03-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `nme`, `cont`, `em`, `pass`, `ph`, `st`) VALUES
(1, 'Manu Krishna', '7896541324', 'ma@gmail.com', '123', '1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `typ` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `uid`, `pas`, `typ`, `st`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'kr123', '123', 'state', 1),
(3, 'star123', '12345', 'club', 1),
(4, 'ice123', '12345', 'club', 1),
(5, 'uw123', '12345', 'club', 1),
(6, 'em123', '12345', 'club', 1),
(7, 'wa123', '12345', 'club', 1),
(8, 'ra123', '12345', 'club', 1),
(9, 'pr123', '12345', 'club', 1),
(10, 'fox123', '12345', 'club', 1),
(11, 'cross123', '12345', 'club', 1),
(12, 'tit123', '12345', 'club', 1),
(13, 'ma@gmail.com', '123', 'user', 1),
(14, 'dragon123', '12345', 'club', 1),
(15, 'sgi@gmail.com', '123', 'shop', 1),
(16, 'star@gmail.com', '123', 'shop', 1),
(17, 'spot@gmail.com', '123', 'gro', 1),
(18, 'sparta@gmail.com', '123', 'gro', 1),
(19, 'mar@gmail.com', '123', 'gro', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
