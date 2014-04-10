-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2014 at 11:34 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `id` int(11) NOT NULL DEFAULT '0',
  `judul` varchar(200) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `path_download` varchar(512) NOT NULL,
  `path_preview` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `judul`, `penulis`, `tanggal`, `status`, `kategori`, `path_download`, `path_preview`) VALUES
(1, 'Perilaku Remaja dalam Menggunakan Media', 'Arief Rahman', '2013-02-14', 'Publish', 'Sosio-komunikasi', 'files\\DPPL e-Cow.pdf', 'img\\preview\\1.jpg'),
(2, 'Makna Ikon Naga, Elemen Utama Arsitektur Tradisional Tionghoa', 'Sugiri Kustedja', '2013-04-25', 'Publish', 'Sosio-kapital', '', NULL),
(3, 'Orientasi Pengembangan Ilmu dalam Perspektif Islam', 'Furqon Syarief Hidayatulloh', '2013-10-27', 'Publish', 'Sosio-religi', '', NULL),
(4, 'Incorporating And Converting Biogas Technology Into Household Space', 'Meredian Alam', '2014-02-04', 'Publish', 'Sosio-dinamika', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
