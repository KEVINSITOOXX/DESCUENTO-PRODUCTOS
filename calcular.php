<?php
    // Obtener los datos del formulario
    $nombre1 = $_POST['nombre1'];
    $precio1 = $_POST['precio1'];

    $nombre2 = $_POST['nombre2'];
    $precio2 = $_POST['precio2'];

    $nombre3 = $_POST['nombre3'];
    $precio3 = $_POST['precio3'];

    // Calcular la suma de los precios
    $subtotal = $precio1 + $precio2 + $precio3;

    // Aplicar el descuento del 16% (0.16)
    $descuento = $subtotal * 0.16;
    $total_a_pagar = $subtotal - $descuento;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Cálculo</title>
</head>
<body>
    <h2>Resultados</h2>

    <h3>Productos Comprados:</h3>
    <ul>
        <li><?php echo "Nombre: $nombre1, Precio: $precio1"; ?></li>
        <li><?php echo "Nombre: $nombre2, Precio: $precio2"; ?></li>
        <li><?php echo "Nombre: $nombre3, Precio: $precio3"; ?></li>
    </ul>

    <p>La suma total de los precios es: $<?php echo number_format($subtotal, 2); ?></p>
    <p>Descuento aplicado (16%): $<?php echo number_format($descuento, 2); ?></p>
    <h3>Total a Pagar: $<?php echo number_format($total_a_pagar, 2); ?></h3>

</body>
</html>
