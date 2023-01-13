<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script defer src="js/bootstrap.bundle.js" type="text/javascript"></script>
</head>
<body>
    <form class="container g-3 needs-validation mt-5 w-50" action="006nuevoUsuario.php" method="post">
      <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Name</label>
        <input type="text" class="form-control" id="validationCustom01" name="name" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustomUsername" class="form-label">Username</label>
        <div class="input-group">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" class="form-control" id="validationCustomUsername" name="username" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">Password</label>
        <input type="password" class="form-control" id="validationCustom02" name="password" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom03" class="form-label">Email</label>
        <input type="email" class="form-control" id="validationCustom03" name="email" required>
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <div class="col-12 justify-content-center d-grid mt-3">
        <button class="btn btn-primary" type="submit">Register</button>
      </div>
    </form>
</body>
</html>