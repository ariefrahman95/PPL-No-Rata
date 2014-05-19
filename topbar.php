<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a href="index.php"> <img alt="Logo" src="img/sostekheader.png" height="135px"/></a>
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone" id="membership">
							<?php 
							if(isset($_SESSION['logged_in'])){
								if($_SESSION['logged_in']!=null){
									echo $_SESSION['logged_in'];
								}
							}
							else{
								echo 'Membership';
							}
							?>
						</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li id="li1">
							<?php 
							if(isset($_SESSION['logged_in'])){
								if($_SESSION['logged_in']!=null){
									echo '<a href="profile.php"><i class="icon-cog"></i> Profile</a>';
								}
							}
							else{
								echo '<a href="login.php"> Login </a>';
							}
							?>
						</li>
						<li class="divider"></li>
						<li id="li2">
							<?php 
							if(isset($_SESSION['logged_in'])){
								if($_SESSION['logged_in']!=null){
									echo '<a href="logout.php"><i class="icon-off"></i> Logout</a>';
								}
							}
							else{
								echo '<a href="register.php"> Register </a>';
							}
							?>
						</li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<!-- language starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-comment"></i><span class="hidden-phone" id="language"> Language</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li id="li1">
							<a href="ind/index.php"> Indonesia</a>
						</li>
						<li class="divider"></li>
						<li id="li2">
							<a href="index.php"> English</a>
						</li>
					</ul>
				</div>
				<!-- language ends -->

				<div class="btn-group navbar-search pull-right">
					<form action="search.php" method="get">
						<input placeholder="Search Journal" class="search-query span2" name="query" type="text">
					</form>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->