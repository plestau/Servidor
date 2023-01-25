<html>
 <head>
  <title>Inicio de sesión</title>
  <meta charset="UTF-8" />
 </head>
 <body>
<?php
	include_once "usuario.php";
	$u=new usuario();
	if(!$u->estaIniciada()){// Muestro el formulario de login
?>
	  <form action="" method="POST" style="background-color:skyblue; width:300px; padding:10px;">
	   <h1>Formulario de login</h1>
	   <label>Usuario</label>
	   <input type="text" name="us" style="margin-left:25px;" /><br />
	   <label>Contraseña</label>
	   <input type="password" name="co" style="margin-left:4px;" /><br />
	   <p>¿No tienes cuenta? <a href="registro.php">Regístrate</a></p>
	   <input type="submit" value="Iniciar sesión" style="float:right;" />
	   <span style="color:red;" id="error"></span>
	  </form>
<?php
	}
	if(isset($_POST["us"]) && isset($_POST["co"])){//Iniciando sesión
		if(!$u->logIn($_POST["us"],$_POST["co"])){
?>
			<script>
				document.getElementById('error').innerHTML="Usuario Incorrecto";
			</script>
<?php
		}
	}
	if($u->estaIniciada()){//Dirigimos al usuario a su espacio privado
		if($u->getTipoUs()=="administrador")
			header("Location: administrador.php");
		elseif($u->getTipoUs()=="gestor")
			header("Location: gestor.php");
		elseif($u->getTipoUs()=="cliente")
			header("Location: cliente.php");	
	}
?>
 </body>
</html>