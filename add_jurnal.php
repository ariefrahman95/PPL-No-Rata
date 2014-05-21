<?php
	session_start();
	include "database_connection.php";
	include "upload_file.php";
	if ((isset($_POST['title']))&&(isset($_POST['authors']))&&(isset($_FILES['file']['name']))){
		$mytitle=$_POST['title'];
		$myauthors=$_POST['authors'];
		$mykategori=$_POST['kategori'];
		$uploadedby=$_SESSION['logged_in'];
		$abstrak = $_POST['abstrak'];
		$keywords = $_POST['keywords'];
		$filepath = "files/".$_FILES['file']['name'];
		date_default_timezone_set('Asia/Jakarta')
		$sql_add="insert into jurnal (judul, penulis, status, kategori, path_download, diupload_oleh, abstrak, keywords) values ('$mytitle', '$myauthors', '1', '$mykategori', '$filepath' ,'$uploadedby', '$abstrak', '$keywords')";
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