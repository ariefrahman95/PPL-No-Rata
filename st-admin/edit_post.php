<?php
	include "database_connection.php";
	if ((isset($_POST['post_title']))&&(isset($_POST['post_content']))){
		$mytitle=$_POST['post_title'];
		$mycontent=$_POST['post_content'];
		$myid=$_GET['id'];

		$sql_add="UPDATE post SET judul='$mytitle', content='$mycontent' where id='$myid'";
		if (!mysql_query($sql_add, $db))
		{
			die('Error: ' . mysql_error($db));
		}
		?>
			<script type="text/javascript">
				window.location="index.php"; 
			</script>
		<?php
	}
?>