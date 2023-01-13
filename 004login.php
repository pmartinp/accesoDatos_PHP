<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script defer src="js/bootstrap.bundle.js" type="text/javascript"></script>
</head>
<body>
    <?php
    include_once("connectionPDO.php");

        if (isset($_POST["submit"])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM user WHERE username = ?";

            $query = $conexion -> prepare($sql);
            $query->bindParam(1, $username);
            $query -> execute();

            $user = $query->fetch();
      
             if($user && password_verify($password, $user['password'])){
              header('Location: 003campeones.php');
             }
             else{
                echo "<h3 class='text-danger text-center'>Wrong user or password</h3>";
             }
          }

    ?>
    <form class="container g-3 needs-validation mt-5 w-25" method="post" novalidate>
      <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Username</label>
        <input type="text" class="form-control" id="validationCustom01" name="username" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">Password</label>
        <input type="password" class="form-control" id="validationCustom02" name="password" required>
        <div class="valid-feedback">
          Looks good!
        </div>

      <div class="col-12 justify-content-center d-grid mt-3">
        <button class="btn btn-primary" type="submit" name="submit">Log in</button>
      </div>
    </form>
    <?php
    ?>
</body>
</html>