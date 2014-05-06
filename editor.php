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
	<title>List Jurnal - SI Jurnal Sosioteknologi</title>
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
			

			<!--<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">List of Journals</a>
					</li>
				</ul>
			</div>-->
			
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>List Jurnal yang Belum Di-publish</h2>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>Judul</th>
									  <th>Penulis</th>
									  <th>Kategori</th>
									  <th>Status</th>
									  <th>Unduh</th>
								  </tr>
							  </thead>   
							  <tbody>
								<?php include "database_connection.php";
									$query_jurnal = "select * from jurnal";
									$hasil = mysql_query($query_jurnal,$db);
									while($row = mysql_fetch_array($hasil)){
										$pdfPath = $row['path_download'];
										echo '<tr>';
										echo '<td><a href="preview.php?id='.$row["id"].'">'.$row["judul"].'</a></td>';
										echo '<td class="center">'.$row["penulis"].'</td>';
										echo '<td class="center">'.$row["kategori"].'</td>';
										echo '<td class="center">'.$row["status"].'</td>';
										echo '<td class="center"><a href="'.$pdfPath.'">Klik untuk Mengunduh</a></td>';
										echo '</tr>';
									}
							    ?>
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
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
