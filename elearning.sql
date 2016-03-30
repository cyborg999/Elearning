-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2015 at 05:48 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gameid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `userid`, `score`, `wrong`, `date`, `gameid`) VALUES
(1, 9, 0, 1, '2015-05-10 20:02:18', 0),
(2, 10, 1, 2, '2015-05-10 20:03:06', 43),
(3, 10, 0, 0, '2015-05-10 20:07:44', 43);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `folder_id` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `isslideshow` int(11) DEFAULT '0',
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `name`, `description`, `status`, `folder_id`, `cover`, `isslideshow`, `type`) VALUES
(41, NULL, NULL, 0, '8f61926c8a503cf67bd744825cc5e71a.html', '', 0, NULL),
(45, 'Silent Sanctuary - Kundiman (Official Music Video)', 'bis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposue', 0, 'b0f8197d98ebb18a13a6daeca14578fa.mp4', '', 0, 'video'),
(46, 'lestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et', ' eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum cla', 0, '2641865e4d928ddaf57ef034beec74f0.html', 'cover.jpg', 0, 'basic'),
(47, 'd minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl u', 'a nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus ', 0, '2c090c2d97b86a96160a82044308e8d7.html', 'cover.jpg', 0, 'basic'),
(48, 'ccumsan et iusto odio dign', 'm iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te fe', 0, '22c2a0a29c94e2c2fd287eddffb2c846.html', 'cover.jpg', 0, 'advanced');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `religion` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `firstname`, `lastname`, `middlename`, `age`, `sex`, `dob`, `religion`, `address`, `nationality`, `weight`, `height`, `userid`) VALUES
(10, '', 'sad', '', '', 'male', '2015-05-13', '', '', '', '', '', 1),
(11, 'Jordan', 'Sadiwa', 'DLR', '24', 'male', '2015-05-26', 'atheist', 'addres', '[inpy', '234', '345', 10),
(12, 'MyAdmin', 'adada', 'mname', '', 'male', '1970-01-01', 'catholic', '', '', '', '', 9);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `filename`, `active`, `dateadded`) VALUES
(45, 'e446bc367798d9ffb0dd5c26a1ac227f.jpg', 1, '2015-05-16 02:28:27'),
(46, 'eebae4c70d3336e1a3068e9c343e83ef.png', 1, '2015-05-16 02:29:20'),
(47, '1c0caf9a1eb7589523fd183402fb4edb.jpg', 1, '2015-05-16 02:29:31'),
(49, '7244cb164b74ab017b96b5514482c29e.jpg', 1, '2015-05-16 02:31:17'),
(50, '85d9088e1bdd4869d2c5de1f04734d22.jpg', 1, '2015-05-16 02:31:41'),
(51, 'f2ef3b503dc230f162f1bfd668fbd05e.jpg', 1, '2015-05-16 03:23:16'),
(52, 'ec942269405d457c52b4a03df8218661.jpg', 1, '2015-05-16 03:23:22'),
(53, '8c1fe3d5060d71fcdee1570706090e3a.png', 1, '2015-05-16 03:23:22'),
(54, 'b18d694c605c19ceb6701fd24cdbbf2f.jpg', 1, '2015-05-16 03:23:22'),
(55, '7b6f73f56c4b47811fa1a7b85ebd96b9.jpg', 1, '2015-05-16 03:23:22'),
(56, '20b56b532b8fd72dd4c0246d9ca6b45e.jpg', 1, '2015-05-16 03:23:23'),
(57, '88632af5b1e9a03636fa043a2d910a8d.png', 1, '2015-05-16 03:23:23'),
(58, '2a1c2cfd53a77e5293dad9ff21dca58d.jpg', 1, '2015-05-16 03:23:23'),
(59, '36627e47ba162078ecd5172d967d9984.jpg', 1, '2015-05-16 03:23:23'),
(60, 'e78f83d685c67343267ad07052f63515.jpg', 1, '2015-05-16 03:23:23'),
(61, 'd4fdc8e407ac89e447189169d40153d5.jpg', 1, '2015-05-16 03:33:37'),
(62, '81fc4bfc7cada119477e5adb7914780d.png', 1, '2015-05-16 03:33:37'),
(63, 'fca66caf80aced9c53852f8b3600b177.jpg', 1, '2015-05-16 03:33:37'),
(64, '2c2371cbab4373005cabbaf0135cf2d4.jpg', 1, '2015-05-16 03:33:37'),
(65, '10d272c2abb06b0f5822e39f47d7a131.jpg', 1, '2015-05-16 03:33:37'),
(66, 'e0d4f09b1baab2930a52c4775f69d373.jpg', 1, '2015-05-16 03:33:37'),
(67, '551a2777bb66d204efab72f2a6807b31.jpg', 1, '2015-05-16 03:33:37'),
(68, '82fea6616983efceb1cb0050fa7486d6.png', 1, '2015-05-16 03:33:37'),
(69, 'b0ba1e00e319d5fe20c98532c3dc39a6.jpg', 1, '2015-05-16 03:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `photoid` int(11) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `photoid`, `dateadded`) VALUES
(23, 'You’ve gone incognito', 'Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept. Learn more about incognito browsing', 45, '2015-05-16 02:28:27'),
(24, 'orem ipsum dolor sit amet, consectetuer', 'd minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim', 46, '2015-05-16 02:29:20'),
(27, 'accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta n', 'eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dyna', 49, '2015-05-16 02:31:17'),
(28, 'laoreet dolore magna ali', 'bis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposue', 50, '2015-05-16 02:31:41'),
(39, '', '', 61, '2015-05-16 03:33:37'),
(40, '', '', 62, '2015-05-16 03:33:37'),
(41, '', '', 63, '2015-05-16 03:33:37'),
(42, '', '', 64, '2015-05-16 03:33:37'),
(43, '', '', 65, '2015-05-16 03:33:37'),
(44, '', '', 66, '2015-05-16 03:33:37'),
(45, '', '', 67, '2015-05-16 03:33:37'),
(46, '', '', 68, '2015-05-16 03:33:37'),
(47, '', '', 69, '2015-05-16 03:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dateuploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(255) NOT NULL,
  `uploaded_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `active` int(11) DEFAULT '0',
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `active`, `date_registered`) VALUES
(9, 'admin', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'admin', 0, '2015-05-03 17:57:55'),
(10, 'user', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'user', 1, '2015-05-03 17:58:57'),
(11, 'Jordan', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'user', 1, '2015-05-05 19:41:14'),
(12, 'Jordan334', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'user', 1, '2015-05-05 19:41:54'),
(13, 'Jordan Sadiwa', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'user', 1, '2015-05-05 19:42:03'),
(14, 'user2', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'user', 1, '2015-05-10 16:15:06'),
(15, 'user3', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'user', 0, '2015-05-16 01:49:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`), ADD KEY `folder_id` (`folder_id`,`cover`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`password`,`type`,`active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
