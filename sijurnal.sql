-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2014 at 05:23 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `sijurnal`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jurnal_terpublish`
--

INSERT INTO `jurnal_terpublish` (`id`, `judul`, `penulis`, `tanggal_terbit`, `kategori`, `path_download`, `path_preview`) VALUES
(1, 'Punden Berundak Gunung Padang "Refleksi Adaptasi Lingkungan dari Masyarakat Megalitik"', 'Lutfi Yondri', '2014-04-25', 'Kategori 1', 'files/1 Yondri.pdf', 'img\\preview\\".$id.".jpg'),
(2, 'Analisis Sikap Multiatribut Fishbein Mengenai Atribut Obat Herbal Merek Tolak Angin Sido Muncul di Kota Bandung', 'Windriani Puspita, RahUtami Nugrahani', '2014-04-25', 'Kategori Kategori', 'files/2 Windriani.pdf', ''),
(3, 'Partisipasi Masyarakat dan Nelayan dalam Mengurangi Pencemaran Air Laut di Kawasan Pantai Manado-Sulawesi Utara', 'Chairil Nur Siregar', '2014-04-25', '', 'files/3 Chairil.pdf', ''),
(4, 'Hubungan Fakta Geopolitik dengan Perencanaan Bahasa', 'Yani Suryani', '2014-04-25', '', 'files/4 Yani.pdf', ''),
(5, 'Memaknai Pesan Spiritual Ajaran Agama dalam Membangun Karakter Kasalehan Sosial', 'Yedi Yurwanto', '2014-04-25', '', 'files/5 Yedi.pdf', ''),
(6, 'Fenomena Bahasa Baliho Sebagai Identitas Diri Tokoh Cerminan Karakter Budaya', 'Sulastri, Ronidin', '2014-04-25', '', 'files/6 Sulastri.pdf', ''),
(7, 'Fleksibilitas Ruang Kelas sebagai Upaya Memenuhi Kebutuhan dalam Membangun Motivasi Anak TK', 'R. Rr. Hasri Sulistiyani, Ruly Darmawan, Lies Neni Budiarti', '2014-04-25', '', 'files/7 Hasri.pdf', '');
