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
	<title>Journals | Website Jurnal Sosioteknologi</title>
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
						<h2><i class="icon-briefcase"></i> Jurnal yang Dipublikasikan</h2>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							<thead>
								<tr>
									<th>Judul</th>
									<th>Tanggal Publikasi</th>
									<th>Penulis</th>
									<th>Kategori</th>                                          
								</tr>
							</thead>   
							<tbody>
								<?php include "database_connection.php";
									define("NUMBER_PER_PAGE", 10);
									
									$page = 1;
									if(isset($_GET['page'])) {
										$page = $_GET['page'];
									}
									$start = ($page-1) * NUMBER_PER_PAGE;
									
									$query_jurnal = "select * from jurnal_terpublish";
									
									// Hitung jumlah seluruh row
									$total = mysql_num_rows(mysql_query($query_jurnal));
							
									// Limit query untuk menampilkan sesuai jumlah halaman paginasi
									$query_jurnal .= " limit $start, " . NUMBER_PER_PAGE;
									$hasil = mysql_query($query_jurnal,$db);
									while($row = mysql_fetch_array($hasil)){
										echo '<tr>';
										echo '<td><a href="preview.php?id='.$row["id"].'">'.$row["judul"].'</a></td>';
										echo '<td class="center">'.$row["tanggal_terbit"].'</td>';
										echo '<td class="center">'.$row["penulis"].'</td>';
										echo '<td class="center">'.$row["kategori"].'</td>';
										echo '</tr>';
									}
							    ?>
							</tbody>
						</table>
						<div class="pagination pagination-centered">
							<ul>
								<?php
									for ($curr_page = 1; $curr_page < ($total / NUMBER_PER_PAGE) + 1; $curr_page++) { 
										if ($curr_page != $page) {
											echo '<li><a href=list_journals.php?page='.$curr_page.'>'.$curr_page.'</a></li>';
										} else {
											echo '<li class = "active"><a href=#>'.$curr_page.'</a></li>';
										}
									}
								?>	
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
