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
	$query_jurnal = "UPDATE jurnal SET status=3 where $query";
	//date_default_timezone_set('Asia/Krasnoyarsk');
	//$now = date("Y/m/d H:i:s");
	//$query_date = "UPDATE jurnal SET tanggal_diterima_mibes=$now where $query";
	if(mysql_query($query_jurnal,$db)){
		echo $query_jurnal;
	}
	else{
		echo 0;
	}
?>