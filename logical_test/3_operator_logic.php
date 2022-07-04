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

  function bagi($a, $b)
  {
    $hasil = $a / $b;
    $hasil = floor($hasil);
    return $hasil;
  }

  $a = 7;
  $b = 2;
  $c = 8;
  $d = 4;
  $hasil1 = bagi($a, $b);
  $hasil2 = bagi($c, $d);
  echo "$hasil1  <br>";
  echo "$hasil2";

  ?>
</body>

</html>