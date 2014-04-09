<?php
	include "database_connection.php";
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$query_jurnal = "select * from jurnal where id = {$id}";
		$hasil = mysql_query($query_jurnal,$db);
		$row = mysql_fetch_array($hasil);
		if($row == NULL) {
			echo "<p>No journal chosen!</p>";
		} else {
			//the path to the PDF file
			$pdfPath = $row['path_download'];
			$imgPath = $row['path_preview'];
			if($imgPath == NULL) {
				$imgPath = "img\\\\preview\\\\".$id.".jpg";
				//echo $imgPath;
				exec("convert \"{$pdfPath}[0]\" \"{$imgPath}\"");
				$query_jurnal = "UPDATE jurnal SET path_preview = '{$imgPath}' WHERE jurnal.id = {$id}";
				//echo $query_jurnal;
				$hasil = mysql_query($query_jurnal,$db);
			}
			echo "<img src=\"{$imgPath}\"/>";
			echo "<p>Download journal <a href=\"{$pdfPath}\">here</a>.</p>";
		}
	} else {
		echo "<p>No journal chosen!</p>";
	}
	//phpinfo();
?>