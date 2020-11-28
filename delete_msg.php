<?php
include"db.php";
   
if(isset($_POST['userid'])){

$userid=$_POST['userid'];

$query=mysqli_query($conn,"UPDATE chats SET delete_msg='1' where userid= '$userid' ");


}	
?>