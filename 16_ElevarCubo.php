
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 16</title>
  </head>
  <body>
      <form method="post">
        Numero: <input  name="numero" name="text" />
        <input name="enviar" type="submit" value="Calcular"/>
      </form>

      <?php
      $numero= $_POST['numero'];
      $cubo=$numero**3;
      echo "El numero $numero elevado al cubo es: $cubo";
      ?>

  </body>
</html>
