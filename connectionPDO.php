<?php
$dsn = 'mysql:dbname=lol;host=127.0.0.1';
$usuario = 'root';
$contrasena = '';

$conexion = new PDO($dsn, $usuario, $contrasena);

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Fallo la conexión: " . $e->getMessage();
}
