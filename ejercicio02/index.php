<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 02 - Registro de notas de un estudiante</title>
</head>
<body>
    <h1>Registro de notas de un estudiante</h1>

    <form action="procesar.php" method="POST">
        <label for="estudiante">Nombre del estudiante:</label><br>
        <input type="text" id="estudiante" name="estudiante" required><br><br>

        <label for="nota1">Nota 1:</label><br>
        <input type="number" id="nota1" name="notas[]" min="0" max="20" step="0.1" required><br><br>

        <label for="nota2">Nota 2:</label><br>
        <input type="number" id="nota2" name="notas[]" min="0" max="20" step="0.1" required><br><br>

        <label for="nota3">Nota 3:</label><br>
        <input type="number" id="nota3" name="notas[]" min="0" max="20" step="0.1" required><br><br>

        <label for="nota4">Nota 4:</label><br>
        <input type="number" id="nota4" name="notas[]" min="0" max="20" step="0.1" required><br><br>

        <button type="submit">Calcular promedio</button>
    </form>
</body>
</html>
