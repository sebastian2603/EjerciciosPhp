<!DOCTYPE html>
<!--3. Resuelva un algoritmo que realice las siguiente operaciones:
a) el doble de un numero
b) el triple de un numero
-->
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <form class="" action="" method="post" action="operaciones.php">
      <h3>Ingrese un numero: <input type="text" name="numero"></h3>
      <br>
      <input type="submit" name="" value="Calcular">
    </form>
    <?php
    $num = $_POST['num'];
    $doble = $numero * 2;
    $triple = $numero * 3;

    echo "El doble del numero $num es: $doble";
    echo "<br>";
    echo "El triple del numero $num es: $triple";
    ?>

  </body>
</html>
