<!DOCTYPE html>
<!--2. Resuelva un algoritmo que solicite dos enteros $a y $b y realice las operaciones:
Operaciones matematicas y el porcentaje
-->
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <form class="" action="" method="post" action="operaciones.php">
      <h3>Ingrese numero 1: <input type="text" name="numero1"></h3>
      <h3>Ingrese numero 2: <input type="text" name="numero2"></h3>
      <br>
      <input type="submit" name="" value="Calcular">
    </form>

      <?php
      $numero1 = $_POST['numero1'];
      $numero2 = $_POST['numero2'];

      $suma = $numero1 + $numero2;
      $resta = $numero1 - $numero2;
      $resta2 = $numero2 - $numero1;
      $multiplicacion = $numero1 * $numero2;
      $division = $numero1 / $numero2;
      $division2 = $numero2 / $numero1;
      $porcentaje = $numero1 % $numero2;
      $porcentaje2 = $numero2 % $numero1;

      echo "La suma es: $suma";
      echo "</br>";
      echo "La resta es: $resta";
      echo "</br>";
      echo "La resta #2 es: $resta2";
      echo "</br>";
      echo "La multiplicacion es: $multiplicacion";
      echo "</br>";
      echo "La division es: $division";
      echo "</br>";
      echo "La division es: $division2";
      echo "</br>";
      echo "El porcentaje es: $porcentaje";
      echo "</br>";
      echo "El porcentaje 2 s: $porcentaje2";
       ?>
  </body>

</html>
