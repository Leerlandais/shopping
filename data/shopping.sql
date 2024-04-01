-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 01, 2024 at 05:49 AM
-- Server version: 11.2.2-MariaDB
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(128) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'fruit'),
(2, 'vegetable'),
(3, 'dairy'),
(4, 'meat'),
(5, 'Soft Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

DROP TABLE IF EXISTS `expenditure`;
CREATE TABLE IF NOT EXISTS `expenditure` (
  `id_by_date` date NOT NULL DEFAULT current_timestamp(),
  `amount_out` decimal(30,2) NOT NULL,
  PRIMARY KEY (`id_by_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

DROP TABLE IF EXISTS `funds`;
CREATE TABLE IF NOT EXISTS `funds` (
  `id_by_date` date NOT NULL DEFAULT current_timestamp(),
  `amount_available` decimal(50,2) NOT NULL,
  PRIMARY KEY (`id_by_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
CREATE TABLE IF NOT EXISTS `income` (
  `id_by_date` date NOT NULL DEFAULT current_timestamp(),
  `amount_in` decimal(30,2) NOT NULL,
  PRIMARY KEY (`id_by_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `inv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `main_inv_id` int(10) UNSIGNED NOT NULL,
  `current_stock` int(11) NOT NULL,
  `stack_size` int(10) UNSIGNED DEFAULT 1,
  `buy_price` decimal(4,2) NOT NULL,
  PRIMARY KEY (`inv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

DROP TABLE IF EXISTS `main`;
CREATE TABLE IF NOT EXISTS `main` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `name`) VALUES
(1, 'Apples'),
(2, 'Oranges'),
(3, 'Bananas'),
(4, 'Onions'),
(5, 'Potatoes'),
(6, 'Peppers'),
(7, 'Leeks'),
(8, 'Coca Cola'),
(9, 'Ballygowan'),
(10, 'Milk'),
(11, 'Butter'),
(12, 'Cheddar'),
(13, 'Whole Chicken');

-- --------------------------------------------------------

--
-- Table structure for table `main_has_price`
--

DROP TABLE IF EXISTS `main_has_price`;
CREATE TABLE IF NOT EXISTS `main_has_price` (
  `price_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `main_price_id` int(10) UNSIGNED NOT NULL,
  `cost_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`price_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_has_stuff`
--

DROP TABLE IF EXISTS `main_has_stuff`;
CREATE TABLE IF NOT EXISTS `main_has_stuff` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `main_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `markup_id` int(10) UNSIGNED DEFAULT NULL,
  `promo_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_has_stuff`
--

INSERT INTO `main_has_stuff` (`id`, `main_id`, `category_id`, `markup_id`, `promo_id`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 2, NULL, NULL),
(5, 5, 2, NULL, NULL),
(6, 6, 2, NULL, NULL),
(7, 7, 2, NULL, NULL),
(8, 8, 5, NULL, NULL),
(9, 9, 5, NULL, NULL),
(10, 10, 3, NULL, NULL),
(11, 11, 3, NULL, NULL),
(12, 12, 3, NULL, NULL),
(13, 13, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `markup`
--

DROP TABLE IF EXISTS `markup`;
CREATE TABLE IF NOT EXISTS `markup` (
  `markup_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `markup_percentage` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`markup_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `promo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `promo_percentage` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
