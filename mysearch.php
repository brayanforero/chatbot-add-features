<?php
include"db.php";
   
if(isset($_POST['text'])){

$userid=$_POST['userid'];
$msg=mysqli_real_escape_string($conn,$_POST["text"]);

//$query=mysqli_query($conn,"SELECT * FROM question WHERE question RLIKE '[[:<:]]".$msg."[[:>:]]'");
$query=mysqli_query($conn,"SELECT * FROM question WHERE question= '".$msg."' LIMIT 1");
$count = mysqli_num_rows($query);

    if($count=="0"){
		
		$data = "lo siento pero no tengo muy claro como ayudarte";
		$query4=mysqli_query($conn,"insert into chats(userid,user,chatbot,action,chat_status,date)values('$userid','$msg','$data','text','0','$server_time')");
		
	}else{
		while($row = mysqli_fetch_array($query)){
				
				$data= $row['answer'];
				$action=$row['action'];
				
				$query4=mysqli_query($conn,"insert into chats(userid,user,chatbot,action,chat_status,date)values('$userid','$msg','$data','$action','1','$server_time')");
			}
		}
}	
?>