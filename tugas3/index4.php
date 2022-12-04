<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index 4</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <form form method="GET" action="/tugas3/index5.php">
    <div class="form-group row">
      <label class="col-sm-1 col-form-label">Nama :</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="X_nama" placeholder="ketik nama anda">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-1 col-form-label">Nim :</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="X_nim" placeholder="ketik nim anda">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-1 col-form-label">Umur :</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="X_umur" placeholder="ketik umur anda">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Tempat & Tanggal Lahir :</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="X_lahir" placeholder="ketik tempat & tanggal lahir anda">
      </div>
    </div>
    
    <label class="col-sm-1 col-form-label">Agama :</label>
      <select name="X_agama">
        <optgroup label="Agama">
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Budha">Budha</option>
          <option value="Katolik">Katolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Konghucu">Konghucu</option>
        </optgroup>
      </select>
    <br>
    <label class="col-sm-1 col-form-label">Jurusan :</label>
      <select name="X_jurusan">
        <option value="S1-Sistem Informasi">S1-Sistem Informasi</option>
        <option value="S1-Teknologi Informasi">S1-Teknologi Informasi</option>
        <option value="S1-Sistem Komputer">S1-Sistem Komputer</option>
        <option value="S1-Bisnis Digital">S1-Bisnis Digital</option>
        <option value="D3-Manajemen Informatika">D3-Manajemen Informatika</option>
      </select>
    <div class="form-group row">
      <label class="col-sm-1 col-form-label">Hobi :</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="X_hobi" placeholder="ketik hobi anda">
      </div>
    </div>
      <p>
        Alamat
        <textarea cols="50" rows="9" name="X_alamat"></textarea>
      </p>
    <input type="submit" class="btn btn-primary">
  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>