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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		if($_GET['location']=='guidelines') $location = 'Guideline';
		if($_GET['location']=='aboutus') $location = 'About Jurnal Sosioteknologi';
		if($_GET['location']=='announcements') $location = 'Notification';
	?>
	<title>Edit <?php echo $location; ?> | Website Jurnal Sosioteknologi</title>
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
						<h2><i class="icon-edit"></i> New <?php echo $location; ?></h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="add_post.php?location=<?php echo $_GET['location']?>" method="post" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Title</label>
								<div class="controls">
								  <div class="input-prepend">
									<input id="post_title" name="post_title" size="16" type="text">
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="post_content">Content</label>
								<div class="controls">
									<textarea class="cleditor" id="post_content" name="post_content" rows="3"></textarea>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Post</button>
								<button type="submit" class="btn">Cancel</button>
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

	<?php include "script_dependencies.php" ?>
</body>
</html>
