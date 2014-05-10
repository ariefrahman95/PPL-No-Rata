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
								
								echo '<form class="form-horizontal" action="upload_file.php" method="post" enctype="multipart/form-data">
									<fieldset>
									  <div class="control-group">
										<label class="control-label" for="prependedInput">Username</label>
										<div class="controls">
										  <div class="input-prepend">
											<input id="title" size="16" type="text" value="'.$row['username'].'">
										  </div>
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label" for="appendedInput">Password</label>
										<div class="controls">
										  <div class="input-append">
											<input id="title" size="16" type="password" value="'.$row['password'].'">
										  </div>
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label">Confirm Password</label>
										<div class="controls">
										  <input id="title" size="16" type="password" value="'.$row['password'].'">
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label">Name and Title</label>
										<div class="controls">
										  <input id="title" size="30" type="text" value="'.$row['nama_lengkap'].'">
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label">Organization</label>
										<div class="controls">
										  <input id="title" size="16" type="text" value="'.$row['organization'].'">
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label">Address</label>
										<div class="controls">
										  <textarea class="autogrow">'.$row['address'].'</textarea>
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label">email</label>
										<div class="controls">
										  <input id="title" size="16" type="text" value="'.$row['email'].'">
										</div>
									  </div>
									  <div class="control-group">
										<label class="control-label">Phone</label>
										<div class="controls">
										  <input id="title" size="16" type="text" value="'.$row['no_hp'].'">
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