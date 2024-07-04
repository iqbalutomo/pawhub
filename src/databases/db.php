<?php
    // hardcoded 🤟🏼
    $db_host = "127.0.0.1:3306";
    $db_username = "root";
    $db_password = "";
    $db_name = "pawhub";

    // connection
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($conn->connect_error){
        die("Connecting failed.");
    } else {
        echo "Connecting Successfully!";
    }
?>