<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01 - Resultado de la compra</title>
</head>
<body>
    <h1>Resultado de la compra</h1>

    <?php
    // Recuperamos los datos enviados por POST
    $cliente  = $_POST["cliente"];
    $producto = $_POST["producto"];
    $precio   = (float) $_POST["precio"];
    $cantidad = (int) $_POST["cantidad"];

    // Calculamos el subtotal
    $subtotal = $precio * $cantidad;

    // Determinamos el porcentaje de descuento según el subtotal
    if ($subtotal < 100) {
        $porcentajeDescuento = 0;
    } elseif ($subtotal >= 100 && $subtotal <= 299.99) {
        $porcentajeDescuento = 0.05;
    } elseif ($subtotal >= 300 && $subtotal <= 499.99) {
        $porcentajeDescuento = 0.10;
    } else {
        $porcentajeDescuento = 0.15;
    }

    // Calculamos el monto del descuento y el total a pagar
    $descuento = $subtotal * $porcentajeDescuento;
    $total = $subtotal - $descuento;
    ?>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Cliente</th>
            <td><?php echo $cliente; ?></td>
        </tr>
        <tr>
            <th>Producto</th>
            <td><?php echo $producto; ?></td>
        </tr>
        <tr>
            <th>Subtotal</th>
            <td>S/ <?php echo number_format($subtotal, 2); ?></td>
        </tr>
        <tr>
            <th>Descuento aplicado</th>
            <td><?php echo ($porcentajeDescuento * 100); ?>% (S/ <?php echo number_format($descuento, 2); ?>)</td>
        </tr>
        <tr>
            <th>Total a pagar</th>
            <td><strong>S/ <?php echo number_format($total, 2); ?></strong></td>
        </tr>
    </table>

    <br>
    <a href="index.php">Volver al formulario</a>
</body>
</html>
