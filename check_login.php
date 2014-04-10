<?php 
	include "database_connection.php";
	if ((isset($_POST['username']))&&(isset($_POST['password']))){
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
		//if(!($result)) echo mysql_error();
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
			</script>
			<?php
				if(isset($_GET['submit'])){
			?>
				<script>
					window.location="submit_form.php";
				</script>
			<?php
				}else{
			?>
				<script>
					window.location="index.php";
				</script>
			<?php
			}
		}
	}