<?php
include_once 'db.php';
include_once 'token.php';
if (isset($_POST) && isset($_POST['email'])) {
  $email = $_POST['email'];
  $sql = "SELECT id FROM user_registration WHERE email = '" . $email . "'";
  $result = $conn->query($sql);
  $id = $result->fetch_assoc()['id'];
  if (!$result->num_rows) {
    $conn->close();
    echo '<script>alert("Cuenta no encontrada")</script>';
    echo "<script>setTimeout(\"location.href = 'recover_account.php';\",100)</script>";
    return;
  }

  $token = generateToken($id);
  $date = date("Y-m-d H:i:s", strtotime("+1 hour"));
  $setToken = "UPDATE user_registration SET token = '" . $token . "', tkn_expired = '" . $date . "' WHERE id = " . $id;
  $update = $conn->query($setToken);
  if (!$conn->affected_rows) {
    echo '<script>alert("Solicitud fallida, intente más tarde")</script>';
    echo "<script>setTimeout(\"location.href = 'recover_account.php';\",100)</script>";
  }

  $conn->close();
  echo '<script>alert("Se ha enviado una contraseña de acceso a tu email")</script>';
  echo "<script>setTimeout(\"location.href = '/';\",100)</script>";
  exit;
}
