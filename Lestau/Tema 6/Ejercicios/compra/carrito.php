<?php
session_start();
?>
<?php
    $total = 0;
    echo "<h3>Carrito de compras</h3>";
    if(isset($_SESSION["carrito"])){
        echo "Items: ".count($_SESSION["carrito"]);
        foreach($_SESSION["carrito"] as $indice => $dato){
            echo "<hr>Producto: <strong>" . $indice . "</strong><br>";
            $total += $dato["cant"] * $dato["precio"];
            foreach($dato as $key => $value){
                echo "$key: $value <br>";
            }
            echo "<a href='carrito.php?item=$indice'>Eliminar producto</a><br>";
            echo "<a href='carrito.php?editar=$indice'>Actualizar cantidad</a>";
        }
        echo "<h3>El total de la compra actual es de $total";
        echo "<br><br><a href='carritocompras.php'>Volver</a> | <a href='carrito.php?vaciar=true'>Vaciar carrito</a>";

        
    }else{
        echo "<script>alert('El carrito está vacío');</script>";
        ?>
        <a href="carritoCompras.php">Volver</a>
        <?php
    }
    if(isset($_REQUEST["vaciar"])){
        session_destroy();
        header("Location: carrito.php");
    }
    if(isset($_REQUEST["item"])){
        $producto = $_REQUEST["item"];
        unset($_SESSION["carrito"][$producto]);
        echo "<script>alert('Se eliminó el producto: $producto');</script>";
        header("Location: carrito.php");
    }
    if(isset($_REQUEST["editar"])){
        $producto = $_REQUEST["editar"];
        ?>
        <form action="carrito.php" method="post">
            <input type="hidden" name="txtProducto" value="<?php echo $producto; ?>">
            <input type="number" name="cant" value="<?php echo $_SESSION["carrito"][$producto]["cant"]; ?>">
            <input type="submit" value="Actualizar" name="btnActualizar">
        </form>
        <?php
        if(isset($_REQUEST["btnActualizar"])){
            $producto = $_REQUEST["txtProducto"];
            $cantidad = $_REQUEST["cant"];
            $_SESSION["carrito"][$producto]["cant"] = $cantidad;
            
            header("Location: carrito.php");
        }
    }

?>