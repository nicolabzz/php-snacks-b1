<!-- 
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack4</title>
</head>

<body>

<?php
$array = range(0, 100);
shuffle($array);
$array = array_slice($array ,0,15);

var_dump($array);
?>

</body>

</html>