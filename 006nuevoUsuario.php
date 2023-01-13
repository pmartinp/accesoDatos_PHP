<?php
include_once("connectionPDO.php");

$user = [$_POST['name'], $_POST['username'], $_POST['password'], $_POST['email']];

insertion($user, $conexion);

function insertion($user, $conexion){

    $sql = "INSERT INTO user(`name`, username, password, email)
                            VALUES(:name, :username, :password, :email)";

    $insert = $conexion->prepare($sql);
    $insert -> bindParam(":name", $user[0]);
    $insert -> bindParam(":username", $user[1]);
    $insert -> bindParam(":password", password_hash($user[2], PASSWORD_DEFAULT));
    $insert -> bindParam(":email", $user[3]);

    if($insert -> execute()){
        echo "Usuarios insertados correctamente";
        header('location: 004login.php');
    }
    else{
        echo "Error en la inserción de datos";
    }
}