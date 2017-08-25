<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 13</title>
  </head>
  <body>
    <form method="post">
      Kelvin: <input type="text" name="kelvin" value="">
      <input type="submit" name="enviar" value="Calcular">
    </form>

    <?php
      $kelvin=$_POST['kelvin'];
      $fahrenheit=1.8*($kelvin - 273) + 32;
      echo "$kelvin kelvin equivalen a $fahrenheit fahrenheit";
     ?>

  </body>
</html>
