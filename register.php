<!--Devloped By PHPGURU-->
<?php
include"db.php";

if(isset($_POST['register']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];

    $fullname=$firstname." ".$lastname;

    $email=$_POST['Email'];
    $password=$_POST['password'];

    $mobile_no=$_POST['mobile_no'];

    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    
    $dob=$year."-".$month."-".$day;

    $gender=$_POST['optradio'];
    $country=$_POST['country'];


     $sql1 = "SELECT * FROM user_registration 
           WHERE 
           email = '".$email."'   or 
           mobile_number   = '".$mobile_no."'";
  
      $result1 = $conn->query($sql1);
      
      if ($result1->num_rows > 0 ) 
      {
        echo '<script language="javascript">';
        echo 'alert("Email o el número de teléfono ya existe, Utilice otro correo electrónico y teléfono")';
        echo '</script>';
        
        echo "<script>setTimeout(\"location.href = 'index.php';\",100)</script>";
      }
      else{

        $query4=mysqli_query($conn,"insert into user_registration(full_name,dob,mobile_number,email,password,gender,country,created_date)values('$fullname','$dob','$mobile_no','$email','$password','$gender','$country','$server_time')");

            echo '<script language="javascript">';
            echo 'alert("Su cuenta se creó correctamente...")';
            echo '</script>';
                            
            echo "<script>setTimeout(\"location.href = 'index.php';\",00);</script>";

         
    }
}

?>
<!--Devloped By PHPGURU-->