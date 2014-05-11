<?php
	include "database_connection.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query_del = "delete from post where id=".$id;
		if (!mysql_query($query_del, $db))
		{
			die('Error: ' .mysql_error($db));
		}
		else{
			header('Location: index.php');
		}
	}
?>