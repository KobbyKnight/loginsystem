<?php
// image upload function
function imageUpload($name,$tmp_name)
{
  $target_dir = "uploads". DIRECTORY_SEPARATOR;
  $target_dir = $target_dir . basename($name);
  $uploadOk = 1; //you changed this hmm
  $imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));

  // Check if file already exists
  if (file_exists($target_dir)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["photo"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  }
   if($uploadOk == 1) {
      $upload = move_uploaded_file($tmp_name,$target_dir);
      $check = getimagesize($target_dir);
      if($upload !== false) {
          echo "File is an image - " . $check["mime"] . ". ". "File uploaded <br>";
      } else {
          echo $check;
          echo "File is not an image." . " Sorry, there was an error uploading your file.";
      }
  }
}

if($_POST) {
  // loops through the $_FILES array and performs the upload for each file
foreach ($_FILES as $key => $value) {
  imageUpload($value['name'],$value['tmp_name']);
}
}
?>
