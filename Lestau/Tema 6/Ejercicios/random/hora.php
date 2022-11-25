<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La hora con header</title>
</head>
<body>
<?php
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
//Mostrar la hora actual
echo "<h3>Hoy es " . date("D d M Y") . " y son las " . date("H:i:s") ."</h3>";
// refrescar la página cada 10 segundos accediendo siempre a la misma dirección
header("Refresh: 10; url=hora.php");
?>
</body>
</html>