-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2014 at 04:27 PM
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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `kategori` varchar(50) DEFAULT NULL,
  `path_download` varchar(512) NOT NULL,
  `path_preview` varchar(512) DEFAULT NULL,
  `diupload_oleh` varchar(255) NOT NULL,
  `path_form_penilaian` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `judul`, `penulis`, `status`, `kategori`, `path_download`, `path_preview`, `diupload_oleh`, `path_form_penilaian`) VALUES
(1, 'Perilaku Remaja dalam Menggunakan Media', 'Arief Rahman', 2, 'Sosio-komunikasi', 'files\\DPPL e-Cow.pdf', 'img\\preview\\1.jpg', 'arief_rahman', ''),
(2, 'Makna Ikon Naga, Elemen Utama Arsitektur Tradisional Tionghoa', 'Sugiri Kustedja', 0, 'Sosio-kapital', '', NULL, '', ''),
(3, 'Orientasi Pengembangan Ilmu dalam Perspektif Islam', 'Furqon Syarief Hidayatulloh', 0, 'Sosio-religi', '', NULL, '', ''),
(4, 'Incorporating And Converting Biogas Technology Into Household Space', 'Meredian Alam', 0, 'Sosio-dinamika', '', NULL, '', ''),
(20, 'Strength Journey', 'lolololol', 0, 'Option 4', 'files/1- Pendahuluan if3240.pdf', NULL, 'destraaaa', ''),
(21, 'New Journal', 'asdhaldak', 0, 'Option 2', 'files/2-Data,Info&Knowledge.pdf', NULL, 'destraaaa', '');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_terpublish`
--

CREATE TABLE IF NOT EXISTS `jurnal_terpublish` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `path_download` varchar(255) NOT NULL,
  `path_preview` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mitra_bestari`
--

CREATE TABLE IF NOT EXISTS `mitra_bestari` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE IF NOT EXISTS `penulis` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `organisasi` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `token_verifikasi` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `username`, `password`, `email`, `organisasi`, `nama_lengkap`, `no_hp`, `token_verifikasi`) VALUES
(2, 'arief_rahman', '13511020', '', '', '', '', ''),
(10, 'destraaaa', 'admin123456', 'destra.bintang.perkasa@gmail.com', 'HMIF', 'Destra Bintang Perkasa', '085715516893', 'true'),
(11, 'redirected', '12345678', 'destra.bintang.perkasa@gmail.com', 'What', 'Redirect Dust', '1234567890', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judul`, `content`, `lokasi`) VALUES
(9, 'Procedure', '<b>Submit<br><i>Tunggu<br></i></b><i><u>Sabar<br><b>Dll.</b><br></u></i><b><i></i></b>', 'guidelines'),
(10, 'Buy1 Get 1 Chatime', 'Hanya untuk testing.<br>', 'announcements'),
(12, 'Post1', 'Demo Tubes<br>', 'guidelines'),
(13, 'Redaktur', '<b>Bambang Riyanto Trilaksono, Prof.Dr.Ir. [ Chief ]<br></b>School of Electrical Engineering and Informatics, ITB, Indonesia<br>briyanto@lskk.ee.itb.ac.id<br><br><h3><b>Redaktur</b></h3><b>Edy Soewono, Prof.Dr. [ Executive Editor ]<br></b>Faculty of Mathematics and Natural Sciences, ITB, Indonesia<br>esoewono@lppm.itb.ac.id<br><br><b>Ismunandar, Prof.<br></b>Faculty of Mathematics and Natural Sciences, ITB, Indonesia<br>ismu@chem.itb.ac.id<br><br><h3>Reviewer</h3><b>Tati S. Sjamsudin Subahar, Prof.Dr.,MS.,DEA.</b><br>School of Life Sciences and Technology, ITB, Indonesia<br>tati@sith.itb.ac.id<br>', 'aboutus'),
(14, 'Contact Us', '<b>Sekretariat Jurnal Sosioteknologi</b><br>Jl. Tamansari 64, Bandung 40116, Indonesia<br>Tel : +62-22-250 1759<br>Fax : +62-22-250 4010, +62-22-251 1215<br>E-mail : proceedings@lppm.itb.ac.id', 'aboutus');

-- --------------------------------------------------------

--
-- Table structure for table `redaktur`
--

CREATE TABLE IF NOT EXISTS `redaktur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `redaktur`
--

INSERT INTO `redaktur` (`id`, `username`, `password`, `email`) VALUES
(2, 'admin_sostek', 'sostek_feat_if', 'destra.bintang.perkasa@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
