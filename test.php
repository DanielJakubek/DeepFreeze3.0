
<?php

include("dbconnect.php");

$sql = "SELECT * FROM test";

$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $rows[] = $row;

}
  //Closes the database connection
  mysql_close($db);

?>


