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
	<title>Register | Website Jurnal Sosioteknologi</title>
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
	   function username_check () {
			var username = document.getElementById('username').value;
			if(username.length > 4){//if the lenght greater than 3 characters
				xmlhttp.open("POST","checking_center.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("username="+username);
				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState==4 && xmlhttp.status==200){
						if (xmlhttp.responseText == '0') {
							valid = true;
							document.getElementById("status").innerHTML='<font color="Green"> Username available </font>';
						} else {
							document.getElementById("status").innerHTML='<font color="red">Username unavailable </font>';
						}
					}
				}
			}
			else{
				document.getElementById("status").innerHTML='<font color="#cc0000">Username must contain more than 4 characters</font>';
			}
			this.validasi();
		}
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
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Register to Jurnal Sosioteknologi Website</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<?php
						if(isset($_GET['submit'])){
							echo '<form class="form-horizontal" action="check_login.php?submit=true" method="post">';
						}
						else{
							echo '<form class="form-horizontal" action="check_login.php" method="post">';
						}
					?>
						<fieldset>
							<!-- <div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="admin" onkeyup="username_check()" />
							</div> -->
							<div class="clearfix"></div>
							<div class="control-group">
								<label class="control-label" for="username">Username</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="username" id="username" type="text" value="admin" onkeyup="username_check()">
								</div>
								<span id="status"></span>
							</div>
							<!--<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="admin123456" onkeyup="password_check()" />
								<div id="status2"></div>
							</div> -->
							<div class="clearfix"></div>
							<div class="control-group">
								<label class="control-label" for="password">Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="password" id="password" type="password" value="admin123456" onkeyup="password_check()">
								</div>
								<span id="status2"></span>
							</div>
							<div class="clearfix"></div>
							<div class="control-group">
								<label class="control-label" for="password">Confirm Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="password2" id="password2" type="password" value="admin123456" onkeyup="password2_check()">
								</div>
								<span id="status3"></span>
							</div>
							<div class="clearfix"></div>
							<div class="control-group">
								<label class="control-label" for="nama">Full Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="nama" id="nama" type="text">
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="control-group">
								<label class="control-label" for="organisasi">Organization</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="organisasi" id="organisasi" type="text">
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="control-group">
								<label class="control-label" for="email">E-mail</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="email" id="email" type="text">
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="control-group">
								<label class="control-label" for="phone">Phone Number</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="phone" id="phone" type="text">
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="control-group">
								<label class="control-label" for="alamat">Address</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="alamat" id="alamat" type="text">
								</div>
							</div>
							<div class="clearfix"></div>
							<p class="center span5">
							<button id="reg_btn" type="submit" class="btn btn-primary" disabled>Register</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->
	<?php include "script_dependencies.php" ?>
</body>
</html>
