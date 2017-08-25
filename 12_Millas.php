<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 12</title>
  </head>
  <body>
    <form method="post">
      Millas: <input type="text" name="milla" value="">
      <input type="submit" name="enviar" value="Calcular">
    </form>

    <?php
      $milla = $_POST['milla'];
      $kilometro = $milla*1.609344;

      echo "$milla millas equivalen a $kilometro kilometros";
     ?>

  </body>
</html>
