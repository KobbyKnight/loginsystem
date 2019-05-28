<?php

function __construct()
{

}
// include('dbconnection.php');
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS' ,'');
// define('DB_NAME', 'loginsystem');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
function fill($arr){
    if ($arr == null) {
      return ' ';
    }
    return $arr;
}

function db_save($photo= NULL,$photo_id=NULL){
include('dbconnection.php');
  $params = array(
    'First_name' => $_POST['fname'] ,
    'Last_name' => $_POST['lname'],
    'D.O.B' => date('Y-m-d',$_POST['dob'])?date('Y-m-d',$_POST['dob']):date("Y-m-d"),
    'Marital_status' => $_POST['marital'],
    'Phone'         => $_POST['phone'],
    'Address'       => $_POST['raddress'],
    'Provider'      => $_POST['provider'],
    'email'         => $_POST['email'],
    'Photo'         => $photo,
    'Identification'=> $photo_id,
    'Reg. Date'     => date('Y-m-d'),
 );

$params = array_map('fill',$params);
$params = "'".implode("','",$params)."'";


try {
  // insert into db
  $sql = "INSERT INTO list (`First_name`,`Last_name`,`D.O.B`,`Marital_status`,`Phone`,`Address`,`Provider`,`email`,`Photo`,`Identification`,`Reg. Date`) values($params)";
  $query = mysqli_query($con,$sql)or die(mysqli_error($con));
 if ($query) {
   echo "<script>alert('data saved'); window.location.replace('premium.php')</script>";
 }
} catch (Exception $e) {
  echo $e->getMessage();
}

}
// image upload function
function imageUpload($name,$tmp_name)
{
  $target_dir = "uploads". DIRECTORY_SEPARATOR;
  $target_dir = $target_dir . basename($name);
  $uploadOk = 1; //you changed this hmm
  $imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));

  // Check if file already exists
  if (file_exists($target_dir)) {
      $msg = "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["photo"]["size"] > 500000) {
      $msg = "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      $msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      $msg .= "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  }
   if($uploadOk == 1) {
      $upload = move_uploaded_file($tmp_name,$target_dir);
      $check = getimagesize($target_dir);
      if($upload !== false) {
          $msg = "File is an image - " . $check["mime"] . ". ". "File uploaded <br>";
      } else {
          die($msg);
      }
  }
}

if($_POST) {
  // loops through the $_FILES array and performs the upload for each file
foreach ($_FILES as $key => $value) {
  $fileNames[]= $value['name'];
  imageUpload($value['name'],$value['tmp_name']);
}
// function that saves info to db
db_save($fileNames[0],$fileNames[1]);
}
?>
