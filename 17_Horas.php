<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 17</title>
  </head>
  <body>
    <form method="post">
      Horas: <input type="text" name="horas" value="">
      <input type="submit" name="enviar" value="Calcular">
      <hr>
    </form>

    <?php
      $horas =$_POST['horas'];
      $minutos = $horas * 60;
      $segundos = $horas * 3600;

      echo "$horas hora equivalen a $minutos minutos";
      echo "<br>";
      echo "$horas hora equivalen a $segundos segundos";
     ?>

  </body>
</html>
