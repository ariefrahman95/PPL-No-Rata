<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
<<<<<<< HEAD
				<a href="index.php"> <img alt="Logo" src="../img/sostekheader.png" height="135px"/></a>
=======
				<a href="index.php"> <img alt="Logo" src="img/sostekheader.png" height="135px"/></a>
>>>>>>> 6efa1c5111ff83ef9e5d96a52e4e9707b16fa939
				
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
								echo 'Keanggotaan';
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
									echo '<a href="profile.php"><i class="icon-cog"></i> Profil</a>';
								}
							}
							else{
								echo '<a href="login.php"> Masuk </a>';
							}
							?>
						</li>
						<li class="divider"></li>
						<li id="li2">
							<?php 
							if(isset($_SESSION['logged_in'])){
								if($_SESSION['logged_in']!=null){
									echo '<a href="logout.php"><i class="icon-off"></i> Keluar</a>';
								}
							}
							else{
								echo '<a href="register.php"> Daftar </a>';
							}
							?>
						</li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<!-- language starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-comment"></i><span class="hidden-phone" id="language"> Bahasa</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li id="li1">
							<a href="index.php"> Indonesia</a>
						</li>
						<li class="divider"></li>
						<li id="li2">
							<a href="../index.php"> Inggris</a>
						</li>
					</ul>
				</div>
				<!-- language ends -->

				<div class="btn-group navbar-search pull-right">
					<form action="search.php" method="get">
						<input placeholder="Cari Jurnal" class="search-query span2" name="query" type="text">
					</form>
				</div><!--/.nav-collapse -->
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->