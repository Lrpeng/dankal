-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-08-03 16:31:07
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dankal`
--

-- --------------------------------------------------------

--
-- 表的结构 `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `password` char(16) NOT NULL,
  `head` char(15) DEFAULT 'default',
  `longnum` char(20) NOT NULL,
  `shortnum` char(6) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `account`
--

INSERT INTO `account` (`account_id`, `username`, `password`, `head`, `longnum`, `shortnum`) VALUES
(1, '', '', 'default.png', '', ''),
(2, 'é—®é—®é—®ä¸‹22', 'wwwwww', 'default.png', '11111111111', '312312'),
(3, 'ewewewew', 'wwwwww', 'default.png', '11111111111', '131231'),
(4, 'wewewe', 'wwwwww', 'default.png', '12122121212', '121212'),
(5, 'ssssss', 'sdsdsd', 'default.png', '12131314414', '412412');

-- --------------------------------------------------------

--
-- 表的结构 `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `contacts_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) DEFAULT NULL,
  `phonebook_id` char(255) NOT NULL,
  `name` char(20) NOT NULL,
  `longnum` char(20) NOT NULL,
  `shortnum` char(6) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`contacts_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `phonebook`
--

CREATE TABLE IF NOT EXISTS `phonebook` (
  `phonebook_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(11) NOT NULL,
  `intr` char(32) NOT NULL,
  `logo` char(15) NOT NULL,
  PRIMARY KEY (`phonebook_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
