<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
<BODY bgcolor="#C0C0C0" link="black" vlink="black" alink="black">
	<?php
	include_once("controladorRutas.php");
	include_once("controladorComentarios.php");
	include_once("conexion.php");
	$u = new controladorRutas();
	$resul = $u->buscarRuta($_GET['comentar'])->fetch();
	$c = new controladorComentarios();
	$fecha = getdate();
	$fecha = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
	?>
<CENTER>

<TABLE border="0" align="center" cellspacing="3" cellpadding="3" width="760" bgcolor="green">
<TR>
	<TD><a href="index.php"><img src=senderismo.png width=240 height=70></></TD>
	<TH colspan="2" width="75%">&nbsp;
		<FONT size="6" color="black" face="arial, helvetica"><u>Rutas senderismo</u></FONT>&nbsp
	</TH>
</TR></TABLE><P>
<CENTER><P>
          </TR></TABLE><P><A NAME='ancla'></A><FONT color='green'><h2><u>COMENTAR RUTA</u></h2></FONT><FORM name='form9' method='post' action=""><TABLE BORDER='0' cellspacing='10' cellpadding='0' align='center' width='600'><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>T&iacute;tulo</FONT>
    		 	  </TD><TD><p name='titulo'><?= $resul["titulo"]; ?></p></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Descripci&oacute;n</FONT>
				</TD><TD><p name='descripcion'><?= $resul["descripcion"]; ?></p></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Desnivel (m)</FONT>
				</TD><TD><p name='desnivel'><?= $resul["desnivel"]; ?></p></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Distancia (Km)</FONT>
				</TD><TD><p name='distancia'><?= $resul["distancia"]; ?></p></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Dificultad</FONT>
				</TD><TD><p name='dificultad'><?php
				 if($resul["dificultad"] == 1){
					$resul["dificultad"] = "Fácil";
				}else if($resul["dificultad"] == 2){
					$resul["dificultad"] = "Media";
				}else if($resul["dificultad"] == 3){
					$resul["dificultad"] = "Difícil";
				}
				echo $resul["dificultad"];
				?></p></TD>

    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>NOTAS</FONT>
				</TD><TD><p name='notas'><?= $resul["notas"]; ?></p></TD>
		</BODY>
</HTML>


    		</TR></TABLE><TABLE BORDER='0' cellspacing='1' cellpadding='1' align='center' width='800'>
   	          <TR>
   	      	    <TH bgcolor='green'><FONT color='white'>Nombre</FONT></TH>
   	      	    <TH bgcolor='green'><FONT color='white'>Fecha</FONT></TH>
   	      	    <TH bgcolor='green'><FONT color='white'>Comentario</FONT></TH>   	      	
   	          </TR><FORM name='form9' method='post' action="index.php?operacion=add_comentario"><TR>
   		   <TD><input type='text' name='nombre' size='20' maxlength='50'></TD>
		   <td><?php echo $fecha?></td>
   		   <TD align=right><INPUT type='text' name='texto' size='75' maxlength='254'>
   		  		   <INPUT type='hidden' NAME='id' value = '214'>
			</TD> 
			<td>
			<INPUT TYPE='SUBMIT' NAME='pulsa' VALUE="Añadir">
			</td>
   	           </TR></FORM></TABLE><P>
				  <?php
	// si existen comentarios sobre la ruta, los mostramos
	if($c->buscarComentarios($_GET['comentar'])->rowCount() > 0){
		echo "<h1>Comentarios ya existentes</h1>";
		$comentarios = $c->buscarComentarios($_GET['comentar']);
		echo "<table id='comentarios' border = '1'>";
		echo "<tr><th>Usuario</th><th>Fecha</th><th>Comentario</th></tr>";
		while($fila = $comentarios->fetch(PDO::FETCH_ASSOC)){
			echo "<tr><td>".$fila['nombre']."</td><td>".$fila['fecha']."</td><td>".$fila['texto']."</td></tr>";
		}
		echo "</table>";
	}

	$com = new controladorComentarios();
	if(isset($_POST['pulsa'])){
		if($_POST['nombre'] == null || $_POST['texto'] == null){
			echo "No se han introducido todos los datos";
		}else{
			$fecha = getdate();
			$fecha = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
			$com->anadirComentario($_GET['comentar'],  $fecha);
			header("Location: index.php");
		}
	}
	?>
</BODY>
</HTML>

