-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2014 at 02:43 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `kategori` text,
  `path_download` varchar(512) NOT NULL,
  `path_preview` varchar(512) DEFAULT NULL,
  `diupload_oleh` varchar(255) NOT NULL,
  `path_form_penilaian` varchar(255) NOT NULL,
  `tanggal_submit` varchar(20) DEFAULT NULL,
  `tanggal_masuk_mibes` varchar(20) DEFAULT NULL,
  `tanggal_diterima_mibes` varchar(20) DEFAULT NULL,
  `tanggal_submit_revisi` varchar(20) DEFAULT NULL,
  `tanggal_masuk_editor` varchar(20) DEFAULT NULL,
  `abstrak` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `judul`, `penulis`, `status`, `kategori`, `path_download`, `path_preview`, `diupload_oleh`, `path_form_penilaian`, `tanggal_submit`, `tanggal_masuk_mibes`, `tanggal_diterima_mibes`, `tanggal_submit_revisi`, `tanggal_masuk_editor`, `abstrak`, `keywords`) VALUES
(1, 'Perilaku Remaja dalam Menggunakan Media', 'Arief Rahman', 1, 'Sosio-komunikasi', 'files/DPPL e-Cow.pdf', 'img/preview/1.jpg', 'arief_rahman', '', NULL, '2014-05-21 11:01:54', '2014/05/21 11:05:45', NULL, NULL, '', ''),
(2, 'Makna Ikon Naga, Elemen Utama Arsitektur Tradisional Tionghoa', 'Sugiri Kustedja', 3, 'Sosio-kapital', '', NULL, 'redirected', '', '2014-05-21 10:20:53', '2014-05-21 10:20:53', '2014/05/22 09:06:06', NULL, NULL, '', ''),
(3, 'Orientasi Pengembangan Ilmu dalam Perspektif Islam', 'Furqon Syarief Hidayatulloh', 4, 'Sosio-religi', '', NULL, '', '', '0000-00-00 00:00:00', '2014-05-21 10:49:27', '2014-05-21 10:49:57', '2014-05-21 10:50:31', '2014-05-21 10:51:08', '', ''),
(4, 'Incorporating And Converting Biogas Technology Into Household Space', 'Meredian Alam', 0, 'Sosio-dinamika', '', NULL, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(20, 'Strength Journey', 'lolololol', 3, 'Bahasa dan teknologi', 'files/1- Pendahuluan if3240.pdf', NULL, 'destraaaa', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(21, 'New Journal', 'asdhaldak', 5, 'Bioetika', 'files/2-Data,Info&Knowledge.pdf', NULL, 'destraaaa', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(22, 'Test', 'Redirect Dust', 1, 'Penyakit dan masyarakat di Indonesia', 'files/Halaman Kosong.pdf', NULL, 'redirected', '', '2014-05-20 12:37:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Press enter here, it will grow automatically.', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_terpublish`
--

CREATE TABLE IF NOT EXISTS `jurnal_terpublish` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tanggal_terbit` varchar(20) NOT NULL,
  `abstract` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `path_download` varchar(255) NOT NULL,
  `path_preview` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jurnal_terpublish`
--

INSERT INTO `jurnal_terpublish` (`id`, `judul`, `penulis`, `tanggal_terbit`, `abstract`, `kategori`, `path_download`, `path_preview`) VALUES
(1, 'Punden Berundak Gunung Padang "Refleksi Adaptasi Lingkungan dari Masyarakat Megalitik"', 'Lutfi Yondri', '2014-04-25', '', 'Kategori 1', 'files/1 Yondri.pdf', 'img\\preview\\".$id.".jpg'),
(2, 'Analisis Sikap Multiatribut Fishbein Mengenai Atribut Obat Herbal Merek Tolak Angin Sido Muncul di Kota Bandung', 'Windriani Puspita, RahUtami Nugrahani', '2014-04-25', '', 'Kategori Kategori', 'files/2 Windriani.pdf', ''),
(3, 'Partisipasi Masyarakat dan Nelayan dalam Mengurangi Pencemaran Air Laut di Kawasan Pantai Manado-Sulawesi Utara', 'Chairil Nur Siregar', '2014-04-25', '', '', 'files/3 Chairil.pdf', ''),
(4, 'Hubungan Fakta Geopolitik dengan Perencanaan Bahasa', 'Yani Suryani', '2014-04-25', '', '', 'files/4 Yani.pdf', ''),
(5, 'Memaknai Pesan Spiritual Ajaran Agama dalam Membangun Karakter Kasalehan Sosial', 'Yedi Yurwanto', '2014-04-25', '', '', 'files/5 Yedi.pdf', ''),
(6, 'Fenomena Bahasa Baliho Sebagai Identitas Diri Tokoh Cerminan Karakter Budaya', 'Sulastri, Ronidin', '2014-04-25', '', '', 'files/6 Sulastri.pdf', ''),
(7, 'Fleksibilitas Ruang Kelas sebagai Upaya Memenuhi Kebutuhan dalam Membangun Motivasi Anak TK', 'R. Rr. Hasri Sulistiyani, Ruly Darmawan, Lies Neni Budiarti', '2014-04-25', '', '', 'files/7 Hasri.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Penyakit dan masyarakat di Indonesia'),
(2, 'Bioetika'),
(3, 'Teknologi dalam sejarah'),
(4, 'Evolusi dan masyarakat'),
(5, 'Etika dan politik dalam sains dan teknologi'),
(6, 'Energi, lingkungan, dan masyarakat'),
(7, 'Komunikasi sains'),
(8, 'Teknologi dan seni'),
(9, 'Sains mengenai ras dan gender'),
(10, 'Sains, teknologi, dan sinema'),
(11, 'Antropologi biologi'),
(12, 'Obat-obatan, politik, dan budaya'),
(13, 'Bahasa dan teknologi'),
(14, 'Teknologi dan politik dalam pemerolehan sistem militer'),
(15, 'Seni, kriya, dan sains'),
(16, 'Teknologi dan budaya'),
(17, 'Etika dan hukum dalam inovasi teknologi'),
(18, 'Budaya komputasi'),
(19, 'Etika, keyakinan, dan teknologi'),
(20, 'Bidang-bidang lain yang relevan dengan sosioteknologi');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mitra_bestari`
--

INSERT INTO `mitra_bestari` (`id`, `username`, `password`, `email`) VALUES
(1, 'jokobodho', '12345678', 'jokobodho@alamgaib.com');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nomor_makalah` varchar(255) NOT NULL,
  `tanggal_terima` varchar(20) NOT NULL,
  `penerbitan` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `status` text,
  `relevansi` text,
  `jenis` text,
  `keaslian` text,
  `kualitas` text,
  `kelengkapan` text,
  `kelengkapan_lain` varchar(512) DEFAULT NULL,
  `keterbacaan` text,
  `kesesuaian_judul` text,
  `kesesuaian_panjang` text,
  `kesesuaian_ringkasan` text,
  `kesesuaian_dafpus` text,
  `nilai_keseluruhan` text,
  `rekomendasi` text,
  `komentar` text,
  `path_trackchanges` varchar(255) NOT NULL,
  `id_makalah` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `nomor_makalah`, `tanggal_terima`, `penerbitan`, `penulis`, `judul`, `status`, `relevansi`, `jenis`, `keaslian`, `kualitas`, `kelengkapan`, `kelengkapan_lain`, `keterbacaan`, `kesesuaian_judul`, `kesesuaian_panjang`, `kesesuaian_ringkasan`, `kesesuaian_dafpus`, `nilai_keseluruhan`, `rekomendasi`, `komentar`, `path_trackchanges`, `id_makalah`) VALUES
(1, 'AB/12345/2014/15', '2014-04-25', 'Desember', 'Joko Bodho', 'Kitab Bodho', 'Makalah baru', 'Relevan', 'Penelitian teoritis', 'Original', 'Bernilai tinggi', 'Lain-lain', 'kurang cover', 'Mudah dipahami', 'ya', 'ya', 'ya', 'ya', 'Sangat baik', 'Diterima Langsung', 'tulisannya jelek', 'trackchanges/track_1.pdf', 0),
(8, 'Sistem penomoran di sostek kayak apa bahkan :v', '02/16/12', 'Pengennya ini nanti bisa milih opsi penerbitan kapan #ngeyel', 'Sugiri Kustedja', 'Makna Ikon Naga, Elemen Utama Arsitektur Tradisional Tionghoa', 'Makalah baru', 'Relevan', 'Kajian ulang metode yang sudah ada', 'Original', 'Kurang', 'Kurang lengkap', 'Kurang lengkap', 'Sulit dipahami', 'tidak', 'tidak', 'tidak', 'tidak', 'Cukup baik', 'Diterima langsung', 'aklsjdakldjald', 'trackchanges/2-Data,Info&Knowledge.pdf', 2);

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
(2, 'arief_rahman', '13511020', '', '', 'Hahahahhahahhaha', '081234567890', NULL, 'true'),
(11, 'redirected', '12345678', 'destra.bintang.perkasa@gmail.com', 'SHIELD', 'Redirect Dusty', '081234567890', 'Jl. Destra', 'true');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judul`, `content`, `lokasi`) VALUES
(1, 'Overview', '<div align="justify"><b>Journal Sosioteknologi </b>adalah jurnal yang memfokuskan pada tulisan \r\nberupa penelitian interseksi bidang ilmu sains, teknologi, seni, dan \r\nilmu kemanusiaan serta implikasi sains teknologi dan seni terhadap \r\nkehidupan masyarakat.</div><div align="justify">Terbit tiga kali setahun pada bulan April, \r\nAgustus, dan Desember. Jurnal Sosioteknologi berisi tulisan yang \r\ndiangkat dari hasil penelitian, gagasan konseptual, kajian, dan aplikasi\r\n teori, serta ulasan buku.</div>', 'aboutus'),
(2, 'Editorial Board', '<b>Pemimpin Redaksi</b><br>Dicky R. Munaf<br><br><b>Dewan Redaksi</b><br>Dana Waskita<br>Tri Sulistyaningtyas<br>Rr. Sriwahyuni<br>Prima Roza<br>Nia Kurniasih<br>Amas Suryadi<br>Jejen Jaelani<br><br><b>Kesekretariatan &amp; Distribusi<br></b>Rusdiana<br><br><b>Desain &amp; Layout<br></b>Harifa Ali Albar Siregar<br><br><b>Humas<br></b>Ernawati<br><br><b>Ilustrasi Halaman Judul<br></b><i>Farbtafel Painting </i>karya Paul Klee', 'aboutus'),
(3, 'Contact Us', '<h6>Sekretariat Jurnal Sosioteknologi</h6><b>Kelompok Keahlian Ilmu Kemanusiaan FSRD-ITB</b><br>Alamat : Lab. Tek. VII Lantai 1, Jalan Ganesha 10, Bandung 40132, Indonesia<br>Tel./Fax : 62-22-2502189<br>E-mail : jurnalsosioteknologi@yahoo.co.id', 'aboutus'),
(10, 'Buy 1 Get 1 Chatime', 'Setiap Selasa, dengan kupon KakaoTalk. Kadang-kadang perlu reward diri sendiri loh :).<br>', 'announcements'),
(24, 'Ketentuan Substansi Jurnal', '<ol><li>Substansi berisi hasil penelitian interseksi bidang ilmu sains, teknologi, seni, dan ilmu kemanusiaan serta implikasi sains, teknologi, dan seni terhadap kehidupan masyarakat.</li><li>Redaksi menerima tulisan berupa ringkasan hasil penelitian, hasil penelitian sementara, laporan pertemuan ilmiah, atau laporan s<i>tate of the art</i>.</li><li>Redaksi juga menerima artikel gagasan konseptual, kajian dan aplikasi teori, serta resensi buku.<br></li><li>Semua naskah harus disertai pernyataan bahwa naskah tersebut belum pernah diterbitkan sebelumnya oleh organisasi/lembaga lain. <br></li><li>Naskah tidak diterima bila mengandung unsur politik, komersial, subjektif, penonjolan seseorang yang bersifat memuji maupun merendahkan.</li></ol>', 'guidelines'),
(25, 'Ketentuan Teknis Jurnal', '<ol><li>Naskah dikirim dalam bentuk <i>softcopy </i>kepada redaktur jurnal.</li><li>Naskah hendaknya ditulis mengikuti ketentuan bahasa Indonesia yang baik dengan benar atau bahasa Inggris. Format naskah:</li><ul><li>Ukuran kertas A4</li><li>Format file .doc atau .docx (menggunakan Microsoft Word)</li><li>Font Times New Roman, ukuran 12, spasi 1</li><li>Halaman dibagi dua kolom, jarak antarkolom 0.5 cm</li><li>Margin atas, bawah, kiri, dan kanan masing-masing 2.2 cm</li><li>Tidak menyisakan ruang kosong di dalam layout</li></ul></ol>', 'guidelines'),
(27, 'Ketentuan Publikasi Jurnal', '<ol><li>Naskah dapat diterbitkan jika telah dinilai dan disetujui oleh sedikitnya dua ahli di bidangnya masing-masing sebelum diterbitkan.</li><li>Penulis menyetujui untuk mengalihkan hak ciptanya pada jurnal Sosioteknologi ITB jika pada saat naskahnya diterima untuk diterbitkan.<br></li></ol>', 'guidelines'),
(29, 'Ketentuan Struktur Jurnal', '                   Naskah hendaknya secara lengkap memuat:<br><ol><li>Judul ditulis dalam huruf kapital, singkat, jelas, menarik, informatif, maksimal 14 kata, dan tidak boleh ada singkatan.</li><li>Nama\r\n penulis (utama, kedua, ketiga, dst.) ditulis lengkap tanpa gelar, \r\ndiletakkan di bawah judul, diikuti nama lembaga tempat penulis \r\nberafiliasi, serta alamat surel (<i>email</i>) penulis untuk korespondensi.</li><li>Abstrak memuat latar belakang masalah, tujuan, teori dan metode, temuan atau \r\nkepioniran gagasan, dan simpulan utama. Abstrak ditulis dalam bahasa \r\nIndonesia dan bahasa Inggris, masing-masing tidak lebih dari 200 kata \r\ndisertai kata kunci yang terdiri atas 4-6 kata, ukuran font 10, dan \r\nspasi 1.<br></li><li>Naskah ditulis dengan format artikel ilmiah yang terbagi menjadi:</li><ol><li>PENDAHULUAN<br>Pendahuluan memuat latar belakang dan permasalahan, tujuan, menyebutkan teori, dan ringkasan hasil.</li><li>KAJIAN LITERATUR DAN METODE<br><ul><li>Kajian literatur memuat uraian tentang penelitian sebelumnya, teori yang digunakan, dan metode penelitian. </li><li>Kajian literatur dilengkapi dengan referensi yang mengacu pada <a href="http://www.apastyle.org">APA Style of citation</a> (www.apastyle.org).&nbsp; </li></ul></li><li>HASIL DAN PEMBAHASAN<br>Bagian ini mencantumkan hasil penelitian/kajian secara jelas. Selanjutnya, diikuti dengan pembahasan secara mendalam dengan menyebutkan temuan atau kepioniran gagasan beserta signifikansinya. <br></li><li>SIMPULAN <br>Simpulan berisi ringkasan dan penegasan kembali temuan atau kepioniran gagasan.</li><li>SARAN (opsional)<br>Memuat saran untuk peneliti berikutnya dan pemangku kepentingan (stakeholders) di bidang terkait. <br></li><li>DAFTAR PUSTAKA <br>Daftar pustaka mengacu pada <a href="http://www.apastyle.org">APA Style of citation</a>. Pastikan bahwa setiap referensi yang dikutip di dalam naskah terdapat dalam daftar pustaka dan sebaliknya. <span lang="IN">Contoh:</span></li><ul><li><!--[if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves></w:TrackMoves>\r\n  <w:TrackFormatting></w:TrackFormatting>\r\n  <w:PunctuationKerning></w:PunctuationKerning>\r\n  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF></w:DoNotPromoteQF>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>JA</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables></w:BreakWrappedTables>\r\n   <w:SnapToGridInCell></w:SnapToGridInCell>\r\n   <w:WrapTextWithPunct></w:WrapTextWithPunct>\r\n   <w:UseAsianBreakRules></w:UseAsianBreakRules>\r\n   <w:DontGrowAutofit></w:DontGrowAutofit>\r\n   <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>\r\n   <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>\r\n   <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>\r\n   <w:OverrideTableStyleHps></w:OverrideTableStyleHps>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"></m:mathFont>\r\n   <m:brkBin m:val="before"></m:brkBin>\r\n   <m:brkBinSub m:val="--"></m:brkBinSub>\r\n   <m:smallFrac m:val="off"></m:smallFrac>\r\n   <m:dispDef></m:dispDef>\r\n   <m:lMargin m:val="0"></m:lMargin>\r\n   <m:rMargin m:val="0"></m:rMargin>\r\n   <m:defJc m:val="centerGroup"></m:defJc>\r\n   <m:wrapIndent m:val="1440"></m:wrapIndent>\r\n   <m:intLim m:val="subSup"></m:intLim>\r\n   <m:naryLim m:val="undOvr"></m:naryLim>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!--[if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="267">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"></w:LsdException>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"></w:LsdException>\r\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"></w:LsdException>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n  {mso-style-name:"Table Normal";\r\n mso-tstyle-rowband-size:0;\r\n  mso-tstyle-colband-size:0;\r\n  mso-style-noshow:yes;\r\n mso-style-priority:99;\r\n  mso-style-parent:"";\r\n  mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\n  mso-para-margin-top:0cm;\r\n  mso-para-margin-right:0cm;\r\n  mso-para-margin-bottom:10.0pt;\r\n  mso-para-margin-left:0cm;\r\n line-height:115%;\r\n mso-pagination:widow-orphan;\r\n  font-size:11.0pt;\r\n font-family:"Calibri","sans-serif";\r\n mso-ascii-font-family:Calibri;\r\n  mso-ascii-theme-font:minor-latin;\r\n mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;}\r\n</style>\r\n<![endif]-->\r\n\r\n<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt"><span lang="IN"><span style="mso-tab-count:\r\n1"></span>Buku<span style="mso-spacerun:yes"><br></span>Ricoeur, Paul. (2005). The Course of Recognition.\r\nCambridge: Harvard University Press.</span><span lang="IN"></span></p></li><li><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt"><span lang="IN">Jurnal Ilmiah<br>Searle, J. (1990). Is Brain a digital computer?\r\nProceedings of the American Philosophical Association, 64 (3), 21-37.</span><span lang="IN"></span></p></li><li><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt"><span lang="IN">Artikel online<br>Melton, J.G.\r\n(2005). Nation of Islam. In Encyclopaedia Britannica. Diakses dari\r\nhttp://www.britannica.com</span><span lang="IN"></span></p></li><li><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt"><span lang="IN">Sumber Hukum\r\nTertulis<br>Republik\r\nIndonesia. 2005. Peraturan Menteri Pendidikan Nasional No. 19 tahun 2005\r\ntentang Standar Pendidikan Nasional. Jakarta:&nbsp;<span style="mso-tab-count:1"></span>Departemen\r\nPendidikan Nasional.</span></p>\r\n\r\n</li></ul></ol><li>Hanya diperbolehkan menyertakan foto, gambar, tabel, dan bagan yang membantu penjelasan&nbsp; di dalam tulisan. Semua gambar, foto, tabel, atau bagan harus jelas sehingga menghasilkan cetakan yang baik. <br></li><li>Judul tabel diletakkan di atas dan diberi nomor dengan angka arab. Tabel harus disertai sumber yang diletakkan di bawah tabel.</li><li>Foto, gambar, atau bagan diberi judul dan nomor dengan angka arab. Judul, nomor, dan sumber diletakkan di bawah. <br></li><li>Menggunakan simbol dan terminologi yang lazim pada bidangnya masing-masing; satuan ukuran dan timbangan yang digunakan adalah satuan internasional (SI).<br></li></ol>                  ', 'guidelines'),
(30, 'Buy 1 Get 1 Calais', 'Setiap hari Rabu! Untuk yang punya Line dan udah add Line Calais Tea. Sekalian nonton X-Men Days of Future Past pasti asik :3', 'announcements');

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
