<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 8</title>
  </head>
  <body>
    <form method="post">
      radio <input type="text" name="radio" value="">
      <input type="submit" name="enviar" value="calcular">
    </form>
    <?php
    $radio= $_POST['radio'];
    define ('pi','3.14');
    $area= pi * ($radio*2);
     echo "El area del circulo es: $area";
     ?>
  </body>
</html>
