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
	<title>Login | Website Jurnal Sosioteknologi</title>
	<?php include "meta_and_css.php" ?>	
</head>

<body>
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Masuk ke Website Jurnal Sosioteknologi</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<?php if (isset($_GET['submit'])){
					?>
						<div class="alert alert-info">
							Mohon mengisi Username and Password.
						</div>
					<?php }?>
					<?php
					if (isset($_GET['submit'])){
						echo '<form class="form-horizontal" action="checking_center.php?submit=true" method="post">';
					}
					else{
						echo '<form class="form-horizontal" action="checking_center.php" method="post">';
					}
					?>
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username2" id="username2" type="text" value="username" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="password" />
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Masuk</button>
							</p>
							<br>
							Belum punya akun? 
							<p class="center span5">
							<?php
								if(isset($_GET['submit'])){
									echo '<a href="register.php?submit=true">Register</a>';
								}
								else{
									echo '<a href="register.php">Register</a>';
								}
							?>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<?php include "script_dependencies.php";?>
</body>
</html>
