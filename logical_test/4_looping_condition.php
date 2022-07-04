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

  for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
      echo "FooBar <br>";
    } elseif ($i % 3 == 0) {
      echo "Foo <br>";
    } elseif ($i % 5 == 0) {
      echo "Bar <br>";
    } else {
      echo "$i <br>";
    }
  }

  ?>
</body>

</html>