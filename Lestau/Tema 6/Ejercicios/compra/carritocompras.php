<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
</head>
<body>
<?php
    session_start();
?>
    <div align="center">
        <h3>Vista de productos disponibles</h3>
        <a href="carrito.php"><img src="carro.png" width="50px"></a><br>
        <?php if(isset($_SESSION["carrito"]))echo "Items: ".count($_SESSION["carrito"]); // contador de items del carrito?>
        <input type="button" value="Ver carrito" onclick="location.href='carrito.php'">
        <hr>
        <table class="table table-dark" style="width: 700px">
        <thead>
            <th>Id</th>
            <th>Foto</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Cantidad</th>
        </thead>
        <tbody>
            <tr style="width:600px">
                <td style="width:50px">
                    <p>2839</p>
                </td>
                <td style="width:100px">
                    <img src="cocacola.png" width="100px" height="100px">
                </td>
                <td style="width:100px">
                    0.90$
                </td>
                <td style="width:300px">
                    Este es un producto que puede causar adicción, tomelo con precaución
                </td>
                <td style="width:300px">
                <form action="carritocompras.php" method="post">
                    <center>
                    <input type="hidden" name="txtProducto" value="Coca Cola">
                    <input type="number" name="cant" value="1" style="width: 50px"><br>
                    <input type="hidden" name="txtPrecio" value="0.75">
                    <input type="submit" value="Agregar" name="btnAgregar">
                    </center>
                </form>
                </td>
            </tr>
            <tr style="width:600px">
                <td style="width:50px">
                    <p>2819</p>
                </td>
                <td style="width:100px">
                    <img src="sopa.png" width="100px" height="100px">
                </td>
                <td style="width:100px">
                    0.90$
                </td>
                <td style="width:500px">
                    Ricas sopas de ave
                </td>
                <td style="width:300px">
                <form action="carritocompras.php" method="post">
                    <center>
                    <input type="hidden" name="txtProducto" value="Sopa">
                    <input type="number" name="cant" value="1" style="width: 50px"><br>
                    <input type="hidden" name="txtPrecio" value="0.90">
                    <input type="submit" value="Agregar" name="btnAgregar">
                    </center>
                </form>
                </td>
            </tr>
            <tr style="width:600px">
                <td style="width:50px">
                    <p>7777</p>
                </td>
                <td style="width:100px">
                    <img src="pez.png" width="100px" height="100px">
                </td>
                <td style="width:100px">
                    2.70$
                </td>
                <td style="width:300px">
                    Caramelos pez con el dispensador de tus personajes favoritos
                </td>
                <td style="width:300px">
                <form action="carritocompras.php" method="post">
                    <center>
                    <input type="hidden" name="txtProducto" value="caramelos pez">
                    <input type="number" name="cant" value="1" style="width: 50px"><br>
                    <input type="hidden" name="txtPrecio" value="2.7">
                    <input type="submit" value="Agregar" name="btnAgregar">
                    </center>
                </form>
                </td>
            </tr>
            <tr style="width:600px">
                <td style="width:50px">
                    <p>0001</p>
                </td>
                <td style="width:100px">
                    <img src="manzana.png" width="100px" height="100px">
                </td>
                <td style="width:100px">
                    0.30$
                </td>
                <td style="width:300px">
                    Manzanita clásica
                </td>
                <td style="width:300px">
                <form action="carritocompras.php" method="post">
                    <center>
                    <input type="hidden" name="txtProducto" value="manzana">
                    <input type="number" name="cant" value="1" style="width: 50px"><br>
                    <input type="hidden" name="txtPrecio" value="0.30">
                    <input type="submit" value="Agregar" name="btnAgregar">
                    </center>
                </form>
                </td>
            </tr>
            <tr style="width:600px">
                <td style="width:50px">
                    <p>0002</p>
                </td>
                <td style="width:100px">
                    <img src="pera.png" width="100px" height="100px">
                </td>
                <td style="width:100px">
                    0.30$
                </td>
                <td style="width:300px">
                    Rica pera clásica
                </td>
                <td style="width:300px">
                <form action="carritocompras.php" method="post">
                    <center>
                    <input type="hidden" name="txtProducto" value="pera">
                    <input type="number" name="cant" value="1" style="width: 50px"><br>
                    <input type="hidden" name="txtPrecio" value="0.30">
                    <input type="submit" value="Agregar" name="btnAgregar">
                    </center>
                </form>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
<?php
    if(isset($_REQUEST["btnAgregar"])){
        $producto = $_POST["txtProducto"];
        $cantidad = $_POST["cant"];
        $precio = $_POST["txtPrecio"];

        if(isset($_SESSION["carrito"][$producto]["cant"])){
            $_SESSION["carrito"][$producto]["cant"] += $cantidad;
        }else{
            $_SESSION["carrito"][$producto]["cant"] = $cantidad;

        }
        $_SESSION["carrito"][$producto]["precio"] = $precio;

        if($cantidad <=0){
            echo "<script>alert('No se puede agregar una cantidad menor o igual a 0. Se ha eliminado el producto de la lista');</script>";
            unset($_SESSION["carrito"][$_REQUEST["txtProducto"]]);
            header("Location: carritocompras.php");
        }else{
            echo "<script>alert('Se añadieron al carrito $cantidad $producto(s)');</script>";
        }
    }
?>
</body>
</html>