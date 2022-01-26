
<?php

include("dbconnect.php");

$nameID = $params['id'];

$sql = "SELECT * FROM test";

$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $rows[] = $row;
}

  try {
    $jsonInfo = json_encode($rows);
    //If the exception is thrown, this text will not be shown
    echo 'If you see this, the number is 1 or below';
  }
  //catch exception
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }

  //Closes the database connection
  mysql_close($db);

?>


