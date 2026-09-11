<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 05 - Bienvenida</title>
</head>
<body>
    <?php
    // Recibimos el nombre enviado por GET desde validar.php
    $nombre = $_GET["nombre"];
    ?>

    <h1>¡Bienvenido/a, <?php echo htmlspecialchars($nombre); ?>!</h1>
    <p>Has iniciado sesión correctamente.</p>

    <br>
    <a href="login.php">Cerrar sesión</a>
</body>
</html>
