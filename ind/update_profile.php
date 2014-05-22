<?php
	session_start();
	$user = $_SESSION['logged_in'];
	include "database_connection.php";
	$query_post = "select * from penulis where username='".$user."'";
	$hasil = mysql_query($query_post,$db);
	$row = mysql_fetch_array($hasil);
	
	$password=$_POST['password'];
	$nama_lengkap=$_POST['title'];
	$organization=$_POST['organization'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$sql_add="UPDATE penulis SET password='$password', organisasi='$organization', nama_lengkap='$nama_lengkap', no_hp='$phone' WHERE username='$user'";
	$result=mysql_query($sql_add);
?>
<script>
	window.location="profile.php"
</script>



