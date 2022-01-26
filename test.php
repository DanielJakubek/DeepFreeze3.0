
<html> 
  <body>
<?php

include("dbconnect.php");

$nameID = $params['id'];

$sql = "SELECT * FROM test";

$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $rows[] = $row;
}

  printf($rows);



?>





<h1> This test is poggers, pog </h1>

</body>
</html>