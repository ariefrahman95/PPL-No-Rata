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
	<title>About | SI Jurnal Sosioteknologi</title>
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
				$query_post = "select * from post where lokasi='aboutus'";
				$hasil = mysql_query($query_post,$db);
				while($row = mysql_fetch_array($hasil)){
					echo '<div class="row-fluid sortable">
							<div class="box span7">
								<div class="box-header well" data-original-title>
									<h2>'.$row['judul'].'</h2>
								</div>
								<div class="box-content">'.$row['content'].'</div>
							</div>
						</div>
					';
				}
			?>	
			</div>
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
		<?php include "modal_settings.php" ?>
		<?php include "footer.php" ?>
		
	</div><!--/.fluid-container-->

	<?php include "script_dependencies.php" ?>
</body>
</html>
