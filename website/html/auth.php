<?php

session_start();
require_once("includes/database.php");

$authenticated = false;

if (isset($_POST["username"]) && isset($_POST["password"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $conn = dbconnect();
  if (!$conn->connect_error) {
    $sql = "SELECT username FROM leden WHERE username = '$username' AND password = '$password' LIMIT 1";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      $_SESSION["username"] = $username;
      $authenticated=true;
    }
    $conn->close();      
  }
}

echo $authenticated;

?>