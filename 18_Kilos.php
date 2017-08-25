<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 18</title>
  </head>
  <body>
    <form method="post">
      kilogramo: <input type="text" name="kilogramo" value="">
      <input type="submit" name="enviar" value="Calcular">
    </form>

    <?php
      $kilogramo=$_POST['kilogramo'];
      $gramo=$kilogramo*1000;

      echo "$kilogramo kilogramos equivalen a $gramo gramos";

     ?>
  </body>
</html>
