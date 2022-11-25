<html>
 <head>
 </head>
 <body>
  <form action="" method="POST">
   <label>Usuario</label>
   <input type="text" name="usu" value="<?php echo isset($_POST["usu"])?$_POST["usu"]:""; ?>" />
   <br />
   <label>Contraseña</label>
   <input type="password" name="con" />
   <br />
   <input type="submit" value="Entrar" />
  </form>
<?php
   try{
	$usuarios=array(array("us" => "pepito",
						  "co" => "1234",
						  "Nombre" => "Pepillo",
						  "Apellidos" => "El de los Palotes"),
					array("us" => "juanito",
						  "co" => "1234",
						  "Nombre" => "Juan",
						  "Apellidos" => "Pérez López"),
					array("us" => "anita",
						  "co" => "1234",
						  "Nombre" => "Ana",
						  "Apellidos" => "Rodríguez Pérez"));
	if(isset($_POST["usu"])){
		$existe = false;
		$logueado = false;
		foreach($usuarios as $clave => $valor){
			if($valor["us"] == $_POST["usu"]){
				$existe = true;
				$logueado=($valor["co"] == $_POST["con"]?true:false);
				$posicion=$clave;
			}
		}
		if(!$existe){
			throw new Exception("El usuario <b>" . $_POST["usu"] . "</b> no existe");
		}elseif(!$logueado)
			throw new Exception("Contraseña incorrecta");
		echo "Hola <b>" . $usuarios[$posicion]["Nombre"] . " " . $usuarios[$posicion]["Apellidos"] . "</b>";
	}
   }catch(Exception $e){
	   echo "ERROR: " . $e->getMessage();
   }
?>
 </body>
</html>