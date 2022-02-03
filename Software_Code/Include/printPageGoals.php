<?php 
    function printData($segmentID, $pageName) {

        include "dbconnect.php";
        $sql = "SELECT * FROM pagetextsegments WHERE segmentID ='$segmentID' AND PageName = '$pageName'";
    
        $rows = array();
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo $row['Text'];
        }
    
        $db->close();

    }
    
    
    ?>