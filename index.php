<?php
// Start session
session_start();


require_once "lib/koneksi.php";

// Check if user is logged in
if (!isset($_SESSION['username'])) {
  // User is not logged in, redirect to login page
  header("Location: ../login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

  <div class="container py-5">

    <div class="navbar justify-content-between">
      <a href="create.php" class="btn btn-primary">Tambah Mahasiswa</a>
      <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <div class="display-5 text-center mb-4">
      <?= "Welcome, " . $_SESSION['username'] ?>
    </div>

    <div class="col-md-8 mx-auto">
      <table class="table table-bordered table-sm text-center">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Select all records from mahasiswa table
          $sql = "SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC;";
          $result = $conn->query($sql);
          ?>
          <?php if ($result->num_rows > 0) { ?>
            <?php $num = 1; ?>
            <?php while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <th scope="row"><?= $num; ?></th>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td>
                  <a href="#" class="badge bg-primary text-decoration-none rounded-1">Edit</a>
                  <a href="lib/delete-sytem.php?id=<?= $row["id_mahasiswa"] ?>" class="badge bg-danger text-decoration-none rounded-1">Delete</a>
                </td>
              </tr>
              <?php $num++; ?>
            <?php } ?>
          <?php } else { ?>
            <tr>
              <td colspan="4">Tidak ada data</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <?php $conn->close(); ?>
  </div>

</body>

</html>