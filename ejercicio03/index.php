<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 03 - Catálogo de productos</title>
</head>
<body>
    <h1>Catálogo de productos</h1>

    <?php
    // Arreglo multidimensional con los productos de la tienda
    $productos = [
        ["nombre" => "Laptop",  "precio" => 2500, "stock" => 5],
        ["nombre" => "Mouse",   "precio" => 50,   "stock" => 10],
        ["nombre" => "Teclado", "precio" => 120,  "stock" => 0],
        ["nombre" => "Monitor", "precio" => 800,  "stock" => 3]
    ];

    // Acumulador para el reto adicional: valor total del inventario disponible
    $valorInventario = 0;
    ?>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Estado</th>
        </tr>
        <?php foreach ($productos as $producto): ?>
            <?php
            // El estado se calcula, no se almacena en el arreglo
            if ($producto["stock"] > 0) {
                $estado = "Disponible";
                // Solo sumamos al inventario disponible si hay stock
                $valorInventario += $producto["precio"] * $producto["stock"];
            } else {
                $estado = "Agotado";
            }
            ?>
            <tr>
                <td><?php echo $producto["nombre"]; ?></td>
                <td>S/ <?php echo number_format($producto["precio"], 2); ?></td>
                <td><?php echo $producto["stock"]; ?></td>
                <td><?php echo $estado; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <p><strong>Reto adicional</strong> - Valor total del inventario disponible: 
        S/ <?php echo number_format($valorInventario, 2); ?>
    </p>
</body>
</html>
