<?php

if (!isset($_GET['token'])) {
  echo '<script>alert("Los sentimos, no se ha provisto un token")</script>';
  echo "<script>setTimeout(\"location.href = '/';\",100)</script>";
}
include_once 'db.php';
$token = $_GET['token'];
$sql = "SELECT id, full_name, tkn_expired FROM user_registration AS u WHERE u.token = '" . $token . "' LIMIT 1";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

$conn->close();
if (!$user) {
  echo '<script>alert("Los sentimos, el token provisto no es valido")</script>';
  echo "<script>setTimeout(\"location.href = '/';\",100)</script>";
  return;
}

if (date("Y-m-d H:i:s") > $user['tkn_expired']) {
  echo '<script>alert("Los sentimos, el token provisto a expirado")</script>';
  echo "<script>setTimeout(\"location.href = '/';\",100)</script>";
  return;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Omar Jojoa Chatbot" />
  <meta name="keywords" content="Omar Jojoa,chatbot,chatbot in php" />
  <meta name="robots" content="index, follow" />
  <title>Chatbot Omar Jojoa</title>

  <!-- Stylesheets
    ================================================= -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/ionicons.min.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />

  <!--Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body>

  <div class="container">
    <section class="row">
      <div class="col-12">
        <h1 class="text-capitalize">Hola <span class="text-dark"><?= $user['full_name'] ?></span></h1>
      </div>
      <div class="col-md-6">
        <form method="POST" action="update_password.php" class="card">
          <div class="card-header">
            <h2>Ingresa tu nueva contraseña</h2>
          </div>
          <div class="card-body">
            <div class=" form-group">
              <input name="password" class="form-control" placeholder="Ingresa tu nueva contraseña" type="password">
            </div>
            <div class="form-group">
              <input name="password2" class="form-control" placeholder="Repite tu contraseña" type="password">
            </div>
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <input type="hidden" name="token" value="<?= $token ?>">
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Guardar</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
  <!-- Scripts
    ================================================= -->
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.appear.min.js"></script>
  <script src="js/jquery.incremental-counter.js"></script>
  <script src="js/script.js"></script>

  <script type="text/javascript">
    function go_watch() {
      location.href = "https://www.youtube.com/watch?v=B_ZxRZs6B0M&feature=youtu.be";
    }

    function lettersOnly(input) {
      var regex = /[^a-z]/gi;
      input.value = input.value.replace(regex, "");
    }

    function digitsOnly(input) {
      var regex = /[^0-9]/g;
      input.value = input.value.replace(regex, "");
    }
  </script>
</body>

</html>