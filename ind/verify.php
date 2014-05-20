<?php
	if(isset($_GET['verify'])){
		$token = $_GET['verify'];
		include "database_connection.php";
		$sql_check="SELECT * FROM penulis WHERE token_verifikasi='$token'";
		$result=mysql_query($sql_check);
		$count=mysql_num_rows($result);
		if($count != 1){
			echo 'Please verify your email.';
		}
		else{
			$row = mysql_fetch_array($result);
			if($row['username']==$_GET['user']){
				session_start();
				$user = $_GET['user'];
				$_SESSION['logged_in']=$user;
				$sql_check="UPDATE penulis SET token_verifikasi='true' WHERE username='$user'";
				$result=mysql_query($sql_check);
				echo 'Thanks. Your account has been verified. Redirecting.';
				header('Location: index.php');
			}
			else{
				header('Location: verify.php');
			}
		}
	}
	else{
		echo 'Please verify your email.';
	}
?>