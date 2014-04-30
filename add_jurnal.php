<?php
	session_start();
	include "database_connection.php";
	include "upload_file.php";
	if ((isset($_POST['title']))&&(isset($_POST['authors']))&&(isset($_FILES['file']['name']))){
		$mytitle=$_POST['title'];
		$myauthors=$_POST['authors'];
		$mykategori=$_POST['kategori'];
		$uploadedby=$_SESSION['logged_in'];
		$filepath = "files/".$_FILES['file']['name'];
		$sql_add="INSERT INTO jurnal (judul, penulis, status, kategori, path_download, diupload_oleh) values ('$mytitle', '$myauthors', 'submitted', '$mykategori', '$filepath' ,'$uploadedby')";
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