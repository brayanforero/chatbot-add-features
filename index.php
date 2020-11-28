<?php include"db.php";?>
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
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
	</head>
	<body>

    <!-- Header
    ================================================= -->
		<header id="header-inverse">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/logoz.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
            </ul>
            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
    
    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h2 class="text-white">Bienvenidos amigos y amigas de Tecnologia Informatica INCAUCA S.A</h2>
                <h3 class="text-white">Soy tu asistente virtual Chatbots Cañitas</h3>
            	<p>Este es un Software de Inteligencia Artificial Chatbots, para mostrarlo  a la empresa mencionada de como, el usuario va aver videos relacionado con cualquier tematica o area al fin que de informacion, en este caso subo un video de propiedad autor Omar Jojoa, subido a youtube solo como simulacion.
               <br/><br/> Muchas gracias <br /> <br /> </p>
               
              
            
       
            </div>
          </div>
          
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
            
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#register" data-toggle="tab">Regístrate</a></li>
                  <li><a href="#login" data-toggle="tab">Iniciar sesión</a></li>
                </ul><!--Tabs End-->
              </div>
              
              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane active" id="register">
                  <h3>Regístrate ahora !!!</h3>
                  <p class="text-muted">Al ingresar a este software autorizo confidencialmente mis datos personales de acuerdo con la politica de tratamiento de lo mencionado</p>
                  
                  <!--Register Form-->
                  <form name="registration_form" action="register.php" method="post" id='registration_form' class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">Nombre de pila</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Ingrese el nombre" placeholder="Nombre de pila" oninvalid="this.setCustomValidity('Ingrese el nombre')" oninput="setCustomValidity('')"
                        onkeyup="lettersOnly(this)" required="" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Apellido</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Introduzca el apellido" placeholder="Apellido" oninvalid="this.setCustomValidity('Introduzca el apellido')" oninput="setCustomValidity('')" onkeyup="lettersOnly(this)" required="" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="mobile" class="sr-only">No móviles</label>
                        <input id="mobile" class="form-control input-group-lg" type="text" name="mobile_no" title="Ingrese el número de celular" placeholder="Tu móvil No" maxlength="10" onkeyup="digitsOnly(this)" oninvalid="this.setCustomValidity('Ingrese el número de celular')" oninput="setCustomValidity('')" required="" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" class="form-control input-group-lg" type="email" name="Email" title="Enter Email" placeholder="Tu Email" oninvalid="this.setCustomValidity('Enter Email')" oninput="setCustomValidity('')" required="" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Contraseña</label>
                        <input id="password" class="form-control input-group-lg" type="password" name="password" title="Introducir la contraseña" placeholder="Contraseña" oninvalid="this.setCustomValidity('Introducir la contraseña')" oninput="setCustomValidity('')" required="" />
                      </div>
                    </div>
                    <div class="row">
                      <p class="birth"><strong>Fecha de nacimiento</strong></p>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="day" name="day" required>
                          <option value="Day" disabled selected>Día</option>
                          <option value="01">1</option>
                          <option value="02">2</option>
                          <option value="03">3</option>
                          <option value="04">4</option>
                          <option value="05">5</option>
                          <option value="06">6</option>
                          <option value="07">7</option>
                          <option value="08">8</option>
                          <option value="09">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="month" name="month" required>
                          <option value="month" disabled selected>Mes</option>
                          <option value="01">Ener</option>
                          <option value="02">Feb</option>
                          <option value="03">Mar</option>
                          <option value="04">Abril</option>
                          <option value="05">May</option>
                          <option value="06">Jun</option>
                          <option value="07">Jul</option>
                          <option value="08">Agos</option>
                          <option value="09">Sep</option>
                          <option value="10">Oct</option>
                          <option value="11">Nov</option>
                          <option value="12">Dic</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select class="form-control" id="year" name="year" required>
                          <option value="year" disabled selected>Año</option>

                          <option value="1900">1970</option>
                          <option value="1991">1973</option>
                          <option value="1992">1974</option>
                          <option value="1993">1975</option>
                          <option value="1994">1976</option>
                          <option value="1995">1977</option>
                          <option value="1996">1978</option>
                          <option value="1997">1980</option>
                          <option value="1998">1988</option>
                          <option value="1999">1986</option>
                          <option value="2000">1987</option>
                          <option value="2001">1989</option>
                          <option value="1900">1900</option>
                          <option value="1991">1991</option>
                          <option value="1992">1992</option>
                          <option value="1993">1993</option>
                          <option value="1994">1994</option>
                          <option value="1995">1995</option>
                          <option value="1996">1996</option>
                          <option value="1997">1997</option>
                          <option value="1998">1998</option>
                          <option value="1999">1999</option>
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002</option>
                          <option value="2003">2003</option>
                          <option value="2004">2004</option>
                          <option value="2005">2005</option>
                          <option value="2006">2006</option>
                          <option value="2007">2007</option>
                          <option value="2008">2008</option>
                          <option value="2009">2009</option>
                          <option value="2010">2010</option>
                          <option value="2011">2011</option>
                          <option value="2012">2012</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio" name="optradio" value="masculina" checked>Masculino
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio" value="hembra">Femenino
                      </label>
                    </div>
                    
                    <div class="row">
                      
                      <div class="form-group col-xs-6">
                        <label for="country" class="sr-only"></label>
                        <select class="form-control" name="country" onChange="getID(this.value);" required="">
                          <option value="country" disabled selected>País</option>
                          <?php
                            $sql = "SELECT * FROM `countries`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                              while($row = $result->fetch_assoc())
                              {
                          ?>
                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
                        <?php
                            }
                        ?>
                        </select>
                      </div>

                      
                    </div>
                 
                    

                  <p><a href="#login" data-toggle="tab">Ya tienes una cuenta?</a></p>
                  <button type="submit" name="register" class="btn btn-primary">Regístrate ahora</button>
                   </form><!--Register Now Form Ends-->

                </div><!--Registration Form Contents Ends-->
                
                <!--Login-->
                <div class="tab-pane" id="login">
                  <h3>Iniciar sesión</h3>
                  <p class="text-muted">Ingrese a su cuenta</p>
                  <br/>
                  <!--Login Form-->
                  <form action="login.php" method="post" name="Login_form" id='Login_form'>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-email" class="sr-only">Email</label>
                        <input id="my-email" class="form-control input-group-lg" 
                        value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" type="text" name="login_email" title="entrar Email" placeholder="Tu Email" autocomplete="off" required=""/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Contraseña</label>
                        <input id="my-password" class="form-control input-group-lg"
                        value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" autocomplete="off" type="password" name="login_password" title="entrar Contraseña" placeholder="Contraseña" required="" />
                      </div>
                    </div>
                

                  <p><a href="recover_account.php">Se te olvidó tu contraseña?</a></p>
                  <button class="btn btn-primary" type="submit" name="login">Inicia sesión ahora</button>
                </form><!--Login Form Ends--> 

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
          
            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
   

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
    
    <script type="text/javascript">
    
      function go_watch(){
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
