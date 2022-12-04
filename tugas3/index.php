<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
</head>
<body>
  <?php
    $ulangi = 0;
    while($ulangi < 10){
      echo "<ul>
        <li>Ini adalah perulangan ke-$ulangi</li>
        </ul>";
      $ulangi++;
    }
  ?>
  <br>
  <hr>
  <br>
  <?php
    $array = array("berenang", "mancing", "bermain", "olahraga", "membaca");
    foreach ($array as $key => $value) {
      echo "Hobi $key adalah: $value <br>\n";
    }
  ?>
  <br>
  <hr>
  <br>
</body>
</html>