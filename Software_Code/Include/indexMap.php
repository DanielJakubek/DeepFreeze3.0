<?php
    function loadMap() {
          include "dbconnect.php";

        $sql = "SELECT * FROM maplocation ORDER BY locationName ASC";
        $result = $db->query($sql);
        
        echo "[";
        while ($row = $result->fetch_array()) {
            $latitude = $row["latitude"];
            $longitude = $row["longitude"];
            $description = $row["description"];
            $locationName = $row["locationName"];

            echo <<<EOT
                {
                    "name": "$locationName",
                    "description": "$description",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [$latitude, $longitude]
                    },
                    "properties": {
                        "title": "$locationName",
                        "icon": "marker"
                    }
                },
            EOT;
        }
        echo "]";

        $db->close();
    }
?>
