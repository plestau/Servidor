<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo asignaturas</title>
</head>
<body style=width:500px bgcolor=#00A9F8>
    <center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="get">
<?php
    include_once("datosCentro.php");
    $nombre = "";
    $duracion = "";
    $tipo = "";
    $practicas1 = "Prácticas 1";
    $titular1 = "Titular 1";
    $practicas2 = "Prácticas 2";
    $titular2 = "Titular 2";
    $practicas3 = "Prácticas 3";
    $titular3 = "Titular 3";

    if (isset($_GET["enviar"])){
        $codigo = $_GET["codigo"];
        foreach($datos as $clave => $valor){
            if ($codigo == $clave){
                $nombre = $datos[$codigo]["nombre"];
                $duracion = $datos[$codigo]["duracion"];
                $tipo = $datos[$codigo]["tipo"];
                switch ($codigo){
                    case($codigo == 1):

                    $titular1 = "Manolo";
                    $practicas1 = "Elia";
                    $titular2 = "Paco";
                    $practicas2 = "Paca";
                    $titular3 = "Alfredo";
                    $practicas3 = "Guillermo";
                    
                    case($codigo == 2):
                    $titular1 = "Walter";
                    $practicas1 = "Gabriela";
                    $titular2 = "Jessie";
                    $practicas2 = "Federico";
                    $titular3 = "Benito";
                    $practicas3 = "María";
                    
                    case($codigo == 3):
                    $titular1 = "Edward";
                    $practicas1 = "Ana";
                    $titular2 = "Alberto";
                    $practicas2 = "Gabriela";
                    $titular3 = "Ana";
                    $practicas3 = "Mariángeles";

                    case($codigo == 4):
                    $titular1 = "Manolo";
                    $practicas1 = "Manolo";
                    $titular2 = "Paco";
                    $practicas2 = "Paco";
                    $titular3 = "Alfredo";
                    $practicas3 = "Alfredo";

                    case($codigo == 5):
                    $titular1 = "Amelia";
                    $practicas1 = "Pablo";
                    $titular2 = "Jack";
                    $practicas2 = "Edward";
                    $titular3 = "Pedro";
                    $practicas3 = "Ana";
                }
            }
        }
    }

    else{
        $codigo = "";
        $titular = "Opción";
        $practicas = "Opción";
        $nombre = "";
        $duracion = "";
    }

    function nextAsig($codigo){
        $codigo = $_GET['codigo'];
        global $datos;
        $keys = array_keys($datos);
        $indice = array_search($codigo, $keys);
        $siguiente = $indice + 1;
        if ($siguiente > count($datos)-1)
        return $keys[0];
        else{
            return $keys[$siguiente];
        }
    }

    function lastAsig($codigo){
        $codigo = $_GET['codigo'];
        global $datos;
        $keys = array_keys($datos);
        $indice = array_search($codigo, $keys);
        $anterior = $indice - 1;
        if ($anterior < 0){
            return $keys[count($datos)-1];
        }
        else{
            return $keys[$anterior];
        }
    }

    $checked = "";
?>
        <h1>Consulta de asignaturas</h1>
        <label>
            <a>Buscar por código:</a> 
            <input name=codigo type=text/>&nbsp
            <input name=enviar type=submit value=Buscar>
        </label></br>
        <p style=background:white>
            <label><a>Código: </a><input type=text value=<?php echo $codigo ?>></label></br>
            <label><a>Nombre: </a><input type=text value=<?php echo $nombre ?>></label></br>
            <label><a>Duración: </a><input type=text value=<?php echo $duracion  ?>></label></br>
            <label><a>Tipo: </a>
            <?php
                echo "<input $checked type='radio' name='botonradio'>&nbsp; Troncal";
                echo "<input $checked type='radio' name='botonradio'>&nbsp; Obligatoria";
                echo "<input $checked type='radio' name='botonradio'>&nbsp; Optativa";
            ?>
            </label></br>
            <label><a>Profesores Titulares: </a>
                <select title=titulares name=menu multiple size="3">
                    <option name=titular1><?php echo $titular1;?></option>
                    <option name=titular2><?php echo $titular2;?></option>
                    <option name=titular3><?php echo $titular3;?></option>

                </select>
            </label>
            <label><a>Profesores de Prácticas: </a>
                <select title=practicas name=menu multiple size="3">
                    <option name=practicas1><?php echo $practicas1;?></option>
                    <option name=practicas2><?php echo $practicas2;?></option>
                    <option name=practicas3><?php echo $practicas3;?></option>
                </select>
            </label>
            <label>
                <input type="button" value="&lt;-Anterior" id="ant" name="anterior" onclick="javascript:document.location.href = './trabajo%20asignaturas.php?codigo=<?php $b=(isset($_GET['codigo']))?lastAsig($_GET['codigo']):'1'; echo $b;?>&enviar=Buscar'">
                <input type="button" value="Siguiente-&gt;" id="sig" name="siguiente" onclick="javascript:document.location.href = './trabajo%20asignaturas.php?codigo=<?php $b=(isset($_GET['codigo']))?nextAsig($_GET['codigo']):'1'; echo $b;?>&enviar=Buscar'">
            </label>
        </p>
    </form>
    </center>
</body>
</html>