<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array3</title>
</head>
<body>
<?php
    $personas = array("11111111A" => array("nombre" => "Pepillo", 
                                                                "telefonos" => array(0 => "232345624",
                                                                                     1 => "385936502",
                                                                                     2 => "999223345")),
    "22222222B" => array("nombre" => "Juana de Arco", 
                                                                "telefonos" => array(0 => "293345642",
                                                                                     1 => "929234564",
                                                                                     2 => "957685762")),
    "33333333C" => array("nombre" => "Miguel de Cervantes", 
                                                                "telefonos" => array(0 => "285769202",
                                                                                     1 => "299825672",
                                                                                     2 => "295025252")));

    echo "<ul>";
    foreach($personas as $key => $value){
    echo "<li>$key";
        foreach($value as $key2 => $value2)
        if ($key2 == "nombre")
            echo " $value2 </li>";
            elseif ($key2 == "telefonos"){
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