<?php

include_once("connection.php");

$id = $_GET["id"];

$delete = "DELETE FROM champ WHERE id='$id'";

if(mysqli_query($conexion, $delete)){
    header('Location: 002campeones.php');
}
?>