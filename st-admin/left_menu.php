<!-- left menu starts -->
	<div class="span2 main-menu-span">
		<div class="well nav-collapse sidebar-nav">
			<ul class="nav nav-tabs nav-stacked main-menu">
				<li class="nav-header hidden-tablet">APPS</li>
				<li id="left1"></li>
				<li id="left2"></li>
				<li id="left3"></li>
				<li id="left4"></li>
				<li id="left5"></li>
				<li id="left6"></li>
			</ul>
		</div><!--/.well -->
	</div><!--/span-->
<!-- left menu ends -->
<script type="text/javascript">
		if (localStorage.username) {
			var username=localStorage.getItem('username');
			document.getElementById("left1").innerHTML="<a class=\"ajax-link\" href=\"index.php\"><i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Home </span></a>";;
			document.getElementById("left2").innerHTML="<a class=\"ajax-link\" href=\"guidelines.php\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> Guidelines </span></a>";
			document.getElementById("left3").innerHTML="<a class=\"ajax-link\" href=\"submit_form.php\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Submit New Journal </span></a>";
			document.getElementById("left4").innerHTML="<a class=\"ajax-link\" href=\"list_journals.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> List of Journals </span></a>";
			document.getElementById("left5").innerHTML="<a href=\"about.php\"><i class=\"icon-lock\"></i><span class=\"hidden-tablet\"> About Us </span></a>";
			document.getElementById("left6").innerHTML="<a href=\"my_journals.php\"><i class=\"icon-lock\"></i><span class=\"hidden-tablet\"> My Journals </span></a>";
		} else {
			document.getElementById("left1").innerHTML="<a class=\"ajax-link\" href=\"index.php\"><i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Home </span></a>";;
			document.getElementById("left2").innerHTML="<a class=\"ajax-link\" href=\"guidelines.php\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> Guidelines </span></a>";
			document.getElementById("left3").innerHTML="<a class=\"ajax-link\" href=\"login.php?submit=true\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Submit New Journal </span></a>";
			document.getElementById("left4").innerHTML="<a class=\"ajax-link\" href=\"list_journals.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> List of Journals </span></a>";
			document.getElementById("left5").innerHTML="<a href=\"about.php\"><i class=\"icon-lock\"></i><span class=\"hidden-tablet\"> About Us </span></a>";
		}
	</script>
