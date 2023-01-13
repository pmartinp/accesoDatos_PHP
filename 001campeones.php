<?php

include_once("connection.php");

// CONSULTA A LA BBDD
$consulta = "SELECT * FROM champ";
$listaChamps = mysqli_query($conexion, $consulta);

// COMPROBAMOS SI EL SERVIDOR NOS HA DEVUELTO RESULTADOS
if($listaChamps){

    // MOSTRAMOS CADA RESULTADO DE LA CONSULTA
    foreach ($listaChamps as $champ) {
        echo "$champ[id] $champ[name] <br>";
    }
}