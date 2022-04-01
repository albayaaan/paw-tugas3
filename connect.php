<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbhome = "abyan";

    $conn = mysqli_connect($host, $user, $password, $dbhome);
    if(!$conn) {
        echo "Failed to connect database";
    }
?>