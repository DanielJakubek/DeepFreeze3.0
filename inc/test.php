<?php
include("dbconnect.php");

$nameID = $params['id'];

$sql = "SELECT * FROM test WHERE nameID='". $nameID ."'";

$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $rows[] = $row;
}

  header('Content-type: application/json');
  echo json_encode($rows);

?>