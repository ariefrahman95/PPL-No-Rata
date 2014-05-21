<?php
	session_start();
	include "database_connection.php";
	include "upload_trackchanges.php";
	if ((isset($_POST['nomor_makalah']))&&(isset($_POST['penerbitan']))&&(isset($_POST['penulis']))&&(isset($_POST['judul']))){
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
		$myketerbacaan = $_POST['keterbacaan'];
		$mykesesuaian_judul = $_POST['kesesuaian_judul'];
		$mykesesuaian_panjang = $_POST['kesesuaian_panjang'];
		$mykesesuaian_ringkasan = $_POST['kesesusaian_ringkasan'];
		$mykesesuaian_dafpus = $_POST['kesesuaian_dafpus'];
		$mynilai_keseluruhan = $_POST['nilai_keseluruhan'];
		$myrekomendasi = $_POST['rekomendasi'];
		$mykomentar = $_POST['komentar'];
		$filepath = "files/".$_FILES['file']['name'];
		$sql_add="INSERT INTO penilaian (judul, penulis, status, kategori, path_download, diupload_oleh, abstrak, keywords) values ('$mytitle', '$myauthors', 'submitted', '$mykategori', '$filepath' ,'$uploadedby', '$abstrak', '$keywords')";
		$result=mysql_query($sql_add);
		/*if (!mysql_query($sql_add, $db))
		{
			echo 1;
			die('Error: ' . mysql_error($db));
		}*/
		?>
		<script>
			window.location="index.php"
		</script>
		<?php
	}
?>