<?php
	session_start();
	unset($_SESSION["logged_in"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
?>
<script type="text/javascript">
	localStorage.removeItem('username');
	localStorage.removeItem('expired_time');
	window.location="index.php";
</script>