<?php
	include "accesibilidad.php";
	$color = isset($_GET["color"])?$_GET["color"]:"";
	$tamanio = isset($_GET["tamanio"])?$_GET["tamanio"]:"";
	$a = new accesibilidad($color,$tamanio);
?>
<html>
 <head>
  <title>Página principal DWES-2DAW</title>
  <meta charset="UTF-8" />
 </head>
 <body bgcolor="#<?php echo $a->getColor(); ?>" style="font-size: <?php echo $a->getTamanio(); ?>px">
  <h1>Probando cookies</h1>
  <form action="" method="GET">
   <label>Color de Fondo: </label>
   <select name="color">
    <option value="F00" <?php echo $a->getColor()=="F00"?"selected=\"selected\"":""; ?> >Rojo</option>
	<option value="0F0" <?php echo $a->getColor()=="0F0"?"selected=\"selected\"":""; ?> >Verde</option>
	<option value="00F" <?php echo $a->getColor()=="00F"?"selected=\"selected\"":""; ?> >Azul</option>
   </select><br />
   <label>Tamaño de la letra: </label>
   <select name="tamanio">
    <option value="12" <?php echo $a->getTamanio()==12?"selected=\"selected\"":""; ?> >12</option>
	<option value="15" <?php echo $a->getTamanio()==15?"selected=\"selected\"":""; ?> >15</option>
	<option value="30" <?php echo $a->getTamanio()==30?"selected=\"selected\"":""; ?> >30</option>
   </select>
   <input type="submit" value="Guardar" />
  </form>
 </body>
</html>