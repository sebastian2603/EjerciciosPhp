<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <form method="post">
        Base: <input name="base" name"text"/>
        Altura: <input name="altura" name"text"/>
        <input name="enviar" type="submit" value="Calcular"/>

    </form>

    <?php
      $base=$_POST['base'];
      $altura=$_POST['altura'];
      $area=($base*$altura)/2;
      echo "el area del triangulo es: $area";
     ?>

  </body>
</html>
