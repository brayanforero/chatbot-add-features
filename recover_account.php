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

  <div class="container">
    <section class="row">
      <div class="col-md-6">
        <form method="POST" action="recover_user.php" class="card">
          <div class="card-header">
            <h1>Recupera tu Cuenta</h1>
          </div>
          <div class="card-body">
            <div class="form-group">
              <input name="email" class="form-control" placeholder="Ingresa tu email" type="email" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Recuperar</button>
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
