<html>
 <head>
 </head>
 <body>
  <h1>Juego de preguntas</h1>
  <?php
  include_once 'juegoPreguntas.php';
    //instanciamos la clase JuegoPreguntas
    $juego = new JuegoPreguntas("juego.txt");
    //llamamos al metodo jugar()
    $juego->jugar();
    //si no existe la cookie, la creamos y le asignamos 0 (aun no ha jugado)
    if(!isset($_COOKIE['puntuacion'])){
        setcookie("puntuacion", 0, time()+3600);
    }
    //si se ha enviado el formulario, mostramos la puntuacion y actualizamos la cookie
    if(isset($_GET['respuesta'])){
        echo "<h2>Puntuacion: " . $_COOKIE['puntuacion'] . "</h2>";
        setcookie("puntuacion", $juego->num_preguntas(), time()+3600);
    }
  ?>
 </body>
</html>
