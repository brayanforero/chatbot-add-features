<?php
include"db.php";

$id=$_POST['question_id'];

$query2="update chats set chat_status = 1 where id='$id'";
$res2=mysqli_query($conn,$query2);

?>