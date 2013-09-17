-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成日時: 2013 年 9 月 17 日 12:14
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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- テーブルのデータのダンプ `account`
--

INSERT INTO `account` (`id`, `mail`, `pass`, `name`) VALUES
(8, 'chien@realworld.jp', '6b9305fc955e7ffc642820d1eea115d72aca34b1d4e4e26a9c79304003342313', 'chien'),
(9, 'csdjf@gmail.com', '0efa83330df42e56d5034906428d8c80ac9a710ffbe6e59ffe61d0bc7b1b033b', 'chien'),
(10, 'luan@realworld.jp', 'b82681dde426bf2c7571c39672b1fb2e62013c04ca2cf0f0124d9d7723d3a843', 'luan'),
(11, 'h2c@gmail.com', '3d38fc0cb79f9cb7f91173f1fc5075154ce934c4d3018fea09b1f62724b725b7', 'hieu'),
(12, 'jsjsdjjdsjd@gmail.com', '1375217226f61a95b5efc6bb339fe28a19011a7b221d2493c366753d54c30e33', 'jsjssdj'),
(13, 'thai@gmail.com', 'a8fd6d587a8a0aea5b49134fa90db7ad9f9a38117fd3acb84928d2fc39de934f', 'thai'),
(14, 'jsjdfjdsjodsjo@gmail.com', 'da15a2e9ff6954dd13f05235844844fda22c7d276a0255c78148f156c065c78f', 'jjssjjdjjdfsjdfs'),
(15, 'jsdjjsdjfsd@gmail.com', 'e552e96144ae63aef11a3c7871cff40088e8f064842d41a7fed1aecc8269c1ec', 'jjsjfsdjfsjd'),
(16, 'jsdofosd@gmail.com', '41a9312bdc18a4246c061b7237a36abe9f8a9d062ef5377ae203e2bfa7854c04', 'jsjfjsdjsdfj'),
(17, 'jsdfjjdsjf@gmail.com', 'c42ec5c9b25b418e8a3854fec736c7e108156edde8194500f371615299b737f6', 'jsdjsddsfj'),
(18, 'jsdjofjojods@gmail.com', 'b72891717ece4d7da3e1a2a9b87303d2e00e25999363fc5eead4622f30f25a44', 'jdsfdsjdsfj'),
(19, 'djsodsosaos@gmail.com', '1213fa755a78f9f0e9790246b7ee57cb3ceb054d6e49ad13b11ea281ef30f99c', 'jsdjdsjsdjf'),
(20, 'jdsjjodfs@gmail.com', '4558432fcccfb2cc5e4ca7afba2ddb349cddf901db345fd68c7cb5929c5391a5', 'jsjsjfdj'),
(21, 'jsdjfasjdsllsdfl@gmail.com', 'ca1373335923faa61118eaf09e15fee4f4342eb712970d1297d6e75f0f51e2d1', 'jsfdjsdjdsj'),
(22, 'luancho@gmail.com', '29bd297fd292f0154daf0dfad7b3a9e13f16171e2a58f183ad55a418606399e7', 'luancho'),
(23, 'ga@gmail.com', '87439fd55ef6b62c7a9b193b0176cdab7326c7dbf96620121e9490fb60a8bc85', 'hehe'),
(24, 'luan@gmail.com', 'ffeefa0c39ee7bc4d9e47f076f838993292eca339b422e979220bd8728fe43a8', 'luan'),
(25, 'jsjfjsdjsalfdsal@gmail.com', 'e2d7de3f484f225f55013d1b47fc4f4ab4003bd50ae59864ce27cdb665e3c58b', 'jdsjfsdjfj'),
(26, 'mailsjfj@gmail.com', '8283bc3d1e240f298044e1b8eb31472897a0c5079aec6a45a4e03d18184c4d58', 'name'),
(27, 'adfjsdoodso@gmail.com', '49e0b8c2fb2c7926236ede9ae833190e57032ca6a8b9fb88bea153dd71dc25dc', 'cjsjsjjsdfj'),
(28, 'jsjfjsjfaj@gmail.com', 'a13c55d0d9e93cb346a51ef6ae9f634c2412d7cea89a28dd4735581e90fc0490', 'namesdjdsj'),
(29, 'mail@gmail.com', 'f4ba6f6507643ba22d06c12ff4a53774aefd2a265a5020241f05e647894a08ea', 'namesdf'),
(30, 'jsdjjdfsdjs@gmail.com', 'e4ea75a05b39833ebaf9121b88338fc973a51535328523fe9564f68e6dab86ae', 'sjfjsdname'),
(31, 'jsjdfjsd@gmail.com', '466411c6bb36f4ac11683bc6df6b52786272e01b1a57786438d6d4c0cff1b08c', 'namejsfsdj'),
(32, 'mailjsfjdsjdjf@gmail.com', 'fcc23ad587b8595c558ceda027b31a97ba1b5fbe1b125b5bd1e452b07ccbd7c4', 'namesfsd'),
(33, 'mailsdfdjdsj@gmail.com', 'b72b3dc626d77219040044c79c2e6f09fad42e49becd7250c579e7281aadb68b', 'namesfdsf'),
(34, 'jsdjfdjsj@gmail.com', '11e5593029731d278a7c5a39c10e98a6483aa6c24f040c5f2485df22fad17226', 'namejsdjdj'),
(35, 'jsdjfjsdjd@gmail.com', '9a019e081c1af5ef75c6fd09fe0aff581cea3bceb443e0d391114c03964af0d7', 'namejsdjdsj'),
(36, 'jsdajdj@gmail.com', 'd746a31ad1c0a9d985f0b7e934f6c7c71ad58ff5d068ef5de1fb5f8c7c71fa1c', 'namesdjfsdj'),
(37, 'jsjdsjdfsj@gmail.com', '666f5061eb8d2febba3c088a7f1ea7ba53e18f314e41e03670925003832a6ffa', 'namejwjdsj'),
(38, 'jsjfdsjdsj@gmail.com', 'aa6ce2cfd38fba730aeddce25987fb46239a7704fb2dd181097ca85927327bf1', 'namesdjsdj'),
(39, 'sjfjsdj@gmail.com', 'cbbe56c4cec1270bf6bb199c848375112777bcb128816b2779b9dae0f176152e', 'namejsdjfd'),
(40, 'fsdfsmail@gmail.com', 'b7abef39e814fdbd8508ad22e306005b74528100a91927453f416a53d87f4cec', 'name'),
(41, 'jsdjjsjsdj@gmail.com', 'ee4869a259b7cd74f7a2e9ec0b688039725d001780594bff19179387d936d4ac', 'namejsjsdjf'),
(42, 'jsdjjdsjdfsj@gmail.com', '4727a168fa381de7fbfb3fea03c09cbf1c6c374b6743bb73bdaeb6ebd1e486d5', 'namesdjsdjs'),
(43, 'jsdjsdjsdjdjf@gmail.com', '680515cb80b91bd8a59be01b446cfa994fc8b2d57dd09a1e0600a06bf3320eba', 'namejsjdsfj'),
(44, 'sdjjdf@gmail.com', '5cb435cf9025da9440dd6c3c31a91943ed6951fbf23639c97b16b8ead88b66d4', 'namehsfjsjdj'),
(45, 'jsdjsdjfdj@gmail.com', '362680f41acbf605974b8aa378d6576c7e67006f7ba53c7282c57e634d3720a5', 'namejsjdsf'),
(46, 'jsdjdsjdsjsdl@gmail.com', '8852d4b808b0a2ddf2e5871219713d74dd7a212d30d42f3313fcf0e7f0831327', 'nameksdjsjdfj'),
(47, 'haha3170@gmail.com', 'd2ab0e1ff1a13909be3e9637d8317e9768ec084e98f7d85d9a52d83685e64c4a', 'haha3170'),
(48, 'sdjsjfjdsf@gmail.com', '908c6e311c80260a27138ad5a8d73cd6a6a034158e973eb48f0de15b0d06f98a', 'namejsdjjdfs'),
(49, 'hehe@gmail.com', 'a2e32477b58904d00bd43b17943e36d677e17ed8504d45b987b86c8814c80c7d', 'hehe'),
(50, 'haha@gmail.com', '254852d7ad95f7212036a6b2bc99e4c34d3d1dd037b395cc3021d357e73e0193', 'haha'),
(51, 'kk@gmail.com', '47342fa10eb3ede6534f5a4d53c79d46e49caa82852f2481caa1be161432ede7', 'kkk'),
(52, 'ngoc@gmail.com', 'ac52dbc759a03389aec50affc61388a7300161ad1afecb7726e34b336a40c529', 'ngoc'),
(53, 'k@gmail.com', '666df59f0b2e613982e9efb09610fef232bb22d55d3bb1a0643998e848030b05', 'k'),
(54, 'c@gmail.com', 'a4cee94393ccbcb3d8c7300364e58c838a355a510c7e076bb844215ea34609ff', 'c'),
(55, 'hello@gmail.com', '1f8dba71772efb02c473b5ac8e652e26a40dca2138dbf56448b7f9be723cd878', 'hello'),
(56, 'ch@gmail.com', '5631dce87262cf00e3e1438592f350b15bb235bea0ea62461fdf98c074e48b16', 'ch');

