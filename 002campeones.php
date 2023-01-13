<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script defer src="js/bootstrap.bundle.js" type="text/javascript"></script>
</head>

<body>

    <?php

    include_once("connection.php");

    // CONSULTA A LA BBDD
    $consulta = "SELECT * FROM champ";
    $listaChamps = mysqli_query($conexion, $consulta);

    // COMPROBAMOS SI EL SERVIDOR NOS HA DEVUELTO RESULTADOS
    if ($listaChamps) {

        // MOSTRAMOS CADA RESULTADO DE LA CONSULTA
        foreach ($listaChamps as $champ) {
            echo "<ul>
                    <li>$champ[name]</li>
                    <li>$champ[rol]</li>
                    <li>$champ[difficulty]</li>
                    <li>$champ[description]</li>
                    </ul>
            ";

            echo "<a href='003editando.php?id=$champ[id]' class='btn btn-primary'>Editar</a>";
            echo "<button data-bs-toggle='modal' data-bs-target='#exampleModal$champ[id]' class='btn btn-danger' value'$champ[name]'>Borrar</button>";
            echo "<br>";

            //MODAL
            echo "
            <div class='modal fade' id='exampleModal$champ[id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h1 class='modal-title fs-5' id='exampleModalLabel'>$champ[name]</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            ¿Seguro que quieres borrar al campeón seleccionado?
                        </div>
                        <div class='modal-footer'>
                            <a href='delete.php?id=$champ[id]'?><button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Accept</button></a>
                            <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                        </div>
                    </div>
                </div>
            </div>";
        }
    }
    ?>

</body>

</html>