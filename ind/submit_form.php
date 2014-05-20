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
	<title>Submit | Website Jurnal Sosioteknologi</title>
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
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Informasi Jurnal Baru</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="add_jurnal.php" method="post" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Title</label>
								<div class="controls">
								  <div class="input-prepend">
									<input id="title" name="title" size="16" type="text">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Authors</label>
								<div class="controls">
								  <div class="input-prepend">
									<input id="authors" name="authors" size="16" type="text">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Organization</label>
								<div class="controls">
								  <div class="input-prepend">
									<input id="organization" name="organization" size="16" type="text">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="kategori">Category</label>
								<div class="controls">
								  <select id="kategori" name="kategori" data-rel="chosen">
									<?php include "database_connection.php";
										$query_kat = "select * from kategori";
										$hasil = mysql_query($query_kat,$db);
										if(mysql_num_rows($hasil)==0) {
											echo 'Belum ada kategori';
										} else {
											while($row = mysql_fetch_array($hasil)) {
												echo '<option>'.$row['nama'].'</option>';
											}
										}
									?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Abstract</label>
								<div class="controls">
								  <div>
									<textarea class="autogrow" id="abstrak" name="abstrak">Press enter here, it will grow automatically.</textarea>
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Key words</label>
								<div class="controls">
								  <div class="input-prepend">
									<input id="keywords" name="keywords" size="16" type="text">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">File Upload</label>
								<div class="controls">
								  <p><input type="file" name="file" id="file" accept="application/pdf"> .pdf, .docx, .doc</p>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Submit</button>
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
