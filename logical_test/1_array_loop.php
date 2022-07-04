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

  $aplikasi[1] = 'gtAkademik';
  $aplikasi[2] = 'gtFinansi';
  $aplikasi[3] = 'gtPerizinan';
  $aplikasi[4] = 'eCampuz';
  $aplikasi[5] = 'eOviz';

  $i = 1;
  while ($i <= 5) {
    echo $aplikasi[$i] . '<br>';
    $i++;
  }

  ?>
</body>

</html>