
<?php

include("dbconnect.php");

$sql = "SELECT * FROM test";

$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $rows[] = $row;
    echo $row["name"];
}

  header('Content-type: application/json');
  echo json_encode($rows);

  //Closes the database connection
  mysql_close($db);

?>


<html> haha quirky </html>

