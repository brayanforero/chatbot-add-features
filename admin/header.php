<?php require "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OMAR</title>
<meta name="description" content="" />
<meta name="keywords" content="PHP GURU" />
<meta name="author" content="PHP GURU"/>
<link rel="shortcut icon" href="../admin/plugins/assets/img/favicon/php_guru_png.png">
<link rel="icon" href="../admin/plugins/assets/img/favicon/php_guru_png.png" type="image/x-icon">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<link href="../admin/plugins/assets/css/default.css" rel="stylesheet" type="text/css">


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
</head>
<?php
     $idq=$_SESSION['SESS_EMP_ID'];

?>
<body>
   <input type="hidden" name='eid' id="eid" value="<?php echo $idq;?>">

  <div class="wrapper light-theme">
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="mobile-only-brand pull-left">
        <div class="nav-header pull-left">
          <div class="logo-wrap"> <a href="index.html"> <img class="brand-img" src="plugins/assets/img/php_guru_png1.png" alt="brand"/> <span class="brand-text"><span>OMAR</strong></span> </a> </div>
        </div>
        <a id="toggle-btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="mdi mdi-format-list-bulleted"></i></a> <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="mdi mdi-search"></i></a> <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="mdi mdi-more"></i></a>

      </div>
      <div id="mobile_right_sidebar" class="mobile-right-sidebar pull-right">
        <ul class="nav navbar-right top-nav pull-right">
          
          <li class="dropdown auth-drp"> <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="profile_pic/default.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
            <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
             

             <!--  <li class="divider"></li> -->
              <li> <a href="logout.php"><i class="mdi mdi-power"></i><span>Cerrar sesión</span></a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div class="fixed-sidebar-left">
      <ul class="nav navbar-nav side-nav nicescroll-bar">
          <?php $get_page_name=basename($_SERVER['PHP_SELF']); ?>
          <li class="navigation-header"> <span>Main</span> <i class="mdi mdi-more"></i> </li>
          <li> <a <?php if ( $get_page_name=="ehome.php") { echo 'class="active-page"'; } else { } ?> href="ehome.php" data-toggle="collapse" data-target="#admin-dash">
            <div class="pull-left"><i class="mdi mdi-apps mr-20"></i><span class="right-nav-text">Tablero</span></div>


            <div class="pull-right"></div>
            <div class="clearfix"></div>
            </a>
          </li>

      </ul>

      </div>
      <div class="fixed-sidebar-right">

          
        </div>
        <div class="page-wrapper"> <!-- div closed in footer.php reference code:  1 -->
          <div class="container-fluid pt-25">
