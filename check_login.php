<?php
	if (isset($_POST['username2'])){
		if (($_POST['username2'] != 'destraaaa')||($_POST['password'] != 'ganteng')){
			?>
			<script>
				alert("username atau password salah");
				window.location="login.php";
			</script>
			<?php
		}
		else {
			?>
			<script type="text/javascript">
				localStorage.username='<?php echo $_POST['username2'];?>';
				var d = new Date();
				d.setDate(d.getDate() + 30);
				var n = d.getTime();
				localStorage.expired_time=n; 
				window.location="index.php";
			</script>
			<?php
		}
	}
?>