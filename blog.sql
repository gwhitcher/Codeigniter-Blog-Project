-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2014 at 02:01 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `body` text NOT NULL,
  `featured` text NOT NULL,
  `metadescription` text NOT NULL,
  `metakeywords` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `slug`, `body`, `featured`, `metadescription`, `metakeywords`) VALUES
(1, 1, 'Codeigniter Blog Project BETA 1.0', 'codeigniter-blog-project-beta-10', '<p>Hello everyone and welcome to my blog!  My name is George Whitcher and I have been working as a full-time web developer since 2006.  This blog post is introducing my blog as well as my blog software written in PHP and the Codeigniter framework which this blog is run on.</p><p>I started this project as while I like the content management systems out there like Wordpress and Joomla, why rely on them when you don''t have too? &nbsp;I also feel I can build something better over time. &nbsp;So stay tuned to the bitbucket provided below for the latest updates. &nbsp;I will try to keep the demo up to date as possible.</p><h1>Codeigniter Blog Project</h1><p>A blogging platform written in PHP in the Codeigniter framework by George Whitcher. &nbsp;</p><p>Setup the blog by going to /application/config/config.php and filling in all the necessary values as well as /application/config/database.php. &nbsp;</p><p>Import blog.sql to the database you configured. &nbsp;</p><p>CHMOD the /captcha/ and /images/* directories to 777 and you are all set!</p><p>Demo: <a href="http://blog.georgewhitcher.com" title="Codeigniter Blog" target="_blank">blog.georgewhitcher.com</a><br>Admin: <a href="http://blog.georgewhitcher.com/admin" title="Codeigniter Blog" target="_blank">blog.georgewhitcher.com/admin</a><br>UN: admin<br>PW: administrator</p><p><br></p>', 'codeigniter1.jpg', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(1, 1388440676, '192.168.1.108', 'TO3Anq5l'),
(2, 1388440700, '192.168.1.108', 'Ecexb4M5'),
(3, 1388448319, '192.168.1.106', 'DNvcuuOV'),
(4, 1388451026, '192.168.1.106', 'GqnbV6dm'),
(5, 1388508804, '192.168.1.108', 'DaNjDEPI'),
(6, 1388614387, '192.168.1.106', 'b8842Ioy'),
(7, 1388614475, '192.168.1.106', 'Lio7rF50'),
(8, 1388616338, '192.168.1.106', 'Xl6PLfbD'),
(9, 1388617680, '192.168.1.106', 'dNEeom6g'),
(10, 1388666366, '192.168.1.106', 'qeBjZ0C9'),
(11, 1388667777, '192.168.1.106', 'aPZOKdtt'),
(12, 1388667779, '192.168.1.106', 'Zd3jQvay'),
(13, 1388697783, '192.168.1.106', 'T8z6G2Sf'),
(14, 1388697998, '192.168.1.106', 'SlbYfGVc'),
(15, 1388698013, '192.168.1.106', 'voMyNukT'),
(16, 1388701389, '192.168.1.106', 'VGiaux7E'),
(17, 1388701453, '192.168.1.106', '6ShDaH6i'),
(18, 1388702128, '192.168.1.106', 'AWQhWrMH'),
(19, 1388703187, '192.168.1.106', '2oPhJDEc'),
(20, 1388703212, '192.168.1.106', '09YrGLiO'),
(21, 1388703242, '192.168.1.106', 'qU7haFuF'),
(22, 1388703272, '192.168.1.106', 'b42quMKn'),
(23, 1388704215, '192.168.1.106', 'QJI645cQ'),
(24, 1388704276, '192.168.1.106', 'qjzgkFq6'),
(25, 1388704284, '192.168.1.106', 'tmEhNfuW'),
(26, 1388704320, '192.168.1.106', 'mexqkUx2'),
(27, 1388704346, '192.168.1.106', 'S7s3yOQM'),
(28, 1388704357, '192.168.1.106', 'LrgoZbsq'),
(29, 1388704388, '192.168.1.106', 'FGwjD87H'),
(30, 1388706222, '192.168.1.106', '1bZYAG7e'),
(31, 1388706232, '192.168.1.106', 'cjTPQaLF'),
(32, 1388777965, '192.168.1.106', 'GOyIhBAx'),
(33, 1388778081, '192.168.1.106', 'm5GbZ5bD'),
(34, 1388778296, '192.168.1.106', 'xYFo6niz'),
(35, 1388780264, '192.168.1.106', 'TZBgxv5w'),
(36, 1388782456, '192.168.1.106', 'XJyvK3Gz'),
(37, 1388784393, '192.168.1.106', 'jrVmvUIq'),
(38, 1388784488, '192.168.1.106', '3SHAZBQ1'),
(39, 1388788506, '192.168.1.106', '3XNUl16p'),
(40, 1388788794, '192.168.1.106', 'bTMBB1Xl'),
(41, 1388792320, '192.168.1.106', 'yjOh5eZs'),
(42, 1388792358, '192.168.1.106', 'jjy21H6b'),
(43, 1388792950, '192.168.1.106', 'Melj1nvY'),
(44, 1388793153, '192.168.1.106', 'c6NvoQL7'),
(45, 1388793191, '192.168.1.106', 'foUUKT0a'),
(46, 1388793923, '192.168.1.106', 'DDf9jDfZ'),
(47, 1388793944, '192.168.1.106', 'gQC1mPSX'),
(48, 1388793996, '192.168.1.106', 'Txtotj6w'),
(49, 1388797615, '192.168.1.106', 'raVDYhws'),
(50, 1388800357, '192.168.1.106', 'IYv383WA'),
(51, 1388800387, '192.168.1.106', '8TSLGlh2'),
(52, 1388800490, '192.168.1.106', 'u1fkfu0K'),
(53, 1388800496, '192.168.1.106', 'myvFO6oH'),
(54, 1388800499, '192.168.1.106', '6j3h7A6o'),
(55, 1388800651, '192.168.1.106', '2v8M3OLH'),
(56, 1388800695, '192.168.1.106', 'fFr0gTwj'),
(57, 1388800965, '192.168.1.106', 'znIaGalq'),
(58, 1388803011, '192.168.1.106', 'X2ervzWy'),
(59, 1388803159, '192.168.1.106', 'oZG1TL27'),
(60, 1388803656, '192.168.1.106', 'As1rLa9f'),
(61, 1388807145, '192.168.1.106', 'BgZPpF46'),
(62, 1388807188, '192.168.1.106', 'ctxjrwMo'),
(63, 1388807219, '192.168.1.106', 'ihl1P5Qd'),
(64, 1388807273, '192.168.1.106', 'clbsHsdI'),
(65, 1388807322, '192.168.1.106', '7ds9s7HS'),
(66, 1388807361, '192.168.1.106', 'L0PemnV6'),
(67, 1388807362, '192.168.1.106', 'PgtbHJsr'),
(68, 1388807363, '192.168.1.106', 'nFkZbgPj'),
(69, 1388807388, '192.168.1.106', 'eyjW2jfo'),
(70, 1388807389, '192.168.1.106', 'HZR3CMJM'),
(71, 1388807389, '192.168.1.106', 'EpHrtkzF'),
(72, 1388807407, '192.168.1.106', 'PePGhiX7'),
(73, 1388807427, '192.168.1.106', '9j6d7Olq'),
(74, 1388807463, '192.168.1.106', 'A75YQzgX'),
(75, 1388807496, '192.168.1.106', 'E3aW89Do'),
(76, 1388807498, '192.168.1.106', 'K0BnujXZ'),
(77, 1388807815, '192.168.1.106', 'SAloCDDg'),
(78, 1388810422, '192.168.1.106', 'eC3Y20jV'),
(79, 1388813452, '192.168.1.106', '7e7scpHP'),
(80, 1388951600, '192.168.1.106', 'Sle4DEWe'),
(81, 1388951694, '192.168.1.106', 'MTMisuvW'),
(82, 1388951707, '192.168.1.106', 'frGHrzKk'),
(83, 1388951772, '192.168.1.106', 'GHMbYUHP'),
(84, 1388951780, '192.168.1.106', 'GQzdXRbh'),
(85, 1388951787, '192.168.1.106', 'nh14F6xd'),
(86, 1388951866, '192.168.1.106', 'kiUlhyKs'),
(87, 1388951869, '192.168.1.106', 'CF5zQq7d'),
(88, 1388951891, '192.168.1.106', 'XIVyPC1f'),
(89, 1388952045, '192.168.1.106', '5vfmJJYz'),
(90, 1388952062, '192.168.1.106', 'HnO8Cm92'),
(91, 1388952065, '192.168.1.106', 'fWwVZQjU'),
(92, 1388952082, '192.168.1.106', 'XIfjorim'),
(93, 1388952130, '192.168.1.106', 'DktJdA3z'),
(94, 1388952412, '192.168.1.106', '3844jIBj'),
(95, 1388952415, '192.168.1.106', 'EVHqMAb2'),
(96, 1388964688, '192.168.1.106', 'sJvpaE0g'),
(97, 1389124728, '192.168.1.108', 'HzmNDlEO'),
(98, 1389124821, '192.168.1.108', 'fswKb8lZ');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `metadescription` text NOT NULL,
  `metakeywords` text NOT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `metadescription`, `metakeywords`) VALUES
(1, 'Projects', 'projects', '', ''),
(2, 'Portfolio', 'portfolio', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE IF NOT EXISTS `sidebar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` text NOT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `title`, `body`) VALUES
(1, 'Categories', '<?php\r\n$query = $this->db->query("SELECT * FROM categories");\r\n\r\nforeach ($query->result_array() as $row)\r\n{\r\n   echo ''<li><a href="''.base_url().''category/''.$row[''slug''].''">''.$row[''title''].''</a></li>'';\r\n}\r\n?>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '200ceb26807d6bf99fd6f4f0d1ca54d4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
