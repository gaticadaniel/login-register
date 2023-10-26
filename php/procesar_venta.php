<!DOCTYPE html>
<html>
<head>
    <title>Resumen de Venta</title>
</head>
<body>
    <h2>Resumen de Venta</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_producto = $_POST["nombre_producto"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];
        $total = $precio * $cantidad;
        
        echo "Producto: $nombre_producto<br>";
        echo "Precio: $precio<br>";
        echo "Cantidad: $cantidad<br>";
        echo "Total: $total";
    }
    ?>
</body>
</html>