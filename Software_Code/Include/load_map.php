<?php
    function load_map($page_num) {
          include "dbconnect.php";

        if($page_num == "all") {
            $sql = "SELECT * FROM maplocation";
        } else {
            $sql = "SELECT * FROM maplocation WHERE PageLocation=$page_num";
        }
        $result = $db->query($sql);
        
        echo "[";
        while ($row = $result->fetch_array()) {
            $latitude = $row["latitude"];
            $longitude = $row["longitude"];
            $description = $row["description"];
            echo <<<EOT
                {
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [$latitude, $longitude],
                    },
                    "properties": {
                        "description": "$description",
                        "icon": "marker",
                    }
                },
            EOT;
        }
        echo "]";

        $db->close();
    }
?>
