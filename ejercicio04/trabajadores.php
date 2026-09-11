<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 04 - Buscador de trabajadores</title>
</head>
<body>
    <h1>Buscador de trabajadores</h1>

    <!-- Formulario con método GET, el código se envía en la URL -->
    <form action="trabajadores.php" method="GET">
        <label for="codigo">Código del trabajador:</label>
        <input type="text" id="codigo" name="codigo" placeholder="Ej: T001" required>
        <button type="submit">Buscar</button>
    </form>

    <br>

    <?php
    // Listado de trabajadores como arreglo asociativo (clave = código)
    $trabajadores = [
        "T001" => [
            "nombre" => "Ana Torres",
            "cargo"  => "Administrador",
            "sueldo" => 2500
        ],
        "T002" => [
            "nombre" => "Luis Pérez",
            "cargo"  => "Programador",
            "sueldo" => 3200
        ],
        "T003" => [
            "nombre" => "María Díaz",
            "cargo"  => "Diseñador",
            "sueldo" => 2800
        ]
    ];

    // Solo buscamos si el parámetro "codigo" fue enviado por GET
    if (isset($_GET["codigo"])) {
        $codigo = $_GET["codigo"];

        if (array_key_exists($codigo, $trabajadores)) {
            $trabajador = $trabajadores[$codigo];
            echo "<h2>Resultado de la búsqueda</h2>";
            echo "<p><strong>Código:</strong> $codigo</p>";
            echo "<p><strong>Nombre:</strong> " . $trabajador["nombre"] . "</p>";
            echo "<p><strong>Cargo:</strong> " . $trabajador["cargo"] . "</p>";
            echo "<p><strong>Sueldo:</strong> S/ " . number_format($trabajador["sueldo"], 2) . "</p>";
        } else {
            echo "<p>No se encontró al trabajador con código \"$codigo\".</p>";
        }
    }
    ?>
</body>
</html>
