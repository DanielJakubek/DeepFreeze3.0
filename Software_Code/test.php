
<?php

include("dbconnect.php");

$sql = "SELECT * FROM images";

$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    echo $row["ImageName"], "\n";
}
  //Closes the database connection
  mysql_close($db);

?>


