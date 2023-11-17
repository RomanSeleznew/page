-- phpMyAdmin SQL 
-- version 1.0.0
-- https://www.phpmyadmin.net

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_shop`
--

CREATE TABLE IF NOT EXISTS `tbl_page` (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`id`, `title`, `phone`, `email`) VALUES
(1, 'Мария', '+7 (938) 126-65-00', 'pochta@maim.ru'),
(2, 'Иван', '+7 (938) 126-65-00', 'pochta@maim.ru');