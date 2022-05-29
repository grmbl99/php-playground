<?php

function dbconnect() {
  $servername = "database";
  $dbuser = "test_user";
  $dbpasswd = rtrim(file_get_contents("/run/secrets/mysql_db_password"));
  $dbname = "testdb";

  $conn = new mysqli($servername, $dbuser, $dbpasswd, $dbname);

  return $conn;
}

?>