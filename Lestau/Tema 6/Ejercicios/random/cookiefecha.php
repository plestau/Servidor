<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie fecha</title>
</head>
<body>
<?php
    if(isset($_COOKIE['fecha'])){
        echo "<p>La última vez que nos visitó fue el " . $_COOKIE['fecha'] . "</p>";
    }else{
        echo "<p>Esta es su primera visita</p>";
        setcookie("fecha", date("D d M Y") . " a las " . date("H:i:s"), time() + 60 * 60);
    }
?>
</body>
</html>