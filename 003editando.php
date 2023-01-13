<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script defer src="js/bootstrap.bundle.js" type="text/javascript"></script>
</head>

<body>

    <?php
    include_once("connection.php");

    $id = $_GET["id"];

    if (isset($_POST["submit"])) {
      $update = "UPDATE champ SET name='$_POST[name]',
       rol='$_POST[rol]',
       difficulty='$_POST[difficulty]',
       description='$_POST[description]'
       WHERE id=$id";

       if(mysqli_query($conexion, $update)){
        header('Location: 002campeones.php');
       }
       else{
        echo "<h2 class='text-danger'>Fallo al actualizar el campeón</h2>";
       }
    }


    $consulta = "SELECT * FROM champ WHERE id=$id";
    $champ = mysqli_query($conexion, $consulta);

    foreach ($champ as $champ) {
    ?>

    <form class="container g-3 needs-validation mt-5" method="post" novalidate>
      <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Name</label>
        <input type="text" class="form-control" id="validationCustom01" name="name" value=<?php echo "$champ[name]";?> required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">Rol</label>
        <select
                  class="form-select"
                  aria-label="Default select example"
                  name="rol"
                >
                  <option <?php if($champ['rol']=="Tirador"){ echo "selected";}?> value="Tirador" selected>Tirador</option>
                  <option <?php if($champ['rol']=="Mago"){ echo "selected";}?> value="Mago">Mago</option>
                  <option <?php if($champ['rol']=="Luchador"){ echo "selected";}?> value="Luchador">Luchador</option>
                  <option <?php if($champ['rol']=="Asesino"){ echo "selected";}?> value="Asesino">Asesino</option>
                  <option <?php if($champ['rol']=="Soporte"){ echo "selected";}?> value="Soporte">Soporte</option>
                  <option <?php if($champ['rol']=="Tanque"){ echo "selected";}?> value="Tanque">Tanque</option>
                </select>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom03" class="form-label">Difficulty</label>
        <select
                  class="form-select"
                  aria-label="Default select example"
                  name="difficulty"
                >
                  <option <?php if($champ['difficulty']=="Baja"){ echo "selected";}?> value="Baja" selected>Baja</option>
                  <option <?php if($champ['difficulty']=="Moderada"){ echo "selected";}?> value="Moderada">Moderada</option>
                  <option <?php if($champ['difficulty']=="Alta"){ echo "selected";}?> value="Alta">Alta</option>
                </select>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="<?php echo "$champ[description]";}?>" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-12 d-flex justify-content-center">
        <button class="btn btn-primary mt-5" type="submit" name="submit">Guardar</button>
      </div>
    </form>

</body>

</html>