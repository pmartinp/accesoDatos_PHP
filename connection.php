<?php
// "SERVIDOR", "USUARIO", "CONTRASEÑA", "BASE DE DATOS"
$conexion = mysqli_connect("localhost", "root", "", "lol");

// COMPROBAMOS LA CONEXIÓN
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
