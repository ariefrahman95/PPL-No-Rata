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
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-book"></i> Journal Statistics</h2>
					</div>
					<div class="box-content">
						<p>Persentase jurnal yang ditolak, dipublikasikan, dan sedang dalam progress saat ini:</p>
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
