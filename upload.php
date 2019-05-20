<?php
// define('APP_PATH','C:\wamp64\www\loginsystem\ '); so sekof this space
$target_dir = 'C:\wamp64\www\loginsystem' . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR;
$target_file =  $target_dir.basename($_FILES["photo"]["name"]);
$uploadOk = 1; //you changed this hmm
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
// var_dump($_FILES["photo"]);
// var_dump(basename($_FILES["photo"]["name"]));
// var_dump($imageFileType);die();
if($_POST) {
    
// why do we need all the code below?
// Check if file already exists
if (file_exists($target_file)) {
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
    $upload = move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir.$target_file);    
    $check = getimagesize($_FILES["photo"]["name"]);    
    var_dump(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir));
    var_dump($check);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        echo "File uploaded";
        
    } else {
        echo $check;
        echo "File is not an image.";
        echo "Sorry, there was an error uploading your file.";
    }
      
    
}


}
?>
