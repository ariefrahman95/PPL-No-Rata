<?php
	include "database_connection.php";
	if (isset($_POST['username'])){
		$myusername=$_POST['username'];
		$myusername = stripslashes($myusername);
		$myusername = mysql_real_escape_string($myusername);
		//cek udah ada username apa belum
		$sql_check="SELECT * FROM penulis WHERE username='$myusername'";
		$result=mysql_query($sql_check);
		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
		//kalo udah ada
		if ($count==0){
			echo '0';
		}
		else{
			echo '1';
		}
	}
	else if (isset($_POST['username2'])){
		$myusername=$_POST['username2'];
		$mypassword=$_POST['password'];

		// To protect MySQL injection (more detail about MySQL injection)
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		$myusername = mysql_real_escape_string($myusername);
		$mypassword = mysql_real_escape_string($mypassword);
		//cek udah ada username apa belum
		$sql_check="SELECT * FROM penulis WHERE username='$myusername' and password='$mypassword'";
		$result=mysql_query($sql_check);
		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
		//kalo udah ada

		if ($count!=1){
			?>
			<script>
				alert("wrong username or password");
				window.location="login.php";
			</script>
			<?php
		}
		else {
			$row = mysql_fetch_array($result);
			if($row['token_verifikasi']!="true"){
				header('Location: verify.php');
			}
			else{
				session_start();
				$_SESSION['logged_in']=$myusername;
				if(isset($_GET['submit'])){
					header('Location: submit_form.php');
				}
				else{
					header('Location: index.php');
				}
			}
		}
	}
?>