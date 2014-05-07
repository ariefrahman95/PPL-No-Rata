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
					$user = $_SESSION['logged_in']; echo $user;
					echo '<div class="row-fluid sortable">';
						echo '<div class="box span12">';
							echo '<div class="box-header well" data-original-title>';
								echo '<h2><i class="icon-edit"></i> Profile </h2>';
							echo'</div>';
							echo '<div class="box-content">';
								include "database_connection.php";

								$query_post = "select * from jurnal where diupload_oleh='$user'";
								$hasil = mysql_query($query_post,$db);
								if(mysql_num_rows($hasil)==0) {
									echo '<p>Tidak ada jurnal yang sedang diproses</p>';
								} else {
									while($row = mysql_fetch_array($hasil)){
										echo '<h3>'.$row['judul'].'</h3>
										<div class="progress progress-striped progress-success active">
											<div class="bar" style="width: '.($row['status']*20).'%;">
											</div>
										</div>';
									}
								}
							echo '</div>
						</div>
					</div>';
				}
				}
			?>
<!--			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Profile </h2>
					</div> 
					<div class="box-content"> -->
						<form class="form-horizontal" action="upload_file.php" method="post" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Username</label>
								<div class="controls">
								  <div class="input-prepend">
									<input id="title" size="16" type="text" value="destraaaa">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="appendedInput">Password</label>
								<div class="controls">
								  <div class="input-append">
									<input id="title" size="16" type="password" value="12345678">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Confirm Password</label>
								<div class="controls">
								  <input id="title" size="16" type="password" value="12345678">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Name and Title</label>
								<div class="controls">
								  <input id="title" size="30" type="text" value="Dr. Destra Ganteng, S.T., M.T.">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Organization</label>
								<div class="controls">
								  <input id="title" size="16" type="text" value="Institut Teknologi Bandung">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Address</label>
								<div class="controls">
								  <textarea class="autogrow">Jalan Bootstrap no. 12 Bandung</textarea>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">email</label>
								<div class="controls">
								  <input id="title" size="16" type="text" value="destra@itb.ac.id">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Phone</label>
								<div class="controls">
								  <input id="title" size="16" type="text" value="086568908657">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save Changes</button>
							  </div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->

			</div><!--/row-->
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<?php include "modal_settings.php" ?>
		<?php include "footer.php" ?>
		
	</div><!--/.fluid-container-->

	<?php include "script_dependencies.php" ?>
	
		
</body>
</html>
