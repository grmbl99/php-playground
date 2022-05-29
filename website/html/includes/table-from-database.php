<?php
require_once("includes/database.php");

function tablerow($row, $isheader) {
  echo "<tr>";
  foreach ($row as $key => $value) {
    if ($isheader) { 
      echo "<th>$key</th>"; } 
    else {
      echo "<td>$value</td>";
    }
  }
  echo "</tr>";
}

$conn = dbconnect();

if (!$conn->connect_error) {
  $sql = "SELECT * FROM diners";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table>";
    $rownr = 0;
    while($row = $result->fetch_assoc()) {
      if ($rownr++ == 0) {
        tablerow($row, isheader: true);
      }
      tablerow($row, isheader: false);
    }
    echo "</table>";
  }
  $conn->close();      
}
?>