<?php
session_start();
unset($_SESSION['SESS_MEMBER_ID']);
ob_start();
require "db.php";

$flag=0;
$msg="";
if(isset($_POST['login_email']) && isset($_POST['login_password']))
{
    $sql1 = " SELECT * FROM user_registration
              WHERE
              email like '".$_POST['login_email']."'  AND
              password like '".$_POST['login_password']."' ";

    $result1 = $conn->query($sql1);
    $c=$result1->num_rows;

   if(isset($_POST['remember']))
     {
        setcookie ("member_login",$_POST["login_email"],time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("member_password",$_POST["login_password"],time()+ (10 * 365 * 24 * 60 * 60));
     }
     if(!isset($_POST['remember']))
     {
        $past = time() - 100;
        setcookie ("member_login"," ",$past);
        setcookie ("member_password"," ",$past);
     }

    if($c>0)
    {
        $row = $result1->fetch_assoc();
        $_SESSION['SESS_MEMBER_ID']= $row['id'];
       // $_SESSION['admin']= $row['id'];
        $_SESSION['full_name']= $row['full_name'];
        echo "<script>setTimeout(\"location.href = 'chatting.php';\",00);</script>";
      //header("Location:home.php");
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Email or Contraseña Incorrecta, Inténtalo de nuevo")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'index.php';\",00);</script>";

       if(isset($_COOKIE["member_login"]))
        {
          setcookie ("member_login","");
        }
        if(isset($_COOKIE["member_password"]))
        {
          setcookie ("member_password","");
        }
    }
}
ob_end_flush();
flush();
?>