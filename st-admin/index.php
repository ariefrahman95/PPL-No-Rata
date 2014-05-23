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
			<h6>NOTIFICATION</h6>

			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-bell"></i> New Journal</h2>
					</div>
					<div class="box-content">
						<p>Terdapat <a href="journal_selection.php">
						<?php include "database_connection.php";
							$query_jurnal = "select id from jurnal where status='1'";
							$hasil = mysql_query($query_jurnal,$db);
							$n_new = mysql_num_rows($hasil);
							echo $n_new;
						?>
						</a> jurnal yang <strong>belum diseleksi</strong>.</p>
					</div>
				</div><!--/span-->
			</div><!--/row-->

			<hr>
			<h6>JURNAL SOSIOTEKNOLOGI STATISTICS</h6>

			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-signal"></i> Journal Statistics</h2>
					</div>
					<div class="box-content">
						<p>Persentase jurnal yang ditolak, dipublikasikan, dan sedang dalam progress dari total semua jurnal yang masuk ke Sosioteknologi:</p>
						<?php include "database_connection.php";
							$query_jurnal = "select id from jurnal_terpublish";
							$hasil = mysql_query($query_jurnal,$db);
							$n_publish = mysql_num_rows($hasil);

							$query_jurnal = "select id from jurnal where status<>'0'";
							$hasil = mysql_query($query_jurnal,$db);
							$n_wait = mysql_num_rows($hasil);

							$query_jurnal = "select id from jurnal where status='0'";
							$hasil = mysql_query($query_jurnal,$db);
							$n_reject = mysql_num_rows($hasil);
						?>
						<div id="donutchart" style="height: 300px;">
            			</div>
            			<p>Lihat semua jurnal <a href="list_of_journals.php">di sini</a></p>
					</div>
				</div><!--/span-->
			</div><!--/row-->
			<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
			</div>
		<?php include "modal_settings.php" ?>
		<?php include "footer.php" ?>
		
	</div><!--/.fluid-container-->

	<?php include "script_dependencies.php" ?>

	<script>
	var nwait = '<?php echo $n_wait;?>';
	var npublish = '<?php echo $n_publish;?>';
	var nreject = '<?php echo $n_reject;?>';
	var data = [
	{ label: "Waiting Journal",  data: nwait},
	{ label: "Published Journal",  data: npublish},
	{ label: "Rejected Journal",  data: nreject}
	];
	if($("#donutchart").length)
	{
		$.plot($("#donutchart"), data,
		{
				series: {
						pie: {
								innerRadius: 0.5,
								show: true
						}
				},
				legend: {
					show: false
				}
		});
	}
	
	</script>
</body>
</html>
