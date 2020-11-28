<?php
include"db.php";

$qid=$_POST['qid'];
$action=$_POST['action'];

$answer=mysqli_real_escape_string($conn, $_POST['answer']);

	$query="select * from chats where chat_status='0' AND id='$qid'";
    $res=mysqli_query($conn,$query);
    while ($result=mysqli_fetch_array($res)) {
      $question=$result['user'];
    }
      
  if($action=='text'){
 
    $query1="insert into question(question,answer,action)values('$question','$answer','text')";
 
    $res1=mysqli_query($conn,$query1);
 
      if($res1=='1'){
 
        $query2="update chats set chat_status = 1 where id='$qid'";
        $res2=mysqli_query($conn,$query2);
        
        echo"<script>setTimeout(\"location.href = 'ehome.php';\",00);</script>";
    }
  }else{
 
    $query1="insert into question(question,answer,action)values('$question','$answer','query')";
 
    $res1=mysqli_query($conn,$query1);
 
      if($res1=='1'){
 
        $query2="update chats set chat_status = 1 where id='$qid'";
        $res2=mysqli_query($conn,$query2);
        
        echo"<script>setTimeout(\"location.href = 'ehome.php';\",00);</script>";
    }
  } 
?>
