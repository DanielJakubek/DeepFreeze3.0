
<?php

include("dbconnect.php");

$sql = "SELECT * FROM test";

$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    echo $row["name"], "\n";
}
  //Closes the database connection
  mysql_close($db);

?>


