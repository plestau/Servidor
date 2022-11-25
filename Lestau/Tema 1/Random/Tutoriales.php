<html>
    <head>
        <title>
            Probando
        </title>
        <meta charset="UTF-8" />
    </head>
    <body>
<?php
    $a = 100;
    $b = 1000;
    // Operador nave espacial
    if (($a <=> $b) == -1)
        echo "$a es menor que $b";
    elseif (($a <=> $b) == 0)
        echo "$a es igual a $b";
    elseif (($a <=> $b) == 1)
        echo "$a es mayor que $b";
    // Operador ternario
    $c = ($a>$b) ?$a:$b;
    echo "<br><br> El mayor es $c";
?>
    </body>
</html>