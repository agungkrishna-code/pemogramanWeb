<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index 2</title>
</head>
<body>
<?php
    $mk = array("pemograman web", "basis data", "fisika", "matematika diskrit");
    $qty = count($mk);

    // echo "jmlh data pd array mk adalah: ". count($mk);
    echo "<br>";

    echo "array MK terdiri atas data berikut:<br>";
    // for ($j=0; $j < $qty; $j++) {
    //   echo "data array MK index ke-$j adalah:" . $mk[$j] . "<br>";
    // }

    $i = 0;
    while ($i < $qty)
    {
      echo $mk[$i] ."<br />";
      $i++;
    }

    $prodi[0] = "sistem informasi";
    $prodi[1] = "sistem komputer";
    $prodi[2] = "teknologi informasi";
    echo count($prodi)
  ?>
  <br>
  <hr>
  <br>
  <?php
    $profil = array("mikel" => "memancing", "santi" => "menari", "zaya" => "menyanyi", "hari" => "berenang", "ucok" => "olahraga");
    foreach ($profil as $key => $value) {
      echo "Nama = $key, Hobinya = $value";
      echo "<br>";
    }
  ?>
</body>
</html>