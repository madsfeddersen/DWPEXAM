-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 22. 05 2019 kl. 14:40:22
-- Serverversion: 5.7.24
-- PHP-version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duckshopdb`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `for_duck` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `images`
--

INSERT INTO `images` (`image_id`, `file_name`, `for_duck`, `uploaded_on`, `status`) VALUES
(1, 'robbie.jpeg', '', '2019-05-22 14:04:51', '1'),
(2, 'robbie.jpeg', '', '2019-05-22 14:08:09', '1'),
(3, 'Grandma.jpeg', '', '2019-05-22 14:28:14', '1'),
(4, 'Grandma.jpeg', '', '2019-05-22 14:28:27', '1'),
(5, 'Grandma.jpeg', 'Test', '2019-05-22 14:38:58', '1'),
(6, 'RR.png', 'Robbie', '2019-05-22 15:23:37', '1'),
(7, 'svend.png', 'Svend', '2019-05-22 15:44:10', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
