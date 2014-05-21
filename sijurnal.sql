-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2014 at 01:26 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `sijurnal`
--

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
  `address` text,
  `token_verifikasi` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `username`, `password`, `email`, `organisasi`, `nama_lengkap`, `no_hp`, `address`, `token_verifikasi`) VALUES
(2, 'arief_rahman', '1234567890   ', '', '', 'Hahahahhahahhaha', '081234567890', NULL, ''),
(10, 'destraaaa', '1234567890   ', 'destra.bintang.perkasa@gmail.com', '', 'Hahahahhahahhaha', '081234567890', NULL, 'true'),
(11, 'redirected', '1234567890  ', 'destra.bintang.perkasa@gmail.com', 'SHIELD', 'Redirect Dusty', '081234567890', 'Jl. Destra', 'true');
