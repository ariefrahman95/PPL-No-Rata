<?php
	include "database_connection.php";
	include "editor_upload_file.php";
	if ((isset($_POST['title']))&&(isset($_POST['date']))&&(isset($_POST['author']))&&(isset($_POST['category']))
		&&(isset($_POST['abstract']))&&(isset($_FILES['file']['name']))) {
		$title=$_POST['title'];
		$date=$_POST['date'];
		$author=$_POST['author'];
		$category=$_POST['category'];
		$abstract=$_POST['abstract'];
		$filepath = "files/".$_FILES['file']['name'];
		$id=$_GET['id'];
		$sql_add="INSERT INTO jurnal_terpublish (judul, penulis, tanggal_terbit, kategori, path_download, abstract) 
			values ('$title', '$author', '$date', '$category', '$filepath', '$abstract')";
		$sql_delete="DELETE FROM jurnal where id='$id'";
		if (!mysql_query($sql_add, $db)||!mysql_query($sql_delete, $db))
		{
			die('Error: ' . mysql_error($db));
		}
		?>
			<script type="text/javascript">
				window.location="editor.php"; 
			</script>
		<?php
	} else {
		echo "<p>Error upload</p>";
		echo $_POST['title']." ".$_POST['date']." ".$_POST['author']." ".$_POST['category']." ".$_POST['abstract']." ". $_FILES['file']['name'];
	}
?>