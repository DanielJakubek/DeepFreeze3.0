<?php
    function loadMap($locationId) {
          include "dbconnect.php";

        if($locationId === "all") {
            // Used in the index page
            $sql = "SELECT * FROM maplocation ORDER BY locationName ASC";
        } else {
            // Used in the specific pages.
            $sql = "SELECT * FROM maplocation WHERE pageLocation=$locationId ORDER BY locationName ASC";
        }
        $result = $db->query($sql);

        // Emit an array of json
        echo "[";
        while ($row = $result->fetch_array()) {
            $latitude = $row["latitude"];
            $longitude = $row["longitude"];
            $description = $row["description"];
            $locationName = $row["locationName"];

            // Where individual array entries contain the point name, description, and relevant geojson data
            echo <<<EOT
                {
                    "name": `$locationName`,
                    "description": `$description`,
                    "geometry": {
                        "type": "Point",
                        "coordinates": [$latitude, $longitude]
                    },
                    "properties": {
                        "title": `$locationName`,
                        "icon": "information"
                    }
                },
            EOT;
        }
        echo "]";

        $db->close();
    }
?>
