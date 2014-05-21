<?php
	session_start();
	include "database_connection.php";
	if($_POST['optionsRadios']=="baru"){
		include "upload_file.php";
		if ((isset($_POST['title']))&&(isset($_POST['authors']))&&(isset($_FILES['file']['name']))){
			$mytitle=$_POST['title'];
			$myauthors=$_POST['authors'];
			$mykategori=$_POST['kategori'];
			$uploadedby=$_SESSION['logged_in'];
			$abstrak = $_POST['abstrak'];
			$keywords = $_POST['keywords'];
			$filepath = "files/".$_FILES['file']['name'];
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
	}
	else if ($_POST['optionsRadios']=="revisi"){
		if((isset($_POST['revisi_dari']))&&(isset($_FILES['file_revisi']['name']))){
			$revisi_dari = $_POST['revisi_dari'];
			$file_revisi = "files/".$_FILES['file_revisi']['name'];
			$uploadedby=$_SESSION['logged_in'];
			$sql_file="SELECT * FROM jurnal where diupload_oleh='$uploadedby' and judul='$revisi_dari'";
			$result=mysql_query($sql_file);
			while($row=mysql_fetch_array($result, $db)){
				$file_lama=$row['path_download'];
			}
			include "upload_revisi.php";
			date_default_timezone_set('Asia/Krasnoyarsk');
			$now = date("Y/m/d H:i:s");
			$sql_update="UPDATE jurnal SET tanggal_submit_revisi='$now', path_download='$file_revisi'";
			$result=mysql_query($sql_update);
			?>
			<script>
				window.location="index.php"
			</script>
			<?php
		}
	}
?>