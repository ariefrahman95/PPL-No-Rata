<?php
	include "database_connection.php";
	if ((isset($_POST['post_title']))&&(isset($_POST['post_content']))){
		$mytitle=$_POST['post_title'];
		$mycontent=$_POST['post_content'];
		$mylokasi=$_GET['location'];

		$sql_add="INSERT INTO post (judul, content, lokasi) values ('$mytitle', '$mycontent', '$mylokasi')";
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