<?php
require_once("includes/database.php");

function orientation ($image) {
  $exif = exif_read_data($image);
  $ort = empty($exif['Orientation']) ? 0 : $exif['Orientation'];

  if($ort<5) {
    list($width, $height, $type, $attr) = getimagesize($image);
  }else{
    list($height, $width, $type, $attr) = getimagesize($image);
  }

  if ($width > $height) {
    $ortstr = 'landscape';
  } else {
    $ortstr = 'portrait';
  }
  return $ortstr;
}

$conn = dbconnect();

if (!$conn->connect_error) {
  $sql = "SELECT title, description, datum, foto, bijschrift FROM diners";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='section'>";
        echo "<h1>".$row["title"]."</h1>";
        echo "<p>".$row["datum"]."</p>";
        echo "<p>".$row["description"]."</p>";
        echo "<div class='image_box'>";
          $img = "images/".$row["foto"];
          echo "<img class='".orientation($img)."' src='".$img."' />";
          echo "<div class='image_text'>".$row["bijschrift"]."</div>";
        echo "</div>";
      echo "</div>";
    }
  }
  $conn->close();      
}
?>