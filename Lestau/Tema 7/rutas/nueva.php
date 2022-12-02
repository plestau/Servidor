<HTML>
<HEAD><TITLE>Actividad 1 - Unidad 7 - Curso Iniciación de PHP 5 - Rutas Senderismo</TITLE>
</HEAD>

<BODY bgcolor="#C0C0C0" link="black" vlink="black" alink="black">
<CENTER>

<TABLE border="0" align="center" cellspacing="3" cellpadding="3" width="760" bgcolor="green">
<TR>
	<TD><a href="index.php"><img src=senderismo.png width=240 height=70></a></TD>
	<TH colspan="2" width="75%">&nbsp;
		<FONT size="6" color="black" face="arial, helvetica"><u>Rutas senderismo</u></FONT>&nbsp
	</TH>
</TR></TABLE><P>
<CENTER><P>
          </TR></TABLE><P><A NAME='ancla'></A><FONT color='green'><h2><u>ALTA DE NUEVA RUTA</u></h2></FONT><FORM name='form9' method='post' action=""><TABLE BORDER='0' cellspacing='10' cellpadding='0' align='center' width='600'><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>T&iacute;tulo</FONT>
    		 	  </TD><TD><input type='text' name='titulo' size='55' value = "" maxlength='55'></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Descripci&oacute;n</FONT>
    		 	  </TD><TD><input type='text' name='descripcion' size='120' value = "" maxlength='254'></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Desnivel (m)</FONT>
    		 	  </TD><TD><input type='text' name='desnivel' size='7' value = "" maxlength='8'></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Distancia (Km)</FONT>
    		 	  </TD><TD><input type='text' name='distancia' size='7' value = "" maxlength='8'></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Dificultad</FONT>
    		 	  </TD><TD>
						<SELECT NAME=dificultad>
							<OPTION VALUE='0'></OPTION>
          					<OPTION VALUE='1'>Baja</OPTION>
          					<OPTION VALUE='2'>Media</OPTION>
          					<OPTION VALUE='3'>Alta</OPTION>
            			</SELECT></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Notas</FONT>
    		 	  </TD><TD><textarea  rows=10 cols=50 name='notas'></textarea></TD>
    		</TR></TABLE><CENTER><INPUT type='hidden' value = '-1'><INPUT TYPE='SUBMIT' NAME='pulsa' VALUE="Alta ruta">
    			   <INPUT type='hidden' NAME='vendido' value = '0'></CENTER></FORM>

<?php
$cadena_conexion = "mysql:dbname=ejercicios;host=localhost";
$usuario = "root";
$clave = "";
// si se pulsa el botón cuyo name es pulsa, se añaden los datos a la base

if(isset($_POST['pulsa'])){
	if($_POST['titulo'] == null || $_POST['descripcion'] == null || $_POST['desnivel'] == null || $_POST['distancia'] == null || $_POST['dificultad'] == null || $_POST['notas'] == null || $_POST['desnivel'] != is_numeric($_POST['desnivel']) || $_POST['distancia'] != is_numeric($_POST['distancia']) || $_POST['dificultad'] != is_numeric($_POST['dificultad'])){
		echo "No se han introducido todos los datos";
	}else{
	// se crea la conexión a la base de datos
	$conexion = new PDO($cadena_conexion, $usuario, $clave);
	// se crea la consulta
	$sql = "insert into rutas (titulo, descripcion, desnivel, distancia, notas, dificultad) values ('".$_POST['titulo']."', '".$_POST['descripcion']."', '".$_POST['desnivel']."', '".$_POST['distancia']."', '".$_POST['notas']."', '".$_POST['dificultad']."')";
	// se ejecuta la consulta
	$conexion->exec($sql);
	// se cierra la conexión
	$conexion = null;
	// se redirige a la página principal
	header("Location: index.php");
	}
}
?>
</BODY>
</HTML>

