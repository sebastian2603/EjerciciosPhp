<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
  </head>
  <body>
    <form method="post">
      Base: <input type="text" name="base" value="">
      Altura: <input type="text" name="altura" value="">
      <input type="submit" name="Enviar" value="Calcular">
    </form>

    <?php
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $area = $base * $altura;
    echo "El area del rectangulo es: $area";
     ?>
  </body>
</html>
