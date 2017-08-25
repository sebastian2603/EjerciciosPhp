

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
      <form method="post">
        Ingrese numero: <input  name="numero" name="text" />
        <input name="enviar" type="submit" value="Calcular"/>
      </form>

      <?php
      $numero= $_POST['numero'];
      $cuadrado=$numero**2;
      echo "El cuadrado del numero $numero es: $cuadrado";
      ?>

  </body>
</html>
