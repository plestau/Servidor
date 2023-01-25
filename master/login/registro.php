<html>
 <head>
  <title>Inicio de sesión</title>
  <meta charset="UTF-8" />
  <script>
  <!--
	function envia(){
		var c1 = document.getElementById('co1');
		var c2 = document.getElementById('co2');
		if(c1.value!=c2.value){
			document.getElementById('error').innerHTML='Las contraseñas no coinciden';
			c2.focus();
		}else{
			formulario.submit();
		}
	}
  -->
  </script>
 </head>
 <body>
<?php
	include_once "usuario.php";
	$u=new usuario();
	if(!$u->estaIniciada()){// Muestro el formulario de login
		if(!isset($_POST["us"])){
?>
		  <form action="" method="POST" name="formulario">
		   <h1>Formulario de registro</h1>
		   <label>Usuario</label>
		   <input type="text" name="us" /><br />
		   <label>Contraseña</label>
		   <input type="password" name="co1" id="co1" /><br />
		   <label>Repita Contraseña</label>
		   <input type="password" name="co2" id="co2" /><br />
		   <label>Nombre completo</label>
		   <input type="text" name="no" /><br />
		   <select name="tipo">
			<option value="administrador">Administrador<option>
			<option value="gestor">Gestor<option>
			<option value="cliente">Cliente<option>
		   </select><br /><br />
		   <input type="button" value="Registrar" onclick="javascript:envia();" />
		   <input type="button" value="Cancelar" onclick="javascript:history.go(-1);" />
		   <span style="color:red;" id="error"></span>
		  </form>
<?php
		}else{
			//Creo el usuario
			$u=new usuario($_POST["us"],$_POST["co1"],$_POST["no"],$_POST["tipo"]);
			echo "<p>Registro finalizado.</p>";
			echo "<a href=\"index2.php\">Iniciar sesión</a>";
		}
	}else{
?>
		<p>ATENCIÓN: Hay una sesión iniciada. Para darse de alta, primero cierre sesión</p>
		<a href="cerrar.php">Cerrar sesión</a>
<?php
	}
?>
 </body>
</html>