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
	<title>Profile - SI Jurnal Sosioteknologi</title>
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
	<?php include "topbar.php"?>
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
						<h2><i class="icon-edit"></i> Profile </h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="upload_file.php" method="post" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Username</label>
								<div class="controls">
								  <div class="input-prepend">
									<input id="title" size="16" type="text" value="destraaaa">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="appendedInput">Password</label>
								<div class="controls">
								  <div class="input-append">
									<input id="title" size="16" type="password" value="12345678">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Confirm Password</label>
								<div class="controls">
								  <input id="title" size="16" type="password" value="12345678">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Name and Title</label>
								<div class="controls">
								  <input id="title" size="30" type="text" value="Dr. Destra Ganteng, S.T., M.T.">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Organization</label>
								<div class="controls">
								  <input id="title" size="16" type="text" value="Institut Teknologi Bandung">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Address</label>
								<div class="controls">
								  <textarea class="autogrow">Jalan Bootstrap no. 12 Bandung</textarea>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">email</label>
								<div class="controls">
								  <input id="title" size="16" type="text" value="destra@itb.ac.id">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Phone</label>
								<div class="controls">
								  <input id="title" size="16" type="text" value="086568908657">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save Changes</button>
							  </div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->

			</div><!--/row-->
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<?php include "modal_settings.php" ?>
		<?php include "footer.php" ?>
		
	</div><!--/.fluid-container-->

	<?php include "script_dependencies.php"?>
	
		
</body>
</html>
