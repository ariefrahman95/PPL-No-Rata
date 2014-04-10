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
	<title>Guidelines - SI Jurnal Sosioteknologi</title>
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
						<h3>Procedures</h3>
					</div>
					<div class="box-content">
						<dl>
						  <dt>Submit</dt>
						  <dd>Submit your journal with the template in the right dialog box</dd>
						  <dt>Selection Process</dt>
						  <dd>Your journal will be judged whether it is selected or not</dd>
						  <dt>Review Process</dt>
						  <dd>Reviewer will review your journal and propose revision for your journal</dd>
						  <dt>Revision</dt>
						  <dd>Revise your journal and resubmit it</dd>
						  <dt>Editting & Layouting</dt>
						  <dd>If there is no need for further revision, your journal will be editted by our editor</dd>
						  <dt>Publish</dt>
						  <dd>Your journal will be published in our website</dd>
						</dl>            
					</div>
				</div><!--/span-->
				<div class="box span5">
					<div class="box-header well" data-original-title>
						<h3>Journal Template</h3>
					</div>
					<div class="box-content">
						<dl>
						  <dd>To ease the process of review and submit, we use a standard template that can be downloaded <a href="index.php">here</a><br></dd>
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
