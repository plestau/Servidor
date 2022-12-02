<HTML>
<HEAD><TITLE>Actividad 1 - Unidad 7 - Curso Iniciación de PHP 5 - Rutas Senderismo</TITLE>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY bgcolor="#C0C0C0" link="black" vlink="black" alink="black">
<CENTER>

<TABLE border="0" align="center" cellspacing="3" cellpadding="3" width="760" bgcolor="green">
<TR>
	<TD><img src=senderismo.png width=240 height=70></TD>
	<TH colspan="2" width="75%">&nbsp;
		<FONT size="6" color="black" face="arial, helvetica"><u>Rutas senderismo</u></FONT>&nbsp
	</TH>
</TR></TABLE><P>


<CENTER><P>
     	  <TABLE border='0' width='600'>
     	  <TR>
     	     <TD valign=top align=CENTER colspan=2>
     	     <FORM name='form1' METHOD='POST' ACTION="index.php?operacion=buscar">
     	     	<FONT size ='-1'>Buscar por el campo <SELECT NAME='campo_busqueda'>
  		   	<OPTION  Value=titulo> T&iacute;tulo </OPTION>
  		   	<OPTION  Value=descripcion> Descripci&oacute;n </OPTION>
            <form action="index.php?operacion=buscar" method="post">
  		   	</SELECT> <P><INPUT TYPE='TEXT' NAME='lo_q_busco' value='' size='20'> <INPUT TYPE='SUBMIT' NAME='boton_buscar' VALUE='&iexcl;Buscar!'>
</form>
        </FONT>
             </FORM>
             </TD><TD align=center>
             <FORM name='form2' METHOD='POST' ACTION='nueva.php'>
                   <INPUT TYPE='SUBMIT' NAME='alta' VALUE="Nueva ruta">
             </FORM>
             <FORM name='form3' METHOD='POST' ACTION='index.php?operacion=listado'>
                   <INPUT TYPE='SUBMIT' NAME='listado' VALUE='Listado completo'>
             </FORM>             
             </TD>
</BODY>
</HTML>

<?php
include_once 'conexion.php';
include_once 'controladorRutas.php';
include_once 'controladorComentarios.php';

if(isset($_GET['operacion']) && $_GET['operacion'] == 'listado'){
    $u = new controladorRutas();
    $resul = $u->verRutas();
    echo "<br>";
    echo "<table border = '1'>";
    echo "<tr><th>ID</th><th>Titulo</th><th>Descripción</th><th>Desnivel</th><th>Distancia</th><th>Nota</th><th>Dificultad</th><th>Operaciones</th></tr>";
    while($fila = $resul->fetch(PDO::FETCH_ASSOC)){
        echo "<form action='index.php' method='get'>";
        echo "<tr><td>".$fila['id']."</td><td>".$fila['titulo']."</td><td>".$fila['descripcion']."</td><td>".$fila['desnivel']."</td><td>".$fila['distancia']."</td><td>".$fila['notas']."</td><td>".$fila['dificultad']."</td><td><a href=comentar.php?comentar=$fila[id]>Comentar</a><br><a href=editar.php?editar=$fila[id]>Editar</a><br><a href=index.php?borrar=$fila[id]>Borrar</a><br></tr>";
        echo "</form>";
    }
    echo "</table>";
}

// si pulso el boton con nombre boton_buscar, dependiendo del valor del campo_busqueda, me manda a buscar.php con el valor de lo_q_busco
if(isset($_GET['operacion']) && $_GET['operacion'] == 'buscar'){
    $u = new controladorRutas();
    $resul = $u->buscarRutas($_POST['campo_busqueda'], $_POST['lo_q_busco']);
    echo "<br>";
    echo "<table border = '1'>";
    echo "<tr><th>ID</th><th>Titulo</th><th>Descripción</th><th>Desnivel</th><th>Distancia</th><th>Nota</th><th>Dificultad</th><th>Operaciones</th></tr>";
    while($fila = $resul->fetch(PDO::FETCH_ASSOC)){
        echo "<form action='index.php' method='get'>";
        echo "<tr><td>".$fila['id']."</td><td>".$fila['titulo']."</td><td>".$fila['descripcion']."</td><td>".$fila['desnivel']."</td><td>".$fila['distancia']."</td><td>".$fila['notas']."</td><td>".$fila['dificultad']."</td><td><a href=comentar.php?comentar=$fila[id]>Comentar</a><br><a href=editar.php?editar=$fila[id]>Editar</a><br><a href=index.php?borrar=$fila[id]>Borrar</a><br></tr>";
        echo "</form>";
    }
    echo "</table>";
}


if(isset($_GET['borrar'])){
    $c = new controladorComentarios();
    $u = new controladorRutas();
    $u->borrarRuta($_GET['borrar']);
    $c->borrarComentarios($_GET['borrar']);
    header("Location: index.php?operacion=listado");
}

?>
</body>
</html>