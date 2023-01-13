<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script defer src="js/bootstrap.bundle.js" type="text/javascript"></script>
</head>

<body>

    <table class='table table-primary'>
        <thead>
            <th>Id <a class="btn btn-primary" href="003campeones.php?order=asc&&column=id" role="button"><i class="bi bi-chevron-up"></i></a>
                <a class="btn btn-primary" href="003campeones.php?order=desc&&column=id" role="button"><i class="bi bi-chevron-down"></i></i></a>
            </th>
            <th>Name <a class="btn btn-primary" href="003campeones.php?order=asc&&column=name" role="button"><i class="bi bi-chevron-up"></i></a>
                <a class="btn btn-primary" href="003campeones.php?order=desc&&column=name" role="button"><i class="bi bi-chevron-down"></i></i></a>
            </th>
            <th>Rol <a class="btn btn-primary" href="003campeones.php?order=asc&&column=rol" role="button"><i class="bi bi-chevron-up"></i></a>
                <a class="btn btn-primary" href="003campeones.php?order=desc&&column=rol" role="button"><i class="bi bi-chevron-down"></i></i></a>
            </th>
            <th>Difficulty <a class="btn btn-primary" href="003campeones.php?order=asc&&column=difficulty" role="button"><i class="bi bi-chevron-up"></i></a>
                <a class="btn btn-primary" href="003campeones.php?order=desc&&column=difficulty" role="button"><i class="bi bi-chevron-down"></i></i></a>
            </th>
            <th>Description <a class="btn btn-primary" href="003campeones.php?order=asc&&column=description" role="button"><i class="bi bi-chevron-up"></i></a>
                <a class="btn btn-primary" href="003campeones.php?order=desc&&column=description" role="button"><i class="bi bi-chevron-down"></i></i></a>
            </th>
        </thead>
        <tbody>

            <?php

            include_once("connection.php");

            if (isset($_GET['column']) && isset($_GET['order'])) {
                // CONSULTA A LA BBDD
                $consulta = "SELECT * FROM champ ORDER BY CONCAT($_GET[column]) $_GET[order]";
            }else{
                $consulta = "SELECT * FROM champ";
            }

            $listaChamps = mysqli_query($conexion, $consulta);

            // COMPROBAMOS SI EL SERVIDOR NOS HA DEVUELTO RESULTADOS
            if ($listaChamps) {
                // MOSTRAMOS CADA RESULTADO DE LA CONSULTA
                foreach ($listaChamps as $champ) {
                    echo "<tr>";
                    echo "<td>$champ[id]</td>
                            <td>$champ[name]</td>
                            <td>$champ[rol]</td>
                            <td>$champ[difficulty]</td>
                            <td class='col-4'>$champ[description]</td>";
                    echo "</tr>";
                }
            }
            ?>

        </tbody>
    </table>

</body>

</html>