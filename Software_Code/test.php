
<?php

include("dbconnect.php");

$sql = "SELECT * FROM images";

$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    echo $row["ImageName"], "\n";
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['ImageName']).'"/>';
}
  //Closes the database connection
  mysql_close($db);

?>


