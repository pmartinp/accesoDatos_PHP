<?php
include_once("connectionPDO.php");

$user1 = ['Pepe','PepeEldeLepe','soyPepe','pepeLepe@gmail.com'];
$user2 = ['Dani','DaniGallo','Danilallo','losGallitos@gmail.com'];
$user3 = ['Andres','Pitumba','pitumba420','pitumba@gmail.com'];

insertion($user1, $conexion);
insertion($user2, $conexion);
insertion($user3, $conexion);

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
    }
    else{
        echo "Error en la inserción de datos";
    }
}