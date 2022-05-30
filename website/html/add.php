<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_SESSION['username'])) {
?>

  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>

<?php
} else {
  echo "You are not logged in.";
}
?>

</body>
</html>