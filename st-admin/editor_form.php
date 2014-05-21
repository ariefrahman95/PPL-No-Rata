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
	<title>Submit - SI Jurnal Sosioteknologi</title>
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
				include "database_connection.php";
				$id = $_GET["id"];
				$query_post = "select * from jurnal where id='$id'";
				$hasil = mysql_query($query_post,$db);
				$row = mysql_fetch_array($hasil);
			?>

			<p>Jurnal yang akan dinilai dapat di-download pada tombol "Download Naskah" di bawah: </p>
			<fieldset>
			 	<div class="form-actions" align="center">
					<?php
					echo '<a class="btn btn-large btn-primary" href="../'.$row['path_download'].'" target="_blank">
						<i class="icon-download-alt"></i> Download Naskah
					</a>';
					?>
				</div>
			</fieldset>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Publish Journal </h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="editor_upload.php" method="post" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Judul</label>
								<div class="controls">
								  <div class="input-prepend">
									<input name="title" size="16" type="text" value="<?php echo $row['judul'];?>">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Tanggal terbit</label>
								<div class="controls">
								  <div class="input-prepend">
									<input name="date" size="16" type="text">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Penulis</label>
								<div class="controls">
								  <div class="input-prepend">
									<input name="author" size="16" type="text" value="<?php echo $row['penulis'];?>">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Kategori</label>
								<div class="controls">
								  <div class="input-prepend">
									<input name="category" size="16" type="text" value="<?php echo $row['kategori'];?>">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Abstrak</label>
								<div class="controls">
								  <div class="input-prepend">
									<input name="abstract" size="16" type="text">
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
