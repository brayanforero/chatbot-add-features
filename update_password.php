<?php

if (isset($_POST)) {
  $id = $_POST['id'];
  $pass = $_POST['password'];
  $pass2 = $_POST['password2'];
  $token = $_POST['token'];

  if (!$pass || !$pass2) {
    echo '<script>alert("No has provisto ninguna contraseña")</script>';
    echo "<script>setTimeout(\"location.href = '/recover_password.php?token=" . $token . "';\",100)</script>";
    exit;
  }
  if ($pass !== $pass2) {
    echo '<script>alert("Las contraseñas no coinciden")</script>';
    echo "<script>setTimeout(\"location.href = '/recover_password.php?token=" . $token . "';\",100)</script>";
    exit;
  }
  include_once 'db.php';
  $sql = "UPDATE user_registration SET password = '" . $pass . "' WHERE id = '" . $id . "' LIMIT 1";
  $result = $conn->query($sql);

  if (!$conn->affected_rows) {
    $conn->close();
    echo '<script>alert("No se pudo completar su operacion, intente más tarde")</script>';
    echo "<script>setTimeout(\"location.href = '/recover_password.php?token=" . $token . "';\",100)</script>";
    exit;
  }

  $sql = "UPDATE user_registration SET token = null, tkn_expired = null WHERE id = '" . $id . "' LIMIT 1";
  $result = $conn->query($sql);
  $conn->close();
  echo '<script>alert("Su contraseña a sido actualizada con exito")</script>';
  echo "<script>setTimeout(\"location.href = '/';\",100)</script>";
  exit;
}
