<!--Devloped By PHPGURU-->
<?php
//error_reporting(0);
error_reporting(E_ALL);
ini_set("display_errors", 1);
define('TIMEZONE', 'Asia/Kolkata');
date_default_timezone_set(TIMEZONE);
$server_time=date("Y-m-d H:i:s");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "upload";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	// /echo 'Connected ....';
}
?>
<!--Devloped By PHPGURU-->
