<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 19</title>
  </head>
  <body>
    <form method="post">
      numero: <input type="text" name="numero" value="">
      <input type="submit" name="enviar" value="Calcular">
      <hr>
    </form>

    <?php
      $numero =$_POST['numero'];
      echo "la raiz cuadrada de $numero es:";
      echo sqrt($numero);
     ?>
     
  </body>
</html>
