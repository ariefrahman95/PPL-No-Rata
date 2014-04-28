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
	<title>List Jurnal - SI Jurnal Sosioteknologi</title>
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
				
			<?php include "left_menu.php"?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<!--<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">List of Journals</a>
					</li>
				</ul>
			</div>-->
			
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Hasil Pencarian</h2>
					</div>
					<div class="box-content">
						<?php
						require_once('database_connection.php'); //connect to your database in this file
						define("NUMBER_PER_PAGE", 10); //number of records per page of the search results

						/****
						* Purpose: paginate a result set
						* Precondition: current page, total records, extra variables to pass in the page string
						* Postcondition: pagination is displayed
						****/
						function pagination($current_page_number, $total_records_found, $query_string = null)
						{
							$page = 1;

							echo "Page: ";

							for ($total_pages = ($total_records_found / NUMBER_PER_PAGE); $total_pages > 0; $total_pages--)
							{
								if ($page != $current_page_number)
									echo "<a href=\"?page=$page" . (($query_string) ? "&$query_string" : "") . "\">";

								echo "$page ";

								if ($page != $current_page_number)
									echo "</a>";

								$page++;
							}
						}

						/**
						* Display Search Results Below Here
						**/

						//load the current paginated page number
						$page = 1;
						$searched = false;
						if(isset($_GET['page'])) {
							$page = $_GET['page'];
							
						}
						$start = ($page-1) * NUMBER_PER_PAGE;

						/**
						* if we used the search form use those variables, otherwise look for
						* variables passed in the URL because someone clicked on a page number
						**/
						$query = "";
						if(isset($_GET['query'])) {
							$query = $_GET['query'];
						}
						//$kategori = ($_POST['kategori']) ? $_POST['kategori'] : $_GET['kategori'];
						//$bulan_terbit = ($_POST['bulan_terbit']) ? $_POST['bulan_terbit'] : $_GET['bulan_terbit']

						$sql = "SELECT * FROM jurnal_terpublish WHERE 1=1";

						if($query) {
							$sql .= " OR judul LIKE'%". mysql_real_escape_string($query) ."%'";
							$sql .= " OR penulis LIKE'%". mysql_real_escape_string($query). "%'";
							$sql .= " OR kategori LIKE'%". mysql_real_escape_string($query). "%'";
						}

						//this return the total number of records returned by our query
						$total_records = mysql_num_rows(mysql_query($sql));

						//now we limit our query to the number of results we want per page
						$sql .= " LIMIT $start, " . NUMBER_PER_PAGE;

						/**
						* Next we display our pagination at the top of our search results
						* and we include the search words filled into our form so we can pass
						* this information to the page numbers. That way as they click from page
						* to page the query will pull up the correct results
						**/
						pagination($page, $total_records, "query=$query");
						$loop = mysql_query($sql)
							or die ('cannot run the query because: ' . mysql_error());
						while ($record = mysql_fetch_assoc($loop))
							echo "<br/>{$record['id']}) " . stripslashes($record['judul']) . " - {$record['kategori']}";

						echo "<center>" . number_format($total_records) . " search results found</center>";

						pagination($page, $total_records, "query=$query");
						?>
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
