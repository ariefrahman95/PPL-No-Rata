<?php
	session_start();
	include "database_connection.php";
	include "upload_trackchanges.php";
	if ((isset($_POST['nomor_makalah']))&&(isset($_POST['penerbitan']))&&(isset($_POST['penulis']))&&(isset($_POST['title']))){
		$mynomormakalah=$_POST['nomor_makalah'];
		$mydate=$_POST['date01'];
		$mypenerbitan=$_POST['penerbitan'];
		$mypenulis=$_POST['penulis'];
		$uploadedby=$_SESSION['logged_in'];
		$mytitle = $_POST['title'];
		$mystatus = $_POST['status'];
		$myrelevan = $_POST['relevan'];
		$myjenis = $_POST['jenis'];
		$mykeaslian = $_POST['keaslian'];
		$mykualitas = $_POST['kualitas'];
		$mykelengkapan = $_POST['kelengkapan'];
		if($_POST['kelengkapan']=="Lain-lain") {
			$mykelengkapan_lain = $_POST['kelengkapan_lain'];
		} else {
			$mykelengkapan_lain = $_POST['kelengkapan'];
		}
		/*$mykelengkapan_lain = $_POST['kelengkapan_lain'];*/
		$myketerbacaan = $_POST['keterbacaan'];
		$mykesesuaian_judul = $_POST['kesesuaian_judul'];
		$mykesesuaian_panjang = $_POST['kesesuaian_panjang'];
		$mykesesuaian_ringkasan = $_POST['kesesuaian_ringkasan'];
		$mykesesuaian_dafpus = $_POST['kesesuaian_dafpus'];
		$mynilai_keseluruhan = $_POST['nilai_keseluruhan'];
		$myrekomendasi = $_POST['rekomendasi'];
		$mykomentar = $_POST['komentar'];
		$filepath = "trackchanges/".$_FILES['file']['name'];
		$sql_add="INSERT INTO penilaian (nomor_makalah, tanggal_terima, penerbitan, penulis, judul, status, relevansi, jenis, keaslian, kualitas, kelengkapan, kelengkapan_lain, keterbacaan, kesesuaian_judul, kesesuaian_panjang, kesesuaian_ringkasan, kesesuaian_dafpus, nilai_keseluruhan, rekomendasi, komentar, path_trackchanges) values ('$mynomormakalah', '$mydate', '$mypenerbitan', '$mypenulis', '$mytitle', '$mystatus', '$myrelevan', '$myjenis', '$mykeaslian', '$mykualitas', '$mykelengkapan', '$mykelengkapan_lain', '$myketerbacaan', '$mykesesuaian_judul', '$mykesesuaian_panjang', '$mykesesuaian_ringkasan', '$mykesesuaian_dafpus', '$mynilai_keseluruhan', '$myrekomendasi', '$mykomentar', '$filepath')";
		//$result=mysql_query($sql_add);
		if (!mysql_query($sql_add, $db))
		{
			echo 1;
			die('Error: ' . mysql_error($db));
		}
		?>
		<script>
			 window.location="index.php"
		</script>
		<?php
	}
?>