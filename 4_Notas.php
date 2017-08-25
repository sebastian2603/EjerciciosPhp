
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <form
    method="get">
      nota1: <br><input name="Nota1"  name="text" /></br>
      nota2: <br><input name="Nota2"  name="text" /></br>
      nota3: <br><input name="Nota3"  name="text"/></br>
      <input name="enviar" type="submit" value="Calcular"/>
    </form>

    <?php
    $Nota1= $_GET['Nota1'];
    $Nota2= $_GET['Nota2'];
    $Nota3= $_GET['Nota3'];
    $promedio=($Nota1+$Nota2+$Nota3)/3;
    echo "El promedio de todas las notas ingresadas es: $promedio";
     ?>
  </body>
</html>
