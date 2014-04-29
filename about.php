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
	<title>About - SI Jurnal Sosioteknologi</title>
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
			<?php include "left_menu.php"?>
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<div class="row-fluid sortable">
				<div class="box span7">
					<div class="box-header well" data-original-title>
						<h3>Editorial Staffs</h3>
					</div>
					<div class="box-content">
						<dl>
						  <dt>Bambang Riyanto Trilaksono, Prof.Dr.Ir. [ Chief ]</dt>
						  <dd>School of Electrical Engineering and Informatics, ITB, Indonesia<br>briyanto@lskk.ee.itb.ac.id</dd>
						  <div class="page-header">
							  <h1><small>Redaktur</small></h1>
						  </div>
						  <dt>Edy Soewono, Prof.Dr. [ Executive Editor ]</dt>
						  <dd>Faculty of Mathematics and Natural Sciences, ITB, Indonesia<br>esoewono@lppm.itb.ac.id</dd>
						  <dt> Ismunandar, Prof.</dt>
						  <dd> Faculty of Mathematics and Natural Sciences, ITB, Indonesia<br>ismu@chem.itb.ac.id</dd>
						  <div class="page-header">
							  <h1><small>Reviewer</small></h1>
						  </div>
						  <dt>Tati S. Sjamsudin Subahar, Prof.Dr.,MS.,DEA.</dt>
						  <dd>School of Life Sciences and Technology, ITB, Indonesia<br>tati@sith.itb.ac.id</dd>
						</dl>            
					</div>
				</div><!--/span-->
				<div class="box span5">
					<div class="box-header well" data-original-title>
						<h3>Contact Information</h3>
					</div>
					<div class="box-content">
						<dl>
						  <dt> Sekretariat Jurnal Sosioteknologi</dt>
						  <dd>Jl. Tamansari 64, Bandung 40116, Indonesia<br>
								Tel : +62-22-250 1759<br>    	 
								Fax : +62-22-250 4010, +62-22-251 1215<br>
								E-mail : proceedings@lppm.itb.ac.id</dd>
						</dl>            
					</div>
				</div><!--/span-->
			</div><!--/row-->

    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
		<?php include "modal_settings.php"?>
		<?php include "footer.php"?>
		
	</div><!--/.fluid-container-->

	<?php include "script_dependencies.php"?>
</body>
</html>
