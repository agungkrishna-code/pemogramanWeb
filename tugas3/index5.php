<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    echo "Nama anda adalah : " . $_GET ["X_nama"] ."<br>";
    echo "Nim anda adalah : " . $_REQUEST ["X_nim"] ."<br>";
    echo "Umur anda adalah : " . $_GET ["X_umur"] ."<br>";
    echo "Tempat dan Tanggal Lahir anda adalah : " . $_GET ["X_lahir"] ."<br>";
    echo "Agama anda adalah : " . $_GET ["X_agama"]. "<br>";
    echo "Jurusan anda adalah : " . $_REQUEST ["X_jurusan"]. "<br>";
    echo "Hobi anda adalah : " . $_REQUEST ["X_hobi"]. "<br>";
    echo "Alamat anda adalah : " . $_GET ["X_alamat"]. "<br>";
  ?>
</body>
</html>