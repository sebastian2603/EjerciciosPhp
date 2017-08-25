<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 20</title>
  </head>
  <body>
    <form method="post">
      Ingrese primer numero: <input type="text" name="numero1" value=""><br>
      Ingrese segundo numero: <input type="text" name="numero2" value=""><br>
      <input type="submit" name="enviar" value="calcular">
    </form>

    <?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $pitagoras = sqrt(($numero1**2)+($numero2**2));

    echo " el teorema de pitagora de los numeros ingresados es : $pitagoras";
     ?>
  </body>
</html>
