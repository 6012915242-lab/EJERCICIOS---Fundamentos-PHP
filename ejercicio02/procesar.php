<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 02 - Resultado académico</title>
</head>
<body>
    <h1>Resultado académico</h1>

    <?php
    // Recuperamos el nombre y el arreglo de notas enviado por POST
    $estudiante = $_POST["estudiante"];
    $notas = $_POST["notas"];

    // Acumulador para sumar las notas
    $suma = 0;

    foreach ($notas as $nota) {
        $suma += (float) $nota;
    }

    // Calculamos el promedio
    $promedio = $suma / count($notas);

    // Determinamos la situación académica según el promedio
    if ($promedio < 11) {
        $situacion = "Desaprobado";
    } elseif ($promedio >= 11 && $promedio <= 13) {
        $situacion = "Regular";
    } elseif ($promedio >= 14 && $promedio <= 17) {
        $situacion = "Bueno";
    } else {
        $situacion = "Excelente";
    }
    ?>

    <p><strong>Estudiante:</strong> <?php echo $estudiante; ?></p>

    <p><strong>Notas ingresadas:</strong></p>
    <ul>
        <?php foreach ($notas as $indice => $nota): ?>
            <li>Nota <?php echo $indice + 1; ?>: <?php echo $nota; ?></li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Promedio:</strong> <?php echo number_format($promedio, 2); ?></p>
    <p><strong>Situación académica:</strong> <?php echo $situacion; ?></p>

    <br>
    <a href="index.php">Volver al formulario</a>
</body>
</html>
