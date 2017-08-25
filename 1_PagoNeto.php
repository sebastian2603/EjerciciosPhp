
<?php
$ht="10";
$th="7000";
$ti="20000";
$pn=($ht*$th)-$ti;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <h4> Horas Trabajadas: <?php echo $ht ?></h4>
    <h4> Tarifa Por Horas: <?php echo $th ?></h4>
    <h4> Tasa De Impuesto: <?php echo $ti ?></h4>
    <h1> El pago neto del trabajador es de: <?php echo "$pn"; ?></h1>

  </body>
</html>
