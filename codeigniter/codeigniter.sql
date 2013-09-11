-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成日時: 2013 年 9 月 11 日 11:49
-- サーバのバージョン: 5.5.33-log
-- PHP のバージョン: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `codeigniter`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `mail` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `login_check` tinyint(1) NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `account`
--

INSERT INTO `account` (`mail`, `pass`, `name`, `login_check`) VALUES
('chien@realword.jp', 'chien', 'jsdf', 0),
('chien@realworld.jp', 'chien', 'chien', 0),
('h2c@gmail.com', 'phunu', 'hieu', 0),
('jshfhsdhf', 'chien', 'sad', 0),
('luan@gmail.com', 'coho', 'luan', 0),
('thai@sms.com', '0', 'thai', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(10) unsigned NOT NULL,
  `content` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `account_id` int(11) NOT NULL,
  PRIMARY KEY (`subject_id`),
  UNIQUE KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
