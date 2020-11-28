<?php
include_once 'db.php';
if (isset($_POST) && isset($_POST['email']) ) {
  $email = $_POST['email'];
  $newPassword = "";
  $sql = "SELECT id FROM user_registration WHERE email = '".$email."'";
  $result = $conn->query($sql);
  $id = $result->fetch_assoc()['id'];
  if (!$result->num_rows) {
    $conn->close();
    echo '<script>alert("Cuenta no encontrada")</script>';
    echo "<script>setTimeout(\"location.href = 'recover_account.php';\",100)</script>";
    return;
  }
  
  for ($i=0; $i < 8; $i++) { 
    $newPassword .= rand(0, 9);
  }

  $setPass = "UPDATE user_registration SET password = '". $newPassword."' WHERE id = " . $id;
  $update = $conn->query($setPass);
  if (!$conn->affected_rows) {
    echo '<script>alert("Solicitud fallida, intente más tarde")</script>';
    echo "<script>setTimeout(\"location.href = 'recover_account.php';\",100)</script>";  
  }
  
  $conn->close();
  echo '<script>alert("Se ha enviado una contraseña de acceso a tu email")</script>';
  echo "<script>setTimeout(\"location.href = '/';\",100)</script>";
  exit;
}

