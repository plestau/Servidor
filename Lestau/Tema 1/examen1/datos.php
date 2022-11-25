<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 1</title>
</head>
<body>
<?php
    $usuarios = array("PepeElOreo" => array(
                                            "Usuario" => "PepeElOreo",
                                            "Contraseña" => "abcedario",
                                            "Nombre" => "Pablo Rafael",
                                            "Apellido1" => "Lestau",
                                            "Apellido2" => "Martín",
                                            "Fecha" => "2010-02-04"),
                        "Jezu" => array(
                                            "Usuario" => "Jezu",
                                            "Contraseña" => "holabuenas",
                                            "Nombre" => "Jesús Manuel",
                                            "Apellido1" => "Muñoz",
                                            "Apellido2" => "Cerezo",
                                            "Fecha" => "2010-03-01"),
                        "CarlitoKun" => array(
                                            "Usuario" => "CarlitoKun",
                                            "Contraseña" => "contraseña",
                                            "Nombre" => "Carlos",
                                            "Apellido1" => "Carlín",
                                            "Apellido2" => "Carlón",
                                            "Fecha" => "2009-05-05")
                        );

    $libros = array(1347589265987 => array(
                                            "Unidades" => 17,
                                            "Título" => "El silencio de los corderos",
                                            "Editorial" => "Sálvame",
                                            "Año" => 2013,
                                            "Autores" => array(
                                                "Nombre" => "Alfredo",
                                                "Apellido1" => "Pérez",
                                                "Apellido2" => "Alférez"
                                            )),
                    1785947584758 => array(
                                            "Unidades" => 4,
                                            "Título" => "El libro troll del rubius",
                                            "Editorial" => "Planeta",
                                            "Año" => 2015,
                                            "Autores" => array(
                                                "Nombre" => "Ruben",
                                                "Apellido1" => "Doblas",
                                                "Apellido2" => "Sánchez"
                                            )),
                    9876576565765 => array(
                                            "Unidades" => 20,
                                            "Título" => "Cocina conmigo",
                                            "Editorial" => "Cookers",
                                            "Año" => 2005,
                                            "Autores" => array(
                                                "Nombre" => "Carlos",
                                                "Apellido1" => "Padilla",
                                                "Apellido2" => "Pérez"
                                            )),
                    9834758690945 => array(
                                            "Unidades" => 10,
                                            "Título" => "La divina comedia",
                                            "Editorial" => "Planeta",
                                            "Año" => 2010,
                                            "Autores" => array(
                                                "Nombre" => "Platero",
                                                "Apellido1" => "Contreras",
                                                "Apellido2" => "Gutiérrez"
                                            )),
                                        );

    $prestamos = array(9834758690945 => array(
                                            "Usuario" => "Pepeeloreo",
                                            "Fecha_inicio" => "2022-10-10",
                                            "Fecha_fin" => "2022-11-10"),
                        7872947594854 =>array(
                                            "Usuario" => "Jezu",
                                            "Fecha_inicio" => "2022-02-02",
                                            "Fecha_fin" => "2022-07-02"),
                        9876576565765 => array(
                                            "Usuario" => "CarlitoKun",
                                            "Fecha_inicio" => "2022-05-07",
                                            "Fecha_fin" => "2022-08-07")
                                    );

    function login($usu, $pw, $usuarios){
        $usu = $_GET["Usuario"];
        $pw = $_GET["Contraseña"];
        if (isset($_GET["Enviar"])){
            for($x=0;$x<=count($usuarios);$x++){
                if (strlen($pw <= 0)){
                    echo "Error del sistema, la contraseña no puede estar vacía </br>";
                    break;
                }
                else{
                    if ($usu == $usuarios[$usu]["Usuario"] && $pw == $usuarios[$usu]["Contraseña"]){
                        echo "Usuario: ". $usuarios[$usu]["Usuario"] . "</br>";
                        echo "Nombre: ". $usuarios[$usu]["Nombre"] . "</br>";
                        echo "Apellidos: ". $usuarios[$usu]["Apellido1"];
                        echo $usuarios[$usu]["Apellido2"] . "</br>";
                        echo "Fecha de unión: ". $usuarios[$usu]["Fecha"] . "</br>";
                        return true;
                    }
                    if ($usu != $usuarios[$usu]["Usuario"] || $pw != $usuarios[$usu]["Contraseña"]){
                        return false;
                    }
                }
            }
        }
    }

    function escribeUsuario($usu, $usuarios){
        $usu = $_GET["Usuario"];
        if (isset($_GET["Enviar"])){
            for($x= 0; $x<=count($usuarios);$x++)
                if($_GET["Usuario"] != $usuarios[$usu]["Usuario"]){
                    echo "Error del sistema, el usuario no existe </br>";
                    break;
                }
                else{
                    $apellido1 = $usuarios[$usu]["Apellido1"];
                    $apellido2 = $usuarios[$usu]["Apellido2"];
                    $nombre = $usuarios[$usu]["Nombre"];
                    $fecha = $usuarios[$usu]["Fecha"];
                    echo "$apellido1 $apellido2". ", " . $nombre . "</br>";
                    echo "Está con nosotros desde el $fecha </br>";
                    break;
                }
            }
    }

    function escribePrestamos($usu, $iban, $prestamos, $usuarios){
        if ($_GET["Usuario"] != $usuarios[$usu]["Usuario"]){
            echo "Error del sistema, el usuario no existe </br>";
        }
        else{
            $retrasado = "";
            for($x= 0; $x<=count($usuarios);$x++){
                if ($usu == $prestamos[$iban]["Usuario"]){
                    if ($prestamos[$iban]["Fecha_fin"] > $prestamos[$iban]["Fecha_inicio"]){
                        $retrasado == "Sí";
                    }
                    else{
                        $retrasado = "no";
                        echo "<table border=1 bordercolor=black>";
                        echo "<tr>Préstamos realizados por $usu";
                        echo "<tr><th>ISBN</th><th>Título</th><th>Fecha de inicio</th><th>Fecha de fín</th><th>Retrasado</th></tr>";
                        echo "<tr><td>$prestamos[$iban]</td>";
                        echo "<td>".$prestamos."[$usu]</td>";
                        echo "<td>".$prestamos."[Fecha_inicio]</td>";
                        echo "<td>".$prestamos."[Fecha_fin]</td>";
                        echo "<td>".$retrasado."</td>";
                        echo "</tr></table>";
                    }
                }
            }
        }
    }
?>
</body>
</html>