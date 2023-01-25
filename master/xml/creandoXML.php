<html>
 <head>
  <title>Uso SimpleXML</title>
  <meta charset="UTF-8" />
  <script language="javascript">
  <!--
	function addProfe(tipo){
		//Creamos tres objetos option para los select DNI, Nombre y Apellidos
		var optDNI = document.createElement('option');
		var optNombre = document.createElement('option');
		var optApellidos = document.createElement('option');
		if(tipo=="titular"){
			//Referenciamos a los tres select de los profes titulares
			var selectDNI=document.getElementById('titDNI');
			var selectNombre=document.getElementById('titNombre');
			var selectApellidos=document.getElementById('titApellidos');
			//Referenciamos a los tres cuadros de texto del profesor titular
			var textDNI=document.getElementById('dniT');
			var textNombre=document.getElementById('nombreT');
			var textApellidos=document.getElementById('apellidosT');
		}
		if(tipo=="practicas"){
			//Referenciamos a los tres select de los profes de prácticas
			var selectDNI=document.getElementById('pracDNI');
			var selectNombre=document.getElementById('pracNombre');
			var selectApellidos=document.getElementById('pracApellidos');
			//Referenciamos a los tres cuadros de texto del profesor de prácticas
			var textDNI=document.getElementById('dniP');
			var textNombre=document.getElementById('nombreP');
			var textApellidos=document.getElementById('apellidosP');
		}
		if(textDNI.value.trim() == '' || textNombre.value.trim() == '' || textApellidos.value.trim() == ''){
			alert('Por favor, introduce un DNI, nombre y apellidos del profesor');
		}else{
			//Damos los valores al option DNI (value y etiqueta)
			optDNI.value = textDNI.value;
			optDNI.innerHTML = textDNI.value;
			//Damos los valores al option Nombre (value y etiqueta)			
			optNombre.value = textNombre.value;
			optNombre.innerHTML = textNombre.value;
			//Damos los valores al option Apellidos (value y etiqueta)
			optApellidos.value = textApellidos.value;
			optApellidos.innerHTML = textApellidos.value;
			//Añadimos cada option al select correspondiente
			selectDNI.appendChild(optDNI);
			selectNombre.appendChild(optNombre);
			selectApellidos.appendChild(optApellidos);
			//Borramos el contenido de los campos de texto
			textDNI.value='';
			textNombre.value='';
			textApellidos.value='';
		}
	}
	
	function envia(){
		var f=document.getElementById('formulario');
		var codigo=document.getElementById('codigo');
		var nombre=document.getElementById('nombre');
		var duracion=document.getElementById('duracion');
		if(codigo.value.trim() == '' || nombre.value.trim() == '' || duracion.value.trim() == ''){
			alert('Por favor, introduce un código, nombre y duración de la asignatura');
		}else{
			var selectDNIT=document.getElementById('titDNI');
			var selectNombreT=document.getElementById('titNombre');
			var selectApellidosT=document.getElementById('titApellidos');
			var selectDNIP=document.getElementById('pracDNI');
			var selectNombreP=document.getElementById('pracNombre');
			var selectApellidosP=document.getElementById('pracApellidos');
			for(i=0;i<selectDNIT.length;i++){
				selectDNIT.options[i].selected=true;
				selectNombreT.options[i].selected=true;
				selectApellidosT.options[i].selected=true;
			}
			for(i=0;i<selectDNIP.length;i++){
				selectDNIP.options[i].selected=true;
				selectNombreP.options[i].selected=true;
				selectApellidosP.options[i].selected=true;
			}
			f.submit();
		}
	}
  -->
  </script>
  <style>
	select {
		width: 200px;
		height: 100px;
	}
	label {
		font-weight: bold;
	}
	.etiqueta {
		margin: 0 170px 0 0;
	}
	.texto {
		width: 200px;
	}
  </style>
 </head>
 <body>
  <h1>Creando un XML de asignaturas</h1>
  <form action="creaXML.php" method="POST" id="formulario">
	<label>Código:</label>
	<input type="text" name="codigo" id="codigo" /><br />
	<label>Nombre:</label>
	<input type="text" name="nombre" id="nombre" /><br />
	<label>Duración:</label>
	<input type="text" name="duracion" id="duracion" /><br />
	<label>Tipo de Asignatura:</label>
	<input type="radio" name="tipo" value="Troncal" checked="checked" />Troncal
	<input type="radio" name="tipo" value="Obligatoria" />Obligatoria
	<input type="radio" name="tipo" value="Optativa" />Optativa<br />
	<h3>Profesores Titulares:</h3>
	<label class="etiqueta">DNI:</label>
	<label class="etiqueta">Nombre:</label>
	<label class="etiqueta">Apellidos:</label>
	<br />
	<input class="texto" type="text" name="dniT" id="dniT" />
	<input class="texto" type="text" name="nombreT" id="nombreT" />
	<input class="texto" type="text" name="apellidosT" id="apellidosT" />
	<input type="button" onclick="addProfe('titular');" value="Añadir"/><br />
	<select multiple="multiple" name="titDNI[]" id="titDNI">
	</select>
	<select multiple="multiple" name="titNombre[]" id="titNombre">
	</select>
	<select multiple="multiple" name="titApellidos[]" id="titApellidos">
	</select>
	<h3>Profesores de Prácticas:</h3>
	<label class="etiqueta">DNI:</label>
	<label class="etiqueta">Nombre:</label>
	<label class="etiqueta">Apellidos:</label>
	<br />
	<input class="texto" type="text" name="dniP" id="dniP" />
	<input class="texto" type="text" name="nombreP" id="nombreP" />
	<input class="texto" type="text" name="apellidosP" id="apellidosP" />
	<input type="button" onclick="addProfe('practicas');" value="Añadir"/><br />
	<select multiple="multiple" name="pracDNI[]" id="pracDNI">
	</select>
	<select multiple="multiple" name="pracNombre[]" id="pracNombre">
	</select>
	<select multiple="multiple" name="pracApellidos[]" id="pracApellidos">
	</select>
	<br />
	<input type="button" value="Crear XML" onclick="envia()" />
  </form>
 </body>
</html>
