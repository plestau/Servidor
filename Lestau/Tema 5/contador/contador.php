<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de letras por archivo</title>
</head>
<body>
<?php
    $archivo = fopen("fichero.txt", "r");

    class CuentaLetras{
        private $archivo;
        private $letras;
        private $contador;

        public function __construct($archivo){
            $this->letras = array();
            $this->archivo = $archivo;
            $this->contador = 0;
        }

        public function addLetra($letra){
            if(!isset($this->letras[$letra])){
                $this->letras[$letra] = 1;
            }else{
                $this->letras[$letra]++;
            }
        }
        public function __toString()
        {
            $cadena = "";
            foreach ($this->letras as $key => $value) {
                $cadena .= $key . " = " . $value . "<br>";
            }
            return $cadena;
        }
    }
    //instanciamos la clase
    $cuentaLetras = new CuentaLetras($archivo);
    //leemos el archivo
    while(!feof($archivo)){
        $linea = fgets($archivo);
        //recorremos la linea
        for($i = 0; $i < strlen($linea); $i++){
            $cuentaLetras->addLetra($linea[$i]);
        }
    }
    //cerramos el archivo
    fclose($archivo);
    //mostramos el resultado
    echo $cuentaLetras;
    
?>
</body>
</html>