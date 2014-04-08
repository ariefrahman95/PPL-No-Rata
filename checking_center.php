<?php
	include "database_connection.php";
	if (isset($_POST['username'])){
		$myusername=$_POST['username'];
		$mypassword=$_POST['password'];

		// To protect MySQL injection (more detail about MySQL injection)
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		$myusername = mysql_real_escape_string($myusername);
		$mypassword = mysql_real_escape_string($mypassword);
		//cek udah ada username apa belum
		$sql_check="SELECT * FROM author WHERE username='$myusername'";
		$result=mysql_query($sql_check);
		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
		//kalo udah ada
		if ($count!=0){
			?>
			<script>
				alert("username already exists");
				window.location="register.php";
			</script>
			<?php
		}
		else {
			$sql_add="INSERT INTO author (username, password) values ('$myusername', '$mypassword')";
			$result=mysql_query($sql_add);
			/*if (!mysqli_query($db,$sql_add))
			{
				die('Error: ' . mysqli_error($db));
			}*/
			?>
			<script type="text/javascript">
				localStorage.username='<?php echo $myusername;?>';
				var d = new Date();
				d.setDate(d.getDate() + 30);
				var n = d.getTime();
				localStorage.expired_time=n; 
				window.location="index.php";
			</script>
			<?php
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
		$sql_check="SELECT * FROM author WHERE username='$myusername' and password='$mypassword'";
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
			?>
			<script type="text/javascript">
				localStorage.username='<?php echo $myusername;?>';
				var d = new Date();
				d.setDate(d.getDate() + 30);
				var n = d.getTime();
				localStorage.expired_time=n; 
				window.location="index.php";
			</script>
			<?php
		}
	}
?>