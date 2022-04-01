<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Data</title>
</head>

<body>
    <div class="row mt-5 mb-5 text-center">
        <h2>Edit Data</h2>
    </div>

    <?php
    include "connect.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM tbl_173 WHERE id_film = $id";
    $results = mysqli_query($conn, $sql);

    if (!$results) {
        echo "check your query";
    }

    while ($row = mysqli_fetch_array($results)) {
    ?>

        <div class="row justify-content-center">
            <div class="card" style="width: 50%;">
                <div class="card-body">
                    <form action="edit.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id_film'] ?>">
                        <div class="mb-3">
                            <label for="input1" class="form-label">Movie</label>
                            <input type="text" class="form-control" id="input1" name="title" value="<?php echo $row['judul_film'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="input2" class="form-label">Director</label>
                            <input type="text" class="form-control" name="director" id="input2" value="<?php echo $row['sutradara'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="input3" class="form-label">Release Year</label>
                            <input type="number" class="form-control" id="input3" name="release_year" value="<?php echo $row['tahun_rilis'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>