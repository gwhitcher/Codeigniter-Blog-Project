-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2014 at 10:53 PM
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `slug`, `body`, `featured`) VALUES
(1, 1, 'This is a test post', 'this-is-a-test-post', 'This is the body text. This is the body text. This is the body text. This is the body text. This is the body text. This is the body text. This is the body text. This is the body text. This is the body text. This is the body text. This is the body text. ', 'cover.png'),
(2, 2, 'Another Test Post', 'another-test-post', 'This is some body text. This is some body text. This is some body text. This is some body text. This is some body text. This is some body text. This is some body text. This is some body text. This is some body text. ', 'cover1.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

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
(38, 1388784488, '192.168.1.106', '3SHAZBQ1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`) VALUES
(1, 'Projects', 'projects'),
(2, 'Portfolio', 'portfolio');

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
