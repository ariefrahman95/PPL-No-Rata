<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a href="index.php"> <img alt="Logo" src="../img/logo_baru.png" height="100px"/></a>
				
				
				
				<!--
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div>--><!-- /.nav-collapse -->
			</div>
		</div>
	</div>
	<script type="text/javascript">
		if (localStorage.username) {
			var username=localStorage.getItem('username');
			document.getElementById("membership").innerHTML=username;
			document.getElementById("li1").innerHTML="<a href=\"profile.php\">Profile</a>";
			document.getElementById("li2").innerHTML="<a href=\"logout.php\">Logout</a>";
		} else {
			document.getElementById("membership").innerHTML=" Mitra Bestari ";
			document.getElementById("li1").innerHTML="<a href=\"login.php\"> Login </a>";
			document.getElementById("li2").innerHTML="<a href=\"register.php\"> Register </a>";
		}
	</script>
	<!-- topbar ends -->