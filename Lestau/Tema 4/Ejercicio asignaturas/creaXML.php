<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$file = "datos.xml";
    function xml($file){
        if (file_exists("datos.xml")){
            $xml = simplexml_load_file($file);
        }else{
            $string = <<<XML
            <asignaturas>
            </asignaturas>
            XML;
            xml($string);
        }
        $n = $xml->count();
        $xml = new SimpleXMLElement($string);
        $xml->addChild("asignatura");
        $xml->asignatura->addChild("codigo", $_POST['codigo']);
        $xml->asignatura->addChild("nombre", $_POST['nombre']);
        $xml->asignatura->addChild("tipo", $_POST['tipo']);
        $xml->asignatura->addChild('profesores');
        if(isset($_POST['titDNI'])){
            $xml->asignatura->profesores->addChild("titulares");
            foreach($_POST['titDNI'] as $k => $v){
                $xml->asignatura->profesores->titulares->addChild('profesor');
                $xml->asignatura->profesores->titulares->profesor[$k]->addChild("DNI", $v);
                $xml->asignatura->profesores->titulares->profesor[$k]->addChild("nombre", $_POST['titNombre'][$k]);
                $xml->asignatura->profesores->titulares->profesor[$k]->addChild("apellidos", $_POST['titApellidos'][$k]);
            }
        }
        if(isset($_POST['pracDNI'])){
            $xml->asignatura->profesores->addChild("practicas");
            foreach($_POST['pracDNI'] as $k => $v){
                $xml->asignatura->profesores->practicas->addChild('profesor');
                $xml->asignatura->profesores->practicas->profesor[$k]->addChild("DNI", $v);
                $xml->asignatura->profesores->practicas->profesor[$k]->addChild("nombre", $_POST['pracNombre'][$k]);
                $xml->asignatura->profesores->practicas->profesor[$k]->addChild("apellidos", $_POST['pracApellidos'][$k]);
            }
        }
        $xml->asXML("datos.xml");
        header("Location: datos.xml");
    }
?>
</body>
</html>