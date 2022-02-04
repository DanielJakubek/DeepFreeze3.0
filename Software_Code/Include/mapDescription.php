
<?php

  //This function deals with getting the correct map displayed items for a specific page
  //and displaying those items in the correct format
  function getMapDescriptions($pageNumber){
      include "dbConnect.php";
      $sql = "SELECT * FROM maplocation WHERE pageLocation ='$pageNumber'";

      //Creates an array that then stores a single row from the table, locationName, description etc..
      $rows = array();
      $result = $db->query($sql);
      while ($row = $result->fetch_assoc()) {

        $itemID = $row['locationName'];

        //While there are items in the query print them in the correct format
        echo ("
          <a type='button'><li id='$itemID' onclick='checkArrayExists(this.id);'> " . $itemID . ": ". $row['description'] ."</li></a><br></br>");
      }

      $db->close();
  }






?>
