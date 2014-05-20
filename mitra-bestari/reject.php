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
	$query_jurnal = "UPDATE jurnal SET status=0 where $query";
	if(mysql_query($query_jurnal,$db)){
		echo $query_jurnal;
	}
	else{
		echo 0;
	}
?>