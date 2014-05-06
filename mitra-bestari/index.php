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
	<title>Home | Website Jurnal Sosioteknologi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
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
			<div class="row-fluid sortable" id="div1">
			</div><!--/row-->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-filter"></i>Journals To Review</h2>
					</div>
					<div class="box-content">
						<?php include "database_connection.php";
							$query_jurnal = "select * from jurnal where status='2'";
							$hasil = mysql_query($query_jurnal,$db);
							if(mysql_num_rows($hasil)==0) {
								echo '<p>Tidak ada jurnal yang belum dinilai Mitra Bestari</p>';
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
										echo '<td><a href="preview.php?id='.$row["id"].'">'.$row["judul"].'</a></td>';
										echo '<td class="center">'.$row["penulis"].'</td>';
										echo '<td class="center">'.$row["kategori"].'</td>';
										echo '</tr>';
									}
									echo'</tbody>';
						 		echo '</table>';
							}
						?>
						<div class="form-actions" align="center">
							<button type="submit" class="btn btn-danger">Reject</button>
							<button type="submit" class="btn btn-success">Accept</button>
						</div>
					</div>
				</div><!--/span-->
			
			<div class="row-fluid sortable">
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-trash"></i> Ditolak</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group">
									<?php
											$query_jurnal = "select id, judul from jurnal where status='0'";
											$hasil = mysql_query($query_jurnal,$db);
											while($row = mysql_fetch_array($hasil)){
												echo'<label class="checkbox">';
												echo'<input type="checkbox" id="Checkbox'.$row['id'].'" value="option1"> <a href="download_jurnal.php?id='.$row["id"].'">'.$row["judul"].'</a>';
								  				echo'</label>';
											}
									?>
							  	</div>
							</fieldset>
						</form>
						<div class="form-actions" align="center">
							<button type="submit" class="btn btn-danger">Undo Reject</button>
						</div>
					</div>
				</div><!--/span-->
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-inbox"></i> Diterima dengan revisi</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group">
								<?php
											$query_jurnal = "select id, judul from jurnal where status='3'";
											$hasil = mysql_query($query_jurnal,$db);
											while($row = mysql_fetch_array($hasil)){
												echo'<label class="checkbox">';
												echo'<input type="checkbox" id="Checkbox'.$row['id'].'" value="option1"> <a href="download_jurnal.php?id='.$row["id"].'">'.$row["judul"].'</a>';
								  				echo'</label>';
											}
									?>
								</div>
							</fieldset>
						</form>
						<div class="form-actions" align="center">
							<button type="submit" class="btn btn-danger">Reject</button>
							<button type="submit" class="btn btn-success">Accept</button>
						</div>
					</div>
				</div><!--/span-->
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-briefcase"></i> Diterima</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group">
								<?php
											$query_jurnal = "select id, judul from jurnal where status='4'";
											$hasil = mysql_query($query_jurnal,$db);
											while($row = mysql_fetch_array($hasil)){
												echo'<label class="checkbox">';
												echo'<input type="checkbox" id="Checkbox'.$row['id'].'" value="option1"> <a href="download_jurnal.php?id='.$row["id"].'">'.$row["judul"].'</a>';
								  				echo'</label>';
											}
									?>
								</div>
							</fieldset>
						</form>
						<div class="form-actions" align="center">
							<button type="submit" class="btn btn-success">Undo Accept</button>
						</div>
					</div>
				</div><!--/span-->

			
			</div><!--/row-->

			<fieldset>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary"><i class="icon-ok"> </i> Apply</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
		<?php include "modal_settings.php" ?>
		<?php include "footer.php" ?>
		
	</div><!--/.fluid-container-->

	<?php include "script_dependencies.php" ?>
	<script>
		if(localStorage.username){
			var username = localStorage.username;
			document.getElementById("div1").innerHTML='<div class="box span12"><div class="box-header well" data-original-title><h2><i class="icon-picture"></i>Journal\'s Progress</h2></div><div class="box-content"><h3>Journal 1</h3><div class="progress progress-striped progress-success active"><div class="bar" style="width: 10%;"></div></div></div></div>';
		}
	</script>
</body>
</html>
