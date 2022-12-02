<HTML>
<BODY bgcolor="#C0C0C0" link="black" vlink="black" alink="black">
	<?php
	include_once("controladorRutas.php");
	include_once("conexion.php");
	$u = new controladorRutas();
	$resul = $u->buscarRuta($_GET['editar'])->fetch();
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
          </TR></TABLE><P><A NAME='ancla'></A><FONT color='green'><h2><u>MODIFICAR RUTA</u></h2></FONT><FORM name='form9' method='post' action=""><TABLE BORDER='0' cellspacing='10' cellpadding='0' align='center' width='600'><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>T&iacute;tulo</FONT>
    		 	  </TD><TD><input type='text' name='titulo' size='55' value = "<?= $resul["titulo"]; ?>" maxlength='55'></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Descripci&oacute;n</FONT>
    		 	  </TD><TD><input type='text' name='descripcion' size='120' value = "<?= $resul["descripcion"]; ?>" maxlength='254'></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Desnivel (m)</FONT>
    		 	  </TD><TD><input type='text' name='desnivel' size='7' value = "<?= $resul['desnivel'] ?>" maxlength='8'></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Distancia (Km)</FONT>
    		 	  </TD><TD><input type='text' name='distancia' size='7' value = "<?= $resul['distancia'] ?>" maxlength='8'></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>Dificultad</FONT>
    		 	  </TD><TD>
						<SELECT NAME=dificultad>
							<OPTION VALUE='0'>Selecciona opción</OPTION>
          					<OPTION VALUE='1' <?= $resul["dificultad"]=="1"?"selected":""; ?>>Baja</OPTION>
          					<OPTION VALUE='2' <?= $resul["dificultad"]=="2"?"selected":""; ?>>Media</OPTION>
          					<OPTION VALUE='3' <?= $resul["dificultad"]=="3"?"selected":""; ?>>Alta</OPTION>
            			</SELECT></TD>
    		</TR><TR><TD bgcolor='green' align=center width=140>
    			<FONT color='white'>NOTAS</FONT>
    		 	  </TD><TD><textarea rows=10 cols=50 name='notas' placeholder="<?= $resul["notas"] ?>"></textarea></TD>
    		</TR></TABLE><CENTER><INPUT type='hidden' NAME='id' value = '215'><INPUT TYPE='SUBMIT' NAME='pulsa' VALUE="Modificar ruta"></CENTER></FORM>
<?php
if(isset($_POST['pulsa'])){
	if($_POST['titulo'] == null || $_POST['descripcion'] == null || $_POST['desnivel'] == null || $_POST['distancia'] == null || $_POST['dificultad'] == null || $_POST['notas'] == null){
		echo "No se han introducido todos los datos";
	}else{
		$dato = array( $_POST['titulo'], $_POST['descripcion'], $_POST['desnivel'], $_POST['distancia'], $_POST['dificultad'], $_POST['notas']);
		$u->modificaRutas($_GET['editar'], $dato);
		header("Location: index.php");
	}
}
?>
		</BODY>
</HTML>

