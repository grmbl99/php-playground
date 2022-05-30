<?php
session_start();

if(isset($_POST["submit"]) && isset($_SESSION['username'])) {
  try {
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check === false) {
      throw new Exception("File is not an image.");
    }

    if ($_FILES["fileToUpload"]["size"] > 5000000) {
      throw new Exception("File is too large.");
    }
  
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
      throw new Exception("Only JPG, JPEG, PNG & GIF files are allowed.");
    }

    if (file_exists($target_file)) {
      throw new Exception("File already exists.");
    }

    if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      throw new Exception("There was an error uploading your file.");
    }

  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

?>