<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 10</title>
  </head>
  <body>
    <form method="post">
      Diagonal 1: <input type="text" name="Diagonal1" value="">
      Diagonal 2: <input type="text" name="Diagonal2" value=""><br><br>
      Lado: <input type="text" name="Lado" value="">
      <input type="submit" name="enviar" value="Calcular">
    </form>

    <?php
    $Diagonal1 = $_POST['Diagonal1'];
    $Diagonal2 = $_POST['Diagonal2'];
    $Lado = $_POST['Lado'];

    $Area= ($Diagonal1*$Diagonal2)/2;
    $Perimetro = 4 * $L;

    echo "El area del rombo es: $Area";
    echo "<br>";
    echo "El perimetro del rombo es: $Perimetro";
    ?>

  </body>
</html>
