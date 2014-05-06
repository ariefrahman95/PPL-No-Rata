<!-- left menu starts -->
	<div class="span2 main-menu-span">
		<div class="well nav-collapse sidebar-nav">
			<ul class="nav nav-tabs nav-stacked main-menu">
				<li class="nav-header hidden-tablet">APPS</li>
				<li id="left1"><a class="ajax-link" href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Home </span></a></li>
				<li id="left2"><a class="ajax-link" href="guidelines.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Guidelines </span></a></li>
				<li id="left3"><a class="ajax-link" href="submit_form.php"><i class="icon-edit"></i><span class="hidden-tablet"> Submit New Journal </span></a></li>
				<li id="left4"><a class="ajax-link" href="list_journals.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> List of Journals </span></a></li>
				<li id="left5"><a href="about.php"><i class="icon-lock"></i><span class="hidden-tablet"> About Us </span></a></li>
				<?php
					if(isset($_SESSION['logged_in'])){
						if($_SESSION['logged_in']!=null){
							echo '<li id="left6"><a href="my_journals.php"><i class="icon-lock"></i><span class="hidden-tablet"> My Journals </span></a></li>';
						}
					}
				?>
			</ul>
		</div><!--/.well -->
	</div><!--/span-->
<!-- left menu ends -->
