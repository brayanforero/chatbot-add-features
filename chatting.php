<?php
include "auth1.php";
include "db.php";
$userid=$_SESSION['SESS_MEMBER_ID'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OMAR JOJOA Chatbot" />
    <meta name="keywords" content="PHP, OMAR JOJOA, chatbot,PHP chatbot" />
    <meta name="robots" content="index, follow" />
    <title>OMAR JOJOA| Chatbot</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery.scrollbar.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  </head>
  <body>

    <!-- Header
    ================================================= -->
    <header id="header">
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
            <a class="navbar-brand" href="chatting.php"><label class="text-white">CAÑITAS| Chatbot</label></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="chatting.php">Tecnologia Informatica Incauca</a></li>
             
              <li class="dropdown"><a href="logout.php">Cerrar sesión</a></li>
            </ul>
            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div id="page-contents">
      <div class="container">
        <div class="row">

         
          <div class="col-md-12">

           
            <!-- Chat Room
            ================================================= -->
            <div class="chat-room">
              <div  class="row">
                <div class="col-md-4">

                  <?php 

                   $qa=mysqli_query($conn,"select * from user_registration where id='$userid'");
                    while($r1x =mysqli_fetch_array($qa))
                      { 
                        $id=$r1x['id'];
                        $username=$r1x['full_name'];
                      } 
                  ?>      

                  <!-- Contact List in Left-->
                  <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
                    <li class="active">
                      <a href="#contact-1" data-toggle="tab">
                        <div class="contact">
                          <img src="img/usuario.png" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6><?php echo $username;?></h6>
                            <p class="text-muted">Bienvenido(da)</p>
                            <small class="text-muted">Hace un minuto</small>

                            <!-- <div class="chat-alert">1</div> -->
                          </div>
                        </div>
                      </a>
                    </li>
                    
                   
                  </ul><!--Contact List in Left End-->

                </div>


                  <input type="hidden" value="<?php echo $userid;?>" id="userid">

                  <button type="button" onclick="clear_msg()" class="btn btn-success pull-right">Reiniciar</button>

<span id="ref">

                <div class="col-md-8">

                  <!--Chat Messages in Right-->
                  <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
                    <div class="tab-pane active" id="contact-1">
                      <div class="chat-body">
                        <ul class="chat-message">
                          
                          <?php 
                            $query="select * from chats where userid='$userid' AND delete_msg='0' ORDER by date DESC";
                            $res=mysqli_query($conn,$query);
                            while($data=mysqli_fetch_array($res)){
                              $user=$data['user'];
                              $chatbot=$data['chatbot'];
                              $date=$data['date'];
                              $timestamp = strtotime($date);
                         
                              $action=$data['action'];

                                $child1 = date('n.j.Y', $timestamp); // d.m.YYYY
                                $child2 = date('g:i a', $timestamp); // HH:ss
                            ?>

                        <?php if($action=='text'){ ?>

                          <li class="left">

                            <div class="chat-item">
                              <div class="chat-item-header">
                                <h5><?php echo $username;?></h5>
                                <small class="text-muted"><?php echo $child2;?></small>
                              </div>
                              <p><?php echo $user;?></p>
                            </div>
                          </li>
                          
                          <li class="right">
                            <img src="img/robot.png" alt="" class="profile-photo-sm pull-right" />
                            <div class="chat-item">
                              <div class="chat-item-header">
                                <h5>Chatbot</h5>
                                <small class="text-muted"><?php echo $child2;?></small>
                              </div>
                              <p><?php echo $chatbot;?></p>
                            </div>
                          </li>
                         
                        <?php }else{ ?>
                

                          <li class="left">
                            <img src="" alt="" class="profile-photo-sm pull-left" />
                            <div class="chat-item">
                              <div class="chat-item-header">
                                <h5><?php echo $username;?></h5>
                                <small class="text-muted"><?php echo $child2;?></small>
                              </div>
                              <p><?php echo $user;?></p>
                            </div>
                          </li>
                          
                          <li class="right">
                            <img src="img/robot.png" alt="" class="profile-photo-sm pull-right" />
                            <div class="chat-item">
                              <div class="chat-item-header">
                                <h5>Chatbot</h5>
                                <small class="text-muted"><?php echo $child2;?></small>
                              </div>
                              <p><?php eval($chatbot);?></p>
                            </div>
                          </li>



                        <?php } } ?> 


                        </ul>
                      </div>
                    </div>
                   
                  </div><!--Chat Messages in Right End-->
                 
                  
            
    
                  <div class="send-message">
                    <div class="input-group">

                 
                  
                      <input type="text" class="form-control" placeholder="Escribe tu mensaje"
                      id="msg" >

  

                  
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="send()">Enviar</button

                      </span>
                      
                    

                    </div>
                  </div>
                </div>

              </span>

                <div class="clearfix"></div>

              </div>
            </div>
          </div>

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
          
        </div>
      </div>
    </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="footer-wrapper">
            
            
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>2020 Colombia | Todos los derechos reservados | Omar Alberto Jojoa - SENA</p>
      </div>
    </footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
  
    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>



    <script type="text/javascript">
  function send(){
    var text=$('#msg').val().toLowerCase();
     var userid=document.getElementById('userid').value;
    
    //alert(text);
    //alert(userid);
     $.ajax({
                type:"post",
                url:"mysearch.php",
                data:{text:text,userid:userid},
                success:function(data){
                    //alert(data);
                    $('#ref').load(' #ref');
                }
      });
  }

  function clear_msg(){
     var userid=document.getElementById('userid').value;

      $.ajax({
                type:"post",
                url:"delete_msg.php",
                data:{userid:userid},
                success:function(data){
                    //alert(data);
                    $('#ref').load(' #ref');
                }
      });
  }
</script>

  </body>
</html>
