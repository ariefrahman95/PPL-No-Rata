<?php
$allowedExts = array(/*"gif", "jpeg", "jpg", "png"*/"pdf", "doc", "docx");
$temp = explode(".", $_FILES["file_revisi"]["name"]);
$extension = end($temp);
if (in_array($extension, $allowedExts))
  {
  if ($_FILES["file_revisi"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file_revisi"]["error"] . "<br>";
    }
  else
    {
    /*echo "Upload: " . $_FILES["file_revisi"]["name"] . "<br>";
    echo "Type: " . $_FILES["file_revisi"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file_revisi"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file_revisi"]["tmp_name"] . "<br>";
	*/
    if (file_exists($file_lama))
      {
		$realpath=realpath($file_lama);
		unlink($realpath);
      }
      move_uploaded_file($_FILES["file_revisi"]["tmp_name"],
      "files/" . $_FILES["file_revisi"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file_revisi"]["name"];
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