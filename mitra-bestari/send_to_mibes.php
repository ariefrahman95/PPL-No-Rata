<?php
	include "database_connection.php";
	$count = $_POST['count'];
	$query = "";
	for($i=0; $i<$count; $i++){
		$id = "id".$i;
		if(isset($_POST[$id])){
			if($query==""){
				$query = $query."id='".$_POST[$id]."'";
			}
			else{
				$query = $query." or id='".$_POST[$id]."'";
			}
		}
	}
	$query_jurnal = "UPDATE jurnal SET status=4 where $query";
	date_default_timezone_set('Asia/Jakarta');
	$now = date("Y/m/d H:i:s");
	$query_date = "UPDATE jurnal SET tanggal_diterima_mibes='".$now."', tanggal_masuk_editor='".$now."' where $query";
	if(mysql_query($query_jurnal,$db)&&mysql_query($query_date,$db)){
		echo $query_jurnal;
	}
	else{
		echo 0;
	}
?>