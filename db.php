<!--Devloped By PHPGURU-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cargo";
// Create connection

date_default_timezone_set('Asia/Calcutta');
$server_time = date('Y-m-d H:i:s');

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	//echo 'Connected ....';
}
?>
<!--Devloped By PHPGURU-->