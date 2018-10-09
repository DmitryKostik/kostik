<?php
include "functions.php";
$tovars = getAllTovar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <h1 class="text-center">Изделия</h1>
  <table class="table table-striped">
    <tr>
      <th>Код изделия</th>
      <th>Цена</th>
      <th>Изделие</th>
      <th>Код ед измерения</th>
      <th>Код поставщика</th>
    </tr>
    <?php
for ($i=0; $i < count($tovars); $i++) {
  $id = $tovars[$i]['КодИзделия'];
  $price = $tovars[$i]['ЦенаПродажи'];
  $name = $tovars[$i]['Изделие'];
  $ided = $tovars[$i]['Единица'];
  $idseller = $tovars[$i]['Название'];
  echo "<tr><td>$id</td><td>$price</td><td>$name</td><td>$ided</td><td>$idseller</td></tr>";
}
?>
</table>
</body>
</html>
