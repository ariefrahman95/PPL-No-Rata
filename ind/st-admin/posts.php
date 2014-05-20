<?php
	session_start();
	if(!isset($_SESSION['redaktur'])){
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
	<?php
		if($_GET['location']=='guidelines') $loc = 'Guideline';
		if($_GET['location']=='aboutus') $loc = 'About Us';
		if($_GET['location']=='announcements') $loc = 'Notification';
	?>
	<title>Edit<?php echo $loc?> Posts | Website Jurnal Sosioteknologi</title>
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
				if($loc=='Guideline') $view = '../guidelines.php';
				if($loc=='About Us') $view = '../about.php';
				if($loc=='Notification') $view = '../index.php';
				echo '<p>
					View published <strong>'.$loc.'</strong> posts <a href="'.$view.'" target="_blank">here</a>
				</p>';	
			?>
			<div class="row-fluid sortable">
				<div class="box span12">
							
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> <?php echo $loc ?> Posts</h2>
					</div>
					<div class="box-content">
						<?php include "database_connection.php";
							$location = $_GET['location'];

							$query_jurnal = "select * from post where lokasi='$location'";
							$hasil = mysql_query($query_jurnal,$db);
							if(mysql_num_rows($hasil)==0) {
								echo '<p>Tidak ada post</p>';
							} else {
								echo'<table class="table table-bordered table-striped table-condensed">
									<thead>
										<tr>
									  		<th>Title</th>
									  		<th>Action</th>                                          
								  		</tr>
							  		</thead>   
							  		<tbody>';
							  		while($row = mysql_fetch_array($hasil)){
										echo '<tr>';
										echo '<td><a href="form_edit_post.php?location='.$location.'&id='.$row["id"].'">'.$row["judul"].'</a></td>';
										echo '<td class="center">
												<a href="form_edit_post.php?id='.$row['id'].'">Edit</a> | 
												<a href="delete_post.php?id='.$row['id'].'">Delete</a>
											</td>';
										echo '</tr>';
									}
									echo'</tbody>';
						 		echo '</table>';
							}
						?>
					<fieldset>
			 	<div class="form-actions" align="center">
					<?php
					echo '<a class="btn btn-large btn-primary" href="form_edit_post.php?location='.$location.'" >
						  Add New Post
					</a>';
					?>
				</div>
			</fieldset>
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