-- --------------------------------------------------------

--
-- テーブルの構造 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `account_id` int(11) NOT NULL,
  PRIMARY KEY (`subject_id`),
  UNIQUE KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- テーブルのデータのダンプ `subject`
--

INSERT INTO `subject` (`subject_id`, `content`, `time`, `account_id`) VALUES
(19, 'hello world', '2013-09-10 00:00:00', 8),
(20, 'haha', '0000-00-00 00:00:00', 8),
(21, 'ss', '0000-00-00 00:00:00', 8),
(22, 'sdf', '2013-09-13 15:19:20', 8),
(23, 'ad', '2013-09-13 16:09:50', 8),
(24, 'oo', '2013-09-13 16:11:03', 8),
(25, 'aa', '2013-09-13 16:18:25', 8),
(26, 'jjj', '2013-09-13 17:37:13', 8),
(27, 'lua ', '2013-09-13 17:38:11', 8),
(28, 'lllll', '2013-09-13 17:39:14', 8),
(29, 'gg', '2013-09-13 17:56:07', 8),
(30, 'kk', '2013-09-13 17:58:21', 8),
(31, 'kkk', '2013-09-13 18:23:44', 8),
(32, 'kk', '2013-09-13 18:29:16', 8),
(33, '9', '2013-09-13 18:30:16', 8),
(34, '10', '2013-09-13 18:30:22', 8),
(35, 'kkkkk', '2013-09-13 18:31:57', 8),
(36, 'kk', '2013-09-13 18:57:04', 8),
(37, '7', '2013-09-13 18:57:09', 8),
(38, 'sdsfsdf', '2013-09-13 20:00:50', 45),
(39, '', '2013-09-13 20:02:57', 46),
(40, 'jsdjfds', '2013-09-13 20:03:01', 46),
(41, '', '2013-09-13 20:03:26', 47),
(42, 'jsjfdsfsd', '2013-09-13 20:03:28', 47),
(43, 'jsjfdsfsdjdjfd', '2013-09-13 20:03:31', 47),
(44, 'sdfds', '2013-09-13 20:17:51', 47),
(45, 'jkjjk', '2013-09-13 20:18:32', 48),
(46, 'kkkk', '2013-09-13 20:18:43', 48),
(47, 'aaaaa', '2013-09-13 20:27:19', 8),
(48, 'tets', '2013-09-13 20:28:08', 8),
(49, 'aaa', '2013-09-13 20:28:22', 8),
(50, 'aaabbb', '2013-09-13 20:28:26', 8),
(51, 'aaabbbcc', '2013-09-13 20:28:32', 8),
(52, 'aaabbbcc', '2013-09-13 20:28:37', 8),
(53, 'tweet!', '2013-09-13 20:28:53', 8),
(54, '', '2013-09-13 20:29:02', 8),
(55, '', '2013-09-13 20:29:04', 8),
(56, '', '2013-09-13 20:29:08', 8),
(57, 'yeah', '2013-09-13 20:29:18', 8),
(58, 'yeah', '2013-09-13 20:29:22', 8),
(59, 'kaka', '2013-09-16 01:50:25', 49),
(60, 'ok men', '2013-09-16 01:50:34', 49),
(61, 'kk', '2013-09-16 02:44:47', 8),
(62, 'kaka', '2013-09-16 02:46:16', 8),
(63, 'hello', '2013-09-16 03:09:23', 8),
(64, 'vl', '2013-09-16 03:09:34', 8),
(65, 'he', '2013-09-16 03:11:35', 8),
(66, 'kk', '2013-09-16 03:11:52', 8),
(67, 'khoa', '2013-09-16 03:11:58', 8),
(68, 'll', '2013-09-16 03:25:29', 8),
(69, 'sdjjdsf', '2013-09-16 03:25:57', 8),
(70, 'kks', '2013-09-16 03:26:47', 8),
(71, 'jdj', '2013-09-16 03:28:14', 8),
(72, 'chan vl', '2013-09-16 03:28:56', 8),
(73, 'jsdjfsd', '2013-09-16 03:31:19', 8),
(74, 'kkk', '2013-09-16 03:31:54', 8),
(75, 'clean', '2013-09-16 03:32:05', 8),
(76, 'ksdfdsdf', '2013-09-16 03:32:24', 8),
(77, 'ooo', '2013-09-16 03:32:31', 8),
(78, 'hello', '2013-09-16 03:48:22', 8),
(79, 'f', '2013-09-16 03:48:28', 8),
(80, 'comment', '2013-09-16 03:49:51', 8),
(81, 'kk', '2013-09-16 03:50:37', 8),
(82, 'hehe', '2013-09-16 04:04:41', 8),
(83, 'kskfdsfd', '2013-09-16 04:18:00', 8),
(84, 'jsdf', '2013-09-16 04:53:55', 8),
(85, 'kk', '2013-09-16 04:54:00', 8),
(86, '', '2013-09-16 04:54:10', 8),
(87, 'ss', '2013-09-16 04:55:33', 8),
(88, 'hahaha', '2013-09-16 05:00:34', 8),
(89, 'jsdfjsd', '2013-09-16 05:20:10', 8),
(90, 'fuck ', '2013-09-16 05:20:15', 8),
(91, 'hello', '2013-09-16 12:39:29', 8),
(92, 'ss', '2013-09-16 13:11:01', 8),
(93, 'haha', '2013-09-16 13:11:05', 8),
(94, 'as', '2013-09-16 16:36:53', 8),
(95, 'ko', '2013-09-16 16:36:58', 8),
(96, 'sdsfd', '2013-09-16 16:37:41', 8),
(97, 'lo', '2013-09-16 16:37:47', 8),
(98, 'kksdf', '2013-09-16 16:38:30', 8),
(99, 'kaka', '2013-09-16 16:39:57', 8),
(100, 'ksdkdsk', '2013-09-16 16:42:14', 8),
(101, 'lala', '2013-09-16 16:42:33', 8),
(102, 'ss', '2013-09-16 17:01:33', 8),
(103, 'sss', '2013-09-16 17:01:37', 8),
(104, 'hello', '2013-09-16 17:04:53', 8),
(105, 'vl', '2013-09-16 17:04:56', 8),
(106, 'ss', '2013-09-16 20:23:41', 8),
(107, 'jjj', '2013-09-17 03:12:51', 8),
(108, 'aaa', '2013-09-17 03:16:41', 8),
(109, 'aa', '2013-09-17 03:28:48', 8),
(110, 'wtf', '2013-09-17 03:28:57', 8),
(111, 'hello world', '2013-09-17 03:43:42', 52),
(112, 'khaka', '2013-09-17 03:43:48', 52),
(113, 'ok men', '2013-09-17 03:43:54', 52),
(114, 'aa', '2013-09-17 04:05:21', 52),
(115, 'ok ', '2013-09-17 04:05:41', 52),
(116, 'kakaka', '2013-09-17 04:08:43', 52),
(117, 'sdf', '2013-09-17 04:09:33', 8),
(118, 'kaka', '2013-09-17 04:11:35', 8),
(119, 'aa', '2013-09-17 04:55:54', 8),
(120, 'kaka', '2013-09-17 10:00:28', 8),
(121, 'hello', '2013-09-17 10:10:36', 56),
(122, 'vl', '2013-09-17 10:10:40', 56),
(123, 'khoa', '2013-09-17 10:10:48', 56),
(124, 'ok men', '2013-09-17 10:10:55', 56),
(125, 'ss', '2013-09-17 11:07:12', 8),
(126, 'asasad', '2013-09-17 12:10:19', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
