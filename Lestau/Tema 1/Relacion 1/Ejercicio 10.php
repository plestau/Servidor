<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ejercicio 1.10</title>
</head>
<body action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
     <a href="destino.php?variable1=valor1&variable2=valor2">Mi enlace</a>
<?php
     ///Recibes las variables
     $uno = $_REQUEST['valor1'];
     $dos = $_REQUEST['valor2'];

     //Comparas
     if($uno == $dos){
          echo "Error. Los numeros son iguales";
          exit();
          }
     //Comparas y asignas
     if($uno < $dos){
          $mayor = $dos;
          $menor = $uno;
          }
     else{
          $mayor = $uno;
          $menor = $dos;
          }
     //Imprimes los numeros que estan entre los que metieron
     for($menor; $menor <= $mayor; $menor++){
          echo $menor." ";
          }
?> 
</body>
</html>
