<?php
    $db = new mysqli(
        "localhost",
        "daniel",
        "123",
        "localdb"
    );

    if(!$db) {
        die("Connect Error". mysqli_connect_errno());
    }
?>