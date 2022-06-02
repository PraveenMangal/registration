<?php
require_once "/xampp/htdocs/registration/db_connect.php";

if (isset($_POST['submit']) and $_POST['submit'] == 'Sign In') {

	$sql = "SELECT 1 FROM `user_detail` WHERE `email` = '" . $_POST['email'] . "' AND `password` = '" . $_POST['password'] . "'";

	$result = mysqli_query($conn, $sql);


	if (!$result) {
		$_SESSION['error_msg'] = "Please contact system admin => " . mysqli_error($conn);
		header('Location: http://localhost/registration');
		exit();
	}

	if (mysqli_num_rows($result) == 0) {
		$_SESSION['error_msg'] = "Either Email or Password is incorrect";
		header('Location: http://localhost/registration');
		exit();
	}

	if (mysqli_num_rows($result) > 0) {
		$_SESSION['success_msg'] = "Login Successfully";
		header('Location: http://localhost/registration/dashboard.php');
		exit();
	}

}


// mysqli_close($conn);
