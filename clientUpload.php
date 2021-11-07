<?php
include("upload.php");

if(isset($_POST['upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
		$query = "INSERT INTO photos (uploadedPhoto) WHERE (email='".$_POST['emailLogin']."') VALUES ('".$name."')";
        mysqli_query($con,$query);
     }

  }
 
}
?>

<form method="post" action="upload.php" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Upload' name='upload'>
</form>