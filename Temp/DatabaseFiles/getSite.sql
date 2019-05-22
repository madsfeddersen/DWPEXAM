-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Vært: mysql70.unoeuro.com
-- Genereringstid: 22. 05 2019 kl. 23:38:16
-- Serverversion: 5.7.25-28-log
-- PHP-version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madum_eu_db`
--

-- --------------------------------------------------------

--
-- Struktur for visning `getSite`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`madum_eu`@`%` SQL SECURITY DEFINER VIEW `getSite`  AS  select `duck_shop`.`id` AS `id`,`duck_shop`.`shop_name` AS `shop_name`,`duck_shop`.`street_address` AS `street_address`,`duck_shop`.`zipcode` AS `zipcode`,`duck_shop`.`phone` AS `phone`,`duck_shop`.`email` AS `email`,`duck_shop`.`opening_hours` AS `opening_hours`,`duck_shop`.`daily_product` AS `daily_product`,`duck_shop`.`news` AS `news`,`duck_shop`.`shop_description` AS `shop_description` from `duck_shop` ;

--
-- VIEW  `getSite`
-- Data: Ingen
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
