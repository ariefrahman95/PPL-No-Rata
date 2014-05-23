<?php
	session_start();
	if(!isset($_SESSION['logged_in'])){
		header('Location: login.php');
	} else {
		$user = $_SESSION['logged_in'];
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
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-briefcase"></i> My Published Journals</h2>
					</div>
					<div class="box-content">
						<?php include "database_connection.php";
							$query_user = "select nama_lengkap from penulis where username='".$user."'";
							$hasil = mysql_query($query_user,$db);
							$row = mysql_fetch_array($hasil);

							$query_jurnal = "select * from jurnal_terpublish where penulis='".$row['nama_lengkap']."'";
							$hasil = mysql_query($query_jurnal,$db);
							if(mysql_num_rows($hasil)==0) {
								echo '<p>You do not have published journal</p>';
							} else {
								echo'<table class="table table-bordered table-striped table-condensed">
									<thead>
										<tr>
									  		<th>Title</th>
									  		<th>Authors</th>
									  		<th>Category</th>
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
			</div>

			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tasks"></i> My On-going Journals</h2>
					</div>
					<div class="box-content">
						<?php include "database_connection.php";
							$query_jurnal = "select * from jurnal where diupload_oleh='$user' and status<>'0'";
							$hasil = mysql_query($query_jurnal,$db);
							if(mysql_num_rows($hasil)==0) {
								echo '<p>You do not have on-going journal</p>';
							} else {
								echo'<table class="table table-bordered table-striped table-condensed">
									<thead>
										<tr>
									  		<th>Title</th>
									  		<th>Authors</th>
									  		<th>Category</th>
											<th>Status</th>
								  		</tr>
							  		</thead>   
							  		<tbody>';
							  		while($row = mysql_fetch_array($hasil)){
										echo '<tr>';
										echo '<td><a href="../'.$row['path_download'].'" target="_blank">'.$row["judul"].'</a></td>';
										echo '<td class="center">'.$row["penulis"].'</td>';
										echo '<td class="center">'.$row["kategori"].'</td>';
										echo '<td class="center">'.$row["status"].'</td>';
										echo '</tr>';
									}
									echo'</tbody>';
						 		echo '</table>';
							}
						?>
					</div>
				</div><!--/span-->
    		</div>

			<div class="row-fluid sortable">	
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-trash"></i> My Rejected Journals</h2>
					</div>
					<div class="box-content">
						<?php include "database_connection.php";
							$query_jurnal = "select * from jurnal where diupload_oleh='$user' and status='0'";
							$hasil = mysql_query($query_jurnal,$db);
							if(mysql_num_rows($hasil)==0) {
								echo '<p>You do not have rejected journal</p>';
							} else {
								echo'<table class="table table-bordered table-striped table-condensed">
									<thead>
										<tr>
									  		<th>Title</th>
									  		<th>Authors</th>
									  		<th>Category</th>
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
