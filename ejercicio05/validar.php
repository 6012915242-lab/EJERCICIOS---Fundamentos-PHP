<?php
// Arreglo de usuarios registrados (simulando una base de datos)
$usuarios = [
    [
        "correo" => "admin@gmail.com",
        "clave"  => "123456",
        "nombre" => "Administrador"
    ],
    [
        "correo" => "juan@gmail.com",
        "clave"  => "abc123",
        "nombre" => "Juan Pérez"
    ],
    [
        "correo" => "maria@gmail.com",
        "clave"  => "maria123",
        "nombre" => "María López"
    ]
];

/**
 * Recorre el arreglo de usuarios y busca uno cuyo correo y clave coincidan.
 * Retorna el nombre del usuario si las credenciales son correctas,
 * o false si no se encuentra ninguna coincidencia.
 */
function buscarUsuario($usuarios, $correo, $clave)
{
    foreach ($usuarios as $usuario) {
        if ($usuario["correo"] === $correo && $usuario["clave"] === $clave) {
            return $usuario["nombre"];
        }
    }
    return false;
}

// Recuperamos los datos enviados por POST desde login.php
$correo = $_POST["correo"];
$clave  = $_POST["clave"];

// Llamamos a la función para validar las credenciales
$nombreEncontrado = buscarUsuario($usuarios, $correo, $clave);

if ($nombreEncontrado !== false) {
    // Credenciales correctas: redirigimos a bienvenida.php enviando el nombre por GET
    header("Location: bienvenida.php?nombre=" . urlencode($nombreEncontrado));
    exit;
} else {
    // Credenciales incorrectas: redirigimos de vuelta al login con error=1
    header("Location: login.php?error=1");
    exit;
}
