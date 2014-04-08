<?php
	include "database_connection.php";
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$query_jurnal = "select * from jurnal where id =' $id '";
		$hasil = mysql_query($query_jurnal,$db);
		$row = mysql_fetch_array($hasil);
		//the path to the PDF file
		$strPDF = $row['path_preview'];
		exec("convert \"{$strPDF}[0]\" \"{$id}.jpg\"");
		echo "<img src=\"{$id}.jpg\"/>";
	} else {
		echo "<p>No preview available</p>";
	}
	//phpinfo();
?>