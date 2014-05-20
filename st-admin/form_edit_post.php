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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Post | Website Jurnal Sosioteknologi</title>
	<?php include "meta_and_css.php" ?>
</head>

<body>
	<?php
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			include "database_connection.php";
			$query_jurnal = "select * from post where id='$id'";
			$hasil = mysql_query($query_jurnal,$db);
			if(mysql_num_rows($hasil)!=1) {
				echo 'invalid post';
				header('Location: index.php');
			}
			else{
				while($row = mysql_fetch_array($hasil)){
					$title = $row['judul'];
					$content = $row['content'];
				}
			}
		}
	?>
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
						<h2><i class="icon-edit"></i> Write Post</h2>
					</div>
					<div class="box-content">
						<?php
							if(isset($_GET['id'])){
								$dest = "edit_post.php?location=".$_GET['location']."&id=".$_GET['id'];
								$button = '<button type="submit" class="btn btn-primary">Edit</button>';
							}
							else{
								$dest = "add_post.php".$_GET['location'];
								$button = '<button type="submit" class="btn btn-primary">Post</button>';
							}
						?>
						<form class="form-horizontal" action="<?php echo $dest ;?>" method="post" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Title</label>
								<div class="controls">
								  <div class="input-prepend">
									<?php
										if(isset($title)){
											echo '<input id="post_title" name="post_title" size="16" type="text" value="'.$title.'">';
										}
										else{
											echo '<input id="post_title" name="post_title" size="16" type="text">';
										}
									?>
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="post_content">Content</label>
								<div class="controls">
									<textarea class="cleditor" id="post_content" name="post_content" rows="3">
										<?php
											if(isset($content)){
												echo $content;
											}
										?>
									</textarea>
								</div>
							  </div>
							  <div class="form-actions">
								<?php echo $button; ?>
							  <button class="btn" type="submit" onclick="cancel()">Cancel</button>
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
<script>
	function cancel(){
		window.location="posts.php";
	}
</script>
</html>
