-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 04 月 28 日 03:35
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `evabioyetian`
--
CREATE DATABASE IF NOT EXISTS `evabioyetian` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `evabioyetian`;

-- --------------------------------------------------------

--
-- 表的结构 `average`
--

CREATE TABLE IF NOT EXISTS `average` (
  `pjid` int(15) NOT NULL AUTO_INCREMENT,
  `av_time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(2) NOT NULL,
  `userid` int(15) NOT NULL,
  PRIMARY KEY (`pjid`)
) ENGINE=myisam DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pic_c`
--

CREATE TABLE IF NOT EXISTS `pic_c` (
  `pcid` int(15) NOT NULL AUTO_INCREMENT,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(15) NOT NULL,
  `dc` tinyint(2) NOT NULL,
  PRIMARY KEY (`pcid`),
  UNIQUE KEY `pcid` (`pcid`)
) ENGINE=myisam DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pic_s`
--

CREATE TABLE IF NOT EXISTS `pic_s` (
  `psid` int(15) NOT NULL AUTO_INCREMENT,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(15) NOT NULL,
  `dc` tinyint(2) NOT NULL,
  PRIMARY KEY (`psid`),
  UNIQUE KEY `psid` (`psid`)
) ENGINE=myisam DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `psy_user`
--

CREATE TABLE IF NOT EXISTS `psy_user` (
  `userid` int(15) NOT NULL AUTO_INCREMENT,
  `sex` tinyint(2) NOT NULL,
  `edu` tinyint(2) NOT NULL,
  `single` tinyint(2) NOT NULL,
  `home` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `study` tinyint(2) NOT NULL,
  `fbl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userid` (`userid`),
  KEY `userid_2` (`userid`)
) ENGINE=myisam DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `word_c`
--

CREATE TABLE IF NOT EXISTS `word_c` (
  `wcid` int(15) NOT NULL AUTO_INCREMENT,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(15) NOT NULL,
  `dc` tinyint(2) NOT NULL,
  PRIMARY KEY (`wcid`),
  UNIQUE KEY `wcid` (`wcid`)
) ENGINE=myisam DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `word_s`
--

CREATE TABLE IF NOT EXISTS `word_s` (
  `wsid` int(15) NOT NULL AUTO_INCREMENT,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(15) NOT NULL,
  `dc` tinyint(2) NOT NULL,
  PRIMARY KEY (`wsid`),
  UNIQUE KEY `wsid` (`wsid`)
) ENGINE=myisam DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `w_p`
--

CREATE TABLE IF NOT EXISTS `w_p` (
  `wpid` int(15) NOT NULL AUTO_INCREMENT,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(15) NOT NULL,
  `dc` tinyint(2) NOT NULL,
  PRIMARY KEY (`wpid`),
  UNIQUE KEY `wpid` (`wpid`)
) ENGINE=myisam DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
