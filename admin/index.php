<?php
session_start();
unset($_SESSION['SESS_ID']);
ob_start();
require "db.php";
$flag=0;
$msg="";

if(isset($_POST['username']) && isset($_POST['password']))
{

    $sql1 = " SELECT * FROM admin WHERE username like '".$_POST['username']."'  AND (password like '".$_POST['password']."')";
    $result1 = $conn->query($sql1);
    $c=$result1->num_rows;


    if($c>0)
    {
        $row = $result1->fetch_assoc();
       $_SESSION['SESS_ID']= $row['id'];
        echo "<script>setTimeout(\"location.href = 'ehome.php';\",00);</script>";
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Username or Password Incorrect, Please try again")';
        echo '</script>';
      
    }
}       
ob_end_flush();
flush();
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Omar Jojoa</title>
<meta name="description" content="" />
<meta name="keywords" content="admin, admin dashboard, admin template" />
<meta name="author" content="SRGIT"/>
<!-- Favicon -->
<link rel="shortcut icon" href="plugins/assets/img/favicon/php_guru_png.png">
<link rel="icon" href="plugins/assets/img/favicon/php_guru_png.png" type="image/x-icon">
<!-- Custom CSS -->
<link href="plugins/assets/css/default.css" rel="stylesheet" type="text/css">
</head>
<body class="login-sidebar-background">
<!-- Preloader -->
<div class="preloader-it">
  <div class="preloader">
    <div class="circles-1">
      <div class="circles-1-center"></div>
      <div class="circles-1"></div>
      <div class="circles-1"></div>
      <div class="circles-1"></div>
      <div class="circles-1"></div>
      <div class="circles-1"></div>
      <div class="circles-1"></div>
    </div>
  </div>
</div>
<!-- //Preloader -->

<section id="wrapper" class="login-register login-sidebar">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-5 text-center parallax-fade-top subscribe-bg">
                    <div id="error_employee_id"></div>

        <div class="main-title on-dark text-center mb-0"> <a href="" class="text-center db"><img src="plugins/assets/img/php_guru_png1.png" alt="Home" /><br/>
          <span class="brand-text"> Omar Jojoa</span> </a>
          <div class="main-subtitle-bottom smaller mt-10">Panel de administrador</div>
        </div>
        <form class="form-horizontal form-material" id="loginform" method="post">
          <div class="form-group mt-20">
            <div class="col-xs-12">
              <div class="input-group"> <span class="input-group-addon b-0  bg-primary" id="basic-addon4"><i class="mdi mdi-account"></i></span>
                <input type="text" name="username" class="form-control form-control-uppercase" placeholder="nombre de usuario" required>
              </div>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <div class="input-group"> <span class="input-group-addon b-0  bg-primary" id="basic-addon4"><i class="mdi mdi-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="contraseña" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <div class="checkbox checkbox-primary"> <span class="pull-left">
                <input name="remember" id="remember" type="checkbox">
                <label for="checkbox-signup">RECUÉRDAME</label>
                </span> <a href="#" data-toggle="modal" class="pull-right"><i class="mdi mdi-lock"></i> Olvidaste tu contraseña?</a> </div>


            </div>
          </div>
          <div class="form-group text-center mt-20">
            <div class="col-xs-12">
              <button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Iniciar sesión</button>
            </div>
          </div>


        </form>

            
        </div>
        <div class="col-md-9 col-xs-12">
         <div class="card-body b-l calender-sidebar">
          <div id="calendar"></div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
</div>

      </div>
    </div>
  </div>
  </div>
</section>
                    
            

<script src="plugins/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="plugins/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/assets/js/jquery.slimscroll.js"></script>
<script src="plugins/assets/js/init.js"></script>
</body>
</html>
