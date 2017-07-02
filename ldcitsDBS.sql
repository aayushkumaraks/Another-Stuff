-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2017 at 08:22 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ldcitsDBS`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_info`
--

CREATE TABLE `college_info` (
  `id` int(11) NOT NULL,
  `clg_name` varchar(90) NOT NULL,
  `website` varchar(90) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `s_email` varchar(100) DEFAULT NULL,
  `p_num` varchar(10) NOT NULL,
  `s_num` varchar(10) DEFAULT NULL,
  `campus_addr` varchar(300) NOT NULL,
  `clg_addr` varchar(300) NOT NULL,
  `p_welcome` varchar(1000) NOT NULL,
  `s_welcome` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_info`
--

INSERT INTO `college_info` (`id`, `clg_name`, `website`, `logo`, `p_email`, `s_email`, `p_num`, `s_num`, `campus_addr`, `clg_addr`, `p_welcome`, `s_welcome`) VALUES
(1, 'LDC Institute Of Technical Studies', 'www.ldcinstitute.com', 'banner%20LDC.png', 'info@ldcinstitute.com', 'mail@ldcinstiute.com', '9793960001', '5335282050', '22 Milestone, Allahabad-Pratapgarh Highway, Soraon, Allahabad', 'M.G. Marg Palace Cinema Compound Allahabad, Pin-Code: 211001', 'The genesis of LDC Institute of Technical Studies is attributable to the inspiration from Late Shri Devi Chand to contribute significantly towards enrichment of the high quality talent pool of technical & managerial human resource with international benchmarks. The founder chairman of Devi Chand Memorial Charitable Society which established LDC Institute of Technical Studies in 2007 was Shri Chandra Mohan Gupta who was a leading businessman with high standing in automobile trading, a reputed social activist and above all a visionary. His vision was to provide professional education with ethics and corporate culture to both urban and rural youth,The academic ambience in LDC is best suited to create globally competitive professionals .It has evolved as a front ranking institution in the community of widely acclaimed schools of learning. The academic and professional excellence of an educational institute is primarily rooted in its human resource.', 'The academic and professional excellence of an educational institute is primarily rooted in its human resource. The process of acquisition and assimilation of knowledge has to be coupled with the ability to apropriately transfer knowledge and create innovation.In accordance with this thesis, LDC Institute has been successful in building up a highly competent team of faculty. We take legitimate pride in our faculty that is a judicious blend of rich experience and modern knowledge. Senior, several withinternational experience, and highly qualified, over 30% with Ph.D., faculty provide expert guidance and purposeful learning. ');

-- --------------------------------------------------------

--
-- Table structure for table `feeds_ldc`
--

CREATE TABLE `feeds_ldc` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `query` varchar(600) NOT NULL,
  `info` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds_ldc`
--

INSERT INTO `feeds_ldc` (`id`, `name`, `mail`, `phone`, `query`, `info`) VALUES
(4, 'yuki', 'yuki@fuki.com', '1234567890', 'ahkjfsd kasjdfh asjd askdhfaskd f', ' on2017-03-09 18:21:26'),
(5, 'yuki', 'yuki@fuki.com', '1234567890', 'ahkjfsd kasjdfh asjd askdhfaskd f', 'localhoston2017-03-09 18:22:44'),
(6, 'yuki', 'yuki@fuki.com', '1234567890', 'ahkjfsd kasjdfh asjd askdhfaskd f', '127.0.0.1on2017-03-09 18:23:21'),
(7, 'ayush', 'ayush@gmail.com', '1111111111', 'akjfhkajfhka', '127.0.0.1 on 2017-03-15 19:00:39'),
(8, 'Pallavi Shukla', 'asaldf@gmail.com', '8574061235', 'ayush skdf sadfhljashfd', '127.0.0.1 on 2017-03-15 19:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `album` varchar(100) NOT NULL,
  `caption` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ldc_news`
--

CREATE TABLE `ldc_news` (
  `id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(300) NOT NULL,
  `file` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ldc_news`
--

INSERT INTO `ldc_news` (`id`, `title`, `body`, `file`) VALUES
(7, 'jasdfkjasfk', 'lakjdlaksjdlakjs', ''),
(8, 'askjdlakjd', 'lakjlakjsflkajflk', ''),
(9, 'lkjdalkdj', 'laskdjfalkjf', ''),
(10, 'askjdhkajd', 'laskjflsjfl', ''),
(11, 'alkdfjalksjf', 'lakjfalkfjlj', '');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `height` int(11) NOT NULL DEFAULT '450',
  `width` int(11) NOT NULL DEFAULT '1350'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `photo`, `height`, `width`) VALUES
(2, '268641-Dragon_Ball_Z-Dragon_Ball-artwork-dragon-fantasy_art-Son_Goku-Dragon_Ball_Super-Shen.jpg', 450, 1350);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `social_name` varchar(40) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `social_name`, `link`) VALUES
(1, 'Facebook', 'www.facebook.com/ldcits'),
(2, 'Twitter', 'www.twitter.com/ldcits\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `category` varchar(90) NOT NULL,
  `position` varchar(90) NOT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `photo` varchar(300) NOT NULL,
  `quals` varchar(200) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `committee` varchar(50) NOT NULL,
  `branch` varchar(300) DEFAULT NULL,
  `addr` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `category`, `position`, `description`, `photo`, `quals`, `exp`, `phone`, `committee`, `branch`, `addr`) VALUES
(1, 'Pallavi Shukla', 'Teaching', 'Head Of Department', 'Bawal Teacher hai baba!!!!!!!', 'IMG-20161126-WA0037.jpg', 'Btech, MTech', '10years', '9187249817', 'Sexual Harrasment', 'CSE', NULL),
(2, 'Director Saheb', 'Govern', 'Director', 'Lorem ipsum dolor sit amet, graeci omnium an mel, adhuc doctus nam no. Pro ne discere similique scriptorem, justo graeco gloriatur et vel, omnis philosophia te mea. Utinam eruditi sea in. Vis ex tation scaevola, erant homero an nam, mollis invenire gloriatur ut nam.\r\n\r\nMollis salutatus sit an, recusabo explicari est eu. Dolorem praesent mel ea, vix movet choro audire no. Est no dolor adipiscing. Diam facer dicta ei eos, cu ius docendi invenire sadipscing, ei vis timeam repudiandae. Ut duo option labitur indoctum, his tractatos urbanitas te. Et usu legendos adversarium.\r\n\r\nSed velit complectitur in, partem eripuit dolores no sit, sea eu civibus tibique. Ea tritani nonumes his, ex deleniti principes nec. Vix lucilius splendide liberavisse at, eruditi complectitur an his. Ut eam quem euismod, eos ad omittam expetenda dignissim. Novum ornatus an ius, dicam convenire ex est.\r\n\r\nCum quis dicat in, ne diceret dolorem vim, eum fabulas pericula salutatus ei. Ex erat audiam fuisset mei, nulla tritani intellegat eu ius. Vidisse vocibus nusquam ne mea. Te vis magna doming debitis. Ut quis graeco per. Sea eu ubique maiorum temporibus, iriure commune ex vim.\r\n\r\nInsolens assueverit ad qui. His duis populo insolens ex, ne vis everti iuvaret posidonium. Vero alterum concludaturque ne ius. Ullum atomorum evertitur vix te, nostro ornatus urbanitas eu vim, usu latine sapientem interesset et. Ne vim enim consul molestie, usu ei feugiat interpretaris. Ne maiorum perfecto est, ex est delenit temporibus.', 'director.jpg', 'Ph.D, M.Tech(Mechanical)', '40years', '9876543210', 'Jago Grahak Jaago', NULL, 'Pakistan, Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(1, 'ldcKaAdmin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_info`
--
ALTER TABLE `college_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeds_ldc`
--
ALTER TABLE `feeds_ldc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ldc_news`
--
ALTER TABLE `ldc_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college_info`
--
ALTER TABLE `college_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feeds_ldc`
--
ALTER TABLE `feeds_ldc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ldc_news`
--
ALTER TABLE `ldc_news`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
