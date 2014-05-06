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
						<h2><i class="icon-filter"></i>Journals To Review</h2>
					</div>
					<div class="box-content">
						<?php include "database_connection.php";
							$query_jurnal = "select id, judul from jurnal where status='2'";
							$hasil = mysql_query($query_jurnal,$db);
							while($row = mysql_fetch_array($hasil)){
								echo'<label class="checkbox">';
								echo'<input type="checkbox" id="Checkbox'.$row['id'].'" value="option1"> <a href="form_penilaian.php?id='.$row["id"].'" target="_blank" >'.$row["judul"].'</a>';
								 	echo'</label>';
							}
						?>
						<div class="form-actions" align="center">
							<button type="submit" class="btn">Reject</button>
							<button type="submit" class="btn">Accept with Revision</button>
							<button type="submit" class="btn">Accept</button>
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
												echo'<input type="checkbox" id="Checkbox'.$row['id'].'" value="option1"> <a href="form_penilaian.php?id='.$row["id"].'" target="_blank" >'.$row["judul"].'</a>';
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
												echo'<input type="checkbox" id="Checkbox'.$row['id'].'" value="option1"> <a href="form_penilaian.php?id='.$row["id"].'" target="_blank" >'.$row["judul"].'</a>';
								  				echo'</label>';
											}
									?>
								</div>
							</fieldset>
						</form>
						<div class="form-actions" align="center">
							<button type="submit" class="btn btn-danger">Undo Accept with Revision</button>
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
												echo'<input type="checkbox" id="Checkbox'.$row['id'].'" value="option1"> <a href="form_penilaian.php?id='.$row["id"].'" target="_blank" >'.$row["judul"].'</a>';
								  				echo'</label>';
											}
									?>
								</div>
							</fieldset>
						</form>
						<div class="form-actions" align="center">
							<button type="submit" class="btn btn-danger">Undo Accept</button>
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
