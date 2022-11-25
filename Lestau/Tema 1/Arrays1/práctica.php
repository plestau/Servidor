<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica array</title>
</head>
<body>
<?php
    $libro = array("El siglo de las luces" => array("autor" => "Alejo Carpentier", 
                                                                "datos" => array(0 => "12.50 Euros",
                                                                                     1 => "20 unidades")),
    "Sobre héroes y tumbas" => array("autor" => "Ernesto Sábato", 
                                                                "datos" => array(0 => "11 Euros",
                                                                                     1 => "5 unidades")),
    "El baile de la victoria" => array("autor" => "Antonio Skármeta", 
                                                                "datos" => array(0 => "15 Euros",
                                                                                     1 => "8 unidades")),
    "Rayuela" => array("autor" => "Julio Cortázar", 
                                                                "datos" => array(0 => "11.50 Euros",
                                                                                     1 => "12 unidades")),
    "Antes del fin" => array("autor" => "Ernesto Sábato", 
                                                                "datos" => array(0 => "13 Euros",
                                                                                     1 => "3 unidades")));

    echo "<ul>";
    foreach($libro as $key => $value){
    echo "<li>$key";
        foreach($value as $key2 => $value2)
        if ($key2 == "autor")
            echo "<li>$value2 </li>";
            elseif ($key2 == "datos"){
                echo "<ul>";
                foreach ($value2 as $key3 => $value3){
                    echo "<li>$value3</li>";
                }
                echo "</ul>";
            }
        }
?>
</body>
</html>