<?php
$allowedExts = array(/*"gif", "jpeg", "jpg", "png"*/"pdf", "doc", "docx");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    /*echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
	*/
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
		?>
			<script>
				alert("file already exists");
				window.location="submit_form.php";
			</script>
		<?php
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		?>
			<script>
				window.location="index.php";
			</script>
		<?php
      }
    }
  }
else
  {
	?>
		<script>
			alert("Invalid file type");
			window.location="submit_form.php";
		</script>
	<?php
  }
?> 