 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form method="post">
       Numero1 <input type="text" name="numero1" value="">
       Numero2 <input type="text" name="numero2" value="">
       <input type="submit" name="enviar" value="Calcular">
     </form>

     <?php
     $numero1 = $_POST['numero1'];
     $numero2 = $_POST['numero2'];

     $suma = $numero1 + $numero2;
     $resta = $numero1 - $numero2;
     $multiplicacion = $numero1 * $numero2;
     $division = $numero1 / $numero2;
     $modulo = $numero1 % $numero2;

      echo "La suma de los numeros es: $suma";
      echo "</br>";
      echo "La resta de los numeros es: $resta";
      echo "</br>";
      echo "La multiplicacion de los numeros es: $multiplicacion";
      echo "</br>";
      echo "La division de los numeros es: $division";
      echo "</br>";
      echo "El modulo de los numeros es: $modulo";
     ?>

   </body>
 </html>
