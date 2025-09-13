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


