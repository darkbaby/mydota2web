-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dota2`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `dota2_team`
--

CREATE TABLE IF NOT EXISTS `dota2_team` (
  `TeamName` text COLLATE utf8_unicode_ci,
  `MatchesPlay` text COLLATE utf8_unicode_ci,
  `Ranking` int(11) DEFAULT NULL,
  `Sponsor` text COLLATE utf8_unicode_ci,
  `Player1` text COLLATE utf8_unicode_ci,
  `Role1` text COLLATE utf8_unicode_ci,
  `Player2` text COLLATE utf8_unicode_ci,
  `Role2` text COLLATE utf8_unicode_ci,
  `Player3` text COLLATE utf8_unicode_ci,
  `Role3` text COLLATE utf8_unicode_ci,
  `Player4` text COLLATE utf8_unicode_ci,
  `Role4` text COLLATE utf8_unicode_ci,
  `Player5` text COLLATE utf8_unicode_ci,
  `Role5` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `dota2_team`
--

INSERT INTO `dota2_team` (`TeamName`, `MatchesPlay`, `Ranking`, `Sponsor`, `Player1`, `Role1`, `Player2`, `Role2`, `Player3`, `Role3`, `Player4`, `Role4`, `Player5`, `Role5`) VALUES
('Cloud9', '114/11/65', 3, 'HyperX', 'EternalEnvy', 'Carry', 'FATA-', 'Midlane', 'bOne7', 'Offlane', 'Aui_2000', 'Ganker', 'pieliedie', 'Support'),
('Evil_Geniuses', '281/16/147', 1, 'Monster_Energy', 'Fear', 'Carry', 'Arteezy', 'Midlane', 'UNiVeRsE', 'Offlane', 'zai', 'Ganker', 'ppd', 'Support'),
('Secret_Team', '43/4/7', 2, 'Alienware', 'KuroKy', 'Carry', 's4', 'Midlane', 'Misery', 'Offlane', 'BigDaddy', 'Ganker', 'Puppey', 'Support'),
('Natus_Vincere', '363/19/157', 5, 'Steelseries', 'XBOCT', 'Carry', 'Dendi', 'Midlane', 'Funn1k', 'Offlane', 'VANSKOR', 'Ganker', 'Goblak', 'Support'),
('Team_Tinker', '52/14/25', 4, '100TB', 'qojqva', 'Carry', 'Pajkatt', 'Midlane', 'SingSing', 'Offlane', 'EGM', 'Ganker', 'BuLba', 'Support'),
('Alliance', '327/17/148', 7, 'Logitech', 'Loda', 'Carry', 'Chessie', 'Midlane', 'AdmiralBulldog', 'Offlane', 'Mynuts', 'Ganker', 'Akke', 'Support'),
('Team_Empire', '369/26/186', 6, 'Razer', 'Silent', 'Carry', 'Resolut1on', 'Midlane', 'yoky', 'Offlane', 'Solo', 'Ganker', 'ALWAYSWANNAFLY', 'Support'),
('Virtus_Pro', '263/26/235', 8, 'BenQ', 'BzzIsPerfect', 'Carry', 'God', 'Midlane', 'Sedoy', 'Offlane', 'yol', 'Ganker', 'JotM', 'Support'),
('Virtus_Pro_Polar', '67/8/39', 9, 'MelBet', 'IllidanSTR', 'Carry', 'DkPhobos', 'Midlane', 'Mag', 'Offlane', 'Lil', 'Ganker', 'Fng', 'Support'),
('Lgd_Gaming', '192/20/109', 10, 'Taobao', 'Sylar', 'Carry', 'Yao', 'Midlane', 'InJuly', 'Offlane', 'MMY', 'Ganker', 'Faith', 'Support'),
('Newbee', '114/8/44', 11, 'ACE', 'Hao', 'Carry', 'Mu', 'Midlane', 'Rabbit', 'Offlane', 'Banana', 'Ganker', 'SanSheng', 'Support'),
('Vici_Gaming', '198/10/93', 12, 'RiverStone', 'Black^', 'Carry', 'Super', 'Midlane', 'iceiceice', 'Offlane', 'Fenrir', 'Ganker', 'fy', 'Support'),
('Mvp_Phoenix', '88/7/55', 13, 'Hot6ix', 'QO', 'Carry', 'Heen', 'Midlane', 'Forev', 'Offlane', 'Reisen', 'Ganker', 'March', 'Support'),
('Rave', '69/6/42', 14, 'WTFast', 'Jeyo', 'Carry', 'Ryoyr', 'Midlane', 'Chrissy', 'Offlane', 'Cast', 'Ganker', 'ninjaboogie', 'Support'),
('Invictus_Gaming', '195/18/99', 15, 'Wang Sicong', 'Luo', 'Carry', 'Ferrari_430', 'Midlane', 'June', 'Offlane', 'ChuaN', 'Ganker', 'chisbug', 'Support');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
