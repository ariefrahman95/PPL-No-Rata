<?php
	session_start();
	if(!isset($_SESSION['logged_in'])){
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Profile | Website Jurnal Sosioteknologi</title>
	<?php include "meta_and_css.php" ?>

	<script type="text/javascript">
		var xmlhttp;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	   }
	   var valid = false;
	   
		function password_check () {
			var password = document.getElementById('password').value;
			//var email = document.getElementById('email').value;
			//var username = document.getElementById('username').value;
			//if(password == email || password == username) {
			//	document.getElementById("status2").innerHTML='<font color="#cc0000">Password tidak boleh sama dengan email maupun username</font>';
			//}
			if(password.length > 7){//if the lenght greater than 3 characters
				valid = true;
				document.getElementById("status2").innerHTML='<font color="Green"></font>';
			}
			else{
				document.getElementById("status2").innerHTML='<font color="#cc0000">Password must contains more than 7 characters</font>';
			}
			this.validasi();
		}
		function password2_check() {
			var password = document.getElementById('password').value;
			var password2 = document.getElementById('password2').value;
			if(password == password2) {
				valid = true;
				document.getElementById("status3").innerHTML='<font color="Green"></font>';
			}
			else{
				document.getElementById("status3").innerHTML='<font color="#cc0000">Enter the same password as above</font>';
			}
			this.validasi();
		}
		function validasi () {
			if (valid) {
				document.getElementById("reg_btn").disabled = false;
			}
		}
	</script>
</head>

<body>
	<?php include "topbar.php" ?>
	<div class="container-fluid">
		<div class="row-fluid">
				
			<?php include "left_menu.php" ?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php
				if(isset($_SESSION['logged_in'])){
				if($_SESSION['logged_in']!=null){
					$user = $_SESSION['logged_in'];
					echo '<div class="row-fluid sortable">';
						echo '<div class="box span12">';
							echo '<div class="box-header well" data-original-title>';
								echo '<h2><i class="icon-edit"></i> Profile </h2>';
							echo'</div>';
							echo '<div class="box-content">';
								include "database_connection.php";

								$query_post = "select * from penulis where username='".$user."'";
								$hasil = mysql_query($query_post,$db);
								$row = mysql_fetch_array($hasil);
								
								echo '



								';



								echo '<form class="form-horizontal" action="update_profile.php" method="post" enctype="multipart/form-data">
									<fieldset>
									  <div class="control-group">
										<label class="control-label" for="disabledInput">Username</label>
										<div class="controls">
										  <input id="username" name="username" class="input disabled" type="text" disabled="" placeholder="'.$row['username'].'"></input>
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label" for="appendedInput">Password</label>
										<div class="controls">
										  <input id="password" name="password" size="16" type="password" value="'.$row['password'].'">
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label" for="appendedInput">Confirm Password</label>
										<div class="controls">
										  <input id="passwordconfirmed" name="passwordconfirmed" size="16" type="password" value="'.$row['password'].'">
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label" for="appendedInput">Name and Title</label>
										<div class="controls">
										  <input id="title" name="title" size="16" type="text" value="'.$row['nama_lengkap'].'">
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label" for="appendedInput">Organization</label>
										<div class="controls">
										  <input id="organization" name="organization" size="16" type="text" value="'.$row['organisasi'].'">
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label" for="appendedInput">Address</label>
										<div class="controls">
										  <textarea class="autogrow" id="address" name="address">'.$row['address'].'</textarea>
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label" for="disabledInput">Email</label>
										<div class="controls">
										  <input id="email" name="email" class="input disabled" type="text" disabled="" placeholder="'.$row['email'].'"></input>
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label" for="appendedInput">Phone</label>
										<div class="controls">
										  <input id="phone" name="phone" size="16" type="text" value="'.$row['no_hp'].'">
										</div>
									  </div>
									  <div class="form-actions">
										<button type="submit" class="btn btn-primary">Save Changes</button>
										<button type="submit" class="btn">Cancel</button>
									  </div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>';
				}
				}
			?>
			</div>
		</div>
				
		<?php include "modal_settings.php" ?>
		<?php include "footer.php" ?>
		
	</div><!--/.fluid-container-->

	<?php include "script_dependencies.php" ?>
</body>
</html>