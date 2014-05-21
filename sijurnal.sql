-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2014 at 11:06 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `sijurnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `kategori` text,
  `path_download` varchar(512) NOT NULL,
  `path_preview` varchar(512) DEFAULT NULL,
  `diupload_oleh` varchar(255) NOT NULL,
  `path_form_penilaian` varchar(255) NOT NULL,
  `tanggal_submit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_masuk_mibes` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tanggal_submit_revisi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tanggal_masuk_editor` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `abstrak` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `judul`, `penulis`, `status`, `kategori`, `path_download`, `path_preview`, `diupload_oleh`, `path_form_penilaian`, `tanggal_submit`, `tanggal_masuk_mibes`, `tanggal_submit_revisi`, `tanggal_masuk_editor`, `abstrak`, `keywords`) VALUES
(1, 'Perilaku Remaja dalam Menggunakan Media', 'Arief Rahman', 2, 'Sosio-komunikasi', 'files/DPPL e-Cow.pdf', 'img/preview/1.jpg', 'arief_rahman', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(2, 'Makna Ikon Naga, Elemen Utama Arsitektur Tradisional Tionghoa', 'Sugiri Kustedja', 0, 'Sosio-kapital', '', NULL, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(3, 'Orientasi Pengembangan Ilmu dalam Perspektif Islam', 'Furqon Syarief Hidayatulloh', 4, 'Sosio-religi', '', NULL, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(4, 'Incorporating And Converting Biogas Technology Into Household Space', 'Meredian Alam', 0, 'Sosio-dinamika', '', NULL, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(20, 'Strength Journey', 'lolololol', 3, 'Bahasa dan teknologi', 'files/1- Pendahuluan if3240.pdf', NULL, 'destraaaa', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(21, 'New Journal', 'asdhaldak', 5, 'Bioetika', 'files/2-Data,Info&Knowledge.pdf', NULL, 'destraaaa', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(22, 'Test', 'Redirect Dust', 0, 'Penyakit dan masyarakat di Indonesia', 'files/Halaman Kosong.pdf', NULL, 'redirected', '', '2014-05-20 12:37:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Press enter here, it will grow automatically.', 'test');
