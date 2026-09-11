<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01 - Calculadora de compra con descuento</title>
</head>
<body>
    <h1>Calculadora de compra con descuento</h1>

    <form action="procesar.php" method="POST">
        <label for="cliente">Nombre del cliente:</label><br>
        <input type="text" id="cliente" name="cliente" required><br><br>

        <label for="producto">Nombre del producto:</label><br>
        <input type="text" id="producto" name="producto" required><br><br>

        <label for="precio">Precio del producto (S/):</label><br>
        <input type="number" id="precio" name="precio" step="0.01" min="0" required><br><br>

        <label for="cantidad">Cantidad comprada:</label><br>
        <input type="number" id="cantidad" name="cantidad" min="1" required><br><br>

        <button type="submit">Calcular total</button>
    </form>
</body>
</html>
