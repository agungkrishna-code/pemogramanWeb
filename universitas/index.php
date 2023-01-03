<?php
include './config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Universitas | CRUD</title>
</head>
<body>
  <div class="container">
    <div class="col-10 m-auto">
      <p class="h1 text-center p-5">Tabel Mahasiswa</p>
      <a href="create.php" class="btn btn-primary">Tambah Data</a>
      <table class="table table-hover table-bordered border-primary mt-3">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nim</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">Whatsapp</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <?php
          $query = "SELECT * FROM mahasiswa";
          $result = mysqli_query($koneksi,$query);

        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tbody>
          <tr>
            <td scope="row"><?= $no++?></td>
            <td scope="row"><?= $data['nama']?></td>
            <td scope="row"><?= $data['nim']?></td>
            <td scope="row"><?= $data['jenis_kelamin']?></td>
            <td scope="row"><?= $data['alamat']?></td>
            <td scope="row"><?= $data['email']?></td>
            <td scope="row"><?= $data['whatsapp']?></td>
            <td scope="row">
              <a href="edit.php?id=<?= $data['id']?>" class="btn btn-warning ms-4">Edit</a>
              <form class="d-inline" action="delete.php" method="post">
                <input type="hidden" name="id" value="<?= $data['id']?>">
                <button class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        </tbody>
        <?php
        }
        ?>
      </table>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>