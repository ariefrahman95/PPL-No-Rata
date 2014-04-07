-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2014 at 06:48 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sijurnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `username`, `password`) VALUES
(1, 'destraaaa', '12345678'),
(2, 'arief_rahman', '13511020');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `id` int(11) NOT NULL DEFAULT '0',
  `judul` varchar(200) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `path_preview` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `judul`, `penulis`, `tanggal`, `status`, `kategori`, `path_preview`) VALUES
(1, 'Perilaku Remaja dalam Menggunakan Media', 'Reni Sureni', '2013-02-14', 'Publish', 'Sosio-komunikasi', NULL),
(2, 'Makna Ikon Naga, Elemen Utama Arsitektur Tradisional Tionghoa', 'Sugiri Kustedja', '2013-04-25', 'Publish', 'Sosio-kapital', NULL),
(3, 'Orientasi Pengembangan Ilmu dalam Perspektif Islam', 'Furqon Syarief Hidayatulloh', '2013-10-27', 'Publish', 'Sosio-religi', NULL),
(4, 'Incorporating And Converting Biogas Technology Into Household Space', 'Meredian Alam', '2014-02-04', 'Publish', 'Sosio-dinamika', NULL);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
