<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="col-md-6 mx-auto align-items-center justify-content-center d-flex" style="min-height: 100vh;">
      <form class="w-100" action="lib/create-system.php" method="post">
        <div class="form-group mb-3">
          <label for="nama" class="mb-1">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama">
        </div>
        <div class="form-group mb-3">
          <label for="nim" class="mb-1">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim" placeholder="Enter NIM">
        </div>
        <div class="form-group mb-3">
          <label for="jurusan" class="mb-1">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Enter jurusan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>