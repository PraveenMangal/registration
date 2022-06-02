<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	$_SESSION['error_msg'] = "Please contact system admin => ". mysqli_connect_error();
	header('Location: http://localhost/registration');
	exit();
}

?>