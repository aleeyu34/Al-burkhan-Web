-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2018 at 02:58 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alburhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `id` int(70) NOT NULL AUTO_INCREMENT,
  `audio_title` varchar(200) NOT NULL,
  `audio_detail` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `audio_title`, `audio_detail`, `file`, `user_id`, `date`) VALUES
(1, 'Testing Audio', 'Testing Audio', 'Assalamualaykaarabicversion.mp3', '', '2018-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(200) NOT NULL,
  `book_pic` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_title`, `book_pic`, `file`, `date`) VALUES
(1, ',', 'Chrysanthemum.jpg', 'Chrysanthemum.jpg', '2018-04-28'),
(5, 'lkjhfd', 'bb.jpg', 'bb.jpg', '2018-04-28'),
(7, 'Aliyu', 'BACK.jpg', 'listcourses.pdf', '2018-04-28'),
(8, '/l.kjhg', 'Ambassadors.jpg', 'Remita.pdf', '2018-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `date` varchar(60) NOT NULL,
  `time` varchar(30) NOT NULL,
  `venue` varchar(120) NOT NULL,
  `phone` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `detail`, `date`, `time`, `venue`, `phone`) VALUES
(1, 'General Annual Tafsir', '', '2nd May, 2018', '', 'Maigero Theatre Sokoto', '07035596338');

-- --------------------------------------------------------

--
-- Table structure for table `excos`
--

CREATE TABLE IF NOT EXISTS `excos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `office` varchar(75) NOT NULL,
  `zone` varchar(75) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `excos`
--


-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` varchar(225) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `caption`, `file`) VALUES
(1, 'Mosque', 'efac_248970b13030a13c0d895957c3a46943.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(70) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(200) NOT NULL,
  `news_detail` varchar(5000) NOT NULL,
  `file` varchar(150) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_detail`, `file`, `date`) VALUES
(1, 'Alburkhan Wesites to Officially Launch soon', 'Alburkhan is a locally owned websites which focus on creating a medium for religios ulama to interact with fellow brothers and sisters. ', 'alburkhan.png', '2018-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE IF NOT EXISTS `quote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quote` varchar(300) NOT NULL,
  `quote_by` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `quote`, `quote_by`) VALUES
(1, 'For God did not send his Son into the world to condemn the world, but to save the world through him.', ' John 3:17');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(45) NOT NULL,
  `site_title` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `site_desc` varchar(350) NOT NULL,
  `site_keyword` varchar(250) NOT NULL,
  `google_code` varchar(1000) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `twitter` varchar(34) NOT NULL,
  `linkedin` varchar(45) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `email`, `site_desc`, `site_keyword`, `google_code`, `street`, `city`, `country`, `phone`, `facebook`, `twitter`, `linkedin`, `status`) VALUES
(1, 'Al-Burkhan', '', 'alburkhan@live.com', 'IslamicSite', 'Search Engine Ready, Business and others', '', '', '', 'Nigeria', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE IF NOT EXISTS `table_admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `file` varchar(567) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `name`, `email`, `username`, `password`, `file`) VALUES
(1, 'Al-Burkhan', 'alburkhan@live.com', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_ads`
--

CREATE TABLE IF NOT EXISTS `table_ads` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `header_ads` varchar(500) NOT NULL,
  `side_ads` varchar(500) NOT NULL,
  `footer_ads` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `table_ads`
--

INSERT INTO `table_ads` (`id`, `header_ads`, `side_ads`, `footer_ads`) VALUES
(1, '<!-- Adtall - Ad Display Code -->\r\n<script type="text/javascript" src="//www.adtall.com/display/js/ads.js?822&522&728&90&0"></script>\r\n<!-- Adtall - Ad Display Code -->', '<!-- Adtall - Ad Display Code -->\r\n<script type="text/javascript" src="//www.adtall.com/display/js/ads.js?821&522&300&250&0"></script>\r\n<!-- Adtall - Ad Display Code -->', 'Footer ads code here');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(2500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `body`) VALUES
(1, 'Alburkhan is a non profitable website');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resources`
--

CREATE TABLE IF NOT EXISTS `tbl_resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_resources`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE IF NOT EXISTS `user_online` (
  `session` varchar(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`) VALUES
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318),
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318),
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(70) NOT NULL AUTO_INCREMENT,
  `video_title` varchar(500) NOT NULL,
  `video_detail` varchar(500) NOT NULL,
  `file` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video_title`, `video_detail`, `file`, `date`) VALUES
(1, 'Testing Video', 'Testing Video', 'How to Calculate Molality - Mr. Causey''s Chemistry.3gp', '2018-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE IF NOT EXISTS `welcome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`id`, `body`) VALUES
(1, 'Al-Burkhan');
