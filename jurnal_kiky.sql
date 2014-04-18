-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2014 at 05:31 AM
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
-- Table structure for table `editor`
--

CREATE TABLE IF NOT EXISTS `editor` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `id` int(11) NOT NULL DEFAULT '0',
  `judul` varchar(200) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `path_download` varchar(512) NOT NULL,
  `path_preview` varchar(512) DEFAULT NULL,
  `diupload_oleh` varchar(255) NOT NULL,
  `path_form_penilaian` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `judul`, `penulis`, `status`, `kategori`, `path_download`, `path_preview`, `diupload_oleh`, `path_form_penilaian`) VALUES
(1, 'Perilaku Remaja dalam Menggunakan Media', 'Arief Rahman', 'Publish', 'Sosio-komunikasi', 'files\\DPPL e-Cow.pdf', 'img\\preview\\1.jpg', '', ''),
(2, 'Makna Ikon Naga, Elemen Utama Arsitektur Tradisional Tionghoa', 'Sugiri Kustedja', 'Publish', 'Sosio-kapital', '', NULL, '', ''),
(3, 'Orientasi Pengembangan Ilmu dalam Perspektif Islam', 'Furqon Syarief Hidayatulloh', 'Publish', 'Sosio-religi', '', NULL, '', ''),
(4, 'Incorporating And Converting Biogas Technology Into Household Space', 'Meredian Alam', 'Publish', 'Sosio-dinamika', '', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_terpublish`
--

CREATE TABLE IF NOT EXISTS `jurnal_terpublish` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `path_download` varchar(255) NOT NULL,
  `path_preview` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mitra_bestari`
--

CREATE TABLE IF NOT EXISTS `mitra_bestari` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE IF NOT EXISTS `penulis` (
  `id` int(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `organisasi` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `username`, `password`, `email`, `organisasi`, `nama_lengkap`, `no_hp`) VALUES
(1, 'destraaaa', '12345678', '', '', '', ''),
(2, 'arief_rahman', '13511020', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `redaktur`
--

CREATE TABLE IF NOT EXISTS `redaktur` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
