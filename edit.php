<?php
    include "connect.php";

    $id = $_POST['id'];
    $title = $_POST['title'];
    $director = $_POST['director'];
    $year = $_POST['release_year'];

    $sql = "UPDATE tbl_173 SET judul_film = '$title', sutradara = '$director', tahun_rilis = '$year' WHERE id_film = $id";
    $results = mysqli_query($conn, $sql);

    if(!$results) {
        echo "Update data failed";
    } else {
        echo "Update data success<br>";
        echo "<a href='index.php'>Show Data</a>";
    }
?>