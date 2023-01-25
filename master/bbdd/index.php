<?php
	include_once "usuario.php";
	$u = new usuario();
	
	//Mostrar datos
	$datos=isset($_GET["ver"])?$u->verUsuario($_GET["ver"]):false;
	
	//Actualizar o borrar
	if(isset($_GET["id"])){
		if($_GET["id"]!=""){
			echo "actualiza";
		}else{
			$u->inserta($_GET["nombre"],$_GET["rol"]);
		}
	}
	
	//borrado
	if(isset($_GET["borra"])) $u->borrarUsuario($_GET["borra"]);
		
?>
<html>
 <head>
  <title>Conectando usuario</title>
  <meta charset="UTF-8" />
 </head>
 <body>
  <h1>BBDD Usuarios</h1>
  <form action="" method="get">
   <input type="hidden" name="id" value="<?=$datos?$datos["clave"]:"";?>" />
   <label>Nombre de Usuario</label>
   <input type="text" name="nombre" value="<?=$datos?$datos["nombre"]:"";?>" /> <br />
   <label>Rol de Usuario</label>
   <input type="text" name="rol" value="<?=$datos?$datos["rol"]:"";?>" /> <br />
   <input type="submit" value="Nuevo" <?=$datos?"disabled":""?> />
   <input type="submit" value="Actualizar" <?=$datos?"":"disabled"?> />
  </form>
  <h3>Usuarios existentes</h3>
<?php
	$usuarios=$u->verUsuarios();
	echo "<ul>";
	foreach($usuarios as $usu)
		echo "<li><a href=\"?ver=".$usu["clave"]."\">".$usu["nombre"]." (".$usu["nombre"].") </a><b><a href=\"?borra=".$usu["clave"]."\"> [borrar]</a></b></li>";
	echo "</ul>";
?>
 </body>
</html>