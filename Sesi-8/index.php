<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesi-8</title>
</head>
<body>
  <?php
    echo "<h1>Good Morning</h1>"; 
    echo "<br>"; 
    echo "<p>hari ini adalah hari jumat,25 november 2022</p>";
    echo "<p>besok adalah hari sabtu,26 november 2022</p>"; 
  ?>
  <br>
  <hr>
  <br>
  <?php
    $nama = "agung";
    $alamat = "Jl. Ahmad Yani";
    $prodi = "S1-Sistem Informasi";
    
    $break = "<br> <hr> <br>";

    echo "nama saya adalah" . $nama;
    echo "<br>alamat saya adalah $alamat";
    echo "<br>saya adalah mahasiswa program studi " . $prodi;
    echo $break;

    $x = 10;
    $x++;
    echo "nilai x adalah: $x";
    $x++;
    echo "nilai x adalah: $x";

    echo $break;

    $y = 20;
    $y--;
    echo "nilai y adalah: $y";
    $y--;
    echo "nilai y adalah: $y";

    echo $break;

    $nilai = 100;
    if ($nilai == 100) {
      echo "nilainya seratus";
    } elseif ($nilai < 100) {
      echo "nilainya kurang dari seratus";
    } elseif ($nilai > 100) {
      echo "nilainya lebih dari seratus";
    } else {
      echo "error";
    }

    echo "$break";

    $color = "biru";
    switch ($color) {
      case 'unggu':
        echo "warna unggu";
        break;
      case 'jingga':
        echo "warna jingga";
        break;
      case 'merah':
        echo "warna merah";
        break;
      case 'kuning':
        echo "warna kuning";
        break;
      case 'hitam':
        echo "warna hitam";
        break;
      case 'hijau':
        echo "warna hijau";
        break;
      case 'putih':
        echo "warna putih";
        break;
      case 'oranye':
        echo "warna oranye";
        break;
      case 'pink':
        echo "warna pink";
        break;
      case 'abu-abu':
        echo "warna abu-abu";
        break;
      default:
        echo "pilihan warna tidak ada";
        break;
    }

    echo $break;

    for ($q = 5; $q <= 100; $q++) { 
      echo "ini adalah nilai ke-$q. <br>";
    }

    echo $break;

    $k=1;
    while ($k <= 30)
    {
        echo "$k,";
        $k +=2;
    }

    echo $break;

    $g = 11;
    while ($g <= 10) {
      echo "nilai g adalah: $g <br>";
      $g++;
    }

    echo $break;

    $g=1;
    do {
      echo "nilai do-while-G adalah: $g <br>";
      $g++;
    }
    while ($g <= 10);

    echo $break;
    
    echo "<table border =\"1\">
    <tr>
      <th>no</th>
      <th>data</th>
    <tr>";

    $v=1;
    while ($v <= 10){
    echo "<tr>
            <td>$v</th>
            <td>Data nomor ke-$v</th>
          <tr>";
    $v++;
    }
    echo "</table>";
  ?>
</body>
</html>