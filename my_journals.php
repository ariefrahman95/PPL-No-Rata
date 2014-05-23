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
	<title>My Journals | Website Jurnal Sosioteknologi</title>
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
						<h2><i class="icon-book"></i> My Published Journals</h2>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							<thead>
								<tr>
									<th>Title</th>
									<th>Published Date</th>
									<th>Author</th>
									<th>Category</th>                                           
								</tr>
							</thead>   
							<tbody>
								<?php include "database_connection.php";
									$myusername = $_SESSION['logged_in'];
									
									define("NUMBER_PER_PAGE", 10);
									
									$page = 1;
									if(isset($_GET['page'])) {
										$page = $_GET['page'];
									}
									$start = ($page-1) * NUMBER_PER_PAGE;
									
									$query_jurnal = "select jurnal_terpublish.id, jurnal_terpublish.judul, jurnal_terpublish.tanggal_terbit,
										jurnal_terpublish.penulis, jurnal_terpublish.kategori, penulis.username
										from jurnal_terpublish inner join penulis 
										where penulis.nama_lengkap = jurnal_terpublish.penulis and penulis.username = '$myusername'";
									
									// Hitung jumlah seluruh row
									$total = mysql_num_rows(mysql_query($query_jurnal));
									
									// Limit query untuk menampilkan sesuai jumlah halaman paginasi
									$query_jurnal .= " limit $start, " . NUMBER_PER_PAGE;
									$hasil = mysql_query($query_jurnal,$db);
									$count = 0;
									while($row = mysql_fetch_array($hasil)){
										echo '<tr>';
										echo '<td><a href="preview.php?id='.$row["id"].'">'.$row["judul"].'</a></td>';
										echo '<td class="center">'.$row["tanggal_terbit"].'</td>';
										echo '<td class="center">'.$row["penulis"].'</td>';
										echo '<td class="center">'.$row["kategori"].'</td>';
										echo '</tr>';
										$count++;
									}	
									if ($count == 0) {
										echo '<p>Belum ada jurnal yang dipublish.</p>';
									}
							    ?>
							</tbody>
						</table>  
						<div class="pagination pagination-centered">
							<ul>
								<?php
									for ($curr_page = 1; $curr_page < ($total / NUMBER_PER_PAGE) + 1; $curr_page++) { 
										if ($curr_page != $page) {
											echo '<li><a href=my_journals.php?page='.$curr_page.'>'.$curr_page.'</a></li>';
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
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-trash"></i> Journals Rejected</h2>
					</div>
					<div class="box-content">
						<?php include "database_connection.php";
							$query_jurnal = "select * from jurnal where status='0' and diupload_oleh='$myusername'";
							$hasil = mysql_query($query_jurnal,$db);
							if(mysql_num_rows($hasil)==0) {
								echo '<p>Tidak ada jurnal yang ditolak</p>';
							} else {
								echo'<table class="table table-bordered table-striped table-condensed">
									<thead>
										<tr>
									  		<th>Judul</th>
									  		<th>Penulis</th>
									  		<th>Kategori</th>                                          
								  		</tr>
							  		</thead>   
							  		<tbody>';
							  		while($row = mysql_fetch_array($hasil)){
										echo '<tr>';
										echo '<td><a href="../'.$row['path_download'].'" target="_blank">'.$row["judul"].'</a></td>';
										echo '<td class="center">'.$row["penulis"].'</td>';
										echo '<td class="center">'.$row["kategori"].'</td>';
										echo '</tr>';
									}
									echo'</tbody>';
						 		echo '</table>';
							}
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
