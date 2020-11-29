<?php
include_once 'db.php';
include_once 'token.php';
include_once 'mail.php';
if (isset($_POST) && isset($_POST['email'])) {
  $email = $_POST['email'];
  $sql = "SELECT id, full_name FROM user_registration WHERE email = '" . $email . "'";
  $result = $conn->query($sql);
  $user = $result->fetch_assoc();

  if (!$result->num_rows) {
    $conn->close();
    echo '<script>alert("Cuenta no encontrada")</script>';
    echo "<script>setTimeout(\"location.href = 'recover_account.php';\",100)</script>";
    return;
  }

  $token = generateToken($user['id']);
  $date = date("Y-m-d H:i:s", strtotime("+12 hour"));
  $setToken = "UPDATE user_registration SET token = '" . $token . "', tkn_expired = '" . $date . "' WHERE id = " . $user['id'];
  $update = $conn->query($setToken);
  if (!$conn->affected_rows) {
    echo '<script>alert("Solicitud fallida, intente más tarde")</script>';
    echo "<script>setTimeout(\"location.href = 'recover_account.php';\",100)</script>";
  }

  $conn->close();
  sendEmail($email, $token, $user['full_name']);
  exit;
}
