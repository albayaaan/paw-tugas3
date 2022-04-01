<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <title>Hello, world!</title>
</head>

<body>

  <div class="top container-fluid text-center pt-3 pb-3 primary">
    <h1>Cinema Showtime</h1>
  </div>
  <div class="container-md mt-5">
    <div class="row">
      <div class="col-4">
        <form method="get" action="form_add.php">
          <button type="submit" class="btn btn-primary"><i class="bi bi-plus"></i>Add Data</button>
        </form>
      </div>
    </div>
    <div class="row mt-2">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Movie Title</th>
            <th scope="col">Director</th>
            <th scope="col">Release Year</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "connect.php";

          $sql = "SELECT * FROM tbl_173";
          $results = mysqli_query($conn, $sql);

          while ($row = mysqli_fetch_array($results)) {
          ?>

            <tr>
              <th scope="row"><?= $row["id_film"]; ?></th>
              <td><?= $row["judul_film"]; ?></td>
              <td><?= $row["sutradara"]; ?></td>
              <td><?= $row["tahun_rilis"]; ?></td>
              <td><a class="bi bi-pencil-fill px-1" href="form_edit.php?id=<?= $row['id_film']; ?>"></a><a href="delete.php?id=<?= $row['id_film']; ?>" class="bi bi-trash-fill px-1"></a></td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>