<?php
    include "connect.php";

    $title = $_POST['title'];
    $director = $_POST['director'];
    $year = $_POST['release_year'];

    $sql = "INSERT INTO tbl_173 VALUES(null, '$title', '$director', '$year')";
    $results = mysqli_query($conn, $sql);

    if(!$results) {
        echo "Add data failed";
    } else {
        echo "Add data success<br>";
        echo "<a href='index.php'>Show Data</a>";
    }
?>