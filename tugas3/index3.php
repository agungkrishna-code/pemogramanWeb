<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index3</title>
</head>
<body>
  <?php
    function nyapa() {
      echo "<h1>selamat pagi agung krishna </h1>";
    }
    nyapa();

    function jumlah($x, $y =100) {
      echo $x + $y;
    }
    jumlah(5, 10);
    echo "<br>";
    jumlah(25, 100);

  echo "<br>";
    function kali($x, $y) {
      $z = $x * $y;
      return $z;
    }
    echo "nilai perkalian 1 adalah: ". kali(3, 8) ."<br>";
    echo "nilai perkalian 2 adalah: ". kali(33, 8) ."<br>";
    echo "nilai perkalian 3 adalah: ". kali(31, 8) ."<br>";
    echo "nilai perkalian 4 adalah: ". kali(34, 8) ."<br>";
    echo "nilai perkalian 5 adalah: " . kali(98, 8) . "<br>"
  ?>
</body>
</html>