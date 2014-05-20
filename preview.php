<?php session_start(); ?>
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
	<title>Preview Jurnal | SI Jurnal Sosioteknologi</title>
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
						<h2>Preview</h2>
					</div>
					<div class="box-content">
					<?php
						include "database_connection.php";
						if(isset($_GET['id'])) {
							$id = $_GET['id'];
							$query_jurnal = "select * from jurnal_terpublish where id = {$id}";
							$hasil = mysql_query($query_jurnal,$db);
							$row = mysql_fetch_array($hasil);
							if($row == NULL) {
								echo '<p>No journal chosen!</p>';
							} else {
								// Tampilin abstrak
								$pdfPath = $row['path_download'];
								$title = $row['judul'];
								$penulis = $row['penulis'];
								$abstract = $row['abstract'];
								echo '<p><b>Title: </b></p>';
								echo '<p>'.$title.'</p>';
								echo '<p><b>Author: </b></p>';
								echo '<p>'.$penulis.'</p>';
								echo '<p><b>Abstract: </b></p>';
								echo '<p>'.$abstract.'</p><br>';
								if(isset($_SESSION['logged_in'])){
									if($_SESSION['logged_in']!=null){
										echo '<p>Download journal <a href="'.$pdfPath.'">here</a>.</p>';
									}
								}				
							}
						} else {
							echo '<p>No journal chosen!</p>';
						}
						//phpinfo();
					?>
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
